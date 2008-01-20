<?php # $Id: lang_cz.inc.php 1381 2007-12-14 23:30:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_TEXTWIKI_NAME',                           'Markup: Wiki');
@define('PLUGIN_EVENT_TEXTWIKI_DESC',                           'Převádí značky Text_Wiki do HTML');
@define('PLUGIN_EVENT_TEXTWIKI_TRANSFORM',                      'Použití značek <a href="http://c2.com/cgi/wiki">Wiki</a> je povoleno');

@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PREFILETER',           'Převádí různé způsoby ukončení řádky (Unix/DOS) na jednotný formát a přidává na konec řádky znak "\"" Standardně zapnuto. Nedoporučuje se vypínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_DELIMITER',            'Převádí vnitřní oddělovač Text_Wiki "\xFF" (255), aby předešlo konfliktům při převádění textu. Standardně zapnuto. Nedoporučuje se vypínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_CODE',                 'Označuje text mezi <code> a </code> jako kód programovacího jazyku. Použitím <code type=".."> můžete zapnout zvýrazňování kódu (např. PHP). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PHPCODE',              'Text uzavřený mezi tagy <php> a </php> označuje a zvýrazňuje jako PHP kód a přidává zahajující PHP tagy. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HTML',                 'Dovoluje použít plný HTML kód mezi tagy <html> a </html>. Pozor, jako tento kód je možné vložit i JavaScript! Pokud používáte tuto volbu, vypněte značkování komentářů. Standardně vypnuto. Nedoporučuje se zapínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_RAW',                  'Text mezi `` a `` nebude převáděn podle žádného z pravidel. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_INCLUDE',              'Dovoluje vložit PHP skript pomocí syntaxe [[include /cesta/ke/skriptum/script.php]]. Výstup skriptu je zpracován pomocí značkovacích pravidel. Pozor, povolení této volby představuje bezpečnostní riziko! Pokud používáte tuto volbu, vypněte značkování komentářů! Standardně vypnuto. Nedoporučuje se zapínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_INCLUDE_DESC_BASE',         'Základní adresář Vašich skriptů. Standardně nastaveno na  "/cesta/ke/skriptum/". Pokud toto políčko ponecháte prázdné, musíte používat absolutní cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HEADING',              'Řádky začínající znakem "+" jsou převedeny na nadpisy (+ = <h1>, ++++++ = <h6>). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HORIZ',                '---- je převedeno na vodorovnou čáru (<hr>). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BREAK',                'Znak "_" na konci řádku znamená vynucené odřádkování. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BLOCKQUOTE',           'Umožňuje použití emailové citace ("> ", ">> ",...). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_LIST',                 'Umožňuje používat seznamy ("* " = odrážkovaný, "# " = číslovaný). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_DEFLIST',              'Umožňuje vytvářet seznamy definic. Syntaxe: ": Termín : Definice". Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TABLE',                'Dovoluje vytvářet tabulky. Pouze pro úplné řádky. Syntaxe: "|| Políčko 1 || Políčko 2 || Políčko 3 ||". Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_EMBED',                'Dovoluje vložit PHP kód pomocí syntaxe [[embed /cesta/ke/skriptum/script.php]]. Výstup skriptu není zpracován pomocí značkovacích pravidel. Pozor, povolení této volby představuje bezpečnostní riziko! Pokud používáte tuto volbu, vypněte značkování komentářů! Standardně vypnuto. Nedoporučuje se zapínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_EMBED_DESC_BASE',           'Základní adresář Vašich skriptů. Standardně nastaveno na  "/cesta/ke/skriptum/". Pokud toto políčko ponecháte prázdné, musíte používat absolutní cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_IMAGE',                'Umožňuje vkládat obrázky. ([[image  /cesta/k/obrazkum/obrazek.pripona [HTML atributy] ]] nebo [[image  /cesta/k/obrazku/obrazek.pripona  [link="NazevStranky"] [HTML atributy] ]] pro vkládání obrázků s odkazy). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_IMAGE_DESC_BASE',           'Základní adresář Vašich obrázků. Standardně nastaveno na  "/cesta/k/obrazkum/". Pokud toto políčko ponecháte prázdné, musíte používat absolutní cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PHPLOOKUP',            'Vytváří odkazy na funkci do manuálu PHP pomocí [[php jmeno-funkce]]. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TOC',                  'Vytváří obsah z nadpisů pomocí  [[toc]] (Table Of Contents). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_NEWLINE',              'Převádí znaky odřádkování na zalomení řádku (<br />). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_CENTER',               'Řádky začínající "= " jsou vystředěny. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PARAGRAPH',            'Dvě nové řádky jsou převedeny na nový odstavec (<p></p>). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_URL',                  'Převádí http://priklad.cz na odkaz, [http://priklad.cz] na poznámky pod čarou a [http://priklad.cz Příklad] na odkaz s popisem. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_URL_DESC_TARGET',           'Definuje cíl pro odkazy. Standardně nastaveno na "_blank".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_FREELINK',             'Dovoluje použití nestandardních wiki odkazů pomocí "((Nestandardní wiki link))" and "((Nestandardní wiki link|Popis))". Standardně vypnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_PAGES',       'Freelink = volný odkaz musí znát, které stránky existují a které mají být označeny jako "nové". Tato volba určije soubor (místní nebo vzdálený) který obsahuje na každé řádce jedno jméno souboru. Pokud se jedná o vzdálený soubor, bude po jistou dobu cachován.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_VIEWURL',     'Tato URL adresa je určena pro prohlížení freelinků. V adrese musíte zadat řetězec "%s" na místě, kde bude nahrazen jménem odkazu (freelinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_NEWURL',      'Tato URL adresa určuje stránku, která je zodpovědná za vytváření nových freelinků. V adrese musíte zadat řetězec "%s" na místě, kde bude nahrazen jménem odkazu (freelinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_NEWTEXT',     'Tento text bude přidán k neznámým freelinkům (volným odkazům) jako odkaz k vytvoření nové stránky. Standardně nastaveno na "?".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_CACHETIME',   'Pokud zadáte vzdálenou URL adresu pro zobrazování Vašich freelinků, bude tento soubor cachován po dobu, definovanou v sekundách zde. Standardně nastavena 1 hodina = 3600 sekund.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_INTERWIKI',            'Umožňuje používání odkazů do wikipédií MeatBall, Advogato a Wiki použitím formátu JmenoWiki:JmenoStranky nebo [JmenoWiki:JmenoStranky Popisek]. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_INTERWIKI_DESC_TARGET',     '');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_WIKILINK',             'Umožňuje používání standardních WikiWords (WikiSlova = slova se dvěma velkými písmeny) jako wiki odkazů. Standardně vypnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_PAGES',       'WikiLink = volný odkaz musí znát, které stránky existují a které mají být označeny jako "nové". Tato volba určije soubor (místní nebo vzdálený) který obsahuje na každé řádce jedno jméno souboru. Pokud se jedná o vzdálený soubor, bude po jistou dobu cachován.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_VIEWURL',     'Tato URL adresa je určena pro prohlížení WikiLinků. V adrese musíte zadat řetězec "%s" na místě, kde bude nahrazen jménem odkazu (WikiLinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_NEWURL',      'Tato URL adresa určuje stránku, která je zodpovědná za vytváření nových WikiLinků. V adrese musíte zadat řetězec "%s" na místě, kde bude nahrazen jménem odkazu (WikiLinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_NEWTEXT',     'Tento text bude přidán k neznámým WikiLinkům jako odkaz k vytvoření nové stránky. Standardně nastaveno na "?".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_CACHETIME',   'Pokud zadáte vzdálenou URL adresu pro zobrazování Vašich WikiLinků, bude tento soubor cachován po dobu, definovanou v sekundách zde. Standardně nastavena 1 hodina = 3600 sekund.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_COLORTEXT',            'Obarvovat text pomocí ##barva|text##. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_STRONG',               '**Text** je označen jako silný. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BOLD',                 '\'\'\'Text\'\'\' je zobrazen tučně. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_EMPHASIS',             '//Text// je zobrazen jako zdůrazněný. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_ITALIC',               '\'\'Text\'\' je zobrazen kurzívou. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TT',                   '{{Text}} je zobrazen fontem s pevnou šířkou znaku (monotype). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_SUPERSCRIPT',          '^^Text^^ je zobrazen jako horní index. Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_REVISE',               'Umožňuje značkování textu jako revize. Použití: "@@---smazat tento text+++vložit místo něj tento text@@". Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TIGHTEN',              'Vyhledává více než tři odřádkování za sebou a převádí je na dvě nové řádky (odstavec). Standardně zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_ENTITIES',             'Převádí HTML entity na bezpečné sekvence znaků. Standardně zapnuto.');

?>
