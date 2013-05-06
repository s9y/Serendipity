<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_SMARTY')) {
    return;
}
@define('S9Y_FRAMEWORK_SMARTY', true);

/**
 * Fetch a list of trackbacks for an entry
 *
 * @access public
 * @param   int     The ID of the entry
 * @param   string  How many trackbacks to show
 * @param   boolean If true, also non-approved trackbacks will be shown
 * @return
 */
function &serendipity_fetchTrackbacks($id, $limit = null, $showAll = false) {
    global $serendipity;

    if (!$showAll) {
        $and = "AND status = 'approved'";
    }

    $query = "SELECT * FROM {$serendipity['dbPrefix']}comments WHERE entry_id = '". (int)$id ."' AND (type = 'TRACKBACK' OR type = 'PINGBACK') $and ORDER BY id";
    if (isset($limit)) {
        $limit  = serendipity_db_limit_sql($limit);
        $query .= " $limit";
    }

    $comments = serendipity_db_query($query);
    if (!is_array($comments)) {
        return array();
    }

    return $comments;
}

/**
 * Show trackbacks for an entry
 *
 * LONG
 *
 * @access public
 * @param   array       The superarray of trackbacks to display
 * @return
 */
function &serendipity_printTrackbacks(&$trackbacks) {
    global $serendipity;

    $serendipity['smarty']->assignByRef('trackbacks', $trackbacks);

    return serendipity_smarty_fetch('TRACKBACKS', 'trackbacks.tpl');
}

/**
 * Smarty: Fetch a smarty block and pass it on to Serendipity Templates - use with Smarty > 3.0 only
 *
 * @access public
 * @param   string      The name of the block to parse data into ("COMMENTS" - virtual variable like {$COMMENTS})
 * @param   string      The name of the template file to fetch. Only filename, the path is auto-detected
 * @param   boolean     If true, the output of the smarty parser will be echoed instead of invisibly treated
 * @return  string      The parsed HTML code
 */
function &serendipity_smarty_fetch($block, $file, $echo = false) {
    global $serendipity;

    $output = $serendipity['smarty']->fetch('file:'. serendipity_getTemplateFile($file, 'serendipityPath'), null, null, null, ($echo === true && $serendipity['smarty_raw_mode']));

    $serendipity['smarty']->assignByRef($block, $output);

    return $output;
}

/**
 * Smarty Modifier: Check if a string is not empty and prepend a prefix in that case. Else, leave empty
 *
 * @access public
 * @param   string  The input string to check
 * @param   string  The prefix to prepend, if $string is not empty
 * @return  string  The return string
 */
function serendipity_emptyPrefix($string, $prefix = ': ') {
    return (!empty($string) ? $prefix . htmlspecialchars($string) : '');
}

/**
 * Smarty Modifier: Return a remembered variable
 *
 * @access public
 * @param   string  The variable name
 * @param   string  The wanted value
 * @param   boolean Force default?
 * @param   string  Returned attribute
 * @return  string  The return string
 */
function serendipity_ifRemember($name, $value, $isDefault = false, $att = 'checked') {
    global $serendipity;

    if (!is_array($serendipity['COOKIE']) && !$isDefault) {
        return false;
    }

    if ((!is_array($serendipity['COOKIE']) && $isDefault) ||
        (!isset($serendipity['COOKIE']['serendipity_' . $name]) && $isDefault) ||
        (isset($serendipity['COOKIE']['serendipity_' . $name]) && $serendipity['COOKIE']['serendipity_' . $name] == $value)) {

        return " $att=\"$att\" ";
    }
}

