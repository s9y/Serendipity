<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}
    
$probelang = dirname(__FILE__) . '/lang_' . $serendipity['lang'] . '.inc.php';
if (file_exists($probelang)) {
    include $probelang;
} else {
    include dirname(__FILE__) . '/lang_en.inc.php';
}

?>