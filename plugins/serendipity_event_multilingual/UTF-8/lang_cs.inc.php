<?php

/**
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/23
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/25
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2013/10/26
 */

//
//  serendipity_event_multilingual.php
//

@define('PLUGIN_EVENT_MULTILINGUAL_TITLE',              'Vízejazyčné záznamy');
@define('PLUGIN_EVENT_MULTILINGUAL_DESC',               'Umožňuje vytvořit příspěvek (záznam) ve více jazykových variantách. Obsahuje též fromulář pro výběr základního jazyka blogu.');
@define('PLUGIN_EVENT_MULTILINGUAL_NEEDTOSAVE',         'Příspěvek musí být uložen před tím, než můžete začít psát jeho verzi v cizím jazyce. Můžete příspěvek uložit též jako koncept.');
@define('PLUGIN_EVENT_MULTILINGUAL_CURRENT',            'Výběr jazyka pro úpravy: ');
@define('PLUGIN_EVENT_MULTILINGUAL_SWITCH',             'Jazyk');
@define('PLUGIN_EVENT_MULTILINGUAL_COPY',               'Nechávat obsah z předchozího jazyka');
@define('PLUGIN_EVENT_MULTILINGUAL_COPYDESC',           'Zachovává obsah polí z předešlého upravovaného jazyka při zvolení úpravy nové jazykové verze..');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE',              'Kam umístit odkaz na jiné jazykové verze?');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDFOOTER',    'Záhlaví příspěvku');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDSPECIAL',   '"multilingual_footer" pro volitelný výstup do šablony Smarty');

//
//  serendipity_plugin_multilingual.php
//

@define('PLUGIN_SIDEBAR_MULTILINGUAL_TITLE',        'Výběr jazyka');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_DESC',         'Povolit návštěvníkům měnit jazyk uživatelského rozhraní blogu');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_USERDESC',     'Můžete vybrat různé jazyky pro zobrazování uživatelského rozhraní blogu: ');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT',       'Potvrzovací tlačítko?');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT_DESC',  'Zobrazit potvrzovací tlačítko vedle políčka s výběrem jazyka?');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SIZE',         'Velikost fontu');

// Next lines were translated on 2009/08/25

@define('PLUGIN_EVENT_MULTILINGUAL_TAGTITLE',           'Překládání nadpisu příspěvku pomocí tagů');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGTITLE_DESC',      'Zapne možnost překládání nadpisu pomocí taug {{!<jazyk>}}<text>{{--}}. Also used for non-tag mode translated entry_title(s).');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES',         'Překládání příspěvků a nadpisů příspěvků pomocí tagů v textu');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES_DESC',    'Zapne možnost překládání příspěvků pomocí tagu {{!<jazyk>}}<text>{{--}}');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR',         'Překládání položek postranních sloupců pomocí tagů');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR_DESC',    'Zapne možnost překládání obsahu postranních sloupců pomocí tagu {{!<jazyk>}}<text>{{--}}');

// Next lines were translated on 2013/10/26
@define('PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH',        'Vynutit plné přepnutí jazyka?');
@define('PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH_DESC',   'Má se při vybrání jazykové verze jednotlivého příspěvku přepnout do zvoleného jazyka kompletně i celé rozhraní blogu?');

