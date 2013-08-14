<?php #

/**
 *  @version 
 *  @author Tadashi Jokagi <elf2000@users.sourceforge.net>
 *  EN-Revision: 1381
 */

@define('PLUGIN_EVENT_STATISTICS_NAME', '統計情報');
@define('PLUGIN_EVENT_STATISTICS_DESC', 'エントリパネルに興味のある統計へのリンクを加えます。');
@define('PLUGIN_EVENT_STATISTICS_OUT_STATISTICS', '統計');
@define('PLUGIN_EVENT_STATISTICS_OUT_FIRST_ENTRY', 'はじめのエントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_LAST_ENTRY', '最後のエントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_ENTRIES', '総エントリ数');
@define('PLUGIN_EVENT_STATISTICS_OUT_ENTRIES', 'エントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_PUBLIC', ' ... 公開');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOTAL_DRAFTS', ' ... 草稿');
@define('PLUGIN_EVENT_STATISTICS_OUT_PER_AUTHOR', 'ユーザー毎のエントリ数');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES', '総カテゴリ数');
@define('PLUGIN_EVENT_STATISTICS_OUT_CATEGORIES2', 'カテゴリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES', 'エントリの配分');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_CATEGORIES2', 'エントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES', 'アップロード済総画像数');
@define('PLUGIN_EVENT_STATISTICS_OUT_UPLOADED_IMAGES2', '画像');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES', '種類別画像の配分');
@define('PLUGIN_EVENT_STATISTICS_OUT_DISTRIBUTION_IMAGES2', 'ファイル');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS', '受信した総コメント数');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS2', 'コメント');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS3', '最も頻繁にコメントされたエントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPCOMMENTS', '最も頻繁にコメントした人');
@define('PLUGIN_EVENT_STATISTICS_OUT_LINK', 'リンク');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS', '総購読数');
@define('PLUGIN_EVENT_STATISTICS_OUT_SUBSCRIBERS2', '購読');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS', '最も頻繁に購読されたエントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPSUBSCRIBERS2', '購読');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS', '受信した総トラックバック数');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS2', 'トラックバック');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK', '最も頻繁にトラックバックされたエントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACK2', 'トラックバック');
@define('PLUGIN_EVENT_STATISTICS_OUT_TOPTRACKBACKS3', '最も頻繁にトラックバックした人');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE', 'エントリ毎の評価されたコメント数');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE', 'エントリ毎の評価されたトラックバック数');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY', '一日当たりの評価されたエントリ数');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK', '一週間当たりの評価されたエントリ数');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH', '一ヶ月当たりの評価されたエントリ数');
@define('PLUGIN_EVENT_STATISTICS_OUT_COMMENTS_PER_ARTICLE2', 'コメント/エントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_TRACKBACKS_PER_ARTICLE2', 'トラックバック/エントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_DAY2', 'エントリ/日');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_WEEK2', 'エントリ/週');
@define('PLUGIN_EVENT_STATISTICS_OUT_ARTICLES_PER_MONTH2', 'エントリ/月');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS', '文字の合計');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS2', '文字');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE', 'エントリ当たりの文字数');
@define('PLUGIN_EVENT_STATISTICS_OUT_CHARS_PER_ARTICLE2', '文字/エントリ');
@define('PLUGIN_EVENT_STATISTICS_OUT_LONGEST_ARTICLES', '最長エントリトップ %s');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS', '最大項目数');
@define('PLUGIN_EVENT_STATISTICS_MAX_ITEMS_DESC', '統計値当たりに表示する項目数 (デフォルト: 20)');

