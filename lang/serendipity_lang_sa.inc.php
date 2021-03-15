<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Arabic issue was translated by Way http://www.flyingway.com  cp1256
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'cp1256');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'Arabic,ar , ar_SA.windows-1256');
@define('DATE_FORMAT_ENTRY', '%A, %B %e. %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'rtl');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', '���');
@define('PREVIEW', '������ ��������');
@define('DATE', '�������');
@define('TIME', 'Time');
@define('APPEARANCE', '����');
@define('LOGIN', '����� ������');
@define('LOGOUT', '����');
@define('LOGGEDOUT', '�� ������');
@define('CREATE', '�����');
@define('BACK', '����');
@define('FORWARD', '�����');
@define('ANONYMOUS', '�����');
@define('RECENT', '������ ...');
@define('OLDER', '������ ...');
@define('DONE', '�� �������');
@define('TITLE', '�������');
@define('DESCRIPTION', '�����');
@define('PLACEMENT', '�����');
@define('DELETE', '���');
@define('SAVE', '���');
@define('UP', '����');
@define('DOWN', '����');
@define('PREVIOUS', '������');
@define('NEXT', '������');
@define('ENTRIES', '�������');
@define('CATEGORIES', '�����');
@define('NAME', '�����');
@define('EMAIL', '����� ����������');
@define('HOMEPAGE', '����� �� ����� ������');
@define('COMMENT', '�������');
@define('VIEW', 'View');
@define('HIDE', '�����');
@define('WEEK', '�����');
@define('WEEKS', '������');
@define('MONTHS', '����');
@define('DAYS', '����');
@define('DEBUG', 'Debug');
@define('SUCCESS', '����');
@define('COMMENTS', '�������');
@define('ADD_COMMENT', '����� �����');
@define('NO_COMMENTS', '�� �������');
@define('POSTED_BY', '���� ������');
@define('ON', '�����');
@define('NO_CATEGORY', '�� ���� �����');
@define('CATEGORY', '�����');
@define('EDIT', '�����');
@define('GO', '����!');
@define('YES', '���');
@define('NO', '��');
@define('NOT_REALLY', '��');
@define('DUMP_IT', '���');
@define('IN', '��');
@define('AT', '��');
@define('LEFT', '����');
@define('RIGHT', '����');
@define('CENTER', 'center');
@define('ARCHIVES', '�����');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', '��� ����');
@define('TRACKBACKS', '����� �������');
@define('TRACKBACK', '���� �����');
@define('NO_TRACKBACKS', '�� ���� ����� �����');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', '�������');
@define('TRACKED', '����');
@define('USER', '������');
@define('USERNAME', '��� ��������');
@define('PASSWORD', '���� ������');
@define('HIDDEN', '����');
@define('IMAGE', 'Image');
@define('VIDEO', 'Video');
@define('AUTHOR', '������');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', '�����');
@define('INSTALL', '����� �� �����');
@define('REPLY', '��');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', '���');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', '������');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', '����� ������');
@define('ADMIN_FRONTPAGE', '���� �������');
@define('QUOTE', '������');
@define('NONE', '�� ����');
@define('GROUP', '���������');
@define('AUTHORS', '��������');
@define('UPGRADE', '�����');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', '���� ����������');
@define('PREVIOUS_PAGE', '������ �������');
@define('NEXT_PAGE', '������ �������');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', '���� ��������');
@define('LAST_UPDATED', '��� �����');
@define('IP_ADDRESS', 'IP-address');
@define('CHARSET', 'Charset');
@define('REFERER', '���� ���');
@define('APPROVE', '�����');
@define('NOT_FOUND', '�� ��� ������');
@define('WRITABLE', '���� �������');
@define('NOT_WRITABLE', '��� ���� �������');
@define('WELCOME_BACK', '����� ������ �');
@define('USE_DEFAULT', '�������');
@define('SORT_BY', '��� ���');
@define('SORT_ORDER', '����� �������');
@define('SORT_ORDER_ASC', '����� ������');
@define('SORT_ORDER_DESC', '����� ������');
@define('FILTERS', '�����');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', '���� ��� ���� ���� ��������');
@define('TOGGLE_OPTION', 'Toggle option');
@define('IN_REPLY_TO', '�� ���� ���');

/* WIDELY USED */
@define('FILTER_DIRECTORY', '����');
@define('BACK_TO_BLOG', '������ ��� ������');
@define('HTML_NUGGET', 'HTML Nugget');
@define('TITLE_FOR_NUGGET', '����� ���� �����');
@define('COMMENT_ADDED', '�� ����� �������� ����� ');
@define('ENTRIES_FOR', '����� �� %s');
@define('NO_ENTRIES_TO_PRINT', '�� ���� ������ �������');
@define('COMMENT_DELETE_CONFIRM', '�� ��� ����� �� ��� ������� #%d, ������ %s ?');
@define('DELETE_SURE', '�� ��� ����� �� ��� %s ��� ��� - �� ���� ������� ��������');
@define('MEDIA_FULLSIZE', '��� �����');
@define('SIDEBAR_PLUGIN', '�������� �������� ������');
@define('EVENT_PLUGIN', '������ ������ ������');
@define('PLUGIN_ITEM_DISPLAY', '��� ���� ����ǿ');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', '��� �������� ��������');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', '��� ������ ���');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '���� ������');
@define('DIRECTORY_WRITE_ERROR', '��� ���� �������� �� ������ %s ������ ������ �� ��������');
@define('FILE_WRITE_ERROR', 'Cannot write to file %s.');
@define('INCLUDE_ERROR', 'serendipity error: could not include %s - exiting.');
@define('DO_MARKUP', '������� ����� �������');
@define('GENERAL_PLUGIN_DATEFORMAT', '���� �������');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', '���� ����� ������� ������� �� PHPs strftime() variables. (Default: "%s")');
@define('APPLY_MARKUP_TO', '�� ����� ��� %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML Button');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Links to XML Feeds will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', '��� ����� %s ...');
@define('SETTINGS_SAVED_AT', '�� ��� ��������� ������� ��  %s');
@define('INVERT_SELECTIONS', '���� ����');

