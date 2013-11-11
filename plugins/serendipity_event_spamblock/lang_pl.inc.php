<?php #

/**
 *  @version 
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Ró¿ne metody na zwalczanie spamu w komentarzach');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Obrona przed spamem: Nieprawid³owy komentarz.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Obrona przed spamem: Nie mo¿esz wprowadziæ kolejnego komentarza tak prêdko. Proszê, poczekaj chwilê (obrona przed floodem).');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Ten blog znajduje siê w trybie "Ca³kowita blokada komentarzy". Proszê, wróæ tu za jaki¶ czas, kiedy ten tryb zostanie zniesiony.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Nie zezwalaj na zduplikowane komentarze');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Nie zezwalaj u¿ytkownikom na dodanie komentarza, który ma tak± sam± zawarto¶æ jak dopiero co dodany komentarz (kolejne dodanie takiego samego komentarza)');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Ca³kowita blokada komentarzy');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Czasowe wy³±czenie mo¿liwo¶ci komentowania dla wszystkich wpisów. Przydatne kiedy Twój blog jest pod zmasowanym spamerskim atakiem.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Czas blokowania adresu IP');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Zezwól na komentarze z danego adresu IP co n minut. Przydatne dla blokowania komentarzowych floodów (wiele komentarzy z tego samego adresu IP w krótkim czasie).');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'W³±cz Captcha');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Wymusza na u¿ytkowniku wpisanie specjalnego losowego kodu wy¶wietlanego w wygenrowanym obrazku. Proszê, zwróæ uwagê na to, ¿e ludzie maj±cy problemy ze wzrokiem mog± mieæ problemy z odczytaniem kodu.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'Proszê, wpisz widoczny na obrazku kod do odpowiedniego pola. Twój komentarz zostanie dodany tylko gdy wpisany kod bêdzie siê zgadza³ z tym widocznym na obrazku. Proszê, upewnij siê, ¿e Twoja przegl±darka ma w³±czon± obs³ugê cookies (ciasteczek) lub Twój komentarz nie przejdzie poprawnie weryfikacji.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Wpisz ci±g znaków, który tu widzisz do odpowiedniego pola!');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Wpisz ci±g znaków widoczny na obrazku powy¿ej: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Wprowadzi³e¶(a¶) nieprawid³owy ci±g. Zerknij na obrazek i wprowad¼ odpowiedni ci±g ponownie.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captcha nie bêdzie dzia³a³o na Twoim serwerze. Potrzebujesz zainstalowanych bibliotek GDLib i freetype oraz upewnij siê, ¿e odpowiednie pliki .ttf znajuj± siê w katalogu wtyczki.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Wymu¶ Captcha po ilu dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Mo¿esz wymusiæ uzycie Captcha po okre¶lonej ilo¶ci dni. Wprowad¼ ilo¶c dni, po których wprowadzenie Captcha bêdzie wymagane. Je¶li ustawione na 0 - bêdzie wymagane zawsze.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Wymu¶ moderowanie komentarzy po ilu dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Mo¿esz ustawiæ wymóg moderowania wszystkich komentarzy. Wprowad¼ ilo¶æ dni, po których komentarze powinny podlegaæ auto-moderacji. 0 wy³±cza automoderacjê.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Jak wiele linków musi wyst±piæ by komentarz podlega³ moderacji');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Je¶li w komentarzu wyst±pi podana ilo¶æ linków bêdzie on wymaga³ moderacji. 0 oznacza wy³±czenie tej opcji.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Jak wiele linków musi wyst±piæ by komentarz zosta³ odrzucony');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Je¶li w komentarzu wyst±pi podana ilo¶æ linków, komentarz zostanie automatycznie odrzucony. 0 oznacza wy³±czenie tej opcji.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Z powodu warunków okre¶lonych przez administratora bloga, Twój komentarz zosta³ oznaczony jako "wymagaj±cy sprawdzenia".');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Kolor t³a captcha');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Wprowad¼ warto¶ci RGB: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Po³o¿enie pliku z logiem');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informacja o odrzuconych/wymagaj±cych moderowania komentarzach mo¿e byæ przechowywania w pliku. Wyczy¶æ to pole je¶li chcesz wy³±czyæ logowanie.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Nag³y wypadek: mo¿liwo¶æ komentowania zosta³a wy³±czona');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Zduplikowany komentarz');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'Zablokowane IP');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'B³êdnie wprowadzone captcha (wprowadzono: %s, powinno byæ: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Auto-moderacja po X dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Zbyt wiele linków');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Zbyt wiele linków');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Ukryj adresy e-mail komentuj±cych');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Adresy e-mail komentuj±cych nie bêd± pokazywane');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'Adresy e-mail nie bêd± pokazywane i bêd± u¿ywane tylko do celów wysy³ania powiadomieñ drog± e-mailow±');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Wybierz metodê logowania');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Logi o odrzuconych komentarzach mog± byæ przechowywane w Bazie danych lub w pliku tekstowym');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Plik (patrz "Po³o¿enie pliku z logiem")');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Baza danych');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Bez logowania');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Jak obs³ugiwaæ komentarze dokonywane via API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'To ustawienie odnosi siê do komentarzy przesy³anych przez API (¦lady (Trackbacks), WFW:commentAPI). Je¶li wybrane jest ustawienie "moderuj", wszystkie te komentarze zawsze musz± byæ wpierw zatwierdzone. Je¶li wybrane jest ustawienie "odrzucaj" - taki sposób komentowania jest zupe³nie wy³±czony. Je¶li wybrane jest ustawienie "¿adne" - komentarze dokonywane w opisany sposób bêd± traktowane jak zwyk³e komentarze.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderuj');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'odrzucaj');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'Niedozwolone jest komentowanie via API (jak np. ¦lady (Trackbacki))');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Aktywuj filtr s³owny');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Przeszukuje komentarze na okoliczno¶æ wyst±pienia pewnych ci±gów znaków i oznacza je jako spam');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Filtr URLi');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Dozwolone s± wyra¿enia regularne, oddzielaj wyra¿enia ¶rednikami (;)');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Filtr nazw autorów');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', 'Dozwolone s± wyra¿enia regularne, oddzielaj wyra¿enia ¶rednikami (;)');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Filtr tre¶ci komentarza');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Z³y adres e-mail');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Sprawdzaæ adresy e-mail?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Wymagane pola komentarza');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Wprowad¼ listê wymaganych pól, które musz± byæ wype³nione przez u¿ytkownika. Rozdzielaj pola przecinkami (,). Dostêpne nazwy pól: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Nie wype³ni³e¶ pola  %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Konfiguracja metod atyspamowych');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokuj tego autora przez wtyczkê Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokuj ten URL przez wtyczkê Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Odblokuj tego autora we wtyczce Obrona przed spamem');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Odblokuj ten URL we wtyczce Obrona przed spamem');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Tytu³ wpisu jest taki sam jak tre¶æ komentarza');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Odrzucaj komentarze, które zawieraj± tylko tytu³');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Sprawdzaj URLe ¦ladów (Trackbacków)');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Zezwól na pozostawienie ¦ladu (Trackback) tylko gdy zawiera on link do Twojego bloga');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Z³y URL ¦ladu (Trackbacka)');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Rozstrzelone captcha');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Wy³±cz wtyczkê dla Autorów');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Mo¿esz zezwoliæ na komentowanie wpisów przez Autorów nale¿±cych do zaznaczonych grup bez w³±czonej ochorny antyspamowej.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Klucz Akismet API');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com to centralny serwer antyspamowy i zawieraj±cy tzw. blacklisty. Mo¿e analizowaæ komentarze i sprawdzaæ, czy taki komentarz zosta³ zg³oszony jako spam. Akismet zosta³ stworzony dla systemu WordPress ale mo¿e byæ wykorzystywany przez inne systemy. Potrzebujesz klucza API (API Key) ze strony http://www.akismet.com - klucz otrzymasz po rejestracji w serwisie http://www.wordpress.com/. Je¶li pozostawisz to pole puste, technologia Akismet nie bêdzie wykorzystywana.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Jak traktowaæ spam zg³oszony przez Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'U¿yto filtra Akismet.com Blacklist');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Co zrobiæ z komentarzami, które bêd± automoderowane?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Co zrobiæ ze ¦ladami, które bêd± automoderowane?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Wymuszaæ moderowanie ¦ladów po jak wielu dniach');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Mo¿esz wymusiæ moderowanie wszelkich ¦ladów do Twoich wpisów. Wprowad¼ wiek wpisu (w dniach), po którym ka¿dy ¦lad pozostawiany po tym terminie bêdzie musia³ byæ moderowany przed opublikowaniem.');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'U¿yæ ochrony CSRF dla komentarzy?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Po w³±czeniu tej opcji ka¿demu komentarzowi bêdzie przyporz±dkowywana warto¶æ hash, dziêki której bêdzie mo¿na sprawdziæ, czy komentarz zosta³ pozostawiony przez u¿ytkownika z prawid³owym ID sesji. To ustawienie zmniejszy ilosæ spamu i ograniczy mo¿liwo¶æ komentowania przez CSRF ale jednocze¶nie uniemo¿liwi komentowanie u¿ytkownikom nie korzystaj±cym z ciastek (cookies) w ich przegl±darkach.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Twój komentarz nie posiada³ numeru hash sesji. Komentarze mog± byæ pozostawiane na tym blogu tylko gdy Twoja przegl±darka ma w³±czon± obs³ugê ciasteczek (cookies)!');

