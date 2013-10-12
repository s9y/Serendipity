<?php
exit;

function help() {
    echo "This helper application lists all missing constants from plugin translations.\n\n";
    echo "==================================================\n";
    echo "Call Syntax:\n";
    echo "\tphp plugin_lang.php [lang]\n";
    echo "==================================================\n";
    echo "\n";
    echo "[lang] needs to replaced with the language you want to compare against.\n";
    echo "Example:\n";
    echo "\tphp plugin_lang.php de\n";
    echo "\tThis command will show all untranslated german strings.\n\n";
}

if (!is_array($argv) || empty($argv[1])) {
    echo "==================================================\n";
    echo "This tool is intended to be called via commandline!\n";
    echo "==================================================\n\n";
    help();
    die();
}

$lang = preg_replace('@[^a-z0-9]@', '', strtolower($argv[1]));
echo "Probing language $lang\n";
$base = '../plugins/';
$d = @opendir($base);

if (!$d) {
    die('Failure');
}

$const = array();
$const['checked'] = get_defined_constants();
while(($file = readdir($d)) !== false) {
    if ($file[0] == '.') {
        continue;
    }

    if (!is_dir($base . '/' . $file)) {
        continue;
    }

    $tfile = $base . '/' . $file . '/lang_en.inc.php';
    $sfile = $base . '/' . $file . '/lang_' . $lang . '.inc.php';

    if (file_exists($tfile)) {
        echo "Parsing english language from $file - ";
        include $tfile;
        $current = get_defined_constants();
        $const['native'][$file] = array_diff($current, $const['checked']);
        $const['checked'] = array_merge($const['checked'], $current);
        echo count($const['native'][$file]) . " constants.\n";
    } else {
        echo "NOTICE: English language of $file does not exist.\n";
        continue;
    }

    if (file_exists($sfile)) {
        echo "Parsing differences for $file - ";
        include $sfile;
        $current = get_defined_constants();
        $const['missing'][$file] = array_diff($current, $const['checked']);
        $const['checked'] = array_merge($const['checked'], $current);

        echo count($const['missing'][$file]) . " missing constants.\n";
    } else {
        $const['missing'][$file] = $const['native'][$file];
    }
    echo "\n";
}

echo "Showing missing constants:\n\n";
foreach($const['missing'] AS $file => $constants) {
    echo strtoupper($file) . ":\n";
    foreach($constants AS $const => $val) {
        echo "\t" . $const . "\n";
        echo "\t\t" . $val . "\n";
    }
    echo "---------------------------\n";
}
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_FORBIDDEN_ENABLE', 'Enable Plugin ACL for usergroups?');
@define('PERMISSION_FORBIDDEN_ENABLE_DESC', 'If the option "Plugin ACL for usergroups" is enabled in the configuration, you can specify which usergroups are allowed to execute certain plugins/events.');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('SET_TO_MODERATED', 'Moderate');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('CENTER', 'center');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');

@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for comment subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a comment is made where the person wants to be notified via e-mail about new comments to the same entry, he must confirm his subscription to the entry. This Double-Opt In is required by german law, for example.');
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Your comment subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');
@define('PLUGIN_DOCUMENTATION', 'Documentation');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');

@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_PROPERTY_COMMENT1', 'Depiction (summary for ALT-Attribute)');

@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');

@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');

@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');

@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

@define('SEARCH_FULLENTRY', 'Show full entry');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('WEBLOG', 'Weblog');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('SUMMARY', 'Summary');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
