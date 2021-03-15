<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) Tadashi Jokagi <elf2000@users.sourceforge.net>, 2004-2010.
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'ja_JP.UTF-8,ja,jp');
@define('DATE_FORMAT_ENTRY', '%Y年 %B %e(%A)');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'ja-utf8');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', '種類');
@define('PREVIEW', 'プレビュー');
@define('DATE', '日付');
@define('TIME', 'Time');
@define('APPEARANCE', '外観');
@define('LOGIN', 'ログイン');
@define('LOGOUT', 'ログアウト');
@define('LOGGEDOUT', 'ログアウトしました。');
@define('CREATE', '作成する');
@define('BACK', '戻る');
@define('FORWARD', '転送');
@define('ANONYMOUS', '匿名');
@define('RECENT', '最近の記事...');
@define('OLDER', '古い記事...');
@define('DONE', '実行完了');
@define('TITLE', '題名');
@define('DESCRIPTION', '説明');
@define('PLACEMENT', '配置');
@define('DELETE', '削除');
@define('SAVE', '保存');
@define('UP', '上へ');
@define('DOWN', '下へ');
@define('PREVIOUS', '前へ');
@define('NEXT', '次へ');
@define('ENTRIES', 'エントリー');
@define('CATEGORIES', 'カテゴリの管理');
@define('NAME', '名前');
@define('EMAIL', '電子メール');
@define('HOMEPAGE', 'ホームページ');
@define('COMMENT', 'コメント');
@define('VIEW', '閲覧');
@define('HIDE', '隠す');
@define('WEEK', '週');
@define('WEEKS', '週');
@define('MONTHS', '月');
@define('DAYS', '日');
@define('DEBUG', 'Debug');
@define('SUCCESS', '成功');
@define('COMMENTS', 'コメント');
@define('ADD_COMMENT', 'コメントの追加');
@define('NO_COMMENTS', 'コメントがありません');
@define('POSTED_BY', '投稿者');
@define('ON', '日時');
@define('NO_CATEGORY', 'カテゴリがありません');
@define('CATEGORY', 'カテゴリ');
@define('EDIT', '編集');
@define('GO', 'Go!');
@define('YES', 'はい');
@define('NO', 'いいえ');
@define('NOT_REALLY', 'とりやめます...');
@define('DUMP_IT', '実行します!');
@define('IN', 'in');
@define('AT', 'at');
@define('LEFT', '左');
@define('RIGHT', '右');
@define('CENTER', '中央');
@define('ARCHIVES', '書庫一覧');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'クイック サーチ');
@define('TRACKBACKS', 'トラックバック');
@define('TRACKBACK', 'トラックバック');
@define('NO_TRACKBACKS', 'トラックバックがありません');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', '抜粋');
@define('TRACKED', 'Tracked');
@define('USER', 'ユーザー');
@define('USERNAME', 'ユーザー名');
@define('PASSWORD', 'パスワード');
@define('HIDDEN', '隠す');
@define('IMAGE', '画像');
@define('VIDEO', 'Video');
@define('AUTHOR', '執筆者');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'バージョン');
@define('INSTALL', 'インストール');
@define('REPLY', '返信');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'エラー');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', '強制');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', '管理');
@define('ADMIN_FRONTPAGE', 'フロントページ');
@define('QUOTE', '引用');
@define('NONE', 'なし');
@define('GROUP', 'グループ');
@define('AUTHORS', 'Authors');
@define('UPGRADE', 'アップグレード');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'すべての執筆者');
@define('PREVIOUS_PAGE', '前のページ');
@define('NEXT_PAGE', '次のページ');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'すべてのカテゴリ');
@define('LAST_UPDATED', '最終更新日');
@define('IP_ADDRESS', 'IP アドレス');
@define('CHARSET', '文字セット');
@define('REFERER', 'リファラー');
@define('APPROVE', '承認');
@define('NOT_FOUND', '見つかりません');
@define('WRITABLE', '書き込み可能');
@define('NOT_WRITABLE', '書き込み不可能');
@define('WELCOME_BACK', 'ようこそ!! ');
@define('USE_DEFAULT', '標準');
@define('SORT_BY', 'ソート基準');
@define('SORT_ORDER', 'ソート順');
@define('SORT_ORDER_ASC', '昇順');
@define('SORT_ORDER_DESC', '降順');
@define('FILTERS', 'フィルター');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'すべて展開に切り替え');
@define('TOGGLE_OPTION', 'オプションに切り替え');
@define('IN_REPLY_TO', '返信先');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'ディレクトリー');
@define('BACK_TO_BLOG', 'ウェブログに戻る');
@define('HTML_NUGGET', 'HTML ナゲット');
@define('TITLE_FOR_NUGGET', 'ナゲットの題名');
@define('COMMENT_ADDED', 'コメントの追加に成功しました。');
@define('ENTRIES_FOR', '%s のエントリー一覧');
@define('NO_ENTRIES_TO_PRINT', '表示するエントリーはありません。');
@define('COMMENT_DELETE_CONFIRM', 'コメント番号 #%d で %s が書いたコメントを本当に削除しますか?');
@define('DELETE_SURE', '#%s の削除を本当に実行しますか?');
@define('MEDIA_FULLSIZE', 'フルサイズ');
@define('SIDEBAR_PLUGIN', 'サイドバープラグイン');
@define('EVENT_PLUGIN', 'イベントプラグイン');
@define('PLUGIN_ITEM_DISPLAY', 'どこで項目を表示するべきですか?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', '拡張エントリーのみ表示');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', '概要ページのみ表示');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '常に表示');
@define('DIRECTORY_WRITE_ERROR', 'ディレクトリー %s の書き込みができませんでした。パーミッションを調べてください');
@define('FILE_WRITE_ERROR', 'ファイル %s の書き込みができませんでした。');
@define('INCLUDE_ERROR', 'serendipity エラー: %s を含むことをできません - 終了します。');
@define('DO_MARKUP', 'マークアップ変換を行う');
@define('GENERAL_PLUGIN_DATEFORMAT', '日付書式');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'エントリーの実際の日付の書式です。PHP の strftime() 値を使用します (デフォルト: "%s")');
@define('APPLY_MARKUP_TO', '%s へのマークアップを適用します。');
@define('XML_IMAGE_TO_DISPLAY', 'XML ボタン');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'この画像で XML フィードへのリンクを表示します。デフォルトは空にし、「none」を入力すると無効にします。');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'ファイル %s を削除中...');
@define('SETTINGS_SAVED_AT', '新しい設定は %s に保存されました。');
@define('INVERT_SELECTIONS', '選択を反転');

