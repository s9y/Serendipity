<?php # lang_de.inc.php 1.0 2009-06-03 09:51:33 VladaAjgl $

/**
 *  @version 1.0
 *  @author Grischa Brockhaus <http://blog.brockha.us>
 *  DE-Revision: Revision of lang_de.inc.php
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/06/03
 */

@define('PLUGIN_KARMA_NAME', 'Karma');
@define('PLUGIN_KARMA_BLAHBLAH', 'Abstimmung über die Einträge');
@define('PLUGIN_KARMA_VOTETEXT', 'Ihre Bewertung dieses Artikels: ');
@define('PLUGIN_KARMA_VOTETEXT_NAME', 'Abstimmungsanfrage');
@define('PLUGIN_KARMA_VOTETEXT_NAME_BLAHBLAH', 'Anfrage, die dargestellt wird, wenn die Abstimmung textuell (ohne einen grafischen Balken) ausgeführt wird.  (Standard: \'' . PLUGIN_KARMA_VOTETEXT . '\')');
@define('PLUGIN_KARMA_RATE', 'Artikel bewerten: %s');
@define('PLUGIN_KARMA_VOTEPOINT_5', 'Sehr gut!');
@define('PLUGIN_KARMA_VOTEPOINT_5_NAME', 'Tooltip: Bestes Ergebnis');
@define('PLUGIN_KARMA_VOTEPOINT_5_BLAHBLAH', 'Tooltip Text, der dargestellt wird, wenn der Benutzer für "sehr gut" stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTEPOINT_5 . ')');
@define('PLUGIN_KARMA_VOTEPOINT_4', 'Gut');
@define('PLUGIN_KARMA_VOTEPOINT_4_NAME', 'Tooltip: Gutes Ergebnis');
@define('PLUGIN_KARMA_VOTEPOINT_4_BLAHBLAH', 'Tooltip Text, der dargestellt wird, wenn der Benutzer für "gut" stimmen möchte. (Standard. (Standard: ' . PLUGIN_KARMA_VOTEPOINT_4 . ')');
@define('PLUGIN_KARMA_VOTEPOINT_3', 'Neutral');
@define('PLUGIN_KARMA_VOTEPOINT_3_NAME', 'Tooltip: Neutrales Ergebnis');
@define('PLUGIN_KARMA_VOTEPOINT_3_BLAHBLAH', 'Tooltip Text, der dargestellt wird, wenn der Benutzer für "neutral" stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTEPOINT_3 . ')');
@define('PLUGIN_KARMA_VOTEPOINT_2', 'Uninteressant');
@define('PLUGIN_KARMA_VOTEPOINT_2_NAME', 'Tooltip: Uninteressantes Ergebnis');
@define('PLUGIN_KARMA_VOTEPOINT_2_BLAHBLAH', 'Tooltip Text, der dargestellt wird, wenn der Benutzer für "uninteressant" stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTEPOINT_2 . ')');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'Übel');
@define('PLUGIN_KARMA_VOTEPOINT_1_NAME', 'Tooltip: Schlechts Ergebnis');
@define('PLUGIN_KARMA_VOTEPOINT_1_BLAHBLAH', 'Tooltip Text, der dargestellt wird, wenn der Benutzer für "schlecht" stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTEPOINT_1 . ')');
@define('PLUGIN_KARMA_VOTETEXT_5', '+2');
@define('PLUGIN_KARMA_VOTETEXT_5_NAME', 'Benennung: Bestes Ergebnis');
@define('PLUGIN_KARMA_VOTETEXT_5_BLAHBLAH', 'Text, der dargestellt wird, wenn der Benutzer für "sehr gut" im Textmode stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTETEXT_5 . ')');
@define('PLUGIN_KARMA_VOTETEXT_4', '+1');
@define('PLUGIN_KARMA_VOTETEXT_4_NAME', 'Benennung: Gutes Ergebnis');
@define('PLUGIN_KARMA_VOTETEXT_4_BLAHBLAH', 'Text, der dargestellt wird, wenn der Benutzer für "gut" im Textmode stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTETEXT_4 . ')');
@define('PLUGIN_KARMA_VOTETEXT_3', '0');
@define('PLUGIN_KARMA_VOTETEXT_3_NAME', 'Benennung: Neutrales Ergebnis');
@define('PLUGIN_KARMA_VOTETEXT_3_BLAHBLAH', 'Text, der dargestellt wird, wenn der Benutzer für "neutral" im Textmode stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTETEXT_3 . ')');
@define('PLUGIN_KARMA_VOTETEXT_2', '-1');
@define('PLUGIN_KARMA_VOTETEXT_2_NAME', 'Benennung: Uninteressantes Ergebnis');
@define('PLUGIN_KARMA_VOTETEXT_2_BLAHBLAH', 'Text, der dargestellt wird, wenn der Benutzer für "uninteressant" im Textmode stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTETEXT_2 . ')');
@define('PLUGIN_KARMA_VOTETEXT_1', '-2');
@define('PLUGIN_KARMA_VOTETEXT_1_NAME', 'Benennung: Schlechtes Ergebnis');
@define('PLUGIN_KARMA_VOTETEXT_1_BLAHBLAH', 'Text, der dargestellt wird, wenn der Benutzer für "schlecht" im Textmode stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTETEXT_1 . ')');
@define('PLUGIN_KARMA_VOTED', 'Bewertung "%s" gespeichert.');
@define('PLUGIN_KARMA_VOTES', '%3$s Stimme(n)');
@define('PLUGIN_KARMA_INVALID', 'Bewertung ungültig oder manipuliert!');
@define('PLUGIN_KARMA_ALREADYVOTED', 'Bewertung bereits gespeichert.');
@define('PLUGIN_KARMA_NOCOOKIE', 'Der Browser muss Cookies unterstützen um eine Abstimmung zu ermöglichen.');
@define('PLUGIN_KARMA_CLOSED', 'Abstimmungszeitraum abgelaufen.');
@define('PLUGIN_KARMA_ENTRYTIME', 'Uneingeschränkter Abstimmungszeitraum nach Veröffentlichung');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'Wie lang (in Minuten) kann nach der Veröffentlichung eines Artikels eine Abstimmung ohne Wartezeit durchgeführt werden? Standard sind 1440 Minuten (ein Tag).');
@define('PLUGIN_KARMA_VOTINGTIME', 'Wartezeit zwischen Stimmabgaben');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Wartezeit (in Minuten), die nach einer Stimmabgabe vergehen muss bevor eine weitere Stimme angenommen wird. Diese Einschränkung gilt erst nach Überschreitung des "uneingeschränkten Abstimmungszeitraums". Standard: 5 Minuten, 0 bedeutet: Keine Wartezeit.');
@define('PLUGIN_KARMA_TIMEOUT', 'Wahlschutz: Ein anderer Besucher hat gerade abgestimmt. Bitte %s Minuten warten.');
@define('PLUGIN_KARMA_CURRENT', 'Derzeitige Beurteilung: %2$s, %3$s Stimme(n)');
@define('PLUGIN_KARMA_CURRENT_NAME', 'Text für aktuelle Bewertung');
@define('PLUGIN_KARMA_CURRENT_NAME_BLAHBLAH', 'Der Text, der die aktuelle Bewertung angibt (%2$s ist die Zahlenbewertung; %3$s ist die Anzahl der Stimmen) (Standard: ' . PLUGIN_KARMA_CURRENT . ')');
@define('PLUGIN_KARMA_EXTENDEDONLY', 'Nur erweiterte Artikel');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Abstimmung nur im erweiterten Artikel einblenden');
@define('PLUGIN_KARMA_MAXKARMA', 'Maximaler Abstimmungszeitraum');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Abstimmungen nur erlauben bis der Artikel X Tage alt ist (Standard: 7)');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES', 'Minimale Anzahl an Stimmen für Darstellung');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES_BLAHBLAH', 'Die Darstellung des Abstimmungsergebnisses wird so lange unterdrückt, bis die eingegebene Anzahl an Stimmen eingegangen ist. Wenn 0 eingestellt ist, wird das aktuelle Abstimmumgsergebnis immer sofort angezeigt.');
@define('PLUGIN_KARMA_LOGGING', 'Protokollieren');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Sollen Logfiles der Votes angelegt werden?');
@define('PLUGIN_KARMA_ACTIVE', 'Abstimmungen aktivieren?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'Sollen Abstimmungen möglich sein?');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT', 'Voting Bar Alignment');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT_BLAHBLAH', 'Alignment of voting bar in the entry footer.  Templates can override this setting with !important (Default: right)');
//--JAM: @define('PLUGIN_KARMA_ALIGNMENT_DETECT', 'from style');
@define('PLUGIN_KARMA_VISITS', 'Aufrufstatisik aktivieren?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH', 'Soll jeder Klick auf einen Artikel gezählt und dargestellt werden?');
@define('PLUGIN_KARMA_VISITSCOUNT', ' %4$s Klicks');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'Meistbesuchte Artikel');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Wenigstbesuchte Artikel');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Meistbewertete Artikel');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Wenigstbewertete Artikel');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Bestbewertete Artikel');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Schlechtstbewerte Artikel');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO', 'Besuche');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO', 'Stimmen');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'Punkte');

