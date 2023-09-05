<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_plugin_multilingual extends serendipity_event
{
    var $title = PLUGIN_SIDEBAR_MULTILINGUAL_TITLE;
    var $dependencies;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_SIDEBAR_MULTILINGUAL_TITLE);
        $propbag->add('description',   PLUGIN_SIDEBAR_MULTILINGUAL_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking, Wesley Hwang-Chung');
        $propbag->add('requirements',  array(
            'serendipity' => '2.4',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));

        $conf = array('title', 'show_submit', 'size');
        /* Available languages */
        /* already defined in serendipity_config.inc.php */
        foreach($serendipity['languages'] AS $lkey => $lval) {
            $conf[] = $lkey;
        }
        $propbag->add('configuration', $conf);
        $propbag->add('version',       '1.16.1');
        $propbag->add('groups',        array('FRONTEND_VIEWS'));
        $this->dependencies = array('serendipity_event_multilingual' => 'remove');
    }

    function introspect_config_item($name, &$propbag)
    {
        global $serendipity;

        foreach($serendipity['languages'] AS $lkey => $lval) {
            if ($name == $lkey) {
                $propbag->add('type',        'boolean');
                $propbag->add('name',        $lval);
                $propbag->add('default',     'true');
                return true; // keep!
            }
        }

        switch($name) {
            case 'title':
                $propbag->add('type',        'string');
                $propbag->add('name',        TITLE);
                $propbag->add('description', TITLE);
                $propbag->add('default',     '');
                break;

            case 'show_submit':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT);
                $propbag->add('description', PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT_DESC);
                $propbag->add('default',     'false');
                break;

            case 'size':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_SIDEBAR_MULTILINGUAL_SIZE);
                $propbag->add('default',     '9');
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->get_config('title', $this->title);
        $url   = serendipity_currentURL(true);

        echo '<form id="language_chooser" action="' . $url . '" method="post"><div>';
        echo '<select style="font-size: ' . $this->get_config('size', '9') . 'px" name="serendipity[user_language]" onchange="document.getElementById(\'language_chooser\').submit();">';
//        echo '<option value=""> </option>'."\n";
        foreach ($serendipity['languages'] AS $lang_key => $language) {
            if (serendipity_db_bool($this->get_config($lang_key, 'false'))) {
                echo '<option value="' . $lang_key . '" ' . ($serendipity['lang'] == $lang_key ? 'selected="selected"' : '') . '>' . (function_exists('serendipity_specialchars') ? serendipity_specialchars($language) : htmlspecialchars($language, ENT_COMPAT, LANG_CHARSET)) . '</option>';
            }
        }
        echo '</select>';

        if (serendipity_db_bool($this->get_config('show_submit', 'false'))) {
            echo '<input type="submit" name="submit" value="' . GO . '" size="4" />';
        }
        echo '</div></form>';
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>