/**
 * Smarty Function: Fetch and print a single or multiple entries
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                      [FETCHING]
 *                          category:        (int)     The category ID (seperate multiple with ";") to fetch entries from
 *                          viewAuthor:      (int)     The author ID (seperate multiple with ";") to fetch entries from
 *                          page:            (int)     The number of the page for paginating entries
 *                          id:              (int)     The ID of an entry. If given, only a single entry will be fetched. If left empty, multiple entries are fetched.
 *                          range:           (mixed)   Restricts fetching entries to a specific timespan. Behaves differently depending on the type:
 *                                           Numeric:
 *                                            YYYYMMDD - Shows all entries from YYYY-MM-DD.
 *                                            If DD is "00", it will show all entries from that month.
 *                                            If DD is any other number, it will show entries of that specific day.
 *                                           2-Dimensional Array:
 *                                            Key #0   - Specifies the start timestamp (unix seconds)
 *                                            Key #1   - Specifies the end timestamp (unix seconds)
 *                                           Other (null, 3-dimensional Array, ...):
 *                                            Entries newer than $modified_since will be fetched
 *                          full             (boolean) Indicates if the full entry will be fetched (body+extended: TRUE), or only the body (FALSE).
 *                          limit            (string)  Holds a "Y" or "X, Y" string that tells which entries to fetch. X is the first entry offset, Y is number of entries. If not set, the global fetchLimit will be applied (15 entries by default)
 *                          fetchDrafts      (boolean) Indicates whether drafts should be fetched (TRUE) or not
 *                          modified_since   (int)     Holds a unix timestamp to be used in conjunction with $range, to fetch all entries newer than this timestamp
 *                          orderby          (string)  Holds the SQL "ORDER BY" statement.
 *                          filter_sql       (string)  Can contain any SQL code to inject into the central SQL statement for fetching the entry
 *                          noCache          (boolean) If set to TRUE, all entries will be fetched from scratch and any caching is ignored
 *                          noSticky         (boolean) If set to TRUE, all sticky entries will NOT be fetched.
 *                          select_key       (string)  Can contain a SQL statement on which keys to select. Plugins can also set this, pay attention!
 *                          group_by         (string)  Can contain a SQL statement on how to group the query. Plugins can also set this, pay attention!
 *                          returncode       (string)  If set to "array", the array of entries will be returned. "flat-array" will only return the articles without their entryproperties. "single" will only return a 1-dimensional array. "query" will only return the used SQL.
 *                          joinauthors      (bool)    Should an SQL-join be made to the AUTHORS DB table?
 *                          joincategories   (bool)    Should an SQL-join be made to the CATEGORIES DB table?
 *                          joinown          (string)  SQL-Parts to add to the "JOIN" query
 *                          entryprops       (string)  Condition list of commaseparated entryproperties that an entry must have to be displayed (example: "ep_CustomField='customVal',ep_CustomField2='customVal2'")
 *
 *                      [PRINTING]
 *                          template:          (string)  Name of the template file to print entries with
 *                          preview:           (boolean) Indicates if this is a preview
 *                          block              (string   The name of the SMARTY block that this gets parsed into
 *                          use_hooks          (boolean  Indicates whether to apply footer/header event hooks
 *                          use_footer         (boolean  Indicates whether the pagination footer should be displayed
 *                          groupmode          (string   Indicates whether the input $entries array is already grouped in preparation for the smarty $entries output array [TRUE], or if it shall be grouped by date [FALSE]
 *                          skip_smarty_hooks  (boolean) If TRUE, no plugins will be executed at all
 *                          skip_smarty_hook   (mixed)   Can be set to an array of plugin hooks to NOT execute
 *                          prevent_reset      (boolean) If set to TRUE, the smarty $entries array will NOT be cleared. (to prevent possible duplicate output of entries)
 * @param   object      Smarty object
 * @return  string      The Smarty HTML response
 */
