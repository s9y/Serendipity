<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

$tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
$tfile = dirname(__FILE__) . "/$tpldir/export.inc.tpl";
$serendipity['smarty']->display('file:'. $tfile);

/* vim: set sts=4 ts=4 expandtab : */
