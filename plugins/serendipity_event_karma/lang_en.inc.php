<?php # $Id: lang_en.inc.php 2738 2011-03-09 11:11:14Z garvinhicking $

/**
 *  @version $Revision: 2738 $
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_KARMA_NAME', 'Karma');
@define('PLUGIN_KARMA_BLAHBLAH', 'Let visitors rate your entries');
@define('PLUGIN_KARMA_VOTETEXT', 'Karma for this article: ');
@define('PLUGIN_KARMA_VOTETEXT_NAME', 'Rating Request Message');
@define('PLUGIN_KARMA_VOTETEXT_NAME_BLAHBLAH', 'The text to use when displaying a bar for voting.  (Default: \'' . PLUGIN_KARMA_VOTETEXT . '\')');
@define('PLUGIN_KARMA_RATE', 'Rate this article: %s');
@define('PLUGIN_KARMA_VOTEPOINT_5', 'Excellent!');
@define('PLUGIN_KARMA_VOTEPOINT_5_NAME', 'Best Rating Description');
@define('PLUGIN_KARMA_VOTEPOINT_5_BLAHBLAH', 'The text to use for tooltips when considering the best possible rating. (Default: \'' . PLUGIN_KARMA_VOTEPOINT_5 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_4', 'Good');
@define('PLUGIN_KARMA_VOTEPOINT_4_NAME', 'Good Rating Description');
@define('PLUGIN_KARMA_VOTEPOINT_4_BLAHBLAH', 'The text to use for tooltips when considering the good rating. (Default: ' . PLUGIN_KARMA_VOTEPOINT_4 . ')');
@define('PLUGIN_KARMA_VOTEPOINT_3', 'Okay');
@define('PLUGIN_KARMA_VOTEPOINT_3_NAME', 'Neutral Rating Description');
@define('PLUGIN_KARMA_VOTEPOINT_3_BLAHBLAH', 'The text to use for tooltips when considering the neutral rating. (Default: ' . PLUGIN_KARMA_VOTEPOINT_3 . ')');
@define('PLUGIN_KARMA_VOTEPOINT_2', 'Bad');
@define('PLUGIN_KARMA_VOTEPOINT_2_NAME', 'Poor Rating Description');
@define('PLUGIN_KARMA_VOTEPOINT_2_BLAHBLAH', 'The text to use for tooltips when considering the poor rating. (Default: ' . PLUGIN_KARMA_VOTEPOINT_2 . ')');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'Terrible!');
@define('PLUGIN_KARMA_VOTEPOINT_1_NAME', 'Worst Rating Description');
@define('PLUGIN_KARMA_VOTEPOINT_1_BLAHBLAH', 'The text to use for tooltips when considering the worst possible rating. (Default: ' . PLUGIN_KARMA_VOTEPOINT_1 . ')');
@define('PLUGIN_KARMA_VOTETEXT_5', '+2');
@define('PLUGIN_KARMA_VOTETEXT_5_NAME', 'Best Rating Display');
@define('PLUGIN_KARMA_VOTETEXT_5_BLAHBLAH', 'The text to display in the text rating bar for the best possible rating. (Default: ' . PLUGIN_KARMA_VOTETEXT_5 . ')');
@define('PLUGIN_KARMA_VOTETEXT_4', '+1');
@define('PLUGIN_KARMA_VOTETEXT_4_NAME', 'Good Rating Display');
@define('PLUGIN_KARMA_VOTETEXT_4_BLAHBLAH', 'The text to display in the text rating bar for the good rating. (Default: ' . PLUGIN_KARMA_VOTETEXT_4 . ')');
@define('PLUGIN_KARMA_VOTETEXT_3', '0');
@define('PLUGIN_KARMA_VOTETEXT_3_NAME', 'Neutral Rating Display');
@define('PLUGIN_KARMA_VOTETEXT_3_BLAHBLAH', 'The text to display in the text rating bar for the neutral rating. (Default: ' . PLUGIN_KARMA_VOTETEXT_3 . ')');
@define('PLUGIN_KARMA_VOTETEXT_2', '-1');
@define('PLUGIN_KARMA_VOTETEXT_2_NAME', 'Poor Rating Display');
@define('PLUGIN_KARMA_VOTETEXT_2_BLAHBLAH', 'The text to display in the text rating bar for the poor rating. (Default: ' . PLUGIN_KARMA_VOTETEXT_2 . ')');
@define('PLUGIN_KARMA_VOTETEXT_1', '-2');
@define('PLUGIN_KARMA_VOTETEXT_1_NAME', 'Worst Rating Display');
@define('PLUGIN_KARMA_VOTETEXT_1_BLAHBLAH', 'The text to display in the text rating bar for the worst possible rating. (Default: ' . PLUGIN_KARMA_VOTETEXT_1 . ')');
@define('PLUGIN_KARMA_VOTED', 'Your rating "%s" was stored.');
@define('PLUGIN_KARMA_VOTES', '%3$s Vote(s)');
@define('PLUGIN_KARMA_INVALID', 'Your voting was invalid.');
@define('PLUGIN_KARMA_ALREADYVOTED', 'Your rating was already stored.');
@define('PLUGIN_KARMA_NOCOOKIE', 'Your browser must support cookies to be able to vote.');
@define('PLUGIN_KARMA_CLOSED', 'Vote for articles fresher than %s days!');
@define('PLUGIN_KARMA_ENTRYTIME', 'Grace Period');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'How long (in minutes) after your article has been published will unrestricted voting (no minimum voting interval) be allowed? Default: 1440 (one day)');
@define('PLUGIN_KARMA_VOTINGTIME', 'Minimum voting interval');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Amount of time (in minutes) that needs to be passed between votes. Use 0 to allow unrestricted voting forever. (Default: 5)');
@define('PLUGIN_KARMA_TIMEOUT', 'Flood protection: Another visitor has just recently voted. Please wait %s minutes.');
@define('PLUGIN_KARMA_CURRENT', 'Current karma: %2$s, %3$s vote(s)');
@define('PLUGIN_KARMA_CURRENT_NAME', 'Current Rating Message');
@define('PLUGIN_KARMA_CURRENT_NAME_BLAHBLAH', 'The text to use when displaying the current rating (%2$s is the numerical rating; %3$s is the number of votes) (Default: ' . PLUGIN_KARMA_CURRENT . ')');
@define('PLUGIN_KARMA_EXTENDEDONLY', 'Only extended article');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Only show karmavoting on extended article view?');
@define('PLUGIN_KARMA_MAXKARMA', 'Karmavoting period');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Forbid voting on articles older than X days; 0 allows voting on all articles. (Default: 7)');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES', 'Minimum Votes to Display');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES_BLAHBLAH', 'Supress current rating and vote count until this number of votes have been cast.  Use 0 to display vote count regardless of how many have been cast.');
@define('PLUGIN_KARMA_LOGGING', 'Log votes');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Will karma votes be logged?');
@define('PLUGIN_KARMA_ACTIVE', 'Enable karma voting');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'Is karma voting turned on?');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT', 'Voting Bar Alignment');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT_BLAHBLAH', 'Alignment of voting bar in the entry footer.  Templates can override this setting with !important (Default: right)');
//--JAM: @define('PLUGIN_KARMA_ALIGNMENT_DETECT', 'from style');
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
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'text only');

@define('PLUGIN_KARMA_STARRATING', 'Enable individual rating on this entry?');

@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS', 'Track visits of logged in users?');
@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH', 'If this option is enabled, page visits of users who are logged in are tracked, too.');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS', 'Minimum Visits to Display');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS_BLAHBLAH', 'Supress visit display until this number of visits have been recorded.  Use 0 to display visit count regardless of how many visits have been recorded.');
@define('PLUGIN_KARMA_WORDRATING', 'Display Ratings as Text Words?');
@define('PLUGIN_KARMA_WORDRATING_BLAHBLAH', 'Display ratings as text words or as numbers? (Default: no; use numerical ratings)');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE', 'Display Rating Message?');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE_BLAHBLAH', 'Include a textual rating request or status before graphic bars? (No effect on text bars) (Default: yes)');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR', 'Display Current Rating Text?');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR_BLAHBLAH', 'Include textual current rating information after graphic bars?  (No effect on text bars) (Default: yes)');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS', 'Display Visits Text?');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS_BLAHBLAH', 'Include textual visit count after graphic bars?  (No effect on text bars) (Default: yes)');
@define('PLUGIN_KARMA_PREVIEW_BG', 'Background for preview table, below');
@define('PLUGIN_KARMA_PREVIEW_BG_BLAHBLAH', 'Any CSS value is acceptable; it will be used as the \'background\' attribute for the preview table on the admin page ONLY.  No effect on actual rating bars.');
@define('PLUGIN_KARMA_IMAGE', 'Voting Bar Type');
@define('PLUGIN_KARMA_IMAGE_DESC', 'Choose image file (e.g. diamonds.png) for image based voting. Choose \'' . PLUGIN_KARMA_STATISTICS_POINTS_NO . '\' for text based voting.');
@define('PLUGIN_KARMA_NO_IMAGES', 'There were no images in the plugin img/ directory!');
@define('PLUGIN_KARMA_IMAGE_RATING', '%1.2f of 5');
@define('PLUGIN_KARMA_IMAGE_INT_RATING', '%d of 5');
@define('PLUGIN_KARMA_IMAGE_NONE_RATING', 'none');
@define('PLUGIN_KARMA_TAB_OPTIONS', 'Options');
@define('PLUGIN_KARMA_TAB_APPEARANCE', 'Appearance');
@define('PLUGIN_KARMA_TAB_TEXT', 'Text');
@define('PLUGIN_KARMA_DISPLAY_LOG', 'Manage Karma');
@define('PLUGIN_KARMA_REMOVED_POINTS', 'Removed vote of %s points for entry %s');
@define('PLUGIN_KARMA_APPROVED_POINTS', 'Approved vote of %s points for entry %s');
@define('PLUGIN_KARMA_POINTS_ERROR', 'Error updating points for entry %s!');
@define('PLUGIN_KARMA_REMOVE_ERROR', 'Error removing vote for entry %s! (Points have been updated, though.)');
@define('PLUGIN_KARMA_UPDATE_ERROR', 'No votes yet for entry %s!');
@define('PLUGIN_KARMA_INVALID_INPUT', 'Invalid input!');
@define('PLUGIN_KARMA_DELETE_VOTES', 'Delete selected votes');
@define('PLUGIN_KARMA_APPROVE_VOTES', 'Approve selected votes');
@define('PLUGIN_KARMA_ACTIVE_REGISTERED', 'Only logged-in authors can vote');

//New on ajax feature
@define('PLUGIN_KARMA_AJAX', 'AJAX funcionality');
@define('PLUGIN_KARMA_AJAX_BLAHBLAH', 'Shall rating be performed by asynchronous javascript? If set to "yes", your rating will be send to the server in the background and the result will be displayed without refreshing the website.');
@define('PLUGIN_KARMA_ALIGNMENT', 'Alignmnet of the plugin');
@define('PLUGIN_KARMA_ALIGNMENT_BLAHBLAH', 'Shall the plugin be displayed left, center or right');