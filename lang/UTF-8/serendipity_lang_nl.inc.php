<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (2004) by Christiaan Heerze <christiaan@247chon.com>
# http://www.247chon.com
# (c) 2007 Sam Geeraerts <samgee@elmundolibre.be>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'nl_BE.UTF-8, nl_BE.UTF-8, dutch, nl_BE, nl');
@define('DATE_FORMAT_ENTRY', '%A, %e %B %Y');
@define('DATE_FORMAT_SHORT', '%d-%m-%Y %H:%M');
@define('WYSIWYG_LANG', 'nl-utf');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Type');
@define('PREVIEW', 'Voorvertoning');
@define('DATE', 'Datum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Uiterlijk');
@define('LOGIN', 'Aanmelden');
@define('LOGOUT', 'Afmelden');
@define('LOGGEDOUT', 'Afgemeld.');
@define('CREATE', 'Aanmaken');
@define('BACK', 'Terug');
@define('FORWARD', 'Verder');
@define('ANONYMOUS', 'Anoniem');
@define('RECENT', 'Recentelijk...');
@define('OLDER', 'Ouder...');
@define('DONE', 'Gedaan');
@define('TITLE', 'Onderwerp');
@define('DESCRIPTION', 'Beschrijving');
@define('PLACEMENT', 'Placement');
@define('DELETE', 'Verwijderen');
@define('SAVE', 'Opslaan');
@define('UP', 'OP');
@define('DOWN', 'NEER');
@define('PREVIOUS', 'Vorige');
@define('NEXT', 'Volgende');
@define('ENTRIES', 'artikelen');
@define('CATEGORIES', 'Categorieën');
@define('NAME', 'Naam');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Homepage');
@define('COMMENT', 'Reactie');
@define('VIEW', 'Bekijk');
@define('HIDE', 'Verbergen');
@define('WEEK', 'Week');
@define('WEEKS', 'Weken');
@define('MONTHS', 'Maanden');
@define('DAYS', 'Dagen');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Succes');
@define('COMMENTS', 'Reacties');
@define('ADD_COMMENT', 'Reactie toevoegen');
@define('NO_COMMENTS', 'Geen reacties');
@define('POSTED_BY', 'Geplaatst door');
@define('ON', 'op');
@define('NO_CATEGORY', 'Geen categorie');
@define('CATEGORY', 'Categorie');
@define('EDIT', 'Bewerk');
@define('GO', 'Uitvoeren!');
@define('YES', 'Ja');
@define('NO', 'Nee');
@define('NOT_REALLY', 'Nee');
@define('DUMP_IT', 'Ja');
@define('IN', 'in');
@define('AT', 'op');
@define('LEFT', 'links');
@define('RIGHT', 'rechts');
@define('CENTER', 'center');
@define('ARCHIVES', 'Archief');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Zoeken');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Geen Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Uittreksel');
@define('TRACKED', 'Gevolgd');
@define('USER', 'Gebruiker');
@define('USERNAME', 'Gebruikersnaam');
@define('PASSWORD', 'Wachtwoord');
@define('HIDDEN', 'verborgen');
@define('IMAGE', 'Afbeelding');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Auteur');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'versie');
@define('INSTALL', 'Installeren');
@define('REPLY', 'Beantwoorden');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Fout');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Forceer');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Beheerder');
@define('ADMIN_FRONTPAGE', 'Voorpagina');
@define('QUOTE', 'Citaat');
@define('NONE', 'geen');
@define('GROUP', 'Groep');
@define('AUTHORS', 'Auteurs');
@define('UPGRADE', 'Bijwerken');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Alle auteurs');
@define('PREVIOUS_PAGE', 'vorige pagina');
@define('NEXT_PAGE', 'volgende pagina');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Alle categorieën');
@define('LAST_UPDATED', 'Laatst bewerkt');
@define('IP_ADDRESS', 'IP-adres');
@define('CHARSET', 'Tekenset');
@define('REFERER', 'Verwijzer');
@define('APPROVE', 'Goedkeuren');
@define('NOT_FOUND', 'Niet gevonden');
@define('WRITABLE', 'Beschrijfbaar');
@define('NOT_WRITABLE', 'Niet beschrijfbaar');
@define('WELCOME_BACK', 'Welkom terug,');
@define('USE_DEFAULT', 'Standaard');
@define('SORT_BY', 'Sorteren op');
@define('SORT_ORDER', 'Sorteervolgorde');
@define('SORT_ORDER_ASC', 'Oplopend');
@define('SORT_ORDER_DESC', 'Aflopend');
@define('FILTERS', 'Filters');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Alles uit- of inklappen');
@define('TOGGLE_OPTION', 'Uit-/inklappen');
@define('IN_REPLY_TO', 'Reactie op');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Map');
@define('BACK_TO_BLOG', 'Terug naar het Weblog');
@define('HTML_NUGGET', 'HTML-blokje');
@define('TITLE_FOR_NUGGET', 'Titel van het blokje');
@define('COMMENT_ADDED', 'Uw reactie is succesvol toegevoegd. ');
@define('ENTRIES_FOR', 'Artikelen van %s');
@define('NO_ENTRIES_TO_PRINT', 'Er zijn geen artikelen om weer te geven');
@define('COMMENT_DELETE_CONFIRM', 'Weet u zeker dat u de reactie #%d, geschreven door %s, wilt verwijderen?');
@define('DELETE_SURE', 'Weet u zeker dat u artikel #%s definitief wilt verwijderen?');
@define('MEDIA_FULLSIZE', 'Volledige grootte');
@define('SIDEBAR_PLUGIN', 'zijbalkplugin');
@define('EVENT_PLUGIN', 'evenementenplugin');
@define('PLUGIN_ITEM_DISPLAY', 'Waar moeten de items worden weergegeven?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Alleen bij uitgebreide artikelen');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Alleen bij overzichtspagina');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Altijd');
@define('DIRECTORY_WRITE_ERROR', 'Kan niet schrijven naar map %s. Controleer de toegangsrechten.');
@define('FILE_WRITE_ERROR', 'Kan niet schrijven naar bestand %s.');
@define('INCLUDE_ERROR', 'Fout: Kan %s niet invoegen - wordt afgesloten.');
@define('DO_MARKUP', 'Voer tekstopmaakveranderingen uit');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Datumformaat');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'De echte datum van het artikel, gebruikmakend van PHPs strftime()-variabelen. (Standaard: "%s")');
@define('APPLY_MARKUP_TO', 'Tekstopmaak toepassen op %s');
@define('XML_IMAGE_TO_DISPLAY', 'Verzamelpublicatieafbeelding');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Deze afbeelding wordt getoond bij hyperlinks naar verzamelpublicaties. Laat het veld leeg voor de standaardinstellingen, voer \'none\' in om het uit te schakelen.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Bestand %s aan het verwijderen...');
@define('SETTINGS_SAVED_AT', 'De instellingen zijn opgeslagen in %s');
@define('INVERT_SELECTIONS', 'Keer selectie om');

