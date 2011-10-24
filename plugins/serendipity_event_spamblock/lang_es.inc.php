<?php # $Id: lang_es.inc.php 1561 2007-01-02 10:15:53Z garvinhicking $
/**
 *  @version $Revision: 1561 $
 *  @author Rodrigo Lazo Paz <rlazo.paz@gmail.com>
 *  EN-Revision: 690
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Protección anti-Spam');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Una variedad de métodos para prevenir el spam en los comentarios');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Protección anti-Spam: Mensaje inválido.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Protección anti-Spam: No puedes colocar un nuevo comentario tan pronto luego de haber ya hecho uno.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Este blog está en "Modo de Emergencia de Bloqueo de comentarios", por favor regresa más tarde');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'No permitir comentarios duplicados');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Evita que los usuarios envien un comentario que contiene el mismo cuerpo que un comentario distinto ya enviado');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Desactivación de emergencia de comentarios');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Inhabilita temporalmente los comentarios de todas las entradas. Útil si tu blog está siendo atacado por spam.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Intervaluo de bloqueo IP');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Permite enviar comentarios a un IP cada n minutos. Útil para prevenir sobrecarga de comentarios.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Activar Captchas');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Forzará a los usuarios a introducir una cadena al azar mostrada en una imagen especialmente diseñada. Esta opción imposibilitará envíos automáticos a tu blog. Por favor ten en cuenta que personas con problemas visuales podrían encontrar dificil leer los captchas.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'Para prevenir un ataque spam en los comentarios por parte de bots, por favor ingresa la cadena que ves en la imagen mostrada más abajo en la apropiada caja de texto. Tu comentario será aceptado sólo si ambas cadenas son iguales. Por favor, asegúrate que tu navegador soporta y acepta cookies, o tu comentario no podrá ser verificado correctamente.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', '¡Ingresa la cadena que ves más abajo en la caja de texto!');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Ingresa la cadena de protección contra spam de la imgen mostrada abajo: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'No has ingresado correctamente la cadena de protección contra spam mostrada en la imagen. Por favor, mírala e ingresa su valor en la caja de texto.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captchas deshabilitados en tu servidor. Necesitas GDLib y las librerías freetype compiladas con PHP, además que de los archivos .TTF residan en tu directorio.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Forzar captchas luego de cuantos días');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Los captchas pueden ser reforzados dependiendo de la edad de tu artículo. Ingresa la cantidad de días luego de los cuales será necesario ingresar el captcha. Si lo defines en 0, siempre serán utilizados.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Forzar la moderación en los comentarios luego de cuántos días');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Puedes configurar todos los comentarios a las entradas como automáticamente moderados. Ingresa la edad de la entrada en días, luego de la cual será auto-moderada. 0 significa no auto-moderación.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Cuántos enlaces antes de que se modere un comentario');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Cuando un comentario alcanza una cierta cantidad de enlaces, se puede configurar para que sea moderado. 0 significa que no se realizará esta comprobación de enlaces.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Cuántos enlaces antes de que se rechace un comentario');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Cuando un comentario alcance un cierto número de enlaces, ese comentario puede ser rechazado. 0 significa que no se realizará esta comprobación de enlaces.');
@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Debido a ciertas condiciones, tu comentario ha sido marcado de manera que requiere moderación por parte del dueño de este blog.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Color de fondo del captcha');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Ingresa valores RGB: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Ubicación de la bitácora(logfile)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Información sobre comentarios rechazados/moderados puede ser puede ser escrita en una bitácora. Si lo dejas en blanco no se hará reporte alguno.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Bloqueo de comentarios de emergencia');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Comentario duplicado');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'Bloqueo IP');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Captcha inválido (Ingresado: %s, Esperado: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Moderación automática luego de X días');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Demasiados hiper-enlaces');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Demasiados hiper-enlaces');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Ocultar direcciones e-mail de los usuarios que comentan');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'No mostrará dirección e-mail alguna de los usuarios que comenten');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'Direcciones e-mail no serán mostradas y sólo serán utilizadas para notificaciones a través de esa vía');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Elige el método de reporte');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Reportes sobre comentarios rechazados pueden ser hechos a través de la base de datos o en un archivo de texto plano');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Archivo (la opción "logfile" debajo)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Base de datos');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Sin reporte');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Como manejar los comentarios hechos via APIs');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Esta opción afecta la moderación sobre los comentarios hechos via llamadas API (Referencias, comentarios WFW:commentAPI). Si lo defines como "moderado", todos los comentarios de este tipo siempre necesitarán ser aprobados primero. Si seleccionas "rechazar", serán completamente prohibidos. Si seleccionas "ninguno", los comentarios serán tratados como comentarios comunes..');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderado');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'rechazar');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'No se permiten comentarios creados por APIs (i.e. referencias)');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Activar filtro por palabras');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Busca comentarios con ciertas palabras y los marca como spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Filtro por palabras para URLs');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Se permiten expresiones regulares, separa las palabras con punto y coma(;).  Escribe las arrobas (@) por \\@.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Filtro por palabras para nombres de autor');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Filtrado por palabras para el cuerpo del comentario');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Filtrado por palabras para el correo electrónico');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Dirección e-mail inválida');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', '¿Revisar dirección e-mail?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Campos del comentario requeridos');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Ingresa una lista de los campos requeridos que necesitan ser llenados cuando un usuario hace un comentario. Separa múltiples campos con una ",". Las palabras claves disponibles son: nombre(name), email, url, replyTo, comentario(comment)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', '¡No has especificado el campo %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Configura los métodos Anti-Spam');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Bloquear este autor a través de la extensión Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Bloquear esta URL a través de la extensión Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Bloquear este correo electrónico a través de la extensión Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Desbloquear este autor a través de la extensión Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Desbloquear estea URL a través de la extensión Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Desbloquear este correo electrónico a través de la extensión Spamblock');

@define('PLUGIN_EVENT_SPAMBLOCK_BLOGG_SPAMLIST', 'Activar el filtrado de URL através de la lista negra blogg.de');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BLOGG_SPAMLIST', 'Filtrado a través de la lista negra blogg.de');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Titulo de la entrada igual al comentario');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Rechaza comentarios que sólo contengan título');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Revisar Trackback URLs');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Sólo permitir trackbacks, cuando el URL contiene un enlace a tu blog');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Trackback URL inválida.');
?>