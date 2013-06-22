<?php # $Id: plugin_api.inc.php 1168 2006-04-29 13:06:11Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

class serendipity_plugin_api_extension extends serendipity_plugin_api
{
    /**
     * Prepare a given one dimension array for reordering
     *
     * @access public
     * @author Falk Doering
     * @param  array  the array
     * @param  string the key of the parent id
     * @return array  the final array with two new keys: 'up' and 'down'
     */

    function prepareReorder($array, $parent_id = 'parent_id')
    {
        if (is_array($array)) {
            for ($i = 0, $ii = count($array); $i < $ii; $i++) {
                $array[$i]['down'] = (isset($array[$i]['down']) ? $array[$i]['down'] : false);
                $array[$i]['up']   = (isset($array[$i]['up']) ? $array[$i]['up'] : false);
                for ($j = ($i + 1); $j < $ii; $j++) {
                    if ($array[$j][$parent_id] == $array[$i][$parent_id]) {
                        $array[$i]['down'] = true;
                        $array[$j]['up'] = true;
                    }
                }
            }
            return $array;
        }
        return $array;
    }

    /**
     * Prepare a given one dimension array for deleting
     *
     * @access public
     * @author Falk Doering
     * @param  array  the array
     * @param  string the key of the main id
     * @param  string the key of the parent id
     * @return array  the final array with one new keys: 'delete' with true or false
     */
    function prepareDelete($array, $this_id = 'id', $parent_id = 'parent_id')
    {
        global $serendipity;

        if (is_array($array)) {
            for ($i = 0, $ii = count($array); $i < $ii; $i++) {
                if (isset($array[$i+1]) && ($array[$i+1][$parent_id] == $array[$i][$this_id])) {
                   $array[$i]['delete'] = false;
               } else {
                   $array[$i]['delete'] = true;
               }
            }
        }
        return $array;
    }


    /**
     * Update table for re-ordering
     *
     * @access public
     * @author Falk Doering
     * @param  string  Name of the table
     * @param  string  The direction ('up' or 'down')
     * @param  array   The update array
     * @param  array   The array containing the where clause
     * @return boolean
     */

    function doReorder($table, $moveto, $update_array, $where_array)
    {
        global $serendipity;

        if (is_array($update_array) && is_array($where_array)) {
            $where = '';
            foreach ($where_array as $key => $value) {
                if (strlen($where)) {
                    $where .= ' AND ';
                }
                $where .= $key . ' = ' . $value;
            }
            $q = 'SELECT '.implode(", ", array_keys($update_array)).'
                    FROM '. $serendipity['dbPrefix'] . $table .'
                   WHERE '.$where;
            $old = serendipity_db_query($q, true, 'assoc');

            if (is_array($old)) {
                $where = array();
                $update = array();
                switch ($moveto) {
                    case 'up':
                        foreach ($update_array as $key => $value) {
                            if ($value) {
                                $where[$key] = ($old[$key] - 1);
                                $update[$key] = $old[$key];
                                $update_1[$key] = ($old[$key] - 1);
                            } else {
                                $where[$key] = $old[$key];
                            }
                        }
                        break;
                    case 'down':
                        foreach ($update_array as $key => $value) {
                            if ($value) {
                                $where[$key] = ($old[$key] + 1);
                                $update[$key] = $old[$key];
                                $update_1[$key] = ($old[$key] + 1);
                            } else {
                                $where[$key] = $old[$key];
                            }
                        }
                        break;
                    default:
                        return false;
                }
                serendipity_db_update($table, $where, $update);
                serendipity_db_update($table, $where_array, $update_1);
                return true;
            }
        }
        return false;
    }

    /**
     *
     * Check if a string is a valid email
     *
     * @access public
     * @author Falk Doering
     * @param  string   The email string
     * @return bool     is valid email true, else false
     *
     */

    function isEmail($email)
    {
        $preg = '/^[a-zA-Z0-9](([_\.-][a-zA-Z0-9]+)*)@([a-zA-Z0-9]+)(([\.-]?[a-zA-Z0-9]+)*)\.([a-zA-Z]{2,6})|localhost$/';
        return (preg_match($preg, $email) != 0);
    }

}
