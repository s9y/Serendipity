<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) by M�rton P�sz <ful_s@AT@passwd.hu> and Hrotk� G�bor <roti@al.pmmf.hu>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-2');
@define('SQL_CHARSET', 'latin2');
@define('DATE_LOCALES', 'hu_HU.ISO-8859-2, hu_HU.ISO8859-2, hungarian, hu, hu_HU');
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
@define('TYPE', 'T�pus');
@define('PREVIEW', 'El�n�zet');
@define('DATE', 'D�tum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Kin�zet');
@define('LOGIN', 'Bel�p�s');
@define('LOGOUT', 'Kil�p�s');
@define('LOGGEDOUT', 'Kil�pett.');
@define('CREATE', 'L�trehoz�s');
@define('BACK', 'Vissza');
@define('FORWARD', 'El�re');
@define('ANONYMOUS', 'Ismeretlen');
@define('RECENT', 'Friss...');
@define('OLDER', 'R�gebbi...');
@define('DONE', 'K�sz');
@define('TITLE', 'C�m');
@define('DESCRIPTION', 'Le�r�s');
@define('PLACEMENT', 'Elhelyez�s');
@define('DELETE', 'T�r�l');
@define('SAVE', 'Ment');
@define('UP', 'FEL');
@define('DOWN', 'LE');
@define('PREVIOUS', 'El�z�');
@define('NEXT', 'K�vetkez�');
@define('ENTRIES', 'bejegyz�sek');
@define('CATEGORIES', 'Kateg�ri�k');
@define('NAME', 'N�v');
@define('EMAIL', 'email');
@define('HOMEPAGE', 'Honlap');
@define('COMMENT', 'Megjegyz�s');
@define('VIEW', 'Megtekint');
@define('HIDE', 'Elrejt');
@define('WEEK', 'H�t');
@define('WEEKS', 'Hetek');
@define('MONTHS', 'H�napok');
@define('DAYS', 'Napok');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'A m�velet siker');
@define('COMMENTS', 'Hozz�sz�l�sok');
@define('ADD_COMMENT', 'Hozz�sz�l�s hozz�f�z�se');
@define('NO_COMMENTS', 'Nincs hozz�sz�l�s');
@define('POSTED_BY', 'Bek�ldte');
@define('ON', ' az al�bbi id�pontban ');
@define('NO_CATEGORY', 'Nincsenek kateg�ri�k');
@define('CATEGORY', 'Kateg�ria');
@define('EDIT', 'Szerkeszt�s');
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
@define('ARCHIVES', 'Arch�vum');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Gyorskeres�s');
@define('TRACKBACKS', 'Visszahivatkoz�sok');
@define('TRACKBACK', 'Visszahivatkoz�s');
@define('NO_TRACKBACKS', 'Nincsenek visszahivatkoz�sok');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Kivonat');
@define('TRACKED', 'Nyomon-k�vetett');
@define('USER', 'Felhaszn�l�');
@define('USERNAME', 'Felhaszn�l�i n�v');
@define('PASSWORD', 'Jelsz�');
@define('HIDDEN', 'rejtett');
@define('IMAGE', 'K�p');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Szerz�');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verzi�');
@define('INSTALL', 'Telep�t�s');
@define('REPLY', 'V�lasz');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Hiba');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'K�nyszer�t (force)');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Adminisztr�ci�');
@define('ADMIN_FRONTPAGE', 'Kezd�lap');
@define('QUOTE', 'Id�z');
@define('NONE', 'egyik sem');
@define('GROUP', 'Csoport');
@define('AUTHORS', 'Szerz�k');
@define('UPGRADE', 'Friss�t�s');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Az �sszes szerz�');
@define('PREVIOUS_PAGE', 'el�z� oldal');
@define('NEXT_PAGE', 'k�vetkez� oldal');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Minden kateg�ria');
@define('LAST_UPDATED', 'Utols� Friss�t�s');
@define('IP_ADDRESS', 'IP c�m');
@define('CHARSET', 'Karakterk�dol�s');
@define('REFERER', 'Hivatkoz�');
@define('APPROVE', 'Elfogad');
@define('NOT_FOUND', 'Nincs tal�lat');
@define('WRITABLE', '�rhat�');
@define('NOT_WRITABLE', 'Nem �rhat�');
@define('WELCOME_BACK', '�dv ism�t,');
@define('USE_DEFAULT', 'Alap�rtelmezett');
@define('SORT_BY', 'Rendez�s a k�vetkez� szerint');
@define('SORT_ORDER', 'Sorrend');
@define('SORT_ORDER_ASC', 'N�vekv�');
@define('SORT_ORDER_DESC', 'Cs�kken�');
@define('FILTERS', 'Sz�r�k');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Minden kibont�sa');
@define('TOGGLE_OPTION', 'Be�ll�t�sok');
@define('IN_REPLY_TO', 'V�lasz a k�vetkez�re');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'K�nyvt�r');
@define('BACK_TO_BLOG', 'Vissza a Weblog-hoz');
@define('HTML_NUGGET', 'HTML-t�red�k');
@define('TITLE_FOR_NUGGET', 'A t�red�k c�me');
@define('COMMENT_ADDED', 'A hozz�sz�l�sodat sikeresen r�gz�tettem. ');
@define('ENTRIES_FOR', 'Bejegyz�sek innen: %s');
@define('NO_ENTRIES_TO_PRINT', 'Nincs mit megjelen�teni');
@define('COMMENT_DELETE_CONFIRM', 'Biztosan t�rl�d a k�vetkez� hozz�sz�l�st: #%d, ett�l a k�ld�t�l: %s ?');
@define('DELETE_SURE', 'Biztos, hogy v�glegesen kit�rl�d a #%s-t?');
@define('MEDIA_FULLSIZE', 'Teljes m�ret');
@define('SIDEBAR_PLUGIN', 'Marg� modul');
@define('EVENT_PLUGIN', 'Esem�ny modul');
@define('PLUGIN_ITEM_DISPLAY', 'Hol legyen l�that� az elem?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'R�szletes oldal');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', '�ttekint� oldal');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Mindkett�');
@define('DIRECTORY_WRITE_ERROR', 'A %s sz�t nem tudom felvenni a sz�t�rba. K�rlek ellen�rizd a hozz�f�r�si jogokat.');
@define('FILE_WRITE_ERROR', 'Nem tudom �rni a %s f�jlt.');
@define('INCLUDE_ERROR', 'serendipity hiba: nem megy az "include %s" - kil�pek.');
@define('DO_MARKUP', 'Forr�s transzform�l�s elv�gz�se.');
@define('GENERAL_PLUGIN_DATEFORMAT', 'D�tumform�z�s');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Az aktu�lis bejegyz�s d�tuma, a k�vetkez� form�tumot haszn�lva: PHP strftime() v�ltoz�. (Alap�rtelmezett: "%s")');
@define('APPLY_MARKUP_TO', 'Jel�l�s haszn�lata erre: %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML gomb');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Az XML csatorn�kra mutat� hivatkoz�sokat ez a k�p jel�li. Hagyd �resen az alap�rtelmezetthez, a letilt�shoz �rd be: \'none\'.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'F�jlok t�rl�se %s...');
@define('SETTINGS_SAVED_AT', 'Az �j be�ll�t�sokat elmentett�k ekkor: %s');
@define('INVERT_SELECTIONS', 'Kijel�l�s megford�t�sa');

