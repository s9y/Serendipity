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
