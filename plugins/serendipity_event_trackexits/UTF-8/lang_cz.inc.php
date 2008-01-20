<?php # $Id: lang_cz.inc.php 1381 2007-12-15 22:40:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_TRACKBACK_NAME', 'Markup: Sledování odchodů');
@define('PLUGIN_EVENT_TRACKBACK_DESC', 'Sleduje kliknutí na URL adresy mimo blog');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION', 'Použít URL přesměrování pro URL adresy webových stránek návštěvníků, kteří je zadávají v komentářích.');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_BLAHBLA', 'Snižuje riziko zneužití komentářů (např. pro zvýšení pozice ve vyhledávačích), ale zároveň zabraňuje pozitivnímu efektu k propagování stránek komentujícího návštěvníka. Serendipity samo přesměruje na správnou adresu a zaznamená proklik do logu. Funkce "Google PageRank Deflector" zamezí odkazu ve svévolnému zvyšování Page Ranku. Hodnota "Nic" vypne tuto funkci (standardní nastavení).');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_NONE', 'Nic');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_S9Y', 'Vnitřní sledovací funkce Serendipity');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_GOOGLE', 'Google PageRank Deflector');

?>
