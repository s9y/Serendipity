<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translated by
# (c) 2006 Aphonex Li <aphonex.li@gmail.com> 
#          http://www.cexten.com  
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'zh_CN.UTF-8, cn, zh, zh_GB, zh_CN');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');

@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity智能博客系统'); // 后台管理页
@define('HAVE_TO_BE_LOGGED_ON', '请先登入');
@define('WRONG_USERNAME_OR_PASSWORD', '输入的帐号或密码有误');
@define('APPEARANCE', '主要配置');
@define('MANAGE_STYLES', '主题管理');
@define('CONFIGURE_PLUGINS', '设定外挂');
@define('CONFIGURATION', '管理设定');
@define('BACK_TO_BLOG', '网站首页');
@define('LOGIN', '登入');
@define('LOGOUT', '登出');
@define('LOGGEDOUT', '登出！');
@define('CREATE', '建立');
@define('SAVE', '保存');
@define('NAME', '名称');
@define('CREATE_NEW_CAT', '添加');
@define('I_WANT_THUMB', '在文章内使用缩图.');
@define('I_WANT_BIG_IMAGE', '在文章内使用大型图片.');
@define('I_WANT_NO_LINK', '以图片显示');
@define('I_WANT_IT_TO_LINK', '以连接显示这个网址:');
@define('BACK', '返回');
@define('FORWARD', '前进');
@define('ANONYMOUS', '匿名');
@define('NEW_TRACKBACK_TO', '新的引用到');
@define('NEW_COMMENT_TO', '新的回复到');
@define('RECENT', '新文库...');
@define('OLDER', '旧文库...');
@define('DONE', '完成');
@define('WELCOME_BACK', '非常高兴见到你,');
@define('TITLE', '标题');
@define('DESCRIPTION', '简介');
@define('PLACEMENT', '地址');
@define('DELETE', '删除');
@define('SAVE', '保存');
@define('UP', '上');
@define('DOWN', '下');
@define('ENTRIES', '文章管理');
@define('NEW_ENTRY', '新增文章');
@define('EDIT_ENTRIES', '编辑文章');
@define('CATEGORIES', '类别管理');
@define('WARNING_THIS_BLAHBLAH', "警告:\\n如果有很多图片的话，可能需要很长时间。");
@define('CREATE_THUMBS', '重建细图');
@define('MANAGE_IMAGES', '管理图片');
@define('NAME', '名称');
@define('EMAIL', '电邮');
@define('HOMEPAGE', '网址');
@define('COMMENT', '回复');
@define('REMEMBER_INFO', '记录资料');
@define('SUBMIT_COMMENT', '发送回复');
@define('NO_ENTRIES_TO_PRINT', '没有文章');
@define('COMMENTS', '回复'); // 首页
@define('ADD_COMMENT', '新增回复');
@define('NO_COMMENTS', '没有回复');
@define('POSTED_BY', '作者');
@define('ON', '在');
@define('A_NEW_COMMENT_BLAHBLAH', '新回复已发表在网站 "%s", 在这个文章里面 "%s"。');
@define('A_NEW_TRACKBACK_BLAHBLAH', '你的文章 "%s" 已有新的引用。');
@define('NO_CATEGORY', '没有类别');
@define('ENTRY_BODY', '文章主内容');
@define('EXTENDED_BODY', '文章副内容');
@define('CATEGORY', '全部类别'); // 首页
@define('EDIT', '编辑');
@define('NO_ENTRIES_BLAHBLAH', '找不到查询 %s 的文章' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', '你搜寻的 %s 显示了 %s 结果:');
@define('IMAGE', '图片');
@define('ERROR_FILE_NOT_EXISTS', '错误: 文件不存在！');
@define('ERROR_FILE_EXISTS', '错误: 文件名已被使用, 请重新输入！');
@define('ERROR_SOMETHING', '错误！');
@define('ADDING_IMAGE', '新增图片...');
@define('THUMB_CREATED_DONE', '缩图建立，<br>完成！');
@define('ERROR_FILE_EXISTS_ALREADY', '错误: 文件已存在');
@define('ERROR_UNKNOWN_NOUPLOAD', '发生错误, 文件没有上传，可能因为你的文件超过限制的大小， 请询问你的主机商或修改你的 php.ini 文件属性。');
@define('GO', '继续');
@define('NEWSIZE', '大小: ');
@define('RESIZE_BLAHBLAH', '<b>重设大小 %s</b>');
@define('ORIGINAL_SIZE', '原有的大小: <i>%sx%s</i> 像素');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>在这里你可以修改图片大小！如果你要修改成相同的图片比例, 你只需要输入一个数值然后按 TAB -- 系统会自动帮你计算比例以免出错。</p>');
@define('QUICKJUMP_CALENDAR', '日历快速跳跃');
@define('QUICKSEARCH', '快速搜寻');
@define('SEARCH_FOR_ENTRY', '搜寻文章');
@define('ARCHIVES', '文章归档');
@define('BROWSE_ARCHIVES', '以月份保存文章');
@define('TOP_REFERRER', '主要来源');
@define('SHOWS_TOP_SITES', '显示连接到你的网站');
@define('TOP_EXITS', '主要出源');
@define('SHOWS_TOP_EXIT', '显示网站的主要出源');
@define('SYNDICATION', '文章同步');
@define('SHOWS_RSS_BLAHBLAH', '显示 RSS 同步连接');
@define('ADVERTISES_BLAHBLAH', '宣传你的日志');
@define('HTML_NUGGET', 'HTML 信息');
@define('HOLDS_A_BLAHBLAH', '显示 HTML 讯息到侧列');
@define('TITLE_FOR_NUGGET', '信息标题');
@define('THE_NUGGET', 'HTML 讯息');
@define('SYNDICATE_THIS_BLOG', '集合菜单');
@define('YOU_CHOSE', '你选择 %s');
@define('IMAGE_SIZE', '图片大小');
@define('IMAGE_AS_A_LINK', '输入图片');
@define('POWERED_BY', '网站信息');
@define('TRACKBACKS', '引用');
@define('TRACKBACK', '引用');
@define('NO_TRACKBACKS', '没有引用');
@define('TOPICS_OF', '主题');
@define('VIEW_FULL', '浏览全部');
@define('VIEW_TOPICS', '浏览主题');
@define('AT', '时间');
@define('SET_AS_TEMPLATE', '使用主题');
@define('IN', '分类');
@define('EXCERPT', '摘要');
@define('TRACKED', '引用');
@define('LINK_TO_ENTRY', '连接到文章');
@define('LINK_TO_REMOTE_ENTRY', '连接到远端文章');
@define('IP_ADDRESS', 'IP 地址');
@define('USER', '作者');
@define('THUMBNAIL_USING_OWN', '使用 %s 当它的缩图尺寸因为图片已经很小了。');
@define('THUMBNAIL_FAILED_COPY', '使用 %s 当它的缩图, 但是无法复制！');
@define('AUTHOR', '发表者');
@define('LAST_UPDATED', '最后更新');
@define('TRACKBACK_SPECIFIC', '引用此文章特定的网址');
@define('DIRECT_LINK', '直接的文章连接');
@define('COMMENT_ADDED', '你的回复已成功添加 ');
@define('COMMENT_ADDED_CLICK', '点 %s这里返回%s 到回复, 和点 %s这里关闭%s 这个视窗。');
@define('COMMENT_NOT_ADDED_CLICK', '点 %s这里返回%s 到回复, 和点 %s这里关闭%s 这个视窗。');
@define('COMMENTS_DISABLE', '不允许回复到这篇文章');
@define('COMMENTS_ENABLE', '允许回复到这篇文章');
@define('COMMENTS_CLOSED', '作者不允许回复到这篇文章');
@define('EMPTY_COMMENT', '你的回复没有任何信息, 请 %s返回%s 重试');
@define('ENTRIES_FOR', '文章给 %s');
@define('DOCUMENT_NOT_FOUND', '找不到此篇文件 %s');
@define('USERNAME', '帐号');
@define('PASSWORD', '密码');
@define('AUTOMATIC_LOGIN', '自动登入');
@define('SERENDIPITY_INSTALLATION', 'Serendipity 安装程序');
@define('LEFT', '左');
@define('RIGHT', '右');
@define('HIDDEN', '隐藏');
@define('REMOVE_TICKED_PLUGINS', '移除勾选的外挂');
@define('SAVE_CHANGES_TO_LAYOUT', '保存主题配置');
@define('COMMENTS_FROM', '回复来源');
@define('ERROR', '错误');
@define('ENTRY_SAVED', '你的文章已保存');
@define('DELETE_SURE', '确定要删除 #%s 吗？');
@define('NOT_REALLY', '重来...');
@define('DUMP_IT', '删除');
@define('RIP_ENTRY', 'R.I.P. 文章 #%s');
@define('CATEGORY_DELETED_ARTICLES_MOVED', '类别 #%s 已删除. 旧文章已被移动到类别 #%s');
@define('CATEGORY_DELETED', '类别 #%s 已删除！');
@define('INVALID_CATEGORY', '没有提供删除的类别');
@define('CATEGORY_SAVED', '类别已保存');
@define('SELECT_TEMPLATE', '请选择日志的主题');
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', '没有完成增入文章！');
@define('MT_DATA_FILE', 'Movable Type 数据');
@define('FORCE', '强制');
@define('CREATE_AUTHOR', '新增作者 \'%s\'.');
@define('CREATE_CATEGORY', '新增类别 \'%s\'.');
@define('MYSQL_REQUIRED', '你必须要有 MySQL 的扩充功能才能执行这个动作');
@define('COULDNT_CONNECT', '不能连接到 MySQL 资料库: %s.');
@define('COULDNT_SELECT_DB', '不能选择数据库: %s.');
@define('COULDNT_SELECT_USER_INFO', '不能选择使用者的资料: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', '不能选择类别的资料: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', '不能选择文章的资料: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', '不能选择回复的资料: %s.');
@define('YES', '是');
@define('NO', '否');
@define('USE_DEFAULT', '预设');
@define('CHECK_N_SAVE', '保存');
@define('DIRECTORY_WRITE_ERROR', '不能读写文件夹 %s，请检查权限！');
@define('DIRECTORY_CREATE_ERROR', '文件夹 %s 不存在也无法建立，请自己建立这个文件夹！');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; run <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', '无法执行 %s 文件！');
@define('FILE_WRITE_ERROR', '无法读写文件 %s！');
@define('FILE_CREATE_YOURSELF', '请自己建立这个文件或检查权限');
@define('COPY_CODE_BELOW', '<br />* 请复制下面的代码然后放入 %s 到你的 %s 文件夹:<b><pre>%s</pre></b>' . "\n");
@define('WWW_USER', '请改变 www 到使用者的 Apache (i.e. nobody)！');
@define('BROWSER_RELOAD', '完成之后, 重新刷新你的浏览器.');
@define('DIAGNOSTIC_ERROR', '系统检测到一些错误:');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity 还没安装完成. 请按 <a href="%s">安装</a>.');
@define('INCLUDE_ERROR', 'serendipity 错误: 无法包括 %s - 退出！');
@define('DATABASE_ERROR', 'serendipity 错误: 无法连接到库 - 退出！');
@define('CHECK_DATABASE_EXISTS', '检查数据库是否存在。 如果你看到数据库查询错误, 是否需要重装...');
@define('CREATE_DATABASE', '建立预设数据库库设定...');
@define('ATTEMPT_WRITE_FILE', '读写 %s 文件...');
@define('SERENDIPITY_INSTALLED', 'Serendipity 简体中文版本 已安装完成！%s 请记得你的密码: "%s", 你的帐号是 "%s".%s你现在可以到新建立的 <a href="%s">网络日记</a>');
@define('WRITTEN_N_SAVED', '保存完毕');
@define('IMAGE_ALIGNMENT', '图片对齐');
@define('ENTER_NEW_NAME', '输入新名称: ');
@define('RESIZING', '重设大小');
@define('RESIZE_DONE', '完成 (重设 %s 个图片)');
@define('SYNCING', '进行数据库和图片文件夹数据同步');
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('SYNC_DONE', '完成 (同步了 %s 个图片)');
@define('FILE_NOT_FOUND', '找不到文件 <b>%s</b>, 可能已被删除');
@define('ABORT_NOW', '放弃');
@define('REMOTE_FILE_NOT_FOUND', '文件不在远程主机内, 你确定这个网址: <b>%s</b> 是正确的。');
@define('FILE_FETCHED', '%s 取回为 %s');
@define('FILE_UPLOADED', '文件 %s 上传为 %s');
@define('WORD_OR', '或');
@define('SCALING_IMAGE', '缩放 %s 到 %s x %s 像素');
@define('KEEP_PROPORTIONS', '维持比例');
@define('REALLY_SCALE_IMAGE', '确定要缩放图片吗? 这个动作不能恢复！');
@define('TOGGLE_ALL', '切换展开');
@define('TOGGLE_OPTION', '切换选项');
@define('SUBSCRIBE_TO_THIS_ENTRY', '订阅这篇文章');
@define('UNSUBSCRIBE_OK', "%s 已取消订阅这篇文章");
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', '新回复到订阅的文章 "%s"');
@define('SUBSCRIPTION_MAIL', "你好 %s,\n\n你订阅的文章有了新的回复在 \"%s\", 标题是 \"%s\"\n回复的发表者是: %s\n\n你可以在这找到此文章: %s\n\n你可以点这个连接取消订阅: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "你好 %s,\n\n你订阅的文章有了新的引用在 \"%s\", 标题是 \"%s\"\n引用的作者是: %s\n\n你可以在这找到此文章: %s\n\n你可以点这个连接取消订阅: %s\n");
@define('SIGNATURE', "\n-- \n%s is powered by Serendipity.\n <http://www.s9y.org>");
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 comments');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '菜单 "managingEditor"');
@define('SYNDICATION_PLUGIN_WEBMASTER',  '菜单 "webMaster"');
@define('SYNDICATION_PLUGIN_BANNERURL', 'RSS feed 的图片');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '图片宽度');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', '图片高度');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC',  '管理员的电子邮件, 如果有： (空白: 隐藏) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', '作者的电子邮件, 如果有： (空白: 隐藏) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', '图片的位址 URL, 以 GIF/JPEG/PNG 格式, 如果有： (空白: serendipity-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', '像素, 最大. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', '像素, 最大. 400');
@define('SYNDICATION_PLUGIN_TTL', '菜单 "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', '在几分钟后，文章不会被其它的网站或程序记录 (空白: 隐藏) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '栏位 "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', '"pubDate"-菜单需要内嵌到RSS-频道, 以显示最后文章的日期吗？');
@define('CONTENT', '内容');
@define('TYPE', '类型');
@define('DRAFT', '草稿');
@define('PUBLISH', '公开');
@define('PREVIEW', '预览');
@define('DATE', '日期');
@define('DATE_FORMAT_2', 'Y-m-d H:i'); // Needs to be ISO 8601 compliant for date conversion!
@define('DATE_INVALID', '警告: 提供的日期不正确. 它必须是 YYYY-MM-DD HH:MM 的格式');
@define('CATEGORY_PLUGIN_DESC', '显示类别清单');
@define('ALL_AUTHORS', '全部作者');
@define('CATEGORIES_TO_FETCH', '显示类别');
@define('CATEGORIES_TO_FETCH_DESC', '显示哪位作者的类别？');
@define('PAGE_BROWSE_ENTRIES', '页数 %s 共 %s, 总共 %s 篇文章');
@define('PREVIOUS_PAGE', '上一页');
@define('NEXT_PAGE', '下一页');
@define('ALL_CATEGORIES', '全部类别');
@define('DO_MARKUP', '执行标记转换');
@define('GENERAL_PLUGIN_DATEFORMAT', '日期格式');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', '文章的日期格式, 使用 PHP 的 strftime() 变数. (预设: "%s")');
@define('ERROR_TEMPLATE_FILE', '无法开启主题文件, 请更新系统！');
@define('ADVANCED_OPTIONS', '高级选项');
@define('EDIT_ENTRY', '编辑文章');
@define('HTACCESS_ERROR', '要检查你的安装设定, 系统需要读写 ".htaccess"，但是因为权限错误, 没有办法为你检查，请改变文件权限: <br />&nbsp;&nbsp;%s<br />然后刷新。');
@define('SIDEBAR_PLUGINS', '侧列外挂');
@define('EVENT_PLUGINS', '事件外挂');
@define('SORT_ORDER', '排序');
@define('SORT_ORDER_NAME', '文件名称');
@define('SORT_ORDER_EXTENSION', '副文件名');
@define('SORT_ORDER_SIZE', '文件大小');
@define('SORT_ORDER_WIDTH', '图片宽度');
@define('SORT_ORDER_HEIGHT', '图片长度');
@define('SORT_ORDER_DATE', '上传日期');
@define('SORT_ORDER_ASC', '递增排序');
@define('SORT_ORDER_DESC', '递减排序');
@define('THUMBNAIL_SHORT', '缩图');
@define('ORIGINAL_SHORT', '原始');
@define('APPLY_MARKUP_TO', '套用标记到 %s');
@define('CALENDAR_BEGINNING_OF_WEEK', '一周的第一天');
@define('SERENDIPITY_NEEDS_UPGRADE', '系统到你的版本是 %s, 但 Serendipity 现在的版本是 %s, 请更新你的程序！<a href="%s">更新</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', '你好, 欢迎使用 Serendipity 的更新程序');
@define('SERENDIPITY_UPGRADER_PURPOSE', '更新程序会帮你更新到 Serendipity 版本 %s.');
@define('SERENDIPITY_UPGRADER_WHY', '你已经更新 Serendipity %s, 请放心系统没有更改你的数据库！');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', '数据库更新 (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', '系统找到以下的 .sql 表, 这些数据必须先执行才能继续安装 Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC',  '特定的版本任务');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '没有特定的版本任务');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', '确定要执行以上的任务吗?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', '我自己执行');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', '请帮我执行');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', '不需要进行任何更新');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity 更新完成');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', '你跳过了更新任务, 请确定数据库已安装完成, 和其它的任务安装无误！');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', '你的 Serendipity 已经更新版本为 %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', '你可以点 %s这里%s 返回网站首页');
@define('MANAGE_USERS', '管理作者');
@define('CREATE_NEW_USER', '新增作者');
@define('CREATE_NOT_AUTHORIZED', '你不能修改跟你相同权限的作者');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', '你不能新增比你更高权限的作者');
@define('CREATED_USER', '新作者 %s 已经新增');
@define('MODIFIED_USER', '作者 %s 的资料已经更改');
@define('USER_LEVEL', '作者权限');
@define('DELETE_USER', '你要删除这个作者 #%d %s? 这会在主页隐藏他所写的任何文章。');
@define('DELETED_USER', '作者 #%d %s 已被删除.');
@define('LIMIT_TO_NUMBER', '要显示多少项');
@define('ENTRIES_PER_PAGE', '每页显示的文章');
@define('XML_IMAGE_TO_DISPLAY', 'XML 按钮');
@define('XML_IMAGE_TO_DISPLAY_DESC','连接到 XML Feeds 的都会用这个图片表示. 不填写将会使用预设的图片, 或输入 \'none\' 关闭这个功能。');

