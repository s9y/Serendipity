<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/* This is a small hack to allow CSS display during installations and upgrades */
define('IN_installer', true);
define('IN_upgrader', true);
define('IN_CSS', true);

session_cache_limiter('public');
if (!defined('S9Y_FRAMEWORK')) {
    include('serendipity_config.inc.php');
}

if (!isset($css_mode)) {
    if (!empty($serendipity['GET']['css_mode'])) {
        $css_mode = $serendipity['GET']['css_mode'];
    } else {
        $css_mode = 'serendipity.css';
    }
}

switch($css_mode) {
    case 'serendipity.css':
    default:
        $css_hook = 'css';
        $css_file = 'style.css';
        $css_userfile = 'user.css';
        break;

    case 'serendipity_admin.css':
        // This constant is needed to properly set the template context for the backend.
        @define('IN_serendipity_admin', true);
        $css_hook = 'css_backend';
        $css_file = 'admin/style.css';
        $css_userfile = 'admin/user.css';
        break;
}

function serendipity_printStylesheet($file, $dir = '') {
    global $serendipity;
    return "\n/* auto include $dir */\n\n" . str_replace(
             array(
               '{TEMPLATE_PATH}',
               '{LANG_DIRECTION}'
             ),

             array(
               dirname($dir) . '/',
               LANG_DIRECTION
             ),

             @file_get_contents($file, 1));
}

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    header('Cache-Control: no-cache');
} else {
    header('Cache-Control:');
    header('Pragma:');
    header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time()+3600));
}
header('Content-type: text/css; charset=' . LANG_CHARSET);

if (IS_installed === false) {
    if (file_exists(S9Y_INCLUDE_PATH . 'templates/' . $serendipity['defaultTemplate'] . '/' . $css_file)) {
        echo serendipity_printStylesheet('templates/' . $serendipity['defaultTemplate'] . '/' . $css_file, 'templates/' . $serendipity['defaultTemplate'] . '/' . $css_file);
    }
    die();
}

// Use output buffering to capture all output. This is necessary
// because a plugin might call 'echo' directly instead of adding
// the desired output to the hook parameter '$out'.
ob_start();

// First all of our fallback classes, so they can be overridden by the usual template.
$out = serendipity_printStylesheet(
         serendipity_getTemplateFile('style_fallback.css', 'serendipityPath'),
         serendipity_getTemplateFile('style_fallback.css', '')
);

$out .= serendipity_printStylesheet(
         serendipity_getTemplateFile($css_file, 'serendipityPath'),
         serendipity_getTemplateFile($css_file, '')
);

serendipity_plugin_api::hook_event($css_hook, $out);

$out .= serendipity_printStylesheet(
         serendipity_getTemplateFile($css_userfile, 'serendipityPath', true),
         serendipity_getTemplateFile($css_userfile, '', true)
);


echo $out;

//
// Fetch output buffer containing the CSS output and create eTag header
//
$ob_buffer = ob_get_contents();

if ($ob_buffer) {

    // Calculate hash for eTag and get request header. The hash value
    // changes with every modification to any part of the CSS styles.
    // This includes the installation of a plugin that adds plugin
    // specific styles.

    // Send ETag header using the hash value of the CSS code
    $hashValue = md5($ob_buffer);
    @header('ETag: "' . $hashValue . '"');

    // Compare value of If-None-Match header (if available) to hash value
    if (!empty($_SERVER['HTTP_IF_NONE_MATCH'])) {
        // Get request header value and chop off optional quotes
        $reqHeader = trim($_SERVER['HTTP_IF_NONE_MATCH'], '"');

        if ($hashValue === $reqHeader) {
            // Tell client to use the cached version and destroy output buffer
            @header('HTTP/1.1 304 Not Modified', true, 304);
            ob_clean();
        }
    }
}

ob_end_flush();

/* vim: set sts=4 ts=4 expandtab : */
