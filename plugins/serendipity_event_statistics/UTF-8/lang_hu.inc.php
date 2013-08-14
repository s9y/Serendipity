<?php #

/**
 *  @version  1797
 *  @file lang_en.inc.php 1797 2007-07-24 12:59:01Z garvinhicking
 *  @author Hrotkó Gábor <roti@al.pmmf.hu>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statisztika');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Az admin felületen, a bejegyzések panelban, statisztika hivatkozást hoz létre, ahol különféle statisztikákat láthasz, pl. látogatószámláló');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statisztika');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'Első bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Utolsó bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Összes bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... publikus');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... vázlat');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Bejegyzés felhasználónként');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Kategóriák');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'kategória');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Bejegyzések eloszlása');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Feltöltött képek');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'kép');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Képtípusok eloszlésa');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'fájl');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Fogadott hozzászólások');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'hozzászólás');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Legtöbb hozzászólással rendelkező bejegyzések');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Legtöbbször hozzászóló emberek');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'hivatkozás');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Feliratkozottak');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'feliratkozott');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Legtöbbször ezekre a bejegyzsére iratkoztak fel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'feliratkozott');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Fogadott visszahivatkozások');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'visszahivatkozás');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Legtöbb visszahivatkozással rendelkező bejegyzések');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'visszahivatkozás');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Legtöbb visszahivatkozást létrehozó emberek');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'átlagos hozzászólás bejegyzésenként');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'átlagos visszahivatkozás bejegyzésenként');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'átlagos bejegyzés naponta');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'átlagos bejegyzés hetente');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'átlagos bejegyzés havonta');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'hozzászólás/bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'visszahivatkozás/bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'bejegyzés/nap');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'bejegyzés/hét');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'bejegyzés/hónap');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Összes karakter száma');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'karakter');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Karakterek bejegyzésenként');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'karakter/bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', 'A %s leghosszabb bejegyzés');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Elemek maximális száma');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'Hány elemet mutassunk statisztikai elemenként? (alapértelmezett: 20)');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Részletes látogatói statisztika');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', 'Legyen részletes látogatói statisztika? (alapértelmezett: nem)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'Nem!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'Igen, az oldal alján');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'Igen, az oldal tetején');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL', 'Állítsd \'nem\'-re, hogy csak látogatói statisztika legyen');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL_DESC', 'Mutassunk mindent? (alapértelmezett: nem)');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL1', 'Nem, rejts el mindent, kivéve a számlálót.');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL2', 'Igen, mutass minden statisztikát!');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Különálló számlálók');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Látogató ma');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Látogató összesen');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTODAY', 'Látogatások száma ma');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTOTAL', 'Látogatások összesen');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'Statisztika gyűjtése innentől: ');
@define('PLUGIN_EVENT_STATISTICS_EXT_COUNTDESC','A látogatások száma iegn nagy is lehet, de csak az oldalak megtekintését jelöli. Ez minden oldal betöltésekor vagy frissítésekor növelődik. Ez a szám NEM egyenlő a látogatók számával.');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Legutóbbi látogatók');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Azoknak a helyeknek a listája, ahonnan legtöbbször ide ugrottak (hivatkozó)');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'Nem volt még regisztrált hivatkozó .');
@define('PLUGIN_EVENT_STATISTICS_EXT_DAYGRAPH', 'A látogatások napi lebontásúak');
@define('PLUGIN_EVENT_STATISTICS_EXT_MONTHGRAPH', 'A látogatások havi lebontásúak');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Részletes látogatói statisztika');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS1', 'Engedélyezve, ne számoljuk a robotokat');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS2', 'Tiltva, számoljuk a robotokat is');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Robot számolás elleni védelem');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Állítsd \'iegn\'-re, hogy ne számoljuk az oldalakat látogató robotokat. \'Nem\' esetén számoljuk az oldalt lekérő robotot is mint látogató. Jelenleg több mint 25 robot van tiltólistán.');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Mutassuk az utolsó bejegyzés dátumát');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Mutassuk a bejegyzések számát');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Mutassuk a hozzászólások számát');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Mutassuk a havi látogatók számát');
@define('PLUGIN_EVENT_STATISTICS_SHOW_DAYVISITORS', 'Mutassuk a mai látogatók számát');
@define('PLUGIN_EVENT_STATISTICS_SHOW_WEEKVISITORS', 'Mutassuk a heti látogatók számát');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'A gyorsítótár ennyi idő után frissül');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'Hány perc után frissüljön a statisztika? Ha ezt nagy számra állítod, akkor a teljesítmény nő, de nem tükrözi kellő gyorsasággal a statisztikai adatok frissességét.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Szöveg formátuma');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'A %s -t a szöveg/szám helyének jelölésére szolgál');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Utolsó bejegyzés: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s bejegyzés összesen');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s hozzászólás összesen');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s látogató ebben a hónapban');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DAYVISITORS', '%s látogató ma');
@define('PLUGIN_EVENT_STATISTICS_TEXT_WEEKVISITORS', '%s látogató ezen a héten');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Mutasd az aktuális látogatók számát (ez átlagban 15 percenként frissül)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s látogató van jelenleg');