@define('DIRECTORIES_AVAILABLE', '你可以在这里建立媒体存放的目录');
@define('ALL_DIRECTORIES', '全部目录');
@define('MANAGE_DIRECTORIES', '管理目录');
@define('DIRECTORY_CREATED', '目录 <strong>%s</strong> 已经新增');
@define('PARENT_DIRECTORY', '主目录');
@define('CONFIRM_DELETE_DIRECTORY', '确定要删除这个目录内的全部内容 %s');
@define('ERROR_NO_DIRECTORY', '错误: 目录 %s 不存在');
@define('CHECKING_DIRECTORY', '检查此目录的文件 %s');
@define('DELETING_FILE', '删除文件 %s...');
@define('ERROR_DIRECTORY_NOT_EMPTY', '不能删除未清空的目录. 勾选 "强制删除" 如果你确定要删除这些文件, 然后在继续， 存在的文件是:');
@define('DIRECTORY_DELETE_FAILED', '不能删除目录 %s. 请检查权限或看上面的讯息.');
@define('DIRECTORY_DELETE_SUCCESS', '目录 %s 成功删除.');
@define('SKIPPING_FILE_EXTENSION', '跳过文件: 没有 %s 的副档名');
@define('SKIPPING_FILE_UNREADABLE', '略过文件: %s 不能读取');
@define('FOUND_FILE', '找到 新/修改 过的档案: %s');
@define('ALREADY_SUBCATEGORY', '%s 已经是此类别的子分类 %s');
@define('PARENT_CATEGORY', '主类别');
@define('IN_REPLY_TO', '回复到');
@define('TOP_LEVEL', '最高层');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('PERMISSIONS', '权限');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('SETTINGS_SAVED_AT', '新设定已经被保存到 %s');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', '数据库设定');
@define('INSTALL_CAT_DB_DESC', '你可以在这输入全部的数据库资料，系统需要这些资料才能正常运作');
@define('INSTALL_DBTYPE', '数据库类型');
@define('INSTALL_DBTYPE_DESC', '数据库类型');
@define('INSTALL_DBHOST', '数据库主机');
@define('INSTALL_DBHOST_DESC', '数据库主机名称');
@define('INSTALL_DBUSER', '数据库帐号');
@define('INSTALL_DBUSER_DESC', '登入数据库的帐号');
@define('INSTALL_DBPASS', '数据密码');
@define('INSTALL_DBPASS_DESC', '你的数据库密码');
@define('INSTALL_DBNAME', '数据名称');
@define('INSTALL_DBNAME_DESC', '资料库名称');
@define('INSTALL_DBPREFIX', '表前置名称');
@define('INSTALL_DBPREFIX_DESC', '表的前置名称, 例如 serendipity_');

