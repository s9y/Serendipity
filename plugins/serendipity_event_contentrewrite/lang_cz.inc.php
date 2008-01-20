<?php # $Id: lang_cz.inc.php 1381 2007-12-11 01:17:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  First-transaltion: Vladimir Ajgl <vlada@ajgl.cz> 2007-12-11
 */

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', 'slovo');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', 'popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', 'Pøepisovaè obsahu');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', 'Nahrazuje slovat libovolným øetìzcem (u¾iteèné pro vkládání akronymù)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', 'Nový nadpis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', 'Zadejte slovo akronymu (to, které má být v textu hledáno a nahrazováno) pro novou polo¾ku ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', 'Slovo èíslo %d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', 'Zadejte akronym (pøepisované slovo) ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', 'Nadpis Pluginu');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', 'Nadpis tohoto pluginu');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', 'Nový popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', 'Zadejte popis, který se má k akronymu pøidat ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', 'Popis èíslo %s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', 'Zadejte popis akronymu ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Pøepisovací øetìzec');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', 'Tento plugin je primárnì vymy¹len k pøidávání jednoduchých popiskù ke zvoleným klíèovým slovùm - tzv. akronymy. Pøíklad pou¾ití <acronym title="{popis}">{slovo}</acronym> - políèko {slovo} se hledá v textu, nahrazuje se øetìzcem, který zadáte tady, pøièem¾ mù¾ete pou¾ít pùvodní slovo, mù¾ete pou¾ít slovo nové {popis}. Úèelem pluginu je pou¾ívat stejnou ¹abonu pro více slov. Více pou¾ití viz dokumentace (pøelo¾ená) na http://www.s9y.org.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', 'Pøepisování znakù');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', 'Odmazávání znakù ze slova ({slovo}) - pøíklad pou¾ití: Máte podnikový blog a ¹éfy Hru¹ku, Jelínka a Vrátného. Chcete, aby se jména ¹éfù zvýrazòovala, ale nechcete, aby se slovo hru¹ka odkazovalo na ¹éfa, pokud mluvíte o ovoci, podobnì se slivovicí, pøípadnì nechcete zamìòovat ¹éfa s dùchodcem na vrátnici. V textu budete psát Hru¹ka_¹éf, Jelínek_¹éf, Vrátný_¹éf. V tomto poli zadáte \'_¹éf\'. Tato pøípona Vám umo¾ní rozpoznat ¹éfy, ale sama o sobì se nebude v poli {slovo} zobrazovat.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Va¹e nahrazovací øetìzce jsou %s a %s.');
?>
