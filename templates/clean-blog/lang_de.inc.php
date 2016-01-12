<?php
// General
@define('ERROR_404', 'Fehler 404 - Die angeforderte Seite wurde nicht gefunden.');
@define('SEARCH_WHAT','Wonach soll gesucht werden?'); //used on quicksearch modal
@define('SEARCH','Suche');
@define('TOGGLE_NAV','Navigation'); //only seen by screen readers
@define('CLOSE','Schließen'); //close button on search form
@define('READ_MORE','Mehr lesen');

//Option groups and instructions
@define('THEME_HEADERS', 'Header-Bilder');
@define('THEME_SOCIAL_LINKS', 'Social-Links');
@define('THEME_PAGE_OPTIONS', 'Seiten-Optionen');
@define('THEME_NAVIGATION', 'Navigations-Optionen');
@define('THEME_README','Lies mich');
@define('THEME_EP_YES','<p>Das Plugin Erweiterte Eigenschaften für Einträge (serendipity_event_entryproperties) wird benötigt. Es ist installiert und aktiv.</p>');
@define('THEME_EP_NO','<p class="serendipity_msg_important">Das Plugin Erweiterte Eigenschaften für Einträge (serendipity_event_entryproperties) wird benötigt. Es ist entweder nicht installiert oder inaktiv. Bitte das Plugin installieren, um alle Features dieses Themes voll zu nutzen.</p>');
@define('THEME_INSTRUCTIONS','<p>Dieses Theme nutzt breite Header-Bilder für unterschiedliche Seitentypen. Standardbilder werden mit dem Theme geliefert, diese sind 1900px breit. Diese Standardbilder können unten in den Einstellungen ausgetauscht werden. Zusaätzlich zu den Standardbildern können für jeden Eintrag und jede statische Seite eigene Header-Bilder definiert werden.</p> <p>Das Design dieses Theme sieht die Nutzung eines sekundären Untertitels oder einer Verfasserzeile direkt unter dem Eintragstitel vor. Dieser Untertitel und das Eintragsbild können im Abschnitt "Erweiterte Optionen" beim Anlegen oder Bearbeiten einer Seite geändert werden. Optional kann man das Theme so einstellen, dass die ersten 70 Zeichen des Eintrags als Untertitel verwendet werden, wenn kein Untertitel angegeben wurde.</p> <p>Dieses Theme bietet keine Seitenleisten, kann jedoch optional die Seitenleisten-Plugins Kategorien und Tags in der Archiv-Seite ausgeben. Siehe "' . THEME_PAGE_OPTIONS . '" unten.</p> <p>Falls das Avatar-Plugin (serendipity_event_gravatar) verwendet wird, sollte dessen Option "Smarty Tag erzeugen" für eine optimale Darstellung auf "Ja" gesetzt werden.</p> <p>Die Option "Erweiteres Smarty" in serendipity_event_freetag sollte für eine schönere Darstellung im Eintragsfuß ebenfalls auf "Ja" gesetzt sein.</p>');
@define('THEME_ENTRY_PROPERTIES_HEADING','Eintragseigenschaften des Clean Blog-Themes');
@define('THEME_CUSTOM_FIELD_HEADING', 'Freie Felder für Einträge');
@define('THEME_CUSTOM_FIELD_DEFINITION','Diese optionalen Felder sind nur verfügbar, wenn dieses Theme (clean blog) verwendet wird. Das Ereignis-Plugin serendipity_event_entryproperties (Erweiterte Eigenschaften für Einträge) muss installiert sein, um diese Felder zu verwenden. Der Eintrags-Untertitel wird unter dem Titel des Eintrags ausgegeben und sollte eine kurze Zusammenfassung des Eintrags enthalten. Das Header-Bild eines Eintrags überschreibt das Standard-Header-Bild für Einträge.');
@define('THEME_ENTRY_SUBTITLE','Untertitel des Eintrags');
@define('THEME_ENTRY_HEADER_IMAGE','Header-Bild der Eintrags');

