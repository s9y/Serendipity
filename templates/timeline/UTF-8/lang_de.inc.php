<?php
// General
@define('ERROR_404', 'Fehler 404 - Die angeforderte Seite wurde nicht gefunden.');
@define('SEARCH_WHAT','Wonach soll gesucht werden?'); //used on quicksearch modal
@define('SEARCH','Suche');
@define('TOGGLE_NAV','Navigation'); //only seen by screen readers
@define('CLOSE','Schließen'); //close button on search form
@define('READ_MORE','Mehr lesen');

//Option groups and instructions
@define('THEME_SOCIAL_LINKS', 'Social-Links');
@define('THEME_PAGE_OPTIONS', 'Seiten-Optionen');
@define('THEME_NAVIGATION', 'Navigations-Optionen');
@define('THEME_README','Lies mich');
@define('THEME_IDENTITY','Seiten-Identität');
@define('THEME_EP_YES','<p class="msg_success">Das Plugin Erweiterte Eigenschaften für Einträge (serendipity_event_entryproperties) wird benötigt. Es ist installiert und aktiv.</p>');
@define('THEME_EP_NO','<p class="msg_error">Das Plugin Erweiterte Eigenschaften für Einträge (serendipity_event_entryproperties) wird benötigt. Es ist entweder nicht installiert oder inaktiv. Bitte das Plugin installieren, um alle Features dieses Themes voll zu nutzen.</p>');
@define('THEME_INSTRUCTIONS','<p>This theme displays blog posts on a linear timeline.  Each group of month titles can also be displayed or hidden on the timeline.</p><p>This theme uses a right and bottom sidebar.  Either, or both sidebars can be disabled by deleting sidebar plugins or relocating sidebar plugins to the sidebar colum labeled "hidden" in plugin configuration.</p><p>This theme can be configured to display categories and entry tags from the respective sidebar plugins on the archive page.  See "' . THEME_PAGE_OPTIONS . '" below.</p><p>If using the avatar plugin (serendipity_event_gravatar), configure option "Produce smarty tag = yes" for best display of comment avatars.</p><p>Configure serendipity_event_freetag option "Extended Smarty = yes" for a nicer display of tags in the entry footer.</p>');
@define('THEME_CUSTOM_FIELD_HEADING', 'Freie Felder für Einträge');
@define('THEME_CUSTOM_FIELD_DEFINITION','These optional field(s) are only available when using this theme (timeline).  The event plugin serendipity_event_entryproperties (extended properties for entries) must also be installed to use these field(s).  The entry image will appear on both the timeline, and at the top of each detailed entry.');
@define('THEME_ENTRY_IMAGE','Entry Image.');
@define('THEME_DEMO_AVAILBLE', 'Eine komplette englische Anleitung zur <a href="http://www.optional-necessity.com/demo/timeline/archives/13-Using-the-Timeline-theme.html">Konfiguration und Benutzung von Timeline</a> findet sich in der <a href="http://www.optional-necessity.com/demo/timeline/">Timeline theme demo</a>.');

//Page Options
@define('USE_GOOGLEFONTS', 'Google Webfonts einbinden?');
@define('THEME_COLORSET', 'Colorset');
@define('THEME_SKINSET', 'Theme skin');
@define('HEADER_IMG','Optional Header Image.   Leave blank to use Blog Name.');
@define('HEADER_IMG_DESC', 'Header image recommended size: 150px x 40px.');
@define('ENTRY_DATE_FORMAT','Datumsformat für Einträge');
@define('COMMENT_TIME_FORMAT','Zeitformat für Kommentare und Trackbacks');
@define('WORDS','Textfassung');
@define('TIMESTAMP','Zeitstempel');
@define('DISPLAY_AS_TIMELINE','Timeline-Format verwenden');
@define('DISPLAY_AS_TIMELINE_DESC','Timeline-Format für Blog-Posts verwenden. Falls Nein werden Blog-Posts im üblichen Blog-Format ausgegeben.');
@define('MONTHS_ON_TIMELINE','Show month names on timeline');
@define('MONTHS_ON_TIMELINE_DESC','Month name will appear as a heading on the timeline for each month of entries.');
@define('MONTHS_ON_TIMELINE_FORMAT','Timeline month format');
@define('CATEGORIES_ON_ARCHIVE', 'Kategorien auf der Archivseite anzeigen');
@define('CATEGORIES_ON_ARCHIVE_DESC', 'Das Seitenleisten-Plugin Kategorien (serendipity_plugin_categories) muss installiert und die Option "Smarty-Templating aktivieren?" aktiviert sein, damit Kategorien auf der Archiv-Seite angezeigt werden.');
@define('CATEGORY_RSS_ON_ARCHIVE','Show RSS icon next to each category on archive page');
@define('TAGS_ON_ARCHIVE', 'Tags auf der Archivseite anzeigen');
@define('TAGS_ON_ARCHIVE_DESC', 'Das Seitenleisten-Plugin Getaggte Artikel (serendipity_plugin_freetag) muss installiert sein und die Option "Sidebar template" muss auf "archive_freetag.tpl" gesetzt werden, damit Tags auf der Archiv-Seite angezeigt werden.');

//Navigation
@define('USE_CORENAV', 'Globale Navigation verwenden?');

//Social media
@define('SOCIAL_ICONS_AMOUNT', 'Enter number of social media links');
@define('SOCIAL_NETWORK_SERVICE', 'Select social media service for link');
@define('SOCIAL_ICON_URL', 'URL for social media service link');
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

//Static Pages
@define('STATIC_SHOW_AUTHOR_TEXT','Autorennamen anzeigen');
@define('STATIC_SHOW_DATE_TEXT','Datum anzeigen');
@define('STATIC_SHOW_SIDEBARS_TEXT','Show sidebars?');