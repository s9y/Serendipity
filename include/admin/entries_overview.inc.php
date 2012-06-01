<?php # $Id$

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

$tfile = dirname(__FILE__) . "/tpl/entries_overview.inc.tpl";
$content = $serendipity['smarty']->fetch('file:'. $tfile);
echo $content;

/* vim: set sts=4 ts=4 expandtab : */