@define('PERSONAL_SETTINGS', '��������� �������');
@define('DO_MARKUP_DESCRIPTION', '���� ����� ������ �������� ��� ������ �� �������� ���� (����������, ���������� ������ *, /, _, ...) ��� ������� ��� ����� ����� ����� HTML ��� ���� ���� ���.');
@define('BASE_DIRECTORY', '���� �����');
@define('PERM_READ', '����� �������');
@define('PERM_WRITE', '����� �������');
@define('PERM_DENIED', '����� �������');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', '������� ����� ������');
@define('WELCOME_TO_INSTALLATION', '����� �� �� ���� ����� ������ ���������');
@define('FIRST_WE_TAKE_A_LOOK', '���� ��� ��� ����� �� ��������� �������. �� ���� �� ����� ���� �� ����');
@define('ERRORS_ARE_DISPLAYED_IN', '��� ����� ��  %s. ���� �� %s � ���� %s');
@define('RED', 'red');
@define('YELLOW', '����');
@define('GREEN', '����');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s pre-installation report');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP �����');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', '���� �������');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini ����� �������');
@define('RECOMMENDED', '���� ��');
@define('ACTUAL', '����');
@define('PERMISSIONS', '���������');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Permissions can be set by running shell command: `<em>%s</em>` on the failed directory, or by setting this using an FTP program');
@define('PROBLEM_DIAGNOSTIC', '���� ���� ����. �� ���� �� ��������� �� ����� ������� ��� ����� �� ����� ��� �����');
@define('SELECT_INSTALLATION_TYPE', '���� �� ����� ����� ����');
@define('RECHECK_INSTALLATION', '����� ���� ����� ������');
@define('SIMPLE_INSTALLATION', '������� ������');
@define('EXPERT_INSTALLATION', '������� �������');
@define('COMPLETE_INSTALLATION', '�� �������� �� �������');
@define('WONT_INSTALL_DB_AGAIN', '�� ��� ����� ����� �������� �� ����');
@define('THEY_DO', '���� ���');
@define('THEY_DONT', '�� ���� ���');
@define('CHECK_DATABASE_EXISTS', '���� �� ���� ����� �������� � ������� ������');
@define('CREATE_DATABASE', 'Creating default database setup...');
@define('ATTEMPT_WRITE_FILE', 'Attempting to write %s file...');
@define('CREATING_PRIMARY_AUTHOR', '����� ���� ����� \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', '������� ������ ����������');
@define('INSTALLING_DEFAULT_PLUGINS', '����� ������ �� ���������');
@define('SERENDIPITY_INSTALLED', '�� ����� ����� ��������� �����');
@define('VISIT_BLOG_HERE', '����� ����� ������ ������� �� ���');
@define('THANK_YOU_FOR_CHOOSING', '���� �������� ����� ���������');
@define('ERROR_DETECTED_IN_INSTALL', '�� ������ ��� ���� ����� �������');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', '������');
@define('ADMIN_FOOTER_POWERED_BY', '������ ����� ��������� ������� %s � PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', '���� ���� ');
@define('USERLEVEL_CHIEF_DESC', '���� ��������');
@define('USERLEVEL_ADMIN_DESC', '������ �����');
@define('WWW_USER', 'Change www to the user apache runs as (e.g. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', '������ %s �� ��� ����� ������ ������ �� ������� ������');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Cannot execute the %s binary');
@define('FILE_CREATE_YOURSELF', '������ �� ���� ����� ����� �� �� ���� �������� �������� ');
@define('COPY_CODE_BELOW', '<br />* �� ���� ����� ������� ������� � ���  %s �� %s ������:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Once you have done this, hit your browser\'s "reload" button.');
@define('ERROR_TEMPLATE_FILE', '��� ���� ��� ��� ��� ������. ������ ����� ������');
@define('HTACCESS_ERROR', 'To check your local webserver installation, serendipity needs to be able to write the file ".htaccess". This was not possible because of permission errors. Please adjust the permissions like this: <br />&nbsp;&nbsp;%s<br />and reload this page.');
@define('EMPTY_SETTING', '�� ��� ������ ������� ����� �� "%s"!');
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
@define('ADMIN_ENTRIES', '��������');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', '�� ���� ������� ������ ��������: %s.');
@define('COULDNT_SELECT_DB', '�� ���� ������ ������� ����� ��������: %s.');
@define('COULDNT_SELECT_USER_INFO', '�� ���� ������ ������� �����: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', '�� ���� ������ ������� �������: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', '�� ���� ������ ������� �������: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', '�� ���� ������ ������� �������: %s.');
@define('MYSQL_REQUIRED', 'You must have the MySQL extension in order to perform this action.');
@define('CREATE_AUTHOR', '����� ���� \'%s\'.');
@define('CREATE_CATEGORY', '����� ���� \'%s\'.');
@define('MT_DATA_FILE', '���� ���� ��� ���������');
@define('INSTALL_DBPORT', '���� ����� ��������');
@define('INSTALL_DBPORT_DESC', '���� ������� ������ ����� ��������');
@define('IMPORT_PLEASE_ENTER', '������ ���� ��������� �������� �� ������');
@define('IMPORT_NOW', '������� ����!');
@define('IMPORT_STARTING', '��� ����� ��������� ...');
@define('IMPORT_FAILED', '��� �� ���������');
@define('IMPORT_DONE', '����� ��������� �����');
@define('IMPORT_WEBLOG_APP', '������� ������');
@define('IMPORT_NOTES', '������:');
@define('IMPORT_STATUS', '������ ��� ���������');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Put all imported text in the "body" section and do not split up into "extended entry" section.');
@define('IMPORT_GENERIC_RSS', 'Generic RSS import');
@define('ACTIVATE_AUTODISCOVERY', '���� ���� ���� ��� �� ����� �� ��� �������');
@define('RSS_IMPORT_CATEGORY', '������ ��� ������� �������� �������� ����� �������');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', '�� ��� ������ ��� ��� ������� %s');
@define('CONVERT_HTMLENTITIES', '��� ����� �������� ��� ����');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', '����� ����� ������');
@define('WRONG_USERNAME_OR_PASSWORD', '��� �������� �� ���� ������ ��� �����');
@define('PLEASE_ENTER_CREDENTIALS', '������ ����� ��������� ������ ��.');
@define('AUTOMATIC_LOGIN', '��� ���������');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', '����� �������');
@define('MEDIA_LIBRARY', '����� ������� ��������');
@define('ADD_MEDIA', '����� ����� ������');
@define('MANAGE_DIRECTORIES', '����� ��������');
@define('CONFIGURATION', '������ ���� ������');

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
@define('ENTRY_PUBLISHED_FUTURE', '�� ��� ��� ��� ������� ��� ����');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', '���� ������� ������� ����� ��');
@define('EVENT_PLUGINS', '������ ������ ������');
@define('CONFIGURE_PLUGINS', '����� ����� ���� - ���� ��');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', '������� �����: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', '����� ������� %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', '���� ��� ������ ���� %s');
@define('ALREADY_INSTALLED', '�� ����� ��� ������� ������');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', '����� ��������');
@define('EDIT_ENTRY', '����� �������');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', '�����');
@define('PUBLISH', '���');
@define('CONTENT', '�����');
@define('ENTRIES_PER_PAGE', '�������� �� �� ����');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', '������ �����');
@define('PAGE_BROWSE_ENTRIES', '������ ��� %s �� %s, ����� %s ������');
@define('FIND_ENTRIES', '����� �� ������');
@define('RIP_ENTRY', '�� ��� %s ');
@define('NEW_ENTRY', '����� ����� ����');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', '����� ������ �� �������');
@define('EXTENDED_BODY', '����� ������');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', '�� �������� �� ��� ����� ��� �������');
@define('IFRAME_PREVIEW', '��� ���� ����� ��� �������� ������� ...');
@define('IFRAME_WARNING', '������ �� ���� ����� �������� iframes ����� ��� ����� _config.inc.php ����� ������� $serendipity[\'use_iframe\'] variable to FALSE');
@define('DATE_INVALID', '�����: ���� ����� ���� ������� ��� ����� ! ! ��� �� ���� ������ �����  YYYY-MM-DD HH:MM');
@define('ADVANCED_OPTIONS', '������ ������');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'This link is not meant to be clicked. It contains the trackback URI for this entry. You can use this URI to send ping- & trackbacks from your own blog to this entry. To copy the link, right click and select "Copy Shortcut" in Internet Explorer or "Copy Link Location" in Mozilla.');
@define('RESET_DATE', 'Reset date');
@define('RESET_DATE_DESC', '���� ��� �� ���� ������� ��� ����� ����');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', '����� �������');
@define('CREATE_NEW_USER', '����� ������ ����');
@define('CREATE_NOT_AUTHORIZED', '�� ���� �� �� ���� �� ���� ��� ������ ���� ��� ����� �� ���������');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', '�� ���� �� �� ���� ������ ���� ����� ������� ���� �� ��������');
@define('CREATED_USER', '�� ������ %s �������� ������');
@define('MODIFIED_USER', '�� ����� ����� ��� �������� %s');
@define('USER_LEVEL', 'Userlevel');
@define('WARNING_NO_GROUPS_SELECTED', 'Warning: You did not select any group memberships. This would effectively log you out of the usergroup management, and thus your group memberships were not changed.');
@define('DELETE_USER', '�� ��� ��� �� ��� ��������  #%d %s � ��� ���� ��� ���� �� ����� ���� �� ���� �� ������ ! ! ! ����� �� ���� ������');
@define('DELETED_USER', '������ �������� #%d %s �� ����.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', '����� ���������');
@define('DELETED_GROUP', '�� ����� #%d %s ��������');
@define('CREATED_GROUP', '�� ������� %s �������� �������');
@define('MODIFIED_GROUP', '�� ������� %s ����� ��������');
@define('CREATE_NEW_GROUP', '����� ������ �����');
@define('DELETE_GROUP', '�� ��� ����� �� ��� ��������  #%d %s');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', '����� �� �������');
@define('COMMENTS_FILTER_SHOW', '���');
@define('COMMENTS_FILTER_ALL', '����');
@define('COMMENTS_FILTER_APPROVED_ONLY', '��� �� ��� �������� ����');
@define('COMMENTS_FILTER_NEED_APPROVAL', '�������� ��� ����� �� �����');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', '�� ��� ����� �� ��� ��� ��������ʿ');
@define('PAGE_BROWSE_COMMENTS', '������ ��� %s �� %s, ����� %s �������');
@define('COMMENT_IS_DELETED', '(Comment removed)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', '�� ��� �������');
@define('CATEGORY_ALREADY_EXIST', '������� ������  "%s" ���� ������');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Category #%s deleted. Old articles moved to category #%s.');
@define('CATEGORY_DELETED', '������� #%s �� ����.');
@define('INVALID_CATEGORY', '�� ��� ����� �� ����� �� ����');
@define('EDIT_THIS_CAT', '����� "%s"');
@define('CATEGORY_REMAINING', '���� ��� ������� � �� ���� ���� �������� ��� ������� ������');
@define('PARENT_CATEGORY', '������ �������');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', '����� ��� ����');
@define('ALREADY_SUBCATEGORY', '�� %s ��� ���� ����� �� %s');
@define('NO_CATEGORIES', '�� ��� ����� �����');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', '������� ���������');
@define('EXPORT_ENTRIES', '����� ��������');
@define('EXPORT_FEED', 'Export full RSS feed');
@define('CREATE_THUMBS', '��� ���� ����� �������');
@define('WARNING_THIS_BLAHBLAH', "�����:\\n���� �� ������ ��� ���� ���� �� ��� ���� ��� ���� ����� ������� ���");
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
@define('TEMPLATE_SET', '\'%s\' �� ������� ����� ������ �����');
@define('WARNING_TEMPLATE_DEPRECATED', '�����: ������ ������ ���� ��� ��������� ! ! ����� ��� ���� ������ ��� ������ �� ����');
@define('STYLE_OPTIONS_NONE', 'This theme has no specific options. To see how your theme can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Custom admin interface available');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', '��� ��� ���� ����');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', '��� � ���');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', '���� ������� ��������');
@define('SAVE_CHANGES_TO_LAYOUT', '��� ��������� ��� �������');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', '��� ����� �������� �� ���� �����');
@define('SYNC_DONE', 'Done (��� %s �����).');
@define('RESIZE_BLAHBLAH', '<b>����� �������� %s</b>');
@define('ORIGINAL_SIZE', '����� ������ <i>%sx%s</i> pixel');
@define('RESIZING', '���� �����');
@define('RESIZE_DONE', '�� (����� ������ %s ����).');
@define('KEEP_PROPORTIONS', '�������� ��� ����� ��������');
@define('REALLY_SCALE_IMAGE', '�� ��� ����� �� ����� ��� ������ ! ! ����� ! ! �� ���� ����� ��� ����� ��������');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>���� �� ����� ������ ������ - �� ��� ���� ����� ������ ������ ������ ������� - �� �� ���� �� ���� ������ ������ �� ��� ��������� �� ���� �� Tab -- ��� ����� ���������� ����� ������� ������ ������ - ���� ������ ��� ����� ������ ������ � �� ���� ��� �������</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', '������ ������: ');
@define('SCALING_IMAGE', 'Scaling %s to %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', '������ <strong>%s</strong> �� ������');
@define('PARENT_DIRECTORY', '������ ������� �� ����');
@define('CONFIRM_DELETE_DIRECTORY', '�� ��� ����� �� ��� ���� ������� ������  %s?');
@define('ERROR_NO_DIRECTORY', '���: �� ��� ����� ������ %s ');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Could not remove non-empty directory. Check the "force deletion" checkbox if you want to remove those files as well, and then submit again. Existing files are:');
@define('DIRECTORY_DELETE_FAILED', 'Deletion of directory %s failed. Check permissions or messages above.');
@define('DIRECTORY_DELETE_SUCCESS', '�� ��� ������ %s �����');
@define('CHECKING_DIRECTORY', '���� ������� �� ������ %s ');
@define('DELETE_DIRECTORY', '��� ������');
@define('DELETE_DIRECTORY_DESC', '��� ��� ��� ��� ����  ��������� �� ����� ����� ���� ������! ! ! �� ������ �� ��� ��� ������� ������� �� ��� �������. ���� ! ! !');
@define('FORCE_DELETE', '���� ���� ������� ��� ������ ��� ���� ������� ���� ���� �������! ! !');
@define('CREATE_DIRECTORY', '����� ����');
@define('CREATE_NEW_DIRECTORY', '����� ���� ����');
@define('CREATE_DIRECTORY_DESC', '��� ���� ����� ���� ����� ������� �������� (�����) ���. ���� ��� ������ ������ ����� ���� ������ ���� �� ������ ���');
@define('ABOUT_TO_DELETE_FILE', '��� ��� ��� �� ���� <b>%s</b><br />��� ��� ������ ��� ����� �� ��� ������� � ��� �� ���� ����� �� ������ �� ���� ����<br /> �� ��� ����� �� ��� ���� ����ݿ<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', '���! ����� ����� ������');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', '�� ��� ����� ����� <b>%s</b>, �� ������ �� ���� �� ��ݿ');
@define('ERROR_FILE_FORBIDDEN', '�� ��� �� �� ���� ����� ��� ������� ����');
@define('REMOTE_FILE_NOT_FOUND', 'File was not located on the remote server, are you sure the URL: <b>%s</b> is correct?');
@define('FILE_FETCHED', '%s fetched as %s');
@define('FILE_UPLOADED', '����� %s �� ���� ����� �� %s');
@define('DELETE_FILE_FAIL', '�� ���� ��� ����� <b>%s</b>');
@define('DELETE_FILE', '��� ����� ����� <b>%s</b>');
@define('FOUND_FILE', '�� ������ ��� ��� ���� �� ����: %s');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', '��� : ��� ����� ���� �� ��� ���� ����� ���');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', '�� ����');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', '���� ��� ���� ��: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', '����� ����...');
@define('THUMB_CREATED_DONE', '������ �������<br/>�����');
@define('THUMBNAIL_USING_OWN', '������ %s ���� ���� ���� ����� ����� �� ������ ���� �����');
@define('THUMBNAIL_FAILED_COPY', '���� �� ������ %s �� ������ ������� ��� . ��� ��� �� ����� �����');
@define('DELETE_THUMBNAIL', '��� ������ ������� ������� �������� <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', '��� ��� ��� �����! ! ! �� ���� ��� ����� � �� ������ �� ���� ����� ���� �� ��� ����� ����� ����� ! ! ! ���� ISP �� �� ������ ��� php.ini �� ���� ���� ������� �������');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', '���� ����<br />��');
@define('DELETE_HOTLINK_FILE', '�� ��� ������ ����� ������ <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', '��� ���� ��� ����� "%s", ���: %s, ���� �����: %d');
@define('SKIPPING_FILE_EXTENSION', '����� �������: ���� ���� ��� ����� %s.');
@define('SKIPPING_FILE_UNREADABLE', '����� �������: %s ��� ��������');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', '���� ������� ����� ������� �� �������');
@define('I_WANT_BIG_IMAGE', '���� ������� ��� ����� �� �������');
@define('I_WANT_NO_LINK', '�{�� ����� ��� ���� ���');
@define('I_WANT_IT_TO_LINK', '���� ����� ��� ��� ������ ��� ��� ������');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', '��� ������');
@define('IMAGE_ALIGNMENT', '������ ������');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', '����� ����');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', '������� %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', '��� ������ 90 ���� ������ ����� ������');
@define('IMAGE_ROTATE_RIGHT', '��� ������ 90 ���� ������ ����� ������');
@define('MEDIA_RENAME', '����� ����� �����');
@define('THUMBNAIL_SHORT', '���� �����');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', '��� �����');
@define('SORT_ORDER_EXTENSION', '����� �����');
@define('SORT_ORDER_SIZE', '��� �����');
@define('SORT_ORDER_WIDTH', '��� ������');
@define('SORT_ORDER_HEIGHT', '������ ������');
@define('SORT_ORDER_DATE', '����� �����');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>����� ��� ��� ������� ��� ��������:</b><p> ��� ���� �� ��� ����� ������� � �� ������ ���� �� ��� ����� �� �� ���� �� ��������! �� �� ��� ���� ������ �������� <a href="https://images.google.com/" target="_blank"> ���� �� ������ �������� �� ���� ����� </a> ���� ����� ���� ������ � �������� ������ ���� ����� �� ����� � ���� ���� ������ ���� ����� � ���� ����� ���� ������ ���� ��� �� ������ �� ������<p><b> ���� ������� ���� ������:</b><br/>');
@define('ENTER_MEDIA_URL', '���� ���� ����� �������:');
@define('ENTER_MEDIA_UPLOAD', '���� ����� ���� ���� ����:');
@define('SAVE_FILE_AS', '��� ����� ����:');
@define('STORE_IN_DIRECTORY', '������ �� ���� ��� ������: ');
@define('IMAGE_MORE_INPUT', '��� ��� ����');
@define('ENTER_MEDIA_URL_METHOD', '����� ��� ������');
@define('ADD_MEDIA_BLAHBLAH_NOTE', '������: �� ��� ��� ���� �� ���� ���� ���� �� ������ ���� ��� ���� ������ ��� ���� ���� ����� �� ����� ����. �� ���� �� ��� ������ �� �����. ��� ����� ������ ������ ����� �� ����� ������ �� ������ �� ����� (���� ������� ����� ����� �����)');
@define('FETCH_METHOD_IMAGE', '��� ������ ��� �����');
@define('FETCH_METHOD_HOTLINK', '���� ���� ��� ����');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', '����� ������ ��� ������');
@define('MEDIA_DELETE', '��� �����');
@define('FILES_PER_PAGE', '������� �� �� ����');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '�� ��� ������ ��� ������');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', '���� ��������');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', '�� ����� � ��� ���������');
@define('DIAGNOSTIC_ERROR', '�� ������ ��� ������� ���� ����� ���� �������� �������:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', '������� ����� ��������');
@define('INSTALL_CAT_DB_DESC', '����� ��� �� ���� ���� ������� ����� �������� ������ ��.�������� ������� ����� ��� ��� ��������� �� ����');
@define('INSTALL_DBTYPE', '��� ����� ��������');
@define('INSTALL_DBTYPE_DESC', '��� ����� ��������');
@define('INSTALL_DBHOST', '������ ����� ��������');
@define('INSTALL_DBHOST_DESC', '��� ������� �������� ������ ��������');
@define('INSTALL_DBUSER', '��� ������ ����� ��������');
@define('INSTALL_DBUSER_DESC', '��� �������� ���� ����� ������� �� ����� ��������');
@define('INSTALL_DBPASS', '���� ������ ������ ��������');
@define('INSTALL_DBPASS_DESC', '���� ������ ������ �������� ���� ���� ��������');
@define('INSTALL_DBNAME', '��� ����� ��������');
@define('INSTALL_DBNAME_DESC', '��� ����� ��������');
@define('INSTALL_DBPREFIX', '����� ����� ����� ��������');
@define('INSTALL_DBPREFIX_DESC', '����� ������� ���� - serendipity_');
@define('INSTALL_DBPERSISTENT', '������� ������� ������');
@define('INSTALL_DBPERSISTENT_DESC', '���� ������� ������� ������ ������ ��������. ����� ����� ������ ��� <a href="https://php.net/manual/features.persistent-connections.php" target="_blank"> ����� </a> ���� ���� �������');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '������');
@define('INSTALL_CAT_PATHS_DESC', '��� ������ ������ ������� � ����� ������ �� ��� ������ - �� ���� �� ��� ������ (/) �������� ��� ���� ��������');
@define('INSTALL_FULLPATH', '������ ������');
@define('INSTALL_FULLPATH_DESC', '������ ������ ������� ��� ���� ��������� (����������) �������');
@define('INSTALL_UPLOADPATH', '���� ��� �������');
@define('INSTALL_UPLOADPATH_DESC', '���� ������� ������ �������� ��� ���� ���, \'Full path\' - typically \'uploads/\'');
@define('INSTALL_RELPATH', '������ ��� ���');
@define('INSTALL_RELPATH_DESC', '��� : ������ ��� ������ �������� �� ����� ������, typically \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', '������ ��� ��� ��������');
@define('INSTALL_RELTEMPLPATH_DESC', 'The path to the folder containing your templates - Relative to the \'relative path\'');
@define('INSTALL_RELUPLOADPATH', '���� ��� ������');
@define('INSTALL_RELUPLOADPATH_DESC', '������ ���� ���� ��� ��� ������� �� ������ \'relative path\'');
@define('INSTALL_URL', '���� ������');
@define('INSTALL_URL_DESC', '������ ������� ������ � ����� ������. �����������');
@define('INSTALL_AUTODETECT_URL', '������ �������� ��� ���� (Domain) ������');
@define('INSTALL_AUTODETECT_URL_DESC', '�� ���� ������ ����. ��� ����� ������ �� ����� ������ ���� ������� ������ ��� ��� ������ �������. �������� ��� ������ ����� ���� ��� ������� ���� �� ��� ���� (�����) ������ ��� ������. ���� ������ ��� ������ ��� ����� ������� ������� �������');
@define('INSTALL_INDEXFILE', 'Index file');
@define('INSTALL_INDEXFILE_DESC', '��� ��� ������� �������');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', '������� �������');
@define('INSTALL_CAT_PERMALINKS_DESC', '��� ����� ������ ������ ��� ����� ����� �� ��� ������ � ����� ���� �� ������ ������ ��������� �� ��� ��������. ��� ���� ����� ��� ����� �� �������� �������� ������� ������    ��� %id% �� ���� ����� �� ��� �� �� ���� ���� ������ �� ���� ��������� ��� ����� ��������');
@define('INSTALL_PERMALINK', '���� ����� ������ �������');
@define('INSTALL_PERMALINK_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries may become available. You can use the variables %id%, %title%, %day%, %month%, %year% and any other characters.');
@define('INSTALL_PERMALINK_AUTHOR', '������ ������ ������ ��� ���� �������');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries from certain authors may become available. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permalink Category URL structure');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Here you can define the relative URL structure beginning from your base URL to where entries from certain categories may become available. You can use the variables %id%, %name%, %parentname%, %description% and any other characters.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permalink RSS-Feed Category URL structure');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Here you can define the relative URL structure beginning from your base URL to where RSS-feeds from certain categories may become available. You can use the variables %id%, %name%, %description% and any other characters.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed Author URL structure');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Here you can define the relative URL structure beginning from your base URL to where RSS-feeds from specific users may be viewed. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', '���� ���������');
@define('INSTALL_PERMALINK_ARCHIVEPATH', '���� �������');
@define('INSTALL_PERMALINK_CATEGORIESPATH', '���� �������');
@define('INSTALL_PERMALINK_AUTHORSPATH', '���� ������ �� ��������');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '���� ��������� ����� ������');
@define('INSTALL_PERMALINK_DELETEPATH', '���� ��������� ��������');
@define('INSTALL_PERMALINK_APPROVEPATH', '���� ��������� ���� ��� �������� �����');
@define('INSTALL_PERMALINK_FEEDSPATH', '���� RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', '���� ���� �� ����');
@define('INSTALL_PERMALINK_ADMINPATH', '���� ���� ������');
@define('INSTALL_PERMALINK_SEARCHPATH', '���� �����');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', '������� ����');
@define('INSTALL_CAT_SETTINGS_DESC', '������� ����� ������');
@define('INSTALL_USERNAME', '��� �������� ������');
@define('INSTALL_USERNAME_DESC', '��� �������� ������');
@define('INSTALL_PASSWORD', '���� ���� ������');
@define('INSTALL_PASSWORD_DESC', '���� ������ ������');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', '����� �������');
@define('USERCONF_REALNAME_DESC', '����� ������ ������ �� ������. ���� ��� ���� ����� �������');
@define('INSTALL_EMAIL', '���� ������');
@define('INSTALL_EMAIL_DESC', '���� ������ ����� �������');
@define('INSTALL_SENDMAIL', '����� ���� ��� ������ �����');
@define('INSTALL_SENDMAIL_DESC', '�� ���� �� ���� ���� ����� ���� ����� ��� ��� ������߿ ������ ���. ������� ������');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', '��� ������');
@define('INSTALL_BLOGNAME_DESC', '����� ������');
@define('INSTALL_BLOGDESC', '��� ������');
@define('INSTALL_BLOGDESC_DESC', '��� �� ����� ������� �� ���� ������ ������');
@define('INSTALL_BLOG_EMAIL', '����� ���� ������');
@define('INSTALL_BLOG_EMAIL_DESC', '��� ����� ������ ���������� ���� ��� ��� ���� ������� �� ��� ��� ������ ������� ����� ������. ��� ���� �� ����� �� �� ��� ������ ���� � �� ��� �� ��� �������� �� ���� ���� �� ����� ���� ��������� � ��� �� ������ �� �� ��� ���� ���� �� ���� ���� ��������� �� ������');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', '�����');
@define('INSTALL_LANG_DESC', '���� ��� ������');
@define('INSTALL_CHARSET', '����� ������');
@define('INSTALL_CHARSET_DESC', ' ��� ���� ��  �� ���� ��� ������� ������� UTF-8 � ������� ������ ����� ��� ����� (ISO, EUC, ...)  � ��� ������ ����� ��� ����� ����� UTF-8  ���� ��������� ����� ���� ������� �� ���� �� ��� ��� ���� ������ � ����� ������� UTF-8 ������� ������. ���� . . .���� . . . ���� . . .  �� ��� ������ ������� ��� ��� ���� ������ �� ���. ��� �� ����� ������ ��� ���� ��� ���� ��� ��� �����. ���� ��� ��� ������ https://docs.s9y.org/docs/developers/internationalization.html   ������� ��� ������ �� ���������');
@define('INSTALL_CAL', '��� �������');
@define('INSTALL_CAL_DESC', '���� ���� ������ ���� ����');
@define('AUTOLANG', '������ ����� ���������� ������ ������/ ������');
@define('AUTOLANG_DESC', '�� �� ����� ��� ������ ��� ����� ����� ���� ��� ����� ��������� �� ��� ����� ������ / ������');
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
@define('INSTALL_CAT_DISPLAY', '������ � �����');
@define('INSTALL_CAT_DISPLAY_DESC', '������ ��� ��� �� ���� ���� ������');
@define('INSTALL_FETCHLIMIT', '��� �������� ���� ���� �� ������ ��������');
@define('INSTALL_FETCHLIMIT_DESC', '��� ��������� ���� ��� ����� ����� ������� �� �� ����');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option.');
@define('INSTALL_USEGZIP', '������ ����� ��� ������� - gzip ');
@define('INSTALL_USEGZIP_DESC', '��� ����� �� ����� ���� ������. �������� ��� ������� ���� ���� ��� ������. ��� �� ���� ������� ���� ���� ��� �������. ���� ��� ���! ! !');
@define('INSTALL_XHTML11', 'Force XHTML 1.1 compliance');
@define('INSTALL_XHTML11_DESC', 'Do you want to force XHTML 1.1 compliance (may cause problems for back-/frontend on older 4th generation browsers)');
@define('INSTALL_POPUP', '����� ������� �������� �� ��������ɿ');
@define('INSTALL_POPUP_DESC', '�� ��� ������� ������� �������� �� ��������ʡ ����� ���� ��������� �����ǿ');
@define('INSTALL_EMBED', '�� ���� ������ ���� ��� ���Ͽ');
@define('INSTALL_EMBED_DESC', '��� ���� �� ���� ������ ������ ��� ���� ����� ����� ���� ������ (����) �� ������ ����� � ��� ����� ����� ������� ���. ���� ���� �� ��� �������� ������ ���� �������  ������� ������ �� �� ���� ��� ��� ���� ��� ������ ����. ���� ��� ��� ������ ������ ������� ������� �� ���');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '����� ������� �������ɿ');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"��": ���� ��� ����� ����� ������� ��������  �� ������ ���� (���� �������� - ���� ��������� � �������  �����) ���� ���� ������ ������ �� ���� ���� � ���� ��� ��������. "���" ������� ������� �������� ��� ���� ��� ��� �� ��� �������. ����� �� ������ ��� �������� ������� ���� ������ ������� !!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Blocked Referers');
@define('INSTALL_BLOCKREF_DESC', 'Are there any special hosts you want not to show up in the referers list? Separate the list of hostnames with \';\' and note that the host is blocked by substring matches!');
@define('INSTALL_REWRITE', 'URL Rewriting');
@define('INSTALL_REWRITE_DESC', 'Select which rules you wish to use when generating URLs. Enabling rewrite rules will make pretty URLs for your blog and make it better indexable for spiders like google. The webserver needs to support either mod_rewrite or "AllowOverride All" for your serendipity dir. The default setting is auto-detected');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', '��� ��� �����');
@define('INSTALL_OFFSET_DESC', '���� ���� ������� ��� ������� (����� �������  %clock%) � ����� ������� ���� ������');
@define('INSTALL_SHOWFUTURE', '���� �������� ����������');
@define('INSTALL_SHOWFUTURE_DESC', '�� �� ����� ��� ���� ��� ���� ������� ���� ������ ������. ������ ��������� �� ����� �������� � ���� ��� ��� ����� �����');
@define('INSTALL_ACL', '��� ����� ������� �� �������');
@define('INSTALL_ACL_DESC', 'If enabled, the usergroup permission settings you setup for categories will be applied when logged-in users view your blog. If disabled, the read-permissions of the categories are NOT applied, but the positive effect is a little speedup on your blog. So if you don\'t need multi-user read permissions for your blog, disable this setting.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', '���� ������� ����� ������ ���� ������ RSS');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Image for the RSS feed');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', '���� ���� �� ��� GIF/JPEG/PNG ��� ���� ������ �� ������ ���� ������� - �� ����� ���� ��� ��� ������ ������ ���������');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '��� ������');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'in pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', '��� ������');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'in pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '���� ������ ����������');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '��� "���� ���������"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', '������ ���������� ������ �� ��� - �� ��� ���� ��� ���� ����� ���� [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '��� "������ �����"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', '������ ���������� ������ ����� �������. (����: ����) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Field "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Amount of minutes after which your blog should not be cached any more by foreign sites/applications (empty: hidden) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '��� ����� �����');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Should the "pubDate"-field be embedded for a RSS-channel, to show the date of the latest entry?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', '������� ����� �����');
@define('INSTALL_CAT_IMAGECONV_DESC', '�� ������� ���� �� ����� ����� ������ �����');
@define('INSTALL_IMAGEMAGICK', '������ ���� �����');
@define('INSTALL_IMAGEMAGICK_DESC', '�� ��� ���� ������ ���� ��� �� ������ � ��� �������� �� ����� ������ ����ѿ');
@define('INSTALL_IMAGEMAGICKPATH', '���� ����� ���������');
@define('INSTALL_IMAGEMAGICKPATH_DESC', '������ � ����� ������ ��� ������ ������� ���� ���� ��� ������');
@define('INSTALL_THUMBSUFFIX', '����� ����� �������');
@define('INSTALL_THUMBSUFFIX_DESC', '��� ���� ����� ������� ������ ������� �������: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', '������ ������ �������');
@define('INSTALL_THUMBWIDTH_DESC', '����� ������ ���� ������� ������� ����������');
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
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
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
@define('USERCONF_CAT_PERSONAL', '����� ������� �������');
@define('USERCONF_CAT_PERSONAL_DESC', '����� ����� �������� �������');
@define('USERCONF_USERNAME', '��� ��������');
@define('USERCONF_USERNAME_DESC', '����� ���� ������� �������� �� ������');
@define('USERCONF_PASSWORD', '���� ������ ������ ��');
@define('USERCONF_PASSWORD_DESC', '���� ������ ���� �������� �������� ������ �� ������');
@define('USERCONF_CHECK_PASSWORD', '���� ������ �������');
@define('USERCONF_CHECK_PASSWORD_DESC', '�� ���� ���� ������ �� ����� ������ � ���� ��� �� ���� ���� ������ ������� �� ��� �����');
@define('USERCONF_USERLEVEL', '����� ������');
@define('USERCONF_USERLEVEL_DESC', '��� ����� ������ �������� ���� �������� ��� ������');
@define('USERCONF_GROUPS', '������ �������');
@define('USERCONF_GROUPS_DESC', '��� ����� ���� ����� �� ��� ���������. ���� ������� �� ������� ������ ����');
@define('USERCONF_EMAIL', '����� ����������');
@define('USERCONF_EMAIL_DESC', '�� ����� ������ �� ��� �������� �� �����');
@define('INSTALL_WYSIWYG', '����� ������� �������');
@define('INSTALL_WYSIWYG_DESC', '����� ������� ������� ���� ���� ����� ����� ������ɿ ����� �� ���� ��� ���� ����� ���������. ���� ��� ���������� �������� ����������');
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
@define('USERCONF_SENDCOMMENTS', '����� ����� �� ��� �� ����� ����޿ ');
@define('USERCONF_SENDCOMMENTS_DESC', '�� ���� �� ���� ���� ����� ���� ����� ��� ��� ������߿ ������ ���. ������� ������');
@define('USERCONF_SENDTRACKBACKS', '����� ����� ����� ������ȿ');
@define('USERCONF_SENDTRACKBACKS_DESC', '�� ��� ������� ���� ����� ��� ������� ��� ������߿ ������ ���');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', '����: ��� ������ڿ');
@define('USERCONF_ALLOWPUBLISH_DESC', '�� ��� �������� ��� �����ڿ');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', '��������� ���������� �������� �������');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', '������: ����� ����� �������� ���� ������ �� ����� ���� ����������.� ����� �������� ���� ��� �������� �� ����� �������� ! ! ! ');
@define('USERCONF_CHECK_PASSWORD_ERROR', '�� ���� ���� ������ ������� ������� .���� ��� �� �������� ����� ���� ������ ��� ���� ����. ! ! ! �����: �� ��� ��� ���������');
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
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: ����� ������ ����');
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
@define('ENTRY_SAVED', '�� ��� �������');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', '������');
@define('COMMENTS_VIEWMODE_LINEAR', '������');
@define('DISPLAY_COMMENTS_AS', '���� ��������� ��� ���');
@define('COMMENTS_DISABLE', '�� ���� ���������� ��� ��� �������');
@define('COMMENTS_ENABLE', '������ ���������� ��� ��� �������');
@define('COMMENTS_CLOSED', '���� ������� �� ���� ���������� ��� ��� �������');
@define('VIEW_EXTENDED_ENTRY', '���� ����� "%s"');
@define('TRACKBACK_SPECIFIC', '���� ���� ���� ���� ��������');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', '��� ����');
@define('VIEW_TOPICS', '��� ��������');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', '����� ��������');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', '�� ��� ����� ������� ����� ! ! !');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', '���� ��������ʿ ');
@define('SUBMIT_COMMENT', '���� �����');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', '�������� �� ��� �������');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', '������� #%s ����� ���� ��� ������ ���');
@define('COMMENT_EDITED', '�� ��� ��� �������');
@define('COMMENTS_WILL_BE_MODERATED', '��� ���� ������ ��� ��������� ������� ��� �����');
@define('THIS_COMMENT_NEEDS_REVIEW', '�����: ��� ������� ����� ��� �������� ��� ����! ! !');
@define('DELETE_COMMENT', '���� �������');
@define('APPROVE_COMMENT', '����� ��� �������');
@define('REQUIRES_REVIEW', '����� ��� ������');
@define('COMMENT_APPROVED', '������� #%s �� �������� ���� �����');
@define('COMMENT_DELETED', '�������  #%s �� ���� �����');
@define('COMMENTS_MODERATE', '�������� � ����� ������� �� ��� ������� ����� ��� ��� ������! ! !');
@define('THIS_TRACKBACK_NEEDS_REVIEW', '�����: ���� ������� ��� ����� ��� �������� ��� ����! ! !');
@define('DELETE_TRACKBACK', '���� ���� �������');
@define('APPROVE_TRACKBACK', '������ ��� ���� �������');
@define('TRACKBACK_APPROVED', '���� ������ #%s �� �������� ���� �����');
@define('TRACKBACK_DELETED', '���� ������ #%s �� ���� �����');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', '����� ����');
@define('VIEW_COMMENT', '���� �������');
@define('VIEW_ENTRY', '���� �������');
@define('LINK_TO_ENTRY', '���� ��� ��������');
@define('LINK_TO_REMOTE_ENTRY', '���� ��� ������� �������');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', '����� ���� ������ %s...');
@define('TRACKBACK_SENT', '��� �� ���� �������');
@define('TRACKBACK_FAILED', '��� �� ���� %s');
@define('TRACKBACK_NOT_FOUND', '�� ��� ����� �� ���� ������');
@define('TRACKBACK_URI_MISMATCH', 'The auto-discovered trackback URI does not match our target URI.');
@define('TRACKBACK_CHECKING', '��� <u>%s</u> �� ��� ����� �� ���� ����...');
@define('TRACKBACK_NO_DATA', '�� ���� �� ������� �� ��� �����');
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
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'New comment to subscribed entry "%s"');
@define('SUBSCRIPTION_MAIL', "Hello %s,\n\nA new comment was made to the entry you are monitoring on \"%s\", entitled \"%s\"\nThe name of the poster is: %s\n\nYou can find the entry here: %s\n\nYou can unsubscribe by clicking on this link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hello %s,\n\nA new trackback was added to the entry you are monitoring on \"%s\", entitled \"%s\"\nThe name of the poster is: %s\n\nYou can find the entry here: %s\n\nYou can unsubscribe by clicking on this link: %s\n");
@define('SIGNATURE', "\n-- \n%s is powered by Serendipity.\nThe best blog around, you can use it too.\nCheck out <https://s9y.org> to find out how.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', '�� ����� ����� ���� �� ������ "%s", ��� ��� ������ "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', '�� ����� ����� ��� ������ �� ������ "%s".');
@define('YOU_HAVE_THESE_OPTIONS', '����� ���� ��� ��������:');
@define('NEW_TRACKBACK_TO', '�� ��� ���� ���� ���� ���');
@define('NEW_COMMENT_TO', '�� ����� ����� ���� ���');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', '�� ��� ������ ��� �� ������ ����� %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', '���� ��  %s ��� %s ��� �������');
@define('SEARCH_TOO_SHORT', '��� �� ���� ����� ����� ����� ���� �� 3 ���� ! ! ! ���� �� ������� ������ * �� ���� ��� ������� ���� �� 3 ���� ���� ����� ���� �� ������� �������');
@define('SEARCH_ERROR', '����� ����� �� ���� ��� ����� ���. ��� ������ ������ ����� �������.: ��� ���� �� ���� ���� ���� ��� ������ ����� ����� ��������. �� ���� MySQL ����� �������� ��� ����� ���� ���������:  <pre> ����� y_idx ������ (����� � ��� ������ � �����) </pre> ��� ����� �� ����� �������� ��� <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', '������ �� ����� ��� �� ��� ������  %s ������ ��� %s � �������� ��� ����');
@define('COMMENT_NOT_ADDED', '�� ����� ��������� ��� ��� ������� ���� �� ��� ����� ������ ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', '������� ��');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');

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
@define('PLUGIN_API_VALIDATE_ERROR', '������ ���� ��� ����� "%s". ����� ��� ����� ��������� "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', '��� ����� �������� ��������');
@define('CATEGORIES_PARENT_BASE', '��� ���� ������� �� ������');
@define('CATEGORIES_PARENT_BASE_DESC', 'You can choose a parent category so that only the child categories are shown.');
@define('CATEGORIES_HIDE_PARALLEL', '����� ������� ���� ���� �� ��� ���� �������');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'If you want to hide categories that are part of a different category tree, you need to enable this. This feature makes most sense if used in conjunction with a multi-blog using the "Properties/Templates of categories" plugin.');
@define('CATEGORIES_HIDE_PARENT', 'Hide the selected parent category?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'If you restrict the listing of categories to a specific category, by default you will see that parent category within the output listing. If you disable this option, the parent category name will not be displayed.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Enable Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'If this option is enabled, the plugin will utilize Smarty-Templating features to output the category listing. If you enable this, you can change the layout via the "plugin_categories.tpl" template file. Enabling this option will impact performance, so if you do not need to make customizations, leave it disabled.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', '���� ��� �������� �� ����ݿ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', '������ ������ ���� ����� ������ ��� ����ɿ');
@define('CATEGORIES_ALLOW_SELECT_DESC', '�� ��� ����� ��� ������ ��� ����� ������ ��� ��� ���� ����� ���� �� ��� �� ����� ������ � ����� ������ ���� �� ������� ��� ������� ���� ���� ������� ����� ���');
@define('CATEGORIES_TO_FETCH', '��� �������');
@define('CATEGORIES_TO_FETCH_DESC', '�� ���� ����� �� �� �����ȿ');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', '���� ����� ������ ������');
@define('AUTHORS_SHOW_ARTICLE_COUNT', '���� ��� ������ ������ ����� ����');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', '�� ��� ����� ��� ������ ��� ��� �������� ������ ���� ������ ��� ��� ����� ����� ����');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', '�����');
@define('SHOWS_RSS_BLAHBLAH', '���� ���� ����� �� RSS');
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
@define('ARCHIVE_COUNT', '��� �������� �� �� �����');
@define('ARCHIVE_COUNT_DESC', '����� ����� ���� ������ - �������� - ������ ���� ���� ����� ���');
@define('ARCHIVE_FREQUENCY', '���� ����� �� �������');
@define('ARCHIVE_FREQUENCY_DESC', '���� ������� ������ ��� �� ����� ������ �� �����');
@define('BROWSE_ARCHIVES', '���� ������� �����');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', '���� ������ ��� ���� �� ����');
@define('POWERED_BY_SHOW_TEXT_DESC', '��� ��� ��� ������ ��� ���� �� ����');
@define('POWERED_BY_SHOW_IMAGE', '���� ������ �� ������ ����� ���');
@define('POWERED_BY_SHOW_IMAGE_DESC', '���� ���� ������');
@define('ADVERTISES_BLAHBLAH', '��� ����� ����� ������');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Use https for login');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Lets the login-link point to a https-location. Your webserver needs to support this!');
@define('SUPERUSER', '����� ������');
@define('SUPERUSER_OPEN_ADMIN', '����� ������');
@define('SUPERUSER_OPEN_LOGIN', '���� ���� �������');
@define('ALLOWS_YOU_BLAHBLAH', '��� ���� �� ������� �������� ���� ��� ���� ���� ������');

