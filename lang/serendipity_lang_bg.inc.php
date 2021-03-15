<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) 2004 Bogomil Shopov <bogomil@spisanie.com>
# http://www.purplerain.org/nb/
# Ognyan Kulev <ogi@fmi.uni-sofia.bg>, 2005
# Ivan Cenov <JWalker@hotmail.bg>, 2005-2009
/* vim: set sts=4 ts=4 expandtab : */
$i18n_filename_from = array(' ', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�');
$i18n_filename_to   = array('-', 'a', 'A', 'b', 'B', 'v', 'V', 'g', 'G', 'd', 'D', 'e', 'E', 'Zh', 'zh', 'z', 'Z', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'f', 'F', 'h', 'H', 'c', 'C', 'ch', 'Ch', 'sh', 'Sh', 'sht', 'Sht', 'a', 'A', 'y', 'Y', 'ju', 'Ju', 'ja', 'Ja');

@define('LANG_CHARSET', 'windows-1251');
@define('SQL_CHARSET', 'cp1251');
@define('DATE_LOCALES', 'bulgarian, bg, bg_BG');
@define('DATE_FORMAT_ENTRY', '%A, %e %B %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '&#160;');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'T��');
@define('PREVIEW', '�������');
@define('DATE', '����');
@define('TIME', 'Time');
@define('APPEARANCE', '������');
@define('LOGIN', '�������');
@define('LOGOUT', '��������');
@define('LOGGEDOUT', '��� ��� �������.');
@define('CREATE', '���������');
@define('BACK', '�����');
@define('FORWARD', '������');
@define('ANONYMOUS', '��������');
@define('RECENT', '��������...');
@define('OLDER', '��-�����...');
@define('DONE', '������');
@define('TITLE', '��������');
@define('DESCRIPTION', '��������');
@define('PLACEMENT', '������������');
@define('DELETE', '���������');
@define('SAVE', '�����');
@define('UP', '������');
@define('DOWN', '������');
@define('PREVIOUS', '�����');
@define('NEXT', '������');
@define('ENTRIES', '������:');
@define('CATEGORIES', '���������');
@define('NAME', '���');
@define('EMAIL', '��.�����');
@define('HOMEPAGE', '�������� � ��������');
@define('COMMENT', '��������');
@define('VIEW', '�������');
@define('HIDE', '��������');
@define('WEEK', '�������');
@define('WEEKS', '�������');
@define('MONTHS', '������');
@define('DAYS', '���');
@define('DEBUG', 'Debug');
@define('SUCCESS', '�����');
@define('COMMENTS', '���������');
@define('ADD_COMMENT', '�������� �� ��������');
@define('NO_COMMENTS', '���� ���������');
@define('POSTED_BY', '����������� ��');
@define('ON', '��');
@define('NO_CATEGORY', '���� ���������');
@define('CATEGORY', '���������:');
@define('EDIT', '�����������');
@define('GO', '������������');
@define('YES', '��');
@define('NO', '��');
@define('NOT_REALLY', '��');
@define('DUMP_IT', '��');
@define('IN', '�');
@define('AT', '�');
@define('LEFT', '������');
@define('RIGHT', '�������');
@define('CENTER', '������');
@define('ARCHIVES', '�����');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', '����� �������');
@define('TRACKBACKS', '�������������');
@define('TRACKBACK', '������������');
@define('NO_TRACKBACKS', '���� �������������');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', '����������');
@define('TRACKED', '�������');
@define('USER', '����������');
@define('USERNAME', '����������');
@define('PASSWORD', '������');
@define('HIDDEN', '�����');
@define('IMAGE', '�����������');
@define('VIDEO', 'Video');
@define('AUTHOR', '�����');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', '������');
@define('INSTALL', '�����������');
@define('REPLY', '�������');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', '������');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', '������������');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', '��������������');
@define('ADMIN_FRONTPAGE', '������');
@define('QUOTE', '�����');
@define('NONE', '����');
@define('GROUP', '�����');
@define('AUTHORS', '������');
@define('UPGRADE', '�����������');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', '������ ������');
@define('PREVIOUS_PAGE', '�������� ��������');
@define('NEXT_PAGE', '�������� ��������');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', '������ ���������');
@define('LAST_UPDATED', '�������� ����������');
@define('IP_ADDRESS', 'IP-�����');
@define('CHARSET', '��������');
@define('REFERER', '��������� ��������');
@define('APPROVE', '����������');
@define('NOT_FOUND', '�� � ������');
@define('WRITABLE', '���� �� �� �������');
@define('NOT_WRITABLE', '�� ���� �� �� �������');
@define('WELCOME_BACK', '����� ����� ������,');
@define('USE_DEFAULT', '�� ������������');
@define('SORT_BY', '���������� ��');
@define('SORT_ORDER', '��������� ��');
@define('SORT_ORDER_ASC', '����������');
@define('SORT_ORDER_DESC', '�����������');
@define('FILTERS', '������');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', '��������� �� ������');
@define('TOGGLE_OPTION', '������������ �� �����');
@define('IN_REPLY_TO', '� ������� ��');

/* WIDELY USED */
@define('FILTER_DIRECTORY', '����������');
@define('BACK_TO_BLOG', '������� ��� �����');
@define('HTML_NUGGET', '���� �� HTML');
@define('TITLE_FOR_NUGGET', '�������� �� ���� �� HTML');
@define('COMMENT_ADDED', '���������� �� ���� ������� �������. ');
@define('ENTRIES_FOR', '������, ����������� � %s');
@define('NO_ENTRIES_TO_PRINT', '���� ������ �� ���������');
@define('COMMENT_DELETE_CONFIRM', '������� �� ���, �� ������ �� �������� �������� �&#160;%d, ������� �� %s?');
@define('DELETE_SURE', '������� �� ���, �� ������ �� �������� #%s ������������?');
@define('MEDIA_FULLSIZE', '����� ������');
@define('SIDEBAR_PLUGIN', '��������� ���������');
@define('EVENT_PLUGIN', '��������� ���������');
@define('PLUGIN_ITEM_DISPLAY', '���� �� ���� �������� ���� �������?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', '���� ��� ��������� ������');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', '���� ��� ��������');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '������');
@define('DIRECTORY_WRITE_ERROR', '�� ���� �� �� ������� � ���������� %s. ����, ��������� �������.');
@define('FILE_WRITE_ERROR', '�� ���� �� ���� ��������� ��� ����� %s');
@define('INCLUDE_ERROR', '������ �� Serendipity: �� ���� �� ���� ������� ����� %s - ��������.');
@define('DO_MARKUP', '���������� �� ������������� �� markup');
@define('GENERAL_PLUGIN_DATEFORMAT', '������ �� ����');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', '������ �� �������������� ���� �� ������, ����������� ������������ �� ��������� �� PHP strftime() (����������: "%s")');
@define('APPLY_MARKUP_TO', '��������� �� markup ��� %s');
@define('XML_IMAGE_TO_DISPLAY', '����������� �� XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', '�������� ��� ������ �� XML �� ����� ��������� ���� ���� �����������. �������� ������ �� ���������� �����������, �������� "none" �� ����������.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', '��������� �� ����� %s...');
@define('SETTINGS_SAVED_AT', '������ ��������� �� �������� � %s');
@define('INVERT_SELECTIONS', '�������� �� ������������');
������������ ��� ���������� ������');
@define('PERSONAL_SETTINGS', '����� ���������');
@define('DO_MARKUP_DESCRIPTION', '��������� �� �������������� �� ������� ��� ������ (�������, �������� ������ ���� *, /, _, ...). �������������� �� ���� �� ������� ����� ��� �� HTML � ������.');
@define('BASE_DIRECTORY', '�������� ����������');
@define('PERM_READ', '���������� �� ������');
@define('PERM_WRITE', '���������� �� �����');
@define('PERM_DENIED', '�������� ����������.');
@define('CURRENT_AUTHOR', '����� �����');
@define('PLUGIN_ACTIVE', '�������');
@define('PLUGIN_INACTIVE', '���������');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', '��������� (��������) �� ���� ������ � ���������� ���� ���� �� ���� ����������, �� �� ���� ������������ �� ���������� �� �� ������� � ������������ �� ������ � �����.');
@define('SET_TO_MODERATED', '����������');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', '����������� �� Serendipity');
@define('WELCOME_TO_INSTALLATION', '����� ����� � ����������� �� Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', '����� �� ����� ���������� ������ ��������� � �� ���� �������� ���� �� ����������� �� �������� �������� ��� ��������������');
@define('ERRORS_ARE_DISPLAYED_IN', '�������� �� �������� � %s, ����������� � %s � �������� � %s');
@define('RED', '�������');
@define('YELLOW', '�����');
@define('GREEN', '������');
@define('PRE_INSTALLATION_REPORT', '������������� ������ �� ����������� �� Serendipity v%s');
@define('INTEGRITY', '����������� �� ��������������� �������');
@define('PHP_INSTALLATION', '���������� �� PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', '����������� �������');
@define('WEBSERVER_SAPI', 'SAPI �� ���������');
@define('PHPINI_CONFIGURATION', '��������� �� php.ini');
@define('RECOMMENDED', '��������������');
@define('ACTUAL', '������������');
@define('PERMISSIONS', '�����');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', '������� ����� �� ����� �������� ���� ���������� �� �������� ������� � ������������: `<em>%s</em>`, ��� �� ����� �������� ���� �������� �� FTP');
@define('PROBLEM_DIAGNOSTIC', '������ ��������, ������� �� �������������, �� ������ �� ���������� � ������������ ����� ������� ������ �� ����� ���������');
@define('SELECT_INSTALLATION_TYPE', '����� �� ����� �� �����������');
@define('RECHECK_INSTALLATION', '�������� ������ �� ������������');
@define('SIMPLE_INSTALLATION', '��������� �����������');
@define('EXPERT_INSTALLATION', '�������� �����������');
@define('COMPLETE_INSTALLATION', '����� ����������');
@define('WONT_INSTALL_DB_AGAIN', '���� �� ���� ����������� ������ ����� ������');
@define('THEY_DO', '�����������');
@define('THEY_DONT', '�� �����������');
@define('CHECK_DATABASE_EXISTS', '�������� ���� ������ ����� � ��������� ���� �����������');
@define('CREATE_DATABASE', '��������� �� ������� ��������� �� ������ �����...');
@define('ATTEMPT_WRITE_FILE', '���� �� ����� ��� ���� %s...');
@define('CREATING_PRIMARY_AUTHOR', '��������� �� ����� ����� "%s"');
@define('SETTING_DEFAULT_TEMPLATE', '�������� �� ����������� �� ������');
@define('INSTALLING_DEFAULT_PLUGINS', '����������� �� ������������ ���������');
@define('SERENDIPITY_INSTALLED', 'Serendipity � ���������� �������');
@define('VISIT_BLOG_HERE', '�������� ����� ��� ���� �����');
@define('THANK_YOU_FOR_CHOOSING', '���������� ��, �� �������� Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', '���� ������� ������ ��� �����������');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', '�������� ��');
@define('ADMIN_FOOTER_POWERED_BY', '��������� �� Serendipity %s � PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', '��������� ��������');
@define('USERLEVEL_CHIEF_DESC', '������ ��������');
@define('USERLEVEL_ADMIN_DESC', '�������������');
@define('WWW_USER', '��������� www �� ��������� �����������, ���� ����� �� ��������� Apache.');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', '������������ %s �� ���������� � �� ���� �� ���� ���������. ����, �������� ������������ �����');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; ���������: <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', '�� ���� �� ���� �������� ����� %s.');
@define('FILE_CREATE_YOURSELF', '����, �������� ����� ���� ��� ��������� �������� �����');
@define('COPY_CODE_BELOW', '<br />* ���� ��������� ���� �� ��-���� � �� ������� � %s � ����� %s <b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', '���� ��������� ����, ��������� ������ �� ������������ �� ��������.');
@define('ERROR_TEMPLATE_FILE', '�� ���� �� ���� ������� �������� ����, ����, �������� Serendipity!');
@define('HTACCESS_ERROR', '�� �� ��������� ������������ �� �������� �� ��� ������, serendipity ������ �� ���� �� ���� ��� ����� ".htaccess". ���� �� ����� ���������� ������ ������ � �����. ����, ��������� ������� � ������� ���� ����: <br />&nbsp;&nbsp;%s<br /> � ����������� ���� ��������.');
@define('EMPTY_SETTING', '�� ��������� ������� �������� �� "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity �����, �� ��������� ����������� ������ �� Serendipity � %s. �������� �� �������� �� �� ����������� ��� ������ %s, ���� �� <a href="%s">��������� ���</a>, �� �� ���������� � ������� �� �����������');
@define('SERENDIPITY_UPGRADER_WELCOME', '���������, � ����� ����� � ��������� �� ����������� �� Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', '��� ���, �� �� ������� � ������������� �� Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', '��� ������� ���� ���������, ������ ����-�� ������������ Serendipity %s, �� ��� �� ��� ���������� ������ ����� ��� ������ ������');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', '���������� �� ������ ����� (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', '�������� �� �������� .sql �������, ����� ������ �� ����� ���������, ����� �� ���������� � ���������� �������� �� Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '���������� ������ �� ���� ������');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '�� �� ������� ���������� ������ �� ���� ������');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', '������ �� �� ������� ������� ������?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', '��, �� �� �� ������� �����');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', '��, ����');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', '�������� ���� ����� �� �������� �� �����������');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', '�������� Serendipity �� ���������');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', '��� �������������� ������������� �� Serendipity. ����, ������� ��, �� ������ ����� � �������� ����������� � ����������� ������� �� ���������');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', '������ ���������� �� Serendipity ���� � ���������� �� ������ %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', '������ �� �� ������� ��� ����� �� ���� �������� %s���%s');
@define('ADMIN_ENTRIES', '������');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', '�� ���� �� ���� ���������� ������ � ���� ����� �� MySQL: %s.');
@define('COULDNT_SELECT_DB', '�� ���� �� ���� ������� ���� �����: %s.');
@define('COULDNT_SELECT_USER_INFO', '�� ���� �� ���� ��������� ���������� �� ����������: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', '�� ���� �� ���� ��������� ���������� �� ���������: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', '�� ���� �� ���� ��������� ���������� �� ������: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', '�� ���� �� ���� ��������� ���������� �� ��������: %s.');
@define('MYSQL_REQUIRED', '������ �� ����� ����������� ���������� �� MySQL, �� �� ��������� ���� ��������.');
@define('CREATE_AUTHOR', '��������� �� ����� "%s".');
@define('CREATE_CATEGORY', '��������� �� ��������� "%s".');
@define('MT_DATA_FILE', '���� � ����� �� Movable Type');
@define('INSTALL_DBPORT', '���� �� ������ �����');
@define('INSTALL_DBPORT_DESC', '������, ����� �� �� �������� ��� ������������ �� ������ ��� ������� � ������ �����');
@define('IMPORT_PLEASE_ENTER', '����, �������� ������� ����� ��-����');
@define('IMPORT_NOW', '������� ����!');
@define('IMPORT_STARTING', '��������� �� ��������� �� �������...');
@define('IMPORT_FAILED', '������ ��� �������');
@define('IMPORT_DONE', '��������� �������� �������');
@define('IMPORT_WEBLOG_APP', '������� �� ����');
@define('IMPORT_NOTES', '�������:');
@define('IMPORT_STATUS', '��������� ���� �������');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS ������, ������� �� PHP5 � � �������� �� ������� ����� �����');
@define('RSS_IMPORT_BODYONLY', '������� �� ����� ������ ����� � ��������� ������ � ��� ��������� � ����������� ������.');
@define('IMPORT_GENERIC_RSS', '���� ������� �� RSS');
@define('ACTIVATE_AUTODISCOVERY', '��������� �� ������������� ��� �����������, ��������� � ��������');
@define('RSS_IMPORT_CATEGORY', '���������� �� ���� ��������� �� ����������� ������� ������');
@define('IMPORT_WP_PAGES', '���� �������� �� ���������� �������� ���� �������� ������ ?');
@define('DOCUMENT_NOT_FOUND', '���������� %s �� � �������.');
@define('CONVERT_HTMLENTITIES', '�������� �� ����������� ������������� �� �������� �� HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', '�������������� �� Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', '������ ��� ������ ��� ��� ������');
@define('PLEASE_ENTER_CREDENTIALS', '����, �������� ��������������� �� ��-����.');
@define('AUTOMATIC_LOGIN', '��������� �� ���� ����������.');
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
@define('MEDIA', '�����');
@define('MEDIA_LIBRARY', '������� ����������');
@define('ADD_MEDIA', '�������� �� �����');
@define('MANAGE_DIRECTORIES', '���������� �� ����������');
@define('CONFIGURATION', '���������');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', '������');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', '������� �������� �� Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', '������������ �� Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', '��������� ����');
@define('FURTHER_LINKS_S9Y_FORUMS', '������');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', '���� ������ ��� �� � �����������.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', '������������');
@define('PLUGIN_DOCUMENTATION_LOCAL', '������� ������������');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', '������� �� ��������');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', '��������� ���������');
@define('EVENT_PLUGINS', '��������� ���������');
@define('CONFIGURE_PLUGINS', '��������� �� �������������� ���������');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', '��������� ����������: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', '����������� �� ������ %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', '��������� ��� �� ����������� �� ���� %s');
@define('ALREADY_INSTALLED', '���� � �����������');
@define('PLUGIN_AVAILABLE_COUNT', '����: %d ���������.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', '�����������');
@define('EDIT_ENTRY', '����������� �� ������');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', '�������');
@define('PUBLISH', '�����������');
@define('CONTENT', '����������');
@define('ENTRIES_PER_PAGE', '������ � ��������');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', '������� ���������');
@define('PAGE_BROWSE_ENTRIES', '�������� %s �� %s, ���� %s ������');
@define('FIND_ENTRIES', '������� �� ������');
@define('RIP_ENTRY', '������ �&#160;%s � �������');
@define('NEW_ENTRY', '����');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', '���������� �� ��������');
@define('EXTENDED_BODY', '������������ ����������');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', '�������� � ������� �� ���� ������');
@define('IFRAME_PREVIEW', 'Serendipity ���� ������� ������������� ������� �� ������ ������...');
@define('IFRAME_WARNING', '������ ������� �� �������� ��������� IFRAME. ����, �������� ����� ���� serendipity_config.inc.php � ������� ������������ $serendipity[\'use_iframe\'] �� ���� FALSE.');
@define('DATE_INVALID', '��������: ���������� ���� �� � �������. ������ �� � � ������� ������: YYYY-MM-DD HH:MM ');
@define('ADVANCED_OPTIONS', '������������ ���������');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', '���� ������ �� � �� �������. �� ������� URI �� ������������ �� ���� ������. ������ �� ���������� ���� URI, �� �� ��������� �� �������� (ping) ��� ������������ �� ����� �������� ���� �� ���� ������. �� �� �������� ��������, �������� � ������ ����� � �������� "Copy Shortcut" � Internet Explorer ��� "Copy Link Location" � Mozilla.');
@define('RESET_DATE', '���������� �� ����');
@define('RESET_DATE_DESC', '�������� ��� �� �������� �� �������� ����� ���� ����');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', '���������� �� �����������');
@define('CREATE_NEW_USER', '��������� �� ��� ����������');
@define('CREATE_NOT_AUTHORIZED', '�� ������ �� ������� �� ����������� �� ������ ������������� ���� ���� ������');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', '�� ���� �� ��������� ����������� � ��-������ ������������� ���� �� ������');
@define('CREATED_USER', '�������� � ��� ���������� %s');
@define('MODIFIED_USER', '���������� �� ����������� %s �� ���������');
@define('USER_LEVEL', '������������� ����');
@define('WARNING_NO_GROUPS_SELECTED', '��������: ��� �� ��� ������� ���� ���� �����, ��� ����� �� ���������. ���� �� ����� ��������� �� �� ������� �� ��������� �� ���������� �� �������, � �������� ����� � �����������, ����� �� ���������. �� ���� ������� ������ �������� � ����� �� � ���������.');
@define('DELETE_USER', '�������� ��� �� ��������� ����������� �&#160;%%d %s. ������� �� ���? ���� �� ������� ����������� �� ������ ������, ������ �� ����, � �������� ���� �� �����.');
@define('DELETED_USER', '������������ �&#160;%d %s � ������.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', '���������� �� �����');
@define('DELETED_GROUP', '����� �&#160;%d %s � �������.');
@define('CREATED_GROUP', '��������� � ���� ����� %s');
@define('MODIFIED_GROUP', '���������� �� ������� %s �� ���������');
@define('CREATE_NEW_GROUP', '��������� �� ���� �����');
@define('DELETE_GROUP', '�� ��� ��� �� �������� ����� �&#160;%d %s. ������� �� ���?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', '������� �� ���������');
@define('COMMENTS_FILTER_SHOW', '���������');
@define('COMMENTS_FILTER_ALL', '������');
@define('COMMENTS_FILTER_APPROVED_ONLY', '���� ��������');
@define('COMMENTS_FILTER_NEED_APPROVAL', '������ ���������');
@define('COMMENTS_FILTER_NEED_CONFIRM', '���������� ������ ��������� �� �����������');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', '������� �� ���, �� ������ �� �������� ������������ ���������?');
@define('PAGE_BROWSE_COMMENTS', '�������� %s �� %s, ���� %s ���������');
@define('COMMENT_IS_DELETED', '(���������� � ���������)');
@define('COMMENT_MODERATED', '�������� #%s ������� � ��������� ���� ���������');
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
@define('CATEGORY_SAVED', '����������� � ��������');
@define('CATEGORY_ALREADY_EXIST', '��������� � ��� "%s" ���� ����������');
@define('CATEGORY_DELETED_ARTICLES_MOVED', '��������� �&#160;%s � �������. ������� ������ �� ���������� � ��������� �&#160;%s');
@define('CATEGORY_DELETED', '��������� �&#160;%s � �������.');
@define('INVALID_CATEGORY', '���� ��������� �� ���������');
@define('EDIT_THIS_CAT', '����������� �� "%s"');
@define('CATEGORY_REMAINING', '��������� �� ���� ��������� � ����������� �� ������� ������ � �������� ���������');
@define('PARENT_CATEGORY', '��-����� ���������');
@define('CATEGORY_HIDE_SUB', '�������� �� ����������, ��������� � ������������?');
@define('CATEGORY_HIDE_SUB_DESC', '�� ������������ ������ ����������� ���������, �������� �� �������������� ���� �� ��������. ��� ���� ����� � ��������, ���� �������� �� ������ ��������� ��������� �� ����� ���������.');
@define('CREATE_NEW_CAT', '��������� �� ���� ���������');
@define('ALREADY_SUBCATEGORY', '%s ���� � ������������ �� %s.');
@define('NO_CATEGORIES', '���� ���������');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', '������������ �� ���������� �� ����������� ����! (������ ���� checksums.inc.php � �������� ����������)');
@define('CHECKSUMS_PASS', '������ ���������� ������� �� ������������.');
@define('CHECKSUM_FAILED', '%s �������� ��� �����������: ��������� �����������');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', '������� �� ������');
@define('EXPORT_ENTRIES', '�������� �� ������');
@define('EXPORT_FEED', '�������� �� ����� ������ �� RSS');
@define('CREATE_THUMBS', '��������� �� ���������');
@define('WARNING_THIS_BLAHBLAH', "��������!!!:\\n �������� � ���������� �� �������� ����� �����, ��� ��� ����� �����������.");
@define('SYNC_OPTION_LEGEND', '����� �� ������������� �� �����������');
@define('SYNC_OPTION_KEEPTHUMBS', '��������� �� ������ ������������ ���������');
@define('SYNC_OPTION_SIZECHECKTHUMBS', '��������� �� �������������� ���������, ��� �� � �������� �������');
@define('SYNC_OPTION_DELETETHUMBS', '������������ �� ������ ���������');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' � ������� ���� ������� ������');
@define('WARNING_TEMPLATE_DEPRECATED', '��������: ������ ����� ������ �������� ������� �������� �����. ����� �� ���������� ����������, ��� � ��������.');
@define('STYLE_OPTIONS_NONE', '���� ���� ���� ���������� �����. �� �� ������ ��� ������ ���� ���� �� ��� �����, ��������� ������������ ������������ �� www.s9y.org ������ "Configuration of Theme options".');
@define('STYLE_OPTIONS', '����� �� ������');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', '������� � ��������������� ���������, �������� �� ����� �������������');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', '�������� ���� ������');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', '�������� � �����');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', '���������� �� ����������� ���������');
@define('SAVE_CHANGES_TO_LAYOUT', '����� �� ��������� � ������������');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', '�������������� �� ������ ����� � ������� � �����������');
@define('SYNC_DONE', '������ (�������������� �� %s �����������).');
@define('RESIZE_BLAHBLAH', '<b>������� �� ��������� �� %s</b>');
@define('ORIGINAL_SIZE', '���������� �������: <i>%s&#215;%s</i> pixel');
@define('RESIZING', '������� �� ������');
@define('RESIZE_DONE', '������ (��������� �� ��������� �� %s �����������).');
@define('KEEP_PROPORTIONS', '��������� �� �����������');
@define('REALLY_SCALE_IMAGE', '������� �� ���, �� ������ �� ��������� �������? ����� ������������� �� ���� �� ���� ������������!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>��� ������ �� ��������� ������ ������� �� �������������. ��� ������ �� �������� ����������� ��, �������� �������� � ���� �� �������� � ��������� ������ TAB. ������� ���� �� ���� ��������� �����������, ���� �� �� �� ������ �����������.');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', '��� ������: ');
@define('SCALING_IMAGE', '��������� �� ������� �� %s �� %s&#215;%s �������');
@define('MEDIA_DIRECTORY_MOVED', '������������ � ��������� ���� ���������� ������� � %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', '������������ � ��������� �� ���� ���������� � %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', '��������� � ���������� <strong>%s</strong>.');
@define('PARENT_DIRECTORY', '��-����� ����������');
@define('CONFIRM_DELETE_DIRECTORY', '������� �� ���, �� ������ �� �������� ������ ���������� �� ������������ %s?');
@define('ERROR_NO_DIRECTORY', '������: ������������ %s �� ����������');
@define('ERROR_DIRECTORY_NOT_EMPTY', '�� ���� �� ���� ������� �������� ����������. �������� ��������� "������������ ���������", ��� ������ �� �������� � ������������, � ��������� �������� ������. �������������� ������� ��:');
@define('DIRECTORY_DELETE_FAILED', '������ ��� ��������� �� ������������ %s. ��������� ������� ��� ����������� ��-����.');
@define('DIRECTORY_DELETE_SUCCESS', '������������ %s � ������� �������.');
@define('CHECKING_DIRECTORY', '�������� �� ��������� � ������������ %s');
@define('DELETE_DIRECTORY', '��������� �� ����������');
@define('DELETE_DIRECTORY_DESC', '�� ��� ��� �� �������� ����������, ����� ������� ������� �������, ���� �� ���������� ��� ���� ������.');
@define('FORCE_DELETE', '��������� �� ������ ������� � ���� ����������, ����������� ����������� �� Serendipity');
@define('CREATE_DIRECTORY', '��������� �� ����������');
@define('CREATE_NEW_DIRECTORY', '��������� �� ���� ����������');
@define('CREATE_DIRECTORY_DESC', '��� ������ �� ��������� ���� ���������� �� ������� �� ������� �������. �������� ��� �� ������ ���� ����������, ����� � ���������� ����������, ������ �� �� ����� ������������.');
@define('ABOUT_TO_DELETE_FILE', '�� ��� ��� �� �������� <b>%s</b><br />��� ���������� ���� ���� � ����� �� ������ ������, ���� �� ���������� ������ ������ ��� �������� �����������<br />������� �� ���, �� ������ �� ����������?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', '������: ���� ���� ���� ����������!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', '�� ���� �� ���� ������ ������, ��������� <b>%s</b>. ���� �� ���� � ������?');
@define('ERROR_FILE_FORBIDDEN', '�� � ��������� �� ������� ������� � ������� ����������');
@define('REMOTE_FILE_NOT_FOUND', '������ �� � ������� �� ����������� ������, ������� �� ���, �� ������� <b>%s</b> � �����?');
@define('FILE_FETCHED', '%s � �������� ���� %s');
@define('FILE_UPLOADED', '������ %s � ������� ����� ���� %s');
@define('DELETE_FILE_FAIL', '�� ���� �� ���� ������ ����� <b>%s</b>');
@define('DELETE_FILE', '������ � �����, ��������� <b>%s</b>');
@define('FOUND_FILE', '������� � ��� ��� �������� ����: %s.');
@define('FILENAME_REASSIGNED', '����������� ���������� ���� ��� �� �����: %s');
@define('ERROR_FILE_EXISTS', '������: ������ ��� ���� �� ��������, �������� �����!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', '������ ������');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', '�������� ���� ��� ��: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', '�������� �� �����������...');
@define('THUMB_CREATED_DONE', '����������� � ���������.<br/>������.');
@define('THUMBNAIL_USING_OWN', '���������� �� %s ���� ���������, ������ ���� �� � � ����� �������.');
@define('THUMBNAIL_FAILED_COPY', '%s ���� ������ �� �������� ���� ���������, �� �� ������ ������ ��� ��������!');
@define('DELETE_THUMBNAIL', '������� � �����������, ���������� <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', '�������� ���������� ������ � ������ �� � �����. ���� �� ���������� �� ����� � ��-������ �� ���������� ����������� �� ������������ �� �������. ��������� ����� ��������� ��� ������������ ����� ���� php.ini, ���� �� �� ��������� ��-������ �������.');
@define('MEDIA_UPLOAD_SIZEERROR', '������: �� ������ �� ������� �������, ��-������ �� %s �����!');
@define('MEDIA_UPLOAD_DIMERROR', '������: �� ������ �� ������� �����������, ��-������ �� %s x %s �������.');
@define('HOTLINK_DONE', '������ � ������ ������.<br />������.');
@define('DELETE_HOTLINK_FILE', '������ � ������ ������� ����, ��������� <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', '�� ���� �� ���� ���������: "%s", ������: %s, ������ ���: %d');
@define('SKIPPING_FILE_EXTENSION', '���������� �� ����: �������� ���������� �� %s.');
@define('SKIPPING_FILE_UNREADABLE', '���������� �� ����: %s �� ���� �� �� �������.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', '������������ �� ������ ���������� �� ������ �������������');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', '���������� �� ��������� ������������.');
@define('I_WANT_BIG_IMAGE', '���������� �� ������ ����������� � ������������');
@define('I_WANT_NO_LINK', ' ��������� ���� �����������');
@define('I_WANT_IT_TO_LINK', '��������� ���� ��������� ��� ������� ����� �����:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', '�������� �� �����������');
@define('IMAGE_ALIGNMENT', '��������� �� �������������');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', '�������� �� �����������');
@define('MEDIA_TARGET', '��� (target) �� ���� ������');
@define('MEDIA_TARGET_JS', '�������� �������� (���� JavaScript, � ���������� �������)');
@define('MEDIA_ENTRY', '�������� �������');
@define('MEDIA_TARGET_BLANK', '�������� �������� (���� target=_blank)');
@define('YOU_CHOSE', '��� �������� %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', '��������� �� ������������� �� 90 ������� ������� �� ������������� �������');
@define('IMAGE_ROTATE_RIGHT', '��������� �� ������������� �� 90 ������� �� ������������� �������');
@define('MEDIA_RENAME', '������������ �� ���� ����');
@define('THUMBNAIL_SHORT', '����');
@define('ORIGINAL_SHORT', '����.');
@define('SORT_ORDER_NAME', '��� �� ����');
@define('SORT_ORDER_EXTENSION', '����������');
@define('SORT_ORDER_SIZE', '�������� �� �����');
@define('SORT_ORDER_WIDTH', '������ �� �������������');
@define('SORT_ORDER_HEIGHT', '�������� �� �������������');
@define('SORT_ORDER_DATE', '���� �� �������');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>�������� �� ���� ��� ����������� �� �����:</b><p>��� ������ �� ������� ������� � ����� ��� �� ������� ����� � �������, �������� �� �� ��������! ��� ������ ��������� �����������, <a href="https://images.google.com/" target="_blank">������� ����������� � Google</a>, ����� ��������� �� ������ ��. ����������� ����� �� ������� � ������� :)</p><p><b>�������� �����:</b></p><br/>');
@define('ENTER_MEDIA_URL', '�������� URL �� ���� �� ���������:');
@define('ENTER_MEDIA_UPLOAD', '�������� ����, ����� ������ �� ������:');
@define('SAVE_FILE_AS', '����� �� ����� ����:');
@define('STORE_IN_DIRECTORY', '����������� � �������� ����������: ');
@define('IMAGE_MORE_INPUT', '�������� �� ��� �����������');
@define('ENTER_MEDIA_URL_METHOD', '����� �� ���������:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', '���������: ��� �������� ������ ������ ��� �������, ������� ��, �� ����� ����� �� ���������� ������ ������ ��� ����� ��� �� ������ � ���. �������� ������ ���������� �� ���������� ������ �����������, ��� �� �� ����������� �������.');
@define('FETCH_METHOD_IMAGE', '��������� �� ������������� ��� ����� ������');
@define('FETCH_METHOD_HOTLINK', '������ ������ ��� ���� ������');
@define('GO_ADD_PROPERTIES', '������������ �� ��������� �� ��������');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', '������� �� ������� �� ���� �����������');
@define('MEDIA_DELETE', '��������� �� ���� ����');
@define('FILES_PER_PAGE', '������� � ��������');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '�� �� ������� �����������');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', '������ ����������');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', '����������� �� ��������');
@define('DIAGNOSTIC_ERROR', '���� ������� ������� ������ ��� ���������� ���������� �� ���:');
@define('FULL_COMMENT_TEXT', '��, � ����� ����� �� ���������');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', '��������� �� ������ �����');
@define('INSTALL_CAT_DB_DESC', '��� ������ �� �������� ������ ���������� �� ������ �����. Serendipity �� ������ �� ���, �� �� ���� �� ������');
@define('INSTALL_DBTYPE', '���');
@define('INSTALL_DBTYPE_DESC', '��� �� ������ �����');
@define('INSTALL_DBHOST', '����');
@define('INSTALL_DBHOST_DESC', '����� �� ��������, ������ � �������� �� ������ �����');
@define('INSTALL_DBUSER', '����������');
@define('INSTALL_DBUSER_DESC', '����� �� �����������, � ����� �� ���� ������������ ������ � ������ ���� �����');
@define('INSTALL_DBPASS', '������');
@define('INSTALL_DBPASS_DESC', '�������� �� ������ ����������');
@define('INSTALL_DBNAME', '��� �� ������ �����');
@define('INSTALL_DBNAME_DESC', '����� �� ������ ���� �����');
@define('INSTALL_DBPREFIX', '���������� �� ���������');
@define('INSTALL_DBPREFIX_DESC', '���������� �� ������� �� ���������, ����. serendipity_');
@define('INSTALL_DBPERSISTENT', '���������� �� ��������� ������');
@define('INSTALL_DBPERSISTENT_DESC', '���������� �� ���������� �� ��������� ������ ��� ������ �����. ��������� ������ <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">���</a>. ���� ���������� �� � ��������������');
@define('INSTAL_DB_UTF8', '����������� �� ������������� �� ��������� ��� ������ � MySQL ���� �����');
@define('INSTAL_DB_UTF8_DESC', '��������� �� MySQL. ������� \'��\' ��������� \'SET NAMES\', �� �� �������� ���������� �� ��������� � ������ �����. �������� ��� ��������� ���� �����, ��� ������� �������� ������� � ��������.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '������');
@define('INSTALL_CAT_PATHS_DESC', '������������ ������ ��� �������� ����� ����� � �������. �� ���������� ����������� ����� � ���� �� ������������!');
@define('INSTALL_FULLPATH', '����� ���');
@define('INSTALL_FULLPATH_DESC', '������� � ��������� ��� �� ������ ���������� �� Serendipity');
@define('INSTALL_UPLOADPATH', '��� �� ����������');
@define('INSTALL_UPLOADPATH_DESC', '������ �������� �� ������� �� ������ ���, ������ "������ ���" - ���������� "uploads"');
@define('INSTALL_RELPATH', '����������� ���');
@define('INSTALL_RELPATH_DESC', '����� �� Serendipity �� ����������, ���������� "/serendipity/"');
@define('INSTALL_RELTEMPLPATH', '����������� ��� �� ���������');
@define('INSTALL_RELTEMPLPATH_DESC', '����� �� ������� � ������� - ������ "����������� ���"');
@define('INSTALL_RELUPLOADPATH', '����������� ��� �� ����������');
@define('INSTALL_RELUPLOADPATH_DESC', '����� �� ������ ������ ������� �� ���������� - ������ "����������� ���"');
@define('INSTALL_URL', 'URL �� �����');
@define('INSTALL_URL_DESC', '������� URL �� ������ ���������� �� Serendipity');
@define('INSTALL_AUTODETECT_URL', '����������� ��������� �� ����������� HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', '��� � "��", Serendipity �� �� ���������, �� ����������� �� ���������� HTTP Host �� ���� ��������� ���� ����������� BaseURL. ������������ �� ���� �� ������� �� ����� ������� ������ ����� �� ����� ���� �� Serendipity � �� ���� ��������� ���������� ������ �� ������������ ������, ���������� �� ����� ����.');
@define('INSTALL_INDEXFILE', '�������� ����');
@define('INSTALL_INDEXFILE_DESC', '����� �� ����� �������� ���� �� Serendipity');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', '��������� ������');
@define('INSTALL_CAT_PERMALINKS_DESC', '���������� �� �������� ������� �� URL-� �� ���������� �� ��������� ������ �� �������� ��� ��������. ���������� �� �� �� ��������� ������������ ���������; ��� ��, ������ �� ������� �� ���������� �������� %id% ������ � ��������, �� �� ���� Serendipity �� �� ������� ������ �� ������ ����� �� ������� �� URL-�.');
@define('INSTALL_PERMALINK', '��������� �� ��������� ������ ��� ������');
@define('INSTALL_PERMALINK_DESC', '��� ������ �� ���������� ����������� ��������� �� URL ������ �������� URL, �������� �� ������� ��������. ������ �� ���������� ������������ %id%, %title%, %day%, %month%, %year% � ������ ����� �����.');
@define('INSTALL_PERMALINK_AUTHOR', '��������� �� ��������� ������ ��� �����');
@define('INSTALL_PERMALINK_AUTHOR_DESC', '��� ������ �� ���������� ����������� ��������� �� URL ������ �������� URL, �������� �� ������� �������� �� ��������� �����. ������ �� ���������� ������������ %id%, %realname%, %username%, %email% � ������ ����� �����.');
@define('INSTALL_PERMALINK_CATEGORY', '��������� �� ��������� ������ ��� ���������');
@define('INSTALL_PERMALINK_CATEGORY_DESC', '��� ������ �� ���������� ����������� ��������� �� URL ������ �������� URL, �������� �� ������� �������� �� ���������� ���������. ������ �� ���������� ������������ %id%, %name%, %parentname%, %description% � ������ ����� �����.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', '��������� �� ��������� ������ ��� ������ �� RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', '��� ������ �� ���������� ����������� ��������� �� URL ������ �������� URL, �������� �� ������� �������� �� ���������� ���������. ������ �� ���������� ������������ %id%, %name%, %description% � ������ ����� �����.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', '��������� �� ��������� ������ ��� ������ �� RSS �� �����');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', '��� ������ �� ���������� ����������� ��������� �� URL ������ �������� URL, �������� �� ������� ������ �� RSS �� ������ �����������. ������ �� ���������� ������������ %id%, %realname%, %username%, %email% � ������ ����� �����.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', '��� �� ������');
@define('INSTALL_PERMALINK_ARCHIVEPATH', '��� �� �����');
@define('INSTALL_PERMALINK_CATEGORIESPATH', '��� �� ���������');
@define('INSTALL_PERMALINK_AUTHORSPATH', '��� �� ������');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '��� �� ������� ������������ �� ���������');
@define('INSTALL_PERMALINK_DELETEPATH', '��� �� ��������� �� ���������');
@define('INSTALL_PERMALINK_APPROVEPATH', '��� �� ���������� �� ���������');
@define('INSTALL_PERMALINK_FEEDSPATH', '��� �� ������ �� RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', '��� �� �������� ���������');
@define('INSTALL_PERMALINK_ADMINPATH', '��� �� ��������������');
@define('INSTALL_PERMALINK_SEARCHPATH', '��� �� �������');
@define('INSTALL_PERMALINK_COMMENTSPATH', '��� �� �����������');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', '���� ���������');
@define('INSTALL_CAT_SETTINGS_DESC', '����������� �� ����������� �� Serendipity');
@define('INSTALL_USERNAME', '���������������� ���');
@define('INSTALL_USERNAME_DESC', '������������� ��� �� ��������������');
@define('INSTALL_PASSWORD', '���������������� ������');
@define('INSTALL_PASSWORD_DESC', '������ �� ��������������');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', '�������� ���');
@define('USERCONF_REALNAME_DESC', '������� ��� �� ������. ���� ��� �� ���� ������� �� ����������');
@define('INSTALL_EMAIL', '��. ����� �� ��������������');
@define('INSTALL_EMAIL_DESC', '��. ����� �� �������������� �� �����');
@define('INSTALL_SENDMAIL', '��������� �� ���� �� ��������������?');
@define('INSTALL_SENDMAIL_DESC', '������ �� �� ���������� ����, ������ �� ������� ��������� ��� ������ ������?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', '��� �� �����');
@define('INSTALL_BLOGNAME_DESC', '�������� �� ����� ����');
@define('INSTALL_BLOGDESC', '������� �� �����');
@define('INSTALL_BLOGDESC_DESC', '�������� �� ����� ����');
@define('INSTALL_BLOG_EMAIL', '���������� ����� �� �����');
@define('INSTALL_BLOG_EMAIL_DESC', '���� ��������� ����������� �����, ����� �� ���� ��������� � ������ "From" �� ����������� ����. ������� ��, �� �������� �����, ����� �� ���������� �� ��������� ������, ��������� � ��������� - ����� �������� ������� �������� ��������� � ���������� ����� From.');
@define('COMMENT_TOKENS', '���������� �� Tokens �� ���������� �� ���������?');
@define('COMMENT_TOKENS_DESC', '��� �� ��������� tokens, ����������� ����� �� �� ��������� ��� �������� ���� �������� �� ������ � e-mail, ��� ��������� �� ������� � ����� � ��� � ������. �������, �� ���� � ������, ��� ������ email ����� ���������, ����������� ����� �� ����� ���������� ��� ��������� ��� ������������ ���������������.');
@define('INSTALL_LANG', '����');
@define('INSTALL_LANG_DESC', '�������� ����� �� ����� ����');
@define('INSTALL_CHARSET', '����� �� �������� �� �����');
@define('INSTALL_CHARSET_DESC', '��� ������ �� ������������ ����� ������ �������� (ISO, EUC, ...) ��� UTF-8. ����� ����� ���� ���� ������ � UTF-8 � ���������� �� "������" ���� �� ��� �����. ���������� �� UTF-8 �� ���� ����������. �� ���������� ���� ���������, ��� ���� ����� ������ ��� ��������� ����� - ���� ���� �� ������ �� ��������� �����. ����� � �� ��������� ������ �� ���� ������� � https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', '��� ��������');
@define('INSTALL_CAL_DESC', '�������� �������� �� ��� ������ �� ��������');
@define('AUTOLANG', '���������� �� ������������� ���� �� ���������� ������ ��������');
@define('AUTOLANG_DESC', '��� � ����������, �� �� �������� ����������� �� ������� �� �������� �� ����������, �� �� �� �������� ������������� �� ���� �� ������ ������ � ����� �� ����������.');
@define('USERGROUPS_FORBIDDEN_ENABLE', '����������� �� Plugin ACL �� ������������� ����� ?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', '��� ������� "Plugin ACL �� ������������� �����" � ���������, �� ������ �� �������� ��� ������������� ����� ���� ������������ �� ���������� ������ ��������� � ��������� ���������.');
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
@define('INSTALL_CAT_DISPLAY', '������ � ���������');
@define('INSTALL_CAT_DISPLAY_DESC', '����������� ��� �� �������� Serendipity');
@define('INSTALL_FETCHLIMIT', '������ �� ��������� � �������� ����');
@define('INSTALL_FETCHLIMIT_DESC', '���� �� ��������, ����� �� �������� ��� ����� �������� �� �������� ����');
@define('INSTALL_RSSFETCHLIMIT', '���� ������ �� �������� �� ��������� � RSS ������');
@define('INSTALL_RSSFETCHLIMIT_DESC', '���� �� ��������, ����� �� ����� ��������� �� ����� �������� � RSS ������.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', '���������� �� �������� ������������ � RFC2616 RSS-������');
@define('SYNDICATION_RFC2616_DESC', '�������������� �� RFC2616 �����, �� ������ ������� GET ������ ��� Serendipity �� ������ ��������, ��������� ���� ������� �� ���������� ������. � �������������� �� \'��\' ������ ���������� �� ������� ������ ������ ���� ������� �������� ������, ����� ���� �� �� ��������� ���� ����� ����� �� ��������. ����� ����� ������ ���� Planet ��������, �������� �������. ��� ���� �� ������, ���� �� �� ������ � RFC2616. ���� ��, ��� ���������� ���� ����� �� \'��\', �� ������ ���������� � RFC2616, �� ���������� �� ������ RSS ������ ���� �� ��������� ������ �� ����� �� ������� ������� (���������). ������������ � � ����� ������ ��� ���� �� ��� �������� � ���������� ���� Planet, ��� �������������� �������� �� ����� ���� ���� �� ��������� ������. ��� ������� ���������� �� ����� �� ��������, ������ �� ����������� �������. �� �����������: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', '���������� �� ��������� gzip �� ��������');
@define('INSTALL_USEGZIP_DESC', '�� ���������� �� ���������� �� ��������, �� ���� �� �� ����������� ����� �� �� ��������, ��� ��������� �������� ����. ���� � ��������������.');
@define('INSTALL_XHTML11', 'Force XHTML 1.1 compliance');
@define('INSTALL_XHTML11_DESC', 'Do you want to force XHTML 1.1 compliance (may cause problems for back-/frontend on older 4th generation browsers)');
@define('INSTALL_POPUP', '���������� �� ���������� �� ��������� ��������');
@define('INSTALL_POPUP_DESC', '������ �� �� ���������� ��������� �������� �� ���������, ������������� � ��.?');
@define('INSTALL_EMBED', '������� �� � Serendipity?');
@define('INSTALL_EMBED_DESC', '��� ������ �� ��������� Serendipity � ���������� ��������, ����������� ���� ��������� � �������� �������� ���� �� ����� ���������, ��������� ���� ������������. ������ �� ���������� ����������� indexFile, �� �� ��������� �������� ����, ������ �� ������� ���������� �������� �� �����������. ��������� ����� README �� ������ ����������!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '��������� �� �������� ������?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"��": ������������� ������ ������ (�������� �� �������� � ���������, ��������� � ������������� ���������) ���� �� ����� ��������� ��� �� �� �������� ���� ��������� �����, ������ � ���������, �� �� �� ����������� ����� � Google (��������������). "��": ������������� ������ ������ �� ����� ��������� ���� ���������. ���� �� ���� �������� � ����������� �� ����������� ���������!');
@define('INSTALL_TRACKREF', '����������� �� ��������� ��������� �������� ?');
@define('INSTALL_TRACKREF_DESC', '������������� �� ��������� �� ��������� �������� �� �� ������� �� ������ ��� �������� ����� ��� ������ ������. ���������� � ���� �� ������������� (����), ���� �� ������ �� ��������� ���� �����, ��� �������.');
@define('INSTALL_BLOCKREF', '��������� ��������� ��������');
@define('INSTALL_BLOCKREF_DESC', '��� �� ���������� �������, ����� ������ �� �� ����� ��������� � ������� �� ����������� ��������? �� ���������� � ������� � ����� �� ������� ����������� ";" � �������, �� ��������� �� �������� ���� ���������� �� ������!');
@define('INSTALL_REWRITE', '������������ �� URL');
@define('INSTALL_REWRITE_DESC', '�������� ��� ������� ������ �� ���������� �� ���������� �� URL-�. ������������ �� �������������� ������� �� ������� URL-��� �� ����� ������� � �� ������� ����� ��-����� ���������� �� Google � ����� ��������. ��� �������� ������ �� �������� ��� mod_rewrite, ��� "AllowOverride All" �� ������ ���������� �� Serendipity. �������������� �� ��������� � ����������� ��������� ���� ���� �� �� ����� ������������');
@define('INSTALL_OFFSET_ON_SERVER_TIME', '���������� �� ��������� ���� �� �������?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', '�������� �� ������� �� �������� ������ ������� ��� ��. �������� \'��\' �� ���� ������� ��� �� �� ���� GMT.');
@define('INSTALL_OFFSET', '������� ���������� �� �������');
@define('INSTALL_OFFSET_DESC', '�������� ������������ ������ ����� ����� ��� ������ (����: %clock%) � �������� ������� ����');
@define('INSTALL_SHOWFUTURE', '��������� �� ������ � ��������');
@define('INSTALL_SHOWFUTURE_DESC', '��� � ����������, ������ ������ � ����� � �������� �� ����� ���������. �� ������������ ���� ������ �� ������� � �� �������� ���� ������ ������� �� ����������� �� �������.');
@define('INSTALL_ACL', '��������� �� ���������� �� ������ ��� ���������');
@define('INSTALL_ACL_DESC', '��� � ����������, ������������ �� ��������������� �����, ��������� �� �����������, �� ����� ��������� ��� ������ �����������, ����� ����� ����� ����. ��� � ������������, ������� �� ������ �� ��������� �� �� ��������, �� ������������� ����� �� ���� � ����� ���������� �� �����. ���� �� ��� �� �� �������� �� ������������������ ����� �� ������, ������������� ���� ����������.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', '��������� �� ������� ������ � ��������� ���� � �������� �� RSS');
@define('SYNDICATION_PLUGIN_BANNERURL', '����������� �� ������ �� RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL �� ����������� ��� ������ GIF, JPEG ��� PNG, ��� ��� ������ (������: ���� �� Serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '�������� �� �������������');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', '� �������, ����. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', '�������� �� �������������');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', '� �������, ����. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '��������� �� ��.������?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '���� "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', '��. ����� �� ���������, ��� ��� �����. (������: �����) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '���� "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', '��. ����� �� ���������� (������: �����) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', '���� "ttl" (����� �� �����)');
@define('SYNDICATION_PLUGIN_TTL_DESC', '���� ����� ������ ����� �� �� �� ���� ������� ������ �� ����� ������� (������: �����) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '���� "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', '������ �� �� ��� � ���� "pubDate" � ������ �� RSS, �� �� ������� ������ �� ���������� ������?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', '����������� �� ����������� �� �����������');
@define('INSTALL_CAT_IMAGECONV_DESC', '�������� �� ���� ���������� ��� Serendipity �� ��������� �����������');
@define('INSTALL_IMAGEMAGICK', '���������� �� Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', '����� �� instaliran image magick � ������ �� �� �� ���������� �� ������� �� ������� �� �����������?');
@define('INSTALL_IMAGEMAGICKPATH', '��� �� ���������� ���� convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', '����� ��� � ��� �� ���������� ���� convert �� image magick');
@define('INSTALL_THUMBSUFFIX', '�������� �� �����������');
@define('INSTALL_THUMBSUFFIX_DESC', '����������� �� ����� ��������� �� ������� �����: ��������.[��������].����������');
@define('INSTALL_THUMBWIDTH', '������ �� �����������');
@define('INSTALL_THUMBWIDTH_DESC', '�������� ���������� ������ �� ����������� ������������ ���������');
@define('INSTALL_THUMBDIM', '��������� ������ �� �����������');
@define('INSTALL_THUMBDIM_LARGEST', '���-�����');
@define('INSTALL_THUMBDIM_WIDTH', '������');
@define('INSTALL_THUMBDIM_HEIGHT', '��������');
@define('INSTALL_THUMBDIM_DESC', '���������, �� ����� �� ����� ���������� �����������. �� ������������ "' . INSTALL_THUMBDIM_LARGEST .  '" ���������� � ����� �������, ���� �� ���� ���� �� ����� �� �� ���� ��-����� �� ������������ ��������; "' . INSTALL_THUMBDIM_WIDTH . '" � "' .  INSTALL_THUMBDIM_HEIGHT . '" ����������� ���� �������� ������, �� ������� ���� �� ���� ��-����� �� ������������ ��������.');
@define('MEDIA_UPLOAD_SIZE', '���������� �������� �� ��������� �� �������');
@define('MEDIA_UPLOAD_SIZE_DESC', '�������� ������������ �������� �� �������� ������� � �������. ���� �������� ���� �� �� ���� �������� �� �������. � PHP.ini: upload_max_filesize, post_max_size, max_input_time ���� ��������� ��� ���� �����. ������ ������ ��� �������� �� �� ��������� ���� ������������� �� �������.');
@define('MEDIA_UPLOAD_MAXWIDTH', '���������� ������ �� ������������� �� �������');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', '�������� ������������ ������ �� � ������� �� �������������, ����� �� �� ������.');
@define('MEDIA_UPLOAD_MAXHEIGHT', '���������� �������� �� ������������� �� �������');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', '�������� ������������ �������� � ������� �� �������������, ����� �� �� ������.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', '����������� �� ��������� ������������� � ��������');
@define('ONTHEFLYSYNCH_DESC', '��� � ���������, Serendipity �� ������ ��������� ���� ����� � ���������, �������� �� ����� ������ � �� ������������ ������ ����� ��� ������������ �� ������������.');
@define('MEDIA_DYN_RESIZE', '����������� �� ��������� ������� �� ���������� �� ������������� ?');
@define('MEDIA_DYN_RESIZE_DESC', '��� � ���������, ��� �������� �� ������� ������� ���� �� ����� ������� ����������� � �������� ������� ���� ���������� GET. ����������� �� ������� � ���� �� �� �������� ����� ������� ��� ���������� ��������.');
@define('MEDIA_EXIF', '������� �� EXIF/JPEG ������� �� �������������');
@define('MEDIA_EXIF_DESC', '��� � ���������, �������������� EXIF/JPEG ��������� � ������������� �� ����� ��������� � �������� � ������ �����. ���� �� ��� ���������� �� ����� ��������� � ��������� � �����������.');
@define('MEDIA_PROP', '�������� �� ���������� �������');
@define('MEDIA_PROP_DESC', '�������� ������ �� ��������, ��������� � \';\', ����� ������ �� ���������� �� ����� ������ ����.');
@define('MEDIA_PROP_MULTIDESC', '(������ �� �������� ":MULTI" ���� ����� �� �������� �� �� �������, �� �� �� ������� ����� ����� ������ ���� ������� �������)');
@define('MEDIA_KEYWORDS', '������� ���� �� ��������� �������');
@define('MEDIA_KEYWORDS_DESC', '�������� ������ � ����, ��������� � \';\', ����� ������ �� ���������� ���� ������������� ���������� ������� ���� �� ��������� �������.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', '����� �����');
@define('USERCONF_CAT_PERSONAL_DESC', '��������� �� ������ ����� �����');
@define('USERCONF_USERNAME', '������������� ���');
@define('USERCONF_USERNAME_DESC', '��������������� ���, � ����� �� ������� � �����');
@define('USERCONF_PASSWORD', '������');
@define('USERCONF_PASSWORD_DESC', '��������, ����� ������ �� ���������� �� ������� � �����');
@define('USERCONF_CHECK_PASSWORD', '����� ������');
@define('USERCONF_CHECK_PASSWORD_DESC', '��� ������� �������� � ������� ����, ������ �� �������� �������� ������ � ���� ����.');
@define('USERCONF_USERLEVEL', '���� �� ������');
@define('USERCONF_USERLEVEL_DESC', '���� ���� �������� ����� ��� ������ �� ��� ����������� �� �����');
@define('USERCONF_GROUPS', '�������� � �����');
@define('USERCONF_GROUPS_DESC', '���� ���������� � ���� �� �������� �����. �������� �� ������� ��������.');
@define('USERCONF_EMAIL', '��. �����');
@define('USERCONF_EMAIL_DESC', '������ ����� ��. �����');
@define('INSTALL_WYSIWYG', '���������� �� �������� WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', '������ �� �� ���������� ��������� WYSIWYG?');
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
@define('USERCONF_SENDCOMMENTS', '����������� ��� �������� �� ��������?');
@define('USERCONF_SENDCOMMENTS_DESC', '������ �� �� ���������� ���� ��� �������� �� �������� ��� ����������� �� ��� ������?');
@define('USERCONF_SENDTRACKBACKS', '����������� ��� ������������?');
@define('USERCONF_SENDTRACKBACKS_DESC', '������ �� �� ���������� ���� ��� ������������ �� ����������� �� ��� ������?');
@define('USERCONF_CREATE', '������� �� ����������� / ������� �� �����������?');
@define('USERCONF_CREATE_DESC', '��� � ���������, ������������ ���� �� ��� ������� ����������� �� ����������� ��� ��������� �� ������� � �� ���� � �����. ������ ����� � ����������������� ��������, ������������ ���� �� ���� �� ����� ���� �����, ����� �� ������ ��� �� ���� ������ ���������� ������������.');
@define('USERCONF_ALLOWPUBLISH', '�����: ����������� �� ������?');
@define('USERCONF_ALLOWPUBLISH_DESC', '��������� �� � �� ���� ���������� �� ��������� ������?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', '��������� �� ������� � ������������� � ��������� �� ����� �� ������ ���� ?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', '������� ��������� �� ���� ������');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', '�������: ��������� �� ������������� ���� �� �������� ���� �� ������� ������������ � ��������� � ��������������. ������������ �� ������������� ���� �� ��������� ���� �������� � �����!');
@define('USERCONF_CHECK_PASSWORD_ERROR', '�� ��������� �������� ������� �� ������ � �� ��� ������������ �� ����� � ���� ������. ������ ��������� �� �� ��������.');
@define('USERCONF_CHECK_USERNAME_ERROR', '����� �� ����������� �� ���� �� ���� ������.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: ������ �� ����� ���������');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: ������� �� ������������� ����');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: ������� �� "������� �� ��������� �� ������"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: ������� �� ������� �� �� ���������� ������');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: ������ �� �������� ���������');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: ������ �� ��������� �� ����');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: �������������� �� ������');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: �������������� �� ������ �� ����� �����������');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: ������� �� ������');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: �������������� �� ���������');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: �������������� �� ����������� �� ���� ����������');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: ��������� �� ���������');
@define('PERMISSION_ADMINUSERS', 'adminUsers: �������������� �� �����������');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: ��������� �� �����������');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: ������� �� ������������� ����');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: �������������� �� �����������, ����� �� � ������ ����� ��� �����');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: �������������� �� �����������, ����� �� �� � ������ ����� ��� �����');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: ��������� �� ���� �����������');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: �������������� �� ����� �����������');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: �������������� �� ���������');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: �������������� �� ����������� �� ���� ����������');
@define('PERMISSION_ADMINIMAGES', 'adminImages: �������������� �� ������� �������');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: �������������� �� ������� ����������');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: �������� �� ������� �������');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: ��������� �� ������� �������');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: �������������� �� ��������� ������� �� ���� ����������');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: ������� �� ������� �������');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: �������������� �� ���������');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: �������������� �� ���������');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: �������������� �� �������');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: ������� �� ������� ������� �� ���� ����������');
@define('PERMISSION_FORBIDDEN_PLUGINS', '��������� ���������');
@define('PERMISSION_FORBIDDEN_HOOKS', '��������� �������');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', '�������� � ��������');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', '����������');
@define('COMMENTS_VIEWMODE_LINEAR', '��������������');
@define('DISPLAY_COMMENTS_AS', '��������� �� �����������:');
@define('COMMENTS_DISABLE', '����������� �� ����������� ��� ���� ������');
@define('COMMENTS_ENABLE', '����������� �� ����������� ��� ���� ������');
@define('COMMENTS_CLOSED', '������� � �������� ����������� ��� ���� ������');
@define('VIEW_EXTENDED_ENTRY', '��� ������ ����������');
@define('TRACKBACK_SPECIFIC', 'URI �� ������������ �� ���� ������');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', '������ ������');
@define('VIEW_TOPICS', '������ ����������');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', '�������� ��');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', '����� ������ �� ������ �� ����� ��������!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', '��������� �� ������������? ');
@define('SUBMIT_COMMENT', '�������� �� ��������');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', '��������� �� ���� ������');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', '������ ������� �� ������� �������� ��� Referrer �� HTTP. ���� ���� �� � ������������ ��� �� ���������� �������� �������/������, ��� �� ������������ ������������ �� ������ (Cross Site Request Forgery - XSRF), ��������� ��� ���. ����������, ����� ��� �������, �� ���� �� ���� ���������.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', '�������� �&#160;%s �������� ���� � �������');
@define('COMMENT_EDITED', '��������� �������� � ����������');
@define('COMMENTS_WILL_BE_MODERATED', '���������� ��������� �� ����� ����� �� ��������� ����� �� ����� ���������.');
@define('THIS_COMMENT_NEEDS_REVIEW', '��������: ���� �������� �� ������ �� ��������� ����� �� ���� �������');
@define('DELETE_COMMENT', '��������� �� ��������');
@define('APPROVE_COMMENT', '���������� �� ��������');
@define('REQUIRES_REVIEW', '��������� �� �������');
@define('COMMENT_APPROVED', '�������� �&#160;%s � ������� �������');
@define('COMMENT_DELETED', '�������� �&#160;%s � ������ �������');
@define('COMMENTS_MODERATE', '����������� � ��������������� �� ���� ������ �������� ���������');
@define('THIS_TRACKBACK_NEEDS_REVIEW', '��������: ���� ������������ ������� ��������� ����� �� ���� ���������');
@define('DELETE_TRACKBACK', '��������� �� ������������');
@define('APPROVE_TRACKBACK', '���������� �� ������������');
@define('TRACKBACK_APPROVED', '������������ �&#160;%s � �������� �������');
@define('TRACKBACK_DELETED', '������������ �&#160;%s � ������� �������');
@define('COMMENT_NOTOKENMATCH', '�������� � � ������� ���� ��� �������� #%s ���� � ��� ������� ��� ������');
@define('TRACKBACK_NOTOKENMATCH', '�������� � � ������� ���� ��� �������������� #%s ���� � ���� �������� ��� �������');
@define('BADTOKEN', '��������� ������ �� ���������');
@define('TOP_LEVEL', '�����');
@define('VIEW_COMMENT', '������� �� ��������');
@define('VIEW_ENTRY', '������� �� ������');
@define('LINK_TO_ENTRY', '������ ��� ������');
@define('LINK_TO_REMOTE_ENTRY', '������ ��� ���������� ������');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', '��������� �� pingback ��� URI %s...');
@define('PINGBACK_SENT', '������� pingback');
@define('PINGBACK_FAILED', '��������� pingback: %s');
@define('PINGBACK_NOT_FOUND', '�� � ������� pingback-URI.');
@define('TRACKBACK_SENDING', '��������� �� ������������ ��� URI-�� %s...');
@define('TRACKBACK_SENT', '�������������� � �������');
@define('TRACKBACK_FAILED', '������ ��� ������������: %s');
@define('TRACKBACK_NOT_FOUND', '�� � ������ URI �� ������������.');
@define('TRACKBACK_URI_MISMATCH', '����������� ��������� ������������ � URI �� ������� � ������ ������ URI.');
@define('TRACKBACK_CHECKING', '�������� �� <u>%s</u> �� �������� �������������...');
@define('TRACKBACK_NO_DATA', '����� �� ������� �����');
@define('TRACKBACK_COULD_NOT_CONNECT', '�� � ��������� ������������: �� ���� �� ���� ���������� ������ � %s �� ���� %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "��������� %s,\n\n��� ��� ������� �� ���������� �������� �� ���� ��������� ��� \"%s\" (<%s>). �� �� ���������� ���������� (\"Double Opt In\") ���� �������� ���� ������:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "��������� %s,\n\n��� ��� ��������(�) ��� ��������  �� \"%s\". ������ �������� �:\n\n%s\n\n������������ �� ����� � ������� e-mail �����������, ���� �� ��� ������ �� �������� ���������� ������, �� �� ������������ ����� ��������:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "��������� %s,\n\n��� ��� ��������(�) ��� ��������  �� \"%s\". ������ �������� �:\n\n%s\n\n������������ �� ����� � ������� ���������� e-mail �����������, ���� �� ��� ������ �� �������� ���������� ������, �� �� ������������ ����� ��������:\n<%s>\n\n���� ���� ��������� ����, ��� ������ �� ��������� ��������� � ���� ���� � ������ ��� � e-mail ����� ��� �� ���������� �������� ���� ����.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', '��� �������� ��� ��������� ������ "%s"');
@define('SUBSCRIPTION_MAIL', "������� %s,\n\n������� � ��� �������� ��� ��������, ����� ����������� \"%s\", ��������� \"%s\"\n����������: %s\n\n������ �� �������� ������������ ���: %s\n\n������ �� �� ��������, ��������� �� �������� ������: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "������� %s,\n\n�������� � ���� ������������ ��� ��������, ����� ����������� � \"%s\", ���������� \"%s\"\n���������: %s\n\n������ �� �������� ������������ ���: %s\n\n������ �� �� ��������, ��������� �� �������� ������: %s\n");
@define('SIGNATURE', "\n-- \n%s �� ����� �� Serendipity.\n���-������� ����, ������ �� �� ���������� � ���.\n�������� <https://s9y.org> �� �����������.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', '������� � ��� �������� ��� ����� ���� "%s", ��� �������� "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', '�������� � ���� ������������ �� �������� "%s".');
@define('YOU_HAVE_THESE_OPTIONS', '����� �� ������������ �������� �����������:');
@define('NEW_TRACKBACK_TO', '���� ������������ ��');
@define('NEW_COMMENT_TO', '��� �������� ���������� ��');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', '���� �������� ��������� �� %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', '��������� �� %s ����� %s ���������:');
@define('SEARCH_TOO_SHORT', '������ ������� ������ ������ �� � ������ �� 3 �����. ������ �� ������� �� �������� * ��� ��-�������� ����, �������� s9y*, �� �� �������� ��������� �� �������� ��-������ ����.');
@define('SEARCH_ERROR', '��������� �� ������� �� ������� ������ �����������. ������� �� �������������� �� ���� ����: ��������� ���� �� � � �������� ������� � ������ �����. � �������� MySQL, ������ ������ �� ��������� � ������ ����� ������ �� ���� ��������������, �� �� ������� �������� ������:: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> ����������� ������, ������� �� ������ �����, �: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', '���������� �� �� � ������, ����, %s������� ��%s � ��������� ������');
@define('COMMENT_NOT_ADDED', '�� ������ �� �������� ��������, ������ �� ��������� ����������� ��� ���� ������ ��� ��� ������ ��������� ����� ��� ������ �������� � ����� �� ����-���� ��������.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', '��������� ��');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', '������ ������������ �� ��������� ���� ������ �������.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', '������ ������������ �� ��������� �� � ����������.  ���� ��������� ��������, ����� ��� �������. ��� �������� � ���� ��������� ����� ������ �� ��� �������, ��� ������ �� ��������� ������ �������� ������.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', '������ ������������ �� ��������� �� �������� �� ��������� ���� ������ �������.');

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
@define('PLUGIN_API_VALIDATE_ERROR', '����������� �� ��������� � ������� �� ����� "%s". ������ �� ���������� �� ��� "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', '��������� ������� �� �����������.');
@define('CATEGORIES_PARENT_BASE', '��������� ���� �� ����������� �� ��-����...');
@define('CATEGORIES_PARENT_BASE_DESC', '������ �� �������� ���������� ���������, ���� �� ���� ����������� ��������� �� �� �������.');
@define('CATEGORIES_HIDE_PARALLEL', '�������� �� �����������, ����� �� �� ���� �� ������� �� ���������');
@define('CATEGORIES_HIDE_PARALLEL_DESC', '��� ������ �� ������� �����������, ����� �� ���� �� �������� ����� ���������, ������ �� �������� ���� ����������. ���� �������� � ���-��������, ��� �� �������� ��� ������ � �������� ����, ����������� ����������� "��������/������� �� ���������".');
@define('CATEGORIES_HIDE_PARENT', '�������� �� ��������� ���������� ��������� ?');
@define('CATEGORIES_HIDE_PARENT_DESC', '��� ���������� ����������� �� ������ ���� �� ���������� ���������, �� ������������ �� �� ����� ������������ ���������. ��� ��������� ���� ����������, ������������ ��������� ���� �� �� �������.');
@define('CATEGORY_PLUGIN_TEMPLATE', '���������� �� ������� Smarty?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', '��� ���� ����� � ����������, ����������� �� �������� ������������� �� ��������� Smary �� ��������� �� ������� � ���������. ��� ���������� ����, ������ �� ��������� ������������ ���� ��������� ���� "plugin_categories.tpl". ������������ �� ���� ����� �� ���������� �� ������������������, ���� �� ��� ������ ����� �� ���������������, �������� � ������������.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', '��������� �� ���� �� �������� � ���������?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', '����������� �� ������������ �� �������� ������� ��������� ��������?');
@define('CATEGORIES_ALLOW_SELECT_DESC', '��� �� �������� ���� �����, �� ���� ��������� ������� �� ����� ��������� � ���� ��������� ���������. ������������� �� ����� �� ������� ���� ������� � �� ������ ��������, ����� ��������� �� ������ �����.');
@define('CATEGORIES_TO_FETCH', '��������� �� ���������');
@define('CATEGORIES_TO_FETCH_DESC', '��������� ����������� �� ��� �����?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', '��������� �� ������ �� ������');
@define('AUTHORS_SHOW_ARTICLE_COUNT', '��������� �� ���� �� �������� �� ����� �� ������?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', '��� ���� ����� � ����������, ����� �� �������� �� ���� ����� �� ���� ������� �� ����� �� ������ � �����.');
@define('PLUGIN_AUTHORS_MINCOUNT', '��������� ���� �� ������ � ���-����� X ������');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', '������');
@define('SHOWS_RSS_BLAHBLAH', '��������� �� �������� ��� RSS ������');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '������ %s');
@define('SYNDICATION_PLUGIN_091', '������ �� RSS 0.91');
@define('SYNDICATION_PLUGIN_10', '������ �� RSS 1.0');
@define('SYNDICATION_PLUGIN_20', '������ �� RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', '������ �� RSS 2.0 � ���������');
@define('SYNDICATION_PLUGIN_ATOM03', '������ �� Atom 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', '��� �� ��������');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', '�������� ��� �� �������� (�� ������������ "feed", ������ � ������)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', '��� �� �������� �� �����������');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', '�������� ��� �� �������� �� �����������');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', '������������� �� FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', '��������������� �� ��������, ����� ������ �� �����������');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', '����������� �� FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', '��� �� �����������, ����� �� �� ������� (��� �������� ������ �� �����), ����������� �� feedburner.com, ��������: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', '�������� �� FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', '�������� (��� ���), ����� �� �� ������� ������ � �������������');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', '����� �� ����������� �� FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', '����� (��� ���), ����� �� �� ������� ��� ��������� �� ������� ����� �������������');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', '�������� �� �������� ��� ��������, ������ ���� ������ � �������� ������ �� ����� (������� ����������� �� ��������)');
@define('ARCHIVE_COUNT', '���� �� ���������� � �������');
@define('ARCHIVE_COUNT_DESC', '������ ���� �� ��������, ��������� ��� �����, ����� �� ����� ���������');
@define('ARCHIVE_FREQUENCY', '���������� �������');
@define('ARCHIVE_FREQUENCY_DESC', '�������� �� ���������, ����� �� �� �������� ����� ���������� � �������');
@define('BROWSE_ARCHIVES', '����������� �� ������ �� �����');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', '��������� �� "Serendipity" ���� �����');
@define('POWERED_BY_SHOW_TEXT_DESC', '��������� �� "Serendipity Weblog" ���� �����');
@define('POWERED_BY_SHOW_IMAGE', '��������� �� "Serendipity" ���� ����');
@define('POWERED_BY_SHOW_IMAGE_DESC', '��������� �� ������ �� Serendipity');
@define('ADVERTISES_BLAHBLAH', '����������� �� ��������� �� �����');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', '���������� �� https �� �������');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', '�������� ��� ���������� �� ������� �� � ����� � https. ������ ��� �������� �� �� ��������!');
@define('SUPERUSER', '�������������� �� �����');
@define('SUPERUSER_OPEN_ADMIN', '��������������');
@define('SUPERUSER_OPEN_LOGIN', '����� �� �������');
@define('ALLOWS_YOU_BLAHBLAH', '��������� ������ � ����������� ����� ��� �������������� �� �����');

