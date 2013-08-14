<?php #

/**
 *  @version 
 *  @author Rodrigo Lazo Paz <rlazo.paz@gmail.com>
 *  EN-Revision: 690
 */


@define('PLUGIN_EVENT_STATISTICS_NAME', 'Estadísticas');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Añade un enlace hacia estadísticas interesantes en tu panel de entradas, incluyendo un contador de visitas');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Estadísticas');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'Primera entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Última entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Total de entradas');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'entradas');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... públicas');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... borradores');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Entradas por usuario');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Categorías');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'categorías');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Distribución de entradas');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'entradas');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Imágenes subidas');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'imagen(es)');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Distribución del tipo de imágenes');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'archivo(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Comentarios recibidos');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'comentario(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Entradas más frecuentemente comentadas');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Personas más frecuentemente comentadas');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'enlace');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Subscriptores');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'subscriptor(es)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Entradas más frecuentemente subscritas');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'subscriptor(es)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Trackbacks recibidos');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Entradas que reciben más frecuentemente trackbacks');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Most frequently trackbacking people');//translate
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'estimado de comentarios por entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'estimado de trackbacks por entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'estimado de entradas por día');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'estimado de entradas por semana');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'estimado de entradas por mes');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'comentarios/entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'trackbacks/entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'entradas/día');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'entradas/semana');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'entradas/mes');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Cantidad total de caracteres');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', ' caracteres');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'caracteres por entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'Caracteres por entrada');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', 'Las %s entradas más largas');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Máximo de items');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', '¿Cuántos items por valor estadístico mostrar? (Default: 20)');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Estadísticas de visitantes extendidas');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', '¿Añadir característica de estadísticas de visitantes extendidas? (por defecto: no)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', '¡No!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'Sí, al final de la página');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'Sí, al comienzo de la página');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Nr de visitantes');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Nr de visitantes hoy');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Nr total de visitantes');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'La característica de estadísticas extendidas de visitantes ha estado colectando información desde');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Últimos visitantes');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Máximos referentes');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'Ningún referente ha sido registrado todavía.');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Estadísticas extendidas de visitantes');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'No incluir en el conteo a los navegadores');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Inserte los navegadores que deben ser excluidos del conteo, separados por "|"');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Mostrar fecha de la última entrada');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Mostrar número de entradas');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Mostrar número de comentarios');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Mostrar visitantes de este mes');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Tiempo límite del caché');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', '¿Cuánto tiempo las estadísticas serán mostradas antes de ser actualizadas? Definir esta variable a un número alto de minutos mejorará el desempeño, pero puede que no refleje la información actual si está definida muy alto.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Formato del texto');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Utiliza %s como variable para el número/texto');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Última entrada: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s entradas escritas');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s comentarios han sido hechos');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s visitante(s) este mes');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Muestra el número de visitantes actuales (agregado de los últimos 15 minutos)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s visitante(s) en linea');

