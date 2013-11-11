<?php #

/**
 *  @version
 *  @author Martin Matu¹ka <martin@matuska.org>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Spam Protector');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Rôzné metódy na ochranu proti spamu.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Ochrana proti spamu: Neplatná správa.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Ochrana proti spamu: Nie je povolené odosla» komentár krátko po odoslaní iného komentára.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Tento weblog je nastavený v móde "Núdzové blokovanie v¹etkých komentárov", skúste neskôr.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Zakáza» opakujúce sa komentáre');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Zakáza» u¾ívateµom odosla» komentár, ktorý má rovnaký obsah ako iný, u¾ odoslaný komentár.');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Núdzové vypnutie komentárov');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Doèasne vypne komentáre ku v¹etkým èlánkom. U¾itoèné v prípade útoku spammerov na Vá¹ weblog.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'Blokovanie IP adres');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Z jednej IP adresy povoli» odoslanie jedného komentára za n minút. U¾itoèné pre zabránenie komentárového floodu.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Zapnú» kryptogramy (captcha)');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Prispievateµ musí zada» èísla z náhodne vytvoreného deformovaného obrázku. Toto zabráni automatickému pridávaniu komentárov, napr. hackerskými poèítaèmi. Nezabúdajte, ¾e µudia so zhor¹ným videním mô¾u ma» problémy s èítaním týchto obrázkov.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'V rámci boja proti komentárovému spamu zadajte prosím znaky, ktoré sú zobrazené ni¾¹ie. Vá¹ komentár bude prijatý iba ak tieto znaky budú súhlasi». Vá¹ prehliadaè musí podporova» a prijímaè cookies, inak nemô¾u by» Va¹e komentáre správne overené.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Do ni¾¹ie uvedeného poµa zadajte znaky, ktoré sú zobrazené nad týmto textom.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Zadajte znaky z antispamového obrázku: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Zadali ste nesprávne znaky z antispamového obrázku. Prezrite si ho prosím znova a zadajte znaky opätovne.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Kryptogramy sú vypnuté. K prevádzke sú potrebné PHP kni¾nice GDLib a freetype, a tie¾ je potrebné ma» fontové soubory (.TTF) v prieèinkoch doplnku "spamblock".');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Vy¾adova» kryptogramy po tomto poète dní');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Kryptogramy (captcha) mô¾u by» zapnuté v závislosti od veku èlánku. Zadajte poèet dní, po ktorých sa bude vy¾adova» na vlo¾enie komentára správny text z kryptogramu. Hodnota 0 znamená, ¾e kryptogramy budú vy¾adované hneï po publikovaní.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Vy¾adova» moderovanie (schvaµovanie) komentárov po tomto poète dní');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'V¹etky komentáre sa dajú automaticky nastavi» ako moderované. Po uplynutí tu uvedenej doby od publikovania èlánku sa bude vy¾adova» moderovanie (schvaµovanie) komentárov. Hodnota 0 znamená bez moderovania.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Poèet odkazov v komentári na automatické moderovanie');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Ak sa v komentári nachádza viac ako zadaný poèet odkazov &lt;a href="..."&gt;, bude automaticky moderovaný. Hodnota 0 znamená, ¾e poèet odkazov nebude kontrolovaný.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Poèet odkazov v komentári na automatické zamietnutie');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Ak sa v komentári nachádza viac ako zadaný poèet odkazov &lt;a href="..."&gt;, bude automaticky zamietnutý. Hodnota 0 znamená, ¾e poèet odkazov nebude kontrolovaný.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Vá¹ komentár vy¾aduje schválenie prevádzkovateµom weblogu. Prosím, neposielajte ho znovu, poèkajte na jeho schválenie.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Pozadie kryptogramov (captcha)');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Zadajte RGB hodnotu: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Umiestnenie logovania');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informácie o zamietnutých/moderovaných príspevkoch mô¾u by» zapisované. Prázdna hodnota znamená vypnuté logovanie.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Núdzové blokovanie komentárov');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Duplicitný komentár');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-blok');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Nesprávny kryptogram (Zadané: %s, Správne malo by»: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Automatické moderovanie (schvaµovanie) po X dòoch');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Pøíli¹ veµa odkazov (odoziev)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Pøíli¹ veµa odkazov (odoziev)');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Skry» e-mailovú adresu prispievateµov komentárov');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Nezobrazí e-mailovú adresu prispievateµov v ich komentároch');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'E-mailové adresy nebudú zobrazené, budú pou¾ité iba na oznámenia elektronickou po¹tou.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Vyberte metódu logovania');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Logovanie zamietnutých komentárov mô¾e by» vykonané buï do databázy alebo do textového súboru');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Súbor (pozri voµba "logfile" ni¾¹ie)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Databáza');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Nelogova»');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Ako naklada» s komentármi pridanými cez API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Toto nastavenie sa týka moderovania (schvaµovania) komentárov vytvorených cez volania API funkcií (vovnútri systému Serendipity) (Trackbacks, WFW:commentAPI komentáre). Pri nastavení "moderova»" budú v¹etky komentáre vy¾adova» schválenie. Nastavením "zamietnu»" budú automaticky zamietnuté. Nastavenie "none" spôsobí, ¾e budú spracované ako be¾né komentáre.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderova»');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'zamietnu»');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'API komentáre (ako napr. odozvy) sú zakázané');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Zapnú» slovníkový filter');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'V komentároch budú hµadané urèité re»azce obsiahnuté v slovníku. Ak sa tieto re»azce nájdu, bude komentár vyhodnotený ako spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Pou¾i» filter na adresy URL');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Regulárne výrazy sú povolené, re»azce (jednotlivé adresy) oddelujte bodkoèiarkou (;). ©peciálne znaky ako zavináè (@) musíte oddeli» lomítkami - \\@.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Pou¾i» filter na mená autorov');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Pou¾i» filter na telo komentára');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Pou¾i» filter na e-mailovú adresu');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Nesprávna e-mailová adresa');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Kontrolova» e-mailové adresy?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Vy¾adované polia komentára');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Zadajte zoznam polí, ktoré musia by» vyplnené na odoslanie komentára. Viac polí oddelujte èiarkou ",". Do úvahy pripadajú polia: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Nezadali ste pole %s!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Konfigurova» antispamové metódy');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokova» tohto autora doplnkom "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokova» túto adresu URL doplnkom "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Blokova» túto e-mailovú adresu doplnkom "Spamblock"');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Zru¹i» blokovánie tohto autora');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Zru¹i» blokovánie tejto adresy URL');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Zru¹i» blokovánie tejto e-mailovej adresy');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Nadpis komentára je rovnaký ako jeho telo');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Odmietnuté budú komentáre, ktoré v tele obsahujú iba nadpis.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Kontrolova» URL odoziev');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Povoli» iba odozvy, kde stránka odozvy naozaj obsahuje odkaz na Vá¹ weblog - kontroluje stránku odozvy.');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'URL stránky odozvy je nepladné.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Zmie¹ané kryptogramy');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Vypnú» Spamblock pre nasledujúcich autorov');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Autorom v nasledujúcich skupinách mô¾ete povoli» vkladanie èlánkov bez toho, aby boli kontrolované na spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API Key');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com je centrálny antispamový a blacklistový server. Mô¾e analyzova» prichádzajúce komentáre a kontrolova», èi sú vedené ako spam. Akismet bol vyvinutý pre WordPress, ale mô¾e by» pou¾itý aj v iných systémoch. Je k tomu potrebný Key z http://www.akismet.com, ktorý získate registráciou na http://www.wordpress.com/. Ak necháte toto pole prázdne, Aksimet sa nebude pou¾íva».');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Ako oznaèova» príspevok oznaèený Aksimetom ako spam?');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Zamietnuté blacklistom Akismet.com');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Ako naklada» s komentármi oznaèenými na automatickú moderáciu?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Ako naklada» s odozvami oznaèenými na automatickú moderáciu?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Vy¾adova» moderovanie (schvaµovanie) odoziev po tomto poète dní');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'V¹etky odozvy sa dajú automaticky nastavi» ako moderované. Po uplynutí tu uvedenej doby od publikovania èlánku sa bu
de vy¾adova» moderovanie (schvaµovanie) odoziev. Hodnota 0 znamená bez moderovania.');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'Zapnú» CSRF Ochranu pre komentáre?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'Ak je zapnuté, bude sa pomocou ¹peciálnej hash hodnota kontrolova», aby boli komentáre pridané iba od pou¾ívateµov s platným èíslom sedenia. Toto zmierni spam a zabráni pou¾ívateµom pridáva» komentáre cez CSRF. U¾ívatelia, ktorí nemajú zapnuté cookies, nebudú môc» pridáva» komentáre.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Vá¹ komentár neobsahuje hash sedenia. Komentáre mô¾u by» na tento weblog posielané iba so zapnutými cookies!');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', 'Blokova» ne¾elané IP adresy pomocou HTaccess?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', 'Aktivovanie tejto voµby pridá IP adresy, z ktorých prichádza spam do súboru .htaccess. Tento bude pravidelne aktualizovaný ka¾dý mesiac.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', 'Takto vyzerajú Va¹e kryptogramy (captcha). Ak ste zmenili a ulo¾ili vy¹¹ie uvedené nastavenia a chcete vidie» aktuálny vzhµad kryptogramu, jednoducho na neho kliknite a bude obnovený.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION', 'Odozvy/oznámenia: kontrola ip adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_DESC', 'Má IP odosielateµa súhlasi» s IP poèítaèa, ktorému je zasielaná odozva/oznámenie (trackaback/pingback)? (ODPORÚÈAME!)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION', 'Kontrola IP adresy: %s [%s] != ip adresa odosielateµa [%s]');

@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_DESC', 'Ak je vypnuté, nebude sa vykonáva» ¾iadna kontrola e-mailov. Ak je nastavené na "Áno", autor komentára musí zada» platnú e-mailovú adresu. Nastavenie "Potvrdi» ka¾dý" spôsobí, ¾e ka¾dý komentár musí by» potvredný kliknutím na odkaz v zaslanom e-maile. Pri nastavení "Potvrdi» prvý" musí autor komentára potvrdi» iba svoj prvý komentár. Ostatné komentáre s rovnakým menom a e-mailovou adresou nebudú vy¾adova» potvrdenie.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ONCE', 'Potvrdi» prvý');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ALWAYS', 'Potvrdi» ka¾dý');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL', 'V krátkosti Vám bude doruèený e-mail, pomocou ktorého mô¾ete potvrdi» Vá¹ komentár.');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_INFO', 'Na pridanie komentára sa vy¾aduje potvrdenie pomocou e-mailu. Po odoslaní formulára s komentárom Vám bude zaslaný e-mail, pomocou ktorého dokonèíte pridanie komentára.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER', 'Antispamový server');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER_DESC', 'Na ktorom serveri je zaregistrovaný vy¹¹ie uvedený kµúè? Anonymne znamená, ¾e údaje posielané webovej slu¾be neobsahujú pou¾ívateµské meno a e-mailovú adresu. Aj táto voµba zni¾uje mno¾stvo spamu, i keï nie a¾ tak dobre, ako neanonymne.');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS', 'TypePad Antispam');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET', 'pôvodný Akismet');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS_ANON', 'TypePad Antispam (anonymne)');
@define('PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET_ANON', 'pôvodný Akismet (anonymne)');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE', 'Vylúèi» adresy URL z overenia IP adresy');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE_DESC', 'Adresy URL, pri ktorých sa nemá overova» IP adresa. ' . PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);

