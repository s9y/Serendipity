<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translated by CapriSkye <admin@capriskye.com>
# 				http://open.38.com
/* vim: set sts=4 ts=4 expandtab : */
$i18n_unknown = 'tw';

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'zh-TW.UTF-8, zh_TW.UTF-8, tw, zh');
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
@define('TYPE', '類型');
@define('PREVIEW', '預覽');
@define('DATE', '日期');
@define('TIME', 'Time');
@define('APPEARANCE', '外觀配置');
@define('LOGIN', '登入');
@define('LOGOUT', '登出');
@define('LOGGEDOUT', '登出.');
@define('CREATE', '建立');
@define('BACK', '後退');
@define('FORWARD', '前進');
@define('ANONYMOUS', '匿名');
@define('RECENT', '新文庫...');
@define('OLDER', '舊文庫...');
@define('DONE', '完成');
@define('TITLE', '標題');
@define('DESCRIPTION', '簡介');
@define('PLACEMENT', '位址');
@define('DELETE', '刪除');
@define('SAVE', '儲存');
@define('UP', '上');
@define('DOWN', '下');
@define('PREVIOUS', '上一頁');
@define('NEXT', '下一頁');
@define('ENTRIES', '文章');
@define('CATEGORIES', '類別');
@define('NAME', '名稱');
@define('EMAIL', 'Email');
@define('HOMEPAGE', '網址');
@define('COMMENT', '迴響');
@define('VIEW', '瀏覽');
@define('HIDE', '隱藏');
@define('WEEK', '週');
@define('WEEKS', '週');
@define('MONTHS', '月');
@define('DAYS', '日');
@define('DEBUG', 'Debug');
@define('SUCCESS', '完成');
@define('COMMENTS', '迴響');
@define('ADD_COMMENT', '新增迴響');
@define('NO_COMMENTS', '沒有迴響');
@define('POSTED_BY', '作者');
@define('ON', '於');
@define('NO_CATEGORY', '沒有類別');
@define('CATEGORY', '類別');
@define('EDIT', '編輯');
@define('GO', '繼續!');
@define('YES', '是');
@define('NO', '否');
@define('NOT_REALLY', '算了...');
@define('DUMP_IT', '刪除吧!');
@define('IN', '發佈於');
@define('AT', '時間');
@define('LEFT', '左');
@define('RIGHT', '右');
@define('CENTER', 'center');
@define('ARCHIVES', '保存文庫');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', '快速搜尋');
@define('TRACKBACKS', '引用');
@define('TRACKBACK', '引用');
@define('NO_TRACKBACKS', '沒有引用');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', '摘要');
@define('TRACKED', '引用');
@define('USER', '作者');
@define('USERNAME', '帳號');
@define('PASSWORD', '密碼');
@define('HIDDEN', '隱藏');
@define('IMAGE', '圖片');
@define('VIDEO', 'Video');
@define('AUTHOR', '發佈者');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', '版本');
@define('INSTALL', '安裝');
@define('REPLY', '回覆');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', '錯誤');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', '強制');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', '管理介面');
@define('ADMIN_FRONTPAGE', '管理首頁');
@define('QUOTE', '引言');
@define('NONE', '沒有');
@define('GROUP', '群組');
@define('AUTHORS', '作者');
@define('UPGRADE', '更新');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', '全部作者');
@define('PREVIOUS_PAGE', '上一頁');
@define('NEXT_PAGE', '下一頁');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', '全部類別');
@define('LAST_UPDATED', '最後更新');
@define('IP_ADDRESS', 'IP 位址');
@define('CHARSET', '編碼');
@define('REFERER', '來源');
@define('APPROVE', '認可');
@define('NOT_FOUND', '找不到');
@define('WRITABLE', '可讀寫');
@define('NOT_WRITABLE', '不可讀寫');
@define('WELCOME_BACK', '歡迎回來,');
@define('USE_DEFAULT', '預設');
@define('SORT_BY', '排序');
@define('SORT_ORDER', '排序');
@define('SORT_ORDER_ASC', '遞增排序');
@define('SORT_ORDER_DESC', '遞減排序');
@define('FILTERS', '過濾');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', '切換展開');
@define('TOGGLE_OPTION', '切換選項');
@define('IN_REPLY_TO', '回覆到');

/* WIDELY USED */
@define('FILTER_DIRECTORY', '目錄');
@define('BACK_TO_BLOG', '回到網誌首頁');
@define('HTML_NUGGET', 'HTML 訊息');
@define('TITLE_FOR_NUGGET', '訊息的標題');
@define('COMMENT_ADDED', '您的迴響已成功增入. ');
@define('ENTRIES_FOR', '文章在 %s');
@define('NO_ENTRIES_TO_PRINT', '沒有文章可以顯示');
@define('COMMENT_DELETE_CONFIRM', '確定要刪除迴響 #%d, 發佈者是 %s?');
@define('DELETE_SURE', '確定要刪除 #%s 嗎?');
@define('MEDIA_FULLSIZE', '完整尺寸');
@define('SIDEBAR_PLUGIN', '側列外掛');
@define('EVENT_PLUGIN', '事件外掛');
@define('PLUGIN_ITEM_DISPLAY', '該項目的顯示位址?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', '只在副內容顯示');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', '只在概觀內顯示');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '永遠顯示');
@define('DIRECTORY_WRITE_ERROR', '不能讀寫檔案夾 %s. 請檢查權限.');
@define('FILE_WRITE_ERROR', '無法讀寫檔案 %s.');
@define('INCLUDE_ERROR', 'serendipity 錯誤: 無法包括 %s - 退出.');
@define('DO_MARKUP', '執行標記轉換');
@define('GENERAL_PLUGIN_DATEFORMAT', '日期格式化');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', '文章的日期格式, 使用 PHP 的 strftime() 變數. (預設: "%s")');
@define('APPLY_MARKUP_TO', '套用標記到 %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML 按鈕');
@define('XML_IMAGE_TO_DISPLAY_DESC', '連結到 XML Feeds 的都會用這個圖片表示. 不填寫將會使用預設的圖片, 或輸入 \'none\' 關閉這個功能.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', '刪除檔案 %s...');
@define('SETTINGS_SAVED_AT', '新設定已經儲存於 %s');
@define('INVERT_SELECTIONS', '顛倒勾選');

