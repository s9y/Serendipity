<?php

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', '文章的高级选项');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(缓存，隐藏文章，置顶文章)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', '将此文章置顶');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', '此文章可被以下用户阅读');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', '自己');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', '合著者');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', '任何人');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', '允许将文章缓存');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', '如果启用该设置的话，在每次保存文章的时候都会生成一份该文章的缓存。缓存可以提高网站性能，但是可能影响到对其他一些插件的灵活使用。');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', '创建文章的缓存');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', '正在读取下一批文章……');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', '正在读取编号为 %d 到 %d 的文章');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', '正在为编号为 #%d 的文章（<em>%s</em>）建立缓存……');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', '该文章的缓存已创建。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', '对文章创建缓存的操作已完成。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', '对文章创建缓存的操作被取消。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (总共 %d 篇文章)……');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', '从文章目录以及头版文章中隐藏掉');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', '使用基于用户组的权限限制');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', '如果启用该设置的话，你可以设定哪些用户组的用户可以阅读相关文章。这个设置对文章显示的速度方面有明显影响，因此，建议仅在需要使用此设置的时候才启用该设置。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', '使用基于用户的权限限制');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', '如果启用该设置的话，你可以设定哪些用户可以阅读相关文章。这个设置对文章显示的速度方面有明显影响，因此，建议仅在需要使用此设置的时候才启用该设置。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', '从RSS种子中隐藏该文章内容');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', '如果启用该设置的话，则该文章内容将不会在RSS种子中显示。');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', '自定义的字段');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', '你可以在你的博客模版中使用额外附加的自定义字段，从而将相关字段内容显示在页面上。你需要编辑entries.tpl这个模版文件，将Smarty标记( 例如{$entry.properties.ep_MyCustomField} )放在该模版文件中你想放置的合适位置，不过需要主意的是，要在每一个自定义字段前面添加前缀(prefix) ep_ 。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', '此处你可以输入一些自定义字段的名称，用逗号分割开来。这些自定义字段可以在任何一篇文章中被使用。不要在自定义字段的名称中使用特殊字符或空格。自定义字段的名称可以是 Customfield1, Customfield2 等等。 ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', '可在“<a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">配置插件</a>”中修改自定义字段。');
		
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', '禁止在此文章中使用标记语言方面的插件。');		
