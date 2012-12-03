<?php # $Id$

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

require_once(S9Y_INCLUDE_PATH . 'include/functions_installer.inc.php');
require_once(S9Y_INCLUDE_PATH . 'include/functions_upgrader.inc.php');

define('S9Y_U_ERROR', -1);
define('S9Y_U_WARNING', 0);
define('S9Y_U_SUCCESS', 1);

/**
 * Checks a return code constant if it's successfull or an error and return HTML code
 *
 * The diagnosis checks return codes of several PHP checks. Depending
 * on the input, a specially formatted string is returned.
 *
 * @access public
 * @param  int      Return code
 * @param  string   String to return wrapped in special HTML markup
 * @return string   returned String
 */
function serendipity_upgraderResultDiagnose($result, $s) {
    global $errorCount, $data;

    if ( $result === S9Y_U_SUCCESS ) {
        $data['u_success'] = true; // we dont need data here explicitely, but we keep it for possible future purposes
        return '<span class="msg_success">'. $s .'</span>';
    }

    if ( $result === S9Y_U_WARNING ) {
        $data['u_warning'] = true;
        return '<span class="msg_notice">'. $s .'</span>';
    }

    if ( $result === S9Y_U_ERROR ) {
        $errorCount++;
        $data['u_error'] = true;
        return '<span class="msg_error">'. $s .'</span>';
    }
}

/* shall we add the function to smarty ?? */
/*
function serendipity_smarty_backend_upgraderResultDiagnose($params, $smarty) {
    $ssb_URD = serendipity_upgraderResultDiagnose($params[0], $params[1]);
    $smarty->assign($ssb_URD);
}
*/

// Setting this value to 'FALSE' is recommended only for SHARED BLOG INSTALLATIONS. This enforces all shared blogs with a common
// codebase to only allow upgrading, no bypassing and thus causing instabilities.
// This variable can also be set as $serendipity['UpgraderShowAbort'] inside serendipity_config_local.inc.php to prevent
// your setting being changed when updating serendipity in first place.
$showAbort  = (isset($serendipity['UpgraderShowAbort']) ? $serendipity['UpgraderShowAbort'] : true);
$data['showAbort'] = $showAbort;

$abortLoc   = $serendipity['serendipityHTTPPath'] . 'serendipity_admin.php?serendipity[action]=ignore';
$upgradeLoc = $serendipity['serendipityHTTPPath'] . 'serendipity_admin.php?serendipity[action]=upgrade';
$data['abortLoc']   = $abortLoc;
$data['upgradeLoc'] = $upgradeLoc;

