<?php #

/**
 *  @version 
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
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(repozytorium zwróci³o kod b³êdu %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<P>Nie mogê pobraæ danych z repozytorium SPARTACUSa. Sprawdzam dostêpno¶æ repozytorium.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<P>Strona z informacj± o dostêpno¶ci repozytoriów dla SPARTACUSa zwróci³a b³±d (kod HTTP %s). To oznacza, ¿e strona aktualnie nie funkcjonuje. Proszê spróbowaæ ponownie pó¼niej.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<P><a target="_blank" href="%s">Kliknij tutaj</a> by zobaczyæ stronê z informacj± o dostêpno¶ci repozytoriów dla SPARTACUSa i sprawd¼, czy strona odpowiada.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<P>SPARTACUS próbowa³ po³±czyæ siê z Google i nie powiod³a siê ta operacja (b³±d %d: %s).<br />Twój serwer blokuje po³±czenia wychodz±ce.    Your server is blocking outgoing connections. SPARTACUS nie bêdzie funkcjonowa³ prawid³owo poniewa¿ nie mo¿e skontaktowaæ siê z repozytorium. <b>Proszê, skontaktuj siê z providerem i popro¶ o zezwolenie na po³±czenia wychodz±ce z serwera.</b></P><P>Wtyczki mog± byæ oczywi¶cie instalowane bezpo¶rednio z katalogów na serwerze. Po prostu pobierz wtyczkê z <a href="http://spartacus.s9y.org">repozytorium SPARTACUSa</a>, rozpakuj, wgraj rozpakowany katalog do katalogu wtyczek (plugins).</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<P>SPARTACUS mo¿e po³±czyæ siê z Google ale nie mo¿e po³±czyæ siê z repozytorium. Jest mo¿liwe, ¿e Twój serwer blokuje pewne po³±czenia wychodz±ce albo ¿e strona z repozytorium SPARTACUSa aktualnie nie dzia³a. Skontaktuj siê z firm± hostuj±c± Twoj± stronê i upewnij siê, ¿e po³±czenia wychodz±ce s± dozwolone. <b>Nie bêdziesz móg³ u¿ywaæ SPARTACUSa dopóki Twój serwer nie bêdzie móg³ kontaktowaæ siê z repozytorium SPARTACUSa.</b></P>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Lokalizacja pliku/mirrora (metadane XML)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Lokalizacja pliku/mirrora (pliki)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Wybierz lokalizacjê, z której bêd± pobierane dane. NIE zmieniaj tej warto¶ci o ile dobrze nie wiesz, co robisz i o ile serwer jest dostêpny. Opcja istnieje g³ównie dla kompatybilno¶ci z przysz³ymi wersjami wtyczki.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'W³a¶ciciel pobranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Tu mo¿esz podaæ w³a¶ciciela (jak np. "nobody") plików pobieranych i zapisywanych przez Spartacusa. Pozostawienie pustego pola nie spowoduje zmian uprawnieñ do plików.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Upraweniania pobieranych plików');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Tu mo¿esz wprowadziæ ósemkowe warto¶ci (jak "0777") uprawnieñ dostêpu do plików pobranych przez Spartacusa. Je¶li nic nie ustawisz - przyjêta zostanie domy¶lna maska systemu. Zwróæ uwagê na to, by wprowadzone uprawnienia umo¿liwia³y czytanie i zapisywanie plików przez u¿ytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie bêdzie móg³ nadpisaæ istniej±cych plików. Uwaga, nie wszystkie serwery zezwalaj± na takie operacje.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Uprawnienia pobieranych katalogów');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Tu mo¿esz wprowadziæ ósemkowe warto¶ci (jak "0777") uprawnieñ dostêpu do katalogów pobranych przez Spartacusa. Je¶li nic nie ustawisz - przyjêta zostanie domy¶lna maska systemu. Zwróæ uwagê na to, by wprowadzone uprawnienia umo¿liwia³y czytanie i zapisywanie katalogów przez u¿ytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie bêdzie móg³ nadpisaæ istniej±cych katalogów. Uwaga, nie wszystkie serwery zezwalaj± na takie operacje.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Sprawd¼ czy s± nowe wtyczki Panelu bocznego');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Sprawd¼ czy s± nowe wtyczki Zdarzeñ');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Podpowied¼: Mo¿esz uaktualniæ kilka wtyczek jednocze¶nie klikaj±c link uaktualnienia ¶rodkowym klawiszem myszy, tak by otworzyæ ten link w nowym oknie lub nowym tabie (zak³adce) przegl±darki. Zauwa¿, ¿e uaktualnianie kilku wtyczek jednocze¶nie mog³oby prowadziæ do timeoutów i problemów z pobieraniem plików a w efekcie - nagromadzenia ¶mieci i potencjalnych problemów. Dlatego taka funkcjonalno¶æ nie zosta³a zaimplementowana rozmy¶lnie.');

