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
@define('TIME', 'Время');
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
@define('DONE', 'Готово');
@define('TITLE', 'Заголовок');
@define('DESCRIPTION', 'Описание');
@define('PLACEMENT', 'Расположение');
@define('DELETE', 'Удалить');
@define('SAVE', 'Сохранить');
@define('UP', 'Вверх');
@define('DOWN', 'Вниз');
@define('PREVIOUS', 'Вперёд');
@define('NEXT', 'Назад');
@define('ENTRIES', 'Записи');
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
@define('DEBUG', 'Отладка');
@define('SUCCESS', 'Успешно!');
@define('COMMENTS', 'Комментарии');
@define('ADD_COMMENT', 'Добавить комментарий');
@define('NO_COMMENTS', 'Нет комментариев');
@define('POSTED_BY', 'Добавил ');
@define('ON', 'в');
@define('NO_CATEGORY', 'Без категории');
@define('CATEGORY', 'Категория');
@define('EDIT', 'Редактировать');
@define('GO', 'Выполнить');
@define('YES', 'Да');
@define('NO', 'Нет');
@define('NOT_REALLY', 'Не уверен...');
@define('DUMP_IT', 'Уверен!');
@define('IN', 'в категории');
@define('AT', 'в');
@define('LEFT', 'слева');
@define('RIGHT', 'справа');
@define('CENTER', 'по центру');
@define('ARCHIVES', 'Архивы');
@define('SUBSCRIBE', 'Подписаться');
@define('UNSUBSCRIBE', 'Отписаться');
@define('QUICKSEARCH', 'Быстрый поиск');
@define('TRACKBACKS', 'Обратные ссылки');
@define('TRACKBACK', 'Обратная ссылка');
@define('NO_TRACKBACKS', 'Нет обратных ссылок');
@define('PINGBACKS', 'Обратные вызовы');
@define('NO_PINGBACKS', 'Нет обратных вызовов');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Источник');
@define('EXCERPT', 'Выборка');
@define('TRACKED', 'Отслежен');
@define('USER', 'Пользователь');
@define('USERNAME', 'Имя пользователя');
@define('PASSWORD', 'Пароль');
@define('HIDDEN', 'спрятан');
@define('IMAGE', 'Изображение');
@define('VIDEO', 'Видео');
@define('AUTHOR', 'Автор');
@define('ENTRY', 'Запись');
@define('BLOG', 'Блог');
@define('VERSION', 'версия');
@define('INSTALL', 'Установить');
@define('REPLY', 'Ответить');
@define('SUBSCRIPTIONS', 'Подписки');
@define('SUBSCRIBED', 'Подписан');
@define('SUBSCRIBED_AT', 'Подписано в:');
@define('ERROR', 'Ошибка');
@define('FRONTEND', 'Внешний интерфейс (основной сайт)');
@define('BACKEND', 'Внутренний интерфейс (панель администрирования)');
@define('SUMMARY', 'Сводка');
@define('MORE', 'Больше');
@define('FORCE', 'Принудительно');
@define('UPLOAD', 'Выгрузить');
@define('DOWNLOAD', 'Загрузить');
@define('ADMIN', 'Администратор');
@define('ADMIN_FRONTPAGE', 'Начальная страница');
@define('QUOTE', 'Цитировать');
@define('NONE', 'Никакой');
@define('GROUP', 'Группа');
@define('AUTHORS', 'Авторы');
@define('UPGRADE', 'Обновить');
@define('NAVIGATION', 'Навигация');
@define('MOVE', 'Двигать');
@define('MOVE_UP', 'Двигать вверх');
@define('MOVE_DOWN', 'Двигать вниз');
@define('ALL_AUTHORS', 'Все авторы');
@define('PREVIOUS_PAGE', 'Предыдущая страница');
@define('NEXT_PAGE', 'Следующая страница');
@define('FIRST_PAGE', 'Первая страница');
@define('LAST_PAGE', 'Последняя страница');
@define('ALL_CATEGORIES', 'Все категории');
@define('LAST_UPDATED', 'Последнее обновление');
@define('IP_ADDRESS', 'IP-адрес');
@define('CHARSET', 'Кодировка');
@define('REFERER', 'Референт');
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
@define('RESET_FILTERS', 'Сбросить фильтры');
@define('TOGGLE_ALL', 'Раскрыть все разделы');
@define('TOGGLE_OPTION', 'Переключить опцию');
@define('IN_REPLY_TO', 'В ответ на');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Папка');
@define('BACK_TO_BLOG', 'Назад к блогу');
@define('HTML_NUGGET', 'Фрагмент HTML');
@define('TITLE_FOR_NUGGET', 'Заголовок Вашего фрагмента');
@define('COMMENT_ADDED', 'Ваш комментарий был успешно добавлен ');
@define('ENTRIES_FOR', 'Записи для %s');
@define('NO_ENTRIES_TO_PRINT', 'Здесь нет заметок...');
@define('COMMENT_DELETE_CONFIRM', 'Вы уверены, что хотите удалить комментарий #%d, созданный %s?');
@define('DELETE_SURE', 'Вы уверены, что хотите удалить полностью #%s?');
@define('MEDIA_FULLSIZE', 'Полный размер');
@define('SIDEBAR_PLUGIN', 'Плагин боковой панели');
@define('EVENT_PLUGIN', 'Плагин событий');
@define('PLUGIN_ITEM_DISPLAY', 'Где должен быть показан этот объект?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Только в расширенном тексте записи');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Только на странице обзора');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'В обоих случаях');
@define('DIRECTORY_WRITE_ERROR', 'Невозможно записать в папку %s. Проверьте права доступа к папке.');
@define('FILE_WRITE_ERROR', 'Невозможно записать в файл %s.');
@define('INCLUDE_ERROR', 'Ошибка serendipity: невозможно включить файл  %s - прекращение работы.');
@define('DO_MARKUP', 'Произвести трансформации разметок');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Формат даты');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Формат даты записи, с использованием переменных PHP-функции strftime(). (По умолчанию: "%s")');
@define('APPLY_MARKUP_TO', 'Применить разметку к %s');
@define('XML_IMAGE_TO_DISPLAY', 'Кпонка XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Ссылки на XML-ленты будут отмечены этим изображением. Оставьте поле пустым для картинки по умолчанию или введите \'none\' , чтобы не показывать кнопки вообще.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Кнопка подписки');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'Ссылки на подписку по электронной почте будут отмечены этим изображением. Оставьте поле пустым для картинки по умолчанию или введите \'none\' , чтобы не показывать кнопки вообще');
@define('DELETING_FILE', 'Удаление файла %s...');
@define('SETTINGS_SAVED_AT', 'Новые настройки были сохранены в %s');
@define('INVERT_SELECTIONS', 'Инвертировать отмеченное');

