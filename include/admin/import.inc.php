<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

$data = array();

if (!serendipity_checkPermission('adminImport')) {
    return;
}

/* This won't do anything if safe-mode is ON, but let's try anyway since importing could take a while */
if (function_exists('set_time_limit')) {
    @set_time_limit(0);
}

/* Class construct. Each importer plugin must extend this class. */
class Serendipity_Import {
    var $trans_table  = '';
    var $force_recode = true;
/**
 * Return textual notes of an importer plugin
 *
 * If an importer plugin needs to show any notes on the userinterface, those can be returned in this method.
 *
 * @access public
 * @return string  HTML-code of a interface/user hint
 */
    function getImportNotes() { 
        return ""; 
    }

/**
 * Get a list of available charsets the user can choose from. Depends on current language of the blog.
 *
 * @access public
 * @param  boolean   If set to true, returns the option "UTF-8" as first select choice, which is then preselected. If false, the current language of the blog will be the default.
 * @return array     Array of available charsets to choose from
 */
    function getCharsets($utf8_default = true) {
        $charsets = array();
        
        if (!$utf8_default) {
            $charsets['native'] = LANG_CHARSET;
        }

        if (LANG_CHARSET != 'UTF-8') {
            $charsets['UTF-8'] = 'UTF-8';
        }

        if (LANG_CHARSET != 'ISO-8859-1') {
            $charsets['ISO-8859-1'] = 'ISO-8859-1';
        }
        
        if ($utf8_default) {
            $charsets['native'] = LANG_CHARSET;
        }
        
        return $charsets;
    }

/**
 * Decodes/Transcodes a string according to the selected charset, and the charset of the blog
 *
 * @access public
 * @param  string   input string to convert
 * @return string   converted string
 */
    function &decode($string) {
        // xml_parser_* functions do recoding from ISO-8859-1/UTF-8
        if (!$this->force_recode && (LANG_CHARSET == 'ISO-8859-1' || LANG_CHARSET == 'UTF-8')) {
            return $string;
        }

        $target = $this->data['charset'];

        switch($target) {
            case 'native':
                return $string;

            case 'ISO-8859-1':
                if (function_exists('iconv')) {
                    $out = iconv('ISO-8859-1', LANG_CHARSET, $string);
                } elseif (function_exists('recode')) {
                    $out = recode('iso-8859-1..' . LANG_CHARSET, $string);
                } elseif (LANG_CHARSET == 'UTF-8') {
                    return utf8_encode($string);
                } else {
                    return $string;
                }
                return $out;
            
            case 'UTF-8':
            default:
                $out = utf8_decode($string);
                return $out;
        }
    }

/**
 * Decode/Transcode a string with the indicated translation table (member property). Useful for transcoding HTML entities to native characters.
 *
 * @access public
 * @param  string   input string
 * @return string   output string
 */
    function strtr($data) {
        return strtr($this->decode($data), $this->trans_table);
    }

/**
 * Decode/Transcode an array of strings.
 *
 * LONG
 *
 * @access public
 * @see $this->strtr()
 * @param   array   input array
 * @return  array   output array
 */
    function strtrRecursive($data) {
        foreach ($data as $key => $val) {
            if (is_array($val)) {
                $data[$key] = $this->strtrRecursive($val);
            } else {
                $data[$key] = $this->strtr($val);
            }
        }

        return $data;
    }
    
/**
 * Get the transcoding table, depending on whether it was enabled for the instance of the importer plugin
 *
 * The member property $this->trans_table will be filled with the output of this function
 *
 * @access public
 * @see    $this->strtr()
 * @return null
 */
    function getTransTable() {
        if (!serendipity_db_bool($this->data['use_strtr'])) {
            $this->trans_table = array();
            return true;
        }

        // We need to convert interesting characters to HTML entities, except for those with special relevance to HTML.
        $this->trans_table = get_html_translation_table(HTML_ENTITIES);
        foreach (get_html_translation_table(HTML_SPECIALCHARS) as $char => $encoded) {
            if (isset($this->trans_table[$char])) {
                unset($this->trans_table[$char]);
            }
        }
    }

/**
 * Execute a DB query on the source database of the import, instead of a DB query on the target database
 *
 * @access public
 * @param  string       SQL Query
 * @param  ressource    DB connection resource
 * @return ressource    SQL response
 */
    function &nativeQuery($query, $db = false) {
        global $serendipity;

        mysql_select_db($this->data['name'], $db);
        $dbn = false;

        $target = $this->data['charset'];

        switch($target) {
            case 'native':
                $dbn = SQL_CHARSET;
                break;

            case 'ISO-8859-1':
                $dbn = 'latin1';
                break;
            
            case 'UTF-8':
                $dbn = 'utf8';
                break;
        }
        
        if ($dbn && $serendipity['dbNames']) {
            mysql_query("SET NAMES " . $dbn, $db);
        }
       
        $return = &mysql_query($query, $db);
        mysql_select_db($serendipity['dbName'], $serendipity['dbConn']);
        serendipity_db_reconnect();
        return $return;
    }
}


if (isset($serendipity['GET']['importFrom']) && serendipity_checkFormToken()) {
    $data['importForm'] = true;
    /* Include the importer */
    $class = @require_once(S9Y_INCLUDE_PATH . 'include/admin/importers/'. basename($serendipity['GET']['importFrom']) .'.inc.php');
    if ( !class_exists($class) ) {
        $data['die'] = true;
    } else {

        /* Init the importer with form data */
        $importer = new $class($serendipity['POST']['import']);

        /* Yes sir, we are importing if we have valid data */
        if ( $importer->validateData() ) {
            $data['validateData'] = true;

            /* import() MUST return (bool)true, otherwise we assume it failed */
            if ( ($result = $importer->import()) !== true ) {
                $data['result'] = $result;
            } 
        /* Apprently we do not have valid data, ask for some */
        } else {
            $data['formToken'] = serendipity_setFormToken();
            $fields = $importer->getInputFields();
            foreach ($fields as &$field ) {
                $field['guessedInput'] = serendipity_guessInput($field['type'], 'serendipity[import]['. $field['name'] .']', (isset($serendipity['POST']['import'][$field['name']]) ? $serendipity['POST']['import'][$field['name']] : $field['default']), $field['default']);
            }
            $data['fields'] = $fields;
            $data['notes'] = $importer->getImportNotes();
        }
    }
} else {
    $importpath = S9Y_INCLUDE_PATH . 'include/admin/importers/';
    $dir        = opendir($importpath);
    $list       = array();
    while (($file = readdir($dir)) !== false ) {
        if (!is_file($importpath . $file) || !preg_match('@.php$@', $file)) {
            continue;
        }

        $class = include_once($importpath . $file);
        if ( class_exists($class) ) {
            $tmpClass = new $class(array());
            $list[substr($file, 0, strpos($file, '.'))] = $tmpClass->info['software'];
            unset($tmpClass);
        }
    }
    closedir($dir);
    ksort($list);
    $data['formToken'] = serendipity_setFormToken();
    $data['list'] = $list;
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

echo serendipity_smarty_show('admin/import.inc.tpl', $data);


/* vim: set sts=4 ts=4 expandtab : */
