<?php # $Id: lang_en.inc.php 2491 2009-03-24 10:41:50Z garvinhicking $

/**
 *  @version $Revision: 2491 $
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_NL2BR_NAME',     'Markup: NL2BR');
@define('PLUGIN_EVENT_NL2BR_DESC',     'Convert newlines to BR tags');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS', 'A list of HTML-tags where no breaks shall be converted');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', 'Suggestion: "code,pre,geshi,textarea". Seperate multiple tags with a comma. Hint: The entered tags are evaluated as regular expressions.');
@define('PLUGIN_EVENT_NL2BR_PTAGS', 'Use P-Tags');
@define('PLUGIN_EVENT_NL2BR_PTAGS_DESC', 'Insert p-tags instead of br.');
?>
