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

    @define('PLUGIN_EVENT_SPARTACUS_NAME', '外挂下载');
    @define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - 允许您从 s9y.org 的线上服务器下载外挂');
    @define('PLUGIN_EVENT_SPARTACUS_FETCH', '点这里从 s9y.org 的外挂服务器安装 %s');
    @define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', '服务器 %s 无法打开。也许 s9y 或 SourceForge.net 的服务器有问题 - 请稍后再试！');
    @define('PLUGIN_EVENT_SPARTACUS_FETCHING', '正在打开 %s...');
    @define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', '从上面的服务器 %s 个外挂。储存成文件 %s...');
    @define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', '从服务器内接收 %s 个外挂。储存成文件 %s...');
    @define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', '成功保存');
    @define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', '文件/镜像 地址 (XML metadata)');
		@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', '文件/镜像 地址 (文件)');
		@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', '选择一个下载点。不要改变这个默认值除非您了解它的作用。这个选项主要是为了兼容所以设计。');
		@define('PLUGIN_EVENT_SPARTACUS_CHOWN', '文件作者');
		@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', '这里可输入 Spartacus 所下载的文件 (FTP/Shell) 作者 (例如 "aphonex")。如果空白不会作任何改变。');
		@define('PLUGIN_EVENT_SPARTACUS_CHMOD', '下载文件的权限');
		@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', '这里可输入 Spartacus 所下载的文件 (FTP/Shell) 权限 (例如 "0777")。如果空白不会作任何改变。记得不是每个主机都允许改变权限的。记得将权限改为可读写，不然 Spartacus/Serendipity 会无法覆盖文件和改变设定。');
		@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', '文件目录权限');
		@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', '这里可输入 Spartacus 所下载的文件 (FTP/Shell) 权限 (例如 "0777")。如果空白不会作任何改变。记得不是每个主机都允许改变权限的。记得将权限改为可读写， 不然 Spartacus/Serendipity 会无法覆盖文件和改变设定。');
?>
