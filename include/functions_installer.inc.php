<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_INSTALLER')) {
    return;
}
@define('S9Y_FRAMEWORK_INSTALLER', true);

/**
 * Convert a PHP Ini setting to a boolean flag
 *
 * @access public
 * @param   mixed       input variable
 * @return  boolean     output variable
 */
function serendipity_ini_bool($var) {
    return ($var === 'on' || $var == '1');
}

/**
 * convert a size value from a PHP.ini to a bytesize
 *
 * @access public
 * @param   string  size value from PHP.ini
 * @return  string  bytesize
 */
function serendipity_ini_bytesize($val) {
    if ( $val == '' )
        return 0;

    switch(substr($val, -1)) {
        case 'k':
        case 'K':
            return (int) $val * 1024;
            break;
        case 'm':
        case 'M':
            return (int) $val * 1048576;
            break;
        default:
            return $val;
   }
}

/**
 * Update the serendipity_config_local.inc.php file with core information
 *
 * @access public
 * @param   string  Database name
 * @param   string  Database prefix
 * @param   string  Database host
 * @param   string  Database user
 * @param   string  Datapase Passwort
 * @param   string  Database type
 * @param   string  Use persistent connections?
 * @param   array   An array of additional variables to be put into the config file
 * @return true
 */
function serendipity_updateLocalConfig($dbName, $dbPrefix, $dbHost, $dbUser, $dbPass, $dbType, $dbPersistent, $privateVariables = null) {
    global $serendipity;
    umask(0000);

    $file = 'serendipity_config_local.inc.php';
    $path = $serendipity['serendipityPath'];

    $oldconfig = @file_get_contents($path . $file);
    $configfp  = fopen($path . $file, 'w');

    if (!is_resource($configfp)) {
        $errs[] = sprintf(FILE_WRITE_ERROR, $file);
        $errs[] = sprintf(DIRECTORY_RUN_CMD, 'chown -R www:www', $path) . ' (' . WWW_USER . ')';
        $errs[] = sprintf(DIRECTORY_RUN_CMD, 'chmod 770'       , $path);
        $errs[] = BROWSER_RELOAD;

        return $errs;
    }

    if (isset($_POST['sqlitedbName']) && !empty($_POST['sqlitedbName'])) {
        $dbName = $_POST['sqlitedbName'];
    }

    $file_start    = "<?php\n"
                   . "\t/*\n"
                   . "\t  Serendipity configuration file\n";
    $file_mark     = "\n\t// End of Serendipity configuration file"
                   . "\n\t// You can place your own special variables after here:\n";
    $file_end      = "\n?>\n";
    $file_personal = '';

    preg_match('@' . preg_quote($file_start) . '.*' . preg_quote($file_mark) . '(.+)' . preg_quote($file_end) . '@imsU', $oldconfig, $match);
    if (!empty($match[1])) {
        $file_personal = $match[1];
    }

    fwrite($configfp, $file_start);

    fwrite($configfp, "\t  Written on ". date('r') ."\n");
    fwrite($configfp, "\t*/\n\n");

    fwrite($configfp, "\t\$serendipity['versionInstalled']  = '{$serendipity['version']}';\n");
    fwrite($configfp, "\t\$serendipity['dbName']            = '" . addslashes($dbName) . "';\n");
    fwrite($configfp, "\t\$serendipity['dbPrefix']          = '" . addslashes($dbPrefix) . "';\n");
    fwrite($configfp, "\t\$serendipity['dbHost']            = '" . addslashes($dbHost) . "';\n");
    fwrite($configfp, "\t\$serendipity['dbUser']            = '" . addslashes($dbUser) . "';\n");
    fwrite($configfp, "\t\$serendipity['dbPass']            = '" . addslashes($dbPass) . "';\n");
    fwrite($configfp, "\t\$serendipity['dbType']            = '" . addslashes($dbType) . "';\n");
    fwrite($configfp, "\t\$serendipity['dbPersistent']      = ". (serendipity_db_bool($dbPersistent) ? 'true' : 'false') .";\n");
    if ($serendipity['dbNames']) {
        fwrite($configfp, "\t\$serendipity['dbCharset']         = '" . addslashes(SQL_CHARSET) . "';\n");
    }

    if (is_array($privateVariables) && count($privateVariables) > 0) {
        foreach($privateVariables AS $p_idx => $p_val) {
            fwrite($configfp, "\t\$serendipity['{$p_idx}']  = '" . addslashes($p_val) . "';\n");
        }
    }

    fwrite($configfp, $file_mark .  $file_personal . $file_end);

    fclose($configfp);

    @chmod($path . $file, 0700);
    return true;
}

/**
 * Setup the core database tables
 *
 * Creates the needed tables - beware, they will be empty and need to be stuffed with
 * default templates and such...
 *
 * @access public
 * @return null
 */
function serendipity_installDatabase() {
  global $serendipity;

    $queries = serendipity_parse_sql_tables(S9Y_INCLUDE_PATH . 'sql/db.sql');
    $queries = str_replace('{PREFIX}', $serendipity['dbPrefix'], $queries);

    foreach ($queries as $query) {
        serendipity_db_schema_import($query);
    }

    if (file_exists(S9Y_INCLUDE_PATH . 'sql/preload.sql')) {
        $queries = serendipity_parse_sql_inserts(S9Y_INCLUDE_PATH . 'sql/preload.sql');
        $queries = str_replace('{PREFIX}', $serendipity['dbPrefix'], $queries);
        foreach ($queries as $query) {
            serendipity_db_schema_import($query);
        }
    }
}

/**
 * Check a default value of a config item from the configuration template files
 *
 * @access public
 * @param   string      Name of the config item to check
 * @param   string      The default value, if none is found
 * @param   boolean     If true, it's the personal config template, if false its the global config template
 * @param   string      Protected fields will not be echo'd in the HTML form
 * @return  string      The default value
 */
