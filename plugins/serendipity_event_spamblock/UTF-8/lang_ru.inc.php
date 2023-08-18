<?php

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Защита от спама');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Различные методы предотвращения спама в комментариях');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Защита от спама: недопустимое сообщение.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Защита от спама: Вы не можете так быстро оставить комментарий после отправки другого.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Этот блог находится в "Режиме экстренной блокировки комментариев", пожалуйста, зайдите в другой раз');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Не допускать дублирования комментариев');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Не разрешать пользователям отправлять комментарий, который содержит тот же текст, что и уже отправленный комментарий');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Аварийное отключение комментирования');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Временно отключить комментарии ко всем записям. Полезно, если Ваш блог подвергается спам-атаке.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Интервал блокировки IP-адреса');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Разрешить IP-адресу отправлять комментарий только каждые N минут. Полезно для предотвращения "затопления" (флуд) комментариями.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Включить капчи (captcha)');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Заставить пользователя ввести случайную строку, отображаемую в специально созданном изображении. Это запретит автоматическую отправку сообщений в Ваш блог. Пожалуйста, помните, что людям с ослабленным зрением может быть трудно читать эти капчи.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'Чтобы предотвратить автоматическую рассылку комментариев ботами, пожалуйста, введите строку, которую Вы видите на изображении ниже, в соответствующее поле ввода. Ваш комментарий будет отправлен только в том случае, если строки совпадают. Пожалуйста, убедитесь, что Ваш браузер поддерживает и принимает файлы cookie, иначе Ваш комментарий не может быть правильно проверен.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Введите строку, которую Вы видите здесь, в поле ввода!');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Введите строку из приведённого выше изображения для предотвращения спама: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Вы не ввели правильную строку, отображённую в поле изображения для предотвращения спама. Пожалуйста, посмотрите на изображение и введите отображаемые там значения.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Капчи отключены на Вашем сервере. Вам нужны библиотеки GDLib и freetype, скомпилированные для PHP, а также нужны файлы .TTF, расположенные в Вашей папке плагина.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Через сколько дней после публикации принудительно вводить капчи');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Капчи могут быть применены в зависимости от возраста Ваших статей. Введите количество дней, по истечении которых необходимо ввести правильную капчу. Если установлено значение 0, капчи будут использоваться всегда.');
@define('PLUGIN_EVENT_SPAMBLOCK_MODERATION_AUTO', 'Автоматическая модерация в зависимости от возраста');
@define('PLUGIN_EVENT_SPAMBLOCK_MODERATION_AUTO_DESC', 'Все комментарии проходят автоматическую модерацию в зависимости от возраста записи');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Через сколько дней после публикации принудительно модерировать комментарии');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Введите возраст записи в днях, по истечении которых включится автоматическая модерация. 0 означает, что все комментарии проходят модерацию.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Сколько ссылок должно быть перед тем, как комментарий пройдёт модерацию');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Когда комментарий набирает определённое количество ссылок, этот комментарий может быть настроен на модерирование. 0 означает, что проверка ссылок не выполняется.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Сколько ссылок нужно, чтобы комментарий был отклонён');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Когда комментарий достигает определённого количества ссылок, этот комментарий может быть отклонён. 0 означает, что проверка ссылок не выполняется.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Из-за некоторых условий Ваш комментарий был помечен владельцем этого блога как требующий модерации.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Цвет фона капчи');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Введите значения RGB: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Расположение файла журнала');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Информация об отклонённых/модерируемых публикациях может быть записана в файл журнала. Установите это значение в пустую строку, если Вы хотите отключить ведение журнала.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Экстренная блокировка комментариев');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Дублирующий комментарий');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-блокировка');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Неверная капча (Введено: %s, ожидалось: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Автоматическая модерация старых записей');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Слишком много гиперссылок');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Слишком много гиперссылок');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Скрыть адреса электронной почты комментирующих пользователей');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Не будут отображаться адреса электронной почты комментирующих пользователей');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'Адреса электронной почты отображаться не будут и будут использоваться только для уведомлений по электронной почте.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Выберите метод ведения журнала');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Ведение журнала отклонённых комментариев может быть произведено в базе данных или в текстовом файле');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Файл (смотрите опцию "Файл журнала" ниже)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'База данных');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Без ведения журнала');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Как обрабатывать комментарии, сделанные с помощью API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Это влияет на модерацию комментариев, сделанных с помощью вызовов API (обратные ссылки, обратные вызовы, WFW:comment, API-комментарии). Если установлено значение "Модерировать" (moderate), все эти комментарии всегда должны быть сначала одобрены. Если установлено значение "Отклонить" (reject), то они полностью запрещены. Если установлено значение "Нет" (none), комментарии будут обрабатываться как обычные комментарии.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'Модерировать');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'Отклонить');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'Комментарии, созданные с помощью API, запрещены');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Активировать словесный фильтр');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Выполняет поиск в комментариях определённых строк и помечает их как спам.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Словесный фильтр для URL-адресов');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Разрешены регулярные выражения, разделение строк производится точкой с запятой (;). Знак @ должен быть экранирован с помощью \\@.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Словесный фильтр для имён авторов');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Словесный фильтр для текста комментария');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Словесный фильтр для комментариев по электронной почте');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Неверный адрес электронной почты');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Проверять адреса электронной почты?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Обязательные поля для комментариев');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Введите список обязательных полей, которые необходимо заполнить при комментарии пользователя. Разделите несколько полей с помощью ",". Доступные ключи являются: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Вы не указали поле %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Настройка методов защиты от спама');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Заблокировать этого автора с помощью плагина Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Заблокировать этот URL-адрес с помощью плагина Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Заблокировать этот адрес электронной почты с помощью плагина Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Разблокировать этого автора с помощью плагина Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Разблокировать этот URL-адрес с помощью плагина Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Разблокировать этот адрес электронной почты с помощью плагина Spamblock');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Заголовок записи равен комментарию');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Отклонять комментарии, содержащие только заголовок записи');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Проверять URL-адреса обратных ссылок/обратных вызовов');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Разрешать обратные ссылки/обратные вызовы только в том случае, если URL-адрес содержит ссылку на Ваш блог');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Неверный URL-адрес обратной ссылки/обратного вызова.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Кодированная капча');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Отключить блокировку спама для авторов');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Вы можете разрешить авторам в следующих группах пользователей публиковать комментарии без их проверки плагином Spamblock.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'API-ключ Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet - это протокол защиты от спама и занесения в чёрные списки. Он может анализировать Ваши входящие комментарии и проверять, был ли этот комментарий занесён в списки спама.  Поддерживаются два сервера: оригинальный сервер Akismet и сервер с открытым исходным кодом TypePad Antispam (TPAS).  Чтобы использовать сервер Akismet, Вы должны зарегистрировать учётную запись по адресу http://www.wordpress.com/.  Чтобы использовать сервер TPAS, Вы должны получить бесплатный ключ от http://antispam.typepad.com/.  Если Вы оставите поле пустым, Akismet не будет использоваться для проверки спама.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Как обращаться со спамом, о котором сообщил Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Отфильтровано в чёрный список Akismet.com');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Что делать с комментариями при автоматической модерации?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Что делать с обратными ссылками/обратными вызовами при автоматической модерации?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Через сколько дней принудительная модерировать комментарии API ');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Вы можете автоматически настроить все обратные ссылки/обратные вызовы для записей, подлежащих модерированию. Введите возраст записи в днях, после чего она должна пройти автоматическую модерацию. 0 означает отсутствие автоматической модерации.');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'Запретить прямые комментарии (защита от XSRF)');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Если этот параметр включён, посетителям не разрешается оставлять комментарии при непосредственном посещении Ваших статей. Это может блокировать не только спам-ботов, но и людей, которые комментируют через своих читателей RSS или у которых отключены файлы cookie. Эта защита реализуется путём установки специального хэш-поля, которое будет существовать только в том случае, если действительный сеанс уже был запущен. Это также защитит Вас от атак XSRF, которые могут обманом заставить Вас отправлять комментарии под ложным предлогом.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Ваш комментарий не содержал хэша сеанса. Комментарии в этом блоге можно оставлять только при включённых файлах cookie и посещении хотя бы одного URL-адреса перед комментированием!');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', 'Блокировать плохие IP-адреса с помощью HTaccess?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', 'Включение этого параметра добавит IP-адреса, которые отправляли спам в Ваш блог, в Ваш файл .htaccess. Файл .htaccess будет регулярно обновляться с использованием запрещённых IP-адресов за последний месяц.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', 'Вот как в данный момент выглядят Ваши изображения с капчей. Если Вы изменили и сохранили настройки, указанные выше, и хотите обновить внешний вид вашей капчи, просто нажмите на неё, чтобы перезагрузить.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION', 'Обратная ссылка/обратный вызов: проверка IP-адреса');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_DESC', 'Должен ли IP-адрес отправителя совпадать с IP-адресом хоста, на который укзаывают обратная ссылка/обратный вызов? (РЕКОМЕНДУЕТСЯ!)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION', 'Проверка IP-адреса: %s [%s] != ip-адрес отправителя [%s]');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_URLINVALID', 'Недопустимый URL-адрес');

