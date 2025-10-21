<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
/* vim: set sts=4 ts=4 expandtab : */
$i18n_filename_from = array(' ', 'a', 'A', '±', '¡', 'b', 'B', 'c', 'C', 'æ', 'Æ', 'd', 'D', 'e', 'E', 'ê', 'Ê', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', '³', '£', 'm', 'M', 'n', 'N', 'ñ', 'Ñ', 'o', 'O', 'ó', 'Ó', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', '¶', '¦', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '¼', '¬', '¿', '¯');
$i18n_filename_to   = array('_', 'a', 'A', 'a', 'A', 'b', 'B', 'c', 'C', 'c', 'C', 'd', 'D', 'e', 'E', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'l', 'L', 'm', 'M', 'n', 'N', 'n', 'N', 'o', 'O', 'o', 'O', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', 'z', 'Z', 'z', 'Z');

@define('LANG_CHARSET', 'ISO-8859-2');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'pl.UTF-8, pl.UTF8, pl_PL.UTF-8, pl_PL.UTF8, olish, pl, pl_PL');
@define('DATE_FORMAT_ENTRY', '%A, %B %e. %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'Podgl±d');
@define('DATE', 'Data');
@define('TIME', 'Time');
@define('APPEARANCE', 'Wygl±d');
@define('LOGIN', 'Login');
@define('LOGOUT', 'Logout');
@define('LOGGEDOUT', 'Wylogowany(a).');
@define('CREATE', 'Stwórz');
@define('BACK', 'Wstecz');
@define('FORWARD', 'Dalej');
@define('ANONYMOUS', 'Anonymous');
@define('RECENT', 'Ostatnie...');
@define('OLDER', 'Starsze...');
@define('DONE', 'Zrobione');
@define('TITLE', 'Tytu³');
@define('DESCRIPTION', 'Opis');
@define('PLACEMENT', 'Strona');
@define('DELETE', 'Usuñ');
@define('SAVE', 'Zapis');
@define('UP', 'Góra');
@define('DOWN', 'Dó³');
@define('PREVIOUS', 'Poprzedni');
@define('NEXT', 'Nastêpny');
@define('ENTRIES', 'wpisy');
@define('CATEGORIES', 'Kategorie');
@define('NAME', 'Imiê');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Strona');
@define('COMMENT', 'Komentarz');
@define('VIEW', 'Ogl±daj');
@define('HIDE', 'Ukryj');
@define('WEEK', 'Tydzieñ');
@define('WEEKS', 'Tygodnie');
@define('MONTHS', 'Miesi±ce');
@define('DAYS', 'Dni');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Sukces');
@define('COMMENTS', 'Komentarze');
@define('ADD_COMMENT', 'Dodaj komentarz');
@define('NO_COMMENTS', 'Brak komentarzy');
@define('POSTED_BY', 'Zamie¶ci³');
@define('ON', 'o');
@define('NO_CATEGORY', 'Brak kategorii');
@define('CATEGORY', 'Kategoria');
@define('EDIT', 'Edycja');
@define('GO', 'Start!');
@define('YES', 'Tak');
@define('NO', 'Nie');
@define('NOT_REALLY', 'Nie');
@define('DUMP_IT', 'Tak');
@define('IN', 'w');
@define('AT', 'o');
@define('LEFT', 'Lewy panel');
@define('RIGHT', 'Prawy panel');
@define('CENTER', 'center');
@define('ARCHIVES', 'Archiwa');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Wyszukaj na stronie');
@define('TRACKBACKS', '¦lady');
@define('TRACKBACK', '¦lad');
@define('NO_TRACKBACKS', 'Brak ¦ladów');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Fragment');
@define('TRACKED', 'Przes³any');
@define('USER', 'U¿ytkownik');
@define('USERNAME', 'U¿ytkownik');
@define('PASSWORD', 'Has³o');
@define('HIDDEN', 'Wtyczka ukryta');
@define('IMAGE', 'Obrazek');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'wersja');
@define('INSTALL', 'Zainstaluj');
@define('REPLY', 'Odpowiedz');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'B³±d');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Wymu¶');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administracja');
@define('ADMIN_FRONTPAGE', 'Strona startowa');
@define('QUOTE', 'Cytat');
@define('NONE', '¿adne');
@define('GROUP', 'Grupa');
@define('AUTHORS', 'Autorzy');
@define('UPGRADE', 'Uaktualnienie');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Wszyscy autorzy');
@define('PREVIOUS_PAGE', 'poprzednia strona');
@define('NEXT_PAGE', 'nastêpna strona');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Wszystkie kategorie');
@define('LAST_UPDATED', 'Ostatnio zaktualizowany');
@define('IP_ADDRESS', 'adres IP');
@define('CHARSET', 'Kodowanie');
@define('REFERER', 'Referer');
@define('APPROVE', 'Zaaprobuj');
@define('NOT_FOUND', 'Nie znaleziono');
@define('WRITABLE', 'Zapisywalny');
@define('NOT_WRITABLE', 'Niezapisywalny');
@define('WELCOME_BACK', 'Witaj,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Sortuj');
@define('SORT_ORDER', 'Porz±dek sortowania');
@define('SORT_ORDER_ASC', 'Rosn±co');
@define('SORT_ORDER_DESC', 'Malej±co');
@define('FILTERS', 'Filtry');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Rozwiñ/zwiñ wszystkie');
@define('TOGGLE_OPTION', 'Prze³±cz opcjê');
@define('IN_REPLY_TO', 'Odpowied¼');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Katalog');
@define('BACK_TO_BLOG', 'Powrót do bloga');
@define('HTML_NUGGET', 'Pole HTML');
@define('TITLE_FOR_NUGGET', 'Tytu³ elementu wy¶wietlany na Panelu Bocznym');
@define('COMMENT_ADDED', 'Twój komentarz zosta³ dodany');
@define('ENTRIES_FOR', 'Wpisy z %s');
@define('NO_ENTRIES_TO_PRINT', 'Brak wpisów do wy¶wietlenia');
@define('COMMENT_DELETE_CONFIRM', 'Na pewno usun±æ komentarz #%d, napisany przez %s?');
@define('DELETE_SURE', 'Na pewno usun±æ #%s ?');
@define('MEDIA_FULLSIZE', 'Pe³en rozmiar');
@define('SIDEBAR_PLUGIN', 'Wtyczkê Panelu Bocznego');
@define('EVENT_PLUGIN', 'Wtyczkê Zdarzenia');
@define('PLUGIN_ITEM_DISPLAY', 'Gdzie element ma byæ wy¶wietlany?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Tylko w pe³nym widoku wpisu');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Tylko na stronie g³ównej');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Zawsze');
@define('DIRECTORY_WRITE_ERROR', 'Nie mogê zapisywaæ w katalogu %s. Proszê, sprawd¼ prawa dostêpu do katalogu.');
@define('FILE_WRITE_ERROR', 'Nie mogê zapisywaæ do pliku %s.');
@define('INCLUDE_ERROR', 'b³±d Serendipity: nie mo¿na by³o za³±czyæ %s - wyj¶cie.');
@define('DO_MARKUP', 'Formatuj za pomoc± wtyczek Znaczników');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Format daty');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Format daty wpisu, u¿ywa zmiennych funkcji strftime() jêzyka PHP. (Standardowo: "%s")');
@define('APPLY_MARKUP_TO', 'Zastosuj znacznik do %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML Button');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Linki do feedów XML bêd± pokazywane za pomoc± tego obrazka. Pozostaw puste pole dla ustawieñ domy¶lnych lub wpisz \'none\' aby nie pokazywaæ obrazka.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Usuwanie plików %s...');
@define('SETTINGS_SAVED_AT', 'Ustawienia zosta³y zapisane o %s');
@define('INVERT_SELECTIONS', 'Odwróæ wybór');

