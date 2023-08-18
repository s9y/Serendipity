<?php

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - позволяет Вам загружать плагины из нашего онлайн-хранилища');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Нажмите здесь, чтобы получить новый %s из онлайн-хранилища Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'Не удалось открыть URL-адрес %s. Может быть, серверы Serendipity или SourceForge.net не работают. Приносим извинения, Вам следует повторить попытку позже.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Попытка открыть URL-адрес %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', 'Извлечено %s байт из приведённого выше URL-адреса. Сохранение файла как %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', 'Извлечено %s байт из уже существующего файла на Вашем сервере. Сохранение файла как %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Данные успешно извлечены.');
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(Репозиторий вернул код ошибки %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<p>Не удаётся получить данные из хранилища SPARTACUS.  Проверка доступности хранилища на %s.</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<p>Сайт проверки доступности SPARTACUS вернул сообщение об ошибке (HTTP-код %s).  Это указывает на то, что сайт проверки доступности SPARTACUS не работает.  Пожалуйста, повторите попытку позже.</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<p><a target="_blank" href="%s">Нажмите здесь, чтобы просмотреть сайт проверки доступности SPARTACUS</a> и определить, доступен ли он.</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<p>SPARTACUS попытался подключиться к Google, но безуспешно (ошибка %d: %s).<br />Ваш сервер блокирует исходящие соединения.  SPARTACUS не будет функционировать, поскольку он не может связаться с хранилищем.  <b>Пожалуйста, свяжитесь с провайдером Вашего веб-сайта и попросите его разрешить исходящие подключения к веб-сайтам.</b></p><p>Плагины по-прежнему можно устанавливать из Ваших локальных папок.  Просто скачайте плагин с <a href="http://spartacus.s9y.org">онлайн-хранилища SPARTACUS</a>, распакуйте его и загрузите файлы в папку плагинов Вашего Serendipity.</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<p>SPARTACUS может связаться с Google, но не может связаться с репозиторием SPARTACUS.  Возможно, Ваш сервер блокирует некоторые исходящие соединения или сайт проверки доступности SPARTACUS не работает.  Пожалуйста, свяжитесь с провайдером Вашего веб-сайта, чтобы убедиться, что исходящие соединения разрешены.  <b>Вы не сможете использовать SPARTACUS, пока Ваш сервер не свяжется с репозиторием SPARTACUS.</b></p>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Расположение файла/зеркала (XML-метаданные)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Расположение файла/зеркала (файлы)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Выберите место загрузки. Не меняйте это значение, если Вы не знаете, что делаете, и если серверы устарели. Эта опция доступна в основном для прямой совместимости.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Владелец загруженных файлов');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Здесь Вы можете ввести имя владельца (FTP/Shell) (например, "nobody") файлов, загруженных Spartacus. Если поле пусто, то никаких изменений владельцев не производится.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Разрешения для загруженных файлов');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Здесь Вы можете ввести разрешения на доступ к файлам (FTP/Shell), загруженным Spartacus, в восьмеричном режиме (например, "0777"). Если пусто, используется маска разрешений системы по умолчанию. Обратите внимание, что не все серверы позволяют изменять/настраивать разрешения. Обратите внимание, что применяемые разрешения разрешают чтение и запись для пользователя веб-сервера. В противном случае Spartacus/Serendipity не смогут перезаписать существующие файлы.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Разрешения для загруженных папок');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Здесь Вы можете ввести разрешения на доступ к папкам (FTP/Shell), загруженным Spartacus, в восьмеричном режиме (например, "0777"). Если пусто, используется маска разрешений системы по умолчанию. Обратите внимание, что не все серверы позволяют изменять/настраивать разрешения. Обратите внимание, что применяемые разрешения разрешают чтение и запись для пользователя веб-сервера. В противном случае Spartacus/Serendipity не смогут перезаписать существующие папки.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK', 'Обновить плагины');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Обновить плагины боковой панели');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Обновлять плагины событий');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Вы можете обновить сразу несколько плагинов, открыв ссылку обновления на новой вкладке (средняя кнопка мыши).');

