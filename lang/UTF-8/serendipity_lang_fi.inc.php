<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation by Mauri Sahlberg <mos@iki.fi>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'fi_FI.UTF-8, finnish, fi');
@define('DATE_FORMAT_ENTRY', '%A, %B %e. %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'fi');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Tyyppi');
@define('PREVIEW', 'Esikatselu');
@define('DATE', 'Päiväys');
@define('TIME', 'Time');
@define('APPEARANCE', 'Ulkoasu');
@define('LOGIN', 'Kirjaudu');
@define('LOGOUT', 'Poistu');
@define('LOGGEDOUT', 'Poistuttu.');
@define('CREATE', 'Luo');
@define('BACK', 'Takaisin');
@define('FORWARD', 'Eteenpäin');
@define('ANONYMOUS', 'Nimetön');
@define('RECENT', 'Viimeisimmät...');
@define('OLDER', 'Vanhemmat...');
@define('DONE', 'Valmis');
@define('TITLE', 'Otsikko');
@define('DESCRIPTION', 'Kuvaus');
@define('PLACEMENT', 'Sijainti');
@define('DELETE', 'Poista');
@define('SAVE', 'Talleta');
@define('UP', 'YLÖS');
@define('DOWN', 'ALAS');
@define('PREVIOUS', 'Edellinen');
@define('NEXT', 'Seuraava');
@define('ENTRIES', 'Merkinnät');
@define('CATEGORIES', 'Kategoriat');
@define('NAME', 'Nimi');
@define('EMAIL', 'Sähköposti');
@define('HOMEPAGE', 'Kotisivu');
@define('COMMENT', 'Kommentti');
@define('VIEW', 'Näytä');
@define('HIDE', 'Piilota');
@define('WEEK', 'Viikko');
@define('WEEKS', 'Viikkoja');
@define('MONTHS', 'Kuukausia');
@define('DAYS', 'Päiviä');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Onnistui');
@define('COMMENTS', 'Kommentit');
@define('ADD_COMMENT', 'Lisää kommentti');
@define('NO_COMMENTS', 'Ei kommentteja');
@define('POSTED_BY', 'Lähettänyt');
@define('ON', '');
@define('NO_CATEGORY', 'Ei kategoriaa');
@define('CATEGORY', 'Kategoria');
@define('EDIT', 'Muokkaa');
@define('GO', 'Tee!');
@define('YES', 'Kyllä');
@define('NO', 'Ei');
@define('NOT_REALLY', 'En todellakaan...');
@define('DUMP_IT', 'Kyllä!');
@define('IN', '');
@define('AT', '');
@define('LEFT', 'vasen');
@define('RIGHT', 'oikea');
@define('CENTER', 'center');
@define('ARCHIVES', 'Arkisto');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Pikahaku');
@define('TRACKBACKS', 'Paluuviitteet');
@define('TRACKBACK', 'Paluuviite');
@define('NO_TRACKBACKS', 'Ei paluuviitteitä');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Ote');
@define('TRACKED', 'Jäljitetty');
@define('USER', 'Käyttäjä');
@define('USERNAME', 'Käyttäjätunnus');
@define('PASSWORD', 'Salasana');
@define('HIDDEN', 'piilotettu');
@define('IMAGE', 'Kuva');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Kirjoittaja');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'versio');
@define('INSTALL', 'Asenna');
@define('REPLY', 'Reply');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Virhe');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Pakota');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Ylläpito');
@define('ADMIN_FRONTPAGE', 'Etusivu');
@define('QUOTE', 'Lainaus');
@define('NONE', 'ei yhtään');
@define('GROUP', 'Ryhmä');
@define('AUTHORS', 'Kirjoittajat');
@define('UPGRADE', 'Päivitä');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Kaikki kirjoittajat');
@define('PREVIOUS_PAGE', 'edellinen sivu');
@define('NEXT_PAGE', 'seuraava sivu');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Kaikki kategoriat');
@define('LAST_UPDATED', 'Viimeisin päivitys');
@define('IP_ADDRESS', 'IP-osoite');
@define('CHARSET', 'Merkistö');
@define('REFERER', 'Viittaaja');
@define('APPROVE', 'Hyväksy');
@define('NOT_FOUND', 'Ei löytynyt');
@define('WRITABLE', 'Kirjoitettavissa');
@define('NOT_WRITABLE', 'Ei kirjoitettavissa');
@define('WELCOME_BACK', 'Tervetuloa takaisin,');
@define('USE_DEFAULT', 'Oletus');
@define('SORT_BY', 'Järjestä');
@define('SORT_ORDER', 'Järjestyskenttä');
@define('SORT_ORDER_ASC', 'Nouseva');
@define('SORT_ORDER_DESC', 'Laskeva');
@define('FILTERS', 'Suotimet');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Näytä kaikki');
@define('TOGGLE_OPTION', 'Näytä');
@define('IN_REPLY_TO', 'Vastauksena');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Hakemisto');
@define('BACK_TO_BLOG', 'Takaisin blogiin');
@define('HTML_NUGGET', 'HTML-raapale');
@define('TITLE_FOR_NUGGET', 'Raapaleen otsikko');
@define('COMMENT_ADDED', 'Kommentti lisätty. ');
@define('ENTRIES_FOR', 'Merkinnät alkaen %s');
@define('NO_ENTRIES_TO_PRINT', 'Ei merkintöjä');
@define('COMMENT_DELETE_CONFIRM', 'Haluatko poistaa kommentin #%d, %s?');
@define('DELETE_SURE', 'Oletko varma, että haluat poistaa #%s lopullisesti?');
@define('MEDIA_FULLSIZE', 'Täysikokoinen');
@define('SIDEBAR_PLUGIN', 'sivupalstan laajennos');
@define('EVENT_PLUGIN', 'tapahtumalaajennos');
@define('PLUGIN_ITEM_DISPLAY', 'Missä kohde näytetään?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Vain jatko-osiosssa');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Vain yleisnäkymässä');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Kaikkialla');
@define('DIRECTORY_WRITE_ERROR', 'Ei oikeutta hakemistoon %s.');
@define('FILE_WRITE_ERROR', 'Tiedostoon %s kirjoittaminen ei onnistu.');
@define('INCLUDE_ERROR', 'Serendipity virhe: tiedostoa %s ei kyetty lukemaan - poistutaan.');
@define('DO_MARKUP', 'Tee notaatio muunnokset');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Päiväyksen muotoilu');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Merkinnän todellinen päiväys, PHPn strftime() muuttujilla. (Oletus: "%s")');
@define('APPLY_MARKUP_TO', 'Käytä notaatiota kohdassa %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML Nappula');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'XML-kanavat esitetään tällä kuvanappulalla. Tyhjä valitsee oletuksen kirjoittamalla:\'none\' ei käytetä kuvanappulaa.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Poistetaan tiedostoa %s...');
@define('SETTINGS_SAVED_AT', 'Uudet asetukset on tallettetu %s');
@define('INVERT_SELECTIONS', 'Käännä valinnat');

