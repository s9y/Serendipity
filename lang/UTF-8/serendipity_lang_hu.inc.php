<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) by Márton Pósz <ful_s@AT@passwd.hu> and Hrotkó Gábor <roti@al.pmmf.hu>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'hu_HU.UTF-8, hu_HU.UTF8, hungarian, hu, hu_HU');
@define('DATE_FORMAT_ENTRY', '%Y. %B %e. (%A) ');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Típus');
@define('PREVIEW', 'Előnézet');
@define('DATE', 'Dátum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Kinézet');
@define('LOGIN', 'Belépés');
@define('LOGOUT', 'Kilépés');
@define('LOGGEDOUT', 'Kilépett.');
@define('CREATE', 'Létrehozás');
@define('BACK', 'Vissza');
@define('FORWARD', 'Előre');
@define('ANONYMOUS', 'Ismeretlen');
@define('RECENT', 'Friss...');
@define('OLDER', 'Régebbi...');
@define('DONE', 'Kész');
@define('TITLE', 'Cím');
@define('DESCRIPTION', 'Leírás');
@define('PLACEMENT', 'Elhelyezés');
@define('DELETE', 'Töröl');
@define('SAVE', 'Ment');
@define('UP', 'FEL');
@define('DOWN', 'LE');
@define('PREVIOUS', 'Előző');
@define('NEXT', 'Következő');
@define('ENTRIES', 'bejegyzések');
@define('CATEGORIES', 'Kategóriák');
@define('NAME', 'Név');
@define('EMAIL', 'email');
@define('HOMEPAGE', 'Honlap');
@define('COMMENT', 'Megjegyzés');
@define('VIEW', 'Megtekint');
@define('HIDE', 'Elrejt');
@define('WEEK', 'Hét');
@define('WEEKS', 'Hetek');
@define('MONTHS', 'Hónapok');
@define('DAYS', 'Napok');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'A művelet siker');
@define('COMMENTS', 'Hozzászólások');
@define('ADD_COMMENT', 'Hozzászólás hozzáfűzése');
@define('NO_COMMENTS', 'Nincs hozzászólás');
@define('POSTED_BY', 'Beküldte');
@define('ON', ' az alábbi időpontban ');
@define('NO_CATEGORY', 'Nincsenek kategóriák');
@define('CATEGORY', 'Kategória');
@define('EDIT', 'Szerkesztés');
@define('GO', 'OK');
@define('YES', 'Igen');
@define('NO', 'Nem');
@define('NOT_REALLY', 'Nem');
@define('DUMP_IT', 'Igen');
@define('IN', ' ebben: ');
@define('AT', ' ekkor: ');
@define('LEFT', 'bal');
@define('RIGHT', 'jobb');
@define('CENTER', 'center');
@define('ARCHIVES', 'Archívum');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Gyorskeresés');
@define('TRACKBACKS', 'Visszahivatkozások');
@define('TRACKBACK', 'Visszahivatkozás');
@define('NO_TRACKBACKS', 'Nincsenek visszahivatkozások');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Kivonat');
@define('TRACKED', 'Nyomon-követett');
@define('USER', 'Felhasználó');
@define('USERNAME', 'Felhasználói név');
@define('PASSWORD', 'Jelszó');
@define('HIDDEN', 'rejtett');
@define('IMAGE', 'Kép');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Szerző');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verzió');
@define('INSTALL', 'Telepítés');
@define('REPLY', 'Válasz');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Hiba');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Kényszerít (force)');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Adminisztráció');
@define('ADMIN_FRONTPAGE', 'Kezdőlap');
@define('QUOTE', 'Idéz');
@define('NONE', 'egyik sem');
@define('GROUP', 'Csoport');
@define('AUTHORS', 'Szerzők');
@define('UPGRADE', 'Frissítés');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Az összes szerző');
@define('PREVIOUS_PAGE', 'előző oldal');
@define('NEXT_PAGE', 'következő oldal');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Minden kategória');
@define('LAST_UPDATED', 'Utolsó Frissítés');
@define('IP_ADDRESS', 'IP cím');
@define('CHARSET', 'Karakterkódolás');
@define('REFERER', 'Hivatkozó');
@define('APPROVE', 'Elfogad');
@define('NOT_FOUND', 'Nincs találat');
@define('WRITABLE', 'Írható');
@define('NOT_WRITABLE', 'Nem írható');
@define('WELCOME_BACK', 'Üdv ismét,');
@define('USE_DEFAULT', 'Alapértelmezett');
@define('SORT_BY', 'Rendezés a következő szerint');
@define('SORT_ORDER', 'Sorrend');
@define('SORT_ORDER_ASC', 'Növekvő');
@define('SORT_ORDER_DESC', 'Csökkenő');
@define('FILTERS', 'Szűrők');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Minden kibontása');
@define('TOGGLE_OPTION', 'Beállítások');
@define('IN_REPLY_TO', 'Válasz a következőre');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Könyvtár');
@define('BACK_TO_BLOG', 'Vissza a Weblog-hoz');
@define('HTML_NUGGET', 'HTML-töredék');
@define('TITLE_FOR_NUGGET', 'A töredék címe');
@define('COMMENT_ADDED', 'A hozzászólásodat sikeresen rögzítettem. ');
@define('ENTRIES_FOR', 'Bejegyzések innen: %s');
@define('NO_ENTRIES_TO_PRINT', 'Nincs mit megjeleníteni');
@define('COMMENT_DELETE_CONFIRM', 'Biztosan törlöd a következő hozzászólást: #%d, ettől a küldőtől: %s ?');
@define('DELETE_SURE', 'Biztos, hogy véglegesen kitörlöd a #%s-t?');
@define('MEDIA_FULLSIZE', 'Teljes méret');
@define('SIDEBAR_PLUGIN', 'Margó modul');
@define('EVENT_PLUGIN', 'Esemény modul');
@define('PLUGIN_ITEM_DISPLAY', 'Hol legyen látható az elem?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Részletes oldal');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Áttekintő oldal');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Mindkettő');
@define('DIRECTORY_WRITE_ERROR', 'A %s szót nem tudom felvenni a szótárba. Kérlek ellenőrizd a hozzáférési jogokat.');
@define('FILE_WRITE_ERROR', 'Nem tudom írni a %s fájlt.');
@define('INCLUDE_ERROR', 'serendipity hiba: nem megy az "include %s" - kilépek.');
@define('DO_MARKUP', 'Forrás transzformálás elvégzése.');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Dátumformázás');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Az aktuális bejegyzés dátuma, a következő formátumot használva: PHP strftime() változó. (Alapértelmezett: "%s")');
@define('APPLY_MARKUP_TO', 'Jelölés használata erre: %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML gomb');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Az XML csatornákra mutató hivatkozásokat ez a kép jelöli. Hagyd üresen az alapértelmezetthez, a letiltáshoz írd be: \'none\'.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Fájlok törlése %s...');
@define('SETTINGS_SAVED_AT', 'Az új beállításokat elmentettük ekkor: %s');
@define('INVERT_SELECTIONS', 'Kijelölés megfordítása');

