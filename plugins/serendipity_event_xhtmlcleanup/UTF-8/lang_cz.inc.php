<?php # lang_cz.inc.php 1381.1 2009-08-15 10:30:13 VladaAjgl $

/**
 *  @version 1381.1
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/05/06
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/15
 */

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', 'Oprava nejčastějších XHTML chyb');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'Plugin opravuje nejběžnější chyby XHTML jazyka. Pomáhá tak udržet výsledný kód XHTML kompatibilní podle standardů.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', 'Kódovat zpracovaná XML data?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'Tento plugin používá XML parsování pro zajištění validity XHTML kódu. Toto parsování může způsobit, že budou validní entity (znaky) převedeny na "unsescaped" entity (XHTML kódy). Proto plugin všechny entity znovu kóduje po zpracování textu. Vypněte tuto volbu, pokud pozorujete dvojité rekódování!');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', 'Čištění UTF-8 znaků?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'Pokud je zapnuto, HTML entity způsobené převedením znaků v kódování Unicode UTF-8 budou správně převedeny nazpět na znaky UTF-8 a nebudou zakódovány do podivných znaků v zobrazení stránky.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE', 'Vyčistit kód videí z youtube?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE_DESC', 'Pokud je zapnuto, pak jsou invalidní XHTML tagy generované youtube vyřezány z embed části. Prohlíčeč přes toto vyřezání zobrazí video správně.');