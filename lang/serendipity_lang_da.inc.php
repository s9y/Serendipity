<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) by Tom Sommer, <ts@dreamcoder.dk>
# Thanks to: Jeppe Lund, <nocture@nocture.dk>
#            Robert Piil, <robert@piil.org>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'da_DK.ISO8859-1, da_DK.ISO-8859-1, danish, da, da_DK');
@define('DATE_FORMAT_ENTRY', '%A d. %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'da');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Type');
@define('PREVIEW', 'Vis');
@define('DATE', 'Dato');
@define('TIME', 'Time');
@define('APPEARANCE', 'Udseende');
@define('LOGIN', 'Login');
@define('LOGOUT', 'Log ud');
@define('LOGGEDOUT', 'Logget ud.');
@define('CREATE', 'Opret');
@define('BACK', 'Tilbage');
@define('FORWARD', 'Fremad');
@define('ANONYMOUS', 'Annonym');
@define('RECENT', 'Nyere...');
@define('OLDER', 'Ældre...');
@define('DONE', 'Færdig');
@define('TITLE', 'Titel');
@define('DESCRIPTION', 'Beskrivelse');
@define('PLACEMENT', 'Placering');
@define('DELETE', 'Slet');
@define('SAVE', 'Gem');
@define('UP', 'OP');
@define('DOWN', 'NED');
@define('PREVIOUS', 'Forrige');
@define('NEXT', 'Næste');
@define('ENTRIES', 'artikler');
@define('CATEGORIES', 'Kategorier');
@define('NAME', 'Navn');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Hjemmeside');
@define('COMMENT', 'Kommentar');
@define('VIEW', 'Vis');
@define('HIDE', 'Skjul');
@define('WEEK', 'Uge');
@define('WEEKS', 'Uger');
@define('MONTHS', 'Månder');
@define('DAYS', 'Dage');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Succes');
@define('COMMENTS', 'Kommentarer');
@define('ADD_COMMENT', 'Tilføj kommentar');
@define('NO_COMMENTS', 'Ingen kommentarer');
@define('POSTED_BY', 'Skrevet af');
@define('ON', 'aktiv');
@define('NO_CATEGORY', 'Ingen kategori');
@define('CATEGORY', 'Kategori');
@define('EDIT', 'Rediger');
@define('GO', 'Begynd!');
@define('YES', 'Ja');
@define('NO', 'Nej');
@define('NOT_REALLY', 'Egentlig ikke...');
@define('DUMP_IT', 'Smid den ud!');
@define('IN', 'i');
@define('AT', 'kl');
@define('LEFT', 'venstre');
@define('RIGHT', 'højre');
@define('CENTER', 'center');
@define('ARCHIVES', 'Arkiver');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Søgning');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Ingen Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Uddrag');
@define('TRACKED', 'Tracked');
@define('USER', 'Bruger');
@define('USERNAME', 'Brugernavn');
@define('PASSWORD', 'Adgangskode');
@define('HIDDEN', 'skjult');
@define('IMAGE', 'Billede');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Forfatter');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'version');
@define('INSTALL', 'Installer');
@define('REPLY', 'Svar');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Fejl');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'gennemtving');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administration');
@define('ADMIN_FRONTPAGE', 'Forside');
@define('QUOTE', 'Citer');
@define('NONE', 'ingen');
@define('GROUP', 'Group');
@define('AUTHORS', 'Forfattere');
@define('UPGRADE', 'Opgrader');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Alle forfattere');
@define('PREVIOUS_PAGE', 'forrige side');
@define('NEXT_PAGE', 'næste side');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Alle kategorier');
@define('LAST_UPDATED', 'Sidst opdateret');
@define('IP_ADDRESS', 'IP-adresse');
@define('CHARSET', 'Karaktersæt');
@define('REFERER', 'Henvisende side');
@define('APPROVE', 'Godkend');
@define('NOT_FOUND', 'Ikke fundet');
@define('WRITABLE', 'Skrivbar');
@define('NOT_WRITABLE', 'Ikke skrivbar');
@define('WELCOME_BACK', 'Velkommen tilbage,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Sorter efter');
@define('SORT_ORDER', 'Sorter efter');
@define('SORT_ORDER_ASC', 'Stigende');
@define('SORT_ORDER_DESC', 'Faldende');
@define('FILTERS', 'Filtrer');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Vis/Skjul alle');
@define('TOGGLE_OPTION', 'Vis/Skjul denne option');
@define('IN_REPLY_TO', 'Som svar på');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Bibliotek');
@define('BACK_TO_BLOG', 'Tilbage til weblog');
@define('HTML_NUGGET', 'HTML Nugget');
@define('TITLE_FOR_NUGGET', 'Titel på din nugget');
@define('COMMENT_ADDED', 'Din kommentar blev tilføjet. ');
@define('ENTRIES_FOR', 'Artikler fra %s');
@define('NO_ENTRIES_TO_PRINT', 'Der er ingen artikler at vise');
@define('COMMENT_DELETE_CONFIRM', 'Er du sikker på du vil slette kommentar #%d, skrevet af %s?');
@define('DELETE_SURE', 'Er du sikker på du vil slette #%s permanent?');
@define('MEDIA_FULLSIZE', 'Fuld størrelse');
@define('SIDEBAR_PLUGIN', 'sidebar plugin');
@define('EVENT_PLUGIN', 'event plugin');
@define('PLUGIN_ITEM_DISPLAY', 'Hvor skal enheden vises?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Kun udvidet artikel');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Kun i oversigten');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Hele tiden');
@define('DIRECTORY_WRITE_ERROR', 'Kan ikke skrive til biblioteket %s. Check filrettighederne.');
@define('FILE_WRITE_ERROR', 'Kan ikke skrive til filen %s.');
@define('INCLUDE_ERROR', 'serendipityfejl: Kunne ikke inkludere %s - Afbryder.');
@define('DO_MARKUP', 'Udført Markup-transformation');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Datoformat');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formatet på artiklens faktiske dato, brug PHPs strftime() variabler. (Standard: "%s")');
@define('APPLY_MARKUP_TO', 'Formater %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML knap');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Links til XML Feeds vil blive vist med dette billede. Efterlad tomt for standard, indtast \'none\' for at deaktivere.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Sletter fil %s...');
@define('SETTINGS_SAVED_AT', 'De nye indstillinger er blevet gemt kl %s');
@define('INVERT_SELECTIONS', 'Inverter valgte elementer');