@define('PERSONAL_SETTINGS', 'Személyes beállítások');
@define('DO_MARKUP_DESCRIPTION', 'Szövegjelölések transzformálása (vigyorgó fejek, rövidítésre használt jelölések a következő módon: *, /, _, ...). Ezt tiltva, a szövegben nem lehet semmilyen HTML kód.');
@define('BASE_DIRECTORY', 'Alap könyvtár');
@define('PERM_READ', 'Olvasási jogosultság');
@define('PERM_WRITE', 'Írási jogosultság');
@define('PERM_DENIED', 'Hozzáférés megtagadva.');
@define('CURRENT_AUTHOR', 'Jelenlegi szerző');
@define('PLUGIN_ACTIVE', 'Aktív');
@define('PLUGIN_INACTIVE', 'Inaktív');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Könyvjelző hivatkozás');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Add a könyvjelzőkhöz ezt a hivatkozást, így könnyen eléred a blog-odat amikor egy másik oldalon vagy, amiről éppen írni szeretnél.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity Telepítés');
@define('WELCOME_TO_INSTALLATION', 'Üdvözöllek a Serendipity telepítőjében');
@define('FIRST_WE_TAKE_A_LOOK', 'Először meg kell vizsgáljuk a jelenlegi beállításokat ahhoz hogy feltérképezzük az esetleges kompatibilitási problémákat');
@define('ERRORS_ARE_DISPLAYED_IN', 'A hibákat így jelöljük: %s, a javaslatokat így: %s a sikert pedig így: %s');
@define('RED', 'priros');
@define('YELLOW', 'sárga');
@define('GREEN', 'zöld');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s telepítési ellenőrzés jelentés');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP telepítés');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operációs rendszer');
@define('WEBSERVER_SAPI', 'Web kiszolgáló SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini konfiguráció');
@define('RECOMMENDED', 'Javasolt');
@define('ACTUAL', 'Aktuális');
@define('PERMISSIONS', 'Jogosultságok');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'A jogosultságok a következő paranccsal állíthatók be: `<em>%s</em>` a hibás könyvtáron, vagy FTP programmal is beállíthatók');
@define('PROBLEM_DIAGNOSTIC', 'Az ellenőrzések hibája miatt nem folytathatod a telepítést, addig amíg ezeket nem javítod');
@define('SELECT_INSTALLATION_TYPE', 'Válaszd ki a telepítés típusát');
@define('RECHECK_INSTALLATION', 'Telepítés újraellenőrzése');
@define('SIMPLE_INSTALLATION', 'Egyszerű telepítés');
@define('EXPERT_INSTALLATION', 'Haladó telepítés');
@define('COMPLETE_INSTALLATION', 'Telepítés befejezése');
@define('WONT_INSTALL_DB_AGAIN', 'nem szükséges az adatbázis újratelepítése');
@define('THEY_DO', 'léteznek');
@define('THEY_DONT', 'nem léteznek');
@define('CHECK_DATABASE_EXISTS', 'Adatbázis, és adatbázis táblák létezésnek ellenőrzése');
@define('CREATE_DATABASE', 'Létrehozom az alapértelmezett adatbázis táblákat...');
@define('ATTEMPT_WRITE_FILE', 'Megkísérlek írni a %s fájlba...');
@define('CREATING_PRIMARY_AUTHOR', 'Elsődleges szerző létrehozása \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Alapértelmezett sablonok beállítása');
@define('INSTALLING_DEFAULT_PLUGINS', 'Alapértelmezett modulok telepítése');
@define('SERENDIPITY_INSTALLED', 'A Serendipity-t sikeresen telepítettük');
@define('VISIT_BLOG_HERE', 'Itt látogathatod meg a blog-odat');
@define('THANK_YOU_FOR_CHOOSING', 'Köszönjük hogy a Serendipity-t választottad');
@define('ERROR_DETECTED_IN_INSTALL', 'Hiba lépett fel a telepítés közben');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Egyszerű szerkesztő');
@define('USERLEVEL_CHIEF_DESC', 'Főszerkesztő');
@define('USERLEVEL_ADMIN_DESC', 'Adminisztrátor');
@define('WWW_USER', 'A www-t cseréld ki arra a felhasználóra, aki az apache-ot futtatja (pl. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'A %s könyvtár nem létezik, és nem is tudom létrehozni. Kérlek hozd létre Te');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; fut <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nem tudom futtatni a %s binárist');
@define('FILE_CREATE_YOURSELF', 'Kérlek hozd létre a fájlt, vagy ellenőrizd a hozzáférési jogokat');
@define('COPY_CODE_BELOW', '<br />* Másold a lenti kódot a %s fájlba (könyvtár: %s):<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Ha kész vagy, kattints a böngésző "Frissítés" gombjára.');
@define('ERROR_TEMPLATE_FILE', 'Nem tudom megnyitni a sablonfájlt, kérlek frissítsd a serendipity-t!');
@define('HTACCESS_ERROR', 'A helyi webszerver ellenőrzéséhez, írási jogot kell adni a serendipity-nek a ".htaccess" fájlra. Ez pillanatnyilag nincs így. Kérlek az alábbiak szerint módosítsd a hozzáférési jogosultságokat: <br />&nbsp;&nbsp;%s<br />majd töltsd újra az aktuális oldalt.');
@define('EMPTY_SETTING', 'Nem adtál meg értéket ehhez: "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'A Serendipity telepített verziója %s. Úgy tűnik, hogy az alábbi verzióra szeretnél frissíteni: %s, ha így van <a href="%s">kattints ide</a> a folytatáshoz.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Szia, üdvözöllek a Serendipity frissítő-ügynökénél.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Az a feladatom, hogy segédkezzek a Serendipity %s frissítésében.');
@define('SERENDIPITY_UPGRADER_WHY', 'Ez az üzenet azért jelent meg, meg nemrég telepítetted a Serendipity %s, de az adatbázis migrációja még nem történt meg');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Adatbázis frissítések(%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Úgy találtam, hogy az alábbi .sql fájlokat le kell futtatni mielőtt folytatódna a Serendipity normál futása');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Verziófüggő feladatok');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nem találtam verziófüggő feladatot');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Elvégezzem a fenti feladatokat?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nem, inkább manuálisan futtatom azokat');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Igen, mehet');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Úgy látom, nem kell a frissítést elvégezni');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity frissítésének előkészítése kész');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'A Serendipity frissítésének fázisát figyelmen kívül hagytad, ellenőrizd hogy az adatbázis megfelelően van installálva, és az időzített feladatok futnak');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'A Serendipity rendszer frissítése megtörtént a következő verzióra: %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Visszatérhetsz a blog-hoz %side%s kattintva');
@define('ADMIN_ENTRIES', 'Bejegyzések');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nem tudok kapcsolódni az alábbi MySQL adatbázishoz: %s.');
@define('COULDNT_SELECT_DB', 'Nem sikerült a SELECT: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nem találom a felhasználói információkat: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nem találom a kategória információkat: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nem találom a bejegyzés információkat: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nem találom a hozzászólás információkat: %s.');
@define('MYSQL_REQUIRED', 'Ezen művelet végrehajtásához szükség van a MySQL kiterjesztésre.');
@define('CREATE_AUTHOR', 'Szerző létrehozása \'%s\'.');
@define('CREATE_CATEGORY', 'Kategória létrehozása \'%s\'.');
@define('MT_DATA_FILE', 'Mozgatható típusú adatfájl');
@define('INSTALL_DBPORT', 'Adatbázis port');
@define('INSTALL_DBPORT_DESC', 'Az adatbázishoz való kapcsolódáskor használt port');
@define('IMPORT_PLEASE_ENTER', 'Add meg a szükséges adatokat');
@define('IMPORT_NOW', 'Importálás!');
@define('IMPORT_STARTING', 'Importálás elkezdése ...');
@define('IMPORT_FAILED', 'Az import nem sikerült');
@define('IMPORT_DONE', 'Az import sikeres');
@define('IMPORT_WEBLOG_APP', 'Weblog program');
@define('IMPORT_NOTES', 'Megjegyzés:');
@define('IMPORT_STATUS', 'Importálás utáni státusz');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS importálása, PHP5 szükséges, és lehet hogy sok memóriát igényel');
@define('RSS_IMPORT_BODYONLY', 'Az összes szöveg kerüljön a törzsbe, ne legyen külső bejegyzésekre szedve.');
@define('IMPORT_GENERIC_RSS', 'Általános RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Visszahivatkozás küldése a bejegyzésekben található hivatkozásokra.');
@define('RSS_IMPORT_CATEGORY', 'E kategória használata az olyan importált bejegyzésekhez, amelyek nem tartoznak sehova');
@define('IMPORT_WP_PAGES', 'Csatolások és statikus oldalak letöltése mint normális bejegyzések?');
@define('DOCUMENT_NOT_FOUND', 'A %s dokumentumot nem találom.');
@define('CONVERT_HTMLENTITIES', 'A HTML bejegyzések automatikus konvertálása?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Adminisztrációs Készlet');
@define('WRONG_USERNAME_OR_PASSWORD', 'Úgy tűnik, hogy hibás felhasználó-nevet vagy jelszót adtál meg');
@define('PLEASE_ENTER_CREDENTIALS', 'Add meg az azonosításhoz szükséges adataidat.');
@define('AUTOMATIC_LOGIN', 'Adatok megjegyzése');
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
@define('MEDIA', 'Média');
@define('MEDIA_LIBRARY', 'Média könyvtár');
@define('ADD_MEDIA', 'Média hozzáadása');
@define('MANAGE_DIRECTORIES', 'Könyvtárak kezelése');
@define('CONFIGURATION', 'Beállítások');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'További hivatkozások');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity weboldal');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Dokumentáció');
@define('FURTHER_LINKS_S9Y_BLOG', 'Hivatalos blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Fórumok');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Ez a bejegyzés még nincs publikálva.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Helyi dokumentáció');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Verzió történet');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Margó Modulok');
@define('EVENT_PLUGINS', 'Eseményvezérlő Modulok');
@define('CONFIGURE_PLUGINS', 'Beépülő modulok beállítása');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Függőségi hibák: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Frissítés erre a verzióra: %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Kattints ide új %s telepítéséhez');
@define('ALREADY_INSTALLED', 'Már telepített');
@define('PLUGIN_AVAILABLE_COUNT', 'Összesen: %d modul.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Szerkesztés');
@define('EDIT_ENTRY', 'Bejegyzés szerkesztése');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Vázlat');
@define('PUBLISH', 'Publikál');
@define('CONTENT', 'Tartalom');
@define('ENTRIES_PER_PAGE', 'bejegyzések oldalanként');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Ragadós beküldés');
@define('PAGE_BROWSE_ENTRIES', '%s oldal ennyiből: %s, összes bejegyzés: %s');
@define('FIND_ENTRIES', 'Bejegyzés keresése');
@define('RIP_ENTRY', 'Bejegyzés (#%s) törölve.');
@define('NEW_ENTRY', 'Új bejegyzés');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'A bejegyzés törzse');
@define('EXTENDED_BODY', 'Részletesebb törzs');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'A bejegyzés piszkozata mentésre került.');
@define('IFRAME_PREVIEW', 'A Serendipity a bejegyzés előnézetét generálja ...');
@define('IFRAME_WARNING', 'A böngésződ nem támogatja az iframe-eket. Nyisd meg a serendipity_config.inc.php fájlt és állítsd át a  $serendipity[\'use_iframe\'] változót FALSE-ra.');
@define('DATE_INVALID', 'Vigyázat: Az általad megadott időpont helytelen. Használd az alábbi formátumot: ÉÉÉÉ-HH-NN ÓÓ:PP.');
@define('ADVANCED_OPTIONS', 'Haladó Beállítások');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Ez a link nem szolgál tartalom megjelenítésre. A visszahivatkozáshoz használható URL-t tartalmazza ehhez a bejegyzéshez. Ezt használd a saját blogodban az erre a bejegyzésre való visszahivatkozáskor. Az URL másolásához kattints rajta jobb egérgombbal, majd válaszd a "Hivatkozás címének másolása" funkciót.');
@define('RESET_DATE', 'Dátum visszaállítása');
@define('RESET_DATE_DESC', 'Kattints ide, hogy a dátumot visszaállítsd a jelenlegi dátumra');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Felhasználók kezelése');
@define('CREATE_NEW_USER', 'Új felhasználó létrehozása');
@define('CREATE_NOT_AUTHORIZED', 'Nem módosíthatod a veled azonos szinten lévő felhasználókat');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nem hozhatsz létre nálad magasabb szintű felhasználót');
@define('CREATED_USER', 'A(z) %s felhasználó létrejött');
@define('MODIFIED_USER', 'A %s felhasználó jellemzői megváltoztak');
@define('USER_LEVEL', 'Felhasználói szint');
@define('WARNING_NO_GROUPS_SELECTED', 'Figyelem: nem jelöltél ki egyetlen csoporttagságot sem. Így nem tudod majd a csoport jogokat szerkeszteni, ezért az eredeti csoporttagságaid nem változtak.');
@define('DELETE_USER', 'Ki akarod törölni a #%d %s felhasználót. Jól meggondoltad? Le lesz tiltva az összes általa írt hozzászólás a blog felületén.');
@define('DELETED_USER', 'A #%d %s felhasználó törölve.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Csoportok kezelése');
@define('DELETED_GROUP', 'A csoport törölve: #%d %s.');
@define('CREATED_GROUP', 'Az új csoportot létrehoztuk: %s');
@define('MODIFIED_GROUP', 'A következő csoport tulajdonságait megváltoztattuk %s');
@define('CREATE_NEW_GROUP', 'Új csoport létrehozása');
@define('DELETE_GROUP', 'A következő csoport törlésére készülsz: #%d %s. Biztos vagy benne?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hozzászólás keresése');
@define('COMMENTS_FILTER_SHOW', 'Mutat');
@define('COMMENTS_FILTER_ALL', 'Összes');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Elfogadott');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Még el nem fogadott');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Biztosan törlöd a kijelölt hozzászólásokat?');
@define('PAGE_BROWSE_COMMENTS', '%s oldal ennyiből: %s, összesen ennyi bejegyzés: %s');
@define('COMMENT_IS_DELETED', '(Hozzászólás törölve)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set back to state "moderate".');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'A kategóriát elmentettem');
@define('CATEGORY_ALREADY_EXIST', 'Létezik már kategória a következő névvel: "%s"');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategória (#%s) törölve. A korábbi cikkeket ide soroltam: #%s.');
@define('CATEGORY_DELETED', 'A #%s kategória törölve.');
@define('INVALID_CATEGORY', 'Nem adtál meg törlendő kategóriát');
@define('EDIT_THIS_CAT', '"%s" szerkesztése');
@define('CATEGORY_REMAINING', 'Kategória törlése, és a hozzá kapcsolódó bejegyzések hozzárendelése ehhez a kategóriához:');
@define('PARENT_CATEGORY', 'Szülő kategória');
@define('CATEGORY_HIDE_SUB', 'Az alkategóriákhoz küldött üzenetek elrejtése?');
@define('CATEGORY_HIDE_SUB_DESC', 'Alapértelmezésben amikor egy kategóriát böngészel, az alkategóriákhoz beküldött hozzászólások is látszódnak. Ha ezt engedélyezed, csak az éppen kijelölt kategóriához érkezett hozzászólások lesznek láthatóak.');
@define('CREATE_NEW_CAT', 'Új Kategória Létrehozása');
@define('ALREADY_SUBCATEGORY', 'A(z) %s már alkategóriája ennek: %s.');
@define('NO_CATEGORIES', 'Nincsenek kategóriák');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Adat importálása');
@define('EXPORT_ENTRIES', 'Bejegyzések exportálása');
@define('EXPORT_FEED', 'Teljes RSS hírcsatorna exportja');
@define('CREATE_THUMBS', 'Előnézeti képek újragenerálása');
@define('WARNING_THIS_BLAHBLAH', "FIGYELEM:\\nEz sokáig eltarthat, ha csak kevés képnek van előnézeti képe.");
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
@define('TEMPLATE_SET', 'Az alapértelmezett sablonod beállításra került: \'%s\'');
@define('WARNING_TEMPLATE_DEPRECATED', 'Figyelem: A jelenlegi sablonod elavult sablon metódust használ, ajánlott a frissítése');
@define('STYLE_OPTIONS_NONE', 'Ennek a témának/stílusnak nincsenek speciális opciói. A sablon opcióihoz olvasd el a dokumentációt a következő oldalon www.s9y.org a "Configuration of Theme options" résznél.');
@define('STYLE_OPTIONS', 'Téma/stílus opciók');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Egyedi adminisztrációs felület érhető el');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Sablonnak kiválaszt');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Ellenőrzés &amp; mentés');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'A bejelölt beépülő modulok eltávolítása');
@define('SAVE_CHANGES_TO_LAYOUT', 'Változások mentése az oldal szerkezetébe (layout)');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Szinkronizálom az adatbázist a képek könyvtárával.');
@define('SYNC_DONE', 'Kész (%s képet szinkronizáltam).');
@define('RESIZE_BLAHBLAH', '<b>Átméretezés %s</b>');
@define('ORIGINAL_SIZE', 'Eredeti méret: <i>%sx%s</i> képpont');
@define('RESIZING', 'Átméretezés');
@define('RESIZE_DONE', 'Kész (%s kép átméretezve).');
@define('KEEP_PROPORTIONS', 'Arányok megőrzése');
@define('REALLY_SCALE_IMAGE', 'Biztos, hogy átméretezed? Nem lehet visszafordítani a folyamatot!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Itt módosíthatja a kép méretét. Ha arányosan szeretné a képet átméretezni, elég az egyik dobozban módosítani a számot,majd megnyomni a TAB billentyűt -- az új méret automatikusan kerül meghatározásra, így a kép nem lesz aránytalan</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Új méret: ');
@define('SCALING_IMAGE', 'Átméretezem %s-t %s x %s képpontra');
@define('MEDIA_DIRECTORY_MOVED', 'A könyvtár és a fájlok sikeresen átkerültek ide: %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'A könyvtárt és a fájlokat nem sikerült átmozgatni ide: %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'A következő könyvtárat létrehoztuk: <strong>%s</strong>.');
@define('PARENT_DIRECTORY', 'Szülő könyvtár');
@define('CONFIRM_DELETE_DIRECTORY', 'Biztosan törlöd ennek a könyvtárnak minden tartalmát: %s?');
@define('ERROR_NO_DIRECTORY', 'Hiba: A könyvtár nem létezik: %s');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'A nem üres könyvtárat nem tudom törölni. Ellenőrizd a "kényszerített törlés" kapcsolót ha ezeket is törölni szeretnéd, majd ismételd meg a műveletet. A létező fájlok a következők:');
@define('DIRECTORY_DELETE_FAILED', 'Ennek a könyvtárnak a törlése nem sikerült: %s. Ellenőrizd a jogosultságokat, vagy a fenti üzenetet.');
@define('DIRECTORY_DELETE_SUCCESS', 'A könyvtárt sikeresen töröltük: %s.');
@define('CHECKING_DIRECTORY', 'Fájlok ellenőrzése a könyvtárban %s');
@define('DELETE_DIRECTORY', 'Könyvtár törlése');
@define('DELETE_DIRECTORY_DESC', 'Törölni készül egy könyvtárat, amelyben média fájlok vannak. Lehetséges hogy ezekre hivatkozik bejegyzésekből is.');
@define('FORCE_DELETE', 'Az ÖSSZES fájl törlése a könyvtárból, azokat is amelyeket a Serendipity nem ismer');
@define('CREATE_DIRECTORY', 'Könyvtár létrehozása');
@define('CREATE_NEW_DIRECTORY', 'Új könyvtár létrehozása');
@define('CREATE_DIRECTORY_DESC', 'Új könyvtárat hozhat létre a média fájlok számára. Írj be egy nevet, és ha kell válassz szülőkönyvtárat.');
@define('ABOUT_TO_DELETE_FILE', 'A következő fájl törlésére készülsz: <b>%s</b><br />Ha van olyan bejegyzés ahol ezt használod, akkor így törött hivatkozások vagy hiányzó képek lesznek<br />Biztosan folytatod?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Hiba: A fájl már létezik a gépeden!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nem találom a <b>%s</b> fájlt, lehet, hogy már törölve lett?');
@define('ERROR_FILE_FORBIDDEN', 'Nincs jogosultságod aktív bejegyzés felvitelére');
@define('REMOTE_FILE_NOT_FOUND', 'Nem találtam ilyen fájlt a távoli szerveren, biztos, hogy a: <b>%s</b> URL helyes?');
@define('FILE_FETCHED', '%s leszedve, mint %s');
@define('FILE_UPLOADED', 'A %s fájlt sikeresen feltöltettem %s néven');
@define('DELETE_FILE_FAIL', 'Nem sikerült a fájl törlése: <b>%s</b>');
@define('DELETE_FILE', 'A következő fájlt töröltem: <b>%s</b>');
@define('FOUND_FILE', 'Módosított/új fájlt találtam: %s.');
@define('FILENAME_REASSIGNED', 'Az automatikusan létrehozott új fájlnév: %s');
@define('ERROR_FILE_EXISTS', 'Hiba: az új fájlnév már létezik, válassz másikat!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'közvetlenül hivatkozva');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Az alábbi fájl új neve: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Kép hozzáadása...');
@define('THUMB_CREATED_DONE', 'Előnézeti kép létrehozva.<br/>Kész.');
@define('THUMBNAIL_USING_OWN', 'Saját magát (%s) használom előnézeti képnek, mert elég kicsi az eredeti kép.');
@define('THUMBNAIL_FAILED_COPY', 'Saját magát (%s) szerettem volna előnézeti képnek használni, de nem sikerült odamásolni!');
@define('DELETE_THUMBNAIL', 'A következő előnézeti kép törlése: <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ismeretlen hiba történt, a fájl nincs feltöltve. Talán a fájl mérete nagyobb mint a szerveren beállított megengedett maximum érték. Ezt a beállítást a szerver üzemeltetője tudja megváltoztatni.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Hiba: Nem tölthetsz fel nagyobb méretű fájlt mint %s bájt!');
@define('MEDIA_UPLOAD_DIMERROR', 'Hiba: Nem tölthetsz fel nagyobb méretű képet mint %s x %s pixel!');
@define('HOTLINK_DONE', 'Fájl közvetlen hivatkozás létrehozva.<br />Kész.');
@define('DELETE_HOTLINK_FILE', 'Ezt a közvetlen hivatkozást használó fájlt töröltük <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nem sikerült futtatni a következőt: "%s", hiba: %s, visszatérési érték: %d');
@define('SKIPPING_FILE_EXTENSION', 'Fájl kihagyása: hiányzó kiterjesztés ennél: %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Fájl kihagyása: %s nem  olvasható.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Jogosultság örököltetése az almappákra is');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Kis előnézeti képeket szeretnék a bejegyzésben használni.');
@define('I_WANT_BIG_IMAGE', 'Nagyobb képeket szeretnék a bejegyzésben használni.');
@define('I_WANT_NO_LINK', 'Képként szeretném megjeleníteni');
@define('I_WANT_IT_TO_LINK', 'Az alábbi hivatkozásként szeretném megjeleníteni:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Képméret');
@define('IMAGE_ALIGNMENT', 'Kép elrendezés/elhelyezés');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Kép beszúrása');
@define('MEDIA_TARGET', 'A hivatkozás célja (target)');
@define('MEDIA_TARGET_JS', 'Felbukkanó ablak (JavaScript-el, igazított méret)');
@define('MEDIA_ENTRY', 'Önálló bejegyzés');
@define('MEDIA_TARGET_BLANK', 'Felbukkanó ablak (target=_blank -el)');
@define('YOU_CHOSE', 'Ezt választottad: %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'A kép 90 fokos elforgatása az óramutató járásával ellentétes irányba');
@define('IMAGE_ROTATE_RIGHT', 'A kép 90 fokos elforgatása az óramutató járásával megegyező irányba');
@define('MEDIA_RENAME', 'Fájl átnevezése');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Eredeti');
@define('SORT_ORDER_NAME', 'Fájlnév');
@define('SORT_ORDER_EXTENSION', 'Kiterjesztés');
@define('SORT_ORDER_SIZE', 'Fájlméret');
@define('SORT_ORDER_WIDTH', 'Képszélesség');
@define('SORT_ORDER_HEIGHT', 'Képmagasság');
@define('SORT_ORDER_DATE', 'Feltöltés dátuma');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Fájl hozzáadása a média tárolóhoz:</b><p>Itt tölthetsz fel médiafájlokat, vagy megmondhatod hogy honnan töltsem le őket! Ha nincs meg egy bizonyos kép, <a href="https://images.google.com/" target="_blank">keress rá a google-t használva</a> az elképzelésednek megfelelően. Az eredmények gyakran hasznosak és viccesek :) De vigyázz, a legtöbb kép szerzői jogvédelem alatt áll, így mielőtt használnád kérdezz rá.</p><p><b>Válassz a lehetőségek közül:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Add meg a letöltendő fájlra mutató hivatkozást:');
@define('ENTER_MEDIA_UPLOAD', 'Válassza ki a feltöltendő fájlt:');
@define('SAVE_FILE_AS', 'Fájl mentése a következő néven:');
@define('STORE_IN_DIRECTORY', 'Tárolás a következő könyvtárban: ');
@define('IMAGE_MORE_INPUT', 'További képek hozzáadása');
@define('ENTER_MEDIA_URL_METHOD', 'Letöltési mód:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Megjegyzés: ha a közvetlen hivatkozást választod, bizonyosodj meg arról, hogy van-e jogod ehhez, vagy a szerver ahova mutatsz a tiéd. Ezzel a módszerrel úgy jeleníthetsz meg képeket, hogy azok nem kerülnek hozzád lementésre.');
@define('FETCH_METHOD_IMAGE', 'Kép letöltése a szerveredre');
@define('FETCH_METHOD_HOTLINK', 'Közvetlen hivatkozás szerverre');
@define('GO_ADD_PROPERTIES', 'Mehet, majd utána a tulajdonságok szerkesztése');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Kép átméretezése');
@define('MEDIA_DELETE', 'Fájl törlése');
@define('FILES_PER_PAGE', 'Oldalanként megjelenő fájlok');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nem található kép');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'összes könyvtár');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'A beállítások mentése sikeres');
@define('DIAGNOSTIC_ERROR', 'Találtam valami hibát az általad megadott adatokban:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Adatbázis Beállítások');
@define('INSTALL_CAT_DB_DESC', 'Itt adhatod meg az összes adatbázis beállítást. A Serendipity-nek szüksége van erre a működéshez');
@define('INSTALL_DBTYPE', 'Adatbázis típusa');
@define('INSTALL_DBTYPE_DESC', 'Adatbázis típusa');
@define('INSTALL_DBHOST', 'Adatbázis hoszt');
@define('INSTALL_DBHOST_DESC', 'Az adatbázis szerver hosztneve');
@define('INSTALL_DBUSER', 'Adatbázis felhasználó');
@define('INSTALL_DBUSER_DESC', 'A felhasználói név, amivel az adatbázisodhoz lehet kapcsolódni');
@define('INSTALL_DBPASS', 'Adatbázis jelszó');
@define('INSTALL_DBPASS_DESC', 'A fent megadott felhasználóhoz tartozó jelszó');
@define('INSTALL_DBNAME', 'Az adatbázis neve');
@define('INSTALL_DBNAME_DESC', 'Az adatbázisod neve');
@define('INSTALL_DBPREFIX', 'Az adatbázis táblák prefix-e');
@define('INSTALL_DBPREFIX_DESC', 'A táblanevek prefix-e, pl.: serendipity_');
@define('INSTALL_DBPERSISTENT', 'Állandó kapcsolat használata');
@define('INSTALL_DBPERSISTENT_DESC', 'Engedélyezd az állandó adatábziskapcsolat használatához. <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">Itt olvashatsz erről többet</a>. Normális esetben ez nem szükséges');
@define('INSTAL_DB_UTF8', 'Adatbázis katakterkonverzió engedélyezése');
@define('INSTAL_DB_UTF8_DESC', 'MySQL esetében add ki a következő parancsot a szükséges karakterkódolás megállapításához: "SET NAMES". Kapcsold ki vagy be ezt az opciót, ha furcsa karaktereket látsz a blog-ban.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Útvonalak');
@define('INSTALL_CAT_PATHS_DESC', 'Különféle útvonalak a fontos könyvtárakhoz és fájlokhoz. A könyvtárak végéről ne felejtsd el a per ("\") jelet!');
@define('INSTALL_FULLPATH', 'Teljes útvonal');
@define('INSTALL_FULLPATH_DESC', 'A teljes abszolút elérési útvonal a saját serendipity telepítésedhez');
@define('INSTALL_UPLOADPATH', 'Feltöltési útvonal');
@define('INSTALL_UPLOADPATH_DESC', 'Minden feltöltött fájl ide kerül, relatív a  \'Full path\' bejegyzéshez - általában \'uploads/\'');
@define('INSTALL_RELPATH', 'Relatív útvonal');
@define('INSTALL_RELPATH_DESC', 'A serendipity-hez vezető útvonal a böngészőben, általában \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relatív "template" útvonal');
@define('INSTALL_RELTEMPLPATH_DESC', 'Útvonal a "template"-eket tartalmazó könyvtárhoz - relatív a \'relative path\' bejegyzéshez');
@define('INSTALL_RELUPLOADPATH', 'Relatív feltöltési útvonal');
@define('INSTALL_RELUPLOADPATH_DESC', 'A feltöltésekhez vezető útvonal a böngészőben - Relatív a \'relative path\' bejegyzéshez');
@define('INSTALL_URL', 'URL a blog-hoz');
@define('INSTALL_URL_DESC', 'A blog-od URL-je');
@define('INSTALL_AUTODETECT_URL', 'HTTP-Hoszt automatikus meghatározása');
@define('INSTALL_AUTODETECT_URL_DESC', 'Ha ez "igen"-re van állítva, akkor a látogató által használt domain név kerül használatra  az általad beállított BaseURL helyett. Ezzel a beállítással több domain-es környezetben is használhatod a Serendipity blog-ot, így nem okoz gondot a linkek kezelése.');
@define('INSTALL_INDEXFILE', 'Index fájl');
@define('INSTALL_INDEXFILE_DESC', 'A serendipity-d index fájlja');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permanens hivatkozások');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Különböző URL mintákat lehet definiálni a permanens hivatkozásokhoz, amiket azután a blog-ban használhatsz. Az alapértelmezett használata ajánlott; ha nem azt használod, akkor próbáld ezt az értéket: %id% , amennyiben lehet, ahhoz hogy a Serendipity-nek ne kelljen lekérdeznie az URL-t az adatbázisból.');
@define('INSTALL_PERMALINK', 'Bejegyzésre vonatkozó permanens hivatkozás URL struktúrája');
@define('INSTALL_PERMALINK_DESC', 'Itt adhatod meg a relatív URL struktúrát az alap URL-hez képest, ahonnan a bejegyzések elérhetőek lesznek. Használhatod a következő változókat: %id%, %title%, %day%, %month%, %year% és egyéb karaktereket is.');
@define('INSTALL_PERMALINK_AUTHOR', 'Szerzőre vonatkozó permanens hivatkozás URL struktúrája');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Itt adhatod meg a relatív URL struktúrát az alap URL-hez képest, ahonnan a szerzőre mutató hivatkozások elérhetőek lesznek. Használhatod a következő változókat: %id%, %realname%, %username%, %email% és egyéb karaktereket is.');
@define('INSTALL_PERMALINK_CATEGORY', 'Kategóriára vonatkozó permanens hivatkozás URL struktúrája');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Itt adhatod meg a relatív URL struktúrát az alap URL-hez képest, ahonnan a kategóriára mutató hivatkozások elérhetőek lesznek. Használhatod a következő változókat: %id%, %name%, %parentname%, %description% és egyéb karaktereket is.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'RSS hírcsatornára vonatkozó permanens hivatkozás URL struktúrája');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Itt adhatod meg a relatív URL struktúrát az alap URL-hez képest, ahonnan az RSS hírcsatornára mutató hivatkozások elérhetőek lesznek. Használhatod a következő változókat: %id%, %name%, %description% és egyéb karaktereket is.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'A szerzőre hivatkozó permanens hivatkozás RSS hírcsatorna-beli struktúrája');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Itt adhatod meg a relatív URL struktúrát az alap URL-hez képest, ahol az egyes felhasználók RSS hírcsatornái megtekinthetők. A következő változókat használhatod: %id%, %realname%, %username%, %email% és egyéb karaktereket.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Archívumok útvonala');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Archívum útvonala');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Kategóriák útvonala');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Útvonal a szerzőkhöz');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Útvonal a hozzászólásról való leiratkozáshoz');
@define('INSTALL_PERMALINK_DELETEPATH', 'Útvonal a hozzászólás törléséhez');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Útvonal a hozzászólás elfogadásához');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Útvonal az RSS hírcsatornákhoz');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Modul útvonala');
@define('INSTALL_PERMALINK_ADMINPATH', 'Adminisztráció útvonala');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Útvonal a kereséshez');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Útvonal a hozzászólásokhoz');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Általános Beállítások');
@define('INSTALL_CAT_SETTINGS_DESC', 'Határozd meg, hogyan működjön a Serendipity');
@define('INSTALL_USERNAME', 'Az adminisztrátor felhasználói neve');
@define('INSTALL_USERNAME_DESC', 'A mindenható adminisztrátor felhasználói neve');
@define('INSTALL_PASSWORD', 'Az adminisztrátor jelszava');
@define('INSTALL_PASSWORD_DESC', 'Az adminisztrátor felhasználóhoz tartozó jelszó');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Valódi név');
@define('USERCONF_REALNAME_DESC', 'A szerző teljes neve. Ezt látják az olvasók.');
@define('INSTALL_EMAIL', 'Adminisztrátori email');
@define('INSTALL_EMAIL_DESC', 'A blog adminisztrátor email címe');
@define('INSTALL_SENDMAIL', 'Küldjek levelet az adminisztrátornak?');
@define('INSTALL_SENDMAIL_DESC', 'Szeretnél levelében értesülni arról, ha egy bejegyzésedhez valaki hozzászólást fűzött?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Blog név');
@define('INSTALL_BLOGNAME_DESC', 'A blog-od neve');
@define('INSTALL_BLOGDESC', 'Blog leírás');
@define('INSTALL_BLOGDESC_DESC', 'A blod-od leírása');
@define('INSTALL_BLOG_EMAIL', 'A Blog email címe');
@define('INSTALL_BLOG_EMAIL_DESC', 'Itt adható meg az az email cím, ami a kimenő levelek "Küldő" részében lesz megtalálható. Érdemes valós email címet megadni itt, mert sok levelező szerver ellenőrzi a küldő email cím érvényességét.');
@define('COMMENT_TOKENS', 'Tokenek használata a hozzászólások moderálásához?');
@define('COMMENT_TOKENS_DESC', 'Amennyiben tokeneket használunk, a hozzászólásokat elfogadhatjuk vagy törölhetjük az emailben kapott linkre kattintva a blogba való bejelentkezés nélkül. Ez egy kényelmi funkció, de amennyiben egy ilyen email illetéktelenek kezébe kerül, ők is manipulálhatnak a kérdéses hozzászólásokkal további azonosítás nélkül.');
@define('INSTALL_LANG', 'Nyelv');
@define('INSTALL_LANG_DESC', 'Milyen nyelven szóljon a blod-od?');
@define('INSTALL_CHARSET', 'Karakterkódolás választása');
@define('INSTALL_CHARSET_DESC', 'Itt beállíthatod az UTF-8, vagy a natív (ISO, EUC, ...) karakterkódolást. Néhány nyelvnek csak UTF-8 leképezése létezik, így itt a natívot nem érdemes választani. Az UTF-8 ajánlott új telepítéskor. Ne változtasd meg ezt akkor, ha már vannak bejegyzéseid speciális karakterekkel - mert így hibás karakterek jelenhetnek meg. Itt olvashatsz erről többet: https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Naptár típus');
@define('INSTALL_CAL_DESC', 'Válaszd ki a kívánt naptár formátumát');
@define('AUTOLANG', 'A látogató böngészőjében beállított nyelv használata');
@define('AUTOLANG_DESC', 'Ha ez "igen"-re van állítva, akkor az oldal megtekintőjének a böngészőjében megadott nyelv lesz aktív a bejegyzéseknél és a felületen.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Modulokra érvényes ACL (bővebb jogosultságkezelés) engedélyezése felhasználócsoportonként?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Ha ezt engedélyezed, beállíthatod hogy mely felhasználói csoportok kezelhetnek modulokat/eseményeket.');
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
@define('INSTALL_CAT_DISPLAY', 'Megjelenítési beállítások');
@define('INSTALL_CAT_DISPLAY_DESC', 'A serendipity kinézetének beállításai');
@define('INSTALL_FETCHLIMIT', 'A főoldalon megjelenítendő bejegyzések');
@define('INSTALL_FETCHLIMIT_DESC', 'A főoldalon lévő oldalakon megjelenő bejegyzések száma');
@define('INSTALL_RSSFETCHLIMIT', 'A hírcsatornában megjelenítendő bejegyzések');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Az RSS hírcsatornában megjelenítendő bejegyzések száma.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'RFC2616 formátumú RSS hírcsatorna kompatibilitás beállítása');
@define('SYNDICATION_RFC2616_DESC', 'Ha a RFC2616 formátum kompatibilitást NEM engedélyezed, akkor a aki lekéri a hírcsatornát, mindig az utolsó lekérés óta frissült elemeket kapja vissza, ami alapvetően jó működés. Van néhány RSS kliens viszont, mint például a Planet, amelyek furcsán viselkednek ilyenkor, ami nem RFC2616 kompatibilis.  Így ha ezt engedélyezed, kompatibilis leszel a szabvánnyal, de néhány olvasó lemaradhat bizonyos hírekről. Itt olvashatsz erről többet: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Gzip tömörített oldalak használata');
@define('INSTALL_USEGZIP_DESC', 'Az oldalak kiszolgálásának gyorsításához, a látogatónak küldött oldalakat tömöríthetjük, ha a böngésző támogatja ezt. Ajánlott beállítás.');
@define('INSTALL_XHTML11', 'Kényszerített XHTML 1.1 megfelelőség');
@define('INSTALL_XHTML11_DESC', 'Az oldalak mindenképp megfeleljenek XHTML 1.1 szabványnak (problémát okozhat a régebbi 4-edik generációs böngészők esetében)');
@define('INSTALL_POPUP', 'Engedélyezed a felbukkanó (popup) ablakok használatát');
@define('INSTALL_POPUP_DESC', 'Szeretnéd, hogy a hozzászólások, visszahivatkozások esetében legyenek felbukkanó ablakok?');
@define('INSTALL_EMBED', 'A serendipity beágyazott alkalmazásként fut?');
@define('INSTALL_EMBED_DESC', 'Amennyiben szeretnéd a serendipity-t egy szokványos oldalba ágyazni, válaszd ezt az opciót, s így csak a tartalom jelenik meg fejléc nélkül. Hasznát veheted az "indexFile" opciónak, hogy használni tudj egy "wrapper class"-t, ahová a honlapod eredeti fejlécét. További információért lásd a README fájlt!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Legyenek a külső helyre való hivatkozások kattinthatóak?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"nem": a nem ellenőrzött külső hivatkozások (leggyakoribb kilépők, leggyakoribb visszahivatkozók, hozzászólások) sima szövegként jelennek meg, azaz nem kattinthatóak, megelőzve ezzel pl. a google spam-et (ajánlott). "igen": a nem ellenőrzött külső hivatkozások kattintható hivatkozásként való megjelenítése. Felüldefiniálható a margó modul beállításainál!');
@define('INSTALL_TRACKREF', 'Engedélyezzük a hivatkozók ellenőrzését?');
@define('INSTALL_TRACKREF_DESC', 'Ha ezt engedélyezed, látod majd, hogy mely oldalak hivatkoznak a bejegyzéseidre. Manapság ezt gyakran használják spammerek, így érdemes ezt tiltani.');
@define('INSTALL_BLOCKREF', 'Tiltott ide hivatkozók');
@define('INSTALL_BLOCKREF_DESC', 'Van olyan gép, amelyet nem szeretne megjeleníteni az ide hivatkozók listájában? Válassza el ezeket a címeket \';\'-vel. A címek akkor is blokkolódnak, ha a szöveg közepén van egyezés!');
@define('INSTALL_REWRITE', 'URL Átírás');
@define('INSTALL_REWRITE_DESC', 'Válaszd ki a szabályokat, amelyeket az URL generálás során használni szeretnél. Az átíró szabályok használata szebb URL-t ad a blog-odnak, és a web-es robotok (pl: google)is könnyebben indexelik. A webszervernek támogatnia kell a "mod_rewrite" vagy a "AllowOverride All" beállítást a serendipity könyvtáradhoz. Az alapértelmezett beállítás az automatikus érzékelés (autodetect))');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Szerver idő eltolódás');
@define('INSTALL_OFFSET_DESC', 'Add meg az időkülönbséget a szerveren lévő idő (jelenlegi: %clock%), és az általad használni kívánt időpont között');
@define('INSTALL_SHOWFUTURE', 'Jövőbeli bejegyzések mutatása');
@define('INSTALL_SHOWFUTURE_DESC', 'Ha ez engedélyezve van, akkor a jövőbeni bejegyzések is láthatóak lesznek. Alapértelmezésben ezeket elrejtjük, és cask akkor kerülnek megmutatásra, ha eljön a publikálási dátum.');
@define('INSTALL_ACL', 'Olvasási jogosultságok bekapcsolása a kategóriákon');
@define('INSTALL_ACL_DESC', 'Ha engedélyezed, akkor a kategóriákra alkalmazott olvasási jogosultságok minden alkalommal ellenőrzésre kerülnek amikor egy látogató megtekinti az oldalt. Ha nincs engedélyezve, az olvasási jogosultságok nem kerülnek ellenőrzésre, de cserébe gyorsabb lesz a működés. Így ha nincs szükséged erre, ne engedélyezd.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Az egész bejegyzés RSS hírcsatornában mutatása a külső szövegekkel együtt.');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Kép az RSS infóhoz');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'A GIF/JPEG/PNG formátumú kép URL-je, ha van. (üres: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Képszélesség');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'képpontban, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Képmagasság');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'képpontban, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'E-mail címek mutatása?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '"Főszerkesztő" mező');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'A Főszerkesztő email címe, ha van. (üres: rejtett) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '"Webmester" mező');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'A Webmester email címe, ha van. (üres: rejtett) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', '"TTL" mező (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Az az időtartam (percben), ami után a blog-odat nem cache-elje többé semmilyen külső honlap vagy alkalmazás (üres: rejtett) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '"Publikáció Dátuma" mező');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Szerepeljen a "Publikáció Dátuma" mező az RSS-csatornán annak érdekében, hogy látszódjon a legfrissebb bejegyzés dátuma?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Kép konvertáló beállítások');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Globális beállítások arról, hogy a serendipity hogyan kezelje a képeket');
@define('INSTALL_IMAGEMAGICK', 'ImageMagick használata');
@define('INSTALL_IMAGEMAGICK_DESC', 'Van-e a szerveren ImageMagick telepítve, és szeretné-e ezt használni a képek átméretezéséhez?');
@define('INSTALL_IMAGEMAGICKPATH', 'A futtatható fájl elérési útvonala');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Az Imagemagic program útvonala és fájlneve');
@define('INSTALL_THUMBSUFFIX', 'A generált előnézeti képek előtagja');
@define('INSTALL_THUMBSUFFIX_DESC', 'A képekből generált előnézeti képek ilyen nevűek lesznek: eredetinév.[előtag].kiterj');
@define('INSTALL_THUMBWIDTH', 'Előnézeti kép méretek');
@define('INSTALL_THUMBWIDTH_DESC', 'Az automatikusan generált előnézeti képek szélességének maximuma');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Feltölthető maximális fájlméret');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Add meg a maximálisan feltölthető fájlméretet. Ezt a szerver oldalon is felül lehet bírálni a PHP.ini-ben a következő beállításokkal: upload_max_filesize, post_max_size, max_input_time ; mindegyikük felüldefiniálja az itt beállított értéket. Az üresen hagyott mező azt jelenti, hogy a szerver beállításait használjuk.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Feltöltendő képek maximális szélessége');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Megadhatod a feltöltendő képek maximális szélességét.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Feltöltendő képek maximális magassága');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Megadhatod a feltöltendő képek maximális magasságát.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Menet közbeni médiafájl-szinkronizáció engedélyezése');
@define('ONTHEFLYSYNCH_DESC', 'Ha ezt engedélyezed, a Serendipity összehasonlítja a média adatbázist a szerveren található fájlokkal, és szinkronizálja őket.');
@define('MEDIA_DYN_RESIZE', 'Engedélyezzük a képek automatikus átméretezését?');
@define('MEDIA_DYN_RESIZE_DESC', 'Ha ezt engedélyezed, a médiaválasztó megadott méretűre konvertálj a hivatkozozz képeket. Az eredmények eltárolásra kerülnek. Így ha ezt sűrűn használod, sok fájlod összegyűlhet.');
@define('MEDIA_EXIF', 'EXIF/JPEG képadatok importálása');
@define('MEDIA_EXIF_DESC', 'Ha ezt engedélyezed, akkor a képeknél már létező EXIF/JPEG metaadatok bekerülnek az adatbázisba, és megjelennek a médiagalériban.');
@define('MEDIA_PROP', 'Média tulajdonságok');
@define('MEDIA_PROP_DESC', 'Adj meg ";"-vel elválasztott tulajdonságokat, amelyeket szeretnél használni a média fájloknál');
@define('MEDIA_PROP_MULTIDESC', '(Bármelyik elem mögé hozzáfűzheted hogy ":MULTI", így jelezve azt, hogy ez a mező nagyobb szöveget is tartalmazhat, nemcsak kisebb szöveget)');
@define('MEDIA_KEYWORDS', 'Média kulcsszavak');
@define('MEDIA_KEYWORDS_DESC', 'Adj meg ";"-vel elválasztott szavakat, amelyeket szeretnél használni a médiaelemeknél előre definiált kulcsszavakként.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Személyes adatok');
@define('USERCONF_CAT_PERSONAL_DESC', 'Itt változtatod meg a személyes adatait');
@define('USERCONF_USERNAME', 'Felhasználó név');
@define('USERCONF_USERNAME_DESC', 'Ezzel a névvel jelentkezhetsz be');
@define('USERCONF_PASSWORD', 'Jelszó');
@define('USERCONF_PASSWORD_DESC', 'A belépéshez használt jelszó');
@define('USERCONF_CHECK_PASSWORD', 'Régi jelszó');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Ha a mezőben megváltoztatod a jelszót, itt meg kell adnod a jelenlegit.');
@define('USERCONF_USERLEVEL', 'Hozzáférési szint');
@define('USERCONF_USERLEVEL_DESC', 'Ez a szint határozza meg, hogy a szerkesztőnek milyen jogosultságai vannak a blog-hoz');
@define('USERCONF_GROUPS', 'Csoporttagság');
@define('USERCONF_GROUPS_DESC', 'Ez a felhasználó a következő csoportok tagja. Több csoportba is tartozhat.');
@define('USERCONF_EMAIL', 'Email cím');
@define('USERCONF_EMAIL_DESC', 'Az email címed');
@define('INSTALL_WYSIWYG', 'A WYSIWYG szerkesztő használata');
@define('INSTALL_WYSIWYG_DESC', 'Szeretnéd használni a WYSIWYG szerkesztőt? (IE5+ alatt működik, valamint részben a Mozilla 1.3+ alkalmazásban)');
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
@define('USERCONF_SENDCOMMENTS', 'Hozzászólások elküldése?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Szeretnél kapni emailt ha valamelyik bejegyzéshez hozzászólás érkezik?');
@define('USERCONF_SENDTRACKBACKS', 'Küldjünk értesítést visszahivatkozáskor?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Szeretnél kapni emailt, ha valaki visszahivatkozik valamelyik bejegyzésedre?');
@define('USERCONF_CREATE', 'Felhasználó letiltása / aktivitás tiltása?');
@define('USERCONF_CREATE_DESC', 'Ha ezt választod, a felhasználó nem hozhat létre bejegyzéseket és nem szerkeszthet semmit. Bejelentkezése után, csak kijelentkezni tud, illetve megtekintheti személyes beállításait.');
@define('USERCONF_ALLOWPUBLISH', 'Jogok: Bejegyzés közzététele?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Ez a felhasználó jogosult a bejegyzések közzétételére?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Mutassuk az eszköztárat a médiaválasztó ablakban?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Alapértelmezett beállítások új bejegyzésekhez');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'Megjegyzés: A felhasználó szintű attribútumok a visszafele kompatibilitás, néhány modul és az azonosítás néhány esete miatt szükségesek. A felhasználók jogosultsága a csoporttagságon keresztül állítható be!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Helytelenül adtad meg a jelenlegi jelszót, így nem változtathatod meg. A beállításokat nem mentettük.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'A felhasználói név nem lehet üres.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'Személyes beállítások elérése');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'Felhasználói szint változtatása');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'A "nem vehet fel bejegyzést" változtatása');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'Bejegyzés publikálási jogosultság változtatása');
@define('PERMISSION_SITECONFIGURATION', 'Rendszer-konfigurációhoz hozzáfér');
@define('PERMISSION_BLOGCONFIGURATION', 'Blog specifikus beállításokhoz hozzáfér');
@define('PERMISSION_ADMINENTRIES', 'Bejegyzések adminisztrálása');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'Más felhasználók bejegyzéseinek adminisztrálása');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'Bejegyzések importálása');
@define('PERMISSION_ADMINCATEGORIES', 'Kategóriák adminisztrálása');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'Más felhasználók kategóriáinak adminisztrálása');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'Kategóriák törlése');
@define('PERMISSION_ADMINUSERS', 'Felhasználók adminisztrálása');
@define('PERMISSION_ADMINUSERSDELETE', 'Felhasználók törlése');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'Felhasználói szint megváltoztatása');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'A csoportodban lévő felhasználók adminisztrálása');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'A csoportodba nem tartozó felhasználók adminisztrálása');
@define('PERMISSION_ADMINUSERSCREATENEW', 'Felhasználók létrehozása');
@define('PERMISSION_ADMINUSERSGROUPS', 'Felhasználói csoportok adminisztrálása');
@define('PERMISSION_ADMINPLUGINS', 'Modulok adminisztrálása');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'Más felhasználók moduljainak adminisztrálása');
@define('PERMISSION_ADMINIMAGES', 'Média fájlok adminisztrálása');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'Média könyvtárak adminisztrálása');
@define('PERMISSION_ADMINIMAGESADD', 'Új média fájlok hozzáadása');
@define('PERMISSION_ADMINIMAGESDELETE', 'Média fájlok törlése');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'Más felhasználók média fájljainak adminisztrálása');
@define('PERMISSION_ADMINIMAGESVIEW', 'Média fájlok megtekintése');
@define('PERMISSION_ADMINIMAGESSYNC', 'Előnézeti képek szinkronizálása');
@define('PERMISSION_ADMINCOMMENTS', 'Hozzászólások adminisztrálása');
@define('PERMISSION_ADMINTEMPLATES', 'Sablonok adminisztrálása');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'Más felhasználók média fájljainak megtekintése');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Letiltott modulok');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Letiltott események');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'A bejegyzés mentve');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Logikai sorrend');
@define('COMMENTS_VIEWMODE_LINEAR', 'Folyamatos');
@define('DISPLAY_COMMENTS_AS', 'A hozzászólások megjelenítése így:');
@define('COMMENTS_DISABLE', 'Ne lehessen hozzászólni');
@define('COMMENTS_ENABLE', 'Lehessen hozzászólni');
@define('COMMENTS_CLOSED', 'A szerző letiltotta a hozzászólást.');
@define('VIEW_EXTENDED_ENTRY', '"%s" tovább olvasása');
@define('TRACKBACK_SPECIFIC', 'Visszahivatkozás specifikus URI ehhez a bejegyzéshez');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Minden megtekintése');
@define('VIEW_TOPICS', 'Címek megtekintése');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Címek innen: ');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'A bejegyzéseket nem sikerült beilleszteni!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Megjegyezzem a megadott adatokat? ');
@define('SUBMIT_COMMENT', 'Hozzászólás beküldése');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Feliratkozom erre a bejegyzésre');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'A böngésződ nem küldött érvényes HTTP-Hivatkozó szöveget. Ez több okból lehet, pl. rosszul beállított böngésző, proxy, vagy egy Cross Site Request Forgery (XSRF) támadás áldozata lettél. A kért művelet nem hajtható végre.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'A hozzászólás már elfogadott: #%s');
@define('COMMENT_EDITED', 'A kiválasztott hozzászólás módosítva lett');
@define('COMMENTS_WILL_BE_MODERATED', 'A hozzászólások moderáláson esnek át megjelenés előtt.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Figyelem: Ezt a bejegyzést el kell fogadni mielőtt megjelenhetne');
@define('DELETE_COMMENT', 'Hozzászólás törlése');
@define('APPROVE_COMMENT', 'Hozzászólás elfogadása');
@define('REQUIRES_REVIEW', 'Szükséges az előzetes átnézés');
@define('COMMENT_APPROVED', 'A következő hozzászólást sikeresen elfogadtuk: #%s');
@define('COMMENT_DELETED', 'A következő hozzászólást sikeresen töröltük: #%s');
@define('COMMENTS_MODERATE', 'A hozzászólásokat és a visszahivatkozásokat moderálni kell megjelenés előtt.');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Figyelem: Ezt a visszahivatkozást el kell fogadni mielőtt megjelenhetne');
@define('DELETE_TRACKBACK', 'Visszahivatkozás törlése');
@define('APPROVE_TRACKBACK', 'Visszahivatkozás elfogadása');
@define('TRACKBACK_APPROVED', 'A visszahivatkozást sikeresen elfogadtuk: #%s');
@define('TRACKBACK_DELETED', 'A visszahivatkozást sikeresen töröltük: #%s');
@define('COMMENT_NOTOKENMATCH', 'A moderációs link lejárt, vagy a #%s számú hozzászólás már elfogadott/törölt');
@define('TRACKBACK_NOTOKENMATCH', 'A moderációs link lejárt, vagy a #%s számú visszahivatkozás már elfogadott/törölt');
@define('BADTOKEN', 'Érvénytelen moderációs link');
@define('TOP_LEVEL', 'Legfelső szint');
@define('VIEW_COMMENT', 'Hozzászólás megtekintése');
@define('VIEW_ENTRY', 'Bejegyzés megtekintése');
@define('LINK_TO_ENTRY', 'Link a bejegyzéshez');
@define('LINK_TO_REMOTE_ENTRY', 'Link a távoli bejegyzéshez');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'URL létezésének ellenőrzése: %s...');
@define('PINGBACK_SENT', 'Az URL létezés ellenőrzése sikeres');
@define('PINGBACK_FAILED', 'Az URL létezés ellenőrzése sikertelen: %s');
@define('PINGBACK_NOT_FOUND', 'Nem található hivatkozás az URL létezés ellenőrzéséhez.');
@define('TRACKBACK_SENDING', 'Visszahivatkozás küldése ide: %s...');
@define('TRACKBACK_SENT', 'A visszahivatkozás sikeres');
@define('TRACKBACK_FAILED', 'A visszahivatkozás nem sikerült: %s');
@define('TRACKBACK_NOT_FOUND', 'A visszahivatkozás URL nem található.');
@define('TRACKBACK_URI_MISMATCH', 'Az automatikusan felismert visszahivatkozási URL nem egyezik meg a cél URL-el.');
@define('TRACKBACK_CHECKING', '<u>%s</u> ellenőrzése lehetséges visszshivatkozásokra ...');
@define('TRACKBACK_NO_DATA', 'Nem található adat');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Nem sikerült visszahivatkozást küldeni: nem sikerült a csatlakozás ide: %s ezen a porton: %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nÉrtesítést kértél új hozzászólások érkezéséről a következő bejegyzéshez: \"%s\" (<%s>). A feliratkozás elfogadásához (\"Double Opt In\") kattints erre a linkre:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nÚj hozzászólást küldtél ehhez: \"%s\". A hozzászólásod ez volt:\n\n%s\n\nA blog tulajdonosa engedélyezte az email-es ellenőrzést, így a következő linkre kell kattintanod hogy azonosítsd a hozzászólásodat:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nÚj hozzászólást küldtél ehhez: \"%s\". A hozzászólásod ez volt:\n\n%s\n\nA blog tulajdonosa engedélyezte az egyszeri email-es ellenőrzést, így a következő linkre kell kattintanod hogy azonosítsd a hozzászólásodat:\n<%s>\n\nMiután megtetted ezt, küldhetsz hozzászólásokat a felhasználóneveddel és email címeddel anélkül hogy újabb azonosító emailt kapnál.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Új hozzászólás érkezett az alábbi (feliratkozott) bejegyzéshez "%s"');
@define('SUBSCRIPTION_MAIL', "Szia %s!\n\nÚj hozzászólás érkezett a \"%s\" bejegyzéshez, az alábbi címmel: \"%s\"\nAz új hozzászólás szerzője: %s\n\nA bejegyzést itt találod: %s\n\nA leiratkozáshoz kattints az alábbi linkre: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hello %s,\n\nÚj visszahivatkozás került az általad megfigyelt bejegyzéshez, a \"%s\" blog-ban, a következő című bejegyzéshez \"%s\"\nA felirat neve: %s\n\nEz itt található: %s\n\nA figyelést törölheted ide kattintva: %s\n");
@define('SIGNATURE', "\n-- \n%s a Serendipity motort használja.\nEz a legjobb blog, te is használhatod.\nItt megtudod, hogyan: <https://s9y.org>.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Új hozzászólás érkezett a "%s" blog-ban ehhez a bejegyzéshez: "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Új hivatkozás történt másik oldalról erre a blog bejegyzésre: "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'A következő opciók érhetők el:');
@define('NEW_TRACKBACK_TO', 'Új visszahivatkozás készült ehhez:');
@define('NEW_COMMENT_TO', 'Az alábbi bejegyzéshez új hozzászólás érkezett:');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nem találtam semmit (%s)' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'A keresésre (%s) %s találat érkezett:');
@define('SEARCH_TOO_SHORT', 'A keresési kritériumnak 3 karakternél többnek kell lennie. A *-al a szavak végén rövidítheted őket, mint: s9y* ahhoz hogy a kereső rövidebb szavakat használjon.');
@define('SEARCH_ERROR', 'A kereső funkció nem működik megfelelően. Jelezd a blog adminisztrátorának: Ez az adatbázis indexek hiánya miatt lehet. MySQL esetében az adatbázis felhasználónak kell ezt futtatnia a megfelelő jogosultságokkal: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Az adatbázis a következő hibát adta: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Nem töltötted ki a hozzászólás rovatot, %spróbáld meg%s újra');
@define('COMMENT_NOT_ADDED', 'A hozzászólást nem tudtuk felvenni, mert vagy érvénytelen adatot adtál meg, vagy ez le van tiltva, vagy a spamszűrő kiszűrte az üzenetet.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Hozzászólások innen');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'A hozzászólásod megerősítése sikeresen megtörtént.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'A hozzászólásod jóváhagyása nem sikerült. Kérlek ellenőrizd az erre használt linket. Ha ezt régebben kaptad mint 3 hét, kérned kell egy újat.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'A hozzászólásokról szóló értesítésekre való feliratkozásodat sikeresen megerősítetted.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'A beállítás szintaktikája hibás erre az opcióra: "%s". A következő típusúnak kell lennie: "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Mutasd a kategórialistát.');
@define('CATEGORIES_PARENT_BASE', 'Csak ezen kategóriák mutatása ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Választhatsz szülő kategóriát, így csak az alá tartozó gyermekkategóriák látszódnak.');
@define('CATEGORIES_HIDE_PARALLEL', 'A kategória fába nem tartozó kategóriák elrejtése');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Ha nem szeretnéd hogy azok a kategóriák is megjelenjenek, amelyek más kategóriafához tartoznak, engedélyezheted. Ennek csak akkor van jelentősége, ha a "multi-blog"-al együtt használod, a "Kategóriák tulajdonságai/sablonjai" modulban.');
@define('CATEGORIES_HIDE_PARENT', 'A kijelölt szülő kategória eltüntetése');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Ha a kategóriák listáját egy bizonyos kategóriára szűkíted, akkor a szülő kategória lista azzal a szülő kategóriával fog kezdődni. Ha ezt nem engedélyezed, akkor a szülő kategória neve nem fog megjelenni.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Smarty-sablonok engedélyezése?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Ha ezt engedélyezed, a modul Smarty-sablont használ a kategórialista megjelenítéséhez. Így a kinézetet a "plugin_categories.tpl" sablonban is módosíthatod. Ez befolyásolja a teljesítményt, így ha nincs szükséged erre ne engedélyezd.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Mutassuk a kategóriákba tartozó bejegyzések számát?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'A látogatók megjeleníthetnek több kategóriát egyszerre?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Ha ezt engedélyezed, akkor a kategória margónál, minden kategória mellett lesz egy jelölőnégyzet. A látogatók így választhatják ki azokat a kategóriákat, amelyekbe tartozó bejegyzéseket szeretnék látni.');
@define('CATEGORIES_TO_FETCH', 'Letöltendő kategóriák');
@define('CATEGORIES_TO_FETCH_DESC', 'Melyik szerzőtől töltsük le a kategóriákat?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Szerzők listájának mutatása');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Mutassuk a szerzőkhöz tartozó bejegyzések számát a szerző neve mellett?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Ha ezt engedélyezed, akkor a szerző által létrehozott bejegyzések száma, a neve mellett jelenik meg zárójelben.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Csak a a legalább X bejegyzéssel rendelkező szerzők mutatása');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Integráció - Egyesülés');
@define('SHOWS_RSS_BLAHBLAH', 'Az RSS feliratkozás linkek mutatása');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s hírcsatorna');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 infó');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 infó');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 info');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 hozzászólások');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 infó');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Megjelenített név a "feed"-hez');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Add meg az egyedi nevet a feed-ekhez (alapértelmezetten "feed")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Megjelenített név a "hozzászólás" feed-hez');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Add meg az egyedi nevet a "hozzászólás" feed-ekhez');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner azonosító');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'A hírcsatorna azonosítója, amelyet publikálni szeretnél');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner kép');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'A kép neve amit meg szeretnél jeleníteni (hagyd üresen a számlálóhoz), a feedburner.com oldalról, pl.: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner cím');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Cím (ha van) amit a kép mellett jelenítünk meg');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner kép felirat');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Szöveg (ha van) amit a kép fölé állva jelenítünk meg');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Az archívum hivatkozás elrejtése, ha nincs abban az időszakban bejegyzés (a bejegyzések számolása szükséges)');
@define('ARCHIVE_COUNT', 'A listában lévő elemek száma');
@define('ARCHIVE_COUNT_DESC', 'A megjelenítendő hónapok, hetek, napok száma');
@define('ARCHIVE_FREQUENCY', 'Naptári bejegyzés sűrűsége');
@define('ARCHIVE_FREQUENCY_DESC', 'A bejegyzések közti naptári intervallum');
@define('BROWSE_ARCHIVES', 'Havi archívum tallózása');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'A "Serendipity" felirat szövegként mutatása');
@define('POWERED_BY_SHOW_TEXT_DESC', 'A "Serendipity Weblog" feliratot szövegként mutatja');
@define('POWERED_BY_SHOW_IMAGE', 'A "Serendipity" felirat megjelenítése logo-val');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Megjeleníti a Serendipity logo-t');
@define('ADVERTISES_BLAHBLAH', 'Reklámozza a blog-od eredetét');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Https használata bejelentkezéshez');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'A bejelentkezési hivatkozás https címre fog mutatni. A böngészőnek támogatnia kell ezt!');
@define('SUPERUSER', 'Blog adminisztráció');
@define('SUPERUSER_OPEN_ADMIN', 'Adminisztráció megnyitása');
@define('SUPERUSER_OPEN_LOGIN', 'Bejelentkező ablak megnyitása');
@define('ALLOWS_YOU_BLAHBLAH', 'A margón biztosít hivatkozást a blog adminisztrálásához');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Naptár');
@define('CALENDAR_BOW_DESC', 'A hét azon napja, amely a kezdőnapnak számít. Alapértelmezés: Hétfő');
@define('QUICKJUMP_CALENDAR', 'Gyors naptárra ugrás');
@define('CALENDAR_BEGINNING_OF_WEEK', 'A hét első napja');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Modul API hook (kampó) engedélyezése');
@define('CALENDAR_EXTEVENT_DESC', 'Ha ezt engedélyezed, akkor a modulok megjeleníthetik a naptárban a saját eseményeiket. Akkor engedélyezd, ha van olyan modulod, amelyiknek szüksége van erre, különben csak rontja a teljesítményt.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Bejegyzés keresése');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Elhelyez egy HTML-töredéket a margóra');
@define('THE_NUGGET', 'A HTML-töredék!');
@define('BACKEND_TITLE', 'További információ a modul beállításainál');
@define('BACKEND_TITLE_FOR_NUGGET', 'Itt saját szöveget adhatsz meg, ami megjelenik a modul beállító képernyőn a HTML Nugget modulnál a leírással együtt. Ha több HTML Nugget létezik cím nélkül, ez segíthet őket megkülönböztetni.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'A "Top Exits/Ide hivatkozók"-eket linkként jelenítsem meg?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"nem": Az "Kilépők" és a "Hivatkozók" sima szövegként jelennek meg elkerülve a "google spam"-et. "igen": Az "kilépők" és a "Hivatkozók" linkként jelennek meg. "alapértelmezett": A globális beállítást használja (javasolt).');
@define('HAVE_TO_BE_LOGGED_ON', 'Az oldal megtekintéséhez előbb be kell jelentkezned');
@define('WELCOME_TO_ADMIN', 'Üdvözlöm a Serendipity adminisztrátori felületén.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Nagy kép');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Rövid megjegyzés');
@define('MEDIA_PROPERTY_COMMENT2', 'Hosszú megjegyzés');
@define('DELETE_SELECTED_ENTRIES', 'Kijelölt bejegyzések törlése');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Cím');
@define('SERENDIPITY_NOT_INSTALLED', 'A Serendipity még nincs telepítve. Kattints <a href="%s">ide</a> a telepítéshez.');
@define('COMMENT_ADDED_CLICK', 'Kattints %side a visszatéréshez%s, vagy %side az ablak bezárásához%s.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kattints %side%s a hozzászólásokhoz, vagy %side%s ezen ablak bezárásához.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Hozzárndelt dátum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Az új könyvtár URL-jét ennyi bejegyzésben módosítottuk: %s.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'Nem MySQL adatbázis esetében nem lehetséges az összes bejegyzésben szereplő régi könyvtár URL-t lecserélni az újra. Ezt kézzel kell megtenned. Ha ezt nem szeretnéd, visszamozgathatod az eredeti könyvtárat oda ahol volt.');
@define('TRACKBACK_SIZE', 'A cél URL meghaladta a maximális fájlméretet: %s bájt.');
@define('CLICK_FILE_TO_INSERT', 'Kattints a beillesztendő fájlra:');
@define('SELECT_FILE', 'Válassz ki fájlt a beillesztéshez');
@define('MANAGE_IMAGES', 'Képek kezelése');
@define('WORD_NEW', 'Új');
@define('WORD_OR', 'Vagy');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: External Services');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Felület: Képességek');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Felület: Teljes modulok');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Felület: Nézetek');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Felület: Bejegyzéshez kapcsolódó');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Háttér: Szerkesztő');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Háttér: Felhasználókezelés');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Háttér: Meta információk');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Háttér: Sablonok');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Háttér: Képességek');
@define('PLUGIN_GROUP_IMAGES', 'Képek');
@define('PLUGIN_GROUP_ANTISPAM', 'Spamszűrő');
@define('PLUGIN_GROUP_MARKUP', 'Kiemelés');
@define('PLUGIN_GROUP_STATISTICS', 'Statisztika');
@define('IMPORT_WELCOME', 'Üdvözlöm a Serendipity importáló eszközében');
@define('USER_SELF_INFO', 'Bejelentkezve mint %s (%s)');
@define('IMPORT_WHAT_CAN', 'Itt más blog alkalmazás bejegyzéseit importálhatja');
@define('IMPORT_SELECT', 'Válassza ki, hogy melyik blog szoftverből szeretne importálni');
@define('MANAGE_STYLES', 'Stílusok kezelése');
@define('SELECT_A_PLUGIN_TO_ADD', 'Válaszd ki a telepítendő modult');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Lentebb található a telepített modulok listája');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Azonnali megszakítás');
@define('DELETE_SELECTED_COMMENTS', 'Kijelölt hozzászólások törlése');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Média objektum keresése');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Hiba: a régi fájlnév nem létezik!');
@define('ERROR_SOMETHING', 'Hiba: valami nem stimmel.');
@define('DIRECT_LINK', 'Közvetlen link ehhez a bejegyzéshez.');
@define('SELECT_TEMPLATE', 'Válaszd ki a sablont, amit a blog-odhoz használni szeretnél');
@define('DATABASE_ERROR', 'serendipity hiba: nem tudok kapcsolódni az adatbázishoz - kilépek.');
@define('LIMIT_TO_NUMBER', 'Hány elemet mutassunk?');
@define('DIRECTORIES_AVAILABLE', 'A létező alkönyvtárak listájában, egy könyvtárra kattintva új könyvtárakat hozhatsz létre abban a struktúrában.');
@define('CATEGORY_INDEX', 'A bejegyzések számára elérhető kategóriák');
@define('PAGE_BROWSE_PLUGINS', '%s oldal ennyiből: %s, összes modul: %s');
@define('CHARSET_NATIVE', 'Natív (beépített)');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Az XML-RPC API Interfész a Serendipity-hez, többé nincs használatban, mivel vannak biztonsági problémái, és nem sokan használják. Így telepítened kell az XML-RPC modult ahhoz hogy használd az XML-RPC API-t. Az alkalmazásban használandó URL nem változik - telepítés után használható.');
@define('AUTHORS_ALLOW_SELECT', 'A látogatók több szerzőt is megjeleníthetnek egyszerre?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Ha ezt engedélyezed, akkor ebben a margóban, minden szerző mellett lesz egy jelölőnégyzet. A látogatók így választhatják ki azokat a szerzőket, akiknek a bejegyzéseit szeretnék látni.');
@define('PREFERENCE_USE_JS', 'Haladó JavaScript engedélyezése?');
@define('PREFERENCE_USE_JS_DESC', 'Ha ezt engedélyezed, akkor haladó JavaScript-et használunk, például a modul beállításoknál áthelyezheted a modul dobozokat a fogd és vidd módszerrel.');
@define('PREFERENCE_USE_JS_WARNING', '(Az oldal haladó JavaScript-et használ. Amennyiben funkcionális problémáid vannak, tiltsd le ezt a személyes beállításaidnál, vagy a böngésződ JavaScript használatát)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
