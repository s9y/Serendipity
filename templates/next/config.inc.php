<?php
if (IN_serendipity !== true) { die ("Don't hack!"); }

@serendipity_plugin_api::load_language(dirname(__FILE__));

$serendipity['smarty']->assign(array('currpage'  => "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
                                     'currpage2' => $_SERVER['REQUEST_URI']));

if (!function_exists('serendipity_smarty_html5time')) {
    function serendipity_smarty_html5time($timestamp) {
        return date("c", $timestamp);
    }

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
      'var'           => 'infonext',
      'name'          => 'infonext',
      'type'          => 'custom',
      'custom'        => NEXT_INSTR,
    ),
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
        'name' => NEXT_HEADER_IMG,
        'type' => 'media',
        'default' => serendipity_getTemplateFile('header.jpg', 'serendipityHTTPPath', true)
    ),
    array(
        'var' => 'webfonts',
        'name' => NEXT_WEBFONTS,
        'type' => 'select',
        'default' => 'none',
        'select_values' => array('none' => NEXT_NOWEBFONT,
                                'osans' => 'Open Sans',
                                'ssans' => 'Source Sans Pro',
                                'rsans' => 'Roboto',
                                'lsans' => 'Lato',
                                'mserif' => 'Merriweather',
                                'dserif' => 'Droid Serif')
    ),
    array(
        'var' => 'refcomments',
        'name' => NEXT_REFCOMMENTS,
        'type' => 'boolean',
        'default' => false
    ),
    array(
        'var' => 'use_corenav',
        'name' => NEXT_USE_CORENAV,
        'type' => 'boolean',
        'default' => true
    )
);

$template_config_groups = NULL;
$template_global_config = array('navigation' => true);
$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option'], true);
serendipity_loadGlobalThemeOptions($template_config, $template_loaded_config, $template_global_config);

if ($_SESSION['serendipityUseTemplate']) {
    $template_loaded_config['use_corenav'] = false;
}
