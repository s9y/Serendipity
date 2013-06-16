<?php

class serendipity_plugin_superuser extends serendipity_plugin {
    var $title = SUPERUSER;

    function introspect(&$propbag)
    {
        $propbag->add('name',          SUPERUSER);
        $propbag->add('description',   ALLOWS_YOU_BLAHBLAH);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.0');
        $propbag->add('configuration', array('https'));
        $propbag->add('groups',        array('FRONTEND_FEATURES'));
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->title;
        if ($this->get_config('https', 'false') == 'true') {
            $base = str_replace('http://', 'https://', $serendipity['baseURL']);
        } else {
            $base = $serendipity['serendipityHTTPPath'];
        }

        $link = $base . ($serendipity['rewrite'] == 'none' ? $serendipity['indexFile'] .'?/' : '') . PATH_ADMIN;
        $text = (($_SESSION['serendipityAuthedUser'] === true) ? SUPERUSER_OPEN_ADMIN : SUPERUSER_OPEN_LOGIN);
        echo '<a href="' . $link . '" rel="nofollow" title="'. $text .'">'. $text .'</a>';
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'https':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_SUPERUSER_HTTPS);
                $propbag->add('description', PLUGIN_SUPERUSER_HTTPS_DESC);
                $propbag->add('default',     'false');
                break;

            default:
                return false;
        }
        return true;
    }
}

?>