function serendipity_smarty_fetchPrintEntries($params, &$smarty) {
    global $serendipity;
    static $entrycount = 0;
    static $restore_var_GET_keys = array('category', 'viewAuthor', 'page', 'hide_category');

    // A counter variable to not assign template files multiple times
    $entrycount++;

    // Default values for function calls
    if (empty($params['template'])) {
        $params['template'] = 'entries.tpl';
    }

    if (empty($params['range'])) {
        $params['range'] = null;
    }

    if (empty($params['full'])) {
        $params['full'] = true;
    }

    if (empty($params['fetchDrafts'])) {
        $params['fetchDrafts'] = false;
    }
    
    if (!empty($params['entryprops'])) {
        if (preg_match_all('@(.*)(!)?=[\'"]*([^\'"]+)[\'"]*(,|$)@imsU', $params['entryprops'], $m)) {
            foreach($m[0] AS $idx => $p) {
                $params['joinown'] .= "\n JOIN {$serendipity['dbPrefix']}entryproperties 
                                          AS ep" . $idx . " 
                                          ON (ep" . $idx . ".entryid = e.id AND 
                                              ep" . $idx . ".property = '" . serendipity_db_escape_string($m[1][$idx]) . "' AND 
                                              ep" . $idx . ".value " . $m[2][$idx] . "= '" . serendipity_db_escape_string($m[3][$idx]) . "') \n";
            }
        }
    }

    if (empty($params['modified_since'])) {
        $params['modified_since'] = false;
    }

    if (empty($params['orderby'])) {
        $params['orderby'] = 'timestamp DESC';
    }

    if (empty($params['noCache'])) {
        $params['noCache'] = false;
    }

    if (empty($params['noSticky'])) {
        $params['noSticky'] = false;
    }

    if (empty($params['preview'])) {
        $params['preview'] = false;
    }

    if (empty($params['block'])) {
        $params['block'] = 'smarty_entries_' . $entrycount;
    }

    if (empty($params['use_hooks'])) {
        $params['use_hooks'] = false;
    }

    if (empty($params['use_footer'])) {
        $params['use_footer'] = false;
    }

    if (empty($params['groupmode'])) {
        $params['groupmode'] = 'date';
    }

    if (empty($params['skip_smarty_hooks'])) {
        $params['skip_smarty_hooks'] = true;
    }

    if (empty($params['skip_smarty_hook'])) {
        $params['skip_smarty_hook'] = array();
    }

    if (empty($params['prevent_reset'])) {
        $params['prevent_reset'] = false;
    }

    if (empty($params['select_key'])) {
        $params['select_key'] = null;
    }

    if (empty($params['group_by'])) {
        $params['group_by'] = null;
    }

    if (empty($params['returncode'])) {
        $params['returncode'] = 'array';
    }

    if (empty($params['joinauthors'])) {
        $params['joinauthors'] = true;
    }

    if (empty($params['joincategories'])) {
        $params['joincategories'] = true;
    }

    // Some functions deal with the $serendipity array. To modify them, we need to store
    // their original contents.
    $old_var = array();
    if (!empty($params['short_archives'])) {
        $old_var['short_archives']     = $serendipity['short_archives'];
        $serendipity['short_archives'] = $params['short_archives'];
    }

    $old_var['skip_smarty_hooks']     = $serendipity['skip_smarty_hooks'];
    $serendipity['skip_smarty_hooks'] = $params['skip_smarty_hooks'];

    $old_var['skip_smarty_hook']     = $serendipity['skip_smarty_hook'];
    $serendipity['skip_smarty_hook'] = $params['skip_smarty_hook'];

    foreach($restore_var_GET_keys AS $key) {
        if (!empty($params[$key])) {
            $old_var['GET'][$key]     = $serendipity['GET'][$key];
            $serendipity['GET'][$key] = $params[$key];
        }
    }

    if (!empty($params['id'])) {
        $entry = serendipity_fetchEntry(
            'id',
            (int)$params['id'],
            $params['full'],
            $params['fetchDrafts']);
    } else {
        $entry = serendipity_fetchEntries(
            $params['range'],
            $params['full'],
            $params['limit'],
            $params['fetchDrafts'],
            $params['modified_since'],
            $params['orderby'],
            $params['filter_sql'],
            $params['noCache'],
            $params['noSticky'],
            $params['select_key'],
            $params['group_by'],
            $params['returncode'],
            $params['joinauthors'],
            $params['joincategories'],
            $params['joinown']
        );

        // Check whether the returned entries shall be grouped specifically
        switch ($params['groupmode']) {
            case 'date':
                // No regrouping required, printEntries() does it for us.
                break;

            case 'category':
                // Regroup by primary category

                $groupdata = array();
                foreach($entry AS $k => $_entry) {

                    if (is_array($entry['categories'])) {
                        $groupkey = $entry['categories'][0];
                    } else {
                        $groupkey = 'none';
                    }
                    $groupdata[$groupkey]['entries'] =& $_entry;
                }
                $entry =& $groupdata;
                break;
        }
    }
    
    if ($params['returncode'] == 'query') {
        return print_r($entry, true);
    }

    serendipity_printEntries(
        $entry,                                 // Entry data
        (!empty($params['id']) ? true : false), // Extended data?
        $params['preview'],                     // Entry preview?
        'ENTRIES',
        false,                                  // Prevent Smarty parsing
        $params['use_hooks'],
        $params['use_footer'],
        ($params['groupmode'] == 'date' ? false : true) // Grouping of $entry
    );

    // Restore the $serendipity array after our modifications.
    if (isset($old_var['short_archives'])) {
        $serendipity['short_archives'] = $old_var['short_archives'];
    }

    if (is_array($old_var['GET'])) {
        foreach($old_var['GET'] AS $key => $val) {
            $serendipity['GET'][$key] = $val;
        }
    }

    $out = serendipity_smarty_fetch($params['block'], $params['template']);
    // Reset array list, because we might be in a nested code call.
    if ($params['prevent_reset'] == false) {
        $serendipity['smarty']->assign('entries', array());
    }
    $serendipity['skip_smarty_hook']  = $old_var['skip_smarty_hook'];
    $serendipity['skip_smarty_hooks'] = $old_var['skip_smarty_hooks'];

    return $out;
}

/**
 * Smarty Function: Shows a commentform
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          id: An entryid to show the commentform for
 *                          url: an optional HTML target link for the form
 *                          comments: Optional array of containing comments
 *                          data: possible pre-submitted values to the input values
 *                          showToolbar: Toggle whether to show extended options of the comment form
 *                          moderate_comments: Toggle whether comments to this entry are allowed
 * @param   object  Smarty object
 * @return  void
 */
