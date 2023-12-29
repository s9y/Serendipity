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
@define('USER_STYLESHEET',              'Pou¾ít doplòující u¾ivatelský soubor s css styly. U¾ivatel musí tento soubor ruènì vytvoøit v adresáøi ¹ablony bulletproof. Tento soubor musí být pojmenovám user.css a mù¾e být pou¾it k nahrazení nìkterých stylù.');
// Layout

@define('LAYOUT_TYPE',                  'Uspoøádání blogu (B = Tìlo blogu, S = Sloupec (postranní), ON = Obsah nejdøíve)');
@define('LAYOUT_SBS',                   'Tøi sloupce, S-B-S');
@define('LAYOUT_BSS',                   'Tøi sloupce, B-S-S, ON');
@define('LAYOUT_SSB',                   'Tøi sloupce, S-S-B');
@define('LAYOUT_SB',                    'Dva sloupce, S-B');
@define('LAYOUT_BS',                    'Dva sloupce, B-S, ON');
@define('LAYOUT_SC',                    'Jeden sloupec, Postranní sloupec pod ním, ON');
@define('LAYOUT_SBF',                   'Dva sloupce, dva postranní sloupce - na stranì a pod tìlem');
@define('LAYOUT_BSF',                   'Dva sloupce, dva postranní sloupce - na stranì a pod tìlem, ON');
@define('JAVASCRIPT_COLUMNS',           'Vytvoø stejnì vysoké sloupce pomocí javascriptu (trochu zpomalí vykreslování stránky).');
// Custom header

@define('BP_CUSTOM_HEADER',             'Vlastní obrázek v záhlaví stránky');
@define('BP_HEADER_IMAGE',              'Vyber obrázek');
@define('BP_HEADER_TYPE',               'Opakování obrázku v záhlaví');
@define('BP_HEADER_BANNER',             'Banner (neopakovat)');
@define('BP_HEADER_HTILED',             'Vodorovnì opakovaný');
@define('BP_HEADER_VTILED',             'Svisle opakovaný');
@define('BP_HEADER_BTILED',             'Vodorovnì i svisle opakovaný');
@define('BP_HEADER_POSHOR',             'Vodorovné zarovnání');
@define('BP_HEADER_POSVER',             'Svislé zarovnání');
@define('BP_CENTER',                    'na støed');
@define('BP_TOP',                       'nahoøe');
@define('BP_BOTTOM',                    'dole');
// Fahrner Image Replacement

@define('FIR_BTITLE',                   'Zobrazovat název blogu v záhlaví');
@define('FIR_BDESCR',                   'Zobrazovat popis (podnadpis) blogu v záhlaví');
// Date format

@define('BP_DATE_FORMAT',               'Formát data');
// Entry footer

@define('ENTRY_FOOTER_POS',             'Umístìní patièky/záhlaví pøíspìvku (takové to s informacemi o autoru, datu vydání, zaøazení do kategorií; rozdìlení patièky = kategorie pøíspìvku nad, zbytek pod pøíspìvkem)');
@define('BELOW_ENTRY',                  'Patièka = pod pøíspìvkem');
@define('BELOW_TITLE',                  'Záhlaví = pod nadpisem pøíspìvku');
@define('SPLIT_FOOTER',                 'Rozdìlit patièku/záhlaví');
@define('FOOTER_AUTHOR',                'Zobrazit v patièce autora');
@define('FOOTER_CATEGORIES',            'Zobrazit v patièce kategorie');
@define('FOOTER_TIMESTAMP',             'Zobrazit v patièce èas zveøejnìní');
@define('FOOTER_COMMENTS',              'Zobrazit v patièce poèet komentáøù');
@define('FOOTER_TRACKBACKS',            'Zobrazit v patièce poèet odezev');
@define('ALT_COMMTRACK',                'Pou¾ít alternativní zobrazení poètu komentáøù a odezev (napø. "®ádné komentáøe" nebo "1 komentáø" místo "Komentáøù (0)" nebo "Komentáøù (1)")');
@define('SHOW_ADDTHIS_WIDGET',          'Zobrzit zálo¾ku AddThis (http://www.addthis.com) v patièce pøíspìvku');
@define('ADDTHIS_ACCOUNT',              'Èíslo úètu AddThis.com. Není vy¾adováno, ale pokud je zadáno, umo¾ní vést statistiku, jak Vás va¹i ètenáøi ètou, jak si Vás ukládají do zálo¾ek a jak si mezi sebou sdílí obsah Va¹ich stránek.');
@define('SHOW_STICKY_ENTRY_FOOTER',     'Zobrazit patièku u stálých (pøilepených) pøíspìvkù (vy¾aduje nainstalování pluginu událostí "Roz¹íøené vlastnosti pøíspìvkù")');
@define('SHOW_STICKY_ENTRY_HEADING',    'Zobraz nadpis u stálých (pøilepených) pøíspìvkù (vy¾aduje nainstalování pluginu událostí "Roz¹íøené vlastnosti pøíspìvkù")');
// Page footer next page  and previous page links

