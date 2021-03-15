<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) 2004 Bogomil Shopov <bogomil@spisanie.com>
# http://www.purplerain.org/nb/
# Ognyan Kulev <ogi@fmi.uni-sofia.bg>, 2005
# Ivan Cenov <JWalker@hotmail.bg>, 2005-2009
/* vim: set sts=4 ts=4 expandtab : */
$i18n_filename_from = array(' ', 'а', 'А', 'б', 'Б', 'в', 'В', 'г', 'Г', 'д', 'Д', 'е', 'Е', 'Ж', 'ж', 'з', 'З', 'и', 'И', 'й', 'Й', 'к', 'К', 'л', 'Л', 'м', 'М', 'н', 'Н', 'о', 'О', 'п', 'П', 'р', 'Р', 'с', 'С', 'т', 'Т', 'у', 'У', 'ф', 'Ф', 'х', 'Х', 'ц', 'Ц', 'ч', 'Ч', 'ш', 'Ш', 'щ', 'Щ', 'ъ', 'Ъ', 'ь', 'Ь', 'ю', 'Ю', 'я', 'Я');
$i18n_filename_to   = array('-', 'a', 'A', 'b', 'B', 'v', 'V', 'g', 'G', 'd', 'D', 'e', 'E', 'Zh', 'zh', 'z', 'Z', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'f', 'F', 'h', 'H', 'c', 'C', 'ch', 'Ch', 'sh', 'Sh', 'sht', 'Sht', 'a', 'A', 'y', 'Y', 'ju', 'Ju', 'ja', 'Ja');

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'bulgarian, bg, bg_BG');
@define('DATE_FORMAT_ENTRY', '%A, %e %B %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '&#160;');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Tип');
@define('PREVIEW', 'Преглед');
@define('DATE', 'Дата');
@define('TIME', 'Time');
@define('APPEARANCE', 'Изглед');
@define('LOGIN', 'Влизане');
@define('LOGOUT', 'Излизане');
@define('LOGGEDOUT', 'Вие сте излязъл.');
@define('CREATE', 'Създаване');
@define('BACK', 'Назад');
@define('FORWARD', 'Напред');
@define('ANONYMOUS', 'Анонимен');
@define('RECENT', 'Последни...');
@define('OLDER', 'По-стари...');
@define('DONE', 'Готово');
@define('TITLE', 'Заглавие');
@define('DESCRIPTION', 'Описание');
@define('PLACEMENT', 'Разположение');
@define('DELETE', 'Изтриване');
@define('SAVE', 'Запис');
@define('UP', 'Нагоре');
@define('DOWN', 'Надолу');
@define('PREVIOUS', 'Назад');
@define('NEXT', 'Напред');
@define('ENTRIES', 'Статии:');
@define('CATEGORIES', 'Категории');
@define('NAME', 'Име');
@define('EMAIL', 'Ел.адрес');
@define('HOMEPAGE', 'Страница в Интернет');
@define('COMMENT', 'Коментар');
@define('VIEW', 'Преглед');
@define('HIDE', 'Скриване');
@define('WEEK', 'Седмица');
@define('WEEKS', 'Седмици');
@define('MONTHS', 'Месеци');
@define('DAYS', 'Дни');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Успех');
@define('COMMENTS', 'Коментари');
@define('ADD_COMMENT', 'Добавяне на коментар');
@define('NO_COMMENTS', 'Няма коментари');
@define('POSTED_BY', 'Публикувано от');
@define('ON', 'на');
@define('NO_CATEGORY', 'Няма категория');
@define('CATEGORY', 'Категория:');
@define('EDIT', 'Редактиране');
@define('GO', 'Продължаване');
@define('YES', 'Да');
@define('NO', 'Не');
@define('NOT_REALLY', 'Не');
@define('DUMP_IT', 'Да');
@define('IN', 'в');
@define('AT', 'в');
@define('LEFT', 'отляво');
@define('RIGHT', 'отдясно');
@define('CENTER', 'център');
@define('ARCHIVES', 'Архив');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Бързо търсене');
@define('TRACKBACKS', 'Проследявания');
@define('TRACKBACK', 'Проследяване');
@define('NO_TRACKBACKS', 'Няма проследявания');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Извлечение');
@define('TRACKED', 'Следени');
@define('USER', 'Потребител');
@define('USERNAME', 'Потребител');
@define('PASSWORD', 'Парола');
@define('HIDDEN', 'скрит');
@define('IMAGE', 'Изображение');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Автор');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'версия');
@define('INSTALL', 'Инсталиране');
@define('REPLY', 'Отговор');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Грешка');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Принудително');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Администриране');
@define('ADMIN_FRONTPAGE', 'Начало');
@define('QUOTE', 'Цитат');
@define('NONE', 'няма');
@define('GROUP', 'Група');
@define('AUTHORS', 'Автори');
@define('UPGRADE', 'Надграждане');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Всички автори');
@define('PREVIOUS_PAGE', 'предишна страница');
@define('NEXT_PAGE', 'следваща страница');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Всички категории');
@define('LAST_UPDATED', 'Последно обновяване');
@define('IP_ADDRESS', 'IP-адрес');
@define('CHARSET', 'Кодиране');
@define('REFERER', 'Насочваща страница');
@define('APPROVE', 'Одобряване');
@define('NOT_FOUND', 'Не е открит');
@define('WRITABLE', 'Може да се променя');
@define('NOT_WRITABLE', 'Не може да се променя');
@define('WELCOME_BACK', 'Добре дошъл отново,');
@define('USE_DEFAULT', 'По подразбиране');
@define('SORT_BY', 'Подреждане по');
@define('SORT_ORDER', 'Сортиране по');
@define('SORT_ORDER_ASC', 'Намаляване');
@define('SORT_ORDER_DESC', 'Увеличаване');
@define('FILTERS', 'Филтри');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Показване на всички');
@define('TOGGLE_OPTION', 'Превключване на опция');
@define('IN_REPLY_TO', 'В отговор на');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Директория');
@define('BACK_TO_BLOG', 'Обратно към блога');
@define('HTML_NUGGET', 'Блок на HTML');
@define('TITLE_FOR_NUGGET', 'Заглавие на блок на HTML');
@define('COMMENT_ADDED', 'Коментарът Ви беше добавен успешно. ');
@define('ENTRIES_FOR', 'Статии, публикувани в %s');
@define('NO_ENTRIES_TO_PRINT', 'Няма статии за показване');
@define('COMMENT_DELETE_CONFIRM', 'Сигурни ли сте, че искате да изтриете коментар №&#160;%d, написан от %s?');
@define('DELETE_SURE', 'Сигурен ли сте, че искате да изтриете #%s безвъзвратно?');
@define('MEDIA_FULLSIZE', 'Пълен размер');
@define('SIDEBAR_PLUGIN', 'странична приставка');
@define('EVENT_PLUGIN', 'събитийна приставка');
@define('PLUGIN_ITEM_DISPLAY', 'Къде да бъде показван този елемент?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Само при разширени статии');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Само при прегледи');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Винаги');
@define('DIRECTORY_WRITE_ERROR', 'Не може да се записва в директория %s. Моля, проверете правата.');
@define('FILE_WRITE_ERROR', 'Не може да бъде записвано във файла %s');
@define('INCLUDE_ERROR', 'Грешка на Serendipity: Не може да бъде включен файла %s - излизане.');
@define('DO_MARKUP', 'Извършване на преобразуване на markup');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Формат на дата');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Формат на действителната дата на статия, използвайки променливите на функцията на PHP strftime() (Стандартно: "%s")');
@define('APPLY_MARKUP_TO', 'Прилагане на markup към %s');
@define('XML_IMAGE_TO_DISPLAY', 'Изображение за XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Връзките към емисии на XML ще бъдат показвани чрез това изображение. Оставете празно за стандартно изображение, въведете "none" за изключване.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Изтриване на файла %s...');
@define('SETTINGS_SAVED_AT', 'Новите настройки са записани в %s');
@define('INVERT_SELECTIONS', 'Обръщане на отбелязаните');

