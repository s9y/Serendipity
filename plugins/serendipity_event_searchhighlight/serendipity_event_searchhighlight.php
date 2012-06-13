<?php # $Id$

/**********************************/
/*  Authored by Tom Sommer, 2004  */
/**********************************/

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_searchhighlight extends serendipity_event
{
    var $title = PLUGIN_EVENT_SEARCHHIGHLIGHT_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_SEARCHHIGHLIGHT_NAME);
        $propbag->add('description',   PLUGIN_EVENT_SEARCHHIGHLIGHT_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Tom Sommer');
        $propbag->add('version',       '1.8');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('event_hooks',   array('frontend_display' => true, 'css' => true));
        $propbag->add('groups', array('FRONTEND_EXTERNAL_SERVICES'));

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
            ),
            array(
              'name'     => 'PLUGIN_EVENT_SEARCHHIGHLIGHT_STATICPAGE',
              'element'  => 'content',
            )
        );

        $conf_array = array();
        foreach($this->markup_elements as $element) {
            $conf_array[] = $element['name'];
        }
        $propbag->add('configuration', $conf_array);
    }


    function generate_content(&$title) {
        $title = $this->title;
    }


    function introspect_config_item($name, &$propbag)
    {
        $propbag->add('type',        'boolean');
        $propbag->add('name',        constant($name));
        $propbag->add('description', sprintf(APPLY_MARKUP_TO, constant($name)));
        $propbag->add('default',     'true');
        return true;
    }

    function loadConstants() {
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_NONE', 0);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_GOOGLE', 1);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_YAHOO', 2);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_LYCOS', 3);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_MSN', 4);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_ALTAVISTA', 5);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_AOL_DE', 6);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_AOL_COM', 7);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_BING', 8);
        define('PLUGIN_EVENT_SEARCHHIGHLIGHT_S9Y', 9);
    }

    function getSearchEngine() {
        $url = parse_url($this->uri);

        /* Patterns should be placed in the order in which they are most likely to occur */
        if ( preg_match('@^(www\.)?google\.@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_GOOGLE;
        }
        if ( preg_match('@^search\.yahoo\.@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_YAHOO;
        }
        if ( preg_match('@^search\.lycos\.@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_LYCOS;
        }
        if ( preg_match('@^search\.msn\.@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_MSN;
        }
        if ( preg_match('@^(www\.)?altavista\.@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_ALTAVISTA;
        }
        if ( preg_match('@^suche\.aol\.de@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_AOL_DE;
        }
        if ( preg_match('@^search\.aol\.com@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_AOL_COM;
        }
        if ( preg_match('@^(www\.)?bing\.@i', $url['host']) ) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_BING;
        }
        
        if (!empty($_SESSION['search_referer']) && $this->uri != $_SESSION['search_referer']) {
            $this->uri = $_SESSION['search_referer'];
            return $this->getSearchEngine();
        }

        if ($url['host'] == $_SERVER['HTTP_HOST']) {
            return PLUGIN_EVENT_SEARCHHIGHLIGHT_S9Y;
        }

        return false;
    }

    function getQuery() {
        global $serendipity;
        if ( empty($this->uri) ) {
            return false;
        }

        $this->loadConstants();
        $url = parse_url($this->uri);
        parse_str($url['query'], $pStr);
        
        $s = $this->getSearchEngine();
        
        switch ( $s ) {
            case PLUGIN_EVENT_SEARCHHIGHLIGHT_S9Y:
                $query = $pStr['serendipity']['searchTerm'];
                
                if (!empty($_REQUEST['serendipity']['searchTerm'])) {
                    $query = $_REQUEST['serendipity']['searchTerm'];
                }

                if (!empty($serendipity['GET']['searchTerm'])) {
                    $query = $serendipity['GET']['searchTerm'];
                } 
                /* highlight selected static page, if not having a ['GET']['searchTerm'] REQUEST, but coming from a /search/ referrer */
                if(empty($query)) { 
                    // look out for path or query depending mod_rewrite setting
                    $urlpath = (($serendipity['rewrite'] == 'rewrite')  ? parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH)
                                                                        : parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY)
                                );
                    if ( strpos($urlpath, 'search/') ) { 
                        $urlpath = htmlspecialchars(strip_tags($urlpath)); // avoid spoofing
						$path = explode('/', urldecode($urlpath)); // split and decode non ASCII
                        $query = $path[(array_search('search', $path)+1)];
                    }
                }
                break;

            case PLUGIN_EVENT_SEARCHHIGHLIGHT_MSN :
            case PLUGIN_EVENT_SEARCHHIGHLIGHT_BING :
            case PLUGIN_EVENT_SEARCHHIGHLIGHT_AOL_DE :
            case PLUGIN_EVENT_SEARCHHIGHLIGHT_ALTAVISTA :
            case PLUGIN_EVENT_SEARCHHIGHLIGHT_GOOGLE :
                $query = $pStr['q'];
                break;

            case PLUGIN_EVENT_SEARCHHIGHLIGHT_YAHOO :
                $query = $pStr['p'];
                break;

            case PLUGIN_EVENT_SEARCHHIGHLIGHT_AOL_COM :
            case PLUGIN_EVENT_SEARCHHIGHLIGHT_LYCOS :
                $query = $pStr['query'];
                break;

            default:
                if ($_REQUEST['serendipity']['searchTerm'] != '') {
                    $query = $_REQUEST['serendipity']['searchTerm'];
                } else {
                    return false;
                }
        }
        
        /* Clean the query */
        $query = trim($query);
        if (empty($query)) return false;
        $query = preg_replace('/(\"|\')/i', '', $query);

        /* Split by search engine chars or spaces */
        $words = preg_split('/[\s\,\+\.\-\/\=]+/', $query);

        /* Strip search engine keywords or common words we don't bother to highlight */
        $words = array_diff($words, array('AND', 'OR', 'FROM', 'IN'));

        return $words;
    }


    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;

        $this->uri = $_SERVER['HTTP_REFERER'];
        $hooks = &$bag->get('event_hooks');

        if (!isset($hooks[$event])) {
            return false;
        }
		
        if ( $event == 'frontend_display' ) {
            if ( ($queries = $this->getQuery()) === false ) {
                return;
            }

            $_SESSION['is_searchengine_visitor'] = true;
            $_SESSION['search_referer'] = $this->uri;

            foreach ($this->markup_elements as $temp) {

                if ( ! (serendipity_db_bool($this->get_config($temp['name'])) && isset($eventData[$temp['element']])) ) {
                    continue;
                }

                if ($eventData['properties']['ep_disable_markup_' . $this->instance] ||
                    isset($serendipity['POST']['properties']['disable_markup_' . $this->instance])) {
                    continue;
                }

                $element = &$eventData[$temp['element']];

                //Iterate over search terms and do the highlighting.
                foreach ( $queries as $word ) {
                    if ( strpos($word, '*') ) { 
                        // fuzzy search (case insensitive) all words containing term; 
                        $word = str_replace('*', '', $word);
                        /* If the data contains HTML tags, we have to be careful not to break URIs and use a more complex preg */
                        if ( preg_match('/\<.+\>/', $element) ) {
                            $_pattern =  '/(?!<.*?)('. preg_quote($word, '/') .')(?![^<>]*?>)/im';
                        } else {
                            $_pattern = '/('.preg_quote($word, '/').')/im';
                        }
                    } else { 
                        /* If the data contains HTML tags, we have to be careful not to break URIs and use a more complex preg */
                        if ( preg_match('/\<.+\>/', $element) ) {
                            $_pattern =  '/(?!<.*?)(\b'. preg_quote($word, '/') .'\b)(?![^<>]*?>)/im';
                        } else {
                            $_pattern = '/(\b'. preg_quote($word, '/') .'\b)/im';
                        }
                    } 
                    $element = preg_replace($_pattern, '<span class="serendipity_searchQuery">$1</span>', $element);
                } // end foreach
            } // end foreach
            return;
        } // end if


        if ( $event == 'css' ) {
            /* If the user hasn't added a CSS Class called serendipity_searchQuery, we add a pretty one for him */
            if ( strstr($eventData, '.serendipity_searchQuery') === false ) {
                $eventData .= "\n";
                $eventData .= '.serendipity_searchQuery {' . "\n";
                $eventData .= '    background-color: #D81F2A;' . "\n";
                $eventData .= '    color: #FFFFFF;' . "\n";
                $eventData .= '}' . "\n";
            }
            return;
        }

    } // end function
}

/* vim: set sts=4 ts=4 expandtab : */
