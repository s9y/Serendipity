<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'en_US.UTF-8, en_US.UTF8, english, en, en_US');
@define('DATE_FORMAT_ENTRY', '%A, %B %e. %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Type');
@define('PREVIEW', 'Preview');
@define('DATE', 'Date');
@define('TIME', 'Time');
@define('APPEARANCE', 'Appearance');
@define('LOGIN', 'Login');
@define('LOGOUT', 'Logout');
@define('LOGGEDOUT', 'Logged out.');
@define('CREATE', 'Create');
@define('BACK', 'Back');
@define('FORWARD', 'Forward');
@define('ANONYMOUS', 'Anonymous');
@define('RECENT', 'Recent...');
@define('OLDER', 'Older...');
@define('DONE', 'Done');
@define('TITLE', 'Title');
@define('DESCRIPTION', 'Description');
@define('PLACEMENT', 'Placement');
@define('DELETE', 'Delete');
@define('SAVE', 'Save');
@define('UP', 'UP');
@define('DOWN', 'DOWN');
@define('PREVIOUS', 'Previous');
@define('NEXT', 'Next');
@define('ENTRIES', 'entries');
@define('CATEGORIES', 'Categories');
@define('NAME', 'Name');
@define('EMAIL', 'Email');
@define('HOMEPAGE', 'Homepage');
@define('COMMENT', 'Comment');
@define('VIEW', 'View');
@define('HIDE', 'Hide');
@define('WEEK', 'Week');
@define('WEEKS', 'Weeks');
@define('MONTHS', 'Months');
@define('DAYS', 'Days');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Success');
@define('COMMENTS', 'Comments');
@define('ADD_COMMENT', 'Add Comment');
@define('NO_COMMENTS', 'No comments');
@define('POSTED_BY', 'Posted by');
@define('ON', 'on');
@define('NO_CATEGORY', 'No Category');
@define('CATEGORY', 'Category');
@define('EDIT', 'Edit');
@define('GO', 'Go!');
@define('YES', 'Yes');
@define('NO', 'No');
@define('NOT_REALLY', 'No');
@define('DUMP_IT', 'Yes');
@define('IN', 'in');
@define('AT', 'at');
@define('LEFT', 'left');
@define('RIGHT', 'right');
@define('CENTER', 'center');
@define('ARCHIVES', 'Archives');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Quicksearch');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'No Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Excerpt');
@define('TRACKED', 'Tracked');
@define('USER', 'User');
@define('USERNAME', 'Username');
@define('PASSWORD', 'Password');
@define('HIDDEN', 'hidden');
@define('IMAGE', 'Image');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Author');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'version');
@define('INSTALL', 'Install');
@define('REPLY', 'Reply');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Error');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Force');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administration');
@define('ADMIN_FRONTPAGE', 'Frontpage');
@define('QUOTE', 'Quote');
@define('NONE', 'none');
@define('GROUP', 'Group');
@define('AUTHORS', 'Authors');
@define('UPGRADE', 'Upgrade');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'All authors');
@define('PREVIOUS_PAGE', 'previous page');
@define('NEXT_PAGE', 'next page');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'All categories');
@define('LAST_UPDATED', 'Last Updated');
@define('IP_ADDRESS', 'IP-address');
@define('CHARSET', 'Charset');
@define('REFERER', 'Referer');
@define('APPROVE', 'Approve');
@define('NOT_FOUND', 'Not found');
@define('WRITABLE', 'Writable');
@define('NOT_WRITABLE', 'Not writable');
@define('WELCOME_BACK', 'Welcome back,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Sort by');
@define('SORT_ORDER', 'Sort order');
@define('SORT_ORDER_ASC', 'Ascending');
@define('SORT_ORDER_DESC', 'Descending');
@define('FILTERS', 'Filters');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Toggle expand all');
@define('TOGGLE_OPTION', 'Toggle option');
@define('IN_REPLY_TO', 'In reply to');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Directory');
@define('BACK_TO_BLOG', 'Back to Weblog');
@define('HTML_NUGGET', 'HTML Nugget');
@define('TITLE_FOR_NUGGET', 'Title for the nugget');
@define('COMMENT_ADDED', 'Your comment was successfully added. ');
@define('ENTRIES_FOR', 'Entries from %s');
@define('NO_ENTRIES_TO_PRINT', 'No entries to print');
@define('COMMENT_DELETE_CONFIRM', 'Are you sure you wish to delete comment #%d, written by %s?');
@define('DELETE_SURE', 'Are you sure you want to delete #%s permanently?');
@define('MEDIA_FULLSIZE', 'Fullsize');
@define('SIDEBAR_PLUGIN', 'sidebar plugin');
@define('EVENT_PLUGIN', 'event plugin');
@define('PLUGIN_ITEM_DISPLAY', 'Where should the item be displayed?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Extended entry only');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Overview page only');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'All times');
@define('DIRECTORY_WRITE_ERROR', 'Cannot write to directory %s. Please check the permissions.');
@define('FILE_WRITE_ERROR', 'Cannot write to file %s.');
@define('INCLUDE_ERROR', 'serendipity error: could not include %s - exiting.');
@define('DO_MARKUP', 'Perform Markup Transformations');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Dateformatting');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'The format of the entry\'s actual date, using PHPs strftime() variables. (Default: "%s")');
@define('APPLY_MARKUP_TO', 'Apply markup to %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML Button');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Links to XML Feeds will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Deleting file %s...');
@define('SETTINGS_SAVED_AT', 'The new settings have been saved at %s');
@define('INVERT_SELECTIONS', 'Invert Selections');

