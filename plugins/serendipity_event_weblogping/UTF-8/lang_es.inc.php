<?php # $Id$
/**
 *  @version $Revision$
 *  @author Rodrigo Lazo Paz <rlazo.paz@gmail.com>
 *  EN-Revision: 690
 */


@define('PLUGIN_EVENT_WEBLOGPING_PING', 'Anunciar entradas (via XML-RPC ping) a:');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Enviando XML-RPC ping al host %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Anuncio de entradas');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Envía notificaciones de nuevas entradas a servicios en linea');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(supersedes %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Servicios  ping personalizados');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'Uno o más servicios especializados ping, separados por ",". Las entradas necesitan tener el siguiente formato: "host.domain/path". Si un "*" es ingresado al inicio del nombre del host, las opciones XML-RPC extendidas serán enviadas a ese host (sólo si este las soporta).');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Error(Razón: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', '!!Éxito!!');

?>