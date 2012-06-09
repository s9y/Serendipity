<?php # $Id$

/**
 *  @version 1.0
 *  @author Martin Matu¹ka <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2010/08/17
 *  Revision on 2010/08/17
 */

 // Colorsets
@define('THEME_COLORSET',               'Farebná sada');
@define('USER_STYLESHEET',              'Pou¾i» dodatoèný u¾ívateµský súbor so ¹týlmi css. U¾ívateµ musí tento súbor ruène vytvori» v prieèinku ¹ablóny bulletproof. Tento súbor musí ma» názov user.css a mô¾e by» pou¾itý na náhradu niektorých vybraných ¹týlov.');
// Layout
@define('LAYOUT_TYPE',                  'Vzhµad weblogu (B = Telo weblogu, S = Ståpec (boèný), CF = Najprv obsah)');
@define('LAYOUT_SBS',                   'Tri ståpce, S-B-S');
@define('LAYOUT_BSS',                   'Tri ståpce, B-S-S, CF');
@define('LAYOUT_SSB',                   'Tri ståpce, S-S-B');
@define('LAYOUT_SB',                    'Dva ståpce, S-B');
@define('LAYOUT_BS',                    'Dva ståpce, B-S, CF');
@define('LAYOUT_SC',                    'Jeden ståpec, boèný ståpec bod ním, CF');
@define('LAYOUT_SBF',                   'Dva ståpce, dva boèné ståpce - na boku a pod telom');
@define('LAYOUT_BSF',                   'Dva ståpce, dva boèné ståpce - na boku a pod telom, CF');
@define('JAVASCRIPT_COLUMNS',           'Vytvori» rovnako vysoké ståpce pomocou javascriptu (mierne spomalí zobrazovanie stránky).');
// Custom header
@define('BP_CUSTOM_HEADER',             'Vlastný obrázok v záhlaví stránky');
@define('BP_HEADER_IMAGE',              'Vybra» obrázok');
@define('BP_HEADER_TYPE',               'Opakovanie obrázku v záhlaví');
@define('BP_HEADER_BANNER',             'Banner (neopakova»)');
@define('BP_HEADER_HTILED',             'Vodorovné opakovanie');
@define('BP_HEADER_VTILED',             'Zvislé opakovanie');
@define('BP_HEADER_BTILED',             'Vodorovné aj zvislé opakovanie');
@define('BP_HEADER_POSHOR',             'Vodorovné zarovnanie');
@define('BP_HEADER_POSVER',             'Zvislé zarovnanie');
@define('BP_CENTER',                    'na stred');
@define('BP_TOP',                       'hore');
@define('BP_BOTTOM',                    'dole');
// Fahrner Image Replacement
@define('FIR_BTITLE',                   'Zobrazova» názov weblogu v záhlaví');
@define('FIR_BDESCR',                   'Zobrazova» popis (podnadpis) weblogu v záhlaví');
// Date format
@define('BP_DATE_FORMAT',               'Formát dátumu');
// Entry footer
@define('ENTRY_FOOTER_POS',             'Umiestnenie päty/záhlavia v èlánku (obsahujúce informácie o autorovi, dátume publikácie, zaradenia do kategórií; rozdelenie päty = kategórie èlánku nad, odstatné pod èlánkom)');
@define('BELOW_ENTRY',                  'Päta = pod èlánkom');
@define('BELOW_TITLE',                  'Záhlavie = pod nadpisom èlánku');
@define('SPLIT_FOOTER',                 'Rozdeli» pätu/záhlavie');
@define('FOOTER_AUTHOR',                'Zobrazi» v päte autora');
@define('FOOTER_CATEGORIES',            'Zobrazi» v päte kategórie');
@define('FOOTER_TIMESTAMP',             'Zobrazi» v päte èas zverejnenia');
@define('FOOTER_COMMENTS',              'Zobrazi» v päte poèet komentárov');
@define('FOOTER_TRACKBACKS',            'Zobrazi» v päte poèet odoziev');
@define('ALT_COMMTRACK',                'Pou¾ít alternatívne zobrazenie poètu komentárov a odoziev (napr. "®iadne komentáre" alebo "1 komentár" namiesto "Komentárov (0)" alebo "Komentárov (1)")');
@define('SHOW_ADDTHIS_WIDGET',          'Zobrazi» zálo¾ku AddThis (http://www.addthis.com) v päte èlánku');
@define('ADDTHIS_ACCOUNT',              'Èíslo úètu AddThis.com. Nie je vy¾adované, ale ak ho zadáte, umo¾ní vies» ¹tatistiku o èítanosti, ukladaní do zálo¾iek a zdieµaní obsahu Va¹ích stránok medzi èitateµmi.');
@define('SHOW_STICKY_ENTRY_FOOTER',     'Zobrazi» pä»u na stálych (prilepených) èlánkoch (vy¾aduje nain¹talovanie doplnku udalosti "Roz¹írené vlastnosti èlánkov")');
@define('SHOW_STICKY_ENTRY_HEADING',    'Zobrazi» nadpis na stálych (prilepených) èlánkoch (vy¾aduje nain¹talovanie doplnku udalostí "Roz¹írené vlastnosti èlánkov")');
// Page footer next page  and previous page links
@define('PREV_NEXT_STYLE',              'Zobrazi» pätu "ïal¹í/predchádzajúci príspevok" v tvare');
@define('PREV_NEXT_TEXT',               'Text');
@define('PREV_NEXT_TEXT_ICON',          'Text a ikona');
@define('PREV_NEXT_ICON',               'Ikona');
@define('SHOW_PAGINATION',              'Zobrazova» èísla stránok (stránkovanie)');
// coComment support
@define('COCOMMENT_ACTIVE',             'Vlo¾i» coComment (http://www.cocomment.com) do formulára komentárov');
// Counter code
@define('COUNTER_CODE',                 'Vlo¾i» kód poèítadla pøístupov alebo ¹tatistík webu');
@define('USE_COUNTER',                  'Pou¾í» vý¹¹ie zadaný kód poèítadla/¹tatistík?');
// Additional footer text
@define('FOOTER_TEXT',                  'Následujúcí text bude vlo¾ený do päty èlánkov');
@define('USE_FOOTER_TEXT',              'Vlo¾i» vý¹¹ie zadaný text do päty?');
//Sitenav
@define('SITENAV_POSITION',             'Poloha navigaènej li¹ty');
@define('SITENAV_NONE',                 '®iadna navigaèná li¹ta');
@define('SITENAV_ABOVE',                'Nad obrázkom v záhlaví stránky');
@define('SITENAV_BELOW',                'Pod obrázkom v záhlaví stránky');
@define('SITENAV_LEFT',                 'Na zaèiatku ¥AVÉHO boèného ståpca');
@define('SITENAV_RIGHT',                'Na zaèiatku PRAVÉHO boèného ståpca');
@define('SITENAV_FOOTER',               'Zobrazi» navigaènú li¹tu v päte stránky (ak je v predchádzajúcej volbe vybráné "®iadna navigaèná li¹ta", nebude zobrazená nikdy bez ohµadu na túto voµbu)');
@define('SITENAV_QUICKSEARCH',          'Zobrazi» pole rýchleho vyhµadávania v navigaènej li¹te (zobrazí sa iba v navigaènej li¹te nad alebo pod obrázkom v záhlaví stránky. Ak je navigaèná li¹ta v boèných ståpcoch, vyhµadávacie pole nebude zobrazené.)');
@define('SITENAV_TITLE',                'Nadpis pré navigaènú li¹tu/menu (iba ak je zobrazená na zaèiatku boèného ståpca)');
@define('SITENAV_TITLE_TEXT',           'Hlavné menu');
@define('NAVLINK_AMOUNT',               'Zadajte poèet odkazov navigaènej li¹ty (po zadaní tohto nastavenia kliknite na "Ulo¾i»" a obnovte stránku)');
@define('NAV_LINK_TEXT',                'Test odkazu');
@define('NAV_LINK_URL',                 'URL adresa odkazu');
