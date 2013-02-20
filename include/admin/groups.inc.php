<?php # $Id:$

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

if (!serendipity_checkPermission('adminUsersGroups')) {
    return;
}

$data = array();
/* Delete a group */
if (isset($_POST['DELETE_YES']) && serendipity_checkFormToken()) {
    $group = serendipity_fetchGroup($serendipity['POST']['group']);
    serendipity_deleteGroup($serendipity['POST']['group']);
    $data['delete_yes'] = true;
    $data['group_id'] = $serendipity['POST']['group'];
    $data['group'] = $group;
}

/* Save new group */
if (isset($_POST['SAVE_NEW']) && serendipity_checkFormToken()) {
    $serendipity['POST']['group'] = serendipity_addGroup($serendipity['POST']['name']);
    $perms = serendipity_getAllPermissionNames();
    serendipity_updateGroupConfig($serendipity['POST']['group'], $perms, $serendipity['POST'], false, $serendipity['POST']['forbidden_plugins'], $serendipity['POST']['forbidden_hooks']);
    $data['save_new'] = true;
    $data['group_id'] = $serendipity['POST']['group'];
    $data['group'] = $group;
}


/* Edit a group */
if (isset($_POST['SAVE_EDIT']) && serendipity_checkFormToken()) {
    $perms = serendipity_getAllPermissionNames();
    serendipity_updateGroupConfig($serendipity['POST']['group'], $perms, $serendipity['POST'], false, $serendipity['POST']['forbidden_plugins'], $serendipity['POST']['forbidden_hooks']);
    $data['save_edit'] = true;
    $data['name'] = $serendipity['POST']['name'];
}

if ( $serendipity['GET']['adminAction'] != 'delete' ) {
    $data['delete'] = false;

    if (serendipity_checkPermission('adminUsersMaintainOthers')) {
        $groups = serendipity_getAllGroups();
    } elseif (serendipity_checkPermission('adminUsersMaintainSame')) {
        $groups = serendipity_getAllGroups($serendipity['authorid']);
    } else {
        $groups = array();
    }
    $data['groups'] = $groups;
    if ( !isset($_POST['NEW']) ) {
        $data['start'] = true;
    }
    $data['deleteFormToken'] = serendipity_setFormToken('url'); 
}




if ($serendipity['GET']['adminAction'] == 'edit' || isset($_POST['NEW'])) {
    if (isset($_POST['NEW'])) {
        $data['new'] = true;
    } else {
        $data['edit'] = true;
    }
    $data['formToken'] = serendipity_setFormToken();
    
    if ($serendipity['GET']['adminAction'] == 'edit') {
        $group = serendipity_fetchGroup($serendipity['GET']['group']);
        $from = &$group;
    } else {
        $from = array();
    }
    $data['from'] = $from;

    $allusers = serendipity_fetchUsers();
    $users    = serendipity_getGroupUsers($from['id']);

    $selected = array();
    foreach((array)$users AS $user) {
        $selected[$user['id']] = true;
    }
    $data['selected'] = $selected;
    $data['allusers'] = $allusers;

    $perms = serendipity_getAllPermissionNames();
    ksort($perms);
    $data['perms'] = $perms;
    foreach($perms AS $perm => $userlevels) {
        if (defined('PERMISSION_' . strtoupper($perm))) {
            $data['perms'][$perm]['permission_name'] = constant('PERMISSION_' . strtoupper($perm));
        } else {
            $data['perms'][$perm]['permission_name'] = $perm;
        }
        if (!serendipity_checkPermission($perm) && $perm != 'hiddenGroup') {
            $data['perms'][$perm]['permission'] = false;
        } else {
            $data['perms'][$perm]['permission'] = true;
        }
    }

    if ($serendipity['enablePluginACL']) {
        $data['enablePluginACL'] = true;
        $allplugins =& serendipity_plugin_api::get_event_plugins();
        $allhooks   = array();
        $data['allplugins'] = $allplugins;
        foreach($allplugins AS $plugid => $currentplugin) {
            foreach($currentplugin['b']->properties['event_hooks'] AS $hook => $set) {
                $allhooks[$hook] = true;
            }
            $data['allplugins'][$plugid]['has_permission'] = serendipity_hasPluginPermissions($plugid, $from['id']);
        }
        ksort($allhooks);
        $data['allhooks'] = $allhooks;
        foreach($allhooks AS $hook => $set) {
            $data['allhooks'][$hook]['has_permission'] = serendipity_hasPluginPermissions($hook, $from['id']);
        }
    }

} elseif ($serendipity['GET']['adminAction'] == 'delete') {
    $data['delete'] = true;
    $group = serendipity_fetchGroup($serendipity['GET']['group']);
    $data['group_id'] = $serendipity['GET']['group'];
    $data['group'] = $group;
    $data['formToken'] = serendipity_setFormToken();
}

$serendipity['smarty']->assign($data);
$tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
$tfile = dirname(__FILE__) . "/$tpldir/groups.inc.tpl";
$content = $serendipity['smarty']->fetch('file:'. $tfile);
echo $content;

/* vim: set sts=4 ts=4 expandtab : */
?>
