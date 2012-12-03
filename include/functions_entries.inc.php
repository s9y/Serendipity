<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_ENTRIES')) {
    return;
}
@define('S9Y_FRAMEWORK_ENTRIES', true);

/**
 * Delete a category or range of categories
 *
 * @access public
 * @param   string  Holds the SQL string to pass to the 'BETWEEN' command. Like '1 5' would delete categories 1-5.
 * @param   string  Holds the optional SQL string that contains an extra safety check so that only categories can be deleted if the user is an author of the category.
 * @return  array   The DB result
 */
function serendipity_deleteCategory($category_range, $admin_category) {
    global $serendipity;

    if (!serendipity_checkPermission('adminCategoriesDelete')) {
        return false;
    }

    serendipity_plugin_api::hook_event('backend_category_delete', $category_range);

    return serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}category WHERE category_left BETWEEN {$category_range} {$admin_category}");
}

/**
 * Fetch a SQL ID subset of the category tree
 *
 * @access public
 * @param   int     The Id of the parent category to fetch categorie childs from. (0: all)
 * @return  array   An associative array of the left and right category next to the chosen one
 */
function serendipity_fetchCategoryRange($categoryid) {
    global $serendipity;

    $res =& serendipity_db_query("SELECT category_left, category_right, hide_sub FROM {$serendipity['dbPrefix']}category WHERE categoryid='". (int)$categoryid ."'");
    if (!is_array($res) || !isset($res[0]['category_left']) || !isset($res[0]['category_right'])) {
        $res = array(array('category_left' => 0, 'category_right' => 0));
    }

    if ($res[0]['hide_sub'] == 1) {
        // Set ranges only to own category. Patch by netmorix
        return array('category_left' => $res[0]['category_left'], 'category_right' => $res[0]['category_left']);
    } else {
        return array('category_left' => $res[0]['category_left'], 'category_right' => $res[0]['category_right']);
    }
}

/**
 * Returns SQL code to use when fetching entries that are contained within multiple categories
 *
 * @access public
 * @param  string   A listing of category ids to check, separated by ";"
 * @param  boolean  Toggle whether to include or exclude entries of this category
 * @return string   Returns the SQL code for selecting entries of the calculated categories
 */
function serendipity_getMultiCategoriesSQL($cats, $invert = false) {
    global $serendipity;

    $mcategories   = explode(';', $cats);
    $cat_sql_array = array();
    foreach($mcategories AS $categoryid) {
        $categoryid  = (int)$categoryid;

        if ($categoryid != 0) {
            $cat_sql_array[] = " (c.category_left " . ($invert ? " NOT " : "") . " BETWEEN " . implode(' AND ', serendipity_fetchCategoryRange($categoryid)) . ')';
        }
    }
    
    if (count($cat_sql_array) < 1) {
        return '';
    }

    return '(' . implode(($invert ? ' AND ' : ' OR '), $cat_sql_array) . ')';
}

/**
 * Return the category properties of a specific category
 *
 * Either use the first or the second parameter to select a category by ID or name. It's not
 * meant to be used with both parameters specified.
 *
 * @access public
 * @param   int     The ID of the category to fetch
 * @param   string  The Name of a category to fetch
 * @return  array   Returns an array of category properties
 */
function serendipity_fetchCategoryInfo($categoryid, $categoryname = '') {
    global $serendipity;

    if (!empty($categoryname)) {
        $query = "SELECT
                         c.authorid,
                         c.categoryid,
                         c.category_name,
                         c.category_description,
                         c.category_icon,
                         c.parentid,
                         c.hide_sub
                    FROM {$serendipity['dbPrefix']}category AS c
                   WHERE category_name = '" . serendipity_db_escape_string($categoryname) . "'";

        $ret =& serendipity_db_query($query);
        return $ret[0];
    } else {
        $query = "SELECT
                         c.authorid,
                         c.categoryid,
                         c.category_name,
                         c.category_description,
                         c.category_icon,
                         c.parentid,
                         c.hide_sub
                    FROM {$serendipity['dbPrefix']}category AS c
                   WHERE categoryid = " . (int)$categoryid;

        $ret =& serendipity_db_query($query);
        return $ret[0];
    }
}

/**
 * Fetch a list of all category properties to a specific entry ID
 *
 * @access public
 * @param   int     The ID of the entry
 * @return  array   The array of associated categories to that entry
 */
function &serendipity_fetchEntryCategories($entryid) {
  global $serendipity;

    if (is_numeric($entryid)) {
        $query = "SELECT
                         c.categoryid,
                         c.category_name,
                         c.category_description,
                         c.category_icon,
                         c.parentid
                    FROM {$serendipity['dbPrefix']}category AS c
              INNER JOIN {$serendipity['dbPrefix']}entrycat AS ec
                      ON ec.categoryid = c.categoryid
                   WHERE ec.entryid = {$entryid}
                ORDER BY c.category_name ASC";

        $cat =& serendipity_db_query($query);
        if (!is_array($cat)) {
            $arr = array();
            return $arr;
        } else {
            return $cat;
        }
    }
}


/**
 * Fetch a list of entries
 *
 * The most central and versatile function of Serendipity, allows you to fetch entries
 * depending on a LOT of options.
 * One of the parameters missing is a restriction by category. You need to do that by
 * setting the superglobal $serendipity['GET']['category'] to the category you want to fetch.
 * Separate multiple categories by ";".
 * Other "external" variables that affect this function are:
 *  $serendipity['short_archives']      - Indicates if the short archive listing is wanted, without the full entry text
 *  $serendipity['range']               - If $range is not used, the time restriction is fetched from this array, which holds a start timestamp and end timestamp.
 *  $serendipity['GET']['category']     - The category ID to restrict fetching entries from (can be seperated by ";")
 *  $serendipity['GET']['hide_category']- The category ID to NOT fetch entries from (can be seperated by ";")
 *  $serendipity['GET']['viewAuthor']   - Only fetch entries by this author
 *  $serendipity['GET']['page']         - The page number to show entries, for pagination
 *
 * If you want to use any of these options, set the variable before calling serendipity_fetchEntries(). You can reset the variables to their original content after the function call, if you need to.
 *
 * Several options perform different commands when different types are passed, like the $range
 * parameter which can either be a string or an array with START/END range.
 *
 * @access  public
 * @param   mixed       Restricts fetching entries to a specific timespan. Behaves differently depending on the type:
 *                      Numeric:
 *                        YYYYMMDD - Shows all entries from YYYY-MM-DD.
 *                                   If DD is "00", it will show all entries from that month.
 *                                   If DD is any other number, it will show entries of that specific day.
 *                      2-Dimensional Array:
 *                        Key #0   - Specifies the start timestamp (unix seconds)
 *                        Key #1   - Specifies the end timestamp (unix seconds)
 *                      Other (null, 3-dimensional Array, ...):
 *                        Entries newer than $modified_since will be fetched
 * @param   boolean     Indicates if the full entry will be fetched (body+extended: TRUE), or only the body (FALSE).
 * @param   string      Holds a "Y" or "X, Y" string that tells which entries to fetch. X is the first entry offset, Y is number of entries. If not set, the global fetchLimit will be applied (15 entries by default)
 * @param   boolean     Indicates whether drafts should be fetched (TRUE) or not
 * @param   int         Holds a unix timestamp to be used in conjunction with $range, to fetch all entries newer than this timestamp
 * @param   string      Holds the SQL "ORDER BY" statement.
 * @param   string      Can contain any SQL code to inject into the central SQL statement for fetching the entry
 * @param   boolean     If set to TRUE, all entries will be fetched from scratch and any caching is ignored
 * @param   boolean     If set to TRUE, all sticky entries will NOT be fetched.
 * @param   string      Can contain a SQL statement on which keys to select. Plugins can also set this, pay attention!
 * @param   string      Can contain a SQL statement on how to group the query. Plugins can also set this, pay attention!
 * @param   string      If set to "array", the array of entries will be returned. "flat-array" will only return the articles without their entryproperties. "single" will only return a 1-dimensional array. "query" will only return the used SQL.
 * @param   bool        Should an SQL-join be made to the AUTHORS DB table?
 * @param   bool        Should an SQL-join be made to the CATEGORIES DB table?
 * @param   string      SQL-Parts to add to JOIN
 * @return  array       Holds the super-array of all entries with all additional information
 */
