<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

umask(0000);
$umask = 0775;
@define('IN_installer', true);

define('S9Y_I_ERROR', -1);
define('S9Y_I_WARNING', 0);
define('S9Y_I_SUCCESS', 1);

// smartification needs to pull everything first for installation and db purposes
//include(S9Y_INCLUDE_PATH . 'serendipity_config.inc.php');

$data = array();

if (defined('S9Y_DATA_PATH')) {
    // Shared installation. S9Y_INCLUDE_PATH points to repository,
    // S9Y_DATA_PATH points to the local directory.
    $basedir = S9Y_DATA_PATH;
} else {
    // Usual installation within DOCUMENT_ROOT.
    $basedir = serendipity_query_default('serendipityPath', false);
}

$data['basedir'] = $basedir;
$data['phpversion'] = phpversion();
$data['versionInstalled'] = $serendipity['versionInstalled'];

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
function serendipity_installerResultDiagnose($result, $s) {
    global $errorCount, $data;
    if ( $result === S9Y_I_SUCCESS ) {
        $data['i_success'] = true; // we dont need data here explicitely, but we keep it for possible future purposes
        return '<span class="msg_success">'. $s .'</span>';
    }
    if ( $result === S9Y_I_WARNING ) {
        $data['i_warning'] = true;
        return '<span class="msg_notice">'. $s .' [?]</span>';
    }
    if ( $result === S9Y_I_ERROR ) {
        $errorCount++;
        $data['i_error'] = true;
        return '<span class="msg_error">'. $s .' [!]</span>';
    }
}

/* If register_globals is enabled and we use the dual GET/POST submission method, we will
   receive the value of the POST-variable inside the GET-variable, which is of course unwanted.
   Thus we transfer a new variable GETSTEP via POST and set that to an internal GET value. */
if (!empty($serendipity['POST']['getstep']) && is_numeric($serendipity['POST']['getstep'])) {
    $serendipity['GET']['step'] = $serendipity['POST']['getstep'];
}

/* From configuration to install */
if ( sizeof($_POST) > 1 && $serendipity['GET']['step'] == '3' ) {
    /* One problem, if the user chose to do an easy install, not all config vars has been transfered
       Therefore we fetch all config vars with their default values, and merge them with our POST data */

    $config = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE);
    foreach ( $config as $category ) {
        foreach ( $category['items'] as $item ) {
            if ( !isset($_POST[$item['var']]) ) {
                $_POST[$item['var']] = serendipity_query_default($item['var'], $item['default']);
            }
        }
    }

    if ( is_array($errors = serendipity_checkInstallation()) ) {
        $data['is_errors'] = true;
        $data['errors'] = $errors;
        $from = $_POST;
        /* Back to configuration, user did something wrong */
        $serendipity['GET']['step'] = $serendipity['POST']['step'];
    } else {
        /* We're good, move to install process */
        $serendipity['GET']['step'] = '3';
    }
}

$data['s9yGETstep'] = $serendipity['GET']['step'];