function serendipity_query_default($optname, $default, $usertemplate = false, $type = 'string') {
    global $serendipity;

    /* I won't tell you the password, it's MD5 anyway, you can't do anything with it */
    if ($type == 'protected' && IS_installed === true) {
        return '';
    }

    switch ($optname) {
        case 'permalinkStructure':
            return $default;

        case 'dbType' :
            if (extension_loaded('mysqli')) {
                $type = 'mysqli';
            }
            if (extension_loaded('PDO') &&
                in_array('pgsql', PDO::getAvailableDrivers())) {
                $type = 'pdo-postgres';
            }
            if (extension_loaded('pgsql')) {
                $type = 'postgres';
            }
            if (extension_loaded('mysql')) {
                $type = 'mysql';
            }
            return $type;

        case 'serendipityPath':
            if (empty($_SERVER['PHP_SELF'])) {
                $test_path1 = $_SERVER['DOCUMENT_ROOT'] . rtrim(dirname($_SERVER['SCRIPT_FILENAME']), '/') . '/';
            } else {
                $test_path1 = $_SERVER['DOCUMENT_ROOT'] . rtrim(dirname($_SERVER['PHP_SELF']), '/') . '/';
            }
            $test_path2 = serendipity_getRealDir(__FILE__);
            if (!empty($_SERVER['ORIG_PATH_TRANSLATED']) && file_exists(dirname($_SERVER['ORIG_PATH_TRANSLATED']) . '/serendipity_admin.php')) {
                return realpath(rtrim(dirname($_SERVER['ORIG_PATH_TRANSLATED']), '/')) . '/';
            }

            if (file_exists($test_path1 . 'serendipity_admin.php')) {
                return $test_path1;
            } elseif (defined('S9Y_DATA_PATH')) {
                // Shared installation!
                return S9Y_DATA_PATH;
            } else {
                return $test_path2;
            }

        case 'serendipityHTTPPath':
            return rtrim(dirname($_SERVER['PHP_SELF']), '/') .'/';

        case 'defaultBaseURL':
        case 'baseURL':
            $ssl  = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
            $port = $_SERVER['SERVER_PORT'];

            return sprintf('http%s://%s%s%s',

                            $ssl ? 's' : '',
                            preg_replace('@^([^:]+):?.*$@', '\1', $_SERVER['HTTP_HOST']),
                            (($ssl && $port != 443) || (!$ssl && $port != 80)) ? (':' . $port) : '',
                            rtrim(dirname($_SERVER['PHP_SELF']), '/') .'/'
                   );

        case 'convert':
            $path = array();

            $path[] = ini_get('safe_mode_exec_dir');

            if (isset($_SERVER['PATH'])) {
                $path = array_merge($path, explode(PATH_SEPARATOR, $_SERVER['PATH']));
            }

            /* add some other possible locations to the path while we are at it,
             * as these are not always included in the apache path */
            $path[] = '/usr/X11R6/bin';
            $path[] = '/usr/bin';
            $path[] = '/usr/local/bin';

            foreach ($path as $dir) {
                if (!empty($dir) && (function_exists('is_executable') && @is_readable($dir) && @is_executable($dir . '/convert')) || @is_file($dir . '/convert')) {
                    return $dir . '/convert';
                }

                if (!empty($dir) && (function_exists('is_executable') && @is_readable($dir . '/convert') && @is_executable($dir . '/convert.exe')) || @is_file($dir . '/convert.exe')) {
                    return $dir . '/convert.exe';
                }
            }
            return $default;

        case 'rewrite':
            return serendipity_check_rewrite($default);

        default:
            if ($usertemplate) {
                return serendipity_get_user_var($optname, $serendipity['authorid'], $default);
            }

            return $default;
    }
}

/**
 * Parse a configuration template file
 *
 * @access public
 * @param   string      Path to the s9y configuration template file
 * @param   array       An array of config areas/sections that shall be returned from the template
 * @param   array       Restrict the return of template variables to items containing a specific flag
 * @return  array        An array with configuration items, keys and values
 */
function serendipity_parseTemplate($filename, $areas = null, $onlyFlags=null) {
    global $serendipity;

    $userlevel = $serendipity['serendipityUserlevel'];

    if ( !IS_installed ) {
        $userlevel = USERLEVEL_ADMIN;
    }

    $config = @include($filename);
    if (! is_array($config)) {
    	printf(INCLUDE_ERROR,$filename);
    }

    foreach ( $config as $n => $category ) {
        /* If $areas is an array, we filter out those categories, not within the array */
        if ( is_array($areas) && !in_array($n, $areas) ) {
            unset($config[$n]);
            continue;
        }

        foreach ( $category['items'] as $i => $item ) {
            $items = &$config[$n]['items'][$i];

            if (!isset($items['userlevel']) || !is_numeric($items['userlevel'])) {
                $items['userlevel'] = USERLEVEL_ADMIN;
            }

            if (!isset($items['permission']) && $userlevel < $items['userlevel']) {
                unset($config[$n]['items'][$i]);
                continue;
            } elseif (!is_array($items['permission']) && !serendipity_checkPermission($items['permission'])) {
                unset($config[$n]['items'][$i]);
                continue;
            } elseif (is_array($items['permission'])) {
                $one_found = false;
                $all_found = true;
                foreach($items['permission'] AS $check_permission) {
                    if (serendipity_checkPermission($check_permission)) {
                        $one_found = true;
                    } else {
                        $all_found = false;
                    }
                }

                if (!isset($items['perm_mode'])) {
                    $items['perm_mode'] = 'or';
                }

                if ($items['perm_mode'] == 'or' && !$one_found) {
                    unset($config[$n]['items'][$i]);
                    continue;
                } elseif ($items['perm_mode'] == 'and' && !$one_found && !$all_found) {
                    unset($config[$n]['items'][$i]);
                    continue;
                }
            }

            if (!isset($items['flags']) || !is_array($items['flags'])) {
                $items['flags'] = array();
            }

            if ( is_array($onlyFlags) ) {
                foreach ( $onlyFlags as $onlyFlag ) {
                    if ( !in_array($onlyFlag, $items['flags']) ) {
                        unset($config[$n]['items'][$i]);
                        continue;
                    }
                }
            }
        }

        if (sizeof($config[$n]['items']) < 1) {
            unset($config[$n]);
        }
    }

    return $config;
}

