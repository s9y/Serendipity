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

if ($serendipity['GET']['adminModule'] == 'templates') {
    $css_files = glob(dirname(__FILE__) . '/*_style.css');
    foreach($css_files AS $css_file) {
        $css_file = str_replace('_style.css', '', basename($css_file));
        if (!isset($colorsets[$css_file])) {
            $colorsets[$css_file] = $css_file;
        }
    }
}

$template_config = array(
    array(
        'var'           => 'colorset',
        'name'          => THEME_COLORSET,
        'type'          => 'select',
        'default'       => 'purple',
        'select_values' => $colorsets
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
                                 '1col' => LAYOUT_SC)
    ),
    array(
        'var'           => 'jscolumns',
        'name'          => JAVASCRIPT_COLUMNS,
        'type'          => 'radio',
        'default'       => 'false',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO))
    ),
    array(
        'var'           => 'custheader',
        'name'          => BP_CUSTOM_HEADER,
        'type'          => 'radio',
        'default'       => 'false',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO))
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
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'firbdescr',
        'name'          => FIR_BDESCR,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
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
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'footercategories',
        'name'          => FOOTER_CATEGORIES,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'footertimestamp',
        'name'          => FOOTER_TIMESTAMP,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'footercomments',
        'name'          => FOOTER_COMMENTS,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'footertrackbacks',
        'name'          => FOOTER_TRACKBACKS,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'altcommtrack',
        'name'          => ALT_COMMTRACK,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'false',
    ),
    array(
        'var'           => 'show_sticky_entry_footer',
        'name'          => SHOW_STICKY_ENTRY_FOOTER,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'show_sticky_entry_heading',
        'name'          => SHOW_STICKY_ENTRY_HEADING,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'cocommentactive',
        'name'          => COCOMMENT_ACTIVE,
        'type'          => 'radio',
        'radio'         => array('value' => array('active', 'inactive'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'inactive',
    ),
    array(
        'var'           => 'prev_next_style',
        'name'          => PREV_NEXT_STYLE,
        'type'          => 'select',
        'default'       => 'text',
        'select_values' => array('text' => PREV_NEXT_TEXT,
                                 'texticon' => PREV_NEXT_TEXT_ICON,
                                 'icon' => PREV_NEXT_ICON)
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
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
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
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
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
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true'
    ),
    array(
        'var'           => 'sitenav_quicksearch',
        'name'          => SITENAV_QUICKSEARCH,
        'type'          => 'radio',
        'radio'         => array('value' => array('true', 'false'),
                                 'desc'  => array(YES, NO)),
        'default'       => 'true',
    ),
    array(
        'var'           => 'sitenav_sidebar_title',
        'name'          => SITENAV_TITLE,
        'type'          => 'string',
        'default'       => SITENAV_TITLE_TEXT,
    ),
    array(
        'var'           => 'amount',
        'name'          => NAVLINK_AMOUNT,
        'type'          => 'string',
        'default'       => '5',
    )
);

$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option']);

$navlinks = array();

for ($i = 0; $i < $template_loaded_config['amount']; $i++) {
    $navlinks[] = array(
        'title' => $template_loaded_config['navlink' . $i . 'text'],
        'href'  => $template_loaded_config['navlink' . $i . 'url']
    );
    $template_config[] = array(
        'var'           => 'navlink' . $i . 'text',
        'name'          => NAV_LINK_TEXT . ' #' . $i,
        'type'          => 'string',
        'default'       => 'Link #' . $i,
        );
    $template_config[] = array(
        'var'           => 'navlink' . $i . 'url',
        'name'          => NAV_LINK_URL . ' #' . $i,
        'type'          => 'string',
        'default'       => '#',
    );
}

$serendipity['smarty']->assign_by_ref('navlinks', $navlinks);
