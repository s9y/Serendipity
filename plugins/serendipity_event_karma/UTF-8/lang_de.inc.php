<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

        @define('PLUGIN_KARMA_NAME', 'Karma');
        @define('PLUGIN_KARMA_BLAHBLAH', 'Abstimmung über die Einträge');
        @define('PLUGIN_KARMA_VOTETEXT', 'Beurteilung dieses Artikels: ');
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
        @define('PLUGIN_KARMA_VOTEPOINT_1_NAME', 'Tooltip: Übles  Ergebnis');
        @define('PLUGIN_KARMA_VOTEPOINT_1_BLAHBLAH', 'Tooltip Text, der dargestellt wird, wenn der Benutzer für "übel" stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTEPOINT_1 . ')');
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
        @define('PLUGIN_KARMA_VOTETEXT_1_NAME', 'Benennung: Übles  Ergebnis');
        @define('PLUGIN_KARMA_VOTETEXT_1_BLAHBLAH', 'Text, der dargestellt wird, wenn der Benutzer für "übel" im Textmode stimmen möchte. (Standard: ' . PLUGIN_KARMA_VOTETEXT_1 . ')');
        @define('PLUGIN_KARMA_VOTED', 'Punktzahl "%s" gespeichert.');
        @define('PLUGIN_KARMA_VOTES', '%3$s Stimme(n)');
        @define('PLUGIN_KARMA_INVALID', 'Bewertung ungültig oder manipuliert!');
        @define('PLUGIN_KARMA_ALREADYVOTED', 'Bewertung bereits gespeichert.');
        @define('PLUGIN_KARMA_NOCOOKIE', 'Der Browser muss Cookies unterstützen um eine Abstimmung zu ermöglichen.');
        @define('PLUGIN_KARMA_CLOSED', 'Abstimmungszeitraum abgelaufen.');
        @define('PLUGIN_KARMA_ENTRYTIME', 'Abstimmungszeitraum nach Veröffentlichung eines Artikels');
        @define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'Wie lang (in Minuten) kann nach der Veröffentlichung eines Artikels ein uneingeschränkter Abstimmungszeitraum durchgeführt werden? Standard sind 1440 Minuten (ein Tag).');
        @define('PLUGIN_KARMA_VOTINGTIME', 'Abstimmungszeitraum');
        @define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Wartezeit (in Minuten), die nach einer Stimmabgabe vergehen muss bevor eine nächste Stimme angenommen wird. Diese Einschränkung gilt erst nach Überschreitung des obigen uneingeschränkten Abstimmungszeitraumes. Standard: 5 Minuten.');
        @define('PLUGIN_KARMA_TIMEOUT', 'Wahlschutz: Ein anderer Besucher hat gerade abgestimmt. Bitte %s Minuten warten.');
        @define('PLUGIN_KARMA_CURRENT', 'Derzeitige Beurteilung: %2$s, %3$s Stimme(n)');
        @define('PLUGIN_KARMA_EXTENDEDONLY', 'Nur erweiterte Artikel');
        @define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Karmavoting nur im erweiterten Artikel einblenden');
        @define('PLUGIN_KARMA_MAXKARMA', 'Maximaler Abstimmungszeitraum');
        @define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Abstimmungen nur erlauben bis der Artikel X Tage alt ist (Standard: 7)');
        @define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES', 'Minimale Anzahl an Stimmen für Darstellung');
        @define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES_BLAHBLAH', 'Die Darstellung des Abstimmungsergebnisses wird so lange unterdrückt, bis die eingegebene Anzahl an Stimmen eingegangen ist. Wenn 0 eingestellt ist, wird das aktuelle Abstimmumgsergebnis immer sofort angezeigt.');
        @define('PLUGIN_KARMA_LOGGING', 'Protokollieren');
        @define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Sollen Logfiles der Votes angelegt werden?');
        @define('PLUGIN_KARMA_ACTIVE', 'Karmavoting aktivieren?');
        @define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'Soll das Karmavoting verfügbar sein?');
        @define('PLUGIN_KARMA_ALIGNMENT', 'Ausrichtung der Abstimmungseingabe');
        @define('PLUGIN_KARMA_ALIGNMENT_BLAHBLAH', 'Hier kann die Ausrichtung im Footer Template überschrieben werden. (Standard: Ausrichtung im Template benutzen)');
        @define('PLUGIN_KARMA_ALIGNMENT_DETECT', 'aus Template');
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

        @define('PLUGIN_KARMA_STARRATING', 'Enable individual rating on this entry?');
        
        @define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS', 'Aufrufstatistik auch für eingeloggte Benutzer?');
        @define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH', 'Wenn diese Option eingeschaltet ist, dann werden auch die Besuche von eingeloggten Benutzern protokolliert.');
        @define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS', 'Minimale Besucheranzahl');
        @define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS_BLAHBLAH', 'Die Darstelung der Besucheranzahl wird so lange unterdrückt, bis die hier eingestellte Anzahl erreicht ist. Wenn 0 eingestellt ist, wird die Besucheranzahl immer angezeigt.');
        @define('PLUGIN_KARMA_PREVIEW_BG', 'Hintergrund der Vorschautabelle');
        @define('PLUGIN_KARMA_PREVIEW_BG_BLAHBLAH', 'Hier kann eine CSS Klasse angegeben werden, der für das \'background\' Attribut in der Vorschau Tabelle benutzt werden soll. Dies hat nur Auswirkungen in der Vorschau der Admin Oberfläche, nicht in der normalen Blog Ansicht.');
        @define('PLUGIN_KARMA_IMAGE', 'Typ der Voting Bar');
        @define('PLUGIN_KARMA_IMAGE_DESC', 'Wählen Sie eine Bilddatei (z.B. diamonds.png) für die Bild-basierte Abstimmung. Wählen Sie \'' . PLUGIN_KARMA_STATISTICS_POINTS_NO . '\' für rein textbasierte Abstimmungen.');
        @define('PLUGIN_KARMA_NO_IMAGES', 'Es wurden keine Bilder in dem img/ Verzeichnis des Plugins gefunden!');
        @define('PLUGIN_KARMA_IMAGE_RATING', '%1.2f von 5');
        @define('PLUGIN_KARMA_IMAGE_INT_RATING', '%d von 5');
@define('PLUGIN_KARMA_TAB_OPTIONS', 'Globales');
@define('PLUGIN_KARMA_TAB_APPEARANCE', 'Darstellung');
@define('PLUGIN_KARMA_TAB_TEXT', 'Texte');
