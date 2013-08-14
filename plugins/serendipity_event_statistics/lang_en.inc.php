<?php #

/**
 *  @version 
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', 'Statistics');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'Adds a link to interesting statistics in your entries panel, including a visitors counter');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', 'Statistics');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'First entry');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', 'Last entry');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', 'Total entries');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'entries');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... public');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... drafts');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'Entries per user');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', 'Categories');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'categories');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'Distribution of entries');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'entries');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'Uploaded images');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', 'image(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', 'Distribution of image types');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'file(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', 'Received comments');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'comment(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', 'Most frequently commented entries');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', 'Most frequently commenting people');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'link');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', 'Subscribers');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', 'subscriber(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', 'Most frequently subscribed entries');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', 'subscriber(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', 'Received trackbacks');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', 'Most frequently trackbacked entires');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'trackback(s)');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', 'Most frequently trackbacking people');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'estimated comments per entry');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'estimated trackbacks per entry');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', 'estimated entries per day');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', 'estimated entries per week');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', 'estimated entries per month');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'comments/entries');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'trackbacks/entry');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'entries/day');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'entries/week');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'entries/month');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', 'Total amount of characters');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', 'characters');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'Characters per entry');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', 'chars/entry');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', 'The %s longest entries');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', 'Maximum items');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', 'How many items to display per statistical value? (Default: 20)');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', 'Extended Visitors Statistics');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', 'Add Extended Visitors Statistics feature? (default: no)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'No!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'Yes, at the bottom of the page');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'Yes, at the top of the page');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL', 'Set to \'no\' to show only visitor stats');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL_DESC', 'Show everything? (default: no)');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL1', 'No, hide everything but the counter.');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL2', 'Yes, show me all statistics!');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Individual counters');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', 'Vistors today');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', 'Vistors ever');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTODAY', 'Hits today');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTOTAL', 'Hits ever');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', 'Collecting stats since');
@define('PLUGIN_EVENT_STATISTICS_EXT_COUNTDESC','The hits can go quite high and are purely for indication of pageviews. The hits are updated on EVERY pageview or refresh. This number is NOT a actual visit count.');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', 'Latest Visitors');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'Top Referrers');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'No referrers have yet been registered.');
@define('PLUGIN_EVENT_STATISTICS_EXT_DAYGRAPH', 'Visits based on day');
@define('PLUGIN_EVENT_STATISTICS_EXT_MONTHGRAPH', 'Visits based on month');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', 'Extended Visitor Statistics');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS1', 'Enable, do not count bots');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS2', 'Disable, please count bots');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'Robot count protection');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', 'Set to \'yes\' to not count robots. set to \'no\' to count robots. Currently over 25 bots are banned.');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', 'Show date of last entry');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'Show number of entries');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'Show number of comments');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', 'Show visitors this month');
@define('PLUGIN_EVENT_STATISTICS_SHOW_DAYVISITORS', 'Show visitors today');
@define('PLUGIN_EVENT_STATISTICS_SHOW_WEEKVISITORS', 'Show visitors this week');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'Cache timeout');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'How long may the statistics be shown before they get refreshed? Setting this to a high number of minutes will improve performance, but might not reflect the actual data if set too high.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', 'Formatting text');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', 'Use %s as placeholder for the number/text');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', 'Last entry: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s entries written');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s comments have been made');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '%s visitor(s) this month');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DAYVISITORS', '%s visitor(s) today');
@define('PLUGIN_EVENT_STATISTICS_TEXT_WEEKVISITORS', '%s visitor(s) this week');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', 'Show number of current visitors (aggregate past 15 minutes)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s visitor(s) online');

