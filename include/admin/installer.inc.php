<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

umask(0000);
$umask = 0775;
@define('IN_installer', true);

define('S9Y_I_ERROR', -1);
define('S9Y_I_WARNING', 0);
define('S9Y_I_SUCCESS', 1);

if (defined('S9Y_DATA_PATH')) {
    // Shared installation. S9Y_INCLUDE_PATH points to repository,
    // S9Y_DATA_PATH points to the local directory.
    $basedir = S9Y_DATA_PATH;
} else {
    // Usual installation within DOCUMENT_ROOT.
    $basedir = serendipity_query_default('serendipityPath', false);
}

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
    global $errorCount;
    if ( $result === S9Y_I_SUCCESS ) {
        return '<span class="serendipityAdminMsgSuccessInstall" style="color: green; font-weight: bold">'. $s .'</span>';
    }
    if ( $result === S9Y_I_WARNING ) {
        return '<span class="serendipityAdminMsgWarningInstall" style="color: orange; font-weight: bold">'. $s .' [?]</span>';
    }
    if ( $result === S9Y_I_ERROR ) {
        $errorCount++;
        return '<span class="serendipityAdminMsgErrorInstall" style="color: red; font-weight: bold">'. $s .' [!]</span>';
    }
}

/* If register_globals is enabled and we use the dual GET/POST submission method, we will
   receive the value of the POST-variable inside the GET-variable, which is of course unwanted.
   Thus we transfer a new variable GETSTEP via POST and set that to an internal GET value. */
if (!empty($serendipity['POST']['getstep']) && is_numeric($serendipity['POST']['getstep'])) {
    $serendipity['GET']['step'] = $serendipity['POST']['getstep'];
}

/* From configuration to install */
if ( sizeof($_POST) > 1 && $serendipity['GET']['step'] == 3 ) {
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
        foreach ( $errors as  $error ) {
            echo '<div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />'. $error .'</div>';
        }

        $from = $_POST;
        /* Back to configuration, user did something wrong */
        $serendipity['GET']['step'] = $serendipity['POST']['step'];
    } else {
        /* We're good, move to install process */
        $serendipity['GET']['step'] = 3;
    }
}

if ( (int)$serendipity['GET']['step'] == 0 ) {
?>
<?php echo WELCOME_TO_INSTALLATION ?>.
<br /><?php echo FIRST_WE_TAKE_A_LOOK ?>.
<br /><?php echo sprintf(ERRORS_ARE_DISPLAYED_IN, serendipity_installerResultDiagnose(S9Y_I_ERROR, RED), serendipity_installerResultDiagnose(S9Y_I_WARNING, YELLOW), serendipity_installerResultDiagnose(S9Y_I_SUCCESS, GREEN)); ?>.
<br />
<br>
<div align="center">- <?php echo sprintf(PRE_INSTALLATION_REPORT, $serendipity['version']) ?> -</div><br />


<?php $errorCount = 0 ?>
<div align="center">
<table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
    <tr>
        <td colspan="2" style="font-weight: bold"><?php echo INTEGRITY ?></td>
    </tr>
<?php if (is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php')) {
    $badsums = serendipity_verifyFTPChecksums();
?>
    <?php if (empty($badsums)) {?>
    <tr>
      <td colspan="2"><?php echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, CHECKSUMS_PASS); ?></td>
    </tr>
    <?php } else { 
        foreach ($badsums as $file => $sum) {
?>
    <tr>
      <td colspan="2"><?php echo serendipity_installerResultDiagnose(S9Y_I_WARNING, sprintf(CHECKSUM_FAILED, $file)); ?></td>
    </tr>
    <?php } 
    }
} else { ?>
    <tr>
      <td colspan="2"><?php echo serendipity_installerResultDiagnose(S9Y_I_WARNING, CHECKSUMS_NOT_FOUND); ?></td>
    </tr>
<?php } ?>
</table>
<table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
    <tr>
        <td colspan="2" style="font-weight: bold"><?php echo PHP_INSTALLATION ?></td>
    </tr>
    <tr>
      <td><?php echo OPERATING_SYSTEM ?></td>
      <td><?php echo php_uname('s') .' '. php_uname('r') .', '. php_uname('m') ?></td>
    </tr>
    <tr>
      <td><?php echo WEBSERVER_SAPI ?></td>
      <td><?php echo php_sapi_name() ?></td>
    </tr>
    <tr>
        <td>PHP version >= 5.2.6</td>
        <td width="200"><?php
            if ( version_compare(phpversion(), '5.2.6', '>=') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES .', '. phpversion());
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_ERROR, NO);
            }
     ?></td>
    </tr>
    <tr>
        <td>Database extensions</td>
        <td width="200"><?php

            if ( sizeof(($_res = serendipity_probeInstallation('dbType'))) == 0 ) {
                echo serendipity_installerResultDiagnose(S9Y_I_ERROR, NONE);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, implode(', ', $_res));
            }
     ?></td>
    </tr>
    <tr>
        <td>Session extension</td>
        <td width="200"><?php
            if ( extension_loaded('session') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, NO);
            }
     ?></td>
    </tr>
    <tr>
        <td>PCRE extension</td>
        <td width="200"><?php
            if ( extension_loaded('pcre') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, NO);
            }
     ?></td>
    </tr>
    <tr>
        <td>GDlib extension</td>
        <td width="200"><?php
            if ( extension_loaded('gd') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
            }
     ?></td>
    </tr>
    <tr>
      <td>OpenSSL extension</td>
      <td><?php
            if ( extension_loaded('openssl') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
            }
     ?></td>
    </tr>
    <tr>
        <td>mbstring extension</td>
        <td width="200"><?php
            if ( extension_loaded('mbstring') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
            }
     ?></td>
    </tr>
    <tr>
        <td>iconv extension</td>
        <td width="200"><?php
            if ( extension_loaded('iconv') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
            }
     ?></td>
    </tr>
    <tr>
        <td>zlib extension</td>
        <td width="200"><?php
            if ( extension_loaded('zlib') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
            }
     ?></td>
    </tr>
    <tr>
      <td>Imagemagick binary </td>
      <td><?php
            if ($binary = serendipity_query_default('convert', false)) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, $binary);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NOT_FOUND);
            }
      ?></td>
    </tr>
