<?php

class serendipity_plugin_quicksearch extends serendipity_plugin {
    var $title = QUICKSEARCH;

    function introspect(&$propbag)
    {
        $propbag->add('name',          QUICKSEARCH);
        $propbag->add('description',   SEARCH_FOR_ENTRY);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.1');
        $propbag->add('configuration', array('fullentry'));
        $propbag->add('groups',        array('FRONTEND_ENTRY_RELATED'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'fullentry':
                $propbag->add('type',       'boolean');
                $propbag->add('name',        SEARCH_FULLENTRY);
                $propbag->add('description', '');
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
        $fullentry = serendipity_db_bool($this->get_config('fullentry', true));
?>
<form id="searchform" action="<?php echo $serendipity['serendipityHTTPPath'] . $serendipity['indexFile']; ?>" method="get">
    <div>
        <input type="hidden" name="serendipity[action]" value="search" />
        <input type="hidden" name="serendipity[fullentry]" value="<?php echo $fullentry ?>" />
        <input type="text" id="serendipityQuickSearchTermField" name="serendipity[searchTerm]" size="13" />
        <input class="quicksearch_submit" type="submit" value="&gt;" name="serendipity[searchButton]" title="<?PHP echo GO; ?>" style="width: 2em;" />
    </div>
    <div id="LSResult" style="display: none;"><div id="LSShadow"></div></div>
</form>
<?php
        serendipity_plugin_api::hook_event('quicksearch_plugin', $serendipity);
    }
}

?>