<?php

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
    serendipity_updateGroupConfig($serendipity['POST']['group'], $perms, $serendipity['POST'], false, $serendipity['POST']['forbidden_plugins'] ?? null, $serendipity['POST']['forbidden_hooks'] ?? null);
    $data['save_new'] = true;
    $data['group_id'] = $serendipity['POST']['group'];
    $group = serendipity_fetchGroup($serendipity['POST']['group']);
    $data['group'] = $group;
}

/* Edit a group */
if (isset($_POST['SAVE_EDIT']) && serendipity_checkFormToken()) {
    $perms = serendipity_getAllPermissionNames();
    serendipity_updateGroupConfig($serendipity['POST']['group'], $perms, $serendipity['POST'], false, ($serendipity['POST']['forbidden_plugins'] ?? null), ($serendipity['POST']['forbidden_hooks'] ?? null));
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
    if ( ! (isset($_POST['NEW']) || $serendipity['GET']['adminAction'] == 'new') ) {
        $data['start'] = true;
    }
    $data['deleteFormToken'] = serendipity_setFormToken('url');
}

if ($serendipity['GET']['adminAction'] == 'edit' || isset($_POST['NEW']) || $serendipity['GET']['adminAction'] == 'new') {
    if (isset($_POST['NEW']) || $serendipity['GET']['adminAction'] == 'new') {
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
    $users    = serendipity_getGroupUsers($from['id'] ?? null);

    $selected = array();
    foreach((array)$users AS $user) {
        $selected[$user['id'] ?? null] = true;
    }
    $data['selected'] = $selected;
    $data['allusers'] = $allusers;

    $perms = serendipity_getAllPermissionNames();
    ksort($perms);
    $data['perms'] = $perms;
    foreach($perms AS $perm => $userlevels) {
        if (defined('PERMISSION_' . strtoupper($perm))) {
            if (stripos(':', constant('PERMISSION_' . strtoupper($perm))) !== false) {
                list($name, $note) = explode(":", constant('PERMISSION_' . strtoupper($perm)));
                $data['perms'][$perm]['permission_name'] = $name;
                $data['perms'][$perm]['permission_note'] = $note;
            } else {
                # in case a permission has not the right value, that it misses the :
                $data['perms'][$perm]['permission_name'] = constant('PERMISSION_' . strtoupper($perm));
                $data['perms'][$perm]['permission_note'] = '';
            }
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
                $allhooks[$hook] = array();
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

# php 8 compat section
if (! isset($data['delete_yes'])) { $data['delete_yes'] = null; }
if (! isset($data['save_new'])) { $data['save_new'] = null; }
if (! isset($data['save_edit'])) { $data['save_edit'] = null; }
if (! isset($data['edit'])) { $data['edit'] = null; }
if (! isset($data['new'])) { $data['new'] = null; }
if (! isset($data['start'])) { $data['start'] = null; }
if (! isset($data['indent'])) { $data['indent'] = ''; }
if (! isset($data['in_indent'])) { $data['in_indent'] = false; }
if (! isset($data['enablePluginACL'])) { $data['enablePluginACL'] = null; }

echo serendipity_smarty_show('admin/groups.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
?>
