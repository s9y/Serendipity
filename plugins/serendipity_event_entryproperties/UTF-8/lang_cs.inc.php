<?php # $Id: lang_cs.inc.php 1381 2007-12-13 12:44:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Rozšířené vlastnosti příspěvků');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', 'cachování, neveřejné příspěvky, stálé (přilepené) příspěvky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Označ tento příspěvek jako stálý (přilepený)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Příspěvky mohou být přečteny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Mnou');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Spoluautory');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Kýmkoliv');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Povolit cachování příspěvků?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Pokud je povoleno, při každém uložení příspěvku bude vytvořena cachovaná verze. To znamená, že při každém načtení stránky nebude příspěvek sestavován od začátku znovu, ale vezme se předgenerovaná (cachovaná) verze. Cachování zvýší výkon blogu, ale může omezit funkci ostatních pluginů.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Cachovat příspěvky');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Načítání další dávky příspěvků...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Načítání příspěvků %d až %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Vytváření cachované verze pro příspěvek #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Příspěvek cachován.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Cachování příspěvků hotovo.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Cachování příspěvku ZRUŠENO.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (z celkového počtu %d příspěvků)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Skrýt v přehledu článků / na hlavní stránce');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Použít omezení pro skupiny');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Pokud je povoleno, můžete zadat, které skupiny uživatelů smí číst článek. Tato volba má velký vliv na rychlost vytváření stránky s přehledem článků. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu využijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Použít omezení pro uživatele');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Pokud je povoleno, můžete zadat, kteří uživatelé smí číst článek. Tato volba má velký vliv na rychlost vytváření stránky s přehledem článků. Povolte tuto vlastnost pouze tehdy, pokud ji opravdu využijete.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Skrýt obsah v RSS kanálu');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Pokud je povoleno, obsah příspěvku se nebude zobrazovat v RSS kanálu/kanálech.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Vlastní pole');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Přídavná vlastní pole mohou být použita ve Vaší vlastní šabloně v místech, kde chcete zobrazovat data z těchto polí. Pro tuto funkci musíte editovat šablonu "entries.tpl" a v ní umístit Smarty tag {$entry.properties.ep_NazevMehoPolicka}. Pred kazdym nazvem pole musi byt predpona ep_ . ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Zde můžete zadat seznam polí, které chcete použít u svých příspěvků, oddělených čárkou. Pro jména polí nepoužívejte speciální znaky ani diakritiku. Příklad: "MojePole1, CiziPole2, UplneCiziPole3". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Seznam dostupných volitelných polí může být změněn v <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">konfiguraci pluginu</a>.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Zakaž použití vybraných značkovacích pluginů pro tento příspěvek:');
?>