@define('PREV_NEXT_STYLE',              'Zobrazit patièku "dal¹í/pøedchozí pøíspìvek" ve tvaru');
@define('PREV_NEXT_TEXT',               'Text');
@define('PREV_NEXT_TEXT_ICON',          'Text a ikonka');
@define('PREV_NEXT_ICON',               'Ikonka');
// coComment support

@define('COCOMMENT_ACTIVE',             'Vlo¾it coComment (http://www.cocomment.com) do formuláøe komentáøù');
// Counter code

@define('COUNTER_CODE',                 'Vlo¾it kód poèítadla pøístupù a/nebo statistik webu');
@define('USE_COUNTER',                  'Pou¾ít vý¹e zadaný kód poèítadla/statistik?');
// Additional footer text

@define('FOOTER_TEXT',                  'Následující text bude vlo¾en do patièky pøíspìvkù');
@define('USE_FOOTER_TEXT',              'Vlo¾it vý¹e zadaný text do patièky?');
//Sitenav

@define('SITENAV_POSITION',             'Poloha navigaèní li¹ty');
@define('SITENAV_NONE',                 '®ádná navigaèní li¹ta');
@define('SITENAV_ABOVE',                'Nad obrázkem v záhlaví stránky');
@define('SITENAV_BELOW',                'Pod obrázkem v záhlaví stránky');
@define('SITENAV_LEFT',                 'Na zaèátku LEVÉHO postranního sloupce');
@define('SITENAV_RIGHT',                'Na zaèátku PRAVÉHO postranního sloupce');
@define('SITENAV_FOOTER',               'Zobraz navigaèní li¹tu v patièce stránky (pokud je v pøedchozí volbì vybráno "®ádná navigaèní li¹ta", nebude zobrazena nikdy bez ohledu na tuto volbu)');
@define('SITENAV_QUICKSEARCH',          'Zobrazit políèko rychlého vyhledávání v navigaèní li¹tì (zobrazuje se pouze v navigaèní li¹tì nad nebo pod obrázkem v záhlaví stránky. Je-li navigaèní li¹ta v postranních sloupcích, vyhledávací políèko není nikdy zobrazeno.)');
@define('SITENAV_TITLE',                'Nadpis pro navigaèní li¹tu/menu (pouze pokud je zobrazena na zaèátku postranního sloupce)');
@define('SITENAV_TITLE_TEXT',           'Hlavní menu');
@define('NAVLINK_AMOUNT',               'Zadejte poèet odkazù navigaèní li¹ty (ihned po zadání této volby kliknìte na "Ulo¾i" a obnovte stránku)');
@define('NAV_LINK_TEXT',                'Test odkazu');
@define('NAV_LINK_URL',                 'URL adresa odkazu');

// Next lines were translated on 2009/06/30
@define('SHOW_PAGINATION',              'Zobrazovat èísla stránek (stránkování)');

// Next lines were translated on 2011/01/08
@define('THEME_HEADER',                 'Hlavièka');