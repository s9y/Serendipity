function toggle_extended(setCookie) {
    var textarea = document.getElementById('serendipity[extended]');
    var button   = document.getElementById('option_extended');
    var tools    = document.getElementById('tools_extended');
    if ( textarea.style.display == 'none' ) {
        textarea.style.display = '';
        tools.style.display = '';
        button.src = minus_img;
        if (setCookie == true) {
            document.cookie = 'serendipity[toggle_extended]=true;';
        }
    } else {
        textarea.style.display = 'none';
        tools.style.display = 'none';
        button.src = plus_img;
        if (setCookie == true) {
            document.cookie = 'serendipity[toggle_extended]=;';
        }
    }
}

function showItem(id) {
    var selected = 0;
    if (typeof(id) == 'undefined' || typeof(id) == 'object') {
        id = 'categoryselector';
    }

    if (document.getElementById) {
        el = document.getElementById(id);
        if (selector_toggle[id] && selector_toggle[id] == 'off') {
            selector_restore[id] = new Array();
            selector_toggle[id]  = 'on';

            /* Hack to make sure that when the single dropdown is shown, don't have multiple selections */
            last = 0;

            for (i=0; i < el.options.length; i++) {
                if (el.options[i].selected == true) {
                    selected++;
                    last = i;
                    selector_restore[id][last] = 'on';
                }

                if (selected > 1) {
                    /* If there is more than one selected, we reset all those to false
                       This is because otherwise the label will say 'No Category', but the categories will still be selected */
                    for (j=0; j < el.options.length; j++) {
                        /* Save selection in array to later restore them */
                        if (el.options[j].selected == true) {
                            el.options[j].selected = false;
                            selector_restore[id][j] = 'on';
                            last = j;
                        } else {
                            selector_restore[id][j] = false;
                        }
                    }
                    break;
                }
            }

            el.selectedIndex = null;
            if (last > 0) {
                el.selectedIndex = last;
            }

            el.size = 1;

            /* Show a normal dropdown */
            if (el.multiple) {
                el.multiple = false;
            }

            document.getElementById('option_' + id).src = plus_img;
        } else {
            selector_store[id] = el.size;
            if (selector_store[id] == 0) {
                selector_store[id] = 5;
            }

            last = 0;
            if (el.selectedIndex > 0) {
                if (!selector_restore[id]) {
                    selector_restore[id] = new Array();
                }

                for (j=0; j < el.options.length; j++) {
                    /* Save selection in array to later restore them */
                    if (el.options[j].selected == true) {
                        selector_restore[id][j] = 'on';
                        last = j;
                    }
                }
            }
            el.selectedIndex = -1;
            el.size = cat_count;
            selector_toggle[id] = 'off';

            /* Show multiple items */
            el.multiple = true;

            /* Restore previously selected items? */
            last = 0;
            for (i = 0; i < el.options.length; i++) {
                if (selector_restore && selector_restore[id] && selector_restore[id][i] && selector_restore[id][i] == 'on') {
                    val = el.options[i].value;
                    if (el.options[i].selected != true) {
                        el.options[i].selected = true;
                        last = i;
                        // [TODO] IE Bug: Don't ask me why, but this restoring only works in Internet Explorer if you put this:
                        // alert('it doesnt matter what, just the alert is important');
                    }
                }
            }

            document.getElementById('option_' + id).src = minus_img;
        }
    }
}