function serendipity_smarty_showCommentForm($params, &$smarty) {
    global $serendipity;

    if (!isset($params['id']) || !isset($params['entry'])) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'id' or 'entry' parameter", E_USER_WARNING);
        return;
    }

    if (empty($params['url'])) {
        $params['url'] = $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] . '?url=' . $params['entry']['commURL'];
    }

    if (!isset($params['comments'])) {
        $params['comments'] = NULL;
    }

    if (!isset($params['data'])) {
        $params['data'] = $serendipity['POST'];
    }

    if (!isset($params['showToolbar'])) {
        $params['showToolbar'] = true;
    }

    if (!isset($params['moderate_comments'])) {
        $params['moderate_comments'] = serendipity_db_bool($params['entry']['moderate_comments']);
    }


    $comment_add_data = array(
        'comments_messagestack' => (isset($serendipity['messagestack']['comments']) ? (array)$serendipity['messagestack']['comments'] : array()),
        'is_comment_added'      => (isset($serendipity['GET']['csuccess']) && $serendipity['GET']['csuccess'] == 'true' ? true: false),
        'is_comment_moderate'   => (isset($serendipity['GET']['csuccess']) && $serendipity['GET']['csuccess'] == 'moderate' ? true: false)
    );

    $smarty->assign($comment_add_data);

    serendipity_displayCommentForm(
        $params['id'],
        $params['url'],
        $params['comments'],
        $params['data'],
        $params['showToolbar'],
        $params['moderate_comments'],
        $params['entry']
    );

    return true;
}

/**
 * Smarty Function: Be able to include the output of a sidebar plugin within a smarty template
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          class: The classname of the plugin to show
 *                          id: An ID of a plugin to show
 *                          side: The side of a plugin to show (left|right|hidden)
 *                          negate: Revert previous filters
 * @param   object  Smarty object
 * @return  string      The Smarty HTML response
 */
function serendipity_smarty_showPlugin($params, &$smarty) {
    global $serendipity;

    if (!isset($params['class']) && !isset($params['id'])) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'class' or 'id' parameter", E_USER_WARNING);
        return;
    }

    if (!isset($params['side'])) {
        $params['side'] = '*';
    }

    if (!isset($params['negate'])) {
        $params['negate'] = null;
    }
    if (empty($params['template'])) {
        $params['template'] = 'sidebar.tpl';
    }

    $out = serendipity_plugin_api::generate_plugins($params['side'], null, $params['negate'], $params['class'], $params['id'], $params['template']);

    if (empty($out) && !empty($params['empty'])) {
        return $params['empty'];
    }

    return $out;
}

/**
 * Smarty Function: Get total count for specific objects
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                      what: The type of count to show: "entries", "trackbacks", "comments"
 * @param   object      Smarty object
 * @return  string      The Smarty HTML response
 */
function serendipity_smarty_getTotalCount($params, &$smarty) {
    if (!isset($params['what'])) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'what' parameter", E_USER_WARNING);
        return;
    }

    return serendipity_getTotalCount($params['what']);
}

/**
 * Smarty Function: Be able to execute the hook of an event plugin and return its output
 *
 * Listens to specific serendipity global variables:
 *  $serendipity['skip_smarty_hooks'] - If TRUE, no plugins will be executed at all
 *  $serendipity['skip_smarty_hook']  - Can be set to an array of plugin hooks to NOT execute
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          hook: The name of the event hook
 *                          hookAll: boolean whether unknown hooks shall be executed
 *                          data: The $eventData to an event plugin
 *                          addData: the $addData to an event plugin
 * @param   object  Smarty object
 * @return null
 */
function serendipity_smarty_hookPlugin($params, &$smarty) {
    global $serendipity;
    static $hookable = array('frontend_header',
                             'entries_header',
                             'entries_footer',
                             'frontend_comment',
                             'frontend_footer');
    if (!isset($params['hook'])) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'hook' parameter", E_USER_WARNING);
        return;
    }

    if (!in_array($params['hook'], $hookable) && $params['hookAll'] != 'true') {
        trigger_error("Smarty Error: " . __FUNCTION__ .": illegal hook '". $params['hook'] ."' (" . $params['hookAll'] . ")", E_USER_WARNING);
        return;
    }

    // Smarty hooks can be bypassed via an internal variable (temporarily)
    if (isset($serendipity['skip_smarty_hooks']) && $serendipity['skip_smarty_hooks']) {
        return;
    }

    // A specific hook can also be bypassed by creating an associative array like this:
    // $serendipity['skip_smarty_hook'] = array('entries_header');
    // That would only skip the entries_header event hook, but allow all others.
    // Of course it cannot be used in conjunction with the all-blocking skip_smarty_hooks.
    if (isset($serendipity['skip_smarty_hook']) && is_array($serendipity['skip_smarty_hook']) && isset($serendipity['skip_smarty_hook'][$params['hook']])) {
        return;
    }

    if (!isset($params['data'])) {
        $params['data'] = &$serendipity;
    }

    if (!isset($params['addData'])) {
        $params['addData'] = null;
    }

    serendipity_plugin_api::hook_event($params['hook'], $params['data'], $params['addData']);
}

