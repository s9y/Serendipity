<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

$serendipity = array();

if (!defined('PATH_SEPARATOR')) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        define('PATH_SEPARATOR', ';');
    } else {
        define('PATH_SEPARATOR', ':');
    }
}

if (!defined('DIRECTORY_SEPARATOR')) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        define('DIRECTORY_SEPARATOR', '\\');
    } else {
        define('DIRECTORY_SEPARATOR', '/');
    }
}

/**
 * Create a snapshot of the current memory usage
 *
 * This functions makes use of static function properties to store the last used memory and the intermediate snapshots.
 * @access public
 * @param  string   A label for debugging output
 * @return boolean  Return whether the snapshot could be evaluated
 */
function memSnap($tshow = '') {
    static $avail    = null;
    static $show     = true;
    static $memUsage = 0;

    if (!$show) {
        return false;
    }

    if ($avail === false) {
        return true;
    } elseif ($avail === null) {
        if (function_exists('memory_get_usage')) {
            $avail = memory_get_usage();
        } else {
            $avail = false;
            return false;
        }
    }

    if ($memUsage === 0) {
        $memUsage = $avail;
    }

    $current = memory_get_usage();
    $memUsage = $current;
    return '[' . date('d.m.Y H:i') . '] ' . number_format($current - $memUsage, 2, ',', '.') . ' label "' . $tshow . '", totalling ' . number_format($current, 2, ',', '.') . '<br />' . "\n";
}


/**
 * Make readable error types for debugging error_reporting levels
 *
 * @access public
 * @param  int     error value
 * @return string  constant error string
 */
function debug_ErrorLevelType($type)
{
    switch($type)
    {
        case E_ERROR: // 1 //
            return 'E_ERROR';
        case E_WARNING: // 2 //
            return 'E_WARNING';
        case E_PARSE: // 4 //
            return 'E_PARSE';
        case E_NOTICE: // 8 //
            return 'E_NOTICE';
        case E_CORE_ERROR: // 16 //
            return 'E_CORE_ERROR';
        case E_CORE_WARNING: // 32 //
            return 'E_CORE_WARNING';
        case E_COMPILE_ERROR: // 64 //
            return 'E_COMPILE_ERROR';
        case E_COMPILE_WARNING: // 128 //
            return 'E_COMPILE_WARNING';
        case E_USER_ERROR: // 256 //
            return 'E_USER_ERROR';
        case E_USER_WARNING: // 512 //
            return 'E_USER_WARNING';
        case E_USER_NOTICE: // 1024 //
            return 'E_USER_NOTICE';
        case E_RECOVERABLE_ERROR: // 4096 //
            return 'E_RECOVERABLE_ERROR';
        case E_DEPRECATED: // 8192 //
            return 'E_DEPRECATED';
        case E_USER_DEPRECATED: // 16384 //
            return 'E_USER_DEPRECATED';
    }
    return "";
}


/**
 * Set our own exception handler to convert all errors into exceptions automatically
 * function_exists() avoids 'cannot redeclare previously declared' fatal errors in XML feed context.
 *
 * See Notes about returning false
 *
 * @access public
 * @param  standard
 * @return null
 */
