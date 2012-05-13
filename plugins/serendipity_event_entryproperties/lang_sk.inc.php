<?php

/**
 *  @author Martin Matu¹ka <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @revisionDate 2010-08-17
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE',		'Roz¹írené vlastnosti èlánkov');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC',		'cachovanie, neverejné èlánky, stále (prilepené) èlánky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS',		'Oznaèi» tento èlánok ako stály (prilepený)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS',		'Èlánky mô¾u by» preèítané');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE',		'Mnou');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS',		'Spoluautormi');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC',		'Kýmkoµvek');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE',		'Zapnú» cachovanie èlánkov?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC',		'Ak je zapnuté, pri ka¾dom ulo¾ení èlánku bude vytvorená cachovaná verzia. To znamená, ¾e pri ka¾dom naèítaní stránky nebude príspevok generovaný odznova, ale pou¾ije sa predgenerovaná (cachovaná) verzia. Cachovanie zvý¹i výkon weblogu, ale mô¾e obmedzi» funkènos» ostatných doplnkov.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE',		'Cachova» príspevky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT',		'Naèítanie ïal¹ej dávky príspevkov...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO',		'Naèítanie príspevkov %d a¾ %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING',		'Vytváranie cachovanej verzie pre príspevok #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED',		'Príspevok cachovaný.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE',		'Cachovanie príspevkov dokonèené.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED',		'Cachovanie príspevkov ZRU©ENÉ.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL',		' (z celkového poètu %d príspevkov)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE',		'Skry» v prehµade èlánkov / na hlavnej stránke');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS',		'Pou¾í» obmedzenie pre skupiny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC',		'Ak je zapnuté, tak mô¾ete zada», ktoré skupiny pou¾ívateµov mô¾u èíta» èlánok. Toto nastavenie má veµký vplyv an rýchlos» vytvárania stránky s prehµadom èlánkov. Zapnite toto nastavenie, iba ak ho naozaj potrebujete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS',		'Pou¾í» obmedzenie pre pou¾ívateµov');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC',		'Ak je zapnuté, tak mô¾ete zada», ktorí pou¾ívatelia mô¾u èíta» èlánok. Toto nastavenie má veµký vplyv an rýchlos» v
ytvárania stránky s prehµadom èlánkov. Zapnite toto nastavenie, iba ak ho naozaj potrebujete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS',		'Skry» obsah v RSS kanáli');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC',		'Ak je zapnuté ,tak sa nebude zobrazova» obsah èlánku v RSS kanáli/kanáloch.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS',		'Vlastné pole');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1',		'Pridané vlastné polia mô¾u by» pou¾ité vo Va¹ej vlastnej ¹ablóne na miestach, kde chcete zobrazova» údaje z týchto polí. Pre túto funkcio musíte upravi» ¹ablónu "entries.tpl" a v nej umiestni» Smarty tag {$entry.properties.ep_NazevMehoPolicka}. Pred názov ka¾dého poµa musí by» pridaná predpona ep_ . ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2',		'Tu mô¾ete zada» zoznam polí, ktoré chcete pou¾i» vo svojich èlánkoch. Polia oddeµova» èiarkou. Mená polí nemô¾u obsahova» ¹peciálne znaky ani diakritiku. Príklad: "MojePole1, CiziPole2, UplneCiziPole3". ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3',		'Zoznam dostupných voliteµných polí mô¾e by» zmenený v <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">nastaveniach doplnku</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP',		'Zakáza» pou¾itie transofrmácií textu (markup) pre tento èlánok:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS',		'Roz¹írené databázové hµadanie');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS_DESC',		'Ak je zapnuté, budú vytvorené prídavné SQL dotazy, ktoré umo¾nia pou¾i» aj prilepené, skryté a z hlavnej stránky odstránané èlánky. Ak toto nastavenie nepotrebujete, odporúèame z dôvodov výkonu ponecha» vypnuté.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE',		'Editaèná obrazovka');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE_DESC',		'Tu vyberte, ktoré prvky a v akom poradí má tento doplnok zobrazova» v procese úprav èlánku.');
