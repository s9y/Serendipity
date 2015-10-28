<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details


// We need to set this to return a 200 since we use .htaccess ErrorDocument
// rules to handle archives.
header('HTTP/1.0 200');
header('Status: 200 OK');

// Session are needed to also remember an autologin user on the frontend
include('serendipity_config.inc.php');
include('include/functions_routing.inc.php');
header('Content-Type: text/html; charset='. LANG_CHARSET);

if ($serendipity['CacheControl']) {
    if (!empty($_SERVER['SERVER_SOFTWARE']) && strstr($_SERVER['SERVER_SOFTWARE'], 'Apache/2')) {
        header('Cache-Control: no-cache, pre-check=0, post-check=0');
    } else {
        header('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
    }
    header('Expires: 0');
    header('Pragma: no-cache');
}
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

if (preg_match(PAT_ARCHIVES, $uri, $matches) || isset($serendipity['GET']['range']) && is_numeric($serendipity['GET']['range'])) {
    serveArchives();
} else if (preg_match(PAT_PERMALINK, $uri, $matches) ||
           preg_match(PAT_COMMENTSUB, $uri, $matches) ||
           isset($serendipity['GET']['id']) ||
           isset($_GET['p'])) {
    serveEntry($matches);
} elseif (preg_match(PAT_PERMALINK_FEEDCATEGORIES, $uri, $matches) || preg_match(PAT_PERMALINK_FEEDAUTHORS, $uri, $matches) || preg_match(PAT_FEEDS, $uri)) {
    serveFeed();
    exit;
} else if (preg_match(PAT_PLUGIN, $uri, $matches)) {
    servePlugin($matches);
    exit;
} else if (preg_match(PAT_ADMIN, $uri)) {
    gotoAdmin();
    exit;
} else if (preg_match(PAT_ARCHIVE, $uri)) {
    serveArchive();
} else if ((isset($serendipity['POST']['isMultiCat']) && is_array($serendipity['POST']['multiCat'])) ||
            preg_match(PAT_PERMALINK_CATEGORIES, $uri, $matches)) {
    serveCategory($matches);
} else if (preg_match(PAT_PERMALINK_AUTHORS, $uri, $matches)) {
    serveAuthorPage($matches);
} else if (preg_match(PAT_SEARCH, $uri, $matches)) {
    serveSearch();
} elseif (preg_match(PAT_CSS, $uri, $matches)) {
    serveCSS($matches[1]);
    exit;
} elseif (preg_match(PAT_JS, $uri, $matches)) {
    serveJS($matches[1]);
    exit;
} else if (preg_match(PAT_COMMENTS, $uri, $matches)) {
    serveComments();
} else if (preg_match('@/(index(\.php|\.html)?)|'. preg_quote($serendipity['indexFile']) .'@', $uri) ||
           preg_match('@^/' . preg_quote(trim($serendipity['serendipityHTTPPath'], '/')) . '/?(\?.*)?$@', $uri)) {
    serveIndex();
} else {
    serve404();
}

if (empty($serendipity['smarty_file'])) {
    $serendipity['smarty_file'] = '404.tpl';
    $serendipity['viewtype'] = '404_5';
}

serendipity_gzCompression();

$serendipity['smarty']->display(serendipity_getTemplateFile($serendipity['smarty_file'], 'serendipityPath'));


/* vim: set sts=4 ts=4 expandtab : */
