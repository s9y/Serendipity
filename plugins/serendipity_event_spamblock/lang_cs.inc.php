<?php

/**
 *  @file lang_cs.inc.php 1658.2 2011-04-17 14:17:14 VladaAjgl
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/16
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/07/06
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/04/17
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Spam Protector');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Množství metod na ochranu proti spamu.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Ochrana proti spamu: Neplatná zpráva.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Ochrana proti spamu: Nemùžeš poslat komentáø tak brzy po odeslání jiného komentáøe.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Tento blog se nachází v módu "Nouzové blokování všech komentárù", zkuste to jindy.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Nepovolovat opakující se komentáøe');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Nepovolovat uživatelùm odeslat komentáø, který má stejný obsah jako jiný již odeslaný komentáø.');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Nouzové vypnutí komentáøù');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Doèasnì vypne komentáøe pro všechny pøíspìvky. Užiteèná funkce, pokud je váš blog pod útokem spamerù.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Blokování IP adres');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Povol poslat z jedné IP adresy jeden komentáø za n minut. Užiteèné pro zabránìní záplav komentáøù.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Povolit kryptogramy');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Pøispìvatel bude nucen zadat èísla z náhodnì vygenerovaného deformovaného obrázku. Toto znemožní automatické pøidávání komentáøù, napø. hackerským strojem. Mìjte prosím na pamìti, že lidé s poškozeným zrakem mohou mít potíže se ètením tìchto kryptogramù.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'V rámci boje proti komentáøovém spamu zadejte prosím znaky, které vidíte níže. Váš komentáø bude poslán pouze pokud tyto znaky budou souhlasit. Ujistìte se, že Váš prohlížeè podporuje a pøijímá cookies. Jinak vaše komentáøe nemohou být správnì ovìøené.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Do políèka níže zadejte znaky, které vidíte nad tímto textem.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Zadejte znaky z protispamového obrázku: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Nezadal jsi správnì znaky z protispamového obrázku. Podívej se na nìj znovu a zadej znaky spávnì.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Kryptogramy vypnuty. Potøebujete GDLib a freetype knihovny zkompilované v PHP, podobnì je potøeba mít soubory.TTF (fonty) v adresáøích pluginu "spamblock" .');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Vynutit kryptogramy po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Kryptogramy (spamové obrázky) mohou být vynucovány v závislosti na stáøí èlánku. Zadejte poèet dní, po kterých bude nutné zadat správný text z kryptogramu pro vložení komentáøe. Poèet nastavený na 0 znamená, že kryptogramy budou vyžadovány ihned po vydání.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Vynutit moderování (schvalování) komentáøù po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Mùžeš automaticky nastavit všechny komentáøe jako moderované. Po uplynutí zde zadané doby od vydání èlánku bude tøeba potvrzovat (auto-moderovat) komentáøe. 0 znamené žádné potvrzování.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Kolik odkazù v jednom komentáøi povolit, než bude automaticky nastaven ke schválení');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Když se v komentáøi objeví více než zde zadaný poèet odkazù &lt;a href="..."&gt;, bude automaticky nastaven ke schávlení. 0 znamená žádné kontroly množství odkazù.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Kolik odkazù v jednom komentáøi povolit, než bude zamítnut');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Když se v komentáøi objeví více než zde zadaný poèet odkazù &lt;a href="..."&gt;, bude zamítnut. 0 znamená žádné kontroly množství odkazù.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Váš komentáø vyžaduje souhlas provozovatele blogu. Neposílejte jej znovu, vyèkejte na jeho potvrzení.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Pozadí kryptogramù');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Zadej RGB hodnotu: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Umístìní logu');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informace o zamítnutých/moderovaných pøíspìvcích mohou být zapisovány do logu. Nastavte na prázdný øeøtìzet pro vypnutí logování.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Nouzové blokování komentáøù');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Duplicitní komentáø');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-blok');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Nesprávný kryptogram (Zadáno: %s, Správnì má být: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Automatické moderování (schvalování) po X dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Pøíliš mnoho odkazù (odezev)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Pøíliš mnoho odkazù (odezev)');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Schovat e-mailovou adresu pisatelù komentáøù');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Schová e-mailové adresy pøispìvatelù v komentáøích');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'E-mailové adresy nebudou zobrazovány, budou použity pouze pro oznámení elektronickou poštou.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Vyberte metodu logování');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Logování zamítnutých komentáøù mùže být provádìno buï v databázi nebo v textovém souboru');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Soubor (viz. volba "logfile" níže)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Databáze');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Nelogovat');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Jak zacházet s komentáøi pøidanými pøes API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Toto se týká moderování (schvalování) komentáøù vytvoøených pøes volání API funkcí (tedy uvnitø systému Serendipity)(Trackbacks, WFW:commentAPI comments). Nastaveno na "moderovat", všechny komentáøe musejí být nejdøív schváleny. Nastaveno na "zamítnout", budou úplnì zakázány. Nastaveno na "none", s tìmito zvláštními komentáøi bude zacházeno jako s bìžnými komentáøi.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderovat');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'zamítnout');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'Žádné API komentáøe (jako napø. odezvy) nejsou povoleny');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Aktivovat slovníkový filtr');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Hledá v komentáøích jisté øetìzce obsažené ve slovníku. V pøípadì úspìchu vyhodnotí komentáø jako spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Použít filtr na URL adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Regulární výrazy povoleny, øetìzce (jednotlivé adresy) odìlujte støedníkem (;). Speciální znaky jako zavináè (@) musíte escapovat - \\@.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Použít filtr na jména autorù');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Použít filtr pro tìlo komentáøe');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Použít filtr na e-mailovou adresu');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Nesprávná e-mailová adresa');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Zkontrolovat e-mailové adresy?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Vyžadovaná pole komentáøe');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Zadejte seznam polí, které musí být vyplnìny pro odeslání komentáøe. Více polí oddìlujte èárkou ",". V úvahu pøipadají pole: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Nezadal jsi pole %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Konfigurovat antispamové metody');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokovat tohoto autora pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokovat tuto URL adresu pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Blokovat tuto e-mailovou adresu pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Zrušit blokování tohoto autora');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Zrušit blokování této URL adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Zrušit blokování této e-mailové adresy');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Nadpis komentáøe je stejný jako jeho tìlo');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Odmítne komentáøe, které v tìle obsahují pouze nadpis.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Kontrolovat URL odezev');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Povolit pouze odezvy, kde stránka odezvy opravdu obsahuje odkaz na Váš blog - kontroluje stránku odezvy.');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Trackback URL invalid.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Pomíchané kryptogramy');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Vypni spamblock pro následující Autory');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Autorùm v následujících skupinách mùžeš povolit posílání pøíspìvkù, aniž by tyto byly kontrolovány na spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API Key');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com je centrální anti-spamový a blacklistový server. Mùže analyzovat pøíchozí komentáøe a kontrolovat, jestli jsou vedeny jako spam. Akismet byl vyvinut speciálnì pro WordPress, ale mùže být použitý i v jiných systémech. Potøebuješ k tomu API Key z  http://www.akismet.com, který získáš registrací na http://www.wordpress.com/. Pokud necháš toto pole prázdné, Akismet nebude používán.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Jak oznaèovat pøíspìvek oznaèený Akismetem jako spam?');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Zamítnuto blacklistem Akismet.com');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Co udìlat s komentáøi oznaèenými jako auto-moderovaými?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Co udìlat s odezvami oznaèenými jako auto-moderovaými?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Vynutit moderování odezev po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Mùžeš automaticky nastavit všechny odezvy na èlánky jako moderované. Zadej poèet dní od vydání, po jejichž uplynutí budou oznaèeny jako auto-moderované. 0 znamená žádné moderování (schvalování)');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'Použít CSRF Ochranu pro komentáøe?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Pokud je povoleno, speciální hash hodnota bude hlídat, že komentáøe mohou poslat pouze uživatelé s platným èíslem session. To zmírní spam a zabrání uživatelùm v pøidávání komentáøù pøes CSRF, ale také to zabrání pøidávat komentáøe uživatelùm, kteøí nemají zapnuté cookies.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Váš komentáø neobsahuje Session-Hash. Komentáøe mohou být na tomto blogu poslány pouze se zapnutými cookies!');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', 'Blokuj špatné IP adresy pomocí HTaccess?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', 'Povolení této volby pøidá IP adresy, ze kterých pøichází spam do souboru .htaccess. Soubor .htaccess bude pravidelnì aktualizován o zakázané adresy každý mìsíc.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', 'Takto právì vypadají vaše kryptogramy. Pokud jste zmìnili a uložili nastavení výše a chcete vidìt aktuální vzhled kryptogramu, jednoduše na nìj kliknìte a on se obnoví.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION', 'Odezvy/oznámení: kontrola ip adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_DESC', 'Mìla by IP odesílatele souhlasit s IP hosta, kterému je zasílána odezva/oznámení (trackaback/pingback)? (DOPORUÈENO!)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION', 'Kontrola IP adresy: %s [%s] != ip adresa odesílatele [%s]');

@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_DESC', 'Pokud je zakázáno, nebude se provádìt žádná kontrola emailù. Pokud je nastaveno na "Ano", pak komentující musí napsat platnou emailovou adresu. Pokud je nastaveno na "Vždy potvrzovat", komentující bude muset potvrdit svùj koemntáø pomocí emailu, který mu bude zaslán (kliknutím na zaslaný odkaz). Pokud je nastaveno na "Potvrdit poprvé", uživatel musí potvrdit svùj první komentáø (kliknutím na zaslaný odkaz). Pøi dalších jeho komentáøích nebude potvrzení požadováno.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ONCE', 'Potvrdit poprvé');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ALWAYS', 'Vždy potvrzovat');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL', 'Bìhem nìkolika okamžikù na svùj mail obdržíte zprávu, pomocí které potvrdíte svùj komentáø.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_INFO', 'Abyste mohli zanechat komentáø, musíte ho potvrdit pomocí e-mailu. Po odeslání formuláøe s komentáøem Vám bude zaslán mail, s jehož pomocí dokonèíte vložení komentáøe.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER', 'Antispamový server');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER_DESC', 'Na kterém serveru je zaregistrovaný výše zadaný klíè? Anonymní znamená, že data posílaná webové službì neobsahují uživatelské jméno a emailovou adresu. I tato volba snižuje množství spamu, i když ne tak dobøe, jako neanonymní.');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS', 'TypePad Antispam');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET', 'pùvodní Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS_ANON', 'TypePad Antispam (anonymní)');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET_ANON', 'pùvodní Akismet (anonymní)');

// Next lines were translated on 2009/07/06
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE', 'Vylouèit URL adresy z ovìøení IP adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE_DESC', 'URL adresy, které se nemají ovìøovat na IP adresu.');

// Next lines were translated on 2011/04/17
@define('PLUGIN_EVENT_SPAMBLOCK_SPAM', 'Spam');
@define('PLUGIN_EVENT_SPAMBLOCK_NOT_SPAM', 'Není spam');

