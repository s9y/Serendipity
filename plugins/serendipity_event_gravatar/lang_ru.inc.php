<?php

@define('PLUGIN_EVENT_GRAVATAR_NAME',               'Плагин аватаров');
@define('PLUGIN_EVENT_GRAVATAR_DESC',               'Показ аватаров внутри комментариев. Поддерживаются Gravatar, Pavatar, Favatar, Twitter, Identica и MyBlogLog.');

@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY',         'Создать тег Smarty');
@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY_DESC',    'Если эта опция включена, изображения аватара не записываются непосредственно в вывод комментария, но создаётся тег smarty {$comment.avatar}. Только шаблоны, поддерживающие этот тег Smarty, будут отображать аватар, если для этой опции установлено значение "Да". Лучший способ - попробовать это, если Ваш шаблон поддерживает этот тег Smarty.');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR',      'Изображение аватара по умолчанию');
@define('PLUGIN_EVENT_GRAVATAR_SIZE',               'Размер изображения');
@define('PLUGIN_EVENT_GRAVATAR_RATING',             'Возрастной рейтинг Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_RATING_NO',          'Без рейтинга');
@define('PLUGIN_EVENT_GRAVATAR_RATING_G',           'Общий (G)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_R',           'Ограниченный (R)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_PG',          'Родительское руководство (PG)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_X',           'Явный (X)');

@define('PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT',     'Аватар по умолчанию');
@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR_DESC', 'Каков URL-адрес Вашего изображения аватара по умолчанию? Пожалуйста, введите здесь абсолютный или относительный URL-адрес, основанный на URL-адресе Вашего сервера. Внимание! Чтобы отображался аватар по умолчанию, один из методов должен быть настроен в "' . PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT . '".');
@define('PLUGIN_EVENT_GRAVATAR_SIZE_DESC',          'Максимальный размер изображения аватара (в пикселях)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_DESC',        'Рейтинг изображения');

@define('PLUGIN_EVENT_GRAVATAR_CACHING',            'Время кэширования');
@define('PLUGIN_EVENT_GRAVATAR_CACHING_DESC',       'Если Вы хотите кэшировать аватары (рекомендуется!), введите количество часов, в течение которых изображения будут загружаться с Вашего собственного хостинга, вместо обращения к внешнему сервису. Имейте в виду, что это вызовет трафик на Вашем хостинге. Преимущество кэширования заключается в том, что оно позволяет уменьшить трафик для внешней службы и быть немного более независимым от этой центральной службы. "0" отключает кэширование.');

@define('PLUGIN_EVENT_GRAVATAR_ALIGN',              'Выравнивание');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_DESC',         'Этот параметр настраивает выравнивание аватара, если опция "тег Smarty" не используется. Для тегов Smarty Вы должны выполнить выравнивание, используя CSS-класс аватара.');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_LEFT',         'по левому краю');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_RIGHT',        'по правому краю');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_NONE',         'без выравнивания');

@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES',     'Использовать на боковой панели');
@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES_DESC','Следует ли также отображать изображения аватаров на боковой панели "Последние комментарии"?');

@define('PLUGIN_EVENT_GRAVATAR_INFOLINE',           'Показать информацию о типе аватара');
@define('PLUGIN_EVENT_GRAVATAR_INFOLINE_DESC',      'Если включено, под полем для комментариев отображается информация о том, какие типы аватаров поддерживаются на данный момент.');

@define('PLUGIN_EVENT_GRAVATAR_METHOD',             'Загрузить аватар через');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_DESC',        'Если предыдущий способ не удался, попробуйте этот. Типы "' . PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT . '", "Monster ID", "Wavatar", "Identicon" и "---" никогда не вызовут сбой. Всё, что описано ниже этих методов, не будет опробовано!');
@define('PLUGIN_EVENT_GRAVATAR_SUPPORTED',          'Поддерживаются изображения автора %s.');

@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT',          'Имя автора в атрибуте ALT');
@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT_DESC',     'Обычно имя автора отображается в атрибуте TITLE изображения аватара, атрибут ALT заполняется символом *. Это предотвращает разрушение макета, когда браузер не может загрузить изображение. Но атрибут ALT используется для поддержки чтения слепыми людьми, поэтому, если Вы хотите добавить такую поддержку, включите эту опцию.');

@define('PLUGIN_EVENT_GRAVATAR_LONG_DESCRIPTION',   '<b><a href="http://www.gravatar.com" target="_blank">Gravatar</a></b> являются централизованными изображениями аватаров, отправляемыми по электронной почте, ' .
        '<b><a href="http://www.peej.co.uk/projects/favatars.html" target="_blank">Favatar</a></b> являются иконками сайта (favicon) писателя, ' .
        '<b><a href="http://www.pavatar.com" target="_blank">Pavatar</a></b> являются изображениями на сайте автора, ' .
        '<b><a href="http://twitter.com" target="_blank">Twitter</a></b> загружает изображения профиля в Twitter, ' .
        '<b><a href="http://identi.ca" target="_blank">Identica</a></b> загружает изображения профиля identi.ca, ' .
        '<b><a href="http://www.mybloglog.com" target="_blank">Аватары MyBlogLog</a></b> снова являются централизованными изображениями аватаров и ' .
        '<b><a href="http://www.splitbrain.org/go/monsterid" target="_blank">Monster ID</a></b>, <b><a href="http://scott.sherrillmix.com/blog/blogger/wp_identicon/" target="_blank">Identicon</a></b> и <b><a href="http://www.shamusyoung.com/twentysidedtale/?p=1462" target="_blank">Wavatar</a></b> являются локально созданными изображениями монстров, уникальными для каждого автора.');
@define('PLUGIN_EVENT_GRAVATAR_EXTLING_WARNING',    '<font color="red">ОСТОРОЖНО!</font> Этот плагин должен быть запущен перед любым плагином, изменяющим ссылки (например, плагин отслеживания выхода)! ' .
        '<font color="red">В противном случае аватары Pavatar, Favatar и MayBlogLog не будут работать!</font>');

@define('PLUGIN_EVENT_GRAVATAR_FALLBACK',           'Запасной вариант Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_DESC',      'Gravatar реализует некоторые запасные методы на случай, если пользователю не известен Gravatar. Он также реализует Moster ID, Identificate и Avatar. Если Вы выберете один из них, никакой другой метод после Gravatar не будет обработан, если пользователь ввёл адрес электронной почты.');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS',   'Всегда использовать запасной вариант Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS_DESC', 'Использовать запасные варианты Gravatar, даже если пользователь не вводил адрес электронной почты (но ввёл URL-адрес или имя).');

