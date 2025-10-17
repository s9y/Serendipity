<?php

// this function is meant to be run from the command line
// usage: php -f langsorter.php [arg1] [arg1]
// arg1: language file to sort, for example de
// arg2: folder, empty = language root folder, UTF-8 = subfolder
// or single argument all to batch process all existing language files
// rearranges the language file the same as is in the english file
// missing definitions are copied from the english file
// removed definitions going to be removed
// if some values are going to be changed, do it to the array in line 86
// for example where the string has changed and to be back-set to english
// or change definition name by changing the array key
// remove this safety block

function getDef($line) {
    $matches = array();
    $def = preg_match("#@define\\('([a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*)',#", $line, $matches);
    if (empty($matches[1])) { 
        return false;
    }
    return $matches[1];
}

function getVal($line) {
    $matches = array();
    $val = preg_match("#,(.+)\\);#", $line, $matches);
    if (empty($matches[1])) return false;
    return ' ' . trim($matches[1]);
}

function checkIgnore($line) {
    if ( empty($line) || 
        substr($line, 0, 1) == '/' || 
        substr($line, 0, 1) == '#' || 
        substr($line, 0, 5) == '<?php' ||
        substr($line, 0, 2) == '?>' ) { 
            return true;
    } else { return false; }
}

function synclang($dir, $lancode) {
    global $refarray, $refstart; 
    
    // load target language
    $tarlang = file_get_contents( $dir . 'serendipity_lang_' . $lancode . '.inc.php');

    if ($tarlang === false) {
        echo "Error: cannot load target file\n";
        exit;
    }

    // explode file into lines
    $tararray = explode("\n", $tarlang);

    // get first definition line
    foreach ($tararray as $key => $value) {
        if ( strpos($value, "@define('LANG_CHARSET',")  !== false ) {
            $tarstart = $key;
            break;
        }
    }

    $tardefs = array();
    // split target definitions in key - value array
    echo "prepare target language file ...\r\n";
    for ($i = $tarstart; $i < count($tararray); $i++) {
        $line = $tararray[$i];
        if (checkIgnore($line)) continue;
        if (preg_match("#@define( +)\\(( +)'[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*'( +),#", $value) !== 0 ) {
            echo "line " . ($key + 1) . " contains additional spaces\r\n";
            exit;
        }
        $def = getDef($line, $i);
        if ($def === false) {
            echo "no definition found in line " . ($i + 1) . ": " . $line . "\r\n";
            exit;
        }
        $val = getVal($line, $i);
        if ($val === false) {
            echo "no value found in line " . ($i + 1) . ": " . $line . "\r\n";
            exit;
        }
        $tardefs[$def] = $val;
    }

    // make changes, e.g. delete translations which have to be changed
    //unset($tardefs['IFRAME_SAVE']); reset a string to be copied from default
	//$tardefs['SIGNATURE'] = ' "' . trim($tardefs['SIGNATURE'], 'n- "\\'); the target definition includes everthing after the colon

    echo "OK\r\n";
    $output = array_slice($tararray, 0, $tarstart);

    echo "sort target language according to template file ...\r\n";
    for ($i = $refstart; $i < count($refarray); $i++) {
        $line = $refarray[$i];
        if (checkIgnore($line)) {
            $output[] = $line;
            continue;
        }
        $def = getDef($line, $i);
        if (array_key_exists($def, $tardefs)) {
            $output[] = "@define('{$def}',{$tardefs[$def]});";
        } else {
            echo "definition {$def} missing from target file, copying from template\r\n";
            $output[] = $line;
        }
    }
    echo "OK\r\n\r\n";

    if (!file_exists($dir . 'processed')) mkdir($dir . 'processed', 0777, true);

    file_put_contents( $dir . 'processed/serendipity_lang_' . $lancode . '.inc.php', implode("\n", $output));
    
}

// ===========================
//       program start
// ===========================

if (!is_array($argv) || empty($argv[1])) {
    echo "This tool is intended to be called via commandline!\n";
    exit;
}

// argument = language code of the file to be converted
$lancode = $argv[1];

// load template language
$reflang = file_get_contents('serendipity_lang_en.inc.php');

// explode file into lines
$refarray = explode("\n", $reflang);

// get first definition line
foreach ($refarray as $key => $value) {
    if ( strpos($value, "@define('LANG_CHARSET',")  !== false ) {
        $refstart = $key;
        break;
    }
}

// check syntax of reference files
echo "syntax check of reference file ...\r\n";
foreach ($refarray as $key => $value) {
    if (checkIgnore($value) ) continue;
    if (trim($value) == '') {
        echo "line " . ($key + 1) . " contains only space\r\n";
        exit;
    }
    if (preg_match("#@define( +)\\(( +)'[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*'( +),#", $value) !== 0 ) {
        echo "line " . ($key + 1) . " contains additional spaces\r\n";
        exit;
    }
    if (getDef($value) === false) {
        echo  "no definition found in line " . ($key + 1) . ": " . $value . "\r\n";
        exit;
    }
    if (getVal($value) === false) {
        echo  "no value found in line " . ($key + 1) . ": " . $value . "\r\n";
        exit;
    }
}
echo "OK\r\n\r\n";

// process single file
if ($lancode != 'all') {
    if (empty($argv[2])) {
        synclang('', $lancode);
    } elseif ($argv[2] == 'UTF-8') {
        synclang('UTF-8/', $lancode);
    }
} else {
    // batch processing all files in folder
    $d = @opendir('./');

    if (!$d) {
        die('Failure');
    }
        
    while(($file = readdir($d)) !== false) {
        $matches = array();
        preg_match('@serendipity_lang_([a-z]{2}[_]*[A-Z]*)\.inc\.php@', $file, $matches);
        if (empty($matches[1])) continue;
        if ($matches[1] == 'en') continue;
        echo "syncing language {$matches[1]}\r\n========================\r\n";
        synclang('', $matches[1]);
    }
    
    $d = @opendir('UTF-8');

    if (!$d) {
        die('Failure');
    }

    while(($file = readdir($d)) !== false) {
        $matches = array();
        preg_match('@serendipity_lang_([a-z]{2}[_]*[A-Z]*)\.inc\.php@', $file, $matches);
        if (empty($matches[1])) continue;
        echo "syncing language {$matches[1]}\r\n========================\r\n";
        synclang('UTF-8/', $matches[1]);
    }
}
echo "DONE\r\n";
?>
