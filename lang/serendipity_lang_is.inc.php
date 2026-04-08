<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation by Örn Arnarson <orn@arnarson.net>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'is_IS.ISO-8859-1, is_IS.ISO8859-1, icelandic, is, is_IS');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%y %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Tegund');
@define('PREVIEW', 'Skoða');
@define('DATE', 'Dagsetning');
@define('TIME', 'Time');
@define('APPEARANCE', 'Útlit');
@define('LOGIN', 'Skrá inn');
@define('LOGOUT', 'Skrá út');
@define('LOGGEDOUT', 'Útskráður.');
@define('CREATE', 'Búa til');
@define('BACK', 'Til baka');
@define('FORWARD', 'Áfram');
@define('ANONYMOUS', 'Nafnlaus');
@define('RECENT', 'Nýlegt...');
@define('OLDER', 'Eldra...');
@define('DONE', 'Búin');
@define('TITLE', 'Fyrirsögn');
@define('DESCRIPTION', 'Lýsing');
@define('PLACEMENT', 'Staðsetning');
@define('DELETE', 'Eyða');
@define('SAVE', 'Vista');
@define('UP', 'Upp');
@define('DOWN', 'Niður');
@define('PREVIOUS', 'Fyrri');
@define('NEXT', 'Næsta');
@define('ENTRIES', 'færslur');
@define('CATEGORIES', 'Flokkar');
@define('NAME', 'Nafn');
@define('EMAIL', 'Netfang');
@define('HOMEPAGE', 'Heimasíða');
@define('COMMENT', 'Athugasemd');
@define('VIEW', 'Skoða');
@define('HIDE', 'Fela');
@define('WEEK', 'Vika');
@define('WEEKS', 'Vikur');
@define('MONTHS', 'Mánuðir');
@define('DAYS', 'Dagar');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Árangur');
@define('COMMENTS', 'Athugasemdir');
@define('ADD_COMMENT', 'Bæta við athugasemd');
@define('NO_COMMENTS', 'Engar athugasemdir.');
@define('POSTED_BY', '');
@define('ON', 'þann');
@define('NO_CATEGORY', 'Enginn flokkur');
@define('CATEGORY', 'Flokkur');
@define('EDIT', 'Breyta');
@define('GO', 'Go!');
@define('YES', 'Já');
@define('NO', 'Nei');
@define('NOT_REALLY', 'Nei, eiginlega ekki...');
@define('DUMP_IT', 'Fleygðu þessu!');
@define('IN', 'í');
@define('AT', 'sendi klukkan');
@define('LEFT', 'vinstri');
@define('RIGHT', 'hægri');
@define('CENTER', 'center');
@define('ARCHIVES', 'Tímavélin');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Leita');
@define('TRACKBACKS', 'Tilvísanir');
@define('TRACKBACK', 'Tilvísun');
@define('NO_TRACKBACKS', 'Engar tilvísanir');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Útdráttur');
@define('TRACKED', 'Rakið');
@define('USER', 'Notandi');
@define('USERNAME', 'Notandanafn');
@define('PASSWORD', 'Lykilorð');
@define('HIDDEN', 'falinn');
@define('IMAGE', 'Mynd');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Höfundur');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'útgáfa');
@define('INSTALL', 'Setja upp');
@define('REPLY', 'Svara');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Villa');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Þvinga');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Stjórn:');
@define('ADMIN_FRONTPAGE', 'Forsíða');
@define('QUOTE', 'Tilvitnun');
@define('NONE', 'engin(n)');
@define('GROUP', 'Hópur');
@define('AUTHORS', 'Höfundar');
@define('UPGRADE', 'Uppfæra');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Allir höfundar');
@define('PREVIOUS_PAGE', 'fyrri síða');
@define('NEXT_PAGE', 'næsta síða');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Allir flokkar');
@define('LAST_UPDATED', 'Síðast uppfært');
@define('IP_ADDRESS', 'IP tala');
@define('CHARSET', 'Stafasett (charset)');
@define('REFERER', 'Ávísari');
@define('APPROVE', 'Samþykkja');
@define('NOT_FOUND', 'Fannst ekki');
@define('WRITABLE', 'Skrifanlegt');
@define('NOT_WRITABLE', 'Ekki skrifanlegt');
@define('WELCOME_BACK', 'Velkomin(n) aftur,');
@define('USE_DEFAULT', 'Sjálfgefið');
@define('SORT_BY', 'Raða eftir');
@define('SORT_ORDER', 'Röðunarregla');
@define('SORT_ORDER_ASC', 'Upp á við');
@define('SORT_ORDER_DESC', 'Niður á við');
@define('FILTERS', 'Síur');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Virkja stækka allt');
@define('TOGGLE_OPTION', 'Virkja valmöguleika');
@define('IN_REPLY_TO', 'Sem svar við');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Möppum');
@define('BACK_TO_BLOG', 'Aftur á bloggið');
@define('HTML_NUGGET', 'HTML stubbur');
@define('TITLE_FOR_NUGGET', 'Titill fyrir stubbinn');
@define('COMMENT_ADDED', 'Athugasemd þinni hefur verið bætt við. ');
@define('ENTRIES_FOR', 'Færslur fyrir %s');
@define('NO_ENTRIES_TO_PRINT', 'Engar færslur til að sýna.');
@define('COMMENT_DELETE_CONFIRM', 'Ertu viss um að þú viljir eyða athugasemd #%d, skrifaðri af %s?');
@define('DELETE_SURE', 'Ertu viss um að þú viljir eyða #%s endanlega?');
@define('MEDIA_FULLSIZE', 'Fylla skjáinn');
@define('SIDEBAR_PLUGIN', 'hliðarrammaviðbót');
@define('EVENT_PLUGIN', 'atburðaviðbót');
@define('PLUGIN_ITEM_DISPLAY', 'Hvar ætti merkið að vera sýnt?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Opna bara færslu');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Yfirsýn yfir bara blaðsíðu');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Öllum stundum');
@define('DIRECTORY_WRITE_ERROR', 'Get ekki skrifað í möppu %s. Athugaðu eiginleika hennar.');
@define('FILE_WRITE_ERROR', 'Gat ekki skrifað í skrá %s.');
@define('INCLUDE_ERROR', 'serendipity villa: gat ekki innlimað %s - hætti.');
@define('DO_MARKUP', 'Gera breytingar á texta');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Dagsetningarsnið');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Snið alvöru dagsetningar færslunnar, sem notar strftime() breytu PHP. (Sjálfgefið: "%s")');
@define('APPLY_MARKUP_TO', 'Virkja textabreytingar á %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML takki');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Hlekkir á XML strauma verða sýnd með þessari mynd. Skildu eftir tómt fyrir sjálfgefið gildi, eða sláðu inn \'none\' til að óvirkja.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Eyði skrá %s...');
@define('SETTINGS_SAVED_AT', 'Nýju stillingarnar voru vistaðar klukkan %s');
@define('INVERT_SELECTIONS', 'Skipta út völdu fyrir óvalið');

