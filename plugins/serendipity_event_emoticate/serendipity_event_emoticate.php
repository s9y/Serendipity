<?php

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_emoticate extends serendipity_event
{
    var $title = PLUGIN_EVENT_EMOTICATE_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_EMOTICATE_NAME);
        $propbag->add('description',   PLUGIN_EVENT_EMOTICATE_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.8');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '5.2.0'
        ));
        $propbag->add('groups', array('MARKUP'));
        $propbag->add('cachable_events', array( 'frontend_display' => true) );
        $propbag->add('event_hooks',     array( 'frontend_display' => true,
                                                'frontend_comment' => true,
                                                'css_backend' => true,
                                                'css' => true));

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
        $conf_array[] = 'extension';
        $propbag->add('configuration', $conf_array);

    }

    function install() {
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function uninstall(&$propbag) {
        serendipity_plugin_api::hook_event('backend_cache_purge', $this->title);
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function getEmoticons() {
        global $serendipity;

        /* Avoid multiple runs of serendipity_getTemplateFile(),
           in other words - if we already have a list of smilies, don't bother looking for another */
        if (isset($this->smilies) && sizeof($this->smilies) != 0) {
            return $this->smilies;
        }

        /* Hijack global variable $serendipity['custom_emoticons'] if it exists */
        $hijack_file = serendipity_getTemplateFile('emoticons.inc.php', 'serendipityPath', true);
        if (@file_exists($hijack_file)) {
            @include $hijack_file; // This file contains $serendipity['custom_emoticons'] and maybe $serendipity['custom_emoticons_regexp']
            if (isset($serendipity['custom_emoticons']) && is_array($serendipity['custom_emoticons'])) {
                $this->smilies = $serendipity['custom_emoticons'];
                if (is_array($this->smilies) && (!isset($serendipity['custom_emoticons_regexp']) || !$serendipity['custom_emoticons_regexp'])) {
                    foreach($this->smilies AS $key => $val) {
                        unset($this->smilies[$key]);
                        $this->smilies[preg_quote($key, '/')] = $val;
                    }
                }
            }
        }

        if (!isset($this->smilies)) {
            $ext = $this->get_config('extension', 'png');
            $this->smilies = array(
                "\:'\("    => serendipity_getTemplateFile('img/emoticons/cry.'.$ext, 'serendipityHTTPPath', true),

                '\:\-?\)'  => serendipity_getTemplateFile('img/emoticons/smile.'.$ext, 'serendipityHTTPPath', true),

                '\:\-?\|'  => serendipity_getTemplateFile('img/emoticons/normal.'.$ext, 'serendipityHTTPPath', true),

                '\:\-?O'   => serendipity_getTemplateFile('img/emoticons/eek.'.$ext, 'serendipityHTTPPath', true),

                '\:\-?\('  => serendipity_getTemplateFile('img/emoticons/sad.'.$ext, 'serendipityHTTPPath', true),

                '8\-?\)'   => serendipity_getTemplateFile('img/emoticons/cool.'.$ext, 'serendipityHTTPPath', true),

                '\:\-?D'   => serendipity_getTemplateFile('img/emoticons/laugh.'.$ext, 'serendipityHTTPPath', true),

                '\:\-?P'   => serendipity_getTemplateFile('img/emoticons/tongue.'.$ext, 'serendipityHTTPPath', true),

                ';\-?\)'   => serendipity_getTemplateFile('img/emoticons/wink.'.$ext, 'serendipityHTTPPath', true),
            );
        }

        return $this->smilies;
    }

    function humanReadableEmoticon($key) {
        return str_replace(array('-?', '\\'), array('-', ''), $key);
    }

    function generate_content(&$title) {
        $title = $this->title;
    }

    function example() {
        $s  = sprintf(PLUGIN_EVENT_EMOTICATE_EXAMPLE_EXTEND_DESC, $serendipity['serendiptyHTTPPath'].'plugins/serendipity_event_emoticate/emoticons.inc.php.txt');
        $s .= '<table cellspacing="5" class="example_emos">';
        $s .= '<tr>';
        $i = 1;
        foreach($this->getEmoticons() as $key => $value) {
            $s .= '<td>' . $this->humanReadableEmoticon($key) . '</td><td><img src="'. $value .'"></td>' . "\n";
            if ($i++ % 7 == 0) $s .= '</tr><tr>';
        }
        $s .= '</tr>';
        $s .= '</table>';

        return $s;
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
        case 'extension':
            $propbag->add('type', 'string');
            $propbag->add('name',        PLUGIN_EVENT_EMOTICATE_EXTENSION);
            $propbag->add('description', PLUGIN_EVENT_EMOTICATE_EXTENSION_BLAHBLAH);
            $propbag->add('default', 'png');
            break;
        default:
            $propbag->add('type',        'boolean');
            $propbag->add('name',        constant($name));
            $propbag->add('description', sprintf(APPLY_MARKUP_TO, constant($name)));
            $propbag->add('default', 'true');
        }
        return true;
    }


    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;
        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {
            switch($event) {
                case 'frontend_display':

                    foreach ($this->markup_elements as $temp) {
                        if (serendipity_db_bool($this->get_config($temp['name'], true)) && isset($eventData[$temp['element']]) &&
                            !$eventData['properties']['ep_disable_markup_' . $this->instance] &&
                            !isset($serendipity['POST']['properties']['disable_markup_' . $this->instance])) {
                            $element = &$eventData[$temp['element']];

                            foreach ($this->getEmoticons() as $key => $value) {
                                $path_parts = pathinfo($value); // part of serendipity_event_textile (lib3) workaround, which caused to throw weird list-place and preg_* errors
                                $element = preg_replace("/([\t\s\.\!>]+|^)" . $key . "([\t\s\!\.\)<]+|\$)/U",
                                    "$1<img src=\"$value\" alt=\"" . (class_exists('serendipity_event_textile') ? str_replace('.'.$this->get_config('extension', 'png'), '', $path_parts['filename']) : $this->humanReadableEmoticon($key)) . "\" class=\"emoticon\" />$2",
                                    $element);
                            }
                        }
                    }
                    return true;
                    break;

                case 'css_backend':
?>
.example_emos {
    margin-left: auto;
    margin-right: auto;
}
.example_emos td {
    text-align: center;
}
<?php
                case 'css':
?>
.emoticon {
    display: inline;
    vertical-align: bottom;
    border: 0 none;
}
<?php
                    return true;
                    break;

                case 'frontend_comment':
                    if (serendipity_db_bool($this->get_config('COMMENT', true))) {
                        echo '<div class="serendipity_commentDirection serendipity_comment_emoticate">' . PLUGIN_EVENT_EMOTICATE_TRANSFORM . '</div>';
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

}

/* vim: set sts=4 ts=4 expandtab : */
?>