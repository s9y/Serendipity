<?php #

/**
 *  @version  1381
 *  @file lang_en.inc.php 1381 2006-08-15 10:14:56Z elf2000
 *  @author Henrik Schack <henrik@schack.dk>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'Spamblock');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'Et udvalg af værktøjer til at undgå kommentar spam');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'Spam beskyttelse: Invalid besked.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'Spam beskyttelse: Du kan ikke gemme 2 kommentarer så hurtigt efter hinanden.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'Denne blog har nødlukket for kommentarfunktionaliteten. kom igen en anden gang');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'Tillad ikke kopier af kommentarer');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'Tillad ikke at brugere kan gemme en kommentar med samme indhold som en eksisterende kommentar');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'Nødlukning af kommentar funktionalitet');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'Midlertidig nødlukning af kommentarer til alle artikler. Kan bruges ved spamangreb.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'IP blokerings interval');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'Hvor mange minutter skal der gå mellem den samme ipadresse kan gemme en kommentar.  Dette kan forhindre spamoversvømmelse');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Aktiver CAPTHA billeder');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Kræver at brugeren indtaster en tilfældig tekst som vises i et specielt tegnet stykke grafik (CAPTHA). Dette kan forhindre robotter i at gemme kommentarer i din blog. Bemærk at svagtseende kan have problemer med at læse teksten i grafikken.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'Indtast venligst teksten du kan se i CAPTHA billedet i indtastningsfeltet, dette er nødvendigt for at forhindre robotter i at lave kommentarspam. Din kommentar vil kun blive gemt såfremt du indtaster den rigtige tekst. Det er også et krav at din browser accepterer cookies.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'Indtast teksten du kan se her i indtastningsfeltet!');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'Indtast teksten fra CAPTHA billedet herover: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'Du indtastede ikke den samme tekst som vist i CAPTHA billedet. Se på billedet og indtast den rigtige tekst.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captchas er ikke aktiveret på din server. GDLib and freetype bibliotekerne skal kompiles i PHP, og de nødvendige TTF filer forefindes i dit bibliotek.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'Anvend CAPTHA billeder efter givent antal dage');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'CAPTHA billeder kan gøres obligatoriske efter en artikel har nået en bestemt alder. Indtast hvor gammel en artikel skal være før de aktiveres. 0 betyder de altid er aktive.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'Automatisk kommentar moderering efter givent antal dage');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'Kommentarer til artikler kan sættes op således disse skal modereres. Indtast  hvor gamle artikler skal være før kommentarer automatisk modereres. 0 betyder ingen automatisk moderering.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'Hvor mange links før der kræves moderering');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'Når en kommentar indeholder flere end et givent antal links skal kommentaren modereres. 0 betyder at der ikke tælles links.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'Hvor mange links før en kommentar afvises');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'Når en kommentar indeholder flere end et givent antal links kan kommentaren automatisk afvises. 0 betyder der ikke tælles links.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'Din kommentars indhold eller andet, gør at den skal godkendes af ejeren af denne blog før den vil blive vist.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'Baggrundsfarve for CAPTHA billede');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'Indtast RGB værdier: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'Placering af logfil');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'Information om afviste/kommentarer der kræver godkendelse kan skrives i en logfil. En tom streng deaktiverer logning.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'Emergency Comment Blockage');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'Kopi kommentar');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP-blokering');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Forkert CAPTCHA (Indtastet: %s, Forventet: %s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'Automatisk godkendelse efter X dage');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'For mange links');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'For mange links');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'Skjul emailadresser');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'Der vises ingen emailadresser fra brugere der har kommenteret');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'Emailadresser vil udelukkende blive brugt til notificering');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'Vælg logmetode');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'Der kan logges til en database eller en tekstfil');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'Fil (se "logfil" indstilling herunder)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'Database');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'Ingen logning');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'Behandling af kommentarer modtaget via API');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'Denne indstilling afgør hvordan kommentarer modtaget via API kald (Trackbacks, WFW:commentAPI kommentarer) behandles. \'godkend\', kræver at alle kommentarer godkendes. \'afvis\', afviser denne type kommentarer. \'ingen\' bevirker at denne type kommentarer behandles som alle andre.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'godkend');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'afvis');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'API kommentarer (f.eks trackbacks) er ikke tilladt');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'Aktiver ordfilter');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'Søger efter tekststrenge i kommentarer og markerer disse som spam.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'Ordfilter til URL\'er');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'Regulære udtryk er tilladt, adskil strenge med semikolon (;).');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'Ordfilter til forfatter navne');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', 'Regulære udtryk er tilladt, adskil strenge med semikolon (;).');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'Ordfilter til kommentar tekst');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'Ugyldig emailadresse');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'Check emailadresser?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'Krævede kommentar felter');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'Indtast liste af krævede felter som skal udfyldes i forbindelse med en kommentar. Adskil felter med ",". Følgende felter kan anvendes: name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'Du indtastede ikke %s feltet!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Indstil Antispam metoder');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Bloker denne forfatter vha Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Bloker denne URL vha Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Fjern blokering af denne forfatter vha Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Fjern blokering af denne URL vha Spamblock plugin');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Indhold = titel kommentar');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Afvis kommentarer hvor indholdet er det samme som titel');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'Check trackback URL\'er');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'Tillad kun trackbacks hvis URL indeholder et link til din blog');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'Ugyldig trackback URL.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'Stærkere CAPTCHAS');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'Deaktiver spamblok for forfattere');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'Tillad at forfattere i følgende brugergrupper kan skrive kommentarer uden at disse checkes af spamblock.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API nøgle');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com er en central anti-spam og blacklistings server. Den kan analysere nye kommentarer på din blog og checke om disse er blevet registreret som spam. Akismet blev udviklet specielt til WordPress, men kan også anvendes af andre systemer. Du kan få en API nøgle fra http://www.akismet.com ved at registrere en konto på http://www.wordpress.com/. Indtaster du ikke noget i dette felt anvendes Akismet ikke.');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'Hvordan skal Akismet-genkendt spam behandles');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Filtreret af Akismet.com blackliste');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'Hvad skal der ske med kommentarer som auto-modereres?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'Hvad skal der ske med trackbacks som auto-modereres?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', 'Trackback moderering efter givent antal dage');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'Du kan vælge moderering af alle trackbacks til artikler. Indtast hvor gammel en artikel skal være før trackbacks automatisk modereres. 0 betyder ingen automatisk moderering.');

