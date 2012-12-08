<?php # $Id:$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

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
    $data['event_only'] = $event_only;
    $data['eyecandy'] = $eyecandy;
    if (!$eyecandy) {
        $data['eyecandy'] = false;
    } elseif (!$event_only) {
        $data['event_only'] = false;
        $data['is_first'] = $is_first = true;
    }

    $data['serendipity_setFormToken'] = serendipity_setFormToken();

    // what is this for???
    $errors     = array();

    /* Block display the plugins per placement location. */
    if ($event_only) {
        $plugin_placements = array('event', 'eventh');
    } else {
        $plugin_placements = $sidebars;
    }
    $data['plugin_placements'] = $plugin_placements;
    $ownership = array();

    $total = 0;
    foreach ($plugin_placements as $plugin_placement) {
        if (!$event_only && $plugin_placement == 'NONE') {
            $is_invisible     = true;
        } else {
            $is_invisible     = false;
        }
        $data['placement'][$plugin_placement]['ptitle'] = $ptitle = $opts[$plugin_placement];
        $data['placement'][$plugin_placement]['pid'] = $pid    = $plugin_placement;

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
                $desc .= '<span class="block_level">' . VERSION  . ': <em>' . $bag->get('version') . '</em></span>';

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

            ob_start();
                ownership($plugin_data['authorid'], $plugin_data['name'], $is_plugin_owner);
                $ownership = ob_get_contents();
            ob_end_clean();

            $data['placement'][$plugin_placement]['plugin_data'][$total]['sort_idx'] = $sort_idx;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['css_key'] = $css_key;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['is_plugin_editable'] = $is_plugin_editable;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['name'] = $plugin_data['name'];
            $data['placement'][$plugin_placement]['plugin_data'][$total]['can_configure'] = $can_configure;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['key'] = $key;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['title'] = $title;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['desc'] = $desc;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['ownership'] = $ownership;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['place'] = $place;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['moveup'] = $moveup;
            $data['placement'][$plugin_placement]['plugin_data'][$total]['movedown'] = $movedown;
            $sort_idx++;
        }

    }

    $data['total'] = $total;

    $serendipity['smarty']->assign($data);
    $tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
    $tfile = dirname(__FILE__) . "/admin/$tpldir/show_plugins.fnc.tpl";
    $serendipity['smarty']->display('file:'. $tfile);

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
        $users = serendipity_fetchUsers('', 'hidden');
    }
    $data['authorid'] = $authorid;
    $data['users'] = $users;
    $data['is_plugin_owner'] = $is_plugin_owner;
    $data['name'] = $name;
    $data['show_ownership'] = true;

    $serendipity['smarty']->assign($data);
    $tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
    $tfile = dirname(__FILE__) . "/admin/$tpldir/show_ownership.fnc.tpl";
    $serendipity['smarty']->display('file:'. $tfile);

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
 * @param  array    An array that groups certain config keys
 * @return boolean
 */
