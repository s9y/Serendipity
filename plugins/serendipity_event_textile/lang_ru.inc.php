<?php

@define('PLUGIN_EVENT_TEXTILE_NAME', 'Разметка: Textile');
@define('PLUGIN_EVENT_TEXTILE_DESC', 'Проанализировать все выходные данные с помощью конвертера Textile');
@define('PLUGIN_EVENT_TEXTILE_TRANSFORM', 'Разрешён формат <a href="%s">Textile</a>');
@define('PLUGIN_EVENT_TEXTILE_VERSION', 'Версия Textile');
@define('PLUGIN_EVENT_TEXTILE_VERSION_DESCRIPTION', 'Какую версию Textile Вы хотите использовать?');
@define('PLUGIN_EVENT_TEXTILE_UNESCAPE', 'Преобразовать HTML-кавычки в реальные?');
@define('PLUGIN_EVENT_TEXTILE_UNESCAPE_DESC', 'Если включено, HTML-кавычки (&quot;) будут преобразованы в реальные кавычки. Полезно включить только в том случае, если Вы хотите использовать разметку Textile в своих комментариях.');

@define('PLUGIN_EVENT_TEXTILE_EXAMPLE_NOTE', 'Пожалуйста, обратите внимание: Вы получите наилучшие результаты преобразования, если разместите этот плагин в списке плагинов в качестве первого среди всех Ваших плагинов для разметки, но <u>под</u> плагином смайликов "serendipity_event_emoticate" и плагином Smarty Parsing "serendipity_event_smartymarkup"! В частности, последний, необязательно установленный плагин, может выдавать ошибки, если его нет.');
@define('PLUGIN_EVENT_TEXTILE_DOCTYPE', 'Textile: Преобразовать в HTML5 (только для lib3 - нужна тема HTML5, например 2k11)');
@define('PLUGIN_EVENT_TEXTILE_DOCTYPE_DESC', 'В настоящее время PHP-Textile может настраивать вывод либо на XHTML, либо на HTML5, причём XHTML используется по умолчанию для обеспечения обратной совместимости. В режиме HTML5, помимо закрытия одного тега, Вы получите abbr вместо acronym, и если Вы используете маркеры выравнивания на своих изображениях, у Вас будут дополнительные классы, размещённые на них вместо атрибута align в XHTML.');
// todo: future 
#@define('PLUGIN_EVENT_TEXTILE_RESTRICTCOMMENTS', 'Textile: Restrict user comments (lib3 only)');
#@define('PLUGIN_EVENT_TEXTILE_RESTRICTCOMMENTS_DESC', 'This method does not allow enhanced formatting options such as inline style, and removes any raw HTML to user-supplied input.');

