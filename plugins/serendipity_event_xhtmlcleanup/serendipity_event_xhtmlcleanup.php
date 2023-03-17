<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_xhtmlcleanup extends serendipity_event
{
    var $title = PLUGIN_EVENT_XHTMLCLEANUP_NAME;
    var $cleanup_tag, $cleanup_checkfor, $cleanup_val, $cleanup_parse;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_XHTMLCLEANUP_NAME);
        $propbag->add('description',   PLUGIN_EVENT_XHTMLCLEANUP_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking');
        $propbag->add('version',       '1.8.1');
        $propbag->add('requirements',  array(
            'serendipity' => '1.6',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('groups', array('BACKEND_TEMPLATES'));
        $propbag->add('cachable_events', array('frontend_display' => true));
        $propbag->add('event_hooks',   array(
            'frontend_display' => true,
            'frontend_display:html:per_entry' => true,
            'backend_view_comment' => true
        ));

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
        $conf_array[] = 'xhtml_parse';
        $conf_array[] = 'utf8_parse';
        $conf_array[] = 'youtube';
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
        if ($name == 'utf8_parse') {
            $propbag->add('type',        'boolean');
            $propbag->add('name',        PLUGIN_EVENT_XHTMLCLEANUP_UTF8);
            $propbag->add('description', PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC);
            $propbag->add('default',     'true');
        } elseif ($name == 'xhtml_parse') {
            $propbag->add('type',        'boolean');
            $propbag->add('name',        PLUGIN_EVENT_XHTMLCLEANUP_XHTML);
            $propbag->add('description', PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC);
            $propbag->add('default',     'true');
        } elseif ($name == 'youtube') {
            $propbag->add('type',        'boolean');
            $propbag->add('name',        PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE);
            $propbag->add('description', PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE_DESC);
            $propbag->add('default',     'false');
        } else {
            $propbag->add('type',        'boolean');
            $propbag->add('name',        constant($name));
            $propbag->add('description', sprintf(APPLY_MARKUP_TO, constant($name)));
            $propbag->add('default',     'true');
        }

        return true;
    }

    function fixUTFEntity(&$string)
    {
        $string = preg_replace('/&amp;#(x[a-f0-9]{1,4}|[0-9]{1,5});/', '&#$1;', $string ?? '');
        return true;
    }

    function event_hook($event, &$bag, &$eventData, $addData = null)
    {
        global $serendipity;
        static $convert_fields = array(
            'fullBody',
            'summary',
            'title',
            'author',
        );
        static $youtube = null;
        if ($youtube === null) {
            $youtube = serendipity_db_bool($this->get_config('youtube', 'false'));
        }

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {

            switch($event) {

                case 'backend_view_comment':
                    if (serendipity_db_bool($this->get_config('utf8_parse', 'true'))) {
                        foreach($convert_fields AS $convert_field) {
                            $this->fixUTFEntity($eventData[$convert_field]);
                        }
                    }
                    break;

                case 'frontend_display':
                    $this->cleanup_parse = serendipity_db_bool($this->get_config('xhtml_parse', 'true'));
                    foreach ($this->markup_elements as $temp) {
                        if (serendipity_db_bool($this->get_config($temp['name'], 'true')) && isset($eventData[$temp['element']]) &&
                            (isset($eventData['properties']) && isset($eventData['properties']['ep_disable_markup_' . $this->instance]) && !$eventData['properties']['ep_disable_markup_' . $this->instance]) &&
                            !isset($serendipity['POST']['properties']['disable_markup_' . $this->instance])) {
                            $element = $temp['element'];
                            $this->cleanup_tag      = 'IMG';
                            $this->cleanup_checkfor = 'ALT';
                            $this->cleanup_val      = '';
                            // Basic cleanup (core s9y functionality)
                            $eventData[$element]    = xhtml_cleanup($eventData[$element]);
                            $eventData[$element]    = preg_replace_callback('@(<img.+/?>)@imsU', array($this, 'clean_tag'), $eventData[$element]);
                            $eventData[$element]    = preg_replace_callback("@<(a|iframe|param)(.*)(href|src|value)=(\"|')([^\"']+)(\"|')@isUm", array($this, 'clean_htmlspecialchars'), $eventData[$element]);

                            if ($youtube) {
                                $this->youtubify($eventData[$element]);
                            }
                        }
                    }

                    if (serendipity_db_bool($this->get_config('utf8_parse', 'true'))) {
                        $this->fixUTFEntity($eventData['author']);
                        $this->fixUTFEntity($eventData['comment']);
                    }
                    break;

                case 'frontend_display:html:per_entry':
                    if (serendipity_db_bool($this->get_config('utf8_parse', 'true'))) {
                        $this->fixUTFEntity($eventData['author']);
                        $this->fixUTFEntity($eventData['title']);
                    }
                    break;

                default:
                    return false;

            }
            return true;
        } else {
            return false;
        }
    }

    function youtubify(&$text)
    {
        $text = preg_replace_callback('@<object(.*)>(.*)</object>@imsU', array($this, 'youtubify_regex'), $text);
    }

    function youtubify_regex($matches)
    {
        if (!preg_match('@<embed@i', $matches[2])) return $matches[0];

        preg_match('@width=["\']?([0-9]+)@ims', $matches[1], $m);
        $width = $m[1];

        preg_match('@height=["\']?([0-9]+)@ims', $matches[1], $m);
        $height = $m[1];

        preg_match('@<param name="movie" value="(.+)"[\s/]*?>@imsU', $matches[2], $m);
        $movie = $m[1];

        if (empty($movie)) {
            preg_match('@<param value="(.+)" name="movie"[\s/]*?>@imsU', $matches[2], $m);
            $movie = $m[1];
        }

        $appendix = preg_replace('@<embed.*>@imsU', '', $matches[2]);
        $appendix = str_replace('</embed>', '', $appendix);

        $out = '<!-- xhtml clean youtube --><object type="application/x-shockwave-flash" width="' . $width . '" height="' . $height . '" data="' . $movie . '">'
             . '<param name="movie" value="' . $movie . '" />'
             . $appendix . '</object><!-- /xhtml clean youtube -->';
        $out .= "\n\n<!-- {$matches[0]} -->\n\n";

        return $out;
    }

    // Takes an input tag and search for ommitted attributes. Expects a single tag (array, index 0)
    function clean_tag($data)
    {
        // Restore tags from preg_replace_callback buffer, as those can't be passed in the function header
        $tag      = &$this->cleanup_tag;
        $checkfor = &$this->cleanup_checkfor;
        $val      = &$this->cleanup_val;

        // Instead of nasty regex-mangling we use the XML parser to get the attribute list of our input tag
        switch(strtolower(LANG_CHARSET)) {
            case 'iso-8859-1':
            case 'utf-8':
                $p = xml_parser_create(LANG_CHARSET);
                break;

            default:
                $p = xml_parser_create('');
        }

        @xml_parse_into_struct($p, $data[0], $vals, $index);
        xml_parser_free($p);

        // Check if the xml parser returned anything useful
        if (is_array($vals) && isset($vals[0]) && $vals[0]['tag'] == $tag) {

            if (!empty($vals[0]['attributes'][$checkfor])) {
                // The attribute we search for already exists. Return original string.
                return $data[0];
            }

            // Assign the value we submitted for the attribute to insert
            $vals[0]['attributes'][$checkfor] = $val;

            // Reconstruct XHTML tag.
            $atts = ' ';
            foreach($vals[0]['attributes'] AS $att => $att_con) {
                $atts .= strtolower($att) . '="' . ($this->cleanup_parse ? serendipity_specialchars($att_con) : $att_con) . '" ';
            }

            return '<' . strtolower($tag) . $atts . ' />';
        }

        return $data[0];
    }

    function clean_htmlspecialchars($given, $quote_style = ENT_QUOTES)
    {
        return '<' . $given[1] . $given[2] . $given[3] . '=' . $given[4] . serendipity_specialchars(serendipity_entity_decode($given[5], $quote_style), $quote_style) . $given[6];
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>