</table>
<br />
<table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
    <tr>
        <td colspan="3" style="font-weight: bold"><?PHP echo PHPINI_CONFIGURATION ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="150"><em><?php echo RECOMMENDED ?></em></td>
      <td width="150"><em><?php echo ACTUAL ?></em></td>
    </tr>
    <tr>
      <td>safe_mode</td>
      <td width="150"><strong><?php echo 'OFF' ?></strong></td>
      <td width="150"><?php
            if ( !serendipity_ini_bool(ini_get('safe_mode')) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
            }
     ?></td>
    </tr>
    <tr>
        <td>register_globals</td>
        <td width="150"><strong><?php echo 'OFF' ?></strong></td>
        <td width="150"><?php
            if ( serendipity_ini_bool(ini_get('register_globals')) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
            }
     ?></td>
    </tr>
    <tr>
        <td>magic_quotes_gpc</td>
        <td width="150"><strong><?php echo 'OFF' ?></strong></td>
        <td width="150"><?php
            if ( !serendipity_ini_bool(ini_get('magic_quotes_gpc')) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
            }
     ?></td>
    </tr>
    <tr>
      <td>magic_quotes_runtime</td>
      <td width="150"><strong><?php echo 'OFF' ?></strong></td>
      <td width="150"><?php
            if ( !serendipity_ini_bool(ini_get('magic_quotes_runtime')) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_ERROR, 'ON');
            }
     ?></td>
    </tr>
    <tr>
      <td>session.use_trans_sid</td>
      <td width="150"><strong><?php echo 'OFF' ?></strong></td>
      <td width="150"><?php
            if ( !serendipity_ini_bool(ini_get('session.use_trans_sid')) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'OFF');
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, 'ON');
            }
     ?></td>
    </tr>
    <tr>
      <td>allow_url_fopen</td>
      <td width="150"><strong><?php echo 'ON' ?></strong></td>
      <td width="150"><?php
            if ( serendipity_ini_bool(ini_get('allow_url_fopen')) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'ON');
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, 'OFF');
            }
     ?></td>
    </tr>
    <tr>
      <td>file_uploads</td>
      <td width="150"><strong><?php echo 'ON' ?></strong></td>
      <td width="150"><?php
            if ( serendipity_ini_bool(ini_get('file_uploads')) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, 'ON');
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_ERROR, 'OFF');
            }
     ?></td>
    </tr>
    <tr>
      <td>post_max_size</td>
      <td width="150"><strong>10M</strong></td>
      <td width="150"><?php
            if ( serendipity_ini_bytesize(ini_get('post_max_size')) >= (10*1024*1024) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, ini_get('post_max_size'));
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, ini_get('post_max_size'));
            }
     ?></td>
    </tr>
    <tr>
      <td>upload_max_filesize</td>
      <td width="150"><strong>10M</strong></td>
      <td width="150"><?php
            if ( serendipity_ini_bytesize(ini_get('upload_max_filesize')) >= (10*1024*1024) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, ini_get('upload_max_filesize'));
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, ini_get('upload_max_filesize'));
            }
     ?></td>
    </tr>
    <tr>
      <td>memory_limit</td>
      <td width="150"><strong><?php echo (PHP_INT_SIZE == 4 ? '8M' : '16M'); ?></strong></td>
      <td width="150"><?php
            if ( serendipity_ini_bytesize(ini_get('memory_limit')) >= ((PHP_INT_SIZE == 4 ? 8 : 16)*1024*1024) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, ini_get('memory_limit'));
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, ini_get('memory_limit'));
            }
     ?></td>
    </tr>

