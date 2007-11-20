<?php # $Id: lang_cs.inc.php 1658 2007-11-20 00:00:00Z VladaAjgl $

/**
 *  @version $Revision: 1658 $
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Spam Protector');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Množství metod na ochranu proti spamu.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Ochrana proti spamu: Neplatná zpráva.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Ochrana proti spamu: Nemůžeš poslat komentář tak brzy po odeslání jiného komentáře.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Tento blog se nachází v módu "Nouzové blokování všech komentárů", zkuste to jindy.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Nepovolovat opakující se komentáře');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Nepovolovat uživatelům odeslat komentář, který má stejný obsah jako jiný již odeslaný komentář.');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Nouzové vypnutí komentářů');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Dočasně vypne komentáře pro všechny příspěvky. Užitečná funkce, pokud je váš blog pod útokem spamerů.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Blokování IP adres');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Povol poslat z jedné IP adresy jeden komentář za n minut. Užitečné pro zabránění záplav komentářů.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Povolit kryptogramy');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Přispěvatel bude nucen zadat čísla z náhodně vygenerovaného deformovaného obrázku. Toto znemožní automatické přidávání komentářů, např. hackerským strojem. Mějte prosím na paměti, že lidé s poškozeným zrakem mohou mít potíže se čtením těchto kryptogramů.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'V rámci boje proti komentářovém spamu zadejte prosím znaky, které vidíte níže. Váš komentář bude poslán pouze pokud tyto znaky budou souhlasit. Ujistěte se, že Váš prohlížeč podporuje a přijímá cookies. Jinak vaše komentáře nemohou být správně ověřené.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Do políčka níže zadejte znaky, které vidíte nad tímto textem.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Zadejte znaky z protispamového obrázku: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Nezadal jsi správně znaky z protispamového obrázku. Podívej se na něj znovu a zadej znaky spávně.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Kryptogramy vypnuty. Potřebujete GDLib a freetype knihovny zkompilované v PHP, podobně je potřeba mít soubory.TTF (fonty) v adresářích pluginu "spamblock" .');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Vynutit kryptogramy po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Kryptogramy (spamové obrázky) mohou být vynucovány v závislosti na stáří článku. Zadejte počet dní, po kterých bude nutné zadat správný text z kryptogramu pro vložení komentáře. Počet nastavený na 0 znamená, že kryptogramy budou vyžadovány ihned po vydání.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Vynutit moderování (schvalování) komentářů po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Můžeš automaticky nastavit všechny komentáře jako moderované. Po uplynutí zde zadané doby od vydání článku bude třeba potvrzovat (auto-moderovat) komentáře. 0 znamené žádné potvrzování.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Kolik odezev povolit předtím, než bude třeba moderovat (schválit) komentář.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Když komentář zaznamená tento počet odezev, bude třeba jej moderovat. 0 znamená žádné kontroly množství odezev.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Kolik odezev povolit předtím, než bude komentář zakázán');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Když komentář zaznamená tento počet odezev, bude zakázán. 0 znamená žádné kontroly množství odezev.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Váš komentář vyžaduje souhlas provozovatele blogu. Neposílejte jej znovu, vyčkejte na jeho potvrzení.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Pozadí kryptogramů');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Zadej RGB hodnotu: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Umístění logu');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informace o zamítnutých/moderovaných příspěvcích mohou být zapisovány do logu. Nastavte na prázdný řeřtězet pro vypnutí logování.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Nouzové blokování komentářů');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Duplicitní komentář');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-blok');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Nesprávný kryptogram (Zadáno: %s, Správně má být: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Automatické moderování (schvalování) po X dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Příliš mnoho odkazů (odezev)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Příliš mnoho odkazů (odezev)');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Schovat e-mailovou adresu pisatelů komentářů');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Schová e-mailové adresy přispěvatelů v komentářích');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'E-mailové adresy nebudou zobrazovány, budou použity pouze pro oznámení elektronickou poštou.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Vyberte metodu logování');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Logování zamítnutých komentářů může být prováděno bu´d v databázi nebo v textovém souboru');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Soubor (viz. volba "logfile" níže)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Databáze');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Nelogovat');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Jak zacházet s komentáři přidanými přes API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Toto se týká moderování (schvalování) komentářů vytvořených přes volání API funkcí (tedy uvnitř systému Serendipity)(Trackbacks, WFW:commentAPI comments). Nastaveno na "moderovat", všechny komentáře musejí být nejdřív schváleny. Nastaveno na "zamítnout", budou úplně zakázány. Nastaveno na "none", s těmito zvláštními komentáři bude zacházeno jako s běžnými komentáři.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderovat');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'zamítnout');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'Žádné API komentáře (jako např. odezvy) nejsou povoleny');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Aktivovat slovníkový filtr');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Hledá v komentářích jisté řetězce obsažené ve slovníku. V případě úspěchu vyhodnotí komentář jako spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Použít filtr na URL adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Regulární výrazy povoleny, řetězce (jednotlivé adresy) odělujte středníkem (;). Speciální znaky jako zavináč (@) musíte escapovat - \\@.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Použít filtr na jména autorů');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Použít filtr pro tělo komentáře');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Použít filtr na e-mailovou adresu');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Nesprávná e-mailová adresa');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Zkontrolovat e-mailové adresy?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Vyžadovaná pole komentáře');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Zadejte seznam polí, které musí být vyplněny pro odeslání komentáře. Více polí oddělujte čárkou ",". V úvahu připadají pole: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Nezadal jsi pole %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Konfigurovat antispamové metody');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokovat tohoto autora pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokovat tuto URL adresu pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Blokovat tuto e-mailovou adresu pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Zrušit blokování tohoto autora');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Zrušit blokování této URL adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Zrušit blokování této e-mailové adresy');

@define('PLUGIN_EVENT_SPAMBLOCK_BLOGG_SPAMLIST', 'Aktivovat filtraci URL adres z balcklistu blogg.de');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BLOGG_SPAMLIST', 'Zamítnuto blacklistem blogg.de');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Nadpis komentáře je stejný jako jeho tělo');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Odmítne komentáře, které v těle obsahují pouze nadpis.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Kontrolovat URL odezev');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Povolit pouze odezvy, jejichž URL obsahuje adresu vašeho blogu');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Trackback URL invalid.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Pomíchané kryptogramy');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Vypni spamblock pro následující Autory');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Autorům v následujících skupinách můžeš povolit posílání příspěvků, aniž by tyto byly kontrolovány na spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API Key');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com je centrální anti-spamový a blacklistový server. Může analyzovat příchozí komentáře a kontrolovat, jestli jsou vedeny jako spam. Akismet byl vyvinut speciálně pro WordPress, ale může být použitý i v jiných systémech. Potřebuješ k tomu API Key z  http://www.akismet.com, který získáš registrací na http://www.wordpress.com/. Pokud necháš toto pole prázdné, Akismet nebude používán.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Jak označovat příspěvek označený Akismetem jako spam?');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Zamítnuto blacklistem Akismet.com');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Co udělat s komentáři označenými jako auto-moderovaými?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Co udělat s odezvami označenými jako auto-moderovaými?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Vynutit moderování odezev po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Můžeš automaticky nastavit všechny odezvy na články jako moderované. Zadej počet dní od vydání, po jejichž uplynutí budou označeny jako auto-moderované. 0 znamená žádné moderování (schvalování)');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'Použít CSRF Ochranu pro komentáře?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Pokud je povoleno, speciální hash hodnota bude hlídat, že komentáře mohou poslat pouze uživatelé s platným číslem session. To zmírní spam a zabrání uživatelům v přidávání komentářů přes CSRF, ale také to zabrání přidávat komentáře uživatelům, kteří nemají zapnuté cookies.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Váš komentář neobsahuje Session-Hash. Komentáře mohou být na tomto blogu poslány pouze se zapnutými cookies!');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', 'Blokuj špatné IP adresy pomocí HTaccess?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', 'Povolení této volby přidá IP adresy, ze kterých přichází spam do souboru .htaccess. Soubor .htaccess bude pravidelně aktualizován o zakázané adresy každý měsíc.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', 'Takto právě vypadají vaše kryptogramy. Pokud jste změnili a uložili nastavení výše a chcete vidět aktuální vzhled kryptogramu, jednoduše na něj klikněte a on se obnoví.');
