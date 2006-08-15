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

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', 'Correction des erreurs courantes XHTML');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'Permet de corriger automatiquement une bonne partie des erreurs courantes en XHTML.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', 'Encoder les données XML?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'Ce plugin utilise une méthode d\'analyse basée sur le XML pour valider le XHTML de votre blog. Il se peut que cette analyse peut convertisse des caractères déjà valides une seconde fois. Désactivez cette option si c\'est le cas dans votre blog.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', 'Nettoyer les entités UTF-8?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'Si cette option est activée, les entités HTML dérivées des caractères UTF-8 seront correctement converties.');

/* vim: set sts=4 ts=4 expandtab : */
?>