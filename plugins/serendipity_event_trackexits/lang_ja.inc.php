<?php # $Id$

/**
 *  @version $Revision$
 *  @author Tadashi Jokagi <elf2000@users.sourceforge.net>
 *  EN-Revision: 690
 */

@define('PLUGIN_EVENT_TRACKBACK_NAME', 'マークアップ: 退出追跡');
@define('PLUGIN_EVENT_TRACKBACK_DESC', '外部 URL のクリックを追跡します。');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION', 'URL の URL リダイレクトをコメントユーザーが使用する?');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_BLAHBLA', 'コメント乱用を弱めるだけでなく、コメントするユーザーの URL にリンクへの積極的な効果に障害がでます。Serendipity の内部ルーチンは、ターゲットページに転送し、ログに記録するでしょう。Google PageRank デフレクタは、リンクが google のランクを獲得するのを防ぐでしょう。空の値はこの機能を完全に無力します (デフォルト)');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_NONE', 'なし');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_S9Y', 'Serendipity 退出追跡ルーチン');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_GOOGLE', 'Google PageRank デフレクタ');

?>
