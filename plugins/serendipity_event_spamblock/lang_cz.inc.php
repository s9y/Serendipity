<?php

/**
 *  @file lang_cz.inc.php 1658.2 2011-04-17 14:17:14 VladaAjgl
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
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Mno¾ství metod na ochranu proti spamu.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Ochrana proti spamu: Neplatná zpráva.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Ochrana proti spamu: Nemù¾e¹ poslat komentáø tak brzy po odeslání jiného komentáøe.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Tento blog se nachází v módu "Nouzové blokování v¹ech komentárù", zkuste to jindy.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Nepovolovat opakující se komentáøe');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Nepovolovat u¾ivatelùm odeslat komentáø, který má stejný obsah jako jiný ji¾ odeslaný komentáø.');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Nouzové vypnutí komentáøù');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Doèasnì vypne komentáøe pro v¹echny pøíspìvky. U¾iteèná funkce, pokud je vá¹ blog pod útokem spamerù.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Blokování IP adres');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Povol poslat z jedné IP adresy jeden komentáø za n minut. U¾iteèné pro zabránìní záplav komentáøù.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Povolit kryptogramy');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Pøispìvatel bude nucen zadat èísla z náhodnì vygenerovaného deformovaného obrázku. Toto znemo¾ní automatické pøidávání komentáøù, napø. hackerským strojem. Mìjte prosím na pamìti, ¾e lidé s po¹kozeným zrakem mohou mít potí¾e se ètením tìchto kryptogramù.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'V rámci boje proti komentáøovém spamu zadejte prosím znaky, které vidíte ní¾e. Vá¹ komentáø bude poslán pouze pokud tyto znaky budou souhlasit. Ujistìte se, ¾e Vá¹ prohlí¾eè podporuje a pøijímá cookies. Jinak va¹e komentáøe nemohou být správnì ovìøené.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Do políèka ní¾e zadejte znaky, které vidíte nad tímto textem.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Zadejte znaky z protispamového obrázku: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Nezadal jsi správnì znaky z protispamového obrázku. Podívej se na nìj znovu a zadej znaky spávnì.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Kryptogramy vypnuty. Potøebujete GDLib a freetype knihovny zkompilované v PHP, podobnì je potøeba mít soubory.TTF (fonty) v adresáøích pluginu "spamblock" .');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Vynutit kryptogramy po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Kryptogramy (spamové obrázky) mohou být vynucovány v závislosti na stáøí èlánku. Zadejte poèet dní, po kterých bude nutné zadat správný text z kryptogramu pro vlo¾ení komentáøe. Poèet nastavený na 0 znamená, ¾e kryptogramy budou vy¾adovány ihned po vydání.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Vynutit moderování (schvalování) komentáøù po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Mù¾e¹ automaticky nastavit v¹echny komentáøe jako moderované. Po uplynutí zde zadané doby od vydání èlánku bude tøeba potvrzovat (auto-moderovat) komentáøe. 0 znamené ¾ádné potvrzování.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Kolik odkazù v jednom komentáøi povolit, ne¾ bude automaticky nastaven ke schválení');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Kdy¾ se v komentáøi objeví více ne¾ zde zadaný poèet odkazù &lt;a href="..."&gt;, bude automaticky nastaven ke schávlení. 0 znamená ¾ádné kontroly mno¾ství odkazù.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Kolik odkazù v jednom komentáøi povolit, ne¾ bude zamítnut');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Kdy¾ se v komentáøi objeví více ne¾ zde zadaný poèet odkazù &lt;a href="..."&gt;, bude zamítnut. 0 znamená ¾ádné kontroly mno¾ství odkazù.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Vá¹ komentáø vy¾aduje souhlas provozovatele blogu. Neposílejte jej znovu, vyèkejte na jeho potvrzení.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Pozadí kryptogramù');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Zadej RGB hodnotu: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Umístìní logu');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informace o zamítnutých/moderovaných pøíspìvcích mohou být zapisovány do logu. Nastavte na prázdný øeøtìzet pro vypnutí logování.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Nouzové blokování komentáøù');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Duplicitní komentáø');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-blok');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Nesprávný kryptogram (Zadáno: %s, Správnì má být: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Automatické moderování (schvalování) po X dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Pøíli¹ mnoho odkazù (odezev)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Pøíli¹ mnoho odkazù (odezev)');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Schovat e-mailovou adresu pisatelù komentáøù');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Schová e-mailové adresy pøispìvatelù v komentáøích');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'E-mailové adresy nebudou zobrazovány, budou pou¾ity pouze pro oznámení elektronickou po¹tou.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Vyberte metodu logování');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Logování zamítnutých komentáøù mù¾e být provádìno buï v databázi nebo v textovém souboru');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Soubor (viz. volba "logfile" ní¾e)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Databáze');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Nelogovat');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Jak zacházet s komentáøi pøidanými pøes API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Toto se týká moderování (schvalování) komentáøù vytvoøených pøes volání API funkcí (tedy uvnitø systému Serendipity)(Trackbacks, WFW:commentAPI comments). Nastaveno na "moderovat", v¹echny komentáøe musejí být nejdøív schváleny. Nastaveno na "zamítnout", budou úplnì zakázány. Nastaveno na "none", s tìmito zvlá¹tními komentáøi bude zacházeno jako s bì¾nými komentáøi.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderovat');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'zamítnout');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', '®ádné API komentáøe (jako napø. odezvy) nejsou povoleny');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Aktivovat slovníkový filtr');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Hledá v komentáøích jisté øetìzce obsa¾ené ve slovníku. V pøípadì úspìchu vyhodnotí komentáø jako spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Pou¾ít filtr na URL adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Regulární výrazy povoleny, øetìzce (jednotlivé adresy) odìlujte støedníkem (;). Speciální znaky jako zavináè (@) musíte escapovat - \\@.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Pou¾ít filtr na jména autorù');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Pou¾ít filtr pro tìlo komentáøe');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Pou¾ít filtr na e-mailovou adresu');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Nesprávná e-mailová adresa');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Zkontrolovat e-mailové adresy?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Vy¾adovaná pole komentáøe');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Zadejte seznam polí, které musí být vyplnìny pro odeslání komentáøe. Více polí oddìlujte èárkou ",". V úvahu pøipadají pole: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Nezadal jsi pole %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Konfigurovat antispamové metody');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokovat tohoto autora pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokovat tuto URL adresu pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Blokovat tuto e-mailovou adresu pluginem "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Zru¹it blokování tohoto autora');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Zru¹it blokování této URL adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Zru¹it blokování této e-mailové adresy');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Nadpis komentáøe je stejný jako jeho tìlo');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Odmítne komentáøe, které v tìle obsahují pouze nadpis.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Kontrolovat URL odezev');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Povolit pouze odezvy, kde stránka odezvy opravdu obsahuje odkaz na Vá¹ blog - kontroluje stránku odezvy.');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Trackback URL invalid.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Pomíchané kryptogramy');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Vypni spamblock pro následující Autory');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Autorùm v následujících skupinách mù¾e¹ povolit posílání pøíspìvkù, ani¾ by tyto byly kontrolovány na spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API Key');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com je centrální anti-spamový a blacklistový server. Mù¾e analyzovat pøíchozí komentáøe a kontrolovat, jestli jsou vedeny jako spam. Akismet byl vyvinut speciálnì pro WordPress, ale mù¾e být pou¾itý i v jiných systémech. Potøebuje¹ k tomu API Key z  http://www.akismet.com, který získá¹ registrací na http://www.wordpress.com/. Pokud nechá¹ toto pole prázdné, Akismet nebude pou¾íván.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Jak oznaèovat pøíspìvek oznaèený Akismetem jako spam?');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Zamítnuto blacklistem Akismet.com');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Co udìlat s komentáøi oznaèenými jako auto-moderovaými?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Co udìlat s odezvami oznaèenými jako auto-moderovaými?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Vynutit moderování odezev po kolika dnech');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Mù¾e¹ automaticky nastavit v¹echny odezvy na èlánky jako moderované. Zadej poèet dní od vydání, po jejich¾ uplynutí budou oznaèeny jako auto-moderované. 0 znamená ¾ádné moderování (schvalování)');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'Pou¾ít CSRF Ochranu pro komentáøe?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Pokud je povoleno, speciální hash hodnota bude hlídat, ¾e komentáøe mohou poslat pouze u¾ivatelé s platným èíslem session. To zmírní spam a zabrání u¾ivatelùm v pøidávání komentáøù pøes CSRF, ale také to zabrání pøidávat komentáøe u¾ivatelùm, kteøí nemají zapnuté cookies.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Vá¹ komentáø neobsahuje Session-Hash. Komentáøe mohou být na tomto blogu poslány pouze se zapnutými cookies!');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', 'Blokuj ¹patné IP adresy pomocí HTaccess?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', 'Povolení této volby pøidá IP adresy, ze kterých pøichází spam do souboru .htaccess. Soubor .htaccess bude pravidelnì aktualizován o zakázané adresy ka¾dý mìsíc.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', 'Takto právì vypadají va¹e kryptogramy. Pokud jste zmìnili a ulo¾ili nastavení vý¹e a chcete vidìt aktuální vzhled kryptogramu, jednodu¹e na nìj kliknìte a on se obnoví.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION', 'Odezvy/oznámení: kontrola ip adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_DESC', 'Mìla by IP odesílatele souhlasit s IP hosta, kterému je zasílána odezva/oznámení (trackaback/pingback)? (DOPORUÈENO!)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION', 'Kontrola IP adresy: %s [%s] != ip adresa odesílatele [%s]');

@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_DESC', 'Pokud je zakázáno, nebude se provádìt ¾ádná kontrola emailù. Pokud je nastaveno na "Ano", pak komentující musí napsat platnou emailovou adresu. Pokud je nastaveno na "V¾dy potvrzovat", komentující bude muset potvrdit svùj koemntáø pomocí emailu, který mu bude zaslán (kliknutím na zaslaný odkaz). Pokud je nastaveno na "Potvrdit poprvé", u¾ivatel musí potvrdit svùj první komentáø (kliknutím na zaslaný odkaz). Pøi dal¹ích jeho komentáøích nebude potvrzení po¾adováno.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ONCE', 'Potvrdit poprvé');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ALWAYS', 'V¾dy potvrzovat');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL', 'Bìhem nìkolika okam¾ikù na svùj mail obdr¾íte zprávu, pomocí které potvrdíte svùj komentáø.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_INFO', 'Abyste mohli zanechat komentáø, musíte ho potvrdit pomocí e-mailu. Po odeslání formuláøe s komentáøem Vám bude zaslán mail, s jeho¾ pomocí dokonèíte vlo¾ení komentáøe.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER', 'Antispamový server');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER_DESC', 'Na kterém serveru je zaregistrovaný vý¹e zadaný klíè? Anonymní znamená, ¾e data posílaná webové slu¾bì neobsahují u¾ivatelské jméno a emailovou adresu. I tato volba sni¾uje mno¾ství spamu, i kdy¾ ne tak dobøe, jako neanonymní.');
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