function serendipity_plugin_config(&$plugin, &$bag, &$name, &$desc, &$config_names, $showTable = true, $showSubmit = true, $showExample = true, $spawnNuggets = true, $postKey = 'plugin', $config_groups = NULL) {
    global $serendipity;

    if (empty($config_names)) {
        return false;
    }

    if (!is_object($serendipity['smarty'])) {
        serendipity_smarty_init();
    }
    $tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
    $tfile = dirname(__FILE__) . "/admin/$tpldir/out_stack_loop.tpl";

    $data = array();

    if ($showSubmit && $postKey != 'plugin') { 
        $data['showSubmit_head'] = true;
    }

    if ($showTable) { 
        $data['showTable'] = true;
    }

    $elcount = 0;
    $htmlnugget = array();
    
    $out_stack = array();
    $data['config_names'] = $config_names;

    foreach ($config_names as $config_item) {
        $elcount++;
        $cbag = new serendipity_property_bag;
        $plugin->introspect_config_item($config_item, $cbag);

        $data['cname'] = $cname      = htmlspecialchars($cbag->get('name'));
        $data['cdesc'] = $cdesc      = htmlspecialchars($cbag->get('description'));
        $value      = $plugin->get_config($config_item, 'unset');
        $lang_direction = htmlspecialchars($cbag->get('lang_direction'));

        if (empty($lang_direction)) {
            $lang_direction = LANG_DIRECTION;
        }
        $data['lang_direction']  = $lang_direction;

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
        $text_rows = null;
        $input_type = null;

        $data['is_multi_select'] = $is_multi_select = false;
        $data['ctype']           = $ctype    = $cbag->get('type');

        $data['elcount']     = $elcount;
        $data['hvalue']      = $hvalue;
        $data['postKey']     = $postKey;
        $data['config_item'] = $config_item;

        ob_start();

        switch ($ctype) {
            case 'seperator': 
                $data['ctype'] = 'seperator';
                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'multiselect': 
                $data['ctype'] = 'multiselect';
                $data['is_multi_select'] = $is_multi_select = true;

            case 'select': 
                $data['ctype'] = 'select';
                if (is_array($hvalue)) {
                    $selected_options = $hvalue;
                } elseif ($is_multi_select) {
                    $selected_options = explode('^', $hvalue);
                } else {
                    $selected_options = array($hvalue => $hvalue);
                }

                $data['selected_options'] = $selected_options;
                $data['pre_selected']     = $pre_selected = (array)$cbag->get('select_preselected');
                $data['select_size']      = $select_size  = $cbag->get('select_size');
                $data['select']           = $select = $cbag->get('select_values');

                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'tristate': 
                $data['ctype'] = 'tristate';
                $per_row = 3;
                $radio['value'][] = 'default';
                $radio['desc'][]  = USE_DEFAULT;

            case 'boolean': 
                $data['ctype'] = 'boolean';
                $radio['value'][] = 'true';
                $radio['desc'][]  = YES;

                $radio['value'][] = 'false';
                $radio['desc'][]  = NO;

            case 'radio': 
                $data['ctype'] = 'radio';
                if (!count($radio) > 0) {
                    $radio = $cbag->get('radio');
                }

                if (empty($per_row)) {
                    $per_row = $cbag->get('radio_per_row');
                    if (empty($per_row)) {
                        $per_row = 2;
                    }
                }
                $data['per_row'] = $per_row;
                $data['radio_button'] = array();
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
                    $data['radio_button'][$radio_index]['id'] = $id;
                    $data['radio_button'][$radio_index]['checked'] = $checked;
                    $data['radio_button'][$radio_index]['counter'] = $counter;
                    $data['radio_button'][$radio_index]['value'] = $radio_value;
                    $data['radio_button'][$radio_index]['index'] = htmlspecialchars($radio['desc'][$radio_index]);
                }

                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'string': 
                $data['ctype'] = 'string';
                if (empty($input_type)) {
                    $input_type = $cbag->get('input_type');
                    if (empty($input_type)) {
                        $input_type = "text";
                    }
                }
                $data['input_type'] = $input_type;
                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'html': $data['ctype'] = 'html';
            case 'text': $data['ctype'] = 'text';
                if (empty($text_rows)) {
                    $text_rows = $cbag->get('rows');
                    if (empty($text_rows)) {
                        $text_rows = 20;
                    }
                }
                $data['text_rows'] = $text_rows;
                if ($cbag->get('type') == 'html') {
                    $htmlnugget[] = $elcount;
                    if (!function_exists('serendipity_emit_htmlarea_code')) {
                        @include dirname(__FILE__) . '/functions_entries_admin.inc.php';
                    }
                    serendipity_emit_htmlarea_code('nuggets', 'nuggets', true);
                }
                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

               break;

            case 'content': 
                $data['ctype'] = 'content';
                $data['cbag_default'] = $cbag->get('default');
                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'custom': 
                $data['ctype'] = 'custom';
                $data['cbag_custom'] = $cbag->get('custom');
                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'hidden': 
                $data['ctype'] = 'hidden';
                $data['cbag_value'] = $cbag->get('value');
                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'media': 
                $data['ctype'] = 'media';
                // Output the JavaScript, if we haven't already
                $data['mediajs_output'] = $mediajs_output = $serendipity['mediajs_output'];
                if (!$mediajs_output)
                {
                    $serendipity['mediajs_output'] = true;
                }
                // Print the HTML to display the popup media selector
                $preview_width = $cbag->get('preview_width');
                if (!$preview_width || $preview_width == "") {
                  $preview_width = '400px';
                }
                $preview_height = $cbag->get('preview_height');
                if (!$preview_height || $preview_height == "") {
                  $preview_height = '100px';
                }
                $data['preview_width']  = $preview_width;
                $data['preview_height'] = $preview_height;

                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            case 'sequence': 
                $data['ctype'] = 'sequence';
                // For the drag-n-drop to work, the list must be included in
                // a container (probably an <ol>) that JavaScript can access
                // (easiest by ID), with <li> children that have unique IDs,
                // and handles with ids of 'g'.$li_id.
                // I can't get it to work unless there's a class of
                // pluginmanager_container on the ol, either.
                // The drag-n-drop returns the list of IDs in order.
                $data['sequencejs_output'] = $sequencejs_output = $serendipity['sequencejs_output'];
                if (!$sequencejs_output) {
                    $serendipity['sequencejs_output'] = true;
                }

                // I want this generic sequence widget to hide the ID, but
                // display a name or description with an optional picture.
                // (This would allow users to identify choices by thumbnail.)
                // Therefore, I need an array with keys 'id', 'display', and
                // 'imgurl' (or similar) to generate each list item.

                // Get the data we need to display the list
                if (!$value) {
                    $value = $eventData['default'];
                }
                $data['value'] = $value;
                $data['cname'] = $cname = $cbag->get('name');
                $data['cdesc'] = $cdesc = $cbag->get('description');
                $data['checkable'] = $checkable = $cbag->get('checkable');

                /** Unordered array of values */
                $items = $cbag->get('values');
                if (!is_array($items)) { $items = null; }
                /** Array specifying order to use values in $items */
                $order = null;
                if ($value) {
                    $data['store_order'] = $store_order = $order = explode(',', $value);
                }

                // $items is the list of things to sequence.  It's not in
                // order, and reordering PHP arrays is problematic.  So
                // we keep it unordered, and access its values according
                // to another array (appropriately named $order).
                if (is_array($items)) {
                    // Allow simple value for any sequence item
                    foreach ($items as $key => $item) {
                        if (!is_array($item)) {
                            // Replace this item with an empty array
                            unset($items[$key]);
                            $items[$item] = array();
                        }
                    }

                    // Make sure all the items are in the order list; new items
                    // go on the end (new items could have been added without 
                    // this config item being updated)
                    // Also fill out thumbnails and display names
                    foreach ($items as $id => $junk) {
                        if ($order == null) {
                            $order = array($id);
                        } else if (!in_array($id, $order)) {
                            $order[] = $id;
                        }
                        // If there's no defined display name, default to the ID
                        if (!isset($items[$id]['display'])) {
                            $items[$id]['display'] = $id;
                        }
                        // If there's no image, we just won't display anything.
                    }

                    // Make sure all the items to be ordered exist!  Otherwise
                    // we could try to sequence nothing.
                    $filtered = array();
                    foreach ($order as $id) {
                        if (array_key_exists($id, $items)) {
                            $filtered[] = $id;
                        }
                    }
                    $order = $filtered;
                } else {
                    // If there's nothing to sequence, make the order in
                    // which to use them valid, but empty
                    $order = array();
                }

                // Start the row, add one cell for the name and description
                $data['items'] = $items;
                $sort_idx = 0;
                $data['last'] = $last = count($order) - 1;
                foreach ($order as $id) {
                    // Create the variables required to print this item
                    if ($sort_idx > 0) {
                        $swapping = $order;
                        $temp = $swapping[(int)$sort_idx];
                        $swapping[(int)$sort_idx] = $swapping[(int)($sort_idx - 1)];
                        $swapping[(int)($sort_idx - 1)] = $temp;
                        $data['order_id'][$sort_idx]['oneup'] = $oneup = implode(',' , $swapping);
                    }
                    if ($sort_idx < $last) {
                        $swapping = $order;
                        $temp = $swapping[(int)$sort_idx];
                        $swapping[(int)$sort_idx] = $swapping[(int)($sort_idx + 1)];
                        $swapping[(int)($sort_idx + 1)] = $temp;
                        $data['order_id'][$sort_idx]['onedown'] = $onedown = implode(',' , $swapping);
                    }

                    $data['order_id'][$sort_idx]['id'] = $id;
                    $data['order_id'][$sort_idx]['sort_idx'] = $sort_idx;
                    // Print the HTML
                    //
                    // Set the item and its ID
                    // Make a handle with ID 'g$id'
                    // Add the item contents
                    // Luddite submit buttons (please, think of the scriptless!)
                    // Next, please
                    $sort_idx++;
                } // foreach end

                if (!is_array($items) or empty($order)) {
                    // Print the empty message
                    $data['no_sequence'] = sprint(NONE);
                }
                // Print the Javascript to drag-n-drop the list
                // Finish the row
                $serendipity['smarty']->assign($data);
                $serendipity['smarty']->display('file:'. $tfile);

                break;

            default: 
                $data['ctype'] = 'default';
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

        $out_stack[$config_item] = ob_get_contents();
        ob_end_clean();
    }
    $data['config_groups'] = $config_groups;
    $data['OUT_STACK']     = $out_stack;

    if (is_array($config_groups)) {
        foreach($config_groups AS $config_header => $config_groupkeys) {
            foreach($config_groupkeys AS $config_groupkey) {
                unset($out_stack[$config_groupkey]);
            }
        }
    }

    $data['OUT_STACK_REST'] = $out_stack;

    // is left here without any use for archiv issues only - we now use external js file outsourced to templates/default/admin/admin_scripts.js 
    // see passed vars in serendipity_plugin_config.fnc.tpl - can get erased, as not being used any more if keeping Smartification.
    ob_start();
    serendipity_printConfigJS();
    $config_js = ob_get_contents();
    $data['serendipity_printConfigJS'] = $config_js;
    ob_end_clean();

    // this is new - allowing easier access to script handling like toogle 
    $data['allow_admin_scripts'] = true;

    if ($showSubmit) { 
        $data['showSubmit_foot'] = true;
    }

    if ($showExample && method_exists($plugin, 'example') ) { 
        $data['showExample'] = true;
        ob_start();
        echo $plugin->example();
        $data['plugin_example'] = ob_get_contents();
        ob_end_clean();
    }

    if ($spawnNuggets && isset($serendipity['wysiwyg']) && $serendipity['wysiwyg'] && count($htmlnugget) > 0) { 
        $data['spawnNuggets'] = true;
        $ev = array('nuggets' => $htmlnugget, 'skip_nuggets' => false);
        serendipity_plugin_api::hook_event('backend_wysiwyg_nuggets', $ev);
        $data['ev'] = $ev;
    }

    $serendipity['smarty']->assign($data);
    $tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
    $tfile = dirname(__FILE__) . "/admin/$tpldir/serendipity_plugin_config.fnc.tpl";
    $content = $serendipity['smarty']->fetch('file:'. $tfile);
    echo $content;

    return true;
}