/* PATHS */
@define('INSTALL_CAT_PATHS', '路径设定');
@define('INSTALL_CAT_PATHS_DESC', '给文件夹的路径. 不要忘了最后的斜线!');
@define('INSTALL_FULLPATH', '完全路径');
@define('INSTALL_FULLPATH_DESC', '系统安装的完整路径和绝对路径');
@define('INSTALL_UPLOADPATH', '上传路径');
@define('INSTALL_UPLOADPATH_DESC', '全部上传的文件会存到这里, 以 \'完全路径\' 表示的相对路径 - 例如 \'uploads/\'');
@define('INSTALL_RELPATH', '相对路径');
@define('INSTALL_RELPATH_DESC', '给浏览器的路径, 例如 \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', '相对的主题路径');
@define('INSTALL_RELTEMPLPATH_DESC', '主题的路径 - 以 \'相对路径\' 表示的相对路径');
@define('INSTALL_RELUPLOADPATH', '相对的上传路径');
@define('INSTALL_RELUPLOADPATH_DESC', '给浏览器上传文件的路径 - 以 \'相对路径\' 表示的相对路径');
@define('INSTALL_URL', '网站地址');
@define('INSTALL_URL_DESC', '系统安装的基本地址');
@define('INSTALL_INDEXFILE', 'Index 文件');
@define('INSTALL_INDEXFILE_DESC', '系统的 index 文件');

/* Generel settings */
@define('INSTALL_CAT_SETTINGS', '一般设定');
@define('INSTALL_CAT_SETTINGS_DESC', '系统的一般设定');
@define('INSTALL_USERNAME', '管理员帐号');
@define('INSTALL_USERNAME_DESC', '管理员登陆系统的帐号');
@define('INSTALL_PASSWORD', '管理员密码');
@define('INSTALL_PASSWORD_DESC', '管理员登陆系统的密码');
@define('INSTALL_EMAIL', '电子邮件');
@define('INSTALL_EMAIL_DESC', '管理员的电子邮件');
@define('INSTALL_SENDMAIL', '发送电子邮件给管理员？');
@define('INSTALL_SENDMAIL_DESC', '当有人回复你的文章时要收到电子邮件通知吗？');
@define('INSTALL_SUBSCRIBE', '允许使用者订阅文章?');
@define('INSTALL_SUBSCRIBE_DESC', '你可以允许使用者收到电子邮件通知, 当有回复时他们会收到通知。');
@define('INSTALL_BLOGNAME', '网站名称');
@define('INSTALL_BLOGNAME_DESC', '你网站的名称');
@define('INSTALL_BLOGDESC', '网站简介');
@define('INSTALL_BLOGDESC_DESC', '介绍你的日志');
@define('INSTALL_LANG', '语言');
@define('INSTALL_LANG_DESC', '你网站使用的语言');

