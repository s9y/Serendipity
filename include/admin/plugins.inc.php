<?php

if (IN_serendipity !== true) {
    die ('Don\'t hack!');
}

if (!serendipity_checkPermission('adminPlugins')) {
    return;
}

$data = array();

include_once S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php';
include_once S9Y_INCLUDE_PATH . 'include/functions_entries_admin.inc.php';
include_once S9Y_INCLUDE_PATH . 'include/functions_plugins_admin.inc.php';
if (!class_exists('Smarty')) {
    @define('SMARTY_DIR', S9Y_PEAR_PATH . 'smarty/smarty/libs/');
    include_once SMARTY_DIR . 'Smarty.class.php';
}

if (isset($serendipity['GET']['plugin_to_move']) && isset($serendipity['GET']['submit']) && serendipity_checkFormToken()) {

    if (isset($serendipity['GET']['event_plugin'])) {
        $plugins = serendipity_plugin_api::enum_plugins('event', false);
    } else {
        $plugins = serendipity_plugin_api::enum_plugins('event', true);
    }

    /* Renumber the sort order to be certain that one actually exists
        Also look for the one we're going to move */
    $idx_to_move = -1;
    for($idx = 0; $idx < count($plugins); $idx++) {
        $plugins[$idx]['sort_order'] = $idx;

        if ($plugins[$idx]['name'] == $serendipity['GET']['plugin_to_move']) {
            $idx_to_move = $idx;
        }
    }

    /* If idx_to_move is still -1 then we never found it (shouldn't happen under normal conditions)
        Also make sure the swapping idx is around */
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

if (isset($serendipity['GET']['plugin_to_conf'])) {

    /* configure a specific instance */
    $plugin =& serendipity_plugin_api::load_plugin($serendipity['GET']['plugin_to_conf']);

    if (!($plugin->protected === FALSE || $plugin->serendipity_owner == '0' || $plugin->serendipity_owner == $serendipity['authorid'] || serendipity_checkPermission('adminPluginsMaintainOthers'))) {
        return;
    }
    $data['plugin_to_conf'] = true;

    $bag  = new serendipity_property_bag;
    $plugin->introspect($bag);

    if (method_exists($plugin, 'performConfig')) {
        $plugin->performConfig($bag);
    }

    $name = serendipity_specialchars($bag->get('name'));
    $desc = serendipity_specialchars($bag->get('description'));
    $license = serendipity_specialchars($bag->get('license'));

    $documentation = $bag->get('website');

    $config_names = $bag->get('configuration');
    $config_groups = $bag->get('config_groups');

    if (isset($_POST['SAVECONF']) && serendipity_checkFormToken()) {
        /* enum properties and set their values */

        $save_errors = array();
        foreach ($config_names as $config_item) {
            $cbag = new serendipity_property_bag;
            if ($plugin->introspect_config_item($config_item, $cbag)) {
                $value    = $_POST['serendipity']['plugin'][$config_item] ?? null;

                $validate = $plugin->validate($config_item, $cbag, $value);
                if ($validate === true) {
                    if (!empty($_POST['serendipity']['plugin']['override'][$config_item])) {
                        $value = $_POST['serendipity']['plugin']['override'][$config_item];
                    }

                    if (is_array($_POST['serendipity']['plugin']['activate'][$config_item] ?? null)) {
                        $active_values = array();
                        foreach($_POST['serendipity']['plugin']['activate'][$config_item] as $ordered_item_value) {
                            $ordered_item_value;
                            $active_values[] = $ordered_item_value;
                        }
                        $value = implode(',', $active_values);
                    }

                    $plugin->set_config($config_item, $value);
                } else {
                    $save_errors[] = $validate;
                }
            }
        }

        $plugin->cleanup();
    }

    $data['save_errors'] = null;
    $data['saveconf'] = null;
    $data['timestamp'] = null;
    if ( isset($save_errors) && is_array($save_errors) && count($save_errors) > 0 ) {
        $data['save_errors'] = $save_errors;
    } elseif ( isset($_POST['SAVECONF'])) {
        $data['saveconf'] = true;
        $data['timestamp'] = serendipity_strftime('%H:%M:%S');
    }
    $data['formToken'] =  serendipity_setFormToken();
    $data['name'] = $name;
    $data['class'] = get_class($plugin);
    $data['desc'] = $desc;
    $data['documentation'] = $documentation;
    $data['plugin'] = $plugin;

    if (@file_exists(dirname($plugin->pluginFile) . '/ChangeLog')) {
        $data['changelog'] = true;
    }

    $data['documentation_local'] = null;
    if (@file_exists(dirname($plugin->pluginFile) . '/documentation_' . $serendipity['lang'] . '.html')) {
        $data['documentation_local'] = '/documentation_' . $serendipity['lang'] . '.html';
    } elseif (@file_exists(dirname($plugin->pluginFile) . '/documentation_en.html')) {
        $data['documentation_local'] = '/documentation_en.html';
    } elseif (@file_exists(dirname($plugin->pluginFile) . '/documentation.html')) {
         $data['documentation_local'] = '/documentation.html';
    } elseif (@file_exists(dirname($plugin->pluginFile) . '/README')) {
        $data['documentation_local'] = '/README';
    }

    $data['license'] = $license;
    $data['config'] = serendipity_plugin_config($plugin, $bag, $name, $desc, $config_names, true, true, true, true, 'plugin', $config_groups);

} elseif ( $serendipity['GET']['adminAction'] == 'addnew' && serendipity_checkFormToken()) {
    $serendipity['GET']['type'] = $serendipity['GET']['type'] ?? 'sidebar';
    $data['adminAction'] = 'addnew';
    $data['type'] = $serendipity['GET']['type'];

    # get plugin data from Spartacus
    $foreignPlugins = $pluginstack = $errorstack = array();
    serendipity_plugin_api::hook_event('backend_plugins_fetchlist', $foreignPlugins);
    $pluginstack = array_merge((array)$foreignPlugins['pluginstack'], $pluginstack);
    $errorstack  = array_merge((array)$foreignPlugins['errorstack'], $errorstack);
    if (($serendipity['GET']['only_group'] ?? null) == 'UPGRADE') {
        // for upgrades, the distinction in sidebar and event-plugins is not useful. We will fetch both and mix the lists    
        if ($serendipity['GET']['type'] == 'event') {
            $serendipity['GET']['type'] = 'sidebar';
        } else {
            $serendipity['GET']['type'] = 'event';
        }
        $foreignPluginsTemp = array();
        serendipity_plugin_api::hook_event('backend_plugins_fetchlist', $foreignPluginsTemp);
        $pluginstack = array_merge((array)$foreignPluginsTemp['pluginstack'], $pluginstack);
        $errorstack  = array_merge((array)$foreignPluginsTemp['errorstack'], $errorstack);
        $foreignPlugins = array_merge($foreignPlugins, $foreignPluginsTemp);
    }

    # load data for installed plugins
    $plugins = serendipity_plugin_api::get_installed_plugins();
    $classes = serendipity_plugin_api::enum_plugin_classes(($serendipity['GET']['type'] === 'event'));
    if (($serendipity['GET']['only_group'] ?? null) == 'UPGRADE') {
        $classes = array_merge($classes, serendipity_plugin_api::enum_plugin_classes(!($serendipity['GET']['type'] === 'event')));
        $data['type'] = 'both';
    }
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
            if (isset($foreignPlugins['pluginstack'][$class_data['name']]) && isset($foreignPlugins['pluginstack'][$class_data['name']]['upgrade_version'])) {
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
                // since we merged sidebar and event plugins before, we can no longer rely on spartacus' $foreignPlugins['baseURI']
                // NOTE: This is not nice and it would be better to move it into the plugins array instead, but that collides with the cache
                if (strpos($class_data['name'], 'serendipity_plugin') !== false) {
                    $baseURI = "&amp;serendipity[spartacus_fetch]=sidebar";
                } else {
                    $baseURI = "&amp;serendipity[spartacus_fetch]=event";
                }
                $props['customURI'] = $baseURI . $foreignPlugins['upgradeURI'];
            }

            $props['installable']  = !($props['stackable'] === false && in_array($class_data['true_name'], $plugins));
            $props['requirements'] = unserialize($props['requirements']);

            if (empty($props['changelog']) && @file_exists(dirname($props['plugin_file']) . '/ChangeLog')) {
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
        # add pluginsource to pluginstack
        if (isset($foreignPlugins['pluginstack'][$plugdata['class_name']])) {
            # remote plugin
            $plugdata['pluginsource'] = 'Spartacus';
        } elseif (serendipity_plugin_api::is_bundled_plugin($plugdata['class_name'])) {
            # bundled plugin
            $plugdata['pluginsource'] = PLUGIN_SOURCE_BUNDLED;
        } else {
            # everything else must be "local"
            $plugdata['pluginsource'] = PLUGIN_SOURCE_LOCAL;
        }
        # create pluggroups
        if (($serendipity['GET']['only_group'] ?? null) == 'ALL') {
            $pluggroups['ALL'][] = $plugdata;
        } elseif (($serendipity['GET']['only_group'] ?? null) == 'UPGRADE' && ($plugdata['upgradable'] ?? false)) {
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

    $data['count_pluginstack'] = count($pluginstack);
    $data['errorstack'] = $errorstack;

    if (($serendipity['GET']['only_group'] ?? null) == 'UPGRADE') {
        serendipity_plugin_api::hook_event('backend_pluginlisting_header_upgrade', $pluggroups);
    }

    $available_groups = array_keys($pluggroups);
    $data['available_groups'] = $available_groups;
    $groupnames = array();
    foreach($available_groups as $available_group) {
        $groupnames[$available_group] = serendipity_groupname($available_group);
    }
    $data['groupnames'] = $groupnames;
    $data['pluggroups'] = $pluggroups;
    $data['formToken'] = serendipity_setFormToken();
    $data['only_group'] = $serendipity['GET']['only_group'] ?? null;
    $data['available_upgrades'] = isset($pluggroups['UPGRADE']);
    $requirement_failures = array();

    foreach($pluggroups AS $pluggroup => $groupstack) {
        foreach ($groupstack as $plug) {
            if ( !empty($plug['requirements']['serendipity']) && version_compare($plug['requirements']['serendipity'], serendipity_getCoreVersion($serendipity['version']), '>') ) {
                $requirement_failures[$plug['class_name']] = array("s9y" => true);
            }

            if ( !empty($plug['requirements']['php']) && version_compare($plug['requirements']['php'], phpversion(), '>') ) {
                if (isset($requirement_failures[$plug['class_name']])) {
                    $requirement_failures[$plug['class_name']] = array_merge($requirement_failures[$plug['class_name']] , array("php" => true));
                } else {
                    $requirement_failures[$plug['class_name']] = array("php" => true);
                }
            }

            if ( !empty($plug['requirements']['smarty']) && version_compare($plug['requirements']['smarty'], str_replace('Smarty-', '', Smarty::SMARTY_VERSION), '>') ) {
                if (isset($requirement_failures[$plug['class_name']])) {
                     $requirement_failures[$plug['class_name']] = array_merge($requirement_failures[$plug['class_name']] , array("smarty" => true));
                } else {
                    $requirement_failures[$plug['class_name']] = array("smarty" => true);
                }
            }

        }
    }
    $data['requirement_failures'] = $requirement_failures;
} elseif ( $serendipity['GET']['adminAction'] == 'renderOverlay' ) {
    $data['adminAction'] = 'overlay';
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

    if (isset($_POST['SAVE'])  && serendipity_checkFormToken()) {
        $pos=0;
        foreach($_POST['serendipity']['plugin'] as $plugin) {
            serendipity_db_query("UPDATE {$serendipity['dbPrefix']}plugins
                                     SET sort_order = ".  $pos . "
                                   WHERE name='" . serendipity_db_escape_string($plugin['id']) . "'");

            serendipity_plugin_api::update_plugin_placement(
                addslashes($plugin['id']),
                addslashes($plugin['placement'])
            );

            serendipity_plugin_api::update_plugin_owner(
                addslashes($plugin['id']),
                addslashes($_POST['serendipity']['ownership'][$plugin['name'] ?? null] ?? null)
            );
            $pos++;
        }
    }

    if (isset($serendipity['GET']['install_plugin']) && serendipity_checkFormToken()) {
        $authorid = $serendipity['authorid'];
        if (serendipity_checkPermission('adminPluginsMaintainOthers')) {
            $authorid = '0';
        }
        if ($serendipity['ajax']) {
             // we need to catch the spartacus messages to return only them to the ajax call (used by the update all button)
            ob_start();
        }
        $fetchplugin_data = array('GET'     => &$serendipity['GET'],
                                  'install' => true);
       
           
        serendipity_plugin_api::hook_event('backend_plugins_fetchplugin', $fetchplugin_data);

        // we now have to check that the plugin is not already installed, or stackable, to prevent invalid double instances
        $new_plugin = true;
        if ($fetchplugin_data['install']) {
            // spartacus will set this to false on upgrade, and we want to check this only on install
            foreach (serendipity_plugin_api::get_installed_plugins() as $pluginName) {
                if ($serendipity['GET']['install_plugin'] === $pluginName) {
                    $existingPlugin =& serendipity_plugin_api::load_plugin($serendipity['GET']['install_plugin']);
                    if (is_object($existingPlugin)) {
                        $bag = new serendipity_property_bag();
                        $existingPlugin->introspect($bag);
                        if ($bag->get('stackable') != true) {
                            $new_plugin = false;
                        }
                    }
                    break;
                }
            }
        }

        $data['new_plugin_failed'] = ! $new_plugin;

        if ($fetchplugin_data['install'] && $new_plugin) {
            $serendipity['debug']['pluginload'] = array();
            $inst = serendipity_plugin_api::create_plugin_instance($serendipity['GET']['install_plugin'], null, (serendipity_plugin_api::is_event_plugin($serendipity['GET']['install_plugin']) ? 'event': 'right'), $authorid, serendipity_db_escape_string($serendipity['GET']['pluginPath']));

            /* Load the new plugin */
            $plugin = &serendipity_plugin_api::load_plugin($inst);
            if (!is_object($plugin)) {
                echo "DEBUG: Plugin " . serendipity_specialchars($inst) . " not an object: " . serendipity_specialchars(print_r($plugin, true)) 
                     . ".<br />Input: " . serendipity_specialchars(print_r($serendipity['GET'], true)) . ".<br /><br />\n\nThis error 
                     can happen if a plugin was not properly downloaded (check your plugins directory if the requested plugin 
                     was downloaded) or the inclusion of a file failed (permissions?)<br />\n";
                echo "Backtrace:<br />\n" . nl2br(serendipity_specialchars(implode("\n", $serendipity['debug']['pluginload']))) . "<br />";
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
        if ($serendipity['ajax']) {
            $data['ajax_output'] = ob_get_contents();
            ob_end_clean();
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
    if (isset($_POST['SAVE'])) {
        $data['save'] = true;
        $data['timestamp'] = serendipity_strftime('%H:%M:%S');
    }

    ob_start();
    serendipity_plugin_api::hook_event('backend_pluginlisting_header', $null);
    $data['backend_pluginlisting_header'] = ob_get_contents();
    ob_end_clean();


    ob_start();
    serendipity_plugin_api::hook_event('backend_plugins_sidebar_header', $serendipity);
    $data['backend_plugins_sidebar_header'] = ob_get_contents();
    ob_end_clean();

    $data['sidebar_plugins'] = show_plugins(false, $sidebars);

    ob_start();
    serendipity_plugin_api::hook_event('backend_plugins_event_header', $serendipity);
    $data['backend_plugins_event_header'] = ob_get_contents();
    ob_end_clean();

    $data['event_plugins'] = show_plugins(true);

    if (isset($serendipity['memSnaps']) && $serendipity['memSnaps'] && count($serendipity['memSnaps']) > 0) {
        $data['$memsnaps'] = $serendipity['memSnaps'];
    } else {
        $data['$memsnaps'] = null;
    }
        
    $data['updateAllMsg'] = isset($serendipity['GET']['updateAllMsg']);
}

$data['urltoken']      = serendipity_setFormToken('url');

# php 8 compat section
if (! isset($data['plugin_to_conf'])) { $data['plugin_to_conf'] = null; }
if (! isset($data['adminAction'])) { $data['adminAction'] = null; }
if (! isset($data['new_plugin_failed'])) { $data['new_plugin_failed'] = null; }
if (! isset($data['save'])) { $data['save'] = null; }
if (! isset($data['memsnaps'])) { $data['memsnaps'] = null; }

echo serendipity_smarty_show('admin/plugins.inc.tpl', $data);


/* vim: set sts=4 ts=4 expandtab : */
