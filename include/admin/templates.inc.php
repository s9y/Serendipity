<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('adminTemplates')) {
    return;
}

class template_option {
    var $config = null;
    var $values = null;
    var $keys   = null;

    function introspect_config_item($item, &$bag) {
        foreach($this->config[$item] AS $key => $val) {
            $bag->add($key, $val);
        }
    }

    function get_config($item) {
        return $this->values[$item];
    }

    function set_config($item, $value) {
        global $serendipity;

        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}options
                                    WHERE okey = 't_" . serendipity_db_escape_string($serendipity['template']) . "'
                                      AND name = '" . serendipity_db_escape_string($item) . "'");

        if ($this->config[$item]['scope'] == 'global') {
            serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}options
                                   WHERE okey = 't_global'
                                     AND name = '" . serendipity_db_escape_string($item) . "'");
            serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}options (okey, name, value)
                                       VALUES ('t_global', '" . serendipity_db_escape_string($item) . "', '" . serendipity_db_escape_string($value) . "')");
        } else {
            serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}options
                                   WHERE okey = 't_" . serendipity_db_escape_string($serendipity['template']) . "'
                                     AND name = '" . serendipity_db_escape_string($item) . "'");
            serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}options (okey, name, value)
                                       VALUES ('t_" . serendipity_db_escape_string($serendipity['template']) . "', '" . serendipity_db_escape_string($item) . "', '" . serendipity_db_escape_string($value) . "')");
        }
        return true;
    }

    function import(&$config) {
        foreach($config AS $key => $item) {
            $this->config[$item['var']] = $item;
            $this->keys[$item['var']]   = $item['var'];
        }
    }
}

if ($serendipity['GET']['adminAction'] == 'install' ) {
    serendipity_plugin_api::hook_event('backend_templates_fetchtemplate', $serendipity);

    $themeInfo = serendipity_fetchTemplateInfo(htmlspecialchars($serendipity['GET']['theme']));

    // A separate hook is used post installation, for plugins to possibly perform some actions
    serendipity_plugin_api::hook_event('backend_templates_install', $serendipity['GET']['theme'], $themeInfo);

    serendipity_set_config_var('template', htmlspecialchars($serendipity['GET']['theme']));
    serendipity_set_config_var('template_engine', isset($themeInfo['engine']) ? $themeInfo['engine'] : 'default');

    echo '<div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_success.png') . '" alt="" />' . sprintf(TEMPLATE_SET, htmlspecialchars($serendipity['GET']['theme'])) .'</div>';
}
?>

<?php
if ( @file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'] .'/layout.php') ) {
    echo '<div class="serendipityAdminMsgNote"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_note.png') . '" alt="" />'. WARNING_TEMPLATE_DEPRECATED .'</div>';
}

echo '<h3>' . STYLE_OPTIONS . ' (' . $serendipity['template'] . ')</h3>';
if (file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'] . '/config.inc.php')) {
    serendipity_smarty_init();
    include_once $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'] . '/config.inc.php';
}

if (is_array($template_config)) {
    serendipity_plugin_api::hook_event('backend_templates_configuration_top', $template_config);

    if ($serendipity['POST']['adminAction'] == 'configure' &&  serendipity_checkFormToken()) {
        $storage = new template_option();
        $storage->import($template_config);
        foreach($serendipity['POST']['template'] AS $option => $value) {
            $storage->set_config($option, $value);
        }
        echo '<div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_success.png') . '" alt="" />' . DONE .': '. sprintf(SETTINGS_SAVED_AT, serendipity_strftime('%H:%M:%S')) . '</div>';
    }

    echo '<form method="post" action="serendipity_admin.php">';
    echo '<input type="hidden" name="serendipity[adminModule]" value="templates" />';
    echo '<input type="hidden" name="serendipity[adminAction]" value="configure" />';
    echo serendipity_setFormToken();

    include S9Y_INCLUDE_PATH . 'include/functions_plugins_admin.inc.php';

    $template_vars =& serendipity_loadThemeOptions($template_config);

    $template_options = new template_option();
    $template_options->import($template_config);
    $template_options->values =& $template_vars;

    serendipity_plugin_config(
        $template_options,
        $template_vars,
        $serendipity['template'],
        $serendipity['template'],
        $template_options->keys,
        true,
        true,
        true,
        true,
        'template',
        $template_config_groups
    );
    echo '</form><br />';
    serendipity_plugin_api::hook_event('backend_templates_configuration_bottom', $template_config);
} else {
    echo '<p>' . STYLE_OPTIONS_NONE . '</p>';
    serendipity_plugin_api::hook_event('backend_templates_configuration_none', $template_config);
}

