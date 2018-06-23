<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (defined('S9Y_FRAMEWORK')) {
    return;
}

@define('S9Y_FRAMEWORK', true);
if (!headers_sent() && php_sapi_name() !== 'cli') {
    // Only set the session name, if no session has yet been issued.
    if (session_id() == '') {
        $cookieParams = session_get_cookie_params();
        $cookieParams['secure'] = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ? true : false);
        session_set_cookie_params($cookieParams['lifetime'], $cookieParams['path'], $cookieParams['domain'], $cookieParams['secure'], $cookieParams['httponly']);
        session_name('s9y_' . md5(dirname(__FILE__)));
        session_start();
    }

    // Prevent session fixation by only allowing sessions that have been sent by the server.
    // Any session that does not contain our unique token will be regarded as foreign/fixated
    // and be regenerated with a system-generated SID.
    // Patch by David Vieira-Kurz of majorsecurity.de
    if (!isset($_SESSION['SERVER_GENERATED_SID'])) {
        session_regenerate_id(true);
        @session_start();
        header('X-Session-Reinit: true');
        $_SESSION['SERVER_GENERATED_SID'] = $_SERVER['REMOTE_ADDR'] . $_SERVER['QUERY_STRING'];
    }
}

if (!defined('S9Y_INCLUDE_PATH')) {
    define('S9Y_INCLUDE_PATH', dirname(__FILE__) . '/');
}
define('S9Y_CONFIG_TEMPLATE',     S9Y_INCLUDE_PATH . 'include/tpl/config_local.inc.php');
define('S9Y_CONFIG_USERTEMPLATE', S9Y_INCLUDE_PATH . 'include/tpl/config_personal.inc.php');

define('IS_installed', file_exists('serendipity_config_local.inc.php') && (filesize('serendipity_config_local.inc.php') > 0));

if (!defined('IN_serendipity')) {
    define('IN_serendipity', true);
}

include(S9Y_INCLUDE_PATH . 'include/compat.inc.php');
if (defined('USE_MEMSNAP')) {
    echo memSnap('Framework init');
}

// The version string
$serendipity['version'] = '2.2.0-beta2';


// Setting this to 'false' will enable debugging output. All alpha/beta/cvs snapshot versions will emit debug information by default. To increase the debug level (to enable Smarty debugging), set this flag to 'debug'.
if (!isset($serendipity['production'])) {
    $serendipity['production'] = ! preg_match('@\-(alpha|beta|cvs|rc).*@', $serendipity['version']);
}

// Set error reporting
error_reporting(E_ALL & ~(E_NOTICE|E_STRICT|E_DEPRECATED)); // is 22519 with 5.4+

if ($serendipity['production'] !== true) {
    @ini_set('display_errors', 'on');
}

// The serendipity errorhandler string
$serendipity['errorhandler'] = 'errorToExceptionHandler';

// Default rewrite method
$serendipity['rewrite'] = 'none';

// Message container
$serendipity['messagestack'] = array();

// Can the user change the date of publishing for an entry?
$serendipity['allowDateManipulation'] = true;

// How much time is allowed to pass since the publising of an entry, so that a comment to that entry
// will update it's LastModified stamp? If the time is passed, a comment to an old entry will no longer
// push an article as being updated.
$serendipity['max_last_modified'] = 60 * 60 * 24 * 7;

// Clients can send a If-Modified Header to the RSS Feed (Conditional Get) and receive all articles beyond
// that date. However it is still limited by the number below of maximum entries
$serendipity['max_fetch_limit'] = 50;

// How many bytes are allowed for fetching trackbacks, so that no binary files get accidentally trackbacked?
$serendipity['trackback_filelimit'] = 150 * 1024;

// Allow "Access-Control-Allow-Origin: *" to be used in sensible locations (RSS feed)
$serendipity['cors'] = false;

if (!isset($serendipity['fetchLimit'])) {
    $serendipity['fetchLimit'] = 15;
}

if (!isset($serendipity['RSSfetchLimit'])) {
    $serendipity['RSSfetchLimit'] = 15;
}

if (!isset($serendipity['mediaProperties'])) {
    $serendipity['mediaProperties'] = 'DPI;COPYRIGHT;TITLE;COMMENT1:MULTI;COMMENT2:MULTI;ALT';
}

