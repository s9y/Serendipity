<?php # $Id$

/**
 *  @version $Revision$
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Rozszerzone właściwości wpisów');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(buforowanie, wpisy niepubliczne, wpisy "przyklejone")');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Zaznacz ten wpis jako "przyklejony"');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Wpisy mogą być czytane przez');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Mnie');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Współautorów');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Wszystkich');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Zezwalać na buforowanie (cache) wpisów?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Po włączeniu tej opcji przy każdym zapisie wpisu będzie tworzona jego wersja umieszczana w cache (podręcznym buforze strony). To spowoduje wzrost wydajności ale może spowodować problemy przy współdziałaniu z innymi wtyczkami.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Buforuj (cache) wpisy');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Pobieranie następnej porcji wpisow...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Pobieranie wpisów %d do %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Buforowanie (cache) wpisu #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Wpis umieszczono w buforze (cache).');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Buforowanie wpisów (cache) ukończone.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Buforowanie wpisów ANULOWANE.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (łącznie %d wpisów)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Ukryj wpis (nie będzie wyświetlany przy przeglądzie wpisów i na stronie głównej)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Użyj ograniczeń grup');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Jeśli opcja zostanie włączona, będzie można zdefiniować dla jakich grup (i ich członków) wpis będzie widoczny. To ustawienie ma ogromny wpływ na wydajność więc używaj wyłącznie jeśli na prawdę potrzebujesz tej funkcjonalności.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Użyj ograniczeń użytkowników');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Jeśli opcja zostanie włączona, będzie można zdefiniować dla jakich konkrtenych użytkowników wpis będzie widoczny. To ustawienie ma ogromny wpływ na wydajność więc używaj wyłącznie jeśli na prawdę potrzebujesz tej funkcjonalności.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Nie pokazuj treści w RSS');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Jeśli ta opcja zostanie włączona, treść wpisu nie będzie pokazywana w kanale RSS.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Pola użytkownika');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Dodatkowe pola mogą byc użyte w Twoim schemacie w miejscach, w których chcesz je pokazać. Aby uzyskać ten efekt wyedytuj plik entries.tpl swojego schematu i wstaw tagi Smarty {$entry.properties.ep_MyCustomField} w kodzie HTML gdzie uważasz to za stosowne. Zwróć uwagę na prefiks ep_ dla każdego pola.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Tu można wpisać nazwy (rozdzielone przecinkami) dodatkowych pól, które będą dostępne przy edycji każdego wpisu. Nie nalezy używać znaków specjalnych lub spacji dla nazw tych pól. Przykład: "Customfield1, Customfield2". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Lista dostępnych pól uzytkownika może być zmieniona w module <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">konfiguracji wtyczki</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Wyłącz wtyczki Znaczników dla tego wpisu:');
?>