/* Appearance and options */
@define('INSTALL_CAT_DISPLAY', '主题及选项设定');
@define('INSTALL_CAT_DISPLAY_DESC', '设定系统的主题和其它设定');
@define('INSTALL_WYSIWYG', '使用 WYSIWYG 编辑器');
@define('INSTALL_WYSIWYG_DESC', '你要使用 WYSIWYG 编辑器吗？(可在 IE5+ 使用, 某些部分可使用于 Mozilla 1.3+)');
@define('INSTALL_XHTML11', '强制符合 XHTML 1.1 要求');
@define('INSTALL_XHTML11_DESC', '让你的系统强制符合 XHTML 1.1 要求 (对旧的浏览器可能有问题)');
@define('INSTALL_POPUP', '使用弹出窗口');
@define('INSTALL_POPUP_DESC', '你要在回复、引用等地方使用弹出窗口吗？');
@define('INSTALL_EMBED', '使用内嵌功能?');
@define('INSTALL_EMBED_DESC', '如果你要将 Serendipity 以内嵌的方式放到网页内, 选择 是 会让你放弃任何标题然后只显示网站内容。 你可以用 indexFile 来设定这个功能。详情请查询 README 文件!');
@define('INSTALL_TOP_AS_LINKS', '以连接方式显示 主要出源/主要来源');
@define('INSTALL_TOP_AS_LINKS_DESC', '"否": 出源和来源将用文字显示，避免 google 的广告。 "是": 出源和来源将用连接显示. "预设": 用全区里面的设定 (建议)');
@define('INSTALL_BLOCKREF', '阻挡来源');
@define('INSTALL_BLOCKREF_DESC', '有特殊的网站不在来源里显示吗? 用 \';\' 来分开网站名称, 注意程序是以字符方式阻挡的！');
@define('INSTALL_REWRITE', 'URL Rewriting');
@define('INSTALL_REWRITE_DESC', '请选择 URL Rewriting 方式，开启 rewrite 规则会以比较清楚的方式显示 URL, 以便搜索网站能正确的收录你的文章，不过你的主机必须支持 mod_rewrite 或 "AllowOverride All" 的功能。[预设的设定是系统自动帮你检测]');

/* Imageconversion Settings */
@define('INSTALL_CAT_IMAGECONV', '图片转换设定');
@define('INSTALL_CAT_IMAGECONV_DESC', '请设定图片转换的方式');
@define('INSTALL_IMAGEMAGICK', '使用 Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', '如果安装 image magick, 你要用它来改变图片大小吗?');
@define('INSTALL_IMAGEMAGICKPATH', '转换程式路径');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'image magick 转换程式的完全路径和名称');
@define('INSTALL_THUMBSUFFIX', '缩图后置字符');
@define('INSTALL_THUMBSUFFIX_DESC', '缩图会以下面的格式重新命名: original.[后置字符].ext');
@define('INSTALL_THUMBWIDTH', '缩图大小');
@define('INSTALL_THUMBWIDTH_DESC', '自动建立缩图的最大宽度');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . 
    INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . 
    INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . 
    '" only limit the chosen dimension, so the other could be larger than the max size.');

/* Personal details */
@define('USERCONF_CAT_PERSONAL', '个人资料设定');
@define('USERCONF_CAT_PERSONAL_DESC', '改变你的个人资料');
@define('USERCONF_USERNAME', '你的帐号');
@define('USERCONF_USERNAME_DESC', '你登入系统的名称');
@define('USERCONF_PASSWORD', '你的密码');
@define('USERCONF_PASSWORD_DESC', '你登入系统的密码');
@define('USERCONF_EMAIL', '你的电子邮件');
@define('USERCONF_EMAIL_DESC', '你使用的电子邮件');
@define('USERCONF_SENDCOMMENTS', '寄送回复通知');
@define('USERCONF_SENDCOMMENTS_DESC', '当有新回复时使用通知');
@define('USERCONF_SENDTRACKBACKS', '寄送引用通知?');
@define('USERCONF_SENDTRACKBACKS_DESC', '当有新引用时使用通知');
@define('USERCONF_ALLOWPUBLISH', '权限: 可发布文章');
@define('USERCONF_ALLOWPUBLISH_DESC', '允许这位作者发布文章');
@define('SUCCESS', '完成');
@define('POWERED_BY_SHOW_TEXT', '以文字显示 "Serendipity"');
@define('POWERED_BY_SHOW_TEXT_DESC', '将用文字显示 "Serendipity Weblog"');
@define('POWERED_BY_SHOW_IMAGE', '以 logo 显示 "Serendipity"');
@define('POWERED_BY_SHOW_IMAGE_DESC', '显示 Serendipity 的 logo');
@define('PLUGIN_ITEM_DISPLAY', '该项目的显示地址');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', '只在副内容显示');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', '只在框架内显示');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '永远显示');

