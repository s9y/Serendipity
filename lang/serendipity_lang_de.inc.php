<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) Jannis Hermanns, Garvin Hicking and others
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'de_DE.ISO-8859-1, de_DE.ISO8859-1, german, de_DE, de_DE@euro, de');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'de');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'Vorschau');
@define('DATE', 'Datum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Aussehen');
@define('LOGIN', 'Login');
@define('LOGOUT', 'Abmelden');
@define('LOGGEDOUT', 'Abgemeldet.');
@define('CREATE', 'Erstellen');
@define('BACK', 'Zur�ck');
@define('FORWARD', 'Vorw�rts');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Das Neueste ...');
@define('OLDER', '�lteres ...');
@define('DONE', 'Fertig');
@define('TITLE', 'Titel');
@define('DESCRIPTION', 'Beschreibung');
@define('PLACEMENT', 'Platzierung');
@define('DELETE', 'L�schen');
@define('SAVE', 'Speichern');
@define('UP', 'HOCH');
@define('DOWN', 'RUNTER');
@define('PREVIOUS', 'Zur�ck');
@define('NEXT', 'Weiter');
@define('ENTRIES', 'Eintr�ge');
@define('CATEGORIES', 'Kategorien');
@define('NAME', 'Name');
@define('EMAIL', 'E-Mail');
@define('HOMEPAGE', 'Homepage');
@define('COMMENT', 'Kommentar');
@define('VIEW', 'Anzeigen');
@define('HIDE', 'Ausblenden');
@define('WEEK', 'Woche');
@define('WEEKS', 'Wochen');
@define('MONTHS', 'Monate');
@define('DAYS', 'Tage');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Erfolgreich beendet');
@define('COMMENTS', 'Kommentare');
@define('ADD_COMMENT', 'Kommentar schreiben');
@define('NO_COMMENTS', 'Noch keine Kommentare');
@define('POSTED_BY', 'Geschrieben von');
@define('ON', 'am');
@define('NO_CATEGORY', 'Keine Kategorie');
@define('CATEGORY', 'Kategorie');
@define('EDIT', 'Bearbeiten');
@define('GO', 'Los!');
@define('YES', 'Ja');
@define('NO', 'Nein');
@define('NOT_REALLY', 'Nicht wirklich ...');
@define('DUMP_IT', 'Hinfort damit!');
@define('IN', 'in');
@define('AT', 'um');
@define('LEFT', 'links');
@define('RIGHT', 'rechts');
@define('CENTER', 'mitte');
@define('ARCHIVES', 'Archive');
@define('SUBSCRIBE', 'Abonnieren');
@define('UNSUBSCRIBE', 'Abbestellen');
@define('QUICKSEARCH', 'Suche');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Keine Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'Keine Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Quelle');
@define('EXCERPT', 'Auszug');
@define('TRACKED', 'Aufgenommen');
@define('USER', 'Benutzer');
@define('USERNAME', 'Benutzername');
@define('PASSWORD', 'Passwort');
@define('HIDDEN', 'versteckt');
@define('IMAGE', 'Bild');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Artikel');
@define('BLOG', 'Blog');
@define('VERSION', 'version');
@define('INSTALL', 'Installieren');
@define('REPLY', 'Antwort');
@define('SUBSCRIPTIONS', 'Abonnements');
@define('SUBSCRIBED', 'Abonniert');
@define('SUBSCRIBED_AT', 'Abonniert am:');
@define('ERROR', 'Fehler');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', '�bersicht');
@define('MORE', 'Mehr');
@define('FORCE', 'Erzwingen');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administration');
@define('ADMIN_FRONTPAGE', 'Startseite');
@define('QUOTE', 'Zitat');
@define('NONE', 'keine');
@define('GROUP', 'Gruppe');
@define('AUTHORS', 'Autoren');
@define('UPGRADE', 'Aktualisieren');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Verschieben');
@define('MOVE_UP', 'Nach oben');
@define('MOVE_DOWN', 'Nach unten');
@define('ALL_AUTHORS', 'Alle Autoren');
@define('PREVIOUS_PAGE', 'vorherige Seite');
@define('NEXT_PAGE', 'n�chste Seite');
@define('FIRST_PAGE', 'Erste Seite');
@define('LAST_PAGE', 'Letzte Seite');
@define('ALL_CATEGORIES', 'Alle Kategorien');
@define('LAST_UPDATED', 'Zuletzt aktualisiert');
@define('IP_ADDRESS', 'IP-Adresse');
@define('CHARSET', 'Zeichensatz');
@define('REFERER', 'Referrer');
@define('APPROVE', 'Bewilligen');
@define('NOT_FOUND', 'Nicht gefunden');
@define('WRITABLE', 'Beschreibbar');
@define('NOT_WRITABLE', 'Nicht beschreibbar');
@define('WELCOME_BACK', 'Willkommen zur�ck,');
@define('USE_DEFAULT', 'Standard');
@define('SORT_BY', 'Sortieren nach');
@define('SORT_ORDER', 'Sortierung');
@define('SORT_ORDER_ASC', 'Aufsteigend');
@define('SORT_ORDER_DESC', 'Absteigend');
@define('FILTERS', 'Filter');
@define('RESET_FILTERS', 'Filter entfernen');
@define('TOGGLE_ALL', 'Alle Optionen ein-/ausblenden');
@define('TOGGLE_OPTION', 'Option ein-/ausblenden');
@define('IN_REPLY_TO', 'Antwort zu');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Verzeichnis');
@define('BACK_TO_BLOG', 'Zur�ck zum Blog');
@define('HTML_NUGGET', 'HTML-Klotz');
@define('TITLE_FOR_NUGGET', 'Titel f�r den Klotz');
@define('COMMENT_ADDED', 'Kommentar wurde hinzugef�gt. ');
@define('ENTRIES_FOR', 'Eintr�ge f�r %s');
@define('NO_ENTRIES_TO_PRINT', 'Keine Eintr�ge vorhanden');
@define('COMMENT_DELETE_CONFIRM', 'Soll der Kommentar #%d von %s wirklich gel�scht werden?');
@define('DELETE_SURE', 'Soll #%s permanent gel�scht werden?');
@define('MEDIA_FULLSIZE', 'Vollbild');
@define('SIDEBAR_PLUGIN', 'Seitenleisten-Plugin');
@define('EVENT_PLUGIN', 'Ereignis-Plugin');
@define('PLUGIN_ITEM_DISPLAY', 'Wo soll dieses Plugin angezeigt werden?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Nur Artikel-Detailansicht');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Nur Artikel�bersicht');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '�berall');
@define('DIRECTORY_WRITE_ERROR', 'Keine Schreibrechte f�r Verzeichnis %s. Bitte korrigieren');
@define('FILE_WRITE_ERROR', 'Datei \'%s\' kann nicht geschrieben werden.');
@define('INCLUDE_ERROR', 'Serendipity Fehler: Kann Datei \'%s\' nicht einbinden - wird beendet.');
@define('DO_MARKUP', 'Textformatierung(en) durchf�hren');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Datumsformat');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Das Datumsformat des Eintrages, mithilfe von PHPs strftime() Variablen. (Standard: "%s")');
@define('APPLY_MARKUP_TO', 'Textformatierung auf %s anwenden');
@define('XML_IMAGE_TO_DISPLAY', 'XML-Button');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Bilddatei, um ein Icon f�r XML-Feeds darzustellen. F�r das Standardbild leer lassen, oder \'none\' zum Deaktivieren.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Abonnement Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'Die email-Abonnementsseite ist mit diesem Icon verlinkt. F�r das Standardbild leer lassen, oder \'none\' zum Deaktivieren.');
@define('DELETING_FILE', 'L�sche Datei \'%s\' ...');
@define('SETTINGS_SAVED_AT', 'Die neuen Einstellungen wurden um %s gespeichert.');
@define('INVERT_SELECTIONS', 'Auswahl umkehren');

