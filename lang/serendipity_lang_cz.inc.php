<?php
# lang_cz.inc.php 1.10 2012-01-08 18:34:17 VladaAjgl $

/**
 *  @version 1.10
 *  Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
 *  All rights reserved.  See LICENSE file for licensing details
 *  Translation (c) 2004 Josef Klimosz <ok2wo@centrum.cz>
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/23
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/07/14
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/25
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/02/06
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/05/02
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/09/12
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2010/12/25
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/04/17
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2012/01/08
 */
$i18n_filename_from = array (
'�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
'�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
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
@define('PREVIEW', 'Uk�zat');
@define('DATE', 'Datum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Vzhled');
@define('LOGIN', 'P�ihl�en�');
@define('LOGOUT', 'Odhl�en�');
@define('LOGGEDOUT', 'Odhl�en');
@define('CREATE', 'Vytvo�it');
@define('BACK', 'Zp�t');
@define('FORWARD', 'D�le');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nov�...');
@define('OLDER', 'Star��...');
@define('DONE', 'Hotovo');
@define('TITLE', 'Titulek');
@define('DESCRIPTION', 'Popis');
@define('PLACEMENT', 'Um�st�n�');
@define('DELETE', 'Vymazat');
@define('SAVE', 'Ulo�it');
@define('UP', 'Nahoru');
@define('DOWN', 'Dol�');
@define('PREVIOUS', 'P�edchoz�');
@define('NEXT', 'Dal��');
@define('ENTRIES', 'z�znamy');
@define('CATEGORIES', 'Kategorie');
@define('NAME', 'Jm�no');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Dom�c� str�nka');
@define('COMMENT', 'Koment��');
@define('VIEW', 'Uk�zat');
@define('HIDE', 'Skr�t');
@define('WEEK', 'T�den');
@define('WEEKS', 'T�dny');
@define('MONTHS', 'M�s�ce');
@define('DAYS', 'Dny');
@define('DEBUG', 'Debug');
@define('SUCCESS', '�sp�ch');
@define('COMMENTS', 'Koment��e');
@define('ADD_COMMENT', 'P�idat koment��');
@define('NO_COMMENTS', '��dn� koment��e');
@define('POSTED_BY', 'Vlo�il');
@define('ON', 'v');
@define('NO_CATEGORY', '��dn� kategorie');
@define('CATEGORY', 'Kategorie');
@define('EDIT', 'Editace');
@define('GO', 'Prov�st!');
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
@define('QUICKSEARCH', 'Rychl� hled�n�');
@define('TRACKBACKS', 'Odezvy');
@define('TRACKBACK', 'Odezva');
@define('NO_TRACKBACKS', '��dn� odezvy');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'V�pis');
@define('TRACKED', 'Sledov�n');
@define('USER', 'U�ivatel');
@define('USERNAME', 'Jm�no (p�ezd�vka)');
@define('PASSWORD', 'Heslo');
@define('HIDDEN', 'skryt�');
@define('IMAGE', 'Obr�zek');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verze');
@define('INSTALL', 'Instalovat');
@define('REPLY', 'Odpov��');
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
@define('ADMIN_FRONTPAGE', 'Hlavn� str�nka');
@define('QUOTE', 'Citace');
@define('NONE', 'nic');
@define('GROUP', 'Skupina');
@define('AUTHORS', 'Auto�i');
@define('UPGRADE', 'Aktualizace');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'V�ichni auto�i');
@define('PREVIOUS_PAGE', 'p�edchoz� str�nka');
@define('NEXT_PAGE', 'dal�� str�nka');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'V�echny kategorie');
@define('LAST_UPDATED', 'Naposled zm�n�no');
@define('IP_ADDRESS', 'IP adresa');
@define('CHARSET', 'Znakov� sada');
@define('REFERER', 'Odb�ratel');
@define('APPROVE', 'Povolit');
@define('NOT_FOUND', 'Nen� obsa�en');
@define('WRITABLE', 'Zapisovateln�');
@define('NOT_WRITABLE', 'Nezapisovateln�');
@define('WELCOME_BACK', 'V�tejte zp�t,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Se�adit podle');
@define('SORT_ORDER', 'Po�ad�');
@define('SORT_ORDER_ASC', 'Vzestupn�');
@define('SORT_ORDER_DESC', 'Sestupn�');
@define('FILTERS', 'Filtry');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Otev��t v�e');
@define('TOGGLE_OPTION', 'Otev��t volbu');
@define('IN_REPLY_TO', 'Odpov�� na');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Adres��');
@define('BACK_TO_BLOG', 'Zp�t do weblogu');
@define('HTML_NUGGET', 'Vlo�en� HTML k�d');
@define('TITLE_FOR_NUGGET', 'N�zev HTML k�du');
@define('COMMENT_ADDED', 'V� koment�� byl �sp�n� p�id�n.');
@define('ENTRIES_FOR', 'Z�znamy: %s');
@define('NO_ENTRIES_TO_PRINT', '��dn� z�znamy k zobrazen�');
@define('COMMENT_DELETE_CONFIRM', 'Jste si jist vymaz�n�m koment��e #%d, zapsan�ho %s?');
@define('DELETE_SURE', 'Ur�it� chcete vymazat #%s natrvalo?');
@define('MEDIA_FULLSIZE', 'Pln� rozm�r');
@define('SIDEBAR_PLUGIN', 'postrann� plugin');
@define('EVENT_PLUGIN', 'plugin ud�losti');
@define('PLUGIN_ITEM_DISPLAY', 'Kde by m�la b�t tato polo�ka zobrazena?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'V roz���en� ��sti');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'V p�ehledu');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'V obou ��stech');
@define('DIRECTORY_WRITE_ERROR', 'Nelze zapisovat do adres��e %s - prov��te opr�vn�n�.');
@define('FILE_WRITE_ERROR', 'Nelze zapisovat do souboru %s.');
@define('INCLUDE_ERROR', 'chyba serendipity: nelze vlo�it %s - ukon�eno.');
@define('DO_MARKUP', 'Umo�nit p�evod zna�ek');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Form�tov�n� data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Form�t aktu�ln�ho data z�znamu, pou��v� PHP prom�nnou strftime(). (P�ednastaveno: "%s")');
@define('APPLY_MARKUP_TO', 'Zapnout zna�kov�n� %s');
@define('XML_IMAGE_TO_DISPLAY', 'Znak XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Odkazy na XML kan�ly budou zobrazeny s t�mto znakem. Nechejte pr�zdn� pro p�vodn� nastaven�, nebo zadejte \'none\' pro vypnut�.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Vymaz�n� souboru %s...');
@define('SETTINGS_SAVED_AT', 'Nov� nastaven� bylo ulo�eno v %s');
@define('INVERT_SELECTIONS', 'Obr�tit v�b�r');

@define('PERSONAL_SETTINGS', 'Osobn� nastaven�');
@define('DO_MARKUP_DESCRIPTION', 'P�ev�st zna�ky na text (smajl�ky, zkratky *, /, _, ...). Vypnut� t�to volby zajist� ulo�en� HTML k�d� v textu.');
@define('BASE_DIRECTORY', 'Z�kladn� adres��');
@define('PERM_READ', 'Pr�vo na �ten�');
@define('PERM_WRITE', 'Pr�vo na z�pis');
@define('PERM_DENIED', 'P��stup odep�en.');
@define('CURRENT_AUTHOR', 'Aktu�ln� autor');
@define('PLUGIN_ACTIVE', 'Aktivn�');
@define('PLUGIN_INACTIVE', 'Neaktivn�');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Ulo�te tento odkaz do obl�ben�ch z�lo�ek a pou�ijte z�lo�ku na jak�koliv str�nkce, o kter� chcete ps�t. Z�lo�ka V�s rychle p�epne do Va�eho Serendipity Blogu.');
@define('SET_TO_MODERATED', 'Schv�lit');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalace Serendipity');
@define('WELCOME_TO_INSTALLATION', 'V�tejte v instalaci Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Nejd��ve se pod�v�me na va�e z�kladn� nastaven� a zkus�me diagnostikovat p��padn� probl�my');
@define('ERRORS_ARE_DISPLAYED_IN', 'Chyby budou zobrazeny %s, doporu�en� %s a �sp�ch %s');
@define('RED', '�erven�');
@define('YELLOW', '�lut�');
@define('GREEN', 'zelen�');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - p�edinstala�n� zpr�va');
@define('INTEGRITY', 'Kontrola integrity instalace');
@define('PHP_INSTALLATION', 'Instalace PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Opera�n� syst�m');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'konfigurace php.ini');
@define('RECOMMENDED', 'Doporu�eno');
@define('ACTUAL', 'Aktu�ln�');
@define('PERMISSIONS', 'Opr�vn�n�');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Opr�vn�n� m��e b�t nastaveno s pou�it�m povelu: `<em>%s</em>` v adres��i, nebo nastaven�m pomoc� FTP programu');
@define('PROBLEM_DIAGNOSTIC', 'Byly diagnostikov�ny probl�my, tak�e nelze pokra�ovat v instalaci, dokud nebudou odstran�ny');
@define('SELECT_INSTALLATION_TYPE', 'Vyberte typ instalace');
@define('RECHECK_INSTALLATION', 'P�ekontrolovat instalaci');
@define('SIMPLE_INSTALLATION', 'Jednoduch� instalace');
@define('EXPERT_INSTALLATION', 'Expertn� instalace');
@define('COMPLETE_INSTALLATION', 'Kompletn� instalace');
@define('WONT_INSTALL_DB_AGAIN', 'nebude se znovu instalovat datab�ze');
@define('THEY_DO', 'existuj�');
@define('THEY_DONT', 'neexistuj�');
@define('CHECK_DATABASE_EXISTS', 'Kontrola, jestli datab�ze a tabulky opravdu existuj�');
@define('CREATE_DATABASE', 'Vytvo�en� z�kladn� datab�ze...');
@define('ATTEMPT_WRITE_FILE', 'Pokus ulo�it soubor %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Vytvo�en� hlavn�ho autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Nastaven� defaultn�ho vzoru');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalace defaultn�ch plugin�');
@define('SERENDIPITY_INSTALLED', 'Serendipity byl �sp�n� nainstalov�n');
@define('VISIT_BLOG_HERE', 'Zde se p�epnete do sv�ho nov�ho weblogu');
@define('THANK_YOU_FOR_CHOOSING', 'D�kujeme za volbu Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'P�i instalaci byla detekov�na chyba');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Vytvo�eno pomoc�');
@define('ADMIN_FOOTER_POWERED_BY', 'Vytvo�eno pomoc� Serendipity %s a PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Autor');
@define('USERLEVEL_CHIEF_DESC', 'Redaktor');
@define('USERLEVEL_ADMIN_DESC', 'Administr�tor');
@define('WWW_USER', 'Zm��te www na u�ivatele, kter� je ur�en v Apache (na p�. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Adres�� %s neexistuje a nemohl b�t vytvo�en. Vytvo�te adres�� manu�ln�.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; spustit <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nelze spustit bin�rn� soubor %s.');
@define('FILE_CREATE_YOURSELF', 'Vytvo�te soubor p��mo nebo prov��te opr�vn�n�');
@define('COPY_CODE_BELOW', '<br />* Zkop�rujte k�d uveden� n�e a um�st�te jej do %s ve va�em %s adres��i:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Po dokon�en� stiskn�te tla��tko obnoven� str�nky ve va�em prohl�e�i.');
@define('ERROR_TEMPLATE_FILE', 'Nelze otev��t vzorov� soubor, updatujte Serendipity!');
@define('HTACCESS_ERROR', 'Prov��te instalaci va�eho webserveru, Serendipity pot�ebuje ulo�it soubor ".htaccess". To nebylo mo�n� kv�li chyb� opr�vn�n�. Nastavte opr�vn�n� jako: <br />&nbsp;&nbsp;%s<br />a znovu ulo�te tuto str�nku.');
@define('EMPTY_SETTING', 'Nespecifikoval jste platnou hodnotu pro "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Vy�adov�no pouze pokud chcete v budoucnu vyu��vat plugin Spartacus pro stahov�n� nov�ch p��davn�ch modul�.)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity detekoval, �e va�e konfigurace je ulo�ena ve verzi %s, ale serendipity je instalov�n jako verze %s, je pot�eba upgrade! <a href="%s">Klikn�te zde</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'V�t� v�s mana�er upgrade Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Pomohu v�m s upgrade va�� instalace Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Tato zpr�va je zobrazena proto, �e va�e instalace je Serendipity %s, ale je�t� nebyla updatov�na datab�ze pro tuto verzi');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Update datab�ze (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Zde jsou .sql soubory, kter� mus�te spustit p�ed pokra�ov�n�m pr�ce se Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '�lohy specifick� pro tuto verzi');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '��dn� specifick� �lohy');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Mohu pokra�ovat v t�chto �loh�ch?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Ne, spust�m je manu�ln�');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ano, pokra�ujte');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Nen� t�eba ��dn� upgrade');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity je upgradov�n');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vynechal jste stupe� upgrade Serendipity, ujist�te se, �e datab�ze je spr�vn� nainstalov�na a pl�novan� funkce jsou spu�t�ny');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Va�e instalace Serendipity je upgradov�na na %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Kliknut�m %ssem%s se vr�t�te do va�eho weblogu');
@define('ADMIN_ENTRIES', 'Z�znamy');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nebylo mo�n� se spojit s datab�z� MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nebylo mo�n� vybrat datab�zi: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nebylo mo�n� vybrat u�ivatelsk� informace: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nebylo mo�n� vybrat informace o kategorii: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nebylo mo�n� vybrat informace o z�znamu: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nebylo mo�n� vybrat informace o koment��i: %s.');
@define('MYSQL_REQUIRED', 'Pro proveden� t�to akce je nutn� m�t datab�zi MySQL.');
@define('CREATE_AUTHOR', 'Vytvo�it autora \'%s\'.');
@define('CREATE_CATEGORY', 'Vytvo�it kategorii \'%s\'.');
@define('MT_DATA_FILE', 'Soubory Movable Type');
@define('INSTALL_DBPORT', 'Port datab�ze');
@define('INSTALL_DBPORT_DESC', 'Port pou�it� pro spojen� k va�emu datab�zov�mu serveru');
@define('IMPORT_PLEASE_ENTER', 'Vlo�te data po�adovan� n�e');
@define('IMPORT_NOW', 'Importovat!');
@define('IMPORT_STARTING', 'Start importu...');
@define('IMPORT_FAILED', 'Import se nezda�il');
@define('IMPORT_DONE', 'Import �sp�n� dokon�en');
@define('IMPORT_WEBLOG_APP', 'Weblogov� aplikace');
@define('IMPORT_NOTES', 'Pozn�mka:');
@define('IMPORT_STATUS', 'Stav po importu');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import (roz���en� WordPress RSS import), vy�aduje PHP5 a m��e vy�adovat p��li� mnoho pam�ti');
@define('RSS_IMPORT_BODYONLY', 'Ulo�it cel� importovan� text do "hlavn�" ��sti, nerozd�lovat do "roz���en�" ��sti.');
@define('IMPORT_GENERIC_RSS', 'Z�kladn� RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Odeslat odezvy na odkazy obsa�en� v z�znamu');
@define('RSS_IMPORT_CATEGORY', 'Pou��t tuto kategorii pro neur�en� z�znamy');
@define('IMPORT_WP_PAGES', 'Zobrazovat jako oby�ejn� p��sp�vky blogu i p��lohy a statick� str�nky?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nebyl nalezen.');
@define('CONVERT_HTMLENTITIES', 'Zkusit automatickou konverzi HTML entit?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administr�torsk� sekce');
@define('WRONG_USERNAME_OR_PASSWORD', 'Z�ejm� jste vlo�il �patn� jm�no nebo heslo!');
@define('PLEASE_ENTER_CREDENTIALS', 'Zadejte pros�m p�ihla�ovac� �daje.');
@define('AUTOMATIC_LOGIN', 'Ulo�it informace');
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
@define('MEDIA', 'M�dia (obr�zky)');
@define('MEDIA_LIBRARY', 'Knihovna m�di�');
@define('ADD_MEDIA', 'P�idat');
@define('MANAGE_DIRECTORIES', 'Pr�ce s adres��i');
@define('CONFIGURATION', 'Konfigurace');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Dal�� odkazy');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Domovsk� str�nka Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Dokumentace Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Ofici�ln� blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'F�rum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Tento z�znam je�t� nen� publikov�n.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lok�ln� dokumentace');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Historie verz�');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Pluginy pro postrann� sloupce');
@define('EVENT_PLUGINS', 'Pluginy ud�lost�');
@define('CONFIGURE_PLUGINS', 'Konfigurace plugin�');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Nespln�n� po�adavky: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aktualizace na verzi %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Klikn�te a instalujte nov� %s');
@define('ALREADY_INSTALLED', 'Instalov�n');
@define('PLUGIN_AVAILABLE_COUNT', 'Celkem: %d plugin�.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Editovat z�znamy');
@define('EDIT_ENTRY', 'Editovat z�znam');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Koncept');
@define('PUBLISH', 'Publikovat');
@define('CONTENT', 'Obsah');
@define('ENTRIES_PER_PAGE', 'z�znam� na str�nku');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'P�ilepen� z�znamy');
@define('PAGE_BROWSE_ENTRIES', 'Str�nka %s z %s, celkem %s z�znam�');
@define('FIND_ENTRIES', 'Hledat z�znamy');
@define('RIP_ENTRY', 'Zru�en z�znam #%s');
@define('NEW_ENTRY', 'Nov� z�znam');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Text z�znamu');
@define('EXTENDED_BODY', 'Roz���en� textov� ��st');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Koncept tohoto z�znamu byl ulo�en');
@define('IFRAME_PREVIEW', 'Serendipity nyn� vytv��� n�hled va�eho z�znamu...');
@define('IFRAME_WARNING', 'V� prohl�e� nepodporuje iframe. Otev�ete soubor serendipity_config.inc.php a nastavte prom�nnou $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Upozorn�n�: Datum je specifikov�no �patn�. Pou�ijte form�t YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Roz���en� volby');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tento odkaz nen� m�n�n jako klikateln�. Obsahuje zp�tn� URI z�znamu. Tento URI m��ete pou��t k odes�l�n� ping� a sledov�n� odezvy na tento z�znam. Odkaz zkop�rujete kliknut�m pravou my�� a volbou "Kop�rovat odkaz" v Internet Exploreru nebo "Zkop�rovat um�st�n� odkazu" v Mozille.');
@define('RESET_DATE', 'Resetovat datum');
@define('RESET_DATE_DESC', 'Klikn�te a resetujte datum na aktu�ln�');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Spr�va u�ivatel�');
@define('CREATE_NEW_USER', 'Vytvo�it nov�ho u�ivatele');
@define('CREATE_NOT_AUTHORIZED', 'Nem��ete editovat u�ivatele se stejnou �rovn� jako je va�e');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nem��ete vytvo�it u�ivatele s vy��� �rovn� ne� je va�e');
@define('CREATED_USER', 'Nov� u�ivatel %s byl vytvo�en');
@define('MODIFIED_USER', 'Nastaven� u�ivatele %s byla zm�n�na');
@define('USER_LEVEL', '�rove�');
@define('WARNING_NO_GROUPS_SELECTED', 'Varov�n�: Nezvolili jste si �lenstv� v ��dn� skupin�. To by v�s vylou�ilo z ��zen� pr�v u�ivatelsk�ch skupin, a proto va�e �lenstv� ve skupin� nebude zm�n�no.');
@define('DELETE_USER', 'Chcete vymazat u�ivatele #%d %s. Mysl�te to v�n�? Tato akce znemo�n� prohl�et j�m vytvo�en� z�znamy na hlavn� str�nce.');
@define('DELETED_USER', 'U�ivatel #%d %s je vymaz�n.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Upravuj skupiny');
@define('DELETED_GROUP', 'Skupina #%d %s smaz�na.');
@define('CREATED_GROUP', 'Nov� skupina %s byla vytvo�ena');
@define('MODIFIED_GROUP', 'Vlastnosti skupiny %s byly zm�n�ny');
@define('CREATE_NEW_GROUP', 'Vytvo�it novou skupinu');
@define('DELETE_GROUP', 'Chyst�te se smazat skupinu #%d %s. Mysl�te to v�n�?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hledat koment��e');
@define('COMMENTS_FILTER_SHOW', 'Zobrazit');
@define('COMMENTS_FILTER_ALL', 'V�e');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Pouze povolen�');
@define('COMMENTS_FILTER_NEED_APPROVAL', '�ekaj�c� na povolen�');
@define('COMMENTS_FILTER_NEED_CONFIRM', '�ek� na potvrzen� u�ivatelem');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Jste se jist vymaz�n�m vybran�ch koment���?');
@define('PAGE_BROWSE_COMMENTS', 'Str�nka %s ze %s, celkem %s koment���');
@define('COMMENT_IS_DELETED', '(Koment�� odstran�n)');
@define('COMMENT_MODERATED', 'Koment�� �.%s byl �sp�n� nastaven jako schv�len�');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Odeb�r�no');

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
@define('CATEGORY_SAVED', 'Kategorie ulo�ena');
@define('CATEGORY_ALREADY_EXIST', 'Kategorie nazvan� "%s" skute�n� existuje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategorie #%s byla zru�ena. Star�� z�znamy byly p�em�st�ny do #%s');
@define('CATEGORY_DELETED', 'Kategorie #%s byla zru�ena.');
@define('INVALID_CATEGORY', '��dn� kategorie nebyla ur�ena k vymaz�n�');
@define('EDIT_THIS_CAT', 'Editace "%s"');
@define('CATEGORY_REMAINING', 'Vymazat kategorii a p�em�stit z�znamy do kategorie');
@define('PARENT_CATEGORY', 'Nad�azen� kategorie');
@define('CATEGORY_HIDE_SUB', 'Schovat p��sp�vky z podkategori�?');
@define('CATEGORY_HIDE_SUB_DESC', 'Pokud je zobrazen� kategorie, standardn� se zobrazuj� i v�echny p��sp�vky z jej�ch podkategori�. Pokud je volba zapnuta, budou se zobrazovat jen a pouze p��sp�vky z vybran� kategorie.');
@define('CREATE_NEW_CAT', 'Vytvo�en� nov� kategorie');
@define('ALREADY_SUBCATEGORY', '%s je opravdu subkategorie pod %s.');
@define('NO_CATEGORIES', '��dn� kategorie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Nen� mo�n� porovnat kontroln� sou�ty! (v z�kladn�m adres��i chyb� soubor checksums.ini.php)');
@define('CHECKSUMS_PASS', 'V�echny soubory zkontrolov�ny.');
@define('CHECKSUM_FAILED', 'Kontrola selhala: %s je po�kozen� nebo pozm�n�n�');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import dat');
@define('EXPORT_ENTRIES', 'Export z�znam�');
@define('EXPORT_FEED', 'Exportovat pln� RSS kan�l');
@define('CREATE_THUMBS', 'Vytvo�it n�hledy');
@define('WARNING_THIS_BLAHBLAH', "POZOR:\\nTato akce m��e trvat d�le, pokud m�te mnoho obr�zk� bez n�hled�.");
@define('SYNC_OPTION_LEGEND', 'Volby synchronizace n�hled� obr�zk�');
@define('SYNC_OPTION_KEEPTHUMBS', 'Zachovat v�echny existuj�c� n�hledy');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Zachovat existuj�c� n�hledy pouze pokud maj� spr�vnou velikost');
@define('SYNC_OPTION_DELETETHUMBS', 'Znovu vytvo�it v�echny n�hledy');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' byl nastaven jako defaultn� vzor (template)');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varov�n�: V� vzor pou��v� nepovolenou metodu, je-li to mo�n�, prove�te aktualizaci');
@define('STYLE_OPTIONS_NONE', 'Toto t�ma/styl nem� specifick� volby. Pokud chcete v�d�t, jak m��ete pro svoje �ablony nastavit specifick� volby, �t�te Technical Documentation na www.s9y.org  "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Volby pro t�ma/stylu');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Je upraven� prost�ed� pro administraci');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Nastavit jako vzor');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Prov��it a ulo�it');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Odstranit ozna�en� pluginy');
@define('SAVE_CHANGES_TO_LAYOUT', 'Ulo�it zm�ny layoutu');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizace datab�ze s adres��em obr�zk�');
@define('SYNC_DONE', 'Hotovo (synchronizov�no %s obr�zk�).');
@define('RESIZE_BLAHBLAH', '<b>Zm�nit rozm�r %s</b>');
@define('ORIGINAL_SIZE', 'P�vodn� rozm�r: <i>%sx%s</i> pixel�');
@define('RESIZING', 'Zm�na rozm�r�');
@define('RESIZE_DONE', 'Hotovo (upraven rozm�r %s obr�zk�).');
@define('KEEP_PROPORTIONS', 'Zachovat proporce');
@define('REALLY_SCALE_IMAGE', 'Opravdu zm�nit rozm�r? Nelze vr�tit!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Zde m��ete zadat nov� rozm�r obr�zku. Pokud chcete zachovat proporce, zadejte jen jednu hodnotu a stiskn�te kl�vesu TAB, nov� rozm�r bude dopo��t�n automaticky:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nov� rozm�r: ');
@define('SCALING_IMAGE', 'Zm�na %s na %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Adres��e a soubory byly �sp�n� p�esunuty do  %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Adres��e a soubory nemohly b�t p�esunuty do  %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Adres�� <strong>%s</strong> byl vytvo�en.');
@define('PARENT_DIRECTORY', 'Z�kladn� adres��');
@define('CONFIRM_DELETE_DIRECTORY', 'Jste si jist, �e chcete odstranit v�echen obsah adres��e %s?');
@define('ERROR_NO_DIRECTORY', 'Chyba: Adres�� %s neexistuje');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nelze odstranit nepr�zdn� adres��. Zkuste zvolit "vynucen� maz�n�", pokud pot�ebujete vymazat tyto soubory, a ode�lete po�adavek znovu. Existuj�c� soubory jsou:');
@define('DIRECTORY_DELETE_FAILED', 'Vymaz�n� adres��e %s se nepoda�ilo. Zkontrolujte opr�vn�n� nebo �t�te zpr�vu v��e.');
@define('DIRECTORY_DELETE_SUCCESS', 'Adres�� %s byl �sp�n� vymaz�n.');
@define('CHECKING_DIRECTORY', 'Kontrola soubor� v adres��i %s');
@define('DELETE_DIRECTORY', 'Vymazat adres��');
@define('DELETE_DIRECTORY_DESC', 'Chcete vymazat obsah adres��e, obsahuj�c� medi�ln� soubory, kter� mohou b�t pou��v�ny ve va�ich z�znamech.');
@define('FORCE_DELETE', 'Vymazat V�ECHNY soubory v adres��i, v�etn� t�ch, kter� nejsou vytvo�eny pomoc� Serendipity');
@define('CREATE_DIRECTORY', 'Vytvo�it adres��');
@define('CREATE_NEW_DIRECTORY', 'Vytvo�it nov� adres��');
@define('CREATE_DIRECTORY_DESC', 'Zde m��ete vytvo�it adres�� pro ukl�d�n� medi�ln�ch soubor�. Zvolte n�zev adres��e a p��padn� nad��zen� adres��.');
@define('ABOUT_TO_DELETE_FILE', 'Chcete vymazat <b>%s</b><br />Jestli�e pou��v�te tento soubor v n�jak�ch z�znamech, zp�sob� to nep��stupnost odkaz� nebo obr�zk�.<br />Chcete p�esto pokra�ovat?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Chyba: Soubor u� ve va�em po��ta�i existuje!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nelze nal�zt soubor s n�zvem <b>%s</b>, mo�n� je opravdu vymaz�n?');
@define('ERROR_FILE_FORBIDDEN', 'Nejste opr�vn�n nahr�vat soubory s aktivn�m obsahem');
@define('REMOTE_FILE_NOT_FOUND', 'Soubor nebyl na vzd�len�m serveru nalezen, jste si jist �e URL: <b>%s</b> je spr�vn�?');
@define('FILE_FETCHED', '%s nalezen');
@define('FILE_UPLOADED', 'Soubor %s je �sp�n� nahr�n.');
@define('DELETE_FILE_FAIL', 'Nezda�ilo se vymazat soubor <b>%s</b>');
@define('DELETE_FILE', 'Vymazat soubor s n�zvem <b>%s</b>');
@define('FOUND_FILE', 'Zalo�it nov�/zm�nit soubor: %s.');
@define('FILENAME_REASSIGNED', 'Automaticky p�id�len� nov� jm�no souboru: %s');
@define('ERROR_FILE_EXISTS', 'Chyba: Toto jm�no souboru je u� pou�ito, zvolte jin�!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'odkazov�n');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Nov� n�zev: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'P�id�n� obr�zku...');
@define('THUMB_CREATED_DONE', 'N�hled je vytvo�en.<br>Hotovo.');
@define('THUMBNAIL_USING_OWN', '%s je pou�it jako vlastn� n�hled, proto�e je p��li� mal�.');
@define('THUMBNAIL_FAILED_COPY', '%s nelze pou��t jako vlastn� n�hled, nebo� jej nelze zkop�rovat!');
@define('DELETE_THUMBNAIL', 'Vymaz�n n�hled obr�zku s n�zvem <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Nezn�m� chyba, soubor nebyl nahr�n. Je mo�n�, �e d�lka souboru p�ekra�uje maximum, povolen� serverem. Spojte se s va��m ISP nebo editujte soubor php.ini a povolte v�t�� velikost.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Chyba: Nem��ete uploadovat soubory v�t�� ne�  %s byt�!');
@define('MEDIA_UPLOAD_DIMERROR', 'Chyba: Nem��ete uploadovat soubory obr�zk� v�t�� ne�  %s x %s pixel�!');
@define('HOTLINK_DONE', 'Soubor p�ipojen odkazem.<br />Hotovo.');
@define('DELETE_HOTLINK_FILE', 'Vymaz�n odkazovan� soubor <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nelze spustit: "%s", chyba: %s, vrac� prom�nnou: %d');
@define('SKIPPING_FILE_EXTENSION', 'Vynech�n soubor: Chyb�j�c� p��pona %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Vynech�n soubor: %s nelze na��st.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Nastavte shodn� pr�va pro v�echny pod��zen� adres��e');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Pou��t n�hled.');
@define('I_WANT_BIG_IMAGE', 'Pou��t cel� obr�zek.');
@define('I_WANT_NO_LINK', 'Zobrazit jako obr�zek');
@define('I_WANT_IT_TO_LINK', 'Zobrazit jako odkaz (URL):');
@define('MEDIA_ALT', 'Atribut ALT (popis nebo kr�tk� popis)');
@define('MEDIA_TITLE', 'Atribut TITLE (zobrazuje se p�i najet� my�� na obr�zek)');
@define('IMAGE_SIZE', 'Obr�zek o rozm�ru');
@define('IMAGE_ALIGNMENT', '�prava obr�zku');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Vlo�en� obr�zku');
@define('MEDIA_TARGET', 'C�l odkazu');
@define('MEDIA_TARGET_JS', 'Popup okno (pomoc� JavaScriptu, p�izp�sobiteln� velikost)');
@define('MEDIA_ENTRY', 'Samostatn� p��sp�vek');
@define('MEDIA_TARGET_BLANK', 'Popup okno (pomoc� target=_blank)');
@define('YOU_CHOSE', 'Vybral jste %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Oto�it o 90 stup�� doleva');
@define('IMAGE_ROTATE_RIGHT', 'Oto�it o 90 stup�� doprava');
@define('MEDIA_RENAME', 'P�ejmenovat soubor');
@define('THUMBNAIL_SHORT', 'N�hl.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'N�zev souboru');
@define('SORT_ORDER_EXTENSION', 'Roz���en�');
@define('SORT_ORDER_SIZE', 'Velikost');
@define('SORT_ORDER_WIDTH', '���ka obr�zku');
@define('SORT_ORDER_HEIGHT', 'V��ka obr�zku');
@define('SORT_ORDER_DATE', 'Datum nahr�n�');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>P�idat soubor do schr�nky m�di�:</b><p>Zde m��ete ukl�dat medi�ln� soubory, nebo ur�it, kde je z�skat z WEBu! Pokud nem�te odpov�daj�c� obr�zek, <a href="https://images.google.com/" target="_blank">hledejte na Google</a> odpov�� na va�i pot�ebu, obvykle se zada�� :).<p><b>Vyberte metodu:</b><br>');
@define('ENTER_MEDIA_URL', 'Vlo�te URL p�id�van�ho souboru:');
@define('ENTER_MEDIA_UPLOAD', 'Vyberte soubor pro nahr�n�:');
@define('SAVE_FILE_AS', 'Ulo�it soubor jako:');
@define('STORE_IN_DIRECTORY', 'Ulo�it do n�sleduj�ho adres��e: ');
@define('IMAGE_MORE_INPUT', 'P�idat v�ce obr�zk�');
@define('ENTER_MEDIA_URL_METHOD', 'Zp�sob p�ipojen�:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Pozn�mka: Pokud zvol�te odkaz na server, ujist�te se, �e m�te pot�ebn� pr�va, nebo �e jde o v� web. Odkazy v�m umo�n� vyu��vat obr�zky z jin�ch ne� m�stn�ch zdroj�.');
@define('FETCH_METHOD_IMAGE', 'Nahr�n� na server');
@define('FETCH_METHOD_HOTLINK', 'Odkaz na server');
@define('GO_ADD_PROPERTIES', 'Zadej vlastnosti');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zm�nit rozm�r obr�zku');
@define('MEDIA_DELETE', 'Vymazat soubor');
@define('FILES_PER_PAGE', 'Soubor� na str�nku');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '��dn� obr�zky');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'v�echny adres��e');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigurace byla zaps�na a ulo�ena');
@define('DIAGNOSTIC_ERROR', 'Diagnostika detekovala n�jak� chyby ve vkl�dan�ch informac�ch:');
@define('FULL_COMMENT_TEXT', 'Ano, s pln�m zn�n�m koment��e');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Datab�ze');
@define('INSTALL_CAT_DB_DESC', 'Sem vlo�te v�ech informace o datab�zi. Serendipity je pot�ebuje k funkci.');
@define('INSTALL_DBTYPE', 'Typ');
@define('INSTALL_DBTYPE_DESC', 'Typ datab�ze');
@define('INSTALL_DBHOST', 'Hostitel');
@define('INSTALL_DBHOST_DESC', 'N�zev hostitelsk�ho serveru');
@define('INSTALL_DBUSER', 'U�ivatel');
@define('INSTALL_DBUSER_DESC', 'U�ivatelsk� jm�no');
@define('INSTALL_DBPASS', 'Heslo');
@define('INSTALL_DBPASS_DESC', 'U�ivatelsk� heslo');
@define('INSTALL_DBNAME', 'N�zev');
@define('INSTALL_DBNAME_DESC', 'N�zev datab�ze');
@define('INSTALL_DBPREFIX', 'Prefix');
@define('INSTALL_DBPREFIX_DESC', 'Prefix pro z�znamy v datab�zi, nap�. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Pou��t trval� p�ipojen�');
@define('INSTALL_DBPERSISTENT_DESC', 'Umo�nit trval� p�ipojen� k datab�zi, v�ce <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">zde</a>. B�n� to nen� doporu�eno');
@define('INSTAL_DB_UTF8', 'Povolit DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Vyvol� dotaz MySQL "SET NAMES", aby se zjistila po�adovan� znakov� sada pro datab�zi. Zapn�te to nebo vypn�te, pokud se v�m na blogu objevuj�  podivn� znaky.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cesty');
@define('INSTALL_CAT_PATHS_DESC', 'Cesty k r�zn�m adres���m a soubor�m. Nezapome�te na ukon�ovac� lom�tko pro adres��e!');
@define('INSTALL_FULLPATH', '�pln� cesta');
@define('INSTALL_FULLPATH_DESC', '�pln� absolutn� cesta k va�� instalaci Serendipity.');
@define('INSTALL_UPLOADPATH', 'Cesta pro uploady');
@define('INSTALL_UPLOADPATH_DESC', 'Sem budou sm�rov�ny uploady, relativn� k \'�pln� cest�\' - typicky \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativn� cesta');
@define('INSTALL_RELPATH_DESC', 'Cesta k Serendipity pro v� prohl�e�, typicky \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativn� cesta k template');
@define('INSTALL_RELTEMPLPATH_DESC', 'Cesta k adres��i, obsahuj�c�mu vzory (templates) - relativn� k \'relativn� cest�\'');
@define('INSTALL_RELUPLOADPATH', 'Relativn� cesta k upload�m');
@define('INSTALL_RELUPLOADPATH_DESC', 'Cesta k upload�m pro prohl�e�e - relativn� k \'relativn� cest�\'');
@define('INSTALL_URL', 'URL weblogu');
@define('INSTALL_URL_DESC', 'Z�kladn� URL va�� instalace Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetekce pou�it� HTTP hostitelsk� adresy');
@define('INSTALL_AUTODETECT_URL_DESC', 'P�i volb� "Ano" bude Serendipity p�edpokl�dat, �e HTTP adresa hostitele, pou�it� n�v�t�vn�kem, je va�e z�kladn� nastaven� URL. Zapnut� umo�n� pou��v�n� r�zn�ch dom�n k p��stupu na va�e str�nky, a pou�it� t�to jedn� dom�ny pro v�echny odkazy ke sledov�n� zm�n na str�nk�ch.');
@define('INSTALL_INDEXFILE', 'Indexov� soubor');
@define('INSTALL_INDEXFILE_DESC', 'N�zev souboru pou�it�ho jako index');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Trval� odkazy');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definuje r�zn� vzory  URL patterns pro definici trval�ch odkaz� (permanent links) ve va�em blogu. Doporu�ujeme pou��t defaultn� nastaven�; pokud ne, m�li byste zkusit pou��t hodnotu %id% tam, kde je to mo�n�, abyste p�ede�li dotaz�m do datab�ze p�i hled�n� c�lov� URL.');
@define('INSTALL_PERMALINK', 'Struktura URL trval�ch odkaz�');
@define('INSTALL_PERMALINK_DESC', 'Zde m��ete definovat relativn� strukturu URL, kde za��tek je va�e base URL, z n� mohou b�t  p��sp�vky dostupn�. M��ete pou��t prom�nn�  %id%, %title%, %day%, %month%, %year% a jak�koli jin� znaky.');
@define('INSTALL_PERMALINK_AUTHOR', 'Struktura URL autor�');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Zde m��ete definovat relativn� strukturu URL, kde za��tek je va�e base URL, z n� mohou b�t dostupn� p��sp�vky ur�it�ch autor�.  M��ete pou��t prom�nn� %id%, %realname%, %username%, %email% a jak�koli jin� znaky.');
@define('INSTALL_PERMALINK_CATEGORY', 'Struktura URL kategori�');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Zde m��ete definovat relativn� strukturu URL, kde za��tek je va�e base URL, z n� mohou b�t dostupn� ur�it� kategorie. M��ete pou��t prom�nn�  %id%, %name%, %parentname%, %description% a jak�koli jin� znaky.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Struktura URL trval�ch odkaz� kategori� RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Zde m��ete definovat relativn� strukturu URL, kde za��tek je va�e base URL, z n� mohou b�t dostupn�  RSS kan�ly z ur�it�ch kategori�. M��ete pou��t prom�nn� %id%, %name%, %description% a jak�koli jin� znaky.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Struktura URL adresy pro RSS kan�l autor�');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Zde m��ete definovat relativn� strukturu URL, kde za��tek je va�e base URL, z n� mohou b�t b�t dostupn� RSS kan�ly od ur�it�ch u�ivatel�. M��ete pou��t prom�nn�   %id%, %realname%, %username%, %email% a jak�koli jin� znaky.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Cesta k archiv�m');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Cesta k archivu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Cesta ke kategori�m');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Cesta k autor�m');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Cesta k odhl�en� koment���');
@define('INSTALL_PERMALINK_DELETEPATH', 'Cesta pro smaz�n� koment���');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Cesta ke schv�len� koment���');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Cesta k RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Cesta k jednotliv�mu pluginu');
@define('INSTALL_PERMALINK_ADMINPATH', 'Cesta k adminu');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Cesta k vyhled�v�n�');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Cesta ke koment���m');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Z�kladn� nastaven�');
@define('INSTALL_CAT_SETTINGS_DESC', '�prava spr�vy Serendipity');
@define('INSTALL_USERNAME', 'Jm�no admina');
@define('INSTALL_USERNAME_DESC', 'Jm�no pro p�ihl�en� admina');
@define('INSTALL_PASSWORD', 'Heslo admina');
@define('INSTALL_PASSWORD_DESC', 'Heslo pro p�ihl�en� admina');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Skute�n� jm�no');
@define('USERCONF_REALNAME_DESC', 'Pln� jm�no autora. Toto jm�no uvid� �ten��i');
@define('INSTALL_EMAIL', 'E-mail admina');
@define('INSTALL_EMAIL_DESC', 'E-mail pro p�ihl�en� admina');
@define('INSTALL_SENDMAIL', 'Pos�lat e-maily adminovi?');
@define('INSTALL_SENDMAIL_DESC', 'Chcete dost�vat e-mailem zpr�vy o koment���ch k va�im z�znam�m?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'N�zev');
@define('INSTALL_BLOGNAME_DESC', 'N�zev va�eho weblogu');
@define('INSTALL_BLOGDESC', 'Popis');
@define('INSTALL_BLOGDESC_DESC', 'Popis weblogu');
@define('INSTALL_BLOG_EMAIL', 'E-Mail pro blog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Toto nastav� E-Mailovou adresu, kter� je pou�ita v poli "From"- (od) pro odchoz� e-maily. Nastavte si tuto adresu tak, aby byla rozpozn�na mailov�m serverem pou��van�m va��m webhosterem - mnoho mailserver� odm�t� po�tu, kter� m� nezn�mou From-addresu (adr odesilatele).');
@define('COMMENT_TOKENS', 'Pou��t p��znaky pro schvalov�n� koment���?');
@define('COMMENT_TOKENS_DESC', 'Pokud jsou p��znaky pou��v�ny, koment��e mohou b�t schv�leny nebo odstran�ny kliknut�m na odkaz v oznamovac�m emailu, ani� by bylo t�eba p�ihl�sit se do blogu. M�jte na pam�ti, �e je to sice pohodln� vlastnost, ale pokud n�kdo z�sk� p��stup k Va�� mailov� schr�nce, m��e schvalovat/mazat koment��e ani� by musel zad�vat p�ihla�ovac� data.');
@define('INSTALL_LANG', 'Jazyk');
@define('INSTALL_LANG_DESC', 'Vyberte jazyk va�eho weblogu');
@define('INSTALL_CHARSET', 'Volba znakov� sady - Charset');
@define('INSTALL_CHARSET_DESC', 'Zde m��ete volit mezi UTF-8 nebo n�rodn� (ISO, EUC, ...) znakovou sadou. N�kter� jazyky maj� jen p�eklady UTF-8, tak�e nastaven� znakov� sady na n�rodn� nem� ��dn� ��inek. UTF-8 se doporu�uje pro nov� instalace. Nem��te toto nastaven�, jestli�e jste ji�  napsali p��sp�vky se speci�ln�mi (n�rodn�mi) znaky - mohlo by zp�sobit poru�en� textu. P�e�t�te si o tomto probl�mu v�ce na  https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Typ kalend��e');
@define('INSTALL_CAL_DESC', 'Vyberte form�t kalend��e');
@define('AUTOLANG', 'Pou��t jazyk prohl�e�e jako defaultn�');
@define('AUTOLANG_DESC', 'Zapnut�m t�to volby ur��te, �e jazyk prohl�e�e bude p�evzat jako z�kladn� pro u�ivatelsk� rozhran� a pro z�znamy.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Povolit Plugin ACL pro u�ivatelsk� skupiny?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Jestli�e je volba "Plugin ACL pro u�ivatelsk� skupiny" v konfiguraci povolena, m��ete ur�it, kter� skupiny u�ivatel� mohou prov�d�t ur�it� pluginy/ud�losti.');
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
@define('INSTALL_CAT_DISPLAY_DESC', '�prava vzhledu a chov�n� Serendipity');
@define('INSTALL_FETCHLIMIT', 'Z�znamy zobrazen� na hlavn� str�nce');
@define('INSTALL_FETCHLIMIT_DESC', 'Po�et z�znam�, zobrazen�ch na hlavn� str�nce');
@define('INSTALL_RSSFETCHLIMIT', '�l�nky, kter� se maj� zobrazit v RSS Feedu');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Po�et �l�nk�, kter� se m� zobrazit na ka�d� str�nce  v RSS Feedu.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'Jak maj� b�t �azeny v�sledky hled�n�?');
@define('SYNDICATION_RFC2616', 'Aktivovat strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'Kdy� neaktivujete  RFC2616, znamen� to, �e v�echny podm�n�n� GETy na Serendipity vr�t� p��sp�vky, kter� byly modifikov�ny od �asu posledn�ho po�adavku. Kdy� tohle nastav�te na  "false", va�i n�v�t�vn�ci dostanou v�echny �l�nky od sv�ho posledn�ho po�adavku, co� se pova�uje za dobrou v�c. Av�ak n�kte�� agenti jako  Planet funguj� divn�, kdy� tohle nastane a taky to poru�uje  RFC2616. Tak�e kdy� nastav�te tuto volbu na  "TRUE", budete vyhovovat RFC ale n�v�t�vn�k�m   mohou ve  �te�k�ch  b�hem pr�zdnin zmizet p��sp�vky. V ka�d�m p��pad�, bu� to vad� agreg�tor�m jako je  Planet, nebo to vad� n�v�t�vn�k�m blogu. Kdy� se vyskytnou st�nosti z kter�koli strany, m��ete tuhle volbu p�epnout.  Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Pou�ijte kompresi gzip');
@define('INSTALL_USEGZIP_DESC', 'Doporu�ujeme pou��t kompresi str�nek pro jejich urychlen� na��t�n�');
@define('INSTALL_XHTML11', 'Vnutit kompatibilitu s XHTML 1.1?');
@define('INSTALL_XHTML11_DESC', 'Chcete plnou kompatibilitu s XHTML 1.1? (m��e zp�sobit probl�my ve star��ch prohl�e��ch)');
@define('INSTALL_POPUP', 'Umo�nit pou�it� vyskakovac�ch oken');
@define('INSTALL_POPUP_DESC', 'Chcete ve weblogu pou��vat vyskakovac� okna pro koment��e, odezvy a pod.?');
@define('INSTALL_EMBED', 'Je Serendipity vlo�en�?');
@define('INSTALL_EMBED_DESC', 'Pokud chcete um�stit weblog do va�ich str�nek, zvolte ano pro odstran�n� v�ech z�hlav�, bude zobrazov�n jen obsah. M��ete pou��t voliteln� soubor indexFile pro obalen� obsahu vlastn�mi z�hlav�mi a sloupci. V�ce informac� najdete v souboru README!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Ud�lat extern� odkazy klikateln�?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Ne": Neozna�en� extern� odkazy (Top v�stupy, Top odb�ratel�, U�ivatelsk� koment��e) nebudou uk�z�ny/budou uk�z�ny jako b�n� text v�ude, kde je to mo�n�, pro omezen� spamu (doporu�eno). "Ano": Neozna�en� extern� odkazy budou uk�z�ny jako hyperlinky. Toto m��e b�t p�eps�no v konfiguraci plugin�!');
@define('INSTALL_TRACKREF', 'Povolit  referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Povolen� referrer tracking v�m uk�e, kter� weby odkazuj� na va�e �l�nky. Dnes je to �asto zneu��v�no pro spam, tak�e to m��ete zak�zat, chcete-li.');
@define('INSTALL_BLOCKREF', 'Blokovan� odb�ratel�');
@define('INSTALL_BLOCKREF_DESC', 'Chcete zamezit p��stup z ur�it�ch adres? Seznam adres odd�lujte \';\' a pozor, adresy jsou blokov�ny v�etn� subadres!');
@define('INSTALL_REWRITE', 'P�episov�n� URL');
@define('INSTALL_REWRITE_DESC', 'Ur�en� pravidel pro tvorbu URL. Zapnut� m�du p�episov�n� zajist� spr�vn� URL va�eho weblogu a lep�� indexaci pro vyhled�va�e, jako je Google. V� webserver mus� podporovat mod_rewrite nebo "AllowOverride All" v adres��i pro Serendipity. Defaultn� nastaven� je automaticky detekov�no.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Posun �asov� z�ny v��i serveru?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Posun �asu p��sp�vk� v��i �asu na serveru. Vyberte "ano" pro zad�n� relativn�ho �asov�ho posunu v��i hodin�m serveru. Nikoliv posun v��i GMT (Greenwich mean time).');
@define('INSTALL_OFFSET', '�asov� posun serveru');
@define('INSTALL_OFFSET_DESC', 'Vlo�te po�et hodin mezi �asem serveru (aktu�ln�: %clock%) a va�� �asovou z�nou');
@define('INSTALL_SHOWFUTURE', 'Zobrazit budouc� z�znamy');
@define('INSTALL_SHOWFUTURE_DESC', 'Tato volba umo�n� zobrazen� budouc�ch z�znam� blogu. Defaultn� jsou skryt� a budou zobrazeny a� v �ase jejich vyd�n�.');
@define('INSTALL_ACL', 'Aplikovat pr�va na �ten� pro kategorie');
@define('INSTALL_ACL_DESC', 'Pokud je povoleno, budou na kategorie aplikov�na nastaven� pr�v pro skupiny u�ivatel�, kdy� si p�ihl�en� u�ivatel� budou prohl�et v� blog. Nen�-li povoleno, pr�va na �ten� pro kategorie nejsou aplikov�na,  a  zlep�uje se rychlost blogu. Jestli�e nechcete m�t pr�va pro �ten� pro r�zn� u�ivatele,  toto nastaven� zaka�te.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Zobrazit cel� �l�nky v�etn� roz���en� ��sti v RSS kan�lu');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obr�zek kan�lu RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL obr�zku ve form�tu GIF/JPEG/PNG, je-li k dispozici. (pr�zdn�: logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '���ka');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'v pixelech, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'V��ka');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'v pixelech, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Zobrazovat e-mailov� adresy?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "hlavn� redaktor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailov� adresa hlavn�ho redaktora, je-li k dispozici. (pr�zdn�: skryt�) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailov� adresa webmastera, je-li k dispozici. (pr�zdn�: skryt�) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (�ivotnost)');
@define('SYNDICATION_PLUGIN_TTL_DESC', '�as v minut�ch, po kter�m by v� weblog nem�l b�t nad�le ke�ov�n v ciz�ch serverech/aplikac�ch (pr�zdn�: skryt�) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Pole "pubDate" je pro kan�l RSS ukryto, chcete uk�zat datum posledn�ho z�znamu?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', '�pravy obr�zk�');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Vlo�en� z�kladn�ch informac� o zp�sobu zpracov�n� obr�zk�');
@define('INSTALL_IMAGEMAGICK', 'Pou��vat Imagemagick?');
@define('INSTALL_IMAGEMAGICK_DESC', 'M�te instalov�n Imagemagick?');
@define('INSTALL_IMAGEMAGICKPATH', 'Cesta ke konverzn�mu souboru');
@define('INSTALL_IMAGEMAGICKPATH_DESC', '�pln� cesta a n�zev konverzn�ho souboru Imagemagick');
@define('INSTALL_THUMBSUFFIX', 'Sufix n�hled�');
@define('INSTALL_THUMBSUFFIX_DESC', 'N�hledy budou pojmenov�ny original.sufix.ext');
@define('INSTALL_THUMBWIDTH', 'Rozm�ry n�hled�');
@define('INSTALL_THUMBWIDTH_DESC', 'Pevn� ���ka automaticky generovan�ch n�hled�');
@define('INSTALL_THUMBDIM', 'Omezuj�c� rozm�r pro n�hledy');
@define('INSTALL_THUMBDIM_LARGEST', 'Del�� hrana');
@define('INSTALL_THUMBDIM_WIDTH', '���ka');
@define('INSTALL_THUMBDIM_HEIGHT', 'V��ka');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. velikost uploadvoan�ho souboru');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Zadejte maxim�ln� velikost pro uploadovan� (nahr�van�) soubory v bytech. Toto nastaven� m��e b�t  p�eps�no nastaven�m serveru v php.ini: upload_max_filesize, post_max_size, max_input_time maj� p�ednost p�ed touto volbou. Pr�zdn� �et�zec znamen�, �e se pou�ije limit serveru.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. ���ka obr�zk� pro upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Zadejte maxim�ln� ���ku pro uploadovan� obr�zky v pixelech.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. v��ka obr�zku pro upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Zadejte maxim�ln� v��ku v pixelech pro uploadovan� obr�zky.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Povolit synchronizaci medi� za b�hu (on the fly)');
@define('ONTHEFLYSYNCH_DESC', 'Pokud je to povoleno, Serendipity bude porovn�vat datab�zi medi� se soubory ulo�en�mi na serveru a bude synchronizovat obsah datab�ze a adres��e.');
@define('MEDIA_DYN_RESIZE', 'Povolit dynamickou zm�nu velikosti obr�zk�?');
@define('MEDIA_DYN_RESIZE_DESC', 'Je-li povoleno, m��e  media selector vracet obr�zky v jak�koli po�adovan� velikosti p�es prom�nnou  GET. V�sledky jsou ke�ov�ny, a tak se m��e vytvo�it velk� soubor, jestli�e to intenzivn� pou��v�te.');
@define('MEDIA_EXIF', 'Importovat EXIF/JPEG  data obr�zku');
@define('MEDIA_EXIF_DESC', 'Je-li povoleno, existuj�c� EXIF/JPEG metadata obr�zk� budou parsov�na a ulo�ena v datab�zi, aby je bylo mo�no zobrazit v galerii medi�.');
@define('MEDIA_PROP', 'Vlastnosti media');
@define('MEDIA_PROP_DESC', 'Zadejte seznam pol� vlastnost� odd�len�ch  ";" , kter� chcete definovat pro ka�d� souor v medi�ch');
@define('MEDIA_PROP_MULTIDESC', '(Za ka�dou polo�ku m��ete p�idat ":MULTI", co� bude indikovat, �e tato polo�ka bude obsahovat dlouh� text m�sto jen n�kolika znak�)');
@define('MEDIA_KEYWORDS', 'Media - kl��ov� slova');
@define('MEDIA_KEYWORDS_DESC', 'Zadejte seznam slov odd�len�ch  ";" kter� chcete pou��t jako p�eddefonovan� kl��ov� slova pro polo�ky v medi�ch.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Osobn� nastaven�');
@define('USERCONF_CAT_PERSONAL_DESC', 'Nastaven� va�eho ��tu');
@define('USERCONF_USERNAME', 'Jm�no');
@define('USERCONF_USERNAME_DESC', 'Va�e u�ivatelsk� jm�no (p�ezd�vka)');
@define('USERCONF_PASSWORD', 'Heslo');
@define('USERCONF_PASSWORD_DESC', 'Va�e heslo');
@define('USERCONF_CHECK_PASSWORD', 'Star� heslo');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Jestli�e zm�n�te  heslo v pol��ku v��e, mus�te do tohoto pole zadat sou�asn� heslo.');
@define('USERCONF_USERLEVEL', '�rove�');
@define('USERCONF_USERLEVEL_DESC', 'Tato �rove� ur�uje pr�va u�ivatele weblogu.');
@define('USERCONF_GROUPS', '�lenstv� ve skupin�ch');
@define('USERCONF_GROUPS_DESC', 'Tento u�ivatel je �len n�sleduj�c�ch skupin. �lenstv� ve v�ce skupin�ch je mo�n�.');
@define('USERCONF_EMAIL', 'E-mailov� adresa');
@define('USERCONF_EMAIL_DESC', 'V� e-mail');
@define('INSTALL_WYSIWYG', 'Pou��vat WYSIWYG editor?');
@define('INSTALL_WYSIWYG_DESC', 'Chcete pou��vat WYSIWYG editor? (Pracuje v IE5+, ��ste�n� v Mozille 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Pos�lat zpr�vy o koment���ch?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Chcete dost�vat zpr�vy o koment���ch e-mailem?');
@define('USERCONF_SENDTRACKBACKS', 'Pos�lat zpr�vy o odezv�ch?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Chcete dost�vat zpr�vy o odezv�ch na z�znamy e-mailem?');
@define('USERCONF_CREATE', 'Zneplatnit u�ivatele / zak�zat aktivitu?');
@define('USERCONF_CREATE_DESC', 'Pokud je volba vybr�na, u�ivatel nebude m�t ��dn� pr�va k vytv��en� nebo m�n�n� blogu. Kdy� se p�ihl�s� do administrativn� sekce, m��e si pouze prohl�dnout osobn� nastaven� nebo se odhl�sit.');
@define('USERCONF_ALLOWPUBLISH', 'Pr�vo publikovat z�znamy?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Umo�nit u�ivateli publikovat z�znamy');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Uk�zat li�tu n�stroj� v okn� v�b�ru medi�?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Z�kladn� nastaven� pro nov� z�znamy');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UPOZORN�N�: Atribut �rove� u�ivatele (userlevel) je nyn� pou��v�n jen kv�li zp�tn� kompatibilit� s pluginy a autorizaci. U�ivatelsk� pr�va jsou nyn� ��zena pomoc� �lensk�ch skupin!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nezadali jste spr�vn� star� heslo a nejste opr�vn�ni heslo zm�nit. Va�e nastaven� nebylo ulo�eno.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Jm�no u�ivatele nem��e b�t pr�zdn�.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'osobn�Konfigurace: P��stup k osobn� konfiguraci');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'osobn�Konfigurace�rove�U�ivatele: Zm�nit �rove� u�ivatele (level)');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'osobn�KonfiguraceNeNov�: Zm�nit "z�kaz nov�ch p��sp�vk�"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'osobn�KonfiguracePr�voPublikovat: Zm�nit pr�vo na publikov�n� p��sp�vk�');
@define('PERMISSION_SITECONFIGURATION', 'webKonfigurace: Konfigurace  p��stupu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogKonfigurace: Konfigurace p��stupu k  blogu');
@define('PERMISSION_ADMINENTRIES', 'adminP��sp�vky: Administrace p��sp�vk�');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'admin�dr�baP��sp�vk�Ostatn�ch: Administrace p��sp�vk� ostatn�ch u�ivatel�');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import p��sp�vk�');
@define('PERMISSION_ADMINCATEGORIES', 'adminKategorie: Administrace kategori�');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'admin�dr�baKategori�Ostatn�ch: Administrace kategori� ostatn�ch u�ivatel�');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminMaz�n�Kategori�: Smazat kategorie');
@define('PERMISSION_ADMINUSERS', 'adminU�ivatel�: Administrace u�ivatel�');
@define('PERMISSION_ADMINUSERSDELETE', 'adminMaz�n�U�ivatel�: Smazat u�ivatele');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminZm�na�rovn�U�ivatele: Zm�na �rovn� u�ivatele');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminU�ivatel�Stejn�Skupiny: Administrace u�ivatel� ve stejn� skupin�');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminU�ivatel�Jin�Skupiny: Administrace u�ivatel� v jin�ch skupin�ch');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminNov�U�ivatel�: Zakl�dat nov� u�ivatele');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminU�ivatelsk�Skupiny: Administrace skupin u�ivatel�');
@define('PERMISSION_ADMINPLUGINS', 'adminPluginy: Administrace plugin�');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'admin�dr�baPlugin�Ostatn�ch: Administrace plugin� ostatn�ch u�ivatel�');
@define('PERMISSION_ADMINIMAGES', 'adminObr�zky: Administrace soubor�  media');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminAdres��eObr�zk�: Administrace adres��� pro media');
@define('PERMISSION_ADMINIMAGESADD', 'adminP�idatObr�zek: P�id�v�n� nov�ch soubor� medi�');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminSmazatObr�zek: Maz�n� soubor� medi�');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'admin�dr�baObr�zk�Ostatn�: Administrace soubor� medi� ostatn�ch u�ivatel�');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminProhl�en�Obr�zk�: Prohl�en� soubor� medi�');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminSynchroObr�zk�: Sync thumbnail�');
@define('PERMISSION_ADMINCOMMENTS', 'adminKoment��e: Administrace koment���');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplate: Administrace �ablon (template)');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminProhl�en�Obr�zk�Ostatn�: Prohl�en� medi� ostatn�ch u�ivatel�');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zak�zan� pluginy');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zak�zan� ud�losti');
@define('PERMISSION_HIDDENGROUP', 'Skryt� skupina / Bez autora');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Z�znam ulo�en');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vl�knov�');
@define('COMMENTS_VIEWMODE_LINEAR', 'Line�rn�');
@define('DISPLAY_COMMENTS_AS', 'Zobrazit koment��e jako');
@define('COMMENTS_DISABLE', 'Neumo�nit p�id�v�n� koment���');
@define('COMMENTS_ENABLE', 'Umo�nit p�id�v�n� koment���');
@define('COMMENTS_CLOSED', 'Autor neumo�nil p�id�vat koment��e');
@define('VIEW_EXTENDED_ENTRY', 'Pokra�ovat ve �ten� "%s"');
@define('TRACKBACK_SPECIFIC', 'Odezva ze specifick�ho URI na tento z�znam');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Zobrazit v�e');
@define('VIEW_TOPICS', 'Zobrazit t�ma');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'T�ma');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Z�znamy nebyly vlo�eny �sp�n�!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamatovat informace? ');
@define('SUBMIT_COMMENT', 'Odeslat koment��');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'P�ihl�sit se ke sledov�n� koment��� k z�znamu');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'V� prohl�e� nezaslal platn�  HTTP-Referrer string. To mohlo b�t zp�sobeno bu� �patn� nastaven�m prohl�e�em/proxy nebo  Cross Site Request Forgery (XSRF), kter� je na v�s nam��en. Po�adovan� akce nemohla b�t dokon�ena.');
@define('NAVLINK_AMOUNT', 'Zadejte po�et odkaz� naviga�n� li�ty (ihned po zad�n� t�to volby klikn�te na "Ulo�it" a obnovte str�nku)');
@define('NAV_LINK_TEXT', 'Test odkazu');
@define('NAV_LINK_URL', 'URL adresa odkazu');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Koment�� #%s se jev� jako skute�n� odsouhlasen�');
@define('COMMENT_EDITED', 'Vybran� koment�� byl editov�n');
@define('COMMENTS_WILL_BE_MODERATED', 'Odeslan� koment��e budou p�ed uve�ejn�n�m moderov�ny.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Pozor: Tento koment�� mus� b�t p�ed uve�ejn�n�m odsouhlasen');
@define('DELETE_COMMENT', 'Vymazat koment��');
@define('APPROVE_COMMENT', 'Odsouhlasit koment��');
@define('REQUIRES_REVIEW', 'Vy��dat p�ezkoum�n�');
@define('COMMENT_APPROVED', 'Koment�� #%s byl odsouhlasen');
@define('COMMENT_DELETED', 'Koment�� #%s byl vymaz�n');
@define('COMMENTS_MODERATE', 'Koment��e a odezvy k tomuto z�znamu budou moderov�ny');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Pozor: Tato odezva mus� b�t p�ed uve�ejn�n�m odsouhlasena');
@define('DELETE_TRACKBACK', 'Vymazat odezvu');
@define('APPROVE_TRACKBACK', 'Odsouhlasit odezvu');
@define('TRACKBACK_APPROVED', 'Odezva #%s byla odsouhlasena');
@define('TRACKBACK_DELETED', 'Odezva #%s byla vymaz�na');
@define('COMMENT_NOTOKENMATCH', 'Schvalovac�mu odkazu vypr�ela platnost, nebo byl koment�� �.%s ji� schv�len �i odstran�n');
@define('TRACKBACK_NOTOKENMATCH', 'Schvalovac�mu odkazu vypr�ela platnost, nebo byla odezva �.%s ji� schv�lena �i odstran�na');
@define('BADTOKEN', 'Neplatn� odkaz pro schv�len�');
@define('TOP_LEVEL', 'Nejvy��� �rove�');
@define('VIEW_COMMENT', 'Uk�zat koment��');
@define('VIEW_ENTRY', 'Uk�zat z�znam');
@define('LINK_TO_ENTRY', 'Odkaz na z�znam');
@define('LINK_TO_REMOTE_ENTRY', 'Odkaz na extern� z�znam');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Pos�l�n� ozn�men� (pingback) na URI %s...');
@define('PINGBACK_SENT', 'Ozn�men� �sp�n�');
@define('PINGBACK_FAILED', 'Ozn�men� selhalo: %s');
@define('PINGBACK_NOT_FOUND', 'Oznamovac� URI adresa neexistuje.');
@define('TRACKBACK_SENDING', 'Odesl�n� odezvy na URI %s...');
@define('TRACKBACK_SENT', 'Odezva �sp�n�');
@define('TRACKBACK_FAILED', 'Odezva ne�sp�n�: %s');
@define('TRACKBACK_NOT_FOUND', 'URI odezvy neexistuje.');
@define('TRACKBACK_URI_MISMATCH', 'Automaticky z�skan� URI neodpov�d� va�emu c�lov�mu.');
@define('TRACKBACK_CHECKING', 'Testv�n� <u>%s</u> pro mo�n� odezvy...');
@define('TRACKBACK_NO_DATA', 'C�l neobsahuje data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Odezva nebyla odesl�na: nepoda�ilo se spojen� s %s na portu %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Ahoj %s,\n\nPo��dal jsi o zas�l�n� ozn�men� o nov�ch koment��� k �l�nku \"%s\" (<%s>). Pro potvrzen� t�to ��dosti (\"Double Opt In\") klikni pros�m na n�sleduj�c� odkaz:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Ahoj %s,\n\nPoslal jsi nov� koment�� na \"%s\". Koment�� zn�:\n\n%s\n\nVlastn�k blogu po�aduje emailov� potvrzen�, tak�e je t�eba kliknout na n�sleduj�c� odkaz a potvrdit tak koment��:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Ahoj %s,\n\nPoslal jsi nov� koment�� na \"%s\". Tv�j koment�� zn�:\n\n%s\n\nVlastn�k blogu vy�aduje prvotn� emailov� potvrzen�. Znamen� to, �e te� mus� sv�j koment�� potvrdit kliknut�m na n�sleduj�c� odkaz:\n<%s>\n\nZ�rove� t�m potvrd� v�echny dal�� koment��e, kter� po�le� se stejn�m jm�nem a emailovou adresou, v budoucnu u� ��dn� podobn� ozn�men� dost�vat nebude�.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nov� koment�� k p�ihl�en�mu z�znamu "%s"');
@define('SUBSCRIPTION_MAIL', "Pozor %s,\n\nA pr�v� byl p�id�n nov� koment�� k z�znamu, kter� sledujete na \"%s\", s n�zvem \"%s\"\nJm�no odes�latele: %s\n\nZ�znam najdete zde: %s\n\nM��ete se odhl�sit zde: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Pozor %s,\n\nA pr�v� byla p�id�na nov� odezva k z�znamu, kter� sledujete na \"%s\", s n�zvem \"%s\"\nJm�no odes�latele: %s\n\nZ�znam najdete zde: %s\n\nM��ete se odhl�sit zde: %s\n");
@define('SIGNATURE', "\n-- \n%s je vytvo�en pomoc� Serendipity.\n Tento perfektn� blogovac� syst�m m��ete zdarma pou��vat tak�.\nNav�tivte <https://s9y.org>, kde se dozv�te v�e pot�ebn�.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nov� koment�� k weblogu "%s", k z�znamu s n�zvem "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nov� odezva na weblog/z�znam s n�zvem "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'M�te k dispozici tyto volby:');
@define('NEW_TRACKBACK_TO', 'Nov� odezva na');
@define('NEW_COMMENT_TO', 'Nov� koment�� k');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nenalezen ��dn� z�znam odpov�daj�c� volb� %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Vyhled�v�n� %s odpov�d� %s v�sledk�:');
@define('SEARCH_TOO_SHORT', 'Vyhled�vac� dotaz mus� b�t del�� ne� 3 znaky. Ke krat��m slov�m m��ete zkusit p�idat *, jako: s9y*, abyste  vyhled�v�n� p�im�li pracovat s krat��mi slovy.');
@define('SEARCH_ERROR', 'Funkce vyhled�v�n� nepracovala podle o�ek�v�n�. Pozn�mka pro administr�tora blogu: Mohlo to b�t zp�sobeno nep��tomnost� p��slu�n�ch index� v datab�zi. U�ivatelsk� ��et v datab�zi MySQL mus� b�t opr�vn�n vykonat tento dotaz: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Specifick� chyba vr�cen� datab�z� byla: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'V� koment�� nic neobsahuje, %svra�te se%s a zkuste to znovu');
@define('COMMENT_NOT_ADDED', 'V� koment�� nemohl b�t p�id�n, proto�e koment��e k tomuto p��sp�vku byly zak�z�ny, zadali jste �patn� data nebo byl v� koment�� zachycen antispamem.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Koment��e od');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Va�e potvrzen� koment��e bylo �sp�n� p�ijato.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Va�e potvrzen� koment��e nemohlo b�t p�ijato. Zkontrolujte pros�m odkaz, na kter� jste kliknuli. Pokud je odkaz star�� ne� 3 t�dny, mus�te poslat koment�� znovu.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Va�e potvrzen� ��dosti o zas�l�n� ozn�men� o nov�ch koment���ch bylo �sp�n� p�ijato.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Syntax konfigurace je chybn� pro volbu "%s". Vy�aduje obsah typu "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Seznam kategori�.');
@define('CATEGORIES_PARENT_BASE', 'Zobrazit jen kategorie ni�e ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'M��ete vybrat rodi�ovskou kategorii, tak�e budou zobrazeny jen jej� ni��� kategori.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skr�t kategorie, kter� nejsou sou��st� stromu kategori�');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Jestli�e chcete skr�t kategorie, kter� jsou ��st� jin�ho stromu kategori�, mus�te tohle povolit. Tato mo�nost se nejl�pe  pou�ije ve spojen� s multi-blogem a pluginem  "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Skr�t zvolenou rodi�ovskou kategorii?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Jestli�e omez�te v�pis kategori� na specifickou kategorii,  standardn� bude  na v�stupu rodi�ovsk� kategorie zobrazena. Kdy� tuto mo�nost zak�ete, n�zev rodi�ovsk� kategorie nebude zobrazen.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Povolit Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Je-li tato mo�nost povolena, bude plugin pro v�pis kategori� vyu��vat mo�nost�  Smarty-Templating. Kdy� tohle povol�te, m��ete m�nit layout p�es �ablonu "plugin_categories.tpl". Povolen� t�hle volby m��e zhor�it v�kon, tak�e pokud nechcete d�lat �pravy pro jednotliv� kategorie, nechte to zak�zan�.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Zobrazit po�et p��sp�vk� na kategorii? ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Povolit n�v�t�vn�k�m zobrazit v�ce kategori� najednou?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Jestli�e je tato volba povolena, bude v tomto postrann�m pluginu hned vedle ka�d� kategorie za�krt�vac� ok�nko. U�ivatel� mohou tyto boxy za�krtnout a vid�t jen p��sp�vky pat��c� do tohoto v�b�ru.');
@define('CATEGORIES_TO_FETCH', 'Vyhledat kategorie');
@define('CATEGORIES_TO_FETCH_DESC', 'Vyhledat kategorie podle autor�?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zobrazit seznam autor�');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Zobrazit po�et �l�nk� u jm�na autora?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Je-li tato volba povolena, je vedle jm�na autora zobrazen v z�vorce po�et jeho p��sp�vk�.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Zobrazit pouze autory s v�ce ne� X p��sp�vky');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Spolupr�ce');
@define('SHOWS_RSS_BLAHBLAH', 'Sd�len� RSS linky');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'Kan�l %s');
@define('SYNDICATION_PLUGIN_091', 'Kan�l RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'Kan�l RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'Kan�l RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Koment��e RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'Kan�l ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Zobrazen� jm�no pro "kan�l"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Zadejte voliteln� jm�ho pro kan�l (pokud je pr�znd�, pak je standardn� pojmenov�n jako "kan�l")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Zobrazovan� jm�no pro kan�l s koment��i');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Zadejte (voliteln�) jak�koliv jm�no pro kan�l s koment��i');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID feedu, kter� chcete publikovat');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner image');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'N�zev obr�zku, kter� se m� zobrazit (nebo pr�zdn� pro po�itadlo), um�st�n� na  feedburner.com, nap�: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner title');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Title (je-li), kter� se m� zobrazit u obr�zku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner image text');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (je-li) kter� se m� zobrazit p�i najet� na obr�zek');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Schovat odkaz na archivy, pokud nejsou ve vybran�m obdob� vydan� ��dn� p��sp�vky (vy�aduje po��t�n� p��sp�vk�)');
@define('ARCHIVE_COUNT', 'Po�et prvk� v seznamu');
@define('ARCHIVE_COUNT_DESC', 'Celkov� po�et zobrazen�ch m�s�c�, t�dn� nebo dn�');
@define('ARCHIVE_FREQUENCY', 'Kalend��n� krok');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalend��n� krok mezi prvky seznamu');
@define('BROWSE_ARCHIVES', 'Prohl�en� m�s��n�ch archiv�');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zobrazit "Serendipity" jako text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vytvo�eno v "Serendipity" se zobraz� jako text');
@define('POWERED_BY_SHOW_IMAGE', 'Zobrazit "Serendipity" s logem');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Zobraz� se logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Reklama na tv�rce syst�mu va�eho weblogu');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Pou��t https pro p�ihl�en�');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Umo��uje pou��t spojen� https pro p�ihl�en�. V� server to mus� podporovat!');
@define('SUPERUSER', 'Superu�ivatel');
@define('SUPERUSER_OPEN_ADMIN', 'Administrace');
@define('SUPERUSER_OPEN_LOGIN', 'P�ihl�en�');
@define('ALLOWS_YOU_BLAHBLAH', 'Vlo�it odkaz do postrann�ho bloku administrace weblogu');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalend��');
@define('CALENDAR_BOW_DESC', 'Den, ur�en� jako za��tek t�dne. Default je pond�l�');
@define('QUICKJUMP_CALENDAR', 'Vyhled�vac� kalend��');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Za��tek t�dne');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Povolit Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Jestli�e je toto povoleno, mohou se pluginy napojovat na kalend�� a zv�raz�ovat sv� vlastn� ud�losti. Povolte jen kdy� m�te pluginy, kter� toto pot�ebuj�, jinak to jen sni�uje v�kon.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Hled�n� z�znamu');
@define('SEARCH_FULLENTRY', 'Zobrazit cel� p��sp�vek');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Vlo�en� HTML k�du do postrann�ho sloupce');
@define('THE_NUGGET', 'Vlo�en� HTML');
@define('BACKEND_TITLE', 'Dal�� informace v konfigura�n� obrazovce pluginu');
@define('BACKEND_TITLE_FOR_NUGGET', 'Zde m��ete definovat sv�j �et�zec, kter� bude zobrazen v konfigura�n� obrazovce pluginu spole�n� s popisem pluginu HTML Nugget. Kdy� m�te n�kolik HTML nugget� s pr�zdn�m tittle, toto v�m pom��e je rozli�it.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Zobrazit Top v�stupy/odb�ratele jako linky?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Ne": V�stupy a adresy odb�ratel� budou zobrazeny jako �ist� text pro zamezen� spamu, "Ano": nebo jako hyperlinky. "Default": Pou��t glob�ln� nastaven� (doporu�eno).');
@define('HAVE_TO_BE_LOGGED_ON', 'Pro zobrazen� t�to str�nky mus�te b�t p�ihl�en');
@define('WELCOME_TO_ADMIN', 'V�tejte v Administra�n� sekci Serendipity .');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Velk� obr�zek');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Pokud zad�te absolutn� URL adresu s http://..., bude tato adresa pou�ita jako c�l p�esm�rov�n� v p��pad�, �e jste zatrhli volbu "Vynutit" pro FeedBurner. M�jte na pam�ti, �e to m��e b�t URL adresa nez�visl� na FeedBurneru. Pro nov� kan�ly FeedBurneru Googlu budete muset zadat http://feeds2.feedburner.com/jmenoVasehoKanalu)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Pokud nastav�te tuto volbu na "Vynutit", m��ete p�esm�rovat RSS kan�l na jakoukoliv webovou slu�bu, nejen na FeedBurner. Pod�vejte se n�e na volbu "Feedburner ID" pro zad�n� absolutn� adresy.');
@define('MEDIA_PROPERTY_COMMENT1', 'Kr�tk� koment��');
@define('MEDIA_PROPERTY_COMMENT2', 'Dlouh� koment��');
@define('DELETE_SELECTED_ENTRIES', 'Vymazat vybran� p��sp�vky');
@define('MEDIA_PROPERTY_ALT', 'Popis (shrnut� pro atribut ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titulek');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity je�t� nen� nainstalov�n. <a href="%s">Instalujte</a> jej nyn�.');
@define('COMMENT_ADDED_CLICK', 'Klikn�te %ssem%s pro n�vrat ke koment���m nebo %ssem%s pro zav�en� okna.');
@define('COMMENT_NOT_ADDED_CLICK', 'Klikn�te %ssem%s pro n�vrat ke koment���m nebo %ssem%s pro zav�en� okna.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'D�lka');
@define('MEDIA_PROPERTY_DATE', 'Asociovan� datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL p�esunut�ho adres��e p�esunuto v   %s p��sp�vc�ch.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'V Ne-MySQL datab�zi nen� iterace po p��sp�vc�ch a nahrazen� star� adresy p�vodn�ho adres��e novou URL mo�n�. Budete muset p��sp�vky ru�n� editovat a ty adresy upravit. Ale po��d je�t� m��ete adres�� p�esunout zp�tky tam kde byl, jestli je to pro v�s moc otravn�.');
@define('TRACKBACK_SIZE', 'C�lov� URI p�ekro�ilo max. velikost souboru %s byt�.');
@define('CLICK_FILE_TO_INSERT', 'Klikn�te na soubor, kter� chcete vlo�it:');
@define('SELECT_FILE', 'Vyberte soubor pro vlo�en�:');
@define('MANAGE_IMAGES', 'Spr�va obr�zk�');
@define('WORD_NEW', 'Nov�');
@define('WORD_OR', 'nebo');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Viditeln� (Frontend): Extern� slu�by');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Viditeln� (Frontend): Dal�� mo�nosti');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Viditeln� (Frontend): �pln� mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Viditeln� (Frontend): Zobrazen�/filtry');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Viditeln� (Frontend): Pluginy pro p��sp�vky');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Provozn� (Backend): Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Provozn� (Backend): ��zen� u�ivatel�');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Provozn� (Backend): Meta informace');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Provozn� (Backend): Templates - �ablony vzhledu');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Provozn� (Backend): Dal�� mo�nosti');
@define('PLUGIN_GROUP_IMAGES', 'Obr�zky');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup - textov� zna�ky');
@define('PLUGIN_GROUP_STATISTICS', 'Statistiky');
@define('IMPORT_WELCOME', 'V�tejte v utilit� pro import dat');
@define('USER_SELF_INFO', 'P�ihl�en jako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Zde m��ete importovat z�znamy z jin�ch weblog�');
@define('IMPORT_SELECT', 'Vyberte software, ze kter�ho chcete importovat');
@define('MANAGE_STYLES', 'Zm�na stylu');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vyberte plugin, kter� chcete instalovat');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'N�e je seznam instalovan�ch plugin�');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Zru�it');
@define('DELETE_SELECTED_COMMENTS', 'Vymazat vybran� koment��e');
@define('MODERATE_SELECTED_COMMENTS', 'Schv�lit vybran� koment��e');
@define('FIND_MEDIA', 'Hledat m�dia');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Chyba: Jm�no souboru neexistuje!');
@define('ERROR_SOMETHING', 'Chyba: N�co je �patn�.');
@define('DIRECT_LINK', 'P��m� odkaz na tento z�znam');
@define('SELECT_TEMPLATE', 'Vyberte vzor pro v� web');
@define('DATABASE_ERROR', 'chyba serendipity: nelze se spojit s datab�z� - ukon�eno.');
@define('LIMIT_TO_NUMBER', 'Kolik z�znam� by m�lo b�t zobrazeno?');
@define('DIRECTORIES_AVAILABLE', 'Po kliknut� na n�kter� adres�� v seznamu m��ete vytvo�it dal�� podadres��.');
@define('CATEGORY_INDEX', 'N�e je seznam kategori�, kter� m��et pou��t k va�emu z�znamu');
@define('PAGE_BROWSE_PLUGINS', 'Strana %s z %s, celkem %s plugin�.');
@define('CHARSET_NATIVE', 'N�rodn�');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API Interface na Serendipity ji� nen� p�ibaleno  kv�li pokra�uj�c�m bezpe�nostn�m probl�m�m s t�mhle API a proto�e ho moc lid� nepou��v�. Proto mus�te nainstalovat plugin XML-RPC, kdy� chcete  XML-RPC API pou��vat. URL, kter� se pou�ije ve va�� aplikaci, se nezm�n� - hned po instalaci pluginu budete moci API pou��vat.');
@define('AUTHORS_ALLOW_SELECT', 'Povolit n�v�t�vn�k�m vybrat v�ce autor� najednou?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Jestli�e je tato volba povolena, bude u ka�d�ho autora um�st�no zatrh�vac� ok�nko. U�ivatel� mohou zvolit v�ce autor�  a vid�t p��sp�vky, kter� vyhovuj� jejich v�b�ru');
@define('PREFERENCE_USE_JS', 'Povolit pou�it� advanced JS?');
@define('PREFERENCE_USE_JS_DESC', 'Je-li toto povoleno, budou povoleny sekce s advanced JavaScript, aby se zlep�ila pou�itelnost. Nap� v sekci pro konfiguraci plugin� m��ete pro p�eskl�d�n� plugin� pou��t drag and drop (t�hnout my��).');
@define('PREFERENCE_USE_JS_WARNING', '(Tato str�nka pou��v� advanced JavaScripting. Jestli�e m�te probl�my s fungov�n�m, zaka�te pros�m pou��v�n�  advanced JS ve sv�m osobn�m nastaven� nebo zaka�te javascript v prohl�e�i.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', '�ek� na potvrzen�');
@define('NO_COMMENT_SUBSCRIPTION', 'Neodeb�r�no');
