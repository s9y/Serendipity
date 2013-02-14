// File referenced in:
// – templates/*/admin/media_choose.tpl

/**************************************************
 * imgedit.js
 * 2003-10-17
 * www.sonnd.com / www.supergarv.de
 *
 * COPYRIGHT (C) BY sonnd / Garvin Hicking
 * Published as GPL. Copyright notice has to stay in effect.
 **************************************************/

// Gets a position of an element on a certain axis
function imgedit_position(element, axis) {
    if (axis == 'x') {
        return (element.x) ? element.x : imgedit_subposition(element, 'Left');
    } else {
        return (element.y) ? element.y : imgedit_subposition(element, 'Top');
    }
}

// Calculate possible referenced subpositions to really get the absolute position.
function imgedit_subposition(element, axis) {
    currentPos = 0;

    while (element != null) {
        currentPos += element['offset' + axis];
        element     = element.offsetParent;
    }

    return currentPos;
}

// Places the cropping area to a certain X/Y coordinate. Then clips the overlay picture correspondingly
function imgedit_placeArea(new_x, new_y) {
    o_area.style.left    = new_x + 'px';
    o_area.style.top     = new_y + 'px';
    o_overlay.style.clip = "rect(" + (new_y+area_border) + " " + (new_x+inner_area_x) + " " + (new_y+inner_area_y) + " " + (new_x+area_border) + ")";
}

// Set correct restraints of the cropping area inside which it can move
function imgedit_setMax(new_width, new_height) {
    o_area.maxX = imgedit_getMax('x', new_width, area_orientation);
    o_area.maxY = imgedit_getMax('y', new_height, area_orientation);
}

// Toggle the current area orientation to the opposite one
function imgedit_areaOrientation() {
    if (area_orientation == 'h') {
        imgedit_toggleAreaOrientation('v');
    } else {
        imgedit_toggleAreaOrientation('h');
    }

    return false;
}

// Toggle the current area orientation
function imgedit_toggleAreaOrientation(new_orientation) {
    if (new_orientation == area_orientation) {
        return;
    }

    // Display the corresponding cropping area and hide the other one.
    if (new_orientation == 'h') {
        area_orientation         = 'h';
        o_area                   = o_harea;
        area_x                   = harea_x;
        area_y                   = harea_y;
        inner_area_x             = inner_harea_x;
        inner_area_y             = inner_harea_y;

        o_varea.style.visibility = 'hidden';
        o_area.style.left        = o_varea.style.left;
        o_area.style.top         = o_varea.style.top;
        o_area.style.visibility  = 'visible';
    } else {
        area_orientation         = 'v';
        o_area                   = o_varea;
        area_x                   = varea_x;
        area_y                   = varea_y;
        inner_area_x             = inner_varea_x;
        inner_area_y             = inner_varea_y;

        o_harea.style.visibility = 'hidden';
        o_area.style.left        = o_harea.style.left;
        o_area.style.top         = o_harea.style.top;
        o_area.style.visibility  = 'visible';
    }

    // Set the new clipping inside the cropping area
    imgedit_setMax(o_backdrop.width, o_backdrop.height);
    o_overlay.style.clip = "rect(" + (parseInt(o_area.style.top)+area_border) + " " + (parseInt(o_area.style.left)+inner_area_x) + " " + (parseInt(o_area.style.top)+inner_area_y) + " " + (parseInt(o_area.style.left)+area_border) + ")";
}

// Zoom the image. Takes a given stepping (can be negative)
function imgedit_zoom(step) {
    pos = parseInt(o_zoombutton.style.top);
    if (pos+step > slider_top && pos+step < slider_bottom) {
        imgedit_zoomTo(position(o_zoombutton, 'y') + step);
        o_zoombutton.style.top = pos + step + 'px';
    }

    return false;
}

// Automatically resize the window to fit cropping area
function imgedit_autoSize(flip) {
    // First find the largest side
    if (real_x > real_y) {
        // The image is a horizontal one. Resize height to fit.
        fitmode = 'height';
    } else {
        // The image is a vertical one. Resize width to fit.
        fitmode = 'width';
    }

    // Check if the size should be flipped. If it is 'true' the image will completely fit inside the cropping area.
    // If it is 'false', it will only fit one side inside the cropping area
    if (flip == 'true') {
        if (fitmode == 'width') {
            fitmode = 'height';
        } else {
            fitmode = 'width';
        }
    }

    // Get new width/height of the image
    if (fitmode == 'width') {
        new_width  = inner_area_x - area_border;
        ratio      = new_width / real_x;
        new_height = real_y * ratio;
    } else {
        new_height = inner_area_y - area_border;
        ratio      = new_height / real_y;
        new_width  = real_x * ratio;
    }

    // Place cropping area to (0|0), because the image has been resized?
    imgedit_scaleIMG(new_width, new_height);
    imgedit_placeArea(-area_border, -area_border);

    // Place the slider to corresponding ratio.
    o_zoombutton.style.top = slider_bottom - parseInt(ratio/2 * (slider_middle/3)) + 'px';

    // Adjust some settings inside the HTML form.
    document.getElementById('scaletext').style.visibility = 'visible';
    document.getElementById('autoguess_clicked').value = 'true';
    new_ratio = ratio;

    return false;
}

