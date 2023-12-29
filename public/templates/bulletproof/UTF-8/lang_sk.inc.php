<?php

/**
 *  @version 1.0
 *  @author Martin Matuška <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2010/08/17
 *  Revision on 2010/08/17
 */

 // Colorsets
@define('THEME_COLORSET',               'Farebná sada');
@define('USER_STYLESHEET',              'Použiť dodatočný užívateľský súbor so štýlmi css. Užívateľ musí tento súbor ručne vytvoriť v priečinku šablóny bulletproof. Tento súbor musí mať názov user.css a môže byť použitý na náhradu niektorých vybraných štýlov.');
// Layout
@define('LAYOUT_TYPE',                  'Vzhľad weblogu (B = Telo weblogu, S = Stĺpec (bočný), CF = Najprv obsah)');
@define('LAYOUT_SBS',                   'Tri stĺpce, S-B-S');
@define('LAYOUT_BSS',                   'Tri stĺpce, B-S-S, CF');
@define('LAYOUT_SSB',                   'Tri stĺpce, S-S-B');
@define('LAYOUT_SB',                    'Dva stĺpce, S-B');
@define('LAYOUT_BS',                    'Dva stĺpce, B-S, CF');
@define('LAYOUT_SC',                    'Jeden stĺpec, bočný stĺpec bod ním, CF');
@define('LAYOUT_SBF',                   'Dva stĺpce, dva bočné stĺpce - na boku a pod telom');
@define('LAYOUT_BSF',                   'Dva stĺpce, dva bočné stĺpce - na boku a pod telom, CF');
@define('JAVASCRIPT_COLUMNS',           'Vytvoriť rovnako vysoké stĺpce pomocou javascriptu (mierne spomalí zobrazovanie stránky).');
// Custom header
@define('BP_CUSTOM_HEADER',             'Vlastný obrázok v záhlaví stránky');
@define('BP_HEADER_IMAGE',              'Vybrať obrázok');
@define('BP_HEADER_TYPE',               'Opakovanie obrázku v záhlaví');
@define('BP_HEADER_BANNER',             'Banner (neopakovať)');
@define('BP_HEADER_HTILED',             'Vodorovné opakovanie');
@define('BP_HEADER_VTILED',             'Zvislé opakovanie');
@define('BP_HEADER_BTILED',             'Vodorovné aj zvislé opakovanie');
@define('BP_HEADER_POSHOR',             'Vodorovné zarovnanie');
@define('BP_HEADER_POSVER',             'Zvislé zarovnanie');
@define('BP_CENTER',                    'na stred');
@define('BP_TOP',                       'hore');
@define('BP_BOTTOM',                    'dole');
// Fahrner Image Replacement
@define('FIR_BTITLE',                   'Zobrazovať názov weblogu v záhlaví');
@define('FIR_BDESCR',                   'Zobrazovať popis (podnadpis) weblogu v záhlaví');
// Date format
@define('BP_DATE_FORMAT',               'Formát dátumu');
// Entry footer
@define('ENTRY_FOOTER_POS',             'Umiestnenie päty/záhlavia v článku (obsahujúce informácie o autorovi, dátume publikácie, zaradenia do kategórií; rozdelenie päty = kategórie článku nad, odstatné pod článkom)');
@define('BELOW_ENTRY',                  'Päta = pod článkom');
@define('BELOW_TITLE',                  'Záhlavie = pod nadpisom článku');
@define('SPLIT_FOOTER',                 'Rozdeliť pätu/záhlavie');
@define('FOOTER_AUTHOR',                'Zobraziť v päte autora');
@define('FOOTER_CATEGORIES',            'Zobraziť v päte kategórie');
@define('FOOTER_TIMESTAMP',             'Zobraziť v päte čas zverejnenia');
@define('FOOTER_COMMENTS',              'Zobraziť v päte počet komentárov');
@define('FOOTER_TRACKBACKS',            'Zobraziť v päte počet odoziev');
@define('ALT_COMMTRACK',                'Použít alternatívne zobrazenie počtu komentárov a odoziev (napr. "Žiadne komentáre" alebo "1 komentár" namiesto "Komentárov (0)" alebo "Komentárov (1)")');
@define('SHOW_ADDTHIS_WIDGET',          'Zobraziť záložku AddThis (http://www.addthis.com) v päte článku');
@define('ADDTHIS_ACCOUNT',              'Číslo účtu AddThis.com. Nie je vyžadované, ale ak ho zadáte, umožní viesť štatistiku o čítanosti, ukladaní do záložiek a zdieľaní obsahu Vaších stránok medzi čitateľmi.');
@define('SHOW_STICKY_ENTRY_FOOTER',     'Zobraziť päťu na stálych (prilepených) článkoch (vyžaduje nainštalovanie doplnku udalosti "Rozšírené vlastnosti článkov")');
@define('SHOW_STICKY_ENTRY_HEADING',    'Zobraziť nadpis na stálych (prilepených) článkoch (vyžaduje nainštalovanie doplnku udalostí "Rozšírené vlastnosti článkov")');
// Page footer next page  and previous page links
@define('PREV_NEXT_STYLE',              'Zobraziť pätu "ďalší/predchádzajúci príspevok" v tvare');
@define('PREV_NEXT_TEXT',               'Text');
@define('PREV_NEXT_TEXT_ICON',          'Text a ikona');
@define('PREV_NEXT_ICON',               'Ikona');
@define('SHOW_PAGINATION',              'Zobrazovať čísla stránok (stránkovanie)');
// coComment support
@define('COCOMMENT_ACTIVE',             'Vložiť coComment (http://www.cocomment.com) do formulára komentárov');
// Counter code
@define('COUNTER_CODE',                 'Vložiť kód počítadla přístupov alebo štatistík webu');
@define('USE_COUNTER',                  'Použíť výššie zadaný kód počítadla/štatistík?');
// Additional footer text
@define('FOOTER_TEXT',                  'Následujúcí text bude vložený do päty článkov');
@define('USE_FOOTER_TEXT',              'Vložiť výššie zadaný text do päty?');
//Sitenav
@define('SITENAV_POSITION',             'Poloha navigačnej lišty');
@define('SITENAV_NONE',                 'Žiadna navigačná lišta');
@define('SITENAV_ABOVE',                'Nad obrázkom v záhlaví stránky');
@define('SITENAV_BELOW',                'Pod obrázkom v záhlaví stránky');
@define('SITENAV_LEFT',                 'Na začiatku ĽAVÉHO bočného stĺpca');
@define('SITENAV_RIGHT',                'Na začiatku PRAVÉHO bočného stĺpca');
@define('SITENAV_FOOTER',               'Zobraziť navigačnú lištu v päte stránky (ak je v predchádzajúcej volbe vybráné "Žiadna navigačná lišta", nebude zobrazená nikdy bez ohľadu na túto voľbu)');
@define('SITENAV_QUICKSEARCH',          'Zobraziť pole rýchleho vyhľadávania v navigačnej lište (zobrazí sa iba v navigačnej lište nad alebo pod obrázkom v záhlaví stránky. Ak je navigačná lišta v bočných stĺpcoch, vyhľadávacie pole nebude zobrazené.)');
@define('SITENAV_TITLE',                'Nadpis pré navigačnú lištu/menu (iba ak je zobrazená na začiatku bočného stĺpca)');
@define('SITENAV_TITLE_TEXT',           'Hlavné menu');
@define('NAVLINK_AMOUNT',               'Zadajte počet odkazov navigačnej lišty (po zadaní tohto nastavenia kliknite na "Uložiť" a obnovte stránku)');
@define('NAV_LINK_TEXT',                'Test odkazu');
@define('NAV_LINK_URL',                 'URL adresa odkazu');
