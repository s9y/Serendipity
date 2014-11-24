<?php
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

if ($serendipity['GET']['adminAction'] == 'install' || $serendipity['GET']['adminAction'] == 'install-frontend' || $serendipity['GET']['adminAction'] == 'install-backend') {
    serendipity_plugin_api::hook_event('backend_templates_fetchtemplate', $serendipity);

    $themeInfo = serendipity_fetchTemplateInfo(serendipity_specialchars($serendipity['GET']['theme']));

    // A separate hook is used post installation, for plugins to possibly perform some actions
    serendipity_plugin_api::hook_event('backend_templates_install', $serendipity['GET']['theme'], $themeInfo);

    if ($serendipity['GET']['adminAction'] == 'install' || $serendipity['GET']['adminAction'] == 'install-frontend') {
        serendipity_set_config_var('template', serendipity_specialchars($serendipity['GET']['theme']));
    }

    if ($serendipity['GET']['adminAction'] == 'install-backend' && $themeInfo['custom_admin_interface'] == YES) {
        serendipity_set_config_var('template_backend', serendipity_specialchars($serendipity['GET']['theme']));
    } else {
        // template_engine was set by default to default, which screws up the fallback chain (to the default-template first)
        // The "Engine" now only applies to FRONTEND themes. Backend themes will always fall back to our default backend theme only, to ensure proper backend operation.
        serendipity_set_config_var('template_engine', null);
        if ($themeInfo['engine']) {
            serendipity_set_config_var('template_engine', $themeInfo['engine']);
        }
    }
    serendipity_set_config_var('last_template_change', time());

    $data["adminAction"] = "install";
    $data["install_template"] = serendipity_specialchars($serendipity['GET']['theme']);
}

if ( @file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'] .'/layout.php') ) {
    $data["deprecated"] = true;
}

$data["cur_template"]         = $serendipity['template'];
$data["cur_template_backend"] = $serendipity['template_backend'];
$data['cur_template_info']    = serendipity_fetchTemplateInfo($serendipity['template']);

// NOTE: config.inc.php currently only applies to frontend configuration. Backend configuration is not planned yet, and would preferrably use a "config_backend.inc.php" file!
if (file_exists($serendipity['serendipityPath'] . $serendipity['templatePath'] . $data['cur_template_info']['custom_config_engine'] . '/config.inc.php')) {
    serendipity_smarty_init();
    $old_template_config_groups = $template_config_groups;
    include_once $serendipity['serendipityPath'] . $serendipity['templatePath'] . $data['cur_template_info']['custom_config_engine'] . '/config.inc.php';
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

foreach($themes AS $theme) {
    $stack[$theme] = serendipity_fetchTemplateInfo($theme);
}
ksort($stack);


foreach ($stack as $theme => $info) {
    /* Sorry, but we don't display engines */
    if ( strtolower($info['engine']) == 'yes') {
        continue;
    }
    $data['templates'][$theme]['info'] = $info;

    foreach(array('', '_backend') as $backendId) {

        if (file_exists($serendipity["serendipityPath"] . $serendipity["templatePath"] . $theme . "/preview${backendId}_fullsize.jpg")) {
            $data["templates"][$theme]["fullsize${backendId}_preview"] = $serendipity["baseURL"] . $serendipity["templatePath"] . $theme . "/preview${backendId}_fullsize.jpg";
        } elseif (!empty($info["preview{$backendId}_fullsizeURL"])) {   // preview{$backendId}_fullsizeURL is not actually set yet in spartacus
            if (file_exists($serendipity["serendipityPath"] . "/templates_c/template_cache/". $theme ."{$backendId}.jpg")) {
                $data["templates"][$theme]["fullsize${backendId}_preview"]  = $serendipity["baseURL"] . "templates_c/template_cache/". $theme ."{$backendId}.jpg";
            } else {
                $data["templates"][$theme]["fullsize${backendId}_preview"] = $info["preview{$backendId}_fullsizeURL"];
            }
        }

        $previewType = '.png';
        if ($backendId) {
            $previewType = '.jpg';
        }

        if (file_exists($serendipity["serendipityPath"] . $serendipity["templatePath"] . $theme . "/preview${backendId}${previewType}")) {
            $data["templates"][$theme]["preview${backendId}"] = $serendipity["templatePath"] . $theme . "/preview${backendId}${previewType}";
        } elseif (!empty($info["previewURL"])) {
            $data["templates"][$theme]["preview${backendId}"] = $info["previewURL${backendId}"] ;
        }
    }

    $unmetRequirements = array();
    if ( isset($info['require serendipity']) && version_compare($info['require serendipity'], serendipity_getCoreVersion($serendipity['version']), '>') ) {
        $unmetRequirements[] = 'Serendipity '. $info['require serendipity'];
        $data['templates'][$theme]['unmetRequirements'] = sprintf(UNMET_REQUIREMENTS, implode(', ', $unmetRequirements));
    }
}

$data['cur_tpl']         = $data['templates'][$data['cur_template']];
$data['cur_tpl_backend'] = $data['templates'][$data['cur_template_backend']];

unset($data['templates'][$data['cur_template']]);

echo serendipity_smarty_show('admin/templates.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */