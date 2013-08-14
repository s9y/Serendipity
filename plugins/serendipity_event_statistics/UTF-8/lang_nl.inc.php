<?php #

/**
 *  @version  762
 *  @file lang_nl.inc.php 762 2005-12-08 10:29:06Z garvinhicking
 *  @author Jeffrey Lankamp
 *  NL-Revision: Revision of lang_nl.inc.php
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statistieken');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Voegt een link toe aan het controlepaneel waar je interessante statistieken kunt lezen');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statistieken');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'Eerste artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Meest recente artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Totaal aantal artikelen');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'artikelen');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... publiek');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... drafts');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Artikelen per gebruiker');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Categorieen');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'categorieen');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Distributie van artikelen');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'artikelen');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Geuploade afbeeldingen');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'afbeelding(en)');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Distributie van afbeelding-types');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'bestand(en)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Ontvangen reacties');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'reacties');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Artikelen met de meeste reacties');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Mensen die het meest reageren');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'link');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Abonnees');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'abonnees');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Artikelen waarop het meest geabonneerd wordt');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'abonnees');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Ontvangen trackbacks');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Artikelen met de meeste trackbacks');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Mensen die de meeste trackbacks uitvoeren');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'gemiddeld aantal reacties per artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'gemiddeld aantal trackbacks per artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'gemiddeld aantal artikelen per dag');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'gemiddeld aantal artikelen per week');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'gemiddeld aantal artikelen per maand');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'reacties/artikelen');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'trackbacks/artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'artikelen/dag');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'artikelen/week');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'artikelen/maand');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Totaal aantal karakters');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'Karakters');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Karakters per artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'Karakters/artikel');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', 'De %s langste artikelen');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Maximum aantal items');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'Hoeveel items weer te geven per statistische waarde? (Standaard: 20)');

//Taal constanten voor de Uitgebreide Bezoekers Statistieken
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Uitgebreide Bezoekers Statistieken');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', '"Uitgebreide Bezoekers Statistieken" optie toevoegen? (Standaard: nee)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'Nee!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'Ja, aan de onderkant van de pagina');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'Ja, aan de bovenkant van de pagina');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Aantal bezoekers');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Aantal bezoekers vandaag');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Totaal aantal bezoekers');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'De "Uitgebreide Bezoekers Statistieken" optie houd gegevens bij sinds');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Meest recente bezoekers');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Top Referrers');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'Er staan momenteel geen referrers geregistreerd.');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Uitgebreide Bezoekers Statistieken');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Sluit browsers uit van telling');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Voer de browsers in de moeten worden uitgesloten van telling, gescheiden door "|"');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Laat de datum zien van het meest recente artikel');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Laat het aantal artikelen zien');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Laat het aantal reacties zien');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Laat het aantal bezoekers deze maand zien');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Cache timeout');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'Hoe lang mogen de statistieken getoond worden voordat ze worden vernieuwd? Het zetten van deze optie op een hoog aantal minuten zal de werking ten goede komen, maar geeft bij een te hoog aantal minuten niet de actuele data weer.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Formattering van de tekst');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Gebruik %s als plaatshouder voor het nummer/de tekst');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Meest recente artikel: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s artikelen geschreven');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s gegeven reacties');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s Bezoeker(s) deze maand');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Geef het aantal actuele bezoekers weer (van de laatste 15 minuten)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s bezoeker(s) online');