@define('COMMENTS_WILL_BE_MODERATED', '发布的回复需要管理员审核');
@define('YOU_HAVE_THESE_OPTIONS', '你有以下选择:');
@define('THIS_COMMENT_NEEDS_REVIEW', '警告: 这个回复须审核才会显示！');
@define('DELETE_COMMENT', '删除回复');
@define('APPROVE_COMMENT', '审核回复');
@define('REQUIRES_REVIEW', '需要审核');
@define('COMMENT_APPROVED', '回复 #%s 已经通过审核');
@define('COMMENT_DELETED', '回复 #%s 已经成功删除');
@define('COMMENTS_MODERATE', '回复和引用需要管理员审核');
@define('THIS_TRACKBACK_NEEDS_REVIEW', '警告: 这个引用需要管理员审核才会显示！');
@define('DELETE_TRACKBACK', '删除引用');
@define('APPROVE_TRACKBACK', '审核引用');
@define('TRACKBACK_APPROVED', '引用 #%s 已经通过审核');
@define('TRACKBACK_DELETED', '引用 #%s 已经成功删除');
@define('VIEW', '浏览');
@define('COMMENT_ALREADY_APPROVED', '回复 #%s 已经通过审核');
@define('COMMENT_EDITED', '文章已被编辑');
@define('HIDE', '隐藏');
@define('VIEW_EXTENDED_ENTRY', '继续阅读 "%s"');
@define('TRACKBACK_SPECIFIC_ON_CLICK', '这个连接不是用来点的. 它包含了这个文章的引用 URI. 你可以从这个 URI 来传送 ping 和引用到这个文章. 如果要复制这个连接, 在连接上点右键然后选择 "复制连接" (IE) 或 "复制连接地址" (Mozilla).');
@define('PLUGIN_SUPERUSER_HTTPS', '用 https 登入');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', '使用 https 网址。你的主机必须支持这项功能');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '让外部连接显示');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"否": 外部连接 (主要出源, 主要来源, 回复) 都不会以文字显示，避免 google 广告 (建议使用)； "是": 外来连接将以超连接的方式显示， 可以在侧列外挂覆盖此设定。');
@define('PAGE_BROWSE_COMMENTS', '页数 %s 共 %s, 总共 %s 个回复');
@define('FILTERS', '过滤');
@define('FIND_ENTRIES', '搜索文章');
@define('FIND_COMMENTS', '搜索回复');
@define('FIND_MEDIA', '搜索媒体');
@define('FILTER_DIRECTORY', '目录');
@define('SORT_BY', '排序');
@define('TRACKBACK_COULD_NOT_CONNECT', '没有送出引用: 无法开启路径到 %s 用连接到 %d');
@define('MEDIA', '媒体管理');
@define('MEDIA_LIBRARY', '媒体图库');
@define('ADD_MEDIA', '新增媒体');
@define('ENTER_MEDIA_URL', '请输入文件地址:');
@define('ENTER_MEDIA_UPLOAD', '请选择要上传的文件:');
@define('SAVE_FILE_AS', '保存文件:');
@define('STORE_IN_DIRECTORY', '保存到以下目录: ');
@define('ADD_MEDIA_BLAHBLAH', '<b>新增文件到媒体目录:</b><p>你可以上传媒体文件, 或告诉系统到哪寻找。如果你没有想要的图片, 你可以到 <a href="http://images.google.com" target="_blank">google搜索图片</a>.<p><b>选择方式:</b><br>');
@define('MEDIA_RENAME', '更改文件名称');
@define('IMAGE_RESIZE', '更改图片尺寸');
@define('MEDIA_DELETE', '删除这个文件');
@define('FILES_PER_PAGE', '每页显示的文件数');
@define('CLICK_FILE_TO_INSERT', '点选你要输入的文件:');
@define('SELECT_FILE', '选择要输入的文件');
@define('MEDIA_FULLSIZE', '完整尺寸');
@define('CALENDAR_BOW_DESC', '一个星期的第一天[预设是星期一]');
@define('SUPERUSER', '系统管理');
@define('ALLOWS_YOU_BLAHBLAH', '在侧列提供连接到日志管理');
@define('CALENDAR', '站点日历');
@define('SUPERUSER_OPEN_ADMIN', '开启管理页面');
@define('SUPERUSER_OPEN_LOGIN', '开启登入页面');
@define('INVERT_SELECTIONS', '反勾选');
@define('COMMENTS_DELETE_CONFIRM', '确定要删除勾选的回复吗？');
@define('COMMENT_DELETE_CONFIRM', '确定要删除回复 #%d, 发布者是 %s？');
@define('DELETE_SELECTED_COMMENTS', '删除勾选的回复');
@define('VIEW_COMMENT', '浏览回复');
@define('VIEW_ENTRY', '浏览文章');
@define('DELETE_FILE_FAIL' , '无法删除文件 <b>%s</b>');
@define('DELETE_THUMBNAIL', '删除图片缩图 <b>%s</b>');
@define('DELETE_FILE', '删除文件 <b>%s</b>');
@define('ABOUT_TO_DELETE_FILE', '你将删除文件 <b>%s</b><br />如果你有在其它的文章内使用这个文件, 那个连接或图片将会无效<br />确定要继续吗？<br /><br />');
@define('TRACKBACK_SENDING', '传送引用到 URI %s...');
@define('TRACKBACK_SENT', '引用完成');
@define('TRACKBACK_FAILED', '引用错误: %s');
@define('TRACKBACK_NOT_FOUND', '找不到引用的地址');
@define('TRACKBACK_URI_MISMATCH', '自动搜寻的引用跟引用目标不相同.');
@define('TRACKBACK_CHECKING', '搜寻 <u>%s</u> 的引用...');
@define('TRACKBACK_NO_DATA', '目标没有任何资料');
@define('TRACKBACK_SIZE', '目标地址超出了允许的 %s bytes 文件大小.');
@define('COMMENTS_VIEWMODE_THREADED', '分线程');
@define('COMMENTS_VIEWMODE_LINEAR', '直线程');
@define('DISPLAY_COMMENTS_AS', '回复显示方式');
@define('COMMENTS_FILTER_SHOW', '显示');
@define('COMMENTS_FILTER_ALL', '全部');
@define('COMMENTS_FILTER_APPROVED_ONLY', '显示审核回复');
@define('COMMENTS_FILTER_NEED_APPROVAL', '显示等待审核');
@define('RSS_IMPORT_BODYONLY', '将输入的文字放到主内容, 将不拆开过长的文章到副内容');
@define('SYNDICATION_PLUGIN_FULLFEED', '在 RSS feed 里显示全部的文章');
@define('WEEK', '周');
@define('WEEKS', '周');
@define('MONTHS', '月');
@define('DAYS', '日');
@define('ARCHIVE_FREQUENCY', '保存文件的频率');
@define('ARCHIVE_FREQUENCY_DESC', '保存文件使用的项目清单间隔');
@define('ARCHIVE_COUNT', '保存文件的项目数');
@define('ARCHIVE_COUNT_DESC', '显示的月, 周, 或日');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', '下面是安装好的外挂');
@define('SIDEBAR_PLUGIN', '侧列外挂');
@define('EVENT_PLUGIN', '事件外挂');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', '点这里安装新 %s');
@define('VERSION', '版本');
@define('INSTALL', '安装');
@define('ALREADY_INSTALLED', '已经安装');
@define('SELECT_A_PLUGIN_TO_ADD', '请选择要安装的外挂');
@define('RSS_IMPORT_CATEGORY', '用这个类别给不相同的文章');

@define('INSTALL_OFFSET', '主机时间'); // Translate
@define('STICKY_POSTINGS', '置顶文章'); // Translate
@define('INSTALL_FETCHLIMIT', '在主页显示的文章'); // Translate
@define('INSTALL_FETCHLIMIT_DESC', '在主页显示文章的数量'); // Translate
@define('IMPORT_ENTRIES', '导入数据'); // Translate
@define('EXPORT_ENTRIES', '导出数据'); // Translate
@define('IMPORT_WELCOME', '欢迎使用Serendipity的数据转换工具'); // Translate
@define('IMPORT_WHAT_CAN', '你可以导入其它程序的文章'); // Translate
@define('IMPORT_SELECT', '请选择你要导入的程序'); // Translate
@define('IMPORT_PLEASE_ENTER', '请输入资料'); // Translate
@define('IMPORT_NOW', '开始导入'); // Translate
@define('IMPORT_STARTING', '正在导入...'); // Translate
@define('IMPORT_FAILED', '导入失败'); // Translate
@define('IMPORT_DONE', '导入成功'); // Translate
@define('IMPORT_WEBLOG_APP', '程序'); // Translate
@define('EXPORT_FEED', '输出 RSS feed'); // Translate
@define('STATUS', '导出后的状态'); // Translate
@define('IMPORT_GENERIC_RSS', '一般 RSS 导入'); // Translate
@define('ACTIVATE_AUTODISCOVERY', '传送文章内引用的连接'); // Translate
@define('WELCOME_TO_ADMIN', '欢迎登陆Serendipity智能博客系统');
@define('PLEASE_ENTER_CREDENTIALS', '请输入正确的登陆帐号'); // Translate
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s'); // Translate
@define('INSTALL_USEGZIP', '使用 gzip 压缩网页'); // Translate
@define('INSTALL_USEGZIP_DESC', '为了让网页运行得更快, 系统将会压缩后显示, 如果访客使用的浏览器支持压缩网页的话，建议使用。'); // Translate
@define('INSTALL_SHOWFUTURE', '显示未来文章'); // Translate
@define('INSTALL_SHOWFUTURE_DESC', '如果打开, 系统将会显示未来发表的文章，预设是设定未来文章隐藏，然后到发布日自动显示。'); // Translate
@define('INSTALL_DBPERSISTENT', '使用持续连接'); // Translate
@define('INSTALL_DBPERSISTENT_DESC', '对数据库使用持续连接, 详情参阅 <a href="http://php.net/manual/features.persistent-connections.php" target="_blank">这里</a>，通常不建议使用。'); // Translate
@define('NO_IMAGES_FOUND', '找不到文件'); // Translate
@define('PERSONAL_SETTINGS', '个人设置'); // Translate
@define('REFERER', '来源'); // Translate
@define('NOT_FOUND', '找不到'); // Translate
@define('NOT_WRITABLE', '不可读写'); // Translate
@define('WRITABLE', '可读写'); // Translate
@define('PROBLEM_DIAGNOSTIC', '因为上面出现问题,你必须把问题解决了才能安装。'); // Translate
@define('SELECT_INSTALLATION_TYPE', '请选择安装类型'); // Translate
@define('WELCOME_TO_INSTALLATION', '欢迎使用 Serendipity 简单体中文版'); // Translate
@define('FIRST_WE_TAKE_A_LOOK', '首先系统会检查你的设置以避免安装出错'); // Translate
@define('ERRORS_ARE_DISPLAYED_IN', '错误显示 %s, 建议 %s 解决错误 %s'); // Translate
@define('RED', '红'); // Translate
@define('YELLOW', '黄'); // Translate
@define('GREEN', '绿'); // Translate
@define('PRE_INSTALLATION_REPORT', 'Serendipity Blog v%s 安装前报告'); // Translate
@define('RECOMMENDED', '建议'); // Translate
@define('ACTUAL', '实际'); // Translate
@define('PHPINI_CONFIGURATION', 'php.ini 设置'); // Translate
@define('PHP_INSTALLATION', 'PHP 安装'); // Translate
@define('THEY_DO', '通过'); // Translate
@define('THEY_DONT', 'they don\'t'); // Translate
@define('SIMPLE_INSTALLATION', '快速安装'); // Translate
@define('EXPERT_INSTALLATION', '高级安装'); // Translate
@define('COMPLETE_INSTALLATION', '完整安装'); // Translate
@define('WONT_INSTALL_DB_AGAIN', '不会重复安装数据库'); // Translate
@define('CHECK_DATABASE_EXISTS', '检查数据是否存在'); // Translate
@define('CREATING_PRIMARY_AUTHOR', '设定管理员 \'%s\''); // Translate
@define('SETTING_DEFAULT_TEMPLATE', '设定主题'); // Translate
@define('INSTALLING_DEFAULT_PLUGINS', '安装预设定外挂'); // Translate
@define('SERENDIPITY_INSTALLED', 'Serendipity简体中文版安装完成'); // Translate
@define('VISIT_BLOG_HERE', '开始浏览你的博客'); // Translate
@define('THANK_YOU_FOR_CHOOSING', '非常感谢你选择 Serendipity简体中文版'); // Translate
@define('ERROR_DETECTED_IN_INSTALL', '安装时发生错误'); // Translate
@define('OPERATING_SYSTEM', '系统管理'); // Translate
@define('WEBSERVER_SAPI', '主机 SAPI'); // Translate
@define('TEMPLATE_SET', '\'%s\' 已被设定为主题'); // Translate
@define('SEARCH_ERROR', '搜索功能出现错误，报告管理员:发生这个错误可能数据库没有正确的index keys,如果使用MYSQL，你的帐号必须可以执行 <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> 的权限，数据库显示的错误是: <pre>%s</pre>'); // Translate
@define('EDIT_THIS_CAT', '编辑 "%s"'); // Translate
@define('CATEGORY_REMAINING', '删除这个分类然后将文章转到这个分类'); // Translate
@define('CATEGORY_INDEX', '下面是可以转移的分类'); // Translate
@define('NO_CATEGORIES', '没有分类'); // Translate
@define('RESET_DATE', '重设日期'); // Translate
@define('RESET_DATE_DESC', '点这里重设日期'); // Translate
@define('PROBLEM_PERMISSIONS_HOWTO', '权限可以使用下面的 shell 来执行: `<em>%s</em>` 然后执行要更改的文件夹, 或使用 FTP 软件'); // Translate
@define('WARNING_TEMPLATE_DEPRECATED', '警告:  你目前使用的主题是旧方法制作的，请尽快更新'); // Translate
@define('ENTRY_PUBLISHED_FUTURE', '这篇文章未公开'); // Translate
@define('ENTRIES_BY', '作者 %s'); // Translate
@define('PREVIOUS', '上一页'); // Translate
@define('NEXT', '下一页'); 
@define('APPROVE', '审核'); 