/**
 * Replace some variables within config item values with the right values
 *
 * @access public
 * @param   string  Input string
 * @return  string  Output string
 */
function serendipity_replaceEmbeddedConfigVars ($s) {
    return str_replace(
                  array(
                    '%clock%'
                  ),

                  array(
                    date('H:i')
                  ),

                  $s);
}

/**
 * Preprocess the configuration value and put it into a HTML output field (radio, password, text, select, ...)
 *
 * @access public
 * @param   string  The type of the configuration item
 * @param   string  The name of the configuration item
 * @param   string  The current value of the configuration item
 * @param   string  The default value of the configuration item
 * @return null
 */

function serendipity_guessInput($type, $name, $value='', $default='') {
    global $serendipity;

    switch ($type) {
        case 'bool':
            $value = serendipity_get_bool($value);
            if ($value === null) {
                $value = $default;
            }
            
            echo '<input class="input_radio" id="radio_cfg_' . $name . '_yes" type="radio" name="' . $name . '" value="true" ';
            echo (($value == true) ? 'checked="checked"' : ''). ' /><label for="radio_cfg_' . $name . '_yes"> ' . YES . '</label>&nbsp;';
            echo '<input class="input_radio" id="radio_cfg_' . $name . '_no" type="radio" name="' . $name . '" value="false" ';
            echo (($value == true) ? '' : 'checked="checked"'). ' /><label for="radio_cfg_' . $name . '_no"> ' . NO . '</label>';
            break;

        case 'fullprotected':
            echo '<input autocomplete="off" class="input_textbox" type="password" size="30" name="' . $name . '" value="' . htmlspecialchars($value) . '" />';
            break;

        case 'protected':
            echo '<input class="input_textbox" type="password" size="30" name="' . $name . '" value="' . htmlspecialchars($value) . '" />';
            break;

        case 'multilist':
            echo '<select name="'. $name .'[]" multiple="multiple" size="5">';

            foreach ((array)$default as $k => $v) {
                $selected = false;
                foreach((array)$value AS $vk => $vv) {
                    if ($vv['confkey'] == $v['confkey']) {
                        $selected = true;
                    }
                }

                printf('<option value="%s"%s>%s</option>'. "\n",
                      $v['confkey'],
                      ($selected ? ' selected="selected"' : ''),
                      $v['confvalue']);
            }
            echo '</select>';
            break;

        case 'list':
            echo '<select name="'. $name .'">';
            $cval = (string)$value;
            foreach ((array)$default as $k => $v) {
                $selected = ((string)$k == (string)$value);
                if (empty($cval) && ((string)$k === 'false' || (string)$k === null)) {
                    $selected = true;
                }

                printf('<option value="%s"%s>%s</option>'. "\n",
                      $k,
                      ($selected ? ' selected="selected"' : ''),
                      $v);
            }
            echo '</select>';
            break;

        case 'file':
            echo '<input class="input_file" type="file" size="30" name="' . $name . '" />';
            break;

        case 'textarea':
            echo '<textarea rows="5" cols="40" name="' . $name . '">' . htmlspecialchars($value) . '</textarea>';
            break;

        default:
            echo '<input class="input_textbox" type="text" size="30" name="' . $name . '" value="' . htmlspecialchars($value) . '" />';
            break;
    }
}

function serendipity_printConfigJS($folded = true) {
?>
<script type="text/javascript" language="JavaScript">
function showConfig(id) {
    if (document.getElementById) {
        el = document.getElementById(id);
        if (el.style.display == 'none') {
            document.getElementById('option' + id).src = '<?php echo serendipity_getTemplateFile('img/minus.png') ?>';
            el.style.display = '';
        } else {
            document.getElementById('option' + id).src = '<?php echo serendipity_getTemplateFile('img/plus.png') ?>';
            el.style.display = 'none';
        }
    }
}

var state='<?php echo ($folded === true ? '' : 'none'); ?>';
function showConfigAll(count) {
    if (document.getElementById) {
        for (i = 1; i <= count; i++) {
            document.getElementById('el' + i).style.display = state;
            document.getElementById('optionel' + i).src = (state == '' ? '<?php echo serendipity_getTemplateFile('img/minus.png') ?>' : '<?php echo serendipity_getTemplateFile('img/plus.png') ?>');
        }

        if (state == '') {
            document.getElementById('optionall').src = '<?php echo serendipity_getTemplateFile('img/minus.png') ?>';
            state = 'none';
        } else {
            document.getElementById('optionall').src = '<?php echo serendipity_getTemplateFile('img/plus.png') ?>';
            state = '';
        }
    }
}
</script>
<?php
}

/**
 * Parses the configuration array and displays the configuration screen
 *
 * @access public
 * @param   array       Configuration superarray
 * @param   array       The previous values submitted by the user
 * @param   boolean     If true, no HTML FORM container will be emitted
 * @param   boolean     If true, the configuration sections will all be folded
 * @param   boolean     If true, the user can turn config sections on and off
 * @param   boolean     If true, the user can NOT display possibly dangerous options
 * @return null
 */
