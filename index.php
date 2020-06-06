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

if (preg_match(PAT_ARCHIVES, $uri, $matches) || isset($serendipity['GET']['range']) && is_numeric($serendipity['GET']['range'])) {
    serveArchives();
} elseif (preg_match(PAT_APPROVE, $uri, $args)) {
    if (preg_match('@([0-9]+)@', $args[1], $res) && $serendipity['serendipityAuthedUser'] === true ) {
        // one argument: comment id
        serveApproveComment($res[1]);
    } elseif (preg_match('@([0-9]+)/([0-9a-f]{32})@', $args[1], $res)) {
        // two arguments: comment id - token (for token-based moderation)
        serveApproveComment($res[1], $res[2]);
    } else { serve404; }
} elseif (preg_match(PAT_DELETE, $uri, $res)) {
    if (preg_match('@([0-9]+)@', $args[1], $res) && $serendipity['serendipityAuthedUser'] === true ) {
        // one argument: comment id
        serveDeleteComment($res[1]);
    } elseif (preg_match('@([0-9]+)/([0-9a-f]{32})@', $args[1], $res)) {
        // two arguments: comment id - token (for token-based moderation)
        serveDeleteComment($res[1], $res[2]);
    } else { serve404; }
} elseif (preg_match(PAT_UNSUBSCRIBE, $uri, $args)) {
    $arg = urldecode($args[1]);
    if (preg_match('#([A-Za-z0-9._%+-]+%40[A-Za-z0-9.-]+\.[A-Za-z]{2,})/([0-9]+)#', $arg, $res)) {
        // comments: two arguments - email address and article id to unsubscribe from
        serveUnsubscribeLegacy($res[1], $res[2]);
    } elseif (preg_match('@([0-9a-f]{32})/delete@', $args[1], $res)) {
        // two arguments: unsubscribe token - action
        serveUnsubscribe($res[1], 'delete');
    } elseif (preg_match('@([0-9a-f]{32})@', $args[1], $res)) {
        // one argument: unsubscribe token
        serveUnsubscribe($res[1]);
    } else { serve404; }
} else if (preg_match(PAT_SUBSCRIBE, $uri, $args)) {
    if (preg_match('@optin/([0-9a-f]{32})@', $args[1], $res)) {
    // two arguments: optin / token
        serveOptin($res[1]);
    } elseif (preg_match('@(author|category|entry)/([0-9]+)@', $args[1], $res)) {
        // two arguments: subscription type and id (additional info in POST)
        serveSubscribe($res[1], $res[2]);
    } elseif ($args[1] == 'blog') {
        serveSubscribe('blog');
    } else { serve404; }
} else if (preg_match(PAT_PERMALINK, $uri, $matches) ||
           preg_match(PAT_COMMENTSUB, $uri, $matches) ||
           isset($serendipity['GET']['id']) ||
           isset($_GET['p'])) {
    serveEntry($matches);
} elseif (preg_match(PAT_PERMALINK_FEEDCATEGORIES, $uri, $matches) || preg_match(PAT_PERMALINK_FEEDAUTHORS, $uri, $matches) || preg_match(PAT_FEEDS, $uri)) {
    serveFeed($matches);
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
