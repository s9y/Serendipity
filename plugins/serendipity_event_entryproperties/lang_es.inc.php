<?php # $Id$
/**
 *  @version $Revision$
 *  @author Rodrigo Lazo Paz <rlazo.paz@gmail.com>
 *  EN-Revision: 690
 */

  //Sticky post
@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Propiedades extendidas de las entradas');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(caché, artículos privados, sticky posts)'); 
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Marcar esta entrada como Sticky Post');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Las entradas pueden ser leidas por');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Solamente el autor');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Co-autores');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Todos');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', '¿Hacer caché de las entradas?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Si la activas, una versión caché será generada cada vez que grabes. El caché mejorará el desempeño, pero puede disminuir la flexibilidad para otras extensiones.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Construir entradas caché');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Descargando el siguiente lote de entradas...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Descargando %d entradas de %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Construyendo el caché para la entrada #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Caché construido.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Proceso completado.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Proceso ABORTADO.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (totalizando %d entradas)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NL2BR', 'Desactivar nl2br');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Hide from article overview / frontpage');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Utilizar restricciones basadas en grupos');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Si la activas, puedes definir qué usuarios de un grupo están autorizados para leer las entradas. Esta opción tiene un profundo impacto en el desempeño al visualizar tus artículos. Actívala sólo si realmente vas a utilizar esta característica.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Utilizar restricciones basadas en usuarios');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Si la activas, puedes definir que usuarios específicos están autorizados a leer tus entradas. Esta opción tiene un profundo impacto en el desempeño al visualizar tus artículos. Actívala sólo si realmente vas a utilizar esta característica.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Ocultar el contenido RSS');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Si la activas, el contenido de esta entrada no será mostrado dentro de RSS feed(s).');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Campos personalizados');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Campos personalizados adicionales pueden ser utilizados en tu plantilla en lugares donde quieres que aparezcan. Para ello, edita tu archivo plantilla entries.tpl y coloca etiquetas Smarty como {$entry.properties.ep_MyCustomField} en el HTML, en el lugar que desees. Nota el prefijo ep_ por cada campo.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Aquí puedes ingresar una lista de los nombres de los campos separados por coma que puedes utilizar por cada entrada - no utilices caracteres especiales o espacios en los nombres de campo. Por ejemplo: "Campopersonal1, Campopersonal2". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'La lista de campos personalizados disponibles puede ser cambiada en la <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">configuración de la extensión</a>.');

?>