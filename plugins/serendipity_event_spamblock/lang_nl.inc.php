<?php #

/**
 *  @version  1112
 *  @author Erwin Ravau <erwin@ravau.net>
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Spam Protector');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Verschillende manieren om spam tegen te gaan');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Spam Preventie: Niet toegelaten boodschap.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Spam Preventie: Je kan niet zo snel 2 commentaren na elkaar posten.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Deze blog staat in nood-commentaar-stop mode wegens een spamaanval.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Dubbele commentaren zijn niet toegelaten');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Laat bezoekers niet toe een commentaar te posten met dezelfde inhoud als een reeds gepost commentaar.');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Nood-comment-stop');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Laat tijdelijk geen comments toe. Handig wanneer je blog onder een spam attack staat.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'IP block interval');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Laat een IP adres enkel toe X commentaren per minuut te posten, handig voor spam floods.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Zet Captchas aan');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Verplicht bezoekers een reeks letters te herhalen die uit een plaatje komen. Handig om geautomatiseerde posts tegen te gaan. Denk eraan dat bezoekers met verminderd zicht dit soms moeilijk kunnen uitvoeren.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'Om het posten door robots tegen te gaan, gelieve de letters die je in het plaatje ziet over te typen. Je commentaar wordt enkel gepost wanneer de letters overeen komen. Je browser dient cookies te ondersteunen (standaard staat dit aan), of je commentaar kan niet geverifieerd worden.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Typ de letters die je hier zien in het input veld.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Typ de letters van het plaatje hierboven ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'De letters werden niet correct ingevoerd. Typ nogmaals de letters over.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captchas werden afgezet. Je hebt GDLib nodig en freetype libraries gecompileerd met PHP. De .TTF bestanden dienen in je directory te staan.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Forceer captchas na hoeveel dagen');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Captchas kunnen worden geactiveerd afhankelijk van het aantal dagen dat je artikels werden gepost. Vul het aantal dagen in na hoelang je bezoekers hiermee worden geconfronteerd. Indien het op 0 staat, staan captchas altijd aan.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Forceer moderatie na hoeveel dagen');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Je kan moderatie altijd laten gelden. Vul het aantal dagen na welke een artikel dient te worden gemodereerd. 0 betekent geen moderatie.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Hoeveel links voordat een artikel dient gemodereerd?');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Wanneer een commentaar een aantal links bezit kan het automatisch verplicht worden gemodereerd. 0 betekent geen link checking.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Hoeveel links voordat een artikel automatisch wordt afgekeurd?');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Wanneer een commentaar een aantal links bezit kan het automatisch worden afgekeurd. 0 betekent geen link checking.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Er werd aan een aantal voorwaarden voldaan waarvoor je comment wordt gemodereerd door de eigenaar van deze blog');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Achtergrondkleur van de captcha');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Vul RGB waarden in: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Logbestand lokatie');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Informatie over geweigerde of gemodereerde commentaren kan worden gelogd naar een bestand. Geef een lege waarde in om loggen af te zetten.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Nood commentaar block');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Commentaar duplicaat.');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-block');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Captcha (ongeldig) Ingevoerd: %s, Verwacht: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Auto-moderatie na X dagen');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'Teveel hyperlinks');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'Teveel hyperlinks');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Verberg email adressen van commentaargevers');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Email adres van commentaargevers worden niet getoond.');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'Email adressen worden niet getoond en zijn alleen zichtbaar voor de blogger.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Kies logmethode');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Loggen van geweigerde commentaren kan naar een bestand of de database.');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Bestand (zie "logfile" optie hieronder)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Database');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Geen Logging');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Hoe API comments behandelen?');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Dit slaat op comments via de API (Trackbacks, WFW:commentAPI comments). Indien  "moderate", zullen al deze commentaren moeten worden goedgekeurd. "reject" betekend dat ze niet zijn toegelaten. Indien "none", zullen ze worden behandeld als reguliere comments.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'moderate');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'reject');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'Geen API comments toegelaten');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Activeer woordfilter');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Zoekt in commentaren naar bepaalde woorden en behandel ze als spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Woordfilter voor URLs');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Regular Expressions toegelaten, strings scheiden door puntkommas (;). In plaats van @ moet \\@ geschreven worden.');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Woordfilter voor auteursnamen');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Woordfilter voor commentaar inhoud');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'Woordfilter voor E-mail');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Email adres niet correct');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Verifieer emailadressen?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Verplichte velden?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Geef de lijst van verplichte velden in die een bezoeker moet invullen. Veldnamen scheiden door een komma ",". Veldnamen zijn: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Je gaf het verplichte %s veld niet in!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Configureer antispam methoden');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Blokkeer deze auteur via de Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Blokkeer deze URL via de Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'Blokkeer deze E-mail via de Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Deblokkeer deze auteur via de Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Deblokkeer deze URL via deSpamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'Deblokkeer deze E-mail via deSpamblock plugin');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Titel is dezelfde als het commentaar');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Weiger commentaar waarbij de titel dezelfde is als de inhoud.');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Controleer Trackback URLs');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Laat enkel trackbacks toe die een link naar je blog bevatten.');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Trackback URL ongeldig.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Scrambled Captchas');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Deblokkeer spamblock voor auteurs');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Je kan auteurs in bepaalde groepen buiten de spamblock plugin laten werken.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API Key');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com is een centrale antispam en blacklist server. Het kan je inkomende commentaar verifieren op spam. Akismet werd ontwikkeld voor WordPress, maar kan door andere systemen gebruikt worden. Je dient enkel een API sleutel van http://www.akismet.com te verkrijgen door te registeren op http://www.wordpress.com/ Indien deze key leeg is, wordt Askimet niet gebruikt.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Hoe Akismet gereporteerde spam behandelen?');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Gefilterd door Akismet.com Blacklist');

