<?php

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', '修复常见的XHTML错误');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', '该插件会修复文章中一些常见的XHTML错误，这可以使你的文章与XHTML协议兼容。');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', '对XML数据进行编码操作？');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', '该插件使用一种XML解析手段来确保你的代码能通过XHTML验证。在进行XML解析时，会将现有的符合XHTML协议的文章转换成原始(unescaped)文章，随后在完成XML解析后对所有文章进行编码操作。如果在使用中发现有重复进行编码操作的现象，需将此设置关闭。');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', '清理UTF-8格式的标签');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', '如果启用该设置的话，那些从UTF-8字符串中演绎出来的HTML标签将能被正确地转换，而不会被重复进行编码。');
