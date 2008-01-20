<?php # $Id: lang_cz.inc.php 1381 2007-12-14 23:30:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_TEXTWIKI_NAME',                           'Markup: Wiki');
@define('PLUGIN_EVENT_TEXTWIKI_DESC',                           'Pøevádí znaèky Text_Wiki do HTML');
@define('PLUGIN_EVENT_TEXTWIKI_TRANSFORM',                      'Pou¾ití znaèek <a href="http://c2.com/cgi/wiki">Wiki</a> je povoleno');

@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PREFILETER',           'Pøevádí rùzné zpùsoby ukonèení øádky (Unix/DOS) na jednotný formát a pøidává na konec øádky znak "\"" Standardnì zapnuto. Nedoporuèuje se vypínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_DELIMITER',            'Pøevádí vnitøní oddìlovaè Text_Wiki "\xFF" (255), aby pøede¹lo konfliktùm pøi pøevádìní textu. Standardnì zapnuto. Nedoporuèuje se vypínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_CODE',                 'Oznaèuje text mezi <code> a </code> jako kód programovacího jazyku. Pou¾itím <code type=".."> mù¾ete zapnout zvýrazòování kódu (napø. PHP). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PHPCODE',              'Text uzavøený mezi tagy <php> a </php> oznaèuje a zvýrazòuje jako PHP kód a pøidává zahajující PHP tagy. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HTML',                 'Dovoluje pou¾ít plný HTML kód mezi tagy <html> a </html>. Pozor, jako tento kód je mo¾né vlo¾it i JavaScript! Pokud pou¾íváte tuto volbu, vypnìte znaèkování komentáøù. Standardnì vypnuto. Nedoporuèuje se zapínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_RAW',                  'Text mezi `` a `` nebude pøevádìn podle ¾ádného z pravidel. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_INCLUDE',              'Dovoluje vlo¾it PHP skript pomocí syntaxe [[include /cesta/ke/skriptum/script.php]]. Výstup skriptu je zpracován pomocí znaèkovacích pravidel. Pozor, povolení této volby pøedstavuje bezpeènostní riziko! Pokud pou¾íváte tuto volbu, vypnìte znaèkování komentáøù! Standardnì vypnuto. Nedoporuèuje se zapínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_INCLUDE_DESC_BASE',         'Základní adresáø Va¹ich skriptù. Standardnì nastaveno na  "/cesta/ke/skriptum/". Pokud toto políèko ponecháte prázdné, musíte pou¾ívat absolutní cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HEADING',              'Øádky zaèínající znakem "+" jsou pøevedeny na nadpisy (+ = <h1>, ++++++ = <h6>). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HORIZ',                '---- je pøevedeno na vodorovnou èáru (<hr>). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BREAK',                'Znak "_" na konci øádku znamená vynucené odøádkování. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BLOCKQUOTE',           'Umo¾òuje pou¾ití emailové citace ("> ", ">> ",...). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_LIST',                 'Umo¾òuje pou¾ívat seznamy ("* " = odrá¾kovaný, "# " = èíslovaný). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_DEFLIST',              'Umo¾òuje vytváøet seznamy definic. Syntaxe: ": Termín : Definice". Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TABLE',                'Dovoluje vytváøet tabulky. Pouze pro úplné øádky. Syntaxe: "|| Políèko 1 || Políèko 2 || Políèko 3 ||". Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_EMBED',                'Dovoluje vlo¾it PHP kód pomocí syntaxe [[embed /cesta/ke/skriptum/script.php]]. Výstup skriptu není zpracován pomocí znaèkovacích pravidel. Pozor, povolení této volby pøedstavuje bezpeènostní riziko! Pokud pou¾íváte tuto volbu, vypnìte znaèkování komentáøù! Standardnì vypnuto. Nedoporuèuje se zapínat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_EMBED_DESC_BASE',           'Základní adresáø Va¹ich skriptù. Standardnì nastaveno na  "/cesta/ke/skriptum/". Pokud toto políèko ponecháte prázdné, musíte pou¾ívat absolutní cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_IMAGE',                'Umo¾òuje vkládat obrázky. ([[image  /cesta/k/obrazkum/obrazek.pripona [HTML atributy] ]] nebo [[image  /cesta/k/obrazku/obrazek.pripona  [link="NazevStranky"] [HTML atributy] ]] pro vkládání obrázkù s odkazy). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_IMAGE_DESC_BASE',           'Základní adresáø Va¹ich obrázkù. Standardnì nastaveno na  "/cesta/k/obrazkum/". Pokud toto políèko ponecháte prázdné, musíte pou¾ívat absolutní cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PHPLOOKUP',            'Vytváøí odkazy na funkci do manuálu PHP pomocí [[php jmeno-funkce]]. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TOC',                  'Vytváøí obsah z nadpisù pomocí  [[toc]] (Table Of Contents). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_NEWLINE',              'Pøevádí znaky odøádkování na zalomení øádku (<br />). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_CENTER',               'Øádky zaèínající "= " jsou vystøedìny. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PARAGRAPH',            'Dvì nové øádky jsou pøevedeny na nový odstavec (<p></p>). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_URL',                  'Pøevádí http://priklad.cz na odkaz, [http://priklad.cz] na poznámky pod èarou a [http://priklad.cz Pøíklad] na odkaz s popisem. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_URL_DESC_TARGET',           'Definuje cíl pro odkazy. Standardnì nastaveno na "_blank".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_FREELINK',             'Dovoluje pou¾ití nestandardních wiki odkazù pomocí "((Nestandardní wiki link))" and "((Nestandardní wiki link|Popis))". Standardnì vypnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_PAGES',       'Freelink = volný odkaz musí znát, které stránky existují a které mají být oznaèeny jako "nové". Tato volba urèije soubor (místní nebo vzdálený) který obsahuje na ka¾dé øádce jedno jméno souboru. Pokud se jedná o vzdálený soubor, bude po jistou dobu cachován.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_VIEWURL',     'Tato URL adresa je urèena pro prohlí¾ení freelinkù. V adrese musíte zadat øetìzec "%s" na místì, kde bude nahrazen jménem odkazu (freelinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_NEWURL',      'Tato URL adresa urèuje stránku, která je zodpovìdná za vytváøení nových freelinkù. V adrese musíte zadat øetìzec "%s" na místì, kde bude nahrazen jménem odkazu (freelinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_NEWTEXT',     'Tento text bude pøidán k neznámým freelinkùm (volným odkazùm) jako odkaz k vytvoøení nové stránky. Standardnì nastaveno na "?".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_CACHETIME',   'Pokud zadáte vzdálenou URL adresu pro zobrazování Va¹ich freelinkù, bude tento soubor cachován po dobu, definovanou v sekundách zde. Standardnì nastavena 1 hodina = 3600 sekund.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_INTERWIKI',            'Umo¾òuje pou¾ívání odkazù do wikipédií MeatBall, Advogato a Wiki pou¾itím formátu JmenoWiki:JmenoStranky nebo [JmenoWiki:JmenoStranky Popisek]. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_INTERWIKI_DESC_TARGET',     '');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_WIKILINK',             'Umo¾òuje pou¾ívání standardních WikiWords (WikiSlova = slova se dvìma velkými písmeny) jako wiki odkazù. Standardnì vypnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_PAGES',       'WikiLink = volný odkaz musí znát, které stránky existují a které mají být oznaèeny jako "nové". Tato volba urèije soubor (místní nebo vzdálený) který obsahuje na ka¾dé øádce jedno jméno souboru. Pokud se jedná o vzdálený soubor, bude po jistou dobu cachován.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_VIEWURL',     'Tato URL adresa je urèena pro prohlí¾ení WikiLinkù. V adrese musíte zadat øetìzec "%s" na místì, kde bude nahrazen jménem odkazu (WikiLinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_NEWURL',      'Tato URL adresa urèuje stránku, která je zodpovìdná za vytváøení nových WikiLinkù. V adrese musíte zadat øetìzec "%s" na místì, kde bude nahrazen jménem odkazu (WikiLinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_NEWTEXT',     'Tento text bude pøidán k neznámým WikiLinkùm jako odkaz k vytvoøení nové stránky. Standardnì nastaveno na "?".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_CACHETIME',   'Pokud zadáte vzdálenou URL adresu pro zobrazování Va¹ich WikiLinkù, bude tento soubor cachován po dobu, definovanou v sekundách zde. Standardnì nastavena 1 hodina = 3600 sekund.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_COLORTEXT',            'Obarvovat text pomocí ##barva|text##. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_STRONG',               '**Text** je oznaèen jako silný. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BOLD',                 '\'\'\'Text\'\'\' je zobrazen tuènì. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_EMPHASIS',             '//Text// je zobrazen jako zdùraznìný. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_ITALIC',               '\'\'Text\'\' je zobrazen kurzívou. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TT',                   '{{Text}} je zobrazen fontem s pevnou ¹íøkou znaku (monotype). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_SUPERSCRIPT',          '^^Text^^ je zobrazen jako horní index. Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_REVISE',               'Umo¾òuje znaèkování textu jako revize. Pou¾ití: "@@---smazat tento text+++vlo¾it místo nìj tento text@@". Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TIGHTEN',              'Vyhledává více ne¾ tøi odøádkování za sebou a pøevádí je na dvì nové øádky (odstavec). Standardnì zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_ENTITIES',             'Pøevádí HTML entity na bezpeèné sekvence znakù. Standardnì zapnuto.');

?>
