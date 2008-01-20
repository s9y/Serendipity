<?php # $Id: lang_cs.inc.php 1381 2007-12-19 23:42:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_WEBLOGPING_PING', 'Oznamovat vydání příspěvku přes XML-RPC na "%s"?');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Posílám XML-RPC oznámení na hosta %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Oznamování příspěvků');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Posílá oznámení o nových příspěvcích na on-line internetové služby.');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(odstraňování %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Vlastní oznamovací služby');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'Jedna nebo více oznamovacích služeb oddělené čárkou ",". Formát služby je "host.domena/cesta". Pokud je na začátku služby uvedená hvězdička "*", budou na tuto adresu posílány rošířená XML-RPC oznámení.');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Nezdařilo se (Důvod: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', 'Úspěch!');

?>