/**
 * Smarty Modifier: Be able to execute the hook of an event plugin and return its output, uses a REFERENCED variable.
 *
 * Listens to specific serendipity global variables:
 *  $serendipity['skip_smarty_hooks'] - If TRUE, no plugins will be executed at all
 *  $serendipity['skip_smarty_hook']  - Can be set to an array of plugin hooks to NOT execute
 *
 * @access public
 * @param   mixed       EventData (referenced)
 * @param   string      Event hook name
 * @param   mixed       Additional data
 * @return null
 */
function serendipity_smarty_refhookPlugin(&$eventData, $hook, $addData = null) {
    global $serendipity;

    if (!isset($hook)) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'hook' parameter", E_USER_WARNING);
        return;
    }

    // Smarty hooks can be bypassed via an internal variable (temporarily)
    if (isset($serendipity['skip_smarty_hooks']) && $serendipity['skip_smarty_hooks']) {
        return;
    }

    // A specific hook can also be bypassed by creating an associative array like this:
    // $serendipity['skip_smarty_hook'] = array('entries_header');
    // That would only skip the entries_header event hook, but allow all others.
    // Of course it cannot be used in conjunction with the all-blocking skip_smarty_hooks.
    if (isset($serendipity['skip_smarty_hook']) && is_array($serendipity['skip_smarty_hook']) && isset($serendipity['skip_smarty_hook'][$hook])) {
        return;
    }

    serendipity_plugin_api::hook_event($hook, $eventData, $addData);
}

/**
 * Smarty Function: Prints a list of sidebar plugins
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          side: The plugin side to show (left|right|hidden)
 * @param   object  Smarty object
 * @return string       The HTML code of a plugin's output
 */
function serendipity_smarty_printSidebar($params, &$smarty) {
    if ( !isset($params['side']) ) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'side' parameter", E_USER_WARNING);
        return;
    }

    if (isset($params['template'])) {
        return serendipity_plugin_api::generate_plugins($params['side'], '', false, null, null, $params['template']);
    } else {
        return serendipity_plugin_api::generate_plugins($params['side']);
    }
}

/**
 * Smarty Function: Get the full path to a template file
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          file: The filename you want to include (any file within your template directry or the 'default' template if not found)
 * @param   object  Smarty object
 * @return  string      The requested filename with full path
 */
function serendipity_smarty_getFile($params, &$smarty) {
    if ( !isset($params['file']) ) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'file' parameter", E_USER_WARNING);
        return;
    }
    return serendipity_getTemplateFile($params['file']);
}


/**
 * Smarty Function: Picks a specified key from an array and returns it
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          array: The array you want to check
 *                          key: The keyname
 *                          default: What (string) to return when array does not contain the key.
 * @param   object       Smarty object
 * @return  string      The requested filename with full path
 */
function serendipity_smarty_pickKey($params, &$smarty) {
    if ( !isset($params['array']) ) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'array' parameter", E_USER_WARNING);
        return;
    }

    if ( !isset($params['key']) ) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'key' parameter", E_USER_WARNING);
        return;
    }

    return serendipity_pickKey($params['array'], $params['key'], $params['default']);
}


/**
 * Smarty Function: Get a permalink for an entry
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          entry: $entry data to pull title etc. out of
 *                          is_comments: Whether a permalink for a comment feed should be embedded
 * @param   object  Smarty object
 * @return string       The permalink
 */
function serendipity_smarty_rss_getguid($params, &$smarty) {
    if ( !isset($params['entry']) ) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'entry' parameter", E_USER_WARNING);
        return;
    }
    if ( !isset($params['is_comments']) ) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'is_comments' parameter", E_USER_WARNING);
        return;
    }

    return serendipity_rss_getguid($params['entry'], $params['is_comments']);
}

/**
 * Smarty Modifier: Format a timestamp
 *
 * @access public
 * @param   int     The timestamp to format (unix seconds)
 * @param   string  The strftime() format options on how to format this string
 * @param   boolean Shall timezone conversions be applied?
 * @param   boolean Try to detect a valid timestamp?
 * @param   boolean Use strftime or date?
 * @return
 */
function serendipity_smarty_formatTime($timestamp, $format, $useOffset = true, $detectTimestamp = false, $useDate = false) {
    if ($detectTimestamp !== false && stristr($detectTimestamp, 'date') === false) {
        return $timestamp;
    }

    if (defined($format)) {
        return serendipity_formatTime(constant($format), $timestamp, $useOffset, $useDate);
    } else {
        return serendipity_formatTime($format, $timestamp, $useOffset, $useDate);
    }
}

