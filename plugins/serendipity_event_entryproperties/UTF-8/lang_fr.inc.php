<?php # $Id$

##########################################################################
# serendipity - another blogger...                                       #
##########################################################################
#                                                                        #
# (c) 2003 Jannis Hermanns <J@hacked.it>                                 #
# http://www.jannis.to/programming/serendipity.html                      #
#                                                                        #
# Translated by                                                          #
# Sebastian Mordziol <argh@php-tools.net>                                #
# http://sebastian.mordziol.de                                           #
#                                                                        #
##########################################################################

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Propriétés étendues pour les billets');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(cache, billets non publics, billets collants)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Render ce billet collant');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Billets peuvent être lus par');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Moi-même');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBER', 'Co-auteurs');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Tout le monde');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Activer le cache des billets?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Si activé, une version cachée sera crée à chaque enregistrement du billet. Le cache augmente la performance, mais peut aussi diminuer la flexibilité pour les autres plugins actifs.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Créer le cache pour les billets');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Chargement du prochain jeu de billets...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Chargement des billets %d à %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Création du cache pour le billet #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Billet caché.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Création du cache terminé.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Création du cache ANNULÉ.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (%d billets au total)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NL2BR', 'Désactiver nl2br');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Ne pas afficher sur la page principale');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Utiliser les restrictions par groupes');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Si cette option est activée, vous pouvez définir quels utilisateurs d\'un groupe sont autorisés à lire des billets. Attention: si activée cette option a un grand impact sur la performance sur les listes de billets, ne l\'activez donc que si vous l\'utilisez vraiment.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Utiliser les restrictions par utilisateur');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Si activée, cette option permet de définir quels utilisateurs spécifiques sont autorisés à lire des billets. Attention: si activée cette option a un grand impact sur la performance sur les listes de billets, ne l\'activez donc que si vous l\'utilisez vraiment.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Exclure du fil RSS');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Si vous activez cette option, le contenu de ce billet ne sera pas inclu dans le fil RSS de votre blog.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Variables sur mesure');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Des variables supplémentaires peuvent être utilisés dans les templates de votre thème pour qu\'ils soient affichés quand vous le désirez. Pour cela, modifiez le fichier template \'entries.tpl\' et placez des balises Smarty comme par ex. {$entry.properties.ep_MonChampsSurMesure} où vous voulez dans le code HTML. Notez que chaque variable doit commencer par \'ep_\'. ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Ici vous pouvez définir une liste séprée par des virgules de noms de champs (variables) à remplir pour chaque billet. Attention, le nom de ces variables ne doit pas contenir de caractères spéciaux ni d\'espaces. Exemples: "Variable1, Variable2, ChouetteVariable". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'La liste des variables sur mesure peut être modifiée dans la <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">configuration du plugin</a>.');

/* vim: set sts=4 ts=4 expandtab : */
?>