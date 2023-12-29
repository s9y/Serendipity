<?php
## HELPER SCRIPT ##
## Compiles actual minified (or not) external javascript libraries into a single one.
## This is like a grunt-task, but to make it easier to be executed by developers,
## this script is here.
##
##
## USAGE:
##
## php gruntipity.php
##
## Createa the file "plugins.js" which is then loaded by the template.
##
## If a new release of a plugin is to be incorporated (say a new release of jquery-autoscroll) you:
##
## 1. Download the minified version jquery.autoscroll.js and put it into this directory
## 2. Execute "php gruntipity.php"
## 3. The "plugins.js" file will get updated
## 4. Commit both plugins.js and jquery.autoscroll.js to the GIT repository
##
##
## If you want to add a new js plugin to the "plugins.js" you:
## 1. Download the minified version jqueryXXX.js and put it into this directory
## 2. Edit gruntipity.php, change the $files array and place the new jqueryXXX.js file at the place
##    where it belongs, if order matters. If order does not matter, put it at the end.
## 3. Execute "php gruntipity.php"
## 4. The "plugins.js" file will get updated
## 5. Add jqueryXXX.js to the GIT repository.
## 6. Commit changes of plugins.js, gruntipity.php and jqueryXXX.js to the GIT repository
##

$files = array(
    'jquery.magnific-popup.js',
    'jquery.syncheight.js',
    'jquery.tabs.js',
    'canvas-toBlob.js',
    'jquery.autoscroll.js',
    'jquery.sortable.js',
    'jquery.cookie.js',
    'jquery.details.js',
    'accessifyhtml5.js'
);

echo "Merging js files into plugins.js...\n";
$plugins = '';
foreach($files AS $file) {
    echo "* Adding $file (" . filesize($file) . " bytes, last changed " . date('Y-m-d H:i', filemtime($file)) . ")\n";
    $plugins .= "// S9Y-MERGE START " . $file . " - " . date('Y-m-d H:i') . "\n" 
              . file_get_contents($file) . "\n"
              . "// S9Y-MERGE END " . $file . " - " . date('Y-m-d H:i') . "\n";
}

$fp = fopen('plugins.js', 'w');
fwrite($fp, $plugins);
fclose($fp);

echo strlen($plugins) . " bytes written to plugins.js. Please commit changes.\n";