@define('PERSONAL_SETTINGS', 'Omat asetuksesi');
@define('DO_MARKUP_DESCRIPTION', 'Tee tekstille notaatiomuutokset (hymiöt, lyhennelmät käyttäen *, /, _, ...). Kieltämällä tämä säilyy  HTML-koodi tekstissä sellaisenaan.');
@define('BASE_DIRECTORY', 'Juurihakemisto');
@define('PERM_READ', 'Lukuoikeus');
@define('PERM_WRITE', 'Kirjoitusoikeus');
@define('PERM_DENIED', 'Pääsy kielletty.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipityn asennus');
@define('WELCOME_TO_INSTALLATION', 'Tervetuloa Serendipity asennukseen');
@define('FIRST_WE_TAKE_A_LOOK', 'Ensiksi tarkistamme olemassaolevan asennuksen ja mahdolliset epäyhteensopivuudet');
@define('ERRORS_ARE_DISPLAYED_IN', 'Epäyhteensopivat asetukset esitetään %s, suosituksista poikkeavat %s ja virheettömät %s');
@define('RED', 'punaisella');
@define('YELLOW', 'keltaisella');
@define('GREEN', 'vihreällä');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s esiasennusraportti');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP asennus');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Käyttöjärjestelmä');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini muokkaus');
@define('RECOMMENDED', 'Suositettu');
@define('ACTUAL', 'Käytössä');
@define('PERMISSIONS', 'Oikeudet');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Oikeuksia voi muuttaa komennolla: `<em>%s</em>` hakemistossa, tai FTP-ohjelmalla');
@define('PROBLEM_DIAGNOSTIC', 'Epäyhteensopivien asetusten takia et voi jatkaa asennusta, ennen kuin ylläolevat virheet on korjattu.');
@define('SELECT_INSTALLATION_TYPE', 'Valitse asennustapa');
@define('RECHECK_INSTALLATION', 'Tarkista uudestaan');
@define('SIMPLE_INSTALLATION', 'Yksinkertainen asennus');
@define('EXPERT_INSTALLATION', 'Mukautettu asennus');
@define('COMPLETE_INSTALLATION', 'Täysi asennus');
@define('WONT_INSTALL_DB_AGAIN', 'Tietokantaa ei uudelleenasenneta');
@define('THEY_DO', 'ovat');
@define('THEY_DONT', 'eivät ole');
@define('CHECK_DATABASE_EXISTS', 'Tarkistetaan onko kanta ja ovatko taulut jo olemassa');
@define('CREATE_DATABASE', 'Luodaan oletuskanta...');
@define('ATTEMPT_WRITE_FILE', 'Yritetään kirjoittaa tiedosto %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Luodaan päätoimittaja \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Asetetaan oletusmalli');
@define('INSTALLING_DEFAULT_PLUGINS', 'Asennetaan oletuslaajennokset');
@define('SERENDIPITY_INSTALLED', 'Serendipity on asennettu');
@define('VISIT_BLOG_HERE', 'Uuteen blogiisi');
@define('THANK_YOU_FOR_CHOOSING', 'Kiitos kun valitsit Serendipityn');
@define('ERROR_DETECTED_IN_INSTALL', 'Asennuksessa tapahtui virhe');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Ohjelmistona');
@define('ADMIN_FOOTER_POWERED_BY', 'Ohjelmistona Serendipity %s ja PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Toimittaja');
@define('USERLEVEL_CHIEF_DESC', 'Päätoimittaja');
@define('USERLEVEL_ADMIN_DESC', 'Ylläpitäjä');
@define('WWW_USER', 'Vaihda "www" apachen-käyttäjätunnukseen (esim. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Hakemistoa %s ei ole, eikä voi luoda. Ole kiltti ja tee se itse.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; komento <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Ohjelman %s suoritus ei onnistu');
@define('FILE_CREATE_YOURSELF', 'Ole kiltti ja tee tiedosto itse tai höllennä oikeuksia');
@define('COPY_CODE_BELOW', '<br />* Kopioi alla oleva ja laita se tiedostoon %s kansiossa %s :<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Tehtyäsi tämän, lataa sivu uudestaan.');
@define('ERROR_TEMPLATE_FILE', 'Mallipohjan avaaminen epäonnistui, ole kiltti ja päivitä  Serendipity!');
@define('HTACCESS_ERROR', 'Serendipity tarvitsee oikeudet ".htaccess" tiedostoon tarkistaakseen asennuksen. Tarkistus epäonnistui, koska oikeudet ovat väärin. Ole kiltti ja korjaa: <br />&nbsp;&nbsp;%s<br />. Lataa tämä sivu uudestaan kun olet korjannut..');
@define('EMPTY_SETTING', 'Kentän "%s" syöte on epäkelpo!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipityn mielestä asenuksesi versio on %s, mutta serendipityn versio on %s, tarvitaan päivitys! <a href="%s">Napsauta</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Hei, tervetuloa Serendipityn päivitykseen.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Olen agenttisi ja autan sinua päivittämään Serendipity %s asennuksesi.');
@define('SERENDIPITY_UPGRADER_WHY', 'Olet juuri asentanut Serendipity version %s, mutta kanta on jäänyt päivittämättä.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Tietokantapäivitykset (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Seuraavat .sql-tiedostot pitäisi suorittaa ennen  Serendipityn käyttöä');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Versiokohtaiset tehtävät');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Ei versiokohtaisia tehtäviä');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Haluatko minun tekevän ne puolestasi?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Ei, teen ne itse.');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Juu, kiitos');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Näyttäisi siltä, ettet tarvitse päivityksiä.');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity on päivitetty');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Jätit automaattipäivitykset väliin. Varmista, että kanta on oikein asennettu ja oikeat skriptat on ajettu.');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Serendipitysi on nyt versiota %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Takaisin blogiin %stästä%s');
@define('ADMIN_ENTRIES', 'Merkinnät');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Yhteyttä MySQL-tietokantaan: %s ei saatu.');
@define('COULDNT_SELECT_DB', 'Tietokantaa: %s ei voitu valita.');
@define('COULDNT_SELECT_USER_INFO', 'Käyttäjätiedon: %s valinta epäonnistui.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Kategorian: %s valinta epäonnistui.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Merkinnän: %s valinta epäonnistui.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Kommentin: %s valinta epäonnistui.');
@define('MYSQL_REQUIRED', 'Tähän tarvitaan MySQL-laajennos.');
@define('CREATE_AUTHOR', 'Luo kirjoittaja \'%s\'.');
@define('CREATE_CATEGORY', 'Luo kategoria \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type-tiedosto');
@define('INSTALL_DBPORT', 'Tietokannan portti');
@define('INSTALL_DBPORT_DESC', 'Tietokantapalvelimen portti');
@define('IMPORT_PLEASE_ENTER', 'Ole kiltti ja täytä allaoleva tieto.');
@define('IMPORT_NOW', 'Tuo nyt!');
@define('IMPORT_STARTING', 'Aloitan tuonnin...');
@define('IMPORT_FAILED', 'Tuonti meni pieleen');
@define('IMPORT_DONE', 'Tuonti onnistui');
@define('IMPORT_WEBLOG_APP', 'Blogisofta');
@define('IMPORT_NOTES', 'Huom:');
@define('IMPORT_STATUS', 'Tuonnin jälkeinen tilanne');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Tuo kaikki teksti merkintään ja jätä jatko-osio tyhjäksi..');
@define('IMPORT_GENERIC_RSS', 'Yleinen RSS tuonti');
@define('ACTIVATE_AUTODISCOVERY', 'Lähetä paluuviitteet merkintöjen paluuviestiosoitteisiin.');
@define('RSS_IMPORT_CATEGORY', 'Käytä tätä kategoriaa kategoriattomiin tuotuihin kirjauksiin');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Merkintää %s ei löytynyt.');
@define('CONVERT_HTMLENTITIES', 'Yritä konvertoida HTML-entiteetit automaattisesti?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity ylläpitovalikko');
@define('WRONG_USERNAME_OR_PASSWORD', 'Väärä käyttäjätunnus tai salasana');
@define('PLEASE_ENTER_CREDENTIALS', 'Kirjoita tunnistustietosi allaoleviin laatikoihin.');
@define('AUTOMATIC_LOGIN', 'Talleta kirjautumistiedot');
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
@define('MEDIA_LIBRARY', 'Mediakirjasto');
@define('ADD_MEDIA', 'Lisää media');
@define('MANAGE_DIRECTORIES', 'Ylläpidä hakemistoja');
@define('CONFIGURATION', 'Asetukset');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Documentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Official Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forums');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Merkintää ei ole julkaistu.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Sivupalstan laajennokset');
@define('EVENT_PLUGINS', 'Tapahtumalaajennokset');
@define('CONFIGURE_PLUGINS', 'Laajennosten asetukset');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Edellytys: %s ei täyttynyt');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Päivitä versioon %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Napsauta lisätäksesi uusi %s');
@define('ALREADY_INSTALLED', 'Asennettu jo');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Muokkaa merkintöjä');
@define('EDIT_ENTRY', 'Muokkaa merkintää');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Luonnos');
@define('PUBLISH', 'Julkaise');
@define('CONTENT', 'Sisältö');
@define('ENTRIES_PER_PAGE', 'Merkintää sivulla');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Tahmeat merkinnät');
@define('PAGE_BROWSE_ENTRIES', 'Sivu %s(%s), kaiken kaikkiaan %s merkintää');
@define('FIND_ENTRIES', 'Etsi merkintöjä');
@define('RIP_ENTRY', 'Lepää rauhassa #%s');
@define('NEW_ENTRY', 'Uusi merkintä');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Merkintä');
@define('EXTENDED_BODY', 'Merkinnän jatko-osa');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Merkintäsi luonnos on talletettu.');
@define('IFRAME_PREVIEW', 'Serendipity luo merkintäsi esikatseluversiota...');
@define('IFRAME_WARNING', 'Selaimesi ei tue "iframe"ja. Muokkaa serendipity_config.inc.php tiedostoa ja aseta $serendipity[\'use_iframe\'] muuttujan arvoksi FALSE.');
@define('DATE_INVALID', 'Päiväyksen muoto on virheellinen. Oikea muoto on VVVV-KK-PP TT:MM.');
@define('ADVANCED_OPTIONS', 'Lisävalinnat');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tätä linkkiä ei ole tarkoitus napsauttaa. Voit käyttää tätä osoitetta paluuviitteisiin ja pingauksiin omasta blogistasi.Kopioi linkki ja käytä sitä omassa blogissasi.');
@define('RESET_DATE', 'Nollaa päiväys');
@define('RESET_DATE_DESC', 'Napsauta asettaaksesi päiväys kuluvaksi');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Käyttäjien ylläpito');
@define('CREATE_NEW_USER', 'Luo uusi käyttäjä');
@define('CREATE_NOT_AUTHORIZED', 'Et voi muokata samantasoisia käyttäjiä kuin itse olet');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Et voi muokata ylempiarvoisiasi.');
@define('CREATED_USER', 'Uusi käyttäjä %s on luotu');
@define('MODIFIED_USER', 'Käyttäjä %s muokattu');
@define('USER_LEVEL', 'Taso');
@define('WARNING_NO_GROUPS_SELECTED', 'Varoitus: Et valinnut yhtään ryhmää. Tämä poistaisi sinulta kaikki oikeudet, joten valintaasi ei toteutettu.');
@define('DELETE_USER', 'Olet aikeissa poistaa käyttäjän  #%d %s. Oletko tosissasi? Käyttäjän kirjoitukset sensuroidaan.');
@define('DELETED_USER', 'Käyttäjä #%d %s tuhottu.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Ryhmien ylläpito');
@define('DELETED_GROUP', 'Ryhmä #%d %s poistettu.');
@define('CREATED_GROUP', 'Luotiin uusi %s ryhmä');
@define('MODIFIED_GROUP', 'Ryhmän %s ominaisuudet muutettiin');
@define('CREATE_NEW_GROUP', 'Luo uusi ryhmä');
@define('DELETE_GROUP', 'Olet aikeissa poistaa ryhmän #%d %s. Oletko varma?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Etsi kommentteja');
@define('COMMENTS_FILTER_SHOW', 'Näytä');
@define('COMMENTS_FILTER_ALL', 'Kaikki');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Vain hyväksytyt');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Hyväksymättömät');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Haluatko todella poistaa valitut kommentit?');
@define('PAGE_BROWSE_COMMENTS', 'Sivu (%s/%s), yhteensä %s kommenttia');
@define('COMMENT_IS_DELETED', '(Comment removed)');
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
@define('CATEGORY_SAVED', 'Kategoria talletettu');
@define('CATEGORY_ALREADY_EXIST', 'Kategoria nimellä "%s" on jo olemassa');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategoria #%s poistettu. Vanhan kategorian merkinnät siirretty kategoriaan #%s');
@define('CATEGORY_DELETED', 'Kategoria #%s poistettu.');
@define('INVALID_CATEGORY', 'Et valinnut kategoriaa');
@define('EDIT_THIS_CAT', 'Muokataan "%s"');
@define('CATEGORY_REMAINING', 'Poista tämä kategoriat ja siirrä sen sisältämät kirjaukset tähän kategoriaan');
@define('PARENT_CATEGORY', 'Kategoriavanhempi');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Luo uusi kategoria');
@define('ALREADY_SUBCATEGORY', '%s on jo %s alikategoria.');
@define('NO_CATEGORIES', 'Ei kategorioita');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Tuo kirjauksia');
@define('EXPORT_ENTRIES', 'Vie kirjauksia');
@define('EXPORT_FEED', 'Näytä koko RSS-kanavan sisältö');
@define('CREATE_THUMBS', 'Luo pienoiskuvat uudelleen');
@define('WARNING_THIS_BLAHBLAH', "HUOMAUTUS:\\nTämä saattaa kestää kauan jos pienoiskuvattomia kuvia on paljon..");
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
@define('TEMPLATE_SET', '\'%s\' on oletuspohjasi');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varoitus: Valitsemasi malli sisältää vanhentuneita määreitä, päivitä malli jos se on mahdollista!');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Muokkausliittymä käytettävissä');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Aseta malliksi');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Tarkista ja talleta');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Poista valitut laajennokset');
@define('SAVE_CHANGES_TO_LAYOUT', 'Talleta taiton muutokset');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Päivitetään tietokantaa vastaamaan kuvakansiota');
@define('SYNC_DONE', 'Valmis (Päivitetty %s kuvaa).');
@define('RESIZE_BLAHBLAH', '<b>Muokkaa kokoa %s</b>');
@define('ORIGINAL_SIZE', 'Alkuperäinen koko: <i>%sx%s</i> pikseliä');
@define('RESIZING', 'Muokataan');
@define('RESIZE_DONE', 'Valmis (muokattu %s kuvaa).');
@define('KEEP_PROPORTIONS', 'Säilytä suhteet');
@define('REALLY_SCALE_IMAGE', 'Skaalataanko kuva? Tätä operaatiota ei voi peruuttaa!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Kuvan koon muokkaus. Voit muokata kuvan kokoa säilyttäen suhteet, lisää toiseen laatikkoon arvo ja paina tab-näppäintä, niin lasken sinulle suhteen mukaisen toisen arvon automaattisesti.</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Uusi koko: ');
@define('SCALING_IMAGE', 'Skaalataan %s %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Hakemisto <strong>%s</strong> on luotu.');
@define('PARENT_DIRECTORY', 'Hakemistovanhempi');
@define('CONFIRM_DELETE_DIRECTORY', 'Haluatko todella poistaa hakemiston %s sisältöineen?');
@define('ERROR_NO_DIRECTORY', 'Virhe: Hakemistoa %s ei ole');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Hakemisto ei ole tyhjä. Valitse "pakota poisto", jos haluat poistaa tiedostotkin. Hakemiston tiedostot:');
@define('DIRECTORY_DELETE_FAILED', 'Hakemiston %s poisto epäonnistui Tarkista oikeudet tai mahdollinen ylläoleva virheilmoitus.');
@define('DIRECTORY_DELETE_SUCCESS', 'Hakemisto %s poistettu.');
@define('CHECKING_DIRECTORY', 'Tarkistetaan tiedostoja hakemistossa %s');
@define('DELETE_DIRECTORY', 'Tuhoa hakemisto');
@define('DELETE_DIRECTORY_DESC', 'Olet aikeissa tuhota hakemiston, jossa on media-tiedostoja, mahdollisesti sellaisia, jotka ovat käytössä merkinnöissäsi.');
@define('FORCE_DELETE', 'Tuhoa hakemisto kaikkine tiedostoineen, mukaan lukien tiedostot, jotka eivät Serendipityn mielestä liity blogiisi');
@define('CREATE_DIRECTORY', 'Luo hakemisto');
@define('CREATE_NEW_DIRECTORY', 'Luo uusi hakemisto');
@define('CREATE_DIRECTORY_DESC', 'Uusien media-tiedostohakemistojen luominen. Valitse nimi uudelle hakemistolle ja halutessasi sille päähakemisto.');
@define('ABOUT_TO_DELETE_FILE', 'Olet aikeissa poistaa <b>%s</b>:n<br />Jos se on käytössä merkinnöissä syntyy ongelmia<br />Oletko varma?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Virhe: Tiedosto on jo olemassa!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Tiedostoa <b>%s</b> ei löydy, ehkäpä se on jo poistettu?');
@define('ERROR_FILE_FORBIDDEN', 'Et saa tuoda tiedostoja, joissa on interaktiivista sisältöä');
@define('REMOTE_FILE_NOT_FOUND', 'Tiedostoa ei löytynyt kohdepalvelimelta, onhan  URL: <b>%s</b> oikein?');
@define('FILE_FETCHED', '%s haettu nimelle %s');
@define('FILE_UPLOADED', 'Tiedosto %s tuotu nimelle %s');
@define('DELETE_FILE_FAIL', 'Tiedoston <b>%s</b> poisto epäonnistui');
@define('DELETE_FILE', 'Tuhottu tiedosto <b>%s</b>');
@define('FOUND_FILE', 'Löytyi uusi/muokattu tiedosto: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Virhe: Tiedostonimi on jo käytössä, valitse uusi!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'Linkitetty palvelimelta');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Anna uusi nimi: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Lisätään kuvaa...');
@define('THUMB_CREATED_DONE', 'Pienoiskuvaa luodaan.<br>Valmis.');
@define('THUMBNAIL_USING_OWN', 'Käytetään kuvaa %s sen omana pienoiskuvana, koska se on jo niin pieni.');
@define('THUMBNAIL_FAILED_COPY', 'Haluttiin käyttää %s omana pienoiskuvanaan, mutta kopiointi epäonnistui.');
@define('DELETE_THUMBNAIL', 'Poistettu pienoiskuva: <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Pieleen meni, tiedostoa ei tuotu. Kenties tiedoston koko oli liian suuri. Kysy palveluntarjoajaltasi apua tai muokkaa php.ini tiedostoasi salliaksesi isompien tiedostojen tuonnin..');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Tiedostoa linkitetään.<br />Tehty.');
@define('DELETE_HOTLINK_FILE', 'Poistettu linkitetty tiedosto nimeltä <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Suoritus epäonnistui: "%s", virhe: %s, paluuarvo: %d');
@define('SKIPPING_FILE_EXTENSION', 'Ohitetaan tiedsto: Tiedostopääte %s puuttuu.');
@define('SKIPPING_FILE_UNREADABLE', 'Ohitetaan tiedosto: %s, tiedostoa ei voi lukea.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Haluan käyttää pienoiskuvaa kirjauksessani.');
@define('I_WANT_BIG_IMAGE', 'Haluan käyttää suurta kuvaa kirjauksessani.');
@define('I_WANT_NO_LINK', ' Haluan sen kuvana');
@define('I_WANT_IT_TO_LINK', 'Haluan sen linkkinä tähän kohteeseen:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Kuvan koko');
@define('IMAGE_ALIGNMENT', 'Kuvan tasaus');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Kuvan lisäys');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Valitsit %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Käännä kuvaa 90 astetta vastapäivään');
@define('IMAGE_ROTATE_RIGHT', 'Käännä kuvaa 90 astetta myötäpäivään');
@define('MEDIA_RENAME', 'Uudelleennimeä tiedosto');
@define('THUMBNAIL_SHORT', 'Pienoiskuva');
@define('ORIGINAL_SHORT', 'Alkup.');
@define('SORT_ORDER_NAME', 'Nimi');
@define('SORT_ORDER_EXTENSION', 'Tiedostopääte');
@define('SORT_ORDER_SIZE', 'Tiedostokoko');
@define('SORT_ORDER_WIDTH', 'Kuvan leveys');
@define('SORT_ORDER_HEIGHT', 'Kuvan korkeus');
@define('SORT_ORDER_DATE', 'Tuontipäiväys');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Lisää tiedoston media kirjastoosi:</b><p>Voit tuoda tiedostoja tai käskeä minua hakemaan ne webistä. Jos et keksi sopivaa kuvaa, kokeile, <a href="https://images.google.com/" target="_blank">googlea</a> mielikuvillasi, tulokset ovat yleensä käyttökelpoisia ja hauskoja :)</p><p><b>Valitse tapa:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Lisättävän tiedoston URL:');
@define('ENTER_MEDIA_UPLOAD', 'Valitse tiedosto, jonka haluat tuoda:');
@define('SAVE_FILE_AS', 'Talleta nimellä:');
@define('STORE_IN_DIRECTORY', 'Talleta hakemistoon: ');
@define('IMAGE_MORE_INPUT', 'Lisää lisää kuvia');
@define('ENTER_MEDIA_URL_METHOD', 'Hakutapa:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Huom: Jos linkität kuvan toiselta palvelimelta tarvitset siihen luvan, jollei palvelin ole omasi. Linkittämällä voit käyttää kuvia tallettamatta niitä paikallisesti.');
@define('FETCH_METHOD_IMAGE', 'Hae kuva palvelimellesi');
@define('FETCH_METHOD_HOTLINK', 'Linkitä kohdepalvelimelta');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Muokkaa kuvan kokoa');
@define('MEDIA_DELETE', 'Poista tiedosto');
@define('FILES_PER_PAGE', 'Tiedostoja sivulla');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Ei kuvia');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'kaikki hakemistot');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Asetukset tarkistettu ja talletettu.');
@define('DIAGNOSTIC_ERROR', 'Tarkistuksessa havaittiin virheet:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Tietokanta-asetukset');
@define('INSTALL_CAT_DB_DESC', 'Serendipityn tarvitsemat tietokanta-asetukset.');
@define('INSTALL_DBTYPE', 'Tietokantatyyppi');
@define('INSTALL_DBTYPE_DESC', 'Tietokannan tyyppi');
@define('INSTALL_DBHOST', 'Kantakone');
@define('INSTALL_DBHOST_DESC', 'Kantapalvelimen nimi');
@define('INSTALL_DBUSER', 'Kantakäyttäjä');
@define('INSTALL_DBUSER_DESC', 'Kantakäyttäjän käyttäjätunnus');
@define('INSTALL_DBPASS', 'Kantakäyttäjän salasana');
@define('INSTALL_DBPASS_DESC', 'Kantakäyttäjän salasana');
@define('INSTALL_DBNAME', 'Kannan nimi');
@define('INSTALL_DBNAME_DESC', 'Tietokannan nimi');
@define('INSTALL_DBPREFIX', 'Tauluetuliite');
@define('INSTALL_DBPREFIX_DESC', 'Etuliite kantataulujen nimille.Esim serendipity_');
@define('INSTALL_DBPERSISTENT', 'Käytä pysyviä kantayhteyksiä.');
@define('INSTALL_DBPERSISTENT_DESC', 'Lue <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">kuvaus täältä</a>. Ei suositella');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Polut');
@define('INSTALL_CAT_PATHS_DESC', 'Tiedosto- ja hakemistopolut. Älä unohoda hakemistojen nimistä loppukauttaviivaa!');
@define('INSTALL_FULLPATH', 'Asennuspolku');
@define('INSTALL_FULLPATH_DESC', 'Serendipity-asennushakemiston täydellinen ja absoluuttinen hakemistopolku');
@define('INSTALL_UPLOADPATH', 'Tuontipolku');
@define('INSTALL_UPLOADPATH_DESC', 'Kaikki tuodut tiedostot talletetaan tänne. Suhteessa aseunnuspolkkuun. - Yleensä \'uploads/\'');
@define('INSTALL_RELPATH', 'Suhteellinen osoite');
@define('INSTALL_RELPATH_DESC', 'Blogisi osoite, tyypillisesti \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Malliosoite');
@define('INSTALL_RELTEMPLPATH_DESC', 'Polku, josta mallipohjat löytyvät, suhteessa suhteelliseen polkuun.  \'relative path\'');
@define('INSTALL_RELUPLOADPATH', 'Tuontiosoite');
@define('INSTALL_RELUPLOADPATH_DESC', 'Tiedostotuontien osoite suhteessa suhteelliseen osoitteeseen');
@define('INSTALL_URL', 'Blogin osoite');
@define('INSTALL_URL_DESC', 'Serendipity-asennuksen osoite');
@define('INSTALL_AUTODETECT_URL', 'Havaitse käytetty HTTP-isäntä automaattisesti');
@define('INSTALL_AUTODETECT_URL_DESC', 'Jos valitset kyllä, Serendipity käyttää vierailijan käyttämäää HTTP-isäntänimeä BaseURL:ina. Tätä käyttämällä voit antaa blogillesi useamman verkkonimen ja käyttää samaa verkkonimeä kaikissa linkeissä, joita vierailija käyttää lukiessaan blogiasi.');
@define('INSTALL_INDEXFILE', 'Aloitustiedosto');
@define('INSTALL_INDEXFILE_DESC', 'Serendipityn aloitustiedoston nimi');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinkit');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Blogisi permalinkkien lausekkeiden määrittely. Suosittelemme, että käytät oletuksia; jos et, niin yritä sisällyttää lausekkeeseen %id% arvo estääksesi Serendipityä tekemästä tietokantahakua kohdeosoittetta varten.');
@define('INSTALL_PERMALINK', 'Merkinnän permalink-lauseke');
@define('INSTALL_PERMALINK_DESC', 'Lauseke merkintöjä varten alkaen blogin osoitteesta. Voit käyttää muuttujia %id%, %title%, %day%, %month%, %year% sekä muita merkkejä.');
@define('INSTALL_PERMALINK_AUTHOR', 'Kirjoittajien merkintöjen permalink-lauseke');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Lauseke kirjoittajien merkintöjä varten alkaen blogin osoitteesta. Voit käyttää muuttujia %id%, %realname%, %username%, %email% sekä muita merkkejä.');
@define('INSTALL_PERMALINK_CATEGORY', 'Kategorioiden merkintöjen permalink-lauseke');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Lauseke kategorioiden merkintöjä varten alkaen blogin osoitteesta. Voit käyttää muuttujia %id%, %name%, %parentname%, %description% sekä muita merkkejä.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'RSS-kanavien (kategoriat) merkintöjen permalink-lauseke');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Lauseke RSS-kanavien merkintöjä varten (kategoriat) alkaen blogin osoitteesta. Voit käyttää muuttujia %id%, %name%, %description% sekä muita merkkejä.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'RSS-kanavien (kirjoittaja) permalink-lauseke');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Lauseke RSS-kanavien merkintöjä varten (kirjoittajat) alkaen blogin osoitteesta. Voit käyttää muuttujia %id%, %realname%, %username%, %email% sekä muita merkkejä.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Arkistojenpolku');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Arkistopolku');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Kategoriapolku');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Kirjoittajapolku');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Polku kommenttitilauksen peruutukseen');
@define('INSTALL_PERMALINK_DELETEPATH', 'Polku kommenttien tuhoamiseen');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Polku kommenttien hyväksyntään');
@define('INSTALL_PERMALINK_FEEDSPATH', 'RSS-kanavien polku');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Yksittäisen laajennuksen polku');
@define('INSTALL_PERMALINK_ADMINPATH', 'Ylläpitopolku');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Hakupolku');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Yleiset asetukset');
@define('INSTALL_CAT_SETTINGS_DESC', 'Serendipity toimintojen muokkaus');
@define('INSTALL_USERNAME', 'Ylläpitäjän tunnus');
@define('INSTALL_USERNAME_DESC', 'Ylläpitäjän käyttäjätunnus');
@define('INSTALL_PASSWORD', 'Ylläpitäjän salasana');
@define('INSTALL_PASSWORD_DESC', 'Ylläpitäjän salasana');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Nimi');
@define('USERCONF_REALNAME_DESC', 'Kirjoittajan koko nimi. Tämä on se nimi, joka näytetään lukijoille');
@define('INSTALL_EMAIL', 'Ylläpitäjän sähköpostiosoite');
@define('INSTALL_EMAIL_DESC', 'Ylläpitäjän sähköpostiosoite.');
@define('INSTALL_SENDMAIL', 'Postit ylläpitäjälle?');
@define('INSTALL_SENDMAIL_DESC', 'Haluatko sähköpostia kun blogisasi kommentoidaan?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Blogin nimi');
@define('INSTALL_BLOGNAME_DESC', 'Blogisi nimi');
@define('INSTALL_BLOGDESC', 'Blogisi kuvaus');
@define('INSTALL_BLOGDESC_DESC', 'Blogisi kuvaus');
@define('INSTALL_BLOG_EMAIL', 'Blogin sähköpostiosoite');
@define('INSTALL_BLOG_EMAIL_DESC', 'Tätä osoitetta käytettään lähettäjän (From:)-osoitteena kun blogisi lähettää postia. Valitse toimiva osoite, sillä useat sähköpostipalvelimet eivät suostu toimimaan virheellisten osoitteiden kanssa.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Kieli');
@define('INSTALL_LANG_DESC', 'Valitse blogisi käyttöliittymän kieli');
@define('INSTALL_CHARSET', 'Merkistövalinta');
@define('INSTALL_CHARSET_DESC', 'Voit valita UTF-8 tai kansallisen merkistön (ISO, EUC, ...). Joillekin kielille on olemassa vain UTF-8 käännös, jolloin "Kansallinen" valinta ei ole käytössä. UTF-8 merkistöä suositellaan uusille asennuksille. Älä vaihda merkistöä, jos olet jo tehnyt logimerkintöjä erityiskirjaimilla, vaihtaminen saattaa hajoittaa merkinnät. Lisätietoja https://docs.s9y.org/docs/developers/internationalization.html aiheesta.');
@define('INSTALL_CAL', 'Kalenterin tyyppi');
@define('INSTALL_CAL_DESC', 'Valitse käytettävä kalenterimuoto');
@define('AUTOLANG', 'Käytä lukijan selaimen kieltä oletuskielenä');
@define('AUTOLANG_DESC', 'Jos otat tämän käyttöön, esitetään blogisi käyttöliittymä ja merkinnät käyttäjän selaimen kielellä, jos mahdollista.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Enable Plugin ACL for usergroups?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'If the option "Plugin ACL for usergroups" is enabled in the configuration, you can specify which usergroups are allowed to execute certain plugins/events.');
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
@define('INSTALL_CAT_DISPLAY', 'Ulkoasuvalinnat');
@define('INSTALL_CAT_DISPLAY_DESC', 'Ulkoasuun vaikuttavat valinnat');
@define('INSTALL_FETCHLIMIT', 'Etusivulla esitettävien merkintöjen määrä');
@define('INSTALL_FETCHLIMIT_DESC', 'Selaimessa esitettävien kirjausten lukumäärä');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Käytä gzip pakattuja sivuja');
@define('INSTALL_USEGZIP_DESC', 'Nopeuttaaksemme sivujen siirtoa selaimeen voimme pakata sivut, jos selain sitä tukee. Suositus: käytössä.');
@define('INSTALL_XHTML11', 'Pakoita XHTML 1.1 yhteensopivaksi');
@define('INSTALL_XHTML11_DESC', 'Serendipityn tuottama koodi on XHTML 1.1 yhteensopivaa (saattaa kyykyttää 4 sukupolvea vanhemmat palvelimet/selaimet)');
@define('INSTALL_POPUP', 'Käytä ponnahdusikkunoita');
@define('INSTALL_POPUP_DESC', 'Esitetäänkö paluuviitteet ja kommentit ponnahdusikkunoissa?');
@define('INSTALL_EMBED', 'Käytätkö serendipityä osasena?');
@define('INSTALL_EMBED_DESC', 'Serendipity osana olemassaolevaa sivua. Voit hyödyntää aloitussivu-valintaa sisällyttääksesi serendipity osaksi sivua. Katso README tiedostosta ohjeita!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Tehdäänkö ulosviittauksista linkkejä?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', ' "Ei": kommentteja, huippuviittaajia ja huippupoistumisia ei varusteta linkeillä (suositellaan). "Kyllä", näytetään linkkeinä!');
@define('INSTALL_TRACKREF', 'Otetaanko viittajaseuranta käyttöön?');
@define('INSTALL_TRACKREF_DESC', 'Viittajaseurannalla pidetään kirjaa merkintöihisi viittaavista linkeistä. Tätä usein väärinkäytetään "referrer-spam"-mäykseen. Hae googlesta selitys hakusanoilla: referrer spam.');
@define('INSTALL_BLOCKREF', 'Estä viittaukset');
@define('INSTALL_BLOCKREF_DESC', 'Onko viittaajia, joiden osoitteita et halua nähdä? Erota palvelinosoitteet \';\':llä. Esto tehdään osamerkkijonoilla!');
@define('INSTALL_REWRITE', 'URL-uudelleenkirjoitus');
@define('INSTALL_REWRITE_DESC', 'Valitse mitä sääntöjä käytetään blogisi sivuosoitteiden uudelleenkirjoitukseen. Siistityt osoitteet helpottava hakukoneiden indeksointia. Toimintaan tarvitaan webpalvelimella joko mod_rewrite tai "AllowOverride All" serendipity hakemistolle. Oletus on tutki automaattisesti');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Palvelimen aikasiirtymä');
@define('INSTALL_OFFSET_DESC', 'Anna aikaero sinun aikavyöhykkeesi ja palvelimen aikavyöhykkeen (palvelimella kello on nyt: %clock%) välillä');
@define('INSTALL_SHOWFUTURE', 'Näytä tulevat merkinnät');
@define('INSTALL_SHOWFUTURE_DESC', 'Näytä merkinnät, joiden julkistuspäivä on tulevaisuudessa. Oletusarvoisesti näytetään vain nykyhetken merkinnät.');
@define('INSTALL_ACL', 'Käytä kategorioiden lukuoikeuksia');
@define('INSTALL_ACL_DESC', 'Jos otat käyttöön voit rajoittaa sisäänkirjautuneiden käyttäjien lukuoikeuksia. Jos et ota käyttöön blogisi on hivenen nopeampi. Jos et tarvitse eritasoisia lukuoikeuksia blogissasi, älä ota tätä käyttöön.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Näytä merkinnät runko-osana RSS kanavilla');
@define('SYNDICATION_PLUGIN_BANNERURL', 'RSS linkin kuva');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'GIF/JPEG/PNG kuvan urli tai tyhjää. (tyhjä: serendipityn logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Kuvan leveys');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'pikseleissä, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Kuvan korkeus');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'pikseleissä, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Näytä sähköpostiosoitteet?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Kenttä "päätoimittaja"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Päätoimittajan sähköpostiosoite tai tyhjää (tyhjä: piilotettu) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Kenttä "webMasterr"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Webmasterin sähköpostiosoite tai tyhjää. (tyhjä: piilotettu) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Field "ttl" (elinikä)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Aika minuuteissa, jonka kanavoijat saavat säilyttää kopiota tarkistamatta (tyhjä: piilotettu) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Kenttä "julkaisuPäivä"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Pitäisikö "julkaisuPäivä"-kenttä lisätä RSS-kanavalle näyttämään viimeisimmän kirjauksen päiväys?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Kuvamuunnosten asetukset');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Serendipityn kuvankäsittelyasetukset.');
@define('INSTALL_IMAGEMAGICK', 'Käytä Imagemagick:ä');
@define('INSTALL_IMAGEMAGICK_DESC', 'Onko image magick asennettuna ja haluatko käyttää sitä kuvien käsittelyyn?');
@define('INSTALL_IMAGEMAGICKPATH', 'Convert-ohjelman sijainti');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Imagemagick convert-ohjelman nimi ja täydellinen tiedostopolku');
@define('INSTALL_THUMBSUFFIX', 'Pienoiskuvakkeen suffiksi');
@define('INSTALL_THUMBSUFFIX_DESC', 'Pienoiskuvakkeet nimetään seuraavasti: originaali.[suffiksi].pääte');
@define('INSTALL_THUMBWIDTH', 'Pienoiskuvakkeen mitat');
@define('INSTALL_THUMBWIDTH_DESC', 'Pienoiskuvakkeen maksimileveys');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. file upload size');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Enter the maximum filesize for uploaded files in bytes. This setting can be overruled by server-side settings in PHP.ini: upload_max_filesize, post_max_size, max_input_time all take precedence over this option. An empty string means to only use the server-side limits.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. width of image files for upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Enter the maximum image width in pixels for uploaded images.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. height of image files for upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Enter the maximum image height in pixels for uploaded images.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Enable on-the-fly media synchronization');
@define('ONTHEFLYSYNCH_DESC', 'If enabled, Serendipity will compare the media database with the files stored on your server and synchronize the database and directory contents.');
@define('MEDIA_DYN_RESIZE', 'Allow dynamic image resizing?');
@define('MEDIA_DYN_RESIZE_DESC', 'If enabled, the media selector can return images in any requested size via a GET variable. The results are cached, and thus can create a large filebase if you make intensive use of it.');
@define('MEDIA_EXIF', 'Import EXIF/JPEG image data');
@define('MEDIA_EXIF_DESC', 'If enabled, existing EXIF/JPEG metadata of images will be parsed and stored in the database for display in the media gallery.');
@define('MEDIA_PROP', 'Media properties');
@define('MEDIA_PROP_DESC', 'Enter a list of ";" separated property fields you want to define for each media file');
@define('MEDIA_PROP_MULTIDESC', '(You can append ":MULTI" after any item to indicate that this item will contain long text instead of just some characters)');
@define('MEDIA_KEYWORDS', 'Media keywords');
@define('MEDIA_KEYWORDS_DESC', 'Enter a list of ";" separated words that you want to use as pre-defined keywords for media items.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Henkilötietosi');
@define('USERCONF_CAT_PERSONAL_DESC', 'Henkilötietojen asettaminen');
@define('USERCONF_USERNAME', 'Käyttäjänimesi');
@define('USERCONF_USERNAME_DESC', 'Millä nimimerkillä kirjoitat tähän blogiin');
@define('USERCONF_PASSWORD', 'Salasanasi');
@define('USERCONF_PASSWORD_DESC', 'Nimimerkkisi salasana');
@define('USERCONF_CHECK_PASSWORD', 'Nykyinen salasana');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Jos vaihdoit yllä salasanaasi, kirjoita nykyinen tähän.');
@define('USERCONF_USERLEVEL', 'Käyttäjätaso');
@define('USERCONF_USERLEVEL_DESC', 'Käyttäjätasoa käytetään määrittämän käyttäjän oikeudet tähän blogiin.');
@define('USERCONF_GROUPS', 'Ryhmäjäsenyydet');
@define('USERCONF_GROUPS_DESC', 'Käyttäjä on jäsen seuraavissa ryhmissä. Sama käyttäjä voi kuulua useampaan ryhmään.');
@define('USERCONF_EMAIL', 'Sähköpostiosoitteesi');
@define('USERCONF_EMAIL_DESC', 'Henkilökohtainen sähköpostiosoitteesi');
@define('INSTALL_WYSIWYG', 'Käytä WYSIWYG muokkainta');
@define('INSTALL_WYSIWYG_DESC', 'Haluatko käyttää WYSIWYG muokkainta? (Väittä toimivansa IE5+, ja osittain  Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Lähetänkö komentointi-ilmoitukset?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Haluatko postia kun joku kommentoi merkintöjäsi?');
@define('USERCONF_SENDTRACKBACKS', 'Lähetä paluuviitteet?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Haluatko paluupostia, kun joku tekee paluuviitteen merkintöihisi?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Oikeudet: Sallitaanko merkintöjen julkaisu?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Saako tämä kirjoittaja julkaista?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Uusien merkintöjen oletusasetukset');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'HUOM: Käyttäjätasoa käytetään ainoastaan yhteensopivuuden takaamiseksi, viimeisessä hädässä ja joissakin laajennoksissa. Käyttöoikeudet määritetään ryhmillä!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nykyinen salasanasi meni väärin, salasanaa ei vaihdettu. Asetuksia ei talletettu.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'omatAsetukset: Pääsee omiin asetuksiin');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'omatAsetuksetKäyttäjätaso: Muuttaa käyttäjätasoa');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'omatAsetuksetEiKirjoita: Muuttaa "kiellä kirjoittaminen"-asetusta');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'omatAsetuksetOikeusJulkaista: Muutta oikeutta julkaista');
@define('PERMISSION_SITECONFIGURATION', 'järjestelmäAsetukset: Muokkaa järjestelmäasetuksia');
@define('PERMISSION_BLOGCONFIGURATION', 'blogiAsetukset: Muokkaa blogin asetuksia');
@define('PERMISSION_ADMINENTRIES', 'hallitseMerkintöjä: Merkintöjen hallinta');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'hallitseMerkintöjäToisten: Hallitsee toisten käyttäjien merkintöjä');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'ylläpitoTuonti: Tuo merkintöjä');
@define('PERMISSION_ADMINCATEGORIES', 'ylläpitoKategoriat: Ylläpitää kategorioita');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'ylläpitoKatogoriatToisten: hallitsee toisten käyttäjien kategorioita');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'ylläpitoKategoriatPoista: Poistaa kategorioita');
@define('PERMISSION_ADMINUSERS', 'ylläpitoKäyttäjät: Ylläpitää käyttäjiä');
@define('PERMISSION_ADMINUSERSDELETE', 'ylläpitoKäyttäjätPoista: Poistaa käyttäjiä');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'ylläpitoKäyttäjätKäyttäjätaso: muuttaa käyttäjätasoa');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'ylläpitoKäyttäjätSamaRyhmä: Ylläpitää omaan ryhmäänsä kuuluvia käyttäjiä');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'ylläpitoKäyttäjätMuuRyhmä: Ylläpitää käyttäjiä, jotka eivät kuulu ryhmiinsä');
@define('PERMISSION_ADMINUSERSCREATENEW', 'ylläpitoKäyttäjätLuoUusi: Luo uusia käyttäjiä');
@define('PERMISSION_ADMINUSERSGROUPS', 'ylläpitoKäyttäjätRyhmät: Ylläpitää käyttäjäryhmiä');
@define('PERMISSION_ADMINPLUGINS', 'ylläpitoLaajennokset: Ylläpitää laajennoksia');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'ylläpitoLaajennoksetToisten: Ylläpitää toisten laajennoksia');
@define('PERMISSION_ADMINIMAGES', 'ylläpitoKuvat: Ylläpitää media-tiedostoja');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'ylläpitoKuvatHakemistot: Ylläpitää media-hakemistoja');
@define('PERMISSION_ADMINIMAGESADD', 'ylläpitoKuvatTiedostot: Lisää media-tiedostoja');
@define('PERMISSION_ADMINIMAGESDELETE', 'ylläpitoKuvatPoista: Poistaa media-tiedostoja');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'ylläpitoKuvatToisten: Ylläpitää toisten media-hakemistoja');
@define('PERMISSION_ADMINIMAGESVIEW', 'ylläpitoKuvatKatselu: Katselee toisten kuvatiedostoja');
@define('PERMISSION_ADMINIMAGESSYNC', 'ylläpitoKuvatSync: Luo kuvakkeet');
@define('PERMISSION_ADMINCOMMENTS', 'ylläpitoKommentit: Ylläpitää kommentteja');
@define('PERMISSION_ADMINTEMPLATES', 'ylläpitoMallit: Ylläpitää malleja');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'ylläpitoKuvatKatsoToisten: Katsoo toisten kuvatiedostoja');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Merkintä talletettu');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vastausketjuina');
@define('COMMENTS_VIEWMODE_LINEAR', 'Listana');
@define('DISPLAY_COMMENTS_AS', 'Näytä kommentit');
@define('COMMENTS_DISABLE', 'Kiellä merkinnän kommentointi.');
@define('COMMENTS_ENABLE', 'Salli merkinnän kommentointi');
@define('COMMENTS_CLOSED', 'Kirjoittaja ei salli tämän merkinnän kommentointia');
@define('VIEW_EXTENDED_ENTRY', 'Jatka "%s":n lukemista');
@define('TRACKBACK_SPECIFIC', 'Kirjauksen URI paluuviitteille');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Näytä kaikki');
@define('VIEW_TOPICS', 'Näytä aiheet');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Aiheet');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Merkinnän lisäys meni pieleen!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Muista tiedot? ');
@define('SUBMIT_COMMENT', 'Lähetä kommentti');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Seuraa tätä merkintää');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Selaimesi ei lähettänyt kelvollista HTTP-Referrer merkkijonoa. Tämä johtuu joko väärin konfiguroidusta selaimesta/proxystä tai Cross Site Request väärennöshyökkäyksestä (XSRF). Pyytämääsi toimintoa ei suoritettu.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Kommentti #%s on jo hyväksytty');
@define('COMMENT_EDITED', 'Valittua kommenttia on muokattu');
@define('COMMENTS_WILL_BE_MODERATED', 'Kommentit tarkistetaan ennen julkaisua.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Varoitus: Kommentti tarkistetaan ennen julkaisua');
@define('DELETE_COMMENT', 'Poista kommentti');
@define('APPROVE_COMMENT', 'Hyväksy kommentti');
@define('REQUIRES_REVIEW', 'Vaatii tarkistusta');
@define('COMMENT_APPROVED', 'Kommentti #%s hyvksytty');
@define('COMMENT_DELETED', 'Kommentti #%s poistettu');
@define('COMMENTS_MODERATE', 'Kommentit & paluuviitteet on tarkistettava');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Varoitus: Tätä paluuviitettä ei julkisteta ennen tarkistusta');
@define('DELETE_TRACKBACK', 'Poista paluuviite');
@define('APPROVE_TRACKBACK', 'Hyväksy paluuviite');
@define('TRACKBACK_APPROVED', 'Paluuviite #%s hyväksytty');
@define('TRACKBACK_DELETED', 'Paluuviite #%s poistettu');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Ylin taso');
@define('VIEW_COMMENT', 'Näytä kommentti');
@define('VIEW_ENTRY', 'Näytä merkintä');
@define('LINK_TO_ENTRY', 'Viittaa merkintään');
@define('LINK_TO_REMOTE_ENTRY', 'Viittaa toisen sivuun');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Lähetetään paluuviite URI %s...');
@define('TRACKBACK_SENT', 'Paluuviite lähetetty');
@define('TRACKBACK_FAILED', 'Paluuviite epäonnistui: %s');
@define('TRACKBACK_NOT_FOUND', 'Ei paluuviitteen URI:a.');
@define('TRACKBACK_URI_MISMATCH', 'Automaatin löytämä URI ei vastaa kohde URI:a.');
@define('TRACKBACK_CHECKING', 'Tarkistetaan <u>%s</u> paluuviitteiden varalle...');
@define('TRACKBACK_NO_DATA', 'Kohde on tyhjä');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Ei paluuviitettä: Yhteyttä %s:n porttiin %d ei saatu');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Uusi kommentti seurattuun merkintään "%s"');
@define('SUBSCRIPTION_MAIL', "Moi %s,\n\nSeuraamaasi merkintään \"%s\" on uusi kommentti, otsikolla \"%s\"\nKommentoija on: %s\n\nMerkintä löytyy täältä: %s\n\nVoit peruuttaa seurannan tästä linkistä: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Moi %s,\n\nSeuraamaasi merkintään \"%s\", on uusi linkki \"%s\"\nViittaaja on: %s\n\nLöydät merkinnän linkistä: %s\n\nVoit peruuttaa seurantasi tästä linkistä: %s\n");
@define('SIGNATURE', "\n-- \n%s ohjelmistovalinta on Serendipity.\nParas blogisofta mailla halmeilla..\nTsekkaa <https://s9y.org> saadaksesi lisätietoja.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Blogisi "%s", merkintään "%s" on uusi kommentti.');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Uusi linkki merkintääsi "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Voit:');
@define('NEW_TRACKBACK_TO', 'Uusi paluuviite tehty');
@define('NEW_COMMENT_TO', 'Uusi kommentti');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Kysely %s ei palauttanut yhtään merkintää' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Hakusi %s palautti %s osumaa:');
@define('SEARCH_TOO_SHORT', 'Hakuehtosi ei saa olla 3-merkkiä lyhyempi. Kokeile lisätä * lyhyempien sanojen perään, esim: s9y* huijataksesi hakua käyttämään lyhyempiä hakuehtoja.');
@define('SEARCH_ERROR', 'Haku ei toiminut oletetusti. Huomautus blogin ylläpitäjlle:tämä saattaa johtua puuttuvista kantaindekseistä. MySQL:ssä kantakäyttäjällä on oltava oikeus ajaa kysely : <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Kantavirhe oli: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Tyhjä kommentti, %spalaa%s ja yritä uudelleen');
@define('COMMENT_NOT_ADDED', 'Kommenttia ei lisätty, koska joko merkinnän kommentointi on kielletty, jokin antamasi tieto oli kelvoton tai kommenttisi katsottiin roskapostiksi. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Kommentit alkaen');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Syntaksi virhe asetuksessa "%s". Haluttu tyyppi on "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Näyttää kategoriat.');
@define('CATEGORIES_PARENT_BASE', 'Näytä vain allaolevat kategoriat...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Voit valita kategoriavanhemman, jolloin vain alikategoriat näytetään.');
@define('CATEGORIES_HIDE_PARALLEL', 'Piilota kategoriat, jotka eivät kuulu kategoriapuuhun');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Jos haluat piilottaa kategoriat, jotka eivät kuulu tähän puuhun, valitse tämä. Tämän toiminnon käytössä on eniten järkeä "multi-blog":ssa, jossa on käytössä "Properties/Templates of categories" laajennos.');
@define('CATEGORIES_HIDE_PARENT', 'Piilota valittu kategoriavanhempi?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Jos rajaat valinnan kategoriavanhempaan vain tämän vanhemman lapset näytetään, jos et, näytetään vain kategoriavanhemmat.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Smarty-pohjat käytössä?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Jos otat käyttöön, laajennos käyttää sitä kategorialistan tulostamisessa. Jos otat käyttöön voit vaikuttaa kategorialistan ulkoasuun muokkaamalla "plugin_categories.tpl" pohjaa. Tämä hidastaa toimintaa, joten jos et muokkaa pohjaa, älä käytä tätä.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Näytetäänkö kategorian merkintöjen määrä kategorian vieressä?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Saavatko vierailijat valita useampia kategorioita yhtäaikaisesti?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Jos sallit, katselijat voivat valita useamman kategorian katseltavaksi yhtäaikaisesti.');
@define('CATEGORIES_TO_FETCH', 'Haettavat kategoriat');
@define('CATEGORIES_TO_FETCH_DESC', 'Kenen kategoriat haetaan?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Näyttää käyttäjälistan');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Näytetäänkö kirjoittajan merkintöjen määrä kirjoittajan vieressä?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Kirjoitusten määrä näytetään suluissa kirjoittajan nimen perässä, jos valitset tämän.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Kanavointi');
@define('SHOWS_RSS_BLAHBLAH', 'Näyttää RSS linkit');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 ');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 ');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 ');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 Kommentit');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 ');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'Julkistettavan kanavan ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner kuva');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Kuva näytetäväksi (tai tyhjä, valitaksesi laskurin), palvelimelta feedburner.com, esim: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner otsikko');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Valinnainen otsikko näytettäväksi kuvan vieressä');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner kuvateksti');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Kuvan "tooltip".');
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
@define('ARCHIVE_COUNT', 'Listakohtien lukumäärä');
@define('ARCHIVE_COUNT_DESC', 'Näytettävien kuukausien ja viikkojen kokonaismäärä ');
@define('ARCHIVE_FREQUENCY', 'Kalenterimerkinnän frekvenssi');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalenterimerkintöjen välinen välimatka');
@define('BROWSE_ARCHIVES', 'Selaa arkistoa kuukausittain');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Näytä "Serendipity" tekstinä');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Tulostaa "Serendipity Weblog" tekstinä');
@define('POWERED_BY_SHOW_IMAGE', 'Näytä "Serendipity" logolla');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Näyttää Serendipityn logon');
@define('ADVERTISES_BLAHBLAH', 'Mainostaa Serendipityä');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Käytä https:ää kirjautuaksesi');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Login https:llä, web-palvelimesi tulee tukea tätä ominaisuutta!');
@define('SUPERUSER', 'Blogin ylläpito');
@define('SUPERUSER_OPEN_ADMIN', 'Ylläpito');
@define('SUPERUSER_OPEN_LOGIN', 'Sisäänkirjautuminen');
@define('ALLOWS_YOU_BLAHBLAH', 'Linkki sivupalstaan, blogin ylläpitoon.');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalenteri');
@define('CALENDAR_BOW_DESC', 'Viikon aloittava päivä. Oletus on maanantai');
@define('QUICKJUMP_CALENDAR', 'Pikasiirtymä kalenteriin');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Viikon alusta');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Ota käyttöön laajennoksen laajennos-API');
@define('CALENDAR_EXTEVENT_DESC', 'Jos käytössä, voivat muut laajennokset korostaa omia merkintöjään kalenterissa. Ota käyttöön vain, jos olet asentanut laajennoksia, jotka tarvitsevat tätä, muutoin blogisi hidastuu tarpeettomasti.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Etsi merkintää');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Lisää HTML-raapaleen sivupalstaan');
@define('THE_NUGGET', 'HTML-raapale!');
@define('BACKEND_TITLE', 'Lisätietoja laajennoksen omissa asetuksissa');
@define('BACKEND_TITLE_FOR_NUGGET', 'Voit määrittää otsikon raapaleellesi käytettäväksi laajennosten asetuksissa. Hyödyllinen, mikäli käytät useampia raapaleita.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Näytä huippupoistumisosoitteet/viittausosoitteet linkkeinä?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Ei", tekstinä google spämmin estämiseksi. "Kyllä", linkkeinä. "Oletus", käytä oletusasetusten valintaa (suositeltu vaihtoehto).');
@define('HAVE_TO_BE_LOGGED_ON', 'Sinun täytyy kirjautua tätä toiminta varten');
@define('WELCOME_TO_ADMIN', 'Tervetuloa Serendipityn ylläpitoon.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Short Comment');
@define('MEDIA_PROPERTY_COMMENT2', 'Long Comment');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Title');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipityä ei ole asennettu. Ole kiltti ja <a href="%s">asenna</a> se nyt.');
@define('COMMENT_ADDED_CLICK', 'Napasauta %spalataksesi%s kommentteihin, ja %s sulkeaksesi%s tämän ikkunan.');
@define('COMMENT_NOT_ADDED_CLICK', 'Napsauta %spalataksesi%s kommentteihin, ja %ssulkeaksesi%s tämän ikkunan.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'Kohteen URI ylittää tiedostokokorajan %s tavua.');
@define('CLICK_FILE_TO_INSERT', 'Napsauta tiedostoa, jonka haluat lisätä:');
@define('SELECT_FILE', 'Valitse lisättävä tiedosto');
@define('MANAGE_IMAGES', 'Kuvien hallinta');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Tai');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Katselu: Ulkoiset palvelut');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Katselu: Ominaisuudet');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Katselu: Täydet modifikaatiot');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Katselu: Näkymät');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Katselu: Merkintöihin liittyvät');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Ylläpito: Muokkain');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Ylläpito: Käyttäjähallinta');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Ylläpito: Meta-tiedot');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Ylläpito: Mallit');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Ylläpito: Ominaisuudet');
@define('PLUGIN_GROUP_IMAGES', 'Kuvien hallinta');
@define('PLUGIN_GROUP_ANTISPAM', 'Roskapostin torjunta');
@define('PLUGIN_GROUP_MARKUP', 'Notaatio');
@define('PLUGIN_GROUP_STATISTICS', 'Tilastot');
@define('IMPORT_WELCOME', 'Tervetuloa Serendipityn tuontiagentuuriin');
@define('USER_SELF_INFO', 'Kirjautuneena %s (%s)');
@define('IMPORT_WHAT_CAN', 'Täällä voit tuoda merkintöjä muista blogi-ohjelmistoista.');
@define('IMPORT_SELECT', 'Valitse ohjelma, josta haluat tuoda');
@define('MANAGE_STYLES', 'Mallien ylläpito');
@define('SELECT_A_PLUGIN_TO_ADD', 'Valitse laajennos, jonka haluat asentaa');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Asennetut laajennokset');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Peruuta');
@define('DELETE_SELECTED_COMMENTS', 'Poista valitut kommentit');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Etsi media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Virhe: Tiedostoa ei ole!');
@define('ERROR_SOMETHING', 'Virhe: Jokin meni pieleen.');
@define('DIRECT_LINK', 'Suora linkki tähän kirjaukseen');
@define('SELECT_TEMPLATE', 'Valitse malli, jota haluat käyttää');
@define('DATABASE_ERROR', 'Serendipity virhe: tietokantayhteys virhe - poistutaan.');
@define('LIMIT_TO_NUMBER', 'Montako näytetään?');
@define('DIRECTORIES_AVAILABLE', 'Valitsemalla hakemistolistasta hakemiston valitset hakemiston johon uusi hakemisto luodaan.');
@define('CATEGORY_INDEX', 'Kategoriat');
@define('PAGE_BROWSE_PLUGINS', 'Sivu (%s/%s), sisältää yhteensä %s laajennosta.');
@define('CHARSET_NATIVE', 'Kansallinen');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Serendipityn XML-RPC API liittymä ei ole käytössä tietoturvaongelmien ja pienen käyttäjäkunnan takia. Joten käyttääksesi XML-RPC liittymää tarvitset XML-RPC-laajennoksen. URL, jota sovelluksesi käyttävät ei ole muuttunut. Saat liittymän takaisin käyttöösi, kun asennat laajennoksen.');
@define('AUTHORS_ALLOW_SELECT', 'Saavatko lukijat valita useamman kirjoittajan merkintöjä yhtäaikaisesti?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Mahdollistaa monivalinnan kirjoittajista. Näyttää kaikkien valittujen kirjoittajien merkinnät.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');