function &serendipity_fetchEntries($range = null, $full = true, $limit = '', $fetchDrafts = false, $modified_since = false, $orderby = 'timestamp DESC', $filter_sql = '', $noCache = false, $noSticky = false, $select_key = null, $group_by = null, $returncode = 'array', $joinauthors = true, $joincategories = true, $joinown = null) {
    global $serendipity;

    $cond = array();
    $cond['orderby'] = $orderby;
    if (isset($serendipity['short_archives']) && $serendipity['short_archives']) {
        // In the short listing of all titles for a month, we don't want to have a limit applied. And we don't need/want toe
        // full article body (consumes memory)
        $limit   = '';
        $full    = false;
    }

    if ($full === true) {
        $noCache = true; // So no entryproperties related to body/extended caching will be loaded
        $body = ', e.body, e.extended';
    } else {
        $body = '';
    }

    if ($fetchDrafts === false) {
        $drafts = "isdraft = 'false'";
    }

    if ($limit != '') {
        $serendipity['fetchLimit'] = $limit;
    }

    /* Attempt to grab range from $serendipity, if $range is not an array or null */
    if (!is_array($range) && !is_null($range) && isset($serendipity['range'])) {
        $range = $serendipity['range'];
    }

    if (is_numeric($range)) {
        $year  = (int)substr($range, 0, 4);
        $month = (int)substr($range, 4, 2);
        $day   = (int)substr($range, 6, 2);

        $startts = serendipity_serverOffsetHour(mktime(0, 0, 0, $month, ($day == 0 ? 1 : $day), $year), true);

        if ($day == 0) {
            $month++;
        } else {
            $day++;
        }

        $endts = serendipity_serverOffsetHour(mktime(0, 0, 0, $month, ($day == 0 ? 1 : $day), $year), true);

        $cond['and'] = " WHERE e.timestamp >= $startts AND e.timestamp <= $endts";
    } elseif (is_array($range) && count($range)==2) {
        $startts = serendipity_serverOffsetHour((int)$range[0], true);
        $endts   = serendipity_serverOffsetHour((int)$range[1], true);
        $cond['and'] = " WHERE e.timestamp >= $startts AND e.timestamp <= $endts";
    } else {
        if ($modified_since) {
            $unix_modified = strtotime($modified_since);
            if ($unix_modified != -1) {
                $cond['and'] = ' WHERE last_modified >= ' . (int)$unix_modified;
                if (!empty($limit)) {
                    $limit = ($limit > $serendipity['max_fetch_limit'] ? $limit : $serendipity['max_fetch_limit']);
                }
                $cond['orderby'] = 'last_modified DESC';
            }
        }
    }

    if (!empty($drafts)) {
        if (!empty($cond['and'])) {
            $cond['and'] .= " AND $drafts";
        } else {
            $cond['and'] = "WHERE $drafts";
        }
    }

    if (isset($serendipity['GET']['viewAuthor'])) {
        $multiauthors = explode(';', $serendipity['GET']['viewAuthor']);
        $multiauthors_sql = array();
        foreach($multiauthors AS $multiauthor) {
            $multiauthors_sql[] = 'e.authorid = ' . (int)$multiauthor;
        }

        $cond['and'] .= ' AND (' . implode(' OR ', $multiauthors_sql) . ')';
    }

    $cat_sql = '';
    if (isset($serendipity['GET']['category'])) {
        $cat_sql = serendipity_getMultiCategoriesSQL($serendipity['GET']['category']);
    } elseif (isset($serendipity['GET']['hide_category'])) {
        $cat_sql = serendipity_getMultiCategoriesSQL($serendipity['GET']['hide_category'], true);
    }

    if (!empty($cat_sql)) {
        if (!empty($cond['and'])) {
            $cond['and'] .= " AND ($cat_sql)";
        } else {
            $cond['and'] = "WHERE ($cat_sql)";
        }
    }

    if (isset($serendipity['GET']['adminModule']) && $serendipity['GET']['adminModule'] == 'entries' && !serendipity_checkPermission('adminEntriesMaintainOthers')) {
        if (!empty($cond['and'])) {
            $cond['and'] .= " AND e.authorid = '" . $serendipity['authorid'] . "'";
        } else {
            $cond['and'] = "WHERE e.authorid = '" . $serendipity['authorid'] . "'";
        }
    }

    if (!isset($serendipity['GET']['adminModule']) && !serendipity_db_bool($serendipity['showFutureEntries'])) {
        if (!empty($cond['and'])) {
            $cond['and'] .= " AND e.timestamp <= " . serendipity_db_time();
        } else {
            $cond['and'] = "WHERE e.timestamp <= " . serendipity_db_time();
        }
    }

    if (!empty($filter_sql)) {
        if (!empty($cond['and'])) {
            $cond['and'] .= ' AND ' . $filter_sql;
        } else {
            $cond['and'] = 'WHERE ' . $filter_sql;
        }
    }

    if ($serendipity['dbType'] == 'postgres' ||
        $serendipity['dbType'] == 'pdo-postgres') {
        $cond['group']    = '';
        $cond['distinct'] = 'DISTINCT';
    } else {
        $cond['group']    = 'GROUP BY e.id';
        $cond['distinct'] = '';
    }

    if (!is_null($group_by)) {
        $cond['group'] = $group_by;
    }

    serendipity_plugin_api::hook_event('frontend_fetchentries', $cond, array('noCache' => $noCache, 'noSticky' => $noSticky, 'source' => 'entries'));

    if (is_null($select_key)) {
        $select_key = "{$cond['distinct']}
                    {$cond['addkey']}

                    e.id,
                    e.title,
                    e.timestamp,
                    e.comments,
                    e.exflag,
                    e.authorid,
                    e.trackbacks,
                    e.isdraft,
                    e.allow_comments,
                    e.last_modified,

                    a.realname AS author,
                    a.username AS loginname,
                    a.email";
    }

    serendipity_ACL_SQL($cond);

    // Store the unique query condition for entries for later reference, like getting the total article count.
    $serendipity['fullCountQuery'] = "
                FROM
                    {$serendipity['dbPrefix']}entries AS e";
    if ($joinauthors) {
        $serendipity['fullCountQuery'] .= "
                    LEFT JOIN {$serendipity['dbPrefix']}authors a
                        ON e.authorid = a.authorid";
    }

    if ($joincategories || !isset($serendipity['enableACL']) || $serendipity['enableACL'] == true) {
        // Category joins are REQUIRED when the ACLs are enabled.
        $serendipity['fullCountQuery'] .= "
                    LEFT JOIN {$serendipity['dbPrefix']}entrycat ec
                        ON e.id = ec.entryid
                    LEFT JOIN {$serendipity['dbPrefix']}category c
                        ON ec.categoryid = c.categoryid";
    }
    
    if ($joinown) {
        $cond['joins'] .= $joinown;
    }

    $serendipity['fullCountQuery'] .="
                    {$cond['joins']}
                    {$cond['and']}";

    if (!empty($limit)) {
        if (isset($serendipity['GET']['page']) && ($serendipity['GET']['page'] > 1 || serendipity_db_bool($serendipity['archiveSortStable'])) && !strstr($limit, ',')) {
            if (serendipity_db_bool($serendipity['archiveSortStable'])) {
                $totalEntries = serendipity_getTotalEntries();
                
                $totalPages = ceil($totalEntries / $limit);
                if ($totalPages <= 0 ) {
                    $totalPages = 1;
                }

                if ($serendipity['GET']['page'] == $totalPages) {
                    $limit = serendipity_db_limit(0, $limit);
                } else if ($serendipity['GET']['page'] == $totalPages - 1) {
                    $limit = serendipity_db_limit($limit, ($totalEntries - (($totalPages -2) * $limit)) - $limit);
                } else {
                    $limit = serendipity_db_limit(($totalEntries - ($limit * $serendipity['GET']['page'])), $limit);
                }
            } else {
                $limit = serendipity_db_limit(($serendipity['GET']['page']-1) * $limit, $limit);
            }
        }

        $limit = serendipity_db_limit_sql($limit);
    }

    $query = "SELECT $select_key
                     $body
                     {$serendipity['fullCountQuery']}
                     {$cond['group']}
                     {$cond['having']}
                     " . (!empty($cond['orderby']) ? "ORDER BY {$cond['orderby']}" : "") . "
                     $limit";

    // DEBUG:
    // die($query);
    $fetch_single = ($returncode == 'single' ? true: false);

    if ($returncode == 'query') {
        return $query;
    }

    $ret =& serendipity_db_query($query, $fetch_single, 'assoc');

    if (is_string($ret)) {
        die("Query failed: $ret");
    }

    if (is_array($ret) && $returncode == 'array') {
        // The article's query LIMIT operates on a flattened entries layer so that
        // an article having 5 associated categories won't count as 5 entries.
        // But to store the expanded list of categories, we need to send a new
        // query once for all entries we have just fetched.
        // First code for this was sending 15 queries for 15 fetched entries,
        // this is now limited to just one query per fetched articles group

        serendipity_fetchEntryData($ret);
    }

    return $ret;
}