@define('PERSONAL_SETTINGS', '個人設定');
@define('DO_MARKUP_DESCRIPTION', '套用自動格式化到文章內 (表情圖案, 符號 *, /, _, ...)。關閉這項功能將會保存任何文章內出現的 HTML 碼。');
@define('BASE_DIRECTORY', '基本目錄');
@define('PERM_READ', '讀取權限');
@define('PERM_WRITE', '寫入權限');
@define('PERM_DENIED', '權限拒絕。');
@define('CURRENT_AUTHOR', '目前的作者');
@define('PLUGIN_ACTIVE', '開啟');
@define('PLUGIN_INACTIVE', '關閉');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', '書籤');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', '將這個連結設為書籤可以讓您快速的進入網誌。');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity 安裝程式');
@define('WELCOME_TO_INSTALLATION', '歡迎到 Serendipity 安裝程式');
@define('FIRST_WE_TAKE_A_LOOK', '首先安裝程式會檢查您的主機設定以避免出現錯誤');
@define('ERRORS_ARE_DISPLAYED_IN', '錯誤顯示 %s, 建議 %s 完成無誤 %s');
@define('RED', '紅');
@define('YELLOW', '黃');
@define('GREEN', '綠');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s 安裝前報告');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP 安裝');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', '作業系統');
@define('WEBSERVER_SAPI', '主機 SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini 設定');
@define('RECOMMENDED', '建議');
@define('ACTUAL', '實際');
@define('PERMISSIONS', '權限');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', '權限可以用下面的 Shell 命令來執行: `<em>%s</em>` 然後執行在要改權限的檔案夾，或用 FTP 軟體');
@define('PROBLEM_DIAGNOSTIC', '因為上面出現的問題, 您必須將錯誤解決才能繼續安裝');
@define('SELECT_INSTALLATION_TYPE', '請選擇安裝類型');
@define('RECHECK_INSTALLATION', '重新檢查安裝程序');
@define('SIMPLE_INSTALLATION', '快速安裝');
@define('EXPERT_INSTALLATION', '進階安裝');
@define('COMPLETE_INSTALLATION', '完整安裝');
@define('WONT_INSTALL_DB_AGAIN', '不會重新安裝資料庫');
@define('THEY_DO', 'they do');
@define('THEY_DONT', 'they don\'t');
@define('CHECK_DATABASE_EXISTS', '檢查是否資料庫和資料表已經存在');
@define('CREATE_DATABASE', '建立預設資料庫設定...');
@define('ATTEMPT_WRITE_FILE', '讀寫 %s 檔案...');
@define('CREATING_PRIMARY_AUTHOR', '建立主要作者 \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', '設定預設佈景');
@define('INSTALLING_DEFAULT_PLUGINS', '安裝預設外掛');
@define('SERENDIPITY_INSTALLED', 'Serendipity 已完成安裝');
@define('VISIT_BLOG_HERE', '參觀您的網路日誌');
@define('THANK_YOU_FOR_CHOOSING', '感謝您選擇 Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', '安裝時發生錯誤');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', '一般作者');
@define('USERLEVEL_CHIEF_DESC', '主編');
@define('USERLEVEL_ADMIN_DESC', '管理員');
@define('WWW_USER', '請改變 www 到使用者的 Apache (i.e. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', '檔案夾 %s 不存在也無法建立. 請自己建立這個檔案夾');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', '無法執行 %s 資源檔案');
@define('FILE_CREATE_YOURSELF', '請自己建立這個檔案或檢查權限');
@define('COPY_CODE_BELOW', '<br />* 請複製下面的代碼然後放入 %s 到您的 %s 檔案夾:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', '完成之後, 重新刷新您的瀏覽器.');
@define('ERROR_TEMPLATE_FILE', '無法開啟佈景檔案, 請更新 serendipity!');
@define('HTACCESS_ERROR', '要檢查您的主機安裝設定, serendipity 需要讀寫檔案 ".htaccess". 但是因為權限錯誤, 沒有辦法為您檢查. 請改變檔案權限像這樣: <br />&nbsp;&nbsp;%s<br />然後重新刷新這個網頁.');
@define('EMPTY_SETTING', '您沒有提供 "%s" 的正確值!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity 偵測到您的配置版本是 %s, 但是 Serendipity 本身的安裝版本是 %s, 請更新您的程式版本! <a href="%s">更新</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', '您好, 歡迎來到 Serendipity 的更新系統.');
@define('SERENDIPITY_UPGRADER_PURPOSE', '更新系統會幫您更新到 Serendipity 版本 %s.');
@define('SERENDIPITY_UPGRADER_WHY', '您看到這個訊息是因為您安裝了 Serendipity 版本 %s, 但是您沒有更新資料庫');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', '資料庫更新 (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', '系統找到以下的 .sql 檔, 那些檔案必須先執行才能繼續安裝 Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '特定的版本任務');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '沒有特定的版本任務');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', '確定要執行上面的任務嗎?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', '我自己執行');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', '請幫我執行');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', '您不需要進行任何更新');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', '假裝 Serendipity 更新完成吧');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', '您略過了更新任務, 請確定資料庫已安裝完成, 和其他的任務安裝無誤');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', '您的 Serendipity 以更新至版本 %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', '您可以點 %s這裡%s 返回網誌首頁');
@define('ADMIN_ENTRIES', '文章');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', '不能聯結到 MySQL 資料庫: %s.');
@define('COULDNT_SELECT_DB', '不能選擇資料庫: %s.');
@define('COULDNT_SELECT_USER_INFO', '不能選擇使用者的資料: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', '不能選擇類別的資料: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', '不能選擇文章的資料: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', '不能選擇迴響的資料: %s.');
@define('MYSQL_REQUIRED', '您必須要有 MySQL 的擴充功能才能執行這個動作.');
@define('CREATE_AUTHOR', '新增作者 \'%s\'.');
@define('CREATE_CATEGORY', '新增類別 \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type 資料檔');
@define('INSTALL_DBPORT', '資料庫連接埠');
@define('INSTALL_DBPORT_DESC', '連接資料庫所使用的連接埠');
@define('IMPORT_PLEASE_ENTER', '請輸入資料');
@define('IMPORT_NOW', '開始輸入!');
@define('IMPORT_STARTING', '開始輸入程序...');
@define('IMPORT_FAILED', '輸入失敗');
@define('IMPORT_DONE', '完成輸入');
@define('IMPORT_WEBLOG_APP', '網誌程式');
@define('IMPORT_NOTES', '注意:');
@define('IMPORT_STATUS', '輸入後的狀態');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', '將輸入的文字放到主內容, 將不拆開過長的文章到副內容地區.');
@define('IMPORT_GENERIC_RSS', '一般 RSS 輸入');
@define('ACTIVATE_AUTODISCOVERY', '傳送在文章內找到的引用連結');
@define('RSS_IMPORT_CATEGORY', '用這個類別給不相同的輸入文章');
@define('IMPORT_WP_PAGES', '輸入附件檔案和靜態頁面於普通的網誌文章？');
@define('DOCUMENT_NOT_FOUND', '找不到此篇文件 %s.');
@define('CONVERT_HTMLENTITIES', '自動改變 HTML 的實體?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity 管理介面');
@define('WRONG_USERNAME_OR_PASSWORD', '您輸入了錯誤的帳號或密碼');
@define('PLEASE_ENTER_CREDENTIALS', '請輸入您的資料.');
@define('AUTOMATIC_LOGIN', '自動登入');
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
@define('MEDIA', '媒體');
@define('MEDIA_LIBRARY', '媒體存庫');
@define('ADD_MEDIA', '新增媒體');
@define('MANAGE_DIRECTORIES', '管理目錄');
@define('CONFIGURATION', '管理設定');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', '更多連結');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity 首頁');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity 說明文件');
@define('FURTHER_LINKS_S9Y_BLOG', '官方網誌');
@define('FURTHER_LINKS_S9Y_FORUMS', '論壇');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', '這篇文章還未公開。');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', '版權');
@define('SIDEBAR_PLUGINS', '側列外掛');
@define('EVENT_PLUGINS', '事件外掛');
@define('CONFIGURE_PLUGINS', '設定外掛');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', '未達到需求: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', '更新至版本 %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', '點這裡安裝新 %s');
@define('ALREADY_INSTALLED', '已經安裝');
@define('PLUGIN_AVAILABLE_COUNT', '總共： %d 個外掛。');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', '編輯文章');
@define('EDIT_ENTRY', '編輯文章');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', '草稿');
@define('PUBLISH', '公開');
@define('CONTENT', '內容');
@define('ENTRIES_PER_PAGE', '每頁顯示的文章');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', '頂置文章');
@define('PAGE_BROWSE_ENTRIES', '頁數 %s 共 %s, 總共 %s 篇文章');
@define('FIND_ENTRIES', '搜尋文章');
@define('RIP_ENTRY', 'R.I.P. 文章 #%s');
@define('NEW_ENTRY', '新增文章');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', '文章主內容');
@define('EXTENDED_BODY', '文章副內容');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', '文章草稿已被儲存');
@define('IFRAME_PREVIEW', 'Serendipity 正在建立您的預覽文章...');
@define('IFRAME_WARNING', '您的瀏覽器不支援 iframes. 請打開 serendipity_config.inc.php 檔案然後設定 $serendipity[\'use_iframe\'] 變數至 FALSE.');
@define('DATE_INVALID', '警告: 您提供的日期不正確. 它必須是 YYYY-MM-DD HH:MM 格式.');
@define('ADVANCED_OPTIONS', '進階選項');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', '這個連結不是用來點的. 它包含了這個文章的引用 URI. 您可以從您的網誌內用這個 URI 來傳送 ping 和引用到這個文章. 如果要複製這個連結, 在連結上點右鍵然後選擇 "複製連結" (IE) 或 "複製連結位址" (Mozilla).');
@define('RESET_DATE', '重設日期');
@define('RESET_DATE_DESC', '點這裡重設日期');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', '管理作者');
@define('CREATE_NEW_USER', '新增作者');
@define('CREATE_NOT_AUTHORIZED', '您不能修改跟您相同權限的作者');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', '您不能新增比您高權限的作者');
@define('CREATED_USER', '新作者 %s 已經新增');
@define('MODIFIED_USER', '作者 %s 的資料已經更改');
@define('USER_LEVEL', '作者權限');
@define('WARNING_NO_GROUPS_SELECTED', '警告：您沒有選擇會員群組。這會將您登出群組的管理，會員的群組不會被改變。');
@define('DELETE_USER', '您要刪除這個作者 #%d %s. 確定嗎? 這會在主頁隱藏他所寫的任何文章.');
@define('DELETED_USER', '作者 #%d %s 已被刪除.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', '管理群組');
@define('DELETED_GROUP', '群組 #%d %s 已刪除。');
@define('CREATED_GROUP', '新群組 %s 已新增');
@define('MODIFIED_GROUP', '群組 %s 的設定已被改變');
@define('CREATE_NEW_GROUP', '新增群組');
@define('DELETE_GROUP', '確定要刪除群組 #%d %s 嗎？');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', '搜尋迴響');
@define('COMMENTS_FILTER_SHOW', '顯示');
@define('COMMENTS_FILTER_ALL', '全部');
@define('COMMENTS_FILTER_APPROVED_ONLY', '顯示審核迴響');
@define('COMMENTS_FILTER_NEED_APPROVAL', '顯示等待審核');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', '確定要刪除勾選的迴響嗎?');
@define('PAGE_BROWSE_COMMENTS', '頁數 %s 共 %s, 總共 %s 個迴響');
@define('COMMENT_IS_DELETED', '(迴響已被移除)');
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
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', '類別已儲存');
@define('CATEGORY_ALREADY_EXIST', '類別 "%s" 已經存在');
@define('CATEGORY_DELETED_ARTICLES_MOVED', '類別 #%s 已刪除. 舊文章已被移動到類別 #%s');
@define('CATEGORY_DELETED', '類別 #%s 已刪除.');
@define('INVALID_CATEGORY', '沒有提供刪除的類別');
@define('EDIT_THIS_CAT', '編輯 "%s"');
@define('CATEGORY_REMAINING', '刪除這個類別然後將裡面的文章移到這個類別');
@define('PARENT_CATEGORY', '母類別');
@define('CATEGORY_HIDE_SUB', '隱藏子類別的文章？');
@define('CATEGORY_HIDE_SUB_DESC', '預設的狀態是當您瀏覽目錄時，子目錄的文章也會顯示。如果勾選此設定，只會顯示瀏覽的目錄內的文章。');
@define('CREATE_NEW_CAT', '新增類別');
@define('ALREADY_SUBCATEGORY', '%s 已經是此類別的子類別 %s.');
@define('NO_CATEGORIES', '沒有類別');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', '輸入資料');
@define('EXPORT_ENTRIES', '輸出資料');
@define('EXPORT_FEED', '輸出完整的 RSS');
@define('CREATE_THUMBS', '重建縮圖');
@define('WARNING_THIS_BLAHBLAH', "警告:\\n這個可能需要長時間如果有很多不是縮圖的圖片.");
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
@define('TEMPLATE_SET', '\'%s\' 已被設定為您的主要佈景');
@define('WARNING_TEMPLATE_DEPRECATED', '警告: 您目前使用的佈景是用舊的方法製作，請盡快更新');
@define('STYLE_OPTIONS_NONE', '這個佈景沒有特別的選項。如果要在您的佈景裡加上選項，請看 www.s9y.org 內的 Technical Documentation，然後 "Configuration of Theme options"。');
@define('STYLE_OPTIONS', '佈景選項');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', '可用自訂的管理介面');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', '使用佈景');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', '儲存');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', '移除勾選的外掛');
@define('SAVE_CHANGES_TO_LAYOUT', '儲存外觀配置');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', '進行資料庫和圖片檔案夾同步化');
@define('SYNC_DONE', '完成 (同步了 %s 個圖片).');
@define('RESIZE_BLAHBLAH', '<b>重設大小 %s</b>');
@define('ORIGINAL_SIZE', '原有的大小: <i>%sx%s</i> 像素');
@define('RESIZING', '重設大小');
@define('RESIZE_DONE', '完成 (重設 %s 個圖片).');
@define('KEEP_PROPORTIONS', '維持比例');
@define('REALLY_SCALE_IMAGE', '確定要縮放圖片嗎? 這個動作不能復原!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>在這裡您可以修改圖片大小. 如果您要修改成相同的圖片比例, 您只需要輸入一個數值然後按 TAB -- 系統會自動幫您計算比例以免出錯</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', '新大小: ');
@define('SCALING_IMAGE', '縮放 %s 到 %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', '目錄和檔案已成功移動到 %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', '目錄和檔案無法移動到 %s！');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', '目錄 <strong>%s</strong> 已經新增.');
@define('PARENT_DIRECTORY', '母目錄');
@define('CONFIRM_DELETE_DIRECTORY', '確定要刪除這個目錄內的全部內容嗎 %s?');
@define('ERROR_NO_DIRECTORY', '錯誤: 目錄 %s 不存在');
@define('ERROR_DIRECTORY_NOT_EMPTY', '不能移除未清空的目錄. 勾選 "強制刪除" 核取方塊如果您要移除這些檔案, 然後在繼續. 存在的檔案是:');
@define('DIRECTORY_DELETE_FAILED', '不能刪除目錄 %s. 請檢查權限或看上面的訊息.');
@define('DIRECTORY_DELETE_SUCCESS', '目錄 %s 成功刪除.');
@define('CHECKING_DIRECTORY', '檢查此目錄的檔案 %s');
@define('DELETE_DIRECTORY', '刪除目錄');
@define('DELETE_DIRECTORY_DESC', '您將刪除目錄內的媒體檔案，注意檔案也許出現在其他文章內。');
@define('FORCE_DELETE', '刪除此目錄內的檔案，包括 Serendipity 無法識別的檔案');
@define('CREATE_DIRECTORY', '建立目錄');
@define('CREATE_NEW_DIRECTORY', '建立新目錄');
@define('CREATE_DIRECTORY_DESC', '在這裡您可以建立新的目錄來存放媒體檔案。輸入目錄名稱然後您可以選擇是否將它放到母目錄內。');
@define('ABOUT_TO_DELETE_FILE', '您將刪除檔案 <b>%s</b><br />如果您有在其他的文章內使用這個檔案, 那個連結或圖片將會無效<br />確定要繼續嗎?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', '錯誤: 檔案已存在!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', '找不到檔案名稱 <b>%s</b>, 也許已經被刪除了?');
@define('ERROR_FILE_FORBIDDEN', '您不能上傳此類檔案');
@define('REMOTE_FILE_NOT_FOUND', '檔案不在遠端主機內, 您確定這個 URL: <b>%s</b> 是正確的嗎?');
@define('FILE_FETCHED', '%s 取回為 %s');
@define('FILE_UPLOADED', '檔案 %s 上傳為 %s');
@define('DELETE_FILE_FAIL', '無法刪除檔案 <b>%s</b>');
@define('DELETE_FILE', '刪除了檔案 <b>%s</b>');
@define('FOUND_FILE', '找到 新/修改 過的檔案: %s.');
@define('FILENAME_REASSIGNED', '自動指定新檔案的名稱： %s');
@define('ERROR_FILE_EXISTS', '錯誤: 檔案名稱已被使用, 請重新輸入!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', '外部連結圖片');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', '輸入新名稱給: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', '新增圖片...');
@define('THUMB_CREATED_DONE', '縮圖建立.<br>完成.');
@define('THUMBNAIL_USING_OWN', '使用 %s 當它的縮圖尺寸因為圖片已經很小了.');
@define('THUMBNAIL_FAILED_COPY', '使用 %s 當它的縮圖, 但是無法複製!');
@define('DELETE_THUMBNAIL', '刪除了圖片縮圖 <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', '未知的錯誤發生, 檔案還沒上傳. 也許你的檔案大於限制的大小. 請詢問您的 ISP 或修改您的 php.ini 檔.');
@define('MEDIA_UPLOAD_SIZEERROR', '錯誤：您不能上傳大於 %s 位元組的檔案！');
@define('MEDIA_UPLOAD_DIMERROR', '錯誤：您不能上傳大於 %s x %s 的圖片！');
@define('HOTLINK_DONE', '檔案外部連結<br />結束。');
@define('DELETE_HOTLINK_FILE', '刪除外部連結的檔案 <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', '無法執行: "%s", 錯誤: %s, 傳回變數: %d');
@define('SKIPPING_FILE_EXTENSION', '略過檔案: 沒有 %s 的副檔名.');
@define('SKIPPING_FILE_UNREADABLE', '略過檔案: %s 不能讀取.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', '將全部的子目錄設為相同權限');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', '我要在文章內使用縮圖.');
@define('I_WANT_BIG_IMAGE', '我要在文章內使用大型圖片.');
@define('I_WANT_NO_LINK', ' 我要它以圖片顯示');
@define('I_WANT_IT_TO_LINK', '我要它以連結顯示這個 URL:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', '圖片大小');
@define('IMAGE_ALIGNMENT', '圖片對齊');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', '輸入圖片');
@define('MEDIA_TARGET', '連結的目標');
@define('MEDIA_TARGET_JS', '彈出視窗 (使用 JavaScript)');
@define('MEDIA_ENTRY', '隔離文章');
@define('MEDIA_TARGET_BLANK', '彈出視窗 (使用 target=_blank)');
@define('YOU_CHOSE', '您選擇 %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Rotate image 90 degrees counter-clockwise');
@define('IMAGE_ROTATE_RIGHT', 'Rotate image 90 degrees clockwise');
@define('MEDIA_RENAME', '更改檔案名稱');
@define('THUMBNAIL_SHORT', '縮圖');
@define('ORIGINAL_SHORT', '原始');
@define('SORT_ORDER_NAME', '檔案名稱');
@define('SORT_ORDER_EXTENSION', '副檔名');
@define('SORT_ORDER_SIZE', '檔案大小');
@define('SORT_ORDER_WIDTH', '圖片寬度');
@define('SORT_ORDER_HEIGHT', '圖片長度');
@define('SORT_ORDER_DATE', '上傳日期');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>新增檔案到媒體存庫:</b><p>您可以在這上傳媒體檔, 或告訴系統到哪尋找! 如果您沒有想要的圖片, 您可以到 <a href="https://images.google.com/" target="_blank">google尋找圖片</a>.</p><p><b>選擇方式:</b></p><br/>');
@define('ENTER_MEDIA_URL', '請輸入檔案的 URL:');
@define('ENTER_MEDIA_UPLOAD', '請選擇要上傳的檔案:');
@define('SAVE_FILE_AS', '儲存檔案:');
@define('STORE_IN_DIRECTORY', '儲存到以下目錄: ');
@define('IMAGE_MORE_INPUT', '新增圖片');
@define('ENTER_MEDIA_URL_METHOD', '取得方法:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', '注意: 如果您選擇外部連結的方法，請先得到來源網站的允許。外部連結允許您用其他網站的圖片而不需將圖片儲存在您的主機內。');
@define('FETCH_METHOD_IMAGE', '下載圖片到主機');
@define('FETCH_METHOD_HOTLINK', '外部連結到主機');
@define('GO_ADD_PROPERTIES', '輸入內容');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', '更改圖片尺寸');
@define('MEDIA_DELETE', '刪除這個檔案');
@define('FILES_PER_PAGE', '每頁顯示的檔案數');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '找不到圖片');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', '全部目綠');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', '儲存完畢');
@define('DIAGNOSTIC_ERROR', '系統偵測到一些錯誤:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', '資料庫設定');
@define('INSTALL_CAT_DB_DESC', '您可以在這輸入全部的資料庫資料. Serendipity 需要這些資料才能正常運作');
@define('INSTALL_DBTYPE', '資料庫類型');
@define('INSTALL_DBTYPE_DESC', '資料庫類型');
@define('INSTALL_DBHOST', '資料庫主機');
@define('INSTALL_DBHOST_DESC', '資料庫主機名稱');
@define('INSTALL_DBUSER', '資料庫帳號');
@define('INSTALL_DBUSER_DESC', '登入資料庫的帳號');
@define('INSTALL_DBPASS', '資料庫密碼');
@define('INSTALL_DBPASS_DESC', '您的資料庫密碼');
@define('INSTALL_DBNAME', '資料庫名稱');
@define('INSTALL_DBNAME_DESC', '資料庫名稱');
@define('INSTALL_DBPREFIX', '資料表前置名稱');
@define('INSTALL_DBPREFIX_DESC', '資料表的前置名稱, 例如 serendipity_');
@define('INSTALL_DBPERSISTENT', '使用持續連線');
@define('INSTALL_DBPERSISTENT_DESC', '對資料庫使用持續連線, 詳情請到 <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">這裡</a>. 通常並不建議使用');
@define('INSTAL_DB_UTF8', '開啟資料庫的編碼轉換');
@define('INSTAL_DB_UTF8_DESC', '使用 MySQL 的 "SET NAMES" 查詢來設定編碼。如果文章出現亂碼可以將這個設定打開或關閉。');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '路徑設定');
@define('INSTALL_CAT_PATHS_DESC', '給檔案夾的路徑. 不要忘了最後的斜線!');
@define('INSTALL_FULLPATH', '完全路徑');
@define('INSTALL_FULLPATH_DESC', '您的 Serendipity 安裝的完全路徑和絕對路徑');
@define('INSTALL_UPLOADPATH', '上傳路徑');
@define('INSTALL_UPLOADPATH_DESC', '全部的上傳檔案會存到這裡, 以 \'完全路徑\' 表示的相對路徑 - 例如 \'uploads/\'');
@define('INSTALL_RELPATH', '相對路徑');
@define('INSTALL_RELPATH_DESC', '給瀏覽器的路徑, 例如 \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', '相對的佈景路徑');
@define('INSTALL_RELTEMPLPATH_DESC', '您放佈景的路徑 - 以 \'相對路徑\' 表示的相對路徑');
@define('INSTALL_RELUPLOADPATH', '相對的上傳路徑');
@define('INSTALL_RELUPLOADPATH_DESC', '給瀏覽器上傳檔案的路徑 - 以 \'相對路徑\' 表示的相對路徑');
@define('INSTALL_URL', '網誌 URL');
@define('INSTALL_URL_DESC', '您的 Serendipity 安裝的基本 URL');
@define('INSTALL_AUTODETECT_URL', '自動偵測 HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', '如果設定為 "true"，Serendipity 會確定讀者的 HTTP Host 跟您的基本 URL 設定相同。開啟這項功能可以允許您使用多數的網域名稱給您的網誌，和使用這個網域給跟進的連結。');
@define('INSTALL_INDEXFILE', 'Index 檔案');
@define('INSTALL_INDEXFILE_DESC', 'Serendipity 的 index 檔案');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', '靜態連接');
@define('INSTALL_CAT_PERMALINKS_DESC', '利用各種不同的 URL 的樣式來定義網誌內的靜態連接。建議您用預設的樣式，或者用 %id% 值來避免 s9y 利用資料庫尋找 URL 的目標。');
@define('INSTALL_PERMALINK', '文章的靜態連接');
@define('INSTALL_PERMALINK_DESC', '這裡可以讓您設定以基底位址來計算文章的相對連結。您可以用以下變數：%id%, %title%, %day%, %month%, %year% 或其他字串。');
@define('INSTALL_PERMALINK_AUTHOR', '作者的靜態連接');
@define('INSTALL_PERMALINK_AUTHOR_DESC', '這裡可以讓您設定以基底位址來計算作者文章的相對連結。您可以用以下變數：%id%, %realname%, %username%, %email% 或其他字串。');
@define('INSTALL_PERMALINK_CATEGORY', '類別的靜態連接');
@define('INSTALL_PERMALINK_CATEGORY_DESC', '這裡可以讓您設定以基底位址來計算類別文章的相對連結。您可以用以下變數：%id%, %name%, %parentname%, %description% 或其他字串。');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'RSS-Feed 類別的靜態連接');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', '這裡可以讓您設定以基底位址來計算 RSS-Feed 類別文章的相對連結。您可以用以下變數：%id%, %name%, %description% 或其他字串。');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed 作者的 URL 構造');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', '這裡可以讓您定義相對 URL 的構造，從基本 URL 到會員讀取的 RSS-feeds 為標準。您可以用這些變數 %id%, %realname%, %username%, %email% 或其它字元。');
@define('INSTALL_PERMALINK_ARCHIVESPATH', '保存文庫路徑');
@define('INSTALL_PERMALINK_ARCHIVEPATH', '保存文庫路徑');
@define('INSTALL_PERMALINK_CATEGORIESPATH', '類別路徑');
@define('INSTALL_PERMALINK_AUTHORSPATH', '作者個路徑');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '反訂閱迴響路徑');
@define('INSTALL_PERMALINK_DELETEPATH', '刪除迴響路徑');
@define('INSTALL_PERMALINK_APPROVEPATH', '核准迴響路徑');
@define('INSTALL_PERMALINK_FEEDSPATH', 'RSS Feeds 路徑');
@define('INSTALL_PERMALINK_PLUGINPATH', '單外掛路徑');
@define('INSTALL_PERMALINK_ADMINPATH', '管理路徑');
@define('INSTALL_PERMALINK_SEARCHPATH', '搜尋路徑');
@define('INSTALL_PERMALINK_COMMENTSPATH', '留言的路徑');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', '一般設定');
@define('INSTALL_CAT_SETTINGS_DESC', 'Serendipity 的一般設定');
@define('INSTALL_USERNAME', '管理員帳號');
@define('INSTALL_USERNAME_DESC', '管理員的登入名稱');
@define('INSTALL_PASSWORD', '管理員密碼');
@define('INSTALL_PASSWORD_DESC', '管理員的登入密碼');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', '全名');
@define('USERCONF_REALNAME_DESC', '作者的全名，將顯示給全部讀者');
@define('INSTALL_EMAIL', '電子郵件');
@define('INSTALL_EMAIL_DESC', '管理員的電子郵件');
@define('INSTALL_SENDMAIL', '寄送電子郵件給管理員?');
@define('INSTALL_SENDMAIL_DESC', '當有人發佈迴響到您的文章時要收到電子郵件通知嗎?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', '網誌名稱');
@define('INSTALL_BLOGNAME_DESC', '您的網誌標題');
@define('INSTALL_BLOGDESC', '網誌簡介');
@define('INSTALL_BLOGDESC_DESC', '介紹您的網誌');
@define('INSTALL_BLOG_EMAIL', '網誌的電子郵件');
@define('INSTALL_BLOG_EMAIL_DESC', '這會設定您的電子郵件，任何從網誌內寄出的信件將會顯示這個郵件位址。記得這個電子郵件必須可以用在您的主機內，很多主機會拒絕接收不明的郵件。');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', '語系');
@define('INSTALL_LANG_DESC', '網誌使用的語系');
@define('INSTALL_CHARSET', '語系選項');
@define('INSTALL_CHARSET_DESC', '這裡可以讓您轉換 UTF-8 或預設語系 (ISO, EUC, ...)。有些語言只有 UTF-8 語系檔，所以換成預設語系不會改變任何東西。新安裝的網誌建議使用 UTF-8 語系。記得不要改變這個設定如果您已經發佈了文章。詳情請看 https://docs.s9y.org/docs/developers/internationalization.html。');
@define('INSTALL_CAL', '日曆類型');
@define('INSTALL_CAL_DESC', '請選擇您要的日曆類型');
@define('AUTOLANG', '使用讀者的瀏覽器內設定的語系');
@define('AUTOLANG_DESC', '如果開啟，這個功能將使用讀者的瀏覽器內所設定的語系。');
@define('USERGROUPS_FORBIDDEN_ENABLE', '開啟外掛 ACL 給會員群組？');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', '如果 "外掛 ACL 給會員群組" 是開啟的狀態，您可以指定某些群組來執行外掛和事件。');
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
@define('INSTALL_CAT_DISPLAY', '外觀及選項設定');
@define('INSTALL_CAT_DISPLAY_DESC', '讓您設定 Serendipity 的外觀和其他設定');
@define('INSTALL_FETCHLIMIT', '在主頁顯示的文章');
@define('INSTALL_FETCHLIMIT_DESC', '主頁顯示的文章數');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'RSS Feed 頁面裡顯示的文章數量。');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', '開啟依照嚴格的 RFC2616 RSS-Feed');
@define('SYNDICATION_RFC2616_DESC', '不強制 RFC2616 表示全部有條件的 GETs 到 Serendipity 只會傳回最後修改的文章。如果設定為 "false" 表示訪客會接收全部的文章。不過，一些網誌的蒐集軟體像 Planet 會出現奇怪現象。如果出現奇怪現象表示它違反了 RFC2616 的標準。所以設定為 "TRUE" 表示你遵從 RFC 的標準，但是訪客可能會讀取不到全部的文章。整體來說，不管怎樣都無法顧到兩方。相關資訊：<a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', '使用 gzip 壓縮網頁');
@define('INSTALL_USEGZIP_DESC', '為了能讓網頁更快速的顯示, 我們會將網頁壓縮然後顯示訪客, 如果訪客使用的瀏覽器支援壓縮網頁. 建議使用');
@define('INSTALL_XHTML11', '強制符合 XHTML 1.1 要求');
@define('INSTALL_XHTML11_DESC', '您可以讓您的網誌強制符合 XHTML 1.1 的要求 (對舊的瀏覽器可能會有 後台/前台 的問題)');
@define('INSTALL_POPUP', '使用彈出視窗');
@define('INSTALL_POPUP_DESC', '您要在迴響, 引用等地方使用彈出視窗嗎?');
@define('INSTALL_EMBED', '使用內嵌功能?');
@define('INSTALL_EMBED_DESC', '如果你要將 Serendipity 以內嵌的方式放到網頁內, 選擇 是 會讓您捨棄任何標題然後只顯示網誌內容. 您可以用 indexFile 設定來使用包裝函式類別以便您放入網頁標題. 詳情請查詢 README 檔案!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '讓外來連結以連結顯示?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"否": 外來連結 (主要出源, 主要來源, 迴響) 都不會以文字顯示以避免 google 廣告 (建議使用). "是": 外來連結將以超連結的方式顯示. 可以在側列外掛蓋過此設定!');
@define('INSTALL_TRACKREF', '記錄來源？');
@define('INSTALL_TRACKREF_DESC', '開啟記錄來源會顯示哪個網站引用了您的文章。您可以關閉這個功能如果收到太多垃圾廣告。');
@define('INSTALL_BLOCKREF', '阻擋來源');
@define('INSTALL_BLOCKREF_DESC', '有任何特殊的主機您不想在來源裡顯示嗎? 用 \';\' 來分開主機名稱, 注意主機是以子字串方式阻擋!');
@define('INSTALL_REWRITE', 'URL Rewriting');
@define('INSTALL_REWRITE_DESC', '請選擇您想用的 URL Rewriting 方式. 開啟 rewrite 規則會以比較清楚的方式顯示 URL, 以便搜尋網站能正確的登入您的文章. 您的主機必須支援 mod_rewrite 或 "AllowOverride All" 到您的 Serendipity 檔案夾. 預設的設定是系統自動幫您偵測的');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', '主機時區');
@define('INSTALL_OFFSET_DESC', '以小時計算，請輸入主機的時間 (目前: %clock%) 跟您的時區的時差');
@define('INSTALL_SHOWFUTURE', '顯示未來文章');
@define('INSTALL_SHOWFUTURE_DESC', '如果開啟, 您的網誌將會顯示所有的未來文章. 預設的設定是將未來文章隱藏, 然後發佈日期到時自動顯示.');
@define('INSTALL_ACL', '套入讀取的權限到類別');
@define('INSTALL_ACL_DESC', '如果開啟，群組對類別的權限設定將會套用到登入的會員。如果關閉，類別的讀取權限不會被使用，但是會加快您的網誌速度。如果您不需要多使用者的讀取權限，建議將這個設定關閉。');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', '在 RSS feed 裡顯示全部的文章');
@define('SYNDICATION_PLUGIN_BANNERURL', 'RSS feed 的圖片');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', '圖片的位址 URL, 以 GIF/JPEG/PNG 格式, 如果有. (空白: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '圖片寬度');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', '像素, 最大. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', '圖片高度');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', '像素, 最大. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '顯示電子郵件嗎?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '欄位 "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', '作者的電子郵件, 如果有. (空白: 隱藏) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '欄位 "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', '管理員的電子郵件, 如果有. (空白: 隱藏) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', '欄位 "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', '過幾分鐘後您的文章不會被外來的網站或程式儲存到快取記憶裡 (空白: 隱藏) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '欄位 "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', '"pubDate"-欄位需要內嵌到RSS-頻道, 以顯示最後文章的日期嗎?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', '圖片轉換設定');
@define('INSTALL_CAT_IMAGECONV_DESC', '請設定 Serendipity 設定圖片轉換的方式');
@define('INSTALL_IMAGEMAGICK', '使用 Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', '如果有安裝 image magick, 您要用它來改變圖片大小嗎?');
@define('INSTALL_IMAGEMAGICKPATH', '轉換程式路徑');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'image magick 轉換程式的完全路徑和名稱');
@define('INSTALL_THUMBSUFFIX', '縮圖後置字元');
@define('INSTALL_THUMBSUFFIX_DESC', '縮圖會以下面的格式重新命名: 原檔名.[後置字元].ext');
@define('INSTALL_THUMBWIDTH', '縮圖尺度');
@define('INSTALL_THUMBWIDTH_DESC', '自動建立縮圖的最大寬度');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', '檔案大小的上限');
@define('MEDIA_UPLOAD_SIZE_DESC', '輸入檔案的最大值。這個設定也可以從主機內的 PHP.ini 檔案改變： upload_max_filesize, post_max_size, max_input_time 全部都能讓這裡的設定無效。如果不輸入表示遵從主機的限制。');
@define('MEDIA_UPLOAD_MAXWIDTH', '圖片的最大寬度');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', '輸入上傳的圖片的最大寬度。');
@define('MEDIA_UPLOAD_MAXHEIGHT', '圖片的最大長度');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', '輸入上傳的圖片的最大長度。');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', '開啟即時的媒體同步');
@define('ONTHEFLYSYNCH_DESC', '如果開啟，Serendipity 會比較資料庫和媒體目錄內的檔案，然後進行資料同步。');
@define('MEDIA_DYN_RESIZE', '允許改變圖片大小？');
@define('MEDIA_DYN_RESIZE_DESC', '如果開啟，媒體的選擇視窗裡會顯示依照 GET 變數所設定的圖片大小。圖片會儲存於快取的記憶體內，所以常使用會佔用主機的空間。');
@define('MEDIA_EXIF', '輸入 EXIF/JPEG 圖片資料');
@define('MEDIA_EXIF_DESC', '如果開啟，EXIF/JPEG 圖檔裡的 metadata 會自動儲存到資料庫。');
@define('MEDIA_PROP', '媒體內容');
@define('MEDIA_PROP_DESC', '輸入媒體使用的內容欄位，用 ";" 來分開每個欄位的名稱');
@define('MEDIA_PROP_MULTIDESC', '(您可以在名稱後面加上 ":MULTI" 來設定加大它的文字限制)');
@define('MEDIA_KEYWORDS', '媒體的關鍵字');
@define('MEDIA_KEYWORDS_DESC', '輸入預設的媒體關鍵字，用 ";" 來分開每個關鍵字。');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', '個人資料設定');
@define('USERCONF_CAT_PERSONAL_DESC', '改變您的個人資料');
@define('USERCONF_USERNAME', '您的帳號');
@define('USERCONF_USERNAME_DESC', '您登入網誌的名稱');
@define('USERCONF_PASSWORD', '您的密碼');
@define('USERCONF_PASSWORD_DESC', '您登入網誌的密碼');
@define('USERCONF_CHECK_PASSWORD', '舊密碼');
@define('USERCONF_CHECK_PASSWORD_DESC', '如果您改變了密碼，請將新密碼輸入到這個欄位。');
@define('USERCONF_USERLEVEL', '權限');
@define('USERCONF_USERLEVEL_DESC', '這個選項可以設定此作者在這個網誌內的權限');
@define('USERCONF_GROUPS', '會員群組');
@define('USERCONF_GROUPS_DESC', '此會員是下面的群組組員。會員可以加入多個群組。');
@define('USERCONF_EMAIL', '您的電子郵件');
@define('USERCONF_EMAIL_DESC', '您使用的電子郵件');
@define('INSTALL_WYSIWYG', '使用 WYSIWYG 編輯器');
@define('INSTALL_WYSIWYG_DESC', '您要使用 WYSIWYG 編輯器嗎? (可在 IE5+ 使用, 某些部分可使用於 Mozilla 1.3+)');
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
@define('USERCONF_SENDCOMMENTS', '寄送迴響通知?');
@define('USERCONF_SENDCOMMENTS_DESC', '當有新迴響到您的文章時要通知您嗎?');
@define('USERCONF_SENDTRACKBACKS', '寄送引用通知?');
@define('USERCONF_SENDTRACKBACKS_DESC', '當有新引用到您的文章時要通知您嗎?');
@define('USERCONF_CREATE', '禁止會員／禁止動作？');
@define('USERCONF_CREATE_DESC', '如果勾選，此會員將被禁止任何編輯或新增網誌的動作。如果登入後端，他被允許的動作只有登入／登出和瀏覽自己的設定。');
@define('USERCONF_ALLOWPUBLISH', '權限: 可發佈文章?');
@define('USERCONF_ALLOWPUBLISH_DESC', '允許這位作者發佈文章嗎?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', '在選擇媒體的視窗裡顯示工具欄？');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', '新文章將使用預設設定');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', '注意: 會員權限的屬性只為了回溯的相容性和外掛的授權。系統現在使用了新的會員權限來管理權限。');
@define('USERCONF_CHECK_PASSWORD_ERROR', '您提供了錯誤的舊密碼所以不能更改密碼。您的設定還未被儲存。');
@define('USERCONF_CHECK_USERNAME_ERROR', '帳號不能空白。');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: 讀取私人設定');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: 改變會員權限');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: 改變 "禁止建立文章"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: 改變發佈文章的權限');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: 讀取系統設定');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: 讀取網誌設定');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: 管理文章');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: 管理會員的文章');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: 輸入文章');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: 管理類別');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: 管理會員的類別');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: 刪除類別');
@define('PERMISSION_ADMINUSERS', 'adminUsers: 管理會員');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: 刪除會員');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: 改變權限');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: 管理相同群組的會員');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: 管理其它群組的會員');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: 新增會員');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: 管理群組');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: 管理外掛');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: 管理會員的外掛');
@define('PERMISSION_ADMINIMAGES', 'adminImages: 管理媒體檔案');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: 管理媒體目錄');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: 新增媒體檔案');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: 刪除媒體檔案');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: 管理會員的媒體檔案');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: 瀏覽媒體檔案');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: 同步縮圖');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: 管理迴響');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: 管理佈景');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: 瀏覽會員的媒體檔案');
@define('PERMISSION_FORBIDDEN_PLUGINS', '禁用外掛');
@define('PERMISSION_FORBIDDEN_HOOKS', '禁用事件');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', '您的文章已儲存');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', '分線程');
@define('COMMENTS_VIEWMODE_LINEAR', '直線程');
@define('DISPLAY_COMMENTS_AS', '迴響顯示方式');
@define('COMMENTS_DISABLE', '不允許迴響到這篇文章');
@define('COMMENTS_ENABLE', '允許迴響到這篇文章');
@define('COMMENTS_CLOSED', '作者不允許迴響到這篇文章');
@define('VIEW_EXTENDED_ENTRY', '繼續閱讀 "%s"');
@define('TRACKBACK_SPECIFIC', '引用此文章特定的 URI (網址)');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', '瀏覽全部');
@define('VIEW_TOPICS', '瀏覽主題');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', '主題');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', '沒有完成增入文章!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', '記住資料? ');
@define('SUBMIT_COMMENT', '傳送迴響');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', '訂閱這篇文章');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', '您的瀏覽器傳送了錯誤的 HTTP-Referrer 字串。可能是因為 browser/proxy 的錯誤設定或是 Cross Site Request Forgery (XSRF) 的關係。您的動作無法完成。');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', '迴響 #%s 已經通過審核');
@define('COMMENT_EDITED', '文章已被編輯');
@define('COMMENTS_WILL_BE_MODERATED', '發佈的迴響將需要管理員的審核.');
@define('THIS_COMMENT_NEEDS_REVIEW', '警告: 這個迴響須審核才會顯示');
@define('DELETE_COMMENT', '刪除迴響');
@define('APPROVE_COMMENT', '認可迴響');
@define('REQUIRES_REVIEW', '需要審核');
@define('COMMENT_APPROVED', '迴響 #%s 已經通過審核');
@define('COMMENT_DELETED', '迴響 #%s 已經成功刪除');
@define('COMMENTS_MODERATE', '迴響和引用到這個文章需要管理員的審核');
@define('THIS_TRACKBACK_NEEDS_REVIEW', '警告: 這個引用需要管理員的審核才會顯示');
@define('DELETE_TRACKBACK', '刪除引用');
@define('APPROVE_TRACKBACK', '認可引用');
@define('TRACKBACK_APPROVED', '引用 #%s 已經通過審核');
@define('TRACKBACK_DELETED', '引用 #%s 已經成功刪除');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', '最高層');
@define('VIEW_COMMENT', '瀏覽迴響');
@define('VIEW_ENTRY', '瀏覽文章');
@define('LINK_TO_ENTRY', '連結到文章');
@define('LINK_TO_REMOTE_ENTRY', '連結到遠端文章');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', '傳送回測到網頁 %s...');
@define('PINGBACK_SENT', '回測完成');
@define('PINGBACK_FAILED', '回測失敗： %s');
@define('PINGBACK_NOT_FOUND', '沒有回測的網頁。');
@define('TRACKBACK_SENDING', '傳送引用到 URI %s...');
@define('TRACKBACK_SENT', '引用完成');
@define('TRACKBACK_FAILED', '引用錯誤: %s');
@define('TRACKBACK_NOT_FOUND', '找不到引用的URI.');
@define('TRACKBACK_URI_MISMATCH', '自動搜尋的引用跟引用目標不相同.');
@define('TRACKBACK_CHECKING', '搜尋 <u>%s</u> 的引用...');
@define('TRACKBACK_NO_DATA', '目標沒有任何資料');
@define('TRACKBACK_COULD_NOT_CONNECT', '沒有送出引用: 無法開啟線路到 %s 用連接埠 %d');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', '新迴響到訂閱的文章 "%s"');
@define('SUBSCRIPTION_MAIL', "您好 %s,\n\n您訂閱的文章有了新的迴響在 \"%s\", 標題是 \"%s\"\n迴響的發表者是: %s\n\n您可以在這找到此文章: %s\n\n您可以點這個連結取消訂閱: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "您好 %s,\n\n您訂閱的文章有了新的引用在 \"%s\", 標題是 \"%s\"\n引用的作者是: %s\n\n您可以在這找到此文章: %s\n\n您可以點這個連結取消訂閱: %s\n");
@define('SIGNATURE', "\n-- \n%s is powered by Serendipity.\nThe best blog around, you can use it too.\nCheck out <https://s9y.org> to find out how.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', '新迴響已發表到您的網誌 "%s", 在這個文章裡面 "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', '您的網誌文章 "%s" 已有了新的引用.');
@define('YOU_HAVE_THESE_OPTIONS', '您有以下選擇:');
@define('NEW_TRACKBACK_TO', '新的引用到');
@define('NEW_COMMENT_TO', '新的迴響到');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', '找不到此查詢 %s 的文章' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', '您搜尋的 %s 顯示了 %s 結果:');
@define('SEARCH_TOO_SHORT', '您的搜尋字必須多於 3 個字元。您可以用 * 來代表萬用字元，如果搜尋字小於 3 個字元。例如：s9y*。');
@define('SEARCH_ERROR', '搜尋功能發生錯誤. 告知管理員: 發生這個錯誤可能因為資料庫沒有正確的 index keys. 如果使用 MySQL, 您的帳號必須有可執行: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> 的權限. 資料庫顯示的錯誤是: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', '您的迴響沒有任何訊息, 請 %s返回%s 重試');
@define('COMMENT_NOT_ADDED', '您的迴響不能加入因為此篇文章不允許迴響，輸入了錯誤的訊息，或不通過垃圾管理。');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', '迴響來源');

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
@define('PLUGIN_API_VALIDATE_ERROR', '配置的設定 "%s" 語法有誤，需要 "%s" 類型。');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', '顯示類別清單.');
@define('CATEGORIES_PARENT_BASE', '只顯示下面的類別...');
@define('CATEGORIES_PARENT_BASE_DESC', '您可以選擇一個母類別，只顯示它下面的子類別。');
@define('CATEGORIES_HIDE_PARALLEL', '隱藏不在類別結構內的類別');
@define('CATEGORIES_HIDE_PARALLEL_DESC', '如果要隱藏位於其它類別結構的類別，您必須先開啟這個設定。這個功能通常是用在多重網誌的外掛。');
@define('CATEGORIES_HIDE_PARENT', '隱藏選擇的類別？');
@define('CATEGORIES_HIDE_PARENT_DESC', '當您限制類別顯示的列表，預設是會顯示母類別的名稱。如果您關閉這個功能，母類別的名稱將不會顯示。');
@define('CATEGORY_PLUGIN_TEMPLATE', '開啟 Smarty-Templates？');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', '如果開啟這個選項，外掛會利用 Smarty-Templating 的功能來輸出類別列表。您也可以用 "plugin_categories.tpl" 的模版檔案來改變外觀。這個選項會減低網頁的顯示速度，如果您不做任何改變，最好關閉這個選項。');
@define('CATEGORY_PLUGIN_SHOWCOUNT', '顯示每個類別的文章數？');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', '允許訪客顯示多數的類別？');
@define('CATEGORIES_ALLOW_SELECT_DESC', '如果開啟這個選項，在 sidebar 外掛裡的類別旁邊會出現勾選欄位。會員可以勾選要顯示的類別。');
@define('CATEGORIES_TO_FETCH', '顯示類別');
@define('CATEGORIES_TO_FETCH_DESC', '顯示哪位作者的類別?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', '顯示作者列表');
@define('AUTHORS_SHOW_ARTICLE_COUNT', '顯示作者的文章數？');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', '如果開啟這個設定，作者的文章數會顯示在名稱旁邊。');
@define('PLUGIN_AUTHORS_MINCOUNT', '顯示多於 X 文章的作者');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', '文章同步');
@define('SHOWS_RSS_BLAHBLAH', '顯示 RSS 同步連結');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', '您要發佈的文章 ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner 圖片');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', '位於 feedburner.com 的圖片顯示的名稱 (或空白用計數器)。例如：fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner 標題');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', '顯示於圖片旁的標題 (如果有)');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner 圖片文字');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', '滑鼠移上圖片時顯示的文字 (如果有)');
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
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', '隱藏歷史的連接如果時間內沒有文章 (需要計算文章數)');
@define('ARCHIVE_COUNT', '保存文庫的項目數');
@define('ARCHIVE_COUNT_DESC', '顯示的月, 週, 或日');
@define('ARCHIVE_FREQUENCY', '保存文庫的項目頻率');
@define('ARCHIVE_FREQUENCY_DESC', '保存文庫使用的項目清單間隔');
@define('BROWSE_ARCHIVES', '以月份瀏覽保存文庫');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', '以文字顯示 "Serendipity"');
@define('POWERED_BY_SHOW_TEXT_DESC', '將用文字顯示 "Serendipity Weblog"');
@define('POWERED_BY_SHOW_IMAGE', '以 logo 顯示 "Serendipity"');
@define('POWERED_BY_SHOW_IMAGE_DESC', '顯示 Serendipity 的 logo');
@define('ADVERTISES_BLAHBLAH', '宣傳您的網誌');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', '用 https 登入');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', '讓登入連結連到 https 網址. 您的主機必須支援這項功能!');
@define('SUPERUSER', '網誌管理');
@define('SUPERUSER_OPEN_ADMIN', '開啟管理頁面');
@define('SUPERUSER_OPEN_LOGIN', '開啟登入頁面');
@define('ALLOWS_YOU_BLAHBLAH', '在側列提供連結到網誌管理');