@define('PERSONAL_SETTINGS', 'Persoonlijke instellingen');
@define('DO_MARKUP_DESCRIPTION', 'Voer tekstopmaak uit (smilies, verkort opmaak via *, /, _, ...). Met het uitschakelen van deze optie behoudt u de HTML-code in de tekst.');
@define('BASE_DIRECTORY', 'Basismap');
@define('PERM_READ', 'Leesrechten');
@define('PERM_WRITE', 'Schrijfrechten');
@define('PERM_DENIED', 'Toegang geweigerd.');
@define('CURRENT_AUTHOR', 'Huidige auteur');
@define('PLUGIN_ACTIVE', 'Actief');
@define('PLUGIN_INACTIVE', 'Inactief');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Maak een bladwijzer van deze hyperlink en gebruik het dan bij elke website waarover je wilt schrijven om snel toegang te krijgen tot je weblog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity Installatie');
@define('WELCOME_TO_INSTALLATION', 'Welkom bij de Serendipity-installatie');
@define('FIRST_WE_TAKE_A_LOOK', 'Eerst bekijken we uw huidige instellingen en zullen zo compatibiliteitsproblemen opsporen');
@define('ERRORS_ARE_DISPLAYED_IN', 'Alle fouten worden weergeven in %s, aanbevelingen in %s en voltooide taken in %s');
@define('RED', 'rood');
@define('YELLOW', 'geel');
@define('GREEN', 'groen');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s pre-installatiebericht');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP-installatie');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Besturingssysteem');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini-configuratie');
@define('RECOMMENDED', 'Aanbevolen');
@define('ACTUAL', 'Huidig');
@define('PERMISSIONS', 'Toegangsrechten');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Toegangsrechten kunnen gezet worden met het volgende commando: `<em>%s</em>` op de mislukte map, of via een FTP-programma');
@define('PROBLEM_DIAGNOSTIC', 'Door een ernstig probleem kunt u niet doorgaan met de installatie totdat u de bovenstaande fouten gecorrigeerd heeft');
@define('SELECT_INSTALLATION_TYPE', 'Selecteer welk installatietype u wenst');
@define('RECHECK_INSTALLATION', 'Installatie opnieuw controleren');
@define('SIMPLE_INSTALLATION', 'Eenvoudige installatie');
@define('EXPERT_INSTALLATION', 'Geavanceerde installatie');
@define('COMPLETE_INSTALLATION', 'Complete installatie');
@define('WONT_INSTALL_DB_AGAIN', 'zal de databank niet opnieuw installeren');
@define('THEY_DO', 'positief');
@define('THEY_DONT', 'negatief');
@define('CHECK_DATABASE_EXISTS', 'Controleer de databank op aanwezigheid van de nodige tabellen');
@define('CREATE_DATABASE', 'Standaarddatabank aanmaken...');
@define('ATTEMPT_WRITE_FILE', 'Bestand %s proberen aan te maken...');
@define('CREATING_PRIMARY_AUTHOR', 'Hoofdauteur \'%s\' aan het aanmaken');
@define('SETTING_DEFAULT_TEMPLATE', 'Standaardtemplate aan het instellen');
@define('INSTALLING_DEFAULT_PLUGINS', 'Standaardplugins aan het installeren');
@define('SERENDIPITY_INSTALLED', 'Serendipity is met succes geïnstalleerd');
@define('VISIT_BLOG_HERE', 'Bezoek uw weblog hier');
@define('THANK_YOU_FOR_CHOOSING', 'Dank u voor het gebruiken van Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Een fout is aangetroffen in de installatie');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Aangedreven door');
@define('ADMIN_FOOTER_POWERED_BY', 'Aangedreven door Serendipity %s en PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standaardredacteur');
@define('USERLEVEL_CHIEF_DESC', 'Hoofdredacteur');
@define('USERLEVEL_ADMIN_DESC', 'Beheerder');
@define('WWW_USER', 'Verander gebruiker \'www\' in de gebruiker die de apache-server draait (bijvoorbeeld nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Map %s bestaat niet en kon niet worden aangemaakt. Maak deze alstublieft handmatig aan');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; voer <i>%s %s</i> uit');
@define('CANT_EXECUTE_BINARY', 'Kan opdracht %s niet uitvoeren');
@define('FILE_CREATE_YOURSELF', 'Maak zelf het bestand aan of controleer de toegangsrechten');
@define('COPY_CODE_BELOW', '<br />* Kopieer de onderstaande code en voeg deze toe aan het bestand %s in de map %s:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Herlaad daarna de pagina.');
@define('ERROR_TEMPLATE_FILE', 'Kan de template niet openen, werk alstublieft Serendipity bij!');
@define('HTACCESS_ERROR', 'Om de installatie van uw webserver te controleren moet Serendipity kunnen schrijven naar het bestand ".htaccess". Dit was helaas niet mogelijk vanwege verkeerde toegangsrechten. Pas deze alstublieft als volgt aan: <br />&nbsp;&nbsp;%s<br />en laad deze pagina opnieuw.');
@define('EMPTY_SETTING', 'U heeft geen geldige waarde opgegeven voor "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity heeft ontdekt dat u uw configuratie wilt bijwerken van versie %s naar versie %s. <a href="%s">Klik hier</a> om dat proces te voltooien.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Hallo en welkom bij de Serendipity bijwerkassistent.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Ik zal u helpen uw Serendipity %s-installatie bij te werken.');
@define('SERENDIPITY_UPGRADER_WHY', 'U krijgt deze melding te zien omdat u zojuist Serendipity %s geïnstalleerd heeft, maar uw databank nog niet bijgewerkt is naar deze versie');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Databankupdates (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'De volgende .sql-bestanden moeten uitgevoerd worden voordat Serendipity normaal verder kan functioneren');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Taken specifiek voor deze versie');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Geen specifieke taken gevonden voor deze versie');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Wilt u dat ik de bovenstaande taken uitvoer?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nee, ik voer ze zelf uit');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ja, graag');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'U hoeft niets bij te werken');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity is bijgewerkt');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'U heeft ervoor gekozen om niets bij te werken. Zorg ervoor dat uw databank goed geïnstalleerd is en geplande taken uitgevoerd worden');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Uw Serendipity-installatie is nu bijgewerkt naar versie %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'U kunt terugkeren naar uw weblog door %shier%s te klikken');
@define('ADMIN_ENTRIES', 'Artikelen');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Kan geen verbinding maken met de volgende MySQL-databank: %s.');
@define('COULDNT_SELECT_DB', 'Kan de volgende databank niet selecteren: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Kan de volgende gebruikersinformatie niet selecteren: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Kan de volgende categorie niet selecteren: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Kan de volgende artikelen niet selecteren: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Kan de volgende reacties niet selecteren: %s.');
@define('MYSQL_REQUIRED', 'U moet een MySQL-verbinding hebben om deze actie te voltooien.');
@define('CREATE_AUTHOR', 'Maak auteur \'%s\' aan.');
@define('CREATE_CATEGORY', 'Maak categorie \'%s\' aan.');
@define('MT_DATA_FILE', 'Movable Type databestand');
@define('INSTALL_DBPORT', 'Databankpoort');
@define('INSTALL_DBPORT_DESC', 'De poort waarop de databankserver draait');
@define('IMPORT_PLEASE_ENTER', 'Voer hieronder de nodige gegevens in');
@define('IMPORT_NOW', 'Importeer nu!');
@define('IMPORT_STARTING', 'Starten met importeren...');
@define('IMPORT_FAILED', 'Importeren niet gelukt');
@define('IMPORT_DONE', 'Importeren succesvol uitgevoerd');
@define('IMPORT_WEBLOG_APP', 'Weblogapplicatie');
@define('IMPORT_NOTES', 'Opmerking:');
@define('IMPORT_STATUS', 'Status na importeren');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Voeg alle geïmporteerde teksten in de "Artikeltekst"-sectie en splits deze niet op naar de "Uitgebreide tekst"-sectie.');
@define('IMPORT_GENERIC_RSS', 'Generische RSS-import');
@define('ACTIVATE_AUTODISCOVERY', 'Verstuur trackbacks naar hyperlinks gevonden in dit artikel');
@define('RSS_IMPORT_CATEGORY', 'Gebruik deze categorie voor artikelen met een onbekende categorie');
@define('IMPORT_WP_PAGES', 'Ook bijlagen en statische pagina\'s als gewone artikelen ophalen?');
@define('DOCUMENT_NOT_FOUND', 'Het document %s is helaas niet gevonden.');
@define('CONVERT_HTMLENTITIES', 'Proberen de HTML-entiteiten automatisch om te zetten?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Beheer');
@define('WRONG_USERNAME_OR_PASSWORD', 'Waarschijnlijk heeft u een ongeldige gebruikersnaam of wachtwoord ingevoerd.');
@define('PLEASE_ENTER_CREDENTIALS', 'Voer hieronder uw gegevens in.');
@define('AUTOMATIC_LOGIN', 'Bewaar deze informatie');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'Media');
@define('MEDIA_LIBRARY', 'Mediabibliotheek');
@define('ADD_MEDIA', 'Voeg media toe');
@define('MANAGE_DIRECTORIES', 'Beheer mappen');
@define('CONFIGURATION', 'Configuratie');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Bijkomende Informatie');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity-homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity-documentatie');
@define('FURTHER_LINKS_S9Y_BLOG', 'Officieel weblog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forums');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Dit artikel is nog niet gepubliceerd');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Auteursrecht');
@define('SIDEBAR_PLUGINS', 'Zijbalkplugins');
@define('EVENT_PLUGINS', 'Evenementenplugins');
@define('CONFIGURE_PLUGINS', 'Configureer Plugins');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Server voldoet niet aan de eisen: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Bijwerken naar versie %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Klik hier om een nieuwe %s te installeren');
@define('ALREADY_INSTALLED', 'Reeds geïnstalleerd');
@define('PLUGIN_AVAILABLE_COUNT', 'Totaal: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Bewerk artikelen');
@define('EDIT_ENTRY', 'Bewerk artikel');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Concept');
@define('PUBLISH', 'Publiceren');
@define('CONTENT', 'Inhoud');
@define('ENTRIES_PER_PAGE', 'artikelen per pagina');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Klevend');
@define('PAGE_BROWSE_ENTRIES', 'Pagina %s van %s, totaal %s artikelen');
@define('FIND_ENTRIES', 'Zoek artikelen');
@define('RIP_ENTRY', 'Artikel #%s is verwijderd');
@define('NEW_ENTRY', 'Nieuw artikel');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Artikeltekst');
@define('EXTENDED_BODY', 'Uitgebreide tekst');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Een conceptversie van dit artikel wordt bewaard');
@define('IFRAME_PREVIEW', 'Serendipity maakt nu een voorvertoning van uw artikel aan...');
@define('IFRAME_WARNING', 'Uw browser ondersteunt geen iframes. Open het bestand serendipity_config.inc.php en wijzig de variabele $serendipity[\'use_iframe\'] naar FALSE.');
@define('DATE_INVALID', 'Opgelet: De door u ingevoerde datum is niet correct. Het moet opgegeven worden in het volgende formaat JJJJ-MM-DD hh:mm. Bijvoorbeeld 1970-12-31 14:39');
@define('ADVANCED_OPTIONS', 'Geavanceerde Opties');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'De link is niet bedoeld om aangeklikt te worden. Het bevat een trackback-URL voor dit artikel. U kunt deze URL gebruiken om ping- & trackbacks te versturen van uw weblog naar dit artikel. Om deze URL te kopiëren klikt u met de rechtermuisknop en kiest u voor "Koppelingslocatie kopiëren.');
@define('RESET_DATE', 'Datum terugstellen');
@define('RESET_DATE_DESC', 'Klik hier om de datum en tijd terug te stellen naar de huidige datum en tijd');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Beheer gebruikers');
@define('CREATE_NEW_USER', 'Maak nieuwe gebruiker aan');
@define('CREATE_NOT_AUTHORIZED', 'U kunt geen gebruikers bewerken met hetzelfde gebruikersniveau als uzelf');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'U kunt geen gebruikers aanmaken met een hoger gebruikersniveau dan uzelf');
@define('CREATED_USER', '%s is aangemaakt als nieuwe gebruiker');
@define('MODIFIED_USER', 'De eigenschappen van gebruiker %s zijn gewijzigd');
@define('USER_LEVEL', 'Gebruikersniveau');
@define('WARNING_NO_GROUPS_SELECTED', 'Waarschuwing: u heeft geen enkel groepslidmaatschap geselecteerd. Dit zou u uitloggen uit het groepsbeheer, dus werden uw groepslidmaatschappen niet gewijzigd.');
@define('DELETE_USER', 'U staat op het punt de volgende gebruiker te verwijderen: #%d %s. Weet u zeker dat u deze gebruiker wilt verwijderen? Als u dit doet zullen de artikelen van deze gebruiker niet meer worden weergegeven.');
@define('DELETED_USER', 'Gebruiker #%d %s is verwijderd.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Beheer groepen');
@define('DELETED_GROUP', 'Groep #%d %s is verwijderd.');
@define('CREATED_GROUP', 'Nieuwe groep %s is aangemaakt');
@define('MODIFIED_GROUP', 'De eigenschappen van groep %s zijn veranderd');
@define('CREATE_NEW_GROUP', 'Creëer een nieuwe groep');
@define('DELETE_GROUP', 'U staat op het punt om groep #%d %s te verwijderen. Weet u zeker dat u deze groep wilt verwijderen?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Zoek reacties');
@define('COMMENTS_FILTER_SHOW', 'Tonen');
@define('COMMENTS_FILTER_ALL', 'Alles');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Alleen goedgekeurden');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Wachtend op goedkeuring');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Weet u zeker dat u de geselecteerde reacties wilt verwijderen?');
@define('PAGE_BROWSE_COMMENTS', 'Pagina %s van %s, in totaal %s reactie(s)');
@define('COMMENT_IS_DELETED', '(Reactie verwijderd)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Categorie is opgeslagen');
@define('CATEGORY_ALREADY_EXIST', 'Een categorie met de naam "%s" bestaat al');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Categorie #%s is verwijderd. Aanwezige artikelen zijn verplaatst naar categorie #%s');
@define('CATEGORY_DELETED', 'Categorie #%s is verwijderd.');
@define('INVALID_CATEGORY', 'Er is geen categorie opgegeven om te verwijderen');
@define('EDIT_THIS_CAT', 'Bewerken "%s"');
@define('CATEGORY_REMAINING', ' Verwijder deze categorie en verplaatst de artikelen naar de volgende categorie ');
@define('PARENT_CATEGORY', 'Bovenliggende categorie');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Maak een nieuwe categorie aan');
@define('ALREADY_SUBCATEGORY', '%s is reeds een subcategorie van %s.');
@define('NO_CATEGORIES', 'Geen categorieën');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importeer artikelen');
@define('EXPORT_ENTRIES', 'Exporteer artikelen');
@define('EXPORT_FEED', 'Exporteer volledige verzamelpublicatie');
@define('CREATE_THUMBS', 'Creëer nieuwe indexafbeeldingen');
@define('WARNING_THIS_BLAHBLAH', "WAARSCHUWING:\\nDit kan veel tijd in beslag nemen als er veel grote afbeeldingen zijn zonder miniatuur.");
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' is ingesteld als uw huidige template');
@define('WARNING_TEMPLATE_DEPRECATED', 'Waarschuwing: Uw huidige template gebruikt een oude templatemethode. U wordt aangeraden om dit indien mogelijk bij te werken.');
@define('STYLE_OPTIONS_NONE', 'Deze template heeft geen specifieke opties. Als u wilt weten hoe u opties kunt definiëren voor uw sjabloon, lees dan in de technische documentatie op www.s9y.org het artikel "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Template-opties');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Aangepaste beheersinterface beschikbaar');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Gebruik als template');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Controleren &amp; bewaren');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Verwijder geselecteerde plugins');
@define('SAVE_CHANGES_TO_LAYOUT', 'Bewaar veranderingen in ontwerp');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Bezig met het synchroniseren van de databank met de map waar de afbeeldingen in staan');
@define('SYNC_DONE', 'Gereed (%s afbeeldingen gesynchroniseerd).');
@define('RESIZE_BLAHBLAH', '<b>Vergroten/Verkleinen %s</b>');
@define('ORIGINAL_SIZE', 'Originele grootte: <i>%sx%s</i> pixels');
@define('RESIZING', 'Grootte aanpassen');
@define('RESIZE_DONE', 'Gereed (%s afbeeldingen aangepast).');
@define('KEEP_PROPORTIONS', 'Behoud verhoudingen');
@define('REALLY_SCALE_IMAGE', 'Wilt u de afbeelding echt aanpassen? Dit kan niet ongedaan gemaakt worden!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Hier kunt u de grootte van de afbeelding aanpassen. Als u de afbeeldingsverhoudingen wilt behouden, voer dan in één van de velden een waarde in en druk op de TAB-toets -- Het programma zal dan zelf de andere grootte berekenen zodat de verhoudingen hetzelfde blijven</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nieuwe grootte: ');
@define('SCALING_IMAGE', 'Grootte aanpassen van %s naar %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Map en bestanden werden succesvol verplaatst naar %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Map en bestanden konden niet verplaatst worden naar "%s"!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Map <strong>%s</strong> is aangemaakt.');
@define('PARENT_DIRECTORY', 'Bovenliggende map');
@define('CONFIRM_DELETE_DIRECTORY', 'Weet u zeker dat u de volledige inhoud van map %s wilt verwijderen?');
@define('ERROR_NO_DIRECTORY', 'Fout: Map %s bestaat niet');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Kan een map die nog niet leeg is niet verwijderen. Vink "force deletion" aan als u ook deze bestanden wilt verwijderen en probeer opnieuw. Aanwezige bestanden zijn:');
@define('DIRECTORY_DELETE_FAILED', 'Het verwijderen van map %s is niet gelukt. Controleer de toegangsrechten of de bovenstaande meldingen.');
@define('DIRECTORY_DELETE_SUCCESS', 'Map %s is succesvol verwijderd.');
@define('CHECKING_DIRECTORY', 'Bestanden in map %s aan het controleren');
@define('DELETE_DIRECTORY', 'Verwijder map');
@define('DELETE_DIRECTORY_DESC', 'U staat op het punt om een map te verwijderen met mediabestanden die mogelijk gebruikt worden in uw artikelen.');
@define('FORCE_DELETE', ' Verwijder ALLE bestanden in deze map, inclusief diegenen die niet bekend zijn bij Serendipity');
@define('CREATE_DIRECTORY', 'Maak map');
@define('CREATE_NEW_DIRECTORY', 'Maak nieuwe map');
@define('CREATE_DIRECTORY_DESC', 'Hier kun je een nieuwe map aanmaken om mediabestanden in te plaatsen. Bedenk een naam voor de nieuwe map en kies een optionele bovenliggende map waarin deze geplaatst moet worden.');
@define('ABOUT_TO_DELETE_FILE', 'U staat op het punt om bestand <b>%s</b></p><br/> te verwijderen. Als u dit bestand in een van uw artikelen gebruikt, zal dit leiden tot niet werkende hyperlinks of vermiste afbeeldingen.<br />Weet u zeker dat u door wilt gaan?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Fout: Bestand bestaat al!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Kan bestand <b>%s</b> niet vinden, mogelijk is deze reeds verwijderd.');
@define('ERROR_FILE_FORBIDDEN', 'U bent niet toegestaan om bestanden met actieve inhoud te uploaden');
@define('REMOTE_FILE_NOT_FOUND', 'Het bestand is niet gevonden, weet u zeker dat de URL <b>%s</b> correct is?');
@define('FILE_FETCHED', '%s opgehaald als %s');
@define('FILE_UPLOADED', 'Het bestand %s is succesvol geüpload als %s');
@define('DELETE_FILE_FAIL', 'Kan bestand <b>%s</b> niet verwijderen');
@define('DELETE_FILE', 'Verwijder bestand genaamd <b>%s</b>');
@define('FOUND_FILE', 'Een nieuw of aangepast bestand is gevonden: %s.');
@define('FILENAME_REASSIGNED', 'Automatisch toegewezen nieuwe bestandsnaam: %s');
@define('ERROR_FILE_EXISTS', 'Fout: Nieuwe bestandsnaam is reeds in gebruik, kies een andere!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'gehotlinkt');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Voer een nieuwe naam in voor: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Afbeelding toevoegen...');
@define('THUMB_CREATED_DONE', 'Miniatuur gemaakt.<br/>Gedaan.');
@define('THUMBNAIL_USING_OWN', 'Geen miniatuur aangemaakt voor %s omdat het al klein genoeg is.');
@define('THUMBNAIL_FAILED_COPY', '%s kon niet gekopieerd worden en kan dus niet als miniatuur gebruikt worden!');
@define('DELETE_THUMBNAIL', 'Verwijder miniatuur <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Er is een onbekende fout opgetreden, het bestand is niet verzonden. Misschien is het bestand groter dan uw server toestaat. Controleer dit bij uw provider of bewerk uw php.ini zodat deze grotere bestanden toelaat.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Fout: U kan geen bestanden uploaden die groter zijn dan %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Fout: U kan geen afbeeldingen uploaden die groter zijn dan %s x %s pixels!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Bestand is gehotlinkt.<br />Klaar.');
@define('DELETE_HOTLINK_FILE', 'Verwijder het gehotlinkte bestand met de naam <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Niet uit te voeren: "%s", fout: %s, foutcode : %d');
@define('SKIPPING_FILE_EXTENSION', 'Bestand overgeslagen: %s heeft geen extensie.');
@define('SKIPPING_FILE_UNREADABLE', 'Bestand overgeslagen: %s is niet leesbaar.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Geef dezelfde toegangsrechten aan alle onderliggende mappen');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Ik wil de miniatuur in mijn artikel gebruiken.');
@define('I_WANT_BIG_IMAGE', 'Ik wil de grote afbeelding in mijn artikel gebruiken.');
@define('I_WANT_NO_LINK', ' Ik wil een gewone afbeelding');
@define('I_WANT_IT_TO_LINK', 'Ik wil dat de afbeelding verwijst naar de volgende pagina:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Grootte van de afbeelding');
@define('IMAGE_ALIGNMENT', 'Uitlijning');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Verwijzing');
@define('MEDIA_TARGET', 'Doel voor deze hyperlink');
@define('MEDIA_TARGET_JS', 'Pop-upvenster (met JavaScript, adaptieve grootte)');
@define('MEDIA_ENTRY', 'Alleenstaand artikel');
@define('MEDIA_TARGET_BLANK', 'Pop-upvenster (met target=_blank)');
@define('YOU_CHOSE', 'U koos voor %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Roteer de afbeelding 90 graden tegen de klok in');
@define('IMAGE_ROTATE_RIGHT', 'Roteer de afbeelding 90 graden met de klok mee');
@define('MEDIA_RENAME', 'Hernoem dit bestand');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Bestandsnaam');
@define('SORT_ORDER_EXTENSION', 'Bestandsextensie');
@define('SORT_ORDER_SIZE', 'Bestandsgrootte');
@define('SORT_ORDER_WIDTH', 'Afbeeldingsbreedte');
@define('SORT_ORDER_HEIGHT', 'Afbeeldingshoogte');
@define('SORT_ORDER_DATE', 'Uploaddatum');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Voeg een bestand toe aan uw mediaverzameling:</b><p>Hier kunt u mediabestanden uploaden, of aangeven waar ze zich op het Internet bevinden. Als u geen goede afbeelding kunt vinden, kunt u <a href="https://images.google.com/" target="_blank">zoeken naar afbeeldingen met Google</a>. Bedenk wel dat de meeste afbeeldingen auteursrechtelijk beschermd zijn en u dus toestemming moet vragen om ze te mogen gebruiken.</p><p><b>Selectiemethode:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Voer de URL van een op te halen bestand in:');
@define('ENTER_MEDIA_UPLOAD', 'Selecteer een bestand dat u wilt uploaden:');
@define('SAVE_FILE_AS', 'Sla bestand op als:');
@define('STORE_IN_DIRECTORY', 'Sla op in de volgende map: ');
@define('IMAGE_MORE_INPUT', 'Meer afbeeldingen toevoegen');
@define('ENTER_MEDIA_URL_METHOD', 'Ophaalmethode:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Let op: Als u er voor kiest een hotlink te maken naar een andere website, zorg er voor dat u daarvoor toestemming heeft. Een hotlink maakt het mogelijk dat u illustraties buiten uw website kunt gebruiken, zonder deze lokaal op te slaan.');
@define('FETCH_METHOD_IMAGE', 'Download illustratie naar uw server');
@define('FETCH_METHOD_HOTLINK', 'Hotlink naar server');
@define('GO_ADD_PROPERTIES', 'Wijzig afbeeldingseigenschappen');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Wijzig formaat van de afbeelding');
@define('MEDIA_DELETE', 'Verwijder dit bestand');
@define('FILES_PER_PAGE', 'Bestanden per pagina');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Geen afbeeldingen gevonden');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'alle mappen');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Configuratie geschreven &amp; opgeslagen');
@define('DIAGNOSTIC_ERROR', 'Serendipity heeft fouten gevonden in de door u opgegeven informatie tijdens het uitvoeren van een diagnostisch programma:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Databankinstellingen');
@define('INSTALL_CAT_DB_DESC', 'Hier kunt u de instellingen van uw databank invoeren. Serendipity heeft deze nodig om te functioneren');
@define('INSTALL_DBTYPE', 'Databanktype');
@define('INSTALL_DBTYPE_DESC', 'Databanktype');
@define('INSTALL_DBHOST', 'Databankhost');
@define('INSTALL_DBHOST_DESC', 'De hostnaam van uw databank');
@define('INSTALL_DBUSER', 'Databankgebruiker');
@define('INSTALL_DBUSER_DESC', 'De gebruikersnaam die nodig is om verbinding te maken met uw databank');
@define('INSTALL_DBPASS', 'Databankwachtwoord');
@define('INSTALL_DBPASS_DESC', 'Het wachtwoord behorend bij de ingevoerde gebruikersnaam');
@define('INSTALL_DBNAME', 'Databanknaam');
@define('INSTALL_DBNAME_DESC', 'De naam van uw databank');
@define('INSTALL_DBPREFIX', 'Databankvoorvoegsel');
@define('INSTALL_DBPREFIX_DESC', 'Het voorvoegsel voor de tabelnamen, bijvoorbeeld serendipity_');
@define('INSTALL_DBPERSISTENT', 'Gebruik altijd openstaande verbindingen');
@define('INSTALL_DBPERSISTENT_DESC', 'Laat de verbinding met uw databank openstaan. Lees meer hierover op de (<a href="https://php.net/manual/features.persistent-connections.php" target="_blank">PHP-website</a>). Dit wordt niet aangeraden');
@define('INSTAL_DB_UTF8', 'DB-tekensetconversie aanzetten');
@define('INSTAL_DB_UTF8_DESC', 'Stuurt een MySQL-"SET NAMES"-query met de gewenste tekenset naar de databank. Wijzig deze optie als u rare tekens ziet in uw weblog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Paden');
@define('INSTALL_CAT_PATHS_DESC', 'Diverse paden naar essentiële mappen en bestanden. Paden naar mappen moeten eindigen met een slash!');
@define('INSTALL_FULLPATH', 'Volledig pad');
@define('INSTALL_FULLPATH_DESC', 'Het volledige absolute pad naar uw Serendipity-installatie');
@define('INSTALL_UPLOADPATH', 'Uploadpad');
@define('INSTALL_UPLOADPATH_DESC', 'Alle uploads worden in deze map geplaatst, relatief ten opzichte van het \'Volledige pad\' - meestal is dit \'uploads/\'');
@define('INSTALL_RELPATH', 'Browserpad');
@define('INSTALL_RELPATH_DESC', 'Het pad naar Serendipity voor gebruik in uw browser, meestal is dit \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Browserpad templates');
@define('INSTALL_RELTEMPLPATH_DESC', 'Het pad naar de templates - gerelateerd aan het \'Browserpad\'');
@define('INSTALL_RELUPLOADPATH', 'Browserpad uploads');
@define('INSTALL_RELUPLOADPATH_DESC', 'Het pad naar uw uploadmap - gerelateerd aan het \'Browserpad\'');
@define('INSTALL_URL', 'URL naar uw weblog');
@define('INSTALL_URL_DESC', 'De URL naar uw Serendipity-installatie');
@define('INSTALL_AUTODETECT_URL', 'Automatisch detecteren van HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Als dit aan staat, dan zal Serendipity er voor zorgen dat de HTTP-Host die werd gebruikt door uw bezoeker gezet zal worden als uw basis-URL. Hierdoor wordt het mogelijk zijn om meerdere domeinnamen te gebruiken voor uw weblog en het domein gebruiken voor alle hyperlinks in uw weblog binnen die sessie.');
@define('INSTALL_INDEXFILE', 'Indexbestand');
@define('INSTALL_INDEXFILE_DESC', 'De naam van uw Serendipity-indexbestand');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permanente hyperlinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Bepaalt diverse URL-patronen om permanente hyperlinks in uw weblog vast te leggen. U wordt geadviseerd op de standaardwaarden te gebruiken. Anders moet u proberen gebruik te maken van de %id%-waarde waar mogelijk, om te voorkomen dat Serendipity in de databank zoekt naar een doel-URL.');
@define('INSTALL_PERMALINK', 'Permanente hyperlink Artikel URL-structuur');
@define('INSTALL_PERMALINK_DESC', 'Hier kunt u de relatieve URL-structuur bepalen, startend van je basis-URL tot waar artikelen beschikbaar worden. U kunt gebruikmaken van de variabelen %id%, %title%, %day%, %month%, %year% en andere karakters.');
@define('INSTALL_PERMALINK_AUTHOR', 'Permanente hyperlink Auteur URL-structuur');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Hier kunt u de relatieve URL-structuur bepalen, startend van je basis-URL tot artikelen van bepaalde auteurs beschikbaar worden. U kunt gebruikmaken van de variabelen %id%, %realname%, %username%, %email% en andere karakters.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permanente hyperlink Categorie URL-structuur');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Hier kunt u de relatieve URL-structuur bepalen, startend van je basis-URL tot de artikelen van bepaalde categorieën beschikbaar worden. U kunt gebruikmaken van de variabelen %id%, %name%, %parentname%, %description% en andere karakters.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permanente hyperlink Verzamelpublicatie Categorie URL-structuur');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Hier kunt u de relatieve URL-structuur bepalen, startend van je basis-URL tot waar de verzamelpublicaties van bepaalde categorieën vrijkomen. U kunt gebruikmaken van de variabelen %id%, %name%, %description% en andere karakters.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permanente hyperlink Verzamelpublicatie Auteur URL-structuur');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Hier definieert u de relatieve URL-structuur vanaf de basis-URL tot waar de verzamelingspublicatieaanvoer van elke gebruiker staat. U kunt de variabelen %id%, %realname%, %username%, %email% en gewone tekens gebruiken.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Pad naar archieven');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Pad naar archief');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Pad naar categorieën');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Pad naar auteurs');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Pad naar stopzetten abonnement reacties');
@define('INSTALL_PERMALINK_DELETEPATH', 'Pad naar verwijderen reacties');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Pad naar goedkeuren reacties');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Pad naar verzamelpublicaties');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Pad naar enkele plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Pad naar admin');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Zoekpad');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Pad naar reacties');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Algemene Instellingen');
@define('INSTALL_CAT_SETTINGS_DESC', 'Pas aan hoe Serendipity zich gedraagt');
@define('INSTALL_USERNAME', 'Gebruikersnaam beheerder');
@define('INSTALL_USERNAME_DESC', 'De gebruikersnaam van de beheerder');
@define('INSTALL_PASSWORD', 'Wachtwoord beheerder');
@define('INSTALL_PASSWORD_DESC', 'Het wachtwoord van de beheerder');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Echte naam');
@define('USERCONF_REALNAME_DESC', 'Volledige naam van de auteur. Dit is de naam die wordt gezien door de lezers');
@define('INSTALL_EMAIL', 'E-mailadres van beheerder');
@define('INSTALL_EMAIL_DESC', 'E-mailadres van de beheerder van het weblog');
@define('INSTALL_SENDMAIL', 'E-mails versturen naar beheerder?');
@define('INSTALL_SENDMAIL_DESC', 'Wilt u een e-mail ontvangen wanneer er een reactie geplaatst is op een van uw artikelen?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Weblognaam');
@define('INSTALL_BLOGNAME_DESC', 'De naam van uw weblog');
@define('INSTALL_BLOGDESC', 'Weblogomschrijving');
@define('INSTALL_BLOGDESC_DESC', 'De omschrijving van het weblog');
@define('INSTALL_BLOG_EMAIL', 'E-mailadres van het weblog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Dit is het e-mailadres dat wordt gebruikt als afzender in uitgaande e-mails. Zorg ervoor dat het herkend wordt door de mail server - veel mail servers verwerpen berichten van een afzender die ze niet kennen.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Taal');
@define('INSTALL_LANG_DESC', 'Selecteer de taal die gebruikt wordt voor uw weblog');
@define('INSTALL_CHARSET', 'Tekensetselectie');
@define('INSTALL_CHARSET_DESC', 'Hier kunt u kiezen tussen UTF-8 en taalafhankelijke (ISO, EUC, ...) tekensets. Sommige talen hebben alleen een UTF-8-vertaling, dus kiezen voor "Taalafhankelijk" heeft dan geen effect. UTF-8 wordt aangeraden voor een nieuwe installatie. Verander deze instelling niet als u al artikelen gemaakt heeft met speciale tekens, dit kan leiden tot corrupte tekens. Lees meer hierover op https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Kalendertype');
@define('INSTALL_CAL_DESC', 'Kies het gewenste kalendertype');
@define('AUTOLANG', 'Laat de bezoeker de taal bepalen');
@define('AUTOLANG_DESC', 'Als dit aan staat, zal de browserinstelling van de bezoeker de taal bepalen van uw artikelen en interface.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Plugintoegangsrechten per groep aan zetten?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Als dit aan staat, kunt u per gebruikersgroep bepalen welke plugins/evenementen uitgevoerd mogen worden.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Uiterlijk en opties');
@define('INSTALL_CAT_DISPLAY_DESC', 'Bepaal het gedrag en uiterlijk van Serendipity');
@define('INSTALL_FETCHLIMIT', 'Artikelen die weergegeven moeten worden');
@define('INSTALL_FETCHLIMIT_DESC', 'Aantal artikelen die weergeven moeten worden per pagina');
@define('INSTALL_RSSFETCHLIMIT', 'Artikelen per toevoer');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Aantal artikelen die getoond worden per pagina van de verzamelpublicatietoevoer.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Verzamelpublicatie moet aan RFC2616 voldoen');
@define('SYNDICATION_RFC2616_DESC', 'RFC2616 NIET afdwingen heeft tot gevolg dat na ontvangst van een Conditional GET Serendipity de artikelen teruggeeft die gewijzigd werden sinds de laatste opvraging. Als deze optie niet actief is, zullen bezoekers alle artikelen krijgen die gewijzigd zijn sinds hun laatste opvraging, wat als positief wordt ervaren. Maar sommige programma\'s, zoals Planet, kunnen zich dan vreemd gedragen omdat ze wel strikt werken volgens RFC2616. Dus als deze optie aan staat, zal je de RFC wel afdwingen, maar dan kunnen lezers van je verzamelpublicatietoevoer artikelen mislopen tijdens hun vakantie. Dus ofwel ondervinden verzamelprogramma\'s zoals Planet er last van, ofwel de mensen die je weblog lezen. Als u klachten krijgt van een van beide partijen kunt u deze optie omschakelen. Referentie: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Maak gebruik van gzip-gecomprimeerde pagina\'s');
@define('INSTALL_USEGZIP_DESC', 'Om de verzending van pagina\'s te versnellen, kunnen de pagina\'s gecomprimeerd worden. Dit is alleen mogelijk als de browser dit ondersteund. Het wordt aangeraden');
@define('INSTALL_XHTML11', 'Forceer XHTML 1.1-compatibiliteit');
@define('INSTALL_XHTML11_DESC', 'Wilt u XHTML 1.1-compatibiliteit forceren? (Dit kan problemen veroorzaken voor oudere browsers)');
@define('INSTALL_POPUP', 'Gebruikmaken van pop-ups');
@define('INSTALL_POPUP_DESC', 'Wilt u gebruikmaken van pop-ups voor reacties, trackbacks e.d.?');
@define('INSTALL_EMBED', 'Is Serendipity geïntegreerd in een andere pagina?');
@define('INSTALL_EMBED_DESC', 'Als u Serendipity wilt integreren in een bestaande pagina, zet deze optie dan op ja om de headers weg laten en gewoon de inhoud weer te geven. Met behulp van de indexbestandoptie kunt u een wikkelklasse gebruiken waarin u de normale webpagina-headers kunt zetten. Bekijk het README-bestand voor meer informatie!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Externe links aanklikbaar maken?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"nee": Ongecontroleerde externe hyperlinks (Top Uitgaande Hyperlinks, Topverwijzers, reacties) worden niet getoond of getoond als gewone tekst om spam vanuit zoekmachines te voorkomen. (aanbevolen). "ja": Ongecontroleerde externe hyperlinks worden gewoon getoond als hyperlinks. De Zijbalkpluginconfiguratie kan dit opheffen!');
@define('INSTALL_TRACKREF', 'Verwijzingen onthouden?');
@define('INSTALL_TRACKREF_DESC', 'Door het onthouden van verwijzingen kunt u zien welke websites naar uw artikelen verwijzen. Dit wordt dikwijls misbruikt voor spam, dus u kunt het best uit zetten als u er last van heeft.');
@define('INSTALL_BLOCKREF', 'Geblokkeerde Verwijzers');
@define('INSTALL_BLOCKREF_DESC', 'Zijn er speciale hosts waarvan u niet wilt dat zij in uw Topverwijzerslijst komen te staan? Scheid de hosts met \';\'');
@define('INSTALL_REWRITE', 'URL Herschrijven');
@define('INSTALL_REWRITE_DESC', 'De regels die gehanteerd worden bij het genereren van URLs. Het inschakelen van deze optie zorgt voor aantrekkelijke URLs, het maakt het makkelijker voor zoekmachines om uw weblog te indexeren. De webserver moet wel mod_rewrite of "AllowOverride All" toestaan in uw Serendipity-map. Standaard staat deze optie op automatisch');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Verschil met servertijd');
@define('INSTALL_OFFSET_DESC', 'Vul het aantal uren in tussen de tijd van uw webserver (huidig: %clock%) en uw gewenste tijdzone');
@define('INSTALL_SHOWFUTURE', 'Toon toekomstige artikelen');
@define('INSTALL_SHOWFUTURE_DESC', 'Als dit is ingeschakeld worden alle artikelen met een publicatiedatum in de toekomst weergeven. Standaard worden alleen artikelen weergegeven waarvan de publicatiedatum al bereikt werd.');
@define('INSTALL_ACL', 'Leesrechten voor categorieën toepassen');
@define('INSTALL_ACL_DESC', 'Als dit aan staat, zijn de gebruikersrechten voor categorieën van kracht als ingelogde gebruikers uw weblog bekijken. In het andere geval is de autorisatie niet van toepassing en wordt uw weblog iets sneller. Dus als u geen aparte leesrechten voor meerdere gebruikers nodig heeft, laat u deze optie best uit.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Geef volledige artikelen weer in de verzamelpublicatie');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Afbeelding voor de RSS-toevoer');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL van een afbeelding in GIF/JPEG/PNG-formaat, indien beschikbaar. (leeg: Serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Breedte van de afbeelding');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'in pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Hoogte van de afbeelding');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'in pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'E-mailadres laten zien?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Veld "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailadres van de beherende redacteur, indien beschikbaar. (leeg: verborgen) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Veld "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailadres van de webmaster, indien beschikbaar. (leeg: verborgen) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Veld "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Aantal minuten waarna uw weblog niet meer gecached mag worden door externe websites/applicaties (leeg: verborgen) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Veld "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Moet het "pubDate"-veld worden geïntegreerd in uw RSS-toevoer, om zo de dag van de laatste artikel te tonen?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Afbeeldingsinstellingen');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Hier kunt u aangeven hoe Serendipity met afbeeldingen moet omgaan');
@define('INSTALL_IMAGEMAGICK', 'Gebruik Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Heeft u Imagemagick geïnstalleerd en wilt u het gebruiken om het formaat van de afbeeldingen aan te passen?');
@define('INSTALL_IMAGEMAGICKPATH', 'Pad naar het conversieprogramma');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Volledig pad en naam van uw Imagemagick-programma convert');
@define('INSTALL_THUMBSUFFIX', 'Achtervoegsel miniaturen');
@define('INSTALL_THUMBSUFFIX_DESC', 'Miniaturen krijgen een naam volgens het formaat: origineel.[achtervoegsel].ext');
@define('INSTALL_THUMBWIDTH', 'Formaat miniaturen');
@define('INSTALL_THUMBWIDTH_DESC', 'Maximale breedte van automatisch aangemaakte miniaturen');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. uploadgrootte bestand');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Geef de maximale bestandsgrootte in bytes bij uploaden. Deze instelling kan herroepen worden door serverinstellingen in php.ini: upload_max_filesize, post_max_size, max_input_time hebben allemaal voorrang op deze instelling. Als u dit leeg laat worden alleen de serverinstellingen gebruikt.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. breedte van afbeeldingen bij uploaden');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Geef de maximale breedte van afbeeldingen in pixels bij uploaden.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. hoogte van afbeeldingen bij uploaden');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Geef de maximale hoogte van afbeeldingen in pixels bij uploaden.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Automatische mediasynchronisatie aan zetten');
@define('ONTHEFLYSYNCH_DESC', 'Als deze optie aan staat, zal Serendipity zelf de mediaverzameling met de bestanden op de server vergelijken en beide synchroniseren.');
@define('MEDIA_DYN_RESIZE', 'Dynamische verandering van afbeeldingsgrootte toelaten?');
@define('MEDIA_DYN_RESIZE_DESC', 'Als deze optie aan staat, kan de mediaselector afbeeldingen van willekeurige grootte teruggeven met behulp van een GET-variabele. De resultaten worden bijgehouden, wat veel opslagruimte kan gebruiken als het veel gebruikt wordt.');
@define('MEDIA_EXIF', 'Importeer EXIF/JPEG-afbeeldingsgegevens');
@define('MEDIA_EXIF_DESC', 'Als dit aan staat, worden bestaande EXIF/JPEG-gegevens van afbeeldingen ingelezen en opgeslagen in de databank om weer te geven in de mediaverzameling.');
@define('MEDIA_PROP', 'Media-eigenschappen');
@define('MEDIA_PROP_DESC', 'Geef een lijst met eigenschapsvelden, gescheiden door een ";", die u wilt definiëren voor elk mediabestand');
@define('MEDIA_PROP_MULTIDESC', '(U kunt ":MULTI" aan een item toevoegen om aan te geven dat het een lange tekst zal bevatten in plaats van slechts enkele tekens)');
@define('MEDIA_KEYWORDS', 'Mediasleutelwoorden');
@define('MEDIA_KEYWORDS_DESC', 'Voer een lijst van woorden in, gescheiden door een ";" die u wilt gebruiken als voorgedefinieerde sleutelwoorden voor mediabestanden.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Uw persoonlijke gegevens');
@define('USERCONF_CAT_PERSONAL_DESC', 'Pas uw persoonlijke gegevens aan');
@define('USERCONF_USERNAME', 'Uw gebruikersnaam');
@define('USERCONF_USERNAME_DESC', 'De gebruikersnaam waarmee in zich aanmeldt op het weblog');
@define('USERCONF_PASSWORD', 'Uw wachtwoord');
@define('USERCONF_PASSWORD_DESC', 'Het wachtwoord waarmee u zich wilt aanmelden op het weblog');
@define('USERCONF_CHECK_PASSWORD', 'Oud wachtwoord');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Als u het wachtwoord wijzigt in het veld hierboven moet u het huidige wachtwoord in dit veld invoeren.');
@define('USERCONF_USERLEVEL', 'Toegangsniveau');
@define('USERCONF_USERLEVEL_DESC', 'Dit niveau wordt gebruikt om te bepalen wat voor soort rechten de gebruiker heeft tot het weblog');
@define('USERCONF_GROUPS', 'Groepslidmaatschap');
@define('USERCONF_GROUPS_DESC', 'Deze gebruiker is lid van de volgende groepen. Lid zijn van meerdere groepen is mogelijk.');
@define('USERCONF_EMAIL', 'Uw e-mailadres');
@define('USERCONF_EMAIL_DESC', 'Uw eigen e-mailadres');
@define('INSTALL_WYSIWYG', 'WYSIWYG-editor gebruiken?');
@define('INSTALL_WYSIWYG_DESC', 'Wilt u de WYSIWYG editor gebruiken? (Werkt met IE5+ en gedeeltelijk met Mozilla 1.3+)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'Bericht bij reacties?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Wilt u een e-mail ontvangen wanneer er reacties geplaatst worden op uw artikelen?');
@define('USERCONF_SENDTRACKBACKS', 'Bericht bij trackbacks?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Wilt u een e-mail ontvangen wanneer er een trackback naar een van uw artikelen is gemaakt?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Toestaan berichten te plaatsen?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Mag deze gebruiker artikelen publiceren?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Toon werkbalk binnen mediaselectiepop-up?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Standaardinstellingen voor nieuwe artikelen');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'OPMERKING: Het attribuut userlevel wordt alleen nog maar gebruikt om compatibiliteitsproblemen met plugins en autorisatie te voorkomen. Gebruikersprivileges worden nu afgehandeld door het groepslidmaatschap!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Het oude wachtwoord dat u heeft ingegeven klopt niet en u bent dus niet geautoriseerd om het wachtwoord te wijzigen. Uw instellingen worden niet bewaard.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'De gebruikersnaam mag niet leeg gelaten worden.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Toegang tot persoonlijke configuratie');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Gebruikersniveaus wijzigen');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Recht op het aanmaken van artikelen wijzigen');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Recht op het publiceren van artikelen wijzigen');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Toegang tot systeemconfiguratie');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Toegang tot weblogconfiguratie');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Artikelen beheren');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Artikelen van anderen beheren');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Artikelen importeren');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Categorieën beheren');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Categorieën van anderen beheren');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Categorieën verwijderen');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Gebruikers beheren');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Gebruikers verwijderen');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Gebruikersniveau veranderen');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Gebruikers in uw eigen groep(en) beheren');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Gebruikers die niet in uw groep(en) zitten beheren');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Nieuwe gebruikers aanmaken');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Groepen beheren');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Plugins beheren');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Plugins van andere gebruikers beheren');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Mediabestanden beheren');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Mappen beheren');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Nieuwe mediabestanden toevoegen');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Mediabestanden verwijderen');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Mediabestanden van anderen beheren');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Mediabestanden bekijken');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Mediabestanden synchroniseren');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Reacties beheren');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Templates beheren');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Mediabestanden van anderen bekijken');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Verboden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Verboden evenementen');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Uw artikel is bewaard');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Samengevoegd');
@define('COMMENTS_VIEWMODE_LINEAR', 'Lineair');
@define('DISPLAY_COMMENTS_AS', 'Geeft reacties weer als');
@define('COMMENTS_DISABLE', 'Sta geen reacties toe op dit artikel');
@define('COMMENTS_ENABLE', 'Sta reacties toe op dit artikel');
@define('COMMENTS_CLOSED', 'De auteur staat geen reacties toe op dit artikel');
@define('VIEW_EXTENDED_ENTRY', 'Ga door met lezen van "%s"');
@define('TRACKBACK_SPECIFIC', 'Trackback-URI voor dit artikel');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'bekijk volledig');
@define('VIEW_TOPICS', 'bekijk onderwerpen');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Onderwerpen bij');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Artikelen zijn niet succesvol ingevoerd!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Informatie onthouden? ');
@define('SUBMIT_COMMENT', 'Reactie plaatsen');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Abonneer op dit artikel');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Uw browser heeft geen geldig HTTP-Referrer-adres verstuurd. Dit kan veroorzaakt worden door een verkeerd geconfigureerde browser/proxy of door een aanval die tegen u is gericht. Uw actie werd geannuleerd.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Reactie #%s is reeds goedgekeurd');
@define('COMMENT_EDITED', 'De reactie is aangepast');
@define('COMMENTS_WILL_BE_MODERATED', 'Ingestuurde reacties zullen eerst worden gecontroleerd voor deze geplaatst worden.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Waarschuwing: Deze reactie moet eerst worden goedgekeurd voor deze wordt weergegeven');
@define('DELETE_COMMENT', 'Verwijder reactie');
@define('APPROVE_COMMENT', 'Keur reactie goed');
@define('REQUIRES_REVIEW', 'Moet nagekeken worden');
@define('COMMENT_APPROVED', 'Reactie #%s is goedgekeurd');
@define('COMMENT_DELETED', 'Reactie #%s is succesvol verwijderd');
@define('COMMENTS_MODERATE', 'Reacties & trackbacks moeten worden gecontroleerd');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Waarschuwing: Deze trackback moet worden goedgekeurd voor hij wordt weergegeven');
@define('DELETE_TRACKBACK', 'Verwijder trackback');
@define('APPROVE_TRACKBACK', 'Keur trackback goed');
@define('TRACKBACK_APPROVED', 'Trackback #%s is goedgekeurd');
@define('TRACKBACK_DELETED', 'Trackback #%s is verwijderd');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Bovenste niveau');
@define('VIEW_COMMENT', 'Bekijk reactie');
@define('VIEW_ENTRY', 'Bekijk artikel');
@define('LINK_TO_ENTRY', 'Link naar artikel');
@define('LINK_TO_REMOTE_ENTRY', 'Link naar extern artikel');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Trackback aan het versturen naar %s...');
@define('TRACKBACK_SENT', 'Trackback succesvol');
@define('TRACKBACK_FAILED', 'Trackback functioneert niet: %s');
@define('TRACKBACK_NOT_FOUND', 'Er is geen trackback-URI gevonden.');
@define('TRACKBACK_URI_MISMATCH', 'De automatisch gedetecteerde trackback-URI komt niet overeen met de URI die u heeft opgegeven.');
@define('TRACKBACK_CHECKING', '<u>%s</u> op mogelijke trackbacks aan het controleren...');
@define('TRACKBACK_NO_DATA', 'Doel bevatte geen gegevens');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Er is geen trackback verzonden: Kan geen verbinding maken met %s via poort %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nieuwe reactie op geabonneerd artikel "%s"');
@define('SUBSCRIPTION_MAIL', "Geachte %s,\n\nEen nieuwe reactie is geplaatst op \"%s\", op artikel \"%s\"\nDe persoon die gereageerd heeft is: %s\n\nU kunt de reactie hier vinden: %s\n\nU kunt zich uitschrijven door op deze hyperlink te klikken: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Geachte %s,\n\nEen nieuwe trackback is toegevoegd op\"%s\", op artikel \"%s\"\nDe persoon die gereageerd heeft is: %s\n\nU kunt het artikel hier vinden: %s\n\nU kunt zich uitschrijven door op deze hyperlink te klikken: %s\n");
@define('SIGNATURE', "\n-- \n%s wordt aangedreven door Serendipity, één van de beste weblogs.\nU kunt het ook gebruiken: ga naar <https://s9y.org> om te ontdekken hoe.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Er is een nieuwe reactie geplaatst op uw weblog "%s", op het artikel getiteld "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Een nieuwe trackback is aangemaakt naar uw weblogartikel getiteld "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'U heeft de volgende opties tot uw beschikking:');
@define('NEW_TRACKBACK_TO', 'Nieuwe trackback gemaakt voor');
@define('NEW_COMMENT_TO', 'Nieuwe reactie op');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Er zijn geen artikelen gevonden voor zoekopdracht %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Uw zoekopdracht naar %s heeft %s zoekresultaten opgeleverd:');
@define('SEARCH_TOO_SHORT', 'Uw zoekopdracht dient uit meer dan 3 tekens te bestaan. Door het toevoegen van * aan woorden, zoals s9y*, kunt u ook naar kortere woorden zoeken.');
@define('SEARCH_ERROR', 'De zoekfunctie werkte niet naar verwachting. Waarschuwing voor de beheerder van dit weblog: dit komt mogelijk door het ontbreken van indexsleutels in de databank. Op MySQL-systemen moet uw databankgebruikersaccount deze bewerking kunnen uitvoeren: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> De foutmelding van de databank is: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Uw reactie bevatte geen tekst, %sga terug%s en probeer opnieuw');
@define('COMMENT_NOT_ADDED', 'Uw reactie kon niet worden toegevoegd omdat reacties op dit artikel niet toegelaten zijn, u ongeldige data heeft ingevoerd of omdat uw reactie geblokkeerd werd door antispammaatregelen.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Reactie van');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Configuratiesyntaxis fout voor optie "%s". Heeft inhoud van het type "%s" nodig.');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Toont de lijst met categorieën.');
@define('CATEGORIES_PARENT_BASE', 'Laat alleen categorieën zien onder...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Kies een categorie waarvan alleen de onderliggende categorieën getoond moeten worden.');
@define('CATEGORIES_HIDE_PARALLEL', 'Verberg categorieën die geen deel uitmaken van de categorieënboom');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Zet deze optie aan als u categorieën wilt verbergen die deel uitmaken van een andere categorieënboom. Dit is vooral nuttig voor een multiblog dat de "Eigenschappen/Templates van categorieën"-plugin gebruikt.');
@define('CATEGORIES_HIDE_PARENT', 'De geselecteerde bovenliggende categorie verbergen?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Als u de lijst van categorieën beperkt tot een bepaalde hoofdcategorie, dan zal standaard die categorie in de lijst getoond worden. Zet deze optie af om de naam van deze categorie niet te tonen.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Smarty-templates aan zetten?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Als deze optie aan staat, zal de plugin de mogelijkheden van Smarty templates benutten om een categorielijst te laten zien. U kunt dan het uitzicht wijzigen met behulp van het bestand "plugin_categories.tpl". Dit heeft wel nadelige gevolgen voor de performantie, dus u laat deze optie best af staan als u geen aanpassingen wilt doen.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Aantal artikelen per categorie tonen?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Bezoekers toestaan om meerdere categorieën tegelijkertijd weer te geven?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Als dit is geactiveerd, dan zal er een aanvinkhokje naast elke categorie geplaatst worden. Gebruikers kunnen deze hokjes aanvinken om zo de artikelen van hun keuze te zien.');
@define('CATEGORIES_TO_FETCH', 'Op te halen categorieën');
@define('CATEGORIES_TO_FETCH_DESC', 'Categorieën op van welke auteur ophalen?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Toont een lijst van auteurs');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Aantal artikelen naast de naam van de auteur tonen?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Deze optie toont tussen haakjes het aantal artikelen van de auteur naast zijn naam.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Toon alleen auteurs met minstens X artikelen');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Verzamelpublicatie');
@define('SHOWS_RSS_BLAHBLAH', 'Toont de hyperlinks voor verzamelpublicatie');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s-toevoer');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91-toevoer');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0-toevoer');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0-toevoer');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0-toevoer reacties');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3-toevoer');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner-ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'Het ID van de toevoer die u wilt publiceren');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner-afbeelding');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Naam van de te tonen afbeelding (of laat deze leeg voor een teller), zoals deze te vinden is op feedburner.com, ex: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner-titel');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Titel (indien ingevuld) die naast de afbeelding getoond wordt');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner-afbeeldingtekst');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Tekst (indien ingevuld) die naast de afbeelding getoond wordt');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('ARCHIVE_COUNT', 'Aantal items in de lijst');
@define('ARCHIVE_COUNT_DESC', 'Het totaal aantal intervallen dat weergegeven moet worden');
@define('ARCHIVE_FREQUENCY', 'Kalenderitemfrequentie');
@define('ARCHIVE_FREQUENCY_DESC', 'Het interval waarin artikelen gegroepeerd worden');
@define('BROWSE_ARCHIVES', 'Blader door het archief per maand');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Toon "Serendipity" als tekst');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Dit laat "Serendipity Weblog" als tekst zien');
@define('POWERED_BY_SHOW_IMAGE', 'Toon "Serendipity" met logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Toont het Serendipity-logo');
@define('ADVERTISES_BLAHBLAH', 'Toont een link waar anderen Serendipity software kunnen downloaden');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Gebruik https om aan te melden');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Laat de aanmelding via https verlopen. Uw webserver moet dit echter wel ondersteunen!');
@define('SUPERUSER', 'Weblogbeheer');
@define('SUPERUSER_OPEN_ADMIN', 'Open beheerscherm');
@define('SUPERUSER_OPEN_LOGIN', 'Open aanmeldscherm');
@define('ALLOWS_YOU_BLAHBLAH', 'Toont een hyperlink naar de beheersectie van uw weblog');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalender');
@define('CALENDAR_BOW_DESC', 'De eerste dag van de week. Standaard is maandag');
@define('QUICKJUMP_CALENDAR', 'Quickjump Kalender');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Begin van de week');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Zet plugin-API-interface aan');
@define('CALENDAR_EXTEVENT_DESC', 'Als deze optie aan staat, kunnen plugins de kalender gebruiken om hun eigen gebeurtenissen te laten zien. Zet dit alleen aan als u plugins geïnstalleerd heeft die dit gebruiken, anders vermindert het gewoon de performantie.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Zoek naar een artikel');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Een stukje waarin u uw eigen HTML-tekst kunt schrijven, deze verschijnt aan de zijkant');
@define('THE_NUGGET', 'Het blokje HTML!');
@define('BACKEND_TITLE', 'Extra informatie in pluginconfiguratiescherm');
@define('BACKEND_TITLE_FOR_NUGGET', 'Hier kunt u een aangepaste tekst definiëren die zal worden weergegeven in het pluginconfiguratiescherm samen met de beschrijving van het HTML-blokje. Als u meerdere HTML-blokjes heeft met een lege titel, dan helpt dit om ze van elkaar te onderscheiden.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Top Uitgaande Hyperlinks/-verwijzers weergeven als hyperlinks?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"nee": Uitgaande Hyperlinks en Verwijzers worden als gewone tekst weergeven om het spammen door zoekmachines te voorkomen. "ja": Uitgaande Hyperlinks en Verwijzers worden getoond als hyperlinks. "standaard": Gebruik de instellingen vanuit uw algemene instellingen (aanbevolen).');
@define('HAVE_TO_BE_LOGGED_ON', 'U moet ingelogd zijn om deze pagina te kunnen bekijken');
@define('WELCOME_TO_ADMIN', 'Welkom bij Serendipity Beheer.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Korte beschrijving');
@define('MEDIA_PROPERTY_COMMENT2', 'Lange beschrijving');
@define('DELETE_SELECTED_ENTRIES', 'Geselecteerde artikelen verwijderen');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titel');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity is nog niet geïnstalleerd. <a href="%s">Installeer</a> het nu alstublieft.');
@define('COMMENT_ADDED_CLICK', 'Keer terug naar de %sreacties%s of %ssluit%s dit scherm.');
@define('COMMENT_NOT_ADDED_CLICK', 'Keer terug naar de %sreacties%s of %ssluit%s dit scherm.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Geassocieerde datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'De URL van de verplaatste map werd aangepast in %s artikelen.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'Op niet-MySQL-databanken is het niet mogelijk om door elk artikel te lopen om de URL van de map te vervangen. U moet manueel in al uw artikelen de URL aanpassen. U kunt de map nog terugplaatsen naar zijn oude locatie als u dit te omslachtig vindt.');
@define('TRACKBACK_SIZE', 'Doel-URI heeft de maximale grootte van %s bytes overschreden.');
@define('CLICK_FILE_TO_INSERT', 'Selecteer het bestand dat u wilt invoegen:');
@define('SELECT_FILE', 'Selecteer bestand om in te voegen');
@define('MANAGE_IMAGES', 'Beheer afbeeldingen');
@define('WORD_NEW', 'Nieuw');
@define('WORD_OR', 'Of');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Gebruikersinterface: Externe Diensten');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Gebruikersinterface: Functionaliteit');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Gebruikersinterface: Volledige Aanpassingen');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Gebruikersinterface: Uitzicht');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Gebruikersinterface: Gerelateerd Aan Artikelen');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Beheer: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Beheer: Gebruikersbeheer');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Beheer: Meta-informatie');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Beheer: Templates');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Beheer: Functionaliteit');
@define('PLUGIN_GROUP_IMAGES', 'Afbeeldingen');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Opmaak/Structuur');
@define('PLUGIN_GROUP_STATISTICS', 'Statistieken');
@define('IMPORT_WELCOME', 'Welkom bij de Serendipity-importeerassistent');
@define('USER_SELF_INFO', 'Aangemeld als %s (%s)');
@define('IMPORT_WHAT_CAN', 'Hiermee kunt u artikelen uit andere weblog software importeren');
@define('IMPORT_SELECT', 'Selecteer uit welk type weblog u de gegevens wilt importeren');
@define('MANAGE_STYLES', 'Beheer Stijlen');
@define('SELECT_A_PLUGIN_TO_ADD', 'Selecteer welke plugin u wenst te installeren');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Hieronder staat een lijst met geïnstalleerde plugins');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Annuleren');
@define('DELETE_SELECTED_COMMENTS', 'Verwijder geselecteerde reacties');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Zoek media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Fout: Oude bestandsnaam bestaat niet!');
@define('ERROR_SOMETHING', 'Fout: Er gaat iets fout');
@define('DIRECT_LINK', 'Directe link naar dit artikel');
@define('SELECT_TEMPLATE', 'Selecteer een template dat u wenst te gebruiken voor uw weblog');
@define('DATABASE_ERROR', 'Fout: Kan geen verbinding maken met de databank - wordt afgesloten.');
@define('LIMIT_TO_NUMBER', 'Hoeveel items moeten er worden weergegeven?');
@define('DIRECTORIES_AVAILABLE', 'In de lijst van beschikbare mappen kunt u een willekeurige map selecteren om een nieuwe map in aan te maken.');
@define('CATEGORY_INDEX', 'Dit is een lijst met categorieën beschikbaar voor uw artikelen');
@define('PAGE_BROWSE_PLUGINS', 'Pagina %s van %s, totaal %s plugins.');
@define('CHARSET_NATIVE', 'Taalafhankelijk');
@define('XMLRPC_NO_LONGER_BUNDLED', 'De XML-RPC API-interface naar Serendipity wordt niet meer meegeleverd vanwege veiligheidsproblemen en omdat maar weinig mensen het gebruikten. Om hier gebruik van te maken moet u de XML-RPC-plugin installeren. De URL voor uw programma\'s verandert NIET. Zodra de plugin geïnstalleerd is, kunt u de API terug gebruiken.');
@define('AUTHORS_ALLOW_SELECT', 'Bezoekers toelaten om meerdere auteurs tegelijk te bekijken?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Als deze optie aan staat, zal er een aanvinkhokje naast elke auteur staan in de zijbalk. Bezoekers kunnen dan zelf kiezen welke artikelen ze willen zien.');
@define('PREFERENCE_USE_JS', 'Geavanceerde JavaScript-functie inschakelen?');
@define('PREFERENCE_USE_JS_DESC', 'Hiermee kunt u geavanceerde JavaScript-functies inschakelen voor verbeterd gebruiksgemak, zoals het herschikken van plugins in de pluginconfiguratiesectie door ze te verslepen.');
@define('PREFERENCE_USE_JS_WARNING', '(Deze pagina maakt gebruik van geavanceerde JavaScript-functies. Als u daardoor problemen ondervindt, schakelt u dit best uit in uw persoonlijke instellingen of schakelt u JavaScript uit in uw browser)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');