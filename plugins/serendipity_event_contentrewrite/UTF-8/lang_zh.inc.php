<?php

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', '从');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', '到');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', '内容重写');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', '使用新的字符串替换现有单词 (一般为缩略词。这有益于对缩略词、技术名词等作出解释)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', '新的缩略词');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', '添加新的缩略词 ({从})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', '缩略词 #%d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', '在此输入缩略词  ({从})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', '插件名称');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', '该插件的名称。可安装多个内容重写插件来处理不同的缩略词，每个内容重写插件应有不同的插件名称。');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', '新描述');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', '对新缩略词的描述 ({到})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', '描述 #%s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', '对缩略词的描述 ({到})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', '重写字符串');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', '用于重写的字符串。将{从}和{到}放在需要重写的任何地方。' . "\n" . '例如: <acronym title="{到}">{从}</acronym>');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', '重写字符');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', '如果有任何附加的单个字符用于重写，将它输入在此。如果你想将\'serendipity*\'用你输入的单词替换，同时又想把\'*\'这个字符去除掉的话，那就把该字符(此例中该字符为*号)输入此处。');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', '在你的设置中，用于进行替换的字符串是 %s 和 %s 。');
