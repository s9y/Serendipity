<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', 'from');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', 'to');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', 'Content Rewriter');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', 'Replaces words with a new selected string (useful for acronyms)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', 'New Title');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', 'Enter the acronym-title for a new item here ({from})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', 'Title #%d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', 'Enter the acronym here ({from})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', 'Plugin-Title');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', 'The name of this plugin');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', 'New Description');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', 'Enter the description for a new item here ({to})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', 'Description #%s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', 'Enter the description here ({to})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Rewrite string');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', 'The string used to rewrite. Place {from} and {to} anywhere you like to get a rewrite.' . "\n" . 'Example: <acronym title="{to}">{from}</acronym>');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', 'Rewrite char');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', 'If there is any char you append to force rewriting, enter it here. If you want to only replace \'serendipity*\' with what you entered for that word but want the \'*\' removed, enter that char here.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'The strings to perform replacements in your environment are %s and %s.');
?>
