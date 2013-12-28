<?php

/**
 *  @file lang_cz.inc.php 1381.1 2009-08-15 10:30:13 VladaAjgl
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/05/06
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/15
 */

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', 'Oprava nejèastìj¹ích XHTML chyb');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'Plugin opravuje nejbì¾nìj¹í chyby XHTML jazyka. Pomáhá tak udr¾et výsledný kód XHTML kompatibilní podle standardù.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', 'Kódovat zpracovaná XML data?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'Tento plugin pou¾ívá XML parsování pro zaji¹tìní validity XHTML kódu. Toto parsování mù¾e zpùsobit, ¾e budou validní entity (znaky) pøevedeny na "unsescaped" entity (XHTML kódy). Proto plugin v¹echny entity znovu kóduje po zpracování textu. Vypnìte tuto volbu, pokud pozorujete dvojité rekódování!');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', 'Èi¹tìní UTF-8 znakù?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'Pokud je zapnuto, HTML entity zpùsobené pøevedením znakù v kódování Unicode UTF-8 budou správnì pøevedeny nazpìt na znaky UTF-8 a nebudou zakódovány do podivných znakù v zobrazení stránky.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE', 'Vyèistit kód videí z youtube?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE_DESC', 'Pokud je zapnuto, pak jsou invalidní XHTML tagy generované youtube vyøezány z embed èásti. Prohlíèeè pøes toto vyøezání zobrazí video správnì.');

