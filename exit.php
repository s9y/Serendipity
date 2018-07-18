<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

include 'serendipity_config.inc.php';

$url        = $serendipity['baseURL'];
$trust_url  = false;
$open_redir = false;

if (isset($_GET['url_id']) && !empty($_GET['url_id']) && isset($_GET['entry_id']) && !empty($_GET['entry_id'])) {

    // See if the submitted link is in our database and should be tracked
    $links = serendipity_db_query("SELECT link FROM {$serendipity['dbPrefix']}references WHERE id = " . (int)$_GET['url_id'] . " AND entry_id = " . (int)$_GET['entry_id'], true);

    if (is_array($links) && isset($links['link'])) {
        // URL is valid. Track it.
        $url = str_replace('&amp;', '&', $links['link']);
        $trust_url = true;
        serendipity_track_url('exits', $url, $_GET['entry_id']);
    } elseif (isset($_GET['url']) && !empty($_GET['url'])) {
        // URL is invalid. But a URL-location was sent, so we want to redirect the user kindly.
        $url = str_replace('&amp;', '&', base64_decode($_GET['url']));
    }

} elseif (isset($_GET['url']) && !empty($_GET['url'])) {
    // No entry-link ID was submitted. Possibly a spammer tried to mis-use the script to get into the top-list.
    $url = strip_tags(str_replace('&amp;', '&', base64_decode($_GET['url'])));
}

if (serendipity_isResponseClean($url)) {
    if (serendipity_plugin_api::exists('serendipity_event_trackexits')) {
        // Get configuration of plugin
        $configValues = serendipity_db_query("SELECT value FROM {$serendipity['dbPrefix']}config WHERE name LIKE 'serendipity_event_trackexits:%/commentredirection'");
        if (is_array($configValues)) {
            foreach($configValues AS $configValue) {
                if ($configValue['value'] == 's9y') {
                    $open_redir = true;
                }
            }
        }
    }
    
    if ($trust_url || $open_redir) {
        header('HTTP/1.0 301 Moved Permanently');
        header('Status: 301 Moved Permanently');
        header('Location: ' . $url);
    }
}
exit;
/* vim: set sts=4 ts=4 expandtab : */
?>