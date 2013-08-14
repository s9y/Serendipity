<?php #

/**
 *  @author Martin Matuška <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @revisionDate 2010-08-17
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Rozšírené vlastnosti článkov');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', 'cachovanie, neverejné články, stále (prilepené) články');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Označiť tento článok ako stály (prilepený)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Články môžu byť prečítané');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Mnou');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Spoluautormi');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Kýmkoľvek');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Zapnúť cachovanie článkov?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Ak je zapnuté, pri každom uložení článku bude vytvorená cachovaná verzia. To znamená, že pri každom načítaní stránky nebude príspevok generovaný odznova, ale použije sa predgenerovaná (cachovaná) verzia. Cachovanie zvýši výkon weblogu, ale môže obmedziť funkčnosť ostatných doplnkov.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Cachovať príspevky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Načítanie ďalšej dávky príspevkov...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Načítanie príspevkov %d až %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Vytváranie cachovanej verzie pre príspevok #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Príspevok cachovaný.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Cachovanie príspevkov dokončené.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Cachovanie príspevkov ZRUŠENÉ.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (z celkového počtu %d príspevkov)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Skryť v prehľade článkov / na hlavnej stránke');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Použíť obmedzenie pre skupiny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Ak je zapnuté, tak môžete zadať, ktoré skupiny používateľov môžu čítať článok. Toto nastavenie má veľký vplyv an rýchlosť vytvárania stránky s prehľadom článkov. Zapnite toto nastavenie, iba ak ho naozaj potrebujete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Použíť obmedzenie pre používateľov');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Ak je zapnuté, tak môžete zadať, ktorí používatelia môžu čítať článok. Toto nastavenie má veľký vplyv an rýchlosť v
ytvárania stránky s prehľadom článkov. Zapnite toto nastavenie, iba ak ho naozaj potrebujete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Skryť obsah v RSS kanáli');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Ak je zapnuté ,tak sa nebude zobrazovať obsah článku v RSS kanáli/kanáloch.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Vlastné pole');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Pridané vlastné polia môžu byť použité vo Vašej vlastnej šablóne na miestach, kde chcete zobrazovať údaje z týchto polí. Pre túto funkcio musíte upraviť šablónu "entries.tpl" a v nej umiestniť Smarty tag {$entry.properties.ep_NazevMehoPolicka}. Pred názov každého poľa musí byť pridaná predpona ep_ . ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Tu môžete zadať zoznam polí, ktoré chcete použiť vo svojich článkoch. Polia oddeľovať čiarkou. Mená polí nemôžu obsahovať špeciálne znaky ani diakritiku. Príklad: "MojePole1, CiziPole2, UplneCiziPole3". ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Zoznam dostupných voliteľných polí môže byť zmenený v <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">nastaveniach doplnku</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Zakázať použitie transofrmácií textu (markup) pre tento článok:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS', 'Rozšírené databázové hľadanie');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS_DESC', 'Ak je zapnuté, budú vytvorené prídavné SQL dotazy, ktoré umožnia použiť aj prilepené, skryté a z hlavnej stránky odstránané články. Ak toto nastavenie nepotrebujete, odporúčame z dôvodov výkonu ponechať vypnuté.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE', 'Editačná obrazovka');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE_DESC', 'Tu vyberte, ktoré prvky a v akom poradí má tento doplnok zobrazovať v procese úprav článku.');

