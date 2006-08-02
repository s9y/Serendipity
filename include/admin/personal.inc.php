<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('personalConfiguration')) {
    return;
}

$from = array();

if ($serendipity['GET']['adminAction'] == 'save' && serendipity_checkFormToken()) {
    $config = serendipity_parseTemplate(S9Y_CONFIG_USERTEMPLATE);
    if ( (!serendipity_checkPermission('adminUsersEditUserlevel') || !serendipity_checkPermission('adminUsersMaintainOthers') )
          && (int)$_POST['userlevel'] > $serendipity['serendipityUserlevel']) {
        echo '<div class="serendipityAdminMsgError">' . CREATE_NOT_AUTHORIZED_USERLEVEL . '</div>';
    } elseif (empty($_POST['username'])) {
        echo '<div class="serendipityAdminMsgError">' . USERCONF_CHECK_USERNAME_ERROR . '</div>';
    } elseif (!empty($_POST['password']) && $_POST['check_password'] != $_SESSION['serendipityPassword'] && md5($_POST['check_password']) != $_SESSION['serendipityPassword']) {
        echo '<div class="serendipityAdminMsgError">' . USERCONF_CHECK_PASSWORD_ERROR . '</div>';
    } else {
        $valid_groups = serendipity_getGroups($serendipity['authorid'], true);

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
                        echo '<div class="serendipityAdminMsgError">' . WARNING_NO_GROUPS_SELECTED . '</div>';
                    } else {
                        serendipity_updateGroups($_POST[$item['var']], $serendipity['authorid'], false);
                    }
                    continue;
                }

                if (serendipity_checkConfigItemFlags($item, 'local')) {
                    serendipity_set_user_var($item['var'], $_POST[$item['var']], $serendipity['authorid'], true);
                }

                if (serendipity_checkConfigItemFlags($item, 'configuration')) {
                    serendipity_set_config_var($item['var'], $_POST[$item['var']], $serendipity['authorid']);
                }
            }

            $pl_data = array(
                'id'       => $serendipity['POST']['authorid'],
                'authorid' => $serendipity['POST']['authorid'],
                'username' => $_POST['username'],
                'realname' => $_POST['realname'],
                'email'    => $_POST['email']
            );
            serendipity_updatePermalink($pl_data, 'author');
            serendipity_plugin_api::hook_event('backend_users_edit', $pl_data);
        }
        $from = $_POST;
?>
    <div class="serendipityAdminMsgSuccess"><?php echo sprintf(MODIFIED_USER, $_POST['realname']) ?></div>
<?php }
} ?>

<form action="?serendipity[adminModule]=personal&amp;serendipity[adminAction]=save" method="post">
<?php
echo serendipity_setFormToken();
$template       = serendipity_parseTemplate(S9Y_CONFIG_USERTEMPLATE);
$user           = serendipity_fetchUsers($serendipity['authorid']);
$from           = $user[0];
$from['groups'] = serendipity_getGroups($serendipity['authorid']);
unset($from['password']);
serendipity_printConfigTemplate($template, $from, true, false);
?>
    <div align="right"><input type="submit" name="SAVE"   value="<?php echo SAVE; ?>" /></div>
</form>

<?php

$add = array('internal' => true);
serendipity_plugin_api::hook_event('backend_sidebar_entries_event_display_profiles', $from, $add);
/* vim: set sts=4 ts=4 expandtab : */
