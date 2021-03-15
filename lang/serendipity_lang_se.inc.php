<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation by Torbj�rn Hedberg <torbjorn@sm.luth.se>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'sv_SV.ISO8859-1, sv_SV.ISO-8859-1, swedish, sv, sv_SV, sv_SE.ISO8859-1, sv_SE.ISO-8859-1, sv_SE');
@define('DATE_FORMAT_ENTRY', '%A, %B %e. %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'se');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'F�rhandsgranska');
@define('DATE', 'Datum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Utseende');
@define('LOGIN', 'Logga in');
@define('LOGOUT', 'Logga ut');
@define('LOGGEDOUT', 'Utloggad.');
@define('CREATE', 'Skapa');
@define('BACK', 'Tillbaka');
@define('FORWARD', 'Fram�t');
@define('ANONYMOUS', 'Anonymt');
@define('RECENT', 'Senaste...');
@define('OLDER', '�ldre...');
@define('DONE', 'Klar');
@define('TITLE', 'Titel');
@define('DESCRIPTION', 'Beskrivning');
@define('PLACEMENT', 'Placering');
@define('DELETE', 'Ta bort');
@define('SAVE', 'Spara');
@define('UP', 'UPP');
@define('DOWN', 'NER');
@define('PREVIOUS', 'F�reg�ende');
@define('NEXT', 'N�sta');
@define('ENTRIES', 'Artiklar');
@define('CATEGORIES', 'Kategorier');
@define('NAME', 'Namn');
@define('EMAIL', 'E-post');
@define('HOMEPAGE', 'Hemsida');
@define('COMMENT', 'Kommentar');
@define('VIEW', 'Visa');
@define('HIDE', 'D�lj');
@define('WEEK', 'Vecka');
@define('WEEKS', 'Veckor');
@define('MONTHS', 'M�nader');
@define('DAYS', 'Dagar');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Framg�ng');
@define('COMMENTS', 'Kommentarer');
@define('ADD_COMMENT', 'L�gg till kommentar');
@define('NO_COMMENTS', 'Inga kommentarer');
@define('POSTED_BY', 'Skapad av');
@define('ON', 'den');
@define('NO_CATEGORY', 'Ingen kategori');
@define('CATEGORY', 'Kategori');
@define('EDIT', 'Redigera');
@define('GO', 'K�r!');
@define('YES', 'Ja');
@define('NO', 'Nej');
@define('NOT_REALLY', 'Nej');
@define('DUMP_IT', 'Ja');
@define('IN', 'i');
@define('AT', 'kl');
@define('LEFT', 'V�nster');
@define('RIGHT', 'H�ger');
@define('CENTER', 'centrera');
@define('ARCHIVES', 'Arkiv');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Snabbs�k');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Inga trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Utdrag');
@define('TRACKED', 'Sp�rad');
@define('USER', 'Anv�ndare');
@define('USERNAME', 'Anv�ndarnamn');
@define('PASSWORD', 'L�senord');
@define('HIDDEN', 'Dold');
@define('IMAGE', 'Bild');
@define('VIDEO', 'Video');
@define('AUTHOR', 'F�rfattare');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'Version');
@define('INSTALL', 'Installera');
@define('REPLY', 'Svara');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Fel');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Tvinga');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administration');
@define('ADMIN_FRONTPAGE', 'Framsida');
@define('QUOTE', 'Citat');
@define('NONE', 'ingen');
@define('GROUP', 'Grupp');
@define('AUTHORS', 'F�rfattare');
@define('UPGRADE', 'Uppgradera');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Alla f�rfattare');
@define('PREVIOUS_PAGE', 'f�reg�ende sida');
@define('NEXT_PAGE', 'n�sta sida');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Alla kategorier');
@define('LAST_UPDATED', 'Senast uppdaterad');
@define('IP_ADDRESS', 'IP-adress');
@define('CHARSET', 'Teckenupps�ttning');
@define('REFERER', 'H�nvisare');
@define('APPROVE', 'Godk�nn');
@define('NOT_FOUND', 'Ej hittad');
@define('WRITABLE', 'Skrivbar');
@define('NOT_WRITABLE', 'Ej skrivbar');
@define('WELCOME_BACK', 'V�lkommen tillbaka,');
@define('USE_DEFAULT', 'F�rvalt');
@define('SORT_BY', 'Sortera utefter');
@define('SORT_ORDER', 'Sorteringordning');
@define('SORT_ORDER_ASC', 'Stigande');
@define('SORT_ORDER_DESC', 'Fallande');
@define('FILTERS', 'Filter');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Visa/d�lj alla');
@define('TOGGLE_OPTION', 'Visa/d�lj val');
@define('IN_REPLY_TO', 'Som svar till');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Katalog');
@define('BACK_TO_BLOG', 'Tillbaka till bloggen');
@define('HTML_NUGGET', 'HTML-snutt');
@define('TITLE_FOR_NUGGET', 'Titel p� HTML-snutten');
@define('COMMENT_ADDED', 'Din kommentar �r tillagd. ');
@define('ENTRIES_FOR', 'Artiklar fr�n %s');
@define('NO_ENTRIES_TO_PRINT', 'Ingen artikel att skriva ut');
@define('COMMENT_DELETE_CONFIRM', '�r du s�ker p� att du vill ta bort kommentaren #%d, skriven av %s?');
@define('DELETE_SURE', 'Vill du verkligen ta bort #%s permanent?');
@define('MEDIA_FULLSIZE', 'Full storlek');
@define('SIDEBAR_PLUGIN', 'Insticksmodul f�r sid-navigatorn');
@define('EVENT_PLUGIN', 'H�ndelsebaserad insticksmodul');
@define('PLUGIN_ITEM_DISPLAY', 'Var skall denna post visas?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Endast utvidgad artikel');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Endast �versiktssida');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Alltid');
@define('DIRECTORY_WRITE_ERROR', 'Kan inte skriva till katalogen %s. Kontrollera r�ttigheter.');
@define('FILE_WRITE_ERROR', 'Kan inte skriva till filen %s.');
@define('INCLUDE_ERROR', 'Serendipity fel: kunde inte inkludera %s - avslutar.');
@define('DO_MARKUP', 'Utf�r Markup Transformations');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Datumformatering');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formatet p� artikelns verkliga datum, med hj�lp PHPs strftime() variabler. (Ursprungsv�rde: "%s")');
@define('APPLY_MARKUP_TO', 'Applicera textdekoration p� %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML-knapp');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'L�nkar till XML-matningar kommer att visas med denna bild. L�mna tomt f�r standardbild, skriv \'none\' f�r att inaktivera.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Tar bort filen %s...');
@define('SETTINGS_SAVED_AT', 'De nya inst�llningarna har sparats p� %s');
@define('INVERT_SELECTIONS', 'Invertera val');

