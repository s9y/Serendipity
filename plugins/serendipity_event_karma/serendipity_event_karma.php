<?php # $Id$


if (IN_serendipity !== true) {
    die ("Don't hack!");
}

// Probe for a language include with constants. Still include defines later on, if some constants were missing
$probelang = dirname(__FILE__) . '/' . $serendipity['charset'] . 'lang_' . $serendipity['lang'] . '.inc.php';
if (file_exists($probelang)) {
    include $probelang;
}

include dirname(__FILE__) . '/lang_en.inc.php';

@define('PLUGIN_KARMA_VERSION', '2.0');

class serendipity_event_karma extends serendipity_event
{
    /** @var string Status of current voting action */
    var $karmaVote    = '';
    /** @var int ID of entry to vote on */
    var $karmaId      = '';
    /** @var int Minutes until voting will be enabled, if a timeout is in effect */
    var $karmaTimeOut = '';
    /** @var int Points for this entry: current vote until voting is recorded,
     *  total points after voting is recorded 
     */
    var $karmaVoting  = '';

    /** @var string The name of the image to be used in graphic rating bars */
    var $image_name = 'stars-def-yellow-green-md.png';
    /** @var int The width of the rating bar image */
    var $image_width = '';
    /** @var int The height of the rating bar image */
    var $image_height = '';

    /** @var string The HTML to be used in backend preview */
    var $select_html = '';
    /** @var string The CSS to be added for backend preview */
    var $select_css = '';

    /** @var string Title if included as sidebar content */
    var $title        = PLUGIN_KARMA_NAME;

