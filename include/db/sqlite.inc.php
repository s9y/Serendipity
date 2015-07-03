<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (!function_exists('sqlite_open')) {
    @dl('sqlite.so');
    @dl('sqlite.dll');
}

/**
 * Tells the DB Layer to start a DB transaction.
 *
 * @access public
 */
function serendipity_db_begin_transaction(){
    serendipity_db_query('begin transaction');
}

/**
 * Tells the DB Layer to end a DB transaction.
 *
 * @access public
 * @param  boolean  If true, perform the query. If false, rollback.
 */
function serendipity_db_end_transaction($commit){
    if ($commit){
        serendipity_db_query('commit transaction');
    }else{
        serendipity_db_query('rollback transaction');
    }
}

/**
 * Connect to the configured Database
 *
 * @access public
 * @return  ressource   connection handle
 */
function serendipity_db_connect()
{
    global $serendipity;

    if (isset($serendipity['dbConn'])) {
        return $serendipity['dbConn'];
    }

    if (isset($serendipity['dbPersistent']) && $serendipity['dbPersistent']) {
        $function = 'sqlite_popen';
    } else {
        $function = 'sqlite_open';
    }


    if (defined('S9Y_DATA_PATH')) {
        $serendipity['dbConn'] = $function(S9Y_DATA_PATH . $serendipity['dbName'] . '.db');
    } else {
        $serendipity['dbConn'] = $function($serendipity['dbName'] . '.db');
    }

    return $serendipity['dbConn'];
}

function serendipity_db_reconnect() {
}

/**
 * Returns a escaped string, so that it can be safely included in a SQL string encapsulated within quotes, without allowing SQL injection.
 *
 * @access  public
 * @param   string   input string
 * @return  string   output string
 */
function serendipity_db_escape_string($string)
{
    static $search  = array("\x00", '%',   "'",   '\"');
    static $replace = array('%00',  '%25', "''", '\\\"');

    return str_replace($search, $replace, $string);
}

/**
 * Returns the number of affected rows of a SQL query
 *
 * @access public
 * @return int      Number of affected rows
 */
function serendipity_db_affected_rows()
{
    global $serendipity;

    return sqlite_changes($serendipity['dbConn']);
}

/**
 * Returns the number of updated rows in a SQL query
 *
 * @access public
 * @return int  Number of updated rows
 */
function serendipity_db_updated_rows()
{
    global $serendipity;
    // It is unknown whether sqllite returns rows MATCHED or rows UPDATED
    return sqlite_changes($serendipity['dbConn']);
}

/**
 * Returns the number of matched rows in a SQL query
 *
 * @access public
 * @return int  Number of matched rows
 */
function serendipity_db_matched_rows()
{
    global $serendipity;
    // It is unknown whether sqllite returns rows MATCHED or rows UPDATED
    return sqlite_changes($serendipity['dbConn']);
}

/**
 * Returns the latest INSERT_ID of an SQL INSERT INTO command, for auto-increment columns
 *
 * @access public
 * @return int      Value of the auto-increment column
 */
function serendipity_db_insert_id()
{
    global $serendipity;

    return sqlite_last_insert_rowid($serendipity['dbConn']);
}

/**
 * Parse result arrays into expected format for further operations
 *
 * SQLite does not support to return "e.entryid" within a $row['entryid'] return.
 * So this function manually iteratse through all result rows and rewrites 'X.yyyy' to 'yyyy'.
 * Yeah. This sucks. Don't tell me!
 *
 * @access private
 * @param  ressource    The row ressource handle
 * @param  int          Bitmask to tell whether to fetch numerical/associative arrays
 * @return array        Propper array containing the ressource results
 */