function serendipity_printConfigTemplate($config, $from = false, $noForm = false, $folded = true, $allowToggle = true, $showDangerous = false) {
    global $serendipity;

    if ($allowToggle) {
        serendipity_printConfigJS($folded);
    }

    if (!$noForm) {
?>
<form action="?" method="POST">
    <div>
        <input type="hidden" name="serendipity[adminModule]" value="installer" />
        <input type="hidden" name="installAction" value="check" />
        <?php echo serendipity_setFormToken(); ?>
        <br />
<?php   }
    if (sizeof($config) > 1 && $allowToggle) { ?>
        <div align="right">
            <a style="border:0; text-decoration: none" href="#" onClick="showConfigAll(<?php echo sizeof($config); ?>)" title="<?php echo TOGGLE_ALL; ?>"><img src="<?php echo serendipity_getTemplateFile('img/'. ($folded === true ? 'plus' : 'minus') .'.png') ?>" id="optionall" alt="+/-" border="0" />&nbsp;<?php echo TOGGLE_ALL; ?></a></a><br />
        </div>
<?php
    }
    $el_count = 0;
    foreach ($config as $category) {
        $el_count++;
?>
        <table width="100%" cellspacing="2">
<?php
        if (sizeof($config) > 1) {
?>
            <tr>
                <th align="left" colspan="2" style="padding-left: 15px;">
<?php if ($allowToggle) { ?>
                    <a style="border:0; text-decoration: none;" href="#" onClick="showConfig('el<?php echo $el_count; ?>'); return false" title="<?php echo TOGGLE_OPTION; ?>"><img src="<?php echo serendipity_getTemplateFile('img/'. ($folded === true ? 'plus' : 'minus') .'.png') ?>" id="optionel<?php echo $el_count; ?>" alt="+/-" border="0" />&nbsp;<?php echo $category['title']; ?></a>
<?php } else { ?>
                    <?php echo $category['title']; ?>
<?php } ?>
                </th>
            </tr>
<?php   } ?>
            <tr>
                <td>
                    <table width="100%" cellspacing="0" cellpadding="3" id="el<?php echo $el_count; ?>">
                        <tr>
                            <td style="padding-left: 20px;" colspan="2">
                                <?php echo $category['description'] ?>
                            </td>
                        </tr>

<?php
        foreach ($category['items'] as $item) {

            $value = $from[$item['var']];

            /* Calculate value if we are not installed, how clever :) */
            if ($from == false) {
                $value = serendipity_query_default($item['var'], $item['default']);
            }

            /* Check for installOnly flag */
            if (in_array('installOnly', $item['flags']) && IS_installed === true) {
                continue;
            }

            if (in_array('hideValue', $item['flags'])) {
                $value = '';
            }
            
            if (!$showDangerous && $item['view'] == 'dangerous') {
                continue;
            }

            if (in_array('config', $item['flags']) && isset($from['authorid'])) {
                $value = serendipity_get_user_config_var($item['var'], $from['authorid'], $item['default']);
            }

            if (in_array('parseDescription', $item['flags'])) {
                $item['description'] = serendipity_replaceEmbeddedConfigVars($item['description']);
            }

            if (in_array('probeDefault', $item['flags'])) {
                $item['default'] = serendipity_probeInstallation($item['var']);
            }

            if (in_array('ifEmpty', $item['flags']) && empty($value)) {
                $value = serendipity_query_default($item['var'], $item['default']);
            }
?>
                        <tr>
                            <td style="border-bottom: 1px #000000 solid" align="left" valign="top" width="75%">
                                <strong><?php echo $item['title']; ?></strong>
                                <br />
                                <span style="color: #5E7A94; font-size: 8pt;"><?php echo $item['description']; ?></span>
                            </td>
                            <td style="border-bottom: 1px #000000 solid; font-size: 8pt" align="left" valign="middle" width="25%">
                                <span style="white-space: nowrap"><?php serendipity_guessInput($item['type'], $item['var'], $value, $item['default']); ?></span>
                            </td>
                        </tr>
<?php
        }
?>
                    </table><br /><br />
                </td>
            </tr>
        </table>
<?php
    }

    if ($folded && $allowToggle) {
        echo '<script type="text/javascript" language="JavaScript">';
        for ($i = 1; $i <= $el_count; $i++) {
            echo 'document.getElementById("el' . $i . '").style.display = "none";' . "\n";
        }
        echo '</script>';
    }

    if (!$noForm) {
?>
        <input type="submit" value="<?php echo CHECK_N_SAVE; ?>" class="serendipityPrettyButton input_button" />
    </div>
</form>
<?php
    }
}

/**
 * Parse .sql files for use within Serendipity, query by query,
 * accepting only CREATE commands.
 *
 * @access public
 * @param   string  The filename of the SQL file
 * @return array    An array of queries to execute
 */
function serendipity_parse_sql_tables($filename) {
    $in_table = 0;
    $queries = array();

    $fp = fopen($filename, 'r', 1);
    if ($fp) {
        while (!@feof($fp)) {
            $line = trim(fgets($fp, 4096));
            if ($in_table) {
                $def .= $line;
                if (preg_match('/^\)\s*(type\=\S+|\{UTF_8\})?\s*\;$/i', $line)) {
                    $in_table = 0;
                    array_push($queries, $def);
                }
            } else {
                if (preg_match('#^create table \{PREFIX\}\S+\s*\(#i', $line)) {
                    $in_table = 1;
                    $def = $line;
                }

                if (preg_match('#^create\s*(\{fulltext\}|unique|\{fulltext_mysql\})?\s*index#i', $line)) {
                    array_push($queries, $line);
                }
            }
        }
        fclose($fp);
    }

    return $queries;
}

/**
 * Parse .sql files for use within Serendipity, query by query,
 * accepting only INSERT commands.
 *
 * @access public
 * @param   string  The filename of the SQL file
 * @return array    An array of queries to execute
 */
function serendipity_parse_sql_inserts($filename) {
    $queries = array();

    $fp = fopen($filename, 'r', 1);
    if ($fp) {
        while (!@feof($fp)) {
            $line = trim(fgets($fp, 65536));
                if (preg_match('#^insert\s*into.*;$#i', $line)) {
                    array_push($queries, $line);
                }
            }
        }
        fclose($fp);

    return $queries;
}

/**
 * Check the serendipity Installation for problems, during installation
 *
 * @access public
 * @return boolean  Errors encountered?
 */
