<?php #

/**
 *  @version 1381.1
 *  @file lang_cs.inc.php 1381.1 2009-02-14 16:07:47 VladaAjgl
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/23
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statistiky');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Zobrazení statistik záznamù');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statistiky');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'První záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Poslední záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Celkem záznamù');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'záznamù');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... publikovaných');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... konceptù');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Záznamy podle uživatelù');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Kategorie');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'kategorií');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Rozdìlení záznamù');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'záznamù');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Nahraných obrázkù');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'obrázkù');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Rozdìlení obrázkù podle typù');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'souborù');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Pøijaté komentáøe');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'komentáøù');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Nejèastìji komentované záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Nejèastìji komentující ètenáøi');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'www');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Odbìratelé (RSS kanálu)');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'odbìratelù');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Nejèastìji odebírané záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'odbìratelù');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Pøijaté odezvy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'odezev');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Nejèastìji sledované záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'odezev');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Nejèastìjší odezvy ètenáøù');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'poèet komentáøù na záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'poèet odezev na záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'poèet záznamù za den');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'poèet záznamù za týden');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'poèet záznamù za mìsíc');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'komentáøù/záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'odezev/záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'záznamù/den');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'záznamù/týden');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'záznamù/mìsíc');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Celkový poèet znakù');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'znakù');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Znakù na záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'znakù/záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', '%s nejdelších záznamù');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Poèet prvkù');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'Kolik prvkù vzít pro statistické vyhodnocení? (Default: 20)');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Rozšíøené statistiky pro návtìvníky');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', 'Pøidat rozšíøené statistiky pro návštìvníky stránek? (Standardnì: NE)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'NE!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'ANO, na konec stránky');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'ANO, na zaèátek stránky');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL', 'Ukázat všechno?');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL_DESC', 'Zobrazit všechny statistiky, i o uživatelích? (Standardnì: NE)');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL1', 'NE, kromì poèítadel všechno schovej.');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL2', 'ANO, ukaž všechny statistiky!');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Jednotlivá poèítadla');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Návštìvníkù dnes');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Návštìvníkù celkem');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTODAY', 'Zobrazení dnes');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTOTAL', 'Zobrazení celkem');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'Ukládání statistik od');
@define('PLUGIN_EVENT_STATISTICS_EXT_COUNTDESC', 'Zobrazení se mohou vyšplhat do velkých hodnot, protože jsou zvýšena pøi KAŽDÉM naètení stránky. Není to èíslo poètu lidí, kteøí stránku prohlíželi. Je to ukazatel poètu zobrazení stránky.');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Poslední návštìvníci');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Top odkazovaèe');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'Žádné odkazy ještì nebyly zaznamenány.');
@define('PLUGIN_EVENT_STATISTICS_EXT_DAYGRAPH', 'Návštìvy podle dní');
@define('PLUGIN_EVENT_STATISTICS_EXT_MONTHGRAPH', 'Návštìvy podle mìsícù');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Rozšíøená statistika o uživatelích');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS1', 'Zapnout, nepoèítej roboty');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS2', 'Vypnout, zapoèítej i roboty');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Ochrana proti vyhledávacím robotùm');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Nastav na \'Zapnout\' pokud do statistik nechceš zapoèítávat vyhledávací roboty. nastav na \'Vypnout\' a roboti budou zapoèítáni. V souèasné dobì filtruje 25 známých robotù.');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Zobraz datum posledního pøíspìvku');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Zobraz poèet pøíspìvkù');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Zobraz poèet komentáøù');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Zobraz návštìvníky v tomto mìsíci');
@define('PLUGIN_EVENT_STATISTICS_SHOW_DAYVISITORS', 'Zobraz návštìvníky dnes');
@define('PLUGIN_EVENT_STATISTICS_SHOW_WEEKVISITORS', 'Zobraz návštìvníky tento týden');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Cache timeout');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'Jak dlouho mají být statistiky zobrazeny pøed znovunaètením? Nastavení této hodnoty na vysoký poèet minut zvìtší výkon, ale pokud bude hodnota pøíliš vysoká, možná nebude zobrazovat aktuální data.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Formátování text');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Použij symbol %s pro vložení èísla/textu');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Poslední pøíspìvek: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s napsaných pøíspìvkù');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s komentáøù bylo udìleno');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s návštìvník(ù) tento mìsíc');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DAYVISITORS', '%s návštìvník(ù) dnes');
@define('PLUGIN_EVENT_STATISTICS_TEXT_WEEKVISITORS', '%s návštìvník(ù) tento týden');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Ukaž poèet online návštìvníkù (poèítáno bìhem posledních 15 minut)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s návštìvník(ù) online');