function serendipity_db_sqlite_fetch_array($res, $type = SQLITE_BOTH)
{
    static $search  = array('%00',  '%25');
    static $replace = array("\x00", '%');

    $row = sqlite_fetch_array($res, $type);
    if (!is_array($row)) {
        return $row;
    }

    /* strip any slashes, correct fieldname */
    foreach ($row AS $i => $v) {
        // TODO: If a query of the format 'SELECT a.id, b.text FROM table' is used,
        //       the sqlite extension will give us key indizes 'a.id' and 'b.text'
        //       instead of just 'id' and 'text' like in mysql/postgresql extension.
        //       To fix that, we use a preg-regex; but that is quite performance costy.
        //       Either we always need to use 'SELECT a.id AS id, b.text AS text' in query,
        //       or the sqlite extension may get fixed. :-)
        $row[preg_replace('@^.+\.(.*)@', '\1', $i)] = str_replace($search, $replace, $v);
    }

    return $row;
}

/**
 * Assemble and return SQL condition for a "IN (...)" clause
 *
 * @access public
 * @param  string   table column name
 * @param  array    referenced array of values to search for in the "IN (...)" clause
 * @param  string   condition of how to associate the different input values of the $search_ids parameter
 * @return string   resulting SQL string
 */
function serendipity_db_in_sql($col, &$search_ids, $type = ' OR ') {
    $sql = array();
    if (!is_array($search_ids)) {
        return false;
    }

    foreach($search_ids AS $id) {
        $sql[] = $col . ' = ' . $id;
    }

    $cond = '(' . implode($type, $sql) . ')';
    return $cond;
}

/**
 * Perform a DB Layer SQL query.
 *
 * This function returns values dependin on the input parameters and the result of the query.
 * It can return:
 *   false or a string if there was an error (depends on $expectError),
 *   true if the query succeeded but did not generate any rows
 *   array of field values if it returned a single row and $single is true
 *   array of array of field values if it returned row(s) [stacked array]
 *
 * @access public
 * @param   string      SQL query to execute
 * @param   boolean     Toggle whether the expected result is a single row (TRUE) or multiple rows (FALSE). This affects whether the returned array is 1 or 2 dimensional!
 * @param   string      Result type of the array indexing. Can be one of "assoc" (associative), "num" (numerical), "both" (numerical and associative, default)
 * @param   boolean     If true, errors will be reported. If false, errors will be ignored.
 * @param   string      A possible array key name, so that you can control the multi-dimensional mapping of an array by the key column
 * @param   string      A possible array field name, so that you can control the multi-dimensional mapping of an array by the key column and the field value.
 * @param   boolean     If true, the executed SQL error is known to fail, and should be disregarded (errors can be ignroed on DUPLICATE INDEX queries and the likes)
 * @return  mixed       Returns the result of the SQL query, depending on the input parameters
 */
function &serendipity_db_query($sql, $single = false, $result_type = "both", $reportErr = true, $assocKey = false, $assocVal = false, $expectError = false)
{
    global $serendipity;
    $type_map = array(
                         'assoc' => SQLITE_ASSOC,
                         'num'   => SQLITE_NUM,
                         'both'  => SQLITE_BOTH,
                         'true'  => true,
                         'false' => false
    );

    static $debug = false;

    if ($debug) {
        // Open file and write directly. In case of crashes, the pointer needs to be killed.
        $fp = @fopen('sqlite.log', 'a');
        fwrite($fp, '[' . date('d.m.Y H:i') . '] SQLITE QUERY: ' . $sql . "\n\n");
        fclose($fp);
    }

    if ($reportErr && !$expectError) {
        $res = sqlite_query($sql, $serendipity['dbConn']);
    } else {
        $res = @sqlite_query($sql, $serendipity['dbConn']);
    }

    if (!$res) {
        if (!$expectError && !$serendipity['production']) {
            var_dump($res);
            var_dump($sql);
            $msg = "problem with query";
            return $msg;
        }
        if ($debug) {
            $fp = @fopen('sqlite.log', 'a');
            fwrite($fp, '[' . date('d.m.Y H:i') . '] [ERROR] ' . "\n\n");
            fclose($fp);
        }

        return $type_map['false'];
    }

    if ($res === true) {
        return $type_map['true'];
    }

    if (sqlite_num_rows($res) == 0) {
        if ($single) {
            return $type_map['false'];
        }
        return $type_map['true'];
    } else {
        $rows = array();

        while (($row = serendipity_db_sqlite_fetch_array($res, $type_map[$result_type]))) {
            if (!empty($assocKey)) {
                // You can fetch a key-associated array via the two function parameters assocKey and assocVal
                if (empty($assocVal)) {
                    $rows[$row[$assocKey]] = $row;
                } else {
                    $rows[$row[$assocKey]] = $row[$assocVal];
                }
            } else {
                $rows[] = $row;
            }
        }

        if ($debug) {
            $fp = @fopen('sqlite.log', 'a');
            fwrite($fp, '[' . date('d.m.Y H:i') . '] SQLITE RESULT: ' . print_r($rows, true). "\n\n");
            fclose($fp);
        }

        if ($single && count($rows) == 1) {
            return $rows[0];
        }

        return $rows;
    }
}