@define('PERSONAL_SETTINGS', 'Szem�lyes be�ll�t�sok');
@define('DO_MARKUP_DESCRIPTION', 'Sz�vegjel�l�sek transzform�l�sa (vigyorg� fejek, r�vid�t�sre haszn�lt jel�l�sek a k�vetkez� m�don: *, /, _, ...). Ezt tiltva, a sz�vegben nem lehet semmilyen HTML k�d.');
@define('BASE_DIRECTORY', 'Alap k�nyvt�r');
@define('PERM_READ', 'Olvas�si jogosults�g');
@define('PERM_WRITE', '�r�si jogosults�g');
@define('PERM_DENIED', 'Hozz�f�r�s megtagadva.');
@define('CURRENT_AUTHOR', 'Jelenlegi szerz�');
@define('PLUGIN_ACTIVE', 'Akt�v');
@define('PLUGIN_INACTIVE', 'Inakt�v');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'K�nyvjelz� hivatkoz�s');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Add a k�nyvjelz�kh�z ezt a hivatkoz�st, �gy k�nnyen el�red a blog-odat amikor egy m�sik oldalon vagy, amir�l �ppen �rni szeretn�l.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity Telep�t�s');
@define('WELCOME_TO_INSTALLATION', '�dv�z�llek a Serendipity telep�t�j�ben');
@define('FIRST_WE_TAKE_A_LOOK', 'El�sz�r meg kell vizsg�ljuk a jelenlegi be�ll�t�sokat ahhoz hogy felt�rk�pezz�k az esetleges kompatibilit�si probl�m�kat');
@define('ERRORS_ARE_DISPLAYED_IN', 'A hib�kat �gy jel�lj�k: %s, a javaslatokat �gy: %s a sikert pedig �gy: %s');
@define('RED', 'priros');
@define('YELLOW', 's�rga');
@define('GREEN', 'z�ld');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s telep�t�si ellen�rz�s jelent�s');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP telep�t�s');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Oper�ci�s rendszer');
@define('WEBSERVER_SAPI', 'Web kiszolg�l� SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini konfigur�ci�');
@define('RECOMMENDED', 'Javasolt');
@define('ACTUAL', 'Aktu�lis');
@define('PERMISSIONS', 'Jogosults�gok');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'A jogosults�gok a k�vetkez� paranccsal �ll�that�k be: `<em>%s</em>` a hib�s k�nyvt�ron, vagy FTP programmal is be�ll�that�k');
@define('PROBLEM_DIAGNOSTIC', 'Az ellen�rz�sek hib�ja miatt nem folytathatod a telep�t�st, addig am�g ezeket nem jav�tod');
@define('SELECT_INSTALLATION_TYPE', 'V�laszd ki a telep�t�s t�pus�t');
@define('RECHECK_INSTALLATION', 'Telep�t�s �jraellen�rz�se');
@define('SIMPLE_INSTALLATION', 'Egyszer� telep�t�s');
@define('EXPERT_INSTALLATION', 'Halad� telep�t�s');
@define('COMPLETE_INSTALLATION', 'Telep�t�s befejez�se');
@define('WONT_INSTALL_DB_AGAIN', 'nem sz�ks�ges az adatb�zis �jratelep�t�se');
@define('THEY_DO', 'l�teznek');
@define('THEY_DONT', 'nem l�teznek');
@define('CHECK_DATABASE_EXISTS', 'Adatb�zis, �s adatb�zis t�bl�k l�tez�snek ellen�rz�se');
@define('CREATE_DATABASE', 'L�trehozom az alap�rtelmezett adatb�zis t�bl�kat...');
@define('ATTEMPT_WRITE_FILE', 'Megk�s�rlek �rni a %s f�jlba...');
@define('CREATING_PRIMARY_AUTHOR', 'Els�dleges szerz� l�trehoz�sa \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Alap�rtelmezett sablonok be�ll�t�sa');
@define('INSTALLING_DEFAULT_PLUGINS', 'Alap�rtelmezett modulok telep�t�se');
@define('SERENDIPITY_INSTALLED', 'A Serendipity-t sikeresen telep�tett�k');
@define('VISIT_BLOG_HERE', 'Itt l�togathatod meg a blog-odat');
@define('THANK_YOU_FOR_CHOOSING', 'K�sz�nj�k hogy a Serendipity-t v�lasztottad');
@define('ERROR_DETECTED_IN_INSTALL', 'Hiba l�pett fel a telep�t�s k�zben');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Egyszer� szerkeszt�');
@define('USERLEVEL_CHIEF_DESC', 'F�szerkeszt�');
@define('USERLEVEL_ADMIN_DESC', 'Adminisztr�tor');
@define('WWW_USER', 'A www-t cser�ld ki arra a felhaszn�l�ra, aki az apache-ot futtatja (pl. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'A %s k�nyvt�r nem l�tezik, �s nem is tudom l�trehozni. K�rlek hozd l�tre Te');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; fut <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nem tudom futtatni a %s bin�rist');
@define('FILE_CREATE_YOURSELF', 'K�rlek hozd l�tre a f�jlt, vagy ellen�rizd a hozz�f�r�si jogokat');
@define('COPY_CODE_BELOW', '<br />* M�sold a lenti k�dot a %s f�jlba (k�nyvt�r: %s):<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Ha k�sz vagy, kattints a b�ng�sz� "Friss�t�s" gombj�ra.');
@define('ERROR_TEMPLATE_FILE', 'Nem tudom megnyitni a sablonf�jlt, k�rlek friss�tsd a serendipity-t!');
@define('HTACCESS_ERROR', 'A helyi webszerver ellen�rz�s�hez, �r�si jogot kell adni a serendipity-nek a ".htaccess" f�jlra. Ez pillanatnyilag nincs �gy. K�rlek az al�bbiak szerint m�dos�tsd a hozz�f�r�si jogosults�gokat: <br />&nbsp;&nbsp;%s<br />majd t�ltsd �jra az aktu�lis oldalt.');
@define('EMPTY_SETTING', 'Nem adt�l meg �rt�ket ehhez: "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'A Serendipity telep�tett verzi�ja %s. �gy t�nik, hogy az al�bbi verzi�ra szeretn�l friss�teni: %s, ha �gy van <a href="%s">kattints ide</a> a folytat�shoz.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Szia, �dv�z�llek a Serendipity friss�t�-�gyn�k�n�l.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Az a feladatom, hogy seg�dkezzek a Serendipity %s friss�t�s�ben.');
@define('SERENDIPITY_UPGRADER_WHY', 'Ez az �zenet az�rt jelent meg, meg nemr�g telep�tetted a Serendipity %s, de az adatb�zis migr�ci�ja m�g nem t�rt�nt meg');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Adatb�zis friss�t�sek(%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', '�gy tal�ltam, hogy az al�bbi .sql f�jlokat le kell futtatni miel�tt folytat�dna a Serendipity norm�l fut�sa');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Verzi�f�gg� feladatok');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nem tal�ltam verzi�f�gg� feladatot');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Elv�gezzem a fenti feladatokat?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nem, ink�bb manu�lisan futtatom azokat');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Igen, mehet');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', '�gy l�tom, nem kell a friss�t�st elv�gezni');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity friss�t�s�nek el�k�sz�t�se k�sz');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'A Serendipity friss�t�s�nek f�zis�t figyelmen k�v�l hagytad, ellen�rizd hogy az adatb�zis megfelel�en van install�lva, �s az id�z�tett feladatok futnak');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'A Serendipity rendszer friss�t�se megt�rt�nt a k�vetkez� verzi�ra: %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Visszat�rhetsz a blog-hoz %side%s kattintva');
@define('ADMIN_ENTRIES', 'Bejegyz�sek');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nem tudok kapcsol�dni az al�bbi MySQL adatb�zishoz: %s.');
@define('COULDNT_SELECT_DB', 'Nem siker�lt a SELECT: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nem tal�lom a felhaszn�l�i inform�ci�kat: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nem tal�lom a kateg�ria inform�ci�kat: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nem tal�lom a bejegyz�s inform�ci�kat: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nem tal�lom a hozz�sz�l�s inform�ci�kat: %s.');
@define('MYSQL_REQUIRED', 'Ezen m�velet v�grehajt�s�hoz sz�ks�g van a MySQL kiterjeszt�sre.');
@define('CREATE_AUTHOR', 'Szerz� l�trehoz�sa \'%s\'.');
@define('CREATE_CATEGORY', 'Kateg�ria l�trehoz�sa \'%s\'.');
@define('MT_DATA_FILE', 'Mozgathat� t�pus� adatf�jl');
@define('INSTALL_DBPORT', 'Adatb�zis port');
@define('INSTALL_DBPORT_DESC', 'Az adatb�zishoz val� kapcsol�d�skor haszn�lt port');
@define('IMPORT_PLEASE_ENTER', 'Add meg a sz�ks�ges adatokat');
@define('IMPORT_NOW', 'Import�l�s!');
@define('IMPORT_STARTING', 'Import�l�s elkezd�se ...');
@define('IMPORT_FAILED', 'Az import nem siker�lt');
@define('IMPORT_DONE', 'Az import sikeres');
@define('IMPORT_WEBLOG_APP', 'Weblog program');
@define('IMPORT_NOTES', 'Megjegyz�s:');
@define('IMPORT_STATUS', 'Import�l�s ut�ni st�tusz');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import�l�sa, PHP5 sz�ks�ges, �s lehet hogy sok mem�ri�t ig�nyel');
@define('RSS_IMPORT_BODYONLY', 'Az �sszes sz�veg ker�lj�n a t�rzsbe, ne legyen k�ls� bejegyz�sekre szedve.');
@define('IMPORT_GENERIC_RSS', '�ltal�nos RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Visszahivatkoz�s k�ld�se a bejegyz�sekben tal�lhat� hivatkoz�sokra.');
@define('RSS_IMPORT_CATEGORY', 'E kateg�ria haszn�lata az olyan import�lt bejegyz�sekhez, amelyek nem tartoznak sehova');
@define('IMPORT_WP_PAGES', 'Csatol�sok �s statikus oldalak let�lt�se mint norm�lis bejegyz�sek?');
@define('DOCUMENT_NOT_FOUND', 'A %s dokumentumot nem tal�lom.');
@define('CONVERT_HTMLENTITIES', 'A HTML bejegyz�sek automatikus konvert�l�sa?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Adminisztr�ci�s K�szlet');
@define('WRONG_USERNAME_OR_PASSWORD', '�gy t�nik, hogy hib�s felhaszn�l�-nevet vagy jelsz�t adt�l meg');
@define('PLEASE_ENTER_CREDENTIALS', 'Add meg az azonos�t�shoz sz�ks�ges adataidat.');
@define('AUTOMATIC_LOGIN', 'Adatok megjegyz�se');
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
@define('MEDIA', 'M�dia');
@define('MEDIA_LIBRARY', 'M�dia k�nyvt�r');
@define('ADD_MEDIA', 'M�dia hozz�ad�sa');
@define('MANAGE_DIRECTORIES', 'K�nyvt�rak kezel�se');
@define('CONFIGURATION', 'Be�ll�t�sok');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Tov�bbi hivatkoz�sok');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity weboldal');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Dokument�ci�');
@define('FURTHER_LINKS_S9Y_BLOG', 'Hivatalos blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'F�rumok');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Ez a bejegyz�s m�g nincs publik�lva.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Helyi dokument�ci�');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Verzi� t�rt�net');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Marg� Modulok');
@define('EVENT_PLUGINS', 'Esem�nyvez�rl� Modulok');
@define('CONFIGURE_PLUGINS', 'Be�p�l� modulok be�ll�t�sa');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'F�gg�s�gi hib�k: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Friss�t�s erre a verzi�ra: %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Kattints ide �j %s telep�t�s�hez');
@define('ALREADY_INSTALLED', 'M�r telep�tett');
@define('PLUGIN_AVAILABLE_COUNT', '�sszesen: %d modul.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Szerkeszt�s');
@define('EDIT_ENTRY', 'Bejegyz�s szerkeszt�se');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'V�zlat');
@define('PUBLISH', 'Publik�l');
@define('CONTENT', 'Tartalom');
@define('ENTRIES_PER_PAGE', 'bejegyz�sek oldalank�nt');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Ragad�s bek�ld�s');
@define('PAGE_BROWSE_ENTRIES', '%s oldal ennyib�l: %s, �sszes bejegyz�s: %s');
@define('FIND_ENTRIES', 'Bejegyz�s keres�se');
@define('RIP_ENTRY', 'Bejegyz�s (#%s) t�r�lve.');
@define('NEW_ENTRY', '�j bejegyz�s');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'A bejegyz�s t�rzse');
@define('EXTENDED_BODY', 'R�szletesebb t�rzs');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'A bejegyz�s piszkozata ment�sre ker�lt.');
@define('IFRAME_PREVIEW', 'A Serendipity a bejegyz�s el�n�zet�t gener�lja ...');
@define('IFRAME_WARNING', 'A b�ng�sz�d nem t�mogatja az iframe-eket. Nyisd meg a serendipity_config.inc.php f�jlt �s �ll�tsd �t a  $serendipity[\'use_iframe\'] v�ltoz�t FALSE-ra.');
@define('DATE_INVALID', 'Vigy�zat: Az �ltalad megadott id�pont helytelen. Haszn�ld az al�bbi form�tumot: ����-HH-NN ��:PP.');
@define('ADVANCED_OPTIONS', 'Halad� Be�ll�t�sok');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Ez a link nem szolg�l tartalom megjelen�t�sre. A visszahivatkoz�shoz haszn�lhat� URL-t tartalmazza ehhez a bejegyz�shez. Ezt haszn�ld a saj�t blogodban az erre a bejegyz�sre val� visszahivatkoz�skor. Az URL m�sol�s�hoz kattints rajta jobb eg�rgombbal, majd v�laszd a "Hivatkoz�s c�m�nek m�sol�sa" funkci�t.');
@define('RESET_DATE', 'D�tum vissza�ll�t�sa');
@define('RESET_DATE_DESC', 'Kattints ide, hogy a d�tumot vissza�ll�tsd a jelenlegi d�tumra');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Felhaszn�l�k kezel�se');
@define('CREATE_NEW_USER', '�j felhaszn�l� l�trehoz�sa');
@define('CREATE_NOT_AUTHORIZED', 'Nem m�dos�thatod a veled azonos szinten l�v� felhaszn�l�kat');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nem hozhatsz l�tre n�lad magasabb szint� felhaszn�l�t');
@define('CREATED_USER', 'A(z) %s felhaszn�l� l�trej�tt');
@define('MODIFIED_USER', 'A %s felhaszn�l� jellemz�i megv�ltoztak');
@define('USER_LEVEL', 'Felhaszn�l�i szint');
@define('WARNING_NO_GROUPS_SELECTED', 'Figyelem: nem jel�lt�l ki egyetlen csoporttags�got sem. �gy nem tudod majd a csoport jogokat szerkeszteni, ez�rt az eredeti csoporttags�gaid nem v�ltoztak.');
@define('DELETE_USER', 'Ki akarod t�r�lni a #%d %s felhaszn�l�t. J�l meggondoltad? Le lesz tiltva az �sszes �ltala �rt hozz�sz�l�s a blog fel�let�n.');
@define('DELETED_USER', 'A #%d %s felhaszn�l� t�r�lve.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Csoportok kezel�se');
@define('DELETED_GROUP', 'A csoport t�r�lve: #%d %s.');
@define('CREATED_GROUP', 'Az �j csoportot l�trehoztuk: %s');
@define('MODIFIED_GROUP', 'A k�vetkez� csoport tulajdons�gait megv�ltoztattuk %s');
@define('CREATE_NEW_GROUP', '�j csoport l�trehoz�sa');
@define('DELETE_GROUP', 'A k�vetkez� csoport t�rl�s�re k�sz�lsz: #%d %s. Biztos vagy benne?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hozz�sz�l�s keres�se');
@define('COMMENTS_FILTER_SHOW', 'Mutat');
@define('COMMENTS_FILTER_ALL', '�sszes');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Elfogadott');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'M�g el nem fogadott');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Biztosan t�rl�d a kijel�lt hozz�sz�l�sokat?');
@define('PAGE_BROWSE_COMMENTS', '%s oldal ennyib�l: %s, �sszesen ennyi bejegyz�s: %s');
@define('COMMENT_IS_DELETED', '(Hozz�sz�l�s t�r�lve)');
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
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'A kateg�ri�t elmentettem');
@define('CATEGORY_ALREADY_EXIST', 'L�tezik m�r kateg�ria a k�vetkez� n�vvel: "%s"');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kateg�ria (#%s) t�r�lve. A kor�bbi cikkeket ide soroltam: #%s.');
@define('CATEGORY_DELETED', 'A #%s kateg�ria t�r�lve.');
@define('INVALID_CATEGORY', 'Nem adt�l meg t�rlend� kateg�ri�t');
@define('EDIT_THIS_CAT', '"%s" szerkeszt�se');
@define('CATEGORY_REMAINING', 'Kateg�ria t�rl�se, �s a hozz� kapcsol�d� bejegyz�sek hozz�rendel�se ehhez a kateg�ri�hoz:');
@define('PARENT_CATEGORY', 'Sz�l� kateg�ria');
@define('CATEGORY_HIDE_SUB', 'Az alkateg�ri�khoz k�ld�tt �zenetek elrejt�se?');
@define('CATEGORY_HIDE_SUB_DESC', 'Alap�rtelmez�sben amikor egy kateg�ri�t b�ng�szel, az alkateg�ri�khoz bek�ld�tt hozz�sz�l�sok is l�tsz�dnak. Ha ezt enged�lyezed, csak az �ppen kijel�lt kateg�ri�hoz �rkezett hozz�sz�l�sok lesznek l�that�ak.');
@define('CREATE_NEW_CAT', '�j Kateg�ria L�trehoz�sa');
@define('ALREADY_SUBCATEGORY', 'A(z) %s m�r alkateg�ri�ja ennek: %s.');
@define('NO_CATEGORIES', 'Nincsenek kateg�ri�k');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Adat import�l�sa');
@define('EXPORT_ENTRIES', 'Bejegyz�sek export�l�sa');
@define('EXPORT_FEED', 'Teljes RSS h�rcsatorna exportja');
@define('CREATE_THUMBS', 'El�n�zeti k�pek �jragener�l�sa');
@define('WARNING_THIS_BLAHBLAH', "FIGYELEM:\\nEz sok�ig eltarthat, ha csak kev�s k�pnek van el�n�zeti k�pe.");
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
@define('TEMPLATE_SET', 'Az alap�rtelmezett sablonod be�ll�t�sra ker�lt: \'%s\'');
@define('WARNING_TEMPLATE_DEPRECATED', 'Figyelem: A jelenlegi sablonod elavult sablon met�dust haszn�l, aj�nlott a friss�t�se');
@define('STYLE_OPTIONS_NONE', 'Ennek a t�m�nak/st�lusnak nincsenek speci�lis opci�i. A sablon opci�ihoz olvasd el a dokument�ci�t a k�vetkez� oldalon www.s9y.org a "Configuration of Theme options" r�szn�l.');
@define('STYLE_OPTIONS', 'T�ma/st�lus opci�k');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Egyedi adminisztr�ci�s fel�let �rhet� el');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Sablonnak kiv�laszt');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Ellen�rz�s &amp; ment�s');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'A bejel�lt be�p�l� modulok elt�vol�t�sa');
@define('SAVE_CHANGES_TO_LAYOUT', 'V�ltoz�sok ment�se az oldal szerkezet�be (layout)');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Szinkroniz�lom az adatb�zist a k�pek k�nyvt�r�val.');
@define('SYNC_DONE', 'K�sz (%s k�pet szinkroniz�ltam).');
@define('RESIZE_BLAHBLAH', '<b>�tm�retez�s %s</b>');
@define('ORIGINAL_SIZE', 'Eredeti m�ret: <i>%sx%s</i> k�ppont');
@define('RESIZING', '�tm�retez�s');
@define('RESIZE_DONE', 'K�sz (%s k�p �tm�retezve).');
@define('KEEP_PROPORTIONS', 'Ar�nyok meg�rz�se');
@define('REALLY_SCALE_IMAGE', 'Biztos, hogy �tm�retezed? Nem lehet visszaford�tani a folyamatot!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Itt m�dos�thatja a k�p m�ret�t. Ha ar�nyosan szeretn� a k�pet �tm�retezni, el�g az egyik dobozban m�dos�tani a sz�mot,majd megnyomni a TAB billenty�t -- az �j m�ret automatikusan ker�l meghat�roz�sra, �gy a k�p nem lesz ar�nytalan</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', '�j m�ret: ');
@define('SCALING_IMAGE', '�tm�retezem %s-t %s x %s k�ppontra');
@define('MEDIA_DIRECTORY_MOVED', 'A k�nyvt�r �s a f�jlok sikeresen �tker�ltek ide: %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'A k�nyvt�rt �s a f�jlokat nem siker�lt �tmozgatni ide: %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'A k�vetkez� k�nyvt�rat l�trehoztuk: <strong>%s</strong>.');
@define('PARENT_DIRECTORY', 'Sz�l� k�nyvt�r');
@define('CONFIRM_DELETE_DIRECTORY', 'Biztosan t�rl�d ennek a k�nyvt�rnak minden tartalm�t: %s?');
@define('ERROR_NO_DIRECTORY', 'Hiba: A k�nyvt�r nem l�tezik: %s');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'A nem �res k�nyvt�rat nem tudom t�r�lni. Ellen�rizd a "k�nyszer�tett t�rl�s" kapcsol�t ha ezeket is t�r�lni szeretn�d, majd ism�teld meg a m�veletet. A l�tez� f�jlok a k�vetkez�k:');
@define('DIRECTORY_DELETE_FAILED', 'Ennek a k�nyvt�rnak a t�rl�se nem siker�lt: %s. Ellen�rizd a jogosults�gokat, vagy a fenti �zenetet.');
@define('DIRECTORY_DELETE_SUCCESS', 'A k�nyvt�rt sikeresen t�r�lt�k: %s.');
@define('CHECKING_DIRECTORY', 'F�jlok ellen�rz�se a k�nyvt�rban %s');
@define('DELETE_DIRECTORY', 'K�nyvt�r t�rl�se');
@define('DELETE_DIRECTORY_DESC', 'T�r�lni k�sz�l egy k�nyvt�rat, amelyben m�dia f�jlok vannak. Lehets�ges hogy ezekre hivatkozik bejegyz�sekb�l is.');
@define('FORCE_DELETE', 'Az �SSZES f�jl t�rl�se a k�nyvt�rb�l, azokat is amelyeket a Serendipity nem ismer');
@define('CREATE_DIRECTORY', 'K�nyvt�r l�trehoz�sa');
@define('CREATE_NEW_DIRECTORY', '�j k�nyvt�r l�trehoz�sa');
@define('CREATE_DIRECTORY_DESC', '�j k�nyvt�rat hozhat l�tre a m�dia f�jlok sz�m�ra. �rj be egy nevet, �s ha kell v�lassz sz�l�k�nyvt�rat.');
@define('ABOUT_TO_DELETE_FILE', 'A k�vetkez� f�jl t�rl�s�re k�sz�lsz: <b>%s</b><br />Ha van olyan bejegyz�s ahol ezt haszn�lod, akkor �gy t�r�tt hivatkoz�sok vagy hi�nyz� k�pek lesznek<br />Biztosan folytatod?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Hiba: A f�jl m�r l�tezik a g�peden!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nem tal�lom a <b>%s</b> f�jlt, lehet, hogy m�r t�r�lve lett?');
@define('ERROR_FILE_FORBIDDEN', 'Nincs jogosults�god akt�v bejegyz�s felvitel�re');
@define('REMOTE_FILE_NOT_FOUND', 'Nem tal�ltam ilyen f�jlt a t�voli szerveren, biztos, hogy a: <b>%s</b> URL helyes?');
@define('FILE_FETCHED', '%s leszedve, mint %s');
@define('FILE_UPLOADED', 'A %s f�jlt sikeresen felt�ltettem %s n�ven');
@define('DELETE_FILE_FAIL', 'Nem siker�lt a f�jl t�rl�se: <b>%s</b>');
@define('DELETE_FILE', 'A k�vetkez� f�jlt t�r�ltem: <b>%s</b>');
@define('FOUND_FILE', 'M�dos�tott/�j f�jlt tal�ltam: %s.');
@define('FILENAME_REASSIGNED', 'Az automatikusan l�trehozott �j f�jln�v: %s');
@define('ERROR_FILE_EXISTS', 'Hiba: az �j f�jln�v m�r l�tezik, v�lassz m�sikat!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'k�zvetlen�l hivatkozva');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Az al�bbi f�jl �j neve: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'K�p hozz�ad�sa...');
@define('THUMB_CREATED_DONE', 'El�n�zeti k�p l�trehozva.<br/>K�sz.');
@define('THUMBNAIL_USING_OWN', 'Saj�t mag�t (%s) haszn�lom el�n�zeti k�pnek, mert el�g kicsi az eredeti k�p.');
@define('THUMBNAIL_FAILED_COPY', 'Saj�t mag�t (%s) szerettem volna el�n�zeti k�pnek haszn�lni, de nem siker�lt odam�solni!');
@define('DELETE_THUMBNAIL', 'A k�vetkez� el�n�zeti k�p t�rl�se: <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ismeretlen hiba t�rt�nt, a f�jl nincs felt�ltve. Tal�n a f�jl m�rete nagyobb mint a szerveren be�ll�tott megengedett maximum �rt�k. Ezt a be�ll�t�st a szerver �zemeltet�je tudja megv�ltoztatni.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Hiba: Nem t�lthetsz fel nagyobb m�ret� f�jlt mint %s b�jt!');
@define('MEDIA_UPLOAD_DIMERROR', 'Hiba: Nem t�lthetsz fel nagyobb m�ret� k�pet mint %s x %s pixel!');
@define('HOTLINK_DONE', 'F�jl k�zvetlen hivatkoz�s l�trehozva.<br />K�sz.');
@define('DELETE_HOTLINK_FILE', 'Ezt a k�zvetlen hivatkoz�st haszn�l� f�jlt t�r�lt�k <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nem siker�lt futtatni a k�vetkez�t: "%s", hiba: %s, visszat�r�si �rt�k: %d');
@define('SKIPPING_FILE_EXTENSION', 'F�jl kihagy�sa: hi�nyz� kiterjeszt�s enn�l: %s.');
@define('SKIPPING_FILE_UNREADABLE', 'F�jl kihagy�sa: %s nem  olvashat�.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Jogosults�g �r�k�ltet�se az almapp�kra is');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Kis el�n�zeti k�peket szeretn�k a bejegyz�sben haszn�lni.');
@define('I_WANT_BIG_IMAGE', 'Nagyobb k�peket szeretn�k a bejegyz�sben haszn�lni.');
@define('I_WANT_NO_LINK', 'K�pk�nt szeretn�m megjelen�teni');
@define('I_WANT_IT_TO_LINK', 'Az al�bbi hivatkoz�sk�nt szeretn�m megjelen�teni:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'K�pm�ret');
@define('IMAGE_ALIGNMENT', 'K�p elrendez�s/elhelyez�s');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'K�p besz�r�sa');
@define('MEDIA_TARGET', 'A hivatkoz�s c�lja (target)');
@define('MEDIA_TARGET_JS', 'Felbukkan� ablak (JavaScript-el, igaz�tott m�ret)');
@define('MEDIA_ENTRY', '�n�ll� bejegyz�s');
@define('MEDIA_TARGET_BLANK', 'Felbukkan� ablak (target=_blank -el)');
@define('YOU_CHOSE', 'Ezt v�lasztottad: %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'A k�p 90 fokos elforgat�sa az �ramutat� j�r�s�val ellent�tes ir�nyba');
@define('IMAGE_ROTATE_RIGHT', 'A k�p 90 fokos elforgat�sa az �ramutat� j�r�s�val megegyez� ir�nyba');
@define('MEDIA_RENAME', 'F�jl �tnevez�se');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Eredeti');
@define('SORT_ORDER_NAME', 'F�jln�v');
@define('SORT_ORDER_EXTENSION', 'Kiterjeszt�s');
@define('SORT_ORDER_SIZE', 'F�jlm�ret');
@define('SORT_ORDER_WIDTH', 'K�psz�less�g');
@define('SORT_ORDER_HEIGHT', 'K�pmagass�g');
@define('SORT_ORDER_DATE', 'Felt�lt�s d�tuma');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>F�jl hozz�ad�sa a m�dia t�rol�hoz:</b><p>Itt t�lthetsz fel m�diaf�jlokat, vagy megmondhatod hogy honnan t�ltsem le �ket! Ha nincs meg egy bizonyos k�p, <a href="https://images.google.com/" target="_blank">keress r� a google-t haszn�lva</a> az elk�pzel�sednek megfelel�en. Az eredm�nyek gyakran hasznosak �s viccesek :) De vigy�zz, a legt�bb k�p szerz�i jogv�delem alatt �ll, �gy miel�tt haszn�ln�d k�rdezz r�.</p><p><b>V�lassz a lehet�s�gek k�z�l:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Add meg a let�ltend� f�jlra mutat� hivatkoz�st:');
@define('ENTER_MEDIA_UPLOAD', 'V�lassza ki a felt�ltend� f�jlt:');
@define('SAVE_FILE_AS', 'F�jl ment�se a k�vetkez� n�ven:');
@define('STORE_IN_DIRECTORY', 'T�rol�s a k�vetkez� k�nyvt�rban: ');
@define('IMAGE_MORE_INPUT', 'Tov�bbi k�pek hozz�ad�sa');
@define('ENTER_MEDIA_URL_METHOD', 'Let�lt�si m�d:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Megjegyz�s: ha a k�zvetlen hivatkoz�st v�lasztod, bizonyosodj meg arr�l, hogy van-e jogod ehhez, vagy a szerver ahova mutatsz a ti�d. Ezzel a m�dszerrel �gy jelen�thetsz meg k�peket, hogy azok nem ker�lnek hozz�d lement�sre.');
@define('FETCH_METHOD_IMAGE', 'K�p let�lt�se a szerveredre');
@define('FETCH_METHOD_HOTLINK', 'K�zvetlen hivatkoz�s szerverre');
@define('GO_ADD_PROPERTIES', 'Mehet, majd ut�na a tulajdons�gok szerkeszt�se');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'K�p �tm�retez�se');
@define('MEDIA_DELETE', 'F�jl t�rl�se');
@define('FILES_PER_PAGE', 'Oldalank�nt megjelen� f�jlok');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nem tal�lhat� k�p');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', '�sszes k�nyvt�r');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'A be�ll�t�sok ment�se sikeres');
@define('DIAGNOSTIC_ERROR', 'Tal�ltam valami hib�t az �ltalad megadott adatokban:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Adatb�zis Be�ll�t�sok');
@define('INSTALL_CAT_DB_DESC', 'Itt adhatod meg az �sszes adatb�zis be�ll�t�st. A Serendipity-nek sz�ks�ge van erre a m�k�d�shez');
@define('INSTALL_DBTYPE', 'Adatb�zis t�pusa');
@define('INSTALL_DBTYPE_DESC', 'Adatb�zis t�pusa');
@define('INSTALL_DBHOST', 'Adatb�zis hoszt');
@define('INSTALL_DBHOST_DESC', 'Az adatb�zis szerver hosztneve');
@define('INSTALL_DBUSER', 'Adatb�zis felhaszn�l�');
@define('INSTALL_DBUSER_DESC', 'A felhaszn�l�i n�v, amivel az adatb�zisodhoz lehet kapcsol�dni');
@define('INSTALL_DBPASS', 'Adatb�zis jelsz�');
@define('INSTALL_DBPASS_DESC', 'A fent megadott felhaszn�l�hoz tartoz� jelsz�');
@define('INSTALL_DBNAME', 'Az adatb�zis neve');
@define('INSTALL_DBNAME_DESC', 'Az adatb�zisod neve');
@define('INSTALL_DBPREFIX', 'Az adatb�zis t�bl�k prefix-e');
@define('INSTALL_DBPREFIX_DESC', 'A t�blanevek prefix-e, pl.: serendipity_');
@define('INSTALL_DBPERSISTENT', '�lland� kapcsolat haszn�lata');
@define('INSTALL_DBPERSISTENT_DESC', 'Enged�lyezd az �lland� adat�bziskapcsolat haszn�lat�hoz. <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">Itt olvashatsz err�l t�bbet</a>. Norm�lis esetben ez nem sz�ks�ges');
@define('INSTAL_DB_UTF8', 'Adatb�zis katakterkonverzi� enged�lyez�se');
@define('INSTAL_DB_UTF8_DESC', 'MySQL eset�ben add ki a k�vetkez� parancsot a sz�ks�ges karakterk�dol�s meg�llap�t�s�hoz: "SET NAMES". Kapcsold ki vagy be ezt az opci�t, ha furcsa karaktereket l�tsz a blog-ban.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '�tvonalak');
@define('INSTALL_CAT_PATHS_DESC', 'K�l�nf�le �tvonalak a fontos k�nyvt�rakhoz �s f�jlokhoz. A k�nyvt�rak v�g�r�l ne felejtsd el a per ("\") jelet!');
@define('INSTALL_FULLPATH', 'Teljes �tvonal');
@define('INSTALL_FULLPATH_DESC', 'A teljes abszol�t el�r�si �tvonal a saj�t serendipity telep�t�sedhez');
@define('INSTALL_UPLOADPATH', 'Felt�lt�si �tvonal');
@define('INSTALL_UPLOADPATH_DESC', 'Minden felt�lt�tt f�jl ide ker�l, relat�v a  \'Full path\' bejegyz�shez - �ltal�ban \'uploads/\'');
@define('INSTALL_RELPATH', 'Relat�v �tvonal');
@define('INSTALL_RELPATH_DESC', 'A serendipity-hez vezet� �tvonal a b�ng�sz�ben, �ltal�ban \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relat�v "template" �tvonal');
@define('INSTALL_RELTEMPLPATH_DESC', '�tvonal a "template"-eket tartalmaz� k�nyvt�rhoz - relat�v a \'relative path\' bejegyz�shez');
@define('INSTALL_RELUPLOADPATH', 'Relat�v felt�lt�si �tvonal');
@define('INSTALL_RELUPLOADPATH_DESC', 'A felt�lt�sekhez vezet� �tvonal a b�ng�sz�ben - Relat�v a \'relative path\' bejegyz�shez');
@define('INSTALL_URL', 'URL a blog-hoz');
@define('INSTALL_URL_DESC', 'A blog-od URL-je');
@define('INSTALL_AUTODETECT_URL', 'HTTP-Hoszt automatikus meghat�roz�sa');
@define('INSTALL_AUTODETECT_URL_DESC', 'Ha ez "igen"-re van �ll�tva, akkor a l�togat� �ltal haszn�lt domain n�v ker�l haszn�latra  az �ltalad be�ll�tott BaseURL helyett. Ezzel a be�ll�t�ssal t�bb domain-es k�rnyezetben is haszn�lhatod a Serendipity blog-ot, �gy nem okoz gondot a linkek kezel�se.');
@define('INSTALL_INDEXFILE', 'Index f�jl');
@define('INSTALL_INDEXFILE_DESC', 'A serendipity-d index f�jlja');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permanens hivatkoz�sok');
@define('INSTALL_CAT_PERMALINKS_DESC', 'K�l�nb�z� URL mint�kat lehet defini�lni a permanens hivatkoz�sokhoz, amiket azut�n a blog-ban haszn�lhatsz. Az alap�rtelmezett haszn�lata aj�nlott; ha nem azt haszn�lod, akkor pr�b�ld ezt az �rt�ket: %id% , amennyiben lehet, ahhoz hogy a Serendipity-nek ne kelljen lek�rdeznie az URL-t az adatb�zisb�l.');
@define('INSTALL_PERMALINK', 'Bejegyz�sre vonatkoz� permanens hivatkoz�s URL strukt�r�ja');
@define('INSTALL_PERMALINK_DESC', 'Itt adhatod meg a relat�v URL strukt�r�t az alap URL-hez k�pest, ahonnan a bejegyz�sek el�rhet�ek lesznek. Haszn�lhatod a k�vetkez� v�ltoz�kat: %id%, %title%, %day%, %month%, %year% �s egy�b karaktereket is.');
@define('INSTALL_PERMALINK_AUTHOR', 'Szerz�re vonatkoz� permanens hivatkoz�s URL strukt�r�ja');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Itt adhatod meg a relat�v URL strukt�r�t az alap URL-hez k�pest, ahonnan a szerz�re mutat� hivatkoz�sok el�rhet�ek lesznek. Haszn�lhatod a k�vetkez� v�ltoz�kat: %id%, %realname%, %username%, %email% �s egy�b karaktereket is.');
@define('INSTALL_PERMALINK_CATEGORY', 'Kateg�ri�ra vonatkoz� permanens hivatkoz�s URL strukt�r�ja');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Itt adhatod meg a relat�v URL strukt�r�t az alap URL-hez k�pest, ahonnan a kateg�ri�ra mutat� hivatkoz�sok el�rhet�ek lesznek. Haszn�lhatod a k�vetkez� v�ltoz�kat: %id%, %name%, %parentname%, %description% �s egy�b karaktereket is.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'RSS h�rcsatorn�ra vonatkoz� permanens hivatkoz�s URL strukt�r�ja');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Itt adhatod meg a relat�v URL strukt�r�t az alap URL-hez k�pest, ahonnan az RSS h�rcsatorn�ra mutat� hivatkoz�sok el�rhet�ek lesznek. Haszn�lhatod a k�vetkez� v�ltoz�kat: %id%, %name%, %description% �s egy�b karaktereket is.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'A szerz�re hivatkoz� permanens hivatkoz�s RSS h�rcsatorna-beli strukt�r�ja');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Itt adhatod meg a relat�v URL strukt�r�t az alap URL-hez k�pest, ahol az egyes felhaszn�l�k RSS h�rcsatorn�i megtekinthet�k. A k�vetkez� v�ltoz�kat haszn�lhatod: %id%, %realname%, %username%, %email% �s egy�b karaktereket.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Arch�vumok �tvonala');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Arch�vum �tvonala');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Kateg�ri�k �tvonala');
@define('INSTALL_PERMALINK_AUTHORSPATH', '�tvonal a szerz�kh�z');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '�tvonal a hozz�sz�l�sr�l val� leiratkoz�shoz');
@define('INSTALL_PERMALINK_DELETEPATH', '�tvonal a hozz�sz�l�s t�rl�s�hez');
@define('INSTALL_PERMALINK_APPROVEPATH', '�tvonal a hozz�sz�l�s elfogad�s�hoz');
@define('INSTALL_PERMALINK_FEEDSPATH', '�tvonal az RSS h�rcsatorn�khoz');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Modul �tvonala');
@define('INSTALL_PERMALINK_ADMINPATH', 'Adminisztr�ci� �tvonala');
@define('INSTALL_PERMALINK_SEARCHPATH', '�tvonal a keres�shez');
@define('INSTALL_PERMALINK_COMMENTSPATH', '�tvonal a hozz�sz�l�sokhoz');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', '�ltal�nos Be�ll�t�sok');
@define('INSTALL_CAT_SETTINGS_DESC', 'Hat�rozd meg, hogyan m�k�dj�n a Serendipity');
@define('INSTALL_USERNAME', 'Az adminisztr�tor felhaszn�l�i neve');
@define('INSTALL_USERNAME_DESC', 'A mindenhat� adminisztr�tor felhaszn�l�i neve');
@define('INSTALL_PASSWORD', 'Az adminisztr�tor jelszava');
@define('INSTALL_PASSWORD_DESC', 'Az adminisztr�tor felhaszn�l�hoz tartoz� jelsz�');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Val�di n�v');
@define('USERCONF_REALNAME_DESC', 'A szerz� teljes neve. Ezt l�tj�k az olvas�k.');
@define('INSTALL_EMAIL', 'Adminisztr�tori email');
@define('INSTALL_EMAIL_DESC', 'A blog adminisztr�tor email c�me');
@define('INSTALL_SENDMAIL', 'K�ldjek levelet az adminisztr�tornak?');
@define('INSTALL_SENDMAIL_DESC', 'Szeretn�l level�ben �rtes�lni arr�l, ha egy bejegyz�sedhez valaki hozz�sz�l�st f�z�tt?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Blog n�v');
@define('INSTALL_BLOGNAME_DESC', 'A blog-od neve');
@define('INSTALL_BLOGDESC', 'Blog le�r�s');
@define('INSTALL_BLOGDESC_DESC', 'A blod-od le�r�sa');
@define('INSTALL_BLOG_EMAIL', 'A Blog email c�me');
@define('INSTALL_BLOG_EMAIL_DESC', 'Itt adhat� meg az az email c�m, ami a kimen� levelek "K�ld�" r�sz�ben lesz megtal�lhat�. �rdemes val�s email c�met megadni itt, mert sok levelez� szerver ellen�rzi a k�ld� email c�m �rv�nyess�g�t.');
@define('COMMENT_TOKENS', 'Tokenek haszn�lata a hozz�sz�l�sok moder�l�s�hoz?');
@define('COMMENT_TOKENS_DESC', 'Amennyiben tokeneket haszn�lunk, a hozz�sz�l�sokat elfogadhatjuk vagy t�r�lhetj�k az emailben kapott linkre kattintva a blogba val� bejelentkez�s n�lk�l. Ez egy k�nyelmi funkci�, de amennyiben egy ilyen email illet�ktelenek kez�be ker�l, �k is manipul�lhatnak a k�rd�ses hozz�sz�l�sokkal tov�bbi azonos�t�s n�lk�l.');
@define('INSTALL_LANG', 'Nyelv');
@define('INSTALL_LANG_DESC', 'Milyen nyelven sz�ljon a blod-od?');
@define('INSTALL_CHARSET', 'Karakterk�dol�s v�laszt�sa');
@define('INSTALL_CHARSET_DESC', 'Itt be�ll�thatod az UTF-8, vagy a nat�v (ISO, EUC, ...) karakterk�dol�st. N�h�ny nyelvnek csak UTF-8 lek�pez�se l�tezik, �gy itt a nat�vot nem �rdemes v�lasztani. Az UTF-8 aj�nlott �j telep�t�skor. Ne v�ltoztasd meg ezt akkor, ha m�r vannak bejegyz�seid speci�lis karakterekkel - mert �gy hib�s karakterek jelenhetnek meg. Itt olvashatsz err�l t�bbet: https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Napt�r t�pus');
@define('INSTALL_CAL_DESC', 'V�laszd ki a k�v�nt napt�r form�tum�t');
@define('AUTOLANG', 'A l�togat� b�ng�sz�j�ben be�ll�tott nyelv haszn�lata');
@define('AUTOLANG_DESC', 'Ha ez "igen"-re van �ll�tva, akkor az oldal megtekint�j�nek a b�ng�sz�j�ben megadott nyelv lesz akt�v a bejegyz�sekn�l �s a fel�leten.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Modulokra �rv�nyes ACL (b�vebb jogosults�gkezel�s) enged�lyez�se felhaszn�l�csoportonk�nt?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Ha ezt enged�lyezed, be�ll�thatod hogy mely felhaszn�l�i csoportok kezelhetnek modulokat/esem�nyeket.');
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
@define('INSTALL_CAT_DISPLAY', 'Megjelen�t�si be�ll�t�sok');
@define('INSTALL_CAT_DISPLAY_DESC', 'A serendipity kin�zet�nek be�ll�t�sai');
@define('INSTALL_FETCHLIMIT', 'A f�oldalon megjelen�tend� bejegyz�sek');
@define('INSTALL_FETCHLIMIT_DESC', 'A f�oldalon l�v� oldalakon megjelen� bejegyz�sek sz�ma');
@define('INSTALL_RSSFETCHLIMIT', 'A h�rcsatorn�ban megjelen�tend� bejegyz�sek');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Az RSS h�rcsatorn�ban megjelen�tend� bejegyz�sek sz�ma.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'RFC2616 form�tum� RSS h�rcsatorna kompatibilit�s be�ll�t�sa');
@define('SYNDICATION_RFC2616_DESC', 'Ha a RFC2616 form�tum kompatibilit�st NEM enged�lyezed, akkor a aki lek�ri a h�rcsatorn�t, mindig az utols� lek�r�s �ta friss�lt elemeket kapja vissza, ami alapvet�en j� m�k�d�s. Van n�h�ny RSS kliens viszont, mint p�ld�ul a Planet, amelyek furcs�n viselkednek ilyenkor, ami nem RFC2616 kompatibilis.  �gy ha ezt enged�lyezed, kompatibilis leszel a szabv�nnyal, de n�h�ny olvas� lemaradhat bizonyos h�rekr�l. Itt olvashatsz err�l t�bbet: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Gzip t�m�r�tett oldalak haszn�lata');
@define('INSTALL_USEGZIP_DESC', 'Az oldalak kiszolg�l�s�nak gyors�t�s�hoz, a l�togat�nak k�ld�tt oldalakat t�m�r�thetj�k, ha a b�ng�sz� t�mogatja ezt. Aj�nlott be�ll�t�s.');
@define('INSTALL_XHTML11', 'K�nyszer�tett XHTML 1.1 megfelel�s�g');
@define('INSTALL_XHTML11_DESC', 'Az oldalak mindenk�pp megfeleljenek XHTML 1.1 szabv�nynak (probl�m�t okozhat a r�gebbi 4-edik gener�ci�s b�ng�sz�k eset�ben)');
@define('INSTALL_POPUP', 'Enged�lyezed a felbukkan� (popup) ablakok haszn�lat�t');
@define('INSTALL_POPUP_DESC', 'Szeretn�d, hogy a hozz�sz�l�sok, visszahivatkoz�sok eset�ben legyenek felbukkan� ablakok?');
@define('INSTALL_EMBED', 'A serendipity be�gyazott alkalmaz�sk�nt fut?');
@define('INSTALL_EMBED_DESC', 'Amennyiben szeretn�d a serendipity-t egy szokv�nyos oldalba �gyazni, v�laszd ezt az opci�t, s �gy csak a tartalom jelenik meg fejl�c n�lk�l. Haszn�t veheted az "indexFile" opci�nak, hogy haszn�lni tudj egy "wrapper class"-t, ahov� a honlapod eredeti fejl�c�t. Tov�bbi inform�ci��rt l�sd a README f�jlt!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Legyenek a k�ls� helyre val� hivatkoz�sok kattinthat�ak?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"nem": a nem ellen�rz�tt k�ls� hivatkoz�sok (leggyakoribb kil�p�k, leggyakoribb visszahivatkoz�k, hozz�sz�l�sok) sima sz�vegk�nt jelennek meg, azaz nem kattinthat�ak, megel�zve ezzel pl. a google spam-et (aj�nlott). "igen": a nem ellen�rz�tt k�ls� hivatkoz�sok kattinthat� hivatkoz�sk�nt val� megjelen�t�se. Fel�ldefini�lhat� a marg� modul be�ll�t�sain�l!');
@define('INSTALL_TRACKREF', 'Enged�lyezz�k a hivatkoz�k ellen�rz�s�t?');
@define('INSTALL_TRACKREF_DESC', 'Ha ezt enged�lyezed, l�tod majd, hogy mely oldalak hivatkoznak a bejegyz�seidre. Manaps�g ezt gyakran haszn�lj�k spammerek, �gy �rdemes ezt tiltani.');
@define('INSTALL_BLOCKREF', 'Tiltott ide hivatkoz�k');
@define('INSTALL_BLOCKREF_DESC', 'Van olyan g�p, amelyet nem szeretne megjelen�teni az ide hivatkoz�k list�j�ban? V�lassza el ezeket a c�meket \';\'-vel. A c�mek akkor is blokkol�dnak, ha a sz�veg k�zep�n van egyez�s!');
@define('INSTALL_REWRITE', 'URL �t�r�s');
@define('INSTALL_REWRITE_DESC', 'V�laszd ki a szab�lyokat, amelyeket az URL gener�l�s sor�n haszn�lni szeretn�l. Az �t�r� szab�lyok haszn�lata szebb URL-t ad a blog-odnak, �s a web-es robotok (pl: google)is k�nnyebben indexelik. A webszervernek t�mogatnia kell a "mod_rewrite" vagy a "AllowOverride All" be�ll�t�st a serendipity k�nyvt�radhoz. Az alap�rtelmezett be�ll�t�s az automatikus �rz�kel�s (autodetect))');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Szerver id� eltol�d�s');
@define('INSTALL_OFFSET_DESC', 'Add meg az id�k�l�nbs�get a szerveren l�v� id� (jelenlegi: %clock%), �s az �ltalad haszn�lni k�v�nt id�pont k�z�tt');
@define('INSTALL_SHOWFUTURE', 'J�v�beli bejegyz�sek mutat�sa');
@define('INSTALL_SHOWFUTURE_DESC', 'Ha ez enged�lyezve van, akkor a j�v�beni bejegyz�sek is l�that�ak lesznek. Alap�rtelmez�sben ezeket elrejtj�k, �s cask akkor ker�lnek megmutat�sra, ha elj�n a publik�l�si d�tum.');
@define('INSTALL_ACL', 'Olvas�si jogosults�gok bekapcsol�sa a kateg�ri�kon');
@define('INSTALL_ACL_DESC', 'Ha enged�lyezed, akkor a kateg�ri�kra alkalmazott olvas�si jogosults�gok minden alkalommal ellen�rz�sre ker�lnek amikor egy l�togat� megtekinti az oldalt. Ha nincs enged�lyezve, az olvas�si jogosults�gok nem ker�lnek ellen�rz�sre, de cser�be gyorsabb lesz a m�k�d�s. �gy ha nincs sz�ks�ged erre, ne enged�lyezd.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Az eg�sz bejegyz�s RSS h�rcsatorn�ban mutat�sa a k�ls� sz�vegekkel egy�tt.');
@define('SYNDICATION_PLUGIN_BANNERURL', 'K�p az RSS inf�hoz');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'A GIF/JPEG/PNG form�tum� k�p URL-je, ha van. (�res: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'K�psz�less�g');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'k�ppontban, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'K�pmagass�g');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'k�ppontban, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'E-mail c�mek mutat�sa?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '"F�szerkeszt�" mez�');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'A F�szerkeszt� email c�me, ha van. (�res: rejtett) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '"Webmester" mez�');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'A Webmester email c�me, ha van. (�res: rejtett) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', '"TTL" mez� (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Az az id�tartam (percben), ami ut�n a blog-odat nem cache-elje t�bb� semmilyen k�ls� honlap vagy alkalmaz�s (�res: rejtett) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '"Publik�ci� D�tuma" mez�');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Szerepeljen a "Publik�ci� D�tuma" mez� az RSS-csatorn�n annak �rdek�ben, hogy l�tsz�djon a legfrissebb bejegyz�s d�tuma?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'K�p konvert�l� be�ll�t�sok');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Glob�lis be�ll�t�sok arr�l, hogy a serendipity hogyan kezelje a k�peket');
@define('INSTALL_IMAGEMAGICK', 'ImageMagick haszn�lata');
@define('INSTALL_IMAGEMAGICK_DESC', 'Van-e a szerveren ImageMagick telep�tve, �s szeretn�-e ezt haszn�lni a k�pek �tm�retez�s�hez?');
@define('INSTALL_IMAGEMAGICKPATH', 'A futtathat� f�jl el�r�si �tvonala');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Az Imagemagic program �tvonala �s f�jlneve');
@define('INSTALL_THUMBSUFFIX', 'A gener�lt el�n�zeti k�pek el�tagja');
@define('INSTALL_THUMBSUFFIX_DESC', 'A k�pekb�l gener�lt el�n�zeti k�pek ilyen nev�ek lesznek: eredetin�v.[el�tag].kiterj');
@define('INSTALL_THUMBWIDTH', 'El�n�zeti k�p m�retek');
@define('INSTALL_THUMBWIDTH_DESC', 'Az automatikusan gener�lt el�n�zeti k�pek sz�less�g�nek maximuma');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Felt�lthet� maxim�lis f�jlm�ret');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Add meg a maxim�lisan felt�lthet� f�jlm�retet. Ezt a szerver oldalon is fel�l lehet b�r�lni a PHP.ini-ben a k�vetkez� be�ll�t�sokkal: upload_max_filesize, post_max_size, max_input_time ; mindegyik�k fel�ldefini�lja az itt be�ll�tott �rt�ket. Az �resen hagyott mez� azt jelenti, hogy a szerver be�ll�t�sait haszn�ljuk.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Felt�ltend� k�pek maxim�lis sz�less�ge');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Megadhatod a felt�ltend� k�pek maxim�lis sz�less�g�t.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Felt�ltend� k�pek maxim�lis magass�ga');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Megadhatod a felt�ltend� k�pek maxim�lis magass�g�t.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Menet k�zbeni m�diaf�jl-szinkroniz�ci� enged�lyez�se');
@define('ONTHEFLYSYNCH_DESC', 'Ha ezt enged�lyezed, a Serendipity �sszehasonl�tja a m�dia adatb�zist a szerveren tal�lhat� f�jlokkal, �s szinkroniz�lja �ket.');
@define('MEDIA_DYN_RESIZE', 'Enged�lyezz�k a k�pek automatikus �tm�retez�s�t?');
@define('MEDIA_DYN_RESIZE_DESC', 'Ha ezt enged�lyezed, a m�diav�laszt� megadott m�ret�re konvert�lj a hivatkozozz k�peket. Az eredm�nyek elt�rol�sra ker�lnek. �gy ha ezt s�r�n haszn�lod, sok f�jlod �sszegy�lhet.');
@define('MEDIA_EXIF', 'EXIF/JPEG k�padatok import�l�sa');
@define('MEDIA_EXIF_DESC', 'Ha ezt enged�lyezed, akkor a k�pekn�l m�r l�tez� EXIF/JPEG metaadatok beker�lnek az adatb�zisba, �s megjelennek a m�diagal�riban.');
@define('MEDIA_PROP', 'M�dia tulajdons�gok');
@define('MEDIA_PROP_DESC', 'Adj meg ";"-vel elv�lasztott tulajdons�gokat, amelyeket szeretn�l haszn�lni a m�dia f�jlokn�l');
@define('MEDIA_PROP_MULTIDESC', '(B�rmelyik elem m�g� hozz�f�zheted hogy ":MULTI", �gy jelezve azt, hogy ez a mez� nagyobb sz�veget is tartalmazhat, nemcsak kisebb sz�veget)');
@define('MEDIA_KEYWORDS', 'M�dia kulcsszavak');
@define('MEDIA_KEYWORDS_DESC', 'Adj meg ";"-vel elv�lasztott szavakat, amelyeket szeretn�l haszn�lni a m�diaelemekn�l el�re defini�lt kulcsszavakk�nt.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Szem�lyes adatok');
@define('USERCONF_CAT_PERSONAL_DESC', 'Itt v�ltoztatod meg a szem�lyes adatait');
@define('USERCONF_USERNAME', 'Felhaszn�l� n�v');
@define('USERCONF_USERNAME_DESC', 'Ezzel a n�vvel jelentkezhetsz be');
@define('USERCONF_PASSWORD', 'Jelsz�');
@define('USERCONF_PASSWORD_DESC', 'A bel�p�shez haszn�lt jelsz�');
@define('USERCONF_CHECK_PASSWORD', 'R�gi jelsz�');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Ha a mez�ben megv�ltoztatod a jelsz�t, itt meg kell adnod a jelenlegit.');
@define('USERCONF_USERLEVEL', 'Hozz�f�r�si szint');
@define('USERCONF_USERLEVEL_DESC', 'Ez a szint hat�rozza meg, hogy a szerkeszt�nek milyen jogosults�gai vannak a blog-hoz');
@define('USERCONF_GROUPS', 'Csoporttags�g');
@define('USERCONF_GROUPS_DESC', 'Ez a felhaszn�l� a k�vetkez� csoportok tagja. T�bb csoportba is tartozhat.');
@define('USERCONF_EMAIL', 'Email c�m');
@define('USERCONF_EMAIL_DESC', 'Az email c�med');
@define('INSTALL_WYSIWYG', 'A WYSIWYG szerkeszt� haszn�lata');
@define('INSTALL_WYSIWYG_DESC', 'Szeretn�d haszn�lni a WYSIWYG szerkeszt�t? (IE5+ alatt m�k�dik, valamint r�szben a Mozilla 1.3+ alkalmaz�sban)');
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
@define('USERCONF_SENDCOMMENTS', 'Hozz�sz�l�sok elk�ld�se?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Szeretn�l kapni emailt ha valamelyik bejegyz�shez hozz�sz�l�s �rkezik?');
@define('USERCONF_SENDTRACKBACKS', 'K�ldj�nk �rtes�t�st visszahivatkoz�skor?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Szeretn�l kapni emailt, ha valaki visszahivatkozik valamelyik bejegyz�sedre?');
@define('USERCONF_CREATE', 'Felhaszn�l� letilt�sa / aktivit�s tilt�sa?');
@define('USERCONF_CREATE_DESC', 'Ha ezt v�lasztod, a felhaszn�l� nem hozhat l�tre bejegyz�seket �s nem szerkeszthet semmit. Bejelentkez�se ut�n, csak kijelentkezni tud, illetve megtekintheti szem�lyes be�ll�t�sait.');
@define('USERCONF_ALLOWPUBLISH', 'Jogok: Bejegyz�s k�zz�t�tele?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Ez a felhaszn�l� jogosult a bejegyz�sek k�zz�t�tel�re?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Mutassuk az eszk�zt�rat a m�diav�laszt� ablakban?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Alap�rtelmezett be�ll�t�sok �j bejegyz�sekhez');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'Megjegyz�s: A felhaszn�l� szint� attrib�tumok a visszafele kompatibilit�s, n�h�ny modul �s az azonos�t�s n�h�ny esete miatt sz�ks�gesek. A felhaszn�l�k jogosults�ga a csoporttags�gon kereszt�l �ll�that� be!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Helytelen�l adtad meg a jelenlegi jelsz�t, �gy nem v�ltoztathatod meg. A be�ll�t�sokat nem mentett�k.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'A felhaszn�l�i n�v nem lehet �res.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'Szem�lyes be�ll�t�sok el�r�se');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'Felhaszn�l�i szint v�ltoztat�sa');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'A "nem vehet fel bejegyz�st" v�ltoztat�sa');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'Bejegyz�s publik�l�si jogosults�g v�ltoztat�sa');
@define('PERMISSION_SITECONFIGURATION', 'Rendszer-konfigur�ci�hoz hozz�f�r');
@define('PERMISSION_BLOGCONFIGURATION', 'Blog specifikus be�ll�t�sokhoz hozz�f�r');
@define('PERMISSION_ADMINENTRIES', 'Bejegyz�sek adminisztr�l�sa');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'M�s felhaszn�l�k bejegyz�seinek adminisztr�l�sa');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'Bejegyz�sek import�l�sa');
@define('PERMISSION_ADMINCATEGORIES', 'Kateg�ri�k adminisztr�l�sa');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'M�s felhaszn�l�k kateg�ri�inak adminisztr�l�sa');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'Kateg�ri�k t�rl�se');
@define('PERMISSION_ADMINUSERS', 'Felhaszn�l�k adminisztr�l�sa');
@define('PERMISSION_ADMINUSERSDELETE', 'Felhaszn�l�k t�rl�se');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'Felhaszn�l�i szint megv�ltoztat�sa');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'A csoportodban l�v� felhaszn�l�k adminisztr�l�sa');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'A csoportodba nem tartoz� felhaszn�l�k adminisztr�l�sa');
@define('PERMISSION_ADMINUSERSCREATENEW', 'Felhaszn�l�k l�trehoz�sa');
@define('PERMISSION_ADMINUSERSGROUPS', 'Felhaszn�l�i csoportok adminisztr�l�sa');
@define('PERMISSION_ADMINPLUGINS', 'Modulok adminisztr�l�sa');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'M�s felhaszn�l�k moduljainak adminisztr�l�sa');
@define('PERMISSION_ADMINIMAGES', 'M�dia f�jlok adminisztr�l�sa');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'M�dia k�nyvt�rak adminisztr�l�sa');
@define('PERMISSION_ADMINIMAGESADD', '�j m�dia f�jlok hozz�ad�sa');
@define('PERMISSION_ADMINIMAGESDELETE', 'M�dia f�jlok t�rl�se');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'M�s felhaszn�l�k m�dia f�jljainak adminisztr�l�sa');
@define('PERMISSION_ADMINIMAGESVIEW', 'M�dia f�jlok megtekint�se');
@define('PERMISSION_ADMINIMAGESSYNC', 'El�n�zeti k�pek szinkroniz�l�sa');
@define('PERMISSION_ADMINCOMMENTS', 'Hozz�sz�l�sok adminisztr�l�sa');
@define('PERMISSION_ADMINTEMPLATES', 'Sablonok adminisztr�l�sa');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'M�s felhaszn�l�k m�dia f�jljainak megtekint�se');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Letiltott modulok');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Letiltott esem�nyek');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'A bejegyz�s mentve');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Logikai sorrend');
@define('COMMENTS_VIEWMODE_LINEAR', 'Folyamatos');
@define('DISPLAY_COMMENTS_AS', 'A hozz�sz�l�sok megjelen�t�se �gy:');
@define('COMMENTS_DISABLE', 'Ne lehessen hozz�sz�lni');
@define('COMMENTS_ENABLE', 'Lehessen hozz�sz�lni');
@define('COMMENTS_CLOSED', 'A szerz� letiltotta a hozz�sz�l�st.');
@define('VIEW_EXTENDED_ENTRY', '"%s" tov�bb olvas�sa');
@define('TRACKBACK_SPECIFIC', 'Visszahivatkoz�s specifikus URI ehhez a bejegyz�shez');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Minden megtekint�se');
@define('VIEW_TOPICS', 'C�mek megtekint�se');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'C�mek innen: ');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'A bejegyz�seket nem siker�lt beilleszteni!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Megjegyezzem a megadott adatokat? ');
@define('SUBMIT_COMMENT', 'Hozz�sz�l�s bek�ld�se');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Feliratkozom erre a bejegyz�sre');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'A b�ng�sz�d nem k�ld�tt �rv�nyes HTTP-Hivatkoz� sz�veget. Ez t�bb okb�l lehet, pl. rosszul be�ll�tott b�ng�sz�, proxy, vagy egy Cross Site Request Forgery (XSRF) t�mad�s �ldozata lett�l. A k�rt m�velet nem hajthat� v�gre.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'A hozz�sz�l�s m�r elfogadott: #%s');
@define('COMMENT_EDITED', 'A kiv�lasztott hozz�sz�l�s m�dos�tva lett');
@define('COMMENTS_WILL_BE_MODERATED', 'A hozz�sz�l�sok moder�l�son esnek �t megjelen�s el�tt.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Figyelem: Ezt a bejegyz�st el kell fogadni miel�tt megjelenhetne');
@define('DELETE_COMMENT', 'Hozz�sz�l�s t�rl�se');
@define('APPROVE_COMMENT', 'Hozz�sz�l�s elfogad�sa');
@define('REQUIRES_REVIEW', 'Sz�ks�ges az el�zetes �tn�z�s');
@define('COMMENT_APPROVED', 'A k�vetkez� hozz�sz�l�st sikeresen elfogadtuk: #%s');
@define('COMMENT_DELETED', 'A k�vetkez� hozz�sz�l�st sikeresen t�r�lt�k: #%s');
@define('COMMENTS_MODERATE', 'A hozz�sz�l�sokat �s a visszahivatkoz�sokat moder�lni kell megjelen�s el�tt.');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Figyelem: Ezt a visszahivatkoz�st el kell fogadni miel�tt megjelenhetne');
@define('DELETE_TRACKBACK', 'Visszahivatkoz�s t�rl�se');
@define('APPROVE_TRACKBACK', 'Visszahivatkoz�s elfogad�sa');
@define('TRACKBACK_APPROVED', 'A visszahivatkoz�st sikeresen elfogadtuk: #%s');
@define('TRACKBACK_DELETED', 'A visszahivatkoz�st sikeresen t�r�lt�k: #%s');
@define('COMMENT_NOTOKENMATCH', 'A moder�ci�s link lej�rt, vagy a #%s sz�m� hozz�sz�l�s m�r elfogadott/t�r�lt');
@define('TRACKBACK_NOTOKENMATCH', 'A moder�ci�s link lej�rt, vagy a #%s sz�m� visszahivatkoz�s m�r elfogadott/t�r�lt');
@define('BADTOKEN', '�rv�nytelen moder�ci�s link');
@define('TOP_LEVEL', 'Legfels� szint');
@define('VIEW_COMMENT', 'Hozz�sz�l�s megtekint�se');
@define('VIEW_ENTRY', 'Bejegyz�s megtekint�se');
@define('LINK_TO_ENTRY', 'Link a bejegyz�shez');
@define('LINK_TO_REMOTE_ENTRY', 'Link a t�voli bejegyz�shez');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'URL l�tez�s�nek ellen�rz�se: %s...');
@define('PINGBACK_SENT', 'Az URL l�tez�s ellen�rz�se sikeres');
@define('PINGBACK_FAILED', 'Az URL l�tez�s ellen�rz�se sikertelen: %s');
@define('PINGBACK_NOT_FOUND', 'Nem tal�lhat� hivatkoz�s az URL l�tez�s ellen�rz�s�hez.');
@define('TRACKBACK_SENDING', 'Visszahivatkoz�s k�ld�se ide: %s...');
@define('TRACKBACK_SENT', 'A visszahivatkoz�s sikeres');
@define('TRACKBACK_FAILED', 'A visszahivatkoz�s nem siker�lt: %s');
@define('TRACKBACK_NOT_FOUND', 'A visszahivatkoz�s URL nem tal�lhat�.');
@define('TRACKBACK_URI_MISMATCH', 'Az automatikusan felismert visszahivatkoz�si URL nem egyezik meg a c�l URL-el.');
@define('TRACKBACK_CHECKING', '<u>%s</u> ellen�rz�se lehets�ges visszshivatkoz�sokra ...');
@define('TRACKBACK_NO_DATA', 'Nem tal�lhat� adat');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Nem siker�lt visszahivatkoz�st k�ldeni: nem siker�lt a csatlakoz�s ide: %s ezen a porton: %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\n�rtes�t�st k�rt�l �j hozz�sz�l�sok �rkez�s�r�l a k�vetkez� bejegyz�shez: \"%s\" (<%s>). A feliratkoz�s elfogad�s�hoz (\"Double Opt In\") kattints erre a linkre:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\n�j hozz�sz�l�st k�ldt�l ehhez: \"%s\". A hozz�sz�l�sod ez volt:\n\n%s\n\nA blog tulajdonosa enged�lyezte az email-es ellen�rz�st, �gy a k�vetkez� linkre kell kattintanod hogy azonos�tsd a hozz�sz�l�sodat:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\n�j hozz�sz�l�st k�ldt�l ehhez: \"%s\". A hozz�sz�l�sod ez volt:\n\n%s\n\nA blog tulajdonosa enged�lyezte az egyszeri email-es ellen�rz�st, �gy a k�vetkez� linkre kell kattintanod hogy azonos�tsd a hozz�sz�l�sodat:\n<%s>\n\nMiut�n megtetted ezt, k�ldhetsz hozz�sz�l�sokat a felhaszn�l�neveddel �s email c�meddel an�lk�l hogy �jabb azonos�t� emailt kapn�l.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', '�j hozz�sz�l�s �rkezett az al�bbi (feliratkozott) bejegyz�shez "%s"');
@define('SUBSCRIPTION_MAIL', "Szia %s!\n\n�j hozz�sz�l�s �rkezett a \"%s\" bejegyz�shez, az al�bbi c�mmel: \"%s\"\nAz �j hozz�sz�l�s szerz�je: %s\n\nA bejegyz�st itt tal�lod: %s\n\nA leiratkoz�shoz kattints az al�bbi linkre: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hello %s,\n\n�j visszahivatkoz�s ker�lt az �ltalad megfigyelt bejegyz�shez, a \"%s\" blog-ban, a k�vetkez� c�m� bejegyz�shez \"%s\"\nA felirat neve: %s\n\nEz itt tal�lhat�: %s\n\nA figyel�st t�r�lheted ide kattintva: %s\n");
@define('SIGNATURE', "\n-- \n%s a Serendipity motort haszn�lja.\nEz a legjobb blog, te is haszn�lhatod.\nItt megtudod, hogyan: <https://s9y.org>.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', '�j hozz�sz�l�s �rkezett a "%s" blog-ban ehhez a bejegyz�shez: "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', '�j hivatkoz�s t�rt�nt m�sik oldalr�l erre a blog bejegyz�sre: "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'A k�vetkez� opci�k �rhet�k el:');
@define('NEW_TRACKBACK_TO', '�j visszahivatkoz�s k�sz�lt ehhez:');
@define('NEW_COMMENT_TO', 'Az al�bbi bejegyz�shez �j hozz�sz�l�s �rkezett:');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nem tal�ltam semmit (%s)' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'A keres�sre (%s) %s tal�lat �rkezett:');
@define('SEARCH_TOO_SHORT', 'A keres�si krit�riumnak 3 karaktern�l t�bbnek kell lennie. A *-al a szavak v�g�n r�vid�theted �ket, mint: s9y* ahhoz hogy a keres� r�videbb szavakat haszn�ljon.');
@define('SEARCH_ERROR', 'A keres� funkci� nem m�k�dik megfelel�en. Jelezd a blog adminisztr�tor�nak: Ez az adatb�zis indexek hi�nya miatt lehet. MySQL eset�ben az adatb�zis felhaszn�l�nak kell ezt futtatnia a megfelel� jogosults�gokkal: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Az adatb�zis a k�vetkez� hib�t adta: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Nem t�lt�tted ki a hozz�sz�l�s rovatot, %spr�b�ld meg%s �jra');
@define('COMMENT_NOT_ADDED', 'A hozz�sz�l�st nem tudtuk felvenni, mert vagy �rv�nytelen adatot adt�l meg, vagy ez le van tiltva, vagy a spamsz�r� kisz�rte az �zenetet.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Hozz�sz�l�sok innen');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'A hozz�sz�l�sod meger�s�t�se sikeresen megt�rt�nt.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'A hozz�sz�l�sod j�v�hagy�sa nem siker�lt. K�rlek ellen�rizd az erre haszn�lt linket. Ha ezt r�gebben kaptad mint 3 h�t, k�rned kell egy �jat.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'A hozz�sz�l�sokr�l sz�l� �rtes�t�sekre val� feliratkoz�sodat sikeresen meger�s�tetted.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'A be�ll�t�s szintaktik�ja hib�s erre az opci�ra: "%s". A k�vetkez� t�pus�nak kell lennie: "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Mutasd a kateg�rialist�t.');
@define('CATEGORIES_PARENT_BASE', 'Csak ezen kateg�ri�k mutat�sa ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'V�laszthatsz sz�l� kateg�ri�t, �gy csak az al� tartoz� gyermekkateg�ri�k l�tsz�dnak.');
@define('CATEGORIES_HIDE_PARALLEL', 'A kateg�ria f�ba nem tartoz� kateg�ri�k elrejt�se');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Ha nem szeretn�d hogy azok a kateg�ri�k is megjelenjenek, amelyek m�s kateg�riaf�hoz tartoznak, enged�lyezheted. Ennek csak akkor van jelent�s�ge, ha a "multi-blog"-al egy�tt haszn�lod, a "Kateg�ri�k tulajdons�gai/sablonjai" modulban.');
@define('CATEGORIES_HIDE_PARENT', 'A kijel�lt sz�l� kateg�ria elt�ntet�se');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Ha a kateg�ri�k list�j�t egy bizonyos kateg�ri�ra sz�k�ted, akkor a sz�l� kateg�ria lista azzal a sz�l� kateg�ri�val fog kezd�dni. Ha ezt nem enged�lyezed, akkor a sz�l� kateg�ria neve nem fog megjelenni.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Smarty-sablonok enged�lyez�se?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Ha ezt enged�lyezed, a modul Smarty-sablont haszn�l a kateg�rialista megjelen�t�s�hez. �gy a kin�zetet a "plugin_categories.tpl" sablonban is m�dos�thatod. Ez befoly�solja a teljes�tm�nyt, �gy ha nincs sz�ks�ged erre ne enged�lyezd.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Mutassuk a kateg�ri�kba tartoz� bejegyz�sek sz�m�t?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'A l�togat�k megjelen�thetnek t�bb kateg�ri�t egyszerre?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Ha ezt enged�lyezed, akkor a kateg�ria marg�n�l, minden kateg�ria mellett lesz egy jel�l�n�gyzet. A l�togat�k �gy v�laszthatj�k ki azokat a kateg�ri�kat, amelyekbe tartoz� bejegyz�seket szeretn�k l�tni.');
@define('CATEGORIES_TO_FETCH', 'Let�ltend� kateg�ri�k');
@define('CATEGORIES_TO_FETCH_DESC', 'Melyik szerz�t�l t�lts�k le a kateg�ri�kat?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Szerz�k list�j�nak mutat�sa');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Mutassuk a szerz�kh�z tartoz� bejegyz�sek sz�m�t a szerz� neve mellett?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Ha ezt enged�lyezed, akkor a szerz� �ltal l�trehozott bejegyz�sek sz�ma, a neve mellett jelenik meg z�r�jelben.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Csak a a legal�bb X bejegyz�ssel rendelkez� szerz�k mutat�sa');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Integr�ci� - Egyes�l�s');
@define('SHOWS_RSS_BLAHBLAH', 'Az RSS feliratkoz�s linkek mutat�sa');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s h�rcsatorna');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 inf�');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 inf�');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 info');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 hozz�sz�l�sok');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 inf�');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Megjelen�tett n�v a "feed"-hez');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Add meg az egyedi nevet a feed-ekhez (alap�rtelmezetten "feed")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Megjelen�tett n�v a "hozz�sz�l�s" feed-hez');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Add meg az egyedi nevet a "hozz�sz�l�s" feed-ekhez');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner azonos�t�');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'A h�rcsatorna azonos�t�ja, amelyet publik�lni szeretn�l');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner k�p');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'A k�p neve amit meg szeretn�l jelen�teni (hagyd �resen a sz�ml�l�hoz), a feedburner.com oldalr�l, pl.: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner c�m');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'C�m (ha van) amit a k�p mellett jelen�t�nk meg');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner k�p felirat');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Sz�veg (ha van) amit a k�p f�l� �llva jelen�t�nk meg');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Az arch�vum hivatkoz�s elrejt�se, ha nincs abban az id�szakban bejegyz�s (a bejegyz�sek sz�mol�sa sz�ks�ges)');
@define('ARCHIVE_COUNT', 'A list�ban l�v� elemek sz�ma');
@define('ARCHIVE_COUNT_DESC', 'A megjelen�tend� h�napok, hetek, napok sz�ma');
@define('ARCHIVE_FREQUENCY', 'Napt�ri bejegyz�s s�r�s�ge');
@define('ARCHIVE_FREQUENCY_DESC', 'A bejegyz�sek k�zti napt�ri intervallum');
@define('BROWSE_ARCHIVES', 'Havi arch�vum tall�z�sa');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'A "Serendipity" felirat sz�vegk�nt mutat�sa');
@define('POWERED_BY_SHOW_TEXT_DESC', 'A "Serendipity Weblog" feliratot sz�vegk�nt mutatja');
@define('POWERED_BY_SHOW_IMAGE', 'A "Serendipity" felirat megjelen�t�se logo-val');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Megjelen�ti a Serendipity logo-t');
@define('ADVERTISES_BLAHBLAH', 'Rekl�mozza a blog-od eredet�t');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Https haszn�lata bejelentkez�shez');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'A bejelentkez�si hivatkoz�s https c�mre fog mutatni. A b�ng�sz�nek t�mogatnia kell ezt!');
@define('SUPERUSER', 'Blog adminisztr�ci�');
@define('SUPERUSER_OPEN_ADMIN', 'Adminisztr�ci� megnyit�sa');
@define('SUPERUSER_OPEN_LOGIN', 'Bejelentkez� ablak megnyit�sa');
@define('ALLOWS_YOU_BLAHBLAH', 'A marg�n biztos�t hivatkoz�st a blog adminisztr�l�s�hoz');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Napt�r');
@define('CALENDAR_BOW_DESC', 'A h�t azon napja, amely a kezd�napnak sz�m�t. Alap�rtelmez�s: H�tf�');
@define('QUICKJUMP_CALENDAR', 'Gyors napt�rra ugr�s');
@define('CALENDAR_BEGINNING_OF_WEEK', 'A h�t els� napja');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Modul API hook (kamp�) enged�lyez�se');
@define('CALENDAR_EXTEVENT_DESC', 'Ha ezt enged�lyezed, akkor a modulok megjelen�thetik a napt�rban a saj�t esem�nyeiket. Akkor enged�lyezd, ha van olyan modulod, amelyiknek sz�ks�ge van erre, k�l�nben csak rontja a teljes�tm�nyt.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Bejegyz�s keres�se');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Elhelyez egy HTML-t�red�ket a marg�ra');
@define('THE_NUGGET', 'A HTML-t�red�k!');
@define('BACKEND_TITLE', 'Tov�bbi inform�ci� a modul be�ll�t�sain�l');
@define('BACKEND_TITLE_FOR_NUGGET', 'Itt saj�t sz�veget adhatsz meg, ami megjelenik a modul be�ll�t� k�perny�n a HTML Nugget moduln�l a le�r�ssal egy�tt. Ha t�bb HTML Nugget l�tezik c�m n�lk�l, ez seg�thet �ket megk�l�nb�ztetni.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'A "Top Exits/Ide hivatkoz�k"-eket linkk�nt jelen�tsem meg?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"nem": Az "Kil�p�k" �s a "Hivatkoz�k" sima sz�vegk�nt jelennek meg elker�lve a "google spam"-et. "igen": Az "kil�p�k" �s a "Hivatkoz�k" linkk�nt jelennek meg. "alap�rtelmezett": A glob�lis be�ll�t�st haszn�lja (javasolt).');
@define('HAVE_TO_BE_LOGGED_ON', 'Az oldal megtekint�s�hez el�bb be kell jelentkezned');
@define('WELCOME_TO_ADMIN', '�dv�zl�m a Serendipity adminisztr�tori fel�let�n.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Nagy k�p');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'R�vid megjegyz�s');
@define('MEDIA_PROPERTY_COMMENT2', 'Hossz� megjegyz�s');
@define('DELETE_SELECTED_ENTRIES', 'Kijel�lt bejegyz�sek t�rl�se');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'C�m');
@define('SERENDIPITY_NOT_INSTALLED', 'A Serendipity m�g nincs telep�tve. Kattints <a href="%s">ide</a> a telep�t�shez.');
@define('COMMENT_ADDED_CLICK', 'Kattints %side a visszat�r�shez%s, vagy %side az ablak bez�r�s�hoz%s.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kattints %side%s a hozz�sz�l�sokhoz, vagy %side%s ezen ablak bez�r�s�hoz.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Hozz�rndelt d�tum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Az �j k�nyvt�r URL-j�t ennyi bejegyz�sben m�dos�tottuk: %s.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'Nem MySQL adatb�zis eset�ben nem lehets�ges az �sszes bejegyz�sben szerepl� r�gi k�nyvt�r URL-t lecser�lni az �jra. Ezt k�zzel kell megtenned. Ha ezt nem szeretn�d, visszamozgathatod az eredeti k�nyvt�rat oda ahol volt.');
@define('TRACKBACK_SIZE', 'A c�l URL meghaladta a maxim�lis f�jlm�retet: %s b�jt.');
@define('CLICK_FILE_TO_INSERT', 'Kattints a beillesztend� f�jlra:');
@define('SELECT_FILE', 'V�lassz ki f�jlt a beilleszt�shez');
@define('MANAGE_IMAGES', 'K�pek kezel�se');
@define('WORD_NEW', '�j');
@define('WORD_OR', 'Vagy');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: External Services');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Fel�let: K�pess�gek');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Fel�let: Teljes modulok');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Fel�let: N�zetek');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Fel�let: Bejegyz�shez kapcsol�d�');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'H�tt�r: Szerkeszt�');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'H�tt�r: Felhaszn�l�kezel�s');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'H�tt�r: Meta inform�ci�k');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'H�tt�r: Sablonok');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'H�tt�r: K�pess�gek');
@define('PLUGIN_GROUP_IMAGES', 'K�pek');
@define('PLUGIN_GROUP_ANTISPAM', 'Spamsz�r�');
@define('PLUGIN_GROUP_MARKUP', 'Kiemel�s');
@define('PLUGIN_GROUP_STATISTICS', 'Statisztika');
@define('IMPORT_WELCOME', '�dv�zl�m a Serendipity import�l� eszk�z�ben');
@define('USER_SELF_INFO', 'Bejelentkezve mint %s (%s)');
@define('IMPORT_WHAT_CAN', 'Itt m�s blog alkalmaz�s bejegyz�seit import�lhatja');
@define('IMPORT_SELECT', 'V�lassza ki, hogy melyik blog szoftverb�l szeretne import�lni');
@define('MANAGE_STYLES', 'St�lusok kezel�se');
@define('SELECT_A_PLUGIN_TO_ADD', 'V�laszd ki a telep�tend� modult');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Lentebb tal�lhat� a telep�tett modulok list�ja');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Azonnali megszak�t�s');
@define('DELETE_SELECTED_COMMENTS', 'Kijel�lt hozz�sz�l�sok t�rl�se');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'M�dia objektum keres�se');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Hiba: a r�gi f�jln�v nem l�tezik!');
@define('ERROR_SOMETHING', 'Hiba: valami nem stimmel.');
@define('DIRECT_LINK', 'K�zvetlen link ehhez a bejegyz�shez.');
@define('SELECT_TEMPLATE', 'V�laszd ki a sablont, amit a blog-odhoz haszn�lni szeretn�l');
@define('DATABASE_ERROR', 'serendipity hiba: nem tudok kapcsol�dni az adatb�zishoz - kil�pek.');
@define('LIMIT_TO_NUMBER', 'H�ny elemet mutassunk?');
@define('DIRECTORIES_AVAILABLE', 'A l�tez� alk�nyvt�rak list�j�ban, egy k�nyvt�rra kattintva �j k�nyvt�rakat hozhatsz l�tre abban a strukt�r�ban.');
@define('CATEGORY_INDEX', 'A bejegyz�sek sz�m�ra el�rhet� kateg�ri�k');
@define('PAGE_BROWSE_PLUGINS', '%s oldal ennyib�l: %s, �sszes modul: %s');
@define('CHARSET_NATIVE', 'Nat�v (be�p�tett)');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Az XML-RPC API Interf�sz a Serendipity-hez, t�bb� nincs haszn�latban, mivel vannak biztons�gi probl�m�i, �s nem sokan haszn�lj�k. �gy telep�tened kell az XML-RPC modult ahhoz hogy haszn�ld az XML-RPC API-t. Az alkalmaz�sban haszn�land� URL nem v�ltozik - telep�t�s ut�n haszn�lhat�.');
@define('AUTHORS_ALLOW_SELECT', 'A l�togat�k t�bb szerz�t is megjelen�thetnek egyszerre?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Ha ezt enged�lyezed, akkor ebben a marg�ban, minden szerz� mellett lesz egy jel�l�n�gyzet. A l�togat�k �gy v�laszthatj�k ki azokat a szerz�ket, akiknek a bejegyz�seit szeretn�k l�tni.');
@define('PREFERENCE_USE_JS', 'Halad� JavaScript enged�lyez�se?');
@define('PREFERENCE_USE_JS_DESC', 'Ha ezt enged�lyezed, akkor halad� JavaScript-et haszn�lunk, p�ld�ul a modul be�ll�t�sokn�l �thelyezheted a modul dobozokat a fogd �s vidd m�dszerrel.');
@define('PREFERENCE_USE_JS_WARNING', '(Az oldal halad� JavaScript-et haszn�l. Amennyiben funkcion�lis probl�m�id vannak, tiltsd le ezt a szem�lyes be�ll�t�saidn�l, vagy a b�ng�sz�d JavaScript haszn�lat�t)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
