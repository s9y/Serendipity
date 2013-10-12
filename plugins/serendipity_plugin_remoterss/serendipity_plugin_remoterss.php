<?php #

// Contributed by Udo Gerhards <udo@babyblaue-seiten.de>
// OPML Contributed by Richard Thomas Harrison <rich@mibnet.plus.com>

@serendipity_plugin_api::load_language(dirname(__FILE__));

class s9y_remoterss_XMLTree {
    function GetChildren($vals, &$i) {
        $children = array();
        $cnt = sizeof($vals);
        while (++$i < $cnt) {
            // compare type
            switch ($vals[$i]['type']) {
                case 'cdata':
                    $children[] = $vals[$i]['value'];
                    break;

                case 'complete':
                    $children[] = array(
                        'tag'        => $vals[$i]['tag'],
                        'attributes' => $vals[$i]['attributes'],
                        'value'      => $vals[$i]['value']
                    );
                    break;

                case 'open':
                    $children[] = array(
                        'tag'        => $vals[$i]['tag'],
                        'attributes' => $vals[$i]['attributes'],
                        'value'      => $vals[$i]['value'],
                        'children'   => $this->GetChildren($vals, $i)
                    );
                    break;

                case 'close':
                    return $children;
            }
        }
    }

    function GetXMLTree($file) {
        require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
        serendipity_request_start();
        $req = new HTTP_Request($file);

        if (PEAR::isError($req->sendRequest()) || $req->getResponseCode() != '200') {
            $data = file_get_contents($file);
        } else {
            // Fetch file
            $data = $req->getResponseBody();
        }
        serendipity_request_end();

        // Global replacements
        // by: waldo@wh-e.com - trim space around tags not within
        $data = preg_replace('@>[[:space:]]+<@', '><', $data);

        // Flatten the input opml file to not have nested categories
        $data = preg_replace('@<outline[^>]+[^/]>@imsU', '', $data);
        $data = str_replace('</outline>', '', $data);

        // XML functions
        $xml_string = '<?xml version="1.0" encoding="UTF-8" ?>';
        if (preg_match('@(<\?xml.+\?>)@imsU', $data, $xml_head)) {
            $xml_string = $xml_head[1];
        }

        $encoding = 'UTF-8';
        if (preg_match('@encoding="([^"]+)"@', $xml_string, $xml_encoding)) {
            $encoding = $xml_encoding[1];
        }

        $p = xml_parser_create($encoding);
        // by: anony@mous.com - meets XML 1.0 specification
        @xml_parser_set_option($p, XML_OPTION_CASE_FOLDING, 0);
        xml_parser_set_option($p, XML_OPTION_TARGET_ENCODING, LANG_CHARSET);
        xml_parse_into_struct($p, $data, $vals, $index);
        xml_parser_free($p);

        $i = 0;
        $tree = array();
        $tree[] = array(
            'tag'        => $vals[$i]['tag'],
            'attributes' => $vals[$i]['attributes'],
            'value'      => $vals[$i]['value'],
            'children'   => $this->GetChildren($vals, $i)
        );

        return $tree;
    }
}

define('OPMLDEBUG', '0');

class s9y_remoterss_OPML {
    var $cacheOPMLHead;
    var $cacheOPMLBody;
    var $cacheOPMLOutline;

    function s9y_remoterss_OPML() {
        $this->cacheOPMLHead    = array();
        $this->cacheOPMLBody    = array();
        $this->cacheOPMLOutline = array();
    }

    function parseOPML($file) {
        $xmltree  = new s9y_remoterss_XMLTree();
        $opmltree = $xmltree->GetXMLTree($file);

        return $opmltree[0];
    }

    function findOPMLTag($arr, $tag) {
        $i = 0;
        $tagindex = false;
        $children = $arr['children'];
        $cnt = count($children);

        while ($i < $cnt) {

            if ($children[$i]['tag'] == $tag) {
                $tagindex = $i;
                break;
            }

            ++$i;
        }

        return $tagindex !== false ? $tagindex : false;
    }

    function getOPMLTag($tree, $tag) {
        $tagindex = $this->findOPMLTag($tree, $tag);

        if (OPMLDEBUG == 1) {
            echo "\ngetOPMLTag('" . $tag . "') = " . $tagindex . "<pre>\n";
            print_r($tree['children'][$tagindex]);
            echo "\n</pre>\n";
        }

        return $tagindex !== false ? $tree['children'][$tagindex] : false;
    }

