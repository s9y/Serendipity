<?php
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

        @define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', '文章的高级属性');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(快取资料, 不开放文章, 置顶文章)');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', '标记为置顶文章');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', '谁可以阅读文章');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', '自己');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBER', '副作者');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', '访客');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', '允许快取文章');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', '如果开启，每次保存文章时都会建立快取资料。快取资料可增加速度，但可能有些外挂不兼容。');
        @define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', '建立快取文章');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', '选取其它文章...');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', '选取文章 %d 到 %d');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', '建立此文章的快取资料 #%d, <em>%s</em>...');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', '取得快取资料');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', '快取完成');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', '快取资料取消');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (总共 %d 篇文章)...');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_NL2BR', '开关 nl2br');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', '隐藏于文章里面 / 主页面');
        @define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', '使用群组限制');
		@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', '如果开启，您可以选择那个群组的成员可以浏览文章。这个功能影响系统速度，除非必要最好不要使用。');
		@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', '使用会员限制');
		@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', '如果开启，您可以选择那个成员可以浏览文章。这个功能影响系统速度，除非必要最好不要使用。');
		@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'RSS 内隐藏内容');
		@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', '如果开启，文章的内容不会显示于 RSS 内。');

		@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', '自定菜单');
		define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', '您可以在主题里显示额外的菜单。您必须编辑 entries.tpl 的主题然后将 Smarty 标签 {$entry.properties.ep_MyCustomField} 放入您要它显示的 HTML 里面。 注意菜单的前面添加 ep_');
		define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', '这里可以输入每个以逗号分开的菜单名称 - 不要使用特殊符号。例如："Customfield1, Customfield2". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
		@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', '每个自定菜单可以在这里改变 <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">外挂设定</a>。');

?>
