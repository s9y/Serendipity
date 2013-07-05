<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

header('Content-Type: text/xml; charset=utf-8');
session_cache_limiter('public');

@define('IN_RSS', true);
include('serendipity_config.inc.php');
include(S9Y_INCLUDE_PATH . 'include/functions_rss.inc.php');

$version         = $_GET['version'];
$description     = $serendipity['blogDescription'];
$title           = $serendipity['blogTitle'];
$comments        = FALSE;

if (empty($version)) {
    list($version) = serendipity_discover_rss($_GET['file'], $_GET['ext']);
}

if (isset($_GET['category'])) {
    $serendipity['GET']['category'] = $_GET['category'];
}

if (isset($_GET['viewAuthor'])) {
    $serendipity['GET']['viewAuthor'] = $_GET['viewAuthor'];
}

if (!isset($_GET['type'])) {
    $_GET['type'] = 'content';
}

if (!empty($_SERVER['HTTP_USER_AGENT']) && stristr($_SERVER['HTTP_USER_AGENT'], 'feedburner')) {
    $_GET['nocache'] = true;
}

$serendipity['view'] = 'feed';

switch ($_GET['type']) {
    case 'comments_and_trackbacks':
    case 'trackbacks':
    case 'comments':
        $latest_entry = serendipity_fetchComments(isset($_GET['cid']) ? $_GET['cid'] : null, 1, 'co.id desc', false, $_GET['type']);
        break;
    case 'content':
    default:
        $latest_entry = serendipity_fetchEntries(null, false, 1, false, false, 'last_modified DESC', '', false, true);
    break;
}

if (!isset($_GET['nocache'])) {
    /*
     * Caching logic - Do not send feed if nothing has changed
     * Implementation inspired by Simon Willison [http://simon.incutio.com/archive/2003/04/23/conditionalGet], Thiemo Maettig
     */

    // See if the client has provided the required headers.
    // Always convert the provided header into GMT timezone to allow comparing to the server-side last-modified header
    $modified_since = !empty($_SERVER['HTTP_IF_MODIFIED_SINCE'])
                    ? gmdate('D, d M Y H:i:s \G\M\T', strtotime(stripslashes($_SERVER['HTTP_IF_MODIFIED_SINCE'])))
                    : false;
    $none_match     = !empty($_SERVER['HTTP_IF_NONE_MATCH'])
                    ? str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH']))
                    : false;

    if (is_array($latest_entry) && isset($latest_entry[0]['last_modified'])) {
        $last_modified = gmdate('D, d M Y H:i:s \G\M\T', serendipity_serverOffsetHour($latest_entry[0]['last_modified'], false));
        $etag          = '"' . $last_modified . '"';

        header('Last-Modified: ' . $last_modified);
        header('ETag: '          . $etag);

        if (($none_match == $last_modified && $modified_since == $last_modified) ||
            (!$none_match && $modified_since == $last_modified) ||
            (!$modified_since && $none_match == $last_modified)) {
            header('HTTP/1.0 304 Not Modified');
            header('Status: 304 Not Modified');
            return;
        }
    }
}

if (isset($modified_since) &&
        (stristr($_SERVER['HTTP_USER_AGENT'], 'planet') !== FALSE || $serendipity['enforce_RFC2616'])) {
    // People shall get a usual HTTP response according to RFC2616. See serendipity_config.inc.php for details
    $modified_since = FALSE;
}

switch ($_GET['type']) {
case 'comments_and_trackbacks':
case 'trackbacks':
case 'comments':
    $entries     = serendipity_fetchComments(isset($_GET['cid']) ? $_GET['cid'] : null, $serendipity['RSSfetchLimit'], 'co.id desc', false, $_GET['type']);
    $description = $title . ' - ' . $description;
    if (isset($_GET['cid'])) {
        $title       = $title . ' - ' . COMMENTS_FROM . ' "' . $latest_entry[0]['title'] . '"';
    } else {
        $title       = $title . ' - ' . COMMENTS;
    }
    $comments    = TRUE;
    break;
case 'content':
default:
    if (isset($_GET['all']) && $_GET['all']) {
        // Fetch all entries in reverse order for later importing. Fetch sticky entries as normal entries.
        $entries = serendipity_fetchEntries(null, true, '', false, false, 'id ASC', '', false, true);
    } else {
        $entries = serendipity_fetchEntries(null, true, $serendipity['RSSfetchLimit'], false, (isset($modified_since) ? $modified_since : false), 'timestamp DESC', '', false, true);
    }
    break;
}

if (isset($serendipity['serendipityRealname'])) {
    $title .= ' (' . LOGIN . ': ' . $serendipity['serendipityRealname'] . ')';
}

if (!empty($serendipity['GET']['category'])) {
    $cInfo       = serendipity_fetchCategoryInfo((int)$serendipity['GET']['category']);
    $title       = serendipity_utf8_encode(htmlspecialchars($title . ' - '. $cInfo['category_name']));
} elseif (!empty($serendipity['GET']['viewAuthor'])) {
    list($aInfo) = serendipity_fetchAuthor((int)$serendipity['GET']['viewAuthor']);
    $title       = serendipity_utf8_encode(htmlspecialchars($aInfo['realname'] . ' - '. $title ));
} else {
    $title       = serendipity_utf8_encode(htmlspecialchars($title));
}

$description = serendipity_utf8_encode(htmlspecialchars($description));