@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_DESC', 'Если этот параметр отключён, проверка электронной почты выполняться не будет. Если установлено значение "Да", комментирующий пользователь должен указать действительный адрес электронной почты. Если установлено значение "Подтверждать всегда", комментирующему пользователю необходимо будет всегда подтверждать свои комментарии по электронной почте (нажав на отправленную по почте ссылку). Если установлено значение "Подтвердить один раз", пользователь должен подтвердить свой комментарий один раз, и тогда ему всегда будет разрешено пройти модерацию комментариев.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ONCE', 'Подтвердить один раз');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ALWAYS', 'Подтверждать всегда');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL', 'Сейчас Вы получите уведомление по электронной почте, с помощью которого сможете подтвердить свой комментарий.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_INFO', 'Чтобы оставить комментарий, Вы должны подтвердить его с помощью письма по электронной почте, которое будет отправлено на Ваш адрес после добавления комментария.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER', 'Сервер защиты от спама');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER_DESC', 'На каком сервере зарегистрирован вышеуказанный ключ? "Анонимно" означает, что все данные, предоставляемые сервисам, не содержат имён пользователей и адресов электронной почты. Однако это также снижает частоту обнаружения спама.');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS', 'Антиспам TypePad');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET', 'Оригинальный Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS_ANON', 'Антиспам TypePad (анонимно)');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET_ANON', 'Оригинальный Akismet (анонимно)');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE', 'Исключить URL-адреса из проверки IP-адресов');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE_DESC', 'URL-адреса, которые будут исключены из проверки IP-адресов. ' . PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);