/**
 * Smarty Function: Show comments to an entry
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          entry: The $entry data
 *                          mode: The default viewmode (threaded/linear)
 * @param   object  Smarty object
 * @return  string      The HTML code with the comments
 */
function &serendipity_smarty_printComments($params, &$smarty) {
    global $serendipity;

    if (!isset($params['entry'])) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'entry' parameter", E_USER_WARNING);
        return;
    }

    if (!isset($params['mode'])) {
        $params['mode'] = VIEWMODE_THREADED;
    }

    if (isset($params['order']) && $params['order'] != 'DESC') {
        $params['order'] = 'ASC';
    }

    $comments = serendipity_fetchComments($params['entry'], (int)$params['limit'], 'co.id ' . $params['order']);

    if (!empty($serendipity['POST']['preview'])) {
        $comments[] =
            array(
                    'email'     => $serendipity['POST']['email'],
                    'author'    => $serendipity['POST']['name'],
                    'body'      => $serendipity['POST']['comment'],
                    'url'       => $serendipity['POST']['url'],
                    'parent_id' => $serendipity['POST']['replyTo'],
                    'timestamp' => time()
            );
    }

    if (empty($params['depth'])) {
        $params['depth'] = 0;
    }
    
    if (empty($params['trace'])) {
        $params['trace'] = null;
    }

    if (empty($params['block'])) {
        $params['block'] = 'COMMENTS';
    }
    
    if (empty($params['template'])) {
        $params['template'] = 'comments.tpl';
    }
    
    $out = serendipity_printComments($comments, $params['mode'], $params['depth'], $params['trace'], $params['block'], $params['template']);
    return $out;
}

/**
 * Smarty Function: Show Trackbacks
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                          entry: The $entry data for the trackbacks
 * @param   object  Smarty object
 * @return
 */
function &serendipity_smarty_printTrackbacks($params, &$smarty) {
    if ( !isset($params['entry']) ) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'entry' parameter", E_USER_WARNING);
        return;
    }

    $trackbacks =& serendipity_fetchTrackbacks($params['entry']);

    if (empty($params['depth'])) {
        $params['depth'] = 0;
    }

    if (empty($params['trace'])) {
        $params['trace'] = null;
    }

    if (empty($params['block'])) {
        $params['block'] = 'TRACKBACKS';
    }

    if (empty($params['template'])) {
        $params['template'] = 'trackbacks.tpl';
    }

    $out = serendipity_printComments($trackbacks, VIEWMODE_LINEAR, $params['depth'], $params['trace'], $params['block'], $params['template']);
    return $out;
}

/**
 * Get the Serendipity dimensions for an image
 *
 * @access public
 * @param   array       Smarty parameter input array:
 *                      file: The image file to get image data for
 *                      assign: The variable to assign the image data array to
 * @param   object      Smarty object
 * @return  string      Empty
 */
function serendipity_smarty_getImageSize($params, &$smarty) {
    global $serendipity;

    if (!isset($params['file'])) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'file' parameter", E_USER_WARNING);
        return;
    } 
    if (!isset($params['assign'])) {
        trigger_error("Smarty Error: " . __FUNCTION__ .": missing 'assign' parameter", E_USER_WARNING);
        return;
    }

    // Is it a correct filesystem absolute path?
    $file = $params['file'];
    // Most likely the user specified an HTTP path
    if (!file_exists($file)) {
        $file = $_SERVER['DOCUMENT_ROOT'] . $file;
    }
    // Maybe wants a template file (returns filesystem path)
    if (!file_exists($file)) {
        $file = serendipity_getTemplateFile($params['file']);
    }
    // If no file, trigger an error
    if (!file_exists($file)) {
        trigger_error("Smarty Error: " . __FUNCTION__ .': file ' . $params['file'] . NOT_FOUND . ' ', E_USER_WARNING);
        return;
    }
    $smarty->assign($params['assign'], serendipity_getimagesize($file));
}

/**
 * Smarty Prefilter: Replace constants to direkt $smarty.const. access
 *
 * @access public
 * @param   string  Template source content
 * @param   object  Smarty object
 * @return
 */
function &serendipity_replaceSmartyVars($tpl_source, &$smarty) {
    $tpl_source = str_replace('$CONST.', '$smarty.const.', $tpl_source);
    return $tpl_source;
}

/**
 * Initialize the Smarty framework for use in Serendipity
 *
 * @access public
 * @return null
 */