if (!function_exists('errorToExceptionHandler')) {
    function errorToExceptionHandler($errNo, $errStr, $errFile = '', $errLine = NULL, $errContext = array()) {
        global $serendipity;

        // By default, we will continue our process flow, unless:
        $exit = false;

        @ini_set('zend.exception_string_param_max_len', 200);

        switch ($errNo) {
            case E_ERROR:
            case E_USER_ERROR:
                $type = 'Fatal Error';
                $exit = true;
                break;

            case E_USER_WARNING:
            case E_WARNING:
                $type = 'Warning';
                break;

            case E_USER_NOTICE:
            case E_NOTICE:
            case @E_DEPRECATED:
            case @E_USER_DEPRECATED:
                $type = 'Notice';
                break;

            case @E_RECOVERABLE_ERROR:
                $type = 'Catchable';
                break;

            default:
                $type = 'Unknown Error';
                $exit = true;
                break;
        }

        // NOTE: We do NOT use ini_get('error_reporting'), because that would return the global error reporting,
        // and not the one in our current content. @-silenced errors would otherwise never be caught on.
        $rep  = error_reporting();

        // Bypass error processing because it's @-silenced.
        if ($rep == 0) {
            return false;
        }

        // if not using Serendipity testing and user or ISP has set PHPs display_errors to show no errors at all, respect this:
        if ($serendipity['production'] === true && ini_get('display_errors') == 0) {
            return false;
        }

        $args = func_get_args();

        // Several plugins might not adapt to proper style. This should not completely kill our execution.
        if ($serendipity['production'] !== 'debug' && preg_match('@Declaration.*should be compatible with@i', $args[1])) {
            #if (!headers_sent()) echo "<strong>Compatibility warning:</strong> Please upgrade file old '{$args[2]}', it contains incompatible signatures.<br/>Details: {$args[1]}<br/>";
            return false;
        }

        /*
         * $serendipity['production'] can be:
         *
         * (bool) TRUE:         Live-blog, conceal error messages
         * (bool) FALSE         Beta/alpha builds
         * (string) 'debug'     Developer build, specifically enabled.
         */
        if ($serendipity['production'] !== 'debug') {
            $debug_note = '<br />For more details set $serendipity[\'production\'] = \'debug\' in serendipity_config_local.inc.php to receive a stack-trace.';
        } else {
            $debug_note = '';
        }

        // Debug environments shall be verbose...
        if ($serendipity['production'] === 'debug') {
            echo " == ERROR-REPORT (DEBUGGING ENABLED) == <br />\n";
            echo " == (When you copy this debug output to a forum or other places, make sure to remove your username/passwords, as they may be contained within function calls) == \n";
            echo '<pre>';
            debug_print_backtrace(); // Unlimited output, debugging shall show us everything.
            echo "</pre>";
            $debug_note = '';
        } elseif ($serendipity['production'] === false) {
            echo " == ERROR-REPORT (BETA/ALPHA-BUILDS) == \n";
        }

        if ($serendipity['production'] !== true) {
            // Display error (production: FALSE and production: 'debug')
            echo '<p><b>' . $type . ':</b> '.$errStr . ' in ' . $errFile . ' on line ' . $errLine . '.' . $debug_note . '</p>';
            
            if ($serendipity['production'] === 'debug') {
                // In debug mode, throwing an exception here will stop the code execution. Sometimes useful to catch all errors.
                throw new \ErrorException($type . ': ' . $errStr, 0, $errNo, $errFile, $errLine);
            }

            if (!$serendipity['dbConn'] || $exit) {
                exit; // make sure to exit in case of database connection errors or fatal errors.
            }
        }
    }
}

if (!function_exists('fatalErrorShutdownHandler')) {
 /**
  * Make fatal Errors readable
  *
  * @access public
  *
  * @return string  constant error string as Exception
  */
     function fatalErrorShutdownHandler() {
         $last_error = error_get_last();
         if ($last_error['type'] === E_ERROR) {
             // fatal error send to
             errorToExceptionHandler(E_ERROR, $last_error['message'], $last_error['file'], $last_error['line']);
         }
     }
}

if (!function_exists('file_get_contents')) {
    function file_get_contents($filename, $use_include_path = 0) {
        $file = fopen($filename, 'rb', $use_include_path);
        $data = '';
        if ($file) {
            while (!feof($file)) {
                $data .= fread($file, 4096);
            }
            fclose($file);
        }

        return $data;
    }
}

if (!isset($_REQUEST)) {
    $_REQUEST = &$HTTP_REQUEST_VARS;
}
if (!isset($_POST)) {
    $_POST = &$HTTP_POST_VARS;
}

if (!isset($_GET)) {
    $_GET = &$HTTP_GET_VARS;
}

if (!isset($_SESSION)) {
    $_SESSION = &$HTTP_SESSION_VARS;
}

if (!isset($_COOKIE)) {
    $_COOKIE = &$HTTP_COOKIE_VARS;
}

if (!isset($_SERVER)) {
    $_SERVER = &$HTTP_SERVER_VARS;
}

