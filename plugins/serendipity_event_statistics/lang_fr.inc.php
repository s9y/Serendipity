<?php #

/**
 *  @version  
 *  @file 
 *  @author Sebastian Mordziol <argh@php-tools.net> http://sebastian.mordziol.de
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statistiques');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Ajoute un lien vers des statistiques intétressantes dans votre panneau d\'administration des billets');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statistiques');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'Premier billet');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Dernier billet');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Nombre total de billets');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'billets');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... publics');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... brouillons');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Catégories');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'catégories');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Distribution des billets');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'billets');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Images uploadées');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'image(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Distribution des types d\'image');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'fichier(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Commentaires reçus');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'commentaire(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Billets les plus commentés');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Personnes écrivant le plus de commentaires');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'lien');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Personnes souscrites');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'personnes souscrite(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Billets les plus souscrits');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'personnes souscrite(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Rétroliens reçus');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'rétrolien(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Billets avec le plus de rétroliens');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'rétrolien(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Personnes ayant fait le plus de rétroliens');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'commentaires par billet (estimation)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'rétroliens par billet (estimation)');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'billets par jour (estimation)');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'billets pas semaine (estimation)');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'billets par mois (estimation)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'commentaires/billet');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'rétroliens/billet');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'billets/jour');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'billets/semaine');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'billets/mois');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Nombre total de caractères');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'caractères');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Caractères par billet');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'caractères/billet');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', 'Les %s billets les plus longs');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Nombre maximum d\'éléments');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'Combien d\'éléments à afficher par valeur statistique? Valeur par défaut: 20');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Statistiques détaillées');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', 'Activer les statistiques détaillées? (par défaut: non)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'Non');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'Oui, en pied de page');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'Oui, en haut de page');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Nombre de visiteurs');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Nombre de visiteurs aujourd\'hui');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Nombre total de visiteurs');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'Les statistiques détaillées sont activées depui');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Derniers visiteurs');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Top des pages référantes');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'Aucune page référante n\'a encore été enregistrée.');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Statistques détaillées des visiteurs');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Exclure des navigateurs des statistiques');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Cette option vous permet de définir des noms de navigateurs à exclure des statistiques. Séparez plusieurs noms par "|".');
@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Afficher la date du dernier billet');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Afficher le nombre de billets');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Afficher le nombre de commentaires');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Afficher le nombre de visiteurs de ce mois');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Expiration du cache');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'Permet de définir la durée d\'expiration du cache des données statistiques. En augmentant la durée, vous améliorerez la performance de votre blog, mais si vouls la réglez trop haute les statistiques ne reflèteront pas les données réelles.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Formatage du texte');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Utilisez %s comme balise pour le texte/chiffre');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Dernier billet: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s billets rédigés');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s commentaires ont été ajoutés');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s visiteur(s) ce mois-ci');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Afficher le nombre de visiteurs en ce moment (détectés sur les dernières 15 minutes)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s visiteur(s) en ligne');

