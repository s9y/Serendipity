<?php #

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_textile extends serendipity_event
{
    var $title = PLUGIN_EVENT_TEXTILE_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_TEXTILE_NAME);
        $propbag->add('description',   PLUGIN_EVENT_TEXTILE_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team', 'Lars Strojny');
        $propbag->add('version',       '1.6');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('cachable_events', array('frontend_display' => true));
        $propbag->add('event_hooks',   array('frontend_display' => true, 'frontend_comment' => true));
        $propbag->add('groups', array('MARKUP'));

        $propbag->add('preserve_tags',
          array(
            'php',
            'output',
            'name'
          )
        );

        $this->markup_elements = array(
            array(
              'name'     => 'ENTRY_BODY',
              'element'  => 'body',
            ),
            array(
              'name'     => 'EXTENDED_BODY',
              'element'  => 'extended',
            ),
            array(
              'name'     => 'COMMENT',
              'element'  => 'comment',
            ),
            array(
              'name'     => 'HTML_NUGGET',
              'element'  => 'html_nugget',
            )
        );

        $conf_array = array();
        foreach($this->markup_elements as $element) {
            $conf_array[] = $element['name'];
        }
        $conf_array[] = 'textile_version';
        $conf_array[] = 'unescape';
        $propbag->add('configuration', $conf_array);
    }


    function generate_content(&$title) {
        $title = $this->title;
    }

    function install() {
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function uninstall(&$propbag) {
        serendipity_plugin_api::hook_event('backend_cache_purge', $this->title);
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function introspect_config_item($name, &$propbag)
    {
        if ($name === 'textile_version') {
            $propbag->add('type',        'radio');
            $propbag->add('name',        PLUGIN_EVENT_TEXTILE_VERSION);
            $propbag->add('description', PLUGIN_EVENT_TEXTILE_VERSION_DESCRIPTION);
            $propbag->add('radio',       array(
                                            'value' => array(1, 2),
                                            'desc'  => array('1.0', '2.0'),
            ));
            $propbag->add('default',     2);
            return true;
        } elseif ($name === 'unescape') {
            $propbag->add('type',        'boolean');
            $propbag->add('name',        PLUGIN_EVENT_TEXTILE_UNESCAPE);
            $propbag->add('description', PLUGIN_EVENT_TEXTILE_UNESCAPE_DESC);
            $propbag->add('default',     'false');
            return true;
        }

        $propbag->add('type',        'boolean');
        $propbag->add('name',        constant($name));
        $propbag->add('description', sprintf(APPLY_MARKUP_TO, constant($name)));
        $propbag->add('default', 'true');
        return true;
    }


    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {
            switch($event) {
              case 'frontend_display':

                $preserve_tags = &$bag->get('preserve_tags');

                foreach ($this->markup_elements as $temp) {
                    if (serendipity_db_bool($this->get_config($temp['name'], true))) {
                        if ($eventData['properties']['ep_disable_markup_' . $this->instance] ||
                            isset($serendipity['POST']['properties']['disable_markup_' . $this->instance])) {
                            continue;
                        }
                        $element = $temp['element'];

        /* find all the tags and store them in $blocks */

                        $blocks = array();
                        foreach($preserve_tags as $tag) {
                            if (preg_match_all('/(<'.$tag.'[^>]?>.*<\/'.$tag.'>)/msU', $eventData[$element], $matches )) {
                                foreach($matches[1] as $match) {
                                    $blocks[] = $match;
                                }
                            }
                        }

        /* replace all the blocks with some code */

                        foreach($blocks as $id=>$block) {
                            $eventData[$element] = str_replace($block, '@BLOCK::'.$id.'@', $eventData[$element]);
                        }

        /* textile it */

                        if (serendipity_db_bool($this->get_config('unescape'))) {
                            $eventData[$element] = str_replace('&quot;', '"', $eventData[$element]);
                        }
                        $eventData[$element] = $this->textile($eventData[$element]);

        /* each block will now be "<code>BLOCK::2</code>"
         * so look for those place holders and replace
         * them with the original blocks */

                        if (preg_match_all('/<code>BLOCK::(\d+)<\/code>/', $eventData[$element], $matches )) {
                            foreach($matches[1] as $key=>$match) {
                                $eventData[$element] = str_replace($matches[0][$key], $blocks[$match], $eventData[$element]);
                            }
                        }

        /* post-process each block */

                        foreach($preserve_tags as $tag) {
                            $method = '_process_tag_' . $tag;
                            if (method_exists($this,$method)) {
                                if (preg_match_all('/<'.$tag.'[^>]?>(.*)<\/'.$tag.'>/msU', $eventData[$element], $matches )) {
                                    foreach($matches[1] as $key=>$match) {
                                        $eventData[$element] = str_replace($matches[0][$key], $this->$method($match), $eventData[$element]);
                                    }
                                }
                            }
                        }

        /* end textile processing */

                    }
                }
                return true;

                case 'frontend_comment':
                    if (serendipity_db_bool($this->get_config('COMMENT', true))) {
                        $url = $this->get_config('textile_version') == 1
                                   ? 'http://www.textism.com/tools/textile/'
                                   : 'http://thresholdstate.com/articles/4312/the-textile-reference-manual';
                        echo '<div class="serendipity_commentDirection serendipity_comment_textile">' . sprintf(PLUGIN_EVENT_TEXTILE_TRANSFORM, $url) . '</div>';
                    }
                    return true;
                    break;

                default:
                  return false;
            }

        } else {

            return false;

        }

    }

    function _process_tag_php($text) {

        $code = "<?php\n" . trim($text) . "\n?>";

        # Using OB, as highlight_string() only supports
        # returning the result from 4.2.0

        ob_start();
        highlight_string($code);
        $highlighted = ob_get_contents();
        ob_end_clean();

        # Fix output to use CSS classes and wrap well

        $highlighted = '<p><div class="phpcode">' . str_replace(
            array(
                '&nbsp;',
                '<br />',
                '<font color="',
                '</font>',
                "\n ",
                'Ê '
            ),
            array(
                ' ',
                "<br />\n",
                '<span class="',
                '</span>',
                "\n&#160;",
                '&#160; '
            ),
            $highlighted
        ) . '</div></p>';

        return $highlighted;

    }


    function _process_tag_output($text) {
        return '<p><pre class="output">' . $text . '</pre></p>';
    }

    function _process_tag_name($text) {
        return '<a name="'. $text . '"></a>';
    }

    function textile($string) {
        if ($this->get_config('textile_version') == 2) {
            require_once S9Y_INCLUDE_PATH . 'plugins/serendipity_event_textile/classTextile.php';
            $textile = new Textile();
            return $textile->textileThis($string);
        } else {
            require_once S9Y_INCLUDE_PATH . 'plugins/serendipity_event_textile/textile.php';
            return textile($string);
        }
    }
}

/* vim: set sts=4 ts=4 expandtab : */