echo '<h3>' . SELECT_TEMPLATE . '</h3>';
?>
<br />
<?php
    $i = 0;
    $stack = array();
    serendipity_plugin_api::hook_event('backend_templates_fetchlist', $stack);
    $themes = serendipity_fetchTemplates();
    foreach($themes AS $theme) {
        $stack[$theme] = serendipity_fetchTemplateInfo($theme);
    }
    ksort($stack);

    foreach ($stack as $theme => $info) {
        $i++;

        /* Sorry, but we don't display engines */
        if ( strtolower($info['engine']) == 'yes' ) {
            continue;
        }

        $preview = '';
        $preview_link = false;
        if (file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $theme . '/preview_fullsize.jpg')) {
            $preview .= '<a href="' . $serendipity['baseURL'] . $serendipity['templatePath'] . $theme . '/preview_fullsize.jpg" target="_blank">';
            $preview_link = true;
        } elseif (!empty($info['preview_fullsizeURL'])) {
            $preview .= '<a href="' . $info['preview_fullsizeURL'] . '" target="_blank">';
            $preview_link = true;

#        } else {
#            echo "No large preview";
        }

        if (file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $theme . '/preview.png')) {
            $preview .= '<img src="' . $serendipity['templatePath'] . $theme . '/preview.png" width="100" style="border: 1px #000000 solid" />';
        } elseif (!empty($info['previewURL'])) {
            $preview .= '<img src="' . $info['previewURL'] . '" width="100" style="border: 1px #000000 solid" />';
        } else {
            $preview .= '&nbsp;';
        }

        if ($preview_link) {
            $preview .= '</a>';
        }

        if (empty($info['customURI'])) {
            $info['customURI'] = '';
        }

        $unmetRequirements = array();
        if ( isset($info['require serendipity']) && version_compare($info['require serendipity'], serendipity_getCoreVersion($serendipity['version']), '>') ) {
            $unmetRequirements[] = 'Serendipity '. $info['require serendipity'];
        }

        /* TODO: Smarty versioncheck */

        $class = (($i % 2 == 0) ? 'even' : 'uneven');

?>
<div class="serendipity_admin_list_item serendipity_admin_list_item_<?php echo $class ?>">
    <table width="100%" id="serendipity_theme_<?php echo $theme; ?>">
        <tr>
            <td colspan="2"><span class="serendipityTemplateSelectName"><strong><?php echo $info['name']; ?></strong></span></td>
            <td valign="middle" align="center" width="70" rowspan="2">
<?php
    if ( $serendipity['template'] != $theme ) {
        if ( !sizeof($unmetRequirements) ) {
?>
            <a href="?serendipity[adminModule]=templates&amp;serendipity[adminAction]=install&amp;serendipity[theme]=<?php echo $theme . $info['customURI']; ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/install_now' . $info['customIcon'] . '.png') ?>" alt="<?php echo SET_AS_TEMPLATE ?>" title="<?php echo SET_AS_TEMPLATE ?>" border="0" /></a>
<?php   } else { ?>
        <span class="serendipityTemplateSelectUnmetRequirements" style="color: #cccccc"><?php echo sprintf(UNMET_REQUIREMENTS, implode(', ', $unmetRequirements)); ?></span>
<?php
        }
    } ?>
            </td>
        </tr>

        <tr>
            <td width="100" style="padding-left: 10px"><?php echo $preview; ?></td>
            <td valign="top">
                <span class="serendipityTemplateSelectDetails"><?php echo AUTHOR;       ?>: <?php echo $info['author'];?></span><br />
                <span class="serendipityTemplateSelectDetails"><?php echo LAST_UPDATED; ?>: <?php echo $info['date'];  ?></span><br />
                <span class="serendipityTemplateSelectDetails"><?php echo CUSTOM_ADMIN_INTERFACE; ?>: <?php echo $info['custom_admin_interface']; ?></span><br />
            </td>
        </tr>
    </table>
</div>
<?php
    }
