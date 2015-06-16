<?php
exit;

function help() {
    echo "This helper application lists all missing constants from plugin translations.\n\n";
    echo "==================================================\n";
    echo "Call Syntax:\n";
    echo "\tphp plugin_lang.php [lang]\n";
    echo "==================================================\n";
    echo "\n";
    echo "[lang] needs to replaced with the language you want to compare against.\n";
    echo "Example:\n";
    echo "\tphp plugin_lang.php de\n";
    echo "\tThis command will show all untranslated german strings.\n\n";
}

if (!is_array($argv) || empty($argv[1])) {
    echo "==================================================\n";
    echo "This tool is intended to be called via commandline!\n";
    echo "==================================================\n\n";
    help();
    die();
}

$lang = preg_replace('@[^a-z0-9]@', '', strtolower($argv[1]));
echo "Probing language $lang\n";
$base = '../plugins/';
$d = @opendir($base);

if (!$d) {
    die('Failure');
}

$const = array();
$const['checked'] = get_defined_constants();
while(($file = readdir($d)) !== false) {
    if ($file[0] == '.') {
        continue;
    }
    
    if (!is_dir($base . '/' . $file)) {
        continue;
    }
    
    $tfile = $base . '/' . $file . '/lang_en.inc.php';
    $sfile = $base . '/' . $file . '/lang_' . $lang . '.inc.php';

    if (file_exists($tfile)) {
        echo "Parsing english language from $file - ";
        include $tfile;
        $current = get_defined_constants();
        $const['native'][$file] = array_diff($current, $const['checked']);
        $const['checked'] = array_merge($const['checked'], $current);
        echo count($const['native'][$file]) . " constants.\n";
    } else {
        echo "NOTICE: English language of $file does not exist.\n";
        continue;
    }
    
    if (file_exists($sfile)) {
        echo "Parsing differences for $file - ";
        include $sfile;
        $current = get_defined_constants();
        $const['missing'][$file] = array_diff($current, $const['checked']);
        $const['checked'] = array_merge($const['checked'], $current);
       
        echo count($const['missing'][$file]) . " missing constants.\n";
    } else {
        $const['missing'][$file] = $const['native'][$file];
    }
    echo "\n";
}

echo "Showing missing constants:\n\n";
foreach($const['missing'] AS $file => $constants) {
    echo strtoupper($file) . ":\n";
    foreach($constants AS $const => $val) {
        echo "\t" . $const . "\n";
        echo "\t\t" . $val . "\n";
    }
    echo "---------------------------\n";
}
@define('RESET_FILTERS', 'Reset filters');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('DEBUG', 'Debug');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_GROUP_ALL', 'All categories');

@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');

@define('CATEGORY_PLUGIN_SHOWALL', 'Show a link to "All categories"?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('EDITOR_TAGS', 'Tags');
@define('EDITOR_NO_TAGS', 'No tags');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');

@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');
