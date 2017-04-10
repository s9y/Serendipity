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
 * @param   boolean     If true, the executed SQL error is known to fail, and should be disregarded (errors can be ignored on DUPLICATE INDEX queries and the likes)
 * @return  mixed       Returns the result of the SQL query, depending on the input parameters
 */
function &serendipity_db_query($sql, $single = false, $result_type = "both", $reportErr = false, $assocKey = false, $assocVal = false, $expectError = false) {
    global $serendipity;
    $type_map = array('assoc' => MYSQLI_ASSOC, 'num' => MYSQLI_NUM, 'both' => MYSQLI_BOTH, 'true' => true, 'false' => false);

    if ($expectError) {
        $c = @mysqli_query($serendipity['dbConn'], $sql);
    } else {
        $c = mysqli_query($serendipity['dbConn'], $sql);
    }

    if (!$expectError && mysqli_error($serendipity['dbConn']) != '') {
        $msg = mysqli_error($serendipity['dbConn']);
        return $msg;
    }

    if (!$c) {
        if (!$expectError && !$serendipity['production']) {
            print mysqli_error($serendipity['dbConn']);
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

    switch(mysqli_num_rows($c)) {
        case 0:
            if ($single) {
                return $type_map['false'];
            }
            return $type_map['true'];
        case 1:
            if ($single) {
                return mysqli_fetch_array($c, $result_type);
            }
        default:
            if ($single) {
                return mysqli_fetch_array($c, $result_type);
            }

            $rows = array();
            while ($row = mysqli_fetch_array($c, $result_type)) {
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
    return mysqli_insert_id($serendipity['dbConn']);
}

/**
 * Returns the number of affected rows of a SQL query
 *
 * @access public
 * @return int      Number of affected rows
 */
function serendipity_db_affected_rows() {
    global $serendipity;
    return mysqli_affected_rows($serendipity['dbConn']);
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
        mysqli_info($serendipity['dbConn']),
        $arr);
        // mysqli_affected_rows returns 0 if rows were matched but not changed.
        // mysqli_info returns rows matched
        return $arr[1];
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
        mysqli_info($serendipity['dbConn']),
        $arr);
        // mysqli_affected_rows returns 0 if rows were matched but not changed.
        // mysqli_info returns rows matched
        return $arr[0];
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
    return mysqli_escape_string($serendipity['dbConn'], $string);
}

/**
 * Returns the option to a LIMIT SQL statement, because it varies across DB systems
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
 * @return  resource   connection handle
 */
function serendipity_db_connect() {
    global $serendipity;

    if (isset($serendipity['dbConn'])) {
        return $serendipity['dbConn'];
    }

    $function = 'mysqli_connect';

    $connparts = explode(':', $serendipity['dbHost']);
    if (!empty($connparts[1])) {
        // A "hostname:port" connection was specified
        $serendipity['dbConn'] = $function($connparts[0], $serendipity['dbUser'], $serendipity['dbPass'], $serendipity['dbName'], $connparts[1]);
    } else {
        // Connect with default ports
        $serendipity['dbConn'] = $function($connparts[0], $serendipity['dbUser'], $serendipity['dbPass']);
    }
    mysqli_select_db($serendipity['dbConn'], $serendipity['dbName']);
    serendipity_db_reconnect();

    return $serendipity['dbConn'];
}

function serendipity_db_reconnect() {
    global $serendipity;

    if (isset($serendipity['dbCharset']) && !empty($serendipity['dbCharset'])) {
        $use_charset = $serendipity['dbCharset'];
        @define('SQL_CHARSET_INIT', true);
    } elseif (defined('SQL_CHARSET') && $serendipity['dbNames'] && !defined('SQL_CHARSET_INIT')) {
        $use_charset = SQL_CHARSET;
    } else {
        $use_charset = 'utf8';
    }

    $serendipity['dbUtf8mb4'] = false;
    if (strtolower($use_charset) == 'utf8') {
        /* Utilize utf8mb4, if the server supports that */
        $mysql_version = mysqli_get_server_info($serendipity['dbConn']);
        if (version_compare($mysql_version, '5.5.3', '>=')) {
            $use_charset = 'utf8mb4';
            $serendipity['dbUtf8mb4'] = true;
        }
    }

    mysqli_set_charset($serendipity['dbConn'], $use_charset);
}

/**
 * Iterates all Serendipity related tables and check their indexes.
 * 
 * @param bool      $check If enabled, no ALTER statements will be executed, only a list of changeable indexes will be built
 * @param string    $prefix Can hold an optional table prefix other than $serendipity['dbPrefix']
 * @return array    Holds the array with indexes (key "indexes") and possible upgrade SQL statements (key "sql") and affected indexes ("warnings").
 */
function serendipity_db_migrate_index($check = true, $prefix = null) {
    global $serendipity;

    if ($prefix === null) {
        $prefix = $serendipity['dbPrefix'];
    }

    $return = array('indexes' => array(), 'sql' => array(), 'warnings' => array());
    $indexes = serendipity_db_query("SELECT S.INDEX_NAME, S.INDEX_TYPE, S.SEQ_IN_INDEX, S.COLUMN_NAME, S.SUB_PART, S.TABLE_NAME, C.DATA_TYPE, C.CHARACTER_MAXIMUM_LENGTH, C.NUMERIC_PRECISION, S.NON_UNIQUE
                                       FROM INFORMATION_SCHEMA.STATISTICS AS S
 
                            LEFT OUTER JOIN INFORMATION_SCHEMA.COLUMNS AS C
                                         ON (C.TABLE_SCHEMA = S.TABLE_SCHEMA AND C.TABLE_NAME = S.TABLE_NAME AND C.COLUMN_NAME = S.COLUMN_NAME)
 
                                      WHERE S.TABLE_SCHEMA =  '" . $serendipity['dbName'] . "'
                                        AND S.TABLE_NAME LIKE '" . $prefix . "%'");

    if (!is_array($indexes)) {
        $return['warnings'][] = "Could not read MySQL INFORMATION_SCHEMA table, which is required for migration. Please adjust permissions: " . $indexes;
        return $return;
    }

    $single_max = 191;
    $sum_max    = 250;

    $checkindexes = array();
    $indextypes = array();
    foreach($indexes AS $index) {
        $return['indexes'][] = $index;
        $length = $index['SUB_PART'];
        if (empty($length)) {
            // Deduce index byte length from colum type
            if (!empty($index['CHARACTER_MAXIMUM_LENGTH'])) {
                $length = $index['CHARACTER_MAXIMUM_LENGTH']; // Actual character limit according to UTF-8
            } else if ($index['DATA_TYPE'] == 'date') {
                $length = 1; // Divided by 4 to match with UTF-8 MB requirements (real: 3)
            } else if ($index['DATA_TYPE'] == 'timestamp') {
                $length = 1; // Divided by 4 to match with UTF-8 MB requirements (real: 4)
            } else {
                $length = ceil($index['NUMERIC_PRECISION'] / 4); // Divided by 4 to match with UTF-8 MB requirements
            }

            if (empty($length)) {
                $length = 10;
                $return['warnings'][] = 'Index length on unspecified column ' . $index['TABLE_NAME'] . '.' . $index['COLUMN_NAME'] . ' was set to 10 Bytes';
            }
        }

        if ($index['INDEX_TYPE'] !== 'FULLTEXT') {
            if ($index['INDEX_TYPE'] == 'PRIMARY') {
                $indextypes[$index['TABLE_NAME'] . '.' . $index['INDEX_NAME']] = 'PRIMARY';
            } elseif ($index['NON_UNIQUE'] == 0) {
                $indextypes[$index['TABLE_NAME'] . '.' . $index['INDEX_NAME']] = 'UNIQUE';
            } else {
                $indextypes[$index['TABLE_NAME'] . '.' . $index['INDEX_NAME']] = 'INDEX';
            }
            $checkindex[$index['TABLE_NAME']][$index['INDEX_NAME']][$index['SEQ_IN_INDEX']][$index['COLUMN_NAME']] = $length;
        }
    }

    echo '<pre>' . print_r($checkindex, true) . '</pre>';
    foreach($checkindex AS $tablename => $tables) {
        foreach($tables AS $indexname => $indexes) {
            foreach($indexes AS $indexcount => $indexdata) {
                $indexlength = 0;
                $newindexlength = 0;
                $newindex = array();

                foreach($indexdata AS $indexcol => $collength) {
                    $newcollength = $collength;
                    if (count($indexdata) == 1 && $collength > $single_max) {
                        $return['warnings'][] = $tablename . '.' . $indexname . ': Index on ' . $indexcol . ' is too large (' . $collength . ' &gt; ' . $single_max . ' Bytes)';
                        $indextype = $indextypes[$tablename . '.' . $indexname];
                        if ($indextype == 'PRIMARY') {
                            $dropname = 'PRIMARY KEY';
                        } else {
                            $dropname = 'INDEX `' . $indexname . '`';
                        }
                        $return['sql'][] = 'ALTER TABLE `' . $tablename . '` DROP ' . $dropname . ', ADD ' . $indextype . ' `' . $indexname . '` (`' . $indexcol . '` (' . $single_max . '))';
                        $collength = $single_max;
                    } else {
                        $checkprefix = $serendipity['dbPrefix'];
                        switch($tablename . '.' . $indexcol) {
                            case $prefix . 'options.name':
                                $newcollength = 186;
                                $newindex[] = '`' . $indexcol . '` (' . $newcollength . ')';
                                break;

                            case $prefix . 'options.okey':
                            case $prefix . 'exits.host':
                                $newcollength = 64;
                                $newindex[] = '`' . $indexcol . '` (64)';
                                break;

                            case $prefix . 'exits.path':
                                $newcollength = 180;
                                $newindex[] ='`' . $indexcol . '` (' . $newcollength . ')';
                                break;

                            case $prefix . 'exits.day':
                            case $prefix . 'exits.entry_id':
                                $newindex[] = '`' . $indexcol . '`';
                                break;

                            case $prefix . 'wikireferences.refname':
                                $newcollength = 150;
                                $newindex[] = '`' . $indexcol . '` (' . $newcollength . ')';
                                break;

                            // Default length of 191*4 = less than maximum of 767
                            case $prefix . 'refs.refs':
                            case $prefix . 'tweetbackshorturls.longurl':
                            case $prefix . 'facebook.base_url':
                            case $prefix . 'cronjoblog.type':
                            case $prefix . 'spamblocklog.type':
                            case $prefix . 'links.title':
                            case $prefix . 'percentagedone.title':
                            case $prefix . 'comments.email':
                            case $prefix . 'config.name':
                                $newcollength = 191;
                                $newindex[] = '`' . $indexcol . '` (' . $newcollength . ')';
                                break;
                            default:
                                $newindex[] = '`' . $indexcol . '` (' . $collength . ')';
                                break;
                        }
                    }
                }

                $indexlength += $collength;
                $newindexlength += $newcollength;

                if ($indexlength > $sum_max) {
                    $return['warnings'][] = $tablename . '.' . $indexname . ': Total Index is too large (' . $indexlength . ' &gt; ' . $sum_max . ' Bytes)';
                    if ($newindexlength > $sum_max) {
                        $return['warnings'][] = $tablename . '.' . $indexname . ': Even after automatic fixup, total Index would be too large (' . $indexlength . ' &gt; ' . $sum_max . ' Bytes, after fix: ' . $newindexlength . ') -- NOT FIXING!';
                    } else {
                        $indextype = $indextypes[$tablename . '.' . $indexname];
                        if ($indextype == 'PRIMARY') {
                            $dropname = 'PRIMARY KEY';
                        } else {
                            $dropname = 'INDEX `' . $indexname . '`';
                        }
                        $return['sql'][] = 'ALTER TABLE `' . $tablename . '` DROP ' . $dropname . ', ADD ' . $indextype . ' `' . $indexname . '` (' . implode(', ', $newindex) . ')';
                    }
                }
            }
        }
    }

    $tables = serendipity_db_query("SHOW TABLES LIKE '" . $serendipity['dbPrefix'] . "%'");
    if (!is_array($tables)) {
        $return['warnings'] = 'Could not analyze existing tables via SHOW TABLES, please check permissions.' . $tables;
        return $return;
    }

    foreach($tables AS $table) {
        $return['sql'][] = 'ALTER TABLE `' . $table[0] . '` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci';
    }    

    return $return;
}

/**
 * Prepares a Serendipty query input to fully valid SQL. Replaces certain "template" variables.
 *
 * @access public
 * @param  string   SQL query with template variables to convert
 * @return resource    SQL resource handle of the executed query
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
        if (  $_POST['charset'] == 'UTF-8/' ||
              $serendipity['charset'] == 'UTF-8/' ||
              $serendipity['POST']['charset'] == 'UTF-8/' ||
              LANG_CHARSET == 'UTF-8' ) {
            if ($serendipity['dbUtf8mb4']) {
                $replace[] = '/*!50503 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */';
            } else {
                $replace[] = '/*!40100 CHARACTER SET utf8 COLLATE utf8_unicode_ci */';
            }
        } else {
            $replace[] = '';
        }
    }

    serendipity_db_query("SET storage_engine=MYISAM");

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

    if (!function_exists('mysqli_connect')) {
        $errs[] = 'No mySQLi extension found. Please check your webserver installation or contact your systems administrator regarding this problem.';
        return false;
    }

    $function = 'mysqli_connect';
    $connparts = explode(':', $hash['dbHost']);
    if (!empty($connparts[1])) {
        // A "hostname:port" connection was specified
        $c = @$function($connparts[0], $hash['dbUser'], $hash['dbPass'], $hash['dbName'], $connparts[1]);
    } else {
        // Connect with default ports
        $c = @$function($connparts[0], $hash['dbUser'], $hash['dbPass']);
    }

    if (!$c) {
        $errs[] = 'Could not connect to database; check your settings.';
        $errs[] = 'The mySQL error was: ' . serendipity_specialchars(mysqli_connect_error());
        return false;
    }

    $serendipity['dbConn'] = $c;

    if ( !@mysqli_select_db($c, $hash['dbName']) ) {
        $errs[] = 'The database you specified does not exist.';
        $errs[] = 'The mySQL error was: ' . serendipity_specialchars(mysqli_error($c));
        return false;
    }

    serendipity_db_reconnect();

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
