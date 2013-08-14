<?php #

/**
 *  @version 1.0
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/06/03
 */

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', 'Übliche XHTML-Fehler beseitigen');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'Korrigiert übliche Fehler, die beim XHTML-Markup der Einträge gemacht werden können');

// Next lines were translated on 2009/06/03
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', 'kodiere XML-geparste Daten?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'Dieses Plugin benutzt als Methode XML-Parsing (Syntaxanalyse) um validen XHTML auszugeben. Diese Methode kann dazu führen, dass schon vorher gülitg kodierte (also umgewandelte) Sonderzeichen (Entities) nun nicht mehr kodiert sind. Daher wird nach dem Parsen noch einmal kodiert. Schalten Sie diese diese Option AUS, wenn Sie dadurch doppelt kodierte Sonderzeichen erhalten.' );
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', 'säubere UTF-8 kodierte Sonderzeichen?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'Wenn aktiviert, werden HTML Sonderzeichen, die von UTF-8 Zeichen abstammen, in der Ausgabe konvertiert und nicht doppelt kodiert.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE', 'Youtube Player Quelltext säubern?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_YOUTUBE_DESC', 'Wenn aktiviert, werden die im XHTML ungültigen object-Tags des YouTube-Quelltextes aus dem embed-Teil entfernt. Die Wiedergabe des Videos im Browser funktioniert trotzdem.');

