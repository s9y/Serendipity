<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

function serveIndex() {
    global $serendipity;
    $serendipity['view'] = 'start';

    if ($serendipity['GET']['action'] == 'search') {
        $serendipity['view'] = 'search';
        $serendipity['uriArguments'] = array(PATH_SEARCH, urlencode($serendipity['GET']['searchTerm']));
    } else {
        $serendipity['uriArguments'][] = PATH_ARCHIVES;
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}

function serve404() {
    global $serendipity;
    $serendipity['view'] = '404';
    $serendipity['viewtype'] = '404_4';
    header('HTTP/1.0 404 Not found');
    header('Status: 404 Not found');
    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}


/* Attempt to locate hidden variables within the URI */
function locateHiddenVariables($_args) {
    global $serendipity;
    foreach ($_args AS $k => $v){
        if ($v == PATH_COMMENTS || $v == PATH_CATEGORIES || $v == PATH_ARCHIVE || $v == PATH_ARCHIVES) {
            continue;
        }

        if ($v[0] == 'P') { /* Page */
            $page = substr($v, 1);
            if (is_numeric($page)) {
                $serendipity['GET']['page'] = $page;
                unset($_args[$k]);
                unset($serendipity['uriArguments'][$k]);
            }
        } elseif ($v[0] == 'A') { /* Author */
            $url_author = substr($v, 1);
            if (is_numeric($url_author)) {
                $serendipity['GET']['viewAuthor'] = $_GET['viewAuthor'] = (int)$url_author;
                unset($_args[$k]);
            }
        } elseif ($v == 'summary') { /* Summary */
            $serendipity['short_archives'] = true;
            $serendipity['head_subtitle'] .= SUMMARY . ' - ';
            unset($_args[$k]);
        } elseif ($v[0] == 'C') { /* category */
            $cat = substr($v, 1);
            if (is_numeric($cat)) {
                $serendipity['GET']['category'] = $cat;
                unset($_args[$k]);
            }
        }
    }
    return $_args;
}

function serveComments() {
    global $serendipity;
    $serendipity['view'] = 'comments';
    $uri = $_SERVER['REQUEST_URI'];
    $_args = serendipity_getUriArguments($uri, true); // Need to also match "." character
    $timedesc = array();

    /* Attempt to locate hidden variables within the URI */
    foreach ($_args AS $k => $v){
        if ($v == PATH_COMMENTS) {
            continue;
        }

        if (preg_match('@^(last|f|t|from|to)[\s_-]*([\d-/ ]+)$@', strtolower(urldecode($v)), $m)) {
            if ($m[1] == 'last') {
                $usetime = time() - ($m[2]*86400);
                $serendipity['GET']['commentStartTime'] = $usetime;
                $timedesc['start'] = serendipity_strftime(DATE_FORMAT_SHORT, $usetime);
                continue;
            }

            $date = strtotime($m[2]);
            if ($date < 1) {
                continue;
            }

            if ($m[1] == 'f' || $m[1] == 'from') {
                $serendipity['GET']['commentStartTime'] = $date;
                $timedesc['start'] = serendipity_strftime(DATE_FORMAT_SHORT, $date);
            } else {
                $serendipity['GET']['commentEndTime'] = $date;
                $timedesc['end'] = serendipity_strftime(DATE_FORMAT_SHORT, $date);
            }
        } elseif ($v == 'trackbacks' || $v == 'comments_and_trackbacks' || $v == 'comments') {
            $serendipity['GET']['commentMode'] = $v;
        } elseif (!empty($v)) {
            $serendipity['GET']['viewCommentAuthor'] .= urldecode($v);
        }
    }

    $serendipity['head_title']    = COMMENTS_FROM . ' ' . serendipity_specialchars($serendipity['GET']['viewCommentAuthor']);
    if (isset($timedesc['start']) && isset($timedesc['end'])) {
        $serendipity['head_title'] .= ' (' . $timedesc['start'] . ' - ' . $timedesc['end'] . ')';
    } elseif (isset($timedesc['start'])) {
        $serendipity['head_title'] .= ' (&gt; ' . $timedesc['start'] . ')';
    } elseif (isset($timedesc['end'])) {
        $serendipity['head_title'] .= ' (&lt; ' . $timedesc['end'] . ')';
    }
    $serendipity['head_subtitle'] = $serendipity['blogTitle'];
    $serendipity['GET']['action']     = 'comments';
    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}

function serveJS($js_mode) {
    global $serendipity;
    $serendipity['view'] = 'js';
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
        header('Cache-Control: no-cache');
    } else {
        header('Cache-Control:');
        header('Pragma:');
        header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time()+3600));
    }

    header('Content-type: application/javascript; charset=' . LANG_CHARSET);

    $out = "";

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');

    // HOTFIX: The staticpage plugin spews out a 404 error in the genpage hook,
    // because it assumes that all "normal" content pages could belong to it.
    // We need to override the header at this point (again), so that the files
    // will be properly parsed. Another (maybe better) idea would be to actually
    // not include genpage.inc.php at this point and init smarty differently,
    // or to make sure the "genpage" event hook is not called at this point.
    header('HTTP/1.0 200 OK');
    header('Status: 200 OK');

    if ($js_mode == "serendipity_admin.js") {
        serendipity_plugin_api::hook_event('js_backend', $out);
    } else {
        serendipity_plugin_api::hook_event('js', $out);
    }
    echo $out;
}