/**
 * Fetch special entry data and attach it to a superarray of entries.
 *
 * Fetches all additional information like plugins, extended properties, additional categories for each entry.
 *
 * @access private
 * @see serendipity_fetchEntries()
 * @param   array       The array of entries where the output will be merged to (referenced)
 * @return null
 */
function serendipity_fetchEntryData(&$ret) {
    global $serendipity;

    $search_ids = array(); // An array to hold all ids of the entry we want to fetch.
    $assoc_ids  = array(); // A temporary key association container to not have to loop through the return array once again.

    foreach($ret AS $i => $entry) {
        $search_ids[]            = $entry['id'];
        $ret[$i]['categories']   = array();        // make sure every article gets its category association
        $assoc_ids[$entry['id']] = $i;             // store temporary reference
    }

    serendipity_plugin_api::hook_event('frontend_entryproperties', $ret, $assoc_ids);

    $query = "SELECT
                     ec.entryid,
                     c.categoryid,
                     c.category_name,
                     c.category_description,
                     c.category_icon,
                     c.parentid
                FROM {$serendipity['dbPrefix']}category AS c
           LEFT JOIN {$serendipity['dbPrefix']}entrycat AS ec
                  ON ec.categoryid = c.categoryid
               WHERE " . serendipity_db_in_sql('ec.entryid', $search_ids) . "
            ORDER BY c.category_name ASC";

    $search_ret =& serendipity_db_query($query, false, 'assoc');

    if (is_array($search_ret)) {
        foreach($search_ret AS $i => $entry) {
            $ret[$assoc_ids[$entry['entryid']]]['categories'][] = $entry;
        }
    }
}

/**
 * Fetch a single entry by a specific condition
 *
 * @access public
 * @param   string      The column to compare $val against (like 'id')
 * @param   string      The value of the colum $key to compare with (like '4711')
 * @param   boolean     Indicates if the full entry will be fetched (body+extended: TRUE), or only the body (FALSE).
 * @param   string      Indicates whether drafts should be fetched
 * @return
 */
function &serendipity_fetchEntry($key, $val, $full = true, $fetchDrafts = 'false') {
    global $serendipity;

    $cond = array();
    $cond['and'] = " "; // intentional dummy string to attach dummy AND parts to the WHERE clauses

    if ($fetchDrafts == 'false') {
        $cond['and'] = " AND e.isdraft = 'false' " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND e.timestamp <= " . serendipity_db_time() : '');
    }

    if (isset($serendipity['GET']['adminModule']) && $serendipity['GET']['adminModule'] == 'entries' && !serendipity_checkPermission('adminEntriesMaintainOthers')) {
        $cond['and'] = " AND e.authorid = '" . $serendipity['authorid'] . "'";
    }

    serendipity_ACL_SQL($cond, true);

    serendipity_plugin_api::hook_event('frontend_fetchentry', $cond, array('noSticky' => true));

    $querystring = "SELECT  e.id,
                            e.title,
                            e.timestamp,
                            e.body,
                            e.comments,
                            e.trackbacks,
                            e.extended,
                            e.exflag,
                            e.authorid,
                            e.isdraft,
                            e.allow_comments,
                            e.last_modified,
                            e.moderate_comments,

                            a.realname AS author,
                            a.username AS loginname,
                            a.email
                      FROM
                            {$serendipity['dbPrefix']}entries e
                 LEFT JOIN  {$serendipity['dbPrefix']}authors a
                        ON  e.authorid = a.authorid
                            {$cond['joins']}
                     WHERE
                            e.$key " . ($key == 'id' ? '=' : 'LIKE') . " '" . serendipity_db_escape_string($val) . "'
                            {$cond['and']}

                            {$cond['single_group']}
                            {$cond['single_having']}
                            {$cond['single_orderby']}
                     LIMIT  1";

    $ret =& serendipity_db_query($querystring, true, 'assoc');

    if (is_array($ret)) {
        $ret['categories'] =& serendipity_fetchEntryCategories($ret['id']);
        $ret['properties'] =& serendipity_fetchEntryProperties($ret['id']);
        $stack     = array();
        $stack[0]  = &$ret;
        $assoc_ids = array($ret['id'] => 0);
        serendipity_plugin_api::hook_event('frontend_entryproperties', $stack, $assoc_ids);
    }

    return $ret;
}

/**
 * Fetches additional entry properties for a specific entry ID
 *
 * @access public
 * @param   int     The ID of the entry to fetch additonal data for
 * @return  array   The array of given properties to an entry
 */
function &serendipity_fetchEntryProperties($id) {
    global $serendipity;

    $parts = array();
    serendipity_plugin_api::hook_event('frontend_entryproperties_query', $parts);

    $_properties =& serendipity_db_query("SELECT property, value FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid = " . (int)$id . " " . $parts['and']);
    if (!is_array($_properties)) {
        $properties = array();
    } else {
        $properties =& $_properties;
    }

    $property = array();
    foreach($properties AS $idx => $row) {
        $property[$row['property']] =& $row['value'];
    }

    return $property;
}

/**
 * Fetch a list of available categories for an author
 *
 * @access public
 * @param   mixed   If set, the list of categories will be fetched according to the author id. If not set, all categories will be fetched. If set to "all", then all categories will be fetched.
 * @param   string  Restrict the list to be returned to a specific category NAME.
 * @param   string  The SQL query part for ORDER BY of the categories
 * @param   string  The ACL artifact condition. If set to "write" only categories will be shown that the author can write to. If set to "read", only categories will be show that the author can read or write to.
 * @return  array   Returns the array of categories
 */
function &serendipity_fetchCategories($authorid = null, $name = null, $order = null, $artifact_mode = 'write') {
    global $serendipity;

    if ($name === null) {
        $name = '';
    }

    if ($order === null) {
        $order = 'category_name ASC';
    }

    if (!isset($authorid) || $authorid === null) {
        $authorid = ((isset($serendipity['authorid']) && !empty($serendipity['GET']['adminModule'])) ? $serendipity['authorid'] : 1);
    }

    if (isset($serendipity['authorid']) && !empty($serendipity['GET']['adminModule']) && $authorid != $serendipity['authorid'] && !serendipity_checkPermission('adminCategoriesMaintainOthers')) {
        $authorid = $serendipity['authorid'];
    }

    $where = '';

    if ($authorid === -1 OR $authorid === 0) {
        $sql_groupid = '0';
    } else {
        $sql_groupid = 'ag.groupid';
    }

    if ($authorid != 'all' && is_numeric($authorid)) {
        $sql_authorid = $authorid;
        if (!serendipity_checkPermission('adminCategoriesMaintainOthers', $authorid)) {
            $where = " WHERE (c.authorid = $authorid OR c.authorid = 0) ";
            $where .= "OR (
                          acl.artifact_type = 'category'
                          AND acl.artifact_mode = '" . serendipity_db_escape_string($artifact_mode) . "'
                         ) ";

        }
    } else {
        $sql_authorid = 'c.authorid';
        $where = '';
    }

    if (!empty($name)) {
        if ($where == '') {
            $where = ' WHERE ';
        } else {
            $where = ' AND ';
        }

        $where .= " c.category_name = '" . serendipity_db_escape_string($name) . "'";
    }

    if ($serendipity['dbType'] == 'postgres' ||
        $serendipity['dbType'] == 'pdo-postgres') {
        $group    = '';
        $distinct = 'DISTINCT';
    } else {
        $group    = 'GROUP BY c.categoryid';
        $distinct = '';
    }

    $querystring = "SELECT $distinct c.categoryid,
                           c.category_name,
                           c.category_icon,
                           c.category_description,
                           c.authorid,
                           c.category_left,
                           c.category_right,
                           c.parentid,

                           a.username,
                           a.username AS loginname,
                           a.realname
                      FROM {$serendipity['dbPrefix']}category AS c
           LEFT OUTER JOIN {$serendipity['dbPrefix']}authors AS a
                        ON c.authorid = a.authorid
           LEFT OUTER JOIN {$serendipity['dbPrefix']}authorgroups AS ag
                        ON ag.authorid = $sql_authorid
           LEFT OUTER JOIN {$serendipity['dbPrefix']}access AS acl
                        ON ($sql_groupid = acl.groupid AND acl.artifact_id = c.categoryid)
                           $where
                           $group";
    if (!empty($order)) {
        $querystring .= "\n ORDER BY $order";
    }

    $ret =& serendipity_db_query($querystring);
    if (is_string($ret)) {
        echo "Query failed: $ret";
    }
    return $ret;
}

/**
 * Rebuild the Category Nested Set tree
 *
 * @access public
 * @see Based on http://www.sitepoint.com/article/hierarchical-data-database/1
 * @param   int     The ID of the parent category to rebuild
 * @param   int     The ID of the next left category
 * @return  int     Returns the new ID
 */
