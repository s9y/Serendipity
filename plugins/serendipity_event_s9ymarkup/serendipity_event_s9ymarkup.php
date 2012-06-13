<?php # $Id$

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_s9ymarkup extends serendipity_event
{
    var $title = PLUGIN_EVENT_S9YMARKUP_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_S9YMARKUP_NAME);
        $propbag->add('description',   PLUGIN_EVENT_S9YMARKUP_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.3');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('cachable_events', array('frontend_display' => true));
        $propbag->add('event_hooks',   array('frontend_display' => true, 'frontend_comment' => true));
        $propbag->add('groups', array('MARKUP'));

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
        $propbag->add('configuration', $conf_array);
    }

    function install() {
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function uninstall(&$propbag) {
        serendipity_plugin_api::hook_event('backend_cache_purge', $this->title);
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function generate_content(&$title) {
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
                            $element = $temp['element'];
                            $eventData[$element] = $this->_s9y_markup($eventData[$element]);
                        }
                    }
                    return true;
                    break;

                case 'frontend_comment':
                    if (serendipity_db_bool($this->get_config('COMMENT', true))) {
                        echo '<div class="serendipity_commentDirection serendipity_comment_s9ymarkup">' . PLUGIN_EVENT_S9YMARKUP_TRANSFORM . '</div>';
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


    function _s9y_markup($text) {
        $text = str_replace('\_', chr(1), $text);
        $text = preg_replace('/#([[:alnum:]]+?)#/','&\1;',$text);
        $text = preg_replace('/\b_([\S ]+?)_\b/','<u>\1</u>',$text);
        $text = str_replace(chr(1), '\_', $text);

        // bold
        $text = str_replace('\*',chr(1),$text);
        $text = str_replace('**',chr(2),$text);
        $text = preg_replace('/(\S)\*(\S)/','\1' . chr(1) . '\2',$text);
        $text = preg_replace('/\B\*([^*]+)\*\B/','<strong>\1</strong>',$text);
        $text = str_replace(chr(2),'**',$text);
        $text = str_replace(chr(1),'\*',$text);

        // $text = preg_replace('/\|([0-9a-fA-F]+?)\|([\S ]+?)\|/','<font color="\1">\2</font>',$text);
        $text = preg_replace('/\^([[:alnum:]]+?)\^/','<sup>\1</sup>',$text);
        $text = preg_replace('/\@([[:alnum:]]+?)\@/','<sub>\1</sub>',$text);
        $text = preg_replace('/([\\\])([*#_|^@%])/', '\2', $text);

        return $text;

    }
}

/* vim: set sts=4 ts=4 expandtab : */
?>