<?php # lang_cz.inc.php 1427.1 2009-02-14 16:13:06 VladaAjgl $

/**
 *  @version 1427.1
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 */

@define('PLUGIN_REMOTERSS_TITLE',		'Cizí RSS/OPML kanál');
@define('PLUGIN_REMOTERSS_BLAHBLAH',		'Zobrazuje polo¾ky z cizího RSS/OPML kanálu (napøíklad Blogroll)');
@define('PLUGIN_REMOTERSS_NUMBER',		'Poèet pøíspìvkù');
@define('PLUGIN_REMOTERSS_NUMBER_BLAHBLAH',		'Kolik pøíspìvkù z RSS kanálu má být zobrazeno? (Pøednastaveno: 0 = v¹echny pøíspìvky RSS kanálu)');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE',		'Nadpis RSS kanálu');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH',		'Nadpis bloku v postranním sloupci s cizím RSS kanálem');
@define('PLUGIN_REMOTERSS_RSSURI',		'RSS/OPML URI');
@define('PLUGIN_REMOTERSS_RSSURI_BLAHBLAH',		'URI adresa RSS/OPML kanálu, který chcete zobrazit');
@define('PLUGIN_REMOTERSS_NOURI',		'®ádný RSS/OPML kanál nebyl vybrán');
@define('PLUGIN_REMOTERSS_RSSTARGET',		'RSS/OPML cíl odkazù');
@define('PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH',		'Cíl (target) odkazù z RSS kanálu. Tedy do jakého okna se mají odkazy otevírat. (Pøednastaveno: _blank = nové okno)');
@define('PLUGIN_REMOTERSS_CACHETIME',		'Jak èasto aktualizovat RSS kanál?');
@define('PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH',		'Obsah RSS kanálu je uchováván v cachi a je aktualizován pouze pokud je star¹í ne¾ X vteøin (Pøednastaveno: 3 hodiny)');
@define('PLUGIN_REMOTERSS_FEEDTYPE',		'Typ kanálu');
@define('PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH',		'Vyberte typ zobrazovaného kanálu');
@define('PLUGIN_REMOTERSS_BULLETIMG',		'Odrá¾ka');
@define('PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH',		'Obrázek, který se má zobrazit pøed ka¾dým nadpisem z RSS');
@define('PLUGIN_REMOTERSS_DISPLAYDATE',		'Zobrazování data');
@define('PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH',		'Zobrazit pod nadpisem pøíspìvku datum?');

@define('PLUGIN_REMOTERSS_RSSLINK',		'Pou¾ívat RSS odkazy?');
@define('PLUGIN_REMOTERSS_RSSLINK_DESC',		'Mají být odkazy z RSS kanálu zobrazeny jako skuteèné odkazy?');
@define('PLUGIN_REMOTERSS_RSSFIELD',		'Zobrazovaný element');
@define('PLUGIN_REMOTERSS_RSSFIELD_DESC',		'Který element RSS kanálu se má zobrazovat? (napø. "title" = nadpis, "content:encoded" = tìlo pøíspìvku, "description" = popis, ...)');
@define('PLUGIN_REMOTERSS_RSSESCAPE',		'Kódovat HTML výstup');
@define('PLUGIN_REMOTERSS_RSSESCAPE_DESC',		'Pokud je povoleno, HTML znaèky z RSS kanálu jsou kódovány. Pokud je tato volby zamítnuta, v¹echny HTML znaèky jsou v RSS kanálu ponechány a pøíslu¹nì se zobrazují. Tato mo¾nost pøedstavuje bezpeènostní riziku, pokud zobrazovaný RSS kanál není Vá¹ nebo pokud mu stoprocentnì nedùvìøujete!');

@define('PLUGIN_REMOTERSS_TEMPLATE',		'©ablona pro tento kanál');
@define('PLUGIN_REMOTERSS_TEMPLATE_DESC',		'Zde mù¾ete vybrat soubor se ¹ablonou, který se nachází v adresáøí tohoto pluginu, který má být pou¾it k zobrazení kanálu v postranním sloupci. Mù¾ete pøidat dal¹í ¹ablony do adresáøe pluginu. Pokud je stejnì pojmenovaný soubor ¹ablony umístìn v adresáøi se ¹ablonami, bude pou¾it místo ¹ablony v adresáøi pluginu. Tím, ¾e zde vyberete jakoukoliv ¹ablonu jinou ne¾ pøednastavenou/defaultní, bude automaticky povolen ¹ablonovací systém Smarty.');