@define('PLUGIN_KARMA_STARRATING', 'Individuelle Abstimmung für diesen Eintrag aktivieren?');

@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS', 'Aufrufstatistik auch für eingeloggte Benutzer?');
@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH', 'Wenn diese Option eingeschaltet ist, dann werden auch die Besuche von eingeloggten Benutzern protokolliert.');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS', 'Minimale Besucheranzahl');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS_BLAHBLAH', 'Die Darstelung der Besucheranzahl wird so lange unterdrückt, bis die hier eingestellte Anzahl erreicht ist. Wenn 0 eingestellt ist, wird die Besucheranzahl immer angezeigt.');
@define('PLUGIN_KARMA_WORDRATING', 'Abstimmungswerte als Text darstellen?');
@define('PLUGIN_KARMA_WORDRATING_BLAHBLAH', 'Sollen Ergebnisse als Text oder als Zahlen dargestellt werden? (Standard: nein; Zahlen benutzen)');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE', 'Abstimmungsnachricht darstellen?');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE_BLAHBLAH', 'Den Abstimmungstext (oder derzeitigen Status) oberhalb des grafischen Abstimmungsbalken darstellen? (Kein Effekt bei textueller Abstimmung)');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR', 'Derzeitiges Abstimmungsergebnis darstellen?');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR_BLAHBLAH', 'Soll das derzeitige Ergebnis unterhalb des grafischen Abstimmungsbalken dargestellt werden? (Kein Effekt bei textueller Abstimmung)');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS', 'Besucherzäher darstellen?');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS_BLAHBLAH', 'Soll der Besucherzähler unterhalb des grafischen Abstimmungsbalken dargestellt werden? (Kein Effekt bei textueller Abstimmung)');
@define('PLUGIN_KARMA_PREVIEW_BG', 'Hintergrund der Vorschautabelle');
@define('PLUGIN_KARMA_PREVIEW_BG_BLAHBLAH', 'Hier kann eine CSS Klasse angegeben werden, der für das \'background\' Attribut in der Vorschau Tabelle benutzt werden soll. Dies hat nur Auswirkungen in der Vorschau der Admin Oberfläche, nicht in der normalen Blog Ansicht.');
@define('PLUGIN_KARMA_IMAGE', 'Abstimmungstyp');
@define('PLUGIN_KARMA_IMAGE_DESC', 'Wählen Sie eine Bilddatei (z.B. diamonds.png) für die Bild-basierte Abstimmung. Wählen Sie \'' . PLUGIN_KARMA_STATISTICS_POINTS_NO . '\' für rein textbasierte Abstimmungen.');
@define('PLUGIN_KARMA_NO_IMAGES', 'Es wurden keine Bilder in dem img/ Verzeichnis des Plugins gefunden!');
@define('PLUGIN_KARMA_IMAGE_RATING', '%1.2f von 5');
@define('PLUGIN_KARMA_IMAGE_INT_RATING', '%d von 5');
@define('PLUGIN_KARMA_IMAGE_NONE_RATING', 'keine');
@define('PLUGIN_KARMA_TAB_OPTIONS', 'Optionen');
@define('PLUGIN_KARMA_TAB_APPEARANCE', 'Darstellung');
@define('PLUGIN_KARMA_TAB_TEXT', 'Texte');

