<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/**
 * Tells the DB Layer to start a DB transaction.
 *
 * @access public
 */
function serendipity_db_begin_transaction(){
    serendipity_db_query('start transaction');
}

/**
 * Tells the DB Layer to end a DB transaction.
 *
 * @access public
 * @param  boolean  If true, perform the query. If false, rollback.
 */
function serendipity_db_end_transaction($commit){
    if ($commit){
        serendipity_db_query('commit');
    }else{
        serendipity_db_query('rollback');
    }
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
    return $col . " IN (" . implode(', ', $search_ids) . ")";
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
function &serendipity_db_query($sql, $single = false, $result_type = "both", $reportErr = false, $assocKey = false, $assocVal = false, $expectError = false) {
    global $serendipity;
    $type_map = array(
                         'assoc' => MYSQL_ASSOC,
                         'num'   => MYSQL_NUM,
                         'both'  => MYSQL_BOTH,
                         'true'  => true,
                         'false' => false
    );
    static $benchmark = false;

    // highlight_string(var_export($sql, 1));

    if (!is_resource($serendipity['dbConn'])) {
        return false;
    }

    if ($benchmark) {
        $start = microtime_float();
    }
    if ($expectError) {
        $c = @mysql_query($sql, $serendipity['dbConn']);
    } else {
        $c = mysql_query($sql, $serendipity['dbConn']);
    }
    if ($benchmark) {
        $end = microtime_float();
        mysql_query("INSERT INTO BLOGLOG (request, timestamp, sql, exec_time, ip) VALUES ('" . serendipity_db_escape_string($_SERVER['REQUEST_URI']) . "', NOW(), '" . serendipity_db_escape_string($sql) . "', '" . (number_format($end-$start, 10)) . "', '" . serendipity_db_escape_string($_SERVER['REMOTE_ADDR']) . "')");

        $psql = $sql;
        $psql = preg_replace('@[0-9]{10}@', 'TIMESTAMP', $psql);
        mysql_query("UPDATE BLOGLOG_TOTAL SET counter = counter + 1 WHERE sql = '" . serendipity_db_escape_string($psql) . "'");
        if (mysql_affected_rows() < 1) {
            mysql_query("INSERT INTO BLOGLOG_TOTAL (sql, counter) VALUES ('" . serendipity_db_escape_string($psql) . "', 1)");
        }
    }

    if (!$expectError && mysql_error($serendipity['dbConn']) != '') {
        $msg = '<pre>' . serendipity_specialchars($sql) . '</pre> / ' . serendipity_specialchars(mysql_error($serendipity['dbConn']));
        return $msg;
    }

    if (!$c) {
        if (!$expectError && !$serendipity['production']) {
            print '<pre>' . serendipity_specialchars($sql) . '</pre> / ' . serendipity_specialchars(mysql_error($serendipity['dbConn']));
            if (function_exists('debug_backtrace') && $reportErr == true) {
                highlight_string(var_export(debug_backtrace(), 1));
            }
        }

        return $type_map['false'];
    }
    if ($c === true) {
        return $type_map['true'];
    }

    $result_type = $type_map[$result_type];

    switch(mysql_num_rows($c)) {
        case 0:
            if ($single) {
                return $type_map['false'];
            }
            return $type_map['true'];
        case 1:
            if ($single) {
                return mysql_fetch_array($c, $result_type);
            }
        default:
            if ($single) {
                return mysql_fetch_array($c, $result_type);
            }

            $rows = array();
            while (($row = mysql_fetch_array($c, $result_type))) {
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
            return $rows;
    }
}

/**
 * Returns the latest INSERT_ID of an SQL INSERT INTO command, for auto-increment columns
 *
 * @access public
 * @return int      Value of the auto-increment column
 */
function serendipity_db_insert_id() {
    global $serendipity;

    return mysql_insert_id($serendipity['dbConn']);
}

/**
 * Returns the number of affected rows of a SQL query
 *
 * @access public
 * @return int      Number of affected rows
 */
function serendipity_db_affected_rows() {
    global $serendipity;

    return mysql_affected_rows($serendipity['dbConn']);
}

/**
 * Returns the number of updated rows in a SQL query
 *
 * @access public
 * @return int  Number of updated rows
 */
function serendipity_db_updated_rows() {
    global $serendipity;

    preg_match(
        "/^[^0-9]+([0-9]+)[^0-9]+([0-9]+)[^0-9]+([0-9]+)/",
        mysql_info(),
        $arr);
        // mysql_affected_rows returns 0 if rows were matched but not changed.
        // mysql_info returns rows matched AND rows changed
        return $arr[2];
}

/**
 * Returns the number of matched rows in a SQL query
 *
 * @access public
 * @return int  Number of matched rows
 */
function serendipity_db_matched_rows() {
    global $serendipity;

    preg_match(
        "/^[^0-9]+([0-9]+)[^0-9]+([0-9]+)[^0-9]+([0-9]+)/",
        mysql_info(),
        $arr);
        // mysql_affected_rows returns 0 if rows were matched but not changed.
        // mysql_info returns rows matched AND rows changed
        return $arr[1];
}

/**
 * Returns a escaped string, so that it can be safely included in a SQL string encapsulated within quotes, without allowing SQL injection.
 *
 * @access  public
 * @param   string   input string
 * @return  string   output string
 */
function serendipity_db_escape_string($string) {
    global $serendipity;

    if (is_resource($serendipity['dbConn']) && function_exists('mysql_real_escape_string')) {
        return mysql_real_escape_string($string, $serendipity['dbConn']);
    } else {
        return mysql_escape_string($string);
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
 * Connect to the configured Database
 *
 * @access public
 * @return  ressource   connection handle
 */
function serendipity_db_connect() {
    global $serendipity;

    if (isset($serendipity['dbConn'])) {
        return $serendipity['dbConn'];
    }

    if (isset($serendipity['dbPersistent']) && $serendipity['dbPersistent']) {
        $function = 'mysql_pconnect';
    } else {
        $function = 'mysql_connect';
    }

    $serendipity['dbConn'] = $function($serendipity['dbHost'], $serendipity['dbUser'], $serendipity['dbPass']);
    mysql_select_db($serendipity['dbName']);
    serendipity_db_reconnect();

    return $serendipity['dbConn'];
}

function serendipity_db_reconnect() {
    global $serendipity;

    if (isset($serendipity['dbCharset'])) {
        mysql_query("SET NAMES " . $serendipity['dbCharset'], $serendipity['dbConn']);
        @define('SQL_CHARSET_INIT', true);
    } elseif (defined('SQL_CHARSET') && $serendipity['dbNames'] && !defined('SQL_CHARSET_INIT')) {
        mysql_query("SET NAMES " . SQL_CHARSET, $serendipity['dbConn']);
    }
}

/**
 * Prepares a Serendipty query input to fully valid SQL. Replaces certain "template" variables.
 *
 * @access public
 * @param  string   SQL query with template variables to convert
 * @return ressource    SQL ressource handle of the executed query
 */
function serendipity_db_schema_import($query) {
    static $search  = array('{AUTOINCREMENT}', '{PRIMARY}',
        '{UNSIGNED}', '{FULLTEXT}', '{FULLTEXT_MYSQL}', '{BOOLEAN}', '{TEXT}');
    static $replace = array('int(11) not null auto_increment', 'primary key',
        'unsigned'  , 'FULLTEXT', 'FULLTEXT', 'enum (\'true\', \'false\') NOT NULL default \'true\'', 'LONGTEXT');
    static $is_utf8 = null;
    global $serendipity;

    if ($is_utf8 === null) {
        $search[] = '{UTF_8}';
        if (  (isset($_POST['charset']) && $_POST['charset'] == 'UTF-8/') ||
              $serendipity['charset'] == 'UTF-8/' ||
              $serendipity['POST']['charset'] == 'UTF-8/' ||
              LANG_CHARSET == 'UTF-8' ) {
            $replace[] = '/*!40100 CHARACTER SET utf8 COLLATE utf8_unicode_ci */';
        } else {
            $replace[] = '';
        }
    }

    $query = trim(str_replace($search, $replace, $query));
    serendipity_db_query("SET storage_engine=MYISAM");
    if ($query[0] == '@') {
        // Errors are expected to happen (like duplicate index creation)
        return serendipity_db_query(substr($query, 1), false, 'both', false, false, false, true);
    } else {
        return serendipity_db_query($query);
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
function serendipity_db_probe($hash, &$errs) {
    global $serendipity;

    if (!function_exists('mysql_connect')) {
        $errs[] = 'No mySQL extension found. Please check your webserver installation or contact your systems administrator regarding this problem.';
        return false;
    }

    if (!($c = @mysql_connect($hash['dbHost'], $hash['dbUser'], $hash['dbPass']))) {
        $errs[] = 'Could not connect to database; check your settings.';
        $errs[] = 'The mySQL error was: ' . serendipity_specialchars(mysql_error());
        return false;
    }

    $serendipity['dbConn'] = $c;

    if (!@mysql_select_db($hash['dbName'])) {
        $errs[] = 'The database you specified does not exist.';
        $errs[] = 'The mySQL error was: ' . serendipity_specialchars(mysql_error());
        return false;
    }

    return true;
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
