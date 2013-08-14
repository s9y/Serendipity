<?php #

/**
 *  @version 1.0
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/06/03
 */
 
@define('PLUGIN_REMOTERSS_TITLE', 'Fremder RSS/OPML-Blogroll Feed');
@define('PLUGIN_REMOTERSS_BLAHBLAH', 'Zeigt Einträge eines externen RSS/OPML-Feeds an (z.B. Blogroll)');
@define('PLUGIN_REMOTERSS_NUMBER', 'Anzahl der Einträge');
@define('PLUGIN_REMOTERSS_NUMBER_BLAHBLAH', 'Wieviele Einträge sollen angezeigt werden? (Standard: alle im Feed)');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE', 'Feed-Titel');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH', 'Titel der Feed-Anzeige in der Sidebar des Blogs');
@define('PLUGIN_REMOTERSS_RSSURI', 'RSS/OPML-URI');
@define('PLUGIN_REMOTERSS_RSSURI_BLAHBLAH', 'URI des RSS/OPML-Feeds, der angezeigt werden soll');
@define('PLUGIN_REMOTERSS_RSSTARGET', 'Link-Target');
@define('PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH', 'Target des Links zu einem der angezeigten RSS-Einträge (Standard: _blank)');
@define('PLUGIN_REMOTERSS_NOURI', 'Kein RSS/OPML-Feed gewählt');
@define('PLUGIN_REMOTERSS_CACHETIME', 'Wann wird der Feed aktualisiert?');
@define('PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH', 'Die Inhalte des fremden Feeds werden gecached. Sobald der Cache älter ist als X Sekunden wird er aktualisiert (Standard: 3 Stunden)');
@define('PLUGIN_REMOTERSS_FEEDTYPE', 'Typ des Feeds');
@define('PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH', 'Wählen Sie das Format des einzubindenden Feeds');
@define('PLUGIN_REMOTERSS_BULLETIMG', 'Bullet Image');
@define('PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH', 'Image to display before each headline.');
@define('PLUGIN_REMOTERSS_DISPLAYDATE', 'Display Date');
@define('PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH', 'Display the date below the headline?');

@define('PLUGIN_REMOTERSS_RSSLINK', 'RSS-Link verwenden?');
@define('PLUGIN_REMOTERSS_RSSLINK_DESC', 'Soll ein Hyperlink auf den im RSS-Feed angegebenen Link gesetzt werden?');
@define('PLUGIN_REMOTERSS_RSSFIELD', 'RSS Zielelement');
@define('PLUGIN_REMOTERSS_RSSFIELD_DESC', 'Welches Element des RSS-Feeds soll dargestellt werden? (z.B.: "title", "content:encoded", "description", ...)');
@define('PLUGIN_REMOTERSS_RSSESCAPE', 'HTML-Ausgabe escapen?');
@define('PLUGIN_REMOTERSS_RSSESCAPE_DESC', 'Wenn aktiviert, wird HTML in RSS-Feeds maskiert und "sicher" ausgegeben. Wenn diese Option deaktiviert ist, wird HTML in einem Feed interpretiert - dies stellt eine potentielle Gefahr dar, wenn der eingebundene Feed nicht ihrer ist!');

// Next lines were translated on 2009/06/03
@define('PLUGIN_REMOTERSS_TEMPLATE', 'Ausgabe Template welches für diesen Feed verwendet wird');
@define('PLUGIN_REMOTERSS_TEMPLATE_DESC', 'Hier kann eine Vorlage-Datei (Template) aus dem Plugin-Verzeichnis ausgewählt werden, um die Darstellung des Fees im Sidebar zu steuern. Sie können auch benutzerdefinierte Vorlage-Dateien im Plugin-Verzeichnis ablegen. Wenn eine Vorlage-Datei mit dem gleichen Namen in Ihrem eigenen Vorlageverzeichnis vorhanden ist, wird diese anstelle der Datei im Plugin-Verzeichnis verwendet. Wenn hier eine Vorlage abweichend zur Voreinstellung ausgewählt wird, wird automatisch Smarty aktiviert.');