function serendipity_rebuildCategoryTree($parent = 0, $left = 0) {
    global $serendipity;
    $right = $left + 1;

    $result = serendipity_db_query("SELECT categoryid FROM {$serendipity['dbPrefix']}category WHERE parentid = '" . (int)$parent . "'");
    if ( is_array($result) ) {
        foreach ( $result as $category ) {
            $right = serendipity_rebuildCategoryTree($category['categoryid'], $right);
        }
    }
    if ( $parent > 0 ) {
        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}category SET category_left='{$left}', category_right='{$right}' WHERE categoryid='{$parent}'");
    }

    return $right + 1;
}

/**
 * Searches the list of entries by a specific term
 *
 * @todo: Allow to show results of staticpage plugins or others
 * @access public
 * @param   string      The searchterm (may contain wildcards)
 * @param   int         Restrict the number of results [also uses $serendipity['GET']['page'] for pagination]
 * @param   array       Add search Results at the top
 * @return  array       Returns the superarray of entries found
 */
function &serendipity_searchEntries($term, $limit = '', $searchresults = '') {
    global $serendipity;
    static $log_queries = false;
    
    if ($log_queries) {
        $fp = fopen($serendipity['serendipityPath'] . '/archives/queries.csv', 'a');
        fwrite($fp, date('Y-m-d H:i') . ';'
                    . $_SERVER['REMOTE_ADDR'] . ';'
                    . $term . "\n");
        fclose($fp);
    }

    $orig_limit = $limit;
    if ($limit == '') {
        $limit = $serendipity['fetchLimit'];
    }

    if (isset($serendipity['GET']['page']) && $serendipity['GET']['page'] > 1 && !strstr($limit, ',')) {
        $limit = serendipity_db_limit(($serendipity['GET']['page']-1) * $limit, $limit);
    }

    $limit = serendipity_db_limit_sql($limit);

    $term = serendipity_db_escape_string($term);
    $cond = array();
    $relevance_enabled = false;
    if ($serendipity['dbType'] == 'postgres' ||
        $serendipity['dbType'] == 'pdo-postgres') {
        $cond['group']     = '';
        $cond['distinct']  = 'DISTINCT';
            
        $r = serendipity_db_query("SELECT count(routine_name) AS counter
                                     FROM information_schema.routines
                                    WHERE routine_name LIKE 'to_tsvector'
                                      AND specific_catalog = '" . $serendipity['dbName'] . "'");
        if (is_array($r) && $r[0]['counter'] > 0) {
            $term = str_replace('&amp;', '&', $term);
            $cond['find_part'] = "(
            to_tsvector('english', title)    @@to_tsquery('$term') OR
            to_tsvector('english', body)     @@to_tsquery('$term') OR
            to_tsvector('english', extended) @@to_tsquery('$term')
            )"; 
        } else {
            $cond['find_part'] = "(title ILIKE '%$term%' OR body ILIKE '%$term%' OR extended ILIKE '%$term%')";
        }
    } elseif ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite') {
        // Very extensive SQLite search. There currently seems no other way to perform fulltext search in SQLite
        // But it's better than no search at all :-D
        $term = str_replace('*', '%', $term);
        $cond['group']     = 'GROUP BY e.id';
        $cond['distinct']  = '';
        $term              = serendipity_mb('strtolower', $term);
        $cond['find_part'] = "(lower(title) LIKE '%$term%' OR lower(body) LIKE '%$term%' OR lower(extended) LIKE '%$term%')";
    } else {
        $cond['group']    = 'GROUP BY e.id';
        $cond['distinct'] = '';
        $term             = str_replace('&quot;', '"', $term);
        $relevance_enabled = true;
        if (preg_match('@["\+\-\*~<>\(\)]+@', $term)) {
            $cond['find_part'] = "MATCH(title,body,extended) AGAINST('$term' IN BOOLEAN MODE)";
        } else {
            $cond['find_part'] = "MATCH(title,body,extended) AGAINST('$term')";
        }
    }

    switch($serendipity['searchsort']) {
        case 'relevance':
            if ($relevance_enabled) {
                $cond['searchorderby'] = $cond['find_part'] . " DESC";
            } else {
                $cond['searchorderby'] = "timestamp DESC";
            }
            break;

        case 'timestamp':
        default:
            $cond['searchorderby'] = "timestamp DESC";
            break;
    }

    $cond['and'] = " AND isdraft = 'false' " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND timestamp <= " . serendipity_db_time() : '');
    serendipity_plugin_api::hook_event('frontend_fetchentries', $cond, array('source' => 'search', 'term' => $term));
    serendipity_ACL_SQL($cond, 'limited');

    $serendipity['fullCountQuery'] = "
                      FROM
                            {$serendipity['dbPrefix']}entries e
                 LEFT JOIN  {$serendipity['dbPrefix']}authors a
                        ON  e.authorid = a.authorid
                 LEFT JOIN  {$serendipity['dbPrefix']}entrycat ec
                        ON  e.id = ec.entryid
                            {$cond['joins']}
                     WHERE
                            ({$cond['find_part']})
                            {$cond['and']}";

    $querystring = "SELECT {$cond['distinct']}
                            {$cond['addkey']}
                            e.id,
                            e.authorid,
                            a.realname AS author,
                            e.allow_comments,
                            e.moderate_comments,
                            a.email,
                            e.timestamp,
                            e.comments,
                            e.title,
                            e.body,
                            e.extended,
                            e.trackbacks,
                            e.exflag,
                            e.isdraft,
                            e.last_modified,
                            a.username AS loginname
                    {$serendipity['fullCountQuery']}
                    {$cond['group']}
                    {$cond['having']}
                  ORDER BY  {$cond['searchorderby']}
                    $limit";

    $search =& serendipity_db_query($querystring);

    //Add param searchresults at the top and remove duplicates.
    if (is_array($searchresults)) {
        $ids_current = array();
        foreach($searchresults AS $idx => $data) {
            $ids_current[$data['id']] = true;
        }
   
        foreach($search AS $idx => $data) {
            if (isset($ids_current[$data['id']])) {
                unset($search[$idx]);
            }
        }
        $search = array_merge($searchresults, $search);
    }

    $p = (int)$serendipity['GET']['page'];
    if ($p == 0) $p = 1;

    //if * wasn't already appended and if there are none or not enough
    //results, search again for entries containing the searchterm as a part  
    if ($p == 1 && strpos($term, '*') === false && $serendipity['dbType'] != 'sqlite' && $serendipity['dbType'] != 'sqlite3' && $serendipity['dbType'] != 'pdo-sqlite') {
        if (! is_array($search)) {
            return serendipity_searchEntries($term.'*', $orig_limit);
        }else if (count($search) < 4){
            return serendipity_searchEntries($term.'*', $orig_limit, $search);
        }
    }
    
    if (is_array($search)){
        serendipity_fetchEntryData($search);
    }
    
    return $search;
}

/**
 * Creates the Footer below the entries, with pagination options and parses it to Smarty
 *
 * The list of total entries is calculated from the serendipity_getTotelEntries() function
 *
 * @param string    suffix for URLs
 * @param int       Amount of total entries
 * @access public
 * @see serendipity_getTotalEntries()
 * @return null
 */
function serendipity_printEntryFooter($suffix = '.html', $totalEntries = null) {
    global $serendipity;

    if ($totalEntries === null) {
        $totalEntries = serendipity_getTotalEntries();
    }
    
    $limits = explode(',', $serendipity['fetchLimit']);
    if (!empty($limits[1])) {
        $limit = (int)$limits[1];
    } else {
        $limit = (int)$limits[0];
    }
    $totalPages = ceil($totalEntries / $limit);

    if ($totalPages <= 0 ) {
        $totalPages = 1;
    }

    if (!isset($serendipity['GET']['page']) && serendipity_db_bool($serendipity['archiveSortStable'])) {
        $serendipity['GET']['page'] = $totalPages;
    } else if (!isset($serendipity['GET']['page'])) {
        $serendipity['GET']['page'] = 1;
    }

    if ($serendipity['GET']['page'] > 1) {
        $uriArguments = $serendipity['uriArguments'];
        $uriArguments[] = 'P'. ($serendipity['GET']['page'] - 1);
        $serendipity['smarty']->assign('footer_prev_page', serendipity_rewriteURL(str_replace('//', '/', implode('/', $uriArguments)) . $suffix));
    }

    $uriArguments = $serendipity['uriArguments'];
    $uriArguments[] = 'P%s';
    $serendipity['smarty']->assign('footer_totalEntries', $totalEntries);
    $serendipity['smarty']->assign('footer_totalPages', $totalPages);
    if (serendipity_db_bool($serendipity['archiveSortStable'])) {
        $serendipity['smarty']->assign('footer_currentPage', $totalPages - $serendipity['GET']['page']);
    } else {
        $serendipity['smarty']->assign('footer_currentPage', $serendipity['GET']['page']);
    }
    $serendipity['smarty']->assign('footer_pageLink', str_replace('%2A', '*', serendipity_rewriteURL(implode('/', $uriArguments) . $suffix)));
    $serendipity['smarty']->assign('footer_info', sprintf(PAGE_BROWSE_ENTRIES, serendipity_db_bool($serendipity['archiveSortStable']) ?  $totalPages - (int)$serendipity['GET']['page'] +1 : (int)$serendipity['GET']['page'], $totalPages, $totalEntries));

    if ($serendipity['GET']['page'] < $totalPages) {
        $uriArguments = $serendipity['uriArguments'];
        $uriArguments[] = 'P'. ($serendipity['GET']['page'] + 1);
        $serendipity['smarty']->assign('footer_next_page', serendipity_rewriteURL(str_replace('//', '/', implode('/', $uriArguments)) . $suffix));
    }

    if (serendipity_db_bool($serendipity['archiveSortStable'])) {
        $temp = $serendipity['smarty']->getTemplateVars('footer_prev_page');
        $serendipity['smarty']->assign('footer_prev_page', $serendipity['smarty']->getTemplateVars('footer_next_page'));
        $serendipity['smarty']->assign('footer_next_page', $temp);
    }
}

