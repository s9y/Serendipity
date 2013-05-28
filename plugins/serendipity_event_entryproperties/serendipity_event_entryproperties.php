<?php # $Id$

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_entryproperties extends serendipity_event
{
    var $services, $showPasswordForm;
    var $title = PLUGIN_EVENT_ENTRYPROPERTIES_TITLE;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_ENTRYPROPERTIES_TITLE);
        $propbag->add('description',   PLUGIN_EVENT_ENTRYPROPERTIES_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking');
        $propbag->add('version',       '1.33.1');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('event_hooks',    array(
            'frontend_fetchentries'                             => true,
            'frontend_fetchentry'                               => true,
            'backend_publish'                                   => true,
            'backend_save'                                      => true,
            'backend_display'                                   => true,
            'backend_import_entry'                              => true,
            'entry_display'                                     => true,
            'entries_header'                                    => true,
            'frontend_entryproperties'                          => true,
            'backend_sidebar_entries_event_display_buildcache'  => true,
            'backend_sidebar_entries'                           => true,
            'backend_cache_entries'                             => true,
            'backend_cache_purge'                               => true,
            'backend_plugins_new_instance'                      => true,
            'frontend_entryproperties_query'                    => true,
            'frontend_entries_rss'                              => true,
            'backend_entry_presave'                             => true,
            'frontend_configure'                                => true
        ));
        $propbag->add('groups', array('BACKEND_EDITOR'));
        $propbag->add('configuration', array('cache', 'sequence', 'use_groups', 'use_users', 'use_ext_joins', 'default_read', 'customfields'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'default_read':
                $propbag->add('type',        'radio');
                $propbag->add('name',        USE_DEFAULT . ': ' . PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS);
                $propbag->add('description', '');
                $propbag->add('radio', array(
                    'value' => array('private', 'public', 'member'),
                    'desc'  => array(PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE, PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC, PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS)
                ));
                $propbag->add('default',     'public');
                $propbag->add('radio_per_row', '1');

                break;

            case 'customfields':
                $propbag->add('type',        'text');
                $propbag->add('name',        PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS);
                $propbag->add('description', PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2 . "\n" . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC4);
                $propbag->add('default',     'CustomField1, CustomField2, CustomField3');
                break;

            case 'use_groups':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS);
                $propbag->add('description', PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC);
                $propbag->add('default',     'false');
                break;

            case 'use_ext_joins':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS);
                $propbag->add('description', PLUGIN_EVENT_ENTRYPROPERTIES_EXTJOINS_DESC);
                $propbag->add('default',     'true');
                break;

            case 'use_users':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_ENTRYPROPERTIES_USERS);
                $propbag->add('description', PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC);
                $propbag->add('default',     'false');
                break;

            case 'cache':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_ENTRYPROPERTIES_CACHE);
                $propbag->add('description', PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC);
                $propbag->add('default',     'true');
                break;

            case 'sequence':
                $propbag->add('type',        'sequence');
                $propbag->add('name',        PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE);
                $propbag->add('description', PLUGIN_EVENT_ENTRYPROPERTIES_SEQUENCE_DESC);
                $propbag->add('checkable',   true);

                $values = array(
                    'sticky'    => array('display' => PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS),
                    'frontpage'    => array('display' => PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE),
                    'hiderss'    => array('display' => PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS),
                    'access'    => array('display' => PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS),
                    'password'    => array('display' => PASSWORD),
                    'groups'    => array('display' => PERM_READ . ': ' . GROUP),
                    'authors'    => array('display' => PERM_READ . ': ' . AUTHOR),
                    'author'    => array('display' => AUTHOR),
                    'markup'    => array('display' => PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP),
                    'customfields'    => array('display' => PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS),
                );
                $propbag->add('values',      $values);
                $propbag->add('default',     'sticky,frontpage,hiderss,access,password,groups,authors,author,markup,customfields');
                break;

        }
        return true;
    }

    function generate_content(&$title) {
        $title = $this->title;
    }

    function install() {
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function uninstall(&$propbag) {
        serendipity_plugin_api::hook_event('backend_cache_purge', $this->title);
    }

    function &getValidAuthors() {
        global $serendipity;

        if (serendipity_checkPermission('adminUsersMaintainOthers')) {
            $users = serendipity_fetchUsers('', 'hidden');
        } elseif (serendipity_checkPermission('adminUsersMaintainSame')) {
            $users = serendipity_fetchUsers('', serendipity_getGroups($serendipity['authorid'], true));
        } else {
            $users = serendipity_fetchUsers($serendipity['authorid']);
        }

        return $users;
    }


    function updateCache(&$entry) {
        global $serendipity;

        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid = " . (int)$entry['id'] . " AND property LIKE 'ep_cache_%'");
        $addData = array('from' => 'serendipity_event_entryproperties:updateCache');
        serendipity_plugin_api::hook_event('frontend_display', $entry, $addData);
        serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}entryproperties (entryid, property, value) VALUES (" . (int)$entry['id'] . ", 'ep_cache_body', '" . serendipity_db_escape_string($entry['body']) . "')");
        serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}entryproperties (entryid, property, value) VALUES (" . (int)$entry['id'] . ", 'ep_cache_extended', '" . serendipity_db_escape_string($entry['extended']) . "')");
    }

    function getSupportedProperties() {
        static $supported_properties = null;

        if ($supported_properties === null) {
            $supported_properties = array('is_sticky', 'access', 'access_groups', 'access_users', 'cache_body', 'cache_extended', 'no_frontpage', 'hiderss', 'entrypassword');

            // Capture special characters for "," and ":"
            $special_from = array('\\,', '\\:');
            $special_to   = array(chr(0x01), chr(0x02));
            $string = str_replace($special_from, $special_to, trim($this->get_config('customfields')));

            $fields = explode(',', $string);
            if (is_array($fields) && count($fields) > 0) {
                foreach($fields AS $field) {
                    $field = trim($field);
                    if (!empty($field)) {
                        $field = str_replace($special_to, $special_from, $field);
                        $fieldnames = explode(':', $field);
                        $supported_properties[] = $fieldnames[0];
                    }
                }
            }
        }

        return $supported_properties;
    }

    function returnQueryCondition($is_cache) {
        $and = '';
        if (!$is_cache) {
            $and = " AND property NOT LIKE 'ep_cache_%' ";
        }

        return $and;
    }

    /*
     * This function converts specific property fields so that they are
     * available natively to other plugins/templates.
     */
    function applyProperties(&$properties) {
        global $serendipity;

        if (is_array($properties['disable_markups'])) {
            foreach($properties['disable_markups'] AS $idx => $instance) {
                $properties['disable_markup_' . $instance] = $instance;
            }
        }
    }

    function addProperties(&$properties, &$eventData) {
        global $serendipity;
        // Get existing data
        $property = serendipity_fetchEntryProperties($eventData['id']);
        $supported_properties = serendipity_event_entryproperties::getSupportedProperties();

        // Special case for disable markups.
        if (is_array($properties['disable_markups'])) {
            $q = "DELETE FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid = " . (int)$eventData['id'] . " AND property LIKE 'ep_disable_markup_%'";
            serendipity_db_query($q);

            foreach($properties['disable_markups'] AS $idx => $instance) {
                $supported_properties[] = 'disable_markup_' . $instance;
            }
        }

        serendipity_plugin_api::hook_event('backend_entryproperties', $supported_properties);

        foreach($supported_properties AS $prop_key) {
            $prop_val = (isset($properties[$prop_key]) ? $properties[$prop_key] : null);
            $prop_key = 'ep_' . $prop_key;

            if (is_array($prop_val)) {
                $prop_val = ";" . implode(';', $prop_val) . ";";
            }

            $q = "DELETE FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid = " . (int)$eventData['id'] . " AND property = '" . serendipity_db_escape_string($prop_key) . "'";
            serendipity_db_query($q);

            if (!empty($prop_val)) {
                $q = "INSERT INTO {$serendipity['dbPrefix']}entryproperties (entryid, property, value) VALUES (" . (int)$eventData['id'] . ", '" . serendipity_db_escape_string($prop_key) . "', '" . serendipity_db_escape_string($prop_val) . "')";
                serendipity_db_query($q);
            }
        }
    }

    function showPasswordform() {
        global $serendipity;
        $url = serendipity_currentURL(true);

        $out = '
        <form action="'.$url.'" method="post" id="entrypasswordform">
            <div>
                <span><label for="entrypassword">' . PASSWORD . ':</label> <input class="input_textbox" id="entrypassword" type="password" name="serendipity[entrypassword]" value="" /></span>
                <span><input class="serendipityPrettyButton input_button" type="submit" name="login" value="'.LOGIN.'" /></span>
            </div>
        </form>';
        return $out;

    }

    function showBackend($element, $eventData, $is_sticky, $no_frontpage, $hiderss, $access_values, $access, $password, $use_groups, $access_groups, $use_users, $access_users, $more = array()) {
        global $serendipity;

        switch($element) {
        case 'sticky':
?>
            <div class="entryproperties_sticky">
                <input class="input_checkbox" type="checkbox" name="serendipity[properties][is_sticky]" id="properties_is_sticky" value="true" <?php echo $is_sticky; ?> />
                    <label title="<?php echo PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS; ?>" for="properties_is_sticky">&nbsp;<?php echo PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS; ?>&nbsp;&nbsp;</label>
            </div>
<?php
            return true;

        case 'frontpage':
?>
            <div class="entryproperties_frontpage">
                <input class="input_checkbox" type="checkbox" name="serendipity[properties][no_frontpage]" id="properties_no_frontpage" value="true" <?php echo $no_frontpage; ?> />
                    <label title="<?php echo PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE; ?>" for="properties_no_frontpage">&nbsp;<?php echo PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE; ?>&nbsp;&nbsp;</label>
            </div>
<?php
            return true;

        case 'hiderss':
?>
            <div class="entryproperties_hiderss">
                <input class="input_checkbox" type="checkbox" name="serendipity[properties][hiderss]" id="properties_hiderss" value="true" <?php echo $hiderss; ?> />
                    <label title="<?php echo PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC; ?>" for="properties_hiderss">&nbsp;<?php echo PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS; ?>&nbsp;&nbsp;</label>
            </div>
<?php
            return true;

        case 'access':
?>
            <br /><?php echo PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS; ?>:<br />
            <div class="entryproperties_access_list" style="margin-left: 10px">
<?php
            foreach($access_values AS $radio_title => $radio_value) {
?>
                <input class="input_radio" type="radio" name="serendipity[properties][access]" id="properties_access_<?php echo $radio_value; ?>" value="<?php echo $radio_value; ?>" <?php echo $radio_value == $access ? 'checked="checked"' : ''; ?> />
                    <label title="<?php echo $radio_title; ?>" for="properties_access_<?php echo $radio_value; ?>">&nbsp;<?php echo $radio_title; ?>&nbsp;&nbsp;</label>
<?php
                    }
?>
            </div>
<?php
            return true;

        case 'password':
?>
            <br /><?php echo PASSWORD; ?>:<br />
            <div style="margin-left: 10px" class="entryproperties_access_pw">
                <input autocomplete="off" class="input_textbox" type="password" name="serendipity[properties][entrypassword]" value="<?php echo htmlspecialchars($password); ?>" />
            </div>
<?php
            return true;

        case 'groups':
            if ($use_groups) {
                $my_groups = serendipity_getGroups($serendipity['authorid']);
?>
            <br /><?php echo PERM_READ . ': <em>' . GROUP . '</em>'; ?><br />
            <select class="entryproperties_access_groups" onchange="document.getElementById('properties_access_member').checked = true;" style="margin-left: 5px" multiple="multiple" name="serendipity[properties][access_groups][]" size="4">
<?php
                foreach($my_groups AS $group) {
                    if ('USERLEVEL_' == substr($group['confvalue'], 0, 10)) {
                        $group['name'] = constant($group['confvalue']);
                    }

?>
                <option value="<?php echo $group['id']; ?>" <?php echo (in_array($group['id'], $access_groups) ? 'selected="selected"' : ''); ?>><?php echo htmlspecialchars($group['name']); ?></option>
<?php
                }

                echo '</select><br />';
            }

            return true;

        case 'authors':
            if ($use_users) {
?>
            <br /><?php echo PERM_READ . ': <em>'. AUTHOR . '</em>'; ?><br />
            <select class="entryproperties_access_users" onchange="document.getElementById('properties_access_member').checked = true;" style="margin-left: 5px" multiple="multiple" name="serendipity[properties][access_users][]" size="4">
<?php
                $users = serendipity_fetchUsers('', 'hidden');
                foreach($users AS $user) {
?>
                <option value="<?php echo $user['authorid']; ?>" <?php echo (in_array($user['authorid'], $access_users) ? 'selected="selected"' : ''); ?>><?php echo htmlspecialchars($user['realname']); ?></option>
<?php
                }
                echo '</select><br />';
            }
            return true;

        case 'author':
?>
            <br /><?php echo AUTHOR; ?>:<br />
            <div class="entryproperties_access_author" style="margin-left: 10px">
                <select name="serendipity[change_author]">
                <?php
                if (isset($serendipity['POST']['change_author'])) {
                    $selected_user = $serendipity['POST']['change_author'];
                } elseif (!empty($eventData['authorid'])) {
                    $selected_user = $eventData['authorid'];
                } else {
                    $selected_user = $serendipity['authorid'];
                }

                $avail_users =& $this->getValidAuthors();

                foreach($avail_users AS $user) {
                    echo '<option value="' . $user['authorid'] . '" ' . ($selected_user == $user['authorid'] ? ' selected="selected"' : '') . '>' . htmlspecialchars($user['realname']) . '</option>' . "\n";
                }
                ?>
                </select>
            </div>
<?php
            return true;


        case 'markup':
?>
            <br /><div class="entryproperties_markup">
            <?php echo PLUGIN_EVENT_ENTRYPROPERTIES_DISABLE_MARKUP; ?><br />
            <div style="margin-left: 10px">
                <select name="serendipity[properties][disable_markups][]" multiple="multiple" size="4">
                <?php
                $plugins = serendipity_plugin_api::get_event_plugins();

                if (is_array($plugins)) {
                    // foreach() operates on copies of values, but we want to operate on references, so we use while()
                    @reset($plugins);
                    while(list($plugin, $plugin_data) = each($plugins)) {
                        if (!is_array($plugin_data['p']->markup_elements)) {
                            continue;
                        }

                        if (isset($serendipity['POST']['properties']['disable_markups']) && in_array($plugin_data['p']->instance, $serendipity['POST']['properties']['disable_markups'])) {
                            $selected = true;
                        } elseif (isset($eventData['properties']['ep_disable_markup_' . $plugin_data['p']->instance])) {
                            $selected = true;
                        } else {
                            $selected = false;
                        }

                        echo '<option ' . ($selected ? 'selected="selected"' : '') . ' value="' . $plugin_data['p']->instance . '">' . htmlspecialchars($plugin_data['p']->title) . '</option>' . "\n";
                    }
                }
                ?>
                </select>
            </div>
        </div>
<?php
            return true;

        case 'customfields':
?>
        <br /><div class="entryproperties_customfields">
            <?php
                $fields = trim($this->get_config('customfields'));
                  // Capture special characters for "," and ":"
                $special_from = array('\\,', '\\:');
                $special_to   = array(chr(0x01), chr(0x02));
                $special_read = array(',', ':');
                $fields = str_replace($special_from, $special_to, $fields);

                if (!empty($fields)) {
                    $fields = explode(',', $fields);
                }
                if (is_array($fields) && count($fields) > 0) { ?>
            <br />
            <?php echo PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS; ?>:<br />
            <em><?php echo PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1 . '<br />' . sprintf(PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3, 'serendipity_admin.php?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]=' . $this->instance); ?></em><br />
            <div style="margin-left: 10px">
                <table id="serendipity_customfields">
            <?php
                    foreach($fields AS $fieldname) {
                        $fieldparts = explode(':', $fieldname);
                        $fieldname = $fieldparts[0];
                        $fieldname = htmlspecialchars(trim($fieldname));

                        if (isset($serendipity['POST']['properties'][$fieldname])) {
                            $value = $serendipity['POST']['properties'][$fieldname];
                        } elseif (!empty($eventData['properties']['ep_' . $fieldname])) {
                            $value = $eventData['properties']['ep_' . $fieldname];
                        } else {
                            $value = trim(str_replace($special_to, $special_read, $fieldparts[1]));
                        }
            ?>
                <tr>
                    <td class="customfield_<?php echo $fieldname; ?> customfield_name"><strong><?php echo $fieldname; ?></strong></td>
                    <td class="customfield_<?php echo $fieldname; ?> customfield_value"><textarea id="prop<?php echo $fieldname; ?>" name="serendipity[properties][<?php echo $fieldname; ?>]"><?php echo htmlspecialchars($value); ?></textarea></td>
                    <td valign="top" id="ep_column_<?php echo $fieldname; ?>">
                        <script type="text/javascript" language="JavaScript">
    var epColumn       = document.getElementById('ep_column_<?php echo $fieldname; ?>');
    var epImgBtn       = document.createElement('span');
    epImgBtn.innerHTML = '<input class="serendipityPrettyButton input_button" type="button" name="insImage" value="<?php echo MEDIA ; ?>" onclick="window.open(\'serendipity_admin_image_selector.php?serendipity[htmltarget]=prop<?php echo $fieldname; ?>&amp;serendipity[filename_only]=true\', \'ImageSel\', \'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1\');" class="serendipityPrettyButton" />';
    epColumn.appendChild(epImgBtn);
</script>
                    </td>
                </tr>
            <?php
                    }
            ?>
                </table>
            </div>
            <?php
                }
            ?>
        </div>
<?php
            return true;
        }
    }

    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;
        static $is_cache = null;
        static $use_groups = null;
        static $use_users = null;
        static $ext_joins = null;

        $hooks = &$bag->get('event_hooks');

        if ($is_cache === null) {
            $is_cache   = serendipity_db_bool($this->get_config('cache', 'true'));
            $use_groups = serendipity_db_bool($this->get_config('use_groups'));
            $use_users  = serendipity_db_bool($this->get_config('use_users'));
            $ext_joins  = serendipity_db_bool($this->get_config('use_ext_joins'));
        }

        if (isset($hooks[$event])) {
            switch($event) {
                case 'frontend_entryproperties_query':
                    $eventData['and'] = $this->returnQueryCondition($is_cache);
                    return true;
                    break;

                case 'backend_display':
                    $is_sticky =    (isset($eventData['properties']['ep_is_sticky']) && serendipity_db_bool($eventData['properties']['ep_is_sticky']))
                                 || (isset($serendipity['POST']['properties']['is_sticky']) && serendipity_db_bool($serendipity['POST']['properties']['is_sticky']))
                               ? 'checked="checked"'
                               : '';

                    $no_frontpage =    (isset($eventData['properties']['ep_no_frontpage']) && serendipity_db_bool($eventData['properties']['ep_no_frontpage']))
                                 || (isset($serendipity['POST']['properties']['no_frontpage']) && serendipity_db_bool($serendipity['POST']['properties']['no_frontpage']))
                               ? 'checked="checked"'
                               : '';

                    $hiderss      =     (isset($eventData['properties']['ep_hiderss']) && serendipity_db_bool($eventData['properties']['ep_hiderss']))
                                 || (isset($serendipity['POST']['properties']['hiderss']) && serendipity_db_bool($serendipity['POST']['properties']['hiderss']))
                               ? 'checked="checked"'
                               : '';

                    $access_values = array(
                        PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE => 'private',
                        PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC  => 'public',
                        PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS => 'member',
                    );

                    if (isset($eventData['properties']['ep_access'])) {
                        $access = $eventData['properties']['ep_access'];
                    } elseif (isset($serendipity['POST']['properties']['access'])) {
                        $access = $serendipity['POST']['properties']['access'];
                    } else {
                        $access = $this->get_config('default_read', 'public');
                    }

                    if (isset($eventData['properties']['ep_access_groups'])) {
                        $access_groups = explode(';', $eventData['properties']['ep_access_groups']);
                    } elseif (isset($serendipity['POST']['properties']['access_groups'])) {
                        $access_groups = $serendipity['POST']['properties']['access_groups'];
                    } else {
                        $access_groups = array();
                    }

                    if (isset($eventData['properties']['ep_access_users'])) {
                        $access_users = explode(';', $eventData['properties']['ep_access_users']);
                    } elseif (isset($serendipity['POST']['properties']['access_users'])) {
                        $access_users = $serendipity['POST']['properties']['access_users'];
                    } else {
                        $access_users = array();
                    }

                    if (isset($eventData['properties']['ep_entrypassword'])) {
                        $password = $eventData['properties']['ep_entrypassword'];
                    } elseif (isset($serendipity['POST']['properties']['entrypassword'])) {
                        $password = $serendipity['POST']['properties']['entrypassword'];
                    } else {
                        $password = '';
                    }

?>
                    <fieldset style="margin: 5px" class="entryproperties">
                        <legend><?php echo PLUGIN_EVENT_ENTRYPROPERTIES_TITLE; ?></legend>
<?php

                    $elements = explode(',', $this->get_config('sequence'));
                    foreach($elements AS $element) {
                        $this->showBackend($element, $eventData, $is_sticky, $no_frontpage, $hiderss, $access_values, $access, $password, $use_groups, $access_groups, $use_users, $access_users);
                    }
?>
                    </fieldset>
<?php

                    return true;
                    break;

                case 'backend_sidebar_entries':
                    if ($is_cache && $serendipity['serendipityUserlevel'] >= USERLEVEL_ADMIN) {
?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="?serendipity[adminModule]=event_display&amp;serendipity[adminAction]=buildcache"><?php echo PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE; ?></a></li>
<?php
                    }
                    return true;
                    break;

                case 'backend_import_entry':
                    //TODO: (ph) Maybe handle caching?
                    if (is_array($addData) && !$addData['nl2br']){
                        $props = array();
                        $props['no_nl2br'] = 'true';
                        $this->addProperties($props, $eventData);
                    }
                break;

                case 'backend_sidebar_entries_event_display_buildcache':
                    if ($is_cache) {
                        $per_fetch = 25;
                        $page = (isset($serendipity['GET']['page']) ? $serendipity['GET']['page'] : 1);
                        $from = ($page-1)*$per_fetch;
                        $to   = ($page)*$per_fetch;
                        printf(PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO, $from, $to);
                        $entries = serendipity_fetchEntries(
                            null,
                            true,
                            $per_fetch,
                            false,
                            false,
                            'timestamp DESC',
                            '',
                            true
                        );

                        $total = serendipity_getTotalEntries();
                        printf(PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL . '<br />', $total);

                        if (is_array($entries)) {
                            foreach($entries AS $idx => $entry) {
                                printf(PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING . '<br />', $entry['id'], htmlspecialchars($entry['title']));
                                $this->updateCache($entry);
                                echo PLUGIN_EVENT_ENTRYPROPERTIES_CACHED . '<br /><br />';
                            }
                        }

                        echo '<br />';

                        if ($to < $total) {
?>
                        <script type="text/javascript">
                            if (confirm("<?php echo htmlspecialchars(PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT); ?>")) {
                                location.href = "?serendipity[adminModule]=event_display&serendipity[adminAction]=buildcache&serendipity[page]=<?php echo ($page+1); ?>";
                            } else {
                                alert("<?php echo htmlspecialchars(PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED); ?>");
                            }
                        </script>
<?php
                        } else {
                            echo '<div class="serendipity_msg_notice">' . PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE . '</div>';
                        }
                    }
                    return true;
                    break;

                case 'backend_cache_entries':
                    if (!$is_cache) {
                        return true;
                    }

                    $entries = serendipity_fetchEntries(
                        null,
                        true,
                        $serendipity['fetchLimit'],
                        false,
                        false,
                        'timestamp DESC',
                        '',
                        true
                    );

                    if (is_array($entries) && !empty($entries)) {
                        foreach($entries AS $idx => $entry) {
                            $this->updateCache($entry);
                        }
                    }
                    return true;
                    break;

                case 'backend_cache_purge':
                    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}entryproperties WHERE property LIKE 'ep_cache_%'");
                    break;

                case 'backend_entry_presave':
                    if (is_array($serendipity['POST']['properties'])) {
                        $this->applyProperties($serendipity['POST']['properties']);
                    }
                    break;

                case 'backend_publish':
                case 'backend_save':
                    if (!isset($eventData['id'])) {
                        return true;
                    }

                    if (!empty($serendipity['POST']['change_author']) && $serendipity['POST']['change_author'] != $eventData['id']) {
                        // Check again if the POSTed value is an author that the current user has "access" to.
                        $avail_users =& $this->getValidAuthors();
                        $new_authorid = (int)$serendipity['POST']['change_author'];
                        foreach($avail_users AS $user) {
                            if ($new_authorid == $user['authorid']) {
                                serendipity_db_query("UPDATE {$serendipity['dbPrefix']}entries SET authorid = " . $new_authorid . " WHERE id = " . (int)$eventData['id']);
                            }
                        }
                    }

                    if ($is_cache) {
                        // Previous calls to frontend_display used the "no_scramble" atteribute to not tinker with the data.
                        // We now need to call those plugins that have not yet operated before.
                        $to_addData = array('from' => 'entryproperties:' . $event);
                        serendipity_plugin_api::hook_event('frontend_display_cache', $eventData, $to_addData);
                        $serendipity['POST']['properties']['cache_body']     = $eventData['body'];
                        $serendipity['POST']['properties']['cache_extended'] = $eventData['extended'];
                    }

                    if (is_array($serendipity['POST']['properties']['access_groups']) && $serendipity['POST']['properties']['access'] != 'member') {
                        unset($serendipity['POST']['properties']['access_groups']);
                    }

                    if (is_array($serendipity['POST']['properties']['access_users']) && $serendipity['POST']['properties']['access'] != 'member') {
                        unset($serendipity['POST']['properties']['access_users']);
                    }

                    $this->addProperties($serendipity['POST']['properties'], $eventData);

                    return true;
                    break;

                case 'frontend_configure':
                    if (isset($serendipity['POST']['id']) && empty($serendipity['GET']['id'])) {
                        $serendipity['GET']['id']      = &$serendipity['POST']['id'];
                        $serendipity['GET']['subpage'] = &$serendipity['POST']['subpage'];
                    }
                    break;

                case 'frontend_entryproperties':
                    $and = $this->returnQueryCondition($is_cache);
                    $q = "SELECT entryid, property, value FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid IN (" . implode(', ', array_keys($addData)) . ") $and";

                    $properties = serendipity_db_query($q);
                    if (!is_array($properties)) {
                        return true;
                    }

                    foreach($properties AS $idx => $row) {
                        $eventData[$addData[$row['entryid']]]['properties'][$row['property']] = $row['value'];
                    }
                    return true;
                    break;

                case 'entry_display':
                    // PH: This is done after Garvins suggestion to patchup $eventData in case an entry
                    //     is in the process of being created. This must be done for the extended properties
                    //     to be applied in the preview.

                    if (isset($serendipity['GET']['id']) && isset($eventData[0]['properties']['ep_entrypassword'])) {

                        if ($_SESSION['entrypassword_unlocked'][$serendipity['GET']['id']] == md5($eventData[0]['properties']['ep_entrypassword']) || $eventData[0]['properties']['ep_entrypassword'] == $serendipity['POST']['entrypassword']) {
                            // Do not show login form again, once we have first enabled it.
                            $_SESSION['entrypassword_unlocked'][$serendipity['GET']['id']] = md5($eventData[0]['properties']['ep_entrypassword']);
                        } else {
                            if (is_array($eventData)) {
                                $eventData['clean_page'] = true;
                            } else {
                                $eventData = array('clean_page' => true);
                            }
                            $this->showPasswordForm = true;
                        }
                    }

                    if ($addData['preview'] && is_array($serendipity['POST']['properties']) && count($serendipity['POST']['properties']) > 0){
                        $parr = array();
                        $supported_properties = serendipity_event_entryproperties::getSupportedProperties();
                        foreach($supported_properties AS $prop_key) {
                            if (isset($serendipity['POST']['properties'][$prop_key]))
                                $eventData[0]['properties']['ep_' . $prop_key] = $serendipity['POST']['properties'][$prop_key];
                        }
                    }

                    break;

                case 'entries_header':
                    if ($this->showPasswordForm) {
                        echo $this->showPasswordform();
                    }
                    break;

                case 'frontend_fetchentries':
                case 'frontend_fetchentry':
                    $joins = array();
                    $conds = array();
                    if (!$ext_joins) {
                        return true;
                    }
                    if ($_SESSION['serendipityAuthedUser'] === true) {
                        $conds[] = " (ep_access.property IS NULL OR ep_access.value = 'member' OR ep_access.value = 'public' OR (ep_access.value = 'private' AND e.authorid = " . (int)$serendipity['authorid'] . ")) ";

                        if ($use_groups) {
                            $mygroups  = serendipity_checkPermission(null, null, true);
                            $groupcond = array();
                            foreach((array)$mygroups AS $mygroup) {
                                $groupcond[] .= "ep_access_groups.value LIKE '%;$mygroup;%'";
                            }
                            if (count($groupcond) > 0) {
                                $conds[] = " (ep_access_groups.property IS NULL OR (ep_access.value = 'member' AND (" . implode(' OR ', $groupcond) . ")))";
                            }
                        }

                        if ($use_users) {
                            $conds[] = " (ep_access_users.property IS NULL OR (ep_access.value = 'member' AND (ep_access_users.value LIKE '%;" . (int)$serendipity['authorid'] . ";%' OR e.authorid = " . (int)$serendipity['authorid'] . "))) ";
                        }
                    } else {
                        $conds[] = " (ep_access.property IS NULL OR ep_access.value = 'public')";
                    }

                    if (!isset($serendipity['GET']['viewAuthor']) && !isset($serendipity['plugin_vars']['tag']) && !isset($serendipity['GET']['category']) && !isset($serendipity['GET']['adminModule']) && $event == 'frontend_fetchentries' && $addData['source'] != 'search') {
                        $conds[] = " (ep_no_frontpage.property IS NULL OR ep_no_frontpage.value != 'true') ";
                        $joins[] = " LEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties ep_no_frontpage
                                                  ON (e.id = ep_no_frontpage.entryid AND ep_no_frontpage.property = 'ep_no_frontpage')";
                    }

                    if (count($conds) > 0) {
                        $cond = implode(' AND ', $conds);
                        if (empty($eventData['and'])) {
                            $eventData['and'] = " WHERE $cond ";
                        } else {
                            $eventData['and'] .= " AND $cond ";
                        }
                    }

                    $conds = array();
                    if ((!isset($addData['noSticky']) || $addData['noSticky'] !== true) && !isset($serendipity['skipSticky'])) {
                        $conds[] = 'ep_sticky.value AS orderkey,';
                    } else {
                        $conds[] = 'e.isdraft AS orderkey,';
                    }

                    if ($is_cache && (!isset($addData['noCache']) || !$addData['noCache'])) {
                        $conds[] = 'ep_cache_extended.value AS ep_cache_extended,';
                        $conds[] = 'ep_cache_body.value     AS ep_cache_body,';
                    }

                    $cond = implode("\n", $conds);
                    if (empty($eventData['addkey'])) {
                        $eventData['addkey'] = $cond;
                    } else {
                        $eventData['addkey'] .= $cond;
                    }

                    if ($serendipity['dbType'] == 'postgres') {
                        // PostgreSQL is a bit weird here. Empty columns with NULL or "" content for
                        // orderkey would get sorted on top when using DESC, and only after those
                        // the "true" content would be inserted. Thus we order ASC in postgreSQL,
                        // and silently wonder. Thanks to Nate Johnston for working this out!
                        $cond = 'orderkey ASC';
                    } else {
                        $cond = 'orderkey DESC';
                    }

                    if (empty($eventData['orderby'])) {
                        $eventData['orderby'] = $cond;
                    } else {
                        $eventData['orderby'] = $cond . ', ' . $eventData['orderby'];
                    }

                    if ($is_cache && (!isset($addData['noCache']) || !$addData['noCache'])) {
                        $joins[] = " LEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties ep_cache_extended
                                                  ON (e.id = ep_cache_extended.entryid AND ep_cache_extended.property = 'ep_cache_extended')";
                        $joins[] = " LEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties ep_cache_body
                                                  ON (e.id = ep_cache_body.entryid AND ep_cache_body.property = 'ep_cache_body')";
                    }
                    $joins[] = " LEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties ep_access
                                              ON (e.id = ep_access.entryid AND ep_access.property = 'ep_access')";
                    if ($use_groups) {
                        $joins[] = " LEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties ep_access_groups
                                                  ON (e.id = ep_access_groups.entryid AND ep_access_groups.property = 'ep_access_groups')";
                    }

                    if ($use_users) {
                        $joins[] = " LEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties ep_access_users
                                                  ON (e.id = ep_access_users.entryid AND ep_access_users.property = 'ep_access_users')";
                    }

                    if ((!isset($addData['noSticky']) || $addData['noSticky'] !== true) && !isset($serendipity['skipSticky'])) {
                        $joins[] = " LEFT JOIN {$serendipity['dbPrefix']}entryproperties ep_sticky
                                            ON (e.id = ep_sticky.entryid AND ep_sticky.property = 'ep_is_sticky')";
                    }

                    $cond = implode("\n", $joins);
                    if (empty($eventData['joins'])) {
                        $eventData['joins'] = $cond;
                    } else {
                        $eventData['joins'] .= $cond;
                    }

                    return true;
                    break;

                case 'frontend_entries_rss':
                    if (is_array($eventData)) {
                        foreach($eventData AS $idx => $entry) {
                            if (is_array($entry['properties']) && isset($entry['properties']['ep_hiderss']) && $entry['properties']['ep_hiderss']) {
                                unset($eventData[$idx]['body']);
                                unset($eventData[$idx]['extended']);
                                unset($eventData[$idx]['exflag']);
                            }
                        }
                    }
                    return true;
                    break;

                case 'backend_plugins_new_instance':
                    // This hook will always push the entryproperties plugin as last in queue.
                    // Happens always when a new plugin is added.
                    // This is important because of its caching mechanism!

                    // Fetch maximum sort_order value. This will be the new value of our current plugin.
                    $q  = "SELECT MAX(sort_order) as sort_order_max FROM {$serendipity['dbPrefix']}plugins WHERE placement = '" . $addData['default_placement'] . "'";
                    $rs  = serendipity_db_query($q, true, 'num');

                    // Fetch current sort_order of current plugin.
                    $q   = "SELECT sort_order FROM {$serendipity['dbPrefix']}plugins WHERE name = '" . $this->instance . "'";
                    $cur = serendipity_db_query($q, true, 'num');

                    // Decrease sort_order of all plugins after current plugin by one.
                    $q = "UPDATE {$serendipity['dbPrefix']}plugins SET sort_order = sort_order - 1 WHERE placement = '" . $addData['default_placement'] . "' AND sort_order > " . intval($cur[0]);
                    serendipity_db_query($q);

                    // Set current plugin as last plugin in queue.
                    $q = "UPDATE {$serendipity['dbPrefix']}plugins SET sort_order = " . intval($rs[0]) . " WHERE name = '" . $this->instance . "'";
                    serendipity_db_query($q);

                    return true;
                    break;

                default:
                    return false;
                    break;
            }
        } else {
            return false;
        }
    }
}

/* vim: set sts=4 ts=4 expandtab : */
?>
