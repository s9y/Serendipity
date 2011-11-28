<?php
if (IN_serendipity !== true) { die ("Don't hack!"); }

@serendipity_plugin_api::load_language(dirname(__FILE__));

$serendipity['smarty']->assign(array('currpage'  => "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
                                     'currpage2' => $_SERVER['REQUEST_URI']));

function serendipity_plugin_api_event_hook($event, &$bag, &$eventData, $addData = null) {
   global $serendipity;
   switch($event) { case 'frontend_footer': echo '<!--PLUGIN API-->'; }
   return true;
}

function serendipity_smarty_html5time($timestamp) {
   return date("c", $timestamp);
}

$serendipity['smarty']->register_modifier('serendipity_smarty_html5time', 'serendipity_smarty_html5time');

$template_config = array(
   array(
       'var' => 'date_format',
       'name' => GENERAL_PLUGIN_DATEFORMAT . " (http://php.net/strftime)",
       'type' => 'select',
       'default' => DATE_FORMAT_ENTRY,
       'select_values' => array(DATE_FORMAT_ENTRY => DATE_FORMAT_ENTRY,
                                '%a, %e. %B %Y' => '%a, %e. %B %Y',
                                '%d-%m-%y' => '%d-%m-%y',
                                '%m-%d-%y' => '%m-%d-%y',
                                '%a %d-%m-%y' => '%a %d-%m-%y',
                                '%a %m-%d-%y' => '%a %m-%d-%y',
                                '%b %d' => '%b %d',
                                "%b %d '%y" => "%b %d '%y")
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
                                'ubuntu' => 'Ubuntu')
   ),
   array(
       'var' => 'userstyles',
       'name' => TWOK11_USERSTYLES,
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

$template_global_config = array('navigation' => true);
$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option'], true);
serendipity_loadGlobalThemeOptions($template_config, $template_loaded_config, $template_global_config);