@define('DO_MARKUP_DESCRIPTION', '套用自动化格式到文章内 (表情, 符号 *, /, _, ...)。关闭这项功能将会保存任何文章内出现的 HTML 语法。');
@define('CATEGORY_ALREADY_EXIST', '类别 "%s" 已经存在');
@define('IMPORT_NOTES', '注意:');
@define('ERROR_FILE_FORBIDDEN', '你不能上传此文件');
@define('ADMIN', '主要设定');
@define('ADMIN_FRONTPAGE', '首页');
@define('QUOTE', '引用');
@define('IFRAME_SAVE', '正在保存文章，建立引用和执行 XML-RPC calls，请稍后..');
@define('IFRAME_SAVE_DRAFT', '文章草稿已被保存');
@define('IFRAME_PREVIEW', '正在建立你的预览文章...');
@define('IFRAME_WARNING', '你的浏览器不支持 iframes. 请打开 serendipity_config.inc.php 文件然后设定 $serendipity[\'use_iframe\'] 为 FALSE。');
@define('NONE', 'None');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', '新文章将使用预设设定');
@define('UPGRADE', '更新');
@define('UPGRADE_TO_VERSION', '更新至新版本 %s');
@define('DELETE_DIRECTORY', '删除目录');
@define('DELETE_DIRECTORY_DESC', '删除目录内的媒体文件，注意文件也许出现在其它文章内。');
@define('FORCE_DELETE', '删除此目录内的文件，包括无法识别的文件');
@define('CREATE_DIRECTORY', '建立目录');
@define('CREATE_NEW_DIRECTORY', '建立新目录');
@define('CREATE_DIRECTORY_DESC', '在这里你可以建立新的目录来存放媒体文件。输入目录名称后你可以选择是否将它放到主目录内。');
@define('BASE_DIRECTORY', '基本目录');
@define('USERLEVEL_EDITOR_DESC', '一般作者');
@define('USERLEVEL_CHIEF_DESC', '主编');
@define('USERLEVEL_ADMIN_DESC', '管理员');
@define('USERCONF_USERLEVEL', '权限');
@define('USERCONF_USERLEVEL_DESC', '这个选项可以设定此作者在这个日志内的权限');
@define('USER_SELF_INFO', '登入用户是 %s (%s)');
@define('ADMIN_ENTRIES', '文章管理');// 这是后台菜单的文章管理
@define('RECHECK_INSTALLATION', '重新检查安装程序');
@define('IMAGICK_EXEC_ERROR', '无法执行: "%s", 错误: %s, 系数: %d');
@define('INSTALL_OFFSET_DESC', '以小时计算，请输入主机的时间 (目前: %clock%) 跟你的时差');
@define('UNMET_REQUIREMENTS', '未达到需求: %s');
@define('CHARSET', '编码');
@define('AUTOLANG', '使用浏览器内设定的编码');
@define('AUTOLANG_DESC', '如果开启这个功能将使用浏览器内设定的编码');
@define('INSTALL_AUTODETECT_URL', '自动检测 HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', '如果设定为 "true"，HTTP Host 跟基本的地址设定相同。开启这项功能可以允许你使用多个的域名的日志和使用这个日志域名连接。');
@define('CONVERT_HTMLENTITIES', '自动改变 HTML 的标签');
@define('EMPTY_SETTING', '你没有提供 "%s" 的正确参数');
@define('USERCONF_REALNAME', '全名');
@define('USERCONF_REALNAME_DESC', '作者全名，将显示全部读者');
@define('HOTLINK_DONE', '文件外部连接<br />结束。');
@define('ENTER_MEDIA_URL_METHOD', '取得方法:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', '注意:如果你选择外部连接，请先得到来源网站的允许。外部连接允许你用其它网站的图片而不需要将图片保存在你的主机内。');
@define('MEDIA_HOTLINKED', '外部连接图片');
@define('FETCH_METHOD_IMAGE', '下载图片到主机');
@define('FETCH_METHOD_HOTLINK', '外部连接到主机');
@define('DELETE_HOTLINK_FILE', '删除外部连接的文件 <b>%s</b>');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '显示电子邮件');
@define('IMAGE_MORE_INPUT', '新增图片');
@define('BACKEND_TITLE', '外挂配置页面的额外信息');
@define('BACKEND_TITLE_FOR_NUGGET', '这里你可以设定一些自定文字，它跟 HTML Nugget 外挂一样会显示载外挂配置页面。如果你有多个标题的 HTML Nuggets，这个可以让你分辨多个相同的外挂。');
@define('CATEGORIES_ALLOW_SELECT', '允许访客显示多个类别');
@define('CATEGORIES_ALLOW_SELECT_DESC', '如果开启这个选项，在 sidebar 外挂里的类别旁边会出现勾选菜单。会员可以勾选要显示的类别。');
@define('PAGE_BROWSE_PLUGINS', '页数 %s 共 %s, 总共 %s 个外挂。');
@define('INSTALL_CAT_PERMALINKS', '静态连接');
@define('INSTALL_CAT_PERMALINKS_DESC', '利用各种不同地址样式来定义静态连接。建议你用预设的样式，或使用 %id% 值来避免数据库寻找地址目标。');
@define('INSTALL_PERMALINK', '文章的静态连接');
@define('INSTALL_PERMALINK_DESC', '这里可以让你设定以基本位置来计算文章的相对连接。你可以用以下参数：%id%, %title%, %day%, %month%, %year% 或其它字符。');
@define('INSTALL_PERMALINK_AUTHOR', '作者的静态连接');
@define('INSTALL_PERMALINK_AUTHOR_DESC', '这里可以让你设定以基本位置来计算文章的相对连接。你可以用以下参数：%id%, %realname%, %username%, %email% 或其它字符。');
@define('INSTALL_PERMALINK_CATEGORY', '类别的静态连接');
@define('INSTALL_PERMALINK_CATEGORY_DESC', '这里可以让你设定以基本位置来计算文章的相对连接。你可以用以下参数：%id%, %name%, %parentname%, %description% 或其它字符。');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'RSS-Feed 类别的静态连接');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', '这里可以让你设定以基本位置来计算 RSS-Feed 类别文章的相对连接。你可以用以下参数：%id%, %name%, %description% 或其它字符。');
@define('INSTALL_PERMALINK_ARCHIVESPATH', '保存文件路径');
@define('INSTALL_PERMALINK_ARCHIVEPATH', '保存文件路径');
@define('INSTALL_PERMALINK_CATEGORIESPATH', '类别路径');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '反订阅回复路径');
@define('INSTALL_PERMALINK_DELETEPATH', '删除回复路径');
@define('INSTALL_PERMALINK_APPROVEPATH', '核准回复路径');
@define('INSTALL_PERMALINK_FEEDSPATH', 'RSS Feeds 路径');
@define('INSTALL_PERMALINK_PLUGINPATH', '单外挂路径');
@define('INSTALL_PERMALINK_ADMINPATH', '管理路径');
@define('INSTALL_PERMALINK_SEARCHPATH', '搜索路径');
@define('INSTALL_CAL', '日历类型');
@define('INSTALL_CAL_DESC', '请选择你要的日历类型');
@define('REPLY', '回复');
@define('USERCONF_GROUPS', '会员群组');
@define('USERCONF_GROUPS_DESC', '此会员下面的群组组员。会员可以加入多个群组。');
@define('MANAGE_GROUPS', '管理群组');
@define('DELETED_GROUP', '群组 #%d %s 已删除');
@define('CREATED_GROUP', '新群组 %s 已新增');
@define('MODIFIED_GROUP', '群组 %s 的设定已被改变');
@define('GROUP', '群组');
@define('CREATE_NEW_GROUP', '新增群组');
@define('DELETE_GROUP', '确定要删除群组 #%d %s ');
@define('USERLEVEL_OBSOLETE', '注意: 会员权限的属性只是为了区分回复的兼容和外挂授权。系统现在使用了新的会员权限。');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', '你要发布文章的 ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner 图片');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', '位于 feedburner.com 的图片显示的名称 (或空白显示数量)。例如：fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner 标题');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', '显示于图片旁的标题 (如果有)');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner 图片文字');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', '鼠标在图片时显示的文字 (如果有)');
@define('SEARCH_TOO_SHORT', '搜寻字必须大于3字节。你可以使用 * 来代替，如果搜寻字节小于 3 字节。例如：s9y*。');
@define('INSTALL_DBPORT', '数据库连接端');
@define('INSTALL_DBPORT_DESC', '连接数据库所使用的连接端');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', '前端：外部服务');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', '前端：功能');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', '前端：完整外挂');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', '前端：浏览');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', '前端：相关文章');
@define('PLUGIN_GROUP_BACKEND_EDITOR', '后端：编辑器');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', '后端：会员管理');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', '后端：Meta 资料');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', '后端：主题');
@define('PLUGIN_GROUP_BACKEND_FEATURES', '后端：功能');
@define('PLUGIN_GROUP_IMAGES', '图片');
@define('PLUGIN_GROUP_ANTISPAM', '防止广告');
@define('PLUGIN_GROUP_MARKUP', '标记');
@define('PLUGIN_GROUP_STATISTICS', '统计资料');
@define('PERMISSION_PERSONALCONFIGURATION', '读取私人设定');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', '改变会员权限');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', '变更 "禁止建立文章"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', '变更发布文章的权限');
@define('PERMISSION_SITECONFIGURATION', '读取系统设定');
@define('PERMISSION_BLOGCONFIGURATION', '读取日志设定');
@define('PERMISSION_ADMINENTRIES', '管理文章');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', '管理会员的文章');
@define('PERMISSION_ADMINIMPORT', '输入文章');
@define('PERMISSION_ADMINCATEGORIES', '管理类别');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', '管理会员的类别');
@define('PERMISSION_ADMINCATEGORIESDELETE', '删除');
@define('PERMISSION_ADMINUSERS', '管理会员');
@define('PERMISSION_ADMINUSERSDELETE', '删除会员');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', '变更权限');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', '管理相同群组的会员');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'admin: maintainOthers');
@define('PERMISSION_ADMINUSERSCREATENEW', '新增会员');
@define('PERMISSION_ADMINUSERSGROUPS', '管理群组');
@define('PERMISSION_ADMINPLUGINS', '管理外挂');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', '管理会员的外挂');
@define('PERMISSION_ADMINIMAGES', '管理媒体文件');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', '管理媒体目录');
@define('PERMISSION_ADMINIMAGESADD', '新增媒体文件');
@define('PERMISSION_ADMINIMAGESDELETE', '删除媒体文件');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', '管理会员的媒体文件');
@define('PERMISSION_ADMINIMAGESVIEW', '浏览媒体文件');
@define('PERMISSION_ADMINIMAGESSYNC', '同步缩图');
@define('PERMISSION_ADMINCOMMENTS', '管理回复');
@define('PERMISSION_ADMINTEMPLATES', '管理主题');
@define('INSTALL_BLOG_EMAIL', '网站的电子邮件');
@define('INSTALL_BLOG_EMAIL_DESC', '这会设定你的电子邮件，任何日志内寄出的邮件将会显示这个电子邮件地址。记得这个电子邮件必须用在你的主机内，很多主机会拒绝接收不明的邮件。');
@define('CATEGORIES_PARENT_BASE', '只显示以下类别...');
@define('CATEGORIES_PARENT_BASE_DESC', '你可以选择一个主类别，只显示它下面的子类别。');
@define('CATEGORIES_HIDE_PARALLEL', '隐藏不在类别结构的类别');
@define('CATEGORIES_HIDE_PARALLEL_DESC', '如果隐藏位于其它类别结构的类别，你必须先开启这个设定。这个功能通常是用在多重日志的外挂。');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', '浏览会员的媒体文件');
@define('CHARSET_NATIVE', '预设');
@define('INSTALL_CHARSET', '语言选项');
@define('INSTALL_CHARSET_DESC', '这里可以让你转换 UTF-8 或预设编码 (ISO, UTF-8, ...)有些语言包只有 UTF-8 编码，所以换成预设语言有不会任何改变。新安装的日志建议使用 UTF-8 编码。记得不要改变这个设定如果你已经发布了文章。详情参阅 http://www.s9y.org/index.php?node=46');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'External Events');
@define('CALENDAR_EXTEVENT_DESC', '如果开启，外挂可以在日历内以颜色显示它的事件。如果没有使用这些特殊的外挂，建议不要使用。');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API 功能不会添加在 s9y 的安装里，因为漏洞和不多人使用的关系。所以必须安装 XML-RPC 的外挂如果使用 XML-RPC API。所有的 URL 不会因此改变，安装这个外挂后马上使用。');
@define('PERM_READ', '读取权限');
@define('PERM_WRITE', '写入权限');

