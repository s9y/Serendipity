<?php

/**
 *  @version $$
 *  @author Martin Matu¹ka <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', 'slovo');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', 'popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', 'Prepisovaè obsahu');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', 'Nahradzuje slová µubovolným re»azcom (u¾itoèné na vkladanie akronymov)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', 'Nový nadpis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', 'Zadajte slovo akronymu (to, ktoré má by» v texte hµadané a nahradené) pre novú polo¾ku ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', 'Slovo èíslo %d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', 'Zadejte akronym (prepisované slovo) ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', 'Nadpis doplnku');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', 'Nadpis tohto doplnku');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', 'Nový popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', 'Zadajte popis, ktorý se má k akronymu prida» ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', 'Popis èíslo %s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', 'Zadajte popis akronymu ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Prepisovací re»azec');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', 'Tento plugin je primárne urèený k pridávaniu jednoduchých popiskov k vybraným kµúèovým slovám - tzv. akronymy. Príklad pou¾itia <acronym title="{popis}">{slovo}</acronym> - pole {slovo} sa vyhµadá v texte a nahradí sa re»azcom, ktorý tu zadáte, prièom sa mô¾e pou¾i» pôvodné slovo, alebo slovo nové {popis}. Úèelom doplnku je pou¾itie rovnakej ¹ablóny pre viac slov. Viac informácií nájdete na http://www.s9y.org.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', 'Prepisovanie znakov');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', 'Zmazanie znakov zo slova ({slovo}) - príklad pou¾itia: Máte podnikový weblog a vedúcich Hru¹ku, Dlhého a Mokrého. Chcete, aby boli mená vedúcich zvýrazòované, ale nechcete, aby slovo hru¹ka odkazovalo na vedúceho, keï ide o ovocie. V texte budete písa» Hru¹ka_vedúci, Dlhý_vedúci a Mokrý_vedúci. V tomto poli zadáte \'_vedúci\'. Táto prípona Vám umo¾ní rozpozna» vedúcich, ale sama sa nebude v poli {slovo} zobrazova».');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Va¹e nahradzované re»azce sú %s a %s.');
?>
