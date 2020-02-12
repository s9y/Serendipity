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
        $propbag->add('version',       '0.5.1');
        $propbag->add('requirements',  array(
            'serendipity' => '2.2',
        ));
        $propbag->add('cachable_events', array('frontend_display' => true));
        $propbag->add('event_hooks', array('frontend_display' => true,
                                           'backend_media_makethumb' => true,
                                           'frontend_display:unknown:per-entry' => true,
                                           'frontend_display:opml-1.0:per_entry' => true,
                                           'frontend_display:rss-0.91:per_entry' => true,
                                           'frontend_display:rss-1.0:per_entry' => true,
                                           'frontend_display:rss-2.0:per_entry' => true,
                                           'frontend_display:atom-0.3:per_entry' => true,
                                           'frontend_display:atom-1.0:per_entry' => true,
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
        if (!is_object($serendipity['smarty'])) {
            serendipity_smarty_init(); // if not set to avoid member function assign() on a non-object error, start Smarty templating
        }
        $this->breakpoints = $serendipity['smarty']->getTemplateVars('template_option')['breakpoints'];
        if (! $this->breakpoints) {
            $this->breakpoints = [1600, 1200, 600]; # This can be overwritten by the theme
        }
        $this->thumbWidths = [1200, 800, 400];

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
                    // $eventData is usually defined as:
                    // array(array(
                    //        'thumbSize' => $serendipity['thumbSize'],
                    //        'thumb'     => $serendipity['thumbSuffix']
                    // ));
                    // We now just need to add the additional array elements, with the new sizes and suffix.
                    // We can use $addData, containing the path to the full size file, to get the starting width
                    $origSize = serendipity_getimagesize($addData);

                    for ($i = 0; $i < count($this->thumbWidths); $i++) {
                        $thumbWidth = $this->thumbWidths[$i];
                        if ($thumbWidth < $origSize[0]) {
                            $eventData[] = array(
                                        'thumbSize' => ['width' => $thumbWidth, 'height' => $origSize[1] * ($thumbWidth / $origSize[0])],
                                        'thumb' => $thumbWidth . 'W.' . $serendipity['thumbSuffix']
                                    );
                        }
                    }
                    
                    break;
                case 'frontend_display:unknown:per-entry':
                case 'frontend_display:opml-1.0:per_entry':
                case 'frontend_display:rss-0.91:per_entry':
                case 'frontend_display:rss-1.0:per_entry':
                case 'frontend_display:rss-2.0:per_entry':
                case 'frontend_display:atom-0.3:per_entry':
                case 'frontend_display:atom-1.0:per_entry':
                    // We need to rewrite relative srcsets to absolute urls in the RSS feed, otherwise images won't be shown
                    $pattern = '@srcset=(["\'][^"\']+)@i';
                    $eventData['feed_body'] = preg_replace_callback($pattern, function($matches) {
                            global $serendipity;
                            $matches[1] = str_ireplace('"' . $serendipity['serendipityHTTPPath'], '"' . $serendipity['baseURL'], $matches[1]);
                            $matches[1] = str_ireplace(',' . $serendipity['serendipityHTTPPath'], ',' . $serendipity['baseURL'], $matches[1]);
                            return 'srcset=' . $matches[1];
                        },  $eventData['feed_body']);
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
     * an srcset.
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

            $callback = function($matches) use ($srcset) {
                if (strpos($matches[1],  "srcset") === false) {
                    // the image has not yet an srcset, at least at the position where we insert it normally
                    return "{$matches[1]} $srcset src=";
                } else {
                    return "{$matches[1]} src=";
                }
            };
            
            $text = preg_replace_callback("@(<!-- s9ymdb:$imgId -->.*?)src=@", $callback, $text);
        }

        return $text;
    }

    /* Given an id for a image in the ML, create an srcset using smaller thumbnail images and their width.
     * Don't worry over thumbnail creation here, that's done on image upload and thumbnail creation.
     * */
    function createSrcset($id, $maxWidth = 20000) {
        global $serendipity;
        
        $origImage = serendipity_fetchImageFromDatabase($id);
        $imagePath = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $origImage['path'] . $origImage['realname'];
        
        $thumbnails = serendipity_getThumbnails($id);

        $srcset = "srcset=\"$imagePath {$origImage['dimensions_width']}w,";
        if ($origImage['dimensions_width'] <= $this->breakpoints[0]) {
            // don't set the original image as srcset source if its breakpoint would be too small
            $srcset = 'srcset="';
        }
        
        for ($i = 0; $i < count($this->thumbWidths); $i++) {
            $thumbWidth = $this->thumbWidths[$i];
            $matchedThumbnail = false;
            foreach ($thumbnails as $thumbnail) {
                if (strpos($thumbnail, $thumbWidth . 'W') !== false) {
                    $matchedThumbnail = $thumbnail;
                    break;
                }
            }
            if ($matchedThumbnail) {
                $thumbnailHttp = str_replace($serendipity['serendipityPath'], $serendipity['serendipityHTTPPath'], $matchedThumbnail);
                $breakpoint = $this->breakpoints[$i];
                $srcset .= "{$thumbnailHttp} {$breakpoint}w,";
            }
        }
        if (substr($srcset, -strlen(',')) === ',') {
            // we don't want to have the trailing comma
            $srcset = substr($srcset, 0, -1);
        }
        $srcset .= '"';
        
        
        return  $srcset;
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>