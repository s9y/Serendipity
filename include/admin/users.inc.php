<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

if (!serendipity_checkPermission('adminUsers')) {
    return;
}

require_once(S9Y_INCLUDE_PATH . 'include/functions_installer.inc.php');

$data = array();

/* Delete a user */
if (isset($_POST['DELETE_YES']) && serendipity_checkFormToken()) {
    $data['delete_yes'] = true;
    $user = serendipity_fetchUsers($serendipity['POST']['user']);
    if (($serendipity['serendipityUserlevel'] < USERLEVEL_ADMIN && $user[0]['userlevel'] >= $serendipity['serendipityUserlevel']) || !serendipity_checkPermission('adminUsersDelete')) {
        $data['no_delete_permission'] = true;
    } elseif ($_POST['userlevel'] > $serendipity['serendipityUserlevel']) {
        $data['no_delete_permission_userlevel'] = true;
    } else {
        $group_intersect = serendipity_intersectGroup($user[0]['authorid']);
        if (serendipity_checkPermission('adminUsersMaintainOthers') || (serendipity_checkPermission('adminUsersMaintainSame') && $group_intersect)) {
            $data['delete_permission'] = true;
            serendipity_deleteAuthor($user[0]['authorid']);
            serendipity_plugin_api::hook_event('backend_users_delete', $user[0]);
            $data['user'] = $serendipity['POST']['user'];
            $data['realname'] = $_POST['realname'];
        }
    }
}


