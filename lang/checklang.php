<?php
if (!file_exists('checklang.active')) {
  die('For developers only. Remove this line in PHP file to use this.');
}

// parse language file names and extract existing languages
function get_langs($lang_dir='.') {
    if ($dh = @opendir($lang_dir)) {
        $languages = array();
        while(($file = readdir($dh)) !== false) {
            if(!preg_match('/^serendipity_lang_(.+)\.inc\.php$/', $file, $matches)) {
                continue;
            } else {
                # $languages[] = strtolower($matches[1]);
                $languages[] = $matches[1];
            }
        }
    }
    return $languages;
}

// parse language file, return constants, report duplicates
function parse_langfile($lang='en') {
    $langfile = sprintf('serendipity_lang_%s.inc.php',$lang);
    if ($fh = @fopen($langfile, 'r')) {
        $constants = array();
        printf("\n--- Parse language file: %s\n",strtoupper($lang));
        while (($line = fgets($fh)) !== false) {
            if(!preg_match('/@?define\(.(.+?).,/', $line, $matches)) {
                continue;
            } else {
                if(in_array($matches[1], $constants)) {
                    printf("Duplicate constant: %s\n",$matches[1]);
                }
                $constants[] = $matches[1];
            }
        }
        return $constants;
    }
    return false;
}

print "============================================================\n";
print ":            Serendipity language file checker             :\n";
print "============================================================\n\n";

// get existing languages, remove EN
$languages = get_langs();
unset($languages[array_search('en', $languages)]);
sort($languages);

$constants = array();

// parse EN language file
$constants['en'] = parse_langfile();

// parse all other language files and compare them to EN
foreach ($languages as $language) {
    $constants[$language] = array();
    $constants[$language] = parse_langfile($language);
    // constants in EN missing in this language
    $missing = array_diff($constants['en'], $constants[$language]);
    // constants in this language not known in EN
    $added   = array_diff($constants[$language], $constants['en']);
    // report
    if(!empty($missing)) {
        printf("%s misses these constants:\n",strtoupper($language));
        foreach ($missing as $display) {
            printf("   - %s\n", $display);
        }
    }
    if(!empty($added)) {
        printf("%s has these additional constants:\n",strtoupper($language));
        foreach ($added as $display) {
            printf("   - %s\n", $display);
        }
    }
}

?>
