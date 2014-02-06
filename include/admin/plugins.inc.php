<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

if (!serendipity_checkPermission('adminPlugins')) {
    return;
}

include_once S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php';
include_once S9Y_INCLUDE_PATH . 'include/plugin_internal.inc.php';
include_once S9Y_INCLUDE_PATH . 'include/functions_entries_admin.inc.php';
include_once S9Y_INCLUDE_PATH . 'include/functions_plugins_admin.inc.php';

if (isset($_GET['serendipity']['plugin_to_move']) && isset($_GET['submit']) && serendipity_checkFormToken()) {
    if (isset($_GET['serendipity']['event_plugin'])) {
        $plugins = serendipity_plugin_api::enum_plugins('event', false);
    } else {
        $plugins = serendipity_plugin_api::enum_plugins('event', true);
    }

    /* Renumber the sort order to be certain that one actually exists
        Also look for the one we're going to move */
    $idx_to_move = -1;
    for($idx = 0; $idx < count($plugins); $idx++) {
        $plugins[$idx]['sort_order'] = $idx;

        if ($plugins[$idx]['name'] == $_GET['serendipity']['plugin_to_move']) {
            $idx_to_move = $idx;
        }
    }

    /* If idx_to_move is still -1 then we never found it (shouldn't happen under normal conditions)
        Also make sure the swaping idx is around */
    if ($idx_to_move >= 0 && (($_GET['submit'] == 'move down' && $idx_to_move < (count($plugins)-1)) || ($_GET['submit'] == 'move up' && $idx_to_move > 0))) {

        /* Swap the one were moving with the one that's in the spot we're moving to */
        $tmp = $plugins[$idx_to_move]['sort_order'];

        $plugins[$idx_to_move]['sort_order'] = (int)$plugins[$idx_to_move + ($_GET['submit'] == 'move down' ? 1 : -1)]['sort_order'];
        $plugins[$idx_to_move + ($_GET['submit'] == 'move down' ? 1 : -1)]['sort_order'] = (int)$tmp;

        /* Update table */
        foreach($plugins as $plugin) {
            $key = serendipity_db_escape_string($plugin['name']);
            serendipity_db_query("UPDATE {$serendipity['dbPrefix']}plugins SET sort_order = {$plugin['sort_order']} WHERE name='$key'");
        }
    }

    /* TODO: Moving The first Right oriented plugin up,
            or the last left oriented plugin down
            should not be displayed to the user as an option.
            It's a behavior which really has no meaning. */
}

