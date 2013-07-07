<?php
if (IN_serendipity !== true) { die ("Don't hack!"); }

@serendipity_plugin_api::load_language(dirname(__FILE__));

$serendipity['smarty']->assign(array('currpage'  => "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
                                     'currpage2' => $_SERVER['REQUEST_URI']));

if (!function_exists('serendipity_smarty_html5time')) {
    function serendipity_smarty_html5time($timestamp) { return date("c", $timestamp); }

    if( defined('Smarty::SMARTY_VERSION') ) {
        $serendipity['smarty']->registerPlugin('modifier', 'serendipity_html5time', 'serendipity_smarty_html5time');
    } else {
        // old Smarty 2 syntax
        $serendipity['smarty']->register_modifier('serendipity_html5time', 'serendipity_smarty_html5time');
    }
}

if (class_exists('serendipity_event_spamblock')) {
    $required_fieldlist = serendipity_db_query("SELECT value FROM {$serendipity['dbPrefix']}config WHERE name LIKE '%spamblock%required_fields'", true, 'assoc');
} elseif (class_exists('serendipity_event_commentspice')) {
    $required_fieldlist = serendipity_db_query("SELECT value FROM {$serendipity['dbPrefix']}config WHERE name LIKE '%commentspice%required_fields'", true, 'assoc');
}
if (is_array($required_fieldlist)) {
    $required_fields = explode(',', $required_fieldlist['value']);
    $smarty_required_fields = array();

    foreach($required_fields AS $required_field) {
        $required_field = trim($required_field);

        if (empty($required_field)) continue;
        $smarty_required_fields[$required_field] = $required_field;
    }

    $serendipity['smarty']->assign('required_fields', $smarty_required_fields);
}

$template_config = array(
    array(
        'var' => 'date_format',
        'name' => GENERAL_PLUGIN_DATEFORMAT . " (http://php.net/strftime)",
        'type' => 'select',
        'default' => DATE_FORMAT_ENTRY,
        'select_values' => array(DATE_FORMAT_ENTRY => DATE_FORMAT_ENTRY,
                                '%A, %e. %B %Y' => '%A, %e. %B %Y',
                                '%a, %e. %B %Y' => '%a, %e. %B %Y',
                                '%e. %B %Y' => '%e. %B %Y',
                                '%d.%m.%y' => '%d.%m.%y',
                                '%d.%m.%Y' => '%d.%m.%Y',
                                '%A, %m/%d/%Y' => '%A, %m/%d/%Y',
                                '%a, %m/%d/%y' => '%a, %m/%d/%y',
                                '%m/%d/%y' => '%m/%d/%y',
                                '%m/%d/%Y' => '%m/%d/%Y',
                                '%Y-%m-%d' => '%Y-%m-%d')
    ),
    array(
        'var' => 'header_img',
        'name' => TWOK11_HEADER_IMG,
        'type' => 'media',
        'default' => serendipity_getTemplateFile('header.jpg')
    ),
    array(
        'var' => 'webfonts',
        'name' => TWOK11_WEBFONTS,
        'type' => 'select',
        'default' => 'none',
        'select_values' => array('none' => TWOK11_NOWEBFONT,
                                'droid' => 'Droid Sans',
                                'ptsans' => 'PT Sans',
                                'osans' => 'Open Sans',
                                'cabin' => 'Cabin',
                                'ubuntu' => 'Ubuntu',
                                'dserif' => 'Droid Serif')
    ),
    array(
        'var' => 'userstyles',
        'name' => TWOK11_USERSTYLES,
        'type' => 'boolean',
        'default' => false
    ),
    array(
        'var' => 'imgstyle',
        'name' => TWOK11_IMGSTYLE,
        'type' => 'select',
        'default' => 'plain-images',
        'select_values' => array('none' => TWOK11_IMGSTYLE_NONE,
                                'plain-images' => TWOK11_IMGSTYLE_BORDER,
                                'fancy-images' => TWOK11_IMGSTYLE_SHADOW)
    ),
    array(
        'var' => 'refcomments',
        'name' => TWOK11_REFCOMMENTS,
        'type' => 'boolean',
        'default' => false
    ),
    array(
        'var' => 'use_corenav',
        'name' => TWOK11_USE_CORENAV,
        'type' => 'boolean',
        'default' => true
    )
);

$template_config_groups = NULL;
$template_global_config = array('navigation' => true);
$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option'], true);
serendipity_loadGlobalThemeOptions($template_config, $template_loaded_config, $template_global_config);

function serendipity_plugin_api_pre_event_hook($event, &$bag, &$eventData, &$addData) {
    global $serendipity;
    // Check what Event is coming in, only react to those we want.
    switch($event) {
        case 'external_plugin':
            switch ($eventData) {
                case 'admin/serendipity_editor.js':
                    header('Content-Type: application/javascript');
                    $data = array('token_url' => serendipity_setFormToken("url"));
                    echo serendipity_smarty_show('admin/serendipity_editor.js.tpl', $data);
                break;
            }
        return true;
        break;
    }
}
