<?php #

/**
 *  @version
 *  @author Martin Matuška <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Spam Protector');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Rôzné metódy na ochranu proti spamu.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Ochrana proti spamu: Neplatná správa.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Ochrana proti spamu: Nie je povolené odoslať komentár krátko po odoslaní iného komentára.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Tento weblog je nastavený v móde "Núdzové blokovanie všetkých komentárov", skúste neskôr.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Zakázať opakujúce sa komentáre');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Zakázať užívateľom odoslať komentár, ktorý má rovnaký obsah ako iný, už odoslaný komentár.');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Núdzové vypnutie komentárov');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Dočasne vypne komentáre ku všetkým článkom. Užitočné v prípade útoku spammerov na Váš weblog.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Blokovanie IP adres');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Z jednej IP adresy povoliť odoslanie jedného komentára za n minút. Užitočné pre zabránenie komentárového floodu.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Zapnúť kryptogramy (captcha)');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Prispievateľ musí zadať čísla z náhodne vytvoreného deformovaného obrázku. Toto zabráni automatickému pridávaniu komentárov, napr. hackerskými počítačmi. Nezabúdajte, že ľudia so zhoršným videním môžu mať problémy s čítaním týchto obrázkov.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'V rámci boja proti komentárovému spamu zadajte prosím znaky, ktoré sú zobrazené nižšie. Váš komentár bude prijatý iba ak tieto znaky budú súhlasiť. Váš prehliadač musí podporovať a prijímač cookies, inak nemôžu byť Vaše komentáre správne overené.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Do nižšie uvedeného poľa zadajte znaky, ktoré sú zobrazené nad týmto textom.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Zadajte znaky z antispamového obrázku: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Zadali ste nesprávne znaky z antispamového obrázku. Prezrite si ho prosím znova a zadajte znaky opätovne.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Kryptogramy sú vypnuté. K prevádzke sú potrebné PHP knižnice GDLib a freetype, a tiež je potrebné mať fontové soubory (.TTF) v priečinkoch doplnku "spamblock".');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Vyžadovať kryptogramy po tomto počte dní');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Kryptogramy (captcha) môžu byť zapnuté v závislosti od veku článku. Zadajte počet dní, po ktorých sa bude vyžadovať na vloženie komentára správny text z kryptogramu. Hodnota 0 znamená, že kryptogramy budú vyžadované hneď po publikovaní.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Vyžadovať moderovanie (schvaľovanie) komentárov po tomto počte dní');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Všetky komentáre sa dajú automaticky nastaviť ako moderované. Po uplynutí tu uvedenej doby od publikovania článku sa bude vyžadovať moderovanie (schvaľovanie) komentárov. Hodnota 0 znamená bez moderovania.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Počet odkazov v komentári na automatické moderovanie');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Ak sa v komentári nachádza viac ako zadaný počet odkazov &lt;a href="..."&gt;, bude automaticky moderovaný. Hodnota 0 znamená, že počet odkazov nebude kontrolovaný.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Počet odkazov v komentári na automatické zamietnutie');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Ak sa v komentári nachádza viac ako zadaný počet odkazov &lt;a href="..."&gt;, bude automaticky zamietnutý. Hodnota 0 znamená, že počet odkazov nebude kontrolovaný.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Váš komentár vyžaduje schválenie prevádzkovateľom weblogu. Prosím, neposielajte ho znovu, počkajte na jeho schválenie.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Pozadie kryptogramov (captcha)');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Zadajte RGB hodnotu: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Umiestnenie logovania');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informácie o zamietnutých/moderovaných príspevkoch môžu byť zapisované. Prázdna hodnota znamená vypnuté logovanie.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Núdzové blokovanie komentárov');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Duplicitný komentár');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-blok');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Nesprávny kryptogram (Zadané: %s, Správne malo byť: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Automatické moderovanie (schvaľovanie) po X dňoch');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Příliš veľa odkazov (odoziev)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Příliš veľa odkazov (odoziev)');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Skryť e-mailovú adresu prispievateľov komentárov');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Nezobrazí e-mailovú adresu prispievateľov v ich komentároch');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'E-mailové adresy nebudú zobrazené, budú použité iba na oznámenia elektronickou poštou.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Vyberte metódu logovania');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Logovanie zamietnutých komentárov môže byť vykonané buď do databázy alebo do textového súboru');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Súbor (pozri voľba "logfile" nižšie)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Databáza');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Nelogovať');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Ako nakladať s komentármi pridanými cez API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Toto nastavenie sa týka moderovania (schvaľovania) komentárov vytvorených cez volania API funkcií (vovnútri systému Serendipity) (Trackbacks, WFW:commentAPI komentáre). Pri nastavení "moderovať" budú všetky komentáre vyžadovať schválenie. Nastavením "zamietnuť" budú automaticky zamietnuté. Nastavenie "none" spôsobí, že budú spracované ako bežné komentáre.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderovať');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'zamietnuť');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'API komentáre (ako napr. odozvy) sú zakázané');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Zapnúť slovníkový filter');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'V komentároch budú hľadané určité reťazce obsiahnuté v slovníku. Ak sa tieto reťazce nájdu, bude komentár vyhodnotený ako spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Použiť filter na adresy URL');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Regulárne výrazy sú povolené, reťazce (jednotlivé adresy) oddelujte bodkočiarkou (;). Špeciálne znaky ako zavináč (@) musíte oddeliť lomítkami - \\@.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Použiť filter na mená autorov');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Použiť filter na telo komentára');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Použiť filter na e-mailovú adresu');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Nesprávna e-mailová adresa');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Kontrolovať e-mailové adresy?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Vyžadované polia komentára');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Zadajte zoznam polí, ktoré musia byť vyplnené na odoslanie komentára. Viac polí oddelujte čiarkou ",". Do úvahy pripadajú polia: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Nezadali ste pole %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Konfigurovať antispamové metódy');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokovať tohto autora doplnkom "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokovať túto adresu URL doplnkom "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Blokovať túto e-mailovú adresu doplnkom "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Zrušiť blokovánie tohto autora');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Zrušiť blokovánie tejto adresy URL');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Zrušiť blokovánie tejto e-mailovej adresy');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Nadpis komentára je rovnaký ako jeho telo');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Odmietnuté budú komentáre, ktoré v tele obsahujú iba nadpis.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Kontrolovať URL odoziev');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Povoliť iba odozvy, kde stránka odozvy naozaj obsahuje odkaz na Váš weblog - kontroluje stránku odozvy.');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'URL stránky odozvy je nepladné.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Zmiešané kryptogramy');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Vypnúť Spamblock pre nasledujúcich autorov');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Autorom v nasledujúcich skupinách môžete povoliť vkladanie článkov bez toho, aby boli kontrolované na spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API Key');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com je centrálny antispamový a blacklistový server. Môže analyzovať prichádzajúce komentáre a kontrolovať, či sú vedené ako spam. Akismet bol vyvinutý pre WordPress, ale môže byť použitý aj v iných systémoch. Je k tomu potrebný Key z http://www.akismet.com, ktorý získate registráciou na http://www.wordpress.com/. Ak necháte toto pole prázdne, Aksimet sa nebude používať.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Ako označovať príspevok označený Aksimetom ako spam?');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Zamietnuté blacklistom Akismet.com');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Ako nakladať s komentármi označenými na automatickú moderáciu?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Ako nakladať s odozvami označenými na automatickú moderáciu?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Vyžadovať moderovanie (schvaľovanie) odoziev po tomto počte dní');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Všetky odozvy sa dajú automaticky nastaviť ako moderované. Po uplynutí tu uvedenej doby od publikovania článku sa bu
de vyžadovať moderovanie (schvaľovanie) odoziev. Hodnota 0 znamená bez moderovania.');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'Zapnúť CSRF Ochranu pre komentáre?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Ak je zapnuté, bude sa pomocou špeciálnej hash hodnota kontrolovať, aby boli komentáre pridané iba od používateľov s platným číslom sedenia. Toto zmierni spam a zabráni používateľom pridávať komentáre cez CSRF. Užívatelia, ktorí nemajú zapnuté cookies, nebudú môcť pridávať komentáre.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Váš komentár neobsahuje hash sedenia. Komentáre môžu byť na tento weblog posielané iba so zapnutými cookies!');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', 'Blokovať neželané IP adresy pomocou HTaccess?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', 'Aktivovanie tejto voľby pridá IP adresy, z ktorých prichádza spam do súboru .htaccess. Tento bude pravidelne aktualizovaný každý mesiac.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', 'Takto vyzerajú Vaše kryptogramy (captcha). Ak ste zmenili a uložili vyššie uvedené nastavenia a chcete vidieť aktuálny vzhľad kryptogramu, jednoducho na neho kliknite a bude obnovený.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION', 'Odozvy/oznámenia: kontrola ip adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_DESC', 'Má IP odosielateľa súhlasiť s IP počítača, ktorému je zasielaná odozva/oznámenie (trackaback/pingback)? (ODPORÚČAME!)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION', 'Kontrola IP adresy: %s [%s] != ip adresa odosielateľa [%s]');

@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_DESC', 'Ak je vypnuté, nebude sa vykonávať žiadna kontrola e-mailov. Ak je nastavené na "Áno", autor komentára musí zadať platnú e-mailovú adresu. Nastavenie "Potvrdiť každý" spôsobí, že každý komentár musí byť potvredný kliknutím na odkaz v zaslanom e-maile. Pri nastavení "Potvrdiť prvý" musí autor komentára potvrdiť iba svoj prvý komentár. Ostatné komentáre s rovnakým menom a e-mailovou adresou nebudú vyžadovať potvrdenie.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ONCE', 'Potvrdiť prvý');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ALWAYS', 'Potvrdiť každý');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL', 'V krátkosti Vám bude doručený e-mail, pomocou ktorého môžete potvrdiť Váš komentár.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_INFO', 'Na pridanie komentára sa vyžaduje potvrdenie pomocou e-mailu. Po odoslaní formulára s komentárom Vám bude zaslaný e-mail, pomocou ktorého dokončíte pridanie komentára.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER', 'Antispamový server');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER_DESC', 'Na ktorom serveri je zaregistrovaný vyššie uvedený kľúč? Anonymne znamená, že údaje posielané webovej službe neobsahujú používateľské meno a e-mailovú adresu. Aj táto voľba znižuje množstvo spamu, i keď nie až tak dobre, ako neanonymne.');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS', 'TypePad Antispam');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET', 'pôvodný Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS_ANON', 'TypePad Antispam (anonymne)');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET_ANON', 'pôvodný Akismet (anonymne)');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE', 'Vylúčiť adresy URL z overenia IP adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE_DESC', 'Adresy URL, pri ktorých sa nemá overovať IP adresa. ' . PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);