    function getOPMLHead($tree) {
        $head = array();

        if (isset($this->cacheOPMLHead) && count($this->cacheOPMLHead) != 0) {
            $head = $this->cacheOPMLHead;
        } else {

            if (OPMLDEBUG == 1) {
                echo "\ngetOPMLHead<br />\n";
            }

            $head = $this->getOPMLTag($tree, 'head');

            if ($head !== false) {
                $this->cacheOPMLHead = $head;

                if (OPMLDEBUG == 1) {
                    echo "\nCaching head<pre>\n";
                    print_r($this->cacheOPMLHead);
                    echo "\n</pre>\n";
                }
            } elseif (OPMLDEBUG == 1) {
                echo "\nfalse<br />\n";
            }

        }

        return $head['tag'] == 'head' ? $head : false;
    }

    function getOPMLBody($tree) {
        $body = array();

        if (isset($this->cacheOPMLBody) && count($this->cacheOPMLBody) != 0) {
                $body = $this->cacheOPMLBody;
        } else {

            if (OPMLDEBUG == 1) {
                echo "\ngetOPMLBody<br />\n";
            }

            $body = $this->getOPMLTag($tree, 'body');

            if ($body !== false) {
                $this->cacheOPMLBody = $body;

                if (OPMLDEBUG == 1) {
                    echo "\nCaching body<pre>\n";
                    print_r($this->cacheOPMLBody);
                    echo "\n</pre>\n";
                }

            } elseif (OPMLDEBUG == 1) {
                echo "\nfalse<br />\n";
            }
        }

        return $body['tag'] == 'body' ? $body : false;
    }

    function getOPMLOutline($tree, $index) {

        if (isset($this->cacheOPMLOutline[$index])) {
            return $this->cacheOPMLOutline[$index];
        }

        $body = $this->getOPMLBody($tree);

        if (!$body) {
            return false;
        }

        $outline = $body['children'][$index];

        if ($outline['tag'] == 'outline') {
            $this->cacheOPMLOutline[$index] = $outline;

            if (OPMLDEBUG == 1) {
                echo "\ngetOPMLOutline[" . $index . "]<br />\n";
                echo "\nCaching outline[" . $index . "]<pre>\n";
                print_r($this->cacheOPMLOutline[$index]);
                echo "\n</pre>\n";
            }

            return $outline;
        } else {
            return false;
        }
    }

    function getOPMLOutlineAttr($tree, $index) {
        $outline = $this->getOPMLOutline($tree, $index);

        return $outline != false ? $outline['attributes'] : false;
    }

}

class serendipity_plugin_remoterss extends serendipity_plugin {
    var $title = PLUGIN_REMOTERSS_TITLE;
    var $encoding = null;

    function introspect(&$propbag) {
        $this->title = $this->get_config('sidebartitle', $this->title);

        $propbag->add('name',          PLUGIN_REMOTERSS_TITLE);
        $propbag->add('description',   PLUGIN_REMOTERSS_BLAHBLAH);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Udo Gerhards, Richard Thomas Harrison');
        $propbag->add('version',       '1.20');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('configuration', array('sidebartitle', 'feedtype', 'template', 'rssuri', 'show_rss_element', 'smarty', 'number', 'use_rss_link', 'escape_rss', 'displaydate', 'dateformat', 'charset', 'target', 'cachetime', 'bulletimg', 'markup'));
        $propbag->add('groups', array('FRONTEND_EXTERNAL_SERVICES'));
    }

    function introspect_config_item($name, &$propbag) {
        switch($name) {

            case 'use_rss_link':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_REMOTERSS_RSSLINK);
                $propbag->add('description', PLUGIN_REMOTERSS_RSSLINK_DESC);
                $propbag->add('default', 'true');
                break;

            case 'escape_rss':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_REMOTERSS_RSSESCAPE);
                $propbag->add('description', PLUGIN_REMOTERSS_RSSESCAPE_DESC);
                $propbag->add('default', 'true');
                break;

