<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translated by
# (c) 2006 Aphonex Li <aphonex.li@gmail.com> 
#          http://www.cexten.com  
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'gb2312');
@define('SQL_CHARSET', 'gb2312');
@define('DATE_LOCALES', 'zh_CN.GB2312, cn, zh, zh_GB, zh_CN');
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
@define('TYPE', '����');
@define('PREVIEW', 'Ԥ��');
@define('DATE', '����');
@define('TIME', 'Time');
@define('APPEARANCE', '��Ҫ����');
@define('LOGIN', '����');
@define('LOGOUT', '�ǳ�');
@define('LOGGEDOUT', '�ǳ���');
@define('CREATE', '����');
@define('BACK', '����');
@define('FORWARD', 'ǰ��');
@define('ANONYMOUS', '����');
@define('RECENT', '���Ŀ�...');
@define('OLDER', '���Ŀ�...');
@define('DONE', '���');
@define('TITLE', '����');
@define('DESCRIPTION', '���');
@define('PLACEMENT', '��ַ');
@define('DELETE', 'ɾ��');
@define('SAVE', '����');
@define('UP', '��');
@define('DOWN', '��');
@define('PREVIOUS', '��һҳ');
@define('NEXT', '��һҳ');
@define('ENTRIES', '���¹���');
@define('CATEGORIES', '������');
@define('NAME', '����');
@define('EMAIL', '����');
@define('HOMEPAGE', '��ַ');
@define('COMMENT', '�ظ�');
@define('VIEW', '���');
@define('HIDE', '����');
@define('WEEK', '��');
@define('WEEKS', '��');
@define('MONTHS', '��');
@define('DAYS', '��');
@define('DEBUG', 'Debug');
@define('SUCCESS', '���');
@define('COMMENTS', '�ظ�');
@define('ADD_COMMENT', '�����ظ�');
@define('NO_COMMENTS', 'û�лظ�');
@define('POSTED_BY', '����');
@define('ON', '��');
@define('NO_CATEGORY', 'û�����');
@define('CATEGORY', 'ȫ�����');
@define('EDIT', '�༭');
@define('GO', '����');
@define('YES', '��');
@define('NO', '��');
@define('NOT_REALLY', '����...');
@define('DUMP_IT', 'ɾ��');
@define('IN', '����');
@define('AT', 'ʱ��');
@define('LEFT', '��');
@define('RIGHT', '��');
@define('CENTER', 'center');
@define('ARCHIVES', '���¹鵵');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', '������Ѱ');
@define('TRACKBACKS', '����');
@define('TRACKBACK', '����');
@define('NO_TRACKBACKS', 'û������');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'ժҪ');
@define('TRACKED', '����');
@define('USER', '����');
@define('USERNAME', '�ʺ�');
@define('PASSWORD', '����');
@define('HIDDEN', '����');
@define('IMAGE', 'ͼƬ');
@define('VIDEO', 'Video');
@define('AUTHOR', '������');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', '�汾');
@define('INSTALL', '��װ');
@define('REPLY', '�ظ�');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', '����');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'ǿ��');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', '��Ҫ�趨');
@define('ADMIN_FRONTPAGE', '��ҳ');
@define('QUOTE', '����');
@define('NONE', 'None');
@define('GROUP', 'Ⱥ��');
@define('AUTHORS', '����');
@define('UPGRADE', '����');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'ȫ������');
@define('PREVIOUS_PAGE', '��һҳ');
@define('NEXT_PAGE', '��һҳ');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'ȫ�����');
@define('LAST_UPDATED', '������');
@define('IP_ADDRESS', 'IP ��ַ');
@define('CHARSET', '����');
@define('REFERER', '��Դ');
@define('APPROVE', '���');
@define('NOT_FOUND', '�Ҳ���');
@define('WRITABLE', '�ɶ�д');
@define('NOT_WRITABLE', '���ɶ�д');
@define('WELCOME_BACK', '�ǳ����˼�����,');
@define('USE_DEFAULT', 'Ԥ��');
@define('SORT_BY', '����');
@define('SORT_ORDER', '����');
@define('SORT_ORDER_ASC', '��������');
@define('SORT_ORDER_DESC', '�ݼ�����');
@define('FILTERS', '����');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', '�л�չ��');
@define('TOGGLE_OPTION', '�л�ѡ��');
@define('IN_REPLY_TO', '�ظ���');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Ŀ¼');
@define('BACK_TO_BLOG', '��վ��ҳ');
@define('HTML_NUGGET', 'HTML ��Ϣ');
@define('TITLE_FOR_NUGGET', '��Ϣ����');
@define('COMMENT_ADDED', '��Ļظ��ѳɹ���� ');
@define('ENTRIES_FOR', '���¸� %s');
@define('NO_ENTRIES_TO_PRINT', 'û������');
@define('COMMENT_DELETE_CONFIRM', 'ȷ��Ҫɾ���ظ� #%d, �������� %s��');
@define('DELETE_SURE', 'ȷ��Ҫɾ�� #%s ��');
@define('MEDIA_FULLSIZE', '�����ߴ�');
@define('SIDEBAR_PLUGIN', '�������');
@define('EVENT_PLUGIN', '�¼����');
@define('PLUGIN_ITEM_DISPLAY', '����Ŀ����ʾ��ַ');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'ֻ�ڸ�������ʾ');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'ֻ�ڿ������ʾ');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '��Զ��ʾ');
@define('DIRECTORY_WRITE_ERROR', '���ܶ�д�ļ��� %s������Ȩ�ޣ�');
@define('FILE_WRITE_ERROR', '�޷���д�ļ� %s��');
@define('INCLUDE_ERROR', 'serendipity ����: �޷����� %s - �˳���');
@define('DO_MARKUP', 'ִ�б��ת��');
@define('GENERAL_PLUGIN_DATEFORMAT', '���ڸ�ʽ');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', '���µ����ڸ�ʽ, ʹ�� PHP �� strftime() ����. (Ԥ��: "%s")');
@define('APPLY_MARKUP_TO', '���ñ�ǵ� %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML ��ť');
@define('XML_IMAGE_TO_DISPLAY_DESC', '���ӵ� XML Feeds �Ķ��������ͼƬ��ʾ. ����д����ʹ��Ԥ���ͼƬ, ������ \'none\' �ر�������ܡ�');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'ɾ���ļ� %s...');
@define('SETTINGS_SAVED_AT', '���趨�Ѿ������浽 %s');
@define('INVERT_SELECTIONS', '����ѡ');

