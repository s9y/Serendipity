<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_responsiveimages extends serendipity_event
{
    var $title = PLUGIN_EVENT_RESPONSIVE_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_RESPONSIVE_NAME);
        $propbag->add('description',   PLUGIN_EVENT_RESPONSIVE_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '0.2');
        $propbag->add('requirements',  array(
            'serendipity' => '2.2',
        ));
        $propbag->add('cachable_events', array('frontend_display' => true));
        $propbag->add('event_hooks', array('frontend_display' => true,
                                           'backend_media_makethumb' => true
                                        ));
        $propbag->add('groups', array('MARKUP'));

        $this->markup_elements = array(
            array(
              'name'     => 'ENTRY_BODY',
              'element'  => 'body',
            ),
            array(
              'name'     => 'EXTENDED_BODY',
              'element'  => 'extended',
            )
        );

        $conf_array = array();
        foreach($this->markup_elements as $element) {
            $conf_array[] = $element['name'];
        }
        $propbag->add('configuration', $conf_array);
    }

    function install()
    {
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function uninstall(&$propbag)
    {
        serendipity_plugin_api::hook_event('backend_cache_purge', $this->title);
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function generate_content(&$title)
    {
        $title = $this->title;
    }

    function introspect_config_item($name, &$propbag)
    {
        $propbag->add('type',        'boolean');
        $propbag->add('name',        constant($name));
        $propbag->add('description', sprintf(APPLY_MARKUP_TO, constant($name)));
        $propbag->add('default', 'true');
        return true;
    }

    function event_hook($event, &$bag, &$eventData, $addData = null)
    {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {

            switch($event) {

                case 'frontend_display':
                    foreach ($this->markup_elements as $temp) {
                        if (serendipity_db_bool($this->get_config($temp['name'], true)) && isset($eventData[$temp['element']]) &&
                            !$eventData['properties']['ep_disable_markup_' . $this->instance] &&
                            !isset($serendipity['POST']['properties']['disable_markup_' . $this->instance])) {
                            $element = $temp['element'];
                            $eventData[$element] = $this->_responsive_markup($eventData[$element]);
                        }
                    }
                    break;

                case 'backend_media_makethumb':
                    echo $addData;
                    // $eventData is usually defined as:
                    // array(array(
                    //        'thumbSize' => $serendipity['thumbSize'],
                    //        'thumb'     => $serendipity['thumbSuffix']
                    // ));
                    // We now just need to add the additional array elements, with the new sizes and suffix.
                    // We can use $addData, containing the path to the full size file, to get the starting width
                    $origSize = serendipity_getimagesize($addData);
                    $eventData[] = array(
                                        'thumbSize' => ['width' => $origSize[0] * 3 / 4, 'height' => $origSize[1] * 3 / 4],
                                        'thumb' => '3X.' . $serendipity['thumbSuffix']
                                    );

                    $eventData[] = array(
                                        'thumbSize' => ['width' => $origSize[0] / 2, 'height' => $origSize[1] / 2],
                                        'thumb' => '2X.' . $serendipity['thumbSuffix']
                                    );

                    $eventData[] = array(
                                        'thumbSize' => ['width' => $origSize[0] / 4, 'height' => $origSize[1] / 4],
                                        'thumb' => '1X.' . $serendipity['thumbSuffix'] 
                                    );
                    if ($serendipity['thumbConstraint'] == 'width' || ($serendipity['thumbConstraint'] == 'largest' && $origSize[0] > $origSize[1]) ) {
                        $ratio = $serendipity['thumbSize'] / $origSize[0];
                        $thumbnailWidth = $serendipity['thumbSize'];
                    } else {
                        // the thumbnail will be scaled based on its height
                        $ratio = $serendipity['thumbSize'] / $origSize[1];
                        $thumbnailWidth = $origSize[0] * $ratio;
                    }
                        
                    $eventData[] = array(
                                        'thumbSize' => ['width' => $thumbnailWidth / 2, 'height' => ($origSize[1] * $ratio) / 2],
                                        'thumb' => 'halfThumbnail.' . $serendipity['thumbSuffix'] 
                                    );
                    break;
                default:
                    return false;

            }
            return true;
        } else {
            return false;
        }
    }

    /* Given an entry text, replace each image linked to the ML with an img element containing
     * an srcset. TODO: Which sizes to create depends on the theme settings, if none are set
     * use a sound default (original=4x, 3x, 2x, 1x, default thumbnail, half thumbnail)
     * */
    function _responsive_markup($text)
    {
        preg_match_all('@<!-- s9ymdb:(?<id>\d+) -->@', $text, $matches);

        foreach ($matches['id'] as $imgId) {
            preg_match('@<!-- s9ymdb:\d+ --><img[^>]+width=["\'](\d+)["\']@', $text, $matches);
            if ($matches[1]) {
                $srcset = $this->createSrcset($imgId, $matches[1]);
            } else {
                $srcset = $this->createSrcset($imgId);
            }
            $text = preg_replace("@(<!-- s9ymdb:$imgId -->.*)src=@", "$1 $srcset src=", $text);
        }

        return $text;
    }

    /* Given an id for a image in the ML, create an srcset using smaller thumbnail images and their width.
     * Don't worry over thumbnail creation here, that's done on image upload and thumbnail creation.
     * */
    function createSrcset($id, $maxWidth = 20000) {
        global $serendipity;
        
        $imgBase = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'];
        $origImage = serendipity_fetchImageFromDatabase($id);
        $extension = $origImage['extension'];
        
        $width4X = $origImage['dimensions_width'];
        $path4X = $imgBase . $origImage['realname'];
        
        $width3X = $width4X * 3 / 4;
        $path3X = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".3X.{$serendipity['thumbSuffix']}.$extension";
        
        $width2X = $width4X / 2;
        $path2X = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".2X.{$serendipity['thumbSuffix']}.$extension";
        
        $width1X = $width4X / 4;
        $path1X = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".1X.{$serendipity['thumbSuffix']}.$extension";

        $thumbnailPath = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".{$serendipity['thumbSuffix']}.$extension";
        $widthThumbnail = serendipity_getimagesize($thumbnailPath)[0];
        $thumbnail = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".{$serendipity['thumbSuffix']}.$extension";

        $widthHalfThumbnail = $widthThumbnail / 2;
        $halfThumbnail = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".halfThumbnail.{$serendipity['thumbSuffix']}.$extension";
        
        $srcset = "srcset='";
        if ($width4X <= $maxWidth) {
            $srcset .= "$path4X {$width4X}w,";
        }

        if ($width3X <= $maxWidth) {
            $srcset .= "$path3X {$width3X}w,";
        }
        
        if ($width2X <= $maxWidth) {
            $srcset .= "$path2X {$width2X}w,";
        }
        
        if ($width1X <= $maxWidth) {
            $srcset .= "$path1X {$width1X}w,";
        }
        $srcset .= "$thumbnail {$widthThumbnail}w, $halfThumbnail {$widthHalfThumbnail}w'";
        
        return  $srcset;
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>