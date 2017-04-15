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
        $propbag->add('version',       '0.1');
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
                    print_r( $origSize);
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
                    print_r($eventData);
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
     * use a sound default (original=4x, 3x, 2x, 1x)
     * */
    function _responsive_markup($text)
    {
        preg_match_all('@<!-- s9ymdb:(?<id>.*) -->@', $text, $matches);

        foreach ($matches['id'] as $imgId) {
            $srcset = $this->createSrcset($imgId);
            $text = preg_replace("@(<!-- s9ymdb:$imgId -->.*)src=@", "$1 $srcset src=", $text);
        }

        return $text;
    }

    /* Given an id for a image in the ML, create an srcset using smaller thumbnail images and their width.
     * Don't worry over thumbnail creation here, do that on image upload and thumbnail creation (TODO).
     * */
    function createSrcset($id) {
        global $serendipity;
        
        $imgBase = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'];
        $origImage = serendipity_fetchImageFromDatabase($id);
        $extension = $origImage['extension'];
        
        $width4X = $origImage['dimensions_width'];
        $path4X = $imgBase . $origImage['realname'];
        
        $width3X = $width4X * 3 / 4;
        // TODO: Use a core function to create thumbnail name
        $path3X = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".3X.serendipityThumb.$extension";
        
        $width2X = $width4X / 2;
        $path2X = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".2X.serendipityThumb.$extension";
        
        $width1X = $width4X / 4;
        $path1X = $imgBase . preg_replace("@.$extension\z@", '', $origImage['realname']) . ".1X.serendipityThumb.$extension";

        return "srcset='$path4X {$width4X}w, $path3X {$width3X}w, $path2X {$width2X}w, $path1X {$width1X}w' sizes='(min-width: 1600px) 100vw, (min-width: 900px) 66vw, (min-width: 600px) 33vw, 200px'";
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>