@define('PLUGIN_EVENT_SPARTACUS_DASHBOARD_UPDATE', 'Плагин может быть <a href="%s">обновлён</a>.');
@define('PLUGIN_EVENT_SPARTACUS_DASHBOARD_UPDATES', 'Может быть <a href="%s">обновлено</a> плагинов: %u.');

@define('PLUGIN_EVENT_SPARTACUS_TRYCURL', 'Попытка использовать библиотеку cURL в качестве запасного варианта...');
@define('PLUGIN_EVENT_SPARTACUS_CURLFAIL', 'Библиотека cURL также вернула ошибку.');
@define('PLUGIN_EVENT_SPARTACUS_HEALTFIREWALLED', 'Не удалось загрузить необходимые файлы из репозитория Spartacus, но наш репозиторий был доступен. Это означает, что Ваш провайдер использует брандмауэр на основе содержимого и не позволяет скачивать PHP-код через Интернет с помощью mod_security или других обратных прокси. Вам либо нужно попросить своего провайдера отключить это, либо Вы не можете использовать плагин Spartacus и Вам нужно загружать файлы вручную.');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_PLUGINS', 'Разрешить использование Spartacus для загрузки плагинов?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_THEMES', 'Разрешить использование Spartacus для загрузки тем?');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE', 'Включить получение информации удалённо о версии плагина');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_DESC', 'Если этот параметр включён, посетители %s могут видеть информацию о версиях всех установленных плагинов. Возможно, Вы захотите защитить этот URL-адрес с помощью пользовательских правил .htaccess для непривилегированного доступа.');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL', 'Секретный ключ к получению информации удалённо о версии плагина');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL_DESC', 'Введите специальный компонент URI, который люди должны знать, чтобы получить удалённо доступ к выводимой информации о версии Вашей системы управления.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CONNECT', 'Ошибка FTP: не удаётся подключиться к FTP.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_MKDIR', 'Ошибка FTP: не удаётся создать папку (%s).');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CHMOD', 'Ошибка FTP: не удалось изменить разрешения папки (%s).');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SUCCESS', 'FTP: папка (%s) успешно создана.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_USE', 'Использовать создание папки с помощью FTP в safe_mode?');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USE_DESC', 'Если у Вас PHP запущен в режиме safe_mode, применяются некоторые ограничения. И эти ограничения приводят к тому, что если Вы создадите папку обычным способом, Вы не сможете загружать файлы в эту папку. Но Вы сможете загрузить их, если создадите папку с помощью FTP. Так что, если у Вас включён safe_mode (safe_mode = on), это единственный способ успешно использовать SPARTACUS и загружать мультимедиа.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SERVER', 'Адрес FTP-сервера');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USERNAME', 'Имя пользователя FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_PASS', 'Пароль FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR', 'Папка FTP Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR_DESC', 'Когда Вы подключаетесь к FTP, Вам необязательно входить в каталог Serendipity. Поэтому здесь необходимо указать путь от места входа по FTP до папки Serendipity.');

@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR', 'Пользовательское расположение зеркала');
@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR_DESC', 'Эта опция предназначена только для продвинутых пользователей. Когда предварительно настроенные зеркала не работают или работают со сбоями, Вы можете ввести свое собственное имя сервера (например http://mirror.org/serendipity/). Сервер должен поддерживать XML-файлы на уровне URL и иметь подпапки, такие как additional_plugins и additional_themes. Используйте только те зеркала, в безопасности которых Вы уверены и которые являются полной копией файлов, размещённых в репозитории CVS Serendipity. Вы можете ввести несколько зеркал, разделённых символом "|".');

@define('PLUGIN_EVENT_SPARTACUS_CRONJOB', 'Этот плагин поддерживает плагин Serendipity Cronjob. Установите его, если Вы хотите выполнять задания по расписанию.');
@define('PLUGIN_EVENT_SPARTACUS_CRONJOB_WHEN', 'Выполнить обычное задание cronjob, чтобы проверить наличие обновлений плагинов и отправить их по почте на настроенный почтовый адрес блога (%s)?');
