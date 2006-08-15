<?php # $Id$

/**
 *  @version $Revision$
 *  @author Rodrigo Lazo <rlazo.paz@gmail.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', 'Arreglar errores XHTML comunes');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'Esta extensión corrige problemas comunes con las entradas que utilizan XHTML. Ayuda a mantener tu blog de acuerdo con el estandar XHTML.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', '¿Codificar la data XML-procesada?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'Esta extensión utiliza un método de procesamiento xml para asegurar la validez XHTML de tu código. Este procesamiento xml pude que convierta entradas ya válidas a entidades sin escapes, así que la extensión codifica todas las entidades antes de la revisión. ¡Define esta opción como APAGADA si introduce doble codificación a tus entradas!');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', '¿Limpiar las entidades UTF-8?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'Si lo activas, las entidades HTML derivadas de caracteres UTF-8 se convertirán correctamente y no habrá doble codificación en tu salida.');

?>
