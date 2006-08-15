<?php # $Id$

/**
 *  @version $Revision$
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - pozwala na pobieranie wtyczek z repoztoriów sieciowych');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Kliknij tutaj by pobraæ %s z Sieciowego Repozytorium Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'URL %s nie móg³ byæ otwarty. Byæ mo¿e serwer Serendipity lub SourceFroge.net aktualnie nie dzia³a - w takim przypadku przepraszamy i prosimy spróbowac ponownie pó¼niej.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Próba otwarcia URLa %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', 'Pobrano %s bajtów z powy¿szego URLa. Zapisujê plik jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', 'Pobrano %s bajtów z ju¿ istniej±cego pliku na Twoim serwerze. Zapisujê plik jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Pobieranie danych zakoñczone sukcesem.');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Lokalizacja pliku/mirrora (metadane XML)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Lokalizacja pliku/mirrora (pliki)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Wybierz lokalizacjê, z której bêd± pobierane dane. NIE zmieniaj tej warto¶ci o ile dobrze nie wiesz, co robisz i o ile serwer jest dostêpny.	Opcja istnieje g³ównie dla kompatybilno¶ci z przysz³ymi wersjami wtyczki.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'W³a¶ciciel pobranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Tu mo¿esz podaæ w³a¶ciciela (jak np. "nobody") plików pobieranych i zapisywanych przez Spartacusa. Pozostawienie pustego pola nie spowoduje zmian uprawnieñ do plików.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Upraweniania pobieranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Tu mo¿esz wprowadziæ ósemkowe warto¶ci (jak "0777") uprawnieñ dostêpu do plików pobranych przez Spartacusa. Je¶li nic nie ustawisz - przyjêta zostanie domy¶lna maska systemu. Zwróæ uwagê na to, by wprowadzone uprawnienia umo¿liwia³y czytanie i zapisywanie plików przez u¿ytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie bêdzie móg³ nadpisaæ istniej±cych plików. Uwaga, nie wszystkie serwery zezwalaj± na takie operacje.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Uprawnienia pobieranych katalogów');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Tu mo¿esz wprowadziæ ósemkowe warto¶ci (jak "0777") uprawnieñ dostêpu do katalogów pobranych przez Spartacusa. Je¶li nic nie ustawisz - przyjêta zostanie domy¶lna maska systemu. Zwróæ uwagê na to, by wprowadzone uprawnienia umo¿liwia³y czytanie i zapisywanie katalogów przez u¿ytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie bêdzie móg³ nadpisaæ istniej±cych katalogów. Uwaga, nie wszystkie serwery zezwalaj± na takie operacje.');

?>
