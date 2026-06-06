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
    if (!$trust_url && serendipity_plugin_api::exists('serendipity_event_trackexits')) {
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

    if ($trust_url) {
        // The destination came from our own references table (url_id/entry_id),
        // so it is a link the blog itself published. Safe to redirect directly.
        header('HTTP/1.0 301 Moved Permanently');
        header('Status: 301 Moved Permanently');
        header('Location: ' . $url);
    } elseif ($open_redir) {
        // The destination here was supplied unauthenticated and base64-encoded
        // via $_GET['url'] (trackexits "s9y" deflection of comment URLs, comment
        // bodies, HTML nuggets and untracked entry links). Redirecting straight
        // to it would be an open redirect (CWE-601) that lets attackers abuse the
        // blog's trusted domain for phishing. Instead we show an interstitial
        // confirmation page: the visitor sees the real destination and chooses to
        // continue. This preserves every deflection case without an open redirect.
        serendipity_exit_confirm_redirect($url);
    }
}
exit;

/**
 * Render a "you are leaving this blog" interstitial for an unverified, visitor
 * supplied redirect target instead of issuing a silent Location redirect.
 *
 * Only http(s) destinations are turned into a clickable link, so a "javascript:"
 * or "data:" payload cannot become click-through XSS. Anything else falls back to
 * the blog start page.
 *
 * @param string $url The decoded, CRLF-clean destination URL.
 * @return void
 */
function serendipity_exit_confirm_redirect($url)
{
    global $serendipity;

    $scheme = strtolower((string) parse_url($url, PHP_URL_SCHEME));
    if ($scheme !== 'http' && $scheme !== 'https') {
        // Refuse anything that is not a plain web link.
        header('Location: ' . $serendipity['baseURL']);
        return;
    }

    // Fallback strings so the page renders even before translators pick these up.
    defined('EXIT_LEAVING_TITLE')    or define('EXIT_LEAVING_TITLE',    'Leaving this site');
    defined('EXIT_LEAVING_NOTICE')   or define('EXIT_LEAVING_NOTICE',   'You are about to leave this blog and open an external website. This link was supplied by a visitor and has not been verified. Continue only if you trust the destination shown below.');
    defined('EXIT_LEAVING_CONTINUE') or define('EXIT_LEAVING_CONTINUE', 'Continue to the external site');
    defined('EXIT_LEAVING_BACK')     or define('EXIT_LEAVING_BACK',     'Return to the blog');

    $safe_url  = serendipity_specialchars($url);
    $safe_base = serendipity_specialchars($serendipity['baseURL']);

    header('Content-Type: text/html; charset=' . LANG_CHARSET);
    echo '<!DOCTYPE html>
<html>
<head>
<meta charset="' . serendipity_specialchars(LANG_CHARSET) . '">
<meta name="robots" content="noindex,nofollow">
<meta name="referrer" content="no-referrer">
<title>' . EXIT_LEAVING_TITLE . '</title>
<style>
body{font-family:sans-serif;margin:0;padding:2em;background:#f4f4f4;color:#222;}
.exit-box{max-width:42em;margin:3em auto;background:#fff;border:1px solid #ddd;border-radius:6px;padding:2em;}
.exit-url{display:block;word-break:break-all;margin:1em 0;padding:.75em;background:#f0f0f0;border-radius:4px;font-family:monospace;}
.exit-actions{margin-top:1.5em;}
.exit-continue{display:inline-block;padding:.6em 1.2em;background:#2a6;color:#fff;text-decoration:none;border-radius:4px;}
.exit-back{margin-left:1em;}
</style>
</head>
<body>
<div class="exit-box">
<h1>' . EXIT_LEAVING_TITLE . '</h1>
<p>' . EXIT_LEAVING_NOTICE . '</p>
<a class="exit-url" href="' . $safe_url . '" rel="nofollow noopener noreferrer">' . $safe_url . '</a>
<div class="exit-actions">
<a class="exit-continue" href="' . $safe_url . '" rel="nofollow noopener noreferrer">' . EXIT_LEAVING_CONTINUE . '</a>
<a class="exit-back" href="' . $safe_base . '">' . EXIT_LEAVING_BACK . '</a>
</div>
</div>
</body>
</html>';
}
/* vim: set sts=4 ts=4 expandtab : */
?>