/**
 * Calculates the amount of available entries.
 *
 * This function uses the SQL query portion of the central serendipity_fetchEntries() query
 * and modifies it with different GROUP statements to calculate the number of entries.
 *
 * @access public
 * @see serendipity_fetchEntries()
 * @return int      The number of total entries
 */
function serendipity_getTotalEntries() {
    global $serendipity;

    // The unique query condition was built previously in serendipity_fetchEntries()
    if ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite') {
        $querystring  = "SELECT count(e.id) {$serendipity['fullCountQuery']} GROUP BY e.id";
    } else {
        $querystring  = "SELECT count(distinct e.id) {$serendipity['fullCountQuery']}";
    }

    $query =& serendipity_db_query($querystring);

    if (is_array($query) && isset($query[0])) {
        if ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite') {
            return count($query);
        } else {
            return $query[0][0];
        }
    }

    return 0;
}

/**
 * Passes the list of fetched entries from serendipity_fetchEntries() on to the Smarty layer
 *
 * This function contains all the core logic to group and prepare entries to be shown in your
 * $entries.tpl template. It groups them by date, so that you can easily loop on the set of
 * entries.
 * This function is not only used for printing all entries, but also for printing individual
 * entries.
 * Several central Event hooks are executed here for the whole page flow, like header+footer data.
 *
 * @see serendipity_fetchEntries()
 * @see serendipity_searchEntries()
 * @access public
 * @param   array       The array of entries with all of its data
 * @param   boolean     Toggle whether the extended portion of an entry is requested (via $serendipity['GET']['id'] single entry view)
 * @param   boolean     Indicates if this is a preview
 * @param   string      The name of the SMARTY block that this gets parsed into
 * @param   boolean     Indicates whether the assigned smarty variables should be parsed. When set to "return", no smarty parsing is done.
 * @param   boolean     Indicates whether to apply footer/header event hooks
 * @param   boolean     Indicates whether the pagination footer should be displayed
 * @param   mixed       Indicates whether the input $entries array is already grouped in preparation for the smarty $entries output array [TRUE], or if it shall be grouped by date [FALSE] or if a plugin hook shall be executed to modify data ['plugin']. This setting can also be superseded by a 'entry_display' hook.
 * @return
 */
