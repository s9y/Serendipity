<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
/* vim: set sts=4 ts=4 expandtab : */
$i18n_filename_from = array(' ', 'a', 'A', '�', '�', 'b', 'B', 'c', 'C', '�', '�', 'd', 'D', 'e', 'E', '�', '�', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', '�', '�', 'm', 'M', 'n', 'N', '�', '�', 'o', 'O', '�', '�', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', '�', '�', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '�', '�', '�', '�');
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
@define('PREVIEW', 'Podgl�d');
@define('DATE', 'Data');
@define('TIME', 'Time');
@define('APPEARANCE', 'Wygl�d');
@define('LOGIN', 'Login');
@define('LOGOUT', 'Logout');
@define('LOGGEDOUT', 'Wylogowany(a).');
@define('CREATE', 'Stw�rz');
@define('BACK', 'Wstecz');
@define('FORWARD', 'Dalej');
@define('ANONYMOUS', 'Anonymous');
@define('RECENT', 'Ostatnie...');
@define('OLDER', 'Starsze...');
@define('DONE', 'Zrobione');
@define('TITLE', 'Tytu�');
@define('DESCRIPTION', 'Opis');
@define('PLACEMENT', 'Strona');
@define('DELETE', 'Usu�');
@define('SAVE', 'Zapis');
@define('UP', 'G�ra');
@define('DOWN', 'D�');
@define('PREVIOUS', 'Poprzedni');
@define('NEXT', 'Nast�pny');
@define('ENTRIES', 'wpisy');
@define('CATEGORIES', 'Kategorie');
@define('NAME', 'Imi�');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Strona');
@define('COMMENT', 'Komentarz');
@define('VIEW', 'Ogl�daj');
@define('HIDE', 'Ukryj');
@define('WEEK', 'Tydzie�');
@define('WEEKS', 'Tygodnie');
@define('MONTHS', 'Miesi�ce');
@define('DAYS', 'Dni');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Sukces');
@define('COMMENTS', 'Komentarze');
@define('ADD_COMMENT', 'Dodaj komentarz');
@define('NO_COMMENTS', 'Brak komentarzy');
@define('POSTED_BY', 'Zamie�ci�');
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
@define('TRACKBACKS', '�lady');
@define('TRACKBACK', '�lad');
@define('NO_TRACKBACKS', 'Brak �lad�w');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Fragment');
@define('TRACKED', 'Przes�any');
@define('USER', 'U�ytkownik');
@define('USERNAME', 'U�ytkownik');
@define('PASSWORD', 'Has�o');
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
@define('ERROR', 'B��d');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Wymu�');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administracja');
@define('ADMIN_FRONTPAGE', 'Strona startowa');
@define('QUOTE', 'Cytat');
@define('NONE', '�adne');
@define('GROUP', 'Grupa');
@define('AUTHORS', 'Autorzy');
@define('UPGRADE', 'Uaktualnienie');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Wszyscy autorzy');
@define('PREVIOUS_PAGE', 'poprzednia strona');
@define('NEXT_PAGE', 'nast�pna strona');
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
@define('SORT_ORDER', 'Porz�dek sortowania');
@define('SORT_ORDER_ASC', 'Rosn�co');
@define('SORT_ORDER_DESC', 'Malej�co');
@define('FILTERS', 'Filtry');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Rozwi�/zwi� wszystkie');
@define('TOGGLE_OPTION', 'Prze��cz opcj�');
@define('IN_REPLY_TO', 'Odpowied�');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Katalog');
@define('BACK_TO_BLOG', 'Powr�t do bloga');
@define('HTML_NUGGET', 'Pole HTML');
@define('TITLE_FOR_NUGGET', 'Tytu� elementu wy�wietlany na Panelu Bocznym');
@define('COMMENT_ADDED', 'Tw�j komentarz zosta� dodany');
@define('ENTRIES_FOR', 'Wpisy z %s');
@define('NO_ENTRIES_TO_PRINT', 'Brak wpis�w do wy�wietlenia');
@define('COMMENT_DELETE_CONFIRM', 'Na pewno usun�� komentarz #%d, napisany przez %s?');
@define('DELETE_SURE', 'Na pewno usun�� #%s ?');
@define('MEDIA_FULLSIZE', 'Pe�en rozmiar');
@define('SIDEBAR_PLUGIN', 'Wtyczk� Panelu Bocznego');
@define('EVENT_PLUGIN', 'Wtyczk� Zdarzenia');
@define('PLUGIN_ITEM_DISPLAY', 'Gdzie element ma by� wy�wietlany?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Tylko w pe�nym widoku wpisu');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Tylko na stronie g��wnej');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Zawsze');
@define('DIRECTORY_WRITE_ERROR', 'Nie mog� zapisywa� w katalogu %s. Prosz�, sprawd� prawa dost�pu do katalogu.');
@define('FILE_WRITE_ERROR', 'Nie mog� zapisywa� do pliku %s.');
@define('INCLUDE_ERROR', 'b��d Serendipity: nie mo�na by�o za��czy� %s - wyj�cie.');
@define('DO_MARKUP', 'Formatuj za pomoc� wtyczek Znacznik�w');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Format daty');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Format daty wpisu, u�ywa zmiennych funkcji strftime() j�zyka PHP. (Standardowo: "%s")');
@define('APPLY_MARKUP_TO', 'Zastosuj znacznik do %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML Button');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Linki do feed�w XML b�d� pokazywane za pomoc� tego obrazka. Pozostaw puste pole dla ustawie� domy�lnych lub wpisz \'none\' aby nie pokazywa� obrazka.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Usuwanie plik�w %s...');
@define('SETTINGS_SAVED_AT', 'Ustawienia zosta�y zapisane o %s');
@define('INVERT_SELECTIONS', 'Odwr�� wyb�r');

