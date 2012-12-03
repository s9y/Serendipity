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
    $css_file = 'serendipity.css.php?serendipity[css_mode]=serendipity_admin.css';
} else {
    $css_file = serendipity_rewriteURL('serendipity_admin.css');
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
if (serendipity_is_iframe()) {
    return true;
}

if (isset($serendipity['GET']['no_smarty']) || isset($serendipity['no_smarty'])) {
    $_SESSION['no_smarty'] = true;
}

$admin_css_file = serendipity_getTemplateFile('admin/pluginmanager.css');

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

$file = '';
if (!isset($serendipity['serendipityPath']) || IS_installed === false || IS_up2date === false ) {
    $use_installer = true;
    if (IS_installed === false) {
        $file = 'include/admin/installer.inc.php';
    } elseif ( IS_up2date === false ) {
        $file = 'include/admin/upgrader.inc.php';
    } else {
        $file = ''; // For register_global, safety
    }
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
            echo '<div class="serendipity_admin_title">' . INTEGRITY . '</div>';
            $badsums = array();
            if (!is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php')) {
                echo '<span class="serendipityAdminMsgNote msg_notice">' . CHECKSUMS_NOT_FOUND . '</span>';
                break;
            }
            $badsums = serendipity_verifyFTPChecksums();
            if (count($badsums) == 0) {
                echo '<span class="serendipityAdminMsgSuccess msg_success">' . CHECKSUMS_PASS . '</span>';
            } else {
                echo '<ul>';
                foreach ($badsums as $rpath => $calcsum) {
                    echo '<li class="serendipityAdminMsgError msg_error">' . sprintf(CHECKSUM_FAILED, $rpath) . '</li>';
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

if (!$use_installer && !$_SESSION['no_smarty'] && serendipity_smarty_init()) {
    $poll_admin_vars = array('css_file', 'admin_css_file', 'main_content', 'no_banner', 'no_sidebar', 'no_footer', 'post_action', 'is_logged_in', 'admin_installed', 'self_info', 'use_installer', 'title');
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
?>
<html>
    <head>
        <title><?php echo SERENDIPITY_ADMIN_SUITE; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo LANG_CHARSET; ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $css_file; ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $admin_css_file; ?>" />

        <script type="text/javascript">
        function spawn() {
            if (self.Spawnextended) {
                Spawnextended();
            }

            if (self.Spawnbody) {
                Spawnbody();
            }

            if (self.Spawnnugget) {
                Spawnnugget();
            }
        }

        function SetCookie(name, value) {
            var today  = new Date();
            var expire = new Date();
            expire.setTime(today.getTime() + (60*60*24*30*1000));
            document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
        }

        function addLoadEvent(func) {
          var oldonload = window.onload;
          if (typeof window.onload != 'function') {
            window.onload = func;
          } else {
            window.onload = function() {
              oldonload();
              func();
            }
          }
        }

        </script>
<?php
    if ($admin_installed) {
        serendipity_plugin_api::hook_event('backend_header', $serendipity);
    }
?>
    </head>
    <body id="serendipity_admin_page" onload="spawn()">
        <table cellspacing="0" cellpadding="0" border="0" id="serendipityAdminFrame">
        <?php if (!$no_banner) { ?>
            <tr>
                <td colspan="2" id="serendipityAdminBanner">
                <?php if ($admin_installed) { ?>
                    <h1><?php echo SERENDIPITY_ADMIN_SUITE ?></h1>
                    <h2><?php echo $serendipity['blogTitle'] ?></h2>
                <?php } else { ?>
                    <h1><?php echo SERENDIPITY_INSTALLATION ?></h1>
                <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" id="serendipityAdminInfopane">
                    <?php if ($is_logged_in) { ?>
                        <span><?php echo $self_info; ?></span>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
            <tr valign="top">
<?php
if ($use_installer) {
?>
                <td class="serendipityAdminContent" colspan="2">
                    <?php require(S9Y_INCLUDE_PATH . $file); ?>
<?php


} elseif (!$is_logged_in) {
    $out = array();
    serendipity_plugin_api::hook_event('backend_login_page', $out);
?>
                <td colspan="2" class="serendipityAdminContent">
                    <div id="serendipityAdminWelcome" align="center"><h2><?php echo WELCOME_TO_ADMIN ?></h2>
                    <h3><?php echo PLEASE_ENTER_CREDENTIALS ?></h3></div>
                    <?php echo $out['header']; ?>
                    <?php if ($post_action != '' && !$is_logged_in ) { ?>
                    <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_error.png'); ?>" alt="" /><?php echo WRONG_USERNAME_OR_PASSWORD; ?></div>
                    <?php } ?>
                    <form action="serendipity_admin.php" method="post">
                        <input type="hidden" name="serendipity[action]" value="admin" />
                        <table id="serendipityAdminCredentials" cellspacing="10" cellpadding="0" border="0" align="center">
                            <tr>
                                <td><?php echo USERNAME ?></td>
                                <td><input class="input_textbox" type="text" name="serendipity[user]" /></td>
                            </tr>
                            <tr>
                                <td><?php echo PASSWORD ?></td>
                                <td><input class="input_textbox" type="password" name="serendipity[pass]" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="input_checkbox" id="autologin" type="checkbox" name="serendipity[auto]" /><label for="autologin"> <?php echo AUTOMATIC_LOGIN ?></label></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="submit" value="<?php echo LOGIN ?> &gt;" class="input_button serendipityPrettyButton" /></td>
                            </tr>
                            <?php echo $out['table']; ?>
                        </table>
                    </form>
                    <?php echo $out['footer']; ?>
                    <p id="serendipityBackToBlog"><a href="<?php echo $serendipity['serendipityHTTPPath']; ?>"><?php echo BACK_TO_BLOG;?></a></p>
<?php
} else {
    if (!$no_sidebar) { ?>
                <td id="serendipitySideBar">
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuMain">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuMainLinks" style="display:none"></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMainLinks serendipitySideBarMenuMainFrontpage"><a href="serendipity_admin.php"><?php echo ADMIN_FRONTPAGE; ?></a></li>
<?php if (serendipity_checkPermission('personalConfiguration')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMainLinks serendipitySideBarMenuMainPersonal"><a href="serendipity_admin.php?serendipity[adminModule]=personal"><?php echo PERSONAL_SETTINGS; ?></a></li>
<?php } ?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuMainLinks" style="display:none"></li>
                    </ul>
<?php if (serendipity_checkPermission('adminEntries') || serendipity_checkPermission('adminEntriesPlugins')) { ?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuEntry">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuEntryLinks"><?php echo ADMIN_ENTRIES ?></li>
<?php if (serendipity_checkPermission('adminEntries')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=new"><?php echo NEW_ENTRY; ?></a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=editSelect"><?php echo EDIT_ENTRIES; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminComments')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=comments"><?php echo COMMENTS; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminCategories')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=category&amp;serendipity[adminAction]=view"><?php echo CATEGORIES; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminEntries') || serendipity_checkPermission('adminEntriesPlugins')) { ?>
                        <?php if ($serendipity['no_create'] !== true) serendipity_plugin_api::hook_event('backend_sidebar_entries', $serendipity); ?>
<?php } ?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuEntryLinks" style="display:none"></li>
                    </ul>
<?php } ?>
                    
<?php if (serendipity_checkPermission('adminImages')) { ?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuMedia">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuMediaLinks"><?php echo MEDIA; ?></li>
<?php if (serendipity_checkPermission('adminImagesAdd')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=addSelect"><?php echo ADD_MEDIA; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminImagesView')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media"><?php echo MEDIA_LIBRARY; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminImagesDirectories')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=directorySelect"><?php echo MANAGE_DIRECTORIES; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminImagesSync')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=sync"><?php echo CREATE_THUMBS; ?></a></li>
<?php } ?>
                        <?php if ($serendipity['no_create'] !== true) serendipity_plugin_api::hook_event('backend_sidebar_entries_images', $serendipity); ?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuMediaLinks" style="display:none"></li>
                    </ul>
<?php } ?>
<?php if (serendipity_checkPermission('adminTemplates') || serendipity_checkPermission('adminPlugins')) { ?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuAppearance">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuAppearanceLinks"><?php echo APPEARANCE; ?></li>
<?php if (serendipity_checkPermission('adminTemplates')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuAppearanceLinks"><a href="serendipity_admin.php?serendipity[adminModule]=templates"><?php echo MANAGE_STYLES; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminPlugins')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuAppearanceLinks"><a href="serendipity_admin.php?serendipity[adminModule]=plugins"><?php echo CONFIGURE_PLUGINS; ?></a></li>
<?php } ?>
                        <?php if ($serendipity['no_create'] !== true) serendipity_plugin_api::hook_event('backend_sidebar_admin_appearance', $serendipity); ?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuAppearance" style="display:none"></li>
                    </ul>
<?php } ?>
<?php if (serendipity_checkPermission('siteConfiguration') || serendipity_checkPermission('blogConfiguration') || serendipity_checkPermission('adminUsers') || serendipity_checkPermission('adminUsersGroups') || serendipity_checkPermission('adminImport')) { ?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuUserManagement">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuUserManagementLinks"><?php echo ADMIN; ?></li>
<?php if (serendipity_checkPermission('siteConfiguration') || serendipity_checkPermission('blogConfiguration')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=configuration"><?php echo CONFIGURATION; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminUsers')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=users"><?php echo MANAGE_USERS; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminUsersGroups')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=groups"><?php echo MANAGE_GROUPS; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('adminImport')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=import"><?php echo IMPORT_ENTRIES; ?></a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=export"><?php echo EXPORT_ENTRIES; ?></a></li>
<?php } ?>
<?php if (serendipity_checkPermission('siteConfiguration') || serendipity_checkPermission('blogConfiguration')) { ?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=integrity"><?php echo INTEGRITY; ?></a></li>
<?php } ?>
                        <?php if ($serendipity['no_create'] !== true) serendipity_plugin_api::hook_event('backend_sidebar_admin', $serendipity); ?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuUserManagement" style="display:none"></li>
                    </ul>
<?php } ?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuLogout">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuLogoutLinks" style="display:none"></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuLogoutLinks serendipitySideBarMenuLogoutWeblog"><a href="<?php echo $serendipity['baseURL']; ?>"><?php echo BACK_TO_BLOG; ?></a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuLogoutLinks serendipitySideBarMenuLogoutLogout"><a href="serendipity_admin.php?serendipity[adminModule]=logout"><?php echo LOGOUT; ?></a></li>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuLogoutLinks" style="display:none"></li>
                    </ul>

                </td>
<?php } ?>
                <td class="serendipityAdminContent">
<?php
    echo $main_content;
}
?>
                </td>
            </tr>
        </table>
        <?php if (!$no_footer) { ?>
        <div class="serendipityAdminFooterSpacer"></div>
        
        <div id="serendipityAdminFooter">
            <span>
            <?php 
            if ($serendipity['expose_s9y']) {
                echo sprintf(ADMIN_FOOTER_POWERED_BY, $serendipity['versionInstalled'], phpversion());
            } else {
                echo sprintf(ADMIN_FOOTER_POWERED_BY, '', '');
            }
            ?>
            </span>
        </div>
        <?php } ?>
    </body>
</html>
<?php
}
