<?php

/**
 *  @version 1.0
 *  Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
 *  All rights reserved.  See LICENSE file for licensing details
 *  Translation (c) 2010 Martin Matu¹ka <martin@matuska.org>
 */
$i18n_filename_from = array (
'á','è','ï','é','ì','í','å','µ','ò','ó','ô','à','ø','¶','¹','»','ú','ù','ý','¼','¾',
'Á','È','Ï','É','Ì','Í','Å','¥','Ò','Ó','Ô','À','Ø','¦','©','«','Ú','Ù','Ý','¬','®',
' ',',','.','!',
);
$i18n_filename_to = array (
'a','c','d','e','e','i','l','l','n','o','o','r','r','s','s','t','u','u','y','z','z',
'A','C','D','E','E','I','L','L','N','O','O','R','R','S','S','T','U','U','Y','Z','Z',
'-', '', '', '',
);
@define('LANG_CHARSET', 'ISO-8859-2');
@define('SQL_CHARSET', 'latin2');
@define('DATE_LOCALES', 'sk_SK.ISO-8859-2, sk_SK.ISO8859-2, slovak, sk');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'sk-iso');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', ' ');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'Náhµad');
@define('DATE', 'Dátum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Vzhµad');
@define('LOGIN', 'Prihlásenie');
@define('LOGOUT', 'Odhlásenie');
@define('LOGGEDOUT', 'Odhlásený.');
@define('CREATE', 'Vytvori»');
@define('BACK', 'Naspä»');
@define('FORWARD', 'Ïalej');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nové...');
@define('OLDER', 'Star¹ie...');
@define('DONE', 'Hotovo');
@define('TITLE', 'Titulok');
@define('DESCRIPTION', 'Popis');
@define('PLACEMENT', 'Umiestnenie');
@define('DELETE', 'Zmaza»');
@define('SAVE', 'Ulo¾i»');
@define('UP', 'HORE');
@define('DOWN', 'DOLE');
@define('PREVIOUS', 'Predchádzajúce');
@define('NEXT', 'Ïal¹ie');
@define('ENTRIES', 'èlánky');
@define('CATEGORIES', 'Kategórie');
@define('NAME', 'Meno');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Domovská webstránka');
@define('COMMENT', 'Komentár');
@define('VIEW', 'Ukáza»');
@define('HIDE', 'Skry»');
@define('WEEK', 'Tý¾den');
@define('WEEKS', 'Tý¾dne(-ov)');
@define('MONTHS', 'Mesiace(-ov)');
@define('DAYS', 'Dni');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Úspe¹ne dokonèené.');
@define('COMMENTS', 'Komentáre');
@define('ADD_COMMENT', 'Prida» komentár');
@define('NO_COMMENTS', '®iadne komentáre');
@define('POSTED_BY', 'Napísal(a)');
@define('ON', 'v');
@define('NO_CATEGORY', '®iadna kategória');
@define('CATEGORY', 'Kategória');
@define('EDIT', 'Upravi»');
@define('GO', 'Vykona»!');
@define('YES', 'Áno');
@define('NO', 'Nie');
@define('NOT_REALLY', 'Nie, nechcem...');
@define('DUMP_IT', 'Zmaza»!');
@define('IN', 'vo');
@define('AT', 'o');
@define('LEFT', 'vµavo');
@define('RIGHT', 'vpravo');
@define('CENTER', 'stred');
@define('ARCHIVES', 'Archívy');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Rýchle hµadanie');
@define('TRACKBACKS', 'Odozvy');
@define('TRACKBACK', 'Odozva');
@define('NO_TRACKBACKS', '®iadne odozvy');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Výpis');
@define('TRACKED', 'Sledované');
@define('USER', 'Pou¾ívateµ');
@define('USERNAME', 'Meno');
@define('PASSWORD', 'Heslo');
@define('HIDDEN', 'skryté');
@define('IMAGE', 'Obrázok');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verzia');
@define('INSTALL', 'In¹talova»');
@define('REPLY', 'Odpoveï');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Chyba');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Vynúti»');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administrácia');
@define('ADMIN_FRONTPAGE', 'Hlavná stránka');
@define('QUOTE', 'Citát');
@define('NONE', 'niè');
@define('GROUP', 'Skupina');
@define('AUTHORS', 'Autori');
@define('UPGRADE', 'Aktualizácia');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'V¹etci autori');
@define('PREVIOUS_PAGE', 'predo¹lá stránka');
@define('NEXT_PAGE', 'ïal¹ia stránka');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'V¹etky kategórie');
@define('LAST_UPDATED', 'Naposledy zmenené');
@define('IP_ADDRESS', 'IP adresa');
@define('CHARSET', 'Znaková sada');
@define('REFERER', 'Odkazujúca stránka');
@define('APPROVE', 'Schváli»');
@define('NOT_FOUND', 'Nenájdené');
@define('WRITABLE', 'Zapisovateµné');
@define('NOT_WRITABLE', 'Nezapisovateµé');
@define('WELCOME_BACK', 'Vitajte naspä»,');
@define('USE_DEFAULT', 'Prednastavené');
@define('SORT_BY', 'Zoradi» podµa');
@define('SORT_ORDER', 'Zoraïi» podµa');
@define('SORT_ORDER_ASC', 'Vzostupne');
@define('SORT_ORDER_DESC', 'Zostupne');
@define('FILTERS', 'Filtre');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Vybra» v¹etko');
@define('TOGGLE_OPTION', 'Vybra» voµbu');
@define('IN_REPLY_TO', 'Odpoveï na');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Adresár');
@define('BACK_TO_BLOG', 'Naspä» na weblog');
@define('HTML_NUGGET', 'Vlo¾ený HTML kód');
@define('TITLE_FOR_NUGGET', 'Názov HTML kódu');
@define('COMMENT_ADDED', 'Vá¹ komentár bol úspe¹ne pridaný.');
@define('ENTRIES_FOR', 'Èlánky pre %s');
@define('NO_ENTRIES_TO_PRINT', '®iadne èlánky na zobrazenie');
@define('COMMENT_DELETE_CONFIRM', 'Naozaj chcete zmaza» komentár #%d, vlo¾ený %s?');
@define('DELETE_SURE', 'Naozaj chcete trvale zmaza» #%s?');
@define('MEDIA_FULLSIZE', 'Plný rozmer');
@define('SIDEBAR_PLUGIN', 'doplnok boènej li¹ty');
@define('EVENT_PLUGIN', 'doplnok udalostí');
@define('PLUGIN_ITEM_DISPLAY', 'Kde by mala bý» táto polo¾ka zobrazená?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'V roz¹írenej èasti');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'V prehµade');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'V obidvoch èastiach');
@define('DIRECTORY_WRITE_ERROR', 'Do prieèinka %s sa nedá zapisova» - prosím skontrolujte oprávnenia');
@define('FILE_WRITE_ERROR', 'Nepodarilo sa zapísa» do súboru %s.');
@define('INCLUDE_ERROR', 'chyba serendipity: súbor "%s" sa nepodarilo vlo¾i» - ukonèené.');
@define('DO_MARKUP', 'Formátova» text (markup)');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formát dátumu');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formát dátumu èlánku, vytvára sa pomocou PHP funkcie strftime(). (Prednastavené: "%s")');
@define('APPLY_MARKUP_TO', 'Pou¾i» formátovanie textu na %s');
@define('XML_IMAGE_TO_DISPLAY', 'Symbol XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Odkazy na XML kanály budú zobrazené pod týmto symbolom. Nechajte prázdné pre pôvodné nastavenie, alebo zadajte \'none\' pre vypnutie.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Zmazanie súboru \'%s\'...');
@define('SETTINGS_SAVED_AT', 'Nové nastavenia boli ulo¾ené v %s');
@define('INVERT_SELECTIONS', 'Obráti» výber');