</table>

<br />
<table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
    <tr>
        <td colspan="2" style="font-weight: bold"><?php echo PERMISSIONS ?></td>
    </tr>
    <tr>
        <td style="vertical-align: top"><?php echo $basedir ?></td>
        <td width="200"><?php
            $basewritable = False;
            if ( is_writable($basedir) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
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
                        echo serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
                        $showWritableNote = true;
                        break;
                    }
                }

                if (!$showWritableNote) {
                    echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
                }
            }
     ?></td>
    </tr>
    <tr>
        <td style="vertical-align: top"><?php echo $basedir . PATH_SMARTY_COMPILE?></td>
        <td width="200"><?php
            if ( is_writable($basedir . PATH_SMARTY_COMPILE) ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
            } else {
                if ($basewritable && !is_dir($basedir . PATH_SMARTY_COMPILE)) {
                    echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
                    #This directory will be created later in the process
                } else {
                    echo serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
                    $showWritableNote = true;
                }
            }
     ?></td>
    </tr>
    <tr>
        <td style="vertical-align: top"><?php echo $basedir . 'archives/'?></td>
        <td width="200"><?php
            if ( is_writable($basedir . 'archives/') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
            } else {
                if ($basewritable && !is_dir($basedir . 'archives/')) {
                    echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
                    #This directory will be created later in the process
                } else {
                    echo serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
                    $showWritableNote = true;
                }
            }
     ?></td>
    </tr>
    <tr>
        <td style="vertical-align: top"><?php echo $basedir . 'plugins/'?></td>
        <td width="200"><?php
            if ( is_writable($basedir . 'plugins/') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
            } else {
                echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NOT_WRITABLE . NOT_WRITABLE_SPARTACUS);
            }
     ?></td>
    </tr>

<?php if ( is_dir($basedir .'uploads/') ) { ?>
    <tr>
        <td style="vertical-align: top"><?php echo $basedir . 'uploads/'?></td>
        <td width="200"><?php
            if ( is_writable($basedir . 'uploads/') ) {
                echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
            } else {
                if ($basewritable && !is_dir($basedir . 'uploads/')) {
                    echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, WRITABLE);
                    #This directory will be created later in the process
                } else {
                    echo serendipity_installerResultDiagnose(S9Y_I_ERROR, NOT_WRITABLE);
                    $showWritableNote = true;
                }
            }
     ?></td>
    </tr>
<?php } ?>
<?php if (function_exists('is_executable')) { ?>
    <tr>
      <td style="vertical-align: top">Execute Imagemagick  binary </td>
      <td><?php
            if ($binary = serendipity_query_default('convert', false)) {
                if (is_executable($binary)) {
                    echo serendipity_installerResultDiagnose(S9Y_I_SUCCESS, YES);
                } else {
                    echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NO);
                }
            } else {
                 echo serendipity_installerResultDiagnose(S9Y_I_WARNING, NOT_FOUND);
            }
      ?></td>
    </tr>
<?php } ?>
</table>

<?php if ( $showWritableNote === true ) { ?>
    <div class="serendipityAdminMsgNote"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_note.png'); ?>" alt="" /><?php echo sprintf(PROBLEM_PERMISSIONS_HOWTO, 'chmod 1777') ?></div>
<?php } ?>

<div align="center">
<?php if ( $errorCount > 0 ) { ?>
    <div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_error.png'); ?>" alt="" /><?php echo PROBLEM_DIAGNOSTIC ?></div>
    <h2><a href="serendipity_admin.php"><?php echo RECHECK_INSTALLATION ?></a></h2>
<?php } else { ?>
    <?php echo SELECT_INSTALLATION_TYPE ?>:
    <h2><a href="?serendipity[step]=2a"><?php echo SIMPLE_INSTALLATION ?></a> - <a href="?serendipity[step]=2b"><?php echo EXPERT_INSTALLATION ?></a></h2>
    <?php } ?>
