<?php

/**
 *  @version 1.0
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/06/03
 */

@define('PLUGIN_EVENT_TEXTILE_NAME', 'Textformatierung: Textile');
@define('PLUGIN_EVENT_TEXTILE_DESC', 'Textile-Formatierung durchf�hren');
@define('PLUGIN_EVENT_TEXTILE_TRANSFORM', '<a href="%s">Textile</a>-Formatierung erlaubt');
@define('PLUGIN_EVENT_TEXTILE_VERSION', 'Textile-Version');
@define('PLUGIN_EVENT_TEXTILE_VERSION_DESCRIPTION', 'Welche Version von Textile soll verwendet werden?');

// Next lines were translated on 2009/06/03
@define('PLUGIN_EVENT_TEXTILE_UNESCAPE', 'HTML Anf�hrungszeichen in richtige Anf�hrungszeichen umwandeln?');
@define('PLUGIN_EVENT_TEXTILE_UNESCAPE_DESC', 'Wenn aktiviert werden HTML-Quote-Entities (&quot;) in richtige Anf�hrungszeichen umgewandelt. Wird nur ben�tigt, wenn Textile Auszeichnung in Kommentaren verwendet werden soll, damit Links dargestellt werden k�nnen.');

// Next lines were translated on 2014/01/06
@define('PLUGIN_EVENT_TEXTILE_EXAMPLE_NOTE', 'Achtung: Die besten Resulte werden erzielt, wenn dieses Plugin an der Spitze aller Markup Plugins, aber <u>nach</u> Smilies "serendipity_event_emoticate" und Smarty Parsing "serendipity_event_smartymarkup" in der Pluginliste steht! Insbesondere Letzteres kann ansonsten zu potentielle Fehlermeldungen f�hren.');
@define('PLUGIN_EVENT_TEXTILE_DOCTYPE', 'Textile: Konvertiere nach HTML5');
@define('PLUGIN_EVENT_TEXTILE_DOCTYPE_DESC', 'Momentan kann PHP-Textile entweder XHTML (default) oder HTML5 Quellcode produzieren. Im HTML5 Modus werden, au�er den single-tag Endungen, nur kleinere �nderungen, wie acronym zu abbr und align Attribute in Images zu Klassen vorgenommen.');
// todo: future 
#@define('PLUGIN_EVENT_TEXTILE_RESTRICTCOMMENTS', 'Textile: Restrict user comments (lib3 only)');
#@define('PLUGIN_EVENT_TEXTILE_RESTRICTCOMMENTS_DESC', 'This method does not allow enhanced formatting options such as inline style, and removes any raw HTML to user-supplied input.');

