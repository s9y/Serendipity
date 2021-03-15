<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) by Alessandro Pellizzari <alex@amiran.it>
#         and (c) by Marco Solari <marco.solari@koinesistemi.it>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'it_IT.UTF-8, it_IT.UTF8, italiano, it, it_IT');
@define('DATE_FORMAT_ENTRY', '%A, %e %B %Y');
@define('DATE_FORMAT_SHORT', '%d-%m-%Y %H:%M');
@define('WYSIWYG_LANG', 'it-utf');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Tipo');
@define('PREVIEW', 'Anteprima');
@define('DATE', 'Data');
@define('TIME', 'Time');
@define('APPEARANCE', 'Aspetto');
@define('LOGIN', 'Entra');
@define('LOGOUT', 'Esci');
@define('LOGGEDOUT', 'Scollegato.');
@define('CREATE', 'Crea');
@define('BACK', 'Indietro');
@define('FORWARD', 'Avanti');
@define('ANONYMOUS', 'Anonimo');
@define('RECENT', 'Recente...');
@define('OLDER', 'Più vecchio...');
@define('DONE', 'Fatto');
@define('TITLE', 'Titolo');
@define('DESCRIPTION', 'Descrizione');
@define('PLACEMENT', 'Posizionamento');
@define('DELETE', 'Cancella');
@define('SAVE', 'Salva');
@define('UP', 'SU');
@define('DOWN', 'GIU`');
@define('PREVIOUS', 'Precedente');
@define('NEXT', 'Succesivo');
@define('ENTRIES', 'notizie');
@define('CATEGORIES', 'Categorie');
@define('NAME', 'Nome');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Homepage');
@define('COMMENT', 'Commento');
@define('VIEW', 'Vedi');
@define('HIDE', 'Nascondi');
@define('WEEK', 'Settimana');
@define('WEEKS', 'Settimane');
@define('MONTHS', 'Mesi');
@define('DAYS', 'Giorni');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Successo');
@define('COMMENTS', 'Commenti');
@define('ADD_COMMENT', 'Aggiungi Commento');
@define('NO_COMMENTS', 'Nessun commento');
@define('POSTED_BY', 'Scritto da');
@define('ON', 'on');
@define('NO_CATEGORY', 'Nessuna Categoria');
@define('CATEGORY', 'Categoria');
@define('EDIT', 'Modifica');
@define('GO', 'Vai!');
@define('YES', 'Sì');
@define('NO', 'No');
@define('NOT_REALLY', 'Non proprio...');
@define('DUMP_IT', 'Cestinalo!');
@define('IN', 'in');
@define('AT', 'at');
@define('LEFT', 'sinistra');
@define('RIGHT', 'destra');
@define('CENTER', 'center');
@define('ARCHIVES', 'Archivi');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Ricerca veloce');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Nessun Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Estratto');
@define('TRACKED', 'Tracciato');
@define('USER', 'Utente');
@define('USERNAME', 'Nome utente');
@define('PASSWORD', 'Password');
@define('HIDDEN', 'nascosto');
@define('IMAGE', 'Immagine');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autore');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'versione');
@define('INSTALL', 'Installa');
@define('REPLY', 'Rispondi');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Errore');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Forza');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Amministrazione');
@define('ADMIN_FRONTPAGE', 'Pagina principale');
@define('QUOTE', 'Cita');
@define('NONE', 'none');
@define('GROUP', 'Gruppo');
@define('AUTHORS', 'Autori');
@define('UPGRADE', 'Aggiorna');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Tutti gli autori');
@define('PREVIOUS_PAGE', 'pagina precedente');
@define('NEXT_PAGE', 'pagina seguente');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Tutte le categorie');
@define('LAST_UPDATED', 'Ultimo aggiornamento');
@define('IP_ADDRESS', 'Indirizzo IP');
@define('CHARSET', 'Insieme di caratteri');
@define('REFERER', 'Referente');
@define('APPROVE', 'Approva');
@define('NOT_FOUND', 'Non trovato');
@define('WRITABLE', 'Scrivibile');
@define('NOT_WRITABLE', 'Non scrivibile');
@define('WELCOME_BACK', 'Bentornato,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Ordina per');
@define('SORT_ORDER', 'Ordinamento');
@define('SORT_ORDER_ASC', 'Crescente');
@define('SORT_ORDER_DESC', 'Decrescente');
@define('FILTERS', 'Filtri');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Espandi tutto');
@define('TOGGLE_OPTION', 'Inverti l\'opzione');
@define('IN_REPLY_TO', 'In risposta a');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Directory');
@define('BACK_TO_BLOG', 'Torna al Weblog');
@define('HTML_NUGGET', 'Pillola di HTML');
@define('TITLE_FOR_NUGGET', 'Titolo della pillola');
@define('COMMENT_ADDED', 'Il tuo commento è stato inviato con successo. ');
@define('ENTRIES_FOR', 'Notizie per %s');
@define('NO_ENTRIES_TO_PRINT', 'Nessuna notizia da stampare');
@define('COMMENT_DELETE_CONFIRM', 'Sei sicuro di voler cancellare il commento #%d, scritto da %s?');
@define('DELETE_SURE', 'Sei sicuro di voler cancellare #%s in modo permanente?');
@define('MEDIA_FULLSIZE', 'Dimensioni piene');
@define('SIDEBAR_PLUGIN', 'plugin della barra laterale');
@define('EVENT_PLUGIN', 'plugin di evento');
@define('PLUGIN_ITEM_DISPLAY', 'Dove deve essere mostrato l\'oggetto?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Solo notizia estesa');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Solo pagina riassuntiva');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Sempre');
@define('DIRECTORY_WRITE_ERROR', 'Impossibile scrivere nella directory %s. Controllare i permessi.');
@define('FILE_WRITE_ERROR', 'Impossibile scrivere sul file %s.');
@define('INCLUDE_ERROR', 'errore di serendipity: impossibile includere %s - terminato.');
@define('DO_MARKUP', 'Effettua trasformazioni del Markup');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formato data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Il formato della data della notizia, usando variabili di strftime() del PHP. (Default: "%s")');
@define('APPLY_MARKUP_TO', 'Applica markup a %s');
@define('XML_IMAGE_TO_DISPLAY', 'Pulsante XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'I link ai feed XML saranno indicati da questa immagine. Lasciare vuoto per l\'immagine di default, inserire \'none\' per disabilitarla.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Cancellazione del file %s...');
@define('SETTINGS_SAVED_AT', 'Le nuove impostazioni sono state salvate in %s');
@define('INVERT_SELECTIONS', 'Inverti la selezione');

