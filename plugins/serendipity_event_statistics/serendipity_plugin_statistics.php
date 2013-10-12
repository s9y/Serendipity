<?php # $Id: serendipity_plugin_comments.php 691 2005-11-13 06:58:40Z elf2000 $

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_plugin_statistics extends serendipity_plugin
{
    var $title = PLUGIN_EVENT_STATISTICS_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $this->title = $this->get_config('title', $this->title);

        $propbag->add('name',          PLUGIN_EVENT_STATISTICS_NAME);
        $propbag->add('description',   PLUGIN_EVENT_STATISTICS_NAME);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Arnan de Gans, Garvin Hicking');
        $propbag->add('version',       '1.5');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('groups', array('STATISTICS'));
        $propbag->add('configuration', array(
                                             'title',
                                             'show_lastentry',
                                             'text_lastentry',
                                             'show_entrycount',
                                             'text_entrycount',
                                             'show_commentcount',
                                             'text_commentcount',
                                             'show_monthvisitors',
                                             'text_monthvisitors',
                                             'show_dayvisitors',
                                             'text_dayvisitors',
                                             'show_weekvisitors',
                                             'text_weekvisitors',
                                             'show_currentvisitors',
                                             'text_currentvisitors',
                                             'cachetimeout'
        ));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {

            case 'cachetimeout':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC);
                $propbag->add('default',     60);
                break;

            case 'show_lastentry':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY);
                $propbag->add('description', '');
                $propbag->add('default',     true);
                break;

            case 'show_entrycount':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT);
                $propbag->add('description', '');
                $propbag->add('default',     true);
                break;

            case 'show_commentcount':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT);
                $propbag->add('description', '');
                $propbag->add('default',     true);
                break;

            case 'show_monthvisitors':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS);
                $propbag->add('description', '');
                $propbag->add('default',     true);
                break;

            case 'show_dayvisitors':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_DAYVISITORS);
                $propbag->add('description', '');
                $propbag->add('default',     true);
                break;

            case 'show_weekvisitors':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_WEEKVISITORS);
                $propbag->add('description', '');
                $propbag->add('default',     true);
                break;

            case 'text_lastentry':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_TEXT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_TEXT_DESC);
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY);
                break;

            case 'text_entrycount':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_TEXT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_TEXT_DESC);
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT);
                break;

            case 'text_commentcount':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_TEXT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_TEXT_DESC);
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT);
                break;

            case 'text_monthvisitors':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_TEXT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_TEXT_DESC);
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS);
                break;

            case 'text_dayvisitors':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_TEXT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_TEXT_DESC);
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_TEXT_DAYVISITORS);
                break;

            case 'text_weekvisitors':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_TEXT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_TEXT_DESC);
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_TEXT_WEEKVISITORS);
                break;

            case 'text_currentvisitors':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_TEXT);
                $propbag->add('description', PLUGIN_EVENT_STATISTICS_TEXT_DESC);
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS);
                break;

            case 'show_currentvisitors':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS);
                $propbag->add('description', '');
                $propbag->add('default',     true);
                break;

            case 'title':
                $propbag->add('type',        'string');
                $propbag->add('name',        TITLE);
                $propbag->add('description', '');
                $propbag->add('default',     PLUGIN_EVENT_STATISTICS_NAME);
                break;

            default:
                    return false;
        }
        return true;
    }

    function cleanup() {
        global $serendipity;
        @unlink($serendipity['serendipityPath'] . 'templates_c/statistics_cache.html');
    }

    function generate_content(&$title)
    {
        global $serendipity;
        $title       = $this->get_config('title', $this->title);
        $cachetime   = $this->get_config('cachetimeout', 60) * 60; // turn to seconds
        $cachef      = $serendipity['serendipityPath'] . 'templates_c/statistics_cache.html';

        if (!file_exists($cachef) || filesize($cachef) == 0 || filemtime($cachef) < (time() - $cachetime)) {
            // Create statistics
            list($year, $month, $day) = explode('-', date('Y-m-d'));
            $lastmonday = date('Ynj', strtotime('last monday'));
            $nextsunday = date('Ynj', strtotime('next sunday'));
            if (date('w', strtotime('today') ) == "1" ) { // now it is monday
                $lastmonday = date('Ynj', strtotime('today'));
            } else if (date('w', strtotime('today') ) == "0" ) { // now it is sunday
                $nextsunday = date('Ynj', strtotime('today'));
            } 

            $content = '';
            if (serendipity_db_bool($this->get_config('show_lastentry'))) {
                $res = serendipity_db_query("SELECT timestamp FROM {$serendipity['dbPrefix']}entries WHERE isdraft = 'false' AND timestamp <= " . time() . " ORDER BY timestamp DESC LIMIT 1", true, 'assoc');
                if (is_array($res) && isset($res['timestamp'])) {
                    $content .= '<div class="stat_lastentry">' . sprintf($this->get_config('text_lastentry'), '<span class="stat_string">' . htmlspecialchars(serendipity_strftime(DATE_FORMAT_SHORT, $res['timestamp'])) . '</span>') . "</div>\n";
                }
            }

            if (serendipity_db_bool($this->get_config('show_entrycount'))) {
                $res = serendipity_db_query("SELECT count(id) as entrycount FROM {$serendipity['dbPrefix']}entries WHERE isdraft = 'false' AND timestamp <= " . time(), true, 'assoc');
                if (is_array($res) && isset($res['entrycount'])) {
                    $content .= '<div class="stat_entrycount">' . sprintf($this->get_config('text_entrycount'), '<span class="stat_number">' . $res['entrycount'] . '</span>') . "</div>\n";
                }
            }

            if (serendipity_db_bool($this->get_config('show_commentcount'))) {
                $res = serendipity_db_query("SELECT count(id) AS commentcount FROM {$serendipity['dbPrefix']}comments WHERE type = 'NORMAL' AND status = 'approved'", true, 'assoc');
                if (is_array($res) && isset($res['commentcount'])) {
                    $content .= '<div class="stat_commentcount">' . sprintf($this->get_config('text_commentcount'), '<span class="stat_number">' . $res['commentcount'] . '</span>') . "</div>\n";
                }
            }

            if (serendipity_db_bool($this->get_config('show_monthvisitors'))) {
                $res = serendipity_db_query("SELECT sum(visits) AS monthvisitors FROM {$serendipity['dbPrefix']}visitors_count WHERE year='".$year."' AND month='".$month."'", true, 'assoc');
                if (is_array($res) && isset($res['monthvisitors'])) {
                    $content .= '<div class="stat_monthvisitors">' . sprintf($this->get_config('text_monthvisitors'), '<span class="stat_number">' . $res['monthvisitors'] . '</span>') . "</div>\n";
                }
            }

            if (serendipity_db_bool($this->get_config('show_weekvisitors'))) {
                $res = serendipity_db_query("SELECT sum(visits) AS weekvisitors FROM {$serendipity['dbPrefix']}visitors_count WHERE CONCAT(year,month,day) >= '".$lastmonday."' AND CONCAT(year,month,day) <= '".$nextsunday."'", true, 'assoc');
                if (is_array($res) && isset($res['weekvisitors'])) {
                    $content .= '<div class="stat_weekhvisitors">' . sprintf($this->get_config('text_weekvisitors'), '<span class="stat_number">' . $res['weekvisitors'] . '</span>') . "</div>\n";
                }
            }

            if (serendipity_db_bool($this->get_config('show_dayvisitors'))) {
                $res = serendipity_db_query("SELECT sum(visits) AS dayvisitors FROM {$serendipity['dbPrefix']}visitors_count WHERE year='".$year."' AND month='".$month."' AND day='".$day."'", true, 'assoc');
                if (is_array($res) && isset($res['dayvisitors'])) {
                    $content .= '<div class="stat_dayhvisitors">' . sprintf($this->get_config('text_dayvisitors'), '<span class="stat_number">' . $res['dayvisitors'] . '</span>') . "</div>\n";
                }
            }

            if (serendipity_db_bool($this->get_config('show_currentvisitors'))) {
                $max = time();
                $min = $max - (15 * 60);

                if ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite') {
                    $max_ts = date('H:i', $max);
                    $min_ts = date('H:i', $min);
                    $q   = "SELECT count(counter_id) AS currentvisitors FROM {$serendipity['dbPrefix']}visitors WHERE day LIKE '" . date('Y-m-d') . "' AND (time BETWEEN '$min_ts' AND '$max_ts')";
                } elseif ($serendipity['dbType'] == 'postgres' || $serendipity['dbType'] == 'pdo-postgres') {
                    $max_ts = date('Hi', $max);
                    $min_ts = date('Hi', $min);
                    $q   = "SELECT count(counter_id) AS currentvisitors FROM {$serendipity['dbPrefix']}visitors WHERE day LIKE '" . date('Y-m-d') . "' AND (REPLACE(time, ':', '') BETWEEN CAST($min_ts AS text) AND CAST($max_ts AS text))";
                } else {
                    $max_ts = date('Hi', $max);
                    $min_ts = date('Hi', $min);
                    $q   = "SELECT count(counter_id) AS currentvisitors FROM {$serendipity['dbPrefix']}visitors WHERE day LIKE '" . date('Y-m-d') . "' AND (REPLACE(time, ':', '') BETWEEN $min_ts AND $max_ts)";
                }
                $res = serendipity_db_query($q, true, 'assoc');
                if (is_array($res) && isset($res['currentvisitors'])) {
                    $content .= '<div class="stat_currentvisitors">' . sprintf($this->get_config('text_currentvisitors'), '<span class="stat_number">' . $res['currentvisitors'] . '</span>') . "</div>\n";
                }
            }

            // Write cache
            $fp = @fopen($cachef, 'w');
            if ($fp) {
                fwrite($fp, $content);
                fclose($fp);
            }
        } else {
            // Read from cache
            $content = @file_get_contents($cachef);
        }

        echo $content;
    }
}

/* vim: set sts=4 ts=4 expandtab : */
