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

    $use_charset = '';
    if (isset($serendipity['dbCharset']) && !empty($serendipity['dbCharset'])) {
        $use_charset = $serendipity['dbCharset'];
        @define('SQL_CHARSET_INIT', true);
    } elseif (defined('SQL_CHARSET') && $serendipity['dbNames'] && !defined('SQL_CHARSET_INIT')) {
        $use_charset = SQL_CHARSET;
    }

    if ($use_charset != '') {
        mysqli_set_charset($serendipity['dbConn'], $use_charset);
    }
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
        'unsigned'  , 'FULLTEXT', 'FULLTEXT', 'enum (\'true\', \'false\')', 'LONGTEXT');
    global $serendipity;
    
    $search[] = '{UTF_8}';
    if (  $_POST['charset'] == 'UTF-8/' ||
          $serendipity['charset'] == 'UTF-8/' ||
          $serendipity['POST']['charset'] == 'UTF-8/' ||
          LANG_CHARSET == 'UTF-8' ) {
        if (serendipity_utf8mb4_ready()) {
            $replace[] = 'ROW_FORMAT=DYNAMIC /*!40100 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */';
        } else {
            # in old versions we stick to the three byte pseudo utf8 to not trip
            # over the max index restriction of 1000 bytes
            $replace[] = '/*!40100 CHARACTER SET utf8 COLLATE utf8_unicode_ci */';
        }
    } else {
        $replace[] = '';
    }
    

    if (serendipity_utf8mb4_ready()) {
        # InnoDB enables us to use utf8mb4 with the higher max index size
        serendipity_db_query("SET storage_engine=INNODB");
    } else {
        # Before 5.6.4/10.0.5 InnoDB did not support fulltext indexes, which we use,
        # thus we stay with MyISAM here
        serendipity_db_query("SET storage_engine=MYISAM");
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
 * Check if we think that it is safe to ugprade to utf8mb4. This checks version numbers and applied settings.
 * Depending on the version of mariadb/mysql we need to check either one or three settings. We check for
 * innodb being available with fulltext index and large index support, so that our database scheme can work
 *
 * @return boolean   Whether the database could support utf8mb4
 */ 
function serendipity_utf8mb4_ready() {
    global $serendipity;

    $mysql_version = mysqli_get_server_info($serendipity['dbConn']);
    $maria = false;
    if (strpos($mysql_version, 'MariaDB') !== false) {
        $maria = true;
    }
    if ($maria) {
        # maria trips up our version detection scheme by prepending 5.5.5 to newer versions
        $mysql_version = str_replace('5.5.5-', '', $mysql_version);
    }

    if ($maria) {
        # see https://mariadb.com/kb/en/innodb-file-format/ for when barracuda is available, and when it's the only option
        # see https://docs.nextcloud.com/server/15/admin_manual/configuration_database/mysql_4byte_support.html for which
        # variables we have to check to assume utf8mb4 it can work (with the large indexes we need)
        
        if (version_compare($mysql_version, '10.3.1', '>=')) {
            # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_per_table
            $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
            try {
                return $rows[0][1] == 'ON';
            } catch (Exception $e) {
                return false;
            }
        }

        # see https://mariadb.com/kb/en/full-text-index-overview/. We need 10.0.5 to have fulltext indexes with innodb
        if (version_compare($mysql_version, '10.0.5', '>=')) {
            # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_per_table
            $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
            try {
                if ($rows[0][1] != 'ON') {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }

            # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_format
            $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_file_format'");
            try {
                if ($rows[0][1] != 'barracuda') {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }

            # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_large_prefix
            $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_large_prefix'");
            try {
                if ($rows[0][1] != 'ON') {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }
        }
        return false;   # version too old
    }

    # now we know it is not mariadb, but "real" mysql

    # These versions might need to be changed based on testing feedback
    if (version_compare($mysql_version, '8.0.0', '>=')) {
        $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
        try {
            return $rows[0][1] == 'ON';
        } catch (Exception $e) {
            return false;
        }
    }

    # see https://dev.mysql.com/doc/refman/5.6/en/innodb-fulltext-index.html. We need 5.6 for fulltext indexes
    if (version_compare($mysql_version, '5.6', '>=')) {
        # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_per_table
        $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
        try {
            if ($rows[0][1] != 'ON') {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }

        # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_format
        $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_file_format'");
        try {
            if ($rows[0][1] != 'barracuda') {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }

        # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_large_prefix
        $rows = serendipity_db_query("SHOW VARIABLES LIKE 'innodb_large_prefix'");
        try {
            if ($rows[0][1] != 'ON') {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
    
    return false;    # version too old
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
