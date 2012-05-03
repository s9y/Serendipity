<?php # $Id: lang_en.inc.php 2492 2011-03-22 17:52:00Z ian $

/**
 *  @version $Revision: 2491 $
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_NL2BR_NAME', 'Markup: NL2BR');
@define('PLUGIN_EVENT_NL2BR_DESC', 'Convert newlines to BR tags');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP', 'Check other markup plugins?');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP_DESC', 'Automaticly check existing markup plugins to disable the use of NL2BR plugin. This is true, when WYSIWYG or specific markup plugins are detected.');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS', 'A list of HTML-tags where no breaks shall be converted, if using P-Tags');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', 'Suggestion: "code,pre,geshi,textarea". Seperate multiple tags with a comma. Hint: The entered tags are evaluated as regular expressions.');
@define('PLUGIN_EVENT_NL2BR_PTAGS', 'Use P-Tags');
@define('PLUGIN_EVENT_NL2BR_PTAGS_DESC', 'Insert p-tags instead of br.');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG', 'ISOBR isolations-default BR setting');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG_DESC', 'With this newly added NON-HTML-Tag <nl> </nl>, as a NL2BR Isolations-Default setting, you can use the NL2BR function now by shutting down the parsing inside this tag. You can use it multiple times inside your entry, but not nested! Example: <nl>do not parse newline to br inside</nl>');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS', 'Use BR-Clean-Tags as fallback, when ISOBR false');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS_DESC', 'If using <HTML-Tags> in you entries, which can\'t be solved satisfiable with the ISOBR Config-Option, remove nl2br after <tag>. This applies to all <tags> ending with > or >\n! Default (table|thead|tbody|tfoot|th|tr|td|caption|colgroup|col|ol|ul|li|dl|dt|dd)');
@define('PLUGIN_EVENT_NL2BR_CONFIG_ERROR', 'Config missmatch alert! The Option: "%s" is set back to false, while  \'%s\' is active! Just use one of them, please.');
?>
