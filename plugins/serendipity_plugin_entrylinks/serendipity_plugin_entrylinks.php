<?php #

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_plugin_entrylinks extends serendipity_plugin
{
    var $title = PLUGIN_ENTRYLINKS_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $this->title = $this->get_config('title', $this->title);

        $propbag->add('name',          PLUGIN_ENTRYLINKS_NAME);
        $propbag->add('description',   PLUGIN_ENTRYLINKS_BLAHBLAH);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking');
        $propbag->add('version',       '1.02');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('groups', array('FRONTEND_ENTRY_RELATED'));
        $propbag->add('configuration', array('title', 'newwin', 'markup', 'wordwrap', 'show_exits', 'show_referers', 'maxref', 'orderby'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'title':
                $propbag->add('type', 'string');
                $propbag->add('name', TITLE);
                $propbag->add('description', TITLE);
                $propbag->add('default', '');
                break;

            case 'newwin':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_ENTRYLINKS_NEWWIN);
                $propbag->add('description', PLUGIN_ENTRYLINKS_NEWWIN_BLAHBLAH);
                $propbag->add('default', 'false');
                break;

            case 'markup':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        DO_MARKUP);
                $propbag->add('description', DO_MARKUP_DESCRIPTION);
                $propbag->add('default', 'true');
                break;

            case 'show_exits':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        TOP_EXITS);
                $propbag->add('description', SHOWS_TOP_EXIT);
                $propbag->add('default', 'true');
                break;

            case 'show_referers':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        TOP_REFERRER);
                $propbag->add('description', SHOWS_TOP_SITES);
                $propbag->add('default', '');
                break;

            case 'maxref':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_ENTRYLINKS_MAXREF);
                $propbag->add('description', PLUGIN_ENTRYLINKS_MAXREF_BLAHBLAH);
                $propbag->add('default', 15);
                break;

            case 'wordwrap':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_ENTRYLINKS_WORDWRAP);
                $propbag->add('description', PLUGIN_ENTRYLINKS_WORDWRAP_BLAHBLAH);
                $propbag->add('default', 30);
                break;

            case 'orderby':
                $select = array('day' => PLUGIN_ENTRYLINKS_ORDERBY_DAY, 'fullcount' => PLUGIN_ENTRYLINKS_ORDERBY_FULLCOUNT);
                $propbag->add('type', 'select');
                $propbag->add('name', PLUGIN_ENTRYLINKS_ORDERBY);
                $propbag->add('description', PLUGIN_ENTRYLINKS_ORDERBY_BLAHBLAH);
                $propbag->add('select_values', $select);
                $propbag->add('default', 'fullcount');
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

        if (!isset($serendipity['GET']['id']) || !is_numeric($serendipity['GET']['id'])) {
            return false;
        } else {
            $id = serendipity_db_escape_string($serendipity['GET']['id']);
        }

        $target   = '';
        $newwin   = $this->get_config('newwin', 'false');
        $wordwrap = $this->get_config('wordwrap', 30);
        $maxref   = $this->get_config('maxref', 15);
        $orderby  = $this->get_config('orderby', 'fullcount');

        if ($newwin == 'true') {
            $target = ' target="_blank" ';
        }


        $counter    = array();

        if ($this->get_config('show_exits', 'true') == 'true') {
            $exits      = serendipity_db_query("SELECT SUM(count) as fullcount, scheme, host, port, path, query, " . serendipity_db_concat("scheme, '://', host, ':', port, path, '?', query") . " AS fulllink FROM {$serendipity['dbPrefix']}exits WHERE entry_id = " . $id . " GROUP BY scheme,host,port,path,query");
            if (is_array($exits)) {
                foreach($exits AS $key => $row) {
                    $url = sprintf('%s://%s%s%s%s',
                      $row['scheme'],
                      $row['host'],
                      (!empty($row['port']) ? ':' . $row['port'] : ''),
                      $row['path'],
                      (!empty($row['query']) ? '?' . $row['query'] : '')
                    );

                    $counter[$url] = $row['fullcount'];
                }
            }
        }

        $references = serendipity_db_query("SELECT link, max(name) as name FROM {$serendipity['dbPrefix']}references WHERE entry_id = " . $id . " AND type = '' GROUP BY link ORDER BY id");
        if (is_array($references)) {
            $links = '<ul class="plainList">';
            foreach($references AS $key => $row) {
                if (empty($row['name']) || empty($row['link'])) {
                    continue;
                }
                $count = '';
                if (isset($counter[$row['link']])) {
                    $count = '<span class="serendipity_entrylinks_count">[' . $counter[$row['link']] . ']</span>';
                }
                $link_name = $wordwrap < 1? $row['name']: wordwrap($row['name'], $wordwrap, "<br />", 1);
                $links .= '<li><a href="' . $row['link'] . '" ' . $target . '>' . $link_name . "</a> $count</li>";
            }
            $links .= '</ul>';

            if ($this->get_config('markup', 'true') == 'true') {
                $entry = array('html_nugget' => $links, 'entry_id' => $id);
                serendipity_plugin_api::hook_event('frontend_display', $entry);
                echo $entry['html_nugget'];
            } else {
                echo $links;
            }
        }

        if ($this->get_config('show_referers', 'true') == 'true') {
            $ref      = serendipity_db_query("SELECT SUM(count) as fullcount, scheme, host, port, path, query, " . serendipity_db_concat("scheme, '://', host, ':', port, path, '?', query") . " AS fulllink FROM {$serendipity['dbPrefix']}referrers WHERE entry_id = " . $id . " GROUP BY scheme,host,port,path,query ORDER BY $orderby DESC LIMIT $maxref");
            if (is_array($ref)) {
                echo PLUGIN_ENTRYLINKS_REFERERS . '<ul class="plainList">';
                foreach($ref AS $key => $row) {
                    $url = sprintf('%s://%s%s%s%s',
                      $row['scheme'],
                      $row['host'],
                      (!empty($row['port']) ? ':' . $row['port'] : ''),
                      $row['path'],
                      (!empty($row['query']) ? '?' . $row['query'] : '')
                    );

                    echo '<li><a href="' . $url . '" ' . $target . '>' . wordwrap($row['host'], $wordwrap, "<br />", 1) . '</a> <span class="serendipity_entrylinks_fullcount">[' . $row['fullcount'] . "]</span></li>";
                }
                echo '</ul>';
            }
        }
    }
}

/* vim: set sts=4 ts=4 expandtab : */
