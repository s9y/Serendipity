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

$data = array();

if ($serendipity['GET']['adminAction'] == 'editConfiguration') {
    $data["adminAction"] = "editConfiguration";
}

if ($serendipity['GET']['adminAction'] == 'install' ) {
    serendipity_plugin_api::hook_event('backend_templates_fetchtemplate', $serendipity);

    $themeInfo = serendipity_fetchTemplateInfo(htmlspecialchars($serendipity['GET']['theme']));

    serendipity_set_config_var('template', htmlspecialchars($serendipity['GET']['theme']));
    serendipity_set_config_var('template_engine', isset($themeInfo['engine']) ? $themeInfo['engine'] : 'default');
    serendipity_set_config_var('last_template_change', time());

    $data["adminAction"] = "install";
    $data["install_template"] = htmlspecialchars($serendipity['GET']['theme']);
    
}

if ( @file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'] .'/layout.php') ) {
    $data["deprecated"] = true;
}

$data["cur_template"] = $serendipity['template'];

if (file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'] . '/config.inc.php')) {
    serendipity_smarty_init();
    $old_template_config_groups = $template_config_groups;
    include_once $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'] . '/config.inc.php';
    // in case of theme switch, check to unset config_group array
    if ($serendipity['GET']['adminAction'] == 'install' && $serendipity['GET']['adminModule'] == 'templates') {
        // array diff - but do not do this for bulletproof, as this is the only one which needs them in case of reloads (temporary)
        if($old_template_config_groups === $template_config_groups && $serendipity['GET']['theme'] != 'bulletproof') {
            $template_config_groups = NULL; // force destroy previouses config_group array!
        }
    }
    unset($old_template_config_groups);
} else {
    if ($serendipity['GET']['adminAction'] == 'install' && $serendipity['GET']['adminModule'] == 'templates') {
        #include_once $serendipity['serendipityPath'] . $serendipity['templatePath'] . '/default/config_fallback.inc.php';
        $template_config_groups = NULL;
        $template_config        = NULL;
        $template_loaded_config = NULL;
    }
}


if (is_array($template_config)) {
    serendipity_plugin_api::hook_event('backend_templates_configuration_top', $template_config);
    $data["has_config"] = true;

    if ($serendipity['POST']['adminAction'] == 'configure' &&  serendipity_checkFormToken()) {
        $storage = new template_option();
        $storage->import($template_config);
        foreach($serendipity['POST']['template'] AS $option => $value) {
            $storage->set_config($option, $value);
        }
        $data["adminAction"] = "configure";
        $data["save_time"] = sprintf(SETTINGS_SAVED_AT, serendipity_strftime('%H:%M:%S'));
    }

    $data["form_token"] = serendipity_setFormToken();

    include_once S9Y_INCLUDE_PATH . 'include/functions_plugins_admin.inc.php';

    $template_vars =& serendipity_loadThemeOptions($template_config);
    
    $template_options = new template_option();
    $template_options->import($template_config);
    $template_options->values =& $template_vars;

    $data["configuration"] = serendipity_plugin_config(
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
    
    serendipity_plugin_api::hook_event('backend_templates_configuration_bottom', $template_config);
} else {
    serendipity_plugin_api::hook_event('backend_templates_configuration_none', $template_config);
}

$i = 0;
$stack = array();
serendipity_plugin_api::hook_event('backend_templates_fetchlist', $stack);
$themes = serendipity_fetchTemplates();
$data['templates'] = array();
$data['templates'][$theme] = array();
foreach($themes AS $theme) {
    $stack[$theme] = serendipity_fetchTemplateInfo($theme);
}
ksort($stack);


foreach ($stack as $theme => $info) {
    $data['templates'][$theme]['info'] = $info;
    /* Sorry, but we don't display engines */
    if ( strtolower($info['engine']) == 'yes' ) {
        continue;
    }

    if (file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $theme . '/preview_fullsize.jpg')) {
        $data['templates'][$theme]['fullsize_preview'] = $serendipity['baseURL'] . $serendipity['templatePath'] . $theme . '/preview_fullsize.jpg';
    } elseif (!empty($info['preview_fullsizeURL'])) {
        if (file_exists($serendipity['serendipityPath'] . '/templates_c/template_cache/'. $theme .'.jpg')) {
            $data['templates'][$theme]['fullsize_preview']  = $serendipity['baseURL'] . 'templates_c/template_cache/'. $theme .'.jpg';
        } else {
            $data['templates'][$theme]['fullsize_preview'] = $info['preview_fullsizeURL'];
        }
    }

    if (file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $theme . '/preview.png')) {
        $data['templates'][$theme]['preview'] = $serendipity['templatePath'] . $theme . '/preview.png';
    } elseif (!empty($info['previewURL'])) {
        $data['templates'][$theme]['preview'] = $info['previewURL'] ;
    }

    $unmetRequirements = array();
    if ( isset($info['require serendipity']) && version_compare($info['require serendipity'], serendipity_getCoreVersion($serendipity['version']), '>') ) {
        $unmetRequirements[] = 'Serendipity '. $info['require serendipity'];
        $data['templates'][$theme]['unmetRequirements'] = sprintf(UNMET_REQUIREMENTS, implode(', ', $unmetRequirements));
    }

    /* TODO: Smarty versioncheck */
}

echo serendipity_smarty_show('admin/templates.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