/* PLUGIN_CALENDAR */
@define('CALENDAR', '�������');
@define('CALENDAR_BOW_DESC', '��� ��� �������� �� ����� ���� ���� �� ������� - ���� ������');
@define('QUICKJUMP_CALENDAR', 'QuickJump Calendar');
@define('CALENDAR_BEGINNING_OF_WEEK', '����� �������');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Enable Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'If enabled, plugins can hook into the calendar to display their own events highlighted. Only enable if you have installed plugins that need this, otherwise it just decreases performance.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', '���� �� �� ������');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', '��� ��������� ����� �� ������� �������� �������');
@define('THE_NUGGET', '������� ����� HTML!');
@define('BACKEND_TITLE', '������� ������ �� ����� ��� �������');
@define('BACKEND_TITLE_FOR_NUGGET', '���� �� ��� ��� ����� ������� ������� ���� ��� ���� �� ��� ��� ���� ��� ������ � �� ����� ���� ����� ��� ���� ���� �� ��� ���� ���� �� HTML Nugget  �� ������ � �� ����� ������ ��� ����� ������� �� ����� �� �����');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Show Top Exits/Referrers as links?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"no": Exits and Referrers are shown as plain text to prevent google spam. "yes": Exits and Referrers are shown as hyperlinks. "default": Use setting from global configuration (recommended).');
@define('HAVE_TO_BE_LOGGED_ON', '����� ���� ������� �� ����� �� ������ ��� ������');
@define('WELCOME_TO_ADMIN', '����� �� �� ���� ���� ������ ����� �������');
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
@define('CLICK_FILE_TO_INSERT', '���� ��� ����� ���� ���� ������:');
@define('SELECT_FILE', '���� ����� �� ��� ������');
@define('MANAGE_IMAGES', '����� �����');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Or');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', '���� ��� ���� �����');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', '����� �������');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Full Mods');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: ������');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Entry Related');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: ����');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Usermanagement');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta information');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: �����');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: �����');
@define('PLUGIN_GROUP_IMAGES', '���');
@define('PLUGIN_GROUP_ANTISPAM', '������ ������');
@define('PLUGIN_GROUP_MARKUP', '���� �����');
@define('PLUGIN_GROUP_STATISTICS', '��������');
@define('IMPORT_WELCOME', '����� �� �� ����� ������� �������');
@define('USER_SELF_INFO', '�� ������� �� %s (%s)');
@define('IMPORT_WHAT_CAN', '��� ���� �� ������� ������ �� ������ ���� ��� ������� � ���� ��� � �������! ! !');
@define('IMPORT_SELECT', '������ ������ ��� ������� ���� ���� �� ������ ��� �������!!!');
@define('MANAGE_STYLES', '����� ���������');
@define('SELECT_A_PLUGIN_TO_ADD', '���� ��� ���� - ���� �� -���� ���� ������');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', '�� ������ ���� �� ����� ������ ���� (���� ��) ���� �� �������');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', '���� ����');
@define('DELETE_SELECTED_COMMENTS', '���� ��������� ��������');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', '����� �� ����� ������');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', '���: �� ��� ����� ����� ������');
@define('ERROR_SOMETHING', '���: �� ��� ��');
@define('DIRECT_LINK', '��� ����� �� ��� ��������');
@define('SELECT_TEMPLATE', '���� ������ ���� ��� �������� ��� ������');
@define('DATABASE_ERROR', 'serendipity error: unable to connect to database - exiting.');
@define('LIMIT_TO_NUMBER', '�� ���� ���� ����ǿ');
@define('DIRECTORIES_AVAILABLE', '��������� ���� ������ �����. ���� �� �� ���� ��� ��� ! !  �� ���� ������ ���� ���� ���� ������ ���');
@define('CATEGORY_INDEX', '��� ����� �������� �������� ��������:');
@define('PAGE_BROWSE_PLUGINS', '������ ��� %s �� %s, ����� %s ������.');
@define('CHARSET_NATIVE', '����');
@define('XMLRPC_NO_LONGER_BUNDLED', 'The XML-RPC API Interface to Serendipity is no longer bundled because of ongoing security issues with this API and not many people using it. Thus you need to install the XML-RPC Plugin to use the XML-RPC API. The URL to use in your applications will NOT change - as soon as you have installed the plugin, you will again be able to use the API.');
@define('AUTHORS_ALLOW_SELECT', '������ ������ ���� ��� ���� �� ��ɿ');
@define('AUTHORS_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each author in this sidebar plugin.  Users can check those boxes and see entries matching their selection.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
