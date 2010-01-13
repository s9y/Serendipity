<?php # $Id: users.inc.php 114 2005-05-22 15:37:11Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

if (!serendipity_checkPermission('adminUsersGroups')) {
    return;
}

/* Delete a group */
if (isset($_POST['DELETE_YES']) && serendipity_checkFormToken()) {
    $group = serendipity_fetchGroup($serendipity['POST']['group']);
    serendipity_deleteGroup($serendipity['POST']['group']);
    printf('<div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_success.png') . '" alt="" />' . DELETED_GROUP . '</div>', htmlspecialchars($serendipity['POST']['group']), htmlspecialchars($group['name']));
}

/* Save new group */
if (isset($_POST['SAVE_NEW']) && serendipity_checkFormToken()) {
    $serendipity['POST']['group'] = serendipity_addGroup($serendipity['POST']['name']);
    $perms = serendipity_getAllPermissionNames();
    serendipity_updateGroupConfig($serendipity['POST']['group'], $perms, $serendipity['POST'], false, $serendipity['POST']['forbidden_plugins'], $serendipity['POST']['forbidden_hooks']);
    printf('<div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_success.png') . '" alt="" />' . CREATED_GROUP . '</div>', '#' . htmlspecialchars($serendipity['POST']['group']) . ', ' . htmlspecialchars($serendipity['POST']['name']));
}


/* Edit a group */
if (isset($_POST['SAVE_EDIT']) && serendipity_checkFormToken()) {
    $perms = serendipity_getAllPermissionNames();
    serendipity_updateGroupConfig($serendipity['POST']['group'], $perms, $serendipity['POST'], false, $serendipity['POST']['forbidden_plugins'], $serendipity['POST']['forbidden_hooks']);
    printf('<div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_success.png') . '" alt="" />' . MODIFIED_GROUP . '</div>', htmlspecialchars($serendipity['POST']['name']));
}

if ( $serendipity['GET']['adminAction'] != 'delete' ) {
?>
    <table width="100%">
        <tr>
            <td><strong><?php echo GROUP; ?></strong></td>
            <td width="200">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">
<?php
if (serendipity_checkPermission('adminUsersMaintainOthers')) {
    $groups = serendipity_getAllGroups();
} elseif (serendipity_checkPermission('adminUsersMaintainSame')) {
    $groups = serendipity_getAllGroups($serendipity['authorid']);
} else {
    $groups = array();
}
$i = 0;
foreach($groups as $group) {
?>
<div class="serendipity_admin_list_item serendipity_admin_list_item_<?php echo ($i++ % 2) ? 'even' : 'uneven' ?>">
<table width="100%">
    <tr>
        <td><?php echo htmlspecialchars($group['name']); ?></td>
        <td width="200" align="right"> <a href="?serendipity[adminModule]=groups&amp;serendipity[adminAction]=edit&amp;serendipity[group]=<?php echo $group['id'] ?>" title="<?php echo EDIT . " " . htmlspecialchars($group['name']); ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/edit.png'); ?>" alt="<?php echo EDIT . " " . htmlspecialchars($group['name']); ?>" /><?php echo EDIT ?></a>
                                       <a href="?<?php echo serendipity_setFormToken('url'); ?>&amp;serendipity[adminModule]=groups&amp;serendipity[adminAction]=delete&amp;serendipity[group]=<?php echo $group['id'] ?>" title="<?php echo DELETE . " " . htmlspecialchars($group['name']); ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/delete.png'); ?>" alt="<?php echo DELETE . " " . htmlspecialchars($group['name']); ?>" /><?php echo DELETE ?></a></td>
    </tr>
</table>
</div>
<?php
    }
?>
            </td>
        </tr>
<?php if ( !isset($_POST['NEW']) ) { ?>
        <tr>
            <td colspan="3" align="right">
                <form action="?serendipity[adminModule]=groups" method="post">
                    <input type="submit" name="NEW"   value="<?php echo CREATE_NEW_GROUP; ?>" class="serendipityPrettyButton input_button" />
                </form>
            </td>
        </tr>
<?php } ?>
    </table>

<?php
}