if ( (int)$serendipity['GET']['step'] == 0 ) {
    $data['getstepint0'] = true;
    $data['print_ERRORS_ARE_DISPLAYED_IN'] = sprintf(ERRORS_ARE_DISPLAYED_IN, serendipity_installerResultDiagnose(S9Y_I_ERROR, RED), serendipity_installerResultDiagnose(S9Y_I_WARNING, YELLOW), serendipity_installerResultDiagnose(S9Y_I_SUCCESS, GREEN));
    $data['s9yversion'] = $serendipity['version'];

    $errorCount = 0;
    
    if (is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php')) {
        $badsums = serendipity_verifyFTPChecksums();
        if (empty($badsums)) {
            $data['installerResultDiagnose_CHECKSUMS'][] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, CHECKSUMS_PASS);
        } else { 
            foreach ($badsums as $file => $sum) {
                $data['installerResultDiagnose_CHECKSUMS'][] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, sprintf(CHECKSUM_FAILED, $file));
            } 
        }
    } else {
        $data['installerResultDiagnose_CHECKSUMS'][] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, CHECKSUMS_NOT_FOUND);
    }

    $data['php_uname']     = php_uname('s') .' '. php_uname('r') .', '. php_uname('m');
    $data['php_sapi_name'] = php_sapi_name();

    if ( version_compare(phpversion(), '5.2.6', '>=') ) {
        $data['installerResultDiagnose_VERSION'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES .', '. phpversion());
    } else {
        $data['installerResultDiagnose_VERSION'] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, NO);
    }

    if ( sizeof(($_res = serendipity_probeInstallation('dbType'))) == 0 ) {
        $data['installerResultDiagnose_DBTYPE'] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, NONE);
    } else {
        $data['installerResultDiagnose_DBTYPE'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, implode(', ', $_res));
    }

    if ( extension_loaded('session') ) {
        $data['installerResultDiagnose_SESSION'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
    } else {
        $data['installerResultDiagnose_SESSION'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, NO);
    }

    if ( extension_loaded('pcre') ) {
        $data['installerResultDiagnose_PCRE'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
    } else {
        $data['installerResultDiagnose_PCRE'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, NO);
    }

    if ( extension_loaded('gd') ) {
        $data['installerResultDiagnose_GD'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
    } else {
        $data['installerResultDiagnose_GD'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
    }

    if ( extension_loaded('openssl') ) {
        $data['installerResultDiagnose_OPENSSL'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
    } else {
        $data['installerResultDiagnose_OPENSSL'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
    }

    if ( extension_loaded('mbstring') ) {
        $data['installerResultDiagnose_MBSTR'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
    } else {
        $data['installerResultDiagnose_MBSTR'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
    }

    if ( extension_loaded('iconv') ) {
        $data['installerResultDiagnose_ICONV'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
    } else {
        $data['installerResultDiagnose_ICONV'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
    }

    if ( extension_loaded('zlib') ) {
        $data['installerResultDiagnose_ZLIB'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
    } else {
        $data['installerResultDiagnose_ZLIB'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
    }

    if ($binary = serendipity_query_default('convert', false)) {
        $data['installerResultDiagnose_IM'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, $binary);
    } else {
        $data['installerResultDiagnose_IM'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NOT_FOUND);
    }

    if ( !serendipity_ini_bool(ini_get('safe_mode')) ) {
        $data['installerResultDiagnose_SSM'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
    } else {
        $data['installerResultDiagnose_SSM'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
    }

    if ( serendipity_ini_bool(ini_get('register_globals')) ) {
        $data['installerResultDiagnose_SRG'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
    } else {
        $data['installerResultDiagnose_SRG'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
    }

    if ( !serendipity_ini_bool(ini_get('magic_quotes_gpc')) ) {
        $data['installerResultDiagnose_SMQG'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
    } else {
        $data['installerResultDiagnose_SMQG'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
    }

    if ( !serendipity_ini_bool(ini_get('magic_quotes_runtime')) ) {
        $data['installerResultDiagnose_SMQR'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
    } else {
        $data['installerResultDiagnose_SMQR'] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, 'ON');
    }

    if ( !serendipity_ini_bool(ini_get('session.use_trans_sid')) ) {
        $data['installerResultDiagnose_SSUTS'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
    } else {
        $data['installerResultDiagnose_SSUTS'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
    }

    if ( serendipity_ini_bool(ini_get('allow_url_fopen')) ) {
        $data['installerResultDiagnose_SAUF'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'ON');
    } else {
        $data['installerResultDiagnose_SAUF'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, 'OFF');
    }

    if ( serendipity_ini_bool(ini_get('file_uploads')) ) {
        $data['installerResultDiagnose_SFU'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'ON');
    } else {
        $data['installerResultDiagnose_SFU'] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, 'OFF');
    }

    if ( serendipity_ini_bytesize(ini_get('post_max_size')) >= (10*1024*1024) ) {
        $data['installerResultDiagnose_SPMS'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, ini_get('post_max_size'));
    } else {
        $data['installerResultDiagnose_SPMS'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, ini_get('post_max_size'));
    }

    if ( serendipity_ini_bytesize(ini_get('upload_max_filesize')) >= (10*1024*1024) ) {
        $data['installerResultDiagnose_SUMF'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, ini_get('upload_max_filesize'));
    } else {
        $data['installerResultDiagnose_SUMF'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, ini_get('upload_max_filesize'));
    }

    if ( serendipity_ini_bytesize(ini_get('memory_limit')) >= ((PHP_INT_SIZE == 4 ? 8 : 16)*1024*1024) ) {
        $data['installerResultDiagnose_SML'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, ini_get('memory_limit'));
    } else {
        $data['installerResultDiagnose_SML'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, ini_get('memory_limit'));
    }

    $basewritable = False;
    if ( is_writable($basedir) ) {
        $data['installerResultDiagnose_WRITABLE'][] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
        $basewritable = True;
    } else {
        #Figure out if we already have all we need
        #PATH_SMARTY_COMPILE/
        #uploads/
        #archives/
        #.htaccess
        #serendipity_config_local.inc.php
        # For completeness we could test to make sure the directories
        # really are directories, but that's probably overkill
        foreach (array('archives/', PATH_SMARTY_COMPILE . '/', 'uploads/', '.htaccess', 'serendipity_config_local.inc.php') as $path) {
            if (!is_writeable($basedir . $path)) {
                $data['installerResultDiagnose_WRITABLE'][] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
                $showWritableNote = true;
                break;
            }
        }
        
        if (!$showWritableNote) {
            $data['installerResultDiagnose_WRITABLE'][] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
        }
    }

    if ( is_writable($basedir . PATH_SMARTY_COMPILE) ) {
        $data['installerResultDiagnose_COMPILE'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
    } else {
        if ($basewritable && !is_dir($basedir . PATH_SMARTY_COMPILE)) {
            $data['installerResultDiagnose_COMPILE'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
            #This directory will be created later in the process
        } else {
            $data['installerResultDiagnose_COMPILE'] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
            $showWritableNote = true;
        }
    }

    if ( is_writable($basedir . 'archives/') ) {
        $data['installerResultDiagnose_ARCHIVES'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
    } else {
        if ($basewritable && !is_dir($basedir . 'archives/')) {
            $data['installerResultDiagnose_ARCHIVES'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
            #This directory will be created later in the process
        } else {
            $data['installerResultDiagnose_ARCHIVES'] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
            $showWritableNote = true;
        }
    }

    if ( is_writable($basedir . 'plugins/') ) {
        $data['installerResultDiagnose_PLUGINS'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
    } else {
        $data['installerResultDiagnose_PLUGINS'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NOT_WRITABLE . NOT_WRITABLE_SPARTACUS);
    }

    if ( is_dir($basedir .'uploads/') ) { 
        $data['is_dir_uploads'] = true;
        if ( is_writable($basedir . 'uploads/') ) {
            $data['installerResultDiagnose_UPLOADS'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
        } else {
            if ($basewritable && !is_dir($basedir . 'uploads/')) {
                $data['installerResultDiagnose_UPLOADS'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
                #This directory will be created later in the process
            } else {
                $data['installerResultDiagnose_UPLOADS'] =  serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
                $showWritableNote = true;
            }
        }
    }

    if (function_exists('is_executable')) { 
        $data['is_imb_executable'] = true;
        if ($binary = serendipity_query_default('convert', false)) {
            if (is_executable($binary)) {
                $data['installerResultDiagnose_IMB'] =  serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                $data['installerResultDiagnose_IMB'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
            }
        } else {
            $data['installerResultDiagnose_IMB'] =  serendipity_installerResultDiagnose(S9Y_I_WARNING, NOT_FOUND);
        }
    } 

    $data['showWritableNote'] = $showWritableNote;
    $data['errorCount'] = $errorCount;

} elseif ( $serendipity['GET']['step'] == '2a' ) { 
    $config = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE, null, array('simpleInstall'));
    ob_start();
    serendipity_printConfigTemplate($config, $from, true, false, false);
    $data['ob_serendipity_printConfigTemplate'] = ob_get_contents();
    ob_end_clean();        

} elseif ( $serendipity['GET']['step'] == '2b' ) { 
    $config = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE);
    ob_start();
    serendipity_printConfigTemplate($config, $from, true, false, false);
    $data['ob_serendipity_printConfigTemplate'] = ob_get_contents();
    ob_end_clean();        

} elseif ( $serendipity['GET']['step'] == '3' ) {
    $serendipity['dbPrefix'] = $_POST['dbPrefix'];

    $t = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}authors", false, 'both', false, false, false, true);
    $data['authors_query'] = $t;
    
    if ( is_array($t) ) {
        // void
    } else {
        serendipity_installDatabase(); 
        $data['install_DB'] = true;

        $authorid = serendipity_addAuthor($_POST['user'], $_POST['pass'], $_POST['realname'], $_POST['email'], USERLEVEL_ADMIN, 1);
        $mail_comments =  (serendipity_db_bool($_POST['want_mail']) ? 1 : 0);
        serendipity_set_user_var('mail_comments', $mail_comments, $authorid);
        serendipity_set_user_var('mail_trackbacks', $mail_comments, $authorid);
        serendipity_set_user_var('right_publish', 1, $authorid);
        serendipity_addDefaultGroup('USERLEVEL_EDITOR_DESC', USERLEVEL_EDITOR);
        serendipity_addDefaultGroup('USERLEVEL_CHIEF_DESC',  USERLEVEL_CHIEF);
        serendipity_addDefaultGroup('USERLEVEL_ADMIN_DESC',  USERLEVEL_ADMIN);
        $data['add_authors'] = true;

        serendipity_set_config_var('template', $serendipity['defaultTemplate']);
        $data['set_template_vars'] = true;

        include_once S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php';
        serendipity_plugin_api::register_default_plugins();
        $data['register_default_plugins'] = true;
    }

    $errors = serendipity_installFiles($basedir);
    $data['errors_sif'] = $errors;

    if ( serendipity_updateConfiguration() ) {
        $data['s9y_installed'] = true;
    }
    echo serendipity_smarty_show("admin/installer.inc.tpl", $data);
    return;
}



include_once  dirname(dirname(__FILE__)) . "/functions.inc.php";


if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}



$serendipity['smarty']->assign($data);
$tfile = serendipity_getTemplateFile("admin/installer.inc.tpl");

ob_start();
include $tfile;
$content = ob_get_contents();
ob_end_clean();

// eval a string template and do not store compiled code
echo $serendipity['smarty']->display('eval:'.$content);


/* vim: set sts=4 ts=4 expandtab : */