            case 'show_rss_element':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_REMOTERSS_RSSFIELD);
                $propbag->add('description', PLUGIN_REMOTERSS_RSSFIELD_DESC);
                $propbag->add('default', 'title');
                break;

            case 'markup':
                $propbag->add('type', 'boolean');
                $propbag->add('name', DO_MARKUP);
                $propbag->add('description', DO_MARKUP_DESCRIPTION);
                $propbag->add('default', 'false');
                break;

            case 'charset':
                $propbag->add('type', 'radio');
                $propbag->add('name', CHARSET);
                $propbag->add('description', CHARSET);
                $propbag->add('default', 'native');

                $charsets = array();
                if (LANG_CHARSET != 'UTF-8') {
                    $charsets['value'][] = $charsets['desc'][] = 'UTF-8';
                }
                if (LANG_CHARSET != 'ISO-8859-1') {
                    $charsets['value'][] = $charsets['desc'][] = 'ISO-8859-1';
                }

                $charsets['value'][] = 'native';
                $charsets['desc'][]  = LANG_CHARSET;
                $propbag->add('radio', $charsets);
                break;

            case 'feedtype':
                $select = array('rss' => 'RSS', 'opml' => 'OPML', 'atom' => 'ATOM');
                $propbag->add('type', 'select');
                $propbag->add('name', PLUGIN_REMOTERSS_FEEDTYPE);
                $propbag->add('description', PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH);
                $propbag->add('select_values', $select);
                $propbag->add('default', 'rss');
                break;

            case 'number':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_REMOTERSS_NUMBER);
                $propbag->add('description', PLUGIN_REMOTERSS_NUMBER_BLAHBLAH);
                $propbag->add('default', '0');
                break;

            case 'dateformat':
                $propbag->add('type', 'string');
                $propbag->add('name', GENERAL_PLUGIN_DATEFORMAT);
                $propbag->add('description', sprintf(GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH, '%A, %B %e. %Y'));
                $propbag->add('default', '%A, %B %e. %Y');
                break;

            case 'sidebartitle':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_REMOTERSS_SIDEBARTITLE);
                $propbag->add('description', PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH);
                $propbag->add('default', '');
                break;

            case 'rssuri':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_REMOTERSS_RSSURI);
                $propbag->add('description', PLUGIN_REMOTERSS_RSSURI_BLAHBLAH);
                $propbag->add('default', '');
                break;

            case 'target':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_REMOTERSS_RSSTARGET);
                $propbag->add('description', PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH);
                $propbag->add('default', '_blank');
                break;

            case 'cachetime':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_REMOTERSS_CACHETIME);
                $propbag->add('description', PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH);
                $propbag->add('default', 10800);
                break;

            case 'bulletimg':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_REMOTERSS_BULLETIMG);
                $propbag->add('description', PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH);
                $propbag->add('default', '');
                break;

            case 'smarty':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        CATEGORY_PLUGIN_TEMPLATE);
                $propbag->add('description', CATEGORY_PLUGIN_TEMPLATE_DESC);
                $propbag->add('default',     false);
                break;

            case 'displaydate':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_REMOTERSS_DISPLAYDATE);
                $propbag->add('description', PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH);
                $propbag->add('default', 'true');
                break;

            case 'template':
                $select = array('plugin_remoterss.tpl' => 'Default (plugin_remoterss.tpl)', 'plugin_remoterss_nasaiotd.tpl' => 'NASA Image of the day');

                $add_files = glob(dirname(__FILE__) . '/*.tpl');
                foreach($add_files AS $add_file) {
                    $bn = basename($add_file);
                    if (!isset($select[$bn])) {
                        $select[$bn] = $bn;
                    }
                }
                $propbag->add('type', 'select');
                $propbag->add('name', PLUGIN_REMOTERSS_TEMPLATE);
                $propbag->add('description', PLUGIN_REMOTERSS_TEMPLATE_DESC);
                $propbag->add('select_values', $select);
                $propbag->add('default', 'plugin_remoterss.tpl');
                break;

            default:
                return false;
        }
        return true;
    }

    // Check if a given URI is readable.
    function urlcheck($uri) {

        // These two substring comparisons are faster than one regexp.
        if ('http://' != substr($uri, 0, 7) && 'https://' != substr($uri, 0, 8)) {
            return false;
        }

        // Disabled by now. May get enabled in the future, but for now the extra HTTP call isn't worth trying.
        return true;
        require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
        serendipity_request_start();
        $req = new HTTP_Request($uri);

        if (PEAR::isError($req->sendRequest()) || !preg_match('@^[23]..@', $req->getResponseCode())) {
            serendipity_request_end();
            return false;
        } else {
            serendipity_request_end();
            return true;
        }
    }

    function debug($msg) {
        static $debug = false;

        if ($debug === false) {
            return false;
        }

        $fp = fopen('rss.log', 'a');
        fwrite($fp, '[' . date('Y-m-d H:i') . '] ' . $msg . "\n");
        echo $msg . "<br />\n";
        fclose($fp);
    }

    function generate_content(&$title) {
        global $serendipity;

        $number       = $this->get_config('number');
        $displaydate  = $this->get_config('displaydate','true');
        $dateformat   = $this->get_config('dateformat');
        $sidebartitle = $title = $this->get_config('sidebartitle', $this->title);
        $rssuri       = $this->get_config('rssuri');
        $target       = $this->get_config('target');
        $cachetime    = $this->get_config('cachetime');
        $feedtype     = $this->get_config('feedtype', 'rss');
        $markup       = $this->get_config('markup', 'false');
        $bulletimg    = $this->get_config('bulletimg');
        $charset      = $this->get_config('charset', 'native');

        if (!$number || !is_numeric($number) || $number < 1) {
            $showAll = true;
        } else {
            $showAll = false;
        }

        if (!$dateformat || strlen($dateformat) < 1) {
            $dateformat = '%A, %B %e. %Y';
        }

        if (!$cachetime || !is_numeric($cachetime)) {
            $cachetime = 10800; // 3 hours in seconds
        }

        $smarty = serendipity_db_bool($this->get_config('smarty'));
        if ($this->get_config('template') != 'plugin_remoterss.tpl') {
            $smarty = true;
        }

        if (trim($rssuri)) {
            $feedcache = $serendipity['serendipityPath'] . 'templates_c/remoterss_cache_' . md5(preg_replace('@[^a-z0-9]*@i', '', $rssuri) . $this->get_config('template')) . '.dat';
            if (!file_exists($feedcache) || filesize($feedcache) == 0 || filemtime($feedcache) < (time() - $cachetime)) {
                $this->debug('Cachefile does not existing.');
                if (!$this->urlcheck($rssuri)) {
                    $this->debug('URLCheck failed');
                    echo '<!-- No valid URL! -->';
                } elseif ($feedtype == 'rss') {
                    $this->debug('URLCheck succeeded. Touching ' . $feedcache);
                    // Touching the feedcache file will prevent loops of death when the RSS target is the same URI than our blog.
                    @touch($feedcache);
                    require_once S9Y_PEAR_PATH . 'Onyx/RSS.php';
                    $c = new Onyx_RSS($charset);
                    $this->debug('Running Onyx Parser');
                    $c->parse($rssuri);
                    $this->encoding = $c->rss['encoding'];

                    $use_rss_link = serendipity_db_bool($this->get_config('use_rss_link'));
                    $rss_elements = explode(',', $this->get_config('show_rss_element'));
                    $escape_rss   = serendipity_db_bool($this->get_config('escape_rss'));
                    $i = 0;
                    $content = '';
                    $smarty_items = array();
                    while (($showAll || ($i < $number)) && ($item = $c->getNextItem())) {
                        if (empty($item['title'])) {
                            continue;
                        }

                        $content .= '<div class="rss_item">';

                        if ($use_rss_link) {
                            $content .= '<div class="rss_link"><a href="' . htmlspecialchars($this->decode($item['link'])) . '" ' . (!empty($target) ? 'target="'.$target.'"' : '') . '>';
                        }

                        if (!empty($bulletimg)) {
                            $content .= '<img src="' . $bulletimg . '" border="0" alt="*" /> ';
                        }

                        $is_first = true;
                        foreach($rss_elements AS $rss_element) {
                            $rss_element = trim($rss_element);

                            if (!$is_first) {
                                $content .= '<span class="rss_' . preg_replace('@[^a-z0-9]@imsU', '', $rss_element) . '">';
                            }

                            if ($escape_rss) {
                                $content .= $this->decode($item[$rss_element]);
                            } else {
                                $content .= htmlspecialchars($this->decode($item[$rss_element]));
                            }

                            if ($smarty) {
                                $item['display_elements'][preg_replace('@[^a-z0-9]@imsU', '', $rss_element)] = $this->decode($item[$rss_element]);
                            }

                            if (!$is_first) {
                                $content .= '</span>';
                            }

                            if ($is_first && $use_rss_link) {
                                $content .= '</a></div>'; // end of first linked element
                            }
                            $is_first = false;
                        }

                        if ($is_first && $use_rss_link) {
                            // No XML element has been configured.
                            $content .= '</a></div>';
                        }

                        $content .= "<br />\n";
                        $item['timestamp'] = @strtotime(isset($item['pubdate']) ? $item['pubdate'] : $item['dc:date']);
                        if (!($item['timestamp'] == -1) AND ($displaydate == 'true')) {
                            $content .= '<div class="serendipitySideBarDate">'
                                      . htmlspecialchars(serendipity_formatTime($dateformat, $item['timestamp'], false))
                                      . '</div>';

                        }

                        if ($smarty) {
                            $smarty_items['items'][$i] = $item;
                            $smarty_items['items'][$i]['css_class'] = preg_replace('@[^a-z0-9]@imsU', '', $rss_element);
                            foreach($item AS $key => $val) {
                                $smarty_items['items'][$i]['decoded_' . str_replace(':', '_', $key)] = $this->decode($key);
                            }
                        }
                        $content .= '</div>'; // end of rss_item
                        ++$i;
                    }

                    if ($smarty) {
                        $smarty_items['use_rss_link'] = $use_rss_link;
                        $smarty_items['bulletimg']    = $bulletimg;
                        $smarty_items['escape_rss']   = $escape_rss;
                        $smarty_items['displaydate']  = $displaydate;
                        $smarty_items['dateformat']   = $dateformat;
                        $smarty_items['target']       = $target;

                        $serendipity['smarty']->assign_by_ref('remoterss_items', $smarty_items);
                        $tpl = $this->get_config('template');
                        if (empty($tpl)) {
                            $tpl = 'plugin_remoterss.tpl';
                        }

                        // Template specifics go here
                        switch($tpl) {
                            case 'plugin_remoterss_nasaiotd.tpl':
                                $smarty_items['nasa_image'] = $c->getData('image');
                            break;
                        }
                        $content = $this->parseTemplate($tpl);
                    }

                    $this->debug('Caching Feed (' . strlen($content) . ' bytes)');
                    $fp = @fopen($feedcache, 'w');
                    if (trim($content) != '' && $fp) {
                        fwrite($fp, $content);
                        fclose($fp);
                        $this->debug('Feed cache written');
                    } else {
                        $this->debug('Could not write (empty?) cache.');
                        echo '<!-- Cache failed to ' . $feedcache . ' in ' . getcwd() . ' --><br />';
                        if (trim($content) == '') {
                            $this->debug('Getting old feedcache');
                            $content = @file_get_contents($feedcache);
                        }
                    }
                    $this->debug('RSS Plugin finished.');

                } elseif ($feedtype == 'atom') {
                    $this->debug('URLCheck succeeded. Touching ' . $feedcache);
                    // Touching the feedcache file will prevent loops of death when the RSS target is the same URI than our blog.
                    @touch($feedcache);

                    require_once S9Y_PEAR_PATH . '/simplepie/simplepie.inc';

                    $this->debug('Running simplepie Parser');

                    $simplefeed = new SimplePie();
                    $simplefeed->cache=false;
                    $simplefeed->set_feed_url($rssuri);
                    $success = $simplefeed->init();
                    $simplefeed->set_output_encoding($charset);
                    $simplefeed->handle_content_type();
                    $this->encoding = $charset;

                    $use_rss_link = serendipity_db_bool($this->get_config('use_rss_link'));
                    $rss_elements = explode(',', $this->get_config('show_rss_element'));
                    $escape_rss   = serendipity_db_bool($this->get_config('escape_rss'));
                    $i = 0;
                    $content = '';
                    $smarty_items = array();

                    foreach($simplefeed->get_items() as $simpleitem) {
                        // map SimplePie items to s9y items
                        $item['title']       = $simpleitem->get_title();
                        $item['link']        = $simpleitem->get_permalink();
                        $item['pubdate']     = $simpleitem->get_date('U');

                        $item['date']        = $simpleitem->get_date('U');
                        $item['description'] = $simpleitem->get_description();
                        $item['content']     = $simpleitem->get_content();
                        $item['author']      = $simpleitem->get_author();

                        if (!$showAll && $i > $number) break;

                        if (empty($item['title'])) {
                            continue;
                        }

                        $content .= '<div class="rss_item">';

                        if ($use_rss_link) {
                            $content .= '<div class="rss_link"><a href="' . htmlspecialchars($this->decode($item['link'])) . '" ' . (!empty($target) ? 'target="'.$target.'"' : '') . '>';
                        }

                        if (!empty($bulletimg)) {
                            $content .= '<img src="' . $bulletimg . '" border="0" alt="*" /> ';
                        }

                        $is_first = true;
                        foreach($rss_elements AS $rss_element) {
                            $rss_element = trim($rss_element);

                            if (!$is_first) {
                                $content .= '<span class="rss_' . preg_replace('@[^a-z0-9]@imsU', '', $rss_element) . '">';
                            }

                            if ($escape_rss) {
                                $content .= $this->decode($item[$rss_element]);
                            } else {
                                $content .= htmlspecialchars($this->decode($item[$rss_element]));
                            }

                            if ($smarty) {
                                $item['display_elements'][preg_replace('@[^a-z0-9]@imsU', '', $rss_element)] = $this->decode($item[$rss_element]);
                            }

                            if (!$is_first) {
                                $content .= '</span>';
                            }

                            if ($is_first && $use_rss_link) {
                                $content .= '</a></div>'; // end of first linked element
                            }
                            $is_first = false;
                        }

                        if ($is_first && $use_rss_link) {
                            // No XML element has been configured.
                            $content .= '</a></div>';
                        }

                        $content .= "<br />\n";
                        $item['timestamp'] = @strtotime(isset($item['pubdate']) ? $item['pubdate'] : $item['dc:date']);
                        if (!($item['timestamp'] == -1) AND ($displaydate == 'true')) {
                            $content .= '<div class="serendipitySideBarDate">'
                                      . htmlspecialchars(serendipity_formatTime($dateformat, $item['timestamp'], false))
                                      . '</div>';

                        }

                        if ($smarty) {
                            $smarty_items['items'][$i] = $item;
                            $smarty_items['items'][$i]['css_class'] = preg_replace('@[^a-z0-9]@imsU', '', $rss_element);
                            foreach($item AS $key => $val) {
                                $smarty_items['items'][$i]['decoded_' . str_replace(':', '_', $key)] = $this->decode($key);
                            }
                        }
                        $content .= '</div>'; // end of rss_item
                        ++$i;
                    }

                    if ($smarty) {
                        $smarty_items['use_rss_link'] = $use_rss_link;
                        $smarty_items['bulletimg']    = $bulletimg;
                        $smarty_items['escape_rss']   = $escape_rss;
                        $smarty_items['displaydate']  = $displaydate;
                        $smarty_items['dateformat']   = $dateformat;
                        $smarty_items['target']       = $target;

                        $serendipity['smarty']->assign_by_ref('remoterss_items', $smarty_items);
                        $tpl = $this->get_config('template');
                        if (empty($tpl)) {
                            $tpl = 'plugin_remoterss.tpl';
                        }

                        // Template specifics go here
                        switch($tpl) {
                            case 'plugin_remoterss_nasaiotd.tpl':
                                $smarty_items['nasa_image'] = $c->getData('image');
                            break;
                        }
                        $content = $this->parseTemplate($tpl);
                    }

                    $this->debug('Caching Feed (' . strlen($content) . ' bytes)');
                    $fp = @fopen($feedcache, 'w');
                    if (trim($content) != '' && $fp) {
                        fwrite($fp, $content);
                        fclose($fp);
                        $this->debug('Feed cache written');
                    } else {
                        $this->debug('Could not write (empty?) cache.');
                        echo '<!-- Cache failed to ' . $feedcache . ' in ' . getcwd() . ' --><br />';
                        if (trim($content) == '') {
                            $this->debug('Getting old feedcache');
                            $content = @file_get_contents($feedcache);
                        }
                    }
                    $this->debug('RSS Plugin (Atom) finished.');
                } elseif ($feedtype == 'opml') {
                    // Touching the feedcache file will prevent loops of death when the RSS target is the same URI than our blog.
                    @touch($feedcache);

                    $opml = new s9y_remoterss_OPML();
                    $opmltree = $opml->parseOPML($rssuri);

                    if (OPMLDEBUG == 1) {
                        echo "\n<pre>\n";
                        print_r($opmltree);
                        echo "\n</pre>\n";
                    }

                    if ($opmltree['tag'] === 'opml') {
                        $head        = $opml->getOPMLHead($opmltree);
                        $ownerName   = $opml->getOPMLTag($head, 'ownerName');
                        $blogrolling = $ownerName != false ? ($ownerName['value'] == 'Blogroll Owner' ? true : false) : false;

                        $i = 0;
                        $content = '';
                        while (($showAll || ($i < $number)) && ($item = $opml->getOPMLOutlineAttr($opmltree, $i))) {
                            if (!empty($item['url'])) {
                                $url = $this->decode($item['url']);
                            } elseif (!empty($item['htmlUrl'])) {
                                $url = $this->decode($item['htmlUrl']);
                            } elseif (!empty($item['xmlUrl'])) {
                                $url = $this->decode($item['xmlUrl']);
                            } elseif (!empty($item['urlHTTP'])) {
                                $url = $this->decode($item['urlHTTP']);
                            } else {
                                $url = '';
                            }

                            if (!empty($item['text'])) {
                                $text = htmlspecialchars($this->decode($item['text']));
                            } elseif (!empty($item['title'])) {
                                $text = htmlspecialchars($this->decode($item['title']));
                            } elseif (!empty($item['description'])) {
                                $text = htmlspecialchars($this->decode($item['description']));
                            } else {
                                $text = '';
                            }

                            if ($blogrolling === true && (!empty($text) || !empty($url))) {
                                $content .= '&bull; <a href="' . htmlspecialchars($url) . '" ' . (!empty($target) ? 'target="'.$target.'"' : '') . ' title="' . $text . '">' . $text . "</a>";
                                if (isset($item['isRecent'])) {
                                    $content .= ' <span style="color: Red; ">*</span>';
                                }
                                $content .= "<br />";
                            } elseif ((isset($item['type']) && $item['type'] == 'url') || !empty($url)) {
                                $content .= '&bull; <a href="' . htmlspecialchars($url) . '" ' . (!empty($target) ? 'target="'.$target.'"' : '') . ' title="' . $text . '">' . $text . "</a>";
                                $content .= "<br />";
                            }
                            ++$i;
                        }

                        /* Pretend to be a html_nugget so we can apply markup events. */
                        if ($markup == 'true') {
                            $entry = array('html_nugget' => $content);
                            serendipity_plugin_api::hook_event('frontend_display', $entry);
                            $content = $entry['html_nugget'];
                        }

                        $fp = @fopen($feedcache, 'w');
                        if (trim($content) != '' && $fp) {
                            fwrite($fp, $content);
                            fclose($fp);
                        } else {
                            echo '<!-- Cache failed to ' . $feedcache . ' in ' . getcwd() . ' --><br />';
                            if (trim($content) == '') {
                                $content = @file_get_contents($feedcache);
                            }
                        }
                    } else {
                        echo '<!-- Not a valid OPML feed -->';
                    }
                } else {
                    echo '<!-- no valid feedtype -->';
                }
            } else {
                $this->debug('Got feed from cache ' . $feedcache);
                $content = file_get_contents($feedcache);
            }

            echo $content;
        } else {
           echo PLUGIN_REMOTERSS_NOURI;
        }
    }

    function &decode($string) {
        $target = $this->get_config('charset', 'native');

        // xml_parser_* functions to recoding from ISO-8859-1/UTF-8
        if (LANG_CHARSET == 'ISO-8859-1' || LANG_CHARSET == 'UTF-8') {
            return $string;
        }

        switch($target) {
            case 'native':
                return $string;

            case 'ISO-8859-1':
                if (function_exists('iconv')) {
                    $out = iconv('ISO-8859-1', LANG_CHARSET, $string);
                } elseif (function_exists('recode')) {
                    $out = recode('iso-8859-1..' . LANG_CHARSET, $string);
                } else {
                    return $string;
                }

                return $out;

            case 'UTF-8':
            default:
                $out = utf8_decode($string);
                return $out;
        }
    }
}

/* vim: set sts=4 ts=4 expandtab : */