function serveCSS($css_mode) {
    global $serendipity;
    serendipity_smarty_init();
    $serendipity['view'] = 'css';
    include(S9Y_INCLUDE_PATH . 'serendipity.css.php');
}

function serveSearch() {
    global $serendipity;
    $serendipity['view'] = 'search';
    $_args = $serendipity['uriArguments'];

    /* Attempt to locate hidden variables within the URI */
    $search = array();
    foreach ($_args AS $k => $v){
        if ($v == PATH_SEARCH) {
            continue;
        }

        if ($v[0] == 'P') { /* Page */
            $page = substr($v, 1);
            if (is_numeric($page)) {
                $serendipity['GET']['page'] = $page;
                unset($_args[$k]);
                unset($serendipity['uriArguments'][$k]);
            } else {
                $search[] = $v;
            }
        } else {
            $search[] = $v;
        }
    }

    $serendipity['GET']['action']     = 'search';
    $serendipity['GET']['searchTerm'] = urldecode(serendipity_specialchars(strip_tags(implode(' ', $search))));
    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}

function serveAuthorPage($matches) {
    global $serendipity;
    $serendipity['view'] = 'authors';
    $serendipity['GET']['viewAuthor'] = $matches[1];

    $serendipity['GET']['action'] = 'read';

    locateHiddenVariables($serendipity['uriArguments']);


    $matches[1] = serendipity_searchPermalink($serendipity['permalinkAuthorStructure'], implode('/', $serendipity['uriArguments']), $matches[1], 'author');
    $serendipity['GET']['viewAuthor'] = $matches[1];
    $serendipity['GET']['action'] = 'read';

    $uInfo = serendipity_fetchUsers($serendipity['GET']['viewAuthor']);

    if (!is_array($uInfo)) {
        $serendipity['view'] = '404';
        $serendipity['viewtype'] = '404_3';
        header('HTTP/1.0 404 Not found');
        header('Status: 404 Not found');
    } else {
        $serendipity['head_title']    = sprintf(ENTRIES_BY, $uInfo[0]['realname']);
        $serendipity['head_subtitle'] = $serendipity['blogTitle'];
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}

function serveCategory($matches) {
    global $serendipity;
    $serendipity['view'] = 'categories';
    $uri = $_SERVER['REQUEST_URI'];

    $is_multicat = (isset($serendipity['POST']['isMultiCat']) && is_array($serendipity['POST']['multiCat']));
    if ($is_multicat) {
        $serendipity['GET']['category'] = implode(';', $serendipity['POST']['multiCat']);
        $serendipity['uriArguments'][]  = PATH_CATEGORIES;
        $serendipity['uriArguments'][]  = serendipity_db_escape_string($serendipity['GET']['category']) . '-multi';
    } elseif (preg_match('@/([0-9;]+)@', $uri, $multimatch)) {
        if (stristr($multimatch[1], ';')) {
            $is_multicat = true;
            $serendipity['GET']['category'] = $multimatch[1];
        }
    }

    $serendipity['GET']['action'] = 'read';

    $_args = locateHiddenVariables($serendipity['uriArguments']);

    if (!$is_multicat) {
        $matches[1] = serendipity_searchPermalink($serendipity['permalinkCategoryStructure'], implode('/', $_args), $matches[1], 'category');
        $serendipity['GET']['category'] = $matches[1];
    }
    $cInfo = serendipity_fetchCategoryInfo($serendipity['GET']['category']);

    if (!is_array($cInfo)) {
        $serendipity['view'] = '404';
        $serendipity['viewtype'] = '404_2';
        header('HTTP/1.0 404 Not found');
        header('Status: 404 Not found');
    } else {
        $serendipity['head_title'] = $cInfo['category_name'];
        if (isset($serendipity['GET']['page'])) {
            $serendipity['head_title'] .= " - " . serendipity_specialchars($serendipity['GET']['page']);
        }
        $serendipity['head_subtitle'] = $serendipity['blogTitle'];
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}

function serveArchive() {
    global $serendipity;
    $serendipity['view'] = 'archive';
    $serendipity['GET']['action'] = 'archives';

    locateHiddenVariables($serendipity['uriArguments']);

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}

function gotoAdmin() {
    global $serendipity;
    $base = $serendipity['baseURL'];
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $base = str_replace('http://', 'https://', $base);
    }
    header('Status: 302 Found');
    header("Location: {$base}serendipity_admin.php");
}

function servePlugin($matches) {
    global $serendipity;
    $serendipity['view'] = 'plugin';

    if (strpos($matches[2], 'admin/')  !== false) {
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    serendipity_plugin_api::hook_event('external_plugin', $matches[2]);
}

function serveFeed() {
    global $serendipity;
    $serendipity['view'] = 'feed';
    header('Content-Type: text/html; charset=utf-8');
    $uri = $_SERVER['REQUEST_URI']; 

    if (preg_match('@/(index|atom[0-9]*|rss|comments|trackbacks|comments_and_trackbacks|opml)\.(rss[0-9]?|rdf|rss|xml|atom)@', $uri, $vmatches)) {
        list($_GET['version'], $_GET['type']) = serendipity_discover_rss($vmatches[1], $vmatches[2]);
    }

    if (is_array($matches)) {
        if (preg_match('@(/?' . preg_quote(PATH_FEEDS, '@') . '/)(.+?)(?:\.rss)?$@i', $uri, $uriparts)) {
            if (strpos($uriparts[2], $serendipity['permalinkCategoriesPath']) === 0) {
                $catid = serendipity_searchPermalink($serendipity['permalinkFeedCategoryStructure'], $uriparts[2], $matches[1], 'category');
                if (is_numeric($catid) && $catid > 0) {
                    $_GET['category'] = $catid;
                }
            } elseif (strpos($uriparts[2], $serendipity['permalinkAuthorsPath']) === 0) {
                $authorid = serendipity_searchPermalink($serendipity['permalinkFeedAuthorStructure'], $uriparts[2], $matches[1], 'author');
                if (is_numeric($authorid) && $authorid > 0) {
                    $_GET['viewAuthor'] = $authorid;
                }
            }
        }
    }

    include(S9Y_INCLUDE_PATH . 'rss.php');
}

function serveEntry($matches) {
    global $serendipity;

    $serendipity['view'] = 'entry';
    $uri = $_SERVER['REQUEST_URI'];

    if (isset($serendipity['GET']['id'])) {
        $matches[1] = (int)$serendipity['GET']['id'];
    } elseif (isset($_GET['p'])) {
        $matches[1] = $_GET['p'];
    } else {
        $matches[1] = serendipity_searchPermalink($serendipity['permalinkStructure'], $uri, (!empty($matches[2]) ? $matches[2] : $matches[1]), 'entry');
    }
    serendipity_rememberComment();

    if (!empty($serendipity['POST']['submit']) && !isset($_REQUEST['serendipity']['csuccess'])) {

        $comment['url']       = $serendipity['POST']['url'];
        $comment['comment']   = trim($serendipity['POST']['comment']);
        $comment['name']      = $serendipity['POST']['name'];
        $comment['email']     = $serendipity['POST']['email'];
        $comment['subscribe'] = $serendipity['POST']['subscribe'];
        $comment['parent_id'] = $serendipity['POST']['replyTo'];

        if (!empty($comment['comment'])) {
            if (serendipity_saveComment($serendipity['POST']['entry_id'], $comment, 'NORMAL')) {
                $sc_url = ($_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . (strstr($_SERVER['REQUEST_URI'], '?') ? '&' : '?') . 'serendipity[csuccess]=' . (isset($serendipity['csuccess']) ? $serendipity['csuccess'] : 'true');
                if (serendipity_isResponseClean($sc_url)) {
                    header('Status: 302 Found');
                    header('Location: ' . $sc_url);
                }
                exit;
            } else {
                $serendipity['messagestack']['comments'][] = COMMENT_NOT_ADDED;
            }
        } else {
            $serendipity['messagestack']['comments'][] = sprintf(EMPTY_COMMENT, '', '');
        }
    }

    $id = (int)$matches[1];
    if ($id === 0) {
        $id = false;
    }

    $_GET['serendipity']['action'] = 'read';
    $_GET['serendipity']['id']     = $id;

    $title = serendipity_db_query("SELECT title FROM {$serendipity['dbPrefix']}entries WHERE id=$id AND isdraft = 'false' " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND timestamp <= " . serendipity_db_time() : ''), true);
    if (is_array($title)) {
        $serendipity['head_title']    = serendipity_specialchars($title[0]);
        $serendipity['head_subtitle'] = serendipity_specialchars($serendipity['blogTitle']);
    } else {
        $serendipity['view'] = '404';
        $serendipity['viewtype'] = '404_1';
        header('HTTP/1.0 404 Not found');
        header('Status: 404 Not found');
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
}

function serveArchives() {
    global $serendipity;
    $serendipity['view'] = 'archives';

    $_args = locateHiddenVariables($serendipity['uriArguments']);

    /* We must always *assume* that Year, Month and Day are the first 3 arguments */
    list(,$year, $month, $day) = $_args;
    if ($year == "archives") {
        unset($year);
    }

    $serendipity['GET']['action']     = 'read';
    $serendipity['GET']['hidefooter'] = true;

    if (!isset($year)) {
        $year = date('Y');
        $month = date('m');
        $day = date('j');
        $serendipity['GET']['action']     = null;
        $serendipity['GET']['hidefooter'] = null;
    }

    if (isset($year) && !is_numeric($year)) {
        $year = date('Y');
    }

    if (isset($month) && !is_numeric($month)) {
        $month = date('m');
    }

    if (isset($day) && !is_numeric($day)) {
        $day = date('d');
    }

    switch($serendipity['calendar']) {
        case 'gregorian':
        default:
            $gday = 1;

            if ($week) {
                $tm = strtotime('+ '. ($week-2) .' WEEKS monday', mktime(0, 0, 0, 1, 1, $year));
                $ts = mktime(0, 0, 0, date('m', $tm), date('j', $tm), $year);
                $te = mktime(23, 59, 59, date('m', $tm), date('j', $tm)+7, $year);
                $date = serendipity_formatTime(WEEK .' '. $week .', %Y', $ts, false);
            } else {
                if ($day) {
                    $ts = mktime(0, 0, 0, $month, $day, $year);
                    $te = mktime(23, 59, 59, $month, $day, $year);
                    $date = serendipity_formatTime(DATE_FORMAT_ENTRY, $ts, false);
                } else {
                    $ts = mktime(0, 0, 0, $month, $gday, $year);
                    if (!isset($gday2)) {
                        $gday2 = date('t', $ts);
                    }
                    $te = mktime(23, 59, 59, $month, $gday2, $year);
                    $date = serendipity_formatTime('%B %Y', $ts, false);
                }
            }
            break;

        case 'persian-utf8':
            require_once S9Y_INCLUDE_PATH . 'include/functions_calendars.inc.php';
            $gday = 1;
            if ($week) {
                --$week;
                $week *= 7;
                ++$week;
                $day = $week;

                // convert day number of year to day number of month AND month number of year
                $j_days_in_month = array(0, 31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
                if(($g_y % 4) == 3) $j_days_in_month[12]++;

                for($i=1; isset($j_days_in_month[$i]); ++$i){
                    if(($day-$j_days_in_month[$i])>0){
                        $day -= $j_days_in_month[$i];
                    }else{
                        break;
                    }
                }

                $tm = persian_mktime(0, 0, 0, $i, $day, $year);
                $ts = persian_mktime(0, 0, 0, persian_date_utf('m', $tm), persian_date_utf('j', $tm), $year);
                $te = persian_mktime(23, 59, 59, persian_date_utf('m', $tm), persian_date_utf('j', $tm)+7, $year);
                $date = serendipity_formatTime(WEEK .' '. $week .'، %Y', $ts, false);
            } else {
                if ($day) {
                    $ts = persian_mktime(0, 0, 0, $month, $day, $year);
                    $te = persian_mktime(23, 59, 59, $month, $day, $year);
                    $date = serendipity_formatTime(DATE_FORMAT_ENTRY, $ts, false);
                } else {
                    $ts = persian_mktime(0, 0, 0, $month, $gday, $year);
                    if (!isset($gday2)) {
                        $gday2 = persian_date_utf('t', $ts);
                    }
                    $te = persian_mktime(23, 59, 59, $month, $gday2, $year);
                    $date = serendipity_formatTime('%B %Y', $ts, false);
                }
            }

            list($year, $month, $day) = p2g ($year, $month, $day);
            break;
    }

    $serendipity['range'] = array($ts, $te);

    if ($serendipity['GET']['action'] == 'read') {
        if ($serendipity['GET']['category']) {
            $cInfo = serendipity_fetchCategoryInfo($serendipity['GET']['category']);
            $serendipity['head_title'] = $cInfo['category_name'];
        }
        $serendipity['head_subtitle'] .= sprintf(ENTRIES_FOR, $date);
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');

}
    