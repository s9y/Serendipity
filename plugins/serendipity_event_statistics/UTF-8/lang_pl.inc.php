<?php #

/**
 *  @version 
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statystyki');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Dodaje w dziale wpisy link do ciekawych statystyk. Także do licznika wizyt.');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statystyki');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'Pierwszy wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Ostatni wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Wszystkich wpisów');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'wpisów');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... opublikowanych');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... szkiców');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Wpisy na użytkownika');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Kategorie');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'kategorie');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Rozkład wpisów');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'wpisów');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Uploadowane obrazki');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'obrazków');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Rozkład typów obrazków');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'plików');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Otrzymane komentarze');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'komentarze');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Najczęściej komentowane wpisy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Najczęściej komentujący');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'link');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Subskrybenci');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'subskrybentów');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Najczęściej subskrybowane wpisy');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'subskrybentów');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Otrzymane Ślady (Trackbacki)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'śladów');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Wpisy z największą ilością Śladów');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'śladów');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Najczęściej pozostawiający Ślady');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'średnia ilość komentarzy na wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'średnia ilość komentarzy na wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'średnia ilość wpisów na dzień');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'średnia ilość wpisów na tydzień');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'średnia ilość wpisów na miesiąc');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'komentarzy/wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'śladów/wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'wpisów/dzień');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'wpisów/tydzień');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'wpisów/miesiąc');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Ogólna ilość znaków we wpisach');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'znaków');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Znaków na wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'znaków/wpis');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', '%s najdłuższych wpisów');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Maksymalna ilość pozycji');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'Jak wiele pozycji wyświetlić dla każdej wartości ujętej w statystykach? (Standardowo: 20)');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Rozszerzone Statystyki Odwiedzających');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', 'Dodać Rozszerzone Statystyki Odwiedzających? (Standardowo: nie)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'Nie!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'Tak, na dole strony ze statystykami');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'Tak, na górze strony ze statystykami');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL', 'Ustaw na "Nie" by pokazywać tylko statystki odwiedzających');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL_DESC', 'Pokazywać wszystko? (Standardowo: Nie)');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL1', 'Nie, ukryj wszystko prócz licznika');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL2', 'Tak, pokazuj wszystkie statystyki');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Ilość odwiedzających');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Ilość odwiedzających dzisiaj');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Ogólna ilość odwiedzin');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTODAY', 'Trafień dzisiaj');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTOTAL', 'Wszystkiech trafień');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'Rozszerzone Statystyki Odwiedzających zbierają dane od');
@define('PLUGIN_EVENT_STATISTICS_EXT_COUNTDESC','Możesz ujrzeć sporą ilość trafień. Te dane przedstawiają tylko ilość wyświetleń stron. Są uaktualniane przy KAŻDEJ odsłonie strony lub jej odświeżeniu. To NIE jest licznik wejść.');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Ostatni odwiedzający');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Top Referrers');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'No referrers has yet been registered.');
@define('PLUGIN_EVENT_STATISTICS_EXT_DAYGRAPH', 'Wizyty w oparciu o dni miesiąca');
@define('PLUGIN_EVENT_STATISTICS_EXT_MONTHGRAPH', 'Wizyty w oparciu o miesięce');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Rozszerzone Statystyki Odwiedzających');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS1', 'Włącz, nie zliczaj botów');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS2', 'Wyłącz, zliczaj boty');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Ochrona przed zliczaniem botów');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Ustaw "Włącz" by roboty nie były zliczane. Ustaw "Wyłącz" by były zliczane także trafienia dokonywane przez boty. Obecnie ponad 25 botów jest blokowanych.');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Pokaż datę ostatniego wpisu');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Pokaż ilość wpisów');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Pokaż ilość komentarzy');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Pokaż ilość użytkowników w tym miesiącu');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Odświeżanie bufora (cache) statystyk');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'Jak długo mają być pokazywane statystyki zanim zostaną odświezone? Ustawienie wysokiej wartości tej opcji wpływa korzystnie na wydajnośc ale może nie odzwierciedlać aktualnych danych o ile wartość będzie zbyt wysoka.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Formatowanie tekstu');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Użyj %s jako miejsca wpisania numeru/tekstu');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Ostatni wpis: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s wpisów');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s komentarzy');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s odwiedzający(ch) w tym miesiącu');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Pokaż ilość aktualnie odwiedzających stronę (zbieraj dane z ostatnich 15 minut)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s odwiedzający(-ch) online');

