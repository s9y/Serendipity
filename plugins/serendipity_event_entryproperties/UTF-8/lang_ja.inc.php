<?php # 

/**
 *  @version 
 *  @author Tadashi Jokagi <elf2000@users.sourceforge.net>
 *  EN-Revision: 966
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'エントリの拡張プロパティ');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(キャッシュ、非公開記事、スティッキ投稿)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'スティッキ投稿としてこのエントリをマークする');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'エントリを読むことが出来る人');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', '自分自身');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', '共同執筆者');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'すべて');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'エントリのキャッシュを許可しますか?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'もし有効にすると、保存時にキャッシュされたバージョンを常に保存します。キャッシングはパフォーマンスを向上させるでしょうが、恐らく、他のプラグインのの柔軟性を減らすでしょう');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'キャッシュ済エントリの構築');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'エントリの次のバッチ取得中...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', '%d から %d のエントリを取得中');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'エントリ番号 #%d: 「<em>%s</em>」のキャッシュを構築中...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'エントリをキャッシュしました。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'エントリのキャッシュを完了しました。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'エントリのキャッシュ作成を中断しました。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (合計 %d エントリ)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', '記事の概要/フロントページから隠す');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'グループに基づいた制限を使用する');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', '有効な場合、ユーザーグループのどのユーザーがエントリを読むことができるか、定義することができます。このオプションはあなたの記事概観の動作に大きい影響を及ぼします。実際にこの機能を使用する場合、これを単に有効にしてください。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'ユーザーに基づいた制限を使用する');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', '有効な場合、どのユーザーがエントリを読むことができるか、定義することができます。このオプションはあなたの記事概観の動作に大きい影響を及ぼします。実際にこの機能を使用する場合、これを単に有効にしてください。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'RSS の内容を隠す');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', '有効の場合、このエントリの内容は RSS フィード内で表示されないでしょう。');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'カスタムフィールド');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Additional custom fields can be used in your template at places where you want them to show up. For that, edit your entries.tpl template file and place Smarty tags like {$entry.properties.ep_MyCustomField} in the HTML where you like. 各項目の接頭語 ep_ に注意してください。');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'ここで、各エントリへの入力に使用できる、コンマで分割された項目名の一覧を入力することができます - 特殊文字またはスペースをそれらのフィールド名に使用しません。 例: "Customfield1, Customfield2". ' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', '
利用できるカスタム項目の一覧は、<a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">プラグイン設定</a> で変更することができます。');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP', 'このエントリのマークアッププラグインを無効にする:');