@define('PERSONAL_SETTINGS', 'Лични настройки');
@define('DO_MARKUP_DESCRIPTION', 'Прилагане на преобразувания на маркапа към текста (усмивки, съкратен маркап чрез *, /, _, ...). Деактивирането на това ще съхрани всеки код на HTML в текста.');
@define('BASE_DIRECTORY', 'Коренова директория');
@define('PERM_READ', 'Позволение за четене');
@define('PERM_WRITE', 'Позволение за запис');
@define('PERM_DENIED', 'Отказано позволение.');
@define('CURRENT_AUTHOR', 'Текущ автор');
@define('PLUGIN_ACTIVE', 'Активна');
@define('PLUGIN_INACTIVE', 'Неактивна');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Запомняне (отмятане) на тази връзка с възможност след това да бъде използвана, за да може съдържанието на страницата да се появява в съдържанието на статия в блога.');
@define('SET_TO_MODERATED', 'Модериране');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Инсталиране на Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Добре дошли в инсталатора на Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Първо ще бъдат прегледани вашите настройки и ще бъде направен опит за диагностика на възможни проблеми със съвместимостта');
@define('ERRORS_ARE_DISPLAYED_IN', 'Грешките се извеждат в %s, препоръките в %s и успехите в %s');
@define('RED', 'червено');
@define('YELLOW', 'жълто');
@define('GREEN', 'зелено');
@define('PRE_INSTALLATION_REPORT', 'Предварителен доклад за инсталиране на Serendipity v%s');
@define('INTEGRITY', 'Верификация на инсталационните файлове');
@define('PHP_INSTALLATION', 'Инсталация на PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Операционна система');
@define('WEBSERVER_SAPI', 'SAPI на уебсървър');
@define('PHPINI_CONFIGURATION', 'Настройки на php.ini');
@define('RECOMMENDED', 'Препоръчително');
@define('ACTUAL', 'Действително');
@define('PERMISSIONS', 'Права');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Правата могат да бъдат зададени чрез изпълнение на следната команда в директорията: `<em>%s</em>`, или да бъдат зададени чрез програма за FTP');
@define('PROBLEM_DIAGNOSTIC', 'Поради проблеми, открити от диагностиката, не можете да продължите с инсталацията преди горните грешки да бъдат поправени');
@define('SELECT_INSTALLATION_TYPE', 'Избор на начин на инсталиране');
@define('RECHECK_INSTALLATION', 'Проверка наново на инсталацията');
@define('SIMPLE_INSTALLATION', 'Опростено инсталиране');
@define('EXPERT_INSTALLATION', 'Подробно инсталиране');
@define('COMPLETE_INSTALLATION', 'Пълна инсталация');
@define('WONT_INSTALL_DB_AGAIN', 'няма да бъде инсталирана базата данни отново');
@define('THEY_DO', 'съществуват');
@define('THEY_DONT', 'не съществуват');
@define('CHECK_DATABASE_EXISTS', 'Проверка дали базата данни и таблиците вече съществуват');
@define('CREATE_DATABASE', 'Създаване на начална настройка на базата данни...');
@define('ATTEMPT_WRITE_FILE', 'Опит за запис във файл %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Създаване на първи автор "%s"');
@define('SETTING_DEFAULT_TEMPLATE', 'Задаване на подразбиращ се шаблон');
@define('INSTALLING_DEFAULT_PLUGINS', 'Инсталиране на стандартните приставки');
@define('SERENDIPITY_INSTALLED', 'Serendipity е инсталиран успешно');
@define('VISIT_BLOG_HERE', 'Посетете вашия нов блог оттук');
@define('THANK_YOU_FOR_CHOOSING', 'Благодарим ви, че избрахте Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Беше открита грешка при инсталиране');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Направен от');
@define('ADMIN_FOOTER_POWERED_BY', 'Задвижван от Serendipity %s и PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Обикновен редактор');
@define('USERLEVEL_CHIEF_DESC', 'Главен редактор');
@define('USERLEVEL_ADMIN_DESC', 'Администратор');
@define('WWW_USER', 'Променете www на системния потребителя, като който се изпълнява Apache.');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Директорията %s не съществува и не може да бъде създадена. Моля, създайте директорията ръчно');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; изпълнете: <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Не може да бъде изпълнен файла %s.');
@define('FILE_CREATE_YOURSELF', 'Моля, създайте файла сами или проверете неговите права');
@define('COPY_CODE_BELOW', '<br />* Само копирайте кода от по-долу и го сложете в %s в папка %s <b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Като направите това, натиснете бутона за презареждане на браузъра.');
@define('ERROR_TEMPLATE_FILE', 'Не може да бъде отворен шаблонен файл, моля, обновете Serendipity!');
@define('HTACCESS_ERROR', 'За да проверите инсталацията на локалния си уеб сървър, serendipity трябва да може да пише във файла ".htaccess". Това се оказа невъзможно поради грешки с права. Моля, нагласете правата с команда като тази: <br />&nbsp;&nbsp;%s<br /> и презаредете тази страница.');
@define('EMPTY_SETTING', 'Не зададохте валидна стойност за "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity откри, че сегашната инсталирана версия на Serendipity е %s. Изглежда се опитвате да се надграждане към версия %s, така че <a href="%s">натиснете тук</a>, за да продължите с процеса на надграждане');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Здравейте, и добре дошли в помощника за надграждане на Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Тук съм, за да помогна в надграждането на Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Вие виждате това съобщение, защото току-що инсталирахте Serendipity %s, но още не сте надградили базата данни към новата версия');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Обновяване на базата данни (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Намерени са следните .sql файлове, който трябва да бъдат изпълнени, преди да продължите с нормалната употреба на Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Специфични задачи за тази версия');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Не са открити специфични задачи за тази версия');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Искате ли да изпълня горните задачи?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Не, ще си ги направя ръчно');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Да, моля');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Изглежда няма нужда от действия по надграждане');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Считайте Serendipity за надграден');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Вие пренебрегнахте надграждането на Serendipity. Моля, уверете се, че базата данни е правилно инсталирана и планираните функции са изпълнени');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Вашата инсталация на Serendipity вече е надградена до версия %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Можете да се върнете към блога Ви като щракнете %sтук%s');
@define('ADMIN_ENTRIES', 'Статии');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Не може да бъде установена връзка с база данни на MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Не може да бъде избрана база данни: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Не може да бъде извлечена информация за потребител: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Не може да бъде извлечена информация за категория: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Не може да бъде извлечена информация за статия: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Не може да бъде извлечена информация за коментар: %s.');
@define('MYSQL_REQUIRED', 'Трябва да имате инсталирано разширение за MySQL, за да изпълните това действие.');
@define('CREATE_AUTHOR', 'Създаване на автор "%s".');
@define('CREATE_CATEGORY', 'Създаване на категория "%s".');
@define('MT_DATA_FILE', 'Файл с данни на Movable Type');
@define('INSTALL_DBPORT', 'Порт на базата данни');
@define('INSTALL_DBPORT_DESC', 'Портът, който да се използва при установяване на връзка със сървъра с базата данни');
@define('IMPORT_PLEASE_ENTER', 'Моля, въведете нужните данни по-долу');
@define('IMPORT_NOW', 'Внасяне сега!');
@define('IMPORT_STARTING', 'Започване на процедура по внасяне...');
@define('IMPORT_FAILED', 'Грешка при внасяне');
@define('IMPORT_DONE', 'Внасянето приключи успещно');
@define('IMPORT_WEBLOG_APP', 'Софтуер за блог');
@define('IMPORT_NOTES', 'Бележки:');
@define('IMPORT_STATUS', 'Състояние след внасяне');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS импорт, изисква се PHP5 и е възможно да изисква много памет');
@define('RSS_IMPORT_BODYONLY', 'Слагане на целия внесен текст в основната секция и без разделяне с разширената секция.');
@define('IMPORT_GENERIC_RSS', 'Общо внасяне на RSS');
@define('ACTIVATE_AUTODISCOVERY', 'Изпращане на проследявания към препратките, откривани в статиите');
@define('RSS_IMPORT_CATEGORY', 'Използване на тази категория за несъвпадащи внесени статии');
@define('IMPORT_WP_PAGES', 'Също приемане на статичните страници като нормални статии ?');
@define('DOCUMENT_NOT_FOUND', 'Документът %s не е намерен.');
@define('CONVERT_HTMLENTITIES', 'Опитване на автоматично преобразуване на ентитита на HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Администриране на Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Въвели сте грешно име или парола');
@define('PLEASE_ENTER_CREDENTIALS', 'Моля, въведете удостоверението си по-долу.');
@define('AUTOMATIC_LOGIN', 'Запазване на тази информация.');
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
@define('MEDIA', 'Медиа');
@define('MEDIA_LIBRARY', 'Медийна библиотека');
@define('ADD_MEDIA', 'Добавяне на медиа');
@define('MANAGE_DIRECTORIES', 'Управление на директории');
@define('CONFIGURATION', 'Настройки');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Връзки');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Домашна страница на Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Документация на Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Официален Блог');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Форуми');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Тази статия още не е публикувана.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Документация');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Локална документация');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'История на версиите');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Странични приставки');
@define('EVENT_PLUGINS', 'Събитийни приставки');
@define('CONFIGURE_PLUGINS', 'Настройка на допълнителните приставки');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Провалени изисквания: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Надграждане до версия %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Натиснете тук за инсталиране на нова %s');
@define('ALREADY_INSTALLED', 'Вече е инсталирана');
@define('PLUGIN_AVAILABLE_COUNT', 'Общо: %d приставки.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Редактиране');
@define('EDIT_ENTRY', 'Редактиране на статия');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Чернова');
@define('PUBLISH', 'Публикуване');
@define('CONTENT', 'Съдържание');
@define('ENTRIES_PER_PAGE', 'статии в страница');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Лепкави съобщения');
@define('PAGE_BROWSE_ENTRIES', 'Страница %s от %s, общо %s статии');
@define('FIND_ENTRIES', 'Търсене на статии');
@define('RIP_ENTRY', 'Статия №&#160;%s е изтрита');
@define('NEW_ENTRY', 'Нова');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Съдържание на статията');
@define('EXTENDED_BODY', 'Допълнително съдържание');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Записана е чернова на тази статия');
@define('IFRAME_PREVIEW', 'Serendipity сега създава предварителен преглед на вашата статия...');
@define('IFRAME_WARNING', 'Вашият браузър не поддържа понятието IFRAME. Моля, отворете вашия файл serendipity_config.inc.php и задайте променливата $serendipity[\'use_iframe\'] да бъде FALSE.');
@define('DATE_INVALID', 'Внимание: Посочената дата не е валидна. Трябва да е в следния формат: YYYY-MM-DD HH:MM ');
@define('ADVANCED_OPTIONS', 'Допълнителни настройки');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Тази връзка не е за щракане. Тя съдържа URI за проследяване на тази статия. Можете да използвате това URI, за да изпращате на проверка (ping) или проследяване от вашия собствен блог до тази статия. За да копирате връзката, щракнете с десния бутон и изберете "Copy Shortcut" в Internet Explorer или "Copy Link Location" в Mozilla.');
@define('RESET_DATE', 'Изчистване на дата');
@define('RESET_DATE_DESC', 'Щракнете тук за задаване на текущото време като дата');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Управление на потребители');
@define('CREATE_NEW_USER', 'Създаване на нов потребител');
@define('CREATE_NOT_AUTHORIZED', 'Не можете да влияете на потребители от същото потребителско ниво като вашето');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Не може да създавате потребители с по-високо потребителско ниво от вашето');
@define('CREATED_USER', 'Създаден е нов потребител %s');
@define('MODIFIED_USER', 'Свойствата на потребителя %s са променени');
@define('USER_LEVEL', 'Потребителско ниво');
@define('WARNING_NO_GROUPS_SELECTED', 'Внимание: Вие не сте избрали нито една група, към която да членувате. Това би могло ефективно да ви изолира от системата за управление на групите, с всичките права и органичения, която тя управлява. По тази причина вашето членство в групи не е променено.');
@define('DELETE_USER', 'Тръгнали сте да изтривате потребителя №&#160;%%d %s. Сигурни ли сте? Това ще изключи показването на всички статии, писани от него, в лицевата част на блога.');
@define('DELETED_USER', 'Потребителят №&#160;%d %s е изтрит.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Управление на групи');
@define('DELETED_GROUP', 'Група №&#160;%d %s е изтрита.');
@define('CREATED_GROUP', 'Създадена е нова група %s');
@define('MODIFIED_GROUP', 'Свойствата на групата %s са променени');
@define('CREATE_NEW_GROUP', 'Създаване на нова група');
@define('DELETE_GROUP', 'На път сте да изтриете група №&#160;%d %s. Сигурни ли сте?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Търсене на коментари');
@define('COMMENTS_FILTER_SHOW', 'Показване');
@define('COMMENTS_FILTER_ALL', 'Всички');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Само одобрени');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Чакащи одобрение');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Коментарът очаква одобрение от потребителя');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Сигурни ли сте, че искате да изтриете отбелязаните коментари?');
@define('PAGE_BROWSE_COMMENTS', 'Страница %s от %s, общо %s коментара');
@define('COMMENT_IS_DELETED', '(Коментарът е премахнат)');
@define('COMMENT_MODERATED', 'Коментар #%s успешно е установен като модериран');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Категорията е записана');
@define('CATEGORY_ALREADY_EXIST', 'Категория с име "%s" вече съществува');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Категория №&#160;%s е изтрита. Старите статии са преместени в категория №&#160;%s');
@define('CATEGORY_DELETED', 'Категория №&#160;%s е изтрита.');
@define('INVALID_CATEGORY', 'Няма категория за изтриване');
@define('EDIT_THIS_CAT', 'Редактиране на "%s"');
@define('CATEGORY_REMAINING', 'Изтриване на тази категория и преместване на нейните статии в следната категория');
@define('PARENT_CATEGORY', 'По-горна категория');
@define('CATEGORY_HIDE_SUB', 'Скриване на постингите, направени в подкатегории?');
@define('CATEGORY_HIDE_SUB_DESC', 'По подразбиране когато разглеждате катогерия, статиите от подкатегориите също се показват. Ако тази опция е включена, само статиите от текущо избраната категория ще бъдат показвани.');
@define('CREATE_NEW_CAT', 'Създаване на нова категория');
@define('ALREADY_SUBCATEGORY', '%s вече е подкатегория на %s.');
@define('NO_CATEGORIES', 'Няма категории');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Невъзможност за сравняване на контролните суми! (Липсва файл checksums.inc.php в главната директория)');
@define('CHECKSUMS_PASS', 'Всички необходими файлове са верифицирани.');
@define('CHECKSUM_FAILED', '%s развален или модифициран: неуспешна верификация');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Внасяне на статии');
@define('EXPORT_ENTRIES', 'Изнасяне на статии');
@define('EXPORT_FEED', 'Изнасяне на пълна емисия на RSS');
@define('CREATE_THUMBS', 'Създаване на миниатюри');
@define('WARNING_THIS_BLAHBLAH', "Внимание!!!:\\n Възможно е операцията да продължи много време, ако има много изображения.");
@define('SYNC_OPTION_LEGEND', 'Опции за синхронизация на миниатюрите');
@define('SYNC_OPTION_KEEPTHUMBS', 'Запазване на всички съществуващи миниатюри');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Запазване на съществуващите миниатюри, ако са с коректни размери');
@define('SYNC_OPTION_DELETETHUMBS', 'Регенериране на всички миниатюри');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' е зададен като активен шаблон');
@define('WARNING_TEMPLATE_DEPRECATED', 'Внимание: Вашият текущ шаблон използва остарял шаблонен метод. Силно се препоръчва обновяване, ако е възможно.');
@define('STYLE_OPTIONS_NONE', 'Тази тема няма специфични опции. За да видите как вашата тема може да има опции, прочетете Техническата документация на www.s9y.org раздел "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Опции на темата');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Наличен е административен интерфейс, настроен по лично предпочитание');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Задаване като шаблон');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Проверка и запис');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Премахване на маркираните приставки');
@define('SAVE_CHANGES_TO_LAYOUT', 'Запис на промените в оформлението');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Синхронизиране на базата данни с папката с изображения');
@define('SYNC_DONE', 'Готово (синхронизирани са %s изображения).');
@define('RESIZE_BLAHBLAH', '<b>Промяна на размерите на %s</b>');
@define('ORIGINAL_SIZE', 'Оригинални размери: <i>%s&#215;%s</i> pixel');
@define('RESIZING', 'Промяна на размер');
@define('RESIZE_DONE', 'Готово (променени са размерите на %s изображения).');
@define('KEEP_PROPORTIONS', 'Запазване на пропорциите');
@define('REALLY_SCALE_IMAGE', 'Сигурни ли сте, че искате да промените размера? После изображението не може да бъде възстановено!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Тук можете да настроите новите размери на изображенията. Ако искате да запазите пропорциите им, въведете стойност в едно от полетата и натиснете бутона TAB. Другото поле ще бъде изчислено автоматично, така че да се запази пропорцията.');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Нов размер: ');
@define('SCALING_IMAGE', 'Променяне на размера на %s до %s&#215;%s пиксела');
@define('MEDIA_DIRECTORY_MOVED', 'Директорията и файловете бяха преместени успешно в %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Директорията и файловете не бяха преместени в %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Създадена е директория <strong>%s</strong>.');
@define('PARENT_DIRECTORY', 'По-горна директория');
@define('CONFIRM_DELETE_DIRECTORY', 'Сигурни ли сте, че искате да изтриете цялото съдържание на директорията %s?');
@define('ERROR_NO_DIRECTORY', 'Грешка: Директорията %s не съществува');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Не може да бъде изтрита непразна директория. Изберете отметката "принудително изтриване", ако искате да изтриете и съдържанието, и изпратете заявката отново. Съществуващите файлове са:');
@define('DIRECTORY_DELETE_FAILED', 'Грешка при изтриване на директорията %s. Проверете правата или съобщението по-горе.');
@define('DIRECTORY_DELETE_SUCCESS', 'Директорията %s е успешно изтрита.');
@define('CHECKING_DIRECTORY', 'Проверка на файловете в директорията %s');
@define('DELETE_DIRECTORY', 'Изтриване на директория');
@define('DELETE_DIRECTORY_DESC', 'На път сте да изтриете директория, която съдържа медийни файлове, може би използвани във ваши статии.');
@define('FORCE_DELETE', 'Изтриване на ВСИЧКИ файлове в тази директория, включително непознатите за Serendipity');
@define('CREATE_DIRECTORY', 'Създаване на директория');
@define('CREATE_NEW_DIRECTORY', 'Създаване на нова директория');
@define('CREATE_DIRECTORY_DESC', 'Тук можете да създадете нова директория за слагане на медийни файлове. Изберете име на вашата нова директория, както и родителска директория, където да се сложи директорията.');
@define('ABOUT_TO_DELETE_FILE', 'На път сте да изтриете <b>%s</b><br />Ако използвате този файл в някоя от вашите статии, това ще предизвика мъртви връзки или липсващи изображения<br />Сигурни ли сте, че искате да продължите?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Грешка: Този файл вече съществува!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Не може да бъде открит файлът, озаглавен <b>%s</b>. Може би вече е изтрит?');
@define('ERROR_FILE_FORBIDDEN', 'Не е разрешено да качвате файлове с активно съдържание');
@define('REMOTE_FILE_NOT_FOUND', 'Файлът не е намерен на отдалечения сървър, сигурен ли сте, че адресът <b>%s</b> е верен?');
@define('FILE_FETCHED', '%s е изтеглен като %s');
@define('FILE_UPLOADED', 'Файлът %s е успешно качен като %s');
@define('DELETE_FILE_FAIL', 'Не може да бъде изтрит файла <b>%s</b>');
@define('DELETE_FILE', 'Изтрит е файла, озаглавен <b>%s</b>');
@define('FOUND_FILE', 'Намерен е нов или променен файл: %s.');
@define('FILENAME_REASSIGNED', 'Автоматично установено ново име на файла: %s');
@define('ERROR_FILE_EXISTS', 'Грешка: Новото име вече се използва, изберете друго!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'гореща връзка');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Въведете ново име за: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Добавяне на изображение...');
@define('THUMB_CREATED_DONE', 'Миниатюрата е направена.<br/>Готово.');
@define('THUMBNAIL_USING_OWN', 'Използване на %s като миниатюра, защото вече си е с малки размери.');
@define('THUMBNAIL_FAILED_COPY', '%s беше избран за употреба като миниатюра, но се получи грешка при копиране!');
@define('DELETE_THUMBNAIL', 'Изтрита е миниатюрата, озаглавена <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Възникна неизвестна грешка и файлът не е качен. Може би големината на файла е по-голяма от максимално допустимата от иснталацията на сървъра. Проверете вашия доставчик или редактирайте вашия файл php.ini, така че да позволява по-големи размери.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Грешка: Не можете да качвате файлове, по-големи от %s байта!');
@define('MEDIA_UPLOAD_DIMERROR', 'Грешка: Не можете да качвате изображения, по-големи от %s x %s пиксела.');
@define('HOTLINK_DONE', 'Файлът е гореща връзка.<br />Готово.');
@define('DELETE_HOTLINK_FILE', 'Изтрит е горещо свързан файл, озаглавен <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Не може да бъде изпълнено: "%s", грешка: %s, върнат код: %d');
@define('SKIPPING_FILE_EXTENSION', 'Пропускане на файл: Липсващо разширение на %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Пропускане на файл: %s не може да се прочете.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Установяване на същите разрешения за всички поддиректории');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Използване на миниатюри съдържанието.');
@define('I_WANT_BIG_IMAGE', 'Използване на големи изображения в съдържанието');
@define('I_WANT_NO_LINK', ' Показване като изображение');
@define('I_WANT_IT_TO_LINK', 'Показване като препратка към следния адрес адрес:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Големина на изображение');
@define('IMAGE_ALIGNMENT', 'Положение на изображението');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Вмъкване на изображение');
@define('MEDIA_TARGET', 'Цел (target) на тази връзка');
@define('MEDIA_TARGET_JS', 'Изскачаш прозорец (чрез JavaScript, с променливи размери)');
@define('MEDIA_ENTRY', 'Изолиран елемент');
@define('MEDIA_TARGET_BLANK', 'Изскачащ прозорец (чрез target=_blank)');
@define('YOU_CHOSE', 'Вие избрахте %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Завъртане на изображението на 90 градуса обратно на часовниковата стрелка');
@define('IMAGE_ROTATE_RIGHT', 'Завъртане на изображението на 90 градуса по часовниковата стрелка');
@define('MEDIA_RENAME', 'Преименуване на този файл');
@define('THUMBNAIL_SHORT', 'Мини');
@define('ORIGINAL_SHORT', 'Ориг.');
@define('SORT_ORDER_NAME', 'Име на файл');
@define('SORT_ORDER_EXTENSION', 'Разширение');
@define('SORT_ORDER_SIZE', 'Големина на файла');
@define('SORT_ORDER_WIDTH', 'Ширина на изображението');
@define('SORT_ORDER_HEIGHT', 'Височина на изображението');
@define('SORT_ORDER_DATE', 'Дата на качване');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Добавяне на файл към хранилището на медиа:</b><p>Тук можете да качвате файлове с медиа или да укажете място в мрежата, откъдето да се изтеглят! Ако нямате подходящо изображение, <a href="https://images.google.com/" target="_blank">търсете изображения с Google</a>, които отговарят на целите ви. Резултатите често са полезни и забавни :)</p><p><b>Изберете начин:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Въведете URL на файл за изтегляне:');
@define('ENTER_MEDIA_UPLOAD', 'Изберете файл, който искате да качите:');
@define('SAVE_FILE_AS', 'Запис на файла като:');
@define('STORE_IN_DIRECTORY', 'Съхраняване в следната директория: ');
@define('IMAGE_MORE_INPUT', 'Добавяне на още изображения');
@define('ENTER_MEDIA_URL_METHOD', 'Начин на изтегляне:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Забележка: Ако изберете гореща връзка към сървъра, уверете се, че имате право да използвате гореща връзка към сайта или че сайтът е ваш. Горещите връзки позволяват да използвате външни изображения, без да ги съхранявате локално.');
@define('FETCH_METHOD_IMAGE', 'Изтегляне на изображението при вашия сървър');
@define('FETCH_METHOD_HOTLINK', 'Гореща връзка към друг сървър');
@define('GO_ADD_PROPERTIES', 'Продължаване за въвеждане на свойства');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Промяна на размера на това изображение');
@define('MEDIA_DELETE', 'Изтриване на този файл');
@define('FILES_PER_PAGE', 'Файлове в страница');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Не са открити изображения');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'всички директории');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Настройките са записани');
@define('DIAGNOSTIC_ERROR', 'Бяха открити няколко грешки при въведената информация от Вас:');
@define('FULL_COMMENT_TEXT', 'Да, с пълен текст на коментара');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Настройки на базата данни');
@define('INSTALL_CAT_DB_DESC', 'Тук можете да въведете цялата информация за базата данни. Serendipity се нуждае от нея, за да може да работи');
@define('INSTALL_DBTYPE', 'Вид');
@define('INSTALL_DBTYPE_DESC', 'Вид на базата данни');
@define('INSTALL_DBHOST', 'Хост');
@define('INSTALL_DBHOST_DESC', 'Името на машината, където е сървърът за базата данни');
@define('INSTALL_DBUSER', 'Потребител');
@define('INSTALL_DBUSER_DESC', 'Името на потребителя, с което да бъде установявана връзка с вашата база данни');
@define('INSTALL_DBPASS', 'Парола');
@define('INSTALL_DBPASS_DESC', 'Паролата на горния потребител');
@define('INSTALL_DBNAME', 'Име на базата данни');
@define('INSTALL_DBNAME_DESC', 'Името на вашата база данни');
@define('INSTALL_DBPREFIX', 'Представка на таблиците');
@define('INSTALL_DBPREFIX_DESC', 'Представка на имената на таблиците, напр. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Използване на постоянни връзки');
@define('INSTALL_DBPERSISTENT_DESC', 'Активиране на употребата на постоянни връзки към базата данни. Прочетете повече <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">тук</a>. Това обикновено не е препоръчително');
@define('INSTAL_DB_UTF8', 'Разрешаване на прекодирането на символите при работа с MySQL база данни');
@define('INSTAL_DB_UTF8_DESC', 'Специално за MySQL. Отговор \'Да\' изпълнява \'SET NAMES\', за да определи кодирането на символите в базата данни. Включете или изключете тази опция, ако виждате нечетими символи в статиите.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Пътища');
@define('INSTALL_CAT_PATHS_DESC', 'Разнообразни пътища към различни важни папки и файлове. Не забравяйте наклонената черта в края на директориите!');
@define('INSTALL_FULLPATH', 'Пълен път');
@define('INSTALL_FULLPATH_DESC', 'Пълният и абсолютен път до вашата инсталация на Serendipity');
@define('INSTALL_UPLOADPATH', 'Път на качванията');
@define('INSTALL_UPLOADPATH_DESC', 'Всички качвания на файлове ще отиват тук, спрямо "пълния път" - обикновено "uploads"');
@define('INSTALL_RELPATH', 'Относителен път');
@define('INSTALL_RELPATH_DESC', 'Пътят до Serendipity за браузърите, обикновено "/serendipity/"');
@define('INSTALL_RELTEMPLPATH', 'Относителен път до шаблоните');
@define('INSTALL_RELTEMPLPATH_DESC', 'Пътят до папката с шаблони - спрямо "относителен път"');
@define('INSTALL_RELUPLOADPATH', 'Относителен път на качванията');
@define('INSTALL_RELUPLOADPATH_DESC', 'Пътят до вашите качени файлове за браузърите - спрямо "относителен път"');
@define('INSTALL_URL', 'URL на блога');
@define('INSTALL_URL_DESC', 'Основен URL на вашата инсталация на Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Автоматично откриване на използвания HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Ако е "да", Serendipity ще се подсигури, че използвания от посетителя HTTP Host ще бъде използван като настройката BaseURL. Активирането на това ще позволи да имате няколко домейн имена за вашия блог на Serendipity и ще бъде използван съответния домейн за проследяващи връзки, използвани от вашия блог.');
@define('INSTALL_INDEXFILE', 'Индексен файл');
@define('INSTALL_INDEXFILE_DESC', 'Името на вашия индексен файл на Serendipity');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Постоянни връзки');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Определяне на различни шаблони на URL-и за определяне на постоянни адреси на връзките към статиите. Препоръчва се да се използват стандартните настройки; ако не, трябва да опитате да използвате стойност %id% където е възможно, за да може Serendipity да не изпраща заявка до базата данни за търсене на URL-а.');
@define('INSTALL_PERMALINK', 'Структура на постоянна връзка към статия');
@define('INSTALL_PERMALINK_DESC', 'Тук можете да определите относителна структура на URL спрямо основния URL, откъдето са налични статиите. Можете да използвате променливите %id%, %title%, %day%, %month%, %year% и всички други знаци.');
@define('INSTALL_PERMALINK_AUTHOR', 'Структура на постоянна връзка към автор');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Тук можете да определите относителна структура на URL спрямо основния URL, откъдето са налични статиите на определен автор. Можете да използвате променливите %id%, %realname%, %username%, %email% и всички други знаци.');
@define('INSTALL_PERMALINK_CATEGORY', 'Структура на постоянна връзка към категория');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Тук можете да определите относителна структура на URL спрямо основния URL, откъдето са налични статиите от определена категория. Можете да използвате променливите %id%, %name%, %parentname%, %description% и всички други знаци.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Структура на постоянна връзка към емисия на RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Тук можете да определите относителна структура на URL спрямо основния URL, откъдето са налични статиите от определена категория. Можете да използвате променливите %id%, %name%, %description% и всички други знаци.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Структура на постоянна връзка към емисия на RSS на автор');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Тук можете да определите относителна структура на URL спрямо основния URL, откъдето са налични емисии на RSS от дадени потребители. Можете да използвате променливите %id%, %realname%, %username%, %email% и всички други знаци.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Път до архиви');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Път до архив');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Път до категории');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Път до автори');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Път за спиране наблюдението на коментари');
@define('INSTALL_PERMALINK_DELETEPATH', 'Път за изтриване на коментари');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Път за одобряване на коментари');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Път за емисии на RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Път до единична приставка');
@define('INSTALL_PERMALINK_ADMINPATH', 'Път до администриране');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Път до търсене');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Път до коментарите');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Общи настройки');
@define('INSTALL_CAT_SETTINGS_DESC', 'Настройване на поведението на Serendipity');
@define('INSTALL_USERNAME', 'Администраторско име');
@define('INSTALL_USERNAME_DESC', 'Потребителско име на администратора');
@define('INSTALL_PASSWORD', 'Администраторска парола');
@define('INSTALL_PASSWORD_DESC', 'Парола на администратора');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Истинско име');
@define('USERCONF_REALNAME_DESC', 'Пълното име на автора. Това име ще бъде виждано от читателите');
@define('INSTALL_EMAIL', 'Ел. адрес на администратора');
@define('INSTALL_EMAIL_DESC', 'Ел. адрес на администратора на блога');
@define('INSTALL_SENDMAIL', 'Изпращане на поща до администратора?');
@define('INSTALL_SENDMAIL_DESC', 'Искате ли да получавате поща, когато се добавят коментари към вашите статии?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Име на блога');
@define('INSTALL_BLOGNAME_DESC', 'Заглавие на вашия блог');
@define('INSTALL_BLOGDESC', 'Описане на блога');
@define('INSTALL_BLOGDESC_DESC', 'Описание на вашия блог');
@define('INSTALL_BLOG_EMAIL', 'Електронен адрес на блога');
@define('INSTALL_BLOG_EMAIL_DESC', 'Това настройва електронния адрес, който да бъде използван в частта "From" на изпращаната поща. Уверете се, че задавате адрес, който се разпознава от пощенския сървър, използван в системата - много пощенски сървъри отказват съобщения с неизвестен адрес From.');
@define('COMMENT_TOKENS', 'Използване на Tokens за модериране на коментари?');
@define('COMMENT_TOKENS_DESC', 'Ако се използват tokens, коментарите могат да се одобряват или изтриват чрез избиране на връзки в e-mail, без изискване за влизане в блога и име и парола. Въпреки, че това е удобно, ако вашият email бъбде прехванат, коментарите могат да бъдат одобрявани или изтривани без допълнително удостовервяване.');
@define('INSTALL_LANG', 'Език');
@define('INSTALL_LANG_DESC', 'Изберете езика на вашия блог');
@define('INSTALL_CHARSET', 'Избор на кодиране на знаци');
@define('INSTALL_CHARSET_DESC', 'Тук можете да превключвате между местно кодиране (ISO, EUC, ...) или UTF-8. Някои езици имат само превод в UTF-8 и задаването на "Местно" няма да има ефект. Препоръчва се UTF-8 за нови инсталации. Не променяйте тази настройка, ако вече имате статии със специални знаци - това може да доведе до развалени знаци. Добре е да прочетете повече за този проблем в https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Вид календар');
@define('INSTALL_CAL_DESC', 'Изберете исканият от вас формат на календар');
@define('AUTOLANG', 'Използване на предпочитания език на посетителя според браузъра');
@define('AUTOLANG_DESC', 'Ако е активирано, ще се използва настройката на езиците на браузъра на посетителя, за да се определи подразбиращия се език за вашата статия и езика на интерфейса.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Разрешаване на Plugin ACL за потребителски групи ?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Ако опцията "Plugin ACL за потребителски групи" е позволена, ще можете да указвате кои потребителски групи имат позволението да изпълняват дадени събитийни и странични приставки.');
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
@define('INSTALL_CAT_DISPLAY', 'Изглед и настройки');
@define('INSTALL_CAT_DISPLAY_DESC', 'Настройване как да изглежда Serendipity');
@define('INSTALL_FETCHLIMIT', 'Статии за показване в лицевата част');
@define('INSTALL_FETCHLIMIT_DESC', 'Брой на статиите, които се показват във всяка страница на лицевата част');
@define('INSTALL_RSSFETCHLIMIT', 'Брой статии на страница за показване в RSS емисии');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Брой на статиите, които да бъдат извеждани на всяка страница в RSS емисии.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Активиране на стриктна съвместимост с RFC2616 RSS-емисии');
@define('SYNDICATION_RFC2616_DESC', 'Неактивирането на RFC2616 значи, че всички условни GET заявки към Serendipity ще връщат статиите, променени след времето на последната заявка. С установяването на \'Не\' вашите посетители ще получат всички статии след тяхната последна заявка, което може да се разглежда като добър начин на действие. Обаче някои агенти като Planet например, реагират странно. Ако това се случва, също не се спазва и RFC2616. Така че, ако установите тази опция на \'Да\', ще бъдете съвместими с RFC2616, но читателите на вашата RSS емисия може да пропуснат статии по време на техните отпуски (отсъствия). Следователно и в двата случая или може да има проблеми с агрегатори като Planet, или действителните читатели на вашия блог може да пропуснат статии. Ако срещате оплаквания от някоя от страните, можете да превключите опцията. За подробности: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Използване на компресия gzip за страници');
@define('INSTALL_USEGZIP_DESC', 'За ускоряване на доставката на страници, те може да се компресират преди да се изпратят, ако браузърът поддържа това. Това е препоръчително.');
@define('INSTALL_XHTML11', 'Force XHTML 1.1 compliance');
@define('INSTALL_XHTML11_DESC', 'Do you want to force XHTML 1.1 compliance (may cause problems for back-/frontend on older 4th generation browsers)');
@define('INSTALL_POPUP', 'Активиране на употребата на изскачащи прозорци');
@define('INSTALL_POPUP_DESC', 'Искате ли да използвате изскачащи прозорци за коментари, проследявания и др.?');
@define('INSTALL_EMBED', 'Вграден ли е Serendipity?');
@define('INSTALL_EMBED_DESC', 'Ако искате да вграждате Serendipity в обикновена страница, активирайте тази настройка и всякакви заглавки няма да бъдат извеждани, оставяйки само съдържанието. Можете да използвате настройката indexFile, за да направите опаковащ клас, където да сложите нормалните заглавки за уебстраница. Прочетете файла README за повече информация!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Показване на външните връзки?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"не": Непроверените външни връзки (първенци по излизане и насочване, препратки в потребителски коментари) няма да бъдат показвани или ще се показват като обикновен текст, където е подходящо, за да се предотврати спама в Google (препоръчително). "да": Непроверените външни връзки ще бъдат показвани като препратки. Може да бъде отменено в настройките на страничната приставка!');
@define('INSTALL_TRACKREF', 'Разрешаване на следенето насочващи страници ?');
@define('INSTALL_TRACKREF_DESC', 'Разрешаването на следенето на насочващи страници ще ви позволи да знаете кои страници сочат към вашите статии. Напоследък с това се злоупотребява (спам), така че можете да забраните тази опция, ако желаете.');
@define('INSTALL_BLOCKREF', 'Блокирани насочващи страници');
@define('INSTALL_BLOCKREF_DESC', 'Има ли определени хостове, които искате да не бъдат показвани и списъка на насочващите страници? За разделител в списъка с имена на хостове използвайте ";" и помнете, че хостовете се блокират чрез съвпадение на подниз!');
@define('INSTALL_REWRITE', 'Пренаписване на URL');
@define('INSTALL_REWRITE_DESC', 'Изберете кои правила искате да използвате за генериране на URL-и. Активирането на пренаписващите правила ще направи URL-ите на блога красиви и ще направи сайта по-добре индексиран от Google и други търсачки. Уеб сървърът трябва да поддържа или mod_rewrite, или "AllowOverride All" за вашата директория на Serendipity. Подразбиращата се настройка е автоматично откриване дали може да се прави пренаписване');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Използване на времевата зона на сървъра?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Задаване на времето на статиите спрямо сървъра или не. Изберете \'да\' за база сървъра или не за база GMT.');
@define('INSTALL_OFFSET', 'Времево отместване на сървъра');
@define('INSTALL_OFFSET_DESC', 'Въведете количеството часове между вашия уеб сървър (сега: %clock%) и исканата времева зона');
@define('INSTALL_SHOWFUTURE', 'Показване на статии в бъдещето');
@define('INSTALL_SHOWFUTURE_DESC', 'Ако е активирано, всички статии с време в бъдещето ще бъдат показвани. По подразбиране тези статии се скриват и се показват само когато времето на публикуване се премине.');
@define('INSTALL_ACL', 'Прилагане на позволение за четене към категории');
@define('INSTALL_ACL_DESC', 'Ако е активирано, позволенията на потребителските групи, настроени за категориите, ще бъдат прилагани към влезли потребители, които четат вашия блог. Ако е деактивирано, правата за четене на категории НЕ се прилагат, но положителният ефект от това е малко ускоряване на блога. Така че ако не се нуждаете от многопотребителски права за четене, деактивирайте тази възможност.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Показване на пълните статии с разширено тяло в емисията на RSS');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Изображение на емисия на RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL на изображение във формат GIF, JPEG или PNG, ако има такова (празно: лого на Serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Широчина на изображението');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'в пиксели, макс. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Височина на изображението');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'в пиксели, макс. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Показване на ел.адреси?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Поле "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Ел. адрес на редактора, ако има такъв. (празно: скрит) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Поле "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Ел. адрес на уебмастера (празно: скрит) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Поле "ttl" (време на живот)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'След колко минути блога Ви да не бъде кеширан повече от чужди сайтове (празно: скрит) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Поле "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Трябва ли да има и поле "pubDate" в емисия на RSS, за да показва датата на последната статия?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Настройване на обработката на изображения');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Задаване на обща информация как Serendipity да обработва изображения');
@define('INSTALL_IMAGEMAGICK', 'Използване на Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Имате ли instaliran image magick и искате ли да го използвате за промяна на размера на изображения?');
@define('INSTALL_IMAGEMAGICKPATH', 'Път до изпълнимия файл convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Пълен път и име на изпълнимия файл convert на image magick');
@define('INSTALL_THUMBSUFFIX', 'Наставка на миниатюрите');
@define('INSTALL_THUMBSUFFIX_DESC', 'Миниатюрите ще бъдат именувани по следния начин: оригинал.[наставка].разширение');
@define('INSTALL_THUMBWIDTH', 'Размер на миниатюрите');
@define('INSTALL_THUMBWIDTH_DESC', 'Статична максимална ширина на автоматично генерираните миниатюри');
@define('INSTALL_THUMBDIM', 'Ограничен размер на миниатюрата');
@define('INSTALL_THUMBDIM_LARGEST', 'Най-голям');
@define('INSTALL_THUMBDIM_WIDTH', 'Ширина');
@define('INSTALL_THUMBDIM_HEIGHT', 'Височина');
@define('INSTALL_THUMBDIM_DESC', 'Размерите, до които да бъдат ограничени миниатюрите. По подразбиране "' . INSTALL_THUMBDIM_LARGEST .  '" ограничава и двата размера, така че нито един от двата да не бъде по-голям от максималната стойност; "' . INSTALL_THUMBDIM_WIDTH . '" и "' .  INSTALL_THUMBDIM_HEIGHT . '" ограничават само избрания размер, но другият може да бъде по-голям от максималната стойност.');
@define('MEDIA_UPLOAD_SIZE', 'Максимална големина на файловете за качване');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Въведете максималната големина на качените файлове в байтове. Тази стойност може да не бъде зачетена от сървъра. В PHP.ini: upload_max_filesize, post_max_size, max_input_time имат приоритет над тази опция. Празен стринг тук означава да се използват само ограниченията на сървъра.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Максимална ширина на изображенията за качване');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Въведете максималната ширина на в пиксели на изображенията, които ще се качват.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Максимална височина на изображенията за качване');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Въведете максималната височина в пиксели на изображенията, които ще се качват.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Разрешаване на медийната синхронизация в движение');
@define('ONTHEFLYSYNCH_DESC', 'Ако е позволено, Serendipity ще сравни медийната база данни с файловете, записани на вашия сървър и ще синхронизира базата данни със съдържанието на директориите.');
@define('MEDIA_DYN_RESIZE', 'Разрешаване на динамична промяна на големината на изображенията ?');
@define('MEDIA_DYN_RESIZE_DESC', 'Ако е разрешено, при избиране на медийни файлове може да бъдат върнати изображения в различни размери през променлива GET. Резултатите се кешират и така да се създадат много файлове при интензивна употреба.');
@define('MEDIA_EXIF', 'Внасяне на EXIF/JPEG данните за изображенията');
@define('MEDIA_EXIF_DESC', 'Ако е позволено, съществуващите EXIF/JPEG метаданни в изображенията ще бъдат прочетени и записани в базата данни. Така ще има възможност да бъдат показвани в галерията с изображения.');
@define('MEDIA_PROP', 'Свойства на медиийните файлове');
@define('MEDIA_PROP_DESC', 'Въведете списък от свойства, разделени с \';\', които искате да дефинирате за всеки медиен файл.');
@define('MEDIA_PROP_MULTIDESC', '(Можете да добавите ":MULTI" след името на свойство за да укажете, че то ще съдържа дълъг текст вместо само няколко символа)');
@define('MEDIA_KEYWORDS', 'Ключови думи за медийните файлове');
@define('MEDIA_KEYWORDS_DESC', 'Въведете списък с думи, разделени с \';\', които искате да използвате като предварително дефинирани ключови думи за медийните файлове.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Лични данни');
@define('USERCONF_CAT_PERSONAL_DESC', 'Въвеждане на вашите лични данни');
@define('USERCONF_USERNAME', 'Потребителско име');
@define('USERCONF_USERNAME_DESC', 'Потребителското име, с което ще влизате в блога');
@define('USERCONF_PASSWORD', 'Парола');
@define('USERCONF_PASSWORD_DESC', 'Паролата, която искате да използвате за влизане в блога');
@define('USERCONF_CHECK_PASSWORD', 'Стара парола');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Ако смените паролата в горното поле, трябва да въведете текущата парола в това поле.');
@define('USERCONF_USERLEVEL', 'Ниво на достъп');
@define('USERCONF_USERLEVEL_DESC', 'Това ниво определя какъв вид достъп ще има потребителя до блога');
@define('USERCONF_GROUPS', 'Членство в групи');
@define('USERCONF_GROUPS_DESC', 'Този потребител е член на следните групи. Възможни са няколко членства.');
@define('USERCONF_EMAIL', 'Ел. адрес');
@define('USERCONF_EMAIL_DESC', 'Вашият личен ел. адрес');
@define('INSTALL_WYSIWYG', 'Използване на редактор WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Искате ли да използвате редактора WYSIWYG?');
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
@define('USERCONF_SENDCOMMENTS', 'Уведомяване при добавяне на коментар?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Искате ли да получавате поща при добавяне на коментар към публикувани от вас статии?');
@define('USERCONF_SENDTRACKBACKS', 'Уведомяване при проследяване?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Искате ли да получавате поща при проследяване на публикувани от вас статии?');
@define('USERCONF_CREATE', 'Забрана на потребителя / забрана на активността?');
@define('USERCONF_CREATE_DESC', 'Ако е позволено, потребителят няма да има никакви възможности за редактиране или създаване на каквото и да било в блога. Когато влезе в административната страница, потребителят няма да може да прави нищо друго, освен да излезе или да види своята персонална конфигурация.');
@define('USERCONF_ALLOWPUBLISH', 'Права: Публикуване на статии?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Позволено ли е на този потребител да публикува статии?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Показване на ивицата с инструментите в прозореца за избор на медиен файл ?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Начални настройки на нови статии');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'БЕЛЕЖКА: Атрибутът за потребителско ниво се използва само за обратна съвместимост с приставки и удостоверяване. Привилегиите на потребителите сега се управлява чрез членство в групи!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Не зададохте правилно старата си парола и не сте удостоверени за смяна с нова парола. Вашите настройки не са запазени.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Името на потребителя не може да бъде празно.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Достъп до лични настройки');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Промяна на потребителски нива');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Промяна на "забрана за създаване на статии"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Промяна на правото да се публикуват статии');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Достъп до системни настройки');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Достъп до настройки на блог');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Администриране на статии');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Администриране на статии на други потребители');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Внасяне на статии');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Администриране на категории');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Администриране на категориите на друг потребител');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Изтриване на категории');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Администриране на потребители');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Изтриване на потребители');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Промяна на потребителско ниво');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Администриране на потребители, които са в същата група или групи');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Администриране на потребители, които не са в същата група или групи');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Създаване на нови потребители');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Администриране на групи потребители');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Администриране на приставки');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Администриране на приставките на друг потребител');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Администриране на медийни файлове');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Администриране на медийни директории');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Добавяне на медийни файлове');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Изтриване на медийни файлове');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Администриране на медийните файлове на друг потребител');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Преглед на медийни файлове');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Синхронизиране на миниатюри');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Администриране на коментари');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Администриране на шаблони');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Преглед на медийни файлове на друг потребител');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Забранени приставки');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Забранени събития');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Статията е записана');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Нишковидно');
@define('COMMENTS_VIEWMODE_LINEAR', 'Последователно');
@define('DISPLAY_COMMENTS_AS', 'Показване на коментарите:');
@define('COMMENTS_DISABLE', 'Забраняване на коментарите към тази статия');
@define('COMMENTS_ENABLE', 'Разрешаване на коментарите към тази статия');
@define('COMMENTS_CLOSED', 'Авторът е забранил коментарите към тази статия');
@define('VIEW_EXTENDED_ENTRY', 'Виж цялото съдържание');
@define('TRACKBACK_SPECIFIC', 'URI за проследяване на тази статия');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'покажи цялата');
@define('VIEW_TOPICS', 'покажи заглавията');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Заглавия на');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Някои статии не можаха да бъдат вмъкнати!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Запомняне на информацията? ');
@define('SUBMIT_COMMENT', 'Добавяне на коментар');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Абониране за тази статия');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Вашият браузър не изпрати правилен низ Referrer на HTTP. Това може да е предизвикано или от неправилно настроен браузър/прокси, или от междусайтова фалшификация на заявка (Cross Site Request Forgery - XSRF), прицелена към вас. Действието, което сте заявили, не може да бъде завършено.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Коментар №&#160;%s изглежда вече е одобрен');
@define('COMMENT_EDITED', 'Избраният коментар е редактиран');
@define('COMMENTS_WILL_BE_MODERATED', 'Добавяните коментари ще бъдат обект на модерация преди да бъдат показвани.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Внимание: Този коментар се нуждае от одобрение преди да бъде показан');
@define('DELETE_COMMENT', 'Изтриване на коментар');
@define('APPROVE_COMMENT', 'Одобряване на коментар');
@define('REQUIRES_REVIEW', 'Изискване на преглед');
@define('COMMENT_APPROVED', 'Коментар №&#160;%s е одобрен успешно');
@define('COMMENT_DELETED', 'Коментар №&#160;%s е изтрит успешно');
@define('COMMENTS_MODERATE', 'Коментарите и проследяванията на тази статия изискват одобрение');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Внимание: Това проследяване изисква одобрение преди да бъде показвано');
@define('DELETE_TRACKBACK', 'Изтриване на проследяване');
@define('APPROVE_TRACKBACK', 'Одобряване на проследяване');
@define('TRACKBACK_APPROVED', 'Проследяване №&#160;%s е одобрено успешно');
@define('TRACKBACK_DELETED', 'Проследяване №&#160;%s е изтрито успешно');
@define('COMMENT_NOTOKENMATCH', 'Връзката е с изтекъл срок или коментар #%s вече е бил одобрен или изтрит');
@define('TRACKBACK_NOTOKENMATCH', 'Връзката е с изтекъл срок или проследяването #%s вече е било одобрено или изтрито');
@define('BADTOKEN', 'Невалидна връзка за модерация');
@define('TOP_LEVEL', 'Корен');
@define('VIEW_COMMENT', 'Преглед на коментар');
@define('VIEW_ENTRY', 'Преглед на статия');
@define('LINK_TO_ENTRY', 'Връзка към статия');
@define('LINK_TO_REMOTE_ENTRY', 'Връзка към отдалечена статия');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Изпращане на pingback към URI %s...');
@define('PINGBACK_SENT', 'Успешен pingback');
@define('PINGBACK_FAILED', 'Неуспешен pingback: %s');
@define('PINGBACK_NOT_FOUND', 'Не е намерен pingback-URI.');
@define('TRACKBACK_SENDING', 'Изпращане на проследяване към URI-то %s...');
@define('TRACKBACK_SENT', 'Проследяването е успешно');
@define('TRACKBACK_FAILED', 'Грешка при проследяване: %s');
@define('TRACKBACK_NOT_FOUND', 'Не е открит URI за проследяване.');
@define('TRACKBACK_URI_MISMATCH', 'Автоматично откритото проследяване в URI не съвпада с нашето целево URI.');
@define('TRACKBACK_CHECKING', 'Проверка на <u>%s</u> за възможни проследявания...');
@define('TRACKBACK_NO_DATA', 'Целта не съдържа данни');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Не е изпратено проследяване: Не може да бъде установена връзка с %s на порт %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Здравейте %s,\n\nВие сте заявили да получавате известия за нови коментари към \"%s\" (<%s>). За да потвърдите абонамента (\"Double Opt In\") моля изберете тази връзка:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Здравейте %s,\n\nВие сте изпратил(а) нов коментар  на \"%s\". Вашият коментар е:\n\n%s\n\nСобственикът на блога е включил e-mail верификация, така че Вие трябва да изберете следващата връзка, за да удостоверите Вашия коментар:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Здравейте %s,\n\nВие сте изпратил(а) нов коментар  на \"%s\". Вашият коментар е:\n\n%s\n\nСобственикът на блога е включил еднократна e-mail верификация, така че Вие трябва да изберете следващата връзка, за да удостоверите Вашия коментар:\n<%s>\n\nСлед като направите това, Вие можете да изпращате коментари в този блог с Вашето име и e-mail адрес без да получавате известия като това.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Нов коментар към абонирана статия "%s"');
@define('SUBSCRIPTION_MAIL', "Здравей %s,\n\nДобавен е нов коментар към статията, която наблюдавате \"%s\", озаглавен \"%s\"\nКоментатор: %s\n\nМожете да намерите съдържанието тук: %s\n\nМожете да се отпишете, щраквайки на следната връзка: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Здравей %s,\n\nДобавено е ново проследяване към статията, която наблюдавате в \"%s\", озаглавена \"%s\"\nПроследил: %s\n\nМожете да намерите съдържанието тук: %s\n\nМожете да се отпишете, щраквайки на следната връзка: %s\n");
@define('SIGNATURE', "\n-- \n%s се движи от Serendipity.\nНай-добрият блог, можете да го използвате и вие.\nПосетете <https://s9y.org> за подробности.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Добавен е нов коментар във вашия блог "%s", към статията "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Добавено е ново проследяване на статията "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Имате на разположение следните възможности:');
@define('NEW_TRACKBACK_TO', 'Ново проследяване на');
@define('NEW_COMMENT_TO', 'Нов коментар публикуван за');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Няма намерени резултати за %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Търсенето на %s върна %s резултати:');
@define('SEARCH_TOO_SHORT', 'Вашата търсеща заявка трябва да е повече от 3 знака. Можете да опитате да добавите * към по-кратките думи, например s9y*, за да накарате търсенето да използва по-кратки думи.');
@define('SEARCH_ERROR', 'Функцията за търсене не сработи според очакванията. Бележка за администратора на този блог: Причината може да е в липсващи индекси в базата данни. В системис MySQL, вашият акаунт за свързване с базата данни трябва да бъде привилегирован, за да изпълни следната заявка:: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Конкретната грешка, върната от базата данни, е: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Коментарът Ви не е празен, моля, %sвърнете се%s и пробвайте отново');
@define('COMMENT_NOT_ADDED', 'Не можете да добавите коментар, защото са забранени коментарите към тази статия или сте въвели невалидни данни или вашият коментар е спрян от анти-спам контрола.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Коментари от');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Вашето потвърждение на коментара беше прието успешно.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Вашето потвърждение на коментара не е потвърдено.  Моля проверете връзката, която сте избрали. Ако връзката е била изпратена преди повече от три седмици, Вие трябва да изпратите Вашият коментар отново.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Вашето потвърждение за абонамент за известия за коментари беше прието успешно.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Синтаксисът на настройка е сбъркан за опция "%s". Очаква се съдържание от тип "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Показване списъка на категориите.');
@define('CATEGORIES_PARENT_BASE', 'Показване само на категориите от по-долу...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Можете да изберете родителска категория, така че само подчинените категории да се покажат.');
@define('CATEGORIES_HIDE_PARALLEL', 'Скриване на категориите, които не са част от дървото на категории');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Ако искате да скриете категориите, които са част от различно дърво категории, трябва да изберете тази възможност. Това качество е най-смислено, ако се използва във връзка с съставен блог, използвайки приставката "Свойства/Шаблони на категории".');
@define('CATEGORIES_HIDE_PARENT', 'Скриване на избраната родителска категория ?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Ако ограничите извеждането на статии само до определени категории, по подразбиране ще се вижда родителската категория. Ако забраните тази възможност, родителската категория няма да се показва.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Активиране на шаблони Smarty?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Ако тази опция е активирана, приставката ще употреби възможностите на шаблоните Smary за извеждане на списъка с категории. Ако активирате това, можете да променяте оформлението чрез шаблонния файл "plugin_categories.tpl". Активирането на тази опция ще въздейства на производителността, така че ако нямате нужда от персонализиране, оставете я деактивирана.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Показване на броя на статиите в категория?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Позволяване на посетителите да показват няколко категории наведнъж?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Ако се активира тази опция, ще бъде поставена отметка до всяка категория в тази странична приставка. Потребителите ще могат да избират тези отметки и да виждат статиите, които отговарят на техния избор.');
@define('CATEGORIES_TO_FETCH', 'Категории за извличане');
@define('CATEGORIES_TO_FETCH_DESC', 'Извличане категориите от кой автор?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Показване на списък на автори');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Показване на броя на статиите до името на автора?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Ако тази опция е активирана, броят на статиите от този автор ще бъде показан до името на автора в скоби.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Показване само на автори с най-малко X статии');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Емисии');
@define('SHOWS_RSS_BLAHBLAH', 'Показване на връзките към RSS емисии');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'Емисия %s');
@define('SYNDICATION_PLUGIN_091', 'Емисия на RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'Емисия на RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'Емисия на RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Емисия на RSS 2.0 с коментари');
@define('SYNDICATION_PLUGIN_ATOM03', 'Емисия на Atom 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Име на емисията');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Въведете име за емисиите (по подразбиране "feed", когато е празно)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Име на емисията на коментарите');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Въведете име на емисиите на коментарите');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'Идентификатор на FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'Идентификаторът на емисията, която искате да публикувате');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'Изображение на FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Име на изображение, което да се показва (или оставете празно за брояч), разположено на feedburner.com, например: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Заглавие на FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Заглавие (ако има), което да се показва заедно с изображението');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'Текст на изображение на FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Текст (ако има), който да се показва при задържане на мишката върху изображението');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Скриване на връзката към архивите, когато няма статии в избрания период от време (изисква преброяване на статиите)');
@define('ARCHIVE_COUNT', 'Брой на елементите в списъка');
@define('ARCHIVE_COUNT_DESC', 'Общият брой на месеците, седмиците или дните, които да бъдат показвани');
@define('ARCHIVE_FREQUENCY', 'Календарна честота');
@define('ARCHIVE_FREQUENCY_DESC', 'Интервал на календара, който да се използва между елементите в списъка');
@define('BROWSE_ARCHIVES', 'Разглеждане на архива по месец');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Показване на "Serendipity" като текст');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Показване на "Serendipity Weblog" като текст');
@define('POWERED_BY_SHOW_IMAGE', 'Показване на "Serendipity" като лого');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Показване на логото на Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Рекламиране на произхода на блога');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Използване на https за влизане');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Връзката към страницата за влизане ще е адрес с https. Трябва уеб сървърът да го поддържа!');
@define('SUPERUSER', 'Администриране на блога');
@define('SUPERUSER_OPEN_ADMIN', 'Администриране');
@define('SUPERUSER_OPEN_LOGIN', 'Екран за влизане');
@define('ALLOWS_YOU_BLAHBLAH', 'Осигурява връзка в страничната лента към администриране на блога');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Календар');
@define('CALENDAR_BOW_DESC', 'Денят от седмицата, който ще бъде считан за начало на седмицата. По подразбиране е понеделник');
@define('QUICKJUMP_CALENDAR', 'Календар за навигация в блога');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Начало на седмицата');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Активиране на API за куки на приставки');
@define('CALENDAR_EXTEVENT_DESC', 'Ако се активира, приставките ще могат да се закачат към календара и да показват техните събития като откроени. Активирайте само ако имате инсталирана приставка, която използва такива куки, иначе само ще намалява производителността.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Търсене в статиите');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Държане на блок на HTML в страничната лента');
@define('THE_NUGGET', 'Блок на HTML!');
@define('BACKEND_TITLE', 'Допълнителна информация в екрана с настройките на приставките');
@define('BACKEND_TITLE_FOR_NUGGET', 'Тук можете да определите собствени низове, които да се показват в екрана с настройки на приставки заедно с описанието на приставката Блок на HTML. Ако имате няколко блокове на HTML с празни заглавия, това помага за различаване на приставките една от друга.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Показване на първенците в насочването и излизането като връзки?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"не": Излизащите и насочващите адреси се показват като обикновен текст, за да предотвратят спама в Google. "да": Излизащите и насочващите адреси се показват като препратки. "стандартно": Използване на глобалната настройка (препоръчително).');
@define('HAVE_TO_BE_LOGGED_ON', 'Трябва да влезете, за да видите тази страница:');
@define('WELCOME_TO_ADMIN', 'Добре дошли в администраторския комплект на Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Голямо изображение');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Ако въведете абсолютен URL с http://... тук, този URL ще бъде използван за пренасочване в случай, че сте разрешили опция "Force" за FeedBurner. Забележете, че този URL може да е независим от FeedBurner. За нови Google FeedBurner емисии, трябва да въведете тук http://feeds2.feedburner.com/yourfeedname)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Ако установите тази опция на "Force", ще можете да пренасочвате RSS емисиите към всеки webservice, не само към FeedBurner. Вижте опцията "Feedburner ID" по-долу за да въведете абсолютен URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Кратък коментар');
@define('MEDIA_PROPERTY_COMMENT2', 'Дълъг коментар');
@define('DELETE_SELECTED_ENTRIES', 'Изтриване на избраните статии');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Име');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity още не е инсталиран. Моля, <a href="%s">инсталирайте</a> го сега.');
@define('COMMENT_ADDED_CLICK', 'Щракнете %sтук, за да се върнете%s към коментара, и %sтук, за да затворите%s този прозорец.');
@define('COMMENT_NOT_ADDED_CLICK', 'Щракнете %sтук, за да се върнете%s към коментара, и %sтук, за да затворите%s този прозорец.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Продължителност (за аудио и видео файлове)');
@define('MEDIA_PROPERTY_DATE', 'Асоциирана дата');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL на преместената директория е обновен в %s статии.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'При не-MySQL бази данни, преминаването през всяка статия за замяна на URL на старата директория с ново URL (на новата директория) не е възможно. Трябва да редактирате вашите статии ръчно, за да поставите новите URL. Все пак е възможно да преместите вашата стара директория обратно там, където е била, ако ръчната замяна е обременителна за вас.');
@define('TRACKBACK_SIZE', 'Целевият URI надвишава максималната големина на файл от %s байта.');
@define('CLICK_FILE_TO_INSERT', 'Изберете файла, който искате да вмъкнете:');
@define('SELECT_FILE', 'Изберете файл за вмъкване');
@define('MANAGE_IMAGES', 'Управление на изображения');
@define('WORD_NEW', 'Нов');
@define('WORD_OR', 'Или');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Лицева част: Външни услуги');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Лицева част: Качества');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Лицева част: Пълни модули');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Лицева част: Изгледи');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Лицева част: За статии');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Тилова част: Редактор');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Тилова част: Управление на потребители');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Тилова част: Метаинформация');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Тилова част: Шаблони');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Тилова част: Качества');
@define('PLUGIN_GROUP_IMAGES', 'Изображения');
@define('PLUGIN_GROUP_ANTISPAM', 'Антиспам');
@define('PLUGIN_GROUP_MARKUP', 'Маркап');
@define('PLUGIN_GROUP_STATISTICS', 'Статистика');
@define('IMPORT_WELCOME', 'Добре дошли в инструмента за внасяне на Serendipity');
@define('USER_SELF_INFO', 'Влязъл сте като %s (%s)');
@define('IMPORT_WHAT_CAN', 'Тук можете да внесете статии от друг софтуер за блогване');
@define('IMPORT_SELECT', 'Моля, изберете софтуера, от който искате да внасяте');
@define('MANAGE_STYLES', 'Промяна на оформлението');
@define('SELECT_A_PLUGIN_TO_ADD', 'Изберете приставка, която искате да инсталирате');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Списък на инсталираните приставки');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Прекъсване на действието сега');
@define('DELETE_SELECTED_COMMENTS', 'Изтриване на отбелязаните коментари');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Търсене на медиа');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Грешка: Старото име не съществува!');
@define('ERROR_SOMETHING', 'Грешка: Нещо не е наред.');
@define('DIRECT_LINK', 'Пряка връзка към тази статия');
@define('SELECT_TEMPLATE', 'Избиране на шаблон, който да се използва за блога');
@define('DATABASE_ERROR', 'Грешка Serendipity: Не може да бъде установена връзка с базата данни - излизане.');
@define('LIMIT_TO_NUMBER', 'Колко елемента да бъдат показвани?');
@define('DIRECTORIES_AVAILABLE', 'В списъка на наличните поддиректории можете да щракнете върху някое име на директория, за да създадете нова директория в тази структура.');
@define('CATEGORY_INDEX', 'По-долу има списък на категориите, налични за вашите статии');
@define('PAGE_BROWSE_PLUGINS', 'Страница %s от %s, общо %s приставки.');
@define('CHARSET_NATIVE', 'Местно');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Интерфейсът XML-RPC към Serendipity вече не се разпространява със Serendipity заради продължаващи проблеми със сигурноста, както и защото малко хора го ползват. Затова трябва да инсталирате приставката XML-RPC, за да използвате XML-RPC. URL-ът за употреба от приложения НЯМА да се промени - веднага след инсталиране на приставката ще можете отново да използвате API-то.');
@define('AUTHORS_ALLOW_SELECT', 'Позволяване на посетителите да гледат няколко автора едновременно?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Ако тази опция е активирана, ще бъде поставена отметка до всеки автор в тази странична приставка. Посетителите ще могат да избират тези отметки и да виждат статиите, които отговарят на тяхната маркировка.');
@define('PREFERENCE_USE_JS', 'Разрешаване на комплексно използване на JavaScript ?');
@define('PREFERENCE_USE_JS_DESC', 'Ако е позволено комплексно използване на JavaScript, някои части от Serendipity ще бъдат с подобрена функционалност. Например при конфигурирането на приставките става възможно използването на drag-and-drop за пренареждане на приставките.');
@define('PREFERENCE_USE_JS_WARNING', '(Тази страница използва JavaScript. Ако имате проблеми, моля забранете комплексното използване на JavaScript във вашата персонална конфигурация или забранете JavaScript в браузъра.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
