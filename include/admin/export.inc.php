<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

$tfile = dirname(__FILE__) . "/tpl/export.inc.tpl";
$serendipity['smarty']->display('file:'. $tfile);

/* vim: set sts=4 ts=4 expandtab : */