function serendipity_printEntries($entries, $extended = 0, $preview = false, $smarty_block = 'ENTRIES', $smarty_fetch = true, $use_hooks = true, $use_footer = true, $use_grouped_array = false) {
    global $serendipity;

    if ($use_hooks) {
        $addData = array('extended' => $extended, 'preview' => $preview);
        serendipity_plugin_api::hook_event('entry_display', $entries, $addData);

        if (isset($entries['clean_page']) && $entries['clean_page'] === true) {
            if ($serendipity['view'] == '404') {
                $serendipity['view'] = 'plugin';
            }

            $serendipity['smarty']->assign(array(
                'plugin_clean_page' => true,
                'view'              => $serendipity['view'])
            );
            serendipity_smarty_fetch($smarty_block, 'entries.tpl', true);
            return; // no display of this item
        }
    }
    
    // We shouldn't return here, because we want Smarty to handle the output
    if (!is_array($entries) || $entries[0] == false || !isset($entries[0]['timestamp'])) {
        $entries = array();
    }

    // A plugin executed in entry_display should be able to change the way of ordering entries. Forward-Thinking. ;)
    if (isset($entries['use_grouped_array'])) {
        $use_grouped_array = $entries['use_grouped_array'];
    }

    if ($use_grouped_array === false) {
        // Use grouping by date (default)
        $dategroup = array();
        for ($x = 0, $num_entries = count($entries); $x < $num_entries; $x++) {
            if (!empty($entries[$x]['properties']['ep_is_sticky']) && serendipity_db_bool($entries[$x]['properties']['ep_is_sticky'])) {
                $entries[$x]['is_sticky'] = true;
                $key = 'sticky';
            } else {
                $key = date('Ymd', serendipity_serverOffsetHour($entries[$x]['timestamp']));
            }

            $dategroup[$key]['date']        = $entries[$x]['timestamp'];
            $dategroup[$key]['is_sticky']   = (isset($entries[$x]['is_sticky']) && serendipity_db_bool($entries[$x]['is_sticky']) ? true : false);
            $dategroup[$key]['entries'][]   = &$entries[$x];
        }
    } elseif ($use_grouped_array === 'plugin') {
        // Let a plugin do the grouping
        serendipity_plugin_api::hook_event('entry_groupdata', $entries);
        $dategroup =& $entries;
    } else {
        $dategroup =& $entries;
    }

    foreach($dategroup as $dategroup_idx => $properties) {
        foreach($properties['entries'] as $x => $_entry) {
            if ($smarty_fetch === 'return') {
                $entry = &$dategroup[$dategroup_idx]['entries'][$x]; // PHP4 Compat
            } else {
                // DISABLED - made problems with custom plugins
                // $entry = &$properties['entries'][$x]; // PHP4 Compat
                $entry = &$dategroup[$dategroup_idx]['entries'][$x]; // PHP4 Compat
            }

            if (!empty($entry['properties']['ep_cache_body'])) {
                $entry['pre_body']  = $entry['body'];
                $entry['body']      = &$entry['properties']['ep_cache_body'];
                $entry['is_cached'] = true;
            }

            //--JAM: Highlight-span search terms
            if ($serendipity['action'] == 'search') {
                $searchterms = str_replace('"', '', $serendipity['GET']['searchterms']);
                $searchterms = explode($searchterms, ' ');
                foreach($searchterms as $searchdx => $searchterm) {
                    $searchclass = "foundterm foundterm".$searchdx;
                    $entry['body'] = str_replace($searchterm, '<span class="'.$searchclass.'">' . $searchterm . '</span>', $entry['body']);
                }
            }

            if (!empty($entry['properties']['ep_cache_extended'])) {
                $entry['pre_extended']  = $entry['extended'];
                $entry['extended']  = &$entry['properties']['ep_cache_extended'];
                $entry['is_cached'] = true;
            }

            if ($preview) {
                $entry['author']   = $entry['realname'];
                $entry['authorid'] = $serendipity['authorid'];
            }

            $addData = array('from' => 'functions_entries:printEntries');
            if ($entry['is_cached']) {
                $addData['no_scramble'] = true;
            }
            serendipity_plugin_api::hook_event('frontend_display', $entry, $addData);

            if ($preview) {
                $entry['author']   = $entry['realname'];
                $entry['authorid'] = $serendipity['authorid'];
            }

            $entry['author'] = htmlspecialchars($entry['author']);

            $authorData = array(
                            'authorid' => $entry['authorid'],
                            'username' => $entry['loginname'],
                            'email'    => $entry['email'],
                            'realname' => $entry['author']
            );

            $entry['link']      = serendipity_archiveURL($entry['id'], $entry['title'], 'serendipityHTTPPath', true, array('timestamp' => $entry['timestamp']));
            $entry['commURL']   = serendipity_archiveURL($entry['id'], $entry['title'], 'baseURL', false, array('timestamp' => $entry['timestamp']));
            $entry['html_title']= $entry['title'];
            $entry['title']     = htmlspecialchars($entry['title']);

            $entry['title_rdf']          = preg_replace('@-{2,}@', '-', $entry['html_title']);
            $entry['rdf_ident']          = serendipity_archiveURL($entry['id'], $entry['title_rdf'], 'baseURL', true, array('timestamp' => $entry['timestamp']));
            $entry['link_rdf']           = serendipity_rewriteURL(PATH_FEEDS . '/ei_'. $entry['id'] .'.rdf');
            $entry['title_rdf']          = htmlspecialchars($entry['title_rdf']);

            $entry['link_allow_comments']    = $serendipity['baseURL'] . 'comment.php?serendipity[switch]=enable&amp;serendipity[entry]=' . $entry['id'];
            $entry['link_deny_comments']     = $serendipity['baseURL'] . 'comment.php?serendipity[switch]=disable&amp;serendipity[entry]=' . $entry['id'];
            $entry['allow_comments']         = serendipity_db_bool($entry['allow_comments']);
            $entry['moderate_comments']      = serendipity_db_bool($entry['moderate_comments']);
            $entry['viewmode']               = ($serendipity['GET']['cview'] == VIEWMODE_LINEAR ? VIEWMODE_LINEAR : VIEWMODE_THREADED);
            $entry['link_popup_comments']    = $serendipity['serendipityHTTPPath'] .'comment.php?serendipity[entry_id]='. $entry['id'] .'&amp;serendipity[type]=comments';
            $entry['link_popup_trackbacks']  = $serendipity['serendipityHTTPPath'] .'comment.php?serendipity[entry_id]='. $entry['id'] .'&amp;serendipity[type]=trackbacks';
            $entry['link_edit']              = $serendipity['baseURL'] .'serendipity_admin.php?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]='. $entry['id'];
            $entry['link_trackback']         = $serendipity['baseURL'] .'comment.php?type=trackback&amp;entry_id='. $entry['id'];
            $entry['link_viewmode_threaded'] = $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] .'?url='. $entry['commURL'] .'&amp;serendipity[cview]='. VIEWMODE_THREADED;
            $entry['link_viewmode_linear']   = $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] .'?url='. $entry['commURL'] .'&amp;serendipity[cview]='. VIEWMODE_LINEAR;
            $entry['link_author']            = serendipity_authorURL($authorData);

            if (is_array($entry['categories'])) {
                foreach ($entry['categories'] as $k => $v) {
                    if (!isset($entry['categories'][$k]['category_link'])) {
                        $entry['categories'][$k]['category_link'] =  serendipity_categoryURL($entry['categories'][$k]);
                    }
                }
            }

            if (strlen($entry['extended'])) {
                $entry['has_extended']      = true;
            }

            if (isset($entry['exflag']) && $entry['exflag'] && ($extended || $preview)) {
                $entry['is_extended']       = true;
            }

            if (serendipity_db_bool($entry['allow_comments']) || !isset($entry['allow_comments']) || $entry['comments'] > 0) {
                $entry['has_comments']      = true;
                $entry['label_comments']    = $entry['comments'] == 1 ? COMMENT : COMMENTS;
            }

            if (serendipity_db_bool($entry['allow_comments']) || !isset($entry['allow_comments']) || $entry['trackbacks'] > 0) {
                $entry['has_trackbacks']    = true;
                $entry['label_trackbacks']  = $entry['trackbacks'] == 1 ? TRACKBACK : TRACKBACKS;
            }

            if ($_SESSION['serendipityAuthedUser'] === true && ($_SESSION['serendipityAuthorid'] == $entry['authorid'] || serendipity_checkPermission('adminEntriesMaintainOthers'))) {
                $entry['is_entry_owner']    = true;
            }

            $entry['display_dat'] = '';
            serendipity_plugin_api::hook_event('frontend_display:html:per_entry', $entry);
            $entry['plugin_display_dat'] =& $entry['display_dat'];

            if ($preview) {
                ob_start();
                serendipity_plugin_api::hook_event('backend_preview', $entry);
                $entry['backend_preview'] = ob_get_contents();
                ob_end_clean();
            }

            /* IF WE ARE DISPLAYING A FULL ENTRY */
            if (isset($serendipity['GET']['id'])) {
                $comment_add_data = array(
                    'comments_messagestack' => (isset($serendipity['messagestack']['comments']) ? (array)$serendipity['messagestack']['comments'] : array()),
                    'is_comment_added'      => (isset($serendipity['GET']['csuccess']) && $serendipity['GET']['csuccess'] == 'true' ? true: false),
                    'is_comment_moderate'   => (isset($serendipity['GET']['csuccess']) && $serendipity['GET']['csuccess'] == 'moderate' ? true: false)
                );

                $serendipity['smarty']->assign($comment_add_data);
                serendipity_displayCommentForm(
                    $entry['id'],
                    $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] . '?url=' . $entry['commURL'],
                    true,
                    $serendipity['POST'],
                    true,
                    serendipity_db_bool($entry['moderate_comments']),
                    $entry
                );
            } // END FULL ENTRY LOGIC
        } // end foreach-loop (entries)
    } // end foreach-loop (dates)

    if (!isset($serendipity['GET']['id']) &&
            (!isset($serendipity['hidefooter']) || $serendipity['hidefooter'] == false) &&
            ($num_entries <= $serendipity['fetchLimit']) &&
            $use_footer) {
        serendipity_printEntryFooter();
    }

    if ($smarty_fetch === 'return') {
        return $dategroup;    
    }    
    
    $serendipity['smarty']->assignByRef('entries', $dategroup);
    unset($entries, $dategroup);

    if (isset($serendipity['short_archives']) && $serendipity['short_archives']) {
        serendipity_smarty_fetch($smarty_block, 'entries_summary.tpl', true);
    } elseif ($smarty_fetch == true) {
        serendipity_smarty_fetch($smarty_block, 'entries.tpl', true);
    }

} // end function serendipity_printEntries

/**
 * Deprecated: Delete some garbage when an entry was deleted, especially static pages
 *
 * @deprecated
 * @access public
 * @param   int     The deleted entry ID
 * @param   int     A timestamp for the entry archive page
 * @return null
 */
function serendipity_purgeEntry($id, $timestamp = null) {
    global $serendipity;

    // If pregenerate is not set, short circuit all this logic
    // and remove nothing.
    if(!isset($serendipity['pregenerate'])) {
        return;
    }

    if (isset($timestamp)) {
        $dated = date('Ymd', serendipity_serverOffsetHour($timestamp));
        $datem = date('Ym',  serendipity_serverOffsetHour($timestamp));

        @unlink("{$serendipity['serendipityPath']}/".PATH_ARCHIVES."/{$dated}.html");
        @unlink("{$serendipity['serendipityPath']}/".PATH_ARCHIVES."/{$datem}.html");
    }

    // Fixme (the _* part) !
    @unlink("{$serendipity['serendipityPath']}/".PATH_ARCHIVES."/{$id}_*.html");
    @unlink("{$serendipity['serendipityPath']}/".PATH_FEEDS."/index.rss");
    @unlink("{$serendipity['serendipityPath']}/".PATH_FEEDS."/index.rss2");
    @unlink("{$serendipity['serendipityPath']}/index.html");
}

/**
 * Inserts a new entry into the database or updates an existing entry
 *
 * Another central function, that parses, prepares and commits changes to an entry
 *
 * @access public
 * @param   array       The new/modified entry data.
 * @return  mixed       Integer with new entry ID if successfull, a string or array if error(s).
 */
