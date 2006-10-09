<?php # $Id: functions_entries.inc.php 435 2005-08-25 12:36:39Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details


if (defined('S9Y_FRAMEWORK_PLUGINS_ADMIN')) {
    return;
}
@define('S9Y_FRAMEWORK_PLUGINS_ADMIN', true);

/**
 * Returns the name of a usergroup.
 *
 * If a special constant is defined for the name of the group, the name has been
 * internationalized. This applies to the Admin/Chief Editor/Editor group names,
 * which are different for each language. If such a constant is not present,
 * the simple name of the group will be returned.
 *
 * @access public
 * @param  string  name of the group
 * @return string  realname of the group
 */
function serendipity_groupname($group) {
    if (defined('PLUGIN_GROUP_' . $group)) {
        return constant('PLUGIN_GROUP_' . $group);
    } else {
        return $group;
    }
}

/**
 * Sort the pluginlist by case-insensitive string functions
 *
 * @access public
 * @param  array    Compared Plugin #1
 * @param  array    Compared Plugin #2
 * @return boolean  Return code for array comparison
 */
function serendipity_pluginListSort($x, $y) {
    return strnatcasecmp($x['name'] . ' - ' . $x['description'], $y['name'] . ' - ' . $y['description']);
}

/**
 * Show the list of plugins
 *
 * Shows a HTML list of all installed plugins, complete with config/delete/sort order options
 *
 * @access public
 * @param  boolean  Indicates if event plugins (TRUE) or sidebar plugins (FALSE) shall be shown
 * @return null
 */
