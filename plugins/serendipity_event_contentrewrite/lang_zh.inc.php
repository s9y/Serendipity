<?php # $Id: $
##########################################################################
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity    #
# Developer Team) All rights reserved.  See LICENSE file for licensing   #
# details								 #
#                                                                        #
# (c) 2003 Jannis Hermanns <J@hacked.it>                                 #
# http://www.jannis.to/programming/serendipity.html                      #
#                                                                        #
# Translated by                                                          #
# (c) 2006 Aphonex Li <aphonex.li@gmail.com>                             #
#               http://www.exten.cn                                      #
##########################################################################

        @define('PLUGIN_EVENT_CONTENTREWRITE_FROM', '改');
        @define('PLUGIN_EVENT_CONTENTREWRITE_TO', '到');
        @define('PLUGIN_EVENT_CONTENTREWRITE_NAME', '内容改写');
        @define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', '覆盖选择字符 (可用缩略字)');
        @define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', '新改写名称');
        @define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', '输入缩略字的名称 ({改})');
        @define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', '改写名称 #%d');
        @define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', '输入缩略字 ({改})');
        @define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', '外挂名称 (内容改写)');
        @define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', '内容改写外挂的名称');
        @define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', '新改写字');
        @define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', '输入新的改写字 ({到})');
        @define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', '改写字 #%s');
        @define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', '输入改写字 ({到})');
        @define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', '改写字符');
        @define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', '改写字符。将 {改} 和 {到} 放在要改写的地方。' . "\n" . '例如: <acronym title="{到}">{改}</acronym>');
        @define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', '改写字符');
        @define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', '改写字符可以用来分辨应该改写和不应该改写的字。如果改写字符是 * 那只输入 \'exten\' 并不会被改写，除非输入 \'exten*\'。');
?>
