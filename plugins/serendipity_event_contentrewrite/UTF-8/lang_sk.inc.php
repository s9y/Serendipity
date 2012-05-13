<?php

/**
 *  @version $$
 *  @author Martin Matuška <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', 'slovo');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', 'popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', 'Prepisovač obsahu');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', 'Nahradzuje slová ľubovolným reťazcom (užitočné na vkladanie akronymov)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', 'Nový nadpis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', 'Zadajte slovo akronymu (to, ktoré má byť v texte hľadané a nahradené) pre novú položku ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', 'Slovo číslo %d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', 'Zadejte akronym (prepisované slovo) ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', 'Nadpis doplnku');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', 'Nadpis tohto doplnku');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', 'Nový popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', 'Zadajte popis, ktorý se má k akronymu pridať ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', 'Popis číslo %s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', 'Zadajte popis akronymu ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Prepisovací reťazec');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', 'Tento plugin je primárne určený k pridávaniu jednoduchých popiskov k vybraným kľúčovým slovám - tzv. akronymy. Príklad použitia <acronym title="{popis}">{slovo}</acronym> - pole {slovo} sa vyhľadá v texte a nahradí sa reťazcom, ktorý tu zadáte, pričom sa môže použiť pôvodné slovo, alebo slovo nové {popis}. Účelom doplnku je použitie rovnakej šablóny pre viac slov. Viac informácií nájdete na http://www.s9y.org.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', 'Prepisovanie znakov');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', 'Zmazanie znakov zo slova ({slovo}) - príklad použitia: Máte podnikový weblog a vedúcich Hrušku, Dlhého a Mokrého. Chcete, aby boli mená vedúcich zvýrazňované, ale nechcete, aby slovo hruška odkazovalo na vedúceho, keď ide o ovocie. V texte budete písať Hruška_vedúci, Dlhý_vedúci a Mokrý_vedúci. V tomto poli zadáte \'_vedúci\'. Táto prípona Vám umožní rozpoznať vedúcich, ale sama sa nebude v poli {slovo} zobrazovať.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Vaše nahradzované reťazce sú %s a %s.');
?>
