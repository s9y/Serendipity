<?php # $Id: lang_cs.inc.php 1381 2007-12-11 01:17:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  First-transaltion: Vladimir Ajgl <vlada@ajgl.cz> 2007-12-11
 */

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', 'slovo');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', 'popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', 'Pøepisovaè obsahu');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', 'Nahrazuje slovat libovolným øetìzcem (užiteèné pro vkládání akronymù)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', 'Nový nadpis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', 'Zadejte slovo akronymu (to, které má být v textu hledáno a nahrazováno) pro novou položku ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', 'Slovo èíslo %d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', 'Zadejte akronym (pøepisované slovo) ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', 'Nadpis Pluginu');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', 'Nadpis tohoto pluginu');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', 'Nový popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', 'Zadejte popis, který se má k akronymu pøidat ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', 'Popis èíslo %s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', 'Zadejte popis akronymu ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Pøepisovací øetìzec');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', 'Tento plugin je primárnì vymyšlen k pøidávání jednoduchých popiskù ke zvoleným klíèovým slovùm - tzv. akronymy. Pøíklad použití <acronym title="{popis}">{slovo}</acronym> - políèko {slovo} se hledá v textu, nahrazuje se øetìzcem, který zadáte tady, pøièemž mùžete použít pùvodní slovo, mùžete použít slovo nové {popis}. Úèelem pluginu je používat stejnou šabonu pro více slov. Více použití viz dokumentace (pøeložená) na http://www.s9y.org.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', 'Pøepisování znakù');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', 'Odmazávání znakù ze slova ({slovo}) - pøíklad použití: Máte podnikový blog a šéfy Hrušku, Jelínka a Vrátného. Chcete, aby se jména šéfù zvýrazòovala, ale nechcete, aby se slovo hruška odkazovalo na šéfa, pokud mluvíte o ovoci, podobnì se slivovicí, pøípadnì nechcete zamìòovat šéfa s dùchodcem na vrátnici. V textu budete psát Hruška_šéf, Jelínek_šéf, Vrátný_šéf. V tomto poli zadáte \'_šéf\'. Tato pøípona Vám umožní rozpoznat šéfy, ale sama o sobì se nebude v poli {slovo} zobrazovat.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Vaše nahrazovací øetìzce jsou %s a %s.');
?>
