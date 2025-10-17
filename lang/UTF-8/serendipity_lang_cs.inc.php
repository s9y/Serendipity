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
'á','č','ď','é','ě','í','ĺ','ľ','ň','ó','ŕ','ř','ś','š','ť','ú','ů','ý','ź','ž',
'Á','Č','Ď','É','Ě','Í','Ĺ','Ľ','Ň','Ó','Ŕ','Ř','Ś','Š','Ť','Ú','Ů','Ý','Ź','Ž',
' ',',','.','!',
);
$i18n_filename_to = array (
'a','c','d','e','e','i','l','l','n','o','r','r','s','s','t','u','u','y','z','z',
'A','C','D','E','E','I','L','L','N','O','R','R','S','S','T','U','U','Y','Z','Z',
'-', '', '', '',
);
@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'cs_CZ.UTF-8, czech, cs');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'cs-utf');
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
@define('LOGIN', 'Přihlášení');
@define('LOGOUT', 'Odhlášení');
@define('LOGGEDOUT', 'Odhlášen');
@define('CREATE', 'Vytvořit');
@define('BACK', 'Zpět');
@define('FORWARD', 'Dále');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nové...');
@define('OLDER', 'Starší...');
@define('DONE', 'Hotovo');
@define('TITLE', 'Titulek');
@define('DESCRIPTION', 'Popis');
@define('PLACEMENT', 'Umístění');
@define('DELETE', 'Vymazat');
@define('SAVE', 'Uložit');
@define('UP', 'Nahoru');
@define('DOWN', 'Dolů');
@define('PREVIOUS', 'Předchozí');
@define('NEXT', 'Další');
@define('ENTRIES', 'záznamy');
@define('CATEGORIES', 'Kategorie');
@define('NAME', 'Jméno');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Domácí stránka');
@define('COMMENT', 'Komentář');
@define('VIEW', 'Ukázat');
@define('HIDE', 'Skrýt');
@define('WEEK', 'Týden');
@define('WEEKS', 'Týdny');
@define('MONTHS', 'Měsíce');
@define('DAYS', 'Dny');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Úspěch');
@define('COMMENTS', 'Komentáře');
@define('ADD_COMMENT', 'Přidat komentář');
@define('NO_COMMENTS', 'Žádné komentáře');
@define('POSTED_BY', 'Vložil');
@define('ON', 'v');
@define('NO_CATEGORY', 'Žádná kategorie');
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
@define('NO_TRACKBACKS', 'Žádné odezvy');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Výpis');
@define('TRACKED', 'Sledován');
@define('USER', 'Uživatel');
@define('USERNAME', 'Jméno (přezdívka)');
@define('PASSWORD', 'Heslo');
@define('HIDDEN', 'skrytý');
@define('IMAGE', 'Obrázek');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verze');
@define('INSTALL', 'Instalovat');
@define('REPLY', 'Odpověď');
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
@define('AUTHORS', 'Autoři');
@define('UPGRADE', 'Aktualizace');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Všichni autoři');
@define('PREVIOUS_PAGE', 'předchozí stránka');
@define('NEXT_PAGE', 'další stránka');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Všechny kategorie');
@define('LAST_UPDATED', 'Naposled změněno');
@define('IP_ADDRESS', 'IP adresa');
@define('CHARSET', 'Znaková sada');
@define('REFERER', 'Odběratel');
@define('APPROVE', 'Povolit');
@define('NOT_FOUND', 'Není obsažen');
@define('WRITABLE', 'Zapisovatelný');
@define('NOT_WRITABLE', 'Nezapisovatelný');
@define('WELCOME_BACK', 'Vítejte zpět,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Seřadit podle');
@define('SORT_ORDER', 'Pořadí');
@define('SORT_ORDER_ASC', 'Vzestupně');
@define('SORT_ORDER_DESC', 'Sestupně');
@define('FILTERS', 'Filtry');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Otevřít vše');
@define('TOGGLE_OPTION', 'Otevřít volbu');
@define('IN_REPLY_TO', 'Odpověď na');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Adresář');
@define('BACK_TO_BLOG', 'Zpět do weblogu');
@define('HTML_NUGGET', 'Vložený HTML kód');
@define('TITLE_FOR_NUGGET', 'Název HTML kódu');
@define('COMMENT_ADDED', 'Váš komentář byl úspěšně přidán.');
@define('ENTRIES_FOR', 'Záznamy: %s');
@define('NO_ENTRIES_TO_PRINT', 'Žádné záznamy k zobrazení');
@define('COMMENT_DELETE_CONFIRM', 'Jste si jist vymazáním komentáře #%d, zapsaného %s?');
@define('DELETE_SURE', 'Určitě chcete vymazat #%s natrvalo?');
@define('MEDIA_FULLSIZE', 'Plný rozměr');
@define('SIDEBAR_PLUGIN', 'postranní plugin');
@define('EVENT_PLUGIN', 'plugin události');
@define('PLUGIN_ITEM_DISPLAY', 'Kde by měla být tato položka zobrazena?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'V rozšířené části');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'V přehledu');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'V obou částech');
@define('DIRECTORY_WRITE_ERROR', 'Nelze zapisovat do adresáře %s - prověřte oprávnění.');
@define('FILE_WRITE_ERROR', 'Nelze zapisovat do souboru %s.');
@define('INCLUDE_ERROR', 'chyba serendipity: nelze vložit %s - ukončeno.');
@define('DO_MARKUP', 'Umožnit převod značek');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formátování data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formát aktuálního data záznamu, používá PHP proměnnou strftime(). (Přednastaveno: "%s")');
@define('APPLY_MARKUP_TO', 'Zapnout značkování %s');
@define('XML_IMAGE_TO_DISPLAY', 'Znak XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Odkazy na XML kanály budou zobrazeny s tímto znakem. Nechejte prázdné pro původní nastavení, nebo zadejte \'none\' pro vypnutí.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Vymazání souboru %s...');
@define('SETTINGS_SAVED_AT', 'Nové nastavení bylo uloženo v %s');
@define('INVERT_SELECTIONS', 'Obrátit výběr');

@define('PERSONAL_SETTINGS', 'Osobní nastavení');
@define('DO_MARKUP_DESCRIPTION', 'Převést značky na text (smajlíky, zkratky *, /, _, ...). Vypnutí této volby zajistí uložení HTML kódů v textu.');
@define('BASE_DIRECTORY', 'Základní adresář');
@define('PERM_READ', 'Právo na čtení');
@define('PERM_WRITE', 'Právo na zápis');
@define('PERM_DENIED', 'Přístup odepřen.');
@define('CURRENT_AUTHOR', 'Aktuální autor');
@define('PLUGIN_ACTIVE', 'Aktivní');
@define('PLUGIN_INACTIVE', 'Neaktivní');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Uložte tento odkaz do oblíbených záložek a použijte záložku na jakékoliv stránkce, o které chcete psát. Záložka Vás rychle přepne do Vašeho Serendipity Blogu.');
@define('SET_TO_MODERATED', 'Schválit');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalace Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Vítejte v instalaci Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Nejdříve se podíváme na vaše základní nastavení a zkusíme diagnostikovat případné problémy');
@define('ERRORS_ARE_DISPLAYED_IN', 'Chyby budou zobrazeny %s, doporučení %s a úspěch %s');
@define('RED', 'červeně');
@define('YELLOW', 'žlutě');
@define('GREEN', 'zeleně');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - předinstalační zpráva');
@define('INTEGRITY', 'Kontrola integrity instalace');
@define('PHP_INSTALLATION', 'Instalace PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operační systém');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'konfigurace php.ini');
@define('RECOMMENDED', 'Doporučeno');
@define('ACTUAL', 'Aktuální');
@define('PERMISSIONS', 'Oprávnění');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Oprávnění může být nastaveno s použitím povelu: `<em>%s</em>` v adresáři, nebo nastavením pomocí FTP programu');
@define('PROBLEM_DIAGNOSTIC', 'Byly diagnostikovány problémy, takže nelze pokračovat v instalaci, dokud nebudou odstraněny');
@define('SELECT_INSTALLATION_TYPE', 'Vyberte typ instalace');
@define('RECHECK_INSTALLATION', 'Překontrolovat instalaci');
@define('SIMPLE_INSTALLATION', 'Jednoduchá instalace');
@define('EXPERT_INSTALLATION', 'Expertní instalace');
@define('COMPLETE_INSTALLATION', 'Kompletní instalace');
@define('WONT_INSTALL_DB_AGAIN', 'nebude se znovu instalovat databáze');
@define('THEY_DO', 'existují');
@define('THEY_DONT', 'neexistují');
@define('CHECK_DATABASE_EXISTS', 'Kontrola, jestli databáze a tabulky opravdu existují');
@define('CREATE_DATABASE', 'Vytvoření základní databáze...');
@define('ATTEMPT_WRITE_FILE', 'Pokus uložit soubor %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Vytvoření hlavního autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Nastavení defaultního vzoru');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalace defaultních pluginů');
@define('SERENDIPITY_INSTALLED', 'Serendipity byl úspěšně nainstalován');
@define('VISIT_BLOG_HERE', 'Zde se přepnete do svého nového weblogu');
@define('THANK_YOU_FOR_CHOOSING', 'Děkujeme za volbu Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Při instalaci byla detekována chyba');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Vytvořeno pomocí');
@define('ADMIN_FOOTER_POWERED_BY', 'Vytvořeno pomocí Serendipity %s a PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Autor');
@define('USERLEVEL_CHIEF_DESC', 'Redaktor');
@define('USERLEVEL_ADMIN_DESC', 'Administrátor');
@define('WWW_USER', 'Změňte www na uživatele, který je určen v Apache (na př. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Adresář %s neexistuje a nemohl být vytvořen. Vytvořte adresář manuálně.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; spustit <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nelze spustit binární soubor %s.');
@define('FILE_CREATE_YOURSELF', 'Vytvořte soubor přímo nebo prověřte oprávnění');
@define('COPY_CODE_BELOW', '<br />* Zkopírujte kód uvedený níže a umístěte jej do %s ve vašem %s adresáři:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Po dokončení stiskněte tlačítko obnovení stránky ve vašem prohlížeči.');
@define('ERROR_TEMPLATE_FILE', 'Nelze otevřít vzorový soubor, updatujte Serendipity!');
@define('HTACCESS_ERROR', 'Prověřte instalaci vašeho webserveru, Serendipity potřebuje uložit soubor ".htaccess". To nebylo možné kvůli chybě oprávnění. Nastavte oprávnění jako: <br />&nbsp;&nbsp;%s<br />a znovu uložte tuto stránku.');
@define('EMPTY_SETTING', 'Nespecifikoval jste platnou hodnotu pro "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Vyžadováno pouze pokud chcete v budoucnu využívat plugin Spartacus pro stahování nových přídavných modulů.)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity detekoval, že vaše konfigurace je uložena ve verzi %s, ale serendipity je instalován jako verze %s, je potřeba upgrade! <a href="%s">Klikněte zde</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Vítá vás manažer upgrade Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Pomohu vám s upgrade vaší instalace Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Tato zpráva je zobrazena proto, že vaše instalace je Serendipity %s, ale ještě nebyla updatována databáze pro tuto verzi');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Update databáze (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Zde jsou .sql soubory, která musíte spustit před pokračováním práce se Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Úlohy specifické pro tuto verzi');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Žádné specifické úlohy');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Mohu pokračovat v těchto úlohách?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Ne, spustím je manuálně');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ano, pokračujte');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Není třeba žádný upgrade');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity je upgradován');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vynechal jste stupeň upgrade Serendipity, ujistěte se, že databáze je správně nainstalována a plánované funkce jsou spuštěny');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Vaše instalace Serendipity je upgradována na %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Kliknutím %ssem%s se vrátíte do vašeho weblogu');
@define('ADMIN_ENTRIES', 'Záznamy');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nebylo možné se spojit s databází MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nebylo možné vybrat databázi: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nebylo možné vybrat uživatelské informace: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nebylo možné vybrat informace o kategorii: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nebylo možné vybrat informace o záznamu: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nebylo možné vybrat informace o komentáři: %s.');
@define('MYSQL_REQUIRED', 'Pro provedení této akce je nutné mít databázi MySQL.');
@define('CREATE_AUTHOR', 'Vytvořit autora \'%s\'.');
@define('CREATE_CATEGORY', 'Vytvořit kategorii \'%s\'.');
@define('MT_DATA_FILE', 'Soubory Movable Type');
@define('INSTALL_DBPORT', 'Port databáze');
@define('INSTALL_DBPORT_DESC', 'Port použitý pro spojení k vašemu databázovému serveru');
@define('IMPORT_PLEASE_ENTER', 'Vložte data požadovaná níže');
@define('IMPORT_NOW', 'Importovat!');
@define('IMPORT_STARTING', 'Start importu...');
@define('IMPORT_FAILED', 'Import se nezdařil');
@define('IMPORT_DONE', 'Import úspěšně dokončen');
@define('IMPORT_WEBLOG_APP', 'Weblogová aplikace');
@define('IMPORT_NOTES', 'Poznámka:');
@define('IMPORT_STATUS', 'Stav po importu');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import (rozšířený WordPress RSS import), vyžaduje PHP5 a může vyžadovat příliš mnoho paměti');
@define('RSS_IMPORT_BODYONLY', 'Uložit celý importovaný text do "hlavní" části, nerozdělovat do "rozšířené" části.');
@define('IMPORT_GENERIC_RSS', 'Základní RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Odeslat odezvy na odkazy obsažené v záznamu');
@define('RSS_IMPORT_CATEGORY', 'Použít tuto kategorii pro neurčené záznamy');
@define('IMPORT_WP_PAGES', 'Zobrazovat jako obyčejné příspěvky blogu i přílohy a statické stránky?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nebyl nalezen.');
@define('CONVERT_HTMLENTITIES', 'Zkusit automatickou konverzi HTML entit?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administrátorská sekce');
@define('WRONG_USERNAME_OR_PASSWORD', 'Zřejmě jste vložil špatné jméno nebo heslo!');
@define('PLEASE_ENTER_CREDENTIALS', 'Zadejte prosím přihlašovací údaje.');
@define('AUTOMATIC_LOGIN', 'Uložit informace');
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
@define('ADD_MEDIA', 'Přidat');
@define('MANAGE_DIRECTORIES', 'Práce s adresáři');
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
@define('ENTRY_PUBLISHED_FUTURE', 'Tento záznam ještě není publikován.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lokální dokumentace');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Historie verzí');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Pluginy pro postranní sloupce');
@define('EVENT_PLUGINS', 'Pluginy událostí');
@define('CONFIGURE_PLUGINS', 'Konfigurace pluginů');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Nesplněné požadavky: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aktualizace na verzi %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Klikněte a instalujte nový %s');
@define('ALREADY_INSTALLED', 'Instalován');
@define('PLUGIN_AVAILABLE_COUNT', 'Celkem: %d pluginů.');
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
@define('ENTRIES_PER_PAGE', 'záznamů na stránku');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Přilepené záznamy');
@define('PAGE_BROWSE_ENTRIES', 'Stránka %s z %s, celkem %s záznamů');
@define('FIND_ENTRIES', 'Hledat záznamy');
@define('RIP_ENTRY', 'Zrušen záznam #%s');
@define('NEW_ENTRY', 'Nový záznam');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Text záznamu');
@define('EXTENDED_BODY', 'Rozšířená textová část');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Koncept tohoto záznamu byl uložen');
@define('IFRAME_PREVIEW', 'Serendipity nyní vytváří náhled vašeho záznamu...');
@define('IFRAME_WARNING', 'Váš prohlížeč nepodporuje iframe. Otevřete soubor serendipity_config.inc.php a nastavte proměnnou $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Upozornění: Datum je specifikováno špatně. Použijte formát YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Rozšířené volby');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tento odkaz není míněn jako klikatelný. Obsahuje zpětné URI záznamu. Tento URI můžete použít k odesílání pingů a sledování odezvy na tento záznam. Odkaz zkopírujete kliknutím pravou myší a volbou "Kopírovat odkaz" v Internet Exploreru nebo "Zkopírovat umístění odkazu" v Mozille.');
@define('RESET_DATE', 'Resetovat datum');
@define('RESET_DATE_DESC', 'Klikněte a resetujte datum na aktuální');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Správa uživatelů');
@define('CREATE_NEW_USER', 'Vytvořit nového uživatele');
@define('CREATE_NOT_AUTHORIZED', 'Nemůžete editovat uživatele se stejnou úrovní jako je vaše');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nemůžete vytvořit uživatele s vyšší úrovní než je vaše');
@define('CREATED_USER', 'Nový uživatel %s byl vytvořen');
@define('MODIFIED_USER', 'Nastavení uživatele %s byla změněna');
@define('USER_LEVEL', 'Úroveň');
@define('WARNING_NO_GROUPS_SELECTED', 'Varování: Nezvolili jste si členství v žádné skupině. To by vás vyloučilo z řízení práv uživatelských skupin, a proto vaše členství ve skupině nebude změněno.');
@define('DELETE_USER', 'Chcete vymazat uživatele #%d %s. Myslíte to vážně? Tato akce znemožní prohlížet jím vytvořené záznamy na hlavní stránce.');
@define('DELETED_USER', 'Uživatel #%d %s je vymazán.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Upravuj skupiny');
@define('DELETED_GROUP', 'Skupina #%d %s smazána.');
@define('CREATED_GROUP', 'Nová skupina %s byla vytvořena');
@define('MODIFIED_GROUP', 'Vlastnosti skupiny %s byly změněny');
@define('CREATE_NEW_GROUP', 'Vytvořit novou skupinu');
@define('DELETE_GROUP', 'Chystáte se smazat skupinu #%d %s. Myslíte to vážně?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hledat komentáře');
@define('COMMENTS_FILTER_SHOW', 'Zobrazit');
@define('COMMENTS_FILTER_ALL', 'Vše');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Pouze povolené');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Čekající na povolení');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Čeká na potvrzení uživatelem');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Jste se jist vymazáním vybraných komentářů?');
@define('PAGE_BROWSE_COMMENTS', 'Stránka %s ze %s, celkem %s komentářů');
@define('COMMENT_IS_DELETED', '(Komentář odstraněn)');
@define('COMMENT_MODERATED', 'Komentář č.%s byl úspěšně nastaven jako schválený');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Odebíráno');

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
@define('CATEGORY_SAVED', 'Kategorie uložena');
@define('CATEGORY_ALREADY_EXIST', 'Kategorie nazvaná "%s" skutečně existuje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategorie #%s byla zrušena. Starší záznamy byly přemístěny do #%s');
@define('CATEGORY_DELETED', 'Kategorie #%s byla zrušena.');
@define('INVALID_CATEGORY', 'Žádná kategorie nebyla určena k vymazání');
@define('EDIT_THIS_CAT', 'Editace "%s"');
@define('CATEGORY_REMAINING', 'Vymazat kategorii a přemístit záznamy do kategorie');
@define('PARENT_CATEGORY', 'Nadřazená kategorie');
@define('CATEGORY_HIDE_SUB', 'Schovat příspěvky z podkategorií?');
@define('CATEGORY_HIDE_SUB_DESC', 'Pokud je zobrazená kategorie, standardně se zobrazují i všechny příspěvky z jejích podkategorií. Pokud je volba zapnuta, budou se zobrazovat jen a pouze příspěvky z vybrané kategorie.');
@define('CREATE_NEW_CAT', 'Vytvoření nové kategorie');
@define('ALREADY_SUBCATEGORY', '%s je opravdu subkategorie pod %s.');
@define('NO_CATEGORIES', 'Žádné kategorie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Není možné porovnat kontrolní součty! (v základním adresáři chybí soubor checksums.ini.php)');
@define('CHECKSUMS_PASS', 'Všechny soubory zkontrolovány.');
@define('CHECKSUM_FAILED', 'Kontrola selhala: %s je poškozený nebo pozměněný');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import dat');
@define('EXPORT_ENTRIES', 'Export záznamů');
@define('EXPORT_FEED', 'Exportovat plný RSS kanál');
@define('CREATE_THUMBS', 'Vytvořit náhledy');
@define('WARNING_THIS_BLAHBLAH', "POZOR:\\nTato akce může trvat déle, pokud máte mnoho obrázků bez náhledů.");
@define('SYNC_OPTION_LEGEND', 'Volby synchronizace náhledů obrázků');
@define('SYNC_OPTION_KEEPTHUMBS', 'Zachovat všechny existující náhledy');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Zachovat existující náhledy pouze pokud mají správnou velikost');
@define('SYNC_OPTION_DELETETHUMBS', 'Znovu vytvořit všechny náhledy');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' byl nastaven jako defaultní vzor (template)');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varování: Váš vzor používá nepovolenou metodu, je-li to možné, proveďte aktualizaci');
@define('STYLE_OPTIONS_NONE', 'Toto téma/styl nemá specifické volby. Pokud chcete vědět, jak můžete pro svoje šablony nastavit specifické volby, čtěte Technical Documentation na www.s9y.org  "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Volby pro téma/stylu');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Je upravené prostředí pro administraci');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Nastavit jako vzor');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Prověřit a uložit');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Odstranit označené pluginy');
@define('SAVE_CHANGES_TO_LAYOUT', 'Uložit změny layoutu');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizace databáze s adresářem obrázků');
@define('SYNC_DONE', 'Hotovo (synchronizováno %s obrázků).');
@define('RESIZE_BLAHBLAH', '<b>Změnit rozměr %s</b>');
@define('ORIGINAL_SIZE', 'Původní rozměr: <i>%sx%s</i> pixelů');
@define('RESIZING', 'Změna rozměrů');
@define('RESIZE_DONE', 'Hotovo (upraven rozměr %s obrázků).');
@define('KEEP_PROPORTIONS', 'Zachovat proporce');
@define('REALLY_SCALE_IMAGE', 'Opravdu změnit rozměr? Nelze vrátit!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Zde můžete zadat nový rozměr obrázku. Pokud chcete zachovat proporce, zadejte jen jednu hodnotu a stiskněte klávesu TAB, nový rozměr bude dopočítán automaticky:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nový rozměr: ');
@define('SCALING_IMAGE', 'Změna %s na %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Adresáře a soubory byly úspěšně přesunuty do  %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Adresáře a soubory nemohly být přesunuty do  %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Adresář <strong>%s</strong> byl vytvořen.');
@define('PARENT_DIRECTORY', 'Základní adresář');
@define('CONFIRM_DELETE_DIRECTORY', 'Jste si jist, že chcete odstranit všechen obsah adresáře %s?');
@define('ERROR_NO_DIRECTORY', 'Chyba: Adresář %s neexistuje');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nelze odstranit neprázdný adresář. Zkuste zvolit "vynucené mazání", pokud potřebujete vymazat tyto soubory, a odešlete požadavek znovu. Existující soubory jsou:');
@define('DIRECTORY_DELETE_FAILED', 'Vymazání adresáře %s se nepodařilo. Zkontrolujte oprávnění nebo čtěte zprávu výše.');
@define('DIRECTORY_DELETE_SUCCESS', 'Adresář %s byl úspěšně vymazán.');
@define('CHECKING_DIRECTORY', 'Kontrola souborů v adresáři %s');
@define('DELETE_DIRECTORY', 'Vymazat adresář');
@define('DELETE_DIRECTORY_DESC', 'Chcete vymazat obsah adresáře, obsahující mediální soubory, které mohou být používány ve vašich záznamech.');
@define('FORCE_DELETE', 'Vymazat VŠECHNY soubory v adresáři, včetně těch, které nejsou vytvořeny pomocí Serendipity');
@define('CREATE_DIRECTORY', 'Vytvořit adresář');
@define('CREATE_NEW_DIRECTORY', 'Vytvořit nový adresář');
@define('CREATE_DIRECTORY_DESC', 'Zde můžete vytvořit adresář pro ukládání mediálních souborů. Zvolte název adresáře a případný nadřízený adresář.');
@define('ABOUT_TO_DELETE_FILE', 'Chcete vymazat <b>%s</b><br />Jestliže používáte tento soubor v nějakých záznamech, způsobí to nepřístupnost odkazů nebo obrázků.<br />Chcete přesto pokračovat?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Chyba: Soubor už ve vašem počítači existuje!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nelze nalézt soubor s názvem <b>%s</b>, možná je opravdu vymazán?');
@define('ERROR_FILE_FORBIDDEN', 'Nejste oprávněn nahrávat soubory s aktivním obsahem');
@define('REMOTE_FILE_NOT_FOUND', 'Soubor nebyl na vzdáleném serveru nalezen, jste si jist že URL: <b>%s</b> je správné?');
@define('FILE_FETCHED', '%s nalezen');
@define('FILE_UPLOADED', 'Soubor %s je úspěšně nahrán.');
@define('DELETE_FILE_FAIL', 'Nezdařilo se vymazat soubor <b>%s</b>');
@define('DELETE_FILE', 'Vymazat soubor s názvem <b>%s</b>');
@define('FOUND_FILE', 'Založit nový/změnit soubor: %s.');
@define('FILENAME_REASSIGNED', 'Automaticky přidělené nové jméno souboru: %s');
@define('ERROR_FILE_EXISTS', 'Chyba: Toto jméno souboru je už použito, zvolte jiné!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'odkazován');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Nový název: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Přidání obrázku...');
@define('THUMB_CREATED_DONE', 'Náhled je vytvořen.<br>Hotovo.');
@define('THUMBNAIL_USING_OWN', '%s je použit jako vlastní náhled, protože je příliš malý.');
@define('THUMBNAIL_FAILED_COPY', '%s nelze použít jako vlastní náhled, neboť jej nelze zkopírovat!');
@define('DELETE_THUMBNAIL', 'Vymazán náhled obrázku s názvem <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Neznámá chyba, soubor nebyl nahrán. Je možné, že délka souboru překračuje maximum, povolené serverem. Spojte se s vaším ISP nebo editujte soubor php.ini a povolte větší velikost.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Chyba: Nemůžete uploadovat soubory větší než  %s bytů!');
@define('MEDIA_UPLOAD_DIMERROR', 'Chyba: Nemůžete uploadovat soubory obrázků větší než  %s x %s pixelů!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Soubor připojen odkazem.<br />Hotovo.');
@define('DELETE_HOTLINK_FILE', 'Vymazán odkazovaný soubor <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nelze spustit: "%s", chyba: %s, vrací proměnnou: %d');
@define('SKIPPING_FILE_EXTENSION', 'Vynechán soubor: Chybějící přípona %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Vynechán soubor: %s nelze načíst.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Nastavte shodná práva pro všechny podřízené adresáře');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Použít náhled.');
@define('I_WANT_BIG_IMAGE', 'Použít celý obrázek.');
@define('I_WANT_NO_LINK', 'Zobrazit jako obrázek');
@define('I_WANT_IT_TO_LINK', 'Zobrazit jako odkaz (URL):');
@define('MEDIA_ALT', 'Atribut ALT (popis nebo krátký popis)');
@define('MEDIA_TITLE', 'Atribut TITLE (zobrazuje se při najetí myší na obrázek)');
@define('IMAGE_SIZE', 'Obrázek o rozměru');
@define('IMAGE_ALIGNMENT', 'Úprava obrázku');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Vložení obrázku');
@define('MEDIA_TARGET', 'Cíl odkazu');
@define('MEDIA_TARGET_JS', 'Popup okno (pomocí JavaScriptu, přizpůsobitelná velikost)');
@define('MEDIA_ENTRY', 'Samostatný příspěvek');
@define('MEDIA_TARGET_BLANK', 'Popup okno (pomocí target=_blank)');
@define('YOU_CHOSE', 'Vybral jste %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Otočit o 90 stupňů doleva');
@define('IMAGE_ROTATE_RIGHT', 'Otočit o 90 stupňů doprava');
@define('MEDIA_RENAME', 'Přejmenovat soubor');
@define('THUMBNAIL_SHORT', 'Náhl.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Název souboru');
@define('SORT_ORDER_EXTENSION', 'Rozšíření');
@define('SORT_ORDER_SIZE', 'Velikost');
@define('SORT_ORDER_WIDTH', 'Šířka obrázku');
@define('SORT_ORDER_HEIGHT', 'Výška obrázku');
@define('SORT_ORDER_DATE', 'Datum nahrání');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Přidat soubor do schránky médií:</b><p>Zde můžete ukládat mediální soubory, nebo určit, kde je získat z WEBu! Pokud nemáte odpovídající obrázek, <a href="https://images.google.com/" target="_blank">hledejte na Google</a> odpověď na vaši potřebu, obvykle se zadaří :).<p><b>Vyberte metodu:</b><br>');
@define('ENTER_MEDIA_URL', 'Vložte URL přidávaného souboru:');
@define('ENTER_MEDIA_UPLOAD', 'Vyberte soubor pro nahrání:');
@define('SAVE_FILE_AS', 'Uložit soubor jako:');
@define('STORE_IN_DIRECTORY', 'Uložit do následujího adresáře: ');
@define('IMAGE_MORE_INPUT', 'Přidat více obrázků');
@define('ENTER_MEDIA_URL_METHOD', 'Způsob připojení:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Poznámka: Pokud zvolíte odkaz na server, ujistěte se, že máte potřebná práva, nebo že jde o váš web. Odkazy vám umožní využívat obrázky z jiných než místních zdrojů.');
@define('FETCH_METHOD_IMAGE', 'Nahrání na server');
@define('FETCH_METHOD_HOTLINK', 'Odkaz na server');
@define('GO_ADD_PROPERTIES', 'Zadej vlastnosti');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Změnit rozměr obrázku');
@define('MEDIA_DELETE', 'Vymazat soubor');
@define('FILES_PER_PAGE', 'Souborů na stránku');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Žádné obrázky');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'všechny adresáře');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigurace byla zapsána a uložena');
@define('DIAGNOSTIC_ERROR', 'Diagnostika detekovala nějaké chyby ve vkládaných informacích:');
@define('FULL_COMMENT_TEXT', 'Ano, s plným zněním komentáře');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Databáze');
@define('INSTALL_CAT_DB_DESC', 'Sem vložte všech informace o databázi. Serendipity je potřebuje k funkci.');
@define('INSTALL_DBTYPE', 'Typ');
@define('INSTALL_DBTYPE_DESC', 'Typ databáze');
@define('INSTALL_DBHOST', 'Hostitel');
@define('INSTALL_DBHOST_DESC', 'Název hostitelského serveru');
@define('INSTALL_DBUSER', 'Uživatel');
@define('INSTALL_DBUSER_DESC', 'Uživatelské jméno');
@define('INSTALL_DBPASS', 'Heslo');
@define('INSTALL_DBPASS_DESC', 'Uživatelské heslo');
@define('INSTALL_DBNAME', 'Název');
@define('INSTALL_DBNAME_DESC', 'Název databáze');
@define('INSTALL_DBPREFIX', 'Prefix');
@define('INSTALL_DBPREFIX_DESC', 'Prefix pro záznamy v databázi, např. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Použít trvalé připojení');
@define('INSTALL_DBPERSISTENT_DESC', 'Umožnit trvalé připojení k databázi, více <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">zde</a>. Běžně to není doporučeno');
@define('INSTAL_DB_UTF8', 'Povolit DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Vyvolá dotaz MySQL "SET NAMES", aby se zjistila požadovaná znaková sada pro databázi. Zapněte to nebo vypněte, pokud se vám na blogu objevují  podivné znaky.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cesty');
@define('INSTALL_CAT_PATHS_DESC', 'Cesty k různým adresářům a souborům. Nezapomeňte na ukončovací lomítko pro adresáře!');
@define('INSTALL_FULLPATH', 'Úplná cesta');
@define('INSTALL_FULLPATH_DESC', 'Úplná absolutní cesta k vaší instalaci Serendipity.');
@define('INSTALL_UPLOADPATH', 'Cesta pro uploady');
@define('INSTALL_UPLOADPATH_DESC', 'Sem budou směrovány uploady, relativně k \'úplné cestě\' - typicky \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativní cesta');
@define('INSTALL_RELPATH_DESC', 'Cesta k Serendipity pro váš prohlížeč, typicky \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativní cesta k template');
@define('INSTALL_RELTEMPLPATH_DESC', 'Cesta k adresáři, obsahujícímu vzory (templates) - relativní k \'relativní cestě\'');
@define('INSTALL_RELUPLOADPATH', 'Relativní cesta k uploadům');
@define('INSTALL_RELUPLOADPATH_DESC', 'Cesta k uploadům pro prohlížeče - relativní k \'relativní cestě\'');
@define('INSTALL_URL', 'URL weblogu');
@define('INSTALL_URL_DESC', 'Základní URL vaší instalace Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetekce použité HTTP hostitelské adresy');
@define('INSTALL_AUTODETECT_URL_DESC', 'Při volbě "Ano" bude Serendipity předpokládat, že HTTP adresa hostitele, použitá návštěvníkem, je vaše základní nastavení URL. Zapnutí umožní používání různých domén k přístupu na vaše stránky, a použití této jedné domény pro všechny odkazy ke sledování změn na stránkách.');
@define('INSTALL_INDEXFILE', 'Indexový soubor');
@define('INSTALL_INDEXFILE_DESC', 'Název souboru použitého jako index');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Trvalé odkazy');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definuje různé vzory  URL patterns pro definici trvalých odkazů (permanent links) ve vašem blogu. Doporučujeme použít defaultní nastavení; pokud ne, měli byste zkusit použít hodnotu %id% tam, kde je to možné, abyste předešli dotazům do databáze při hledání cílové URL.');
@define('INSTALL_PERMALINK', 'Struktura URL trvalých odkazů');
@define('INSTALL_PERMALINK_DESC', 'Zde můžete definovat relativní strukturu URL, kde začátek je vaše base URL, z níž mohou být  příspěvky dostupné. Můžete použít proměnné  %id%, %title%, %day%, %month%, %year% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_AUTHOR', 'Struktura URL autorů');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Zde můžete definovat relativní strukturu URL, kde začátek je vaše base URL, z níž mohou být dostupné příspěvky určitých autorů.  Můžete použít proměnné %id%, %realname%, %username%, %email% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_CATEGORY', 'Struktura URL kategorií');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Zde můžete definovat relativní strukturu URL, kde začátek je vaše base URL, z níž mohou být dostupné určité kategorie. Můžete použít proměnné  %id%, %name%, %parentname%, %description% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Struktura URL trvalých odkazů kategorií RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Zde můžete definovat relativní strukturu URL, kde začátek je vaše base URL, z níž mohou být dostupné  RSS kanály z určitých kategorií. Můžete použít proměnné %id%, %name%, %description% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Struktura URL adresy pro RSS kanál autorů');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Zde můžete definovat relativní strukturu URL, kde začátek je vaše base URL, z níž mohou být být dostupné RSS kanály od určitých uživatelů. Můžete použít proměnné   %id%, %realname%, %username%, %email% a jakékoli jiné znaky.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Cesta k archivům');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Cesta k archivu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Cesta ke kategoriím');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Cesta k autorům');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Cesta k odhlášení komentářů');
@define('INSTALL_PERMALINK_DELETEPATH', 'Cesta pro smazání komentářů');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Cesta ke schválení komentářů');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Cesta k RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Cesta k jednotlivému pluginu');
@define('INSTALL_PERMALINK_ADMINPATH', 'Cesta k adminu');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Cesta k vyhledávání');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Cesta ke komentářům');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Základní nastavení');
@define('INSTALL_CAT_SETTINGS_DESC', 'Úprava správy Serendipity');
@define('INSTALL_USERNAME', 'Jméno admina');
@define('INSTALL_USERNAME_DESC', 'Jméno pro přihlášení admina');
@define('INSTALL_PASSWORD', 'Heslo admina');
@define('INSTALL_PASSWORD_DESC', 'Heslo pro přihlášení admina');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Skutečné jméno');
@define('USERCONF_REALNAME_DESC', 'Plné jméno autora. Toto jméno uvidí čtenáři');
@define('INSTALL_EMAIL', 'E-mail admina');
@define('INSTALL_EMAIL_DESC', 'E-mail pro přihlášení admina');
@define('INSTALL_SENDMAIL', 'Posílat e-maily adminovi?');
@define('INSTALL_SENDMAIL_DESC', 'Chcete dostávat e-mailem zprávy o komentářích k vašim záznamům?');
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
@define('INSTALL_BLOG_EMAIL_DESC', 'Toto nastaví E-Mailovou adresu, která je použita v poli "From"- (od) pro odchozí e-maily. Nastavte si tuto adresu tak, aby byla rozpoznána mailovým serverem používaným vaším webhosterem - mnoho mailserverů odmítá poštu, která má neznámou From-addresu (adr odesilatele).');
@define('COMMENT_TOKENS', 'Použít příznaky pro schvalování komentářů?');
@define('COMMENT_TOKENS_DESC', 'Pokud jsou příznaky používány, komentáře mohou být schváleny nebo odstraněny kliknutím na odkaz v oznamovacím emailu, aniž by bylo třeba přihlásit se do blogu. Mějte na paměti, že je to sice pohodlná vlastnost, ale pokud někdo získá přístup k Vaší mailové schránce, může schvalovat/mazat komentáře aniž by musel zadávat přihlašovací data.');
@define('INSTALL_LANG', 'Jazyk');
@define('INSTALL_LANG_DESC', 'Vyberte jazyk vašeho weblogu');
@define('INSTALL_CHARSET', 'Volba znakové sady - Charset');
@define('INSTALL_CHARSET_DESC', 'Zde můžete volit mezi UTF-8 nebo národní (ISO, EUC, ...) znakovou sadou. Některé jazyky mají jen překlady UTF-8, takže nastavení znakové sady na národní nemá žádný účinek. UTF-8 se doporučuje pro nové instalace. Neměňte toto nastavení, jestliže jste již  napsali příspěvky se speciálními (národními) znaky - mohlo by způsobit porušení textu. Přečtěte si o tomto problému více na  https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Typ kalendáře');
@define('INSTALL_CAL_DESC', 'Vyberte formát kalendáře');
@define('AUTOLANG', 'Použít jazyk prohlížeče jako defaultní');
@define('AUTOLANG_DESC', 'Zapnutím této volby určíte, že jazyk prohlížeče bude převzat jako základní pro uživatelské rozhraní a pro záznamy.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Povolit Plugin ACL pro uživatelské skupiny?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Jestliže je volba "Plugin ACL pro uživatelské skupiny" v konfiguraci povolena, můžete určit, které skupiny uživatelů mohou provádět určité pluginy/události.');
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
@define('INSTALL_FETCHLIMIT_DESC', 'Počet záznamů, zobrazených na hlavní stránce');
@define('INSTALL_RSSFETCHLIMIT', 'Články, které se mají zobrazit v RSS Feedu');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Počet článků, které se má zobrazit na každé stránce  v RSS Feedu.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'Jak mají být řazeny výsledky hledání?');
@define('SYNDICATION_RFC2616', 'Aktivovat strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'Když neaktivujete  RFC2616, znamená to, že všechny podmíněné GETy na Serendipity vrátí příspěvky, které byly modifikovány od času posledního požadavku. Když tohle nastavíte na  "false", vaši návštěvníci dostanou všechny články od svého posledního požadavku, což se považuje za dobrou věc. Avšak někteří agenti jako  Planet fungují divně, když tohle nastane a taky to porušuje  RFC2616. Takže když nastavíte tuto volbu na  "TRUE", budete vyhovovat RFC ale návštěvníkům   mohou ve  čtečkách  během prázdnin zmizet příspěvky. V každém případě, buď to vadí agregátorům jako je  Planet, nebo to vadí návštěvníkům blogu. Když se vyskytnou stížnosti z kterékoli strany, můžete tuhle volbu přepnout.  Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Použijte kompresi gzip');
@define('INSTALL_USEGZIP_DESC', 'Doporučujeme použít kompresi stránek pro jejich urychlené načítání');
@define('INSTALL_XHTML11', 'Vnutit kompatibilitu s XHTML 1.1?');
@define('INSTALL_XHTML11_DESC', 'Chcete plnou kompatibilitu s XHTML 1.1? (může způsobit problémy ve starších prohlížečích)');
@define('INSTALL_POPUP', 'Umožnit použití vyskakovacích oken');
@define('INSTALL_POPUP_DESC', 'Chcete ve weblogu používat vyskakovací okna pro komentáře, odezvy a pod.?');
@define('INSTALL_EMBED', 'Je Serendipity vložené?');
@define('INSTALL_EMBED_DESC', 'Pokud chcete umístit weblog do vašich stránek, zvolte ano pro odstranění všech záhlaví, bude zobrazován jen obsah. Můžete použít volitelný soubor indexFile pro obalení obsahu vlastními záhlavími a sloupci. Více informací najdete v souboru README!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Udělat externí odkazy klikatelné?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Ne": Neoznačené externí odkazy (Top výstupy, Top odběratelé, Uživatelské komentáře) nebudou ukázány/budou ukázány jako běžný text všude, kde je to možné, pro omezení spamu (doporučeno). "Ano": Neoznačené externí odkazy budou ukázány jako hyperlinky. Toto může být přepsáno v konfiguraci pluginů!');
@define('INSTALL_TRACKREF', 'Povolit  referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Povolení referrer tracking vám ukáže, které weby odkazují na vaše články. Dnes je to často zneužíváno pro spam, takže to můžete zakázat, chcete-li.');
@define('INSTALL_BLOCKREF', 'Blokovaní odběratelé');
@define('INSTALL_BLOCKREF_DESC', 'Chcete zamezit přístup z určitých adres? Seznam adres oddělujte \';\' a pozor, adresy jsou blokovány včetně subadres!');
@define('INSTALL_REWRITE', 'Přepisování URL');
@define('INSTALL_REWRITE_DESC', 'Určení pravidel pro tvorbu URL. Zapnutí módu přepisování zajistí správné URL vašeho weblogu a lepší indexaci pro vyhledávače, jako je Google. Váš webserver musí podporovat mod_rewrite nebo "AllowOverride All" v adresáři pro Serendipity. Defaultní nastavení je automaticky detekováno.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Posun časové zóny vůči serveru?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Posun času příspěvků vůči času na serveru. Vyberte "ano" pro zadání relativního časového posunu vůči hodinám serveru. Nikoliv posun vůči GMT (Greenwich mean time).');
@define('INSTALL_OFFSET', 'Časový posun serveru');
@define('INSTALL_OFFSET_DESC', 'Vložte počet hodin mezi časem serveru (aktuálně: %clock%) a vaší časovou zónou');
@define('INSTALL_SHOWFUTURE', 'Zobrazit budoucí záznamy');
@define('INSTALL_SHOWFUTURE_DESC', 'Tato volba umožní zobrazení budoucích záznamů blogu. Defaultně jsou skryté a budou zobrazeny až v čase jejich vydání.');
@define('INSTALL_ACL', 'Aplikovat práva na čtení pro kategorie');
@define('INSTALL_ACL_DESC', 'Pokud je povoleno, budou na kategorie aplikována nastavení práv pro skupiny uživatelů, když si přihlášení uživatelé budou prohlížet váš blog. Není-li povoleno, práva na čtení pro kategorie nejsou aplikována,  a  zlepšuje se rychlost blogu. Jestliže nechcete mít práva pro čtení pro různé uživatele,  toto nastavení zakažte.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Zobrazit celé články včetně rozšířené části v RSS kanálu');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrázek kanálu RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL obrázku ve formátu GIF/JPEG/PNG, je-li k dispozici. (prázdné: logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Šířka');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'v pixelech, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Výška');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'v pixelech, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Zobrazovat e-mailové adresy?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "hlavní redaktor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailová adresa hlavního redaktora, je-li k dispozici. (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailová adresa webmastera, je-li k dispozici. (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (životnost)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Čas v minutách, po kterém by váš weblog neměl být nadále kešován v cizích serverech/aplikacích (prázdné: skryté) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Pole "pubDate" je pro kanál RSS ukryto, chcete ukázat datum posledního záznamu?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Úpravy obrázků');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Vložení základních informací o způsobu zpracování obrázků');
@define('INSTALL_IMAGEMAGICK', 'Používat Imagemagick?');
@define('INSTALL_IMAGEMAGICK_DESC', 'Máte instalován Imagemagick?');
@define('INSTALL_IMAGEMAGICKPATH', 'Cesta ke konverznímu souboru');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Úplná cesta a název konverzního souboru Imagemagick');
@define('INSTALL_THUMBSUFFIX', 'Sufix náhledů');
@define('INSTALL_THUMBSUFFIX_DESC', 'Náhledy budou pojmenovány original.sufix.ext');
@define('INSTALL_THUMBWIDTH', 'Rozměry náhledů');
@define('INSTALL_THUMBWIDTH_DESC', 'Pevná šířka automaticky generovaných náhledů');
@define('INSTALL_THUMBDIM', 'Omezující rozměr pro náhledy');
@define('INSTALL_THUMBDIM_LARGEST', 'Delší hrana');
@define('INSTALL_THUMBDIM_WIDTH', 'Šířka');
@define('INSTALL_THUMBDIM_HEIGHT', 'Výška');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. velikost uploadvoaného souboru');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Zadejte maximální velikost pro uploadované (nahrávané) soubory v bytech. Toto nastavení může být  přepsáno nastavením serveru v php.ini: upload_max_filesize, post_max_size, max_input_time mají přednost před touto volbou. Prázdný řetězec znamená, že se použije limit serveru.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. šířka obrázků pro upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Zadejte maximální šířku pro uploadované obrázky v pixelech.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. výška obrázku pro upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Zadejte maximální výšku v pixelech pro uploadované obrázky.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Povolit synchronizaci medií za běhu (on the fly)');
@define('ONTHEFLYSYNCH_DESC', 'Pokud je to povoleno, Serendipity bude porovnávat databázi medií se soubory uloženými na serveru a bude synchronizovat obsah databáze a adresáře.');
@define('MEDIA_DYN_RESIZE', 'Povolit dynamickou změnu velikosti obrázků?');
@define('MEDIA_DYN_RESIZE_DESC', 'Je-li povoleno, může  media selector vracet obrázky v jakékoli požadované velikosti přes proměnnou  GET. Výsledky jsou kešovány, a tak se může vytvořit velký soubor, jestliže to intenzivně používáte.');
@define('MEDIA_EXIF', 'Importovat EXIF/JPEG  data obrázku');
@define('MEDIA_EXIF_DESC', 'Je-li povoleno, existující EXIF/JPEG metadata obrázků budou parsována a uložena v databázi, aby je bylo možno zobrazit v galerii medií.');
@define('MEDIA_PROP', 'Vlastnosti media');
@define('MEDIA_PROP_DESC', 'Zadejte seznam polí vlastností oddělených  ";" , které chcete definovat pro každý souor v mediích');
@define('MEDIA_PROP_MULTIDESC', '(Za každou položku můžete přidat ":MULTI", což bude indikovat, že tato položka bude obsahovat dlouhý text místo jen několika znaků)');
@define('MEDIA_KEYWORDS', 'Media - klíčová slova');
@define('MEDIA_KEYWORDS_DESC', 'Zadejte seznam slov oddělených  ";" která chcete použít jako předdefonovaná klíčová slova pro položky v mediích.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Osobní nastavení');
@define('USERCONF_CAT_PERSONAL_DESC', 'Nastavení vašeho účtu');
@define('USERCONF_USERNAME', 'Jméno');
@define('USERCONF_USERNAME_DESC', 'Vaše uživatelské jméno (přezdívka)');
@define('USERCONF_PASSWORD', 'Heslo');
@define('USERCONF_PASSWORD_DESC', 'Vaše heslo');
@define('USERCONF_CHECK_PASSWORD', 'Staré heslo');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Jestliže změníte  heslo v políčku výše, musíte do tohoto pole zadat současné heslo.');
@define('USERCONF_USERLEVEL', 'Úroveň');
@define('USERCONF_USERLEVEL_DESC', 'Tato úroveň určuje práva uživatele weblogu.');
@define('USERCONF_GROUPS', 'Členství ve skupinách');
@define('USERCONF_GROUPS_DESC', 'Tento uživatel je člen následujících skupin. členství ve více skupinách je možné.');
@define('USERCONF_EMAIL', 'E-mailová adresa');
@define('USERCONF_EMAIL_DESC', 'Váš e-mail');
@define('INSTALL_WYSIWYG', 'Používat WYSIWYG editor?');
@define('INSTALL_WYSIWYG_DESC', 'Chcete používat WYSIWYG editor? (Pracuje v IE5+, částečně v Mozille 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Posílat zprávy o komentářích?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Chcete dostávat zprávy o komentářích e-mailem?');
@define('USERCONF_SENDTRACKBACKS', 'Posílat zprávy o odezvách?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Chcete dostávat zprávy o odezvách na záznamy e-mailem?');
@define('USERCONF_CREATE', 'Zneplatnit uživatele / zakázat aktivitu?');
@define('USERCONF_CREATE_DESC', 'Pokud je volba vybrána, uživatel nebude mít žádná práva k vytváření nebo měnění blogu. Když se přihlásí do administrativní sekce, může si pouze prohlédnout osobní nastavení nebo se odhlásit.');
@define('USERCONF_ALLOWPUBLISH', 'Právo publikovat záznamy?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Umožnit uživateli publikovat záznamy');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Ukázat lištu nástrojů v okně výběru medií?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Základní nastavení pro nové záznamy');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UPOZORNĚNÍ: Atribut úroveň uživatele (userlevel) je nyní používán jen kvůli zpětné kompatibilitě s pluginy a autorizaci. Uživatelská práva jsou nyní řízena pomocí členských skupin!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nezadali jste správné staré heslo a nejste oprávněni heslo změnit. Vaše nastavení nebylo uloženo.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Jméno uživatele nemůže být prázdné.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'osobníKonfigurace: Přístup k osobní konfiguraci');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'osobníKonfiguraceÚroveňUživatele: Změnit úroveň uživatele (level)');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'osobníKonfiguraceNeNové: Změnit "zákaz nových příspěvků"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'osobníKonfiguracePrávoPublikovat: Změnit právo na publikování příspěvků');
@define('PERMISSION_SITECONFIGURATION', 'webKonfigurace: Konfigurace  přístupu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogKonfigurace: Konfigurace přístupu k  blogu');
@define('PERMISSION_ADMINENTRIES', 'adminPříspěvky: Administrace příspěvků');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminÚdržbaPříspěvkůOstatních: Administrace příspěvků ostatních uživatelů');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import příspěvků');
@define('PERMISSION_ADMINCATEGORIES', 'adminKategorie: Administrace kategorií');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminÚdržbaKategoriíOstatních: Administrace kategorií ostatních uživatelů');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminMazáníKategorií: Smazat kategorie');
@define('PERMISSION_ADMINUSERS', 'adminUživatelů: Administrace uživatelů');
@define('PERMISSION_ADMINUSERSDELETE', 'adminMazáníUživatelů: Smazat uživatele');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminZměnaÚrovněUživatele: Změna úrovně uživatele');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUživateléStejnéSkupiny: Administrace uživatelů ve stejné skupině');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUživateléJinéSkupiny: Administrace uživatelů v jiných skupinách');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminNovíUživatelé: Zakládat nové uživatele');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUživatelskéSkupiny: Administrace skupin uživatelů');
@define('PERMISSION_ADMINPLUGINS', 'adminPluginy: Administrace pluginů');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminÚdržbaPluginůOstatních: Administrace pluginů ostatních uživatelů');
@define('PERMISSION_ADMINIMAGES', 'adminObrázky: Administrace souborů  media');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminAdresářeObrázků: Administrace adresářů pro media');
@define('PERMISSION_ADMINIMAGESADD', 'adminPřidatObrázek: Přidávání nových souborů medií');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminSmazatObrázek: Mazání souborů medií');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminÚdržbaObrázkůOstatní: Administrace souborů medií ostatních uživatelů');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminProhlíženíObrázků: Prohlížení souborů medií');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminSynchroObrázků: Sync thumbnailů');
@define('PERMISSION_ADMINCOMMENTS', 'adminKomentáře: Administrace komentářů');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplate: Administrace šablon (template)');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminProhlíženíObrázkůOstatní: Prohlížení medií ostatních uživatelů');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zakázané pluginy');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zakázané události');
@define('PERMISSION_HIDDENGROUP', 'Skrytá skupina / Bez autora');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Záznam uložen');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vláknové');
@define('COMMENTS_VIEWMODE_LINEAR', 'Lineární');
@define('DISPLAY_COMMENTS_AS', 'Zobrazit komentáře jako');
@define('COMMENTS_DISABLE', 'Neumožnit přidávání komentářů');
@define('COMMENTS_ENABLE', 'Umožnit přidávání komentářů');
@define('COMMENTS_CLOSED', 'Autor neumožnil přidávat komentáře');
@define('VIEW_EXTENDED_ENTRY', 'Pokračovat ve čtení "%s"');
@define('TRACKBACK_SPECIFIC', 'Odezva ze specifického URI na tento záznam');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Zobrazit vše');
@define('VIEW_TOPICS', 'Zobrazit téma');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Téma');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Záznamy nebyly vloženy úspěšně!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamatovat informace? ');
@define('SUBMIT_COMMENT', 'Odeslat komentář');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Přihlásit se ke sledování komentářů k záznamu');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Váš prohlížeč nezaslal platný  HTTP-Referrer string. To mohlo být způsobeno buď špatně nastaveným prohlížečem/proxy nebo  Cross Site Request Forgery (XSRF), který je na vás namířen. Požadovaná akce nemohla být dokončena.');
@define('NAVLINK_AMOUNT', 'Zadejte počet odkazů navigační lišty (ihned po zadání této volby klikněte na "Uložit" a obnovte stránku)');
@define('NAV_LINK_TEXT', 'Test odkazu');
@define('NAV_LINK_URL', 'URL adresa odkazu');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Komentář #%s se jeví jako skutečně odsouhlasený');
@define('COMMENT_EDITED', 'Vybraný komentář byl editován');
@define('COMMENTS_WILL_BE_MODERATED', 'Odeslané komentáře budou před uveřejněním moderovány.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Pozor: Tento komentář musí být před uveřejněním odsouhlasen');
@define('DELETE_COMMENT', 'Vymazat komentář');
@define('APPROVE_COMMENT', 'Odsouhlasit komentář');
@define('REQUIRES_REVIEW', 'Vyžádat přezkoumání');
@define('COMMENT_APPROVED', 'Komentář #%s byl odsouhlasen');
@define('COMMENT_DELETED', 'Komentář #%s byl vymazán');
@define('COMMENTS_MODERATE', 'Komentáře a odezvy k tomuto záznamu budou moderovány');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Pozor: Tato odezva musí být před uveřejněním odsouhlasena');
@define('DELETE_TRACKBACK', 'Vymazat odezvu');
@define('APPROVE_TRACKBACK', 'Odsouhlasit odezvu');
@define('TRACKBACK_APPROVED', 'Odezva #%s byla odsouhlasena');
@define('TRACKBACK_DELETED', 'Odezva #%s byla vymazána');
@define('COMMENT_NOTOKENMATCH', 'Schvalovacímu odkazu vypršela platnost, nebo byl komentář č.%s již schválen či odstraněn');
@define('TRACKBACK_NOTOKENMATCH', 'Schvalovacímu odkazu vypršela platnost, nebo byla odezva č.%s již schválena či odstraněna');
@define('BADTOKEN', 'Neplatný odkaz pro schválení');
@define('TOP_LEVEL', 'Nejvyšší úroveň');
@define('VIEW_COMMENT', 'Ukázat komentář');
@define('VIEW_ENTRY', 'Ukázat záznam');
@define('LINK_TO_ENTRY', 'Odkaz na záznam');
@define('LINK_TO_REMOTE_ENTRY', 'Odkaz na externí záznam');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Posílání oznámení (pingback) na URI %s...');
@define('PINGBACK_SENT', 'Oznámení úspěšné');
@define('PINGBACK_FAILED', 'Oznámení selhalo: %s');
@define('PINGBACK_NOT_FOUND', 'Oznamovací URI adresa neexistuje.');
@define('TRACKBACK_SENDING', 'Odeslání odezvy na URI %s...');
@define('TRACKBACK_SENT', 'Odezva úspěšná');
@define('TRACKBACK_FAILED', 'Odezva neúspěšná: %s');
@define('TRACKBACK_NOT_FOUND', 'URI odezvy neexistuje.');
@define('TRACKBACK_URI_MISMATCH', 'Automaticky získané URI neodpovídá vašemu cílovému.');
@define('TRACKBACK_CHECKING', 'Testvání <u>%s</u> pro možné odezvy...');
@define('TRACKBACK_NO_DATA', 'Cíl neobsahuje data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Odezva nebyla odeslána: nepodařilo se spojení s %s na portu %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Ahoj %s,\n\nPožádal jsi o zasílání oznámení o nových komentářů k článku \"%s\" (<%s>). Pro potvrzení této žádosti (\"Double Opt In\") klikni prosím na následující odkaz:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Ahoj %s,\n\nPoslal jsi nový komentář na \"%s\". Komentář zní:\n\n%s\n\nVlastník blogu požaduje emailové potvrzení, takže je třeba kliknout na následující odkaz a potvrdit tak komentář:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Ahoj %s,\n\nPoslal jsi nový komentář na \"%s\". Tvůj komentář zní:\n\n%s\n\nVlastník blogu vyžaduje prvotní emailové potvrzení. Znamená to, že teď musíš svůj komentář potvrdit kliknutím na následující odkaz:\n<%s>\n\nZároveň tím potvrdíš všechny další komentáře, které pošleš se stejným jménem a emailovou adresou, v budoucnu už žádná podobná oznámení dostávat nebudeš.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nový komentář k přihlášenému záznamu "%s"');
@define('SUBSCRIPTION_MAIL', "Pozor %s,\n\nA právě byl přidán nový komentář k záznamu, který sledujete na \"%s\", s názvem \"%s\"\nJméno odesílatele: %s\n\nZáznam najdete zde: %s\n\nMůžete se odhlásit zde: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Pozor %s,\n\nA právě byla přidána nová odezva k záznamu, který sledujete na \"%s\", s názvem \"%s\"\nJméno odesílatele: %s\n\nZáznam najdete zde: %s\n\nMůžete se odhlásit zde: %s\n");
@define('SIGNATURE', "\n-- \n%s je vytvořen pomocí Serendipity.\n Tento perfektní blogovací systém můžete zdarma používat také.\nNavštivte <https://s9y.org>, kde se dozvíte vše potřebné.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nový komentář k weblogu "%s", k záznamu s názvem "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nová odezva na weblog/záznam s názvem "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Máte k dispozici tyto volby:');
@define('NEW_TRACKBACK_TO', 'Nová odezva na');
@define('NEW_COMMENT_TO', 'Nový komentář k');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nenalezen žádný záznam odpovídající volbě %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Vyhledávání %s odpovídá %s výsledků:');
@define('SEARCH_TOO_SHORT', 'Vyhledávací dotaz musí být delší než 3 znaky. Ke kratším slovům můžete zkusit přidat *, jako: s9y*, abyste  vyhledávání přiměli pracovat s kratšími slovy.');
@define('SEARCH_ERROR', 'Funkce vyhledávání nepracovala podle očekávání. Poznámka pro administrátora blogu: Mohlo to být způsobeno nepřítomností příslušných indexů v databázi. Uživatelský účet v databázi MySQL musí být oprávněn vykonat tento dotaz: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Specifická chyba vrácená databází byla: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Váš komentář nic neobsahuje, %svraťte se%s a zkuste to znovu');
@define('COMMENT_NOT_ADDED', 'Váš komentář nemohl být přidán, protože komentáře k tomuto příspěvku byly zakázány, zadali jste špatná data nebo byl váš komentář zachycen antispamem.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Komentáře od');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Vaše potvrzení komentáře bylo úspěšně přijato.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Vaše potvrzení komentáře nemohlo být přijato. Zkontrolujte prosím odkaz, na který jste kliknuli. Pokud je odkaz starší než 3 týdny, musíte poslat komentář znovu.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Vaše potvrzení žádosti o zasílání oznámení o nových komentářích bylo úspěšně přijato.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Syntax konfigurace je chybná pro volbu "%s". Vyžaduje obsah typu "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Seznam kategorií.');
@define('CATEGORIES_PARENT_BASE', 'Zobrazit jen kategorie niže ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Můžete vybrat rodičovskou kategorii, takže budou zobrazeny jen její nižší kategori.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skrýt kategorie, které nejsou součástí stromu kategorií');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Jestliže chcete skrýt kategorie, které jsou částí jiného stromu kategorií, musíte tohle povolit. Tato možnost se nejlépe  použije ve spojení s multi-blogem a pluginem  "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Skrýt zvolenou rodičovskou kategorii?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Jestliže omezíte výpis kategorií na specifickou kategorii,  standardně bude  na výstupu rodičovská kategorie zobrazena. Když tuto možnost zakážete, název rodičovské kategorie nebude zobrazen.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Povolit Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Je-li tato možnost povolena, bude plugin pro výpis kategorií využívat možností  Smarty-Templating. Když tohle povolíte, můžete měnit layout přes šablonu "plugin_categories.tpl". Povolení téhle volby může zhoršit výkon, takže pokud nechcete dělat úpravy pro jednotlivé kategorie, nechte to zakázané.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Zobrazit počet příspěvků na kategorii? ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Povolit návštěvníkům zobrazit více kategorií najednou?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Jestliže je tato volba povolena, bude v tomto postranním pluginu hned vedle každé kategorie zaškrtávací okénko. Uživatelé mohou tyto boxy zaškrtnout a vidět jen příspěvky patřící do tohoto výběru.');
@define('CATEGORIES_TO_FETCH', 'Vyhledat kategorie');
@define('CATEGORIES_TO_FETCH_DESC', 'Vyhledat kategorie podle autorů?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zobrazit seznam autorů');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Zobrazit počet článků u jména autora?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Je-li tato volba povolena, je vedle jména autora zobrazen v závorce počet jeho příspěvků.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Zobrazit pouze autory s více než X příspěvky');

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
@define('SYNDICATION_PLUGIN_20c', 'Komentáře RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'Kanál ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Zobrazené jméno pro "kanál"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Zadejte volitelné jmého pro kanál (pokud je prázndé, pak je standardně pojmenován jako "kanál")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Zobrazované jméno pro kanál s komentáři');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Zadejte (volitelně) jakékoliv jméno pro kanál s komentáři');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID feedu, který chcete publikovat');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner image');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Název obrázku, který se má zobrazit (nebo prázdný pro počitadlo), umístěné na  feedburner.com, např: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner title');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Title (je-li), který se má zobrazit u obrázku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner image text');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (je-li) který se má zobrazit při najetí na obrázek');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Schovat odkaz na archivy, pokud nejsou ve vybraném období vydané žádné příspěvky (vyžaduje počítání příspěvků)');
@define('ARCHIVE_COUNT', 'Počet prvků v seznamu');
@define('ARCHIVE_COUNT_DESC', 'Celkový počet zobrazených měsíců, týdnů nebo dnů');
@define('ARCHIVE_FREQUENCY', 'Kalendářní krok');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalendářní krok mezi prvky seznamu');
@define('BROWSE_ARCHIVES', 'Prohlížení měsíčních archivů');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zobrazit "Serendipity" jako text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vytvořeno v "Serendipity" se zobrazí jako text');
@define('POWERED_BY_SHOW_IMAGE', 'Zobrazit "Serendipity" s logem');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Zobrazí se logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Reklama na tvůrce systému vašeho weblogu');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Použít https pro přihlášení');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Umožňuje použít spojení https pro přihlášení. Váš server to musí podporovat!');
@define('SUPERUSER', 'Superuživatel');
@define('SUPERUSER_OPEN_ADMIN', 'Administrace');
@define('SUPERUSER_OPEN_LOGIN', 'Přihlášení');
@define('ALLOWS_YOU_BLAHBLAH', 'Vložit odkaz do postranního bloku administrace weblogu');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendář');
@define('CALENDAR_BOW_DESC', 'Den, určený jako začátek týdne. Default je pondělí');
@define('QUICKJUMP_CALENDAR', 'Vyhledávací kalendář');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Začátek týdne');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Povolit Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Jestliže je toto povoleno, mohou se pluginy napojovat na kalendář a zvýrazňovat své vlastní události. Povolte jen když máte pluginy, které toto potřebují, jinak to jen snižuje výkon.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Hledání záznamu');
@define('SEARCH_FULLENTRY', 'Zobrazit celý příspěvek');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Vložení HTML kódu do postranního sloupce');
@define('THE_NUGGET', 'Vložený HTML');
@define('BACKEND_TITLE', 'Další informace v konfigurační obrazovce pluginu');
@define('BACKEND_TITLE_FOR_NUGGET', 'Zde můžete definovat svůj řetězec, který bude zobrazen v konfigurační obrazovce pluginu společně s popisem pluginu HTML Nugget. Když máte několik HTML nuggetů s prázdným tittle, toto vám pomůže je rozlišit.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Zobrazit Top výstupy/odběratele jako linky?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Ne": Výstupy a adresy odběratelů budou zobrazeny jako čistý text pro zamezení spamu, "Ano": nebo jako hyperlinky. "Default": Použít globální nastavení (doporučeno).');
@define('HAVE_TO_BE_LOGGED_ON', 'Pro zobrazení této stránky musíte být přihlášen');
@define('WELCOME_TO_ADMIN', 'Vítejte v Administrační sekci Serendipity .');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Velký obrázek');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Pokud zadáte absolutní URL adresu s http://..., bude tato adresa použita jako cíl přesměrování v případě, že jste zatrhli volbu "Vynutit" pro FeedBurner. Mějte na paměti, že to může být URL adresa nezávislá na FeedBurneru. Pro nové kanály FeedBurneru Googlu budete muset zadat http://feeds2.feedburner.com/jmenoVasehoKanalu)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Pokud nastavíte tuto volbu na "Vynutit", můžete přesměrovat RSS kanál na jakoukoliv webovou službu, nejen na FeedBurner. Podívejte se níže na volbu "Feedburner ID" pro zadání absolutní adresy.');
@define('MEDIA_PROPERTY_COMMENT1', 'Krátký komentář');
@define('MEDIA_PROPERTY_COMMENT2', 'Dlouhý komentář');
@define('DELETE_SELECTED_ENTRIES', 'Vymazat vybrané příspěvky');
@define('MEDIA_PROPERTY_ALT', 'Popis (shrnutí pro atribut ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titulek');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ještě není nainstalován. <a href="%s">Instalujte</a> jej nyní.');
@define('COMMENT_ADDED_CLICK', 'Klikněte %ssem%s pro návrat ke komentářům nebo %ssem%s pro zavření okna.');
@define('COMMENT_NOT_ADDED_CLICK', 'Klikněte %ssem%s pro návrat ke komentářům nebo %ssem%s pro zavření okna.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Délka');
@define('MEDIA_PROPERTY_DATE', 'Asociované datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL přesunutého adresáře přesunuto v   %s příspěvcích.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'V Ne-MySQL databázi není iterace po příspěvcích a nahrazení staré adresy původního adresáře novou URL možné. Budete muset příspěvky ručně editovat a ty adresy upravit. Ale pořád ještě můžete adresář přesunout zpátky tam kde byl, jestli je to pro vás moc otravné.');
@define('TRACKBACK_SIZE', 'Cílové URI překročilo max. velikost souboru %s bytů.');
@define('CLICK_FILE_TO_INSERT', 'Klikněte na soubor, který chcete vložit:');
@define('SELECT_FILE', 'Vyberte soubor pro vložení:');
@define('MANAGE_IMAGES', 'Správa obrázků');
@define('WORD_NEW', 'Nové');
@define('WORD_OR', 'nebo');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Viditelné (Frontend): Externí služby');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Viditelné (Frontend): Další možnosti');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Viditelné (Frontend): Úplné mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Viditelné (Frontend): Zobrazení/filtry');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Viditelné (Frontend): Pluginy pro příspěvky');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Provozní (Backend): Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Provozní (Backend): Řízení uživatelů');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Provozní (Backend): Meta informace');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Provozní (Backend): Templates - šablony vzhledu');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Provozní (Backend): Další možnosti');
@define('PLUGIN_GROUP_IMAGES', 'Obrázky');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup - textové značky');
@define('PLUGIN_GROUP_STATISTICS', 'Statistiky');
@define('IMPORT_WELCOME', 'Vítejte v utilitě pro import dat');
@define('USER_SELF_INFO', 'Přihlášen jako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Zde můžete importovat záznamy z jiných weblogů');
@define('IMPORT_SELECT', 'Vyberte software, ze kterého chcete importovat');
@define('MANAGE_STYLES', 'Změna stylu');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vyberte plugin, který chcete instalovat');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Níže je seznam instalovaných pluginů');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Zrušit');
@define('DELETE_SELECTED_COMMENTS', 'Vymazat vybrané komentáře');
@define('MODERATE_SELECTED_COMMENTS', 'Schválit vybrané komentáře');
@define('FIND_MEDIA', 'Hledat média');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Chyba: Jméno souboru neexistuje!');
@define('ERROR_SOMETHING', 'Chyba: Něco je špatně.');
@define('DIRECT_LINK', 'Přímý odkaz na tento záznam');
@define('SELECT_TEMPLATE', 'Vyberte vzor pro váš web');
@define('DATABASE_ERROR', 'chyba serendipity: nelze se spojit s databází - ukončeno.');
@define('LIMIT_TO_NUMBER', 'Kolik záznamů by mělo být zobrazeno?');
@define('DIRECTORIES_AVAILABLE', 'Po kliknutí na některý adresář v seznamu můžete vytvořit další podadresář.');
@define('CATEGORY_INDEX', 'Níže je seznam kategorií, které můžet použít k vašemu záznamu');
@define('PAGE_BROWSE_PLUGINS', 'Strana %s z %s, celkem %s pluginů.');
@define('CHARSET_NATIVE', 'Národní');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API Interface na Serendipity již není přibaleno  kvůli pokračujícím bezpečnostním problémům s tímhle API a protože ho moc lidí nepoužívá. Proto musíte nainstalovat plugin XML-RPC, když chcete  XML-RPC API používat. URL, které se použije ve vaší aplikaci, se nezmění - hned po instalaci pluginu budete moci API používat.');
@define('AUTHORS_ALLOW_SELECT', 'Povolit návštěvníkům vybrat více autorů najednou?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Jestliže je tato volba povolena, bude u každého autora umístěno zatrhávací okénko. Uživatelé mohou zvolit více autorů  a vidět příspěvky, které vyhovují jejich výběru');
@define('PREFERENCE_USE_JS', 'Povolit použití advanced JS?');
@define('PREFERENCE_USE_JS_DESC', 'Je-li toto povoleno, budou povoleny sekce s advanced JavaScript, aby se zlepšila použitelnost. Např v sekci pro konfiguraci pluginů můžete pro přeskládání pluginů použít drag and drop (táhnout myší).');
@define('PREFERENCE_USE_JS_WARNING', '(Tato stránka používá advanced JavaScripting. Jestliže máte problémy s fungováním, zakažte prosím používání  advanced JS ve svém osobním nastavení nebo zakažte javascript v prohlížeči.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Čeká na potvrzení');
@define('NO_COMMENT_SUBSCRIPTION', 'Neodebíráno');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');