@define('PERSONAL_SETTINGS', 'Personal Settings');
@define('DO_MARKUP_DESCRIPTION', 'Apply markup transformations to the text (smilies, shortcut markups via *, /, _, ...). Disabling this will preserve any HTML-code in the text.');
@define('BASE_DIRECTORY', 'Base directory');
@define('PERM_READ', 'Read permission');
@define('PERM_WRITE', 'Write permission');
@define('PERM_DENIED', 'Permission denied.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity Installation');
@define('WELCOME_TO_INSTALLATION', 'Welcome to the Serendipity Installation');
@define('FIRST_WE_TAKE_A_LOOK', 'First we will take a look at your current setup and attempt to diagnose any compatibility problems');
@define('ERRORS_ARE_DISPLAYED_IN', 'Errors are displayed in %s, recommendations in %s and success in %s');
@define('RED', 'red');
@define('YELLOW', 'yellow');
@define('GREEN', 'green');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s pre-installation report');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP installation');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operating system');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini configuration');
@define('RECOMMENDED', 'Recommended');
@define('ACTUAL', 'Actual');
@define('PERMISSIONS', 'Permissions');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Permissions can be set by running shell command: `<em>%s</em>` on the failed directory, or by setting this using an FTP program');
@define('PROBLEM_DIAGNOSTIC', 'Due to a problematic diagnostic, you cannot continue with the installation until the above errors are fixed');
@define('SELECT_INSTALLATION_TYPE', 'Select which installation type you wish to use');
@define('RECHECK_INSTALLATION', 'Recheck installation');
@define('SIMPLE_INSTALLATION', 'Simple installation');
@define('EXPERT_INSTALLATION', 'Expert installation');
@define('COMPLETE_INSTALLATION', 'Complete installation');
@define('WONT_INSTALL_DB_AGAIN', 'will not install the database again');
@define('THEY_DO', 'they do');
@define('THEY_DONT', 'they do not');
@define('CHECK_DATABASE_EXISTS', 'Checking to see if the database and tables already exist');
@define('CREATE_DATABASE', 'Creating default database setup...');
@define('ATTEMPT_WRITE_FILE', 'Attempting to write %s file...');
@define('CREATING_PRIMARY_AUTHOR', 'Creating primary author \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Setting default theme');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installing default plugins');
@define('SERENDIPITY_INSTALLED', 'Serendipity has been successfully installed');
@define('VISIT_BLOG_HERE', 'Visit your new blog here');
@define('THANK_YOU_FOR_CHOOSING', 'Thank you for choosing Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'An error was detected in the installation');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standard editor');
@define('USERLEVEL_CHIEF_DESC', 'Chief editor');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Change \'www\' to the user apache runs as (e.g. \'nobody\').');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Directory %s does not exist and could not be created. Please create the directory manually');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Cannot execute the %s binary');
@define('FILE_CREATE_YOURSELF', 'Please create the file yourself or check permissions');
@define('COPY_CODE_BELOW', '<br />* Just copy the code below and place it in %s in your %s folder:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Once you have done this, hit your browser\'s "reload" button.');
@define('ERROR_TEMPLATE_FILE', 'Unable to open template file, please update serendipity!');
@define('HTACCESS_ERROR', 'To check your local webserver installation, serendipity needs to be able to write the file ".htaccess". This was not possible because of permission errors. Please adjust the permissions like this: <br />&nbsp;&nbsp;%s<br />and reload this page.');
@define('EMPTY_SETTING', 'You did not specify a valid value for "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity has detected that your currently installed Serendipity version is %s. It seems you are attempting to upgrade to version %s, so you need to <a href="%s">click here</a> to continue the upgrade process.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Hi, and welcome to the Serendipity upgrade agent.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'I am here to help you upgrade your Serendipity %s installation.');
@define('SERENDIPITY_UPGRADER_WHY', 'You are seeing this message because you have just installed Serendipity %s, but have not yet upgraded your database installation to fit this version');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Database updates (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'I have found the following .sql files which needs to be run before you can continue normal operation of Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Version specific tasks');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'No version specific tasks found');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Do you wish me to perform the above tasks?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'No, I will run them manually');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Yes, please do so');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'It appears you do not need any upgrades run');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Consider Serendipity upgraded');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'You have ignored the upgrade stage of Serendipity, please make sure your database is correctly installed, and scheduled functions are run');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Your Serendipity installation is now upgraded to version %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'You can return to your blog by clicking %shere%s');
@define('ADMIN_ENTRIES', 'Entries');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Could not connect to MySQL database: %s.');
@define('COULDNT_SELECT_DB', 'Could not select database: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Could not select user information: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Could not select category information: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Could not select entry information: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Could not select comment information: %s.');
@define('MYSQL_REQUIRED', 'You must have the MySQL extension in order to perform this action.');
@define('CREATE_AUTHOR', 'Create author \'%s\'.');
@define('CREATE_CATEGORY', 'Create category \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type data file');
@define('INSTALL_DBPORT', 'Database port');
@define('INSTALL_DBPORT_DESC', 'The port used to connect to your database server');
@define('IMPORT_PLEASE_ENTER', 'Please enter the data as requested below');
@define('IMPORT_NOW', 'Import now!');
@define('IMPORT_STARTING', 'Starting import procedure...');
@define('IMPORT_FAILED', 'Import failed');
@define('IMPORT_DONE', 'Import successfully completed');
@define('IMPORT_WEBLOG_APP', 'Weblog application');
@define('IMPORT_NOTES', 'Note:');
@define('IMPORT_STATUS', 'Status after import');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Put all imported text in the "body" section and do not split up into "extended entry" section.');
@define('IMPORT_GENERIC_RSS', 'Generic RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Send Trackbacks to links found in the entry');
@define('RSS_IMPORT_CATEGORY', 'Use this category for non-matching imported entries');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'The document %s was not found.');
@define('CONVERT_HTMLENTITIES', 'Try to auto-convert HTML entities?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Administration Suite');
@define('WRONG_USERNAME_OR_PASSWORD', 'You appear to have entered an invalid username or password');
@define('PLEASE_ENTER_CREDENTIALS', 'Please enter your credentials below.');
@define('AUTOMATIC_LOGIN', 'Save information');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Themes');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'Media');
@define('MEDIA_LIBRARY', 'Media library');
@define('ADD_MEDIA', 'Add media');
@define('MANAGE_DIRECTORIES', 'Manage directories');
@define('CONFIGURATION', 'Configuration');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Documentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Official Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forums');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'This entry is not yet published.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Sidebar Plugins');
@define('EVENT_PLUGINS', 'Event Plugins');
@define('CONFIGURE_PLUGINS', 'Configure Plugins');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Requirements failed: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Upgrade to version %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Click here to install a new %s');
@define('ALREADY_INSTALLED', 'Already installed');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Edit Entries');
@define('EDIT_ENTRY', 'Edit entry');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Draft');
@define('PUBLISH', 'Publish');
@define('CONTENT', 'Content');
@define('ENTRIES_PER_PAGE', 'entries per page');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Sticky Postings');
@define('PAGE_BROWSE_ENTRIES', 'Page %s of %s, totaling %s entries');
@define('FIND_ENTRIES', 'Find entries');
@define('RIP_ENTRY', 'Entry #%s deleted.');
@define('NEW_ENTRY', 'New Entry');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Entry Body');
@define('EXTENDED_BODY', 'Extended Body');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'A draft of this entry has been saved');
@define('IFRAME_PREVIEW', 'Serendipity is now creating the preview of your entry...');
@define('IFRAME_WARNING', 'Your browser does not support the concept of iframes. Please open your serendipity_config.inc.php file and set $serendipity[\'use_iframe\'] variable to FALSE.');
@define('DATE_INVALID', 'Warning: The date you specified was invalid. It has to be given in YYYY-MM-DD HH:MM format.');
@define('ADVANCED_OPTIONS', 'Advanced Options');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'This link is not meant to be clicked. It contains the trackback URI for this entry. You can use this URI to send ping- & trackbacks from your own blog to this entry. To copy the link, right click and select "Copy Shortcut" in Internet Explorer or "Copy Link Location" in Mozilla.');
@define('RESET_DATE', 'Reset date');
@define('RESET_DATE_DESC', 'Click here to reset the date to the current time');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Manage users');
@define('CREATE_NEW_USER', 'Create new user');
@define('CREATE_NOT_AUTHORIZED', 'You cannot modify users with the same userlevel as yourself');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'You cannot create users with a higher userlevel than yourself');
@define('CREATED_USER', 'A new user %s has been created');
@define('MODIFIED_USER', 'The properties of user %s have been changed');
@define('USER_LEVEL', 'Userlevel');
@define('WARNING_NO_GROUPS_SELECTED', 'Warning: You did not select any group memberships. This would effectively log you out of the usergroup management, and thus your group memberships were not changed.');
@define('DELETE_USER', 'You are about to delete user #%d %s. Are you serious? This will disallow showing any entries written by him on the frontend.');
@define('DELETED_USER', 'User #%d %s deleted.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Manage groups');
@define('DELETED_GROUP', 'Group #%d %s deleted.');
@define('CREATED_GROUP', 'A new group %s has been created');
@define('MODIFIED_GROUP', 'The properties of group %s have been changed');
@define('CREATE_NEW_GROUP', 'Create new group');
@define('DELETE_GROUP', 'You are about to delete group #%d %s. Are you serious?');
@define('GROUP_NAME_DESC', "If you enter a string that is defined as a constant in any language file (e.g. 'USERLEVEL_EDITOR_DESC'), then the translated representation of this groupname will show up. You can also define your own constants and then enter their name here. If you do not want to have translatable group names, you can enter any other string you like.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Find comments');
@define('COMMENTS_FILTER_SHOW', 'Show');
@define('COMMENTS_FILTER_ALL', 'All');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Only approved');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Pending approval');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Are you sure you wish to delete the selected comments?');
@define('PAGE_BROWSE_COMMENTS', 'Page %s of %s, totaling %s comments');
@define('COMMENT_IS_DELETED', '(Comment removed)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set back to state "moderate".');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Category saved');
@define('CATEGORY_ALREADY_EXIST', 'A category with the name "%s" already exist');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Category #%s deleted. Old articles moved to category #%s.');
@define('CATEGORY_DELETED', 'Category #%s deleted.');
@define('INVALID_CATEGORY', 'No category was provided for deletion');
@define('EDIT_THIS_CAT', 'Editing "%s"');
@define('CATEGORY_REMAINING', 'Delete this category and move its entries to this category');
@define('PARENT_CATEGORY', 'Parent category');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Create New Category');
@define('ALREADY_SUBCATEGORY', '%s is a already a subcategory of %s.');
@define('NO_CATEGORIES', 'No categories');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import data');
@define('EXPORT_ENTRIES', 'Export entries');
@define('EXPORT_FEED', 'Export full RSS feed');
@define('CREATE_THUMBS', 'Rebuild Thumbs');
@define('WARNING_THIS_BLAHBLAH', "WARNING:\\nThis may take a long time if there are many images without thumbnails.");
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' has been set as your active theme');
@define('WARNING_TEMPLATE_DEPRECATED', 'Warning: Your current theme is using a deprecated theme method, you are advised to update if possible');
@define('STYLE_OPTIONS_NONE', 'This theme has no specific options. To see how your theme can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme options');
@define('CURRENT_TEMPLATE', 'Current Theme');
@define('CUSTOM_ADMIN_INTERFACE', 'Custom admin interface available');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show theme info');
@define('AVAILABLE_TEMPLATES', 'Available Themes');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Set as theme');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Check &amp; save');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Remove ticked plugins');
@define('SAVE_CHANGES_TO_LAYOUT', 'Save changes to layout');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizing the database with the image folder');
@define('SYNC_DONE', 'Done (Synchronized %s images).');
@define('RESIZE_BLAHBLAH', '<b>Resize %s</b>');
@define('ORIGINAL_SIZE', 'Original size: <i>%sx%s</i> pixel');
@define('RESIZING', 'Resizing');
@define('RESIZE_DONE', 'Done (resized %s images).');
@define('KEEP_PROPORTIONS', 'Keep proportions');
@define('REALLY_SCALE_IMAGE', 'Really scale the image? This operation cannot be undone!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Here, you can adjust the image size. If you want to resize the image proportionally, just enter a value in one of the two boxes and press the TAB key --  I will automatically calculate the new size so the image proportions do not get messed up</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'New size: ');
@define('SCALING_IMAGE', 'Scaling %s to %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Directory <strong>%s</strong> has been created.');
@define('PARENT_DIRECTORY', 'Parent directory');
@define('CONFIRM_DELETE_DIRECTORY', 'Are you sure you want to remove all the contents of directory %s?');
@define('ERROR_NO_DIRECTORY', 'Error: Directory %s does not exist');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Could not remove non-empty directory. Check the "force deletion" checkbox if you want to remove those files as well, and then submit again. Existing files are:');
@define('DIRECTORY_DELETE_FAILED', 'Deletion of directory %s failed. Check permissions or messages above.');
@define('DIRECTORY_DELETE_SUCCESS', 'Directory %s successfully deleted.');
@define('CHECKING_DIRECTORY', 'Checking files in directory %s');
@define('DELETE_DIRECTORY', 'Delete directory');
@define('DELETE_DIRECTORY_DESC', 'You are about to delete the contents of a directory that contains media files, possibly files used in some of your entries.');
@define('FORCE_DELETE', 'Delete ALL files in this directory, including those not known by Serendipity');
@define('CREATE_DIRECTORY', 'Create directory');
@define('CREATE_NEW_DIRECTORY', 'Create new directory');
@define('CREATE_DIRECTORY_DESC', 'Here you can create a new directory to place media files in. Choose the name for your new directory and select an optional parent directory to place it in.');
@define('ABOUT_TO_DELETE_FILE', 'You are about to delete <b>%s</b><br />If you are using this file in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Error: File already exists on your machine!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Unable to locate the file entitled <b>%s</b>, maybe it has already been deleted?');
@define('ERROR_FILE_FORBIDDEN', 'You are not allowed to upload files with active content');
@define('REMOTE_FILE_NOT_FOUND', 'File was not located on the remote server, are you sure the URL: <b>%s</b> is correct?');
@define('FILE_FETCHED', '%s fetched as %s');
@define('FILE_UPLOADED', 'File %s successfully uploaded as %s');
@define('DELETE_FILE_FAIL', 'Unable to delete file <b>%s</b>');
@define('DELETE_FILE', 'Deleted the file entitled <b>%s</b>');
@define('FOUND_FILE', 'Found new/modified file: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Error: New filename "%s" already used, pick another!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'hotlinked');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Enter the new name for: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Adding image...');
@define('THUMB_CREATED_DONE', 'Thumbnail created.<br/>Done.');
@define('THUMBNAIL_USING_OWN', 'Using %s as its own thumbnail because it is so small already.');
@define('THUMBNAIL_FAILED_COPY', 'Wanted to use %s as its own thumbnail, but failed to copy!');
@define('DELETE_THUMBNAIL', 'Deleted the image thumbnail entitled <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Unknown error occurred, file not uploaded. Maybe your filesize is larger than the maximum size allowed by your server installation. Check with your ISP or edit your php.ini file to allow larger file size uploads.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', 'File hotlinked.<br />Done.');
@define('DELETE_HOTLINK_FILE', 'Deleted the hotlinked file entitled <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Unable to execute: "%s", error: %s, return var: %d');
@define('SKIPPING_FILE_EXTENSION', 'Skipping file: Missing extension on %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Skipping file: %s not readable.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'I want to use the thumbnail in my entry.');
@define('I_WANT_BIG_IMAGE', 'I want to use the larger image in my entry.');
@define('I_WANT_NO_LINK', 'I want to display it as an image');
@define('I_WANT_IT_TO_LINK', 'I want to display it as a link to this url:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Image size');
@define('IMAGE_ALIGNMENT', 'Image alignment');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Image insertion');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'You chose %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Rotate image 90 degrees counter-clockwise');
@define('IMAGE_ROTATE_RIGHT', 'Rotate image 90 degrees clockwise');
@define('MEDIA_RENAME', 'Rename this file');
@define('THUMBNAIL_SHORT', 'Thumb');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Filename');
@define('SORT_ORDER_EXTENSION', 'File extension');
@define('SORT_ORDER_SIZE', 'Filesize');
@define('SORT_ORDER_WIDTH', 'Image width');
@define('SORT_ORDER_HEIGHT', 'Image height');
@define('SORT_ORDER_DATE', 'Upload date');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Add a file to your media repository:</b><p>Here you can upload media files, or tell me to fetch them from somewhere in the web! If you do not have an appropriate image, <a href="https://images.google.com/" target="_blank">search for images on google</a> matching your thoughts, the results are often useful and funny :) But be careful, most images are copyrighted, so you should ask before using them.</p><p><b>Select method:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Enter an URL of a file to fetch:');
@define('ENTER_MEDIA_UPLOAD', 'Select a file you wish to upload:');
@define('SAVE_FILE_AS', 'Save the file as:');
@define('STORE_IN_DIRECTORY', 'Store inside the following directory: ');
@define('IMAGE_MORE_INPUT', 'Add more images');
@define('ENTER_MEDIA_URL_METHOD', 'Fetch method:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Note: If you choose to hotlink to server, make sure you have permission to hotlink to the designated website, or the website is yours. Hotlink allows you to use off-site images without storing them locally.');
@define('FETCH_METHOD_IMAGE', 'Download image to your server');
@define('FETCH_METHOD_HOTLINK', 'Hotlink to server');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Resize this image');
@define('MEDIA_DELETE', 'Delete this file');
@define('FILES_PER_PAGE', 'Files per page');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'No images found');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'all directories');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Configuration written &amp; saved');
@define('DIAGNOSTIC_ERROR', 'We detected some errors while running some diagnostics on your entered information:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Database Settings');
@define('INSTALL_CAT_DB_DESC', 'Here you can enter all your database information. Serendipity needs this to be able to function');
@define('INSTALL_DBTYPE', 'Database type');
@define('INSTALL_DBTYPE_DESC', 'Database type');
@define('INSTALL_DBHOST', 'Database host');
@define('INSTALL_DBHOST_DESC', 'The hostname for your database server. For pgsql you can specify a non-default port with "localhost port=4711" for example; for MySQL you can use "localhost:4711". If you use the default port, never mind this explanation.');
@define('INSTALL_DBUSER', 'Database user');
@define('INSTALL_DBUSER_DESC', 'The username used to connect to your database');
@define('INSTALL_DBPASS', 'Database password');
@define('INSTALL_DBPASS_DESC', 'The password matching the above username');
@define('INSTALL_DBNAME', 'Database name');
@define('INSTALL_DBNAME_DESC', 'The name of your database');
@define('INSTALL_DBPREFIX', 'Database table prefix');
@define('INSTALL_DBPREFIX_DESC', 'Prefix for the table names, e.g. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Use persistent connections');
@define('INSTALL_DBPERSISTENT_DESC', 'Enable the usage of persistent database connections, read more <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">here</a>. This is normally not recommended');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Paths');
@define('INSTALL_CAT_PATHS_DESC', 'Various paths to different essential folders and files. Do not forget trailing slashes for directories!');
@define('INSTALL_FULLPATH', 'Full path');
@define('INSTALL_FULLPATH_DESC', 'The full and absolute path to your serendipity installation');
@define('INSTALL_UPLOADPATH', 'Upload path');
@define('INSTALL_UPLOADPATH_DESC', 'All uploads will go here, relative to the \'Full path\' - typically \'uploads/\'');
@define('INSTALL_RELPATH', 'Relative path');
@define('INSTALL_RELPATH_DESC', 'Path to serendipity for your browser, typically \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relative template path');
@define('INSTALL_RELTEMPLPATH_DESC', 'The path to the folder containing your templates - Relative to the \'relative path\'');
@define('INSTALL_RELUPLOADPATH', 'Relative upload path');
@define('INSTALL_RELUPLOADPATH_DESC', 'Path to your uploads for browsers - Relative to the \'relative path\'');
@define('INSTALL_URL', 'URL to blog');
@define('INSTALL_URL_DESC', 'Base URL to your serendipity installation');
@define('INSTALL_AUTODETECT_URL', 'Autodetect used HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'If set to "true", Serendipity will ensure that the HTTP Host which was used by your visitor is used as your BaseURL setting. Enabling this will let you be able to use multiple domain names for your Serendipity Blog, and use the domain for all follow-up links which the user used to access your blog.');
@define('INSTALL_INDEXFILE', 'Index file');
@define('INSTALL_INDEXFILE_DESC', 'The name of your serendipity index file');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Defines various URL patterns to define permanent links in your blog. It is suggested that you use the defaults; if not, you should try to use the %id% value where possible to prevent Serendipity from querying the database to lookup the target URL.');
@define('INSTALL_PERMALINK', 'Permalink Entry URL structure');
@define('INSTALL_PERMALINK_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries may become available. You can use the variables %id%, %title%, %day%, %month%, %year% and any other characters.');
@define('INSTALL_PERMALINK_AUTHOR', 'Permalink Author URL structure');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries from certain authors may become available. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permalink Category URL structure');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries from certain categories may become available. You can use the variables %id%, %name%, %parentname%, %description% and any other characters.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permalink RSS-Feed Category URL structure');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Here you can define the relative URL structure beginning from your base URL to where RSS-feeds from certain categories may become available. You can use the variables %id%, %name%, %description% and any other characters.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed Author URL structure');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Here you can define the relative URL structure beginning from your base URL to where RSS-feeds from specific users may be viewed. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Path to archives');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Path to archive');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Path to categories');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Path to authors');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Path to unsubscribe comments');
@define('INSTALL_PERMALINK_DELETEPATH', 'Path to delete comments');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Path to approve comments');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Path to RSS Feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Path to single plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Path to admin');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Path to search');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'General Settings');
@define('INSTALL_CAT_SETTINGS_DESC', 'Customize how Serendipity behaves');
@define('INSTALL_USERNAME', 'Admin username');
@define('INSTALL_USERNAME_DESC', 'Username for admin login');
@define('INSTALL_PASSWORD', 'Admin password');
@define('INSTALL_PASSWORD_DESC', 'Password for admin login');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Real name');
@define('USERCONF_REALNAME_DESC', 'The full name of the author. This is the name seen by readers');
@define('INSTALL_EMAIL', 'Admin email');
@define('INSTALL_EMAIL_DESC', 'Email for the blog administrator');
@define('INSTALL_SENDMAIL', 'Send mails to admin?');
@define('INSTALL_SENDMAIL_DESC', 'Do you want to receive emails when comments are posted to your entries?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Blog name');
@define('INSTALL_BLOGNAME_DESC', 'The title of your blog');
@define('INSTALL_BLOGDESC', 'Blog description');
@define('INSTALL_BLOGDESC_DESC', 'Description of your blog');
@define('INSTALL_BLOG_EMAIL', 'Blog\'s E-Mail address');
@define('INSTALL_BLOG_EMAIL_DESC', 'This configures the E-Mail address that is used as the "From"-Part of outgoing mails. Be sure to set this to an address that is recognized by the mailserver used on your host - many mailservers reject messages that have unknown From-addresses.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Language');
@define('INSTALL_LANG_DESC', 'Select the language for your blog');
@define('INSTALL_CHARSET', 'Charset selection');
@define('INSTALL_CHARSET_DESC', 'Here you can toggle UTF-8 or native (ISO, EUC, ...) charactersets. Some languages only have UTF-8 translations so that setting the charset to "Native" will have no effects. UTF-8 is suggested for new installations. Do not change this setting if you have already made entries with special characters - this may lead to corrupt characters. Be sure to read more on https://docs.s9y.org/docs/developers/internationalization.html about this issue.');
@define('INSTALL_CAL', 'Calendar Type');
@define('INSTALL_CAL_DESC', 'Choose your desired Calendar format');
@define('AUTOLANG', 'Use visitor\'s browser language as default');
@define('AUTOLANG_DESC', 'If enabled, this will use the visitor\'s browser language setting to determine the default language of your entry and interface language.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Enable Plugin ACL for usergroups?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'If the option "Plugin ACL for usergroups" is enabled in the configuration, you can specify which usergroups are allowed to execute certain plugins/events.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Appearance and Options');
@define('INSTALL_CAT_DISPLAY_DESC', 'Customize how Serendipity looks and feels');
@define('INSTALL_FETCHLIMIT', 'Entries to display on frontpage');
@define('INSTALL_FETCHLIMIT_DESC', 'Number of entries to display for each page on the frontend');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option.');
@define('INSTALL_USEGZIP', 'Use gzip compressed pages');
@define('INSTALL_USEGZIP_DESC', 'To speed up delivery of pages, we can compress the pages we send to the visitor, given that his browser supports this. This is recommended');
@define('INSTALL_XHTML11', 'Force XHTML 1.1 compliance');
@define('INSTALL_XHTML11_DESC', 'Do you want to force XHTML 1.1 compliance (may cause problems for back-/frontend on older 4th generation browsers)');
@define('INSTALL_POPUP', 'Enable use of popup windows');
@define('INSTALL_POPUP_DESC', 'Do you want to use popup windows for comments, trackbacks et al? (Not supported by all themes)');
@define('INSTALL_EMBED', 'Is serendipity embedded?');
@define('INSTALL_EMBED_DESC', 'If you want to embed serendipity within a regular page, set to true to discard any headers and just print the contents. You can make use of the indexFile option to use a wrapper class where you put your normal webpage headers. See the README file for more information!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Make external links clickable?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"no": Unchecked external links (Top Exits, Top Referrers, User comments) are not shown/shown as plain text where applicable to prevent google spam (recommended). "yes": Unchecked external links are shown as hyperlinks. Can be overridden within sidebar plugin configuration!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Blocked Referers');
@define('INSTALL_BLOCKREF_DESC', 'Are there any special hosts you want not to show up in the referers list? Separate the list of hostnames with \';\' and note that the host is blocked by substring matches!');
@define('INSTALL_REWRITE', 'URL Rewriting');
@define('INSTALL_REWRITE_DESC', 'Select which rules you wish to use when generating URLs. Enabling rewrite rules will make pretty URLs for your blog and make it better indexable for spiders like google. The webserver needs to support either mod_rewrite or "AllowOverride All" for your serendipity dir. The default setting is auto-detected');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Server time Offset');
@define('INSTALL_OFFSET_DESC', 'Enter the amount of hours between the date of your webserver (current: %clock%) and your desired time zone');
@define('INSTALL_SHOWFUTURE', 'Show future entries');
@define('INSTALL_SHOWFUTURE_DESC', 'If enabled, this will show all entries in the future on your blog. Default is to hide those entries and only show them if the publish date has arrived.');
@define('INSTALL_ACL', 'Apply read-permissions for categories');
@define('INSTALL_ACL_DESC', 'If enabled, the usergroup permission settings you setup for categories will be applied when logged-in users view your blog. If disabled, the read-permissions of the categories are NOT applied, but the positive effect is a little speedup on your blog. So if you don\'t need multi-user read permissions for your blog, disable this setting.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Show full articles with extended body inside RSS feed');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Image for the RSS feed');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL of an image in GIF/JPEG/PNG format, if available. (empty: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Image width');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'in pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Image height');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'in pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Show E-Mail addresses?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Field "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-Mail address of the managing editor, if available. (empty: hidden) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Field "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-Mail address of the webmaster, if available. (empty: hidden) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Field "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Amount of minutes after which your blog should not be cached any more by foreign sites/applications (empty: hidden) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Field "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Should the "pubDate"-field be embedded for a RSS-channel, to show the date of the latest entry?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Image Conversion Settings');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Enter general information about how serendipity should handle Images');
@define('INSTALL_IMAGEMAGICK', 'Use ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Do you have ImageMagick installed and want to use it to resize images?');
@define('INSTALL_IMAGEMAGICKPATH', 'Path to convert binary');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Full path & name of your ImageMagick convert binary');
@define('INSTALL_THUMBSUFFIX', 'Thumbnail suffix');
@define('INSTALL_THUMBSUFFIX_DESC', 'Thumbnails will be named with the following format: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', 'Thumbnail max size');
@define('INSTALL_THUMBWIDTH_DESC', 'Maximum size of thumbnail in constrained dimension');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. file upload size');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Enter the maximum filesize for uploaded files in bytes. This setting can be overruled by server-side settings in PHP.ini: upload_max_filesize, post_max_size, max_input_time all take precedence over this option. An empty string means to only use the server-side limits.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. width of image files for upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Enter the maximum image width in pixels for uploaded images.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. height of image files for upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Enter the maximum image height in pixels for uploaded images.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images according to configured maximum/minimum dimensions before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Enable on-the-fly media synchronization');
@define('ONTHEFLYSYNCH_DESC', 'If enabled, Serendipity will compare the media database with the files stored on your server and synchronize the database and directory contents.');
@define('MEDIA_DYN_RESIZE', 'Allow dynamic image resizing?');
@define('MEDIA_DYN_RESIZE_DESC', 'If enabled, the media selector can return images in any requested size via a GET variable. The results are cached, and thus can create a large filebase if you make intensive use of it.');
@define('MEDIA_EXIF', 'Import EXIF/JPEG image data');
@define('MEDIA_EXIF_DESC', 'If enabled, existing EXIF/JPEG metadata of images will be parsed and stored in the database for display in the media gallery.');
@define('MEDIA_PROP', 'Media properties');
@define('MEDIA_PROP_DESC', 'Enter a list of ";" separated property fields you want to define for each media file');
@define('MEDIA_PROP_MULTIDESC', '(You can append ":MULTI" after any item to indicate that this item will contain long text instead of just some characters)');
@define('MEDIA_KEYWORDS', 'Media keywords');
@define('MEDIA_KEYWORDS_DESC', 'Enter a list of ";" separated words that you want to use as pre-defined keywords for media items.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Your personal details');
@define('USERCONF_CAT_PERSONAL_DESC', 'Change your personal details');
@define('USERCONF_USERNAME', 'Your username');
@define('USERCONF_USERNAME_DESC', 'The username you use to log in to the blog');
@define('USERCONF_PASSWORD', 'Your password');
@define('USERCONF_PASSWORD_DESC', 'The password you wish to use to log in to the blog');
@define('USERCONF_CHECK_PASSWORD', 'Old Password');
@define('USERCONF_CHECK_PASSWORD_DESC', 'If you change the password in the field above, you need to enter the current user password into this field.');
@define('USERCONF_USERLEVEL', 'Access level');
@define('USERCONF_USERLEVEL_DESC', 'This level is used to determine what kind of access this user has to the blog');
@define('USERCONF_GROUPS', 'Group Memberships');
@define('USERCONF_GROUPS_DESC', 'This user is a member of the following groups. Multiple memberships are possible.');
@define('USERCONF_EMAIL', 'Your e-mail address');
@define('USERCONF_EMAIL_DESC', 'Your personal e-mail address');
@define('INSTALL_WYSIWYG', 'Use WYSIWYG editor');
@define('INSTALL_WYSIWYG_DESC', 'Do you want to use the WYSIWYG editor?');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'Send comment announcements?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Do you want to receive emails when comments are posted to your entries?');
@define('USERCONF_SENDTRACKBACKS', 'Send trackback announcements?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Do you want to receive emails when trackbacks are posted to your entries?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Rights: Publishing entries?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Is this user allowed to publish entries?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma separated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Default settings for new entries');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'NOTICE: The userlevel attribute is now only used for backward compatibility to plugins and fallback authorisation. User privileges are now handled by group memberships!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'You did not specify the right old password, and are not authorized to change the new password. Your settings were not saved.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Access personal configuration');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Change userlevels');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Change "forbid creating entries"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Change right to publish entries');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Access system configuration');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Access blog-centric configuration');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administrate entries');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administrate other user\'s entries');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import entries');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administrate categories');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administrate other user\'s categories');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Delete categories');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administrate users');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Delete users');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Change userlevel');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administrate users that are in your group(s)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administrate users that are not in your group(s)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Create new users');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administrate usergroups');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administrate plugins');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administrate other user\'s plugins');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administrate media files');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administrate media directories');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Add new media files');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Delete media files');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administrate other user\'s media files');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: View media files');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Sync thumbnails');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administrate comments');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administrate templates');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: View other user\'s media files');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Your entry has been saved');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Threaded');
@define('COMMENTS_VIEWMODE_LINEAR', 'Linear');
@define('DISPLAY_COMMENTS_AS', 'Display comments as');
@define('COMMENTS_DISABLE', 'Do not allow comments to this entry');
@define('COMMENTS_ENABLE', 'Allow comments to this entry');
@define('COMMENTS_CLOSED', 'The author does not allow comments to this entry');
@define('VIEW_EXTENDED_ENTRY', 'Continue reading "%s"');
@define('TRACKBACK_SPECIFIC', 'Trackback specific URI for this entry');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'view full');
@define('VIEW_TOPICS', 'view topics');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Topics from');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Entries were not successfully inserted!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Remember Information? ');
@define('SUBMIT_COMMENT', 'Submit Comment');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Subscribe to this entry');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Themes page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Comment #%s appears to already have been approved');
@define('COMMENT_EDITED', 'The selected comment has been edited');
@define('COMMENTS_WILL_BE_MODERATED', 'Submitted comments will be subject to moderation before being displayed.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Warning: This comment needs approval before it will be displayed');
@define('DELETE_COMMENT', 'Delete comment');
@define('APPROVE_COMMENT', 'Approve comment');
@define('REQUIRES_REVIEW', 'Requires review');
@define('COMMENT_APPROVED', 'Comment #%s has successfully been approved');
@define('COMMENT_DELETED', 'Comment #%s has successfully been deleted');
@define('COMMENTS_MODERATE', 'Comments & trackbacks to this entry requires moderation');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Warning: This trackback needs approval before it will be displayed');
@define('DELETE_TRACKBACK', 'Delete trackback');
@define('APPROVE_TRACKBACK', 'Approve trackback');
@define('TRACKBACK_APPROVED', 'Trackback #%s has successfully been approved');
@define('TRACKBACK_DELETED', 'Trackback #%s has successfully been deleted');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Top level');
@define('VIEW_COMMENT', 'View comment');
@define('VIEW_ENTRY', 'View entry');
@define('LINK_TO_ENTRY', 'Link to entry');
@define('LINK_TO_REMOTE_ENTRY', 'Link to remote-entry');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Sending trackback to URI %s...');
@define('TRACKBACK_SENT', 'Trackback successful');
@define('TRACKBACK_FAILED', 'Trackback failed: %s');
@define('TRACKBACK_NOT_FOUND', 'No trackback-URI found.');
@define('TRACKBACK_URI_MISMATCH', 'The auto-discovered trackback URI does not match our target URI.');
@define('TRACKBACK_CHECKING', 'Checking <u>%s</u> for possible trackbacks...');
@define('TRACKBACK_NO_DATA', 'Target contained no data');
@define('TRACKBACK_COULD_NOT_CONNECT', 'No Trackback sent: Could not open connection to %s on port %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'New comment to subscribed entry "%s"');
@define('SUBSCRIPTION_MAIL', "Hello %s,\n\nA new comment was made to the entry you are monitoring on \"%s\", entitled \"%s\"\nThe name of the poster is: %s\n\nYou can find the entry here: %s\n\nYou can unsubscribe by clicking on this link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hello %s,\n\nA new trackback was added to the entry you are monitoring on \"%s\", entitled \"%s\"\nThe name of the poster is: %s\n\nYou can find the entry here: %s\n\nYou can unsubscribe by clicking on this link: %s\n");
@define('SIGNATURE', "\n-- \n%s is powered by Serendipity.\nThe best blog around, you can use it too.\nCheck out <https://s9y.org> to find out how.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'A new comment has been posted on your blog "%s", to the entry entitled "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'A new trackback has been made to your blog-entry entitled "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'You have the following options available:');
@define('NEW_TRACKBACK_TO', 'New trackback made to');
@define('NEW_COMMENT_TO', 'New comment posted to');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'No Entries Found for Query %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Your search for %s returned %s results:');
@define('SEARCH_TOO_SHORT', 'Your search-query must be longer than 3 characters. You can try to append * to shorter words, like: s9y* to trick the search into using shorter words.');
@define('SEARCH_ERROR', 'The search function did not work as expected. Notice for the administrator of this blog: This may happen because of missing index keys in your database. On MySQL systems your database user account needs to be privileged to execute this query: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> The specific error returned by the database was: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Your comment did not contain anything, please %sgo back%s and try again');
@define('COMMENT_NOT_ADDED', 'Your comment could not be added because comments for this entry have either been disabled, you entered invalid data, or your comment was caught by anti-spam measures.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Comments from');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your subscription to new comments to "%s" has been successfully entered.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Configuration syntax wrong for option "%s". Needs content of type "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Shows the list of categories.');
@define('CATEGORIES_PARENT_BASE', 'Only show categories below...');
@define('CATEGORIES_PARENT_BASE_DESC', 'You can choose a parent category so that only the child categories are shown.');
@define('CATEGORIES_HIDE_PARALLEL', 'Hide categories that are not part of the category tree');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'If you want to hide categories that are part of a different category tree, you need to enable this. This feature makes most sense if used in conjunction with a multi-blog using the "Properties/Templates of categories" plugin.');
@define('CATEGORIES_HIDE_PARENT', 'Hide the selected parent category?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'If you restrict the listing of categories to a specific category, by default you will see that parent category within the output listing. If you disable this option, the parent category name will not be displayed.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Enable Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'If this option is enabled, the plugin will utilize Smarty-Templating features to output the category listing. If you enable this, you can change the layout via the "plugin_categories.tpl" template file. Enabling this option will impact performance, so if you do not need to make customizations, leave it disabled.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Show number of entries per category?');
@define('CATEGORY_PLUGIN_SHOWALL', 'Show a link to "All categories"?');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Allow visitors to display multiple categories at once?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each category in this sidebar plugin. Users can check those boxes and then see entries belonging to their selection.');
@define('CATEGORIES_TO_FETCH', 'Categories to fetch');
@define('CATEGORIES_TO_FETCH_DESC', 'Fetch categories from which author?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Shows a list of authors');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Show number of articles next to author name?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'If this option is enabled, the number of articles by this author is shown next to the authors name in parentheses.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Syndication');
@define('SHOWS_RSS_BLAHBLAH', 'Shows RSS syndication links');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 comments');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'The ID of the feed you wish to publish');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner image');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Name of image to display (or leave blank for counter), located on feedburner.com, ex: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner title');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Title (if any) to display alongside the image');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner image text');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (if any) to display when hovering the image');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('ARCHIVE_COUNT', 'Number of items in the list');
@define('ARCHIVE_COUNT_DESC', 'The total number of months, weeks or days to display');
@define('ARCHIVE_FREQUENCY', 'Calendar item frequency');
@define('ARCHIVE_FREQUENCY_DESC', 'The calendar interval to use between each item in the list');
@define('BROWSE_ARCHIVES', 'Browse archives by month');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Show "Serendipity" as text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Will display "Serendipity Weblog" as text');
@define('POWERED_BY_SHOW_IMAGE', 'Show "Serendipity" with a logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Displays the Serendipity logo');
@define('ADVERTISES_BLAHBLAH', 'Advertises the origins of your blog');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Use https for login');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Lets the login-link point to a https-location. Your webserver needs to support this!');
@define('SUPERUSER', 'Blog Administration');
@define('SUPERUSER_OPEN_ADMIN', 'Open administration');
@define('SUPERUSER_OPEN_LOGIN', 'Open login screen');
@define('ALLOWS_YOU_BLAHBLAH', 'Provides a link in the sidebar to your blog administration');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Calendar');
@define('CALENDAR_BOW_DESC', 'The day of the week that should be considered the beginning of the week. Default is Monday');
@define('QUICKJUMP_CALENDAR', 'QuickJump Calendar');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Beginning of the week');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Enable Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'If enabled, plugins can hook into the calendar to display their own events highlighted. Only enable if you have installed plugins that need this, otherwise it just decreases performance.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Search for an entry');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Holds a nugget of HTML in your sidebar');
@define('THE_NUGGET', 'The Nugget of HTML!');
@define('BACKEND_TITLE', 'Additional information in Plugin Configuration screen');
@define('BACKEND_TITLE_FOR_NUGGET', 'Here you can define a custom string which is displayed in the Plugin Configuration screen together with the description of the HTML Nugget plugin. If you have multiple HTML nuggets with an empty title, this helps to distinct the plugins from another.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Show Top Exits/Referrers as links?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"no": Exits and Referrers are shown as plain text to prevent google spam. "yes": Exits and Referrers are shown as hyperlinks. "default": Use setting from global configuration (recommended).');
@define('HAVE_TO_BE_LOGGED_ON', 'You have to be logged in to view this page');
@define('WELCOME_TO_ADMIN', 'Welcome to the Serendipity Administration Suite.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Short Comment');
@define('MEDIA_PROPERTY_COMMENT2', 'Long Comment');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Title');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity is not yet installed. Please <a href="%s">install</a> it now.');
@define('COMMENT_ADDED_CLICK', 'Click %shere to return%s to the comments, and %shere to close%s this window.');
@define('COMMENT_NOT_ADDED_CLICK', 'Click %shere to return%s to the comments, and %shere to close%s this window.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'Target URI exceeded maximum filesize of %s bytes.');
@define('CLICK_FILE_TO_INSERT', 'Click the file you want to insert:');
@define('SELECT_FILE', 'Select file to insert');
@define('MANAGE_IMAGES', 'Manage Images');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Or');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: External Services');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Features');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Full Mods');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Views');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Entry Related');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Usermanagement');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta information');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Themes');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Features');
@define('PLUGIN_GROUP_IMAGES', 'Images');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup');
@define('PLUGIN_GROUP_STATISTICS', 'Statistics');
@define('IMPORT_WELCOME', 'Welcome to the Serendipity import utility');
@define('USER_SELF_INFO', 'Logged in as %s (%s)');
@define('IMPORT_WHAT_CAN', 'Here you can import entries from other weblog software applications');
@define('IMPORT_SELECT', 'Please select the software you wish to import from');
@define('MANAGE_STYLES', 'Manage Themes');
@define('SELECT_A_PLUGIN_TO_ADD', 'Select the plugin which you wish to install');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Below is a list of installed plugins');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Abort now');
@define('DELETE_SELECTED_COMMENTS', 'Delete selected comments');
@define('MODERATE_SELECTED_COMMENTS', 'Approve selected comments');
@define('FIND_MEDIA', 'Find media');
@define('TEMPLATE_OPTIONS', 'Theme options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Error: Old filename does not exist!');
@define('ERROR_SOMETHING', 'Error: Something is wrong.');
@define('DIRECT_LINK', 'Direct link to this entry');
@define('SELECT_TEMPLATE', 'Select the theme you wish to use for your blog');
@define('DATABASE_ERROR', 'serendipity error: unable to connect to database - exiting.');
@define('LIMIT_TO_NUMBER', 'How many items should be displayed?');
@define('DIRECTORIES_AVAILABLE', 'In the list of available subdirectories you can click on any directory name to create a new directory within that structure.');
@define('CATEGORY_INDEX', 'Below is a list of categories available to your entries');
@define('PAGE_BROWSE_PLUGINS', 'Page %s of %s, totaling %s plugins.');
@define('CHARSET_NATIVE', 'Native');
@define('XMLRPC_NO_LONGER_BUNDLED', 'The XML-RPC API Interface to Serendipity is no longer bundled because of ongoing security issues with this API and not many people using it. Thus you need to install the XML-RPC Plugin to use the XML-RPC API. The URL to use in your applications will NOT change - as soon as you have installed the plugin, you will again be able to use the API.');
@define('AUTHORS_ALLOW_SELECT', 'Allow visitors to display multiple authors at once?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each author in this sidebar plugin.  Users can check those boxes and see entries matching their selection.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