@define('PERSONAL_SETTINGS', 'Ustawienie osobiste');
@define('DO_MARKUP_DESCRIPTION', 'Zastosuj formatowania wtyczek Znacznik�w do tekstu (emotikonki, skr�ty znacznik�w tworzone przez u�ycie *, /, _, ...). Wy��czenie tej opcji spowoduje zachowanie kodu HTML w tek�cie.');
@define('BASE_DIRECTORY', 'Katalog bazowy');
@define('PERM_READ', 'Uprawnienia odczytu');
@define('PERM_WRITE', 'Uprawnienia zapisu');
@define('PERM_DENIED', 'Dost�p zabroniony.');
@define('CURRENT_AUTHOR', 'Bie��cy Autor');
@define('PLUGIN_ACTIVE', 'Wtyczki aktywne');
@define('PLUGIN_INACTIVE', 'Wtyczki nieaktywne');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark (dodaj do Ulubionych) ten link i u�yj na dowolnej stronie, o kt�rej chcesz blogowa�, by szybko dosta� si� do swojego bloga.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalacja Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Witaj w Instalacji Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Najpierw przyjrz� si� Twojej obecnej konfiguracji i spr�buj� rozpozna� ewentualne problemy z kompatybilno�ci�');
@define('ERRORS_ARE_DISPLAYED_IN', 'Kolory oznaczaj�: %s - b��dy, %s - rekomendacje, %s - sukcesy');
@define('RED', 'czerwony');
@define('YELLOW', '��ty');
@define('GREEN', 'zielony');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s raport przed instalacj�');
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
@define('PROBLEM_PERMISSIONS_HOWTO', 'Prawa dostepu mog� by� ustawione przez uruchomienie shellowej komendy: `<em>%s</em>` na katalogu lub przez u�ycie klienta FTP');
@define('PROBLEM_DIAGNOSTIC', 'Z powodu problem�w, kt�re zosta�y rozpoznane podczas przeprowadzania procedur diagnostycznych, nie mo�esz kontynuowa� instalacji dop�ki powy�sze problemy nie zostan� usuni�te.');
@define('SELECT_INSTALLATION_TYPE', 'Wybierz metod� instalacji');
@define('RECHECK_INSTALLATION', ' Sprawd� ponownie instalacj�');
@define('SIMPLE_INSTALLATION', 'Prosta instalacja');
@define('EXPERT_INSTALLATION', 'Instalacja w trybie Eksperta');
@define('COMPLETE_INSTALLATION', 'Pe�na instalacja');
@define('WONT_INSTALL_DB_AGAIN', 'nie zainstaluje ponownie bazy danych');
@define('THEY_DO', 'istniej�');
@define('THEY_DONT', 'nie istniej�');
@define('CHECK_DATABASE_EXISTS', 'Sprawdzam czy baza danych i tabele ju� istniej�');
@define('CREATE_DATABASE', 'Tworzenie domy�lnych ustawie� bazy danych...');
@define('ATTEMPT_WRITE_FILE', 'Pr�ba zapisania pliku %s ...');
@define('CREATING_PRIMARY_AUTHOR', 'Tworz� g��wnego autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Ustawiam domy�lny styl (template)');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instaluj� domyslne wtyczki');
@define('SERENDIPITY_INSTALLED', 'Instalacja Serendipity zako�czona sukcesem');
@define('VISIT_BLOG_HERE', 'Tutaj odwied� sw�j nowy blog');
@define('THANK_YOU_FOR_CHOOSING', 'Dzi�kujemy za wybranie Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Wykryto b��d podczas instalacji');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Nap�dzane przez Serendipity %s i PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standard editor');
@define('USERLEVEL_CHIEF_DESC', 'Chief editor');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Zmie� w�a�ciciela katalogu ze stron� na u�ytkownika, z uprawnieniami kt�rego dzia�a apache (np. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Katalog nie istnieje i nie mo�e by� utworzony. Prosz� stworzy� katalog samodzielnie.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nie mog� uruchomi� %s');
@define('FILE_CREATE_YOURSELF', 'Prosz�, stw�rz plik samodzielnie lub sprawd� prawa dost�pu.');
@define('COPY_CODE_BELOW', '<br />* Po prostu skopiuj poni�szy kod i umie�� go w %s w Twoim katalogu %s:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Kiedy wykonasz te czynno�ci wci�nij przycisk "reload" (od�wie�) w swojej przegl�darce.');
@define('ERROR_TEMPLATE_FILE', 'Nie mog� otworzy� pliku stylu (template). Prosz�, sprawd� lub unowocze�nij swoj� instalacj� Serendipity!');
@define('HTACCESS_ERROR', 'Aby sprawdzi� konfiguracj� serwera, na kt�rym instalowane jest Serendipity, program musi mie� mo�liwo�� stworzenia pliku ".htaccess". Nie by�o to mo�liwe ze wzgl�du na problemy z uprawnieniami. Prosz�, sprawd� uprawnienia w taki mniej wi�cej spos�b: <br />&nbsp;&nbsp;%s<br />i prze�aduj stron�.');
@define('EMPTY_SETTING', 'Podano nieprawid�owe dane dla "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity wykry�o instalacj� wersji %s. Wygl�da na to, �e pr�bujesz uaktualni� program do wersji %s. Musisz <a href="%s">klikn�� tutaj</a> by kontynuowa� proces aktualizacji.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Witaj w programie aktualizuj�cym Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Ten program pomo�e Ci uaktualni� Twoj� instalacj� Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Widzisz ten komunikat poniewa� w�a�nie zainstalowa�e�(a�) Serendipity %s ale jeszcze nie uaktualni�e�(a�) swojej bazy danych by spelnia�a wymagania tej wersji Serendipity.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Uaktualnienia bazy danych (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Nast�puj�ce pliki .sql musz� by� wykonane by m�c korzysta� w normalny spos�b z Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Zadania specjalne zwi�zane z t� wersj�');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nie wykryto zada� specjalnych zwi�zanych z t� wersj�');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Czy mam wykona� powy�sze zadania?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nie, wykonam je w�asnor�cznie');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Tak, wykonaj je');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Wygl�da na to, �e nie musisz aktualizowa� swojej instalacji');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity zosta�o zaktualizowane');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Zignorowa�e�(a�) etap uaktualnienia Serendipity. Prosz�, upewnij si�, �e Twoja baza danych jest prawid�owo zainstalowana a zaplanowane zadania zostan� uruchomione.');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Twoja instalacja Serendipity zosta�a uaktualniona do wersji %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Mo�esz powr�ci� do swojego bloga klikaj�c %stutaj%s');
@define('ADMIN_ENTRIES', 'Wpisy');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Could not connect to MySQL database: %s.');
@define('COULDNT_SELECT_DB', 'Could not select database: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Could not select user information: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Could not select category information: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Could not select entry information: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Could not select comment information: %s.');
@define('MYSQL_REQUIRED', 'You must have the MySQL extension in order to perform this action.');
@define('CREATE_AUTHOR', 'Stw�rz autora \'%s\'.');
@define('CREATE_CATEGORY', 'Stw�rz kategori� \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type - plik danych');
@define('INSTALL_DBPORT', 'Port bazy danych');
@define('INSTALL_DBPORT_DESC', 'Port u�ywany do po��czenia si� z serwerem z Twoj� baz� danych');
@define('IMPORT_PLEASE_ENTER', 'Wpisz odpowiednie dane, o kt�rych podanie prosz� poni�ej');
@define('IMPORT_NOW', 'Importuj!');
@define('IMPORT_STARTING', 'Rozpoczynam procedur� importu...');
@define('IMPORT_FAILED', 'Import nie powi�d� si�');
@define('IMPORT_DONE', 'Import zako�czony sukcesem');
@define('IMPORT_WEBLOG_APP', 'System blogowy');
@define('IMPORT_NOTES', 'Uwagi:');
@define('IMPORT_STATUS', 'Status wpisu po imporcie');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Zachowaj ca�y importowany tekst w sekdji "Tre�� wpisu" i nie dziel na "Rozszerzona tre�� wpisu".');
@define('IMPORT_GENERIC_RSS', 'Import RSS');
@define('ACTIVATE_AUTODISCOVERY', 'Wy�lij �lady (Trackbacki) do link�w znalezionych we wpisie/wpisach');
@define('RSS_IMPORT_CATEGORY', 'U�yj tej kategorii dla importowanych wpis�w niepasuj�cych do innych kategorii');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nie zosta� odnaleziony.');
@define('CONVERT_HTMLENTITIES', 'Pr�bowa� autokonwersji fragment�w HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Panel Administracyjny Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Wprowadzono b��dn� nazw� u�ytkownika lub has�o.');
@define('PLEASE_ENTER_CREDENTIALS', 'Wprowad� sw�j login i has�o w polach poni�ej.');
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
@define('MEDIA_LIBRARY', 'Biblioteka medi�w');
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
@define('ENTRY_PUBLISHED_FUTURE', 'Ten wpis nie zosta� jeszcze opublikowany.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Prawa autorskie (Copyright)');
@define('SIDEBAR_PLUGINS', 'Wtyczki Paneli Bocznych');
@define('EVENT_PLUGINS', 'Wtyczki Zdarze�');
@define('CONFIGURE_PLUGINS', 'Konfiguracja wtyczek');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Niespe�nione wymagania: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'uaktualnienie do wersji %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Kliknij by zainstalowa� now� %s');
@define('ALREADY_INSTALLED', 'Ju� zainstalowane');
@define('PLUGIN_AVAILABLE_COUNT', 'Razem: %d wtyczek');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Edycja wpis�w');
@define('EDIT_ENTRY', 'Edycja wpisu');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Szkic');
@define('PUBLISH', 'Publikacja');
@define('CONTENT', 'Zawarto��');
@define('ENTRIES_PER_PAGE', 'Wpis�w na stron�');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Wpisy Przyklejone');
@define('PAGE_BROWSE_ENTRIES', 'Strona %s z %s, ��cznie %s wpis�w');
@define('FIND_ENTRIES', 'Znajd� wpisy');
@define('RIP_ENTRY', 'Wpis #%s usuni�ty.');
@define('NEW_ENTRY', 'Nowy wpis');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Tre�� wpisu');
@define('EXTENDED_BODY', 'Rozszerzona tre�� wpisu');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Szkic wiadomo�ci zosta� zapisany');
@define('IFRAME_PREVIEW', 'Serendipity tworzy teraz podgl�d Twojego wpisu...');
@define('IFRAME_WARNING', 'Twoja przegl�darka nie wspiera iframes. Prosz�, otw�rz plik serendipity_config.inc.php i ustaw zmienn� $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Uwaga: data, kt�r� podano, nie jest prawid�owa. Data musi by� podana w formacie YYYY-MM-DD HH:MM (RRRR-MM-DD GG:MM).');
@define('ADVANCED_OPTIONS', 'Zaawansowane ustawienia');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Nie klikaj na ten link. Zawiera on URI ze �ladem (Trackback) dla tego wpisu. Mo�esz u�y� tego URI by wys�a� pinga lub stworzy� �lad ze swojego bloga do tego wpisu. Aby skopiowa� ten URI kliknij prawym przyciskiem myszy na linku i wybierz opcj� "Kopiuj skr�t" (lub podobn�).');
@define('RESET_DATE', 'Ustaw dat�');
@define('RESET_DATE_DESC', 'Kliknij tutaj by ustawi� aktualn� dat� i czas dla tego wpisu');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'U�ytkownicy');
@define('CREATE_NEW_USER', 'Nowy u�ytkownik');
@define('CREATE_NOT_AUTHORIZED', 'Nie mo�esz zmiania� danych u�ytkownik�w maj�cych ten sam Poziom co Ty');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nie mo�esz tworzy� u�ytkownik�w o wy�szym Poziomie ni� Tw�j w�asny');
@define('CREATED_USER', 'Nowy u�ytkownik %s zosta� utworzony');
@define('MODIFIED_USER', 'Ustawienia u�ytkownika %s zosta�y zmienione');
@define('USER_LEVEL', 'Poziom');
@define('WARNING_NO_GROUPS_SELECTED', 'Uwaga: Nie dokonano przydzia��w do �adnej grupy. To spowoduje uniemo�liwienie dministrowania przydzia�ami do grup. Twoje dotychczasowe przydzia�y nie zosta�y jednak zmienione. W przypadku problem�w - skontaktuj si� z administratorem.');
@define('DELETE_USER', 'Zamierzasz usun�� u�ytkownika #%d %s. Na pewno? To uniemo�liwi wy�wietlanie jakichkolwiek wpis�w tego u�ytkownika na stronie.');
@define('DELETED_USER', 'U�ytkownik #%d %s usuni�ty.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Grupy');
@define('DELETED_GROUP', 'Grupa #%d %s usuni�ta');
@define('CREATED_GROUP', 'Nowa grupa %s zosta�a stworzona');
@define('MODIFIED_GROUP', 'Ustawienia grupy %s zosta�y zmienione');
@define('CREATE_NEW_GROUP', 'Stw�rz now� grup�');
@define('DELETE_GROUP', 'Masz zamiar skasowa� grup� #%d %s. Na pewno?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Znajd� komentarze');
@define('COMMENTS_FILTER_SHOW', 'Poka�');
@define('COMMENTS_FILTER_ALL', 'Wszystkie');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Tylko zaaprobowane');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Oczekuj�ce na aprobat�');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Na pewno usun�� zaznaczone komentarze?');
@define('PAGE_BROWSE_COMMENTS', 'Strona %s z %s, ��cznie %s komentarzy');
@define('COMMENT_IS_DELETED', '(Komentarz usuni�ty)');
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
@define('CATEGORY_SAVED', 'Zapisano kategori�');
@define('CATEGORY_ALREADY_EXIST', 'Kategoria o nazwie "%s" ju� isnieje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategoria #%s zosta�a usuni�ta. Stare wpisy zosta�y przeniesione do kategorii #%s.');
@define('CATEGORY_DELETED', 'Kategoria #%s usuni�ta');
@define('INVALID_CATEGORY', 'Nie podano kategorii do usuni�cia');
@define('EDIT_THIS_CAT', 'Edycja kategorii "%s"');
@define('CATEGORY_REMAINING', 'Usu� t� kategori� i przesu� wpisy do niej do tej pory nale��ce do kategorii');
@define('PARENT_CATEGORY', 'Kategoria nadrz�dna');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Nowa kategoria');
@define('ALREADY_SUBCATEGORY', '%s jest ju� podkategori� kategorii %s.');
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
@define('EXPORT_FEED', 'Wyeksportuj pe�en feed RSS');
@define('CREATE_THUMBS', 'Przebuduj miniatury');
@define('WARNING_THIS_BLAHBLAH', "UWAGA:\\nTo mo�e nieco potrwa� je�li jest wiele obrazk�w bez miniaturek.");
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
@define('WARNING_TEMPLATE_DEPRECATED', 'Uwaga: Tw�j aktualny styl (template) u�ywa nieobs�ugiwanej ju� metody, doradzamy aktualizacj� Serendipity o ile to mo�liwe');
@define('STYLE_OPTIONS_NONE', 'Ten Styl nie posiada opcji specjalnych. Aby dowiedzie� si� jak mo�esz zaimplementowa� w swoim Stylu opcje specjalne, odwied� stron� www.s9y.org i przeczytaj w dziale Technical Documentation dokument zatytu�owany "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Opcje Stylu/Tematu');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Zmodyfikowany Panel Administracyjny dost�pny');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Ustaw jako aktywny styl');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Sprawd� i zapisz');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Usu� zaznaczone wtyczki');
@define('SAVE_CHANGES_TO_LAYOUT', 'Zapisz zmiany w layoucie');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizacja bazy danych z katalogiem obrazk�w');
@define('SYNC_DONE', 'Zrobione (%s obrazk�w zsynchronizowanych).');
@define('RESIZE_BLAHBLAH', '<b>Zmie� rozmiar: %s</b>');
@define('ORIGINAL_SIZE', 'Oryginalny rozmiar: <i>%sx%s</i> pikseli');
@define('RESIZING', 'Zmieniam rozmiar');
@define('RESIZE_DONE', 'Zrobione (ilo�� obrazk�w, kt�rym zmieniono rozmiar: %s).');
@define('KEEP_PROPORTIONS', 'Zachowaj proporcje');
@define('REALLY_SCALE_IMAGE', 'Na pewno przeskalowa� obrazek? Ta operacja jest nieodwracalna!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Tu mo�esz zmieni� rozmiar obrazka. Je�li chcesz zmieni� rozmiar proporcjonalnie, zaznacz odpowiedni� opcj�, wpisz warto�� w jedno z p�l i wci�nij TAB - nowy rozmiar dla drugiej warto�ci zostanie automatycznie obliczony, tak by proporcje obrazka zosta�y zachowane.</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nowy rozmiar: ');
@define('SCALING_IMAGE', 'Skaluj� %s do %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Katalog i pliki zosta�y poprawnie przeniesione do %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Katalog i pliki nie mog�y by� przeniesione do %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Katalog <strong>%s</strong> zosta� utworzony.');
@define('PARENT_DIRECTORY', 'Nadrz�dny katalog');
@define('CONFIRM_DELETE_DIRECTORY', 'Na pewno usun�� ca�� zawarto�� katalogu %s?');
@define('ERROR_NO_DIRECTORY', 'B��d: Katalog %s nie istnieje');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nie mo�na usun�� katalogu, w kt�rym znajduj� si� pliki. Zaznacz "si�owe usuwanie" je�li chcesz tak�e usun�� pliki w katalogu. Znajduj�ce si� w katalogu pliki:');
@define('DIRECTORY_DELETE_FAILED', 'Usuwanie katalogu %s nie powiod�o si�. Sprawd� prawa dost�pu lub zastosuj si� do zalece� powy�szego powiadomienia.');
@define('DIRECTORY_DELETE_SUCCESS', 'Katalog %s usuni�ty.');
@define('CHECKING_DIRECTORY', 'Sprawdzanie plik�w w katalogu %s');
@define('DELETE_DIRECTORY', 'Usu� katalog');
@define('DELETE_DIRECTORY_DESC', 'Zamierzasz usun�� zawarto�� katalogu, w kt�rym znajduj� si� pliki medi�w prawdopodobnie u�ytych w Twoich wpisach.');
@define('FORCE_DELETE', 'Usu� WSZYSTKIE pliki w tym katalogu, tak�e te nie znane Serendipity i nie wy�wietlane w Bibliotece medi�w');
@define('CREATE_DIRECTORY', 'Stw�rz nowy katalog');
@define('CREATE_NEW_DIRECTORY', 'Stw�rz nowy katalog');
@define('CREATE_DIRECTORY_DESC', 'Mo�esz tu stworzy� nowy katalog, w kt�rym b�d� przechowywane pliki medi�w. Wpisz nazw� nowego katalogu i wybierz ewentualny katalog nadrz�dny, w kt�rym zostanie utworzony Tw�j podkatalog.');
@define('ABOUT_TO_DELETE_FILE', 'Masz zamiar usun�c plik <b>%s</b><br />Je�li w kt�rym� z wpis�w zosta�o zdefiniowane odwo�anie do pliku, plik ten nie b�dzie wi�cej dla tego odwa�ania dost�pny (link nie b�dzie dzia�a� prawid�owo).<br />Czy chcesz kontynuowa�?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'B��d: Plik znajduje si� ju� na Twoim serwerze!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nie mo�na odnalze�� pliku <b>%s</b>. By� mo�e zosta� ju� usuni�ty?');
@define('ERROR_FILE_FORBIDDEN', 'Nie mo�esz uploadowa� plik�w z aktywn� zawarto�ci�');
@define('REMOTE_FILE_NOT_FOUND', 'Nie odnaleziono pliku na zdalnym serwerze, czy na pewno �cie�ka <b>%s</b> jest poprawna?');
@define('FILE_FETCHED', '%s pobrano jako %s');
@define('FILE_UPLOADED', 'Plik %s prawid�owo za�adowany na serwer jako %s');
@define('DELETE_FILE_FAIL', 'Usuwanie pliku <b>%s</b> nie powiod�o si�');
@define('DELETE_FILE', 'Usuni�to plik o nazwie <b>%s</b>');
@define('FOUND_FILE', 'Znaleziono nowy/zmodyfikowany plik: %s.');
@define('FILENAME_REASSIGNED', 'Automatycznie przydzielona nowa nazwa pliku: %s');
@define('ERROR_FILE_EXISTS', 'B��d: Nowa nazwa pliku jest ju� w u�yciu, wybierz inn�!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'podlinkowane');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Wprowad� now� nazw� dla: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Dodawanie obrazka...');
@define('THUMB_CREATED_DONE', 'Miniaturka stworzona.<br/>Zrobione.');
@define('THUMBNAIL_USING_OWN', 'U�yj� obrazka %s jako jego w�asnej miniatury bo ju� jest w rozmiarach miniatury.');
@define('THUMBNAIL_FAILED_COPY', 'Chciano u�y� %s jako jego w�a�nej miniatury ale proces kopiowania si� nie powi�d�!');
@define('DELETE_THUMBNAIL', 'Usuni�to minturk� o nazwie	<b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Wyst�pi� nieznany b��d, plik nie zosta� za�adowany. By� mo�e konfiguracja serwera nie zezwala na przesy�anie tak du�ych plik�w. Sprawd� to u swojego ISP lub wyedytuj odpowiednio plik php.ini (je�li masz dost�p do konfiguracji serwera) by zezwoli� na przesy�anie wi�kszych plik�w.');
@define('MEDIA_UPLOAD_SIZEERROR', 'B��d: Nie mo�esz wysy�a� na serwer plik�w wi�kszych ni� %s bajt�w!');
@define('MEDIA_UPLOAD_DIMERROR', 'B��d: Nie mo�esz wysy�a� na serwer obrazk�w wi�kszych ni� %s x %s piksele!');
@define('HOTLINK_DONE', 'Plik podlinkowany.<br />Zrobione.');
@define('DELETE_HOTLINK_FILE', 'Skasuj podlinkowany plik o nazwie <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nie mo�na wykona�: %s, b��d: %s, zwr�cona warto��: %d');
@define('SKIPPING_FILE_EXTENSION', 'Pomijanie pliku: brak rozszerzenia w pliku %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Pomijanie pliku: nie mog� czyta� z %s.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Ustaw te same uprawnienia na wszystkich podkatalogach');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Chc� u�y� miniaturki we wpisie');
@define('I_WANT_BIG_IMAGE', 'Chc� u�y� obrazka w pe�nym rozmiarze we wpisie');
@define('I_WANT_NO_LINK', 'Obrazek ma byc wy�wietlany jako zwyk�y obrazek');
@define('I_WANT_IT_TO_LINK', 'Obrazek ma by� wy�wietlany jako link do:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Rozmiar obrazka');
@define('IMAGE_ALIGNMENT', 'Wyr�wnanie obrazka');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Linkowanie obrazka');
@define('MEDIA_TARGET', 'Spos�b wy�wietlenia');
@define('MEDIA_TARGET_JS', 'Okienko Popup (via JavaScript, rozmiar dopasowuj�cy si� do obrazka)');
@define('MEDIA_ENTRY', 'Osobny wpis');
@define('MEDIA_TARGET_BLANK', 'Osobne okno (via target=_blank)');
@define('YOU_CHOSE', 'Wybrano %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Obr�� obrazek 90 stopni w lewo');
@define('IMAGE_ROTATE_RIGHT', 'Obr�� obrazek 90 stopni w prawo');
@define('MEDIA_RENAME', 'Zmien nazw� pliku');
@define('THUMBNAIL_SHORT', 'Miniatura');
@define('ORIGINAL_SHORT', 'Orygina�');
@define('SORT_ORDER_NAME', 'Nazwa pliku');
@define('SORT_ORDER_EXTENSION', 'Rozszerzenie pliku');
@define('SORT_ORDER_SIZE', 'Rozmiar pliku');
@define('SORT_ORDER_WIDTH', 'Szeroko�� obrazka');
@define('SORT_ORDER_HEIGHT', 'Wysoko�� obrazka');
@define('SORT_ORDER_DATE', 'Data uploadu');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Dodaj plik do zbioru medi�w:</b><p>Tu mo�esz uploadowa� pliki z mediami lub wskaza� jakie� pliki dost�pne w sieci! Je�li nie masz odpowiedniego obrazka, <a href="https://images.google.com/" target="_blank">znajd� w serwisie Google</a> obrazki, kt�re by� mo�e b�d� Ci odpowiada�y. Rezultaty wyszukiwania s� cz�sto przydatne i zabawne :) Ale uwa�aj! Wi�kszo�� obrazk�w ma zastrze�one prawa autorskie i powiniene� (powinna�) zapyta� si� o pozwolenie przed ich u�yciem!</p><p><b>Wybierz metod�:</b></p><br />');
@define('ENTER_MEDIA_URL', 'Wprowad� URL pliku dost�pnego w sieci:');
@define('ENTER_MEDIA_UPLOAD', 'Wybierz plik do uploadu:');
@define('SAVE_FILE_AS', 'Zapisz plik jako:');
@define('STORE_IN_DIRECTORY', 'Zapisz w nast�puj�cym katalogu: ');
@define('IMAGE_MORE_INPUT', 'Dodaj wi�cej obrazk�w');
@define('ENTER_MEDIA_URL_METHOD', 'Spos�b pobierania');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'UWAGA! Je�li wybierasz opcj� linkowania do pliku w sieci, upewnij si�, �e masz do tego prawo! Linkowanie pozwala na u�ywanie obrazk�w z innych stron bez potrzeby ich zgrywania na serwer.');
@define('FETCH_METHOD_IMAGE', 'Pobierz obrazek na serwer');
@define('FETCH_METHOD_HOTLINK', 'Linkowanie do serwera');
@define('GO_ADD_PROPERTIES', 'Dodaj i wprowad� w�a�ciwo�ci');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zmie� rozmiar obrazka');
@define('MEDIA_DELETE', 'Usu� ten plik');
@define('FILES_PER_PAGE', 'Plik�w na stron�');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nie znaleziono obrazk�w');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'wszystkie katalogi');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfiguracja zapisana');
@define('DIAGNOSTIC_ERROR', 'Stwierdzono istnienie pewnych problem�w podczas przeprowadzania procedur diagnostycznych. Upewnij si�, �e poda�e� prawid�owe dane:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Ustawienia bazy danych');
@define('INSTALL_CAT_DB_DESC', 'Tu mo�esz poda� wszystkie dane na temat Twojej bazy danych. Serendipity potrzebuje tych informacji by m�c funkcjonowac prawid�owo.');
@define('INSTALL_DBTYPE', 'Typ bazy danych');
@define('INSTALL_DBTYPE_DESC', 'Typ bazy danych');
@define('INSTALL_DBHOST', 'Host bazy danych');
@define('INSTALL_DBHOST_DESC', 'Nazwa hosta serwera Twojej bazy danych');
@define('INSTALL_DBUSER', 'U�ytkownik bazy danych');
@define('INSTALL_DBUSER_DESC', 'Nazwa u�ytkownika u�ywana do ��czenia si� z baz� danych');
@define('INSTALL_DBPASS', 'Has�o bazy danych');
@define('INSTALL_DBPASS_DESC', 'Has�o dla u�ytkownika podanego powy�ej');
@define('INSTALL_DBNAME', 'Nazwa bazy danych');
@define('INSTALL_DBNAME_DESC', 'Nazwa Twojej bazy danych');
@define('INSTALL_DBPREFIX', 'Prefiks tabel bazy danych');
@define('INSTALL_DBPREFIX_DESC', 'Prefiks dla nazw tabel, np. serendipity_');
@define('INSTALL_DBPERSISTENT', 'U�ywaj sta�ych po��cze� z baz� danych');
@define('INSTALL_DBPERSISTENT_DESC', 'Zezw�l na u�ywanie sta�ych po��cze� z baz� danych, wi�cej <a href="http://pl.php.net/manual/pl/features.persistent-connections.php" target="_blank">tutaj</a>. W��czenie tej opcji nie jest zalecane.');
@define('INSTAL_DB_UTF8', 'W��cz konwersj� kodowania zak�w dla bazy danych');
@define('INSTAL_DB_UTF8_DESC', 'Rozwi�zuje problem z zapytaniem SET NAMES bazy danych aby ustali� prawid�owe kodowanie dla bazy danych. W��cz lub wy��cz t� opcj� je�li widzisz na swojej stronie dziwne znaczki zamiast znak�w diakrytycznych.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '�cie�ki');
@define('INSTALL_CAT_PATHS_DESC', 'R�ne �cie�ki do istotnych katalog�w i plik�w. Nie zapomnij o poprzedzaj�cych katalogi slaszach "/"!');
@define('INSTALL_FULLPATH', 'Pe�na �cie�ka');
@define('INSTALL_FULLPATH_DESC', 'Pe�na, bezwzgl�dna �cie�ka do Twojej instalacji Serendipity');
@define('INSTALL_UPLOADPATH', '�cie�ka uploadu');
@define('INSTALL_UPLOADPATH_DESC', 'Wszystkie uploady (�adowane na serwer pliki) b�d� trafia�y tutaj. Podaj wzgl�dn� (relatywn�) w stosunku do "Pe�nej �cie�ki" �cie�k� dost�pu - zazwyczaj jest to "uploads/"');
@define('INSTALL_RELPATH', 'Wzgl�dna �cie�ka');
@define('INSTALL_RELPATH_DESC', '�cie�ka do Serendipity podawana Twojej przegl�darce - zazwyczaj jest to "/serendipity/"');
@define('INSTALL_RELTEMPLPATH', 'Wzgl�dna �cie�ka styli (templates)');
@define('INSTALL_RELTEMPLPATH_DESC', '�cie�ka do katalogu zawieraj�cego style (templates) - wzgl�dna (relatywna) wobec "wzgl�dnej �cie�ki"');
@define('INSTALL_RELUPLOADPATH', 'Wzgl�dna �cie�ka uploadu');
@define('INSTALL_RELUPLOADPATH_DESC', '�cie�ka uploadu podawana przegl�darkom - wzgl�dna (relatywna) wobec "wzgl�dnej �cie�ki"');
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
@define('INSTALL_PERMALINK_COMMENTSPATH', '�cie�ka do komentarzy');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Ustawienia g��wne');
@define('INSTALL_CAT_SETTINGS_DESC', 'Ustal g��wne ustawienia i zachowania Serendipity');
@define('INSTALL_USERNAME', 'Nazwa u�ytkownika administratora');
@define('INSTALL_USERNAME_DESC', 'Nazwa u�ytkownika dla logowania administratora');
@define('INSTALL_PASSWORD', 'Has�o administratora');
@define('INSTALL_PASSWORD_DESC', 'Has�o dla logowania administratora');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Prawdziwe imi� i nazwisko');
@define('USERCONF_REALNAME_DESC', 'Pe�ne imi� i nazwisko, jest widziane przez czytaj�cych');
@define('INSTALL_EMAIL', 'E-mail administratora');
@define('INSTALL_EMAIL_DESC', 'Adres e-mail administratora bloga');
@define('INSTALL_SENDMAIL', 'Wysy�a� powiadomienia e-mail do administratora?');
@define('INSTALL_SENDMAIL_DESC', 'Czy chcesz oytrzymywa� powiadomienia drog� mailow� o dopisaniu komentarza do wpisu?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nazwa bloga');
@define('INSTALL_BLOGNAME_DESC', 'Tytu� Twojego bloga');
@define('INSTALL_BLOGDESC', 'Opis bloga');
@define('INSTALL_BLOGDESC_DESC', 'Opis Twojego bloga');
@define('INSTALL_BLOG_EMAIL', 'Adres e-mail bloga');
@define('INSTALL_BLOG_EMAIL_DESC', 'Mo�esz tu wpisa� adres poczty e-mail, kt�ry b�dzie widoczny w polu "From" wysy�anych maili z powiadomieniami. Upewnij si�, �e podajesz adres rozpoznawalny dla serwera - wiele serwer�w mailowych odrzuca maile nie zawieraj�ce poprawnego nag��wka "From".');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'J�zyk');
@define('INSTALL_LANG_DESC', 'Wybierz j�zyk dla swojego bloga');
@define('INSTALL_CHARSET', 'Wyb�r kodowania znak�w');
@define('INSTALL_CHARSET_DESC', 'Tu mo�esz ustawi� kodowanie pomi�dzy UTF-8 a natywnym kodowaniem danego j�zyka (ISO, EUC, ...). Niekt�re j�zyki oferuj� wsparcie tylko kodowania UTF-8 wi�c ich zmiana na "natywne" nie odniesie skutku. SUGERUJEMY wyb�r kodowania UTF-8 dla nowych instalacji. Nie zmieniaj tych ustawie� je�li ju� dokona�e�(a�) wpis�w ze znakami specjalnymi (diakrytycznymi) - to mo�e spowodowa� problemy z wy�wietlaniem znak�w. Przeczytaj wi�cej o tym problemie na stronie https://docs.s9y.org/docs/developers/internationalization.html');
@define('INSTALL_CAL', 'Typ kalendarza');
@define('INSTALL_CAL_DESC', 'Wybierz sw�j typ kalendarza');
@define('AUTOLANG', 'U�ywaj ustawie� j�zyka przegladarki u�ytkownik�w jako standardowych');
@define('AUTOLANG_DESC', 'Je�li ta opcja zostanie w��czona, j�zyk, w jakim b�d� wy�wietlane komunikaty i wpis b�dzie zdeterminowany ustawienim j�zyka przegl�darki u�ytkownika odwiedzaj�cego Twojego bloga. Serendipity b�dzie automatycznie dobiera�o wersj� j�zykow� w zale�no�ci od ustwie� przegl�darki.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'W��czy� ograniczenia wtyczek (Plugin ACL) dla grup u�ytkownik�w?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Je�li opcja ograniczenia wtyczek jest w��czona, mo�esz okre�li� jakie wtyczki mog� by� uruchamiane przez jakie grupy u�ytkownik�w.');
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
@define('INSTALL_CAT_DISPLAY', 'Wygl�d i Opcje');
@define('INSTALL_CAT_DISPLAY_DESC', 'Skonfiguruj wygl�d i ustawienia Serendipity');
@define('INSTALL_FETCHLIMIT', 'Ilo�� wpis�w wy�wietlanych na stronie g��wnej');
@define('INSTALL_FETCHLIMIT_DESC', 'Podaj ile wpis�w ma by� jednocze�nie wy�wietlanych na stronie g��wnej i nast�pnych stronach bloga');
@define('INSTALL_RSSFETCHLIMIT', 'Ilo�� wpis�w wy�wietlanych w feedach RSS');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Ilo�� wpis�w wy�wietlanych na ka�dej stronie feeda RSS');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Aktywuj �cis�e przestrzeganie standardu RFC2616 RSS-Feed');
@define('SYNDICATION_RFC2616_DESC', 'NIE przestrzeganie �cis�e standardu RFC2616 oznacza, �e wszelkie wywo�ania kana��w RSS zwr�c� wpisy, kt�re uleg�y zmianie od ostatniego takiego wywo�ania (np. przez czytnik RSS). Je�li ustawisz t� opcj� na Nie, subskrybenci Twoich kana��w RSS otrzymaj� wszystkie artyku�y od czasu ostatniego pobrania. To zasadniczo jest dobre i prawid�owe zachowanie kana�u RSS. Jednak niekt�rzy Agenci RSS, jak na przyk�ad Planet, zachowuj� si� w takich sytuacjach dziwnie (np. co jaki� czas pojawiaj� si� stare wpisy na stronach obs�ugiwanych przez Planet). Ustawenie tej opcji na Tak zaspokoi wymagania standardu, jednak czytelnik�w Twoich kana��w RSS mog� omin�� pewne wpisy, kt�re po prostu nie b�d� ju� pokazywane tym czytelnikom, nawet je�li jeszcze ich nie przeczytali. Ustawienie tej opcji mo�e by� wi�c problemem albo dla Agregator�w typu Planet, albo dla Twoich czytelnik�w. Wi�cej informacji: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'U�yj kompresji gzip');
@define('INSTALL_USEGZIP_DESC', 'Aby przyspieszy� wysy�anie stron do u�ytkownika mo�esz u�y� kompresji gzip (zak�adaj�c, �e przegl�darka u�ytkownika obs�uguje kompresj� gzip - znakomita wi�kszo�� obs�uguje). To ustawienie jest rekomendowane.');
@define('INSTALL_XHTML11', 'Wymu� kompatybilno�� z XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Czy chcesz wymusi� kompatybilno�� ze standardem XHTML 1.1 (mo�e powodowa� problemy ze starszymi przegl�darkami czwartej generacji)');
@define('INSTALL_POPUP', 'Zezw�l na u�ycie wyskakuj�cych okien');
@define('INSTALL_POPUP_DESC', 'Chcesz u�y� wyskakuj�cych okienek dla komentarzy, �lad�w itp.?');
@define('INSTALL_EMBED', 'Czy Serendipity jest osadzone?');
@define('INSTALL_EMBED_DESC', 'Je�li chcesz osadzi� Serendipity na normalnej stronie, ustaw "Tak" aby pozby� si� wszelkich informacji nag��wkowych i pokazywac sam� tre�� wpis�w. Mo�esz dodatkowo skorzysta� z opcji "Plik index" aby stworzy� osobn� klas�, w kt�rej b�d� trzymane nag��wki Twojej normalnej strony. Wi�cej informacji zawiera plik README.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Zewn�trzne linki maj� by� klikalne?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nie": Zewn�trzne linki (Top Exits, Top Referrers, Komentarze) s� pokazywane czystym tekstem, bez podlinkowania odpowiadaj�cyh im adres�w (ogranicza to propagacj� spamu - ustawienie rekomendowane). "Tak": Zewn�trzne linki s� pokazywane jako linki (odpowiadaj�ce im adresy s� podlinkowane i klikalne). To ustawienie mo�e by� zmienione przez np. konfiguracj� jakiej� wtyczki!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Zablokowani Referers');
@define('INSTALL_BLOCKREF_DESC', 'Je�li istnieje jaki� host, kt�rego nie chcesz pokazywa� na li�cie Referers, wpisz go na t� list�. Wpisy rozdzielaj �rednikami ";".');
@define('INSTALL_REWRITE', 'Nadpisywanie URLi');
@define('INSTALL_REWRITE_DESC', 'Wybierz zasady, wed�ug kt�rych b�d� generowane URLe. W��czenie opcji nadpisywania URLi b�dzie tworzy�o �adne URLe dla wpis�w Twojego bloga, dodatkowo lepiej indeksowalne przez wyszukiwarki typu Google. Serwer musi obs�ugiwa� mod_rewrite lub "AllowOverride All" dla katalogu z Serendipity. Standardowym ustawieniem jest ustawienie wykryte przy pr�ba autodetekcji ustawie� serwera.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Przesuni�cie czasu serwera');
@define('INSTALL_OFFSET_DESC', 'Podaj czas (w godzinach) przesuni�cia mi�dzy czasem serwera (aktualny: %clock%) a Twoj� stref� czasow�');
@define('INSTALL_SHOWFUTURE', 'Pokazuj przysz�e wpisy');
@define('INSTALL_SHOWFUTURE_DESC', 'Je�li opcja zostanie w��czona, b�d� pokazywane wszystkie przysz�e wpisy (wpisy z ustawion� dat� przysz��). Standardowo wpisy te s� ukryte do czasu nadej�cia czasu ich wy�wietlenia.');
@define('INSTALL_ACL', 'Zastosuj ograniczenia dost�pu dla kategorii');
@define('INSTALL_ACL_DESC', 'Je�li to ustawienie zostanie w��czone, b�d� stosowane ogranieczenia dost�pu do kategorii podczas przegl�dania wpis�w przez zalogowanych u�ytkownik�w. Je�li ustawienie to zostanie wy��czone, takie ogranieczenia NIE b�d� stosowane. Pozytywnym efektem wy��czenia tej opcji jest przyspieszenie pracy silnika bloga. Je�li wi�c nie musisz stosowa� ogranicze� dost�pu do kategorii - wy��cz t� opcj�.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Pokazywa� tak�e Rozszerzon� tre�� wpisu w feedzie RSS?');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrazek dla feed�w RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL do obrazka w formacie GIF/JPEG/PNG, o ile dost�pny. (pusty: logo Serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Szeroko�� obrazka');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'w pikselach, max 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Wysoko�� obrazka');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'w pikselach, max 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Pokazywa� adresy e-mail?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Adresy e-mail edytora zarz�dzaj�cego tre�ci�, o ile dost�pne. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Adresy e-mail webmastera, o ile dost�pne. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Ilo�� minut, po kt�rych Tw�j blog nie powinien by� cachowany przez zewn�trzne strony/programy obs�uguj�ce RSS. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Czy pole "pubDate" ma by� za��czone w tre�ci RSS? Zawiera ono dat� publikacji ostatniego wpisu.');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Ustawienia konwersji obrazk�w');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Wpriwad� ustawienia dotycz�ce sposob�w obs�ugi obrazk�w przez Serendipity');
@define('INSTALL_IMAGEMAGICK', 'U�yj ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Czy masz zainstalowany program ImageMagick i chcesz u�y� go do zmiany rozmiar�w obrazk�w?');
@define('INSTALL_IMAGEMAGICKPATH', '�cie�ka do programu konwertuj�cego');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Pe�na �cie�ka do i nazwa u�ywanego przez Ciebie programu obs�uguj�cego ImageMagick');
@define('INSTALL_THUMBSUFFIX', 'Sufiks Miniaturek');
@define('INSTALL_THUMBSUFFIX_DESC', 'Miniaturki b�d� nazywane wed�ug nast�puj�cego formatu: nazwaoryginalna.[sufiks].rozszerzenie');
@define('INSTALL_THUMBWIDTH', 'Szeroko�� miniaturki');
@define('INSTALL_THUMBWIDTH_DESC', 'Ustal szeroko�� tworzonych automatycznie miniatur');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Maksymalny rozmiar wysy�anego pliku');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Wprowad� maksymalny rozmiar wysy�anego pliku w bajtach. To ustawienie mo�e by� uniewa�nione przez ustawienia serwera w pliku PHP.ini: upload_max_filesize, post_max_size, max_input_time - wszystkie te opcje mog� mie� wp�yw na to ustawienie. Puste pole oznacza, �e maj� by� stosowane ustawienia po stronie serwera.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Maksymalna szeroko�� obrazk�w wysy�anych na serwer');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Wprowad� maksymaln� szeroko�� (w pikselach) dla wysy�anych na serwer obrazk�w');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Maksymlana wysoko�� obrazk�w wysy�anych na serwer');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Wprowad� maksymaln� wysoko�� (w pikselach) dla wysy�anych na serwer obrazk�w');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'W��cz synchronizacj� medi�w "w locie"');
@define('ONTHEFLYSYNCH_DESC', 'Je�li w��czone, Serendipity b�dzie por�wnywa�o zawarto�� bazy danych medi�w z plikami istniej�cymi na serwerze i w razie wyst�pienia r�nic wykona synchronizacj� bazy z zawarto�ci� katalog�w na serwerze.');
@define('MEDIA_DYN_RESIZE', 'Zezwala� na dynamiczn� zmian� rozmiaru?');
@define('MEDIA_DYN_RESIZE_DESC', 'Je�li w��czone, modu� obs�ugi medi�w mo�e zwracac obrazki w dowolnej ��danej wielko�ci podawanej przez GET. Rezultaty zmian s� buforowane i mog� spowodowa� spory rozrost bazy plik�w je�li b�dzie ta opcja wykorzystywana intensywnie.');
@define('MEDIA_EXIF', 'Importuj dane EXIF/JPEG obrazk�w/zdj��');
@define('MEDIA_EXIF_DESC', 'Je�li opcja zostanie w��czona, zapisane w plikach z obrazkami/zdj�ciami dane EXIF/JPEG zostan� zachowane w bazie danych i wykorzystane przy wy�wietlaniu w Bibliotece medi�w.');
@define('MEDIA_PROP', 'W�a�ciwo�ci');
@define('MEDIA_PROP_DESC', 'Wprowad� list� p�l w�a�ciwo�ci, jakie chcesz ustali� dla ka�dego pliku medium. Elementy listy rozdzielaj znakiem �rednika ";".');
@define('MEDIA_PROP_MULTIDESC', '(Mo�esz doda� ":MULTI" po ka�dym elemencie by poinformowa� Serendipity, �e dany element b�dzie posiada� d�ugi opis)');
@define('MEDIA_KEYWORDS', 'S�owa kluczowe medi�w');
@define('MEDIA_KEYWORDS_DESC', 'Wprowad� predefiniowan� list� s��w kluczowych dla medi�w. Pozycje na li�cie rozdzielaj znakiem �rednika ";". Te s�owa kluczowe b�d� przypisywane mediom automatycznie przy importowaniu.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Twoje ustawienia osobiste');
@define('USERCONF_CAT_PERSONAL_DESC', 'Zmie� swoje ustawienia osobiste');
@define('USERCONF_USERNAME', 'Twoja nazwa u�ytkownika');
@define('USERCONF_USERNAME_DESC', 'Nazwa, kt�rej u�ywasz przy logowaniu do bloga');
@define('USERCONF_PASSWORD', 'Twoje has�o');
@define('USERCONF_PASSWORD_DESC', 'Has�o, kt�rego chcesz u�y� przy logowaniu do bloga');
@define('USERCONF_CHECK_PASSWORD', 'Stare has�o');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Je�li zmienisz has�o w polu powy�ej, musisz w tym polu wpisa� aktualne has�o');
@define('USERCONF_USERLEVEL', 'Poziom dost�pu');
@define('USERCONF_USERLEVEL_DESC', 'To ustawienie okre�la jaki poziom dost�pu ma u�ytkownik do bloga.');
@define('USERCONF_GROUPS', 'Przynale�no�� do grupy');
@define('USERCONF_GROUPS_DESC', 'Ten u�ytkownik nale�y do nast�puj�cych grup. Przynale�no�� do kilku grup jednocze�nie jest mo�liwa.');
@define('USERCONF_EMAIL', 'Tw�j adres e-mail');
@define('USERCONF_EMAIL_DESC', 'Tw�j prywatny adres e-mail');
@define('INSTALL_WYSIWYG', 'U�yj edytora WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Chcesz u�y� edytora WYSIWYG? (Dzia�a w IE5+, cz�ciowo w Mozilli 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Wysy�a� powiadomienia o komentarzach?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Czy chcesz otrzymywa� maile z informacj� o komentarzach do Twoich wpis�w?');
@define('USERCONF_SENDTRACKBACKS', 'Wysy�a� powiadomienia o �ladach?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Czy chcesz otrzymywa� maile z informacj� o pozostawionych �ladach (trackbacks) do Twoich wpis�w?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Uprawnienia: Publikowanie wpis�w?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Czy ten u�ytkownik jest uprawniony do publikowania wpis�w?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Czy pokazywa� pasek narz�dziowy w oknie wyboru medi�w?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Standardowe ustawienia dla nowych wpis�w');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UWAGA: to ustawienie jest obecnie u�ywane tylko dla cel�w kompatybilno�ci ze starszymi wersjami wtyczek i silnika. Obecnie poziom dost�pu reguluj� regu�y grup u�ytkownik�w!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Wpisa�e�(a�) niepoprawne stare has�o i nie jeste� upowa�niona do zmiany nowego has�a. Twoje ustawienia NIE zostan� zapisane.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Pole nazwy u�ytkownika nie mo�e by� puste.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Dost�p do ustawie� osobistych');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Zmiana poziomu u�ytkownik�w');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Zmiana "zabro� tworzenia wpis�w"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Zmiana uprawnie� do publikowania wpis�w');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Dost�p do konfiguracji systemu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Dost�p do konfiguracji bloga');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administracja wpisami');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administracja wpisami innych u�ytkownik�w');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import wpis�w');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administracja kategoriami');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administracja kategoriami innych u�ytkownik�w');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Usuwanie kategorii');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administracja u�ytkownikami');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Usuwanie u�ytkownik�w');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Zmiana poziomu u�ytkownik�w');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administracja u�ytkownikami, kt�rzy s� w tej samej grupie (grupach)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administracja u�ytkownikami, kt�rzy s� w innych grupach');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Tworzenie nowych u�ytkownik�w');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administracja grupami u�ytkownik�w');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administracja wtyczkami');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administracja wtyczkami innych u�ytkownik�w');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administracja mediami');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administracja katalogami medi�w');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Dodawanie nowych medi�w');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Usuwanie medi�w');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administracja mediami innych u�ytkownik�w');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Ogl�danie plik�w z mediami');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Synchronizacja miniatur');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administracja komentarzami');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administracja stylami');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Ogl�danie plik�w z mediami innych u�ytkownik�w');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zabronione wtyczki');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zabronione zdarzenia');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Tw�j wpis zosta� zapisany');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'W�tki');
@define('COMMENTS_VIEWMODE_LINEAR', 'P�asko');
@define('DISPLAY_COMMENTS_AS', 'Wy�wietl komentarze jako');
@define('COMMENTS_DISABLE', 'Nie zezwalaj na komentowanie tego wpisu');
@define('COMMENTS_ENABLE', 'Zezwalaj na komentowanie tego wpisu');
@define('COMMENTS_CLOSED', 'Autor nie zezwoli� na komentowanie tego wpisu');
@define('VIEW_EXTENDED_ENTRY', 'Ci�g dalszy "%s"');
@define('TRACKBACK_SPECIFIC', 'U�yj tego linku je�li chcesz stworzy� �lad (Trackback) do tego wpisu');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'pe�ne');
@define('VIEW_TOPICS', 'tytu�y');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Tytu�y z');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Wpisy nie zosta�y prawid�owo zapisane w bazie!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapami�ta� dane?');
@define('SUBMIT_COMMENT', 'Wy�lij komentarz');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Wy�lij mailem powiadomienie o odpowiedziach');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Wygl�da na to, �e komentarz #%s zosta� ju� zaaprobowany');
@define('COMMENT_EDITED', 'Wybrany komentarz zosta� wyedytowany');
@define('COMMENTS_WILL_BE_MODERATED', 'Komentarze poddawane s� moderacji przed opublikowaniem ich na stronie.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Uwaga: Ten komentarz wymaga zaakcpetowania przed opublikowaniem go na stronie.');
@define('DELETE_COMMENT', 'Usu� komentarz');
@define('APPROVE_COMMENT', 'Zaaprobuj komentarz');
@define('REQUIRES_REVIEW', 'Wymaga sprawdzenia');
@define('COMMENT_APPROVED', 'Komentarz #%s zosta� zaaprobowany');
@define('COMMENT_DELETED', 'Komentarz #%s zosta� usuni�ty');
@define('COMMENTS_MODERATE', 'Komentarze i �lady (trackbacks) dla tego wpisu wymagaj� moderacji');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Uwaga: ten �lad (Trackback) wymaga aprobaty zanim zostanie wy�wietlony na stronie.');
@define('DELETE_TRACKBACK', 'Usu� �lad (Trackback)');
@define('APPROVE_TRACKBACK', 'Zaaprobuj �lad (Trackback)');
@define('TRACKBACK_APPROVED', '�lad (Trackback) #%s zosta� zaaprobowany');
@define('TRACKBACK_DELETED', '�lad (Trackback) #%s zosta� usuni�ty');
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
@define('TRACKBACK_SENDING', 'Wysy�anie �ladu do URI %s...');
@define('TRACKBACK_SENT', 'Pozostawienie �ladu zako�czone sukcesem');
@define('TRACKBACK_FAILED', 'Pozostawienie �ladu nie powiod�o si�: %s');
@define('TRACKBACK_NOT_FOUND', 'Nie odnaleziono URI dla ustanowienia �ladu.');
@define('TRACKBACK_URI_MISMATCH', 'Automatycznie wykryte URI dla �lad�w nie pasuje do zdefiniowanego adresu docelowego.');
@define('TRACKBACK_CHECKING', 'Badanie mo�liwo�ci pozostawienia �ladu w <u>%s</u> ...');
@define('TRACKBACK_NO_DATA', 'Miejsce docelowe nie poda�o odpowiednich danych');
@define('TRACKBACK_COULD_NOT_CONNECT', '�lad nie zosta� wys�any: nie mog� po��czy� si� z %s u�ywaj�c portu %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nowy komentarz do subskrybowanej wiadomo�ci "%s"');
@define('SUBSCRIPTION_MAIL', "Witam %s,\n\nNowy komentarz zosta� dodany do wpisu, kt�ry monitorujesz na \"%s\", zatytu�owany \"%s\"\nImi� komentuj�cego to: %s\n\nSkomentowany wpis znajdziesz tutaj: %s\n\nMo�esz wy��czy� powiadomienia o odpowiedziach do tego wpisu klikaj�c na link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Witam %s,\n\nNowy �lad zosta� pozostawiony we wpisie, kt�ry monitorujesz na \"%s\", zatytu�owany \"%s\"\nImi� komentuj�cego to: %s\n\nSkomentowany wpis znajdziesz tutaj: %s\n\nMo�esz wy��czy� powiadomienia o odpowiedziach do tego wpisu klikaj�c na link: %s\n");
@define('SIGNATURE', "\n-- \n%s jest nap�dzane przez Serendipity.\nNajlepszy engine blogowy pod tym s�o�cem. Ty tak�e mo�esz go u�ywa�.\nSprawd� <https://s9y.org> by si� dowiedzie� jak!");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nowy komentarz na blogu "%s" zosta� dodany do wpisu "%s."');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nowy �lad (Trackback) zosta� pozostawiony we wpisie "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Masz do wyboru nast�puj�ce opcje:');
@define('NEW_TRACKBACK_TO', 'Nowy �lad (trackback) do');
@define('NEW_COMMENT_TO', 'Nowy komentarz do');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nie znaleziono wpis�w zawieraj�cych zapytanie %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Twoje zapytanie o %s zwr�ci�o %s wynik�w:');
@define('SEARCH_TOO_SHORT', 'Ilo�� znak�w w zapytaniu musi by� wi�ksza od trzech. Mo�esz pr�bowa� doda� * do kr�tszych s��w, np. s9y* aby "oszuka�" wyszukiwark� by u�y�a kr�tsze zapytania.');
@define('SEARCH_ERROR', 'Funkcja wyszukiwania nie zadzia�a�a jak powinna. Uwaga dla administratora tego bloga: To mo�e si� zdarzy� w przypadku braku kluczy indeksu w Twojej bazie danych. W systemach opartych na MySQL uzytkownik powinien mie� uprawnienia do wykonania nast�puj�cego zapytania: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> B��d zwr�cony przez baz� danych: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Tw�j komentarz nie zawiera �adnych tre�ci. Prosz�, %swr��%s i spr�buj ponownie.');
@define('COMMENT_NOT_ADDED', 'Tw�j komentarz nie zosta� dodany. Ewentualne przyczyny: mo�liwo�� komentowania zosta�a wy��czona lub wprowadzi�e�(a�) b��dne dane lub Tw�j komentarz zosta� uznany za spam.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'B��dnie wprowadzone ustawienie dla opcji "%s". Ustwienie powinno by� nast�puj�cego typu: "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Pokazuje list� kategorii');
@define('CATEGORIES_PARENT_BASE', 'Poka� tylko kategorie zawieraj�ce si� w...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Mo�esz wybra� kategori� nadrz�dn� co spowoduje wy�wietlanie tylko kategorii podrz�dnych, zawartych w kategorii nadrz�dnej');
@define('CATEGORIES_HIDE_PARALLEL', 'Ukryj kategorie, kt�re nie s� cz�ci� drzewa kategorii');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Je�li chcesz ukry� kategorie, kt�re znajduj� si� w innym drzewie kategorii, musisz w��czy� t� opcj�. Korzystanie z tej opcji ma sens przy u�ywaniu Serendipity jako multi-bloga i u�yciu wtyczki "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Ukry� wybran� kategori� nadrz�dn�?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Je�li ograniczysz wy�wietlanie kategorii do wybranej przez siebie kategorii nadrz�dnej, standardowo zobaczysz nazw� kategorii nadrz�dnej. Wy��czenie tej opcji (przez zaznaczenie pola "Tak") nie b�dzie wy�wietla�o nazwy tej kategorii nadrz�dnej.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Zezwoli� na u�ywanie Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'W��czenie tej opcji spowoduje u�ycie przez wtyczk� mo�liwo�ci jakie oferuje Smarty do wy�wietlania drzewa kategorii. Po w��czeniu tej opcji mo�esz wp�ywa� na spos�b wy�wietlania drzewa kategorii przez edycj� pliku "plugin_categories.tpl". W��czenie tej opcji spowoduje spadek wydajno�ci wi�c w��cz j� tylko kiedy jej na prawd� potrzebujesz.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Informowa� o ilo�ci wpis�w w danej kategorii?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Zezwoli� u�ytkownikom na wy�wietlanie wielu kategorii jednocze�nie?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Po w��czeniu tej opcji przy ka�dej kategorii pojawi si� pole umo�liwiaj�ce jej zaznaczenie. U�ytkownicy mog� zaznacza� w ten spos�b wiele kategorii jednocze�nie i wy�wietla� zbiorczo wpisy z tych zaznaczonych kategorii.');
@define('CATEGORIES_TO_FETCH', 'Kategorie do pokazania');
@define('CATEGORIES_TO_FETCH_DESC', 'Poka� kategorie zdefiniowane przez kt�rego autora?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Pokazuje list� autor�w');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Informowa� o ilo�ci wpis�w dokonanych przez autora obok jego Imienia?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'je�li ta opcja zostanie w��czona, obok autora zostanie pokazana ilo�� poczynionych przez niego wpis�w ujeta w nawiasy.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Poka� tylko autor�w maj�cych co najmniej X wpis�w');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Subskrybcja');
@define('SHOWS_RSS_BLAHBLAH', 'Pokazuje linki subskrybcji kana��w RSS Twojego bloga');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID (w serwisie FeedBurner) feeda, kt�ry chcesz publikowa�');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner obrazek');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nazwa pliku z obrazkiem, kt�ry b�dzie wy�wietlany (obrazki s� pobierane z serwera feedburner.com), np. fbapix.gif. Pozostaw puste by wy�wietli� licznik (musisz wpierw uruchomi� odpowiedni� us�ug� w serwisie FeedBurner!).');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner tytu�');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Tytu� (je�li jakikolwiek) jaki ma by� wy�wietlany obok obrazka');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner tekst obrazka');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Tekst (je�li jakikolwiek) jaki ma by� wy�wietlany po wskazniu kursorem obrazka');
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
@define('ARCHIVE_COUNT', 'Ilo�� pozycji na li�cie');
@define('ARCHIVE_COUNT_DESC', 'Ilo�� miesi�cy, tygodni lub dni wy�wietlanych na li�cie');
@define('ARCHIVE_FREQUENCY', 'Wy�wietlany czasokres');
@define('ARCHIVE_FREQUENCY_DESC', 'Jednostki czasu, dla kt�rych b�dzie generowana lista');
@define('BROWSE_ARCHIVES', 'Przegl�daj archiwa miesi�cami');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Poka� "Serendipity" jako tekst');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Poka�e "Serendipity Weblog" jako tekst');
@define('POWERED_BY_SHOW_IMAGE', 'Poka� "Serendipity" jako logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Poka�e logo Serendipity (obrazek)');
@define('ADVERTISES_BLAHBLAH', 'Zareklamuj Serendipity');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'U�yj https dla logowania');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Link ze Stron� logowania b�dzie obs�ugiwany przez https. Tw�j serwer musi to obs�ugiwa�!');
@define('SUPERUSER', 'Administracja blogiem');
@define('SUPERUSER_OPEN_ADMIN', 'Strona logowania');
@define('SUPERUSER_OPEN_LOGIN', 'Strona logowania');
@define('ALLOWS_YOU_BLAHBLAH', 'Umieszcza w Panelu Bocznym link do Panelu Administracyjnego');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendarz');
@define('CALENDAR_BOW_DESC', 'Dzie� uznany za pocz�tek tygodnia. Standardowo jest to poniedzia�ek.');
@define('QUICKJUMP_CALENDAR', 'Kalendarz szybkiego dost�pu');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Pocz�tek tygodnia');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'W��cz odwo�ania wtyczek (API hook)');
@define('CALENDAR_EXTEVENT_DESC', 'Kiedy w��czone, wtyczki mog� tworzy� odwo�ania do kalendarza by pokaza� (pod�wietli�) zdarzenia z nimi zwi�zane. W��cz to tylko gdy masz zainstalowane wtyczki korzystaj�ce z opcji odwo�ania (hook), w przeciwnym wypadku tylko tracisz na wydajno�ci wy�wietlania strony.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Szukaj wpisu');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Umo�liwia wprowadzenie kodu HTML. Efekt dzia�ania kodu b�dzie wy�wietlany w Panelu Bocznym');
@define('THE_NUGGET', 'Kod HTML!');
@define('BACKEND_TITLE', 'Dodatkowe informacje na stonie Konfiguracja wtyczek');
@define('BACKEND_TITLE_FOR_NUGGET', 'Tu mo�esz poda� dodatkowy opis, kt�ry b�dzie wy�wietlany na stronie Konfiguracji Wtyczek razem z pluginem HTML Nugget. Przydatne kiedy posiadasz kilka takich HTMLowych wstawek, pozwala si� jako� w tym wszystkim po�apa�.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Pokazywa� Top Exits/Referrers jako linki?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nie": Exits i Referrers s� pokazywane czystym tekstem. "Tak": Exits i Referrers s� pokazywane jako linki do danych adres�w sieciowych. "Standardowo": u�ywa ustawie� z Ustawie� g��wnych - rekomendowane.');
@define('HAVE_TO_BE_LOGGED_ON', 'Musisz si� wpierw zalogowa� by m�c obejrze� t� stron�');
@define('WELCOME_TO_ADMIN', 'Witaj w Panelu Administracyjnym Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Kr�tki komentarz');
@define('MEDIA_PROPERTY_COMMENT2', 'D�ugi komentarz');
@define('DELETE_SELECTED_ENTRIES', 'Usu� wybrane wpisy');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Tytu�');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity nie zosta�o jeszcze zainstalowane. Prosz�, <a href="%s">zainstaluj</a> je teraz.');
@define('COMMENT_ADDED_CLICK', 'Kliknij %stutaj by powr�ci�%s do komentarzy oraz %stutaj by zamkn��%s to okno.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknij %stutaj aby wr�ci�%s do komentarzy albo %stutaj by zamkn��%s to okno.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Czas trwania');
@define('MEDIA_PROPERTY_DATE', 'Data');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Zmieniono URL do przeniesionego katalogu w %s wpisach.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'W bazach innych ni� MySQL przeprowadzenie zmiany URLI ze scie�k� do starego katalogu na URLe ze �cie�k� do nowego katalogu NIE jest mo�liwe. Musisz przeprowadzi� te zmiany r�cznie. Zawsze mo�esz przenie�� katalog w jego pierwotne miejsce je�li uznasz, �e r�czna edycja by�aby zbyt niepor�cznym rozwi�zaniem.');
@define('TRACKBACK_SIZE', 'Docelowe URI przekroczy�o maksymalny rozmiar %s bajt�w (prawdopodobnie link do pliku).');
@define('CLICK_FILE_TO_INSERT', 'Kliknij na pliku, kt�ry chcesz umie�ci�:');
@define('SELECT_FILE', 'Wybierz plik do umieszczenia');
@define('MANAGE_IMAGES', 'Zarz�dzanie obrazkami');
@define('WORD_NEW', 'Nowy');
@define('WORD_OR', 'lub');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Widoczne: Serwisy Zewn�trzne');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Widoczne: Cechy/Ustawienia/Dodatki');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Widoczne: Pe�ne Mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Widoczne: Przegl�danie');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Widoczne: Zwi�zane z wpisem');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Niewidoczne: Edytor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Niewidoczne: Zarz�dzanie u�ytkownikami');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Niewidoczne: Meta informacje');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Niewidoczne: Szablony');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Niewidoczne: Cechy/Ustawienia/Dodatki');
@define('PLUGIN_GROUP_IMAGES', 'Obrazki');
@define('PLUGIN_GROUP_ANTISPAM', 'Antyspam');
@define('PLUGIN_GROUP_MARKUP', 'Znaczniki');
@define('PLUGIN_GROUP_STATISTICS', 'Statystyki');
@define('IMPORT_WELCOME', 'Witaj w module importu danych');
@define('USER_SELF_INFO', 'Zalogowany(a) jako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Mo�esz tu importowa� wpisy z innych system�w blogowych');
@define('IMPORT_SELECT', 'Wybierz system, z kt�rego dane chcesz importowa�');
@define('MANAGE_STYLES', 'Zarz�dzanie stylami');
@define('SELECT_A_PLUGIN_TO_ADD', 'Wybierz wtyczk�, kt�r� chcesz zainstalowa�');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Poni�ej znajduje si� lista zainstalowanych wtyczek.');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Przerwij teraz');
@define('DELETE_SELECTED_COMMENTS', 'Usu� zaznaczone komentarze');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Znajd� media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'B��d: Stara nazwa pliku nie istnieje!');
@define('ERROR_SOMETHING', 'B��d: Co� jest nie tak.');
@define('DIRECT_LINK', 'Bezpo�redni link do tego wpisu');
@define('SELECT_TEMPLATE', 'Wybierz styl dla swojego bloga');
@define('DATABASE_ERROR', 'b��d Serendipity: nie mog� po��czy� si� z baz� danych - wyj�cie.');
@define('LIMIT_TO_NUMBER', 'Jak wiele element�w ma by� pokazanych?');
@define('DIRECTORIES_AVAILABLE', 'Na li�cie dost�pnych podkatalog�w mo�esz klikn�� na dowolnym katalogu by stworzy� nowy katalog w tej strukturze.');
@define('CATEGORY_INDEX', 'Poni�ej znajduje si� lista kategorii dost�pna dla Twoich wpis�w');
@define('PAGE_BROWSE_PLUGINS', 'Strona %s z %s, ��cznie %s wtyczek.');
@define('CHARSET_NATIVE', 'Natywne');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Interfejs XML-RPC API nie jest ju� wbudowany w Serendipity z powodu problem�w z bezpiecze�stwem tego protoko�u. Je�li jednak chcesz obs�ug� tego protoko�u mie� zaimplementowan� w swoim blogu, musisz zainstalowa� wtyczk� XML-RPC by m�c u�ywa� protoko�u XML-RPC API. URL, jaki nale�y u�ywa� w swoich aplikacjach NIE ulegnie zmianie - kiedy tylko zainstalujesz wtyczk�, b�dziesz m�g� u�ywa� tego API.');
@define('AUTHORS_ALLOW_SELECT', 'Zezwoli� u�ytkownikom na pokazywanie wpis�w wielu autor�w jednocze�nie?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Je�li ta opcja zostanie w��czona, obok ka�dego autora wy�wietlonego na Panelu Bocznym uka�e si� checkbox (pole zaznaczenia). U�ytkownicy b�d� mogli zaznaczy� autor�w, kt�rych wpisy b�d� chcieli wy�wietli�.');
@define('PREFERENCE_USE_JS', 'Zezwoli� na u�ywanie zaawansowanych skrypt�w JavaScript?');
@define('PREFERENCE_USE_JS_DESC', 'Je�li w��czone, zaawansowane skrypty JavaScript b�d� uruchamiane dla zwi�kszenia komfortu u�ywalno�ci, np. w module Konfiguracji wtyczek mo�esz administarowa� wtyczkami za pomoc� myszy przez ich swobodne przesuwanie jak w technologii "drag and drop" (przeci�gnij i upu��).');
@define('PREFERENCE_USE_JS_WARNING', '(Ta strona u�ywa zaawansowanych skrypt�w JavaScript. Je�li masz problemy z funkcjonowaniem tej strony, wy��cz u�ywanie zaawansowanych skrypt�w JavaScript w swoich Ustawieniach osobistych lub wy��cz wspracie dla JavaScript w swojej przegl�darce.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
