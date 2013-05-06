<?php
# mysql_sqlrelay.inc.php modified from mysql.inc.php  2007-10-06 
# dantemason@gmail.com

/**
 * Tells the DB Layer to start a DB transaction.
 *
 * @access public
 */
function serendipity_db_begin_transaction() {
    global $serendipity;

    $type_of_database = sqlrcon_identify($serendipity['dbConn']);
    switch($type_of_database) {
        case 'mysql':
           $sqlstr = 'start transaction';
           break;

        case 'postgresql':
           $sqlstr = 'begin work';
           break;

        case 'sqlite':
           $sqlstr = 'begin transaction';
           break;

        default:
           $sqlstr = 'start transaction';
           break;
    }
    serendipity_db_query($sqlstr);
}

/**
 * Tells the DB Layer to end a DB transaction.
 *
 * @access public
 * @param  boolean  If true, perform the query. If false, rollback.
 */
function serendipity_db_end_transaction($commit) {
   global $serendipity;

    if ($commit) {
        sqlrcon_commit($serendipity['dbConn']);
    } else {
        sqlrcon_rollback($serendipity['dbConn']);
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
    global $serendipity;

    if (sqlrcon_identify($serendipity['dbConn']) == "sqlite") {
        $sql = array();
        if (!is_array($search_ids)) {
            return false;
        }

        foreach($search_ids AS $id) {
            $sql[] = $col . ' = ' . $id;
        }

        $cond = '(' . implode($type, $sql) . ')';
        return $cond;
    } else {
        return $col . " IN (" . implode(', ', $search_ids) . ")";
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

function generate_resultset($cursor, $result_type = 'sqlr_BOTH') {
   $return_row = array();

    for ($r_row = 0, $max_r = sqlrcur_rowCount($cursor) ; $r_row < $max_r ; $r_row++) {
       for ($r_col=0, $max_rc = sqlrcur_colCount($cursor); $r_col < $max_rc ; $r_col++) {
            if ($result_type == 'sqlr_ASSOC') {
                $return_row[sqlrcur_getColumnName($cursor, $r_col)] = sqlrcur_getField($cursor, $r_row, $r_col);
            }else{
                $return_row[$r_row][$r_col] = sqlrcur_getField($cursor, $r_row,$r_col);
                $return_row[$r_row][sqlrcur_getColumnName($cursor, $r_col)] = $return_row[$r_row][$r_col];
            }
        }
    }
   return $return_row;
}

function &serendipity_db_query($sql, $single = false, $result_type = "both", $reportErr = false, $assocKey = false, $assocVal = false, $expectError = false) {
    global $serendipity;
    $type_map = array(
                         'assoc' => sqlr_ASSOC,
                         'num'   => sqlr_NUM,
                         'both'  => sqlr_BOTH,
                         'true'  => true,
                         'false' => false
    );
    static $benchmark = false;

    // highlight_string(var_export($sql, 1));

    if (!is_resource($serendipity['dbConn'])) {
        return false;
    }

    $cur = sqlrcur_alloc($serendipity['dbConn']);
    $serendipity['dbCursor'] = $cur;

    if ($benchmark) {
        $start = microtime_float();
    }

    if ($expectError) {
       $c = sqlrcur_sendQuery($cur, $sql);
    } else {
       $c = sqlrcur_sendQuery($cur, $sql);
    }

    if ($benchmark) {
        $end = microtime_float();

        $cur = sqlrcur_alloc($serendipity['dbConn']);
        $sql_b="INSERT INTO BLOGLOG (request, timestamp, sql, exec_time, ip) VALUES ('" . serendipity_db_escape_string($_SERVER['REQUEST_URI']) . "', NOW(), '" . serendipity_db_escape_string($sql) . "', '" . (number_format($end-$start, 10)) . "', '" . serendipity_db_escape_string($_SERVER['REMOTE_ADDR']) . "')";
        $c = sqlrcur_sendQuery($cur, $sql_b);
        
        $psql = $sql;
        $psql = preg_replace('@[0-9]{10}@', 'TIMESTAMP', $psql);
        $sql_U="UPDATE BLOGLOG_TOTAL SET counter = counter + 1 WHERE sql = '" . serendipity_db_escape_string($psql) . "'";
        $c = sqlrcur_sendQuery($cur, $sql_U);
        if (sqlrcur_affectedRows() < 1) {
           $sql_i="INSERT INTO BLOGLOG_TOTAL (sql, counter) VALUES ('" . serendipity_db_escape_string($psql) . "', 1)";
           $c = sqlrcur_sendQuery($cur,$sql_i);
        }
    }

    if (!$expectError && sqlrcur_errorMessage($cur) != '') {
        $msg = '<pre>' . htmlspecialchars($sql) . '</pre> / ' . htmlspecialchars(sqlrcur_errorMessage($cur));
        return $msg;
    }

    if (!$c) {
        if (!$expectError && !$serendipity['production']) {
            print '<pre>' . htmlspecialchars($sql) . '</pre> / ' . htmlspecialchars(sqlrcur_errorMessage($cur));
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

    switch(sqlrcur_rowCount($cur)) {
        case 0:
            if ($single) {
                return $type_map['false'];
            }
            return $type_map['true'];

        case 1:
            if ($single) {
                $row = generate_resultset($cur, $result_type);
                if ($result_type != 'sqlr_ASSOC') {
                    $row=$row[0];
                }
                return $row;
            }

        default:
            if ($single) {
                return generate_resultset($cur, $result_type);
            }

            $row=generate_resultset($cur);
            $rows=array();
            
            for($idx=0, $idxc = count($row); $idx < $idxc ; $idx++) {
                if (!empty($assocKey)) {
                    // You can fetch a key-associated array via the two function parameters assocKey and assocVal
                    if (empty($assocVal)) {
                        $rows[$assocKey] = $row[$idx][$assocKey];
                    } else {
                        $rows[$row[$idx][$assocKey]] = $row[$idx][$assocVal];
                    }
                } else {
                    $rows = $row;
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
 *
 * If you insert multiple rows using a single INSERT statement, 
 * LAST_INSERT_ID() returns the value generated for the first inserted row only.
 */
function serendipity_db_insert_id($table = '', $id = '') {
    global $serendipity;

    $type_of_database = sqlrcon_identify($serendipity['dbConn']);
    switch($type_of_database) {
        case 'mysql':
           $sqlstr='SELECT LAST_INSERT_ID()';
           break;

        case 'postgresql':
           $sqlstr = "SELECT currval('{$serendipity['dbPrefix']}{$table}_{$id}_seq'::text) AS {$id}";
           break;

        case 'sqlite':
           $sqlstr = 'SELECT last_insert_rowid()';
           break;

        default:
           $sqlstr = 'SELECT LAST_INSERT_ID()';
    }

    $row = serendipity_db_query($sqlstr, true);

    return $row[0];
}

/**
 * Returns the number of affected rows of a SQL query
 *
 * @access public
 * @return int      Number of affected rows
 */
function serendipity_db_affected_rows() {
    global $serendipity;
    
    /* int sqlrcur_affectedRows(int sqlrcurref)
     * Returns the number of rows that were updated, inserted or deleted by the query. 
     * Not all databases support this call. 
     * Don't use it for applications which are designed to be portable across databases. 
     * -1 is returned by databases which don't support this option.
     */

    return sqlrcur_affectedRows($serendipity['dbCursor']);
}

/**
 * Returns the number of updated rows in a SQL query
 *
 * @access public
 * @return int  Number of updated rows
 */
function serendipity_db_updated_rows() {
    /*

    preg_match(
        "/^[^0-9]+([0-9]+)[^0-9]+([0-9]+)[^0-9]+([0-9]+)/",
        mysql_info(),
        $arr);
        // mysql_affected_rows returns 0 if rows were matched but not changed.
        // mysql_info returns rows matched AND rows changed
        return $arr[2];
     */
     return serendipity_db_affected_rows();
}

/**
 * Returns the number of matched rows in a SQL query
 *
 * @access public
 * @return int  Number of matched rows
 */
function serendipity_db_matched_rows() {
   /*

    preg_match(
        "/^[^0-9]+([0-9]+)[^0-9]+([0-9]+)[^0-9]+([0-9]+)/",
        mysql_info(),
        $arr);
        // mysql_affected_rows returns 0 if rows were matched but not changed.
        // mysql_info returns rows matched AND rows changed
    return $arr[1];
  */
    return serendipity_db_affected_rows();
}

/**
 * Returns a escaped string, so that it can be safely included in a SQL string encapsulated within quotes, without allowing SQL injection.
 *
 * @access  public
 * @param   string   input string
 * @return  string   output string
 */

function serendipity_db_escape_string($str) {
    global $serendipity;
    static $search  = array("\x00", '%',   "'",   '\"');
    static $replace = array('%00',  '%25', "''", '\\\"');

    $type_of_database = sqlrcon_identify($serendipity['dbConn']);
    switch($type_of_database) {
        case 'mysql':
            if (function_exists('mysql_real_escape_string')) {
               $rtnstr = mysql_real_escape_string($str, $serendipity['dbConn']);
            } else {
               $rtnstr = addslashes($str);
            }
            break;

        case 'postgresql':
            if (function_exists('pg_escape_string')) {
               $rtnstr = pg_escape_string($str);
            } else {
               $rtnstr = addslashes($str);
            }
            break;

        case 'sqlite':
            $rtnstr = str_replace($search, $replace, $str);
            break;

        default:
            $rtnstr = addslashes($str);
    }

   return $rtnstr;
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
    global $serendipity;

    $type_of_database = sqlrcon_identify($serendipity['dbConn']);
    switch($type_of_database) {
    case "mysql":
       return ' LIMIT ' . $limitstring;
    case "postgresql":
        $limit_split = explode(',', $limitstring);
        if (count($limit_split) > 1) {
            $limit = ' LIMIT ' . $limit_split[0] . ' OFFSET ' . $limit_split[1];
        } else {
            $limit = ' LIMIT ' . $limit_split[0];
        }
        return $limit;
    default:
       return ' LIMIT ' . $limitstring;
    }
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
        $function = 'sqlrcon_alloc';
    } else {
        $function = 'sqlrcon_alloc';
    }

    #$serendipity['dbHost']="localhost:9000"
    $dbHostPort=explode(":", $serendipity['dbHost']);
    $serendipity['dbConn'] = $function($dbHostPort[0], $dbHostPort[1], "", $serendipity['dbUser'], $serendipity['dbPass'], 0, 1);
    sqlrcon_debugOff($serendipity['dbConn']);

    if( sqlrcon_identify($serendipity['dbConn']) == "mysql") {
       serendipity_db_reconnect();
    }

    return $serendipity['dbConn'];
}

function serendipity_db_reconnect() {
    global $serendipity;

    if (isset($serendipity['dbCharset'])) {
        serendipity_db_query("SET NAMES " . $serendipity['dbCharset']);
        define('SQL_CHARSET_INIT', true);
    } elseif (defined('SQL_CHARSET') && $serendipity['dbNames'] && !defined('SQL_CHARSET_INIT')) {
        serendipity_db_query("SET NAMES " . SQL_CHARSET);
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
    global $serendipity;

    $type_of_database = sqlrcon_identify($serendipity['dbConn']);
    switch($type_of_database) {
        case "mysql":
            static $search  = array('{AUTOINCREMENT}', '{PRIMARY}',
                '{UNSIGNED}', '{FULLTEXT}', '{FULLTEXT_MYSQL}', '{BOOLEAN}', '{TEXT}');
            static $replace = array('int(11) not null auto_increment', 'primary key',
                'unsigned'  , 'FULLTEXT', 'FULLTEXT', 'enum (\'true\', \'false\') NOT NULL default \'true\'', 'LONGTEXT');
            static $is_utf8 = null;
    
            if ($is_utf8 === null) {
                $search[] = '{UTF_8}';
                if ((isset($_POST['charset']) && $_POST['charset'] == 'UTF-8/') ||
                    $serendipity['charset'] == 'UTF-8/' ||
                    $serendipity['POST']['charset'] == 'UTF-8/' ||
                    LANG_CHARSET == 'UTF-8' ) {
                    $replace[] = '/*!40100 CHARACTER SET utf8 COLLATE utf8_unicode_ci */';
                } else {
                    $replace[] = '';
                }
            }
            break;

        case "postgresql":
            static $search  = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}',
                '{FULLTEXT}', '{FULLTEXT_MYSQL}', '{BOOLEAN}', 'int(1)', 'int(10)', 'int(11)', 'int(4)', '{UTF_8}', '{TEXT}');
            static $replace = array('SERIAL', 'primary key', '', 
                '', '', 'BOOLEAN NOT NULL', 'int2', 'int4', 'int4', 'int4', '', 'text');
            break;
    
        case "sqlite":
            static $search  = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}', '{FULLTEXT}', '{FULLTEXT_MYSQL}', '{BOOLEAN}', '{UTF_8}', '{TEXT}');
            static $replace = array('INTEGER', 'PRIMARY KEY', '', '', '', 'BOOLEAN NOT NULL', '', 'LONGTEXT');
            break;

        default:
           return true;
    }

    $query = trim(str_replace($search, $replace, $query));

    if ($query{0} == '@') {
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
    $c = null;

    if (!function_exists('sqlrcon_alloc')) {
        $errs[] = 'No sql_relay  extension found. Please check your webserver installation or contact your systems administrator regarding this problem.';
       return false;
    }

    if (!($c=@sqlrcon_alloc($hash['dbHost'], '', '', $hash['dbUser'], $hash['dbPass'], 0, 5))) {
        $errs[] = 'Could not connect to database; check your settings.';
        return false;
    }


    $serendipity['dbConn'] = $c;

    /* which db should be used is defined in sqlrelay.conf */

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
    global $serendipity;

    $type_of_database = sqlrcon_identify($serendipity['dbConn']);
    switch($type_of_database) {
        case 'mysql':
            return 'concat(' . $string . ')';

        case 'postgresql':
            return '(' . str_replace(', ', '||', $string) . ')';

        case 'sqlite':
            return 'concat(' . $string . ')';

        default:
            return 'concat(' . $string . ')';
    }
}

/* vim: set sts=4 ts=4 expandtab : */
