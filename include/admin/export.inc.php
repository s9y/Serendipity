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

$tfile = dirname(__FILE__) . "/export.inc.tpl";

$inclusion = $serendipity['smarty']->security_settings[INCLUDE_ANY];
$serendipity['smarty']->security_settings[INCLUDE_ANY] = true;
$content = $serendipity['smarty']->fetch('file:'. $tfile);
$serendipity['smarty']->security_settings[INCLUDE_ANY] = $inclusion;

echo $content;

/* vim: set sts=4 ts=4 expandtab : */
?>
