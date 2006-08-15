<?php # $Id$
##########################################################################
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity    #
# Developer Team) All rights reserved.  See LICENSE file for licensing   #
# details							         #
#                                                                        #
# (c) 2003 Jannis Hermanns <J@hacked.it>                                 #
# http://www.jannis.to/programming/serendipity.html                      #
#                                                                        #
# Translated by                                                          #
# (c) 2006 Aphonex Li <aphonex.li@gmail.com>                             #
#               http://www.exten.cn                                      #
##########################################################################

    @define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', '修复常见的 XHTML 错误');
    @define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', '这个外挂会在文章内修复一些常见的 XHTML 错误，为了能让您的文章通过 XHTML 检查。');
		@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', '编码 XML 解析的資料？');
		@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', '这个外挂使用 XML 解析的方法来保证 XHTML 能通过验证。这个功能可能会转换正确的语法，所以这个外挂会在解析完毕后才进行编码。如果遇到编码错误，请不要使用这个功能。');
		@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', '清除 UTF-8 标签');
		@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', '如果开启，任何 UTF-8 字符里的 HTML 标签会正确的转换和输出。');
?>
