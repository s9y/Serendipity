<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

$serendipity['smarty']->assign($data);

$tfile = dirname(__FILE__) . "/tpl/export.inc.tpl";

$content = $serendipity['smarty']->fetch('file:'. $tfile); // short notation with Smarty3 in S9y 1.7 and up

echo $content;

/* vim: set sts=4 ts=4 expandtab : */
?>