/* Functions which needs to be run if installed version is equal or lower */
$tasks = array(array('version'   => '0.5.1',
                     'function'  => 'serendipity_syncThumbs',
                     'title'     => 'Image Sync',
                     'desc'      => 'Version 0.5.1 introduces image sync with the database'. "\n" .
                                    'With your permission I would like to perform the image sync'),

               array('version'   => '0.6.5',
                     'function'  => 'serendipity_rebuildCategoryTree',
                     'title'     => 'Nested subcategories, post to multiple categories',
                     'desc'      => 'This update will update the categories table of your database and update the relations from entries to categories.'. "\n" .
                                    'This is a possibly dangerous task to perform, so <strong style="color: red">make sure you have a backup of your database!</strong>'),

               array('version'   => '0.6.8',
                     'function'  => 'serendipity_installFiles',
                     'title'     => 'Update of .htaccess file',
                     'desc'      => 'Changes were made to the .htaccess file, you need to regenerate it'),

               array('version'   => '0.6.10',
                     'functon'   => 'serendipity_installFiles',
                     'title'     => 'Update of .htaccess file',
                     'desc'      => 'Changes were made to the .htaccess file, you need to regenerate it'),

               array('version'   => '0.6.12',
                     'function'  => 'serendipity_installFiles',
                     'title'     => 'Update of .htaccess file',
                     'desc'      => 'Changes were made to the .htaccess file, you need to regenerate it'),

               array('version'   => '0.8-alpha3',
                     'function'  => 'serendipity_removeFiles',
                     'title'     => 'Removal of obsolete files',
                     'arguments' => array($obsolete_files),
                     'desc'      => '<p>The directory structure has been reworked. The following files will be moved to a folder called "backup". If you made manual changes to those files, be sure to read the file docs/CHANGED_FILES to re-implement your changes.</p><div style="font-size: x-small; margin: 15px">' . implode(', ', $obsolete_files) . '</div>'),

               array('version'   => '0.8-alpha4',
                     'function'  => 'serendipity_removeFiles',
                     'title'     => 'Removal of serendipity_entries.php',
                     'arguments' => array(array('serendipity_entries.php')),
                     'desc'      => 'In order to implement the new administration, we have to remove the leftovers'),

               array('version'   => '0.8-alpha4',
                     'function'  => 'serendipity_installFiles',
                     'title'     => 'Update of .htaccess file',
                     'desc'      => 'In order to implement the new administration, changes were made to the .htaccess file, you need to regenerate it'),

               array('version'   => '0.8-alpha7',
                     'function'  => 'serendipity_removeObsoleteVars',
                     'title'     => 'Removal of obsolete configuration variables',
                     'desc'      => 'Because of the new configuration parsing methods, some database variables are now only stored in serendipity_config_local.inc.php. Those obsolete variables will be removed from the database'),

               array('version'   => '0.8-alpha8',
                     'function'  => array('serendipity_plugin_api', 'create_plugin_instance'),
                     'arguments' => array('serendipity_event_browsercompatibility', null, 'event'),
                     'title'     => 'Plugin for Browser Compatibility',
                     'desc'      => 'Includes some CSS-behaviours and other functions to maximize browser compatibility'),

               array('version'   => '0.8-alpha9',
                     'function'  => 'serendipity_installFiles',
                     'title'     => 'Update of .htaccess file',
                     'desc'      => 'In order to implement author views, changes were made to the .htaccess file, you need to regenerate it'),

               array('version'   => '0.8-alpha11',
                     'function'  => 'serendipity_installFiles',
                     'title'     => 'Update of .htaccess file',
                     'desc'      => 'In order to implement URL rewrite improvement, changes were made to the .htaccess file, you need to regenerate it'),

               array('version'   => '0.8-alpha12',
                     'type'      => 'TEMPLATE_NOTICE',
                     'function'  => '',
                     'title'     => '<b>TEMPLATE_NOTICE:</b> The template file "entries.tpl" has changed.',
                     'desc'      => 'Authors can now have longer real names instead of only their loginnames. Those new fields need to be displayed in your Template, if you manually created one. Following variables were changes:
                                     <b>{$entry.username}</b> =&gt; <b>{$entry.author}</b>
                                     <b>{$entry.link_username}</b> =&gt; <b>{$entry.link_author}</b>
                                     Those variables have been replaced in all bundled templates and those in our additional_themes repository.
                                     ' . serendipity_upgraderResultDiagnose(S9Y_U_WARNING, 'Manual user interaction is required! This can NOT be done automatically!')),

               array('version'   => '0.8-beta3',
                     'function'  => 'serendipity_fixPlugins',
                     'arguments' => array('markup_column_names'),
                     'title'     => 'Configuration options of markup plugins',
                     'desc'      => '<p>Because of the latest multilingual improvements in Serendipity, the database key names for certain configuration directives only found in markup plugins need to be renamed.</p>'
                                    . '<p>This will be automatically handled by Serendipity for all internally bundled and external plugins. If you are using the external plugins "GeShi" and "Markdown", please make sure you will upgrade to their latest versions!</p>'
                                    . '<p>We also advise that you check the plugin configuration of all your markup plugins (like emoticate, nl2br, s9ymarkup, bbcode) and see if the settings you made are all properly migrated.</p>'),

               array('version'   => '0.8-beta5',
                     'function'  => 'serendipity_smarty_purge',
                     'title'     => 'Clear Smarty compiled templates',
                     'desc'      => 'Smarty has been upgraded to its latest stable version, and we therefore need to purge all compiled templates and cache'),

               array('version'   => '0.9-alpha2',
                     'function'  => 'serendipity_buildPermalinks',
                     'title'     => 'Build permalink patterns',
                     'desc'      => 'This version introduces user-configurable Permalinks and needs to pre-cache the list of all permalinks to be later able to fetch the corresponding entries for a permalink.'),

               array('version'   => '0.9-alpha3',
                     'function'  => 'serendipity_addDefaultGroups',
                     'title'     => 'Introduce author groups',
                     'desc'      => 'This version introduces customizable user groups. Your existing users will be migrated into the new default groups.'),

);

/* Fetch SQL files which needs to be run */
$dir      = opendir(S9Y_INCLUDE_PATH . 'sql/');
$tmpfiles = array();
while (($file = readdir($dir)) !== false ) {
    if (preg_match('@db_update_(.*)_(.*)_(.*).sql@', $file, $res)) {
        list(, $verFrom, $verTo, $dbType) = $res;
        if (version_compare($verFrom, $serendipity['versionInstalled']) >= 0) {
            $tmpFiles[$verFrom][$dbType] = $file;
        }
    }
}

$sqlfiles = array();
if (is_array($tmpFiles)) {
    foreach ($tmpFiles as $version => $db) {
        if (array_key_exists($serendipity['dbType'], $db) === false ) {
            $sqlfiles[$version] = $db['mysql'];
        } else {
            $sqlfiles[$version] = $db[$serendipity['dbType']];
        }
    }
}

@uksort($sqlfiles, "strnatcasecmp");

if ($serendipity['GET']['action'] == 'ignore') {
    /* Todo: Don't know what to put here? */

} elseif ($serendipity['GET']['action'] == 'upgrade') {

    $errors = array();

    /* Install SQL files */
    foreach ($sqlfiles as $sqlfile) {
        $sql = file_get_contents(S9Y_INCLUDE_PATH .'sql/'. $sqlfile);
        $sql = str_replace('{PREFIX}', $serendipity['dbPrefix'], $sql);
        preg_match_all("@(.*);@iUs", $sql, $res);
        foreach ($res[0] as $sql) {
            $r = serendipity_db_schema_import($sql);
            if (is_string($r)) {
                $errors[] = trim($r);
            }
        }
    }

    /* Call functions */
    $data['call_tasks'] = array();
    foreach ($tasks as $task) {
        if (!empty($task['function']) && version_compare($serendipity['versionInstalled'], $task['version'], '<') ) {
            if (is_callable($task['function'])) {
                $data['is_callable_task'] = true;
                $data['call_tasks'][] = sprintf('Calling %s ...<br />', (is_array($task['function']) ? $task['function'][0] . '::'. $task['function'][1] : $task['function']));

                if (empty($task['arguments'])) {
                    call_user_func($task['function']);
                } else {
                    call_user_func_array($task['function'], $task['arguments']);
                }
            } else {
                $errors[] = 'Unable to call '. $task['function'];
            }
        }
    }

    if (sizeof($errors)) {
        $data['errors'] = $errors;
    }

    /* I don't care what you told me, I will always nuke Smarty cache */
    serendipity_smarty_purge();

}

$data['s9y_version']           = $serendipity['version'];
$data['s9y_version_installed'] = $serendipity['versionInstalled'];

if (($showAbort && $serendipity['GET']['action'] == 'ignore') || $serendipity['GET']['action'] == 'upgrade') {
    $privateVariables = array();
    if (isset($serendipity['UpgraderShowAbort'])) {
        $privateVariables['UpgraderShowAbort'] = $serendipity['UpgraderShowAbort'];
    }

    $r = serendipity_updateLocalConfig(
           $serendipity['dbName'],
           $serendipity['dbPrefix'],
           $serendipity['dbHost'],
           $serendipity['dbUser'],
           $serendipity['dbPass'],
           $serendipity['dbType'],
           $serendipity['dbPersistent'],
           $privateVariables
    );

    if ($serendipity['GET']['action'] == 'ignore') {
        $data['ignore'] = true;
    } elseif ($serendipity['GET']['action'] == 'upgrade') {
        // void
    }
    $data['return_here'] = true;
    $data['print_UPGRADER_RETURN_HERE'] = sprintf(SERENDIPITY_UPGRADER_RETURN_HERE, '<a href="'. $serendipity['serendipityHTTPPath'] .'">', '</a>');
    $_SESSION['serendipityAuthedUser'] = false;
    @session_destroy();
} else {
    $data['upgrade'] = true;
    $data['result_diagnose'] = sprintf(ERRORS_ARE_DISPLAYED_IN, serendipity_upgraderResultDiagnose(S9Y_U_ERROR, RED), serendipity_upgraderResultDiagnose(S9Y_U_WARNING, YELLOW), serendipity_upgraderResultDiagnose(S9Y_U_SUCCESS, GREEN));

    $errorCount = 0;
    $showWritableNote = false;
    $basedir = $serendipity['serendipityPath'];
    $data['basedir'] = $basedir;
    
    $data['upgraderResultDiagnose1'] = array();
    if (is_readable($basedir . 'checksums.inc.php')) {
        $data['checksums'] = true;
        $badsums = serendipity_verifyFTPChecksums();

        if ( empty($badsums) ) {
            $data['upgraderResultDiagnose1'][] = serendipity_upgraderResultDiagnose(S9Y_U_SUCCESS, CHECKSUMS_PASS);
        } else {
            foreach ($badsums as $rfile => $sum) {
                $data['upgraderResultDiagnose1'][] = serendipity_upgraderResultDiagnose(S9Y_U_WARNING, sprintf(CHECKSUM_FAILED, $rfile));
            }
        }
    } // End if checksums

    $data['upgraderResultDiagnose2'] = array();
    if ( is_writable($basedir) ) {
        $data['upgraderResultDiagnose2'][] = serendipity_upgraderResultDiagnose(S9Y_U_SUCCESS, WRITABLE);
    } else {
        $showWritableNote = false;
        #Figure out if we're set up a little more securely
        #PATH_SMARTY_COMPILE/
        #uploads/
        #archives/
        #.htaccess
        #serendipity_config_local.inc.php
        # For completeness we could test to make sure the directories
        # really are directories, but that's probably overkill
        foreach (array('archives/', PATH_SMARTY_COMPILE . '/', 'uploads/', '.htaccess', 'serendipity_config_local.inc.php') as $path) {
            if (!is_writeable($basedir . $path)) {
                $data['upgraderResultDiagnose2'][] = serendipity_upgraderResultDiagnose(S9Y_U_ERROR, NOT_WRITABLE);
                $showWritableNote = true;
                break;
            }
        }

        if (!$showWritableNote) {
            $data['upgraderResultDiagnose2'][] = serendipity_upgraderResultDiagnose(S9Y_U_SUCCESS, WRITABLE);
        }
    }

    $data['upgraderResultDiagnose3'] = array();
    if ( is_writable($basedir . PATH_SMARTY_COMPILE) ) {
         $data['upgraderResultDiagnose3'][] = serendipity_upgraderResultDiagnose(S9Y_U_SUCCESS, WRITABLE);
    } else {
         $data['upgraderResultDiagnose3'][] = serendipity_upgraderResultDiagnose(S9Y_U_ERROR, NOT_WRITABLE);
         $showWritableNote = true;
    }
            
    $data['upgraderResultDiagnose4'] = array();
    if (is_dir($basedir . $serendipity['uploadHTTPPath'])) { 
        $data['isdir_uploadpath'] = is_dir($basedir . $serendipity['uploadHTTPPath']);
        if (is_writable($basedir . $serendipity['uploadHTTPPath'])) {
            $data['upgraderResultDiagnose4'][] = serendipity_upgraderResultDiagnose(S9Y_U_SUCCESS, WRITABLE);
        } else {
            $data['upgraderResultDiagnose4'][] = serendipity_upgraderResultDiagnose(S9Y_U_ERROR, NOT_WRITABLE);
            $showWritableNote = true;
        }
    }

    $data['showWritableNote'] = $showWritableNote;

    $data['errorCount'] = $errorCount;
    if ($errorCount < 1) {
        if (sizeof($sqlfiles) > 0) { 
            $data['database_update_types'] = sprintf(SERENDIPITY_UPGRADER_DATABASE_UPDATES, $serendipity['dbType']);
            $data['sqlfiles'] = $sqlfiles;
        }

        $taskCount = 0;
        $data['tasks'] = array();
        foreach ( $tasks as $task ) {
            if (version_compare($serendipity['versionInstalled'], $task['version'], '<'))  {
                $data['tasks'][] = $task;
                $taskCount++;
            }
        }

        $data['taskCount'] = $taskCount;
    }
}

$data['get']['action'] = $serendipity['GET']['action']; // don't trust {$smarty.get.vars} if not proofed, as we often change GET vars via serendipty['GET'] by runtime

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

/* see on top */
#$serendipity['smarty']->registerPlugin('function', 'serendipity_upgraderResultDiagnose', 'serendipity_smarty_backend_upgraderResultDiagnose');

$serendipity['smarty']->assign($data);
$tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
$tfile = dirname(__FILE__) . "/$tpldir/upgrader.inc.tpl";
$content = $serendipity['smarty']->fetch('file:'. $tfile); // short notation with Smarty3 in S9y 1.7 and up
echo $content;

/* vim: set sts=4 ts=4 expandtab : */
