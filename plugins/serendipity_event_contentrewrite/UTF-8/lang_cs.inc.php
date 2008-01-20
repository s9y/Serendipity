<?php # $Id: lang_cs.inc.php 1381 2007-12-11 01:17:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  First-transaltion: Vladimir Ajgl <vlada@ajgl.cz> 2007-12-11
 */

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', 'slovo');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', 'popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', 'Přepisovač obsahu');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', 'Nahrazuje slovat libovolným řetězcem (užitečné pro vkládání akronymů)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', 'Nový nadpis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', 'Zadejte slovo akronymu (to, které má být v textu hledáno a nahrazováno) pro novou položku ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', 'Slovo číslo %d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', 'Zadejte akronym (přepisované slovo) ({slovo})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', 'Nadpis Pluginu');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', 'Nadpis tohoto pluginu');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', 'Nový popis');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', 'Zadejte popis, který se má k akronymu přidat ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', 'Popis číslo %s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', 'Zadejte popis akronymu ({popis})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Přepisovací řetězec');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', 'Tento plugin je primárně vymyšlen k přidávání jednoduchých popisků ke zvoleným klíčovým slovům - tzv. akronymy. Příklad použití <acronym title="{popis}">{slovo}</acronym> - políčko {slovo} se hledá v textu, nahrazuje se řetězcem, který zadáte tady, přičemž můžete použít původní slovo, můžete použít slovo nové {popis}. Účelem pluginu je používat stejnou šabonu pro více slov. Více použití viz dokumentace (přeložená) na http://www.s9y.org.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', 'Přepisování znaků');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', 'Odmazávání znaků ze slova ({slovo}) - příklad použití: Máte podnikový blog a šéfy Hrušku, Jelínka a Vrátného. Chcete, aby se jména šéfů zvýrazňovala, ale nechcete, aby se slovo hruška odkazovalo na šéfa, pokud mluvíte o ovoci, podobně se slivovicí, případně nechcete zaměňovat šéfa s důchodcem na vrátnici. V textu budete psát Hruška_šéf, Jelínek_šéf, Vrátný_šéf. V tomto poli zadáte \'_šéf\'. Tato přípona Vám umožní rozpoznat šéfy, ale sama o sobě se nebude v poli {slovo} zobrazovat.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Vaše nahrazovací řetězce jsou %s a %s.');
?>
