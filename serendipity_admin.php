<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

define('IN_installer', true);
define('IN_upgrader', true);
define('IN_serendipity', true);
define('IN_serendipity_admin', true);
include('serendipity_config.inc.php');

header('Content-Type: text/html; charset=' . LANG_CHARSET);

if (IS_installed === false) {
    require(S9Y_INCLUDE_PATH . 'include/functions_permalinks.inc.php');
    require(S9Y_INCLUDE_PATH . 'include/functions_installer.inc.php');
    require(S9Y_INCLUDE_PATH . 'include/functions_config.inc.php');
} else {
    if (defined('IS_up2date') && IS_up2date === true) {
        serendipity_plugin_api::hook_event('backend_configure', $serendipity);
    }
}

if (isset($serendipity['GET']['adminModule']) && $serendipity['GET']['adminModule'] == 'logout') {
    serendipity_logout();
} else {
    if (IS_installed === true) {
        /* Check author token to insure session not hijacked */
        if (!isset($_SESSION['author_token']) || !isset($serendipity['COOKIE']['author_token']) || 
            ($_SESSION['author_token'] !== $serendipity['COOKIE']['author_token'])) {
            $_SESSION['serendipityAuthedUser'] = false;
            serendipity_session_destroy();
        }
        if (!serendipity_userLoggedIn()) {
            // Try again to log in, this time with enabled external authentication event hook
            serendipity_login(true);
        }
    }
}

// If we are inside an iframe, halt the script
if (serendipity_is_iframe() !== false) {
    return true;
}

if (isset($serendipity['GET']['no_smarty']) || isset($serendipity['no_smarty'])) {
    $_SESSION['no_smarty'] = true;
}

if (defined('IS_up2date') && IS_up2date === true && IS_installed === true) {
    $admin_installed = true;
} else {
    $admin_installed = false;
}

$is_logged_in = serendipity_userLoggedIn();

if ($is_logged_in) {
    $self_info = sprintf(USER_SELF_INFO, htmlspecialchars($serendipity['serendipityUser']), $serendipity['permissionLevels'][$serendipity['serendipityUserlevel']]);
} else {
    $self_info = '';
}

if (isset($serendipity['GET']['noBanner']) || isset($serendipity['POST']['noBanner'])) {
    $no_banner = true;
} else {
    $no_banner = false;
}

if (isset($serendipity['GET']['noSidebar']) || isset($serendipity['POST']['noSidebar'])) {
    $no_sidebar = true;
} else {
    $no_sidebar = false;
}

if (isset($serendipity['GET']['noFooter']) || isset($serendipity['POST']['noFooter'])) {
    $no_footer = true;
} else {
    $no_footer = false;
}

if (!isset($serendipity['serendipityPath']) || IS_installed === false || IS_up2date === false ) {
    $use_installer = true;
} else {
    $use_installer = false;
}

$post_action = $serendipity['POST']['action'];

