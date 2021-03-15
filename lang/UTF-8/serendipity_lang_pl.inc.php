<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
/* vim: set sts=4 ts=4 expandtab : */
$i18n_filename_from = array(' ', 'a', 'A', 'ą', 'Ą', 'b', 'B', 'c', 'C', 'ć', 'Ć', 'd', 'D', 'e', 'E', 'ę', 'Ę', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'ł', 'Ł', 'm', 'M', 'n', 'N', 'ń', 'Ń', 'o', 'O', 'ó', 'Ó', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 'ś', 'Ś', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', 'ź', 'Ź', 'ż', 'Ż');
$i18n_filename_to   = array('_', 'a', 'A', 'a', 'A', 'b', 'B', 'c', 'C', 'c', 'C', 'd', 'D', 'e', 'E', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'l', 'L', 'm', 'M', 'n', 'N', 'n', 'N', 'o', 'O', 'o', 'O', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', 'z', 'Z', 'z', 'Z');

@define('LANG_CHARSET', 'UTF-8');
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
@define('PREVIEW', 'Podgląd');
@define('DATE', 'Data');
@define('TIME', 'Time');
@define('APPEARANCE', 'Wygląd');
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
@define('TITLE', 'Tytuł');
@define('DESCRIPTION', 'Opis');
@define('PLACEMENT', 'Strona');
@define('DELETE', 'Usuń');
@define('SAVE', 'Zapis');
@define('UP', 'Góra');
@define('DOWN', 'Dół');
@define('PREVIOUS', 'Poprzedni');
@define('NEXT', 'Następny');
@define('ENTRIES', 'wpisy');
@define('CATEGORIES', 'Kategorie');
@define('NAME', 'Imię');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Strona');
@define('COMMENT', 'Komentarz');
@define('VIEW', 'Oglądaj');
@define('HIDE', 'Ukryj');
@define('WEEK', 'Tydzień');
@define('WEEKS', 'Tygodnie');
@define('MONTHS', 'Miesiące');
@define('DAYS', 'Dni');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Sukces');
@define('COMMENTS', 'Komentarze');
@define('ADD_COMMENT', 'Dodaj komentarz');
@define('NO_COMMENTS', 'Brak komentarzy');
@define('POSTED_BY', 'Zamieścił');
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
@define('TRACKBACKS', 'Ślady');
@define('TRACKBACK', 'Ślad');
@define('NO_TRACKBACKS', 'Brak Śladów');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Fragment');
@define('TRACKED', 'Przesłany');
@define('USER', 'Użytkownik');
@define('USERNAME', 'Użytkownik');
@define('PASSWORD', 'Hasło');
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
@define('ERROR', 'Błąd');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Wymuś');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administracja');
@define('ADMIN_FRONTPAGE', 'Strona startowa');
@define('QUOTE', 'Cytat');
@define('NONE', 'żadne');
@define('GROUP', 'Grupa');
@define('AUTHORS', 'Autorzy');
@define('UPGRADE', 'Uaktualnienie');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Wszyscy autorzy');
@define('PREVIOUS_PAGE', 'poprzednia strona');
@define('NEXT_PAGE', 'następna strona');
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
@define('SORT_ORDER', 'Porządek sortowania');
@define('SORT_ORDER_ASC', 'Rosnąco');
@define('SORT_ORDER_DESC', 'Malejąco');
@define('FILTERS', 'Filtry');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Rozwiń/zwiń wszystkie');
@define('TOGGLE_OPTION', 'Przełącz opcję');
@define('IN_REPLY_TO', 'Odpowiedź');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Katalog');
@define('BACK_TO_BLOG', 'Powrót do bloga');
@define('HTML_NUGGET', 'Pole HTML');
@define('TITLE_FOR_NUGGET', 'Tytuł elementu wyświetlany na Panelu Bocznym');
@define('COMMENT_ADDED', 'Twój komentarz został dodany');
@define('ENTRIES_FOR', 'Wpisy z %s');
@define('NO_ENTRIES_TO_PRINT', 'Brak wpisów do wyświetlenia');
@define('COMMENT_DELETE_CONFIRM', 'Na pewno usunąć komentarz #%d, napisany przez %s?');
@define('DELETE_SURE', 'Na pewno usunąć #%s ?');
@define('MEDIA_FULLSIZE', 'Pełen rozmiar');
@define('SIDEBAR_PLUGIN', 'Wtyczkę Panelu Bocznego');
@define('EVENT_PLUGIN', 'Wtyczkę Zdarzenia');
@define('PLUGIN_ITEM_DISPLAY', 'Gdzie element ma być wyświetlany?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Tylko w pełnym widoku wpisu');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Tylko na stronie głównej');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Zawsze');
@define('DIRECTORY_WRITE_ERROR', 'Nie mogę zapisywać w katalogu %s. Proszę, sprawdź prawa dostępu do katalogu.');
@define('FILE_WRITE_ERROR', 'Nie mogę zapisywać do pliku %s.');
@define('INCLUDE_ERROR', 'błąd Serendipity: nie można było załączyć %s - wyjście.');
@define('DO_MARKUP', 'Formatuj za pomocą wtyczek Znaczników');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Format daty');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Format daty wpisu, używa zmiennych funkcji strftime() języka PHP. (Standardowo: "%s")');
@define('APPLY_MARKUP_TO', 'Zastosuj znacznik do %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML Button');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Linki do feedów XML będą pokazywane za pomocą tego obrazka. Pozostaw puste pole dla ustawień domyślnych lub wpisz \'none\' aby nie pokazywać obrazka.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Usuwanie plików %s...');
@define('SETTINGS_SAVED_AT', 'Ustawienia zostały zapisane o %s');
@define('INVERT_SELECTIONS', 'Odwróć wybór');

