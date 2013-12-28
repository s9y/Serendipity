<?php

/**
 *  @file lang_cs.inc.php 2.2 2009-02-23 17:31:42 VladaAjgl
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @translated 2007/12/10 
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/14
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/23
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Umožňuje stáhnout a instalovat rozšiřující moduly (pluginy) z internetu');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Klikněte zde pro stáhnutí nových %s z internetové online databáze - Serendipity Online Repository');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'URL %s nelze otevřít. Server Serendipity nebo SourceForge.net možná neběží - omlouváme se, zkuste to později.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Pokus o otevření URL %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', 'Přijato %s bytů z výše uvedené URL. Ukládání souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', 'Přijato %s bytů z již existujícího souboru na Vašem serveru. Ukládání souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Data úspěšně stažena.');
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(On-line úložiště vrátilo chybu %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<P>Nebylo možno získat data z on-line úložiště modulu Spartacus. Zkouška dostupnosti úložiště na adrese %s.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<P>Diagnstická stránka modulu Spartacus vrátilo chybu (HTTP kód %s). To může znamenat, že je dignostická stránka mimo provoz. Zkuste to prosím později.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<P><a target="_blank" href="%s">Klikněte zde pro zobrazení diagnstické stránky modulu Spartacus</a> a zjistěte, zda odpovídá.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<P>SPARTACUS se pokusil připojit ke Googlu, ale neúspěšně (chyba č.%d: %s).<br/>Váš server blokuje odchozí spojení. SPARTACUS nebude fungovat, protože se nemůže připojit do svého online úložiště. <b>Kontaktujte prosím svého poskytovatele webhostingu a požádejte ho o povolení odchozích připojení k jiným webovým stránkám.</b></P><P>Zásuvné moduly lze instalovat z lokálních adresářů. Jednoduše stáhněte nejnovější verzi pluginu z <a href="http://spartacus.s9y.org">SPARTACUS online úložiště</a>, rozbalte ho a například pomocí FTP nahrajte do adresáře /plugins/ ve Vaší instalaci Serendipity.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<P>Modulu SPARTACUS se podařilo spojit s Googlem, ale nemůže se spojit s on-line úložištěm modulu SPARTACUS. Je možné, že Váš server blokuje některá odchozí spojení, nebo je on-line úložiště mimo provoz. Spojte se se svým poskytovatelem webového serveru, abyste se ujistili, že nemáte blokována odchozí spojení. <b>SPARTACUS nebude fungovat, protože nemůže kontaktovat on-line úložiště.</b></P>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Umístění souborů/(mirror server) (XML metadata)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Umístění souborů/(mirror server)  (soubory)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Vyberte, odkud stahovat. NEMĚŇTE tuto hodnotu, pokud opravdu dobře nevíte, co děláte a jestli server orpavdu funguje. Tato volba je přístupná pro teprve plánované funkce.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Vlastník stahovaných souborů');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Zde můžete zadat (FTP/Shell) vlastníka souborů (jako např. "nobody") stažených pomocí Spartacus pluginu. Pokud je nevyplněné, nejsou prováděny žádné změny vlastníka.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Přístupová práva stažených souborů.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Zde můžete zadat hodnotu přístupových práv v osmičkové soustavě (jako "0777") pro soubory (FTP/Shell) stažené pomocí pluginy Spartacus. Pokud je pole ponecháno prázdné, bude použito standardní systémové nastavení. Pamatujte, že ne všechny webové servery umožňují změnu práv. Např. servery ěžící v safe_mode módu. Mějte na paměti, že práva musí umožnit webovému uživateli, pod kterým běží PHP, práva čtení a zápisu souboru. Jinak nebude modul Spartacus schopen přepsat staré soubory.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Přístupová práva stažených adresářů');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Zde můžete zadat hodnotu přístupových práv v osmičkové soustavě (jako "0777") pro adresáře (FTP/Shell) stažené pomocí pluginy Spartacus. Pokud je pole ponecháno prázdné, bude použito standardní systémové nastavení. Pamatujte, že ne všechny webové servery umožňují změnu práv. Např. servery ěžící v safe_mode módu. Mějte na paměti, že práva musí umožnit webovému uživateli, pod kterým běží PHP, práva čtení a zápisu souboru. Jinak nebude modul Spartacus schopen vytvořit nové adresáře.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Vyhledat nové pluginy pro postranní sloupec.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Vyhledat nové pluginy událostí.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Rada: Můžete upgradovat více rozšiřujících modulů najednou na odkaz "upgrade" prostředním tlačítkem myši. Upgrade se otevře v novém okně/nové záložce. Pamatujte, že automatická aktualizace všech rozšiřujících modulů je časově náročná operace a může vést k překročení nastavených časových limitů na serveru a z toho důvodu k neúplně staženým souborům. Proto tato funkčnost není záměrně snadno přístupná.');

@define('PLUGIN_EVENT_SPARTACUS_TRYCURL', 'Pokus o použití knihovny cURL jako záložního řešení...');
@define('PLUGIN_EVENT_SPARTACUS_CURLFAIL', 'Knihovna cURL taky nefunguje :-/ ...');
@define('PLUGIN_EVENT_SPARTACUS_HEALTFIREWALLED', 'Nebylo možné stáhnout soubory z on-line úložiště modulu SPARTACUS, nicméně se povedlo spojit se s úložištěm. To znamená, že Váš poskytovatel nejspíše používá obsahový filtr a neumožňuje stáhovat přes web *.php soubory. Buď musíte Vašeho poskytovatele požádat o vypnutí přísušných omezení (jako mod_security nebo jiné "reverse proxy"), nebo stahujte pluginy ručně.');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_PLUGINS', 'Povolit stahování rozšiřujících modulů pomocí modulu SPARTACUS?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_THEMES', 'Povolit stahování šablon pomocí modulu SPARTACUS?');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE', 'Povolit vzdálené prohlížení informací o verzích pluginů');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_DESC', 'Pokud je povoleno, návštěvníci %s si mohou zobrazit informace o verzích všech nainstalovaných plugin. Není špatný nápad ochránit tuto URL adresu pomocí souboru .htaccess proti nežádoucím přístupům.');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL', 'Tajný kód ke vzdálenému přístupu k informacím o verzích pluginů');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL_DESC', 'Zadejte speciální URI komponentu, kterou musí lidé znát a zadat, aby mohli zobrazit informace o verzích pluginů.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CONNECT', 'Chyba FTP: Nepodařilo se připojit k FTP.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_MKDIR', 'Chyba FTP: Adresář (%s) nelze vytvořit');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CHMOD', 'Chyba FTP: Nelze nastavit práva u adresáře (%s).');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SUCCESS', 'FTP: Adresář (%s) byl úspěšně vytvořen.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_USE', 'Použít vytváření adresářů přes FTP?');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USE_DESC', 'Pokud Vám běží PHP v "safe_mode", musíte se podřídit jistým omezením. Tato omezení mají zjednoduešeně řečeno za výsledek, že pokud vytvoříte adresář obvyklou cestou, nelze do něj zapisovat. Ale pokud vytváříte adresář pomocí FTP účtu, pak toto omezení neplatí. Pokud máte zapnutý safe_mode, je vytváření adresářů přes FTP prakticky jedinou cestou, jak mít možnost úspěšně používat SPARTACUS a upload souborů.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SERVER', 'Adresa FTP serveru');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USERNAME', 'Uživatelské jméno k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_PASS', 'Heslo k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR', 'FTP cesta k adresáři Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR_DESC', 'Pokud se k serveru připojujete přes FTP, nemusíte se nutně připojit do adresáře Serendipity. Zde tedy musíte specifikovat cestu k adresáři Srendipity od adresáře, do kterého se FTP přihlašuje.');

@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR', 'Umístění zrcadel (mirrors)');
@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR_DESC', 'Tuto volbu používejte jen pokud opravdu víte, co děláte, jste-li zkušený uživatel. Pokud jsou přednastavené mirror servery vypnuté nebo nepracují správně, Serendipity se pokusí připojit k Vámi zadaným mirror serverům (třeba můžete zadat http://mirror.org/serendipity/). Tyto servery musí umět zpracovávat XML soubory na úrovni URL adresy a musí obsahovat podadresáře "additional_plugins" a "additional_themes". Zadávejte pouze mirror servery, kterým věříte a které plně zrcadlí všechny soubory CVS úložiště Serendipity. Lze zadat více zrcadel, oddělených "|".');

