<?php
if (IN_serendipity !== true) { die ("Don't hack!"); }

@serendipity_plugin_api::load_language(dirname(__FILE__));

$serendipity['smarty']->assign('testvar', 'this is parsed!');

function serendipity_plugin_api_pre_event_hook($event, &$bag, &$eventData, &$addData) {
    // Check what Event is coming in, only react to those we want.
    switch($event) {
        case 'js':
            // always add newlines to the end of last element, in case of other plugins using this hook and
            // always start at line Col 1, to populate the (virtual) serendipity.js file
            echo "
// 2k11-idea-config output here!
jQuery(function() { 
    jQuery('input[type=\"url\"]').change(function() {
        if (this.value != '' && ! (this.value.substr(0,7) == 'http://' || this.value.substr(0,8) == 'https://')) {
            this.value = 'http://' + this.value;
        }
    });
})\n\n";
            break;
            
        return true;
        break;
    }
}