function serendipity_checkInstallation() {
    global $serendipity, $umask;

    $errs = array();

    serendipity_initPermalinks();

    // Check dirs
    if (!is_dir($_POST['serendipityPath'])) {
        $errs[] = sprintf(DIRECTORY_NON_EXISTANT, htmlspecialchars($_POST['serendipityPath']));
    }
    /* This test has already been passed on the diagnosis page.  Besides
       it's a partially bogus test.
    elseif (!is_writable($_POST['serendipityPath']) ) {
        $errs[] = sprintf(DIRECTORY_WRITE_ERROR, htmlspecialchars($_POST['serendipityPath']));
    }*/
    elseif (!is_dir($_POST['serendipityPath'] . $_POST['uploadPath'] ) && @mkdir($_POST['serendipityPath'] . $_POST['uploadPath'], $umask) !== true) {
        $errs[] = sprintf(DIRECTORY_CREATE_ERROR, htmlspecialchars($_POST['serendipityPath']) . htmlspecialchars($_POST['uploadPath']));
    }
    elseif (!is_writable($_POST['serendipityPath'] . $_POST['uploadPath'])) {
        $errs[] = sprintf(DIRECTORY_WRITE_ERROR, htmlspecialchars($_POST['serendipityPath']) . htmlspecialchars($_POST['uploadPath']));
        $errs[] = sprintf(DIRECTORY_RUN_CMD    , 'chmod go+rws', htmlspecialchars($_POST['serendipityPath']) . htmlspecialchars($_POST['uploadPath']));
    }

    // Attempt to create the template compile directory, it might already be there, but we just want to be sure
    if (!is_dir($_POST['serendipityPath'] . PATH_SMARTY_COMPILE) && @mkdir($_POST['serendipityPath'] . PATH_SMARTY_COMPILE, $umask) !== true) {
        $errs[] = sprintf(DIRECTORY_CREATE_ERROR, htmlspecialchars($_POST['serendipityPath']) . PATH_SMARTY_COMPILE);
        $errs[] = sprintf(DIRECTORY_RUN_CMD     , 'mkdir'      , htmlspecialchars($_POST['serendipityPath']) . PATH_SMARTY_COMPILE);
        $errs[] = sprintf(DIRECTORY_RUN_CMD     , 'chmod go+rwx', htmlspecialchars($_POST['serendipityPath']) . PATH_SMARTY_COMPILE);
    } elseif (is_dir($_POST['serendipityPath'] . PATH_SMARTY_COMPILE) && !is_writeable($_POST['serendipityPath'] . PATH_SMARTY_COMPILE) && @chmod($_POST['serendipityPath'] . PATH_SMARTY_COMPILE, $umask) !== true) {
        $errs[] = sprintf(DIRECTORY_RUN_CMD     , 'chmod go+rwx', htmlspecialchars($_POST['serendipityPath']) . PATH_SMARTY_COMPILE);
    }

    // Attempt to create the archives directory
    if (!is_dir($_POST['serendipityPath'] . PATH_ARCHIVES) && @mkdir($_POST['serendipityPath'] . PATH_ARCHIVES, $umask) !== true) {
        $errs[] = sprintf(DIRECTORY_CREATE_ERROR, htmlspecialchars($_POST['serendipityPath']) . PATH_ARCHIVES);
        $errs[] = sprintf(DIRECTORY_RUN_CMD     , 'mkdir'      , htmlspecialchars($_POST['serendipityPath']) . PATH_ARCHIVES);
        $errs[] = sprintf(DIRECTORY_RUN_CMD     , 'chmod go+rwx', htmlspecialchars($_POST['serendipityPath']) . PATH_ARCHIVES);
    }

    // Check imagick
    if ($_POST['magick'] == 'true' && function_exists('is_executable') && !@is_executable($_POST['convert'])) {
        $errs[] = sprintf(CANT_EXECUTE_BINARY, 'convert imagemagick');
    }

    if ($_POST['dbType'] == 'sqlite' || $_POST['dbType'] == 'sqlite3' || $_POST['dbType'] == 'pdo-sqlite') {
        // We don't want that our SQLite db file can be guessed from other applications on a server
        // and have access to our's. So we randomize the SQLite dbname.
        $_POST['sqlitedbName'] = $_POST['dbName'] . '_' . md5(time());
    }

    if (empty($_POST['dbPrefix']) && empty($serendipity['dbPrefix'])) {
        $errs[] = sprintf(EMPTY_SETTING, INSTALL_DBPREFIX);
    }

    $serendipity['dbType'] = $_POST['dbType'];
    // Probe database
    // (do it after the dir stuff, as we need to be able to create the sqlite database)
    @include_once($_POST['serendipityPath'] . 'include/db/db.inc.php');
    // For shared installations, probe the file on include path
    include_once(S9Y_INCLUDE_PATH . 'include/db/db.inc.php');

    if (S9Y_DB_INCLUDED) {
        serendipity_db_probe($_POST, $errs);
    }

    return (count($errs) > 0 ? $errs : '');
}

/**
 * Create the files needed by Serendipity [htaccess/serendipity_config_local.inc.php]
 *
 * @access public
 * @param   string      Path to the serendipity directory
 * @return  true
 */