if (extension_loaded('filter') && function_exists('input_name_to_filter') && input_name_to_filter(ini_get('filter.default')) !== FILTER_UNSAFE_RAW) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = input_get(INPUT_POST, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_GET as $key => $value) {
        $_GET[$key] = input_get(INPUT_GET, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_COOKIE as $key => $value) {
        $_COOKIE[$key] = input_get(INPUT_COOKIE, $key, FILTER_UNSAFE_RAW);
    }
    // NOT YET IMPLEMENTED IN PHP:
    /*
    foreach ($_SESSION as $key => $value) {
        $_SESSION[$key] = input_get(INPUT_SESSION, $key, FILTER_UNSAFE_RAW);
    }
    */
}

if (extension_loaded('filter') && function_exists('filter_id') && function_exists('filter_input') && filter_id(ini_get('filter.default')) !== FILTER_UNSAFE_RAW) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = filter_input(INPUT_POST, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_GET as $key => $value) {
        $_GET[$key] = filter_input(INPUT_GET, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_COOKIE as $key => $value) {
        $_COOKIE[$key] = filter_input(INPUT_COOKIE, $key, FILTER_UNSAFE_RAW);
    }

    // NOT YET IMPLEMENTED IN PHP:
    /*
    foreach ($_SESSION as $key => $value) {
        $_SESSION[$key] = filter_input(INPUT_SESSION, $key, FILTER_UNSAFE_RAW);
    }
    */
}

// Merge get and post into the serendipity array
// It is vital that also an empty array is mapped as a reference
// because the s9y core actually sets new array key values sometimes in $_GET and
// sometimes in $serendipity['GET'] (and POST/COOKIE).
// TODO: This is being worked on currently to be unified see #650
if (!array_key_exists('serendipity', $_GET) || !is_array($_GET['serendipity'])) {
    $_GET['serendipity'] = array();
}

$serendipity['GET']    = &$_GET['serendipity'];

if (!array_key_exists('serendipity', $_POST) || !is_array($_POST['serendipity'])) {
    $_POST['serendipity'] = array();
}

$serendipity['POST']   = &$_POST['serendipity'];

if (!array_key_exists('serendipity', $_COOKIE) || !is_array($_COOKIE['serendipity'])) {
    $_COOKIE['serendipity'] = array();
}

$serendipity['COOKIE'] = &$_COOKIE['serendipity'];

