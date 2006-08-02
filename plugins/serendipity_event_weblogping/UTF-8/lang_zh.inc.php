<?php # $Id: $
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

    @define('PLUGIN_EVENT_WEBLOGPING_PING', '新文章通知 (via XML-RPC ping) 到：');
    @define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', '传送 XML-RPC ping 到 %s');
    @define('PLUGIN_EVENT_WEBLOGPING_TITLE', '新文章通知');
    @define('PLUGIN_EVENT_WEBLOGPING_DESC', '传送新文章的通知到线上服务');
    @define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(取代 %s)');
    @define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', '自订的通知功能');
    @define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', '如果有自订的通知功能可以在这里输入，用逗号 (,) 来分开每个地址。例如："host.domain/path"。如果主机名前面有星号 (*)，额外的 XML-RPC 资料会传送给主机 (如果主机支持)。');
		@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', '失败 (原因：%s)');
		@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', '成功');
?>