if (isset($_GET['serendipity']['plugin_to_conf'])) {
    /* configure a specific instance */
    $plugin =& serendipity_plugin_api::load_plugin($_GET['serendipity']['plugin_to_conf']);

    if (!($plugin->protected === FALSE || $plugin->serendipity_owner == '0' || $plugin->serendipity_owner == $serendipity['authorid'] || serendipity_checkPermission('adminPluginsMaintainOthers'))) {
        return;
    }

    $bag  = new serendipity_property_bag;
    $plugin->introspect($bag);

    if (method_exists($plugin, 'performConfig')) {
        $plugin->performConfig($bag);
    }

    $name = htmlspecialchars($bag->get('name'));
    $desc = htmlspecialchars($bag->get('description'));
    $license = htmlspecialchars($bag->get('license'));

    $documentation = $bag->get('website');

    $config_names = $bag->get('configuration');
    $config_groups = $bag->get('config_groups');

    if (isset($_POST['SAVECONF']) && serendipity_checkFormToken()) {
        /* enum properties and set their values */

        $save_errors = array();
        foreach ($config_names as $config_item) {
            $cbag = new serendipity_property_bag;
            if ($plugin->introspect_config_item($config_item, $cbag)) {
                $value    = $_POST['serendipity']['plugin'][$config_item];

                $validate = $plugin->validate($config_item, $cbag, $value);

                if ($validate === true) {
//                    echo $config_item . " validated: $validate<br />\n";

                    if (!empty($_POST['serendipity']['plugin']['override'][$config_item])) {
                        $value = $_POST['serendipity']['plugin']['override'][$config_item];
                    }

                    if (is_array($_POST['serendipity']['plugin']['activate'][$config_item])) {
                        $values = explode(',', $value);
                        $out_values = array();
                        foreach($values AS $out_value) {
                            if (!isset($_POST['serendipity']['plugin']['activate'][$config_item][$out_value])) {
                                continue;
                            }

                            $out_values[] = $out_value;
                        }
                        $value = implode(',', $out_values);
                    }

                    $plugin->set_config($config_item, $value);
                } else {
                    $save_errors[] = $validate;
                }
            }
        }

        $plugin->cleanup();
    }
?>

<?php if ( isset($save_errors) && is_array($save_errors) && count($save_errors) > 0 ) { ?>
    <div class="serendipityAdminMsgError">
    <img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_error.png'); ?>" alt="" />
    <?php
    echo ERROR . ":<br />\n";
    echo "<ul>\n";
    foreach($save_errors AS $save_error) {
        echo '<li>' . $save_error . "</li>\n";
    }
    echo "</ul>\n";
    ?>
    </div>
<?php } elseif ( isset($_POST['SAVECONF'])) { ?>
    <div class="serendipityAdminMsgSuccess"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_success.png'); ?>" alt="" /><?php echo DONE .': '. sprintf(SETTINGS_SAVED_AT, serendipity_strftime('%H:%M:%S')); ?></div>
<?php } ?>

<form method="post" name="serendipityPluginConfigure">
    <?php echo serendipity_setFormToken(); ?>
    <table cellpadding="5" style="border: 1px dashed" width="90%" align="center">
        <tr>
            <th width="100"><?php echo NAME; ?></th>
            <td><?php echo $name; ?> (<em><?php echo get_class($plugin); ?></em>)</td>
        </tr>

        <tr>
            <th style="vertical-align: top"><?php echo DESCRIPTION; ?></th>
            <td>
            <?php
                echo $desc;
                if (!empty($documentation)) {
                    echo '<br /><a href="' . htmlspecialchars($documentation) . '">' . PLUGIN_DOCUMENTATION . '</a>';
                }

                if (@file_exists(dirname($plugin->pluginFile) . '/ChangeLog')) {
                    echo '<br /><a href="plugins/' . $plugin->act_pluginPath . '/ChangeLog">' . PLUGIN_DOCUMENTATION_CHANGELOG . '</a>';
                }

                if (@file_exists(dirname($plugin->pluginFile) . '/documentation_' . $serendipity['lang'] . '.html')) {
                    echo '<br /><a href="plugins/' . $plugin->act_pluginPath . '/documentation_' . $serendipity['lang'] . '.html">' . PLUGIN_DOCUMENTATION_LOCAL . '</a>';
                } elseif (@file_exists(dirname($plugin->pluginFile) . '/documentation_en.html')) {
                    echo '<br /><a href="plugins/' . $plugin->act_pluginPath . '/documentation_en.html">' . PLUGIN_DOCUMENTATION_LOCAL . '</a>';
                } elseif (@file_exists(dirname($plugin->pluginFile) . '/documentation.html')) {
                    echo '<br /><a href="plugins/' . $plugin->act_pluginPath . '/documentation.html">' . PLUGIN_DOCUMENTATION_LOCAL . '</a>';
                } elseif (@file_exists(dirname($plugin->pluginFile) . '/README')) {
                    echo '<br /><a href="plugins/' . $plugin->act_pluginPath . '/README">' . PLUGIN_DOCUMENTATION_LOCAL . '</a>';
                }
            ?>
            </td>
        </tr>
         <?php
            if (!empty($license)) {
                echo '<tr><th>'.MEDIA_PROPERTY_COPYRIGHT.'</th><td>'.$license.'</td></tr>';
            }
        ?>
    </table>
<br />

<?php serendipity_plugin_config($plugin, $bag, $name, $desc, $config_names, true, true, true, true, 'plugin', $config_groups); ?>
</form>
<?php

} elseif ( $serendipity['GET']['adminAction'] == 'addnew' ) {
?>
<?php if ( $serendipity['GET']['type'] == 'event' ) { ?>
    <h2><?php echo EVENT_PLUGINS ?></h2>
<?php } else { ?>
    <h2><?php echo SIDEBAR_PLUGINS ?></h2>
<?php } ?>
<br />
<?php
    $foreignPlugins = $pluginstack = $errorstack = array();
    serendipity_plugin_api::hook_event('backend_plugins_fetchlist', $foreignPlugins);
    $pluginstack = array_merge((array)$foreignPlugins['pluginstack'], $pluginstack);
    $errorstack  = array_merge((array)$foreignPlugins['errorstack'], $errorstack);

    $plugins = serendipity_plugin_api::get_installed_plugins();
    $classes = serendipity_plugin_api::enum_plugin_classes(($serendipity['GET']['type'] === 'event'));
    usort($classes, 'serendipity_pluginListSort');

    $counter    = 0;
    foreach ($classes as $class_data) {
        $pluginFile =  serendipity_plugin_api::probePlugin($class_data['name'], $class_data['classname'], $class_data['pluginPath']);
        $plugin     =& serendipity_plugin_api::getPluginInfo($pluginFile, $class_data, $serendipity['GET']['type']);

        if (is_object($plugin)) {
            // Object is returned when a plugin could not be cached.
            $bag = new serendipity_property_bag;
            $plugin->introspect($bag);

            // If a foreign plugin is upgradable, keep the new version number.
            if (isset($foreignPlugins['pluginstack'][$class_data['name']]) && $foreignPlugins['pluginstack'][$class_data['name']]['upgradable']) {
                $class_data['upgrade_version'] = $foreignPlugins['pluginstack'][$class_data['name']]['upgrade_version'];
            }

            $props = serendipity_plugin_api::setPluginInfo($plugin, $pluginFile, $bag, $class_data, 'local', $foreignPlugins);

            $counter++;
        } elseif (is_array($plugin)) {
            // Array is returned if a plugin could be fetched from info cache
            $props = $plugin;
        } else {
            $props = false;
        }

        if (is_array($props)) {
            if (version_compare($props['version'], $props['upgrade_version'], '<')) {
                $props['upgradable']      = true;
                $props['customURI']      .= $foreignPlugins['baseURI'] . $foreignPlugins['upgradeURI'];
            }

            $props['installable']  = !($props['stackable'] === false && in_array($class_data['true_name'], $plugins));
            $props['requirements'] = unserialize($props['requirements']);

            if (empty($props['changelog']) && @file_exists(dirname($plugin->pluginFile) . '/ChangeLog')) {
                $props['changelog'] = 'plugins/' . $props['pluginPath'] . '/ChangeLog';
            }

            if (empty($props['local_documentation'])) {
                if (@file_exists(dirname($props['plugin_file']) . '/documentation_' . $serendipity['lang'] . '.html')) {
                    $props['local_documentation'] = 'plugins/' . $props['pluginPath'] . '/documentation_' . $serendipity['lang'] . '.html';
                } elseif (@file_exists(dirname($props['plugin_file']) . '/documentation_en.html')) {
                    $props['local_documentation'] = 'plugins/' . $props['pluginPath'] . '/documentation_en.html';
                } elseif (@file_exists(dirname($props['plugin_file']) . '/documentation.html')) {
                    $props['local_documentation'] = 'plugins/' . $props['pluginPath'] . '/documentation.html';
                } elseif (@file_exists(dirname($props['plugin_file']) . '/README')) {
                    $props['local_documentation'] = 'plugins/' . $props['pluginPath'] . '/README';
                }
            }

            $pluginstack[$class_data['true_name']] = $props;
        } else {
            // False is returned if a plugin could not be instantiated
            $errorstack[] = $class_data['true_name'];
        }
    }

    usort($pluginstack, 'serendipity_pluginListSort');
    $pluggroups     = array();
    $pluggroups[''] = array();
    foreach($pluginstack AS $plugname => $plugdata) {
        if ($serendipity['GET']['only_group'] == 'ALL') {
            $pluggroups['ALL'][] = $plugdata;
        } elseif ($serendipity['GET']['only_group'] == 'UPGRADE' && $plugdata['upgradable']) {
            $pluggroups['UPGRADE'][] = $plugdata;
        } elseif (is_array($plugdata['groups'])) {
            foreach($plugdata['groups'] AS $group) {
                $pluggroups[$group][] = $plugdata;
            }
        } else {
            $pluggroups[''][] = $plugdata;
        }
    }
    ksort($pluggroups);

    foreach($errorstack as $e_idx => $e_name) {
        echo ERROR . ': ' . $e_name . '<br />';
    }

    if ($serendipity['GET']['only_group'] == 'UPGRADE') {
        serendipity_plugin_api::hook_event('backend_pluginlisting_header_upgrade', $pluggroups);
    }
?>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<?php
    $available_groups = array_keys($pluggroups);
    foreach($pluggroups AS $pluggroup => $groupstack) {
        if (empty($pluggroup)) {
        ?>
    <tr>
        <td colspan="2" class="serendipity_pluginlist_header">
            <form action="serendipity_admin.php" method="get">
                <?php echo serendipity_setFormToken(); ?>
                <input type="hidden" name="serendipity[adminModule]" value="plugins" />
                <input type="hidden" name="serendipity[adminAction]" value="addnew" />
                <input type="hidden" name="serendipity[type]" value="<?php echo htmlspecialchars($serendipity['GET']['type']); ?>" />
                <?php echo FILTERS; ?>: <select name="serendipity[only_group]">
            <?php foreach((array)$available_groups AS $available_group) {
                    ?>
                    <option value="<?php echo $available_group; ?>" <?php echo ($serendipity['GET']['only_group'] == $available_group ? 'selected="selected"' : ''); ?>><?php echo serendipity_groupname($available_group); ?>
            <?php } ?>
                    <option value="ALL" <?php echo ($serendipity['GET']['only_group'] == 'ALL' ? 'selected="selected"' : ''); ?>><?php echo ALL_CATEGORIES; ?>
                    <option value="UPGRADE" <?php echo ($serendipity['GET']['only_group'] == 'UPGRADE' ? 'selected="selected"' : ''); ?>><?php echo WORD_NEW; ?>
                </select>
                <input class="serendipityPrettyButton input_button" type="submit" value="<?php echo GO; ?>" />
            </form>
        </td>
    </tr>
        <?php
            if (!empty($serendipity['GET']['only_group'])) {
                continue;
            }
        } elseif (!empty($serendipity['GET']['only_group']) && $pluggroup != $serendipity['GET']['only_group']) {
            continue;
        } else {
        ?>
    <tr>
        <td colspan="2" class="serendipity_pluginlist_section"><strong><?php echo serendipity_groupname($pluggroup); ?></strong></td>
    </tr>
        <?php
        }
?>
    <tr>
        <td><strong>Plugin</strong></td>
        <td width="100" align="center"><strong>Action</strong></td>
    </tr>
<?php
        foreach ($groupstack as $plug) {
            $jsLine = " onmouseout=\"document.getElementById('serendipity_plugin_". $plug['class_name'] ."').className='';\"";
            $jsLine .= " onmouseover=\"document.getElementById('serendipity_plugin_". $plug['class_name'] ."').className='serendipity_PluginAdminHighlight';\"";

            $pluginInfo = $notice = array();

            if (!empty($plug['author'])) {
                $pluginInfo[] = AUTHOR  . ': ' . $plug['author'];
            }

            if (!empty($plug['version'])) {
                $pluginInfo[] = VERSION  . ': ' . $plug['version'];
            }

            if (!empty($plug['website'])) {
                $pluginInfo[] = '<a href="' . htmlspecialchars($plug['website']) . '">' . PLUGIN_DOCUMENTATION . '</a>';
            }

            if (!empty($plug['local_documentation'])) {
                $pluginInfo[] = '<a href="' . htmlspecialchars($plug['local_documentation']) . '">' . PLUGIN_DOCUMENTATION_LOCAL . '</a>';
            }

            if (!empty($plug['changelog'])) {
                $pluginInfo[] = '<a href="' . htmlspecialchars($plug['changelog']) . '">' . PLUGIN_DOCUMENTATION_CHANGELOG . '</a>';
            }

            if (!empty($plug['upgrade_version']) && $plug['upgrade_version'] != $plug['version']) {
                $pluginInfo[] = sprintf(UPGRADE_TO_VERSION, $plug['upgrade_version']);
            }

            if (!empty($plug['pluginlocation']) && $plug['pluginlocation'] != 'local') {
                $pluginInfo[] = '(' . htmlspecialchars($plug['pluginlocation']) . ')';
                $installimage = serendipity_getTemplateFile('admin/img/install_now_' . strtolower($plug['pluginlocation']) . '.png');
            } else {
                $installimage = serendipity_getTemplateFile('admin/img/install_now.png');
            }

            if (!isset($plug['customURI'])) {
                $plug['customURI'] = '';
            }

            if ( !empty($plug['requirements']['serendipity']) && version_compare($plug['requirements']['serendipity'], serendipity_getCoreVersion($serendipity['version']), '>') ) {
                $notice['requirements_failures'][] = 's9y ' . $plug['requirements']['serendipity'];
            }

            if ( !empty($plug['requirements']['php']) && version_compare($plug['requirements']['php'], phpversion(), '>') ) {
                $notice['requirements_failures'][] = 'PHP ' . $plug['requirements']['php'];
            }

            /* Enable after Smarty 2.6.7 upgrade.
             * TODO: How can we get current Smarty version here? $smarty is not created!
            if ( !empty($plug['requirements']['smarty']) && version_compare($plug['requirements']['smarty'], '2.6.7', '>') ) {
                $notice['requirements_failures'][] = 'Smarty: ' . $plug['requirements']['smarty'];
            }
            */

            if (count($notice['requirements_failures']) > 0) {
                $plug['requirements_fail'] = true;
            }

?>
    <tr id="serendipity_plugin_<?php echo $plug['class_name']; ?>">
        <td colspan="2" <?php echo $jsLine ?>>
            <table width="100%" cellpadding="3" cellspacing="0" border="0">
                <tr>
                    <td><strong><?php echo $plug['name'] ?></strong></td>
                    <td width="100" align="center" valign="middle" rowspan="3">
                        <?php if ( $plug['requirements_fail'] == true ) { ?>
                            <span style="color: #cccccc"><?php printf(UNMET_REQUIREMENTS, implode(', ', $notice['requirements_failures'])); ?></span>
                        <?php } elseif ( $plug['upgradable'] == true ) { ?>
                            <a href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]=<?php echo $plug['pluginPath']; ?>&amp;serendipity[install_plugin]=<?php echo $plug['plugin_class'] . $plug['customURI'] ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/upgrade_now.png') ?>" title="<?php echo UPGRADE ?>" alt="<?php echo UPGRADE ?>" border="0" /></a>
                        <?php } elseif ($plug['installable'] == true) { ?>
                            <a href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]=<?php echo $plug['pluginPath']; ?>&amp;serendipity[install_plugin]=<?php echo $plug['plugin_class'] . $plug['customURI'] ?>"><img src="<?php echo $installimage ?>" title="<?php echo INSTALL ?>" alt="<?php echo INSTALL ?>" border="0" /></a>
                        <?php } else { ?>
                            <span style="color: #cccccc"><?php echo ALREADY_INSTALLED ?></span>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 10px"><?php echo $plug['description'] ?></td>
                </tr>
<?php       if (count($pluginInfo) > 0) { ?>
                <tr>
                    <td style="padding-left: 10px; font-size: x-small">(<?php echo $plug['class_name']; ?>) <?php echo implode('; ', $pluginInfo); ?></td>
                </tr>
<?php       } ?>
            </table>
        </td>
    </tr>
<?php
        }
    }