function serendipity_updertEntry($entry) {
    global $serendipity;

    include_once S9Y_INCLUDE_PATH . 'include/functions_entries_admin.inc.php';

    $errors = array();
    serendipity_plugin_api::hook_event('backend_entry_updertEntry', $errors, $entry);
    if (count($errors) > 0) {
        // Return error message(s)
        return implode("\n", $errors);
    }

    serendipity_plugin_api::hook_event('backend_entry_presave', $entry);

    $categories = $entry['categories'];
    unset($entry['categories']);

    $newEntry = 0;
    $exflag = 0;

    if (isset($entry['properties'])) {
        unset($entry['properties']);
    }

    if (!is_numeric($entry['timestamp'])) {
        $entry['timestamp'] = time();
    }

    /* WYSIWYG-editor inserts empty ' ' for extended body; this is reversed here */
    if (isset($entry['extended']) && (trim($entry['extended']) == '' || trim($entry['extended']) == '<br />' || trim($entry['extended']) == '<p></p>' || str_replace(array("\r", "\n", "\t", "\0", "<br />", "<p>", "</p>", "<br>"), array('', '', '', '', '', '', '', ''), trim($entry['extended'])) == '')) {
        $entry['extended'] = '';
    }

    if (strlen($entry['extended'])) {
        $exflag = 1;
    }

    $entry['exflag']   = $exflag;

    if (!is_numeric($entry['id'])) {
        /* we need to insert */

        unset($entry['id']);
        $entry['comments'] = 0;

        if (!isset($entry['last_modified']) || !is_numeric($entry['last_modified'])) {
            $entry['last_modified'] = $entry['timestamp'];
        }

        // New entries need an author
        $entry['author']   = $serendipity['user'];
        if (!isset($entry['authorid']) || empty($entry['authorid'])) {
            $entry['authorid'] = $serendipity['authorid'];
        }

        if (!$_SESSION['serendipityRightPublish']) {
            $entry['isdraft'] = 'true';
        }

        if(!isset($entry['allow_comments'])){
            $entry['allow_comments']='false';
        }
        if(!isset($entry['moderate_comments'])){
            $entry['moderate_comments']='false';
        }

        $res = serendipity_db_insert('entries', $entry);

        if ($res) {
            $entry['id'] = $serendipity['lastSavedEntry'] = serendipity_db_insert_id('entries', 'id');
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    if (is_numeric($cat)) {
                        serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}entrycat (entryid, categoryid) VALUES ({$entry['id']}, {$cat})");
                    }
                }
            }

            serendipity_insertPermalink($entry);
        } else {
            //Some error message here
            return ENTRIES_NOT_SUCCESSFULLY_INSERTED;
        }
        $newEntry    = 1;
    } else {
        /* we need to update */

        // Get settings from entry if already in DB, which should not be alterable with POST methods
        $_entry            = serendipity_fetchEntry('id', $entry['id'], 1, 1);
        $entry['authorid'] = $_entry['authorid'];

        if (isset($serendipity['GET']['adminModule']) && $serendipity['GET']['adminModule'] == 'entries' && $entry['authorid'] != $serendipity['authorid'] && !serendipity_checkPermission('adminEntriesMaintainOthers')) {
            // Only chiefs and admins can change other's entry. Else update fails.
            return;
        }

        if (!$_SESSION['serendipityRightPublish']) {
            $entry['isdraft'] = 'true';
        }

        if (is_array($categories)) {
            serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}entrycat WHERE entryid={$entry['id']}");
            foreach ($categories as $cat) {
                serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}entrycat (entryid, categoryid) VALUES ({$entry['id']}, {$cat})");
            }
        }

        //if (!serendipity_db_bool($entry['isdraft']) && !serendipity_db_bool($_entry['isdraft'])) {
            $entry['last_modified'] = time();
        //}

        $res = serendipity_db_update('entries', array('id' => $entry['id']), $entry);
        $newEntry = 0;
        serendipity_updatePermalink($entry);
    }

    if (is_string($res)) {
        return $res;
    }

    // Reset session data, so that a reload to this frame should not happen!
    $_SESSION['save_entry']['id'] = (int)$entry['id'];

    if (!serendipity_db_bool($entry['isdraft'])) {
        serendipity_plugin_api::hook_event('frontend_display', $entry, array('no_scramble' => true, 'from' => 'functions_entries:updertEntry'));
        $drafted_entry = $entry;
    }

    serendipity_purgeEntry($entry['id'], $entry['timestamp']);

    if (!serendipity_db_bool($entry['isdraft']) && $entry['timestamp'] <= serendipity_serverOffsetHour()) {
        // When saving an entry, first all references need to be gathered. But trackbacks to them
        // shall only be send at the end of the execution flow. However, certain plugins depend on
        // the existance of handled references. Thus we store the current references at this point,
        // execute the plugins and then reset the found references to the original state.
        serendipity_handle_references($entry['id'], $serendipity['blogTitle'], $drafted_entry['title'], $drafted_entry['body'] . $drafted_entry['extended'], true);
    }

    // Send publish tags if either a new article has been inserted from scratch, or if the entry was previously
    // stored as draft and is now published
    $entry['categories'] =& $categories;
    if (!serendipity_db_bool($entry['isdraft']) && ($newEntry || serendipity_db_bool($_entry['isdraft']))) {
        serendipity_plugin_api::hook_event('backend_publish', $entry, $newEntry);
    } else {
        serendipity_plugin_api::hook_event('backend_save', $entry, $newEntry);
    }

    if (!serendipity_db_bool($entry['isdraft']) && $entry['timestamp'] <= serendipity_serverOffsetHour()) {
        // Now that plugins are executed, we go ahead into the Temple of Doom and send possibly failing trackbacks.
        // First, original list of references is restored (inside the function call)
        serendipity_handle_references($entry['id'], $serendipity['blogTitle'], $drafted_entry['title'], $drafted_entry['body'] . $drafted_entry['extended'], false);
    }

    return (int)$entry['id'];
}

/**
 * Delete an entry and everything that belongs to it (comments)
 *
 * @access public
 * @param   int     The Entry ID to delete
 * @return  mixed   FALSE or NULL on error
 */
function serendipity_deleteEntry($id) {
    global $serendipity;

    if (!is_numeric($id)) {
        return false;
    }

    // Purge the daily/monthly entries so they can be rebuilt
    $result = serendipity_db_query("SELECT timestamp, authorid FROM {$serendipity['dbPrefix']}entries WHERE id = '". (int)$id ."'", true);

    if ($result[1] != $serendipity['authorid'] && !serendipity_checkPermission('adminEntriesMaintainOthers')) {
        // Only admins and chief users can delete entries which do not belong to the author
        return;
    }

    serendipity_purgeEntry($id, $result[0]);

    serendipity_plugin_api::hook_event('backend_delete_entry', $id);
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}entries WHERE id=$id");
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}entrycat WHERE entryid=$id");
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid=$id");
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}comments WHERE entry_id=$id");
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}references WHERE entry_id='$id' AND type = ''");
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}permalinks WHERE entry_id='$id'");
}

/**
* Return HTML containing a list of categories
*
* Prints a list of categories for use in forms, the sidebar, or whereever...
*
* @access public
* @param array  An array of categories, typically gathered by serendipity_fetchCategories()
* @param array  An array which holds IDs which are meant to be selected within a HTML SELECT form field [used for recursion]
* @param int    The type of category list (0: HTML span list, 1/2: <option>s, 3: HTML Div list, 4: CSV data) to return
* @param int    The parent ID of a category [for recursion]
* @param int    The current nesting level [for recursion]
* @param string Tells the function, whether or not to display the XML button for each category.
*               If empty, no links to the xml feeds will be displayed; If you want to, you can
*               pass an image here (this setting is only used, when type==3).
* @param string The character to use for blank indenting
* @see serendipity_fetchCategories()
*/
function serendipity_generateCategoryList($cats, $select = array(0), $type = 0, $id = 0, $level = 0, $xmlImg = '', $blank_char = ' ') {
    global $serendipity;

    if ( !is_array($cats) || !count($cats) )
        return;

    $ret = '';
    foreach ($cats as $cat) {
        if ($cat['parentid'] == $id) {
            switch ($type) {
                case 0:
                    $ret .= str_repeat('&nbsp;', $level * 2).'&bull;&nbsp;<span class="block_level" id="catItem_' . $cat['categoryid'] . '"' . (($cat['categoryid'] && in_array($cat['categoryid'], $select)) ? ' selected="selected"' : '') . '><a href="?serendipity[adminModule]=category&amp;serendipity[cat][catid]=' . $cat['categoryid'] . '">' . (!empty($cat['category_icon']) ? '<img style="vertical-align: middle;" src="' . $cat['category_icon'] . '" border="0" alt="' . $cat['category_name'] . '"/> ' : '') . htmlspecialchars($cat['category_name']) . (!empty($cat['category_description']) ? ' - ' . htmlspecialchars($cat['category_description']) : '') . '</a></span>';
                    break;
                case 1:
                case 2:
                   $ret .= '<option value="' . $cat['categoryid'] . '"' . (($cat['categoryid'] && in_array($cat['categoryid'], $select)) ? ' selected="selected"' : '') . '>';
                   $ret .= str_repeat('&nbsp;', $level * 2) . htmlspecialchars($cat['category_name']) . ($type == 1 && !empty($cat['category_description']) ? (' - ' . htmlspecialchars($cat['category_description'])) : '');
                   $ret .= '</option>';
                   break;
                case 3:
                    $category_id = serendipity_makeFilename($cat['category_name']);
                    if (!empty($xmlImg)) {
                        $ret .= sprintf(
                          '<div style="padding-bottom: 2px;">' .
                          '<a href="%s" title="%s"><img alt="xml" src="%s" style="vertical-align: bottom; display: inline; border: 0px" /></a>&#160;%s' .
                          '<a href="%s" title="%s">%s</a>' .
                          '</div>',
                          $serendipity['serendipityHTTPPath'] . 'rss.php?category=' . $cat['categoryid'] . '_' . $category_id,
                          htmlspecialchars($cat['category_description']),
                          $xmlImg,
                          str_repeat('&#160;', $level * 3),
                          serendipity_categoryURL($cat, 'serendipityHTTPPath'),
                          htmlspecialchars($cat['category_description']),
                          htmlspecialchars($cat['category_name']));
                    } else {
                        $ret .= sprintf(
                          '<span class="block_level">%s<a href="%s" title="%s">%s</a></span>',
                          str_repeat('&#160;', $level * 3),
                          serendipity_categoryURL($cat, 'serendipityHTTPPath'),
                          htmlspecialchars($cat['category_description']),
                          htmlspecialchars($cat['category_name']));
                    }
                    break;
                case 4:
                    $ret .= $cat['categoryid'] . '|||' . str_repeat($blank_char, $level * 2) . $cat['category_name'] . '@@@';
                    break;
            }
            $ret .= serendipity_generateCategoryList($cats, $select, $type, $cat['categoryid'], $level + 1, $xmlImg, $blank_char);
        }
    }
    return $ret;
}

