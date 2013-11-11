<?php #

/**
 *  @version 
 *  @author Tadashi Jokagi <elf2000@users.sourceforge.net>
 *  EN-Revision: 1658
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'スパムプロテクター');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'コメントスパムを防御するさまざまな方法です。');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'スパム防御: 無効なメッセージです。');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'スパム防御: コメントした直後にコメントすることはできません。');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'このブログは「緊急コメント遮断モード」です。別の機会に来てください。');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', '複製コメントを許可しない');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'ユーザーが既に送信したコメントと同じ内容のコメントを送信することを許可しません。');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', '緊急時のコメント遮断する');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', '一時的にすべてのエントリに対してコメントを無効にします。ウェブログがスパム攻撃の下にある場合、役立ちます。');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'IP ブロックの間隔');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', '1 つの IP アドレスからのコメント送信を n 分間隔でのみ許可します。コメントの氾濫を防ぐのに有用です。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'Captcha を有効にする');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', '特別に作られた画像に表示された任意の文字列を入力することをユーザーに強いるでしょう。これは、ブログへの自動投稿を無効にするでしょう。視力の減退した人々が、captcha を読むために、懸命に見分けなければいけないであろうことを覚えておいてください。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'ロボットからの自動的なコメントスパムを防ぐために、画像の下の入力ボックスに適切な文字列を入力してください。文字列が一致する場合のみ、コメントが送信されるでしょう。ブラウザーが Cookie をサポートし、受け入れることを確認してください。さもなければ、コメントを正確に確認することができません。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', '入力ボックスにここに見える文字列を入力してください!');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', '上のスパム防止画像から文字列を入力してください: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'スパム防止画像ボックスで表示された文字列を正確に入力ていませんでした。画像を見て、そこに表示された値を入力してください。');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captcha はサーバーで無効化されています。PHP 向けに GD ライブラリと freetype ライブラリがコンパイルされていることと、TTF ファイルがディレクトリに存在している必要があります。');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', '何日経過したら captcha を強制しますか?');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'Captchas can be enforced depending on the age of your articles. 正しい captcha の入力が必要な日数を入力してください。0 に設定した場合、captcha は常に使用されるでしょう。');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', '何日経過したらモデレートを強制しますか?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'エントリのすべてのコメントにモデレートを自動設定できます。Enter the age of an entry in days, after which it should be auto-moderated. 0 は自動モデレーションをしないことを意味します。');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'コメントをモデレートする前にいくつのコメントがあるか');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'コメントである量のリンクに達したら、そのコメントをモデレートする設定をすることができます。0 はリンクの確認をしないことを意味します。');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'コメントを拒絶する前にいくつのリンクがあるか');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'コメントである量のリンクに達したら、そのコメントを拒絶する設定をすることができます。0 はリンクの確認をしないことを意味します。');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'いくつかの条件のために、コメントはこのウェブログの所有者によってモデレートを要求するように記録されました。');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'captcha の背景色');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'RGB 値を入力します: 0,255,255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'ログファイルの場所');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', '拒絶/モデレートした投稿に関する情報をログファイルに記録することができます。ログ記録を無効にしたい場合、空の文字列に設定してください。');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'コメント緊急バリケード');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', '複製コメント');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'IP ブロック');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_RBL', 'RBL ブロック');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_SURBL', 'SURBL ブロック');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', '無効な captcha (入力値: [%s] 期待値: [%s])');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'X 日後に自動モデレートする');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'コメントしたユーザーの電子メールアドレスを隠す');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'コメントユーザーの電子メールアドレスを表示しなくなるでしょう。');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', '電子メールアドレスは表示せず、電子メールの通知にのみ使用します。');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'ログ記録方法を選択する');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', '拒絶したコメントのログ記録はデータベース、あるいは平文テキストファイルへ行うことができます。');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'ファイル (下の「ログファイル」オプションを参照してください)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'データベース');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'ログ記録しない');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'API によってコメントを作成する方法');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'これは、API コールにより作成されたコメントのモデレーションに影響します (トラックバック、WFW:commentAPI コメント). 「モデレート」に設定した場合、これらすべてのコメントは常にまず承認される必要があります。もし「拒否」に設定した場合、完全に不許可です。もし「なし」に設定した場合、コメントは通常のコメントとして扱われるでしょう。');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'モデレート');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', '拒否');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', '(トラックバックに似た)API でのコメント作成を許可しません');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', '単語フィルターを有効にする');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'ある文字列のコメントを検索し、スパムとして記録します。');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'URL の単語フィルター');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', '正規表現が許可されており、セミコロン(;)で文字列を区切ります。');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', '著者名の単語フィルター');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'コメント本文の単語フィルター');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS', 'コメントの電子メール単語フィルター');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', '正しくない電子メールアドレスです。');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', '電子メールアドレスの確認をしますか?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'どのコメント項目を要求しますか?');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'ユーザーコメントで埋める必要がある必須項目の一覧を入力します。
複数の項目は「,(半角カンマ)」で区切ります。有効なキーは次のとおり(カッコは意味): name(名前), email(電子メール), url(URL), replyTo(返信元), comment(コメント)');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', '項目「%s」を指定していません!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Anti-Spam 方法の設定');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'この著者はスパムプロテクタープラグインでブロックする');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'この URL はスパムプロテクタープラグインでブロックする');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL', 'この電子メールアドレスはスパムプロテクタープラグインでブロックする');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'この著者はスパムプロテクタープラグインでブロックしない');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'この URL はスパムプロテクタープラグインでブロックしない');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL', 'この電子メールはスパムプロテクタープラグインでブロックしない');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'エントリの題名とコメントが同じ');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'エントリの題名のみを含むコメントを拒否する');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'トラックバックの URL を確認する');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'その URL がウェブログへのリンクを含んでいる場合のみ、トラックバックを許可します。');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'トラックバックの URL は無効です。');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'スクランブルされた Captcha');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', '著者のスパム防御を無効にする');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', '次のユーザーグループ中の著者はスパムプロテクタープラグインによる確認をせずにコメントを記入することを許可できます。');

@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET', 'Akismet API キー');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC', 'Akismet.com is a central anti-spam and blacklisting server. It can analyze your incoming comments and check if that comment has been listed as Spam. Akismet was developed for WordPress specifically, but can be used by other systems. You just need an API Key from http://www.akismet.com by registering an account at http://www.wordpress.com/. If you leave this API key empty, Akismet will not be used.');
@define('PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER', 'How to treat Akismet-reported spam');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST', 'Akismet.com ブラックリストにてフィルタリングしました。');

@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT', 'What to do with comments when being auto-moderated?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT', 'What to do with trackbacks when being auto-moderated?');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT', '何日経過したらトラックバックはモデレートをしますか');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC', 'You can automatically set all trackbacks for entries to be moderated. Enter the age of an entry in days, after which it should be auto-moderated. 0 means no auto-moderation.');

@define('PLUGIN_EVENT_SPAMBLOCK_CSRF', 'コメントの CSRF 防御を使いますか?');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC', 'If enabled, a special hash value will check that only users can submit a comment with a valid session ID. This will decrease spam and prevent users from tricking you into submitting comments via CSRF, but it will also prevent users commenting on your blog without cookies.');
@define('PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON', 'Your comment did not contain a Session-Hash. Comments can only be made on this blog when having cookies enabled!');

@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS', 'htaccess による不正 IP ブロックをしますか?');
@define('PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC', 'Enabling this will add IPs that have sent spam to your blog to your .htaccess file. The .htaccess file will be regenerated regularly with the forbidden IPs of the last month.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOOK', 'This is how your captcha images currently look like. If you changed and saved settings above and want to refresh the look of your captcha, simply click on it to reload.');

