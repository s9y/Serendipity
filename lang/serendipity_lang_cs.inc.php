<?php
# lang_cs.inc.php 1.10 2012-01-08 18:34:17 VladaAjgl $

/**
 *  @version 1.10
 *  Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
 *  All rights reserved.  See LICENSE file for licensing details
 *  Translation (c) 2004 Josef Klimosz <ok2wo@centrum.cz>
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/23
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/07/14
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/25
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/02/06
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/05/02
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/09/12
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/12/25
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/04/17
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2012/01/08
 */
$i18n_filename_from = array (
'á','è','ï','é','ì','í','å','¾','ò','ó','à','ø','œ','š','','ú','ù','ı','Ÿ','',
'Á','È','Ï','É','Ì','Í','Å','¼','Ò','Ó','À','Ø','Œ','Š','','Ú','Ù','İ','','',
' ',',','.','!',
);
$i18n_filename_to = array (
'a','c','d','e','e','i','l','l','n','o','r','r','s','s','t','u','u','y','z','z',
'A','C','D','E','E','I','L','L','N','O','R','R','S','S','T','U','U','Y','Z','Z',
'-', '', '', '',
);
@define('LANG_CHARSET', 'windows-1250');
@define('SQL_CHARSET', 'cp1250');
@define('DATE_LOCALES', 'cs_CZ.windows-1250, czech, cs');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'cs-win');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', ' ');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'Ukázat');
@define('DATE', 'Datum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Vzhled');
@define('LOGIN', 'Pøihlášení');
@define('LOGOUT', 'Odhlášení');
@define('LOGGEDOUT', 'Odhlášen');
@define('CREATE', 'Vytvoøit');
@define('BACK', 'Zpìt');
@define('FORWARD', 'Dále');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nové...');
@define('OLDER', 'Starší...');
@define('DONE', 'Hotovo');
@define('TITLE', 'Titulek');
@define('DESCRIPTION', 'Popis');
@define('PLACEMENT', 'Umístìní');
@define('DELETE', 'Vymazat');
@define('SAVE', 'Uloit');
@define('UP', 'Nahoru');
@define('DOWN', 'Dolù');
@define('PREVIOUS', 'Pøedchozí');
@define('NEXT', 'Další');
@define('ENTRIES', 'záznamy');
@define('CATEGORIES', 'Kategorie');
@define('NAME', 'Jméno');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Domácí stránka');
@define('COMMENT', 'Komentáø');
@define('VIEW', 'Ukázat');
@define('HIDE', 'Skrıt');
@define('WEEK', 'Tıden');
@define('WEEKS', 'Tıdny');
@define('MONTHS', 'Mìsíce');
@define('DAYS', 'Dny');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Úspìch');
@define('COMMENTS', 'Komentáøe');
@define('ADD_COMMENT', 'Pøidat komentáø');
@define('NO_COMMENTS', 'ádné komentáøe');
@define('POSTED_BY', 'Vloil');
@define('ON', 'v');
@define('NO_CATEGORY', 'ádná kategorie');
@define('CATEGORY', 'Kategorie');
@define('EDIT', 'Editace');
@define('GO', 'Provést!');
@define('YES', 'Ano');
@define('NO', 'Ne');
@define('NOT_REALLY', 'Nechci...');
@define('DUMP_IT', 'Vymazat!');
@define('IN', 've');
@define('AT', 'v');
@define('LEFT', 'vlevo');
@define('RIGHT', 'vpravo');
@define('CENTER', 'center');
@define('ARCHIVES', 'Archivy');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Rychlé hledání');
@define('TRACKBACKS', 'Odezvy');
@define('TRACKBACK', 'Odezva');
@define('NO_TRACKBACKS', 'ádné odezvy');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Vıpis');
@define('TRACKED', 'Sledován');
@define('USER', 'Uivatel');
@define('USERNAME', 'Jméno (pøezdívka)');
@define('PASSWORD', 'Heslo');
@define('HIDDEN', 'skrytı');
@define('IMAGE', 'Obrázek');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verze');
@define('INSTALL', 'Instalovat');
@define('REPLY', 'Odpovìï');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Chyba');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Souhrn');
@define('MORE', 'More');
@define('FORCE', 'Vnutit');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administrace');
@define('ADMIN_FRONTPAGE', 'Hlavní stránka');
@define('QUOTE', 'Citace');
@define('NONE', 'nic');
@define('GROUP', 'Skupina');
@define('AUTHORS', 'Autoøi');
@define('UPGRADE', 'Aktualizace');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Všichni autoøi');
@define('PREVIOUS_PAGE', 'pøedchozí stránka');
@define('NEXT_PAGE', 'další stránka');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Všechny kategorie');
@define('LAST_UPDATED', 'Naposled zmìnìno');
@define('IP_ADDRESS', 'IP adresa');
@define('CHARSET', 'Znaková sada');
@define('REFERER', 'Odbìratel');
@define('APPROVE', 'Povolit');
@define('NOT_FOUND', 'Není obsaen');
@define('WRITABLE', 'Zapisovatelnı');
@define('NOT_WRITABLE', 'Nezapisovatelnı');
@define('WELCOME_BACK', 'Vítejte zpìt,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Seøadit podle');
@define('SORT_ORDER', 'Poøadí');
@define('SORT_ORDER_ASC', 'Vzestupnì');
@define('SORT_ORDER_DESC', 'Sestupnì');
@define('FILTERS', 'Filtry');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Otevøít vše');
@define('TOGGLE_OPTION', 'Otevøít volbu');
@define('IN_REPLY_TO', 'Odpovìï na');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Adresáø');
@define('BACK_TO_BLOG', 'Zpìt do weblogu');
@define('HTML_NUGGET', 'Vloenı HTML kód');
@define('TITLE_FOR_NUGGET', 'Název HTML kódu');
@define('COMMENT_ADDED', 'Váš komentáø byl úspìšnì pøidán.');
@define('ENTRIES_FOR', 'Záznamy: %s');
@define('NO_ENTRIES_TO_PRINT', 'ádné záznamy k zobrazení');
@define('COMMENT_DELETE_CONFIRM', 'Jste si jist vymazáním komentáøe #%d, zapsaného %s?');
@define('DELETE_SURE', 'Urèitì chcete vymazat #%s natrvalo?');
@define('MEDIA_FULLSIZE', 'Plnı rozmìr');
@define('SIDEBAR_PLUGIN', 'postranní plugin');
@define('EVENT_PLUGIN', 'plugin události');
@define('PLUGIN_ITEM_DISPLAY', 'Kde by mìla bıt tato poloka zobrazena?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'V rozšíøené èásti');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'V pøehledu');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'V obou èástech');
@define('DIRECTORY_WRITE_ERROR', 'Nelze zapisovat do adresáøe %s - provìøte oprávnìní.');
@define('FILE_WRITE_ERROR', 'Nelze zapisovat do souboru %s.');
@define('INCLUDE_ERROR', 'chyba serendipity: nelze vloit %s - ukonèeno.');
@define('DO_MARKUP', 'Umonit pøevod znaèek');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formátování data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formát aktuálního data záznamu, pouívá PHP promìnnou strftime(). (Pøednastaveno: "%s")');
@define('APPLY_MARKUP_TO', 'Zapnout znaèkování %s');
@define('XML_IMAGE_TO_DISPLAY', 'Znak XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Odkazy na XML kanály budou zobrazeny s tímto znakem. Nechejte prázdné pro pùvodní nastavení, nebo zadejte \'none\' pro vypnutí.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Vymazání souboru %s...');
@define('SETTINGS_SAVED_AT', 'Nové nastavení bylo uloeno v %s');
@define('INVERT_SELECTIONS', 'Obrátit vıbìr');

@define('PERSONAL_SETTINGS', 'Osobní nastavení');
@define('DO_MARKUP_DESCRIPTION', 'Pøevést znaèky na text (smajlíky, zkratky *, /, _, ...). Vypnutí této volby zajistí uloení HTML kódù v textu.');
@define('BASE_DIRECTORY', 'Základní adresáø');
@define('PERM_READ', 'Právo na ètení');
@define('PERM_WRITE', 'Právo na zápis');
@define('PERM_DENIED', 'Pøístup odepøen.');
@define('CURRENT_AUTHOR', 'Aktuální autor');
@define('PLUGIN_ACTIVE', 'Aktivní');
@define('PLUGIN_INACTIVE', 'Neaktivní');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Ulote tento odkaz do oblíbenıch záloek a pouijte záloku na jakékoliv stránkce, o které chcete psát. Záloka Vás rychle pøepne do Vašeho Serendipity Blogu.');
@define('SET_TO_MODERATED', 'Schválit');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalace Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Vítejte v instalaci Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Nejdøíve se podíváme na vaše základní nastavení a zkusíme diagnostikovat pøípadné problémy');
@define('ERRORS_ARE_DISPLAYED_IN', 'Chyby budou zobrazeny %s, doporuèení %s a úspìch %s');
@define('RED', 'èervenì');
@define('YELLOW', 'lutì');
@define('GREEN', 'zelenì');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - pøedinstalaèní zpráva');
@define('INTEGRITY', 'Kontrola integrity instalace');
@define('PHP_INSTALLATION', 'Instalace PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operaèní systém');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'konfigurace php.ini');
@define('RECOMMENDED', 'Doporuèeno');
@define('ACTUAL', 'Aktuální');
@define('PERMISSIONS', 'Oprávnìní');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Oprávnìní mùe bıt nastaveno s pouitím povelu: `<em>%s</em>` v adresáøi, nebo nastavením pomocí FTP programu');
@define('PROBLEM_DIAGNOSTIC', 'Byly diagnostikovány problémy, take nelze pokraèovat v instalaci, dokud nebudou odstranìny');
@define('SELECT_INSTALLATION_TYPE', 'Vyberte typ instalace');
@define('RECHECK_INSTALLATION', 'Pøekontrolovat instalaci');
@define('SIMPLE_INSTALLATION', 'Jednoduchá instalace');
@define('EXPERT_INSTALLATION', 'Expertní instalace');
@define('COMPLETE_INSTALLATION', 'Kompletní instalace');
@define('WONT_INSTALL_DB_AGAIN', 'nebude se znovu instalovat databáze');
@define('THEY_DO', 'existují');
@define('THEY_DONT', 'neexistují');
@define('CHECK_DATABASE_EXISTS', 'Kontrola, jestli databáze a tabulky opravdu existují');
@define('CREATE_DATABASE', 'Vytvoøení základní databáze...');
@define('ATTEMPT_WRITE_FILE', 'Pokus uloit soubor %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Vytvoøení hlavního autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Nastavení defaultního vzoru');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalace defaultních pluginù');
@define('SERENDIPITY_INSTALLED', 'Serendipity byl úspìšnì nainstalován');
@define('VISIT_BLOG_HERE', 'Zde se pøepnete do svého nového weblogu');
@define('THANK_YOU_FOR_CHOOSING', 'Dìkujeme za volbu Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Pøi instalaci byla detekována chyba');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Vytvoøeno pomocí');
@define('ADMIN_FOOTER_POWERED_BY', 'Vytvoøeno pomocí Serendipity %s a PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Autor');
@define('USERLEVEL_CHIEF_DESC', 'Redaktor');
@define('USERLEVEL_ADMIN_DESC', 'Administrátor');
@define('WWW_USER', 'Zmìòte www na uivatele, kterı je urèen v Apache (na pø. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Adresáø %s neexistuje a nemohl bıt vytvoøen. Vytvoøte adresáø manuálnì.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; spustit <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nelze spustit binární soubor %s.');
@define('FILE_CREATE_YOURSELF', 'Vytvoøte soubor pøímo nebo provìøte oprávnìní');
@define('COPY_CODE_BELOW', '<br />* Zkopírujte kód uvedenı níe a umístìte jej do %s ve vašem %s adresáøi:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Po dokonèení stisknìte tlaèítko obnovení stránky ve vašem prohlíeèi.');
@define('ERROR_TEMPLATE_FILE', 'Nelze otevøít vzorovı soubor, updatujte Serendipity!');
@define('HTACCESS_ERROR', 'Provìøte instalaci vašeho webserveru, Serendipity potøebuje uloit soubor ".htaccess". To nebylo moné kvùli chybì oprávnìní. Nastavte oprávnìní jako: <br />&nbsp;&nbsp;%s<br />a znovu ulote tuto stránku.');
@define('EMPTY_SETTING', 'Nespecifikoval jste platnou hodnotu pro "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Vyadováno pouze pokud chcete v budoucnu vyuívat plugin Spartacus pro stahování novıch pøídavnıch modulù.)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity detekoval, e vaše konfigurace je uloena ve verzi %s, ale serendipity je instalován jako verze %s, je potøeba upgrade! <a href="%s">Kliknìte zde</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Vítá vás manaer upgrade Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Pomohu vám s upgrade vaší instalace Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Tato zpráva je zobrazena proto, e vaše instalace je Serendipity %s, ale ještì nebyla updatována databáze pro tuto verzi');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Update databáze (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Zde jsou .sql soubory, která musíte spustit pøed pokraèováním práce se Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Úlohy specifické pro tuto verzi');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'ádné specifické úlohy');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Mohu pokraèovat v tìchto úlohách?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Ne, spustím je manuálnì');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ano, pokraèujte');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Není tøeba ádnı upgrade');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity je upgradován');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vynechal jste stupeò upgrade Serendipity, ujistìte se, e databáze je správnì nainstalována a plánované funkce jsou spuštìny');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Vaše instalace Serendipity je upgradována na %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Kliknutím %ssem%s se vrátíte do vašeho weblogu');
@define('ADMIN_ENTRIES', 'Záznamy');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nebylo moné se spojit s databází MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nebylo moné vybrat databázi: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nebylo moné vybrat uivatelské informace: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nebylo moné vybrat informace o kategorii: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nebylo moné vybrat informace o záznamu: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nebylo moné vybrat informace o komentáøi: %s.');
@define('MYSQL_REQUIRED', 'Pro provedení této akce je nutné mít databázi MySQL.');
@define('CREATE_AUTHOR', 'Vytvoøit autora \'%s\'.');
@define('CREATE_CATEGORY', 'Vytvoøit kategorii \'%s\'.');
@define('MT_DATA_FILE', 'Soubory Movable Type');
@define('INSTALL_DBPORT', 'Port databáze');
@define('INSTALL_DBPORT_DESC', 'Port pouitı pro spojení k vašemu databázovému serveru');
@define('IMPORT_PLEASE_ENTER', 'Vlote data poadovaná níe');
@define('IMPORT_NOW', 'Importovat!');
@define('IMPORT_STARTING', 'Start importu...');
@define('IMPORT_FAILED', 'Import se nezdaøil');
@define('IMPORT_DONE', 'Import úspìšnì dokonèen');
@define('IMPORT_WEBLOG_APP', 'Weblogová aplikace');
@define('IMPORT_NOTES', 'Poznámka:');
@define('IMPORT_STATUS', 'Stav po importu');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import (rozšíøenı WordPress RSS import), vyaduje PHP5 a mùe vyadovat pøíliš mnoho pamìti');
@define('RSS_IMPORT_BODYONLY', 'Uloit celı importovanı text do "hlavní" èásti, nerozdìlovat do "rozšíøené" èásti.');
@define('IMPORT_GENERIC_RSS', 'Základní RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Odeslat odezvy na odkazy obsaené v záznamu');
@define('RSS_IMPORT_CATEGORY', 'Pouít tuto kategorii pro neurèené záznamy');
@define('IMPORT_WP_PAGES', 'Zobrazovat jako obyèejné pøíspìvky blogu i pøílohy a statické stránky?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nebyl nalezen.');
@define('CONVERT_HTMLENTITIES', 'Zkusit automatickou konverzi HTML entit?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administrátorská sekce');
@define('WRONG_USERNAME_OR_PASSWORD', 'Zøejmì jste vloil špatné jméno nebo heslo!');
@define('PLEASE_ENTER_CREDENTIALS', 'Zadejte prosím pøihlašovací údaje.');
@define('AUTOMATIC_LOGIN', 'Uloit informace');
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
@define('MEDIA', 'Média (obrázky)');
@define('MEDIA_LIBRARY', 'Knihovna médií');
@define('ADD_MEDIA', 'Pøidat');
@define('MANAGE_DIRECTORIES', 'Práce s adresáøi');
@define('CONFIGURATION', 'Konfigurace');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Další odkazy');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Domovská stránka Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Dokumentace Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Oficiální blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Fórum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Tento záznam ještì není publikován.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lokální dokumentace');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Historie verzí');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Pluginy pro postranní sloupce');
@define('EVENT_PLUGINS', 'Pluginy událostí');
@define('CONFIGURE_PLUGINS', 'Konfigurace pluginù');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Nesplnìné poadavky: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aktualizace na verzi %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Kliknìte a instalujte novı %s');
@define('ALREADY_INSTALLED', 'Instalován');
@define('PLUGIN_AVAILABLE_COUNT', 'Celkem: %d pluginù.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Editovat záznamy');
@define('EDIT_ENTRY', 'Editovat záznam');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Koncept');
@define('PUBLISH', 'Publikovat');
@define('CONTENT', 'Obsah');
@define('ENTRIES_PER_PAGE', 'záznamù na stránku');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Pøilepené záznamy');
@define('PAGE_BROWSE_ENTRIES', 'Stránka %s z %s, celkem %s záznamù');
@define('FIND_ENTRIES', 'Hledat záznamy');
@define('RIP_ENTRY', 'Zrušen záznam #%s');
@define('NEW_ENTRY', 'Novı záznam');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Text záznamu');
@define('EXTENDED_BODY', 'Rozšíøená textová èást');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Koncept tohoto záznamu byl uloen');
@define('IFRAME_PREVIEW', 'Serendipity nyní vytváøí náhled vašeho záznamu...');
@define('IFRAME_WARNING', 'Váš prohlíeè nepodporuje iframe. Otevøete soubor serendipity_config.inc.php a nastavte promìnnou $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Upozornìní: Datum je specifikováno špatnì. Pouijte formát YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Rozšíøené volby');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tento odkaz není mínìn jako klikatelnı. Obsahuje zpìtné URI záznamu. Tento URI mùete pouít k odesílání pingù a sledování odezvy na tento záznam. Odkaz zkopírujete kliknutím pravou myší a volbou "Kopírovat odkaz" v Internet Exploreru nebo "Zkopírovat umístìní odkazu" v Mozille.');
@define('RESET_DATE', 'Resetovat datum');
@define('RESET_DATE_DESC', 'Kliknìte a resetujte datum na aktuální');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Správa uivatelù');
@define('CREATE_NEW_USER', 'Vytvoøit nového uivatele');
@define('CREATE_NOT_AUTHORIZED', 'Nemùete editovat uivatele se stejnou úrovní jako je vaše');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nemùete vytvoøit uivatele s vyšší úrovní ne je vaše');
@define('CREATED_USER', 'Novı uivatel %s byl vytvoøen');
@define('MODIFIED_USER', 'Nastavení uivatele %s byla zmìnìna');
@define('USER_LEVEL', 'Úroveò');
@define('WARNING_NO_GROUPS_SELECTED', 'Varování: Nezvolili jste si èlenství v ádné skupinì. To by vás vylouèilo z øízení práv uivatelskıch skupin, a proto vaše èlenství ve skupinì nebude zmìnìno.');
@define('DELETE_USER', 'Chcete vymazat uivatele #%d %s. Myslíte to vánì? Tato akce znemoní prohlíet jím vytvoøené záznamy na hlavní stránce.');
@define('DELETED_USER', 'Uivatel #%d %s je vymazán.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Upravuj skupiny');
@define('DELETED_GROUP', 'Skupina #%d %s smazána.');
@define('CREATED_GROUP', 'Nová skupina %s byla vytvoøena');
@define('MODIFIED_GROUP', 'Vlastnosti skupiny %s byly zmìnìny');
@define('CREATE_NEW_GROUP', 'Vytvoøit novou skupinu');
@define('DELETE_GROUP', 'Chystáte se smazat skupinu #%d %s. Myslíte to vánì?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hledat komentáøe');
@define('COMMENTS_FILTER_SHOW', 'Zobrazit');
@define('COMMENTS_FILTER_ALL', 'Vše');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Pouze povolené');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Èekající na povolení');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Èeká na potvrzení uivatelem');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Jste se jist vymazáním vybranıch komentáøù?');
@define('PAGE_BROWSE_COMMENTS', 'Stránka %s ze %s, celkem %s komentáøù');
@define('COMMENT_IS_DELETED', '(Komentáø odstranìn)');
@define('COMMENT_MODERATED', 'Komentáø è.%s byl úspìšnì nastaven jako schválenı');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Odebíráno');

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
@define('CATEGORY_SAVED', 'Kategorie uloena');
@define('CATEGORY_ALREADY_EXIST', 'Kategorie nazvaná "%s" skuteènì existuje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategorie #%s byla zrušena. Starší záznamy byly pøemístìny do #%s');
@define('CATEGORY_DELETED', 'Kategorie #%s byla zrušena.');
@define('INVALID_CATEGORY', 'ádná kategorie nebyla urèena k vymazání');
@define('EDIT_THIS_CAT', 'Editace "%s"');
@define('CATEGORY_REMAINING', 'Vymazat kategorii a pøemístit záznamy do kategorie');
@define('PARENT_CATEGORY', 'Nadøazená kategorie');
@define('CATEGORY_HIDE_SUB', 'Schovat pøíspìvky z podkategorií?');
@define('CATEGORY_HIDE_SUB_DESC', 'Pokud je zobrazená kategorie, standardnì se zobrazují i všechny pøíspìvky z jejích podkategorií. Pokud je volba zapnuta, budou se zobrazovat jen a pouze pøíspìvky z vybrané kategorie.');
@define('CREATE_NEW_CAT', 'Vytvoøení nové kategorie');
@define('ALREADY_SUBCATEGORY', '%s je opravdu subkategorie pod %s.');
@define('NO_CATEGORIES', 'ádné kategorie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Není moné porovnat kontrolní souèty! (v základním adresáøi chybí soubor checksums.ini.php)');
@define('CHECKSUMS_PASS', 'Všechny soubory zkontrolovány.');
@define('CHECKSUM_FAILED', 'Kontrola selhala: %s je poškozenı nebo pozmìnìnı');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import dat');
@define('EXPORT_ENTRIES', 'Export záznamù');
@define('EXPORT_FEED', 'Exportovat plnı RSS kanál');
@define('CREATE_THUMBS', 'Vytvoøit náhledy');
@define('WARNING_THIS_BLAHBLAH', "POZOR:\\nTato akce mùe trvat déle, pokud máte mnoho obrázkù bez náhledù.");
@define('SYNC_OPTION_LEGEND', 'Volby synchronizace náhledù obrázkù');
@define('SYNC_OPTION_KEEPTHUMBS', 'Zachovat všechny existující náhledy');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Zachovat existující náhledy pouze pokud mají správnou velikost');
@define('SYNC_OPTION_DELETETHUMBS', 'Znovu vytvoøit všechny náhledy');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' byl nastaven jako defaultní vzor (template)');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varování: Váš vzor pouívá nepovolenou metodu, je-li to moné, proveïte aktualizaci');
@define('STYLE_OPTIONS_NONE', 'Toto téma/styl nemá specifické volby. Pokud chcete vìdìt, jak mùete pro svoje šablony nastavit specifické volby, ètìte Technical Documentation na www.s9y.org  "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Volby pro téma/stylu');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Je upravené prostøedí pro administraci');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Nastavit jako vzor');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Provìøit a uloit');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Odstranit oznaèené pluginy');
@define('SAVE_CHANGES_TO_LAYOUT', 'Uloit zmìny layoutu');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizace databáze s adresáøem obrázkù');
@define('SYNC_DONE', 'Hotovo (synchronizováno %s obrázkù).');
@define('RESIZE_BLAHBLAH', '<b>Zmìnit rozmìr %s</b>');
@define('ORIGINAL_SIZE', 'Pùvodní rozmìr: <i>%sx%s</i> pixelù');
@define('RESIZING', 'Zmìna rozmìrù');
@define('RESIZE_DONE', 'Hotovo (upraven rozmìr %s obrázkù).');
@define('KEEP_PROPORTIONS', 'Zachovat proporce');
@define('REALLY_SCALE_IMAGE', 'Opravdu zmìnit rozmìr? Nelze vrátit!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Zde mùete zadat novı rozmìr obrázku. Pokud chcete zachovat proporce, zadejte jen jednu hodnotu a stisknìte klávesu TAB, novı rozmìr bude dopoèítán automaticky:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Novı rozmìr: ');
@define('SCALING_IMAGE', 'Zmìna %s na %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Adresáøe a soubory byly úspìšnì pøesunuty do  %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Adresáøe a soubory nemohly bıt pøesunuty do  %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Adresáø <strong>%s</strong> byl vytvoøen.');
@define('PARENT_DIRECTORY', 'Základní adresáø');
@define('CONFIRM_DELETE_DIRECTORY', 'Jste si jist, e chcete odstranit všechen obsah adresáøe %s?');
@define('ERROR_NO_DIRECTORY', 'Chyba: Adresáø %s neexistuje');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nelze odstranit neprázdnı adresáø. Zkuste zvolit "vynucené mazání", pokud potøebujete vymazat tyto soubory, a odešlete poadavek znovu. Existující soubory jsou:');
@define('DIRECTORY_DELETE_FAILED', 'Vymazání adresáøe %s se nepodaøilo. Zkontrolujte oprávnìní nebo ètìte zprávu vıše.');
@define('DIRECTORY_DELETE_SUCCESS', 'Adresáø %s byl úspìšnì vymazán.');
@define('CHECKING_DIRECTORY', 'Kontrola souborù v adresáøi %s');
@define('DELETE_DIRECTORY', 'Vymazat adresáø');
@define('DELETE_DIRECTORY_DESC', 'Chcete vymazat obsah adresáøe, obsahující mediální soubory, které mohou bıt pouívány ve vašich záznamech.');
@define('FORCE_DELETE', 'Vymazat VŠECHNY soubory v adresáøi, vèetnì tìch, které nejsou vytvoøeny pomocí Serendipity');
@define('CREATE_DIRECTORY', 'Vytvoøit adresáø');
@define('CREATE_NEW_DIRECTORY', 'Vytvoøit novı adresáø');
@define('CREATE_DIRECTORY_DESC', 'Zde mùete vytvoøit adresáø pro ukládání mediálních souborù. Zvolte název adresáøe a pøípadnı nadøízenı adresáø.');
@define('ABOUT_TO_DELETE_FILE', 'Chcete vymazat <b>%s</b><br />Jestlie pouíváte tento soubor v nìjakıch záznamech, zpùsobí to nepøístupnost odkazù nebo obrázkù.<br />Chcete pøesto pokraèovat?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Chyba: Soubor u ve vašem poèítaèi existuje!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nelze nalézt soubor s názvem <b>%s</b>, moná je opravdu vymazán?');
@define('ERROR_FILE_FORBIDDEN', 'Nejste oprávnìn nahrávat soubory s aktivním obsahem');
@define('REMOTE_FILE_NOT_FOUND', 'Soubor nebyl na vzdáleném serveru nalezen, jste si jist e URL: <b>%s</b> je správné?');
@define('FILE_FETCHED', '%s nalezen');
@define('FILE_UPLOADED', 'Soubor %s je úspìšnì nahrán.');
@define('DELETE_FILE_FAIL', 'Nezdaøilo se vymazat soubor <b>%s</b>');
@define('DELETE_FILE', 'Vymazat soubor s názvem <b>%s</b>');
@define('FOUND_FILE', 'Zaloit novı/zmìnit soubor: %s.');
@define('FILENAME_REASSIGNED', 'Automaticky pøidìlené nové jméno souboru: %s');
@define('ERROR_FILE_EXISTS', 'Chyba: Toto jméno souboru je u pouito, zvolte jiné!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'odkazován');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Novı název: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Pøidání obrázku...');
@define('THUMB_CREATED_DONE', 'Náhled je vytvoøen.<br>Hotovo.');
@define('THUMBNAIL_USING_OWN', '%s je pouit jako vlastní náhled, protoe je pøíliš malı.');
@define('THUMBNAIL_FAILED_COPY', '%s nelze pouít jako vlastní náhled, nebo jej nelze zkopírovat!');
@define('DELETE_THUMBNAIL', 'Vymazán náhled obrázku s názvem <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Neznámá chyba, soubor nebyl nahrán. Je moné, e délka souboru pøekraèuje maximum, povolené serverem. Spojte se s vaším ISP nebo editujte soubor php.ini a povolte vìtší velikost.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Chyba: Nemùete uploadovat soubory vìtší ne  %s bytù!');
@define('MEDIA_UPLOAD_DIMERROR', 'Chyba: Nemùete uploadovat soubory obrázkù vìtší ne  %s x %s pixelù!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Soubor pøipojen odkazem.<br />Hotovo.');
@define('DELETE_HOTLINK_FILE', 'Vymazán odkazovanı soubor <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nelze spustit: "%s", chyba: %s, vrací promìnnou: %d');
@define('SKIPPING_FILE_EXTENSION', 'Vynechán soubor: Chybìjící pøípona %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Vynechán soubor: %s nelze naèíst.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Nastavte shodná práva pro všechny podøízené adresáøe');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Pouít náhled.');
@define('I_WANT_BIG_IMAGE', 'Pouít celı obrázek.');
@define('I_WANT_NO_LINK', 'Zobrazit jako obrázek');
@define('I_WANT_IT_TO_LINK', 'Zobrazit jako odkaz (URL):');
@define('MEDIA_ALT', 'Atribut ALT (popis nebo krátkı popis)');
@define('MEDIA_TITLE', 'Atribut TITLE (zobrazuje se pøi najetí myší na obrázek)');
@define('IMAGE_SIZE', 'Obrázek o rozmìru');
@define('IMAGE_ALIGNMENT', 'Úprava obrázku');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Vloení obrázku');
@define('MEDIA_TARGET', 'Cíl odkazu');
@define('MEDIA_TARGET_JS', 'Popup okno (pomocí JavaScriptu, pøizpùsobitelná velikost)');
@define('MEDIA_ENTRY', 'Samostatnı pøíspìvek');
@define('MEDIA_TARGET_BLANK', 'Popup okno (pomocí target=_blank)');
@define('YOU_CHOSE', 'Vybral jste %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Otoèit o 90 stupòù doleva');
@define('IMAGE_ROTATE_RIGHT', 'Otoèit o 90 stupòù doprava');
@define('MEDIA_RENAME', 'Pøejmenovat soubor');
@define('THUMBNAIL_SHORT', 'Náhl.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Název souboru');
@define('SORT_ORDER_EXTENSION', 'Rozšíøení');
@define('SORT_ORDER_SIZE', 'Velikost');
@define('SORT_ORDER_WIDTH', 'Šíøka obrázku');
@define('SORT_ORDER_HEIGHT', 'Vıška obrázku');
@define('SORT_ORDER_DATE', 'Datum nahrání');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Pøidat soubor do schránky médií:</b><p>Zde mùete ukládat mediální soubory, nebo urèit, kde je získat z WEBu! Pokud nemáte odpovídající obrázek, <a href="https://images.google.com/" target="_blank">hledejte na Google</a> odpovìï na vaši potøebu, obvykle se zadaøí :).<p><b>Vyberte metodu:</b><br>');
@define('ENTER_MEDIA_URL', 'Vlote URL pøidávaného souboru:');
@define('ENTER_MEDIA_UPLOAD', 'Vyberte soubor pro nahrání:');
@define('SAVE_FILE_AS', 'Uloit soubor jako:');
@define('STORE_IN_DIRECTORY', 'Uloit do následujího adresáøe: ');
@define('IMAGE_MORE_INPUT', 'Pøidat více obrázkù');
@define('ENTER_MEDIA_URL_METHOD', 'Zpùsob pøipojení:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Poznámka: Pokud zvolíte odkaz na server, ujistìte se, e máte potøebná práva, nebo e jde o váš web. Odkazy vám umoní vyuívat obrázky z jinıch ne místních zdrojù.');
@define('FETCH_METHOD_IMAGE', 'Nahrání na server');
@define('FETCH_METHOD_HOTLINK', 'Odkaz na server');
@define('GO_ADD_PROPERTIES', 'Zadej vlastnosti');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zmìnit rozmìr obrázku');
@define('MEDIA_DELETE', 'Vymazat soubor');
@define('FILES_PER_PAGE', 'Souborù na stránku');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'ádné obrázky');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'všechny adresáøe');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigurace byla zapsána a uloena');
@define('DIAGNOSTIC_ERROR', 'Diagnostika detekovala nìjaké chyby ve vkládanıch informacích:');
@define('FULL_COMMENT_TEXT', 'Ano, s plnım znìním komentáøe');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Databáze');
@define('INSTALL_CAT_DB_DESC', 'Sem vlote všech informace o databázi. Serendipity je potøebuje k funkci.');
@define('INSTALL_DBTYPE', 'Typ');
@define('INSTALL_DBTYPE_DESC', 'Typ databáze');
@define('INSTALL_DBHOST', 'Hostitel');
@define('INSTALL_DBHOST_DESC', 'Název hostitelského serveru');
@define('INSTALL_DBUSER', 'Uivatel');
@define('INSTALL_DBUSER_DESC', 'Uivatelské jméno');
@define('INSTALL_DBPASS', 'Heslo');
@define('INSTALL_DBPASS_DESC', 'Uivatelské heslo');
@define('INSTALL_DBNAME', 'Název');
@define('INSTALL_DBNAME_DESC', 'Název databáze');
@define('INSTALL_DBPREFIX', 'Prefix');
@define('INSTALL_DBPREFIX_DESC', 'Prefix pro záznamy v databázi, napø. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Pouít trvalé pøipojení');
@define('INSTALL_DBPERSISTENT_DESC', 'Umonit trvalé pøipojení k databázi, více <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">zde</a>. Bìnì to není doporuèeno');
@define('INSTAL_DB_UTF8', 'Povolit DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Vyvolá dotaz MySQL "SET NAMES", aby se zjistila poadovaná znaková sada pro databázi. Zapnìte to nebo vypnìte, pokud se vám na blogu objevují  podivné znaky.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cesty');
@define('INSTALL_CAT_PATHS_DESC', 'Cesty k rùznım adresáøùm a souborùm. Nezapomeòte na ukonèovací lomítko pro adresáøe!');
@define('INSTALL_FULLPATH', 'Úplná cesta');
@define('INSTALL_FULLPATH_DESC', 'Úplná absolutní cesta k vaší instalaci Serendipity.');
@define('INSTALL_UPLOADPATH', 'Cesta pro uploady');
@define('INSTALL_UPLOADPATH_DESC', 'Sem budou smìrovány uploady, relativnì k \'úplné cestì\' - typicky \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativní cesta');
@define('INSTALL_RELPATH_DESC', 'Cesta k Serendipity pro váš prohlíeè, typicky \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativní cesta k template');
@define('INSTALL_RELTEMPLPATH_DESC', 'Cesta k adresáøi, obsahujícímu vzory (templates) - relativní k \'relativní cestì\'');
@define('INSTALL_RELUPLOADPATH', 'Relativní cesta k uploadùm');
@define('INSTALL_RELUPLOADPATH_DESC', 'Cesta k uploadùm pro prohlíeèe - relativní k \'relativní cestì\'');
@define('INSTALL_URL', 'URL weblogu');
@define('INSTALL_URL_DESC', 'Základní URL vaší instalace Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetekce pouité HTTP hostitelské adresy');
@define('INSTALL_AUTODETECT_URL_DESC', 'Pøi volbì "Ano" bude Serendipity pøedpokládat, e HTTP adresa hostitele, pouitá návštìvníkem, je vaše základní nastavení URL. Zapnutí umoní pouívání rùznıch domén k pøístupu na vaše stránky, a pouití této jedné domény pro všechny odkazy ke sledování zmìn na stránkách.');
@define('INSTALL_INDEXFILE', 'Indexovı soubor');
@define('INSTALL_INDEXFILE_DESC', 'Název souboru pouitého jako index');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Trvalé odkazy');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definuje rùzné vzory  URL patterns pro definici trvalıch odkazù (permanent links) ve vašem blogu. Doporuèujeme pouít defaultní nastavení; pokud ne, mìli byste zkusit pouít hodnotu %id% tam, kde je to moné, abyste pøedešli dotazùm do databáze pøi hledání cílové URL.');
@define('INSTALL_PERMALINK', 'Struktura URL trvalıch odkazù');
@define('INSTALL_PERMALINK_DESC', 'Zde mùete definovat relativní strukturu URL, kde zaèátek je vaše base URL, z ní mohou bıt  pøíspìvky dostupné. Mùete pouít promìnné  %id%, %title%, %day%, %month%, %year% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_AUTHOR', 'Struktura URL autorù');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Zde mùete definovat relativní strukturu URL, kde zaèátek je vaše base URL, z ní mohou bıt dostupné pøíspìvky urèitıch autorù.  Mùete pouít promìnné %id%, %realname%, %username%, %email% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_CATEGORY', 'Struktura URL kategorií');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Zde mùete definovat relativní strukturu URL, kde zaèátek je vaše base URL, z ní mohou bıt dostupné urèité kategorie. Mùete pouít promìnné  %id%, %name%, %parentname%, %description% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Struktura URL trvalıch odkazù kategorií RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Zde mùete definovat relativní strukturu URL, kde zaèátek je vaše base URL, z ní mohou bıt dostupné  RSS kanály z urèitıch kategorií. Mùete pouít promìnné %id%, %name%, %description% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Struktura URL adresy pro RSS kanál autorù');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Zde mùete definovat relativní strukturu URL, kde zaèátek je vaše base URL, z ní mohou bıt bıt dostupné RSS kanály od urèitıch uivatelù. Mùete pouít promìnné   %id%, %realname%, %username%, %email% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Cesta k archivùm');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Cesta k archivu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Cesta ke kategoriím');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Cesta k autorùm');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Cesta k odhlášení komentáøù');
@define('INSTALL_PERMALINK_DELETEPATH', 'Cesta pro smazání komentáøù');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Cesta ke schválení komentáøù');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Cesta k RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Cesta k jednotlivému pluginu');
@define('INSTALL_PERMALINK_ADMINPATH', 'Cesta k adminu');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Cesta k vyhledávání');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Cesta ke komentáøùm');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Základní nastavení');
@define('INSTALL_CAT_SETTINGS_DESC', 'Úprava správy Serendipity');
@define('INSTALL_USERNAME', 'Jméno admina');
@define('INSTALL_USERNAME_DESC', 'Jméno pro pøihlášení admina');
@define('INSTALL_PASSWORD', 'Heslo admina');
@define('INSTALL_PASSWORD_DESC', 'Heslo pro pøihlášení admina');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Skuteèné jméno');
@define('USERCONF_REALNAME_DESC', 'Plné jméno autora. Toto jméno uvidí ètenáøi');
@define('INSTALL_EMAIL', 'E-mail admina');
@define('INSTALL_EMAIL_DESC', 'E-mail pro pøihlášení admina');
@define('INSTALL_SENDMAIL', 'Posílat e-maily adminovi?');
@define('INSTALL_SENDMAIL_DESC', 'Chcete dostávat e-mailem zprávy o komentáøích k vašim záznamùm?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Název');
@define('INSTALL_BLOGNAME_DESC', 'Název vašeho weblogu');
@define('INSTALL_BLOGDESC', 'Popis');
@define('INSTALL_BLOGDESC_DESC', 'Popis weblogu');
@define('INSTALL_BLOG_EMAIL', 'E-Mail pro blog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Toto nastaví E-Mailovou adresu, která je pouita v poli "From"- (od) pro odchozí e-maily. Nastavte si tuto adresu tak, aby byla rozpoznána mailovım serverem pouívanım vaším webhosterem - mnoho mailserverù odmítá poštu, která má neznámou From-addresu (adr odesilatele).');
@define('COMMENT_TOKENS', 'Pouít pøíznaky pro schvalování komentáøù?');
@define('COMMENT_TOKENS_DESC', 'Pokud jsou pøíznaky pouívány, komentáøe mohou bıt schváleny nebo odstranìny kliknutím na odkaz v oznamovacím emailu, ani by bylo tøeba pøihlásit se do blogu. Mìjte na pamìti, e je to sice pohodlná vlastnost, ale pokud nìkdo získá pøístup k Vaší mailové schránce, mùe schvalovat/mazat komentáøe ani by musel zadávat pøihlašovací data.');
@define('INSTALL_LANG', 'Jazyk');
@define('INSTALL_LANG_DESC', 'Vyberte jazyk vašeho weblogu');
@define('INSTALL_CHARSET', 'Volba znakové sady - Charset');
@define('INSTALL_CHARSET_DESC', 'Zde mùete volit mezi UTF-8 nebo národní (ISO, EUC, ...) znakovou sadou. Nìkteré jazyky mají jen pøeklady UTF-8, take nastavení znakové sady na národní nemá ádnı úèinek. UTF-8 se doporuèuje pro nové instalace. Nemìòte toto nastavení, jestlie jste ji  napsali pøíspìvky se speciálními (národními) znaky - mohlo by zpùsobit porušení textu. Pøeètìte si o tomto problému více na  https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Typ kalendáøe');
@define('INSTALL_CAL_DESC', 'Vyberte formát kalendáøe');
@define('AUTOLANG', 'Pouít jazyk prohlíeèe jako defaultní');
@define('AUTOLANG_DESC', 'Zapnutím této volby urèíte, e jazyk prohlíeèe bude pøevzat jako základní pro uivatelské rozhraní a pro záznamy.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Povolit Plugin ACL pro uivatelské skupiny?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Jestlie je volba "Plugin ACL pro uivatelské skupiny" v konfiguraci povolena, mùete urèit, které skupiny uivatelù mohou provádìt urèité pluginy/události.');
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
@define('INSTALL_CAT_DISPLAY', 'Vzhled a volby');
@define('INSTALL_CAT_DISPLAY_DESC', 'Úprava vzhledu a chování Serendipity');
@define('INSTALL_FETCHLIMIT', 'Záznamy zobrazené na hlavní stránce');
@define('INSTALL_FETCHLIMIT_DESC', 'Poèet záznamù, zobrazenıch na hlavní stránce');
@define('INSTALL_RSSFETCHLIMIT', 'Èlánky, které se mají zobrazit v RSS Feedu');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Poèet èlánkù, které se má zobrazit na kadé stránce  v RSS Feedu.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'Jak mají bıt øazeny vısledky hledání?');
@define('SYNDICATION_RFC2616', 'Aktivovat strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'Kdy neaktivujete  RFC2616, znamená to, e všechny podmínìné GETy na Serendipity vrátí pøíspìvky, které byly modifikovány od èasu posledního poadavku. Kdy tohle nastavíte na  "false", vaši návštìvníci dostanou všechny èlánky od svého posledního poadavku, co se povauje za dobrou vìc. Avšak nìkteøí agenti jako  Planet fungují divnì, kdy tohle nastane a taky to porušuje  RFC2616. Take kdy nastavíte tuto volbu na  "TRUE", budete vyhovovat RFC ale návštìvníkùm   mohou ve  èteèkách  bìhem prázdnin zmizet pøíspìvky. V kadém pøípadì, buï to vadí agregátorùm jako je  Planet, nebo to vadí návštìvníkùm blogu. Kdy se vyskytnou stínosti z kterékoli strany, mùete tuhle volbu pøepnout.  Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Pouijte kompresi gzip');
@define('INSTALL_USEGZIP_DESC', 'Doporuèujeme pouít kompresi stránek pro jejich urychlené naèítání');
@define('INSTALL_XHTML11', 'Vnutit kompatibilitu s XHTML 1.1?');
@define('INSTALL_XHTML11_DESC', 'Chcete plnou kompatibilitu s XHTML 1.1? (mùe zpùsobit problémy ve starších prohlíeèích)');
@define('INSTALL_POPUP', 'Umonit pouití vyskakovacích oken');
@define('INSTALL_POPUP_DESC', 'Chcete ve weblogu pouívat vyskakovací okna pro komentáøe, odezvy a pod.?');
@define('INSTALL_EMBED', 'Je Serendipity vloené?');
@define('INSTALL_EMBED_DESC', 'Pokud chcete umístit weblog do vašich stránek, zvolte ano pro odstranìní všech záhlaví, bude zobrazován jen obsah. Mùete pouít volitelnı soubor indexFile pro obalení obsahu vlastními záhlavími a sloupci. Více informací najdete v souboru README!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Udìlat externí odkazy klikatelné?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Ne": Neoznaèené externí odkazy (Top vıstupy, Top odbìratelé, Uivatelské komentáøe) nebudou ukázány/budou ukázány jako bìnı text všude, kde je to moné, pro omezení spamu (doporuèeno). "Ano": Neoznaèené externí odkazy budou ukázány jako hyperlinky. Toto mùe bıt pøepsáno v konfiguraci pluginù!');
@define('INSTALL_TRACKREF', 'Povolit  referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Povolení referrer tracking vám ukáe, které weby odkazují na vaše èlánky. Dnes je to èasto zneuíváno pro spam, take to mùete zakázat, chcete-li.');
@define('INSTALL_BLOCKREF', 'Blokovaní odbìratelé');
@define('INSTALL_BLOCKREF_DESC', 'Chcete zamezit pøístup z urèitıch adres? Seznam adres oddìlujte \';\' a pozor, adresy jsou blokovány vèetnì subadres!');
@define('INSTALL_REWRITE', 'Pøepisování URL');
@define('INSTALL_REWRITE_DESC', 'Urèení pravidel pro tvorbu URL. Zapnutí módu pøepisování zajistí správné URL vašeho weblogu a lepší indexaci pro vyhledávaèe, jako je Google. Váš webserver musí podporovat mod_rewrite nebo "AllowOverride All" v adresáøi pro Serendipity. Defaultní nastavení je automaticky detekováno.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Posun èasové zóny vùèi serveru?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Posun èasu pøíspìvkù vùèi èasu na serveru. Vyberte "ano" pro zadání relativního èasového posunu vùèi hodinám serveru. Nikoliv posun vùèi GMT (Greenwich mean time).');
@define('INSTALL_OFFSET', 'Èasovı posun serveru');
@define('INSTALL_OFFSET_DESC', 'Vlote poèet hodin mezi èasem serveru (aktuálnì: %clock%) a vaší èasovou zónou');
@define('INSTALL_SHOWFUTURE', 'Zobrazit budoucí záznamy');
@define('INSTALL_SHOWFUTURE_DESC', 'Tato volba umoní zobrazení budoucích záznamù blogu. Defaultnì jsou skryté a budou zobrazeny a v èase jejich vydání.');
@define('INSTALL_ACL', 'Aplikovat práva na ètení pro kategorie');
@define('INSTALL_ACL_DESC', 'Pokud je povoleno, budou na kategorie aplikována nastavení práv pro skupiny uivatelù, kdy si pøihlášení uivatelé budou prohlíet váš blog. Není-li povoleno, práva na ètení pro kategorie nejsou aplikována,  a  zlepšuje se rychlost blogu. Jestlie nechcete mít práva pro ètení pro rùzné uivatele,  toto nastavení zakate.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Zobrazit celé èlánky vèetnì rozšíøené èásti v RSS kanálu');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrázek kanálu RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL obrázku ve formátu GIF/JPEG/PNG, je-li k dispozici. (prázdné: logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Šíøka');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'v pixelech, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Vıška');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'v pixelech, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Zobrazovat e-mailové adresy?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "hlavní redaktor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailová adresa hlavního redaktora, je-li k dispozici. (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailová adresa webmastera, je-li k dispozici. (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (ivotnost)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Èas v minutách, po kterém by váš weblog nemìl bıt nadále kešován v cizích serverech/aplikacích (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Pole "pubDate" je pro kanál RSS ukryto, chcete ukázat datum posledního záznamu?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Úpravy obrázkù');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Vloení základních informací o zpùsobu zpracování obrázkù');
@define('INSTALL_IMAGEMAGICK', 'Pouívat Imagemagick?');
@define('INSTALL_IMAGEMAGICK_DESC', 'Máte instalován Imagemagick?');
@define('INSTALL_IMAGEMAGICKPATH', 'Cesta ke konverznímu souboru');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Úplná cesta a název konverzního souboru Imagemagick');
@define('INSTALL_THUMBSUFFIX', 'Sufix náhledù');
@define('INSTALL_THUMBSUFFIX_DESC', 'Náhledy budou pojmenovány original.sufix.ext');
@define('INSTALL_THUMBWIDTH', 'Rozmìry náhledù');
@define('INSTALL_THUMBWIDTH_DESC', 'Pevná šíøka automaticky generovanıch náhledù');
@define('INSTALL_THUMBDIM', 'Omezující rozmìr pro náhledy');
@define('INSTALL_THUMBDIM_LARGEST', 'Delší hrana');
@define('INSTALL_THUMBDIM_WIDTH', 'Šíøka');
@define('INSTALL_THUMBDIM_HEIGHT', 'Vıška');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. velikost uploadvoaného souboru');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Zadejte maximální velikost pro uploadované (nahrávané) soubory v bytech. Toto nastavení mùe bıt  pøepsáno nastavením serveru v php.ini: upload_max_filesize, post_max_size, max_input_time mají pøednost pøed touto volbou. Prázdnı øetìzec znamená, e se pouije limit serveru.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. šíøka obrázkù pro upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Zadejte maximální šíøku pro uploadované obrázky v pixelech.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. vıška obrázku pro upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Zadejte maximální vıšku v pixelech pro uploadované obrázky.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Povolit synchronizaci medií za bìhu (on the fly)');
@define('ONTHEFLYSYNCH_DESC', 'Pokud je to povoleno, Serendipity bude porovnávat databázi medií se soubory uloenımi na serveru a bude synchronizovat obsah databáze a adresáøe.');
@define('MEDIA_DYN_RESIZE', 'Povolit dynamickou zmìnu velikosti obrázkù?');
@define('MEDIA_DYN_RESIZE_DESC', 'Je-li povoleno, mùe  media selector vracet obrázky v jakékoli poadované velikosti pøes promìnnou  GET. Vısledky jsou kešovány, a tak se mùe vytvoøit velkı soubor, jestlie to intenzivnì pouíváte.');
@define('MEDIA_EXIF', 'Importovat EXIF/JPEG  data obrázku');
@define('MEDIA_EXIF_DESC', 'Je-li povoleno, existující EXIF/JPEG metadata obrázkù budou parsována a uloena v databázi, aby je bylo mono zobrazit v galerii medií.');
@define('MEDIA_PROP', 'Vlastnosti media');
@define('MEDIA_PROP_DESC', 'Zadejte seznam polí vlastností oddìlenıch  ";" , které chcete definovat pro kadı souor v mediích');
@define('MEDIA_PROP_MULTIDESC', '(Za kadou poloku mùete pøidat ":MULTI", co bude indikovat, e tato poloka bude obsahovat dlouhı text místo jen nìkolika znakù)');
@define('MEDIA_KEYWORDS', 'Media - klíèová slova');
@define('MEDIA_KEYWORDS_DESC', 'Zadejte seznam slov oddìlenıch  ";" která chcete pouít jako pøeddefonovaná klíèová slova pro poloky v mediích.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Osobní nastavení');
@define('USERCONF_CAT_PERSONAL_DESC', 'Nastavení vašeho úètu');
@define('USERCONF_USERNAME', 'Jméno');
@define('USERCONF_USERNAME_DESC', 'Vaše uivatelské jméno (pøezdívka)');
@define('USERCONF_PASSWORD', 'Heslo');
@define('USERCONF_PASSWORD_DESC', 'Vaše heslo');
@define('USERCONF_CHECK_PASSWORD', 'Staré heslo');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Jestlie zmìníte  heslo v políèku vıše, musíte do tohoto pole zadat souèasné heslo.');
@define('USERCONF_USERLEVEL', 'Úroveò');
@define('USERCONF_USERLEVEL_DESC', 'Tato úroveò urèuje práva uivatele weblogu.');
@define('USERCONF_GROUPS', 'Èlenství ve skupinách');
@define('USERCONF_GROUPS_DESC', 'Tento uivatel je èlen následujících skupin. èlenství ve více skupinách je moné.');
@define('USERCONF_EMAIL', 'E-mailová adresa');
@define('USERCONF_EMAIL_DESC', 'Váš e-mail');
@define('INSTALL_WYSIWYG', 'Pouívat WYSIWYG editor?');
@define('INSTALL_WYSIWYG_DESC', 'Chcete pouívat WYSIWYG editor? (Pracuje v IE5+, èásteènì v Mozille 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Posílat zprávy o komentáøích?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Chcete dostávat zprávy o komentáøích e-mailem?');
@define('USERCONF_SENDTRACKBACKS', 'Posílat zprávy o odezvách?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Chcete dostávat zprávy o odezvách na záznamy e-mailem?');
@define('USERCONF_CREATE', 'Zneplatnit uivatele / zakázat aktivitu?');
@define('USERCONF_CREATE_DESC', 'Pokud je volba vybrána, uivatel nebude mít ádná práva k vytváøení nebo mìnìní blogu. Kdy se pøihlásí do administrativní sekce, mùe si pouze prohlédnout osobní nastavení nebo se odhlásit.');
@define('USERCONF_ALLOWPUBLISH', 'Právo publikovat záznamy?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Umonit uivateli publikovat záznamy');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Ukázat lištu nástrojù v oknì vıbìru medií?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Základní nastavení pro nové záznamy');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UPOZORNÌNÍ: Atribut úroveò uivatele (userlevel) je nyní pouíván jen kvùli zpìtné kompatibilitì s pluginy a autorizaci. Uivatelská práva jsou nyní øízena pomocí èlenskıch skupin!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nezadali jste správné staré heslo a nejste oprávnìni heslo zmìnit. Vaše nastavení nebylo uloeno.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Jméno uivatele nemùe bıt prázdné.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'osobníKonfigurace: Pøístup k osobní konfiguraci');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'osobníKonfiguraceÚroveòUivatele: Zmìnit úroveò uivatele (level)');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'osobníKonfiguraceNeNové: Zmìnit "zákaz novıch pøíspìvkù"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'osobníKonfiguracePrávoPublikovat: Zmìnit právo na publikování pøíspìvkù');
@define('PERMISSION_SITECONFIGURATION', 'webKonfigurace: Konfigurace  pøístupu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogKonfigurace: Konfigurace pøístupu k  blogu');
@define('PERMISSION_ADMINENTRIES', 'adminPøíspìvky: Administrace pøíspìvkù');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminÚdrbaPøíspìvkùOstatních: Administrace pøíspìvkù ostatních uivatelù');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import pøíspìvkù');
@define('PERMISSION_ADMINCATEGORIES', 'adminKategorie: Administrace kategorií');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminÚdrbaKategoriíOstatních: Administrace kategorií ostatních uivatelù');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminMazáníKategorií: Smazat kategorie');
@define('PERMISSION_ADMINUSERS', 'adminUivatelù: Administrace uivatelù');
@define('PERMISSION_ADMINUSERSDELETE', 'adminMazáníUivatelù: Smazat uivatele');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminZmìnaÚrovnìUivatele: Zmìna úrovnì uivatele');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUivateléStejnéSkupiny: Administrace uivatelù ve stejné skupinì');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUivateléJinéSkupiny: Administrace uivatelù v jinıch skupinách');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminNovíUivatelé: Zakládat nové uivatele');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUivatelskéSkupiny: Administrace skupin uivatelù');
@define('PERMISSION_ADMINPLUGINS', 'adminPluginy: Administrace pluginù');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminÚdrbaPluginùOstatních: Administrace pluginù ostatních uivatelù');
@define('PERMISSION_ADMINIMAGES', 'adminObrázky: Administrace souborù  media');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminAdresáøeObrázkù: Administrace adresáøù pro media');
@define('PERMISSION_ADMINIMAGESADD', 'adminPøidatObrázek: Pøidávání novıch souborù medií');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminSmazatObrázek: Mazání souborù medií');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminÚdrbaObrázkùOstatní: Administrace souborù medií ostatních uivatelù');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminProhlíeníObrázkù: Prohlíení souborù medií');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminSynchroObrázkù: Sync thumbnailù');
@define('PERMISSION_ADMINCOMMENTS', 'adminKomentáøe: Administrace komentáøù');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplate: Administrace šablon (template)');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminProhlíeníObrázkùOstatní: Prohlíení medií ostatních uivatelù');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zakázané pluginy');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zakázané události');
@define('PERMISSION_HIDDENGROUP', 'Skrytá skupina / Bez autora');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Záznam uloen');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vláknové');
@define('COMMENTS_VIEWMODE_LINEAR', 'Lineární');
@define('DISPLAY_COMMENTS_AS', 'Zobrazit komentáøe jako');
@define('COMMENTS_DISABLE', 'Neumonit pøidávání komentáøù');
@define('COMMENTS_ENABLE', 'Umonit pøidávání komentáøù');
@define('COMMENTS_CLOSED', 'Autor neumonil pøidávat komentáøe');
@define('VIEW_EXTENDED_ENTRY', 'Pokraèovat ve ètení "%s"');
@define('TRACKBACK_SPECIFIC', 'Odezva ze specifického URI na tento záznam');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Zobrazit vše');
@define('VIEW_TOPICS', 'Zobrazit téma');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Téma');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Záznamy nebyly vloeny úspìšnì!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamatovat informace? ');
@define('SUBMIT_COMMENT', 'Odeslat komentáø');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Pøihlásit se ke sledování komentáøù k záznamu');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Váš prohlíeè nezaslal platnı  HTTP-Referrer string. To mohlo bıt zpùsobeno buï špatnì nastavenım prohlíeèem/proxy nebo  Cross Site Request Forgery (XSRF), kterı je na vás namíøen. Poadovaná akce nemohla bıt dokonèena.');
@define('NAVLINK_AMOUNT', 'Zadejte poèet odkazù navigaèní lišty (ihned po zadání této volby kliknìte na "Uloit" a obnovte stránku)');
@define('NAV_LINK_TEXT', 'Test odkazu');
@define('NAV_LINK_URL', 'URL adresa odkazu');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Komentáø #%s se jeví jako skuteènì odsouhlasenı');
@define('COMMENT_EDITED', 'Vybranı komentáø byl editován');
@define('COMMENTS_WILL_BE_MODERATED', 'Odeslané komentáøe budou pøed uveøejnìním moderovány.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Pozor: Tento komentáø musí bıt pøed uveøejnìním odsouhlasen');
@define('DELETE_COMMENT', 'Vymazat komentáø');
@define('APPROVE_COMMENT', 'Odsouhlasit komentáø');
@define('REQUIRES_REVIEW', 'Vyádat pøezkoumání');
@define('COMMENT_APPROVED', 'Komentáø #%s byl odsouhlasen');
@define('COMMENT_DELETED', 'Komentáø #%s byl vymazán');
@define('COMMENTS_MODERATE', 'Komentáøe a odezvy k tomuto záznamu budou moderovány');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Pozor: Tato odezva musí bıt pøed uveøejnìním odsouhlasena');
@define('DELETE_TRACKBACK', 'Vymazat odezvu');
@define('APPROVE_TRACKBACK', 'Odsouhlasit odezvu');
@define('TRACKBACK_APPROVED', 'Odezva #%s byla odsouhlasena');
@define('TRACKBACK_DELETED', 'Odezva #%s byla vymazána');
@define('COMMENT_NOTOKENMATCH', 'Schvalovacímu odkazu vypršela platnost, nebo byl komentáø è.%s ji schválen èi odstranìn');
@define('TRACKBACK_NOTOKENMATCH', 'Schvalovacímu odkazu vypršela platnost, nebo byla odezva è.%s ji schválena èi odstranìna');
@define('BADTOKEN', 'Neplatnı odkaz pro schválení');
@define('TOP_LEVEL', 'Nejvyšší úroveò');
@define('VIEW_COMMENT', 'Ukázat komentáø');
@define('VIEW_ENTRY', 'Ukázat záznam');
@define('LINK_TO_ENTRY', 'Odkaz na záznam');
@define('LINK_TO_REMOTE_ENTRY', 'Odkaz na externí záznam');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Posílání oznámení (pingback) na URI %s...');
@define('PINGBACK_SENT', 'Oznámení úspìšné');
@define('PINGBACK_FAILED', 'Oznámení selhalo: %s');
@define('PINGBACK_NOT_FOUND', 'Oznamovací URI adresa neexistuje.');
@define('TRACKBACK_SENDING', 'Odeslání odezvy na URI %s...');
@define('TRACKBACK_SENT', 'Odezva úspìšná');
@define('TRACKBACK_FAILED', 'Odezva neúspìšná: %s');
@define('TRACKBACK_NOT_FOUND', 'URI odezvy neexistuje.');
@define('TRACKBACK_URI_MISMATCH', 'Automaticky získané URI neodpovídá vašemu cílovému.');
@define('TRACKBACK_CHECKING', 'Testvání <u>%s</u> pro moné odezvy...');
@define('TRACKBACK_NO_DATA', 'Cíl neobsahuje data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Odezva nebyla odeslána: nepodaøilo se spojení s %s na portu %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Ahoj %s,\n\nPoádal jsi o zasílání oznámení o novıch komentáøù k èlánku \"%s\" (<%s>). Pro potvrzení této ádosti (\"Double Opt In\") klikni prosím na následující odkaz:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Ahoj %s,\n\nPoslal jsi novı komentáø na \"%s\". Komentáø zní:\n\n%s\n\nVlastník blogu poaduje emailové potvrzení, take je tøeba kliknout na následující odkaz a potvrdit tak komentáø:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Ahoj %s,\n\nPoslal jsi novı komentáø na \"%s\". Tvùj komentáø zní:\n\n%s\n\nVlastník blogu vyaduje prvotní emailové potvrzení. Znamená to, e teï musíš svùj komentáø potvrdit kliknutím na následující odkaz:\n<%s>\n\nZároveò tím potvrdíš všechny další komentáøe, které pošleš se stejnım jménem a emailovou adresou, v budoucnu u ádná podobná oznámení dostávat nebudeš.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Novı komentáø k pøihlášenému záznamu "%s"');
@define('SUBSCRIPTION_MAIL', "Pozor %s,\n\nA právì byl pøidán novı komentáø k záznamu, kterı sledujete na \"%s\", s názvem \"%s\"\nJméno odesílatele: %s\n\nZáznam najdete zde: %s\n\nMùete se odhlásit zde: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Pozor %s,\n\nA právì byla pøidána nová odezva k záznamu, kterı sledujete na \"%s\", s názvem \"%s\"\nJméno odesílatele: %s\n\nZáznam najdete zde: %s\n\nMùete se odhlásit zde: %s\n");
@define('SIGNATURE', "\n-- \n%s je vytvoøen pomocí Serendipity.\n Tento perfektní blogovací systém mùete zdarma pouívat také.\nNavštivte <https://s9y.org>, kde se dozvíte vše potøebné.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Novı komentáø k weblogu "%s", k záznamu s názvem "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nová odezva na weblog/záznam s názvem "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Máte k dispozici tyto volby:');
@define('NEW_TRACKBACK_TO', 'Nová odezva na');
@define('NEW_COMMENT_TO', 'Novı komentáø k');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nenalezen ádnı záznam odpovídající volbì %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Vyhledávání %s odpovídá %s vısledkù:');
@define('SEARCH_TOO_SHORT', 'Vyhledávací dotaz musí bıt delší ne 3 znaky. Ke kratším slovùm mùete zkusit pøidat *, jako: s9y*, abyste  vyhledávání pøimìli pracovat s kratšími slovy.');
@define('SEARCH_ERROR', 'Funkce vyhledávání nepracovala podle oèekávání. Poznámka pro administrátora blogu: Mohlo to bıt zpùsobeno nepøítomností pøíslušnıch indexù v databázi. Uivatelskı úèet v databázi MySQL musí bıt oprávnìn vykonat tento dotaz: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Specifická chyba vrácená databází byla: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Váš komentáø nic neobsahuje, %svrate se%s a zkuste to znovu');
@define('COMMENT_NOT_ADDED', 'Váš komentáø nemohl bıt pøidán, protoe komentáøe k tomuto pøíspìvku byly zakázány, zadali jste špatná data nebo byl váš komentáø zachycen antispamem.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Komentáøe od');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Vaše potvrzení komentáøe bylo úspìšnì pøijato.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Vaše potvrzení komentáøe nemohlo bıt pøijato. Zkontrolujte prosím odkaz, na kterı jste kliknuli. Pokud je odkaz starší ne 3 tıdny, musíte poslat komentáø znovu.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Vaše potvrzení ádosti o zasílání oznámení o novıch komentáøích bylo úspìšnì pøijato.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Syntax konfigurace je chybná pro volbu "%s". Vyaduje obsah typu "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Seznam kategorií.');
@define('CATEGORIES_PARENT_BASE', 'Zobrazit jen kategorie nie ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Mùete vybrat rodièovskou kategorii, take budou zobrazeny jen její niší kategori.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skrıt kategorie, které nejsou souèástí stromu kategorií');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Jestlie chcete skrıt kategorie, které jsou èástí jiného stromu kategorií, musíte tohle povolit. Tato monost se nejlépe  pouije ve spojení s multi-blogem a pluginem  "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Skrıt zvolenou rodièovskou kategorii?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Jestlie omezíte vıpis kategorií na specifickou kategorii,  standardnì bude  na vıstupu rodièovská kategorie zobrazena. Kdy tuto monost zakáete, název rodièovské kategorie nebude zobrazen.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Povolit Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Je-li tato monost povolena, bude plugin pro vıpis kategorií vyuívat moností  Smarty-Templating. Kdy tohle povolíte, mùete mìnit layout pøes šablonu "plugin_categories.tpl". Povolení téhle volby mùe zhoršit vıkon, take pokud nechcete dìlat úpravy pro jednotlivé kategorie, nechte to zakázané.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Zobrazit poèet pøíspìvkù na kategorii? ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Povolit návštìvníkùm zobrazit více kategorií najednou?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Jestlie je tato volba povolena, bude v tomto postranním pluginu hned vedle kadé kategorie zaškrtávací okénko. Uivatelé mohou tyto boxy zaškrtnout a vidìt jen pøíspìvky patøící do tohoto vıbìru.');
@define('CATEGORIES_TO_FETCH', 'Vyhledat kategorie');
@define('CATEGORIES_TO_FETCH_DESC', 'Vyhledat kategorie podle autorù?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zobrazit seznam autorù');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Zobrazit poèet èlánkù u jména autora?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Je-li tato volba povolena, je vedle jména autora zobrazen v závorce poèet jeho pøíspìvkù.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Zobrazit pouze autory s více ne X pøíspìvky');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Spolupráce');
@define('SHOWS_RSS_BLAHBLAH', 'Sdílené RSS linky');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'Kanál %s');
@define('SYNDICATION_PLUGIN_091', 'Kanál RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'Kanál RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'Kanál RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Komentáøe RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'Kanál ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Zobrazené jméno pro "kanál"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Zadejte volitelné jmého pro kanál (pokud je prázndé, pak je standardnì pojmenován jako "kanál")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Zobrazované jméno pro kanál s komentáøi');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Zadejte (volitelnì) jakékoliv jméno pro kanál s komentáøi');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID feedu, kterı chcete publikovat');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner image');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Název obrázku, kterı se má zobrazit (nebo prázdnı pro poèitadlo), umístìné na  feedburner.com, napø: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner title');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Title (je-li), kterı se má zobrazit u obrázku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner image text');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (je-li) kterı se má zobrazit pøi najetí na obrázek');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Schovat odkaz na archivy, pokud nejsou ve vybraném období vydané ádné pøíspìvky (vyaduje poèítání pøíspìvkù)');
@define('ARCHIVE_COUNT', 'Poèet prvkù v seznamu');
@define('ARCHIVE_COUNT_DESC', 'Celkovı poèet zobrazenıch mìsícù, tıdnù nebo dnù');
@define('ARCHIVE_FREQUENCY', 'Kalendáøní krok');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalendáøní krok mezi prvky seznamu');
@define('BROWSE_ARCHIVES', 'Prohlíení mìsíèních archivù');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zobrazit "Serendipity" jako text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vytvoøeno v "Serendipity" se zobrazí jako text');
@define('POWERED_BY_SHOW_IMAGE', 'Zobrazit "Serendipity" s logem');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Zobrazí se logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Reklama na tvùrce systému vašeho weblogu');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Pouít https pro pøihlášení');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Umoòuje pouít spojení https pro pøihlášení. Váš server to musí podporovat!');
@define('SUPERUSER', 'Superuivatel');
@define('SUPERUSER_OPEN_ADMIN', 'Administrace');
@define('SUPERUSER_OPEN_LOGIN', 'Pøihlášení');
@define('ALLOWS_YOU_BLAHBLAH', 'Vloit odkaz do postranního bloku administrace weblogu');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendáø');
@define('CALENDAR_BOW_DESC', 'Den, urèenı jako zaèátek tıdne. Default je pondìlí');
@define('QUICKJUMP_CALENDAR', 'Vyhledávací kalendáø');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Zaèátek tıdne');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Povolit Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Jestlie je toto povoleno, mohou se pluginy napojovat na kalendáø a zvırazòovat své vlastní události. Povolte jen kdy máte pluginy, které toto potøebují, jinak to jen sniuje vıkon.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Hledání záznamu');
@define('SEARCH_FULLENTRY', 'Zobrazit celı pøíspìvek');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Vloení HTML kódu do postranního sloupce');
@define('THE_NUGGET', 'Vloenı HTML');
@define('BACKEND_TITLE', 'Další informace v konfiguraèní obrazovce pluginu');
@define('BACKEND_TITLE_FOR_NUGGET', 'Zde mùete definovat svùj øetìzec, kterı bude zobrazen v konfiguraèní obrazovce pluginu spoleènì s popisem pluginu HTML Nugget. Kdy máte nìkolik HTML nuggetù s prázdnım tittle, toto vám pomùe je rozlišit.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Zobrazit Top vıstupy/odbìratele jako linky?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Ne": Vıstupy a adresy odbìratelù budou zobrazeny jako èistı text pro zamezení spamu, "Ano": nebo jako hyperlinky. "Default": Pouít globální nastavení (doporuèeno).');
@define('HAVE_TO_BE_LOGGED_ON', 'Pro zobrazení této stránky musíte bıt pøihlášen');
@define('WELCOME_TO_ADMIN', 'Vítejte v Administraèní sekci Serendipity .');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Velkı obrázek');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Pokud zadáte absolutní URL adresu s http://..., bude tato adresa pouita jako cíl pøesmìrování v pøípadì, e jste zatrhli volbu "Vynutit" pro FeedBurner. Mìjte na pamìti, e to mùe bıt URL adresa nezávislá na FeedBurneru. Pro nové kanály FeedBurneru Googlu budete muset zadat http://feeds2.feedburner.com/jmenoVasehoKanalu)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Pokud nastavíte tuto volbu na "Vynutit", mùete pøesmìrovat RSS kanál na jakoukoliv webovou slubu, nejen na FeedBurner. Podívejte se níe na volbu "Feedburner ID" pro zadání absolutní adresy.');
@define('MEDIA_PROPERTY_COMMENT1', 'Krátkı komentáø');
@define('MEDIA_PROPERTY_COMMENT2', 'Dlouhı komentáø');
@define('DELETE_SELECTED_ENTRIES', 'Vymazat vybrané pøíspìvky');
@define('MEDIA_PROPERTY_ALT', 'Popis (shrnutí pro atribut ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titulek');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ještì není nainstalován. <a href="%s">Instalujte</a> jej nyní.');
@define('COMMENT_ADDED_CLICK', 'Kliknìte %ssem%s pro návrat ke komentáøùm nebo %ssem%s pro zavøení okna.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknìte %ssem%s pro návrat ke komentáøùm nebo %ssem%s pro zavøení okna.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Délka');
@define('MEDIA_PROPERTY_DATE', 'Asociované datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL pøesunutého adresáøe pøesunuto v   %s pøíspìvcích.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'V Ne-MySQL databázi není iterace po pøíspìvcích a nahrazení staré adresy pùvodního adresáøe novou URL moné. Budete muset pøíspìvky ruènì editovat a ty adresy upravit. Ale poøád ještì mùete adresáø pøesunout zpátky tam kde byl, jestli je to pro vás moc otravné.');
@define('TRACKBACK_SIZE', 'Cílové URI pøekroèilo max. velikost souboru %s bytù.');
@define('CLICK_FILE_TO_INSERT', 'Kliknìte na soubor, kterı chcete vloit:');
@define('SELECT_FILE', 'Vyberte soubor pro vloení:');
@define('MANAGE_IMAGES', 'Správa obrázkù');
@define('WORD_NEW', 'Nové');
@define('WORD_OR', 'nebo');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Viditelné (Frontend): Externí sluby');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Viditelné (Frontend): Další monosti');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Viditelné (Frontend): Úplné mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Viditelné (Frontend): Zobrazení/filtry');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Viditelné (Frontend): Pluginy pro pøíspìvky');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Provozní (Backend): Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Provozní (Backend): Øízení uivatelù');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Provozní (Backend): Meta informace');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Provozní (Backend): Templates - šablony vzhledu');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Provozní (Backend): Další monosti');
@define('PLUGIN_GROUP_IMAGES', 'Obrázky');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup - textové znaèky');
@define('PLUGIN_GROUP_STATISTICS', 'Statistiky');
@define('IMPORT_WELCOME', 'Vítejte v utilitì pro import dat');
@define('USER_SELF_INFO', 'Pøihlášen jako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Zde mùete importovat záznamy z jinıch weblogù');
@define('IMPORT_SELECT', 'Vyberte software, ze kterého chcete importovat');
@define('MANAGE_STYLES', 'Zmìna stylu');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vyberte plugin, kterı chcete instalovat');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Níe je seznam instalovanıch pluginù');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Zrušit');
@define('DELETE_SELECTED_COMMENTS', 'Vymazat vybrané komentáøe');
@define('MODERATE_SELECTED_COMMENTS', 'Schválit vybrané komentáøe');
@define('FIND_MEDIA', 'Hledat média');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Chyba: Jméno souboru neexistuje!');
@define('ERROR_SOMETHING', 'Chyba: Nìco je špatnì.');
@define('DIRECT_LINK', 'Pøímı odkaz na tento záznam');
@define('SELECT_TEMPLATE', 'Vyberte vzor pro váš web');
@define('DATABASE_ERROR', 'chyba serendipity: nelze se spojit s databází - ukonèeno.');
@define('LIMIT_TO_NUMBER', 'Kolik záznamù by mìlo bıt zobrazeno?');
@define('DIRECTORIES_AVAILABLE', 'Po kliknutí na nìkterı adresáø v seznamu mùete vytvoøit další podadresáø.');
@define('CATEGORY_INDEX', 'Níe je seznam kategorií, které mùet pouít k vašemu záznamu');
@define('PAGE_BROWSE_PLUGINS', 'Strana %s z %s, celkem %s pluginù.');
@define('CHARSET_NATIVE', 'Národní');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API Interface na Serendipity ji není pøibaleno  kvùli pokraèujícím bezpeènostním problémùm s tímhle API a protoe ho moc lidí nepouívá. Proto musíte nainstalovat plugin XML-RPC, kdy chcete  XML-RPC API pouívat. URL, které se pouije ve vaší aplikaci, se nezmìní - hned po instalaci pluginu budete moci API pouívat.');
@define('AUTHORS_ALLOW_SELECT', 'Povolit návštìvníkùm vybrat více autorù najednou?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Jestlie je tato volba povolena, bude u kadého autora umístìno zatrhávací okénko. Uivatelé mohou zvolit více autorù  a vidìt pøíspìvky, které vyhovují jejich vıbìru');
@define('PREFERENCE_USE_JS', 'Povolit pouití advanced JS?');
@define('PREFERENCE_USE_JS_DESC', 'Je-li toto povoleno, budou povoleny sekce s advanced JavaScript, aby se zlepšila pouitelnost. Napø v sekci pro konfiguraci pluginù mùete pro pøeskládání pluginù pouít drag and drop (táhnout myší).');
@define('PREFERENCE_USE_JS_WARNING', '(Tato stránka pouívá advanced JavaScripting. Jestlie máte problémy s fungováním, zakate prosím pouívání  advanced JS ve svém osobním nastavení nebo zakate javascript v prohlíeèi.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Èeká na potvrzení');
@define('NO_COMMENT_SUBSCRIPTION', 'Neodebíráno');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');