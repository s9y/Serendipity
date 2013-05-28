<?php
if (IN_serendipity !== true) {
  die ("Don't hack!");
}

$probelang = dirname(__FILE__) . '/' . $serendipity['charset'] . 'lang_' . $serendipity['lang'] . '.inc.php';

if (file_exists($probelang)) {
    include $probelang;
}

include dirname(__FILE__) . '/lang_en.inc.php';

$serendipity['smarty']->assign(array('currpage'=> "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
$serendipity['smarty']->assign(array('currpage2'=> $_SERVER['REQUEST_URI']));

function serendipity_plugin_api_event_hook($event, &$bag, &$eventData, $addData = null) {
    global $serendipity;
    
    switch($event) {
        case 'frontend_footer':
            echo '<!--PLUGIN API-->';
    }

    return true;
}


if ($serendipity['GET']['adminModule'] == 'templates' || $serendipity['POST']['adminModule'] == 'templates' || $serendipity['GET']['adminAction'] == 'cattemplate') {
    $css_files = glob(dirname(__FILE__) . '/*_style.css');
    foreach($css_files AS $css_file) {
        $css_file = str_replace('_style.css', '', basename($css_file));
        if (!isset($colorsets[$css_file])) {
            $colorsets[$css_file] = $css_file;
        }
    }
}

$template_config_groups = array(
    THEME_COLORSET  => array('colorset', 'userstylesheet', 'layouttype', 'jscolumns'),
    THEME_HEADER    => array('custheader', 'headerimage', 'headertype')
);

$template_config = array(
    array(
        'var'           => 'colorset',
        'name'          => THEME_COLORSET,
        'type'          => 'select',
        'default'       => 'default',
        'select_values' => $colorsets
    ),
    array(
        'var'           => 'userstylesheet',
        'name'          => USER_STYLESHEET,
        'type'          => 'boolean',
        'default'       => 'false',
    ),
    array(
        'var'           => 'layouttype',
        'name'          => LAYOUT_TYPE,
        'type'          => 'select',
        'default'       => '3sbs',
        'select_values' => array('3sbs' => LAYOUT_SBS,
                                 '3bss' => LAYOUT_BSS,
                                 '3ssb' => LAYOUT_SSB,
                                 '2sb'  => LAYOUT_SB,
                                 '2bs'  => LAYOUT_BS,
                                 '1col' => LAYOUT_SC,
                                 '2sbf' => LAYOUT_SBF,
                                 '2bsf' => LAYOUT_BSF)
    ),
    array(
        'var'           => 'jscolumns',
        'name'          => JAVASCRIPT_COLUMNS,
        'type'          => 'boolean',
        'default'       => 'false',
    ),
    array(
        'var'           => 'custheader',
        'name'          => BP_CUSTOM_HEADER,
        'type'          => 'boolean',
        'default'       => 'false',
    ),
    array(
        'var'           => 'headerimage',
        'name'          => BP_HEADER_IMAGE,
        'type'          => 'media',
        'default'       => serendipity_getTemplateFile('header.png')
    ),
    array(
        'var'           => 'headertype',
        'name'          => BP_HEADER_TYPE,
        'type'          => 'select',
        'default'       => 'banner',
        'select_values' => array('banner' => BP_HEADER_BANNER,
                                 'htiled' => BP_HEADER_HTILED,
                                 'vtiled' => BP_HEADER_VTILED,
                                 'btiled' => BP_HEADER_BTILED)
    ),
    array(
        'var'           => 'headerposhor',
        'name'          => BP_HEADER_POSHOR,
        'type'          => 'select',
        'default'       => 'left',
        'select_values' => array('left' => LEFT,
                                 'center' => BP_CENTER,
                                 'right' => RIGHT)
    ),
    array(
        'var'           => 'headerposver',
        'name'          => BP_HEADER_POSVER,
        'type'          => 'select',
        'default'       => 'top',
        'select_values' => array('top' => BP_TOP,
                                 'center' => BP_CENTER,
                                 'bottom' => BP_BOTTOM)
    ),
    array(
        'var'           => 'firbtitle',
        'name'          => FIR_BTITLE,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'firbdescr',
        'name'          => FIR_BDESCR,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'date_format',
        'name'          => GENERAL_PLUGIN_DATEFORMAT . " (http://php.net/strftime)",
        'type'          => 'select',
        'default'       => DATE_FORMAT_ENTRY,
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
        'var'           => 'entryfooterpos',
        'name'          => ENTRY_FOOTER_POS,
        'type'          => 'select',
        'default'       => 'belowentry',
        'select_values' => array('belowentry' => BELOW_ENTRY,
                                 'belowtitle' => BELOW_TITLE,
                                 'splitfoot' => SPLIT_FOOTER)
    ),
    array(
        'var'           => 'footerauthor',
        'name'          => FOOTER_AUTHOR,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'footercategories',
        'name'          => FOOTER_CATEGORIES,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'footertimestamp',
        'name'          => FOOTER_TIMESTAMP,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'footercomments',
        'name'          => FOOTER_COMMENTS,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'footertrackbacks',
        'name'          => FOOTER_TRACKBACKS,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'altcommtrack',
        'name'          => ALT_COMMTRACK,
        'type'          => 'boolean',
        'default'       => 'false',
    ),
    array(
        'var'           => 'addthiswidget',
        'name'          => SHOW_ADDTHIS_WIDGET,
        'type'          => 'boolean',
        'default'       => 'false',
    ),
    array(
        'var'           => 'addthisaccount',
        'name'          => ADDTHIS_ACCOUNT,
        'type'          => 'string',
        'default'       => '',
    ),
    array(
        'var'           => 'show_sticky_entry_footer',
        'name'          => SHOW_STICKY_ENTRY_FOOTER,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'show_sticky_entry_heading',
        'name'          => SHOW_STICKY_ENTRY_HEADING,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'cocommentactive',
        'name'          => COCOMMENT_ACTIVE,
        'type'          => 'boolean',
        'default'       => 'false',
    ),
    array(
        'var'           => 'prev_next_style',
        'name'          => PREV_NEXT_STYLE,
        'type'          => 'select',
        'default'       => 'text',
        'select_values' => array('text' => PREV_NEXT_TEXT,
                                 'texticon' => PREV_NEXT_TEXT_ICON,
                                 'icon' => PREV_NEXT_ICON,
                                 'none' => NONE)
    ),
    array(
        'var'           => 'show_pagination',
        'name'          => SHOW_PAGINATION,
        'type'          => 'boolean',
        'default'       => 'false',
    ),
    array(
        'var'           => 'counter_code',
        'name'          => COUNTER_CODE,
        'type'          => 'text',
        'default'       => '',
    ),
    array(
        'var'           => 'counter_code_toggle',
        'name'          => USE_COUNTER,
        'type'          => 'boolean',
        'default'       => 'false'
    ),
    array(
        'var'           => 'footer_text',
        'name'          => FOOTER_TEXT,
        'type'          => 'text',
        'default'       => '',
    ),
    array(
        'var'           => 'footer_text_toggle',
        'name'          => USE_FOOTER_TEXT,
        'type'          => 'boolean',
        'default'       => 'false'
    ),
    array(
        'var'           => 'sitenavpos',
        'name'          => SITENAV_POSITION,
        'type'          => 'select',
        'default'       => 'none',
        'select_values' => array('none' => SITENAV_NONE,
                                 'above' => SITENAV_ABOVE,
                                 'below' => SITENAV_BELOW,
                                 'left' => SITENAV_LEFT,
                                 'right' => SITENAV_RIGHT)
    ),
    array(
        'var'           => 'sitenav_footer',
        'name'          => SITENAV_FOOTER,
        'type'          => 'boolean',
        'default'       => 'true'
    ),
    array(
        'var'           => 'sitenav_quicksearch',
        'name'          => SITENAV_QUICKSEARCH,
        'type'          => 'boolean',
        'default'       => 'true',
    ),
    array(
        'var'           => 'sitenav_sidebar_title',
        'name'          => SITENAV_TITLE,
        'type'          => 'string',
        'default'       => SITENAV_TITLE_TEXT,
    ),
);

$template_global_config = array('navigation' => true);
$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option']);
serendipity_loadGlobalThemeOptions($template_config, $template_loaded_config, $template_global_config);

if ($template_loaded_config['headerimage'] != '' && is_dir($_SERVER['DOCUMENT_ROOT'] . '/' . $template_loaded_config['headerimage'])) {
    $files = array();
    if ($d = opendir($_SERVER['DOCUMENT_ROOT'] . '/' . $template_loaded_config['headerimage'])) {
        while (($file = readdir($d)) !== false) {
            if (preg_match('@(\.jpe?g|\.png|\.gif)$@i', $file) && !preg_match('@' . preg_quote($serendipity['thumbSuffix']) . '@i', $file)) {
                $files[] = $file;
            }
        }
    }
    
    if (count($files) > 0) {
        shuffle($files);
        $serendipity['smarty']->assign('random_headerimage', $template_loaded_config['headerimage'] . '/' . $files[0]);
    }
}

// Allow colorset authors to include license and attribution data
$colorset_data = array();  // Maybe we'll want more data later...
$colorset_data['attribution'] = '';
$attribution_file = dirname(__FILE__) . '/' . $template_loaded_config['colorset'] . '_license.txt';
if (is_readable($attribution_file)) {
	$attribution = file_get_contents($attribution_file);
	if (!empty($attribution)) {
		$colorset_data['attribution'] = $attribution;
	}
}
$template_loaded_config['colorset_data'] = $colorset_data;
