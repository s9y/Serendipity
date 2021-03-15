<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) by Luis Cervantes <LuisCervantes@ono.com>,
#                    Manuel García <lendulado@gmail.com>,
#                    Rodrigo Lazo <rlazo.paz@gmail.com>,
#                    Melvin D. Nava <mdnava@dotcomo.com>,
# Fixed entities by Leandro Lucarella <luca@llucax.hn.org>
/* vim: set sts=4 ts=4 expandtab : */
/* rlazo[20061114]: dado que el español tiene varias traducciones para ciertas
 * palabras sería bueno mantener una misma traducción para ciertas
 * palabras comunes (tratando de seguir http://es.tldp.org/ORCA/glosario.html):
 *
 * password -> contraseña
 * file -> fichero¿? (se podría utilizar archivo para referirse a las entradas pasadas)
 */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'es_ES.UTF8, es_ES.ISO8859-1, spanish, sp, es, es_ES, es-ES, es_ES.ISO_8859-15, es_ES.ISO_8859-1');
@define('DATE_FORMAT_ENTRY', '%A, %e de %B del %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'es-utf');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Tipo');
@define('PREVIEW', 'Previsualización');
@define('DATE', 'Fecha');
@define('TIME', 'Time');
@define('APPEARANCE', 'Apariencia');
@define('LOGIN', 'Conectar');
@define('LOGOUT', 'Desconectar');
@define('LOGGEDOUT', 'Desconectado');
@define('CREATE', 'Crear');
@define('BACK', 'Atrás');
@define('FORWARD', 'Seguir');
@define('ANONYMOUS', 'Anónimo');
@define('RECENT', 'Recientes...');
@define('OLDER', 'Antiguos...');
@define('DONE', 'Hecho');
@define('TITLE', 'Título');
@define('DESCRIPTION', 'Descripción');
@define('PLACEMENT', 'Localización');
@define('DELETE', 'Borrar');
@define('SAVE', 'Guardar');
@define('UP', 'ARRIBA');
@define('DOWN', 'ABAJO');
@define('PREVIOUS', 'Anterior');
@define('NEXT', 'Siguiente');
@define('ENTRIES', 'entradas');
@define('CATEGORIES', 'Categorías');
@define('NAME', 'Nombre');
@define('EMAIL', 'Correo electrónico');
@define('HOMEPAGE', 'URL personal');
@define('COMMENT', 'Comentario');
@define('VIEW', 'Ver');
@define('HIDE', 'Ocultar');
@define('WEEK', 'Semana');
@define('WEEKS', 'Semanas');
@define('MONTHS', 'Meses');
@define('DAYS', 'Días');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Éxito');
@define('COMMENTS', 'Comentarios');
@define('ADD_COMMENT', 'Añadir comentario');
@define('NO_COMMENTS', 'No hay comentarios');
@define('POSTED_BY', 'Publicado por');
@define('ON', 'activado');
@define('NO_CATEGORY', 'No existe la categoría');
@define('CATEGORY', 'Categoría');
@define('EDIT', 'Editar');
@define('GO', '¡Ir!');
@define('YES', 'Sí');
@define('NO', 'No');
@define('NOT_REALLY', 'No...');
@define('DUMP_IT', 'Sí');
@define('IN', 'en');
@define('AT', 'a las');
@define('LEFT', 'Izquierda');
@define('RIGHT', 'Derecha');
@define('CENTER', 'Centro');
@define('ARCHIVES', 'Archivos');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Buscar');
@define('TRACKBACKS', 'Referencias');
@define('TRACKBACK', 'Referencia');
@define('NO_TRACKBACKS', 'No hay referencias');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Segmento');
@define('TRACKED', 'Tracked');
@define('USER', 'Usuario');
@define('USERNAME', 'Nombre de usuario');
@define('PASSWORD', 'Contraseña');
@define('HIDDEN', 'Oculto');
@define('IMAGE', 'Imagen');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'versión');
@define('INSTALL', 'Instalar');
@define('REPLY', 'Responder');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Error');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Forzar');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administración');
@define('ADMIN_FRONTPAGE', 'Página principal');
@define('QUOTE', 'Cita');
@define('NONE', 'ninguno');
@define('GROUP', 'Grupo');
@define('AUTHORS', 'Autores');
@define('UPGRADE', 'Actualizar');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Todos los autores');
@define('PREVIOUS_PAGE', 'página anterior');
@define('NEXT_PAGE', 'página siguiente');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Todas las categorías');
@define('LAST_UPDATED', 'Última actualización');
@define('IP_ADDRESS', 'Dirección IP');
@define('CHARSET', 'Juego de caracteres');
@define('REFERER', 'Referer');
@define('APPROVE', 'Aprobar');
@define('NOT_FOUND', 'No encontrado');
@define('WRITABLE', 'Se puede escribir');
@define('NOT_WRITABLE', 'No se puede escribir');
@define('WELCOME_BACK', 'Bienvenido de nuevo,');
@define('USE_DEFAULT', 'Predeterminado');
@define('SORT_BY', 'Ordenación');
@define('SORT_ORDER', 'Ordenar por');
@define('SORT_ORDER_ASC', 'Ascendente');
@define('SORT_ORDER_DESC', 'Descendente');
@define('FILTERS', 'Filtros');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Mostrar/Ocultar todo');
@define('TOGGLE_OPTION', 'Mostrar/Ocultar');
@define('IN_REPLY_TO', 'En respuesta a');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Directorio');
@define('BACK_TO_BLOG', 'Volver al weblog');
@define('HTML_NUGGET', 'Fragmento de HTML');
@define('TITLE_FOR_NUGGET', 'Título para el fragmento de HTML');
@define('COMMENT_ADDED', 'Tu comentario ha sido añadido correctamente.');
@define('ENTRIES_FOR', 'Entradas para %s');
@define('NO_ENTRIES_TO_PRINT', 'No hay entradas para mostrar');
@define('COMMENT_DELETE_CONFIRM', '¿Estás seguro que deseas eliminar el comentario #%d, escrito por %s?');
@define('DELETE_SURE', '¿Estás seguro de que quieres eliminar #%s permanentemente?');
@define('MEDIA_FULLSIZE', 'Tamaño real');
@define('SIDEBAR_PLUGIN', 'extensión de barra lateral');
@define('EVENT_PLUGIN', 'extensión de evento');
@define('PLUGIN_ITEM_DISPLAY', '¿Dónde debería mostrarse el elemento?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Sólo en la entrada extendida');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Sólo en la entrada general');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Siempre');
@define('DIRECTORY_WRITE_ERROR', 'No puedes escribir en el directorio %s. Comprueba los permisos.');
@define('FILE_WRITE_ERROR', 'No se puede escribir el fichero %s.');
@define('INCLUDE_ERROR', 'Error de Serendipity: no se puede incluir %s - saliendo.');
@define('DO_MARKUP', 'Realizar transformaciones marcas');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formato de fecha');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'El formato de fecha de la entrada actual, usa las variables strftime() de PHP. (Predeterminado: "%s")');
@define('APPLY_MARKUP_TO', 'Aplicar marca a %s');
@define('XML_IMAGE_TO_DISPLAY', 'Botón XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Enlaces a feeds XML se mostrarán con esta imagen. Déjalo vacío para el valor predeterminado, introduce \'none\' para desactivar.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Borrando fichero %s...');
@define('SETTINGS_SAVED_AT', 'La nueva configuración se ha guardado a la hora %s');
@define('INVERT_SELECTIONS', 'Invertir selecciones');

