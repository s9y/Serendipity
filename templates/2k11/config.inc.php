<?php
if (IN_serendipity !== true) { die ("Don't hack!"); }

@serendipity_plugin_api::load_language(dirname(__FILE__));

$serendipity['smarty']->assign(array('currpage'  => "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
                                     'currpage2' => $_SERVER['REQUEST_URI']));

if (!function_exists('serendipity_smarty_html5time')) {
    function serendipity_smarty_html5time($timestamp) { return date("c", $timestamp); }

    $serendipity['smarty']->registerPlugin('modifier', 'serendipity_html5time', 'serendipity_smarty_html5time');
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

$serendipity['smarty']->assign('is_templatechooser', $_SESSION['serendipityUseTemplate']);

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

/**
 * This adds the possibility for templates to register a central function
 * serendipity_plugin_api_event_hook() and
 * serendipity_plugin_api_pre_event_hook() that can be used to
 * use plugin API interaction WITHOUT actual plugins. So special
 * plugins can be bundled within a template, without the need to
 * seperately install them. The "pre" function is called BEFORE
 * all normal plugins are executed, the normal function is called
 * AFTER plugin execution.
 *
 * In here we use it to parse and compile serendipity_editor.js.tpl
 * and to populate serendipity.js via the new 'js' plugin hook for the frontend.
 * The bundled core JS editor - CKEDITOR - will read pre set plugin evenData in some backend hooks
 */
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
            break;

        case 'js':
            // This is frontend and backend!
            // add a global available (index.tpl; admin/index.tpl; preview_iframe.tpl) redirect error string function used by errorToExceptionHandler()
            // hardened by admin only - better have that here, to be reachable everywhere
            if( $serendipity['serendipityUserlevel'] >= USERLEVEL_ADMIN ) {
                echo "
function create(htmlStr) { 
    var frag = document.createDocumentFragment(),
        temp = document.createElement('div');
        temp.innerHTML = htmlStr;
    while (temp.firstChild) { 
        frag.appendChild(temp.firstChild);
    }
    return frag;
} 
\n";
            }
            // alway add \n\n for the last element dor plugins using this hook and start at line Col 1, to populate the (virtual) serendipity.js file
            echo "
jQuery(function() { 
    jQuery('input[type=\"url\"]').change(function() {
        if (this.value != '' && ! (this.value.substr(0,7) == 'http://' || this.value.substr(0,8) == 'https://')) {
            this.value = 'http://' + this.value;
        }
    });
})\n\n";
            break;
            
        case 'backend_wysiwyg':
            if (preg_match('@^nugget@i', $eventData['item'])) {
                // switch to wysiwyg finisher directly, in case of nuggets
                serendipity_plugin_api::hook_event('backend_wysiwyg_finish', $bag, $eventData);
            } else {
                // this only builds textareas of normal entry forms, the possible button data will be passed to 'backend_footer' via serendipity_emit_htmlarea_code() function
                if (isset($eventData['item']) && !empty($eventData['item'])) {
?>

<script type="text/javascript">
    $( document ).ready(function() {
        if (window.Spawnnuggets) Spawnnuggets('<?php echo $eventData['item']; ?>', 'entryforms<?php echo $eventData['jsname']; ?>', null);//case1
    });
</script>

<?php
                }
            }
            break;

        case 'backend_wysiwyg_finish':
            // pass nugget $eventData['item'] and $eventData['buttons'] into the 'backend_footer' hook
            serendipity_plugin_api::hook_event('backend_footer', $bag, $eventData);
            break;

        case 'backend_footer':
            if ($serendipity['wysiwyg']) {
                if (isset($eventData['item']) && !empty($eventData['item'])) {
                    if (isset($eventData['buttons']) && (is_array($eventData['buttons']) && !empty($eventData['buttons']))) {
                    // case staticpage nuggets
?>

    <script type="text/javascript">
        $( document ).ready(function() {
            // send eventData as json encoded array into the javascript stream, which can be pulled by 'backend_header' hooks global Spawnnuggets() nugget function
            jsEventData = <?php echo json_encode($eventData['buttons']); ?>;//case2
        });
    </script>

<?php
                    }
                }
            }
            break;

        return true;
        break;
    }
}

if ($_SESSION['serendipityUseTemplate']) {
    $template_loaded_config['use_corenav'] = false;
}