function show_plugins($event_only = false, $sidebars = null)
{
    static $opts = array(
                    'event'  => PLUGIN_ACTIVE,
                    'eventh' => PLUGIN_INACTIVE
    );

    global $serendipity;

    $sql_filter = '';
    if (is_array($sidebars)) {
        foreach($sidebars AS $sidebar) {
            $up = strtoupper($sidebar);
            if ($sidebar == 'hide') {
                $opts[$sidebar] = HIDDEN;
            } elseif (defined('SIDEBAR_' . $up)) {
                $opts[$sidebar] = constant('SIDEBAR_' . $up);
            } elseif (defined($up)) {
                $opts[$sidebar] = constant($up);
            } else {
                $opts[$sidebar] = $up;
            }
            $sql_filter .= "AND placement != '" . serendipity_db_escape_string($sidebar) . "' ";
        }
    }

    if (!$event_only) {
        $sql   = "SELECT * from {$serendipity['dbPrefix']}plugins
                   WHERE placement != 'event'
                     AND placement != 'eventh'
                         " . $sql_filter;
        $invisible_plugins = serendipity_db_query($sql);
        if (is_array($invisible_plugins)) {
            $sidebars[]   = 'NONE';
            $opts['NONE'] = NONE;
        }
    }

    $eyecandy = !isset($serendipity['eyecandy']) || serendipity_db_bool($serendipity['eyecandy']);
    if (!$eyecandy) {
        echo '    <form action="?serendipity[adminModule]=plugins" method="post">';
    } elseif (!$event_only) {
        echo '<script type="text/javascript"> function templatePluginMoverInit() { ';
        $is_first = true;
        foreach($sidebars AS $sidebar) {
?>
    <?php echo ($is_first ? 'var ' : ''); ?> list = document.getElementById("<?php echo $sidebar; ?>_col");
    DragDrop.makeListContainer(list, 'g1');
    list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
    list.onDragOut = function() { this.style["border"] = "none"; };
<?php
            $is_first = false;
        }
        echo ' } addLoadEvent(templatePluginMoverInit);</script>';
        echo '    <form action="?serendipity[adminModule]=plugins" method="post" onsubmit="pluginMovergetSort(); return true">';
        echo '        <input type="hidden" name="serendipity[pluginorder]" id="order" value="" />';

    } else {
        echo '<script type="text/javascript">addLoadEvent(pluginMoverInitEvent);</script>';
        echo '    <form action="?serendipity[adminModule]=plugins" method="post" onsubmit="pluginMovergetSortEvent(); return true">';
        echo '        <input type="hidden" name="serendipity[pluginorder]" id="eventorder" value="" />';
    }

    echo serendipity_setFormToken();
?>
    <table class="pluginmanager" border="0" cellpadding="5" cellspacing="3" width="100%">
        <tr>
<?php
    $errors     = array();

    /* Block display the plugins per placement location. */
    if ($event_only) {
        $plugin_placements = array('event', 'eventh');
    } else {
        $plugin_placements = $sidebars;
    }

    $total = 0;
    foreach ($plugin_placements as $plugin_placement) {
        if (!$event_only && $plugin_placement == 'NONE') {
            $is_invisible     = true;
        } else {
            $is_invisible     = false;
        }
        $ptitle = $opts[$plugin_placement];
        $pid    = $plugin_placement;

        echo '<td class="pluginmanager_side">';
        echo '<div class="heading">' . $ptitle . '</div>';
        echo '<ol id="' . $pid . '_col" class="pluginmanager_container">';
        if ($is_invisible) {
            $plugins = $invisible_plugins;
        } else {
            $plugins = serendipity_plugin_api::enum_plugins($plugin_placement);
        }

        if (!is_array($plugins)) {
            continue;
        }

        $sort_idx = 0;
        foreach ($plugins as $plugin_data) {
            $total++;
            $plugin  =& serendipity_plugin_api::load_plugin($plugin_data['name'], $plugin_data['authorid']);
            $key     = urlencode($plugin_data['name']);
            $css_key = 's9ycid' . str_replace('%', '-', $key);
            $is_plugin_owner    = ($plugin_data['authorid'] == $serendipity['authorid'] || serendipity_checkPermission('adminPluginsMaintainOthers'));
            $is_plugin_editable = ($is_plugin_owner || $plugin_data['authorid'] == '0');

            if (!is_object($plugin)) {
                $name = $title = ERROR . '!';
                $desc          = ERROR . ': ' . $plugin_data['name'];
                $can_configure = false;
            } else {
                /* query for its name, description and configuration data */

                $bag = new serendipity_property_bag;
                $plugin->introspect($bag);

                $name  = htmlspecialchars($bag->get('name'));
                $desc  = htmlspecialchars($bag->get('description'));
                $desc .= '<br />' . VERSION  . ': <em>' . $bag->get('version') . '</em>';

                $title = serendipity_plugin_api::get_plugin_title($plugin, '[' . $name . ']');

                if ($bag->is_set('configuration') && ($plugin->protected === FALSE || $plugin_data['authorid'] == '0' || $plugin_data['authorid'] == $serendipity['authorid'] || serendipity_checkPermission('adminPluginsMaintainOthers'))) {
                    $can_configure = true;
                } else {
                    $can_configure = false;
                }
            }

            if ($event_only) {
                $place = placement_box('serendipity[placement][' . $plugin_data['name'] . ']', $plugin_data['placement'], $is_plugin_editable, true, $opts);
                $event_only_uri = '&amp;serendipity[event_plugin]=true';
            } else {
                $place = placement_box('serendipity[placement][' . $plugin_data['name'] . ']', $plugin_data['placement'], $is_plugin_editable, false, $opts);
                $event_only_uri = '';
            }

            /* Only display UP/DOWN links if there's somewhere for the plugin to go */
            if ($sort_idx == 0) {
                $moveup   = '&nbsp;';
            } else {
                $moveup   = '<a href="?' . serendipity_setFormToken('url') . '&amp;serendipity[adminModule]=plugins&amp;submit=move+up&amp;serendipity[plugin_to_move]=' . $key . $event_only_uri . '" style="border: 0"><img src="' . serendipity_getTemplateFile('admin/img/uparrow.png') .'" height="16" width="16" border="0" alt="' . UP . '" /></a>';
            }

            if ($sort_idx == (count($plugins)-1)) {
                $movedown = '&nbsp;';
            } else {
                $movedown = ($moveup != '' ? '&nbsp;' : '') . '<a href="?' . serendipity_setFormToken('url') . '&amp;serendipity[adminModule]=plugins&amp;submit=move+down&amp;serendipity[plugin_to_move]=' . $key . $event_only_uri . '" style="border: 0"><img src="' . serendipity_getTemplateFile('admin/img/downarrow.png') . '" height="16" width="16" alt="'. DOWN .'" border="0" /></a>';
            }
?>
            <li class="pluginmanager_item_<?php echo ($sort_idx % 2 ? 'even' : 'uneven'); ?>" id="<?php echo $css_key; ?>">
                <div id="g<?php echo $css_key; ?>" class="pluginmanager_grablet">
                    <a href="#" id="grab<?php echo $css_key; ?>"></a>
                </div>
                <?php if ($is_plugin_editable) { ?>
                    <input type="checkbox" name="serendipity[plugin_to_remove][]" value="<?php echo $plugin_data['name']; ?>" />
                <?php } ?>

                <?php if ( $can_configure ) { ?>
                    <a class="pluginmanager_configure" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]=<?php echo $key ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/configure.png') ?>" style="border: 0; vertical-align: bottom;" alt="[C]" /></a>
                <?php } ?>

                    <span class="pluginmanager_title">
                <?php if ( $can_configure ) { ?>
                    <a href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]=<?php echo $key ?>"><?php echo $title; ?></a>
                <?php } else { ?>
                    <?php echo $title; ?>
                <?php } ?></span><br />
                    <div class="pluginmanager_description" style="font-size: 8pt"><?php echo $desc; ?></div>
                    <div class="pluginmanager_ownership"><?php ownership($plugin_data['authorid'], $plugin_data['name'], $is_plugin_owner); ?></div>
                    <?php echo ($eyecandy ? '<noscript>' : ''); ?>
                    <div class="pluginmanager_place"><?php echo $place; ?></div>
                    <div class="pluginmanager_move"><?php echo $moveup ?> <?php echo $movedown ?></div>
                    <?php echo ($eyecandy ? '</noscript>' : ''); ?>
            </li>
<?php
            $sort_idx++;
        }

        echo '</ol></td>';
    }

