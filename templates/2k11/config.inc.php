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

$serendipity['smarty']->assign('is_templatechooser', $_SESSION['serendipityUseTemplate'] ?? null);

$template_config = array(
    array(
      'var'           => 'infotwok',
      'name'          => 'infotwok',
      'type'          => 'custom',
      'custom'        => TWOK11_INSTR,
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
                                '%Y-%m-%d' => '%Y-%m-%d',
                                '%A, %e. %B %Y %H:%M' => '%A, %e. %B %Y %H:%M',
                                '%a, %e. %B %Y %H:%M' => '%a, %e. %B %Y %H:%M',
                                '%e. %B %Y %H:%M' => '%e. %B %Y %H:%M',
                                '%d.%m.%y %H:%M' => '%d.%m.%y %H:%M',
                                '%d.%m.%Y %H:%M' => '%d.%m.%Y %H:%M',
                                '%A, %m/%d/%Y %H:%M' => '%A, %m/%d/%Y %H:%M',
                                '%a, %m/%d/%y %H:%M' => '%a, %m/%d/%y %H:%M',
                                '%m/%d/%y %H:%M' => '%m/%d/%y %H:%M',
                                '%m/%d/%Y %H:%M' => '%m/%d/%Y %H:%M',
                                '%Y-%m-%d %H:%M' => '%Y-%m-%d %H:%M'
            )
    ),
    array(
        'var' => 'header_img',
        'name' => TWOK11_HEADER_IMG,
        'type' => 'media',
        'default' => serendipity_getTemplateFile('header.jpg', 'serendipityHTTPPath', true)
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
                                'dserif' => 'Noto Serif')
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
$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option'] ?? '', true);
serendipity_loadGlobalThemeOptions($template_config, $template_loaded_config, $template_global_config);

// 2k11 shall be a re-usable frontend theme that other templates can inherit (through "Engine: 2k11" in their info.txt)
// If those themes use a custom config.inc.php file, they may need to declare their own pre-event-hooks.
// Since serendipity_plugin_api_pre_event_hook() is the advertised method for template authors to hook into
// 2k11 cannot declare this on its own. We rather use per-event hook functions now, which templates other than 2k11
// (or other custom engines) should not use.
function serendipity_plugin_api_pre_event_hook_js($event, &$bag, &$eventData, &$addData) {
    // always add newlines to the end of last element, in case of other plugins using this hook and
    // always start at line Col 1, to populate the (virtual) serendipity.js file
    echo "window.addEventListener('load', function () {
jQuery(function() {
    jQuery('input[type=\"url\"]').change(function() {
        if (this.value != '' && ! (this.value.substr(0,7) == 'http://' || this.value.substr(0,8) == 'https://')) {
            this.value = 'http://' + this.value;
        }
    });
});
})\n\n";
}

// 2k11 shall be a re-usable frontend theme that other templates can inherit (through "Engine: 2k11" in their info.txt)
// If those themes use a custom config.inc.php file, they may need to declare their own pre-event-hooks.
// Since serendipity_plugin_api_pre_event_hook() is the advertised method for template authors to hook into
// 2k11 cannot declare this on its own. We rather use per-event hook functions now, which templates other than 2k11
// (or other custom engines) should not use.
function serendipity_plugin_api_pre_event_hook_css($event, &$bag, &$eventData, &$addData) {
    global $serendipity;
    if (isset($serendipity['smarty']) &&
        isset($serendipity['smarty']->tpl_vars['template_option']) &&
        isset($serendipity['smarty']->tpl_vars['template_option']->value['webfonts'])) {
            
        switch ($serendipity['smarty']->tpl_vars['template_option']->value['webfonts']) {
            case 'droid':
                echo "
                /* latin */
                @font-face {
                  font-family: 'Droid Sans';
                  font-style: normal;
                  font-weight: 400;
                  src: url({$serendipity['baseURL']}/templates/2k11/font/droid_sans_400.woff2) format('woff2');
                  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                }
                /* latin */
                @font-face {
                  font-family: 'Droid Sans';
                  font-style: normal;
                  font-weight: 700;
                  src: url({$serendipity['baseURL']}/templates/2k11/font/droid_sans_700.woff2) format('woff2');
                  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                }

                \n\n";
                break;
            case 'ptsans':
                echo "
                /* pt-sans-regular - latin-ext_latin_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'PT Sans';
                  font-style: normal;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* pt-sans-italic - latin-ext_latin_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'PT Sans';
                  font-style: italic;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* pt-sans-700 - latin-ext_latin_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'PT Sans';
                  font-style: normal;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* pt-sans-700italic - latin-ext_latin_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'PT Sans';
                  font-style: italic;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-700italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/pt-sans-v17-latin-ext_latin_cyrillic-ext_cyrillic-700italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }
                \n\n";
                break;
            case 'osans':
                echo "
                /* open-sans-regular - vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Open Sans';
                  font-style: normal;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* open-sans-700 - vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Open Sans';
                  font-style: normal;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* open-sans-italic - vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Open Sans';
                  font-style: italic;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* open-sans-700italic - vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Open Sans';
                  font-style: italic;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-700italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/open-sans-v34-vietnamese_latin-ext_latin_hebrew_greek-ext_greek_cyrillic-ext_cyrillic-700italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }
                \n\n
                ";
                break;
            case 'cabin':
                echo "
                   /* cabin-regular - vietnamese_latin-ext_latin */
                    @font-face {
                      font-family: 'Cabin';
                      font-style: normal;
                      font-weight: 400;
                      src: local(''),
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                    }

                    /* cabin-700 - vietnamese_latin-ext_latin */
                    @font-face {
                      font-family: 'Cabin';
                      font-style: normal;
                      font-weight: 700;
                      src: local(''),
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                    }

                    /* cabin-italic - vietnamese_latin-ext_latin */
                    @font-face {
                      font-family: 'Cabin';
                      font-style: italic;
                      font-weight: 400;
                      src: local(''),
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                    }

                    /* cabin-700italic - vietnamese_latin-ext_latin */
                    @font-face {
                      font-family: 'Cabin';
                      font-style: italic;
                      font-weight: 700;
                      src: local(''),
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-700italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                           url('{$serendipity['baseURL']}/templates/2k11/font/cabin-v26-vietnamese_latin-ext_latin-700italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                    }
                \n\n
                ";
                break;
            case 'ubuntu':
                echo "
                /* ubuntu-italic - latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Ubuntu';
                  font-style: italic;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* ubuntu-700 - latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Ubuntu';
                  font-style: normal;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* ubuntu-700italic - latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Ubuntu';
                  font-style: italic;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* ubuntu-regular - latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Ubuntu';
                  font-style: normal;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/ubuntu-v20-latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }
                \n\n
                ";
                break;
            case 'dserif':
            echo "
                /* noto-serif-regular - vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Noto Serif';
                  font-style: normal;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* noto-serif-italic - vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Noto Serif';
                  font-style: italic;
                  font-weight: 400;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* noto-serif-700 - vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Noto Serif';
                  font-style: normal;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }

                /* noto-serif-700italic - vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic */
                @font-face {
                  font-family: 'Noto Serif';
                  font-style: italic;
                  font-weight: 700;
                  src: local(''),
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700italic.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
                       url('{$serendipity['baseURL']}/templates/2k11/font/noto-serif-v21-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700italic.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                }
                \n\n";
                break;
        }
    }
}


if ($_SESSION['serendipityUseTemplate'] ?? false) {
    $template_loaded_config['use_corenav'] = false;
}

$template_loaded_config['breakpoints'] = [1600, 1200, 600];