@define('PLUGIN_EVENT_SPAMBLOCK_SPAM', 'Спам');
@define('PLUGIN_EVENT_SPAMBLOCK_NOT_SPAM', 'Не спам');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_VALIDATE', 'Разрешены только расширения файлов .log и .txt');

@define('PLUGIN_EVENT_SPAMBLOCK_TIMEOUT', 'Тайм-аут для комментирования');
@define('PLUGIN_EVENT_SPAMBLOCK_TIMEOUT_DESC', 'Активировать тайм-аут между отображением статьи и принятием комментария');
@define('PLUGIN_EVENT_SPAMBLOCK_TIMEOUT_TYPE', 'Тип тайм-аута');
@define('PLUGIN_EVENT_SPAMBLOCK_TIMEOUT_TYPE_FIX', 'фиксированный промежуток времени');
@define('PLUGIN_EVENT_SPAMBLOCK_TIMEOUT_TYPE_ADAPTIVE', 'в зависимости от длины комментария и статьи');
@define('PLUGIN_EVENT_SPAMBLOCK_TIMEOUT_VALUE', 'Значение для тайм-аута');
@define('PLUGIN_EVENT_SPAMBLOCK_TIMEOUT_VALUE_DESC', 'тип фиксированный: тайм-аут в секундах / тип адаптивный: чтение слов в минуту и ввод символов в минуту, 500 - хорошее значение даже для быстрых читателей');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TIMEOUT','Извините, но Вы не похожи на человека, или Вам следует хотя бы попытаться прочитать статью, прежде чем комментировать');