    /* The max width/height ratio of a single-segment image */
    var $max_segment_ratio = 1.0;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_KARMA_NAME);
        $propbag->add('description',   PLUGIN_KARMA_BLAHBLAH);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking, Grischa Brockhaus, Gregor Völtz, Judebert');
        $propbag->add('version',       '2.0');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('event_hooks',   array(
            'frontend_configure'          => true, 
            'entry_display'               => true, 
            'css'                         => true, 
            'backend_header'              => true, 
            'event_additional_statistics' => true
            ));
        $propbag->add('groups', array('STATISTICS'));
        $propbag->add('configuration', array(
            // Functionality options
            'options_tab',
            'karma_active', 
            'extended_only', 
            'max_karmatime', 
            'max_votetime', 
            'max_entrytime', 
            'min_disp_votes',
            'visits_active', 
            'track_visits_of_loggedin_users', 
            'min_disp_visits',
            'exits_active', 
            'logging', 
            // Appearance options
            'appearance_tab',
            //--JAM:'alignment',
            'rate_with_words',
            'textual_msg',
            'textual_current',
            'textual_visits',
            'preview_bg',
            'base_image',
            // Text/Language optins
            'text_tab',
            'rate_msg',
            'curr_msg',
            'rate_best',
            'rate_good',
            'rate_okay',
            'rate_poor',
            'rate_vile',
            'text_best',
            'text_good',
            'text_okay',
            'text_poor',
            'text_vile',
            // Close divs
            'end_tabs',
            ));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            // Top of tab bar
            case 'options_tab':
                $propbag->add('type', 'content');
                $propbag->add('default', '
<span class="serendipity_karmaVoting_tabbar">
<a class="serendipity_karmaVoting_optionstab_link" href="#karmaVoting_options">' . PLUGIN_KARMA_TAB_OPTIONS . '</a> | 
<a class="serendipity_karmaVoting_appearancetab_link" href="#karmaVoting_appearance">' . PLUGIN_KARMA_TAB_APPEARANCE . '</a> |
<a class="serendipity_karmaVoting_texttab_link" href="#karmaVoting_text">' . PLUGIN_KARMA_TAB_TEXT . '</a>
</span>
<div class="serendipity_karmaVoting_optionstab" style="text-align: center;"><a name="karmaVoting_options"></a>
<span style="font-size: 10pt; font-weight: bold;">' . PLUGIN_KARMA_TAB_OPTIONS . '<hr style="width: 80%" />
');
                break;
            case 'appearance_tab':
                $propbag->add('type', 'content');
                $propbag->add('default', '
    <input class="serendipityPrettyButton input_button" type="submit" value="Save" name="SAVECONF" />
</div>
<div class="serendipity_karmaVoting_appearancetab" style="text-align: center;"><a name="karmaVoting_appearance"></a>
<span style="font-size: 10pt; font-weight: bold;">' . PLUGIN_KARMA_TAB_APPEARANCE . '<hr style="width: 80%" />
');
                break;
            case 'text_tab':
                $propbag->add('type', 'content');
                $propbag->add('default', '
    <input class="serendipityPrettyButton input_button" type="submit" value="Save" name="SAVECONF" />
</div>
<div class="serendipity_karmaVoting_texttab" style="text-align: center;"><a name="karmaVoting_text"></a> 
<span style="font-size: 10pt; font-weight: bold;">' . PLUGIN_KARMA_TAB_TEXT . '<hr style="width: 80%" />
');
                break;
            case 'end_tabs':
                $propbag->add('type', 'content');
                $propbag->add('default', '
</div>
');
                break;
            // Oldest entry age still valid for unrestricted voting
            case 'max_entrytime':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_ENTRYTIME);
                $propbag->add('description', PLUGIN_KARMA_ENTRYTIME_BLAHBLAH);
                $propbag->add('default', 1440);
                break;

            // Min time between votes
            case 'max_votetime':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTINGTIME);
                $propbag->add('description', PLUGIN_KARMA_VOTINGTIME_BLAHBLAH);
                $propbag->add('default', 5);
                break;

            // Oldest entry age still valid for karma voting (normal, restricted voting)
            case 'max_karmatime':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_MAXKARMA);
                $propbag->add('description', PLUGIN_KARMA_MAXKARMA_BLAHBLAH);
                $propbag->add('default', 7);
                break;

            // Is karma voting allowed?
            case 'karma_active':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_ACTIVE);
                $propbag->add('description', PLUGIN_KARMA_ACTIVE_BLAHBLAH);
                $propbag->add('default', 'true');
                break;

            // Min votes to display
            case 'min_disp_votes':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES);
                $propbag->add('description', PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES_BLAHBLAH);
                $propbag->add('default', '0');
                break;
                
            // Is extended article visit tracking allowed?
            case 'visits_active':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_VISITS);
                $propbag->add('description', PLUGIN_KARMA_VISITS_BLAHBLAH);
                $propbag->add('default', 'true');
                break;

            // Keep or ignore visits for logged in users (like admins/authors)?
            case 'track_visits_of_loggedin_users':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_VISITS_LOGGEDIN_USERS);
                $propbag->add('description', PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH);
                $propbag->add('default', 'true');
                break;

            // Min visits to display
            case 'min_disp_visits':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS);
                $propbag->add('description', PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS_BLAHBLAH);
                $propbag->add('default', '0');
                break;

            // Are we tracking exits?  
            case 'exits_active':
                $propbag->add('type', 'boolean');
                $propbag->add('name', SHOWS_TOP_EXIT);
                $propbag->add('description', '');
                $propbag->add('default', 'false');
                break;

            // Show karma voting on article summary, or only extended page?
            case 'extended_only':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_EXTENDEDONLY);
                $propbag->add('description', PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH);
                $propbag->add('default', 'false');
                break;

            // Log karma votes?
            case 'logging':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_LOGGING);
                $propbag->add('description', PLUGIN_KARMA_LOGGING_BLAHBLAH);
                $propbag->add('default', 'false');
                break;

            /*--JAM:
            // Alignment to use for rating bars
            case 'alignment':
                $select = array(
                            //--JAM: 'detect' => PLUGIN_KARMA_ALIGNMENT_DETECT,
                            'left' => LEFT,
                            'center' => CENTER,
                            'right' => RIGHT);
                $propbag->add('type', 'select');
                $propbag->add('name', PLUGIN_KARMA_ALIGNMENT);
                $propbag->add('description', PLUGIN_KARMA_ALIGNMENT_BLAHBLAH);
                $propbag->add('select_values', $select);
                $propbag->add('default', 'right');
                break;
             */
            // Use words for ratings?
            case 'rate_with_words':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_WORDRATING);
                $propbag->add('description', PLUGIN_KARMA_WORDRATING_BLAHBLAH);
                $propbag->add('default', 'false');
                break;
            case 'textual_msg':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_IMAGE_WITH_MESSAGE);
                $propbag->add('description', PLUGIN_KARMA_IMAGE_WITH_MESSAGE_BLAHBLAH);
                $propbag->add('default', 'true');
                break;
            case 'textual_current':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_IMAGE_WITH_CURR);
                $propbag->add('description', PLUGIN_KARMA_IMAGE_WITH_CURR_BLAHBLAH);
                $propbag->add('default', 'true');
                break;
            case 'textual_visits':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_KARMA_IMAGE_WITH_VISITS);
                $propbag->add('description', PLUGIN_KARMA_IMAGE_WITH_VISITS_BLAHBLAH);
                $propbag->add('default', 'true');
                break;
            // Background of admin preview table
            case 'preview_bg':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_PREVIEW_BG);
                $propbag->add('description', PLUGIN_KARMA_PREVIEW_BG_BLAHBLAH);
                $propbag->add('default', '');
                break;
            // Image to use for graphical rating bar
            case 'base_image':
                $propbag->add('type', 'content');
                $propbag->add('default', $this->createRatingSelector());
                break;
            case 'rate_msg':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTETEXT_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTETEXT_NAME_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTETEXT);
                break;
            case 'curr_msg':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_CURRENT_NAME);
                $propbag->add('description', PLUGIN_KARMA_CURRENT_NAME_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_CURRENT);
                break;
            case 'rate_best':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTEPOINT_5_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTEPOINT_5_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTEPOINT_5);
                break;
            case 'rate_good':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTEPOINT_4_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTEPOINT_4_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTEPOINT_4);
                break;
            case 'rate_okay':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTEPOINT_3_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTEPOINT_3_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTEPOINT_3);
                break;
            case 'rate_poor':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTEPOINT_2_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTEPOINT_2_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTEPOINT_2);
                break;
            case 'rate_vile':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTEPOINT_1_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTEPOINT_1_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTEPOINT_1);
                break;
            case 'text_best':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTETEXT_5_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTETEXT_5_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTETEXT_5);
                break;
            case 'text_good':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTETEXT_4_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTETEXT_4_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTETEXT_4);
                break;
            case 'text_okay':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTETEXT_3_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTETEXT_3_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTETEXT_3);
                break;
            case 'text_poor':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTETEXT_2_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTETEXT_2_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTETEXT_2);
                break;
            case 'text_vile':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_KARMA_VOTETEXT_1_NAME);
                $propbag->add('description', PLUGIN_KARMA_VOTETEXT_1_BLAHBLAH);
                $propbag->add('default', PLUGIN_KARMA_VOTETEXT_1);
                break;

            default:
                    return false;
        }
        return true;
    }

    /**
     * Updates database schema when upgrading from older versions.
     */
    function checkScheme() {
        global $serendipity;

        $version = $this->get_config('version', '0.9'); 

        if ($version == '1.1') {
            $q   = "ALTER TABLE {$serendipity['dbPrefix']}karma ADD visits INT(11) default 0";
            $sql = serendipity_db_schema_import($q);
            $this->set_config('version', PLUGIN_KARMA_VERSION);
        } elseif ($version == '1.0') {
            $q   = "ALTER TABLE {$serendipity['dbPrefix']}karma ADD visits INT(11) default 0";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE TABLE {$serendipity['dbPrefix']}karmalog (
                        entryid int(11) default null,
                        points int(4) default null,
                        ip varchar(15),
                        user_agent varchar(255),
                        votetime int(11) default null
                    )";
            $sql = serendipity_db_schema_import($q);
            $this->set_config('version', PLUGIN_KARMA_VERSION);
        } elseif ($version != PLUGIN_KARMA_VERSION) {
            $q   = "CREATE TABLE {$serendipity['dbPrefix']}karma (
                        entryid int(11) default null,
                        points int(4) default null,
                        votes int(4) default null,
                        lastvote int(10) {UNSIGNED} NULL,
                        visits int(11) default null
                    )";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE TABLE {$serendipity['dbPrefix']}karmalog (
                        entryid int(11) default null,
                        points int(4) default null,
                        ip varchar(15),
                        user_agent varchar(255),
                        votetime int(11) default null
                    )";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE INDEX kfetch ON {$serendipity['dbPrefix']}karma (entryid, lastvote);";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE INDEX kentryid ON {$serendipity['dbPrefix']}karma (entryid);";
            $sql = serendipity_db_schema_import($q);
            $this->set_config('version', PLUGIN_KARMA_VERSION);
        }

        return true;
    }

    /**
     * Unused; would create sidebar content. 
     */
    function generate_content(&$title)
    {
        $title       = $this->title;
    }

    /**
     * Creates an array of entries and their exit counts.
     *
     * @param array entries The entries to get exit counts for
     * @param boolean get optional Whether to return the array (otherwise
     *   does all the calculations, but returns only true) default:false
     *
     * @return Boolean true when $get is false; otherwise the array of
     *   entries with their exit counts.
     */
    function prepareExits($entries, $get = false) {
        static $exits = null;
        global $serendipity;

        if ($exits === null) {
            $q = 'SELECT entry_id, SUM(count) AS exits
                    FROM ' . $serendipity['dbPrefix'] . 'exits
                   WHERE entry_id IN (' . implode(', ', $entries) . ') GROUP BY entry_id';

            $sql = serendipity_db_query($q);
            $exits = array();
            if (is_array($sql)) {
                foreach($sql AS $idx => $row) {
                    $exits[$row['entry_id']] = (int)$row['exits'];
                }
            }
        }

        if ($get) {
            return $exits[$entries];
        }

        return true;
    }

    function getExits($entryid, $get_prepared = false) {
        global $serendipity;
        static $karma_exits = null;

        if ($karma_exits === null) {
            $karma_exits = ' <span class="serendipity_karmaVoting_exits_sep">|</span> <span class="serendipity_karmaVoting_exits">' . TOP_EXITS . '</span> <span class="serendipity_karmaVoting_exits_num">(%d)</span>';
        }

        if ($get_prepared) {
            $points = $this->prepareExits($entryid, true);
        } else {
            $res = serendipity_db_query("SELECT sum(count) AS exits FROM {$serendipity['dbPrefix']}exits WHERE entry_id = " . (int)$entryid . " GROUP BY entry_id", true, 'assoc');
            if (is_array($res) && isset($res['exits'])) {
                $points = $res['exits'];
            } else {
                $points = 0;
            }
        }

        return sprintf($karma_exits, $points);
    }

    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;
        

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {

            // Moved from above: only get image data if we're actually going to do something
            $this->set_valid_image_data();
            // Get dimensions of image, only if not text-only
            if ($this->image_name) {
                // Is this a single-image bar, or a single segment?
                $ratio = $this->image_width / $this->image_height;
                if ($ratio < $max_segment_ratio) {
                    // This is probably a single segment. Square segments
                    // will have a ratio of 0.3; long, flat segments won't
                    // get up to 1.0 unless they're 3 times as wide as they
                    // are tall; full-bar images with square segments will
                    // be 1.666; and full-bar images with tall, narrow
                    // segments will be greater than 1.0 unless they're 
                    // nearly twice as high as they are wide.
                    $this->image_width = $this->image_width * 5;
                }
            }

            switch($event) {
                // Early hook, before any page is displayed
                case 'frontend_configure':
                    
                    // Make sure the karmaVote cookie is set, even if empty <a name="#1" />
                    if (!isset($serendipity['COOKIE']['karmaVote'])) {
                        serendipity_setCookie('karmaVote', serialize(array()));
                    }

                    // If user didn't vote, we're done.
                    if (!isset($serendipity['GET']['karmaId']) || !isset($serendipity['GET']['karmaVote'])) {
                        return;
                    }

                    // Get URL vote data
                    $this->karmaId     = (int)$serendipity['GET']['karmaId'];
                    $this->karmaVoting = (int)$serendipity['GET']['karmaVote'];

                    // karmaVote cookie was just set (see name="#1"); this boils down to 
                    // "if check cookie isn't 1, there's no real cookie".
                    // The check cookie gets set when a rater is displayed,
                    // so you've got no business voting if you haven't even
                    // seen the rater yet.
                    if (!isset($serendipity['COOKIE']['karmaVote']) OR $serendipity['COOKIE']['check'] != '1') {
                        $this->karmaVote = 'nocookie';
                        return;
                    }

                    // Everything is ready.  Get the cookie vote data.
                    $karma   = unserialize($serendipity['COOKIE']['karmaVote']);

                    // Stop on invalid votes (cookie invalid, or URL data incorrect)
                    if (!is_array($karma) || !is_numeric($this->karmaVoting) || !is_numeric($this->karmaId) || $this->karmaVoting > 2 || $this->karmaVoting < -2) {
                        $this->karmaVote = 'invalid1';
                        return;
                    }

                    // Stop if the cookie says we already voted
                    if (!empty($karma[$this->karmaId])) {
                        $this->karmaVote = 'alreadyvoted';
                        return ;
                    }

                    // We don't want googlebots hitting the karma-voting
                    if (stristr($_SERVER['HTTP_USER_AGENT'], 'google')) {
                        $this->karmaVote = 'invalid1';
                        return ;
                    }

                    // Voting takes place here.
                    // 
                    // Get voting data from the database (keeps all entries,
                    // even if no karma match)
                    $q = 'SELECT *
                            FROM ' . $serendipity['dbPrefix'] . 'entries AS e
                 LEFT OUTER JOIN ' . $serendipity['dbPrefix'] . 'karma   AS k
                              ON e.id = k.entryid
                           WHERE e.id = ' . serendipity_db_escape_string($this->karmaId) . ' LIMIT 1';
                    $row = serendipity_db_query($q, true);

                    // If there's no entry with this ID, we're done
                    //
                    // --TODO: Modify the plugin to allow arbitrary voting with generated IDs
                    if (!isset($row) || !is_array($row)) {
                        $this->karmaVote = 'invalid2';
                        return;
                    }

                    $now = time();
                    if ($row['votes'] === '0' || $row['votes'] > 0) {
                        // Votes for this entry already exist. Do some checking.
                        $max_entrytime = $this->get_config('max_entrytime', 1440) * 60;
                        $max_votetime  = $this->get_config('max_votetime', 5)     * 60;
                        $max_karmatime = $this->get_config('max_karmatime', 7)    * 24 * 60 * 60;
                        // Allow infinite voting when 0 or negative
                        if ($max_karmatime <= 0) {
                            $max_karmatime = $now;
                        }

                        // If the entry's timestamp is too old for voting,
                        // we're done.
                        if ($row['timestamp'] < ($now - $max_karmatime)) {
                            $this->karmaVote = 'timeout2';
                            return;
                        }

                        // If the entry is in the grace period, or votes
                        // aren't too close together, record the vote.
                        if (($row['timestamp'] > ($now - $max_entrytime)) || ($row['lastvote'] + $max_votetime < $now) || $row['lastvote'] == 0) {
                            // Update votes
                            $q = sprintf(
                              "UPDATE {$serendipity['dbPrefix']}karma
                                  SET points   = %s,
                                      votes    = %s,
                                      lastvote = %s
                                WHERE entryid  = %s",
                              $row['points'] + $this->karmaVoting,
                              $row['votes']  + 1,
                              $now,
                              $this->karmaId
                            );

                            serendipity_db_query($q);
                        } else {
                            // Entry was too recently voted upon.  Figure out 
                            // how long until voting will be allowed (in minutes).
                            $this->karmaVote    = 'timeout';
                            $this->karmaTimeOut = abs(ceil(($now - ($row['lastvote'] + $max_votetime)) / 60));
                            return;
                        }
                    } else {
                        // No row. Use INSERT instead of UPDATE.
                        $q = sprintf(
                          "INSERT INTO {$serendipity['dbPrefix']}karma
                                       (entryid, points, votes, lastvote, visits)
                                VALUES (%s,      %s,     %s,    %s,       %s)",
                          $this->karmaId,
                          $this->karmaVoting,
                          1,
                          $now,
                          0
                        );

                        $sql = serendipity_db_query($q);
                    }

                    // Log the vote
                    if (serendipity_db_bool($this->get_config('logging', false))) {
                        $q = sprintf(
                          "INSERT INTO {$serendipity['dbPrefix']}karmalog
                                       (entryid, points, ip, user_agent, votetime)
                                VALUES (%s, %s, '%s', '%s', %s)",
                          $this->karmaId,
                          $this->karmaVoting,
                          serendipity_db_escape_string($_SERVER['REMOTE_ADDR']),
                          substr(serendipity_db_escape_string($_SERVER['HTTP_USER_AGENT']), 0, 255),
                          $now
                        );
                        $sql = serendipity_db_query($q);
                        if (is_string($sql)) {
                            mail($serendipity['serendipityEmail'] , 'KARMA ERROR', $q . '<br />' . $sql . '<br />');
                        }
                    }

                    // Set the cookie that we already voted for this entry
                    $karma[$this->karmaId] = $this->karmaVoting;
                    $this->karmaVote       = 'voted';
                    serendipity_setCookie('karmaVote', serialize($karma));

                    return true;
                    break;

                // CSS generation hooks
                case 'backend_header':
                    // Generate the CSS for the graphical rating bar selector
                    // 
                    // The CSS appears to be generated in a completely 
                    // different instance of Serendipity, as if index.php gets
                    // called separately for the CSS.
                    //
                    // Note that the css_backend hook adds properties to the 
                    // serendipity_admin.css, but that file is *always* 
                    // cached.  We use backend_header and add the CSS to the
                    // HEAD styles to make it dynamic.
                    
                    // Get the CSS, set $this->image_name so we'll output the
                    // standard graphical CSS prologue if any images are found.
                    $this->createRatingSelector();

                    print ("<style type='text/css'>\n");

                    $align = 'center';
                    $bg = $this->get_config('preview_bg', false);
                    if (!empty($bg)) {
                        if ((strpos($bg, ';') !== false) || (strpos($bg, ',') !== false)) {
                            $bg = 'red';
                        }
                        print("
.serendipity_karmaVote_selectorTable {
    background: $bg;
}
");
                    }
                    print("
.serendipityAdminContent .serendipity_karmaVoting_links {
    margin: 5px;
}
");
                case 'css':
                    // Some CSS notes:
                    // 
                    // .serendipity_karmaVoting is the class for the karma wrapper/container,
                    //      including the text explanations, messages, and rating bar.
                    //      (currently a div)
                    // .serendipity_karmaVoting a specifies the links for the text-mode
                    //      rating bar
                    // .serendipity_karmaError is the class for any text indicating an
                    //      error condition
                    // .serendipity_karmaSuccess is the class for any text indicating
                    //      successful operation
                    // .serendipity_karmaVoting_links is the container for the graphical
                    //      rating bar (currently an ol)
                    // .serendipity_karmaVoting_links a indicates the various voting links in
                    //      the graphical rating bar
                    // .serendipity_karmaVoting_current-rating is the class for the current
                    //      rating in the graphical rating bar
                    //  a.serendipity_karmaVoting_link1, _link2, etc are the classes applied 
                    //      to the individual voting links

                    // Note that there are two possible template types: early
                    // templates that only handle the text rating bars, and 
                    // newer templates that understand the graphical raters.
                    // We check for both types and act appropriately.
                    /*--JAM: Let's just skip this whole hassle
                    if (!$align) {
                        $align = $this->get_config('alignment', 'detect');
                    }
                    if ($align == 'detect') {
                    */
                    $align = $this->get_config('alignment', 'center');
                        // Try to let the template take care of it
                        if ($this->image_name == '0') {
                            // Text-only rating bar is used
                            if (strpos($eventData, '.serendipity_karmaVoting')) {
                                // Template is handling all our CSS
                                return true;
                            }
                        }/* --JAM: else {
                            // Graphical rating bar is used
                            if (strpos($eventData, '.serendipity_karmaVoting_images')) {
                                // Template is handling all our CSS
                                return true;
                            }
                            // Check for old text-only templates
                            $pos = strpos($eventData, '.serendipity_karmaVoting');
                            while ($pos && ($align == 'detect')) {
                                // Find text-align: in the current block
                                $endpos = strpos($eventData, '}', $pos);
                                if (!$endpos) {
                                    // Broken CSS
                                    break;
                                }
                                $alignpos = strpos($eventData, 'text-align:', $pos);
                                // Can't check for comments, or I would.  Hope
                                // the first is the correct one.
                                if ($alignpos && $alignpos < $endpos) {
                                    $start = $alignpos + 11;
                                    $alignend = strpos($eventData, ';', $alignpos);
                                    if ($alignend)
                                    {
                                        // All valid.  Pull out the alignment.
                                        $len = $alignend - $start;
                                        $align = trim(substr($eventData, $start, $len));
                                    }
                                }
                                $pos = strpos($eventData, '.serendipity_karmaVoting', $endpos);
                            }
                            // I should have a valid alignment or 'detect' in $align now. 
                        }
                    }
                    // If we couldn't detect the alignment, guess 'right'
                    if ($align == 'detect') {
                        $align = 'right';
                    }
                    --JAM: END COMMENT BLOCK */

                    // Since errors might be printed at any time, always
                    // output the text-mode CSS
                    print <<<EOS
.serendipity_karmaVoting {
    text-align: $align;
    font-size: 7pt;
    margin: 0px;
}

.serendipity_karmaVoting a {
    font-size: 7pt;
    text-decoration: none;
}

.serendipity_karmaVoting a:hover {
    color: green;
}

.serendipity_karmaError {
    color: #FF8000;
}
.serendipity_karmaSuccess {
    color: green;
}
EOS;
                    // Only output the image CSS if it's needed
                    if ($this->image_name != '0') {
                        $img = $serendipity['baseURL'] . "plugins/serendipity_event_karma/img/" . $this->image_name; 
                        $h = $this->image_height / 3;
                        $w = $this->image_width;
                        switch ($align) {
                            case 'left':
                                $margin = '0px auto 0px 0px';
                                break;
                            case 'center':
                                $margin = '0px auto';
                                break;
                            case 'right':
                            default:
                                $margin = '0px 0px 0px auto';
                                break;

                        }
                        // The CSS here is lifted largely from 
                        // http://komodomedia.com/blog/index.php/2007/01/20/css-star-rating-redux/
                        //
                        // Note, however that margin has been changed for
                        // multiple cases and all unitless measurements have 
                        // been specified in pixels.  Additionally, measures 
                        // have been taken to align the text.
                        print <<<END_IMG_CSS

.serendipity_karmaVoting_links,
.serendipity_karmaVoting_links a:hover,
.serendipity_karmaVoting_current-rating {
    background: url($img) left;
    font-size: 0;
}
.serendipity_karmaVoting_links {
    position: relative;
    width: {$w}px;
    height: {$h}px;
    overflow: hidden;
    list-style: none;
    margin: $margin;
    padding: 0px;
    background-position: left top;     
    text-align: center;
}
.serendipity_karmaVoting_links li {
   display: inline; 
}
.serendipity_karmaVoting_links a ,
.serendipity_karmaVoting_current-rating {
    position:absolute;
    top: 0px;
    left: 0px;
    text-indent: -9000em;
    height: {$h}px;
    line-height: {$h}px;
    outline: none;
    overflow: hidden;
    border: none;
}
.serendipity_karmaVoting_links a:hover {
    background-position: left bottom;
}
.serendipity_karmaVoting_links a.serendipity_karmaVoting_link1 {
    width: 20%;
    z-index: 6;
}
.serendipity_karmaVoting_links a.serendipity_karmaVoting_link2 {
    width: 40%;
    z-index: 5;
}
.serendipity_karmaVoting_links a.serendipity_karmaVoting_link3 {
    width: 60%;
    z-index: 4;
}
.serendipity_karmaVoting_links a.serendipity_karmaVoting_link4 {
    width: 80%;
    z-index: 3;
}
.serendipity_karmaVoting_links a.serendipity_karmaVoting_link5 {
  width: 100%;
    z-index: 2;
}
.serendipity_karmaVoting_links .serendipity_karmaVoting_current-rating {
    z-index: 1;
    background-position: left center;
}

END_IMG_CSS;
                        // Add selector images CSS, if necessary
                        if (!empty($this->select_css)) {
                            print($this->select_css);
                        }
                    } // End if image bar defined

                    if ($event == 'backend_header') {
                        print("\n</style>\n");
                    }
                    return true;
                    break;

                //--TODO: Comment the functionality of this event hook.
                case 'event_additional_statistics':
                    $sql = array();
                    $sql['visits_top']    = array('visits', 'DESC');
                    $sql['visits_bottom'] = array('visits', 'ASC');
                    $sql['votes_top']     = array('votes', 'DESC');
                    $sql['votes_bottom']  = array('votes', 'ASC');
                    $sql['points_top']    = array('points', 'DESC');
                    $sql['points_bottom'] = array('points', 'ASC');

                    foreach($sql AS $key => $rows) {
                        $q = "SELECT e.id,
                                     e.title,
                                     e.timestamp,
                                     SUM(k.{$rows[0]}) AS no
                                FROM {$serendipity['dbPrefix']}karma
                                     AS k
                                JOIN {$serendipity['dbPrefix']}entries
                                     AS e
                                  ON k.entryid = e.id
                            WHERE k.{$rows[0]} IS NOT NULL AND k.{$rows[0]} != 0
                            GROUP BY e.id, e.title, e.timestamp ORDER BY no {$rows[1]} LIMIT {$addData['maxitems']}";
                        $sql_rows = serendipity_db_query($q);
?>
    <dt><strong><?php echo constant('PLUGIN_KARMA_STATISTICS_' . strtoupper($key)); ?></strong></dt>
    <dl>
<?php
                        if (is_array($sql_rows)) {
                            foreach($sql_rows AS $id => $row) {
    ?>
        <dt><strong><a href="<?php echo serendipity_archiveURL($row['id'], $row['title'], 'serendipityHTTPPath', true, array('timestamp' => $row['timestamp'])); ?>"><?php echo htmlspecialchars($row['title']); ?></a></strong></dt>
        <dd><?php echo $row['no']; ?> <?php echo constant('PLUGIN_KARMA_STATISTICS_' . strtoupper($rows[0]) . '_NO'); ?></dd>
    <?php
                            }
                        }
?>
    </dl>
<?php
                    }

                    return true;
                    break;

                // Add voting information to entries
                case 'entry_display':
                    // Update database if necessary 
                    if ($this->get_config('version') != PLUGIN_KARMA_VERSION) {
                        $this->checkScheme();
                    }
                    
                    // Find the ID of this entry
                    if (isset($serendipity['GET']['id'])) {
                        $entryid = (int)serendipity_db_escape_string($serendipity['GET']['id']);
                    } elseif (preg_match(PAT_COMMENTSUB, $_SERVER['REQUEST_URI'], $matches)) {
                        $entryid = (int)$matches[1];
                    } else {
                        $entryid = false;
                    }

                    // If we're actually reading the entry, not voting or editing it...
                    if ($entryid && empty($serendipity['GET']['adminAction']) && !$serendipity['GET']['karmaVote']) {
                        // Update the number of visits
                        // Are we supposed to track visits?
                        $track_clicks  = serendipity_db_bool($this->get_config('visits_active', true)) && $this->track_clicks_allowed_by_user();
                        if ($track_clicks) {
                            $sql = serendipity_db_query(
                                "UPDATE {$serendipity['dbPrefix']}karma 
                                    SET visits = visits + 1 
                                  WHERE entryid = $entryid", 
                                  true);
                            if (serendipity_db_affected_rows() < 1) {
                                serendipity_db_query(
                                        "INSERT INTO {$serendipity['dbPrefix']}karma (entryid, points, votes, lastvote, visits) 
                                              VALUES ('$entryid', 0, 0, 0, 1)"
                                        );
                            }
                        }
                    }
                    
                    // Set a cookie to look for later, verifying that cookies are enabled
                    serendipity_setCookie('check', '1');

                    switch($this->karmaVote) {
                        case 'nocookie':
                            // Users with no cookies won't be able to vote.
                            $msg = '<div class="serendipity_karmaVoting serendipity_karmaError"><a id="karma_vote' . $this->karmaId . '"></a>' . PLUGIN_KARMA_NOCOOKIE . '</div>';
                            // Continue until output

                        case 'timeout2':
                            if (!isset($msg)) {
                                $msg = '<div class="serendipity_karmaVoting serendipity_karmaError"><a id="karma_vote' . $this->karmaId . '"></a>' . PLUGIN_KARMA_CLOSED . '</div>';
                            }
                            // Continue until output

                        case 'timeout':
                            if (!isset($msg)) {
                                $msg = '<div class="serendipity_karmaVoting serendipity_karmaError"><a id="karma_vote' . $this->karmaId . '"></a>' . sprintf(PLUGIN_KARMA_TIMEOUT, $this->karmaTimeOut) . '</div>';
                            }
                            // Continue until output

                        case 'alreadyvoted':
                            if (!isset($msg)) {
                                $msg = '<div class="serendipity_karmaVoting serendipity_karmaError"><a id="karma_vote' . $this->karmaId . '"></a>' . PLUGIN_KARMA_ALREADYVOTED . '</div>';
                            }
                            // Continue until output

                        case 'invalid1':
                        case 'invalid2':
                        case 'invalid':
                            // Set message
                            if (!isset($msg)) {
                                $msg = '<div class="serendipity_karmaVoting serendipity_karmaError"><a id="karma_vote' . $this->karmaId . '"></a>' . PLUGIN_KARMA_INVALID . '</div>';
                            }
                            // Continue until output

                            /* OUTPUT MESSAGE */
                            //--TODO: Shouldn't this work with the cache plugin, too?
                            if ($addData['extended']) {
                                $eventData[0]['exflag'] = 1;
                                $eventData[0]['add_footer'] .= $msg;
                            } else {
                                $elements = count($eventData);
                                // Find the right container to store our message in.
                                for ($i = 0; $i < $elements; $i++) {
                                    if ($eventData[$i]['id'] == $this->karmaId) {
                                        $eventData[$i]['add_footer'] .= $msg;
                                    }
                                }
                            }
                            break;

                        case 'voted':
                        default:
                            // If there's no data, there's no need to go on
                            if (!is_array($eventData)) return;

                            // Find out what the admin wants
                            $track_clicks  = serendipity_db_bool($this->get_config('visits_active', true));
                            $track_karma   = serendipity_db_bool($this->get_config('karma_active', true));
                            $track_exits   = serendipity_db_bool($this->get_config('exits_active', true));

                            // Get the limits
                            $now           = time();
                            $karmatime     = $this->get_config('max_karmatime', 7);
                            $max_karmatime = $karmatime    * 24 * 60 * 60;
                            // Accept infinite voting
                            if ($max_karmatime <= 0) {
                                $max_karmatime = $now;
                            }

                            //--TODO: Ensure that this works with the Custom Permalinks plugin
                            // (We've seen trouble; it votes correctly, but redirects to the front page)
                            $url = serendipity_currentURL() . '&amp;';
                            //$uri = $_SERVER['REQUEST_URI'];

                            // Get the cookie data (past votes, etc)
                            $karma = (isset($serendipity['COOKIE']['karmaVote']) ? unserialize($serendipity['COOKIE']['karmaVote']) : array());
                            // Get all required entry IDs, making keys match keys in eventData
                            $entries = array();
                            if ($addData['extended'] || $addData['preview']) {
                                // We're in extended or preview mode, we only need the current ID
                                $eventData[0]['exflag'] = 1;
                                $entries[0] = (int)($eventData[0]['id']);
                            } elseif (!serendipity_db_bool($this->get_config('extended_only', false))) {
                                // We're in overview mode, and we want rating bars for all the entry IDs
                                foreach(array_keys($eventData) as $key) {
                                    if (isset($eventData[$key]['id'])) {
                                        $entries[$key] = (int)$eventData[$key]['id'];
                                    }
                                }
                            }

                            // Fetch votes for all entry IDs. Store them in an array for later usage.
                            $q = 'SELECT k.entryid, SUM(votes) AS votes, SUM(points) AS points, SUM(visits) AS visits
                                    FROM ' . $serendipity['dbPrefix'] . 'karma   AS k
                                   WHERE k.entryid IN (' . implode(', ', $entries) . ') GROUP BY k.entryid';

                            $sql = serendipity_db_query($q);

                            $rows = array();
                            if ($sql && is_array($sql)) {
                                foreach($sql AS $row) {
                                    $rows[$row['entryid']] = array(
                                            'votes' => $row['votes'], 
                                            'points' => $row['points'], 
                                            'visits' => $row['visits']
                                            );
                                }
                            }

                            $this->prepareExits($entries);

                            // Add karma block to the footer of each entry
                            // 
                            // The entries array was populated, above, so its keys match the eventData array,
                            // and overview entries are skipped if "extended only" is enabled
                            foreach (array_keys($entries) as $i) {
                                // Get the statistics
                                $entryid = $eventData[$i]['id'];
                                $votes   = (!empty($rows[$entryid]['votes']) ? $rows[$entryid]['votes'] : 0);
                                $points  = (!empty($rows[$entryid]['points']) ? $rows[$entryid]['points'] : 0);
                                $visits  = (!empty($rows[$entryid]['visits']) ? $rows[$entryid]['visits'] : 0);
                                $enough_votes = $track_karma && ($votes >= $this->get_config('min_disp_votes', 0));
                                $enough_visits = $track_clicks && ($visits >= $this->get_config('min_disp_visits', 0));
                                $textual_msg = true;
                                $textual_current = true;
                                $textual_visits = true;
                                if ($this->image_name != '0') {
                                    $textual_msg = $this->get_config('textual_msg', 'true');
                                    $textual_current = $this->get_config('textual_current', 'true');
                                    $textual_visits = $this->get_config('textual_visits', 'true');
                                }

                                // Where's the footer?  Normally it would be
                                // in eventData[n]['add_footer'] but if the
                                // cache plugin is used, it's in 
                                // eventData[n]['properties']['ep_cache_add_footer'].
                                // This method retrieves it either way.
                                $footer = &$this->getFieldReference('add_footer', $eventData[$i]);

                                // Depending on what existed, $footer could
                                // be referencing the cached version, the
                                // uncached version, or even a new empty 
                                // string.  In particular, if $eventData[$i] 
                                // has no properties, and no 'add_footer' key, 
                                // $footer is referencing a new empty string,
                                // so adding a karma bar to $footer would do 
                                // nothing.
                                //
                                // We could be referencing an empty uncached
                                // 'add_footer', but empty cache entries are
                                // never returned.
                                //
                                // Reference a footer that will be printed
                                if (empty($footer) && !isset($eventData[$i]['add_footer'])) {
                                  $eventData[$i]['add_footer'] = '';
                                  $footer = &$eventData[$i]['add_footer'];
                                  // It's still empty, but it's referencing
                                  // the right place.
                                }

                                if ($track_exits) {
                                    $footer .= $this->getExits($entryid, true);
                                }

                                // Pick the appropriate intro msg and rating bar
                                // No msg or bar if karma is disabled
                                if ($track_karma) {
                                    if (isset($karma[$entryid])) {
                                        // We already voted for this one
                                        $msg =
    '<div class="serendipity_karmaSuccess">' . PLUGIN_KARMA_VOTED . '</div>';
                                        $myvote = $karma[$entryid];
                                        if ($this->get_config('rate_with_words', false)) {
                                            $myvote = $this->wordRating($myvote, 1);
                                        }
                                        elseif ($this->image_name != '0') {
                                            $myvote = $this->imageRating($myvote, 1);
                                        }
                                        // Just a current rating bar, if any
                                        $bar = $this->createRatingBar(null, $points, $votes);
                                    } elseif ($eventData[$i]['timestamp'] < ($now - $max_karmatime)) {
                                        // Too late to vote for this one
                                        $msg = 
    '<div class="serendipity_karmaClosed">' . sprintf(PLUGIN_KARMA_CLOSED, $karmatime) . '</div>';
                                        // Just a current rating bar, if any
                                        $bar = $this->createRatingBar(null, $points, $votes);
                                    } else {
                                        // We can vote for this; make the whole voting block
                                        $rate_msg = $this->get_config('rate_msg', PLUGIN_KARMA_VOTETEXT);
                                        $msg = 
    '<div class="serendipity_karmaVoting_text">' . $rate_msg . '</div>';
                                        // Full voting bar
                                        $bar = $this->createRatingBar($entryid, $points, $votes);
                                    }
                                }
                                // Create the karma block
                                $image_class = '';
                                if ($this->image_name != '0') {
                                    $image_class = ' serendipity_karmaVoting_images';
                                }
                                $karma_block = 
"<div class='serendipity_karmaVoting$image_class'><a id='karma_vote$entryid'></a>";
                                if ($textual_msg) {
                                    $karma_block .= 
    $msg;
                                }
                                $karma_block .=
    $bar;
                                if ($enough_votes && $textual_current) {
                                    $curr_msg = $this->get_config('curr_msg', PLUGIN_KARMA_CURRENT);
                                    $karma_block .=
    '<span class="serendipity_karmaVoting_current">' . $curr_msg . '</span>';
                                }
                                if ($enough_visits && $textual_visits) {
                                    $karma_block .= 
    '<span class="serendipity_karmaVoting_visits">' . PLUGIN_KARMA_VISITSCOUNT . '</span>';
                                }
                                $karma_block .=
"\n</div>\n";
                                // Adjust rating points
                                if ($this->get_config('rate_with_words', false)) {
                                    $points = $this->wordRating($points, $votes);
                                }
                                elseif ($this->image_name != '0') {
                                    $points = $this->imageRating($points, $votes);
                                }

                                /*
                                   print("<h3>--DEBUG: Karma block code:</h3>\n<pre>\n");
                                   print_r(htmlspecialchars($karma_block));
                                   print("\n</pre>\n");
                                 */

                                // Substitute the % stuff and add it to the footer
                                $footer .= sprintf($karma_block, $myvote, $points, $votes, $visits, $url);
                            } // foreach key in entries
                    }// End switch on karma voting status
                    return true;
                    break;

                default:
                    return false;
            }// End switch on event hooks
        } else {
            return false;
        }
    }
    
    /**
     * Check, if visit counting for the actual visitor should be done.
     */
    function track_clicks_allowed_by_user(){
        if (!$this->get_config('track_visits_of_loggedin_users',true) && serendipity_userLoggedIn()){
            return false;
        }
        return true;
    }

    /**
     * Creates an HTML snippet with images of all the available rating bars.
     *
     * @return string an HTML string including working images of all the rating bars in the img/ directory.
     */
    function createRatingSelector() {
        // Since the inputs are set up with the proper names, the config item
        // gets saved automatically, with no need for magic

        // Get the filename to be automatically selected
        $this->set_valid_image_data();
        $cursel = $this->image_name;

        $this->select_css = '';
        $this->select_html = '';
        // We will be wrapped in a <tr><td colspan="2">
        $this->select_html .= "
<strong>" . PLUGIN_KARMA_IMAGE . "</strong><br />
<span style='color: rgb(94, 122, 148); font-size: 8pt;'>&nbsp;".PLUGIN_KARMA_IMAGE_DESC."</span>
</td>
<td></td>
</tr>
<tr>
<td colspan='2'>
<table border='1' class='serendipity_karmaVote_selectorTable'>";
        // Add the 'text-only' selection and its CSS
        if ($cursel == '0') {
            $checked = 'checked="checked" ';
        } else {
            $checked = '';
        }
        $this->image_name = '0';
        $bar = $this->createRatingBar('', 0, 0, 'textbar');
        $this->select_html .= "
<tr id='serendipity_karmaVote_selectorTable_textOnly'>
<td colspan='3' align='center'><input type='radio' name='serendipity[plugin][base_image]' value='0' $checked/>" . PLUGIN_KARMA_STATISTICS_POINTS_NO . "<br />$bar<br /></td>\n";
        $this->select_css .= "
.textbar, .textbar a, .textbar a:hover {
    font-size: 100%;
    position: relative;
    background: none;
}
.serendipityAdminContent span.textbar {
    color: black !important;
}
";
        // Retrieve all the *valid* images from the image directory
        $files = $this->getImageFiles();
        // Add an <ol> for each rating bar, and add its CSS overrides 
        $n = 0;
        foreach ($files as $fdata) {
            // Columnize 
            if (($n % 3) == 0) {
                // Time to start a new row
                $this->select_html .= "</tr>\n<tr>\n";
            }

            // Set the image data
            $fname = $fdata['fname'];
            $height = $fdata['height'];
            $width = $fdata['width'];
            $ratio = $width / $height;
            // If this is a single segment, adjust width
            if ($ratio < $max_segment_ratio) {
                $width = $width * 5;
            }
            $height = $height / 3;
            // Set up class variables correctly
            $this->image_name = $fname;
            $this->image_width = $width;
            $this->image_height = $height;

            // Create a rating bar of this image
            //
            // What would be a good CSS class for this image?
            $css_class = str_replace(array('.',' '), array('_','_'), $fname);
            $checked = '';
            if ($fname == $cursel) {
                $checked = 'checked="checked" ';
            }
            $bar_html = 
"<td align='center' id='serendipity_karmaVote_select_$css_class'>
    <input type='radio' name='serendipity[plugin][base_image]' value='$fname' $checked/>
    <span style='font-size: 8pt;'>$fname</span><br />\n" . 
                $this->createRatingBar('', -1, 2, $css_class) .
"</td>\n";
            $bar_html = sprintf($bar_html, '', '2.5 of 5', '1');
            $this->select_html .= $bar_html;
            // Add the necessary CSS to the stylesheet (will be added when css hooks are called)
            // Sorry to interrupt your regularly scheduled HTML; I need to 
            // use the $css_class while it's still here.
            $this->select_css .= "
/* Overrides for $css_class */
.$css_class 
{
  width: ${width}px;
  height: ${height}px;
}
.$css_class,
.$css_class a:hover,
.$css_class .serendipity_karmaVoting_current-rating
{
  background-image: url({$serendipity['baseURL']}plugins/serendipity_event_karma/img/${fname});
}
.$css_class,
.$css_class a,
.$css_class .serendipity_karmaVoting_current-rating
{
  line-height: ${height}px;
  height: ${height}px;
}

";
            $n++;
        } // Go back up for another image

        // Check for nothing displayed
        if ($n == 0) {
            // There were no images!
            $this->select_html .= "</tr>\n<tr><td>" . PLUGIN_KARMA_NO_IMAGES . "</td>";
        }

        // End the table, with a config-item bottom-border separator
        $this->select_html .= 
"</tr>\n</table>
<tr><td colspan='2' style='border-bottom: 1px solid #000000; vertical-align: top'>&nbsp;<td></tr>\n";
        // The config item and row are closed by the core code

        return $this->select_html;
    }

    /**
     * Retrieves all the images from the img/ directory
     *
     * @return array an array with 'fname', 'width', and 'height' entries for
     *     each valid image file in the img/ directory
     */
    function getImageFiles() {
        $path = dirname(__FILE__) . "/img";
        $images = array();
        $folder = opendir($path);
        while (false !== ($filename = readdir($folder))) {
            $parts = serendipity_parseFileName($filename);
            $img_data = serendipity_getimagesize($path . '/' . $filename);
            if (!isset($img_data['noimage'])) {
                // Curly braces are just a different syntax of associative array assignment
                $images{$filename} = array('fname'=>$filename, 'width'=>$img_data[0], 'height'=>$img_data[1]);
            }
        }
        closedir($folder);                               
        ksort($images);
        return $images;
    }

    /**
     * Creates the HTML snippet for the currently defined rating bar, with 
     * appropriate links (and current rating indication for graphical bars).
     * Automatically detects from $this->image_name whether to create text
     * links or a graphical bar.
     *
     * @param string id optional The ID of the bar we're creating; an empty
     *     id ('' or 0) creates a bar with dummy links; null creates a bar with 
     *     no voting links at all (shows only current configuration).
     * @param int karma optional The current total karma (default: 0 points)
     * @param int votes optional The total number of votes (default: 0 votes))
     * @param string extra_class optional Any additional CSS classes to be added to the bar container
     */
    function createRatingBar($id = null, $karma = 0, $votes = 0, $extra_class = '') {
        // Are there enough votes to display the current rating?
        $enough_votes = ($votes >= $this->get_config('min_disp_votes', 0));
        // Do I need to create links?
        if ($id !== null) {
            // Create the rating tooltips and texts
            $vilestr = $this->get_config('rate_vile', PLUGIN_KARMA_VOTEPOINT_1);
            $poorstr = $this->get_config('rate_poor', PLUGIN_KARMA_VOTEPOINT_2);
            $okaystr = $this->get_config('rate_okay', PLUGIN_KARMA_VOTEPOINT_3);
            $goodstr = $this->get_config('rate_good', PLUGIN_KARMA_VOTEPOINT_4);
            $beststr = $this->get_config('rate_best', PLUGIN_KARMA_VOTEPOINT_5);
            $vile = sprintf(PLUGIN_KARMA_RATE, $vilestr);
            $poor = sprintf(PLUGIN_KARMA_RATE, $poorstr);
            $okay = sprintf(PLUGIN_KARMA_RATE, $okaystr);
            $good = sprintf(PLUGIN_KARMA_RATE, $goodstr);
            $best = sprintf(PLUGIN_KARMA_RATE, $beststr);
            $vilestr = $this->get_config('text_vile', PLUGIN_KARMA_VOTETEXT_1);
            $poorstr = $this->get_config('text_poor', PLUGIN_KARMA_VOTETEXT_2);
            $okaystr = $this->get_config('text_okay', PLUGIN_KARMA_VOTETEXT_3);
            $goodstr = $this->get_config('text_good', PLUGIN_KARMA_VOTETEXT_4);
            $beststr = $this->get_config('text_best', PLUGIN_KARMA_VOTETEXT_5);
            
            if (empty($id)) {
                // Create dummy links
                $link_1 = 
'<a class="serendipity_karmaVoting_link1" rel="nofollow" href="#" title="' . $vile . '">' . $vilestr . '</a>';
                $link_2 = 
'<a class="serendipity_karmaVoting_link2" rel="nofollow" href="#" title="' . $poor . '">' . $poorstr . '</a>';
                $link_3 = 
'<a class="serendipity_karmaVoting_link3" rel="nofollow" href="#" title="' . $okay . '">' . $okaystr . '</a>';
                $link_4 = 
'<a class="serendipity_karmaVoting_link4" rel="nofollow" href="#" title="' . $good . '">' . $goodstr . '</a>';
                $link_5 = 
'<a class="serendipity_karmaVoting_link5" rel="nofollow" href="#" title="' . $best . '">' . $beststr . '</a>';
                // There *are* enough votes for a dummy rating bar
                $enough_votes = true;
            } else {
                // Create ordinary links
                $link_1 = "<a class='serendipity_karmaVoting_link1' rel='nofollow' href='%5\$sserendipity[karmaVote]=-2&amp;serendipity[karmaId]=$id#karma_vote$id' title='$vile'>$vilestr</a>";
                $link_2 = "<a class='serendipity_karmaVoting_link2' rel='nofollow' href='%5\$sserendipity[karmaVote]=-1&amp;serendipity[karmaId]=$id#karma_vote$id' title='$poor'>$poorstr</a>";
                $link_3 = "<a class='serendipity_karmaVoting_link3' rel='nofollow' href='%5\$sserendipity[karmaVote]=0&amp;serendipity[karmaId]=$id#karma_vote$id' title='$okay'> $okaystr</a>";
                $link_4 = "<a class='serendipity_karmaVoting_link4' rel='nofollow' href='%5\$sserendipity[karmaVote]=1&amp;serendipity[karmaId]=$id#karma_vote$id' title='$good'>$goodstr</a>";
                $link_5 = "<a class='serendipity_karmaVoting_link5' rel='nofollow' href='%5\$sserendipity[karmaVote]=2&amp;serendipity[karmaId]=$id#karma_vote$id' title='$best'>$beststr</a>";
            }
        }

        // Normalize the CSS class
        if (!empty($extra_class)) {
            $extra_class = " $extra_class";
        }

        // Create the rating bar
        if ($this->image_name == '0') {
            // Text bar
            //
            if ($id === null) {
                // No need for a "current rating" bar, like with graphics
                $karma_display = '';
            } else {
                // Show the links
                $karma_display = "
                    <span class='serendipity_karmaVoting_links$extra_class'>$link_1 | $link_2 | $link_3 | $link_4 | $link_5</span><br />";
            }
        } else {
            // Graphic bar
            //

            // No need to create a bar if there's nothing to display
            if (($id !== null) || $enough_votes) {
                // Start the bar
                $karma_display = "
<ol class='serendipity_karmaVoting_links$extra_class'>";
                // Only display the current rating if there are enough votes
                if ($enough_votes) {
                    // Figure out the image-based rating and width
                    $rating = $this->imageRating($karma, $votes);
                    $cr_width = ($rating * $this->image_width) / 5;
                    // Get current karma text
                    $curr_msg = $this->get_config('curr_msg', PLUGIN_KARMA_CURRENT);
                    $karma_display .= "
    <li class='serendipity_karmaVoting_current-rating' style='width: ${cr_width}px;' title='$curr_msg'> </li>
    ";
                }
                // Only create voting links if required
                if ($id !== null) {
                    $karma_display .= "
    <li>$link_1</li>
    <li>$link_2</li>
    <li>$link_3</li>
    <li>$link_4</li>
    <li>$link_5</li>
    ";
                }
                // Close the <ol>
                $karma_display .= "
</ol>
";
            }
        }
        return $karma_display;
    }

    /**
     * Sets $this->image_name to the name of a valid image, or to '0' to
     * indicate text-only rating bars should be used.
     */
    function set_valid_image_data() {
        $base_image = $this->get_config('base_image', false);
        if ($base_image !== false) {
            // Definitely configured
            if ($base_image == '0') {
                // Configured to text-only
                $this->image_name = $base_image;
            } else {
                $imagesize = serendipity_getimagesize(dirname(__FILE__) . "/img/" . $base_image);
                if ($imagesize['noimage']) {
                    // Leave as default
                } else {
                    // Set to valid image name
                    $this->image_name = $base_image;
                }
            }
        }
        // Is the (possibly default) image valid?
        if ($this->image_name) {
            $imagesize = serendipity_getimagesize(dirname(__FILE__) . "/img/" . $this->image_name);
            if ($imagesize['noimage']) {
                // No valid image; use text-only
                $this->image_name = '0';
            } else {
                // Valid graphical image; set the dimensions, too
                $this->image_width = $imagesize[0];
                $this->image_height = $imagesize[1];
            }
        }
    }

    /**
     * Compute the equivalent graphical points rating for a karma rating.
     *
     * @param int points The total karma points
     * @param int votes The total number of votes
     * 
     * @return string A string indicating the number of points "of 5", 
     *     or PLUGIN_KARMA_IMAGE_NONE_RATING if no votes have been recorded.
     */
    function imageRating($points, $votes) {
        if ($votes == 0) {
            $rating = PLUGIN_KARMA_IMAGE_NONE_RATING;
        } else {
            // Find average karma (-2 to +2)
            $rating = ((float)$points) / ((float)$votes);
            // Remap into [1,5]
            $rating = $rating + 3;
            // Put it into the language-specific string format
            if ($rating == (int)$rating) {
                $rating = sprintf(PLUGIN_KARMA_IMAGE_INT_RATING, $rating);
            } else {
                $rating = sprintf(PLUGIN_KARMA_IMAGE_RATING, $rating);
            }
        }
        return $rating;
    }

    /* Compute the equivalent word rating for a karma rating.
     * 
     * @param mixed points The total karma points
     * @param mixed votes The total number of votes
     *
     * @return string A word corresponding to the article rating, 
     *     or PLUGIN_KARMA_IMAGE_NONE_RATING if no votes have been recorded.
     */
    function wordRating($points, $votes) {
        if ($votes == 0) {
            $rating = PLUGIN_KARMA_IMAGE_NONE_RATING;
        } else {
            // Find average karma (-2 to +2)
            $rating = ((float)$points) / ((float)$votes);
            // Put it into the language-specific string format, rounding up
            // I'm mapping invalid cases (rating > 5 and rating < -2) to the extremes
            if ($rating <= -1.5) {
                $rating = PLUGIN_KARMA_VOTEPOINT_1;
            } elseif ($rating <= -0.5) {
                $rating = PLUGIN_KARMA_VOTEPOINT_2;
            } elseif ($rating <= 0.5) {
                $rating = PLUGIN_KARMA_VOTEPOINT_3;
            } elseif ($rating <= 1.5) {
                $rating = PLUGIN_KARMA_VOTEPOINT_4;
            } else {
                $rating = PLUGIN_KARMA_VOTEPOINT_5;
            }
        }
        return $rating;
    }
}

/* vim: set sts=4 ts=4 sw=4 expandtab : */
