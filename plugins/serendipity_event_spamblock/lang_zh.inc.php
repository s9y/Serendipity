<?php #

/**
 *  @version  
 *  @file 
 *  @author 
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', '垃圾(spam)预防');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', '几种预防垃圾回复、垃圾引用等的方法');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', '预防垃圾回复：无效信息。');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', '预防垃圾回复：您不能在已经发表一个回复后马上又发表另外一个回复。');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', '此博客目前处于“回复屏蔽应急模式”中，请稍后再来');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', '不允许发表重复的回复');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', '不允许访客发表和已有回复内容相同的回复');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', '回复功能紧急关闭');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', '暂时关闭所有文章的回复功能。这在遭受垃圾回复攻击时很有用。');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', '屏蔽IP地址的间隔时间');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', '同一IP地址只允许每隔数分钟发表一次回复。这可有效避免国多的垃圾回复。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', '启用验证码(Captchas)');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', '这将强制要求用户输入在特制的图片中显示的一个随机字符串。这可以防止机器人自动向你的博客发送回复信息等。需要注意的是，视力不好的访客可能很难看清这些验证码上的字符串。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', '为了阻止机器人提交垃圾回复，请在相应的文本框中输入你在下面的图片中所看到的字符串。只有在你输入的字符串和图片中的字符串吻合的情况下，你的回复才能被成功提交。请确认你的浏览器支持、并且已经开启了cookies功能，否则的话，你的回复无法被正确地验证。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', '请在输入框输入你在此看到的字符。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', '请输入上面图片中所显示的字符：');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', '您没有正确输入上面图片中所显示的字符。请看着该图片，在此重新输入其中所包含的字符。');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', '你的服务器关不支持验证码(Captchas)功能。你的PHP需要将GDLib和freetype库编译进来，同时还需要将所需的.TTF文件放在服务器相应目录中。');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', '文章发布多少天后强制使用验证码(Captchas)');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', '验证码(Captchas)可以在文章发布一定时间后自动开启。请在此输入相应天数，表示在文章发布了相应天数之后将自动开启验证码(Captchas)。如果输入0的话，表示验证码(Captchas)始终处于开启状态。');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', '多少天后天后强制实行回复审核');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', '你可以设定所有回复均须经过审核方可显示。在此输入相应天数，那么在文章发表了相应天数后，所有对该文章的回复都需要经过审核。如果输入0的话，表示每个回复都不需要经过审核就直接在博客中显示出来。');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', '回复包含多少个链接的时候需要审核');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', '当某一回复中的链接超过一定数量后，该回复必须经过审核方可显示。如果输入0的话，表示不进行链接数量检查。');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', '回复包含多少个链接的时候将被自动拒绝');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', '当某一回复中的链接超过一定数量后，该回复将被自动拒绝。如果输入0的话，表示不进行链接数量检查。');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', '出于某些考虑，你的回复需要通过博客主人的审核后才能被显示出来。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', '验证码(Captchas)的背景颜色');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', '输入RGB颜色值：0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', '日志文件位置');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', '回复被拒绝、被审核的帖子的相关信息可以被记录在一个日志文件中。如果你不想记录相关信息的话，此处留空即可。');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', '回复应急屏蔽');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', '重复的回复');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP屏蔽');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', '无效的验证码(captcha) (输入的是：%s，正确的应该是：%s)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'X天后自动执行审核操作');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', '链接数量过多');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', '链接数量过多');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', '隐藏回复者的电子邮件地址');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', '不显示发布回复的访客的电子邮件地址');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', '电子邮件地址将不会被显示，而仅将被用于发送电子邮件通知');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', '选择日志记录方法');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', '被拒绝的回复可以被记录在数据库或文本文件中');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', '文件 (请参考下面“日志文件”选项)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', '数据库');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', '不记录日志');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', '如何处理通过APIs而创建的回复');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', '这将影响对那些通过API请求而创建的回复(引用，WFW:commentAPI回复)的管理。如果选择“审核”的话，所有此类回复都要在被批准后才会被显示。如果选择“拒绝”的话，所有此类回复都不会被创建。如果选择“无”的话，所有此类回复都将被当作普通回复来处理。');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', '审核');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', '拒绝');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', '不允许通过API创建回复(例如引用)');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', '启用文字过滤');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', '在回复中搜索特定文字，并将含有此类特定文字的回复标记为垃圾。');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', '对网址进行过滤');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', '可使用正则表达式。用分号(;)来分开不同的过滤用字符串。你需要使用用\\@来将@这个字符进行转义(escape)。');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', '对回复者名字进行过滤');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', '对回复内容进行过滤');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', '对回复时使用的电子邮件地址进行过滤');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', '无效的电子邮件地址');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', '检查电子邮件地址？');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', '必须填写的回复字段');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', '此处输入访客填写回复时必须填写的字段列表。用逗号“,”来将不同的字段分割开来。可用的字段名称有：name, email, url, replyTo, comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', '你没有填写“ %s ”字段');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', '设置垃圾屏蔽的方法');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', '使用Spamblock插件屏蔽该作者');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', '使用Spamblock插件屏蔽该网址');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', '使用Spamblock插件屏蔽该电子邮件地址');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', '使用Spamblock插件解除对该用户的屏蔽');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', '使用Spamblock插件解除对该网址的屏蔽');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', '使用Spamblock插件解除对该电子邮件地址的屏蔽');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', '回复内容和文章标题相同');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', '自动拒绝那些回复内容和文章标题完全相同的回复');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', '检查引用网址');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', '只允许那些所在网址含有指向你的博客的链接的引用。');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', '无效的引用网址。');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', '验证码(Captchas)存在乱码');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', '对作者不使用垃圾屏蔽功能');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', '你可以允许下列用户组中的用户在发表回复时不需要通过相关垃圾屏蔽插件的验证。');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API钥匙');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com是一个反垃圾广告、维护黑名单列表的集中式的服务器。它可以对你的博客的回复进行分析，检测该回复是否是垃圾回复。Akismet是特地为WordPress而创建的，但也可用于其他系统。你需要在http://www.akismet.com注册一个帐号，并获得一个API钥匙(key)。如果此处你不输入一个API钥匙的话，将不会使用Akismet。');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', '如何处理Akismet汇报的垃圾');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', '使用Akismet.com黑名单进行过滤');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', '当启用自动审核的时候，对回复做何种操作？');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', '当启用自动审核的时候，对引用做何种操作？');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', '多少天后天后强制实行引用审核');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', '你可以设定所有引用均须经过审核方可显示。在此输入相应天数，那么在文章发表了相应天数后，所有对该文章的引用都需要经过审核。如果输入0的话，表示每个引用都不需要经过审核就直接在博客中显示出来。');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', '对回复采用CSRF保护？');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', '如果启用该设置的话，一个哈希(hash)值将会检测，使得只有使用特定的session ID的用户才能发表回复。这可以减少垃圾回复，防止用户通过CSRF(cross-site request forgery，forgery)以欺骗的方式提交回复。但是，启用该设置会使得那些浏览器不支持cookies或者未将浏览器cookies功能打开的访客无法发表回复。');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', '你的回复并不包含Session-Hash。只有在浏览器支持cookies并且已将浏览器cookies功能打开的情况下才能进行回复。');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', '通过HTaccess屏蔽IP地址?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', '启用此设置的话，将会把那些向你的博客发送垃圾回复的IP地址添加到你的.htaccess文件中。这个.htaccess文件会被重新生成，并把上一个月屏蔽掉的IP地址加进去.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', '你的验证码目前看上去就是这个样子的了。如果你改变并保存了上述设置、并且想刷新显示你的验证码的话，只要点击一下它就可以刷新了。');