/* Save new user */
if (isset($_POST['SAVE_NEW']) && serendipity_checkFormToken()) {
    $data['save_new'] = true;
    if (($serendipity['serendipityUserlevel'] < USERLEVEL_ADMIN && $_POST['userlevel'] >= $serendipity['serendipityUserlevel']) || !serendipity_checkPermission('adminUsersCreateNew')) {
        $data['no_save_permission'] = true;
    } else {
        $serendipity['POST']['user'] = serendipity_addAuthor($_POST['username'], $_POST['pass'], $_POST['realname'], $_POST['email'], $_POST['userlevel'], 1);

        $valid_groups = serendipity_getGroups($serendipity['authorid'], true);
        /* Save all the properties */
        $config = serendipity_parseTemplate(S9Y_CONFIG_USERTEMPLATE);
        foreach($config as $category) {
            foreach ($category['items'] as $item) {
                if (in_array('groups', $item['flags'])) {
                    if (serendipity_checkPermission('adminUsersMaintainOthers')) {

                        // Void, no fixing neccessarry

                    } elseif (serendipity_checkPermission('adminUsersMaintainSame')) {
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

                    if (count($_POST[$item['var']]) < 1) {
                        $data['no_group_selected'] = true;
                    } else {
                        serendipity_updateGroups($_POST[$item['var']], $serendipity['POST']['user'], false);
                    }
                    continue;
                }

                if (serendipity_checkConfigItemFlags($item, 'local')) {
                    serendipity_set_user_var($item['var'], $_POST[$item['var']], $serendipity['POST']['user'], ($serendipity['authorid'] == $serendipity['POST']['authorid'] ? true : false));
                }

                if (serendipity_checkConfigItemFlags($item, 'configuration')) {
                    serendipity_set_config_var($item['var'], $_POST[$item['var']], $serendipity['POST']['user']);
                }
            }
        }

        serendipity_plugin_api::hook_event('backend_users_add', $serendipity['POST']['user']);
        $data['user'] = $serendipity['POST']['user'];
        $data['realname'] = $_POST['realname'];
    }
}


/* Edit a user */
if (isset($_POST['SAVE_EDIT']) && serendipity_checkFormToken()) {
    $data['save_edit'] = true;
    $user = serendipity_fetchUsers($serendipity['POST']['user']);
    $data['user'] = $user;
    if (!serendipity_checkPermission('adminUsersMaintainOthers') && $user[0]['userlevel'] >= $serendipity['serendipityUserlevel']) {
        $data['no_edit_permission'] = true;
    } elseif ($_POST['userlevel'] > $serendipity['serendipityUserlevel']) {
        $data['no_edit_permission_userlevel'] = true;
    } else {
        $valid_groups = serendipity_getGroups($serendipity['authorid'], true);
        $config = serendipity_parseTemplate(S9Y_CONFIG_USERTEMPLATE);
        foreach($config as $category) {
            foreach ($category['items'] as $item) {
                if (in_array('groups', $item['flags'])) {
                    if (serendipity_checkPermission('adminUsersMaintainOthers')) {

                        // Void, no fixing neccessarry

                    } elseif (serendipity_checkPermission('adminUsersMaintainSame')) {

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

                    if (count($_POST[$item['var']]) < 1) {
                        $data['no_group_selected'] = true;
                    } else {
                        serendipity_updateGroups($_POST[$item['var']], $serendipity['POST']['user'], false);
                    }
                    continue;
                }

                if (serendipity_checkConfigItemFlags($item, 'local')) {
                    serendipity_set_user_var($item['var'], $_POST[$item['var']], $serendipity['POST']['user'], ($serendipity['authorid'] == $serendipity['POST']['user'] ? true : false));
                }

                if (serendipity_checkConfigItemFlags($item, 'configuration')) {
                    serendipity_set_config_var($item['var'], $_POST[$item['var']], $serendipity['POST']['user']);
                }
            }
        }

        $pl_data = array(
            'id'       => $serendipity['POST']['user'],
            'authorid' => $serendipity['POST']['user'],
            'username' => $_POST['username'],
            'realname' => $_POST['realname'],
            'email'    => $_POST['email']
        );
        serendipity_updatePermalink($pl_data, 'author');

        serendipity_plugin_api::hook_event('backend_users_edit', $pl_data);
    }
}

if ($serendipity['GET']['adminAction'] != 'delete') {
    $data['delete'] = false;
    if (serendipity_checkPermission('adminUsersMaintainOthers')) {
        $users = serendipity_fetchUsers('');
    } elseif (serendipity_checkPermission('adminUsersMaintainSame')) {
        $users = serendipity_fetchUsers('', serendipity_getGroups($serendipity['authorid'], true));
    } else {
        $users = serendipity_fetchUsers($serendipity['authorid']);
    }

    $data['users'] = $users;
    $data['urlFormToken'] = serendipity_setFormToken('url');
    if (is_array($users)) {
        foreach($users as $user => $userdata) {
            if ($userdata['userlevel'] < $serendipity['serendipityUserlevel'] || $userdata['authorid'] == $serendipity['authorid'] || $serendipity['serendipityUserlevel'] >= USERLEVEL_ADMIN ) {
                    $data['users'][$user]['isEditable'] = true;
                    $data['users'][$user]['authorUrl'] = serendipity_authorURL($userdata);
            }
        }
    }
       
    if ( !isset($_POST['NEW']) && serendipity_checkPermission('adminUsersCreateNew')) {
        $data['new'] = true;
    }
}


if ( ($serendipity['GET']['adminAction'] == 'edit' && serendipity_checkPermission('adminUsersDelete')) || (isset($_POST['NEW']) && serendipity_checkPermission('adminUsersCreateNew')) ) {
    $data['adminAction'] = $serendipity['GET']['adminAction'];
    $data['show_form'] = true;
    $data['formToken'] = serendipity_setFormToken();
    
    if ($serendipity['GET']['adminAction'] == 'edit') {
        $user = serendipity_fetchUsers($serendipity['GET']['userid']);
        $group_intersect = serendipity_intersectGroup($user[0]['authorid']);
        if ($user[0]['userlevel'] >= $serendipity['serendipityUserlevel'] && $user[0]['authorid'] != $serendipity['authorid'] && !serendipity_checkPermission('adminUsersMaintainOthers')) {
            $data['no_create_permission'] = true;
            $from = array();
        } elseif (serendipity_checkPermission('adminUsersMaintainOthers') ||
                (serendipity_checkPermission('adminUsersMaintainSame') && $group_intersect)) {
            $data['create_permission'] = true;
            $from = &$user[0];
            unset($from['password']);
        } else {
            
            $from = array();
        }
    } else {
        $from = array();
    }
    $data['from'] = $from;

    $config = serendipity_parseTemplate(S9Y_CONFIG_USERTEMPLATE);
    if (!empty($serendipity['GET']['userid'])) {
        $from['groups'] = serendipity_getGroups($serendipity['GET']['userid']);
    } else {
        $from['groups'] = array();
    }

    ob_start();
    serendipity_printConfigTemplate($config, $from, true, false, true, true);
    $data['config'] = ob_get_contents();
    ob_end_clean();

} elseif ($serendipity['GET']['adminAction'] == 'delete' && serendipity_checkPermission('adminUsersDelete')) {
    $user = serendipity_fetchUsers($serendipity['GET']['userid']);
    $group_intersect = serendipity_intersectGroup($user[0]['authorid']);

    if (serendipity_checkPermission('adminUsersMaintainOthers') ||
                (serendipity_checkPermission('adminUsersMaintainSame') && $group_intersect)) {
        $data['delete'] = true;
        $data['userid'] = (int)$serendipity['GET']['userid'];
        $data['realname'] = $user[0]['realname'];
        $data['formToken'] = serendipity_setFormToken();
    }
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}


echo serendipity_smarty_show('admin/users.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
?>