/**
 * Set category associations of a specific entry
 *
 * @access public
 * @param   int     The ID of the entry
 * @param   array   An array of category IDs that this entry is associated to.
 * @return null
 */
function serendipity_updateEntryCategories($postid, $categories) {
    global $serendipity;

    if (!$postid || !$categories) {
        return;
    }

    $query = "DELETE FROM $serendipity[dbPrefix]entrycat WHERE entryid = " . (int)$postid;
    serendipity_db_query($query);

    if (!is_array($categories)) {
        $categories = array(0 => $categories);
    }

    foreach($categories AS $idx => $cat) {
        $query = "INSERT INTO $serendipity[dbPrefix]entrycat (categoryid, entryid) VALUES (" . (int)$cat . ", " . (int)$postid . ")";
        serendipity_db_query($query);
    }
}

/**
 * Gather an archive listing of older entries and passes it to Smarty
 *
 * The archives are created according to the current timestamp and show the current year.
 * $serendipity['GET']['category'] is honoured like in serendipity_fetchEntries()
 * $serendipity['GET']['viewAuthor'] is honoured like in serendipity_fetchEntries()
 *
 * @access public
 * @return null
 */
function serendipity_printArchives() {
    global $serendipity;

    $f = serendipity_db_query("SELECT timestamp FROM {$serendipity['dbPrefix']}entries ORDER BY timestamp ASC LIMIT 1");
    switch($serendipity['calendar']) {
        case 'gregorian':
        default:
            $lastYear   = date('Y', serendipity_serverOffsetHour($f[0][0]));
            $lastMonth  = date('m', serendipity_serverOffsetHour($f[0][0]));
            $thisYear   = date('Y', serendipity_serverOffsetHour());
            $thisMonth  = date('m', serendipity_serverOffsetHour());
            break;
        case 'persian-utf8':
            require_once S9Y_INCLUDE_PATH . 'include/functions_calendars.inc.php';
            $lastYear   = persian_date_utf('Y', serendipity_serverOffsetHour($f[0][0]));
            $lastMonth  = persian_date_utf('m', serendipity_serverOffsetHour($f[0][0]));
            $thisYear   = persian_date_utf('Y', serendipity_serverOffsetHour());
            $thisMonth  = persian_date_utf('m', serendipity_serverOffsetHour());
            break;
    }
    $max = 1;

    if (isset($serendipity['GET']['category'])) {
        $cat_sql = serendipity_getMultiCategoriesSQL($serendipity['GET']['category']);
        $cat_get = '/C' . (int)$serendipity['GET']['category'];
    } else {
        $cat_sql = '';
        $cat_get = '';
    }

    if (isset($serendipity['GET']['viewAuthor'])) {
        $author_get = '/A' . (int)$serendipity['GET']['viewAuthor'];
    } else {
        $author_get = '';
    }

    if ($serendipity['dbType'] == 'postgres' ||
        $serendipity['dbType'] == 'pdo-postgres') {
        $distinct = 'DISTINCT e.id,';
    } else {
        $distinct = '';
    }

    $q = "SELECT $distinct e.timestamp
            FROM {$serendipity['dbPrefix']}entries e
            " . (!empty($cat_sql) ? "
       LEFT JOIN {$serendipity['dbPrefix']}entrycat ec
              ON e.id = ec.entryid
       LEFT JOIN {$serendipity['dbPrefix']}category c
              ON ec.categoryid = c.categoryid" : "") . "
           WHERE isdraft = 'false'"
                . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND timestamp <= " . serendipity_db_time() : '')
                . (!empty($cat_sql) ? ' AND ' . $cat_sql : '')
                . (!empty($serendipity['GET']['viewAuthor']) ? ' AND e.authorid = ' . (int)$serendipity['GET']['viewAuthor'] : '') 
                . (!empty($cat_sql) ? " GROUP BY e.id, e.timestamp" : '');
    $entries =& serendipity_db_query($q, false, 'assoc');

    $group = array();
    if (is_array($entries)) {
        foreach($entries AS $entry) {
            $group[date('Ym', $entry['timestamp'])]++;
        }
    }

    $output = array();
    for ($y = $thisYear; $y >= $lastYear; $y--) {
        $output[$y]['year'] = $y;
        for ($m = 12; $m >= 1; $m--) {

            /* If the month we are checking are in the future, we drop it */
            if ($m > $thisMonth && $y == $thisYear) {
                continue;
            }

            /* If the month is lower than the lowest month containing entries, we're done */
            if ($m < $lastMonth && $y <= $lastYear) {
                break;
            }

            switch($serendipity['calendar']) {
                case 'gregorian':
                default:
                    $s = serendipity_serverOffsetHour(mktime(0, 0, 0, $m, 1, $y), true);
                    $e = serendipity_serverOffsetHour(mktime(23, 59, 59, $m, date('t', $s), $y), true);
                    break;
                case 'persian-utf8':
                    require_once S9Y_INCLUDE_PATH . 'include/functions_calendars.inc.php';
                    $s = serendipity_serverOffsetHour(persian_mktime(0, 0, 0, $m, 1, $y), true);
                    $e = serendipity_serverOffsetHour(persian_mktime(23, 59, 59, $m, date('t', $s), $y), true);
                    break;
            }

            $entry_count = (int)$group[$y . (strlen($m) == 1 ? '0' : '') . $m];

            /* A silly hack to get the maximum amount of entries per month */
            if ($entry_count > $max) {
                $max = $entry_count;
            }

            $data = array();
            $data['entry_count']    = $entry_count;
            $data['link']           = serendipity_archiveDateUrl($y . '/'. sprintf('%02s', $m) . $cat_get . $author_get);
            $data['link_summary']   = serendipity_archiveDateUrl($y . '/'. sprintf('%02s', $m) . $cat_get . $author_get, true);
            $data['date']           = $s;
            $output[$y]['months'][] = $data;
        }
    }

    $serendipity['smarty']->assignByRef('archives', $output);
    $serendipity['smarty']->assignByRef('max_entries', $max);

    serendipity_smarty_fetch('ARCHIVES', 'entries_archives.tpl', true);
}

/**
 * Get total count for specific objects
 *
 * @access public
 * @param   string      The type of count to show: "entries", "trackbacks", "comments"
 * @return  string      The number
 */
function serendipity_getTotalCount($what) {
    global $serendipity;

    switch($what) {
        case 'comments':
            $res = serendipity_db_query("SELECT SUM(e.comments) AS sum
                                           FROM {$serendipity['dbPrefix']}entries AS e
                                          WHERE e.isdraft = 'false'
                                                " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND e.timestamp  <= " . serendipity_db_time() : ''), true, 'assoc');
            return $res['sum'];
        case 'trackbacks':
            $res = serendipity_db_query("SELECT SUM(e.trackbacks) AS sum
                                           FROM {$serendipity['dbPrefix']}entries AS e
                                          WHERE e.isdraft = 'false'
                                                " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND e.timestamp  <= " . serendipity_db_time() : ''), true, 'assoc');
            return $res['sum'];
        case 'entries':
            $res = serendipity_db_query("SELECT COUNT(e.id) AS sum
                                           FROM {$serendipity['dbPrefix']}entries AS e
                                          WHERE e.isdraft = 'false'
                                                " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND e.timestamp  <= " . serendipity_db_time() : ''), true, 'assoc');
            return $res['sum'];

    }
}

/**
 * Get a path of all parent categories to a given category.
 *
 * @access public
 * @param   string      The id of the category, whose parents you want to fetch
 * @return  array       An Array with all category information, ordered from root to the ID you supplied.
 */
function serendipity_getCategoryRoot($id) {
    global $serendipity;

    $r = serendipity_db_query("SELECT p.*
                                 FROM {$serendipity['dbPrefix']}category n,
                                      {$serendipity['dbPrefix']}category p
                                WHERE n.category_left BETWEEN p.category_left AND p.category_right
                                  AND n.categoryid = " . (int)$id . "
                             ORDER BY n.category_left DESC, p.category_left ASC");
    return $r;
}