function serendipity_installFiles($serendipity_core = '') {
    global $serendipity;

    // This variable is transmitted from serendipity_admin_installer. If an empty variable is used,
    // this means that serendipity_installFiles() was called from the auto-updater facility.
    if (empty($serendipity_core)) {
        $serendipity_core = $serendipity['serendipityPath'];
    }

    $htaccess = @file_get_contents($serendipity_core . '.htaccess');

    // Let this function be callable outside installation and let it use existing settings.
    $import = array('rewrite', 'serendipityHTTPPath', 'indexFile');
    foreach($import AS $key) {
        if (empty($_POST[$key]) && isset($serendipity[$key])) {
            $$key = $serendipity[$key];
        } else {
            $$key = $_POST[$key];
        }
    }

    if (php_sapi_name() == 'cgi' || php_sapi_name() == 'cgi-fcgi') {
        $htaccess_cgi = '_cgi';
    } else {
        $htaccess_cgi = '';
    }

    /* If this file exists, a previous install failed painfully. We must consider the safer alternative now */
    if (file_exists($serendipity_core . '.installer_detection_failsafe')) {
        $htaccess_cgi = '_cgi';
        @unlink($serendipity_core . '.htaccess');
    }

    /* Detect comptability with php_value directives */
    if ($htaccess_cgi == '') {
        $response = '';
        $serendipity_root = dirname($_SERVER['PHP_SELF']) . '/';
        $serendipity_host = preg_replace('@^([^:]+):?.*$@', '\1', $_SERVER['HTTP_HOST']);

        $old_htaccess = @file_get_contents($serendipity_core . '.htaccess');
        $fp = @fopen($serendipity_core . '.htaccess', 'w');
        if ($fp) {
            fwrite($fp, 'php_value register_globals off'. "\n" .'php_value session.use_trans_sid 0');
            fclose($fp);
            
            $safeFP = @fopen($serendipity_core . '.installer_detection_failsafe', 'w');
            fclose($safeFP);
            $sock = fsockopen($serendipity_host, $_SERVER['SERVER_PORT'], $errorno, $errorstring, 10);
            if ($sock) {
                fputs($sock, "GET {$serendipityHTTPPath} HTTP/1.0\r\n");
                fputs($sock, "Host: $serendipity_host\r\n");
                fputs($sock, "User-Agent: Serendipity/{$serendipity['version']}\r\n");
                fputs($sock, "Connection: close\r\n\r\n");

                while (!feof($sock) && strlen($response) < 4096) {
                    $response .= fgets($sock, 400);
                }
                fclose($sock);
            }

            # If we get HTTP 500 Internal Server Error, we have to use the .cgi template
            if (preg_match('@^HTTP/\d\.\d 500@', $response)) {
                $htaccess_cgi = '_cgi';
            }

            if (!empty($old_htaccess)) {
                $fp = @fopen($serendipity_core . '.htaccess', 'w');
                fwrite($fp, $old_htaccess);
                fclose($fp);
            } else {
                @unlink($serendipity_core . '.htaccess');
            }

            @unlink($serendipity_core . '.installer_detection_failsafe');
        }
    }


    if ($rewrite == 'rewrite2') {
         $template = 'htaccess' . $htaccess_cgi . '_rewrite2.tpl';
    } elseif ($rewrite == 'rewrite') {
         $template = 'htaccess' . $htaccess_cgi . '_rewrite.tpl';
    } elseif ($rewrite == 'errordocs') {
        $template = 'htaccess' . $htaccess_cgi . '_errordocs.tpl';
    } else {
        $template = 'htaccess' . $htaccess_cgi . '_normal.tpl';
    }

    if (!($a = file(S9Y_INCLUDE_PATH . 'include/tpl/' . $template, 1))) {
        $errs[] = ERROR_TEMPLATE_FILE;
    }

    // When we write this file we cannot rely on the constants defined
    // earlier, as they do not yet contain the updated contents from the
    // new config. Thus we re-define those. We do still use constants
    // for backwards/code compatibility.

    $PAT = serendipity_permalinkPatterns(true);

    $content = str_replace(
                 array(
                   '{PREFIX}',
                   '{indexFile}',
                   '{PAT_UNSUBSCRIBE}', '{PATH_UNSUBSCRIBE}',
                   '{PAT_ARCHIVES}', '{PATH_ARCHIVES}',
                   '{PAT_FEEDS}', '{PATH_FEEDS}',
                   '{PAT_FEED}',
                   '{PAT_ADMIN}', '{PATH_ADMIN}',
                   '{PAT_ARCHIVE}', '{PATH_ARCHIVE}',
                   '{PAT_PLUGIN}', '{PATH_PLUGIN}',
                   '{PAT_DELETE}', '{PATH_DELETE}',
                   '{PAT_APPROVE}', '{PATH_APPROVE}',
                   '{PAT_SEARCH}', '{PATH_SEARCH}',
                   '{PAT_COMMENTS}', '{PATH_COMMENTS}',
                   '{PAT_CSS}',
                   '{PAT_PERMALINK}',
                   '{PAT_PERMALINK_AUTHORS}',
                   '{PAT_PERMALINK_FEEDCATEGORIES}',
                   '{PAT_PERMALINK_CATEGORIES}',
                   '{PAT_PERMALINK_FEEDAUTHORS}'
                 ),

                 array(
                   $serendipityHTTPPath,
                   $indexFile,
                   trim($PAT['UNSUBSCRIBE'], '@/i'), $serendipity['permalinkUnsubscribePath'],
                   trim($PAT['ARCHIVES'], '@/i'),    $serendipity['permalinkArchivesPath'],
                   trim($PAT['FEEDS'], '@/i'),       $serendipity['permalinkFeedsPath'],
                   trim(PAT_FEED, '@/i'),
                   trim($PAT['ADMIN'], '@/i'),       $serendipity['permalinkAdminPath'],
                   trim($PAT['ARCHIVE'], '@/i'),     $serendipity['permalinkArchivePath'],
                   trim($PAT['PLUGIN'], '@/i'),      $serendipity['permalinkPluginPath'],
                   trim($PAT['DELETE'], '@/i'),      $serendipity['permalinkDeletePath'],
                   trim($PAT['APPROVE'], '@/i'),     $serendipity['permalinkApprovePath'],
                   trim($PAT['SEARCH'], '@/i'),      $serendipity['permalinkSearchPath'],
                   trim($PAT['COMMENTS'], '@/i'),    $serendipity['permalinkCommentsPath'],
                   trim(PAT_CSS, '@/i'),
                   trim($PAT['PERMALINK'], '@/i'),
                   trim($PAT['PERMALINK_AUTHORS'], '@/i'),
                   trim($PAT['PERMALINK_FEEDCATEGORIES'], '@/i'),
                   trim($PAT['PERMALINK_CATEGORIES'], '@/i'),
                   trim($PAT['PERMALINK_FEEDAUTHORS'], '@/i')
                 ),

                 implode('', $a)
              );

    $fp = @fopen($serendipity_core . '.htaccess', 'w');
    if (!$fp) {
        $errs[] = sprintf(FILE_WRITE_ERROR, $serendipity_core . '.htaccess') . ' ' . FILE_CREATE_YOURSELF;
        $errs[] = sprintf(COPY_CODE_BELOW , $serendipity_core . '.htaccess', 'serendipity', htmlspecialchars($content));
        return $errs;
    } else {
        // Check if an old htaccess file existed and try to preserve its contents. Otherwise completely wipe the file.
        if ($htaccess != '' && preg_match('@^(.*)#\s+BEGIN\s+s9y.*#\s+END\s+s9y(.*)$@isU', $htaccess, $match)) {
            // Code outside from s9y-code was found.
            fwrite($fp, $match[1] . $content . $match[2]);
        } else {
            fwrite($fp, $content);
        }
        fclose($fp);
        return true;
    }

}