@define('PERSONAL_SETTINGS', 'Ustawienie osobiste');
@define('DO_MARKUP_DESCRIPTION', 'Zastosuj formatowania wtyczek Znaczników do tekstu (emotikonki, skróty znaczników tworzone przez użycie *, /, _, ...). Wyłączenie tej opcji spowoduje zachowanie kodu HTML w tekście.');
@define('BASE_DIRECTORY', 'Katalog bazowy');
@define('PERM_READ', 'Uprawnienia odczytu');
@define('PERM_WRITE', 'Uprawnienia zapisu');
@define('PERM_DENIED', 'Dostęp zabroniony.');
@define('CURRENT_AUTHOR', 'Bieżący Autor');
@define('PLUGIN_ACTIVE', 'Wtyczki aktywne');
@define('PLUGIN_INACTIVE', 'Wtyczki nieaktywne');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark (dodaj do Ulubionych) ten link i użyj na dowolnej stronie, o której chcesz blogować, by szybko dostać się do swojego bloga.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalacja Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Witaj w Instalacji Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Najpierw przyjrzę się Twojej obecnej konfiguracji i spróbuję rozpoznać ewentualne problemy z kompatybilnością');
@define('ERRORS_ARE_DISPLAYED_IN', 'Kolory oznaczają: %s - błędy, %s - rekomendacje, %s - sukcesy');
@define('RED', 'czerwony');
@define('YELLOW', 'żółty');
@define('GREEN', 'zielony');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s raport przed instalacją');
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
@define('PROBLEM_PERMISSIONS_HOWTO', 'Prawa dostepu mogą być ustawione przez uruchomienie shellowej komendy: `<em>%s</em>` na katalogu lub przez użycie klienta FTP');
@define('PROBLEM_DIAGNOSTIC', 'Z powodu problemów, które zostały rozpoznane podczas przeprowadzania procedur diagnostycznych, nie możesz kontynuować instalacji dopóki powyższe problemy nie zostaną usunięte.');
@define('SELECT_INSTALLATION_TYPE', 'Wybierz metodę instalacji');
@define('RECHECK_INSTALLATION', ' Sprawdź ponownie instalację');
@define('SIMPLE_INSTALLATION', 'Prosta instalacja');
@define('EXPERT_INSTALLATION', 'Instalacja w trybie Eksperta');
@define('COMPLETE_INSTALLATION', 'Pełna instalacja');
@define('WONT_INSTALL_DB_AGAIN', 'nie zainstaluje ponownie bazy danych');
@define('THEY_DO', 'istnieją');
@define('THEY_DONT', 'nie istnieją');
@define('CHECK_DATABASE_EXISTS', 'Sprawdzam czy baza danych i tabele już istnieją');
@define('CREATE_DATABASE', 'Tworzenie domyślnych ustawień bazy danych...');
@define('ATTEMPT_WRITE_FILE', 'Próba zapisania pliku %s ...');
@define('CREATING_PRIMARY_AUTHOR', 'Tworzę głównego autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Ustawiam domyślny styl (template)');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instaluję domyslne wtyczki');
@define('SERENDIPITY_INSTALLED', 'Instalacja Serendipity zakończona sukcesem');
@define('VISIT_BLOG_HERE', 'Tutaj odwiedź swój nowy blog');
@define('THANK_YOU_FOR_CHOOSING', 'Dziękujemy za wybranie Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Wykryto błąd podczas instalacji');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Napędzane przez Serendipity %s i PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standard editor');
@define('USERLEVEL_CHIEF_DESC', 'Chief editor');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Zmień właściciela katalogu ze stroną na użytkownika, z uprawnieniami którego działa apache (np. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Katalog nie istnieje i nie może być utworzony. Proszę stworzyć katalog samodzielnie.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nie mogę uruchomić %s');
@define('FILE_CREATE_YOURSELF', 'Proszę, stwórz plik samodzielnie lub sprawdź prawa dostępu.');
@define('COPY_CODE_BELOW', '<br />* Po prostu skopiuj poniższy kod i umieść go w %s w Twoim katalogu %s:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Kiedy wykonasz te czynności wciśnij przycisk "reload" (odśwież) w swojej przeglądarce.');
@define('ERROR_TEMPLATE_FILE', 'Nie mogę otworzyć pliku stylu (template). Proszę, sprawdź lub unowocześnij swoją instalację Serendipity!');
@define('HTACCESS_ERROR', 'Aby sprawdzić konfigurację serwera, na którym instalowane jest Serendipity, program musi mieć możliwość stworzenia pliku ".htaccess". Nie było to możliwe ze względu na problemy z uprawnieniami. Proszę, sprawdź uprawnienia w taki mniej więcej sposób: <br />&nbsp;&nbsp;%s<br />i przeładuj stronę.');
@define('EMPTY_SETTING', 'Podano nieprawidłowe dane dla "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity wykryło instalację wersji %s. Wygląda na to, że próbujesz uaktualnić program do wersji %s. Musisz <a href="%s">kliknąć tutaj</a> by kontynuować proces aktualizacji.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Witaj w programie aktualizującym Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Ten program pomoże Ci uaktualnić Twoją instalację Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Widzisz ten komunikat ponieważ właśnie zainstalowałeś(aś) Serendipity %s ale jeszcze nie uaktualniłeś(aś) swojej bazy danych by spelniała wymagania tej wersji Serendipity.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Uaktualnienia bazy danych (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Następujące pliki .sql muszą być wykonane by móc korzystać w normalny sposób z Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Zadania specjalne związane z tą wersją');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nie wykryto zadań specjalnych związanych z tą wersją');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Czy mam wykonać powyższe zadania?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nie, wykonam je własnoręcznie');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Tak, wykonaj je');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Wygląda na to, że nie musisz aktualizować swojej instalacji');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity zostało zaktualizowane');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Zignorowałeś(aś) etap uaktualnienia Serendipity. Proszę, upewnij się, że Twoja baza danych jest prawidłowo zainstalowana a zaplanowane zadania zostaną uruchomione.');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Twoja instalacja Serendipity została uaktualniona do wersji %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Możesz powrócić do swojego bloga klikając %stutaj%s');
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
@define('CREATE_CATEGORY', 'Stwórz kategorię \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type - plik danych');
@define('INSTALL_DBPORT', 'Port bazy danych');
@define('INSTALL_DBPORT_DESC', 'Port używany do połączenia się z serwerem z Twoją bazą danych');
@define('IMPORT_PLEASE_ENTER', 'Wpisz odpowiednie dane, o których podanie proszę poniżej');
@define('IMPORT_NOW', 'Importuj!');
@define('IMPORT_STARTING', 'Rozpoczynam procedurę importu...');
@define('IMPORT_FAILED', 'Import nie powiódł się');
@define('IMPORT_DONE', 'Import zakończony sukcesem');
@define('IMPORT_WEBLOG_APP', 'System blogowy');
@define('IMPORT_NOTES', 'Uwagi:');
@define('IMPORT_STATUS', 'Status wpisu po imporcie');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Zachowaj cały importowany tekst w sekdji "Treść wpisu" i nie dziel na "Rozszerzona treść wpisu".');
@define('IMPORT_GENERIC_RSS', 'Import RSS');
@define('ACTIVATE_AUTODISCOVERY', 'Wyślij Ślady (Trackbacki) do linków znalezionych we wpisie/wpisach');
@define('RSS_IMPORT_CATEGORY', 'Użyj tej kategorii dla importowanych wpisów niepasujących do innych kategorii');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nie został odnaleziony.');
@define('CONVERT_HTMLENTITIES', 'Próbować autokonwersji fragmentów HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Panel Administracyjny Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Wprowadzono błędną nazwę użytkownika lub hasło.');
@define('PLEASE_ENTER_CREDENTIALS', 'Wprowadź swój login i hasło w polach poniżej.');
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
@define('ENTRY_PUBLISHED_FUTURE', 'Ten wpis nie został jeszcze opublikowany.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Prawa autorskie (Copyright)');
@define('SIDEBAR_PLUGINS', 'Wtyczki Paneli Bocznych');
@define('EVENT_PLUGINS', 'Wtyczki Zdarzeń');
@define('CONFIGURE_PLUGINS', 'Konfiguracja wtyczek');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Niespełnione wymagania: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'uaktualnienie do wersji %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Kliknij by zainstalować nową %s');
@define('ALREADY_INSTALLED', 'Już zainstalowane');
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
@define('CONTENT', 'Zawartość');
@define('ENTRIES_PER_PAGE', 'Wpisów na stronę');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Wpisy Przyklejone');
@define('PAGE_BROWSE_ENTRIES', 'Strona %s z %s, łącznie %s wpisów');
@define('FIND_ENTRIES', 'Znajdź wpisy');
@define('RIP_ENTRY', 'Wpis #%s usunięty.');
@define('NEW_ENTRY', 'Nowy wpis');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Treść wpisu');
@define('EXTENDED_BODY', 'Rozszerzona treść wpisu');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Szkic wiadomości został zapisany');
@define('IFRAME_PREVIEW', 'Serendipity tworzy teraz podgląd Twojego wpisu...');
@define('IFRAME_WARNING', 'Twoja przeglądarka nie wspiera iframes. Proszę, otwórz plik serendipity_config.inc.php i ustaw zmienną $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Uwaga: data, którą podano, nie jest prawidłowa. Data musi być podana w formacie YYYY-MM-DD HH:MM (RRRR-MM-DD GG:MM).');
@define('ADVANCED_OPTIONS', 'Zaawansowane ustawienia');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Nie klikaj na ten link. Zawiera on URI ze Śladem (Trackback) dla tego wpisu. Możesz użyć tego URI by wysłać pinga lub stworzyć Ślad ze swojego bloga do tego wpisu. Aby skopiować ten URI kliknij prawym przyciskiem myszy na linku i wybierz opcję "Kopiuj skrót" (lub podobną).');
@define('RESET_DATE', 'Ustaw datę');
@define('RESET_DATE_DESC', 'Kliknij tutaj by ustawić aktualną datę i czas dla tego wpisu');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Użytkownicy');
@define('CREATE_NEW_USER', 'Nowy użytkownik');
@define('CREATE_NOT_AUTHORIZED', 'Nie możesz zmianiać danych użytkowników mających ten sam Poziom co Ty');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nie możesz tworzyć użytkowników o wyższym Poziomie niż Twój własny');
@define('CREATED_USER', 'Nowy użytkownik %s został utworzony');
@define('MODIFIED_USER', 'Ustawienia użytkownika %s zostały zmienione');
@define('USER_LEVEL', 'Poziom');
@define('WARNING_NO_GROUPS_SELECTED', 'Uwaga: Nie dokonano przydziałów do żadnej grupy. To spowoduje uniemożliwienie dministrowania przydziałami do grup. Twoje dotychczasowe przydziały nie zostały jednak zmienione. W przypadku problemów - skontaktuj się z administratorem.');
@define('DELETE_USER', 'Zamierzasz usunąć użytkownika #%d %s. Na pewno? To uniemożliwi wyświetlanie jakichkolwiek wpisów tego użytkownika na stronie.');
@define('DELETED_USER', 'Użytkownik #%d %s usunięty.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Grupy');
@define('DELETED_GROUP', 'Grupa #%d %s usunięta');
@define('CREATED_GROUP', 'Nowa grupa %s została stworzona');
@define('MODIFIED_GROUP', 'Ustawienia grupy %s zostały zmienione');
@define('CREATE_NEW_GROUP', 'Stwórz nową grupę');
@define('DELETE_GROUP', 'Masz zamiar skasować grupę #%d %s. Na pewno?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Znajdź komentarze');
@define('COMMENTS_FILTER_SHOW', 'Pokaż');
@define('COMMENTS_FILTER_ALL', 'Wszystkie');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Tylko zaaprobowane');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Oczekujące na aprobatę');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Na pewno usunąć zaznaczone komentarze?');
@define('PAGE_BROWSE_COMMENTS', 'Strona %s z %s, łącznie %s komentarzy');
@define('COMMENT_IS_DELETED', '(Komentarz usunięty)');
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
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Zapisano kategorię');
@define('CATEGORY_ALREADY_EXIST', 'Kategoria o nazwie "%s" już isnieje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategoria #%s została usunięta. Stare wpisy zostały przeniesione do kategorii #%s.');
@define('CATEGORY_DELETED', 'Kategoria #%s usunięta');
@define('INVALID_CATEGORY', 'Nie podano kategorii do usunięcia');
@define('EDIT_THIS_CAT', 'Edycja kategorii "%s"');
@define('CATEGORY_REMAINING', 'Usuń tę kategorię i przesuń wpisy do niej do tej pory należące do kategorii');
@define('PARENT_CATEGORY', 'Kategoria nadrzędna');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Nowa kategoria');
@define('ALREADY_SUBCATEGORY', '%s jest już podkategorią kategorii %s.');
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
@define('EXPORT_FEED', 'Wyeksportuj pełen feed RSS');
@define('CREATE_THUMBS', 'Przebuduj miniatury');
@define('WARNING_THIS_BLAHBLAH', "UWAGA:\\nTo może nieco potrwać jeśli jest wiele obrazków bez miniaturek.");
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
@define('WARNING_TEMPLATE_DEPRECATED', 'Uwaga: Twój aktualny styl (template) używa nieobsługiwanej już metody, doradzamy aktualizację Serendipity o ile to możliwe');
@define('STYLE_OPTIONS_NONE', 'Ten Styl nie posiada opcji specjalnych. Aby dowiedzieć się jak możesz zaimplementować w swoim Stylu opcje specjalne, odwiedź stronę www.s9y.org i przeczytaj w dziale Technical Documentation dokument zatytułowany "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Opcje Stylu/Tematu');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Zmodyfikowany Panel Administracyjny dostępny');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Ustaw jako aktywny styl');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Sprawdź i zapisz');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Usuń zaznaczone wtyczki');
@define('SAVE_CHANGES_TO_LAYOUT', 'Zapisz zmiany w layoucie');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizacja bazy danych z katalogiem obrazków');
@define('SYNC_DONE', 'Zrobione (%s obrazków zsynchronizowanych).');
@define('RESIZE_BLAHBLAH', '<b>Zmień rozmiar: %s</b>');
@define('ORIGINAL_SIZE', 'Oryginalny rozmiar: <i>%sx%s</i> pikseli');
@define('RESIZING', 'Zmieniam rozmiar');
@define('RESIZE_DONE', 'Zrobione (ilość obrazków, którym zmieniono rozmiar: %s).');
@define('KEEP_PROPORTIONS', 'Zachowaj proporcje');
@define('REALLY_SCALE_IMAGE', 'Na pewno przeskalować obrazek? Ta operacja jest nieodwracalna!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Tu możesz zmienić rozmiar obrazka. Jeśli chcesz zmienić rozmiar proporcjonalnie, zaznacz odpowiednią opcję, wpisz wartość w jedno z pól i wciśnij TAB - nowy rozmiar dla drugiej wartości zostanie automatycznie obliczony, tak by proporcje obrazka zostały zachowane.</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nowy rozmiar: ');
@define('SCALING_IMAGE', 'Skaluję %s do %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Katalog i pliki zostały poprawnie przeniesione do %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Katalog i pliki nie mogły być przeniesione do %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Katalog <strong>%s</strong> został utworzony.');
@define('PARENT_DIRECTORY', 'Nadrzędny katalog');
@define('CONFIRM_DELETE_DIRECTORY', 'Na pewno usunąć całą zawartość katalogu %s?');
@define('ERROR_NO_DIRECTORY', 'Błąd: Katalog %s nie istnieje');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Nie można usunąć katalogu, w którym znajdują się pliki. Zaznacz "siłowe usuwanie" jeśli chcesz także usunąć pliki w katalogu. Znajdujące się w katalogu pliki:');
@define('DIRECTORY_DELETE_FAILED', 'Usuwanie katalogu %s nie powiodło się. Sprawdź prawa dostępu lub zastosuj się do zaleceń powyższego powiadomienia.');
@define('DIRECTORY_DELETE_SUCCESS', 'Katalog %s usunięty.');
@define('CHECKING_DIRECTORY', 'Sprawdzanie plików w katalogu %s');
@define('DELETE_DIRECTORY', 'Usuń katalog');
@define('DELETE_DIRECTORY_DESC', 'Zamierzasz usunąć zawartość katalogu, w którym znajdują się pliki mediów prawdopodobnie użytych w Twoich wpisach.');
@define('FORCE_DELETE', 'Usuń WSZYSTKIE pliki w tym katalogu, także te nie znane Serendipity i nie wyświetlane w Bibliotece mediów');
@define('CREATE_DIRECTORY', 'Stwórz nowy katalog');
@define('CREATE_NEW_DIRECTORY', 'Stwórz nowy katalog');
@define('CREATE_DIRECTORY_DESC', 'Możesz tu stworzyć nowy katalog, w którym będą przechowywane pliki mediów. Wpisz nazwę nowego katalogu i wybierz ewentualny katalog nadrzędny, w którym zostanie utworzony Twój podkatalog.');
@define('ABOUT_TO_DELETE_FILE', 'Masz zamiar usunąc plik <b>%s</b><br />Jeśli w którymś z wpisów zostało zdefiniowane odwołanie do pliku, plik ten nie będzie więcej dla tego odwałania dostępny (link nie będzie działał prawidłowo).<br />Czy chcesz kontynuować?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Błąd: Plik znajduje się już na Twoim serwerze!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nie można odnalzeźć pliku <b>%s</b>. Być może został już usunięty?');
@define('ERROR_FILE_FORBIDDEN', 'Nie możesz uploadować plików z aktywną zawartością');
@define('REMOTE_FILE_NOT_FOUND', 'Nie odnaleziono pliku na zdalnym serwerze, czy na pewno ścieżka <b>%s</b> jest poprawna?');
@define('FILE_FETCHED', '%s pobrano jako %s');
@define('FILE_UPLOADED', 'Plik %s prawidłowo załadowany na serwer jako %s');
@define('DELETE_FILE_FAIL', 'Usuwanie pliku <b>%s</b> nie powiodło się');
@define('DELETE_FILE', 'Usunięto plik o nazwie <b>%s</b>');
@define('FOUND_FILE', 'Znaleziono nowy/zmodyfikowany plik: %s.');
@define('FILENAME_REASSIGNED', 'Automatycznie przydzielona nowa nazwa pliku: %s');
@define('ERROR_FILE_EXISTS', 'Błąd: Nowa nazwa pliku jest już w użyciu, wybierz inną!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'podlinkowane');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Wprowadź nową nazwę dla: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Dodawanie obrazka...');
@define('THUMB_CREATED_DONE', 'Miniaturka stworzona.<br/>Zrobione.');
@define('THUMBNAIL_USING_OWN', 'Użyję obrazka %s jako jego własnej miniatury bo już jest w rozmiarach miniatury.');
@define('THUMBNAIL_FAILED_COPY', 'Chciano użyć %s jako jego właśnej miniatury ale proces kopiowania się nie powiódł!');
@define('DELETE_THUMBNAIL', 'Usunięto minturkę o nazwie	<b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Wystąpił nieznany błąd, plik nie został załadowany. Być może konfiguracja serwera nie zezwala na przesyłanie tak dużych plików. Sprawdź to u swojego ISP lub wyedytuj odpowiednio plik php.ini (jeśli masz dostęp do konfiguracji serwera) by zezwolić na przesyłanie większych plików.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Błąd: Nie możesz wysyłać na serwer plików większych niż %s bajtów!');
@define('MEDIA_UPLOAD_DIMERROR', 'Błąd: Nie możesz wysyłać na serwer obrazków większych niż %s x %s piksele!');
@define('HOTLINK_DONE', 'Plik podlinkowany.<br />Zrobione.');
@define('DELETE_HOTLINK_FILE', 'Skasuj podlinkowany plik o nazwie <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nie można wykonać: %s, błąd: %s, zwrócona wartość: %d');
@define('SKIPPING_FILE_EXTENSION', 'Pomijanie pliku: brak rozszerzenia w pliku %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Pomijanie pliku: nie mogę czytać z %s.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Ustaw te same uprawnienia na wszystkich podkatalogach');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Chcę użyć miniaturki we wpisie');
@define('I_WANT_BIG_IMAGE', 'Chcę użyć obrazka w pełnym rozmiarze we wpisie');
@define('I_WANT_NO_LINK', 'Obrazek ma byc wyświetlany jako zwykły obrazek');
@define('I_WANT_IT_TO_LINK', 'Obrazek ma być wyświetlany jako link do:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Rozmiar obrazka');
@define('IMAGE_ALIGNMENT', 'Wyrównanie obrazka');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Linkowanie obrazka');
@define('MEDIA_TARGET', 'Sposób wyświetlenia');
@define('MEDIA_TARGET_JS', 'Okienko Popup (via JavaScript, rozmiar dopasowujący się do obrazka)');
@define('MEDIA_ENTRY', 'Osobny wpis');
@define('MEDIA_TARGET_BLANK', 'Osobne okno (via target=_blank)');
@define('YOU_CHOSE', 'Wybrano %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Obróć obrazek 90 stopni w lewo');
@define('IMAGE_ROTATE_RIGHT', 'Obróć obrazek 90 stopni w prawo');
@define('MEDIA_RENAME', 'Zmien nazwę pliku');
@define('THUMBNAIL_SHORT', 'Miniatura');
@define('ORIGINAL_SHORT', 'Oryginał');
@define('SORT_ORDER_NAME', 'Nazwa pliku');
@define('SORT_ORDER_EXTENSION', 'Rozszerzenie pliku');
@define('SORT_ORDER_SIZE', 'Rozmiar pliku');
@define('SORT_ORDER_WIDTH', 'Szerokość obrazka');
@define('SORT_ORDER_HEIGHT', 'Wysokość obrazka');
@define('SORT_ORDER_DATE', 'Data uploadu');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Dodaj plik do zbioru mediów:</b><p>Tu możesz uploadować pliki z mediami lub wskazać jakieś pliki dostępne w sieci! Jeśli nie masz odpowiedniego obrazka, <a href="https://images.google.com/" target="_blank">znajdź w serwisie Google</a> obrazki, które być może będą Ci odpowiadały. Rezultaty wyszukiwania są często przydatne i zabawne :) Ale uważaj! Większość obrazków ma zastrzeżone prawa autorskie i powinieneś (powinnaś) zapytać się o pozwolenie przed ich użyciem!</p><p><b>Wybierz metodę:</b></p><br />');
@define('ENTER_MEDIA_URL', 'Wprowadź URL pliku dostępnego w sieci:');
@define('ENTER_MEDIA_UPLOAD', 'Wybierz plik do uploadu:');
@define('SAVE_FILE_AS', 'Zapisz plik jako:');
@define('STORE_IN_DIRECTORY', 'Zapisz w następującym katalogu: ');
@define('IMAGE_MORE_INPUT', 'Dodaj więcej obrazków');
@define('ENTER_MEDIA_URL_METHOD', 'Sposób pobierania');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'UWAGA! Jeśli wybierasz opcję linkowania do pliku w sieci, upewnij się, że masz do tego prawo! Linkowanie pozwala na używanie obrazków z innych stron bez potrzeby ich zgrywania na serwer.');
@define('FETCH_METHOD_IMAGE', 'Pobierz obrazek na serwer');
@define('FETCH_METHOD_HOTLINK', 'Linkowanie do serwera');
@define('GO_ADD_PROPERTIES', 'Dodaj i wprowadź właściwości');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zmień rozmiar obrazka');
@define('MEDIA_DELETE', 'Usuń ten plik');
@define('FILES_PER_PAGE', 'Plików na stronę');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nie znaleziono obrazków');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'wszystkie katalogi');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfiguracja zapisana');
@define('DIAGNOSTIC_ERROR', 'Stwierdzono istnienie pewnych problemów podczas przeprowadzania procedur diagnostycznych. Upewnij się, że podałeś prawidłowe dane:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Ustawienia bazy danych');
@define('INSTALL_CAT_DB_DESC', 'Tu możesz podać wszystkie dane na temat Twojej bazy danych. Serendipity potrzebuje tych informacji by móc funkcjonowac prawidłowo.');
@define('INSTALL_DBTYPE', 'Typ bazy danych');
@define('INSTALL_DBTYPE_DESC', 'Typ bazy danych');
@define('INSTALL_DBHOST', 'Host bazy danych');
@define('INSTALL_DBHOST_DESC', 'Nazwa hosta serwera Twojej bazy danych');
@define('INSTALL_DBUSER', 'Użytkownik bazy danych');
@define('INSTALL_DBUSER_DESC', 'Nazwa użytkownika używana do łączenia się z bazą danych');
@define('INSTALL_DBPASS', 'Hasło bazy danych');
@define('INSTALL_DBPASS_DESC', 'Hasło dla użytkownika podanego powyżej');
@define('INSTALL_DBNAME', 'Nazwa bazy danych');
@define('INSTALL_DBNAME_DESC', 'Nazwa Twojej bazy danych');
@define('INSTALL_DBPREFIX', 'Prefiks tabel bazy danych');
@define('INSTALL_DBPREFIX_DESC', 'Prefiks dla nazw tabel, np. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Używaj stałych połączeń z bazą danych');
@define('INSTALL_DBPERSISTENT_DESC', 'Zezwól na używanie stałych połączeń z bazą danych, więcej <a href="http://pl.php.net/manual/pl/features.persistent-connections.php" target="_blank">tutaj</a>. Włączenie tej opcji nie jest zalecane.');
@define('INSTAL_DB_UTF8', 'Włącz konwersję kodowania zaków dla bazy danych');
@define('INSTAL_DB_UTF8_DESC', 'Rozwiązuje problem z zapytaniem SET NAMES bazy danych aby ustalić prawidłowe kodowanie dla bazy danych. Włącz lub wyłącz tę opcję jeśli widzisz na swojej stronie dziwne znaczki zamiast znaków diakrytycznych.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Ścieżki');
@define('INSTALL_CAT_PATHS_DESC', 'Różne ścieżki do istotnych katalogów i plików. Nie zapomnij o poprzedzających katalogi slaszach "/"!');
@define('INSTALL_FULLPATH', 'Pełna ścieżka');
@define('INSTALL_FULLPATH_DESC', 'Pełna, bezwzględna ścieżka do Twojej instalacji Serendipity');
@define('INSTALL_UPLOADPATH', 'Ścieżka uploadu');
@define('INSTALL_UPLOADPATH_DESC', 'Wszystkie uploady (ładowane na serwer pliki) będą trafiały tutaj. Podaj względną (relatywną) w stosunku do "Pełnej ścieżki" ścieżkę dostępu - zazwyczaj jest to "uploads/"');
@define('INSTALL_RELPATH', 'Względna ścieżka');
@define('INSTALL_RELPATH_DESC', 'Ścieżka do Serendipity podawana Twojej przeglądarce - zazwyczaj jest to "/serendipity/"');
@define('INSTALL_RELTEMPLPATH', 'Względna ścieżka styli (templates)');
@define('INSTALL_RELTEMPLPATH_DESC', 'Ścieżka do katalogu zawierającego style (templates) - względna (relatywna) wobec "względnej ścieżki"');
@define('INSTALL_RELUPLOADPATH', 'Względna ścieżka uploadu');
@define('INSTALL_RELUPLOADPATH_DESC', 'Ścieżka uploadu podawana przeglądarkom - względna (relatywna) wobec "względnej ścieżki"');
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
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Ścieżka do komentarzy');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Ustawienia główne');
@define('INSTALL_CAT_SETTINGS_DESC', 'Ustal główne ustawienia i zachowania Serendipity');
@define('INSTALL_USERNAME', 'Nazwa użytkownika administratora');
@define('INSTALL_USERNAME_DESC', 'Nazwa użytkownika dla logowania administratora');
@define('INSTALL_PASSWORD', 'Hasło administratora');
@define('INSTALL_PASSWORD_DESC', 'Hasło dla logowania administratora');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Prawdziwe imię i nazwisko');
@define('USERCONF_REALNAME_DESC', 'Pełne imię i nazwisko, jest widziane przez czytających');
@define('INSTALL_EMAIL', 'E-mail administratora');
@define('INSTALL_EMAIL_DESC', 'Adres e-mail administratora bloga');
@define('INSTALL_SENDMAIL', 'Wysyłać powiadomienia e-mail do administratora?');
@define('INSTALL_SENDMAIL_DESC', 'Czy chcesz oytrzymywać powiadomienia drogą mailową o dopisaniu komentarza do wpisu?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nazwa bloga');
@define('INSTALL_BLOGNAME_DESC', 'Tytuł Twojego bloga');
@define('INSTALL_BLOGDESC', 'Opis bloga');
@define('INSTALL_BLOGDESC_DESC', 'Opis Twojego bloga');
@define('INSTALL_BLOG_EMAIL', 'Adres e-mail bloga');
@define('INSTALL_BLOG_EMAIL_DESC', 'Możesz tu wpisać adres poczty e-mail, który będzie widoczny w polu "From" wysyłanych maili z powiadomieniami. Upewnij się, że podajesz adres rozpoznawalny dla serwera - wiele serwerów mailowych odrzuca maile nie zawierające poprawnego nagłówka "From".');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Język');
@define('INSTALL_LANG_DESC', 'Wybierz język dla swojego bloga');
@define('INSTALL_CHARSET', 'Wybór kodowania znaków');
@define('INSTALL_CHARSET_DESC', 'Tu możesz ustawić kodowanie pomiędzy UTF-8 a natywnym kodowaniem danego języka (ISO, EUC, ...). Niektóre języki oferują wsparcie tylko kodowania UTF-8 więc ich zmiana na "natywne" nie odniesie skutku. SUGERUJEMY wybór kodowania UTF-8 dla nowych instalacji. Nie zmieniaj tych ustawień jeśli już dokonałeś(aś) wpisów ze znakami specjalnymi (diakrytycznymi) - to może spowodować problemy z wyświetlaniem znaków. Przeczytaj więcej o tym problemie na stronie https://docs.s9y.org/docs/developers/internationalization.html');
@define('INSTALL_CAL', 'Typ kalendarza');
@define('INSTALL_CAL_DESC', 'Wybierz swój typ kalendarza');
@define('AUTOLANG', 'Używaj ustawień języka przegladarki użytkowników jako standardowych');
@define('AUTOLANG_DESC', 'Jeśli ta opcja zostanie włączona, język, w jakim będą wyświetlane komunikaty i wpis będzie zdeterminowany ustawienim języka przeglądarki użytkownika odwiedzającego Twojego bloga. Serendipity będzie automatycznie dobierało wersję językową w zależności od ustwień przeglądarki.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Włączyć ograniczenia wtyczek (Plugin ACL) dla grup użytkowników?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Jeśli opcja ograniczenia wtyczek jest włączona, możesz określić jakie wtyczki mogą być uruchamiane przez jakie grupy użytkowników.');
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
@define('INSTALL_CAT_DISPLAY', 'Wygląd i Opcje');
@define('INSTALL_CAT_DISPLAY_DESC', 'Skonfiguruj wygląd i ustawienia Serendipity');
@define('INSTALL_FETCHLIMIT', 'Ilość wpisów wyświetlanych na stronie głównej');
@define('INSTALL_FETCHLIMIT_DESC', 'Podaj ile wpisów ma być jednocześnie wyświetlanych na stronie głównej i następnych stronach bloga');
@define('INSTALL_RSSFETCHLIMIT', 'Ilość wpisów wyświetlanych w feedach RSS');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Ilość wpisów wyświetlanych na każdej stronie feeda RSS');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Aktywuj ścisłe przestrzeganie standardu RFC2616 RSS-Feed');
@define('SYNDICATION_RFC2616_DESC', 'NIE przestrzeganie ścisłe standardu RFC2616 oznacza, że wszelkie wywołania kanałów RSS zwrócą wpisy, które uległy zmianie od ostatniego takiego wywołania (np. przez czytnik RSS). Jeśli ustawisz tę opcję na Nie, subskrybenci Twoich kanałów RSS otrzymają wszystkie artykuły od czasu ostatniego pobrania. To zasadniczo jest dobre i prawidłowe zachowanie kanału RSS. Jednak niektórzy Agenci RSS, jak na przykład Planet, zachowują się w takich sytuacjach dziwnie (np. co jakiś czas pojawiają się stare wpisy na stronach obsługiwanych przez Planet). Ustawenie tej opcji na Tak zaspokoi wymagania standardu, jednak czytelników Twoich kanałów RSS mogą ominąć pewne wpisy, które po prostu nie będą już pokazywane tym czytelnikom, nawet jeśli jeszcze ich nie przeczytali. Ustawienie tej opcji może być więc problemem albo dla Agregatorów typu Planet, albo dla Twoich czytelników. Więcej informacji: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Użyj kompresji gzip');
@define('INSTALL_USEGZIP_DESC', 'Aby przyspieszyć wysyłanie stron do użytkownika możesz użyć kompresji gzip (zakładając, że przeglądarka użytkownika obsługuje kompresję gzip - znakomita większość obsługuje). To ustawienie jest rekomendowane.');
@define('INSTALL_XHTML11', 'Wymuś kompatybilność z XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Czy chcesz wymusić kompatybilność ze standardem XHTML 1.1 (może powodować problemy ze starszymi przeglądarkami czwartej generacji)');
@define('INSTALL_POPUP', 'Zezwól na użycie wyskakujących okien');
@define('INSTALL_POPUP_DESC', 'Chcesz użyć wyskakujących okienek dla komentarzy, śladów itp.?');
@define('INSTALL_EMBED', 'Czy Serendipity jest osadzone?');
@define('INSTALL_EMBED_DESC', 'Jeśli chcesz osadzić Serendipity na normalnej stronie, ustaw "Tak" aby pozbyć się wszelkich informacji nagłówkowych i pokazywac samą treść wpisów. Możesz dodatkowo skorzystać z opcji "Plik index" aby stworzyć osobną klasę, w której będą trzymane nagłówki Twojej normalnej strony. Więcej informacji zawiera plik README.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Zewnętrzne linki mają być klikalne?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nie": Zewnętrzne linki (Top Exits, Top Referrers, Komentarze) są pokazywane czystym tekstem, bez podlinkowania odpowiadającyh im adresów (ogranicza to propagację spamu - ustawienie rekomendowane). "Tak": Zewnętrzne linki są pokazywane jako linki (odpowiadające im adresy są podlinkowane i klikalne). To ustawienie może być zmienione przez np. konfigurację jakiejś wtyczki!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Zablokowani Referers');
@define('INSTALL_BLOCKREF_DESC', 'Jeśli istnieje jakiś host, którego nie chcesz pokazywać na liście Referers, wpisz go na tę listę. Wpisy rozdzielaj średnikami ";".');
@define('INSTALL_REWRITE', 'Nadpisywanie URLi');
@define('INSTALL_REWRITE_DESC', 'Wybierz zasady, według których będą generowane URLe. Włączenie opcji nadpisywania URLi będzie tworzyło ładne URLe dla wpisów Twojego bloga, dodatkowo lepiej indeksowalne przez wyszukiwarki typu Google. Serwer musi obsługiwać mod_rewrite lub "AllowOverride All" dla katalogu z Serendipity. Standardowym ustawieniem jest ustawienie wykryte przy próba autodetekcji ustawień serwera.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Przesunięcie czasu serwera');
@define('INSTALL_OFFSET_DESC', 'Podaj czas (w godzinach) przesunięcia między czasem serwera (aktualny: %clock%) a Twoją strefą czasową');
@define('INSTALL_SHOWFUTURE', 'Pokazuj przyszłe wpisy');
@define('INSTALL_SHOWFUTURE_DESC', 'Jeśli opcja zostanie włączona, będą pokazywane wszystkie przyszłe wpisy (wpisy z ustawioną datą przyszłą). Standardowo wpisy te są ukryte do czasu nadejścia czasu ich wyświetlenia.');
@define('INSTALL_ACL', 'Zastosuj ograniczenia dostępu dla kategorii');
@define('INSTALL_ACL_DESC', 'Jeśli to ustawienie zostanie włączone, będą stosowane ogranieczenia dostępu do kategorii podczas przeglądania wpisów przez zalogowanych użytkowników. Jeśli ustawienie to zostanie wyłączone, takie ogranieczenia NIE będą stosowane. Pozytywnym efektem wyłączenia tej opcji jest przyspieszenie pracy silnika bloga. Jeśli więc nie musisz stosować ograniczeń dostępu do kategorii - wyłącz tę opcję.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Pokazywać także Rozszerzoną treść wpisu w feedzie RSS?');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrazek dla feedów RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL do obrazka w formacie GIF/JPEG/PNG, o ile dostępny. (pusty: logo Serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Szerokość obrazka');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'w pikselach, max 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Wysokość obrazka');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'w pikselach, max 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Pokazywać adresy e-mail?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Adresy e-mail edytora zarządzającego treścią, o ile dostępne. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Adresy e-mail webmastera, o ile dostępne. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Ilość minut, po których Twój blog nie powinien być cachowany przez zewnętrzne strony/programy obsługujące RSS. (puste: ukryte) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Czy pole "pubDate" ma być załączone w treści RSS? Zawiera ono datę publikacji ostatniego wpisu.');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Ustawienia konwersji obrazków');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Wpriwadź ustawienia dotyczące sposobów obsługi obrazków przez Serendipity');
@define('INSTALL_IMAGEMAGICK', 'Użyj ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Czy masz zainstalowany program ImageMagick i chcesz użyć go do zmiany rozmiarów obrazków?');
@define('INSTALL_IMAGEMAGICKPATH', 'Ścieżka do programu konwertującego');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Pełna ścieżka do i nazwa używanego przez Ciebie programu obsługującego ImageMagick');
@define('INSTALL_THUMBSUFFIX', 'Sufiks Miniaturek');
@define('INSTALL_THUMBSUFFIX_DESC', 'Miniaturki będą nazywane według następującego formatu: nazwaoryginalna.[sufiks].rozszerzenie');
@define('INSTALL_THUMBWIDTH', 'Szerokość miniaturki');
@define('INSTALL_THUMBWIDTH_DESC', 'Ustal szerokość tworzonych automatycznie miniatur');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Maksymalny rozmiar wysyłanego pliku');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Wprowadź maksymalny rozmiar wysyłanego pliku w bajtach. To ustawienie może być unieważnione przez ustawienia serwera w pliku PHP.ini: upload_max_filesize, post_max_size, max_input_time - wszystkie te opcje mogą mieć wpływ na to ustawienie. Puste pole oznacza, że mają być stosowane ustawienia po stronie serwera.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Maksymalna szerokość obrazków wysyłanych na serwer');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Wprowadź maksymalną szerokość (w pikselach) dla wysyłanych na serwer obrazków');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Maksymlana wysokość obrazków wysyłanych na serwer');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Wprowadź maksymalną wysokość (w pikselach) dla wysyłanych na serwer obrazków');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Włącz synchronizację mediów "w locie"');
@define('ONTHEFLYSYNCH_DESC', 'Jeśli włączone, Serendipity będzie porównywało zawartość bazy danych mediów z plikami istniejącymi na serwerze i w razie wystąpienia różnic wykona synchronizację bazy z zawartością katalogów na serwerze.');
@define('MEDIA_DYN_RESIZE', 'Zezwalać na dynamiczną zmianę rozmiaru?');
@define('MEDIA_DYN_RESIZE_DESC', 'Jeśli włączone, moduł obsługi mediów może zwracac obrazki w dowolnej żądanej wielkości podawanej przez GET. Rezultaty zmian są buforowane i mogą spowodować spory rozrost bazy plików jeśli będzie ta opcja wykorzystywana intensywnie.');
@define('MEDIA_EXIF', 'Importuj dane EXIF/JPEG obrazków/zdjęć');
@define('MEDIA_EXIF_DESC', 'Jeśli opcja zostanie włączona, zapisane w plikach z obrazkami/zdjęciami dane EXIF/JPEG zostaną zachowane w bazie danych i wykorzystane przy wyświetlaniu w Bibliotece mediów.');
@define('MEDIA_PROP', 'Właściwości');
@define('MEDIA_PROP_DESC', 'Wprowadź listę pól właściwości, jakie chcesz ustalić dla każdego pliku medium. Elementy listy rozdzielaj znakiem średnika ";".');
@define('MEDIA_PROP_MULTIDESC', '(Możesz dodać ":MULTI" po każdym elemencie by poinformować Serendipity, że dany element będzie posiadał długi opis)');
@define('MEDIA_KEYWORDS', 'Słowa kluczowe mediów');
@define('MEDIA_KEYWORDS_DESC', 'Wprowadź predefiniowaną listę słów kluczowych dla mediów. Pozycje na liście rozdzielaj znakiem średnika ";". Te słowa kluczowe będą przypisywane mediom automatycznie przy importowaniu.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Twoje ustawienia osobiste');
@define('USERCONF_CAT_PERSONAL_DESC', 'Zmień swoje ustawienia osobiste');
@define('USERCONF_USERNAME', 'Twoja nazwa użytkownika');
@define('USERCONF_USERNAME_DESC', 'Nazwa, której używasz przy logowaniu do bloga');
@define('USERCONF_PASSWORD', 'Twoje hasło');
@define('USERCONF_PASSWORD_DESC', 'Hasło, którego chcesz użyć przy logowaniu do bloga');
@define('USERCONF_CHECK_PASSWORD', 'Stare hasło');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Jeśli zmienisz hasło w polu powyżej, musisz w tym polu wpisać aktualne hasło');
@define('USERCONF_USERLEVEL', 'Poziom dostępu');
@define('USERCONF_USERLEVEL_DESC', 'To ustawienie określa jaki poziom dostępu ma użytkownik do bloga.');
@define('USERCONF_GROUPS', 'Przynależność do grupy');
@define('USERCONF_GROUPS_DESC', 'Ten użytkownik należy do następujących grup. Przynależność do kilku grup jednocześnie jest możliwa.');
@define('USERCONF_EMAIL', 'Twój adres e-mail');
@define('USERCONF_EMAIL_DESC', 'Twój prywatny adres e-mail');
@define('INSTALL_WYSIWYG', 'Użyj edytora WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Chcesz użyć edytora WYSIWYG? (Działa w IE5+, częściowo w Mozilli 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Wysyłać powiadomienia o komentarzach?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Czy chcesz otrzymywać maile z informacją o komentarzach do Twoich wpisów?');
@define('USERCONF_SENDTRACKBACKS', 'Wysyłać powiadomienia o śladach?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Czy chcesz otrzymywać maile z informacją o pozostawionych śladach (trackbacks) do Twoich wpisów?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Uprawnienia: Publikowanie wpisów?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Czy ten użytkownik jest uprawniony do publikowania wpisów?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Czy pokazywać pasek narzędziowy w oknie wyboru mediów?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Standardowe ustawienia dla nowych wpisów');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UWAGA: to ustawienie jest obecnie używane tylko dla celów kompatybilności ze starszymi wersjami wtyczek i silnika. Obecnie poziom dostępu regulują reguły grup użytkowników!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Wpisałeś(aś) niepoprawne stare hasło i nie jesteś upoważniona do zmiany nowego hasła. Twoje ustawienia NIE zostaną zapisane.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Pole nazwy użytkownika nie może być puste.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Dostęp do ustawień osobistych');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Zmiana poziomu użytkowników');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Zmiana "zabroń tworzenia wpisów"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Zmiana uprawnień do publikowania wpisów');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Dostęp do konfiguracji systemu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Dostęp do konfiguracji bloga');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administracja wpisami');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administracja wpisami innych użytkowników');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import wpisów');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administracja kategoriami');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administracja kategoriami innych użytkowników');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Usuwanie kategorii');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administracja użytkownikami');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Usuwanie użytkowników');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Zmiana poziomu użytkowników');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administracja użytkownikami, którzy są w tej samej grupie (grupach)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administracja użytkownikami, którzy są w innych grupach');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Tworzenie nowych użytkowników');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administracja grupami użytkowników');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administracja wtyczkami');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administracja wtyczkami innych użytkowników');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administracja mediami');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administracja katalogami mediów');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Dodawanie nowych mediów');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Usuwanie mediów');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administracja mediami innych użytkowników');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Oglądanie plików z mediami');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Synchronizacja miniatur');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administracja komentarzami');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administracja stylami');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Oglądanie plików z mediami innych użytkowników');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zabronione wtyczki');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zabronione zdarzenia');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Twój wpis został zapisany');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Wątki');
@define('COMMENTS_VIEWMODE_LINEAR', 'Płasko');
@define('DISPLAY_COMMENTS_AS', 'Wyświetl komentarze jako');
@define('COMMENTS_DISABLE', 'Nie zezwalaj na komentowanie tego wpisu');
@define('COMMENTS_ENABLE', 'Zezwalaj na komentowanie tego wpisu');
@define('COMMENTS_CLOSED', 'Autor nie zezwolił na komentowanie tego wpisu');
@define('VIEW_EXTENDED_ENTRY', 'Ciąg dalszy "%s"');
@define('TRACKBACK_SPECIFIC', 'Użyj tego linku jeśli chcesz stworzyć Ślad (Trackback) do tego wpisu');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'pełne');
@define('VIEW_TOPICS', 'tytuły');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Tytuły z');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Wpisy nie zostały prawidłowo zapisane w bazie!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamiętać dane?');
@define('SUBMIT_COMMENT', 'Wyślij komentarz');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Wyślij mailem powiadomienie o odpowiedziach');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Wygląda na to, że komentarz #%s został już zaaprobowany');
@define('COMMENT_EDITED', 'Wybrany komentarz został wyedytowany');
@define('COMMENTS_WILL_BE_MODERATED', 'Komentarze poddawane są moderacji przed opublikowaniem ich na stronie.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Uwaga: Ten komentarz wymaga zaakcpetowania przed opublikowaniem go na stronie.');
@define('DELETE_COMMENT', 'Usuń komentarz');
@define('APPROVE_COMMENT', 'Zaaprobuj komentarz');
@define('REQUIRES_REVIEW', 'Wymaga sprawdzenia');
@define('COMMENT_APPROVED', 'Komentarz #%s został zaaprobowany');
@define('COMMENT_DELETED', 'Komentarz #%s został usunięty');
@define('COMMENTS_MODERATE', 'Komentarze i ślady (trackbacks) dla tego wpisu wymagają moderacji');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Uwaga: ten Ślad (Trackback) wymaga aprobaty zanim zostanie wyświetlony na stronie.');
@define('DELETE_TRACKBACK', 'Usuń Ślad (Trackback)');
@define('APPROVE_TRACKBACK', 'Zaaprobuj Ślad (Trackback)');
@define('TRACKBACK_APPROVED', 'Ślad (Trackback) #%s został zaaprobowany');
@define('TRACKBACK_DELETED', 'Ślad (Trackback) #%s został usunięty');
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
@define('TRACKBACK_SENDING', 'Wysyłanie śladu do URI %s...');
@define('TRACKBACK_SENT', 'Pozostawienie śladu zakończone sukcesem');
@define('TRACKBACK_FAILED', 'Pozostawienie śladu nie powiodło się: %s');
@define('TRACKBACK_NOT_FOUND', 'Nie odnaleziono URI dla ustanowienia śladu.');
@define('TRACKBACK_URI_MISMATCH', 'Automatycznie wykryte URI dla śladów nie pasuje do zdefiniowanego adresu docelowego.');
@define('TRACKBACK_CHECKING', 'Badanie możliwości pozostawienia śladu w <u>%s</u> ...');
@define('TRACKBACK_NO_DATA', 'Miejsce docelowe nie podało odpowiednich danych');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Ślad nie został wysłany: nie mogę połączyć się z %s używając portu %d');

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
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nowy komentarz do subskrybowanej wiadomości "%s"');
@define('SUBSCRIPTION_MAIL', "Witam %s,\n\nNowy komentarz został dodany do wpisu, który monitorujesz na \"%s\", zatytułowany \"%s\"\nImię komentującego to: %s\n\nSkomentowany wpis znajdziesz tutaj: %s\n\nMożesz wyłączyć powiadomienia o odpowiedziach do tego wpisu klikając na link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Witam %s,\n\nNowy ślad został pozostawiony we wpisie, który monitorujesz na \"%s\", zatytułowany \"%s\"\nImię komentującego to: %s\n\nSkomentowany wpis znajdziesz tutaj: %s\n\nMożesz wyłączyć powiadomienia o odpowiedziach do tego wpisu klikając na link: %s\n");
@define('SIGNATURE', "\n-- \n%s jest napędzane przez Serendipity.\nNajlepszy engine blogowy pod tym słońcem. Ty także możesz go używać.\nSprawdź <https://s9y.org> by się dowiedzieć jak!");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nowy komentarz na blogu "%s" został dodany do wpisu "%s."');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nowy Ślad (Trackback) został pozostawiony we wpisie "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Masz do wyboru następujące opcje:');
@define('NEW_TRACKBACK_TO', 'Nowy ślad (trackback) do');
@define('NEW_COMMENT_TO', 'Nowy komentarz do');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nie znaleziono wpisów zawierających zapytanie %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Twoje zapytanie o %s zwróciło %s wyników:');
@define('SEARCH_TOO_SHORT', 'Ilość znaków w zapytaniu musi być większa od trzech. Możesz próbować dodać * do krótszych słów, np. s9y* aby "oszukać" wyszukiwarkę by użyła krótsze zapytania.');
@define('SEARCH_ERROR', 'Funkcja wyszukiwania nie zadziałała jak powinna. Uwaga dla administratora tego bloga: To może się zdarzyć w przypadku braku kluczy indeksu w Twojej bazie danych. W systemach opartych na MySQL uzytkownik powinien mieć uprawnienia do wykonania następującego zapytania: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Błąd zwrócony przez bazę danych: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Twój komentarz nie zawiera żadnych treści. Proszę, %swróć%s i spróbuj ponownie.');
@define('COMMENT_NOT_ADDED', 'Twój komentarz nie został dodany. Ewentualne przyczyny: możliwość komentowania została wyłączona lub wprowadziłeś(aś) błędne dane lub Twój komentarz został uznany za spam.');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Błędnie wprowadzone ustawienie dla opcji "%s". Ustwienie powinno być następującego typu: "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Pokazuje listę kategorii');
@define('CATEGORIES_PARENT_BASE', 'Pokaż tylko kategorie zawierające się w...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Możesz wybrać kategorię nadrzędną co spowoduje wyświetlanie tylko kategorii podrzędnych, zawartych w kategorii nadrzędnej');
@define('CATEGORIES_HIDE_PARALLEL', 'Ukryj kategorie, które nie są częścią drzewa kategorii');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Jeśli chcesz ukryć kategorie, które znajdują się w innym drzewie kategorii, musisz włączyć tę opcję. Korzystanie z tej opcji ma sens przy używaniu Serendipity jako multi-bloga i użyciu wtyczki "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Ukryć wybraną kategorię nadrzędną?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Jeśli ograniczysz wyświetlanie kategorii do wybranej przez siebie kategorii nadrzędnej, standardowo zobaczysz nazwę kategorii nadrzędnej. Wyłączenie tej opcji (przez zaznaczenie pola "Tak") nie będzie wyświetlało nazwy tej kategorii nadrzędnej.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Zezwolić na używanie Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Włączenie tej opcji spowoduje użycie przez wtyczkę możliwości jakie oferuje Smarty do wyświetlania drzewa kategorii. Po włączeniu tej opcji możesz wpływać na sposób wyświetlania drzewa kategorii przez edycję pliku "plugin_categories.tpl". Włączenie tej opcji spowoduje spadek wydajności więc włącz ją tylko kiedy jej na prawdę potrzebujesz.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Informować o ilości wpisów w danej kategorii?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Zezwolić użytkownikom na wyświetlanie wielu kategorii jednocześnie?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Po włączeniu tej opcji przy każdej kategorii pojawi się pole umożliwiające jej zaznaczenie. Użytkownicy mogą zaznaczać w ten sposób wiele kategorii jednocześnie i wyświetlać zbiorczo wpisy z tych zaznaczonych kategorii.');
@define('CATEGORIES_TO_FETCH', 'Kategorie do pokazania');
@define('CATEGORIES_TO_FETCH_DESC', 'Pokaż kategorie zdefiniowane przez którego autora?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Pokazuje listę autorów');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Informować o ilości wpisów dokonanych przez autora obok jego Imienia?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'jeśli ta opcja zostanie włączona, obok autora zostanie pokazana ilość poczynionych przez niego wpisów ujeta w nawiasy.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Pokaż tylko autorów mających co najmniej X wpisów');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Subskrybcja');
@define('SHOWS_RSS_BLAHBLAH', 'Pokazuje linki subskrybcji kanałów RSS Twojego bloga');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID (w serwisie FeedBurner) feeda, który chcesz publikować');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner obrazek');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nazwa pliku z obrazkiem, który będzie wyświetlany (obrazki są pobierane z serwera feedburner.com), np. fbapix.gif. Pozostaw puste by wyświetlić licznik (musisz wpierw uruchomić odpowiednią usługę w serwisie FeedBurner!).');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner tytuł');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Tytuł (jeśli jakikolwiek) jaki ma być wyświetlany obok obrazka');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner tekst obrazka');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Tekst (jeśli jakikolwiek) jaki ma być wyświetlany po wskazniu kursorem obrazka');
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
@define('ARCHIVE_COUNT', 'Ilość pozycji na liście');
@define('ARCHIVE_COUNT_DESC', 'Ilość miesięcy, tygodni lub dni wyświetlanych na liście');
@define('ARCHIVE_FREQUENCY', 'Wyświetlany czasokres');
@define('ARCHIVE_FREQUENCY_DESC', 'Jednostki czasu, dla których będzie generowana lista');
@define('BROWSE_ARCHIVES', 'Przeglądaj archiwa miesiącami');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Pokaż "Serendipity" jako tekst');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Pokaże "Serendipity Weblog" jako tekst');
@define('POWERED_BY_SHOW_IMAGE', 'Pokaż "Serendipity" jako logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Pokaże logo Serendipity (obrazek)');
@define('ADVERTISES_BLAHBLAH', 'Zareklamuj Serendipity');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Użyj https dla logowania');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Link ze Stroną logowania będzie obsługiwany przez https. Twój serwer musi to obsługiwać!');
@define('SUPERUSER', 'Administracja blogiem');
@define('SUPERUSER_OPEN_ADMIN', 'Strona logowania');
@define('SUPERUSER_OPEN_LOGIN', 'Strona logowania');
@define('ALLOWS_YOU_BLAHBLAH', 'Umieszcza w Panelu Bocznym link do Panelu Administracyjnego');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendarz');
@define('CALENDAR_BOW_DESC', 'Dzień uznany za początek tygodnia. Standardowo jest to poniedziałek.');
@define('QUICKJUMP_CALENDAR', 'Kalendarz szybkiego dostępu');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Początek tygodnia');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Włącz odwołania wtyczek (API hook)');
@define('CALENDAR_EXTEVENT_DESC', 'Kiedy włączone, wtyczki mogą tworzyć odwołania do kalendarza by pokazać (podświetlić) zdarzenia z nimi związane. Włącz to tylko gdy masz zainstalowane wtyczki korzystające z opcji odwołania (hook), w przeciwnym wypadku tylko tracisz na wydajności wyświetlania strony.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Szukaj wpisu');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Umożliwia wprowadzenie kodu HTML. Efekt działania kodu będzie wyświetlany w Panelu Bocznym');
@define('THE_NUGGET', 'Kod HTML!');
@define('BACKEND_TITLE', 'Dodatkowe informacje na stonie Konfiguracja wtyczek');
@define('BACKEND_TITLE_FOR_NUGGET', 'Tu możesz podać dodatkowy opis, który będzie wyświetlany na stronie Konfiguracji Wtyczek razem z pluginem HTML Nugget. Przydatne kiedy posiadasz kilka takich HTMLowych wstawek, pozwala się jakoś w tym wszystkim połapać.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Pokazywać Top Exits/Referrers jako linki?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nie": Exits i Referrers są pokazywane czystym tekstem. "Tak": Exits i Referrers są pokazywane jako linki do danych adresów sieciowych. "Standardowo": używa ustawień z Ustawień głównych - rekomendowane.');
@define('HAVE_TO_BE_LOGGED_ON', 'Musisz się wpierw zalogować by móc obejrzeć tę stronę');
@define('WELCOME_TO_ADMIN', 'Witaj w Panelu Administracyjnym Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Krótki komentarz');
@define('MEDIA_PROPERTY_COMMENT2', 'Długi komentarz');
@define('DELETE_SELECTED_ENTRIES', 'Usuń wybrane wpisy');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Tytuł');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity nie zostało jeszcze zainstalowane. Proszę, <a href="%s">zainstaluj</a> je teraz.');
@define('COMMENT_ADDED_CLICK', 'Kliknij %stutaj by powrócić%s do komentarzy oraz %stutaj by zamknąć%s to okno.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknij %stutaj aby wrócić%s do komentarzy albo %stutaj by zamknąć%s to okno.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Czas trwania');
@define('MEDIA_PROPERTY_DATE', 'Data');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Zmieniono URL do przeniesionego katalogu w %s wpisach.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'W bazach innych niż MySQL przeprowadzenie zmiany URLI ze scieżką do starego katalogu na URLe ze ścieżką do nowego katalogu NIE jest możliwe. Musisz przeprowadzić te zmiany ręcznie. Zawsze możesz przenieść katalog w jego pierwotne miejsce jeśli uznasz, że ręczna edycja byłaby zbyt nieporęcznym rozwiązaniem.');
@define('TRACKBACK_SIZE', 'Docelowe URI przekroczyło maksymalny rozmiar %s bajtów (prawdopodobnie link do pliku).');
@define('CLICK_FILE_TO_INSERT', 'Kliknij na pliku, który chcesz umieścić:');
@define('SELECT_FILE', 'Wybierz plik do umieszczenia');
@define('MANAGE_IMAGES', 'Zarządzanie obrazkami');
@define('WORD_NEW', 'Nowy');
@define('WORD_OR', 'lub');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Widoczne: Serwisy Zewnętrzne');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Widoczne: Cechy/Ustawienia/Dodatki');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Widoczne: Pełne Mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Widoczne: Przeglądanie');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Widoczne: Związane z wpisem');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Niewidoczne: Edytor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Niewidoczne: Zarządzanie użytkownikami');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Niewidoczne: Meta informacje');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Niewidoczne: Szablony');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Niewidoczne: Cechy/Ustawienia/Dodatki');
@define('PLUGIN_GROUP_IMAGES', 'Obrazki');
@define('PLUGIN_GROUP_ANTISPAM', 'Antyspam');
@define('PLUGIN_GROUP_MARKUP', 'Znaczniki');
@define('PLUGIN_GROUP_STATISTICS', 'Statystyki');
@define('IMPORT_WELCOME', 'Witaj w module importu danych');
@define('USER_SELF_INFO', 'Zalogowany(a) jako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Możesz tu importować wpisy z innych systemów blogowych');
@define('IMPORT_SELECT', 'Wybierz system, z którego dane chcesz importować');
@define('MANAGE_STYLES', 'Zarządzanie stylami');
@define('SELECT_A_PLUGIN_TO_ADD', 'Wybierz wtyczkę, którą chcesz zainstalować');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Poniżej znajduje się lista zainstalowanych wtyczek.');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Przerwij teraz');
@define('DELETE_SELECTED_COMMENTS', 'Usuń zaznaczone komentarze');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Znajdź media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Błąd: Stara nazwa pliku nie istnieje!');
@define('ERROR_SOMETHING', 'Błąd: Coś jest nie tak.');
@define('DIRECT_LINK', 'Bezpośredni link do tego wpisu');
@define('SELECT_TEMPLATE', 'Wybierz styl dla swojego bloga');
@define('DATABASE_ERROR', 'błąd Serendipity: nie mogę połączyć się z bazą danych - wyjście.');
@define('LIMIT_TO_NUMBER', 'Jak wiele elementów ma być pokazanych?');
@define('DIRECTORIES_AVAILABLE', 'Na liście dostępnych podkatalogów możesz kliknąć na dowolnym katalogu by stworzyć nowy katalog w tej strukturze.');
@define('CATEGORY_INDEX', 'Poniżej znajduje się lista kategorii dostępna dla Twoich wpisów');
@define('PAGE_BROWSE_PLUGINS', 'Strona %s z %s, łącznie %s wtyczek.');
@define('CHARSET_NATIVE', 'Natywne');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Interfejs XML-RPC API nie jest już wbudowany w Serendipity z powodu problemów z bezpieczeństwem tego protokołu. Jeśli jednak chcesz obsługę tego protokołu mieć zaimplementowaną w swoim blogu, musisz zainstalować wtyczkę XML-RPC by móc używać protokołu XML-RPC API. URL, jaki należy używać w swoich aplikacjach NIE ulegnie zmianie - kiedy tylko zainstalujesz wtyczkę, będziesz mógł używać tego API.');
@define('AUTHORS_ALLOW_SELECT', 'Zezwolić użytkownikom na pokazywanie wpisów wielu autorów jednocześnie?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Jeśli ta opcja zostanie włączona, obok każdego autora wyświetlonego na Panelu Bocznym ukaże się checkbox (pole zaznaczenia). Użytkownicy będą mogli zaznaczyć autorów, których wpisy będą chcieli wyświetlić.');
@define('PREFERENCE_USE_JS', 'Zezwolić na używanie zaawansowanych skryptów JavaScript?');
@define('PREFERENCE_USE_JS_DESC', 'Jeśli włączone, zaawansowane skrypty JavaScript będą uruchamiane dla zwiększenia komfortu używalności, np. w module Konfiguracji wtyczek możesz administarować wtyczkami za pomocą myszy przez ich swobodne przesuwanie jak w technologii "drag and drop" (przeciągnij i upuść).');
@define('PREFERENCE_USE_JS_WARNING', '(Ta strona używa zaawansowanych skryptów JavaScript. Jeśli masz problemy z funkcjonowaniem tej strony, wyłącz używanie zaawansowanych skryptów JavaScript w swoich Ustawieniach osobistych lub wyłącz wspracie dla JavaScript w swojej przeglądarce.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
