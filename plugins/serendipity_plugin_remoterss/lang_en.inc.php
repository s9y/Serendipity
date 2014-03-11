<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_REMOTERSS_TITLE', 'Remote RSS/OPML-Blogroll Feed');
@define('PLUGIN_REMOTERSS_BLAHBLAH', 'Show items of a remote RSS/OPML feed (e.g. Blogroll)');
@define('PLUGIN_REMOTERSS_NUMBER', 'Number of entries');
@define('PLUGIN_REMOTERSS_NUMBER_BLAHBLAH', 'How many entries should be displayed? (Default: every entry of the feed)');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE', 'Feed-Title');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH', 'Title of the feed in the blog sidebar');
@define('PLUGIN_REMOTERSS_RSSURI', 'RSS/OPML URI');
@define('PLUGIN_REMOTERSS_RSSURI_BLAHBLAH', 'URI of the RSS/OPML feed which you want to display');
@define('PLUGIN_REMOTERSS_NOURI', 'No RSS/OPML feed selected');
@define('PLUGIN_REMOTERSS_RSSTARGET', 'RSS/OPML linktarget');
@define('PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH', 'Target of the link to one of the displayed RSS items (Default: _blank)');
@define('PLUGIN_REMOTERSS_CACHETIME', 'When to update the feed?');
@define('PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH', 'The contents of a feed are stored in a cache which will be updated as soon as its older than X seconds (Default: 3 hours)');
@define('PLUGIN_REMOTERSS_FEEDTYPE', 'Feedtype');
@define('PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH', 'Choose the format of the remote Feed');
@define('PLUGIN_REMOTERSS_BULLETIMG', 'Bullet Image');
@define('PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH', 'Image to display before each headline.');
@define('PLUGIN_REMOTERSS_DISPLAYDATE', 'Display Date');
@define('PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH', 'Display the date below the headline?');

@define('PLUGIN_REMOTERSS_RSSLINK', 'Use RSS-Link?');
@define('PLUGIN_REMOTERSS_RSSLINK_DESC', 'Shall a link be set to the link specified in the RSS feed?');
@define('PLUGIN_REMOTERSS_RSSFIELD', 'RSS display element');
@define('PLUGIN_REMOTERSS_RSSFIELD_DESC', 'Whic element of the RSS feed should be displayed? (i.e.: "title", "content:encoded", "description", ...)');
@define('PLUGIN_REMOTERSS_RSSESCAPE', 'Escape HTML output');
@define('PLUGIN_REMOTERSS_RSSESCAPE_DESC', 'If enabled, HTML in RSS-feeds will be escaped and no XSS is possible. If this option is disabled, HTML in the feeds can be interpretated. This is a possible security issue, if the embedded feed is not yours!');

@define('PLUGIN_REMOTERSS_TEMPLATE', 'Output Template to use for this feed');
@define('PLUGIN_REMOTERSS_TEMPLATE_DESC', 'Here you can choose a template file inside the plugin\'s directory that is used to render the output of the feed in the sidebar. You can add custom template files to the plugin directory. If a template file with the same name is placed inside your own theme directory, it will be used instead of the file supplied with the plugin. Selecting any template here other than the default one automatically enables Smarty templating.');
