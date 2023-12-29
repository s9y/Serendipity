<?php
// General
@define('ERROR_404', 'Ошибка 404 - запрошенная Вами страница не найдена.');
@define('SEARCH_WHAT','Что Вы ищете?'); //used on quicksearch modal
@define('SEARCH','Искать');
@define('TOGGLE_NAV','Переключение навигации'); //only seen by screen readers
@define('CLOSE','Закрыть'); //close button on search form
@define('READ_MORE','Подробнее');

//Option groups and instructions
@define('THEME_SOCIAL_LINKS', 'Ссылки на соц. сети');
@define('THEME_PAGE_OPTIONS', 'Параметры страницы');
@define('THEME_NAVIGATION', 'Параметры навигации');
@define('THEME_README','Прочти меня');
@define('THEME_IDENTITY','Идентификация сайта');
@define('THEME_EP_YES','<p class="msg_success">Плагин "Расширенные свойства для записей" (Extended Property for Entries) (serendipity_event_entryproperties) необходим для этой темы, плагин установлен.</p>');
@define('THEME_EP_NO','<p class="msg_error">Плагин "Расширенные свойства для записей" (Extended Property for Entries) (serendipity_event_entryproperties) необходим для этой темы, но он не установлен или неактивен.  Пожалуйста, установите плагин, чтобы полностью использовать эту тему.</p>');
@define('THEME_INSTRUCTIONS','<p>Эта тема отображает записи в блоге на линейной временной шкале.  Каждая группа названий месяцев также может быть отображена или скрыта на временной шкале.</p><p>В этой теме используется правая и нижняя боковые панели.  Либо одну, либо обе боковые панели можно отключить, удалив плагины боковой панели или переместив плагины боковой панели в столбец боковой панели с надписью "Скрытый" в конфигурации плагинов.</p><p>Эта тема может быть настроена для отображения категорий и тегов ввода из соответствующих плагинов боковой панели на странице архива.  Смотрите "' . THEME_PAGE_OPTIONS . '" ниже.</p><p>Если Вы используете плагин для аватаров (serendipity_event_gravatar), настройте параметр "Создавать тег smarty = Да" (Produce smarty tag = yes) для наилучшего отображения аватаров с комментариями.</p><p>Настройте параметр serendipity_event_freetag "Расширенный Smarty = Да" (Extended Smarty = yes) для более удобного отображения тегов в нижнем колонтитуле записи.</p>');
@define('THEME_CUSTOM_FIELD_HEADING', 'Настраиваемые поля ввода');
@define('THEME_CUSTOM_FIELD_DEFINITION','Эти необязательные поля доступны только при использовании данной темы (временной шкалы).  Для использования этих полей также должен быть установлен плагин для событий serendipity_event_entryproperties ("Расширенные свойства для записей").  Изображение записи появится как на временной шкале, так и в верхней части каждой подробной записи.');
@define('THEME_ENTRY_IMAGE','Изображение записи.');
@define('THEME_DEMO_AVAILABLE', 'С полным объяснением на английском языке <a href="http://www.optional-necessity.com/demo/timeline/archives/13-Using-the-Timeline-theme.html">настройки и использования временной шкалы</a> можно ознакомиться на <a href="http://www.optional-necessity.com/demo/timeline/">Демонстрация темы временной шкалы</a>.');


//Page Options
@define('USE_GOOGLEFONTS', 'Использовать веб-шрифты Google?');
@define('THEME_COLORSET', 'Набор цветов');
@define('THEME_SKINSET', 'Скины темы');
@define('HEADER_IMG','Необязательное изображение заголовка. Оставьте поле пустым, чтобы использовать название блога.');
@define('HEADER_IMG_DESC', 'Рекомендуемый размер изображения заголовка: 150 пикселей x 40 пикселей.');
@define('SUBHEADER_IMG','Необязательное изображение подзаголовка.');
@define('SUBHEADER_IMG_DESC', 'Это фоновое изображение во всю ширину отображается под логотипом заголовка и навигацией по сайту.');
@define('ENTRY_DATE_FORMAT','Формат даты записей');
@define('COMMENT_TIME_FORMAT','Формат времени комментариев и обратных ссылок');
@define('WORDS','Слова');
@define('TIMESTAMP','Отметка времени');
@define('DISPLAY_AS_TIMELINE','Использовать формат временной шкалы');
@define('DISPLAY_AS_TIMELINE_DESC','Использовать формат временной шкалы для записей в блоге.  Если значение равно "Нет", записи в блоге будут отображаться в более типичном формате блога.');
@define('MONTHS_ON_TIMELINE','Показывать названия месяцев на временной шкале');
@define('MONTHS_ON_TIMELINE_DESC','Название месяца будет отображаться в виде заголовка на временной шкале для каждого месяца записей.');
@define('MONTHS_ON_TIMELINE_FORMAT','Формат месяца временной шкалы');
@define('CATEGORIES_ON_ARCHIVE', 'Показывать категории на странице архива');
@define('CATEGORIES_ON_ARCHIVE_DESC', 'Должен быть установлен плагин категорий боковой панели (serendipity_plugin_categories) и включена опция "Включить Smarty-шаблоны?" для просмотра категорий на странице архива.');//Used in theme readme and archive page
@define('CATEGORY_RSS_ON_ARCHIVE','Показывать значок RSS рядом с каждой категорией на странице архива');
@define('TAGS_ON_ARCHIVE', 'Показывать теги на странице архива');
@define('TAGS_ON_ARCHIVE_DESC', 'Для просмотра тегов на странице архива должен быть установлен плагин serendipity_plugin_freetag, а для параметра "Шаблон боковой панели" должно быть установлено значение "archive_freetag.tpl".'); //Used in theme readme and archive page

//Navigation
@define('USE_CORENAV', 'Использовать глобальную навигацию?');

//Social media
@define('SOCIAL_ICONS_AMOUNT', 'Введите количество ссылок на социальные сети');
@define('SOCIAL_NETWORK_SERVICE', 'Выберите сервис социальных сетей для ссылки');
@define('SOCIAL_ICON_URL', 'URL-адрес для ссылки на сервис социальных сетей');
@define('COPYRIGHT', 'Авторское право');

//time ago in words function
@define('ELAPSED_LESS_THAN_MINUTE_AGO','Меньше минуты назад');
@define('ELAPSED_ONE_MINUTE_AGO','Минуту назад');
@define('ELAPSED_ONE_DAY_AGO','1 день назад');
@define('ELAPSED_MINUTES_AGO','%s мин. назад');
@define('ELAPSED_HOURS_AGO','%s час. назад');
@define('ELAPSED_DAYS_AGO','%s дн. назад');
@define('ELAPSED_MONTHS_AGO','%s мес. назад');
@define('ELAPSED_YEARS_AGO','%s года назад'); //not currently using this, but defining just in case
@define('ELAPSED_ABOUT_ONE_HOUR_AGO','Около часа назад'); // greater than 45 minutes, less than 90 minutes
@define('ELAPSED_ABOUT_ONE_MONTH_AGO','Около месяца назад'); // greater than 30 days, less than 60 days
@define('ELAPSED_ABOUT_ONE_YEAR_AGO','Около года назад'); // greater than one year, less than 2 years
@define('ELAPSED_OVER_YEARS_AGO','Более %s лет назад');// greater than 2 years

//Static Pages
@define('STATIC_SHOW_AUTHOR_TEXT','Показать имя автора?');
@define('STATIC_SHOW_DATE_TEXT','Показать дату последнего изменения?');
@define('STATIC_SHOW_SIDEBARS_TEXT','Показать боковую панель?');
