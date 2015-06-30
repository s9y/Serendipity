<?php

// Contributed by Christian Machmeier <cm@redsplash.de>
// Randomizing contributed by Christian Brabandt <cb@256bit.org>

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_plugin_recententries extends serendipity_plugin {
    var $title = PLUGIN_RECENTENTRIES_TITLE;

    function introspect(&$propbag) {
        $this->title = $this->get_config('title', $this->title);

        $propbag->add('name',          PLUGIN_RECENTENTRIES_TITLE);
        $propbag->add('description',   PLUGIN_RECENTENTRIES_BLAHBLAH);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Christian Machmeier, Christian Brabandt, Judebert, Don Chambers');
        $propbag->add('version',       '2.5');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('configuration', array('title', 'number', 'number_from', 'dateformat', 'category', 'randomize', 'show_where'));
        $propbag->add('groups', array('FRONTEND_VIEWS'));
    }

    function introspect_config_item($name, &$propbag) {
        global $serendipity;
        switch($name) {
            case 'title':
                $propbag->add('type',        'string');
                $propbag->add('name',        TITLE);
                $propbag->add('description', TITLE_FOR_NUGGET);
                $propbag->add('default',     PLUGIN_RECENTENTRIES_TITLE);
                break;

            case 'number':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_RECENTENTRIES_NUMBER);
                $propbag->add('description', PLUGIN_RECENTENTRIES_NUMBER_BLAHBLAH);
                $propbag->add('default', 10);
                break;

            case 'number_from':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_RECENTENTRIES_NUMBER_FROM);
                $propbag->add('description', PLUGIN_RECENTENTRIES_NUMBER_FROM_DESC);
                $propbag->add('radio',  array(
                    'value' => array('all', 'skip'),
                    'desc'  => array(PLUGIN_RECENTENTRIES_NUMBER_FROM_RADIO_ALL, PLUGIN_RECENTENTRIES_NUMBER_FROM_RADIO_RECENT)
                    ));
                $propbag->add('default', 'all');
            break;
                
            case 'randomize':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_RECENTENTRIES_RANDOMIZE);
                $propbag->add('description', PLUGIN_RECENTENTRIES_RANDOMIZE_DESC);
                $propbag->add('radio',  array(
                    'value' => array('yes', 'no'),
                    'desc'  => array(YES, NO)
                    ));
                $propbag->add('default', 'no');
            break;

            case 'dateformat':
                $propbag->add('type', 'string');
                $propbag->add('name', GENERAL_PLUGIN_DATEFORMAT);
                $propbag->add('description', sprintf(GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH, '%A, %B %e %Y') . '. ' . PLUGIN_RECENTENTRIES_DATEFORMAT_WIN);
                $propbag->add('default', '%A, %B %e %Y');
                break;

            case 'category':
                $cats    = serendipity_fetchCategories($serendipity['authorid']);
                if (!is_array($cats)) {
                    return false;
                }

                $catlist = serendipity_generateCategoryList($cats, array(0), 4, 0, 0, '', ' . ');
                $tmp_select_cats = explode('@@@', $catlist);

                if (!is_array($tmp_select_cats)) {
                    return false;
                }

                $select_cats = array();
                $select_cats['none'] = ALL_CATEGORIES;
                $select_cats['_cur'] = PARENT_CATEGORY;
                foreach($tmp_select_cats as $cidx => $tmp_select_cat) {
                    $select_cat = explode('|||', $tmp_select_cat);
                    if (!empty($select_cat[0]) && !empty($select_cat[1])) {
                        $select_cats[$select_cat[0]] = $select_cat[1];
                    }
                }

                $propbag->add('type',          'multiselect');
                $propbag->add('select_values', $select_cats);
                $propbag->add('select_size',   5);
                $propbag->add('name',          CATEGORY);
                $propbag->add('description',   CATEGORIES_TO_FETCH);
                $propbag->add('default',       'none');
                break;

            case 'show_where':
                $select = array('extended' => PLUGIN_ITEM_DISPLAY_EXTENDED, 'overview' => PLUGIN_ITEM_DISPLAY_OVERVIEW, 'both' => PLUGIN_ITEM_DISPLAY_BOTH);
                $propbag->add('type',        'select');
                $propbag->add('select_values', $select);
                $propbag->add('name',        PLUGIN_ITEM_DISPLAY);
                $propbag->add('description', '');
                $propbag->add('default',     'both');
            break;
                
            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title) {
        global $serendipity;

        $number     = $this->get_config('number');
        $dateformat = $this->get_config('dateformat');
        $category   = $this->get_config('category', 'none');
        $show_where = $this->get_config('show_where', 'both');

        if ($show_where == 'extended' && (!isset($serendipity['GET']['id']) || !is_numeric($serendipity['GET']['id']))) {
            return false;
        } else if ($show_where == 'overview' && isset($serendipity['GET']['id']) && is_numeric($serendipity['GET']['id'])) {
            return false;
        }

        if ($category == '_cur') {
            $category = $serendipity['GET']['category'];
            if (empty($category) && !empty($serendipity['GET']['id'])) {
                $entry = serendipity_fetchEntry('id', $serendipity['GET']['id']);
                $category = $entry['categories'][0]['categoryid'];
            }
        }
        $title          = $this->get_config('title', $this->title);
        $number_from_sw = $this->get_config('number_from');
        $randomize      = ($this->get_config('randomize') == "yes") ? true : false ;

        $sql_condition = array();
        $sql_condition['joins'] = '';
        $sql_condition['and']   = '';

        if ($category != 'none' && !empty($category)) {
                         
            $sql_categories = array();
            if (is_numeric($category)) {
                $sql_categories[] = $category;
            } else {
                $sql_categories = explode('^', $category);
            }
            
            $category_parts = array();
            foreach($sql_categories AS $sql_category) {
                $category_parts[] = "\n" . implode(' AND ', serendipity_fetchCategoryRange($sql_category));
            }

            $sql_condition['and'] .= ' AND (c.category_left BETWEEN ' . implode(' OR c.category_left BETWEEN ', $category_parts) . ')';
        }

        if (!$number || !is_numeric($number) || $number < 1) {
            $number = 10;
        }

        $sql_number = serendipity_db_limit_sql($number);
        $db         = $serendipity['dbType'];

        switch($number_from_sw) {
            case 'skip':
                $sql_number = serendipity_db_limit_sql(serendipity_db_limit($serendipity['fetchLimit'], $number));
                break;
        }

        if (!$dateformat || strlen($dateformat) < 1) {
            $dateformat = '%A, %B %e %Y';
        }
        if ($randomize) {
            if ($db ==  'mysql' || $db == 'mysqli') {
                $sql_order = "ORDER BY RAND()";
            } else {
                // SQLite and PostgreSQL support this, hooray.
                $sql_order = "ORDER BY RANDOM()";
            }
        } else {
            $sql_order = "ORDER BY timestamp DESC ";
        }

        $sql_condition['and'] .= "AND timestamp <= " . time();
        serendipity_ACL_SQL($sql_condition, $category == 'none');


        if (!stristr($sql_condition['joins'], $serendipity['dbPrefix'] . 'category')) {
            $sql_condition['joins'] = ' LEFT OUTER JOIN ' . $serendipity['dbPrefix'] . 'category AS c  ON ec.categoryid = c.categoryid ' . $sql_condition['joins'];
        }

        if (!stristr($sql_condition['joins'], $serendipity['dbPrefix'] . 'entrycat')) {
            $sql_condition['joins'] = ' LEFT OUTER JOIN ' . $serendipity['dbPrefix'] . 'entrycat AS ec ON id = ec.entryid ' . $sql_condition['joins'];
        }

        $entries_query = "SELECT DISTINCT id,
                                title,
                                timestamp,
                                epm.value AS multilingual_title
                           FROM {$serendipity['dbPrefix']}entries AS e
                                {$sql_condition['joins']}

                LEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties AS epm
                             ON (epm.entryid = e.id AND epm.property = 'multilingual_title_" . $serendipity['lang'] . "')

                          WHERE isdraft = 'false' {$sql_condition['and']}
                                $sql_order
                                $sql_number";
        
        $entries = serendipity_db_query($entries_query);
        
        if (is_string($entries)) {
            echo $entries . "<br />\n";
            echo $entries_query . "<br />\n";
        }

        if (isset($entries) && is_array($entries)) {
            echo '<dl>' . "\n";
            foreach ($entries as $k => $entry) {
                if (!empty($entry['multilingual_title'])) {
                    $entry['title'] = $entry['multilingual_title'];
                }
                $entryLink = serendipity_archiveURL(
                               $entry['id'],
                               $entry['title'],
                               'serendipityHTTPPath',
                               true,
                               array('timestamp' => $entry['timestamp'])
                            );

                if (empty($entry['title'])) {
                    $entry['title'] = '#' . $entry['id'];
                }

                echo '<dt class="serendipity_recententries_entrylink"><a href="' . $entryLink . '" title="' . serendipity_specialchars($entry['title']) . '">' . serendipity_specialchars($entry['title']) . '</a></dt>' . "\n"
                     . '<dd class="serendipity_recententries_entrydate serendipitySideBarDate">'
                     . serendipity_specialchars(serendipity_strftime($dateformat, $entry['timestamp']))
                     . '</dd>' . "\n";
            }
            echo '</dl>' . "\n\n";
        }
    }
}

/* vim: set sts=4 ts=4 smartindent autoindent : */
