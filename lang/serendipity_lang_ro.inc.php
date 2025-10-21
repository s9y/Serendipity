<?php
# $Id: serendipity_lang_ro.inc.php,v 1.148 2005/04/18 09:37:42 alexandruszasz Exp $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation by Alexandru Szasz <alexxed@gmail.com>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'ro_RO.UTF-8, romanian, ro, ro_RO');
@define('DATE_FORMAT_ENTRY', '%A, %B %e. %Y');
@define('DATE_FORMAT_SHORT', '%d-%m-%Y %H:%M');
@define('WYSIWYG_LANG', 'ro');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Tip');
@define('PREVIEW', 'Previzualizare');
@define('DATE', 'Data');
@define('TIME', 'Time');
@define('APPEARANCE', 'Aspect');
@define('LOGIN', 'Conectare');
@define('LOGOUT', 'Deconectat');
@define('LOGGEDOUT', 'Ai fost deconectat.');
@define('CREATE', 'Creaza');
@define('BACK', 'Înapoi');
@define('FORWARD', 'Înainte');
@define('ANONYMOUS', 'Anonim');
@define('RECENT', 'Recente...');
@define('OLDER', 'Mai vechi...');
@define('DONE', 'Gata');
@define('TITLE', 'Titlu');
@define('DESCRIPTION', 'Descriere');
@define('PLACEMENT', 'Plasare');
@define('DELETE', 'Sterge');
@define('SAVE', 'Salveaza');
@define('UP', 'SUS');
@define('DOWN', 'JOS');
@define('PREVIOUS', 'Anterioare');
@define('NEXT', 'Urmatoare');
@define('ENTRIES', 'însemnari');
@define('CATEGORIES', 'Categorii');
@define('NAME', 'Nume');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Pagina web');
@define('COMMENT', 'Comentariu');
@define('VIEW', 'Vedere');
@define('HIDE', 'Ascunde');
@define('WEEK', 'Saptamâna');
@define('WEEKS', 'Saptamâni');
@define('MONTHS', 'Luni');
@define('DAYS', 'Zile');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Succes');
@define('COMMENTS', 'Comentarii');
@define('ADD_COMMENT', 'Adauga Comentariu');
@define('NO_COMMENTS', 'Nici un comentariu');
@define('POSTED_BY', 'Scris de');
@define('ON', 'activat');
@define('NO_CATEGORY', 'Nici o Categorie');
@define('CATEGORY', 'Categorie');
@define('EDIT', 'Modifica');
@define('GO', 'Du-te!');
@define('YES', 'Da');
@define('NO', 'Nu');
@define('NOT_REALLY', 'Nu prea');
@define('DUMP_IT', 'Da, sunt sigur');
@define('IN', 'în');
@define('AT', 'la');
@define('LEFT', 'stânga');
@define('RIGHT', 'dreapta');
@define('CENTER', 'center');
@define('ARCHIVES', 'Arhive');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Cautare rapida');
@define('TRACKBACKS', 'Referinte');
@define('TRACKBACK', 'Referinta');
@define('NO_TRACKBACKS', 'Nici o referinta');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Segment');
@define('TRACKED', 'Legat');
@define('USER', 'Utilizator');
@define('USERNAME', 'Utilizator');
@define('PASSWORD', 'Parola');
@define('HIDDEN', 'ascuns');
@define('IMAGE', 'Imagine');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'versiune');
@define('INSTALL', 'Instalare');
@define('REPLY', 'Reply');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Eroare');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Forteaza');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administrare');
@define('ADMIN_FRONTPAGE', 'Pagina de start');
@define('QUOTE', 'Citat');
@define('NONE', 'nimic');
@define('GROUP', 'Group');
@define('AUTHORS', 'Authors');
@define('UPGRADE', 'Actualizare');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Toti autorii');
@define('PREVIOUS_PAGE', 'pagina precedenta');
@define('NEXT_PAGE', 'pagina urmatoare');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Toate categoriile');
@define('LAST_UPDATED', 'Ultima actualizare');
@define('IP_ADDRESS', 'adresa-IP');
@define('CHARSET', 'Set caractere');
@define('REFERER', 'Referent');
@define('APPROVE', 'Aproba');
@define('NOT_FOUND', 'Negasit');
@define('WRITABLE', 'Se poate scrie');
@define('NOT_WRITABLE', 'Nu se poate scrie');
@define('WELCOME_BACK', 'Bun venit,');
@define('USE_DEFAULT', 'Implicit');
@define('SORT_BY', 'Sorteaza dupa');
@define('SORT_ORDER', 'Ordinea sortarii');
@define('SORT_ORDER_ASC', 'Crescator');
@define('SORT_ORDER_DESC', 'Descrescator');
@define('FILTERS', 'Filtre');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Alterneaza deschide toate');
@define('TOGGLE_OPTION', 'Alterneaza optiunea');
@define('IN_REPLY_TO', 'Raspuns la comentariu');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Director');
@define('BACK_TO_BLOG', 'Înapoi la Weblog');
@define('HTML_NUGGET', 'Fragment HTML');
@define('TITLE_FOR_NUGGET', 'Titlul fragmentului');
@define('COMMENT_ADDED', 'Comentariul tau a fost adaugat cu succes. ');
@define('ENTRIES_FOR', 'Însemnari pentru %s');
@define('NO_ENTRIES_TO_PRINT', 'Nici o însemnare de afisat');
@define('COMMENT_DELETE_CONFIRM', 'Esti sigur ca vrei sa stergi #%d, scris de %s?');
@define('DELETE_SURE', 'Esti sigur ca vrei sa stergi #%s permanent?');
@define('MEDIA_FULLSIZE', 'Marime originala');
@define('SIDEBAR_PLUGIN', 'extensie pentru Bara Laterala');
@define('EVENT_PLUGIN', 'Extensie Eveniment');
@define('PLUGIN_ITEM_DISPLAY', 'Unde ar trebui plasat acest element?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Numai însemnari avansate');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Doar pagina rezumat');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Amândoua');
@define('DIRECTORY_WRITE_ERROR', 'Nu pot scrie în directorul %s. Verifica te rog permisiunile.');
@define('FILE_WRITE_ERROR', 'Nu pot scrie în fisierul %s.');
@define('INCLUDE_ERROR', 'eroare serendipity: nu am putut include %s - ies.');
@define('DO_MARKUP', 'Executa transformarile pentru selectii');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Format data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Forma datei pentru însemnare, folosind variabilele functiei PHP strftime(). (Implicit: "%s")');
@define('APPLY_MARKUP_TO', 'Aplica selectia pentru %s');
@define('XML_IMAGE_TO_DISPLAY', 'Buton XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Legaturile catre serviciile de informare XML vor fi afisate sub aceasta imagine. Lasa gol pentru valoarea implicita, sau \'none\' pentru a dezactiva aceasta functionalitate.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Sterg fisierul %s...');
@define('SETTINGS_SAVED_AT', 'Noile preferinte au fost salvate în %s');
@define('INVERT_SELECTIONS', 'Inverseaza selectia');