/**
 * Check the flags of a configuration item for their belonging into a template
 *
 * @access public
 * @param   array       An item to check
 * @param   array       The area (configuration|local) where the config item might be displayed
 * @return  boolean
 */
function serendipity_checkConfigItemFlags(&$item, $area) {

    if ( in_array('nosave', $item['flags']) ) {
        return false;
    }

    if ( in_array('local', $item['flags']) && $area == 'configuration' ) {
        return false;
    }

    if ( in_array('config', $item['flags']) && $area == 'local' ) {
        return false;
    }

    return true;
}

/**
 * When paths or other options are changed in the s9y configuration, update the core files
 *
 * @access public
 * @return boolean
 */
function serendipity_updateConfiguration() {
    global $serendipity, $umask;

    // Save all basic config variables to the database
    $config = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE);

    if (isset($_POST['sqlitedbName']) && !empty($_POST['sqlitedbName'])) {
        $_POST['dbName'] = $_POST['sqlitedbName'];
    }

    // Password can be hidden in re-configuring, but we need to store old password
    if (empty($_POST['dbPass']) && !empty($serendipity['dbPass'])) {
        $_POST['dbPass'] = $serendipity['dbPass'];
    }

    foreach($config as $category) {
        foreach ( $category['items'] as $item ) {

            /* Don't save trash */
            if ( !serendipity_checkConfigItemFlags($item, 'configuration') ) {
                continue;
            }

            if (!isset($item['userlevel'])) {
                $item['userlevel'] = USERLEVEL_ADMIN;
            }

            // Check permission set. Changes to blogConfiguration or siteConfiguration items
            // always required authorid = 0, so that it be not specific to a userlogin
            if ( $serendipity['serendipityUserlevel'] >= $item['userlevel'] || IS_installed === false ) {
                $authorid = 0;
            } elseif ($item['permission'] == 'blogConfiguration' && serendipity_checkPermission('blogConfiguration')) {
                $authorid = 0;
            } elseif ($item['permission'] == 'siteConfiguration' && serendipity_checkPermission('siteConfiguration')) {
                $authorid = 0;
            } else {
                $authorid = $serendipity['authorid'];
            }

            if (is_array($_POST[$item['var']])) {
                // Arrays not allowed. Use first index value.
                list($a_key, $a_val) = each($_POST[$item['var']]);
                $_POST[$item['var']] = $a_key;

                // If it still is an array, munge it all together.
                if (is_array($_POST[$item['var']])) {
                    $_POST[$item['var']] = @implode(',', $_POST[$item['var']]);
                }
            }

            serendipity_set_config_var($item['var'], $_POST[$item['var']], $authorid);
        }
    }

    if (IS_installed === false || serendipity_checkPermission('siteConfiguration')) {
        return serendipity_updateLocalConfig($_POST['dbName'],
                                             $_POST['dbPrefix'],
                                             $_POST['dbHost'],
                                             $_POST['dbUser'],
                                             $_POST['dbPass'],
                                             $_POST['dbType'],
                                             $_POST['dbPersistent']);
    } else {
        return true;
    }
}

/**
 * Get the root directory of Serendipity
 *
 * @access public
 * @return  string      The root directory of Serendipity
 */
function serendipity_httpCoreDir() {
    if (!empty($_SERVER['SCRIPT_FILENAME']) && substr(php_sapi_name(), 0, 3) != 'cgi') {
        return dirname($_SERVER['SCRIPT_FILENAME']) . '/';
    }

    if (!empty($_SERVER['ORIG_PATH_TRANSLATED'])) {
        return dirname(realpath($_SERVER['ORIG_PATH_TRANSLATED'])) . '/';
    }
    
    return $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . '/';
}

/**
 * Delete obsolete files from Serendipity
 *
 * @access public
 * @param   array       List of files to remove (backup is tried)
 * @return boolean
 */
function serendipity_removeFiles($files = null) {
    global $serendipity, $errors;

    if (!is_array($files)) {
        return;
    }

    $backupdir = S9Y_INCLUDE_PATH . 'backup';
    if (!is_dir($backupdir)) {
        @mkdir($backupdir, 0777);
        if (!is_dir($backupdir)) {
            $errors[] = sprintf(DIRECTORY_CREATE_ERROR, $backupdir);
            return false;
        }
    }

    if (!is_writable($backupdir)) {
        $errors[] = sprintf(DIRECTORY_WRITE_ERROR, $backupdir);
        return false;
    }

    foreach($files AS $file) {
        $source   = S9Y_INCLUDE_PATH . $file;
        $sanefile = str_replace('/', '_', $file);
        $target   = $backupdir . '/' . $sanefile;

        if (!file_exists($source)) {
            continue;
        }

        if (file_exists($target)) {
            $target = $backupdir . '/' . time() . '.' . $sanefile; // Backupped file already exists. Append with timestamp as name.
        }

        if (!is_writable($source)) {
            $errors[] = sprintf(FILE_WRITE_ERROR, $source) . '<br />';
        } else {
            rename($source, $target);
        }
    }
}

/**
 * Get the real directory of this function file
 *
 * @access public
 * @param   string      A filename to strip extra paths from
 * @return  string      The real directory name
 */
function serendipity_getRealDir($file) {
    $dir = str_replace( "\\", "/", dirname($file));
    $base = preg_replace('@/include$@', '', $dir) . '/';
    return $base;
}

/**
 * Try to detect if apache URL rewriting is available
 *
 * This function makes a dummy HTTP request and sees if it works
 *
 * @access public
 * @param   string      The default option when rewrite fails
 * @return  string      The best preference option for URL rewriting
 */