@define('PERSONAL_SETTINGS', 'Eigene Einstellungen');
@define('DO_MARKUP_DESCRIPTION', 'Textformatierung(en) durchf�hren, wie z.B. Smilies, Schnellformatierung via *, /, _, ... Wenn deaktiviert, wird der Inhalt 1:1 ausgegeben und jegliche HTML-Formatierung beibehalten. Wenn diese Option aktiviert ist, k�nnen andere Plugins den Inhalt des Klotzes modifizieren (falls ben�tigt).');
@define('BASE_DIRECTORY', 'Stammverzeichnis');
@define('PERM_READ', 'Leserechte');
@define('PERM_WRITE', 'Schreibrechte');
@define('PERM_DENIED', 'Zugriff verboten.');
@define('CURRENT_AUTHOR', 'Derzeitiger Autor');
@define('PLUGIN_ACTIVE', 'Aktiv');
@define('PLUGIN_INACTIVE', 'Inaktiv');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'F�gen Sie diesen Link als Lesezeichen/Favoriten hinzu. Dann k�nnen Sie dieses Lesezeichen auf jeder beliebigen Seite benutzen um so sofort in ihr Serendipity-Blog zu gelangen.');
@define('SET_TO_MODERATED', 'Moderieren');
@define('TOGGLE_SELECT', 'Zu Auswahl hinzuf�gen');
@define('ENTRY_METADATA', 'Eintrags-Metadaten');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity-Installation');
@define('WELCOME_TO_INSTALLATION', 'Willkommen zur Installation von Serendipity!');
@define('FIRST_WE_TAKE_A_LOOK', 'Zuerst wird eine Systemdiagnose durchgef�hrt, um etwaigen Inkompatibilit�ten oder fehlenden Modulen vorzubeugen.');
@define('ERRORS_ARE_DISPLAYED_IN', 'Fehler werden in %s, Empfehlungen in %s und erfolgreiche Meldungen in %s dargestellt.');
@define('RED', 'rot');
@define('YELLOW', 'gelb');
@define('GREEN', 'gr�n');
@define('PRE_INSTALLATION_REPORT', 'Systemdiagnose von Serendipity v.%s');
@define('INTEGRITY', 'Installation pr�fen');
@define('PHP_INSTALLATION', 'PHP-Installation');
@define('INSTALLER_KEY', 'Schl�ssel');
@define('INSTALLER_VALUE', 'Wert');
@define('OPERATING_SYSTEM', 'Betriebssystem');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini Konfiguration');
@define('RECOMMENDED', 'Empfohlen');
@define('ACTUAL', 'Vorhanden');
@define('PERMISSIONS', 'Rechte');
@define('INSTALLER_CLI_TOOLS', 'Serverseitige Kommandozeilen-Tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI-Tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Ausf�hrbar?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Zugriffsrechte k�nnen durch folgenden Shell-Befehl (oder auch mittels FTP-Client) ge�ndert werden: `<em>%s</em>` mit dem Namen des nicht beschreibbaren Verzeichnisses.');
@define('PROBLEM_DIAGNOSTIC', 'Da ein Fehler bei der Systemdiagnose auftrat, muss dieser erst behoben werden, bevor die Installation fortgesetzt werden kann.');
@define('SELECT_INSTALLATION_TYPE', 'Bitte die Installationsart w�hlen');
@define('RECHECK_INSTALLATION', 'Installation erneut �berpr�fen');
@define('SIMPLE_INSTALLATION', 'Einfache Installation');
@define('EXPERT_INSTALLATION', 'Fortgeschrittene Installation');
@define('COMPLETE_INSTALLATION', 'Vollst�ndige Installation');
@define('WONT_INSTALL_DB_AGAIN', 'werde Datenbank nicht erneut erzeugen');
@define('THEY_DO', 'Positiv');
@define('THEY_DONT', 'Negativ');
@define('CHECK_DATABASE_EXISTS', 'Pr�fe, ob Datenbank und Tabellen bereits bestehen ...');
@define('CREATE_DATABASE', 'Richte Datenbank ein ...');
@define('ATTEMPT_WRITE_FILE', 'Versuche, die Datei \'%s\' zu erstellen...');
@define('CREATING_PRIMARY_AUTHOR', 'Erstelle Hauptbenutzer \'%s\' ...');
@define('SETTING_DEFAULT_TEMPLATE', 'Setze Standard-Theme ...');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installiere Standard-Plugins ...');
@define('SERENDIPITY_INSTALLED', 'Serendipity wurde erfolgreich installiert!');
@define('VISIT_BLOG_HERE', 'Besuchen Sie Ihr neues Blog hier');
@define('THANK_YOU_FOR_CHOOSING', 'Danke, dass Sie Serendipity gew�hlt haben.');
@define('ERROR_DETECTED_IN_INSTALL', 'Bei der Installation trat ein Fehler auf');
@define('INSTALL_DBPREFIX_INVALID', 'Der Datenbank-Tabellenpr�fix darf nicht leer sein und darf nur Zahlen, Nummern und den Unterstrich enthalten.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Betrieben mit Serendipity %s und PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Redakteur');
@define('USERLEVEL_CHIEF_DESC', 'Chefredakteur');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Ersetzen Sie \'www\' durch den User, als der der Webserver l�uft. (z.B. \'nobody\')');
@define('INSTALL_PASSWORD_INVALID', 'Die eingebenen Administrator-Passw�rter stimmen nicht �berein.');
@define('DIRECTORY_CREATE_ERROR', 'Verzeichnis %s existiert nicht und konnte nicht erstellt werden. Bitte legen Sie es manuell an.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; f�hren Sie <i>%s %s</i> aus!');
@define('CANT_EXECUTE_BINARY', 'Kann die Datei \'%s\' nicht ausf�hren');
@define('FILE_CREATE_YOURSELF', ' Bitte die Datei manuell anlegen oder Dateirechte korrigieren.');
@define('COPY_CODE_BELOW', '<br />* Kopieren Sie den folgenden Code in die Datei \'%s\' des Verzeichnisses \'%s\':<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Danach aktualisieren Sie bitte diese Seite in Ihrem Browser.');
@define('ERROR_TEMPLATE_FILE', 'Die Template-Datei konnte nicht ge�ffnet werden. Bitte die Serendipity-Version aktualisieren!');
@define('HTACCESS_ERROR', 'Um die Webserver-Konfiguration zu testen ben�tigt Serendipity die M�glichkeit, die Datei ".htaccess" zu erstellen. Dies war aufgrund von Rechteproblemen nicht m�glich. Bitte passen Sie die Rechte wie folgt an: <br />&nbsp;&nbsp;%s<br />und laden Sie diese Seite neu.');
@define('EMPTY_SETTING', 'Sie haben f�r "%s" keinen g�ltigen Wert angegeben!');
@define('NOT_WRITABLE_SPARTACUS', ' (Nur notwendig wenn Spartacus zur Plugin-Installation �ber das Internet genutzt werden soll)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity hat entdeckt, dass derzeit Version %s verwendet wird. Jedoch wurde Version %s installiert, daher m�ssen Sie die <a href="%s">Installation aktualisieren</a>!');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Willkommen beim Serendipity Aktualisierungs-Agenten');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Ich m�chte Ihnen gerne beim Aktualisieren der Serendipity %s Installation helfen.');
@define('SERENDIPITY_UPGRADER_WHY', 'Diese Seite erscheint, da gerade Serendipity %s installiert wurde, aber die Datenbank noch nicht an diese Version angepasst wurde.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Datenbank-Aktualisierungen (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Die folgenden SQL-Dateien wurden gefunden und m�ssen nun ausgef�hrt werden, bevor Serendipity wieder wie gewohnt funktioniert.');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Versionsabh�ngige Funktionen');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Keine versionsabh�ngigen Funktionen gefunden');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Soll ich die aufgef�hrten Funktionen ausf�hren?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nein, das werde ich manuell erledigen');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ja, bitte ausf�hren');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Es m�ssen keine Aktualisierungen vorgenommen werden.');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity wurde an die neue Version angepasst!');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Sie haben den automatischen Aktualisierungsvorgang ignoriert. Bitte stellen Sie sicher, dass die Datenbank anhand der SQL-Dateien aktualisiert wird und die geplanten Funktionen aufgerufen werden!');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Die Serendipity-Installation ist nun auf die Version %s aktualisiert!');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Zur�ck zum %sBlog%s');
@define('ADMIN_ENTRIES', 'Eintr�ge');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Verbindung zu MySQL-Datenbank \'%s\' fehlgeschlagen.');
@define('COULDNT_SELECT_DB', 'Datenbank \'%s\' konnte nicht ausgew�hlt werden.');
@define('COULDNT_SELECT_USER_INFO', 'Die Benutzerinformationen von %s konnten nicht gelesen werden.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Die Kategorien von %s konnten nicht gelesen werden.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Die Eintr�ge von %s konnten nicht gelesen werden.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Die Kommentare von %s konnten nicht gelesen werden.');
@define('MYSQL_REQUIRED', 'Die MySQL-Erweiterung muss installiert sein, damit diese Aktion durchgef�hrt werden kann.');
@define('CREATE_AUTHOR', 'Erstelle Autoren \'%s\'.');
@define('CREATE_CATEGORY', 'Erstelle Kategorie \'%s\'.');
@define('MT_DATA_FILE', 'Movable-Type-Datens�tze');
@define('INSTALL_DBPORT', 'Datenbank-Port');
@define('INSTALL_DBPORT_DESC', 'Der Port, der verwendet wird, um zum Datenbankserver zu verbinden');
@define('IMPORT_PLEASE_ENTER', 'Bitte die folgenden Daten eintragen');
@define('IMPORT_NOW', 'Jetzt importieren!');
@define('IMPORT_STARTING', 'Starte Import-Vorgang ...');
@define('IMPORT_FAILED', 'Import fehlgeschlagen');
@define('IMPORT_DONE', 'Import erfolgreich abgeschlossen!');
@define('IMPORT_WEBLOG_APP', 'Weblog-Software');
@define('IMPORT_NOTES', 'Hinweis');
@define('IMPORT_STATUS', 'Status nach dem Importieren');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS Import, ben�tigt PHP5 und kann viel RAM/Speicher ben�tigen.');
@define('RSS_IMPORT_BODYONLY', 'F�ge den gesamten importierten Text in das einzelne "Text"-Feld ein. Verhindert die Aufteilung in den "Erweiterten Eintrag"-Bereich.');
@define('IMPORT_GENERIC_RSS', 'Allgemeiner RSS-Import');
@define('ACTIVATE_AUTODISCOVERY', 'Trackbacks an erkannte Links im Eintrag senden');
@define('RSS_IMPORT_CATEGORY', 'Diese Kategorie f�r nicht zugeordnete importierte Eintr�ge verwenden');
@define('IMPORT_WP_PAGES', 'Auch attachments und staticpages als normale Blog-Eintr�ge importieren?');
@define('DOCUMENT_NOT_FOUND', 'Das Dokument %s wurde nicht gefunden.');
@define('CONVERT_HTMLENTITIES', 'Soll versucht werden, HTML-Instanzen automatisch zu konvertieren?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Verwaltungsoberfl�che');
@define('WRONG_USERNAME_OR_PASSWORD', 'Das Passwort oder der Username war falsch. Bitte wiederholen Sie die Eingabe.');
@define('PLEASE_ENTER_CREDENTIALS', 'Bitte geben Sie die Zugangsdaten ein.');
@define('AUTOMATIC_LOGIN', 'Daten speichern');
@define('MAIN_MENU', 'Hauptmen�');
@define('MENU_PERSONAL', 'Pers�nliches Men�');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Aktivit�t');
@define('MENU_SETTINGS', 'Einstellungen');
@define('MENU_TEMPLATES', 'Themes');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Benutzer');
@define('MENU_GROUPS', 'Gruppen');
@define('MENU_MAINTENANCE', 'Wartung');
@define('MEDIA', 'Mediendatenbank');
@define('MEDIA_LIBRARY', 'Mediendatenbank');
@define('ADD_MEDIA', 'Mediendaten hinzuf�gen');
@define('MANAGE_DIRECTORIES', 'Verzeichnisse verwalten');
@define('CONFIGURATION', 'Konfiguration');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'Neue stabile Serendipity-Version verf�gbar: ');
@define('UPDATE_FAILMSG', 'Update-Check f�r neue Serendipity-Version fehlgeschlagen. Das kann passieren wenn die URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE nicht erreichbar ist, der Server ausgehende Verbindungen verhindert oder es andere Verbindungsprobleme gibt.');
@define('FURTHER_LINKS', 'Weitere Links');
@define('UPDATE_FAILACTION', 'Automatischen Update-Check deaktivieren');
@define('DASHBOARD_ENTRIES', 'In Vorbereitung');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Dokumentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Offizielles Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Diesen Eintrag jetzt ver�ffentlichen (setzt aktuelle Zeit)');
@define('ENTRY_PUBLISHED', 'Eintrag #%s ver�ffentlicht');
@define('PUBLISH_ERROR', 'Fehler bei der Ver�ffentlichung:');
@define('PUBLISHED', 'Ver�ffentlicht');
@define('JS_FAILURE', 'Die Javascript-Bibliothek von Serendipity konnte nicht geladen werden. Das kann aufgrund von PHP- oder Pluginfehlern, eventuell auch aufgrund eines zerst�rten Browsercaches vorkommen. Um die genaue Fehlermeldung zu sehen, �ffnen Sie bitte <a href="%1$s">%1$s</a> von Hand im Browser und suchen nach Fehlermeldungen.');
@define('ENTRY_PUBLISHED_FUTURE', 'Dieser Artikel wurde noch nicht ver�ffentlicht.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Webseiten');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lokale Dokumentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Versionsgeschichte');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Seitenleisten-Plugins');
@define('EVENT_PLUGINS', 'Ereignis-Plugins');
@define('CONFIGURE_PLUGINS', 'Plugins verwalten');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin ist bereits installiert und unterst�tzt die Mehrfachinstallation ("stackable") nicht.');
@define('UNMET_REQUIREMENTS', 'Bedingung nicht erf�llt: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Seitenleisten-Plugin installieren');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Ereignis-Plugin installieren');
@define('UPGRADE_TO_VERSION', 'Aktualisierbar auf Version %s.');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Hier klicken, um %s zu installieren');
@define('ALREADY_INSTALLED', 'Bereits installiert');
@define('PLUGIN_AVAILABLE_COUNT', 'Gesamt: %d Plugins.');
@define('NO_UPDATES', 'Keine Plugin-Updates verf�gbar.');
@define('PLUGIN_ALL_UPDATED', 'Alle Plugins aktualisiert');
@define('PLUGIN_LINK_SPARTACUS', 'Weitere Informationen');
@define('PLUGIN_SOURCE_BUNDLED', 'mitgeliefertes Plugin');
@define('PLUGIN_SOURCE_LOCAL', 'lokal installiert');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Eintr�ge bearbeiten');
@define('EDIT_ENTRY', 'Eintrag bearbeiten');
@define('ENTRY_STATUS', 'Eintragsstatus');
@define('DRAFT', 'Entwurf');
@define('PUBLISH', 'Ver�ffentlichung');
@define('CONTENT', 'Inhalt');
@define('ENTRIES_PER_PAGE', 'Artikel pro Seite');
@define('SCHEDULED', 'Vorgemerkt');
@define('STICKY_POSTINGS', 'Dauerhafte Eintr�ge');
@define('PAGE_BROWSE_ENTRIES', 'Seite %s von %s, insgesamt %s Eintr�ge');
@define('FIND_ENTRIES', 'Eintr�ge durchsuchen');
@define('RIP_ENTRY', 'Ruhe in Frieden, #%s ...');
@define('NEW_ENTRY', 'Neuer Eintrag');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Eintrag');
@define('EXTENDED_BODY', 'Erweiterter Eintrag');
@define('IFRAME_SAVE', 'Serendipity speichert nun den Eintrag, verschickt Mails an Abonnenten, erstellt etwaige Trackbacks und f�hrt m�gliche XML-RPC Aufrufe durch. Dies kann eine Weile dauern ...');
@define('IFRAME_SAVE_DRAFT', 'Der Entwurf dieses Eintrags wurde gespeichert.');
@define('IFRAME_PREVIEW', 'Serendipity erstellt die Vorschau des Eintrags ...');
@define('IFRAME_WARNING', 'Ihr Browser unterst�tzt keine iframes. Bitte die Datei serendipity_config.inc.php �ffnen und die Variable $serendipity[\'use_iframe\'] auf FALSE setzen.');
@define('DATE_INVALID', 'Warnung: Das Datum, welches Sie f�r den Artikel angegeben haben, ist ung�ltig. Es muss dem Format JJJJ-MM-TT SS:MM entsprechen.');
@define('ADVANCED_OPTIONS', 'Erweiterte Optionen');
@define('TOGGLE_VIEW', 'Darstellung der Kategorien wechseln');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Dieser Link ist nicht aktiv. Er enth�lt die Trackback-URI zu diesem Eintrag. Sie k�nnen diese URI benutzen, um Ping- und Trackbacks von Ihrem eigenen Blog zu diesem Eintrag zu schicken. Um den Link zu kopieren, klicken Sie ihn mit der rechten Maustaste an und w�hlen "Verkn�pfung kopieren" im Internet Explorer oder "Linkadresse kopieren" in Mozilla/Firefox.');
@define('RESET_DATE', 'Datum zur�cksetzen');
@define('RESET_DATE_DESC', 'Hier klicken, um das Datum auf die aktuelle Systemzeit zu setzen');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Benutzerverwaltung');
@define('CREATE_NEW_USER', 'Einen neuen Benutzer anlegen');
@define('CREATE_NOT_AUTHORIZED', 'Sie k�nnen keine Benutzer mit demselben Benutzerrang wie Ihrem eigenen bearbeiten.');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Sie k�nnen keine Benutzer mit einem h�heren Benutzerrang als Ihrem eigenen anlegen.');
@define('CREATED_USER', 'Der neue Benutzer %s wurde angelegt.');
@define('MODIFIED_USER', 'Die Eigenschaften von Benutzer %s wurden ge�ndert.');
@define('USER_LEVEL', 'Benutzerrang');
@define('WARNING_NO_GROUPS_SELECTED', 'Warnung: Sie haben keine Gruppenmitgliedschaften angegeben. Dies w�rde Sie effektiv aus der Blogverwaltung ausschlie�en. Daher wurden die Gruppenzugeh�rigkeiten nicht ge�ndert.');
@define('DELETE_USER', 'Sie wollen den Benutzer #%d %s l�schen. Sind sie sicher? Die Artikel dieses Benutzers werden dann nicht mehr auf der Oberfl�che angezeigt.');
@define('DELETED_USER', 'Benutzer #%d %s gel�scht.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Gruppenverwaltung');
@define('DELETED_GROUP', 'Gruppe #%d %s gel�scht.');
@define('CREATED_GROUP', 'Neue Gruppe \'%s\' wurde angelegt');
@define('MODIFIED_GROUP', 'Die Eigenschaften der Gruppe \'%s\' wurden aktualisiert.');
@define('CREATE_NEW_GROUP', 'Neue Gruppe anlegen');
@define('DELETE_GROUP', 'Sie beabsichtigen, die Gruppe #%d %s zu l�schen. Sind Sie sicher?');
@define('GROUP_NAME_DESC', "Wenn hier ein String angegeben wird, der in irgendeine Sprachdatei als Konstante definiert ist (z.B. 'USERLEVEL_EDITOR_DESC'), wird die zugewiesene �bersetzung dieses Gruppennamens ausgegeben. Es ist m�glich, eigene Konstanten zu definieren und ihre Namen hier anzugeben. Sind �bersetzbare Gruppennamen nicht ben�tigt, kann hier jeder beliebige String eingegeben werden.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Kommentare durchsuchen');
@define('COMMENTS_FILTER_SHOW', 'Zeige');
@define('COMMENTS_FILTER_ALL', 'Alle');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Nur bewilligte');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Zu bewilligende');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Zu best�tigende');
@define('COMMENT_NOT_DELETED', 'Kommentar #%s konnte nicht gel�scht werden.');
@define('COMMENTS_DELETE_CONFIRM', 'Sollen die markierten Kommentare gel�scht werden?');
@define('PAGE_BROWSE_COMMENTS', 'Seite %s von %s, %s Kommentare insgesamt');
@define('COMMENT_IS_DELETED', '(Kommentar entfernt)');
@define('COMMENT_MODERATED', 'Kommentar #%s wurde erfolgreich auf Status "moderieren" zur�ckgesetzt.');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Abonniert');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Abonnements bearbeiten');
@define('SUBSCRIPTION_ENTRY', 'Abonnements f�r Artikel');
@define('SUBSCRIPTION_TYPE', 'Abonnementtyp');
@define('SUBSCRIPTION_TIME', 'Abonniert am');
@define('SUBSCRIPTION_STATE', 'Abonnementsstatus');
@define('SUBSCRIPTION_BLOG', 'Blogabonnement');
@define('SUBSCRIPTION_AUTHOR', 'Authorabonnement');
@define('SUBSCRIPTION_CATEGORY', 'Kategorieabonnement');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'Keine Abonnements zum Anzeigen');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Seite %s von %s, gesamt %s Abonnements');
@define('OPTIN_PENDING', 'wartet auf Optin');
@define('RIP_SUB', 'Ruhe in Frieden, #%s ...');
@define('FIND_SUBSCRIPTIONS', 'Abonnements durchsuchen');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Kategorie gespeichert');
@define('CATEGORY_ALREADY_EXIST', 'Eine Kategorie namens "%s" besteht bereits!');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategorie #%s wurde gel�scht. Alte Artikel in dieser Kategorie nach %s verschoben');
@define('CATEGORY_DELETED', 'Kategorie #%s wurde gel�scht.');
@define('INVALID_CATEGORY', 'Es wurde keine Kategorie zum L�schen gew�hlt.');
@define('EDIT_THIS_CAT', 'Bearbeite "%s"');
@define('CATEGORY_REMAINING', 'Diese Kategorie l�schen und Eintr�ge darin in folgende Kategorie verschieben');
@define('PARENT_CATEGORY', '�bergeordnete Kategorie');
@define('CATEGORY_HIDE_SUB', 'Artikel von Unterkategorien verstecken?');
@define('CATEGORY_HIDE_SUB_DESC', 'Standardm��ig werden bei der Ansicht einer Kategorie im Frontend alle Artikel der gew�hlten Kategorie und aller Unterkategorien angezeigt. Wenn diese Option aktiviert wird, werden Artikel von Unterkategorien nicht angezeigt.');
@define('CREATE_NEW_CAT', 'Neue Kategorie');
@define('ALREADY_SUBCATEGORY', '%s ist bereits eine Unterkategorie von %s.');
@define('NO_CATEGORIES', 'Keine Kategorien');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Fehler beim Vergleich der Pr�fsummen! (Keine Pr�fsummendatei checksums.inc.php im Hauptverzeichnis gefunden)');
@define('CHECKSUMS_PASS', 'Alle erforderlichen Dateien wurden �berpr�ft.');
@define('CHECKSUM_FAILED', '%s besch�digt oder ver�ndert: �berpr�fung fehlgeschlagen');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'Es sind derzeit keine Dateien zu l�schen.');
@define('CLEANCOMPILE_TITLE', 'Template-Cache leeren');
@define('CLEANCOMPILE_INFO', 'L�scht alle kompilierten Template-Dateien des derzeit aktiven Themes. Die kompilierten Template-Dateien werden bei Bedarf vom Smarty-Framework automatisch neu erzeugt.');
@define('IMPORT_ENTRIES', 'Daten importieren');
@define('EXPORT_ENTRIES', 'Eintr�ge exportieren');
@define('EXPORT_FEED', 'Vollst�ndigen RSS-Feed exportieren');
@define('CREATE_THUMBS', 'Vorschauen erneuern');
@define('WARNING_THIS_BLAHBLAH', "ACHTUNG:\\nDas kann jetzt lange dauern, wenn f�r viele Bilder noch keine Vorschau existiert.");
@define('SYNC_OPTION_LEGEND', 'Optionen f�r die Erzeugung der Vorschaubilder');
@define('SYNC_OPTION_KEEPTHUMBS', 'Behalte alle vorhandenen Vorschaubilder');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Behalte vorhandene Vorschaubilder nur, wenn diese die richtige Gr��e haben');
@define('SYNC_OPTION_DELETETHUMBS', 'Erneuere alle Vorschaubilder');
@define('MAINTENANCE_MODE', 'Wartungsmodus');
@define('MAINTENANCE_MODE_DESC', 'Der Wartungsmdous verhindert den Zugriff auf das Blog f�r alle nicht eingeloggten Benutzer.');
@define('MAINTENANCE_MODE_WARNING', "Sie m�ssen eingeloggt bleiben, weil auch Sie sich sonst bis zum Ablauf des Wartungszeitraums nicht mehr einloggen k�nnen.");
@define('MAINTENANCE_MODE_DURATION', 'Sperrzeit (in Stunden):');
@define('MAINTENANCE_MODE_TIME', 'Wartungsmodus aktiv bis');
@define('MAINTENANCE_MODE_ACTIVATE', 'Aktivieren');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deaktivieren');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' wurde als Theme gew�hlt.');
@define('WARNING_TEMPLATE_DEPRECATED', 'Hinweis: Das aktuelle Theme verwendet eine �ltere Methode der HTML-Erzeugung. Falls m�glich, bitte das Theme auf die Nutzung von Smarty optimieren.');
@define('STYLE_OPTIONS_NONE', 'Dieses Theme hat keine speziellen Optionen. Wie Ihr Theme solche Optionen anlegen kann, ist in der technischen Dokumentation auf www.s9y.org im Bereich "Configuration of Theme options" beschrieben.');
@define('STYLE_OPTIONS', 'Theme-Optionen');
@define('CURRENT_TEMPLATE', 'Aktuelles Theme');
@define('CUSTOM_ADMIN_INTERFACE', 'Angepasste Admin-Oberfl�che vorhanden');
@define('CUSTOM_CONFIG', 'Eigene Konfigurationsdatei');
@define('TEMPLATE_INFO', 'Theme-Informationen');
@define('AVAILABLE_TEMPLATES', 'Verf�gbare Themes');
@define('THEMES_PREVIEW_BLOG', 'Siehe Demo auf blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Als Theme w�hlen');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Testen &amp; speichern');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Markierte Plugins entfernen');
@define('SAVE_CHANGES_TO_LAYOUT', '�nderungen am Layout speichern');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronisiere Datenbank mit Bilder-Ordner');
@define('SYNC_DONE', 'Fertig (%s Bilder synchronisiert).');
@define('RESIZE_BLAHBLAH', '<b>Gr��e von %s �ndern</b>');
@define('ORIGINAL_SIZE', 'Originalgr��e: <i>%sx%s</i> Pixel');
@define('RESIZING', 'Anpassen der Bildgr��e');
@define('RESIZE_DONE', 'Fertig (%s Bildgr��en angepa�t).');
@define('KEEP_PROPORTIONS', 'Proportionen beibehalten');
@define('REALLY_SCALE_IMAGE', 'Bildgr��e wirklich ver�ndern? Diese �nderung kann nicht r�ckg�ngig gemacht werden!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Hier k�nnen Sie die Bildgr��e �ndern. Um die Proportionen beizubehalten, einfach einen der beiden Werte eingeben, und anschlie�end die TAB-Taste dr�cken, und Sie erhalten eine Vorschau mit korrekten Proportionen.');
@define('MEDIA_RESIZE_EXISTS', 'Datei-Dimensionen existieren bereits!');
@define('NEWSIZE', 'Neue Gr��e ');
@define('SCALING_IMAGE', '�ndere Gr��e von %s nach %s x %s Pixel');
@define('MEDIA_DIRECTORY_MOVED', 'Verzeichnis und Dateien wurden erfolgreich nach %s verschoben');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Verzeichnis und Dateien konnten nicht nach %s verschoben werden!');
@define('DIRECTORY_INFO', 'Verzeichnis-Info');
@define('DIRECTORY_INFO_DESC', 'Verzeichnisse entsprechen dem Namen ihrer zugeh�rigen phsikalischen Ordner. Wollen Sie Verzeichnisse, die Dateien enthalten, �ndern oder verschieben, haben Sie zwei Optionen. Sie k�nnen entweder das gew�nschte Ziel(unter)verzeichnis anlegen, die Elemente �ber die Medienbibliothek dorthin verschieben und das leere Ursprungsverzeichnis l�schen; oder Sie k�nnen das gesamte Ursprungsverzeichnis �ber den Button "Verzeichnis bearbeiten" �ndern und frei umbenennen. Letzteres wird alle Unterverzeichnisse und Elemente verschieben und die darauf verweisenden Blogeintr�ge anpassen.');
@define('DIRECTORY_CREATED', 'Verzeichnis <strong>%s</strong> wurde angelegt.');
@define('PARENT_DIRECTORY', 'Stammverzeichnis');
@define('CONFIRM_DELETE_DIRECTORY', 'Wirklich alle Inhalte von Verzeichnis <strong>%s</strong> l�schen?');
@define('ERROR_NO_DIRECTORY', 'Fehler: Verzeichnis <strong>%s</strong> existiert nicht.');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Konnte das Verzeichnis nicht l�schen, da noch Dateien vorhanden sind. Bitte die "Alle Dateien l�schen"-Auswahlbox anklicken, falls diese Dateien trotzdem gel�scht werden sollen. Die noch vorhandenen Dateien sind:');
@define('DIRECTORY_DELETE_FAILED', 'Das L�schen des Verzeichnisses \'%s\' ist fehlgeschlagen. Bitte Verzeichnisrechte oder vorherige Meldungen �berpr�fen.');
@define('DIRECTORY_DELETE_SUCCESS', 'Verzeichnis \'%s\' erfolgreich gel�scht.');
@define('CHECKING_DIRECTORY', 'Pr�fe Dateien im Verzeichnis \'%s\' ...');
@define('DELETE_DIRECTORY', 'Verzeichnis l�schen');
@define('DELETE_DIRECTORY_DESC', 'Sie sind dabei, den Inhalt eines Verzeichnisses zu l�schen, in welchem Dateien enthalten sind, die m�glicherweise in Blog-Eintr�gen verwendet werden!');
@define('FORCE_DELETE', 'ALLE Dateien dieses Verzeichnisses l�schen, inklusive der Dateien, die Serendipity nicht katalogisiert hat');
@define('CREATE_DIRECTORY', 'Verzeichnis anlegen');
@define('CREATE_NEW_DIRECTORY', 'Neues Verzeichnis anlegen');
@define('CREATE_DIRECTORY_DESC', 'Hier kann ein neues Verzeichnis angelegt werden, in welchem Mediendaten gespeichert werden k�nnen. Bitte den Namen des neuen Verzeichnisses angeben und optional ein �bergeordnetes Verzeichnis ausw�hlen.');
@define('ABOUT_TO_DELETE_FILE', 'Sie beabsichtigen, die Datei <b>%s</b> zu l�schen.<br />Wenn Sie die Datei in einem Ihrer Eintr�ge verwenden, wird das L�schen L�cken erzeugen.<br />Soll trotzdem fortgefahren werden?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Fehler: Diese Datei existiert schon auf dem Server!');
@define('REMOTE_FILE_INVALID', 'Die angegebene URL scheint eine lokale zu sein und darf nicht abgerufen werden. Sie k�nnen dies explizit gestatten, indem Sie in der Konfiguration die Option "Erlaube, Daten �ber lokale URLs abzurufen" setzen.');
@define('FILE_NOT_FOUND', 'Die Datei namens <b>%s</b> kann nicht gefunden werden, vielleicht wurde diese schon gel�scht?');
@define('ERROR_FILE_FORBIDDEN', 'Der Upload von Dateien mit aktivem Inhalt ist nicht gestattet!');
@define('REMOTE_FILE_NOT_FOUND', 'Die Datei konnte auf dem Server nicht gefunden werden. Sind Sie sicher, dass die URL <b>%s</b> korrekt ist?');
@define('FILE_FETCHED', '\'%s\' geladen als \'%s\'');
@define('FILE_UPLOADED', 'Datei \'%s\' erfolgreich als \'%s\' hochgeladen');
@define('DELETE_FILE_FAIL', 'Kann das Bild namens <b>%s</b> nicht l�schen');
@define('DELETE_FILE', 'Datei namens <b>%s</b> gel�scht');
@define('FOUND_FILE', 'Neue bzw. ge�nderte Datei \'%s\' gefunden.');
@define('FILENAME_REASSIGNED', 'Automagisch zugewiesener Dateiname: %s');
@define('ERROR_FILE_EXISTS', 'Fehler: Neuer Dateiname "%s" existiert schon, bitte einen anderen w�hlen.');
@define('ABOUT_TO_DELETE_FILES', 'Sie beabsichtigen mehrere Dateien auf einmal zu l�schen.<br />Wenn Sie diese in ihren Eintr�gen verwenden, wird das L�schen L�cken erzeugen.<br />Soll trotzdem fortgefahren werden?<br /><br />');
@define('MEDIA_HOTLINKED', 'Link');
@define('EDITOR_NO_TAGS', 'Keine Tags');
@define('ENTER_NEW_NAME', 'Bitte einen neuen Namen eingeben f�r: ');
@define('MEDIA_PROPERTIES_DONE', 'Eigenschaften von #%d ge�ndert.');
@define('MULTICHECK_NO_ITEM', 'Kein Element ausgew�hlt, bitte mindestens eins ausw�hlen. <a href="%s">Zur�ck zur vorigen Seite</a>.');
@define('MULTICHECK_NO_DIR', 'Kein Verzeichnis ausgew�hlt, bitte mindestens eins ausw�hlen. <a href="%s">Zur�ck zur vorigen Seite</a>.');
@define('ADDING_IMAGE', 'Bild hinzuf�gen ...');
@define('THUMB_CREATED_DONE', 'Vorschau erstellt.<br />Fertig.');
@define('THUMBNAIL_USING_OWN', 'Verwende %s als Vorschaubild, da das Originalbild bereits so klein ist.');
@define('THUMBNAIL_FAILED_COPY', 'Wollte %s als Vorschaubild verwenden, aber das Kopieren schlug fehl!');
@define('DELETE_THUMBNAIL', 'Vorschaubilder zu <b>%s</b> gel�scht');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ein Fehler trat beim Dateiupload auf. Vielleicht ist die Datei gr��er, als durch die Server-Konfiguration zugelassen wird. Bitte mit Ihrem ISP absprechen oder die php.ini-Datei bearbeiten, um gr��ere Uploads zuzulassen.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Fehler: Sie k�nnen keine Datei gr��er als %s Bytes hochladen!');
@define('MEDIA_UPLOAD_DIMERROR', 'Fehler: Sie k�nnen keine Bilder gr��er als %s x %s Pixel hochladen!');
@define('HOTLINK_DONE', 'Link zur Datei erstellt.<br />Fertig.');
@define('DELETE_HOTLINK_FILE', 'Link zur Datei namens <b>%s</b> l�schen?');
@define('IMAGICK_EXEC_ERROR', 'Konnte folgendes Programm nicht ausf�hren: "%s", Fehlermeldung: %s, R�ckgabewert: %d');
@define('SKIPPING_FILE_EXTENSION', '�berspringe Datei: Fehlende Dateiendung von %s.');
@define('SKIPPING_FILE_UNREADABLE', '�berspringe Datei: \'%s\' nicht lesbar.');
@define('MEDIA_RENAME_FAILED', 'Umbenennen fehlgeschlagen!');
@define('PERM_SET_CHILD', 'Identische Rechte auch auf alle Unterverzeichnisse anwenden');
@define('TIMESTAMP_RESET', 'Das Datum wurde auf die aktuelle Systemzeit gesetzt.');
@define('CURRENT_TAB', 'Aktives Tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Ich m�chte die Vorschau im Eintrag haben.');
@define('I_WANT_BIG_IMAGE', 'Ich m�chte das gro�e Bild im Eintrag haben.');
@define('I_WANT_NO_LINK', 'Das Bild soll kein Link sein.');
@define('I_WANT_IT_TO_LINK', 'Das Bild soll hierhin linken:');
@define('MEDIA_ALT', 'ALT-Attribut (Bildinhalt oder Kurzbeschreibung)');
@define('MEDIA_TITLE', 'TITLE-Attribut (wird beim �berfahren mit der Maus angezeigt)');
@define('IMAGE_SIZE', 'Bildgr��e');
@define('IMAGE_ALIGNMENT', 'Bildausrichtung');
@define('ALIGN_TOP', 'Oben');
@define('ALIGN_LEFT', 'Links');
@define('ALIGN_RIGHT', 'Rechts');
@define('IMAGE_AS_A_LINK', 'Bild als Link');
@define('MEDIA_TARGET', 'Ziel dieses Links');
@define('MEDIA_TARGET_JS', 'Popup-Fenster (via JavaScript, adaptive Gr��e)');
@define('MEDIA_ENTRY', 'Eigenst�ndige Seite');
@define('MEDIA_TARGET_BLANK', 'Popup-Fenster (via target=_blank)');
@define('YOU_CHOSE', 'Sie haben sich f�r %s entschieden');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Bild um 90 Grad gegen den Uhrzeigersinn drehen');
@define('IMAGE_ROTATE_RIGHT', 'Bild um 90 Grad im Uhrzeigersinn drehen');
@define('MEDIA_RENAME', 'Datei umbenennen');
@define('THUMBNAIL_SHORT', 'Vorsch.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Dateiname');
@define('SORT_ORDER_EXTENSION', 'Dateiendung');
@define('SORT_ORDER_SIZE', 'Dateigr��e');
@define('SORT_ORDER_WIDTH', 'Bildbreite');
@define('SORT_ORDER_HEIGHT', 'Bildh�he');
@define('SORT_ORDER_DATE', 'Upload-Datum');
@define('SHOW_METADATA', 'Metadaten zeigen');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Bild/Datei zur Sammlung hinzuf�gen:</b><p>Hier k�nnen Sie eine Datei (z.B. ein Bild) hochladen, oder mitteilen, von wo es geladen werden soll! Wenn das passende Bild fehlt, einfach bei Google danach suchen. Probieren Sie mal <a href="http://images.google.de" target="_blank">Googles Bildsuche</a>, die Resultate sind oft brauchbar, aber auf jeden Fall witzig :). Aber vorsicht: Die meisten Bilder sind urheberrechtlich gesch�tzt, also vorher fragen, um �rger zu vermeiden.</p><b>Methode w�hlen:</b></p><br />');
@define('ENTER_MEDIA_URL', 'URL zum Download angeben:');
@define('ENTER_MEDIA_UPLOAD', 'Datei zum Hochladen angeben:');
@define('SAVE_FILE_AS', 'Datei speichern mit dem Namen:');
@define('STORE_IN_DIRECTORY', 'In diesem Verzeichnis ablegen: ');
@define('IMAGE_MORE_INPUT', 'Mehr Bilder hinzuf�gen');
@define('ENTER_MEDIA_URL_METHOD', 'Download-Methode:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Hinweis: Falls Sie auf eine Datei/Grafik nur verweisen wollen, stellen Sie bitte sicher, dass Sie die Erlaubnis haben, zu diesen Bildern zu linken bzw. dass die verlinkte Webseite Ihnen geh�rt. Dateiverweise/Links erm�glichen es, eine Datei/Grafik nicht lokal zu speichern, sondern sie direkt von der verlinkten Website einzubinden.');
@define('FETCH_METHOD_IMAGE', 'Bild auf diesem Server speichern');
@define('FETCH_METHOD_HOTLINK', 'Nur zum Quellserver linken');
@define('GO_ADD_PROPERTIES', 'Los & Eigenschaften angeben');
@define('PLAIN_ASCII_NAMES', '(keine Sonderzeichen, Umlaute)');
@define('NO_FILE_SELECTED', 'Damit s9y etwas machen kann, musst du zuerst eine Datei ausw�hlen');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Dateiausma�e �ndern');
@define('MEDIA_DELETE', 'Datei l�schen');
@define('FILES_PER_PAGE', 'Dateien pro Seite');
@define('HIDE_SUBDIR_FILES', 'Dateien in Unterverzeichnissen verstecken');
@define('NO_IMAGES_FOUND', 'Keine Mediendaten gefunden');
@define('RANGE_FROM', 'Von');
@define('RANGE_TO', 'Bis');
@define('MEDIA_DIRECTORY_MOVE', 'Dateien verschieben');
@define('INSERT_ALL', 'Alle einf�gen');
@define('ALL_DIRECTORIES', 'alle Verzeichnisse');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfiguration geschrieben und gesichert!');
@define('DIAGNOSTIC_ERROR', 'Bei der Einrichtung der Installation traten einige Fehler auf:');
@define('FULL_COMMENT_TEXT', 'Ja, mit vollst�ndigen Kommentar-Texten.');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Datenbankeinstellungen');
@define('INSTALL_CAT_DB_DESC', 'Konfigurieren Sie hier die Datenbank. Serendipity ben�tigt die Daten, um lauff�hig zu sein.');
@define('INSTALL_DBTYPE', 'Datenbanktyp');
@define('INSTALL_DBTYPE_DESC', 'Datenbanktyp');
@define('INSTALL_DBHOST', 'Datenbank Servername');
@define('INSTALL_DBHOST_DESC', 'Datenbank Servername. Bei pgsql kann ein abweichender Port mittels "localhost port=4711" angegeben werden; bei MySQL mit "localhost:4711".');
@define('INSTALL_DBUSER', 'Datenbank Username');
@define('INSTALL_DBUSER_DESC', 'Datenbank Username');
@define('INSTALL_DBPASS', 'Datenbank Passwort');
@define('INSTALL_DBPASS_DESC', 'Datenbank Passwort');
@define('INSTALL_DBNAME', 'Datenbankname');
@define('INSTALL_DBNAME_DESC', 'Name der Datenbank');
@define('INSTALL_DBPREFIX', 'Datenbank-Pr�fix');
@define('INSTALL_DBPREFIX_DESC', 'Pr�fix f�r Tabellennamen, z.B. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Persistente Verbindungen nutzen');
@define('INSTALL_DBPERSISTENT_DESC', 'Aktiviert die Nutzung einer persistenten Datenbankverbindung. Mehr dazu in der <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">PHP-Dokumentation</a>. �blicherweise wird diese Einstellung nicht empfohlen.');
@define('INSTAL_DB_UTF8', 'Datenbank-Zeichensatzkonvertierung aktivieren');
@define('INSTAL_DB_UTF8_DESC', 'Sendet einen MySQL "SET NAMES" Befehl, um den verwendeten Zeichensatz der Datenbank mitzuteilen. Falls sich merkw�rdige Zeichen im Blog zeigen, ist es einen Versuch wert, diese Option zu (de)aktivieren.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Pfade');
@define('INSTALL_CAT_PATHS_DESC', 'Zahlreiche Pfade zu unterschiedlichen wichtigen Verzeichnissen und Dateien. Unbedingt auf abschlie�enden Schr�gstrich nach Pfaden achten!');
@define('INSTALL_FULLPATH', 'Voller Pfad');
@define('INSTALL_FULLPATH_DESC', 'Der volle und absolute Pfad zur Serendipity-Installation.');
@define('INSTALL_UPLOADPATH', 'Upload-Pfad');
@define('INSTALL_UPLOADPATH_DESC', 'Alle Dateien werden hierhin hochgeladen. Relativ zum vollen Pfad - �blicherweise \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativer HTTP-Pfad');
@define('INSTALL_RELPATH_DESC', 'Der HTTP-Pfad zu Serendipity f�r den Browser, �blicherweise \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativer Template-Pfad');
@define('INSTALL_RELTEMPLPATH_DESC', 'Der Pfad zum Verzeichnis, der die Templates enth�lt - relativ zum HTTP-Pfad');
@define('INSTALL_RELUPLOADPATH', 'Relativer Upload-Pfad');
@define('INSTALL_RELUPLOADPATH_DESC', 'Der Pfad zum Upload-Verzeichnis f�r den Browser - relativ zum HTTP-Pfad');
@define('INSTALL_URL', 'URL zum Blog');
@define('INSTALL_URL_DESC', 'Stamm-URL zur Serendipity-Installation');
@define('INSTALL_AUTODETECT_URL', 'HTTP-Hostnamen automatisch erkennen');
@define('INSTALL_AUTODETECT_URL_DESC', 'Falls aktiviert, wird Serendipity sicherstellen, dass der vom Besucher gew�hlte HTTP-Hostname als BaseURL-Variable verwendet wird. Sofern diese Option aktiviert ist, ist es m�glich, mehrere Domainnamen f�r das Weblog zu verwenden. Alle Links werden dann mit dem HTTP-Hostnamen umgeschrieben, der vom Besucher gew�hlt wurde.');
@define('INSTALL_INDEXFILE', 'Index-Datei');
@define('INSTALL_INDEXFILE_DESC', 'Welche Datei wird als Index-Datei verwendet (index.php)');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Bestimmt diverse URL-Strukturen, die dazu verwendet werden, die HTML-Links Ihres Blogs auszugeben. Es wird empfohlen, die Standardeinstellung beizubehalten. Falls Sie diese jedoch �ndern m�chten, empfiehlt es sich, m�glichst �berall den %id%-Platzhalter einzusetzen, um Serendipity einige Datenbankabfragen zu ersparen, wenn eine URL ausgelesen werden soll.');
@define('INSTALL_PERMALINK', 'Permalink-Struktur f�r die Artikel-URLs');
@define('INSTALL_PERMALINK_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der normale Artikel dargestellt werden. Die Variablen %id%, %title%, %day%, %month%, %year% und alle anderen normalen Zeichen sind m�glich.');
@define('INSTALL_PERMALINK_AUTHOR', 'Permalink-Struktur f�r Autoren-URLs');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der Artikel von gew�hlten Autoren dargestellt werden. Die Variablen %id%, %realname%, %username%, %email% und alle anderen normalen Zeichen sind m�glich.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permalink-Struktur f�r Kategorie-URLs');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der gew�hlte Kategorien dargestellt werden. Die Variablen %id%, %name%, %parentname%, %description% und alle anderen normalen Zeichen sind m�glich.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permalink-Struktur f�r RSS-Kategorien-Feed URLs');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der gew�hlte RSS-Feeds von Kategorien dargestellt werden. Die Variablen %id%, %name%, %description% und alle anderen normalen Zeichen sind m�glich.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink-Struktur f�r RSS-Autoren-Feed URLs');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der gew�hlte RSS-Feeds von Autoren dargestellt werden. Die Variablen %id%, %realname%, %username%, %email% und jede anderen normalen Zeichen sind m�glich.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Pfad zu den Eintr�gen');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Pfad zu den Archiven');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Pfad zu den Kategorien');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Pfad zu den Autoren');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Pfad zu Blogabonnements');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Pfad zum Abbestellen von Kommentaren');
@define('INSTALL_PERMALINK_DELETEPATH', 'Pfad zum L�schen von Kommentaren');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Pfad zum Bewilligen von Kommentaren');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Pfad zu den RSS-Feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Pfad zu einem externen Plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Pfad zur Administration');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Pfad zur Suche');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Pfad zu Kommentaren');
@define('CONFIG_PERMALINK_PATH_DESC', 'Beachten Sie bitte, dass Sie ein Pr�fix verwenden m�ssen, damit Serendipity die URL korrekt der richtigen Aktion zuordnen kann. Sie d�rfen das Pr�fix in jeden beliebigen einzigartigen Namen �ndern, aber nicht komplett entfernen. Das gilt f�r alle Definitionen f�r Pfad-Pr�fixe.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Generelle Einstellungen');
@define('INSTALL_CAT_SETTINGS_DESC', 'Stellt die Grundeigenschaften von Serendipity ein');
@define('INSTALL_USERNAME', 'Admin-Benutzername');
@define('INSTALL_USERNAME_DESC', 'Benutzername f�r den Administrator-Zugang');
@define('INSTALL_PASSWORD', 'Admin-Passwort');
@define('INSTALL_PASSWORD_DESC', 'Passwort f�r den Administrator-Zugang');
@define('INSTALL_PASSWORD2', 'Admin-Passwort (erneut)');
@define('INSTALL_PASSWORD2_DESC', 'Passwort f�r den Administrator-Zugang, nochmal zur Best�tigung eingeben.');
@define('USERCONF_REALNAME', 'Voller Name');
@define('USERCONF_REALNAME_DESC', 'Der vollst�ndige Name des Autors. Nur dieser Name wird Besuchern angezeigt.');
@define('INSTALL_EMAIL', 'Admin-E-Mail');
@define('INSTALL_EMAIL_DESC', 'E-Mail des Administrators');
@define('INSTALL_SENDMAIL', 'Sende E-Mails zum Admin?');
@define('INSTALL_SENDMAIL_DESC', 'Soll der Administrator E-Mails erhalten, wenn Kommentare zum Blog geschrieben werden?');
@define('INSTALL_SUBSCRIBE', 'Abonnments erlauben?');
@define('INSTALL_SUBSCRIBE_DESC', 'Soll es den Besuchern des Blogs m�glich sein, Inhalte zu abonnieren und so alle neuen Ver�ffentlichungen dazu per E-Mail erhalten?');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Benutze Double-Opt In f�r Abonnements?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'Falls aktiviert, wird einem Kommentator, der E-Mail-Benachrichtigung zu neuen Kommentaren oder Artikeln abonnieren m�chte, eine E-Mail geschickt. Diese enth�lt einen Best�tigungslink nach dem z.B. f�r Deutsche Gesetze erforderlichen Opt-In-Schema.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Benachrichtigungsgr��e');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'Wieviel des Inhalts soll in der email gezeigt werden?');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mailformat Html f�r Abonnenten');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Sende Mail an Abonnenten als Html oder einfacher Text');
@define('INSTALL_BLOGNAME', 'Blog-Titel');
@define('INSTALL_BLOGNAME_DESC', 'Der Titel des Blogs');
@define('INSTALL_BLOGDESC', 'Blog-Beschreibung');
@define('INSTALL_BLOGDESC_DESC', 'Die Beschreibung des Blogs');
@define('INSTALL_BLOG_EMAIL', 'E-Mail-Adresse des Blogs');
@define('INSTALL_BLOG_EMAIL_DESC', 'Mit dieser Option legen Sie die E-Mail-Adresse fest, die im "From"-Teil von ausgehenden Mails des Servers als Absender verwendet wird. Diese Adresse muss auf dem eingesetzten Mailserver g�ltig sein, da viele Mailserver ung�ltige From-Adressen als Spam klassifizieren.');
@define('COMMENT_TOKENS', 'Schnelle Kommentar-Moderation verwenden?');
@define('COMMENT_TOKENS_DESC', 'Diese Methode setzt Tokens ein, damit Kommentare direkt aus der Hinweis-E-Mail heraus gel�scht oder akzeptiert werden k�nnen. Diese Funktion ist f�r h�heren Komfort gedacht, geht aber zu Lasten der Sicherheit: Wenn jemand die E-Mail abf�ngt, kann diese Person entsprechende Kommentare ohne weitere Authentifikation l�schen oder freischalten.');
@define('INSTALL_LANG', 'Sprache');
@define('INSTALL_LANG_DESC', 'W�hlen Sie die Sprache des Blogs');
@define('INSTALL_CHARSET', 'Zeichensatz-Auswahl');
@define('INSTALL_CHARSET_DESC', 'Hier k�nnen Sie zwischen UTF-8 oder dem nationalen Zeichensatz ("Native" - ISO, EUC, ...) w�hlen. Einige Sprachen sind sowieso nur in UTF-8 Zeichens�tzen verf�gbar, so dass die Option "Nationaler Zeichensatz" dort keine Auswirkungen hat. UTF-8 wird als Zeichensatz f�r Neuinstallation empfohlen. �ndern Sie diese Einstellung nicht, wenn Sie bereits Eintr�ge erstellt haben - dies kann zu defekten Zeichen f�hren. Weitere Informationen finden Sie unter https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Kalendertyp');
@define('INSTALL_CAL_DESC', 'W�hlen Sie das gew�nschte Kalenderformat');
@define('AUTOLANG', 'Sprache des Browsers eines Besuchers verwenden');
@define('AUTOLANG_DESC', 'Falls aktiviert, wird die im Browser des Besuchers eingestellte Sprache als Standardsprache f�r Eintr�ge und die Serendipity-Oberfl�che benutzt.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Sollen pers�nliche Plugin-Rechte f�r Benutzergruppen aktiviert werden?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Falls die globale Konfigurations-Option "Sollen pers�nliche Plugin-Rechte f�r Benutzergruppen aktiviert werden" aktiviert ist, k�nnen Sie bei jeder Benutzergruppe definieren, welche Plugins/Ereignisse diese Gruppe ausf�hren darf.');
@define('UPDATE_NOTIFICATION', 'Update-Hinweis');
@define('UPDATE_NOTIFICATION_DESC', 'Sollen Update-Checks im Dashboard angezeigt werden, und wenn ja f�r welche Versionen?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'An einigen Stellen im Serendipity-Code wurden Debugging-Ausgaben platziert. Wenn diese Option auf "Debug" gesetzt wird, werden jene Ausgaben nach templates_c/logs/ geschrieben. Diese Option sollte nur aktiviert werden, wenn Probleme in der Funktionsausf�hrung bestehen. Wird die Option auf "Fehler" gesetzt, werden PHP-Fehler in jenes Logfile geschrieben, hierbei wird die PHP error_log Option �berschrieben.');
@define('USE_CACHE', 'Caching aktivieren');
@define('USE_CACHE_DESC', 'Aktiviert einen internen Cache, um die Wiederholung bestimmter Datenbank-Abfragen zu umgehen. Das reduziert die Last auf Server mit mittlerem bis hohem Traffic und verbessert die Ladezeit der Seite.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevanz');
@define('UPDATE_STABLE', 'stabil');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Design und Optionen');
@define('INSTALL_CAT_DISPLAY_DESC', 'Legt fest, wie Serendipity aussieht');
@define('INSTALL_FETCHLIMIT', 'Anzahl der Artikel auf der Startseite');
@define('INSTALL_FETCHLIMIT_DESC', 'Legt fest, wie viele Artikel auf jeder Seite des Blogs angezeigt werden sollen');
@define('INSTALL_RSSFETCHLIMIT', 'Eintr�ge im Feed');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Anzahl der Eintr�ge, die im RSS-Feed dargestellt werden sollen.');
@define('ARCHIVE_SORT_STABLE', 'Unver�nderliche Archiv-Seiten');
@define('ARCHIVE_SORT_STABLE_DESC', 'Archiv-Seiten absteigend sortieren, so dass die �ltesten Eintr�ge sich auf Seite 1 finden, so dass sich die Inhalte nicht mehr �ndern und Suchmaschinen die Seiten nicht st�ndig neu indizieren m�ssen.');
@define('QUICKSEARCH_SORT', 'Wie sollen Suchergebnisse sortiert werden?');
@define('SYNDICATION_RFC2616', 'Strikte RFC2616-RSS-Feed-Kompatibilit�t');
@define('SYNDICATION_RFC2616_DESC', 'Falls RFC2616 NICHT strikt ausgelegt wird, k�nnen alle Conditional-GET-Anfragen zu Serendipity die letzten Eintr�ge seit dem letzten Client-Abruf zur�ckliefern - f�r Benutzer, die auch nach ihrem Urlaub alle Artikel lesen wollen, ist dies eine tolle Sache. Jedoch k�nnen dadurch einige spezielle Clients, wie z.B. Planet, aus dem Tritt gebracht werden, und neue Artikel ihres RSS-Feeds falsch interpretieren. Wenn diese Option also auf JA gesetzt wird, wird zwar der RFC befolgt, aber ihre RSS-Leser k�nnten Eintr�ge verpassen, wenn Sie l�nger nicht auf ihrer Seite waren. Wie auch immer sie sich entscheiden, entweder �rgern Sie damit Clients wie Planet oder Ihre Benutzer.');
@define('INSTALL_USEGZIP', 'GZIP-Kompression verwenden');
@define('INSTALL_USEGZIP_DESC', 'Um die Darstellung von Seiten zu beschleunigen, k�nnen diese vorher mit GZIP komprimiert werden, sofern der Browser des Betrachters dies unterst�tzt. Diese Einstellung ist empfohlen.');
@define('INSTALL_XHTML11', 'XHTML 1.1 Standard verwenden');
@define('INSTALL_XHTML11_DESC', 'Soll der XHTML 1.1 Standard verwendet werden? (Erzeugt g�ltigen Code, kann jedoch bei �lteren Browsern Probleme hervorrufen)');
@define('INSTALL_POPUP', 'Popups f�r Kommentare, Trackbacks usw. verwenden?');
@define('INSTALL_POPUP_DESC', 'Sollen die Links zu den Kommentaren, Trackbacks etc. in Popup-Fenstern ge�ffnet werden? (Wird nicht von allen Themes unterst�tzt)');
@define('INSTALL_EMBED', 'Eingebettete Nutzung von Serendipity aktivieren?');
@define('INSTALL_EMBED_DESC', 'Falls Serendipity in eine normale Seite eingebettet werden soll, aktivieren Sie diese Option. Serendipity stellt dann nur Inhalte dar, und Sie k�nnen sich um Header und Footer k�mmern. Lesen Sie die Datei README, um hierzu weitere Informationen zu erhalten.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Externe Links klickbar?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nein": Ungepr�fte externe Links (Top Exits, Top Referrer, Kommentare) werden unterdr�ckt/als Text angezeigt, um Google-Spam zu verhindern (empfohlen). "Ja": Externe Links werden als Hyperlinks angezeigt. Diese Einstellung kann in den einzelnen Plugins �berschrieben werden.');
@define('INSTALL_TRACKREF', 'Referrer-Tracking aktivieren?');
@define('INSTALL_TRACKREF_DESC', 'Wenn das Referrer-Tracking aktiviert ist, werden Verweise auf Ihre Eintr�ge gespeichert. Heutzutage wird dies leider h�ufig f�r Spam missbraucht und kann daher deaktiviert werden.');
@define('INSTALL_BLOCKREF', 'Geblockte Referrer');
@define('INSTALL_BLOCKREF_DESC', 'Sollen spezielle Hosts aus der Referrer-Liste gesperrt werden? Hostnamen getrennt mit ";" eingeben. Jeder Hostname wird als Teilstring �berpr�ft, so dass "goo" sowohl "google.com" als auch "googlegroups.com" sperren w�rde.');
@define('INSTALL_REWRITE', 'URL-Formung');
@define('INSTALL_REWRITE_DESC', 'W�hlen Sie die Methode zur Erzeugung der URLs. Wenn diese aktiviert werden, k�nnen sprechende Namen f�r jeden Artikel verwendet werden und somit besser von Suchmaschinen indiziert Der Webserver muss entweder mod_rewrite oder die "AllowOverride All"-Direktive unterst�tzen. Der Standardwert wird automagisch bestimmt.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Basiert die Zeitdifferenz auf der Server-Zeitzone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Eintragszeiten nach Server-Zeitzone eintragen oder nicht. YES w�hlt die Server-Zeitzone als Basis, NO w�hlt GMT.');
@define('INSTALL_OFFSET', 'Zeitunterschied des Servers');
@define('INSTALL_OFFSET_DESC', 'Gibt an, wie viele Stunden zwischen der Uhrzeit des Servers (aktuell: %clock%) und der eigenen Zeitzone liegen.');
@define('INSTALL_SHOWFUTURE', 'Zuk�nftige Eintr�ge zeigen');
@define('INSTALL_SHOWFUTURE_DESC', 'Falls aktiviert, werden auch die Eintr�ge angezeigt, deren Datum in der Zukunft liegt. Standardm��ig werden solche Eintr�ge versteckt und erscheinen erst, wenn der entsprechende Zeitpunkt erreicht wird.');
@define('INSTALL_ACL', 'Leserechte auf Kategorien anwenden');
@define('INSTALL_ACL_DESC', 'Falls aktiviert, werden die Leserechte der Benutzergruppen bei der Ansicht des Frontends aktiviert. Falls deaktiviert, werden die f�r Kategorien vergebenen Leserechte NICHT angewandt, daf�r m�ssen aber auch weniger SQL-Abfragen durchgef�hrt werden. Wenn Sie also keine Mehrbenutzer-Leserechte ben�tigen, deaktivieren Sie diese Einstellung.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed-Einstellungen');
@define('INSTALL_CAT_FEEDS_DESC', 'Einstellungen f�r den RSS Feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Volle Eintr�ge mit erweitertem Text im RSS-Feed einbinden');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Bild f�r den RSS-Feed');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL f�r ein Bild im GIF/JPEG/PNG Format, falls vorhanden (leer: Serendipity-Logo).');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Breite des Bildes');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'in Pixeln, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'H�he des Bildes');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'in Pixeln, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'E-Mail-Adressen einbinden?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Feld "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-Mail-Adresse des verantwortlichen Editors, falls vorhanden (leer: nicht verwenden). [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Feld "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-Mail-Adresse des Webmasters, falls vorhanden (leer: nicht verwenden). [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Feld "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Anzahl der Minuten, nachdem das Blog von fremden Seiten nicht mehr gecached werden sollte (leer: nicht verwenden). [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Feld "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Soll das "pubDate"-Feld f�r den RSS-Kanal eingebettet werden, um das Datum des letzten Eintrags zu enthalten?');
@define('FEED_CUSTOM', 'Individuelle Feed-URL');
@define('FEED_CUSTOM_DESC', 'Wenn gesetzt, wird die eingetragene URL verwendet um Feedreader dorthin weiterzuleiten. Dies ist hilfreich f�r Statistikdienste wie z.B. Feedburner, so dass hier die Feedburner-URL des eigenen Feeds hinterlegt werden kann.');
@define('FEED_FORCE', 'Erzwingen der individuellen Feed-URL?');
@define('FEED_FORCE_DESC', 'Wenn aktiviert, werden alle Feedreader automatisch zu der eingetragenen individuellen Feed-URL weitergeleitet.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Bildkonvertierung');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Wie soll Serendipity Bilder handhaben');
@define('INSTALL_IMAGEMAGICK', 'ImageMagick zur Skalierung verwenden');
@define('INSTALL_IMAGEMAGICK_DESC', 'Ist ImageMagick installiert? Verwendet ansonsten die GDLib.');
@define('INSTALL_IMAGEMAGICKPATH', 'Pfad zur convert ImageMagick-Datei');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Voller Pfad und Name zur Image-Magick Datei');
@define('INSTALL_THUMBSUFFIX', 'Vorschaubild-Endung');
@define('INSTALL_THUMBSUFFIX_DESC', 'Vorschaubilder werden nach dem Schema originalname.Suffix.erweiterung benannt.');
@define('INSTALL_THUMBWIDTH', 'Vorschaubildgr��e');
@define('INSTALL_THUMBWIDTH_DESC', 'Maximale Breite/H�he der automatisch erzeugten Vorschaubildes');
@define('INSTALL_THUMBDIM', 'Bestimmung der maximalen Vorschaubildgr��e');
@define('INSTALL_THUMBDIM_LARGEST', 'L�ngste Seite');
@define('INSTALL_THUMBDIM_WIDTH', 'Breite');
@define('INSTALL_THUMBDIM_HEIGHT', 'H�he');
@define('INSTALL_THUMBDIM_DESC', 'Legt fest, wie die Gr��e der Thumbnails angepasst werden soll. Der Standard "' . INSTALL_THUMBDIM_LARGEST . '" nutzt die gr��te Seite als Beschr�nkung, so dass weder Breite noch H�he die festgelegte Zahl �berschreiten d�rfen. "' . INSTALL_THUMBDIM_WIDTH . '" und "' .  INSTALL_THUMBDIM_HEIGHT . '" legen lediglich die H�he bzw. Breite als gr��te Seite fest, so dass die jeweils andere Angabe auch gr��er als die festgelegte Zahl sein darf.');
@define('MEDIA_UPLOAD_SIZE', 'Maximale Dateigr��e f�r den Upload');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Geben Sie die maximale Dateigr��e f�r hochgeladene Dateien in Bytes an. Diese Option kann jedoch auch durch serverseitige Optionen der PHP.ini beschr�nkt sein. PHP.ini: upload_max_filesize, post_max_size, max_input_time. Wenn Sie diese Option leerlassen, werden nur die serverseitigen Einschr�nkungen angewandt.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Maximale Breite eines hochgeladenen Bildes');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Geben sie die maximale Breite eines hochgeladenen Bildes in Pixeln an.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Maximale H�he eines hochgeladenen Bildes');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Geben sie die maximale H�he eines hochgeladenen Bildes in Pixeln an.');
@define('MEDIA_UPLOAD_RESIZE', 'Vor dem Upload Gr��e anpassen');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Mittels Javascript werden Bilder vor dem Upload an die gew�hlte Maximalgr��e angepasst. Wenn aktiv, wird Ajax f�r den Bildupload verwendet was auch zu der Entfernung des "Eigenschaften eingeben"-Buttons f�hrt, dies muss dann separat geschehen.');
@define('ONTHEFLYSYNCH', 'Automagische Synchronisation der Mediendatenbank');
@define('ONTHEFLYSYNCH_DESC', 'Falls diese Option aktiviert ist, wird Serendipity den Inhalt der Mediendatenbank mit dem echten Inhalt im Dateisystem abgleichen.');
@define('MEDIA_DYN_RESIZE', 'Dynamische Bildgr��enanpassung erlauben?');
@define('MEDIA_DYN_RESIZE_DESC', 'Falls aktiviert, kann die Medienauswahl ein Bild in beliebigen Gr��en zur�ckliefern, indem spezielle GET-Variablen �bermittelt werden. Die Ergebnisse werden gecached und k�nnen daher m�glicherweise viel Speicherplatz beanspruchen.');
@define('MEDIA_EXIF', 'EXIF/JPEG Metadaten �bernehmen?');
@define('MEDIA_EXIF_DESC', 'Falls aktiviert, werden EXIF/JPEG Metadaten ausgelesen und in der Datenbank gespeichert.');
@define('MEDIA_PROP', 'Medien-Eigenschaften');
@define('MEDIA_PROP_DESC', 'Tragen Sie eine Liste von ";" separierten Eigenschaftsfeldern ein, die f�r Mediendatenbankeintr�ge ausgef�llt werden k�nnen.');
@define('MEDIA_PROP_MULTIDESC', '(Sie k�nnen ":MULTI" nach jedem Element eintragen, um anzugeben dass f�r dieses Feld eine lange Beschreibung erwartet wird)');
@define('MEDIA_KEYWORDS', 'Medien-Schl�sselw�rter');
@define('MEDIA_KEYWORDS_DESC', 'Tragen Sie eine Liste von ";" separierten Schl�sselw�rtern ein, die f�r Mediendatenbankeintr�ge vergeben werden k�nnen.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Erlaube, Daten �ber lokale URLs abzurufen');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'Standardm��ig ist es aus Sicherheitsgr�nden verboten, Daten �ber lokale URLs abzurufen, um Server Side Request Forgers (SSRF) zu vermeiden. Wenn Sie ein lokales Intranet verwenden k�nnen sie die Datenabfrage �ber diese Option explizit erlauben.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Pers�nliche Einstellungen');
@define('USERCONF_CAT_PERSONAL_DESC', 'Einstellungen des eigenen Accounts');
@define('USERCONF_USERNAME', 'Benutzername');
@define('USERCONF_USERNAME_DESC', 'Ihr Benutzername');
@define('USERCONF_PASSWORD', 'Passwort');
@define('USERCONF_PASSWORD_DESC', 'Ihr Passwort');
@define('USERCONF_CHECK_PASSWORD', 'Altes Passwort');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Falls Sie das Passwort im vorhergehenden Feld �ndern, m�ssen Sie das aktuelle Password in diesem Feld eingeben.');
@define('USERCONF_USERLEVEL', 'Zugriffsrechte');
@define('USERCONF_USERLEVEL_DESC', 'Zugriffsrechte bestimmen die Art und den Umfang des Zugriffs eines Benutzers auf die Funkionalit�ten des Blogs');
@define('USERCONF_GROUPS', 'Gruppenzugeh�rigkeit');
@define('USERCONF_GROUPS_DESC', 'Dieser Benutzer ist Mitglied folgender Gruppen (mehrere Zugeh�rigkeiten m�glich).');
@define('USERCONF_EMAIL', 'E-Mail');
@define('USERCONF_EMAIL_DESC', 'Ihre E-Mail-Adresse');
@define('INSTALL_WYSIWYG', 'Grafischen WYSIWYG-Editor verwenden');
@define('INSTALL_WYSIWYG_DESC', 'Soll der grafische WYSIWYG-Editor verwendet werden?');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'WYSIWYG-Buttonleiste');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Hier kann die Menge der verf�gbaren Buttons im WYSIWYG-Editor mittels einer Voreinstellung gew�hlt werden. Falls dar�ber hinaus eigene Anpassungen (mittels einer individuellen JavaScript-Konfigurationsdatei in templates/XXX/admin/ckeditor_custom_config.js) ben�tigt werden befinden sich Hinweise hierzu in den Dateien htmlarea/ckeditor_s9y_config.js und htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (Standard)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduziert');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Vollst�ndig');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternative');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Vollst�ndig');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Erzwingen: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Erzwingen: Reduziert');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Erzwingen: Vollst�ndig');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Erzwingen: Alternative');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Erzwingen: CKEditor Vollst�ndig');
@define('USERCONF_SENDCOMMENTS', 'Bei Kommentaren benachrichtigen?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Wollen Sie eine E-Mail erhalten, sobald ein neuer Kommentar zu Ihrem Eintrag geschrieben wurde?');
@define('USERCONF_SENDTRACKBACKS', 'Bei Trackbacks benachrichtigen?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Wollen Sie eine E-Mail erhalten, sobald ein neues Trackback zu Ihrem Eintrag geschrieben wurde?');
@define('USERCONF_CREATE', 'Benutzer deaktivieren / Rechte entziehen?');
@define('USERCONF_CREATE_DESC', 'Wenn diese Option aktiviert ist, wird dieser Benutzer keine M�glichkeit mehr haben Eintr�ge anzulegen oder sonstige Aktionen auszuf�hren. Wenn er in die Administrations-Oberfl�che kommt, wird er nichts anderes tun k�nnen als seine Pers�nlichen Einstellungen zu �ndern und sich auszuloggen.');
@define('USERCONF_ALLOWPUBLISH', 'Rechte: Eintr�ge ver�ffentlichen?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Darf Eintr�ge ver�ffentlichen?');
@define('SIMPLE_FILTERS', 'Vereinfachte Filter');
@define('SIMPLE_FILTERS_DESC', 'Wenn aktiviert, werden Suchformulare und Filteroptionen auf die notwendigen Optionen reduziert. Ist diese Option deaktiviert, werden alle erweiterten Filteroptionen, z.b. beim Eintrags-Editor oder der Mediendatenbank, angezeigt.');
@define('INSTALL_BACKENDPOPUP', 'Popups f�r das Backend verwenden?');
@define('INSTALL_BACKENDPOPUP_DESC', 'Sollen im Backend Popup-Fenster eingesetzt werden? Wenn deaktiviert (standard), werden eingebettete modale Dialoge z.b. f�r die Mediendatenbank und die Kategorieauswahl verwendet.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Popups in speziellen Bereichen erzwingen');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'Wenn Popups generell deaktiviert wurden, kann an speziellen Stellen dennoch der Einsatz von Popups forciert werden, indem die Liste jener Stellen hier aufgef�hrt wird (kommasepariert). Die vollst�ndige Liste ist: ');
@define('SHOW_MEDIA_TOOLBAR', 'Symbolleiste f�r das Mediendatenbank-Popup anzeigen?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Voreinstellungen f�r neue Eintr�ge');
@define('CONF_USE_AUTOSAVE', 'Automatische Speicherung aktivieren');
@define('CONF_USE_AUTOSAVE_DESC', 'Wenn aktiviert, wird der Text von Blog-Eintr�gen regelm��ig automatisch im Session-Speicher des Browsers gesichert. Falls der Browser w�hrend des Schreibens abst�rzt wird beim n�chsten Erzeugen eines Eintrags der verlorene Text wiederhergestellt.');
@define('USERLEVEL_OBSOLETE', 'HINWEIS: Das Attribut "Benutzerrang" wird nur noch zwecks Abw�rtskompatibilit�t zu Plugins ben�tigt. S�mtliche Benutzerrechte werden nun mittels Gruppenzugeh�rigkeiten verwaltet!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Sie haben kein g�ltiges derzeitiges Passwort angegeben und sind daher nicht berechtigt, das neue Passwort festzulegen. Ihre Einstellungen wurden nicht gespeichert.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Der Benutzername darf nicht leer gelassen werden.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Zugriff auf Pers�nliche Einstellungen');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Benutzerlevel �ndern');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: �ndern von "Erstellung von Eintr�gen verbieten"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Recht zur Ver�ffentlichung von Eintr�gen');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Systemweite Konfiguration');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Blog-spezifische Konfiguration');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Eintr�ge verwalten');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Eintr�ge anderer Benutzer verwalten');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Abonnements l�schen');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Eintr�ge importieren');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Kategorien verwalten');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Kategorien anderer Benutzer verwalten');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Kategorien l�schen');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Benutzer verwalten');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Benutzer l�schen');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Benutzerlevel �ndern');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Benutzer eigener Gruppe verwalten');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Benutzer anderer Gruppen verwalten');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Neue Benutzer anlegen');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Benutzergruppen verwalten');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Plugins verwalten');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Plugins anderer Benutzer verwalten');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Mediendaten verwalten');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Medienverzeichnisse verwalten');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Neue Mediendaten hinzuf�gen');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Mediendaten l�schen');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Mediendaten anderer Benutzer verwalten');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Mediendaten ansehen');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Vorschaubilder synchronisieren');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Kommentare verwalten');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Templates verwalten');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Mediendaten anderer Benutzer ansehen');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Verbotene Plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Verbotene Ereignisse');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Der Eintrag wurde gespeichert');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Verschachtelt');
@define('COMMENTS_VIEWMODE_LINEAR', 'Linear');
@define('DISPLAY_COMMENTS_AS', 'Ansicht der Kommentare: ');
@define('COMMENTS_DISABLE', 'Kommentare f�r diesen Eintrag nicht mehr zulassen');
@define('COMMENTS_ENABLE', 'Kommentare f�r diesen Eintrag zulassen');
@define('COMMENTS_CLOSED', 'Die Kommentarfunktion wurde vom Besitzer dieses Blogs in diesem Eintrag deaktiviert. ');
@define('VIEW_EXTENDED_ENTRY', '"%s" vollst�ndig lesen');
@define('TRACKBACK_SPECIFIC', 'Trackback-URL f�r diesen Eintrag');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'ganz anzeigen');
@define('VIEW_TOPICS', '�berschriften anzeigen');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Themen in');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Eintr�ge konnten nicht importiert werden!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Daten merken? ');
@define('SUBMIT_COMMENT', 'Kommentar abschicken');
@define('SUBSCRIBE_COMMENT', 'Abonniere Kommentare');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'Sie k�nnen auch �ber neue Kommentare informiert werden ohne einen zu verfassen. Bitte geben Sie ihre email-Adresse unten ein.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Bei Aktualisierung dieser Kommentare benachrichtigen');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Ihr Browser hat keinen g�ltigen HTTP-Referrer �bermittelt. Dies kann entweder daher kommen, dass Ihr Browser/Proxy nicht korrekt konfiguriert ist, oder dass Sie Opfer einer "Cross Site Request Forgery (XSRF)" waren, mit der man Sie zu ungewollten �nderungen zwingen wollte. Die angeforderte Aktion konnte daher nicht durchgef�hrt werden.');
@define('NAVLINK_AMOUNT', 'Anzahl der Links in der Navigationsleiste (Themes verwalten-Seite muss danach neu geladen werden)');
@define('NAV_LINK_TEXT', 'Text des Navigationsleisten-Links');
@define('NAV_LINK_URL', 'URL des Navigationsleisten-Links');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Kommentar #%s wurde bereits bewilligt.');
@define('COMMENT_EDITED', 'Der gew�hlte Kommentare wurde bearbeitet.');
@define('COMMENTS_WILL_BE_MODERATED', 'Kommentare werden erst nach redaktioneller Pr�fung freigeschaltet!');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Hinweis: Dieser Kommentar wird ohne Bewilligung nicht dargestellt.');
@define('DELETE_COMMENT', 'Kommentar l�schen');
@define('APPROVE_COMMENT', 'Kommentar bewilligen');
@define('REQUIRES_REVIEW', 'Bewilligung notwendig');
@define('COMMENT_APPROVED', 'Kommentar #%s wurde erfolgreich bewilligt.');
@define('COMMENT_DELETED', 'Kommentar #%s wurde erfolgreich gel�scht.');
@define('COMMENTS_MODERATE', 'Kommentare und Trackbacks dieses Eintrags werden moderiert.');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Hinweis: Dieses Trackback wird ohne Bewilligung nicht dargestellt.');
@define('DELETE_TRACKBACK', 'Trackback l�schen');
@define('APPROVE_TRACKBACK', 'Trackback bewilligen');
@define('TRACKBACK_APPROVED', 'Trackback #%s wurde erfolgreich bewilligt.');
@define('TRACKBACK_DELETED', 'Trackback #%s wurde erfolgreich gel�scht.');
@define('COMMENT_NOTOKENMATCH', 'Der Kommentar-Link ist nicht mehr g�ltig, oder Kommentar #%s wurde bereits akzeptiert oder gel�scht.');
@define('TRACKBACK_NOTOKENMATCH', 'Der Kommentar-Link ist nicht mehr g�ltig, oder Trackback #%s wurde bereits akzeptiert oder gel�scht.');
@define('BADTOKEN', 'Ung�ltiger Kommentar-Link');
@define('TOP_LEVEL', 'Ursprung');
@define('VIEW_COMMENT', 'Kommentar ansehen');
@define('VIEW_ENTRY', 'Eintrag ansehen');
@define('LINK_TO_ENTRY', 'Link zum Eintrag');
@define('LINK_TO_REMOTE_ENTRY', 'Link zum Remote-Eintrag');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sende pingback an URI %s...');
@define('PINGBACK_SENT', 'Pingback erfolgreich');
@define('PINGBACK_FAILED', 'Pingback fehlgeschlagen: %s');
@define('PINGBACK_NOT_FOUND', 'Keine pingback-URI gefunden.');
@define('TRACKBACK_SENDING', 'Sende Trackback zu URI %s ...');
@define('TRACKBACK_SENT', 'Trackback erfolgreich!');
@define('TRACKBACK_FAILED', 'Trackback gescheitert: %s');
@define('TRACKBACK_NOT_FOUND', 'Keine Trackback-URI gefunden.');
@define('TRACKBACK_URI_MISMATCH', 'Die automatisch erkannte Trackback-URI gleicht nicht der angegebenen URI.');
@define('TRACKBACK_CHECKING', '�berpr�fe <u>%s</u> auf m�gliche Trackbacks ...');
@define('TRACKBACK_NO_DATA', 'URI enthielt keine Daten');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Kein Trackback: Konnte Verbindung zu %s auf Port %d nicht herstellen.');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sende emails an % Abonnenten ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails versandt!');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hallo %s,\n\nSie haben bei ihrem Blog-Kommentar zu dem Eintrag \"%s\" auf <%s> das Abonnement neuer Kommentare gew�nscht. Um dies zu best�tigen (\"Double Opt In\") klicken Sie bitte diesen Link:\n<%s>\n");
@define('CONFIRMATION_MAIL_TITLE', 'Email-Abonnement neuer Artikel von "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hallo %s,\n\nSie wollen benachrichtigt werden wenn neue Artikel im Blog \"%s\" (<%s>) erscheinen. Um das Abonnement zu best�tigen (\"Double Opt In\") klicken Sie bitte auf diesen Link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hallo %s,\n\nSie haben einen neuen Kommentar zu \"%s\" erstellt. Ihr Kommentar war:\n\n%s\n\nDer Betreiber dieses Blogs hat die Best�tigung per E-Mail gew�nscht, daher m�ssen Sie folgenden Link anklicken:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hallo %s,\n\nSie haben einen neuen Kommentar zu \"%s\" erstellt. Ihr Kommentar war:\n\n%s\n\nDer Betreiber dieses Blogs hat die Best�tigung per E-Mail gew�nscht, daher m�ssen Sie folgenden Link anklicken:\n<%s>\n\nNachdem Sie dies getan haben, k�nnen Sie auf dem Blog jederzeit mit ihrem Namen und E-Mail-Adresse ohne weitere Freischaltung kommentieren.");
@define('SUBSCRIPTION_MAIL_INTRO', 'Im Blog %s ist ein neuer Artikel erschienen:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'Sie erhalten diese e-mail weil Sie neue Artikel im Blog %s abonniert haben. Um das Abonnement zu beenden, bitte hier klicken: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'Neuer Artikel');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Benachrichtigung zu neuem Kommentar des Eintrags "%s"');
@define('SUBSCRIPTION_MAIL', "Hallo %s,\n\nEin neuer Kommentar wurde dem Eintrag hinzugef�gt, den Sie auf \"%s\" namens \"%s\" finden.\nDer Name des Autors ist: %s\n\nSie k�nnen den Eintrag hier finden: %s\n\nSie k�nnen diese Benachrichtung mit folgender URL k�ndigen: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hallo %s,\n\nEin neues Trackback wurde dem Eintrag hinzugef�gt, den Sie auf \"%s\" namens \"%s\" finden.\nDer Name des Autors ist: %s\n\nSie k�nnen den Eintrag hier finden: %s\n\nSie k�nnen diese Benachrichtung mit folgender URL k�ndigen: %s\n");
@define('SIGNATURE', "\n-- \n%s wird betrieben mit Serendipity.\nDas allerbeste Blog, Sie k�nnen es auch nutzen.\nWie das geht, sehen Sie auf <https://s9y.org>.");
@define('SIGNATURE_HTML', "<hr><p>%s wird betrieben mit Serendipity.<br>Das allerbeste Blog, Sie k�nnen es auch nutzen.<br>Wie das geht, sehen Sie auf <a href='https://s9y.org'>s9y.org</a>.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Im Blog %s wurde ein neuer Kommentar zu Eintrag "%s" abgegeben!');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Ein neues Trackback f�r den Blog-Eintrag namens "%s" wurde empfangen.');
@define('YOU_HAVE_THESE_OPTIONS', 'Folgende M�glichkeiten stehen zur Verf�gung:');
@define('NEW_TRACKBACK_TO', 'Neues Trackback f�r');
@define('NEW_COMMENT_TO', 'Neuer Kommentar f�r');

/* ROUTING */
@define('URL_NOT_FOUND', 'Die angeforderte Seite konnte nicht gefunden werden (404). Dies ist die Standardseite.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Bei der Suche nach "%s" konnte kein Eintrag gefunden werden.' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Die Suche nach "%s" ergab %s Treffer:');
@define('SEARCH_TOO_SHORT', 'Die W�rter Ihrer Suchanfrage m�ssen l�nger als 3 Zeichen sein. Sie k�nnen versuchen, ein "*" an diese kurzen W�rter anzuh�ngen (z.B. s9y*) um die Beschr�nkung zu umgehen.');
@define('SEARCH_ERROR', 'Die Suche konnte nicht wie gew�nscht ausgef�hrt werden. Hinweis f�r den Administrator dieses Blogs: Dieser Fehler kann durch fehlende Index-Schl�ssel der Datenbank verursacht werden. Auf MySQL-Systemen muss der Datenbankbenutzer-Account in der Lage sein, Index-Schl�ssel zu erstellen und folgende Abfrage auszuf�hren: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Die genaue Fehlermeldung der Datenbank bei der Suche lautete: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Ihr Kommentar war leer, bitte %sgehen Sie zur�ck%s und versuchen es erneut');
@define('COMMENT_NOT_ADDED', 'Kommentar wurde nicht hinzugef�gt, da Kommentare f�r diesen Eintrag entweder deaktiviert sind, Sie ung�ltige Eingaben gemacht haben oder Anti-Spam-Ma�nahmen angewendet wurden.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Kommentare von');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Die Best�tigung ihres Kommentars wurde erfolgreich verarbeitet.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Ihre Best�tigung des Kommentars konnte nicht verarbeitet werden. Bitte pr�fen Sie den Link, den Sie geklickt haben, auf Vollst�ndigkeit. Falls dieser Link vor mehr als 3 Wochen gesendet wurde, m�ssen Sie ihr Kommentar erneut senden.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Das Abonnement konnte nicht best�tigt werden. Bitte pr�fen Sie ob der angeklickte Link vollst�ndig ist. Wenn der Link vor mehr als drei Wochen zugesandt wurde, musst Du eine neue Best�tigungsmail anfordern.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Die Best�tigung des Abonnements der Kommentarbenachrichtigung wurde erfolgreich verarbeitet.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', 'Das Abonnement f�r "%s" wurde erfolgreich gel�scht. Sie werden nicht mehr �ber neue Artikel informiert.');
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Das Abonnement f�r die email %s konnte nicht gel�scht werden. Bitte pr�fen Sie den Link auf den Sie geklickt haben auf Vollst�ndigkeit.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', 'Das Abonnement f�r die email %s f�r "%s" wurde erfolgreich gel�scht. Sie werden nicht mehr �ber neue Kommentare informiert.');
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Das Abonnement konnte nicht gel�scht werden. Bitte pr�fen Sie den Link auf den Sie geklickt haben auf Vollst�ndigkeit.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Die Anforderung f�r ein Blog-Abonnement wurde empfangen. Eine email wird an %s gesandt um das Abonnement zu best�tigen ("Double Opt In").');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'Das Abonnement f�r "%s" ist best�tigt. Eine Zusammenfassung eines neuen Artikels wird Ihnen zugesandt. Sie k�nnen das Abonnement jederzeit mit dem in jeder Mail befindlichen Link abbestellen.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Das Abonnement ist fehlgeschlagen weil es bereits ein aktives Abonnement unter dieser Adresse f�r "%s" gibt.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Das Abonnement ist fehlgeschlagen. Bitte pr�fen Sie die eingegebene e-mail-Adresse.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email-Abonnement neuer Artikel');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'Um �ber neue Artikel informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_AUTHOR', 'Um �ber neue Artikel von "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_CATEGORY', 'Um �ber neue Artikel in der Kategorie "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_OPTIN', 'Eine email mit einem Best�tigungslink wird an diese Adresse verschickt. Klicken Sie auf diesen Link um das Abonnement zu best�tigen.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'Um �ber neue Artikel von "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'Um �ber neue Artikel in der Kategorie "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Falsche Konfigurationsangaben f�r die Option "%s". Diese muss vom Typ "%s" sein!');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Zeigt eine Liste der Kategorien');
@define('CATEGORIES_PARENT_BASE', 'Zeige nur Kategorien unterhalb ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Sie k�nnen eine Eltern-Kategorie definieren, so dass nur die Unterkategorien derselben angezeigt werden.');
@define('CATEGORIES_HIDE_PARALLEL', 'Kategorien verstecken, die nicht Teil des vom Besucher gew�hlten Kategoriebaums sind.');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Falls Sie Kategorien verstecken wollen, die innerhalb einer parallelen Baumstruktur abgebildet sind, muss diese Option aktiviert werden. Diese Einstellung macht haupts�chlich dann Sinn, wenn sie in einem Multi-Blog-System des "Eigenschaften/Templates von Kategorien"-Plugins verwendet werden.');
@define('CATEGORIES_HIDE_PARENT', 'Die gew�hlte Oberkategorie verstecken?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Falls Sie die Liste der Kategorien auf gewisse Unterkategorien einschr�nken, wird standardm��ig die Oberkategorie mit angezeigt. Wenn diese Option deaktiviert wird, kann dies verhindert werden.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Smarty-Templating aktivieren?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Falls diese Option aktiviert ist, wird das Kategorie-Plugin die Liste mittels Smarty-Templates ausgeben. Durch die Aktivierung der Option kann dann das Layout mittels der Template-Datei "plugin_categories.tpl" angepasst werden. Die Aktivierung dieser Option bringt Performance-Einbu�en mit sich, daher sollten Sie die Option nur dann aktivieren, wenn Ihnen die Anpassungen wichtig sind.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Anzahl der Eintr�ge pro Kategorie anzeigen?');
@define('CATEGORY_PLUGIN_SHOWALL', 'Zeige einen Link zu "Alle Kategorien"?');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'Falls aktiviert wird Besuchern ein Link angezeigt, um das Blog ohne Einschr�nkung der Kategorien darzustellen.');
@define('CATEGORIES_ALLOW_SELECT', 'Besuchern erlauben, mehrere Kategorien gleichzeitig darzustellen?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Falls diese Option aktiviert ist, wird eine Auswahlbox neben jeder Kategorie angezeigt, damit Besucher mehrere Kategorien gleichzeitig ausw�hlen k�nnen.');
@define('CATEGORIES_TO_FETCH', 'Quelle der Kategorien');
@define('CATEGORIES_TO_FETCH_DESC', 'Kategorien welcher Autoren einbeziehen?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zeigt die Liste aller Autoren');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Anzahl der Artikel neben dem Autor-Namen anzeigen? ');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Wenn diese Option aktiviert ist, wird die Anzahl der von diesem Autor verfassten Artikel in Klammern neben seinem Namen angezeigt.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Nur Autoren mit mindestens X Beitr�gen anzeigen');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Syndication');
@define('SHOWS_RSS_BLAHBLAH', 'Zeigt die RSS Syndication-Links');
@define('SYNDICATE_THIS_BLOG', 'Blog abonnieren');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed-Format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Hier kann das Standard-Format der Feeds gew�hlt werden. Beide Formate werden heutzutage von den meisten Feedreader unterst�tzt.');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Kommentar-Feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Bindet einen zus�tzlichen Link zum Kommentar-Feed ein. Dies ist meist eher f�r die Blog-Autoren interessant.');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s Feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 Kommentar');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed-Icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Zeigt ein (gro�es) Bild anstelle eines Textlinks an. Auf "none" stellen um dies zu deaktivieren oder auf "feedburner" stellen, wenn bei der Verwendung von FeedBurner dessen Symbol genutzt werden soll.');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Zeigt den subToMe button, mit dem Feed-Abonnements einfacher f�r Besucher verwaltet werden k�nnen.');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Individuelle Feed-URL aktivieren?');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'Falls der Link zu der individuellen Feed-URL der globalen Konfiguration f�hren soll, muss diese Option aktiviert werden.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Angezeigter Name f�r "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Optional benutzerdefinierten Namen f�r die Feeds eingeben (Vorgabe ist "feed" wenn leer)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Anzeigename f�r "Kommentar" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Optional benutzerdefinierten Namen f�r den Kommentar-Feed eingeben');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner-ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'Die ID des Feeds, der ver�ffentlicht werden soll');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner-Bild');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Dateiname des Bildes, das dargestellt werden soll (leer lassen f�r einen Z�hler). Die Datei muss auf feedburner.com vorhanden sein, z.B. fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner Titel');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Titel (falls vorhanden) der neben dem Bild angezeigt werden soll');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner Bildunterschrift');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (falls vorhanden), der angezeigt werden soll, wenn Sie den Mauszeiger auf das Bild bewegen');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Auf "none" setzen um nur einen Textlink anzuzeigen.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog-Abonnement per e-mail');
@define('PLUGIN_SUBSCRIBE_DESC', 'Erlaubt einem Benutzer den Blog zu abonnieren. Er erh�lt eine email wenn ein neuer Artikel ver�ffentlicht wird mit einem Link zum Abbestellen');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Titel');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Hier den Titel eintragen der in der Sidebar erscheint:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Abonnement per e-mail');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'Welcher Text soll im Linktext erscheinen?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Abonnement per e-mail');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Abonnement-Icon');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Auf "none" setzen wenn nur ein Textlink gew�nscht ist.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Versteckt den Archiv-Link, wenn es keine Eintr�ge f�r einen Zeitraum gab (ben�tigt das Z�hlen der Eintr�ge)');
@define('ARCHIVE_COUNT', 'Anzahl der Eintr�ge im Archiv');
@define('ARCHIVE_COUNT_DESC', 'Die Anzahl der angezeigten Monate, Wochen oder Tage');
@define('ARCHIVE_FREQUENCY', 'Kalenderintervall');
@define('ARCHIVE_FREQUENCY_DESC', 'Das Kalenderintervall, welches zwischen den einzelnen Eintr�gen in der Liste verwendet werden soll');
@define('BROWSE_ARCHIVES', 'Die Archive durchst�bern');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zeige "Serendipity" als Text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Zeigt den Text "Serendipity Blog" an');
@define('POWERED_BY_SHOW_IMAGE', 'Zeige "Serendipity" als Logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Stellt das Serendipity-Logo dar');
@define('ADVERTISES_BLAHBLAH', 'Zeigt einen Hinweis darauf, dass Serendipity als Blog-Software verwendet wird');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'https zum Login verwenden');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Erstellt eine https-URL als Login-Link zum Blog. Der Webserver muss dies unterst�tzen!');
@define('SUPERUSER', 'Verwaltung des Blogs');
@define('SUPERUSER_OPEN_ADMIN', 'Administrationsbereich');
@define('SUPERUSER_OPEN_LOGIN', 'Login');
@define('ALLOWS_YOU_BLAHBLAH', 'Zeigt einen Link zur Verwaltung des Blogs in der Seitenleiste an');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalender');
@define('CALENDAR_BOW_DESC', 'Welcher Tag gibt den Wochenanfang an? Standard ist Montag.');
@define('QUICKJUMP_CALENDAR', 'QuickJump Kalender');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Anfang der Woche');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Plugin-Schnittstelle aktivieren');
@define('CALENDAR_EXTEVENT_DESC', 'Falls aktiviert, so k�nnen andere Plugins in die Darstellung des Kalenders eingreifen. Aktivieren Sie diese Option nur, wenn Sie ein solches Plugin installiert haben, andernfalls haben Sie nur unn�tige Performance-Einschr�nkungen.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Nach Eintr�gen suchen');
@define('SEARCH_FULLENTRY', 'Gesamten Eintrag anzeigen');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Zeigt einen kleinen Klotz HTML-Code in einer der Seitenleisten an');
@define('THE_NUGGET', 'Der HTML-Klotz!');
@define('BACKEND_TITLE', 'Zus�tzlicher Informationstext, der auf der Plugin-Oberfl�che dargestellt wird');
@define('BACKEND_TITLE_FOR_NUGGET', 'An dieser Stelle k�nnen Sie einen eigenen Text angeben, der auf der Plugin-Konfigurationsoberfl�che zus�tzlich angezeigt wird. Denn falls Sie mehrere HTML-Kl�tze mit leerem Titel angelegt haben, ist es gegebenenfalls schwierig, diese auseinanderzuhalten.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Top Exits/Referrers als Link anzeigen?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nein": Exit/Referrer-URLs werden als Text angezeigt, um Googlespam zu verhindern. "Ja": Exit/Referrer-URLs werden als Hyperlinks angezeigt. "Default": Die Einstellung aus der globalen Konfiguration wird �bernommen (empfohlen).');
@define('HAVE_TO_BE_LOGGED_ON', 'Sie m�ssen angemeldet sein, um diese Seite zu sehen');
@define('WELCOME_TO_ADMIN', 'Willkommen zur Serendipity Administrationsoberfl�che!');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity ben�tigt eine PHP-Version >= %2$s - Sie benutzen eine �ltere Version (%1$s) und m�ssen auf eine neuere upgraden. Die meisten Provider gestatten den Wechsel auf neuere PHP-Versionen �ber einen Schalter in der Admin-Oberfl�che oder eine Anweisung in der .htaccess.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Gro�es Bild');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Zeigt ein (gro�es) Bild oberhalb der Seitenleiste. Hier kann eine volle (oder absolut referenzierte) URL eingetragen werden oder "none" f�r einen Textlink (bisheriger Standard)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(ist eine absolute URL mit http://... eingetragen, wird diese URL wird als Umleitungsziel verwendet, wenn die "Erzwingen" Option f�r FeedBurner eingeschaltet ist. Hinweis: Das kann auch eine URL sein, die auf andere Ziele als FeedBurner verweist. F�r die neuen Google FeedBurner Feeds muss http://feeds2.feedburner.com/yourfeedname eigetragen werden)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', '(Wenn diese Option auf "Erzwingen" gesetzt ist, wird der RSS Feed an einen anderen Webservice weitergeleitet, wie z.B. (aber nicht nur) FeedBurner. Siehe die untenstehende Option "Feedburner ID" um die absolute URL einzutragen)');
@define('MEDIA_PROPERTY_COMMENT1', 'Kurzer Kommentar');
@define('MEDIA_PROPERTY_COMMENT2', 'Langer Kommentar');
@define('DELETE_SELECTED_ENTRIES', 'Markierte Eintr�ge l�schen');
@define('MEDIA_PROPERTY_ALT', 'Bildinhalt (im ALT-Attribut)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titel');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ist noch nicht eingerichtet. Bitte jetzt <a href="%s">installieren</a>.');
@define('COMMENT_ADDED_CLICK', 'Klicken Sie %shier, um zu den Kommentaren zur�ckzukehren%s und %shier, um das Fenster zu schlie�en%s.');
@define('COMMENT_NOT_ADDED_CLICK', 'Klicken Sie %shier, um zu den Kommentaren zur�ckzukehren%s und %shier, um das Fenster zu schlie�en%s.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Laufzeit');
@define('MEDIA_PROPERTY_DATE', 'Verkn�pftes Datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Die URL der verschobenen Verzeichnisse wurde in %s Eintr�gen angepasst.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'Bei Nicht-MySQL Datenbanken ist es nicht m�glich, jeden Blogeintrag durchzugehen und das alte Verzeichnis durch das neue zu ersetzen. Daher m�ssen Sie manuell bestehende Eintr�ge �berarbeiten und die neuen URLs eintragen. Sie k�nnen nat�rlich auch das Verzeichnis an seinen alten Platz zur�ckschieben, falls dies zu viel Aufwand bedeuten w�rde.');
@define('TRACKBACK_SIZE', 'URI ist gr��er als die erlaubten %s Bytes.');
@define('CLICK_FILE_TO_INSERT', 'Auf eine Datei klicken, um diese einzuf�gen:');
@define('SELECT_FILE', 'Bitte w�hlen Sie eine Datei');
@define('MANAGE_IMAGES', 'Bilder verwalten');
@define('WORD_NEW', 'Neu');
@define('WORD_OR', 'Oder');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Externe Services');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Features');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Vollst�ndige Modifikationen');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Ansichten');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Artikelbezogen');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Benutzerverwaltung');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta-Informationen');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Themes');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Features');
@define('PLUGIN_GROUP_IMAGES', 'Bilder / Medien');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Textformatierungen');
@define('PLUGIN_GROUP_STATISTICS', 'Statistik');
@define('IMPORT_WELCOME', 'Willkommen im Import-Bereich von Serendipity!');
@define('USER_SELF_INFO', 'Angemeldet als %s (%s)');
@define('IMPORT_WHAT_CAN', 'Hier k�nnen Daten von anderen Weblog-Installationen importiert werden.');
@define('IMPORT_SELECT', 'Bitte die Art der Software ausw�hlen, von der die Daten importiert werden sollen');
@define('MANAGE_STYLES', 'Themes verwalten');
@define('SELECT_A_PLUGIN_TO_ADD', 'Plugin zur Installation w�hlen');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Es folgt eine Liste installierter Plugins');
@define('PENDING_CONFIRMATION', 'Wartet auf Best�tigung');
@define('PENDING_MODERATION', 'Wartet auf Moderation');
@define('ABORT_NOW', 'Abbrechen');
@define('DELETE_SELECTED_COMMENTS', 'Markierte Kommentare l�schen');
@define('MODERATE_SELECTED_COMMENTS', 'Markierte Kommentare freischalten');
@define('FIND_MEDIA', 'Mediendaten durchsuchen');
@define('TEMPLATE_OPTIONS', 'Theme-Optionen');
@define('BULKMOVE_INFO', 'Gleichzeitiges Verschieben mehrerer Dateien');
@define('BULKMOVE_INFO_DESC', 'Sie k�nnen mehrere Dateien ausw�hlen, um sie gleichzeitig an einen neuen Ort zu verschieben. <strong>Hinweis:</strong> Diese Aktion kann nicht r�ckg�ngig gemacht werden, genau wie das gleichzeitige L�schen mehrerer Dateien. Alle ausgew�hlten Dateien werden physikalisch verschoben; Blogeintr�ge, welche diese Dateien referenzieren, werden umgeschrieben, um auf den neuen Ort zu verweisen.');
@define('UPDATE_ALL', 'Alles updaten');
@define('START_UPDATE', 'Starte Update ...');
@define('ERROR_FILE_NOT_EXISTS', ' Alte Datei existiert nicht!');
@define('ERROR_SOMETHING', 'Fehler: Irgend etwas stimmt nicht.');
@define('DIRECT_LINK', 'Direkter Link zu diesem Eintrag');
@define('SELECT_TEMPLATE', 'W�hlen Sie das Theme f�r das Blog');
@define('DATABASE_ERROR', 'Serendipity Fehler: Kann keine Verbindung zur Datenbank herstellen - wird beendet.');
@define('LIMIT_TO_NUMBER', 'Wie viele Elemente sollen angezeigt werden?');
@define('DIRECTORIES_AVAILABLE', 'In der Liste der verf�gbaren Unterverzeichnisse kann durch einen Klick auf einen Verzeichnisnamen ein neuer Ordner unterhalb des gew�hlten erstellt werden.');
@define('CATEGORY_INDEX', 'Es folgt eine Liste von verf�gbaren Kategorien');
@define('PAGE_BROWSE_PLUGINS', 'Seite %s von %s, insgesamt %s Plugins.');
@define('CHARSET_NATIVE', 'Nationaler Zeichensatz');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Das XML-RPC Interface zu Serendipity wird nicht l�nger standardm��ig aktiviert, da h�ufige Sicherheitsprobleme mit der daf�r verwendeten Bibliothek auftraten und da es nur von wenigen Personen benutzt wurde. Daher m�ssen Sie das XML-RPC Plugin installieren, um die XML-RPC API weiterhin zu nutzen. Die URL in Ihren Anwendungen wird sich dadurch nicht �ndern. Sobald das genannte Plugin installiert ist, kann die XML-RPC API wieder vollst�ndig genutzt werden.');
@define('AUTHORS_ALLOW_SELECT', 'Erm�glicht Besuchern, Eintr�ge mehrerer Autoren gleichzeitig darzustellen');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Falls diese Option aktiviert ist, wird eine Auswahlbox neben jedem Autor angezeigt, damit Besucher mehrere Autoren gleichzeitig ausw�hlen k�nnen.');
@define('PREFERENCE_USE_JS', 'Fortgeschrittene JavaScripts einsetzen?');
@define('PREFERENCE_USE_JS_DESC', 'Falls aktiviert, werden erweiterte JavaScript Funktionalit�ten in einigen Bereichen freigeschaltet. Z.B. in der Plugin-Konfiguration kann Drag+Drop benutzt werden, um leichter �nderungen vorzunehmen.');
@define('PREFERENCE_USE_JS_WARNING', '(Diese Seite setzt fortgeschrittene JavaScripts ein. Falls dabei Probleme in der Benutzbarkeit auftreten, deaktivieren Sie bitte die Option zum Einsatz dieser JavaScripts im Men�punkt "Eigene Einstellungen", oder deaktivieren Sie JavaScript in Ihrem Browser.)');
@define('PLUGIN_GROUP_ALL', 'Alle Kategorien');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Wartet auf Best�tigung');
@define('NO_COMMENT_SUBSCRIPTION', 'Nicht abonniert');
