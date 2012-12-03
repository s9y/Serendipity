<?php # $Id: postgres.inc.php 1178 2006-05-01 13:53:40Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/**
 * Tells the DB Layer to start a DB transaction.
 *
 * @access public
 */
function serendipity_db_begin_transaction(){
    global $serendipity;
    $serendipity['dbConn']->beginTransaction();
}

/**
 * Tells the DB Layer to end a DB transaction.
 *
 * @access public
 * @param  boolean  If true, perform the query. If false, rollback.
 */
function serendipity_db_end_transaction($commit){
    global $serendipity;
    if ($commit){
        $serendipity['dbConn']->commit();
    }else{
        $serendipity['dbConn']->rollback();
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
 * Connect to the configured Database
 *
 * @access public
 * @return  ressource   connection handle
 */
function serendipity_db_connect() {
    global $serendipity;

    $host = port = '';
    if (strlen($serendipity['dbHost'])) {
        if (false !== strstr($serendipity['dbHost'], ':')) {
            $tmp = explode(':', $serendipity['dbHost']);
            $host = "host={$tmp[0]};";
            $port = "port={$tmp[1]};";
        } else {
            $host = "host={$serendipity['dbHost']};";
        }
    }

    $serendipity['dbConn'] = new PDO(
                               sprintf(
                                 'pgsql:%sdbname=%s',
                                 "$host$port",
                                 $serendipity['dbName']
                               ),
                               $serendipity['dbUser'],
                               $serendipity['dbPass']
                             );

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
function serendipity_db_escape_string($string) {
    global $serendipity;
    return substr($serendipity['dbConn']->quote($string), 1, -1);
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
    return $offset . ', ' . $start;
}

/**
 * Return a LIMIT SQL option to the DB Layer as a full LIMIT statement
 *
 * @access public
 * @param   SQL string of a LIMIT option
 * @return  SQL string containing a full LIMIT statement
 */
function serendipity_db_limit_sql($limitstring) {
    $limit_split = explode(',', $limitstring);
    if (count($limit_split) > 1) {
        $limit = ' LIMIT ' . $limit_split[0] . ' OFFSET ' . $limit_split[1];
    } else {
        $limit = ' LIMIT ' . $limit_split[0];
    }
    return $limit;
}

/**
 * Returns the number of affected rows of a SQL query
 *
 * @access public
 * @return int      Number of affected rows
 */
function serendipity_db_affected_rows() {
    global $serendipity;
    return $serendipity['dbSth']->rowCount();
}

/**
 * Returns the number of updated rows in a SQL query
 *
 * @access public
 * @return int  Number of updated rows
 */
function serendipity_db_updated_rows() {
    global $serendipity;
    // it is unknown whether pg_affected_rows returns number of rows
    //  UPDATED or MATCHED on an UPDATE statement.
    return $serendipity['dbSth']->rowCount();
}

/**
 * Returns the number of matched rows in a SQL query
 *
 * @access public
 * @return int  Number of matched rows
 */
function serendipity_db_matched_rows() {
    global $serendipity;
    // it is unknown whether pg_affected_rows returns number of rows
    //  UPDATED or MATCHED on an UPDATE statement.
    return $serendipity['dbSth']->rowCount();
}

/**
 * Returns the latest INSERT_ID of an SQL INSERT INTO command, for auto-increment columns
 *
 * @access public
 * @param  string   Name of the table to get a INSERT ID for
 * @param  string   Name of the column to get a INSERT ID for
 * @return int      Value of the auto-increment column
 */
function serendipity_db_insert_id($table = '', $id = '') {
    global $serendipity;
    if (empty($table) || empty($id)) {
        // BC - will/should never be called with empty parameters!
        return $serendipity['dbConn']->lastInsertId();
    } else {
        $query = "SELECT currval('{$serendipity['dbPrefix']}{$table}_{$id}_seq'::text) AS {$id}";
        $res = $serendipity['dbConn']->prepare($query);
        $res->execute();
        foreach($res->fetchAll(PDO::FETCH_ASSOC) AS $row) {
            return $row[$id];
        }
        return $serendipity['dbConn']->lastInsertId();
    }
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
                         'assoc' => PDO::FETCH_ASSOC,
                         'num'   => PDO::FETCH_NUM,
                         'both'  => PDO::FETCH_BOTH,
                         'true'  => true,
                         'false' => false
    );

    if (!$expectError && ($reportErr || !$serendipity['production'])) {
        $serendipity['dbSth'] = $serendipity['dbConn']->prepare($sql);
    } else {
        $serendipity['dbSth'] = $serendipity['dbConn']->prepare($sql);
    }

    if (!$serendipity['dbSth']) {
        if (!$expectError && !$serendipity['production']) {
            print "<span class='msg_error'>Error in $sql</span>";
            print $serendipity['dbConn']->errorInfo() . "<BR/>\n";
            if (function_exists('debug_backtrace')) {
                highlight_string(var_export(debug_backtrace(), 1));
            }
            print "<pre>$sql</pre>\n";
        }
        return $type_map['false'];
    }

    $serendipity['dbSth']->execute();

    if ($serendipity['dbSth'] === true) {
        return $type_map['true'];
    }

    $result_type = $type_map[$result_type];

    $n = 0;

    $rows = array();
    foreach($serendipity['dbSth']->fetchAll($result_type) AS $row) {
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
    if(count($rows) == 0) {
        if ($single) {
            return $type_map['false'];
        }
        return $type_map['true'];
    }
    if(count($rows) == 1 && $single) {
        return $rows[0];
    }
    return $rows;
}

/**
 * Prepares a Serendipty query input to fully valid SQL. Replaces certain "template" variables.
 *
 * @access public
 * @param  string   SQL query with template variables to convert
 * @return ressource    SQL ressource handle of the executed query
 */
function serendipity_db_schema_import($query) {
    static $search  = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}',
        '{FULLTEXT}', '{BOOLEAN}', 'int(1)', 'int(10)', 'int(11)', 'int(4)', '{UTF_8}', '{TEXT}');
    static $replace = array('SERIAL', 'primary key', '', '', 'BOOLEAN NOT NULL', 'int2',
        'int4', 'int4', 'int4', '', 'text');

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
 * Try to connect to the configured Database (during installation)
 *
 * @access public
 * @param  array     input configuration array, holding the connection info
 * @param  array     referenced array which holds the errors that might be encountered
 * @return boolean   return true on success, false on error
 */
function serendipity_db_probe($hash, &$errs) {
    global $serendipity;

    if(!in_array('pgsql', PDO::getAvailableDrivers())) {
        $errs[] = 'PDO_PGSQL driver not avialable';
        return false;
    }

    $serendipity['dbConn'] = new PDO(
                               sprintf(
                                 'pgsql:%sdbname=%s',
                                 strlen($hash['dbHost']) ? ('host=' . $hash['dbHost'] . ';') : '',
                                 $hash['dbName']
                               ),
                               $hash['dbUser'],
                               $hash['dbPass']
                             );

    if (!$serendipity['dbConn']) {
        $errs[] = 'Could not connect to database; check your settings.';
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
    return '(' . str_replace(', ', '||', $string) . ')';
}

/* vim: set sts=4 ts=4 expandtab : */