if (!isset($serendipity['use_PEAR'])) {
    $serendipity['use_PEAR'] = true;
}

if (!isset($serendipity['useHTTP-Auth'])) {
    $serendipity['useHTTP-Auth'] = true;
}

if (!isset($serendipity['CacheControl'])) {
    $serendipity['CacheControl'] = true;
}

if (!isset($serendipity['expose_s9y'])) {
    $serendipity['expose_s9y'] = true;
}

// If set to true (in serendipity_config_local.inc.php) this prevents using imap_8bit
// functions to send a mail, and use base64 encoding instead
if (!isset($serendipity['forceBase64'])) {
    $serendipity['forceBase64'] = false; 
}

// Should IFRAMEs be used for previewing entries and sending trackbacks?
$serendipity['use_iframe'] = true;

// Default language for autodetection
$serendipity['autolang'] = 'en';

// Name of folder for the default theme
$serendipity['defaultTemplate'] = '2k11';

// Default backend theme
if (!isset($serendipity['template_backend'])) {
    $serendipity['template_backend'] = '2k11';
}

// The default page title of backend pages is "section | blog title | SERENDIPITY_ADMIN_SUITE"
// If set to true (in serendipity_config_local.inc.php), the page title will be
// "blog title | section | SERENDIPITY_ADMIN_SUITE" instead
if (!isset($serendipity['backendBlogtitleFirst'])) {
    $serendipity['backendBlogtitleFirst'] = false;
}

// Dashboard: set number of comments and drafts / future entries to be shown
if (!isset($serendipity['dashboardCommentsLimit'])) {
    $serendipity['dashboardCommentsLimit'] = 5;
}

if (!isset($serendipity['dashboardEntriesLimit'])) {
    $serendipity['dashboardEntriesLimit'] = 5;
}

// Available languages
if (!isset($serendipity['languages'])) {
    $serendipity['languages'] = array('en' => 'English',
                                  'de' => 'German',
                                  'da' => 'Danish',
                                  'es' => 'Spanish',
                                  'fr' => 'French',
                                  'fi' => 'Finnish',
                                  'cs' => 'Czech (Win-1250)',
                                  'cz' => 'Czech (ISO-8859-2)',
                                  'sk' => 'Slovak',
                                  'nl' => 'Dutch',
                                  'is' => 'Icelandic',
                                  'tr' => 'Turkish',
                                  'se' => 'Swedish',
                                  'pt' => 'Portuguese Brazilian',
                                  'pt_PT' => 'Portuguese European',
                                  'bg' => 'Bulgarian',
                                  'hu' => 'Hungarian',
                                  'no' => 'Norwegian',
                                  'pl' => 'Polish',
                                  'ro' => 'Romanian',
                                  'it' => 'Italian',
                                  'ru' => 'Russian',
                                  'fa' => 'Persian',
                                  'tw' => 'Traditional Chinese (Big5)',
                                  'tn' => 'Traditional Chinese (UTF-8)',
                                  'zh' => 'Simplified Chinese (GB2312)',
                                  'cn' => 'Simplified Chinese (UTF-8)',
                                  'ja' => 'Japanese',
                                  'ko' => 'Korean',
                                  'sa' => 'Arabic',
                                  'ta' => 'Tamil');
}

// Available Calendars
$serendipity['calendars'] = array('gregorian'   => 'Gregorian',
                                  'persian-utf8' => 'Persian (utf8)');
// Load main language file
include($serendipity['serendipityPath'] . 'include/lang.inc.php');

$serendipity['charsets'] = array(
    'UTF-8/' => 'UTF-8',
    ''        => (defined('CHARSET_NATIVE') ? CHARSET_NATIVE : 'CHARSET_NATIVE')
);

@define('PATH_SMARTY_COMPILE', 'templates_c'); // will be placed inside the template directory
@define('USERLEVEL_ADMIN', 255);
@define('USERLEVEL_CHIEF', 1);
@define('USERLEVEL_EDITOR', 0);

@define('VIEWMODE_THREADED', 'threaded');
@define('VIEWMODE_LINEAR', 'linear');

