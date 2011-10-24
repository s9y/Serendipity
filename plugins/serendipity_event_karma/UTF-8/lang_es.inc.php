<?php # $Id: lang_es.inc.php 2110 2008-02-11 02:12:07Z slothman $
/**
 *  @version $Revision: 2110 $
 *  @author Rodrigo Lazo Paz <rlazo.paz@gmail.com>
 *  EN-Revision: 690
 */

@define('PLUGIN_KARMA_NAME', 'Karma');
@define('PLUGIN_KARMA_BLAHBLAH', 'Permite a los visitantes calificar la calidad de tus entradas');
@define('PLUGIN_KARMA_VOTETEXT', 'Karma de este artículo: ');
@define('PLUGIN_KARMA_RATE', 'Califica este artículo: %s');
@define('PLUGIN_KARMA_VOTEPOINT_5', '¡Muy bueno!');
@define('PLUGIN_KARMA_VOTEPOINT_4', 'Bueno');
@define('PLUGIN_KARMA_VOTEPOINT_3', 'Regular');
@define('PLUGIN_KARMA_VOTEPOINT_2', 'No es interesante');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'Malo');
@define('PLUGIN_KARMA_VOTED', 'Tu calificación de "%s" ha sido guardada.');
@define('PLUGIN_KARMA_INVALID', 'Tu voto fue inválido.');
@define('PLUGIN_KARMA_ALREADYVOTED', 'Tu calificación ya habia sido almacenada.');
@define('PLUGIN_KARMA_NOCOOKIE', 'Tu navegador debe aceptar cookies para que puedas botar.');
@define('PLUGIN_KARMA_CLOSED', 'Vote for articles fresher than %s days!'); //translate
@define('PLUGIN_KARMA_ENTRYTIME', 'Tiempo de votación luego de la publicación');
@define('PLUGIN_KARMA_VOTINGTIME', 'Tiempo de votación');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', '¿Cuánto tiempo (en minutos) luego de que tu artículo ha sido publicado permitirás votar sin restricciones? Por defecto: 1440 (un día)');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Cantidad de tiempo (en minutos) que necesitan transcurrir entre un voto y otro. Sólo se aplica luego de que el tiempo indica expira. Por defecto: 5');
@define('PLUGIN_KARMA_TIMEOUT', 'Protección contra sobrecarga: Otro visitante ha votado hace poco. Por favor espera %s minutos.');
@define('PLUGIN_KARMA_CURRENT', 'Karma actual: %2$s, %3$s voto(s)');
@define('PLUGIN_KARMA_EXTENDEDONLY', 'Sólo artículos extendidos');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Mostrar votación karma sólo para la vista de artículos extendida');
@define('PLUGIN_KARMA_MAXKARMA', 'Periodo de votación karma');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Permitir solamente votación karma luego de que el artículo tenga una antigüedad de X días (Por defecto: 7)');
@define('PLUGIN_KARMA_LOGGING', '¿Log votes?');//translate
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Should karma votes be logged?');//translate
@define('PLUGIN_KARMA_ACTIVE', '¿Activar votación karma?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', '¿Está la votación karma disponible?');
@define('PLUGIN_KARMA_VISITS', '¿Activar registro de visitas?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH', '¿Debe ser contado y mostrado cada click hacia la vista extendida?');
@define('PLUGIN_KARMA_VISITSCOUNT', ' %4$s hits');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'Artículos más visitados');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Artículos menos visitados');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Artículos con karma más alto');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Artículos con karma más bajo');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Artículos con mejor votación karma');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Artículos con peor votación karma');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO', 'visitas');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO', 'votos');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'puntos');

?>