<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation by Nightly <nightly@reys.net>
/* vim: set sts=4 ts=4 expandtab : */
$i18n_filename_from = array(' ', 'а', 'А', 'б', 'Б', 'в', 'В', 'г', 'Г', 'д', 'Д', 'е', 'Е', 'ё', 'Ё', 'Ж', 'ж', 'з', 'З', 'и', 'И', 'й', 'Й', 'к', 'К', 'л', 'Л', 'м', 'М', 'н', 'Н', 'о', 'О', 'п', 'П', 'р','Р', 'с', 'С', 'т', 'Т', 'у', 'У', 'ф', 'Ф', 'х', 'Х', 'ц', 'Ц', 'ч', 'Ч', 'ш', 'Ш', 'щ', 'Щ', 'ъ', 'Ъ', 'ы', 'Ы', 'ь', 'Ь', 'э', 'Э', 'ю', 'Ю', 'Я', 'я');
$i18n_filename_to   = array('_', 'a', 'A', 'b', 'B', 'v', 'V', 'g', 'G', 'd', 'D', 'e', 'E', 'jo', 'Jo', 'zh', 'Zh', 'z', 'Z', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'f', 'F', 'h', 'H', 'c', 'C', 'ch', 'Ch', 'sh', 'Sh', 'w', 'W', '#', '#', 'y', 'Y', '’', '’', 'je', 'Je', 'ju', 'Ju', 'ja', 'Ja');

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'ru_RU.utf-8');
@define('DATE_FORMAT_ENTRY', '%A, %e %B. %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ', ');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Тип');
@define('PREVIEW', 'Предварительный просмотр');
@define('DATE', 'Дата');
@define('TIME', 'Time');
@define('APPEARANCE', 'Внешний вид');
@define('LOGIN', 'Войти');
@define('LOGOUT', 'Выйти');
@define('LOGGEDOUT', 'Сеанс завершён.');
@define('CREATE', 'Создать');
@define('BACK', 'Назад');
@define('FORWARD', 'Вперёд');
@define('ANONYMOUS', 'Аноним');
@define('RECENT', 'Недавнее...');
@define('OLDER', 'Давнее...');
@define('DONE', 'Done');
@define('TITLE', 'Заголовок');
@define('DESCRIPTION', 'Описание');
@define('PLACEMENT', 'Расположение');
@define('DELETE', 'Удалить');
@define('SAVE', 'Сохранить');
@define('UP', 'ВВЕРХ');
@define('DOWN', 'ВНИЗ');
@define('PREVIOUS', 'Вперед');
@define('NEXT', 'Назад');
@define('ENTRIES', 'записи');
@define('CATEGORIES', 'Категории');
@define('NAME', 'Имя');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Домашняя страница');
@define('COMMENT', 'Комментарий');
@define('VIEW', 'Просмотреть');
@define('HIDE', 'Спрятать');
@define('WEEK', 'Неделя');
@define('WEEKS', 'Недели');
@define('MONTHS', 'Месяцы');
@define('DAYS', 'Дни');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Успешно!');
@define('COMMENTS', 'Комментарии');
@define('ADD_COMMENT', 'Добавить комментарий');
@define('NO_COMMENTS', 'Нет комментариев.');
@define('POSTED_BY', 'Добавил ');
@define('ON', 'on');
@define('NO_CATEGORY', 'Без категории');
@define('CATEGORY', 'Категория');
@define('EDIT', 'Редактировать');
@define('GO', 'Давай!');
@define('YES', 'Да');
@define('NO', 'Нет');
@define('NOT_REALLY', 'Не уверен...');
@define('DUMP_IT', 'Уверен!');
@define('IN', 'в категории');
@define('AT', 'в');
@define('LEFT', 'слева');
@define('RIGHT', 'справа');
@define('CENTER', 'center');
@define('ARCHIVES', 'Архивы');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Быстрый поиск');
@define('TRACKBACKS', 'Обратные ссылки');
@define('TRACKBACK', 'Обратная ссылка');
@define('NO_TRACKBACKS', 'Нет обратных ссылок');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Выборка');
@define('TRACKED', 'Tracked');
@define('USER', 'Пользователь');
@define('USERNAME', 'Имя пользователя');
@define('PASSWORD', 'Пароль');
@define('HIDDEN', 'спрятан');
@define('IMAGE', 'Изображение');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Автор');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'версия');
@define('INSTALL', 'Установить');
@define('REPLY', 'Ответить');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Ошибка');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Принудить');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Администратор');
@define('ADMIN_FRONTPAGE', 'Начальная страница');
@define('QUOTE', 'Цитировать');
@define('NONE', 'Никакой');
@define('GROUP', 'Группа');
@define('AUTHORS', 'Авторы');
@define('UPGRADE', 'Апгрейд');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Все авторы');
@define('PREVIOUS_PAGE', 'предыдущая страница');
@define('NEXT_PAGE', 'следующая страница');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Все категории');
@define('LAST_UPDATED', 'Последнее обновление');
@define('IP_ADDRESS', 'IP-адрес');
@define('CHARSET', 'Кодировка');
@define('REFERER', 'Referer');
@define('APPROVE', 'Подтвердить');
@define('NOT_FOUND', 'Не найден');
@define('WRITABLE', 'Есть доступ для записи');
@define('NOT_WRITABLE', 'Нет доступа для записи');
@define('WELCOME_BACK', 'Добро пожаловать,');
@define('USE_DEFAULT', 'По умолчанию');
@define('SORT_BY', 'Упорядочить по');
@define('SORT_ORDER', 'Порядок сортировки');
@define('SORT_ORDER_ASC', 'По возрастанию');
@define('SORT_ORDER_DESC', 'По убыванию');
@define('FILTERS', 'Фильтры');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Раскрыть все разделы');
@define('TOGGLE_OPTION', 'Переключить опцию');
@define('IN_REPLY_TO', 'В ответ на');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Каталог');
@define('BACK_TO_BLOG', 'Назад к веблогу');
@define('HTML_NUGGET', 'Фрагмент HTML');
@define('TITLE_FOR_NUGGET', 'Заголовок вашего фрагмента');
@define('COMMENT_ADDED', 'Ваш комментарий был успешно добавлен. ');
@define('ENTRIES_FOR', 'Записи для %s');
@define('NO_ENTRIES_TO_PRINT', 'Нету здесь никаких заметок...');
@define('COMMENT_DELETE_CONFIRM', 'Вы уверены, что хотите удалить комментарий #%d, созданный %s?');
@define('DELETE_SURE', 'Вы уверены, что хотите удалить полностью #%s?');
@define('MEDIA_FULLSIZE', 'Полный размер');
@define('SIDEBAR_PLUGIN', 'плагин боковых панелей');
@define('EVENT_PLUGIN', 'event-плагин');
@define('PLUGIN_ITEM_DISPLAY', 'Где должен быть показан этот объект?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Только в расширенном тексте записи');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Только на странице обзора');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'В обоих случаях');
@define('DIRECTORY_WRITE_ERROR', 'Не могу записать в каталог %s. Проверьте права доступа к каталогу.');
@define('FILE_WRITE_ERROR', 'Невозможна запись в файл %s.');
@define('INCLUDE_ERROR', 'Ошибка serendipity: невозможно включить файл  %s - прекращение работы.');
@define('DO_MARKUP', 'Произвести трансформации разметок');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Формат даты');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Формат даты записи, с использованием переменных PHP-функции strftime(). (По умолчанию: "%s")');
@define('APPLY_MARKUP_TO', 'Apply markup to %s');
@define('XML_IMAGE_TO_DISPLAY', 'Кпонка XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Ссылки на XML фиды будут отмечены этим изображением. Оставьте поле пустым для картинки по умолчанию, или введите \'none\' чтобы не показывать кнопки вообще.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Удаление файла %s...');
@define('SETTINGS_SAVED_AT', 'Новые настройки были сохранены в %s');
@define('INVERT_SELECTIONS', 'Инвертировать отмеченное');