</div>
</div>

<?php } elseif ( $serendipity['GET']['step'] == '2a' ) { ?>
<form action="?" method="post">
    <input type="hidden" name="serendipity[step]" value="<?php echo $serendipity['GET']['step'] ?>">
    <input type="hidden" name="serendipity[getstep]" value="3">
<?php
    $config = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE, null, array('simpleInstall'));
    serendipity_printConfigTemplate($config, $from, true, false, false);
?>
    <div align="center"><input name="submit" type="submit" value="<?php echo COMPLETE_INSTALLATION ?>" class="serendipityPrettyButton input_button"></div>
</form>

<?php } elseif ( $serendipity['GET']['step'] == '2b' ) { ?>
<form action="?" method="post">
    <input type="hidden" name="serendipity[step]" value="<?php echo $serendipity['GET']['step'] ?>">
    <input type="hidden" name="serendipity[getstep]" value="3">
<?php
    $config = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE);
    serendipity_printConfigTemplate($config, $from, true, false, false);
?>
    <div align="center"><input name="submit" type="submit" value="<?php echo COMPLETE_INSTALLATION ?>" class="serendipityPrettyButton input_button"></div>
</form>

<?php } elseif ( (int)$serendipity['GET']['step'] == 3 ) { ?>
<?php

    $serendipity['dbPrefix'] = $_POST['dbPrefix'];

    echo CHECK_DATABASE_EXISTS .'...';
    $t = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}authors", false, 'both', false, false, false, true);
    if ( is_array($t) ) {
        echo ' <strong>'. THEY_DO .'</strong>, '. WONT_INSTALL_DB_AGAIN;
        echo '<br />';
        echo '<br />';
    } else {
        echo ' <strong>'. THEY_DONT .'</strong>';
        echo '<br />';

        echo CREATE_DATABASE;
        serendipity_installDatabase();
        echo ' <strong>' . DONE . '</strong><br />';

        echo sprintf(CREATING_PRIMARY_AUTHOR, htmlspecialchars($_POST['user'])) .'...';
        $authorid = serendipity_addAuthor($_POST['user'], $_POST['pass'], $_POST['realname'], $_POST['email'], USERLEVEL_ADMIN, 1);
        $mail_comments =  (serendipity_db_bool($_POST['want_mail']) ? 1 : 0);
        serendipity_set_user_var('mail_comments', $mail_comments, $authorid);
        serendipity_set_user_var('mail_trackbacks', $mail_comments, $authorid);
        serendipity_set_user_var('right_publish', 1, $authorid);
        serendipity_addDefaultGroup('USERLEVEL_EDITOR_DESC', USERLEVEL_EDITOR);
        serendipity_addDefaultGroup('USERLEVEL_CHIEF_DESC',  USERLEVEL_CHIEF);
        serendipity_addDefaultGroup('USERLEVEL_ADMIN_DESC',  USERLEVEL_ADMIN);

        echo ' <strong>' . DONE . '</strong><br />';

        echo SETTING_DEFAULT_TEMPLATE .'... ';
        serendipity_set_config_var('template', $serendipity['defaultTemplate']);
        echo ' <strong>' . DONE . '</strong><br />';

        echo INSTALLING_DEFAULT_PLUGINS .'... ';
        include_once S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php';
        serendipity_plugin_api::register_default_plugins();
        echo ' <strong>' . DONE . '</strong><br />';

    }

    echo sprintf(ATTEMPT_WRITE_FILE, '.htaccess') . '... ';
    $errors = serendipity_installFiles($basedir);
    if ( $errors === true ) {
         echo ' <strong>' . DONE . '</strong><br />';
    } else {
        echo ' <strong>' . FAILED . '</strong><br />';
        foreach ( $errors as $error ) {
            echo '<div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . $error .'</div>';
        }
    }

    if ( serendipity_updateConfiguration() ) {
        echo '<div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_success.png'). '" alt="" />' . SERENDIPITY_INSTALLED .'</div>';
        echo '<div align="center" style="font-size: large"><a href="'. $_POST['serendipityHTTPPath'] .'">'. VISIT_BLOG_HERE .'</a></div>';
        echo '<div align="center">'. THANK_YOU_FOR_CHOOSING .'</div>';
    } else {
        echo '<div class="serendipityAdminMsgError"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />'. ERROR_DETECTED_IN_INSTALL .'</div>';
    }
}

/* vim: set sts=4 ts=4 expandtab : */