if ($serendipity['GET']['adminAction'] == 'edit' || isset($_POST['NEW'])) {
?>
<br />
<br />
<hr noshade="noshade">
<form action="?serendipity[adminModule]=groups" method="post">
<?php echo serendipity_setFormToken(); ?>
    <div>
    <h3>
<?php
if ($serendipity['GET']['adminAction'] == 'edit') {
    $group = serendipity_fetchGroup($serendipity['GET']['group']);
    echo EDIT;
    $from = &$group;
    echo '<input type="hidden" name="serendipity[group]" value="' . $from['id'] . '" />';
} else {
    echo CREATE;
    $from = array();
}
?>
    </h3>
<table>
    <tr>
        <td><?php echo NAME; ?></td>
        <td><input class="input_textbox" type="text" name="serendipity[name]" value="<?php echo htmlspecialchars($from['name']); ?>" /></td>
    </tr>
    <tr>
        <td valign="top"><?php echo USERCONF_GROUPS; ?></td>
        <td><select name="serendipity[members][]" multiple="multiple" size="5">
<?php
$allusers = serendipity_fetchUsers();
$users    = serendipity_getGroupUsers($from['id']);

$selected = array();
foreach((array)$users AS $user) {
    $selected[$user['id']] = true;
}

foreach($allusers AS $user) {
    echo '<option value="' . (int)$user['authorid'] . '" ' . (isset($selected[$user['authorid']]) ? 'selected="selected"' : '') . '>' . htmlspecialchars($user['realname']) . '</option>' . "\n";
}
?>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
<?php
    $perms = serendipity_getAllPermissionNames();
    ksort($perms);
    foreach($perms AS $perm => $userlevels) {
        if (substr($perm, 0, 2) == 'f_') {
            continue;
        }

        if (isset($from[$perm]) && $from[$perm] === 'true') {
            $selected = 'checked="checked"';
        } else {
            $selected = '';
        }

        if (!isset($section)) {
            $section = $perm;
        }

        if ($section != $perm && substr($perm, 0, strlen($section)) == $section) {
            $indent  = '&nbsp;&nbsp;';
            $indentB = '';
        } elseif ($section != $perm) {
            $indent  = '<br />';
            $indentB = '<br />';
            $section = $perm;
        }

        if (defined('PERMISSION_' . strtoupper($perm))) {
            $permname = constant('PERMISSION_' . strtoupper($perm));
        } else {
            $permname = $perm;
        }

        if (!serendipity_checkPermission($perm) && $perm != 'hiddenGroup') {
            echo "<tr>\n";
            echo "<td>$indent" . htmlspecialchars($permname) . "</td>\n";
            echo '<td>' . $indentB . ' ' . (!empty($selected) ? YES : NO) . '</td>' . "\n";
            echo "</tr>\n";
        } else {
            echo "<tr>\n";
            echo "<td>$indent<label for=\"" . htmlspecialchars($perm) . "\">" . htmlspecialchars($permname) . "</label></td>\n";
            echo '<td>' . $indentB . '<input class="input_checkbox" id="' . htmlspecialchars($perm) . '" type="checkbox" name="serendipity[' . htmlspecialchars($perm) . ']" value="true" ' . $selected . ' /></td>' . "\n";
            echo "</tr>\n";
        }
    }

    if ($serendipity['enablePluginACL']) {
        $allplugins =& serendipity_plugin_api::get_event_plugins();
        $allhooks   = array();
?>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td valign="top"><?php echo PERMISSION_FORBIDDEN_PLUGINS; ?></td>
        <td>
            <select name="serendipity[forbidden_plugins][]" multiple="multiple" size="5">
            <?php
                foreach($allplugins AS $plugid => $currentplugin) {
                    foreach($currentplugin['b']->properties['event_hooks'] AS $hook => $set) {
                        $allhooks[$hook] = true;
                    }
                    echo '<option value="' . urlencode($plugid) . '" ' . (serendipity_hasPluginPermissions($plugid, $from['id']) ? '' : 'selected="selected"') . '>' . htmlspecialchars($currentplugin['b']->properties['name']) . '</option>' . "\n";
                }
                ksort($allhooks);
            ?>
            </select>
        </td>
    </tr>

    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td valign="top"><?php echo PERMISSION_FORBIDDEN_HOOKS; ?></td>
        <td>
            <select name="serendipity[forbidden_hooks][]" multiple="multiple" size="5">
            <?php
                foreach($allhooks AS $hook => $set) {
                    echo '<option value="' . urlencode($hook) . '" ' . (serendipity_hasPluginPermissions($hook, $from['id']) ? '' : 'selected="selected"') . '>' . htmlspecialchars($hook) . '</option>' . "\n";
                }
            ?>
            </select>
        </td>
    </tr>
<?php
    } else {
?>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="2"><?php echo PERMISSION_FORBIDDEN_ENABLE_DESC; ?></td>
    </tr>
<?php
    }
?>
</table>

<?php
if ($serendipity['GET']['adminAction'] == 'edit') { ?>
        <input type="submit" name="SAVE_EDIT"   value="<?php echo SAVE; ?>" class="serendipityPrettyButton input_button" />
        <?php echo ' - ' . WORD_OR . ' - ' ?>
        <input type="submit" name="SAVE_NEW"   value="<?php echo CREATE_NEW_GROUP; ?>" class="serendipityPrettyButton input_button" />
<?php } else { ?>
        <input type="submit" name="SAVE_NEW" value="<?php echo CREATE_NEW_GROUP; ?>" class="serendipityPrettyButton input_button" />
<?php } ?>

    </div>
</form>
<?php
} elseif ($serendipity['GET']['adminAction'] == 'delete') {
    $group = serendipity_fetchGroup($serendipity['GET']['group']);
?>
<form action="?serendipity[adminModule]=groups" method="post">
    <div>
    <?php printf(DELETE_GROUP, (int)$serendipity['GET']['group'], htmlspecialchars($group['name'])); ?>
        <br /><br />
        <?php echo serendipity_setFormToken(); ?>
        <input type="hidden" name="serendipity[group]" value="<?php echo htmlspecialchars($serendipity['GET']['group']); ?>" />
        <input type="submit" name="DELETE_YES" value="<?php echo DUMP_IT; ?>" class="serendipityPrettyButton input_button" />
        <input type="submit" name="NO" value="<?php echo NOT_REALLY; ?>" class="serendipityPrettyButton input_button" />
    </div>
</form>
<?php
}

/* vim: set sts=4 ts=4 expandtab : */
?>