@define('PERSONAL_SETTINGS', 'Configuración personal');
@define('DO_MARKUP_DESCRIPTION', 'Aplicar transformaciones de marcas al texto (caras, marcas abreviadas como *. /, _, ...). Desactivando esto preservará cualquier código HTML en el texto.');
@define('BASE_DIRECTORY', 'Directorio base');
@define('PERM_READ', 'Permiso de lectura');
@define('PERM_WRITE', 'Permiso de escritura');
@define('PERM_DENIED', 'Permiso denegado.');
@define('CURRENT_AUTHOR', 'Autor actual');
@define('PLUGIN_ACTIVE', 'Activa');
@define('PLUGIN_INACTIVE', 'Inactiva');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderar');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalación de Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Bienvenido a la Instalación de Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Primero determinaremos tu configuración actual e intentaremos diagnosticar cualquier problema de compatibilidad');
@define('ERRORS_ARE_DISPLAYED_IN', 'Los errores se muestran en %s, las recomendaciones en %s y lo bien configurado en %s');
@define('RED', 'rojo');
@define('YELLOW', 'amarillo');
@define('GREEN', 'verde');
@define('PRE_INSTALLATION_REPORT', 'Informe de preinstalación de Serendipity v%s');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'Instalación de PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Sistema operativo');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'Configuración de php.ini');
@define('RECOMMENDED', 'Recomendado');
@define('ACTUAL', 'Actual');
@define('PERMISSIONS', 'Permisos');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Los permisos se pueden modificar ejecutando: `<em>%s</em>` sobre el directorio que ha fallado, lo puedes hacer desde la línea de comandos o usando un programa FTP');
@define('PROBLEM_DIAGNOSTIC', 'Debido a los problemas encontrados, no puedes continuar con la instalación sin antes solucionar los errores señalados');
@define('SELECT_INSTALLATION_TYPE', 'Selecciona qué tipo de instalación quieres usar');
@define('RECHECK_INSTALLATION', 'Volver a comprobar la instalación');
@define('SIMPLE_INSTALLATION', 'Instalación simple');
@define('EXPERT_INSTALLATION', 'Instalación avanzada');
@define('COMPLETE_INSTALLATION', 'Completar instalación');
@define('WONT_INSTALL_DB_AGAIN', 'no se instalará de nuevo la base de datos');
@define('THEY_DO', 'existen');
@define('THEY_DONT', 'no existen');
@define('CHECK_DATABASE_EXISTS', 'Comprobando si la base de datos y las tablas ya existen');
@define('CREATE_DATABASE', 'Creando la configuración predeterminada de la base de datos...');
@define('ATTEMPT_WRITE_FILE', 'Intentando escribir el fichero %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Creando el autor principal \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Configurando la plantilla predeterminada');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalando extensiones predeterminadas');
@define('SERENDIPITY_INSTALLED', 'Serendipity se ha instalado exitosamente');
@define('VISIT_BLOG_HERE', 'Visita tu nuevo blog aquí');
@define('THANK_YOU_FOR_CHOOSING', 'Gracias por elegir Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Se detectó un error en la instalación');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Basado en');
@define('ADMIN_FOOTER_POWERED_BY', 'Basado en Serendipity %s y PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Editor estándar');
@define('USERLEVEL_CHIEF_DESC', 'Editor jefe');
@define('USERLEVEL_ADMIN_DESC', 'Administrador');
@define('WWW_USER', 'Cambia www por el usuario que está ejecutando el servidor web (p. ej. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'El directorio %s no existe y no puede ser creado. Créalo manualmente.');
@define('DIRECTORY_RUN_CMD', ' - ejecuta <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'No se puede ejecutar %s');
@define('FILE_CREATE_YOURSELF', 'Crea el fichero tu mismo o verifica los permisos');
@define('COPY_CODE_BELOW', '<br />* Tan solo copia el código situado debajo y ponlo %s dentro %s del directorio:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Una vez hecho esto, pulsa en tu navegador el botón "Recargar".');
@define('ERROR_TEMPLATE_FILE', 'Incapaz de abrir el fichero plantilla, ¡por favor actualiza serendipity!');
@define('HTACCESS_ERROR', 'Para verificar tu instalación del servidor web, serendipity deber ser capaz de escribir en el fichero ".htaccess". Esto no fue posible debido a errores de permisos. Por favor, ajusta los permisos como: <br /> %s<br />y recarga esta página.');
@define('EMPTY_SETTING', '¡No especificaste un valor válido para "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Se ha detectado una discrepancia entre tu configuración actual que es la versión %s, y la de serendipity versión %s, ¡necesitas actualizar! <a href="%s">Haz click aquí</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Hola y bienvenido al agente de actualización de Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Estoy aquí para ayudarte a actualizar tu instalación %s de Serendipity.');
@define('SERENDIPITY_UPGRADER_WHY', 'Estás viendo este mensaje porque has instalado Serendipity %s, pero no has actualizado la instalación de la base de datos para coincidir con esta versión');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Actualizaciones para la base de datos (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'He encontrado los siguientes ficheros .sql que se necesitan ejecutar antes de que puedas continuar usando normalmente Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Tareas específicas de la versión');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'No se ha encontrado tareas específicas de la versión');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', '¿Quieres que realice las tareas descritas?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'No, las ejecutaré manualmente');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Sí, por favor');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Parece que no necesitas ejecutar ninguna actualización');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Considera actualizado Serendipity');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Has ignorado el paso de actualización de Serendipity, asegúrate que tu base de datos está correctamente instalada y que las funciones planeadas son ejecutadas.');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Tu instalación de Serendipity se ha actualizado a la versión %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Puedes volver a tu blog haciendo click %saquí%s');
@define('ADMIN_ENTRIES', 'Entradas');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'No se puede conectar al gestor de base de datos MySQL: %s.');
@define('COULDNT_SELECT_DB', 'No se puede seleccionar la base de datos: %s.');
@define('COULDNT_SELECT_USER_INFO', 'No se puede seleccionar la información del usuario: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'No se puede seleccionar la información de la categoría: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'No se puede seleccionar la información de la entrada: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'No se puede seleccionar la información del comentario: %s.');
@define('MYSQL_REQUIRED', 'Debes tener la extensión MySQL para poder llevar a cabo esta acción.');
@define('CREATE_AUTHOR', 'Crear autor \'%s\'.');
@define('CREATE_CATEGORY', 'Crear categoría \'%s\'.');
@define('MT_DATA_FILE', 'fichero de datos de Movable Type');
@define('INSTALL_DBPORT', 'Puerto de la base de datos');
@define('INSTALL_DBPORT_DESC', 'El puerto utilizado para conectarse con el servidor de tu base de datos');
@define('IMPORT_PLEASE_ENTER', 'Por favor introduce los datos como se requiere debajo');
@define('IMPORT_NOW', '¡Importar ahora!');
@define('IMPORT_STARTING', 'Iniciando procedimiento de importación...');
@define('IMPORT_FAILED', 'Importación fallida');
@define('IMPORT_DONE', 'Importación completada con éxito');
@define('IMPORT_WEBLOG_APP', 'Aplicación weblog');
@define('IMPORT_NOTES', 'Nota:');
@define('IMPORT_STATUS', 'Estado después de importar');
@define('RSS_IMPORT_WPXRSS', 'Importar el RSS eXtendido de WordPress (WPXRSS), necesita PHP5 y es posible que consuma bastante memoria');
@define('RSS_IMPORT_BODYONLY', 'Coloca todo el texto importado en el "cuerpo" y no lo separes en la sección "entrada extendida".');
@define('IMPORT_GENERIC_RSS', 'Importar RSS genérico');
@define('ACTIVATE_AUTODISCOVERY', 'Enviar referencias a los enlaces encontrados en la entrada');
@define('RSS_IMPORT_CATEGORY', 'Usa esta categoría para las entradas importadas que no coincidan');
@define('IMPORT_WP_PAGES', '¿Descargar archivos adjuntos y páginas estáticas como entradas normales del blog?');
@define('DOCUMENT_NOT_FOUND', 'El documento %s no se encontró.');
@define('CONVERT_HTMLENTITIES', '¿Intentar autoconvertir las entidades HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Suite de Administración de Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Usuario o contraseña erróneo');
@define('PLEASE_ENTER_CREDENTIALS', 'Por favor introduce tus credenciales abajo.');
@define('AUTOMATIC_LOGIN', 'Guardar información');
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
@define('MEDIA', 'Medios');
@define('MEDIA_LIBRARY', 'Biblioteca de medios');
@define('ADD_MEDIA', 'Añadir medio');
@define('MANAGE_DIRECTORIES', 'Gestión de directorios');
@define('CONFIGURATION', 'Configuración');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Más enlaces');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Página principal de Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Documentación de Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Blog oficial');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Foros');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Esta entrada no se ha publicado todavía.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Extensiones de barra lateral');
@define('EVENT_PLUGINS', 'Extensiones de eventos');
@define('CONFIGURE_PLUGINS', 'Configurar extensiones');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Requisitos no alcanzados: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Actualizar a la versión %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Click aquí para instalar una nueva %s');
@define('ALREADY_INSTALLED', 'Ya está instalado');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d extensiones.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Editar entradas');
@define('EDIT_ENTRY', 'Editar entrada');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Borrador');
@define('PUBLISH', 'Publicar');
@define('CONTENT', 'Contenido');
@define('ENTRIES_PER_PAGE', 'entradas por página');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Entradas permanentes');
@define('PAGE_BROWSE_ENTRIES', 'Página %s de %s, en total %s entradas');
@define('FIND_ENTRIES', 'Encontrar entradas');
@define('RIP_ENTRY', 'Entrada #%s borrada.');
@define('NEW_ENTRY', 'Nueva entrada');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Texto de la entrada');
@define('EXTENDED_BODY', 'Texto ampliado');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Se ha guardado un borrador de esta entrada');
@define('IFRAME_PREVIEW', 'Serendipity está creando la vista previa de tu entrada...');
@define('IFRAME_WARNING', 'Tu navegador no admite el concepto de "iframes". Por favor, edita tu fichero serendipity_config.inc.php y ajusta la variable $serendipity[\'use_iframe\'] a FALSE.');
@define('DATE_INVALID', 'Aviso: La fecha especificada no es válida. Debe tener el formato AAAA-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Opciones avanzadas');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Este enlace no es para hacer click en él. Contiene la URI de referencia para esta entrada. Puedes usar esta URI para enviar "ping-" y "trackbacks" desde tu propio blog a esta entrada. Para copiar el enlace, haz click con el botón derecho y selecciona "Copy Shortcut" en Internet Explorer o "Copy Link Location" en Mozilla.');
@define('RESET_DATE', 'Volver a poner la fecha');
@define('RESET_DATE_DESC', 'Click aquí para poner la fecha actual');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Gestión de usuarios');
@define('CREATE_NEW_USER', 'Crear nuevo usuario');
@define('CREATE_NOT_AUTHORIZED', 'No puedes modificar usuarios con el mismo nivel que el tuyo');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'No puedes crear usuarios con un nivel mayor que el tuyo');
@define('CREATED_USER', 'Un nuevo usuario %s se ha creado');
@define('MODIFIED_USER', 'Las propiedades del usuario %s se han cambiado');
@define('USER_LEVEL', 'Nivel de usuario');
@define('WARNING_NO_GROUPS_SELECTED', 'Advertencia: No haz seleccionado ningún grupo de miembros. Esto efectivamente te dejaría fuera de la gerencia del grupo de usuarios, por lo tanto, tu membresía de grupo no fue cambiada.');
@define('DELETE_USER', 'Estás a punto de borrar al usuario #%d %s. ¿Estás seguro? Esto no permitirá mostrar las entradas escritas por él.');
@define('DELETED_USER', 'Usuario #%d %s borrado.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Administración de grupos');
@define('DELETED_GROUP', 'Grupo #%d %s eliminado.');
@define('CREATED_GROUP', 'Un nuevo grupo %s ha sido creado');
@define('MODIFIED_GROUP', 'Las propiedades del grupo %s han sido modificado');
@define('CREATE_NEW_GROUP', 'Crear nuevo grupo');
@define('DELETE_GROUP', 'Estás apunto de eliminar el grupo #%d %s. ¿Estás seguro?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Encontrar comentarios');
@define('COMMENTS_FILTER_SHOW', 'Mostrar');
@define('COMMENTS_FILTER_ALL', 'Todo');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Sólo lo aprobado');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Pendiente de aprobación');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', '¿Estás seguro que deseas eliminar los comentarios seleccionados?');
@define('PAGE_BROWSE_COMMENTS', 'Página %s de %s, total %s comentarios');
@define('COMMENT_IS_DELETED', '(Comentario eliminado)');
@define('COMMENT_MODERATED', 'El comentario #%s ha sido marcado como moderado exitosamente');
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
@define('CATEGORY_SAVED', 'Categoría guardada');
@define('CATEGORY_ALREADY_EXIST', 'Una categoría con el nombre "%s" ya existe');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Categoría #%s eliminada. Los artículos antiguos han sido movidos a la categoría #%s');
@define('CATEGORY_DELETED', 'Categoría #%s eliminada.');
@define('INVALID_CATEGORY', 'Ninguna categoría valida para borrar');
@define('EDIT_THIS_CAT', 'Editando "%s"');
@define('CATEGORY_REMAINING', 'Borra esta categoría y mueve sus entradas a esta categoría');
@define('PARENT_CATEGORY', 'Categoría superior');
@define('CATEGORY_HIDE_SUB', '¿Ocultar las entradas realizadas en sub-categorías?');
@define('CATEGORY_HIDE_SUB_DESC', 'Por defecto, cuando se navega una categoría también se muestran las entradas hechas en cualquiera de sus sub-categorías. Si activas esta opción, se mostraran únicamente aquellas entradas que pertenezcan a la categoría seleccionada.');
@define('CREATE_NEW_CAT', 'Crear una categoría nueva');
@define('ALREADY_SUBCATEGORY', '%s es ya una subcategoría de %s.');
@define('NO_CATEGORIES', 'No hay categorías');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importar entradas');
@define('EXPORT_ENTRIES', 'Exportar entradas');
@define('EXPORT_FEED', 'Exportar la sindicación RSS completa');
@define('CREATE_THUMBS', 'Crear las miniaturas');
@define('WARNING_THIS_BLAHBLAH', "ATENCIóN:\\nPuede tardar si hay muchas imágenes que no tienen miniatura.");
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
@define('TEMPLATE_SET', '\'%s\' ha sido configurada como tu plantilla activa');
@define('WARNING_TEMPLATE_DEPRECATED', 'Aviso: Tu plantilla actual está usando un método obsoleto de plantillas, actualízala si es posible');
@define('STYLE_OPTIONS_NONE', 'Este tema/estilo no tiene opciones específicas. Para ver como tu plantilla puede especificar opciones, lee la documentación técnica en www.s9y.org acerca de "Configuración de las opciones de los estilos".');
@define('STYLE_OPTIONS', 'Opciones de Tema/estilo');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Interfaz de la suite de administración personalizada');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Mantenlo como plantilla');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Revisa y guarda');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Quita las extensiones seleccionadas');
@define('SAVE_CHANGES_TO_LAYOUT', 'Guarda los cambios en el diseño');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Sincronizando la base de datos con el directorio de imágenes.');
@define('SYNC_DONE', 'Hecho (Sincronizadas %s imágenes).');
@define('RESIZE_BLAHBLAH', '<b>Cambiar tamaño %s</b>');
@define('ORIGINAL_SIZE', 'Tamaño original: <i>%sx%s</i> pixel');
@define('RESIZING', 'Cambiando el tamaño');
@define('RESIZE_DONE', 'Terminado (las imágenes %s cambiaron de tamaño).');
@define('KEEP_PROPORTIONS', 'Mantener las proporciones');
@define('REALLY_SCALE_IMAGE', '¿Realmente deseas escalar la imagen? ¡No se podrá deshacer esta acción!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Aquí puedes ajustar el nuevo tamaño de la imagen. Si quieres mantener las proporciones sólo introduce uno de los valores y presiona la tecla tabulador (TAB), de esta forma se ajustará automáticamente:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nuevo tamaño: ');
@define('SCALING_IMAGE', 'Escalando %s a %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'El directorio y los ficheros fueron exitosamente movidos a %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', '¡El directorio y los ficheros no pudieron ser movidos a %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Directorio <strong>%s</strong> creado.');
@define('PARENT_DIRECTORY', 'Directorio superior');
@define('CONFIRM_DELETE_DIRECTORY', '¿Estás seguro de que quieres eliminar todos los contenidos del directorio %s?');
@define('ERROR_NO_DIRECTORY', 'Error: Directorio %s no existe');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'No puedo borrar un directorio con ficheros. Marca "forzar borrado" si quieres eliminar también los ficheros e inténtalo de nuevo. Los ficheros que existen son:');
@define('DIRECTORY_DELETE_FAILED', 'Eliminación del directorio %s fallida. Revisa los permisos o los mensajes anteriores.');
@define('DIRECTORY_DELETE_SUCCESS', 'Directorio %s eliminado exitosamente.');
@define('CHECKING_DIRECTORY', 'Verificar ficheros en directorio %s');
@define('DELETE_DIRECTORY', 'Borrar directorio');
@define('DELETE_DIRECTORY_DESC', 'Estás a punto de borrar los contenidos de un directorio que contiene ficheros de medios, posiblemente ficheros utilizados en algunas de tus entradas.');
@define('FORCE_DELETE', 'Borrar TODOS los ficheros de este directorio, incluyendo aquellos desconocidos para Serendipity');
@define('CREATE_DIRECTORY', 'Crear directorio');
@define('CREATE_NEW_DIRECTORY', 'Crear nuevo directorio');
@define('CREATE_DIRECTORY_DESC', 'Aquí puedes crear un nuevo directorio para almacenar ficheros de medios. Escoge el nombre del nuevo directorio y selecciona un directorio superior (opcional) donde ponerlo.');
@define('ABOUT_TO_DELETE_FILE', 'Estás a punto de borrar <b>%s</b><br />Si estás usando este fichero en alguna de tus entradas, esto causará enlaces o imágenes rotos<br />¿Estás seguro de que quieres seguir?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Error: ¡El fichero ya existe en el sistema!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'No es posible encontrar el fichero con nombre <b>%s</b>, ¿es posible que lo haya borrado ya?');
@define('ERROR_FILE_FORBIDDEN', 'No te está permitido transferir ficheros con contenido activo');
@define('REMOTE_FILE_NOT_FOUND', 'El fichero no fue localizado en el servidor remoto, ¿estás seguro de que la URL: <b>%s</b> es correcta?');
@define('FILE_FETCHED', '%s enlazado como: %s');
@define('FILE_UPLOADED', 'El fichero %s fue transferido correctamente: %s');
@define('DELETE_FILE_FAIL', 'Unable to delete file <b>%s</b>');
@define('DELETE_FILE', 'Borrado el fichero llamado <b>%s</b>');
@define('FOUND_FILE', 'Encontrado fichero nuevo/modificado: %s.');
@define('FILENAME_REASSIGNED', 'Nombre asignado automágicamente al nuevo fichero: %s');
@define('ERROR_FILE_EXISTS', 'Error: ¡Un fichero con ese nombre ya existe, selecciona otro!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'enlazado externamente');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Introduzca el nuevo nombre para: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Añadiendo imagen...');
@define('THUMB_CREATED_DONE', 'Miniatura creada.<br />Hecho.');
@define('THUMBNAIL_USING_OWN', 'Usando %s como su miniatura debido al escaso tamaño.');
@define('THUMBNAIL_FAILED_COPY', 'Querías usar %s como tu miniatura, ¡pero ha fallado la copia!');
@define('DELETE_THUMBNAIL', 'Eliminada la imagen miniatura llamada <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ocurrió un error desconocido, fichero no importado. Quizás el tamaño del fichero es mayor que el tamaño máximo permitido por tu instalación. Verifica con tu ISP o edita tu fichero php.ini para permitir transferir ficheros de tamaño más grande.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: ¡No puedes subir ficheros de más de %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: ¡No puedes subir imágenes de más de %s x %s pixels!');
@define('HOTLINK_DONE', 'Fichero como recurso externo enlazado.<br />Hecho.');
@define('DELETE_HOTLINK_FILE', 'Borrado el recurso enlazado externamente con el nombre <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Incapaz de ejecutar: "%s", error: %s, variable devuelta: %d');
@define('SKIPPING_FILE_EXTENSION', 'Saltando fichero: falta extensión en %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Saltando fichero: %s no se puede leer.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Define los mismos permisos en todos los directorios hijos');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Quiero usar la miniatura en mi entrada.');
@define('I_WANT_BIG_IMAGE', 'Quiero usar la imagen más grande en mi entrada.');
@define('I_WANT_NO_LINK', ' Quiero que aparezca como una imagen');
@define('I_WANT_IT_TO_LINK', 'Quiero que aparezca como un enlace a esta URL:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Tamaño de la imagen');
@define('IMAGE_ALIGNMENT', 'Alineación de imágenes');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Inserción de imagen');
@define('MEDIA_TARGET', 'Objetivo de este enlace');
@define('MEDIA_TARGET_JS', 'Ventana emergente (a través de JavaScript, tamaño adaptativo)');
@define('MEDIA_ENTRY', 'Entrada aislada');
@define('MEDIA_TARGET_BLANK', 'Ventana emergente (a través de target=_blank)');
@define('YOU_CHOSE', 'Elige %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Rotate image 90 degrees counter-clockwise');
@define('IMAGE_ROTATE_RIGHT', 'Rotate image 90 degrees clockwise');
@define('MEDIA_RENAME', 'Renombrar este fichero');
@define('THUMBNAIL_SHORT', 'Miniatura');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Nombre de fichero');
@define('SORT_ORDER_EXTENSION', 'Extensión de fichero');
@define('SORT_ORDER_SIZE', 'Tamaño de fichero');
@define('SORT_ORDER_WIDTH', 'Anchura de imagen');
@define('SORT_ORDER_HEIGHT', 'Altura de imagen');
@define('SORT_ORDER_DATE', 'Fecha de transferencia');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Añade un fichero a tu colección de medios:</b><p>Desde aquí puedes transferir un fichero de medios o puedes decirme que los coja de algún ¡lugar de la web! Si no tienes una imagen apropiada, <a href="https://images.google.com/" target="_blank">busca imágenes en google</a> que vaya con tu forma de pensar, los resultados son útiles y divertidos a veces :)</p><p><b>Selecciona el método:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Introduce una URL para obtener el fichero:');
@define('ENTER_MEDIA_UPLOAD', 'Selecciona el fichero que quieres transferir:');
@define('SAVE_FILE_AS', 'Guardar el fichero como:');
@define('STORE_IN_DIRECTORY', 'Almacenar dentro del siguiente directorio: ');
@define('IMAGE_MORE_INPUT', 'Añadir más imágenes');
@define('ENTER_MEDIA_URL_METHOD', 'Método de obtención:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Nota: Enlazar recursos externos te permite usar imágenes externas sin almacenarlas localmente. Si escoges esta opción, asegúrate de poseer los permisos para hacerlo en el servidor externo o bien el servidor es tuyo.');
@define('FETCH_METHOD_IMAGE', 'Descargar imagen a tu servidor');
@define('FETCH_METHOD_HOTLINK', 'Enlazar externamente al servidor');
@define('GO_ADD_PROPERTIES', 'Ir & ingresar propiedades');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Redimensionar esta imagen');
@define('MEDIA_DELETE', 'Borrar este fichero');
@define('FILES_PER_PAGE', 'Ficheros por página');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'No se encontraron imágenes');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'todos los directorios');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Configuración realizada y guardada');
@define('DIAGNOSTIC_ERROR', 'Hemos detectado algunos errores mientras se ejecutaban varias comprobaciones en la información que has introducido:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Opciones de la base de datos');
@define('INSTALL_CAT_DB_DESC', 'Introduce aquí la información de tu base de datos. Serendipity la necesita para funcionar');
@define('INSTALL_DBTYPE', 'Tipo');
@define('INSTALL_DBTYPE_DESC', 'El tipo de gestor de la base de datos');
@define('INSTALL_DBHOST', 'Servidor');
@define('INSTALL_DBHOST_DESC', 'El servidor donde está el gestor de la base de datos');
@define('INSTALL_DBUSER', 'Usuario');
@define('INSTALL_DBUSER_DESC', 'El usuario que conecta a la base de datos');
@define('INSTALL_DBPASS', 'Contraseña');
@define('INSTALL_DBPASS_DESC', 'La contraseña para el usuario');
@define('INSTALL_DBNAME', 'Nombre');
@define('INSTALL_DBNAME_DESC', 'El nombre de la base de datos');
@define('INSTALL_DBPREFIX', 'Prefijo');
@define('INSTALL_DBPREFIX_DESC', 'Prefijo para los nombres de las tablas, p. ej. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Usar conexiones persistentes');
@define('INSTALL_DBPERSISTENT_DESC', 'Activar el uso de conexiones persistentes a la base de datos, lee más en <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">here</a>. Normalmente no se recomienda');
@define('INSTAL_DB_UTF8', 'Activar conversión del juego de caracteres en la BD');
@define('INSTAL_DB_UTF8_DESC', 'Envía una consulta MySQL "SET NAMES" para definir el juego de caracteres requerido por la base de datos. Actívalo o desactívalo sí ves caracteres extraños en tu blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Rutas');
@define('INSTALL_CAT_PATHS_DESC', 'Varias rutas a ficheros y directorios esenciales. ¡No olvides la barra final en los directorios!');
@define('INSTALL_FULLPATH', 'Ruta completa');
@define('INSTALL_FULLPATH_DESC', 'La ruta completa y absoluta a tu instalación de serendipity');
@define('INSTALL_UPLOADPATH', 'Ruta para los ficheros transferidos');
@define('INSTALL_UPLOADPATH_DESC', 'Todos los ficheros transferidos irán aquí, relativo a  \'Ruta completa\' - normalmente \'uploads/\'');
@define('INSTALL_RELPATH', 'Ruta relativa');
@define('INSTALL_RELPATH_DESC', 'Ruta de serendipity para tu navegador, normalmente \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Ruta relativa para las plantillas');
@define('INSTALL_RELTEMPLPATH_DESC', 'Ruta al directorio que contiene tus plantillas - Relativa a la \'ruta relativa\'');
@define('INSTALL_RELUPLOADPATH', 'Ruta relativa para los ficheros transferidos');
@define('INSTALL_RELUPLOADPATH_DESC', 'Ruta de los ficheros transferidos - Relativa a la \'ruta relativa\'');
@define('INSTALL_URL', 'URL para el blog');
@define('INSTALL_URL_DESC', 'URL base de tu instalación de serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetectar HTTP-Host usado');
@define('INSTALL_AUTODETECT_URL_DESC', 'Si se configura como "Sí", Serendipity asegurará que el nombre de Host HTTP que usó por tu visitante para acceder al blog se usa como la URL base. Activando esto te permitirá usar varios nombres de dominio para tu blog, y usar ese dominio para todos los enlaces que siga el usuario.');
@define('INSTALL_INDEXFILE', 'Fichero índice');
@define('INSTALL_INDEXFILE_DESC', 'El nombre del fichero índice de serendipity');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Enlaces permanentes');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Define varios patrones URL para definir enlaces permanentes en tu blog. Es recomendado que utilices los valores por defecto; sino, debes tratar de utilizar el valor %id% donde sea posible para evitar que Serendipity busque en la base de datos la URL.');
@define('INSTALL_PERMALINK', 'Estructura URL de los enlaces permanentes');
@define('INSTALL_PERMALINK_DESC', 'Aquí puedes definir la estructura URL relativa desde la URL base hasta donde las entradas sean accesibles. Puedes utilizar las variables %id%, %title%, %day%, %month%, %year%  y cualquier otro caracter.');
@define('INSTALL_PERMALINK_AUTHOR', 'Estructura URL de los enlaces permanentes al autor');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Aquí puedes definir la estructura URL relativa desde la URL base hasta donde las entradas pertenecientes a cierto autor sean accesibles. Puedes utilizar las variables %id%, %realname%, %username%, %email% y cualquier otro caracter.');
@define('INSTALL_PERMALINK_CATEGORY', 'Estructura URL de los enlaces permanentes a categorías');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Aquí puedes definir la estructura URL relativa desde la URL base hasta donde las entradas pertenecientes a cierta categoría sean accesibles. Puedes utilizar las variables %id%, %name%, %parentname%, %description% y cualquier otro caracter.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Estructura URL de los enlaces permanentes a la sindicación RSS de las categorías');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Aquí puedes definir la estructura URL relativa desde la URL base hasta donde las sindicaciones RSS de ciertas categorías sean accesibles. Puedes utilizar las variables %id%, %name%, %description% y cualquier otro caracter.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Estructura de los Enlaces Permanentes para las sindicaciones RSS de autores');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Aquí puedes definir la estructura relativa de URLs comenzando por tu URL base hasta incluso las sindicaciones RSS de usuarios específicos que puedan ser vistos. Puedes usar las variables %id%, %realname%, %username%, %email% y cualquier otro carácter.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Ruta a los archivos');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Ruta para archivar');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Ruta a las categorías');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Ruta para los autores');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Ruta para desinscribirse de los comentarios');
@define('INSTALL_PERMALINK_DELETEPATH', 'Ruta para eliminar comentarios');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Ruta para aprobar comentarios');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Ruta a las sindicaciones RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Ruta a extensión');
@define('INSTALL_PERMALINK_ADMINPATH', 'Ruta a admin');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Ruta para buscar');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Ruta a los comentarios');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Opciones generales');
@define('INSTALL_CAT_SETTINGS_DESC', 'Configura el comportamiento de Serendipity');
@define('INSTALL_USERNAME', 'Usuario administrador');
@define('INSTALL_USERNAME_DESC', 'Nombre de usuario del administrador');
@define('INSTALL_PASSWORD', 'Contraseña de administrador');
@define('INSTALL_PASSWORD_DESC', 'Contraseña del administrador');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Nombre real');
@define('USERCONF_REALNAME_DESC', 'El nombre completo del autor. Este es el nombre que verán los lectores.');
@define('INSTALL_EMAIL', 'Correo electrónico');
@define('INSTALL_EMAIL_DESC', 'Correo electrónico del administrador');
@define('INSTALL_SENDMAIL', '¿Enviar correos al administrador?');
@define('INSTALL_SENDMAIL_DESC', '¿Quieres recibir un correo electrónico cuando envíen comentarios a tus entradas?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nombre del blog');
@define('INSTALL_BLOGNAME_DESC', 'El título de tu blog');
@define('INSTALL_BLOGDESC', 'Descripción del blog');
@define('INSTALL_BLOGDESC_DESC', 'Descripción de tu blog');
@define('INSTALL_BLOG_EMAIL', 'Correo electrónico del Blog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Aquí se configura la dirección de correo electrónico que se utiliza como "De:" en los correos salientes. Asegúrate de definir esta variable con una dirección que sea reconocida por el servidor de correo de tu hosts - muchos servidores de correo rechazan los mensajes que tienen una dirección "De:" desconocida.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Idioma');
@define('INSTALL_LANG_DESC', 'Selecciona el idioma del blog');
@define('INSTALL_CHARSET', 'Selección del juego de caracteres');
@define('INSTALL_CHARSET_DESC', 'Aquí puedes activar la codificación de caracteres UTF-8 o nativo (ISO, EUC, ...). Algunos lenguajes sólo tienen traducciones UTF-8 así que colocar la codificación en "nativo" no tendrá efectos. Se sugiere UTF-8 en nuevas instalaciones. No alteres la configuración si ya has hecho entradas con caracteres especiales ya que podría conllevar una corrupción de caracteres. Asegúrate de leer más sobre este problema en  https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Tipo de calendario');
@define('INSTALL_CAL_DESC', 'Elige tu formato de calendario');
@define('AUTOLANG', 'Usar el lenguaje del navegador del visitante como predeterminado');
@define('AUTOLANG_DESC', 'Si está activado, se usará la configuración de lenguaje del navegador del visitante para determinar el lenguaje predeterminado de tu entrada así como de la interfaz.');
@define('USERGROUPS_FORBIDDEN_ENABLE', '¿Activar la extensión ACL para grupos de usuarios?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Si la opción "Extensión ACL para grupos de usuarios" es activada en la configuración, puedes especificar que grupos de usuarios son capaces de ejecutar ciertas extensiones/eventos.');
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
@define('INSTALL_CAT_DISPLAY', 'Apariencia');
@define('INSTALL_CAT_DISPLAY_DESC', 'Configura el aspecto general de Serendipity');
@define('INSTALL_FETCHLIMIT', 'Entradas a mostrar en la página principal');
@define('INSTALL_FETCHLIMIT_DESC', 'Número de entradas a mostrar en la página principal');
@define('INSTALL_RSSFETCHLIMIT', 'Entradas a mostrar en las sindicaciones');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Número de entradas a mostrar por cada página.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activar seguimiento estricto de la norma RFC2616 para sindicaciones RSS');
@define('SYNDICATION_RFC2616_DESC', 'NO forzar el seguimiento de RFC2616 significa que todos los GETs condicionales a Serendipity regresarán entradas modificadas desde la fecha de la última solicitud. Con esa característica definida a "false", tus visitantes obtendrán todos los artículos desde su última solicitud, lo cual es considerado algo bueno. Sin embargo, algunos agentes como Planet tienen un comportamiento extraño, dado viola la norma RFC2616. De esta manera, si defines esta opción como "TRUE" estarás cumpliendo con la norma, pero los lectores de tus sindicaciones RSS quizás pierdan algunas entradas en sus días de ausencia. De cualquier forma, o evitas un funcionamiento adecuado de agregadores como Planet, o dañas a tus lectores reales. Si estás enfrentando quejas de cualquiera de los dos, puedes cambiar esta opción. Rerefencia: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Usar páginas comprimidas con gzip');
@define('INSTALL_USEGZIP_DESC', 'Para acelerar el envío de páginas, se pueden comprimir las páginas que se envían al visitante, si su navegador lo admite. Esto es lo recomendado');
@define('INSTALL_XHTML11', 'Forzar compatibilidad XHTML 1.1');
@define('INSTALL_XHTML11_DESC', '¿Quieres forzar la compatibilidad XHTML 1.1? (puede causar problemas con navegadores más antiguos que la 4ª generación)');
@define('INSTALL_POPUP', 'Activar el uso de ventanas emergentes');
@define('INSTALL_POPUP_DESC', '¿Quieres que el blog use una ventana emergente para los comentarios, referencias, etc.?');
@define('INSTALL_EMBED', '¿Está Serendipity insertado en otra web?');
@define('INSTALL_EMBED_DESC', 'Si quieres insertar Serendipity dentro de otra página, ajusta a "sí" para eliminar cualquier cabecera y sólo mostrar los contenidos. Puedes hacer uso de la opción indexFile y usar una clase donde pongas las cabeceras normales de tu página web. ¡Lee el fichero README para más información!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '¿Poder hacer click en los enlaces externos?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"no": Enlaces externos no verificados (Top Salidas, Top Sitios asociados, Comentarios de usuarios) no se muestran/se muestran como texto sin formato donde se pueda para prevenir spam de google (recomendado). "sí": Enlaces externos no verificados se muestran como enlaces. ¡Puede ser modificado en la configuración de la extensión de la barra lateral!');
@define('INSTALL_TRACKREF', 'Activar registro de "referrers"?');
@define('INSTALL_TRACKREF_DESC', 'Activando el registro de "referrers" podrás ver cuales sitios envían visitas a tus artículos. Últimamente esto esta siendo abusado frecuentemente por spammers, así que puedes deshabilitarlo si quieres.');
@define('INSTALL_BLOCKREF', 'Sitios asociados bloqueados');
@define('INSTALL_BLOCKREF_DESC', '¿Hay algún servidor que no quieras que se muestre en la lista de Sitios asociados? Separa la lista de nombres de dominio con \';\' y advierte que se ¡bloquea por coincidencias en subcadenas!');
@define('INSTALL_REWRITE', 'Reescritura de URL');
@define('INSTALL_REWRITE_DESC', 'Selecciona la regla que quieres usar para generar URL. Activando estas reglas hará URL bonitas para tu blog y lo hará más indexable para los robots como google. El servidor web necesita tener o mod_rewrite o "AllowOverride All" para el directorio de serendipity. El valor predeterminado es autodetectado');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Diferencia horaria del servidor');
@define('INSTALL_OFFSET_DESC', 'Introduce la diferencia de horas entre la fecha de tu servidor web (actual: %clock%) y la zona horaria deseada');
@define('INSTALL_SHOWFUTURE', 'Mostrar entradas futuras');
@define('INSTALL_SHOWFUTURE_DESC', 'Si se activa, mostrará todas las entradas con fecha futura en tu blog. La acción predeterminada es no mostrar esas entradas y sólo hacerlo cuando llegue la fecha de publicación.');
@define('INSTALL_ACL', 'Aplicar permisos de lectura por categorías');
@define('INSTALL_ACL_DESC', 'Cuando se activa, son aplicados los permisos para grupos de usuarios que estén configurados cuando los usuarios registrados vean el Blog. Cuando se desactiva, los permisos de lectura de las categorías NO son aplicadas, con el efecto positivo que el Blog carga un poco más rápido. Si no necesitas permisos de lectura para múltiples usuarios, deshabilita esta opción.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Mostrar los artículos completos con la entrada extendida dentro del feed RSS');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Imagen para el feed RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL de una imagen en formato GIF/JPEG/PNG, si está disponible. (dejándolo vacío se usara el símbolo de Serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Anchura de la imagen');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'en pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Altura de la imagen');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'en pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '¿Mostrar la dirección de correo?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Campo "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Correo electrónico del editor, si está disponible. (déjalo vacío para no mostrarlo) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Campo "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Correo electrónico del webmaster, si está disponible. (déjalo vacío para no mostrarlo) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Campo "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Cantidad de minutos, después de los cuales, tu blog no será verificado por ningún site o aplicación externa (si lo dejas vacío no se mostrara) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Campo "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', '¿Debería el campo "pubDate" estar incluido en un canal RSS para mostrar la fecha de la última entrada?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Opciones para la conversión de imágenes');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Información sobre cómo debería serendipity manejar imágenes');
@define('INSTALL_IMAGEMAGICK', 'Usar ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', '¿Tienes ImageMagick instalado y quieres usarlo para redimensionar imágenes?');
@define('INSTALL_IMAGEMAGICKPATH', 'Ruta hasta el programa convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Ruta completa y nombre del programa convert de ImageMagick');
@define('INSTALL_THUMBSUFFIX', 'Sufijo de la miniatura');
@define('INSTALL_THUMBSUFFIX_DESC', 'Las miniaturas se crearán con el siguiente formato: original.[sufijo].ext');
@define('INSTALL_THUMBWIDTH', 'Dimensiones de las miniaturas');
@define('INSTALL_THUMBWIDTH_DESC', 'Anchura máxima estática de las miniaturas auto-generadas');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Tamaño máximo de los ficheros');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Ingresa el tamaño máximo en bytes de los ficheros que puedes subir al servidor. Esta opción puede ser sobreescrita por la configuración en el servidor en PHP.ini: upload_max_filesize, post_max_size, max_input_time, todas las anteriores tiene precedencia sobre esta opción. Si la dejas en blanco se usarán sólo los límites definidos en el servidor.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Ancho máximo de las imágenes');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Ingresa la anchura máxima de las imágenes que se pueden subir al servidor en pixels.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Altura máxima de las imágenes');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Ingresa la altura máxima de las imágenes que se pueden subir al servidor en pixels.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Activar sincronización de medios al-vuelo');
@define('ONTHEFLYSYNCH_DESC', 'Si lo activas, Serendipity comparará la base de datos de medios con los archivos almacenados en tu servidor y sincronizará la base de datos con el contenido del directorio.');
@define('MEDIA_DYN_RESIZE', '¿Permitir redimensionar dinámicamente las imágenes?');
@define('MEDIA_DYN_RESIZE_DESC', 'Si lo activas, el selector de medios puede regresar imágenes en cualquier tamaño solicitado a través de una variable GET. Los resultados se colocan en la caché, de esta manera puedes crear una base de ficheros muy grande si es que haces un uso intensivo de esta característica.');
@define('MEDIA_EXIF', 'Importar información de imágenes EXIF/JPEG');
@define('MEDIA_EXIF_DESC', 'Si lo activas, la metadata de las imágenes EXIF/JPEG existentes será analizada y almacenada en la base de datos para ser mostrada en la galería de medios.');
@define('MEDIA_PROP', 'Propiedades de Medios');
@define('MEDIA_PROP_DESC', 'Ingresa una lista de campos de propiedades separados por ";" que te gustaría definir por cada archivo de medios');
@define('MEDIA_PROP_MULTIDESC', '(Puedes añadir al final de cualquier item ":MULTI" para indicar que contendrá una descripción larga en ves de sólo algunos caracteres)');
@define('MEDIA_KEYWORDS', 'Palabras claves de medios');
@define('MEDIA_KEYWORDS_DESC', 'Ingresa una lista palabras separadas por ";" que quisieras utilizar como palabras clave predefinidas para los elementos de medios.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Datos personales');
@define('USERCONF_CAT_PERSONAL_DESC', 'Cambia los datos personales');
@define('USERCONF_USERNAME', 'Nombre de usuario');
@define('USERCONF_USERNAME_DESC', 'El nombre de usuario que se usa para conectar al blog');
@define('USERCONF_PASSWORD', 'Contraseña');
@define('USERCONF_PASSWORD_DESC', 'La contraseña que se usará para conectar al blog');
@define('USERCONF_CHECK_PASSWORD', 'Contraseña actual');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Si cambias la contraseña en el campo de arriba, debes escribir la contraseña actual en este campo.');
@define('USERCONF_USERLEVEL', 'Nivel de acceso');
@define('USERCONF_USERLEVEL_DESC', 'Este nivel se usa para determinar que clase de acceso al blog tiene el usuario');
@define('USERCONF_GROUPS', 'Membresías');
@define('USERCONF_GROUPS_DESC', 'Este usuario es miembro de los siguientes grupos. Múltiples membresías son posibles.');
@define('USERCONF_EMAIL', 'Correo electrónico');
@define('USERCONF_EMAIL_DESC', 'La dirección de correo electrónico personal');
@define('INSTALL_WYSIWYG', 'Usar editor WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', '¿Quieres usar el editor WYSIWYG? (Funciona con IE5+, parcialmente con Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', '¿Enviar avisos de comentarios?');
@define('USERCONF_SENDCOMMENTS_DESC', '¿Desea que se le envíen notificaciones mediante correo electrónico cuando se reciban comentarios a las entradas?');
@define('USERCONF_SENDTRACKBACKS', '¿Enviar avisos de referencias?');
@define('USERCONF_SENDTRACKBACKS_DESC', '¿Desea que se le envíen notificaciones mediante correo electrónico cuando se hagan referencias a las entradas?');
@define('USERCONF_CREATE', '¿Deshabilitar usuario / prohibir actividad?');
@define('USERCONF_CREATE_DESC', 'Si activas esta opción el usuario ya no podrá crear o editar entradas en el blog. Cuando él vuelva a ingresar al sistema no podrá hacer nada más que desconectarse y ver su configuración personal.');
@define('USERCONF_ALLOWPUBLISH', 'Derechos: ¿Publicar entradas?');
@define('USERCONF_ALLOWPUBLISH_DESC', '¿El usuario puede publicar entradas?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', '¿Mostrar la barra de herramientas dentro de la ventana emergente selección de medios?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Configuración predeterminada para las nuevas entradas');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'AVISO: El atributo de nivel de acceso es ahora utilizado sólo con propósitos de compatibilidad con versiones anteriores de extensiones y autorización. ¡Los privilegios de usuarios son ahora manejados por membresías!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'No especificaste correctamente la contraseña actual, por lo tanto no estas autorizado para establecer una nueva. Tus cambios no fueron guardados.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'No puedes dejar el nombre de usuario en blanco.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Configuración de acceso personal');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Modificar los niveles de usuario');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Modificar "prohibir crear entradas"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Modificar los permisos de publicar entradas');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Configuración del sistema de acceso');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Configuración de acceso centralizado al blog');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administrar entradas');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administrar entradas de otros usuarios');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Importar entradas');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administrar categorías');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administrar categorías de otros usuarios');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Eliminar categorías');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administrar usuarios');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Eliminar usuarios');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Modificar nivel de usuario');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administrar otros usuarios que pertenecen a tu mismo grupo(s)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administrar otros usuarios que no pertenece a tu mismo grupo(s)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Crear nuevos usuarios');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administrar grupo de usuarios');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administrar extensiones');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administrar extensiones de otros usuarios');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administrar medios');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administrar directorios de medios');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Añadir nuevo fichero de medios');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Eliminar fichero de medios');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administrar ficheros de medios de otros usuarios');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Ver ficheros de medios');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Sincronizar miniaturas');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administrar comentarios');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administrar plantillas');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Ver ficheros de medios de otros usuario');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Extensiones prohibidas');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Eventos prohibidos');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Tu entrada ha sido guardada');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Hilos');
@define('COMMENTS_VIEWMODE_LINEAR', 'Plano');
@define('DISPLAY_COMMENTS_AS', 'Mostrar comentarios como');
@define('COMMENTS_DISABLE', 'No permitir comentarios a esta entrada');
@define('COMMENTS_ENABLE', 'Permitir comentarios a esta entrada');
@define('COMMENTS_CLOSED', 'El autor no permite añadir comentarios a esta entrada');
@define('VIEW_EXTENDED_ENTRY', 'Continua leyendo "%s"');
@define('TRACKBACK_SPECIFIC', 'URI de referencia para esta entrada');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'ver completo');
@define('VIEW_TOPICS', 'ver temas');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Temas de');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', '¡No se ha podido insertar las entradas!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', '¿Recordar la información?');
@define('SUBMIT_COMMENT', 'Enviar comentario');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Suscribirse a esta entrada');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Tu navegador no envió una cadena válida de HTTP-Referrer. Esto puede deberse a una mala configuración del navegador/proxy o por un "Cross Site Request Forgery (XSRF)" dirigido a ti. La acción solicitada no pudo ser completada.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'El comentario #%s ya parece haber sido aprobado');
@define('COMMENT_EDITED', 'El comentario seleccionado ha sido editado');
@define('COMMENTS_WILL_BE_MODERATED', 'Los comentarios enviados serán sometidos a moderación antes de ser mostrados.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Aviso: Este comentario necesita aprobación antes de que se muestre');
@define('DELETE_COMMENT', 'Borrar comentario');
@define('APPROVE_COMMENT', 'Aprobar comentario');
@define('REQUIRES_REVIEW', 'Requiere revisión');
@define('COMMENT_APPROVED', 'El comentario #%s ha sido aprobado exitosamente');
@define('COMMENT_DELETED', 'El comentario #%s ha sido borrado exitosamente');
@define('COMMENTS_MODERATE', 'Comentarios y referencias a esta entrada requieren moderación');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Aviso: Esta referencia necesita aprobación antes de que se muestre');
@define('DELETE_TRACKBACK', 'Borrar referencia');
@define('APPROVE_TRACKBACK', 'Aprobar referencia');
@define('TRACKBACK_APPROVED', 'La referencia #%s ha sido aprobada exitosamente');
@define('TRACKBACK_DELETED', 'La referencia #%s ha sido borrado exitosamente');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Nivel superior');
@define('VIEW_COMMENT', 'Ver comentario');
@define('VIEW_ENTRY', 'Ver entrada');
@define('LINK_TO_ENTRY', 'Enlazar a la entrada');
@define('LINK_TO_REMOTE_ENTRY', 'Enlazar a una entrada remota');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Enviando pingback a URI %s...');
@define('PINGBACK_SENT', 'Pingback enviado exitosamente');
@define('PINGBACK_FAILED', 'Falló envío de Pingback: %s');
@define('PINGBACK_NOT_FOUND', 'No se encontró pingback-URI.');
@define('TRACKBACK_SENDING', 'Enviando referencia a la URI %s...');
@define('TRACKBACK_SENT', 'Referencia exitosa');
@define('TRACKBACK_FAILED', 'Referencia fallida: %s');
@define('TRACKBACK_NOT_FOUND', 'No encontrada URI de referencia.');
@define('TRACKBACK_URI_MISMATCH', 'La referencia autodetectada no coincide con nuestra URI destino.');
@define('TRACKBACK_CHECKING', 'Comprobando <u>%s</u> para posibles referencias...');
@define('TRACKBACK_NO_DATA', 'Destino no contenía datos');
@define('TRACKBACK_COULD_NOT_CONNECT', 'No se ha enviado la referencia: No se pudo establecer conexión con %s en el puerto %d');

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
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nuevo comentario en la entrada suscrita "%s"');
@define('SUBSCRIPTION_MAIL', "Hola %s,\n\nHay un nuevo comentario a la entrada \"%s\", titulada \"%s\"\nEl autor es: %s\n\nPuedes encontrar la entrada aquí: %s\n\nPuedes dejar de recibir información sobre esta entrada haciendo click aquí: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hola %s,\n\nHay una nueva referencia a la entrada \"%s\", titulada \"%s\"\nEl autor es: %s\n\nPuedes encontrar la entrada aquí: %s\n\nPuedes dejar de recibir información sobre esta entrada haciendo click aquí: %s\n");
@define('SIGNATURE', "\n-- \n%s está basado en Serendipity.\nEl mejor programa para blog ;).\nVisita <https://s9y.org> y compruébalo.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Se ha realizado un nuevo comentario en tu blog "%s", para la entrada titulada "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Se ha realizado una nueva referencia a la entrada titulada "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Tienes disponibles las siguientes opciones:');
@define('NEW_TRACKBACK_TO', 'Nueva referencia hecha para');
@define('NEW_COMMENT_TO', 'Nuevo comentario para');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'No se han encontrado resultados para la búsqueda %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'La búsqueda para %s ha obtenido %s resultados:');
@define('SEARCH_TOO_SHORT', 'El patrón de búsqueda debe ser mayor a 3 caracteres. Puedes añadirle * a palabras más cortas, como: s9y* para poder hacer búsquedas más cortas.');
@define('SEARCH_ERROR', 'La función de búsqueda no funcionó como se esperaba. Aviso para el administrador de este blog: esto ocurre porque faltan claves de índice en tu base de datos. En sistemas MySQL tu cuenta de usuario en la base de datos necesita tener privilegios para ejecutar esta consulta: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> El error específico devuelto por la base de datos fue: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Tu comentario está vacío, por favor %svuelve%s e inténtalo de nuevo');
@define('COMMENT_NOT_ADDED', 'Tu comentario no ha podido ser añadido debido a que, o bien, en esta entrada ha sido deshabilitado el envío de comentarios, ingresaste datos erróneos, o tu comentario ha sido capturado por medidas anti-spam.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Comentarios para');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Sintaxis errónea en la configuración de la opción "%s". Se requiere contenido de tipo "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Muestra la lista de categorías.');
@define('CATEGORIES_PARENT_BASE', 'Sólo mostrar categorías bajo...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Puedes elegir una categoría padre de manera que sólo las categorías hijos sean mostradas.');
@define('CATEGORIES_HIDE_PARALLEL', 'Ocultar las categorías que no son parte del árbol de categorías');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Si deseas ocultar categorías que son parte de otro árbol de directorios, necesitas activar esta opción. Esta característica tiene más sentido si se utiliza junto con un multi-blog y la extensión de "Propiedades/plantillas de categorías".');
@define('CATEGORIES_HIDE_PARENT', 'Ocular la categoría padre seleccionada?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Si restringes el listado de categorías a una categoría especifica, por defecto verás la categoría padre (superior) dentro del listado generado. Si deshabilitas esta opción, el nombre de la categoría padre no será mostrado.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Activar Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Si esta opción es activada, la extensión utiliza las características de Smarty-Templating para producir el contenido del listado de las categorías. Si activas esto, puedes cambiar el diseño a través del fichero "plugin_categories.tpl". Toma en cuenta que esta opción tendrá un impacto en el desempeño, si no necesitas diseños particulares, déjalo deshabilitado.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Mostrar número de entradas por categoría?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', '¿Permitir a los visitantes mostrar múltiples categorías a la vez?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Si activas esta opción aparecerá un checkbox a lado de cada categoría en la extensión de la barra lateral. Los usuarios podrán marcar las categorías que deseen y luego ver las entradas pertenecientes a estas.');
@define('CATEGORIES_TO_FETCH', 'Categorías enlazadas');
@define('CATEGORIES_TO_FETCH_DESC', '¿De que autor quiere enlazar las categorías?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Muestra una lista de autores');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Mostrar número de artículos del autor?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Si esta opción es activada, el número de artículos del autor se muestra al lado del nombre del autor en paréntesis.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Sólo mostrar aquellos autores con al menos X artículos');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Sindicación');
@define('SHOWS_RSS_BLAHBLAH', 'Muestra los enlaces RSS de sindicación');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 comentarios');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'ID FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'El ID del feed que deseas publicar');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'Imagen FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nombre de la imagen a mostrar (déjalo en blanco para un contador), localizada en feedburner.com, ej: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Título FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Título (si hay) a mostrar al lado de la imagen');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'Texto de la imagen FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Texto (si hay) a mostrar al colocar el puntero del ratón sobre la imagen');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Oculta el enlace a los archivos de una fecha dada cuando, durante ese lapso de tiempo, no se hayan registrado entradas (requiere conteo de entradas)');
@define('ARCHIVE_COUNT', 'Número de elementos en la lista');
@define('ARCHIVE_COUNT_DESC', 'El número total de meses, semanas o días que se visualizan');
@define('ARCHIVE_FREQUENCY', 'Frecuencia de los elementos del Calendario');
@define('ARCHIVE_FREQUENCY_DESC', 'El intervalo temporal a usar entre cada elemento en la lista');
@define('BROWSE_ARCHIVES', 'Navega los archivos por mes');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Mostrar "Serendipity" como texto');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Mostrará "Serendipity Weblog" como texto');
@define('POWERED_BY_SHOW_IMAGE', 'Mostrar "Serendipity" con una imagen');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Mostrará el logotipo de Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Informa del programa en el que se basa tu weblog');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Usar https para conectar');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Hacer que el enlace para conectar apunte a una conexión https. ¡Tu servidor web necesita soporte para esto!');
@define('SUPERUSER', 'Administración del Blog');
@define('SUPERUSER_OPEN_ADMIN', 'Abre administración');
@define('SUPERUSER_OPEN_LOGIN', 'Abre ventana de conexión');
@define('ALLOWS_YOU_BLAHBLAH', 'Muestra un enlace en la barra lateral para acceder a la administración de tu blog');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Calendario');
@define('CALENDAR_BOW_DESC', 'El día de la semana que debe considerarse como principio de semana. El predeterminado es el lunes');
@define('QUICKJUMP_CALENDAR', 'Calendario rápido');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Inicio de la semana');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Habilitar API de conexiones de las extensiones');
@define('CALENDAR_EXTEVENT_DESC', 'Si está habilitada, esta opción permite que las extensiones se conecten con el calendario para mostrar sus eventos resaltados. Utilízalo sólo si has instalado extensiones que lo necesitan, de otra forma sólo disminuye el desempeño.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Busca una entrada');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Presenta un fragmento de HTML en la barra lateral');
@define('THE_NUGGET', '¡Fragmento de HTML!');
@define('BACKEND_TITLE', 'Información adicional en la pantalla de configuración de extensiones');
@define('BACKEND_TITLE_FOR_NUGGET', 'Aquí puedes definir una cadena personalizada que se mostrará en la ventana de configuración de extensiones junto con la descripción de la extensión fragmento de HTML. Si tienes varios fragmentos HTML sin título, esto te ayudará a diferenciarlos.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', '¿Mostrar Salidas/Sitios asociados como enlaces?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"no": Las Salidas y los Sitios asociados se muestran como texto sin formato para prevenir spam en google. "yes": Las Salidas y Sitios asociando se muestran como enlaces. "default": Usar el valor de la configuración global (recomendado).');
@define('HAVE_TO_BE_LOGGED_ON', 'Debes identificarte para ver esta página');
@define('WELCOME_TO_ADMIN', 'Bienvenido a la Suite de Administración de Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Comentario corto');
@define('MEDIA_PROPERTY_COMMENT2', 'Comentario extendido');
@define('DELETE_SELECTED_ENTRIES', 'Eliminar las entradas seleccionadas');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Título');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity no está instalado todavía. Por favor <a href="%s">instálalo</a> ahora.');
@define('COMMENT_ADDED_CLICK', 'Pulsa %saquí para volver%s a los comentarios, y %saquí para cerrar%s esta ventana.');
@define('COMMENT_NOT_ADDED_CLICK', 'Pulsa %saquí para volver%s a los comentarios, y %saquí para cerrar%s esta ventana');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Fecha Asociada');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'En bases de datos distintas a MySQL, iterar sobre cada artículo para reemplazar el URL del directorio antiguo con la nueva dirección no es posible. Necesitarás que arreglar tus entradas de manera manual. También puedes regresar tu directorio a su ubicación original si hacer todo aquello te resulta muy incómodo.');
@define('TRACKBACK_SIZE', 'La URI de destino excedió el tamaño de fichero máximo de %s bytes.');
@define('CLICK_FILE_TO_INSERT', 'Haz click en el fichero que quieres insertar:');
@define('SELECT_FILE', 'Selecciona el fichero a insertar');
@define('MANAGE_IMAGES', 'Gestión de imágenes');
@define('WORD_NEW', 'Nuevo');
@define('WORD_OR', 'O...');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Interfaz: Servicios externos');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Interfaz: Características');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Interfaz: Full Mods');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Interfaz: Vistas');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Interfaz: Relacionado a la entrada');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Motor: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Motor: Manejo de usuarios');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Motor: Meta información');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Motor: Plantillas');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Motor: Características');
@define('PLUGIN_GROUP_IMAGES', 'Imágenes');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup');
@define('PLUGIN_GROUP_STATISTICS', 'Estadísticas');
@define('IMPORT_WELCOME', 'Bienvenido a la utilidad de importación de Serendipity');
@define('USER_SELF_INFO', 'Conectado como %s (%s)');
@define('IMPORT_WHAT_CAN', 'Aquí puedes importar entradas producidas en otros programas de weblog');
@define('IMPORT_SELECT', 'Por favor selecciona el software desde el que quieres importar');
@define('MANAGE_STYLES', 'Gestión de estilos');
@define('SELECT_A_PLUGIN_TO_ADD', 'Selecciona la extensión que quieras instalar');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Abajo está la lista de las extensiones instaladas');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Salir ahora');
@define('DELETE_SELECTED_COMMENTS', 'Borrar comentarios seleccionados');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Encontrar medios');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Error: ¡El fichero antiguo no existe!');
@define('ERROR_SOMETHING', 'Error: Algo está mal.');
@define('DIRECT_LINK', 'Enlace directo a esta entrada');
@define('SELECT_TEMPLATE', 'Selecciona la plantilla que deseas utilizar en tu weblog');
@define('DATABASE_ERROR', 'Error de Serendipity: no es posible conectar a la base de datos - saliendo.');
@define('LIMIT_TO_NUMBER', '¿Cuántos elementos deberían mostrarse?');
@define('DIRECTORIES_AVAILABLE', 'En la lista de subdirectorios disponibles puedes hacer click en el nombre de un directorio para crear un nuevo directorio dentro de esa estructura.');
@define('CATEGORY_INDEX', 'Abajo se muestra una lista de las categorías disponibles para tus entradas');
@define('PAGE_BROWSE_PLUGINS', 'Página %s de %s, totalizando %s extensiones.');
@define('CHARSET_NATIVE', 'Nativo');
@define('XMLRPC_NO_LONGER_BUNDLED', 'El API de la interfase XML-RPC en Serendipity no está incluido debido a problemas de seguridad que hay en curso con este API, además del hecho que no es usada con mucha frecuencia. De esta forma, usted necesita instalar la extensión XML-RPC para utilizar API de XML-RPC. Las URL que usa en sus aplicaciones NO cambiarán y tan pronto como instale la extensión podrá usar el API.');
@define('AUTHORS_ALLOW_SELECT', 'Permitir a los visitantes mostrar múltiples autores al mismo tiempo?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Si esta opción es activada, un checkbox estará al lado de cada autor en en la extensión lateral. Los usuarios pueden seleccionar estas casillas para ver las entradas de acuerdo a su selección.');
@define('PREFERENCE_USE_JS', '¿Activar el uso avanzado de JS?');
@define('PREFERENCE_USE_JS_DESC', 'Si lo activas, las secciones de JavaScript avanzado serán activadas para una mejor usabilidad, como la extensión de configuración donde puedes utilizar el método de arrastrar y soltar para reordenar las extensiones.');
@define('PREFERENCE_USE_JS_WARNING', '(Esta página hace uso de JavaScripting avanzado. Si estás teniendo problemas de funcionalidad, por favor desactiva el uso de JS avanzado en tus preferencias personales o desactiva el soporte para JavaScript de tu navegador)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
