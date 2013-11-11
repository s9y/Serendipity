<?php #

/**
 *  @version 
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Różne metody na zwalczanie spamu w komentarzach');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Obrona przed spamem: Nieprawidłowy komentarz.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Obrona przed spamem: Nie możesz wprowadzić kolejnego komentarza tak prędko. Proszę, poczekaj chwilę (obrona przed floodem).');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Ten blog znajduje się w trybie "Całkowita blokada komentarzy". Proszę, wróć tu za jakiś czas, kiedy ten tryb zostanie zniesiony.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Nie zezwalaj na zduplikowane komentarze');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Nie zezwalaj użytkownikom na dodanie komentarza, który ma taką samą zawartość jak dopiero co dodany komentarz (kolejne dodanie takiego samego komentarza)');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Całkowita blokada komentarzy');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Czasowe wyłączenie możliwości komentowania dla wszystkich wpisów. Przydatne kiedy Twój blog jest pod zmasowanym spamerskim atakiem.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Czas blokowania adresu IP');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Zezwól na komentarze z danego adresu IP co n minut. Przydatne dla blokowania komentarzowych floodów (wiele komentarzy z tego samego adresu IP w krótkim czasie).');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Włącz Captcha');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Wymusza na użytkowniku wpisanie specjalnego losowego kodu wyświetlanego w wygenrowanym obrazku. Proszę, zwróć uwagę na to, że ludzie mający problemy ze wzrokiem mogą mieć problemy z odczytaniem kodu.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'Proszę, wpisz widoczny na obrazku kod do odpowiedniego pola. Twój komentarz zostanie dodany tylko gdy wpisany kod będzie się zgadzał z tym widocznym na obrazku. Proszę, upewnij się, że Twoja przeglądarka ma włączoną obsługę cookies (ciasteczek) lub Twój komentarz nie przejdzie poprawnie weryfikacji.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Wpisz ciąg znaków, który tu widzisz do odpowiedniego pola!');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Wpisz ciąg znaków widoczny na obrazku powyżej: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Wprowadziłeś(aś) nieprawidłowy ciąg. Zerknij na obrazek i wprowadź odpowiedni ciąg ponownie.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captcha nie będzie działało na Twoim serwerze. Potrzebujesz zainstalowanych bibliotek GDLib i freetype oraz upewnij się, że odpowiednie pliki .ttf znajują się w katalogu wtyczki.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Wymuś Captcha po ilu dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Możesz wymusić uzycie Captcha po określonej ilości dni. Wprowadź ilośc dni, po których wprowadzenie Captcha będzie wymagane. Jeśli ustawione na 0 - będzie wymagane zawsze.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Wymuś moderowanie komentarzy po ilu dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Możesz ustawić wymóg moderowania wszystkich komentarzy. Wprowadź ilość dni, po których komentarze powinny podlegać auto-moderacji. 0 wyłącza automoderację.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Jak wiele linków musi wystąpić by komentarz podlegał moderacji');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Jeśli w komentarzu wystąpi podana ilość linków będzie on wymagał moderacji. 0 oznacza wyłączenie tej opcji.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Jak wiele linków musi wystąpić by komentarz został odrzucony');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Jeśli w komentarzu wystąpi podana ilość linków, komentarz zostanie automatycznie odrzucony. 0 oznacza wyłączenie tej opcji.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Z powodu warunków określonych przez administratora bloga, Twój komentarz został oznaczony jako "wymagający sprawdzenia".');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Kolor tła captcha');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Wprowadź wartości RGB: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Położenie pliku z logiem');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informacja o odrzuconych/wymagających moderowania komentarzach może być przechowywania w pliku. Wyczyść to pole jeśli chcesz wyłączyć logowanie.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Nagły wypadek: możliwość komentowania została wyłączona');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Zduplikowany komentarz');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'Zablokowane IP');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Błędnie wprowadzone captcha (wprowadzono: %s, powinno być: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Auto-moderacja po X dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Zbyt wiele linków');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Zbyt wiele linków');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Ukryj adresy e-mail komentujących');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Adresy e-mail komentujących nie będą pokazywane');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'Adresy e-mail nie będą pokazywane i będą używane tylko do celów wysyłania powiadomień drogą e-mailową');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Wybierz metodę logowania');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Logi o odrzuconych komentarzach mogą być przechowywane w Bazie danych lub w pliku tekstowym');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Plik (patrz "Położenie pliku z logiem")');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Baza danych');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Bez logowania');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Jak obsługiwać komentarze dokonywane via API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'To ustawienie odnosi się do komentarzy przesyłanych przez API (Ślady (Trackbacks), WFW:commentAPI). Jeśli wybrane jest ustawienie "moderuj", wszystkie te komentarze zawsze muszą być wpierw zatwierdzone. Jeśli wybrane jest ustawienie "odrzucaj" - taki sposób komentowania jest zupełnie wyłączony. Jeśli wybrane jest ustawienie "żadne" - komentarze dokonywane w opisany sposób będą traktowane jak zwykłe komentarze.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderuj');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'odrzucaj');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'Niedozwolone jest komentowanie via API (jak np. Ślady (Trackbacki))');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Aktywuj filtr słowny');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Przeszukuje komentarze na okoliczność wystąpienia pewnych ciągów znaków i oznacza je jako spam');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Filtr URLi');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Dozwolone są wyrażenia regularne, oddzielaj wyrażenia średnikami (;)');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Filtr nazw autorów');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', 'Dozwolone są wyrażenia regularne, oddzielaj wyrażenia średnikami (;)');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Filtr treści komentarza');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Zły adres e-mail');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Sprawdzać adresy e-mail?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Wymagane pola komentarza');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Wprowadź listę wymaganych pól, które muszą być wypełnione przez użytkownika. Rozdzielaj pola przecinkami (,). Dostępne nazwy pól: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Nie wypełniłeś pola  %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Konfiguracja metod atyspamowych');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokuj tego autora przez wtyczkę Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokuj ten URL przez wtyczkę Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Odblokuj tego autora we wtyczce Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Odblokuj ten URL we wtyczce Obrona przed spamem');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Tytuł wpisu jest taki sam jak treść komentarza');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Odrzucaj komentarze, które zawierają tylko tytuł');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Sprawdzaj URLe Śladów (Trackbacków)');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Zezwól na pozostawienie Śladu (Trackback) tylko gdy zawiera on link do Twojego bloga');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Zły URL Śladu (Trackbacka)');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Rozstrzelone captcha');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Wyłącz wtyczkę dla Autorów');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Możesz zezwolić na komentowanie wpisów przez Autorów należących do zaznaczonych grup bez włączonej ochorny antyspamowej.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Klucz Akismet API');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com to centralny serwer antyspamowy i zawierający tzw. blacklisty. Może analizować komentarze i sprawdzać, czy taki komentarz został zgłoszony jako spam. Akismet został stworzony dla systemu WordPress ale może być wykorzystywany przez inne systemy. Potrzebujesz klucza API (API Key) ze strony http://www.akismet.com - klucz otrzymasz po rejestracji w serwisie http://www.wordpress.com/. Jeśli pozostawisz to pole puste, technologia Akismet nie będzie wykorzystywana.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Jak traktować spam zgłoszony przez Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Użyto filtra Akismet.com Blacklist');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Co zrobić z komentarzami, które będą automoderowane?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Co zrobić ze Śladami, które będą automoderowane?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Wymuszać moderowanie Śladów po jak wielu dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Możesz wymusić moderowanie wszelkich Śladów do Twoich wpisów. Wprowadź wiek wpisu (w dniach), po którym każdy Ślad pozostawiany po tym terminie będzie musiał być moderowany przed opublikowaniem.');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'Użyć ochrony CSRF dla komentarzy?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Po włączeniu tej opcji każdemu komentarzowi będzie przyporządkowywana wartość hash, dzięki której będzie można sprawdzić, czy komentarz został pozostawiony przez użytkownika z prawidłowym ID sesji. To ustawienie zmniejszy ilosć spamu i ograniczy możliwość komentowania przez CSRF ale jednocześnie uniemożliwi komentowanie użytkownikom nie korzystającym z ciastek (cookies) w ich przeglądarkach.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Twój komentarz nie posiadał numeru hash sesji. Komentarze mogą być pozostawiane na tym blogu tylko gdy Twoja przeglądarka ma włączoną obsługę ciasteczek (cookies)!');

