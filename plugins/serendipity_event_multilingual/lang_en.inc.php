<?php

/**
 *  @version 
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

//
//  serendipity_event_multilingual.php
//
@define('PLUGIN_EVENT_MULTILINGUAL_TITLE', 'Multilingual entries');
@define('PLUGIN_EVENT_MULTILINGUAL_DESC', 'Allows to create multiple language versions of an entry');
@define('PLUGIN_EVENT_MULTILINGUAL_NEEDTOSAVE', 'Your entry needs to be saved, before you can enter additional language versions. You can also save the entry as draft.');
@define('PLUGIN_EVENT_MULTILINGUAL_CURRENT', 'Choose language version to edit: ');
@define('PLUGIN_EVENT_MULTILINGUAL_SWITCH', 'Select language');
@define('PLUGIN_EVENT_MULTILINGUAL_COPY', 'Retain previous language contents');
@define('PLUGIN_EVENT_MULTILINGUAL_COPYDESC', 'Keep contents from previous language intact in the input box when working with new language version');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGTITLE', 'Translation of the blog title');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGTITLE_DESC', 'Either enables {{!<lang>}}<text>{{--}} tags for blog title or uses the non-tag mode translated entry_title(s).');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES', 'Tag translation of entries and entry titles');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES_DESC', 'Enable {{!<lang>}}<text>{{--}} tags for entries');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR', 'Tag translation of sidebar items');
@define('PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR_DESC', 'Enable {{!<lang>}}<text>{{--}} tags for sidebar items');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE', 'Where to place entry links?');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDFOOTER', 'Footer of an entry');
@define('PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDSPECIAL', '"multilingual_footer" for custom Smarty output');

@define('PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH', 'Force full language switch?');
@define('PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH_DESC', 'Choosing a translation for a blog entry will also switch the whole language of the blog?');

@define('PLUGIN_EVENT_MULTILINGUAL_ENTRY_RELOADED', 'Multilingual entry language &lt;%s&gt; reloaded');

//
//  serendipity_plugin_multilingual.php
//
@define('PLUGIN_SIDEBAR_MULTILINGUAL_TITLE', 'Choose Language');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_DESC', 'Allows visitors to change the frontend interface language');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_USERDESC', 'You can select a different language for the displayed interface of this blog: ');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT', 'Submit button?');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SUBMIT_DESC', 'Show a submit button?');
@define('PLUGIN_SIDEBAR_MULTILINGUAL_SIZE', 'Font size');

