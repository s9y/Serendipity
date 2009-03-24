<?php
// Colorsets
@define('THEME_COLORSET', 'Choix de couleur');
@define('USER_STYLESHEET','Utilise un css additionnel. L\'utilisateur doit creer une feuille de style dans le dossier template.Ce fichier a le nom user.css, il peut etre utilise pour ecraser les styles selectionnes.');
// Layout
@define('LAYOUT_TYPE','Organisation du site (T = texte, B = barre de navigation, CF = Contenu en premier)');
@define('LAYOUT_SBS','Trois colonnes T-B-B');
@define('LAYOUT_BSS','Trois colonnes, T-B-B, CF');
@define('LAYOUT_SSB','Trois colonnes, B-B-T');
@define('LAYOUT_SB','Deux colonnes, B-T');
@define('LAYOUT_BS','Deux colonnes, T-B, CF');
@define('LAYOUT_SC','Une colonne, barre de navigation dessous, CF');
@define('LAYOUT_SBF','Deux colonnes, barre de navigation a gauche + en-dessous');
@define('LAYOUT_BSF','Deux colonnes, barre de navigation a droite + en-dessous, CF');
@define('JAVASCRIPT_COLUMNS','generer en javascript la hauteur egale pour toutes les colonnes. (Peut ralentir un peu la page)');
// Custom header
@define('BP_CUSTOM_HEADER','Personnaliser l\'image de la banniere a partir de la mediatheque.');
@define('BP_HEADER_IMAGE','Choisir une image');
@define('BP_HEADER_TYPE','Affichage de la banniere');
@define('BP_HEADER_BANNER', 'Banniere (pas de repetition)');
@define('BP_HEADER_HTILED', 'Repetition horizontale');
@define('BP_HEADER_VTILED', 'Repetition verticale');
@define('BP_HEADER_BTILED', 'Repetition horizontale et verticale.');
@define('BP_HEADER_POSHOR', 'Alignement horizontal');
@define('BP_HEADER_POSVER', 'Alignement vertical');
@define('BP_CENTER', 'Au milieu');
@define('BP_TOP', 'En haut');
@define('BP_BOTTOM', 'En bas');
// Fahrner Image Replacement
@define('FIR_BTITLE','Afficher le titre du blog dans la banniere');
@define('FIR_BDESCR','Afficher la description du blog dans la banniere');
// Date format
@define('BP_DATE_FORMAT', 'Format de la date');
// Entry footer
@define('ENTRY_FOOTER_POS','Position du pied de page des messages');
@define('BELOW_ENTRY','Sous le message');
@define('BELOW_TITLE','Sous le titre du message');
@define('SPLIT_FOOTER','Diviser le pied de page du message ');
@define('FOOTER_AUTHOR','Afficher l\'auteur dans le pied de page ');
@define('FOOTER_CATEGORIES','Afficher la categorie dans le pied de page');
@define('FOOTER_TIMESTAMP','Afficher l\'heure dans le pied de page');
@define('FOOTER_COMMENTS','Afficher le nb de commentaires dans le message');
@define('FOOTER_TRACKBACKS','Afficher le nombre de retroliens dans le message');
@define('ALT_COMMTRACK','UAffichage du nb de commentaires et retroliens (i.e. "Pas de commentaires" ou "1 commentaire" a la place de "Commentaire(0)" ou "Commentaires(1)")');
@define('SHOW_ADDTHIS_WIDGET','Afficher AddThis (http://www.addthis.com) widget d\'ajout de favoris dans le pied de page du message');
@define('ADDTHIS_ACCOUNT','AddThis.com account number.  Pas obligatoire mais peut fournir les statistiques des lecteurs qui ajoutent votre contenu dans leurs favoris.');
@define('SHOW_STICKY_ENTRY_FOOTER','Afficher le pied de page des les message collants (necessite plugin "Extended properties for entries")');
@define('SHOW_STICKY_ENTRY_HEADING','Afficher l\'entete des les message collants (necessite plugin "Extended properties for entries")');
// Page footer next page  and previous page links
@define('PREV_NEXT_STYLE','Type d\'affichage du lien des pages suivantes et precedentes comme :');
@define('PREV_NEXT_TEXT','Texte seul');
@define('PREV_NEXT_TEXT_ICON','Texte et icone');
@define('PREV_NEXT_ICON','Icone seulement');
// coComment support
@define('COCOMMENT_ACTIVE','Integrer coComment (http://www.cocomment.com) dans le formulaire de commentaire');
// Counter code
@define('COUNTER_CODE', 'Inserer le code pour un compteur ou des statistiques en ligne');
@define('USE_COUNTER', 'Voulez vous inserer le compteur ? ');
// Additional footer text
@define('FOOTER_TEXT', 'Utiliser le champ ci-dessous pour ajouter un texte additionnel dans le pied de page.');
@define('USE_FOOTER_TEXT', 'Voulez-vous integrer le texte additionnel ?');
//Sitenav
@define('SITENAV_POSITION','Psition du menu ( ou barre de navigation)');
@define('SITENAV_NONE','Pas de menu');
@define('SITENAV_ABOVE','Au-dessus de la banniere');
@define('SITENAV_BELOW','En-dessous de la banniere');
@define('SITENAV_LEFT','Au dessus de la barre de gauche');
@define('SITENAV_RIGHT','Au dessus de la barre de droite');
@define('SITENAV_FOOTER','Afficher aussi les liens de menu dans le pied ed page du site.(non disponible si le choix ("pas de menu") est selectionne)');
@define('SITENAV_QUICKSEARCH','Afficher la barre de recherche dans la barre de navigation. (Utilisable seulement si la barre de navigation est au-dessous ou au-dessus de la banniere . )');
@define('SITENAV_TITLE','Titre du menu (seulement disponible si le menu apparait au dessous d\'une colonne.)');
@define('SITENAV_TITLE_TEXT','Menu Principal');
@define('NAVLINK_AMOUNT', 'Entrer le nombre de link que doit contenir la barre de menu. (il est necessaire de recharger la page pour que la modification soit prise en compte.)');
@define('NAV_LINK_TEXT', 'Entrer le texte du lien');
@define('NAV_LINK_URL', 'Entrer l\'url complete du lien');
