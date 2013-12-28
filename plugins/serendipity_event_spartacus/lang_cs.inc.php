<?php

/**
 *  @file lang_cs.inc.php 2.1 2009-02-14 15:59:53 VladaAjgl
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @translated 2007/12/10 
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Umožòuje stáhnout a instalovat rozšiøující moduly (pluginy) z internetu');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Kliknìte zde pro stáhnutí nových %s z internetové online databáze - Serendipity Online Repository');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'URL %s nelze otevøít. Server Serendipity nebo SourceForge.net možná nebìží - omlouváme se, zkuste to pozdìji.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Pokus o otevøení URL %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', 'Pøijato %s bytù z výše uvedené URL. Ukládání souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', 'Pøijato %s bytù z již existujícího souboru na Vašem serveru. Ukládání souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Data úspìšnì stažena.');
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(On-line úložištì vrátilo chybu %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<P>Nebylo možno získat data z on-line úložištì modulu Spartacus. Zkouška dostupnosti úložištì na adrese %s.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<P>Diagnstická stránka modulu Spartacus vrátilo chybu (HTTP kód %s). To mùže znamenat, že je dignostická stránka mimo provoz. Zkuste to prosím pozdìji.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<P><a target="_blank" href="%s">Kliknìte zde pro zobrazení diagnstické stránky modulu Spartacus</a> a zjistìte, zda odpovídá.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<P>SPARTACUS se pokusil pøipojit ke Googlu, ale neúspìšnì (chyba è.%d: %s).<br/>Váš server blokuje odchozí spojení. SPARTACUS nebude fungovat, protože se nemùže pøipojit do svého online úložištì. <b>Kontaktujte prosím svého poskytovatele webhostingu a požádejte ho o povolení odchozích pøipojení k jiným webovým stránkám.</b></P><P>Zásuvné moduly lze instalovat z lokálních adresáøù. Jednoduše stáhnìte nejnovìjší verzi pluginu z <a href="http://spartacus.s9y.org">SPARTACUS online úložištì</a>, rozbalte ho a napøíklad pomocí FTP nahrajte do adresáøe /plugins/ ve Vaší instalaci Serendipity.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<P>Modulu SPARTACUS se podaøilo spojit s Googlem, ale nemùže se spojit s on-line úložištìm modulu SPARTACUS. Je možné, že Váš server blokuje nìkterá odchozí spojení, nebo je on-line úložištì mimo provoz. Spojte se se svým poskytovatelem webového serveru, abyste se ujistili, že nemáte blokována odchozí spojení. <b>SPARTACUS nebude fungovat, protože nemùže kontaktovat on-line úložištì.</b></P>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Umístìní souborù/(mirror server) (XML metadata)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Umístìní souborù/(mirror server)  (soubory)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Vyberte, odkud stahovat. NEMÌÒTE tuto hodnotu, pokud opravdu dobøe nevíte, co dìláte a jestli server orpavdu funguje. Tato volba je pøístupná pro teprve plánované funkce.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Vlastník stahovaných souborù');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Zde mùžete zadat (FTP/Shell) vlastníka souborù (jako napø. "nobody") stažených pomocí Spartacus pluginu. Pokud je nevyplnìné, nejsou provádìny žádné zmìny vlastníka.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Pøístupová práva stažených souborù.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Zde mùžete zadat hodnotu pøístupových práv v osmièkové soustavì (jako "0777") pro soubory (FTP/Shell) stažené pomocí pluginy Spartacus. Pokud je pole ponecháno prázdné, bude použito standardní systémové nastavení. Pamatujte, že ne všechny webové servery umožòují zmìnu práv. Napø. servery ìžící v safe_mode módu. Mìjte na pamìti, že práva musí umožnit webovému uživateli, pod kterým bìží PHP, práva ètení a zápisu souboru. Jinak nebude modul Spartacus schopen pøepsat staré soubory.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Pøístupová práva stažených adresáøù');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Zde mùžete zadat hodnotu pøístupových práv v osmièkové soustavì (jako "0777") pro adresáøe (FTP/Shell) stažené pomocí pluginy Spartacus. Pokud je pole ponecháno prázdné, bude použito standardní systémové nastavení. Pamatujte, že ne všechny webové servery umožòují zmìnu práv. Napø. servery ìžící v safe_mode módu. Mìjte na pamìti, že práva musí umožnit webovému uživateli, pod kterým bìží PHP, práva ètení a zápisu souboru. Jinak nebude modul Spartacus schopen vytvoøit nové adresáøe.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Vyhledat nové pluginy pro postranní sloupec.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Vyhledat nové pluginy událostí.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Rada: Mùžete upgradovat více rozšiøujících modulù najednou na odkaz "upgrade" prostøedním tlaèítkem myši. Upgrade se otevøe v novém oknì/nové záložce. Pamatujte, že automatická aktualizace všech rozšiøujících modulù je èasovì nároèná operace a mùže vést k pøekroèení nastavených èasových limitù na serveru a z toho dùvodu k neúplnì staženým souborùm. Proto tato funkènost není zámìrnì snadno pøístupná.');

@define('PLUGIN_EVENT_SPARTACUS_TRYCURL', 'Pokus o použití knihovny cURL jako záložního øešení...');
@define('PLUGIN_EVENT_SPARTACUS_CURLFAIL', 'Knihovna cURL taky nefunguje :-/ ...');
@define('PLUGIN_EVENT_SPARTACUS_HEALTFIREWALLED', 'Nebylo možné stáhnout soubory z on-line úložištì modulu SPARTACUS, nicménì se povedlo spojit se s úložištìm. To znamená, že Váš poskytovatel nejspíše používá obsahový filtr a neumožòuje stáhovat pøes web *.php soubory. Buï musíte Vašeho poskytovatele požádat o vypnutí pøísušných omezení (jako mod_security nebo jiné "reverse proxy"), nebo stahujte pluginy ruènì.');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_PLUGINS', 'Povolit stahování rozšiøujících modulù pomocí modulu SPARTACUS?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_THEMES', 'Povolit stahování šablon pomocí modulu SPARTACUS?');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE', 'Povolit vzdálené prohlížení informací o verzích pluginù');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_DESC', 'Pokud je povoleno, návštìvníci %s si mohou zobrazit informace o verzích všech nainstalovaných plugin. Není špatný nápad ochránit tuto URL adresu pomocí souboru .htaccess proti nežádoucím pøístupùm.');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL', 'Tajný kód ke vzdálenému pøístupu k informacím o verzích pluginù');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL_DESC', 'Zadejte speciální URI komponentu, kterou musí lidé znát a zadat, aby mohli zobrazit informace o verzích pluginù.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CONNECT', 'Chyba FTP: Nepodaøilo se pøipojit k FTP.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_MKDIR', 'Chyba FTP: Adresáø (%s) nelze vytvoøit');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CHMOD', 'Chyba FTP: Nelze nastavit práva u adresáøe (%s).');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SUCCESS', 'FTP: Adresáø (%s) byl úspìšnì vytvoøen.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_USE', 'Použít vytváøení adresáøù pøes FTP?');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USE_DESC', 'Pokud Vám bìží PHP v "safe_mode", musíte se podøídit jistým omezením. Tato omezení mají zjednoduešenì øeèeno za výsledek, že pokud vytvoøíte adresáø obvyklou cestou, nelze do nìj zapisovat. Ale pokud vytváøíte adresáø pomocí FTP úètu, pak toto omezení neplatí. Pokud máte zapnutý safe_mode, je vytváøení adresáøù pøes FTP prakticky jedinou cestou, jak mít možnost úspìšnì používat SPARTACUS a upload souborù.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SERVER', 'Adresa FTP serveru');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USERNAME', 'Uživatelské jméno k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_PASS', 'Heslo k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR', 'FTP cesta k adresáøi Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR_DESC', 'Pokud se k serveru pøipojujete pøes FTP, nemusíte se nutnì pøipojit do adresáøe Serendipity. Zde tedy musíte specifikovat cestu k adresáøi Srendipity od adresáøe, do kterého se FTP pøihlašuje.');

@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR', 'Umístìní zrcadel (mirrors)');
@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR_DESC', 'Tuto volbu používejte jen pokud opravdu víte, co dìláte, jste-li zkušený uživatel. Pokud jsou pøednastavené mirror servery vypnuté nebo nepracují správnì, Serendipity se pokusí pøipojit k Vámi zadaným mirror serverùm (tøeba mùžete zadat http://mirror.org/serendipity/). Tyto servery musí umìt zpracovávat XML soubory na úrovni URL adresy a musí obsahovat podadresáøe "additional_plugins" a "additional_themes". Zadávejte pouze mirror servery, kterým vìøíte a které plnì zrcadlí všechny soubory CVS úložištì Serendipity. Lze zadat více zrcadel, oddìlených "|".');