@define('PERM_DENIED', '权限拒绝');
@define('INSTALL_ACL', '套入读取的权限到类别');
@define('INSTALL_ACL_DESC', '如果开启，群组对类别的权限设定将会套用到登入的会员。如果关闭，类别的读取权限不会被使用，但是会加快你日志的速度。如果你不需要多个使用者的读取权限，建议你将这个设定关闭。');
@define('PLUGIN_API_VALIDATE_ERROR', '配置的设定 "%s" 语法有误，需要 "%s" 类型。');
@define('USERCONF_CHECK_PASSWORD', '旧密码');
@define('USERCONF_CHECK_PASSWORD_DESC', '如果你要更改密码，请将新密码输入到这里。');
@define('USERCONF_CHECK_PASSWORD_ERROR', '你提供了错误的久密码所以不能更改密码。你的设定未保存。');
@define('ERROR_XSRF', '你的浏览器传送了错误的 HTTP-Referrer 字符。可能是因为 browser/proxy 的错误设定或是 Cross Site Request Forgery (XSRF) 的关系。你的操作无法完成。');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', '这里可以让你定义相对 URL ，从基本 URL 到会员读取的 RSS-feeds 为标准。你可以用这些参数 %id%, %realname%, %username%, %email% 或其它字符。');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed 作者的 URL');
@define('INSTALL_PERMALINK_AUTHORSPATH', '作者路径');
@define('AUTHORS', '作者');
@define('AUTHORS_ALLOW_SELECT', '允许访客显示多位作者?');
@define('AUTHORS_ALLOW_SELECT_DESC', '如果允许这个选项，访客可以勾选要读取的作者的文章。');
@define('AUTHOR_PLUGIN_DESC', '显示作者列表');
@define('CATEGORY_PLUGIN_TEMPLATE', '开启 Smarty-Templates');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', '如果开启这个选项，外挂会利用 Smarty-Templating 的功能来输出类别列表。你也可以用 "plugin_categories.tpl" 的模版文件来改变外观。这个选项会减低网页的显示速度，如果你不做任何改变，最好关闭这个选项。');
@define('CATEGORY_PLUGIN_SHOWCOUNT', '显示每个类别的文章数');
@define('AUTHORS_SHOW_ARTICLE_COUNT', '显示作者的文章数');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', '如果开启这个设定，作者的文章会显示在名称旁。');
@define('CUSTOM_ADMIN_INTERFACE', '可用自订的管理界面');

