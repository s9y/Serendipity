<?php # 

/**
 *  @version 
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Extended properties for entries');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(cache, non-public articles, sticky posts)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Mark this entry as a Sticky Post');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Entries can be read by');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Myself');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Co-authors');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Everyone');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Allow to cache entries?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'If enabled, a cached version will be generated on every saving. Caching will increase performance, but maybe decrease flexibility for other plugins.');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Build cached entries');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Fetching next batch of entries...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Fetching entries %d to %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Building cache for entry #%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Entry cached.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Entry caching completed.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Entry caching ABORTED.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (totalling %d entries)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Hide from article overview / frontpage');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Use group-based restrictions');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'If enabled, you can define which users of a usergroup may be able to read entries. This option has a large impact on the performance of your article overview. Only enable this if you are really going to use this feature.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Use user-based restrictions');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'If enabled, you can define which specific users may be able to read entries. This option has a large impact on the performance of your article overview. Only enable this if you are really going to use this feature.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Hide content in RSS');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'If enabled, the content of this entry will not be shown inside the RSS feed(s).');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Custom Fields');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Additional custom fields can be used in your template at places where you want them to show up. For that, edit your entries.tpl template file and place Smarty tags like {$entry.properties.ep_MyCustomField} in the HTML where you like. Note the prefix ep_ for each field. ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Here you can enter a list of commaseparated field names that you can use to enter for every entry - do not use special characters or spaces for those fieldnames. Example: "Customfield1, Customfield2". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'The list of available custom fields can be changed in the <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">plugin configuration</a>.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC4', 'You can enter the default setting for each field by using "Customfield1:Default value1, Customfield2:Default value2". If you need to use the special characters ":" and "," within the default value, put an \\ backslash before them, like "Customfield1:I want\\:Coookies\\, Muffins and Sausages,Customfield2:I am satisfied". For better readability, you can put a newline in front of each custom field, if you like.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'Disable Markup plugins for this entry:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS', 'Use extended database lookups');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS_DESC', 'If enabled, additional SQL queries will be issued to be able to use sticky entries, hidden entries and removed entries from the frontpage. If those are not needed, disabling this feature can improve performance.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE', 'Entry editing screen');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE_DESC', 'Here you can choose, which elements and in which order the plugin should show its input fields in the entry editing process.');