@define('PERSONAL_SETTINGS', 'Persónulegar stillingar');
@define('DO_MARKUP_DESCRIPTION', 'Virkja breytinga rá texta út frá ákveðnum táknum (broskarlar, styttri leiðir í gegnum *, /, _, ...). Óvirking á þessu mun varðveita allan HTML-kóða í textanum. Sjálfgefið gildi er "Já".');
@define('BASE_DIRECTORY', 'Grunnmappa');
@define('PERM_READ', 'Lesréttindi');
@define('PERM_WRITE', 'Skrifréttindi');
@define('PERM_DENIED', 'Aðgerð ekki leyfð.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity uppsetning');
@define('WELCOME_TO_INSTALLATION', 'Velkomin(n) í uppsetningu Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Fyrst munum við líta á núverandi uppsetningu og finna út úr hvort einhver samhæfingarvandamál séu til staðar');
@define('ERRORS_ARE_DISPLAYED_IN', 'Villur eru birtar í %s, meðmæli í %s og árangur í %s');
@define('RED', 'rauðu');
@define('YELLOW', 'gulu');
@define('GREEN', 'grænu');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s for-uppsetningarskýrsla');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP uppsetning');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Stýrikerfi');
@define('WEBSERVER_SAPI', 'SAPI vefþjóns');
@define('PHPINI_CONFIGURATION', 'php.ini stillingar');
@define('RECOMMENDED', 'Mælt með');
@define('ACTUAL', 'Raungildi');
@define('PERMISSIONS', 'Réttindi');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Réttindi er hægt að stilla með því að keyra skeljarskipunina `<em>%s</em>` á möppuna þar sem þetta mistókst, eða með því að breyta þessu í FTP forriti');
@define('PROBLEM_DIAGNOSTIC', 'Vegna vandkvæða í greiningu geturðu ekki haldið áfram fyrr en ofangreindar villur eru lagfærðar');
@define('SELECT_INSTALLATION_TYPE', 'Veldu hvaða tegund uppsetningar þú vilt nota');
@define('RECHECK_INSTALLATION', 'Skoða uppsetningu aftur');
@define('SIMPLE_INSTALLATION', 'Einföld uppsetning');
@define('EXPERT_INSTALLATION', 'Flókin uppsetning');
@define('COMPLETE_INSTALLATION', 'Ljúka uppsetningu');
@define('WONT_INSTALL_DB_AGAIN', 'mun ekki setja upp gagnagrunnin aftur');
@define('THEY_DO', 'þeir/þau gera það');
@define('THEY_DONT', 'hann er það ekki');
@define('CHECK_DATABASE_EXISTS', 'Er að athuga hvort gagnagrunnur sé þegar til.  Ef þú sérð villu í uppflettingu á gagnagrunni, hundsaðu hana...');
@define('CREATE_DATABASE', 'Geri sjálfgefnu uppsetninguna á gagnagrunninum...');
@define('ATTEMPT_WRITE_FILE', 'Reyni að skrifa %s skrána...');
@define('CREATING_PRIMARY_AUTHOR', 'Bý til aðalhöfund \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Set upp sjálfgefið forsnið');
@define('INSTALLING_DEFAULT_PLUGINS', 'Set upp sjálfgefnar viðbætur');
@define('SERENDIPITY_INSTALLED', 'Uppsetning Serendipity tókst');
@define('VISIT_BLOG_HERE', 'Heimsæktu nýja bloggið þitt hér');
@define('THANK_YOU_FOR_CHOOSING', 'Takk fyrir að velja Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Villa fannst í uppsetningunni');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Knúið af');
@define('ADMIN_FOOTER_POWERED_BY', 'Knúið af Serendipity %s og PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Venjulegur notandi');
@define('USERLEVEL_CHIEF_DESC', 'Stjórnandi');
@define('USERLEVEL_ADMIN_DESC', 'Umsjónarmaður');
@define('WWW_USER', 'Breyttu www í notandann sem að apache keyrir sem (t.d. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Mappan %s er ekki til og gat ekki búið hana til. Vinsamlegast búðu hana til á annan hátt');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; keyra <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Get ekki keyrt %s skrána');
@define('FILE_CREATE_YOURSELF', 'Vinsamlegast búðu skrána til sjálfur eða athugaðu eiginleika');
@define('COPY_CODE_BELOW', '<br />* Vistaðu bara kóðann fyrir neðan og settu hann í %s í %s möppunni:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Þegar þú ert búinn að því, uppfærðu þá síðunna með "reload/refresh" takkanum.');
@define('ERROR_TEMPLATE_FILE', 'Gat ekki opnað forsniðsskrá, vinsamlegast uppfærðu Serendipity!');
@define('HTACCESS_ERROR', 'Til að athuga uppsetninguna á staðbundna vefþjóninum þarf serendipity að geta skrifað í skrána ".htaccess". Þetta var ekki hægt vegna leyfisstillinga. Vinsamlegast breyttu leyfum skráarinnar svona:  <br />&nbsp;&nbsp;%s<br />og endurhladdu þessari síðu.');
@define('EMPTY_SETTING', 'Þú skilgreindir ekki löglegt gildi fyrir "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity hefur tekið eftir að stillingarnar þínar eru uppsettar fyrir útgáfu %s, en núverandi útgáfa er %s. Þú þarft því að uppfæra! <a href="%s">Smelltu hér</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Góðan dag, og velkomin í uppfærsluforrit Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Ég er hér til að hjálpa þér að uppfæra Serendipity %s uppsetninguna þína.');
@define('SERENDIPITY_UPGRADER_WHY', 'Þú sérð þessi skilaboð vegna þess að þú hefur sett upp Serendipity %s, en þú hefur ekki uppfært gagnagrunnsuppsetninguna til að passa við þessa útgáfu');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Uppfærslur gagnagrunns (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Ég fann eftirfarandi .sql skrár sem þarf að keyra áður en þú getur haldið áfram með venjulega keyrslu á Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Aðgerðir bundar við þessa útgáfu');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Engar aðgerðir bundar við þessa útgáfu fundust');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Viltu að ég framkvæmi ofangreindar aðgerðir?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nei, ég mun gera þær handvirkt');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Já takk, gerðu það');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Það virðist sem svo að þú þurfir ekki að keyra neinar uppfærslur');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Uppfærslu lokið');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Þú hefur hundsað uppfærslustig Serendipity. Vinsamlegast gakktu úr skugga um að gagnagrunnurinn sé rétt uppsettur, og fyrirætluð virkni sé í gangi');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Serendipity uppsetningin þín hefur nú verið uppfærð í útgáfu %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Þú getur farið aftur á bloggið þitt með því að smella %shér%s');
@define('ADMIN_ENTRIES', 'Færslur');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Gat ekki tengst MySQL gagnagrunni: %s.');
@define('COULDNT_SELECT_DB', 'Gat ekki valið gagnagrunn: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Gat ekki valið notandaupplýsingar: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Gat ekki valið flokksupplýsingar: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Gat ekki valið færsluupplýsingar: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Gat ekki valið athugasemdaupplýsingar: %s.');
@define('MYSQL_REQUIRED', 'Þú verður að hafa MySQL viðbótina til að gera þetta.');
@define('CREATE_AUTHOR', 'Búa til höfund \'%s\'.');
@define('CREATE_CATEGORY', 'Búa til flokk \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type gagnaskrá');
@define('INSTALL_DBPORT', 'Port gagnagrunns');
@define('INSTALL_DBPORT_DESC', 'Portið sem notað er til að tengjast við gagnagrunnsþjóninn þinn');
@define('IMPORT_PLEASE_ENTER', 'Vinsamlegast sláðu inn gögnin eins og er farið fram á að neðan');
@define('IMPORT_NOW', 'Flytja inn núna!');
@define('IMPORT_STARTING', 'Hef innflutningsferlið...');
@define('IMPORT_FAILED', 'Innflutningur mistókst');
@define('IMPORT_DONE', 'Innflutningi lokið');
@define('IMPORT_WEBLOG_APP', 'Bloggkerfi');
@define('IMPORT_NOTES', 'Athuga:');
@define('IMPORT_STATUS', 'Staða eftir innflutning');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Setja allan innfluttan texta í "body" hlutann og ekki skipta í "aukainnihald" hlutann.');
@define('IMPORT_GENERIC_RSS', 'Almennur RSS innflutningur');
@define('ACTIVATE_AUTODISCOVERY', 'Senda tilvísanir á hlekki sem fyrirfinnast í færslunni');
@define('RSS_IMPORT_CATEGORY', 'Nota þennan flokk fyrir færslur sem passa ekki í neinn flokk');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Skjalið %s fannst ekki.');
@define('CONVERT_HTMLENTITIES', 'Reyna að Try to breyta HTML færslum sjálfkrafa?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Stjórnborð Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Þú virðist hafa slegið inn rangt notandanafn eða lykilorð');
@define('PLEASE_ENTER_CREDENTIALS', 'Vinsamlegast auðkenndu þig.');
@define('PLEASE_ENTER_2FA', 'Please enter the mailed login code.');
@define('AUTOMATIC_LOGIN', 'Vista upplýsingar');
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
@define('MEDIA', 'Gögn');
@define('MEDIA_LIBRARY', 'Gagnasafn');
@define('ADD_MEDIA', 'Bæta við gögnum');
@define('MANAGE_DIRECTORIES', 'Sýsla með möppur');
@define('CONFIGURATION', 'Stillingar');

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
@define('ENTRY_PUBLISHED_FUTURE', 'Þessi færsla hefur ekki enn verið birt.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Viðbætur hliðarramma');
@define('EVENT_PLUGINS', 'Viðbætur atburða');
@define('CONFIGURE_PLUGINS', 'Stilla viðbætur');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Óuppfylltar þarfir: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Uppfæra í útgáfu %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Smelltu hér til að setja inn nýja %s');
@define('ALREADY_INSTALLED', 'Þegar uppsett');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Breyta færslum');
@define('EDIT_ENTRY', 'Breyta færslu');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Drög');
@define('PUBLISH', 'Birta');
@define('CONTENT', 'Innihald');
@define('ENTRIES_PER_PAGE', 'færslur á síðu');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Þrautseigar innsetningar');
@define('PAGE_BROWSE_ENTRIES', 'Blaðsíða %s af %s, með samtals %s færslur');
@define('FIND_ENTRIES', 'Finna færslur');
@define('RIP_ENTRY', 'Hvíldu í friði, færsla #%s');
@define('NEW_ENTRY', 'Nýja færslu');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Innihald færslu');
@define('EXTENDED_BODY', 'Aukainnihald');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Drög að færslu hafa verið vistuð');
@define('IFRAME_PREVIEW', 'Serendipity býr nú til sýnishorn af færslunni þinni...');
@define('IFRAME_WARNING', 'Vafrinn þinn skilur ekki iframes hugtakið. Vinsamlegast opnaði serendipity_config.inc.php skrána þína og stilltu $serendipity[\'use_iframe\'] breytinu á FALSE.');
@define('DATE_INVALID', 'Varúð: Dagsetningin sem þú skilgreindir var ólögleg. Hún verður að vera gefin í ÁÁÁÁ-MM-DD KK:MM sniði.');
@define('ADVANCED_OPTIONS', 'Þróaðir möguleikar');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Það er ekki ætlast til þess að smellt sé á þennan hlekk. Hann inniheldur tilvísunar URIs lóðina fyrir þessa færslu. Þú getur notað þetta URI til að senda ping- & tilvísanir frá eigin bloggi á þessa færslu. Til að afrita þennan hlekk, hægrismelltu þá á hlekkinn og veldu "Copy Shortcut" í Internet Explorer, og "Copy Link Location" í Mozilla.');
@define('RESET_DATE', 'Endurstilla dagsetningu');
@define('RESET_DATE_DESC', 'Smelltu hér til að endurstilla dagsetningu í núverandi tíma');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Sýsla með notendur');
@define('CREATE_NEW_USER', 'Búa til nýjan notanda');
@define('CREATE_NOT_AUTHORIZED', 'Þú getur ekki breytt notendum á með sama stjórnstig og þú');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Þú getur ekki búið til notendur með hærra stjórnstig en þú');
@define('CREATED_USER', 'Nýr notandi %s hefur verið búinn til');
@define('MODIFIED_USER', 'Eiginleikum notanda %s hefur verið breytt');
@define('USER_LEVEL', 'Stjórnstig');
@define('WARNING_NO_GROUPS_SELECTED', 'Varúð: Þú valdir ekki neina hópa. Þetta myndi skrá þig út úr notendahópastjórn og þ.afl. myndu þínum hópum ekki verða breytt.');
@define('DELETE_USER', 'Þú ert að fara að eyða notanda #%d %s. Ertu viss? Þá verður ekki hægt að sýna færslur eftir hann á síðunni.');
@define('DELETED_USER', 'Notanda #%d %s eytt.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Vinna með hópa');
@define('DELETED_GROUP', 'Hópur #%d %s eytt.');
@define('CREATED_GROUP', 'Nýr hópur %s hefur verið búinn til');
@define('MODIFIED_GROUP', 'Eiginleikum hóps %s hefur verið breytt');
@define('CREATE_NEW_GROUP', 'Búa til nýjan hóp');
@define('DELETE_GROUP', 'Þú ert að fara að eyða hóp #%d %s. Ertu viss?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Finna athugasemdir');
@define('COMMENTS_FILTER_SHOW', 'Sýna');
@define('COMMENTS_FILTER_ALL', 'Allt');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Einungis samþykktar');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Bíða eftir samþykki');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Ertu viss um að þú viljir eyða völdum athugasemdum?');
@define('PAGE_BROWSE_COMMENTS', 'Blaðsíða %s af %s, með %s athugasemdir');
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
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Flokkur vistaður');
@define('CATEGORY_ALREADY_EXIST', 'Flokkur með nafninu "s" er þegar til');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Flokki #%s eytt. Færslur færðar í flokk #%s');
@define('CATEGORY_DELETED', 'Flokki #%s eytt.');
@define('INVALID_CATEGORY', 'Enginn flokkur var valinn til eyðingar');
@define('EDIT_THIS_CAT', 'Breyti "%s"');
@define('CATEGORY_REMAINING', 'Eyða þessum flokki og færa færslur hans í þennan flokk: %s');
@define('PARENT_CATEGORY', 'Yfirflokkur');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Búa til nýjan flokk');
@define('ALREADY_SUBCATEGORY', '%s er þegar undirmappa %s.');
@define('NO_CATEGORIES', 'Engir flokkar');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Flytja inn gögn');
@define('EXPORT_ENTRIES', 'Flytja út gögn');
@define('EXPORT_FEED', 'Flytja út allan RSS straum');
@define('CREATE_THUMBS', 'Endurvinna sýnishorn');
@define('WARNING_THIS_BLAHBLAH', "VARÚÐ:\\nÞetta gæti tekið langan tíma ef það eru margar myndir án sýnishorna.");
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
@define('TEMPLATE_SET', '\'%s\' hefur verið sett sem virka forsniðið þitt');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varúð: Forsniðið sem þú ert með valið er að nota úreldar forsniðsaðferðir. Þú ættir að uppfæra ef þú hefur tök á því');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Sérsniðið stjórnkerfi mögulegt');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Setja sem forsnið');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Prófa &amp; vista');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Fjarlægja hakaðar viðbætur');
@define('SAVE_CHANGES_TO_LAYOUT', 'Vista útlitsbreytingar');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Samhæfi gagnagrunn við myndamöppu');
@define('SYNC_DONE', 'Búin (Samhæfði %s myndir).');
@define('RESIZE_BLAHBLAH', '<b>Breyta stærð %s</b>');
@define('ORIGINAL_SIZE', 'Upprunaleg stærð: <i>%sx%s</i> pixel');
@define('RESIZING', 'Breyti stærð');
@define('RESIZE_DONE', 'Búin (breytti stærð %s mynda).');
@define('KEEP_PROPORTIONS', 'Halda hlutföllum');
@define('REALLY_SCALE_IMAGE', 'Ertu viss að þú viljir breyta stærð myndarinnar? Það er ekki hægt að breyta til baka!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Hér getur þú breytt stærð myndarinnar. Ef þú vilt breyta stærð hennar í réttum hlutföllum, sláðu þá inn eitthvað gildi í annan tveggja reitanna og ýttu á TAB takkann. -- Stærð þeirra verður reiknuð sjálfvirkt svo hlutföllin haldist rétt.</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Ný stærð: ');
@define('SCALING_IMAGE', 'Breyti stærð %s í %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Mappan <strong>%s</strong> hefur verið búin til.');
@define('PARENT_DIRECTORY', 'Yfirmappa');
@define('CONFIRM_DELETE_DIRECTORY', 'Ertu viss um að þú viljir fjarlægja allt innihald möppunnar %s?');
@define('ERROR_NO_DIRECTORY', 'Villa: Mappan %s er ekki til');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Gat ekki fjarlægt möppuna sem var ekki tóm. Athugaðu "þvinga eyðslu" hakið ef þú vilt fjarlægja þessar skrár líka, og reyndi svo aftur. Skrár sem enn eru til:');
@define('DIRECTORY_DELETE_FAILED', 'Eyðsla möppu %s gekk ekki. Athugaðu réttindi eða skilaboð að ofan.');
@define('DIRECTORY_DELETE_SUCCESS', 'Mappa Directory %s successfully deleted.');
@define('CHECKING_DIRECTORY', 'Athuga skrár í möppu %s');
@define('DELETE_DIRECTORY', 'Eyða þessari möppu');
@define('DELETE_DIRECTORY_DESC', 'Þú ert að fara að eyða innihaldi möppu sem er með margmiðlunargögn, sem eru mögulega í notkun í sumum færsla þinna.');
@define('FORCE_DELETE', 'Neyða eyðslu skráa sem eru ekki inni í miðlunargagnagrunninum');
@define('CREATE_DIRECTORY', 'Búa til möppu');
@define('CREATE_NEW_DIRECTORY', 'Búa til nýja möppu');
@define('CREATE_DIRECTORY_DESC', 'Hér geturðu búið til nýja möppu til að setja gögn. Veldu nafn á nýju möppuna þína og veldu möppu til að setja hana í ef við á.');
@define('ABOUT_TO_DELETE_FILE', 'Þú ert að far aað eyða <b>%s</b><br />Ef þú ert að nota þessa skrá í einhverri af færslunum þínum, mun það valda dauðum hlekkjum eða óvirkum myndum<br />Ertu viss um að þú viljir halda áfram?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Villa: Skráin er þegar til á vélinni!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Fann ekki skrána <b>%s</b>, kannski er þegar búið að eyða henni?');
@define('ERROR_FILE_FORBIDDEN', 'Þú mátt ekki vista skrár með virkt innihald');
@define('REMOTE_FILE_NOT_FOUND', 'Skráin fannst ekki á endaþjóninum. Ertu viss um að slóðin: <b>%s</b> sé rétt?');
@define('FILE_FETCHED', '%s sótt sem %s');
@define('FILE_UPLOADED', 'Skrá %s vistuð sem %s');
@define('DELETE_FILE_FAIL', 'Gat ekki eytt skrá <b>%s</b>');
@define('DELETE_FILE', 'Eyddi skrá nenfdri <b>%s</b>');
@define('FOUND_FILE', 'Fann nýja/breytta skrá: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Villa: Nýja skráarnafnið er þegar í notkun, veldu annað!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'hotlinkað');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Sláðu inn nýtt nafn fyrir: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Bæti við mynd...');
@define('THUMB_CREATED_DONE', 'Sýnishorn búið til.<br>Lokið.');
@define('THUMBNAIL_USING_OWN', 'Nota %s sem eigið sýnishorn, þar sem hún er þegar svo lítil.');
@define('THUMBNAIL_FAILED_COPY', 'Vildi nota %s sem eigið sýnishorn, en gat ekki afritað!');
@define('DELETE_THUMBNAIL', 'Eyddi sýnishorni myndar nefnt <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Óþekkt villa hefur komið upp, skrá ekki vistuð. Kannski var stærð skráarinnar meiri heldur en hámarksstærðin sem netjónninn skilgreinir. Hafðu samband við þjónustuaðilann þinn eða breytti php.ini skránni til að leyfa stærri skráarflutninga.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('MEDIA_UPLOAD_POST_MAX_SIZEERROR', 'Error: Could not upload files because their total size was too big (check PHP\'s post_max_size setting)');
@define('HOTLINK_DONE', 'Skrá hotlinkuð.<br />Búin.');
@define('DELETE_HOTLINK_FILE', 'Eyddi hotlinkaðri skrá, nefnd <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Gat ekki framkvæmt: "%s", villa: %s, return var: %d');
@define('SKIPPING_FILE_EXTENSION', 'Sleppi skrá: Vantar ending á %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Sleppi skrá: %s ekki læsileg.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Ég vil nota sýnishorn í færslunni.');
@define('I_WANT_BIG_IMAGE', 'Ég vil nota stærri myndina í færslunni.');
@define('I_WANT_NO_LINK', ' Ég vil birta þetta sem mynd');
@define('I_WANT_IT_TO_LINK', 'Ég vil birta þetta sem hlekk á þessa slóð:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Stærð myndar');
@define('IMAGE_ALIGNMENT', 'Staðsetning myndar');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Innsetning myndar');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Þú valdir %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Snúa mynd 90 gráður rangsælis');
@define('IMAGE_ROTATE_RIGHT', 'Snúa mynd 90 gráður réttsælis');
@define('MEDIA_RENAME', 'Endurnefna skrána');
@define('THUMBNAIL_SHORT', 'Sýnishorni');
@define('ORIGINAL_SHORT', 'Upphafl.');
@define('SORT_ORDER_NAME', 'Skráarnafn');
@define('SORT_ORDER_EXTENSION', 'Skráarending');
@define('SORT_ORDER_SIZE', 'Skráarstærð');
@define('SORT_ORDER_WIDTH', 'Breidd myndar');
@define('SORT_ORDER_HEIGHT', 'Hæð myndar');
@define('SORT_ORDER_DATE', 'Dagsetning vistunar');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Bæta við skrá í gagnageymsluna þína:</b><p>Hér geturðu vistað gagnaskrár, eða sagt mér að sækja þær einhversstaðar annarsstaðar frá af vefnum! Ef þú ert ekki með mynd við hæfi, <a href="https://images.google.com/" target="_blank">leitaðu að myndum á google</a> sem á við það sem þú ert að hugsa. Niðurstöðurnar eru oft nytsamlegar og fyndnar :)</p><p><b>Veldu leið:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Sláðu inn slóð skráarinnar til að sækja:');
@define('ENTER_MEDIA_UPLOAD', 'Veldu skrána sem þú vilt vista:');
@define('SAVE_FILE_AS', 'Vista skrá sem:');
@define('STORE_IN_DIRECTORY', 'Vista innan eftirfarandi möppu: ');
@define('IMAGE_MORE_INPUT', 'Bæta við fleiri myndum');
@define('ENTER_MEDIA_URL_METHOD', 'Sóknaraðferð:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Athuga: Ef þú vilt hotlinka á þjón, gakktu úr skuggu um að þú hafir réttindi á viðkomandi vefsíðu, eða að þú eigir vefsíðuna. Hotlink leyfir þér að nota myndir sem eru ekki á þínum vefþjóni án þess að vista þær á þjóninum.');
@define('FETCH_METHOD_IMAGE', 'Sækja mynd á þjóninn þinn');
@define('FETCH_METHOD_HOTLINK', 'Hotlinka á þjón');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Breyta stærð myndarinnar');
@define('MEDIA_DELETE', 'Eyða þessari skrá');
@define('FILES_PER_PAGE', 'Skrár á síðu');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Engar myndir fundust');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'allar möppur');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Stillingar skrifaðar &amp; vistaðar');
@define('DIAGNOSTIC_ERROR', 'Við urðum vör við einhverjar villur þegar við keyrðum greiningar á upplýsingunum sem þú gafst:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Stillingar gagnagrunns');
@define('INSTALL_CAT_DB_DESC', 'Hér getur þú slegið inn allar upplýsingar um gagnagrunninn. Serendipity þarf þetta til að geta virkað');
@define('INSTALL_DBTYPE', 'Tegund gagnagrunns');
@define('INSTALL_DBTYPE_DESC', 'Tegund gagnagrunns');
@define('INSTALL_DBHOST', 'Vélarnafn (host) gagnagrunns');
@define('INSTALL_DBHOST_DESC', 'Vélarnafnið á gagnagrunninum þínum');
@define('INSTALL_DBUSER', 'Notandi gagnagrunns');
@define('INSTALL_DBUSER_DESC', 'Notandanafnið sem notað verður til að tengjast gagnagrunninum');
@define('INSTALL_DBPASS', 'Lykilorð gagnagrunns');
@define('INSTALL_DBPASS_DESC', 'Lykilorðið sem nota á með notandanafninu að ofan');
@define('INSTALL_DBNAME', 'Nafn gagnagrunns');
@define('INSTALL_DBNAME_DESC', 'Nafnið á gagnagrunninum þínum');
@define('INSTALL_DBPREFIX', 'Fasti á undan færslum í gagnagrunni');
@define('INSTALL_DBPREFIX_DESC', 'Fasti fyrir nöfn í töflum, t.d. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Viðhalda tengingum?');
@define('INSTALL_DBPERSISTENT_DESC', 'Virkja notkun langlífra tenginga í gagnagrunn, lesa meira <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">hér</a>. Að jafnaði mælum við ekki með þessu');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Slóðir');
@define('INSTALL_CAT_PATHS_DESC', 'Nokkrar slóðir á mikilvægar möppur og skrár. Ekki gleyma skástrikinu á eftir möppunöfnum (mappa/)!');
@define('INSTALL_FULLPATH', 'Full slóð');
@define('INSTALL_FULLPATH_DESC', 'Full og algjör slóð á serendipity uppsetninguna þína');
@define('INSTALL_UPLOADPATH', 'Vistunarslóð');
@define('INSTALL_UPLOADPATH_DESC', 'All sem er vistað mun fara hingað, m.t.t. fulla slóð - vanalega \'uploads\'');
@define('INSTALL_RELPATH', 'Hlutfallsleg slóð');
@define('INSTALL_RELPATH_DESC', 'Slóðin á serendipity fyrir vafrann þinn, vanalega \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Hlutfallsleg slóð á forsnið');
@define('INSTALL_RELTEMPLPATH_DESC', 'Slóðin á möppuna sem inniheldur forsniðin þín - m.t.t. til \'hlutfallslega slóð\'');
@define('INSTALL_RELUPLOADPATH', 'Hlutfallsleg vistunarslóð');
@define('INSTALL_RELUPLOADPATH_DESC', 'Slóðin á vistaðar skrár fyrir vafra - m.t.t. \'hlutfallslegar slóðar\'');
@define('INSTALL_URL', 'Slóð (URL) á bloggið þitt');
@define('INSTALL_URL_DESC', 'Grunnslóðin (Base URL) á serendipity uppsetninguna þína');
@define('INSTALL_AUTODETECT_URL', 'Skynja sjálfvirkt HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Ef þetta er stillt á "true" mun Serendipity sjá til þess að HTTP Host nafnið sem var notað sé notað sem BaseURL stilling. Að virkja þetta mun gera þér kleift að nota mörg mismunandi vélarnöfn fyrir Serendipity bloggið þitt, og nota það vélarnafn fyrir alla tengla fyrir alla tengla eftir það sem eru notaðir til að vafra um bloggið þitt.');
@define('INSTALL_AUTODETECT_VALID_HOSTS', 'Valid autodetected HTTP-Hosts');
@define('INSTALL_AUTODETECT_VALID_HOSTS_DESC', 'Set this to a comma separated list of allowed HTTP Hosts. Only those will be used for the autodetected base URL. This is a security measure for server setups that accept arbitrary HTTP host headers.');
@define('INSTALL_INDEXFILE', 'Index skrá');
@define('INSTALL_INDEXFILE_DESC', 'Nafnið á serendipity index skránni þinni');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Varanlegir hlekkir');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Skilgreinir ýmisleg slóðamynstur (URL patterns) til að skilgreina varanlega hlekki fyrir bloggið þitt. Það er mælt með því að þú notir sjálfgefna kosti hér; ef ekki ættirðu að prófa að nota %id% gildið þar sem mögulegt er til að hindra Serendipity til að senda gagnagrunninum fyrirspurn til að fletta upp slóðinni.');
@define('INSTALL_PERMALINK', 'URL uppbygging varanlegra hlekkja slóða');
@define('INSTALL_PERMALINK_DESC', 'Hér geturðu skilgreint slóðauppbygginguna, allt frá upphafsslóð til þess hvar færslur kynnu að vera til staðar. Þú getur notað breyturnar %id%, %title%, %day%, %month%, %year% og alla aðra stafi.');
@define('INSTALL_PERMALINK_AUTHOR', 'Uppbygging varanlegra hlekkja slóða höfundar');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Hér geturðu skilgreint slóðauppbygginguna, allt frá upphafsslóð til þess hvar færslur frá ákveðnum höfundum kynnu að vera til staðar. Þú getur notað breyturnar %id%, %realname%, %username%, %email% Og alla aðra stafi.');
@define('INSTALL_PERMALINK_CATEGORY', 'URL uppbygging varanlegra hlekkja flokka');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Hér geturðu skilgreint slóðauppbygginguna, allt frá upphafsslóð til þess hvar færslur úr ákveðnum flokkum kynnu að vera til staðar. Þú getur notað breyturnar %id%, %name%, %parentname%, %description% og alla aðra stafi.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'URL uppbygging varanlegra RSS-strauma flokka');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Hér geturðu skilgreint slóðauppbygginguna, allt frá upphafsslóð til þess hvar RSS-straumar úr ákveðnum flokkum kynnu að vera til staðar. Þú getur notað breyturnar %id%, %name%, %description% og alla aðra stafi.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'URL uppbygging varanlegra RSS-strauma höfundar');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Hér geturðu skilgreint slóðauppbygginguna, allt frá upphafsslóð til þess hvar RSS-straumar frá ákveðnum notendum kynnu að vera til staðar. Þú getur notað breyturnar %id%, %realname%, %username%, %email% og alla aðra stafi.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Slóð til skjalasafna');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Slóð til skjalasafns');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Slóð til flokka');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Stóð til höfunda');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Slóð til að segja upp áskrift að athugasemdum');
@define('INSTALL_PERMALINK_DELETEPATH', 'Slóð til að eyða athugasemdum');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Slóð til að samþykkja athugasemdir');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Slóð til RSS strauma');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Slóð til stakrar viðbótar');
@define('INSTALL_PERMALINK_ADMINPATH', 'Slóð til stjórnkerfis');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Slóð til leitar');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Almennar stillingar');
@define('INSTALL_CAT_SETTINGS_DESC', 'Veldu hvernig Serendipity hagar sér');
@define('INSTALL_USERNAME', 'Notandanafn umsjónarmanns');
@define('INSTALL_USERNAME_DESC', 'Notandanafn fyrir innskráningu umsjónarmanns');
@define('INSTALL_PASSWORD', 'Lykilorð umsjónarmanns');
@define('INSTALL_PASSWORD_DESC', 'Lykilorð fyrir innskráningu umsjónarmanns');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Nafn');
@define('USERCONF_REALNAME_DESC', 'Fullt nafn höfundar. Þetta er nafnið eins og lesendur sjá það');
@define('INSTALL_EMAIL', 'Netfang umsjónarmanns');
@define('INSTALL_EMAIL_DESC', 'Netfang umsjónarmanns bloggsins');
@define('INSTALL_SENDMAIL', 'Senda póst á umsjónarmann?');
@define('INSTALL_SENDMAIL_DESC', 'Viltu fá sendan póst þegar athugasemdir eru sendar á færslurnar þínar?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nafn bloggs');
@define('INSTALL_BLOGNAME_DESC', 'Fyrirsögnin á blogginu þínu');
@define('INSTALL_BLOGDESC', 'Lýsing bloggs');
@define('INSTALL_BLOGDESC_DESC', 'Lýsing á blogginu þínu');
@define('INSTALL_BLOG_EMAIL', 'Netfang bloggkerfis');
@define('INSTALL_BLOG_EMAIL_DESC', 'Þetta stillir inn netfangið sem er notað sem "Frá"-hluti útsendra pósta. Passaðu að þetta sé netfang sem er viðurkennt af póstþjóni hýsingarvélarinnar. Margir póstþjónar synja skilaboðum sem eru með óþekkt netfang í "Frá"-hlutanum.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Tungumál');
@define('INSTALL_LANG_DESC', 'Veldu tungumálið sem vera skal á blogginu þínu');
@define('INSTALL_CHARSET', 'Val stafasetts (charset)');
@define('INSTALL_CHARSET_DESC', 'Hér geturðu valið UTF-8 eða innlend (ISO, EUC, ...) stafasett. Sum tungumál hafa einungis UTF-8 þýðingar svo það að stilla stafasettið á "Innlent" mun ekki hafa nein áhrif. UTF-8 er ráðlagt fyrir nýjar uppsetningar. Ekki breyta þessari stillingu ef þú hefur þegar skráð færslur með sérstöfum - það gæti leitt til rangrar birtingar. Frekari upplýsingar um þetta eru á https://docs.s9y.org/docs/developers/internationalization.html');
@define('INSTALL_CAL', 'Tegund dagatals');
@define('INSTALL_CAL_DESC', 'Veldu forsnið óskaðs dagatals');
@define('AUTOLANG', 'Nota tungumálastillingar vafra gestsins sem sjálfgefið tungumál');
@define('AUTOLANG_DESC', 'Ef þetta er virkt mun serendipity nota tungumálið sem stillt er á í vafra viðkomandi gests fyrir viðmótið (og færslur ef við á).');
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
@define('INSTALL_CAT_DISPLAY', 'Útlit og valmöguleikar');
@define('INSTALL_CAT_DISPLAY_DESC', 'Stilltu tilfinningu og útlit Serendipity út á við');
@define('INSTALL_FETCHLIMIT', 'Færslur sem sýna skal á forsíðu');
@define('INSTALL_FETCHLIMIT_DESC', 'Fjöldi færsla sem sýna skal á hverri síðu');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Nota gzip til að þjappa síðum');
@define('INSTALL_USEGZIP_DESC', 'Til að flýta afhendingu síða getum við þjappað gögnunum og sent gestunum, ef vafrinn hans styður það. Við mælum með þessu');
@define('INSTALL_XHTML11', 'Neyða XHTML 1.1 fylgni');
@define('INSTALL_XHTML11_DESC', 'Viltu neyða XHTML 1.1 fylgni (getur valdið vandræðum fyrir bak- eða framvinnslu fyrir eldri fjórðukynslóðar vafra)');
@define('INSTALL_POPUP', 'Virkja notkun innskotsglugga');
@define('INSTALL_POPUP_DESC', 'Viltu nota innskotsglugga (popup) fyrir athugasemdir, tilvísanir, o.fl.?');
@define('INSTALL_EMBED', 'Er Serendipity innifalið?');
@define('INSTALL_EMBED_DESC', 'Ef þú vilt innifela serendipity á annarri síðu, stilltu þá á "true" að henda öllum hausum, og prenta bara innihaldið. Þú getur nýtt indexFile valmöguleikann til að nota "wrapper class" þar sem þú setur venjulega vefsíðuhausa. Sjá README skrá fyrir meiri upplýsingar.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Láta vera hægt að smellta á utanaðkomandi hlekki?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"nei": Óskoðaðir hlekkir út á við (Topp útgönguleiðir, ávísarar, athugasemdir notenda) eru sýndar/ekki sýndar sem venjulegur texti þegar á við til að koma í veg fyrir google ruslsendingar (ráðlagt). "já": Óskoðaðir hlekkir út á við eru sýndir sem hlekkir. Getur verið breytt með æðra valdi innan hliðarramma stillingum!');
@define('INSTALL_TRACKREF', 'Virkja eftirlit ávísara?');
@define('INSTALL_TRACKREF_DESC', 'Að virkja eftirlit ávísara mun sýna þér hvaða síður vísa á greinar þínar. Í dag er þetta gjarnan notað af spömmurum, svo þú getur gert það óvirkt ef þú vilt.');
@define('INSTALL_BLOCKREF', 'Óleyfðir ávísarar');
@define('INSTALL_BLOCKREF_DESC', 'Eru einhverjar sérstakar vélar sem þú vilt ekki láta sjást í ávísaralistanum? Aðskildu lista vélanafna með \';\' og hafðu í huga að vélarnafninu er sleppt með "substring matches"!');
@define('INSTALL_REWRITE', 'Endurskrifun slóða (URL)');
@define('INSTALL_REWRITE_DESC', 'Veldu hvaða reglur þú vilt nota til að endurskrifa slóðir (URL). Að hafa þetta virkt mun gera slóðir á bloggið þitt fallegar og einfaldar, og gera auðveldara fyrir vefköngulær (s.s. google) að gera efnisyfirlit á síðuna). Vefþjónninn þarf að styðja annaðhvort mod_rewrite eða "AllowOverride All" fyrir serendipity möppuna þína. Sjjálfgefna stillingin er að skynja það sjálfkrafa.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Frávik frá þjónstíma');
@define('INSTALL_OFFSET_DESC', 'Sláðu inn fjölda klukkustunda sem er á milli vefþjónsins þíns og tímasvæðisins sem þú vilt hafa (núverandi: %clock%)');
@define('INSTALL_SHOWFUTURE', 'Sýna framtíðarfærslur');
@define('INSTALL_SHOWFUTURE_DESC', 'Ef virkt, mun þetta sýna allar færslur sem þú sendir inn í framtíðinni á bloggið. Sjálfgefið er að fela þær þar til að birtingardagsetningin er komin.');
@define('INSTALL_ACL', 'Bæta við lesréttindum fyrir flokka');
@define('INSTALL_ACL_DESC', 'Ef virkjað munu réttindi notendahópa sem þú settir upp virkjuð þegar innskráðir notendur skoða bloggið þitt. Ef óvirkjað eru lesréttindi flokkanna ekki virkjuð en jákvæðu áhrifin eru örlítið hraðari afköst kerfissins. Ef þú þarft ekki fjöldanotenda lesréttindi er skynsamlegt að óvirkja þetta.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Show full articles with extended body inside RSS feed');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Mynd fyrir RSS strauminn');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'Slóð (URL) myndar í GIF/JPEG/PNG sniði, ef fyrir hendi. (tómt: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Breidd myndar');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'í pixelum, hámark 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Hæð myndar');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'í pixelum, hámark 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Sýna netföng?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Svæði "manageEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Netfang umsjónaraðila, ef það er fyrir hendi. (tómt: falið) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Svæði "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Netfang vefstjóra, ef það er fyrir hendi. (tómt: falið) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Svæði "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Sá tími sem bloggið ætti ekki lengur að vera vistað af öðrum framandi síðum/forritum (tómt: falið) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Svæði "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Ætti "pubDate"-svæðið að vera innbyggt fyrir RSS-rás, til að sýna dagsetningu síðustu færslu?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Myndbreytingastillingar:');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Skráðu inn almennar upplýsingar um hvernig serendipity ætti að sjá um myndir');
@define('INSTALL_IMAGEMAGICK', 'Nota Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Ertu með imagemagick uppsett og vilt nota það til að breyta stærð mynda?');
@define('INSTALL_IMAGEMAGICKPATH', 'Slóð á forritið');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Full slóð og nafnið á imagemagick myndvinnsuforritinu');
@define('INSTALL_THUMBSUFFIX', 'Viðskeyti sýnishorna');
@define('INSTALL_THUMBSUFFIX_DESC', 'Sýnishorn verða nefnd eftir eftirfarandi forsniði: upprunalegt.[viðskeyti].end');
@define('INSTALL_THUMBWIDTH', 'Stærð sýnishorna');
@define('INSTALL_THUMBWIDTH_DESC', 'Staðlað hágildi breiddar framkallaðra sýnishorna');
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
@define('USERCONF_CAT_PERSONAL', 'Persónulegu upplýsingar þínar');
@define('USERCONF_CAT_PERSONAL_DESC', 'Breyta persónulegu upplýsingum þínum');
@define('USERCONF_USERNAME', 'Notandanafn þitt');
@define('USERCONF_USERNAME_DESC', 'Notandanafnið sem þú notar til að skrá þig inn á bloggið');
@define('USERCONF_PASSWORD', 'Lykilorðið þitt');
@define('USERCONF_PASSWORD_DESC', 'Lykilorðið sem þú notar til að skrá þigg inn á bloggið');
@define('USERCONF_CHECK_PASSWORD', 'Núverandi lykilorð');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Ef þú breytir lykilorðinu í svæðinu að ofan þarftu að slá inn núverandi lykilorð inn í þetta svæði.');
@define('USERCONF_USERLEVEL', 'Réttindastig');
@define('USERCONF_USERLEVEL_DESC', 'Réttindastig. Ætti að vera eitt af eftirfarandi: [USERLEVEL_ADMIN] - Umsjónarmaður, [USERLEVEL_CHIEF] - Stjórnandi, [USERLEVEL_EDITOR] - Venjulegur notandi.');
@define('USERCONF_GROUPS', 'Hópar og meðlimir');
@define('USERCONF_GROUPS_DESC', 'Þessi notandi er meðlimur eftirfarandi hópa. Það er hægt að vera meðlimur fleiri en eins hóps.');
@define('USERCONF_EMAIL', 'Netfangið þitt');
@define('USERCONF_EMAIL_DESC', 'Persónulega netfangið þitt');
@define('INSTALL_WYSIWYG', 'Nota WYSIWYG ritilinn');
@define('INSTALL_WYSIWYG_DESC', 'Viltu nota WYSIWYG ritilinn? (Virkar á IE5+, og að hluta til í Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Senda tilkynningar v/athugasemda?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Viltu fá sendan póst þegar athugasemdir eru sendar á færslurnar þínar?');
@define('USERCONF_SENDTRACKBACKS', 'Senda tilkynningar v/tilvísana?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Viltu fá sendan póst þegar tilvísanir eru gerðar á færslurnar þínar?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Réttindi: Birta færslur?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Má þessi notandi birta færslur?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Sjálfgefnar stillingar fyrir nýjar færslur');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'TILKYNNING: Stjórnstigsbreytan er nú einungis notuð fyrir afturvirkan stuðning við viðbætur og varakerfisauðkenningu. Notendaréttindum er nú stjórnað af hvaða hóp notandi tilheyrir!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Þú slóst ekki inn rétt núverandi lykilorð, og getur því ekki breytt lykilorðinu. Nýjar stillingar ekki vistaðar.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');
@define('USERCONF_SECONDFACTOR', 'Confirm login with email code');
@define('USERCONF_SECONDFACTOR_DESC', 'Protect your login with a code sent to your email that needs to be entered in addition to the password. Only enable this if you get email notifications to your personal email from this blog.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Fara í persónustillingar');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Breyta stjórnstigum');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Breyta "banna nýskráningu færsla"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Breyta rétti til að birta færslur');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Fara í kerfisstillingar');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Fara í bloggtengdar stillingar');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Stjórna færslum');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Stjórna færslum annarra notenda');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Flytja inn færslur');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Stjórna flokkum');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Stjórna flokkum annarra notenda');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Eyða flokkum');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Stjórna notendum');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Eyða notendum');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Breyta stjórnstigi');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Breyta notendum sem eru í þínum hóp(um)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Breyta notendum sem eru ekki í þínum hóp(um)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Búa til nýja notendur');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Stjórna notendahópum');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Stjórna viðbótum');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Stjórna viðbótum annarra notenda');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Stjórna gagnaskrám');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Stjórna gagnamöppum');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Bæta við nýjum gagnaskrám');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Eyða gagnaskrám');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Stjórna gagnastrám annarra notenda');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Skoða gagnaskrár');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Samhæfa sýnishorn');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Stjórna athugasemdum');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Stjórna forsniðum');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Skoða gagnaskrár annarra notenda');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Færslan þín hefur verið vistuð');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Þræddan ham');
@define('COMMENTS_VIEWMODE_LINEAR', 'Flatan ham');
@define('DISPLAY_COMMENTS_AS', 'Sýna athugasemdir sem');
@define('COMMENTS_DISABLE', 'Leyfa ekki athugasemdir á þessa færslu');
@define('COMMENTS_ENABLE', 'Leyfa athugasemdir á þessu færslu');
@define('COMMENTS_CLOSED', 'Höfundurinn leyfir ekki athugasemdir á þessa færslu');
@define('VIEW_EXTENDED_ENTRY', 'Halda áfram að lesa "%s"');
@define('TRACKBACK_SPECIFIC', 'URI slóð fyrir tilvísun á þessa færslu');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'skoða allt');
@define('VIEW_TOPICS', 'skoða fyrirsagnir');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Fyrirsagnir af');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Viðbót færsla tókst ekki!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Muna þessar upplýsingar? ');
@define('SUBMIT_COMMENT', 'Skrá athugasemd');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Gerast áskrifandi að þessari færslu');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Vafrinn þinn sendi ekki gildan HTTP-Referrer streng. Þetta getur hafa skapast vegna vitlaust stillts vafra/proxy þjóns eða vegna gagnsíðufölsunartilraunar (Cross Site Request Forgery, XSRF) gegn þér. Beiðnin þín kláraðist ekki.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Athugasemd #%s virðist þegar hafa verið samþykkt');
@define('COMMENT_EDITED', 'Athugasemdinni hefur verið breytt');
@define('COMMENTS_WILL_BE_MODERATED', 'Innsendar athugasemdir þurfa að fá samþykki áður en þær verða birtar.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Athuga: Þessi athugasemd þarf samþykki áður en hún verður birt');
@define('DELETE_COMMENT', 'Eyða athugasemd');
@define('APPROVE_COMMENT', 'Samþykkja athugasemd');
@define('REQUIRES_REVIEW', 'Þarf yfirlesningu');
@define('COMMENT_APPROVED', 'Athugasemd #%s hefur verið samþykkt');
@define('COMMENT_DELETED', 'Athugasemd #%s hefur verið eytt');
@define('COMMENTS_MODERATE', 'Athugasemdir & tilvísanir á þessa færslu þurfa samþykki');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Athuga: Þessi tilvísun þarf samþykki áður en hún verður birt');
@define('DELETE_TRACKBACK', 'Eyða tilvísun');
@define('APPROVE_TRACKBACK', 'Samþykkja tilvísun');
@define('TRACKBACK_APPROVED', 'Tilvísun #%s hefur verið samþykkt');
@define('TRACKBACK_DELETED', 'Tilvísun #%s hefur verið eytt');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Toppstigi');
@define('VIEW_COMMENT', 'Skoða athugasemd');
@define('VIEW_ENTRY', 'Skoða færslu');
@define('LINK_TO_ENTRY', 'Vísa á færslu');
@define('LINK_TO_REMOTE_ENTRY', 'Vísa á færslu á öðru kerfi');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Sendi tilvísun á URI slóð %s...');
@define('TRACKBACK_SENT', 'Tilvísun tókst');
@define('TRACKBACK_FAILED', 'Tilvísun tókst ekki: %s');
@define('TRACKBACK_NOT_FOUND', 'Engin URI-tilvísunarslóð fannst.');
@define('TRACKBACK_URI_MISMATCH', 'URI slóðin sem ég fann út passar ekki við URI slóðina sem við ætluðum að nota.');
@define('TRACKBACK_CHECKING', 'Athuga <u>%s</u> fyrir mögulegar tilvísanir...');
@define('TRACKBACK_NO_DATA', 'Viðfang innihélt engin gögn');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Engin tilvísun send: Náði ekki sambandi við %s á porti %d');

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
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Ný athugasemd á færslu í áskrift "%s"');
@define('SUBSCRIPTION_MAIL', "Halló %s,\n\nNý athugasemd hefur verið gerð á færslu sem þú ert að fylgjast með á \"%s\", kölluð \"%s\"\nNafn sendanda er: %s\n\nÞú getur fundið færsluna hér: %s\n\nÞú getur hætt við áskrift með því að smella á þennan hlekk: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Halló %s,\n\nNýrri tilvísun var bætt við færsluna sem þú ert að fylgjast með á \"%s\", kölluð \"%s\"\nNafn sendanda er: %s\n\nÞú getur fundið færsluna hér: %s\n\nÞú getur hætt við áskrift með því að smella á þennan hlekk: %s\n");
@define('SIGNATURE', "\n-- \n%s er knúið af Serendipity.\nBesta bloggkerfi sem til er, og þú getur notað það líka.\nKíktu á <https://s9y.org> til að komast að því hvernig.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Ný athugasemd hefur verið send á bloggið þitt, "%s", í færslunni "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Ný tilvísun hefur verið gerð á bloggfærsluna þína, "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Þú hefur eftirfarandi valmöguleika fyrir hendi:');
@define('NEW_TRACKBACK_TO', 'Ný tilvísun gerð á');
@define('NEW_COMMENT_TO', 'Ný athugasemd send á');
@define('SECOND_FACTOR_MAIL_TITLE', 'Serendipity login code for %s');
@define('SECOND_FACTOR_MAIL', "Hello %s,\n\nTo complete the login to your blog please enter the following code:\n\n%s\n\nIt is valid for 15 minutes.");

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Engar færslur fundnar fyrir fyrirspurn %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Leit þín að %s skilaði %s niðurstöðum:');
@define('SEARCH_TOO_SHORT', 'Leitarfyrirspurnin þín verður að vera lengri en þrír stafir. Þú getur prófað að bæta við * við styttri orð, t.d.: s9y* til að plata leitina í að nota styttri orð.');
@define('SEARCH_ERROR', 'Leitarfítusinn virkaði ekki eins og við mátti búast. Tilkynning sem berast skal umsjónarmanni bloggsins Þetta getur gerst vegna index lykla í gagnagrunninum sem vantar. Á MySQL kerfum verður gagnagrunnsnotandinn að geta gert eftirfarandi eftirspurn: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Nákvæm villa sem gagnagrunnurinn skilaði var: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Athugasemdin þín innihélt ekki neitt, svo vinsamlegast %sfarðu til baka%s og reyndu aftur');
@define('COMMENT_NOT_ADDED', 'Gat ekki bætt athugasemd þinni við, því athugasemdir hafa annað hvort verið gerðar óvirkar fyrir þessa færslu, þú slóst inn óleyfilegt efni, eða athugasemdin var gripin af spammvörninni.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Athugasemdir frá');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Stilling stika fyrir röng fyrir valmöguleika "%s". Þarf gagnategund af gerð "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Sýnir listann af flokkum.');
@define('CATEGORIES_PARENT_BASE', 'Sýna einungis flokka undir...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Þú getur valið yfirflokk svo að einungis undirflokkar þess flokks eru sýndir.');
@define('CATEGORIES_HIDE_PARALLEL', 'Sýna flokka sem eru ekki hluti af flokkstrénu');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Ef þú vilt fela flokka sem eru hluti af öðru flokkstré þarftu að virkja þetta. Þessi möguleiki á best rétt á sér ef notaður í samfloti við fjölda-blogg, þegar viðbótin "Properties/Templates of categories" er notuð.');
@define('CATEGORIES_HIDE_PARENT', 'Fela valinn yfirflokk?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Ef þú takmarkar upplistun flokka við ákveðinn flokk muntu sjá þann yfirflokk í útlistuninni. Ef þú óvirkjar þennan valmöguleika mun nafn yfirflokksins ekki vera birt.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Virkja Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Ef þessi möguleiki er virkjaður mun viðbótin nýta Smarty-Templating möguleika til að sýna flokkalistana. Ef þú virkjar þetta geturðu breytt útlitinu í gegnum "plugin_categories.tpl" forsniðsskrána. Að virkja þennan möguleika mun hafa áhrif á afköst, svo ef þú þarft ekki að gera neinar sérsniðnar breytingar skaltu láta þetta vera óvirkjað.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Sýna fjölda færsla í hverjum flokk?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Leyfa gestum að skoða marga flokka í einu?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Ef þessi valmöguleiki er virkur verður hægt að haka við hvern flokk í þessari hliðarrammaviðbót. Notendur geta þá hakað við flokka og séð færslur sem tilheyra valinu hverju sinni.');
@define('CATEGORIES_TO_FETCH', 'Flokkar til að sækja');
@define('CATEGORIES_TO_FETCH_DESC', 'Sækja flokka frá hvaða höfundi?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Sýna lista höfunda');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Sýna fjölda greina við hliðina á nafni höfundar?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Ef þessi möguleiki er virkjaður mun fjöldi greina eftir þennan höfund vera sýndur við hliðina á nafni hans innan sviga.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Sjálfvirkni');
@define('SHOWS_RSS_BLAHBLAH', 'Sýnir RSS tengla');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s straumur');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 straumur');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 straumur');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 straumur');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 athugasemdir');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 straumur');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID þess straums sem þú vilt birta');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner mynd');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nafn myndar til að birta (eða skilja eftir autt fyrir teljara), staðsettrar á feedburner.com, dæmi: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner titill');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Titill (ef einhver) til að birta með myndinni');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner myndartexti');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Texti (ef einhver) til að birta þegar músin sveimar yfir myndinni');
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
@define('ARCHIVE_COUNT', 'Fjöldi hluta á listanum');
@define('ARCHIVE_COUNT_DESC', 'Heildarfjöldi mánaða, vika eða daga til að birta');
@define('ARCHIVE_FREQUENCY', 'Tíðni hlutar í dagatali');
@define('ARCHIVE_FREQUENCY_DESC', 'Bilið á milli sem nota á í dagatali á milli tveggja hluta á listanum');
@define('BROWSE_ARCHIVES', 'Vafra gamlar færslur eftir mánuðum');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Sýna "Serendipity" sem texa');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Mun birta "Serendipity Weblog" sem texta');
@define('POWERED_BY_SHOW_IMAGE', 'Sýna "Serendipity" með merki');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Sýnir merki Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Auglýsir uppruna bloggsins');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Nota https fyrir innskráningu');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Lætur innskráningarhlekkinn vísa á https slóð. Vefþjónninn þinn þarf að styðja þetta!');
@define('SUPERUSER', 'Umsjón vefkerfis');
@define('SUPERUSER_OPEN_ADMIN', 'Opna umsjónarkerfi');
@define('SUPERUSER_OPEN_LOGIN', 'Opna innskráningarsíðu');
@define('ALLOWS_YOU_BLAHBLAH', 'Gerir hlekk í hliðarramma bloggkerfisins sem vísar á umsjónarkerfið');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Dagatal');
@define('CALENDAR_BOW_DESC', 'Dagur vikunnar sem er tekinn sem byrjunardagur vikunnar. Sjálfgefið gildi er mánudagur');
@define('QUICKJUMP_CALENDAR', 'QuickJump dagatal');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Upphaf vikunnar');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Virkja viðbót API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Ef virt geta viðbætur hengt sig á dagatalið til að beina athygli að eigin atburðum. Virkjaðu einungis ef þú hefur sett inn viðbætur sem þurfa á þessu að halda, annars minnkar þetta bara afköst.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Leita að færslu');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Stubbur fyrir HTML í hliðarrammann þinn');
@define('THE_NUGGET', 'Stubbur HTML!');
@define('BACKEND_TITLE', 'Frekari upplýsingar í viðbótastillingavalmyndinni');
@define('BACKEND_TITLE_FOR_NUGGET', 'Hér geturðu skilgreint streng sem er birtur í viðbótarstillingasvalmyndinni ásamt lýsingunni á HTML stubbsviðbótinni. Ef þú ert með marga HTML stubba með tómt meginmál hjálpar þetta við að aðgreina stubbana hvorn frá öðrum.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Sýna topp útgönguleiðir/ávísara sem tengla?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"nei": Útgönguleiðir og ávísarar eru sýnd sem venjulegur texti til að verjast google rusli. "já": Útgönguleiðir og ávísarar eru sýndir sem tenglar. "sjálfgefið": Nota stillingu úr almennum stillingum (ráðlagt).');
@define('HAVE_TO_BE_LOGGED_ON', 'Þú þarft að vera skráður inn til að skoða þessa síðu');
@define('WELCOME_TO_ADMIN', 'Velkomin(n) í stjórnborð Serendipity.');
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
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity er ekki uppsett. Vinsamlegast <a href="%s">settu það upp</a> núna.');
@define('COMMENT_ADDED_CLICK', 'Smelltu %shér til að fara%s á athugasemdir, og %shér til að loka%s þessum glugga.');
@define('COMMENT_NOT_ADDED_CLICK', 'Smelltu %shér til að fara%s á athugasemdir, og %shér til að loka%s þessum glugga.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'ViðfangsURI-slóð fór fram úr leyfðri stærð, %s bætum.');
@define('CLICK_FILE_TO_INSERT', 'Smelltu á skrána sem þú vilt bæta við:');
@define('SELECT_FILE', 'Veldu skrána til að bæta við');
@define('MANAGE_IMAGES', 'Breyta myndum');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Eða');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Utanaðkomandi þjónustur');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Möguleikar');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Fullkomnar viðbætur');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Sjónarmið');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Færslutengt');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Ritill');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Notendaumsjón');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta upplýsingar');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Forsnið');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Möguleikar');
@define('PLUGIN_GROUP_IMAGES', 'Myndir');
@define('PLUGIN_GROUP_ANTISPAM', 'Spamvörn');
@define('PLUGIN_GROUP_MARKUP', 'Textasnið');
@define('PLUGIN_GROUP_STATISTICS', 'Tölfræði');
@define('IMPORT_WELCOME', 'Velkomin(n) í innflutningstól Serendipity');
@define('USER_SELF_INFO', 'skráð(ur) inn sem %s, með stjórnstig %s');
@define('IMPORT_WHAT_CAN', 'Hér getur þú flutt inn færslur frá öðrum bloggkerfum');
@define('IMPORT_SELECT', 'Veldu hugbúnaðinn sem þú vilt flytja inn frá');
@define('MANAGE_STYLES', 'Breyta útliti');
@define('SELECT_A_PLUGIN_TO_ADD', 'Veldu viðbót til að setja inn');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Að neðan er listi uppsettra viðbóta');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Hætta við núna');
@define('DELETE_SELECTED_COMMENTS', 'Eyða völdum athugasemdum');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Finna gögn');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Villa: Gamla skráarnafnið er ekki til!');
@define('ERROR_SOMETHING', 'Villa: Eitthvað er að.');
@define('DIRECT_LINK', 'Bein slóð á þessa færslu');
@define('SELECT_TEMPLATE', 'Veldu forsniðið sem þú vilt nota fyrir bloggið þitt');
@define('DATABASE_ERROR', 'serendipity villa: gat ekki tengst gagnagrunni - hætti.');
@define('LIMIT_TO_NUMBER', 'Hversu margar færslur skal sýna?');
@define('DIRECTORIES_AVAILABLE', 'Í listanum af mögulegum undirmöppum geturðu smellt á hvaða möppu sem er til að búa til nýja möppu innan hennar.');
@define('CATEGORY_INDEX', 'Fyrir neðan er listi af flokkum sem þú getur notað í færslurnar þínar');
@define('PAGE_BROWSE_PLUGINS', 'Síða %s af %s, með samtals %s viðbætur.');
@define('CHARSET_NATIVE', 'Innlent');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API viðmót Serendipity fylgir ekki lengur með vegna ítrekaðra öryggisvandamála með þetta API og það eru ekki margir sem nota það. Vegna þess þarftu að setja inn XML-RPC viðbótina til að nota XML-RPC API viðmótið. Slóðin sem nota ber í forritunum þínum mun ekki breytast - um leið og þú setur inn viðbótina muntu geta notað API viðmótið.');
@define('AUTHORS_ALLOW_SELECT', 'Leyfa gestum að birta marga höfunda í einu?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Ef þessi möguleiki er virkur verður hægt að haka við hvern höfun í þessari hliðarrammaviðbót. Notendur geta þá hakað við höfunda og séð færslur sem tilheyra valinu hverju sinni.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');
