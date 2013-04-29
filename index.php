<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

$global_debug = false;

if ($global_debug) {
    #apd_set_pprof_trace();

    function microtime_float() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    $time_start = microtime_float();
}

// We need to set this to return a 200 since we use .htaccess ErrorDocument
// rules to handle archives.
header('HTTP/1.0 200');
header('Status: 200 OK');

// Session are needed to also remember an autologin user on the frontend
ob_start();
include('serendipity_config.inc.php');
header('Content-Type: text/html; charset='. LANG_CHARSET);
if ($serendipity['expose_s9y']) {
    header('X-Blog: Serendipity'); // Used for installer detection
}

if ($serendipity['CacheControl']) {
    if (!empty($HTTP_SERVER_VARS['SERVER_SOFTWARE']) && strstr($HTTP_SERVER_VARS['SERVER_SOFTWARE'], 'Apache/2')) {
        header('Cache-Control: no-cache, pre-check=0, post-check=0');
    } else {
        header('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
    }
    header('Expires: 0');
    header('Pragma: no-cache');
}
$track_referer = true;
$uri = $_SERVER['REQUEST_URI'];

$serendipity['uriArguments'] = serendipity_getUriArguments($uri);

if (isset($_SERVER['HTTP_REFERER']) && empty($_SESSION['HTTP_REFERER'])) {
    $_SESSION['HTTP_REFERER'] = $_SERVER['HTTP_REFERER'];
}

if (preg_match(PAT_UNSUBSCRIBE, $uri, $res)) {
    if (serendipity_cancelSubscription(urldecode($res[1]), $res[2])) {
        define('DATA_UNSUBSCRIBED', sprintf(UNSUBSCRIBE_OK, urldecode($res[1])));
    }

    $uri = '/' . PATH_UNSUBSCRIBE . '/' . $res[2] . '-untitled.html';
} else {
    define('DATA_UNSUBSCRIBED', false);
}

serendipity_checkCommentTokenModeration($uri);

if (preg_match(PAT_DELETE, $uri, $res) && $serendipity['serendipityAuthedUser'] === true) {
    if ($res[1] == 'comment' && serendipity_deleteComment($res[2], $res[3], 'comments')) {
        define('DATA_COMMENT_DELETED', sprintf(COMMENT_DELETED, $res[2]));
    } elseif ( $res[1] == 'trackback' && serendipity_deleteComment($res[2], $res[3], 'trackbacks') ) {
        define('DATA_TRACKBACK_DELETED', sprintf(TRACKBACK_DELETED, $res[2]));
    }
} else {
    define('DATA_COMMENT_DELETED', false);
    define('DATA_TRACKBACK_DELETED', false);
}

if (preg_match(PAT_APPROVE, $uri, $res) && $serendipity['serendipityAuthedUser'] === true) {
    if ($res[1] == 'comment' && serendipity_approveComment($res[2], $res[3])) {
        define('DATA_COMMENT_APPROVED', sprintf(COMMENT_APPROVED, $res[2]));
        define('DATA_TRACKBACK_APPROVED', false);
    } elseif ($res[1] == 'trackback' && serendipity_approveComment($res[2], $res[3])) {
        define('DATA_COMMENT_APPROVED', false);
        define('DATA_TRACKBACK_APPROVED', sprintf(TRACKBACK_APPROVED, $res[2]));
    }
} else {
    define('DATA_COMMENT_APPROVED', false);
    define('DATA_TRACKBACK_APPROVED', false);
}

if (isset($serendipity['POST']['isMultiCat']) && is_array($serendipity['POST']['multiCat'])) {
    $is_multicat = true;
} else {
    $is_multicat = false;
}

if (isset($serendipity['POST']['isMultiAuth']) && is_array($serendipity['POST']['multiAuth'])) {
    $is_multiauth = true;
} else {
    $is_multiauth = false;
}

if (preg_match(PAT_ARCHIVES, $uri, $matches) || isset($serendipity['GET']['range']) && is_numeric($serendipity['GET']['range'])) {
    $serendipity['view'] = 'archives';
    $_args = $serendipity['uriArguments'];

    /* Attempt to locate hidden variables within the URI */
    foreach ($_args AS $k => $v){
        if ($v == PATH_ARCHIVES) {
            continue;
        }
        if ($v[0] == 'C') { /* category */
            $cat = substr($v, 1);
            if (is_numeric($cat)) {
                $serendipity['GET']['category'] = $cat;
                unset($_args[$k]);
            }
        } elseif ($v[0] == 'A') { /* Author */
            $url_author = substr($v, 1);
            if (is_numeric($url_author)) {
                $serendipity['GET']['viewAuthor'] = $_GET['viewAuthor'] = (int)$url_author;
                unset($_args[$k]);
            }
        } elseif ($v[0] == 'W') { /* Week */
            $week = substr($v, 1);
            if (is_numeric($week)) {
                unset($_args[$k]);
            }
        } elseif ($v == 'summary') { /* Summary */
            $serendipity['short_archives'] = true;
            $serendipity['head_subtitle'] .= SUMMARY . ' - ';
            unset($_args[$k]);
        } elseif ($v[0] == 'P') { /* Page */
            $page = substr($v, 1);
            if (is_numeric($page)) {
                $serendipity['GET']['page'] = $page;
                unset($_args[$k]);
                unset($serendipity['uriArguments'][$k]);
            }
        }
    }

    /* We must always *assume* that Year, Month and Day are the first 3 arguments */
    list(,$year, $month, $day) = $_args;

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
            $serendipity['head_title']    = $cInfo['category_name'];
        }
        $serendipity['head_subtitle'] .= sprintf(ENTRIES_FOR, $date);
    }

    ob_start();
    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    $data = ob_get_contents();
    ob_end_clean();

    if (isset($serendipity['pregenerate']) && $serendipity['pregenerate']) {
        $fp = fopen('./'.PATH_ARCHIVES.'/' . $matches[1], 'w');
        fwrite($fp, $data);
        fclose($fp);
    }

    echo $data;
} else if ((preg_match(PAT_PERMALINK, $uri, $matches) ||
            preg_match(PAT_COMMENTSUB, $uri, $matches) ||
            isset($serendipity['GET']['id']) ||
            isset($_GET['p']))
            && !preg_match('/autosave/', $serendipity['uriArguments'][1]) ) {
    $serendipity['view'] = 'entry';

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

    serendipity_track_referrer($id);
    $track_referer = false;

    $_GET['serendipity']['action'] = 'read';
    $_GET['serendipity']['id']     = $id;

    $title = serendipity_db_query("SELECT title FROM {$serendipity['dbPrefix']}entries WHERE id=$id AND isdraft = 'false' " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND timestamp <= " . serendipity_db_time() : ''), true);
    if (is_array($title)) {
        $serendipity['head_title']    = htmlspecialchars($title[0]);
        $serendipity['head_subtitle'] = htmlspecialchars($serendipity['blogTitle']);
    } else {
        $serendipity['view'] = '404';
        $serendipity['viewtype'] = '404_1';
        header('HTTP/1.0 404 Not found');
        header('Status: 404 Not found');
    }

    ob_start();
    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    $data = ob_get_contents();
    ob_end_clean();

    if (isset($serendipity['pregenerate']) && $serendipity['pregenerate']) {
        $fp = fopen($serendipity['serendipityPath'] . PATH_ARCHIVES.'/' . $id, 'w');
        fwrite($fp, $data);
        fclose($fp);
    }
    print $data;
} elseif (preg_match(PAT_PERMALINK_FEEDCATEGORIES, $uri, $matches) || preg_match(PAT_PERMALINK_FEEDAUTHORS, $uri, $matches) || preg_match(PAT_FEEDS, $uri)) {
    $serendipity['view'] = 'feed';
    header('Content-Type: text/html; charset=utf-8');

    if (preg_match('@/(index|atom[0-9]*|rss|comments|trackbacks|comments_and_trackbacks|opml)\.(rss[0-9]?|rdf|rss|xml|atom)@', $uri, $vmatches)) {
        list($_GET['version'], $_GET['type']) = serendipity_discover_rss($vmatches[1], $vmatches[2]);
    }

    if (is_array($matches)) {
        if (preg_match('@(/?' . preg_quote(PATH_FEEDS, '@') . '/)(.+)\.rss@i', $uri, $uriparts)) {
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

    ob_start();
    include(S9Y_INCLUDE_PATH . 'rss.php');
    $data = ob_get_contents();
    ob_end_clean();

    if ($serendipity['pregenerate']) {
        $fp = fopen($serendipity['serendipityPath'] . PATH_FEEDS.'/index.' . $matches[1], 'w');
        fwrite($fp, $data);
        fclose($fp);
    }

    serendipity_gzCompression();

    print $data;
    exit;
} else if (preg_match(PAT_ADMIN, $uri)) {
    $serendipity['view'] = 'admin';
    $base = $serendipity['baseURL'];
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $base = str_replace('http://', 'https://', $base);
    }
    header('Status: 302 Found');
    header("Location: {$base}serendipity_admin.php");
    exit;
} else if (preg_match(PAT_ARCHIVE, $uri)) {
    $serendipity['view'] = 'archive';
    $serendipity['GET']['action'] = 'archives';
    $_args = $serendipity['uriArguments'];
    /* Attempt to locate hidden variables within the URI */
    foreach ($_args AS $k => $v){
        if ($v == PATH_ARCHIVE) {
            continue;
        }

        if ($v[0] == 'C') { /* category */
            $cat = substr($v, 1);
            if (is_numeric($cat)) {
                $serendipity['GET']['category'] = $cat;
                unset($_args[$k]);
            }
        } elseif ($v[0] == 'A') { /* Author */
            $url_author = substr($v, 1);
            if (is_numeric($url_author)) {
                $serendipity['GET']['viewAuthor'] = $_GET['viewAuthor'] = (int)$url_author;
                unset($_args[$k]);
            }
        }
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
} else if (preg_match(PAT_PLUGIN, $uri, $matches)) {
    $serendipity['view'] = 'plugin';
    serendipity_plugin_api::hook_event('external_plugin', $matches[2]);
    if (!defined('NO_EXIT')) {
        exit;
    }
} else if ($is_multicat || preg_match(PAT_PERMALINK_CATEGORIES, $uri, $matches)) {
    $serendipity['view'] = 'categories';

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

    $_args = $serendipity['uriArguments'];

    /* Attempt to locate hidden variables within the URI */
    foreach ($_args AS $k => $v) {
        if ($v == PATH_CATEGORIES) {
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
        }
    }

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
        $serendipity['head_title']    = $cInfo['category_name'];
        if (isset($serendipity['GET']['page'])) {
            $serendipity['head_title'] .= " - Page ".$serendipity['GET']['page'];
        }
        $serendipity['head_subtitle'] = $serendipity['blogTitle'];
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
} else if ($is_multiauth || preg_match(PAT_PERMALINK_AUTHORS, $uri, $matches)) {
    $serendipity['view'] = 'authors';

    if ($is_multiauth) {
        $serendipity['GET']['viewAuthor'] = implode(';', $serendipity['POST']['multiAuth']);
        $serendipity['uriArguments'][]    = PATH_AUTHORS;
        $serendipity['uriArguments'][]    = serendipity_db_escape_string($serendipity['GET']['viewAuthor']) . '-multi';
    } elseif (empty($matches[1]) && preg_match('@/([0-9;]+)@', $uri, $multimatch)) {
        $is_multiauth = true;
        $serendipity['GET']['viewAuthor'] = $multimatch[1];
    } else {
        $serendipity['GET']['viewAuthor'] = $matches[1];
    }

    $serendipity['GET']['action'] = 'read';

    $_args = $serendipity['uriArguments'];

    /* Attempt to locate hidden variables within the URI */
    foreach ($_args AS $k => $v){
        if ($v[0] == 'P') { /* Page */
            $page = substr($v, 1);
            if (is_numeric($page)) {
                $serendipity['GET']['page'] = $page;
                unset($_args[$k]);
                unset($serendipity['uriArguments'][$k]);
            }
        }
    }

    if (!$is_multiauth) {
        $matches[1] = serendipity_searchPermalink($serendipity['permalinkAuthorStructure'], implode('/', $serendipity['uriArguments']), $matches[1], 'author');
        $serendipity['GET']['viewAuthor'] = $matches[1];
        $serendipity['GET']['action'] = 'read';
    }

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
} else if (preg_match(PAT_SEARCH, $uri, $matches)) {
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
    $serendipity['GET']['searchTerm'] = urldecode(htmlspecialchars(strip_tags(implode(' ', $search))));
    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
} elseif (preg_match(PAT_CSS, $uri, $matches)) {
    $serendipity['view'] = 'css';
    $css_mode = $matches[1];
    include(S9Y_INCLUDE_PATH . 'serendipity.css.php');
    exit;
} else if (preg_match(PAT_COMMENTS, $uri, $matches)) {
    $serendipity['view'] = 'comments';
    $_args = serendipity_getUriArguments($uri, true); // Need to also match "." character
    $timedesc = array();

    /* Attempt to locate hidden variables within the URI */
    $search = array();
    foreach ($_args AS $k => $v){
        if ($v == PATH_COMMENTS) {
            continue;
        }

        if ($v[0] == 'P') { /* Page */
            $page = substr($v, 1);
            if (is_numeric($page)) {
                $serendipity['GET']['page'] = $page;
                unset($_args[$k]);
                unset($serendipity['uriArguments'][$k]);
            }
        } elseif (preg_match('@^(last|f|t|from|to)[\s_-]*([\d-/ ]+)$@', strtolower(urldecode($v)), $m)) {
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

    $serendipity['head_title']    = COMMENTS_FROM . ' ' . htmlspecialchars($serendipity['GET']['viewCommentAuthor']);
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
} else if (preg_match('@/(index(\.php|\.html)?)|'. preg_quote($serendipity['indexFile']) .'@', $uri) ||
           preg_match('@^/' . preg_quote(trim($serendipity['serendipityHTTPPath'], '/')) . '/?(\?.*)?$@', $uri)) {

    $serendipity['view'] = 'start';

    if ($serendipity['GET']['action'] == 'search') {
        $serendipity['view'] = 'search';
        $serendipity['uriArguments'] = array(PATH_SEARCH, urlencode($serendipity['GET']['searchTerm']));
    } else {
        $serendipity['uriArguments'][] = PATH_ARCHIVES;
    }

    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
} else {
    $serendipity['view'] = '404';
    $serendipity['viewtype'] = '404_4';
    header('HTTP/1.0 404 Not found');
    header('Status: 404 Not found');
    include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    // printf('<div class="serendipity_msg_important">' . DOCUMENT_NOT_FOUND . '</div>', $uri);
}

if ($track_referer) {
    serendipity_track_referrer();
}

if (!defined('NO_EXIT')) {
    $raw_data = ob_get_contents();
    ob_end_clean();
    $serendipity['smarty']->assignByRef('raw_data', $raw_data);
    if (empty($serendipity['smarty_file'])) {
        $serendipity['smarty_file'] = '404.tpl';
        $serendipity['viewtype'] = '404_5';
    }

    serendipity_gzCompression();

    $serendipity['smarty']->display(serendipity_getTemplateFile($serendipity['smarty_file'], 'serendipityPath'));
}

if ($global_debug) {
    /* TODO: Remove (hide) this debug */
    echo '<div id="s9y_debug" style="text-align: center; color: red; font-size: 10pt; font-weight: bold; padding: 10px">Page delivered in '. round(microtime_float()-$time_start,6) .' seconds, '. sizeof(get_included_files()) .' files included</div>';
    echo '</div>';
}

/* vim: set sts=4 ts=4 expandtab : */