/* PLUGIN_CALENDAR */
@define('CALENDAR', '日曆');
@define('CALENDAR_BOW_DESC', '一個禮拜的第一天. 預設是星期一');
@define('QUICKJUMP_CALENDAR', '日曆快速跳躍');
@define('CALENDAR_BEGINNING_OF_WEEK', '一週的第一天');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', '開啟外掛 API');
@define('CALENDAR_EXTEVENT_DESC', '如果開啟，外掛可以在日曆內以顏色突顯它的事件。如果沒有使用這些特殊的外掛，建議不要使用。');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', '搜尋文章');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', '顯示 HTML 訊息到側列');
@define('THE_NUGGET', 'HTML 訊息!');
@define('BACKEND_TITLE', '外掛配置頁面的額外資訊');
@define('BACKEND_TITLE_FOR_NUGGET', '這裡您可以設定一些自訂的文字，它們跟 HTML Nugget 外掛一樣會顯示在外掛配置頁面。如果您有多個沒有標題的 HTML Nuggets，這個可以讓您分辨多相同的外掛。');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', '以連結顯示 主要出源/主要來源?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"否": 出源和來源將用文字顯示以避免 google 的廣告. "是": 出源和來源將用連結顯示. "預設": 用全區裡面的設定 (建議).');
@define('HAVE_TO_BE_LOGGED_ON', '請先登入');
@define('WELCOME_TO_ADMIN', '歡迎到 Serendipity 管理介面.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', '短介紹');
@define('MEDIA_PROPERTY_COMMENT2', '長介紹');
@define('DELETE_SELECTED_ENTRIES', '刪除選擇的文章');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', '標題');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity 還沒安裝完成. 請按 <a href="%s">安裝</a>.');
@define('COMMENT_ADDED_CLICK', '點 %s這裡返回%s 到迴響, 和點 %s這裡關閉%s 這個視窗.');
@define('COMMENT_NOT_ADDED_CLICK', '點 %s這裡返回%s 到迴響, 和點 %s這裡關閉%s 這個視窗.');
@define('MEDIA_PROPERTY_RUN_LENGTH', '長度');
@define('MEDIA_PROPERTY_DATE', '相關日期');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', '移動 %s 篇文章的網誌到新的目錄。');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', '在非 MySQL 資料庫內，無法移動文章到新的目錄。您需要自己修改文章的網址。您還是可以將舊目錄回覆到原來的位址。');
@define('TRACKBACK_SIZE', '目標 URI 超出了允許的 %s bytes 檔案大小.');
@define('CLICK_FILE_TO_INSERT', '點選您要輸入的檔案:');
@define('SELECT_FILE', '選擇要輸入的檔案');
@define('MANAGE_IMAGES', '管理圖片');
@define('WORD_NEW', '新');
@define('WORD_OR', '或');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', '前端：外部服務');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', '前端：功能');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', '前端：完整外掛');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', '前端：瀏覽');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', '前端：相關文章');
@define('PLUGIN_GROUP_BACKEND_EDITOR', '後端：編輯器');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', '後端：會員管理');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', '後端：Meta 資訊');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', '後端：模板');
@define('PLUGIN_GROUP_BACKEND_FEATURES', '後端：功能');
@define('PLUGIN_GROUP_IMAGES', '圖片');
@define('PLUGIN_GROUP_ANTISPAM', '防止廣告');
@define('PLUGIN_GROUP_MARKUP', '標記');
@define('PLUGIN_GROUP_STATISTICS', '統計資料');
@define('IMPORT_WELCOME', '歡迎來到 Serendipity 的輸入工具');
@define('USER_SELF_INFO', '登入作者是 %s (%s)');
@define('IMPORT_WHAT_CAN', '在這裡您可以輸入在其他網路網誌程式裡的文章');
@define('IMPORT_SELECT', '請選擇輸入文章的網誌程式');
@define('MANAGE_STYLES', '佈景管理');
@define('SELECT_A_PLUGIN_TO_ADD', '請選擇要安裝的外掛');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', '下面是安裝好的外掛');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', '放棄');
@define('DELETE_SELECTED_COMMENTS', '刪除勾選的迴響');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', '搜尋媒體');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', '錯誤: 檔案不存在!');
@define('ERROR_SOMETHING', '錯誤: 有錯誤.');
@define('DIRECT_LINK', '直接的文章連結');
@define('SELECT_TEMPLATE', '請選擇網誌的佈景');
@define('DATABASE_ERROR', 'serendipity 錯誤: 無法連結到資料庫 - 退出.');
@define('LIMIT_TO_NUMBER', '要顯示多少項目?');
@define('DIRECTORIES_AVAILABLE', '您可以在子目錄內點任何目錄來建立新的目錄.');
@define('CATEGORY_INDEX', '下面是可移動到的類別');
@define('PAGE_BROWSE_PLUGINS', '頁數 %s 共 %s, 總共 %s 個外掛。');
@define('CHARSET_NATIVE', '預設');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API 功能已不加在 s9y 的安裝裡，因為漏洞和不多人使用的關係。所以您必須安裝 XML-RPC 的外掛如果要使用 XML-RPC API。所有的 URL 不會因此改變，安裝這個外掛後可以馬上使用。');
@define('AUTHORS_ALLOW_SELECT', '允許訪客顯示多位作者？');
@define('AUTHORS_ALLOW_SELECT_DESC', '如果允許這個選項，訪客可以勾選要讀取的作者的文章。');
@define('PREFERENCE_USE_JS', '開啟進階的 JS 用法？');
@define('PREFERENCE_USE_JS_DESC', '如果開啟，進階的 JavaScript 將會提供更好的用途，例如類似外掛設定內的牽曳和移動功能。');
@define('PREFERENCE_USE_JS_WARNING', '(這個頁面使用了進階的 JavaScript。如果您遇到問題，請將進階的 JS 用法或瀏覽器的 JavaScript 關閉。)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