// Header Images
@define('DEFAULT_HEADER_IMAGE', 'Standard-Header-Bild');
@define('DEFAULT_HEADER_IMAGE_DESC', 'Dieses Bild wird auf Seiten verwendet, die kein eigenes Header-Bild definieren.');
@define('ENTRY_DEFAULT_HEADER_IMAGE', 'Standard-Header-Bild für Einträge');
@define('ENTRY_DEFAULT_HEADER_IMAGE_DESC', 'Dieses Bild wird für Einträge verwendet, die kein eigenes Header-Bild definieren.');
@define('STATICPAGE_DEFAULT_HEADER_IMAGE', 'Standard-Header-Bild für statische Seiten');
@define('STATICPAGE_DEFAULT_HEADER_IMAGE_DESC', 'Dieses Bild wird für statische Seiten verwendet, die kein eigenes Header-Bild definieren.');
@define('STATICPAGE_SPECIFIC_HEADER_IMAGE','Header-Bild für statische Seiten (optional)');
@define('CONTACTFORM_HEADER_IMAGE', 'Header-Bild für das Kontaktformular');
@define('ARCHIVE_HEADER_IMAGE', 'Header-Bild für die Archivseite');

//Page Options
@define('HOME_LINK_TEXT', 'Text des Home-Links');
@define('ENTRY_DATE_FORMAT','Datumsformat für Einträge');
@define('COMMENT_TIME_FORMAT','Zeitformat für Kommentare und Trackbacks');
@define('WORDS','Textfassung');
@define('TIMESTAMP','Zeitstempel');
@define('SUBTITLE_USE_ENTRYBODY','Die ersten 70 Zeichen des Einrags als Untertitel ausgeben, wenn das Feld Untertitel leer gelassen wurde?');
@define('ENTRYBODY_DETAILED_ONLY','Eintags-Inhalt nur in der Einzelansicht eines Eintrags anzeigen');
@define('SHOW_COMMENT_LINK','Zeige Link zu den Kommentaren des Eintrags');
@define('CATEGORIES_ON_ARCHIVE', 'Kategorien auf der Archivseite anzeigen');
@define('CATEGORIES_ON_ARCHIVE_DESC', 'Das Seitenleisten-Plugin Kategorien (serendipity_plugin_categories) muss installiert und die Option "Smarty-Templating aktivieren?" aktiviert sein, damit Kategorien auf der Archiv-Seite angezeigt werden.');
@define('TAGS_ON_ARCHIVE', 'Tags auf der Archivseite anzeigen');
@define('TAGS_ON_ARCHIVE_DESC', 'Das Seitenleisten-Plugin Getaggte Artikel (serendipity_plugin_freetag) muss installiert sein und die Option "Sidebar template" muss auf "archive_freetag.tpl" gesetzt werden, damit Tags auf der Archiv-Seite angezeigt werden.');

//Static Pages
@define('STATIC_SHOW_AUTHOR_TEXT','Autorennamen anzeigen');
@define('STATIC_SHOW_DATE_TEXT','Datum anzeigen');

//Navigation
@define('USE_CORENAV', 'Globale Navigation verwenden?');

//Social media
@define('TWITTER_URL','Twitter-URL. Icon wird nicht angezeigt, falls leer.');
@define('FACEBOOK_URL','Facebook-URL. Icon wird nicht angezeigt, falls leer.');
@define('RSS_URL','RSS feed-URL. Icon wird nicht angezeigt, falls leer.');
@define('GITHUB_URL','GitHub-URL. Icon wird nicht angezeigt, falls leer.');
@define('INSTAGRAM_URL','Instagram-URL. Icon wird nicht angezeigt, falls leer.');
@define('PINTEREST_URL','Pinterest-URL. Icon wird nicht angezeigt, falls leer.');
@define('COPYRIGHT', 'Copyright');

//time ago in words function
@define('ELAPSED_LESS_THAN_MINUTE_AGO','Vor weniger als einer Minute');
@define('ELAPSED_ONE_MINUTE_AGO','Vor einer Minute');
@define('ELAPSED_ONE_DAY_AGO','Vor einem Tag');
@define('ELAPSED_MINUTES_AGO','Vor %s Minuten');
@define('ELAPSED_HOURS_AGO','Vor %s Stunden');
@define('ELAPSED_DAYS_AGO','Vor %s Tagen');
@define('ELAPSED_MONTHS_AGO','Vor %s Monaten');
@define('ELAPSED_YEARS_AGO','Vor %s Jahren'); //not currently using this, but defining just in case
@define('ELAPSED_ABOUT_ONE_HOUR_AGO','Vor ungefähr einer Stunde'); // greater than 45 minutes, less than 90 minutes
@define('ELAPSED_ABOUT_ONE_MONTH_AGO','Vor ungefähr einem Monat'); // greater than 30 days, less than 60 days
@define('ELAPSED_ABOUT_ONE_YEAR_AGO','Vor ungefähr einem Jahr'); // greater than one year, less than 2 years
@define('ELAPSED_OVER_YEARS_AGO','Vor mehr als %s Jahren');// greater than 2 years
