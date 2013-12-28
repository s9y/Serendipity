<?php

/**
 *  @file lang_cs.inc.php 1427.1 2009-02-14 16:13:06 VladaAjgl
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 */

@define('PLUGIN_REMOTERSS_TITLE', 'Cizí RSS/OPML kanál');
@define('PLUGIN_REMOTERSS_BLAHBLAH', 'Zobrazuje položky z cizího RSS/OPML kanálu (napøíklad Blogroll)');
@define('PLUGIN_REMOTERSS_NUMBER', 'Poèet pøíspìvkù');
@define('PLUGIN_REMOTERSS_NUMBER_BLAHBLAH', 'Kolik pøíspìvkù z RSS kanálu má být zobrazeno? (Pøednastaveno: 0 = všechny pøíspìvky RSS kanálu)');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE', 'Nadpis RSS kanálu');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH', 'Nadpis bloku v postranním sloupci s cizím RSS kanálem');
@define('PLUGIN_REMOTERSS_RSSURI', 'RSS/OPML URI');
@define('PLUGIN_REMOTERSS_RSSURI_BLAHBLAH', 'URI adresa RSS/OPML kanálu, který chcete zobrazit');
@define('PLUGIN_REMOTERSS_NOURI', 'Žádný RSS/OPML kanál nebyl vybrán');
@define('PLUGIN_REMOTERSS_RSSTARGET', 'RSS/OPML cíl odkazù');
@define('PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH', 'Cíl (target) odkazù z RSS kanálu. Tedy do jakého okna se mají odkazy otevírat. (Pøednastaveno: _blank = nové okno)');
@define('PLUGIN_REMOTERSS_CACHETIME', 'Jak èasto aktualizovat RSS kanál?');
@define('PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH', 'Obsah RSS kanálu je uchováván v cachi a je aktualizován pouze pokud je starší než X vteøin (Pøednastaveno: 3 hodiny)');
@define('PLUGIN_REMOTERSS_FEEDTYPE', 'Typ kanálu');
@define('PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH', 'Vyberte typ zobrazovaného kanálu');
@define('PLUGIN_REMOTERSS_BULLETIMG', 'Odrážka');
@define('PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH', 'Obrázek, který se má zobrazit pøed každým nadpisem z RSS');
@define('PLUGIN_REMOTERSS_DISPLAYDATE', 'Zobrazování data');
@define('PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH', 'Zobrazit pod nadpisem pøíspìvku datum?');

@define('PLUGIN_REMOTERSS_RSSLINK', 'Používat RSS odkazy?');
@define('PLUGIN_REMOTERSS_RSSLINK_DESC', 'Mají být odkazy z RSS kanálu zobrazeny jako skuteèné odkazy?');
@define('PLUGIN_REMOTERSS_RSSFIELD', 'Zobrazovaný element');
@define('PLUGIN_REMOTERSS_RSSFIELD_DESC', 'Který element RSS kanálu se má zobrazovat? (napø. "title" = nadpis, "content:encoded" = tìlo pøíspìvku, "description" = popis, ...)');
@define('PLUGIN_REMOTERSS_RSSESCAPE', 'Kódovat HTML výstup');
@define('PLUGIN_REMOTERSS_RSSESCAPE_DESC', 'Pokud je povoleno, HTML znaèky z RSS kanálu jsou kódovány. Pokud je tato volby zamítnuta, všechny HTML znaèky jsou v RSS kanálu ponechány a pøíslušnì se zobrazují. Tato možnost pøedstavuje bezpeènostní riziku, pokud zobrazovaný RSS kanál není Váš nebo pokud mu stoprocentnì nedùvìøujete!');

@define('PLUGIN_REMOTERSS_TEMPLATE', 'Šablona pro tento kanál');
@define('PLUGIN_REMOTERSS_TEMPLATE_DESC', 'Zde mùžete vybrat soubor se šablonou, který se nachází v adresáøí tohoto pluginu, který má být použit k zobrazení kanálu v postranním sloupci. Mùžete pøidat další šablony do adresáøe pluginu. Pokud je stejnì pojmenovaný soubor šablony umístìn v adresáøi se šablonami, bude použit místo šablony v adresáøi pluginu. Tím, že zde vyberete jakoukoliv šablonu jinou než pøednastavenou/defaultní, bude automaticky povolen šablonovací systém Smarty.');

