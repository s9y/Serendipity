<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_plugin_multilingual extends serendipity_event
{
    var $title = PLUGIN_SIDEBAR_MULTILINGUAL_TITLE;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_SIDEBAR_MULTILINGUAL_TITLE);
        $propbag->add('description',   PLUGIN_SIDEBAR_MULTILINGUAL_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking, Wesley Hwang-Chung');
        $propbag->add('requirements',  array(
            'serendipity' => '1.6',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));

        $conf = array('title', 'show_submit', 'size');
        /* Available languages */
        if (!is_array($serendipity['languages'])) {
            $serendipity['languages'] = array('en' => 'English',
                                  'de' => 'German',
                                  'da' => 'Danish',
                                  'es' => 'Spanish',
                                  'fr' => 'French',
                                  'fi' => 'Finnish',
                                  'cs' => 'Czech (Win-1250)',
                                  'cz' => 'Czech (ISO-8859-2)',
                                  'sk' => 'Slovak',
                                  'nl' => 'Dutch',
                                  'is' => 'Icelandic',
                                  'tr' => 'Turkish',
                                  'se' => 'Swedish',
                                  'pt' => 'Portuguese Brazilian',
                                  'pt_PT' => 'Portuguese European',
                                  'bg' => 'Bulgarian',
                                  'hu' => 'Hungarian',
                                  'no' => 'Norwegian',
                                  'pl' => 'Polish',
                                  'ro' => 'Romanian',
                                  'it' => 'Italian',
                                  'ru' => 'Russian',
                                  'fa' => 'Persian',
                                  'tw' => 'Traditional Chinese (Big5)',
                                  'tn' => 'Traditional Chinese (UTF-8)',
                                  'zh' => 'Simplified Chinese (GB2312)',
                                  'cn' => 'Simplified Chinese (UTF-8)',
                                  'ja' => 'Japanese',
                                  'ko' => 'Korean',
                                  'sa' => 'Arabic',
                                  'ta' => 'Tamil');
        }
        foreach($serendipity['languages'] AS $lkey => $lval) {
            $conf[] = $lkey;
        }
        $propbag->add('configuration', $conf);
        $propbag->add('version',       '1.15.1');
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
        echo '<select style="font-size: ' . $this->get_config('size', '9') . 'px"' . (version_compare($serendipity['version'], '2.4.0', '<') ? 'name="user_language"' : 'name="serendipity[user_language]"') .'onchange="document.getElementById(\'language_chooser\').submit();">';
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