<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

define('IN_installer', true);
define('IN_upgrader', true);
define('IN_serendipity', true);
define('IN_serendipity_admin', true);
include('serendipity_config.inc.php');

header('Content-Type: text/html; charset=' . LANG_CHARSET);

if (IS_installed === false) {
    require_once(S9Y_INCLUDE_PATH . 'include/functions.inc.php');
} else {
    if (defined('IS_up2date') && IS_up2date === true) {
        serendipity_plugin_api::hook_event('backend_configure', $serendipity);
    }
}

if (isset($serendipity['GET']['adminModule']) && $serendipity['GET']['adminModule'] == 'logout') {
    serendipity_logout();
    header("Location: ".$serendipity['baseURL']);
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
            if (serendipity_userLoggedIn()) {
                // login with external authentication - reload page to set language settings correct for user
                include_once S9Y_INCLUDE_PATH . 'include/functions_routing.inc.php';
                gotoAdmin();
                return true;
            }
        }
    }
}

// If we are inside an iframe, halt the script
if (serendipity_is_iframe() !== false) {
    include_once S9Y_INCLUDE_PATH . 'include/functions_entries_admin.inc.php';
    // An iframe may NOT contain <html> and </html> tags, that's why we emit different headers here than on serendipity_admin.php

    // We need to restore GET/POST variables to that depending plugins inside the iframe
    // can still fetch all that variables; and we also tighten security by not allowing
    // to pass any different GET/POST variables to our iframe.
    $iframe_mode         = $serendipity['GET']['iframe_mode'];
    $serendipity['POST'] = &$_SESSION['save_entry_POST'];
    $serendipity['GET']  = &$_SESSION['save_entry_POST']; // GET-Vars are the same as POST to ensure compatibility.
    $serendipity['hidefooter'] = true;
    ignore_user_abort(true);
    echo serendipity_iframe($_SESSION['save_entry'], $iframe_mode);
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
    $self_info = sprintf(USER_SELF_INFO, serendipity_specialchars($serendipity['serendipityUser']), $serendipity['permissionLevels'][$serendipity['serendipityUserlevel']]);
} else {
    $self_info = '';
}

$serendipity['ajax'] = $ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
$no_banner = (isset($serendipity['GET']['noBanner']) || isset($serendipity['POST']['noBanner']));
$no_sidebar = (isset($serendipity['GET']['noSidebar']) || isset($serendipity['POST']['noSidebar']));
$no_footer = (isset($serendipity['GET']['noFooter']) || isset($serendipity['POST']['noFooter']));

$use_installer = (!isset($serendipity['serendipityPath']) || IS_installed === false || IS_up2date === false );

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
            $admin_section = MENU_TEMPLATES;
            break;

        case 'plugins':
            if (!serendipity_checkPermission('adminPlugins')) {
                break;
            }

            include S9Y_INCLUDE_PATH . 'include/admin/plugins.inc.php';
            $admin_section = MENU_PLUGINS;
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
            // perms are checked by author
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

        case 'maintenance':
            include S9Y_INCLUDE_PATH . 'include/admin/maintenance.inc.php';
            $admin_section = MENU_MAINTENANCE;
            break;

        default:
            include S9Y_INCLUDE_PATH . 'include/admin/overview.inc.php';
            $admin_section = ADMIN_FRONTPAGE;
            break;
    }

    $main_content = ob_get_contents();
    ob_end_clean();
}

if ($ajax) {
    // if that is an ajax request we can stop here, since we by convention don't want to wrap the content in the usual backend code
    echo $main_content;

} elseif (!$use_installer) {

    $poll_admin_vars = array('main_content', 'no_banner', 'no_sidebar', 'no_footer', 'post_action', 'is_logged_in', 'admin_installed', 'self_info', 'use_installer', 'title');
    $admin_vars      = array();

    foreach($poll_admin_vars AS $poll_admin_var) {
        $admin_vars[$poll_admin_var] =& $$poll_admin_var;
    }

    $admin_vars['out']         = array();
    $admin_vars['no_create']   = $serendipity['no_create'];
    $admin_vars['title']       = $admin_section;
    $admin_vars['backendBlogtitleFirst'] = $serendipity['backendBlogtitleFirst'];

    if ($serendipity['expose_s9y']) {
        $admin_vars['version_info'] = sprintf(ADMIN_FOOTER_POWERED_BY, $serendipity['versionInstalled'], phpversion());
    } else {
        $admin_vars['version_info'] = sprintf(ADMIN_FOOTER_POWERED_BY, '', '');
    }

    if (!is_object($serendipity['smarty'])) {
        serendipity_smarty_init();
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