/* PLUGIN_CALENDAR */
@define('CALENDAR', '��������');
@define('CALENDAR_BOW_DESC', '����� �� ���������, ����� �� ���� ������ �� ������ �� ���������. �� ������������ � ����������');
@define('QUICKJUMP_CALENDAR', '�������� �� ��������� � �����');
@define('CALENDAR_BEGINNING_OF_WEEK', '������ �� ���������');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', '���������� �� API �� ���� �� ���������');
@define('CALENDAR_EXTEVENT_DESC', '��� �� ��������, ����������� �� ����� �� �� ������� ��� ��������� � �� �������� ������� ������� ���� ��������. ����������� ���� ��� ����� ����������� ���������, ����� �������� ������ ����, ����� ���� �� �������� ������������������.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', '������� � ��������');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', '������� �� ���� �� HTML � ����������� �����');
@define('THE_NUGGET', '���� �� HTML!');
@define('BACKEND_TITLE', '������������ ���������� � ������ � ����������� �� �����������');
@define('BACKEND_TITLE_FOR_NUGGET', '��� ������ �� ���������� ��������� ������, ����� �� �� �������� � ������ � ��������� �� ��������� ������ � ���������� �� ����������� ���� �� HTML. ��� ����� ������� ������� �� HTML � ������ ��������, ���� ������ �� ����������� �� ����������� ���� �� �����.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', '��������� �� ���������� � ����������� � ���������� ���� ������?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"��": ���������� � ����������� ������ �� �������� ���� ��������� �����, �� �� ������������ ����� � Google. "��": ���������� � ����������� ������ �� �������� ���� ���������. "����������": ���������� �� ���������� ��������� (��������������).');
@define('HAVE_TO_BE_LOGGED_ON', '������ �� �������, �� �� ������ ���� ��������:');
@define('WELCOME_TO_ADMIN', '����� ����� � ����������������� �������� �� Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', '������ �����������');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(��� �������� ��������� URL � http://... ���, ���� URL �� ���� ��������� �� ������������ � ������, �� ��� ��������� ����� "Force" �� FeedBurner. ����������, �� ���� URL ���� �� � ��������� �� FeedBurner. �� ���� Google FeedBurner ������, ������ �� �������� ��� http://feeds2.feedburner.com/yourfeedname)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', '��� ���������� ���� ����� �� "Force", �� ������ �� ������������ RSS �������� ��� ����� webservice, �� ���� ��� FeedBurner. ����� ������� "Feedburner ID" ��-���� �� �� �������� ��������� URL)');
@define('MEDIA_PROPERTY_COMMENT1', '������ ��������');
@define('MEDIA_PROPERTY_COMMENT2', '����� ��������');
@define('DELETE_SELECTED_ENTRIES', '��������� �� ��������� ������');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', '���');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ��� �� � ����������. ����, <a href="%s">������������</a> �� ����.');
@define('COMMENT_ADDED_CLICK', '�������� %s���, �� �� �� �������%s ��� ���������, � %s���, �� �� ���������%s ���� ��������.');
@define('COMMENT_NOT_ADDED_CLICK', '�������� %s���, �� �� �� �������%s ��� ���������, � %s���, �� �� ���������%s ���� ��������.');
@define('MEDIA_PROPERTY_RUN_LENGTH', '��������������� (�� ����� � ����� �������)');
@define('MEDIA_PROPERTY_DATE', '���������� ����');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL �� ������������ ���������� � ������� � %s ������.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', '��� ��-MySQL ���� �����, ������������� ���� ����� ������ �� ������ �� URL �� ������� ���������� � ���� URL (�� ������ ����������) �� � ��������. ������ �� ����������� ������ ������ �����, �� �� ��������� ������ URL. ��� ��� � �������� �� ���������� ������ ����� ���������� ������� ���, ������ � ����, ��� ������� ������ � ������������� �� ���.');
@define('TRACKBACK_SIZE', '�������� URI ��������� ������������ �������� �� ���� �� %s �����.');
@define('CLICK_FILE_TO_INSERT', '�������� �����, ����� ������ �� ��������:');
@define('SELECT_FILE', '�������� ���� �� ��������');
@define('MANAGE_IMAGES', '���������� �� �����������');
@define('WORD_NEW', '���');
@define('WORD_OR', '���');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', '������ ����: ������ ������');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', '������ ����: ��������');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', '������ ����: ����� ������');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', '������ ����: �������');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', '������ ����: �� ������');
@define('PLUGIN_GROUP_BACKEND_EDITOR', '������ ����: ��������');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', '������ ����: ���������� �� �����������');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', '������ ����: ��������������');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', '������ ����: �������');
@define('PLUGIN_GROUP_BACKEND_FEATURES', '������ ����: ��������');
@define('PLUGIN_GROUP_IMAGES', '�����������');
@define('PLUGIN_GROUP_ANTISPAM', '��������');
@define('PLUGIN_GROUP_MARKUP', '������');
@define('PLUGIN_GROUP_STATISTICS', '����������');
@define('IMPORT_WELCOME', '����� ����� � ����������� �� ������� �� Serendipity');
@define('USER_SELF_INFO', '������ ��� ���� %s (%s)');
@define('IMPORT_WHAT_CAN', '��� ������ �� ������� ������ �� ���� ������� �� ��������');
@define('IMPORT_SELECT', '����, �������� ��������, �� ����� ������ �� �������');
@define('MANAGE_STYLES', '������� �� ������������');
@define('SELECT_A_PLUGIN_TO_ADD', '�������� ���������, ����� ������ �� �����������');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', '������ �� ������������� ���������');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', '���������� �� ���������� ����');
@define('DELETE_SELECTED_COMMENTS', '��������� �� ������������ ���������');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', '������� �� �����');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', '������: ������� ��� �� ����������!');
@define('ERROR_SOMETHING', '������: ���� �� � �����.');
@define('DIRECT_LINK', '����� ������ ��� ���� ������');
@define('SELECT_TEMPLATE', '�������� �� ������, ����� �� �� �������� �� �����');
@define('DATABASE_ERROR', '������ Serendipity: �� ���� �� ���� ���������� ������ � ������ ����� - ��������.');
@define('LIMIT_TO_NUMBER', '����� �������� �� ����� ���������?');
@define('DIRECTORIES_AVAILABLE', '� ������� �� ��������� ������������� ������ �� �������� ����� ����� ��� �� ����������, �� �� ��������� ���� ���������� � ���� ���������.');
@define('CATEGORY_INDEX', '��-���� ��� ������ �� �����������, ������� �� ������ ������');
@define('PAGE_BROWSE_PLUGINS', '�������� %s �� %s, ���� %s ���������.');
@define('CHARSET_NATIVE', '������');
@define('XMLRPC_NO_LONGER_BUNDLED', '����������� XML-RPC ��� Serendipity ���� �� �� �������������� ��� Serendipity ������ ������������ �������� ��� ����������, ����� � ������ ����� ���� �� �������. ������ ������ �� ����������� ����������� XML-RPC, �� �� ���������� XML-RPC. URL-�� �� �������� �� ���������� ���� �� �� ������� - ������� ���� ����������� �� ����������� �� ������ ������ �� ���������� API-��.');
@define('AUTHORS_ALLOW_SELECT', '����������� �� ������������ �� ������ ������� ������ ������������?');
@define('AUTHORS_ALLOW_SELECT_DESC', '��� ���� ����� � ����������, �� ���� ��������� ������� �� ����� ����� � ���� ��������� ���������. ������������ �� ����� �� ������� ���� ������� � �� ������ ��������, ����� ��������� �� ������� ����������.');
@define('PREFERENCE_USE_JS', '����������� �� ���������� ���������� �� JavaScript ?');
@define('PREFERENCE_USE_JS_DESC', '��� � ��������� ���������� ���������� �� JavaScript, ����� ����� �� Serendipity �� ����� � ��������� ��������������. �������� ��� ��������������� �� ����������� ����� �������� ������������ �� drag-and-drop �� ������������ �� �����������.');
@define('PREFERENCE_USE_JS_WARNING', '(���� �������� �������� JavaScript. ��� ����� ��������, ���� ��������� ������������ ���������� �� JavaScript ��� ������ ���������� ������������ ��� ��������� JavaScript � ��������.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
