<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_KARMA_NAME', 'Karma');
@define('PLUGIN_KARMA_BLAHBLAH', 'Let visitors rate the quality of your entries');
@define('PLUGIN_KARMA_VOTETEXT', 'Karma for this article: ');
@define('PLUGIN_KARMA_RATE', 'Rate this article: %s');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'Very good!');
@define('PLUGIN_KARMA_VOTEPOINT_2', 'Good');
@define('PLUGIN_KARMA_VOTEPOINT_3', 'Neutral');
@define('PLUGIN_KARMA_VOTEPOINT_4', 'Not interesting');
@define('PLUGIN_KARMA_VOTEPOINT_5', 'Bad');
@define('PLUGIN_KARMA_VOTED', 'Your rating "%s" was stored.');
@define('PLUGIN_KARMA_INVALID', 'Your voting was invalid.');
@define('PLUGIN_KARMA_ALREADYVOTED', 'Your rating was already stored.');
@define('PLUGIN_KARMA_NOCOOKIE', 'Your browser must support cookies to be able to vote.');
@define('PLUGIN_KARMA_CLOSED', 'Vote for articles fresher than %s days!');
@define('PLUGIN_KARMA_ENTRYTIME', 'Voting time after publishing');
@define('PLUGIN_KARMA_VOTINGTIME', 'Voting time');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'How long (in minutes) after your article has been published an unrestricted voting is allowed? Default: 1440 (one day)');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Amount of time (in minutes) that needs to be passed from one vote to the other. Is only applied after the time above is expired. Default: 5');
@define('PLUGIN_KARMA_TIMEOUT', 'Flood protection: Another visitor has just recently voted. Please wait %s minutes.');
@define('PLUGIN_KARMA_CURRENT', 'Current karma: %2$s, %3$s vote(s)');
@define('PLUGIN_KARMA_EXTENDEDONLY', 'Only extended article');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Only show karmavoting on extended article view');
@define('PLUGIN_KARMA_MAXKARMA', 'Karmavoting period');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Only allow karmavoting until the article is X days old (Default: 7)');
@define('PLUGIN_KARMA_LOGGING', 'Log votes?');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Should karma votes be logged?');
@define('PLUGIN_KARMA_ACTIVE', 'Enable karma voting?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'Is karma voting turned on?');
@define('PLUGIN_KARMA_VISITS', 'Enable visit tracking?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH', 'Should every click to an extended article be counted and displayed?');
@define('PLUGIN_KARMA_VISITSCOUNT', ' %4$s hits');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'Top visited articles');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Worst visited articles');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Top karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Least karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Best karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Worst karma-voted articles');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO', 'visits');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO', 'votes');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'points');

@define('PLUGIN_KARMA_STARRATING', 'Enable individual rating on this entry?');
?>
