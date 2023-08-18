<?php

@define('PLUGIN_EVENT_MAILER_NAME', 'Отправить записи по электронной почте');
@define('PLUGIN_EVENT_MAILER_DESC', 'Позволяет Вам отправить вновь созданную запись по электронной почте на определённый адрес');
@define('PLUGIN_EVENT_MAILER_RECIPIENT', 'Получатель почты');
@define('PLUGIN_EVENT_MAILER_RECIPIENTDESC', 'Адрес электронной почты, на который Вы хотите отправить записи (рекомендуется: список рассылки)');
@define('PLUGIN_EVENT_MAILER_LINK', 'Отправить ссылку на статью по почте?');
@define('PLUGIN_EVENT_MAILER_LINKDESC', 'Приложить ссылку на статью к письму.');
@define('PLUGIN_EVENT_MAILER_STRIPTAGS', 'Удалить HTML?');
@define('PLUGIN_EVENT_MAILER_STRIPTAGSDESC', 'Удалить HTML-теги из почты.');
@define('PLUGIN_EVENT_MAILER_CONVERTP', 'Преобразовать HTML-абзацы в новые строки?');
@define('PLUGIN_EVENT_MAILER_CONVERTPDESC', 'Добавляет новую строку после каждого HTML-абзаца. Это очень полезно, если Вы включаете удаление HTML, чтобы Ваши абзацы можно было сохранить, если они не вводились вручную.');
@define('PLUGIN_EVENT_MAILER_RECIPIENTS', 'Получатель почты (разделите несколько получателей пробелом)');
@define('PLUGIN_EVENT_MAILER_NOTSENDDECISION', 'Эта запись не была отправлена по электронной почте, потому что Вы решили её не отправлять.');
@define('PLUGIN_EVENT_MAILER_SENDING', 'Отправка');
@define('PLUGIN_EVENT_MAILER_ISTOSENDIT', 'Отправить эту запись по электронной почте');
@define('PLUGIN_EVENT_MAILER_SENDTOALL', 'Отправить всем авторам');
@define('PLUGIN_EVENT_MAILER_KEEPSTRIPTAGS', 'Сохранить изображения и гиперссылки при удалении HTML?');
@define('PLUGIN_EVENT_MAILER_KEEPSTRIPTAGSDESC', 'Применяется только при удалении HTML-тегов из почты. Если включено, изображения и гиперссылки будут помещаться внутри текста, при отключении эти заполнители также будут удалены.');
@define('PLUGIN_EVENT_MAILER_FORCESEND', 'Принудительная отправка электронного письма при сохранении');
@define('PLUGIN_EVENT_MAILER_FORCESEND_DESC', 'По умолчанию электронные письма отправляются только при первой публикации записи');
@define('PLUGIN_EVENT_MAILER_MAILTEXT', 'Необязательный пользовательский текст для добавления к электронному письму (например, приветствие или объяснение, почему эта запись отправляется по почте)');
