<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) by Jo Christian Oterhals <oterhals@gmail.com>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'no_NO.ISO-8859-1, no_NO.ISO8859-1, norwegian, no, no_NO, no_');
@define('DATE_FORMAT_ENTRY', '%A - %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'no');
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
@define('APPEARANCE', 'Utseende');
@define('LOGIN', 'Logg inn');
@define('LOGOUT', 'Logg ut');
@define('LOGGEDOUT', 'Logget ut.');
@define('CREATE', 'Opprett');
@define('BACK', 'Tilbake');
@define('FORWARD', 'Frem');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nyere...');
@define('OLDER', 'Eldre...');
@define('DONE', 'Ferdig');
@define('TITLE', 'Tittel');
@define('DESCRIPTION', 'Beskrivelse');
@define('PLACEMENT', 'Plassering');
@define('DELETE', 'Slett');
@define('SAVE', 'Lagre');
@define('UP', 'OPP');
@define('DOWN', 'NED');
@define('PREVIOUS', 'Forrige');
@define('NEXT', 'Neste');
@define('ENTRIES', 'artikler');
@define('CATEGORIES', 'Kategorier');
@define('NAME', 'Navn');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Hjemmeside');
@define('COMMENT', 'Kommentar');
@define('VIEW', 'Vis');
@define('HIDE', 'Skjul');
@define('WEEK', 'Uke');
@define('WEEKS', 'Uker');
@define('MONTHS', 'Måneder');
@define('DAYS', 'Dager');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Suksess');
@define('COMMENTS', 'Kommentarer');
@define('ADD_COMMENT', 'Legg til kommentar');
@define('NO_COMMENTS', 'Ingen kommentar');
@define('POSTED_BY', 'Skrevet av');
@define('ON', 'aktiv');
@define('NO_CATEGORY', 'Ingen kategori');
@define('CATEGORY', 'Kategori');
@define('EDIT', 'Rediger');
@define('GO', 'Begynn!');
@define('YES', 'Ja');
@define('NO', 'Nei');
@define('NOT_REALLY', 'Egentlig ikke...');
@define('DUMP_IT', 'Kast den!');
@define('IN', 'i');
@define('AT', 'kl');
@define('LEFT', 'venstre');
@define('RIGHT', 'høyre');
@define('CENTER', 'center');
@define('ARCHIVES', 'Arkiver');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Søk');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Ingen Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Utdrag');
@define('TRACKED', 'Tracked');
@define('USER', 'Bruker');
@define('USERNAME', 'Brukernavn');
@define('PASSWORD', 'Passord');
@define('HIDDEN', 'skjult');
@define('IMAGE', 'Bilde');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Forfatter');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'versjon');
@define('INSTALL', 'Installer');
@define('REPLY', 'Svar');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Feil');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Force');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administration');
@define('ADMIN_FRONTPAGE', 'Frontpage');
@define('QUOTE', 'Quote');
@define('NONE', 'ingen');
@define('GROUP', 'Gruppe');
@define('AUTHORS', 'Authors');
@define('UPGRADE', 'Upgrade');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Alle forfattere');
@define('PREVIOUS_PAGE', 'forrige side');
@define('NEXT_PAGE', 'neste side');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Alle kategorier');
@define('LAST_UPDATED', 'Sist opdatert');
@define('IP_ADDRESS', 'IP-adresse');
@define('CHARSET', 'Charset');
@define('REFERER', 'Referer');
@define('APPROVE', 'Godkjenn');
@define('NOT_FOUND', 'Not found');
@define('WRITABLE', 'Writable');
@define('NOT_WRITABLE', 'Not writable');
@define('WELCOME_BACK', 'Velkommen tilbake,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Sorter på');
@define('SORT_ORDER', 'Sorter etter');
@define('SORT_ORDER_ASC', 'Stigende');
@define('SORT_ORDER_DESC', 'Fallende');
@define('FILTERS', 'Filtere');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Vis/Skjul alle');
@define('TOGGLE_OPTION', 'Vis/Skjul denne opsjonen');
@define('IN_REPLY_TO', 'Som svar på');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Katalog');
@define('BACK_TO_BLOG', 'Tilbake til weblogg');
@define('HTML_NUGGET', 'HTML Nugget');
@define('TITLE_FOR_NUGGET', 'Tittel på din nugget');
@define('COMMENT_ADDED', 'Din kommentar ble lagt til. ');
@define('ENTRIES_FOR', 'Artikler fra %s');
@define('NO_ENTRIES_TO_PRINT', 'Der er ingen artikler å vise');
@define('COMMENT_DELETE_CONFIRM', 'Er du sikker på at du ønsker å slette kommentar #%d, skrevet av %s?');
@define('DELETE_SURE', 'Er du sikker på du vil slette #%s permanent?');
@define('MEDIA_FULLSIZE', 'Full størrelse');
@define('SIDEBAR_PLUGIN', 'sidebar plugin');
@define('EVENT_PLUGIN', 'event plugin');
@define('PLUGIN_ITEM_DISPLAY', 'Hvor skal enheten vises?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Kun udvidet artikkel');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Kun i oversikten');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Hele tiden');
@define('DIRECTORY_WRITE_ERROR', 'Kan ikke skrive til biblioteket %s. Sjekk filrettighederne.');
@define('FILE_WRITE_ERROR', 'Kan ikke skrive til filen %s.');
@define('INCLUDE_ERROR', 'serendipityfeil: Kunne ikke inkludere %s - Avbryter.');
@define('DO_MARKUP', 'Utført Markup-transformasjon');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Datoformat');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formatet på artiklens faktiske dato, brug PHPs strftime()-variabler. (Standard: "%s")');
@define('APPLY_MARKUP_TO', 'Formater %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML-knapp');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Linker til XML-feeder vil bli vist med dette bildet.  Etterlat tomt for standard, tast inn \'none\' for å deaktivere.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Sletter fil %s...');
@define('SETTINGS_SAVED_AT', 'De nye innstillgene er lagret kl %s');
@define('INVERT_SELECTIONS', 'Inverter valgene');
@define('PERSONAL_SETTINGS', 'Personal Settings');
@define('DO_MARKUP_DESCRIPTION', 'Tilføy markup-transformasjoner på teksten (smilies, shortcut markups via *, /, _, ...). Hvis du slår dette av vil all HTML-kode i teksten bli beholdt.');
@define('BASE_DIRECTORY', 'Base directory');
@define('PERM_READ', 'Read permission');
@define('PERM_WRITE', 'Write permission');
@define('PERM_DENIED', 'Permission denied.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity Installasjon');
@define('WELCOME_TO_INSTALLATION', 'Welcome to the Serendipity Installation');
@define('FIRST_WE_TAKE_A_LOOK', 'First we will take a look at your current setup and attempt to diagnose any compatibility problems');
@define('ERRORS_ARE_DISPLAYED_IN', 'Errors are displayed in %s, recommendations in %s and success in %s');
@define('RED', 'rød');
@define('YELLOW', 'gul');
@define('GREEN', 'green');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s pre-installation report');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP installation');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operating system');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini configuration');
@define('RECOMMENDED', 'Recommended');
@define('ACTUAL', 'Actual');
@define('PERMISSIONS', 'Rettigheter');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Permissions can be set by running shell command: `<em>%s</em>` on the failed directory, or by setting this using an FTP program');
@define('PROBLEM_DIAGNOSTIC', 'Due to a problematic diagnostic, you cannot continue with the installation before the above errors are fixed');
@define('SELECT_INSTALLATION_TYPE', 'Select which installation type you wish to use');
@define('RECHECK_INSTALLATION', 'Recheck installation');
@define('SIMPLE_INSTALLATION', 'Simple installation');
@define('EXPERT_INSTALLATION', 'Expert installation');
@define('COMPLETE_INSTALLATION', 'Complete installation');
@define('WONT_INSTALL_DB_AGAIN', 'won\'t install the database again');
@define('THEY_DO', 'they do');
@define('THEY_DONT', 'they don\'t');
@define('CHECK_DATABASE_EXISTS', 'Checking to see if the database and tables already exists');
@define('CREATE_DATABASE', 'Oppretter standarddatabase-setup...');
@define('ATTEMPT_WRITE_FILE', 'Forsøker å skrive til %s ...');
@define('CREATING_PRIMARY_AUTHOR', 'Creating primary author \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Setting default template');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installing default plugins');
@define('SERENDIPITY_INSTALLED', 'Serendipity has been successfully installed');
@define('VISIT_BLOG_HERE', 'Visit your new blog here');
@define('THANK_YOU_FOR_CHOOSING', 'Thank you for choosing Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'An error was detected in the installation');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Drives av');
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standard editor');
@define('USERLEVEL_CHIEF_DESC', 'Chief editor');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Endre www til den bruker som apache kører som (fx. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Biblioteket %s eksisterer ikke og kunne ikke op1prettes. Vennligst opprett biblioteket manuelt');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; Kjør <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Kan ikke eksekvere %s');
@define('FILE_CREATE_YOURSELF', 'Venligst opprett filen selv og sjekk dens rettigheter');
@define('COPY_CODE_BELOW', '<br />* Kopier koden nedenunder og plasser den i %s i din %s mappe:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Når du har gjort dette, så tryk på browserens "oppdater"-knapp');
@define('ERROR_TEMPLATE_FILE', 'Kunne ikke åpne malen, oppater Serendipity!');
@define('HTACCESS_ERROR', 'For å kunne sjekke din lokale webservers installasjon, må Serendipity være i stand til å skrive til filen ".htaccess". Dette var ikke mulig pga. feil rettigheter. Endre rettighetene slik: <br />&nbsp;&nbsp;%s<br />og oppdater denne siden.');
@define('EMPTY_SETTING', 'You did not specify a valid value for "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity har opdaget at din nåværende konfigurasjon passer til versjon %s. Serendipity selv er installert som version %s, Det er nødvendig å oppgradere! <a href="%s">Klikk her!</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Velkommen til Serendipitys oppgraderingsscript.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Scriptet vil hjelpe deg med å oppgradere Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Denne meldingen vises fordi Serendipity versjon %s er installert, men databasen er ennå ikke opgradert til denne versjonen.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Databasen oppdateringer (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Følgende .sql-filer må kjøres før Serendipity igjen kan fungere normalt.');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Versjonsspesifikke oppgaver');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Ingen versjonsspesifikke oppgaver funnet');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Ønsker du at ovenstående opgaver utføres?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nei, jeg utfører dem manuelt');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ja takk!');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Det ser ut til at oppgradering ikke er nødvendig.');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity er oppgradert');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Du har ignorert en del av oppgraderingen. Vennligst undersøk hvorvidt databasen er korrekt opdatert, og planlagte opgaver utført');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Din Serendipity-installation er nå oppgradert til version %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Du kan vende tilbake til din blog ved å klikke %sher%s');
@define('ADMIN_ENTRIES', 'Entries');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Could not connect to MySQL database: %s.');
@define('COULDNT_SELECT_DB', 'Could not select database: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Could not select user information: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Could not select category information: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Could not select entry information: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Could not select comment information: %s.');
@define('MYSQL_REQUIRED', 'You must have the MySQL extension in order to perform this action.');
@define('CREATE_AUTHOR', 'Create author \'%s\'.');
@define('CREATE_CATEGORY', 'Create category \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type data file');
@define('INSTALL_DBPORT', 'Database port');
@define('INSTALL_DBPORT_DESC', 'The port used to connect to your database server');
@define('IMPORT_PLEASE_ENTER', 'Please enter the data as requested below');
@define('IMPORT_NOW', 'Import now!');
@define('IMPORT_STARTING', 'Starting import procedure...');
@define('IMPORT_FAILED', 'Import failed');
@define('IMPORT_DONE', 'Import successfully completed');
@define('IMPORT_WEBLOG_APP', 'Weblog application');
@define('IMPORT_NOTES', 'Note:');
@define('IMPORT_STATUS', 'Status after import');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Put all imported text in the "body" section and do not split up into "extended entry" section.');
@define('IMPORT_GENERIC_RSS', 'Generic RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Send Trackbacks to links found in the entry');
@define('RSS_IMPORT_CATEGORY', 'Bruk denne kategorien for kategoriløse artikler');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Dokumentet %s kunne ikke finnes.');
@define('CONVERT_HTMLENTITIES', 'Try to auto-convert HTML entities?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Administrasjonssuite');
@define('WRONG_USERNAME_OR_PASSWORD', 'Du har tastet inn feil brukernavn eller passord');
@define('PLEASE_ENTER_CREDENTIALS', 'Please enter your credentials below.');
@define('AUTOMATIC_LOGIN', 'Lagre oplysningerne');
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
@define('MEDIA_LIBRARY', 'Media-bibliotek');
@define('ADD_MEDIA', 'Legg til media');
@define('MANAGE_DIRECTORIES', 'Håndter mapper');
@define('CONFIGURATION', 'Konfigurasjon');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Documentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Official Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forums');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'This entry is not yet published.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Sidebar-plugins');
@define('EVENT_PLUGINS', 'Hendelses-lugins');
@define('CONFIGURE_PLUGINS', 'Konfigurerer plugins');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Requirements failed: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Upgrade to version %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Click here to install a new %s');
@define('ALREADY_INSTALLED', 'Allerede installert');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Rediger artikler');
@define('EDIT_ENTRY', 'Rediger artikkel');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Utkast');
@define('PUBLISH', 'Publiser');
@define('CONTENT', 'Innhold');
@define('ENTRIES_PER_PAGE', 'artikler per side');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Faste oppslag');
@define('PAGE_BROWSE_ENTRIES', 'Side %s av %s, i alt %s artikler');
@define('FIND_ENTRIES', 'Finn poster');
@define('RIP_ENTRY', 'Farvel artikkel #%s');
@define('NEW_ENTRY', 'Ny artikkel');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Artikkelinnhold');
@define('EXTENDED_BODY', 'Utvidet innhold');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'A draft of this entry has been saved');
@define('IFRAME_PREVIEW', 'Serendipity is now creating the preview of your entry...');
@define('IFRAME_WARNING', 'Your browser does not support the concept of iframes. Please open your serendipity_config.inc.php file and set $serendipity[\'use_iframe\'] variable to FALSE.');
@define('DATE_INVALID', 'Advarsel: Den datoen du tastet inn var ugyldig. Den skal tastes inn i følgende format: ÅÅÅÅ-MM-DD TT:MM.');
@define('ADVANCED_OPTIONS', 'Avanserte innstillinger');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Det er ikke meningen at denne linken skal klikkes.  Den innholder trackback-URI-en for denne postingen.  Du kan bruke denne URI-en til å sende ping- og trackbacks fra din egen blog til denne posten.  For å kopiere linken, høyreklikk og velg "Kopier snarvei" i Internet Explorer eller "Copy Link Location" i Mozilla.');
@define('RESET_DATE', 'Reset date');
@define('RESET_DATE_DESC', 'Click here to reset the date to the current time');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Håndter brukere');
@define('CREATE_NEW_USER', 'Opprett ny bruker');
@define('CREATE_NOT_AUTHORIZED', 'Du kan ikke redigere brukere med det samme brukernivå som deg selv');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Du kan ikke opprette brukere med et høyere brukernivå enn deg selv');
@define('CREATED_USER', 'En ny bruker %s er opprettet');
@define('MODIFIED_USER', 'Egenskapene for brukeren %s er endret');
@define('USER_LEVEL', 'brukernivå');
@define('WARNING_NO_GROUPS_SELECTED', 'Warning: You did not select any group memberships. This would effectively log you out of the usergroup management, and thus your group memberships werde not changed.');
@define('DELETE_USER', 'Du er i ferd med å slette bruker #%d %s. Er du sikker? Dette vil forhindre visning av alle artikler skrevet av brukeren.');
@define('DELETED_USER', 'Bruker #%d %s er slettet.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Manage groups');
@define('DELETED_GROUP', 'Group #%d %s deleted.');
@define('CREATED_GROUP', 'A new group %s has been created');
@define('MODIFIED_GROUP', 'The properties of group %s have been changed');
@define('CREATE_NEW_GROUP', 'Create new group');
@define('DELETE_GROUP', 'You are about to delete group #%d %s. Are you serious?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Finn kommentarer');
@define('COMMENTS_FILTER_SHOW', 'Vis');
@define('COMMENTS_FILTER_ALL', 'Alle');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Only approved');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Pending approval');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Er du sikker på at du ønsker å slette de valgte kommentarene?');
@define('PAGE_BROWSE_COMMENTS', 'Side %s av %s, totalt %s kommentarer');
@define('COMMENT_IS_DELETED', '(Comment removed)');
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
@define('CATEGORY_SAVED', 'Kategori lagret');
@define('CATEGORY_ALREADY_EXIST', 'A category with the name "%s" already exist');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategori #%s ble slettet. Gamle artikler flyttet til kategori #%s');
@define('CATEGORY_DELETED', 'Kategori #%s ble slettet.');
@define('INVALID_CATEGORY', 'Ingen kategori ble valgt for sletting');
@define('EDIT_THIS_CAT', 'Editing "%s"');
@define('CATEGORY_REMAINING', 'Delete this category and move its entries to this category');
@define('PARENT_CATEGORY', 'Hovedkategori');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Oppret ny kategori');
@define('ALREADY_SUBCATEGORY', '%s er allerede en underkategori av %s.');
@define('NO_CATEGORIES', 'No categories');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import data');
@define('EXPORT_ENTRIES', 'Export entries');
@define('EXPORT_FEED', 'Export full RSS feed');
@define('CREATE_THUMBS', 'Lag minibilder på nytt');
@define('WARNING_THIS_BLAHBLAH', "ADVARSEL:\\nDette kan ta lang tid hvis det er mange bilder uten minibilder.");
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
@define('TEMPLATE_SET', '\'%s\' has been set as your active template');
@define('WARNING_TEMPLATE_DEPRECATED', 'Warning: Your current template is using a deprecated template method, you are advised to update if possible');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Custom admin interface available');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Sett som mal');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Sjekk &amp; lagre');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Fjern valgte plugins');
@define('SAVE_CHANGES_TO_LAYOUT', 'Lagre layout-endringene');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synkronisere databasen med bildemappen');
@define('SYNC_DONE', 'Ferdig (Synkroniserte %s bilder).');
@define('RESIZE_BLAHBLAH', '<b>Endre størrelse på %s</b>');
@define('ORIGINAL_SIZE', 'Original størrelse: <i>%sx%s</i> pixel');
@define('RESIZING', 'Endre dimensjoner');
@define('RESIZE_DONE', 'Ferdig (Endret %s bilder).');
@define('KEEP_PROPORTIONS', 'Bevar forholdet');
@define('REALLY_SCALE_IMAGE', 'Er du sikker på at du vil endre størrelsen på dette bildet? Det er ingen vei tilbake!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Her kan du justere bildets størrelse. Hvis du vil bevare proporsjonene, behøver du bare taste en av verdiene og trykke på TAB-tasten.  Jeg vil automatisk beregne den andre verdien:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Ny størrelse: ');
@define('SCALING_IMAGE', 'Endre størrelsen på %s til %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Mappen <strong>%s</strong> er oprettet.');
@define('PARENT_DIRECTORY', 'Hovedmappe');
@define('CONFIRM_DELETE_DIRECTORY', 'Er du sikker på du vil slette alt innholdet i mappen %s?');
@define('ERROR_NO_DIRECTORY', 'Feil: Mappen %s eksisterer ikke');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Kunne ikke fjerne en ikke-tom mappe. Afkryss "tving gjennom sletting"-feltet hvis du vil slette disse og trykk deretter på Submit igjen. Eksisterende filer er:');
@define('DIRECTORY_DELETE_FAILED', 'Sletting av mappe %s mislyktes. Sjekk rettigheter eller ovenstående beskjeder.');
@define('DIRECTORY_DELETE_SUCCESS', 'Mappen %s er slettet.');
@define('CHECKING_DIRECTORY', 'Sjekker filer i mappen %s');
@define('DELETE_DIRECTORY', 'Delete directory');
@define('DELETE_DIRECTORY_DESC', 'You are about to delete the contents of a directory that contains media files, possibly files used in some of your entries.');
@define('FORCE_DELETE', 'Delete ALL files in this directory, including those not known by Serendipity');
@define('CREATE_DIRECTORY', 'Create directory');
@define('CREATE_NEW_DIRECTORY', 'Create new directory');
@define('CREATE_DIRECTORY_DESC', 'Here you can create a new directory to place media files in. Choose the name for your new directory and select an optional parent directory to place it in.');
@define('ABOUT_TO_DELETE_FILE', 'Du er i ferd med å slette <b>%s</b><br />Hvis du bruker denne filen i noen av postene dine vil dette forårsake døde lenker eller bilder<br />Er du sikker på at du vil gå videre?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Feil: Filen finnes allerede på din maskin!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Kunne ikke finne filen ved navn <b>%s</b>, den er kanskje allerede slettet?');
@define('ERROR_FILE_FORBIDDEN', 'You are not allowed to upload files with active content');
@define('REMOTE_FILE_NOT_FOUND', 'Filen kunne ikke finnes på serveren, er du sikker på at URL-en: <b>%s</b> er korrekt?');
@define('FILE_FETCHED', '%s hentet: %s');
@define('FILE_UPLOADED', 'Filen %s er lastet opp: %s');
@define('DELETE_FILE_FAIL', 'Unable to delete file <b>%s</b>');
@define('DELETE_FILE', 'Slettet filen kalt <b>%s</b>');
@define('FOUND_FILE', 'Fant ny/endret fil: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Feil: Det nye filnavnet brukes allerede, velg et andet!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'hotlinked');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Oppgi det nye navn for: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Legg til et bilde...');
@define('THUMB_CREATED_DONE', 'Minibilde er oprettet.<br>Utført.');
@define('THUMBNAIL_USING_OWN', 'Bruker %s i seg selv som minibilde, fordi det allerede er så lite.');
@define('THUMBNAIL_FAILED_COPY', 'Ville gjerne ha brukt %s som minibilde i seg selv, men kunne ikke kopiere!');
@define('DELETE_THUMBNAIL', 'Slettet bildet med navn <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Det oppstod en ukjent feil, filen ble ikke lastet opp. Kanskje er din filstørrelse større end den maksimale størrelse tillatt av ditt serveroppsett. Spør din webtilbyder eller rediger din php.ini fil for å tillate uploads av større filer.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', 'File hotlinked.<br />Done.');
@define('DELETE_HOTLINK_FILE', 'Deleted the hotlinked file entitled <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Unable to execute: "%s", error: %s, return var: %d');
@define('SKIPPING_FILE_EXTENSION', 'Ignorerte filen: Manglende filtype %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Ignorerte fil: %s er ikke lesbar.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Jeg vil bruke minibildet i min artikkel.');
@define('I_WANT_BIG_IMAGE', 'Jeg vil bruke det originale bildet i min artikkel.');
@define('I_WANT_NO_LINK', 'Vis bildet uten link');
@define('I_WANT_IT_TO_LINK', 'Vis bildet med link');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Bildestørrelse');
@define('IMAGE_ALIGNMENT', 'Bildejustering');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Sett inn bilde');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Du valgte %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Rotate image 90 degrees counter-clockwise');
@define('IMAGE_ROTATE_RIGHT', 'Rotate image 90 degrees clockwise');
@define('MEDIA_RENAME', 'Gi denne filen nytt navn');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Filnavn');
@define('SORT_ORDER_EXTENSION', 'Filtype');
@define('SORT_ORDER_SIZE', 'Filstørrelse');
@define('SORT_ORDER_WIDTH', 'Bildebredde');
@define('SORT_ORDER_HEIGHT', 'Bildehøyde');
@define('SORT_ORDER_DATE', 'Upload-dato');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Legg til en fil til ditt mediabibliotek:</b><p>Her kan du laste opp mediafiler, eller be meg om å hente dem fra en adresse på nettet!  Hvis du ikke har et passende bilde, <a href="https://images.google.com/" target="_blank">søk etter bilder på Google</a> som passer til tankene dine.  Resultatene er ofte nyttige og morsomme :)</p><p><b>Velg metode:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Oppgi en URL til en fil som skal hentes:');
@define('ENTER_MEDIA_UPLOAD', 'Velg en fil du ønsker å laste opp:');
@define('SAVE_FILE_AS', 'Lagre filen som:');
@define('STORE_IN_DIRECTORY', 'Lagre i følgende katalog: ');
@define('IMAGE_MORE_INPUT', 'Add more images');
@define('ENTER_MEDIA_URL_METHOD', 'Fetch method:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Note: If you choose to hotlink to server, make sure you have permission to hotlink to the designated website, or the website is yours. Hotlink allows you to use off-site images without storing them locally.');
@define('FETCH_METHOD_IMAGE', 'Download image to your server');
@define('FETCH_METHOD_HOTLINK', 'Hotlink to server');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Endre størrelsen på dette bildet');
@define('MEDIA_DELETE', 'Slett denne filen');
@define('FILES_PER_PAGE', 'Antall filer per side');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Ingen bilder funnet');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'alle mapper');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigurasjon skrevet &amp; lagret');
@define('DIAGNOSTIC_ERROR', 'Vi har opdaget noen feil mens vi kørte noen diagnostikker på dine oppgitte informasjoner:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Databaseinnstillinger');
@define('INSTALL_CAT_DB_DESC', 'Her kan du taste inn all databaseinformasjon');
@define('INSTALL_DBTYPE', 'Databasetype');
@define('INSTALL_DBTYPE_DESC', 'Databasetype');
@define('INSTALL_DBHOST', 'Databaseserver');
@define('INSTALL_DBHOST_DESC', 'Hostname til din databaseserver');
@define('INSTALL_DBUSER', 'Databasebrukernavn');
@define('INSTALL_DBUSER_DESC', 'Brukernavnet som er brukt til å koble til databasen din');
@define('INSTALL_DBPASS', 'Databasepassord');
@define('INSTALL_DBPASS_DESC', 'Passordet som passer til brukernavnet over');
@define('INSTALL_DBNAME', 'Databasenavn');
@define('INSTALL_DBNAME_DESC', 'Navnet på din database');
@define('INSTALL_DBPREFIX', 'Databasetabell-prefiks');
@define('INSTALL_DBPREFIX_DESC', 'Prefiks på tabellnavn, f.eks. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Use persistent connections');
@define('INSTALL_DBPERSISTENT_DESC', 'Enable the usage of persistent database connections, read more <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">here</a>. This is normally not recommended');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Baner');
@define('INSTALL_CAT_PATHS_DESC', 'Forskjellige baner til forskjellige essensielle mapper og filer. Glem ikke etterfølgende slasher på biblioteker!');
@define('INSTALL_FULLPATH', 'Full bane');
@define('INSTALL_FULLPATH_DESC', 'Den fulle og absolutte bane til din serendipity-installasjon');
@define('INSTALL_UPLOADPATH', 'Upload-bane');
@define('INSTALL_UPLOADPATH_DESC', 'Alle uploads blir plassert her, relativ til \'Full bane\' - typisk \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativ bane');
@define('INSTALL_RELPATH_DESC', 'Bane til Serendipity i henhold til din browser, typisk \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativ mal-bane');
@define('INSTALL_RELTEMPLPATH_DESC', 'Bane til mappen som inneholder dine maler - Relativ til \'relative bane\'');
@define('INSTALL_RELUPLOADPATH', 'Relativ upload-bane');
@define('INSTALL_RELUPLOADPATH_DESC', 'Bane til dine uploads i henhold til din browser - Relativ til \'relative bane\'');
@define('INSTALL_URL', 'URL til din blogg');
@define('INSTALL_URL_DESC', 'Base-URL for din Serendipity-installasjon');
@define('INSTALL_AUTODETECT_URL', 'Autodetect used HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'If set to "true", Serendipity will ensure that the HTTP Host which was used by your visitor is used as your BaseURL setting. Enabling this will let you be able to use multiple domain names for your Serendipity Blog, and use the domain for all follow-up links which the user used to access your blog.');
@define('INSTALL_INDEXFILE', 'Index-fil');
@define('INSTALL_INDEXFILE_DESC', 'Navnet på din Serendipity index-fil');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Defines various URL patterns to define permanent links in your blog. It is suggested that you use the defaults; if not, you should try to use the %id% value where possible to prevent Serendipity from querying the database to lookup the target URL.');
@define('INSTALL_PERMALINK', 'Permalink Entry URL structure');
@define('INSTALL_PERMALINK_DESC', 'Here you can define the relative URL structure begining from your base URL to where entries may become available. You can use the variables %id%, %title%, %day%, %month%, %year% and any other characters.');
@define('INSTALL_PERMALINK_AUTHOR', 'Permalink Author URL structure');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Here you can define the relative URL structure begining from your base URL to where entries from certain authors may become available. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permalink Category URL structure');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Here you can define the relative URL structure begining from your base URL to where entries from certain categories may become available. You can use the variables %id%, %name%, %parentname%, %description% and any other characters.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permalink RSS-Feed Category URL structure');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Here you can define the relative URL structure begining from your base URL to where RSS-feeds frmo certain categories may become available. You can use the variables %id%, %name%, %description% and any other characters.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed Author URL structure');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Here you can define the relative URL structure beginning from your base URL to where RSS-feeds from specific users may be viewed. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Path to archives');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Path to archive');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Path to categories');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Path to authors');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Path to unsubscribe comments');
@define('INSTALL_PERMALINK_DELETEPATH', 'Path to delete comments');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Path to approve comments');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Path to RSS Feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Path to single plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Path to admin');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Path to search');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Generelle innstillinger');
@define('INSTALL_CAT_SETTINGS_DESC', 'Tilpass måten Serendipity oppfører seg på');
@define('INSTALL_USERNAME', 'Admin-brukernavn');
@define('INSTALL_USERNAME_DESC', 'Brukernavn til admin-login');
@define('INSTALL_PASSWORD', 'Admin-passord');
@define('INSTALL_PASSWORD_DESC', 'Passord til admin-login');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Real name');
@define('USERCONF_REALNAME_DESC', 'The full name of the author. This is the name seen by readers');
@define('INSTALL_EMAIL', 'Admin-email');
@define('INSTALL_EMAIL_DESC', 'E-mailadresse til eieren av bloggen');
@define('INSTALL_SENDMAIL', 'Send e-mailer til admin?');
@define('INSTALL_SENDMAIL_DESC', 'Vil du motta email når kommentare blir gitt til dine artikler?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Navn på blogg');
@define('INSTALL_BLOGNAME_DESC', 'Tittelen på din blogg');
@define('INSTALL_BLOGDESC', 'Blogg-beskrivelse');
@define('INSTALL_BLOGDESC_DESC', 'Beskrivelse av din blogg');
@define('INSTALL_BLOG_EMAIL', 'Blog\'s E-Mail address');
@define('INSTALL_BLOG_EMAIL_DESC', 'This configures the E-Mail address that is used as the "From"-Part of outgoing mails. Be sure to set this to an address that is recognized by the mailserver used on your host - many mailservers reject messages that have unknown From-addresses.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Språk');
@define('INSTALL_LANG_DESC', 'Velg språket på din blogg');
@define('INSTALL_CHARSET', 'Charset selection');
@define('INSTALL_CHARSET_DESC', 'Here you can toggle UTF-8 or native (ISO, EUC, ...) charactersets. Some languages only have UTF-8 translations so that setting the charset to "Native" will have no effects. UTF-8 is suggested for new installations. Do not change this setting if you have already made entries with special characters - this may lead to corrupt characters. Be sure to read more on https://docs.s9y.org/docs/developers/internationalization.html about this issue.');
@define('INSTALL_CAL', 'Calendar Type');
@define('INSTALL_CAL_DESC', 'Choose your desired Calendar format');
@define('AUTOLANG', 'Use visitor\'s browser language as default');
@define('AUTOLANG_DESC', 'If enabled, this will use the visitor\'s browser language setting to determine the default language of your entry and interface language.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Enable Plugin ACL for usergroups?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'If the option "Plugin ACL for usergroups" is enabled in the configuration, you can specify which usergroups are allowed to execute certain plugins/events.');
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
@define('INSTALL_CAT_DISPLAY', 'Utseende og innstillinger');
@define('INSTALL_CAT_DISPLAY_DESC', 'Tilpass hvordan Serendipity ser ut og føles');
@define('INSTALL_FETCHLIMIT', 'Entries to display on frontpage');
@define('INSTALL_FETCHLIMIT_DESC', 'Number of entries to display for each page on the frontend');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Use gzip compressed pages');
@define('INSTALL_USEGZIP_DESC', 'To speed up delivery of pages, we can compress the pages we send to the visitor, given that his browser supports this. This is recommended');
@define('INSTALL_XHTML11', 'Tving gjennom XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Ønsker du å kreve overholdelse av XHTML 1.1 (kan skape problemer i 4.-generasjonsbrowsere)');
@define('INSTALL_POPUP', 'Aktiver bruk av popup-vinduer');
@define('INSTALL_POPUP_DESC', 'Vil du åpne kommentarer og trackbacks i et popupvindu?');
@define('INSTALL_EMBED', 'Er Serendipity embedded?');
@define('INSTALL_EMBED_DESC', 'Hvis du ønsker å kapsle Serendipity inn i en normal side, aktiver da dette direktivet for å ignorere headere og kun skrive ut innholdet. Du kan benytte indexFile-direktivet til å lage en wrapper-fil hvor du plasserer din normale hjemmesides headere. Konsulter README filen for mer informasjon!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Gjøre eksterne lenker klikkbare?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"no": Usjekkede eksterne lenker (topp utgangssider, referanser, brukerkommentarer) er ikke vist - vist som ren tekst hvor mulig, for å forhindre Google-spam (anbefalt).  "yes":  Usjekkede eksterne lenker blir vist som hyperlenker.  Kan bli overstyrt i sidebar plugin-konfigurasjon!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Blokkér referanser');
@define('INSTALL_BLOCKREF_DESC', 'Er det noen spesielle hosts du ikke ønsker skal vises i referanselisten?  Seprarer listen av hostnavn med \';\' og merk deg at disse er blokkert med substring-masker!');
@define('INSTALL_REWRITE', 'URL-omskrivning');
@define('INSTALL_REWRITE_DESC', 'Velg hvilken regel du ønsker å bruke når du genererer URL-er. Aktivering av omskrivningsregler vil gjøre URL-ene dine flotte og gjøre din side mer egnet for indeksering av roboter som google. Webserveren må enten støtte mod_rewrite eller "AllowOverride All" for ditt Serendipity-bibliotek. Standardindstillingen er automatisk beregnet');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Server time Offset');
@define('INSTALL_OFFSET_DESC', 'Enter the amount of hours between the date of your webserver (current: %clock%) and your desired time zone');
@define('INSTALL_SHOWFUTURE', 'Show future entries');
@define('INSTALL_SHOWFUTURE_DESC', 'If enabled, this will show all entries in the future on your blog. Default is to hide those entries and only show them if the publish date has arrived.');
@define('INSTALL_ACL', 'Apply read-permissions for categories');
@define('INSTALL_ACL_DESC', 'If enabled, the usergroup permission settings you setup for categories will be applied when logged-in users view your blog. If disabled, the read-permissions of the categories are NOT applied, but the positive effect is a little speedup on your blog. So if you don\'t need multi-user read permissions for your blog, disable this setting.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Show full articles with extended body inside RSS feed');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Bilde til RSS-feed');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL til et bilde i GIF/JPEG/PNG format, hvis tilgjengelig. (tom: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Bildebredde');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'i pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Bildehøjde');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'i pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Show E-Mail addresses?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Feltet "Hovedredaktør"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailadressen til redaktøren, hvis tilgjengelig. (tom: skjult) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Feltet "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Emailadressen til webmasteren, hvis tilgjengelig. (tom: skjult) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Feltet "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Antallet minutter din blog skal caches av eksterne sider/programmer (tom: skjult) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Feltet "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Skal "pubDate"-feltet være innkapslet til en RSS-kanal, for å vise datoen på den nyeste artikkelen?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Bildekonverterings-innstillinger');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Generell informasjon om hvordan Serendipity skal håndtere bilder');
@define('INSTALL_IMAGEMAGICK', 'Bruk Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Har du ImageMagick installert og ønsker å bruke det til å endre størrelse på bilder?');
@define('INSTALL_IMAGEMAGICKPATH', 'Bane til convert binærfil');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Full bane og navn på din ImageMagick convert binærfil');
@define('INSTALL_THUMBSUFFIX', 'Thumbnail-suffiks');
@define('INSTALL_THUMBSUFFIX_DESC', 'Thumbnails vil bli gitt navn etter følgende mønster: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', 'Thumbnail-dimensjoner');
@define('INSTALL_THUMBWIDTH_DESC', 'Statisk maksimalbredde på en auto-genereret thumbnail');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. file upload size');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Enter the maximum filesize for uploaded files in bytes. This setting can be overruled by server-side settings in PHP.ini: upload_max_filesize, post_max_size, max_input_time all take precedence over this option. An empty string means to only use the server-side limits.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. width of image files for upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Enter the maximum image width in pixels for uploaded images.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. height of image files for upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Enter the maximum image height in pixels for uploaded images.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Enable on-the-fly media synchronization');
@define('ONTHEFLYSYNCH_DESC', 'If enabled, Serendipity will compare the media database with the files stored on your server and synchronize the database and directory contents.');
@define('MEDIA_DYN_RESIZE', 'Allow dynamic image resizing?');
@define('MEDIA_DYN_RESIZE_DESC', 'If enabled, the media selector can return images in any requested size via a GET variable. The results are cached, and thus can create a large filebase if you make intensive use of it.');
@define('MEDIA_EXIF', 'Import EXIF/JPEG image data');
@define('MEDIA_EXIF_DESC', 'If enabled, existing EXIF/JPEG metadata of images will be parsed and stored in the database for display in the media gallery.');
@define('MEDIA_PROP', 'Media properties');
@define('MEDIA_PROP_DESC', 'Enter a list of ";" separated property fields you want to define for each media file');
@define('MEDIA_PROP_MULTIDESC', '(You can append ":MULTI" after any item to indicate that this item will contain long text instead of just some characters)');
@define('MEDIA_KEYWORDS', 'Media keywords');
@define('MEDIA_KEYWORDS_DESC', 'Enter a list of ";" separated words that you want to use as pre-defined keywords for media items.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Dine personlige detaljer');
@define('USERCONF_CAT_PERSONAL_DESC', 'Endre dine personlige detaljer');
@define('USERCONF_USERNAME', 'Ditt brukernavn');
@define('USERCONF_USERNAME_DESC', 'Brukernavnet du vil bruke for å logge inn i bloggen');
@define('USERCONF_PASSWORD', 'Ditt passord');
@define('USERCONF_PASSWORD_DESC', 'Passordet du vil bruke for å logge inn i bloggen');
@define('USERCONF_CHECK_PASSWORD', 'Old Password');
@define('USERCONF_CHECK_PASSWORD_DESC', 'If you change the password in the field above, you need to enter the current user password into this field.');
@define('USERCONF_USERLEVEL', 'Access level');
@define('USERCONF_USERLEVEL_DESC', 'This level is used to determine what kind of access this user has to the blog');
@define('USERCONF_GROUPS', 'Group Memberships');
@define('USERCONF_GROUPS_DESC', 'This user is a member of the following groups. Multiple memberships are possible.');
@define('USERCONF_EMAIL', 'Din e-mailadresse');
@define('USERCONF_EMAIL_DESC', 'Din personlige e-mailadresse');
@define('INSTALL_WYSIWYG', 'Bruk WYSIWYG-editor');
@define('INSTALL_WYSIWYG_DESC', 'Vil du benytte WYSIWYG-editoren? (Virker med IE5+, delvis i Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Send beskjeder om nye kommentarer?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Ønsker du å motta en mail når nye kommentarer blir lagt til dine artikler?');
@define('USERCONF_SENDTRACKBACKS', 'Send bjeskeder om nye trackbacks?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Ønsker du å motta en mail når nye trackbacks blir lagt til dine artikler?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Tillatelse: Publisere artikler?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Kan denne brukeren publisere artikler?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Default settings for new entries');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'NOTICE: The userlevel attribute is now only used for backward compatibility to plugins and fallback authorisation. User privileges are now handled by group memberships!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'You did not specify the right old password, and are not authorized to change the new password. Your settings were not saved.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Access personal configuration');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Change userlevels');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Change "forbid creating entries"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Change right to publish entries');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Access system configuration');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Access blog-centric configuration');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administrate entries');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administrate other user\'s entries');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import entries');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administrate categories');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administrate other user\'s categories');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Delete categories');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administrate users');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Delete users');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Change userlevel');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administrate users that are in your group(s)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administrate users that are not in your group(s)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Create new users');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administrate usergroups');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administrate plugins');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administrate other user\'s plugins');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administrate media files');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administrate media directories');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Add new media files');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Delete media files');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administrate other user\'s media files');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: View media files');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Sync thumbnails');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administrate comments');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administrate templates');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: View other user\'s media files');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Din artikkel ble lagret');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Trådet');
@define('COMMENTS_VIEWMODE_LINEAR', 'Lineær');
@define('DISPLAY_COMMENTS_AS', 'Vis kommentarer som');
@define('COMMENTS_DISABLE', 'Tillat ikke kommentarer til denne artikkelen');
@define('COMMENTS_ENABLE', 'Tillat kommentarer til denne artikkelen');
@define('COMMENTS_CLOSED', 'Forfatteren har valgt ikke å tillate kommentarer til denne artikkelen');
@define('VIEW_EXTENDED_ENTRY', 'Les resten av "%s"');
@define('TRACKBACK_SPECIFIC', 'Trackback URI til denne artikkel');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Vis fullt');
@define('VIEW_TOPICS', 'Vis temaer');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Emner av');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Det var problemer under innsettelsen av artiklene!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Husk opplysninger?');
@define('SUBMIT_COMMENT', 'Legg til kommentar');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Abonnér på denne artikkelen');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Kommentar #%s ser allerede ut til å være godkjent');
@define('COMMENT_EDITED', 'Den valgte kommentar er redigert');
@define('COMMENTS_WILL_BE_MODERATED', 'Kommentarer på denne artikkelen vil først bli vist når de er blitt godkjendt.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Advarsel: Denne kommentaren krever godkjennelse før den blir vist');
@define('DELETE_COMMENT', 'Slett kommentar');
@define('APPROVE_COMMENT', 'Godkjenn kommentar');
@define('REQUIRES_REVIEW', 'Krever godkjennelse');
@define('COMMENT_APPROVED', 'Kommentar #%s er godkjent');
@define('COMMENT_DELETED', 'Kommentar #%s er slettet');
@define('COMMENTS_MODERATE', 'Kommentarer og trackback til denne posten krever moderasjon.');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Advarsel:  Denne trackbacken trenger godkjennelse før den blir vist.');
@define('DELETE_TRACKBACK', 'Slett trackback');
@define('APPROVE_TRACKBACK', 'Godkjenn trackback');
@define('TRACKBACK_APPROVED', 'Trackback #%s har blitt godkjent');
@define('TRACKBACK_DELETED', 'Trackback #%s har blitt slettet');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Topnivå');
@define('VIEW_COMMENT', 'Se kommentar');
@define('VIEW_ENTRY', 'Se posting');
@define('LINK_TO_ENTRY', 'Link til artikkel');
@define('LINK_TO_REMOTE_ENTRY', 'Link til ekstern artikkel');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Sender trackback til URI %s...');
@define('TRACKBACK_SENT', 'Trackback suksess');
@define('TRACKBACK_FAILED', 'Trackback slo feil: %s');
@define('TRACKBACK_NOT_FOUND', 'Fant ingen trackback-URI.');
@define('TRACKBACK_URI_MISMATCH', 'Den autofunnede trackback-URI-en stemmer ikke overens med vår mål-URI.');
@define('TRACKBACK_CHECKING', 'Sjekker <u>%s</u> for mulige trackbacks...');
@define('TRACKBACK_NO_DATA', 'Mål inneholdt ingen data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Ingen Trackback sendt:  Kunne ikke åpne tilkobling til %s på port %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Ny kommentar til abonnert artikkel "%s"');
@define('SUBSCRIPTION_MAIL', "Hej %s,\n\nEn ny kommentar er blitt lagt til en artikkel du abonnerer på hos \"%s\", ved navn \"%s\"\nNavnet på skribenten er: %s\n\nDu kan finne artikkelen her: %s\n\nDu kan stoppe ditt abonnement ved å klikke på denne linken: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hei %s,\n\nEn ny trackback er laget til en artikkel du abonnerer på hos \"%s\", ved navn \"%s\"\nNavnet på skribenten er: %s\n\nDu kan finne artiklen her: %s\n\nDu kan stoppe ditt abonnement ved å klikke på denne linken: %s\n");
@define('SIGNATURE', "\n-- \n%s bruker Serendipity.\nDen bedste blogg på dette, du kan også bruke det.\nKikk nærmere på <https://s9y.org> for å finne mere informasjon.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'En ny kommentar har blitt opprettet på din blog "%s", til artiklen med navnet "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'En ny trackback har blitt laget til din artikkel ved navn "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Du har følgende muligheter:');
@define('NEW_TRACKBACK_TO', 'Ny trackback opprettet til');
@define('NEW_COMMENT_TO', 'Ny kommentar opprettet til');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Ingen artikler ble funnet som inneholdt %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Ditt søk på %s retunerte %s resultater:');
@define('SEARCH_TOO_SHORT', 'Your search-query must be longer than 3 characters. You can try to append * to shorter words, like: s9y* to trick the search into using shorter words.');
@define('SEARCH_ERROR', 'The search function did not work as expected. Notice for the administrator of this blog: This may happen because of missing index keys in your database. On MySQL systems your database user account needs to be privileged to execute this query: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> The specific error returned by the database was: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Din kommentar indeholdt ikke noe, vennligst gå %stilbage%s og prøv igjen');
@define('COMMENT_NOT_ADDED', 'Din kommentar kunne ikke legges til fordi kommentarer til denne artikkelen er blitt deaktivert.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Configuration syntax wrong for option "%s". Needs content of type "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Viser listen over kategorier.');
@define('CATEGORIES_PARENT_BASE', 'Only show categories below...');
@define('CATEGORIES_PARENT_BASE_DESC', 'You can choose a parent category so that only the child categories are shown.');
@define('CATEGORIES_HIDE_PARALLEL', 'Hide categories that are not part of the category tree');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'If you want to hide categories that are part of a different category tree, you need to enable this. This feature makes most sense if used in conjunction with a multi-blog using the "Properties/Tempaltes of categories" plugin.');
@define('CATEGORIES_HIDE_PARENT', 'Hide the selected parent category?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'If you restrict the listing of categories to a specific category, by default you will see that parent category within the output listing. If you disable this option, the parent category name will not be displayed.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Enable Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'If this option is enabled, the plugin will utilize Smarty-Templating features to output the category listing. If you enable this, you can change the layout via the "plugin_categories.tpl" template file. Enabling this option will impact performance, so if you do not need to make customizations, leave it disabled.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Show number of entries per category?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Allow visitors to display multiple categories at once?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each category in this sidebar plugin. Users can check those boxes and then see entries belonging to their selection.');
@define('CATEGORIES_TO_FETCH', 'Kategorier som skal hentes');
@define('CATEGORIES_TO_FETCH_DESC', 'Hent kategorier fra en bestemt forfatter?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Shows a list of authors');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Show number of articles next to author name?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'If this option is enabled, the number of articles by this author is shown next to the authors name in parentheses.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Syndikering');
@define('SHOWS_RSS_BLAHBLAH', 'Viser RSS syndikeringslinker');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s-feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91-feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0-feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0-feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0-kommentarer');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3-feed');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'The ID of the feed you wish to publish');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner image');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Name of image to display (or leave blank for counter), located on feedburner.com, ex: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner title');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Title (if any) to display alongside the image');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner image text');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (if any) to display when hovering the image');
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
@define('ARCHIVE_COUNT', 'Number of items in the list');
@define('ARCHIVE_COUNT_DESC', 'The total number of months, weeks or days to display');
@define('ARCHIVE_FREQUENCY', 'Calendar item frequency');
@define('ARCHIVE_FREQUENCY_DESC', 'The calendar interval to use between each item in the list');
@define('BROWSE_ARCHIVES', 'Bla gjennom arkiv etter måneder');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Vis "Serendipity" som tekst');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vil vise "Serendipity Weblog" som tekst');
@define('POWERED_BY_SHOW_IMAGE', 'Vis "Serendipity" med en logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Vis Serendipity-logoen');
@define('ADVERTISES_BLAHBLAH', 'Reklamer for din blogs opprinnelse');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Bruk https ved innlogging');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Peker login-linken til en https-adresse. Webserveren din må støtte dette!');
@define('SUPERUSER', 'Blogg-administrasjon');
@define('SUPERUSER_OPEN_ADMIN', 'Åpne administrasjon');
@define('SUPERUSER_OPEN_LOGIN', 'Åpne login-skjerm');
@define('ALLOWS_YOU_BLAHBLAH', 'Legger en link til blogg-administrasjonen i sidebaren.');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalender');
@define('CALENDAR_BOW_DESC', 'Ukedagen som skal være starten på uken.  Standard er mandag');
@define('QUICKJUMP_CALENDAR', 'Hurtigkalender');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Starten på uken');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Enable Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'If enabled, plugins can hook into the calendar to display their own events highlighted. Only enable if you have installed plugins that need this, otherwise it just decreases performance.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Søk etter en artikkel');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Inneholder en bit HTML i din sidebar');
@define('THE_NUGGET', 'HTML-innholdet av din nugget');
@define('BACKEND_TITLE', 'Additional information in Plugin Configuration screen');
@define('BACKEND_TITLE_FOR_NUGGET', 'Here you can define a custom string which is displayed in the Plugin Configuration screen together with the description of the HTML Nugget plugin. If you have multiple HTML nuggets with an empty title, this helps to distinct the plugins from another.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Vis topp utgangssider/referanser som links?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"no": Utgangssider og referanser blir vist som ren tekst for å forhindre Google-spam.  "yes": Utgangssider og referanser blir vist som hyperlinker.  "default": Bruk innstillinger fra global konfigurasjon (anbefalt).');
@define('HAVE_TO_BE_LOGGED_ON', 'Du må være logget inn for å kunne se denne siden');
@define('WELCOME_TO_ADMIN', 'Welcome to the Serendipity Administration Suite.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Short Comment');
@define('MEDIA_PROPERTY_COMMENT2', 'Long Comment');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Title');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity er ennå ikke installert. Klikk <a href="%s">her for å installere</a> nå.');
@define('COMMENT_ADDED_CLICK', 'Klik %her for å gå tilbake%s til kommentarene, og %sher for å lukke%s dette vinduet.');
@define('COMMENT_NOT_ADDED_CLICK', 'Klikk %sher for å gå tilbake%s til kommentarene, og %sher for å lukke%s dette vinduet. ');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'Mål-URI oversteg maksimum filstørrelse på %s bytes.');
@define('CLICK_FILE_TO_INSERT', 'Klikk på filen du ønsker å sette inn:');
@define('SELECT_FILE', 'Velg fil å sette inn');
@define('MANAGE_IMAGES', 'Administrer bilder');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'eller');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: External Services');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Features');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Full Mods');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Views');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Entry Related');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Usermanagement');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta information');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Templates');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Features');
@define('PLUGIN_GROUP_IMAGES', 'Images');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup');
@define('PLUGIN_GROUP_STATISTICS', 'Statistics');
@define('IMPORT_WELCOME', 'Welcome to the Serendipity import utility');
@define('USER_SELF_INFO', 'Logged in as %s (%s)');
@define('IMPORT_WHAT_CAN', 'Here you can import entries from other weblog software applications');
@define('IMPORT_SELECT', 'Please select the software you wish to import from');
@define('MANAGE_STYLES', 'Administrer temaer');
@define('SELECT_A_PLUGIN_TO_ADD', 'Select the plugin which you wish to install');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Below is a list of installed plugins');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Avbryt nå');
@define('DELETE_SELECTED_COMMENTS', 'Slett valgte kommentarer');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Finn media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Feil: Det gamle filnavnet finnes ikke!');
@define('ERROR_SOMETHING', 'Feil: Der gikk noe galt');
@define('DIRECT_LINK', 'Direktelink til denne artikkel');
@define('SELECT_TEMPLATE', 'Velg den malen du ønsker å bruke til din blog');
@define('DATABASE_ERROR', 'serendipityfeil: Kunne ikke oprette forbindelse til databasen - Avbryter.');
@define('LIMIT_TO_NUMBER', 'Hvor mange punkter skal vises?');
@define('DIRECTORIES_AVAILABLE', 'I listen over tilgjengelige undermapper, kan du klikke på en ny mappe for å oprette en ny mappe innenfor den stukturen.');
@define('CATEGORY_INDEX', 'Below is a list of categories available to your entries');
@define('PAGE_BROWSE_PLUGINS', 'Page %s of %s, totalling %s plugins.');
@define('CHARSET_NATIVE', 'Native');
@define('XMLRPC_NO_LONGER_BUNDLED', 'The XML-RPC API Interface to Serendipity is no longer bundled because of ongoing security issues with this API and not many people using it. Thus you need to install the XML-RPC Plugin to use the XML-RPC API. The URL to use in your applications will NOT change - as soon as you have installed the plugin, you will again be able to use the API.');
@define('AUTHORS_ALLOW_SELECT', 'Allow visitors to display multiple authors at once?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each author in this sidebar plugin.  Users can check those boxes and see entries matching their selection.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