$main_content = '';
if (!$use_installer && $is_logged_in) {
    if (!isset($serendipity['GET']['adminModule'])) {
        $serendipity['GET']['adminModule'] = (isset($serendipity['POST']['adminModule']) ? $serendipity['POST']['adminModule'] : '');
    }

    ob_start();
    serendipity_checkXSRF();

    switch($serendipity['GET']['adminModule']) {
        case 'installer':
        case 'configuration':
            if (!serendipity_checkPermission('siteConfiguration') && !serendipity_checkPermission('blogConfiguration')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/configuration.inc.php';
            $admin_section = CONFIGURATION;
            break;

        case 'media':
        case 'images':
            if (!serendipity_checkPermission('adminImages')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/images.inc.php';
            $admin_section = MEDIA;
            break;

        case 'templates':
            if (!serendipity_checkPermission('adminTemplates')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/templates.inc.php';
            $admin_section = MANAGE_STYLES;
            break;

        case 'plugins':
            if (!serendipity_checkPermission('adminPlugins')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/plugins.inc.php';
            $admin_section = CONFIGURE_PLUGINS;
            break;

        case 'users':
            if (!serendipity_checkPermission('adminUsers')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/users.inc.php';
            $admin_section = MANAGE_USERS;
            break;

        case 'groups':
            if (!serendipity_checkPermission('adminUsersGroups')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/groups.inc.php';
            $admin_section = MANAGE_GROUPS;
            break;

        case 'personal':
            if (!serendipity_checkPermission('personalConfiguration')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/personal.inc.php';
            $admin_section = PERSONAL_SETTINGS;
            break;

        case 'export':
            if (!serendipity_checkPermission('adminImport')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/export.inc.php';
            $admin_section = EXPORT_ENTRIES;
            break;

        case 'import':
            if (!serendipity_checkPermission('adminImport')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/import.inc.php';
            $admin_section = IMPORT_ENTRIES;
            break;

        case 'entries':
            if (!serendipity_checkPermission('adminEntries')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/entries.inc.php';
            $admin_section = ADMIN_ENTRIES;
            break;

        case 'comments':
            if (!serendipity_checkPermission('adminComments')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/comments.inc.php';
            $admin_section = COMMENTS;
            break;

        case 'category':
        case 'categories':
            if (!serendipity_checkPermission('adminCategories')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/category.inc.php';
            $admin_section = CATEGORIES;
            break;

        case 'logout':
            echo LOGGEDOUT;
            break;

        case 'event_display':
            if ($serendipity['no_create'] !== true) {
                serendipity_plugin_api::hook_event('backend_sidebar_entries_event_display_' . $serendipity['GET']['adminAction'], $serendipity);
            }
            break;

        case 'logout':
            echo LOGGEDOUT;
            break;

        case 'integrity':
            echo '<h2>' . INTEGRITY . '</h2>';
            $badsums = array();
            if (!is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php') || 0 == filesize(S9Y_INCLUDE_PATH . 'checksums.inc.php') ) {
                echo '<span class="msg_notice"><span class="icon-info-circled"></span> ' . CHECKSUMS_NOT_FOUND . '</span>';
                break;
            }
            $badsums = serendipity_verifyFTPChecksums();
            if (count($badsums) == 0) {
                echo '<span class="msg_success"><span class="icon-ok-circled"></span> ' . CHECKSUMS_PASS . '</span>';
            } else {
                echo '<ul class="plainList">';
                foreach ($badsums as $rpath => $calcsum) {
                    echo '<li class="msg_error"><span class="icon-attention-circled"></span> ' . sprintf(CHECKSUM_FAILED, $rpath) . '</li>';
                }
                echo '</ul>';
            }
            $admin_section = INTEGRITY;
            break;

        default:
            include S9Y_INCLUDE_PATH . 'include/admin/overview.inc.php';
            $admin_section = ADMIN_FRONTPAGE;
            break;
    }

    $main_content = ob_get_contents();
    ob_end_clean();
}

if (!$use_installer) {
    $poll_admin_vars = array('main_content', 'no_banner', 'no_sidebar', 'no_footer', 'post_action', 'is_logged_in', 'admin_installed', 'self_info', 'use_installer', 'title');
    $admin_vars = array();
    foreach($poll_admin_vars AS $poll_admin_var) {
        $admin_vars[$poll_admin_var] =& $$poll_admin_var;
    }

    $admin_vars['out']              = array();
    $admin_vars['no_create']        = $serendipity['no_create'];

    $admin_vars['title'] = $admin_section;

    if ($serendipity['expose_s9y']) {
        $admin_vars['version_info'] = sprintf(ADMIN_FOOTER_POWERED_BY, $serendipity['versionInstalled'], phpversion());
    } else {
        $admin_vars['version_info'] = sprintf(ADMIN_FOOTER_POWERED_BY, '', '');
    }

    $serendipity['smarty']->assignByRef('admin_vars', $admin_vars);
    $serendipity['smarty']->display(serendipity_getTemplateFile('admin/index.tpl', 'serendipityPath'));
} else {
    if (IS_installed === false) {
        $file = 'include/admin/installer.inc.php';
    } elseif ( IS_up2date === false ) {
        $file = 'include/admin/upgrader.inc.php';
    }
    require(S9Y_INCLUDE_PATH . $file);
}
