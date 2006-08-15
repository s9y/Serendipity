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

        @define('PLUGIN_EVENT_MAILER_NAME', '发送文章');
        @define('PLUGIN_EVENT_MAILER_DESC', '可让你发送新发布的文章到邮箱中');
        @define('PLUGIN_EVENT_MAILER_RECIPIENT', '收件人');
        @define('PLUGIN_EVENT_MAILER_RECIPIENTDESC', '收件人的邮箱');
        @define('PLUGIN_EVENT_MAILER_LINK', '包括文章连接');
        @define('PLUGIN_EVENT_MAILER_LINKDESC', '邮件内容包括文章连接地址');
        @define('PLUGIN_EVENT_MAILER_STRIPTAGS', '移除 HTML');
        @define('PLUGIN_EVENT_MAILER_STRIPTAGSDESC', '移除邮件内的 HTML');
        @define('PLUGIN_EVENT_MAILER_CONVERTP', '转换 HTML 段落成新行');
	@define('PLUGIN_EVENT_MAILER_CONVERTPDESC', '加入新行于 HTML 的段落。如果开启 移除 HTML 的功能，这会检查每个未行的段落，然后自动分行。');
?>