function serendipity_check_rewrite($default) {
    global $serendipity;

    if (IS_installed == true) {
        return $default;
    }

    $serendipity_root = dirname($_SERVER['PHP_SELF']) . '/';
    $serendipity_core = serendipity_httpCoreDir();
    $old_htaccess     = @file_get_contents($serendipity_core . '.htaccess');
    $fp               = @fopen($serendipity_core . '.htaccess', 'w');
    $serendipity_host = preg_replace('@^([^:]+):?.*$@', '\1', $_SERVER['HTTP_HOST']);

    if (!$fp) {
        printf(HTACCESS_ERROR,
          '<b>chmod go+rwx ' . getcwd() . '/</b>'
        );
        return $default;
    } else {
        fwrite($fp, 'ErrorDocument 404 ' . addslashes($serendipity_root) . 'index.php');
        fclose($fp);

        // Do a request on a nonexistant file to see, if our htaccess allows ErrorDocument
        $sock = @fsockopen($serendipity_host, $_SERVER['SERVER_PORT'], $errorno, $errorstring, 10);
        $response = '';

        if ($sock) {
            fputs($sock, "GET {$_SERVER['PHP_SELF']}nonexistant HTTP/1.0\r\n");
            fputs($sock, "Host: $serendipity_host\r\n");
            fputs($sock, "User-Agent: Serendipity/{$serendipity['version']}\r\n");
            fputs($sock, "Connection: close\r\n\r\n");

            while (!feof($sock) && strlen($response) < 4096) {
                $response .= fgets($sock, 400);
            }
            fclose($sock);
        }

        if (preg_match('@^HTTP/\d\.\d 200@', $response) && preg_match('@X\-Blog: Serendipity@', $response)) {
            $default = 'errordocs';
        } else {
            $default = 'none';
        }

        if (!empty($old_htaccess)) {
            $fp = @fopen($serendipity_core . '.htaccess', 'w');
            fwrite($fp, $old_htaccess);
            fclose($fp);
        } else {
            @unlink($serendipity_core . '.htaccess');
        }

        return $default;
    }
}

/**
 * Remove old configuration values that are no longer used by Serendipity
 *
 * @access public
 * @return null
 */
function serendipity_removeObsoleteVars() {
global $serendipity;

    $config = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE);
    foreach($config as $category) {
        foreach($category['items'] as $item) {
            /* Remove trash */
            if (!serendipity_checkConfigItemFlags($item, 'remove')) {
                serendipity_remove_config_var($item['var'], 0);
            }
        }
    }
}

/**
 * Retrieve an FTP-compatible checksum for a file.
 *
 * @access public
 * @param string filename is the path to the file to checksum
 * @param string type forces a particular interpretation of newlines.  Mime
 *    types and strings starting with 'text' will cause newlines to be stripped
 *    before the checksum is calculated (default: null, determine from finfo 
 *    and extension)
 * @return string An MD5 checksum of the file, with newlines removed if it's 
 *    an ASCII type; or false if the file cannot be read
 */
function serendipity_FTPChecksum($filename, $type = null) {
    /** Only read the finfo database once */
    static $debug_exts = array();

    // Must be able to read the file 
    if (!is_readable($filename)) {
        return false;
    }

    // Figure out whether it's binary or text by extension
    if ($type == null) {
        $parts = pathinfo($filename);
        $ext = '';
        // Some PHP versions throw a warning if the index doesn't exist
        if (isset($parts['extension'])) {
            $ext = $parts['extension'];
        }
        // If they're case-insensitive equal, strcasecmp() returns 0, or
        // 'false'.  So I use && to find if any of them are 0, in the
        // most likely fail-fast order.
        if (strcasecmp($ext, 'php') && 
            strcasecmp($ext, 'tpl') &&
            strcasecmp($ext, 'sql') &&
            strcasecmp($ext, 'js') && 
            strcasecmp($ext, 'txt') && 
            strcasecmp($ext, 'htc') && 
            strcasecmp($ext, 'css') && 
            strcasecmp($ext, 'dist') && 
            strcasecmp($ext, 'lib') && 
            strcasecmp($ext, 'sh') && 
            strcasecmp($ext, 'html') &&
            strcasecmp($ext, 'htm') &&
            !empty($ext)) {
            if (!in_array($ext, array_keys($debug_exts))) {
                $debug_exts[$ext] = $filename;
            }
            $type = 'bin';
        } else {
            $type = 'text';
        }
    }

    // Calculate the checksum
    $md5 = false;
    if (stristr($type, 'text')) {
        // This is a text-type file.  We need to remove linefeeds before 
        // calculating a checksum, to account for possible FTP conversions
        // that are inconvenient, but still valid.  But we don't want to
        // allow newlines anywhere; just different *kinds* of newlines.
        $newlines = array("#\r\n#", "#\r#", "#\n#");
        $file = file_get_contents($filename);
        $file = preg_replace($newlines, ' ', $file);
        $md5 = md5($file);
    } else {
        // Just get its md5sum
        $md5 = md5_file($filename);
    }

    return $md5;
}

/**
 * Validate checksums for all required files.
 * 
 * @return A list of all files that failed checksum, where keys are the 
 *    relative path of the file, and values are the bad checksum
 */
function serendipity_verifyFTPChecksums() {
    global $serendipity;

    $badsums = array();

    // Load the checksums
    $f = S9Y_INCLUDE_PATH . 'checksums.inc.php';
    
    if (!file_exists($f) || filesize($f) < 1) {
        return $badsums;
    }

    require_once $f;
    // Verify that every file in the checksum list was uploaded correctly
    $basedir = realpath(dirname(__FILE__) . '/../');

    if (!is_array($serendipity['checksums_' . $serendipity['version']])) {
        return $badsums;
    }

    foreach ($serendipity['checksums_' . $serendipity['version']] as $prel => $sum) {
        $path = $basedir . '/' . $prel;
        // Don't take checksums of directories
        if (is_dir($path)) {
            // Weird that it's even here. 
            continue;
        }

        // Can't checksum unreadable or nonexistent files
        if (!is_readable($path)) {
            $badsums[$prel] = 'missing';
            continue;
        }

        // Validate checksum
        $calcsum = serendipity_FTPChecksum($path);
        if ($sum != $calcsum) {
            $badsums[$prel] = $calcsum;
            continue;
        }
    }

    return $badsums;
}
/* vim: set sts=4 ts=4 sw=4 expandtab : */
