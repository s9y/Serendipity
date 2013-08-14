<?php #

/**
 *  @version  
 *  @file 
 *  @author Sebastian Mordziol <argh@php-tools.net> http://sebastian.mordziol.de
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Vous permet de télécharger des plugins directement de notre dépôt officiel.');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Cliquez ici pour télécharger un nouveau %s du dépôt officiel de Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'Impossible d\'accéder à l\'adresse %s. Peut-être que le serveur de Serendipity ou de SourceForge.net n\'est momentanément pas accessible. Merci de réessayer plus tard.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Essaie d\'accéder à l\'adresse %s...');

@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', '%s octets lus à partir de l\'adresse ci-dessus. Enregistrement du fichier sous %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', '%s octets lus à partir du fichier déjà présent sur votre serveur. Enregsitrement du fichier sous %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Données lues avec succès.');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Emplacement du fichier/miroir (Données XML)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Emplacement du fichier/miroir (Fichiers)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Sélectionnez un emplacement de téléchargement. Attention: ne changez PAS cette valeur si vous ne savez pas exactement ce que vous faites et si des serveurs sont périmés. Cette option n\'existe que pour la compatibilité avec les versions futures de Serendipity.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Propriétaire des fichiers téléchargés');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Ici vous pouvez entrer le nom de l\'utilisateur (FTP/Shell) propriétaire des fichiers, comme par ex. "nobody". Si vous laissez ce champs vide, aucun changement ne sera fait.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Permissions des fichiers téléchargés');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Ici vous pouvez entrer le mode octal (comme "0777" par ex.) pour les fichiers téléchargés. Si vous laissez ce champs vide, les permissions par défaut de votre serveur seront utilisés. Notez que tous les serveurs ne permettent pas de changer les permissions de fichier. Faites attention aussi que les permissions que vous définissez permettent encore à Serendipity d\'accéder aux fichiers.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Permissions des répertoires téléchargés');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Ici vous pouvez entrer le mode octal (comme "0777" par ex.) pour les répertoires téléchargés. Si vous laissez ce champs vide, les permissions par défaut de votre serveur seront utilisés. Notez que tous les serveurs ne permettent pas de changer les permissions de répertoire. Faites attention aussi que les permissions que vous définissez permettent encore à Serendipity d\'accéder aux répertoires.');