@define('PERSONAL_SETTINGS', '��������');
@define('DO_MARKUP_DESCRIPTION', '�����Զ�����ʽ�������� (����, ���� *, /, _, ...)���ر�����ܽ��ᱣ���κ������ڳ��ֵ� HTML �﷨��');
@define('BASE_DIRECTORY', '����Ŀ¼');
@define('PERM_READ', '��ȡȨ��');
@define('PERM_WRITE', 'д��Ȩ��');
@define('PERM_DENIED', 'Ȩ�޾ܾ�');
@define('CURRENT_AUTHOR', 'Ŀǰ������');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity ��װ����');
@define('WELCOME_TO_INSTALLATION', '��ӭʹ�� Serendipity �������İ�');
@define('FIRST_WE_TAKE_A_LOOK', '����ϵͳ������������Ա��ⰲװ����');
@define('ERRORS_ARE_DISPLAYED_IN', '������ʾ %s, ���� %s ������� %s');
@define('RED', '��');
@define('YELLOW', '��');
@define('GREEN', '��');
@define('PRE_INSTALLATION_REPORT', 'Serendipity Blog v%s ��װǰ����');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP ��װ');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'ϵͳ����');
@define('WEBSERVER_SAPI', '���� SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini ����');
@define('RECOMMENDED', '����');
@define('ACTUAL', 'ʵ��');
@define('PERMISSIONS', 'Ȩ��');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Ȩ�޿���ʹ������� shell ��ִ��: `<em>%s</em>` Ȼ��ִ��Ҫ���ĵ��ļ���, ��ʹ�� FTP ���');
@define('PROBLEM_DIAGNOSTIC', '��Ϊ�����������,�������������˲��ܰ�װ��');
@define('SELECT_INSTALLATION_TYPE', '��ѡ��װ����');
@define('RECHECK_INSTALLATION', '���¼�鰲װ����');
@define('SIMPLE_INSTALLATION', '���ٰ�װ');
@define('EXPERT_INSTALLATION', '�߼���װ');
@define('COMPLETE_INSTALLATION', '������װ');
@define('WONT_INSTALL_DB_AGAIN', '�����ظ���װ���ݿ�');
@define('THEY_DO', 'ͨ��');
@define('THEY_DONT', 'they don\'t');
@define('CHECK_DATABASE_EXISTS', '��������Ƿ����');
@define('CREATE_DATABASE', '����Ԥ�����ݿ���趨...');
@define('ATTEMPT_WRITE_FILE', '��д %s �ļ�...');
@define('CREATING_PRIMARY_AUTHOR', '�趨����Ա \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', '�趨����');
@define('INSTALLING_DEFAULT_PLUGINS', '��װԤ�趨���');
@define('SERENDIPITY_INSTALLED', 'Serendipity�������İ氲װ���');
@define('VISIT_BLOG_HERE', '��ʼ�����Ĳ���');
@define('THANK_YOU_FOR_CHOOSING', '�ǳ���л��ѡ�� Serendipity�������İ�');
@define('ERROR_DETECTED_IN_INSTALL', '��װʱ��������');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', '��վ��Ϣ');
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'һ������');
@define('USERLEVEL_CHIEF_DESC', '����');
@define('USERLEVEL_ADMIN_DESC', '����Ա');
@define('WWW_USER', '��ı� www ��ʹ���ߵ� Apache (i.e. nobody)��');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', '�ļ��� %s ������Ҳ�޷����������Լ���������ļ��У�');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', '�޷�ִ�� %s �ļ���');
@define('FILE_CREATE_YOURSELF', '���Լ���������ļ�����Ȩ��');
@define('COPY_CODE_BELOW', '<br />* �븴������Ĵ���Ȼ����� %s ����� %s �ļ���:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', '���֮��, ����ˢ����������.');
@define('ERROR_TEMPLATE_FILE', '�޷����������ļ�, �����ϵͳ��');
@define('HTACCESS_ERROR', 'Ҫ�����İ�װ�趨, ϵͳ��Ҫ��д ".htaccess"��������ΪȨ�޴���, û�а취Ϊ���飬��ı��ļ�Ȩ��: <br />&nbsp;&nbsp;%s<br />Ȼ��ˢ�¡�');
@define('EMPTY_SETTING', '��û���ṩ "%s" ����ȷ����');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'ϵͳ����İ汾�� %s, �� Serendipity ���ڵİ汾�� %s, �������ĳ���<a href="%s">����</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', '���, ��ӭʹ�� Serendipity �ĸ��³���');
@define('SERENDIPITY_UPGRADER_PURPOSE', '���³���������µ� Serendipity �汾 %s.');
@define('SERENDIPITY_UPGRADER_WHY', '���Ѿ����� Serendipity %s, �����ϵͳû�и���������ݿ⣡');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', '���ݿ���� (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'ϵͳ�ҵ����µ� .sql ��, ��Щ���ݱ�����ִ�в��ܼ�����װ Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '�ض��İ汾����');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'û���ض��İ汾����');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'ȷ��Ҫִ�����ϵ�������?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', '���Լ�ִ��');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', '�����ִ��');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', '����Ҫ�����κθ���');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity �������');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', '�������˸�������, ��ȷ�����ݿ��Ѱ�װ���, ������������װ����');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', '��� Serendipity �Ѿ����°汾Ϊ %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', '����Ե� %s����%s ������վ��ҳ');
@define('ADMIN_ENTRIES', '���¹���');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', '�������ӵ� MySQL ���Ͽ�: %s.');
@define('COULDNT_SELECT_DB', '����ѡ�����ݿ�: %s.');
@define('COULDNT_SELECT_USER_INFO', '����ѡ��ʹ���ߵ�����: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', '����ѡ����������: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', '����ѡ�����µ�����: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', '����ѡ��ظ�������: %s.');
@define('MYSQL_REQUIRED', '�����Ҫ�� MySQL �����书�ܲ���ִ���������');
@define('CREATE_AUTHOR', '�������� \'%s\'.');
@define('CREATE_CATEGORY', '������� \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type ����');
@define('INSTALL_DBPORT', '���ݿ����Ӷ�');
@define('INSTALL_DBPORT_DESC', '�������ݿ���ʹ�õ����Ӷ�');
@define('IMPORT_PLEASE_ENTER', '����������');
@define('IMPORT_NOW', '��ʼ����');
@define('IMPORT_STARTING', '���ڵ���...');
@define('IMPORT_FAILED', '����ʧ��');
@define('IMPORT_DONE', '����ɹ�');
@define('IMPORT_WEBLOG_APP', '����');
@define('IMPORT_NOTES', 'ע��:');
@define('IMPORT_STATUS', '�������״̬');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', '����������ַŵ�������, �����𿪹��������µ�������');
@define('IMPORT_GENERIC_RSS', 'һ�� RSS ����');
@define('ACTIVATE_AUTODISCOVERY', '�������������õ�����');
@define('RSS_IMPORT_CATEGORY', '�������������ͬ������');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', '�Ҳ�����ƪ�ļ� %s');
@define('CONVERT_HTMLENTITIES', '�Զ��ı� HTML �ı�ǩ');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity���ܲ���ϵͳ');
@define('WRONG_USERNAME_OR_PASSWORD', '������ʺŻ���������');
@define('PLEASE_ENTER_CREDENTIALS', '��������ȷ�ĵ�½�ʺ�');
@define('AUTOMATIC_LOGIN', '�Զ�����');
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
@define('MEDIA', 'ý�����');
@define('MEDIA_LIBRARY', 'ý��ͼ��');
@define('ADD_MEDIA', '����ý��');
@define('MANAGE_DIRECTORIES', '����Ŀ¼');
@define('CONFIGURATION', '�����趨');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', '��������');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', '�ٷ���ҳ');
@define('FURTHER_LINKS_S9Y_DOCS', '����֧��');
@define('FURTHER_LINKS_S9Y_BLOG', '��վ��־');
@define('FURTHER_LINKS_S9Y_FORUMS', '������̳');
@define('FURTHER_LINKS_S9Y_SPARTACUS', '�������');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', '��ƪ����δ����');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', '��Ȩ');
@define('SIDEBAR_PLUGINS', '�������');
@define('EVENT_PLUGINS', '�¼����');
@define('CONFIGURE_PLUGINS', '�趨���');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'δ�ﵽ����: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', '�������°汾 %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', '�����ﰲװ�� %s');
@define('ALREADY_INSTALLED', '�Ѿ���װ');
@define('PLUGIN_AVAILABLE_COUNT', '�ܹ��� %d �����');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', '�༭����');
@define('EDIT_ENTRY', '�༭����');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', '�ݸ�');
@define('PUBLISH', '����');
@define('CONTENT', '����');
@define('ENTRIES_PER_PAGE', 'ÿҳ��ʾ������');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', '�ö�����');
@define('PAGE_BROWSE_ENTRIES', 'ҳ�� %s �� %s, �ܹ� %s ƪ����');
@define('FIND_ENTRIES', '��������');
@define('RIP_ENTRY', 'R.I.P. ���� #%s');
@define('NEW_ENTRY', '��������');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', '����������');
@define('EXTENDED_BODY', '���¸�����');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', '���²ݸ��ѱ�����');
@define('IFRAME_PREVIEW', '���ڽ������Ԥ������...');
@define('IFRAME_WARNING', '����������֧�� iframes. ��� serendipity_config.inc.php �ļ�Ȼ���趨 $serendipity[\'use_iframe\'] Ϊ FALSE��');
@define('DATE_INVALID', '����: �ṩ�����ڲ���ȷ. �������� YYYY-MM-DD HH:MM �ĸ�ʽ');
@define('ADVANCED_OPTIONS', '�߼�ѡ��');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', '������Ӳ����������. ��������������µ����� URI. ����Դ���� URI ������ ping �����õ��������. ���Ҫ�����������, �������ϵ��Ҽ�Ȼ��ѡ�� "��������" (IE) �� "�������ӵ�ַ" (Mozilla).');
@define('RESET_DATE', '��������');
@define('RESET_DATE_DESC', '��������������');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', '��������');
@define('CREATE_NEW_USER', '��������');
@define('CREATE_NOT_AUTHORIZED', '�㲻���޸ĸ�����ͬȨ�޵�����');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', '�㲻�������������Ȩ�޵�����');
@define('CREATED_USER', '������ %s �Ѿ�����');
@define('MODIFIED_USER', '���� %s �������Ѿ�����');
@define('USER_LEVEL', '����Ȩ��');
@define('WARNING_NO_GROUPS_SELECTED', '���棺��û��ѡ���ԱȺ�顣��Ὣ��ǳ�Ⱥ��Ĺ�����Ա��Ⱥ�鲻�ᱻ�ı䡣');
@define('DELETE_USER', '��Ҫɾ��������� #%d %s? �������ҳ��������д���κ����¡�');
@define('DELETED_USER', '���� #%d %s �ѱ�ɾ��.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', '����Ⱥ��');
@define('DELETED_GROUP', 'Ⱥ�� #%d %s ��ɾ��');
@define('CREATED_GROUP', '��Ⱥ�� %s ������');
@define('MODIFIED_GROUP', 'Ⱥ�� %s ���趨�ѱ��ı�');
@define('CREATE_NEW_GROUP', '����Ⱥ��');
@define('DELETE_GROUP', 'ȷ��Ҫɾ��Ⱥ�� #%d %s ');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', '�����ظ�');
@define('COMMENTS_FILTER_SHOW', '��ʾ');
@define('COMMENTS_FILTER_ALL', 'ȫ��');
@define('COMMENTS_FILTER_APPROVED_ONLY', '��ʾ��˻ظ�');
@define('COMMENTS_FILTER_NEED_APPROVAL', '��ʾ�ȴ����');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'ȷ��Ҫɾ����ѡ�Ļظ���');
@define('PAGE_BROWSE_COMMENTS', 'ҳ�� %s �� %s, �ܹ� %s ���ظ�');
@define('COMMENT_IS_DELETED', '(�ظ���ɾ��)');
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
@define('CATEGORY_SAVED', '����ѱ���');
@define('CATEGORY_ALREADY_EXIST', '��� "%s" �Ѿ�����');
@define('CATEGORY_DELETED_ARTICLES_MOVED', '��� #%s ��ɾ��. �������ѱ��ƶ������ #%s');
@define('CATEGORY_DELETED', '��� #%s ��ɾ����');
@define('INVALID_CATEGORY', 'û���ṩɾ�������');
@define('EDIT_THIS_CAT', '�༭ "%s"');
@define('CATEGORY_REMAINING', 'ɾ���������Ȼ������ת���������');
@define('PARENT_CATEGORY', '�����');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', '���');
@define('ALREADY_SUBCATEGORY', '%s �Ѿ��Ǵ������ӷ��� %s');
@define('NO_CATEGORIES', 'û�з���');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', '��������');
@define('EXPORT_ENTRIES', '��������');
@define('EXPORT_FEED', '��� RSS feed');
@define('CREATE_THUMBS', '�ؽ�ϸͼ');
@define('WARNING_THIS_BLAHBLAH', "����:\\n����кܶ�ͼƬ�Ļ���������Ҫ�ܳ�ʱ�䡣");
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
@define('TEMPLATE_SET', '\'%s\' �ѱ��趨Ϊ����');
@define('WARNING_TEMPLATE_DEPRECATED', '����:  ��Ŀǰʹ�õ������Ǿɷ��������ģ��뾡�����');
@define('STYLE_OPTIONS_NONE', '�������û���ر��ѡ����Ҫ��������������ѡ������ www.s9y.org �ڵ� Technical Documentation��Ȼ�� "Configuration of Theme options"��');
@define('STYLE_OPTIONS', '����ѡ��');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', '�����Զ��Ĺ������');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'ʹ������');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', '����');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', '�Ƴ���ѡ�����');
@define('SAVE_CHANGES_TO_LAYOUT', '������������');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', '�������ݿ��ͼƬ�ļ�������ͬ��');
@define('SYNC_DONE', '��� (ͬ���� %s ��ͼƬ)');
@define('RESIZE_BLAHBLAH', '<b>�����С %s</b>');
@define('ORIGINAL_SIZE', 'ԭ�еĴ�С: <i>%sx%s</i> ����');
@define('RESIZING', '�����С');
@define('RESIZE_DONE', '��� (���� %s ��ͼƬ)');
@define('KEEP_PROPORTIONS', 'ά�ֱ���');
@define('REALLY_SCALE_IMAGE', 'ȷ��Ҫ����ͼƬ��? ����������ָܻ���');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>������������޸�ͼƬ��С�������Ҫ�޸ĳ���ͬ��ͼƬ����, ��ֻ��Ҫ����һ����ֵȻ�� TAB -- ϵͳ���Զ������������������</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', '��С: ');
@define('SCALING_IMAGE', '���� %s �� %s x %s ����');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Ŀ¼ <strong>%s</strong> �Ѿ�����');
@define('PARENT_DIRECTORY', '��Ŀ¼');
@define('CONFIRM_DELETE_DIRECTORY', 'ȷ��Ҫɾ�����Ŀ¼�ڵ�ȫ������ %s');
@define('ERROR_NO_DIRECTORY', '����: Ŀ¼ %s ������');
@define('ERROR_DIRECTORY_NOT_EMPTY', '����ɾ��δ��յ�Ŀ¼. ��ѡ "ǿ��ɾ��" �����ȷ��Ҫɾ����Щ�ļ�, Ȼ���ڼ����� ���ڵ��ļ���:');
@define('DIRECTORY_DELETE_FAILED', '����ɾ��Ŀ¼ %s. ����Ȩ�޻������ѶϢ.');
@define('DIRECTORY_DELETE_SUCCESS', 'Ŀ¼ %s �ɹ�ɾ��.');
@define('CHECKING_DIRECTORY', '����Ŀ¼���ļ� %s');
@define('DELETE_DIRECTORY', 'ɾ��Ŀ¼');
@define('DELETE_DIRECTORY_DESC', 'ɾ��Ŀ¼�ڵ�ý���ļ���ע���ļ�Ҳ����������������ڡ�');
@define('FORCE_DELETE', 'ɾ����Ŀ¼�ڵ��ļ��������޷�ʶ����ļ�');
@define('CREATE_DIRECTORY', '����Ŀ¼');
@define('CREATE_NEW_DIRECTORY', '������Ŀ¼');
@define('CREATE_DIRECTORY_DESC', '����������Խ����µ�Ŀ¼�����ý���ļ�������Ŀ¼���ƺ������ѡ���Ƿ����ŵ���Ŀ¼�ڡ�');
@define('ABOUT_TO_DELETE_FILE', '�㽫ɾ���ļ� <b>%s</b><br />���������������������ʹ������ļ�, �Ǹ����ӻ�ͼƬ������Ч<br />ȷ��Ҫ������<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', '����: �ļ��Ѵ���');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', '�Ҳ����ļ� <b>%s</b>, �����ѱ�ɾ��');
@define('ERROR_FILE_FORBIDDEN', '�㲻���ϴ����ļ�');
@define('REMOTE_FILE_NOT_FOUND', '�ļ�����Զ��������, ��ȷ�������ַ: <b>%s</b> ����ȷ�ġ�');
@define('FILE_FETCHED', '%s ȡ��Ϊ %s');
@define('FILE_UPLOADED', '�ļ� %s �ϴ�Ϊ %s');
@define('DELETE_FILE_FAIL', '�޷�ɾ���ļ� <b>%s</b>');
@define('DELETE_FILE', 'ɾ���ļ� <b>%s</b>');
@define('FOUND_FILE', '�ҵ� ��/�޸� ���ĵ���: %s');
@define('FILENAME_REASSIGNED', '�Զ�ָ�����ļ����ƣ� %s');
@define('ERROR_FILE_EXISTS', '����: �ļ����ѱ�ʹ��, ���������룡');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', '�ⲿ����ͼƬ');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', '����������: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', '����ͼƬ...');
@define('THUMB_CREATED_DONE', '��ͼ������<br>��ɣ�');
@define('THUMBNAIL_USING_OWN', 'ʹ�� %s ��������ͼ�ߴ���ΪͼƬ�Ѿ���С�ˡ�');
@define('THUMBNAIL_FAILED_COPY', 'ʹ�� %s ��������ͼ, �����޷����ƣ�');
@define('DELETE_THUMBNAIL', 'ɾ��ͼƬ��ͼ <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', '��������, �ļ�û���ϴ���������Ϊ����ļ��������ƵĴ�С�� ��ѯ����������̻��޸���� php.ini �ļ����ԡ�');
@define('MEDIA_UPLOAD_SIZEERROR', '�����㲻���ϴ����� %s �ֽڵ��ļ�');
@define('MEDIA_UPLOAD_DIMERROR', '�����㲻���ϴ����� %s x %s ��ͼƬ');
@define('HOTLINK_DONE', '�ļ��ⲿ����<br />������');
@define('DELETE_HOTLINK_FILE', 'ɾ���ⲿ���ӵ��ļ� <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', '�޷�ִ��: "%s", ����: %s, ϵ��: %d');
@define('SKIPPING_FILE_EXTENSION', '�����ļ�: û�� %s �ĸ�����');
@define('SKIPPING_FILE_UNREADABLE', '�Թ��ļ�: %s ���ܶ�ȡ');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', '��������ʹ����ͼ.');
@define('I_WANT_BIG_IMAGE', '��������ʹ�ô���ͼƬ.');
@define('I_WANT_NO_LINK', '��ͼƬ��ʾ');
@define('I_WANT_IT_TO_LINK', '��������ʾ�����ַ:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'ͼƬ��С');
@define('IMAGE_ALIGNMENT', 'ͼƬ����');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', '����ͼƬ');
@define('MEDIA_TARGET', '���ӵ�Ŀ��');
@define('MEDIA_TARGET_JS', '�������� (ʹ�� JavaScript)');
@define('MEDIA_ENTRY', '��������');
@define('MEDIA_TARGET_BLANK', '�������� (ʹ�� target=_blank)');
@define('YOU_CHOSE', '��ѡ�� %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Rotate image 90 degrees counter-clockwise');
@define('IMAGE_ROTATE_RIGHT', 'Rotate image 90 degrees clockwise');
@define('MEDIA_RENAME', '�����ļ�����');
@define('THUMBNAIL_SHORT', '��ͼ');
@define('ORIGINAL_SHORT', 'ԭʼ');
@define('SORT_ORDER_NAME', '�ļ�����');
@define('SORT_ORDER_EXTENSION', '���ļ���');
@define('SORT_ORDER_SIZE', '�ļ���С');
@define('SORT_ORDER_WIDTH', 'ͼƬ���');
@define('SORT_ORDER_HEIGHT', 'ͼƬ����');
@define('SORT_ORDER_DATE', '�ϴ�����');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>�����ļ���ý��Ŀ¼:</b><p>������ϴ�ý���ļ�, �����ϵͳ����Ѱ�ҡ������û����Ҫ��ͼƬ, ����Ե� <a href="https://images.google.com/" target="_blank">google����ͼƬ</a>.<p><b>ѡ��ʽ:</b><br>');
@define('ENTER_MEDIA_URL', '�������ļ���ַ:');
@define('ENTER_MEDIA_UPLOAD', '��ѡ��Ҫ�ϴ����ļ�:');
@define('SAVE_FILE_AS', '�����ļ�:');
@define('STORE_IN_DIRECTORY', '���浽����Ŀ¼: ');
@define('IMAGE_MORE_INPUT', '����ͼƬ');
@define('ENTER_MEDIA_URL_METHOD', 'ȡ�÷���:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'ע��:�����ѡ���ⲿ���ӣ����ȵõ���Դ��վ�������ⲿ������������������վ��ͼƬ������Ҫ��ͼƬ��������������ڡ�');
@define('FETCH_METHOD_IMAGE', '����ͼƬ������');
@define('FETCH_METHOD_HOTLINK', '�ⲿ���ӵ�����');
@define('GO_ADD_PROPERTIES', '��������');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', '����ͼƬ�ߴ�');
@define('MEDIA_DELETE', 'ɾ������ļ�');
@define('FILES_PER_PAGE', 'ÿҳ��ʾ���ļ���');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '�Ҳ����ļ�');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'ȫ��Ŀ¼');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', '�������');
@define('DIAGNOSTIC_ERROR', 'ϵͳ��⵽һЩ����:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', '���ݿ��趨');
@define('INSTALL_CAT_DB_DESC', '�������������ȫ�������ݿ����ϣ�ϵͳ��Ҫ��Щ���ϲ�����������');
@define('INSTALL_DBTYPE', '���ݿ�����');
@define('INSTALL_DBTYPE_DESC', '���ݿ�����');
@define('INSTALL_DBHOST', '���ݿ�����');
@define('INSTALL_DBHOST_DESC', '���ݿ���������');
@define('INSTALL_DBUSER', '���ݿ��ʺ�');
@define('INSTALL_DBUSER_DESC', '�������ݿ���ʺ�');
@define('INSTALL_DBPASS', '��������');
@define('INSTALL_DBPASS_DESC', '������ݿ�����');
@define('INSTALL_DBNAME', '��������');
@define('INSTALL_DBNAME_DESC', '���Ͽ�����');
@define('INSTALL_DBPREFIX', '��ǰ������');
@define('INSTALL_DBPREFIX_DESC', '���ǰ������, ���� serendipity_');
@define('INSTALL_DBPERSISTENT', 'ʹ�ó�������');
@define('INSTALL_DBPERSISTENT_DESC', '�����ݿ�ʹ�ó�������, ������� <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">����</a>��ͨ��������ʹ�á�');
@define('INSTAL_DB_UTF8', '�������ݿ����ת��');
@define('INSTAL_DB_UTF8_DESC', 'ʹ�� MySQL �� "SET NAMES" ��ѯ���趨���롣������³���������Խ����趨�򿪻�رա�');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '·���趨');
@define('INSTALL_CAT_PATHS_DESC', '���ļ��е�·��. ��Ҫ��������б��!');
@define('INSTALL_FULLPATH', '��ȫ·��');
@define('INSTALL_FULLPATH_DESC', 'ϵͳ��װ������·���;���·��');
@define('INSTALL_UPLOADPATH', '�ϴ�·��');
@define('INSTALL_UPLOADPATH_DESC', 'ȫ���ϴ����ļ���浽����, �� \'��ȫ·��\' ��ʾ�����·�� - ���� \'uploads/\'');
@define('INSTALL_RELPATH', '���·��');
@define('INSTALL_RELPATH_DESC', '���������·��, ���� \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', '��Ե�����·��');
@define('INSTALL_RELTEMPLPATH_DESC', '�����·�� - �� \'���·��\' ��ʾ�����·��');
@define('INSTALL_RELUPLOADPATH', '��Ե��ϴ�·��');
@define('INSTALL_RELUPLOADPATH_DESC', '��������ϴ��ļ���·�� - �� \'���·��\' ��ʾ�����·��');
@define('INSTALL_URL', '��վ��ַ');
@define('INSTALL_URL_DESC', 'ϵͳ��װ�Ļ�����ַ');
@define('INSTALL_AUTODETECT_URL', '�Զ���� HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', '����趨Ϊ "true"��HTTP Host �������ĵ�ַ�趨��ͬ����������ܿ���������ʹ�ö������������־��ʹ�������־�������ӡ�');
@define('INSTALL_INDEXFILE', 'Index �ļ�');
@define('INSTALL_INDEXFILE_DESC', 'ϵͳ�� index �ļ�');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', '��̬����');
@define('INSTALL_CAT_PERMALINKS_DESC', '���ø��ֲ�ͬ��ַ��ʽ�����徲̬���ӡ���������Ԥ�����ʽ����ʹ�� %id% ֵ���������ݿ�Ѱ�ҵ�ַĿ�ꡣ');
@define('INSTALL_PERMALINK', '���µľ�̬����');
@define('INSTALL_PERMALINK_DESC', '������������趨�Ի���λ�����������µ�������ӡ�����������²�����%id%, %title%, %day%, %month%, %year% �������ַ���');
@define('INSTALL_PERMALINK_AUTHOR', '���ߵľ�̬����');
@define('INSTALL_PERMALINK_AUTHOR_DESC', '������������趨�Ի���λ�����������µ�������ӡ�����������²�����%id%, %realname%, %username%, %email% �������ַ���');
@define('INSTALL_PERMALINK_CATEGORY', '���ľ�̬����');
@define('INSTALL_PERMALINK_CATEGORY_DESC', '������������趨�Ի���λ�����������µ�������ӡ�����������²�����%id%, %name%, %parentname%, %description% �������ַ���');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'RSS-Feed ���ľ�̬����');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', '������������趨�Ի���λ�������� RSS-Feed ������µ�������ӡ�����������²�����%id%, %name%, %description% �������ַ���');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed ���ߵ� URL');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', '����������㶨����� URL ���ӻ��� URL ����Ա��ȡ�� RSS-feeds Ϊ��׼�����������Щ���� %id%, %realname%, %username%, %email% �������ַ���');
@define('INSTALL_PERMALINK_ARCHIVESPATH', '�����ļ�·��');
@define('INSTALL_PERMALINK_ARCHIVEPATH', '�����ļ�·��');
@define('INSTALL_PERMALINK_CATEGORIESPATH', '���·��');
@define('INSTALL_PERMALINK_AUTHORSPATH', '����·��');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '�����Ļظ�·��');
@define('INSTALL_PERMALINK_DELETEPATH', 'ɾ���ظ�·��');
@define('INSTALL_PERMALINK_APPROVEPATH', '��׼�ظ�·��');
@define('INSTALL_PERMALINK_FEEDSPATH', 'RSS Feeds ·��');
@define('INSTALL_PERMALINK_PLUGINPATH', '�����·��');
@define('INSTALL_PERMALINK_ADMINPATH', '����·��');
@define('INSTALL_PERMALINK_SEARCHPATH', '����·��');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'һ���趨');
@define('INSTALL_CAT_SETTINGS_DESC', 'ϵͳ��һ���趨');
@define('INSTALL_USERNAME', '����Ա�ʺ�');
@define('INSTALL_USERNAME_DESC', '����Ա��½ϵͳ���ʺ�');
@define('INSTALL_PASSWORD', '����Ա����');
@define('INSTALL_PASSWORD_DESC', '����Ա��½ϵͳ������');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'ȫ��');
@define('USERCONF_REALNAME_DESC', '����ȫ��������ʾȫ������');
@define('INSTALL_EMAIL', '�����ʼ�');
@define('INSTALL_EMAIL_DESC', '����Ա�ĵ����ʼ�');
@define('INSTALL_SENDMAIL', '���͵����ʼ�������Ա��');
@define('INSTALL_SENDMAIL_DESC', '�����˻ظ��������ʱҪ�յ������ʼ�֪ͨ��');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', '��վ����');
@define('INSTALL_BLOGNAME_DESC', '����վ������');
@define('INSTALL_BLOGDESC', '��վ���');
@define('INSTALL_BLOGDESC_DESC', '���������־');
@define('INSTALL_BLOG_EMAIL', '��վ�ĵ����ʼ�');
@define('INSTALL_BLOG_EMAIL_DESC', '����趨��ĵ����ʼ����κ���־�ڼĳ����ʼ�������ʾ��������ʼ���ַ���ǵ���������ʼ�����������������ڣ��ܶ�������ܾ����ղ������ʼ���');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', '����');
@define('INSTALL_LANG_DESC', '����վʹ�õ�����');
@define('INSTALL_CHARSET', '����ѡ��');
@define('INSTALL_CHARSET_DESC', '�����������ת�� UTF-8 ��Ԥ����� (ISO, GB2312, ...)��Щ���԰�ֻ�� UTF-8 ���룬���Ի���Ԥ�������в����κθı䡣�°�װ����־����ʹ�� UTF-8 ���롣�ǵò�Ҫ�ı�����趨������Ѿ����������¡�������� https://docs.s9y.org/docs/developers/internationalization.html');
@define('INSTALL_CAL', '��������');
@define('INSTALL_CAL_DESC', '��ѡ����Ҫ����������');
@define('AUTOLANG', 'ʹ����������趨�ı���');
@define('AUTOLANG_DESC', '�������������ܽ�ʹ����������趨�ı���');
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
@define('INSTALL_CAT_DISPLAY', '���⼰ѡ���趨');
@define('INSTALL_CAT_DISPLAY_DESC', '�趨ϵͳ������������趨');
@define('INSTALL_FETCHLIMIT', '����ҳ��ʾ������');
@define('INSTALL_FETCHLIMIT_DESC', '����ҳ��ʾ���µ�����');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'RSS Feed ҳ������ʾ������������');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', '���������ϸ�� RFC2616 RSS-Feed');
@define('SYNDICATION_RFC2616_DESC', '��ǿ�� RFC2616 ��ʾȫ���������� GETs �� Serendipity Blog ֻ�ᴫ������޸ĵ����¡�����趨Ϊ "false" ��ʾ�ÿͽ���ȫ�������¡�������һЩ��־�ĳ����� Planet ���������������������������ʾ��Υ���� RFC2616 �ı�׼�������趨Ϊ "TRUE" ��ʾ����� RFC �ı�׼�����ÿͿ��ܶ�ȡ����ȫ�����¡�������˵�������������޷��չ˵���������������ģ�<a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'ʹ�� gzip ѹ����ҳ');
@define('INSTALL_USEGZIP_DESC', 'Ϊ������ҳ���еø���, ϵͳ����ѹ������ʾ, ����ÿ�ʹ�õ������֧��ѹ����ҳ�Ļ�������ʹ�á�');
@define('INSTALL_XHTML11', 'ǿ�Ʒ��� XHTML 1.1 Ҫ��');
@define('INSTALL_XHTML11_DESC', '�����ϵͳǿ�Ʒ��� XHTML 1.1 Ҫ�� (�Ծɵ����������������)');
@define('INSTALL_POPUP', 'ʹ�õ�������');
@define('INSTALL_POPUP_DESC', '��Ҫ�ڻظ������õȵط�ʹ�õ���������');
@define('INSTALL_EMBED', 'ʹ����Ƕ����?');
@define('INSTALL_EMBED_DESC', '�����Ҫ�� Serendipity ����Ƕ�ķ�ʽ�ŵ���ҳ��, ѡ�� �� ����������κα���Ȼ��ֻ��ʾ��վ���ݡ� ������� indexFile ���趨������ܡ��������ѯ README �ļ�!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '���ⲿ������ʾ');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"��": �ⲿ���� (��Ҫ��Դ, ��Ҫ��Դ, �ظ�) ��������������ʾ������ google ��� (����ʹ��)�� "��": �������ӽ��Գ����ӵķ�ʽ��ʾ�� �����ڲ�����Ҹ��Ǵ��趨��');
@define('INSTALL_TRACKREF', '��¼��Դ');
@define('INSTALL_TRACKREF_DESC', '������¼��Դ����ʾ�Ǹ���վ������������¡�����Թر��������������յ�̫��������档');
@define('INSTALL_BLOCKREF', '�赲��Դ');
@define('INSTALL_BLOCKREF_DESC', '���������վ������Դ����ʾ��? �� \';\' ���ֿ���վ����, ע����������ַ���ʽ�赲�ģ�');
@define('INSTALL_REWRITE', 'URL Rewriting');
@define('INSTALL_REWRITE_DESC', '��ѡ�� URL Rewriting ��ʽ������ rewrite ������ԱȽ�����ķ�ʽ��ʾ URL, �Ա�������վ����ȷ����¼������£����������������֧�� mod_rewrite �� "AllowOverride All" �Ĺ��ܡ�[Ԥ����趨��ϵͳ�Զ�������]');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', '����ʱ��');
@define('INSTALL_OFFSET_DESC', '��Сʱ���㣬������������ʱ�� (Ŀǰ: %clock%) �����ʱ��');
@define('INSTALL_SHOWFUTURE', '��ʾδ������');
@define('INSTALL_SHOWFUTURE_DESC', '�����, ϵͳ������ʾδ����������£�Ԥ�����趨δ���������أ�Ȼ�󵽷������Զ���ʾ��');
@define('INSTALL_ACL', '�����ȡ��Ȩ�޵����');
@define('INSTALL_ACL_DESC', '���������Ⱥ�������Ȩ���趨�������õ�����Ļ�Ա������رգ����Ķ�ȡȨ�޲��ᱻʹ�ã����ǻ�ӿ�����־���ٶȡ�����㲻��Ҫ���ʹ���ߵĶ�ȡȨ�ޣ������㽫����趨�رա�');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', '�� RSS feed ����ʾȫ��������');
@define('SYNDICATION_PLUGIN_BANNERURL', 'RSS feed ��ͼƬ');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'ͼƬ��λַ URL, �� GIF/JPEG/PNG ��ʽ, ����У� (�հ�: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'ͼƬ���');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', '����, ���. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'ͼƬ�߶�');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', '����, ���. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '��ʾ�����ʼ�');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '�˵� "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', '���ߵĵ����ʼ�, ����У� (�հ�: ����) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '�˵� "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', '����Ա�ĵ����ʼ�, ����У� (�հ�: ����) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', '�˵� "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', '�ڼ����Ӻ����²��ᱻ��������վ������¼ (�հ�: ����) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '��λ "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', '"pubDate"-�˵���Ҫ��Ƕ��RSS-Ƶ��, ����ʾ������µ�������');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'ͼƬת���趨');
@define('INSTALL_CAT_IMAGECONV_DESC', '���趨ͼƬת���ķ�ʽ');
@define('INSTALL_IMAGEMAGICK', 'ʹ�� Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', '�����װ image magick, ��Ҫ�������ı�ͼƬ��С��?');
@define('INSTALL_IMAGEMAGICKPATH', 'ת����ʽ·��');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'image magick ת����ʽ����ȫ·��������');
@define('INSTALL_THUMBSUFFIX', '��ͼ�����ַ�');
@define('INSTALL_THUMBSUFFIX_DESC', '��ͼ��������ĸ�ʽ��������: original.[�����ַ�].ext');
@define('INSTALL_THUMBWIDTH', '��ͼ��С');
@define('INSTALL_THUMBWIDTH_DESC', '�Զ�������ͼ�������');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', '�ļ���С������');
@define('MEDIA_UPLOAD_SIZE_DESC', '�����ļ������ֵ������趨Ҳ���Դ������ڵ� PHP.ini �ļ��ı䣺 upload_max_filesize, post_max_size, max_input_time ȫ��������������趨��Ч������������ʾ������������ơ�');
@define('MEDIA_UPLOAD_MAXWIDTH', 'ͼƬ�����');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', '�����ϴ�ͼƬ����ȡ�');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'ͼƬ��󳤶�');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', '�����ϴ�ͼƬ��󳤶ȡ�');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', '����ý��ͬ��');
@define('ONTHEFLYSYNCH_DESC', '���������Serendipity Blog��Ƚ����ݿ��ý��Ŀ¼���ļ���Ȼ���������ͬ����');
@define('MEDIA_DYN_RESIZE', '����ı�ͼƬ��С');
@define('MEDIA_DYN_RESIZE_DESC', '���������ý���ѡ���Ӵ�����ʾ���� GET �������趨��ͼƬ��С��ͼƬ�ᱣ���ڻ����ڣ����Գ�ʹ�û�ռ�������Ŀռ䡣');
@define('MEDIA_EXIF', '���� EXIF/JPEG ͼƬ����');
@define('MEDIA_EXIF_DESC', '���������EXIF/JPEG ͼ����� metadata ���Զ����浽���ݿ⡣');
@define('MEDIA_PROP', 'ý������');
@define('MEDIA_PROP_DESC', '����ý��ʹ�õ����ݲ˵����� ";" ���ֿ�ÿ���˵�������');
@define('MEDIA_PROP_MULTIDESC', '(����������ƺ������ ":MULTI" ���趨�Ӵ�������������)');
@define('MEDIA_KEYWORDS', 'ý��Ĺؼ���');
@define('MEDIA_KEYWORDS_DESC', '����Ԥ���ý��ؼ��֣��� ";" ���ֿ�ÿ���ؼ��֡�');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', '���������趨');
@define('USERCONF_CAT_PERSONAL_DESC', '�ı���ĸ�������');
@define('USERCONF_USERNAME', '����ʺ�');
@define('USERCONF_USERNAME_DESC', '�����ϵͳ������');
@define('USERCONF_PASSWORD', '�������');
@define('USERCONF_PASSWORD_DESC', '�����ϵͳ������');
@define('USERCONF_CHECK_PASSWORD', '������');
@define('USERCONF_CHECK_PASSWORD_DESC', '�����Ҫ�������룬�뽫���������뵽���');
@define('USERCONF_USERLEVEL', 'Ȩ��');
@define('USERCONF_USERLEVEL_DESC', '���ѡ������趨�������������־�ڵ�Ȩ��');
@define('USERCONF_GROUPS', '��ԱȺ��');
@define('USERCONF_GROUPS_DESC', '�˻�Ա�����Ⱥ����Ա����Ա���Լ�����Ⱥ�顣');
@define('USERCONF_EMAIL', '��ĵ����ʼ�');
@define('USERCONF_EMAIL_DESC', '��ʹ�õĵ����ʼ�');
@define('INSTALL_WYSIWYG', 'ʹ�� WYSIWYG �༭��');
@define('INSTALL_WYSIWYG_DESC', '��Ҫʹ�� WYSIWYG �༭����(���� IE5+ ʹ��, ĳЩ���ֿ�ʹ���� Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', '���ͻظ�֪ͨ');
@define('USERCONF_SENDCOMMENTS_DESC', '�����»ظ�ʱʹ��֪ͨ');
@define('USERCONF_SENDTRACKBACKS', '��������֪ͨ?');
@define('USERCONF_SENDTRACKBACKS_DESC', '����������ʱʹ��֪ͨ');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Ȩ��: �ɷ�������');
@define('USERCONF_ALLOWPUBLISH_DESC', '������λ���߷�������');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', '��ѡ��ý����Ӵ�����ʾ������');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', '�����½�ʹ��Ԥ���趨');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'ע��: ��ԱȨ�޵�����ֻ��Ϊ�����ֻظ��ļ��ݺ������Ȩ��ϵͳ����ʹ�����µĻ�ԱȨ�ޡ�');
@define('USERCONF_CHECK_PASSWORD_ERROR', '���ṩ�˴���ľ��������Բ��ܸ������롣����趨δ���档');
@define('USERCONF_CHECK_USERNAME_ERROR', '�ʺŲ��ܿհ�');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', '��ȡ˽���趨');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', '�ı��ԱȨ��');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', '��� "��ֹ��������"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', '����������µ�Ȩ��');
@define('PERMISSION_SITECONFIGURATION', '��ȡϵͳ�趨');
@define('PERMISSION_BLOGCONFIGURATION', '��ȡ��־�趨');
@define('PERMISSION_ADMINENTRIES', '��������');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', '�����Ա������');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', '��������');
@define('PERMISSION_ADMINCATEGORIES', '�������');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', '�����Ա�����');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'ɾ��');
@define('PERMISSION_ADMINUSERS', '�����Ա');
@define('PERMISSION_ADMINUSERSDELETE', 'ɾ����Ա');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', '���Ȩ��');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', '������ͬȺ��Ļ�Ա');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'admin: maintainOthers');
@define('PERMISSION_ADMINUSERSCREATENEW', '������Ա');
@define('PERMISSION_ADMINUSERSGROUPS', '����Ⱥ��');
@define('PERMISSION_ADMINPLUGINS', '�������');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', '�����Ա�����');
@define('PERMISSION_ADMINIMAGES', '����ý���ļ�');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', '����ý��Ŀ¼');
@define('PERMISSION_ADMINIMAGESADD', '����ý���ļ�');
@define('PERMISSION_ADMINIMAGESDELETE', 'ɾ��ý���ļ�');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', '�����Ա��ý���ļ�');
@define('PERMISSION_ADMINIMAGESVIEW', '���ý���ļ�');
@define('PERMISSION_ADMINIMAGESSYNC', 'ͬ����ͼ');
@define('PERMISSION_ADMINCOMMENTS', '����ظ�');
@define('PERMISSION_ADMINTEMPLATES', '��������');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', '�����Ա��ý���ļ�');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', '��������ѱ���');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', '���߳�');
@define('COMMENTS_VIEWMODE_LINEAR', 'ֱ�߳�');
@define('DISPLAY_COMMENTS_AS', '�ظ���ʾ��ʽ');
@define('COMMENTS_DISABLE', '������ظ�����ƪ����');
@define('COMMENTS_ENABLE', '����ظ�����ƪ����');
@define('COMMENTS_CLOSED', '���߲�����ظ�����ƪ����');
@define('VIEW_EXTENDED_ENTRY', '�����Ķ� "%s"');
@define('TRACKBACK_SPECIFIC', '���ô������ض�����ַ');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', '���ȫ��');
@define('VIEW_TOPICS', '�������');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', '����');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'û������������£�');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', '��¼����');
@define('SUBMIT_COMMENT', '���ͻظ�');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', '������ƪ����');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', '�������������˴���� HTTP-Referrer �ַ�����������Ϊ browser/proxy �Ĵ����趨���� Cross Site Request Forgery (XSRF) �Ĺ�ϵ����Ĳ����޷���ɡ�');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', '�ظ� #%s �Ѿ�ͨ�����');
@define('COMMENT_EDITED', '�����ѱ��༭');
@define('COMMENTS_WILL_BE_MODERATED', '�����Ļظ���Ҫ����Ա���');
@define('THIS_COMMENT_NEEDS_REVIEW', '����: ����ظ�����˲Ż���ʾ��');
@define('DELETE_COMMENT', 'ɾ���ظ�');
@define('APPROVE_COMMENT', '��˻ظ�');
@define('REQUIRES_REVIEW', '��Ҫ���');
@define('COMMENT_APPROVED', '�ظ� #%s �Ѿ�ͨ�����');
@define('COMMENT_DELETED', '�ظ� #%s �Ѿ��ɹ�ɾ��');
@define('COMMENTS_MODERATE', '�ظ���������Ҫ����Ա���');
@define('THIS_TRACKBACK_NEEDS_REVIEW', '����: ���������Ҫ����Ա��˲Ż���ʾ��');
@define('DELETE_TRACKBACK', 'ɾ������');
@define('APPROVE_TRACKBACK', '�������');
@define('TRACKBACK_APPROVED', '���� #%s �Ѿ�ͨ�����');
@define('TRACKBACK_DELETED', '���� #%s �Ѿ��ɹ�ɾ��');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', '��߲�');
@define('VIEW_COMMENT', '����ظ�');
@define('VIEW_ENTRY', '�������');
@define('LINK_TO_ENTRY', '���ӵ�����');
@define('LINK_TO_REMOTE_ENTRY', '���ӵ�Զ������');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', '�������õ� URI %s...');
@define('TRACKBACK_SENT', '�������');
@define('TRACKBACK_FAILED', '���ô���: %s');
@define('TRACKBACK_NOT_FOUND', '�Ҳ������õĵ�ַ');
@define('TRACKBACK_URI_MISMATCH', '�Զ���Ѱ�����ø�����Ŀ�겻��ͬ.');
@define('TRACKBACK_CHECKING', '��Ѱ <u>%s</u> ������...');
@define('TRACKBACK_NO_DATA', 'Ŀ��û���κ�����');
@define('TRACKBACK_COULD_NOT_CONNECT', 'û���ͳ�����: �޷�����·���� %s �����ӵ� %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', '�»ظ������ĵ����� "%s"');
@define('SUBSCRIPTION_MAIL', "��� %s,\n\n�㶩�ĵ����������µĻظ��� \"%s\", ������ \"%s\"\n�ظ��ķ�������: %s\n\n����������ҵ�������: %s\n\n����Ե��������ȡ������: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "��� %s,\n\n�㶩�ĵ����������µ������� \"%s\", ������ \"%s\"\n���õ�������: %s\n\n����������ҵ�������: %s\n\n����Ե��������ȡ������: %s\n");
@define('SIGNATURE', "\n-- \n%s is powered by Serendipity.\n <https://www.s9y.org>");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', '�»ظ��ѷ�������վ "%s", ������������� "%s"��');
@define('A_NEW_TRACKBACK_BLAHBLAH', '������� "%s" �����µ����á�');
@define('YOU_HAVE_THESE_OPTIONS', '��������ѡ��:');
@define('NEW_TRACKBACK_TO', '�µ����õ�');
@define('NEW_COMMENT_TO', '�µĻظ���');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', '�Ҳ�����ѯ %s ������' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', '����Ѱ�� %s ��ʾ�� %s ���:');
@define('SEARCH_TOO_SHORT', '��Ѱ�ֱ������3�ֽڡ������ʹ�� * �����棬�����Ѱ�ֽ�С�� 3 �ֽڡ����磺s9y*��');
@define('SEARCH_ERROR', '�������ܳ��ִ��󣬱������Ա:�����������������ݿ�û����ȷ��index keys,���ʹ��MYSQL������ʺű������ִ�� <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> ��Ȩ�ޣ����ݿ���ʾ�Ĵ�����: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', '��Ļظ�û���κ���Ϣ, �� %s����%s ����');
@define('COMMENT_NOT_ADDED', '��Ļظ����ܼ�����Ϊ��ƪ���²�����ظ��������˴�����Ϣ����ͨ����������');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', '�ظ���Դ');

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
@define('PLUGIN_API_VALIDATE_ERROR', '���õ��趨 "%s" �﷨������Ҫ "%s" ���͡�');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', '��ʾ����嵥');
@define('CATEGORIES_PARENT_BASE', 'ֻ��ʾ�������...');
@define('CATEGORIES_PARENT_BASE_DESC', '�����ѡ��һ�������ֻ��ʾ������������');
@define('CATEGORIES_HIDE_PARALLEL', '���ز������ṹ�����');
@define('CATEGORIES_HIDE_PARALLEL_DESC', '�������λ���������ṹ�����������ȿ�������趨���������ͨ�������ڶ�����־����ҡ�');
@define('CATEGORIES_HIDE_PARENT', '����ѡ������');
@define('CATEGORIES_HIDE_PARENT_DESC', '�������������ʾ���б�Ԥ���ǻ���ʾ���������ơ��������������ܣ����������ƽ�������ʾ��');
@define('CATEGORY_PLUGIN_TEMPLATE', '���� Smarty-Templates');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', '����������ѡ���һ����� Smarty-Templating �Ĺ������������б���Ҳ������ "plugin_categories.tpl" ��ģ���ļ����ı���ۡ����ѡ��������ҳ����ʾ�ٶȣ�����㲻���κθı䣬��ùر����ѡ�');
@define('CATEGORY_PLUGIN_SHOWCOUNT', '��ʾÿ������������');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', '����ÿ���ʾ������');
@define('CATEGORIES_ALLOW_SELECT_DESC', '����������ѡ��� sidebar ����������Ա߻���ֹ�ѡ�˵�����Ա���Թ�ѡҪ��ʾ�����');
@define('CATEGORIES_TO_FETCH', '��ʾ���');
@define('CATEGORIES_TO_FETCH_DESC', '��ʾ��λ���ߵ����');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', '��ʾ�����б�');
@define('AUTHORS_SHOW_ARTICLE_COUNT', '��ʾ���ߵ�������');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', '�����������趨�����ߵ����»���ʾ�������ԡ�');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', '����ͬ��');
@define('SHOWS_RSS_BLAHBLAH', '��ʾ RSS ͬ������');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', '��Ҫ�������µ� ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner ͼƬ');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'λ�� feedburner.com ��ͼƬ��ʾ������ (��հ���ʾ����)�����磺fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner ����');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', '��ʾ��ͼƬ�Եı��� (�����)');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner ͼƬ����');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', '�����ͼƬʱ��ʾ������ (�����)');
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
@define('ARCHIVE_COUNT', '�����ļ�����Ŀ��');
@define('ARCHIVE_COUNT_DESC', '��ʾ����, ��, ����');
@define('ARCHIVE_FREQUENCY', '�����ļ���Ƶ��');
@define('ARCHIVE_FREQUENCY_DESC', '�����ļ�ʹ�õ���Ŀ�嵥���');
@define('BROWSE_ARCHIVES', '���·ݱ�������');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', '��������ʾ "Serendipity"');
@define('POWERED_BY_SHOW_TEXT_DESC', '����������ʾ "Serendipity Weblog"');
@define('POWERED_BY_SHOW_IMAGE', '�� logo ��ʾ "Serendipity"');
@define('POWERED_BY_SHOW_IMAGE_DESC', '��ʾ Serendipity �� logo');
@define('ADVERTISES_BLAHBLAH', '���������־');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', '�� https ����');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'ʹ�� https ��ַ�������������֧�������');
@define('SUPERUSER', 'ϵͳ����');
@define('SUPERUSER_OPEN_ADMIN', '��������ҳ��');
@define('SUPERUSER_OPEN_LOGIN', '��������ҳ��');
@define('ALLOWS_YOU_BLAHBLAH', '�ڲ����ṩ���ӵ���־����');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'վ������');
@define('CALENDAR_BOW_DESC', 'һ�����ڵĵ�һ��[Ԥ��������һ]');
@define('QUICKJUMP_CALENDAR', '����������Ծ');
@define('CALENDAR_BEGINNING_OF_WEEK', 'һ�ܵĵ�һ��');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'External Events');
@define('CALENDAR_EXTEVENT_DESC', '�����������ҿ���������������ɫ��ʾ�����¼������û��ʹ����Щ�������ң����鲻Ҫʹ�á�');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', '��Ѱ����');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', '��ʾ HTML ѶϢ������');
@define('THE_NUGGET', 'HTML ѶϢ');
@define('BACKEND_TITLE', '�������ҳ��Ķ�����Ϣ');
@define('BACKEND_TITLE_FOR_NUGGET', '����������趨һЩ�Զ����֣����� HTML Nugget ���һ������ʾ���������ҳ�档������ж������� HTML Nuggets�������������ֱ�����ͬ����ҡ�');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', '�����ӷ�ʽ��ʾ ��Ҫ��Դ/��Ҫ��Դ');
@define('INSTALL_TOP_AS_LINKS_DESC', '"��": ��Դ����Դ����������ʾ������ google �Ĺ�档 "��": ��Դ����Դ����������ʾ. "Ԥ��": ��ȫ��������趨 (����)');
@define('HAVE_TO_BE_LOGGED_ON', '���ȵ���');
@define('WELCOME_TO_ADMIN', '��ӭ��½Serendipity���ܲ���ϵͳ');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', '�̽���');
@define('MEDIA_PROPERTY_COMMENT2', '������');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', '����');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ��û��װ���. �밴 <a href="%s">��װ</a>.');
@define('COMMENT_ADDED_CLICK', '�� %s���ﷵ��%s ���ظ�, �͵� %s����ر�%s ����Ӵ���');
@define('COMMENT_NOT_ADDED_CLICK', '�� %s���ﷵ��%s ���ظ�, �͵� %s����ر�%s ����Ӵ���');
@define('MEDIA_PROPERTY_RUN_LENGTH', '����');
@define('MEDIA_PROPERTY_DATE', '�������');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'Ŀ���ַ����������� %s bytes �ļ���С.');
@define('CLICK_FILE_TO_INSERT', '��ѡ��Ҫ������ļ�:');
@define('SELECT_FILE', 'ѡ��Ҫ������ļ�');
@define('MANAGE_IMAGES', '����ͼƬ');
@define('WORD_NEW', '��');
@define('WORD_OR', '��');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'ǰ�ˣ��ⲿ����');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'ǰ�ˣ�����');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'ǰ�ˣ��������');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'ǰ�ˣ����');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'ǰ�ˣ��������');
@define('PLUGIN_GROUP_BACKEND_EDITOR', '��ˣ��༭��');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', '��ˣ���Ա����');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', '��ˣ�Meta ����');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', '��ˣ�����');
@define('PLUGIN_GROUP_BACKEND_FEATURES', '��ˣ�����');
@define('PLUGIN_GROUP_IMAGES', 'ͼƬ');
@define('PLUGIN_GROUP_ANTISPAM', '��ֹ���');
@define('PLUGIN_GROUP_MARKUP', '���');
@define('PLUGIN_GROUP_STATISTICS', 'ͳ������');
@define('IMPORT_WELCOME', '��ӭʹ��Serendipity������ת������');
@define('USER_SELF_INFO', '�����û��� %s (%s)');
@define('IMPORT_WHAT_CAN', '����Ե����������������');
@define('IMPORT_SELECT', '��ѡ����Ҫ����ĳ���');
@define('MANAGE_STYLES', '�������');
@define('SELECT_A_PLUGIN_TO_ADD', '��ѡ��Ҫ��װ�����');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', '�����ǰ�װ�õ����');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', '����');
@define('DELETE_SELECTED_COMMENTS', 'ɾ����ѡ�Ļظ�');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', '����ý��');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', '����: �ļ������ڣ�');
@define('ERROR_SOMETHING', '����');
@define('DIRECT_LINK', 'ֱ�ӵ���������');
@define('SELECT_TEMPLATE', '��ѡ����־������');
@define('DATABASE_ERROR', 'serendipity ����: �޷����ӵ��� - �˳���');
@define('LIMIT_TO_NUMBER', 'Ҫ��ʾ������');
@define('DIRECTORIES_AVAILABLE', '����������ｨ��ý���ŵ�Ŀ¼');
@define('CATEGORY_INDEX', '�����ǿ���ת�Ƶķ���');
@define('PAGE_BROWSE_PLUGINS', 'ҳ�� %s �� %s, �ܹ� %s ����ҡ�');
@define('CHARSET_NATIVE', 'Ԥ��');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API ���ܲ�������� s9y �İ�װ���Ϊ©���Ͳ�����ʹ�õĹ�ϵ�����Ա��밲װ XML-RPC ��������ʹ�� XML-RPC API�����е� URL ������˸ı䣬��װ�����Һ�����ʹ�á�');
@define('AUTHORS_ALLOW_SELECT', '����ÿ���ʾ��λ����?');
@define('AUTHORS_ALLOW_SELECT_DESC', '����������ѡ��ÿͿ��Թ�ѡҪ��ȡ�����ߵ����¡�');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
