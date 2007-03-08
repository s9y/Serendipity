<?php # $Id$

/**
 *  @version $Revision: 1381 $
 *  @author Iwan Cenov <jwalker@hotmail.bg>
 */

@define('PLUGIN_EVENT_WEBLOGPING_PING', 'Анонсиране на статии (чрез XML-RPC пинг) на:');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Изпращане на XML-RPC пинк към хост %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Анонсиране на статии');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Изпраща известия за нови статии на онлайн услуги');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(заменя %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Пинг услуги');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'Една или повече специални пинг услуги, разделени с ",". Записите трябва да бъдат форматирани така: "host.domain/path". Ако бъде въведена "*" в началото на името на хоста, ще му бъдат изпратени разширени XML-RPC опции (само, ако се поддържат от него).');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Неуспех (Причина: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', 'Успех!');
