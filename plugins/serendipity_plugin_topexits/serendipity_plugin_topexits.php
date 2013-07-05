<?php

class serendipity_plugin_topexits extends serendipity_plugin {
    var $title = TOP_EXITS;

    function introspect(&$propbag)
    {
        $propbag->add('name',          TOP_EXITS);
        $propbag->add('description',   SHOWS_TOP_EXIT);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.1');
        $propbag->add('configuration', array('limit', 'use_links', 'interval'));
        $propbag->add('groups',        array('STATISTICS'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'limit':
                $propbag->add('type',        'string');
                $propbag->add('name',        LIMIT_TO_NUMBER);
                $propbag->add('description', LIMIT_TO_NUMBER);
                $propbag->add('default',     10);
                break;

            case 'interval':
                $propbag->add('type',        'string');
                $propbag->add('name',        ARCHIVE_FREQUENCY);
                $propbag->add('description', ARCHIVE_FREQUENCY_DESC);
                $propbag->add('default',     7);
                break;

            case 'use_links':
                $propbag->add('type',        'tristate');
                $propbag->add('name',        INSTALL_TOP_AS_LINKS);
                $propbag->add('description', INSTALL_TOP_AS_LINKS_DESC);
                $propbag->add('default',     true);
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->title;

        // get local configuration (default, true, false)
        $use_links = $this->get_config('use_links', 'default');
        // get global configuration (true, false)
        $global_use_link = serendipity_get_config_var('top_as_links', false, true);

        // if local configuration say to use global default, do so
        if ($use_links === 'default') {
            $use_links = serendipity_db_bool($global_use_link);
        } else {
            $use_links = serendipity_db_bool($use_links);
        }

        echo serendipity_displayTopExits($this->get_config('limit', 10), $use_links, $this->get_config('interval', 7));
    }
}

?>