$metadata = array(
    'title'             => $title,
    'description'       => $description,
    'language'          => $serendipity['lang'],
    'additional_fields' => array(),
    'link'              => $serendipity['baseURL'],
    'email'             => $serendipity['blogMail'],
    'fullFeed'          => false,
    'showMail'          => false,
    'version'           => $version
);


include_once(S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php');

$plugins = serendipity_plugin_api::enum_plugins();

if (is_array($plugins)) {
    // load each plugin to make some introspection
    foreach ($plugins as $plugin_data) {
        if (preg_match('|@serendipity_syndication_plugin|', $plugin_data['name'])) {
            $plugin =& serendipity_plugin_api::load_plugin($plugin_data['name'], $plugin_data['authorid']);

            $metadata['additional_fields'] = $plugin->generate_rss_fields($metadata['title'], $metadata['description'], $entries);
            if (is_array($metadata['additional_fields'])) {
                // Fix up array keys, because "." are not allowed when wanting to output using Smarty
                foreach($metadata['additional_fields'] AS $_aid => $af) {
                    $aid = str_replace('.', '', $_aid);
                    $metadata['additional_fields'][$aid] = $af;
                }
            }
            $metadata['fullFeed']          = $plugin->get_config('fullfeed', false);
            if ($metadata['fullFeed'] === 'client') {
                if ($_GET['fullFeed'] || $serendipity['GET']['fullFeed']) {
                    $metadata['fullFeed'] = true;
                } else {
                    $metadata['fullFeed'] = false;
                }
            }

            if ($_GET['type']  == 'content' &&
                !isset($_GET['category']) &&
                !isset($serendipity['GET']['tag']) &&
                $plugin->get_config('show_feedburner') === 'force' &&
                !preg_match('@FeedBurn@i', $_SERVER['HTTP_USER_AGENT']) &&
                !(serendipity_userLoggedIn() && isset($_GET['forceLocal']))
               ) {
                $fbid = $plugin->get_config('fb_id');
                if (stristr($fbid, 'http://')) {
                    $url = $fbid;
                } else {
                    $url = 'http://feeds.feedburner.com/' . $fbid;
                }
                header('Status: 302 Found');
                header('Location: ' . $url);
                exit;
            }
            $metadata['showMail']          = serendipity_db_bool($plugin->get_config('show_mail', $metadata['showMail']));
            break;
        }
    }
}

$file_version  = preg_replace('@[^0-9a-z\.-_]@i', '', $version);
$metadata['template_file'] = serendipity_getTemplateFile('feed_' . $file_version . '.tpl', 'serendipityPath');

serendipity_smarty_init();
serendipity_plugin_api::hook_event('frontend_rss', $metadata);

if (!$metadata['template_file'] || $metadata['template_file'] == 'feed_' . $file_version . '.tpl') {
    die("Invalid RSS version specified or RSS-template file not found\n");
}

$self_url = 'http://' . $_SERVER['HTTP_HOST'] . htmlspecialchars($_SERVER['REQUEST_URI']);
if (!is_array($entries)) {
    $entries = array();
}

if ($entries[0]['last_modified']) {
    $gm_modified = gmdate('Y-m-d\TH:i:s\Z', serendipity_serverOffsetHour($entries[0]['last_modified']));
} else {
    $gm_modified = gmdate('Y-m-d\TH:i:s\Z', serendipity_serverOffsetHour());
}

serendipity_printEntries_rss($entries, $version, $comments, $metadata['fullFeed'], $metadata['showMail']);

$namespace_hook   = 'frontend_display:unknown:namespace';
$once_display_dat = '';
switch($version) {
    case 'opml1.0':
        $namespace_hook = 'frontend_display:opml-1.0:namespace';
        break;

    case '0.91':
        $namespace_hook = 'frontend_display:rss-0.91:namespace';
        break;

    case '1.0':
        $namespace_hook = 'frontend_display:rss-1.0:namespace';
        serendipity_plugin_api::hook_event('frontend_display:rss-1.0:once', $entries);
        $once_display_dat = $entries['display_dat'];
        unset($entries['display_dat']);
        break;

    case '2.0':
        $namespace_hook = 'frontend_display:rss-2.0:namespace';
        break;

    case 'atom0.3':
        $namespace_hook = 'frontend_display:atom-0.3:namespace';
        break;

    case 'atom1.0':
        // For people wanting extra RFC compliance
        // header('Content-Type: application/atom+xml; charset=utf-8');
        $namespace_hook = 'frontend_display:atom-1.0:namespace';
        break;
}

serendipity_plugin_api::hook_event($namespace_hook, $entries);
$namespace_display_dat = $entries['display_dat'];
$channel_display_dat = $entries['channel_dat'];
unset($entries['display_dat']);
unset($entries['channel_dat']);
$serendipity['smarty']->assignByRef('metadata', $metadata);
$serendipity['smarty']->assignByRef('entries', $entries);
$serendipity['smarty']->assignByRef('namespace_display_dat', $namespace_display_dat);
$serendipity['smarty']->assignByRef('channel_display_dat', $channel_display_dat);
$serendipity['smarty']->assignByRef('once_display_dat', $once_display_dat);

$serendipity['smarty']->assign(
    array(
        'is_comments'           => $comments,
        'last_modified'         => $gm_modified,
        'self_url'              => $self_url,
    )
);
$serendipity['smarty']->display($metadata['template_file']);

/* vim: set sts=4 ts=4 expandtab : */