// Attempt to fix IIS compatibility
if (empty($_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'] . '?' . (!empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '');
}

/**
 * Translate values coming from the Database into native PHP variables to detect boolean values.
 *
 * @access public
 * @param   string      input value
 * @return  boolean     boolean output value
 */
function serendipity_get_bool($item) {
    static $translation = array('true'  => true,
                                'false' => false);

    if (isset($translation[$item])) {
        return $translation[$item];
    } else {
        return $item;
    }
}

/**
 * Get the current charset
 *
 * @return  string      Empty string or "UTF-8/".
 */
function serendipity_getCharset() {
    global $serendipity;

    $charset = $serendipity['charset'] ?? 'UTF-8/';
    if (!empty($_POST['charset'])) {
        if ($_POST['charset'] == 'UTF-8/') {
            $charset = 'UTF-8/';
        } else {
            $charset = '';
        }
    }

    if (!empty($serendipity['POST']['charset'])) {
        if ($serendipity['POST']['charset'] == 'UTF-8/') {
            $charset = 'UTF-8/';
        } else {
            $charset = '';
        }
    }
    return $charset;
}

/**
 * Detect the language of the User Agent/Visitor
 *
 * This function needs to be included at this point so that it is globally available, also
 * during installation.
 *
 * @access public
 * @param   boolean     Toggle whether to include the language that has been autodetected.
 * @return  string      Return the detected language name
 */
function serendipity_detectLang($use_include = false) {
    global $serendipity;

    if ($serendipity['languages'] == null) {
        return null;
    }
    $supported_languages = array_keys($serendipity['languages']);
    $possible_languages = explode(',', (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : ''));
    if (is_array($possible_languages)) {
        $charset = serendipity_getCharset();

        foreach($possible_languages as $index => $lang) {
            $preferred_language = strtolower(preg_replace('@^([^\-_;]*)_?.*$@', '\1', $lang));
            if (in_array($preferred_language, $supported_languages)) {
                if ($use_include) {
                    @include_once(S9Y_INCLUDE_PATH . 'lang/' . $charset . 'serendipity_lang_' . $preferred_language . '.inc.php');
                    //$serendipity['autolang'] = $preferred_language; -> according to the documentation, it should remain on 'en'
                }
                return $preferred_language;
            } // endif
        } // endforeach
    } // endif

    // negotiation failed
    return null;
}

/**
 * Get the current serendipity version, minus the "-alpha", "-beta" or whatever tags
 *
 * @access public
 * @param  string   Serendipity version
 * @return string   Serendipity version, stripped of unneeded parts
 */
function serendipity_getCoreVersion($version) {
    return preg_replace('@^([0-9\.]+).*$@', '\1', $version);
}

/**
 * Make Serendipity emit an error message and terminate the script
 *
 * @access public
 * @param   string  HTML code to die with
 * @return null
 */
function serendipity_die($html) {
    $charset = !defined('LANG_CHARSET') ? 'UTF-8' : LANG_CHARSET;
    die(
'<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=' . $charset . '">
    </head>
    <body><div class="msg_notice">' . $html . '</div><style>.msg_notice {
    display: block;
    margin: 1.5em 0;
    padding: .5em;
    background: #f2dede;
    border: 1px solid #e4b9b9;
    color: #b94a48;
}</style></body>
</html>');
}

/*
 *  Some defaults for our config vars.
 *  They are likely to be overwritten later in the code
 */
$serendipity['templatePath'] = 'templates/';
if (!isset($serendipity['serendipityPath'])) {
    $serendipity['serendipityPath'] = (defined('S9Y_INCLUDE_PATH') ? S9Y_INCLUDE_PATH : './');
}

$serendipity['indexFile'] = 'index.php';

if (function_exists('date_default_timezone_get')) {
    // We currently offer no Timezone setting (only offset to UTC), so we
    // rely on the OS' timezone.
    @date_default_timezone_set(@date_default_timezone_get());
}

/**
 * In PHP 5.4, the default encoding of htmlspecialchar changed to UTF-8 and it will emit empty strings when given
 * native encoded strings containing umlauts. This wrapper should to be used in the core until PHP 5.6 fixes the bug.
 */
function serendipity_specialchars($string, $flags = null, $encoding = LANG_CHARSET, $double_encode = true) {
    if ($flags == null) {
        if (defined('ENT_HTML401')) {
            // Added with PHP 5.4.x
            $flags = ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE;
        } else {
            // For PHP < 5.4 compatibility
            $flags = ENT_COMPAT;
        }
    }

    if ($encoding == 'LANG_CHARSET') {
        // if called before LANG_CHARSET is set, we need to set a fallback encoding to not throw a php warning that
        // would kill s9y blogs sometimes (https://github.com/s9y/Serendipity/issues/236)
        $encoding = 'UTF-8';
    }

    return htmlspecialchars($string ?? '', $flags, $encoding, $double_encode);
}

/**
 * see serendipity_specialchars
 */
function serendipity_entities($string, $flags = null, $encoding = LANG_CHARSET, $double_encode = true) {
    if ($flags == null) {
        if (defined('ENT_HTML401')) {
            // Added with PHP 5.4.x
            $flags = ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE;
        } else {
            // For PHP < 5.4 compatibility
            $flags = ENT_COMPAT;
        }
    }
    if ($encoding == 'LANG_CHARSET') {
        $encoding = 'UTF-8';
    }
    return htmlentities($string, $flags, $encoding, $double_encode);
}

/**
 * serendipity_specialchars
 */
function serendipity_entity_decode($string, $flags = null, $encoding = LANG_CHARSET) {
    if ($flags == null) {
        # NOTE: ENT_SUBSTITUTE does not exist for this function, and the documentation does not specify that it will
        # ever echo empty strings on charset errors
        if (defined('ENT_HTML401')) {
            // Added with PHP 5.4.x
            $flags = ENT_COMPAT | ENT_HTML401;
        } else {
            // For PHP < 5.4 compatibility
            $flags = ENT_COMPAT;
        }
    }
    if ($encoding == 'LANG_CHARSET') {
        $encoding = 'UTF-8';
    }
    return html_entity_decode($string, $flags, $encoding);
}

/* vim: set sts=4 ts=4 expandtab : */