@define('PERSONAL_SETTINGS', 'Osobné nastavenia');
@define('DO_MARKUP_DESCRIPTION', 'Aplikova» transformácie na text (smajlíky, skratky *, /, _, ...). Vypnutie tohto nastavenia zabezpeèí ulo¾enie HTML kódov v texte.');
@define('BASE_DIRECTORY', 'Koreòový prieèinok');
@define('PERM_READ', 'Právo na èítanie');
@define('PERM_WRITE', 'Právo na zápis');
@define('PERM_DENIED', 'Prístup odmietnutý.');
@define('CURRENT_AUTHOR', 'Aktuálny autor');
@define('PLUGIN_ACTIVE', 'Aktívny');
@define('PLUGIN_INACTIVE', 'Neaktívny');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Ulo¾te tento odkaz do obµúbených zálo¾iek a pou¾ite zálo¾ku na akejkoµvek stránke, o ktorej chcete písa». Zálo¾ka Vás rýchle prepne do Vá¹ho Serendipity weblogu.');
@define('SET_TO_MODERATED', 'Schváli»');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'In¹talácia Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Vitajte v in¹talácii Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Najprv skontrolujeme Va¹e základné nastavenie a skúsime zisti» prípadné problémy');
@define('ERRORS_ARE_DISPLAYED_IN', 'Chyby budú zobrazené %s, odporúèania %s a úspe¹nos» %s');
@define('RED', 'èerveou');
@define('YELLOW', '¾ltou');
@define('GREEN', 'zelenou');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - predin¹talaèná správa');
@define('INTEGRITY', 'Kontrola integrity in¹talácie');
@define('PHP_INSTALLATION', 'In¹talácia PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operaèný systém');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'konfigurácia php.ini');
@define('RECOMMENDED', 'Odporúèané');
@define('ACTUAL', 'Aktuálne');
@define('PERMISSIONS', 'Oprávnenia');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Oprávnenia mô¾u by» nastavené pou¾itím shellového príkazu: `<em>%s</em>` v prieèinku, alebo nastavením pomocou FTP programu');
@define('PROBLEM_DIAGNOSTIC', 'Boli zistené problémy a v in¹talácii, pokraèova» mô¾ete a¾ po ich odstránení');
@define('SELECT_INSTALLATION_TYPE', 'Vyberte typ in¹talácie');
@define('RECHECK_INSTALLATION', 'Skontrolova» in¹taláciu');
@define('SIMPLE_INSTALLATION', 'Jednoduchá in¹talácia');
@define('EXPERT_INSTALLATION', 'Pokroèilá in¹talácia');
@define('COMPLETE_INSTALLATION', 'Kompletná in¹talácia');
@define('WONT_INSTALL_DB_AGAIN', 'nebude sa znova vytvára» databáza');
@define('THEY_DO', 'pozitívne');
@define('THEY_DONT', 'negatívne');
@define('CHECK_DATABASE_EXISTS', 'Kontrola, èi databáza a tabulky u¾ existujú');
@define('CREATE_DATABASE', 'Vytvorenie základnej databázy...');
@define('ATTEMPT_WRITE_FILE', 'Pokus o zápis do súboru %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Vytvorenie hlavného autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Nastavenie prednastavenej ¹ablóny (template)');
@define('INSTALLING_DEFAULT_PLUGINS', 'In¹talácia prednastavených doplnkov');
@define('SERENDIPITY_INSTALLED', 'Serendipity bolo úspe¹ne nain¹talované');
@define('VISIT_BLOG_HERE', 'Tu nav¹tívite svoj nový weblog');
@define('THANK_YOU_FOR_CHOOSING', 'Ïakujeme, ¾e ste si vybrali Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Pri in¹talácii bola zistená chyba');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Vytvorené pomocou');
@define('ADMIN_FOOTER_POWERED_BY', 'Vytvorené pomocou Serendipity %s a PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Autor');
@define('USERLEVEL_CHIEF_DESC', 'Redaktor');
@define('USERLEVEL_ADMIN_DESC', 'Administrátor');
@define('WWW_USER', 'Zmeòte "www" na pou¾ívateµa, pod ktorým be¾í webserver (napr. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Prieèinok %s neexistuje a nepodarilo sa ho vytvori». Prosím vytvorte prieèinok ruène.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; spusti» <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nepodarilo sa spusti» binárny súbor %s.');
@define('FILE_CREATE_YOURSELF', 'Prosím vytvorte súbor ruène alebo skontrolujte oprávnenia.');
@define('COPY_CODE_BELOW', '<br />* Skopírujte kód uvedený ní¾¹ie a umiestnite ho do súboru "%s" vo va¹om prieèinku "%s":<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Po dokonèení stlaète tlaèidlo obnovenia stránky vo va¹om prehliadaèi.');
@define('ERROR_TEMPLATE_FILE', 'Súbor so ¹ablónou sa nepodarilo otvori», prosím aktualizujte verziu Serendipity!');
@define('HTACCESS_ERROR', 'Na otestovanie konfigurácie Vá¹ho webservera potrebuje Serendipity práva na vytvorenie súbora ".htaccess". Tento súbor sa nepodarilo vytvori». Prosím upravte práva súboru následovne: <br />&nbsp;&nbsp;%s<br />a opätovne nahrajte túto stránku..');
@define('EMPTY_SETTING', 'Nezadali ste platnú hodnotu pre "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Vy¾adované iba ak chcete v budúcnosti vyu¾íva» plugin Spartacus pre s»ahovanie nových doplnkov.)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity zistil, ¾e máte nain¹talovanú verziu %s a zrejme sa pokú¹ate aktualizova» na verziu %s. Ak chcete pokraèova» v aktualizácii, <a href="%s">kliknite tu</a>.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Víta Vás správca aktualizácie Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Pomô¾em Vám s aktualizáciou Va¹ej in¹talácie Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Táto správa sa Vám zobrazila preto, lebo ste nain¹talovali Serendipity %s, ale Va¹a databáza e¹te nebola aktualizovaná na túto verziu.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Aktualizácia databázy (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Boli nájdené tieto .sql súbory, ktoré musia by» spustené pred pokraèovaním v práci so Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '©pecifické úlohy pre túto verziu');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '®iadne ¹pecifické úlohy');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Mô¾em vykona» horeuvedené úlohy?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nie, spustím ich ruène');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Áno, vykona»');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Aktualizácia nie je potrebná');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity bol aktualizovaný');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vynechali ste aktualizaèný proces Serendipity, prosím preverte, èi je Va¹a databáza správne nain¹talovaná a plánované úlohy boli spustené');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Va¹a in¹talácia Serendipity bola aktualizovaná na verziu %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Kliknutím %ssem%s sa vrátite do Vá¹ho weblogu');
@define('ADMIN_ENTRIES', 'Èlánky');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nepodarilo sa spoji» s databázou MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nepodarilo sa vybra» databázu: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nepodarilo sa naèíta» údaje pou¾ívateµa: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nepodarilo sa naèíta» údaje kategórie: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nepodarilo sa naèíta» údaje èlánku: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nepodarilo sa naèíta» údaje komentára: %s.');
@define('MYSQL_REQUIRED', 'Na tento úkon musí by» nain¹talované roz¹irenie MySQL.');
@define('CREATE_AUTHOR', 'Vytvori» autora \'%s\'.');
@define('CREATE_CATEGORY', 'Vytvori» kategóriu \'%s\'.');
@define('MT_DATA_FILE', 'Súbory Movable Type');
@define('INSTALL_DBPORT', 'Port databázy');
@define('INSTALL_DBPORT_DESC', 'Port pou¾itý pre spojenie s Vá¹ím databázovým serverom');
@define('IMPORT_PLEASE_ENTER', 'Prosím vlo¾te dáta uvedené ni¾¹ie');
@define('IMPORT_NOW', 'Naimportova»');
@define('IMPORT_STARTING', 'Spú¹»am import...');
@define('IMPORT_FAILED', 'Import neúspe¹ný');
@define('IMPORT_DONE', 'Import úspe¹ne dokonèený');
@define('IMPORT_WEBLOG_APP', 'Weblogová aplikácia');
@define('IMPORT_NOTES', 'Poznámka:');
@define('IMPORT_STATUS', 'Stav po importe');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import (roz¹írený WordPress RSS import), vy¾aduje PHP5 a mô¾e spotrebova» priveµa pamäti');
@define('RSS_IMPORT_BODYONLY', 'Ulo¾i» celý importovaný text do "hlavnej" èasti, nerozdeµova» do "roz¹írenej" èasti.');
@define('IMPORT_GENERIC_RSS', 'Základný RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Odosla» odozvy na odkazy obsiahnuté v èlánku');
@define('RSS_IMPORT_CATEGORY', 'Pou¾í» túto kategóriu pre nezaradené èlánky');
@define('IMPORT_WP_PAGES', 'Zobrazova» ako be¾né èlanky blogu i prílohy a statické stránky?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nebol nájdený.');
@define('CONVERT_HTMLENTITIES', 'Skúsi» automatickú konverziu HTML entít?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administrátorská oblas»');
@define('WRONG_USERNAME_OR_PASSWORD', 'Nespsrávne meno alebo heslo.');
@define('PLEASE_ENTER_CREDENTIALS', 'Zadajte prosím prihlasovacie údaje.');
@define('PLEASE_ENTER_2FA', 'Please enter the mailed login code.');
@define('AUTOMATIC_LOGIN', 'Zapamäta» login');
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
@define('MEDIA', 'Médiá (obrázky)');
@define('MEDIA_LIBRARY', 'Kni¾nica médií');
@define('ADD_MEDIA', 'Prida»');
@define('MANAGE_DIRECTORIES', 'Spravova» prieèinky');
@define('CONFIGURATION', 'Konfigurácia');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Ïal¹ie odkazy');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Domovská stránka Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Dokumentácia Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Oficiálny blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Fórum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Tento èlánok e¹te nie je zverejnený.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lokálna dokumentácia');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'História verzií');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Doplnky pre boèné li¹ty');
@define('EVENT_PLUGINS', 'Doplnky udalostí');
@define('CONFIGURE_PLUGINS', 'Spravova» doplnky');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Nesplnené po¾iadavky: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aktualizácia na verziu %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Tu kliknite pre nain¹talovanie %s');
@define('ALREADY_INSTALLED', 'Nain¹talované');
@define('PLUGIN_AVAILABLE_COUNT', 'Spolu %d pluginov');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Editovat èlánky');
@define('EDIT_ENTRY', 'Editova» èlánok');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Koncept');
@define('PUBLISH', 'Publikova»');
@define('CONTENT', 'Obsah');
@define('ENTRIES_PER_PAGE', 'èlánkov na stránku');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Prilepené èlánky');
@define('PAGE_BROWSE_ENTRIES', 'Stránka %s z %s, spolu %s èlánkov');
@define('FIND_ENTRIES', 'Hµada» záznamy');
@define('RIP_ENTRY', 'Zmazaný èlánok #%s');
@define('NEW_ENTRY', 'Nový èlánok');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Text èlánku');
@define('EXTENDED_BODY', 'Roz¹írená textová èas»');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Koncept tohto èlánku bol ulo¾ený');
@define('IFRAME_PREVIEW', 'Serendipity teraz vytvára náhµad Vá¹ho èlánku...');
@define('IFRAME_WARNING', 'Vá¹ prehliadaè nepodporuje iframe. Otvorte súbor serendipity_config.inc.php a nastavte premennú $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Upozornenie: Dátum pre èlánok je neplatný. Musí ma» formát RRRR-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Roz¹írené nastavenia');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tento odkaz nie je urèený na klikanie. Obsahuje spätné URI pre tento èlánok. Mô¾ete pou¾i» toto URI na odoslanie pingov a sledovanie odoziev z Vá¹ho vlastného weblogu. Odkaz skopírujete kliknutím pravého tlaèítka my¹i a vybraním "Kopírova» odkaz" v Internet Exploreri alebo "Kopírova» adresu odkazu" v Mozille alebo Firefoxe.');
@define('RESET_DATE', 'Resetova» dátum');
@define('RESET_DATE_DESC', 'Kliknite sem na vrátenie dátumu na dne¹ný');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Správa pou¾ívateµov');
@define('CREATE_NEW_USER', 'Vytvori» nového pou¾ívateµa');
@define('CREATE_NOT_AUTHORIZED', 'Nemô¾ete meni» pou¾ívateµov s rovnakou úrovòou prístupu, ako je Va¹a úroveò');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nemô¾ete vytvára» pou¾ívateµov s vy¹¹ou úrovòou prístupu, ako je Va¹a úroveò');
@define('CREATED_USER', 'Nový pou¾ívateµ %s bol vytvorený');
@define('MODIFIED_USER', 'Nastavenia pou¾ívateµa %s boli zmenené');
@define('USER_LEVEL', 'Úroveò prístupu');
@define('WARNING_NO_GROUPS_SELECTED', 'Varovanie: Nevybrali ste èlenstvo v ¾iadnej skupine. To by Vás odhlásilo zo správy u¾ívateµských skupín a Va¹e nastavenie èlenstva v skupinách by zostalo nezmenené.');
@define('DELETE_USER', 'Chcete zmaza» pou¾ívateµa #%d %s. Úlohu naozaj vykona»? Táto zmena znemo¾ní prehliadanie ním vytvorených èlánkov na hlavnej stránke.');
@define('DELETED_USER', 'Pou¾ívateµ #%d %s bol zmazaný.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Správa skupín');
@define('DELETED_GROUP', 'Skupina #%d %s zmazaná.');
@define('CREATED_GROUP', 'Nová skupina %s bola vytvorená');
@define('MODIFIED_GROUP', 'Nastavenia skupiny %s boli zmenené');
@define('CREATE_NEW_GROUP', 'Vytvori» novú skupinu');
@define('DELETE_GROUP', 'Chystáte sa zmaza» skupinu #%d %s. Naozaj zmaza»?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hµada» komentáre');
@define('COMMENTS_FILTER_SHOW', 'Zobrazi»');
@define('COMMENTS_FILTER_ALL', 'V¹etko');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Iba schválené');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Èakajúce na súhlas');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Èaká sa na potvrdenie u¾ívateµom');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Naozaj chcete zmazaza» vybrané komentáre??');
@define('PAGE_BROWSE_COMMENTS', 'Stránka %s zo %s, spolu %s komentárov');
@define('COMMENT_IS_DELETED', '(Komentár odstránený)');
@define('COMMENT_MODERATED', 'Komentár è.%s bol úspe¹ne schválený');
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
@define('CATEGORY_SAVED', 'Kategória ulo¾ená');
@define('CATEGORY_ALREADY_EXIST', 'Kategória s názvom "%s" u¾ existuje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategória #%s bola zmazaná. Star¹ie èlánky boli presunuté do #%s');
@define('CATEGORY_DELETED', 'Kategória #%s bbola zmazaná.');
@define('INVALID_CATEGORY', 'Na vymazanie nebola vybraná ¾iadna kategória');
@define('EDIT_THIS_CAT', 'Editácia "%s"');
@define('CATEGORY_REMAINING', 'Vymaza» túto kategóriu a presunú» èlánky do kategórie');
@define('PARENT_CATEGORY', 'Nadradená kategória');
@define('CATEGORY_HIDE_SUB', 'Skry» èlánky z podkategórií?');
@define('CATEGORY_HIDE_SUB_DESC', 'Ak je zobrazená kategória, be¾ne sa zobrazujú aj v¹etky èlánky z jej podkategórií. Ak je táto voµba zapnutá, budú sa zobrazova» iba príspevky z vybranej kategórie.');
@define('CREATE_NEW_CAT', 'Vytvori» novú kategóriu');
@define('ALREADY_SUBCATEGORY', '%s u¾ je podkategóriou %s.');
@define('NO_CATEGORIES', '®iadne kategórie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Nie je mo¾né porovna» kontrolné súèty! (v základnom prieèinku chýba súbor checksums.ini.php)');
@define('CHECKSUMS_PASS', 'V¹etky súbory skontrolované.');
@define('CHECKSUM_FAILED', 'Kontrola zlyhala: %s je po¹kodený nebo zmenený');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import dát');
@define('EXPORT_ENTRIES', 'Export èlánkov');
@define('EXPORT_FEED', 'Exportova» plný RSS kanál');
@define('CREATE_THUMBS', 'Vytvori» náhµady');
@define('WARNING_THIS_BLAHBLAH', "POZOR:\\nTento úkon mô¾e trva» dlh¹ie, ak máte veµa obrázkov bez náhµadov.");
@define('SYNC_OPTION_LEGEND', 'Nastavenia synchronizácie náhµadov obrázov');
@define('SYNC_OPTION_KEEPTHUMBS', 'Zachova» v¹etky existujúce náhµady');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Zachova» existujúce náhµady iba ak majú správnu veµkos»');
@define('SYNC_OPTION_DELETETHUMBS', 'Znovu vytvori» v¹etky náhµady');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' bolo nastavené ako prednastavená ¹ablóna (template)');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varovánie: Vá¹a ¹ablóna pou¾íva nepovolenú metódu, ak je to mo¾né, vykonajte aktualizáciu');
@define('STYLE_OPTIONS_NONE', 'Táto téma/¹týl nemá ¹pecifické voµby. Ak chcete vedie», ako mô¾ete pre Va¹e ¹ablóny nastavi» ¹pecifické voµby, preèítajte si Technical Documentation (technickú dokumentáciu) na www.s9y.org "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Nastavenia pre tému/¹týl');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Upravené prostredie pre administráciu je dostupné');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Nastavi» ako ¹ablónu');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Skontrolova» a ulo¾i»');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Odstráni» oznaèené doplnky');
@define('SAVE_CHANGES_TO_LAYOUT', 'Ulo¾i» zmeny vzhµadu');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizácia databázy s prieèinkom obrázkov');
@define('SYNC_DONE', 'Hotové (synchronizovaných %s obrázkov).');
@define('RESIZE_BLAHBLAH', '<b>Zmeni» rozmery %s</b>');
@define('ORIGINAL_SIZE', 'Pôvodné rozmery: <i>%sx%s</i> pixelov');
@define('RESIZING', 'Zmena rozmerov');
@define('RESIZE_DONE', 'Hotové (upravené rozmery %s obrázkov).');
@define('KEEP_PROPORTIONS', 'Zachova» pomer strán');
@define('REALLY_SCALE_IMAGE', 'Naozaj chcete zmeni» rozmery? Návrat nie je mo¾ný!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Tu mô¾ete zada» nové rozmery obrázku. Ak chcete zachova» pomer strán, zadajte iba jednu stranu a stlaète klávesu TAB, rozmer druhej strany bude vypoèítaný automaticky:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nový rozmer: ');
@define('SCALING_IMAGE', 'Zmena rozmerov %s na %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Prieèinky a súbory boli úspe¹ne presunuté do %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Prieèinky a súbory sa nepodarilo presunú» do %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Prieèinok <strong>%s</strong> bol vytvorený.');
@define('PARENT_DIRECTORY', 'Nadradený prieèinok');
@define('CONFIRM_DELETE_DIRECTORY', 'Naozaj chcete odstráni» v¹etok obsah prieèinka <strong>%s</strong>?');
@define('ERROR_NO_DIRECTORY', 'Chyba: prieèinok <strong>%s</strong> neexistuje.');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Prieèinok sa nepodarilo zmaza», lebo obsahuje súbory. Skúste vybra» "zmaza» v¹etky súbory", ak chcete zmaza» prieèinok aj s jeho obsahom. Existujúce súbory:');
@define('DIRECTORY_DELETE_FAILED', 'Nepodarilo sa vymaza» prieèinok \'%s\'. Prosím skontrolujte oprávnenia alebo vy¹¹ie uvedené upozornenia.');
@define('DIRECTORY_DELETE_SUCCESS', 'Prieèinok \'%s\' bol úspe¹ne zmazaný.');
@define('CHECKING_DIRECTORY', 'Kontrola súborov v prieèinku \'%s\'');
@define('DELETE_DIRECTORY', 'Zmaza» prieèinok');
@define('DELETE_DIRECTORY_DESC', 'Chcete zmaza» obsah prieèinka obsahujúceho mediálne súbory, ktoré mô¾u by» pou¾ité vo Va¹ich existujúcich èlánkoch.');
@define('FORCE_DELETE', 'Zmaza» V©ETKY súbory v prieèinku vrátane súborov, ktoré neboli vytvorené pomocou Serendipity');
@define('CREATE_DIRECTORY', 'Vytvori» prieèinok');
@define('CREATE_NEW_DIRECTORY', 'Vytvori» nový prieèinok');
@define('CREATE_DIRECTORY_DESC', 'Tu mô¾ete vytvori» prieèinok pre ukladanie mediálných súborov. Vyberte názov prieèinka název a prípadný nadradený prieèinok.');
@define('ABOUT_TO_DELETE_FILE', 'Chcete zmaza» <b>%s</b><br />Ak pou¾ívate tento súbor v èlánkoch, spôsobí to neprítomnos» odkazov alebo obrázkov.<br />Napriek tomu pokraèova»?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Chyba: Súbor u¾ na serveri existuje!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nepodarilo sa nájs» súbor s názvom <b>%s</b>, mo¾no u¾ bol vymazaný?');
@define('ERROR_FILE_FORBIDDEN', 'Nemáte oprávnenie nahráva» súbory s aktívnym obsahom');
@define('REMOTE_FILE_NOT_FOUND', 'Súbor nebol na vzdialenom serveri nájdený, je URL: <b>%s</b> naozaj správné?');
@define('FILE_FETCHED', '%s ulo¾ené ako %s');
@define('FILE_UPLOADED', 'Súbor %s bol úspe¹ne nahraný ako %s.');
@define('DELETE_FILE_FAIL', 'Súbor <b>%s</b> sa nepodarilo zmaza»');
@define('DELETE_FILE', 'Vymaza» súbor s názvom <b>%s</b>');
@define('FOUND_FILE', 'Na¹iel sa nový/zmenený súbor: \'%s\'.');
@define('FILENAME_REASSIGNED', 'Automaticky priradené nové meno súboru: %s');
@define('ERROR_FILE_EXISTS', 'Chyba: Nový názov súboru u¾ je pou¾itý, zvoµte iný názov!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'prepojené');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Prosím zadajte nový názov pre: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Prida» obrázok...');
@define('THUMB_CREATED_DONE', 'Náhµad vytvorený.<br>Hotové.');
@define('THUMBNAIL_USING_OWN', '%s je pou¾itý ako náhµad, lebo je priveµmi malý.');
@define('THUMBNAIL_FAILED_COPY', '%s sa nepodarilo pou¾í» ako vlastný náhµad, lebo sa nedá skopí»ova»!');
@define('DELETE_THUMBNAIL', 'Zmazaný náhµad obrázku s názvom <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Neznáma chyba, súbor sa nenahral. Mo¾ným dôvodom je, ¾e veµkos» súboru prekraèuje maximálnu veµkos» povolenú serverom. Spojte sa s va¹ím providerom alebo upravte súbor php.ini a povolte väè¹iu veµkos».');
@define('MEDIA_UPLOAD_SIZEERROR', 'Chyba: Nemô¾ete uploadova» súbory väè¹ie ako %s bytov!');
@define('MEDIA_UPLOAD_DIMERROR', 'Chyba: Nemô¾ete uploadova» súbory obrázkov väè¹ie ako %s x %s pixelov!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Súbor prepojený odkazom.<br />Dokonèené.');
@define('DELETE_HOTLINK_FILE', 'Zmazaný odkazovaný súbor <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nepodarilo sa spusti»: "%s", chyba: %s, vracia premennú: %d');
@define('SKIPPING_FILE_EXTENSION', 'Súbor vynechaný: chýbajúca prípona \'%s\'.');
@define('SKIPPING_FILE_UNREADABLE', 'Súbor vynechaný: nepodarilo sa naèíta» \'%s\'.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Nastavi» rovnaké práva pre v¹etky podprieèinky');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Chcem ma» v èlánku náhµad.');
@define('I_WANT_BIG_IMAGE', 'Chcem ma» v èlánku veµký obrázok.');
@define('I_WANT_NO_LINK', 'Obrázok nemá by» odkazom.');
@define('I_WANT_IT_TO_LINK', 'Obrázok má odkazova» na URL:');
@define('MEDIA_ALT', 'Atribút ALT (popis alebo krátky popis)');
@define('MEDIA_TITLE', 'Atribút TITLE (zobrazuje sa pri prejdení kurzorom na obrázok)');
@define('IMAGE_SIZE', 'Rozmery obrázku');
@define('IMAGE_ALIGNMENT', 'Úprava obrázku');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Vlo¾enie obrázka');
@define('MEDIA_TARGET', 'Cieµ tohto odkazu');
@define('MEDIA_TARGET_JS', 'Popup okno (pomocou JavaScriptu, prispôsobiteµná veµkos»)');
@define('MEDIA_ENTRY', 'Samostatný èlánok');
@define('MEDIA_TARGET_BLANK', 'Popup okno (pomocou target=_blank)');
@define('YOU_CHOSE', 'Vybrali ste %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Otoèi» o 90 stupòov vµavo');
@define('IMAGE_ROTATE_RIGHT', 'Otoèi» o 90 stupòov vpravo');
@define('MEDIA_RENAME', 'Premenova» súbor');
@define('THUMBNAIL_SHORT', 'Náhµ.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Názov súboru');
@define('SORT_ORDER_EXTENSION', 'Prípona súboru');
@define('SORT_ORDER_SIZE', 'Veµkos»');
@define('SORT_ORDER_WIDTH', '©írka obrázku');
@define('SORT_ORDER_HEIGHT', 'Vý¹ka obrázku');
@define('SORT_ORDER_DATE', 'Dátum nahrania');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Prida» súbor do schránky médií:</b><p>Tu mô¾ete uklada» mediálne súbory, alebo urèi», kde ich stiahnu» z WEBu! Ak nemáte odpovedajúci obrázok, <a href="https://images.google.com/" target="_blank">hµadajte obrázok na Google</a>, toto hµadanie je dos» èasto úspe¹né a zábavné :). Ale pozor, väè¹ina obrázkov je chránených autorskými právami, tak¾e potrebujete na ich pou¾itie súhlas autora.<p><b>Vyberte metódu:</b><br>');
@define('ENTER_MEDIA_URL', 'Vlo¾te URL súboru na pridanie:');
@define('ENTER_MEDIA_UPLOAD', 'Vyberte súbor pre nahranie:');
@define('SAVE_FILE_AS', 'Ulo¾i» súbor ako:');
@define('STORE_IN_DIRECTORY', 'Ulo¾i» do tohto prieèinka: ');
@define('IMAGE_MORE_INPUT', 'Prida» viac obrázkov');
@define('ENTER_MEDIA_URL_METHOD', 'Spôsob prepojenia:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Poznámka: Ak zvolíte odkaz na server, uistite sa, ¾e máte potrebné práva, alebo ¾e ide o Vá¹ web. Odkazy Vám umo¾nia vyu¾íva» obrázky z iných ako miestnych zdrojov.');
@define('FETCH_METHOD_IMAGE', 'Nahranie na server');
@define('FETCH_METHOD_HOTLINK', 'Odkaz na server');
@define('GO_ADD_PROPERTIES', 'Zada» vlastnosti');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zmeni» rozmer obrázka');
@define('MEDIA_DELETE', 'Vymaza» súbor');
@define('FILES_PER_PAGE', 'Súborov na stránku');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '®iadne obrázky');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'v¹etky prieèinky');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigurácia bola zapísaná a ulo¾ená');
@define('DIAGNOSTIC_ERROR', 'Diagnostika na¹la chyby vo vkladaných údajoch:');
@define('FULL_COMMENT_TEXT', 'Áno, s plným znením komentára');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Nastavenia databázy');
@define('INSTALL_CAT_DB_DESC', 'Tu zadajte v¹etky nastavenia databázy. Serendipity vy¾aduje tieto nastavenia.');
@define('INSTALL_DBTYPE', 'Typ databázy');
@define('INSTALL_DBTYPE_DESC', 'Typ databázy');
@define('INSTALL_DBHOST', 'Server');
@define('INSTALL_DBHOST_DESC', 'Název alebo IP adresa databázového serveru');
@define('INSTALL_DBUSER', 'Pou¾ívateµ');
@define('INSTALL_DBUSER_DESC', 'Meno pou¾ívateµa na pripojenie do databázy');
@define('INSTALL_DBPASS', 'Heslo');
@define('INSTALL_DBPASS_DESC', 'Heslo pou¾ívateµa na pripojenie do databáyz');
@define('INSTALL_DBNAME', 'Názov');
@define('INSTALL_DBNAME_DESC', 'Názov databázy');
@define('INSTALL_DBPREFIX', 'Predpona');
@define('INSTALL_DBPREFIX_DESC', 'Predpona pre názvy tabuliek, napr. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Pou¾i» trvalé pripojenie');
@define('INSTALL_DBPERSISTENT_DESC', 'Zapnú» trvalé pripojenie do databázy, viac informácií nájdete <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">tu</a>. Nastavenie neodporúèame.');
@define('INSTAL_DB_UTF8', 'Zapnú» konverziu databázovej znakovej sady');
@define('INSTAL_DB_UTF8_DESC', 'Spustí dotaz MySQL "SET NAMES", aby sa zistila po¾adovaná znaková sada pre databázu. Zapnite alebo vypnite, ak sa Vám na blogu objevujú divné znaky.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cesty');
@define('INSTALL_CAT_PATHS_DESC', 'Cesty k rôznym prieèinkom a súborom. Prieèinky prosím nezabudnú» ukonèi» lomítkom!');
@define('INSTALL_FULLPATH', 'Úplná cesta');
@define('INSTALL_FULLPATH_DESC', 'Úplná absolútna cesta k Va¹ej in¹talácii Serendipity.');
@define('INSTALL_UPLOADPATH', 'Cesta pre upload');
@define('INSTALL_UPLOADPATH_DESC', 'V¹etky uploady budú nahrané sem, hodnota je relatívna k \'úplnej ceste\' - ¹tandardne \'uploads/\'');
@define('INSTALL_RELPATH', 'Relatívna cesta');
@define('INSTALL_RELPATH_DESC', 'Cesta k Serendipity pre prehliadaèe, ¹tandardne \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relatívna cesta k ¹ablónam');
@define('INSTALL_RELTEMPLPATH_DESC', 'Cesta k prieèinku, ktorý obsahuje ¹ablóny (templates) - relatívne k \'relatívnej ceste\'');
@define('INSTALL_RELUPLOADPATH', 'Relatívna cesta k uploadom');
@define('INSTALL_RELUPLOADPATH_DESC', 'Cesta k uploadom pre prehliadaèe - relatívne k \'relatívnej ceste\'');
@define('INSTALL_URL', 'URL weblogu');
@define('INSTALL_URL_DESC', 'Základná URL Va¹ej in¹talácie Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetekcia pou¾itej HTTP adresy na serveri');
@define('INSTALL_AUTODETECT_URL_DESC', 'Pri voµbe "Áno" bude Serendipity predpoklada», ¾e HTTP adresa pou¾itá náv¹tevníkom, je Va¹é základné nastavenie URL. Zapnutie umo¾ní pou¾íváníe rôznych domén k prístupu na Va¹e stránky, a pou¾itie téjto jednej domény pre v¹etky odkazy na sledovánie zmien na stránkách.');
@define('INSTALL_AUTODETECT_VALID_HOSTS', 'Valid autodetected HTTP-Hosts');
@define('INSTALL_AUTODETECT_VALID_HOSTS_DESC', 'Set this to a comma separated list of allowed HTTP Hosts. Only those will be used for the autodetected base URL. This is a security measure for server setups that accept arbitrary HTTP host headers.');
@define('INSTALL_INDEXFILE', 'Indexový súbor');
@define('INSTALL_INDEXFILE_DESC', 'Názov súboru pou¾itého ako index');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Trvalé odkazy');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definuje rôzne vzory URL patterns pre definíciu trvalých odkazov (permanent links) Vo va¹om weblogu. Doporuèujeme pou¾i» prednastavenú hodnotu; inak skúste pou¾i» hodnotu %id% tam, kde je to mo¾né, aby ste predi¹li dotazom do databázy pri hµadaní cieµovej URL.');
@define('INSTALL_PERMALINK', '©truktúra URL trvalých odkazov');
@define('INSTALL_PERMALINK_DESC', 'Tu mô¾ete definova» relatívnu ¹truktúru URL, kde zaèiatok je Va¹e základné URL, z ktorého mô¾u by» Va¹e èlánky dostupné. Mô¾ete pou¾i» premenné %id%, %title%, %day%, %month%, %year% a akékoµvek iné znaky.');
@define('INSTALL_PERMALINK_AUTHOR', '©truktúra URL autorov');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Tu mô¾ete definova» relatívnu ¹truktúru URL, kde zaèiatok je Va¹e základné URL, z ktorého mô¾u by» dostupné èlánky urèitých autorov. Mô¾ete pou¾í» premenné %id%, %realname%, %username%, %email% a akékoµvek iné znaky.');
@define('INSTALL_PERMALINK_CATEGORY', '©truktúra URL kategórií');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Tu mô¾ete definova» relatívnu ¹truktúru URL, kde zaèiatok je Va¹e základné URL, z ktorého mô¾u by» dostupné urèité kategórie. Mô¾ete pou¾í» premenné %id%, %name%, %parentname%, %description% a akékoµvek iné znaky.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', '¦truktúra URL trvalých odkazov kategórií RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Tu mô¾ete definova» relatívnu ¹truktúru URL, kde zaèiatok je Va¹e základné URL, z ktorého mô¾u by» dostupné RSS kanály z urèitých kategórií. Mô¾ete pou¾í» premenné %id%, %name%, %description% a akékoµvek iné znaky.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', '©truktúra URL adresy pre RSS kanál autorov');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Tu mô¾ete definova» relatívnu ¹truktúru URL, kde zaèiatok je Va¹e základné URL, z ktorého mô¾u by» dostupné RSS kanály od urèitých pou¾ivateµov. Mô¾ete pou¾ít premenné %id%, %realname%, %username%, %email% a ákékoµvek iné znaky.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Cesta k archívom');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Cesta k archívu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Cesta ku kategóriám');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Cesta k autorom');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Cesta k odhláseniu komentárov');
@define('INSTALL_PERMALINK_DELETEPATH', 'Cesta pre zmazanie komentárov');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Cesta k schváleniu komentárov');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Cesta k RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Cesta k jednotlivému doplnku');
@define('INSTALL_PERMALINK_ADMINPATH', 'Cesta do administrácie');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Cesta k vyhµadávaniu');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Cesta ku komentárom');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Základné nastavenia');
@define('INSTALL_CAT_SETTINGS_DESC', 'Nastavenie správania Serendipity');
@define('INSTALL_USERNAME', 'Meno administrátora');
@define('INSTALL_USERNAME_DESC', 'Prihlasovacie meno administrátora');
@define('INSTALL_PASSWORD', 'Heslo administrátora');
@define('INSTALL_PASSWORD_DESC', 'Prihlasovacie heslo administrátora');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Skutoèné Meno');
@define('USERCONF_REALNAME_DESC', 'Plné meno autora. Toto meno je viditeµné pre náv¹tevníkov');
@define('INSTALL_EMAIL', 'E-mail administrátora');
@define('INSTALL_EMAIL_DESC', 'E-mail administrátorského pou¾ívateµa');
@define('INSTALL_SENDMAIL', 'Posiela» administrátorovi e-maily?');
@define('INSTALL_SENDMAIL_DESC', 'Chcete dostáva» e-mailové správy o komentároch k Va¹ím èlánkom?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Názov weblogu');
@define('INSTALL_BLOGNAME_DESC', 'Název Vá¹ho weblogu');
@define('INSTALL_BLOGDESC', 'Popis weblogu');
@define('INSTALL_BLOGDESC_DESC', 'Popis Va¹ho weblogu');
@define('INSTALL_BLOG_EMAIL', 'E-Mail pre weblog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Tu je nastavená e-mailová adresa, ktorá je pou¾itá v poli "From"- (od) pre odchádzajúce e-maily. Nastavte túto adresu tak, aby byla rozpoznanaá mailovým serverom Vá¹ho poskytovateµa - veµa mailových serverov odmieta po¹tu, ktorá má neznámu From-addresu (adr. odosielateµa).');
@define('COMMENT_TOKENS', 'Pou¾i» príznaky (tokens) pre schvaµovanie komentárov?');
@define('COMMENT_TOKENS_DESC', 'Ak sú príznaky (tokens) pou¾íváné, komentáre mô¾u by» schválené alebo odstránené kliknutím na odkaz v oznamovacom e-maile, bez potreby prihlásenia do weblogu. Berte do úvahy, ¾e ak niekto získa prístup k Va¹ím e-mailom, mô¾e schvaµova» a maza» komentáre bez zadania prihlasovacích údajov.');
@define('INSTALL_LANG', 'Jazyk');
@define('INSTALL_LANG_DESC', 'Vyberte jazyk Vá¹ho weblogu');
@define('INSTALL_CHARSET', 'Výber znakovej sady - Charset');
@define('INSTALL_CHARSET_DESC', 'Tu mô¾ete vybra» medzi UTF-8 alebo národnou (ISO, EUC, ...) znakovou sadou. Niektoré jazyky majú iba UTF-8 preklady, tak¾e nastavenie znakovej sady na národnú nemá úèinok. UTF-8 je odporúèané pre nové in¹talácie. Nemente toto nastavenie, pokiaµ ste u¾ napísali èlánky s diakritikou - mô¾e to spôsobi» poru¹enie textu. O tomto probléme si mô¾ete preèíta» viac na adrese https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Typ kalendáre');
@define('INSTALL_CAL_DESC', 'Vyberte formát kalendára');
@define('AUTOLANG', 'Pou¾i» jazyk prehliadaèa ako prednastavený');
@define('AUTOLANG_DESC', 'Zapnutím téjto voµby urèíte, ¾e jazyk prehliadaèa bude prevzatý ako základný jazyk pre u¾ivateµské rozhranie a pre èlánky.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Zapnú» Doplnok ACL pre pou¾ívateµské skupiny?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Ak je volba "Plugin ACL pre pou¾ívateµské skupiny" v nastaveniach zapnutá, mô¾ete urèi», ktoré skupiny u¾ívateµov môzu pou¾íva» urèité doplnky/udalosti.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevancia');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Vzhµad a nastavenia');
@define('INSTALL_CAT_DISPLAY_DESC', 'Úprava vzhµadu a správania Serendipity');
@define('INSTALL_FETCHLIMIT', 'Èlánky zobrazené na hlavnej stránke');
@define('INSTALL_FETCHLIMIT_DESC', 'Poèet èlánkov zobrazených na hlavnej stránke');
@define('INSTALL_RSSFETCHLIMIT', 'Èlánky, ktoré sa majú zobrazi» v RSS Feede');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Poèet èlánkov, ktoré sa majú zobrazi» na ka¾dej stránke v RSS Feede.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'Ako sa majú zoraïova» výsledky hµadania?');
@define('SYNDICATION_RFC2616', 'Aktivova» strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'Ak neaktivujete RFC2616, bude to ma» za následok, ¾e v¹etky podmienené GETy na Serendipity vrátia príspevky, ktoré boli modifikované od èasu posledného po¾iadavku. Tak¾e pri takejto voµbe "false" dostanú Va¹i náv¹tevníci v¹etky èlánky od svojho posledného po¾iadavku, èo sa pova¾uje za dobré. Av¹ak niektorí agenti ako Planet fungujú za tejto situácie nesprávne a tie¾ to poru¹uje RFC2616. Tak¾e ak nastavíte túto voµbu na "TRUE", budete vyhovova» RFC ale náv¹tevníkom mô¾u v èítaèkách behom prázdnin zmiznú» príspevky. V ka¾dom prípade, buï to nevyhovuje agregátorom ako je Planet, alebo to nevyhovuje náv¹tevníkom weblogu. Ak sa vyskytnú s»a¾nosti z ktorejkoµvek strany, mô¾ete túto voµbu prepnú». Referencia: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Pou¾i» kompresiu gzip');
@define('INSTALL_USEGZIP_DESC', 'Kompresia stránok urýchµuje ich nahranie, pokiaµ to prehliadaè podporuje. Odporúèame pou¾i» toto nastavenie.');
@define('INSTALL_XHTML11', 'Vynúti» kompatibilitu s XHTML 1.1?');
@define('INSTALL_XHTML11_DESC', 'Chcete plnú kompatibilitu s XHTML 1.1? (mô¾e spôsobi» problémy v star¹ích prehliadaèoch)');
@define('INSTALL_POPUP', 'Zapnú» pou¾itie vyskakovacích okien');
@define('INSTALL_POPUP_DESC', 'Chcete vo weblogu pou¾íva» vyskakovacie okná pre komentáre, odozvy atï.?');
@define('INSTALL_EMBED', 'Je Serendipity integrované?');
@define('INSTALL_EMBED_DESC', 'Ak chcete vlo¾i» weblog do Va¹ích stránok, vyberte áno pre odstránenie v¹tkých záhlaví, zobrazí sa iba obsah. Mô¾ete pou¾i» voliteµný súbor indexFile na urèenie vlastných záhlaví. Viac informácií nájdete v súbore README!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Spravi» externé odkazy klikateµnými?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nie": Neoznaèené externé odkazy (Top výstupy, Top odkazujúce stránky, U¾ívateµské komentáre) nebudú zobrazené alebo budú zobrazené ako be¾ný text v¹ade, kde je to mo¾né (doporuèené pre obmedzenie spamu). "Ano": Neoznaèené externé odkazy budú zobrazené ako hyperlinky. Nastavenie mô¾e by» prepísané v konfigurácii doplnkov!');
@define('INSTALL_TRACKREF', 'Zapnú» sledovanie odkazujúcich stránok?');
@define('INSTALL_TRACKREF_DESC', 'Zapnutie sledovania odkazujúcich stránok Vám uká¾e, ktoré webové stránky odkazujú na Va¹e èlánky. Dnes sa to èasto zneu¾íva na SPAM, tak¾e to mô¾ete necha» vypnuté.');
@define('INSTALL_BLOCKREF', 'Blokované odkazujúce stránky');
@define('INSTALL_BLOCKREF_DESC', 'Chcete obmedzi» prístup z urèitých adries? Adresy oddelujte znakom \';\' a pozor, adresy sú blokované vrátane podadries!');
@define('INSTALL_REWRITE', 'Prepisovanie URL');
@define('INSTALL_REWRITE_DESC', 'Nastavte pravidlá pre tvorbu URL. Zapnutie re¾imu prepisovania umo¾ní µah¹ie èitateµné URL a zjednodu¹í indexáciu vyhµadávaèmi, ako napr. Google. Webserver musí podporova» mod_rewrite, alebo nastavenie "AllowOverride All" pre prieèinok Serendipity. Prednastavená je automatická detekcia.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Nastavi» posun èasovéj zóny voèi serveru?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Posun èasu èlánkov voèi èasu na serveri. Vyberte "áno" pre zadanie relatívneho èasového posunu voèi èasovej zóne serveru. Nejedná sa o posun voèi GMT (Greenwich mean time).');
@define('INSTALL_OFFSET', 'Èasový posun servera');
@define('INSTALL_OFFSET_DESC', 'Vlo¾te poèet hodín medzi èasem serveru (aktuálny èas: %clock%) a Va¹ou èasovou zónou');
@define('INSTALL_SHOWFUTURE', 'Zobrazi» budúce èlánky');
@define('INSTALL_SHOWFUTURE_DESC', 'Toto nastavenie zapne zobrazenie budúcích èlánkov weblogu. ©tandardne sú skryté a budú zobrazené a¾ v èase ich vydania.');
@define('INSTALL_ACL', 'Aplikova» práva na èítanie pre kategórie');
@define('INSTALL_ACL_DESC', 'Ak je zapnuté, nastavenia u¾ívateµských skupín, ktoré nastavíte pre kategórie, budú aplikované keï si prihlásení u¾ívatelia prezerajú Vá¹ weblog. Ak je vypnuté, práva na èítanie nie sú aplikované a pozitívnym efektom je mierne zrýchlenie Vá¹ho weblogu. Ak nepotrebujete práva na èítanie pre rôznych pou¾ívateµov, nechajte toto nastavenie vypnuté.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Zobrazi» celé èlánky vrátane roz¹írenej èasti v RSS kanáli');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrázok pre kanál RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL obrázku vo formáte GIF/JPEG/PNG, ak je k dispozícii. (prázdné: logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '©írka obrázku');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'v pixeloch, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Vý¹ka obrázku');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'v pixeloch, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Zobrazova» e-mailové adresy?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "hlavný redaktor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailová adresa hlavného redaktora, ak je k dispozícii. (prázdné: nezobrazi») [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailová adresa webmastera, ak je k dispozícii. (prázdné: nezobrazi») [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (¾ivotnos»)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Èas v minútach, po ktorom by Vá¹ weblog nemal bý» naïalej vo vyrovnávacej pamä»i na cudzích serveroch/aplikáciách (prázdné: nezobrazi») [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Má by» pole "pubDate" integrované do kanálu RSS, aby obsahoval dátum posledného èlánku?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Nastavenie úpravy obrázkov');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Tu zadajte v¹eobecné informácie, ako má Serendipity spracováva» obrázky');
@define('INSTALL_IMAGEMAGICK', 'Pou¾íva» Imagemagick?');
@define('INSTALL_IMAGEMAGICK_DESC', 'Máte nain¹talovaný Imagemagick a chcete ho pou¾i» na zmenu veµkosti obrázkov?');
@define('INSTALL_IMAGEMAGICKPATH', 'Cesta k súboru convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Úplná cesta a název binárneho súboru convert programu Imagemagick');
@define('INSTALL_THUMBSUFFIX', 'Prápona náhµadov');
@define('INSTALL_THUMBSUFFIX_DESC', 'Náhµady budú pomenované následovne: originál.[prípona].typ');
@define('INSTALL_THUMBWIDTH', 'Maximálna veµkos» náhµadu');
@define('INSTALL_THUMBWIDTH_DESC', 'Maximálna veµkos» náhµadu v obmedzujúcom rozmere');
@define('INSTALL_THUMBDIM', 'Obmedzujúci rozmer pre náhµady');
@define('INSTALL_THUMBDIM_LARGEST', 'najdlh¹ia hrana');
@define('INSTALL_THUMBDIM_WIDTH', '¹írka');
@define('INSTALL_THUMBDIM_HEIGHT', 'vý¹ka');
@define('INSTALL_THUMBDIM_DESC', 'Rozmer , ktorý urèuje maximálnu veµkos» náhµadu. ©tandardné nastavenie "' . INSTALL_THUMBDIM_LARGEST .  '" obmedzuje obidva rozmery, tak¾e ani jeden z nich nemô¾e by» väè¹í ako maximálna veµkos»; "' . INSTALL_THUMBDIM_WIDTH . '" a "' .  INSTALL_THUMBDIM_HEIGHT . '" obmedzujú iba jeden rozmer, tak¾e druhý rozmer mô¾e by» väè¹í ako maximálna veµkos».');
@define('MEDIA_UPLOAD_SIZE', 'Max. veµkos» uploadovaného súboru');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Zadajte maximálnu veµkos» pre uploadované (nahrávané) súbory v bytoch. Toto nastavenie mô¾e by» prepísané nastavením servera v php.ini: upload_max_filesize, post_max_size, max_input_time majú prednos» pred touto voµbou. Prázdny re»azec znamená, ¾e sa pou¾ije limit serveru.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. ¹írka obrázku pre upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Zadajte maximálnu ¹írku pre uploadované obrázky v pixeloch.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. vý¹ka obrázku pre upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Zadajte maximálnu vý¹ku v pixelech pre uploadované obrázky.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Zapnú» synchronizáciu médií za behu (on the fly)');
@define('ONTHEFLYSYNCH_DESC', 'Ak je zapnuté, Serendipity bude porovnáva» databázu médií so súbormi ulo¾enými na serveri a bude synchronizova» obsah databázy a prieèinkov.');
@define('MEDIA_DYN_RESIZE', 'Zapnú» dynamickú zmenu veµkosti obrázkov?');
@define('MEDIA_DYN_RESIZE_DESC', 'Ak je zapnuté, mô¾e media selector vraca» obrázky v akejkoµvek po¾adovanej veµkosti pomocou premennej GET. Výsledky sú cachované, tak¾e sa mô¾e pri intenzívnom vyu¾ití vytvori» veµké mno¾stvo súborov.');
@define('MEDIA_EXIF', 'Importova» EXIF/JPEG dáta obrázku');
@define('MEDIA_EXIF_DESC', 'Ak je zapnuté, existujúce EXIF/JPEG metadata obrázkov budú spracované a ulo¾ené v databáze, aby sa dali zobrazi» v galérii médií.');
@define('MEDIA_PROP', 'Vlastnosti médií');
@define('MEDIA_PROP_DESC', 'Zadajte zoznam polí vlastností (oddelených  ";"), ktoré chcete definova» pre ka¾dý souor v médiách');
@define('MEDIA_PROP_MULTIDESC', '(Za ka¾dú polo¾ku mô¾ete prida» ":MULTI", èo bude indikova», ¾e táto polo¾ka bude obsahova» dlhý text namiesto iba niekoµko znamkv)');
@define('MEDIA_KEYWORDS', 'Médiá - kµúèové slová');
@define('MEDIA_KEYWORDS_DESC', 'Zadajte zoznam slov (oddelených ";"), ktoré chcete pou¾i» ako prednastavené kµúèové slová pre polo¾ky v médiách.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Osobné nastavenia');
@define('USERCONF_CAT_PERSONAL_DESC', 'Nastavenia Vá¹ho úètu');
@define('USERCONF_USERNAME', 'Meno');
@define('USERCONF_USERNAME_DESC', 'Va¹e u¾ívateµské meno');
@define('USERCONF_PASSWORD', 'Heslo');
@define('USERCONF_PASSWORD_DESC', 'Va¹e heslo');
@define('USERCONF_CHECK_PASSWORD', 'Staré heslo');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Ak meníte heslo v poli vy¹¹ie, musíte zada» pôvodné heslo do tohto poµa.');
@define('USERCONF_USERLEVEL', 'Úroveò prístupu');
@define('USERCONF_USERLEVEL_DESC', 'Táto úroveò prístupu urèuje práva pou¾ívateµa weblogu.');
@define('USERCONF_GROUPS', 'Èlenstvo v skupinách');
@define('USERCONF_GROUPS_DESC', 'Tento pou¾ívateµ je èlenom nasledujúcich skupín. Ælenstvo vo viacerých skupinách je mo¾né.');
@define('USERCONF_EMAIL', 'E-mailová adresa');
@define('USERCONF_EMAIL_DESC', 'Vá¹ e-mail');
@define('INSTALL_WYSIWYG', 'Pou¾íva» WYSIWYG editor?');
@define('INSTALL_WYSIWYG_DESC', 'Chcete pou¾íva» WYSIWYG editor? (Pracuje v IE5+, èiastoène v Mozille 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Posiela» správy o komentároch?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Chcete dostáva» zprávy o komentároch k èlánkom e-mailom?');
@define('USERCONF_SENDTRACKBACKS', 'Posiela» správy o odozvách?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Chcete dostáva» správy o odozvách na èlánky e-mailom?');
@define('USERCONF_CREATE', 'Zneplatni» pou¾ívateµa / zakáza» aktivitu?');
@define('USERCONF_CREATE_DESC', 'Ak je táto voµba vybraná, pou¾ívateµ nebude ma» ¾iadne práva k vytváraniu alebo meneniu weblogu. Ak sa prihlási do administrátorskej oblasti, mô¾e si iba prehliada» osobné nastavenia alebo sa odhlási».');
@define('USERCONF_ALLOWPUBLISH', 'Právo publikova» èlánky?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Umo¾ni» u¾ívateµovi publikova» èlánky?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Zobrazi» li¹tu nástrojov v okne výberu médií?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Prednastavené voµby pre nové èlánky');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UPOZORNENIE: Atribút úroveò prístupu pou¾ívateµa (userlevel) je teraz pou¾ívaný iba kvôli spätnej kompatibilite s doplnkami a autorizáciou. U¾ívateµské práva sa odteraz riadia pomocou èlenských skupín!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nezadali ste správne staré heslo a tým pádom nemáte právo zmeni» heslo. Va¹e nastavenia neboli ulo¾ené.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Meno pou¾ívateµa nemô¾e by» prázdne.');
@define('USERCONF_SECONDFACTOR', 'Confirm login with email code');
@define('USERCONF_SECONDFACTOR_DESC', 'Protect your login with a code sent to your email that needs to be entered in addition to the password. Only enable this if you get email notifications to your personal email from this blog.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'ersonalConfiguration: Prístup k osobnej konfigurácii');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Zmena úrovne pou¾ívateµa (level)');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Zmena "zákazu nových èlánkov"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Zmena práva na publikovanie èlánkov');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Konfigurácia systému');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Konfigurácia weblogu');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Správa èlánkov');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Správa èlánkov ostatných pou¾ívateµov');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import èlánkov');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Správa kategórií');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Správa kategórií ostatných pou¾ívateµov');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Mazanie kategórií');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Správa pou¾ívateµov');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Mazanie pou¾ívateµov');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Zmena úrovne pou¾ívateµa');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Správa pou¾ívateµov v rovnakých skupinách');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Správa pou¾ívateµov v iných skupinách');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Vytváranie nových pou¾ívateµov');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Správa pou¾ívateµských skupín');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Správa doplnkov');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Správa doplnkov ostatných u¾ívateµov');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Správa mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Správa mediálnych (obrázkových) prieèinkov');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Pridanie nových mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Mazanie mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Správa mediálnych súborov (obrázkov) ostatných pou¾ívateµov');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Prehliadanie mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Synchronizácia náhµadov');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Správa komentárov');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Správa ¹ablón (templates)');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Zobrazi» mediálne súbory (obrázky) ostatných pou¾ívateµov');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zakázané doplnky');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zakázané udalosti');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Záznam ulo¾ený');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vláknové');
@define('COMMENTS_VIEWMODE_LINEAR', 'Lineárne');
@define('DISPLAY_COMMENTS_AS', 'Zobrazi» komentáre ako');
@define('COMMENTS_DISABLE', 'Zablokova» pridávánie komentárov');
@define('COMMENTS_ENABLE', 'Povoli» pridávánie komentárov');
@define('COMMENTS_CLOSED', 'Autor zablokoval pridávanie komentárov');
@define('VIEW_EXTENDED_ENTRY', 'Pokraèova» v èítaní "%s"');
@define('TRACKBACK_SPECIFIC', 'Odozva zo ¹pecifického URI na tento èlánok');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'zobrazi» v¹etko');
@define('VIEW_TOPICS', 'zobrazi» nadpisy');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Téma');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Èlánky sa nepodarilo úspe¹ne vlo¾i»!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamäta» údaje? ');
@define('SUBMIT_COMMENT', 'Odosla» komentár');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Prihlási» sa k sledovaniu komentáov tohto èlánku');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Vá¹ prehliadaè nezaslal platný re»azec HTTP-Referrer. To mô¾e by» spôsobené nesprávnym nastavením prehliadaèa resp. proxy servera alebo ide o tzv. Cross Site Request Forgery (XSRF), ktorý je namierený na Vás. Po¾adovaný úkon nemohol by» dokonèený.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Themes page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Komentár #%s u¾ bol schválený');
@define('COMMENT_EDITED', 'Vybraný komentár bol upravený');
@define('COMMENTS_WILL_BE_MODERATED', 'Odoslané komentáre budú pred zverejnením moderované.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Pozor: Tento komentár musí by» pred uverejnením schválený');
@define('DELETE_COMMENT', 'Zmaza» komentár');
@define('APPROVE_COMMENT', 'Schváli» komentár');
@define('REQUIRES_REVIEW', 'Vy¾aduje kontrolu');
@define('COMMENT_APPROVED', 'Komentár #%s bol schválený');
@define('COMMENT_DELETED', 'Komentár #%s bol zmazaný');
@define('COMMENTS_MODERATE', 'Komentáre a odozvy k tomuto èlánku budú moderované');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Pozor: Táto odozva musí bý» pred zverejnením schválená');
@define('DELETE_TRACKBACK', 'Vymaza» odeovu');
@define('APPROVE_TRACKBACK', 'Schváli» odozvu');
@define('TRACKBACK_APPROVED', 'Odozva #%s bola schválená');
@define('TRACKBACK_DELETED', 'Odozva #%s bola vymazaná');
@define('COMMENT_NOTOKENMATCH', 'Odkazu na schválenie vypr¹ala platnos», alebo bol komentár è. %s u¾ schválený alebo odstránený');
@define('TRACKBACK_NOTOKENMATCH', 'Odkazu na schválenie vypr¹ala platnos», alebo bola odozva è. %s u¾ schválená alebo odstránená');
@define('BADTOKEN', 'Neplatný odkaz na schválenie');
@define('TOP_LEVEL', 'Najvy¹¹ia úroveò');
@define('VIEW_COMMENT', 'Zobrazi» komentár');
@define('VIEW_ENTRY', 'Zobrazi» èlánok');
@define('LINK_TO_ENTRY', 'Odkaz na èlánok');
@define('LINK_TO_REMOTE_ENTRY', 'Odkaz na externý èlánok');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Posielanie oznámenia (pingback) na URI %s...');
@define('PINGBACK_SENT', 'Oznámenie úspe¹né');
@define('PINGBACK_FAILED', 'Oznámenie zlyhalo: %s');
@define('PINGBACK_NOT_FOUND', 'Oznamovacia URI adresa neexistuje.');
@define('TRACKBACK_SENDING', 'Odoslanie odozvy na URI %s...');
@define('TRACKBACK_SENT', 'Odozva úspe¹ná');
@define('TRACKBACK_FAILED', 'Odozva neúspe¹ná: %s');
@define('TRACKBACK_NOT_FOUND', 'URI odozvy neexistuje.');
@define('TRACKBACK_URI_MISMATCH', 'Automaticky získané URI neoodpovedá Vá¹mu cieµovému.');
@define('TRACKBACK_CHECKING', 'Testovanie <u>%s</u> na mo¾né odozvy...');
@define('TRACKBACK_NO_DATA', 'Cieµ neobsahuje dáta');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Odozva nebola odoslaná: nepodarilo sa spoji» s %s na porte %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Dobrý deò %s,\n\nPo¾iadali ste o zasielanie oznámení o nových komentároch k èlánku \"%s\" (<%s>). Túto ¾iados» (\"Double Opt In\") potvrdíte kliknutím na nasledujúci odkaz:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Dobrý deò %s,\n\nPoslali ste nový komentár na \"%s\". Komentár znie:\n\n%s\n\nVlastník weblogu po¾aduje e-mailové potvrdenie, tak¾e je potrebné komentár potvrdi» kliknútím na nasledujúcí odkaz:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Dobrý deò %s,\n\nPoslali ste nový komentár na \"%s\". Vá¹ komentár znie:\n\n%s\n\nVlastník weblogu vy¾aduje prvotné e-mailové potvrdenie. Znamená to, ¾e je potrebné komentár potvrdi» kliknutím na nasledující odkaz:\n<%s>\n\nSúèasne tým budú potvrdené v¹etky ïal¹ie komentáre s tým istým menom a tou istou e-mailovou adresou, tak¾e Vám v budúcnosti u¾ podobné oznámenie nebude doruèované.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nový komentár k sledovanému èlánku "%s"');
@define('SUBSCRIPTION_MAIL', "Dobrý deò %s,\n\nA k èláku, ktorý sledujete na \"%s\", s názvom \"%s\", bol práve pridaný nový komentár.\nMeno odosielateµa: %s\n\nOdkaz na èlánok: %s\n\nOdhlási» sledovanie èlánku: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Dobrý deò %s,\n\nA k èlánku, ktorý sledujete na \"%s\", s názvem \"%s\", bola práve pridaná nová odozva\nMeno odosielateµa: %s\n\nOdkaz na èlánok: %s\n\nOdhlási» sledovanie èlánku: %s\n");
@define('SIGNATURE', "\n-- \n%s je vytvorený pomocou Serendipity.\n Tento výborný voµný blogovací systém mô¾ete pou¾i» aj vy.\nViac informácií na webstránke <https://s9y.org>.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nový komentár vo weblogu "%s", k èlánku s názvom "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nová odozva na weblog/èlánok s názvom "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Máte k dispozícii tieto voµby:');
@define('NEW_TRACKBACK_TO', 'Nová odozva na');
@define('NEW_COMMENT_TO', 'Nový komentár ku');
@define('SECOND_FACTOR_MAIL_TITLE', 'Serendipity login code for %s');
@define('SECOND_FACTOR_MAIL', "Hello %s,\n\nTo complete the login to your blog please enter the following code:\n\n%s\n\nIt is valid for 15 minutes.");

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nebol nájdený ¾ianen èlánok obsahujúci výraz "%s"' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Pri hµadaní výrazu "%s" bolo nájdených %s výsledkov:');
@define('SEARCH_TOO_SHORT', 'Hµadaný výraz musí být dlh¹í ako 3 znaky. Pri hµadaní krat¹ích výrazov skúste k výrazu prida» znak "*", ako napríklad výraz: "s9y*".');
@define('SEARCH_ERROR', 'Funkcia vyhµadávania nepracovala podµa oèakávaní. Poznámka pre administrátora webblogu: Toto mô¾e by» spôsobené neprítomnos»ou príslu¹ných indexov v databáze. Pou¾ívateµský úèet v databáze MySQL musí ma» práva na vykonanie tohto príkazu: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Konkrétna chyba vrátená databázou bola: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Vá¹ komentár je prázdny, prosím %svrátte sa%s a skúste znovu');
@define('COMMENT_NOT_ADDED', 'Vá¹ komentár sa nepodarilo prida», lebo komentáre k tomuto príspevku boli zakázané, zadali ste nesprávne údaje alebo bol Vá¹ komentár zachytený antispamom.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Komentáre od');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Va¹e potvrdenie komentára bolo úspe¹ne prijaté.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Va¹e potvrdenie komentára nemohlo by» prijaté. Skontrolujte prosím odkaz, na ktorý ste klikli. Ak je odkaz star¹í ako 3 tý¾dne, musíte po¾iada» o zasielanie oznámení znova.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Va¹e potvrdenie ¾iadosti o zasielanie oznámení o nových komentároch bolo úspe¹ne prijaté.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Konfiguraèná syntax pre voµbu "%s" je chybná. Vy¾adovaný obsah je typu "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Zoznam kategórií.');
@define('CATEGORIES_PARENT_BASE', 'Zobrazi» iba kategórie ni¾¹ie ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Mô¾ete vybra» nadradenú kategóriu a budú zobrazené iba jej podradené kategórie.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skry» kategórie, ktoré nie sú súèas»ou stromu kategórií');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Ak chcete skry» kategórie, ktoré sú èás»ou iného stromu kategórií, musíte pou¾i» toto nastavenie. Táto mo¾nost má najlep¹ie vyu¾itie s multi-blogom a doplnkom "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Skry» zvolenú nadradenú kategóriu?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Ak obmedzíte výpis kategórií na urèitú kategóriu, ¹tandardne bude vo výstupe táto kategória zobrazená. Ak zapnete toto nastavenie, nadradená kategória nebude zobrazená.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Zapnú» Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Ak je táto mo¾nos» zapnutá, bude doplnok pre výpis kategórií vyu¾íva» mo¾ností Smarty-Templating. Vzhµad mô¾ete upravi» pomocou ¹ablóny "plugin_categories.tpl". Zapnutie tejto voµby má negatívny vplyv na výkon, tak¾e ak nechcete robi» vladné úpravy, nechajte to vypnuté.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Zobrazi» poèet èlánkov v kategórii? ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Povoli» náv¹tevníkom zobrazi» viac kategórií naraz?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'k je táto voµba zapnutá, bude vedµa ka¾dej kategórie v tomto doplnku boènej li¹ty zobrazené okienko. Náv¹tevníci mô¾u za¹krtnú» tieto okienka a bude im zobrazené èlánky vyhovujúce tomuto výberu.');
@define('CATEGORIES_TO_FETCH', 'Zdroj kategórií');
@define('CATEGORIES_TO_FETCH_DESC', 'Kategórie ktorých autorov sa majú zahrnú»?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zobrazi» zoznam autorov');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Zobrazi» poèet èlánkov pri autorovom mene?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Ak je táto voµba zapnutá, vedµa mena autora bude v zátvorke zobrazený poèet jeho èlánkov.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Zobrazi» iba autorov s viac ako X èlánkami');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Spolupráca');
@define('SHOWS_RSS_BLAHBLAH', 'Zdieµané RSS odkazy');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'Kanál %s');
@define('SYNDICATION_PLUGIN_091', 'Kanál RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'Kanál RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'Kanál RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Komentáre RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'Kanál ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Zobrazené meno pre "kanál"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Zadajte voliteµné meno pre kanál (ak je prázdne, tak je ¹tandardne pomenovaný ako "kanál")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Zobrazované meno pre kanál s komentármi');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Zadajte (volitelne) akékoµvek meno pre kanál s komentármi');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID feedu, ktorý chcete publikova»');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner obrázok');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Názov obrázku, ktorý sa má zobrazi» (alebo prázdny pre poèitadlo), umiestnené na feedburner.com, napr.: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner nadpis');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Nadpis (voliteµné), ktorý sa má zobrazi» pri obrázku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner text obrázku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (voliteµné) ktorý sa má zobrazi» pri pohybe kurzoru nad obrázkom');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Schova» odkaz na archívy, ak nie sú vo vybranom období vydané ¾iadne èlánky (vy¾aduje poèítánie èlánkov)');
@define('ARCHIVE_COUNT', 'Poèet polo¾iek v archívnom zozname');
@define('ARCHIVE_COUNT_DESC', 'Celkový poèet zobrazených mesiacov, tý¾dnov alebo dní');
@define('ARCHIVE_FREQUENCY', 'Archívny interval');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalendány interval medzi polo¾kami v archívnom zozname');
@define('BROWSE_ARCHIVES', 'Prehliada» mesaèné archívy');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zobrazi» "Serendipity" ako text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vytvorené v "Serendipity" sa zobrazí ako text');
@define('POWERED_BY_SHOW_IMAGE', 'Zobrazi» "Serendipity" s logom');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Zobrazí sa logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Reklama na tvorcov systému vá¹ho weblogu');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Pou¾ít https pre prihlásenie');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Pre login sa pou¾ije https odkaz. Vá¹ webserver to musí podporova»!');
@define('SUPERUSER', 'Správa weblogu');
@define('SUPERUSER_OPEN_ADMIN', 'Administrácia');
@define('SUPERUSER_OPEN_LOGIN', 'Prihlásenie');
@define('ALLOWS_YOU_BLAHBLAH', 'Vlo¾i» odkaz do boèného bloku administrácie weblogu');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendár');
@define('CALENDAR_BOW_DESC', 'Deò urèený ako zaèiatok tý¾dòa. Prednastavený je pondelok');
@define('QUICKJUMP_CALENDAR', 'Vyhµadávací kalendár');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Zaèiatok tý¾dòa');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Zapnú» Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Ak je zapnuté, doplnky sa mô¾u napoji» na kalendár a zvýrazòova» svoje vlastné udalosti. Zapnite iba ak máte doplnky, ktoré toto vy¾adujú, inak to zni¾uje výkon.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Hµada» èlánky');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Vlo¾enie HTML kódu do krajného ståpca');
@define('THE_NUGGET', 'Vlo¾ené HTML');
@define('BACKEND_TITLE', 'Dal¹ie informácie v konfigurácii doplnku');
@define('BACKEND_TITLE_FOR_NUGGET', 'Tu mô¾ete zada» re»azec, ktorý bude zobrazený v konfiguraènej stránke doplnkov spolu s popisom doplnku HTML Nugget. Ak máte niekoµko HTML Nuggetov s prázdnym názvom, toto Vám pomô¾e ich rozlí¹i».');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Zobrazi» Top výstupy/odkazujúce stránky ako odkazy?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nie": Výstupy a adresy odkazujúcich stránok budú zobrazené ako èistý text pre obmedzenie spamu, "Áno": ako hypertextové odkazy. "Default": Pou¾i» globálne nastavenia (doporuèené).');
@define('HAVE_TO_BE_LOGGED_ON', 'Na zobrazenie tejto stránky musíte by» prihlásený');
@define('WELCOME_TO_ADMIN', 'Vitajte v administrácii Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Veµký obrázok');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Ak zadáte absolútnu URL adresu s http://..., bude táto adresa pou¾itá ako cieµ presmerovania v prípade, ¾e ste vybrali voµbu "Vynúti»" pre FeedBurner. Nezabudnite, ¾e to mô¾e být URL adresa nezávislá na FeedBurneri. Pre nové kanály Google FeedBurnera budete musie» zada» http://feeds2.feedburner.com/jmenoVasehoKanalu)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Ak nastavíte túto voµbu na "Vynúti»", mô¾ete presmerova» RSS kanál na akúkoµvek webovú slu¾bu, nie len na FeedBurner. Pozrite sa ni¾¹ie na voµbu "Feedburner ID" pre zadanie absolútnej adresy.');
@define('MEDIA_PROPERTY_COMMENT1', 'Krátky komentár');
@define('MEDIA_PROPERTY_COMMENT2', 'Dlhý komentár');
@define('DELETE_SELECTED_ENTRIES', 'Zmaza» vybrané príspevky');
@define('MEDIA_PROPERTY_ALT', 'Popis (zhrnutie pre atribút ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titulok');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity e¹te nie je nain¹talované. Prosím <a href="%s">nain¹talujte</a> ho teraz.');
@define('COMMENT_ADDED_CLICK', 'Kliknite %ssem%s pre návrat ku komentárom nebo %ssem%s pre zavretie okna.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknite %ssem%s pre návrat ku komentárom alebo %ssem%s pre zavretie okna.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Då¾ka');
@define('MEDIA_PROPERTY_DATE', 'Asociovaný dátum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL presunutého prieèinka zmenené v %s èlánkoch.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'V iných databázach ako MySQL nie je mo¾ná iterácia po èlánkoch a nahradenie starej adresy pôvodného adresára novou URL. Budete musie» èlánky ruène editova» a adresy upravi». Prieèinok sa dá ale stále presnú» naspä» na pôvodné miesto, ak to pova¾ujete za nároèné.');
@define('TRACKBACK_SIZE', 'Cieµové URI prekroèilo max. veµkos» súboru %s bajtov.');
@define('CLICK_FILE_TO_INSERT', 'Kliknite na súbor, ktorý chcete vlo¾i»:');
@define('SELECT_FILE', 'Vyberte súbor na vlo¾enie:');
@define('MANAGE_IMAGES', 'Správa obrázkov');
@define('WORD_NEW', 'Nové');
@define('WORD_OR', 'alebo');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Externé slu¾by');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Ïal¹ie mo¾nosti');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Úplné mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Zobrazenie/filtre');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Doplnky pre èlánky');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Správa pou¾ívateµov');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta informácie');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Templates - ¹ablóny vzhµadov');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Dal¹ie mo¾nosti');
@define('PLUGIN_GROUP_IMAGES', 'Obrázky');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup - textové znaèky');
@define('PLUGIN_GROUP_STATISTICS', '©tatistiky');
@define('IMPORT_WELCOME', 'Vitajte v nástroji pre import dát');
@define('USER_SELF_INFO', 'Prihlásený ako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Tu mô¾ete importova» èlánky z iných weblogov');
@define('IMPORT_SELECT', 'Vyberte program, z ktorého chcete importova»');
@define('MANAGE_STYLES', 'Spravova» ¹týly');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vyberte doplnok, ktorý chcete nain¹talova»');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Ni¾¹ie je zoznam nain¹talovaných doplnkov');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Zru¹i»');
@define('DELETE_SELECTED_COMMENTS', 'Zmaza» vybrané komentáre');
@define('MODERATE_SELECTED_COMMENTS', 'Approve selected comments');
@define('FIND_MEDIA', 'Hµada» médiá');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Chyba: Starý názov súboru neexistuje!');
@define('ERROR_SOMETHING', 'Chyba: Nieèo nie je v poriadku.');
@define('DIRECT_LINK', 'Priamy odkaz na tento èlánok');
@define('SELECT_TEMPLATE', 'Vyberte ¹ablónu pre vá¹ web');
@define('DATABASE_ERROR', 'chyba serendipity: nepodarilo sa spoji» s databázou - ukonèené.');
@define('LIMIT_TO_NUMBER', 'Koµko èlánkov sa má zobrazi»?');
@define('DIRECTORIES_AVAILABLE', 'Kliknutím na niektorý prieèinok v zozname mô¾ete vytvori» jeho podprieèinok.');
@define('CATEGORY_INDEX', 'Ni¾¹ie je zoznam kategórií, ktoré mô¾ete pou¾i» vo Va¹om èlánku');
@define('PAGE_BROWSE_PLUGINS', 'Strana %s z %s, spolu %s doplnkov');
@define('CHARSET_NATIVE', 'Národná');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API Interface u¾ nie je súèas»ou Serendipity kvôli bezpeènostným problémom s touto API a nízkemu poètu jeho pou¾ívateµov. Preto musíte nain¹talova» doplnok XML-RPC, ak chcete XML-RPC API pou¾íva». URL, ktorá sa pou¾ije vo Va¹ej aplikácii sa nezmení - hneï po in¹talácii doplnku mô¾ete API pou¾íva».');
@define('AUTHORS_ALLOW_SELECT', 'Povoli» náv¹tevníkom vybra» viac autorov naraz?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Ak je táto voµba zapnutá, bude vedµa ka¾dého autora v tomto doplnku boènej li¹ty zobrazené okienko. Náv¹tevníci mô¾u za¹krtnú» tieto okienka a bude im zobrazené èlánky vyhovujúce tomuto výberu.');
@define('PREFERENCE_USE_JS', 'Zapnú» pou¾ívanie advanced JS?');
@define('PREFERENCE_USE_JS_DESC', 'Ak je zapnuté, budú pre zlep¹enie pou¾iteµnosti aktivované oblasti s advanced JavaScript. Napr. v oblasti pre konfiguráciu doplnkov mô¾ete pre reorganizáciu doplnkov pou¾i» drag and drop (tiahnu» my¹ou).');
@define('PREFERENCE_USE_JS_WARNING', '(Táto stránka pou¾íva advanced JavaScripting. Ak máte problémy s funkènos»ou, zaká¾te prosím pou¾ívanie advanced JS vo svojich osobných nastaveniach alebo zaká¾te javascript vo Va¹om prehliadaèi.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');
