<?php
# lang_cz.inc.php 1.10 2012-01-08 18:34:17 VladaAjgl $

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
'á','è','ï','é','ì','í','å','µ','ò','ó','à','ø','¶','¹','»','ú','ù','ý','¼','¾',
'Á','È','Ï','É','Ì','Í','Å','¥','Ò','Ó','À','Ø','¦','©','«','Ú','Ù','Ý','¬','®',
' ',',','.','!',
);
$i18n_filename_to = array (
'a','c','d','e','e','i','l','l','n','o','r','r','s','s','t','u','u','y','z','z',
'A','C','D','E','E','I','L','L','N','O','R','R','S','S','T','U','U','Y','Z','Z',
'-', '', '', '',
);
@define('LANG_CHARSET', 'ISO-8859-2');
@define('SQL_CHARSET', 'latin2');
@define('DATE_LOCALES', 'cs_CZ.ISO-8859-2, cs_CZ.ISO8859-2, czech, cs');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'cs-iso');
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
@define('LOGIN', 'Pøihlá¹ení');
@define('LOGOUT', 'Odhlá¹ení');
@define('LOGGEDOUT', 'Odhlá¹en');
@define('CREATE', 'Vytvoøit');
@define('BACK', 'Zpìt');
@define('FORWARD', 'Dále');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nové...');
@define('OLDER', 'Star¹í...');
@define('DONE', 'Hotovo');
@define('TITLE', 'Titulek');
@define('DESCRIPTION', 'Popis');
@define('PLACEMENT', 'Umístìní');
@define('DELETE', 'Vymazat');
@define('SAVE', 'Ulo¾it');
@define('UP', 'Nahoru');
@define('DOWN', 'Dolù');
@define('PREVIOUS', 'Pøedchozí');
@define('NEXT', 'Dal¹í');
@define('ENTRIES', 'záznamy');
@define('CATEGORIES', 'Kategorie');
@define('NAME', 'Jméno');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Domácí stránka');
@define('COMMENT', 'Komentáø');
@define('VIEW', 'Ukázat');
@define('HIDE', 'Skrýt');
@define('WEEK', 'Týden');
@define('WEEKS', 'Týdny');
@define('MONTHS', 'Mìsíce');
@define('DAYS', 'Dny');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Úspìch');
@define('COMMENTS', 'Komentáøe');
@define('ADD_COMMENT', 'Pøidat komentáø');
@define('NO_COMMENTS', '®ádné komentáøe');
@define('POSTED_BY', 'Vlo¾il');
@define('ON', 'v');
@define('NO_CATEGORY', '®ádná kategorie');
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
@define('NO_TRACKBACKS', '®ádné odezvy');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Výpis');
@define('TRACKED', 'Sledován');
@define('USER', 'U¾ivatel');
@define('USERNAME', 'Jméno (pøezdívka)');
@define('PASSWORD', 'Heslo');
@define('HIDDEN', 'skrytý');
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
@define('ALL_AUTHORS', 'V¹ichni autoøi');
@define('PREVIOUS_PAGE', 'pøedchozí stránka');
@define('NEXT_PAGE', 'dal¹í stránka');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'V¹echny kategorie');
@define('LAST_UPDATED', 'Naposled zmìnìno');
@define('IP_ADDRESS', 'IP adresa');
@define('CHARSET', 'Znaková sada');
@define('REFERER', 'Odbìratel');
@define('APPROVE', 'Povolit');
@define('NOT_FOUND', 'Není obsa¾en');
@define('WRITABLE', 'Zapisovatelný');
@define('NOT_WRITABLE', 'Nezapisovatelný');
@define('WELCOME_BACK', 'Vítejte zpìt,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Seøadit podle');
@define('SORT_ORDER', 'Poøadí');
@define('SORT_ORDER_ASC', 'Vzestupnì');
@define('SORT_ORDER_DESC', 'Sestupnì');
@define('FILTERS', 'Filtry');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Otevøít v¹e');
@define('TOGGLE_OPTION', 'Otevøít volbu');
@define('IN_REPLY_TO', 'Odpovìï na');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Adresáø');
@define('BACK_TO_BLOG', 'Zpìt do weblogu');
@define('HTML_NUGGET', 'Vlo¾ený HTML kód');
@define('TITLE_FOR_NUGGET', 'Název HTML kódu');
@define('COMMENT_ADDED', 'Vá¹ komentáø byl úspì¹nì pøidán.');
@define('ENTRIES_FOR', 'Záznamy: %s');
@define('NO_ENTRIES_TO_PRINT', '®ádné záznamy k zobrazení');
@define('COMMENT_DELETE_CONFIRM', 'Jste si jist vymazáním komentáøe #%d, zapsaného %s?');
@define('DELETE_SURE', 'Urèitì chcete vymazat #%s natrvalo?');
@define('MEDIA_FULLSIZE', 'Plný rozmìr');
@define('SIDEBAR_PLUGIN', 'postranní plugin');
@define('EVENT_PLUGIN', 'plugin události');
@define('PLUGIN_ITEM_DISPLAY', 'Kde by mìla být tato polo¾ka zobrazena?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'V roz¹íøené èásti');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'V pøehledu');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'V obou èástech');
@define('DIRECTORY_WRITE_ERROR', 'Nelze zapisovat do adresáøe %s - provìøte oprávnìní.');
@define('FILE_WRITE_ERROR', 'Nelze zapisovat do souboru %s.');
@define('INCLUDE_ERROR', 'chyba serendipity: nelze vlo¾it %s - ukonèeno.');
@define('DO_MARKUP', 'Umo¾nit pøevod znaèek');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formátování data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formát aktuálního data záznamu, pou¾ívá PHP promìnnou strftime(). (Pøednastaveno: "%s")');
@define('APPLY_MARKUP_TO', 'Zapnout znaèkování %s');
@define('XML_IMAGE_TO_DISPLAY', 'Znak XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Odkazy na XML kanály budou zobrazeny s tímto znakem. Nechejte prázdné pro pùvodní nastavení, nebo zadejte \'none\' pro vypnutí.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Vymazání souboru %s...');
@define('SETTINGS_SAVED_AT', 'Nové nastavení bylo ulo¾eno v %s');
@define('INVERT_SELECTIONS', 'Obrátit výbìr');

@define('PERSONAL_SETTINGS', 'Osobní nastavení');
@define('DO_MARKUP_DESCRIPTION', 'Pøevést znaèky na text (smajlíky, zkratky *, /, _, ...). Vypnutí této volby zajistí ulo¾ení HTML kódù v textu.');
@define('BASE_DIRECTORY', 'Základní adresáø');
@define('PERM_READ', 'Právo na ètení');
@define('PERM_WRITE', 'Právo na zápis');
@define('PERM_DENIED', 'Pøístup odepøen.');
@define('CURRENT_AUTHOR', 'Aktuální autor');
@define('PLUGIN_ACTIVE', 'Aktivní');
@define('PLUGIN_INACTIVE', 'Neaktivní');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Ulo¾te tento odkaz do oblíbených zálo¾ek a pou¾ijte zálo¾ku na jakékoliv stránkce, o které chcete psát. Zálo¾ka Vás rychle pøepne do Va¹eho Serendipity Blogu.');
@define('SET_TO_MODERATED', 'Schválit');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalace Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Vítejte v instalaci Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Nejdøíve se podíváme na va¹e základní nastavení a zkusíme diagnostikovat pøípadné problémy');
@define('ERRORS_ARE_DISPLAYED_IN', 'Chyby budou zobrazeny %s, doporuèení %s a úspìch %s');
@define('RED', 'èervenì');
@define('YELLOW', '¾lutì');
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
@define('PROBLEM_PERMISSIONS_HOWTO', 'Oprávnìní mù¾e být nastaveno s pou¾itím povelu: `<em>%s</em>` v adresáøi, nebo nastavením pomocí FTP programu');
@define('PROBLEM_DIAGNOSTIC', 'Byly diagnostikovány problémy, tak¾e nelze pokraèovat v instalaci, dokud nebudou odstranìny');
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
@define('ATTEMPT_WRITE_FILE', 'Pokus ulo¾it soubor %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Vytvoøení hlavního autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Nastavení defaultního vzoru');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalace defaultních pluginù');
@define('SERENDIPITY_INSTALLED', 'Serendipity byl úspì¹nì nainstalován');
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
@define('WWW_USER', 'Zmìòte www na u¾ivatele, který je urèen v Apache (na pø. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Adresáø %s neexistuje a nemohl být vytvoøen. Vytvoøte adresáø manuálnì.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; spustit <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nelze spustit binární soubor %s.');
@define('FILE_CREATE_YOURSELF', 'Vytvoøte soubor pøímo nebo provìøte oprávnìní');
@define('COPY_CODE_BELOW', '<br />* Zkopírujte kód uvedený ní¾e a umístìte jej do %s ve va¹em %s adresáøi:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Po dokonèení stisknìte tlaèítko obnovení stránky ve va¹em prohlí¾eèi.');
@define('ERROR_TEMPLATE_FILE', 'Nelze otevøít vzorový soubor, updatujte Serendipity!');
@define('HTACCESS_ERROR', 'Provìøte instalaci va¹eho webserveru, Serendipity potøebuje ulo¾it soubor ".htaccess". To nebylo mo¾né kvùli chybì oprávnìní. Nastavte oprávnìní jako: <br />&nbsp;&nbsp;%s<br />a znovu ulo¾te tuto stránku.');
@define('EMPTY_SETTING', 'Nespecifikoval jste platnou hodnotu pro "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Vy¾adováno pouze pokud chcete v budoucnu vyu¾ívat plugin Spartacus pro stahování nových pøídavných modulù.)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity detekoval, ¾e va¹e konfigurace je ulo¾ena ve verzi %s, ale serendipity je instalován jako verze %s, je potøeba upgrade! <a href="%s">Kliknìte zde</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Vítá vás mana¾er upgrade Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Pomohu vám s upgrade va¹í instalace Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Tato zpráva je zobrazena proto, ¾e va¹e instalace je Serendipity %s, ale je¹tì nebyla updatována databáze pro tuto verzi');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Update databáze (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Zde jsou .sql soubory, která musíte spustit pøed pokraèováním práce se Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Úlohy specifické pro tuto verzi');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '®ádné specifické úlohy');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Mohu pokraèovat v tìchto úlohách?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Ne, spustím je manuálnì');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ano, pokraèujte');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Není tøeba ¾ádný upgrade');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity je upgradován');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vynechal jste stupeò upgrade Serendipity, ujistìte se, ¾e databáze je správnì nainstalována a plánované funkce jsou spu¹tìny');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Va¹e instalace Serendipity je upgradována na %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Kliknutím %ssem%s se vrátíte do va¹eho weblogu');
@define('ADMIN_ENTRIES', 'Záznamy');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nebylo mo¾né se spojit s databází MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nebylo mo¾né vybrat databázi: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nebylo mo¾né vybrat u¾ivatelské informace: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nebylo mo¾né vybrat informace o kategorii: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nebylo mo¾né vybrat informace o záznamu: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nebylo mo¾né vybrat informace o komentáøi: %s.');
@define('MYSQL_REQUIRED', 'Pro provedení této akce je nutné mít databázi MySQL.');
@define('CREATE_AUTHOR', 'Vytvoøit autora \'%s\'.');
@define('CREATE_CATEGORY', 'Vytvoøit kategorii \'%s\'.');
@define('MT_DATA_FILE', 'Soubory Movable Type');
@define('INSTALL_DBPORT', 'Port databáze');
@define('INSTALL_DBPORT_DESC', 'Port pou¾itý pro spojení k va¹emu databázovému serveru');
@define('IMPORT_PLEASE_ENTER', 'Vlo¾te data po¾adovaná ní¾e');
@define('IMPORT_NOW', 'Importovat!');
@define('IMPORT_STARTING', 'Start importu...');
@define('IMPORT_FAILED', 'Import se nezdaøil');
@define('IMPORT_DONE', 'Import úspì¹nì dokonèen');
@define('IMPORT_WEBLOG_APP', 'Weblogová aplikace');
@define('IMPORT_NOTES', 'Poznámka:');
@define('IMPORT_STATUS', 'Stav po importu');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import (roz¹íøený WordPress RSS import), vy¾aduje PHP5 a mù¾e vy¾adovat pøíli¹ mnoho pamìti');
@define('RSS_IMPORT_BODYONLY', 'Ulo¾it celý importovaný text do "hlavní" èásti, nerozdìlovat do "roz¹íøené" èásti.');
@define('IMPORT_GENERIC_RSS', 'Základní RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Odeslat odezvy na odkazy obsa¾ené v záznamu');
@define('RSS_IMPORT_CATEGORY', 'Pou¾ít tuto kategorii pro neurèené záznamy');
@define('IMPORT_WP_PAGES', 'Zobrazovat jako obyèejné pøíspìvky blogu i pøílohy a statické stránky?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nebyl nalezen.');
@define('CONVERT_HTMLENTITIES', 'Zkusit automatickou konverzi HTML entit?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administrátorská sekce');
@define('WRONG_USERNAME_OR_PASSWORD', 'Zøejmì jste vlo¾il ¹patné jméno nebo heslo!');
@define('PLEASE_ENTER_CREDENTIALS', 'Zadejte prosím pøihla¹ovací údaje.');
@define('AUTOMATIC_LOGIN', 'Ulo¾it informace');
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
@define('FURTHER_LINKS', 'Dal¹í odkazy');
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
@define('ENTRY_PUBLISHED_FUTURE', 'Tento záznam je¹tì není publikován.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lokální dokumentace');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Historie verzí');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Pluginy pro postranní sloupce');
@define('EVENT_PLUGINS', 'Pluginy událostí');
@define('CONFIGURE_PLUGINS', 'Konfigurace pluginù');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Nesplnìné po¾adavky: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aktualizace na verzi %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Kliknìte a instalujte nový %s');
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
@define('RIP_ENTRY', 'Zru¹en záznam #%s');
@define('NEW_ENTRY', 'Nový záznam');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Text záznamu');
@define('EXTENDED_BODY', 'Roz¹íøená textová èást');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Koncept tohoto záznamu byl ulo¾en');
@define('IFRAME_PREVIEW', 'Serendipity nyní vytváøí náhled va¹eho záznamu...');
@define('IFRAME_WARNING', 'Vá¹ prohlí¾eè nepodporuje iframe. Otevøete soubor serendipity_config.inc.php a nastavte promìnnou $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Upozornìní: Datum je specifikováno ¹patnì. Pou¾ijte formát YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Roz¹íøené volby');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tento odkaz není mínìn jako klikatelný. Obsahuje zpìtné URI záznamu. Tento URI mù¾ete pou¾ít k odesílání pingù a sledování odezvy na tento záznam. Odkaz zkopírujete kliknutím pravou my¹í a volbou "Kopírovat odkaz" v Internet Exploreru nebo "Zkopírovat umístìní odkazu" v Mozille.');
@define('RESET_DATE', 'Resetovat datum');
@define('RESET_DATE_DESC', 'Kliknìte a resetujte datum na aktuální');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Správa u¾ivatelù');
@define('CREATE_NEW_USER', 'Vytvoøit nového u¾ivatele');
@define('CREATE_NOT_AUTHORIZED', 'Nemù¾ete editovat u¾ivatele se stejnou úrovní jako je va¹e');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nemù¾ete vytvoøit u¾ivatele s vy¹¹í úrovní ne¾ je va¹e');
@define('CREATED_USER', 'Nový u¾ivatel %s byl vytvoøen');
@define('MODIFIED_USER', 'Nastavení u¾ivatele %s byla zmìnìna');
@define('USER_LEVEL', 'Úroveò');
@define('WARNING_NO_GROUPS_SELECTED', 'Varování: Nezvolili jste si èlenství v ¾ádné skupinì. To by vás vylouèilo z øízení práv u¾ivatelských skupin, a proto va¹e èlenství ve skupinì nebude zmìnìno.');
@define('DELETE_USER', 'Chcete vymazat u¾ivatele #%d %s. Myslíte to vá¾nì? Tato akce znemo¾ní prohlí¾et jím vytvoøené záznamy na hlavní stránce.');
@define('DELETED_USER', 'U¾ivatel #%d %s je vymazán.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Upravuj skupiny');
@define('DELETED_GROUP', 'Skupina #%d %s smazána.');
@define('CREATED_GROUP', 'Nová skupina %s byla vytvoøena');
@define('MODIFIED_GROUP', 'Vlastnosti skupiny %s byly zmìnìny');
@define('CREATE_NEW_GROUP', 'Vytvoøit novou skupinu');
@define('DELETE_GROUP', 'Chystáte se smazat skupinu #%d %s. Myslíte to vá¾nì?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hledat komentáøe');
@define('COMMENTS_FILTER_SHOW', 'Zobrazit');
@define('COMMENTS_FILTER_ALL', 'V¹e');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Pouze povolené');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Èekající na povolení');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Èeká na potvrzení u¾ivatelem');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Jste se jist vymazáním vybraných komentáøù?');
@define('PAGE_BROWSE_COMMENTS', 'Stránka %s ze %s, celkem %s komentáøù');
@define('COMMENT_IS_DELETED', '(Komentáø odstranìn)');
@define('COMMENT_MODERATED', 'Komentáø è.%s byl úspì¹nì nastaven jako schválený');
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
@define('CATEGORY_SAVED', 'Kategorie ulo¾ena');
@define('CATEGORY_ALREADY_EXIST', 'Kategorie nazvaná "%s" skuteènì existuje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategorie #%s byla zru¹ena. Star¹í záznamy byly pøemístìny do #%s');
@define('CATEGORY_DELETED', 'Kategorie #%s byla zru¹ena.');
@define('INVALID_CATEGORY', '®ádná kategorie nebyla urèena k vymazání');
@define('EDIT_THIS_CAT', 'Editace "%s"');
@define('CATEGORY_REMAINING', 'Vymazat kategorii a pøemístit záznamy do kategorie');
@define('PARENT_CATEGORY', 'Nadøazená kategorie');
@define('CATEGORY_HIDE_SUB', 'Schovat pøíspìvky z podkategorií?');
@define('CATEGORY_HIDE_SUB_DESC', 'Pokud je zobrazená kategorie, standardnì se zobrazují i v¹echny pøíspìvky z jejích podkategorií. Pokud je volba zapnuta, budou se zobrazovat jen a pouze pøíspìvky z vybrané kategorie.');
@define('CREATE_NEW_CAT', 'Vytvoøení nové kategorie');
@define('ALREADY_SUBCATEGORY', '%s je opravdu subkategorie pod %s.');
@define('NO_CATEGORIES', '®ádné kategorie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Není mo¾né porovnat kontrolní souèty! (v základním adresáøi chybí soubor checksums.ini.php)');
@define('CHECKSUMS_PASS', 'V¹echny soubory zkontrolovány.');
@define('CHECKSUM_FAILED', 'Kontrola selhala: %s je po¹kozený nebo pozmìnìný');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import dat');
@define('EXPORT_ENTRIES', 'Export záznamù');
@define('EXPORT_FEED', 'Exportovat plný RSS kanál');
@define('CREATE_THUMBS', 'Vytvoøit náhledy');
@define('WARNING_THIS_BLAHBLAH', "POZOR:\\nTato akce mù¾e trvat déle, pokud máte mnoho obrázkù bez náhledù.");
@define('SYNC_OPTION_LEGEND', 'Volby synchronizace náhledù obrázkù');
@define('SYNC_OPTION_KEEPTHUMBS', 'Zachovat v¹echny existující náhledy');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Zachovat existující náhledy pouze pokud mají správnou velikost');
@define('SYNC_OPTION_DELETETHUMBS', 'Znovu vytvoøit v¹echny náhledy');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' byl nastaven jako defaultní vzor (template)');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varování: Vá¹ vzor pou¾ívá nepovolenou metodu, je-li to mo¾né, proveïte aktualizaci');
@define('STYLE_OPTIONS_NONE', 'Toto téma/styl nemá specifické volby. Pokud chcete vìdìt, jak mù¾ete pro svoje ¹ablony nastavit specifické volby, ètìte Technical Documentation na www.s9y.org  "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Volby pro téma/stylu');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Je upravené prostøedí pro administraci');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Nastavit jako vzor');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Provìøit a ulo¾it');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Odstranit oznaèené pluginy');
@define('SAVE_CHANGES_TO_LAYOUT', 'Ulo¾it zmìny layoutu');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizace databáze s adresáøem obrázkù');
@define('SYNC_DONE', 'Hotovo (synchronizováno %s obrázkù).');
@define('RESIZE_BLAHBLAH', '<b>Zmìnit rozmìr %s</b>');
@define('ORIGINAL_SIZE', 'Pùvodní rozmìr: <i>%sx%s</i> pixelù');
@define('RESIZING', 'Zmìna rozmìrù');
@define('RESIZE_DONE', 'Hotovo (upraven rozmìr %s obrázkù).');
@define('KEEP_PROPORTIONS', 'Zachovat proporce');
@define('REALLY_SCALE_IMAGE', 'Opravdu zmìnit rozmìr? Nelze vrátit!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Zde mù¾ete zadat nový rozmìr obrázku. Pokud chcete zachovat proporce, zadejte jen jednu hodnotu a stisknìte klávesu TAB, nový rozmìr bude dopoèítán automaticky:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nový rozmìr: ');
@define('SCALING_IMAGE', 'Zmìna %s na %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Adresáøe a soubory byly úspì¹nì pøesunuty do  %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Adresáøe a soubory nemohly být pøesunuty do  %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Adresáø <strong>%s</strong> byl vytvoøen.');
@define('PARENT_DIRECTORY', 'Základní adresáø');
@define('CONFIRM_DELETE_DIRECTORY', 'Jste si jist, ¾e chcete odstranit v¹echen obsah adresáøe %s?');
@define('ERROR_NO_DIRECTORY', 'Chyba: Adresáø %s neexistuje');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nelze odstranit neprázdný adresáø. Zkuste zvolit "vynucené mazání", pokud potøebujete vymazat tyto soubory, a ode¹lete po¾adavek znovu. Existující soubory jsou:');
@define('DIRECTORY_DELETE_FAILED', 'Vymazání adresáøe %s se nepodaøilo. Zkontrolujte oprávnìní nebo ètìte zprávu vý¹e.');
@define('DIRECTORY_DELETE_SUCCESS', 'Adresáø %s byl úspì¹nì vymazán.');
@define('CHECKING_DIRECTORY', 'Kontrola souborù v adresáøi %s');
@define('DELETE_DIRECTORY', 'Vymazat adresáø');
@define('DELETE_DIRECTORY_DESC', 'Chcete vymazat obsah adresáøe, obsahující mediální soubory, které mohou být pou¾ívány ve va¹ich záznamech.');
@define('FORCE_DELETE', 'Vymazat V©ECHNY soubory v adresáøi, vèetnì tìch, které nejsou vytvoøeny pomocí Serendipity');
@define('CREATE_DIRECTORY', 'Vytvoøit adresáø');
@define('CREATE_NEW_DIRECTORY', 'Vytvoøit nový adresáø');
@define('CREATE_DIRECTORY_DESC', 'Zde mù¾ete vytvoøit adresáø pro ukládání mediálních souborù. Zvolte název adresáøe a pøípadný nadøízený adresáø.');
@define('ABOUT_TO_DELETE_FILE', 'Chcete vymazat <b>%s</b><br />Jestli¾e pou¾íváte tento soubor v nìjakých záznamech, zpùsobí to nepøístupnost odkazù nebo obrázkù.<br />Chcete pøesto pokraèovat?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Chyba: Soubor u¾ ve va¹em poèítaèi existuje!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nelze nalézt soubor s názvem <b>%s</b>, mo¾ná je opravdu vymazán?');
@define('ERROR_FILE_FORBIDDEN', 'Nejste oprávnìn nahrávat soubory s aktivním obsahem');
@define('REMOTE_FILE_NOT_FOUND', 'Soubor nebyl na vzdáleném serveru nalezen, jste si jist ¾e URL: <b>%s</b> je správné?');
@define('FILE_FETCHED', '%s nalezen');
@define('FILE_UPLOADED', 'Soubor %s je úspì¹nì nahrán.');
@define('DELETE_FILE_FAIL', 'Nezdaøilo se vymazat soubor <b>%s</b>');
@define('DELETE_FILE', 'Vymazat soubor s názvem <b>%s</b>');
@define('FOUND_FILE', 'Zalo¾it nový/zmìnit soubor: %s.');
@define('FILENAME_REASSIGNED', 'Automaticky pøidìlené nové jméno souboru: %s');
@define('ERROR_FILE_EXISTS', 'Chyba: Toto jméno souboru je u¾ pou¾ito, zvolte jiné!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'odkazován');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Nový název: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Pøidání obrázku...');
@define('THUMB_CREATED_DONE', 'Náhled je vytvoøen.<br>Hotovo.');
@define('THUMBNAIL_USING_OWN', '%s je pou¾it jako vlastní náhled, proto¾e je pøíli¹ malý.');
@define('THUMBNAIL_FAILED_COPY', '%s nelze pou¾ít jako vlastní náhled, nebo» jej nelze zkopírovat!');
@define('DELETE_THUMBNAIL', 'Vymazán náhled obrázku s názvem <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Neznámá chyba, soubor nebyl nahrán. Je mo¾né, ¾e délka souboru pøekraèuje maximum, povolené serverem. Spojte se s va¹ím ISP nebo editujte soubor php.ini a povolte vìt¹í velikost.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Chyba: Nemù¾ete uploadovat soubory vìt¹í ne¾  %s bytù!');
@define('MEDIA_UPLOAD_DIMERROR', 'Chyba: Nemù¾ete uploadovat soubory obrázkù vìt¹í ne¾  %s x %s pixelù!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Soubor pøipojen odkazem.<br />Hotovo.');
@define('DELETE_HOTLINK_FILE', 'Vymazán odkazovaný soubor <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nelze spustit: "%s", chyba: %s, vrací promìnnou: %d');
@define('SKIPPING_FILE_EXTENSION', 'Vynechán soubor: Chybìjící pøípona %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Vynechán soubor: %s nelze naèíst.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Nastavte shodná práva pro v¹echny podøízené adresáøe');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Pou¾ít náhled.');
@define('I_WANT_BIG_IMAGE', 'Pou¾ít celý obrázek.');
@define('I_WANT_NO_LINK', 'Zobrazit jako obrázek');
@define('I_WANT_IT_TO_LINK', 'Zobrazit jako odkaz (URL):');
@define('MEDIA_ALT', 'Atribut ALT (popis nebo krátký popis)');
@define('MEDIA_TITLE', 'Atribut TITLE (zobrazuje se pøi najetí my¹í na obrázek)');
@define('IMAGE_SIZE', 'Obrázek o rozmìru');
@define('IMAGE_ALIGNMENT', 'Úprava obrázku');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Vlo¾ení obrázku');
@define('MEDIA_TARGET', 'Cíl odkazu');
@define('MEDIA_TARGET_JS', 'Popup okno (pomocí JavaScriptu, pøizpùsobitelná velikost)');
@define('MEDIA_ENTRY', 'Samostatný pøíspìvek');
@define('MEDIA_TARGET_BLANK', 'Popup okno (pomocí target=_blank)');
@define('YOU_CHOSE', 'Vybral jste %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Otoèit o 90 stupòù doleva');
@define('IMAGE_ROTATE_RIGHT', 'Otoèit o 90 stupòù doprava');
@define('MEDIA_RENAME', 'Pøejmenovat soubor');
@define('THUMBNAIL_SHORT', 'Náhl.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Název souboru');
@define('SORT_ORDER_EXTENSION', 'Roz¹íøení');
@define('SORT_ORDER_SIZE', 'Velikost');
@define('SORT_ORDER_WIDTH', '©íøka obrázku');
@define('SORT_ORDER_HEIGHT', 'Vý¹ka obrázku');
@define('SORT_ORDER_DATE', 'Datum nahrání');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Pøidat soubor do schránky médií:</b><p>Zde mù¾ete ukládat mediální soubory, nebo urèit, kde je získat z WEBu! Pokud nemáte odpovídající obrázek, <a href="https://images.google.com/" target="_blank">hledejte na Google</a> odpovìï na va¹i potøebu, obvykle se zadaøí :).<p><b>Vyberte metodu:</b><br>');
@define('ENTER_MEDIA_URL', 'Vlo¾te URL pøidávaného souboru:');
@define('ENTER_MEDIA_UPLOAD', 'Vyberte soubor pro nahrání:');
@define('SAVE_FILE_AS', 'Ulo¾it soubor jako:');
@define('STORE_IN_DIRECTORY', 'Ulo¾it do následujího adresáøe: ');
@define('IMAGE_MORE_INPUT', 'Pøidat více obrázkù');
@define('ENTER_MEDIA_URL_METHOD', 'Zpùsob pøipojení:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Poznámka: Pokud zvolíte odkaz na server, ujistìte se, ¾e máte potøebná práva, nebo ¾e jde o vá¹ web. Odkazy vám umo¾ní vyu¾ívat obrázky z jiných ne¾ místních zdrojù.');
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
@define('NO_IMAGES_FOUND', '®ádné obrázky');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'v¹echny adresáøe');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigurace byla zapsána a ulo¾ena');
@define('DIAGNOSTIC_ERROR', 'Diagnostika detekovala nìjaké chyby ve vkládaných informacích:');
@define('FULL_COMMENT_TEXT', 'Ano, s plným znìním komentáøe');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Databáze');
@define('INSTALL_CAT_DB_DESC', 'Sem vlo¾te v¹ech informace o databázi. Serendipity je potøebuje k funkci.');
@define('INSTALL_DBTYPE', 'Typ');
@define('INSTALL_DBTYPE_DESC', 'Typ databáze');
@define('INSTALL_DBHOST', 'Hostitel');
@define('INSTALL_DBHOST_DESC', 'Název hostitelského serveru');
@define('INSTALL_DBUSER', 'U¾ivatel');
@define('INSTALL_DBUSER_DESC', 'U¾ivatelské jméno');
@define('INSTALL_DBPASS', 'Heslo');
@define('INSTALL_DBPASS_DESC', 'U¾ivatelské heslo');
@define('INSTALL_DBNAME', 'Název');
@define('INSTALL_DBNAME_DESC', 'Název databáze');
@define('INSTALL_DBPREFIX', 'Prefix');
@define('INSTALL_DBPREFIX_DESC', 'Prefix pro záznamy v databázi, napø. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Pou¾ít trvalé pøipojení');
@define('INSTALL_DBPERSISTENT_DESC', 'Umo¾nit trvalé pøipojení k databázi, více <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">zde</a>. Bì¾nì to není doporuèeno');
@define('INSTAL_DB_UTF8', 'Povolit DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Vyvolá dotaz MySQL "SET NAMES", aby se zjistila po¾adovaná znaková sada pro databázi. Zapnìte to nebo vypnìte, pokud se vám na blogu objevují  podivné znaky.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cesty');
@define('INSTALL_CAT_PATHS_DESC', 'Cesty k rùzným adresáøùm a souborùm. Nezapomeòte na ukonèovací lomítko pro adresáøe!');
@define('INSTALL_FULLPATH', 'Úplná cesta');
@define('INSTALL_FULLPATH_DESC', 'Úplná absolutní cesta k va¹í instalaci Serendipity.');
@define('INSTALL_UPLOADPATH', 'Cesta pro uploady');
@define('INSTALL_UPLOADPATH_DESC', 'Sem budou smìrovány uploady, relativnì k \'úplné cestì\' - typicky \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativní cesta');
@define('INSTALL_RELPATH_DESC', 'Cesta k Serendipity pro vá¹ prohlí¾eè, typicky \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativní cesta k template');
@define('INSTALL_RELTEMPLPATH_DESC', 'Cesta k adresáøi, obsahujícímu vzory (templates) - relativní k \'relativní cestì\'');
@define('INSTALL_RELUPLOADPATH', 'Relativní cesta k uploadùm');
@define('INSTALL_RELUPLOADPATH_DESC', 'Cesta k uploadùm pro prohlí¾eèe - relativní k \'relativní cestì\'');
@define('INSTALL_URL', 'URL weblogu');
@define('INSTALL_URL_DESC', 'Základní URL va¹í instalace Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetekce pou¾ité HTTP hostitelské adresy');
@define('INSTALL_AUTODETECT_URL_DESC', 'Pøi volbì "Ano" bude Serendipity pøedpokládat, ¾e HTTP adresa hostitele, pou¾itá náv¹tìvníkem, je va¹e základní nastavení URL. Zapnutí umo¾ní pou¾ívání rùzných domén k pøístupu na va¹e stránky, a pou¾ití této jedné domény pro v¹echny odkazy ke sledování zmìn na stránkách.');
@define('INSTALL_INDEXFILE', 'Indexový soubor');
@define('INSTALL_INDEXFILE_DESC', 'Název souboru pou¾itého jako index');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Trvalé odkazy');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definuje rùzné vzory  URL patterns pro definici trvalých odkazù (permanent links) ve va¹em blogu. Doporuèujeme pou¾ít defaultní nastavení; pokud ne, mìli byste zkusit pou¾ít hodnotu %id% tam, kde je to mo¾né, abyste pøede¹li dotazùm do databáze pøi hledání cílové URL.');
@define('INSTALL_PERMALINK', 'Struktura URL trvalých odkazù');
@define('INSTALL_PERMALINK_DESC', 'Zde mù¾ete definovat relativní strukturu URL, kde zaèátek je va¹e base URL, z ní¾ mohou být  pøíspìvky dostupné. Mù¾ete pou¾ít promìnné  %id%, %title%, %day%, %month%, %year% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_AUTHOR', 'Struktura URL autorù');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Zde mù¾ete definovat relativní strukturu URL, kde zaèátek je va¹e base URL, z ní¾ mohou být dostupné pøíspìvky urèitých autorù.  Mù¾ete pou¾ít promìnné %id%, %realname%, %username%, %email% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_CATEGORY', 'Struktura URL kategorií');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Zde mù¾ete definovat relativní strukturu URL, kde zaèátek je va¹e base URL, z ní¾ mohou být dostupné urèité kategorie. Mù¾ete pou¾ít promìnné  %id%, %name%, %parentname%, %description% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Struktura URL trvalých odkazù kategorií RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Zde mù¾ete definovat relativní strukturu URL, kde zaèátek je va¹e base URL, z ní¾ mohou být dostupné  RSS kanály z urèitých kategorií. Mù¾ete pou¾ít promìnné %id%, %name%, %description% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Struktura URL adresy pro RSS kanál autorù');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Zde mù¾ete definovat relativní strukturu URL, kde zaèátek je va¹e base URL, z ní¾ mohou být být dostupné RSS kanály od urèitých u¾ivatelù. Mù¾ete pou¾ít promìnné   %id%, %realname%, %username%, %email% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Cesta k archivùm');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Cesta k archivu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Cesta ke kategoriím');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Cesta k autorùm');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Cesta k odhlá¹ení komentáøù');
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
@define('INSTALL_USERNAME_DESC', 'Jméno pro pøihlá¹ení admina');
@define('INSTALL_PASSWORD', 'Heslo admina');
@define('INSTALL_PASSWORD_DESC', 'Heslo pro pøihlá¹ení admina');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Skuteèné jméno');
@define('USERCONF_REALNAME_DESC', 'Plné jméno autora. Toto jméno uvidí ètenáøi');
@define('INSTALL_EMAIL', 'E-mail admina');
@define('INSTALL_EMAIL_DESC', 'E-mail pro pøihlá¹ení admina');
@define('INSTALL_SENDMAIL', 'Posílat e-maily adminovi?');
@define('INSTALL_SENDMAIL_DESC', 'Chcete dostávat e-mailem zprávy o komentáøích k va¹im záznamùm?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Název');
@define('INSTALL_BLOGNAME_DESC', 'Název va¹eho weblogu');
@define('INSTALL_BLOGDESC', 'Popis');
@define('INSTALL_BLOGDESC_DESC', 'Popis weblogu');
@define('INSTALL_BLOG_EMAIL', 'E-Mail pro blog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Toto nastaví E-Mailovou adresu, která je pou¾ita v poli "From"- (od) pro odchozí e-maily. Nastavte si tuto adresu tak, aby byla rozpoznána mailovým serverem pou¾ívaným va¹ím webhosterem - mnoho mailserverù odmítá po¹tu, která má neznámou From-addresu (adr odesilatele).');
@define('COMMENT_TOKENS', 'Pou¾ít pøíznaky pro schvalování komentáøù?');
@define('COMMENT_TOKENS_DESC', 'Pokud jsou pøíznaky pou¾ívány, komentáøe mohou být schváleny nebo odstranìny kliknutím na odkaz v oznamovacím emailu, ani¾ by bylo tøeba pøihlásit se do blogu. Mìjte na pamìti, ¾e je to sice pohodlná vlastnost, ale pokud nìkdo získá pøístup k Va¹í mailové schránce, mù¾e schvalovat/mazat komentáøe ani¾ by musel zadávat pøihla¹ovací data.');
@define('INSTALL_LANG', 'Jazyk');
@define('INSTALL_LANG_DESC', 'Vyberte jazyk va¹eho weblogu');
@define('INSTALL_CHARSET', 'Volba znakové sady - Charset');
@define('INSTALL_CHARSET_DESC', 'Zde mù¾ete volit mezi UTF-8 nebo národní (ISO, EUC, ...) znakovou sadou. Nìkteré jazyky mají jen pøeklady UTF-8, tak¾e nastavení znakové sady na národní nemá ¾ádný úèinek. UTF-8 se doporuèuje pro nové instalace. Nemìòte toto nastavení, jestli¾e jste ji¾  napsali pøíspìvky se speciálními (národními) znaky - mohlo by zpùsobit poru¹ení textu. Pøeètìte si o tomto problému více na  https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Typ kalendáøe');
@define('INSTALL_CAL_DESC', 'Vyberte formát kalendáøe');
@define('AUTOLANG', 'Pou¾ít jazyk prohlí¾eèe jako defaultní');
@define('AUTOLANG_DESC', 'Zapnutím této volby urèíte, ¾e jazyk prohlí¾eèe bude pøevzat jako základní pro u¾ivatelské rozhraní a pro záznamy.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Povolit Plugin ACL pro u¾ivatelské skupiny?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Jestli¾e je volba "Plugin ACL pro u¾ivatelské skupiny" v konfiguraci povolena, mù¾ete urèit, které skupiny u¾ivatelù mohou provádìt urèité pluginy/události.');
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
@define('INSTALL_FETCHLIMIT_DESC', 'Poèet záznamù, zobrazených na hlavní stránce');
@define('INSTALL_RSSFETCHLIMIT', 'Èlánky, které se mají zobrazit v RSS Feedu');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Poèet èlánkù, které se má zobrazit na ka¾dé stránce  v RSS Feedu.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'Jak mají být øazeny výsledky hledání?');
@define('SYNDICATION_RFC2616', 'Aktivovat strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'Kdy¾ neaktivujete  RFC2616, znamená to, ¾e v¹echny podmínìné GETy na Serendipity vrátí pøíspìvky, které byly modifikovány od èasu posledního po¾adavku. Kdy¾ tohle nastavíte na  "false", va¹i náv¹tìvníci dostanou v¹echny èlánky od svého posledního po¾adavku, co¾ se pova¾uje za dobrou vìc. Av¹ak nìkteøí agenti jako  Planet fungují divnì, kdy¾ tohle nastane a taky to poru¹uje  RFC2616. Tak¾e kdy¾ nastavíte tuto volbu na  "TRUE", budete vyhovovat RFC ale náv¹tìvníkùm   mohou ve  èteèkách  bìhem prázdnin zmizet pøíspìvky. V ka¾dém pøípadì, buï to vadí agregátorùm jako je  Planet, nebo to vadí náv¹tìvníkùm blogu. Kdy¾ se vyskytnou stí¾nosti z kterékoli strany, mù¾ete tuhle volbu pøepnout.  Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Pou¾ijte kompresi gzip');
@define('INSTALL_USEGZIP_DESC', 'Doporuèujeme pou¾ít kompresi stránek pro jejich urychlené naèítání');
@define('INSTALL_XHTML11', 'Vnutit kompatibilitu s XHTML 1.1?');
@define('INSTALL_XHTML11_DESC', 'Chcete plnou kompatibilitu s XHTML 1.1? (mù¾e zpùsobit problémy ve star¹ích prohlí¾eèích)');
@define('INSTALL_POPUP', 'Umo¾nit pou¾ití vyskakovacích oken');
@define('INSTALL_POPUP_DESC', 'Chcete ve weblogu pou¾ívat vyskakovací okna pro komentáøe, odezvy a pod.?');
@define('INSTALL_EMBED', 'Je Serendipity vlo¾ené?');
@define('INSTALL_EMBED_DESC', 'Pokud chcete umístit weblog do va¹ich stránek, zvolte ano pro odstranìní v¹ech záhlaví, bude zobrazován jen obsah. Mù¾ete pou¾ít volitelný soubor indexFile pro obalení obsahu vlastními záhlavími a sloupci. Více informací najdete v souboru README!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Udìlat externí odkazy klikatelné?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Ne": Neoznaèené externí odkazy (Top výstupy, Top odbìratelé, U¾ivatelské komentáøe) nebudou ukázány/budou ukázány jako bì¾ný text v¹ude, kde je to mo¾né, pro omezení spamu (doporuèeno). "Ano": Neoznaèené externí odkazy budou ukázány jako hyperlinky. Toto mù¾e být pøepsáno v konfiguraci pluginù!');
@define('INSTALL_TRACKREF', 'Povolit  referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Povolení referrer tracking vám uká¾e, které weby odkazují na va¹e èlánky. Dnes je to èasto zneu¾íváno pro spam, tak¾e to mù¾ete zakázat, chcete-li.');
@define('INSTALL_BLOCKREF', 'Blokovaní odbìratelé');
@define('INSTALL_BLOCKREF_DESC', 'Chcete zamezit pøístup z urèitých adres? Seznam adres oddìlujte \';\' a pozor, adresy jsou blokovány vèetnì subadres!');
@define('INSTALL_REWRITE', 'Pøepisování URL');
@define('INSTALL_REWRITE_DESC', 'Urèení pravidel pro tvorbu URL. Zapnutí módu pøepisování zajistí správné URL va¹eho weblogu a lep¹í indexaci pro vyhledávaèe, jako je Google. Vá¹ webserver musí podporovat mod_rewrite nebo "AllowOverride All" v adresáøi pro Serendipity. Defaultní nastavení je automaticky detekováno.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Posun èasové zóny vùèi serveru?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Posun èasu pøíspìvkù vùèi èasu na serveru. Vyberte "ano" pro zadání relativního èasového posunu vùèi hodinám serveru. Nikoliv posun vùèi GMT (Greenwich mean time).');
@define('INSTALL_OFFSET', 'Èasový posun serveru');
@define('INSTALL_OFFSET_DESC', 'Vlo¾te poèet hodin mezi èasem serveru (aktuálnì: %clock%) a va¹í èasovou zónou');
@define('INSTALL_SHOWFUTURE', 'Zobrazit budoucí záznamy');
@define('INSTALL_SHOWFUTURE_DESC', 'Tato volba umo¾ní zobrazení budoucích záznamù blogu. Defaultnì jsou skryté a budou zobrazeny a¾ v èase jejich vydání.');
@define('INSTALL_ACL', 'Aplikovat práva na ètení pro kategorie');
@define('INSTALL_ACL_DESC', 'Pokud je povoleno, budou na kategorie aplikována nastavení práv pro skupiny u¾ivatelù, kdy¾ si pøihlá¹ení u¾ivatelé budou prohlí¾et vá¹ blog. Není-li povoleno, práva na ètení pro kategorie nejsou aplikována,  a  zlep¹uje se rychlost blogu. Jestli¾e nechcete mít práva pro ètení pro rùzné u¾ivatele,  toto nastavení zaka¾te.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Zobrazit celé èlánky vèetnì roz¹íøené èásti v RSS kanálu');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrázek kanálu RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL obrázku ve formátu GIF/JPEG/PNG, je-li k dispozici. (prázdné: logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '©íøka');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'v pixelech, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Vý¹ka');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'v pixelech, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Zobrazovat e-mailové adresy?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "hlavní redaktor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailová adresa hlavního redaktora, je-li k dispozici. (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailová adresa webmastera, je-li k dispozici. (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (¾ivotnost)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Èas v minutách, po kterém by vá¹ weblog nemìl být nadále ke¹ován v cizích serverech/aplikacích (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Pole "pubDate" je pro kanál RSS ukryto, chcete ukázat datum posledního záznamu?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Úpravy obrázkù');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Vlo¾ení základních informací o zpùsobu zpracování obrázkù');
@define('INSTALL_IMAGEMAGICK', 'Pou¾ívat Imagemagick?');
@define('INSTALL_IMAGEMAGICK_DESC', 'Máte instalován Imagemagick?');
@define('INSTALL_IMAGEMAGICKPATH', 'Cesta ke konverznímu souboru');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Úplná cesta a název konverzního souboru Imagemagick');
@define('INSTALL_THUMBSUFFIX', 'Sufix náhledù');
@define('INSTALL_THUMBSUFFIX_DESC', 'Náhledy budou pojmenovány original.sufix.ext');
@define('INSTALL_THUMBWIDTH', 'Rozmìry náhledù');
@define('INSTALL_THUMBWIDTH_DESC', 'Pevná ¹íøka automaticky generovaných náhledù');
@define('INSTALL_THUMBDIM', 'Omezující rozmìr pro náhledy');
@define('INSTALL_THUMBDIM_LARGEST', 'Del¹í hrana');
@define('INSTALL_THUMBDIM_WIDTH', '©íøka');
@define('INSTALL_THUMBDIM_HEIGHT', 'Vý¹ka');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. velikost uploadvoaného souboru');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Zadejte maximální velikost pro uploadované (nahrávané) soubory v bytech. Toto nastavení mù¾e být  pøepsáno nastavením serveru v php.ini: upload_max_filesize, post_max_size, max_input_time mají pøednost pøed touto volbou. Prázdný øetìzec znamená, ¾e se pou¾ije limit serveru.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. ¹íøka obrázkù pro upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Zadejte maximální ¹íøku pro uploadované obrázky v pixelech.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. vý¹ka obrázku pro upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Zadejte maximální vý¹ku v pixelech pro uploadované obrázky.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Povolit synchronizaci medií za bìhu (on the fly)');
@define('ONTHEFLYSYNCH_DESC', 'Pokud je to povoleno, Serendipity bude porovnávat databázi medií se soubory ulo¾enými na serveru a bude synchronizovat obsah databáze a adresáøe.');
@define('MEDIA_DYN_RESIZE', 'Povolit dynamickou zmìnu velikosti obrázkù?');
@define('MEDIA_DYN_RESIZE_DESC', 'Je-li povoleno, mù¾e  media selector vracet obrázky v jakékoli po¾adované velikosti pøes promìnnou  GET. Výsledky jsou ke¹ovány, a tak se mù¾e vytvoøit velký soubor, jestli¾e to intenzivnì pou¾íváte.');
@define('MEDIA_EXIF', 'Importovat EXIF/JPEG  data obrázku');
@define('MEDIA_EXIF_DESC', 'Je-li povoleno, existující EXIF/JPEG metadata obrázkù budou parsována a ulo¾ena v databázi, aby je bylo mo¾no zobrazit v galerii medií.');
@define('MEDIA_PROP', 'Vlastnosti media');
@define('MEDIA_PROP_DESC', 'Zadejte seznam polí vlastností oddìlených  ";" , které chcete definovat pro ka¾dý souor v mediích');
@define('MEDIA_PROP_MULTIDESC', '(Za ka¾dou polo¾ku mù¾ete pøidat ":MULTI", co¾ bude indikovat, ¾e tato polo¾ka bude obsahovat dlouhý text místo jen nìkolika znakù)');
@define('MEDIA_KEYWORDS', 'Media - klíèová slova');
@define('MEDIA_KEYWORDS_DESC', 'Zadejte seznam slov oddìlených  ";" která chcete pou¾ít jako pøeddefonovaná klíèová slova pro polo¾ky v mediích.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Osobní nastavení');
@define('USERCONF_CAT_PERSONAL_DESC', 'Nastavení va¹eho úètu');
@define('USERCONF_USERNAME', 'Jméno');
@define('USERCONF_USERNAME_DESC', 'Va¹e u¾ivatelské jméno (pøezdívka)');
@define('USERCONF_PASSWORD', 'Heslo');
@define('USERCONF_PASSWORD_DESC', 'Va¹e heslo');
@define('USERCONF_CHECK_PASSWORD', 'Staré heslo');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Jestli¾e zmìníte  heslo v políèku vý¹e, musíte do tohoto pole zadat souèasné heslo.');
@define('USERCONF_USERLEVEL', 'Úroveò');
@define('USERCONF_USERLEVEL_DESC', 'Tato úroveò urèuje práva u¾ivatele weblogu.');
@define('USERCONF_GROUPS', 'Èlenství ve skupinách');
@define('USERCONF_GROUPS_DESC', 'Tento u¾ivatel je èlen následujících skupin. èlenství ve více skupinách je mo¾né.');
@define('USERCONF_EMAIL', 'E-mailová adresa');
@define('USERCONF_EMAIL_DESC', 'Vá¹ e-mail');
@define('INSTALL_WYSIWYG', 'Pou¾ívat WYSIWYG editor?');
@define('INSTALL_WYSIWYG_DESC', 'Chcete pou¾ívat WYSIWYG editor? (Pracuje v IE5+, èásteènì v Mozille 1.3+)');
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
@define('USERCONF_CREATE', 'Zneplatnit u¾ivatele / zakázat aktivitu?');
@define('USERCONF_CREATE_DESC', 'Pokud je volba vybrána, u¾ivatel nebude mít ¾ádná práva k vytváøení nebo mìnìní blogu. Kdy¾ se pøihlásí do administrativní sekce, mù¾e si pouze prohlédnout osobní nastavení nebo se odhlásit.');
@define('USERCONF_ALLOWPUBLISH', 'Právo publikovat záznamy?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Umo¾nit u¾ivateli publikovat záznamy');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Ukázat li¹tu nástrojù v oknì výbìru medií?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Základní nastavení pro nové záznamy');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UPOZORNÌNÍ: Atribut úroveò u¾ivatele (userlevel) je nyní pou¾íván jen kvùli zpìtné kompatibilitì s pluginy a autorizaci. U¾ivatelská práva jsou nyní øízena pomocí èlenských skupin!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nezadali jste správné staré heslo a nejste oprávnìni heslo zmìnit. Va¹e nastavení nebylo ulo¾eno.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Jméno u¾ivatele nemù¾e být prázdné.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'osobníKonfigurace: Pøístup k osobní konfiguraci');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'osobníKonfiguraceÚroveòU¾ivatele: Zmìnit úroveò u¾ivatele (level)');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'osobníKonfiguraceNeNové: Zmìnit "zákaz nových pøíspìvkù"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'osobníKonfiguracePrávoPublikovat: Zmìnit právo na publikování pøíspìvkù');
@define('PERMISSION_SITECONFIGURATION', 'webKonfigurace: Konfigurace  pøístupu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogKonfigurace: Konfigurace pøístupu k  blogu');
@define('PERMISSION_ADMINENTRIES', 'adminPøíspìvky: Administrace pøíspìvkù');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminÚdr¾baPøíspìvkùOstatních: Administrace pøíspìvkù ostatních u¾ivatelù');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import pøíspìvkù');
@define('PERMISSION_ADMINCATEGORIES', 'adminKategorie: Administrace kategorií');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminÚdr¾baKategoriíOstatních: Administrace kategorií ostatních u¾ivatelù');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminMazáníKategorií: Smazat kategorie');
@define('PERMISSION_ADMINUSERS', 'adminU¾ivatelù: Administrace u¾ivatelù');
@define('PERMISSION_ADMINUSERSDELETE', 'adminMazáníU¾ivatelù: Smazat u¾ivatele');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminZmìnaÚrovnìU¾ivatele: Zmìna úrovnì u¾ivatele');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminU¾ivateléStejnéSkupiny: Administrace u¾ivatelù ve stejné skupinì');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminU¾ivateléJinéSkupiny: Administrace u¾ivatelù v jiných skupinách');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminNovíU¾ivatelé: Zakládat nové u¾ivatele');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminU¾ivatelskéSkupiny: Administrace skupin u¾ivatelù');
@define('PERMISSION_ADMINPLUGINS', 'adminPluginy: Administrace pluginù');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminÚdr¾baPluginùOstatních: Administrace pluginù ostatních u¾ivatelù');
@define('PERMISSION_ADMINIMAGES', 'adminObrázky: Administrace souborù  media');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminAdresáøeObrázkù: Administrace adresáøù pro media');
@define('PERMISSION_ADMINIMAGESADD', 'adminPøidatObrázek: Pøidávání nových souborù medií');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminSmazatObrázek: Mazání souborù medií');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminÚdr¾baObrázkùOstatní: Administrace souborù medií ostatních u¾ivatelù');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminProhlí¾eníObrázkù: Prohlí¾ení souborù medií');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminSynchroObrázkù: Sync thumbnailù');
@define('PERMISSION_ADMINCOMMENTS', 'adminKomentáøe: Administrace komentáøù');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplate: Administrace ¹ablon (template)');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminProhlí¾eníObrázkùOstatní: Prohlí¾ení medií ostatních u¾ivatelù');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zakázané pluginy');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zakázané události');
@define('PERMISSION_HIDDENGROUP', 'Skrytá skupina / Bez autora');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Záznam ulo¾en');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vláknové');
@define('COMMENTS_VIEWMODE_LINEAR', 'Lineární');
@define('DISPLAY_COMMENTS_AS', 'Zobrazit komentáøe jako');
@define('COMMENTS_DISABLE', 'Neumo¾nit pøidávání komentáøù');
@define('COMMENTS_ENABLE', 'Umo¾nit pøidávání komentáøù');
@define('COMMENTS_CLOSED', 'Autor neumo¾nil pøidávat komentáøe');
@define('VIEW_EXTENDED_ENTRY', 'Pokraèovat ve ètení "%s"');
@define('TRACKBACK_SPECIFIC', 'Odezva ze specifického URI na tento záznam');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Zobrazit v¹e');
@define('VIEW_TOPICS', 'Zobrazit téma');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Téma');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Záznamy nebyly vlo¾eny úspì¹nì!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamatovat informace? ');
@define('SUBMIT_COMMENT', 'Odeslat komentáø');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Pøihlásit se ke sledování komentáøù k záznamu');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Vá¹ prohlí¾eè nezaslal platný  HTTP-Referrer string. To mohlo být zpùsobeno buï ¹patnì nastaveným prohlí¾eèem/proxy nebo  Cross Site Request Forgery (XSRF), který je na vás namíøen. Po¾adovaná akce nemohla být dokonèena.');
@define('NAVLINK_AMOUNT', 'Zadejte poèet odkazù navigaèní li¹ty (ihned po zadání této volby kliknìte na "Ulo¾it" a obnovte stránku)');
@define('NAV_LINK_TEXT', 'Test odkazu');
@define('NAV_LINK_URL', 'URL adresa odkazu');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Komentáø #%s se jeví jako skuteènì odsouhlasený');
@define('COMMENT_EDITED', 'Vybraný komentáø byl editován');
@define('COMMENTS_WILL_BE_MODERATED', 'Odeslané komentáøe budou pøed uveøejnìním moderovány.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Pozor: Tento komentáø musí být pøed uveøejnìním odsouhlasen');
@define('DELETE_COMMENT', 'Vymazat komentáø');
@define('APPROVE_COMMENT', 'Odsouhlasit komentáø');
@define('REQUIRES_REVIEW', 'Vy¾ádat pøezkoumání');
@define('COMMENT_APPROVED', 'Komentáø #%s byl odsouhlasen');
@define('COMMENT_DELETED', 'Komentáø #%s byl vymazán');
@define('COMMENTS_MODERATE', 'Komentáøe a odezvy k tomuto záznamu budou moderovány');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Pozor: Tato odezva musí být pøed uveøejnìním odsouhlasena');
@define('DELETE_TRACKBACK', 'Vymazat odezvu');
@define('APPROVE_TRACKBACK', 'Odsouhlasit odezvu');
@define('TRACKBACK_APPROVED', 'Odezva #%s byla odsouhlasena');
@define('TRACKBACK_DELETED', 'Odezva #%s byla vymazána');
@define('COMMENT_NOTOKENMATCH', 'Schvalovacímu odkazu vypr¹ela platnost, nebo byl komentáø è.%s ji¾ schválen èi odstranìn');
@define('TRACKBACK_NOTOKENMATCH', 'Schvalovacímu odkazu vypr¹ela platnost, nebo byla odezva è.%s ji¾ schválena èi odstranìna');
@define('BADTOKEN', 'Neplatný odkaz pro schválení');
@define('TOP_LEVEL', 'Nejvy¹¹í úroveò');
@define('VIEW_COMMENT', 'Ukázat komentáø');
@define('VIEW_ENTRY', 'Ukázat záznam');
@define('LINK_TO_ENTRY', 'Odkaz na záznam');
@define('LINK_TO_REMOTE_ENTRY', 'Odkaz na externí záznam');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Posílání oznámení (pingback) na URI %s...');
@define('PINGBACK_SENT', 'Oznámení úspì¹né');
@define('PINGBACK_FAILED', 'Oznámení selhalo: %s');
@define('PINGBACK_NOT_FOUND', 'Oznamovací URI adresa neexistuje.');
@define('TRACKBACK_SENDING', 'Odeslání odezvy na URI %s...');
@define('TRACKBACK_SENT', 'Odezva úspì¹ná');
@define('TRACKBACK_FAILED', 'Odezva neúspì¹ná: %s');
@define('TRACKBACK_NOT_FOUND', 'URI odezvy neexistuje.');
@define('TRACKBACK_URI_MISMATCH', 'Automaticky získané URI neodpovídá va¹emu cílovému.');
@define('TRACKBACK_CHECKING', 'Testvání <u>%s</u> pro mo¾né odezvy...');
@define('TRACKBACK_NO_DATA', 'Cíl neobsahuje data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Odezva nebyla odeslána: nepodaøilo se spojení s %s na portu %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Ahoj %s,\n\nPo¾ádal jsi o zasílání oznámení o nových komentáøù k èlánku \"%s\" (<%s>). Pro potvrzení této ¾ádosti (\"Double Opt In\") klikni prosím na následující odkaz:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Ahoj %s,\n\nPoslal jsi nový komentáø na \"%s\". Komentáø zní:\n\n%s\n\nVlastník blogu po¾aduje emailové potvrzení, tak¾e je tøeba kliknout na následující odkaz a potvrdit tak komentáø:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Ahoj %s,\n\nPoslal jsi nový komentáø na \"%s\". Tvùj komentáø zní:\n\n%s\n\nVlastník blogu vy¾aduje prvotní emailové potvrzení. Znamená to, ¾e teï musí¹ svùj komentáø potvrdit kliknutím na následující odkaz:\n<%s>\n\nZároveò tím potvrdí¹ v¹echny dal¹í komentáøe, které po¹le¹ se stejným jménem a emailovou adresou, v budoucnu u¾ ¾ádná podobná oznámení dostávat nebude¹.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nový komentáø k pøihlá¹enému záznamu "%s"');
@define('SUBSCRIPTION_MAIL', "Pozor %s,\n\nA právì byl pøidán nový komentáø k záznamu, který sledujete na \"%s\", s názvem \"%s\"\nJméno odesílatele: %s\n\nZáznam najdete zde: %s\n\nMù¾ete se odhlásit zde: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Pozor %s,\n\nA právì byla pøidána nová odezva k záznamu, který sledujete na \"%s\", s názvem \"%s\"\nJméno odesílatele: %s\n\nZáznam najdete zde: %s\n\nMù¾ete se odhlásit zde: %s\n");
@define('SIGNATURE', "\n-- \n%s je vytvoøen pomocí Serendipity.\n Tento perfektní blogovací systém mù¾ete zdarma pou¾ívat také.\nNav¹tivte <https://s9y.org>, kde se dozvíte v¹e potøebné.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nový komentáø k weblogu "%s", k záznamu s názvem "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nová odezva na weblog/záznam s názvem "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Máte k dispozici tyto volby:');
@define('NEW_TRACKBACK_TO', 'Nová odezva na');
@define('NEW_COMMENT_TO', 'Nový komentáø k');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nenalezen ¾ádný záznam odpovídající volbì %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Vyhledávání %s odpovídá %s výsledkù:');
@define('SEARCH_TOO_SHORT', 'Vyhledávací dotaz musí být del¹í ne¾ 3 znaky. Ke krat¹ím slovùm mù¾ete zkusit pøidat *, jako: s9y*, abyste  vyhledávání pøimìli pracovat s krat¹ími slovy.');
@define('SEARCH_ERROR', 'Funkce vyhledávání nepracovala podle oèekávání. Poznámka pro administrátora blogu: Mohlo to být zpùsobeno nepøítomností pøíslu¹ných indexù v databázi. U¾ivatelský úèet v databázi MySQL musí být oprávnìn vykonat tento dotaz: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Specifická chyba vrácená databází byla: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Vá¹ komentáø nic neobsahuje, %svra»te se%s a zkuste to znovu');
@define('COMMENT_NOT_ADDED', 'Vá¹ komentáø nemohl být pøidán, proto¾e komentáøe k tomuto pøíspìvku byly zakázány, zadali jste ¹patná data nebo byl vá¹ komentáø zachycen antispamem.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Komentáøe od');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Va¹e potvrzení komentáøe bylo úspì¹nì pøijato.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Va¹e potvrzení komentáøe nemohlo být pøijato. Zkontrolujte prosím odkaz, na který jste kliknuli. Pokud je odkaz star¹í ne¾ 3 týdny, musíte poslat komentáø znovu.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Va¹e potvrzení ¾ádosti o zasílání oznámení o nových komentáøích bylo úspì¹nì pøijato.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Syntax konfigurace je chybná pro volbu "%s". Vy¾aduje obsah typu "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Seznam kategorií.');
@define('CATEGORIES_PARENT_BASE', 'Zobrazit jen kategorie ni¾e ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Mù¾ete vybrat rodièovskou kategorii, tak¾e budou zobrazeny jen její ni¾¹í kategori.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skrýt kategorie, které nejsou souèástí stromu kategorií');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Jestli¾e chcete skrýt kategorie, které jsou èástí jiného stromu kategorií, musíte tohle povolit. Tato mo¾nost se nejlépe  pou¾ije ve spojení s multi-blogem a pluginem  "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Skrýt zvolenou rodièovskou kategorii?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Jestli¾e omezíte výpis kategorií na specifickou kategorii,  standardnì bude  na výstupu rodièovská kategorie zobrazena. Kdy¾ tuto mo¾nost zaká¾ete, název rodièovské kategorie nebude zobrazen.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Povolit Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Je-li tato mo¾nost povolena, bude plugin pro výpis kategorií vyu¾ívat mo¾ností  Smarty-Templating. Kdy¾ tohle povolíte, mù¾ete mìnit layout pøes ¹ablonu "plugin_categories.tpl". Povolení téhle volby mù¾e zhor¹it výkon, tak¾e pokud nechcete dìlat úpravy pro jednotlivé kategorie, nechte to zakázané.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Zobrazit poèet pøíspìvkù na kategorii? ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Povolit náv¹tìvníkùm zobrazit více kategorií najednou?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Jestli¾e je tato volba povolena, bude v tomto postranním pluginu hned vedle ka¾dé kategorie za¹krtávací okénko. U¾ivatelé mohou tyto boxy za¹krtnout a vidìt jen pøíspìvky patøící do tohoto výbìru.');
@define('CATEGORIES_TO_FETCH', 'Vyhledat kategorie');
@define('CATEGORIES_TO_FETCH_DESC', 'Vyhledat kategorie podle autorù?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zobrazit seznam autorù');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Zobrazit poèet èlánkù u jména autora?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Je-li tato volba povolena, je vedle jména autora zobrazen v závorce poèet jeho pøíspìvkù.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Zobrazit pouze autory s více ne¾ X pøíspìvky');

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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID feedu, který chcete publikovat');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner image');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Název obrázku, který se má zobrazit (nebo prázdný pro poèitadlo), umístìné na  feedburner.com, napø: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner title');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Title (je-li), který se má zobrazit u obrázku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner image text');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (je-li) který se má zobrazit pøi najetí na obrázek');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Schovat odkaz na archivy, pokud nejsou ve vybraném období vydané ¾ádné pøíspìvky (vy¾aduje poèítání pøíspìvkù)');
@define('ARCHIVE_COUNT', 'Poèet prvkù v seznamu');
@define('ARCHIVE_COUNT_DESC', 'Celkový poèet zobrazených mìsícù, týdnù nebo dnù');
@define('ARCHIVE_FREQUENCY', 'Kalendáøní krok');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalendáøní krok mezi prvky seznamu');
@define('BROWSE_ARCHIVES', 'Prohlí¾ení mìsíèních archivù');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zobrazit "Serendipity" jako text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vytvoøeno v "Serendipity" se zobrazí jako text');
@define('POWERED_BY_SHOW_IMAGE', 'Zobrazit "Serendipity" s logem');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Zobrazí se logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Reklama na tvùrce systému va¹eho weblogu');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Pou¾ít https pro pøihlá¹ení');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Umo¾òuje pou¾ít spojení https pro pøihlá¹ení. Vá¹ server to musí podporovat!');
@define('SUPERUSER', 'Superu¾ivatel');
@define('SUPERUSER_OPEN_ADMIN', 'Administrace');
@define('SUPERUSER_OPEN_LOGIN', 'Pøihlá¹ení');
@define('ALLOWS_YOU_BLAHBLAH', 'Vlo¾it odkaz do postranního bloku administrace weblogu');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendáø');
@define('CALENDAR_BOW_DESC', 'Den, urèený jako zaèátek týdne. Default je pondìlí');
@define('QUICKJUMP_CALENDAR', 'Vyhledávací kalendáø');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Zaèátek týdne');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Povolit Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Jestli¾e je toto povoleno, mohou se pluginy napojovat na kalendáø a zvýrazòovat své vlastní události. Povolte jen kdy¾ máte pluginy, které toto potøebují, jinak to jen sni¾uje výkon.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Hledání záznamu');
@define('SEARCH_FULLENTRY', 'Zobrazit celý pøíspìvek');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Vlo¾ení HTML kódu do postranního sloupce');
@define('THE_NUGGET', 'Vlo¾ený HTML');
@define('BACKEND_TITLE', 'Dal¹í informace v konfiguraèní obrazovce pluginu');
@define('BACKEND_TITLE_FOR_NUGGET', 'Zde mù¾ete definovat svùj øetìzec, který bude zobrazen v konfiguraèní obrazovce pluginu spoleènì s popisem pluginu HTML Nugget. Kdy¾ máte nìkolik HTML nuggetù s prázdným tittle, toto vám pomù¾e je rozli¹it.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Zobrazit Top výstupy/odbìratele jako linky?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Ne": Výstupy a adresy odbìratelù budou zobrazeny jako èistý text pro zamezení spamu, "Ano": nebo jako hyperlinky. "Default": Pou¾ít globální nastavení (doporuèeno).');
@define('HAVE_TO_BE_LOGGED_ON', 'Pro zobrazení této stránky musíte být pøihlá¹en');
@define('WELCOME_TO_ADMIN', 'Vítejte v Administraèní sekci Serendipity .');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Velký obrázek');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Pokud zadáte absolutní URL adresu s http://..., bude tato adresa pou¾ita jako cíl pøesmìrování v pøípadì, ¾e jste zatrhli volbu "Vynutit" pro FeedBurner. Mìjte na pamìti, ¾e to mù¾e být URL adresa nezávislá na FeedBurneru. Pro nové kanály FeedBurneru Googlu budete muset zadat http://feeds2.feedburner.com/jmenoVasehoKanalu)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Pokud nastavíte tuto volbu na "Vynutit", mù¾ete pøesmìrovat RSS kanál na jakoukoliv webovou slu¾bu, nejen na FeedBurner. Podívejte se ní¾e na volbu "Feedburner ID" pro zadání absolutní adresy.');
@define('MEDIA_PROPERTY_COMMENT1', 'Krátký komentáø');
@define('MEDIA_PROPERTY_COMMENT2', 'Dlouhý komentáø');
@define('DELETE_SELECTED_ENTRIES', 'Vymazat vybrané pøíspìvky');
@define('MEDIA_PROPERTY_ALT', 'Popis (shrnutí pro atribut ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titulek');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity je¹tì není nainstalován. <a href="%s">Instalujte</a> jej nyní.');
@define('COMMENT_ADDED_CLICK', 'Kliknìte %ssem%s pro návrat ke komentáøùm nebo %ssem%s pro zavøení okna.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknìte %ssem%s pro návrat ke komentáøùm nebo %ssem%s pro zavøení okna.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Délka');
@define('MEDIA_PROPERTY_DATE', 'Asociované datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL pøesunutého adresáøe pøesunuto v   %s pøíspìvcích.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'V Ne-MySQL databázi není iterace po pøíspìvcích a nahrazení staré adresy pùvodního adresáøe novou URL mo¾né. Budete muset pøíspìvky ruènì editovat a ty adresy upravit. Ale poøád je¹tì mù¾ete adresáø pøesunout zpátky tam kde byl, jestli je to pro vás moc otravné.');
@define('TRACKBACK_SIZE', 'Cílové URI pøekroèilo max. velikost souboru %s bytù.');
@define('CLICK_FILE_TO_INSERT', 'Kliknìte na soubor, který chcete vlo¾it:');
@define('SELECT_FILE', 'Vyberte soubor pro vlo¾ení:');
@define('MANAGE_IMAGES', 'Správa obrázkù');
@define('WORD_NEW', 'Nové');
@define('WORD_OR', 'nebo');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Viditelné (Frontend): Externí slu¾by');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Viditelné (Frontend): Dal¹í mo¾nosti');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Viditelné (Frontend): Úplné mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Viditelné (Frontend): Zobrazení/filtry');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Viditelné (Frontend): Pluginy pro pøíspìvky');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Provozní (Backend): Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Provozní (Backend): Øízení u¾ivatelù');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Provozní (Backend): Meta informace');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Provozní (Backend): Templates - ¹ablony vzhledu');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Provozní (Backend): Dal¹í mo¾nosti');
@define('PLUGIN_GROUP_IMAGES', 'Obrázky');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup - textové znaèky');
@define('PLUGIN_GROUP_STATISTICS', 'Statistiky');
@define('IMPORT_WELCOME', 'Vítejte v utilitì pro import dat');
@define('USER_SELF_INFO', 'Pøihlá¹en jako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Zde mù¾ete importovat záznamy z jiných weblogù');
@define('IMPORT_SELECT', 'Vyberte software, ze kterého chcete importovat');
@define('MANAGE_STYLES', 'Zmìna stylu');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vyberte plugin, který chcete instalovat');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Ní¾e je seznam instalovaných pluginù');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Zru¹it');
@define('DELETE_SELECTED_COMMENTS', 'Vymazat vybrané komentáøe');
@define('MODERATE_SELECTED_COMMENTS', 'Schválit vybrané komentáøe');
@define('FIND_MEDIA', 'Hledat média');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Chyba: Jméno souboru neexistuje!');
@define('ERROR_SOMETHING', 'Chyba: Nìco je ¹patnì.');
@define('DIRECT_LINK', 'Pøímý odkaz na tento záznam');
@define('SELECT_TEMPLATE', 'Vyberte vzor pro vá¹ web');
@define('DATABASE_ERROR', 'chyba serendipity: nelze se spojit s databází - ukonèeno.');
@define('LIMIT_TO_NUMBER', 'Kolik záznamù by mìlo být zobrazeno?');
@define('DIRECTORIES_AVAILABLE', 'Po kliknutí na nìkterý adresáø v seznamu mù¾ete vytvoøit dal¹í podadresáø.');
@define('CATEGORY_INDEX', 'Ní¾e je seznam kategorií, které mù¾et pou¾ít k va¹emu záznamu');
@define('PAGE_BROWSE_PLUGINS', 'Strana %s z %s, celkem %s pluginù.');
@define('CHARSET_NATIVE', 'Národní');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API Interface na Serendipity ji¾ není pøibaleno  kvùli pokraèujícím bezpeènostním problémùm s tímhle API a proto¾e ho moc lidí nepou¾ívá. Proto musíte nainstalovat plugin XML-RPC, kdy¾ chcete  XML-RPC API pou¾ívat. URL, které se pou¾ije ve va¹í aplikaci, se nezmìní - hned po instalaci pluginu budete moci API pou¾ívat.');
@define('AUTHORS_ALLOW_SELECT', 'Povolit náv¹tìvníkùm vybrat více autorù najednou?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Jestli¾e je tato volba povolena, bude u ka¾dého autora umístìno zatrhávací okénko. U¾ivatelé mohou zvolit více autorù  a vidìt pøíspìvky, které vyhovují jejich výbìru');
@define('PREFERENCE_USE_JS', 'Povolit pou¾ití advanced JS?');
@define('PREFERENCE_USE_JS_DESC', 'Je-li toto povoleno, budou povoleny sekce s advanced JavaScript, aby se zlep¹ila pou¾itelnost. Napø v sekci pro konfiguraci pluginù mù¾ete pro pøeskládání pluginù pou¾ít drag and drop (táhnout my¹í).');
@define('PREFERENCE_USE_JS_WARNING', '(Tato stránka pou¾ívá advanced JavaScripting. Jestli¾e máte problémy s fungováním, zaka¾te prosím pou¾ívání  advanced JS ve svém osobním nastavení nebo zaka¾te javascript v prohlí¾eèi.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Èeká na potvrzení');
@define('NO_COMMENT_SUBSCRIPTION', 'Neodebíráno');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');