<?php # $Id: $

##########################################################################
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity    #
# Developer Team) All rights reserved.  See LICENSE file for licensing   #
# details			                					                                 #
#                                                                        #
# (c) 2003 Jannis Hermanns <J@hacked.it>                                 #
# http://www.jannis.to/programming/serendipity.html                      #
#                                                                        #
# Translated by                                                          #
# (c) 2006 Demin Yin <damon@deminy.net>                                  #
#               http://www.deminy.net                                    #
##########################################################################

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', '垃圾评论屏蔽');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', '屏蔽垃圾评论的几种方法');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', '垃圾评论防止：无效信息。');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', '垃圾评论防止：您不能连续发布评论。');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', '此网志(Blog)启用了“紧急评论屏蔽模式”，请稍后再试');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', '不允许发布相同的评论');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', '不允许访客在同一篇文章内发表相同的评论');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', '紧急评论关闭');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', '暂时关闭文章的评论功能。可在遭受垃圾评论攻击时启动。');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'IP 阻挡间隔时间');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', '允许同一个IP每隔n分钟发布评论。可有效避免过多的灌水评论。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', '启用Captchas');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', '访客要发布评论时必须输入图片里出现的随机字符。这可避免自动发布程序发表评论。需要注意的是，有些眼睛弱视的访客可能很难认清图片里的文字。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', '为了避免自动发贴程序发表垃圾评论，请在输入框中输入下面图片里的字符。如果所输入的字符和图片中的字符匹配（相同），您的评论就可以被正常提交、发布。请确认您的浏览器支持并开启了cookies功能，否则您的评论无法通过检测。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', '请在输入框输入你在此看到的字符。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', '请输入上面防垃圾评论图片中所含的字符： ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', '您没有正确输入防垃圾评论图片中所含的字符。请仔细观察该图片，并输入其所显示的字符。');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captchas在您的服务器处于禁用状态。您需要在PHP中编译、包含 GD库和freetype库，并且在您的文件目录中需要包含相应的.TTF文件。');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', '多少天后强制使用captchas');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Captchas可以在文章发布一定时间后自动开启。在文章发布多少天后自动开启captchas，请输入该天数。如果输入0，表示captchas始终处于开启状态。');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', '多少天后天后强制实行评论审核');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', '你可以设定所有评论均须经过审核方可发布。在文章发布一定天数后的评论发布都需要经过审核，请输入该天数。输入0表示每个评论都不需要管理审核。');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', '评论含多少链接的时候需要审核');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', '当评论里的链接超过一定数量后，就必须要经过管理员的审核该评论才会被发布，请输入该数量。输入0表示不进行链接数量检查。');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', '评论含多少链接的时候会被自动拒绝');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', '当评论里的链接超过一定数量后，就自动不会通过审核，请输入该数量。输入0表示不进行链接数量检查。');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', '出于对某些情况的考虑，您的评论需要通过作者的审核。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'captcha的背景颜色');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', '输入RGB颜色值：0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', '日志文件位置');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', '被拒绝/修改的文章会被记录到日志文件里。如果不想记录日志，在此留空即可。');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', '紧急评论封锁');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', '重复评论');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP屏蔽');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', '无效captcha (输入：%s，正确：%s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', '数天后自动管理');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', '链接过多');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', '链接过多');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', '隐藏评论者的电子邮件地址');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', '不显示发布评论的访客的电子邮件地址');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', '电子邮件地址将不会被显示，仅将被用于电子邮件通知');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', '选择日志记录方法');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', '被拒绝的评论的日志可以被记录在数据库或者文件中');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', '文件 (看下间的日志文件选项)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', '数据库');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', '不记录');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', '如何处理使用APIs产生的评论');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', '这将影响对通过APIs请求而生成的评论(引用，WFW:commentAPI的评论)的管理。如果选择“管理”，所有该类型的评论都需要首先通过批准。如果选择“拒绝”，所有该类型的评论都不允许被生成。如果选择“没有”，所有该类型的评论都将会被当作普通评论来处理。');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', '管理');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', '拒绝');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', '不允许API创建的评论(像引用)');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', '启用文字过滤');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', '在评论中搜索特定文字，并将找到的评论标记为垃圾。');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', '网址过滤');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', '可用正则表达式。用分号(;)来分开字符串。');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', '评论者名字过滤');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', '可用正则表达式。用分号(;)来分开字符串。');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', '错误的电子邮件地址');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', '检查电子邮件地址？');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', '需要评论栏');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', '输入访客填写评论时必须填写的栏目。请用逗号“,”来分开每个栏目。可用的索引关键字有：name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', '你没有输入“%s”栏目！');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', '设置垃圾屏蔽的方法');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', '用Spamblock插件屏蔽该访客');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', '用Spamblock插件屏蔽该网址');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', '用Spamblock插件解除对该访客的屏蔽');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', '用Spamblock插件解除对该网址的屏蔽');

@define('PLUGIN_EVENT_SPAMBLOCK_BLOGG_SPAMLIST', '使用blogg.de黑名单进行网址过滤');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BLOGG_SPAMLIST', '使用blogg.de黑名单过滤');

?>