?>
    <tr>
        <td colspan="2" align="right"><?php printf(PLUGIN_AVAILABLE_COUNT, count($pluginstack)); ?></td>
    </tr>
</table>

<?php
} else {
    /* show general plugin list */

    /* get sidebar locations */
    serendipity_smarty_init();

    if (is_array($template_config)) {
        $template_vars =& serendipity_loadThemeOptions($template_config);
    }

    $col_assoc = array(
        'event_col'  => 'event',
        'eventh_col' => 'eventh'
    );
    if (isset($template_vars['sidebars'])) {
        $sidebars = explode(',', $template_vars['sidebars']);
    } elseif (isset($serendipity['sidebars'])) {
        $sidebars = $serendipity['sidebars'];
    } else {
        $sidebars = array('left', 'hide', 'right');
    }

    foreach($sidebars AS $sidebar) {
        $col_assoc[$sidebar . '_col'] = $sidebar;
    }

    /* preparse Javascript-generated input */
    if (isset($_POST['SAVE']) && !empty($_POST['serendipity']['pluginorder'])) {
        $parts = explode(':', $_POST['serendipity']['pluginorder']);

        foreach($parts AS $sidepart) {
            preg_match('@^(.+)\((.*)\)$@imsU', $sidepart, $matches);
            if (!isset($col_assoc[$matches[1]])) {
                continue;
            }
            $pluginsidelist = explode(',', $matches[2]);
            foreach($pluginsidelist AS $pluginname) {
                $pluginname = trim(urldecode(str_replace(array('s9ycid', '-'), array('', '%'), $pluginname)));

                if (empty($pluginname)) {
                    continue;
                }
                $serendipity['POST']['placement'][$pluginname] = $col_assoc[$matches[1]];
                $new_order[] = $pluginname;

            }
        }

        if (is_array($new_order)) {
            foreach($new_order AS $new_order_pos => $order_plugin) {
                serendipity_db_query("UPDATE {$serendipity['dbPrefix']}plugins SET sort_order = ". (int)$new_order_pos . " WHERE name='" . serendipity_db_escape_string($order_plugin) . "'");
            }
        }
    }

    if (isset($_POST['SAVE']) && isset($_POST['serendipity']['placement']) && serendipity_checkFormToken()) {
        foreach ($_POST['serendipity']['placement'] as $plugin_name => $placement) {
            serendipity_plugin_api::update_plugin_placement(
                addslashes($plugin_name),
                addslashes($placement)
            );

            serendipity_plugin_api::update_plugin_owner(
                addslashes($plugin_name),
                addslashes($_POST['serendipity']['ownership'][$plugin_name])
            );
        }
    }

    if (isset($serendipity['GET']['install_plugin'])) {
        $authorid = $serendipity['authorid'];
        if (serendipity_checkPermission('adminPluginsMaintainOthers')) {
            $authorid = '0';
        }

        $fetchplugin_data = array('GET'     => &$serendipity['GET'],
                                  'install' => true);
        serendipity_plugin_api::hook_event('backend_plugins_fetchplugin', $fetchplugin_data);

        if ($fetchplugin_data['install']) {
            $serendipity['debug']['pluginload'] = array();
            $inst = serendipity_plugin_api::create_plugin_instance($serendipity['GET']['install_plugin'], null, (serendipity_plugin_api::is_event_plugin($serendipity['GET']['install_plugin']) ? 'event': 'right'), $authorid, serendipity_db_escape_string($serendipity['GET']['pluginPath']));

            /* Load the new plugin */
            $plugin = &serendipity_plugin_api::load_plugin($inst);
            if (!is_object($plugin)) {
                echo "DEBUG: Plugin " . htmlspecialchars($inst) . " not an object: " . htmlspecialchars(print_r($plugin, true)) 
                     . ".<br />Input: " . htmlspecialchars(print_r($serendipity['GET'], true)) . ".<br /><br />\n\nThis error 
                     can happen if a plugin was not properly downloaded (check your plugins directory if the requested plugin 
                     was downloaded) or the inclusion of a file failed (permissions?)<br />\n";
                echo "Backtrace:<br />\n" . nl2br(htmlspecialchars(implode("\n", $serendipity['debug']['pluginload']))) . "<br />";
            }
            $bag  = new serendipity_property_bag;
            $plugin->introspect($bag);

            serendipity_plugin_api::hook_event('backend_plugins_install', $serendipity['GET']['install_plugin'], $fetchplugin_data);

            if ($bag->is_set('configuration')) {
                /* Only play with the plugin if there is something to play with */
                echo '<script type="text/javascript">location.href = \'' . $serendipity['baseURL'] . 'serendipity_admin.php?serendipity[adminModule]=plugins&serendipity[plugin_to_conf]=' . $inst . '\';</script>';
                die();
            } else {
                /* If no config is available, redirect to plugin overview, because we do not want that a user can install the plugin a second time via accidental browser refresh */
                echo '<script type="text/javascript">location.href = \'' . $serendipity['baseURL'] . 'serendipity_admin.php?serendipity[adminModule]=plugins\';</script>';
                die();
            }
        } else {
            serendipity_plugin_api::hook_event('backend_plugins_update', $serendipity['GET']['install_plugin'], $fetchplugin_data);
        }
    }

    if (isset($_POST['REMOVE']) && serendipity_checkFormToken()) {
        if (is_array($_POST['serendipity']['plugin_to_remove'])) {
            foreach ($_POST['serendipity']['plugin_to_remove'] as $key) {
                $plugin =& serendipity_plugin_api::load_plugin($key);

                if ($plugin->serendipity_owner == '0' || $plugin->serendipity_owner == $serendipity['authorid'] || serendipity_checkPermission('adminPluginsMaintainOthers')) {
                    serendipity_plugin_api::remove_plugin_instance($key);
                }
            }
        }
    }
?>

<?php if (isset($_POST['SAVE'])) { ?>
    <div class="serendipityAdminMsgSuccess"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_success.png'); ?>" alt="" /><?php echo DONE .': '. sprintf(SETTINGS_SAVED_AT, serendipity_strftime('%H:%M:%S')); ?></div>
<?php } ?>

    <div><?php echo BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS ?></div>
<?php
    if (!isset($serendipity['eyecandy']) || serendipity_db_bool($serendipity['eyecandy'])) {
        echo '<script src="' . serendipity_getTemplateFile('dragdrop.js') . '" type="text/javascript"></script>';
        echo '<div class="warning js_warning"><em>' . PREFERENCE_USE_JS_WARNING . '</em></div>';
    }

    serendipity_plugin_api::hook_event('backend_pluginlisting_header', $serendipity['eyecandy']);
?>
    <br />

    <h3><?php echo SIDEBAR_PLUGINS ?></h3>
    <a href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/install.png') ?>" style="border: 0px none ; vertical-align: middle; display: inline;" alt="" /><?php echo sprintf(CLICK_HERE_TO_INSTALL_PLUGIN, SIDEBAR_PLUGIN) ?></a>
    <?php serendipity_plugin_api::hook_event('backend_plugins_sidebar_header', $serendipity); ?>
    <?php show_plugins(false, $sidebars); ?>

    <br />
    <br />

    <h3><?php echo EVENT_PLUGINS ?></h3>
    <a href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew&amp;serendipity[type]=event" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/install.png') ?>" style="border: 0px none ; vertical-align: middle; display: inline;" alt="" /><?php echo sprintf(CLICK_HERE_TO_INSTALL_PLUGIN, EVENT_PLUGIN) ?></a>
    <?php serendipity_plugin_api::hook_event('backend_plugins_event_header', $serendipity); ?>
    <?php show_plugins(true); ?>

    <?php if (count($serendipity['memSnaps']) > 0) { ?>
    <h3>Memory Usage</h3>
    <div>
        <pre><?php print_r($serendipity['memSnaps']); ?></pre>
    </div>
    <?php } ?>
<?php
}
/* vim: set sts=4 ts=4 expandtab : */