//Language constants for the Extended Visitors feature
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD', '訪問者の拡張統計');
@define('PLUGIN_EVENT_STATISTICS_EXT_ADD_DESC', '拡張された訪問者統計機能を追加しますか? (デフォルト: いいえ)');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT1', 'いいえ!');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT2', 'はい、ページの下に');
@define('PLUGIN_EVENT_STATISTICS_EXT_OPT3', 'はい、ページの上に');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL', '訪問者統計のみを表示するには「いいえ」で設定します');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL_DESC', 'すべて表示しますか? (デフォルト: いいえ)');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL1', 'いいえ、カウンター以外を隠します。');
@define('PLUGIN_EVENT_STATISTICS_EXT_ALL2', 'はい、すべての統計を表示します!');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISITORS', 'Individual counters');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTODAY', '本日の訪問者数');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISTOTAL', '今までの訪問者数');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTODAY', '本日のヒット数');
@define('PLUGIN_EVENT_STATISTICS_EXT_HITSTOTAL', '今までのヒット数');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISSINCE', '訪問者の拡張統計の機能は次の日以降のデータを収集しました: ');
@define('PLUGIN_EVENT_STATISTICS_EXT_COUNTDESC','The hits can go quite high and are purely for indication of pageviews. ヒット数はすべてのページビューか、再描画で更新されます。この数は実際の訪問者数ではありません。');
@define('PLUGIN_EVENT_STATISTICS_EXT_VISLATEST', '最新の訪問者');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS', 'トップリファラー');
@define('PLUGIN_EVENT_STATISTICS_EXT_TOPREFS_NONE', 'まだリファラーは記録されていません。');
@define('PLUGIN_EVENT_STATISTICS_EXT_DAYGRAPH', '1 日毎の訪問数');
@define('PLUGIN_EVENT_STATISTICS_EXT_MONTHGRAPH', '1 月毎の訪問数');
@define('PLUGIN_EVENT_STATISTICS_OUT_EXT_STATISTICS', '拡張訪問者統計');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS1', '有効にし、ボットをカウントしない');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS2', '無効にし、ボットをカウントする');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'ロボットのカウント保護');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', '「はい」に設定すると、ロボットをカウントしません。「いいえ」に設定すると、ロボットをカウントします。現在 25 を超えるロボットを禁止します。');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS', 'カウントを禁止するブラウザー');
@define('PLUGIN_EVENT_STATISTICS_BANNED_HOSTS_DESC', '「|」で区切ったカウントから除外されるべきブラウザーを指定します。現在 25 を超えるボットを禁止しています。');

@define('PLUGIN_EVENT_STATISTICS_SHOW_LASTENTRY', '最後のエントリの日付を表示する');
@define('PLUGIN_EVENT_STATISTICS_SHOW_ENTRYCOUNT', 'エントリの数を表示する');
@define('PLUGIN_EVENT_STATISTICS_SHOW_COMMENTCOUNT', 'コメントの数を表示する');
@define('PLUGIN_EVENT_STATISTICS_SHOW_MONTHVISITORS', '今月の訪問数を表示する');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT', 'キャッシュのタイムアウト');
@define('PLUGIN_EVENT_STATISTICS_SHOW_CACHETIMEOUT_DESC', 'How long may the statistics be shown before they get refreshed? Setting this to a high number of minutes will improve performance, but might not reflect the actual data if set too high.');
@define('PLUGIN_EVENT_STATISTICS_TEXT', '書式テキスト');
@define('PLUGIN_EVENT_STATISTICS_TEXT_DESC', '数値・テキストのプレースフォルダーとして「%s」を使う');
@define('PLUGIN_EVENT_STATISTICS_TEXT_LASTENTRY', '最後のエントリ: %s');
@define('PLUGIN_EVENT_STATISTICS_TEXT_ENTRYCOUNT', '%s 個eのエントリが書かれた');
@define('PLUGIN_EVENT_STATISTICS_TEXT_COMMENTCOUNT', '%s 個のコメントが作られた');
@define('PLUGIN_EVENT_STATISTICS_TEXT_MONTHVISITORS', '今月は %s 人の訪問があった');

@define('PLUGIN_EVENT_STATISTICS_SHOW_CURRENTVISITORS', '現在の訪問者の数を表示する (過去 15 分の合計)');
@define('PLUGIN_EVENT_STATISTICS_TEXT_CURRENTVISITORS', '%s 人の訪問者がオンラインです');