@define('PERSONAL_SETTINGS', '個人設定');
@define('DO_MARKUP_DESCRIPTION', 'マークアップ変換をテキストに適用します (顔文字、「*」、「/」、「_」などのマークアップショートカット。無効にするとテキスト中のどんな HTML コードも保持します。デフォルトは「はい」です。');
@define('BASE_DIRECTORY', 'ベースディレクトリー');
@define('PERM_READ', '読み込み権限');
@define('PERM_WRITE', '書き込み権限');
@define('PERM_DENIED', 'アクセス拒否です。');
@define('CURRENT_AUTHOR', '現在の著者');
@define('PLUGIN_ACTIVE', 'アクティブ');
@define('PLUGIN_INACTIVE', '非アクティブ');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'ブックマークレット');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'モデレート');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity インストール作業');
@define('WELCOME_TO_INSTALLATION', 'ようこそ Serendipity のインストール画面へ');
@define('FIRST_WE_TAKE_A_LOOK', 'まず初めに、現在の設定を見てどんな互換性の問題があるか分析を試みます。');
@define('ERRORS_ARE_DISPLAYED_IN', 'エラーは %s で、推奨は %s で、成功は %s で表示されます。');
@define('RED', '赤');
@define('YELLOW', '黄');
@define('GREEN', '緑');
@define('PRE_INSTALLATION_REPORT', 'Serendipity バージョン %s インストール作業前の報告');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP インストール');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'オペレーションシステム');
@define('WEBSERVER_SAPI', 'ウェブサーバー SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini 設定');
@define('RECOMMENDED', '推奨');
@define('ACTUAL', '実際');
@define('PERMISSIONS', '許可');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'パーミッションは失敗したディレクトリーでシェルコマンド`<em>%s</em>`の実行で設定するか、FTP プログラムを用いて設定します。');
@define('PROBLEM_DIAGNOSTIC', '問題を含む診断のために、上記のエラーが修正される前に、インストールを再開することができません。');
@define('SELECT_INSTALLATION_TYPE', 'どのインストールタイプの使用を希望するか選択してください。');
@define('RECHECK_INSTALLATION', 'インストールの再検査');
@define('SIMPLE_INSTALLATION', '簡単なインストール作業を行う');
@define('EXPERT_INSTALLATION', '上級者のインストール作業を行う');
@define('COMPLETE_INSTALLATION', 'インストール作業を完了する');
@define('WONT_INSTALL_DB_AGAIN', '再度データベースをインストールしないでしょう。');
@define('THEY_DO', '実行する');
@define('THEY_DONT', '実行しない');
@define('CHECK_DATABASE_EXISTS', 'データベースとテーブルが既に存在するか確認します。');
@define('CREATE_DATABASE', '初期データベースセットアップを作成しています...');
@define('ATTEMPT_WRITE_FILE', 'ファイル %s の書き込みを試みます...');
@define('CREATING_PRIMARY_AUTHOR', '主要な執筆者 \'%s\' を作成中');
@define('SETTING_DEFAULT_TEMPLATE', 'デフォルトテンプレート設定');
@define('INSTALLING_DEFAULT_PLUGINS', 'デフォルトプラグインのインストール');
@define('SERENDIPITY_INSTALLED', 'Serendipity のインストールに成功しました。');
@define('VISIT_BLOG_HERE', 'ここからあなたの新しいブログに訪問できます。');
@define('THANK_YOU_FOR_CHOOSING', 'Serendipity を選んでくれてありがとうございます。');
@define('ERROR_DETECTED_IN_INSTALL', 'インストール作業でエラーを検知しました。');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Powered by Serendipity %s and PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', '標準の編集者');
@define('USERLEVEL_CHIEF_DESC', 'チーフ編集者');
@define('USERLEVEL_ADMIN_DESC', '管理者');
@define('WWW_USER', 'apache を実行しているユーザーに www を変更します(例えば nobody)');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'ディレクトリー %s が存在しないか作成することができませんでした。手動でディレクトリーを作成してください。');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; 実行 <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', '%s バイナリを実行できませんでした。');
@define('FILE_CREATE_YOURSELF', '自分でファイルを作成するか、パーミッションを調べてください');
@define('COPY_CODE_BELOW', '<br />* Just copy the code below and place it in %s in your %s folder:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', '一度これを実行してにはブラウザーの「再読み込み」ボタンをクリックします。');
@define('ERROR_TEMPLATE_FILE', 'テンプレートファイルを開けません。serendipity をアップデートしてください!');
@define('HTACCESS_ERROR', 'ローカルのウェブサーバでのインストールを確認するために、serendipity はファイル「.htaccess」を書き込みできる書くことができる必要があります。これは権限エラーのためにできませんでした。このように権限を調整してください: <br />&nbsp;&nbsp;%s<br /> そして、このページを再読み込みします。');
@define('EMPTY_SETTING', '%s の値が正しく指定されていません!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity は現在のインストール済みバージョン %s の設定を検出しました。しかし serendipity 自身はバージョン %s としてインストールされています。<a href="%s">ここをクリック</a>してアップグレードする必要があります!');
@define('SERENDIPITY_UPGRADER_WELCOME', 'やあ、Serendipity アップグレード エージェントにようこそ。');
@define('SERENDIPITY_UPGRADER_PURPOSE', '私は Serendipity %s をアップグレード インストールするのを助けるためにここに居ます。');
@define('SERENDIPITY_UPGRADER_WHY', '今 Serendipity %s をインストールしましたが、まだこのバージョンに適したデータベースをアップグレード インストールしていないのでこのメッセージを見ています。');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'データベースのアップデート (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', '次の.sqlファイルを見つけました。Serendipity の通常動作を継続すること可能にするには、それを実行する必要があります');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '特定バージョンのタスク');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '特定バージョンのタスク バージョンが見つかりませんでした。');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', '上記タスクを行いますか?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'いいえ、手動で実行します。');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'はい、そうしてください');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'アップグレードの実行を必要としないように見えます。');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', '改良された Serendipity にアップグレードしました');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Serendipity のアップグレード ステージを無視しました。正しいデータベースが確実にインストールされ、スケジュール機能を実行します。');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'あなたの Serendipity は今バージョン %s にアップグレードしました。');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', '%sここ%s をクリックするとブログに戻ることができます。');
@define('ADMIN_ENTRIES', 'エントリー');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'MySQL データベースへ接続できませんでした: %s');
@define('COULDNT_SELECT_DB', 'データベースを選択できませんでした: %s');
@define('COULDNT_SELECT_USER_INFO', 'ユーザー情報を選択できませんでした: %s');
@define('COULDNT_SELECT_CATEGORY_INFO', 'カテゴリ情報を選択できませんでした: %s');
@define('COULDNT_SELECT_ENTRY_INFO', 'エントリー情報を選択できませんでした: %s');
@define('COULDNT_SELECT_COMMENT_INFO', 'コメント情報を選択できませんでした: %s');
@define('MYSQL_REQUIRED', 'この操作を実行するには MySQL 拡張が古過ぎます。');
@define('CREATE_AUTHOR', '執筆者 \'%s\' を作成する');
@define('CREATE_CATEGORY', 'カテゴリ \'%s\' を作成する');
@define('MT_DATA_FILE', 'Movable Type データファイル');
@define('INSTALL_DBPORT', 'データベースのポート番号');
@define('INSTALL_DBPORT_DESC', 'データベースサーバーへの接続に使用するポート番号です。');
@define('IMPORT_PLEASE_ENTER', '下に要求されたデータを入力してください。');
@define('IMPORT_NOW', '今すぐインポート!');
@define('IMPORT_STARTING', 'インポート手続きをはじめました...');
@define('IMPORT_FAILED', 'インポートに失敗しました。');
@define('IMPORT_DONE', 'インポートに完了し成功しました。');
@define('IMPORT_WEBLOG_APP', 'Weblog アプリケーション');
@define('IMPORT_NOTES', '注:');
@define('IMPORT_STATUS', 'インポート後の状況');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'すべてのエントリーは「本文」セクションに置き、拡張エントリーセクションに分割しない');
@define('IMPORT_GENERIC_RSS', '一般的な RSS をインポートする');
@define('ACTIVATE_AUTODISCOVERY', 'エントリーで見つたリンクにトラックバックを送る');
@define('RSS_IMPORT_CATEGORY', '一致しなかったインポートしたエントリーはこのカテゴリを使用する');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'ドキュメント %s が見つかりません。');
@define('CONVERT_HTMLENTITIES', 'HTML 実体への自動変換を試みますか?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity 管理スイート');
@define('WRONG_USERNAME_OR_PASSWORD', '無効のユーザー名かパスワードを入力したように見えます。');
@define('PLEASE_ENTER_CREDENTIALS', 'ログイン情報を下記に入力してください。');
@define('AUTOMATIC_LOGIN', '情報を保存する');
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
@define('MEDIA', 'メディア');
@define('MEDIA_LIBRARY', 'メディアライブラリ');
@define('ADD_MEDIA', 'メディア追加');
@define('MANAGE_DIRECTORIES', 'ディレクトリー管理');
@define('CONFIGURATION', '設定');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity ホームページ');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity ドキュメント');
@define('FURTHER_LINKS_S9Y_BLOG', 'オフィシャルブログ');
@define('FURTHER_LINKS_S9Y_FORUMS', 'フォーラム');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'このエントリーはまだ公開されていません。');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'ドキュメント');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'ローカルのドキュメント');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'バージョン履歴');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'サイドバー プラグイン');
@define('EVENT_PLUGINS', 'イベント プラグイン');
@define('CONFIGURE_PLUGINS', 'プラグイン設定');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', '要求に失敗: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'バージョン %s へアップグレード');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', '新しい %s をインストールする');
@define('ALREADY_INSTALLED', '既にインストール済みです。');
@define('PLUGIN_AVAILABLE_COUNT', '合計: %d プラグインです。');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'エントリーの編集');
@define('EDIT_ENTRY', 'エントリー編集');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', '草稿');
@define('PUBLISH', '公開');
@define('CONTENT', '内容');
@define('ENTRIES_PER_PAGE', 'ページ毎のエントリー');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'スティッキ投稿');
@define('PAGE_BROWSE_ENTRIES', 'ページ %s/%s, 合計 %s エントリー');
@define('FIND_ENTRIES', 'エントリー検索');
@define('RIP_ENTRY', 'R.I.P. エントリー #%s');
@define('NEW_ENTRY', '新規エントリーの追加');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'エントリー本文');
@define('EXTENDED_BODY', '拡張本文');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'このエントリーの草稿を保存しました。');
@define('IFRAME_PREVIEW', 'Serendipity はエントリーのプレビューを作成中です...');
@define('IFRAME_WARNING', 'ブラウザーが iframe をサポートしていません。serendipity_config.inc.php ファイルを開いて、$serendipity[\'use_iframe\'] を FALSE に設定してください。');
@define('DATE_INVALID', '警告: 指定した日付は無効です。「YYYY-MM-DD HH:MM」の書式を与えなければなりません。');
@define('ADVANCED_OPTIONS', '高度なオプション');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'このリンクは、クリックされるのが目的ではありません。それは、このエントリー用のトラックバック URIを含んでいます。このエントリーにブログからトラックバックと ping を送信するにはこの URI を 使用することができます。このリンクをコピーするには、Internet Explorer の場合右クリックを、「ショートカットをコピー」を選択します。Mozilla の場合「リンクロケーションをコピー」を選択します。');
@define('RESET_DATE', 'データリセット');
@define('RESET_DATE_DESC', '現在の時刻への日付をリセットするにはここをクリックしてください。');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'ユーザー管理');
@define('CREATE_NEW_USER', '新規ユーザーを追加する');
@define('CREATE_NOT_AUTHORIZED', 'あなたと同じユーザー レベルのユーザーを修正することは出来ません。');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'あなたより高いユーザー レベルを持ったユーザーを作ることができません。');
@define('CREATED_USER', '新規ユーザー %s を作成しました。');
@define('MODIFIED_USER', 'ユーザー %s のプロパティを変更しました。');
@define('USER_LEVEL', 'ユーザー レベル');
@define('WARNING_NO_GROUPS_SELECTED', '警告: いくつかのグループメンバーを選択していません。This would effectively log you out of the usergroup management, and thus your group memberships werde not changed.');
@define('DELETE_USER', 'ユーザー #%d の「%s」を削除します。本気ですか? これは彼がフロントエンドで書いたいくつかのエントリーの表示を不可能にするでしょう。');
@define('DELETED_USER', 'ユーザー ID #%d の %s を削除しました。');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'グループ管理');
@define('DELETED_GROUP', 'グループ #%d の「%s」を削除しました。');
@define('CREATED_GROUP', '新規グループ「%s」を作成しました。');
@define('MODIFIED_GROUP', 'グループ「%s」のプロパティを変更しました。');
@define('CREATE_NEW_GROUP', '新規グループを作成する');
@define('DELETE_GROUP', 'グループ番号 #%d の「%s」を削除します。本気ですか?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'コメント検索');
@define('COMMENTS_FILTER_SHOW', '表示');
@define('COMMENTS_FILTER_ALL', 'すべて');
@define('COMMENTS_FILTER_APPROVED_ONLY', '承認済みのみ');
@define('COMMENTS_FILTER_NEED_APPROVAL', '承認待ち');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'ユーザーの確認を保留しています');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', '本当に選択したコメントを削除しますか?');
@define('PAGE_BROWSE_COMMENTS', 'ページ %s/%s, 合計 %s コメント');
@define('COMMENT_IS_DELETED', '(コメントは削除されました)');
@define('COMMENT_MODERATED', 'コメント #%s をもでレート済みに設定することに成功しました');
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
@define('CATEGORY_SAVED', 'カテゴリを保存しました。');
@define('CATEGORY_ALREADY_EXIST', '"%s" という名前のカテゴリは既に存在します。');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'カテゴリ #%s を削除しました。古い記事はカテゴリ #%s に移動しました。');
@define('CATEGORY_DELETED', 'カテゴリ #%s を削除しました。');
@define('INVALID_CATEGORY', 'カテゴリは破棄するために提供されませんでした。');
@define('EDIT_THIS_CAT', '"%s" 編集中');
@define('CATEGORY_REMAINING', 'このカテゴリーを削除し、このカテゴリーへのそのエントリーーを移動させます。');
@define('PARENT_CATEGORY', '親カテゴリ');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', '新規カテゴリを作成する');
@define('ALREADY_SUBCATEGORY', '%s は %s のサブカテゴリに既に存在します。');
@define('NO_CATEGORIES', 'カテゴリがありません');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', '要求されたすべてのファイルを確認しました。');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'データのインポート');
@define('EXPORT_ENTRIES', 'エントリーのエクスポート');
@define('EXPORT_FEED', 'フル RSS フィードをエクスポートする');
@define('CREATE_THUMBS', 'サムネイル再構築');
@define('WARNING_THIS_BLAHBLAH', "警告:\\nサムネイルなしの画像が多い場合、長時間かかるかもしれません。");
@define('SYNC_OPTION_LEGEND', 'サムネイル同期オプション');
@define('SYNC_OPTION_KEEPTHUMBS', 'すべての既存サムネイルを維持する');
@define('SYNC_OPTION_SIZECHECKTHUMBS', '正しい大きさのときのみ既存サムネイルを維持する');
@define('SYNC_OPTION_DELETETHUMBS', 'すべてのサムネイルを再生成する');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' をアクティブテンプレートに設定しました。');
@define('WARNING_TEMPLATE_DEPRECATED', '警告: あなたの現在のテンプレートは非常に古いテンプレート方法を使用しています。可能なかぎり更新を提案します。');
@define('STYLE_OPTIONS_NONE', 'このテーマ、スタイルは指定オプションがありません。To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'テーマスタイルオプション');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'カスタム管理インターフェースが利用可能です');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'テンプレートとして設定');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', '確認と保存をする');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'チェックをつけたプラグインを削除する');
@define('SAVE_CHANGES_TO_LAYOUT', 'レイアウトへの変更を保存する');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'データベースと画像フォルダーの同期中');
@define('SYNC_DONE', '終了しました (%s 個の画像を同期しました)');
@define('RESIZE_BLAHBLAH', '<b>リサイズ %s</b>');
@define('ORIGINAL_SIZE', '元サイズ: <i>%sx%s</i> ピクセル');
@define('RESIZING', 'サイズ変更中');
@define('RESIZE_DONE', '終了しました (%s このイメージをサイズ変更しました)');
@define('KEEP_PROPORTIONS', '比率を維持する');
@define('REALLY_SCALE_IMAGE', '本当に画像を変換しますか? この操作は取り消すことができません!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>ここで、画像サイズを調節することができます。画像の比率を変えずにサイズ変更をしたい場合は、2 つの入力ボックスのうちの 1 つにだけ値入力して、TAB キーを押してください - 自動的に新しいサイズを計算します。したがって、イメージは台無しになりません。</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', '新規サイズ: ');
@define('SCALING_IMAGE', '%s を %s×%s ピクセルに変換します。');
@define('MEDIA_DIRECTORY_MOVED', 'ディレクトリーとファイルを「%s」に移動することに成功しました。');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'ディレクトリーとファイルを「%s」に移動できませんでした!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'ディレクトリー <strong>%s</strong> を作成しました。');
@define('PARENT_DIRECTORY', '親ディレクトリー');
@define('CONFIRM_DELETE_DIRECTORY', '本当にディレクトリー %s の内容をすべて削除しますか?');
@define('ERROR_NO_DIRECTORY', 'エラー: ディレクトリー %s がありません');
@define('ERROR_DIRECTORY_NOT_EMPTY', '空でないディレクトリーは削除できません。もし同様にファイルを削除したければチェックボックス「強制削除する」をチェックし、もう一度送信してください.存在するファイルは次の通りです:');
@define('DIRECTORY_DELETE_FAILED', 'ディレクトリー %s の削除に失敗しました。パーミッションか上野メッセージを調べてください。');
@define('DIRECTORY_DELETE_SUCCESS', 'ディレクトリー %s の削除に成功しました。');
@define('CHECKING_DIRECTORY', 'ディレクトリー %s 内のファイルを調べています');
@define('DELETE_DIRECTORY', 'ディレクトリーの削除');
@define('DELETE_DIRECTORY_DESC', 'メディア ファイル(恐らくあなたのエントリーのうちのいくつかの中で使用されるファイル)を含むディレクトリーの内容を削除をします。');
@define('FORCE_DELETE', 'Serendipity でこのディレクトリー中の未知のものを含むファイルをすべて削除します。');
@define('CREATE_DIRECTORY', 'ディレクトリーの作成');
@define('CREATE_NEW_DIRECTORY', '新規ディレクトリーの作成');
@define('CREATE_DIRECTORY_DESC', 'ここで、メディア ファイルを中へ保存めに新しいディレクトリーを作成することができます。新しいディレクトリーの名前を選び、それを保存するオプションと親ディレクトリーを選択します。');
@define('ABOUT_TO_DELETE_FILE', '<b>%s</b>を削除します。<br />もしこのファイルをエントリーで使用していた場合、リンク切れや表示できない画像の原因になるでしょう。<br />本当に進めますか?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'エラー: ファイルはマシン上に既に存在します!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', '<b>%s</b> と言う名前のファイルは既に削除されたため、恐らく見つけることができません。');
@define('ERROR_FILE_FORBIDDEN', 'アクティブコンテンツのファイルをアップロードすることを認められていません。');
@define('REMOTE_FILE_NOT_FOUND', 'ファイルはリモートのサーバーにありませんでした。URL を確認しましたか: <b>%s</b> は正しいですか?');
@define('FILE_FETCHED', '%s を %s として取得しました。');
@define('FILE_UPLOADED', 'ファイル %s を %s としてアップロードすることに成功しました。');
@define('DELETE_FILE_FAIL', 'ファイル <b>%s</b> を削除できませんでした。');
@define('DELETE_FILE', '<b>%s</b> という名前のファイルを削除しました。');
@define('FOUND_FILE', '新規/修正されたファイルを見つけました: %s.');
@define('FILENAME_REASSIGNED', '次の新規ファイル名が自動割当されました: %s');
@define('ERROR_FILE_EXISTS', 'エラー: 既に新しいファイル名が使用されています。別の名前を指定してください!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'ホットリンク済み');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', '新規名称の入力: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', '画像を追加しています...');
@define('THUMB_CREATED_DONE', 'サムネイルを作成しました。<br>終了します。');
@define('THUMBNAIL_USING_OWN', '既に非常に小さいので、自分がサムネイルとして %s を使用します。');
@define('THUMBNAIL_FAILED_COPY', '自分自身をサムネイルとして %s を使いたかったのですが、コピーに失敗しました!');
@define('DELETE_THUMBNAIL', '<b>%s</b> という名前の画像サムネイルを削除しました。');
@define('ERROR_UNKNOWN_NOUPLOAD', '未知のエラーが生じました。ファイルはアップロードしませんでした。おそらくファイルサイズがサーバーのインストールで許可された最大サイズを超えたと思われます。ISP に確認するか、php.ini ファイルで許可されたアップロード可能な最大ファイルサイズを編集してください。');
@define('MEDIA_UPLOAD_SIZEERROR', 'エラー: %s バイトより大きなファイルはアップロードできません!');
@define('MEDIA_UPLOAD_DIMERROR', 'エラー: %s x %s ピクセルより大きな画像はアップロードできません!');
@define('HOTLINK_DONE', 'ファイルをホットリンクしました。<br />完了です。');
@define('DELETE_HOTLINK_FILE', '<b>%s</b> というファイ名のホットリンクを削除する');
@define('IMAGICK_EXEC_ERROR', '実行できませんでした: "%s", エラー: %s, 返り値: %d');
@define('SKIPPING_FILE_EXTENSION', 'ファイルを飛ばします: %s は拡張子がありません。');
@define('SKIPPING_FILE_UNREADABLE', 'ファイルを飛ばします: %s は読み込めません。');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'すべての子ディレクトリーに同じパーミッションを設定する');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'エントリー内でサムネイルを使用したい');
@define('I_WANT_BIG_IMAGE', 'エントリーの中で大きな画像を使用したい');
@define('I_WANT_NO_LINK', ' 画像として表示したい');
@define('I_WANT_IT_TO_LINK', 'この URL へのリンクとして表示したい:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', '画像サイズ');
@define('IMAGE_ALIGNMENT', '画像の位置あわせ');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', '画像の挿入');
@define('MEDIA_TARGET', 'このリンクのターゲット');
@define('MEDIA_TARGET_JS', 'ポップアップ ウィンドウ (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', '単独のエントリー');
@define('MEDIA_TARGET_BLANK', 'ポップアップ ウィンドウ (「target=_blank」による)');
@define('YOU_CHOSE', 'あなたは %s を選択しました。');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', '左回り(時計と反対回り)に 90 度回転する');
@define('IMAGE_ROTATE_RIGHT', '右回り(時計回り)に 90 度回転する');
@define('MEDIA_RENAME', 'このファイルの名称を変更する');
@define('THUMBNAIL_SHORT', 'サムネイル');
@define('ORIGINAL_SHORT', 'オリジナル');
@define('SORT_ORDER_NAME', 'ファイル名');
@define('SORT_ORDER_EXTENSION', 'ファイル拡張子');
@define('SORT_ORDER_SIZE', 'ファイルサイズ');
@define('SORT_ORDER_WIDTH', '画像の幅');
@define('SORT_ORDER_HEIGHT', '画像の高さ');
@define('SORT_ORDER_DATE', 'アップロード日付');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>メディアリポジトリにファイルを追加します:</b><p>ここでメディア ファイルをアップロードするか、ウェブ中のどこかからそれらを取得するように指示することができます! If you don\'t have an appropriate image, <a href="https://images.google.com" target="_blank">search for images on google</a> matching your thoughts, the results are often useful and funny :)</p><p><b>選択方法:</b></p><br/>');
@define('ENTER_MEDIA_URL', '取得するファイルの URL の入力:');
@define('ENTER_MEDIA_UPLOAD', 'アップロードしたいファイルの選択:');
@define('SAVE_FILE_AS', '保存するファイル名:');
@define('STORE_IN_DIRECTORY', '次のディレクトリーの中に保存: ');
@define('IMAGE_MORE_INPUT', '画像を追加する');
@define('ENTER_MEDIA_URL_METHOD', '取得方法:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', '注: ホットリンクは、それらをローカルに格納せずに、リモートのイメージを使用することを可能にします。サーバーへのホットリンクを選択した場合、自分のウェブサイトか指定のウェブサイトへホットリンクする許可を持っていることを確認してください。');
@define('FETCH_METHOD_IMAGE', 'サーバーへ画像をダウンロード');
@define('FETCH_METHOD_HOTLINK', 'サーバーにホットリンクする');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'この画像の大きさを変更する');
@define('MEDIA_DELETE', 'このファイルを削除する');
@define('FILES_PER_PAGE', 'ページ毎のファイル数');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '画像が見つかりません。');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'すべてのディレクトリー');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', '設定の書き込みと保存を行いました。');
@define('DIAGNOSTIC_ERROR', 'あなたの入力した情報の診断を実行する間にいくつかのエラーを検知しました:');
@define('FULL_COMMENT_TEXT', 'はい、コメント全文です');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'データベース設定');
@define('INSTALL_CAT_DB_DESC', 'ここですべてのデータベース情報を入力できます。Serendipity が機能するためにこれが必要です。');
@define('INSTALL_DBTYPE', 'データベースタイプ');
@define('INSTALL_DBTYPE_DESC', 'データベースの種類を指定します。');
@define('INSTALL_DBHOST', 'データベースホスト');
@define('INSTALL_DBHOST_DESC', 'データベースサーバーのホスト名を指定します。');
@define('INSTALL_DBUSER', 'データベースユーザー');
@define('INSTALL_DBUSER_DESC', 'データベースの接続に使用するユーザー名を指定します。');
@define('INSTALL_DBPASS', 'データベースパスワード');
@define('INSTALL_DBPASS_DESC', '上のユーザー名と一致するパスワードを指定します。');
@define('INSTALL_DBNAME', 'データベース名');
@define('INSTALL_DBNAME_DESC', '使用するデータベース名を指定します。');
@define('INSTALL_DBPREFIX', 'データベーステーブル接頭語');
@define('INSTALL_DBPREFIX_DESC', 'テーブル名の接頭語を指定します。例えば「serendipity_」です。');
@define('INSTALL_DBPERSISTENT', '持続的接続を使用する');
@define('INSTALL_DBPERSISTENT_DESC', '持続的データベース接続の使用法を有効にします。詳しいことは <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">ここ</a> を参照してください。これは通常使用することを推奨しません。');
@define('INSTAL_DB_UTF8', 'データベース文字エンコード変換を有効にする');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'パス');
@define('INSTALL_CAT_PATHS_DESC', '各種パスに必要なフォルダーとファイルを指定します。ディレクトリーには末尾にスラッシュを忘れないでください!');
@define('INSTALL_FULLPATH', 'フルパス');
@define('INSTALL_FULLPATH_DESC', 'serendipity をインストールした絶対フルパスです。');
@define('INSTALL_UPLOADPATH', 'アップロードパス');
@define('INSTALL_UPLOADPATH_DESC', 'すべてのアップロードはここに来ます。「フルパス」への相対パス - 通常「uploads/」です。');
@define('INSTALL_RELPATH', '相対パス');
@define('INSTALL_RELPATH_DESC', 'ブラウザーで使用する serendipity のパスです。通常「/serendipity/」 です。');
@define('INSTALL_RELTEMPLPATH', '相対テンプレートパス');
@define('INSTALL_RELTEMPLPATH_DESC', 'テンプレートが含まれるフォルダーへのパスです - 「相対パス」への相対です。');
@define('INSTALL_RELUPLOADPATH', '相対アップロードパス');
@define('INSTALL_RELUPLOADPATH_DESC', 'ブラウザからのアップロードのパスです - 「相対パス」への相対です。');
@define('INSTALL_URL', 'ブログの URL');
@define('INSTALL_URL_DESC', 'serendipity をインストールしたベース URL');
@define('INSTALL_AUTODETECT_URL', '自動検知に HTTP-Host を使う');
@define('INSTALL_AUTODETECT_URL_DESC', 'If set to "true", Serendipity will ensure that the HTTP Host which was used by your visitor is used as your BaseURL setting. Enabling this will let you be able to use multiple domain names for your Serendipity Blog, and use the domain for all follow-up links which the user used to access your blog.');
@define('INSTALL_INDEXFILE', 'インデックスファイル');
@define('INSTALL_INDEXFILE_DESC', 'serendipity インデックスファイルの名前');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', '固定リンク');
@define('INSTALL_CAT_PERMALINKS_DESC', 'あなたのウェブログに固定リンクを定義するために様々なURLパターンを定義します。これはデフォルトを使用することが提案されます; if not, you should try to use the %id% value where possible to prevent Serendipity from querying the database to lookup the target URL.');
@define('INSTALL_PERMALINK', 'エントリーの固定リンク URL 構造');
@define('INSTALL_PERMALINK_DESC', 'ここで、ベース URL からエントリーの入手可能になる、適当な場所への相対的な URL 構造の先頭を定義することができます。変数は、%id%、%title、%day%、%month、%year、そして他の文字を使用することができます。');
@define('INSTALL_PERMALINK_AUTHOR', '著者の固定リンク URL 構造');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'ここで、ベース URL からある著者のエントリーが入手可能になる、適当な場所への相対的な URL 構造の先頭を定義することができます。変数は、%id%、%realname%、%username%、%email%、そして他の文字を使用することができます。');
@define('INSTALL_PERMALINK_CATEGORY', 'カテゴリの固定リンク URL 構造');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'ここで、ベース URL からあるカテゴリのエントリーが入手可能になる、適当な場所への相対的な URL 構造の先頭を定義することができます。変数は、%id%、%name%、%parentname、%description%、そして他の文字を使用することができます。');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'カテゴリ RSS フィードの固定リンク URL 構造');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'ここで、ベース URL からあるカテゴリーの RSS フィード が入手可能になる、適当な場所への相対的な URL 構造の先頭を定義することができます。変数は、%id%、%name%、%description%、そして他の文字を使用することができます。');
@define('INSTALL_PERMALINK_FEEDAUTHOR', '固定リンク の RSS フィードの著者 URL 構造');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'ここで、ベース URL からある特定のユーザーの RSS フィード が入手可能になる、適当な場所への相対的な URL 構造の先頭を定義することができます。変数は、%id%、%realname%、%username%、%email%、そして他の文字を使用することができます。 ');
@define('INSTALL_PERMALINK_ARCHIVESPATH', '書庫一覧へのパス');
@define('INSTALL_PERMALINK_ARCHIVEPATH', '書庫へのパス');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'カテゴリ一覧へのパス');
@define('INSTALL_PERMALINK_AUTHORSPATH', '著者へのパス');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '未購読コメントへのパス');
@define('INSTALL_PERMALINK_DELETEPATH', '削除コメントへのパス');
@define('INSTALL_PERMALINK_APPROVEPATH', '承認コメントへのパス');
@define('INSTALL_PERMALINK_FEEDSPATH', 'RSS フィードへのパス');
@define('INSTALL_PERMALINK_PLUGINPATH', '単一プラグインへのパス');
@define('INSTALL_PERMALINK_ADMINPATH', '管理へのパス');
@define('INSTALL_PERMALINK_SEARCHPATH', '検索へのパス');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'パスへのコマンド');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', '一般設定');
@define('INSTALL_CAT_SETTINGS_DESC', 'Serendipity がどのように振舞うかカスタマイズします。');
@define('INSTALL_USERNAME', '管理者ユーザー名');
@define('INSTALL_USERNAME_DESC', '管理者ログインのユーザー名を指定します。');
@define('INSTALL_PASSWORD', '管理者パスワード');
@define('INSTALL_PASSWORD_DESC', '管理者ログインのパスワードを指定します。');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', '本名');
@define('USERCONF_REALNAME_DESC', '著作者のフルネームです。これは読者に見える名前です。');
@define('INSTALL_EMAIL', '管理者電子メール');
@define('INSTALL_EMAIL_DESC', 'ブログ管理者の電子メールを指定します。');
@define('INSTALL_SENDMAIL', '管理者にメールを送信しますか?');
@define('INSTALL_SENDMAIL_DESC', 'エントリーにコメントが投稿されたとき、電子メールを受信しますか?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'ブログの名前');
@define('INSTALL_BLOGNAME_DESC', 'ブログの題名を記述します。');
@define('INSTALL_BLOGDESC', 'ブログの説明');
@define('INSTALL_BLOGDESC_DESC', 'ブログについての紹介文を記述します。');
@define('INSTALL_BLOG_EMAIL', 'ブログの電子メールアドレス');
@define('INSTALL_BLOG_EMAIL_DESC', 'この設定は送信メールの「From」パートの電子メールアドレスとして使用されます。必ず、ホスト上で使用するメールサーバーで認識するアドレスとしてこれを設定定します - 多くのメールサーバーが、不明の From アドレス後を持っているメッセージを拒絶します。');
@define('COMMENT_TOKENS', 'コメントのモデレーションにトークンを使いますか?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', '言語');
@define('INSTALL_LANG_DESC', 'ブログの言語を選択します。');
@define('INSTALL_CHARSET', '文字コード選択');
@define('INSTALL_CHARSET_DESC', 'ここは  UTF-8 かネイティブ(ISO・EUC など)の文字コードを切り替えることができます。「ネイティブ」に文字エンコード設定することに変化がないように、いくつかの言語は UTF-8 のみ翻訳を持っています。UTF-8 は新規インストールで提案されます。特殊文字で既にエントリーを作っている場合は、この設定を変更しないでください - これは不正な文字を導くかもしれません。必ずこの問題に関すしては https://docs.s9y.org/docs/developers/internationalization.html をさらに読んでください。 訳注: 日本語は文字エンコードは UTF-8 のみ用意されています。');
@define('INSTALL_CAL', 'カレンダーの種類');
@define('INSTALL_CAL_DESC', 'あなたの希望のカレンダーの形式を選びます。');
@define('AUTOLANG', '訪問者が使用するブラウザーのデフォルト言語');
@define('AUTOLANG_DESC', 'もし有効にしたならエントリーとインターフェースの言語の決定は訪問者のブラウザーの言語設定を使用します。');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'ユーザー グループ用の ACL プラグインを有効にしますか?');
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
@define('INSTALL_CAT_DISPLAY', '外観とオプション');
@define('INSTALL_CAT_DISPLAY_DESC', 'Serendipity のルックアンドフィールをカスタマイズ');
@define('INSTALL_FETCHLIMIT', 'フロントページにエントリーを表示する');
@define('INSTALL_FETCHLIMIT_DESC', '各ページでフロントエンドに表示するエントリーの数');
@define('INSTALL_RSSFETCHLIMIT', 'フィードに表示するエントリー数');
@define('INSTALL_RSSFETCHLIMIT_DESC', '各ページでRSSフィードに表示するエントリーの数です。');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', '厳密に RFC2616 に準拠した RSS フィードを動作させる');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. リファレンス: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'ページの gzip 圧縮を使う');
@define('INSTALL_USEGZIP_DESC', 'ページの送信を高速化するために、ブラウザーがこれをサポートするなら、訪問者へ送るページを圧縮することができます。これが推奨です。');
@define('INSTALL_XHTML11', '強制的に XHTML 1.1 準拠');
@define('INSTALL_XHTML11_DESC', '強制で XHTML 1.1 準拠にします (第 4 世代より古いブラウザーのフロントエンド・バックエンドの問題を起こすかもしれません。)');
@define('INSTALL_POPUP', 'ポップアップ ウィンドウを有効にする');
@define('INSTALL_POPUP_DESC', 'コメントやトラックバックにポップアップ ウィンドウを使用しますか?');
@define('INSTALL_EMBED', 'serendipity を組み込みで使用しますか?');
@define('INSTALL_EMBED_DESC', 'If you want to embed serendipity within a regular page, set to true to discard any headers and just print the contents. You can make use of the indexFile option to use a wrapper class where you put your normal webpage headers. より詳しい情報はファイル README を参照してください!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '外部リンクをクリック可能にしますか?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"いいえ": google スパムを防ぐために適用可能な未確認外部リンク (トップ退出、トップ入口、ユーザーコメント) はただのテキストとして表示する/しないを指定します (推奨). "はい": 未確認外部リンクはハイパーリンクとして表示します。サイドバープラグインの設定で上書きすることができます!');
@define('INSTALL_TRACKREF', 'リファラー追跡を有効にしますか?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'リファラーブロック');
@define('INSTALL_BLOCKREF_DESC', 'リファラー一覧で表示しないことを希望する特殊なホストがありますか? ホスト名の一覧を「;」で列挙し、そのホスト名が部分一致でブロックされることに注意してください!');
@define('INSTALL_REWRITE', 'URL 書き換え');
@define('INSTALL_REWRITE_DESC', 'URL を生成するときに使用するルールを選択します。書き換えルールを有効にさせることで、ウェブログに対してきれいな URL を作成し、google のようなスパイダーはよりよいインデックスを作成します。ウェブサーバーは、serendipity ディレクトリーに対して、mod_rewrite あるいは「AllowOverride All」のいずれかをサポートする必要があります。デフォルト設定は自動車検知されます。');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'サーバー時間差');
@define('INSTALL_OFFSET_DESC', 'ウェブサーバー(現在: %clock%)と希望の時間帯の時差を入力します。');
@define('INSTALL_SHOWFUTURE', '未来のエントリーを表示する');
@define('INSTALL_SHOWFUTURE_DESC', 'もし有効にしたならブログは未来を含むすべてのエントリーを表示するでしょう。デフォルトはそれらのエントリーを隠し、公開日が到来したらそれらを表示します。');
@define('INSTALL_ACL', 'カテゴリの読み込み権限を適用する');
@define('INSTALL_ACL_DESC', '有効な場合、ログインしたウェブログ閲覧ユーザーはグループ許可設定のカテゴリ設定が適用されるでしょう。無効な場合、カテゴリの読み込み許可は適用されません。しかし、しかし、前向きな結果はあなたのウェブログ上の小さなスピードアップです。マルチユーザーを必要としない場合ウェブログ読み込み権限は必要なく、これを無効に設定します。');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'RSS フィード中で拡張本文とすべての記事を表示する');
@define('SYNDICATION_PLUGIN_BANNERURL', 'RSS feed の画像');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'GIF/JPEG/PNG 形式の画像の URL で、入力すると有効になります (空にすると serendipity ロゴ)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '画像の幅');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', '最大 144 ピクセルです。');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', '画像の高さ');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', '最大 400 ピクセルです。');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '電子メールアドレスを表示しますか?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '"managingEditor" フィールド');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', '管理編集者の電子メールアドレスで、入力すると有効になります (空にすると隠します) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '"webMaster" フィールド');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'ウェブマスターの電子メールアドレスで、入力すると有効になります (空にすると隠します) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', '"ttl" フィールド(生存期間)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Amount of minutes after which your blog should not be cached any more by foreign sites/applications (empty: hidden) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '項目 "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'RSS チャンネルに最新のエントリーの日付を表すために項目「pubDate」を組み込みますか?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', '画像変換設定');
@define('INSTALL_CAT_IMAGECONV_DESC', 'serendipity がどのようにイメージを扱わなければならないかに関する一般的な情報を入力します。');
@define('INSTALL_IMAGEMAGICK', 'Imagemagick を使う');
@define('INSTALL_IMAGEMAGICK_DESC', 'image magick がインストール済みで、それを使って画像のリサイズをしますか?');
@define('INSTALL_IMAGEMAGICKPATH', 'convert バイナリへのパス');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'image magic convert バイナリのフルパスと名前');
@define('INSTALL_THUMBSUFFIX', 'サムネイル接尾辞');
@define('INSTALL_THUMBSUFFIX_DESC', 'サムネイルは次の書式で指定されるでしょう: オリジナル.[接尾辞].拡張子');
@define('INSTALL_THUMBWIDTH', 'サムネイルの大きさ');
@define('INSTALL_THUMBWIDTH_DESC', '自動生成するサムネイルの不変の最大幅');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', '幅');
@define('INSTALL_THUMBDIM_HEIGHT', '高さ');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'ファイルアップロードの最大容量');
@define('MEDIA_UPLOAD_SIZE_DESC', 'バイトでアップロードファイルの最大サイズを入力します。この設定は php.ini のサーバー側設定により上書きされます: upload_max_filesize, post_max_size, max_input_time のすべてはこのオプションを優先します。空文字列はサーバー側の制限のみを使うことを意味します。');
@define('MEDIA_UPLOAD_MAXWIDTH', 'アップロードされたファイルの最大幅');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'アップロードされた画像の最大幅をピクセル単位で入力します。');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'アップロードされたファイルの最大高');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'アップロードされた画像の最大の高さをピクセル単位で入力します。');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'オンザフライメディアの同期を有効にする');
@define('ONTHEFLYSYNCH_DESC', 'If enabled, Serendipity will compare the media database with the files stored on your server and synchronize the database and directory contents.');
@define('MEDIA_DYN_RESIZE', '動的な画像のサイズ変更を許可しますか?');
@define('MEDIA_DYN_RESIZE_DESC', 'If enabled, the media selector can return images in any requested size via a GET variable. The results are cached, and thus can create a large filebase if you make intensive use of it.');
@define('MEDIA_EXIF', 'EXIF/JPEG 画像データをインポートする');
@define('MEDIA_EXIF_DESC', 'If enabled, existing EXIF/JPEG metadata of images will be parsed and stored in the database for display in the media gallery.');
@define('MEDIA_PROP', 'メディアプロパティ');
@define('MEDIA_PROP_DESC', '各メディア ファイルに定義したいプロパティ項目を「;」で分割した一覧で入力します');
@define('MEDIA_PROP_MULTIDESC', '(You can append ":MULTI" after any item to indicate that this item will contain long text instead of just some characters)');
@define('MEDIA_KEYWORDS', 'メディア キーワード');
@define('MEDIA_KEYWORDS_DESC', 'Enter a list of ";" separated words that you want to use as pre-defined keywords for media items.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', '個人情報の詳細');
@define('USERCONF_CAT_PERSONAL_DESC', '個人情報の詳細を変更します。');
@define('USERCONF_USERNAME', 'ユーザー名');
@define('USERCONF_USERNAME_DESC', 'ブログにログインするときに使うユーザー名を指定します。');
@define('USERCONF_PASSWORD', 'パスワード');
@define('USERCONF_PASSWORD_DESC', 'ブログにログインするときに使うパスワードを指定します。');
@define('USERCONF_CHECK_PASSWORD', '古いパスワード');
@define('USERCONF_CHECK_PASSWORD_DESC', '上の項目でパスワードを変更する場合、この項目に現在のユーザーパスワードを入力する必要があります。');
@define('USERCONF_USERLEVEL', 'アクセスレベル');
@define('USERCONF_USERLEVEL_DESC', 'このレベルはこのユーザーがウェブログに対してどういう種類のアクセスを持つか決定するため使用されます。');
@define('USERCONF_GROUPS', 'グループメンバー');
@define('USERCONF_GROUPS_DESC', 'このユーザーは次のグループのメンバーです。複数の会員は可能です。');
@define('USERCONF_EMAIL', '電子メールアドレス');
@define('USERCONF_EMAIL_DESC', '個人の電子メールアドレスを指定します。');
@define('INSTALL_WYSIWYG', 'WYSIWYG エディタを使う');
@define('INSTALL_WYSIWYG_DESC', 'WYSIWYG エディタを使用しますか? (実行には IE5 以上か+、Mozilla 1.3 以上が必要です)');
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
@define('USERCONF_SENDCOMMENTS', 'コメントの通知を送信しますか?');
@define('USERCONF_SENDCOMMENTS_DESC', 'コメントをあなたのエントリーが受けたとき、電子メールを受信しますか?');
@define('USERCONF_SENDTRACKBACKS', 'トラックバックの通知を送信しますか?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'トラックバックをあなたのエントリーが受けたとき、電子メールを受信しますか?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', '権限: エントリーを公開しますか?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'このユーザーがエントリーを公開することを許可しますか?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'メディア選択ポップアップでツールバーを表示しますか?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', '新規エントリーのデフォルト設定');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', '注意: ユーザー レベル属性は現在プラグインと認証の後方互換性のみに使用されます。ユーザーの特権は現在グループ会員で扱います!');
@define('USERCONF_CHECK_PASSWORD_ERROR', '正しい古いパスワードを指定せず、新しいパスワードを変更することは許可されていません．設定は保存されませんでした。');
@define('USERCONF_CHECK_USERNAME_ERROR', 'ユーザー名は空にできません。');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', '個人設定: 個人設定のアクセス');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', '個人のユーザー レベル設定: ユーザー レベルの変更');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', '個人の作成禁止設定: 「エントリー作成の禁止」の変更');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', '個人の公開権限設定: エントリーを公開する権限の変更');
@define('PERMISSION_SITECONFIGURATION', 'サイト設定: システム設定のアクセス');
@define('PERMISSION_BLOGCONFIGURATION', 'ブログ設定: ブログの中心設定のアクセス');
@define('PERMISSION_ADMINENTRIES', 'エントリー管理: エントリーの管理');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', '他ユーザー保持エントリーの管理: 他ユーザーのエントリーの管理');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'インポート管理: エントリーのインポート');
@define('PERMISSION_ADMINCATEGORIES', 'カテゴリ管理: カテゴリの管理');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', '他ユーザー保持カテゴリの管理: 他ユーザーのカテゴリの管理');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'カテゴリ削除管理: カテゴリの削除');
@define('PERMISSION_ADMINUSERS', 'ユーザー管理: ユーザーの管理');
@define('PERMISSION_ADMINUSERSDELETE', 'ユーザー削除管理: ユーザーの削除');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'ユーザーのユーザー レベル編集管理: ユーザー レベルの変更');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', '同じユーザーの管理: グループに居るユーザーの管理');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', '他のユーザーの管理: グループに居ないユーザーの管理');
@define('PERMISSION_ADMINUSERSCREATENEW', '新規ユーザー作成管理: 新規ユーザーの作成');
@define('PERMISSION_ADMINUSERSGROUPS', 'ユーザー グループ管理: ユーザー グループの管理');
@define('PERMISSION_ADMINPLUGINS', 'プラグイン管理: プラグイン管理');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', '他ユーザー保持のプラグインの管理: 他ユーザーのプラグインの管理');
@define('PERMISSION_ADMINIMAGES', '画像管理: メディア ファイルの管理');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', '画像ディレクトリー管理: メディアディレクトリーの管理');
@define('PERMISSION_ADMINIMAGESADD', '画像追加管理: 新規メディア ファイルの追加');
@define('PERMISSION_ADMINIMAGESDELETE', '画像削除管理: メディア ファイルの削除');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', '他ユーザー保持画像の管理: 他ユーザーのメディア ファイルの管理');
@define('PERMISSION_ADMINIMAGESVIEW', '画像閲覧管理: メディア ファイルの閲覧');
@define('PERMISSION_ADMINIMAGESSYNC', '画像同期管理: サムネイル同期');
@define('PERMISSION_ADMINCOMMENTS', 'コメント管理: コメント管理');
@define('PERMISSION_ADMINTEMPLATES', 'テンプレート管理: テンプレート管理');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: 他ユーザーのメディア ファイルの閲覧');
@define('PERMISSION_FORBIDDEN_PLUGINS', '禁止プラグイン');
@define('PERMISSION_FORBIDDEN_HOOKS', '禁止イベント');
@define('PERMISSION_HIDDENGROUP', 'グループ/非著者を隠す');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'エントリーは保存されました。');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'スレッド');
@define('COMMENTS_VIEWMODE_LINEAR', '一覧');
@define('DISPLAY_COMMENTS_AS', 'コメント表示形式');
@define('COMMENTS_DISABLE', 'このエントリーのコメントを許可しない');
@define('COMMENTS_ENABLE', 'このエントリーへのコメントを許可する');
@define('COMMENTS_CLOSED', '執筆者はこのエントリーへのコメントを許可していません');
@define('VIEW_EXTENDED_ENTRY', '"%s" の続きを読む...');
@define('TRACKBACK_SPECIFIC', 'このエントリーのトラックバック URI を指定する');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'フル閲覧');
@define('VIEW_TOPICS', 'トピック閲覧');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Topics from');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'エントリーの挿入が成功しませんでした!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', '入力情報を記憶しますか?');
@define('SUBMIT_COMMENT', 'コメント送信');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'このエントリーを購読する');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'ブラウザーは有効な HTTP-Referrer 文字列を送信しませんでした。これは誤設定されたブラウザー/プロクシ、あるいはあなたに向けた Cross Site Request Forgery(XSRF)を引き起ここすかどちらかかもしれません。要求した操作は完了できませんでした。');
@define('NAVLINK_AMOUNT', 'ナビゲーション バーのリンク数の入力 (スタイル ページ管理の再読み込みに必要)');
@define('NAV_LINK_TEXT', 'ナビゲーション バーのリンクでのテキストの入力');
@define('NAV_LINK_URL', '完全なリンクの URL を入力する');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'コメント #%s は既に承認されたようです。');
@define('COMMENT_EDITED', '選択されたコメントを編集しました。');
@define('COMMENTS_WILL_BE_MODERATED', '送信されたコメントは表示する前にもでレーションされるでしょう。');
@define('THIS_COMMENT_NEEDS_REVIEW', '警告: このコメントは表示する前に承認が必要です。');
@define('DELETE_COMMENT', 'コメントを削除する');
@define('APPROVE_COMMENT', 'コメントを承認する');
@define('REQUIRES_REVIEW', 'レビューが必要');
@define('COMMENT_APPROVED', 'コメント #%s の承認に成功しました。');
@define('COMMENT_DELETED', 'コメント #%s の削除に成功しました。');
@define('COMMENTS_MODERATE', 'このエントリーのコメントとトラックバックにはモデレーションが必要');
@define('THIS_TRACKBACK_NEEDS_REVIEW', '警告: このトラックバックは表示する前に承認が必要です。');
@define('DELETE_TRACKBACK', 'トラックバックを削除する');
@define('APPROVE_TRACKBACK', 'トラックバックを承認する');
@define('TRACKBACK_APPROVED', 'トラックバック #%s の承認に成功しました。');
@define('TRACKBACK_DELETED', 'トラックバック #%s の削除に成功しました。');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'トップレベル');
@define('VIEW_COMMENT', 'コメントを閲覧する');
@define('VIEW_ENTRY', 'エントリーを閲覧する');
@define('LINK_TO_ENTRY', 'エントリーへのリンク');
@define('LINK_TO_REMOTE_ENTRY', 'リモートのエントリーへのリンク');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'URI %s にピングバックを送信しています...');
@define('PINGBACK_SENT', 'ピングバックに成功しました');
@define('PINGBACK_FAILED', 'ピングバックに失敗しました: %s');
@define('PINGBACK_NOT_FOUND', 'ピングバック URI が見つかりませんでした。');
@define('TRACKBACK_SENDING', 'URI %s にトラックバックを送信中...');
@define('TRACKBACK_SENT', 'トラックバック成功');
@define('TRACKBACK_FAILED', 'トラックバック失敗: %s');
@define('TRACKBACK_NOT_FOUND', 'トラックバック URI が見つかりません。');
@define('TRACKBACK_URI_MISMATCH', '自動検出されたトラックバック URI はターゲット URI と一致しません。');
@define('TRACKBACK_CHECKING', 'トラックバックが可能か <u>%s</u> を検査中...');
@define('TRACKBACK_NO_DATA', '対象はデータが含まれませんでした。');
@define('TRACKBACK_COULD_NOT_CONNECT', 'トラックバックを送信しませんでした: %s のポート番号 %s に接続できませんでした。');

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
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', '購読済みエントリー "%s" に新規コメントです');
@define('SUBSCRIPTION_MAIL', "こんにちは %s さん。\n監視中のエントリーに新しいコメントが作成されました。\n\nブログ名:\n%s\nエントリー名:\n%s\n\n下記でエントリーを見つけることができます:\n%s\n\n下記のリンクをクリックすると購読解除することができます:\n%s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "こんにちは。\n\n監視中のエントリーに新しいトラックバックが追加されました。\nサイト名: %s\n題名: %s\n投稿者の名前: %s\n\nここでエントリーを見つけることができます:\n%s\n\nこのリンクをクリックすると購読をやめることができます:\n%s\n");
@define('SIGNATURE', "\n-- \n%s は Serendipity を使っています。\n最良の blog を探しているなら <https://s9y.org> を見てください。");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', "エントリーに新しいコメントが投稿されました。\n\nブログ名:%s\nエントリー名:\n%s");
@define('A_NEW_TRACKBACK_BLAHBLAH', '題名 "%s" に新しいトラックバックが作成されました。');
@define('YOU_HAVE_THESE_OPTIONS', '次のオプションが利用可能です:');
@define('NEW_TRACKBACK_TO', '新規トラックバックの作成: ');
@define('NEW_COMMENT_TO', '新規コメントの投稿: ');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'キーワード「%s」はどのエントリーでも見つけられませんでした。' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', '「%s」の検索結果は %s 個あります:');
@define('SEARCH_TOO_SHORT', '検索文字は少なくとも 3 文字なければなりません。例えば次のように簡潔な単語に「*(アスタリスク)」を追加できます: 「s9y*」は簡潔な単語を用い、検索をするコツです。');
@define('SEARCH_ERROR', '検索機能は期待通りに処理しませんでした。このブログの管理者に通知します: これはデータベースにインデックスキーがないために発生するのかもしれません。MySQL システムにおいては、あなたのデータベースユーザーアカウントがこの照会を実行する特権のある必要があります: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> データベースから返された特定のエラーはこの通りです: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'コメントは何も含んでいません。%s戻る%s でもう一度試してください。');
@define('COMMENT_NOT_ADDED', 'このエントリーへのコメントが無効になったのでコメントは追加できませんでした。');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Comments from');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'オプション「%s」の設定文法が間違っています。種類「%s」の内容が必要です。');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'カテゴリの一覧を表示します。');
@define('CATEGORIES_PARENT_BASE', 'カテゴリの下のみ表示する...');
@define('CATEGORIES_PARENT_BASE_DESC', '子カテゴリーだけが表示されるように、親カテゴリーを選ぶことができます。');
@define('CATEGORIES_HIDE_PARALLEL', 'カテゴリツリーの一部ではないカテゴリを隠す');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'If you want to hide categories that are part of a different category tree, you need to enable this. This feature makes most sense if used in conjunction with a multi-blog using the "Properties/Tempaltes of categories" plugin.');
@define('CATEGORIES_HIDE_PARENT', '選択された親カテゴリを隠しますか?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'If you restrict the listing of categories to a specific category, by default you will see that parent category within the output listing. If you disable this option, the parent category name will not be displayed.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Smarty テンプレートを有効にしますか?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'If this option is enabled, the plugin will utilize Smarty-Templating features to output the category listing. If you enable this, you can change the layout via the "plugin_categories.tpl" template file. Enabling this option will impact performance, so if you do not need to make customizations, leave it disabled.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'カテゴリ毎に表示するエントリーの数は?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Allow visitors to display multiple categories at once?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each category in this sidebar plugin. Users can check those boxes and then see entries belonging to their selection.');
@define('CATEGORIES_TO_FETCH', 'カテゴリを取得する');
@define('CATEGORIES_TO_FETCH_DESC', 'どの執筆者のカテゴリを取得しますか?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', '著者の一覧を表示します。');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Show number of articles next to author name?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'If this option is enabled, the number of articles by this author is shown next to the authors name in parentheses.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', '配信');
@define('SHOWS_RSS_BLAHBLAH', 'RSS 配信のリンクを表示します。');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s フィード');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 フィード');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 フォード');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 フィード');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 コメント');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 フィード');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', '「フィード」の名前を表示する');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'フィードのオプション カスタム名を入力します (空のときはフィードへの標準値)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'フィード「コメント」での名前を表示する');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'コメント フィードのオプション カスタム名を入力する');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', '公開したい フィードの ID です．');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner 画像');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'feedburner.com の場所での表示する画像の名前 (あるいはカウンターを空に残す) 例: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner 題名');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'イメージの側に表示するべきタイトルです(もしあれば)');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner 画像のテキスト');
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
@define('ARCHIVE_COUNT', '一覧中の項目の数');
@define('ARCHIVE_COUNT_DESC', '表示する月・週または日の合計数');
@define('ARCHIVE_FREQUENCY', 'カレンダー項目の周期');
@define('ARCHIVE_FREQUENCY_DESC', 'リストの中で各項目間で使用するカレンダーの間隔です。');
@define('BROWSE_ARCHIVES', '月単位の書庫表示');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'テキストとして "Serendipity" を表示する');
@define('POWERED_BY_SHOW_TEXT_DESC', 'テキストとして "Serendipity Weblog" を表示するでしょう。');
@define('POWERED_BY_SHOW_IMAGE', '"Serendipity" とロゴを表示');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Serendipity ロゴを表示します。');
@define('ADVERTISES_BLAHBLAH', 'ブログの元を宣伝します。');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'ログインに https を使う');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'ログインの https ロケーションへのリンクポイントです。ウェブサーバーがこれをサポートしている必要があります!');
@define('SUPERUSER', 'ブログ管理');
@define('SUPERUSER_OPEN_ADMIN', '管理画面を開く');
@define('SUPERUSER_OPEN_LOGIN', 'ログイン画面を開く');
@define('ALLOWS_YOU_BLAHBLAH', 'ブログ管理のサイドバーにリンクを提供します。');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'カレンダー');
@define('CALENDAR_BOW_DESC', 'その週の始めと考えるべき週の曜日です。デフォルトは「Monday(月曜日)」です。');
@define('QUICKJUMP_CALENDAR', 'カレンダー クイック ジャンプ');
@define('CALENDAR_BEGINNING_OF_WEEK', '週の開始曜日');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'プラグインの API フックを有効にする');
@define('CALENDAR_EXTEVENT_DESC', 'If enabled, plugins can hook into the calendar to display their own events highlighted. Only enable if you have installed plugins that need this, otherwise it just decreases performance.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'エントリーの検索');
@define('SEARCH_FULLENTRY', '全エントリーを表示する');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'サイドバーに HTML の情報(ナゲット)を保持します。');
@define('THE_NUGGET', 'HTML の塊です!');
@define('BACKEND_TITLE', 'プラグイン設定画面の追加情報');
@define('BACKEND_TITLE_FOR_NUGGET', 'Here you can define a custom string which is displayed in the Plugin Configuration screen together with the description of the HTML Nugget plugin. If you have multiple HTML nuggets with an empty title, this helps to distinct the plugins from another.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'トップの退出/リファラーをリンクとして表示しますか?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"いいえ": google スパムを防ぐために退出とリファラーをただのテキストとして表示します。"はい": 退出とリファラーをハイパーリンクとして表示します。"デフォルト": 一般設定をの設定を使用します(推奨)');
@define('HAVE_TO_BE_LOGGED_ON', 'このページを閲覧するにはログインしなければなりません。');
@define('WELCOME_TO_ADMIN', 'ようこそ Serendipity の管理スイートへ');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', '大きな画像');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', '短いコメント');
@define('MEDIA_PROPERTY_COMMENT2', '長いコメント');
@define('DELETE_SELECTED_ENTRIES', '選択したエントリーを削除する');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', '件名');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity はまだインストールされていません。今から<a href="%s">インストール</a> してください。');
@define('COMMENT_ADDED_CLICK', '%sここ%s をクリックするとコメントに戻ります。%sここ%s をクリックするとウィンドウを閉じます。');
@define('COMMENT_NOT_ADDED_CLICK', '%s戻る%s でコメントに戻ります。%s閉じる%s でウィンドウを閉じます。');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', '関連した日付');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'ターゲット URI は最大ファイルサイズ %s を超過しました。');
@define('CLICK_FILE_TO_INSERT', '追加したいファイルをクリック:');
@define('SELECT_FILE', '追加するファイルの選択');
@define('MANAGE_IMAGES', '画像管理');
@define('WORD_NEW', '新規');
@define('WORD_OR', 'Or');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'フロントエンド: 外部サービス');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'フロントエンド: 機能');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'フロントエンド: Full Mods');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'フロントエンド: 閲覧');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'フロントエンド: エントリーー関連');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'バックエンド: エディタ');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'バックエンド: ユーザー管理');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'バックエンド: メタ情報');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'バックエンド: テンプレート');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'バックエンド: 機能');
@define('PLUGIN_GROUP_IMAGES', '画像');
@define('PLUGIN_GROUP_ANTISPAM', 'アンチスパム');
@define('PLUGIN_GROUP_MARKUP', 'マークアップ');
@define('PLUGIN_GROUP_STATISTICS', '統計');
@define('IMPORT_WELCOME', 'ようこそ Serendipity のインポートユーティリティへ');
@define('USER_SELF_INFO', '%s としてログイン中 (%s)');
@define('IMPORT_WHAT_CAN', 'ここで、他のウェブログソフトウェアアプリケーションからエントリーをインポートすることができます。');
@define('IMPORT_SELECT', 'あなたがインポートしたいソフトウェアを選択してください。');
@define('MANAGE_STYLES', 'スタイル管理');
@define('SELECT_A_PLUGIN_TO_ADD', 'インストールしたいプラグインを選択する');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', '以下にインストール済みのプラグインの一覧があります。');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', '今中断する');
@define('DELETE_SELECTED_COMMENTS', '選択したコメントを削除する');
@define('MODERATE_SELECTED_COMMENTS', '選択したコメントを許可する');
@define('FIND_MEDIA', 'メディア検索');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'エラー: 古いファイル名が存在しません!');
@define('ERROR_SOMETHING', 'エラー: 何かが間違っています。');
@define('DIRECT_LINK', 'このエントリーへのダイレクトリンク');
@define('SELECT_TEMPLATE', 'ウェブログに使用したいテンプレートを選択します。');
@define('DATABASE_ERROR', 'serendipity エラー: データベースに接続できませんでした - 終了します。');
@define('LIMIT_TO_NUMBER', 'どれだけの項目を表示しますか?');
@define('DIRECTORIES_AVAILABLE', 'In the list of available subdirectories you can click on any directory name to create a new directory within that structure.');
@define('CATEGORY_INDEX', '下記にあなたのエントリーに利用可能なカテゴリの一覧があります。');
@define('PAGE_BROWSE_PLUGINS', '%s/%s ページ、合計 %s プラグインです。');
@define('CHARSET_NATIVE', 'ネイティブ');
@define('XMLRPC_NO_LONGER_BUNDLED', 's9y への XML-RPC API インタフェースは、もはやそれを使用して、この API を含めた進行中のセキュリティ問題および多くでない人々のためにバンドルされません。Serendipity の XML-RPC API インターフェースは、ずっと継続するセキュリティの問題と、この API を多くの人が使用していないため、もはやバンドルされていません。したがって、XML-RPC API を使用するために XML-RPC プラグインをインストールする必要があります。アプリケーション中で使用する URL は変わりません。プラグインをインストールしたらすぐに、再び API を使用することができるでしょう。');
@define('AUTHORS_ALLOW_SELECT', '訪問者がすぐに複数の著者を表示することを許可しますか?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'このオプションが有効な場合、チェックボックスはこのサイドバープラグインに各著者の次に追加されるでしょう。ユーザーはそれらのボックスをチェックし、彼らの選択と一致するエントリーがを見る事ができます。');
@define('PREFERENCE_USE_JS', '高度な JS の使用を有効にしますか?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(このページは高度な JavaScript を使用しています。もし機能に問題がある場合、個人プリファレンスの高度な JS の使用を無効にするか、ブラウザーの JavaScript を無効にしてください)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
