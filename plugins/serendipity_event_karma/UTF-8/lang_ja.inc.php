<?php # $Id: lang_ja.inc.php 2110 2008-02-11 02:12:07Z slothman $

/**
 *  @version $Revision: 2110 $
 *  @author Tadashi Jokagi <elf2000@users.sourceforge.net>
 *  EN-Revision: 690
 */

@define('PLUGIN_KARMA_NAME', '評価');
@define('PLUGIN_KARMA_BLAHBLAH', '訪問者にあなたのエントリの品質を評価させます。');
@define('PLUGIN_KARMA_VOTETEXT', 'この記事の評価: ');
@define('PLUGIN_KARMA_RATE', 'この記事の評価: %s');
@define('PLUGIN_KARMA_VOTEPOINT_5', 'とても素晴らしい!');
@define('PLUGIN_KARMA_VOTEPOINT_4', '素晴らしい');
@define('PLUGIN_KARMA_VOTEPOINT_3', '普通');
@define('PLUGIN_KARMA_VOTEPOINT_2', '面白くない');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'よくない');
@define('PLUGIN_KARMA_VOTED', 'あなたの評価 "%s" は保管されました。');
@define('PLUGIN_KARMA_INVALID', 'あなたの投票は無効でした。');
@define('PLUGIN_KARMA_ALREADYVOTED', 'あなたは既に評価が保管されていました。');
@define('PLUGIN_KARMA_NOCOOKIE', 'ブラウザーは投票するためには Cookie をサポートしなければなりません。');
@define('PLUGIN_KARMA_CLOSED', '%s 日以内の経過新しい記事での投票です!');
@define('PLUGIN_KARMA_ENTRYTIME', '公開後の投票時間');
@define('PLUGIN_KARMA_VOTINGTIME', '投票時間');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'How long (in minutes) after your article has been published an unrestricted voting is allowed? デフォルト: 1440 (1 日)');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Amount of time (in minutes) that needs to be passed from one vote to the other. Is only applied after the time above is expired. デフォルト: 5');
@define('PLUGIN_KARMA_TIMEOUT', '溢れ防止: 別の訪問者が最近投票しました。%s 分待ってください。');
@define('PLUGIN_KARMA_CURRENT', '現在の評価: %2$s / %3$s 回の投票 /');
@define('PLUGIN_KARMA_EXTENDEDONLY', '拡張された記事のみ');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', '拡張された記事の閲覧でのみ投票を表示します。');
@define('PLUGIN_KARMA_MAXKARMA', '投票期間');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Only allow karmavoting until the article is X days old (Default: 7)');
@define('PLUGIN_KARMA_LOGGING', '投票のログを記録しますか?');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', '投票は記録するべきですか?');
@define('PLUGIN_KARMA_ACTIVE', '評価の投票を有効にしますか?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', '評価を投票する機能を有効にしますか?');
@define('PLUGIN_KARMA_VISITS', '訪問者追跡を有効にしますか?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH', 'Should every click to an extended article be counted and displayed?');
@define('PLUGIN_KARMA_VISITSCOUNT', ' %4$s 回のヒット');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'トップ訪問者の記事');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Worst visited articles');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Top karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Least karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Best karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Worst karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO', '訪問者');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO', '回の投票');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'ポイント');

?>