@define('PERSONAL_SETTINGS', 'Ustawienie osobiste');
@define('DO_MARKUP_DESCRIPTION', 'Zastosuj formatowania wtyczek Znaczników do tekstu (emotikonki, skróty znaczników tworzone przez u¿ycie *, /, _, ...). Wy³±czenie tej opcji spowoduje zachowanie kodu HTML w tek¶cie.');
@define('BASE_DIRECTORY', 'Katalog bazowy');
@define('PERM_READ', 'Uprawnienia odczytu');
@define('PERM_WRITE', 'Uprawnienia zapisu');
@define('PERM_DENIED', 'Dostêp zabroniony.');
@define('CURRENT_AUTHOR', 'Bie¿±cy Autor');
@define('PLUGIN_ACTIVE', 'Wtyczki aktywne');
@define('PLUGIN_INACTIVE', 'Wtyczki nieaktywne');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark (dodaj do Ulubionych) ten link i u¿yj na dowolnej stronie, o której chcesz blogowaæ, by szybko dostaæ siê do swojego bloga.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalacja Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Witaj w Instalacji Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Najpierw przyjrzê siê Twojej obecnej konfiguracji i spróbujê rozpoznaæ ewentualne problemy z kompatybilno¶ci±');
@define('ERRORS_ARE_DISPLAYED_IN', 'Kolory oznaczaj±: %s - b³êdy, %s - rekomendacje, %s - sukcesy');
@define('RED', 'czerwony');
@define('YELLOW', '¿ó³ty');
@define('GREEN', 'zielony');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s raport przed instalacj±');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'Instalacja PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'System operacyjny');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'konfiguracja php.ini');
@define('RECOMMENDED', 'Rekomendowane');
@define('ACTUAL', 'Aktualne');
@define('PERMISSIONS', 'Uprawnienia');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Prawa dostepu mog± byæ ustawione przez uruchomienie shellowej komendy: `<em>%s</em>` na katalogu lub przez u¿ycie klienta FTP');
@define('PROBLEM_DIAGNOSTIC', 'Z powodu problemów, które zosta³y rozpoznane podczas przeprowadzania procedur diagnostycznych, nie mo¿esz kontynuowaæ instalacji dopóki powy¿sze problemy nie zostan± usuniête.');
@define('SELECT_INSTALLATION_TYPE', 'Wybierz metodê instalacji');
@define('RECHECK_INSTALLATION', ' Sprawd¼ ponownie instalacjê');
@define('SIMPLE_INSTALLATION', 'Prosta instalacja');
@define('EXPERT_INSTALLATION', 'Instalacja w trybie Eksperta');
@define('COMPLETE_INSTALLATION', 'Pe³na instalacja');
@define('WONT_INSTALL_DB_AGAIN', 'nie zainstaluje ponownie bazy danych');
@define('THEY_DO', 'istniej±');
@define('THEY_DONT', 'nie istniej±');
@define('CHECK_DATABASE_EXISTS', 'Sprawdzam czy baza danych i tabele ju¿ istniej±');
@define('CREATE_DATABASE', 'Tworzenie domy¶lnych ustawieñ bazy danych...');
@define('ATTEMPT_WRITE_FILE', 'Próba zapisania pliku %s ...');
@define('CREATING_PRIMARY_AUTHOR', 'Tworzê g³ównego autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Ustawiam domy¶lny styl (template)');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalujê domyslne wtyczki');
@define('SERENDIPITY_INSTALLED', 'Instalacja Serendipity zakoñczona sukcesem');
@define('VISIT_BLOG_HERE', 'Tutaj odwied¼ swój nowy blog');
@define('THANK_YOU_FOR_CHOOSING', 'Dziêkujemy za wybranie Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Wykryto b³±d podczas instalacji');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Napêdzane przez Serendipity %s i PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standard editor');
@define('USERLEVEL_CHIEF_DESC', 'Chief editor');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Zmieñ w³a¶ciciela katalogu ze stron± na u¿ytkownika, z uprawnieniami którego dzia³a apache (np. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Katalog nie istnieje i nie mo¿e byæ utworzony. Proszê stworzyæ katalog samodzielnie.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nie mogê uruchomiæ %s');
@define('FILE_CREATE_YOURSELF', 'Proszê, stwórz plik samodzielnie lub sprawd¼ prawa dostêpu.');
@define('COPY_CODE_BELOW', '<br />* Po prostu skopiuj poni¿szy kod i umie¶æ go w %s w Twoim katalogu %s:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Kiedy wykonasz te czynno¶ci wci¶nij przycisk "reload" (od¶wie¿) w swojej przegl±darce.');
@define('ERROR_TEMPLATE_FILE', 'Nie mogê otworzyæ pliku stylu (template). Proszê, sprawd¼ lub unowocze¶nij swoj± instalacjê Serendipity!');
@define('HTACCESS_ERROR', 'Aby sprawdziæ konfiguracjê serwera, na którym instalowane jest Serendipity, program musi mieæ mo¿liwo¶æ stworzenia pliku ".htaccess". Nie by³o to mo¿liwe ze wzglêdu na problemy z uprawnieniami. Proszê, sprawd¼ uprawnienia w taki mniej wiêcej sposób: <br />&nbsp;&nbsp;%s<br />i prze³aduj stronê.');
@define('EMPTY_SETTING', 'Podano nieprawid³owe dane dla "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity wykry³o instalacjê wersji %s. Wygl±da na to, ¿e próbujesz uaktualniæ program do wersji %s. Musisz <a href="%s">klikn±æ tutaj</a> by kontynuowaæ proces aktualizacji.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Witaj w programie aktualizuj±cym Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Ten program pomo¿e Ci uaktualniæ Twoj± instalacjê Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Widzisz ten komunikat poniewa¿ w³a¶nie zainstalowa³e¶(a¶) Serendipity %s ale jeszcze nie uaktualni³e¶(a¶) swojej bazy danych by spelnia³a wymagania tej wersji Serendipity.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Uaktualnienia bazy danych (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Nastêpuj±ce pliki .sql musz± byæ wykonane by móc korzystaæ w normalny sposób z Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Zadania specjalne zwi±zane z t± wersj±');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nie wykryto zadañ specjalnych zwi±zanych z t± wersj±');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Czy mam wykonaæ powy¿sze zadania?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nie, wykonam je w³asnorêcznie');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Tak, wykonaj je');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Wygl±da na to, ¿e nie musisz aktualizowaæ swojej instalacji');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity zosta³o zaktualizowane');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Zignorowa³e¶(a¶) etap uaktualnienia Serendipity. Proszê, upewnij siê, ¿e Twoja baza danych jest prawid³owo zainstalowana a zaplanowane zadania zostan± uruchomione.');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Twoja instalacja Serendipity zosta³a uaktualniona do wersji %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Mo¿esz powróciæ do swojego bloga klikaj±c %stutaj%s');
@define('ADMIN_ENTRIES', 'Wpisy');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Could not connect to MySQL database: %s.');
@define('COULDNT_SELECT_DB', 'Could not select database: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Could not select user information: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Could not select category information: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Could not select entry information: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Could not select comment information: %s.');
@define('MYSQL_REQUIRED', 'You must have the MySQL extension in order to perform this action.');
@define('CREATE_AUTHOR', 'Stwórz autora \'%s\'.');
@define('CREATE_CATEGORY', 'Stwórz kategoriê \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type - plik danych');
@define('INSTALL_DBPORT', 'Port bazy danych');
@define('INSTALL_DBPORT_DESC', 'Port u¿ywany do po³±czenia siê z serwerem z Twoj± baz± danych');
@define('IMPORT_PLEASE_ENTER', 'Wpisz odpowiednie dane, o których podanie proszê poni¿ej');
@define('IMPORT_NOW', 'Importuj!');
@define('IMPORT_STARTING', 'Rozpoczynam procedurê importu...');
@define('IMPORT_FAILED', 'Import nie powiód³ siê');
@define('IMPORT_DONE', 'Import zakoñczony sukcesem');
@define('IMPORT_WEBLOG_APP', 'System blogowy');
@define('IMPORT_NOTES', 'Uwagi:');
@define('IMPORT_STATUS', 'Status wpisu po imporcie');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Zachowaj ca³y importowany tekst w sekdji "Tre¶æ wpisu" i nie dziel na "Rozszerzona tre¶æ wpisu".');
@define('IMPORT_GENERIC_RSS', 'Import RSS');
@define('ACTIVATE_AUTODISCOVERY', 'Wy¶lij ¦lady (Trackbacki) do linków znalezionych we wpisie/wpisach');
@define('RSS_IMPORT_CATEGORY', 'U¿yj tej kategorii dla importowanych wpisów niepasuj±cych do innych kategorii');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nie zosta³ odnaleziony.');
@define('CONVERT_HTMLENTITIES', 'Próbowaæ autokonwersji fragmentów HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Panel Administracyjny Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Wprowadzono b³êdn± nazwê u¿ytkownika lub has³o.');
@define('PLEASE_ENTER_CREDENTIALS', 'Wprowad¼ swój login i has³o w polach poni¿ej.');
@define('AUTOMATIC_LOGIN', 'Zapisz dane');
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
@define('MEDIA_LIBRARY', 'Biblioteka mediów');
@define('ADD_MEDIA', 'Dodaj');
@define('MANAGE_DIRECTORIES', 'Katalogi');
@define('CONFIGURATION', 'Konfiguracja');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Przydatne linki');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Strona domowa Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Dokumentacja Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Oficjalny blog Serendipity');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Ten wpis nie zosta³ jeszcze opublikowany.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Prawa autorskie (Copyright)');
@define('SIDEBAR_PLUGINS', 'Wtyczki Paneli Bocznych');
@define('EVENT_PLUGINS', 'Wtyczki Zdarzeñ');
@define('CONFIGURE_PLUGINS', 'Konfiguracja wtyczek');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Niespe³nione wymagania: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'uaktualnienie do wersji %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Kliknij by zainstalowaæ now± %s');
@define('ALREADY_INSTALLED', 'Ju¿ zainstalowane');
@define('PLUGIN_AVAILABLE_COUNT', 'Razem: %d wtyczek');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Edycja wpisów');
@define('EDIT_ENTRY', 'Edycja wpisu');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Szkic');
@define('PUBLISH', 'Publikacja');
@define('CONTENT', 'Zawarto¶æ');
@define('ENTRIES_PER_PAGE', 'Wpisów na stronê');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Wpisy Przyklejone');
@define('PAGE_BROWSE_ENTRIES', 'Strona %s z %s, ³±cznie %s wpisów');
@define('FIND_ENTRIES', 'Znajd¼ wpisy');
@define('RIP_ENTRY', 'Wpis #%s usuniêty.');
@define('NEW_ENTRY', 'Nowy wpis');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Tre¶æ wpisu');
@define('EXTENDED_BODY', 'Rozszerzona tre¶æ wpisu');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Szkic wiadomo¶ci zosta³ zapisany');
@define('IFRAME_PREVIEW', 'Serendipity tworzy teraz podgl±d Twojego wpisu...');
@define('IFRAME_WARNING', 'Twoja przegl±darka nie wspiera iframes. Proszê, otwórz plik serendipity_config.inc.php i ustaw zmienn± $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Uwaga: data, któr± podano, nie jest prawid³owa. Data musi byæ podana w formacie YYYY-MM-DD HH:MM (RRRR-MM-DD GG:MM).');
@define('ADVANCED_OPTIONS', 'Zaawansowane ustawienia');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Nie klikaj na ten link. Zawiera on URI ze ¦ladem (Trackback) dla tego wpisu. Mo¿esz u¿yæ tego URI by wys³aæ pinga lub stworzyæ ¦lad ze swojego bloga do tego wpisu. Aby skopiowaæ ten URI kliknij prawym przyciskiem myszy na linku i wybierz opcjê "Kopiuj skrót" (lub podobn±).');
@define('RESET_DATE', 'Ustaw datê');
@define('RESET_DATE_DESC', 'Kliknij tutaj by ustawiæ aktualn± datê i czas dla tego wpisu');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'U¿ytkownicy');
@define('CREATE_NEW_USER', 'Nowy u¿ytkownik');
@define('CREATE_NOT_AUTHORIZED', 'Nie mo¿esz zmianiaæ danych u¿ytkowników maj±cych ten sam Poziom co Ty');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nie mo¿esz tworzyæ u¿ytkowników o wy¿szym Poziomie ni¿ Twój w³asny');
@define('CREATED_USER', 'Nowy u¿ytkownik %s zosta³ utworzony');
@define('MODIFIED_USER', 'Ustawienia u¿ytkownika %s zosta³y zmienione');
@define('USER_LEVEL', 'Poziom');
@define('WARNING_NO_GROUPS_SELECTED', 'Uwaga: Nie dokonano przydzia³ów do ¿adnej grupy. To spowoduje uniemo¿liwienie dministrowania przydzia³ami do grup. Twoje dotychczasowe przydzia³y nie zosta³y jednak zmienione. W przypadku problemów - skontaktuj siê z administratorem.');
@define('DELETE_USER', 'Zamierzasz usun±æ u¿ytkownika #%d %s. Na pewno? To uniemo¿liwi wy¶wietlanie jakichkolwiek wpisów tego u¿ytkownika na stronie.');
@define('DELETED_USER', 'U¿ytkownik #%d %s usuniêty.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Grupy');
@define('DELETED_GROUP', 'Grupa #%d %s usuniêta');
@define('CREATED_GROUP', 'Nowa grupa %s zosta³a stworzona');
@define('MODIFIED_GROUP', 'Ustawienia grupy %s zosta³y zmienione');
@define('CREATE_NEW_GROUP', 'Stwórz now± grupê');
@define('DELETE_GROUP', 'Masz zamiar skasowaæ grupê #%d %s. Na pewno?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Znajd¼ komentarze');
@define('COMMENTS_FILTER_SHOW', 'Poka¿');
@define('COMMENTS_FILTER_ALL', 'Wszystkie');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Tylko zaaprobowane');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Oczekuj±ce na aprobatê');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Na pewno usun±æ zaznaczone komentarze?');
@define('PAGE_BROWSE_COMMENTS', 'Strona %s z %s, ³±cznie %s komentarzy');
@define('COMMENT_IS_DELETED', '(Komentarz usuniêty)');
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
@define('CATEGORY_SAVED', 'Zapisano kategoriê');
@define('CATEGORY_ALREADY_EXIST', 'Kategoria o nazwie "%s" ju¿ isnieje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategoria #%s zosta³a usuniêta. Stare wpisy zosta³y przeniesione do kategorii #%s.');
@define('CATEGORY_DELETED', 'Kategoria #%s usuniêta');
@define('INVALID_CATEGORY', 'Nie podano kategorii do usuniêcia');
@define('EDIT_THIS_CAT', 'Edycja kategorii "%s"');
@define('CATEGORY_REMAINING', 'Usuñ tê kategoriê i przesuñ wpisy do niej do tej pory nale¿±ce do kategorii');
@define('PARENT_CATEGORY', 'Kategoria nadrzêdna');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Nowa kategoria');
@define('ALREADY_SUBCATEGORY', '%s jest ju¿ podkategori± kategorii %s.');
@define('NO_CATEGORIES', 'Brak kategorii');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importuj dane');
@define('EXPORT_ENTRIES', 'Eksportuj dane');
@define('EXPORT_FEED', 'Wyeksportuj pe³en feed RSS');
@define('CREATE_THUMBS', 'Przebuduj miniatury');
@define('WARNING_THIS_BLAHBLAH', "UWAGA:\\nTo mo¿e nieco potrwaæ je¶li jest wiele obrazków bez miniaturek.");
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
@define('TEMPLATE_SET', '\'%s\' - ustawiono jako aktywny styl bloga');
@define('WARNING_TEMPLATE_DEPRECATED', 'Uwaga: Twój aktualny styl (template) u¿ywa nieobs³ugiwanej ju¿ metody, doradzamy aktualizacjê Serendipity o ile to mo¿liwe');
@define('STYLE_OPTIONS_NONE', 'Ten Styl nie posiada opcji specjalnych. Aby dowiedzieæ siê jak mo¿esz zaimplementowaæ w swoim Stylu opcje specjalne, odwied¼ stronê www.s9y.org i przeczytaj w dziale Technical Documentation dokument zatytu³owany "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Opcje Stylu/Tematu');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Zmodyfikowany Panel Administracyjny dostêpny');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Ustaw jako aktywny styl');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Sprawd¼ i zapisz');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Usuñ zaznaczone wtyczki');
@define('SAVE_CHANGES_TO_LAYOUT', 'Zapisz zmiany w layoucie');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizacja bazy danych z katalogiem obrazków');
@define('SYNC_DONE', 'Zrobione (%s obrazków zsynchronizowanych).');
@define('RESIZE_BLAHBLAH', '<b>Zmieñ rozmiar: %s</b>');
@define('ORIGINAL_SIZE', 'Oryginalny rozmiar: <i>%sx%s</i> pikseli');
@define('RESIZING', 'Zmieniam rozmiar');
@define('RESIZE_DONE', 'Zrobione (ilo¶æ obrazków, którym zmieniono rozmiar: %s).');
@define('KEEP_PROPORTIONS', 'Zachowaj proporcje');
@define('REALLY_SCALE_IMAGE', 'Na pewno przeskalowaæ obrazek? Ta operacja jest nieodwracalna!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Tu mo¿esz zmieniæ rozmiar obrazka. Je¶li chcesz zmieniæ rozmiar proporcjonalnie, zaznacz odpowiedni± opcjê, wpisz warto¶æ w jedno z pól i wci¶nij TAB - nowy rozmiar dla drugiej warto¶ci zostanie automatycznie obliczony, tak by proporcje obrazka zosta³y zachowane.</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nowy rozmiar: ');
@define('SCALING_IMAGE', 'Skalujê %s do %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Katalog i pliki zosta³y poprawnie przeniesione do %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Katalog i pliki nie mog³y byæ przeniesione do %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Katalog <strong>%s</strong> zosta³ utworzony.');
@define('PARENT_DIRECTORY', 'Nadrzêdny katalog');
@define('CONFIRM_DELETE_DIRECTORY', 'Na pewno usun±æ ca³± zawarto¶æ katalogu %s?');
@define('ERROR_NO_DIRECTORY', 'B³±d: Katalog %s nie istnieje');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nie mo¿na usun±æ katalogu, w którym znajduj± siê pliki. Zaznacz "si³owe usuwanie" je¶li chcesz tak¿e usun±æ pliki w katalogu. Znajduj±ce siê w katalogu pliki:');
@define('DIRECTORY_DELETE_FAILED', 'Usuwanie katalogu %s nie powiod³o siê. Sprawd¼ prawa dostêpu lub zastosuj siê do zaleceñ powy¿szego powiadomienia.');
@define('DIRECTORY_DELETE_SUCCESS', 'Katalog %s usuniêty.');
@define('CHECKING_DIRECTORY', 'Sprawdzanie plików w katalogu %s');
@define('DELETE_DIRECTORY', 'Usuñ katalog');
@define('DELETE_DIRECTORY_DESC', 'Zamierzasz usun±æ zawarto¶æ katalogu, w którym znajduj± siê pliki mediów prawdopodobnie u¿ytych w Twoich wpisach.');
@define('FORCE_DELETE', 'Usuñ WSZYSTKIE pliki w tym katalogu, tak¿e te nie znane Serendipity i nie wy¶wietlane w Bibliotece mediów');
@define('CREATE_DIRECTORY', 'Stwórz nowy katalog');
@define('CREATE_NEW_DIRECTORY', 'Stwórz nowy katalog');
@define('CREATE_DIRECTORY_DESC', 'Mo¿esz tu stworzyæ nowy katalog, w którym bêd± przechowywane pliki mediów. Wpisz nazwê nowego katalogu i wybierz ewentualny katalog nadrzêdny, w którym zostanie utworzony Twój podkatalog.');
@define('ABOUT_TO_DELETE_FILE', 'Masz zamiar usun±c plik <b>%s</b><br />Je¶li w którym¶ z wpisów zosta³o zdefiniowane odwo³anie do pliku, plik ten nie bêdzie wiêcej dla tego odwa³ania dostêpny (link nie bêdzie dzia³a³ prawid³owo).<br />Czy chcesz kontynuowaæ?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'B³±d: Plik znajduje siê ju¿ na Twoim serwerze!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nie mo¿na odnalze¼æ pliku <b>%s</b>. Byæ mo¿e zosta³ ju¿ usuniêty?');
@define('ERROR_FILE_FORBIDDEN', 'Nie mo¿esz uploadowaæ plików z aktywn± zawarto¶ci±');
@define('REMOTE_FILE_NOT_FOUND', 'Nie odnaleziono pliku na zdalnym serwerze, czy na pewno ¶cie¿ka <b>%s</b> jest poprawna?');
@define('FILE_FETCHED', '%s pobrano jako %s');
@define('FILE_UPLOADED', 'Plik %s prawid³owo za³adowany na serwer jako %s');
@define('DELETE_FILE_FAIL', 'Usuwanie pliku <b>%s</b> nie powiod³o siê');
@define('DELETE_FILE', 'Usuniêto plik o nazwie <b>%s</b>');
@define('FOUND_FILE', 'Znaleziono nowy/zmodyfikowany plik: %s.');
@define('FILENAME_REASSIGNED', 'Automatycznie przydzielona nowa nazwa pliku: %s');
@define('ERROR_FILE_EXISTS', 'B³±d: Nowa nazwa pliku jest ju¿ w u¿yciu, wybierz inn±!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'podlinkowane');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Wprowad¼ now± nazwê dla: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Dodawanie obrazka...');
@define('THUMB_CREATED_DONE', 'Miniaturka stworzona.<br/>Zrobione.');
@define('THUMBNAIL_USING_OWN', 'U¿yjê obrazka %s jako jego w³asnej miniatury bo ju¿ jest w rozmiarach miniatury.');
@define('THUMBNAIL_FAILED_COPY', 'Chciano u¿yæ %s jako jego w³a¶nej miniatury ale proces kopiowania siê nie powiód³!');
@define('DELETE_THUMBNAIL', 'Usuniêto minturkê o nazwie	<b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Wyst±pi³ nieznany b³±d, plik nie zosta³ za³adowany. Byæ mo¿e konfiguracja serwera nie zezwala na przesy³anie tak du¿ych plików. Sprawd¼ to u swojego ISP lub wyedytuj odpowiednio plik php.ini (je¶li masz dostêp do konfiguracji serwera) by zezwoliæ na przesy³anie wiêkszych plików.');
@define('MEDIA_UPLOAD_SIZEERROR', 'B³±d: Nie mo¿esz wysy³aæ na serwer plików wiêkszych ni¿ %s bajtów!');
@define('MEDIA_UPLOAD_DIMERROR', 'B³±d: Nie mo¿esz wysy³aæ na serwer obrazków wiêkszych ni¿ %s x %s piksele!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Plik podlinkowany.<br />Zrobione.');
@define('DELETE_HOTLINK_FILE', 'Skasuj podlinkowany plik o nazwie <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nie mo¿na wykonaæ: %s, b³±d: %s, zwrócona warto¶æ: %d');
@define('SKIPPING_FILE_EXTENSION', 'Pomijanie pliku: brak rozszerzenia w pliku %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Pomijanie pliku: nie mogê czytaæ z %s.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Ustaw te same uprawnienia na wszystkich podkatalogach');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Chcê u¿yæ miniaturki we wpisie');
@define('I_WANT_BIG_IMAGE', 'Chcê u¿yæ obrazka w pe³nym rozmiarze we wpisie');
@define('I_WANT_NO_LINK', 'Obrazek ma byc wy¶wietlany jako zwyk³y obrazek');
@define('I_WANT_IT_TO_LINK', 'Obrazek ma byæ wy¶wietlany jako link do:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Rozmiar obrazka');
@define('IMAGE_ALIGNMENT', 'Wyrównanie obrazka');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Linkowanie obrazka');
@define('MEDIA_TARGET', 'Sposób wy¶wietlenia');
@define('MEDIA_TARGET_JS', 'Okienko Popup (via JavaScript, rozmiar dopasowuj±cy siê do obrazka)');
@define('MEDIA_ENTRY', 'Osobny wpis');
@define('MEDIA_TARGET_BLANK', 'Osobne okno (via target=_blank)');
@define('YOU_CHOSE', 'Wybrano %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Obróæ obrazek 90 stopni w lewo');
@define('IMAGE_ROTATE_RIGHT', 'Obróæ obrazek 90 stopni w prawo');
@define('MEDIA_RENAME', 'Zmien nazwê pliku');
@define('THUMBNAIL_SHORT', 'Miniatura');
@define('ORIGINAL_SHORT', 'Orygina³');
@define('SORT_ORDER_NAME', 'Nazwa pliku');
@define('SORT_ORDER_EXTENSION', 'Rozszerzenie pliku');
@define('SORT_ORDER_SIZE', 'Rozmiar pliku');
@define('SORT_ORDER_WIDTH', 'Szeroko¶æ obrazka');
@define('SORT_ORDER_HEIGHT', 'Wysoko¶æ obrazka');
@define('SORT_ORDER_DATE', 'Data uploadu');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Dodaj plik do zbioru mediów:</b><p>Tu mo¿esz uploadowaæ pliki z mediami lub wskazaæ jakie¶ pliki dostêpne w sieci! Je¶li nie masz odpowiedniego obrazka, <a href="https://images.google.com/" target="_blank">znajd¼ w serwisie Google</a> obrazki, które byæ mo¿e bêd± Ci odpowiada³y. Rezultaty wyszukiwania s± czêsto przydatne i zabawne :) Ale uwa¿aj! Wiêkszo¶æ obrazków ma zastrze¿one prawa autorskie i powiniene¶ (powinna¶) zapytaæ siê o pozwolenie przed ich u¿yciem!</p><p><b>Wybierz metodê:</b></p><br />');
@define('ENTER_MEDIA_URL', 'Wprowad¼ URL pliku dostêpnego w sieci:');
@define('ENTER_MEDIA_UPLOAD', 'Wybierz plik do uploadu:');
@define('SAVE_FILE_AS', 'Zapisz plik jako:');
@define('STORE_IN_DIRECTORY', 'Zapisz w nastêpuj±cym katalogu: ');
@define('IMAGE_MORE_INPUT', 'Dodaj wiêcej obrazków');
@define('ENTER_MEDIA_URL_METHOD', 'Sposób pobierania');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'UWAGA! Je¶li wybierasz opcjê linkowania do pliku w sieci, upewnij siê, ¿e masz do tego prawo! Linkowanie pozwala na u¿ywanie obrazków z innych stron bez potrzeby ich zgrywania na serwer.');
@define('FETCH_METHOD_IMAGE', 'Pobierz obrazek na serwer');
@define('FETCH_METHOD_HOTLINK', 'Linkowanie do serwera');
@define('GO_ADD_PROPERTIES', 'Dodaj i wprowad¼ w³a¶ciwo¶ci');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zmieñ rozmiar obrazka');
@define('MEDIA_DELETE', 'Usuñ ten plik');
@define('FILES_PER_PAGE', 'Plików na stronê');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nie znaleziono obrazków');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'wszystkie katalogi');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfiguracja zapisana');
@define('DIAGNOSTIC_ERROR', 'Stwierdzono istnienie pewnych problemów podczas przeprowadzania procedur diagnostycznych. Upewnij siê, ¿e poda³e¶ prawid³owe dane:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Ustawienia bazy danych');
@define('INSTALL_CAT_DB_DESC', 'Tu mo¿esz podaæ wszystkie dane na temat Twojej bazy danych. Serendipity potrzebuje tych informacji by móc funkcjonowac prawid³owo.');
@define('INSTALL_DBTYPE', 'Typ bazy danych');
@define('INSTALL_DBTYPE_DESC', 'Typ bazy danych');
@define('INSTALL_DBHOST', 'Host bazy danych');
@define('INSTALL_DBHOST_DESC', 'Nazwa hosta serwera Twojej bazy danych');
@define('INSTALL_DBUSER', 'U¿ytkownik bazy danych');
@define('INSTALL_DBUSER_DESC', 'Nazwa u¿ytkownika u¿ywana do ³±czenia siê z baz± danych');
@define('INSTALL_DBPASS', 'Has³o bazy danych');
@define('INSTALL_DBPASS_DESC', 'Has³o dla u¿ytkownika podanego powy¿ej');
@define('INSTALL_DBNAME', 'Nazwa bazy danych');
@define('INSTALL_DBNAME_DESC', 'Nazwa Twojej bazy danych');
@define('INSTALL_DBPREFIX', 'Prefiks tabel bazy danych');
@define('INSTALL_DBPREFIX_DESC', 'Prefiks dla nazw tabel, np. serendipity_');
@define('INSTALL_DBPERSISTENT', 'U¿ywaj sta³ych po³±czeñ z baz± danych');
@define('INSTALL_DBPERSISTENT_DESC', 'Zezwól na u¿ywanie sta³ych po³±czeñ z baz± danych, wiêcej <a href="http://pl.php.net/manual/pl/features.persistent-connections.php" target="_blank">tutaj</a>. W³±czenie tej opcji nie jest zalecane.');
@define('INSTAL_DB_UTF8', 'W³±cz konwersjê kodowania zaków dla bazy danych');
@define('INSTAL_DB_UTF8_DESC', 'Rozwi±zuje problem z zapytaniem SET NAMES bazy danych aby ustaliæ prawid³owe kodowanie dla bazy danych. W³±cz lub wy³±cz tê opcjê je¶li widzisz na swojej stronie dziwne znaczki zamiast znaków diakrytycznych.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '¦cie¿ki');
@define('INSTALL_CAT_PATHS_DESC', 'Ró¿ne ¶cie¿ki do istotnych katalogów i plików. Nie zapomnij o poprzedzaj±cych katalogi slaszach "/"!');
@define('INSTALL_FULLPATH', 'Pe³na ¶cie¿ka');
@define('INSTALL_FULLPATH_DESC', 'Pe³na, bezwzglêdna ¶cie¿ka do Twojej instalacji Serendipity');
@define('INSTALL_UPLOADPATH', '¦cie¿ka uploadu');
@define('INSTALL_UPLOADPATH_DESC', 'Wszystkie uploady (³adowane na serwer pliki) bêd± trafia³y tutaj. Podaj wzglêdn± (relatywn±) w stosunku do "Pe³nej ¶cie¿ki" ¶cie¿kê dostêpu - zazwyczaj jest to "uploads/"');
@define('INSTALL_RELPATH', 'Wzglêdna ¶cie¿ka');
@define('INSTALL_RELPATH_DESC', '¦cie¿ka do Serendipity podawana Twojej przegl±darce - zazwyczaj jest to "/serendipity/"');
@define('INSTALL_RELTEMPLPATH', 'Wzglêdna ¶cie¿ka styli (templates)');
@define('INSTALL_RELTEMPLPATH_DESC', '¦cie¿ka do katalogu zawieraj±cego style (templates) - wzglêdna (relatywna) wobec "wzglêdnej ¶cie¿ki"');
@define('INSTALL_RELUPLOADPATH', 'Wzglêdna ¶cie¿ka uploadu');
@define('INSTALL_RELUPLOADPATH_DESC', '¦cie¿ka uploadu podawana przegl±darkom - wzglêdna (relatywna) wobec "wzglêdnej ¶cie¿ki"');
@define('INSTALL_URL', 'URL bloga');
@define('INSTALL_URL_DESC', 'Bazowy URL instalacji Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetect used HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'If set to "true", Serendipity will ensure that the HTTP Host which was used by your visitor is used as your BaseURL setting. Enabling this will let you be able to use multiple domain names for your Serendipity Blog, and use the domain for all follow-up links which the user used to access your blog.');
@define('INSTALL_INDEXFILE', 'Plik index');
@define('INSTALL_INDEXFILE_DESC', 'Nazwa pliku index Twojego Serendipity');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Defines various URL patterns to define permanent links in your blog. It is suggested that you use the defaults; if not, you should try to use the %id% value where possible to prevent Serendipity from querying the database to lookup the target URL.');
@define('INSTALL_PERMALINK', 'Permalink Entry URL structure');
@define('INSTALL_PERMALINK_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries may become available. You can use the variables %id%, %title%, %day%, %month%, %year% and any other characters.');
@define('INSTALL_PERMALINK_AUTHOR', 'Permalink Author URL structure');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries from certain authors may become available. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permalink Category URL structure');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries from certain categories may become available. You can use the variables %id%, %name%, %parentname%, %description% and any other characters.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permalink RSS-Feed Category URL structure');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Here you can define the relative URL structure beginning from your base URL to where RSS-feeds from certain categories may become available. You can use the variables %id%, %name%, %description% and any other characters.');
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
@define('INSTALL_PERMALINK_COMMENTSPATH', '¦cie¿ka do komentarzy');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Ustawienia g³ówne');
@define('INSTALL_CAT_SETTINGS_DESC', 'Ustal g³ówne ustawienia i zachowania Serendipity');
@define('INSTALL_USERNAME', 'Nazwa u¿ytkownika administratora');
@define('INSTALL_USERNAME_DESC', 'Nazwa u¿ytkownika dla logowania administratora');
@define('INSTALL_PASSWORD', 'Has³o administratora');
@define('INSTALL_PASSWORD_DESC', 'Has³o dla logowania administratora');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Prawdziwe imiê i nazwisko');
@define('USERCONF_REALNAME_DESC', 'Pe³ne imiê i nazwisko, jest widziane przez czytaj±cych');
@define('INSTALL_EMAIL', 'E-mail administratora');
@define('INSTALL_EMAIL_DESC', 'Adres e-mail administratora bloga');
@define('INSTALL_SENDMAIL', 'Wysy³aæ powiadomienia e-mail do administratora?');
@define('INSTALL_SENDMAIL_DESC', 'Czy chcesz oytrzymywaæ powiadomienia drog± mailow± o dopisaniu komentarza do wpisu?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nazwa bloga');
@define('INSTALL_BLOGNAME_DESC', 'Tytu³ Twojego bloga');
@define('INSTALL_BLOGDESC', 'Opis bloga');
@define('INSTALL_BLOGDESC_DESC', 'Opis Twojego bloga');
@define('INSTALL_BLOG_EMAIL', 'Adres e-mail bloga');
@define('INSTALL_BLOG_EMAIL_DESC', 'Mo¿esz tu wpisaæ adres poczty e-mail, który bêdzie widoczny w polu "From" wysy³anych maili z powiadomieniami. Upewnij siê, ¿e podajesz adres rozpoznawalny dla serwera - wiele serwerów mailowych odrzuca maile nie zawieraj±ce poprawnego nag³ówka "From".');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Jêzyk');
@define('INSTALL_LANG_DESC', 'Wybierz jêzyk dla swojego bloga');
@define('INSTALL_CHARSET', 'Wybór kodowania znaków');
@define('INSTALL_CHARSET_DESC', 'Tu mo¿esz ustawiæ kodowanie pomiêdzy UTF-8 a natywnym kodowaniem danego jêzyka (ISO, EUC, ...). Niektóre jêzyki oferuj± wsparcie tylko kodowania UTF-8 wiêc ich zmiana na "natywne" nie odniesie skutku. SUGERUJEMY wybór kodowania UTF-8 dla nowych instalacji. Nie zmieniaj tych ustawieñ je¶li ju¿ dokona³e¶(a¶) wpisów ze znakami specjalnymi (diakrytycznymi) - to mo¿e spowodowaæ problemy z wy¶wietlaniem znaków. Przeczytaj wiêcej o tym problemie na stronie https://docs.s9y.org/docs/developers/internationalization.html');
@define('INSTALL_CAL', 'Typ kalendarza');
@define('INSTALL_CAL_DESC', 'Wybierz swój typ kalendarza');
@define('AUTOLANG', 'U¿ywaj ustawieñ jêzyka przegladarki u¿ytkowników jako standardowych');
@define('AUTOLANG_DESC', 'Je¶li ta opcja zostanie w³±czona, jêzyk, w jakim bêd± wy¶wietlane komunikaty i wpis bêdzie zdeterminowany ustawienim jêzyka przegl±darki u¿ytkownika odwiedzaj±cego Twojego bloga. Serendipity bêdzie automatycznie dobiera³o wersjê jêzykow± w zale¿no¶ci od ustwieñ przegl±darki.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'W³±czyæ ograniczenia wtyczek (Plugin ACL) dla grup u¿ytkowników?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Je¶li opcja ograniczenia wtyczek jest w³±czona, mo¿esz okre¶liæ jakie wtyczki mog± byæ uruchamiane przez jakie grupy u¿ytkowników.');
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
@define('INSTALL_CAT_DISPLAY', 'Wygl±d i Opcje');
@define('INSTALL_CAT_DISPLAY_DESC', 'Skonfiguruj wygl±d i ustawienia Serendipity');
@define('INSTALL_FETCHLIMIT', 'Ilo¶æ wpisów wy¶wietlanych na stronie g³ównej');
@define('INSTALL_FETCHLIMIT_DESC', 'Podaj ile wpisów ma byæ jednocze¶nie wy¶wietlanych na stronie g³ównej i nastêpnych stronach bloga');
@define('INSTALL_RSSFETCHLIMIT', 'Ilo¶æ wpisów wy¶wietlanych w feedach RSS');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Ilo¶æ wpisów wy¶wietlanych na ka¿dej stronie feeda RSS');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Aktywuj ¶cis³e przestrzeganie standardu RFC2616 RSS-Feed');
@define('SYNDICATION_RFC2616_DESC', 'NIE przestrzeganie ¶cis³e standardu RFC2616 oznacza, ¿e wszelkie wywo³ania kana³ów RSS zwróc± wpisy, które uleg³y zmianie od ostatniego takiego wywo³ania (np. przez czytnik RSS). Je¶li ustawisz tê opcjê na Nie, subskrybenci Twoich kana³ów RSS otrzymaj± wszystkie artyku³y od czasu ostatniego pobrania. To zasadniczo jest dobre i prawid³owe zachowanie kana³u RSS. Jednak niektórzy Agenci RSS, jak na przyk³ad Planet, zachowuj± siê w takich sytuacjach dziwnie (np. co jaki¶ czas pojawiaj± siê stare wpisy na stronach obs³ugiwanych przez Planet). Ustawenie tej opcji na Tak zaspokoi wymagania standardu, jednak czytelników Twoich kana³ów RSS mog± omin±æ pewne wpisy, które po prostu nie bêd± ju¿ pokazywane tym czytelnikom, nawet je¶li jeszcze ich nie przeczytali. Ustawienie tej opcji mo¿e byæ wiêc problemem albo dla Agregatorów typu Planet, albo dla Twoich czytelników. Wiêcej informacji: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'U¿yj kompresji gzip');
@define('INSTALL_USEGZIP_DESC', 'Aby przyspieszyæ wysy³anie stron do u¿ytkownika mo¿esz u¿yæ kompresji gzip (zak³adaj±c, ¿e przegl±darka u¿ytkownika obs³uguje kompresjê gzip - znakomita wiêkszo¶æ obs³uguje). To ustawienie jest rekomendowane.');
@define('INSTALL_XHTML11', 'Wymu¶ kompatybilno¶æ z XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Czy chcesz wymusiæ kompatybilno¶æ ze standardem XHTML 1.1 (mo¿e powodowaæ problemy ze starszymi przegl±darkami czwartej generacji)');
@define('INSTALL_POPUP', 'Zezwól na u¿ycie wyskakuj±cych okien');
@define('INSTALL_POPUP_DESC', 'Chcesz u¿yæ wyskakuj±cych okienek dla komentarzy, ¶ladów itp.?');
@define('INSTALL_EMBED', 'Czy Serendipity jest osadzone?');
@define('INSTALL_EMBED_DESC', 'Je¶li chcesz osadziæ Serendipity na normalnej stronie, ustaw "Tak" aby pozbyæ siê wszelkich informacji nag³ówkowych i pokazywac sam± tre¶æ wpisów. Mo¿esz dodatkowo skorzystaæ z opcji "Plik index" aby stworzyæ osobn± klasê, w której bêd± trzymane nag³ówki Twojej normalnej strony. Wiêcej informacji zawiera plik README.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Zewnêtrzne linki maj± byæ klikalne?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nie": Zewnêtrzne linki (Top Exits, Top Referrers, Komentarze) s± pokazywane czystym tekstem, bez podlinkowania odpowiadaj±cyh im adresów (ogranicza to propagacjê spamu - ustawienie rekomendowane). "Tak": Zewnêtrzne linki s± pokazywane jako linki (odpowiadaj±ce im adresy s± podlinkowane i klikalne). To ustawienie mo¿e byæ zmienione przez np. konfiguracjê jakiej¶ wtyczki!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Zablokowani Referers');
@define('INSTALL_BLOCKREF_DESC', 'Je¶li istnieje jaki¶ host, którego nie chcesz pokazywaæ na li¶cie Referers, wpisz go na tê listê. Wpisy rozdzielaj ¶rednikami ";".');
@define('INSTALL_REWRITE', 'Nadpisywanie URLi');
@define('INSTALL_REWRITE_DESC', 'Wybierz zasady, wed³ug których bêd± generowane URLe. W³±czenie opcji nadpisywania URLi bêdzie tworzy³o ³adne URLe dla wpisów Twojego bloga, dodatkowo lepiej indeksowalne przez wyszukiwarki typu Google. Serwer musi obs³ugiwaæ mod_rewrite lub "AllowOverride All" dla katalogu z Serendipity. Standardowym ustawieniem jest ustawienie wykryte przy próba autodetekcji ustawieñ serwera.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Przesuniêcie czasu serwera');
@define('INSTALL_OFFSET_DESC', 'Podaj czas (w godzinach) przesuniêcia miêdzy czasem serwera (aktualny: %clock%) a Twoj± stref± czasow±');
@define('INSTALL_SHOWFUTURE', 'Pokazuj przysz³e wpisy');
@define('INSTALL_SHOWFUTURE_DESC', 'Je¶li opcja zostanie w³±czona, bêd± pokazywane wszystkie przysz³e wpisy (wpisy z ustawion± dat± przysz³±). Standardowo wpisy te s± ukryte do czasu nadej¶cia czasu ich wy¶wietlenia.');
@define('INSTALL_ACL', 'Zastosuj ograniczenia dostêpu dla kategorii');
@define('INSTALL_ACL_DESC', 'Je¶li to ustawienie zostanie w³±czone, bêd± stosowane ogranieczenia dostêpu do kategorii podczas przegl±dania wpisów przez zalogowanych u¿ytkowników. Je¶li ustawienie to zostanie wy³±czone, takie ogranieczenia NIE bêd± stosowane. Pozytywnym efektem wy³±czenia tej opcji jest przyspieszenie pracy silnika bloga. Je¶li wiêc nie musisz stosowaæ ograniczeñ dostêpu do kategorii - wy³±cz tê opcjê.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Pokazywaæ tak¿e Rozszerzon± tre¶æ wpisu w feedzie RSS?');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrazek dla feedów RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL do obrazka w formacie GIF/JPEG/PNG, o ile dostêpny. (pusty: logo Serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Szeroko¶æ obrazka');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'w pikselach, max 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Wysoko¶æ obrazka');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'w pikselach, max 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Pokazywaæ adresy e-mail?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Adresy e-mail edytora zarz±dzaj±cego tre¶ci±, o ile dostêpne. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Adresy e-mail webmastera, o ile dostêpne. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Ilo¶æ minut, po których Twój blog nie powinien byæ cachowany przez zewnêtrzne strony/programy obs³uguj±ce RSS. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Czy pole "pubDate" ma byæ za³±czone w tre¶ci RSS? Zawiera ono datê publikacji ostatniego wpisu.');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Ustawienia konwersji obrazków');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Wpriwad¼ ustawienia dotycz±ce sposobów obs³ugi obrazków przez Serendipity');
@define('INSTALL_IMAGEMAGICK', 'U¿yj ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Czy masz zainstalowany program ImageMagick i chcesz u¿yæ go do zmiany rozmiarów obrazków?');
@define('INSTALL_IMAGEMAGICKPATH', '¦cie¿ka do programu konwertuj±cego');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Pe³na ¶cie¿ka do i nazwa u¿ywanego przez Ciebie programu obs³uguj±cego ImageMagick');
@define('INSTALL_THUMBSUFFIX', 'Sufiks Miniaturek');
@define('INSTALL_THUMBSUFFIX_DESC', 'Miniaturki bêd± nazywane wed³ug nastêpuj±cego formatu: nazwaoryginalna.[sufiks].rozszerzenie');
@define('INSTALL_THUMBWIDTH', 'Szeroko¶æ miniaturki');
@define('INSTALL_THUMBWIDTH_DESC', 'Ustal szeroko¶æ tworzonych automatycznie miniatur');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Maksymalny rozmiar wysy³anego pliku');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Wprowad¼ maksymalny rozmiar wysy³anego pliku w bajtach. To ustawienie mo¿e byæ uniewa¿nione przez ustawienia serwera w pliku PHP.ini: upload_max_filesize, post_max_size, max_input_time - wszystkie te opcje mog± mieæ wp³yw na to ustawienie. Puste pole oznacza, ¿e maj± byæ stosowane ustawienia po stronie serwera.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Maksymalna szeroko¶æ obrazków wysy³anych na serwer');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Wprowad¼ maksymaln± szeroko¶æ (w pikselach) dla wysy³anych na serwer obrazków');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Maksymlana wysoko¶æ obrazków wysy³anych na serwer');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Wprowad¼ maksymaln± wysoko¶æ (w pikselach) dla wysy³anych na serwer obrazków');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'W³±cz synchronizacjê mediów "w locie"');
@define('ONTHEFLYSYNCH_DESC', 'Je¶li w³±czone, Serendipity bêdzie porównywa³o zawarto¶æ bazy danych mediów z plikami istniej±cymi na serwerze i w razie wyst±pienia ró¿nic wykona synchronizacjê bazy z zawarto¶ci± katalogów na serwerze.');
@define('MEDIA_DYN_RESIZE', 'Zezwalaæ na dynamiczn± zmianê rozmiaru?');
@define('MEDIA_DYN_RESIZE_DESC', 'Je¶li w³±czone, modu³ obs³ugi mediów mo¿e zwracac obrazki w dowolnej ¿±danej wielko¶ci podawanej przez GET. Rezultaty zmian s± buforowane i mog± spowodowaæ spory rozrost bazy plików je¶li bêdzie ta opcja wykorzystywana intensywnie.');
@define('MEDIA_EXIF', 'Importuj dane EXIF/JPEG obrazków/zdjêæ');
@define('MEDIA_EXIF_DESC', 'Je¶li opcja zostanie w³±czona, zapisane w plikach z obrazkami/zdjêciami dane EXIF/JPEG zostan± zachowane w bazie danych i wykorzystane przy wy¶wietlaniu w Bibliotece mediów.');
@define('MEDIA_PROP', 'W³a¶ciwo¶ci');
@define('MEDIA_PROP_DESC', 'Wprowad¼ listê pól w³a¶ciwo¶ci, jakie chcesz ustaliæ dla ka¿dego pliku medium. Elementy listy rozdzielaj znakiem ¶rednika ";".');
@define('MEDIA_PROP_MULTIDESC', '(Mo¿esz dodaæ ":MULTI" po ka¿dym elemencie by poinformowaæ Serendipity, ¿e dany element bêdzie posiada³ d³ugi opis)');
@define('MEDIA_KEYWORDS', 'S³owa kluczowe mediów');
@define('MEDIA_KEYWORDS_DESC', 'Wprowad¼ predefiniowan± listê s³ów kluczowych dla mediów. Pozycje na li¶cie rozdzielaj znakiem ¶rednika ";". Te s³owa kluczowe bêd± przypisywane mediom automatycznie przy importowaniu.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Twoje ustawienia osobiste');
@define('USERCONF_CAT_PERSONAL_DESC', 'Zmieñ swoje ustawienia osobiste');
@define('USERCONF_USERNAME', 'Twoja nazwa u¿ytkownika');
@define('USERCONF_USERNAME_DESC', 'Nazwa, której u¿ywasz przy logowaniu do bloga');
@define('USERCONF_PASSWORD', 'Twoje has³o');
@define('USERCONF_PASSWORD_DESC', 'Has³o, którego chcesz u¿yæ przy logowaniu do bloga');
@define('USERCONF_CHECK_PASSWORD', 'Stare has³o');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Je¶li zmienisz has³o w polu powy¿ej, musisz w tym polu wpisaæ aktualne has³o');
@define('USERCONF_USERLEVEL', 'Poziom dostêpu');
@define('USERCONF_USERLEVEL_DESC', 'To ustawienie okre¶la jaki poziom dostêpu ma u¿ytkownik do bloga.');
@define('USERCONF_GROUPS', 'Przynale¿no¶æ do grupy');
@define('USERCONF_GROUPS_DESC', 'Ten u¿ytkownik nale¿y do nastêpuj±cych grup. Przynale¿no¶æ do kilku grup jednocze¶nie jest mo¿liwa.');
@define('USERCONF_EMAIL', 'Twój adres e-mail');
@define('USERCONF_EMAIL_DESC', 'Twój prywatny adres e-mail');
@define('INSTALL_WYSIWYG', 'U¿yj edytora WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Chcesz u¿yæ edytora WYSIWYG? (Dzia³a w IE5+, czê¶ciowo w Mozilli 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Wysy³aæ powiadomienia o komentarzach?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Czy chcesz otrzymywaæ maile z informacj± o komentarzach do Twoich wpisów?');
@define('USERCONF_SENDTRACKBACKS', 'Wysy³aæ powiadomienia o ¶ladach?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Czy chcesz otrzymywaæ maile z informacj± o pozostawionych ¶ladach (trackbacks) do Twoich wpisów?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Uprawnienia: Publikowanie wpisów?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Czy ten u¿ytkownik jest uprawniony do publikowania wpisów?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Czy pokazywaæ pasek narzêdziowy w oknie wyboru mediów?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Standardowe ustawienia dla nowych wpisów');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UWAGA: to ustawienie jest obecnie u¿ywane tylko dla celów kompatybilno¶ci ze starszymi wersjami wtyczek i silnika. Obecnie poziom dostêpu reguluj± regu³y grup u¿ytkowników!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Wpisa³e¶(a¶) niepoprawne stare has³o i nie jeste¶ upowa¿niona do zmiany nowego has³a. Twoje ustawienia NIE zostan± zapisane.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Pole nazwy u¿ytkownika nie mo¿e byæ puste.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Dostêp do ustawieñ osobistych');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Zmiana poziomu u¿ytkowników');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Zmiana "zabroñ tworzenia wpisów"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Zmiana uprawnieñ do publikowania wpisów');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Dostêp do konfiguracji systemu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Dostêp do konfiguracji bloga');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administracja wpisami');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administracja wpisami innych u¿ytkowników');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import wpisów');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administracja kategoriami');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administracja kategoriami innych u¿ytkowników');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Usuwanie kategorii');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administracja u¿ytkownikami');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Usuwanie u¿ytkowników');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Zmiana poziomu u¿ytkowników');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administracja u¿ytkownikami, którzy s± w tej samej grupie (grupach)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administracja u¿ytkownikami, którzy s± w innych grupach');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Tworzenie nowych u¿ytkowników');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administracja grupami u¿ytkowników');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administracja wtyczkami');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administracja wtyczkami innych u¿ytkowników');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administracja mediami');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administracja katalogami mediów');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Dodawanie nowych mediów');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Usuwanie mediów');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administracja mediami innych u¿ytkowników');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Ogl±danie plików z mediami');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Synchronizacja miniatur');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administracja komentarzami');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administracja stylami');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Ogl±danie plików z mediami innych u¿ytkowników');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zabronione wtyczki');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zabronione zdarzenia');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Twój wpis zosta³ zapisany');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'W±tki');
@define('COMMENTS_VIEWMODE_LINEAR', 'P³asko');
@define('DISPLAY_COMMENTS_AS', 'Wy¶wietl komentarze jako');
@define('COMMENTS_DISABLE', 'Nie zezwalaj na komentowanie tego wpisu');
@define('COMMENTS_ENABLE', 'Zezwalaj na komentowanie tego wpisu');
@define('COMMENTS_CLOSED', 'Autor nie zezwoli³ na komentowanie tego wpisu');
@define('VIEW_EXTENDED_ENTRY', 'Ci±g dalszy "%s"');
@define('TRACKBACK_SPECIFIC', 'U¿yj tego linku je¶li chcesz stworzyæ ¦lad (Trackback) do tego wpisu');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'pe³ne');
@define('VIEW_TOPICS', 'tytu³y');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Tytu³y z');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Wpisy nie zosta³y prawid³owo zapisane w bazie!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamiêtaæ dane?');
@define('SUBMIT_COMMENT', 'Wy¶lij komentarz');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Wy¶lij mailem powiadomienie o odpowiedziach');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Wygl±da na to, ¿e komentarz #%s zosta³ ju¿ zaaprobowany');
@define('COMMENT_EDITED', 'Wybrany komentarz zosta³ wyedytowany');
@define('COMMENTS_WILL_BE_MODERATED', 'Komentarze poddawane s± moderacji przed opublikowaniem ich na stronie.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Uwaga: Ten komentarz wymaga zaakcpetowania przed opublikowaniem go na stronie.');
@define('DELETE_COMMENT', 'Usuñ komentarz');
@define('APPROVE_COMMENT', 'Zaaprobuj komentarz');
@define('REQUIRES_REVIEW', 'Wymaga sprawdzenia');
@define('COMMENT_APPROVED', 'Komentarz #%s zosta³ zaaprobowany');
@define('COMMENT_DELETED', 'Komentarz #%s zosta³ usuniêty');
@define('COMMENTS_MODERATE', 'Komentarze i ¶lady (trackbacks) dla tego wpisu wymagaj± moderacji');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Uwaga: ten ¦lad (Trackback) wymaga aprobaty zanim zostanie wy¶wietlony na stronie.');
@define('DELETE_TRACKBACK', 'Usuñ ¦lad (Trackback)');
@define('APPROVE_TRACKBACK', 'Zaaprobuj ¦lad (Trackback)');
@define('TRACKBACK_APPROVED', '¦lad (Trackback) #%s zosta³ zaaprobowany');
@define('TRACKBACK_DELETED', '¦lad (Trackback) #%s zosta³ usuniêty');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Wpis');
@define('VIEW_COMMENT', 'Zobacz komentarz');
@define('VIEW_ENTRY', 'Zobacz wpis');
@define('LINK_TO_ENTRY', 'Link do wpisu');
@define('LINK_TO_REMOTE_ENTRY', 'Link do wpisu zdalnego');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Wysy³anie ¶ladu do URI %s...');
@define('TRACKBACK_SENT', 'Pozostawienie ¶ladu zakoñczone sukcesem');
@define('TRACKBACK_FAILED', 'Pozostawienie ¶ladu nie powiod³o siê: %s');
@define('TRACKBACK_NOT_FOUND', 'Nie odnaleziono URI dla ustanowienia ¶ladu.');
@define('TRACKBACK_URI_MISMATCH', 'Automatycznie wykryte URI dla ¶ladów nie pasuje do zdefiniowanego adresu docelowego.');
@define('TRACKBACK_CHECKING', 'Badanie mo¿liwo¶ci pozostawienia ¶ladu w <u>%s</u> ...');
@define('TRACKBACK_NO_DATA', 'Miejsce docelowe nie poda³o odpowiednich danych');
@define('TRACKBACK_COULD_NOT_CONNECT', '¦lad nie zosta³ wys³any: nie mogê po³±czyæ siê z %s u¿ywaj±c portu %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nowy komentarz do subskrybowanej wiadomo¶ci "%s"');
@define('SUBSCRIPTION_MAIL', "Witam %s,\n\nNowy komentarz zosta³ dodany do wpisu, który monitorujesz na \"%s\", zatytu³owany \"%s\"\nImiê komentuj±cego to: %s\n\nSkomentowany wpis znajdziesz tutaj: %s\n\nMo¿esz wy³±czyæ powiadomienia o odpowiedziach do tego wpisu klikaj±c na link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Witam %s,\n\nNowy ¶lad zosta³ pozostawiony we wpisie, który monitorujesz na \"%s\", zatytu³owany \"%s\"\nImiê komentuj±cego to: %s\n\nSkomentowany wpis znajdziesz tutaj: %s\n\nMo¿esz wy³±czyæ powiadomienia o odpowiedziach do tego wpisu klikaj±c na link: %s\n");
@define('SIGNATURE', "\n-- \n%s jest napêdzane przez Serendipity.\nNajlepszy engine blogowy pod tym s³oñcem. Ty tak¿e mo¿esz go u¿ywaæ.\nSprawd¼ <https://s9y.org> by siê dowiedzieæ jak!");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nowy komentarz na blogu "%s" zosta³ dodany do wpisu "%s."');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nowy ¦lad (Trackback) zosta³ pozostawiony we wpisie "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Masz do wyboru nastêpuj±ce opcje:');
@define('NEW_TRACKBACK_TO', 'Nowy ¶lad (trackback) do');
@define('NEW_COMMENT_TO', 'Nowy komentarz do');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nie znaleziono wpisów zawieraj±cych zapytanie %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Twoje zapytanie o %s zwróci³o %s wyników:');
@define('SEARCH_TOO_SHORT', 'Ilo¶æ znaków w zapytaniu musi byæ wiêksza od trzech. Mo¿esz próbowaæ dodaæ * do krótszych s³ów, np. s9y* aby "oszukaæ" wyszukiwarkê by u¿y³a krótsze zapytania.');
@define('SEARCH_ERROR', 'Funkcja wyszukiwania nie zadzia³a³a jak powinna. Uwaga dla administratora tego bloga: To mo¿e siê zdarzyæ w przypadku braku kluczy indeksu w Twojej bazie danych. W systemach opartych na MySQL uzytkownik powinien mieæ uprawnienia do wykonania nastêpuj±cego zapytania: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> B³±d zwrócony przez bazê danych: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Twój komentarz nie zawiera ¿adnych tre¶ci. Proszê, %swróæ%s i spróbuj ponownie.');
@define('COMMENT_NOT_ADDED', 'Twój komentarz nie zosta³ dodany. Ewentualne przyczyny: mo¿liwo¶æ komentowania zosta³a wy³±czona lub wprowadzi³e¶(a¶) b³êdne dane lub Twój komentarz zosta³ uznany za spam.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Formularz komentarzy');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'B³êdnie wprowadzone ustawienie dla opcji "%s". Ustwienie powinno byæ nastêpuj±cego typu: "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Pokazuje listê kategorii');
@define('CATEGORIES_PARENT_BASE', 'Poka¿ tylko kategorie zawieraj±ce siê w...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Mo¿esz wybraæ kategoriê nadrzêdn± co spowoduje wy¶wietlanie tylko kategorii podrzêdnych, zawartych w kategorii nadrzêdnej');
@define('CATEGORIES_HIDE_PARALLEL', 'Ukryj kategorie, które nie s± czê¶ci± drzewa kategorii');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Je¶li chcesz ukryæ kategorie, które znajduj± siê w innym drzewie kategorii, musisz w³±czyæ tê opcjê. Korzystanie z tej opcji ma sens przy u¿ywaniu Serendipity jako multi-bloga i u¿yciu wtyczki "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Ukryæ wybran± kategoriê nadrzêdn±?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Je¶li ograniczysz wy¶wietlanie kategorii do wybranej przez siebie kategorii nadrzêdnej, standardowo zobaczysz nazwê kategorii nadrzêdnej. Wy³±czenie tej opcji (przez zaznaczenie pola "Tak") nie bêdzie wy¶wietla³o nazwy tej kategorii nadrzêdnej.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Zezwoliæ na u¿ywanie Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'W³±czenie tej opcji spowoduje u¿ycie przez wtyczkê mo¿liwo¶ci jakie oferuje Smarty do wy¶wietlania drzewa kategorii. Po w³±czeniu tej opcji mo¿esz wp³ywaæ na sposób wy¶wietlania drzewa kategorii przez edycjê pliku "plugin_categories.tpl". W³±czenie tej opcji spowoduje spadek wydajno¶ci wiêc w³±cz j± tylko kiedy jej na prawdê potrzebujesz.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Informowaæ o ilo¶ci wpisów w danej kategorii?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Zezwoliæ u¿ytkownikom na wy¶wietlanie wielu kategorii jednocze¶nie?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Po w³±czeniu tej opcji przy ka¿dej kategorii pojawi siê pole umo¿liwiaj±ce jej zaznaczenie. U¿ytkownicy mog± zaznaczaæ w ten sposób wiele kategorii jednocze¶nie i wy¶wietlaæ zbiorczo wpisy z tych zaznaczonych kategorii.');
@define('CATEGORIES_TO_FETCH', 'Kategorie do pokazania');
@define('CATEGORIES_TO_FETCH_DESC', 'Poka¿ kategorie zdefiniowane przez którego autora?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Pokazuje listê autorów');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Informowaæ o ilo¶ci wpisów dokonanych przez autora obok jego Imienia?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'je¶li ta opcja zostanie w³±czona, obok autora zostanie pokazana ilo¶æ poczynionych przez niego wpisów ujeta w nawiasy.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Poka¿ tylko autorów maj±cych co najmniej X wpisów');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Subskrybcja');
@define('SHOWS_RSS_BLAHBLAH', 'Pokazuje linki subskrybcji kana³ów RSS Twojego bloga');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 Komentarze');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID (w serwisie FeedBurner) feeda, który chcesz publikowaæ');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner obrazek');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nazwa pliku z obrazkiem, który bêdzie wy¶wietlany (obrazki s± pobierane z serwera feedburner.com), np. fbapix.gif. Pozostaw puste by wy¶wietliæ licznik (musisz wpierw uruchomiæ odpowiedni± us³ugê w serwisie FeedBurner!).');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner tytu³');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Tytu³ (je¶li jakikolwiek) jaki ma byæ wy¶wietlany obok obrazka');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner tekst obrazka');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Tekst (je¶li jakikolwiek) jaki ma byæ wy¶wietlany po wskazniu kursorem obrazka');
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
@define('ARCHIVE_COUNT', 'Ilo¶æ pozycji na li¶cie');
@define('ARCHIVE_COUNT_DESC', 'Ilo¶æ miesiêcy, tygodni lub dni wy¶wietlanych na li¶cie');
@define('ARCHIVE_FREQUENCY', 'Wy¶wietlany czasokres');
@define('ARCHIVE_FREQUENCY_DESC', 'Jednostki czasu, dla których bêdzie generowana lista');
@define('BROWSE_ARCHIVES', 'Przegl±daj archiwa miesi±cami');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Poka¿ "Serendipity" jako tekst');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Poka¿e "Serendipity Weblog" jako tekst');
@define('POWERED_BY_SHOW_IMAGE', 'Poka¿ "Serendipity" jako logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Poka¿e logo Serendipity (obrazek)');
@define('ADVERTISES_BLAHBLAH', 'Zareklamuj Serendipity');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'U¿yj https dla logowania');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Link ze Stron± logowania bêdzie obs³ugiwany przez https. Twój serwer musi to obs³ugiwaæ!');
@define('SUPERUSER', 'Administracja blogiem');
@define('SUPERUSER_OPEN_ADMIN', 'Strona logowania');
@define('SUPERUSER_OPEN_LOGIN', 'Strona logowania');
@define('ALLOWS_YOU_BLAHBLAH', 'Umieszcza w Panelu Bocznym link do Panelu Administracyjnego');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendarz');
@define('CALENDAR_BOW_DESC', 'Dzieñ uznany za pocz±tek tygodnia. Standardowo jest to poniedzia³ek.');
@define('QUICKJUMP_CALENDAR', 'Kalendarz szybkiego dostêpu');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Pocz±tek tygodnia');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'W³±cz odwo³ania wtyczek (API hook)');
@define('CALENDAR_EXTEVENT_DESC', 'Kiedy w³±czone, wtyczki mog± tworzyæ odwo³ania do kalendarza by pokazaæ (pod¶wietliæ) zdarzenia z nimi zwi±zane. W³±cz to tylko gdy masz zainstalowane wtyczki korzystaj±ce z opcji odwo³ania (hook), w przeciwnym wypadku tylko tracisz na wydajno¶ci wy¶wietlania strony.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Szukaj wpisu');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Umo¿liwia wprowadzenie kodu HTML. Efekt dzia³ania kodu bêdzie wy¶wietlany w Panelu Bocznym');
@define('THE_NUGGET', 'Kod HTML!');
@define('BACKEND_TITLE', 'Dodatkowe informacje na stonie Konfiguracja wtyczek');
@define('BACKEND_TITLE_FOR_NUGGET', 'Tu mo¿esz podaæ dodatkowy opis, który bêdzie wy¶wietlany na stronie Konfiguracji Wtyczek razem z pluginem HTML Nugget. Przydatne kiedy posiadasz kilka takich HTMLowych wstawek, pozwala siê jako¶ w tym wszystkim po³apaæ.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Pokazywaæ Top Exits/Referrers jako linki?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nie": Exits i Referrers s± pokazywane czystym tekstem. "Tak": Exits i Referrers s± pokazywane jako linki do danych adresów sieciowych. "Standardowo": u¿ywa ustawieñ z Ustawieñ g³ównych - rekomendowane.');
@define('HAVE_TO_BE_LOGGED_ON', 'Musisz siê wpierw zalogowaæ by móc obejrzeæ tê stronê');
@define('WELCOME_TO_ADMIN', 'Witaj w Panelu Administracyjnym Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Krótki komentarz');
@define('MEDIA_PROPERTY_COMMENT2', 'D³ugi komentarz');
@define('DELETE_SELECTED_ENTRIES', 'Usuñ wybrane wpisy');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Tytu³');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity nie zosta³o jeszcze zainstalowane. Proszê, <a href="%s">zainstaluj</a> je teraz.');
@define('COMMENT_ADDED_CLICK', 'Kliknij %stutaj by powróciæ%s do komentarzy oraz %stutaj by zamkn±æ%s to okno.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknij %stutaj aby wróciæ%s do komentarzy albo %stutaj by zamkn±æ%s to okno.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Czas trwania');
@define('MEDIA_PROPERTY_DATE', 'Data');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Zmieniono URL do przeniesionego katalogu w %s wpisach.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'W bazach innych ni¿ MySQL przeprowadzenie zmiany URLI ze scie¿k± do starego katalogu na URLe ze ¶cie¿k± do nowego katalogu NIE jest mo¿liwe. Musisz przeprowadziæ te zmiany rêcznie. Zawsze mo¿esz przenie¶æ katalog w jego pierwotne miejsce je¶li uznasz, ¿e rêczna edycja by³aby zbyt nieporêcznym rozwi±zaniem.');
@define('TRACKBACK_SIZE', 'Docelowe URI przekroczy³o maksymalny rozmiar %s bajtów (prawdopodobnie link do pliku).');
@define('CLICK_FILE_TO_INSERT', 'Kliknij na pliku, który chcesz umie¶ciæ:');
@define('SELECT_FILE', 'Wybierz plik do umieszczenia');
@define('MANAGE_IMAGES', 'Zarz±dzanie obrazkami');
@define('WORD_NEW', 'Nowy');
@define('WORD_OR', 'lub');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Widoczne: Serwisy Zewnêtrzne');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Widoczne: Cechy/Ustawienia/Dodatki');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Widoczne: Pe³ne Mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Widoczne: Przegl±danie');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Widoczne: Zwi±zane z wpisem');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Niewidoczne: Edytor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Niewidoczne: Zarz±dzanie u¿ytkownikami');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Niewidoczne: Meta informacje');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Niewidoczne: Szablony');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Niewidoczne: Cechy/Ustawienia/Dodatki');
@define('PLUGIN_GROUP_IMAGES', 'Obrazki');
@define('PLUGIN_GROUP_ANTISPAM', 'Antyspam');
@define('PLUGIN_GROUP_MARKUP', 'Znaczniki');
@define('PLUGIN_GROUP_STATISTICS', 'Statystyki');
@define('IMPORT_WELCOME', 'Witaj w module importu danych');
@define('USER_SELF_INFO', 'Zalogowany(a) jako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Mo¿esz tu importowaæ wpisy z innych systemów blogowych');
@define('IMPORT_SELECT', 'Wybierz system, z którego dane chcesz importowaæ');
@define('MANAGE_STYLES', 'Zarz±dzanie stylami');
@define('SELECT_A_PLUGIN_TO_ADD', 'Wybierz wtyczkê, któr± chcesz zainstalowaæ');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Poni¿ej znajduje siê lista zainstalowanych wtyczek.');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Przerwij teraz');
@define('DELETE_SELECTED_COMMENTS', 'Usuñ zaznaczone komentarze');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Znajd¼ media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'B³±d: Stara nazwa pliku nie istnieje!');
@define('ERROR_SOMETHING', 'B³±d: Co¶ jest nie tak.');
@define('DIRECT_LINK', 'Bezpo¶redni link do tego wpisu');
@define('SELECT_TEMPLATE', 'Wybierz styl dla swojego bloga');
@define('DATABASE_ERROR', 'b³±d Serendipity: nie mogê po³±czyæ siê z baz± danych - wyj¶cie.');
@define('LIMIT_TO_NUMBER', 'Jak wiele elementów ma byæ pokazanych?');
@define('DIRECTORIES_AVAILABLE', 'Na li¶cie dostêpnych podkatalogów mo¿esz klikn±æ na dowolnym katalogu by stworzyæ nowy katalog w tej strukturze.');
@define('CATEGORY_INDEX', 'Poni¿ej znajduje siê lista kategorii dostêpna dla Twoich wpisów');
@define('PAGE_BROWSE_PLUGINS', 'Strona %s z %s, ³±cznie %s wtyczek.');
@define('CHARSET_NATIVE', 'Natywne');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Interfejs XML-RPC API nie jest ju¿ wbudowany w Serendipity z powodu problemów z bezpieczeñstwem tego protoko³u. Je¶li jednak chcesz obs³ugê tego protoko³u mieæ zaimplementowan± w swoim blogu, musisz zainstalowaæ wtyczkê XML-RPC by móc u¿ywaæ protoko³u XML-RPC API. URL, jaki nale¿y u¿ywaæ w swoich aplikacjach NIE ulegnie zmianie - kiedy tylko zainstalujesz wtyczkê, bêdziesz móg³ u¿ywaæ tego API.');
@define('AUTHORS_ALLOW_SELECT', 'Zezwoliæ u¿ytkownikom na pokazywanie wpisów wielu autorów jednocze¶nie?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Je¶li ta opcja zostanie w³±czona, obok ka¿dego autora wy¶wietlonego na Panelu Bocznym uka¿e siê checkbox (pole zaznaczenia). U¿ytkownicy bêd± mogli zaznaczyæ autorów, których wpisy bêd± chcieli wy¶wietliæ.');
@define('PREFERENCE_USE_JS', 'Zezwoliæ na u¿ywanie zaawansowanych skryptów JavaScript?');
@define('PREFERENCE_USE_JS_DESC', 'Je¶li w³±czone, zaawansowane skrypty JavaScript bêd± uruchamiane dla zwiêkszenia komfortu u¿ywalno¶ci, np. w module Konfiguracji wtyczek mo¿esz administarowaæ wtyczkami za pomoc± myszy przez ich swobodne przesuwanie jak w technologii "drag and drop" (przeci±gnij i upu¶æ).');
@define('PREFERENCE_USE_JS_WARNING', '(Ta strona u¿ywa zaawansowanych skryptów JavaScript. Je¶li masz problemy z funkcjonowaniem tej strony, wy³±cz u¿ywanie zaawansowanych skryptów JavaScript w swoich Ustawieniach osobistych lub wy³±cz wspracie dla JavaScript w swojej przegl±darce.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');