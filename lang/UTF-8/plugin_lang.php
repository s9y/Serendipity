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

@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');
@define('INSERT_ALL', 'Insert All');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