@define('PERSONAL_SETTINGS', 'Личные настройки');
@define('DO_MARKUP_DESCRIPTION', 'Применить к тексту трансформацию разметки (смайлы, разметка ссылок через *, /, _, ...).Отключение этой опции сохранит html код.');
@define('BASE_DIRECTORY', 'Главная папка');
@define('PERM_READ', 'Доступ на чтение');
@define('PERM_WRITE', 'Доступ на запись');
@define('PERM_DENIED', 'Доступ запрещён');
@define('CURRENT_AUTHOR', 'Текущий автор');
@define('PLUGIN_ACTIVE', 'Активно');
@define('PLUGIN_INACTIVE', 'Неактивно');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Закладка');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Добавьте эту ссылку в закладки, а затем используйте её на любой странице, о которой Вы хотите написать в блоге, чтобы быстро получить доступ к своему блогу Serendipity.');
@define('SET_TO_MODERATED', 'Модерировать');
@define('TOGGLE_SELECT', 'Пометить для выбора');
@define('ENTRY_METADATA', 'Метаданные записи');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Установка Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Добро пожаловать в установку Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Сначала мы проведём анализ Вашей текущей версии и попытаемся найти проблемы совместимости');
@define('ERRORS_ARE_DISPLAYED_IN', 'Ошибки обозначены как %s, рекомендации как %s, а успешно пройденные проверки - как %s');
@define('RED', 'красный');
@define('YELLOW', 'жёлтый');
@define('GREEN', 'зелёный');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - предустановочный отчёт');
@define('INTEGRITY', 'Проверка целостности установки');
@define('PHP_INSTALLATION', 'Установка PHP');
@define('INSTALLER_KEY', 'Ключ');
@define('INSTALLER_VALUE', 'Значение');
@define('OPERATING_SYSTEM', 'Операционная система');
@define('WEBSERVER_SAPI', 'SAPI веб-сервера');
@define('PHPINI_CONFIGURATION', 'Конфигурация php.ini');
@define('RECOMMENDED', 'Рекомендуемое');
@define('ACTUAL', 'Актуальное');
@define('PERMISSIONS', 'Права доступа');
@define('INSTALLER_CLI_TOOLS', 'Инструменты командной строки на стороне сервера');
@define('INSTALLER_CLI_TOOLNAME', 'Инструмент командной строки');
@define('INSTALLER_CLI_TOOLSTATUS', 'Исполняемый?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Права доступа можно изменить используя следующую комманду командной строки: `<em>%s</em>` на не прошедшей проверку папке или установить их, используя FTP-клиент');
@define('PROBLEM_DIAGNOSTIC', 'Из-за проблем, найденных во время диагностики, установка не может быть продолжена, пока указанные выше ошибки не будут исправлены');
@define('SELECT_INSTALLATION_TYPE', 'Выберите, какой тип установки Вы хотите использовать');
@define('RECHECK_INSTALLATION', 'Снова проверить установку');
@define('SIMPLE_INSTALLATION', 'Простая установка');
@define('EXPERT_INSTALLATION', 'Продвинутая установка');
@define('COMPLETE_INSTALLATION', 'Полная установка');
@define('WONT_INSTALL_DB_AGAIN', 'не устанавливать базу данных снова');
@define('THEY_DO', 'База существует');
@define('THEY_DONT', 'База отсутствует');
@define('CHECK_DATABASE_EXISTS', 'Проверка, существует ли база данных. Если Вы увидите ошибку запроса к базе данных ниже, не обращайте внимания...');
@define('CREATE_DATABASE', 'Создание настроек базы данных по умолчанию...');
@define('ATTEMPT_WRITE_FILE', 'Попытка записать файл %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Создание основного автора \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Установка шаблона по умолчанию');
@define('INSTALLING_DEFAULT_PLUGINS', 'Установка плагинов по умолчанию');
@define('SERENDIPITY_INSTALLED', 'Serendipity был успешно установлен.');
@define('VISIT_BLOG_HERE', 'Перейти на Ваш новый блог');
@define('THANK_YOU_FOR_CHOOSING', 'Спасибо за Ваш выбор Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Во время установки была обнаружена ошибка');
@define('INSTALL_DBPREFIX_INVALID', 'Префикс имени таблицы базы данных не может быть пустым и может содержать только буквы, цифры и символ нижнего подчёркивания.');
@define('POWERED_BY', 'Сделано с помощью');
@define('ADMIN_FOOTER_POWERED_BY', 'Сделано с помощью Serendipity %s и PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Автор');
@define('USERLEVEL_CHIEF_DESC', 'Автор-редактор');
@define('USERLEVEL_ADMIN_DESC', 'Администратор');
@define('WWW_USER', 'Изменить www на имя пользователя, под которым запущен apache (например, nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Введённые Вами пароли для администратора не совпадают.');
@define('DIRECTORY_CREATE_ERROR', 'Папка %s не существует и не может быть создана. Пожалуйста, создайте её вручную.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Невозможно запустить файл %s');
@define('FILE_CREATE_YOURSELF', 'Пожалуйста, создайте файл вручную или проверьте права доступа');
@define('COPY_CODE_BELOW', '<br />* Просто скопируйте код ниже и поместите его в %s в Вашей папке %s:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'После того, как Вы это сделаете, нажмите кнопку "Обновить страницу" Вашего браузера.');
@define('ERROR_TEMPLATE_FILE', 'Невозможно открыть файл шаблона, пожалуйста, обновите Serendipity!');
@define('HTACCESS_ERROR', 'Чтобы проверить настройки Вашего веб-сервера, Serendipity необходимо иметь права записи в файл ".htaccess". Эта операция не удалась из-за недостаточных прав доступа к файлу. Пожалуйста, измените эти права командой типа: <br />&nbsp;&nbsp;%s<br />и перезагрузите эту страницу.');
@define('EMPTY_SETTING', 'Вы не установили допустимое значение для "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Необходимо только тогда, когда Вы планируете использовать плагин Spartacus для удалённой загрузки плагинов)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity обнаружил, что Ваша конфигурация установлена для версии %s, в то время как сами файлы движка Serendipity соответствуют версии %s, Вам необходимо произвести обновление! <a href="%s">Нажмите здесь, чтобы продолжить</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Привет и добро пожаловать в агента обновления Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Я был создан, чтобы помочь Вам обновить Ваш веблог Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Вы видите это сообщение, потому что Вы только что установили Serendipity %s, но не обновили Вашу базу данных, чтобы соответствовать этой версии');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Обновления базы данных (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Я нашёл следующие .sql файлы, которые должны быть выполнены перед тем, как Вы сможете продолжить работу с Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Специфичные для этой версии действия');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Не было найдено действий, специфичных для этой версии');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Вы хотите, чтобы я произвёл эти действия прямо сейчас?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Нет, я произведу их самостоятельно и вручную');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Да, пожалуйста');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Похоже на то, что Вам не нужно производить никаких обновлений');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Считайте, что Ваш движок Serendipity обновлён');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Вы проигнорировали этап автоматического обновления Serendipity, пожалуйста, проследите, чтобы Ваша база данных была корректно обновлена и указанные действия были произведены вручную');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Ваш движок Serendipity теперь обновлён до версии %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Вы можете вернуться к Вашему блогу, кликнув %sздесь%s');
@define('ADMIN_ENTRIES', 'Записи');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Не удалось подключиться к базе данных MySQL : %s.');
@define('COULDNT_SELECT_DB', 'Не удалось выбрать базу данных: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Не удалось выбрать информацию о пользователе: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Не удалось выбрать информацию о категории: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Не удалось выбрать информацию о записи: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Не удалось выбрать информацию о комментарии: %s.');
@define('MYSQL_REQUIRED', 'Для выполнения этого действия необходим MySQL.');
@define('CREATE_AUTHOR', 'Создать автора \'%s\'.');
@define('CREATE_CATEGORY', 'Создать категорию \'%s\'.');
@define('MT_DATA_FILE', 'Файл данных Movable Type');
@define('INSTALL_DBPORT', 'Порт базы данных');
@define('INSTALL_DBPORT_DESC', 'Порт, используемый для подключения к Вашему серверу с базой данных');
@define('IMPORT_PLEASE_ENTER', 'Пожалуйста, введите запрашиваемые ниже данные');
@define('IMPORT_NOW', 'Начать импорт');
@define('IMPORT_STARTING', 'Запуск процедуры импортирования...');
@define('IMPORT_FAILED', 'Импорт данных не удался');
@define('IMPORT_DONE', 'Импорт данных успешно завершён');
@define('IMPORT_WEBLOG_APP', 'Приложение');
@define('IMPORT_NOTES', 'Напоминание:');
@define('IMPORT_STATUS', 'Статус после импорта');
@define('RSS_IMPORT_WPXRSS', 'RSS-импорт расширенного WordPress (WordPress eXtended), требуется PHP5, а также может потребовать много памяти');
@define('RSS_IMPORT_BODYONLY', 'Поместить весь импортированный текст в раздел "текст записи" и не создавать раздел "дополнительный текст записи".');
@define('IMPORT_GENERIC_RSS', 'Обычный импорт RSS');
@define('ACTIVATE_AUTODISCOVERY', 'Посылать обратные ссылки на гиперссылки, найденные в записи');
@define('RSS_IMPORT_CATEGORY', 'Использовать эту категорию для импортированных записей с несуществующими в Вашей базе категориями');
@define('IMPORT_WP_PAGES', 'Извлекать также вложения и статические страницы как обычные записи в блоге?');
@define('DOCUMENT_NOT_FOUND', 'Документ %s не найден.');
@define('CONVERT_HTMLENTITIES', 'Попытаться автоматически конвертировать HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Администрирование Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Похоже, что Вы ввели неверное имя пользователя или пароль');
@define('PLEASE_ENTER_CREDENTIALS', 'Пожалуйста, введите Ваши имя пользователя и пароль.');
@define('AUTOMATIC_LOGIN', 'Запомнить эту информацию');
@define('MAIN_MENU', 'Главное меню');
@define('MENU_PERSONAL', 'Личные настройки');
@define('MENU_DASHBOARD', 'Панель инструментов');
@define('MENU_ACTIVITY', 'Ативность');
@define('MENU_SETTINGS', 'Настройки');
@define('MENU_TEMPLATES', 'Шаблоны');
@define('MENU_PLUGINS', 'Плагины');
@define('MENU_USERS', 'Пользователи');
@define('MENU_GROUPS', 'Группы');
@define('MENU_MAINTENANCE', 'Обслуживание');
@define('MEDIA', 'Медиа-файлы');
@define('MEDIA_LIBRARY', 'Библиотека файлов');
@define('ADD_MEDIA', 'Добавить медиа-файл');
@define('MANAGE_DIRECTORIES', 'Работа с папками');
@define('CONFIGURATION', 'Конфигурация');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'Доступна новая стабильная версия Serendipity: ');
@define('UPDATE_FAILMSG', 'Проверка наличия новой версии Serendipity завершилась ошибкой. Это может происходить из-за недоступности ресурса https://raw.github.com/s9y/Serendipity/master/docs/RELEASE, из-за блокировки Вашим сервером исходящих подключений либо из-за других проблем с подключением.');
@define('FURTHER_LINKS', 'Дополнительные ссылки');
@define('UPDATE_FAILACTION', 'Отключить автоматическую проверку наличия новой версии');
@define('DASHBOARD_ENTRIES', 'Записи');
@define('FURTHER_LINKS_S9Y', 'Домашняя страница Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Документация Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Официальный блог');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Форумы Serendipity');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Опубликовать эту запись сейчас (установятся текущие дата и время)');
@define('ENTRY_PUBLISHED', 'Запись #%s опубликована');
@define('PUBLISH_ERROR', 'Ошибка публикации записи:');
@define('PUBLISHED', 'Опубликовано');
@define('JS_FAILURE', 'JavaScript-библиотека Serendipity не может быть загружена. Это может случиться из-за ошибок PHP или плагинов либо даже из-за неправильно сформированного кэша браузера. Чтобы точно узнать ошибку, пожалуйста, откройте страницу <a href="%1$s">%1$s</a> в Вашем браузере и проверьте сообщения об ошибках.');
@define('ENTRY_PUBLISHED_FUTURE', 'Эта запись ещё не опубликована');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Веб-сайт');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Локальная документация');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'История версий');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Авторское право');
@define('SIDEBAR_PLUGINS', 'Плагины боковых панелей');
@define('EVENT_PLUGINS', 'Плагины событий');
@define('CONFIGURE_PLUGINS', 'Настройка плагинов');
@define('PLUGIN_ALREADY_INSTALLED', 'Плагин уже установлен и не поддерживает множественную установку ("стекируемый").');
@define('UNMET_REQUIREMENTS', 'Требования не выполнены: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Установить новый плагин боковой панели');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Установить новый плагин событий');
@define('UPGRADE_TO_VERSION', 'Произвести обновление до версии %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Нажмите здесь, чтобы установить плагин %s');
@define('ALREADY_INSTALLED', 'Уже установлен');
@define('PLUGIN_AVAILABLE_COUNT', 'Всего плагинов: %d.');
@define('NO_UPDATES', 'Нет доступных обновлений плагинов');
@define('PLUGIN_ALL_UPDATED', 'Все плагины обновлены');
@define('PLUGIN_LINK_SPARTACUS', 'Подробнее');
@define('PLUGIN_SOURCE_BUNDLED', 'встроенный основной плагин');
@define('PLUGIN_SOURCE_LOCAL', 'установленный локально');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Редактировать записи');
@define('EDIT_ENTRY', 'Редактировать запись');
@define('ENTRY_STATUS', 'Статус записи');
@define('DRAFT', 'Черновик');
@define('PUBLISH', 'Опубликовать');
@define('CONTENT', 'Содержимое');
@define('ENTRIES_PER_PAGE', 'записей на странице');
@define('SCHEDULED', 'Запланировано');
@define('STICKY_POSTINGS', 'Закреплённые записи');
@define('PAGE_BROWSE_ENTRIES', 'Страница %s из %s, всего записей: %s');
@define('FIND_ENTRIES', 'Найти записи');
@define('RIP_ENTRY', 'Запись #%s удалена');
@define('NEW_ENTRY', 'Новая запись');
@define('EDITOR_TAGS', 'Теги');
@define('ENTRY_BODY', 'Текст записи');
@define('EXTENDED_BODY', 'Дополнительный текст');
@define('IFRAME_SAVE', 'Serendipity сейчас сохраняет Вашу запись, отправляет email подписчикам, создаёт обратные ссылки и выполняет возможные XML-RPC вызовы. Это займёт немного времени.');
@define('IFRAME_SAVE_DRAFT', 'Черновик этой записи сохранён');
@define('IFRAME_PREVIEW', 'Serendipity обрабатывает предпросмотр для Вашей записи...');
@define('IFRAME_WARNING', 'Ваш браузер не поддерживает принцип iframes. Пожалуйста, откройте Ваш serendipity_config.inc.php и установите значение переменной $serendipity[\'use_iframe\'] как FALSE.');
@define('DATE_INVALID', 'Внимание: дата, указанная Вами, неверна. Она должна быть указана в формате YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Дополнительные опции');
@define('TOGGLE_VIEW', 'Переключить режим отображения категорий');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Эта ссылка не предназначена для того, чтобы по ней нажимали. Она содержит специальный URI для обратных ссылок. Вы можете использовать этот URI для проверки и создания обратных ссылок на эту запись. Чтобы скопировать ссылку, нажмите на ней правой кнопкой мышки и выберите "Скопировать ссылку" в Internet Explorer или "Скопировать местоположение ссылки" в Mozilla.');
@define('RESET_DATE', 'Сбросить дату');
@define('RESET_DATE_DESC', 'Нажмите сюда, чтобы установить дату текущим временем');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Работа с пользователями');
@define('CREATE_NEW_USER', 'Создать нового пользователя');
@define('CREATE_NOT_AUTHORIZED', 'Вы не можете редактировать пользователей того же уровня доступа, что и Ваш собственный');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Вы не можете создать пользователей с уровнем доступа выше Вашего собственного');
@define('CREATED_USER', 'Новый пользователь %s был успешно создан');
@define('MODIFIED_USER', 'Свойства пользователя %s были изменены');
@define('USER_LEVEL', 'Уровень пользователя');
@define('WARNING_NO_GROUPS_SELECTED', 'Внимание: Вы не установили членство ни в одной группе. Это фактически вывело бы Вас из системы управления группами пользователей, и, таким образом, Ваше членство в группах не изменилось бы.');
@define('DELETE_USER', 'Вы собираетесь удалить пользователя #%d %s. Вы уверены? Эта операция запретит отображение любых добавленных им записей.');
@define('DELETED_USER', 'Пользователь #%d %s удалён.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Редактировать группы');
@define('DELETED_GROUP', 'Группа #%d %s удалена.');
@define('CREATED_GROUP', 'Новая группа %s была создана');
@define('MODIFIED_GROUP', 'Настройки группы %s были изменены');
@define('CREATE_NEW_GROUP', 'Создать новую группу');
@define('DELETE_GROUP', 'Вы собираетесь удалить группу #%d %s. Вы уверены?');
@define('GROUP_NAME_DESC', "Используйте имя в верхнем регистре, например 'EXAMPLE_GROUP', но не как постоянное имя группы 'USERLEVEL_XYZ'.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Найти комментарии');
@define('COMMENTS_FILTER_SHOW', 'Показывать');
@define('COMMENTS_FILTER_ALL', 'Все');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Только подтверждённые');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Ожидающие подтверждения');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Ожидающие подтверждения пользователя');
@define('COMMENT_NOT_DELETED', 'Комментарий #%s не может быть удалён.');
@define('COMMENTS_DELETE_CONFIRM', 'Вы уверены, что хотите удалить отмеченные комментарии?');
@define('PAGE_BROWSE_COMMENTS', 'Страница %s из %s, всего комментариев:  %s');
@define('COMMENT_IS_DELETED', '(Комментарий удалён)');
@define('COMMENT_MODERATED', 'Комментарий #%s был успешно помечен для модерации');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Подписано');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Изменить подписки');
@define('SUBSCRIPTION_ENTRY', 'Подписки на записи');
@define('SUBSCRIPTION_TYPE', 'Тип подписки');
@define('SUBSCRIPTION_TIME', 'Подписано в');
@define('SUBSCRIPTION_STATE', 'Состояние подписки');
@define('SUBSCRIPTION_BLOG', 'Подписка на блог');
@define('SUBSCRIPTION_AUTHOR', 'Подписка на автора');
@define('SUBSCRIPTION_CATEGORY', 'Подписка на категорию');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'Нет подписок для отображения');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Страница %s из %s, всего подписок: %s');
@define('OPTIN_PENDING', 'Ожидающие подписки');
@define('RIP_SUB', 'Подписка #%s удалена.');
@define('FIND_SUBSCRIPTIONS', 'Найти подписки');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Данные о категории сохранены');
@define('CATEGORY_ALREADY_EXIST', 'Категория с таким именем "%s" уже существует');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Категория #%s удалена. Старые записи перемещены в категорию #%s');
@define('CATEGORY_DELETED', 'Категория #%s удалена.');
@define('INVALID_CATEGORY', 'Не было указано категории для удаления');
@define('EDIT_THIS_CAT', 'Редактировать "%s"');
@define('CATEGORY_REMAINING', 'Удалить данную категорию и установить для всех её записей следующую категорию');
@define('PARENT_CATEGORY', 'Главная категория');
@define('CATEGORY_HIDE_SUB', 'Скрывать публикации, сделанные в подкатегориях?');
@define('CATEGORY_HIDE_SUB_DESC', 'По умолчанию, когда Вы просматриваете категорию, отображаются также записи из любой подкатегории. Если эта опция включена, отображаются только публикации из выбранной в данный момент категории.');
@define('CREATE_NEW_CAT', 'Создать новую категорию');
@define('ALREADY_SUBCATEGORY', '%s уже является подкатегорией %s.');
@define('NO_CATEGORIES', 'Без категорий');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Не удается сравнить контрольные суммы! (Отсутствует checksums.inc.php в главной папке)');
@define('CHECKSUMS_PASS', 'Все необходимые файлы проверены.');
@define('CHECKSUM_FAILED', '%s повреждён или изменён: неудачная проверка');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'Нет файлов, доступных для очистки.');
@define('CLEANCOMPILE_TITLE', 'Очистить кэш шаблонов');
@define('CLEANCOMPILE_INFO', 'Это приведёт к удалению всех скомпилированных файлов шаблонов текущего активного шаблона. Скомпилированные шаблоны будут автоматически воссозданы по требованию Smarty.');
@define('IMPORT_ENTRIES', 'Импортировать записи');
@define('EXPORT_ENTRIES', 'Экспортировать записи');
@define('EXPORT_FEED', 'Экспортировать полную RSS-ленту');
@define('CREATE_THUMBS', 'Создать миниатюры заново');
@define('WARNING_THIS_BLAHBLAH', "ВНИМАНИЕ:\\nЭта операция может занять длительное время, если есть много изображений без миниатюр.");
@define('SYNC_OPTION_LEGEND', 'Опции синхронизации миниатюр');
@define('SYNC_OPTION_KEEPTHUMBS', 'Сохранить все существующие миниатюры');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Сохранить существующие миниатюры только в том случае, если они имеют правильный размер');
@define('SYNC_OPTION_DELETETHUMBS', 'Восстановить все миниатюры');
@define('MAINTENANCE_MODE', 'Режим обслуживания');
@define('MAINTENANCE_MODE_DESC', 'Активировать режим обслуживания, чтобы предотвратить доступ пользователей, которые не вошли в систему.');
@define('MAINTENANCE_MODE_WARNING', "Не выходите из системы, так как Вы не сможете снова войти в систему до истечения срока действия режима обслуживания!");
@define('MAINTENANCE_MODE_DURATION', 'Длительность (в часах):');
@define('MAINTENANCE_MODE_TIME', 'Будет активно до');
@define('MAINTENANCE_MODE_ACTIVATE', 'Активировать');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Деактивировать');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' был установлен Вашим шаблоном по умолчанию');
@define('WARNING_TEMPLATE_DEPRECATED', 'Внимание: используемый Вами шаблон использует неполный метод создания шаблонов, произведите обновление, если это возможно ');
@define('STYLE_OPTIONS_NONE', 'Эта тема/стиль не имеют особых опций. Чтобы узнать, как в Вашем шаблоне можно задать параметры, ознакомьтесь с технической документацией на www.s9y.org в разделе "Настройка параметров темы".');
@define('STYLE_OPTIONS', 'Опции темы/стиля');
@define('CURRENT_TEMPLATE', 'Текущий шаблон');
@define('CUSTOM_ADMIN_INTERFACE', 'Доступен пользовательский интерфейс администратора');
@define('CUSTOM_CONFIG', 'Пользовательский файл конфигурации');
@define('TEMPLATE_INFO', 'Показать информацию о шаблоне');
@define('AVAILABLE_TEMPLATES', 'Доступные шаблоны');
@define('THEMES_PREVIEW_BLOG', 'Смотрите демонстрацию на blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Использовать этот стиль');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Проверить и сохранить');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Убрать выделенные плагины');
@define('SAVE_CHANGES_TO_LAYOUT', 'Сохранить изменения');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Синхронизация базы данных с каталогом изображений');
@define('SYNC_DONE', 'Готово! (Синхронизировано изображений: %s).');
@define('RESIZE_BLAHBLAH', '<b>Изменить размеры %s</b>');
@define('ORIGINAL_SIZE', 'Оригинальный размер: <i>%sx%s</i> пикселей');
@define('RESIZING', 'Изменение размера');
@define('RESIZE_DONE', 'Готово! (Изменено изображений: %s).');
@define('KEEP_PROPORTIONS', 'Сохранять пропорции');
@define('REALLY_SCALE_IMAGE', 'Вы уверены, что хотите изменить размер изображения? Эта операция необратима!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Здесь Вы можете изменить размер изображения. Если Вы хотите изменить размер пропорционально, просто введите значение в одном из двух полей и нажмите клавишу Tab - второе поле будет заполнено автоматически с учётом пропорций изображения.</p>');
@define('MEDIA_RESIZE_EXISTS', 'Размер файла уже существует!');
@define('NEWSIZE', 'Новый размер: ');
@define('SCALING_IMAGE', 'Изменение размера %s на %s x %s точек');
@define('MEDIA_DIRECTORY_MOVED', 'Папка и файлы были успешно перемещены в %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Папка и файлы не могут быть перемещены в %s!');
@define('DIRECTORY_INFO', 'Информация о папке');
@define('DIRECTORY_INFO_DESC', 'Папки отражают название их физической папки. Если Вы хотите изменить или переместить папки, содержащие элементы, у Вас есть два варианта. Либо создайте папку или подпапку, которая нужна, затем переместите элементы в новую папку через медиа-библиотеку, а затем удалите там пустую старую папку. Или полностью измените всю старую папку с помощью кнопки "Редактировать папку" ниже и переименуйте её так, как Вам необходимо (существующая подпапка/ + новое имя). Это приведёт к перемещению всех папок и элементов и изменению ссылающихся записей блога.');
@define('DIRECTORY_CREATED', 'Папка <strong>%s</strong> была успешно создана.');
@define('PARENT_DIRECTORY', 'Главная папка');
@define('CONFIRM_DELETE_DIRECTORY', 'Вы уверены, что хотите удалить всё содержимое папки %s?');
@define('ERROR_NO_DIRECTORY', 'Ошибка: папка %s не существует');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Не удалось удалить не пустую папку. Поставьте галочку "Принудительное удаление", если Вы хотиле удалить все файлы из этой папки, и попробуйте удалить папку снова. В папке найдены файлы:');
@define('DIRECTORY_DELETE_FAILED', 'Не удалось удалить папку %s. Проверьте права доступа или сообщения об ошибках выше.');
@define('DIRECTORY_DELETE_SUCCESS', 'Папка %s успешно удалена.');
@define('CHECKING_DIRECTORY', 'Проверка файлов в папке %s');
@define('DELETE_DIRECTORY', 'Удалить папку');
@define('DELETE_DIRECTORY_DESC', 'Вы собираетесь удалить папку, в которой находятся медиа-файлы, возможно, они используются в каких-то записях.');
@define('FORCE_DELETE', 'Удалить ВСЕ файлы в этой папке, включая те, которые неизвестны Serendipity');
@define('CREATE_DIRECTORY', 'Создать папку');
@define('CREATE_NEW_DIRECTORY', 'Создать новую папку');
@define('CREATE_DIRECTORY_DESC', 'Тут Вы можете создать новую папку, чтобы поместить туда медиа-файлы. Выберите имя папки и, опционально, имя родительской папки.');
@define('ABOUT_TO_DELETE_FILE', 'Вы собираетесь удалить <b>%s</b><br />Если Вы используете этот файл в каких-то Ваших записях, это действие сделает ссылки или изображения в них недоступными.<br />Вы уверены, что хотите продолжить?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Ошибка: файл уже существует!');
@define('REMOTE_FILE_INVALID', 'Указанный URL-адрес, по-видимому, является локальным, и его получение запрещено. Вы можете разрешить это, установив опцию "Разрешить получать данные из локальных URL-адресов" в конфигурации Вашего блога.');
@define('FILE_NOT_FOUND', 'Невозможно найти файл <b>%s</b>, может быть, он уже был удалён?');
@define('ERROR_FILE_FORBIDDEN', 'У Вас нет прав закачивать файлы с активным содержанием');
@define('REMOTE_FILE_NOT_FOUND', 'Файл не был найден на удалённом сервере. Вы уверены, что эта ссылка верна? URL: <b>%s</b>');
@define('FILE_FETCHED', '%s скачан и сохранён как %s');
@define('FILE_UPLOADED', 'Файл %s успешно загружен на сервер как %s');
@define('DELETE_FILE_FAIL', 'Не удалось удалить файл <b>%s</b>');
@define('DELETE_FILE', 'Удалён файл <b>%s</b>');
@define('FOUND_FILE', 'Найден новый/изменённый файл: %s.');
@define('FILENAME_REASSIGNED', 'Автоматически назначенное новое имя файла: %s');
@define('ERROR_FILE_EXISTS', 'Ошибка: новое имя файла уже используется, пожалуйста, выберите другое!');
@define('ABOUT_TO_DELETE_FILES', 'Вы собираетесь удалить сразу несколько файлов.<br />Если Вы используете их в некоторых своих записях, это приведет к появлению неактивных ссылок или изображений<br />Вы уверены, что хотите продолжить?<br /><br />');
@define('MEDIA_HOTLINKED', 'Привязанные изображения');
@define('EDITOR_NO_TAGS', 'Нет тегов');
@define('ENTER_NEW_NAME', 'Введите новое имя для: ');
@define('MEDIA_PROPERTIES_DONE', 'Свойства #%d изменены.');
@define('MULTICHECK_NO_ITEM', 'Элементы не выбраны, пожалуйста, выберите хотя бы один. <a href="%s">Вернуться на предыдущую страницу</a>.');
@define('MULTICHECK_NO_DIR', 'Папка не выбрана, пожалуйста, выберите хотя бы одну. <a href="%s">Вернуться на предыдущую страницу</a>.');
@define('ADDING_IMAGE', 'Добавление изображения...');
@define('THUMB_CREATED_DONE', 'Миниатюра успешно создана.');
@define('THUMBNAIL_USING_OWN', '%s будет своей собственной миниатюрой, так как размеры изображения уже достаточно малы.');
@define('THUMBNAIL_FAILED_COPY', 'Предполагалось использование %s как его собственную миниатюру, но не удалось скопировать файл!');
@define('DELETE_THUMBNAIL', 'Удалён файл с миниатюрой <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Произошла неизвестная ошибка, файл не был загружен. Возможно, размер Вашего файл превысил допустимый максимальный размер, разрешённый на Вашем сервере. Свяжитесь с Вашим провайдером или отредактируйте вручную Ваш файл php.ini, чтобы позволить загрузку на сервер файлов большего размера.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Ошибка: Вы не можете выгружать файлы более %s байтов!');
@define('MEDIA_UPLOAD_DIMERROR', 'Ошибка: Вы не можете выгружать файлы изображений более %s x %s пикселей!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Привязка файла <br /> завершена.');
@define('DELETE_HOTLINK_FILE', 'Удалён привязанный файл с именем <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Невозможно выполнить: "%s", ошибка: %s, возвращённая переменная: %d');
@define('SKIPPING_FILE_EXTENSION', 'Файл пропущен: нет расширения у файла %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Файл пропущен: %s не читается.');
@define('MEDIA_RENAME_FAILED', 'Переименование не удалось!');
@define('PERM_SET_CHILD', 'Установить одинаковые разрешения для всех дочерних папок');
@define('TIMESTAMP_RESET', 'Временная метка была сброшена на текущее время.');
@define('CURRENT_TAB', 'Текущая вкладка: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'В этой записи я хочу использовать миниатюру.');
@define('I_WANT_BIG_IMAGE', 'В этой записи я хочу использовать изображение оригинальных размеров.');
@define('I_WANT_NO_LINK', ' Я хочу, чтобы это было изображениe');
@define('I_WANT_IT_TO_LINK', 'Я хочу, чтобы это была ссылка на вот этот url:');
@define('MEDIA_ALT', 'Атрибут ALT (изображение или краткое описание)');
@define('MEDIA_TITLE', 'Атрибут TITLE (будет отображаться при наведении курсора мыши)');
@define('IMAGE_SIZE', 'Размер изображения');
@define('IMAGE_ALIGNMENT', 'Выравнивание изображения');
@define('ALIGN_TOP', 'Вверх');
@define('ALIGN_LEFT', 'Влево');
@define('ALIGN_RIGHT', 'Вправо');
@define('IMAGE_AS_A_LINK', 'Вставка изображения');
@define('MEDIA_TARGET', 'Цель для этой ссылки');
@define('MEDIA_TARGET_JS', 'Всплывающее окно (через JavaScript, адаптивный размер)');
@define('MEDIA_ENTRY', 'Изолированный вход');
@define('MEDIA_TARGET_BLANK', 'Всплывающее окно (через target=_blank)');
@define('YOU_CHOSE', 'Вы выбрали %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Повернуть изображение на 90 градусов против часовой стрелки');
@define('IMAGE_ROTATE_RIGHT', 'Повернуть изображение на 90 градусов по часовой стрелке');
@define('MEDIA_RENAME', 'Переименовать этот файл');
@define('THUMBNAIL_SHORT', 'Миниатюра');
@define('ORIGINAL_SHORT', 'Оригинал');
@define('SORT_ORDER_NAME', 'По имени файла');
@define('SORT_ORDER_EXTENSION', 'По расширению файла');
@define('SORT_ORDER_SIZE', 'По размеру файла');
@define('SORT_ORDER_WIDTH', 'По ширине изображения');
@define('SORT_ORDER_HEIGHT', 'По высоте изображения');
@define('SORT_ORDER_DATE', 'По дате загрузки');
@define('SHOW_METADATA', 'Показать метаданные');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Добавление файла в Вашу медиа-коллекцию:</b><p>Здесь Вы можете загрузить на сервер Ваши медиа-файлы, или указать, откуда их можно скачать в сети! Если у Вас нет подходящих изображений, <a href="https://images.google.com/" target="_blank">поищите с помощью google</a>, что-нибудь да найдётся, очень часто результаты полезны и забавны :)</p><p><b>Выберите способ:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Введите URL файла,<br>который нужно скачать:');
@define('ENTER_MEDIA_UPLOAD', 'Выберите файл, который<br>Вы хотите выгрузить на сервер:');
@define('SAVE_FILE_AS', 'Сохранить этот файл как:');
@define('STORE_IN_DIRECTORY', 'Сохранить в следующей папке: ');
@define('IMAGE_MORE_INPUT', 'Добавить ещё изображение');
@define('ENTER_MEDIA_URL_METHOD', 'Метод доставки:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Замечание: если Вы выбрали привязку к серверу, убедитесь, что у Вас есть права на создание привязок к выбранному веб-сайту, или веб-сайт принадлежит Вам. Привязка позволяет использовать изображения не с сайта, не сохраняя их локально.');
@define('FETCH_METHOD_IMAGE', 'Загрузить изображение на Ваш сервер');
@define('FETCH_METHOD_HOTLINK', 'Привязать к серверу');
@define('GO_ADD_PROPERTIES', 'Выполнить и открыть свойства');
@define('PLAIN_ASCII_NAMES', '(никаких специальных символов)');
@define('NO_FILE_SELECTED', 'Чтобы s9y что-то сделал, Вы должны сначала выбрать файл');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Изменить размер этого изображения');
@define('MEDIA_DELETE', 'Удалить этот файл');
@define('FILES_PER_PAGE', 'Файлов на странице');
@define('HIDE_SUBDIR_FILES', 'Скрыть файлы в подпапке');
@define('NO_IMAGES_FOUND', 'Не было найдено изображений');
@define('RANGE_FROM', 'От');
@define('RANGE_TO', 'До');
@define('MEDIA_DIRECTORY_MOVE', 'Переместить файлы в другую папку');
@define('INSERT_ALL', 'Вставить всё');
@define('ALL_DIRECTORIES', 'все папки');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Конфигурация записана и сохранена');
@define('DIAGNOSTIC_ERROR', 'Мы обнаружили несколько ошибок, пока проверяли введённую Вами информацию:');
@define('FULL_COMMENT_TEXT', 'Да, с полным текстом комментария');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Настройки базы данных');
@define('INSTALL_CAT_DB_DESC', 'Здесь Вы можете ввести всю информацию о Вашей базе данных. Serendipity необходимы эти настройки, чтобы нормально функционировать');
@define('INSTALL_DBTYPE', 'Тип базы данных');
@define('INSTALL_DBTYPE_DESC', 'Тип Вашей базы данных');
@define('INSTALL_DBHOST', 'Хост базы данных');
@define('INSTALL_DBHOST_DESC', 'Имя сервера с Вашей базой данных');
@define('INSTALL_DBUSER', 'Пользователь базы данных');
@define('INSTALL_DBUSER_DESC', 'Имя пользователя, используемое для подключения к Вашей базе данных');
@define('INSTALL_DBPASS', 'Пароль базы данных');
@define('INSTALL_DBPASS_DESC', 'Пароль для указанного выше имени пользователя');
@define('INSTALL_DBNAME', 'Имя базы данных');
@define('INSTALL_DBNAME_DESC', 'Название Вашей базы данных');
@define('INSTALL_DBPREFIX', 'Префикс таблиц');
@define('INSTALL_DBPREFIX_DESC', 'Префикс таблиц в Вашей базе даынных, например serendipity_');
@define('INSTALL_DBPERSISTENT', 'Использовать persistent-соединения');
@define('INSTALL_DBPERSISTENT_DESC', 'Разрешить использование persistent-соединений к базе данных, больше информации об этом можно получить <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">здесь</a>. Обычно, эта опция не рекомендуется');
@define('INSTAL_DB_UTF8', 'Включить преобразование кодировки базы данных');
@define('INSTAL_DB_UTF8_DESC', 'Выдаёт запрос MySQL "SET NAMES", чтобы указать требуемую кодировку для базы данных. Включите либо выключите эту опцию, если Вы видите странные символы в своём блоге.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Пути');
@define('INSTALL_CAT_PATHS_DESC', 'Различные пути к необходимым папкам и файлам. Не забывайте знаки дроби в конце путей к папкам!');
@define('INSTALL_FULLPATH', 'Полный путь');
@define('INSTALL_FULLPATH_DESC', 'Полный и абсолютный путь к папке Serendipity');
@define('INSTALL_UPLOADPATH', 'Путь для загружаемых файлов');
@define('INSTALL_UPLOADPATH_DESC', 'Все загруженные на сервер файлы будут помещены в эту папку, она указывается относительно полного пути - чаще всего, \'uploads/\'');
@define('INSTALL_RELPATH', 'Относительный путь');
@define('INSTALL_RELPATH_DESC', 'Путь к Serendipity для Вашего браузера, обычно \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Относительный путь к шаблонам');
@define('INSTALL_RELTEMPLPATH_DESC', 'Путь к папке с шаблонами, с учётом \'относительного пути\'');
@define('INSTALL_RELUPLOADPATH', 'Относительный путь загружаемых файлов');
@define('INSTALL_RELUPLOADPATH_DESC', 'Путь к Вашим загрузкам для браузеров, с учётом \'относительного пути\'');
@define('INSTALL_URL', 'URL Вашего блога');
@define('INSTALL_URL_DESC', 'Основной URL Вашего блога');
@define('INSTALL_AUTODETECT_URL', 'Автоматически определять HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Если установлено "Да", Serendipity будет пытаться определить HTTP-Host, который был использован пользователем при обращении, как Ваш базовый URL. Активация этой опции позволит Вам использовать множество доменных имен для Вашего блога Serendipity и использовать доменное имя для всех пересылающих ссылок, использованных для доступа к Вашему блогу.');
@define('INSTALL_INDEXFILE', 'Индексный файл');
@define('INSTALL_INDEXFILE_DESC', 'Имя индексного файла Вашего блога');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Постоянные ссылки');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Определяет различные URL-шаблоны для задания постоянных ссылок в Вашем дневнике. Рекомендуется использовать значение по умолчанию; если нет, старайтесь использовать значение %id% там, где это возможно, чтобы предупредить запросы Serendipity к базе данных в поисках запрошенных адресов.');
@define('INSTALL_PERMALINK', 'Структура постоянных ссылок для записей');
@define('INSTALL_PERMALINK_DESC', 'Здесь Вы можете определить структуру относительных адресов, начинающихся с Вашего основного адреса, по которому будут доступны записи. Вы можете использовать переменные %id%, %title%, %day%, %month%, %year% и любые другие символы.');
@define('INSTALL_PERMALINK_AUTHOR', 'Структура постоянных ссылок для авторов');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Здесь Вы можете определить структуру относительных адресов, начинающихся с Вашего основного адреса, по которому будут доступны записи от отдельных авторов. Вы можете использовать переменные %id%, %title%, %day%, %month%, %year% и любые другие символы. ');
@define('INSTALL_PERMALINK_CATEGORY', 'Структура постоянных ссылок для категорий');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Здесь Вы можете определить структуру относительных адресов, начинающихся с Вашего основного адреса, по которому будут доступны записи из отдельных категорий. Вы можете использовать переменные %id%, %title% и любые другие символы.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Структура постоянных ссылок для RSS-лент');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Здесь Вы можете определить структуру относительных адресов, начинающихся с Вашего основного адреса, по которому будут доступны RSS-лент из отдельных категорий. Вы можете использовать переменные %id%, %title%  и любые другие символы.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Структура постоянных ссылок для RSS-лент авторов');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Здесь Вы можете определить структуру относительных адресов, начинающихся с Вашего основного адреса, по которому будут доступны RSS-ленты отдельных записей Ваших авторов. Вы можете использовать переменные %id%, %realname%, %username%, %email% и любые другие символы.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Путь к архивам');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Путь к архиву');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Путь к категориям');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Путь к страницам авторов');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Путь к подписке на блог');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Путь к отписке от комментариев');
@define('INSTALL_PERMALINK_DELETEPATH', 'Путь для удаления комментариев');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Путь для подтверждения комментариев');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Путь к RSS-лентам');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Путь к отдельному плагину');
@define('INSTALL_PERMALINK_ADMINPATH', 'Путь к администрированию');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Путь к поиску');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Путь к комментариям');
@define('CONFIG_PERMALINK_PATH_DESC', 'Пожалуйста, обратите внимание, что Вы должны использовать префикс, чтобы Serendipity мог правильно сопоставить URL-адрес с соответствующим действием. Вы можете изменить префикс на любое уникальное имя, но не удалять его. Это относится ко всем определениям префикса пути.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Общие настройки');
@define('INSTALL_CAT_SETTINGS_DESC', 'Влияют на поведение Вашего блога Serendipity');
@define('INSTALL_USERNAME', 'Имя администратора');
@define('INSTALL_USERNAME_DESC', 'Имя пользователя для администрирования блога');
@define('INSTALL_PASSWORD', 'Пароль администратора');
@define('INSTALL_PASSWORD_DESC', 'Пароль для указанного выше имени администратора');
@define('INSTALL_PASSWORD2', 'Пароль администратора (повторно)');
@define('INSTALL_PASSWORD2_DESC', 'Пароль для указанного выше имени администратора, введите снова для проверки.');
@define('USERCONF_REALNAME', 'Отображаемое имя');
@define('USERCONF_REALNAME_DESC', 'Полное имя автора. То имя, которое отображается для читателей');
@define('INSTALL_EMAIL', 'Email администратора');
@define('INSTALL_EMAIL_DESC', 'Email администратора блога');
@define('INSTALL_SENDMAIL', 'Посылать почту администратору');
@define('INSTALL_SENDMAIL_DESC', 'Хотите ли Вы получать письма, когда к Вашим заметкам добавляются комментарии?');
@define('INSTALL_SUBSCRIBE', 'Разрешать пользователям подписываться?');
@define('INSTALL_SUBSCRIBE_DESC', 'Разрешать пользователям подписываться и, таким образом, получать электронное письмо при публикации нового содержимого в этой подписке');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Использовать двойную регистрацию для подписки?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'Если эта функция включена, когда пользователь хочет получать уведомления по электронной почте о новых статьях или новых комментариях к записям, на которые он подписан, он должен подтвердить свою подписку. Например, такое двойное согласие требуется по немецкому законодательству.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Размер сообщения о подписке');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'Какой объём содержимого будет включён в электронное письмо');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Почтовый формат HTML для подписок');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Отправлять письма подписчикам в составном/альтернативном виде в формате HTML или в виде обычного текста');
@define('INSTALL_BLOGNAME', 'Имя блога');
@define('INSTALL_BLOGNAME_DESC', 'Название Вашего блога');
@define('INSTALL_BLOGDESC', 'Описание блога');
@define('INSTALL_BLOGDESC_DESC', 'Краткое (в одну строку) описание Вашего блога');
@define('INSTALL_BLOG_EMAIL', 'E-Mail адрес Вашего блога');
@define('INSTALL_BLOG_EMAIL_DESC', 'Здесь Вы можете указать электронный адрес, который будет использоваться в поле "From" для всех исходящих от блога сообщений. Проверьте, чтобы здесь был узнаваемый Вашим почтовым сервером адрес - многие почтовые сервера отказываются принимать сообщения с неизвестными адресами в поле "From".');
@define('COMMENT_TOKENS', 'Использовать токены для модерации комментариев?');
@define('COMMENT_TOKENS_DESC', 'Если используются токены, комментарии можно одобрить и удалить, перейдя по ссылкам электронной почты, не требуя входа в блог. Обратите внимание, что это удобная функция, и если Ваши письма будут перехвачены, эти люди могут одобрить / удалить комментарий, на который ссылается ссылка, без дополнительной аутентификации.');
@define('INSTALL_LANG', 'Язык');
@define('INSTALL_LANG_DESC', 'Выберите язык интерфейса для Вашего блога');
@define('INSTALL_CHARSET', 'Выбор кодировки');
@define('INSTALL_CHARSET_DESC', 'Здесь Вы выбираете кодировку для символов Вашего языка - UTF-8 или родную (ISO, EUC, ...). У некоторых языков есть только UTF-8 переводы, поэтому выбор "родной" кодировки здесь не будет иметь никакого эффекта. Для новых инсталляций рекомендуется использовать UTF-8. Не изменяйте этот параметр, если вы уже создали записи в другой кодировке - это может привести к нечитаемым символам. Обязательно изучите страницу https://docs.s9y.org/docs/developers/internationalization.html по этому поводу.');
@define('INSTALL_CAL', 'Тип календаря');
@define('INSTALL_CAL_DESC', 'Выберите желаемый формат календаря');
@define('AUTOLANG', 'Использовать по умолчанию язык браузера пользователя');
@define('AUTOLANG_DESC', ' Если включено, то будут использоваться настройки языка браузера пользователя, чтобы выбрать язык записей и интерфейса.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Включить плагин ACL для групп пользователей?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Если в конфигурации включена опция "Плагин ACL для групп пользователей", Вы можете указать, каким группам пользователей разрешено выполнять определенные плагины/события.');
@define('UPDATE_NOTIFICATION', 'Уведомление об обновлении');
@define('UPDATE_NOTIFICATION_DESC', 'Отображать уведомление об обновлении на панели инструментов и для какого канала?');
@define('LOG_LEVEL', 'Уровень журналирования');
@define('LOG_LEVEL_DESC', 'В определенных местах кода Serendipity мы разместили точки останова отладки. Если для этой опции установлено значение "Отладка", она запишет этот вывод отладки в templates_c/logs/. Вам следует включить эту опцию только в том случае, если Вы сталкиваетесь с ошибками в этих областях или если Вы являетесь разработчиком. Установка для этого параметра значения "Ошибка" позволит регистрировать ошибки PHP, перезаписывая параметр PHP error_log.');
@define('USE_CACHE', 'Включить кэширование');
@define('USE_CACHE_DESC', 'Позволяет внутреннему кэшу не повторять определенные запросы к базе данных. Это снижает нагрузку на серверы со средним и высоким трафиком и увеличивает время загрузки страницы.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Актуальность');
@define('UPDATE_STABLE', 'Стабильный');
@define('UPDATE_BETA', 'Бета');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Внешний вид и опции');
@define('INSTALL_CAT_DISPLAY_DESC', 'Изменить настройки интерфейса Serendipity');
@define('INSTALL_FETCHLIMIT', 'Записи, которые всегда следует отображать на главной странице');
@define('INSTALL_FETCHLIMIT_DESC', 'Количество записей для показа на каждой странице внешнего интерфейса');
@define('INSTALL_RSSFETCHLIMIT', 'Количество записей для отображения в лентах');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Количество записей, отображаемых для каждой страницы в RSS-ленте.');
@define('ARCHIVE_SORT_STABLE', 'Стабильные архивы');
@define('ARCHIVE_SORT_STABLE_DESC', 'Отсортировать архивные страницы по убыванию, чтобы они были стабильными и поисковому роботу не приходилось их переиндексировать.');
@define('QUICKSEARCH_SORT', 'Как следует сортировать результаты поиска?');
@define('SYNDICATION_RFC2616', 'Активировать строгое соответствие RFC2616');
@define('SYNDICATION_RFC2616_DESC', 'Не следование RFC2616 означает, что все условные запросы GET к Serendipity будут возвращать записи, изменённые в последний раз с момента последнего запроса. Если установить значение "Нет", Ваши посетители получат все статьи с момента их последнего запроса, что считается хорошим. Однако некоторые агенты, такие как Planet, ведут себя странно, если это происходит, то это также нарушает RFC2616. Таким образом, если Вы установите для этого параметра значение "Да", Вы будете соблюдать этот RFC, но читатели Вашей RSS-ленты могут пропустить что-либо во время своих отпусков. Так что в любом случае, либо это радует агрегаторы вроде Planet, либо вредит реальным читателям Вашего блога. Если Вы сталкиваетесь с жалобами с любой из сторон, Вы можете включить эту опцию. Ссылка: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Использовать страницы, сжатые с помощью gzip');
@define('INSTALL_USEGZIP_DESC', 'Чтобы ускорить доставку страниц, мы можем сжимать страницы во время отправки их к посетителю, если его браузер поддерживает такое сжатие. Это рекомендуемая опция.');
@define('INSTALL_XHTML11', 'Следить за соответствием XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Вы хотите включить принудительное соответствие стандарту XHTML 1.1? (может вызвать проблемы на старых браузерах 4-го поколения)');
@define('INSTALL_POPUP', 'Разрешить использование всплывающих окон');
@define('INSTALL_POPUP_DESC', 'Хотите ли Вы использовать всплывающие окна для комментариев, обратных ссылок и т.д.?');
@define('INSTALL_EMBED', 'Встроить ли Ваш Serendipity?');
@define('INSTALL_EMBED_DESC', 'Если Вы хотите встроить Ваш блог Serendipity в обычную страницу, установите этот параметр в "Да", чтобы не выводить никаких заголовков и лишь печатать содержимое блога. Вы можете использовать опцию индексного файла (indexFile), чтобы использовать другую страницу как главную и содержащую заголовки. Пожалуйста, прочитайте файл README, чтобы узнать больше!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Показывать внешние сайты как гиперссылки?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Нет": внешние сайты (Куда Ушли, Откуда Пришли, комментарии пользователей) не показываются или показываются как обычный текст, где это возможно, чтобы предотвратить google-спам (рекомендуется). "Да": внешние сайты показаны как гиперссылки. Эта опция может быть отменена конфигурацией плагина для боковых панелей!');
@define('INSTALL_TRACKREF', 'Включить отслеживание ссылок?');
@define('INSTALL_TRACKREF_DESC', 'Включение отслеживания ссылок покажет Вам, какие сайты ссылаются на Ваши статьи. Сегодня этим часто злоупотребляют для рассылки спама, поэтому Вы можете отключить его, если хотите.');
@define('INSTALL_BLOCKREF', 'Заблокированные сайты');
@define('INSTALL_BLOCKREF_DESC', 'Есть ли какие-то сайты, которые Вы не хотите отображать в списке тех, откуда к Вам пришли? Разделяйте элементы списка знаком \';\' и имейте в виду, что сайты блокируются по совпадению строк!');
@define('INSTALL_REWRITE', 'Генерация URL');
@define('INSTALL_REWRITE_DESC', 'Выберите, какими правилами Вы хотите пользоваться при генерации URL. Включение этой опции позволит Вам иметь красивые ссылки в Вашем блоге и также сделает Ваш блог более доступным для индексации поисковыми машинами вроде google. Ваш веб-сервер должен либо поддерживать mod_rewrite, либо содержать "AllowOverride All" для вашей папки Serendipity dir. Значение по умолчанию определяется автоматически');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Базовое смещение по часовому поясу сервера?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Смещать время записей по часовому поясу сервера или нет. Выберите "Да" для базового смещения по часовому поясу сервера и "Нет" для смещения по GMT.');
@define('INSTALL_OFFSET', 'Смещение времени на сервере');
@define('INSTALL_OFFSET_DESC', 'Введите разницу во времени с сервером в часах (текущее время: %clock%) и желаемую временную зону');
@define('INSTALL_SHOWFUTURE', 'Показывать записи с будущими датами');
@define('INSTALL_SHOWFUTURE_DESC', 'Если включено, эта опция покажет все записи с будущими датами публикации. По умолчанию такие записи скрыты до тех пор, пока не наступит указанная дата публикации.');
@define('INSTALL_ACL', 'Применять разрешения на чтение для категорий');
@define('INSTALL_ACL_DESC', 'Если включено, эта опция заставляет права доступа на чтение категорий применяться для всех пользователей, кто вошёл под своим именем в Ваш блог. Если эта опция отключена, никакие права доступа на чтение категорий НЕ применяются, что немного ускоряет Ваш блог. Так что, если Вам не нужна многопользовательская поддержка чтения категорий в Вашем блоге, Вы можете отключить эту настройку.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Настройки ленты');
@define('INSTALL_CAT_FEEDS_DESC', 'Настройки для лент RSS');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Показывать полные записи с дополнительным текстом записи в RSS-лентах');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Изображение для RSS-ленты');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL изображения в формате GIF/JPEG/PNG, если возможно (пустое поле означает serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Ширина изображения');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'в пикселях, макс. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Высота изображения');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'в пикселях, макс. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Показывать EMail-адреса?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Поле "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'EMail-адрес главного редактора, если таковой есть. (пустое поле будет скрыто) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Поле "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'EMail-адрес веб-мастера, если таковой есть. (пустое поле будет скрыто) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Поле "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Количество минут, после которых Ваш блог не должен оставаться в кэше внешних сайтов или приложений (пустое поле будет скрыто) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Поле "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Должно ли поле "pubDate" быть встроено в RSS-канал, чтобы показать дату последней записи?');
@define('FEED_CUSTOM', 'URL пользовательской ленты');
@define('FEED_CUSTOM_DESC', 'Если задано, можно указать пользовательский URL-адрес ленты для перенаправления читателей ленты на определенный URL-адрес. Полезно для статистических анализаторов, таких как Feedburner, и в этом случае Вы должны ввести свой Feedburner-URL здесь.');
@define('FEED_FORCE', 'Принудительно использовать URL пользовательской ленты?');
@define('FEED_FORCE_DESC', 'Если этот параметр включён, указанный выше URL-адрес будет обязательным для читателей ленты, и доступ к Вашей обычной ленте будет невозможен для клиентов.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Настройки конвертации изображений');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Общие настройки, как Serendipity должен работать с изображениями');
@define('INSTALL_IMAGEMAGICK', 'Использование Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Если у Вас есть установленный пакет image magick, должен ли он использоваться для изменения размеров изображений?');
@define('INSTALL_IMAGEMAGICKPATH', 'Путь к файлу convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Полный путь и имя утилиты convert из пакета image magick');
@define('INSTALL_THUMBSUFFIX', 'Суффикс миниатюр');
@define('INSTALL_THUMBSUFFIX_DESC', 'Миниатюры будут создаваться в соответствии с форматом: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', 'Размеры миниатюр');
@define('INSTALL_THUMBWIDTH_DESC', 'Максимальная ширина автоматически создаваемых миниатюр');
@define('INSTALL_THUMBDIM', 'Ограниченный размер миниатюры');
@define('INSTALL_THUMBDIM_LARGEST', 'Наибольшее');
@define('INSTALL_THUMBDIM_WIDTH', 'Ширина');
@define('INSTALL_THUMBDIM_HEIGHT', 'Высота');
@define('INSTALL_THUMBDIM_DESC', 'Размер должен быть ограничен максимальным размером миниатюры. По умолчанию "' . INSTALL_THUMBDIM_LARGEST .  '" ограничивает оба размера, поэтому ни один из них не может быть больше максимального размера; "' . INSTALL_THUMBDIM_WIDTH . '" и "' .  INSTALL_THUMBDIM_HEIGHT . '" ограничивает только выбранный размер, чтобы другой мог быть больше максимального размера.');
@define('MEDIA_UPLOAD_SIZE', 'Максимальный размер файла для выгрузки');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Введите максимальный размер выгружаемых файлов в байтах. Этот параметр может быть отменён настройками на стороне сервера в PHP.ini: upload_max_filesize, post_max_size, max_input_time будут иметь приоритет над этим параметром. Пустая строка означает использование только ограничений на стороне сервера.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Максимальная ширина файлов изображений для выгрузки');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Введите максимальную ширину изображения в пикселях для выгружаемых изображений.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Максимальная высота файлов изображений для выгрузки');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Введите максимальную высоту изображения в пикселях для выгружаемых изображений.');
@define('MEDIA_UPLOAD_RESIZE', 'Изменить размер перед выгрузкой');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Изменить размер изображений перед выгрузкой с помощью Javascript. Это также переведёт выгрузку файла на использование Ajax и, таким образом, удалит кнопку свойств');
@define('ONTHEFLYSYNCH', 'Включить синхронизацию мультимедиа "на лету"');
@define('ONTHEFLYSYNCH_DESC', 'Если включено, Serendipity сравнит базу данных мультимедиа с файлами, хранящимися на Вашем сервере, и синхронизирует содержимое базы данных и папки.');
@define('MEDIA_DYN_RESIZE', 'Разрешить динамическое изменение размера изображений?');
@define('MEDIA_DYN_RESIZE_DESC', 'Если включено, селектор мультимедиа может возвращать изображения любого запрашиваемого размера с помощью переменной GET. Результаты кэшируются и, таким образом, могут создать большую файловую базу, если Вы будете интенсивно её использовать.');
@define('MEDIA_EXIF', 'Импорт данных EXIF/JPEG изображений ');
@define('MEDIA_EXIF_DESC', 'Если включено, существующие метаданные изображений в формате EXIF/JPEG будут проанализированы и сохранены в базе данных для отображения в медиагалерее.');
@define('MEDIA_PROP', 'Свойства медиа');
@define('MEDIA_PROP_DESC', 'Введите список полей свойств, разделённых символом ";", которые Вы хотите определить для каждого медиафайла');
@define('MEDIA_PROP_MULTIDESC', '(Вы можете добавить ":MULTI" после любого элемента, чтобы указать, что этот элемент будет содержать длинный текст вместо нескольких символов)');
@define('MEDIA_KEYWORDS', 'Ключевые слова для медиа');
@define('MEDIA_KEYWORDS_DESC', 'Введите список слов, разделённых символом ";", которые Вы хотите использовать в качестве предопределённых ключевых слов для мультимедийных элементов.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Разрешить получать данные из локальных URL-адресов');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'По умолчанию из-за ограничений безопасности запрещено получать данные из локальных URL-адресов, чтобы предотвратить подделку запросов на стороне сервера (SSRF). Если Вы используете локальную интрасеть, Вы можете включить эту опцию, чтобы разрешить получение данных.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Личные настройки');
@define('USERCONF_CAT_PERSONAL_DESC', 'Изменение Ваших личных настроек');
@define('USERCONF_USERNAME', 'Имя пользователя');
@define('USERCONF_USERNAME_DESC', 'Имя пользователя, которое Вы используете для входа в блог');
@define('USERCONF_PASSWORD', 'Ваш пароль');
@define('USERCONF_PASSWORD_DESC', 'Пароль, который Вы хотите использовать при авторизации');
@define('USERCONF_CHECK_PASSWORD', 'Старый пароль');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Если Вы изменяете пароль в поле выше, то в этом поле Вам нужно ввести Ваш текущий пароль.');
@define('USERCONF_USERLEVEL', 'Уровень доступа');
@define('USERCONF_USERLEVEL_DESC', 'Этот уровень используется, чтобы определить, какой тип доступа у пользователя к блогу');
@define('USERCONF_GROUPS', 'Принадлежность к группам');
@define('USERCONF_GROUPS_DESC', 'Этот пользователь принадлежит к следующим группам. Принадлежность к разным группам одновременно допустима.');
@define('USERCONF_EMAIL', 'Ваш адрес e-mail');
@define('USERCONF_EMAIL_DESC', 'Адрес вашей электронной почты');
@define('INSTALL_WYSIWYG', 'Использовать WYSIWYG-редактор');
@define('INSTALL_WYSIWYG_DESC', 'Желаете ли Вы использовать WYSIWYG-редактор? (Работает в IE5+, частично в Mozilla 1.3+)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Панель инструментов для редактора WYSIWYG');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Задаёт список доступных кнопок панели инструментов для WYSIWYG-редактора. Если Вам нужно дополнительно изменить эти предустановки, Вы можете создать файл templates/XXX/admin/ckeditor_custom_config.js. Для получения более подробной информации, пожалуйста, ознакомьтесь с файлами htmlarea/ckeditor_s9y_config.js и htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (по умолчанию)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Сокращённый');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Полный');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Альтернативный');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor полный');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Принудительно: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Принудительно: сокращённый');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Принудительно: полный');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Принудительно: альтернативный');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Принудительно: CKEditor полный');
@define('USERCONF_SENDCOMMENTS', 'Посылать уведомления о комментариях?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Желаете ли Вы получать уведомления, когда к Вашим записям добавляются новые комментарии?');
@define('USERCONF_SENDTRACKBACKS', 'Посылать уведомления об обратных ссылках?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Желаете ли Вы получать уведомления об обратных ссылках на Ваши записи?');
@define('USERCONF_CREATE', 'Отключить пользователя / запретить активность?');
@define('USERCONF_CREATE_DESC', 'Если этот параметр включён, у пользователя больше не будет никаких возможностей для редактирования или создания записей в блоге. При входе в серверную часть он не может сделать ничего другого, кроме как выйти из системы и просмотреть свою личную конфигурацию.');
@define('USERCONF_ALLOWPUBLISH', 'Права доступа: добавление записей?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Разрешено ли этому пользователю публиковать записи?');
@define('SIMPLE_FILTERS', 'Упрощённые фильтры');
@define('SIMPLE_FILTERS_DESC', 'Когда параметр включён, функции поиска и фильтрации сводятся к основным параметрам. Если этот параметр отключён, Вы увидите все возможные параметры фильтра, например, в медиатеке или редакторе записей.');
@define('INSTALL_BACKENDPOPUP', 'Разрешить использование всплывающих окон для внутреннего интерфейса');
@define('INSTALL_BACKENDPOPUP_DESC', 'Вы хотите использовать всплывающие окна для какой-либо функциональности внутреннего интерфейса? Если отключено (по умолчанию), встроенные модальные диалоги будут использоваться, например, для выбора категории и медиатеки.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Принудительно создавать всплывающие окна для конкретного внутреннего интерфейса');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'Если Вы обычно отключаете всплывающие окна внутреннего интерфейса, Вы можете принудительно использовать всплывающие окна для определённых мест, введя здесь разделённый запятыми список мест. Доступные места: ');
@define('SHOW_MEDIA_TOOLBAR', 'Показывать панель инструментов во всплывающем окне выбора мультимедиа?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Настройки по умолчанию для новых записей');
@define('CONF_USE_AUTOSAVE', 'Включить функцию автосохранения');
@define('CONF_USE_AUTOSAVE_DESC', 'Если эта функция включена, текст, который Вы вводите в записи блога, будет периодически сохраняться в сеансовом хранилище Вашего браузера. Если Ваш браузер аварийно прекратит работу во время создания записи, при следующем создании новой записи текст будет восстановлен из этого автосохранения.');
@define('USERLEVEL_OBSOLETE', 'Замечание: атрибут "уровень пользователя" используется теперь только для обратной совместимости со старыми плагинами и старой схемой авторизации. Права пользователей теперь определяются принадлежностью к группам!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Вы не указали правильно текущий пароль, и потому Вам не разрешено изменить пароль на новый. Ваши настройки не были сохранены.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Имя пользователя не может оставаться пустым.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Доступ к персональным настройкам');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Изменить уровни пользователей');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Изменить опцию "запретить создание записей"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Изменить разрешение на публикацию записей');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Доступ к конфигурации');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Доступ к конфигурации блога');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Администрировать записи');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Администрировать записи других пользователей');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Удалить подписки');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Импортировать записи');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Администрировать категории');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Администрировать категории других пользователей');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Удалить категории');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Администрировать пользователей');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Удалить пользователей');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Изменить уровни пользователей');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Администрировать пользователей в Вашей группе (группах)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Администрировать пользователей НЕ в Вашей группе (группах)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Создать новых пользователей');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Администрировать группы пользователей');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Администрировать плагины');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Администрировать плагины других пользователей');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Администрировать медиа-файлы');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Администрировать папки с медиа-файлами');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Добавить новые медиа-файлы');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Удалить медиа-файлы');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Администрировать медиа-файлы других пользователей');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Просмотреть медиа-файлы');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Сихнронизировать миниатюры');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Администрировать комментарии');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Администрировать шаблоны');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Просмотреть медиа-файлы других пользователей');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Запрещённые плагины');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Запрещённые события');
@define('PERMISSION_HIDDENGROUP', 'Скрытая группа / не автор');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Ваша запись была сохранена');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Древовидная структура');
@define('COMMENTS_VIEWMODE_LINEAR', 'Список');
@define('DISPLAY_COMMENTS_AS', 'Показывать комментарии');
@define('COMMENTS_DISABLE', 'Запретить добавление комментариев к этой записи');
@define('COMMENTS_ENABLE', 'Разрешить добавление комментариев к этой записи');
@define('COMMENTS_CLOSED', 'Автор не разрешил комментировать эту запись');
@define('VIEW_EXTENDED_ENTRY', 'Продолжить чтение "%s"');
@define('TRACKBACK_SPECIFIC', 'URI этой записи для создания обратных ссылок (trackback)');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'полный просмотр');
@define('VIEW_TOPICS', 'просмотр заголовков');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Заголовки');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Записи не были добавлены!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Запомнить информацию? ');
@define('SUBMIT_COMMENT', 'Отправить комментарий');
@define('SUBSCRIBE_COMMENT', 'Подписаться на комментарии');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'Вы также можете подписаться на новые комментарии, не создавая их. Пожалуйста, введите свой адрес электронной почты ниже.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Подписаться на эту запись');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Ваш браузер не послал валидной строки HTTP-Referrer. Это может быть вызвано либо неправильно сконфигурированным браузером/прокси-сервером, что-либо атакой Cross Site Request Forgery (XSRF), нацеленной на Ваш сайт. Запрошенное Вами действие не может быть завершено.');
@define('NAVLINK_AMOUNT', 'Введите количество ссылок на панели навигации (требуется перезагрузка страницы "Управление стилями")');
@define('NAV_LINK_TEXT', 'Введите текст ссылки на навигационной панели');
@define('NAV_LINK_URL', 'Введите полный URL Вашей ссылки');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Похоже, что комментарий #%s уже был подтверждён автором записи');
@define('COMMENT_EDITED', 'Выбранный комментарий был отредактирован');
@define('COMMENTS_WILL_BE_MODERATED', 'Добавленные комментарии должны будут пройти модерацию, прежде чем будут показаны.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Внимание: этот комментарий нуждается в подтверждении автором записи, прежде чем он может быть показан');
@define('DELETE_COMMENT', 'Удалить комментарий');
@define('APPROVE_COMMENT', 'Подтвердить комментарий');
@define('REQUIRES_REVIEW', 'Требует обзора (review)');
@define('COMMENT_APPROVED', 'Комментарий #%s был успешно подтверждён');
@define('COMMENT_DELETED', 'Комментарий #%s был успешно удалён');
@define('COMMENTS_MODERATE', 'Комментарии и обратные ссылки к этой записи требуют модерации');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Внимание: эта обратная ссылка нуждается в подтверждении, прежде чем она сможет быть показана');
@define('DELETE_TRACKBACK', 'Удалить обратную ссылку');
@define('APPROVE_TRACKBACK', 'Подтвердить обратную ссылку');
@define('TRACKBACK_APPROVED', 'Обратная ссылка #%s была успешно подтверждена');
@define('TRACKBACK_DELETED', 'Обратная ссылка #%s была успешно удалена');
@define('COMMENT_NOTOKENMATCH', 'Срок действия ссылки на модерацию истёк или комментарий #%s уже был одобрен или удалён');
@define('TRACKBACK_NOTOKENMATCH', 'Срок действия ссылки на модерацию истёк или обратная ссылка #%s уже была одобрена или удалена');
@define('BADTOKEN', 'Недопустимая ссылка на модерацию');
@define('TOP_LEVEL', 'Верхний уровень');
@define('VIEW_COMMENT', 'Просмотреть комментарий');
@define('VIEW_ENTRY', 'Просмотреть запись');
@define('LINK_TO_ENTRY', 'Ссылка на запись');
@define('LINK_TO_REMOTE_ENTRY', 'Ссылка на удалённую (remote) запись');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Отправка обратного вызова URI %s...');
@define('PINGBACK_SENT', 'Обратный вызов успешен');
@define('PINGBACK_FAILED', 'Не удалось выполнить обратный вызов: %s');
@define('PINGBACK_NOT_FOUND', 'URI обратного вызова не найден.');
@define('TRACKBACK_SENDING', 'Отправка обратной ссылки на URI %s...');
@define('TRACKBACK_SENT', 'Отправка обратной ссылки прошла успешно');
@define('TRACKBACK_FAILED', 'Отправка обратной ссылки не удалась: %s');
@define('TRACKBACK_NOT_FOUND', 'Не было найдено URI для обратной ссылки.');
@define('TRACKBACK_URI_MISMATCH', 'Автоматически найденный URI обратной ссылки не совпадает с URI, на который Вы ссылаетесь.');
@define('TRACKBACK_CHECKING', 'Проверка <u>%s</u> на возможные обратные ссылки...');
@define('TRACKBACK_NO_DATA', 'Указанная страница не содержит данных');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Не была послана обратная ссылка: невозможно создать соединение к %s через порт %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Отправка электронных писем %s подписчикам ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Электронные письма отправлены');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Здравствуйте, %s,\n\nВы запрашивали получение уведомлений о комментариях к \"%s\" (<%s>). Чтобы одобрить эту подписку (\"Двойная регистрация\"), пожалуйста, перейдите по этой ссылке:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Подписка по электронной почте на новые статьи "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Здравствуйте, %s,\n\nВы запрашивали получение уведомлений о новых записях блога \"%s\" (<%s>). Чтобы одобрить эту подписку (\"Двойная регистрация\"), пожалуйста, перейдите по этой ссылке:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Здравствуйте, %s,\n\nВы отправили новый комментарий к \"%s\". Ваш комментарий:\n\n%s\n\nВладелец блога включил проверку почты, поэтому Вам нужно перейти по следующей ссылке, чтобы подтвердить подлинность своего комментария:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Здравствуйте, %s,\n\nВы отправили новый комментарий к \"%s\". Ваш комментарий:\n\n%s\n\nВладелец блога включил одноразовую проверку электронной почты, поэтому Вам нужно перейти по следующей ссылке, чтобы подтвердить подлинность своего комментария:\n<%s>\n\nПосле того, как Вы это сделаете, Вы всегда сможете оставлять комментарии в этом блоге под своим именем пользователя и адресом электронной почты, не получая таких уведомлений.");
@define('SUBSCRIPTION_MAIL_INTRO', 'В блоге %s была опубликована новая запись:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'Вы получаете это электронное письмо, потому что Вы подписаны на получение новых статей блога %s. Чтобы отписаться, нажмите здесь.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'Новая статья');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Новый комментарий к записи, на которую Вы подписаны - "%s"');
@define('SUBSCRIPTION_MAIL', "Здравствуйте, %s,\n\nНовый комментарий был добавлен к записи, за которой Вы следите на \"%s\", запись под названием \"%s\"\nИмя автора: %s\n\nВы можете найти запись здесь: %s\n\nВы можете отписаться от записи, перейдя по этой ссылке: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Здравствуйте, %s,\n\nНовая обратная ссылка была добавлена к записи, за которой Вы следите на \"%s\", запись под названием \"%s\"\nИмя автора: %s\n\nВы можете найти запись здесь: %s\n\nВы можете отписаться от записи, перейдя по этой ссылке: %s\n");
@define('SIGNATURE', "\n-- \n%s работает на движке Serendipity.\nЛучший блог, который можно найти, и Вы тоже можете им воспользоваться.\nПерейдите на <https://s9y.org>, чтобы узнать больше.");
@define('SIGNATURE_HTML', "<hr><p>%s работает на движке Serendipity.<br>Лучший блог, который можно найти, и Вы тоже можете им воспользоваться.<br>Перейдите на <a href='https://s9y.org'>s9y.org</a>, чтобы узнать больше.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Новый комментарий был добавлен в Вашем блоге "%s", к записи "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Новая обратная ссылка была создана к записи Вашего блога под названием "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'У Вас есть следующие варианты:');
@define('NEW_TRACKBACK_TO', 'Новая обратная ссылка была создана к');
@define('NEW_COMMENT_TO', 'Новый комментарий был добавлен к');

/* ROUTING */
@define('URL_NOT_FOUND', 'Запрошенная страница не может быть найдена (404). Это страница по умолчанию.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Не было найдено записей по запросу %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'По Вашему поиску %s найдено результатов:');
@define('SEARCH_TOO_SHORT', 'Ваш поисковй запрос должен быть длиннее чем 3 символа. Вы можете использовать прибавление * к коротким словам, например: s9y*, чтобы использовать поиск для коротких слов.');
@define('SEARCH_ERROR', 'Функция поиска не работает как ожидалось, свяжитесь с администратором этого блога. Это может происходить из-за отсутствующих индексов в Вашей базе данных. На MySQL системах Ваш аккаунт базы данных должен иметь привилегии, чтобы выполнить следующий запрос: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Ошибка, полученная от базы данных, следующая: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Ваш комментарий ничего не содержал. Пожалуйста, %sвернитесь%s и попытайтесь снова');
@define('COMMENT_NOT_ADDED', 'Ваш комментарий не был добавлен, потому что эту запись запрещено комментировать. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Комментарии от');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Ваше подтверждение комментария было успешно введено.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Ваш комментарий не может быть подтверждён.  Пожалуйста, проверьте ссылку, по которой Вы перешли, для завершения. Если ссылка была отправлена более 3 недель назад, Вы должны отправить свой комментарий повторно.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Ваша подписка не может быть подтверждена. Пожалуйста, проверьте ссылку, по которой Вы перешли, для завершения. Если ссылка была отправлена более 3 недель назад, Вы должны запросить новое письмо с подтверждением.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Ваше подтверждение подписки на комментарии было успешно введено.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Ваша подписка на \"%s\" успешно удалена. Вы не будете получать информацию о новых статьях.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Ваша подписка на рассылку по электронной почте %s не может быть удалена. Пожалуйста, проверьте ссылку, по которой Вы перешли, для завершения.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Ваша подписка на \"%s\" по электронной почте %s успешно удалена. Вы не будете получать информацию о новых комментариях.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Ваша подписка не может быть удалена. Пожалуйста, проверьте ссылку, по которой Вы перешли, для завершения.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Ваш запрос на подписку на блог получен. Электронное письмо будет отправлено по адресу %s, чтобы одобрить эту подписку ("Двойная подписка"), укажите ссылку для подтверждения Вашего адреса электронной почты.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'Подписка на "%s" получена. Краткое содержание новой статьи будет выслано Вам. Вы можете отказаться от подписки, используя ссылку, указанную в каждом письме.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Сбой Вашей подписки произошёл из-за того, что уже существует активная подписка на "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Сбой Вашей подписки. Пожалуйста, проверьте свой адрес электронной почты.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Подписка на новые статьи по электронной почте');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'Чтобы получать информацию о новых статьях, введите здесь свой адрес электронной почты.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "Чтобы получать информацию о новых статьях от \"%s\", введите здесь свой адрес электронной почты.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "Чтобы получать информацию о новых статьях в категории \"%s\", введите здесь свой адрес электронной почты.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'На этот адрес будет отправлено электронное письмо со ссылкой для подтверждения, нажмите на ссылку, чтобы подтвердить свою подписку.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'Чтобы получать информацию о новых статьях от "%s", введите здесь свой адрес электронной почты.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'Чтобы получать информацию о новых статьях в категории "%s", введите здесь свой адрес электронной почты.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Неверный синтаксис опции "%s". Нужно значение типа "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Показывать список категорий.');
@define('CATEGORIES_PARENT_BASE', 'Показывать только подкатегории...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Вы можете выбрать какую-нибудь категорию, чтобы показывались только её подкатегории.');
@define('CATEGORIES_HIDE_PARALLEL', 'Прятать категории, не входящие в дерево категорий');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Если Вы хотите прятать категории, которые принадлежат другому дереву категорий, Вам нужно включить эту опцию. Эта настройка имеет больше всего смысла, если используется вместе с мульти-блогами с помощью плагина "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Скрыть выбранную родительскую категорию?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Если Вы ограничите список категорий определённой категорией, по умолчанию Вы увидите эту родительскую категорию в выведенном списке. Если Вы отключите эту опцию, название родительской категории отображаться не будет.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Разрешить поддержку шаблонов Smarty?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Если эта опция включена, то плагин будет использовать возможности движка шаблонов Smarty для вывода списка категорий. Если Вы включаете эту опцию, то внешний вид можно изменить в файле-шаблоне "plugin_categories.tpl". Включение этой опции повлияет на производительность, так что если Вам не нужно подобное оформление списка категорий, оставьте её выключенной.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Показывать количество записей в каждой категории?');
@define('CATEGORY_PLUGIN_SHOWALL', 'Показывать всё без категорий');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'Если эта опция включена, то будет добавлена ссылка, позволяющая посетителю просматривать блог без ограничений по категориям.');
@define('CATEGORIES_ALLOW_SELECT', 'Разрешать посетителям выбирать сразу несколько категорий для отображения? ');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Если эта опция включена, то отмечаемая кнопка будет расположена рядом с названием каждой категории в плагине боковой панели. Пользователи могут отмечать эти кнопки и видеть записи, соответствующие их выбору.');
@define('CATEGORIES_TO_FETCH', 'Категории для получения');
@define('CATEGORIES_TO_FETCH_DESC', 'Получить категории определённого автора?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Показывает список авторов');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Показывать количество записей возле имени автора?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Если эта опция включена, то в скобках возле имени автора приводится общее число сделанных им записей.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Показывать только авторов, у которых есть как минимум N статей');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Синхронизация');
@define('SHOWS_RSS_BLAHBLAH', 'Показывать ссылки на RSS-ленты для агрегации Вашего блога');
@define('SYNDICATE_THIS_BLOG', 'Подписаться');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Формат ленты');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Какой формат должен использоваться для всех лент. Оба варианта поддерживаются во всех распространенных читалках');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Лента комментариев');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Показать дополнительную ссылку на ленту комментариев. Это должно быть интересно только самому автору блога');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'лента %s');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 - комментарии');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Значок ленты');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Показать (большой) значок вместо текстовой ссылки на ленту. Установите значение "нет" для отключение или "feedburner" для отображения счётчика feedburner, если идентификатор указан ниже');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Показывать кнопку "Добавить мне (subToMe)", слой, упрощающий подписку на ленту');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Пользовательский URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'Если Вы хотите перейти по ссылке на пользовательскую ленту, указанную в конфигурации блога, включите эту опцию.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Отображаемое имя для "ленты"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Введите необязательное пользовательское имя для лент (по умолчанию используется "feed", если оно пустое)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Отображаемое имя для ленты "комментарий"');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Введите необязательное пользовательское имя для ленты комментариев');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'Идентификатор FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'Идентификатор ленты, который Вы хотите добавить');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'Изображение для FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Имя изображения для отображения (или оставьте пустым для счётчика), расположенного на feedburner.com, например: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Заголовок для FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Название (если есть) для отображения рядом с изображением');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'Текст изображения для FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Текст (если есть) для отображения при наведении курсора на изображение');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Установите значение "нет", если Вы хотите показывать только текстовую ссылку.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Подписка на блог по электронной почте');
@define('PLUGIN_SUBSCRIBE_DESC', 'Позволяет пользователю подписаться на блог. Если будут опубликованы новые статьи, он получит электронное письмо с возможностью отказаться от подписки');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Заголовок');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Введите заголовок боковой панели для отображения:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Подписка по электронной почте');
@define('PLUGIN_SUBSCRIBE_LINK', 'Текст ссылки');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'Какой текст должен быть показан в ссылке на подписку?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Подписка по электронной почте');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Кнопка для подписки');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Установите значение "нет", если Вы хотите показывать только текстовую ссылку.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Скрыть ссылку на архивы, если за этот промежуток времени не было сделано ни одной записи (требуется подсчёт записей)');
@define('ARCHIVE_COUNT', 'Количество архивных разделов в списке');
@define('ARCHIVE_COUNT_DESC', 'Количество месяцев, недель или дней, архивы которых отображать');
@define('ARCHIVE_FREQUENCY', 'Частота разделов архива');
@define('ARCHIVE_FREQUENCY_DESC', 'Календарный интервал для создания списка архивных разделов');
@define('BROWSE_ARCHIVES', 'Просмотр архивов по месяцам');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Показывать "Serendipity" как текст');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Покажет слова "Веблог Serendipity" как текст');
@define('POWERED_BY_SHOW_IMAGE', 'Показывать "Serendipity" и лого');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Показывает логотип Serendipity и ссылку');
@define('ADVERTISES_BLAHBLAH', 'Рекламирует происхождение Вашего блога (ссылка на сайт Serendipity)');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Использовать https для входа в систему');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Позволяет ссылке на страницу входа в систему указывать на https-ресурс. Ваш веб-сервер должен поддерживать https, чтобы эта опция могла работать!');
@define('SUPERUSER', 'Администрирование');
@define('SUPERUSER_OPEN_ADMIN', 'Перейти к администрированию');
@define('SUPERUSER_OPEN_LOGIN', 'Войти в систему');
@define('ALLOWS_YOU_BLAHBLAH', 'Ссылка в Вашей боковой панели на главную страницу администрирования Вашего блога');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Календарь');
@define('CALENDAR_BOW_DESC', 'День недели, который должен считаться началом недели. По умолчанию это понедельник.');
@define('QUICKJUMP_CALENDAR', 'Календарь');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Начало недели');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Включить поддержку API hook для этого плагина');
@define('CALENDAR_EXTEVENT_DESC', 'Если эта опция включена, Вы можете использовать API hook для подсвечивания Ваших событий в плагине календаря. Включайте эту опцию, только если у Вас есть установленные плагины, которым нужна эта функциональность, потому что из-за этой опции снижается производительность плагина.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Поиск по записям');
@define('SEARCH_FULLENTRY', 'Показать полную запись');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Добавляет фрагмент HTML-кода в Вашу боковую панель');
@define('THE_NUGGET', 'Фрагмент HTML!');
@define('BACKEND_TITLE', 'Дополнительная информация в меню "Настройки плагинов"');
@define('BACKEND_TITLE_FOR_NUGGET', 'Здесь Вы можете определить произвольную строку, которая будет отображаться в меню "Настройки плагинов" в месте с описанием плагина – куска HTML-кода. Если у Вас много кусков HTML-кода с пустым названием, это поможет Вам отличить один плагин от другого.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Показывать адреса как ссылки?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"нет": все адреса веб-сайтов показаны как обычный текст, чтобы избежать google спама. "да": все адреса веб-сайтов показаны как гиперссылки. "По умолчанию": использовать настройки глобальной конфигурации (рекомендуется).');
@define('HAVE_TO_BE_LOGGED_ON', 'Вы должны войти под каким-нибудь пользователем, чтобы иметь доступ к этой странице');
@define('WELCOME_TO_ADMIN', 'Добро пожаловать в раздел администрирования Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Для Serendipity требуется версия PHP >= %2$s - Вы используете более низкую версию (%1$s), и Вам нужно обновить Вашу версию PHP. Большинство провайдеров предлагают переключиться на более новые версии PHP через свои админ-панели или директивы .htaccess.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Большое изображение');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Отображает (большое) изображение в верхней части ленты на боковой панели, введите полный или абсолютный URL-адрес файла изображения. Установите значение "нет" для отображения текстовой ссылки (старое значение по умолчанию)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Если Вы введёте абсолютный URL-адрес с помощью http://... здесь, этот URL-адрес будет использоваться в качестве цели перенаправления в случае, если Вы включили опцию "Принудительно" для FeedBurner. Обратите внимание, что это также может быть URL, независимый от FeedBurner. Для получения новых лент Google FeedBurner Вам необходимо ввести http://feeds2.feedburner.com/yourfeedname здесь');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Если Вы установите для этой опции значение "Принудительно", Вы сможете перенаправлять RSS-ленту в любой веб-сервис, а не только в FeedBurner. Посмотрите на опцию "Идентификатор Feedburner" ниже, чтобы ввести абсолютный URL-адрес)');
@define('MEDIA_PROPERTY_COMMENT1', 'Короткий комментарий');
@define('MEDIA_PROPERTY_COMMENT2', 'Длинный комментарий');
@define('DELETE_SELECTED_ENTRIES', 'Удалить выбранные записи');
@define('MEDIA_PROPERTY_ALT', 'Описание (краткое описание для атрибута ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Заголовок');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ещё не установлен. Пожалуйста, <a href="%s">произведите установку</a> прямо сейчас.');
@define('COMMENT_ADDED_CLICK', 'Нажмите %sздесь, чтобы вернуться%s к комментариям, и %sздесь, чтобы закрыть%s это окно.');
@define('COMMENT_NOT_ADDED_CLICK', 'Нажмите %sздесь, чтобы вернуться%s к комментариям, и %sздесь, чтобы закрыть%s это окно.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Длительность');
@define('MEDIA_PROPERTY_DATE', 'Связанная дата');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Переместить URL-адрес перемещённой папки в %s записей.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'В базах данных, отличных от MySQL, повторный просмотр каждой статьи для замены старых URL-адресов папок новыми URL-адресами папок невозможен. Вам нужно будет вручную отредактировать свои записи, чтобы исправить новые URL-адреса. Вы всё ещё можете переместить свою старую папку обратно туда, где она находилась, если это слишком громоздко для Вас.');
@define('TRACKBACK_SIZE', 'Указанный URI превысил максимальный размер файла в %s байт.');
@define('CLICK_FILE_TO_INSERT', 'Нажмите на файл, который Вы хотите вставить:');
@define('SELECT_FILE', 'Выберите файл для вставки');
@define('MANAGE_IMAGES', 'Работа с изображениями');
@define('WORD_NEW', 'Новый');
@define('WORD_OR', 'Или');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Внешний интерфейс: внешние сервисы');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Внешний интерфейс: общие возможности');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Внешний интерфейс: полноценные модификации');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Внешний интерфейс: просмотры');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Внешний интерфейс: работа с записями');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Внутренний интерфейс: редактор');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Внутренний интерфейс: работа с пользователями');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Внутренний интерфейс: метаинформация');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Внутренний интерфейс: шаблоны');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Внутренний интерфейс: общие возможности');
@define('PLUGIN_GROUP_IMAGES', 'Изображения');
@define('PLUGIN_GROUP_ANTISPAM', 'Антиспам');
@define('PLUGIN_GROUP_MARKUP', 'Разметка');
@define('PLUGIN_GROUP_STATISTICS', 'Статистика');
@define('IMPORT_WELCOME', 'Добро пожаловать в утилиту импорта данных Serendipity');
@define('USER_SELF_INFO', 'Вы вошли как пользователь %s (%s)');
@define('IMPORT_WHAT_CAN', 'Здесь Вы сможете импортировать в Вашу базу данных записи из других блогов и приложений');
@define('IMPORT_SELECT', 'Пожалуйста, выберите программное обеспечение, из которого Вы хотели бы импортировать данные');
@define('MANAGE_STYLES', 'Работа со стилями');
@define('SELECT_A_PLUGIN_TO_ADD', 'Выберите плагин для добавления');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Ниже приведён список установленных плагинов');
@define('PENDING_CONFIRMATION', 'Ожидающее подтверждения');
@define('PENDING_MODERATION', 'Ожидающее модерации');
@define('ABORT_NOW', 'Отмена');
@define('DELETE_SELECTED_COMMENTS', 'Удалить отмеченные комментарии');
@define('MODERATE_SELECTED_COMMENTS', 'Принять выбранные комментарии');
@define('FIND_MEDIA', 'Найти файлы');
@define('TEMPLATE_OPTIONS', 'Опции шаблонна');
@define('BULKMOVE_INFO', 'Информация о массовом перемещении');
@define('BULKMOVE_INFO_DESC', 'Вы можете выбрать несколько файлов для массового перемещения их в новое местоположение. <strong>Примечание:</strong> Это действие нельзя отменить, так же как и массовое удаление нескольких файлов. Все проверенные файлы будут физически перемещены, а записи блога, на которые ссылаются ссылки, будут переписаны, чтобы указать на новое местоположение.');
@define('UPDATE_ALL', 'Обновить всё');
@define('START_UPDATE', 'Запуск обновления ...');
@define('ERROR_FILE_NOT_EXISTS', 'Ошибка: старое имя файла не существует!');
@define('ERROR_SOMETHING', 'Ошибка: что-то не так...');
@define('DIRECT_LINK', 'Прямая ссылка на эту запись');
@define('SELECT_TEMPLATE', 'Выберите стиль, который Вы хотите использовать для Вашего блога');
@define('DATABASE_ERROR', 'Ошибка Serendipity: невозможно подключиться к базе данных - прекращение работы.');
@define('LIMIT_TO_NUMBER', 'Сколько заметок должно быть показано?');
@define('DIRECTORIES_AVAILABLE', 'В списке доступных папок Вы можете нажать на любую папку, чтобы создать в ней новую подапку.');
@define('CATEGORY_INDEX', 'Ниже Вы видите список категорий, к которым Вы можете отнести Вашу запись');
@define('PAGE_BROWSE_PLUGINS', 'Страница %s из %s, всего %s плагинов.');
@define('CHARSET_NATIVE', 'Родная');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Интерфейс Serendipity XML-RPC API больше не входит в стандартную поставку из-за постоянных проблем с безопасностью этого API и не таким уж большим количеством людей, им пользующихся. Поэтому для использования этого интерфейса Вам следует установить плагин XML-RPC. URL для использования в Ваших приложениях НЕ ИЗМЕНИТСЯ - так что как только Вы установите плагин, можно начинать пользоваться этим API.');
@define('AUTHORS_ALLOW_SELECT', 'Разрешить посетителям просматривать записи нескольких авторов сразу?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Если эта опция включена, то в плагине боковой панели будут показаны флажки возле имени каждого автора. Посетитель может выбрать нескольких авторов, и просмотреть записи, найденные согласно этому выбору.');
@define('PREFERENCE_USE_JS', 'Включить расширенное использование JS?');
@define('PREFERENCE_USE_JS_DESC', 'Если включено, расширенные разделы JavaScript будут включены для улучшения удобства использования, например, в разделе "Конфигурация плагинов" Вы можете использовать перетаскивание для упорядочивания плагинов.');
@define('PREFERENCE_USE_JS_WARNING', '(На этой странице используется расширенный JavaScript. Если у Вас возникли проблемы с функциональностью, пожалуйста, отключите использование расширенного JS в Ваших личных настройках или отключите JavaScript в Вашем браузере)');
@define('PLUGIN_GROUP_ALL', 'Все категории');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Ожидающее подтверждения');
@define('NO_COMMENT_SUBSCRIPTION', 'Не подписан');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Извините, не удалось подтвердить Вашу подписку на новые комментарии.');