function serendipity_smarty_init($vars = array()) {
    global $serendipity, $template_config, $template_global_config, $template_config_groups;

    if (!isset($serendipity['smarty'])) {
        $template_dir = $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'];
        if (!defined('IN_serendipity_admin') && file_exists($template_dir . '/template.inc.php')) {
            // If this file exists, a custom template engine will be loaded.
            // Beware: Smarty is used in the Admin backend, despite of this.
            include $template_dir . '/template.inc.php';
        } else {
            // Set a session variable if Smarty fails:
            $prev_smarty = $_SESSION['no_smarty'];
            $_SESSION['no_smarty'] = true;

            if (LANG_CHARSET != 'UTF-8') {
                @define('SMARTY_RESOURCE_CHAR_SET', LANG_CHARSET);
            }
            
            // Default Smarty Engine will be used
            @define('SMARTY_DIR', S9Y_PEAR_PATH . 'Smarty/libs/');
            
            if (!class_exists('Smarty')) {
                include SMARTY_DIR . 'Smarty.class.php';
            }

            if (!class_exists('Smarty')) {
                return false;
            }

            // Load serendipity smarty class loading class
            if (!class_exists('Serendipity_Smarty')) {
                include 'serendipity_smarty_class.inc.php';
            }
            
            if (!class_exists('Serendipity_Smarty')) {
                return false;
            }

            // set smarty instance
            #$serendipity['smarty'] = new Serendipity_Smarty;
            // initialize smarty object by instance
            $serendipity['smarty'] = Serendipity_Smarty::getInstance();
            // debug moved to class

            // Hooray for Smarty:
            $_SESSION['no_smarty'] = $prev_smarty;

            // enable security policy by instance of the Smarty_Security class
            $serendipity['smarty']->enableSecurity('Serendipity_Smarty_Security_Policy'); 

            // debugging...
            #echo '<pre>';print_r($serendipity['smarty']);echo '</pre>';#exit;
            #$serendipity['smarty']->testInstall();exit;

            /** 
             * prüfe auf eventuelle API Änderungen in 3.2 [smarty_modifier_foobar, --> [smarty_modifier_foobar, smarty_function_foobar, smarty_block_foobar] (siehe class) ] 
             * smarty_modifier_foobar(Smarty $smarty, $string, …) vs. smarty_modifier_foobar($string, …)
             **/
            $serendipity['smarty']->registerPlugin('modifier', 'makeFilename', 'serendipity_makeFilename');
            $serendipity['smarty']->registerPlugin('modifier', 'xhtml_target', 'serendipity_xhtml_target');
            $serendipity['smarty']->registerPlugin('modifier', 'emptyPrefix', 'serendipity_emptyPrefix');
            $serendipity['smarty']->registerPlugin('modifier', 'formatTime', 'serendipity_smarty_formatTime');
            $serendipity['smarty']->registerPlugin('modifier', 'serendipity_utf8_encode', 'serendipity_utf8_encode');
            $serendipity['smarty']->registerPlugin('modifier', 'ifRemember', 'serendipity_ifRemember');
            $serendipity['smarty']->registerPlugin('modifier', 'checkPermission', 'serendipity_checkPermission');
            $serendipity['smarty']->registerPlugin('modifier', 'serendipity_refhookPlugin', 'serendipity_smarty_refhookPlugin');

            $serendipity['smarty']->registerPlugin('function', 'serendipity_printSidebar', 'serendipity_smarty_printSidebar');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_hookPlugin', 'serendipity_smarty_hookPlugin');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_showPlugin', 'serendipity_smarty_showPlugin');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_getFile', 'serendipity_smarty_getFile');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_printComments', 'serendipity_smarty_printComments');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_printTrackbacks', 'serendipity_smarty_printTrackbacks');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_rss_getguid', 'serendipity_smarty_rss_getguid');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_fetchPrintEntries', 'serendipity_smarty_fetchPrintEntries');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_getTotalCount', 'serendipity_smarty_getTotalCount');
            $serendipity['smarty']->registerPlugin('function', 'pickKey', 'serendipity_smarty_pickKey');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_showCommentForm', 'serendipity_smarty_showCommentForm');
            $serendipity['smarty']->registerPlugin('function', 'serendipity_getImageSize', 'serendipity_smarty_getImageSize');
            
            $serendipity['smarty']->registerFilter('pre', 'serendipity_replaceSmartyVars');
            
        }

        if (!isset($serendipity['smarty_raw_mode'])) {
            if (file_exists($serendipity['smarty']->getConfigDir(0) . '/layout.php') && $serendipity['template'] != 'default') {
                $serendipity['smarty_raw_mode'] = true;
            } else {
                $serendipity['smarty_raw_mode'] = false;
            }
        }

        if (!isset($serendipity['smarty_file'])) {
            $serendipity['smarty_file'] = 'index.tpl';
        }

        $category      = false;
        $category_info = array();
        if (isset($serendipity['GET']['category'])) {
            $category = (int)$serendipity['GET']['category'];
            if (isset($GLOBALS['cInfo'])) {
                $category_info = $GLOBALS['cInfo'];
            } else {
                $category_info = serendipity_fetchCategoryInfo($category);
            }
        }

        if (!isset($serendipity['smarty_vars']['head_link_stylesheet'])) {
            $serendipity['smarty_vars']['head_link_stylesheet'] = serendipity_rewriteURL('serendipity.css');
        }

        $serendipity['smarty']->assign(
            array(
                'head_charset'              => LANG_CHARSET,
                'head_version'              => $serendipity['version'],
                'head_title'                => $serendipity['head_title'],
                'head_subtitle'             => $serendipity['head_subtitle'],
                'head_link_stylesheet'      => $serendipity['smarty_vars']['head_link_stylesheet'],

                'is_xhtml'                  => true,
                'use_popups'                => $serendipity['enablePopup'],
                'is_embedded'               => (!$serendipity['embed'] || $serendipity['embed'] === 'false' || $serendipity['embed'] === false) ? false : true,
                'is_raw_mode'               => $serendipity['smarty_raw_mode'],
                'is_logged_in'              => serendipity_userLoggedIn(),

                'entry_id'                  => (isset($serendipity['GET']['id']) && is_numeric($serendipity['GET']['id'])) ? $serendipity['GET']['id'] : false,
                'is_single_entry'           => (isset($serendipity['GET']['id']) && is_numeric($serendipity['GET']['id'])),

                'blogTitle'                 => $serendipity['blogTitle'],
                'blogSubTitle'              => (!empty($serendipity['blogSubTitle']) ? $serendipity['blogSubTitle'] : ''),
                'blogDescription'           => $serendipity['blogDescription'],

                'serendipityHTTPPath'       => $serendipity['serendipityHTTPPath'],
                'serendipityDefaultBaseURL' => $serendipity['defaultBaseURL'],
                'serendipityBaseURL'        => $serendipity['baseURL'],
                'serendipityRewritePrefix'  => $serendipity['rewrite'] == 'none' ? $serendipity['indexFile'] . '?/' : '',
                'serendipityIndexFile'      => $serendipity['indexFile'],
                'serendipityVersion'        => ($serendipity['expose_s9y'] ? $serendipity['version'] : ''),

                'lang'                      => $serendipity['lang'],
                'category'                  => $category,
                'category_info'             => $category_info,
                'template'                  => $serendipity['template'],

                'dateRange'                 => (!empty($serendipity['range']) ? $serendipity['range'] : array())
            )
        );

        if (count($vars) > 0) {
            $serendipity['smarty']->assign($vars);
        }

        // For advanced usage, we allow template authors to create a file 'config.inc.php' where they can
        // setup custom smarty variables, modifiers etc. to use in their templates.
        @include_once $serendipity['smarty']->getConfigDir(0) . '/config.inc.php';

        if (is_array($template_loaded_config)) {
            $template_vars =& $template_loaded_config;
            $serendipity['smarty']->assignByRef('template_option', $template_vars);
        } elseif (is_array($template_config)) {
            $template_vars =& serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option']);
            $serendipity['smarty']->assignByRef('template_option', $template_vars);
        }
    }

    return true;
}

