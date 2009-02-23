<?php # lang_cz.inc.php 1381.1 2009-02-14 15:43:34 VladaAjgl $

/**
 *  @version 1381.1
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE',		'Roz¹íøené vlastnosti pøíspìvkù');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC',		'cachování, neveøejné pøíspìvky, stálé (pøilepené) pøíspìvky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS',		'Oznaè tento pøíspìvek jako stálý (pøilepený)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS',		'Pøíspìvky mohou být pøeèteny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE',		'Mnou');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS',		'Spoluautory');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC',		'Kýmkoliv');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE',		'Povolit cachování pøíspìvkù?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC',		'Pokud je povoleno, pøi ka¾dém ulo¾ení pøíspìvku bude vytvoøena cachovaná verze. To znamená, ¾e pøi ka¾dém naètení stránky nebude pøíspìvek sestavován od zaèátku znovu, ale vezme se pøedgenerovaná (cachovaná) verze. Cachování zvý¹í výkon blogu, ale mù¾e omezit funkci ostatních pluginù.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE',		'Cachovat pøíspìvky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT',		'Naèítání dal¹í dávky pøíspìvkù...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO',		'Naèítání pøíspìvkù %d a¾ %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING',		'Vytváøení cachované verze pro pøíspìvek #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED',		'Pøíspìvek cachován.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE',		'Cachování pøíspìvkù hotovo.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED',		'Cachování pøíspìvku ZRU©ENO.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL',		' (z celkového poètu %d pøíspìvkù)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE',		'Skrýt v pøehledu èlánkù / na hlavní stránce');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS',		'Pou¾ít omezení pro skupiny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC',		'Pokud je povoleno, mù¾ete zadat, které skupiny u¾ivatelù smí èíst èlánek. Tato volba má velký vliv na rychlost vytváøení stránky s pøehledem èlánkù. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu vyu¾ijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS',		'Pou¾ít omezení pro u¾ivatele');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC',		'Pokud je povoleno, mù¾ete zadat, kteøí u¾ivatelé smí èíst èlánek. Tato volba má velký vliv na rychlost vytváøení stránky s pøehledem èlánkù. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu vyu¾ijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS',		'Skrýt obsah v RSS kanálu');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC',		'Pokud je povoleno, obsah pøíspìvku se nebude zobrazovat v RSS kanálu/kanálech.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS',		'Vlastní pole');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1',		'Pøídavná vlastní pole mohou být pou¾ita ve Va¹í vlastní ¹ablonì v místech, kde chcete zobrazovat data z tìchto polí. Pro tuto funkci musíte editovat ¹ablonu "entries.tpl" a v ní umístit Smarty tag {$entry.properties.ep_NazevMehoPolicka}. Pred kazdym nazvem pole musi byt predpona ep_ . ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2',		'Zde mù¾ete zadat seznam polí, které chcete pou¾ít u svých pøíspìvkù, oddìlených èárkou. Pro jména polí nepou¾ívejte speciální znaky ani diakritiku. Pøíklad: "MojePole1, CiziPole2, UplneCiziPole3". ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3',		'Seznam dostupných volitelných polí mù¾e být zmìnìn v <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">konfiguraci pluginu</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP',		'Zaka¾ pou¾ití vybraných znaèkovacích pluginù pro tento pøíspìvek:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS',		'Roz¹íøené databázové hledání');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS_DESC',		'Pokud je pou¾ito, budou vytvoøeny pøídavné SQL dotazy, které umo¾ní pou¾ít i pøilepené, skryté a z hlavní stránky odstranìné pøíspìvky. Pokud tyto nejsou pou¾ávané, doporuèuje se volbu zakázat, co¾ mù¾e zvý¹it výkon.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE',		'Editaèní obrazovka');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE_DESC',		'Zde vyberte, které prvky a v jakém poøadí má tento modul zobrazovat v procesu úprav pøíspìvku.');
