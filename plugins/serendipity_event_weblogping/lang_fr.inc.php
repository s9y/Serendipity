<?php #

/**
 *  @version  
 *  @file 
 *  @author Sebastian Mordziol <argh@php-tools.net> http://sebastian.mordziol.de
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_WEBLOGPING_PING', 'Annoncer les billets à: (par ping XML)');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Envoie le ping XML-RPC à l\'hôte %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Annconcer les billets');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Envoyer une mise à jour pour les nouveaux billets aux services d\'indexation');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(remplace %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Services ping additionnels');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'Vous permet d\'ajouter des services additionnels; entrez les adresses cibles ici, séparez plusieurs adresses par des virgules (,). Les adresses doivent être au format "hôte.domaine/chemin". Si un "*" est ajouté au début de l\'hôte, les options XML-RPC étendues seront envoyées à l\hôte cible (seulement si celui-ci les gère).');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Le ping a échoué. (Raison: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', 'Ping réussi.');