?>
        </tr>
        <tr>
            <td colspan="3" align="right"><?php printf(PLUGIN_AVAILABLE_COUNT, $total); ?></td>
        </tr>
        </table>
        <br />
        <div>
            <input type="submit" name="REMOVE" title="<?php echo DELETE; ?>"  value="<?php echo REMOVE_TICKED_PLUGINS; ?>" class="serendipityPrettyButton" />
            <input type="submit" name="SAVE"   title="<?php echo SAVE_CHANGES_TO_LAYOUT; ?>" value="<?php echo SAVE; ?>" class="serendipityPrettyButton" />
        </div>
</form>
<?php
}

/**
 * Returns HTML code for the ownership column of the plugin listing
 *
 * Used by the function show_plugins()
 *
 * @access  private
 * @see     show_plugins()
 * @param   int     ID of the current user
 * @param   string  plugin name
 * @param   boolean Toggle whether the plugin belongs to the current author
 * @return  null
 */
function ownership($authorid, $name, $is_plugin_owner = false) {
    global $serendipity;

    static $users = array();
    if (empty($users)) {
        $users = serendipity_fetchUsers();
    }

    if ($is_plugin_owner) {
?>
<select name="serendipity[ownership][<?php echo $name; ?>]">
    <option value="0"><?php echo ALL_AUTHORS; ?></option>
<?php
    }

    foreach($users AS $user) {
        if (!$is_plugin_owner && $user['authorid'] == $authorid) {
            $realname = htmlspecialchars($user['realname']);
        } elseif ($is_plugin_owner) {
?>
    <option value="<?php echo $user['authorid']; ?>"<?php echo ($user['authorid'] == $authorid ? ' selected="selected"' : ''); ?>><?php echo htmlspecialchars($user['realname']); ?></option>
<?php
        }
    }

    if ($is_plugin_owner) {
?>
</select>
<?php
    } else {
        echo (empty($realname) ? ALL_AUTHORS : $realname);
    }
}

