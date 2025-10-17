<?php
// General
@define('ERROR_404', 'Ошибка 404 - запрошенная Вами страница не найдена.');
@define('SEARCH_WHAT','Что Вы ищете?'); //used on quicksearch modal
@define('SEARCH','Искать');
@define('TOGGLE_NAV','Переключение навигации'); //only seen by screen readers
@define('CLOSE','Закрыть'); //close button on search form
@define('READ_MORE','Подробнее');

//Option groups and instructions
@define('THEME_HEADERS', 'Изображения заголовка'); 
@define('THEME_SOCIAL_LINKS', 'Ссылки на соц. сети');
@define('THEME_PAGE_OPTIONS', 'Параметры страницы');
@define('THEME_NAVIGATION', 'Параметры навигации');
@define('THEME_README','Прочти меня');
@define('THEME_EP_YES','<p>Плагин "Расширенные свойства для записей" (Extended Property for Entries) (serendipity_event_entryproperties) необходим для этой темы, плагин установлен.</p>');
@define('THEME_EP_NO','<p class="serendipity_msg_important">Плагин "Расширенные свойства для записей" (Extended Property for Entries) (serendipity_event_entryproperties) необходим для этой темы, но он не установлен или неактивен.  Пожалуйста, установите плагин, чтобы полностью использовать эту тему.</p>');
@define('THEME_INSTRUCTIONS','<p>В этой теме используются широкие изображения заголовков для различных типов страниц.  Изображения по умолчанию включены в тему.  Изображения по умолчанию имеют ширину 1900 пикселей.  Эти изображения по умолчанию можно изменить в приведённых ниже настройках конфигурации.  В дополнение к изображениям по умолчанию, каждая запись и статическая страница могут определять своё собственное уникальное изображение заголовка.</p>  <p>Эта тема была разработана для использования дополнительного подзаголовка, или подписи автора, непосредственно под заголовком записи.  Подзаголовок записи и изображение записи доступны в разделе "Расширенные параметры" при создании или редактировании записи.  В качестве альтернативы, тема может быть настроена таким образом, чтобы отображать первые 70 символов записи в качестве подзаголовка, если для записи не определён подзаголовок.</p>  <p>В этой теме не используются боковые панели.  Однако эту тему можно настроить для отображения категорий и тегов ввода с помощью соответствующих плагинов боковой панели на странице архива.  Смотрите "' . THEME_PAGE_OPTIONS . '" ниже.</p>  <p>Если Вы используете плагин для аватаров (serendipity_event_gravatar), настройте параметр "Создавать тег smarty = Да" (Produce smarty tag = yes) для наилучшего отображения аватаров с комментариями.</p>  <p>Настройте параметр serendipity_event_freetag "Расширенный Smarty = Да" (Extended Smarty = yes) для более удобного отображения тегов в нижнем колонтитуле записи.</p>');
@define('THEME_ENTRY_PROPERTIES_HEADING','Свойства записей темы Clean Blog');
@define('THEME_CUSTOM_FIELD_HEADING', 'Настраиваемые поля ввода');
@define('THEME_CUSTOM_FIELD_DEFINITION','Эти необязательные поля доступны только при использовании этой темы (Clean Blog).  Для использования этих полей также должен быть установлен плагин для событий serendipity_event_entryproperties ("Расширенные свойства для записей").  Поле "Подзаголовок записи" отображается под заголовком записи и представляет собой краткое содержание публикации.  Поле "Изображение заголовка записи" переопределит изображение заголовка записи по умолчанию для этой конкретной записи.');
@define('THEME_ENTRY_SUBTITLE','Подзаголовок записи');
@define('THEME_ENTRY_HEADER_IMAGE','Изображение заголовка записи');
@define('THEME_DEMO_AVAILABLE', 'С полным объяснением на английском языке <a href="http://www.optional-necessity.com/demo/cleanblog/archives/8-Using-the-Clean-Blog-theme.html">настройки и использования Clean Blog</a> можно ознакомиться на <a href="http://www.optional-necessity.com/demo/cleanblog/">Clean Blog demo</a>.');


