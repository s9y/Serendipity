<?php # $Id$

/**
 *  @version $Revision$
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_WEBLOGPING_PING', 'Zgłaszam wpisy (via XML-RPC) do:');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Wysyłam pinga XML-RPC do hosta %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Zgłoś wpisy');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Wyślij zgłoszenia o nowych wpisach do serwisów sieciowych');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(supersedes %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Własne serwisy sieciowe');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'Jeden (lub więcej) specjalistyczny serwis sieciowy (serwisy rozdzielaj przecinkiem ","). Dane powinny być wpisane w podobny do następującego sposób: "host.domena/ścieżka". Jeśli zostanie wprowadzony znak "*" na początku nazwy hosta, rozszerzony ping XML-RPC zostanie wysłany do takiego hosta (tylko jeśli host obsługuje takie pingi).');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Niepowodzenie (przyczyna: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', 'Sukces!');

?>