if (!version_compare(phpversion(), '5.3', '>=')) {
    $serendipity['lang'] = 'en';
    include(S9Y_INCLUDE_PATH . 'include/lang.inc.php');
    serendipity_die(sprintf(SERENDIPITY_PHPVERSION_FAIL, phpversion(), '5.3'));
}


// Kill the script if we are not installed, and not inside the installer
if ( !defined('IN_installer') && IS_installed === false ) {
    header('Status: 302 Found');
    header('X-RequireInstall: 1');
    header('Location: ' . (strtolower($_SERVER['HTTPS']) == 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('\\', '/', dirname($_SERVER['PHP_SELF'])) . '/serendipity_admin.php');
    serendipity_die(sprintf(SERENDIPITY_NOT_INSTALLED, 'serendipity_admin.php'));
}

// Do the PEAR dance. If $serendipity['use_PEAR'] is set to FALSE, Serendipity will first put its own PEAR include path.
// By default, a local PEAR will be used.
if (function_exists('get_include_path')) {
    $old_include = @get_include_path();
} else {
    $old_include = @ini_get('include_path');
}


require_once("bundled-libs/autoload.php");

$new_include = ($serendipity['use_PEAR'] ? $old_include . PATH_SEPARATOR : '')
             . S9Y_INCLUDE_PATH . 'bundled-libs/' . PATH_SEPARATOR
             . S9Y_INCLUDE_PATH . 'bundled-libs/Smarty/libs/' . PATH_SEPARATOR
             . $serendipity['serendipityPath'] . PATH_SEPARATOR
             . (!$serendipity['use_PEAR'] ? $old_include . PATH_SEPARATOR : '');

if (function_exists('set_include_path')) {
    $use_include = @set_include_path($new_include);
} else {
    $use_include = @ini_set('include_path', $new_include);
}

if ($use_include !== false && $use_include == $new_include) {
    @define('S9Y_PEAR', true);
    @define('S9Y_PEAR_PATH', '');
} else {
    @define('S9Y_PEAR', false);
    @define('S9Y_PEAR_PATH', S9Y_INCLUDE_PATH . 'bundled-libs/');
}
// PEAR path setup inclusion finished

if (defined('IN_installer') && IS_installed === false) {
    $serendipity['lang'] = $serendipity['autolang'];
    $css_mode            = 'serendipity_admin.css';
    return 1;
}

/*
 *   Load DB configuration information
 *   Load Functions
 *   Make sure that the file included is in the current directory and not any possible
 *   include path
 */
if (!defined('S9Y_DATA_PATH') && file_exists(dirname(__FILE__) . '/serendipity_config_local.inc.php')) {
    $local_config = dirname(__FILE__) . '/serendipity_config_local.inc.php';
} elseif (@file_exists($_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . '/serendipity_config_local.inc.php')) {
    $local_config = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . '/serendipity_config_local.inc.php';
} elseif (defined('S9Y_DATA_PATH')) {
    // Shared installation!
    $local_config = S9Y_DATA_PATH . '/serendipity_config_local.inc.php';
} elseif (@file_exists($serendipity['serendipityPath'] . '/serendipity_config_local.inc.php')) {
    $local_config = $serendipity['serendipityPath'] . '/serendipity_config_local.inc.php';
} else {
    // Installation fallback
    $local_config = S9Y_INCLUDE_PATH . '/serendipity_config_local.inc.php';
}

if (!is_readable($local_config)) {
    $serendipity['lang'] = 'en';
    include(S9Y_INCLUDE_PATH . 'include/lang.inc.php');
    serendipity_die(sprintf(INCLUDE_ERROR . '<br />' . FILE_CREATE_YOURSELF, $local_config));
}

include($local_config);

if ($serendipity['production'] === 'debug') {
    error_reporting(E_ALL ^ E_NOTICE); // is 32759 with 5.4+
}
if ($serendipity['production'] === false) {
    error_reporting(E_ALL & ~(E_NOTICE|E_STRICT)); // is 30711 with 5.4+
}

$errLevel = error_reporting();

/* [DEBUG] Helper to display current error levels, meant for developers.
echo $errLevel."<br>\n";
for ($i = 0; $i < 15;  $i++ ) {
    print debug_ErrorLevelType($errLevel & pow(2, $i)) . "<br>\n";
}
*/

// [internal callback function]: errorToExceptionHandler()
if (is_callable($serendipity['errorhandler'], false, $callable_name)) {
    // set serendipity global error to exception handler
    set_error_handler($serendipity['errorhandler'], $errLevel); // See error_reporting() earlier to see which errors are passed to the handler, deending on $serendipity['production'].
    register_shutdown_function('fatalErrorShutdownHandler');
}

define('IS_up2date', version_compare($serendipity['version'], $serendipity['versionInstalled'], '<='));

// Include main functions
include(S9Y_INCLUDE_PATH . 'include/functions.inc.php');

if (serendipity_FUNCTIONS_LOADED !== true) {
    $serendipity['lang'] = 'en';
    include(S9Y_INCLUDE_PATH . 'include/lang.inc.php');
    serendipity_die(sprintf(INCLUDE_ERROR . '<br />' . FILE_CREATE_YOURSELF, 'include/functions.inc.php'));
}

// Attempt to connect to the database
if (!serendipity_db_connect()) {
    $serendipity['lang'] = 'en';
    include(S9Y_INCLUDE_PATH . 'include/lang.inc.php');
    if (is_object($serendipity['logger'])) $serendipity['logger']->critical(DATABASE_ERROR);
    serendipity_die(DATABASE_ERROR);
}

// Load Configuration options from the database

if (defined('USE_MEMSNAP')) {
    echo memSnap('Framework init');
}

serendipity_load_configuration();
$serendipity['lang'] = serendipity_getSessionLanguage();

serendipity_initLog();

if ( (isset($serendipity['autodetect_baseURL']) && serendipity_db_bool($serendipity['autodetect_baseURL'])) ||
     (isset($serendipity['embed']) && serendipity_db_bool($serendipity['embed'])) ) {
    $serendipity['baseURL'] = 'http' . (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . (!strstr($_SERVER['HTTP_HOST'], ':') && !empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '443' ? ':' . $_SERVER['SERVER_PORT'] : '') . $serendipity['serendipityHTTPPath'];
}

// If a user is logged in, fetch his preferences. He possibly wants to have a different language
if (IS_installed === true && php_sapi_name() !== 'cli') {
    // Import HTTP auth (mostly used for RSS feeds)
    if ($serendipity['useHTTP-Auth'] && (isset($_REQUEST['http_auth']) || isset($_SERVER['PHP_AUTH_USER']))) {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header("WWW-Authenticate: Basic realm=\"Feed Login\"");
            header("HTTP/1.0 401 Unauthorized");
            header("Status: 401 Unauthorized");
            exit;
        } else {
            if (!isset($serendipity['POST']['user'])) {
                $serendipity['POST']['user'] = $_SERVER['PHP_AUTH_USER'];
            }
            if (!isset($serendipity['POST']['pass'])) {
                $serendipity['POST']['pass'] = $_SERVER['PHP_AUTH_PW'];
            }
        }
    } elseif (isset($_REQUEST['http_auth_user']) && isset($_REQUEST['http_auth_pw'])) {
        $serendipity['POST']['user'] = $_REQUEST['http_auth_user'];
        $serendipity['POST']['pass'] = $_REQUEST['http_auth_pw'];
    }

    serendipity_login(false);
}

if (isset($_SESSION['serendipityAuthorid'])) {
    serendipity_load_configuration($_SESSION['serendipityAuthorid']);
    $serendipity['lang'] = serendipity_getPostAuthSessionLanguage();
}

// Try to fix some path settings. It seems common users have this setting wrong
// when s9y is installed into the root directory, especially 0.7.1 upgrade users.
if (empty($serendipity['serendipityHTTPPath'])) {
    $serendipity['serendipityHTTPPath'] = '/';
}

// Changing this is NOT recommended, rewrite rules does not take them into account - yet
serendipity_initPermalinks();

// Apply constants/definitions from custom permalinks
serendipity_permalinkPatterns();

// Load main language file again, because now we have the preferred language
include(S9Y_INCLUDE_PATH . 'include/lang.inc.php');

// Reset charset definition now that final language is known
$serendipity['charsets'] = array(
    'UTF-8/' => 'UTF-8',
    ''        => CHARSET_NATIVE
);

// Set current locale, if any has been defined
if (defined('DATE_LOCALES')) {
    $locales = explode(',', DATE_LOCALES);
    foreach ($locales as $locale) {
        $locale = trim($locale);
        if (setlocale(LC_TIME, $locale) == $locale) {
            break;
        }
    }
}
if (function_exists('date_default_timezone_set')) {
    if(isset($serendipity['useServerOffset']) && $serendipity['useServerOffset']==false) {
        date_default_timezone_set('UTC');
    }
}

// Fallback charset, if none is defined in the language files
@define('LANG_CHARSET', 'ISO-8859-1');

// Create array of permission levels, with descriptions
$serendipity['permissionLevels'] = array(USERLEVEL_EDITOR => USERLEVEL_EDITOR_DESC,
                                         USERLEVEL_CHIEF => USERLEVEL_CHIEF_DESC,
                                         USERLEVEL_ADMIN => USERLEVEL_ADMIN_DESC);

// Some stuff...
if (!isset($_SESSION['serendipityAuthedUser'])) {
    $_SESSION['serendipityAuthedUser'] = false;
}

if (isset($_SESSION['serendipityUser'])) {
    $serendipity['user']  = $_SESSION['serendipityUser'];
}

# && maintenanceMode is on
//if ( {
if (($_SESSION['serendipityAuthedUser'] === false) && (serendipity_db_bool(serendipity_get_config_var("maintenanceMode", false)) === true) && time() < serendipity_get_config_var("maintenanceModeEnd", 0)) {
    header('HTTP/1.1 503 Service Unavailable');
    serendipity_die("Maintenance mode is on, please check back later");
}

// Redirect to the upgrader
if (IS_up2date === false && !defined('IN_upgrader')) {
    if (preg_match(PAT_CSS, $_SERVER['REQUEST_URI'], $matches)) {
        $css_mode = 'serendipity_admin.css';
        return 1;
    }
    if (preg_match('@/(serendipity_editor\.js$)@', $_SERVER['REQUEST_URI'], $matches)) {
        return 1;
    }
    serendipity_die(sprintf(SERENDIPITY_NEEDS_UPGRADE, $serendipity['versionInstalled'], $serendipity['version'], $serendipity['serendipityHTTPPath'] . 'serendipity_admin.php'));
}

// We don't care who tells us what to do
if (!isset($serendipity['GET']['action'])) {
    $serendipity['GET']['action'] = (isset($serendipity['POST']['action']) ? $serendipity['POST']['action'] : '');
}

if (!isset($serendipity['GET']['adminAction'])) {
    $serendipity['GET']['adminAction'] = (isset($serendipity['POST']['adminAction']) ? $serendipity['POST']['adminAction'] : '');
}

// Make sure this variable is always properly sanitized. Previously in compat.inc.php, but there LANG_CHARSET was not defined.
if (isset($serendipity['GET']['searchTerm'])) {
    $serendipity['GET']['searchTerm'] = (is_string($serendipity['GET']['searchTerm']) ? serendipity_specialchars(strip_tags($serendipity['GET']['searchTerm'])) : '');
}

if (isset($_SESSION['serendipityEmail'])) {
    $serendipity['email'] = $_SESSION['serendipityEmail'];
}

if (defined('IN_serendipity_admin') && !isset($serendipity['use_autosave'])) {
    $serendipity['use_autosave'] = true;
}

if (!isset($serendipity['useInternalCache'])) {
    $serendipity['useInternalCache'] = false;
}

// You can set parameters which ImageMagick should use to generate the thumbnails
// by default, thumbs will get a little more brightness and saturation (modulate)
// an unsharp-mask (unsharp)
// and quality-compression of 75% (default would be to use quality of original image)
if (!isset($serendipity['imagemagick_thumb_parameters'])) {
    $serendipity['imagemagick_thumb_parameters'] = '';
    // Set a variable like below in your serendpity_config_local.inc.php
    //$serendipity['imagemagick_thumb_parameters'] = '-modulate 105,140 -unsharp 0.5x0.5+1.0 -quality 75';
}

serendipity_plugin_api::hook_event('frontend_configure', $serendipity);

/* vim: set sts=4 ts=4 expandtab : */