// Next lines were translated on 2009/06/03
@define('PLUGIN_KARMA_DISPLAY_LOG', 'Karma administrieren');
@define('PLUGIN_KARMA_REMOVED_POINTS', '%s Punkte für Artikel %s entfernt');
@define('PLUGIN_KARMA_APPROVED_POINTS', '%s Punkte für Artikel %s hinzugefügt');
@define('PLUGIN_KARMA_POINTS_ERROR', 'Fehler bei der Aktualisierung der Punkte für den Eintrag %s!');
@define('PLUGIN_KARMA_REMOVE_ERROR', 'Fehler beim Entfernen der Stimme für Eintrag %s! (Punkte wurden trotzdem aktualisiert)');
@define('PLUGIN_KARMA_UPDATE_ERROR', 'Bisher keine Stimme für Eintrag %s!');
@define('PLUGIN_KARMA_INVALID_INPUT', 'ungültige Eingabe!');
@define('PLUGIN_KARMA_DELETE_VOTES', 'Lösche ausgewählte Stimmen');
@define('PLUGIN_KARMA_APPROVE_VOTES', 'Bestätige ausgewählte Stimmen');

//New on ajax feature
@define('PLUGIN_KARMA_AJAX', 'AJAX Funktionalität');
@define('PLUGIN_KARMA_AJAX_BLAHBLAH', 'Soll die Stimmabgabe mittels asynchronem Javascript erfolgen? Wenn ja, wird die Bewertung im Hintergrund an den Server gesendet und das Ergebnis dargestellt, ohne dass die Seite neu geladen werden muss.');
@define('PLUGIN_KARMA_ALIGNMENT', 'Ausrichtung des Plugins');
@define('PLUGIN_KARMA_ALIGNMENT_BLAHBLAH', 'Soll das Plugin links, mittig oder rechts angezeigt werden?');