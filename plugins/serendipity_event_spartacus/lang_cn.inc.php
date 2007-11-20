<?php

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus插件下载、配置及协调系统');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Spartacus允许您从网上插件库中下载插件');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', '点击这里从Serendipity网上插件库中下载一个新的插件 %s');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', '无法打开网址 %s 。也许在SourceForge.net网站服务器上的Serendipity处于瘫痪状态。很抱歉，你需要稍后重新尝试。');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', '正在尝试打开网址 %s ……');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', '从上述网址下载了 %s 个字节(bytes)。存储为文件 %s ……');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', '从本地服务器 中获取了 %s 个字节(bytes)。存储为文件 %s ……');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', '成功获取相关数据');
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(插件库返回如下错误代码 %s 。)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<p>无法从SPARTACUS插件库中获取到数据。正在在 %s 上面检查插件库状态信息。</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<P>SPARTACUS插件库运行状态网站返回了一个错误代码 (HTTP代码 %s)。这意味着SPARTACUS插件库运行状态网站目前处于瘫痪状态。请稍后重新尝试。</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<p><a target="_blank" href="%s">点击此处访问SPARTACUS插件库运行状态网站</a>， 并确认该网站是否在正常运行中。</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<p>SPARTACUS尝试连接到Google，但是失败了(错误 %d: %s)。<br />你的服务器禁止外出连接(outgoing connections)。无法连接到SPARTACUS插件库，因此SPARTACUS无法正常工作以下载、更新插件。<b>请联系你的网站空间服务商，要求他们允许通过使用外出连接连接到其他网站。</b></p><p>你依然可以从本地目录安装插件。只要从<a href="http://spartacus.s9y.org">SPARTACUS网上插件库</a>下载相关插件，将它解压缩并上传到你的Serendipity的插件目录中</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<P>SPARTACUS可以连接到Google，但无法连接到SPARTACUS插件库。这可能是因为你的服务器禁止某些外出连接(outgoing connections)，或者SPARTACUS插件库运行状态网站目前处于瘫痪状态。请联系你的网站空间服务商，以确认此类外出连接是允许的。<b>你无法使用SPARTACUS来下载、更新插件，除非你的网站服务器能够连上SPARTACUS插件库。</b></p>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', '文件/镜像 地址 (XML元数据(metadata))');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', '文件/镜像 地址 (文件)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', '选择一个下载点。不要修改这个设置，除非你知道你正在做什么，或者你目前使用的下载点已经失效了。这个设置存在的主要目的是为了向前兼容。');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', '下载文件的拥有者');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', '在这里你可以输入通过Spartacus(使用FTP或Shell方式)下载的文件的拥有者(例如 "nobody")。如果此处留空的话，则不会更改下载文件的拥有者。');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', '下载后的文件的权限设置');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', '在这里你可以输入一个八进制的权限代码(例如0777)，用来为那些通过Spartacus(使用FTP或Shell方式)下载的文件设置相应的权限。如果此处留空的话，将使用服务器默认的权限。需要注意的是，并非所有服务器允许修改、设置相关权限。当你输入权限代码的时候，注意要让web服务器用户具有读写权限，否则的话，Serendipity和Spartacus都将无法覆盖或重写现有文件。');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', '下载后的文件目录的权限设置');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', '在这里你可以输入一个八进制的权限代码(例如0777)，用来为那些通过Spartacus(使用FTP或Shell方式)下载的文件目录设置相应的权限。如果此处留空的话，将使用服务器默认的权限。需要注意的是，并非所有服务器允许修改、设置相关权限。当你输入权限代码的时候，注意要让web服务器用户具有读写权限，否则的话，Serendipity和Spartacus都将无法覆盖或重写现有文件目录。');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', '检测新的侧栏插件');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', '检测新的事件插件');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', '提示：如果使用鼠标中间那个键点击升级链接的话，你就可以打开一个新的窗口(window)或标签页(tab)，并同时升级多个插件。需要说明的是，由于这将自动升级所有的插件，从而导致网络超时并生成垃圾文件，因此此功能并非Serendipity刻意提供的。');

@define('PLUGIN_EVENT_SPARTACUS_TRYCURL', '尝试使用cURL库再试一次……');
@define('PLUGIN_EVENT_SPARTACUS_CURLFAIL', '使用cURL库也同样得到失败信息。');
@define('PLUGIN_EVENT_SPARTACUS_HEALTFIREWALLED', '无法从Spartacus插件库下载所需文件，但是该插件库的运行状态显示该插件库运行正常。这意味着你的网站空间服务商使用了基于访问内容的防火墙，通过mod_security或其他反向代理(reverse proxy)来禁止从网络上下载或获取PHP代码。你需要请你的空间服务商关闭它；否则的话，你无法使用Spartacus插件，从而不得不手动下载相关文件。');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_PLUGINS', '使用Spartacus来下载插件？');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_THEMES', '使用Spartacus来下载主题？');