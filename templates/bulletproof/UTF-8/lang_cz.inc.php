<?php # lang_cz.inc.php 1.3 2011-01-08 10:43:18 VladaAjgl $

/**
 *  @version 1.3
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/12/07 
 *  Revision on 2008/02/28 
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/06/30
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/01/08
 */
 
 // Colorsets

@define('THEME_COLORSET',               'Barevná sada');
@define('USER_STYLESHEET',              'Použít doplňující uživatelský soubor s css styly. Uživatel musí tento soubor ručně vytvořit v adresáři šablony bulletproof. Tento soubor musí být pojmenovám user.css a může být použit k nahrazení některých stylů.');
// Layout

@define('LAYOUT_TYPE',                  'Uspořádání blogu (B = Tělo blogu, S = Sloupec (postranní), ON = Obsah nejdříve)');
@define('LAYOUT_SBS',                   'Tři sloupce, S-B-S');
@define('LAYOUT_BSS',                   'Tři sloupce, B-S-S, ON');
@define('LAYOUT_SSB',                   'Tři sloupce, S-S-B');
@define('LAYOUT_SB',                    'Dva sloupce, S-B');
@define('LAYOUT_BS',                    'Dva sloupce, B-S, ON');
@define('LAYOUT_SC',                    'Jeden sloupec, Postranní sloupec pod ním, ON');
@define('LAYOUT_SBF',                   'Dva sloupce, dva postranní sloupce - na straně a pod tělem');
@define('LAYOUT_BSF',                   'Dva sloupce, dva postranní sloupce - na straně a pod tělem, ON');
@define('JAVASCRIPT_COLUMNS',           'Vytvoř stejně vysoké sloupce pomocí javascriptu (trochu zpomalí vykreslování stránky).');
// Custom header

@define('BP_CUSTOM_HEADER',             'Vlastní obrázek v záhlaví stránky');
@define('BP_HEADER_IMAGE',              'Vyber obrázek');
@define('BP_HEADER_TYPE',               'Opakování obrázku v záhlaví');
@define('BP_HEADER_BANNER',             'Banner (neopakovat)');
@define('BP_HEADER_HTILED',             'Vodorovně opakovaný');
@define('BP_HEADER_VTILED',             'Svisle opakovaný');
@define('BP_HEADER_BTILED',             'Vodorovně i svisle opakovaný');
@define('BP_HEADER_POSHOR',             'Vodorovné zarovnání');
@define('BP_HEADER_POSVER',             'Svislé zarovnání');
@define('BP_CENTER',                    'na střed');
@define('BP_TOP',                       'nahoře');
@define('BP_BOTTOM',                    'dole');
// Fahrner Image Replacement

@define('FIR_BTITLE',                   'Zobrazovat název blogu v záhlaví');
@define('FIR_BDESCR',                   'Zobrazovat popis (podnadpis) blogu v záhlaví');
// Date format

@define('BP_DATE_FORMAT',               'Formát data');
// Entry footer

