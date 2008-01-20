<?php # $Id: lang_cz.inc.php 1381 2007-12-19 23:42:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_WEBLOGPING_PING', 'Oznamovat vydání pøíspìvku pøes XML-RPC na "%s"?');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Posílám XML-RPC oznámení na hosta %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Oznamování pøíspìvkù');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Posílá oznámení o nových pøíspìvcích na on-line internetové slu¾by.');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(odstraòování %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Vlastní oznamovací slu¾by');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'Jedna nebo více oznamovacích slu¾eb oddìlené èárkou ",". Formát slu¾by je "host.domena/cesta". Pokud je na zaèátku slu¾by uvedená hvìzdièka "*", budou na tuto adresu posílány ro¹íøená XML-RPC oznámení.');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Nezdaøilo se (Dùvod: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', 'Úspìch!');

?>
