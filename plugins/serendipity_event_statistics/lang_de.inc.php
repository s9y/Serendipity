<?php #

/**
 *  @version 1.0
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/06/03
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statistiken');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Zeigt einen Link zu informativen Statistiken (inkl. Besucherzähler) in der Administrationsoberfläche an.');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statistik');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'Erster Eintrag');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Letzter Eintrag');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Insgesamt verfasste Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... davon öffentlich');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... davon Entwürfe');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Artikel pro Benutzer');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Vorhandene Kategorien');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'Kategorie(n)');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Verteilung der Artikel auf Kategorien');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'eingetragene(r) Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Hochgeladene Bilder');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'Bild(er)');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Verteilung der Bild-Dateitypen');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'vorhandene Datei(en)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Erhaltene Kommentare');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'Kommentar(e)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Top kommentierte Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Top Kommentatoren');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'Link');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Abonnenten');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'Abonnent(en)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Top abonnierte Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'eingetragene(r) Abonnent(en)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Erhaltene Trackbacks');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'Trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Top Trackback-Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'eingetragene(r) Trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Top Trackbacker');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'Durchschnittliche Kommentare pro Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'Durchschnittliche Trackbacks pro Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'Durchschnittliche Artikel pro Tag');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'Durchschnittliche Artikel pro Woche');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'Durchschnittliche Artikel pro Monat');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'Kommentare/Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'Trackbacks/Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'Artikel/Tag');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'Artikel/Woche');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'Artikel/Monat');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Menge der geschriebenen Zeichen');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'Zeichen');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Zeichen pro Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'Zeichen/Artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', 'Die %s längsten Artikel');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Anzahl Einträge');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'Wie viele Einträge sollen pro statistischem Wert angezeigt werden (Standard: 20)?');

        //Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Erweiterte Besucherstatistiken');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', 'Erweiterte Besucherstatistiken anzeigen (Standard: nein)?');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'Nein!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'Ja, am unteren Ende der Seite.');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'Ja, oben auf der Seite.');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL', 'Alles zeigen? (Standard: nein)');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL_DESC', 'Bei \'nein\' werden nur Besucherstatistiken angezeigt');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL1', 'Nein, alles außer dem Zähler verbergen.');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL2', 'Ja, alle Statistiken anzeigen!');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Anzahl der Besucher');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTODAY', 'Aufrufe heute');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTOTAL', 'Aufrufe gesamt');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Besucher heute');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Besucher gesamt');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'Die erweiterte Besucherstatistik hat seit folgendem Zeitpunkt Daten gesammelt:');
@define('PLUGIN_EVENT_STATISTICS_EXT_COUNTDESC','Die Zahl der Aufrufe kann sehr groß werden, liefert jedoch einen Wert bezüglich der einzelnen Seitenanfragen. Diese Zahl erhöht sich deshalb mit JEDEM Seitenaufruf sowie jeder Aktualisierung der Seite und kann damit NICHT als Besucherzähler verstanden werden.');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Letzte Besucher');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Top-Referrer');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'Bisher wurden keine Referrer registriert.');
@define('PLUGIN_EVENT_STATISTICS_EXT_DAYGRAPH', 'Aufrufe, auf den Tag bezogen');
@define('PLUGIN_EVENT_STATISTICS_EXT_MONTHGRAPH', 'Aufrufe, auf den Monat bezogen');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Erweiterte Besucherstatistik');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS1', 'Aktivieren, keine Robots zählen');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS2', 'Nein, Robots bitte mitzählen');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Robot-Zählung verhindern');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Bei \'ja\' werden keine Robots gezählt. Bei \'nein\' werden Robots mitgezählt. Bislang können über 25 Bots von der Zählung ausgeschlossen werden.');
@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Datum des letzten Artikels anzeigen');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Anzahl der Artikel anzeigen');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Anzahl der Kommentare anzeigen');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Besucher dieses Monats anzeigen');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Cache-Zeitlimit');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'Gibt an (in Minuten), wie lange die Statistik angezeigt wird, bevor sie aktualisiert wird. Ein höheres Zeitlimit führt zu besserer Leistung, stellt jedoch nicht sicher, dass die Statistiken immer aktuell sind.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Textformatierung');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Bitte %s als Platzhalter für die Zahl/den Text benutzen');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Letzter Artikel: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s Artikel wurden geschrieben');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s Kommentare wurden abgegeben');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s Besucher in diesem Monat');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Anzahl momentaner Besucher (inkl. ca. der letzten 15 Minuten) anzeigen');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s Besucher online');

// Next lines were translated on 2009/06/03
@define('PLUGIN_EVENT_STATISTICS_SHOW_DAYVISITORS', 'Besucher dieses Tages anzeigen');
@define('PLUGIN_EVENT_STATISTICS_SHOW_WEEKVISITORS', 'Besucher dieser Woche anzeigen');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DAYVISITORS', '%s Besucher heute');
@define('PLUGIN_EVENT_STATISTICS_TEXT_WEEKVISITORS', '%s Besucher in dieser Woche');

