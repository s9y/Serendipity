<?php
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Zend\Db\Adapter\Adapter;

$result = null;
/**
 * Tells the DB Layer to start a DB transaction.
 *
 * @access public
 */
function serendipity_db_begin_transaction() {
    global $serendipity;
    $serendipity['dbConn']->getDriver()->getConnection()->beginTransaction();
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
        $serendipity['dbConn']->getDriver()->getConnection()->commit();
    } else {
        $serendipity['dbConn']->getDriver()->getConnection()->rollback();
    }
}

/**
 * Assemble and return SQL condition for a "IN (...)" clause
 *
 * @access public
 * @param  string   table column name
 * @param  array    referenced array of values to search for in the "IN (...)" clause
 * @param  string   condition of how to associate the different input values of the $search_ids parameter - NO EFFECT as this now is a real IN-clause
 * @return string   resulting SQL string
 */
function serendipity_db_in_sql($col, &$search_ids, $type = ' OR ') {
    global $serendipity;
    if(! is_array($search_ids) || count($search_ids) == 0) {
        return "";
    }
    $sql = new Sql($serendipity['dbConn']);
    $select = new Select();
    $select->where->in($col, $search_ids);
    return str_replace("WHERE", "", $sql->getSqlStringForSqlObject($select));     # the inserted WHERE is unexpected for the calling code
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
    if ($single) {
        $result = $serendipity['dbConn']->query($sql, Adapter::QUERY_MODE_EXECUTE);
        $resultArray = $result->toArray();
        $resultArray = $resultArray[0];
        if(is_array($resultArray) && $result_type != "assoc") {
            $i=0;       # the underlying code expects additional numerical indices
            foreach ($resultArray as $key=>$value) {
                $resultArray[$i] = $value;
                $i+=1;
            }
        }
    } else {
        $result = $serendipity['dbConn']->query($sql, Adapter::QUERY_MODE_EXECUTE);
        if (method_exists($result, "toArray")) {    # toArray doesn't exist when not SELECTing, checking prevents the error
            $resultArray = $result->toArray();
            if (count($resultArray) == 0) {
                return 1;
            }
        }
    }
    return $resultArray;
}


/**
 *  Perform a sql-query with the now possible ? syntax for parameters
 *  @param  string   SQL query to exectue, for example "SELECT * from X where Y = ?
 *  @param  array    Paramters to insert into the sql-query
 *  @result mixed    Returns the result of the SQL query, depending on the input parameters
 */
function serendipity_db_query2($sql, $parameters = array()) {
    global $serendipity;
    $result = $serendipity['dbConn']->query($sql, $parameters);
    if (method_exists($result, "toArray")) {
        return $result->toArray();
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
    return $serendipity['dbConn']->getDriver()->getConnection()->getLastGeneratedValue();
}

/**
 * Returns the number of affected rows of a SQL query
 *
 * @access public
 * @return int      Number of affected rows
 */
function serendipity_db_affected_rows() {
    if ($result != null) {
        return $result->getAffectedRows();
    }
    return 0;
}

/**
 * Returns the number of updated rows in a SQL query
 *
 * @access public
 * @return int  Number of updated rows
 */
function serendipity_db_updated_rows() {
    if ($result != null) {
        return $result->getAffectedRows();
    }
    return 0;
}

/**
 * Returns the number of matched rows in a SQL query
 *
 * @access public
 * @return int  Number of matched rows
 */
function serendipity_db_matched_rows() {
    if ($result != null) {
        return $result->getAffectedRows();
    }
    return 0;
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
    return substr($serendipity['dbConn']->getPlatform()->quoteValue($string), 1, -1);   # quoteValue escapes and quotes, but outer quotation is done manually, hence the substr
}

/**
 * Returns the option to a LIMIT SQL statement, because it varies accross DB systems
 *
 * @access public
 * @param  int      Number of the first row to return data from
 * @param  int      Number of rows to return
 * @return string   SQL string to pass to a LIMIT statement
 */
function serendipity_db_limit($offset, $limit) {
    global $serendipity;
    $sql = new Sql($serendipity['dbConn']);
    $select = new Select;
    $select->limit($limit);
    $select->offset($offset);
    return str_replace("LIMIT", "", $sql->getSqlStringForSqlObject($select));    # TODO: Find a way to not hardcode the LIMIT here
}

/**
 * Return a LIMIT SQL option to the DB Layer as a full LIMIT statement
 *
 * @access public
 * @param   SQL string of a LIMIT option
 * @return  SQL string containing a full LIMIT statement
 */
function serendipity_db_limit_sql($limitstring) {
    return ' LIMIT ' . $limitstring;    # TODO: Find a way to not hardcode the LIMIT here
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

    $dbName = $serendipity['dbName'];
    if ($serendipity['dbType'] == "pdo-sqlite" || $serendipity['dbType']  == "sqlite3" || $serendipity['dbType'] == 'sqlite3oo' || $serendipity['dbType'] == "sqlite") {
        $dbName .= ".db";   # the old sqlite-wrapper appended this .db to the dbName, keep this for bc
    }

    $serendipity['dbConn'] = new Adapter(
        array(
            'driver' => $serendipity['dbType'],
            'database' => $dbName,
            'username' => $serendipity['dbUser'],
            'password' => $serendipity['dbPass'],
            'hostname' => $hash['dbHost']
        )
    );


    return $serendipity['dbConn'];
}

function serendipity_db_reconnect() {
    # That should never be necessary, should it?
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
    switch ($serendipity['dbType']) {
        case 'mysqli':
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

        case 'pdo-postgres':
        case "postgresql":
            static $search  = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}',
                '{FULLTEXT}', '{FULLTEXT_MYSQL}', '{BOOLEAN}', 'int(1)', 'int(10)', 'int(11)', 'int(4)', '{UTF_8}', '{TEXT}');
            static $replace = array('SERIAL', 'primary key', '',
                '', '', 'BOOLEAN NOT NULL', 'int2', 'int4', 'int4', 'int4', '', 'text');
            break;

        case 'sqlite3':
        case 'sqlite3oo':
        case 'pdo-sqlite':
        case "sqlite":
            static $search  = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}', '{FULLTEXT}', '{FULLTEXT_MYSQL}', '{BOOLEAN}', '{UTF_8}', '{TEXT}');
            static $replace = array('INTEGER', 'PRIMARY KEY', '', '', '', 'BOOLEAN NOT NULL', '', 'LONGTEXT');
            break;

        default:
           return true;
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
    $dbName = $hash['dbName'];
    if ($hash['dbType'] == "pdo-sqlite" || $hash['dbType']  == "sqlite3" || $hash['dbType'] == "sqlite" || $hash['dbType'] == 'sqlite3oo') {
        $dbName .= ".db";   # the old sqlite-wrapper appended this .db to the dbName, keep this for bc
    }

    $hash['dbConn'] = new Adapter(
        array(
            'driver' => $hash['dbType'],
            'database' => $dbName,
            'username' => $hash['dbUser'],
            'password' => $hash['dbPass'],
            'hostname' => $hash['dbHost']
        )
    );

    try {
        $hash['dbConn']->getDriver()->getConnection();
    }  catch( Exception $e ) {
        $errs[] = ($e->getMessage());
    }
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
    switch($serendipity['dbType']) {
        case 'pdo-postgres':
        case 'postgres':
            return '(' . str_replace(', ', '||', $string) . ')';
            break;
        default:
            return 'concat(' . $string . ')';
            break;
    }

}

/* vim: set sts=4 ts=4 expandtab : */