@define('PERSONAL_SETTINGS', 'Impostazioni Personali');
@define('DO_MARKUP_DESCRIPTION', 'Applica le trasformazioni del markup al testo (smilies, abbreviazionicon *, /, _, ...). Disabilitare questa opzione significa mantenere il codice HTML nel testo.');
@define('BASE_DIRECTORY', 'Directory base');
@define('PERM_READ', 'Permessi di lettura');
@define('PERM_WRITE', 'Permessi di scrittura');
@define('PERM_DENIED', 'Permesso negato.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Installazione di Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Benvenuti nell\'Installazione di Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Per prima cosa controlliamo le tue attuali impostazioni e proviamo a diagnosticare eventuali problemi di compatibilità');
@define('ERRORS_ARE_DISPLAYED_IN', 'Gli errori sono visualizzati in %s, le raccommandazioni in %s e il successo in %s');
@define('RED', 'rosso');
@define('YELLOW', 'giallo');
@define('GREEN', 'verde');
@define('PRE_INSTALLATION_REPORT', 'Rapporto di pre-installazione di Serendipity v%s');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'Installazione PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Sistema Operatvo');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'Configurazione php.ini');
@define('RECOMMENDED', 'Raccomandato');
@define('ACTUAL', 'Attuale');
@define('PERMISSIONS', 'Permessi');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Le autorizzazioni possono essere impostate eseguendo il comando di shell: `<em>%s</em>` sulla directory in causa, or by settzzando un programma FTP');
@define('PROBLEM_DIAGNOSTIC', 'A causa del problema diagnosticato, non puoi continuare con l\'installazione prima di aver corretto gli errori suddetti');
@define('SELECT_INSTALLATION_TYPE', 'Selezionare quale tipo di installazione vuoi utilizzare');
@define('RECHECK_INSTALLATION', 'Ricontrolla l\installazione');
@define('SIMPLE_INSTALLATION', 'Installazione Semplice');
@define('EXPERT_INSTALLATION', 'Installazione Avanzata');
@define('COMPLETE_INSTALLATION', 'Installazione Completa');
@define('WONT_INSTALL_DB_AGAIN', 'Non si re-installa il database');
@define('THEY_DO', 'fanno');
@define('THEY_DONT', 'non esistono');
@define('CHECK_DATABASE_EXISTS', 'Si verifica se il database e le tabelle esistono già');
@define('CREATE_DATABASE', 'Creazione del database di default...');
@define('ATTEMPT_WRITE_FILE', 'Tentativo di scrittura sul file %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Si crea l\'autore primario \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Si imposta il modello predefinito');
@define('INSTALLING_DEFAULT_PLUGINS', 'Si installano i plugins predefiniti');
@define('SERENDIPITY_INSTALLED', 'Serendipity è stato installato con successo');
@define('VISIT_BLOG_HERE', 'Visita il tuo nuovo blog qui');
@define('THANK_YOU_FOR_CHOOSING', 'Grazie per aver scelto Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'E\' stato rilevato un errore nell\installazione');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Fornito da Serendipity %s e PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Editore normale');
@define('USERLEVEL_CHIEF_DESC', 'Editore capo');
@define('USERLEVEL_ADMIN_DESC', 'Amministratore');
@define('WWW_USER', 'Cambiare www con l\'utente con cui gira apache (es. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'La directory %s non esiste e non può essere creata. Per favore crearla manualmente');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; esegui <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Impossibile eseguire il binario %s');
@define('FILE_CREATE_YOURSELF', 'Per favore creare il file manualmente o controllare i permessi');
@define('COPY_CODE_BELOW', '<br />* Copiare il codice qui sotto e metterlo in %s nella vostra cartella %s :<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Una volta eseguito, premete il bottone "Ricarica" del vostro browser.');
@define('ERROR_TEMPLATE_FILE', 'Impossibile aprire il file di modello, per favore aggiornare serendipity!');
@define('HTACCESS_ERROR', 'Per controllare l\'installazione del tuo webserver, serendipity ha bisogno di scrivere nel file ".htaccess". Questo non è stato possibile a causa di permessi errati. Per favore sistema i permessi in questo modo: <br />&nbsp;&nbsp;%s<br />e ricarica questa pagina.');
@define('EMPTY_SETTING', 'Non hai specificato un valore valido per "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity ha rilevato che la configurazione si riferisce alla versione %s, mentre serendipity è installato nella versione %s, è necessario fare l\'upgrade! <a href="%s">Clicka qui</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Salve, e benvenuti alla procedura di upgrade di Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Sono qui per aiutarti a fare l\'upgrade della tua installazione di Serendipity %s .');
@define('SERENDIPITY_UPGRADER_WHY', 'Vedi questo messaggio perché hai appena installato Serendipity %s, ma non hai ancora aggiornato l\'installazione del database per questa versione');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Database update (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Ho trovato questi file .sql che hanno bisogno di essere caricati prima di continuare col funzionamento di Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Procedure specifiche di versione');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nessuna procedura specifica della versione trovata');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Vuoi eseguire le procedure indicate?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'No, le eseguirò manualmente');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Sí, eseguile');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Sembra che tu non abbia bisogno della procedura di upgrade');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Considera Serendipity uggiornato');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Hai ignorato la procedura di upgrade di  Serendipity, per favore controlla che il tuo database sia correttamente installato e che le funzioni periodiche vengano lanciate');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'La tua installazione di Serendipity è ora aggiornata alla versione %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Puoi tornare al tuo blog clickando  %squi%s');
@define('ADMIN_ENTRIES', 'Notizie');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Impossobile connettersi al database MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Impossibile selezionare il database: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Impossibile selezionare l\'informazione sull\'utente: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Impossibile selezionare l\'informazione sulla categoria: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Impossibile selezionare l\'informazione sulla notizia: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Impossibile selezionare l\'informazione sul commento: %s.');
@define('MYSQL_REQUIRED', 'Occorre l\'estensione MySQL per effettuare questa azione.');
@define('CREATE_AUTHOR', 'Crea l\'autore \'%s\'.');
@define('CREATE_CATEGORY', 'Crea la categoria \'%s\'.');
@define('MT_DATA_FILE', 'Tipo di dati mobile');
@define('INSTALL_DBPORT', 'Porta del Database');
@define('INSTALL_DBPORT_DESC', 'La porta utilizzata per connectersi al tuo server database');
@define('IMPORT_PLEASE_ENTER', 'Inserisci i dati come richiesto sotto');
@define('IMPORT_NOW', 'Importa ora!');
@define('IMPORT_STARTING', 'Avvio della procedura di importazione ...');
@define('IMPORT_FAILED', 'Importazione fallita');
@define('IMPORT_DONE', 'Importazione completata con successo');
@define('IMPORT_WEBLOG_APP', 'Applicazione Weblog');
@define('IMPORT_NOTES', 'Nota:');
@define('IMPORT_STATUS', 'Stato dopo l\'importazione');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Metti tutto il testo importato nella sezione "body" e non dividerla nella sezione "inotizia estensa".');
@define('IMPORT_GENERIC_RSS', 'Importazione RSS generica');
@define('ACTIVATE_AUTODISCOVERY', 'Manda trackbacks ai collegamenti trovati nella notizia');
@define('RSS_IMPORT_CATEGORY', 'Usa questa categoria per le notizie importate non corrispondenti');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Il documento %s non è stato trovato.');
@define('CONVERT_HTMLENTITIES', 'Prova ad auto-convertire le entità HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Amministrazione di Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Sembra che tu abbia inserito nome utente o password non validi');
@define('PLEASE_ENTER_CREDENTIALS', 'Inserisci le tue credenziali qui sotto.');
@define('AUTOMATIC_LOGIN', 'Salva informazioni');
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
@define('MEDIA_LIBRARY', 'Libreria media');
@define('ADD_MEDIA', 'Aggiungi media');
@define('MANAGE_DIRECTORIES', 'Gestione directory');
@define('CONFIGURATION', 'Configurazione');

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
@define('ENTRY_PUBLISHED_FUTURE', 'Questa notizia non è ancora pubblicata.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Plugin per le barre laterali');
@define('EVENT_PLUGINS', 'Plugin di Evento');
@define('CONFIGURE_PLUGINS', 'Configurazione plugin');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Prerequisiti non soddisfatti: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aggiorna alla versione %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Clicca qui per installare un nuovo %s');
@define('ALREADY_INSTALLED', 'Già installato');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Modifica notizie');
@define('EDIT_ENTRY', 'Modifica notizia');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Bozza');
@define('PUBLISH', 'Pubblica');
@define('CONTENT', 'Contenuto');
@define('ENTRIES_PER_PAGE', 'notizie per pagina');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Postings permanenti');
@define('PAGE_BROWSE_ENTRIES', 'Pagina %s di %s, in totale %s notizie');
@define('FIND_ENTRIES', 'Trova notizie');
@define('RIP_ENTRY', 'Addio notizia #%s');
@define('NEW_ENTRY', 'Nuova notizia');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Corpo della Notizia');
@define('EXTENDED_BODY', 'Corpo Esteso');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Una copia di questa notizia è stata salvata');
@define('IFRAME_PREVIEW', 'Serendipity sta creando l\'anteprima della tua notizia ...');
@define('IFRAME_WARNING', 'Il tuo browser non supporta il concetto di \'iframes\'. Apri il tuo file "serendipity_config.inc.php" ed imposta la variabile $serendipity[\'use_iframe\'] a FALSE.');
@define('DATE_INVALID', 'Attenzione: La data specificata non è valida. Deve essere nel formato AAAA-MM-GG OO:MM .');
@define('ADVANCED_OPTIONS', 'Opzioni avanzate');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Questo link non dovrebbe essere clickato. Contiene l\\\'URI di trackback per questa notizia. Puoi usare questo URI per mandare pingback e trackback dal tuo blog a questa notizia. Per copiare il link, clickaci col tasto destro e seleziona "Copia Collegamento".');
@define('RESET_DATE', 'Reimposta la data');
@define('RESET_DATE_DESC', 'Clicca qui per reimpostare la data all\'ora corrente');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Gestione Utenti');
@define('CREATE_NEW_USER', 'Crea nuovo utente');
@define('CREATE_NOT_AUTHORIZED', 'Non puoi modificare utenti con lo stesso tuo livello');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Non puoi creare utenti di livello superiore al tuo');
@define('CREATED_USER', 'Un nuovo utente %s è stato creato');
@define('MODIFIED_USER', 'Le caratteristiche dell\'utente %s sono state modificate');
@define('USER_LEVEL', 'Livello utente');
@define('WARNING_NO_GROUPS_SELECTED', 'Attenzione: Non hai selezionato nessuna appartenenza di gruppo. Ciò di estrometterebbe di fatto dalla gestione degli utenti/gruppi, e perciò le tue appartenenze di gruppo non sono state modificate.');
@define('DELETE_USER', 'Stai per cancellare l\'utente #%d %s. Sei convinto? Questo impedirà la visualizzazione delle notizie scritte da lui sulla pagina principale.');
@define('DELETED_USER', 'Utente #%d %s cancellato.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Gestione Gruppi');
@define('DELETED_GROUP', 'Gruppo #%d %s cancellato.');
@define('CREATED_GROUP', 'Il nuovo gruppo %s è stato creato');
@define('MODIFIED_GROUP', 'Le proprietà del gruppo %s sono state cambiate');
@define('CREATE_NEW_GROUP', 'Crea un nuovo gruppo');
@define('DELETE_GROUP', 'Stai per cancellare il gruppo #%d %s. Sei sicuro?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Trova commenti');
@define('COMMENTS_FILTER_SHOW', 'Visualizza');
@define('COMMENTS_FILTER_ALL', 'Tutti');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Solo approvati');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'In attesa di approvazione');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Sei sicuro di voler cancellare i commenti selezionati?');
@define('PAGE_BROWSE_COMMENTS', 'Pagina %s di %s, in totale %s commenti');
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
@define('CATEGORY_SAVED', 'Categoria salvata');
@define('CATEGORY_ALREADY_EXIST', 'Una categoria di nome "%s" esiste già');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Categoria #%s cancellata. Vecchi articoli spostati nella categoria #%s');
@define('CATEGORY_DELETED', 'Categoria #%s cancellata.');
@define('INVALID_CATEGORY', 'Nessuna categoria selezionata per la cancellazione');
@define('EDIT_THIS_CAT', 'Modifica "%s"');
@define('CATEGORY_REMAINING', 'Cancella questa categoria e sposta le sue notizie in questa categoria');
@define('PARENT_CATEGORY', 'Categoria superiore');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Crea una Nuova Categoria');
@define('ALREADY_SUBCATEGORY', '%s è già una sotto-categoria di %s.');
@define('NO_CATEGORIES', 'Nessuna categoria');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importazione notizie');
@define('EXPORT_ENTRIES', 'Esportazione notizie');
@define('EXPORT_FEED', 'Esportazione di tutto il feed RSS');
@define('CREATE_THUMBS', 'Ricostruisci miniature');
@define('WARNING_THIS_BLAHBLAH', "ATTENZIONE:\\nPotrebbe essere necessario molto tempo se molte immagini non hanno le miniature.");
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
@define('TEMPLATE_SET', '\'%s\' è stato impostato come il tuo modello attivo');
@define('WARNING_TEMPLATE_DEPRECATED', 'Attenzione: il tuo modello attuale utilizza un metodo deprecato, sei avvisato di aggiornare, se possibile');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Interfaccia di amministrazione personalizzata disponibile');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Imposta come modello');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Controlla &amp; salva');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Rimuovi i plugin selezionati');
@define('SAVE_CHANGES_TO_LAYOUT', 'Salva i cambiamenti al layout');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Sincronizzazione del database con la cartella delle immagini');
@define('SYNC_DONE', 'Fatto (Sincronizzate %s immagini).');
@define('RESIZE_BLAHBLAH', '<b>Ridimensiona %s</b>');
@define('ORIGINAL_SIZE', 'Dimensione originale: <i>%sx%s</i> pixel');
@define('RESIZING', 'Ridimensionamento');
@define('RESIZE_DONE', 'Fatto (ridimensionate %s immagini).');
@define('KEEP_PROPORTIONS', 'Mantieni le proporzioni');
@define('REALLY_SCALE_IMAGE', 'Vuoi veramente riscalare questa immagine? Questa operazione non può essere annullata!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Qui puoi definire le nuove dimensioni dell\'immagine. Se vuoi mantenere le proporzioni inserisci un solo valore e premi TAB, calcolerò automaticamente le nuove dimensioni in modo da non modificare le proporzioni:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nuove dimensioni: ');
@define('SCALING_IMAGE', 'Ridimensionamento di %s a %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'La directory <strong>%s</strong> è stata creata.');
@define('PARENT_DIRECTORY', 'Directory superiore');
@define('CONFIRM_DELETE_DIRECTORY', 'Sei sicuro di voler cancellare tutto il contenuto della directory %s?');
@define('ERROR_NO_DIRECTORY', 'Errore: La directory %s non esiste');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Impossibile rimuovere directory non vuote. Attivare "Forzare la cancellazione" se volete rimuoverli e rimandare il form. I file esistenti sono:');
@define('DIRECTORY_DELETE_FAILED', 'Cancellazione della directory %s fallita. Controllare i permessi o i messaggi soprastanti.');
@define('DIRECTORY_DELETE_SUCCESS', 'Directory %s cancellata con successo.');
@define('CHECKING_DIRECTORY', 'Controllo dei file nella directory %s');
@define('DELETE_DIRECTORY', 'Cancella la directory');
@define('DELETE_DIRECTORY_DESC', 'Stai per cancellare il contenuto di una directory che contiene files media, possibilmente utilizzati in alcune delle tue notizie.');
@define('FORCE_DELETE', 'Cancella TUTTI i files in questa directory, inclusi quelli non conosciuti a Serendipity');
@define('CREATE_DIRECTORY', 'Crea la directory');
@define('CREATE_NEW_DIRECTORY', 'Crea una nuoav directory');
@define('CREATE_DIRECTORY_DESC', 'Qui puoi creare una nuova directory per nuovi files media. Scegli il nome per la tua nuova directory e facoltativamente seleziona una directory padre in cui posizionarla.');
@define('ABOUT_TO_DELETE_FILE', 'Stai per cancellare <b>%s</b><br />Se stai usando questo file in altre notizie, questo causerà link o immagini "morti"<br />Sei sicuro di voler procedere?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Errore: Il file esiste già sulla tua macchina!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Impossibile trovare il file <b>%s</b>, forse è già stato cancellato?');
@define('ERROR_FILE_FORBIDDEN', 'Non hai l\'autorizzzione ad uplodare files con contenuto attivo');
@define('REMOTE_FILE_NOT_FOUND', 'File non trovato sul server remoto, sei sicuro che l\'URL: <b>%s</b> sia correttoi?');
@define('FILE_FETCHED', '%s scaricato come %s');
@define('FILE_UPLOADED', 'File %s inviato con successo come %s');
@define('DELETE_FILE_FAIL', 'Impossibile cancellare il file <b>%s</b>');
@define('DELETE_FILE', 'Cancellato il file <b>%s</b>');
@define('FOUND_FILE', 'Trovato file nuovo/modificato: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Errore: Nuovo nome file già usato, scegline un altro!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'hot-linkato');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Inserisci il nuovo nome per: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Aggiunta image...');
@define('THUMB_CREATED_DONE', 'Miniatura creata.<br>Fatto.');
@define('THUMBNAIL_USING_OWN', 'Uso %s come miniatura stessa perché è già abbastanza piccola.');
@define('THUMBNAIL_FAILED_COPY', 'Volevo usare %s come miniatura di sé stessa ma non riesco a copiarla!');
@define('DELETE_THUMBNAIL', 'Cancellata miniatura dell\'immagine <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Errore sconosciuto, file non inviato. Forse le dimensioni sono superiori al massimo consentito dall\'installazione del server. Chiedi al tuo provider o modifica php.ini per consentire upload più corposi.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', 'File hot-linkato.<br />Fatto.');
@define('DELETE_HOTLINK_FILE', 'Cancellato il file hot-linkato intitolato <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Impossibile eseguire: "%s", errore: %s, valore restituito: %d');
@define('SKIPPING_FILE_EXTENSION', 'File evitato: Estensione mancante in %s.');
@define('SKIPPING_FILE_UNREADABLE', 'File evitato: %s non è leggibile.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Voglio usare la miniatura nella mia notizia.');
@define('I_WANT_BIG_IMAGE', 'Voglio usare questa immagine grande nella mia notizia.');
@define('I_WANT_NO_LINK', ' Voglio mostrarla come immagine');
@define('I_WANT_IT_TO_LINK', 'Voglio mostrarla come link a questo URL:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Dimensioni dell\'immagine');
@define('IMAGE_ALIGNMENT', 'Allineamento immagine');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Inserimento immagine');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Hai scelto %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Ruota l\'immagine di 90 gradi in senso anti-orario');
@define('IMAGE_ROTATE_RIGHT', 'Ruota l\'immagine di 90 gradi in senso orario');
@define('MEDIA_RENAME', 'Rinomina questo file');
@define('THUMBNAIL_SHORT', 'Mini');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Nome file');
@define('SORT_ORDER_EXTENSION', 'Estensione del file');
@define('SORT_ORDER_SIZE', 'Dimensioni del file');
@define('SORT_ORDER_WIDTH', 'Larghezza immagine');
@define('SORT_ORDER_HEIGHT', 'Altezza immagine');
@define('SORT_ORDER_DATE', 'Data di upload');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Aggiungi un file al deposito di media:</b><p>Qui puoi inviare file media, o dirmi da dove prenderli in qualche parte del web! Se non hai l\'immagine giusta, <a href="https://images.google.com/" target="_blank">cerca su google</a> quella che preferisci, i risultati spesso sono utili e divertenti :)</p><p><b>Seleziona il metodo:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Inserisci l\'URL di un file da scaricare:');
@define('ENTER_MEDIA_UPLOAD', 'Seleziona un file da inviare:');
@define('SAVE_FILE_AS', 'Salva il file come:');
@define('STORE_IN_DIRECTORY', 'Salva il file nella directory: ');
@define('IMAGE_MORE_INPUT', 'Aggiungi altre immagini');
@define('ENTER_MEDIA_URL_METHOD', 'Metodo di fetch:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Nota: Se scegli di hot-linkare al server, assicurati di avere l\'autorizzazione per hot-linkare al sito web prescelto, o che il sito web sia il tuo. L\'Hot-link\' ti consente di utilizzare immagini esterne al sito senza memorizzarle localmente.');
@define('FETCH_METHOD_IMAGE', 'Scarica l\'immagine sul tuo server');
@define('FETCH_METHOD_HOTLINK', 'Hot-link al server');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Ridimensiona questa immagine');
@define('MEDIA_DELETE', 'Cancella questo file');
@define('FILES_PER_PAGE', 'File per pagina');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nessun immagine trovata');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'tutte le directory');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Configuratione scritta e salvata');
@define('DIAGNOSTIC_ERROR', 'Sono stati rilevati degli errori durante il controllo dei dati inseriti:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Impostazioni Database');
@define('INSTALL_CAT_DB_DESC', 'Qui puoi inserire le informazioni sul database. Serendipity ne ha bisogno per funzionare');
@define('INSTALL_DBTYPE', 'Tipo Database');
@define('INSTALL_DBTYPE_DESC', 'Tipo di Database');
@define('INSTALL_DBHOST', 'Host Database');
@define('INSTALL_DBHOST_DESC', 'Il nome dell\'host del server database');
@define('INSTALL_DBUSER', 'Utente Database');
@define('INSTALL_DBUSER_DESC', 'Il nome utente con cui collegarsi al database');
@define('INSTALL_DBPASS', 'Password Database');
@define('INSTALL_DBPASS_DESC', 'La password dell\'utente indicato');
@define('INSTALL_DBNAME', 'Nome Database');
@define('INSTALL_DBNAME_DESC', 'Il nome del tuo database');
@define('INSTALL_DBPREFIX', 'Prefisso Tabelle Database');
@define('INSTALL_DBPREFIX_DESC', 'Prefisso per i nomi delle tabelle, per esempio serendipity_');
@define('INSTALL_DBPERSISTENT', 'Usa connessioni persistenti');
@define('INSTALL_DBPERSISTENT_DESC', 'Abilita l\'uso di connessioni al database consistenti, vedi <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">qui</a>. Normalmente non raccomandato');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Percorsi');
@define('INSTALL_CAT_PATHS_DESC', 'Percorsi a cartelle e file essenziali. Non dimenticare la barra alla fine del nome delle directory!');
@define('INSTALL_FULLPATH', 'Percorso completo');
@define('INSTALL_FULLPATH_DESC', 'Il percorso completo e assoluto all\'installazione di serendipity');
@define('INSTALL_UPLOADPATH', 'Percorso Upload');
@define('INSTALL_UPLOADPATH_DESC', 'Tutti gli upload andranno qui, relativo al \'Percorso completo\' - tipicamente \'uploads/\'');
@define('INSTALL_RELPATH', 'Percorso relativo');
@define('INSTALL_RELPATH_DESC', 'Percorso a serendipity nel browser, tipicamente \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Percorso relativo dei modelli');
@define('INSTALL_RELTEMPLPATH_DESC', 'Il percorso alla cartella contenente i modelli - relativa a \'percorso relativo\'');
@define('INSTALL_RELUPLOADPATH', 'Percorso relativo degli upload');
@define('INSTALL_RELUPLOADPATH_DESC', 'Percorso agli upload per il browser - relativo a \'percorso relativo\'');
@define('INSTALL_URL', 'URL del blog');
@define('INSTALL_URL_DESC', 'URL di base all\'installazione di serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autoriconoscimento dell\'HTTP-Host utilizzato');
@define('INSTALL_AUTODETECT_URL_DESC', 'Se impostato a "vero", Serendipity controllerà che l\'Host HTTP usato dal tuo visitatore sia usato come la tua impostazione BaseURL. Ablitando questo sarai in grado di utilizzare nomi di dominio multipli per il tuo Blog Serendipity, anare il dominio per tutti i links di follow-up che l\'utente ha usato per accedere al tuo blog.');
@define('INSTALL_INDEXFILE', 'File indice');
@define('INSTALL_INDEXFILE_DESC', 'Il nome del file indice di serendipity');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definisce vari URL patterns per definire links permanenti nel tuo blog. E\' consigliabile utilizzare i defaults; altrimenti, dovresti provare ad utilizzre il valore %id%, ove possibile, per evitare che Serendipity acceda al database per cercare l\'URL destinazione.');
@define('INSTALL_PERMALINK', 'Struttura URL Permalink Notizia');
@define('INSTALL_PERMALINK_DESC', 'Qui puoi definire la struttura di URL relativa ad iniziare dal tuo URL di base fino a dove le notizie possono rendersi disponibili. Puoi utilizzre le variabili %id%, %title%, %day%, %month%, %year% ed ogni altro carattere.');
@define('INSTALL_PERMALINK_AUTHOR', 'Struttura URL Permalink Autore');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Qui puoi definire la struttura di URL relativa ad iniziare dal tuo URL di base fino a dove le notizie di certi autori possono rendersi disponibili. Puoi utilizzre le variabili %id%, %realname%, %username%, %email% ed ogni altro carattere.');
@define('INSTALL_PERMALINK_CATEGORY', 'Struttura URL Permalink Categoria');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Qui puoi definire la struttura di URL relativa ad iniziare dal tuo URL di base fino a dove le notizie di certe categorie possono rendersi disponibili. Puoi utilizzre le variabili %id%, %name%, %description% ed ogni altro carattere.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Struttura URL Categoria RSS-Feed Permalink');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Qui puoi definire la struttura di URL relativa ad iniziare dal tuo URL di base fino a dove  feeds RSS di certe categorie possono rendersi disponibili. Puoi utilizzre le variabili %id%, %name%, %description% ed ogni altro carattere.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Struttura URL Permalink Autore RSS-Feed');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Qui puoi definire la struttura di URL relativa ad iniziare dalla tua URL di base URL verso dove i feeds RSS da utenti specifici possono essere visualizzati. Puoi usare le variabili %id%, %realname%, %username%, %email% e qualsiasi altro carattere.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Percorso degli archivi');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Percorso per l\'archiziazione');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Percorso delle categorie');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Percorso agli autori');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Percorso per annullare l\'iscrizione ai commenti');
@define('INSTALL_PERMALINK_DELETEPATH', 'Percorso per cancellare i commenti');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Percorso per approvare i commenti');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Percorso per i Feeds RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Percorso per il singole plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Percorso per l\'amministrazione');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Percorso della ricerca');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Impostazioni generali');
@define('INSTALL_CAT_SETTINGS_DESC', 'Personalizza il comportamento di Serendipity');
@define('INSTALL_USERNAME', 'Nome utente di amministrazione');
@define('INSTALL_USERNAME_DESC', 'Nome utente per l\'accesso come amministratore');
@define('INSTALL_PASSWORD', 'Password di amministrazione');
@define('INSTALL_PASSWORD_DESC', 'Password per l\'accesso come ammninistratore');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Nome reale');
@define('USERCONF_REALNAME_DESC', 'Il nome completo dell\'autore. Questo è il nome visto dai lettori');
@define('INSTALL_EMAIL', 'e-mail amministratore');
@define('INSTALL_EMAIL_DESC', 'E-mail dell\'amministratore del blog');
@define('INSTALL_SENDMAIL', 'Invia mail all\'amministratore?');
@define('INSTALL_SENDMAIL_DESC', 'Vuoi che l\'amministratore riceva e-mail quando vengono scritti commenti alle notizie?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nome del Blog');
@define('INSTALL_BLOGNAME_DESC', 'Il titolo del tuo blog');
@define('INSTALL_BLOGDESC', 'Descrizione del Blog');
@define('INSTALL_BLOGDESC_DESC', 'La descrizione del tuo blog');
@define('INSTALL_BLOG_EMAIL', 'Indirizzo E-Mail del Blog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Questo configura l\'indirizzo E-Mail utilizzato dal campo "From" delle tue mail in uscita. Assicurati che questo indirizo sia riconosciuto dal mailserver utilizzato dal tuo host - molti mailservers rifiutano messaggi che hanno indirizzi From sconosciuti.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Lingua');
@define('INSTALL_LANG_DESC', 'Seleziona la lingua del tuo blog');
@define('INSTALL_CHARSET', 'Selezione insieme di caratteri');
@define('INSTALL_CHARSET_DESC', 'Qui puoi scegliere fra insieme di carateri UTF-8 oppure nativo (ISO, EUC, ...). Alcune lingue hanno solo traduzioni UTF-8 così che l\'impostazione a "Native" dell\'insieme dei caratteri non avrà effetti. UTF-8 è consigliato per le nuove installazioni. Non cambiare questa impostazione se hai già creato notizie con caratteri speciali - ciò può portare a caratteri alterati. Per approfondire questo argomento vedi https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Tipo di Calendario');
@define('INSTALL_CAL_DESC', 'Scegli il formato del Calendario');
@define('AUTOLANG', 'Usa la lingua del browser del visitatore di default');
@define('AUTOLANG_DESC', 'Se abilitato, sarà utilizzata la lingua del browser del visitatore per determinare la lingua di default della tua notizia e della tua interfaccia.');
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
@define('INSTALL_CAT_DISPLAY', 'Aspetto e opzioni');
@define('INSTALL_CAT_DISPLAY_DESC', 'Personalizza l\'aspetto e il funzionamento di Serendipity');
@define('INSTALL_FETCHLIMIT', 'Notizie da visualizzare sulla pagina iniziale');
@define('INSTALL_FETCHLIMIT_DESC', 'Numero di notizie da visualizzare per ogni paginai sull\'interfaccia');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Usa pagine compresse con gzip');
@define('INSTALL_USEGZIP_DESC', 'Per accelerare il trasferimento delle pagine, possiamo comprimere le pagine che mandiamo al visitatore, ammesso che il suo browser lo supporti. Raccomandato');
@define('INSTALL_XHTML11', 'Forza l\'aderenza a XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Vuoi forzare l\'aderenza allo standard XHTML 1.1 (potrebbe causare problemi nel backend e nel frontend con i browser di vecchia generazione)');
@define('INSTALL_POPUP', 'Abilita l\'uso di finestre popup');
@define('INSTALL_POPUP_DESC', 'Vuoi usare dei popup per i commenti, i trackback, ecc.?');
@define('INSTALL_EMBED', 'Hai inglobato serendipity?');
@define('INSTALL_EMBED_DESC', 'Se vuoi inglobare serendipity in una normale pagina, imposta questa opzione a vero, in modo da scartare gli header e scrivere solo i contenuti. Puoi usare i normali header della tua pagina web. Leggi il file README per avere più informazioni!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Rendi clickabili i link esterni?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"no": i link esterni non verificati (Top Exit, Top Referrer, Commenti degli utenti) non vengono mostrati/vengono mostrati come puro testo dove possibile, per evitare spam di google. (raccomandato). "Sì": I link esterni non verificati appaiono come link. Può essere reimpostato dalla configurazione dei plugin delle barre laterali!');
@define('INSTALL_TRACKREF', 'Abilita la traccia dei referenti?');
@define('INSTALL_TRACKREF_DESC', 'Abilitando la traccia dei referenti ti indicherà quali siti fanno riferimento ai tuoi articoli. Oggigiorno questo è spesso abusato dallo spamming, cosicché puoi disabilitarlo, se vuoi.');
@define('INSTALL_BLOCKREF', 'Referers bloccati');
@define('INSTALL_BLOCKREF_DESC', 'Ci sono particolari host che non vuoi mostrare nella lista dei referer? Separa la lista dei nomi di host con un \';\' e, nota bene, gli host vengono bloccati anche come sotto-stringhe!');
@define('INSTALL_REWRITE', 'Riscrittura URL');
@define('INSTALL_REWRITE_DESC', 'Seleziona quale regola vuoi per la generazione degli URL. Abilitare la riscrittura degli URL genera URL più belli e rende il blog meglio indicizzabile dai motori di ricerca come google. Il webserver deve supportare almeno mod_rewrite o "AllowOverride All" per la tua directory di serendipity. L\'impostazione di default è l\'auto-riconoscimento');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Differenza oraria del server');
@define('INSTALL_OFFSET_DESC', 'Inserisci il numero di ore di differenza tra la data del tuo server web (corrente: %clock%) e la zona oraria richiesta');
@define('INSTALL_SHOWFUTURE', 'Mostra notizie future');
@define('INSTALL_SHOWFUTURE_DESC', 'Se abilitato, questo mostrerà tutte le notizie future sul tuo blog. Altrimenti quelle notizie rimangono nascoste e vengono mostrate solo quando arriva la data di pubblicazione.');
@define('INSTALL_ACL', 'Applica i permessi di lettura per le categorie');
@define('INSTALL_ACL_DESC', 'Se abilitato, le impostazioni dei permessi di utente/gruppo che hai impostato per le categorie saranno applicati quando utenti loggati accedono al tuo blog. Se disabilitato, i permessi di lettura delle categorie NON sono applicati, ma l\'effetto positivo è una leggera velocizzazione del tuo blog. Così se non ti servono permessi di lettura multi-utente per il tuo blog, disabilita questa impostazione.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Mostra gli articoli completi con il corpo esteso nei feed RSS');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Immagine per il feed RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL di un\'immagine GIF/JPEG/PNG, se disponibile. (vuoto: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Larghezza Immagine');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'in pixel, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Altezza Immagine');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'in pixel, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Mostra gli inirizzi E-Mail?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Campo "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Indirizzo e-mail dell\'editore, se disponibile. (vuoto: nascosto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Campo "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Indirizzo e-mail del webmaster, se disponibile. (vuoto: nascosto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Campo "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Numero di minuti dopo i quali il tuo blog non dovrebbe essere tenuto in cache da altri siti/applicazioni (vuoto: nascosto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Campo "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Il campo "pubDate" deve essere incluso in un canale RSS, per mostrare la data di inserimento dell\'ultima notizia?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Impostazione per la conversione di immagini');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Inserisci informazioni generali su come serendipity deve trattare con le immagini');
@define('INSTALL_IMAGEMAGICK', 'Usa Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Hai image magick installato e vuoi usarlo per ridimensionare le immagini?');
@define('INSTALL_IMAGEMAGICKPATH', 'Percorso al binario \'convert\'');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Percorso completo e nome dell\'eseguibile \'convert\' di ImageMagick');
@define('INSTALL_THUMBSUFFIX', 'Suffisso miniature');
@define('INSTALL_THUMBSUFFIX_DESC', 'Le miniature avranno un nome nel formato: originale.[suffisso].est');
@define('INSTALL_THUMBWIDTH', 'Dimensioni delle miniature');
@define('INSTALL_THUMBWIDTH_DESC', 'Larghezza massima stabilita per le miniature auto-generate');
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
@define('USERCONF_CAT_PERSONAL', 'I tuoi dettagli personali');
@define('USERCONF_CAT_PERSONAL_DESC', 'Modifica i tuoi dettagli personali');
@define('USERCONF_USERNAME', 'Il tuo nome utente');
@define('USERCONF_USERNAME_DESC', 'Il nome utente che usi per collegarti al blog');
@define('USERCONF_PASSWORD', 'La tua password');
@define('USERCONF_PASSWORD_DESC', 'La password che usi per collegarti al blog');
@define('USERCONF_CHECK_PASSWORD', 'Vecchia Password');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Se cambi la password nel campo sopra, devi inserire la password utente attuale in questo campo.');
@define('USERCONF_USERLEVEL', 'Livello d\'accesso');
@define('USERCONF_USERLEVEL_DESC', 'Questo livello è utilizzato per determinare che tipo di accesso al blog abbia questo utente');
@define('USERCONF_GROUPS', 'Appartenenza di Gruppo');
@define('USERCONF_GROUPS_DESC', 'Questo utente è embro dei seguenti gruppi. Appartenenze di gruppo multiple sono possibili.');
@define('USERCONF_EMAIL', 'Il tuo indirizzo e-mail');
@define('USERCONF_EMAIL_DESC', 'Il tuo indirizzo e-mail personale');
@define('INSTALL_WYSIWYG', 'Usa un editor WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Vuoi usare l\'editor WYSIWYG? (Funziona con IE5+, parzialmente con Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Manda avvisi di commenti?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Vuoi ricevere un\'e-mail quando vengono scritti commenti sui tuoi articoli?');
@define('USERCONF_SENDTRACKBACKS', 'manda avvisi di trackback?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Vuoi ricevere e-mail quando vengono aggiunti dei trackback ai tuoi articoli?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Permessi: Pubblicazione notizie?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'A questo utente è consentito pubblicare notizie?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Impostazioni predefinite per le nuove notize');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'NOTA: L\'attributo \'userlevel\' è adesso utilizzato solo per compatibilità a ritroso con i plugins e alle autorizzazioni fallback. I privilegi utente sono adesso gestiti dalle appartenenze di gruppo!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Non hai specificato correttamente la vecchia password, e non se autorizzato a cambiare la password. Le tue impostazioni non sono state salvate.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Accesso all configurazione personale');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Cambio dei livelli utente');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Cambio "impedisci la creazione delle notizie"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Cambio dei diritti di pubblicazione delle notizie');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Accesso alla configurazione di sistema');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Accesso alla configurazione blog-centrica');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Amministrazione notizie');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Amministrazione notizie di altri utenti');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Importazione notizie');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Amministrazione categorie');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Amministrazione categorie di altri utenti');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Cancellazione categorie');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Amministrazione utenti');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Cancellazione utenti');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Cambio livello utente');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Amministrazione utenti che sono nel/i tuo(i) gruppo/i');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Amministrazione utenti che non sono nel/i tuo(i) gruppo/i');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Creazione nuovi utenti');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Amministrazione gruppi utenti');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Amministrazione plugins');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Amministrazione plugins di altri utenti');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Amministrazione files media');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Amministrazione directories media');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Aggiunta nuovi files media');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Cancellazione files media');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Amministrazione files media di altri utenti');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Visualizzazione files media');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Sincronizzazione miniature');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Amministrazione commenti');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Amministrazione modelli');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Visualizza files media di altri utenti');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'La tua notizia è stata salvata');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Per argomento');
@define('COMMENTS_VIEWMODE_LINEAR', 'Cronologicamente');
@define('DISPLAY_COMMENTS_AS', 'Mostra commenti');
@define('COMMENTS_DISABLE', 'Non consentire commenti a questa notizia');
@define('COMMENTS_ENABLE', 'Consenti commenti a questa notizia');
@define('COMMENTS_CLOSED', 'L\'autore non consente commenti a questa notizia');
@define('VIEW_EXTENDED_ENTRY', 'Continua a leggere "%s"');
@define('TRACKBACK_SPECIFIC', 'URI specifico di Trackback per questa notizia');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'vedi tutto');
@define('VIEW_TOPICS', 'vedi argomenti');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Argomenti di');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Notizie non inserite!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Memorizza le Informazioni? ');
@define('SUBMIT_COMMENT', 'Manda Comment');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Iscriviti a questa notizia');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Il tuo browser non ha inviato una stringa HTTP-Referrer valida. Ciò può essere stato causato da un browser/proxy imal configurato, oppure da una \'Cross Site Request Forgery\' (XSRF) rivolta a te. L\'azione che hai richiesto non è stata completata.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Il commento #%s sembra già essere stato approvato');
@define('COMMENT_EDITED', 'Il commento selezionato è stato modificato');
@define('COMMENTS_WILL_BE_MODERATED', 'I commenti sottoposti sono soggetti a moderazione prima di essere mostrati.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Attenzione: Questo commento deve essere approvato prima di essere mostrato');
@define('DELETE_COMMENT', 'Cancella commento');
@define('APPROVE_COMMENT', 'Approva commento');
@define('REQUIRES_REVIEW', 'Richiede revisione');
@define('COMMENT_APPROVED', 'Il commento #%s è stato approvato con successo');
@define('COMMENT_DELETED', 'Il commento #%s è stato cancellato con successo');
@define('COMMENTS_MODERATE', 'Commenti e Traceback a questa notizia richiedono moderazione');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Attenzione: Questo trackback richiede approvazione prima di essere mostrato');
@define('DELETE_TRACKBACK', 'Cancella trackback');
@define('APPROVE_TRACKBACK', 'Approva trackback');
@define('TRACKBACK_APPROVED', 'Il trackback #%s è stato approvato con successo');
@define('TRACKBACK_DELETED', 'Il trackback #%s è stato cancellato con successo');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Primo Livello');
@define('VIEW_COMMENT', 'Vedi commento');
@define('VIEW_ENTRY', 'Vedi notizia');
@define('LINK_TO_ENTRY', 'Link alla notizia');
@define('LINK_TO_REMOTE_ENTRY', 'Link alla notizia in remoto');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Invio del trackback all\'URI %s...');
@define('TRACKBACK_SENT', 'Trackback inviato con successo');
@define('TRACKBACK_FAILED', 'Trackback fallito: %s');
@define('TRACKBACK_NOT_FOUND', 'Nessun URI di trackback trovato.');
@define('TRACKBACK_URI_MISMATCH', 'L\'URI di trackback auto-rilevato non corrisponde con il nostro URI di destinazione.');
@define('TRACKBACK_CHECKING', 'Controllo di <u>%s</u> per possibili trackback...');
@define('TRACKBACK_NO_DATA', 'La destinazione non contiene dati');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Nessun Trackback inviato: Impossibile connettersi a %s sulla porta %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nuovo commento alla notizia "%s" a cui sei iscritto');
@define('SUBSCRIPTION_MAIL', "Ciao %s,\n\nC'è un nuovo commento alla notizia che stai tenendo d'occhio su \"%s\", intitolata \"%s\"\nIl nome dell'autore è : %s\n\nPuoi trovare la notizia qui: %s\n\nPuoi disiscriverti clickando su questo link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Ciao %s,\n\nUn nuovo trackback è stato aggiunto alla notizia che stai tenendo d'occhio su \"%s\", intitolata \"%s\"\nIl nome dell'autore è: %s\n\nPuoi trovare la notizia qui: %s\n\nPuoi disiscriverti clickando su questo link: %s\n");
@define('SIGNATURE', "\n-- \n%s powered by Serendipity.\nIl miglior blog del mondo, puoi usarlo anceh tu.\nGuarda <https://s9y.org> per sapere come.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Un nuovo commento è stato mandato al tuo blog "%s", nella notizia intitolata "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Un nuovo trackback è stato effettuato alla tua notizia intitolata "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Sono disponibili le seguenti opzioni:');
@define('NEW_TRACKBACK_TO', 'Nuovo trackback verso');
@define('NEW_COMMENT_TO', 'Nuovo commento mandato a');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nessuna notizia trovata per la ricerca %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'La tua ricerca di %s ha fornito %s risultati:');
@define('SEARCH_TOO_SHORT', 'La tua query di ricerca deve essere lunga almeno 4 caratteri. Puoi provere ad aggiungere * alle parole più corte, ad esempio: s9y*.');
@define('SEARCH_ERROR', 'La funzione di ricerca non ha funztionato come previsto. Nota per l\'amministratore di questo blog: ciò può succedere a causa di chiavi indice mancanti nel tuo database. Su sistemi MySQL il tuo account utente di database ha bisogno di privilegi per eseguire questa : <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> L\'errore specifico restituito dal database è stato: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Il tuo commento non conteneva nulla, per favore %storna indietro%s e riprova');
@define('COMMENT_NOT_ADDED', 'Il tuo commento non può essere aggiunto, perché i commenti per questa notizia sono stati disattivati, oppure perchè hai inserito dati non validi, o il tuo commento è incorso in misure anti-spam. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Commenti da');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Sintassi di configurazione errata perl\'opzione "%s". Occorre un contenuto di tipo "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Mostra la lista delle categorie.');
@define('CATEGORIES_PARENT_BASE', 'Visualizza solo categorie qui sotto ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Puoi scegliere una gategoria padre in modo che siano visualizzate solo le categorie figlie.');
@define('CATEGORIES_HIDE_PARALLEL', 'Nascondi le categorie che non sono parte dell\'albero delle categorie');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Se vuoi nascondere le categorie che fanno parte di un different albero di categorie, devi abilitare questo. Questa categoria ha senso soprattutto se usata in congiunzione con un multi-blog che utilizzi il plugin "Proprietà/Modelli di categorie".');
@define('CATEGORIES_HIDE_PARENT', 'Nascondi la gategoria padre selezionata?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Se restringi la lista delle categorie ad una specifica categoria, per default vedrai quella categoria padre nella lista in output. Se disabiliti questa opzione, il nome della categoria padre non sarà visualizzato.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Abilita gli Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Se questa opzione è abilitata, il plugin utilizzerà le caratteristiche dello Smarty-Templating per produrre la lista delle categorie. Se abiliti questo, puoi cambiare il tracciato con il file di modello "plugin_categories.tpl". Abilitare questa opzione avrà un effetto sulle prestazioni, così se non ti occorre fare personalizzazioni, lascialo disabiltato.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Mostra il numero di notizie per categoria?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Consenti ai visitatori di visualizzare più categorie contemporaneamente?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Se questa opzione è abiltata una casella di spunta sarà aggiunta dopo ogni categoria in questo plugin di barra laterale. Gli utenti possono spuntare quelle caselle per poi visualizzare le notizie corrispondenti alla loro selezione.');
@define('CATEGORIES_TO_FETCH', 'Categorie da scaricare');
@define('CATEGORIES_TO_FETCH_DESC', 'Scarica le categorie di quale autore?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Visualizza una lista di autori');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Mostra il numero di articoli dopo il nome dell\'autore?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Se questa opzione è abilitata, il numero di articolo di questo autore è mostrato fra parentesi dopo il nome degli autori.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Diffusione');
@define('SHOWS_RSS_BLAHBLAH', 'Mostra i link di diffusione RSS');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'feed %s');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 commenti');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'Identificativo FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'L\'identificativo del feed che vuoi pubblicare');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'Immagine FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nome dell\'immagine da visualizzare (o lasciare vuoto per il contatore), localizzata su feedburner.com, per esempio: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Titolo FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Titolo (se presene) da visualizzare con l\'immagine');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'Testo per l\'immagine FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Testo (se presente) da visualizzare al passagio sull\'immagine');
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
@define('ARCHIVE_COUNT', 'Numero di notizie nella lista');
@define('ARCHIVE_COUNT_DESC', 'Il numero totale di masi, settimane o giorni da visualizzare');
@define('ARCHIVE_FREQUENCY', 'Frequenza delle notizie nel calendario');
@define('ARCHIVE_FREQUENCY_DESC', 'L\'intervallo del calendario da usare tra ogni notiza nella lista');
@define('BROWSE_ARCHIVES', 'Sfoglia gli archivi per mese');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Mostra "Serendipity" come testo');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Mostra "Serendipity Weblog" come testo');
@define('POWERED_BY_SHOW_IMAGE', 'Mostra "Serendipity" con un logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Mostra il logo di Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Pubblicizza le origini del tuo blog');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Usa https per il  login');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Imposta il link di login a una locazione https. Il webserver deve supportare questa configurazione!');
@define('SUPERUSER', 'Amministrazione');
@define('SUPERUSER_OPEN_ADMIN', 'Apri amministrazione');
@define('SUPERUSER_OPEN_LOGIN', 'Apri schermo di login');
@define('ALLOWS_YOU_BLAHBLAH', 'Fornisce un link nella barra laterare per l\'amministrazione del blog');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Calendario');
@define('CALENDAR_BOW_DESC', 'Il giorno della settimana che dovrebbe essere considerato il primo. Il default è Lunedì');
@define('QUICKJUMP_CALENDAR', 'Calendario di accesso veloce');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Inizio settimana');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Abilita l\'aggancio del Plugin API');
@define('CALENDAR_EXTEVENT_DESC', 'Se abilitato, i plugins si possono agganciare al calendario per evidenziare i propri eventi. Abilita solo se hai installato plugin che hanno bisogno di questo, altrimenti peggiorerà solo le prestazioni.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Cerca una notizia');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Infila un pezzo di HTML nella tua barra laterale');
@define('THE_NUGGET', 'La pillola di HTML!');
@define('BACKEND_TITLE', 'Informazioni ulteriori nella pagina di Configurazione Plugin');
@define('BACKEND_TITLE_FOR_NUGGET', 'Qui puoi definire una stringa personalizzata che viene visualizzata nella pagina Configurazione plugin insieme ad una descrizione del plugin HTML Nugget. Se hai più HTML nuggets con il titolo vuoto, questo aiuta a distinguere i plugins.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Mostra i Top Exit/Referrer come link?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"no": Exit e Referrer sono mostrati come puro testo per evitare spam su google. "sì": Exit e Referrer vengono mostrati come link. "default": Usa le impostazioni globali (raccomandato).');
@define('HAVE_TO_BE_LOGGED_ON', 'Devi fare login per vedere questa pagina');
@define('WELCOME_TO_ADMIN', 'Benvenuti nella Suite di Amministrazione di Serendipity.');
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
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity non è ancora installato. per favore <a href="%s">installatelo</a> ora.');
@define('COMMENT_ADDED_CLICK', 'Clicka %squi per tornare%s ai commenti, e %squi per chiudere%s questa finestra.');
@define('COMMENT_NOT_ADDED_CLICK', 'Clicka %squi per tornare%s ai commenti, e %squi per chiudere%s questa finestra.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'L\'URI di destinazione eccede le dimensioni massime per i file di %s byte.');
@define('CLICK_FILE_TO_INSERT', 'Clicka sul file che vuoi inserire:');
@define('SELECT_FILE', 'Seleziona il file da inserire');
@define('MANAGE_IMAGES', 'Gestione immagini');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'O');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Servizi Esterni');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Caratteristiche');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Modalità Complete');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Visualizzazioni');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Notizie');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Gestione Utenti');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta Informazioni');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Modelli');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Caratteristiche');
@define('PLUGIN_GROUP_IMAGES', 'Immagini');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Marcatura');
@define('PLUGIN_GROUP_STATISTICS', 'Statistiche');
@define('IMPORT_WELCOME', 'Benvenuti nell\'utility di importazione di Serendipity');
@define('USER_SELF_INFO', 'Autenticato come %s (%s)');
@define('IMPORT_WHAT_CAN', 'Qui puoi importare notizie da altre applicazioni software di weblog');
@define('IMPORT_SELECT', 'Selezione il software dal quale vuoi importare');
@define('MANAGE_STYLES', 'Gestione stili');
@define('SELECT_A_PLUGIN_TO_ADD', 'Seleziona il plugin che vuoi installare');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Segue la lista dei plugins installati');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Interrompi subito');
@define('DELETE_SELECTED_COMMENTS', 'Cancella i commenti selezionati');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Trova media');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Errore: Il vecchio nome del file non esiste!');
@define('ERROR_SOMETHING', 'Errore: Qualcosa non va.');
@define('DIRECT_LINK', 'Link diretto a questa notizia');
@define('SELECT_TEMPLATE', 'Seleziona il modello che vuoi usare per il tuo blog');
@define('DATABASE_ERROR', 'errore di serendipity: impossibile connettersi al database - terminato.');
@define('LIMIT_TO_NUMBER', 'Quante notizie vuoi mostrare?');
@define('DIRECTORIES_AVAILABLE', 'Nella lista di sotto-directory disponibili puoi clickare sul nome di una directory per creare una nuova directory al suo interno.');
@define('CATEGORY_INDEX', 'Sotto c\'è una lista di categorie disponibili per le tue notizie');
@define('PAGE_BROWSE_PLUGINS', 'Pagina %s di %s, in totale %s plugins.');
@define('CHARSET_NATIVE', 'Nativo');
@define('XMLRPC_NO_LONGER_BUNDLED', 'L\'interfaccia API XML-RPC a Serendipity non è più inclusa a causa di continui problemi di sicurezza con questa API e perchè non è molto utilizzata. Perciò devi installare il Plugin XML-RPC per utilizzare l\'API XML-RPC. L\'URL da utilizzare nelle tue applicazioni NON cambierà - non appena hai installato il plugin, sarain in grado di utilizzare l\'API.');
@define('AUTHORS_ALLOW_SELECT', 'Permetti ai visitatori di visualizzare autori multipli contemporaneamente?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Se questa opzione è abilitata, una casella di spunta sarà aggiunta dopo ogni autore in questo plugin di barra laterale. Gli utenti possono spuntare queste caselle per poi visualizzare le notizie corrispondenti alla loro selezione.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