// Get the maximum width/height for a certain axis the cropping area is allowed to move to
function imgedit_getMax(axis, pixels, area_orientation) {
    // Which is the size we should get?
    if (area_orientation == 'h') {
        maxarea_x = harea_x;
        maxarea_y = harea_y
    } else if (area_orientation == 'v') {
        maxarea_x = varea_x;
        maxarea_y = varea_y
    } else {
        maxarea_x = area_x;
        maxarea_y = area_y
    }

    if (axis == 'x') {
        value = pixels - maxarea_x + area_border;
    } else {
        value = pixels - maxarea_y + area_border;
    }

    if (value < -area_border) {
        value = -area_border;
    }

    return value;
}

// Scales the background image to a certain size
function imgedit_scaleIMG(new_width, new_height) {
    o_backdrop.width = new_width;
    o_backdrop.height = new_height;

    o_overlay.width = new_width;
    o_overlay.height = new_height;

    imgedit_setMax(new_width, new_height);

    return true;
}

// Zooms the image to a certain stepping
function imgedit_zoomTo(y) {
    current = slider_bottom - y;

    temp_height = current - slider_middle;
    temp_ratio = temp_height / (slider_middle*3);

    if (current > slider_middle) {
        // make smaller than 100%
        new_ratio = 1 + (temp_ratio+temp_ratio);
    } else {
        // make larger than 100%
        new_ratio = 1 + (temp_ratio+temp_ratio);
    }

    new_width = parseInt(real_x * new_ratio);
    new_height = parseInt(real_y * new_ratio);

    imgedit_scaleIMG(new_width, new_height);

    return true;
}

// OnSubmit catch. Parses current JS values into the form
function imgedit_getCoordinates() {
    document.getElementById('zoombox_x').value        = parseInt(o_area.style.left);
    document.getElementById('zoombox_y').value        = parseInt(o_area.style.top);
    document.getElementById('zoombox_factor').value   = new_ratio;
    document.getElementById('area_orientation').value = area_orientation;

    return true;
}

// Initializes everything
function imgedit_init(zoombox_width, init_area_border, pad_left, pad_top, init_area_orientation) {
    // Store objects
    o_backdrop   = document.getElementById("backdrop");
    o_overlay    = document.getElementById("overlay");
    o_harea      = document.getElementById("harea");
    o_varea      = document.getElementById("varea");
    o_zoombutton = document.getElementById("zoombutton");

    // Object sizes
    full_x = parseInt(o_backdrop.width);
    full_y = parseInt(o_backdrop.height);

    real_x = document.getElementById('real_img_width').value;
    real_y = document.getElementById('real_img_height').value;

    area_border  = init_area_border;

    harea_x = parseInt(o_harea.width);
    harea_y = parseInt(o_harea.height);

    varea_x = parseInt(o_varea.width);
    varea_y = parseInt(o_varea.height);

    inner_harea_x = harea_x - area_border;
    inner_harea_y = harea_y - area_border;

    inner_varea_x = varea_x - area_border;
    inner_varea_y = varea_y - area_border;

    new_ratio = document.getElementById('zoombox_factor').value;

    slider_width = 10;
    slider_top = 0;
    slider_bottom = 95;
    slider_space = slider_bottom - slider_top;
    slider_middle = slider_space / 2;
    zoombox_left = -(o_zoombutton.width/2) + (slider_width/2);

    // Make objects dragabble
    DOMDrag.init(o_harea,      null, -area_border, imgedit_getMax('x', full_x, 'h'), -area_border, imgedit_getMax('y', full_y, 'h'));
    DOMDrag.init(o_varea,      null, -area_border, imgedit_getMax('x', full_x, 'v'), -area_border, imgedit_getMax('y', full_y, 'v'));
    DOMDrag.init(o_zoombutton, null, zoombox_left, zoombox_left, slider_top, slider_bottom);

    o_harea.onDrag = function (x, y) {
        o_overlay.style.clip = "rect(" + (y+area_border) + " " + (x+inner_harea_x) + " " + (y+inner_harea_y) + " " + (x+area_border) + ")";
    }

    o_varea.onDrag = function (x, y) {
        o_overlay.style.clip = "rect(" + (y+area_border) + " " + (x+inner_varea_x) + " " + (y+inner_varea_y) + " " + (x+area_border) + ")";
    }

    o_zoombutton.onDrag = function (x, y) {
        imgedit_zoomTo(y);
    }

    o_zoombutton.style.left       = zoombox_left + 'px';

    zf = document.getElementById('zoombox_factor').value;
    if (zf != 1) {
        o_zoombutton.style.top        = slider_bottom - parseInt(zf/2 * (slider_middle/3)) + 'px';
    } else {
        o_zoombutton.style.top        = slider_top + slider_middle + 'px';
    }

    o_zoombutton.style.visibility = 'visible';

    o_harea.style.cursor = 'move';
    o_harea.style.left   = pad_left + 'px';
    o_harea.style.top    = pad_top  + 'px';

    o_varea.style.cursor = 'move';
    o_varea.style.left   = pad_left + 'px';
    o_varea.style.top    = pad_top  + 'px';

    area_orientation     = '';
    imgedit_toggleAreaOrientation(init_area_orientation);
}