@define('ENTRY_FOOTER_POS',             'Umístění patičky/záhlaví příspěvku (takové to s informacemi o autoru, datu vydání, zařazení do kategorií; rozdělení patičky = kategorie příspěvku nad, zbytek pod příspěvkem)');
@define('BELOW_ENTRY',                  'Patička = pod příspěvkem');
@define('BELOW_TITLE',                  'Záhlaví = pod nadpisem příspěvku');
@define('SPLIT_FOOTER',                 'Rozdělit patičku/záhlaví');
@define('FOOTER_AUTHOR',                'Zobrazit v patičce autora');
@define('FOOTER_CATEGORIES',            'Zobrazit v patičce kategorie');
@define('FOOTER_TIMESTAMP',             'Zobrazit v patičce čas zveřejnění');
@define('FOOTER_COMMENTS',              'Zobrazit v patičce počet komentářů');
@define('FOOTER_TRACKBACKS',            'Zobrazit v patičce počet odezev');
@define('ALT_COMMTRACK',                'Použít alternativní zobrazení počtu komentářů a odezev (např. "Žádné komentáře" nebo "1 komentář" místo "Komentářů (0)" nebo "Komentářů (1)")');
@define('SHOW_ADDTHIS_WIDGET',          'Zobrzit záložku AddThis (http://www.addthis.com) v patičce příspěvku');
@define('ADDTHIS_ACCOUNT',              'Číslo účtu AddThis.com. Není vyžadováno, ale pokud je zadáno, umožní vést statistiku, jak Vás vaši čtenáři čtou, jak si Vás ukládají do záložek a jak si mezi sebou sdílí obsah Vašich stránek.');
@define('SHOW_STICKY_ENTRY_FOOTER',     'Zobrazit patičku u stálých (přilepených) příspěvků (vyžaduje nainstalování pluginu událostí "Rozšířené vlastnosti příspěvků")');
@define('SHOW_STICKY_ENTRY_HEADING',    'Zobraz nadpis u stálých (přilepených) příspěvků (vyžaduje nainstalování pluginu událostí "Rozšířené vlastnosti příspěvků")');
// Page footer next page  and previous page links

@define('PREV_NEXT_STYLE',              'Zobrazit patičku "další/předchozí příspěvek" ve tvaru');
@define('PREV_NEXT_TEXT',               'Text');
@define('PREV_NEXT_TEXT_ICON',          'Text a ikonka');
@define('PREV_NEXT_ICON',               'Ikonka');
// coComment support

@define('COCOMMENT_ACTIVE',             'Vložit coComment (http://www.cocomment.com) do formuláře komentářů');
// Counter code

@define('COUNTER_CODE',                 'Vložit kód počítadla přístupů a/nebo statistik webu');
@define('USE_COUNTER',                  'Použít výše zadaný kód počítadla/statistik?');
// Additional footer text

@define('FOOTER_TEXT',                  'Následující text bude vložen do patičky příspěvků');
@define('USE_FOOTER_TEXT',              'Vložit výše zadaný text do patičky?');
//Sitenav

@define('SITENAV_POSITION',             'Poloha navigační lišty');
@define('SITENAV_NONE',                 'Žádná navigační lišta');
@define('SITENAV_ABOVE',                'Nad obrázkem v záhlaví stránky');
@define('SITENAV_BELOW',                'Pod obrázkem v záhlaví stránky');
@define('SITENAV_LEFT',                 'Na začátku LEVÉHO postranního sloupce');
@define('SITENAV_RIGHT',                'Na začátku PRAVÉHO postranního sloupce');
@define('SITENAV_FOOTER',               'Zobraz navigační lištu v patičce stránky (pokud je v předchozí volbě vybráno "Žádná navigační lišta", nebude zobrazena nikdy bez ohledu na tuto volbu)');
@define('SITENAV_QUICKSEARCH',          'Zobrazit políčko rychlého vyhledávání v navigační liště (zobrazuje se pouze v navigační liště nad nebo pod obrázkem v záhlaví stránky. Je-li navigační lišta v postranních sloupcích, vyhledávací políčko není nikdy zobrazeno.)');
@define('SITENAV_TITLE',                'Nadpis pro navigační lištu/menu (pouze pokud je zobrazena na začátku postranního sloupce)');
@define('SITENAV_TITLE_TEXT',           'Hlavní menu');
@define('NAVLINK_AMOUNT',               'Zadejte počet odkazů navigační lišty (ihned po zadání této volby klikněte na "Uloži" a obnovte stránku)');
@define('NAV_LINK_TEXT',                'Test odkazu');
@define('NAV_LINK_URL',                 'URL adresa odkazu');

// Next lines were translated on 2009/06/30
@define('SHOW_PAGINATION',              'Zobrazovat čísla stránek (stránkování)');

// Next lines were translated on 2011/01/08
@define('THEME_HEADER',                 'Hlavička');