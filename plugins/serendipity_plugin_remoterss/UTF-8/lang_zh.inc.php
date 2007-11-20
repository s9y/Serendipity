<?php

@define('PLUGIN_REMOTERSS_TITLE', '远端RSS/OPML-Blogroll种子');
@define('PLUGIN_REMOTERSS_BLAHBLAH', '显示远端RSS/OPML种子(例如 Blogroll)中的内容');
@define('PLUGIN_REMOTERSS_NUMBER', '文章数量');
@define('PLUGIN_REMOTERSS_NUMBER_BLAHBLAH', '显示多少篇文章(默认：该种子中的全部文章)');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE', '种子标题');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH', '在博客的侧栏所显示的该种子的标题');
@define('PLUGIN_REMOTERSS_RSSURI', 'RSS/OPML网址');
@define('PLUGIN_REMOTERSS_RSSURI_BLAHBLAH', '你想要显示的RSS/OPML种子的网址');
@define('PLUGIN_REMOTERSS_NOURI', '没有选择RSS/OPML种子');
@define('PLUGIN_REMOTERSS_RSSTARGET', 'RSS/OPML链接目标');
@define('PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH', '链接（链接到RSS种子中的项目）的目标属性 (默认是新窗口：_blank)');
@define('PLUGIN_REMOTERSS_CACHETIME', '何时更新RSS种子');
@define('PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH', '保存在缓存中的RSS种子的内容多长时间更新一次？ (按秒计算，默认是3个小时更新一次)');
@define('PLUGIN_REMOTERSS_FEEDTYPE', '种子类型');
@define('PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH', '选择远端种子的格式');
@define('PLUGIN_REMOTERSS_BULLETIMG', '小图标');
@define('PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH', '在每个标题前面显示的小图标');
@define('PLUGIN_REMOTERSS_DISPLAYDATE', '是否显示日期');
@define('PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH', '是否在标题下面显示日期');

@define('PLUGIN_REMOTERSS_RSSLINK', '使用RSS链接？');
@define('PLUGIN_REMOTERSS_RSSLINK_DESC', '是否使用RSS种子中的链接？');
@define('PLUGIN_REMOTERSS_RSSFIELD', 'RSS显示内容');
@define('PLUGIN_REMOTERSS_RSSFIELD_DESC', 'RSS种子中的哪些标记所标记的内容将被显示？(例如: "title", "content:encoded", "description", ……)');
@define('PLUGIN_REMOTERSS_RSSESCAPE', '将HTML输出转义(Escape)');
@define('PLUGIN_REMOTERSS_RSSESCAPE_DESC', '如果启用该设置的话，RSS种子中的HTML内容将被转义(escaped)，因此XSS(Cross-site scripting, 跨站脚本)是不可能存在的。如果关闭这个设置的话，RSS种子中的HTML内容将被原样输出。如果所使用的RSS种子不是你所拥有的话，那么关闭这个设置会产生安全隐患。');
