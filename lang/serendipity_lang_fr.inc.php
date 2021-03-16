<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation by Sebastian Mordziol <argh@php-tools.net>
# http://sebastian.mordziol.de
# Traduction complétée par André San-Martin <andre.sanmartin@free.fr>
# http://www.sossan-martin.com
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'fr_FR.ISO-8859-1, fr_FR.ISO8859-1, french, fr, fr_FR, fr_FR@euro, en_US');
@define('DATE_FORMAT_ENTRY', '%A, %e %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'fr');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Type');
@define('PREVIEW', 'Prévisualisation');
@define('DATE', 'Date');
@define('TIME', 'Time');
@define('APPEARANCE', 'Apparence');
@define('LOGIN', 'Se connecter');
@define('LOGOUT', 'Se déconnecter');
@define('LOGGEDOUT', 'Déconnecté.');
@define('CREATE', 'Créer');
@define('BACK', 'Précédent');
@define('FORWARD', 'Suivant');
@define('ANONYMOUS', 'Anonyme');
@define('RECENT', 'Récentes...');
@define('OLDER', 'Plus anciennes...');
@define('DONE', 'Effectué');
@define('TITLE', 'Titre');
@define('DESCRIPTION', 'Description');
@define('PLACEMENT', 'Emplacement');
@define('DELETE', 'Supprimer');
@define('SAVE', 'Enregistrer');
@define('UP', '+HAUT');
@define('DOWN', '+BAS');
@define('PREVIOUS', 'Précédent');
@define('NEXT', 'Suivant');
@define('ENTRIES', 'billets');
@define('CATEGORIES', 'Catégories');
@define('NAME', 'Nom');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Site');
@define('COMMENT', 'Commentaire');
@define('VIEW', 'Afficher');
@define('HIDE', 'Cacher');
@define('WEEK', 'Semaine');
@define('WEEKS', 'Semaines');
@define('MONTHS', 'Mois');
@define('DAYS', 'Jours');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Succès');
@define('COMMENTS', 'Commentaires');
@define('ADD_COMMENT', 'Ajouter un commentaire');
@define('NO_COMMENTS', 'Pas de commentaires');
@define('POSTED_BY', 'Posté par');
@define('ON', 'sur');
@define('NO_CATEGORY', 'Pas de Catégorie');
@define('CATEGORY', 'Catégorie');
@define('EDIT', 'Éditer');
@define('GO', 'Go!');
@define('YES', 'Oui');
@define('NO', 'Non');
@define('NOT_REALLY', 'Pas vraiment...');
@define('DUMP_IT', 'À la poubelle !');
@define('IN', 'dans');
@define('AT', 'à');
@define('LEFT', 'gauche');
@define('RIGHT', 'droite');
@define('CENTER', 'center');
@define('ARCHIVES', 'Archives');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Recherche rapide');
@define('TRACKBACKS', 'Rétroliens');
@define('TRACKBACK', 'Rétrolien');
@define('NO_TRACKBACKS', 'Pas de rétroliens');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Excepté');
@define('TRACKED', 'Suivi');
@define('USER', 'Utilisateur');
@define('USERNAME', 'Nom d\'utilisateur');
@define('PASSWORD', 'Mot de passe');
@define('HIDDEN', 'caché');
@define('IMAGE', 'Image');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Auteur');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'version');
@define('INSTALL', 'Installer');
@define('REPLY', 'Répondre');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Erreur');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Forcer');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administration');
@define('ADMIN_FRONTPAGE', 'Page d\'accueil');
@define('QUOTE', 'Citation');
@define('NONE', 'aucun');
@define('GROUP', 'Groupe');
@define('AUTHORS', 'Auteurs');
@define('UPGRADE', 'Mise à jour');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Tous les auteurs');
@define('PREVIOUS_PAGE', 'Page précédente');
@define('NEXT_PAGE', 'Page suivante');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Toutes les catégories');
@define('LAST_UPDATED', 'Dernière mise à jour');
@define('IP_ADDRESS', 'Adresse IP');
@define('CHARSET', 'Charset');
@define('REFERER', 'Page référante');
@define('APPROVE', 'Valider');
@define('NOT_FOUND', 'Non trouvé');
@define('WRITABLE', 'Accessible en écriture');
@define('NOT_WRITABLE', 'Protégé en écriture');
@define('WELCOME_BACK', 'Bienvenue,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Trier par');
@define('SORT_ORDER', 'Trier par ordre');
@define('SORT_ORDER_ASC', 'Croissant');
@define('SORT_ORDER_DESC', 'Décroissant');
@define('FILTERS', 'Filtres');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Afficher/Ne pas afficher les détails');
@define('TOGGLE_OPTION', 'Afficher les détails');
@define('IN_REPLY_TO', 'En réponse à');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Dossier');
@define('BACK_TO_BLOG', 'Revenir au Weblog');
@define('HTML_NUGGET', 'Bloc HTML');
@define('TITLE_FOR_NUGGET', 'Titre du bloc HTML');
@define('COMMENT_ADDED', 'Votre commentaire a été ajouté.');
@define('ENTRIES_FOR', 'Billets pour %s');
@define('NO_ENTRIES_TO_PRINT', 'Aucun billet à afficher');
@define('COMMENT_DELETE_CONFIRM', 'Êtes-vous sûr de vouloir supprimer le commentaire #%d, posté par %s ?');
@define('DELETE_SURE', 'Etes vous sûr de vouloir supprimer #%s définitivement ?');
@define('MEDIA_FULLSIZE', 'Taille réelle');
@define('SIDEBAR_PLUGIN', 'plugin de barre latérale');
@define('EVENT_PLUGIN', 'plugin d\'évènement');
@define('PLUGIN_ITEM_DISPLAY', 'Où le billet doit-il être affiché ?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Dans la vue détaillée seulement');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Page d\'accueil seulement');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Sur la page d\'accueil et la vue détaillée');
@define('DIRECTORY_WRITE_ERROR', 'Je ne peux pas écrire dans le répertoire %s. Il faudrait que vous me donniez les droits d\'accès nécessaires manuellement.');
@define('FILE_WRITE_ERROR', 'Je ne peux pas ouvrir le fichier %s pour écriture.');
@define('INCLUDE_ERROR', 'Erreur Serendipity : impossible d\'inclure le fichier %s.');
@define('DO_MARKUP', 'Transformation de balises dans le texte');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Format de la date');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Le format dans lequel la date des billets doit être affichée. Toute syntaxe permise par la fonction PHP <a href="http://www.php.net/strftime" target="blank">strftime()</a> est possible. (Défaut : "%s")');
@define('APPLY_MARKUP_TO', 'Appliquer la transformation des balises à %s');
@define('XML_IMAGE_TO_DISPLAY', 'Bouton "XML"');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Les liens vers les fils XML seront affichés avec cette image. Laissez vide pour l\'image par défaut, ou tapez \'none\' pour la désactiver.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Suppression du fichier %s...');
@define('SETTINGS_SAVED_AT', 'La nouvelle configuration a été enregistrée à %s');
@define('INVERT_SELECTIONS', 'Inverser les sélections');
@define('PERSONAL_SETTINGS', 'Réglages personnels');
@define('DO_MARKUP_DESCRIPTION', 'Transforme les balises dans le texte (smileys, raccourcis via *, /, _, ...). La désactiver préserva tout le code HTML dans le texte.');
@define('BASE_DIRECTORY', 'Répertoire de base');
@define('PERM_READ', 'Autorisation de lecture');
@define('PERM_WRITE', 'Autorisation d\'écriture');
@define('PERM_DENIED', 'Autorisation refusée.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Installation de Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Bienvenue dans l\'assistant d\'installation de Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Tout d\'abord, nous allons faire une analyse préventive de votre installation et essayer de diagnostiquer d\'éventuels problèmes de compatibilité.');
@define('ERRORS_ARE_DISPLAYED_IN', 'Les erreurs sont affichées en %s, les recommandations en %s et les succès en %s');
@define('RED', 'rouge');
@define('YELLOW', 'jaune');
@define('GREEN', 'vert');
@define('PRE_INSTALLATION_REPORT', 'Rapport pré-installation de Serendipity v%s');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'Installation PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Système d\'exploitation');
@define('WEBSERVER_SAPI', 'SAPI Serveur');
@define('PHPINI_CONFIGURATION', 'configuration php.ini');
@define('RECOMMENDED', 'Recommandé');
@define('ACTUAL', 'Actuel');
@define('PERMISSIONS', 'Permissions');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Les droits d\'accès peuvent être changés en ligne de commande par la commande : `<em>%s</em>` sur le répertoire qui fait défaut, ou en le faisant à l\'aide d\'un programme FTP.');
@define('PROBLEM_DIAGNOSTIC', 'À cause d\'erreurs survenues lors de l\'analyse préventive, vous ne pourrez continuer l\'installation qu\'après avoir corrigé les erreurs mentionnées ci-dessus.');
@define('SELECT_INSTALLATION_TYPE', 'Choisissez le type d\'installation que vous voulez utiliser');
@define('RECHECK_INSTALLATION', 'Revérifier l\'installation');
@define('SIMPLE_INSTALLATION', 'Installation rapide');
@define('EXPERT_INSTALLATION', 'Installation expert');
@define('COMPLETE_INSTALLATION', 'Installation complète');
@define('WONT_INSTALL_DB_AGAIN', 'la base de données ne sera pas réinstallée');
@define('THEY_DO', 'ils font');
@define('THEY_DONT', 'ils ne font pas');
@define('CHECK_DATABASE_EXISTS', 'Vérifie si la base de données et les tableaux nécessaires sont déjà présents');
@define('CREATE_DATABASE', 'Création de la structure de la base de données...');
@define('ATTEMPT_WRITE_FILE', 'Essai d\'écriture sur le fichier %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Création de l\'auteur principal \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Définition du thème par défaut');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installation des plugins par défaut');
@define('SERENDIPITY_INSTALLED', 'Serendipity a été installé avec succès');
@define('VISIT_BLOG_HERE', 'Accéder à votre nouveau blog');
@define('THANK_YOU_FOR_CHOOSING', 'Merci d\'avoir choisi Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Une erreur a été détectée pendant l\'installation');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'propulsé par');
@define('ADMIN_FOOTER_POWERED_BY', 'Propulsé par Serendipity %s et PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Éditeur standard');
@define('USERLEVEL_CHIEF_DESC', 'Éditeur en chef');
@define('USERLEVEL_ADMIN_DESC', 'Administrateur');
@define('WWW_USER', 'Changez www dans le nom d\'utilisateur sous lequel fonctionne le serveur apache (nobody, par ex).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Le répertoire %s n\'existe pas et ne peut pas être crée automatiquement. Veuillez le créer manuellement, ou me donner les droits d\'accès nécessaires.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; exécute <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Je ne peux pas exécuter le programme %s');
@define('FILE_CREATE_YOURSELF', 'Merci de créer le fichier vous-même ou de me donner les droits d\'accès nécessaires.');
@define('COPY_CODE_BELOW', '<br />* Copiez le code ci-dessous et placez le %s dans votre %s répertoire :<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Une fois ceci effectué, rechargez la page avec la touche "F5".');
@define('ERROR_TEMPLATE_FILE', 'Impossible d\'ouvrir le fichier du thème, merci de mettre à jour Serendipity !');
@define('HTACCESS_ERROR', 'Pour vérifier l\'installation de Serendipity sur votre serveur, Serendipity doit pouvoir créer le fichier ".htaccess". Ceci n\'a pas été possible car Serendipity n\'a pas les droits d\'accès suffisants dans ce répertoire. Vous pouvez ajuster les droits d\'accès avec la commande suivante : <br />&nbsp;&nbsp;%s<br />. Après, rechargez cette page avec la touche "F5".');
@define('EMPTY_SETTING', 'Vous n\'avez pas spécifié de valeur correcte pour "%s" !');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity a détecté que votre configuration (version %s) ne correspond pas à la version de votre installation de Serendipity (version %s). Pour continuer à utiliser Serendipity, l\'assistant de mise à jour va vous guider pour <a href="%s">mettre à jour</a> votre installation.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Bonjour, et bienvenue dans l\'assistant de mise à jour de Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Je vais vous guider pour la mise à jour de votre installation %s de Serendipity.');
@define('SERENDIPITY_UPGRADER_WHY', 'Vous voyez ce message car vous avez installé Serendipity %s, mais la base de données doit être reconfigurée pour fonctionner correctement avec cette version.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Mises à jour de la base de données (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Pour mettre à jour votre base de données, j\'ai trouvé les fichiers .sql suivants qui doivent être importés :');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Tâches spécifiques à la version');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Aucune tâche spécifique à la nouvelle version n\'a été trouvée');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Voulez-vous que j\'effectue les tâches suivantes ?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Non, je vais le faire manuellement');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Oui, faites-le s\'il vous plait');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Une mise à jour n\'est pas nécessaire pour votre installation de Serendipity, il n\'y a pas de tâches à effectuer.');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Considérez Serendipity comme mis à jour.');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vous avez ignoré la mise à jour de Serendipity, assurez-vous que la base de données est installée correctement, et que les tâches nécessaires sont effectuées.');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Votre installation de Serendipity a été mise à jour à la version %s.');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Vous pouvez retourner à votre blog en %scliquant ici%s');
@define('ADMIN_ENTRIES', 'Billets');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Impossible de se connecter à la base de données MySQL : %s.');
@define('COULDNT_SELECT_DB', 'Impossible de sélectionner une base de données : %s.');
@define('COULDNT_SELECT_USER_INFO', 'Impossible d\'accéder aux informations d\'utilisateurs : %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Impossible d\'accéder aux informations de catégories : %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Impossible d\'accéder aux informations de billets : %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Impossible d\'accéder aux informations de commentaires : %s.');
@define('MYSQL_REQUIRED', 'L\'extension MySQL doit être activée dans votre installation PHP pour pouvoir continuer.');
@define('CREATE_AUTHOR', 'Créer l\'auteur \'%s\'.');
@define('CREATE_CATEGORY', 'Créer la catégorie \'%s\'.');
@define('MT_DATA_FILE', 'Fichier de données Movable Type');
@define('INSTALL_DBPORT', 'Port de la base de données');
@define('INSTALL_DBPORT_DESC', 'Le port à utiliser pour se connecter à la base de données');
@define('IMPORT_PLEASE_ENTER', 'Complétez les informations requises ci-dessous');
@define('IMPORT_NOW', 'Importer maintenant !');
@define('IMPORT_STARTING', 'Importe les billets...');
@define('IMPORT_FAILED', 'Importation échouée');
@define('IMPORT_DONE', 'Importation terminée avec succès');
@define('IMPORT_WEBLOG_APP', 'Logiciel de Blog');
@define('IMPORT_NOTES', 'Remarque :');
@define('IMPORT_STATUS', 'Statut après importation');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Mettre tout le texte importé dans l\'introduction du billet au lieu de le répartir sur l\'introduction et le corps du billet.');
@define('IMPORT_GENERIC_RSS', 'Importation générique de fils RSS');
@define('ACTIVATE_AUTODISCOVERY', 'Envoyer des traçages aux liens trouvés dans le billet');
@define('RSS_IMPORT_CATEGORY', 'Utiliser cette catégorie pour les billets à catégorie inconnue');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Le document %s n\'a pas été trouvé.');
@define('CONVERT_HTMLENTITIES', 'Essayer de convertir automatiquement les balises HTML ?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administration de Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Vous avez entré un nom d\'utilisateur ou un mot de passe erroné');
@define('PLEASE_ENTER_CREDENTIALS', 'Entrez vos données d\'authentification ci-dessous.');
@define('AUTOMATIC_LOGIN', 'Garder en mémoire');
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
@define('MEDIA', 'Document');
@define('MEDIA_LIBRARY', 'Médiathèque');
@define('ADD_MEDIA', 'Ajouter un document');
@define('MANAGE_DIRECTORIES', 'Administrer les dossiers');
@define('CONFIGURATION', 'Configuration');

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
@define('ENTRY_PUBLISHED_FUTURE', 'Ce billet n\'a pas encore été publié.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Plugins pour la barre latérale');
@define('EVENT_PLUGINS', 'Plugins d\'évènement');
@define('CONFIGURE_PLUGINS', 'Configurer les Plugins');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Les pré-requis ne sont pas remplis : %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Mise à jour vers la version %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Cliquez ici pour installer un nouveau %s');
@define('ALREADY_INSTALLED', 'Déjà installé');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Éditer les billets');
@define('EDIT_ENTRY', 'Éditer le billet');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Brouillon');
@define('PUBLISH', 'Publication');
@define('CONTENT', 'Contenu');
@define('ENTRIES_PER_PAGE', 'billets par page');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Billets indélébiles');
@define('PAGE_BROWSE_ENTRIES', 'Page %s de %s sur %s billets au total');
@define('FIND_ENTRIES', 'Trouver des billets');
@define('RIP_ENTRY', 'Le billet #%s a rejoint l\'éternel.');
@define('NEW_ENTRY', 'Poster un billet');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Introduction');
@define('EXTENDED_BODY', 'Corps du billet');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Une copie du billet a été sauvegardée');
@define('IFRAME_PREVIEW', 'Serendipity est en train de préparer la page pour prévisualiser votre billet...');
@define('IFRAME_WARNING', 'Votre navigateur n\'est pas compatible avec les iframes. Ouvrez le fichier serendipity_config.inc.php et passez la variable $serendipity[\'use_iframe\'] à FALSE.');
@define('DATE_INVALID', 'Attention: La date entrée est invalide. Elle doit être au format YYYY-MM-DD HH:MM .');
@define('ADVANCED_OPTIONS', 'Options avancées');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Ce lien n\\\'est pas fait pour être cliqué. Il contient le rétrolien de ce billet. Vous pouvez utiliser ce lien pour envoyer un ping ou créer un rétrolien vers ce billet à partir de votre blog. Pour copier le lien, faites un clic droit sur le lien, et sélectionnez \\\'Copier le lien\\\' dans Internet Explorer ou \\\'Copier le lien\\\' dans Mozilla.');
@define('RESET_DATE', 'Réinitialiser la date');
@define('RESET_DATE_DESC', 'Cliquez ici pour remettre la date à l\'heure actuelle');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Administrer les utilisateurs');
@define('CREATE_NEW_USER', 'Créer un nouvel utilisateur');
@define('CREATE_NOT_AUTHORIZED', 'Vous ne pouvez pas éditer des utilisateurs qui ont le même niveau d\'autorisation que le vôtre.');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Vous ne pouvez pas créer d\'utilisateur avec un niveau d\'autorisation plus élevé que le vôtre.');
@define('CREATED_USER', 'Un nouvel utilisateur %s a été créé');
@define('MODIFIED_USER', 'Les propriétés de l\'utilisateur %s ont été changées');
@define('USER_LEVEL', 'Niveau d\'autorisation');
@define('WARNING_NO_GROUPS_SELECTED', 'Attention : vous n\'avez pas sélectionné d\'appartenance de groupe. Comme vous risquez de vous exclure vous-même de la gestion des groupes d\'utilisateurs, vos modifications n\'ont pas été enregistrées.');
@define('DELETE_USER', 'Vous êtes sur le point de supprimer l\'utilisateur #%d %s. Êtes-vous sûr de vouloir continuer ? Les billets de cet utilisateur ne seront plus visibles dans votre blog.');
@define('DELETED_USER', 'Utilisateur #%d %s supprimé.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Administrer les groupes');
@define('DELETED_GROUP', 'Groupe #%d %s effacé.');
@define('CREATED_GROUP', 'Un nouveau groupe intitulé %s a été créé');
@define('MODIFIED_GROUP', 'Les propriétés du groupe %s ont été modifiées');
@define('CREATE_NEW_GROUP', 'Créer un nouveau groupe');
@define('DELETE_GROUP', 'Vous êtes sur le point d\'effacer le groupe  #%d %s. Êtes-vous sûr ?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Trouver des commentaires');
@define('COMMENTS_FILTER_SHOW', 'Afficher');
@define('COMMENTS_FILTER_ALL', 'Tous');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Approuvés');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'En attente d\'être approuvés');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Êtes-vous sûr de vouloir supprimer les commentaires sélectionnés ?');
@define('PAGE_BROWSE_COMMENTS', 'Page %s de %s, %s commentaires au total');
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
@define('CATEGORY_SAVED', 'Catégorie sauvegardée');
@define('CATEGORY_ALREADY_EXIST', 'Une catégorie avec le nom "%s" existe déjà');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Catégorie #%s supprimée. Les billets ont été déplacés dans la catégorie #%s');
@define('CATEGORY_DELETED', 'Catégorie #%s supprimée.');
@define('INVALID_CATEGORY', 'Aucune catégorie sélectionnée pour la suppression');
@define('EDIT_THIS_CAT', 'Éditer "%s"');
@define('CATEGORY_REMAINING', 'Effacer cette catégorie et déplacer tous les billets dans cette catégorie');
@define('PARENT_CATEGORY', 'Catégorie parent');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Créer une nouvelle catégorie');
@define('ALREADY_SUBCATEGORY', '%s est déjà une sous-catégorie de %s.');
@define('NO_CATEGORIES', 'Pas de catégories');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importer des billets');
@define('EXPORT_ENTRIES', 'Exporter des billets');
@define('EXPORT_FEED', 'Exporter le fil RSS complet');
@define('CREATE_THUMBS', 'Recréer les miniatures');
@define('WARNING_THIS_BLAHBLAH', "ATTENTION:\\nCeci peut prendre du temps s\'il y beaucoup d\'images sans miniatures.");
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
@define('TEMPLATE_SET', '\'%s\' a été défini comme thème actif');
@define('WARNING_TEMPLATE_DEPRECATED', 'Attention : les templates du thème que vous avez choisi utilisent des fonctions périmées. Vous devriez les mettre à jour si possible.');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Interface d\'administration sur mesure disponible');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Choisir ce thème');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Vérifier &amp; sauvegarder');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Supprimer les plugins cochés');
@define('SAVE_CHANGES_TO_LAYOUT', 'Enregistrer les changements');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronisation de la base de données avec votre collection d\'images');
@define('SYNC_DONE', 'Terminé (%s images synchronisées).');
@define('RESIZE_BLAHBLAH', '<b>Redimensionner %s</b>');
@define('ORIGINAL_SIZE', 'Taille d\'origine : <i>%sx%s</i> pixel');
@define('RESIZING', 'Redimensionnement');
@define('RESIZE_DONE', 'Terminé (%s images redimensionnées).');
@define('KEEP_PROPORTIONS', 'Conserver les proportions');
@define('REALLY_SCALE_IMAGE', 'Réellement redimensionner cette image ? Attention : cette opération est irréversible !');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Ici vous pouvez ajuster la taille de l\'image sélectionnée. Si vous voulez respecter les proportions de l\'image, entrez juste la hauteur ou la largeur, et pressez la touche TAB - la valeur correspondante sera insérée automatiquement :');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nouvelle taille : ');
@define('SCALING_IMAGE', 'Redimensionnement %s en %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Le dossier <strong>%s</strong> a été créé.');
@define('PARENT_DIRECTORY', 'Dossier parent');
@define('CONFIRM_DELETE_DIRECTORY', 'Êtes-vous sûr de vouloir supprimer tous les contenus du dossier %s ?');
@define('ERROR_NO_DIRECTORY', 'Erreur : le dossier %s n\'existe pas');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Impossible de supprimer un dossier non vide. Cochez la case "Forcer la suppression" si vous voulez supprimer les fichiers gênants, et puis effectuez l\'opération à nouveau. Les fichiers présents dans le dossier sont les suivants :');
@define('DIRECTORY_DELETE_FAILED', 'La suppression du dossier %s a échoué. Vérifiez les droits d\'accès au répertoire et les messages ci-dessus.');
@define('DIRECTORY_DELETE_SUCCESS', 'Suppression du dossier %s effectuée.');
@define('CHECKING_DIRECTORY', 'Vérification des fichiers dans le dossier %s');
@define('DELETE_DIRECTORY', 'Supprimer le répertoire');
@define('DELETE_DIRECTORY_DESC', 'Vous êtes sur le point de supprimer le contenu d\'un répertoire contenant des fichiers média qui peuvent être utilisés par certains de vos billets.');
@define('FORCE_DELETE', 'Suprimer TOUS les fichiers de ce répertoire, y compris ceux inconnus de Serendipity');
@define('CREATE_DIRECTORY', 'Créer un répertoire');
@define('CREATE_NEW_DIRECTORY', 'Créer un nouveau répertoire');
@define('CREATE_DIRECTORY_DESC', 'Ici vous pouvez créer un répertoire qui pourra contenir des fichiers médias. Choisissez un nom pour votre répertoire ainsi que, si vous voulez, le répertoire parent dans lequel il sera placé.');
@define('ABOUT_TO_DELETE_FILE', 'Vous êtes sur le point d\'effacer <b>%s</b>.<br />Si vous avez utilisé ce fichier dans un de vos billets, les liens vers celui-ci seront invalides<br />Êtes-vous sûr de vouloir continuer ?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Erreur : le fichier existe déjà sur votre machine.');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Impossible de trouver le fichier intitulé <b>%s</b>, peut-être a-t-il déjà été supprimé ?');
@define('ERROR_FILE_FORBIDDEN', 'Vous n\'êtes pas autorisé à télécharger des fichiers avec ce contenu');
@define('REMOTE_FILE_NOT_FOUND', 'Le fichier n\'a pas été trouvé sur le serveur distant, êtes-vous sûr que l\'URL <b>%s</b> est correcte ?');
@define('FILE_FETCHED', '%s téléchargé et sauvegardé sous %s');
@define('FILE_UPLOADED', 'Le fichier %s a été uploadé avec succès sous %s');
@define('DELETE_FILE_FAIL', 'Unable to delete file <b>%s</b>');
@define('DELETE_FILE', 'Suppression du fichier intitulé <b>%s</b>');
@define('FOUND_FILE', 'Fichier nouveau/modifié trouvé : %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Erreur : il existe déjà un fichier portant ce nom. Choisissez un nouveau nom.');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'Lié');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Entrez le nouveau nom pour : ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Ajout d\'une image...');
@define('THUMB_CREATED_DONE', 'Miniature créee.<br>Terminé.');
@define('THUMBNAIL_USING_OWN', 'L\'image %s est si petite qu\'elle va être utilisée comme sa propre miniature.');
@define('THUMBNAIL_FAILED_COPY', 'La miniature pour %s n\'a pas pu être copiée.');
@define('DELETE_THUMBNAIL', 'Suppression de la miniature de l\'image intitulée <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Erreur : impossible d\'uploader le fichier. Peut-être que la taille du fichier est plus grande que ce que votre serveur autorise. Vérifiez avec votre administrateur système ou éditez votre fichier php.ini pour autoriser le téléchargement de fichiers plus volumineux.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', 'Lien du fichier.<br />Fait.');
@define('DELETE_HOTLINK_FILE', 'Suppression du fichier lié nommé <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Impossible d\'exécuter : "%s", erreur: %s, retourne la valeur: %d');
@define('SKIPPING_FILE_EXTENSION', 'Fichier ignoré : pas d\'extension de fichier dans %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Fichier ignoré : impossible de lire à partir du fichier %s .');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Je veux utiliser une miniature dans ma news.');
@define('I_WANT_BIG_IMAGE', 'Je veux utiliser l\'image en taille rélle dans mon billet.');
@define('I_WANT_NO_LINK', ' Je veux l\'afficher en tant qu\'image');
@define('I_WANT_IT_TO_LINK', 'Je veux l\'afficher en tant que lien vers cette adresse :');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Taille de l\'image');
@define('IMAGE_ALIGNMENT', 'Position de l\'image');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Insérer l\'image');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Vous avez choisi %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Basculer l\'image de 90 degrés vers la droite');
@define('IMAGE_ROTATE_RIGHT', 'Basculer l\'image de 90 degrés vers la gauche');
@define('MEDIA_RENAME', 'Renommer ce fichier');
@define('THUMBNAIL_SHORT', 'Miniature');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Nom du fichier');
@define('SORT_ORDER_EXTENSION', 'Extension du fichier');
@define('SORT_ORDER_SIZE', 'Taille du fichier');
@define('SORT_ORDER_WIDTH', 'Largeur de l\'image');
@define('SORT_ORDER_HEIGHT', 'Hauteur de l\'image');
@define('SORT_ORDER_DATE', 'Date de l\'upload');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Ajouter un fichier à votre médiathèquei :</b><p>Vous permet d\'uploader des fichiers, ou de me dire une adresse internet de laquelle je peux les télécharger. Si vous n\'avez pas d\'image appropriée, vous pouvez faire une <a href="https://images.google.com/" target="_blank">recherche d\'images avec Google</a>, les résultats sont souvent intéressants et toujours très comiques :)</p><p><b>Choisissez une méthode :</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Entrez un lien d\'un fichier à télécharger :');
@define('ENTER_MEDIA_UPLOAD', 'Sélectionnez un fichier à uploader :');
@define('SAVE_FILE_AS', 'Enregistrer le fichier sous :');
@define('STORE_IN_DIRECTORY', 'Enregistrer dans le dossier suivant : ');
@define('IMAGE_MORE_INPUT', 'Ajouter plusieurs images');
@define('ENTER_MEDIA_URL_METHOD', 'Mode de recherche :');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Remarque : si vous choisissez de faire un lien sur le serveur, assurez-vous d\'avoir la permission de le faire, ou que le site vous appartienne. Faire un lien vous permet d\'utiliser des images qui ne sont pas sur le site sans avoir à les stocker localement sur le serveur.');
@define('FETCH_METHOD_IMAGE', 'Téléchargement de l\'image vers votre serveur');
@define('FETCH_METHOD_HOTLINK', 'Lien vers le serveur');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Redimensionner cette image');
@define('MEDIA_DELETE', 'Supprimer ce fichier');
@define('FILES_PER_PAGE', 'Fichiers par page');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Pas d\'images trouvées');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'tous les dossiers');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Configuration écrite &amp; sauvegardée');
@define('DIAGNOSTIC_ERROR', 'J\'ai touvé quelques erreurs en vérifiant vos données :');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Configuration de la base de données');
@define('INSTALL_CAT_DB_DESC', 'Vous permet d\'entrer toutes les données nécessaires pour la base de données dont Serendipity a besoin pour fonctionner.');
@define('INSTALL_DBTYPE', 'Type de base de données');
@define('INSTALL_DBTYPE_DESC', 'Choisissez le type de votre base de données');
@define('INSTALL_DBHOST', 'Serveur hôte');
@define('INSTALL_DBHOST_DESC', 'Le nom du serveur hôte sur lequel réside la base de données (exemple: localhost)');
@define('INSTALL_DBUSER', 'Nom d\'utilisateur');
@define('INSTALL_DBUSER_DESC', 'Le nom d\'utilisateur à utiliser pour se connecter à la base de données');
@define('INSTALL_DBPASS', 'Mot de passe');
@define('INSTALL_DBPASS_DESC', 'Le mot de passe correspondant au nom d\'utilisateur');
@define('INSTALL_DBNAME', 'Nom de la base de données');
@define('INSTALL_DBNAME_DESC', 'Le nom de la base de données à laquelle Serendipity doit se connecter');
@define('INSTALL_DBPREFIX', 'Préfixe des tables');
@define('INSTALL_DBPREFIX_DESC', 'Le préfixe à utiliser pour les tables de Serendipity (exemple: serendipity_)');
@define('INSTALL_DBPERSISTENT', 'Utiliser les connexions permanentes');
@define('INSTALL_DBPERSISTENT_DESC', 'Active l\'utilisation de connexions permanentes à la base de données. Pour plus d\'informations, consultez le <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">manuel de PHP</a>. Non recommandé en règle générale.');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Chemins');
@define('INSTALL_CAT_PATHS_DESC', 'Configuration des chemins aux dossiers et fichiers indispensables. N\'oubliez pas d\'ajouter les slashes ("/") finaux !');
@define('INSTALL_FULLPATH', 'Chemin absolu');
@define('INSTALL_FULLPATH_DESC', 'Le chemin complet et absolu du dossier d\'installation de Serendipity');
@define('INSTALL_UPLOADPATH', 'Chemin pour les uploads');
@define('INSTALL_UPLOADPATH_DESC', 'C\'est ici que Serendipity enregistre tous les fichiers uploadés. Chemin relatif au \'chemin absolu\' - normalement \'uploads/\'');
@define('INSTALL_RELPATH', 'Chemin relatif');
@define('INSTALL_RELPATH_DESC', 'Le chemin d\'accès à Serendipity pour votre navigateur, normalement \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Chemin relatif des thèmes');
@define('INSTALL_RELTEMPLPATH_DESC', 'Le chemin au dossier contenant vos thèmes - relatif au \'Chemin relatif\'');
@define('INSTALL_RELUPLOADPATH', 'Chemin relatif des uploads');
@define('INSTALL_RELUPLOADPATH_DESC', 'Le chemin d\'accès aux fichiers uploadés pour votre navigateur - relatif au \'Chemin relatif\'');
@define('INSTALL_URL', 'Lien au blog');
@define('INSTALL_URL_DESC', 'Le lien (URL) pour accéder à votre installation de Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodétection utilisée HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Si positionné à "true", Serendipity s\'assurera que l\'hôte HTTP qui a été utilisé par le visiteur utilise les réglages de votre base d\'URLs. Autoriser cela vous permettra d\'utiliser plusieurs noms de domaines pour votre blog Serendipity, et utilisera le domaine pour tout les liens suivants utilisés par le visiteur pour accéder à votre blog.');
@define('INSTALL_INDEXFILE', 'Script principal');
@define('INSTALL_INDEXFILE_DESC', 'Le nom du script principal que vous voulez utiliser pour Serendipity (exemple: index.php)');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Rétroliens');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Permet de créer des modèles de liens permanents pour accéder aux diverses fonctions de votre blog. Nous suggérons d\'utiliser les valeurs par défaut. Si vous décidez de les changer, vous devriez essayer d\'utiliser la valeur %id% quand c\'est possible : vous pouvez ainsi éviter que Serendipity accède à la base de données pour déterminer l\'adresse cible.');
@define('INSTALL_PERMALINK', 'Structure des rétroliens');
@define('INSTALL_PERMALINK_DESC', 'Ici vous pouvez définir le chemin relatif à l\adresse de votre blog par lequel on pourra accéder à tous les billets. Vous pouvez utiliser les variables %id% (identifiant), %title% (titre du billet), %day% (jour), %month% (mois), %year% (année) et n\'importe quels autres caractères.');
@define('INSTALL_PERMALINK_AUTHOR', 'Structure des rétroliens par auteur');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Ici vous pouvez définir le chemin relatif à l\adresse de votre blog par lequel on pourra accéder aux billets classés par auteur. Vous pouvez utiliser les variables %id% (identifiant), %realname% (nom réel), %username% (pseudo), %email% et n\'importe quels autres caractères.');
@define('INSTALL_PERMALINK_CATEGORY', 'Structure des rétroliens par catégorie');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Ici vous pouvez définir le chemin relatif à l\'adresse de votre blog par lequel on pourra accéder aux billets classés par catégorie. Vous pouvez utiliser les variables %id% (identifiant), %name% (nom), %parentname%, %description% et n\'importe quels autres caractères.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Structure des fils RSS par catégorie');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Ici vous pouvez définir le chemin relatif à l\'adresse de votre blog par lequel on pourra accéder aux fils RSS des catégories. Vous pouvez utiliser les variables %id% (identifiant), %name% (nom), %description% et n\'importe quels autres caractères.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Structure des rétroliens aux fils RSS d\'auteurs');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Ici vous pouvez définir la structure relative de l\'adresse par laquelle on peut accéder aux fils RSS d\'utilisateurs spécifiques. Vous pouvez utiliser les variables %id% (identifiant), %realname% (nom réel), %username% (pseudo), %email% (email) et les caractères de votre choix dans l\'adresse cible.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Chemin d\'accès aux archives');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Chemin d\'accès à l\'archive');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Chemin d\'accès aux catégories');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Chemin des auteurs');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Adresse de désinscription des commentaires');
@define('INSTALL_PERMALINK_DELETEPATH', 'Adresse pour effacer les commentaires');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Adresse pour l\'autorisation des commentaires');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Chemin d\'accès aux fils RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Chemin d\'accès à un plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Chemin d\'accès à l\'administration');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Chemin d\'accès à la recherche');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Configuration générale');
@define('INSTALL_CAT_SETTINGS_DESC', 'Personnalisation et configuration générale de Serendipity');
@define('INSTALL_USERNAME', 'Nom de l\'administrateur');
@define('INSTALL_USERNAME_DESC', 'Le nom d\'utilisateur pour l\'accès de l\'administrateur');
@define('INSTALL_PASSWORD', 'Mot de passe l\'administrateur');
@define('INSTALL_PASSWORD_DESC', 'Le mot de passe pour l\'accès de l\'administrateur');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Nom réel');
@define('USERCONF_REALNAME_DESC', 'Le nom complet de l\'auteur. C\'est le nom qui sera vu par les lecteurs');
@define('INSTALL_EMAIL', 'Email de l\'administrateur');
@define('INSTALL_EMAIL_DESC', 'Adresse Email à utiliser pour l\'administrateur du blog');
@define('INSTALL_SENDMAIL', 'Envoi d\'emails à l\'administrateur ?');
@define('INSTALL_SENDMAIL_DESC', 'Voulez-vous que l\'administrateur reçoive un email quand des commentaires sont postés dans les billets ?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Titre du blog');
@define('INSTALL_BLOGNAME_DESC', 'Le titre de votre blog');
@define('INSTALL_BLOGDESC', 'Description de votre blog');
@define('INSTALL_BLOGDESC_DESC', 'La description de votre blog');
@define('INSTALL_BLOG_EMAIL', 'Adresse Email du blog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Définit l\'adresse email qui est utilisée pour les messages sortants, pour permettre aux destinataires d\'y répondre. Assurez-vous que cette adresse est reconnue par le serveur mail qui sera utilisé pour l\'envoi : beaucoup de serveurs refusent l\'envoi de messages contenant des adresses inconnues.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Langue');
@define('INSTALL_LANG_DESC', 'Choisissez la langue à utiliser pour votre blog. Celle-ci sera utilisée dans le blog et l\'interface d\'administration.');
@define('INSTALL_CHARSET', 'Sélection de la table de caractères');
@define('INSTALL_CHARSET_DESC', 'Vous permet de définir la table de caractères à utiliser : UTF-8 ou Natif (ISO, EUC, ...). Quelques langues ne sont disponibles qu\'en UTF-8, dans ce cas cette option n\'aura pas d\'effet. UTF-8 est recommandé pour de nouvelles installations. Attention : ne changez pas cette option si vous avez déjà crée des billets avec des caractères spéciaux - cela pourrait entraîner un affichage corrompu de ces caractères. Vous trouverez plus d\'informations à ce sujet à l\'adresse suivamte : https://docs.s9y.org/docs/developers/internationalization.html (en anglais)');
@define('INSTALL_CAL', 'Type de calendrier');
@define('INSTALL_CAL_DESC', 'Choisissez votre format de calendrier préféré');
@define('AUTOLANG', 'Utiliser le langage par défaut du navigateur de l\'utilisateur');
@define('AUTOLANG_DESC', 'Si autorisé, cela utilisera les réglages de langage du navigateur du visiteur pour déterminer le langage par défaut de vos billets et le langage de votre interface.');
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
@define('INSTALL_CAT_DISPLAY', 'Apparence et options');
@define('INSTALL_CAT_DISPLAY_DESC', 'Personnalisation du \'look &amp; feel\' de l\'interface du blog.');
@define('INSTALL_FETCHLIMIT', 'Billets à afficher sur la page d\'accueil');
@define('INSTALL_FETCHLIMIT_DESC', 'Nombre de billets à afficher par page dans l\'interface principale du blog');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Utiliser la compression gzip des pages');
@define('INSTALL_USEGZIP_DESC', 'Pour augmenter la vitesse de transfert des pages, Serendipity peut comprimer les pages envoyées au navigateur du visiteur (si le navigateur peut interpréter cette compression). Recommandé.');
@define('INSTALL_XHTML11', 'Forcer la conformité XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Voulez-vous forcer la conformité au standard XHTML 1.1 (peut causer des problèmes au niveau de l\'administration et du blog dans les navigateurs plus anciens de la 4ème génération)');
@define('INSTALL_POPUP', 'Activer les fenêtres pop-pup');
@define('INSTALL_POPUP_DESC', 'Voulez-vous que le blog utilise des fenêtres pop-up pour les commentaires, traçages et autres ?');
@define('INSTALL_EMBED', 'Intégration dans une application externe');
@define('INSTALL_EMBED_DESC', 'Si vous voulez intégrer Serendipity dans une page normale ou dans une application externe, choisissez \'Oui\'. Serendipity n\'affichera alors que les contenus du blog, vous permettant de les intégrer facilement dans n\'importe quelle page. Vous pouvez aussi utiliser l\'option \'Script principal\' pour créer un encapsulateur (wrapper) qui vous permettra d\'ajouter vos propres contenus et visuels. Pour plus d\'informations sur l\'intégration de Serendipity, consultez le fichier README fourni dans l\'installation.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Rendre les liens sortants cliquables ?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '\'Non\' : Les liens sortants non vérifiés (Top liens sortants, Top pages référantes, Commentaires) ne sont pas affichés/affichés en tant que texte seulement si possible pour prévenir le spam par Google (recommandé). \'Oui\' : les liens non vérifiés sont affichés en tant que liens. Notez que vous pouvez remplacer cette option localement dans les plugins pour la barre latérale.');
@define('INSTALL_TRACKREF', 'Activer le dépistage des adresses référantes ?');
@define('INSTALL_TRACKREF_DESC', 'Si cette option est activée, vous pourrez voir quels sites ont des liens sur vos billets. Cette option est souvent utilisée pour faire du spam, alors vous pouvez la désactiver si vous le désirez.');
@define('INSTALL_BLOCKREF', 'Exclure des pages référantes');
@define('INSTALL_BLOCKREF_DESC', 'Vous pouvez exclure des noms de domaine spécifiques de la liste des pages référantes : séparez chaque nom de domaine avec \';\', et notez que l\'exclusion du nom de domaine se fait par la fonction <a href="http://www.php.net/substring" target="_blank">substring()</a>.');
@define('INSTALL_REWRITE', 'Réecritures URL');
@define('INSTALL_REWRITE_DESC', 'Choisissez la méthode à utiliser pour la gestion des URL de votre blog. Si vous activez les réécritures URL, l\'accès à votre blog se fera par des URL simples, plus facilement indexables par les moteurs de recherche. Pour les activer, le module mod_rewrite doit être activé dans votre serveur, ou il doit autoriser l\'utilisation de la directive "AllowOverride All" pour le dossier d\'installation de Serendipity. Par défaut Serendipity choisit automatiquement l\'option à utiliser.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Décalage de l\'heure serveur');
@define('INSTALL_OFFSET_DESC', 'Entrez le nombre d\'heures entre celle de votre serveur web (current: %clock%) et votre fuseau horaire');
@define('INSTALL_SHOWFUTURE', 'Afficher les billets futurs');
@define('INSTALL_SHOWFUTURE_DESC', 'Si cette option est activée, les billets à paraître seront affichés dans votre blog. Par défaut, ces billets ne seront affichés qu\'à la date de publication définie.');
@define('INSTALL_ACL', 'Appliquer les autorisations pour les catégories');
@define('INSTALL_ACL_DESC', 'Si vous activez cette option, les autorisations que vous définissez pour les catégories seront utilisées pour les utilisateurs authentifiés visitant votre blog. Autrement, les autorisations ne sont PAS vérifiées, mais votre blog sera un peu plus rapide. Si vous n\'avez pas besoin d\'autorisations multi-utilisateurs pour votre blog, vous devriez désactiver cette option.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Afficher les billets complets dans le fil RSS (include le corps du billet)');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Image pour le fil RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'Adresse d\'une image au format GIF/JPEG/PNG, si disponible. (aucune : logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Largeur d\'image');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'en pixels, maximum 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Hauteur d\'image');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'en pixels, maximum 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Montrer l\'adresse E-Mail ?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Champs "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Adresse E-Mail de l\'éditeur principal, si disponible. (aucun : invisible) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Champs "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Adresse E-Mail du webmaster, si disponible. (aucun : invisible) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Champs "ttl" (time-to-live = temps à vivre)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Laps de temps en minutes après lequel votre blog ne doit plus être pris du cache par des sites/programmes externes (aucun : invisible) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Champs "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Inclure le champs "pubDate" dans le fil RSS pour afficher la date du billet le plus récent ?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Options de gestion des images');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Définissez comment Serendipity doit gérer les transformations/conversions d\'images dans votre médiathèque.');
@define('INSTALL_IMAGEMAGICK', 'Utiliser Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Est-ce que imageMagick est installé sur votre serveur, et voulez-vous l\'utiliser pour le redimensionnement de vos images?');
@define('INSTALL_IMAGEMAGICKPATH', 'Chemin d\'accès au programme de conversion');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Chemin absolu et nom de votre programme de conversion de imageMagick (normalement \'convert\')');
@define('INSTALL_THUMBSUFFIX', 'Suffixe pour les miniatures');
@define('INSTALL_THUMBSUFFIX_DESC', 'Les miniatures d\'images seront enregistrées de la manière suivante : original.[suffixe].ext');
@define('INSTALL_THUMBWIDTH', 'Dimensions des miniatures');
@define('INSTALL_THUMBWIDTH_DESC', 'Largeur maximum (statique) des miniatures crées automatiquement');
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
@define('USERCONF_CAT_PERSONAL', 'Détails personnels');
@define('USERCONF_CAT_PERSONAL_DESC', 'Détails sur votre compte personnel');
@define('USERCONF_USERNAME', 'Votre nom d\'utilisateur');
@define('USERCONF_USERNAME_DESC', 'Votre nom d\'utilisateur');
@define('USERCONF_PASSWORD', 'Votre mot de passe');
@define('USERCONF_PASSWORD_DESC', 'Votre mot de passe');
@define('USERCONF_CHECK_PASSWORD', 'Ancien mot de passe');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Si vous changez le mot de passe dans le champ ci-dessus, vous devez entrer le mot de passe actuel dans ce champ.');
@define('USERCONF_USERLEVEL', 'Niveaux d\'accès');
@define('USERCONF_USERLEVEL_DESC', 'Ce niveau est utilisé pour déterminer quel type d\'accès cet utilisateur aura sur le blog');
@define('USERCONF_GROUPS', 'Appartenance de groupe');
@define('USERCONF_GROUPS_DESC', 'Cet utilisateur appartient aux groupes suivants. Des appartenances multiples sont possibles.');
@define('USERCONF_EMAIL', 'Votre E-Mail');
@define('USERCONF_EMAIL_DESC', 'Votre E-Mail');
@define('INSTALL_WYSIWYG', 'Utiliser l\'éditeur WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Voulez-vous utiliser l\'éditeur WYSIWYG pour composer vos billets ? (Fonctionne avec IE5+, et partiellement avec Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', 'Notification de commentaire ?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Voulez-vous recevoir un email lorsque quelqu\'un poste un commentaire dans votre billet ?');
@define('USERCONF_SENDTRACKBACKS', 'Notification de rétroliens ?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Voulez-vous recevoir un email lorsque quelqu\'un crée un rétrolien à l\'un de vos billets ?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Publication de billets ?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Cet utilisateur est-il autorisé à poster des billets ?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Paramètres par défaut pour les nouveaux billets');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'NOTICE : l\'attribut "niveau d\'accès" n\'est plus utilisé que pour assurer la compatibilité descendante des plugins et comme système d\'autorisation de secours. Les niveaux d\'autorisation sont maintenant gérés par l\appartenance à un ou plusieurs groupes d\'utilisateurs !');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Vous n\'avez pas entré l\'ancien mot de passe correct, et vous n\'êtes pas autorisé à définir un nouveau mot de passe. Les données n\'ont pas été sauvegardées.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration : Accès à la configuration personnelle');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel : Changement des niveaux d\'autorisation des utilisateurs');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate : Changement du droit de création de billets');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish : Changement du droit de publication de billets');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration : Accès à la configuration du système');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration : Accès à la configuration du blog');
@define('PERMISSION_ADMINENTRIES', 'adminEntries : Administration des billets');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers : Administration des billets d\'autres utilisateurs');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport : Importation de billets');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories : Administration des catégories');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers : Administration des catégories d\'autres utilisateurs');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete : Suppression de catégories');
@define('PERMISSION_ADMINUSERS', 'adminUsers : Administration des utilisateurs');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete : Suppression d\'utilisateurs');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel : Changement des niveaux d\'autorisation des utilisateurs');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame : Administration des utilisateurs du même groupe');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers : Administration des utilisateurs d\'autres groupes');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew : Ajout de nouveaux utilisateurs');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups : Administration des groupes d\'utilisateurs');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins : Administration des plugins');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers : Administration des plugins d\'autres utilisateurs');
@define('PERMISSION_ADMINIMAGES', 'adminImages : Administration des documents');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories : Administration des catégories de documents');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd : Ajout de nouveaux documents');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete : Suppression de documents');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers : Administration des documents d\'autres utilisateurs');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView : Affichage de documents');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync : Synchronisation des miniatures');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments : Administration des commentaires de billets');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates : Administration des thèmes');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers : Affichage de documents d\'autres utilisateurs');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Votre billet a été enregistré');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vue groupée');
@define('COMMENTS_VIEWMODE_LINEAR', 'Vue non groupée');
@define('DISPLAY_COMMENTS_AS', 'Afficher les commentaires en');
@define('COMMENTS_DISABLE', 'Ne pas autoriser de commentaires pour ce billet');
@define('COMMENTS_ENABLE', 'Autoriser les commentaires pour ce billet');
@define('COMMENTS_CLOSED', 'L\'auteur n\'a pas autorisé l\'ajout de commentaires pour ce billet.');
@define('VIEW_EXTENDED_ENTRY', 'Continuer à lire "%s"');
@define('TRACKBACK_SPECIFIC', 'Rétrolien spécifique pour ce billet');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Voir la totalité');
@define('VIEW_TOPICS', 'Voir les sujets');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Sujets de');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Les billets n\'ont pas pu être importés.');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Enregistrer ces informations ?');
@define('SUBMIT_COMMENT', 'Poster le commentaire');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Souscrire à ce billet');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Votre navigateur n\'a pas envoyé un HTTP-Referer (adresse référante) valide. Cela peut avoir été causé par un navigateur/proxy mal configuré ou une intervention malveillante externe. L\'action que vous vouliez exécuter a été annulée.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Le commentaire #%s semble déjà avoir été approuvé');
@define('COMMENT_EDITED', 'Le commentaire sélectionné a été modifié');
@define('COMMENTS_WILL_BE_MODERATED', 'Les commentaires postés doivent être approuvés avant d\'être affichés dans le blog.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Attention : ce commentaire doit être approuvé avant d\'être publié.');
@define('DELETE_COMMENT', 'Supprimer le commentaire');
@define('APPROVE_COMMENT', 'Approuver le commentaire');
@define('REQUIRES_REVIEW', 'Doit être revu');
@define('COMMENT_APPROVED', 'Le commentaire #%s a été approuvé');
@define('COMMENT_DELETED', 'Le commentaire #%s a été supprimé');
@define('COMMENTS_MODERATE', 'Les commentaires ou rétroliens de ce billet doivent être approuvés.');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Attention : Ce rétrolien doit être approuvé avant qu\'il ne puisse être affiché.');
@define('DELETE_TRACKBACK', 'Supprimer le rétrolien');
@define('APPROVE_TRACKBACK', 'Approuver le rétrolien');
@define('TRACKBACK_APPROVED', 'Le rétrolien #%s a été approuvé');
@define('TRACKBACK_DELETED', 'Le rétrolien #%s a été supprimé');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Racine');
@define('VIEW_COMMENT', 'Afficher le commentaire');
@define('VIEW_ENTRY', 'Afficher le billet');
@define('LINK_TO_ENTRY', 'Liens vers le billet');
@define('LINK_TO_REMOTE_ENTRY', 'Lien vers le billet externe');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Envoie le rétrolien à l\'adresse %s...');
@define('TRACKBACK_SENT', 'Rétrolien effectué');
@define('TRACKBACK_FAILED', 'Rétrolien échoué : %s');
@define('TRACKBACK_NOT_FOUND', 'Pas de rétrolien trouvé.');
@define('TRACKBACK_URI_MISMATCH', 'Le rétrolien déterminé automatiquement ne correspond pas à l\'adresse cible.');
@define('TRACKBACK_CHECKING', 'Vérifie <u>%s</u> pour des rétroliens éventuels...');
@define('TRACKBACK_NO_DATA', 'L\'adresse cible ne contenait pas de données');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Pas de rétrolien envoyé : la connexion n\'a pas pu être établie à %s sur le port %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nouveau commentaire posté à votre souscription du billet "%s"');
@define('SUBSCRIPTION_MAIL', "Bonjour %s,\n\nUn nouveau commentaire a été posté au billet que vous surveillez \"%s\", intitulé \"%s\"\nLe pseudo de l\'auteur est : %s\n\nVous pouvez trouver le billet ici : %s\n\nVous pouvez vous désinscrire en cliquant sur ce lien : %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Bonjour %s,\n\nUn nouveau rétrolien a été ajouté au billet que vous surveillez \"%s\", intitulé \"%s\"\nLe pseudo de l\'auteur est : %s\n\nVous pouvez trouver le billet ici : %s\n\nVous pouvez vous désinscrire en cliquant sur ce lien : %s\n");
@define('SIGNATURE', "\n-- \n%s est propulsé par Serendipity.\nLe blog des blogs que vous aussi pouvez utiliser !\nAllez sur <https://s9y.org>, le site officiel.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Un nouveau commentaire a été posté sur votre blog "%s", pour le billet intitulé "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Un nouveau rétrolien a été fait sur votre blog au billet intitulé "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Vous avez les possibilités suivantes :');
@define('NEW_TRACKBACK_TO', 'Nouveau rétrolien fait sur');
@define('NEW_COMMENT_TO', 'Nouveau commentaire posté sur');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Aucun billet trouvé pour la requête %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Votre recherche pour %s a donné %s résultats :');
@define('SEARCH_TOO_SHORT', 'Votre recherche doit comporter plus de 3 caractères. Pour faire des recherches avec des mots courts, vous pouvez ajouter * à la fin du mot (comme s9y*, par exemple).');
@define('SEARCH_ERROR', 'La fonction de recherche n\'a pas fonctionné comme prévu. Note à l\'administrateur de ce blog : cette erreur peut survenir si des clés d\'index manquent dans la base de données. Avec des systèmes MySQL, l\'utilisateur avec lequel Serendipity se connecte à la base de données doit avoir les privilèges nécessaires pour exécuter la commande suivante : <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre>. Voici le message d\'erreur complet de la base de données : <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Votre commentaire est vide, %sretournez en arrière%s et réessayez');
@define('COMMENT_NOT_ADDED', 'Votre commentaire n\'a pas pu être ajouté pour l\'une des raisons suivantes : les commentaires ne sont pas autorisés pour ce billet, vous avez entré des données erronnées ou votre commentaire a été coupé par le filtre anti-spam. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Commentaires de');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Syntaxe non valide pour l\'option "%s". Une valeur de type "%s" est requise.');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Affiche la liste des catégories.');
@define('CATEGORIES_PARENT_BASE', 'N\'afficher que les sous-catégories de...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Vous pouvez choisir une catégorie pour que seulement les sous-catégories de celle-ci soient affichées.');
@define('CATEGORIES_HIDE_PARALLEL', 'Cacher les catégories ne faisant pas partie de l\'arborescence');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Si vous désirez cacher les catégories qui font partie d\'une autre arborescence de catégories, vous devez activer cette option. Cette fonctionnalité est surtout intéressante si vous utilisez un multi-blog avec le plugin "Propriétés/Thèmes de catégories".');
@define('CATEGORIES_HIDE_PARENT', 'Cacher la catégorie supérieure sélectionnée ?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Si vous limitez la liste des catégories à une catégorie spécifique, vous verrez que par défaut elle est incluse dans la liste des catégories. Si vous désactivez cette option, cette catégorie ne sera plus affichée.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Activer les templates Smarty ?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Si cette option est activée, le plugin utilisera les fonctionnalités de Smarty pour afficher la liste des catégories. Cela permet de changer l\'affichage de la liste en modifiant le fichier "plugin_categories.tpl". N\'utilisez cette option que si vous avez besoin d\'adapter l\'affichage des catégories comme cette fonctionnalité a un impact sur les performances de votre blog.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Afficher le nombre de billets par catégorie ?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Permettre aux visiteurs d\'afficher plusieurs catégories à la fois ?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Si cette option est autorisée, une case à cocher sera positionnée à côté de chaque catégorie dans le plugin de la barre latérale. Les utilisateurs pourront ainsi cocher ces cases pour visualiser les billets correspondants.');
@define('CATEGORIES_TO_FETCH', 'Catégories à afficher');
@define('CATEGORIES_TO_FETCH_DESC', 'Afficher les catégories par auteur(s) spécifique(s)');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Affiche une liste d\'auteurs');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Afficher le nombre d\'articles par auteur ?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Si cette option est activée, le nombre de billets crées par cet auteur seront affichés à côté de son nom, entre parenthèses.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Syndication');
@define('SHOWS_RSS_BLAHBLAH', 'Montrer les liens de syndication RSS');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Commentaires RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'Identifiant FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'L\'identifiant du fil que vous voulez publier');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'Image FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nom de l\'image à afficher (laisser le champ vide pour afficher un compteur), située sur feedburner.com. Exemple : "fbapix.gif"');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Titre FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Titre à afficher à côté de l\'image (ou laisser vide pour aucun)');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'Info-bulle de l\'image FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Contenu de l\info-bulle qui s\'affiche quand on passe sur l\'image FeedBurner (laisser vide pour aucune)');
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
@define('ARCHIVE_COUNT', 'Nombre d\'éléments dans la liste');
@define('ARCHIVE_COUNT_DESC', 'Le nombre total de mois, semaines ou jours à afficher');
@define('ARCHIVE_FREQUENCY', 'Fréquence d\archivage des éléments dans le calendrier');
@define('ARCHIVE_FREQUENCY_DESC', 'Intervalle dans le calendrier entre chaque élément de la liste');
@define('BROWSE_ARCHIVES', 'Afficher les archives par mois');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Afficher \'Serendipity\' en tant que texte');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Affiche le slogan \'Serendipity Weblog\' en tant que texte');
@define('POWERED_BY_SHOW_IMAGE', 'Afficher \'Serendipity\' avec un logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Affiche le logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Publicité sur l\'origine de votre blog');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Utiliser un accès sécurisé pour l\'authentification');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Fait que le lien de l\'interface d\'administration montre vers un lien sécurisé (https). Attentioni : votre serveur doit être configuré pour accepter ce genre de liens.');
@define('SUPERUSER', 'Administration du blog');
@define('SUPERUSER_OPEN_ADMIN', 'Aller à l\'administration');
@define('SUPERUSER_OPEN_LOGIN', 'Aller à l\'écran d\'authentification');
@define('ALLOWS_YOU_BLAHBLAH', 'Ajoute un lien à l\'administration de votre blog dans la barre latérale.');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Calendrier');
@define('CALENDAR_BOW_DESC', 'Le jour qui doit être considéré comme début de la semaine. Lundi par défaut.');
@define('QUICKJUMP_CALENDAR', 'Saut rapide vers le Calendrier');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Début de la semaine');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Activer l\'interface de programmation');
@define('CALENDAR_EXTEVENT_DESC', 'Si activée, cette option permet aux plugins d\'accéder au calendrier pour y afficher leurs propres évènements. Ne l\'activez que si vous avez des plugins utilisant cette fonctionnalité, autrement cela ne ferait que diminuer la performance de votre blog.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Recherche d\'un billet');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Permet d\'afficher des contenus personnalisés au format HTML dans la barre latérale');
@define('THE_NUGGET', 'Contenu du bloc HTML');
@define('BACKEND_TITLE', 'Informations complémentaires dans le plugin de l\'écran de configuration');
@define('BACKEND_TITLE_FOR_NUGGET', 'Ici vous pouvez définir une chaine personnalisée qui sera affichée dans le plugin de l\'écran de configuration avec la description HTML du plugin Nugget. Si vous avez plusieurs nuggets HTML sans titre cela vous permettra de les distinguer les uns des autres.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Afficher le top pages sortantes / référantes en tant que liens ?');
@define('INSTALL_TOP_AS_LINKS_DESC', '\'Non\' : affichage en tant que texte seulement pour prévenir le spam par Google. \'Oui\' : affichage en tant que liens. Par défaut, l\'option de la configuration générale est utilisée.');
@define('HAVE_TO_BE_LOGGED_ON', 'Vous devez être authentifié pour accéder à cette page');
@define('WELCOME_TO_ADMIN', 'Bienvenue dans l\'interface d\'administration de Serendipity');
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
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity n\'est pas encore installé. Vous pouvez <a href="%s">l\'installer maintenant</a>.');
@define('COMMENT_ADDED_CLICK', 'Cliquez %sici pour retourner%s aux commentaires, et %sici pour fermer%s cette fenêtre.');
@define('COMMENT_NOT_ADDED_CLICK', 'Cliquez %sici pour retourner%s aux commentaires, et %sici pour fermer%s cette fenêtre.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'L\'adresse cible dépasse la taille de %s octets.');
@define('CLICK_FILE_TO_INSERT', 'Cliquez sur le fichier que vous voulez insérer :');
@define('SELECT_FILE', 'Choisissez un fichier à insérer');
@define('MANAGE_IMAGES', 'Configurer les images');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Ou');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Interface utilisateur : Services externes');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Interface utilisateur : Fonctionnalités');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Interface utilisateur : Conversions totales');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Interface utilisateur : Vues');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Interface utilisateur : Autour des billets');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Administration : Éditeur');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Administration : Gestion des utilisateurs');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Administration : Métadonnées');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Administration : Thèmes');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Administration : Fonctionnalités');
@define('PLUGIN_GROUP_IMAGES', 'Images');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Balises');
@define('PLUGIN_GROUP_STATISTICS', 'Statistiques');
@define('IMPORT_WELCOME', 'Bienvenue dans l\'assistant d\'importation de Serendipity');
@define('USER_SELF_INFO', 'Identifié en tant que %s (%s)');
@define('IMPORT_WHAT_CAN', 'Ici vous pouvez importer des billets d\'autres logiciels de Blog');
@define('IMPORT_SELECT', 'Sélectionnez le logiciel dont vous voulez importer les billets');
@define('MANAGE_STYLES', 'Configurer les Styles');
@define('SELECT_A_PLUGIN_TO_ADD', 'Sélectionnez le plugin que vous voulez installer');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Ci-dessous : une liste des plugins installés');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Annuler maintenant');
@define('DELETE_SELECTED_COMMENTS', 'Supprimer les commentaires sélectionnés');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Trouver des images');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Erreur : Ce fichier n\'existe pas.');
@define('ERROR_SOMETHING', 'Erreur : quelque chose ne va pas.');
@define('DIRECT_LINK', 'Lien direct à ce billet');
@define('SELECT_TEMPLATE', 'Sélectionnez le thème que vous voulez utiliser pour votre blog');
@define('DATABASE_ERROR', 'Erreur Serendipity : impossible d\'ouvrir une connexion avec la base de données.');
@define('LIMIT_TO_NUMBER', 'Limiter le nombre de billets à ?');
@define('DIRECTORIES_AVAILABLE', 'Dans la liste des sous-dossiers disponibles, vous pouvez cliquer sur un nom de dossier pour en créer un nouveau à cet endroit.');
@define('CATEGORY_INDEX', 'Voici une liste des catégories disponibles pour vos billets');
@define('PAGE_BROWSE_PLUGINS', 'Page %s de %s, avec un total de %s plugins.');
@define('CHARSET_NATIVE', 'Natif');
@define('XMLRPC_NO_LONGER_BUNDLED', 'L\'interface de programmation XML-RPC de Serendipity n\'est plus incluse automatiquement à cause de failles de sécurité dans celle-ci et parce que très peu de personnes l\'utilisent. Pour l\'activer, vous devez installer le plugin XML-RPC. L\'adresse que vous utilisez dans vos applications NE CHANGERA PAS - dès que vous aurez installé le plugin, vous pourrez à nouveau accéder à l\'interface.');
@define('AUTHORS_ALLOW_SELECT', 'Autoriser les visiteurs à afficher plusieurs auteurs à la fois ?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Si cette option est activée, une boîte de sélection sera affichée à côté de chaque nom d\'utilisateur dans ce plugin de barre latérale. Les visiteurs peuvent alors faire une sélection d\'auteurs dont ils veulent afficher les billets.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
