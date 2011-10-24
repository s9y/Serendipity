<?php # $Id: config.inc.php 1520 2006-11-30 21:34:29Z garvinhicking $

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