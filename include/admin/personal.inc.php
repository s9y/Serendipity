<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

$data = array();

if (!serendipity_checkPermission('personalConfiguration')) {
    return;
}

$from = array();
$data['adminAction'] = null;

if ($serendipity['GET']['adminAction'] == 'save' && serendipity_checkFormToken()) {
    $config = serendipity_parseTemplate(S9Y_CONFIG_USERTEMPLATE);
    $data['adminAction'] = "save";
    if ( (!serendipity_checkPermission('adminUsersEditUserlevel') || !serendipity_checkPermission('adminUsersMaintainOthers') )
          && (int)$_POST['userlevel'] > $serendipity['serendipityUserlevel']) {
        $data['not_authorized'] = true;
    } elseif (empty($_POST['username'])) {
        $data['empty_username'] = true;
    } elseif (  (!empty($_POST['password'])
                    &&
                !empty($_POST['check_password'])
                    &&
                $_POST['check_password'] != $_SESSION['serendipityPassword']
                    &&
                serendipity_passwordhash($_POST['check_password']) != $_SESSION['serendipityPassword'])
                ||
                (!empty($_POST['password'])
                    &&
                empty($_POST['check_password'])
                    &&
                $_POST['password'] != $_SESSION['serendipityPassword']
                    &&
                serendipity_passwordhash($_POST['password']) != $_SESSION['serendipityPassword']) ) {
         $data['password_check_fail'] = true;
    } else {
        $valid_groups = serendipity_getGroups($serendipity['authorid'], true);
        $data['realname'] = $_POST['realname'];
        foreach($config as $category) {
            foreach ($category['items'] as $item) {
                if (in_array('groups', $item['flags'])) {
                    if (serendipity_checkPermission('adminUsersMaintainOthers')) {

                        // Void, no fixing necessarry

                    } elseif (serendipity_checkPermission('adminUsersMaintainSame')) {
                        if (!is_array($_POST[$item['var']])) {
                            continue;
                        }

                        // Check that no user may assign groups he's not allowed to.
                        foreach($_POST[$item['var']] AS $groupkey => $groupval) {
                            if (in_array($groupval, $valid_groups)) {
                                continue;
                            } elseif ($groupval == 2 && in_array(3, $valid_groups)) {
                                // Admin is allowed to assign users to chief editors
                                continue;
                            } elseif ($groupval == 1 && in_array(2, $valid_groups)) {
                                // Chief is allowed to assign users to editors
                                continue;
                            }

                            unset($_POST[$item['var']][$groupkey]);
                        }

                    } else {
                        continue;
                    }
/*
                    if (count($_POST[$item['var']]) < 1) {
                        echo '<div class="serendipityAdminMsgError msg_error"><img class="img_error" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . WARNING_NO_GROUPS_SELECTED . '</div>';
                    } else {
                        serendipity_updateGroups($_POST[$item['var']], $serendipity['authorid'], false);
                    }
*/
                    continue;
                }

                // Moved to group administration:
                if ($item['var'] == 'userlevel') continue;
                if (($item['view'] ?? null) == 'dangerous') continue;

                if (serendipity_checkConfigItemFlags($item, 'local')) {
                    serendipity_set_user_var($item['var'], $_POST[$item['var']], $serendipity['authorid'], true);
                }

                if (serendipity_checkConfigItemFlags($item, 'configuration')) {
                    serendipity_set_config_var($item['var'], $_POST[$item['var']], $serendipity['authorid']);
                }
            }

            $pl_data = array(
                'id'       => $serendipity['POST']['authorid'] ?? null,
                'authorid' => $serendipity['POST']['authorid'] ?? null,
                'username' => $_POST['username'],
                'realname' => $_POST['realname'],
                'email'    => $_POST['email']
            );
            serendipity_updatePermalink($pl_data, 'author');
            serendipity_plugin_api::hook_event('backend_users_edit', $pl_data);
        }
        $from = $_POST;
    }
}

$data['formToken'] = serendipity_setFormToken();
$template       = serendipity_parseTemplate(S9Y_CONFIG_USERTEMPLATE);
$user           = serendipity_fetchUsers($serendipity['authorid']);
$from           = $user[0];
$from['groups'] = serendipity_getGroups($serendipity['authorid']);
unset($from['password']);
$data['config'] = serendipity_printConfigTemplate($template, $from, true, false);


$add = array('internal' => true);
serendipity_plugin_api::hook_event('backend_sidebar_entries_event_display_profiles', $from, $add);

if (!is_object($serendipity['smarty'] ?? null)) {
    serendipity_smarty_init();
}

if (! isset($data['not_authorized'])) { $data['not_authorized'] = null; }
if (! isset($data['empty_username'])) { $data['empty_username'] = null; }
if (! isset($data['password_check_fail'])) { $data['password_check_fail'] = null; }

echo serendipity_smarty_show('admin/personal.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