@define('PERSONAL_SETTINGS', 'Личные настройки');
@define('DO_MARKUP_DESCRIPTION', 'Применить к тексту трансформацию разметки (смайлы, разметка ссылок через *, /, _, ...).Отключение этой опции сохранит html код.');
@define('BASE_DIRECTORY', 'Главная директория');
@define('PERM_READ', 'Доступ на чтение');
@define('PERM_WRITE', 'Доступ на запись');
@define('PERM_DENIED', 'Доступ запрещён.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Установка Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Добро пожаловать в установку Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Сначала мы проведём анализ вашей текущей версии и попытаемся найти проблемы совместимости');
@define('ERRORS_ARE_DISPLAYED_IN', 'Ошибки обозначены как %s, рекомендации как %s, а успешно пройденные проверки - как %s');
@define('RED', 'красный');
@define('YELLOW', 'жёлтый');
@define('GREEN', 'зелёный');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - пред-установочный отчёт');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'инсталляция PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Операционная система');
@define('WEBSERVER_SAPI', 'SAPI веб-сервера');
@define('PHPINI_CONFIGURATION', 'конфигурация php.ini');
@define('RECOMMENDED', 'Рекомендуется');
@define('ACTUAL', 'На самом деле');
@define('PERMISSIONS', 'Права доступа');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Права доступа можно изменить используя следующую shell комманду: `<em>%s</em>` на не прошедшей проверку директории, или установить их использую FTP клиент');
@define('PROBLEM_DIAGNOSTIC', 'Из-за проблем, найденных во время диагностики, вы не можете продолжать установку, пока указанные выше ошибки не будут исправлены');
@define('SELECT_INSTALLATION_TYPE', 'Выберите, какой тип инсталляции вы хотите использовать');
@define('RECHECK_INSTALLATION', 'Снова проверить установку');
@define('SIMPLE_INSTALLATION', 'Простая установка');
@define('EXPERT_INSTALLATION', 'Продвинутая установка');
@define('COMPLETE_INSTALLATION', 'Полная установка');
@define('WONT_INSTALL_DB_AGAIN', 'не устанавливать базу данных снова');
@define('THEY_DO', 'they do');
@define('THEY_DONT', 'they don\'t');
@define('CHECK_DATABASE_EXISTS', 'Проверка, существует ли уже база данных. Если вы увидите ошибку запроса к базе данных ниже, не обращайте внимания...');
@define('CREATE_DATABASE', 'Создание настроек базы данных по умолчанию...');
@define('ATTEMPT_WRITE_FILE', 'Попытка записать файл %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Создание основного автора \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Установка шаблона по умолчанию');
@define('INSTALLING_DEFAULT_PLUGINS', 'Установка плагинов по умолчанию');
@define('SERENDIPITY_INSTALLED', '%sSerendipity был успешно установлен на вашей системе.%s Пожалуйста запомните ваш пароль: "%s", ваше имя пользователя - "%s".%sВы можете найти ваш новый PHP блог <a href="%s">вот тут</a>');
@define('VISIT_BLOG_HERE', 'Перейти на ваш новый блог');
@define('THANK_YOU_FOR_CHOOSING', 'Спасибо за ваш выбор Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Во время установки была обнаружена ошибка');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Сделано с помощью');
@define('ADMIN_FOOTER_POWERED_BY', 'Сделано с помощью Serendipity %s и PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Автор');
@define('USERLEVEL_CHIEF_DESC', 'Автор-редактор');
@define('USERLEVEL_ADMIN_DESC', 'Администратор');
@define('WWW_USER', 'Изменить www на имя пользователя, под которым запущен apache (например, nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Каталог %s не существует и не может быть создан. Пожалуйста, создайте его вручную.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Невозможно запустить файл %s');
@define('FILE_CREATE_YOURSELF', 'Пожалуйста создайте файл вручную или проверьте права доступа');
@define('COPY_CODE_BELOW', '<br />* Просто скопируйте код ниже и поместите его в %s в вашей папке %s:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'После того, как вы это сделаете, нажмите кнопку "reload" вашего браузера.');
@define('ERROR_TEMPLATE_FILE', 'Невозможно открыть файл шаблона, пожалуйста обновите serendipity!');
@define('HTACCESS_ERROR', 'Чтобы проверить настройки вашего веб-сервера, serendipity необходимо иметь права записи в файл ".htaccess". Эта операция не удалась из-за недостаточных прав доступа к файлу. Пожалуйста, измените эти права командой типа: <br />&nbsp;&nbsp;%s<br />и перегрузите эту страницу.');
@define('EMPTY_SETTING', 'Вы не установили допустимое значение для "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity обнаружил, что ваша конфигурация установлена для версии %s, в то время как сами файлы движка serendipity соответствуют версии %s, вам нужен апгрейд! <a href="%s">Нажмите здесь чтобы продолжить</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Привет, и добро пожаловать в агента обновления Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Я был создан чтобы помочь вам обновить ваш веблог Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Вы видите это сообщение потому что вы только что установили Serendipity %s, но не обновили вашу базу данных чтобы соответствовать этой версии');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Обновления базы данных (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Я нашёл следующие .sql файлы, которые должны быть выполнены перед тем, как вы сможете продолжить работу с Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Специфичные для этой версии действия');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Не было найдено действий, специфичных для этой версии');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Вы хотите, чтобы я произвёл эти действия прямо сейчас?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Нет, я произведу их самостоятельно и вручную');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Да, пожалуйста');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Похоже на то, что вам не нужно производить никаких обновлений');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Считайте ваш движок Serendipity обновлённым');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Вы проигнорировали этап автоматического обновления Serendipity, пожалуйста проследите чтбы ваша база данных была корректно обновлена и указанные действия произведены вручную');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Ваш движок Serendipity теперь обновлён до версии %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Вы можете вернуться к вашему блогу кликнув %sздесь%s');
@define('ADMIN_ENTRIES', 'Записи');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Не удалось подключиться к базе данных MySQL : %s.');
@define('COULDNT_SELECT_DB', 'Не удалось выбрать базу данных: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Не удалось выбрать информацию о пользователе: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Не удалось выбрать информацию о категории: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Не удалось выбрать информацию о записи: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Не удалось выбрать информацию о комментарии: %s.');
@define('MYSQL_REQUIRED', 'Вы должны иметь поддержку MySQL чтобы выполнить это действие.');
@define('CREATE_AUTHOR', 'Создать автора \'%s\'.');
@define('CREATE_CATEGORY', 'Создать категорию \'%s\'.');
@define('MT_DATA_FILE', 'Файл данных Movable Type');
@define('INSTALL_DBPORT', 'Порт базы данных');
@define('INSTALL_DBPORT_DESC', 'Порт, используемый для подключения к вашему серверу с базой данных');
@define('IMPORT_PLEASE_ENTER', 'Пожалуйста введите запрашиваемые ниже данные');
@define('IMPORT_NOW', 'Начать импорт!');
@define('IMPORT_STARTING', 'Запуск процедуры импортирования...');
@define('IMPORT_FAILED', 'Импорт данных не удался');
@define('IMPORT_DONE', 'Импорт данных успешно завершён');
@define('IMPORT_WEBLOG_APP', 'Приложение');
@define('IMPORT_NOTES', 'Напоминание:');
@define('IMPORT_STATUS', 'Статус после импорта');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Поместить весь импортированный текст в раздел "текст записи" и не создавать раздел "дополнительный текст записи".');
@define('IMPORT_GENERIC_RSS', 'Обычный импорт RSS');
@define('ACTIVATE_AUTODISCOVERY', 'Посылать обратные ссылки на гиперссылки, найденные в записи');
@define('RSS_IMPORT_CATEGORY', 'Использовать эту категорию для импортированных записей  с несуществующими в вашей базе категориями');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Документ %s не найден.');
@define('CONVERT_HTMLENTITIES', 'Пытаться автоматически конвертировать HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Администрирование Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Похоже, что вы ввели неверное имя пользователя или пароль');
@define('PLEASE_ENTER_CREDENTIALS', 'Пожалуйста введите ваши имя пользователя и пароль.');
@define('AUTOMATIC_LOGIN', 'Запомнить эту информацию');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'Медиа-файлы');
@define('MEDIA_LIBRARY', 'Библиотека файлов');
@define('ADD_MEDIA', 'Добавить медиа-файл');
@define('MANAGE_DIRECTORIES', 'Работа с каталогами');
@define('CONFIGURATION', 'Конфигурация');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Documentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Official Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forums');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Эта запись ещё не опубликована');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Плагины боковых панелей');
@define('EVENT_PLUGINS', 'Event-плагины');
@define('CONFIGURE_PLUGINS', 'Настройка плагинов');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Требования не выполнены: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Сделать апгрейд до версии %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Нажмите здесь чтобы установить новый %s');
@define('ALREADY_INSTALLED', 'Уже установлен');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Редактировать записи');
@define('EDIT_ENTRY', 'Редактировать запись');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Черновик');
@define('PUBLISH', 'Опубликовать');
@define('CONTENT', 'Содержимое');
@define('ENTRIES_PER_PAGE', 'записей на странице');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Закреплённые записи');
@define('PAGE_BROWSE_ENTRIES', 'Страница %s из %s, всего записей: %s');
@define('FIND_ENTRIES', 'Найти записи');
@define('RIP_ENTRY', 'Запись #%s удалена');
@define('NEW_ENTRY', 'Новая запись');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Текст записи');
@define('EXTENDED_BODY', 'Допольнительный текст');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Черновик этой записи сохранен');
@define('IFRAME_PREVIEW', 'Serendipity обрабатывает предпросмотр для вашей записи...');
@define('IFRAME_WARNING', 'Ваш браузер не поддерживает принцип iframes. Пожалуйста откройте ваш serendipity_config.inc.php и установите переменную $serendipity[\'use_iframe\'] как FALSE.');
@define('DATE_INVALID', 'Внимание: Дата, указанная вами, неверна. Она должна быть указана в формате YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Дополнительные опции');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Эта ссылка не предназначена для того, чтобы её кликали. Она содержит специальный URI для обратных ссылок. Вы можете использовать этот URI для проверки и создания обратных ссылок на эту запись. Чтобы скопировать ссылку, нажмите на ней правую кнопку мышки и выберите "Copy Shortcut" в Internet Explorer или "Copy Link Location" в Mozilla.');
@define('RESET_DATE', 'Переустановить дату');
@define('RESET_DATE_DESC', 'Кликните сюда чтобы установить как дату текущее время');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Работа с пользователями');
@define('CREATE_NEW_USER', 'Создать нового пользователя');
@define('CREATE_NOT_AUTHORIZED', 'Вы не можете редактировать пользователей того же уровня доступа, что и ваш собственный');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Вы не можете создать пользователей с уровнем доступа выше вашего собственного');
@define('CREATED_USER', 'Новый пользователь %s был успешно создан');
@define('MODIFIED_USER', 'Свойства пользователя %s были изменены');
@define('USER_LEVEL', 'Userlevel');
@define('WARNING_NO_GROUPS_SELECTED', 'Warning: You did not select any group memberships. This would effectively log you out of the usergroup management, and thus your group memberships werde not changed.');
@define('DELETE_USER', 'Вы собираетесь удалить пользователя #%d %s. Вы уверены? Эта операция запретит отображение любых добавленных им записей.');
@define('DELETED_USER', 'Пользователь #%d %s удалён.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Редактировать группы');
@define('DELETED_GROUP', 'Группа #%d %s удалена.');
@define('CREATED_GROUP', 'Новая группа %s была создана');
@define('MODIFIED_GROUP', 'Настройки группы %s были изменены');
@define('CREATE_NEW_GROUP', 'Создать новую группу');
@define('DELETE_GROUP', 'Вы собираетесь удалить группу #%d %s. Вы уверены?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Найти комментарии');
@define('COMMENTS_FILTER_SHOW', 'Показывать');
@define('COMMENTS_FILTER_ALL', 'Все');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Только подтверждённые');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Ожидающие подтверждения');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Вы уверены, что хотите удалить отмеченные комментарии?');
@define('PAGE_BROWSE_COMMENTS', 'Страница %s из %s, всего комментариев:  %s');
@define('COMMENT_IS_DELETED', '(Comment removed)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Данные о категории сохранены');
@define('CATEGORY_ALREADY_EXIST', 'Категория с таким именем "%s" уже существует');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Категория #%s удалена. Старые записи перемещены в категорию #%s');
@define('CATEGORY_DELETED', 'Категория #%s удалена.');
@define('INVALID_CATEGORY', 'Не было указано категории для удаления');
@define('EDIT_THIS_CAT', 'Редактировать "%s"');
@define('CATEGORY_REMAINING', 'Удалить данную категорию и установить для всех её записей следующую категорию');
@define('PARENT_CATEGORY', 'Главная категория');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Создать новую категорию');
@define('ALREADY_SUBCATEGORY', '%s уже является подкатегорией %s.');
@define('NO_CATEGORIES', 'Без категорий');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Импортировать записи');
@define('EXPORT_ENTRIES', 'Экспортировать записи');
@define('EXPORT_FEED', 'Экспортировать полную RSS-ленту');
@define('CREATE_THUMBS', 'Создать тамбнэйлы заново');
@define('WARNING_THIS_BLAHBLAH', "ВНИМАНИЕ:\\nЭта операция может занять длительное время, если имеется много изображений без тамбнэйлов.");
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' был установлен вашим шаблоном по умолчанию');
@define('WARNING_TEMPLATE_DEPRECATED', 'Внимание: используемый вами шаблон использует неполный метод создания шаблонов, сделайте апгрейд если это возможно ');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Custom admin interface available');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Использовать этот стиль');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Проверить &amp; сохранить');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Убрать выделенные плагины');
@define('SAVE_CHANGES_TO_LAYOUT', 'Сохранить изменения');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Синхронизация базы данных с каталогом изображений');
@define('SYNC_DONE', 'Готово! (Синхронизировано изображений: %s).');
@define('RESIZE_BLAHBLAH', '<b>Изменить размеры %s</b>');
@define('ORIGINAL_SIZE', 'Оригинальный размер: <i>%sx%s</i> pixel');
@define('RESIZING', 'Изменение размеров');
@define('RESIZE_DONE', 'Готово! (Изменено изображений: %s).');
@define('KEEP_PROPORTIONS', 'Сохранить пропорции');
@define('REALLY_SCALE_IMAGE', 'Вы уверены, что хотите изменить размеры изображения? Эта операция необратима!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Здесь вы можете изменить размер изображения. Если вы хотите изменить размеры пропорционально, просто введите значение в одном из двух полей, и нажмите клавишу TAB - второе поле будет заполнено автоматически с учётом пропорций изображения.</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Новый размер: ');
@define('SCALING_IMAGE', 'Изменение размеров %s на %s x %s точек');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Каталог <strong>%s</strong> был успешно создан.');
@define('PARENT_DIRECTORY', 'Главный каталог');
@define('CONFIRM_DELETE_DIRECTORY', 'Вы уверены, что хотите удалить все содержимое каталога %s?');
@define('ERROR_NO_DIRECTORY', 'Ошибка: Каталог %s не существует');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Не удалось удалить не пустой каталог. Поставьте галочку "Принудительное удаление", если вы хотиле удалить все файлы из этого каталога, и попробуйте удалить каталог снова. В каталоге найдены файлы:');
@define('DIRECTORY_DELETE_FAILED', 'Не удалось удалить каталог %s. Проверьте права доступа или сообщения об ошибках выше.');
@define('DIRECTORY_DELETE_SUCCESS', 'Каталог %s успешно удалён.');
@define('CHECKING_DIRECTORY', 'Проверка файлов в каталоге %s');
@define('DELETE_DIRECTORY', 'Удалить директорию');
@define('DELETE_DIRECTORY_DESC', 'Вы собираетесь удалить директорию в которой находятся медиа файлы, возможно они используются в каких-то записях.');
@define('FORCE_DELETE', 'Удалить ВСЕ файлы в этой директории, включая те, которые неизвестны Serendipity');
@define('CREATE_DIRECTORY', 'Создать директорию');
@define('CREATE_NEW_DIRECTORY', 'Создать новую директорию');
@define('CREATE_DIRECTORY_DESC', 'Тут вы можете создать новую директорию чтобы поместить туда медиа файлы. Выберете имя директории и, опционально, имя родительской директории.');
@define('ABOUT_TO_DELETE_FILE', 'Вы собираетесь удалить <b>%s</b><br />Если вы используете этот файл в каких-то ваших записях, это действие сделает ссылки или изображения в них недоступными.<br />Вы уверены, что хотите продолжить?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Ошибка: Файл уже существует на вашем компьютере!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Невозможно найти файл <b>%s</b>, может быть он уже был удалён?');
@define('ERROR_FILE_FORBIDDEN', 'У вас нет прав закачивать файлы с активным содержанием');
@define('REMOTE_FILE_NOT_FOUND', 'Файл не был найден на удалённом сервере. Вы уверены, что эта ссылка верна? URL: <b>%s</b>');
@define('FILE_FETCHED', '%s скачан и сохранён как %s');
@define('FILE_UPLOADED', 'Файл %s успешно загружен на сервер как %s');
@define('DELETE_FILE_FAIL', 'Не удалось удалить файл <b>%s</b>');
@define('DELETE_FILE', 'Удалён файл <b>%s</b>');
@define('FOUND_FILE', 'Найден новый/изменённый файл: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Ошибка: Новое имя файла уже используется, пожалуйста выберите другое!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'Привязанные изображение');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Введите новое имя для: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Добавление изображения...');
@define('THUMB_CREATED_DONE', 'Тамбнэйл успешно создан.');
@define('THUMBNAIL_USING_OWN', '%s будет своим собственным тамбнэйлом, так как размеры изображения уже достаточно малы.');
@define('THUMBNAIL_FAILED_COPY', 'Хотелось использовать %s как его собственный тамбнэйл, но не удалось скопировать файл!');
@define('DELETE_THUMBNAIL', 'Удалён файл с тамбнэйлом <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Произошла неизвестная ошибка, файл не был загружен. Возможно, размер вашего файл превысил допустивый максимальный размер, разрешённый на вашем сервере. Сверьтесь с вашим провайдером, или отредактируйте ваш файл php.ini чтобы позволить загрузку на сервер файлов большего размера.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', 'Привязка файла.<br />завершена.');
@define('DELETE_HOTLINK_FILE', 'Удален привязанный файл с именем <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Невозможно выполнить: "%s", ошибка: %s, возвращенная переменная: %d');
@define('SKIPPING_FILE_EXTENSION', 'Пропускаем файл: Нет расшерения у файла %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Пропускаем файл: %s - не читается.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'В этой записи я хочу использовать тамбнэйл.');
@define('I_WANT_BIG_IMAGE', 'В этой записи я хочу использовать изображение оригинальных размеров.');
@define('I_WANT_NO_LINK', ' Я хочу, чтобы это было изображениe');
@define('I_WANT_IT_TO_LINK', 'Я хочу, чтобы это была ссылка на вот этот url:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Размер изображения');
@define('IMAGE_ALIGNMENT', 'Выравнивание изображения');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Вставка изображения');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Вы выбрали %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Повернуть изображение на 90 градусов против часовой стрелки');
@define('IMAGE_ROTATE_RIGHT', 'Повернуть изображение на 90 градусов по часовой стрелке');
@define('MEDIA_RENAME', 'Переименовать этот файл');
@define('THUMBNAIL_SHORT', 'Тамбнэйл');
@define('ORIGINAL_SHORT', 'Оригинал');
@define('SORT_ORDER_NAME', 'По имени файла');
@define('SORT_ORDER_EXTENSION', 'По расширению файла');
@define('SORT_ORDER_SIZE', 'По размеру файла');
@define('SORT_ORDER_WIDTH', 'По ширине изображения');
@define('SORT_ORDER_HEIGHT', 'По высоте изображения');
@define('SORT_ORDER_DATE', 'По дате загрузки');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Добавление файла в вашу медиа-коллекцию:</b><p>Здесь вы можете загрузить на сервер ваши медиа-файлы, или указать, откуда их можно скачать в сети! Если у вас нет подходящих изображений, <a href="https://images.google.com/" target="_blank">поищите с помощью google</a>, что-нибудь да найдётся,очень часто результаты полезны и забавны :)</p><p><b>Выберите способ:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Введите URL файла,<br>который нужно скачать:');
@define('ENTER_MEDIA_UPLOAD', 'Выберите файл, который<br>вы хотите загрузить на сервер:');
@define('SAVE_FILE_AS', 'Сохранить этот файл как:');
@define('STORE_IN_DIRECTORY', 'Сохранить в следующем каталоге: ');
@define('IMAGE_MORE_INPUT', 'Добавить ещё изображение');
@define('ENTER_MEDIA_URL_METHOD', 'Метод доставки:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Замечание: Если вы выбрали хотлинк к серверу, убедитесь, что у вас есть права на создание хотлинков к выбранному вебсайту, или вебсайт принадлежит вам. Хотлинк позволяет использовать изображения не с сайта, не сохраняя их локально.');
@define('FETCH_METHOD_IMAGE', 'Закачать изображение на ваш сервер');
@define('FETCH_METHOD_HOTLINK', 'Привязать к серверу');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Изменить размер этого изображения');
@define('MEDIA_DELETE', 'Удалить этот файл');
@define('FILES_PER_PAGE', 'Файлов на странице');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Не было найдено изображений');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'все каталоги');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Конфигурация записана &amp; сохранена');
@define('DIAGNOSTIC_ERROR', 'Мы обнаружили несколько ошибок, пока проверяли введённую вами информацию:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Настройки базы данных');
@define('INSTALL_CAT_DB_DESC', 'Здесь вы можете ввести всю информацию о вашей базе данных. Serendipity необходимы эти настройки чтобы нормально функционировать');
@define('INSTALL_DBTYPE', 'Тип базы данных');
@define('INSTALL_DBTYPE_DESC', 'Тип вашей базы данных');
@define('INSTALL_DBHOST', 'Хост базы данных');
@define('INSTALL_DBHOST_DESC', 'Имя сервера с вашей базой данных');
@define('INSTALL_DBUSER', 'Пользователь базы данных');
@define('INSTALL_DBUSER_DESC', 'Имя пользователя, используемое чтобы подключиться к вашей базе данных');
@define('INSTALL_DBPASS', 'Пароль базы данных');
@define('INSTALL_DBPASS_DESC', 'Пароль для указанного выше имени пользователя');
@define('INSTALL_DBNAME', 'Имя базы данных');
@define('INSTALL_DBNAME_DESC', 'Название вашей базы данных');
@define('INSTALL_DBPREFIX', 'Префикс таблиц');
@define('INSTALL_DBPREFIX_DESC', 'Префикс таблиц в вашей базе даынных, например serendipity_');
@define('INSTALL_DBPERSISTENT', 'Использовать persistent-соединения');
@define('INSTALL_DBPERSISTENT_DESC', 'Разрешить использование persistent-соединений к базе данных, больше информации об этом можно получить <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">здесь</a>. Обычно, эта опция не рекомендуется');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Пути');
@define('INSTALL_CAT_PATHS_DESC', 'Различные пути к необходимым каталогам и файлам. Не забывайте слэши в конце путей к каталогам!');
@define('INSTALL_FULLPATH', 'Полный путь');
@define('INSTALL_FULLPATH_DESC', 'Полный и абсолютный путь к каталогу serendipity');
@define('INSTALL_UPLOADPATH', 'Путь для аплоадов');
@define('INSTALL_UPLOADPATH_DESC', 'Все загруженные на сервер файлы будут помещены в этто каталог, обычно он указывается относительно полного пути - чаще всего, \'uploads/\'');
@define('INSTALL_RELPATH', 'Относительный путь');
@define('INSTALL_RELPATH_DESC', 'Путь к serendipity для вашего браузера, обычно \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Относительный путь к шаблонам');
@define('INSTALL_RELTEMPLPATH_DESC', 'Пусть к каталогу с шаблонами - с учётом \'относительному пути\'');
@define('INSTALL_RELUPLOADPATH', 'Относительный путь аплоадов');
@define('INSTALL_RELUPLOADPATH_DESC', 'Путь к вашим загрузка для браузеров - с учётом \'относительного пути\'');
@define('INSTALL_URL', 'URL вашего блога');
@define('INSTALL_URL_DESC', 'Основной URL вашего блога');
@define('INSTALL_AUTODETECT_URL', 'Автоматически определять HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Если установлено "true", Serendipity будет пытаться определить HTTP Host который был использован пользователем при обращении как ваш базовый URL. Активация этой опции позволит вам использовать множество доменных имен для вашего Serendipity Блога, и использовать доменное имя для всех пересылающих ссылок использованных для доступа к вашему блогу.');
@define('INSTALL_INDEXFILE', 'Индекс-файл');
@define('INSTALL_INDEXFILE_DESC', 'Имя индекс-файла вашего блога');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Постоянные ссылки');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Определяет различные URL шаблоны для задания постоянных ссылок в вашем дневнике. Рекомендуется использовать значение по умолчанию; если нет старайтесь использовать значение %id% там где это возможно, чтобы предупредить запросы Serendipity к базе данных в поисках запрошенных адресов.');
@define('INSTALL_PERMALINK', 'Структура постоянных ссылок для записей');
@define('INSTALL_PERMALINK_DESC', 'Здесь вы можете определить структуру относительных адресов, начинающихся с вашего основного адреса, по которому будут доступны записи. Вы можете использовать переменные %id%, %title%, %day%, %month%, %year% и любые другие символы.');
@define('INSTALL_PERMALINK_AUTHOR', 'Структура постоянных ссылок для авторов');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Здесь вы можете определить структуру относительных адресов, начинающихся с вашего основного адреса, по которому будут доступны записи от отдельных авторов. Вы можете использовать переменные %id%, %title%, %day%, %month%, %year% и любые другие символы. ');
@define('INSTALL_PERMALINK_CATEGORY', 'Структура постоянных ссылок для категорий');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Здесь вы можете определить структуру относительных адресов, начинающихся с вашего основного адреса, по которому будут доступны записи из отдельных категорий. Вы можете использовать переменные %id%, %title% и любые другие символы.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Структура постоянных ссылок для RSS-Feed');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Здесь вы можете определить структуру относительных адресов, начинающихся с вашего основного адреса, по которому будут доступны RSS-feeds из отдельных категорий. Вы можете использовать переменные %id%, %title%  и любые другие символы.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Структура постоянных стылок для RSS-Feed авторов');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Здесь вы можете определить структуру относительных адресов, начинающихся с вашего основного адреса, по которому будут доступны RSS-feeds отдельных ваших авторов записей. Вы можете использовать переменные %id%, %realname%, %username%, %email% и любые другие символы.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Путь к архивам');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Путь к архиву');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Путь к категориям');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Путь к страницам автором');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Путь к отписке от комментариев');
@define('INSTALL_PERMALINK_DELETEPATH', 'Путь для удаления комментариев');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Путь для подтверждения комментариев');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Путь к RSS Feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Путь к отдельному плагину');
@define('INSTALL_PERMALINK_ADMINPATH', 'Путь для администрирования');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Путь к поиску');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Общие настройки');
@define('INSTALL_CAT_SETTINGS_DESC', 'Влияют на поведение вашего блога Serendipity');
@define('INSTALL_USERNAME', 'Имя администратора');
@define('INSTALL_USERNAME_DESC', 'Имя пользовтеля для администратора блога');
@define('INSTALL_PASSWORD', 'Пароль администратора');
@define('INSTALL_PASSWORD_DESC', 'Пароль для указанного выше имени администратора');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Отображаемое имя');
@define('USERCONF_REALNAME_DESC', 'Полное имя автора. То имя которое отображается для читателей');
@define('INSTALL_EMAIL', 'Email администратора');
@define('INSTALL_EMAIL_DESC', 'Email для администратора блога');
@define('INSTALL_SENDMAIL', 'Посылать почту администратору');
@define('INSTALL_SENDMAIL_DESC', 'Хотите ли вы получать письма когда к вашим заметкам добавляются комментарии?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Имя блога');
@define('INSTALL_BLOGNAME_DESC', 'Название вашего блога');
@define('INSTALL_BLOGDESC', 'Описание блога');
@define('INSTALL_BLOGDESC_DESC', 'Краткое (в одну строку) описание вашего блога');
@define('INSTALL_BLOG_EMAIL', 'E-Mail адрес вашего блога');
@define('INSTALL_BLOG_EMAIL_DESC', 'Здесь вы можете указать электронный адрес, который будет использоваться в поле "From" для всех исходящих от блога сообщений. Проверьте, чтобы здесь был узнаваемый вашим почтовым сервером адрес - многие почтовые сервера отказываются принимать сообщения с неизвестными адресами в поле "From".');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Язык');
@define('INSTALL_LANG_DESC', 'Выберите язык интерфейса для вашего блога');
@define('INSTALL_CHARSET', 'Выбор кодировки');
@define('INSTALL_CHARSET_DESC', 'Здесь вы выбираете кодировку для символов вашего языка - UTF-8 или родную (ISO, EUC, ...). У некоторых языков есть только UTF-8 переводы, поэтому выбор "родной" кодировки здесь не будет иметь никакого эффекта. Для новых инсталляций рекомендуется использовать UTF-8. Не изменяйте этот параметр, если вы уже создали записи в другой кодировке - это может привести к нечитаемым символам. Обязательно изучите страницу https://docs.s9y.org/docs/developers/internationalization.html по этому поводу.');
@define('INSTALL_CAL', 'Тип Календаря');
@define('INSTALL_CAL_DESC', 'Выберите желаемый формат Календаря');
@define('AUTOLANG', 'Использовать по умолчанию язык браузера пользователя');
@define('AUTOLANG_DESC', ' Если включено, то настройки языка браузера у пользователя будут использоваться чтобы выбрать язык записей и интерфейса.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Enable Plugin ACL for usergroups?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'If the option "Plugin ACL for usergroups" is enabled in the configuration, you can specify which usergroups are allowed to execute certain plugins/events.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Внешний вид и опции');
@define('INSTALL_CAT_DISPLAY_DESC', 'Изменить настройки интерфейса Serendipity');
@define('INSTALL_FETCHLIMIT', 'Записи, которые всегда следует отображать на главной странице');
@define('INSTALL_FETCHLIMIT_DESC', 'Количество записей для показа на каждой странице frontend\'а');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Использовать страницы, сжатые с помощью gzip');
@define('INSTALL_USEGZIP_DESC', 'Чтобы ускорить доставку страниц, мы можем сжимать страницы во время отправки их к посетителю, если его браузер поддерживает такое сжатие. Это рекомендуемая опция.');
@define('INSTALL_XHTML11', 'Следить за соответствием XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Вы хотите включить принудительное соответствие стандарту XHTML 1.1? (может вызвать проблемы на старых браузерах 4го поколения)');
@define('INSTALL_POPUP', 'Разрешить использование выскакивающих окон');
@define('INSTALL_POPUP_DESC', 'Хотите ли вы использовать выскакивающие окна для комментариев, обратных ссылок, и т.д.?');
@define('INSTALL_EMBED', 'Встроен ли ваш serendipity?');
@define('INSTALL_EMBED_DESC', 'Если вы хотите встроить ваш блог serendipity в обычную страницу, установите этот параметр в true чтобы не выводить никаких заголовков, и лишь печатать содержимое блога. Вы можете использовать опцию индексного файла (indexFile) чтобы использовать другую страницу как главную и содержащую заголовки. Пожалуйста, прочитайте файл README чтобы узнать больше!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Показывать внешние сайты как гиперссылки?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"no": Внешние сайты (Куда Ушли, Откуда Пришли, комментарии пользователей) не показываются, или показываются как обычный текст, где это возможно, чтобы предотвратить google-спам (рекомендуется). "yes": Внешние сайты показаны как гиперссылки. Эта опция может быть отменена конфигурацией плагина для боковых панелей!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Блокированные сайты');
@define('INSTALL_BLOCKREF_DESC', 'Есть ли какие-то сайты, которые вы не хотите отображать в списке тех, откуда к вам пришли? Разделяйте элементы списка знаком \';\' и имейте в виду, что сайты блокируются по совпадению строк!');
@define('INSTALL_REWRITE', 'Генерация URLов');
@define('INSTALL_REWRITE_DESC', 'Выберите, какими правилами вы хотите пользоваться при генерации URLов. Включение этой опции позволит вам иметь красивые ссылки на вашем блоге и также сделает ваш блог более доступным для индексации поисковыми машинами вроде google. Ваш веб-сервер должен либо поддерживать mod_rewrite, либо содержать "AllowOverride All" для вашего каталога serendipity dir. Значение по умолчанию определяется автоматически');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Смещение времени на сервере');
@define('INSTALL_OFFSET_DESC', 'Введите разницу во времени с сервером в часах (текущее время: %clock%) и желаемую временную зону');
@define('INSTALL_SHOWFUTURE', 'Показывать записи с будущими датами');
@define('INSTALL_SHOWFUTURE_DESC', 'Если включена, эта опция покажет все записи с будущими датами публикации. По умолчанию такие записи скрыты до тех пор, пока не наступит указанная дата публикации.');
@define('INSTALL_ACL', 'Применять разрешения на чтения для категорий');
@define('INSTALL_ACL_DESC', 'Если включена, эта опция заставляет права доступа на чтение категорий применяться для всех пользователей, кто вошёл под своим именем на ваш блог. Если эта опция отключена, никакие права доступа на чтение категорий НЕ применяются, что немного ускоряет ваш блог. Так что, если вам не нужна многопользовательская поддержка чтения категорий на вашем блоге, вы можете отключить эту настройку.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Показывать полные записи с дополнительным текстом записи в RSS-лентах');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Изображение для RSS-ленты');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL изображения в формате GIF/JPEG/PNG, если можно. (пустое поле означает serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Ширина изображения');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'в пикселях, макс. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Высота изображения');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'в пикселях, макс. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Показывать E-Mail адреса?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Поле "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-Mail адрес главного редактора, если таковой есть. (пустое поле будет скрыто) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Поле "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-Mail адрес веб-мастера, если таковой есть. (пустое поле будет скрыто) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Поле "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Количество минут после которых ваш блог не должен оставаться в кэше внешних сайтов или приложений (пустое поле будет скрыто) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Поле "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Должно ли поле "pubDate" быть встроено в RSS-канал, чтобы показать дату последней записи?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Настройки конвертации изображений');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Общие настройки о том, как Serendipity должен работать с изображениями');
@define('INSTALL_IMAGEMAGICK', 'Использование Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Если у вас есть установленный пакет image magick, хотите ли вы его использовать для изменения размеров изображений?');
@define('INSTALL_IMAGEMAGICKPATH', 'Путь к файлу convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Полный путь и имя утилиты convert из пакета image magick');
@define('INSTALL_THUMBSUFFIX', 'Суффикс тамбнэйлов');
@define('INSTALL_THUMBSUFFIX_DESC', 'Тамбнэйлы будут создаваться в соответствии с форматом: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', 'Размеры тамбнэйлов');
@define('INSTALL_THUMBWIDTH_DESC', 'Максимальная ширина автоматически создаваемых тамбнэйлов');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. file upload size');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Enter the maximum filesize for uploaded files in bytes. This setting can be overruled by server-side settings in PHP.ini: upload_max_filesize, post_max_size, max_input_time all take precedence over this option. An empty string means to only use the server-side limits.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. width of image files for upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Enter the maximum image width in pixels for uploaded images.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. height of image files for upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Enter the maximum image height in pixels for uploaded images.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Enable on-the-fly media synchronization');
@define('ONTHEFLYSYNCH_DESC', 'If enabled, Serendipity will compare the media database with the files stored on your server and synchronize the database and directory contents.');
@define('MEDIA_DYN_RESIZE', 'Allow dynamic image resizing?');
@define('MEDIA_DYN_RESIZE_DESC', 'If enabled, the media selector can return images in any requested size via a GET variable. The results are cached, and thus can create a large filebase if you make intensive use of it.');
@define('MEDIA_EXIF', 'Import EXIF/JPEG image data');
@define('MEDIA_EXIF_DESC', 'If enabled, existing EXIF/JPEG metadata of images will be parsed and stored in the database for display in the media gallery.');
@define('MEDIA_PROP', 'Media properties');
@define('MEDIA_PROP_DESC', 'Enter a list of ";" separated property fields you want to define for each media file');
@define('MEDIA_PROP_MULTIDESC', '(You can append ":MULTI" after any item to indicate that this item will contain long text instead of just some characters)');
@define('MEDIA_KEYWORDS', 'Media keywords');
@define('MEDIA_KEYWORDS_DESC', 'Enter a list of ";" separated words that you want to use as pre-defined keywords for media items.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Личные настройки');
@define('USERCONF_CAT_PERSONAL_DESC', 'Изменение ваших личных настроек');
@define('USERCONF_USERNAME', 'Имя пользователя');
@define('USERCONF_USERNAME_DESC', 'Имя пользователя, которое вы используете чтобы заходить на блог');
@define('USERCONF_PASSWORD', 'Ваш пароль');
@define('USERCONF_PASSWORD_DESC', 'Пароль, который вы хотите использовать при авторизации');
@define('USERCONF_CHECK_PASSWORD', 'Старый пароль');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Если вы изменяете пароль в поле выше, то в этом поле вам нужно ввести ваш текущий пароль.');
@define('USERCONF_USERLEVEL', 'Уровень доступа');
@define('USERCONF_USERLEVEL_DESC', 'Этот уровень используется чтобы определить какой тип доступа у пользователя к блогу');
@define('USERCONF_GROUPS', 'Принадлежность к Группам');
@define('USERCONF_GROUPS_DESC', 'Этот пользователь принадлежит к следующим группам. Принадлежность к разным группам одновременно допустима.');
@define('USERCONF_EMAIL', 'Ваш адрес e-mail');
@define('USERCONF_EMAIL_DESC', 'Адрес вашей электронной почты');
@define('INSTALL_WYSIWYG', 'Использовать WYSIWYG-редактор');
@define('INSTALL_WYSIWYG_DESC', 'Желаете ли вы использовать WYSIWYG-редактор? (Работает в IE5+, частично в Mozilla 1.3+)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'Посылать уведомления о комментария?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Желаете ли вы получать уведомления, когда к вашим записям добавляются новые комментарии?');
@define('USERCONF_SENDTRACKBACKS', 'Посылать уведомления об обратных ссылках?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Желаете ли вы получать уведомления об обратных ссылках на ваши записи?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Права доступа: Добавление записей?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Разрешено ли этому пользователю публиковать записи?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Настройки по умолчанию для новых записей');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'Замечание: атрибут уровень пользователя используется теперь только для обратной совместимости со старыми плагинами и старой схемой авторизации. Права пользователей тепрь определяются принадлежностью к группам!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Вы не указали правильного текущего пароля, и потому вам не разрешено изменить пароль на новый. Ваши настройки не были сохранены.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Доступ к персональным настройкам');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Изменять уровни пользователей');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Изменять опцию "запретить создание записей"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Изменять разрешение на публикацию записей');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Доступ к конфигурации');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Доступ к конфигурации блога');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Администрировать записи');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Администрировать записи других пользователей');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Импортировать записи');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Администрировать категории');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Администрировать категории других пользователей');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Удалять категории');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Администрировать пользователей');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Удалять пользователей');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Изменять уровни пользователей');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Администрировать пользователей в вашей группе (группах)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Администрировать пользователей НЕ в вашей группе (группах)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Создавать новых пользователей');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Администрировать группы пользователей');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Администрировать плагины');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Администрировать плагины других пользователей');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Администрировать медиа-файлы');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Администрировать каталоги с медиа-файлами');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Добавлять новые медиа-файлы');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Удалять медиа-файлы');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Администрировать медиа-файлы других пользователей');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Просматривать медиа-файлы');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Сихнронизировать тамбнэйлы');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Администрировать комментарии');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Администрировать шаблоны дизайнов');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Просматривать медиа-файлы других пользователей');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Ваша запись была сохранена');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Древовидной структурой');
@define('COMMENTS_VIEWMODE_LINEAR', 'Как список');
@define('DISPLAY_COMMENTS_AS', 'Показывать комментарии');
@define('COMMENTS_DISABLE', 'Запретить добавление комментариев к этой записи');
@define('COMMENTS_ENABLE', 'Разрешить добавление комментариев к этой записи');
@define('COMMENTS_CLOSED', 'Автор не разрешил комментировать эту запись');
@define('VIEW_EXTENDED_ENTRY', 'Продолжить чтение "%s"');
@define('TRACKBACK_SPECIFIC', 'URI этой записи для создания обратных ссылок (trackback)');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'полный просмотр');
@define('VIEW_TOPICS', 'посмотр заголовков');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Заголовки');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Записи не были добавлены!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Запомнить информацию? ');
@define('SUBMIT_COMMENT', 'Отправить комментарий');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Подписаться на эту запись');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Ваш браузер не послал валидной строки HTTP-Referrer. Это может быть вызвано либо неправильно сконфигурированным браузером/прокси сервером, или атакой кросс-запросов Cross Site Request Forgery (XSRF), нацеленной на ваш сайт. Запрошенное вами действие не могло быть завершено.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Похоже, что комментарий #%s уже был подтверждён автором записи');
@define('COMMENT_EDITED', 'Выбранный комментарий был отредактирован');
@define('COMMENTS_WILL_BE_MODERATED', 'Добавленные комментарии должны будут пройти модерацию прежде, чем будут показаны.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Внимание: этот комментарий нуждается в подтверждении автором записи, прежде чем он может быть показан');
@define('DELETE_COMMENT', 'Удалить комментарий');
@define('APPROVE_COMMENT', 'Подтвердить комментарий');
@define('REQUIRES_REVIEW', 'Требует обзора (review)');
@define('COMMENT_APPROVED', 'Комментарий #%s был успешно подтверждён');
@define('COMMENT_DELETED', 'Комментарий #%s был успешно удалён');
@define('COMMENTS_MODERATE', 'Комментарии и обратные ссылки к этой записи требуют модерации');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Внимание: эта обратная ссылка нуждается в подтверждении, прежде чем она сможет быть показана');
@define('DELETE_TRACKBACK', 'Удалить обратную ссылку');
@define('APPROVE_TRACKBACK', 'Подвердить обратную ссылку');
@define('TRACKBACK_APPROVED', 'Обратная ссылка #%s была успешно подтверждена');
@define('TRACKBACK_DELETED', 'Обратная ссылка #%s была успешно удалена');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Верхний уровень');
@define('VIEW_COMMENT', 'Просмотреть комментарий');
@define('VIEW_ENTRY', 'Просмотреть запись');
@define('LINK_TO_ENTRY', 'Ссылка на запись');
@define('LINK_TO_REMOTE_ENTRY', 'Ссылка на удалённую (remote) запись');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Отправка обратной ссылки на URI %s...');
@define('TRACKBACK_SENT', 'Отправка обратной ссылки прошла успешно');
@define('TRACKBACK_FAILED', 'Отправка обратной ссылки не удалась: %s');
@define('TRACKBACK_NOT_FOUND', 'Не было найдено URI для обратной ссылки.');
@define('TRACKBACK_URI_MISMATCH', 'Автоматически найденный URI обратной ссылки не совпадает с URI, на который вы ссылаетесь.');
@define('TRACKBACK_CHECKING', 'Проверка <u>%s</u> на возможные обратные ссылки...');
@define('TRACKBACK_NO_DATA', 'Указанная страница не содержит данных');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Не была послана обратная ссылка: невозможно создать соединение к %s через порт %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Новый комментарий к записи, на которую вы подписаны - "%s"');
@define('SUBSCRIPTION_MAIL', "Добрый день %s,\n\nНовый комментарий был добавлен к записи, за которой вы следите на \"%s\", запись под названием \"%s\"\nИмя автора: %s\n\nВы можете найти запись здесь: %s\n\nВы можете отписаться от записи, проследовав по этой ссылке: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Добрый день %s,\n\nНовая обратная ссылка была добавлена к записи, за который вы следите на \"%s\", запись под названием \"%s\"\nИмя автора: %s\n\nВы можете найти запись здесь: %s\n\nВы можете отписаться от записи, проследовав по этой ссылке: %s\n");
@define('SIGNATURE', "\n-- \n%s работает на движке Serendipity.\nЛучший блог, какой можно найти, и вы тоже можете им воспользоваться.\nЗагляните на <https://s9y.org> чтобы узнать больше.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Новый комментарий был добавлен в вашем блоге "%s", к записи "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Новая обратная ссылка была создана к записи вашего блога под названием "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'У вас есть следующие варианты:');
@define('NEW_TRACKBACK_TO', 'Новая обратная ссылка была создана к');
@define('NEW_COMMENT_TO', 'Новый комментарий был добавлен к');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Не было найдено записей по завпросу %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'По вашему поиску %s найдено результатов:');
@define('SEARCH_TOO_SHORT', 'Ваш поисковй запрос должен быть диннее чем 3 символа. Вы можете использовать прибавление * к коротким словам, например: s9y* чтобы использовать поиск для коротких слов.');
@define('SEARCH_ERROR', 'Функция поиска не работает как ожидается. Свяжитесь с администратором этого блога: это может происходить из-за отсутствующих индексов в вашей базе данных. На MySQL системах ваш аккаунт базы данных должен иметь привилегии, чтобы выполнить следующий запрос: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Собственно ошибка, полученная от базы данных, была следующая: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Ваш комментарий ничего не содержал? Пожалуйста %sвернитесь%s и попытайтесь снова');
@define('COMMENT_NOT_ADDED', 'Ваш комментарий не смог быть добавлен, потому что эту запись запрещено комментировать. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Комментарии от');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Неверный синтаксис опции "%s". Нужно значение типа "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Показывает список категорий.');
@define('CATEGORIES_PARENT_BASE', 'Показывать только подкатегории...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Вы можете выбрать какую-нибудь категорию, чтобы показывались только её подкатегории.');
@define('CATEGORIES_HIDE_PARALLEL', 'Прятать категории, не входящие в дерево категорий');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Если вы хотите прятать категории, которые принадлежат другому дереву категорий, вам нужно включить эту опцию. Эта настройка имеет больше всего смысла, если используется вместе с мульти-блогами с помощью плагина "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Hide the selected parent category?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'If you restrict the listing of categories to a specific category, by default you will see that parent category within the output listing. If you disable this option, the parent category name will not be displayed.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Разрешить поддержку шаблонов Smarty?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Если эта опция включена, то плагин будет использовать возможности движка шаблонов Smarty для вывода списка категорий. Если вы включаете эту опцию, то внешни вид можно изменить в файле-шаблоне "plugin_categories.tpl". Включение этой опции повлияет на производительность, так что если вам не нужно подобное оформление списка категорий, оставьте её выключенной.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Показывать количество записей в каждой категории?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Разрешать посетителям выбирать сразу несколько категорий для отображения? '); @define('CATEGORIES_ALLOW_SELECT_DESC', 'Если эта опция включена, то отмечаемая кнопка будет расположена рядом с названием каждой категории в плагине боковой панели. Пользователи могут отмечать эти кнопки и видеть записи соответствующие их выбору.');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each category in this sidebar plugin. Users can check those boxes and then see entries belonging to their selection.');
@define('CATEGORIES_TO_FETCH', 'Категории для получения');
@define('CATEGORIES_TO_FETCH_DESC', 'Получить категории какого автора?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Показывает список авторов');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Показывать количество записей возле имени автора?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Если эта опция включена, то в скобках возле имени автора приводится общее число сделанных им записей.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Синхронизация');
@define('SHOWS_RSS_BLAHBLAH', 'Показывает ссылки на RSS-ленты для аггрегации вашего блога');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'лента %s');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 - комментарии');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID Feed который вы хотите добавить');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'Изображение для FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Имя изображения для отображения (или оставьте пустым для счетчика), расположенного на feedburner.com, например: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Заголовок для FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Название (если есть) для отображения рядом с изображением');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'Текст изображения для FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Текст (если есть) для отображения при наведении курсора на изображение');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('ARCHIVE_COUNT', 'Количество архивных разделов в списке');
@define('ARCHIVE_COUNT_DESC', 'Количество месяцев, недель или дней, архивы которых отображать');
@define('ARCHIVE_FREQUENCY', 'Частота разделов архива');
@define('ARCHIVE_FREQUENCY_DESC', 'Календарный интервал для создания    списка архивных разделов');
@define('BROWSE_ARCHIVES', 'Просмотр архивов по месяцам');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Показывать "Serendipity" как текст');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Покажет слова "Веблог Serendipity" как текст');
@define('POWERED_BY_SHOW_IMAGE', 'Показывать "Serendipity" и лого');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Показывает логотип Serendipity и ссылку');
@define('ADVERTISES_BLAHBLAH', 'Рекламирует происхождение вашего блога (ссылка на сайт Serendipity)');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Использовать https для входа в систему');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Позволяет ссылке на страницу входа в систему указывать на https-ресурс. Ваш веб-сервер должен поддерживать https чтобы эта опция могла работать!');
@define('SUPERUSER', 'Администрирование');
@define('SUPERUSER_OPEN_ADMIN', 'Перейти к администрированию');
@define('SUPERUSER_OPEN_LOGIN', 'Войти в систему');
@define('ALLOWS_YOU_BLAHBLAH', 'Ссылка в вашей боковой панели на главную страницу администрирования вашего блога');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Календарь');
@define('CALENDAR_BOW_DESC', 'День недели, который должен считаться началом недели. По умолчанию это понедельник.');
@define('QUICKJUMP_CALENDAR', 'Календарь');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Начало недели');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Включить поддержку API hook для этого плагина');
@define('CALENDAR_EXTEVENT_DESC', 'Если эта опция включена: вы можете использовать API hook для подсвечивания ваших событий в плагине календаря. Включайте эту опцию, только если у вас есть установленные плагины, которым нужна эта функциональность, потому что из-за этой опции снижается производительность плагина.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Поиск по записям');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Добавляет фрагмент HTML кода в вашу боковую панель');
@define('THE_NUGGET', 'Фрагмент HTML!');
@define('BACKEND_TITLE', 'Дополнительная информация в меню Настройки Плагинов');
@define('BACKEND_TITLE_FOR_NUGGET', 'Здесь вы можете определить произвольную строку которая будет отображаться в меню Настройки Плагинов в месте с описанием плагина – куска HTML кода. Если у вас много кусков HTML кода с пустым названием это поможет вам отличить один плагин от другого.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Показывать адреса как ссылки?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"нет": Все адреса веб-сайтов показаны как обычный текст чтобы избежать google спама. "да": Все адреса веб-сайтов показаны как гипер-ссылки. "По умолчанию": Использовать настройки глобальной конфигурации (рекомендуется).');
@define('HAVE_TO_BE_LOGGED_ON', 'Вы должны войти под каким-нибудь пользователем, чтобы иметь доступ к этой странице');
@define('WELCOME_TO_ADMIN', 'Добро пожаловать в раздел администрирования Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Short Comment');
@define('MEDIA_PROPERTY_COMMENT2', 'Long Comment');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Title');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ещё не установлен. Пожалуйста <a href="%s">проведите установку</a> прямо сейчас.');
@define('COMMENT_ADDED_CLICK', 'Кликните %sздесь, чтобы вернуться%s к комментариям, и %sздесь, чтобы закрыть%s это окно.');
@define('COMMENT_NOT_ADDED_CLICK', 'Кликните %sздесь, чтобы вернуться%s к комментариям, и %sздесь, чтобы закрыть%s это окно.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'Указанный URI превзошёл максимальный размер файла %s байт.');
@define('CLICK_FILE_TO_INSERT', 'Кликните на файл, который вы хотите вставить:');
@define('SELECT_FILE', 'Выберите файл для вставки');
@define('MANAGE_IMAGES', 'Работа с изображениями');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Или');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Внешние сервисы');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Общие возможности');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Полноценные модификации');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Views');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: работа с записями');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Редактор');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Работа с пользователями');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Мета информация');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Шаблоны');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Общие возможности');
@define('PLUGIN_GROUP_IMAGES', 'Изображения');
@define('PLUGIN_GROUP_ANTISPAM', 'Антиспам');
@define('PLUGIN_GROUP_MARKUP', 'Markup (Разметка)');
@define('PLUGIN_GROUP_STATISTICS', 'Статистика');
@define('IMPORT_WELCOME', 'Добро пожаловать в утилиту импорта данных Serendipity');
@define('USER_SELF_INFO', 'Вы вошли как пользователь %s (%s)');
@define('IMPORT_WHAT_CAN', 'Здесь вы сможете импортировать в вашу базу данных записи из других блогов и приложений');
@define('IMPORT_SELECT', 'Пожалуйста выберите программное обеспечение, из которого вы хотели бы импортировать данные');
@define('MANAGE_STYLES', 'Работа со стилями');
@define('SELECT_A_PLUGIN_TO_ADD', 'Выберите плагин для добавления');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Ниже приведён список установленных плагинов');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Отмена');
@define('DELETE_SELECTED_COMMENTS', 'Удалить отмеченные комментарии');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Найти файлы');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Ошибка: Старое имя файла не существует!');
@define('ERROR_SOMETHING', 'Ошибка: Что-то не так...');
@define('DIRECT_LINK', 'Прямая ссылка на эту запись');
@define('SELECT_TEMPLATE', 'Выберите стиль, который вы хотите использовать для вашего блога');
@define('DATABASE_ERROR', 'Ошибка serendipity: невозможно подключиться к базе данных - прекращение работы.');
@define('LIMIT_TO_NUMBER', 'Сколько заметок должно быть показано?');
@define('DIRECTORIES_AVAILABLE', 'В списке доступных каталогов вы можете кликнуть на любой каталог, чтобы создать в нём новый подкаталог.');
@define('CATEGORY_INDEX', 'Ниже вы видите список категорий, к которым вы можете отнести вашу запись');
@define('PAGE_BROWSE_PLUGINS', 'Страница %s из %s, всего %s плагинов.');
@define('CHARSET_NATIVE', 'Родная');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Интерфейс Serendipity XML-RPC API больше не входит в стандартную поставку из-за постоянных проблем с безопасностью этого API и не таким уж большим количеством людей, им пользующихся. Поэтому, для использования этого интерфейса, вам следует установить плагин XML-RPC. URL для использования в ваших приложениях НЕ ИЗМЕНИТСЯ - так что как только вы установите плагин, можно начинать пользоваться этим API.');
@define('AUTHORS_ALLOW_SELECT', 'Позволять посетителям просматривать записи нескольких авторов сразу?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Если эта опция включена, то в плагине боковой панели будут показаны чек-боксы возле имени каждого автора. Посетитель может выбрать нескольких авторов, и просмотреть записи, найденне согласно этому выбору.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