// Header Images
@define('DEFAULT_HEADER_IMAGE', 'Изображение заголовка по умолчанию');
@define('DEFAULT_HEADER_IMAGE_DESC', 'Это изображение будет использоваться на страницах, которые не определяют своё собственное изображение заголовка');
@define('ENTRY_DEFAULT_HEADER_IMAGE', 'Изображение заголовка для записей');
@define('ENTRY_DEFAULT_HEADER_IMAGE_DESC', 'Это изображение будет использоваться для всех записей, которые не определяют своё собственное изображение заголовка для конкретной записи');
@define('STATICPAGE_DEFAULT_HEADER_IMAGE', 'Изображение заголовка для статических страниц');
@define('STATICPAGE_DEFAULT_HEADER_IMAGE_DESC', 'Это изображение будет использоваться для всех статических страниц, которые не определяют своё собственное изображение заголовка для конкретной страницы');
@define('STATICPAGE_SPECIFIC_HEADER_IMAGE','Изображение заголовка статической страницы (необязательно)');
@define('CONTACTFORM_HEADER_IMAGE', 'Изображение заголовка для формы контактирования');
@define('ARCHIVE_HEADER_IMAGE', 'Изображение заголовка для страницы архива');

//Page Options
@define('USE_GOOGLEFONTS', 'Использовать веб-шрифты Google?');
@define('HOME_LINK_TEXT', 'Текст ссылки на главную страницу');
@define('ENTRY_DATE_FORMAT','Формат даты записей');
@define('COMMENT_TIME_FORMAT','Формат времени комментариев и обратных ссылок');
@define('WORDS','Слова');
@define('TIMESTAMP','Отметка времени');
@define('SUBTITLE_USE_ENTRYBODY','Отображать первые 70 символов текста записи в качестве субтитров записи, если поле фактического субтитра записи пусто?');
@define('ENTRYBODY_DETAILED_ONLY','Показать текст записи только для просмотра на странице с одной записью');
@define('SHOW_COMMENT_LINK','Показать ссылку на комментарии к записи');
@define('CATEGORIES_ON_ARCHIVE', 'Показывать категории на странице архива');
@define('CATEGORIES_ON_ARCHIVE_DESC', 'Должен быть установлен плагин категорий боковой панели (serendipity_plugin_categories) и включена опция "Включить Smarty-шаблоны?" для просмотра категорий на странице архива.');
@define('TAGS_ON_ARCHIVE', 'Показывать теги на странице архива');
@define('TAGS_ON_ARCHIVE_DESC', 'Для просмотра тегов на странице архива должен быть установлен плагин serendipity_plugin_freetag, а для параметра "Шаблон боковой панели" должно быть установлено значение "archive_freetag.tpl".');

//Static Pages
@define('STATIC_SHOW_AUTHOR_TEXT','Показать имя автора?');
@define('STATIC_SHOW_DATE_TEXT','Показать дату?');

//Navigation
@define('USE_CORENAV', 'Использовать глобальную навигацию?');

//Social media
@define('TWITTER_URL','URL-адрес Twitter.  Значок не отображается, если пусто.');
@define('FACEBOOK_URL','URL-адрес Facebook.  Значок не отображается, если пусто.');
@define('RSS_URL','URL-адрес RSS-ленты.  Значок не отображается, если пусто.');
@define('GITHUB_URL','URL-адрес GitHub.  Значок не отображается, если пусто.');
@define('INSTAGRAM_URL','URL-адрес Instagram.  Значок не отображается, если пусто.');
@define('PINTEREST_URL','URL-адрес Pinterest.  Значок не отображается, если пусто.');
@define('MASTODON_URL','URL-адрес Mastodon.  Значок не отображается, если пусто.');
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
