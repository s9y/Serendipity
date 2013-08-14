<?php #

/**
 *  @version 1381.2
 *  @file lang_cs.inc.php 1381.2 2009-02-23 17:32:10 VladaAjgl
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/23
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/23
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statistiky');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Zobrazení statistik záznamů');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statistiky');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'První záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Poslední záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Celkem záznamů');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'záznamů');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... publikovaných');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... konceptů');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Záznamy podle uživatelů');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Kategorie');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'kategorií');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Rozdělení záznamů');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'záznamů');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Nahraných obrázků');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'obrázků');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Rozdělení obrázků podle typů');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'souborů');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Přijaté komentáře');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'komentářů');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Nejčastěji komentované záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Nejčastěji komentující čtenáři');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'www');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Odběratelé (RSS kanálu)');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'odběratelů');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Nejčastěji odebírané záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'odběratelů');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Přijaté odezvy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'odezev');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Nejčastěji sledované záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'odezev');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Nejčastější odezvy čtenářů');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'počet komentářů na záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'počet odezev na záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'počet záznamů za den');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'počet záznamů za týden');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'počet záznamů za měsíc');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'komentářů/záznamy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'odezev/záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'záznamů/den');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'záznamů/týden');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'záznamů/měsíc');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Celkový počet znaků');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'znaků');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Znaků na záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'znaků/záznam');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', '%s nejdelších záznamů');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Počet prvků');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'Kolik prvků vzít pro statistické vyhodnocení? (Default: 20)');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Rozšířené statistiky pro návtěvníky');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', 'Přidat rozšířené statistiky pro návštěvníky stránek? (Standardně: NE)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'NE!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'ANO, na konec stránky');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'ANO, na začátek stránky');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL', 'Ukázat všechno?');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL_DESC', 'Zobrazit všechny statistiky, i o uživatelích? (Standardně: NE)');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL1', 'NE, kromě počítadel všechno schovej.');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL2', 'ANO, ukaž všechny statistiky!');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Jednotlivá počítadla');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Návštěvníků dnes');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Návštěvníků celkem');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTODAY', 'Zobrazení dnes');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTOTAL', 'Zobrazení celkem');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'Ukládání statistik od');
@define('PLUGIN_EVENT_STATISTICS_EXT_COUNTDESC', 'Zobrazení se mohou vyšplhat do velkých hodnot, protože jsou zvýšena při KAŽDÉM načtení stránky. Není to číslo počtu lidí, kteří stránku prohlíželi. Je to ukazatel počtu zobrazení stránky.');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Poslední návštěvníci');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Top odkazovače');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'Žádné odkazy ještě nebyly zaznamenány.');
@define('PLUGIN_EVENT_STATISTICS_EXT_DAYGRAPH', 'Návštěvy podle dní');
@define('PLUGIN_EVENT_STATISTICS_EXT_MONTHGRAPH', 'Návštěvy podle měsíců');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Rozšířená statistika o uživatelích');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS1', 'Zapnout, nepočítej roboty');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS2', 'Vypnout, započítej i roboty');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Ochrana proti vyhledávacím robotům');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Nastav na \'Zapnout\' pokud do statistik nechceš započítávat vyhledávací roboty. nastav na \'Vypnout\' a roboti budou započítáni. V současné době filtruje 25 známých robotů.');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Zobraz datum posledního příspěvku');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Zobraz počet příspěvků');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Zobraz počet komentářů');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Zobraz návštěvníky v tomto měsíci');
@define('PLUGIN_EVENT_STATISTICS_SHOW_DAYVISITORS', 'Zobraz návštěvníky dnes');
@define('PLUGIN_EVENT_STATISTICS_SHOW_WEEKVISITORS', 'Zobraz návštěvníky tento týden');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Cache timeout');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'Jak dlouho mají být statistiky zobrazeny před znovunačtením? Nastavení této hodnoty na vysoký počet minut zvětší výkon, ale pokud bude hodnota příliš vysoká, možná nebude zobrazovat aktuální data.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Formátování text');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Použij symbol %s pro vložení čísla/textu');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Poslední příspěvek: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s napsaných příspěvků');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s komentářů bylo uděleno');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s návštěvník(ů) tento měsíc');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DAYVISITORS', '%s návštěvník(ů) dnes');
@define('PLUGIN_EVENT_STATISTICS_TEXT_WEEKVISITORS', '%s návštěvník(ů) tento týden');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Ukaž počet online návštěvníků (počítáno během posledních 15 minut)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s návštěvník(ů) online');

