<?php
if (IN_serendipity !== true) { die ("Don't hack!"); }

@serendipity_plugin_api::load_language(dirname(__FILE__));

$serendipity['smarty']->assign(array('currpage'  => "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
                                     'currpage2' => $_SERVER['REQUEST_URI']));

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
       'var' => 'bs_fluid',
       'name' => BS_FLUID,
       'type' => 'boolean',
       'default' => false
    ),
    array(
        'var' => 'bs_navbar_type',
        'name' => BS_NAVBAR_TYPE,
        'type' => 'select',
        'default' => 'default',
        'select_values' => array('default' => BS_DEFAULT,
                                'fixed-top' => BS_TOP,
                                'fixed-bottom' => BS_BOTTOM,
                                'sticky-top' => BS_STICKY)
    ),
    array(
        'var' => 'bs_navbar_style',
        'name' => BS_NAVBAR_STYLE,
        'type' => 'select',
        'default' => 'light',
        'select_values' => array('light' => BS_LIGHT,
                                'dark' => BS_DARK,
                                'primary' => BS_PRIMARY)
    ),
    array(
        'var' => 'bs_jumbotron_type',
        'name' => BS_JUMBOTRON_TYPE,
        'type' => 'select',
        'default' => 'large',
        'select_values' => array('large' => BS_LARGE,
                                'small' => BS_SMALL,
                                'compact' => BS_COMPACT,
                                'none' => BS_NONE)
    ),
    array(
        'var' => 'bs_jumbotron_style',
        'name' => BS_JUMBOTRON_STYLE,
        'type' => 'select',
        'default' => 'primary',
        'select_values' => array('light' => BS_LIGHT,
                                'dark' => BS_DARK,
                                'primary' => BS_PRIMARY)
    ),
    array(
       'var' => 'bs_rss',
       'name' => BS_RSS,
       'type' => 'boolean',
       'default' => true
    ),
    array(
       'var' => 'use_corenav',
       'name' => USE_CORENAV,
       'type' => 'boolean',
       'default' => true
    )
);

$template_global_config = array('navigation' => true);
$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option'], true);
serendipity_loadGlobalThemeOptions($template_config, $template_loaded_config, $template_global_config);

if ($_SESSION['serendipityUseTemplate']) {
    $template_loaded_config['use_corenav'] = false;
}