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

@define('PLUGIN_EVENT_MAILER_NAME', 'Envoyer les billets par E-Mail');
@define('PLUGIN_EVENT_MAILER_DESC', 'Envoie un billet par Email à un destinataire de votre choix lorsqu\'il est publié');
@define('PLUGIN_EVENT_MAILER_RECIPIENT', 'Destinataire');
@define('PLUGIN_EVENT_MAILER_RECIPIENTDESC', 'L\'adresse Email à laquelle le billet dot être envoyé (suggestion: une mailing list)');
@define('PLUGIN_EVENT_MAILER_LINK', 'Envoyer un lien au billet?');
@define('PLUGIN_EVENT_MAILER_LINKDESC', 'Inclut un lien au billet original dans l\'email.');
@define('PLUGIN_EVENT_MAILER_STRIPTAGS', 'Enlever le HTML?');
@define('PLUGIN_EVENT_MAILER_STRIPTAGSDESC', 'Enlève toutes les balises HTML contenues dans le billet.');
@define('PLUGIN_EVENT_MAILER_CONVERTP', 'Convertir les paragraphes HTML en retours à la ligne?');
@define('PLUGIN_EVENT_MAILER_CONVERTPDESC', 'Ajoute un retour à la ligne aprÈs chaque paragraphe HTML. Cette option est très utile pour préverver les paragraphes dans le texte si vous avez activé l\'option d\'enlever les balises HTML.');
@define('PLUGIN_EVENT_MAILER_RECIPIENTS', 'Destinataire(s) email (séparez plusieurs destinataires avec des espaces)');
@define('PLUGIN_EVENT_MAILER_NOTSENDDECISION', 'Ce billet n\'a pas été envoyé par email parce-que vous avec décidé de ne pas l\'envoyer.');
@define('PLUGIN_EVENT_MAILER_SENDING', 'Envoi...');
@define('PLUGIN_EVENT_MAILER_ISTOSENDIT', 'Envoyer ce billet par email');

/* vim: set sts=4 ts=4 expandtab : */
?>