/**
 * Purge compiled Smarty Templates
 *
 * @access public
 * @return null
 */
function serendipity_smarty_purge() {
    global $serendipity;

    /* Attempt to init Smarty, brrr */
    serendipity_smarty_init();

    $files = serendipity_traversePath($serendipity['smarty']->getCompileDir() . DIRECTORY_SEPARATOR, '', false, '/.+\.tpl\.php$/');

    if ( !is_array($files) ) {
        return false;
    }

    foreach ( $files as $file ) {
        @unlink($serendipity['smarty']->getCompileDir() . DIRECTORY_SEPARATOR . $file['name']);
    }
}

/**
 * Shut down the Smarty Framework, output all parsed data
 *
 * This function is meant to be used in embedded installations, like in Gallery.
 * Function can be called from foreign applications. ob_start() needs to
 * have been called before, and will be parsed into Smarty here
 *
 * @access public
 * @param   string  The path to Serendipity
 * @return null
 */
function serendipity_smarty_shutdown($serendipity_directory = '') {
    global $serendipity;

    #$cwd = getcwd();
    chdir($serendipity_directory);
    $raw_data = ob_get_contents();
    ob_end_clean();
    $serendipity['smarty']->assignByRef('content_message', $raw_data);

    serendipity_smarty_fetch('CONTENT', 'content.tpl');
    $serendipity['smarty']->assign('ENTRIES', '');
    if (empty($serendipity['smarty_file'])) {
        $serendipity['smarty_file'] = '404.tpl';
    }
    $serendipity['smarty']->display(serendipity_getTemplateFile($serendipity['smarty_file'], 'serendipityPath'));
}
