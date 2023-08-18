<?php

@define('PLUGIN_REMOTERSS_TITLE', 'Удалённая RSS/OPML-Blogroll лента');
@define('PLUGIN_REMOTERSS_BLAHBLAH', 'Показать элементы удалённой RSS/OPML-ленты (например, Blogroll)');
@define('PLUGIN_REMOTERSS_NUMBER', 'Количество записей');
@define('PLUGIN_REMOTERSS_NUMBER_BLAHBLAH', 'Сколько записей должно отображаться? (По умолчанию: каждая запись в ленте)');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE', 'Заголовок ленты');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH', 'Заголовок ленты на боковой панели блога');
@define('PLUGIN_REMOTERSS_RSSURI', 'RSS/OPML URI');
@define('PLUGIN_REMOTERSS_RSSURI_BLAHBLAH', 'URI ленты RSS/OPML, которую Вы хотите отобразить');
@define('PLUGIN_REMOTERSS_NOURI', 'Лента RSS/OPML не выбрана');
@define('PLUGIN_REMOTERSS_RSSTARGET', 'Цель ссылки RSS/OPML');
@define('PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH', 'Цель ссылки на один из отображаемых элементов RSS (по умолчанию: _blank)');
@define('PLUGIN_REMOTERSS_CACHETIME', 'Когда обновлять ленту?');
@define('PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH', 'Содержимое ленты хранится в кэше, который будет обновлен, как только его возраст превысит N секунд (по умолчанию: 3 часа).');
@define('PLUGIN_REMOTERSS_FEEDTYPE', 'Тип ленты');
@define('PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH', 'Выберите формат удалённой ленты');
@define('PLUGIN_REMOTERSS_BULLETIMG', 'Маркированное изображение');
@define('PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH', 'Изображение для отображения перед каждым заголовком.');
@define('PLUGIN_REMOTERSS_DISPLAYDATE', 'Показать дату');
@define('PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH', 'Отображать дату под заголовком?');

@define('PLUGIN_REMOTERSS_RSSLINK', 'Использовать RSS-ссылку?');
@define('PLUGIN_REMOTERSS_RSSLINK_DESC', 'Должна ли быть установлена ссылка на ссылку, указанную в RSS-ленте?');
@define('PLUGIN_REMOTERSS_RSSFIELD', 'Элемент отображения RSS');
@define('PLUGIN_REMOTERSS_RSSFIELD_DESC', 'Какой элемент RSS-ленты должен отображаться? (т.е.: "заголовок" (title), "содержимое: закодировано" (content:encoded), "описание" (description), ...)');
@define('PLUGIN_REMOTERSS_RSSESCAPE', 'Экранировать вывод HTML');
@define('PLUGIN_REMOTERSS_RSSESCAPE_DESC', 'Если включено, HTML в RSS-лентах будет экранирован, и атаки XSS станут невозможными. Если эта опция отключена, HTML в лентах может быть интерпретирован. Это возможная проблема безопасности, если встроенная лента не принадлежит Вам!');

@define('PLUGIN_REMOTERSS_TEMPLATE', 'Шаблон вывода, который будет использоваться для этой ленты');
@define('PLUGIN_REMOTERSS_TEMPLATE_DESC', 'Здесь Вы можете выбрать файл шаблона внутри папки плагина, который используется для отображения выходных данных ленты на боковой панели. Вы можете добавить пользовательские файлы шаблонов в папку плагинов. Если файл шаблона с таким же именем помещён в Вашу собственную папку тем, он будет использоваться вместо файла, поставляемого вместе с плагином. Выбор здесь любого шаблона, отличного от шаблона по умолчанию, автоматически включает создание шаблонов Smarty.');
