<?php # $Id: lang_ja.inc.php 1712 2007-06-06 04:23:06Z elf2000 $

/**
 *  @version $Revision: 1712 $
 *  @author Tadashi Jokagi <elf2000@users.sourceforge.net>
 *  EN-Revision: 1501
 */

@define('PLUGIN_EVENT_NL2BR_NAME',     'マークアップ: NL2BR');
@define('PLUGIN_EVENT_NL2BR_DESC',     '改行を BR タグに変換します。');

@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS', '改行を変換しない HTML タグの一覧');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', '提案: "code,pre,geshi,textarea". 複数のタグをカンマ(「,」)で分けます。ヒント: 入力されたタグは正規表現として評価されます。');
?>
