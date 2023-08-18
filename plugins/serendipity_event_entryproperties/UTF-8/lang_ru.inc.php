<?php

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Расширенные свойства для записей');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(кэш, непубличные статьи, "липкие" посты)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Пометить эту запись как "липкую"');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Записи могут быть прочитаны');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Мною');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Соавторами');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Всеми');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Разрешить кэшировать записи?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Если включено, при каждом сохранении будет генерироваться кэшированная версия. Кэширование повысит производительность, но, возможно, снизит гибкость для других плагинов.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Создать кэшированные записи');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Выборка следующей партии записей...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Выборка записей от %d до %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Создание кэша для записи #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Запись кэширована.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Кэширование записи завершено.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Кэширование записей прервано.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (общее количество записей %d)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NL2BR', 'Отключить автоматический перенос слов');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Скрыть из обзора статьи / главной страницы');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Использовать групповые ограничения');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Если включено, Вы можете определить, какие пользователи из группы пользователей могут иметь возможность читать записи. Этот параметр оказывает большое влияние на производительность обзора Вашей статьи. Включайте это только в том случае, если Вы действительно собираетесь использовать эту функцию.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Использовать пользовательские ограничения');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Если включено, Вы можете определить, какие конкретные пользователи смогут читать записи. Этот параметр оказывает большое влияние на производительность обзора Вашей статьи. Включайте это только в том случае, если Вы действительно собираетесь использовать эту функцию.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Скрыть содержимое в RSS');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Если включено, содержимое этой записи не будет отображаться в RSS-лентах.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Настраиваемые поля');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Дополнительные пользовательские поля могут быть использованы в Вашей теме в тех местах, где Вы хотите, чтобы они отображались. Для этого отредактируйте файл шаблона entries.tpl и разместите теги Smarty, такие как {$entry.properties.ep_MyCustomField} в HTML, где Вам нравится. Обратите внимание на префикс ep_ для каждого поля.  ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Здесь Вы можете ввести список имён полей, разделённых запятыми, которые Вы можете использовать для ввода каждой записи - не используйте специальные символы или пробелы для этих имён полей. Пример: "Customfield1, Customfield2". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Список доступных пользовательских полей может быть изменён в <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">конфигурации плагина</a>.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC4', 'Вы можете ввести настройки по умолчанию для каждого поля, используя "Customfield1:Default value1, Customfield2:Default value2". Если Вам нужно использовать специальные символы ":" и "," в пределах значения по умолчанию, поставьте перед ними обратную косую черту \\, например "Customfield1:I want\\:Coookies\\, Muffins and Sausages,Customfield2:I am satisfied". Для лучшей читаемости Вы можете поместить новую строку перед каждым пользовательским полем, если хотите.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Отключить плагины разметки для этой записи:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS', 'Использовать расширенный поиск в базе данных');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS_DESC', 'Если включено, будут выдаваться дополнительные SQL-запросы, позволяющие использовать "липкие" записи, скрытые записи и удалённые записи с главной страницы. Если они не нужны, отключение этой функции может повысить производительность.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE', 'Экран редактирования записи');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE_DESC', 'Здесь Вы можете выбрать, какие элементы и в каком порядке плагин должен отображать свои поля ввода в процессе редактирования записи.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_MULTI_AUTHORS', 'Несколько авторов');