@define('PERSONAL_SETTINGS', 'Personlige indstillinger');
@define('DO_MARKUP_DESCRIPTION', 'Tilføj markup-transformationer på teksten (smilies, shortcut markups via *, /, _, ...). Hvis du slår dette fra vil al HTML-kode i teksten blive bibeholdt.');
@define('BASE_DIRECTORY', 'Rodmappe');
@define('PERM_READ', 'Læse rettighed');
@define('PERM_WRITE', 'Skrive rettighed');
@define('PERM_DENIED', 'Permission denied.');
@define('CURRENT_AUTHOR', 'Aktuel forfatter');
@define('PLUGIN_ACTIVE', 'Aktiv');
@define('PLUGIN_INACTIVE', 'Inaktiv');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity installation');
@define('WELCOME_TO_INSTALLATION', 'Velkommen til Serendipity Installationen');
@define('FIRST_WE_TAKE_A_LOOK', 'Først kigger vi på dit nuværende setup og vil forsøge at diagnosere eventuelle kompatibilitetsproblemer');
@define('ERRORS_ARE_DISPLAYED_IN', 'Fejl er vist som %s, anbefalinger som %s og succes som %s');
@define('RED', 'rød');
@define('YELLOW', 'gul');
@define('GREEN', 'grøn');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s før-installations report');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP installation');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operativsystem');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini konfiguration');
@define('RECOMMENDED', 'Anbefalet');
@define('ACTUAL', 'Faktisk');
@define('PERMISSIONS', 'Rettigheder');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Rettigheder kan gives ved at kører følgende shell kommando: `<em>%s</em>` på det fejlede bibliotek, eller ved at sætte det vha. et FTP program');
@define('PROBLEM_DIAGNOSTIC', 'Grundet en problematisk diagnose, kan du ikke fortsætte med installationen førend ovenstående fejl er rettet');
@define('SELECT_INSTALLATION_TYPE', 'Vælg hvilken installationstype du vil benytte');
@define('RECHECK_INSTALLATION', 'Check installation igen');
@define('SIMPLE_INSTALLATION', 'Simpel installation');
@define('EXPERT_INSTALLATION', 'Expert installation');
@define('COMPLETE_INSTALLATION', 'Fuldfør installation');
@define('WONT_INSTALL_DB_AGAIN', 'Installerer ikke database igen');
@define('THEY_DO', 'det gør de');
@define('THEY_DONT', 'det før de ikke');
@define('CHECK_DATABASE_EXISTS', 'Undersøger om databasen og tabllerne allerede findes');
@define('CREATE_DATABASE', 'Opretter standarddatabase setup...');
@define('ATTEMPT_WRITE_FILE', 'Forsøger at skrive til %s ...');
@define('CREATING_PRIMARY_AUTHOR', 'Opretter primær forfatter \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Sætter standard skabelon');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installerer standard plugins');
@define('SERENDIPITY_INSTALLED', 'Serendipity er nu installeret');
@define('VISIT_BLOG_HERE', 'Besøg din nye blog her');
@define('THANK_YOU_FOR_CHOOSING', 'Tak fordi du valgte Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'En fejl blev fundet under installationen');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Drives af');
@define('ADMIN_FOOTER_POWERED_BY', 'Drives af Serendipity %s og PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standard editor');
@define('USERLEVEL_CHIEF_DESC', 'Chefeditor');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Ændr www til den bruger som apache kører som (fx. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Biblioteket %s eksisterer ikke og kunne ikke oprettes. Opret venligst biblioteket manuelt');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; Kør <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Kan ikke eksekvere %s');
@define('FILE_CREATE_YOURSELF', 'Opret venligst filen selv og check dens rettigheder');
@define('COPY_CODE_BELOW', '<br />* Kopier blot koden nedenunder og placer den i %s i din %s mappe:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Når du har gjort dette, så tryk på browserens "opdater" knap');
@define('ERROR_TEMPLATE_FILE', 'Kunne ikke åbne skabelonen, opdater Serendipity!');
@define('HTACCESS_ERROR', 'For at kunne checke din lokale webserver\'s installation, skal Serendipity være i stand til at skrive til filen ".htaccess". Dette var ikke muligt pga. forkerte rettigheder. Justér rettighederne således: <br />&nbsp;&nbsp;%s<br />og genindlæs siden.');
@define('EMPTY_SETTING', 'Du angav ikke en gyldig værdi for "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity har opdaget at din nuværende konfiguration passer til version %s. Serendipity selv er installeret som version %s, Det er nødvendigt at opgradere! <a href="%s">Klik her!</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Velkommen til Serendipitys opgraderingsscript.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Scriptet vil hjælpe dig med at opgradere Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Denne meddelelse vises, fordi Serendipity er installeret med version %s, men databasen er endnu ikke opgraderet til denne version.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Database opdateringer (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Følgende .sql-filer skal eksekveres før Serendipity igen kan fungere normalt.');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Versionsspecifikke opgaver');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Ingen versionsspecifikke opgaver fundet');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Ønsker du at ovenstående opgaver udføres?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nej, jeg udfører dem manuelt');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ja tak!');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Det ser ud til at opgradering ikke er nødvendig.');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity er opgraderet');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Du har ignoreret en del af opgraderingen. Undersøg venligst om databasen er korrekt opdateret, og planlagte opgaver udført');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Din Serendipity-installation er nu opgraderet til version %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Du kan vende tilbage til din blog ved at klikke %sher%s');
@define('ADMIN_ENTRIES', 'Artikler');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Kunne ikke forbinde til MySQL database: %s.');
@define('COULDNT_SELECT_DB', 'Kunne ikke vælge database: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Kunne ikke finde bruger information: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Kunne ikke finde kategori information: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Kunne ikke finde artikel information: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Kunne ikke finde kommentar information: %s.');
@define('MYSQL_REQUIRED', 'Du skal have MySQL udvidelsen installere førend du kan udføre denne handling.');
@define('CREATE_AUTHOR', 'Opret forfatter \'%s\'.');
@define('CREATE_CATEGORY', 'Opret kategori \'%s\'.');
@define('MT_DATA_FILE', 'MovableType data fil');
@define('INSTALL_DBPORT', 'Database port');
@define('INSTALL_DBPORT_DESC', 'Denne port anvendes til at forbinde til din databaseserver');
@define('IMPORT_PLEASE_ENTER', 'Indtast venligst de påkrævede data herunder');
@define('IMPORT_NOW', 'Importer nu!');
@define('IMPORT_STARTING', 'Starter import procedure...');
@define('IMPORT_FAILED', 'Importeringen fejlede');
@define('IMPORT_DONE', 'Importering gennemført');
@define('IMPORT_WEBLOG_APP', 'Weblog applikation');
@define('IMPORT_NOTES', 'Note:');
@define('IMPORT_STATUS', 'Status efter import');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Placer al den importeret tekst ind i "artikel" delen, og ikke opdelt ind i "udvidet artikel" sektionen.');
@define('IMPORT_GENERIC_RSS', 'Almindelig RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Send Trackbacks til links fundet i artikler');
@define('RSS_IMPORT_CATEGORY', 'Brug denne kategori for kategoriløse artikler');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Dokumentet %s kunne ikke findes.');
@define('CONVERT_HTMLENTITIES', 'Prøv at konvertere HTML entities automatisk?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Administrationssuite');
@define('WRONG_USERNAME_OR_PASSWORD', 'Du har indtastet et forkert brugernavn eller adgangskode');
@define('PLEASE_ENTER_CREDENTIALS', 'Indtast venligst dine adgangsoplysninger herunder.');
@define('PLEASE_ENTER_2FA', 'Please enter the mailed login code.');
@define('AUTOMATIC_LOGIN', 'Gem oplysningerne');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'Media');
@define('MEDIA_LIBRARY', 'Mediabibliotek');
@define('ADD_MEDIA', 'Tilføj media');
@define('MANAGE_DIRECTORIES', 'Håndtér mapper');
@define('CONFIGURATION', 'Konfiguration');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity hjemmeside');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity dokumentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Officiel blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Fora');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Denne artikel er endnu ikke udgivet.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Sidebarplugins');
@define('EVENT_PLUGINS', 'Hændelseplugins');
@define('CONFIGURE_PLUGINS', 'Konfigurerer plugins');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Uopfyldt krav: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Opgrader til v%s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Klik her for at installere et nyt %s');
@define('ALREADY_INSTALLED', 'Allerede installeret');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Rediger artikler');
@define('EDIT_ENTRY', 'Rediger artikel');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Udkast');
@define('PUBLISH', 'Udgiv');
@define('CONTENT', 'Indhold');
@define('ENTRIES_PER_PAGE', 'artikler per side');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Vedvarende artikler');
@define('PAGE_BROWSE_ENTRIES', 'Side %s af %s, i alt %s artikler');
@define('FIND_ENTRIES', 'Find artikler');
@define('RIP_ENTRY', 'Farvel artikel #%s');
@define('NEW_ENTRY', 'Ny artikel');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Artikel indhold');
@define('EXTENDED_BODY', 'Udvidet indhold');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Et udkast af denne artikel er blevet gemt');
@define('IFRAME_PREVIEW', 'Serendipity opretter nu et preview af din artikel...');
@define('IFRAME_WARNING', 'Din browser understøtter ikke iframes. Åbn serendipity_config.inc.php og sæt $serendipity[\'use_iframe\'] til FALSE.');
@define('DATE_INVALID', 'Advarsel: Den dato du indtastede var ugyldig. Det skal indtastes i følgende format: YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Avancerede indstillinger');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Dette link er ikke ikke til at blive klikket. Det indeholder denne artikels trackback URI. Du kan bruge denne URI til at sende ping- & trackbacks fra din egen blog til denne artikel. For at kopiere linket, kan du højreklikke og vælge "Kopier genvej" i Internet Explorer eller "Copy Link Location" i Mozilla.');
@define('RESET_DATE', 'Reset dato');
@define('RESET_DATE_DESC', 'Klik her for at resette datoen til den nuværende tid');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Håndter brugerer');
@define('CREATE_NEW_USER', 'Opret by bruger');
@define('CREATE_NOT_AUTHORIZED', 'Du kan ikke redigere brugere med den samme brugerniveau som digselv');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Du kan ikke oprette brugere med en højere brugerniveau end digselv');
@define('CREATED_USER', 'En ny bruger %s er blevet oprettet');
@define('MODIFIED_USER', 'Egenskaberne for brugeren %s er blevet ændret');
@define('USER_LEVEL', 'brugerniveau');
@define('WARNING_NO_GROUPS_SELECTED', 'Advarsel: Du har ikke valgt noget gruppemedlemskab. Da dette ville logge dig ud af brugergruppeadministrationen, er dine ændringer derfor ikke gemt.');
@define('DELETE_USER', 'Du er ved at slette bruger #%d %s. Er du sikker? Dette vil forhindre visning af alle artikler skrevet af ham.');
@define('DELETED_USER', 'Bruger #%d %s er blevet slettet.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Håndter grupper');
@define('DELETED_GROUP', 'Gruppe #%d %s slettet.');
@define('CREATED_GROUP', 'En nye gruppe %s er blevet oprettet');
@define('MODIFIED_GROUP', 'Egenskaberne for gruppen %s er blevet ændret');
@define('CREATE_NEW_GROUP', 'Opret ny gruppe');
@define('DELETE_GROUP', 'Slet gruppe  #%d %s. Er du sikker?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Find kommentarer');
@define('COMMENTS_FILTER_SHOW', 'Vis');
@define('COMMENTS_FILTER_ALL', 'Alle');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Kun godkendte');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Afventer godkendelse');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Er du sikker på du vil slette de valgte kommentarer?');
@define('PAGE_BROWSE_COMMENTS', 'Side %s af %s, i alt %s kommentarer');
@define('COMMENT_IS_DELETED', '(Kommentar slettet)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Kategori gemt');
@define('CATEGORY_ALREADY_EXIST', 'En kategori med navnet "%s" findes allerede');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategori #%s blev slettet. Gamle artikler flyttet til kategori #%s');
@define('CATEGORY_DELETED', 'Kategori #%s blev slettet.');
@define('INVALID_CATEGORY', 'Ingen kategori blev valgt til sletning');
@define('EDIT_THIS_CAT', ' Redigerer "%s"');
@define('CATEGORY_REMAINING', 'Slet denne kategori og flyt dens artikler ind i denne kategori');
@define('PARENT_CATEGORY', 'Overkategori');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Opret ny kategori');
@define('ALREADY_SUBCATEGORY', '%s er allerede en underkategori af %s.');
@define('NO_CATEGORIES', 'Ingen kategorier');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importer data');
@define('EXPORT_ENTRIES', 'Eksporter artikler');
@define('EXPORT_FEED', 'Eksporter fuldt RSS feed');
@define('CREATE_THUMBS', 'Genopbyg minibilleder');
@define('WARNING_THIS_BLAHBLAH', "ADVARSEL:\\nDette kan tage lang tid hvis der er mange billeder uden minibilleder.");
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' er blevet sat som din aktive skabelon');
@define('WARNING_TEMPLATE_DEPRECATED', 'Advarsel: Din nuværende skabelon bruger en forældet skabelon metode, vi anbefaler du opgraderer, hvis muligt');
@define('STYLE_OPTIONS_NONE', 'Denne skabelon/stil har ikke nogen specifikke indstillinger. Læs den tekniske dokumentation på www.s9y.org, punktet "Configuration of Theme options", for at se hvordan din skabelon kan anvende indstillinger.');
@define('STYLE_OPTIONS', 'Tema/stil indstillinger');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Tilpasset administrator interface');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Sæt som skabelon');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Check &amp; gem');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Fjern valgte plugins');
@define('SAVE_CHANGES_TO_LAYOUT', 'Gem layout-ændringerne');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synkroniserer databasen med billedemappen');
@define('SYNC_DONE', 'Færdig (Synkroniserede %s billeder).');
@define('RESIZE_BLAHBLAH', '<b>Ændre størrelse på %s</b>');
@define('ORIGINAL_SIZE', 'Original størrelse: <i>%sx%s</i> pixel');
@define('RESIZING', 'Ændre dimensioner');
@define('RESIZE_DONE', 'Færdig (Ændrede %s billeder).');
@define('KEEP_PROPORTIONS', 'Bevar forholdet');
@define('REALLY_SCALE_IMAGE', 'Er du sikker på du vil ændre størrelsen på dette billede? Der er ingen vej tilbage!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Her kan du justere billedets størrelse. Hvis du vil bevare proportionerne, skal du bare indtaste én af værdirene og trykke på TAB-tasten, den anden værdi beregnes så automatisk:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Ny størrelse: ');
@define('SCALING_IMAGE', 'Ændre størrelsen på %s til %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Bibliotek og filer blev flyttet til %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Bibliotek og filer kunne ikke flyttes til %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Mappen <strong>%s</strong> er blevet oprettet.');
@define('PARENT_DIRECTORY', 'Hovedmappe');
@define('CONFIRM_DELETE_DIRECTORY', 'Er du sikker på du vil slette al indholdet af mappen %s?');
@define('ERROR_NO_DIRECTORY', 'Fejl: Mappen %s eksistere ikke');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Kunne ikke fjerne en ikke-tom mappe. Afkryds "gennemtving sletning" feltet, hvis du vil slette disse og tryk derefter på submit igen. Eksisterende filer er:');
@define('DIRECTORY_DELETE_FAILED', 'Sletning af mappe %s mislykkedes. Check rettigheder eller ovenstående beskeder.');
@define('DIRECTORY_DELETE_SUCCESS', 'Mappen %s er blevet slettet.');
@define('CHECKING_DIRECTORY', 'Checker filer i mappen %s');
@define('DELETE_DIRECTORY', 'Slet mappe');
@define('DELETE_DIRECTORY_DESC', 'Du er ved at slette indholdet af en mappe der indeholder multimedia filer, muligvis filer brugt i dine artikler.');
@define('FORCE_DELETE', 'Slet ALLE filer i denne mappe, inklusiv dem ikke kendt af Serendipity');
@define('CREATE_DIRECTORY', 'Opret mappe');
@define('CREATE_NEW_DIRECTORY', 'Opret ny mappe');
@define('CREATE_DIRECTORY_DESC', 'Her kan du oprette en ny mappe til at placere dine multimedia filer i. Vælg navnet på din nye mappe, og vælg en passende mappe at oprette den i.');
@define('ABOUT_TO_DELETE_FILE', 'Du er ved at slette <b>%s</b><br />Hvis du benytter denne fil i nogle af dine artikler, vil det resultere i døde links eller billeder<br />Er du sikker på du vil fortsætte?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Fejl: Filen findes allerede på din maskine!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Kunne ikke finde filen ved navn <b>%s</b>, måske er den allerede slettet?');
@define('ERROR_FILE_FORBIDDEN', 'Det er ikke tilladt at uploade filer med aktivt indhold');
@define('REMOTE_FILE_NOT_FOUND', 'Filen kunne ikke findes på serveren, er du sikker på URLen: <b>%s</b> er korrekt?');
@define('FILE_FETCHED', '%s hentet: %s');
@define('FILE_UPLOADED', 'Filen %s er blevet uploadet: %s');
@define('DELETE_FILE_FAIL', 'Unable to delete file <b>%s</b>');
@define('DELETE_FILE', 'Slettede filen ved navn <b>%s</b>');
@define('FOUND_FILE', 'Fandt ny/ændret fil: %s.');
@define('FILENAME_REASSIGNED', 'Nyt filnavn automagisk tildelt: %s');
@define('ERROR_FILE_EXISTS', 'Fejl: Det nye filnavn eksisterer allerede, vælg et andet!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'hotlinked');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Indtast det nye navn for: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Tilføjet billede...');
@define('THUMB_CREATED_DONE', 'Minibillede er oprettet.<br>Done.');
@define('THUMBNAIL_USING_OWN', 'Bruger %s som dets eget minibillede, fordi det allerede er så lille.');
@define('THUMBNAIL_FAILED_COPY', 'Ville gerne have brugt %s som dets egen minibillede, men kunne ikke kopiere!');
@define('DELETE_THUMBNAIL', 'Slettede billedet ved navn <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Der skete en ukendt fejl, filen blev ikke uploaded. Måske er din filstørrelse større end den maximale størrelse tilladt af din serveropsætning. Spørg din webudbyder eller rediger din php.ini fil for at tillade uploads af større filer.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Fejl: Du kan ikke uploade filer større end %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Fejl: Du kan ikke uploade billeder der er større end %s x %s pixels!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Fil blev hotlinked.<br />Færdig.');
@define('DELETE_HOTLINK_FILE', 'Slet den hotlinkede fil ved navn <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Kunne ikke eksekvere: "%s", fejl: %s, return var: %d');
@define('SKIPPING_FILE_EXTENSION', 'Ignorerede filen: Manglende filtype %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Ignorere fil: %s er ikke læsbar.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Sæt de samme rettigheder på alle underliggende biblioteker');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Jeg vil bruge minibilledet i min artikel.');
@define('I_WANT_BIG_IMAGE', 'Jeg vil bruge det originale billede i min artikel.');
@define('I_WANT_NO_LINK', 'Vis billedet uden link');
@define('I_WANT_IT_TO_LINK', 'Vis billedet med link');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Billedestørrelse');
@define('IMAGE_ALIGNMENT', 'Billedejustering');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Billedeindsættelse');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, tilpasset størrelse)');
@define('MEDIA_ENTRY', 'Selvstændig artikel');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Du valgte %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Roter billede 90 grader imod uret');
@define('IMAGE_ROTATE_RIGHT', 'Roter billede 90 grader med uret');
@define('MEDIA_RENAME', 'Omdøb denne fil');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Filnavn');
@define('SORT_ORDER_EXTENSION', 'Filtype');
@define('SORT_ORDER_SIZE', 'Filstørrelse');
@define('SORT_ORDER_WIDTH', 'Billedebrede');
@define('SORT_ORDER_HEIGHT', 'Billedehøjde');
@define('SORT_ORDER_DATE', 'Upload-dato');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Tilføj en fil til dit mediearkiv:</b><p>Her kan du uploade mediafiler, eller få dem hentet fra et sted på nettet. Hvis du ikke har et passende billeder, <a href="https://images.google.com/" target="_blank">prøv at søg efter billeder på google</a> der passer til dine tanker, resultatet er ofte brugbart og sjovt :)</p><p><b>Vælg metode:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Indtast en URL til filen du vil hente');
@define('ENTER_MEDIA_UPLOAD', 'Vælg en fil du ønsker at uploade:');
@define('SAVE_FILE_AS', 'Gem fil som:');
@define('STORE_IN_DIRECTORY', 'Gem i følgende bibliotek:');
@define('IMAGE_MORE_INPUT', 'Tilføj flere billeder');
@define('ENTER_MEDIA_URL_METHOD', 'Afhentningsmetode:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Bemærk: Hvis du vælger at hotlinke til en server, bør du sikre dig tilladelse til at gøre dette, eller være ejeren af serveren. Hotlink gør det muligt at bruge eksterne billeder, uden at gemme dem lokalt.');
@define('FETCH_METHOD_IMAGE', 'Hent billede til din server');
@define('FETCH_METHOD_HOTLINK', 'Hotlink til server');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Ændre størrelse på billede');
@define('MEDIA_DELETE', 'Slet denne fil');
@define('FILES_PER_PAGE', 'Filer per side');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Ingen billeder fundet');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'alle mapper');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfiguration skrevet &amp; gemt');
@define('DIAGNOSTIC_ERROR', 'Vi har opdaget nogle fejl mens vi kørte nogle diagnostiker på dine indtastede informationer:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Database indstillinger');
@define('INSTALL_CAT_DB_DESC', 'Her kan du indtaste dine database indstillinger');
@define('INSTALL_DBTYPE', 'Database type');
@define('INSTALL_DBTYPE_DESC', 'Database type');
@define('INSTALL_DBHOST', 'Database host');
@define('INSTALL_DBHOST_DESC', 'Hostnavn til din database server');
@define('INSTALL_DBUSER', 'Database bruger');
@define('INSTALL_DBUSER_DESC', 'Brugernavnet der er brugt til at forbinde til din database');
@define('INSTALL_DBPASS', 'Database adgangskode');
@define('INSTALL_DBPASS_DESC', 'Adgangskoden der passer til ovenstående brugernavn');
@define('INSTALL_DBNAME', 'Database navn');
@define('INSTALL_DBNAME_DESC', 'Navnet på din database');
@define('INSTALL_DBPREFIX', 'Database tabel præfix');
@define('INSTALL_DBPREFIX_DESC', 'Præfix på tabelnavne, fx. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Brug vedvarende forbindelser');
@define('INSTALL_DBPERSISTENT_DESC', 'Aktiver brug af vedvarende database forbindelser, læs mere <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">her</a>. Dette anbefales normalt ikke');
@define('INSTAL_DB_UTF8', 'Brug database karaktersæt-oversættelse');
@define('INSTAL_DB_UTF8_DESC', 'Udfører MySQL kommandoen "SET NAMES .." for at angive det krævede karaktersæt. Deaktiver hvis du ser underlige karakterer i din blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Stier');
@define('INSTALL_CAT_PATHS_DESC', 'Forskellige stier til forskellige essentielle mapper og filer. Glem ikke efterfølgende slashes på biblioteker!');
@define('INSTALL_FULLPATH', 'Fuld sti');
@define('INSTALL_FULLPATH_DESC', 'Den absolutte sti til din serendipity installation');
@define('INSTALL_UPLOADPATH', 'Upload sti');
@define('INSTALL_UPLOADPATH_DESC', 'Alle uploads bliver placeret her, relativ til \'Fuld sti\' - typisk \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativ sti');
@define('INSTALL_RELPATH_DESC', 'Sti til Serendipity i henhold til din browser, typisk \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativ skabelon sti');
@define('INSTALL_RELTEMPLPATH_DESC', 'Stien til mappen der indeholder dine skabeloner - Relativ til \'Relativ sti\'');
@define('INSTALL_RELUPLOADPATH', 'Relativ upload sti');
@define('INSTALL_RELUPLOADPATH_DESC', 'Sti til dine uploads i henhold til din browser - Relativ til \'Relativ sti\'');
@define('INSTALL_URL', 'URL til din blog');
@define('INSTALL_URL_DESC', 'Grund URL for din Serendipity installation');
@define('INSTALL_AUTODETECT_URL', 'Autoudregn anvendt HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Hvis denne er sat til "ja", vil Serendipity sikre at den HTTP Host der anvendes af dine besøgende, anvendes som din BaseURL indstilling. Aktiverer du dette, kan du bruge flere domænenavne på samme Serendipity Blog.');
@define('INSTALL_AUTODETECT_VALID_HOSTS', 'Valid autodetected HTTP-Hosts');
@define('INSTALL_AUTODETECT_VALID_HOSTS_DESC', 'Set this to a comma separated list of allowed HTTP Hosts. Only those will be used for the autodetected base URL. This is a security measure for server setups that accept arbitrary HTTP host headers.');
@define('INSTALL_INDEXFILE', 'Index fil');
@define('INSTALL_INDEXFILE_DESC', 'Navnet på din Serendipity index fil');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Angiver forskellige URL mønstre som definerer permanente links i din blog. Det anbefales at bruge standardværdierne; hvis ikke, bør du bruge %id% værdien hvor muligt for at forhindre at Serendipity skal slå URL\'en op i databasen.');
@define('INSTALL_PERMALINK', 'Permalink URL struktur');
@define('INSTALL_PERMALINK_DESC', 'Her kan du angive den relative URL struktur fra din grund URL til hvor artiklerne bliver tilgængelige. Du kan bruge variablene %id%, %title%, %day%, %month%, %year% samt alle andre karakterer.');
@define('INSTALL_PERMALINK_AUTHOR', 'Permalink forfatter URL struktur');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Her kan du angive den relative URL struktur fra din grund URL til hvor artikler fra bestemte forfattere bliver tilgængelige. Du kan bruge variablene %id%, %realname%, %username%, %email% samt alle andre karakterer.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permalink kategori URL struktur');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Her kan du angive den relative URL struktur fra din grund URL til hvor artikler fra bestemte kategorier bliver tilgængelige. Du kan anvende de variable %id%, %name%, %parentname%, %description% samt alle andre karakterer.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permalink RSS-Feed kategori URL struktur');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Her kan du angive den relative URL struktur fra din grund URL til hvor RSS-feeds fra bestemte kategorier bliver tilgængelige. Du kan anvende de variable %id%, %name%, %description% samt alle andre karakterer.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed forfatter URL struktur');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Her kan du angive den relative URL struktur fra din grund URL til hvor RSS-feeds fra bestemte forfattere bliver tilgængelige. Du kan anvende de variable værdier %id%, %realname%, %username%, %email% samt alle andre karakterer.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Sti til arkiver');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Sti til arkiv');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Sti til kategorier');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Sti til forfattere');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Sti til  afmeldings kommentarer');
@define('INSTALL_PERMALINK_DELETEPATH', 'Sti til sletning af kommentarer');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Sti til godkendelse af kommentarer');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Sti til RSS feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Sti til et plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Sti til admin');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Sti til søgning');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Sti til kommentarer');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Generelle indstillinger');
@define('INSTALL_CAT_SETTINGS_DESC', 'Tilpas den måde Serendipity opfører sig på');
@define('INSTALL_USERNAME', 'Admin brugernavn');
@define('INSTALL_USERNAME_DESC', 'Brugernavn til admin login');
@define('INSTALL_PASSWORD', 'Admin adgangskode');
@define('INSTALL_PASSWORD_DESC', 'Adgangskode til admin login');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Rigtigt navn');
@define('USERCONF_REALNAME_DESC', 'Det fulde navn på forfatteren. Dette er navnet set af læserne');
@define('INSTALL_EMAIL', 'Admin email');
@define('INSTALL_EMAIL_DESC', 'E-mail adresse på ejeren af bloggen');
@define('INSTALL_SENDMAIL', 'Send mails til admin?');
@define('INSTALL_SENDMAIL_DESC', 'Vil du modtage emails når kommentare er givet på dine artikler?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Navn på blog');
@define('INSTALL_BLOGNAME_DESC', 'Titlen på din blog');
@define('INSTALL_BLOGDESC', 'Blog beskrivelse');
@define('INSTALL_BLOGDESC_DESC', 'Beskrivelse af din blog');
@define('INSTALL_BLOG_EMAIL', 'Bloggens emailadresse');
@define('INSTALL_BLOG_EMAIL_DESC', 'Her angives emailadressen som anvendes i \'fra\' feltet på udgående email fra bloggen. Vær opmærksom på at mange mailservere afviser email med ukendt eller ikke eksisterende emailadresse i \'fra\' feltet.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Sprog');
@define('INSTALL_LANG_DESC', 'Vælg sproget på din blog');
@define('INSTALL_CHARSET', 'Karaktersæt valg');
@define('INSTALL_CHARSET_DESC', 'Her kan du vælge mellem UTF-8 eller \'native\' (lokalt,  f.eks. ISO-8859-1) karaktersæt. Nogle sprog har kun UTF-8 oversættelsen, så at sætte valget til \'native\' vil ikke have nogen effekt. UTF-8 anbefales til nyinstallationer. Lad være med at ændre denne indstilling hvis du allerede har lavet artikler med special karakterer - det kan medføre dine artikler vises forkert. Læs mere om alt dette på <a href="https://docs.s9y.org/docs/developers/internationalization.html">https://docs.s9y.org/docs/developers/internationalization.html</a>');
@define('INSTALL_CAL', 'Kalendar type');
@define('INSTALL_CAL_DESC', 'Vælg dit kalenderformat');
@define('AUTOLANG', 'Brug som standard, brugerens browser sprog');
@define('AUTOLANG_DESC', 'Hvis aktiveret, vil brugerens browsersprog benyttes til at finde det viste sprog i dine artikler og interface.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Aktiver plugin adgangskontrol for grupper?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Mulighed for at bestemme hvilke grupper der må anvende hvilke plugins.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Udseende og indstillinger');
@define('INSTALL_CAT_DISPLAY_DESC', 'Tilpas hvordan Serendipity ser ud og føles');
@define('INSTALL_FETCHLIMIT', 'Artikler på forsiden');
@define('INSTALL_FETCHLIMIT_DESC', 'Antallet af artikler at vise på hver side på forsiden');
@define('INSTALL_RSSFETCHLIMIT', 'Artikler i feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Antallet af artikler der skal vises på hver side i RSS feeds.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Aktiver RSS-feeds der overholder RFC2616');
@define('SYNDICATION_RFC2616_DESC', 'Hvis IKKE RFC2616 overholdes vil alle forespørgsler til Serendipity returnere artikler ændret siden  tidspunktet for sidste forespørgsel. Dvs \'nej\' medfører at dine besøgende får alle artikler siden sidst. På den anden side, nogle RSS aggregatorer som f.eks. \'Planet\' opfører sig underligt med denne indstilling da den jo ikke overholder RFC2616. Læs eventuelt mere om problemet her <a href="<a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>"><a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a></a>');
@define('INSTALL_USEGZIP', 'Benyt gzip komprimerede sider');
@define('INSTALL_USEGZIP_DESC', 'For at fremskynde levering af sider, kan vi komprimere siderne vi sender til den besøgende, givet at hans browser understøtter dette. Dette er anbefalet');
@define('INSTALL_XHTML11', 'Gennemtving XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Ønsker du at gennemtvinge XHTML 1.1 overholdelse (Kan skabe problemer i 4. generations browsere)');
@define('INSTALL_POPUP', 'Aktiver brug af popup vinduer');
@define('INSTALL_POPUP_DESC', 'Vil du åbne kommentarer og trackbacks i et popup vindue?');
@define('INSTALL_EMBED', 'Er Serendipity embedded?');
@define('INSTALL_EMBED_DESC', 'Hvis du ønsker at indkapsle Serendipity inde i en normal side, aktiver da dette direktiv for at ignorere headers og kun udskrive indholdet. Du kan benytte indexFile direktivet til at lave en wrapper fil hvor du placere din normale hjemmeside headers. Konsulter README filen for mere information!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Gør eksterne links klikbare?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"nej": Eksterne links (Top udgangsider, Top henvisninger, bruger kommentarer) er ikke vist/vist som ren tekst hvor brugbart, for at forhindre google spam (anbefales). "ja": Eksterne links er vist som hyperlinks. Kan overskrives inde i hver enkel sidebar plugin konfigurationen!');
@define('INSTALL_TRACKREF', 'Visning af referencer?');
@define('INSTALL_TRACKREF_DESC', 'Aktiverer du reference visning, vil du kunne se hvilke sites der henviser til dine artikler. Dette bliver tit misbrugt til spam.');
@define('INSTALL_BLOCKREF', 'Bloker referencer');
@define('INSTALL_BLOCKREF_DESC', 'Er der nogle specielle hosts du ikke ønsker skal vises i reference listen? Separer listen af hostnavne med \';\' og bemærk at disse er blokere med substring masker!');
@define('INSTALL_REWRITE', 'URL Omskrivning');
@define('INSTALL_REWRITE_DESC', 'Vælg hvilken regel du ønsker at bruge når du generere URL\'er. Aktivering af omskrivningsregler vil gøre dine URL\'er flotte og gøre din side bedre at indeksere for robotter som google. Webserveren skal enten understøtte mod_rewrite eller "AllowOverride All" for dit Serendipity bibliotek. Standardindstillingen er automatisk beregnet');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Server tidsforskydelse');
@define('INSTALL_OFFSET_DESC', 'Indtast antallet af timer mellem tiden på din webserver (%clock%) og din fortrukne tidszone');
@define('INSTALL_SHOWFUTURE', 'Vis fremtidige artikler');
@define('INSTALL_SHOWFUTURE_DESC', 'Hvis aktiveret, dette vil vise alle fremtidige artikler på din blog. Som standard skjules disse artikler og vises først når udgivelsesdatoen er nået.');
@define('INSTALL_ACL', 'Anvend læserettigheder for kategorier');
@define('INSTALL_ACL_DESC', 'Hvis aktiveret anvendes grupperettigheder for brugere der er logget ind. I modsat fald anvendes læserettigheder for kategorier ikke, men din blog bliver til gengæld lidt hurtigere. Så har du ikke brug for multibruger læserettigheder  i din blog bør du vælge \'nej\' her.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Vis hele artiklen, med udvidet del, inde i RSS feed');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Billede til RSS feedet');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL på et billede i GIF/JPEG/PNG format, hvis tilgængeligt. (tom: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Billedebredde');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'i pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Billedehøjde');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'i pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Vis E-Mail adresser?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Feltet "Hovedredaktør"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mail adressen på redaktøren, hvis tilgængelig. (tom: skjult) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Feltet "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Email adressen på webmasteren, hvis tilgængelig. (tom: skjult) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Feltet "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Antallet af minutter din blog skal gemmes af eksterne sider/programmer (tom: skjult) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Feltet "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Skal "pubDate"-feltet være indkapslet til en RSS-channel, for at vise datoen på den nyeste artikel?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Billedekonverterings indstillinger');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Generel information om hvordan Serendipity skal håndtere billeder');
@define('INSTALL_IMAGEMAGICK', 'Brug Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Har du image magick installeret og ønsker at bruge det til at ændre størrelse på billeder?');
@define('INSTALL_IMAGEMAGICKPATH', 'Sti til convert binær fil');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Fuld sti og navn på din image magick convert binær fil');
@define('INSTALL_THUMBSUFFIX', 'Thumbnail suffiks');
@define('INSTALL_THUMBSUFFIX_DESC', 'Thumbnails vil blive navngivet i følgende format: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', 'Thumbnail dimensioner');
@define('INSTALL_THUMBWIDTH_DESC', 'Statisk maximal brede på et auto-genereret thumbnail');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. fil upload størrelse');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Angiv maximal filstørrelse for uploadede filer. Denne indstilling kan overskrives af en server indstilling i PHP.ini: upload_max_filesize, post_max_size, max_input_time har alle højere prioritet end denne indstilling. Indtaster du ikke noget, anvendes server indstillingerne.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. bredde for uploadede billeder');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Indtast den maximale bredde i pixels, for uploadede billeder.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. højde for uploadede billeder');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Indtast den maximale højde i pixels, for uploadede billeder.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Automatisk medie synkronisering');
@define('ONTHEFLYSYNCH_DESC', 'Hvis aktiv, vil  Serendipity sammenligne medie databasen med filerne der er gemt på serveren og synkronisere disse.');
@define('MEDIA_DYN_RESIZE', 'Tillad dynamiske billedstørrelser?');
@define('MEDIA_DYN_RESIZE_DESC', 'Hvis aktiveret, kan medievælgeren returnere billeder i vilkårlige størrelser, styret af en GET variabel, billederne caches og kan derfor generere mange filer.');
@define('MEDIA_EXIF', 'Importer EXIF/JPEG billeddata');
@define('MEDIA_EXIF_DESC', 'Hvis aktiv, vil EXIF/JPEG metadata blive indlæst og gemt i databasen for senere at kunne vises i medie galleriet.');
@define('MEDIA_PROP', 'Medie egenskaber');
@define('MEDIA_PROP_DESC', 'Indtast ";" adskilt liste af felter/egenskaber du vil definere for hver mediefil. ');
@define('MEDIA_PROP_MULTIDESC', '(Du kan tilføje ":MULTI" efter ethvert felt for at angive dette felt indeholder en lang tekst i stedet for blot nogle karakterer)');
@define('MEDIA_KEYWORDS', 'Medie nøgleord');
@define('MEDIA_KEYWORDS_DESC', 'Indtast en ";" adskilt liste af ord du vil prædefinere som nøgleord for medie filer.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Dine personlige detaljer');
@define('USERCONF_CAT_PERSONAL_DESC', 'Ændre dine personlige detaljer');
@define('USERCONF_USERNAME', 'Dit brugernavn');
@define('USERCONF_USERNAME_DESC', 'Brugernavnet du vil bruge for at logge ind i bloggen');
@define('USERCONF_PASSWORD', 'Dit kodeord');
@define('USERCONF_PASSWORD_DESC', 'Kodeordet du vil bruge for at logge ind i bloggen');
@define('USERCONF_CHECK_PASSWORD', 'Nuværende kodeord');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Hvis du ændrer kodeord i feltet herover skal du indtaste dit nuværende kodeord her.');
@define('USERCONF_USERLEVEL', 'Adgangsniveau');
@define('USERCONF_USERLEVEL_DESC', 'Dette niveau er brugt til at bestemme hvilken type adgang brugeren har til bloggen');
@define('USERCONF_GROUPS', 'Gruppe medlemsskab');
@define('USERCONF_GROUPS_DESC', 'Brugeren er medlem af følgende grupper. Det er muligt at være medlem af flere grupper.');
@define('USERCONF_EMAIL', 'Din email adresse');
@define('USERCONF_EMAIL_DESC', 'Din personlige email adresse');
@define('INSTALL_WYSIWYG', 'Brug WYSIWYG editor');
@define('INSTALL_WYSIWYG_DESC', 'Vil du benytte WYSIWYG editoren? (Virker med IE5+, delvis i Mozilla 1.3+)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'Send beskeder om nye kommentarer?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Ønsker du at modtage en mail når nye kommentarer bliver lavet på dine artikler?');
@define('USERCONF_SENDTRACKBACKS', 'Send beskeder om nye trackbacks?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Ønsker du at modtage en mail når nye trackbacks bliver lavet på dine artikler?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Tilladelse: Udgiv artikler?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Kan denne bruger udgive artikler?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Vis værktøjslinie i medievælger popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Standard indstillinger for nye artikler');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'BEMÆRK: Brugerniveau indstillingen anvendes nu kun til bagud kompatibilitet. Bruger privilegier angives nu ved hjælp af gruppe medlemskaber!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Du indtastede ikke det rigtige nuværende kodeord, og kan derfor ikke ændre kodeord, din ændring blev ikke gemt.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Brugernavn skal indtastes.');
@define('USERCONF_SECONDFACTOR', 'Confirm login with email code');
@define('USERCONF_SECONDFACTOR_DESC', 'Protect your login with a code sent to your email that needs to be entered in addition to the password. Only enable this if you get email notifications to your personal email from this blog.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Adgang til personlig konfiguration');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Ændre brugerniveauer');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Ændre "forbyd oprettelse af artikler"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Ændre rettighed til at offentliggøre artikler');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Adgang til system konfiguration');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Adgang til blog-specifik konfiguration');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administrer artikler');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administrer andres artikler');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Importer artikler');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administrer kategorier');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administrer andre brugeres kategorier');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Slet kategorier');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administrer brugere');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Slet brugere');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Ændre brugerniveau');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administrer brugere i din(e) gruppe(r)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administrer bruger der ikke er i din(e) gruppe(r)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Opret nye brugere');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administrer grupper');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administrer plugins');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administrer andre brugeres plugins');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administrer media filer');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administrer media biblioteker');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Tilføj nye media filer');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Slet media filer');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administrer andres media filer');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Vis media filer');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Opdater minibilleder');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administrer kommentarer');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administrer skabeloner');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Vis andre brugeres media filer');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Din artikel blev gemt');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Tråde');
@define('COMMENTS_VIEWMODE_LINEAR', 'Linear');
@define('DISPLAY_COMMENTS_AS', 'Vis kommentarer som');
@define('COMMENTS_DISABLE', 'Tillad ikke kommentarer til denne artikel');
@define('COMMENTS_ENABLE', 'Tillad kommentarer til denne artikel');
@define('COMMENTS_CLOSED', 'Forfatteren har valgt ikke at tillade kommentarer til denne artikel');
@define('VIEW_EXTENDED_ENTRY', 'Læs resten af "%s"');
@define('TRACKBACK_SPECIFIC', 'Trackback URI til denne artikel');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Vis i fuld');
@define('VIEW_TOPICS', 'Vis emner');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Emner af');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Der var problemer under indsættelsen af artiklerne!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Husk oplysninger?');
@define('SUBMIT_COMMENT', 'Tilføj kommentar');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Abonnér på denne artikel');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Kommentar #%s ser allerede ud til at være godkendt');
@define('COMMENT_EDITED', 'Den valgte kommentar er blevet redigeret');
@define('COMMENTS_WILL_BE_MODERATED', 'Kommentarer til denne artikel skal modereres før de vil blive vist.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Advarsel: Denne kommentar kræver godkendelse førend den vil blive vist');
@define('DELETE_COMMENT', 'Slet kommentar');
@define('APPROVE_COMMENT', 'Godkend kommentar');
@define('REQUIRES_REVIEW', 'Kræver godkendelse');
@define('COMMENT_APPROVED', 'Kommentar #%s er blevet godkendt');
@define('COMMENT_DELETED', 'Kommentar #%s er blevet slettet');
@define('COMMENTS_MODERATE', 'Kommentarer og trackbacks til denne artikel kræver moderering');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Advarsel: Dette trackback kræver godkendelse førend det vil blive vist');
@define('DELETE_TRACKBACK', 'Slet trackback');
@define('APPROVE_TRACKBACK', 'Godkend trackback');
@define('TRACKBACK_APPROVED', 'Trackback #%s er blevet godkendt');
@define('TRACKBACK_DELETED', 'Trackback #%s er blevet slettet');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Topniveau');
@define('VIEW_COMMENT', 'Vis kommentar');
@define('VIEW_ENTRY', 'Vis artikel');
@define('LINK_TO_ENTRY', 'Link til artikel');
@define('LINK_TO_REMOTE_ENTRY', 'Link til ekstern artikel');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Sender trackback til URI %s...');
@define('TRACKBACK_SENT', 'Trackback fuldført');
@define('TRACKBACK_FAILED', 'Trackback fejl: %s');
@define('TRACKBACK_NOT_FOUND', 'Ingen trackback URI fundet.');
@define('TRACKBACK_URI_MISMATCH', 'Den automastiske trackback URI passer ikke vores egen URI.');
@define('TRACKBACK_CHECKING', 'Checker <u>%s</u> for mulige trackbacks...');
@define('TRACKBACK_NO_DATA', 'Modstående side indeholdte inden data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Intet trackback sendt: Kunne ikke åbne forbindelse til %s på port %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Ny kommentar på abonnerede artikel "%s"');
@define('SUBSCRIPTION_MAIL', "Hej %s,\n\nEn ny kommentar er blevet lavet til en artikel du abonnerer på hos \"%s\", ved navn \"%s\"\nNavnet på skribenten er: %s\n\nDu kan finde artiklen her: %s\n\nDu kan stoppe dit abonnement ved at klikke på dette link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hej %s,\n\nEt nyt trackback er blevet lavet til en artikel du abonnerer på hos \"%s\", ved navn \"%s\"\nNavnet på skribenten er: %s\n\nDu kan finde artiklen her: %s\n\nDu kan stoppe dit abonnement ved at klikke på dette link: %s\n");
@define('SIGNATURE', "\n-- \n%s bruger Serendipity.\nDen bedste blog på nettet, du kan også bruge den.\nKig nærmere på <https://s9y.org> for at finde mere information.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'En ny kommentar er blevet oprettet på din blog "%s", til artiklen ved navn "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Et nyt trackback er blevet lavet til din artikel ved navn "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Du har følgende muligheder:');
@define('NEW_TRACKBACK_TO', 'Ny trackback lavet til');
@define('NEW_COMMENT_TO', 'Ny kommentar lavet til');
@define('SECOND_FACTOR_MAIL_TITLE', 'Serendipity login code for %s');
@define('SECOND_FACTOR_MAIL', "Hello %s,\n\nTo complete the login to your blog please enter the following code:\n\n%s\n\nIt is valid for 15 minutes.");

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Ingen artikler blev fundet som indeholdt %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Din søgning på %s returnerede %s resultater:');
@define('SEARCH_TOO_SHORT', 'Din søgestreng skal være længere end 3 tegn. Du kan sætte * efter dit søgeord for at søge på kortere dele af ord (f.eks. s9y*)');
@define('SEARCH_ERROR', 'Søgefunktionen fungere ikke som forventet. Besked til administratoren: Dette sker muligvis pga. en manglende index key i databasen. På MySQL systemer skal din bruger have rettigheder til at udføre denne query: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Den specifikke fejl returneret af databasen, var: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Din kommentar indeholdt ikke noget, gå venligst %stilbage%s og prøv igen');
@define('COMMENT_NOT_ADDED', 'Din kommentar kunne ikke tilføjes af en af følgende grunde: kommentarer til denne artikel er blevet deaktiveret, du indtastede forkerte data, eller din kommentar blev fanget af antispam beskyttelsen');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Kommentar fra');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Konfigurations syntax forkert for indstilling "%s". Skal bruge indhold af typen "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Viser listen over kategorier.');
@define('CATEGORIES_PARENT_BASE', 'Vis kun kategorier herunder...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Du kan vælge en forælder kategori, så kun kategorierne herunder vises.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skjul kategorier som ikke er en del af kategoritræet');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Hvis du ønsker at skjule kategorier som er del af et andet kategoritræ skal du vælge \'Ja\' her. Denne feature giver mest mening i en flerbruger blog installation, som anvender "Properties/Tempaltes of categories" pluginet.');
@define('CATEGORIES_HIDE_PARENT', 'Skjul den valgte overkategori?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Hvis du begrænser visningen af kategorier til en specifik kategori, vil du som standard se overkategorien i listen. Deaktiveres denne indstilling vises overkategorien ikke.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Aktiver Smarty-skabeloner?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Aktiveres denne indstilling, vil der anvendes Smarty skabelon features i opbygningen af kategorilisten, du har mulighed for at ændre layout for listen i "plugin_categories.tpl" skabelon filen. Bemærk, denne indstilling koster performance, så har du ikke behov for den, så lad være med at aktivere den.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Vis antal artikler pr. kategori?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Tillad brugere at vise flere kategorier samtidig?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Hvis denne mulighed aktiveres vises en checkboks ud for hver kategori i denne sidebar. Brugere kan afkrydse disse bokse og derefter se indlæg afhængig af deres valg.');
@define('CATEGORIES_TO_FETCH', 'Kategorier som skal hentes');
@define('CATEGORIES_TO_FETCH_DESC', 'Hent kategorier fra en bestemt forfatter?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Vis en liste over forfattere');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Vis antal artikler ved siden af forfatternavn?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Hvis aktiv, vises antallet af artikler forfatteren har skrevet i paranteser ved siden af forfatternavnet.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Syndikering');
@define('SHOWS_RSS_BLAHBLAH', 'Viser RSS syndikeringslinks');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 kommentarer');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID på det feed du ønsker at offentliggøre');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner billede');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Navn på billede der skal vises (ingenting giver en tæller), billedet skal eksistere hos  feedburner.com, f.eks.: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner titel');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Eventuel titel der skal vises ved billedet');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner billedtekst');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Eventuel \'hover\' tekst til billedet');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('ARCHIVE_COUNT', 'Antal punkter på listen');
@define('ARCHIVE_COUNT_DESC', 'Det totale antal af måneder, uger eller dage at vise');
@define('ARCHIVE_FREQUENCY', 'Kalender frekvens');
@define('ARCHIVE_FREQUENCY_DESC', 'Angiver intervallet imellem hvert punkt på listen');
@define('BROWSE_ARCHIVES', 'Gennemse arkiver efter måneder');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Vis "Serendipity" som tekst');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vil vise "Serendipity Weblog" som tekst');
@define('POWERED_BY_SHOW_IMAGE', 'Vis "Serendipity"" som et logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Vis Serendipity logoet');
@define('ADVERTISES_BLAHBLAH', 'Reklamer for din blogs oprindelse');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Brug https til login');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Lader loginlinket pege på en https-destination. Din webserver skal understøtte dette!');
@define('SUPERUSER', 'Blog Administration');
@define('SUPERUSER_OPEN_ADMIN', 'Åbn administration');
@define('SUPERUSER_OPEN_LOGIN', 'Åbn loginskærm');
@define('ALLOWS_YOU_BLAHBLAH', 'Placerer et link i sidebaren til din blog administration');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalender');
@define('CALENDAR_BOW_DESC', 'Dagen i ugen der skal bruges som den første dag i ugen. Standardværdien er Mandag');
@define('QUICKJUMP_CALENDAR', 'Hurtigkalender');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Starten på ugen');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Aktiver Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Hvis aktiveret kan plugins "hægte" sig på kalenderen og fremhæve deres egne events. Aktiver kun hvis du har installeret plugins der kræver dette, da det forringer performance.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Søg efter en artikel');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Indeholder et stykke HTML i din sidebar');
@define('THE_NUGGET', 'HTML-indholdet af din nugget');
@define('BACKEND_TITLE', 'Yderligere information på plugin konfigurations siden');
@define('BACKEND_TITLE_FOR_NUGGET', 'Her kan du indtaste en tekst som vises på plugin konfigurations siden, sammen med beskrivelsen af din HTML Nugget. Har du flere HTML Nuggets med tom titel kan dette hjælpe med at genkende dem fra hinanden.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Vis top udgangssider/referencer som links?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nej": Udgangs- og henvisende sider er vist som ren tekst for at undgå google spam. "Ja": Udgangs- og henvisende sider er vist som hyperlinks. "standard": Brug indstillinger fra global konfiguration (anbefalet).');
@define('HAVE_TO_BE_LOGGED_ON', 'Du skal være logget ind for at kunne se denne side');
@define('WELCOME_TO_ADMIN', 'Velkommen til Serendipity Administrations suiten.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Kort kommentar');
@define('MEDIA_PROPERTY_COMMENT2', 'Lang kommentar');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titel');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity er endnu ikke installeret. Klik <a href="%s">her for at installere</a> nu.');
@define('COMMENT_ADDED_CLICK', 'Klik %her for at gå tilbage%s til kommentarerne, og %sher for at lukke%s dette vindue.');
@define('COMMENT_NOT_ADDED_CLICK', 'Klik %sher for at gå tilbage%s til kommentarene, og %sher for at lukke%s dette vindue. ');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Spilletid');
@define('MEDIA_PROPERTY_DATE', 'Tilhørende dato');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Stien til det flyttede bibliotek er opdateret i %s artikler.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'På IKKE-MySQL databaser, understøttes iteration gennem artikler for at opdatere stier til biblioteker ikke. Du bliver nødt til manuelt at redigere dine artikler og rette stierne, er dette for besværligt kan du flytte dit bibliotek tilbage til den gamle placering.');
@define('TRACKBACK_SIZE', 'Modstående URI overskred den maximale filstørrelse på %s bytes.');
@define('CLICK_FILE_TO_INSERT', 'Klik på filen du vil indsætte:');
@define('SELECT_FILE', 'Vælg filen du vil indsætte');
@define('MANAGE_IMAGES', 'Administrer billeder');
@define('WORD_NEW', 'Ny');
@define('WORD_OR', 'eller');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Eksterne tjenester');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Features');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Fulde moduler');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Views');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Artikel relateret');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Brugerhåndtering');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta information');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Skabeloner');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Features');
@define('PLUGIN_GROUP_IMAGES', 'Billeder');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup');
@define('PLUGIN_GROUP_STATISTICS', 'Statistik');
@define('IMPORT_WELCOME', 'Velkommen til Serendipity importværktøj');
@define('USER_SELF_INFO', 'Logget ind som %s (%s)');
@define('IMPORT_WHAT_CAN', 'Her kan du importere artikler fra andre weblog software applikationer');
@define('IMPORT_SELECT', 'Vælg venligst det software du ønsker at importere fra');
@define('MANAGE_STYLES', 'Administrer skabeloner');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vælg det plugin du ønsker at installere');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Herunder er en liste over installerede plugins');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Afbryd nu');
@define('DELETE_SELECTED_COMMENTS', 'Slet valgte kommentarer');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Find media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Fejl: Det gamle filnavn findes ikke!');
@define('ERROR_SOMETHING', 'Fejl: Der gik noget galt');
@define('DIRECT_LINK', 'Direkte link til denne artikel');
@define('SELECT_TEMPLATE', 'Vælg den skabelon du ønsker at bruge til din blog');
@define('DATABASE_ERROR', 'serendipityfejl: Kunne ikke oprette forbindelse til databasen - Afbryder.');
@define('LIMIT_TO_NUMBER', 'Hvor mange punkter skal vises?');
@define('DIRECTORIES_AVAILABLE', 'I listen over tilgængelige undermapper, kan du klikke på en ny mappe for at oprette en ny mappe inden for den stuktur.');
@define('CATEGORY_INDEX', 'Nedenunder er en liste over kategorier der er tilgængelige for dine artikler');
@define('PAGE_BROWSE_PLUGINS', 'Side %s af %s, i alt %s plugins.');
@define('CHARSET_NATIVE', 'Native');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Serendipity\'s XML-RPC API interface leveres ikke længere sammen med Serendipity på grund af gentagne sikkerhedsproblemer med dette API. Du er derfor nødt til at installere XML-RPC pluginet for at kunne bruge XML-RPC API. URL\'en i dine programmer ændres IKKE - så snart pluginet er installeret vil du igen være istand til at bruge dette API.');
@define('AUTHORS_ALLOW_SELECT', 'Tillad besøgende at vise flere forfattere samtidig?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Hvis aktiveret vil der vises en checkboks ud for hver forfatter i sidebaren. Brugere kan så afkrydse hvilke forfatteres artikler der skal vises.');
@define('PREFERENCE_USE_JS', 'Aktiver advanceret JS brug?');
@define('PREFERENCE_USE_JS_DESC', 'Hvis aktiveret, vil der blive anvendt advancerede Javascript funktioner for at give en forbedret brugeroplevelse, f.eks. i plugin konfigurationen, hvor drag & drop omrokering af plugins bliver mulig.');
@define('PREFERENCE_USE_JS_WARNING', '(Denne side anvender advanceret JavaScript. Får du funktionalitetsproblemer, så slå advanceret JS brug fra i dine personlige indstillinger, eller deaktiver Javascript i din browser)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');
