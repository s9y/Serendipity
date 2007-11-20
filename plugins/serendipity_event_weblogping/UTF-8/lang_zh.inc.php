<?php

@define('PLUGIN_EVENT_WEBLOGPING_PING', ' (通过发送XML-RPC请求)将新文章通知到：');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', '发送XML-RPC请求到服务器 %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', '文章通知');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', '将新文章的发布消息通知到其他到网上服务');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(取代 %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', '自定义的请求服务');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', '可在此处定义多个其他请求服务(ping services)，不同请求服务之间使用逗号分割开来。应按照如下格式输入相关内容：服务器域名/路径 (host.domain/path)。如果在服务器域名前面有一个星号(*)的话，那么扩展的XML-RPC选项也将会被发送到该服务器（仅在该服务器支持此功能的情况下才有效');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', '失败 (原因：%s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', '成功完成。');