/**
 * Show a placement box on where to move a sidebar plugin to
 *
 * @access private
 * @see    show_plugins()
 * @param  string   plugin name
 * @param  string   current position of the plugin
 * @param  boolean  Toggle whether a plugin is editable (depends on authorid and permissions)
 * @param  boolean  Toggle whether a plugin is an event plugin
 * @return string   HTML code for placement select box
 */
function placement_box($name, $val, $is_plugin_editable = false, $is_event = false, $opts = null)
{
    if ($opts === null) {
        $opts = array(
            'left'  => LEFT,
            'right' => RIGHT,
            'hide'  => HIDDEN
        );
    }

    static $event_opts = array(
                    'event'     => PLUGIN_ACTIVE,
                    'eventh' => PLUGIN_INACTIVE,
    );

    if ($is_event) {
        $gopts =& $event_opts;
    } else {
        $gopts =& $opts;
    }

    $x = "\n<select name=\"$name\">\n";
    foreach ($gopts as $k => $v) {
        if (!$is_plugin_editable && $k == 'hide') {
            continue;
        }

        $x .= "    <option value=\"$k\"" . ($k == $val ? ' selected="selected"' : '') . ">$v</option>\n";
    }
    return $x . "</select>\n";
}

/**
 * Show a placement box on where to move a sidebar plugin to
 *
 * @access public
 * @param  object   A plugin object
 * @param  object   The plugins property bag object
 * @param  string   The name of the plugin
 * @param  string   The description of the plugin
 * @param  array    The property bag 'configuration' array, holding the array of config items.
 * @param  boolean  Shows the surrounding HTML table?
 * @param  boolean  Shows the FORM submit button?
 * @param  boolean  Shows a plugin's "example" method output?
 * @param  boolean  Spawn a plugins' configuration WYSIWYG items?
 * @param  string   The array index name of POSTed values ($serendipity['POST'][xxx])
 * @return boolean
 */
