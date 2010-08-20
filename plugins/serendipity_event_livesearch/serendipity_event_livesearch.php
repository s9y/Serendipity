<?php # $Id$

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_livesearch extends serendipity_event
{
    var $title = PLUGIN_EVENT_LIVESEARCH_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_LIVESEARCH_NAME);
        $propbag->add('description',   PLUGIN_EVENT_LIVESEARCH_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Christian Stocker, Garvin Hicking');
        $propbag->add('version',       '1.4');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('event_hooks',    array(
            'external_plugin'    => true,
            'frontend_header'    => true,
            'css'                => true,
            'quicksearch_plugin' => true
        ));
        $propbag->add('groups', array('FRONTEND_ENTRY_RELATED'));
    }

    function generate_content(&$title) {
        $title = $this->title;
    }

    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {
            switch($event) {
                case 'css':
                    if (strpos($eventData, '.serendipity_livesearch_row')) {
                        // class exists in CSS, so a user has customized it and we don't need default
                        return true;
                    }
?>
#LSResult {
    position: absolute;
    margin-left: 4px;
    margin-top: 4px;
       background-color: #fff7e8;
}

#LSShadow {
    position: relative;
    bottom: 1px;
    right: 1px;
    color: inherit;
    border-right: 2px solid #ccc;
    border-bottom: 2px solid #ccc;
}

#LSHighlight {
    background-color: #bdd2ec;
    color: black;
}

.serendipity_livesearch_row {
  margin: 0px;
  padding-top: 0.5em;
  padding-bottom: 0.5em;
  padding-left: 1.5em;
  padding-right: 1.5em;
  text-indent: -1em;
  line-height: 1.4em;
}

.serendipity_livesearch_result {
    position: relative;
    bottom: 2px;
    border: 1px solid black;
    right: 2px;
    padding: 2px;
}
<?php
                    break;

                case 'frontend_header':
                    if (!$serendipity['embed'] || $serendipity['embed'] === 'false' || $serendipity['embed'] === false) {
                        echo '<script type="text/javascript" src="' . $serendipity['baseURL'] . ($serendipity['rewrite'] == 'none' ? $serendipity['indexFile'] . '?/' : '') . 'plugin/ls-js"></script>';
                    }
                    break;

                case 'quicksearch_plugin':
                    echo '<script type="text/javascript">
                    lsbase = "' . $serendipity['baseURL'] . ($serendipity['rewrite'] == 'none' ? $serendipity['indexFile'] . '?/' : '') . 'plugin/ls' . ($serendipity['rewrite'] == 'none' ? '_&' : '?') . '";
                    waittext = "' . PLUGIN_EVENT_LIVESEARCH_WAIT . '";
                    notfoundtext = "' . PLUGIN_EVENT_LIVESEARCH_NOTFOUND . '";
                    addLoadEvent(liveSearchInit);
                    </script>';
                    break;

                case 'external_plugin':
                    $uri_parts = explode('?', str_replace('&amp;', '&', $eventData));

                    // Try to get request parameters from eventData name
                    if (!empty($uri_parts[1])) {
                        $reqs = explode('&', $uri_parts[1]);
                        foreach($reqs AS $id => $req) {
                            $val = explode('=', $req);
                            if (empty($_REQUEST[$val[0]])) {
                                $_REQUEST[$val[0]] = $val[1];
                            }
                        }
                    }

                    $parts     = explode('_', $uri_parts[0]);

                    switch($parts[0]) {
                        case 'ls-js':
                            header('Content-Type: text/javascript');
                            echo file_get_contents(dirname(__FILE__) . '/serendipity_event_livesearch.js');
                            break;

                        case 'ls':
                            // header('X-Search: ' . htmlspecialchars($eventData) . ' leads to ' . preg_replace('@[^a-z0-9 \.\-_]@i', '', $_REQUEST['s']));
                            $res = serendipity_searchEntries($_REQUEST['s']);

                            echo '<?xml version="1.0" encoding="utf-8" ?>';
                            echo '<div class="serendipity_livesearch_result">';

                            if (is_array($res) && count($res) > 0) {
                                foreach($res AS $id => $entry) {
                                    echo '<div class="serendipity_livesearch_row"><a href="' . serendipity_archiveURL($entry['id'], $entry['title'], 'baseURL', true, array('timestamp' => $entry['timestamp'])) . '">' . htmlspecialchars($entry['title']) . '</a></div>';
                                }
                            } else {
                                echo '<div class="serendipity_livesearch_row">' . print_r($res, true) . '</div>';
                            }

                            echo '</div>';

                            break;
                    }

                    return true;
                    break;

                default:
                    return false;
                    break;
            }
        } else {
            return false;
        }
    }
}

/* vim: set sts=4 ts=4 expandtab : */
?>
