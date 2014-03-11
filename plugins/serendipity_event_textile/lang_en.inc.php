<?php #

/**
 *  @version 
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_TEXTILE_NAME', 'Markup: Textile');
@define('PLUGIN_EVENT_TEXTILE_DESC', 'Parse all output through the Textile converter');
@define('PLUGIN_EVENT_TEXTILE_TRANSFORM', '<a href="%s">Textile</a>-formatting allowed');
@define('PLUGIN_EVENT_TEXTILE_VERSION', 'Textile version');
@define('PLUGIN_EVENT_TEXTILE_VERSION_DESCRIPTION', 'Which version of Textile do you want to use?');
@define('PLUGIN_EVENT_TEXTILE_UNESCAPE', 'Convert HTML quotes to real quotes?');
@define('PLUGIN_EVENT_TEXTILE_UNESCAPE_DESC', 'If enabled, HTML-Quote-Entities (&quot;) will be converted to real quotes. Only useful to enable, if you want to use Textile markup in your comments.');

@define('PLUGIN_EVENT_TEXTILE_EXAMPLE_NOTE', 'Please note: You will get best conversion results, when you place this plugin as the first of all your markup plugins, but <u>underneath</u> Smilies "serendipity_event_emoticate" and Smarty Parsing "serendipity_event_smartymarkup" in pluginlist! Particularly the latter, optional installed plugin, may produce errors if not.');
@define('PLUGIN_EVENT_TEXTILE_DOCTYPE', 'Textile: Convert to HTML5 (lib3 only - needs a HTML5 theme like 2k11)');
@define('PLUGIN_EVENT_TEXTILE_DOCTYPE_DESC', 'Currently, PHP-Textile can target either XHTML or HTML5 output with XHTML being the default for backward compatibility. In HTML5 mode, apart from single tag closing, you\'ll get abbr instead of acronym and if you use alignment markers on your images you\'ll have extra classes placed on them instead of XHTML\'s align attribute.');
// todo: future 
#@define('PLUGIN_EVENT_TEXTILE_RESTRICTCOMMENTS', 'Textile: Restrict user comments (lib3 only)');
#@define('PLUGIN_EVENT_TEXTILE_RESTRICTCOMMENTS_DESC', 'This method does not allow enhanced formatting options such as inline style, and removes any raw HTML to user-supplied input.');

