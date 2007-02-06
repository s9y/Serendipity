<?php # $Id$

/**
 *  @version $Revision$
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - pozwala na pobieranie wtyczek z repoztoriów sieciowych');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Kliknij tutaj by pobrać %s z Sieciowego Repozytorium Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'URL %s nie mógł być otwarty. Być może serwer Serendipity lub SourceFroge.net aktualnie nie działa - w takim przypadku przepraszamy i prosimy spróbowac ponownie później.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Próba otwarcia URLa %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', 'Pobrano %s bajtów z powyższego URLa. Zapisuję plik jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', 'Pobrano %s bajtów z już istniejącego pliku na Twoim serwerze. Zapisuję plik jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Pobieranie danych zakończone sukcesem.');
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(repozytorium zwróciło kod błędu %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<P>Nie mogę pobrać danych z repozytorium SPARTACUSa. Sprawdzam dostępność repozytorium.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<P>Strona z informacją o dostępności repozytoriów dla SPARTACUSa zwróciła błąd (kod HTTP %s). To oznacza, że strona aktualnie nie funkcjonuje. Proszę spróbować ponownie później.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<P><a target="_blank" href="%s">Kliknij tutaj</a> by zobaczyć stronę z informacją o dostępności repozytoriów dla SPARTACUSa i sprawdź, czy strona odpowiada.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<P>SPARTACUS próbował połączyć się z Google i nie powiodła się ta operacja (błąd %d: %s).<br />Twój serwer blokuje połączenia wychodzące.    Your server is blocking outgoing connections. SPARTACUS nie będzie funkcjonował prawidłowo ponieważ nie może skontaktować się z repozytorium. <b>Proszę, skontaktuj się z providerem i poproś o zezwolenie na połączenia wychodzące z serwera.</b></P><P>Wtyczki mogą być oczywiście instalowane bezpośrednio z katalogów na serwerze. Po prostu pobierz wtyczkę z <a href="http://spartacus.s9y.org">repozytorium SPARTACUSa</a>, rozpakuj, wgraj rozpakowany katalog do katalogu wtyczek (plugins).</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<P>SPARTACUS może połączyć się z Google ale nie może połączyć się z repozytorium. Jest możliwe, że Twój serwer blokuje pewne połączenia wychodzące albo że strona z repozytorium SPARTACUSa aktualnie nie działa. Skontaktuj się z firmą hostującą Twoją stronę i upewnij się, że połączenia wychodzące są dozwolone. <b>Nie będziesz mógł używać SPARTACUSa dopóki Twój serwer nie będzie mógł kontaktować się z repozytorium SPARTACUSa.</b></P>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Lokalizacja pliku/mirrora (metadane XML)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Lokalizacja pliku/mirrora (pliki)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Wybierz lokalizację, z której będą pobierane dane. NIE zmieniaj tej wartości o ile dobrze nie wiesz, co robisz i o ile serwer jest dostępny.	Opcja istnieje głównie dla kompatybilności z przyszłymi wersjami wtyczki.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Właściciel pobranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Tu możesz podać właściciela (jak np. "nobody") plików pobieranych i zapisywanych przez Spartacusa. Pozostawienie pustego pola nie spowoduje zmian uprawnień do plików.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Upraweniania pobieranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Tu możesz wprowadzić ósemkowe wartości (jak "0777") uprawnień dostępu do plików pobranych przez Spartacusa. Jeśli nic nie ustawisz - przyjęta zostanie domyślna maska systemu. Zwróć uwagę na to, by wprowadzone uprawnienia umożliwiały czytanie i zapisywanie plików przez użytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie będzie mógł nadpisać istniejących plików. Uwaga, nie wszystkie serwery zezwalają na takie operacje.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Uprawnienia pobieranych katalogów');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Tu możesz wprowadzić ósemkowe wartości (jak "0777") uprawnień dostępu do katalogów pobranych przez Spartacusa. Jeśli nic nie ustawisz - przyjęta zostanie domyślna maska systemu. Zwróć uwagę na to, by wprowadzone uprawnienia umożliwiały czytanie i zapisywanie katalogów przez użytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie będzie mógł nadpisać istniejących katalogów. Uwaga, nie wszystkie serwery zezwalają na takie operacje.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Sprawdź czy są nowe wtyczki Panelu bocznego');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Sprawdź czy są nowe wtyczki Zdarzeń');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Podpowiedź: Możesz uaktualnić kilka wtyczek jednocześnie klikając link uaktualnienia środkowym klawiszem myszy, tak by otworzyć ten link w nowym oknie lub nowym tabie (zakładce) przeglądarki. Zauważ, że uaktualnianie kilku wtyczek jednocześnie mogłoby prowadzić do timeoutów i problemów z pobieraniem plików a w efekcie - nagromadzenia śmieci i potencjalnych problemów. Dlatego taka funkcjonalność nie została zaimplementowana rozmyślnie.');
?>