@define('COMMENT_NOT_ADDED', '你的回复不能加入因为这篇文章不允许回复，输入了错误信息，或不通过垃圾管理。'); 
@define('INSTALL_TRACKREF', '记录来源');
@define('INSTALL_TRACKREF_DESC', '开启记录来源会显示那个网站引用了你的文章。你可以关闭这个功能如果你收到太多垃圾广告。');
@define('CATEGORIES_HIDE_PARENT', '隐藏选择的类别');
@define('CATEGORIES_HIDE_PARENT_DESC', '当你限制类别显示的列表，预设是会显示主类别的名称。如果开启这个功能，主类别的名称将不会显示。');
@define('WARNING_NO_GROUPS_SELECTED', '警告：你没有选择会员群组。这会将你登出群组的管理，会员的群组不会被改变。');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'RSS Feed 页面里显示的文章数量。');
@define('INSTAL_DB_UTF8', '开启数据库编码转换');
@define('INSTAL_DB_UTF8_DESC', '使用 MySQL 的 "SET NAMES" 查询来设定编码。如果文章出现乱码可以将这设定打开或关闭。');
@define('ONTHEFLYSYNCH', '开启媒体同步');
@define('ONTHEFLYSYNCH_DESC', '如果开启，Serendipity Blog会比较数据库和媒体目录的文件，然后进行数据同步。');
@define('USERCONF_CHECK_USERNAME_ERROR', '帐号不能空白');
@define('FURTHER_LINKS', '更多连接');
@define('FURTHER_LINKS_S9Y', '官方首页');
@define('FURTHER_LINKS_S9Y_DOCS', '中文支持');
@define('FURTHER_LINKS_S9Y_BLOG', '驿站日志');
@define('FURTHER_LINKS_S9Y_FORUMS', '中文论坛');
@define('FURTHER_LINKS_S9Y_SPARTACUS', '外挂主题');
@define('COMMENT_IS_DELETED', '(回复被删除)');

@define('CURRENT_AUTHOR', '目前的作者');

@define('WORD_NEW', '新');
@define('SHOW_MEDIA_TOOLBAR', '在选择媒体的视窗里显示工具栏');
@define('MEDIA_KEYWORDS', '媒体的关键字');
@define('MEDIA_KEYWORDS_DESC', '输入预设的媒体关键字，用 ";" 来分开每个关键字。');
@define('MEDIA_EXIF', '输入 EXIF/JPEG 图片资料');
@define('MEDIA_EXIF_DESC', '如果开启，EXIF/JPEG 图库里的 metadata 会自动保存到数据库。');
@define('MEDIA_PROP', '媒体内容');


@define('GO_ADD_PROPERTIES', '输入内容');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_COPYRIGHT', '版权');
@define('MEDIA_PROPERTY_COMMENT1', '短介绍');
@define('MEDIA_PROPERTY_COMMENT2', '长介绍');
@define('MEDIA_PROPERTY_TITLE', '标题');
@define('MEDIA_PROP_DESC', '输入媒体使用的内容菜单，用 ";" 来分开每个菜单的名称');
@define('MEDIA_PROP_MULTIDESC', '(你可以在名称后面加上 ":MULTI" 来设定加大它的文字限制)');

@define('STYLE_OPTIONS_NONE', '这个主题没有特别的选项。如果要在你的主题里加上选项，请浏览 www.s9y.org 内的 Technical Documentation，然后 "Configuration of Theme options"。');
@define('STYLE_OPTIONS', '主题选项');

@define('PLUGIN_AVAILABLE_COUNT', '总共： %d 个外挂');

@define('SYNDICATION_RFC2616', '开启依照严格的 RFC2616 RSS-Feed');
@define('SYNDICATION_RFC2616_DESC', '不强制 RFC2616 表示全部有条件的 GETs 到 Serendipity Blog 只会传回最后修改的文章。如果设定为 "false" 表示访客接受全部的文章。不过，一些日志的程序像 Planet 会出现奇怪现象。如果出现奇怪现象表示它违反了 RFC2616 的标准。所以设定为 "TRUE" 表示你遵从 RFC 的标准，但访客可能读取不到全部文章。整体来说，不管怎样都无法照顾到两方。详情请参阅：<a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('MEDIA_PROPERTY_DATE', '相关日期');
@define('MEDIA_PROPERTY_RUN_LENGTH', '长度');
@define('FILENAME_REASSIGNED', '自动指定新文件名称： %s');
@define('MEDIA_UPLOAD_SIZE', '文件大小的上限');
@define('MEDIA_UPLOAD_SIZE_DESC', '输入文件的最大值。这个设定也可以从主机内的 PHP.ini 文件改变： upload_max_filesize, post_max_size, max_input_time 全部都能让这里的设定无效。如果不输入表示遵从主机的限制。');
@define('MEDIA_UPLOAD_SIZEERROR', '错误：你不能上传大于 %s 字节的文件');
@define('MEDIA_UPLOAD_MAXWIDTH', '图片最大宽度');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', '输入上传图片最大宽度。');
@define('MEDIA_UPLOAD_MAXHEIGHT', '图片最大长度');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', '输入上传图片最大长度。');
@define('MEDIA_UPLOAD_DIMERROR', '错误：你不能上传大于 %s x %s 的图片');

@define('MEDIA_TARGET', '连接的目标');
@define('MEDIA_TARGET_JS', '弹出出口 (使用 JavaScript)');
@define('MEDIA_ENTRY', '隔离文章');
@define('MEDIA_TARGET_BLANK', '弹出窗口 (使用 target=_blank)');

@define('MEDIA_DYN_RESIZE', '允许改变图片大小');
@define('MEDIA_DYN_RESIZE_DESC', '如果开启，媒体的选择视窗里显示依照 GET 参数所设定的图片大小。图片会保存于缓存内，所以常使用会占用主机的空间。');

@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
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
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');

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

// Next lines were added on 2012/05/29
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
// New 2.0 constants
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('MORE', 'More');
@define('ENTRY_STATUS', 'Entry status');
@define('SCHEDULED', 'Scheduled');
@define('PUBLISHED', 'Published');
@define('ENTRY_METADATA', 'Entry metadata');
@define('NAVIGATION', 'Navigation');
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
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('SHOW_METADATA', 'Show metadata');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');

@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('CURRENT_TAB', 'Current tab: ');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('VIDEO', 'Video');
@define('RESET_FILTERS', 'Reset filters');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('DEBUG', 'Debug');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_GROUP_ALL', 'All categories');

@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
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

@define('CATEGORY_PLUGIN_SHOWALL', 'Show a link to "All categories"?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('EDITOR_TAGS', 'Tags');
@define('EDITOR_NO_TAGS', 'No tags');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('START_UPDATE', 'Starting Update ...');
@define('UPDATE_ALL', 'Update All');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');