@define('PERSONAL_SETTINGS', 'Optiuni Personale');
@define('DO_MARKUP_DESCRIPTION', 'Aplica transformari pentru text (emoticonuri, scurtaturi via *, /, _, ...). Dezactivând asta vei pastra eventualul cod HTML din text intact.');
@define('BASE_DIRECTORY', 'Director de baza');
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
@define('SERENDIPITY_INSTALLATION', 'Instalare Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Bun venit la instalarea Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Pentru început, ne vom uita la instalarea curenta si vom încerca sa diagnosticam eventualele probleme care vor aparea');
@define('ERRORS_ARE_DISPLAYED_IN', 'Erorile sunt afisate în %s, recomandarile în %s iar succesul în %s');
@define('RED', 'rosu');
@define('YELLOW', 'galben');
@define('GREEN', 'verde');
@define('PRE_INSTALLATION_REPORT', 'Raport preinstalare Serendipity v%s');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'instalarea PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Sistem de operare');
@define('WEBSERVER_SAPI', 'SAPI server web');
@define('PHPINI_CONFIGURATION', 'configuratia php.ini');
@define('RECOMMENDED', 'Recomandat');
@define('ACTUAL', 'Actual');
@define('PERMISSIONS', 'Permisiuni');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Permisiunile pot fi setate rulând într-un shell comanda: `<em>%s</em>` pe directorul cu probleme, sau setându-le cu ajutorul unui client FTP');
@define('PROBLEM_DIAGNOSTIC', 'Datorita unei probleme care a survenit, nu poti continua instalarea pâna urmatoarele probleme nu sunt rezolvate');
@define('SELECT_INSTALLATION_TYPE', 'Alege tipul de instalare pe care îl preferi');
@define('RECHECK_INSTALLATION', 'Verifica instalarea din nou');
@define('SIMPLE_INSTALLATION', 'Instalare simpla');
@define('EXPERT_INSTALLATION', 'Modul expert');
@define('COMPLETE_INSTALLATION', 'Instalare completa');
@define('WONT_INSTALL_DB_AGAIN', 'nu voi instala baza de date din nou');
@define('THEY_DO', 'ei');
@define('THEY_DONT', 'ei nu');
@define('CHECK_DATABASE_EXISTS', 'Verific daca baza de date si tabelele exista deja');
@define('CREATE_DATABASE', 'Creez baza de date implicita...');
@define('ATTEMPT_WRITE_FILE', 'Încerc sa scriu fisierul %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Creez autor principal \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Aleg tematica implicita');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalez extensiile implicite');
@define('SERENDIPITY_INSTALLED', 'Serendipity a fost instalat cu succes');
@define('VISIT_BLOG_HERE', 'Viziteaza noul tau blog aici');
@define('THANK_YOU_FOR_CHOOSING', 'Îti multumim ca ai ales Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'A aparut o eroare în timpul instalarii');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Bazat pe');
@define('ADMIN_FOOTER_POWERED_BY', 'Bazat pe Serendipity %s si PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Editor');
@define('USERLEVEL_CHIEF_DESC', 'Editor sef');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Schimba www cu numele utilizatorului sub care ruleaza apache (ex. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Directorul %s nu exista si nu poate fi creat. Te rog sa creezi directorul manual');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; executa <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nu pot executa programul %s');
@define('FILE_CREATE_YOURSELF', 'Te rog sa creezi fisierul tu sau sa verifici permisiunile');
@define('COPY_CODE_BELOW', '<br />* Nu trebuie decât sa copiezi codul de mai jos si sa-l pui în %s din directorul %s:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Dupa ce ai facuta asta, reîmprospateaza pagina cu butonul Reload sau Refresh.');
@define('ERROR_TEMPLATE_FILE', 'Nu pot deschide fisierul cu tematica, verifica configuratia serendipity!');
@define('HTACCESS_ERROR', 'Pentru a verifica instalarea serverului tau web, serendipity trebuie sa poata scrie în fisierul ".htaccess". Acest lucru nu a fost posibil din cauza lipsei de permisiuni asupra fisierului sau directorului care îl contine. Trebuie sa schimbi permisiunile asupra fisierului astfel: <br />&nbsp;&nbsp;%s<br />si reîncarca aceasta pagina.');
@define('EMPTY_SETTING', 'Nu ai specificat o valoare valida pentru "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity a detectat din baza de date ca ai instalata versiunea %s, dar serendipity e instalat ca versiunea %s, deci trebuie sa faci upgrade! <a href="%s">Click aici</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Salut, si bun venit la agentul de actualizare pentru Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Sunt aici ca sa te ajut sa actualizezi instalarea ta de Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Vezi acest mesaj pentru ca tocmai ai instalat Serendipity %s, dar nu ai actualizat baza de date pentru a fi compatibila cu aceasta versiune');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Actualizari baze de date (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Am gasit urmatoarele fisiere .sql care trebuie rulate pentru a folosi Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Operatii specifice versiunii');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nu am gasit nici o operatie de executat specifica versiunii');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Vrei sa executi operatiile de mai sus?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nu, le voi executa manual');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Da, chiar te rog');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Se pare ca nu ai nevoie de actualizari');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Considera Serendipity actualizat');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Ai ignorat pasii de actualizare pentru Serendipity, verifica te rog daca baza de date e corect instalata, si eventualele operatiile programate sunt rulate');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Instalarea Serendipity este acum actualizata la versiunea %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Te poti întoarce la blog-ul tau cu un click %saici%s');
@define('ADMIN_ENTRIES', 'Însemnari');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nu m-am putut conecta la baza de date MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nu am putut selecta baza de date: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nu am putut colecta date despre utilizator: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nu am putut colecta date despre categorie: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nu am putut colecta date despre însemnare: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nu am putut colecta date despre comentariu: %s.');
@define('MYSQL_REQUIRED', 'Trebuie sa ai extensia MySQL pentru a efectua aceasta actiune.');
@define('CREATE_AUTHOR', 'Creaza autor \'%s\'.');
@define('CREATE_CATEGORY', 'Creaza categorie \'%s\'.');
@define('MT_DATA_FILE', 'Fisier cu date MT');
@define('INSTALL_DBPORT', 'Database port');
@define('INSTALL_DBPORT_DESC', 'The port used to connect to your database server');
@define('IMPORT_PLEASE_ENTER', 'Te rog introdu datele conform cerintelor de mai jos');
@define('IMPORT_NOW', 'Importa acum!');
@define('IMPORT_STARTING', 'Pornesc procedura de import...');
@define('IMPORT_FAILED', 'Importul a esuat');
@define('IMPORT_DONE', 'Importul s-a terminat cu succes');
@define('IMPORT_WEBLOG_APP', 'Software Weblog');
@define('IMPORT_NOTES', 'Note:');
@define('IMPORT_STATUS', 'Stare dupa import');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Pune tot textul importat în sectiunea "body" si nu împarti în "însemnare avansata".');
@define('IMPORT_GENERIC_RSS', 'Import RSS generic');
@define('ACTIVATE_AUTODISCOVERY', 'Trimite Referinte legaturilor gasite în acesta însemnare');
@define('RSS_IMPORT_CATEGORY', 'Foloseste aceasta categorie pentru însemnari importate care nu intra în nici o categorie');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Nu am gasit documentul %s.');
@define('CONVERT_HTMLENTITIES', 'Încearca conversia automata a entitatilor HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administrare Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Ai introdus un utilizator sau parola gresita');
@define('PLEASE_ENTER_CREDENTIALS', 'Introdu te rog credentialele tale mai jos.');
@define('AUTOMATIC_LOGIN', 'Salveaza informatia');
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
@define('MEDIA_LIBRARY', 'Librarie Media');
@define('ADD_MEDIA', 'Adauga continut media');
@define('MANAGE_DIRECTORIES', 'Administreaza directoare');
@define('CONFIGURATION', 'Configurare');

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
@define('ENTRY_PUBLISHED_FUTURE', 'Aceasta însemnare nu este publicata înca.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Extensii Bara Laterala');
@define('EVENT_PLUGINS', 'Extensii Evenimente');
@define('CONFIGURE_PLUGINS', 'Configurare Extensii');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Cerinte neîndeplinite: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Actualizare la versiunea %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Click aici ca sa instalezi o noua %s');
@define('ALREADY_INSTALLED', 'Deja instalat');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Modifica însemnari');
@define('EDIT_ENTRY', 'Modifica însemnare');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Ciorna');
@define('PUBLISH', 'Publica');
@define('CONTENT', 'Continut');
@define('ENTRIES_PER_PAGE', 'însemnari pe o pagina');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Însemnari lipicioase');
@define('PAGE_BROWSE_ENTRIES', 'Pagina %s din %s, în total %s însemnari');
@define('FIND_ENTRIES', 'Cauta însemnari');
@define('RIP_ENTRY', 'Însemnarea #%s a fost stearsa.');
@define('NEW_ENTRY', 'Însemnare noua');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Textul însemnarii');
@define('EXTENDED_BODY', 'Textul extins');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'O ciorna a acestei însemnari a fost salvata');
@define('IFRAME_PREVIEW', 'Serendipity creeaza acum o previzualizare a însemnarii...');
@define('IFRAME_WARNING', 'Browser-ul tau nu suporta conceptul de iframe. Te rog deschide fisierul serendipity_config.inc.php si modifica $serendipity[\'use_iframe\'] în FALSE.');
@define('DATE_INVALID', 'Avertisment: Data specificata de tine este invalida. Trebuie sa fie în format YYYY-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Optiuni avansate');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Aceasta legatura nu e facuta pentru a fi folosita. Contine un URI de referinta pentru aceasta însemnare. Poti folosi acest URI pentru a trimite ping- & referinte din blog-ul tau catre aceasta însemnare. Pentru a copia legatura, click dreapta pe ea si alege "Copy Shortcut" în Internet Explorer sau "Copy Link Location" în Mozilla.');
@define('RESET_DATE', 'Reset data');
@define('RESET_DATE_DESC', 'Click aici pentru a reseta data însemnarilor la data curenta');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Administrare utilizatori');
@define('CREATE_NEW_USER', 'Creaza un nou utilizator');
@define('CREATE_NOT_AUTHORIZED', 'Nu poti modifica utilizatori cu acelasi nivel de acces ca al tau');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nu poti creea utilizatori cu nivel de acces mai mare decât al tau');
@define('CREATED_USER', 'Am creat un nou utilizator: %s ');
@define('MODIFIED_USER', 'Am schimbat preferintele pentru utilizatorul %s');
@define('USER_LEVEL', 'Nivel Acces');
@define('WARNING_NO_GROUPS_SELECTED', 'Warning: You did not select any group memberships. This would effectively log you out of the usergroup management, and thus your group memberships werde not changed.');
@define('DELETE_USER', 'Esti pe cale sa stergi utilizatorul #%d %s. Esti sigur? Acest lucru va împiedica afisarea însemnarilor lui pe pagina.');
@define('DELETED_USER', 'Utilizatorul #%d %s a fost sters.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Manage groups');
@define('DELETED_GROUP', 'Group #%d %s deleted.');
@define('CREATED_GROUP', 'A new group %s has been created');
@define('MODIFIED_GROUP', 'The properties of group %s have been changed');
@define('CREATE_NEW_GROUP', 'Create new group');
@define('DELETE_GROUP', 'You are about to delete group #%d %s. Are you serious?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Cauta comentarii');
@define('COMMENTS_FILTER_SHOW', 'Arata');
@define('COMMENTS_FILTER_ALL', 'Toate');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Doar cele aprobate');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Cele care necesita aprobare');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Esti sigur ca vrei sa stergi comentariile selectate?');
@define('PAGE_BROWSE_COMMENTS', 'Pagina %s din %s, în total %s comentarii');
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
@define('CATEGORY_SAVED', 'Categorie salvata');
@define('CATEGORY_ALREADY_EXIST', 'Exista deja o categorie cu numele "%s"');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Categoria #%s a fost stearsa. Articolele vechi au fost mutate în categoria #%s.');
@define('CATEGORY_DELETED', 'Categoria #%s a fost stearsa.');
@define('INVALID_CATEGORY', 'Nu a fost selectata nici o categorie pentru a fi stearsa');
@define('EDIT_THIS_CAT', 'Editare "%s"');
@define('CATEGORY_REMAINING', 'Sterge aceasta categorie si muta însemnarile din ea în aceasta categorie');
@define('PARENT_CATEGORY', 'Categorie parinte');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Creaza o categorie noua');
@define('ALREADY_SUBCATEGORY', '%s este deja o subcategorie pentru %s.');
@define('NO_CATEGORIES', 'Nici o categorie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import date');
@define('EXPORT_ENTRIES', 'Export însemnari');
@define('EXPORT_FEED', 'Export linie completa RSS');
@define('CREATE_THUMBS', 'Refacere Miniaturi');
@define('WARNING_THIS_BLAHBLAH', "ATENTIE:\\nPoate sa dureze mult daca sunt multe imagini fara miniaturi.");
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
@define('TEMPLATE_SET', '\'%s\' a fost aleasa ca tematica implicita');
@define('WARNING_TEMPLATE_DEPRECATED', 'Avertisment: Tematica ta curenta foloseste o metoda veche, te sfatuiesc sa o actualizeze cât de curând posibil');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Custom admin interface available');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Alege aceasta tematica');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Verifica si salveaza');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Elimina plugin-urile selectate');
@define('SAVE_CHANGES_TO_LAYOUT', 'Salveaza schimbarile legate de aspect');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Sincronizez baza de date cu directorul cu imagini');
@define('SYNC_DONE', 'Gata (am sincronizat %s imagini).');
@define('RESIZE_BLAHBLAH', '<b>Redimensioneaza %s</b>');
@define('ORIGINAL_SIZE', 'Marime originala: <i>%sx%s</i> pixel');
@define('RESIZING', 'Redimensionez');
@define('RESIZE_DONE', 'Gata (am redimensionat %s imagini).');
@define('KEEP_PROPORTIONS', 'Pastreaza proportiile');
@define('REALLY_SCALE_IMAGE', 'Chiar vrei sa redimensionezi imaginea? Operatia este ireversibila!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Aici poti ajusta marimea imaginii. Daca vrei sa redimensionezi imaginea proportional, introdu o valoare doar în una din cele 2 câmpuri si apasa tastat TAB --  Voi calcula automat cealalta marime astfel încât proportiile imaginii sa nu fie alterate</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Noua marime: ');
@define('SCALING_IMAGE', 'Scalare %s la %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Am creat directorul <strong>%s</strong>.');
@define('PARENT_DIRECTORY', 'Director parinte');
@define('CONFIRM_DELETE_DIRECTORY', 'Esti sigur ca vrei sa elimini întregul continut al directorului %s?');
@define('ERROR_NO_DIRECTORY', 'Eroare: Directorul %s nu exista');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nu pot sterge un director care nu este gol. Bifeaza "forteaza stergerea" daca vrei sa stergi tot ceea ce contine directorul si trimite cererea din nou. Fisierele din director sunt:');
@define('DIRECTORY_DELETE_FAILED', 'Stergerea directorului %s a esuat. Verifica permisiunile sau mesajele de mai sus.');
@define('DIRECTORY_DELETE_SUCCESS', 'Directorul %s a fost sters cu succes.');
@define('CHECKING_DIRECTORY', 'Verific fisierele din directorul %s');
@define('DELETE_DIRECTORY', 'Sterge director');
@define('DELETE_DIRECTORY_DESC', 'Esti pe cale sa stergi un director care contine fisiere media care e posibil sa fie folosite în unele însemnari.');
@define('FORCE_DELETE', 'Sterge TOATE fisierele din acest director, inclusiv cele necunoscute de Serendipity');
@define('CREATE_DIRECTORY', 'Creare director');
@define('CREATE_NEW_DIRECTORY', 'Creaza un nou director');
@define('CREATE_DIRECTORY_DESC', 'Aici poti crea un nou director în care sa stochezi fisierele tale media. Alege un nume pentru noul director. Optional poti selecta un director parinte pentru el.');
@define('ABOUT_TO_DELETE_FILE', 'Esti pe cale sa stergi <b>%s</b><br />Daca folosesti acest fisier în însemnarile tale, legatura catre ele nu va functiona iar imaginile nu vor fi afisate<br />Esti sigur ca vrei sa continui?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Eroare: Fisierul exista deja pe calculatorul tau!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nu pot localiza fisierul denumit <b>%s</b>, poate ca a fost sters deja ?');
@define('ERROR_FILE_FORBIDDEN', 'Nu ai voie sa încarci fisiere cu continut activ');
@define('REMOTE_FILE_NOT_FOUND', 'Fisierul nu a fost gasit pe serverul de la distanta, esti sigur ca adresa: <b>%s</b> este corecta?');
@define('FILE_FETCHED', '%s luat ca %s');
@define('FILE_UPLOADED', 'Fisierul %s a fost încarcat cu succes ca %s');
@define('DELETE_FILE_FAIL', 'Nu pot sterge fisierul <b>%s</b>');
@define('DELETE_FILE', 'Am sters fisierul cu numele <b>%s</b>');
@define('FOUND_FILE', 'Am gasit fisiere noi/modificate: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Eroare: Noul nume de fisier este deja folosit, alege altul!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'legat direct');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Introdu numele pentru: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Adaug imagine...');
@define('THUMB_CREATED_DONE', 'Miniatura creata.<br/>Gata.');
@define('THUMBNAIL_USING_OWN', 'Folosesc %s ca miniatura pentru ca este deja prea mica.');
@define('THUMBNAIL_FAILED_COPY', 'Am vrut sa folosesc %s ca miniatura, dar nu am reusit sa o copiez!');
@define('DELETE_THUMBNAIL', 'Am sters miniatura cu numele <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Am dat peste o eroare necunoscuta, nu am încarcat fisierul. Poate ca marimea fisierului este mai mare decât maximul admis de server. Ia legatura cu ISP-ul tau sau editeaza fisierul php.ini pentru a permite imagini mai mari.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Fisier legat direct.<br />Gata.');
@define('DELETE_HOTLINK_FILE', 'Am sters fisierul legat direct cu numele <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nu pot executa: "%s", eroare: %s, return var: %d');
@define('SKIPPING_FILE_EXTENSION', 'Sar peste fisier: Lipseste extensia pentru %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Sar peste fisier: %s nu poate fi citit.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Vreau sa folosesc miniatura în însemnarea mea.');
@define('I_WANT_BIG_IMAGE', 'Vreau sa folosesc imaginea originala în însemnarea mea.');
@define('I_WANT_NO_LINK', 'Vreau sa apara ca o imagine');
@define('I_WANT_IT_TO_LINK', 'Vreau sa apara ca o legatura catre aceasta adresa:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Marime imagine');
@define('IMAGE_ALIGNMENT', 'Aliniere imagine');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Insertie imagine');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Ai ales %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Roteste imaginea 90 grade în sens invers acelor de ceas');
@define('IMAGE_ROTATE_RIGHT', 'Rotate imaginea 90 grade în sensul acelor de ceas');
@define('MEDIA_RENAME', 'Redenumeste acest fisier');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Nume Fisier');
@define('SORT_ORDER_EXTENSION', 'Extensie Fisier');
@define('SORT_ORDER_SIZE', 'Marime Fisier');
@define('SORT_ORDER_WIDTH', 'Latime Imagine');
@define('SORT_ORDER_HEIGHT', 'Înaltime Imagine');
@define('SORT_ORDER_DATE', 'Data încarcarii');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Adauga un fisier librariei tale multimedia:</b><p>Aici poti încarca fisiere media de pe calculatorul tau, sau îmi poti spune de unde sa le iau de pe web! Daca nu ai o imagine potrivita, <a href="https://images.google.com/" target="_blank">cauta imagini pe google</a> care corespund gândurilor tale, rezultatele sunt în majoritatea cazurilor folositoare si amuzante :) Dar atentie, multe imagini sunt protejate de drepturile de autor, deci ar trebui sa întrebi înainte sa le folosesti.</p><p><b>Alege metoda:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Introdu adresa unui fisier pentru a-l aduce aici:');
@define('ENTER_MEDIA_UPLOAD', 'Alege fisierul pe care vrei sa-l încarci:');
@define('SAVE_FILE_AS', 'Salveaza fisierul ca:');
@define('STORE_IN_DIRECTORY', 'Stocheaza în urmatorul director: ');
@define('IMAGE_MORE_INPUT', 'Add more images');
@define('ENTER_MEDIA_URL_METHOD', 'Metoda descarcare:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Nota: Daca alegi sa faci o legatura catre server, asigura-te ca ai permisiunea sa folosesti continut de pe acel site, sau ca situl e al tau. Aceasta optiune îti permite sa folosesti imagini de pe alte situri fara a le stoca local.');
@define('FETCH_METHOD_IMAGE', 'Descarca imaginea pe server');
@define('FETCH_METHOD_HOTLINK', 'Leaga direct catre server');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Redimenzioneaza aceasta imagine');
@define('MEDIA_DELETE', 'Sterge acest fisier');
@define('FILES_PER_PAGE', 'Fisiere pe o pagina');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nu am gasit nici o imagine');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'toate directoarele');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Configuratia a fost scrisa si salvata');
@define('DIAGNOSTIC_ERROR', 'Am gasit niste erori în timp ce rulam niste teste cu informatiile introduse de tine:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Preferinte baza de date');
@define('INSTALL_CAT_DB_DESC', 'Aici poti introduce informatiile referitoare la baza de date. Serendipity are nevoie de aceste setari pentru a functiona');
@define('INSTALL_DBTYPE', 'Tipul bazei de date');
@define('INSTALL_DBTYPE_DESC', 'Tipul bazei de date');
@define('INSTALL_DBHOST', 'Adresa');
@define('INSTALL_DBHOST_DESC', 'Adresa la care se gaseste baza de date');
@define('INSTALL_DBUSER', 'Utilizator');
@define('INSTALL_DBUSER_DESC', 'Utilizatorul folosit pentru conectarea la baza de date');
@define('INSTALL_DBPASS', 'Parola');
@define('INSTALL_DBPASS_DESC', 'Parola pentru utilizatorul de mai sus');
@define('INSTALL_DBNAME', 'Nume baza de date');
@define('INSTALL_DBNAME_DESC', 'Numele bazei tale de date');
@define('INSTALL_DBPREFIX', 'Prefixul tabelelor');
@define('INSTALL_DBPREFIX_DESC', 'Prefixul tabelelor din baza de date, ex. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Foloseste conexiuni persistente');
@define('INSTALL_DBPERSISTENT_DESC', 'Permite folosirea conexiunilor persistente la baza de date, citeste mai multe <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">aici</a>. Nu recomandam aceasta optiune');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cai');
@define('INSTALL_CAT_PATHS_DESC', 'Diferite cai catre directoare si fisiere esentiale. Nu uita slash-ul de la capat pentru directoare!');
@define('INSTALL_FULLPATH', 'Cale completa');
@define('INSTALL_FULLPATH_DESC', 'Calea completa absoluta catre instalarea serendipity');
@define('INSTALL_UPLOADPATH', 'Cale Upload');
@define('INSTALL_UPLOADPATH_DESC', 'Toate fisierele încarcate vor fi puse aici, relativ la \'Cale completa\' - tipic: \'uploads/\'');
@define('INSTALL_RELPATH', 'Cale relativa');
@define('INSTALL_RELPATH_DESC', 'Calea catre serendipity pentru web, tipic \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Cale relativa catre tematici');
@define('INSTALL_RELTEMPLPATH_DESC', 'Calea catre directorul care contine tematicile tale - Relativa la \'Cale relativa\'');
@define('INSTALL_RELUPLOADPATH', 'Cale relativa upload');
@define('INSTALL_RELUPLOADPATH_DESC', 'Calea catre fisierele încarcate pentru web - Relativa la \'Cale relativa\'');
@define('INSTALL_URL', 'URL catre blog');
@define('INSTALL_URL_DESC', 'URL de baza catre instalarea serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetectie adresa HTTP');
@define('INSTALL_AUTODETECT_URL_DESC', 'Daca e activata, Serendipity va verifica ca adresa HTTP folosita de cititor sa corespunda cu optiunea ta BaseURL. Activând aceasta optiune vei putea folosi mai multe domenii pentru acest blog, si sa folosesti domeniul pentru toate legaturile de pe acest blog.');
@define('INSTALL_INDEXFILE', 'Fisier index');
@define('INSTALL_INDEXFILE_DESC', 'Numele fisierului index pentru serendipity');

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
@define('INSTALL_CAT_SETTINGS', 'Setari generale');
@define('INSTALL_CAT_SETTINGS_DESC', 'Personalizeaza modul în care functioneaza Serendipity');
@define('INSTALL_USERNAME', 'Utilizator Admin');
@define('INSTALL_USERNAME_DESC', 'Nume de utilizator pentru administrator');
@define('INSTALL_PASSWORD', 'Parola Admin');
@define('INSTALL_PASSWORD_DESC', 'Parola pentru administrator');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Nume real');
@define('USERCONF_REALNAME_DESC', 'Numele complet al autorului. Acesta este numele vizibil cititorilor');
@define('INSTALL_EMAIL', 'Email Admin');
@define('INSTALL_EMAIL_DESC', 'Adresa de email pentru administratorul blog-ului');
@define('INSTALL_SENDMAIL', 'Trimit mesaje email catre admin?');
@define('INSTALL_SENDMAIL_DESC', 'Vrei sa primesti mesaje pe email când sunt adaugate comentarii la însemnarile tale?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nume Blog');
@define('INSTALL_BLOGNAME_DESC', 'Titlu pentru blog');
@define('INSTALL_BLOGDESC', 'Desriere blog');
@define('INSTALL_BLOGDESC_DESC', 'O descriere pentru acest blog');
@define('INSTALL_BLOG_EMAIL', 'Blog\'s E-Mail address');
@define('INSTALL_BLOG_EMAIL_DESC', 'This configures the E-Mail address that is used as the "From"-Part of outgoing mails. Be sure to set this to an address that is recognized by the mailserver used on your host - many mailservers reject messages that have unknown From-addresses.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Limba');
@define('INSTALL_LANG_DESC', 'Alege limba pentru acest blog');
@define('INSTALL_CHARSET', 'Charset selection');
@define('INSTALL_CHARSET_DESC', 'Here you can toggle UTF-8 or native (ISO, EUC, ...) charactersets. Some languages only have UTF-8 translations so that setting the charset to "Native" will have no effects. UTF-8 is suggested for new installations. Do not change this setting if you have already made entries with special characters - this may lead to corrupt characters. Be sure to read more on https://docs.s9y.org/docs/developers/internationalization.html about this issue.');
@define('INSTALL_CAL', 'Calendar Type');
@define('INSTALL_CAL_DESC', 'Choose your desired Calendar format');
@define('AUTOLANG', 'Foloseste ca limba implicita cea setata de browser-ul cititorului');
@define('AUTOLANG_DESC', 'Daca e activata, aceasta optiune va seta automat limba însemnarii tale si a interfetei acestui blog conform limbii cerute de browser-ul cititorului.');
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
@define('INSTALL_CAT_DISPLAY', 'Aspect si optiuni');
@define('INSTALL_CAT_DISPLAY_DESC', 'Personalizeaza felul în care este \'îmbracat\' Serendipity');
@define('INSTALL_FETCHLIMIT', 'Însemnari de afisat pe prima pagina');
@define('INSTALL_FETCHLIMIT_DESC', 'Numarul de însemnari afisate pe fiecare pagina');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Foloseste pagini comprimate cu gzip');
@define('INSTALL_USEGZIP_DESC', 'Pentru a mari viteza de livrare a paginilor, putem comprima paginile si sa le trimitem astfel cititorului, daca browser-ul lui suporta aceasta functionalitate. Aceasta optiune este recomandata');
@define('INSTALL_XHTML11', 'Forteaza compatibilitatea cu XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Vrei sa fortezi compatibilitatea cu XHTML 1.1 (poate cauza probleme pentru interfata/functionalitate în browserele mai vechi)');
@define('INSTALL_POPUP', 'Permite folosirea ferestrelor popup');
@define('INSTALL_POPUP_DESC', 'Vrei sa folosesti ferestre popup pentru comentarii, referinte, etc ...?');
@define('INSTALL_EMBED', 'serendipity este integrat?');
@define('INSTALL_EMBED_DESC', 'Daca vrei sa incluzi serendipity într-o pagina normala, bifeaza aici pentru a ignora antetele si a afisa doar continutul. Poti folosi optiunea indexFile pentru a folosi o clasa unde poti pune antetele paginii în care e integrat serendipity. Vezi fisierul README pentru mai multe informatii!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Permite clickul pe legaturile catre exterior?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"nu": Legaturile catre exterior neverificate (Top Iesiri, Top Referenti, Comentarii) sunt afisate doar ca text pentru a preveni spam de google (recomandat). "da": Legaturile catre exterior neverificate sunt afisate ca legaturi si pot fi urmate cu un click pe ele. Aceasta setare poate fi suprascrisa de setarile extensiei Bara Laterala!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Referenti blocati');
@define('INSTALL_BLOCKREF_DESC', 'Exista niste adrese care nu vrei sa apara în lista? Separa lista de adrese cu \';\' si ai în vedere faptul ca adresele sunt blocate dupa comparatii cu subsiruri!');
@define('INSTALL_REWRITE', 'Rescriere URL');
@define('INSTALL_REWRITE_DESC', 'Alege ce reguli vrei sa folosesti când generezi un URL. Activând aceasta optiune va face un URL sa arate mai frumos si va fi indexat preferential de motoare de cautare ca google. Serverul web trebuie sa aiba instalat mod_rewrite sau "AllowOverride All" pentru directorul serendipity. Optiunea implicita este auto-detectie');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Decalaj timp server');
@define('INSTALL_OFFSET_DESC', 'Introdu numarul de ore diferenta între data serverului( acum: %clock%) si data calculatorului de pe care scrii însemnarile');
@define('INSTALL_SHOWFUTURE', 'Arata însemnarile cu data în viitor');
@define('INSTALL_SHOWFUTURE_DESC', 'Daca este activata, aceasta optiune va permite afisarea tuturor însemnarilor cu data în viitor în acest blog. Optiunea implicita este sa mentin însemnarile cu data în viitor ascunse si sa le afisez doar când s-a ajuns la data publicarii.');
@define('INSTALL_ACL', 'Apply read-permissions for categories');
@define('INSTALL_ACL_DESC', 'If enabled, the usergroup permission settings you setup for categories will be applied when logged-in users view your blog. If disabled, the read-permissions of the categories are NOT applied, but the positive effect is a little speedup on your blog. So if you don\'t need multi-user read permissions for your blog, disable this setting.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Arata toate articolele cu corp extins din linia de informare RSS');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Imagine pentru RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'Adresa unei imagini în format GIF/JPEG/PNG, daca e disponibila. (gol=serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Latime imagine');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'în pixeli, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Înaltime imagine');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'în pixeli, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Arata adresele de email?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Field "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Adresa de e-mail a editorului blogului, daca e disponibila. (gol=ascuns) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Field "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Adresa de e-mail a webmaster-ului, daca e disponibila. (gol=ascuns) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Câmp "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Numarul de minute dupa care blog-ul tau nu va mai fi încarcat de situri/aplicatii straine (empty: ascuns) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Câmp "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Includ câmpul "pubDate" la un canal RSS, pentru a arata data ultimei însemnari?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Setari Conversie Imagini');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Aici sunt stocate informatii despre cum trateaza serendipity imaginile');
@define('INSTALL_IMAGEMAGICK', 'Foloseste ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Ai ImageMagick instalat pe server si vrei sa-l folosesti pentru redimensionarea imaginilor?');
@define('INSTALL_IMAGEMAGICKPATH', 'Calea catre executabilul convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Calea completa si numele executabilului folosit de ImageMagick pentru conversia imaginilor');
@define('INSTALL_THUMBSUFFIX', 'Sufix Miniaturi');
@define('INSTALL_THUMBSUFFIX_DESC', 'Miniaturile vor fi numite dupa formatul: numeoriginal.[suffix].extensie');
@define('INSTALL_THUMBWIDTH', 'Dimensiuni miniaturi');
@define('INSTALL_THUMBWIDTH_DESC', 'Valori statice maxime pentru miniaturile auto-generate');
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
@define('USERCONF_CAT_PERSONAL', 'Detalii personale');
@define('USERCONF_CAT_PERSONAL_DESC', 'Schimba detaliile tale personale');
@define('USERCONF_USERNAME', 'Utilizatorul tau');
@define('USERCONF_USERNAME_DESC', 'Utilizatorul cu care te autentifici în blog');
@define('USERCONF_PASSWORD', 'Parola ta');
@define('USERCONF_PASSWORD_DESC', 'Parola pe care vrei sa o folosesti pentru a te autentifica cu utilizatorul de mai sus în blog');
@define('USERCONF_CHECK_PASSWORD', 'Old Password');
@define('USERCONF_CHECK_PASSWORD_DESC', 'If you change the password in the field above, you need to enter the current user password into this field.');
@define('USERCONF_USERLEVEL', 'Nivel acces');
@define('USERCONF_USERLEVEL_DESC', 'Acest nivel este folosit pentru a determina ce fel de acces are un utilizator la acest blog');
@define('USERCONF_GROUPS', 'Group Memberships');
@define('USERCONF_GROUPS_DESC', 'This user is a member of the following groups. Multiple memberships are possible.');
@define('USERCONF_EMAIL', 'Adresa e-mail');
@define('USERCONF_EMAIL_DESC', 'Adresa ta de e-mail');
@define('INSTALL_WYSIWYG', 'Foloseste editorul WYSIWYG (Ceea ce vezi este ceea ce obtii)');
@define('INSTALL_WYSIWYG_DESC', 'Vrei sa folosesti editorul WYSIWYG? (Merge on IE5+, Firefox si partial în Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Trimite notificari comentarii?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Vrei sa primesti notificari pe email când sunt adaugate comentarii la însemnarile tale?');
@define('USERCONF_SENDTRACKBACKS', 'Trimite notificari referinte?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Vrei sa primesti notificari pe email când sunt adaugate referinte la însemnarile tale?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Drepturi: Publica însemnari?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Are dreptul acest utilizator sa publice însemnari?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Setari implicite pentru însemnari');
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
@define('ENTRY_SAVED', 'Însemnarea ta a fost salvata');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Cascadat');
@define('COMMENTS_VIEWMODE_LINEAR', 'Liniar');
@define('DISPLAY_COMMENTS_AS', 'Arata comentariile ca');
@define('COMMENTS_DISABLE', 'Nu permite comentarii la aceasta însemnare');
@define('COMMENTS_ENABLE', 'Permite comentarii la aceasta însemnare');
@define('COMMENTS_CLOSED', 'Autorul nu permite comentarii la aceasta însemnare');
@define('VIEW_EXTENDED_ENTRY', 'Continua sa citesti "%s"');
@define('TRACKBACK_SPECIFIC', 'URI de referinta pentru aceasta însemnare');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'vad tot');
@define('VIEW_TOPICS', 'vad teme');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Teme de');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Însemnarile nu au putut fi introduse cu succes!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Pastreaza informatiile? ');
@define('SUBMIT_COMMENT', 'Adauga Comentariu');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Aboneaza-te la aceasta însemnare');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Comentariul #%s pare a fi aprobat deja');
@define('COMMENT_EDITED', 'Comentariul selectat a fost editat');
@define('COMMENTS_WILL_BE_MODERATED', 'Comentariile adaugate vor fi trimise spre aprobare pentru a putea fi afisate.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Avertisment: Acest comentariu necesita aprobare pentru a putea fi afisat');
@define('DELETE_COMMENT', 'Sterge comentariu');
@define('APPROVE_COMMENT', 'Aproba comentariu');
@define('REQUIRES_REVIEW', 'Necesita aprobare');
@define('COMMENT_APPROVED', 'Comentariul #%s a fost aprobat cu succes');
@define('COMMENT_DELETED', 'Comentariul #%s a fost sters cu succes');
@define('COMMENTS_MODERATE', 'Comentariile & referintele la aceasta însemnare necesita aprobare');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Avertisment: Aceasta referinta necesita aprobare pentru a putea fi afisata');
@define('DELETE_TRACKBACK', 'Sterge referinta');
@define('APPROVE_TRACKBACK', 'Aproba referinta');
@define('TRACKBACK_APPROVED', 'Referinta #%s a fost aprobata cu succes');
@define('TRACKBACK_DELETED', 'Referinta #%s a fost stearsa cu succes');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Însemnare');
@define('VIEW_COMMENT', 'Vezi comentariu');
@define('VIEW_ENTRY', 'Vezi însemnare');
@define('LINK_TO_ENTRY', 'Legatura catre o însemnare');
@define('LINK_TO_REMOTE_ENTRY', 'Legatura catre o însemnare de pe alt blog');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Trimit URI de referinta la %s...');
@define('TRACKBACK_SENT', 'Referit cu succes');
@define('TRACKBACK_FAILED', 'Eroare referire: %s');
@define('TRACKBACK_NOT_FOUND', 'Nu am gasit URI de referinta.');
@define('TRACKBACK_URI_MISMATCH', 'Un URI descoperit automat nu corespunde cu acest URI destinatie.');
@define('TRACKBACK_CHECKING', 'Verific <u>%s</u> pentru referinte posibile...');
@define('TRACKBACK_NO_DATA', 'Destinatia nu contine date');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Nu am trimis referinta: Nu am putut deschide o conexiune la %s pe portul %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Comentariu nou la însemnare "%s"');
@define('SUBSCRIPTION_MAIL', "Hello %s,\n\nA fost adaugat un nou comentariu la o însemnare la care tu te-ai abonat pe \"%s\", cu titlul \"%s\"\nNumele celui care a lasat comentariul este: %s\n\nPoti citi comentariul aici: %s\n\nPoti renunta la abonamentul la aceasta însemnare cu un click aici: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Salut %s,\n\nO noua referinta a fost adaugata la o însemnare la care te-ai abonat pe \"%s\", cu titlul \"%s\"\nNumele celui care a facut referinta este: %s\n\nPoti gasi însemnarea aici: %s\n\nPoti renunta la abonamentul la aceasta însemnare cu un click aici: %s\n");
@define('SIGNATURE', "\n-- \n%s e bazat pe Serendipity.\nCel mai bun blog din lume, îl poti folosi si tu.\nViziteaza <https://s9y.org> ca sa afli cum.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'A fost adaugat un nou comentariu la blog-ul tau "%s", la însemnarea cu titlul "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'A fost adaugata o noua referinta la însemnarea din blog-ul tau cu titlul "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Ai urmatoarele optiuni:');
@define('NEW_TRACKBACK_TO', 'Referinta noua la');
@define('NEW_COMMENT_TO', 'Comentariu nou la');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nu am gasit nici o însemnare cautând dupa %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Cautând dupa %s am gasit %s rezultate:');
@define('SEARCH_TOO_SHORT', 'Your search-query must be longer than 3 characters. You can try to append * to shorter words, like: s9y* to trick the search into using shorter words.');
@define('SEARCH_ERROR', 'Functia de cautare nu a functionat cum trebuie. Nota pentru administratorul acestui blog: Acest lucru se poate întâmpla din cauza lipsei unor chei index din baza de date. Pe sisteme cu MySQL contul cu care te conectezi la baza de date trebuie sa aiba privilegii sa execute: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Eroarea specifica raportata de server este: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Comentariul tau nu contine nimic, mergi %sînapoi%s si încearca din nou');
@define('COMMENT_NOT_ADDED', 'Comentariul tau nu a putut fi adaugat, deoarece autorul nu permite comentarii la aceasta însemnare. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Comentarii de la');

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
@define('CATEGORY_PLUGIN_DESC', 'Arata o lista cu categoriile.');
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
@define('CATEGORIES_TO_FETCH', 'Categorii de preluat');
@define('CATEGORIES_TO_FETCH_DESC', 'De la ce autor sa preiau categorii?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Shows a list of authors');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Show number of articles next to author name?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'If this option is enabled, the number of articles by this author is shown next to the authors name in parentheses.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Sindicat');
@define('SHOWS_RSS_BLAHBLAH', 'Arata legaturile pentru RSS');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('SYNDICATION_PLUGIN_091', 'Date RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'Date RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'Date RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Comentarii RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'Date ATOM 0.3');
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
@define('ARCHIVE_COUNT', 'Numarul de elemente din lista');
@define('ARCHIVE_COUNT_DESC', 'Numarul total de luni, saptamâni sau zile de afisat');
@define('ARCHIVE_FREQUENCY', 'Frecventa elemente Calendar');
@define('ARCHIVE_FREQUENCY_DESC', 'Intervalul de calendar folosit între fiecare element din lista');
@define('BROWSE_ARCHIVES', 'Rasfoieste arhive dupa luna');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Arata "Serendipity" ca text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Va afisa "Serendipity Weblog" ca text');
@define('POWERED_BY_SHOW_IMAGE', 'Arata "Serendipity" ca un logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Va afisa imaginea logo pentru Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Promoveaza originea blogului tau');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Foloseste https pentru autentificare');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Permite ca legatura pentru autentificare sa arate catre o locatie https. Serverul tau web trebuie sa suporte acest mod!');
@define('SUPERUSER', 'Administrare Blog');
@define('SUPERUSER_OPEN_ADMIN', 'Deschide partea de administrare');
@define('SUPERUSER_OPEN_LOGIN', 'Deschide ecranul de autentificare');
@define('ALLOWS_YOU_BLAHBLAH', 'Ofera o legatura catre administrarea acestui blog în Bara Laterala');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Calendar');
@define('CALENDAR_BOW_DESC', 'Ziua din saptamâna care ar trebui considerata începutul saptamânii. Implicit e Luni');
@define('QUICKJUMP_CALENDAR', 'Calendar Rapid');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Începutul saptamânii');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Enable Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'If enabled, plugins can hook into the calendar to display their own events highlighted. Only enable if you have installed plugins that need this, otherwise it just decreases performance.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Cauta dupa o intrare');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Mentine un fragment HTML în bara laterala');
@define('THE_NUGGET', 'Fragmentul HTML!');
@define('BACKEND_TITLE', 'Additional information in Plugin Configuration screen');
@define('BACKEND_TITLE_FOR_NUGGET', 'Here you can define a custom string which is displayed in the Plugin Configuration screen together with the description of the HTML Nugget plugin. If you have multiple HTML nuggets with an empty title, this helps to distinct the plugins from another.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Arata intrarile din Top Iesiri/Referenti ca legaturi?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"nu": Iesirile si Referintele sunt afisate doar ca text pentru a evita spam-ul de pe google. "da": Iesirile si Referentii sunt afisati ca legaturi. "implicit": Foloseste setarile globale (recomandat).');
@define('HAVE_TO_BE_LOGGED_ON', 'Trebuie sa fii autentificat pentru a accesa aceasta pagina');
@define('WELCOME_TO_ADMIN', 'Bun venit în Suita de Administrare Serendipity.');
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
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity nu e instalat înca. Îl poti <a href="%s">instala</a> acum.');
@define('COMMENT_ADDED_CLICK', 'Click %saici pentru a te întoarce%s la comentarii, si %saici ca sa închizi%s aceasta fereastra.');
@define('COMMENT_NOT_ADDED_CLICK', 'Click %saici pentru a te întoarce%s la comentarii, si %saici ca sa închizi%s aceasta fereastra.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'Un URI destinatie depaseste marimea maxima de %s bytes.');
@define('CLICK_FILE_TO_INSERT', 'Click pe fisierul pe care vrei sa-l folosesti:');
@define('SELECT_FILE', 'Alege fisierul pe care vrei sa-l folosesti');
@define('MANAGE_IMAGES', 'Administrare Imagini');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Sau');
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
@define('IMPORT_WELCOME', 'Bun venit la utilitarul pentru import Serendipity');
@define('USER_SELF_INFO', 'Autentificat ca %s (%s)');
@define('IMPORT_WHAT_CAN', 'Aici poti culege însemnari din alte blog-uri');
@define('IMPORT_SELECT', 'Alege software-ul folosit de blog-ul de unde vrei sa culegi datele');
@define('MANAGE_STYLES', 'Configurare Teme');
@define('SELECT_A_PLUGIN_TO_ADD', 'Alege extensia pe care vrei sa o instalezi');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Mai jos e o lista cu extensiile instalate');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Abandoneaza acum');
@define('DELETE_SELECTED_COMMENTS', 'Sterge comentariile selectate');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Cauta continut media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Eroare: Vechiul fisier nu exista!');
@define('ERROR_SOMETHING', 'Eroare: Ceva nu e în regula.');
@define('DIRECT_LINK', 'Legatura directa pentru aceasta însemnare');
@define('SELECT_TEMPLATE', 'Selecteaza tema pe care vrei sa o folosesti pentru blogul tau');
@define('DATABASE_ERROR', 'eroare serendipity: nu m-am putut conecta la baza de date - ies.');
@define('LIMIT_TO_NUMBER', 'Câte elemente sa afisez?');
@define('DIRECTORIES_AVAILABLE', 'În lista subdirectoarelor disponibile poti face click pe orice nume de director pentru a creea un nou director în acea structura.');
@define('CATEGORY_INDEX', 'Mai jos e o lista de categorii disponibile pentr însemnarile tale');
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
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');