function serendipity_plugin_config(&$plugin, &$bag, &$name, &$desc, &$config_names, $showTable = true, $showSubmit = true, $showExample = true, $spawnNuggets = true, $postKey = 'plugin') {
    global $serendipity;

    if ($showTable) {
?>
    <table id="serendipity_plugin_config" border="0" cellspacing="0" cellpadding="3" width="100%">
<?php
    }

    $elcount = 0;
    $htmlnugget = array();
    foreach ($config_names as $config_item) {
        $elcount++;
        $cbag = new serendipity_property_bag;
        $plugin->introspect_config_item($config_item, $cbag);

        $cname      = htmlspecialchars($cbag->get('name'));
        $cdesc      = htmlspecialchars($cbag->get('description'));
        $value      = $plugin->get_config($config_item, 'unset');
        $lang_direction = htmlspecialchars($cbag->get('lang_direction'));

        if (empty($lang_direction)) {
            $lang_direction = LANG_DIRECTION;
        }

        /* Apparently no value was set for this config item */
        if ($value === 'unset') {
            /* Try and the default value for the config item */
            $value = $cbag->get('default');

            /* Still, we don't have a value, try and get (bool)false - from an old plugin */
            if ($value === '') {
                $value = $plugin->get_config($config_item, false, true);
            }
        }

        if (isset($_POST['serendipity'][$postkey][$config_item])) {
            if (is_array($_POST['serendipity'][$postkey][$config_item])) {
                $hvalue = $_POST['serendipity'][$postkey][$config_item];
                array_walk($hvalue, 'htmlspecialchars');
            } else {
                $hvalue = htmlspecialchars($_POST['serendipity'][$postkey][$config_item]);
            }
        } else {
            $hvalue = htmlspecialchars($value);
        }

        $radio    = array();
        $select   = array();
        $per_row  = null;

        $is_multi_select = false;
        $ctype    = $cbag->get('type');
        switch ($ctype) {
            case 'seperator':
?>
        <tr>
            <td colspan="2"><hr noshade="noshade" size="1" /></td>
        </tr>
<?php
                break;

            case 'multiselect':
                $is_multi_select = true;

            case 'select':
                if (is_array($hvalue)) {
                    $selected_options = $hvalue;
                } elseif ($is_multi_select) {
                    $selected_options = explode('^', $hvalue);
                } else {
                    $selected_options = array($hvalue => $hvalue);
                }

                $pre_selected = (array)$cbag->get('select_preselected');
                $select_size  = $cbag->get('select_size');
                $select = $cbag->get('select_values');
?>
        <tr>
            <td style="border-bottom: 1px solid #000000; vertical-align: top"><strong><?php echo $cname; ?></strong>
<?php
    if ($cdesc != '') {
?>
                <br><span  style="color: #5E7A94; font-size: 8pt;">&nbsp;<?php echo $cdesc; ?></span>
<?php } ?>
            </td>
            <td style="border-bottom: 1px solid #000000; vertical-align: middle" width="250">
                <div>
                    <select class="direction_<?php echo $lang_direction; ?>" name="serendipity[<?php echo $postKey; ?>][<?php echo $config_item; ?>]<?php echo ($is_multi_select ? '[]' : ''); ?>" <?php echo ($is_multi_select ? 'multiple="multiple"' : ''); ?> <?php echo ($is_multi_select && $select_size > 0 ? 'size="' . $select_size . '"' : ''); ?>>
<?php
                foreach($select AS $select_value => $select_desc) {
                    $id = htmlspecialchars($config_item . $select_value);
?>
                        <option value="<?php echo $select_value; ?>" <?php echo ( (in_array($select_value, $selected_options) || in_array($select_value, $pre_selected) ) ? 'selected="selected"' : ''); ?> title="<?php echo htmlspecialchars($select_desc); ?>">
                            <?php echo htmlspecialchars($select_desc); ?>
                        </option>
<?php
                }
?>
                    </select>
                </div>
            </td>
        </tr>
<?php
                break;

            case 'tristate':
                $per_row = 3;
                $radio['value'][] = 'default';
                $radio['desc'][]  = USE_DEFAULT;

            case 'boolean':
                $radio['value'][] = 'true';
                $radio['desc'][]  = YES;

                $radio['value'][] = 'false';
                $radio['desc'][]  = NO;

           case 'radio':
                if (!count($radio) > 0) {
                    $radio = $cbag->get('radio');
                }

                if (empty($per_row)) {
                    $per_row = $cbag->get('radio_per_row');
                    if (empty($per_row)) {
                        $per_row = 2;
                    }
                }
?>
        <tr>
            <td style="border-bottom: 1px solid #000000; vertical-align: top"><strong><?php echo $cname; ?></strong>
<?php
                if ($cdesc != '') {
?>
                <br /><span  style="color: #5E7A94; font-size: 8pt;">&nbsp;<?php echo $cdesc; ?></span>
<?php
                }
?>
            </td>
            <td style="border-bottom: 1px solid #000000; vertical-align: middle;" width="250">
<?php
                $counter = 0;
                foreach($radio['value'] AS $radio_index => $radio_value) {
                    $id = htmlspecialchars($config_item . $radio_value);
                    $counter++;
                    $checked = "";

                    if ($radio_value == 'true' && ($hvalue === '1' || $hvalue === 'true')) {
                        $checked = " checked";
                    } elseif ($radio_value == 'false' && ($hvalue === '' || $hvalue === 'false')) {
                        $checked = " checked";
                    } elseif ($radio_value == $hvalue) {
                        $checked = " checked";
                    }

                    if ($counter == 1) {
?>
                <div>
<?php
                    }
?>
                    <input class="direction_<?php echo $lang_direction; ?>" type="radio" id="serendipity_plugin_<?php echo $id; ?>" name="serendipity[<?php echo $postKey; ?>][<?php echo $config_item; ?>]" value="<?php echo $radio_value; ?>" <?php echo $checked ?> title="<?php echo htmlspecialchars($radio['desc'][$radio_index]); ?>" />
                        <label for="serendipity_plugin_<?php echo $id; ?>"><?php echo htmlspecialchars($radio['desc'][$radio_index]); ?></label>
<?php
                    if ($counter == $per_row) {
                        $counter = 0;
?>
                </div>
<?php
                    }
                }
?>
            </td>
        </tr>
<?php
                break;

            case 'string':
?>
        <tr>
            <td style="border-bottom: 1px solid #000000">
                    <strong><?php echo $cname; ?></strong>
                    <br><span style="color: #5E7A94; font-size: 8pt;">&nbsp;<?php echo $cdesc; ?></span>
            </td>
            <td style="border-bottom: 1px solid #000000" width="250">
                <div>
                    <input class="direction_<?php echo $lang_direction; ?>" type="text" name="serendipity[<?php echo $postKey; ?>][<?php echo $config_item; ?>]" value="<?php echo $hvalue; ?>" size="30" />
                </div>
            </td>
        </tr>
<?php
                break;

            case 'html':
            case 'text':
?>
        <tr>
            <td colspan="2"><strong><?php echo $cname; ?></strong>
                &nbsp;<span style="color: #5E7A94; font-size: 8pt;">&nbsp;<?php echo $cdesc; ?></span>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div>
                    <textarea class="direction_<?php echo $lang_direction; ?>" style="width: 100%" id="nuggets<?php echo $elcount; ?>" name="serendipity[<?php echo $postKey; ?>][<?php echo $config_item; ?>]" rows="20" cols="80"><?php echo $hvalue; ?></textarea>
                </div>
            </td>
        </tr>
<?php
                if ($cbag->get('type') == 'html') {
                    $htmlnugget[] = $elcount;
                    serendipity_emit_htmlarea_code('nuggets', 'nuggets', true);
                }
                break;

            case 'content':
                ?><tr><td colspan="2"><?php echo $cbag->get('default'); ?></td></tr><?php
                break;

            case 'custom':
                ?><tr><td colspan="2">
                    <input type="hidden" id="config_<?php echo $postKey; ?>_<?php echo $config_item; ?>" name="serendipity[<?php echo $postKey; ?>][<?php echo $config_item; ?>]" value="<?php echo $hvalue; ?>" size="30" />
                    <?php echo $cbag->get('custom'); ?>
                  </td></tr><?php
                break;

            case 'hidden':
                ?><tr><td colspan="2"><input class="direction_<?php echo $lang_direction; ?>" type="hidden" name="serendipity[<?php echo $postKey; ?>][<?php echo $config_item; ?>]" value="<?php echo $cbag->get('value'); ?>" /></td></tr><?php
                break;

            default:
                // Unknown configuration key. Let the plugin handle it.
                $addData = func_get_args();
                $eventData = array(
                    'config_item' => $config_item,
                    'cbag'        => $cbag,
                    'plugin'      => $plugin,
                    'value'       => $value,
                    'bag'         => $bag,
                    'postKey'     => $postKey
                );
                serendipity_plugin_api::hook_event('backend_pluginconfig_' . $ctype, $eventData, $addData);
                break;
        }
    }

    if ($showTable) {
?>
    </table>
<br />
<?php
    }

    if ($showSubmit) {
?>
    <div style="padding-left: 20px">
        <input type="submit" name="SAVECONF" value="<?php echo SAVE; ?>" class="serendipityPrettyButton" />
    </div>
<?php
    }

    if ($showExample && method_exists($plugin, 'example') ) {
?>
    <div>
        <?php echo $plugin->example() ?>
    </div>
<?php
    }

    if ($spawnNuggets && isset($serendipity['wysiwyg']) && $serendipity['wysiwyg'] && count($htmlnugget) > 0) {
        $ev = array('nuggets' => $htmlnugget, 'skip_nuggets' => false);
        serendipity_plugin_api::hook_event('backend_wysiwyg_nuggets', $ev);

        if ($ev['skip_nuggets'] === false) {
?>
    <script type="text/javascript">
    function Spawnnugget() {
        <?php foreach($htmlnugget AS $htmlnuggetid) { ?>
        Spawnnuggets('<?php echo $htmlnuggetid; ?>');
        <?php } ?>
    }
    </script>
<?php
        }
    }

    return true;
}
