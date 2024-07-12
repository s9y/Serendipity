<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

global $serendipity;
$data = array();

switch($serendipity['POST']['adminAction'] ?? '') {
    case 'publish':
        if (!serendipity_checkFormToken()) {
            break;
        }
        $success = serendipity_updertEntry(array(
            'id' => serendipity_specialchars($serendipity['POST']['id']),
            'timestamp' => time(),
            'isdraft' => 0
        ));
        if (is_numeric($success)) {
            $data['published'] = $success;
            $data['error_publish'] = false;
        } else {
            $data['error_publish'] = $success;
            $data['published'] = false;
        }
        break;
    case 'updateCheckDisable':
        if ( !serendipity_checkFormToken() || !serendipity_checkPermission('blogConfiguration') ) {
            break;
        }
        serendipity_set_config_var('updateCheck', false);
        break;
    default:
        $data['published'] = false;
        $data['error_publish'] = false;
        break;
}


$user = serendipity_fetchAuthor($serendipity['authorid']);
// chrome-compatible, from Oliver Gassner, adapted from TextPattern. Hi guys, keep it up. :-)
$bookmarklet = "javascript:var%20d=document,w=window,e=w.getSelection,k=d.getSelection,x=d.selection,s=(e?e():(k)?k():(x?x.createRange().text:0)),f='" . $serendipity['baseURL'] . "',l=d.location,e=encodeURIComponent,p='serendipity_admin.php?serendipity[adminModule]=entries&serendipity[adminAction]=new&serendipity[title]='+e(d.title)+'&serendipity[body]='+e(s)+'&serendipity[url]='+location.href,u=f+p;a=function(){%20%20if(!w.open(u,'t','toolbar=0,resizable=1,scrollbars=1,status=1,width=800,height=800'))%20%20%20%20l.href=u;};if(/Firefox/.test(navigator.userAgent))%20%20setTimeout(a,0);else%20%20a();void(0)";


$data['bookmarklet'] = $bookmarklet;
$data['username'] = $user[0]['realname'];
$data['js_failure_file'] = serendipity_getTemplateFile('admin/serendipity_editor.js');

$output = array();
serendipity_plugin_api::hook_event('backend_frontpage_display', $output);
$data['backend_frontpage_display'] = $output['more'] ?? null;

$data['usedVersion']  = $serendipity['version'];
$data['updateCheck']  = $serendipity['updateCheck'];
$data['curVersion']   = serendipity_getCurrentVersion();
$data['update']       = version_compare($data['usedVersion'], $data['curVersion'], '<');
serendipity_plugin_api::hook_event('plugin_dashboard_updater', $output, $data['curVersion']);
if (is_array($output)) {
    // the autoupdate plugin is not installed and it (and no other plugin) did set $output to html code we could display
    $data['updateButton'] = '';
} else {
    $data['updateButton'] = $output;
}
$output = '';
if (serendipity_plugin_api::hook_event('backend_plugins_upgradecount', $output)) {
    $data['pluginUpdates'] = $output;
} else {
    $data['pluginUpdates'] = '';
}

$cjoin  = ($serendipity['serendipityUserlevel'] == USERLEVEL_EDITOR) ? "
        LEFT JOIN {$serendipity['dbPrefix']}authors a ON (e.authorid = a.authorid)
            WHERE e.authorid = " . (int)$serendipity['authorid']
        : '';
$cquery = "SELECT c.*, e.title, e.authorid
             FROM {$serendipity['dbPrefix']}comments c
        LEFT JOIN {$serendipity['dbPrefix']}entries e ON (e.id = c.entry_id)
        " . $cjoin ."
         ORDER BY c.id DESC LIMIT " . (int)$serendipity['dashboardCommentsLimit'];
$comments = serendipity_db_query($cquery);

if (is_array($comments) && count($comments) > 0) {
    foreach ($comments as &$comment) {
        $comment['entrylink'] = serendipity_archiveURL($comment['entry_id'], 'comments', 'serendipityHTTPPath', true) . '#c' . $comment['id'];

        $comment['fullBody']  = $comment['body'];
        $comment['summary']   = serendipity_mb('substr', $comment['body'], 0, 100);

        if (strlen($comment['fullBody']) > strlen($comment['summary']) ) {
            $comment['excerpt'] = true;

            // When summary is not the full body, strip HTML tags from summary, as it might break and leave unclosed HTML.
            $comment['fullBody'] = nl2br(serendipity_specialchars($comment['fullBody']));
            $comment['summary']  = nl2br(strip_tags($comment['summary']));
        } else {
            $comment['excerpt'] = false;
        }
    }
}

$data['comments'] = $comments;

$efilter = ($serendipity['serendipityUserlevel'] == USERLEVEL_EDITOR) ? ' AND e.authorid = ' . (int)$serendipity['authorid'] : '';
$entries = serendipity_fetchEntries(
                     false,
                     false,
                     (int)$serendipity['dashboardEntriesLimit'],
                     true,
                     false,
                     'timestamp ASC',
                     'e.timestamp >= ' . serendipity_serverOffsetHour() . $efilter
                   );

$entriesAmount = 0;
if (is_array($entries)) {
    $entriesAmount = count($entries);
};
if ($entriesAmount < (int)$serendipity['dashboardEntriesLimit']) {
    // there is still space for drafts
    $drafts = serendipity_fetchEntries(
                     false,
                     false,
                     (int)$serendipity['dashboardEntriesLimit'] - $entriesAmount,
                     true,
                     false,
                     'timestamp ASC',
                     "isdraft = 'true' AND e.timestamp <= " . serendipity_serverOffsetHour() . $efilter
                   );
    if (is_array($entries) && is_array($drafts)) {
        $entries = array_merge($entries, $drafts);
    } else {
        if (is_array($drafts)) {
            // $entries is not an array, thus empty
            $entries = $drafts;
        }
    }
}

$dbHealth = true;
if ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite') {
    // we check that the database is writeable, because that's otherwise hard to detect for users
    $dbFile = $serendipity['serendipityPath'] . $serendipity['dbName'] . '.db';
    $dbHealth = is_writable($dbFile);
    
}

$data['db_health'] = $dbHealth;

$data['entries'] = $entries;
$data['showFutureEntries'] = $serendipity['showFutureEntries'] ?? false;
$data['serverOffsetHour'] = $serendipity['serverOffsetHour'] ?? 0;

$data['urltoken'] = serendipity_setFormToken('url');
$data['token'] = serendipity_setFormToken();

$data['no_create'] = $serendipity['no_create'] ?? null;

echo serendipity_smarty_show('admin/overview.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
