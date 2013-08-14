<?php # 

/**
 *  @version 
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Rozszerzone w³a¶ciwo¶ci wpisów');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(buforowanie, wpisy niepubliczne, wpisy "przyklejone")');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Zaznacz ten wpis jako "przyklejony"');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Wpisy mog± byæ czytane przez');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Mnie');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Wspó³autorów');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Wszystkich');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Zezwalaæ na buforowanie (cache) wpisów?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Po w³±czeniu tej opcji przy ka¿dym zapisie wpisu bêdzie tworzona jego wersja umieszczana w cache (podrêcznym buforze strony). To spowoduje wzrost wydajno¶ci ale mo¿e spowodowaæ problemy przy wspó³dzia³aniu z innymi wtyczkami.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Buforuj (cache) wpisy');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Pobieranie nastêpnej porcji wpisow...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Pobieranie wpisów %d do %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Buforowanie (cache) wpisu #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Wpis umieszczono w buforze (cache).');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Buforowanie wpisów (cache) ukoñczone.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Buforowanie wpisów ANULOWANE.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (³±cznie %d wpisów)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Ukryj wpis (nie bêdzie wy¶wietlany przy przegl±dzie wpisów i na stronie g³ównej)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'U¿yj ograniczeñ grup');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Je¶li opcja zostanie w³±czona, bêdzie mo¿na zdefiniowaæ dla jakich grup (i ich cz³onków) wpis bêdzie widoczny. To ustawienie ma ogromny wp³yw na wydajno¶æ wiêc u¿ywaj wy³±cznie je¶li na prawdê potrzebujesz tej funkcjonalno¶ci.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'U¿yj ograniczeñ u¿ytkowników');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Je¶li opcja zostanie w³±czona, bêdzie mo¿na zdefiniowaæ dla jakich konkrtenych u¿ytkowników wpis bêdzie widoczny. To ustawienie ma ogromny wp³yw na wydajno¶æ wiêc u¿ywaj wy³±cznie je¶li na prawdê potrzebujesz tej funkcjonalno¶ci.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Nie pokazuj tre¶ci w RSS');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Je¶li ta opcja zostanie w³±czona, tre¶æ wpisu nie bêdzie pokazywana w kanale RSS.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Pola u¿ytkownika');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Dodatkowe pola mog± byc u¿yte w Twoim schemacie w miejscach, w których chcesz je pokazaæ. Aby uzyskaæ ten efekt wyedytuj plik entries.tpl swojego schematu i wstaw tagi Smarty {$entry.properties.ep_MyCustomField} w kodzie HTML gdzie uwa¿asz to za stosowne. Zwróæ uwagê na prefiks ep_ dla ka¿dego pola.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Tu mo¿na wpisaæ nazwy (rozdzielone przecinkami) dodatkowych pól, które bêd± dostêpne przy edycji ka¿dego wpisu. Nie nalezy u¿ywaæ znaków specjalnych lub spacji dla nazw tych pól. Przyk³ad: "Customfield1, Customfield2". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Lista dostêpnych pól uzytkownika mo¿e byæ zmieniona w module <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">konfiguracji wtyczki</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Wy³±cz wtyczki Znaczników dla tego wpisu:');

