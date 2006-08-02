<?php # $Id: lang_en.inc.php 690 2005-11-13 04:49:04Z elf2000 $

/**
 *  @version $Revision: 690 $
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
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Lokalizacja pliku/mirrora (metadane XML)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Lokalizacja pliku/mirrora (pliki)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Wybierz lokalizację, z której będą pobierane dane. NIE zmieniaj tej wartości o ile dobrze nie wiesz, co robisz i o ile serwer jest dostępny.	Opcja istnieje głównie dla kompatybilności z przyszłymi wersjami wtyczki.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Właściciel pobranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Tu możesz podać właściciela (jak np. "nobody") plików pobieranych i zapisywanych przez Spartacusa. Pozostawienie pustego pola nie spowoduje zmian uprawnień do plików.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Upraweniania pobieranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Tu możesz wprowadzić ósemkowe wartości (jak "0777") uprawnień dostępu do plików pobranych przez Spartacusa. Jeśli nic nie ustawisz - przyjęta zostanie domyślna maska systemu. Zwróć uwagę na to, by wprowadzone uprawnienia umożliwiały czytanie i zapisywanie plików przez użytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie będzie mógł nadpisać istniejących plików. Uwaga, nie wszystkie serwery zezwalają na takie operacje.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Uprawnienia pobieranych katalogów');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Tu możesz wprowadzić ósemkowe wartości (jak "0777") uprawnień dostępu do katalogów pobranych przez Spartacusa. Jeśli nic nie ustawisz - przyjęta zostanie domyślna maska systemu. Zwróć uwagę na to, by wprowadzone uprawnienia umożliwiały czytanie i zapisywanie katalogów przez użytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie będzie mógł nadpisać istniejących katalogów. Uwaga, nie wszystkie serwery zezwalają na takie operacje.');

?>
