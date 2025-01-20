<?php

//
//  serendipity_event_multilingual.php
//
@define('PLUGIN_EVENT_MULTILINGUAL_TITLE', 'Многоязычные записи');
@define('PLUGIN_EVENT_MULTILINGUAL_DESC', 'Позволяет создавать записи на нескольких языках');
@define('PLUGIN_EVENT_MULTILINGUAL_NEEDTOSAVE', 'Вашу запись необходимо сохранить, прежде чем Вы сможете ввести дополнительные языковые версии. Вы также можете сохранить запись как черновик.');
@define('PLUGIN_EVENT_MULTILINGUAL_CURRENT', 'Выберите языковую версию для редактирования: ');
@define('PLUGIN_EVENT_MULTILINGUAL_SWITCH', 'Выберите язык');
@define('PLUGIN_EVENT_MULTILINGUAL_COPY', 'Сохранить содержимое предыдущего языка');
@define('PLUGIN_EVENT_MULTILINGUAL_COPYDESC', 'Сохранить содержимое предыдущего языка нетронутым в поле ввода при работе с новой языковой версией');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGTITLE', 'Перевод названия блога');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGTITLE_DESC', 'Либо использовать теги {{!<lang>}}<text>{{--}} для заголовка блога, либо использовать переведённые заголовки записи в режиме без тегов.');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES', 'Перевод тегов записей и заголовков записей');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES_DESC', 'Включить {{!<lang>}}<text>{{--}} теги для записей');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR', 'Перевод тегов элементов боковой панели');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR_DESC', 'Включить {{!<lang>}}<text>{{--}} теги для элементов боковой панели');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE', 'Где разместить ссылки для записей?');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDFOOTER', 'Нижний колонтитул записи');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDSPECIAL', '"multilingual_footer" для пользовательского вывода Smarty');

@define('PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH', 'Принудительно выполнить полное переключение языка?');
@define('PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH_DESC', 'Выбор перевода для записи также приведёт к переключению всего языка блога');

@define('PLUGIN_EVENT_MULTILINGUAL_HIDEENTRIES', 'Скрыть непереведённые статьи на главной странице?');
@define('PLUGIN_EVENT_MULTILINGUAL_HIDEENTRIES_DESC', 'Показать статьи на языке по умолчанию, если перевода на выбранный язык не существует'); 

@define('PLUGIN_EVENT_MULTILINGUAL_ENTRY_RELOADED', 'Язык многоязычной записи &lt;%s&gt; перезагружен');

//
//  serendipity_plugin_multilingual.php
//
@define('PLUGIN_SIDEBAR_MULTILINGUAL_TITLE', 'Выберите язык');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_DESC', 'Позволяет посетителям изменять язык внешнего интерфейса');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_USERDESC', 'Вы можете выбрать другой язык для отображаемого интерфейса этого блога: ');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT', 'Отправить');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT_DESC', 'Показать кнопку отправки?');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SIZE', 'Размер шрифта');

