<?php # lang_cz.inc.php 2.1 2009-02-14 15:59:53 VladaAjgl $

/**
 *  @version 2.1
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @translated 2007/12/10 
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME',		'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC',		'[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Umo¾òuje stáhnout a instalovat roz¹iøující moduly (pluginy) z internetu');
@define('PLUGIN_EVENT_SPARTACUS_FETCH',		'Kliknìte zde pro stáhnutí nových %s z internetové online databáze - Serendipity Online Repository');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR',		'URL %s nelze otevøít. Server Serendipity nebo SourceForge.net mo¾ná nebì¾í - omlouváme se, zkuste to pozdìji.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING',		'Pokus o otevøení URL %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL',		'Pøijato %s bytù z vý¹e uvedené URL. Ukládání souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE',		'Pøijato %s bytù z ji¾ existujícího souboru na Va¹em serveru. Ukládání souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE',		'Data úspì¹nì sta¾ena.');
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR',		'<br />(On-line úlo¾i¹tì vrátilo chybu %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK',		'<P>Nebylo mo¾no získat data z on-line úlo¾i¹tì modulu Spartacus. Zkou¹ka dostupnosti úlo¾i¹tì na adrese %s.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR',		'<P>Diagnstická stránka modulu Spartacus vrátilo chybu (HTTP kód %s). To mù¾e znamenat, ¾e je dignostická stránka mimo provoz. Zkuste to prosím pozdìji.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK',		'<P><a target="_blank" href="%s">Kliknìte zde pro zobrazení diagnstické stránky modulu Spartacus</a> a zjistìte, zda odpovídá.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED',		'<P>SPARTACUS se pokusil pøipojit ke Googlu, ale neúspì¹nì (chyba è.%d: %s).<br/>Vá¹ server blokuje odchozí spojení. SPARTACUS nebude fungovat, proto¾e se nemù¾e pøipojit do svého online úlo¾i¹tì. <b>Kontaktujte prosím svého poskytovatele webhostingu a po¾ádejte ho o povolení odchozích pøipojení k jiným webovým stránkám.</b></P><P>Zásuvné moduly lze instalovat z lokálních adresáøù. Jednodu¹e stáhnìte nejnovìj¹í verzi pluginu z <a href="http://spartacus.s9y.org">SPARTACUS online úlo¾i¹tì</a>, rozbalte ho a napøíklad pomocí FTP nahrajte do adresáøe /plugins/ ve Va¹í instalaci Serendipity.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN',		'<P>Modulu SPARTACUS se podaøilo spojit s Googlem, ale nemù¾e se spojit s on-line úlo¾i¹tìm modulu SPARTACUS. Je mo¾né, ¾e Vá¹ server blokuje nìkterá odchozí spojení, nebo je on-line úlo¾i¹tì mimo provoz. Spojte se se svým poskytovatelem webového serveru, abyste se ujistili, ¾e nemáte blokována odchozí spojení. <b>SPARTACUS nebude fungovat, proto¾e nemù¾e kontaktovat on-line úlo¾i¹tì.</b></P>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML',		'Umístìní souborù/(mirror server) (XML metadata)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES',		'Umístìní souborù/(mirror server)  (soubory)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC',		'Vyberte, odkud stahovat. NEMÌÒTE tuto hodnotu, pokud opravdu dobøe nevíte, co dìláte a jestli server orpavdu funguje. Tato volba je pøístupná pro teprve plánované funkce.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN',		'Vlastník stahovaných souborù');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC',		'Zde mù¾ete zadat (FTP/Shell) vlastníka souborù (jako napø. "nobody") sta¾ených pomocí Spartacus pluginu. Pokud je nevyplnìné, nejsou provádìny ¾ádné zmìny vlastníka.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD',		'Pøístupová práva sta¾ených souborù.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC',		'Zde mù¾ete zadat hodnotu pøístupových práv v osmièkové soustavì (jako "0777") pro soubory (FTP/Shell) sta¾ené pomocí pluginy Spartacus. Pokud je pole ponecháno prázdné, bude pou¾ito standardní systémové nastavení. Pamatujte, ¾e ne v¹echny webové servery umo¾òují zmìnu práv. Napø. servery ì¾ící v safe_mode módu. Mìjte na pamìti, ¾e práva musí umo¾nit webovému u¾ivateli, pod kterým bì¾í PHP, práva ètení a zápisu souboru. Jinak nebude modul Spartacus schopen pøepsat staré soubory.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR',		'Pøístupová práva sta¾ených adresáøù');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC',		'Zde mù¾ete zadat hodnotu pøístupových práv v osmièkové soustavì (jako "0777") pro adresáøe (FTP/Shell) sta¾ené pomocí pluginy Spartacus. Pokud je pole ponecháno prázdné, bude pou¾ito standardní systémové nastavení. Pamatujte, ¾e ne v¹echny webové servery umo¾òují zmìnu práv. Napø. servery ì¾ící v safe_mode módu. Mìjte na pamìti, ¾e práva musí umo¾nit webovému u¾ivateli, pod kterým bì¾í PHP, práva ètení a zápisu souboru. Jinak nebude modul Spartacus schopen vytvoøit nové adresáøe.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR',		'Vyhledat nové pluginy pro postranní sloupec.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT',		'Vyhledat nové pluginy událostí.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT',		'Rada: Mù¾ete upgradovat více roz¹iøujících modulù najednou na odkaz "upgrade" prostøedním tlaèítkem my¹i. Upgrade se otevøe v novém oknì/nové zálo¾ce. Pamatujte, ¾e automatická aktualizace v¹ech roz¹iøujících modulù je èasovì nároèná operace a mù¾e vést k pøekroèení nastavených èasových limitù na serveru a z toho dùvodu k neúplnì sta¾eným souborùm. Proto tato funkènost není zámìrnì snadno pøístupná.');

@define('PLUGIN_EVENT_SPARTACUS_TRYCURL',		'Pokus o pou¾ití knihovny cURL jako zálo¾ního øe¹ení...');
@define('PLUGIN_EVENT_SPARTACUS_CURLFAIL',		'Knihovna cURL taky nefunguje :-/ ...');
@define('PLUGIN_EVENT_SPARTACUS_HEALTFIREWALLED',		'Nebylo mo¾né stáhnout soubory z on-line úlo¾i¹tì modulu SPARTACUS, nicménì se povedlo spojit se s úlo¾i¹tìm. To znamená, ¾e Vá¹ poskytovatel nejspí¹e pou¾ívá obsahový filtr a neumo¾òuje stáhovat pøes web *.php soubory. Buï musíte Va¹eho poskytovatele po¾ádat o vypnutí pøísu¹ných omezení (jako mod_security nebo jiné "reverse proxy"), nebo stahujte pluginy ruènì.');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_PLUGINS',		'Povolit stahování roz¹iøujících modulù pomocí modulu SPARTACUS?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_THEMES',		'Povolit stahování ¹ablon pomocí modulu SPARTACUS?');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE',		'Povolit vzdálené prohlí¾ení informací o verzích pluginù');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_DESC',		'Pokud je povoleno, náv¹tìvníci %s si mohou zobrazit informace o verzích v¹ech nainstalovaných plugin. Není ¹patný nápad ochránit tuto URL adresu pomocí souboru .htaccess proti ne¾ádoucím pøístupùm.');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL',		'Tajný kód ke vzdálenému pøístupu k informacím o verzích pluginù');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL_DESC',		'Zadejte speciální URI komponentu, kterou musí lidé znát a zadat, aby mohli zobrazit informace o verzích pluginù.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CONNECT',		'Chyba FTP: Nepodaøilo se pøipojit k FTP.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_MKDIR',		'Chyba FTP: Adresáø (%s) nelze vytvoøit');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CHMOD',		'Chyba FTP: Nelze nastavit práva u adresáøe (%s).');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SUCCESS',		'FTP: Adresáø (%s) byl úspì¹nì vytvoøen.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_USE',		'Pou¾ít vytváøení adresáøù pøes FTP?');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USE_DESC',		'Pokud Vám bì¾í PHP v "safe_mode", musíte se podøídit jistým omezením. Tato omezení mají zjednodue¹enì øeèeno za výsledek, ¾e pokud vytvoøíte adresáø obvyklou cestou, nelze do nìj zapisovat. Ale pokud vytváøíte adresáø pomocí FTP úètu, pak toto omezení neplatí. Pokud máte zapnutý safe_mode, je vytváøení adresáøù pøes FTP prakticky jedinou cestou, jak mít mo¾nost úspì¹nì pou¾ívat SPARTACUS a upload souborù.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SERVER',		'Adresa FTP serveru');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USERNAME',		'U¾ivatelské jméno k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_PASS',		'Heslo k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR',		'FTP cesta k adresáøi Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR_DESC',		'Pokud se k serveru pøipojujete pøes FTP, nemusíte se nutnì pøipojit do adresáøe Serendipity. Zde tedy musíte specifikovat cestu k adresáøi Srendipity od adresáøe, do kterého se FTP pøihla¹uje.');

@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR',		'Umístìní zrcadel (mirrors)');
@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR_DESC',		'Tuto volbu pou¾ívejte jen pokud opravdu víte, co dìláte, jste-li zku¹ený u¾ivatel. Pokud jsou pøednastavené mirror servery vypnuté nebo nepracují správnì, Serendipity se pokusí pøipojit k Vámi zadaným mirror serverùm (tøeba mù¾ete zadat http://mirror.org/serendipity/). Tyto servery musí umìt zpracovávat XML soubory na úrovni URL adresy a musí obsahovat podadresáøe "additional_plugins" a "additional_themes". Zadávejte pouze mirror servery, kterým vìøíte a které plnì zrcadlí v¹echny soubory CVS úlo¾i¹tì Serendipity. Lze zadat více zrcadel, oddìlených "|".');