@define('PERSONAL_SETTINGS', 'Personliga inst�llningar');
@define('DO_MARKUP_DESCRIPTION', 'Applicera f�rkortad textdekoration (smilies, snabbformatering med *, /, _, ...). Att avvaktivera detta kommer att bevara all HTML-kod i texten.');
@define('BASE_DIRECTORY', 'Baskatalog');
@define('PERM_READ', 'L�stillst�nd');
@define('PERM_WRITE', 'Skrivtillst�nd');
@define('PERM_DENIED', 'Tillst�nd nekas.');
@define('CURRENT_AUTHOR', 'Innevarande f�rfattare');
@define('PLUGIN_ACTIVE', 'Aktiv');
@define('PLUGIN_INACTIVE', 'Inaktiv');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'L�gg till denna l�nk som bokm�rke och anv�nd den sen p� valfri sida som du vill blogga om f�r att snabbt komma �t din Serendipity-blogg.');
@define('SET_TO_MODERATED', 'Moderera');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Installation av Serendipity');
@define('WELCOME_TO_INSTALLATION', 'V�lkommen till Serendipitys installation');
@define('FIRST_WE_TAKE_A_LOOK', 'Unders�ker din nuvarande installation och f�rs�ker diagnostisera kompatibilitetsproblem');
@define('ERRORS_ARE_DISPLAYED_IN', 'Fel visas i %s, rekommendationer i %s och framg�ng i %s');
@define('RED', 'r�d');
@define('YELLOW', 'gul');
@define('GREEN', 'gr�n');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s f�rinstallationsrapport');
@define('INTEGRITY', 'Verifiera installationens integritet');
@define('PHP_INSTALLATION', 'PHP-installation');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operativsystem');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini-konfiguration');
@define('RECOMMENDED', 'Rekomenderad');
@define('ACTUAL', 'Verklig');
@define('PERMISSIONS', 'R�ttigheter');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'R�ttigheter kan st�llas in genom att k�ra f�ljande shellkommando: `<em>%s</em>` p� katalogen som misslyckades, eller genom att st�lla in detta med ett FTP-program');
@define('PROBLEM_DIAGNOSTIC', 'Du inte forts�tta med installationen tills felen ovan har �tg�rdats');
@define('SELECT_INSTALLATION_TYPE', 'V�lj vilken typ av installation du vill anv�nda');
@define('RECHECK_INSTALLATION', 'Kolla installationen igen');
@define('SIMPLE_INSTALLATION', 'Enkel installation');
@define('EXPERT_INSTALLATION', 'Expertinstallation');
@define('COMPLETE_INSTALLATION', 'Komplett installation');
@define('WONT_INSTALL_DB_AGAIN', 'Kommer inte att installera databasen igen');
@define('THEY_DO', 'det g�r de');
@define('THEY_DONT', 'det g�r de inte');
@define('CHECK_DATABASE_EXISTS', 'Kollar om databasen och tabellerna redan finns');
@define('CREATE_DATABASE', 'Skapar standardinst�llning f�r databas...');
@define('ATTEMPT_WRITE_FILE', 'F�rs�ker skriva filen %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Skapar huvudf�rfattare \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Anger standardmall');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installerar standardinsticksmoduler');
@define('SERENDIPITY_INSTALLED', 'Serendipity har installerats');
@define('VISIT_BLOG_HERE', 'Bes�k din nya blogg h�r');
@define('THANK_YOU_FOR_CHOOSING', 'Tack f�r att du valde Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Ett fel uppt�cktes i installationen');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Baseras p�');
@define('ADMIN_FOOTER_POWERED_BY', 'Driven av Serendipity %s och PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standardredakt�r');
@define('USERLEVEL_CHIEF_DESC', 'Chefredakt�r');
@define('USERLEVEL_ADMIN_DESC', 'Administrat�r');
@define('WWW_USER', '�ndra www till den anv�ndare apache k�r som (t.ex. nobody eller www).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Katalogen %s finns inte och kunde inte skapas. Skapa katalogen manuellt');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; k�r <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Kunde inte k�ra %s bin�rfil');
@define('FILE_CREATE_YOURSELF', 'Skapa filen sj�lv eller kontrollera r�ttigheter');
@define('COPY_CODE_BELOW', '<br />* Kopiera koden nedan och l�gg den i %s i din %s mapp:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'N�r du har gjort detta, v�lj "Uppdatera" eller motsvarande i din webbl�sare.');
@define('ERROR_TEMPLATE_FILE', 'Kunde inte �ppna mallfil. Uppdatera Serendipity!');
@define('HTACCESS_ERROR', 'F�r att kontrollera din lokala webbserver-installation m�ste Serendipity kunna skriva till filen ".htaccess". Detta gick inte pga fel r�ttigheter. Justera r�ttigheterna s� h�r: <br />&nbsp;&nbsp;%s<br />ladda om sidan.');
@define('EMPTY_SETTING', 'Du angav ett ogiltigt v�rde f�r "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Din nuvarande version av Serendipity �r %s. Det verkar som om du f�rs�ker uppgradera till %s, s� du beh�ver <a href="%s">klicka h�r</a> f�r att forts�tta uppgraderingsprocessen.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Hej, och v�lkommen till Serendipitys uppgraderings-agent.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Jag �r h�r f�r att hj�lpa dig uppgradera din installation av Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Du ser det h�r meddelandet f�r att du just har installerat Serendipity %s men �nnu inte uppgraderat din databas f�r att passa den h�r versionen');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Databasuppdateringar (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Jag har hittat f�ljande .sql-filer som beh�ver k�ras innan du kan forts�tta anv�nda Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Versionsspecifika uppgifter');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Inga versionsspecifika uppgifter hittade');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Skall jag utf�ra ovanst�ende uppgifter?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nej, jag k�r dem manuellt');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ja, tack');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Det ser ut som om du inte beh�ver k�ra n�gra uppgraderingar');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity uppgraderad');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Du har struntat i uppgraderingsfasen av Serendipity, se till att databasen �r korrekt installerad, och att schemalagda uppgifter k�rs');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Din Serendipity-installation �r nu uppgraderad till version %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Du kan g� tillbaks till din blogg genom att klicka %sh�r%s');
@define('ADMIN_ENTRIES', 'Artiklar');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Kunde inte ansluta till MySQL-databasen: %s.');
@define('COULDNT_SELECT_DB', 'Hittade inte databas: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Hittade inte anv�ndarinformation: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Hittade inte kategoriinformation: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Hittade inte artikelinformation: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Hittade inte kommentarinformation: %s.');
@define('MYSQL_REQUIRED', 'Du m�ste ha MySQL extension f�r att utf�ra denna operation.');
@define('CREATE_AUTHOR', 'Skapa f�rfattare \'%s\'.');
@define('CREATE_CATEGORY', 'Skapa kategori \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type datafil');
@define('INSTALL_DBPORT', 'Databasport');
@define('INSTALL_DBPORT_DESC', 'Port som anv�nds f�r att ansluta till din databasserver');
@define('IMPORT_PLEASE_ENTER', 'Ange data enligt nedan');
@define('IMPORT_NOW', 'Importera nu!');
@define('IMPORT_STARTING', 'Startar importen...');
@define('IMPORT_FAILED', 'Import misslyckad');
@define('IMPORT_DONE', 'Importen gick bra');
@define('IMPORT_WEBLOG_APP', 'Webblogg-applikation');
@define('IMPORT_NOTES', 'Anteckning:');
@define('IMPORT_STATUS', 'Status efter import');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, kr�ver PHP5 och kan anv�nda mycket minne');
@define('RSS_IMPORT_BODYONLY', 'L�gg all importerad text i "inneh�ll"-sektionen och splittra inte upp den i "utvidgad artikel"-sektionen.');
@define('IMPORT_GENERIC_RSS', 'Generell RSS-import');
@define('ACTIVATE_AUTODISCOVERY', 'Skicka trackbacks till l�nkar funna i artikeln');
@define('RSS_IMPORT_CATEGORY', 'Anv�nd denna kategori f�r icke matchande importerade artiklar');
@define('IMPORT_WP_PAGES', 'H�mta �ven bilagor och statiska sidor som normala artiklar?');
@define('DOCUMENT_NOT_FOUND', 'Dokumentet %s hittades inte.');
@define('CONVERT_HTMLENTITIES', 'F�rs�k auto-konvertera HTML-entiteter?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Administration');
@define('WRONG_USERNAME_OR_PASSWORD', 'Du verkar ha fel anv�ndarnamn eller l�senord');
@define('PLEASE_ENTER_CREDENTIALS', 'Ange dina inloggningsuppgifter nedan.');
@define('AUTOMATIC_LOGIN', 'Spara information');
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
@define('MEDIA_LIBRARY', 'Mediebibliotek');
@define('ADD_MEDIA', 'L�gg till media');
@define('MANAGE_DIRECTORIES', 'Alla kataloger');
@define('CONFIGURATION', 'Konfigurering');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Fler l�nkar');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipitys hemsida');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipitys dokumentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Officiell blogg');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Denna artikel �r �nnu ej publicerad.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Upphovsskydd');
@define('SIDEBAR_PLUGINS', 'Sid-navigator Plugins');
@define('EVENT_PLUGINS', 'H�ndelse-plugin');
@define('CONFIGURE_PLUGINS', 'Konfigurera insticksmoduler');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Kraven uppfylldes ej: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Uppgradera till version %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Klicka h�r f�r att installera en ny %s');
@define('ALREADY_INSTALLED', 'Redan installerad');
@define('PLUGIN_AVAILABLE_COUNT', 'Totalt: %d insticksmoduler.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Redigera artiklar');
@define('EDIT_ENTRY', 'Redigera artikel');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Utkast');
@define('PUBLISH', 'Publicera');
@define('CONTENT', 'Inneh�ll');
@define('ENTRIES_PER_PAGE', 'artiklar per sida');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Spikade artiklar');
@define('PAGE_BROWSE_ENTRIES', 'Sida %s av %s, sammanlagt %s artiklar');
@define('FIND_ENTRIES', 'S�k artiklar');
@define('RIP_ENTRY', 'Artikel #%s borttagen.');
@define('NEW_ENTRY', 'Ny artikel');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Inneh�ll artikel');
@define('EXTENDED_BODY', 'Ut�kat inneh�ll');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Ett utkast till denna artikel har sparats');
@define('IFRAME_PREVIEW', 'Serendipity skapar f�rhandsgranskning av din artikel...');
@define('IFRAME_WARNING', 'Din webbl�sare st�der inte iframes. �ppna filen serendipity_config.inc.php och s�tt variabeln $serendipity[\'use_iframe\'] till FALSE.');
@define('DATE_INVALID', 'Varning: Datumet du angav var ogiltigt. Det m�ste skrivas i formatet ����-MM-DD TT:MM.');
@define('ADVANCED_OPTIONS', 'Ut�kade inst�llningar');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Denna l�nk �r inte avsedd att klickas p�. Den inneh�ller en trackback-URI f�r denna artikel. Du kan anv�nda denna URI f�r att skicka ping- & trackbacks fr�n din egen blogg till denna artikel. F�r att kopiera l�nken, h�gerklicka och v�lj "Kopiera l�nk" i Internet Explorer eller "Kopiera l�nk ...." i Mozilla.');
@define('RESET_DATE', '�terst�llningsdatum');
@define('RESET_DATE_DESC', 'Klicka h�r f�r att �terst�lla datumet till den nuvarande tiden');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Hantera anv�ndare');
@define('CREATE_NEW_USER', 'Skapa ny anv�ndare');
@define('CREATE_NOT_AUTHORIZED', 'Du kan inte �ndra anv�ndare med samma anv�ndarniv� som dig sj�lv');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Du kan inte skapa anv�ndare med h�gre anv�ndarniv� �n dig sj�lv');
@define('CREATED_USER', 'En ny anv�ndare %s har skapats');
@define('MODIFIED_USER', 'Egenskaperna f�r anv�ndare %s har �ndrats');
@define('USER_LEVEL', 'Anv�ndarniv�');
@define('WARNING_NO_GROUPS_SELECTED', 'OBS! Du valde inte n�got gruppmedlemskap. Det medf�r att du kommer att loggas ut fr�n hanteringen av anv�ndargrupper. Ditt medlemskap har d�rf�r inte �ndrats.');
@define('DELETE_USER', 'Du �r p� v�g att ta bort anv�ndare #%d %s. �r du helt s�ker? Det kommer att g�ra att inga artiklar skrivna av honom/henne kan visas.');
@define('DELETED_USER', 'Anv�ndare #%d %s borttagen.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Hantera grupper');
@define('DELETED_GROUP', 'Grupp #%d %s borttagen.');
@define('CREATED_GROUP', 'En ny grupp %s har skapats');
@define('MODIFIED_GROUP', 'Grupp %s egenskaper har �ndrats');
@define('CREATE_NEW_GROUP', 'Skapa ny grupp');
@define('DELETE_GROUP', 'Du h�ller p� att ta bort grupp #%d %s. �r du s�ker?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'S�k kommentarer');
@define('COMMENTS_FILTER_SHOW', 'Visa');
@define('COMMENTS_FILTER_ALL', 'Alla');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Bara godk�nda');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'V�ntar p� godk�nnande');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', '�r du s�ker p� att du vill ta bort de valda kommentarerna?');
@define('PAGE_BROWSE_COMMENTS', 'Sida %s av %s, sammanlagt %s kommentarer');
@define('COMMENT_IS_DELETED', '(Kommentar borttagen)');
@define('COMMENT_MODERATED', 'Kommentar #%s har angetts som modererad');
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
@define('CATEGORY_SAVED', 'Kategori sparad');
@define('CATEGORY_ALREADY_EXIST', 'En kategori med namnet "%s" finns redan');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategori #%s borttagen. Gamla artiklar flyttade till kategori #%s.');
@define('CATEGORY_DELETED', 'Kategori #%s borttagen.');
@define('INVALID_CATEGORY', 'Ingen kategori angiven f�r borttagning');
@define('EDIT_THIS_CAT', 'Redigerar "%s"');
@define('CATEGORY_REMAINING', 'Ta bort denna kategori och flytta dessa artiklar till denna kategori');
@define('PARENT_CATEGORY', '�verordnad kategori');
@define('CATEGORY_HIDE_SUB', 'D�lj inl�gg gjorda i underkategorier?');
@define('CATEGORY_HIDE_SUB_DESC', 'Normalt sett n�r du bl�ddrar i en kategori kommer �ven artiklar fr�n underkategorier att visas. Om denna inst�llning aktiveras kommer enbart artiklar i den valda kategorin att visas.');
@define('CREATE_NEW_CAT', 'Skapa ny kategori');
@define('ALREADY_SUBCATEGORY', '%s �r redan en underkatalog till %s.');
@define('NO_CATEGORIES', 'Inga kategorier');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Kunde inte j�mf�ra kontrollsummor! (Ingen checksums.inc.php i huvudmappen)');
@define('CHECKSUMS_PASS', 'Alla n�dv�ndiga filer verifierade..');
@define('CHECKSUM_FAILED', '%s korrupt eller �ndrad: verifiering misslyckades');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importera data');
@define('EXPORT_ENTRIES', 'Exportera artiklar');
@define('EXPORT_FEED', 'Exportera fullst�ndig RSS-matning');
@define('CREATE_THUMBS', 'Bygg om miniatyrer');
@define('WARNING_THIS_BLAHBLAH', "VARNING:\\nDetta kan ta l�ng tid om det �r m�nga bilder utan miniatyrer.");
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
@define('TEMPLATE_SET', '\'%s\' har valts som din aktiva mall');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varning: Din nuvarande mall �r f�r�ldrad. Du b�r updatera den om m�jligt');
@define('STYLE_OPTIONS_NONE', 'Denna stil har inga specifika inst�llningar. F�r att se hur din mall kan specifiera inst�llningar, l�s "Technical Documentation" p� www.s9y.org om "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Tema/stil-inst�llningar');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Personligt administrationsgr�nssnitt tillg�nligt');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Anv�nd som mall');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'V�lj &amp; spara');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Ta bort markerade insticksmoduler');
@define('SAVE_CHANGES_TO_LAYOUT', 'Spara layout�ndringar');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synkroniserar databasen med bildkatalogen');
@define('SYNC_DONE', 'Klar (synkroniserade %s bilder).');
@define('RESIZE_BLAHBLAH', '<b>�ndra storlek p� %s</b>');
@define('ORIGINAL_SIZE', 'Ursprunglig storlek: <i>%sx%s</i> pixel');
@define('RESIZING', '�ndrar storlek');
@define('RESIZE_DONE', 'Klar (b�t storlek p� %s bilder).');
@define('KEEP_PROPORTIONS', 'Beh�ll proportioner');
@define('REALLY_SCALE_IMAGE', 'Vill du verkligen �ndra storlek? Detta kan inte �ngras!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>H�r kan du anpassa bildstorleken. Om du vill �ndra storlek proportionellt, �ndra bara ett v�rde i n�got av de tv� f�lten och tryck p� TAB - D� �ndras  automatiskt storleken automatiskt s� att bildens proportioner bibeh�lls</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Ny storlek: ');
@define('SCALING_IMAGE', 'Skalar %s till %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Mapp och filer flyttades utan problem till %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Mapp och filer kunde inte flyttas till %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Katalogen <strong>%s</strong> har skapats.');
@define('PARENT_DIRECTORY', '�verliggande katalog');
@define('CONFIRM_DELETE_DIRECTORY', '�r du s�ker p� att du vill ta bort hela inneh�llet i katalogen %s?');
@define('ERROR_NO_DIRECTORY', 'Fel: Katalogen %s finns inte');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Katalogen �r inte tom och kan d�rf�r inte tas bort. Markera kryssrutan "force deletion" om du vill ta bort dessa kataloger. De filer som finns �r:');
@define('DIRECTORY_DELETE_FAILED', 'Det gick inte att ta bort katalogen %s. Kolla r�ttigheter eller meddelandena h�r ovanf�r.');
@define('DIRECTORY_DELETE_SUCCESS', 'Katalogen %s borttagen.');
@define('CHECKING_DIRECTORY', 'Kollar filer i katalogen %s');
@define('DELETE_DIRECTORY', 'Ta bort katalog');
@define('DELETE_DIRECTORY_DESC', 'Du �r p� v�g att ta bort en katalog som inneh�ller mediafiler vilka  ev. anv�nds i dina artiklar.');
@define('FORCE_DELETE', 'Ta bort ALLA filer i denna katalog, inklusive dem som inte �r k�nda av Serendipity');
@define('CREATE_DIRECTORY', 'Skapa katalog');
@define('CREATE_NEW_DIRECTORY', 'Skapa ny katalog');
@define('CREATE_DIRECTORY_DESC', 'H�r kan du skapa en ny katalog att l�gga mediafiler i. V�lj ett namn f�r din nya katalog och ange en eventuell katalog att placera den i.');
@define('ABOUT_TO_DELETE_FILE', 'Du h�ller p ta bort <b>%s</b><br />Om du anv�nder den h�r filen i n�gon av dina artiklar f�r du l�nk-/bildfel<br />Vill du fortfarande ta bort den?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Fel: Filen finns redan i din dator!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Kunde inte hitta filen <b>%s</b>, kanske �r den redan borttagen?');
@define('ERROR_FILE_FORBIDDEN', 'Du har inte till�telse att ladda upp filer med k�rbart inneh�ll (t.ex. skript etc)');
@define('REMOTE_FILE_NOT_FOUND', 'Kunde inte hitta filen p� den externa servern, �r du s�ker p� att URL: <b>%s</b> �r helt korrekt?');
@define('FILE_FETCHED', '%s h�mtad som %s');
@define('FILE_UPLOADED', 'Filen %s uppladdad som %s');
@define('DELETE_FILE_FAIL', 'Kan inte ta bort filen <b>%s</b>');
@define('DELETE_FILE', 'Ta bort filen <b>%s</b>');
@define('FOUND_FILE', 'Hittad ny/�ndrad fil: %s.');
@define('FILENAME_REASSIGNED', 'Automatiskt tilldelat nytt filnamn: %s');
@define('ERROR_FILE_EXISTS', 'Fel: Filnamnet finns redan, v�lj ett annat!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'l�nkad');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Ange det nya namnet f�r: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'L�gger till bild...');
@define('THUMB_CREATED_DONE', 'Miniatyr skapad.<br/>Klar.');
@define('THUMBNAIL_USING_OWN', 'Anv�nder %s som miniatyr pga. dess storlek.');
@define('THUMBNAIL_FAILED_COPY', 'Ville anv�nda %s som sin egen miniatyr men kunde inte kopiera den!');
@define('DELETE_THUMBNAIL', 'Ta bort miniatyren <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ett ok�nt fel intr�ffade och filen laddades inte upp. Filstorleken �r kanske st�rre �n vad som till�ts av din serverinstallation. Kolla med din tj�nsteleverant�r eller �ndra i filen php.ini f�r att till�ta uppladdning av st�rre filer.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Fel: Du kan inte ladda upp filer st�rre �n %s byte!');
@define('MEDIA_UPLOAD_DIMERROR', 'Fel: Du kan inte ladda upp bildfiler st�rre �n %s x %s pixlar!');
@define('HOTLINK_DONE', 'Filen l�nkad.<br />Klar.');
@define('DELETE_HOTLINK_FILE', 'Ta bort den l�nkade filen <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Kunde inte utf�ra: "%s", fel: %s, retur var: %d');
@define('SKIPPING_FILE_EXTENSION', 'Hoppar �ver fil: Saknas fil�ndelse p� %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Hoppar �ver fil: %s �r inte l�sbar.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Ange samma beh�righeter p� alla undermappar');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Jag vill anv�nda miniatyren i min artikel.');
@define('I_WANT_BIG_IMAGE', 'Jag vill anv�nda den st�rre bilden i min artikel.');
@define('I_WANT_NO_LINK', 'Jag vill visa den som en bild');
@define('I_WANT_IT_TO_LINK', 'Jag vill visa den som en l�nk till denna url:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Bildstorlek');
@define('IMAGE_ALIGNMENT', 'Bildjustering');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Infoga bild');
@define('MEDIA_TARGET', 'M�l f�r denna l�nk');
@define('MEDIA_TARGET_JS', 'Popup-f�nster (via JavaScript, adaptiv storlek)');
@define('MEDIA_ENTRY', 'Isolerad artikel');
@define('MEDIA_TARGET_BLANK', 'Popup-f�nster (via target=_blank)');
@define('YOU_CHOSE', 'Du valde %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Rotera bilden 90 grader motsols');
@define('IMAGE_ROTATE_RIGHT', 'Rotera bilden 90 grader medsols');
@define('MEDIA_RENAME', 'D�p om denna fil');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Filnamn');
@define('SORT_ORDER_EXTENSION', 'Fil�ndelse');
@define('SORT_ORDER_SIZE', 'Filstorlek');
@define('SORT_ORDER_WIDTH', 'Bildbredd');
@define('SORT_ORDER_HEIGHT', 'Bildh�jd');
@define('SORT_ORDER_DATE', 'Uppladdningsdatum');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>L�gg till en fil till ditt mediebibliotek:</b><p>H�r kan du ladda upp mediefiler, eller be mig att h�mta dem fr�n en plats p� webben! Om du inte har n�gon l�mplig bild, <a href="https://images.google.com/" target="_blank">leta efter bilder p� google</a> som passar dina tankar, resultaten �r ofta anv�ndbara och roliga :) Men var f�rsiktig, de flesta bilder �r skyddade av upphovsr�tten, s� du m�ste fr�ga innan du anv�nder dem.</p><p><b>V�lj metod:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Ange en URL till en fil att h�mta:');
@define('ENTER_MEDIA_UPLOAD', 'V�lj en fil du vill ladda upp:');
@define('SAVE_FILE_AS', 'Spara filen som:');
@define('STORE_IN_DIRECTORY', 'Lagra i f�ljande katalog: ');
@define('IMAGE_MORE_INPUT', 'L�gg till fler bilder');
@define('ENTER_MEDIA_URL_METHOD', 'H�mtningsmetod:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Kommentar: Om du v�ljer att l�nka till en server b�r du f�rs�kra dig om att du har tillst�nd att l�nka till den aktuella webbplatsen, eller att webbplatsen �r din egen. L�nkning l�ter dig anv�nda bilder p� andra webbplatser utan att beh�va f�rvara dem lolalt.');
@define('FETCH_METHOD_IMAGE', 'Ladda ner bild till servern');
@define('FETCH_METHOD_HOTLINK', 'L�nka till server');
@define('GO_ADD_PROPERTIES', 'Mata in egenskaper');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', '�ndra storlek denna bild');
@define('MEDIA_DELETE', 'Ta bort denna fil');
@define('FILES_PER_PAGE', 'Filer per sida');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Inga bilder hittades');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'Alla kataloger');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfiguration sparad');
@define('DIAGNOSTIC_ERROR', 'Vi hittade n�gra fel n�r vi k�rde diagnostik p� din inmatade information:');
@define('FULL_COMMENT_TEXT', 'Ja, med komplett kommentarstext');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Databasinst�llningar');
@define('INSTALL_CAT_DB_DESC', 'H�r fyller du i alla dina databasuppgifter. Serendipity beh�ver dessa f�r att fungera');
@define('INSTALL_DBTYPE', 'Databastyp');
@define('INSTALL_DBTYPE_DESC', 'Databastyp');
@define('INSTALL_DBHOST', 'Databasv�rd');
@define('INSTALL_DBHOST_DESC', 'V�rdnamnet f�r din databasserver');
@define('INSTALL_DBUSER', 'Databasanv�ndare');
@define('INSTALL_DBUSER_DESC', 'Anv�ndarnamnet som anv�nds f�r att ansluta till din databas');
@define('INSTALL_DBPASS', 'Databasl�senord');
@define('INSTALL_DBPASS_DESC', 'L�senordet som h�r till ovanst�ende anv�ndarnamn');
@define('INSTALL_DBNAME', 'Databasnamn');
@define('INSTALL_DBNAME_DESC', 'Namnet p� din databas');
@define('INSTALL_DBPREFIX', 'Databasens tabellprefix');
@define('INSTALL_DBPREFIX_DESC', 'Prefixet f�r tabellnamnen, till exempel serendipity_');
@define('INSTALL_DBPERSISTENT', 'Anv�nd ih�llande anslutning');
@define('INSTALL_DBPERSISTENT_DESC', 'Sl� p� anv�ndning av ih�llande <a href="http://se.php.net/manual/sv/features.persistent-connections.php" target="_blank">databasanslutningar</a>. Rekommenderas normalt inte');
@define('INSTAL_DB_UTF8', 'Aktivera Enable DB-teckenupps�ttningskonvertering');
@define('INSTAL_DB_UTF8_DESC', 'Utf�rdare MySQL-f�rfr�gan "SET NAMES" f�r att indikera den f�r databasen n�dv�ndiga teckenupps�ttningen. �ndra denna inst�llning om du ser m�rkliga tecken i din blogg.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'S�kv�gar');
@define('INSTALL_CAT_PATHS_DESC', 'Olika s�kv�gar till n�dv�ndiga mappar och filer. Gl�m inte efterf�ljande snedstreck f�r kataloger!');
@define('INSTALL_FULLPATH', 'Fullst�ndig s�kv�g');
@define('INSTALL_FULLPATH_DESC', 'Den absoluta (fullst�ndiga) s�kv�gen till din Serendipity-installation');
@define('INSTALL_UPLOADPATH', 'S�kv�g f�r uppladdning');
@define('INSTALL_UPLOADPATH_DESC', 'Allt uppladdat material hamnar h�r, relativt till \'Komplett s�kv�g\' - oftast \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativ s�kv�g');
@define('INSTALL_RELPATH_DESC', 'S�kv�g till Serendipity f�r din webbl�sare. Oftast \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativ malls�kv�g');
@define('INSTALL_RELTEMPLPATH_DESC', 'S�kv�g till mappen som inneh�ller dina mallar - Relativt till \'Relativ s�kv�g\'');
@define('INSTALL_RELUPLOADPATH', 'Relativ s�kv�g f�r uppladdat material');
@define('INSTALL_RELUPLOADPATH_DESC', 'S�kv�g till ditt uppladdade material f�r din webbl�sare - Relativt till \'Relativ s�kv�g\'');
@define('INSTALL_URL', 'URL till blogg');
@define('INSTALL_URL_DESC', 'Bas-URL till din Serendipity-installation');
@define('INSTALL_AUTODETECT_URL', 'K�nn igen HTTP-v�rd automatiskt');
@define('INSTALL_AUTODETECT_URL_DESC', 'Om satt till "true", kommer Serendipity se till att den HTTP-v�rd som anv�ndes av din bes�kare �r din BaseURL-inst�llning. Om du aktiverar detta kommer du att kunna anv�nda flera dom�nnamn f�r din Serendipity Blogg och anv�nda den dom�nen f�r uppf�ljande l�nkar som anv�ndaren anv�nde f�r att f� tillg�ng till din blogg.');
@define('INSTALL_INDEXFILE', 'Index-fil');
@define('INSTALL_INDEXFILE_DESC', 'Namnet p� din index-fil f�r Serendipity');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definierar diverse URL-m�nster f�r skapa permanenta l�nkar i din blogg. Det rekommenderas att du anv�nder de f�rinst�llda v�rdena; om inte b�r du f�rs�ka att anv�nda %id%-v�rdet d�r det �r m�jligt f�r att f�rhindra att Serendipity fr�gar databasen efter m�l-URLen.');
@define('INSTALL_PERMALINK', 'Artiklars permalink-URL-struktur');
@define('INSTALL_PERMALINK_DESC', 'H�r kan du definiera URL-strukturen relativt till din bas-URL f�r att n� dina artiklar. Du kan anv�nda variablerna %id%, %title%, %day%, %month%, %year% samt alla andra tecken.');
@define('INSTALL_PERMALINK_AUTHOR', 'F�rfattares artiklars pemalink-URL-struktur');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'H�r kan du definiera URL-strukturen relativt till din bas-URL f�r att n� artiklar skrivna av vissa f�rfattare. Du kan anv�nda variablerna %id%, %realname%, %username%, %email% samt alla andra tecken.');
@define('INSTALL_PERMALINK_CATEGORY', 'Kategoriers permalink-URL-struktur');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'H�r kan du definiera URL-strukturen relativt till din bas-URL f�r att n� artiklar i vissa kategorier. Du kan anv�nda variablerna %id%, %name%, %parentname%, %description% samt alla andra tecken.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Kategoriers RSS-matningars permalink-URL-struktur');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'H�r kan du definiera URL-strukturen relativt till din bas-URL f�r att n� RSS-matningar fr�n vissa kategorier. Du kan anv�nda variablerna %id%, %name%, %description% samt alla andra tecken.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'F�rfattares RSS-matningars permalink-URL-struktur');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'H�r kan du definiera URL-strukturen relativt till din bas-URL f�r att n� RSS-matningar fr�n vissa f�rfattare. Du kan anv�nda variablerna %id%, %realname%, %username%, %email% och alla andra tecken.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'S�kv�g till arkiv');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'S�kv�g till arkiv');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'S�kv�g till kategorier');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'S�kv�g till f�rfattare');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'S�kv�g till avbest�ll kommentarer');
@define('INSTALL_PERMALINK_DELETEPATH', 'S�kv�g till ta bort kommentarer');
@define('INSTALL_PERMALINK_APPROVEPATH', 'S�kv�g till godk�nn kommentarer');
@define('INSTALL_PERMALINK_FEEDSPATH', 'S�kv�g till RSS-matningar');
@define('INSTALL_PERMALINK_PLUGINPATH', 'S�kv�g till enstaka insticksmodul');
@define('INSTALL_PERMALINK_ADMINPATH', 'S�kv�g till administration');
@define('INSTALL_PERMALINK_SEARCHPATH', 'S�kv�g till s�k');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'S�kv�g till kommentarer');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Allm�nna inst�llningar');
@define('INSTALL_CAT_SETTINGS_DESC', 'Anpassa hur Serendipity beter sig');
@define('INSTALL_USERNAME', 'Admin anv�ndarnamn');
@define('INSTALL_USERNAME_DESC', '�nv�ndarnamn f�r administrat�rsinloggning');
@define('INSTALL_PASSWORD', 'Admin l�senord');
@define('INSTALL_PASSWORD_DESC', 'L�senord f�r administrat�rsinloggning');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Riktigt namm');
@define('USERCONF_REALNAME_DESC', 'F�rfattarens hela namn. Detta namn ses av l�sarna');
@define('INSTALL_EMAIL', 'Admin e-post');
@define('INSTALL_EMAIL_DESC', 'E-post till bloggadministrat�ren');
@define('INSTALL_SENDMAIL', 'Skicka mail till admin?');
@define('INSTALL_SENDMAIL_DESC', 'Vill du f� e-post n�r kommentarer skapas till dina artiklar?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Bloggens namn');
@define('INSTALL_BLOGNAME_DESC', 'Bloggens titel');
@define('INSTALL_BLOGDESC', 'Bloggens beskrivning');
@define('INSTALL_BLOGDESC_DESC', 'Din blogg-beskrivning');
@define('INSTALL_BLOG_EMAIL', 'Bloggens e-postadress');
@define('INSTALL_BLOG_EMAIL_DESC', 'St�ller in den e-postadress som anv�nds som avs�ndare i utg�ende meddelanden. F�rs�kra dig om att anv�nda en adress som e-postservern p� din v�rddator k�nner igen - m�nga e-postservrar avf�rdar meddelanden som har en ok�nd avs�ndaradress.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Spr�k');
@define('INSTALL_LANG_DESC', 'Ange spr�k f�r din blogg');
@define('INSTALL_CHARSET', 'Tangentupps�ttningsval');
@define('INSTALL_CHARSET_DESC', 'H�r kan du v�lja UTF-8 eller inneboende (ISO, EUC, ...) tangentupps�ttning. Vissa spr�k har endast UTF-8-�vers�ttningar och att v�lja tangentupps�ttningen "Inneboende" har d� ingen effekt. UTF-8 rekommenderas vid nyinstallation. �ndra inte denna inst�llning om du redan har skrivit artiklar med specialtecken - detta kan leda till korrupta tecken. L�s v�nligen mer om detta p� https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Kalendertyp');
@define('INSTALL_CAL_DESC', 'V�lj �nkskat kalenderformat');
@define('AUTOLANG', 'Anv�nd bes�karens webbl�sarspr�k som standardinst�llning');
@define('AUTOLANG_DESC', 'Om aktiverat, kommer bes�karens spr�kinst�llning att avg�ra standardinst�llning f�r spr�k p� din artikel och f�r gr�nssnittsspr�ket.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Aktivera ACL f�r insticksmoduler och anv�ndargrupper?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Om aktiv s� kan du specifiera vilka anv�ndargrupper som f�r tillg�ng till olika insticksmoduler/h�ndelser.');
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
@define('INSTALL_CAT_DISPLAY', 'Utseende och egenskaper');
@define('INSTALL_CAT_DISPLAY_DESC', 'Anpassa hur Serendipity ser ut');
@define('INSTALL_FETCHLIMIT', 'Artiklar att visa p� framsidan');
@define('INSTALL_FETCHLIMIT_DESC', 'Antal artiklar att visa per sida');
@define('INSTALL_RSSFETCHLIMIT', 'Artiklar som visas i fl�den');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Antal artiklar att visa p� varje sida i RSS-fl�det.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Aktivera strikt RFC2616 RSS-fl�desefterlevnad');
@define('SYNDICATION_RFC2616_DESC', 'Att INTE verkst�lla RFC2616 inneb�r att alla villkorliga GETs till Serendipity kommer att returnera artiklar som �ndrats sedan den senaste f�rfr�gan. Med den inst�llingen som "falsk" kommer dina bes�kare att f� alla artiklar sedan deras senaste bes�k, vilket betraktas som en god sak. Dock kan vissa agenter s�som Planet att upptr�da m�rkligt eftersom det strider mot RFC2616. S� om du s�tter denna inst�llning som "true" kommer du att h�lla dig till denna RFC, men l�sare av dina RSS-fl�den kan missa artiklar vid l�ngre uppeh�ll. Antingen orsakar du problem f�r sammanst�llare som Planet eller f�r dina direkta l�sare. Om du f�r klagom�l fr�n n�gon av dessa kan du �ndra denna inst�llning. Se �ven: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Anv�nd gzip-komprimerade sidor');
@define('INSTALL_USEGZIP_DESC', 'F�r att snabba upp sidvisning kan sidorna komprimeras innan de skickas till bes�karen (om hans/hennes webbl�sare st�djer detta). Rekommenderas!');
@define('INSTALL_XHTML11', 'Tvinga till XHTML 1.1 standard');
@define('INSTALL_XHTML11_DESC', 'Vill du tvinga till XHTML 1.1 standard (kan orsaka problem f�r back-/frontend p� �ldre 4:e generations webbl�sare)');
@define('INSTALL_POPUP', 'Till�t anv�ndning av popup-f�nster');
@define('INSTALL_POPUP_DESC', 'Vill du anv�nda popup-f�nster f�r kommentarer, trackbacks et al?');
@define('INSTALL_EMBED', '�r Serendipity inb�ddad?');
@define('INSTALL_EMBED_DESC', 'Om du vill b�dda in Serendipity i en vanlig webbsida ska du v�lja detta f�r att enbart generera sidinneh�llet. Du kan anv�nda indexFile-alternativet f�r att anv�nda en wrapper-klass d�r du skulle ha placerat det vanliga webbsidehuvudet. L�s README-filen f�r mer information!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'G�r externa l�nkar klickbara?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nej": Okontrollerade externa l�nkar (Topputg�ngar, topph�nvisare, anv�ndarkommentarer) visas inte eller visas som vanlig text d�r s� �r l�mpligt, f�r att f�rhindra google spam (rekommenderas). "Ja": Okontrollerade externa l�nkar visas som hyperl�nkar. Detta kan �sidos�ttas inom sidomenykonfigrationen!');
@define('INSTALL_TRACKREF', 'Vill du sl� p� referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Genom att sl� p� referrer tracking s� ser du vilka webbplatser som refererar till dina artiklar. Det utnyttjas ofta av spammare s� du kan v�lja att inte ha det p�slaget.');
@define('INSTALL_BLOCKREF', 'Blockerade h�nvisare');
@define('INSTALL_BLOCKREF_DESC', 'Finns det n�gra speciella v�rdnamn som du inte vill ska visas i h�nvisningslistan? En separat lista med v�rdnamn med \';\' och notera att v�rdnamnet blockeras med delstr�ngsmatchning!');
@define('INSTALL_REWRITE', 'URL Rewriting');
@define('INSTALL_REWRITE_DESC', 'V�lj vilka regler du vill anv�nda f�r att generera URLer. Genom att anv�nda rewrite-regler kan du g�ra snygga URLer till din blogg och g�ra den l�ttare att indexera f�r spiders som google. Webbservern m�ste st�dja antingen mod_rewrite eller "AllowOverride All" f�r din Serendipity-katalog. Den f�rvalda inst�llningen �r auto-detected');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Kompensation f�r serverklocka');
@define('INSTALL_OFFSET_DESC', 'Ange antal timmar mellan tiden p� din webbserver (nuvarande: %clock%) och din �nskade tidszon');
@define('INSTALL_SHOWFUTURE', 'Visa framtida artiklar');
@define('INSTALL_SHOWFUTURE_DESC', '�r alternativet valt kommer postdaterade artiklar att visas i din blogg. Standardinst�llningen �r att d�lja dessa artiklar och inte visa dem innan publiceringsdatumet intr�tt.');
@define('INSTALL_ACL', 'Anv�nd l�stillst�nd f�r kategorier');
@define('INSTALL_ACL_DESC', 'Om detta aktiveras kommer anv�ndargruppstillst�nden som du anger f�r kategorier att till�mpas n�r inloggade anv�ndare bes�ker din blogg. Om detta inaktiveras kommer l�stillst�nden f�r kategorier INTE att anv�ndas, men den positiva effekten �r en liten uppsnabbning p� din blogg. Allts�, om du inte beh�ver fleranv�ndarl�sr�ttigheter f�r din blogg kan du inaktivera denna inst�llning.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Visa fullst�ndiga artiklar med utvidgat inneh�ll i RSS-matningen');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Bild f�r RSS matning');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL till en bild i GIF/JPEG/PNG format, om  tillg�nglig. (tom: serendipity-logga)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Bildbredd');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'i pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Bildh�jd');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'i pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Visa e-postadresser?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'F�lt "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mail-adress till ansvarig utgivare, om tillg�nglig. (tom: dold) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'F�lt "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-post-adress till webmaster, om tillg�nglig. (tom: dold) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'F�lt "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Antal minuter som din blogg maximalt b�r cache-lagras av andra sajter/applikationer (tom: dold) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'F�lt "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Skall f�let "pubDate" ing� i en RSS-kanal f�r att visa datumet p� senaste artikeln?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Inst�llningar f�r bildkonvertering');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Ange allm�n information om hur Serendipity skall hantera bilder');
@define('INSTALL_IMAGEMAGICK', 'Anv�nd ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Har du ImageMagick installerat och vill du anv�nda det f�r att �ndra bildstorlekar?');
@define('INSTALL_IMAGEMAGICKPATH', 'S�kv�g till konverteringsprogram');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Komplett s�kv�g & namn f�r ditt ImageMagick konverteringsprogram');
@define('INSTALL_THUMBSUFFIX', 'Miniatyrbildssuffix');
@define('INSTALL_THUMBSUFFIX_DESC', 'Miniatyrer kommer att d�pas enligt f�ljande format: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', 'Miniatyrbildsdimensioner');
@define('INSTALL_THUMBWIDTH_DESC', 'Statisk max-bredd f�r auto-genererade miniatyrbilder');
@define('INSTALL_THUMBDIM', 'Begr�nsad miniatyrbildsdimension');
@define('INSTALL_THUMBDIM_LARGEST', 'St�rst');
@define('INSTALL_THUMBDIM_WIDTH', 'Bredd');
@define('INSTALL_THUMBDIM_HEIGHT', 'H�jd');
@define('INSTALL_THUMBDIM_DESC', 'Dimension att begr�nsa till miniatyrbildens maxstorlek. Ursprungsv�rdet "' . INSTALL_THUMBDIM_LARGEST .  '" begr�nsar b�da dimensionerna, s� att ingen av dem kan vara st�rre �n maxstorleken; "' . INSTALL_THUMBDIM_WIDTH . '" och "' .  INSTALL_THUMBDIM_HEIGHT . '" begr�nsa endast den valda dimensionen, s� att den andra kan vara st�rre �n maxstorleken.');
@define('MEDIA_UPLOAD_SIZE', 'Maximal uppladdningsstorlek f�r fil');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Mata in den maximala filstorleken f�r uppladdade filer i bytes. Denna inst�llning kan �sidos�ttas av serverinst�llningar i PHP.ini: upload_max_filesize, post_max_size, max_input_time kommer alla att ha f�retr�de framf�r denna inst�llning. En tom str�ng inneb�r att endast serverinst�llningarnas begr�nsning anv�nds.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Maximal bredd p� bilder som laddas upp');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Mata in den maximala bildbredden i pixlar f�r uppladdade bilder.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Maximal h�jd p� bilder som laddas upp');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Mata in den maximala bildh�jden i pixlar f�r uppladdade bilder.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Aktivera mediasynkronisering');
@define('ONTHEFLYSYNCH_DESC', 'Om aktiv kommer Serendipity att j�mf�ra mediadatabasen med filerna som lagras p� din server och synkronisera databasen med mappinneh�llet.');
@define('MEDIA_DYN_RESIZE', 'Till�t dynamisk bildskalning?');
@define('MEDIA_DYN_RESIZE_DESC', 'Om aktiv kan mediav�ljaren returnera bilder i valfri efterfr�gad storlek via en GET-variabel. Resultaten cache-lagras och kan d�rf�r skapa en stor filsamling om du anv�nder detta intensivt.');
@define('MEDIA_EXIF', 'Importera EXIF/JPEG-bilddata');
@define('MEDIA_EXIF_DESC', 'Om aktiv kommer existerande EXIF/JPEG-metadata i bilder att l�sas och lagras i databasen f�r visning i mediagalleriet.');
@define('MEDIA_PROP', 'Mediaegenskaper');
@define('MEDIA_PROP_DESC', 'Fyll i en lista med egenskapsf�lt separerade av  ";" som du vill definiera f�r varje mediafil');
@define('MEDIA_PROP_MULTIDESC', '(Du kan l�gga till ":MULTI" efter valfritt egenskapsf�lt f�r att indikera att detta kommer att inneh�lla en l�ngre text snarare �n enstaka tecken)');
@define('MEDIA_KEYWORDS', 'Medianyckelord');
@define('MEDIA_KEYWORDS_DESC', 'Fyll i en lista med ord separerade av ";" som du vill anv�nda som f�rdefinierade nyckelord f�r mediastycken.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Din personliga information');
@define('USERCONF_CAT_PERSONAL_DESC', '�ndra din personliga information');
@define('USERCONF_USERNAME', 'Ditt anv�ndarnamn');
@define('USERCONF_USERNAME_DESC', 'Anv�ndarnamnet f�r att logga in till denna blogg');
@define('USERCONF_PASSWORD', 'Ditt l�senord');
@define('USERCONF_PASSWORD_DESC', 'L�senordet du vill anv�nda f�r att logga in till denna blogg');
@define('USERCONF_CHECK_PASSWORD', 'Gammalt l�senord');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Om du �ndrar l�senordet i f�ltet ovean m�ste du fylla i det nuvarande l�senordet i det h�r f�ltet.');
@define('USERCONF_USERLEVEL', 'Accessniv�');
@define('USERCONF_USERLEVEL_DESC', 'Denna niv� anv�nds f�r att best�mma vilken slags tillg�ng denna anv�ndare ska ha till bloggen');
@define('USERCONF_GROUPS', 'Gruppmedlemskap');
@define('USERCONF_GROUPS_DESC', 'Denna anv�ndare �r medlem av f�ljande grupper. Flera medlemskap �r m�jliga.');
@define('USERCONF_EMAIL', 'Din e-post adress');
@define('USERCONF_EMAIL_DESC', 'Din personliga e-post adress');
@define('INSTALL_WYSIWYG', 'Anv�nd WYSIWYG-editorn');
@define('INSTALL_WYSIWYG_DESC', 'Vill du anv�nda WYSIWYG editorn? (Fungerar med IE5+, delvis i Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Skicka kommentar-meddelanden?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Vill du f� e-post n�r kommentarer skapas till dina artiklar?');
@define('USERCONF_SENDTRACKBACKS', 'Skicka trackback-meddelanden');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Vill du f� e-post n�r trackbacks skapas till dina artiklar?');
@define('USERCONF_CREATE', 'St�ng av anv�ndare / f�rbjud aktivitet?');
@define('USERCONF_CREATE_DESC', 'Om vald har anv�ndaren inte n�gra m�jligheter att redigera eller skapa p� bloggen l�ngre. Vid inloggning i anv�ndargr�nssnittet kan anv�ndaren enbart se sina personliga inst�llningar samt logga ut.');
@define('USERCONF_ALLOWPUBLISH', 'R�ttigheter: Publicera artiklar?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Har denna anv�ndare r�tt att publicera artiklar?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Visa verktygsrad i mediav�ljarens popup-f�nster?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Normalinst�llningar f�r nya artiklar');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'NOTERA: Anv�ndarniv�attributet anv�nds nu endast f�r bak�tkompatibilitet med insticksmoduler och reservauktorisering. Anv�ndarprivilegier hanteras nu genom gruppmedlemskap!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Du har inte angett det gamla l�senordet p� korrekt s�tt och du har d�rf�r inte tillst�nd att �ndra l�senord. Dina inst�llningar sparades inte.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Anv�ndarnamnet kan inte utel�mnas.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Tillg� personliga inst�llningar');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: �ndra anv�ndarniv�');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: �ndra "F�rbjud skapa artiklar"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: �ndra r�tt att publicera artiklar');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Tillg� systeminst�llningar');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Tillg� blogg-centrerade inst�llningar');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administrativa artiklar');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administrera andra anv�ndares artiklar');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Importera artiklar');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administrera kategorier');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administrera andra anv�ndares kategorier');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Ta bort kategorier');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administrera anv�ndare');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Ta bort anv�ndare');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: �ndra anv�ndarniv�');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administrera anv�ndare i din(a) grupp(er)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administrera anv�ndare som inte �r i din(a) grupp(er)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Skapa nya anv�ndare');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administrera anv�ndargrupper');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administrera insticksmoduler');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administrera andra anv�ndares insticksmoduler');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administrera mediafiler');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administrera mediakataloger');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: L�gg till nya mediafiler');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Ta bort mediafiler');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administrera andra anv�ndares mediafiler');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Visa mediafiler');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Synkronisera miniatyrbilder');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administrera kommentarer');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administrera mallar');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Visa andra anv�ndares mediafiler');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'F�rbjudna insticksmoduler');
@define('PERMISSION_FORBIDDEN_HOOKS', 'F�rbjudna h�ndelser');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Din artikel har sparats');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Tr�dad');
@define('COMMENTS_VIEWMODE_LINEAR', 'Rak');
@define('DISPLAY_COMMENTS_AS', 'Visa kommentarer som');
@define('COMMENTS_DISABLE', 'Till�t inte kommentarer f�r denna artikel');
@define('COMMENTS_ENABLE', 'Till�t kommentarer f�r denna artikel');
@define('COMMENTS_CLOSED', 'F�rfattaren till�ter inte kommentarer till denna artikel');
@define('VIEW_EXTENDED_ENTRY', 'Forts�tt l�sa "%s"');
@define('TRACKBACK_SPECIFIC', 'Trackback URI f�r denna artikel');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Visa alla');
@define('VIEW_TOPICS', 'Visa �mnen');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', '�mnen fr�n');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Artiklarna kunde inte l�ggas till!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Kom ih�g information? ');
@define('SUBMIT_COMMENT', 'Spara kommentar');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Prenumerera p� denna artikel');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Din webbl�sre skickade inte en giltig HTTP-h�nvisarstr�ng. Detta kan ha orsakats av en felkonfigurerad webbl�sare/proxy eller av en Cross Site Request Forgery (XSRF) riktad mot dig. Den efterfr�gade handlingen kunde inte genomf�ras.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Kommentaren #%s verkar ha blivit godk�nd redan');
@define('COMMENT_EDITED', 'Den valda kommentaren har redigerats');
@define('COMMENTS_WILL_BE_MODERATED', 'Kommentarer m�ste godk�nnas innan de visas.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Varning: Den h�r kommentaren m�ste f�rst godk�nnas');
@define('DELETE_COMMENT', 'Ta bort kommentar');
@define('APPROVE_COMMENT', 'Godk�nn kommentar');
@define('REQUIRES_REVIEW', 'Kr�ver granskning');
@define('COMMENT_APPROVED', 'Komentaren #%s har blivit godk�nd');
@define('COMMENT_DELETED', 'Kommentare #%s har blivit borttagen');
@define('COMMENTS_MODERATE', 'Kommentarer & trackbacks till denna artikel kommer att granskning innan de visas');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Varning: Denna trackback kr�ver godk�nnande innan den visas');
@define('DELETE_TRACKBACK', 'Ta bort trackback');
@define('APPROVE_TRACKBACK', 'Godk�nn trackback');
@define('TRACKBACK_APPROVED', 'Trackback #%s har blivit godk�nd');
@define('TRACKBACK_DELETED', 'Trackback #%s har tagits bort');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', '�versta niv�n');
@define('VIEW_COMMENT', 'Visa kommentar');
@define('VIEW_ENTRY', 'Visa artikel');
@define('LINK_TO_ENTRY', 'L�nk till artikel');
@define('LINK_TO_REMOTE_ENTRY', 'L�nk till extern artikel');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Skickar pingback till URI %s...');
@define('PINGBACK_SENT', 'Pingback lyckades');
@define('PINGBACK_FAILED', 'Pingback misslyckades: %s');
@define('PINGBACK_NOT_FOUND', 'Ingen pingback-URI hittades.');
@define('TRACKBACK_SENDING', 'Skickar trackback till URI %s...');
@define('TRACKBACK_SENT', 'Trackback fungerade');
@define('TRACKBACK_FAILED', 'Trackback misslyckades: %s');
@define('TRACKBACK_NOT_FOUND', 'Ingen trackback-URI hittad.');
@define('TRACKBACK_URI_MISMATCH', 'Den automatiskt funna trackback-URI:n matchar inte v�r m�l-URI.');
@define('TRACKBACK_CHECKING', 'Kollar <u>%s</u> m�jliga trackbacks...');
@define('TRACKBACK_NO_DATA', 'M�let inneh�ll ingen data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Ingen trackback skickad: Kunde inte �ppna anslutning till %s p� port %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Ny kommentar till prenumererad artikel "%s"');
@define('SUBSCRIPTION_MAIL', "Hej %s,\n\nEn ny kommentar �r gjord till artikeln du f�ljer hos \"%s\", vid namn \"%s\"\nKommentarens skapare �r: %s\n\nDu kan hitta artikeln h�r: %s\n\nDu kan avsluta prenumerationen genom att klicka p� denna l�nk: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hej %s,\n\nEn ny trackback �r gjord till artikeln du f�ljer hos \"%s\", vid namn \"%s\"\nSkapare �r: %s\n\nDu kan hitta artikeln h�r: %s\n\nDu kan avsluta prenumerationen genom att klicka p� denna l�nk: %s\n");
@define('SIGNATURE', "\n-- \n%s bygger p� Serendipty.\nDen b�sta bloggen, och du kan ocks� anv�nda den.\nKolla <https://s9y.org> f�r att f� veta hur.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'En ny kommentar har skrivits i din blogg "%s", till artikeln med namnet "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'En ny trackback har gjorts till din blogg-artikel med namnet "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Du har f�ljande alternativ:');
@define('NEW_TRACKBACK_TO', 'Ny trackback skapad till');
@define('NEW_COMMENT_TO', 'Ny kommentar skapad till');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Inga artiklar hittade f�r s�kningen %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Din s�kning efter %s gav %s resultat:');
@define('SEARCH_TOO_SHORT', 'Ditt s�kord m�ste vara l�ngre �n 3 bokst�ver. Du kan f�rs�ka att l�gga till * till kortare ord, till exempel s9y* f�r att lura s�kfunktionen.');
@define('SEARCH_ERROR', 'S�kfunktionen fungerade inte som v�ntat. Meddelande till bloggens administrat�r: Kan bero p� saknade indexnycklar i din databas. P� MySQL-system m�ste databasens anv�ndare ha r�tt att utf�ra f�ljande kommando: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Felet som returnerades av databasen var: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Din kommentar inneh�ller ingenting, %sg� tillbaks%s och f�rs�k igen');
@define('COMMENT_NOT_ADDED', 'Din kommentar kunde inte l�ggas till d�rf�r att antingen s� �r kommentarer inte till�tna f�r denna artikel, det du skrev var inte till�tet eller s� filtrerade anti-spam filtret det. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Kommentarer fr�n');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Inst�llningssyntax fel f�r inst�llningen "%s". Inneh�ll av typen "%s" beh�vs.');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Visar listan med kategorier.');
@define('CATEGORIES_PARENT_BASE', 'Visa endast kategorier under...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Du kan v�lja en �verordnad kategori s� att endast dess underordnade kategorier visas.');
@define('CATEGORIES_HIDE_PARALLEL', 'G�m kategorier som inte �r en del av kategoritr�det.');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Om du vill g�mma kategorier som �r dela av ett annat kategoritr�d m�ste du v�lja detta. Denna funktion �r mest anv�ndbar i samband med en multi-blogg som anv�nder "Properties/Tempaltes of categories"-insticksmodulen.');
@define('CATEGORIES_HIDE_PARENT', 'Vill du g�mma vald �verordnad kategori?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Om du begr�nsar listningen av kategorier till en specifik kategori s� kommer du att endast se den �verordnade kategorin n�r de listas. Om du avaktiverar detta val s� kommer inte den �verordnade kategorin att visas.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Aktivera Smarty-mallar?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'OM detta alternativ �r valt kommer insticksmodulen att anv�nda Smarty-mallafunktioner f�r att skriva ut kategorilistan. Om du v�ljer detta kan du �ndra layouten genom mallfilen "plugin_categories.tpl". Att anv�nda denna funtion p�verkekar prestandan s� l�t den vara inaktiv om du inte beh�ver g�ra specialanpassningar.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Visa antalet artiklar i varje kategori?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Till�t bes�kare att visa flera kategorier samtidigt?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Om detta alternativ �r valt kommer en kryssruta att visas bredvid varje kategori i denna sidomeny. Anv�ndare kan kryssa i dessa rutor och sedan se artiklar tillh�rande detta urval.');
@define('CATEGORIES_TO_FETCH', 'Kategorier att h�mta');
@define('CATEGORIES_TO_FETCH_DESC', 'H�mta kategorier fr�n vilken f�rfattare?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Visar en lista med f�rfattare');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Visa antalet artiklar bredvid f�rfattarens namn?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Om detta alternativ �r valt kommer antalet artiklar av denna f�rfattare att visas bredvid f�rfattarens namn inom parantes.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Visa enbart f�rfattare med minst X skrivna artiklar');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Syndikering');
@define('SHOWS_RSS_BLAHBLAH', 'Visar RSS-syndikeringsl�nkar');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s matning');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 matning');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 matning');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 matning');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 kommentarer');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 matning');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner-ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID f�r matningen som du vill publicera');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurnerbild');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Namn p� bild att visa (eller l�mna blankt f�r r�knare), lokaliserad p� feedburner.com, exempel: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurnertitel');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Titel (om n�gon) att visa tillsammans med bilden');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner bildtext');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (om n�gon) att visa n�r muspekaren h�lls �ver bilden');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'D�lj arkivl�nken om inga artiklar skrevs i denna tidsrymd (kr�ver att artiklar r�knas)');
@define('ARCHIVE_COUNT', 'Antalet poster i listan');
@define('ARCHIVE_COUNT_DESC', 'Totalt antal m�nader, veckor eller dagar att visa');
@define('ARCHIVE_FREQUENCY', 'Kalenderpost-frekvens');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalenderintervall mellan varje post i listan');
@define('BROWSE_ARCHIVES', 'Bl�ddra i m�nadsarkivet');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Visa "Serendipity" som text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Kommer att visa "Serendipity Weblog" som text');
@define('POWERED_BY_SHOW_IMAGE', 'Visa "Serendipity" med en logga');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Visar Serendipitys logga');
@define('ADVERTISES_BLAHBLAH', 'Visar ursprunget till din blogg');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Anv�nd https vid inloggning');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'G�r att inloggningsl�nken pekar p� en https-URI. Din webbserver beh�ver ha st�d f�r https!');
@define('SUPERUSER', 'Administrera bloggen');
@define('SUPERUSER_OPEN_ADMIN', 'Till administrationen');
@define('SUPERUSER_OPEN_LOGIN', 'Till inloggningssidan');
@define('ALLOWS_YOU_BLAHBLAH', 'Ger en l�nk i sid-navigatorn till blogg-administrationen');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalender');
@define('CALENDAR_BOW_DESC', 'Veckodag som b�rjar vecka. Standardinst�llning �r m�ndag');
@define('QUICKJUMP_CALENDAR', 'Snabbkalender');
@define('CALENDAR_BEGINNING_OF_WEEK', 'B�rjan av veckan');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Aktivera insticksmodulers API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Om detta akiveras kan insticksmoduler koppla in sig i kalendern f�r att visa sina egna h�ndelser p� ett framtr�dande s�tt. Aktivera endast om du har installerat insticksmoduler som beh�ver detta, annars kommer det endast att medf�ra l�gre prestanda.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'S�k efter artikel');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Inneh�ller en liten snutt HTML i din sidonavigator');
@define('THE_NUGGET', 'HTML-snutten!');
@define('BACKEND_TITLE', 'Mer information p� inst�llningsidan f�r insticksmoduler');
@define('BACKEND_TITLE_FOR_NUGGET', 'H�r kan du definiera en valfri str�ng som kommer att visas p� inst�llningssidan f�r insticksmoduler tillsammans med beskrivningen av insticksmodulen HTML Nugget. Om du har flera HTML Nugget-insticksmoduler med en tom titel hj�lper detta f�r att g�ra skilja dem fr�n varandra.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Visa vanligaste utg�ngar/h�nvisare som l�nkar?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nej": Utg�ngar och h�nvisare visas som vanlig text f�r att f�rhindra google-spam. "Ja": Utg�ngar och h�nvisare visas som l�nkar. "F�rvalt": Anv�nd globala konfigureringsinst�llningar (rekommenderas).');
@define('HAVE_TO_BE_LOGGED_ON', 'Du m�ste vara inloggad f�r att se den h�r sidan');
@define('WELCOME_TO_ADMIN', 'V�lkommen till Serendipitys administrationssidor.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Kort kommentar');
@define('MEDIA_PROPERTY_COMMENT2', 'L�ng kommentar');
@define('DELETE_SELECTED_ENTRIES', 'Ta bort valda artiklar');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titel');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity �r inte installerad �n. Var god <a href="%s">installera</a> nu.');
@define('COMMENT_ADDED_CLICK', 'Klicka %sh�r f�r att komma tillbaka%s till kommentarerna, och %sh�r f�r att st�nga%s detta f�nster.');
@define('COMMENT_NOT_ADDED_CLICK', 'Klicka %sh�r f�r att komma tillbaka%s till kommentarerna, och %sh�r f�r att st�nga%s detta f�nster.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Speltid');
@define('MEDIA_PROPERTY_DATE', 'Tillh�rande datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Flyttade URLen f�r den flyttade mappen f�r %s artiklar.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'I andra databaser �n MySQL �r det inte m�jligt att iterera genom varje artikel f�r att ers�tta gammal mapps URL. Du kommer att beh�va att redigera dina artiklar manuellt f�r att fixa ny URLer. Du kan fortfarande flytta din gamla mapp tillbaka till dess gamla plats om detta �r f�r anstr�ngande.');
@define('TRACKBACK_SIZE', 'M�l-URI �versker max-storlek p� %s bytes.');
@define('CLICK_FILE_TO_INSERT', 'Klicka p� filen du vill infoga:');
@define('SELECT_FILE', 'V�lj fil att infoga');
@define('MANAGE_IMAGES', 'Hantera bilder');
@define('WORD_NEW', 'Ny');
@define('WORD_OR', 'Eller');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Anv�ndargr�nssnitt: External Services');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Anv�ndargr�nssnitt: Funktioner');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Anv�ndargr�nssnitt: Fullprogram');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Anv�ndargr�nssnitt: Vyer');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Anv�ndargr�nssnitt: Artikelrelaterade');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Administrationsgr�nssnitt: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Administrationsgr�nssnitt: Usermanagement');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Administrationsgr�nssnitt: Meta information');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Administrationsgr�nssnitt: Templates');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Administrationsgr�nssnitt: Features');
@define('PLUGIN_GROUP_IMAGES', 'Bilder');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Textdekoration');
@define('PLUGIN_GROUP_STATISTICS', 'Statistik');
@define('IMPORT_WELCOME', 'V�lkommen till Serendipitys importfunktion');
@define('USER_SELF_INFO', 'Inloggad som %s (%s)');
@define('IMPORT_WHAT_CAN', 'H�r kan du importera artiklar fr�n andra applikationer');
@define('IMPORT_SELECT', 'Ange applikationen du vill importera fr�n');
@define('MANAGE_STYLES', 'Hantera stilar');
@define('SELECT_A_PLUGIN_TO_ADD', 'V�lj den instickmodul som du vill installera');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'H�r nedan �r en lista med installerade insticksmoduler');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Avbryt nu');
@define('DELETE_SELECTED_COMMENTS', 'Ta bort valda kommmentarer');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'S�k media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Fel: Det gamla filnamnet finns inte!');
@define('ERROR_SOMETHING', 'Fel: N�gonting �r fel.');
@define('DIRECT_LINK', 'Direktl�nk till denna artikel');
@define('SELECT_TEMPLATE', 'V�lj vilken mall du vill anv�nda f�r din blogg');
@define('DATABASE_ERROR', 'Serendipity fel: kunde inte ansluta till databas - avslutar.');
@define('LIMIT_TO_NUMBER', 'Hur m�nga poster skall visas?');
@define('DIRECTORIES_AVAILABLE', 'Klicka i listan �ver tillg�ngliga underkataloger f�r att skapa en ny katalog.');
@define('CATEGORY_INDEX', 'Nedan �r en lista med kategorier tillg�ngliga f�r dina artiklar');
@define('PAGE_BROWSE_PLUGINS', 'Sida %s av %s, totalt %s insticksmoduler.');
@define('CHARSET_NATIVE', 'Inneboende');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API gr�nssnittet till Serendipity inkluderas inte l�ngre p� grund av innevarande s�kerhetsproblem med detta API samt att f� anv�nder det. D�rf�r beh�ver du installera XML-RPC-insticksmoduken f�r att anv�nda XML-RPC API:t. URL:en som anv�nds i din applikation kommer inte att �ndras - s� snart du har installerat insticksmodulen kommer du �terigen att kunna anv�nda API:t.');
@define('AUTHORS_ALLOW_SELECT', 'Till�t bes�kare att visa flera f�rfattare samtidigt?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Om detta alternativ �r valt kommer en kryssruta att visas bredvid varje f�rfattare i denna sidomeny. Anv�ndare kan kryssa i dessa rutor och sedan se artiklar tillh�rande detta urval.');
@define('PREFERENCE_USE_JS', 'Aktivera avancerad JS-anv�ndning?');
@define('PREFERENCE_USE_JS_DESC', 'Om aktiv kommer avancerade JavaScript-sektioner att anv�ndas f�r st�rre anv�ndbarhet, s�som att i sektionen f�r konfigurering av insticksmoduler kunna dra och sl�ppa insticksmoduler f�r att �ndra deras ordning.');
@define('PREFERENCE_USE_JS_WARNING', '(Denna sida anv�nder avancerad JavaScript. Om du upplever funktionsproblem st�ng av anv�ndningen av avancerad JS-anv�ndning i dina personliga inst�llningar eller st�ng av din webbl�sares JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