/**
 * Try to connect to the configured Database (during installation)
 *
 * @access public
 * @param  array     input configuration array, holding the connection info
 * @param  array     referenced array which holds the errors that might be encountered
 * @return boolean   return true on success, false on error
 */
function serendipity_db_probe($hash, &$errs)
{
    global $serendipity;

    $dbName = (isset($hash['sqlitedbName']) ? $hash['sqlitedbName'] : $hash['dbName']);

    if (!function_exists('sqlite_open')) {
        $errs[] = 'SQLite extension not installed. Run "pear install sqlite" on your webserver or contact your systems administrator regarding this problem.';
        return false;
    }

    if (defined('S9Y_DATA_PATH')) {
        // Shared installations!
        $dbfile = S9Y_DATA_PATH . $dbName . '.db';
    } else {
        $dbfile = $serendipity['serendipityPath'] . $dbName . '.db';
    }

    $serendipity['dbConn'] = sqlite_open($dbfile);

    if ($serendipity['dbConn']) {
        return true;
    }

    $errs[] = "Unable to open \"$dbfile\" - check permissions (directory needs to be writeable for webserver)!";
    return false;
}

/**
 * Prepares a Serendipty query input to fully valid SQL. Replaces certain "template" variables.
 *
 * @access public
 * @param  string   SQL query with template variables to convert
 * @return ressource    SQL ressource handle of the executed query
 */
function serendipity_db_schema_import($query)
{
    static $search  = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}', '{FULLTEXT}', '{BOOLEAN}', '{UTF_8}', '{TEXT}');
    static $replace = array('INTEGER', 'PRIMARY KEY', '', '', 'BOOLEAN NOT NULL', '', 'LONGTEXT');

    if (stristr($query, '{FULLTEXT_MYSQL}')) {
        return true;
    }

    $query = trim(str_replace($search, $replace, $query));
    if ($query[0] == '@') {
        // Errors are expected to happen (like duplicate index creation)
        return serendipity_db_query(substr($query, 1), false, 'both', false, false, false, true);
    } else {
        return serendipity_db_query($query);
    }
}

/**
 * Returns the option to a LIMIT SQL statement, because it varies accross DB systems
 *
 * @access public
 * @param  int      Number of the first row to return data from
 * @param  int      Number of rows to return
 * @return string   SQL string to pass to a LIMIT statement
 */
function serendipity_db_limit($start, $offset) {
    return $start . ', ' . $offset;
}

/**
 * Return a LIMIT SQL option to the DB Layer as a full LIMIT statement
 *
 * @access public
 * @param   SQL string of a LIMIT option
 * @return  SQL string containing a full LIMIT statement
 */
function serendipity_db_limit_sql($limitstring) {
    return ' LIMIT ' . $limitstring;
}

/**
 * Returns the SQL code used for concatenating strings
 *
 * @access public
 * @param  string   Input string/column to concatenate
 * @return string   SQL parameter
 */
function serendipity_db_concat($string) {
    return 'concat(' . $string . ')';
}

/* vim: set sts=4 ts=4 expandtab : */
