<?php

/**
 *  @file lang_cs.inc.php 1381.2 2013-03-03 12:44:53 VladaAjgl
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @revisionDate 2013/03/03
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Rozšíøené vlastnosti pøíspìvkù');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', 'cachování, neveøejné pøíspìvky, stálé (pøilepené) pøíspìvky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Oznaè tento pøíspìvek jako stálý (pøilepený)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Pøíspìvky mohou být pøeèteny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Mnou');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Spoluautory');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Kýmkoliv');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Povolit cachování pøíspìvkù?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Pokud je povoleno, pøi každém uložení pøíspìvku bude vytvoøena cachovaná verze. To znamená, že pøi každém naètení stránky nebude pøíspìvek sestavován od zaèátku znovu, ale vezme se pøedgenerovaná (cachovaná) verze. Cachování zvýší výkon blogu, ale mùže omezit funkci ostatních pluginù.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Cachovat pøíspìvky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Naèítání další dávky pøíspìvkù...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Naèítání pøíspìvkù %d až %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Vytváøení cachované verze pro pøíspìvek #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Pøíspìvek cachován.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Cachování pøíspìvkù hotovo.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Cachování pøíspìvku ZRUŠENO.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (z celkového poètu %d pøíspìvkù)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Skrýt v pøehledu èlánkù / na hlavní stránce');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Použít omezení pro skupiny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Pokud je povoleno, mùžete zadat, které skupiny uživatelù smí èíst èlánek. Tato volba má velký vliv na rychlost vytváøení stránky s pøehledem èlánkù. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu využijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Použít omezení pro uživatele');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Pokud je povoleno, mùžete zadat, kteøí uživatelé smí èíst èlánek. Tato volba má velký vliv na rychlost vytváøení stránky s pøehledem èlánkù. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu využijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Skrýt obsah v RSS kanálu');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Pokud je povoleno, obsah pøíspìvku se nebude zobrazovat v RSS kanálu/kanálech.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Vlastní pole');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Pøídavná vlastní pole mohou být použita ve Vaší vlastní šablonì v místech, kde chcete zobrazovat data z tìchto polí. Pro tuto funkci musíte editovat šablonu "entries.tpl" a v ní umístit Smarty tag {$entry.properties.ep_NazevMehoPolicka}. Pred kazdym nazvem pole musi byt predpona ep_ . ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Zde mùžete zadat seznam polí, které chcete použít u svých pøíspìvkù, oddìlených èárkou. Pro jména polí nepoužívejte speciální znaky ani diakritiku. Pøíklad: "MojePole1, CiziPole2, UplneCiziPole3". ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Seznam dostupných volitelných polí mùže být zmìnìn v <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">konfiguraci pluginu</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Zakaž použití vybraných znaèkovacích pluginù pro tento pøíspìvek:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS', 'Rozšíøené databázové hledání');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS_DESC', 'Pokud je použito, budou vytvoøeny pøídavné SQL dotazy, které umožní použít i pøilepené, skryté a z hlavní stránky odstranìné pøíspìvky. Pokud tyto nejsou použávané, doporuèuje se volbu zakázat, což mùže zvýšit výkon.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE', 'Editaèní obrazovka');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE_DESC', 'Zde vyberte, které prvky a v jakém poøadí má tento modul zobrazovat v procesu úprav pøíspìvku.');

// Next lines were translated on 2013/03/03
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC4', 'Pro každé políèko mùžete zadat výchozí hodnoty následujícím zpùsobem "VlastníPole1:Výchozí hodnota 1, VlastníPole2:Výchozí hodnota 2". Pokud potøebujete ve výchozích hodnotách použít znaky ":" (støedník) a "," (èárka), dejte pøed nì zpìtné lomítko "\\", napøíklad: "VlastníPole1:Chci\\: koláèky\\,muffiny a klobásky,VlastníPole2:Jo\\, už jsem spokojený." Pro lepší èitelnost mùžete zapisovat definici každého pole na novou øádku.');



