// File referenced in:
// – include/admin/tpl/category.inc.tpl
// – include/admin/tpl/comments.inc.tpl
// – include/admin/tpl/out_stack_loop.tpl
// – include/functions_entries_admin.inc.php
// – templates/*/admin/admin_scripts.js
// – templates/*/admin/entries.tpl
// – templates/*/admin/media_choose.tpl
// – templates/*/admin/media_upload.tpl

<!-- // Hide from older browsers
/* $Id$ */
/*
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
*/

/*
    Written by chris wetherell
    http://www.massless.org
    chris [THE AT SIGN] massless.org

    warning: it only works for IE4+/Win and Moz1.1+
    feel free to take it for your site
    if there are any problems, let chris know.
*/


// This variable isn't used anywhere else?
var thisForm;

// Returns "position" of selection in textarea
// Used internally by wrapSelectionWithLink()
function getSelection($txtarea) {
    var start = $txtarea[0].selectionStart;
    var end = $txtarea[0].selectionEnd;
    return $txtarea.val().substring(start, end);
}

// Used by non-wysiwyg editor toolbar buttons to wrap selection
// in a element associated with toolbar button
function wrapSelection(txtarea, openTag, closeTag) {
    scrollPos = false;

    if (txtarea.scrollTop) {
        scrollPos = txtarea.scrollTop;
    }

    // http://stackoverflow.com/questions/1712417/jquery-wrap-selected-text-in-a-textarea
    var $txtarea = jQuery(txtarea);
    var len = $txtarea.val().length;
    var start = $txtarea[0].selectionStart;
    var end = $txtarea[0].selectionEnd;
    var selectedText = $txtarea.val().substring(start, end);
    var replacement = openTag + selectedText + closeTag;
    $txtarea.val($txtarea.val().substring(0, start) + replacement + $txtarea.val().substring(end, len));

    $txtarea[0].selectionStart = start + replacement.length
    $txtarea[0].selectionEnd = start + replacement.length
    
    if (scrollPos) {
        txtarea.focus();
        txtarea.scrollTop = scrollPos;
    }
}

// Used by non-wysiwyg editor toolbar buttons to wrap selection
// in <a> element (only)
function wrapSelectionWithLink(txtarea) {
    var my_link = prompt("Enter URL:","http://");

    if (getSelection(jQuery(txtarea) ) == "") {
        var my_desc = prompt("Enter Description", '');
    }

    var my_title = prompt("Enter title/tooltip:", "");

    html_title = "";

    if (my_title != "" && my_title != null) {
        html_title = ' title="' + my_title + '"';
    }

    if (my_link != null) {
        lft = "<a href=\"" + my_link + "\"" + html_title + ">";

        if (my_desc != null && my_desc != "") {
            rgt = my_desc + "</a>";
        } else {
            rgt = "</a>";
        }

        wrapSelection(txtarea, lft, rgt);
    }

    return;
}
/* end chris w. script */

// Adds img element to selected text
// Used internally by wrapInsImage()
function insertText(txtarea, str) {
    $txtarea = jQuery(txtarea);
    var selLength = $txtarea.val().length;
    var selStart = $txtarea[0].selectionStart;
    var selEnd = $txtarea[0].selectionEnd;

    if (selEnd==1 || selEnd==2) {
        selEnd=selLength;
    }

    var before = $txtarea.val().substring(0,selStart);
    var after = $txtarea.val().substring(selStart);

    $txtarea.val(before + str + after);

    $txtarea[0].selectionStart = selStart + str.length
    $txtarea[0].selectionEnd = selStart + str.length
}

// Used by non-wysiwyg editor toolbar buttons to wrap selection
// in <img> element (only); doesn't really "wrap", merely inserts
// an <img> element before selected text
function wrapInsImage(txtarea) {
    var loc = prompt('Enter the Image Location: ');

    if (loc) {
        insertText(txtarea,'<img src="'+ loc + '" alt="" />');
    }
}
/* end Better-Editor functions */

// These are just "basic" flavors of the "better editor" functions
// above; not sure when/if these are actually used?
// insert <img>
function serendipity_insImage (area) {
    var loc = prompt('Enter the Image Location: ');

    if (!loc) {
        area.focus();
        return;
    }

    area.value = area.value + '<img src="' + loc + '" alt="" />';
    area.focus();
}

// see above; generic insert
function serendipity_insBasic (area, tag) {
    area.value = area.value + "<" + tag + "></" + tag + ">";
    area.focus();
}

// see above; insert <a>
function serendipity_insLink (area) {
    var loc      = prompt('Enter URL Location: ');
    var text     = prompt('Enter Description: ');
    var my_title = prompt("Enter title/tooltip:", "");

    if (!loc) {
        area.focus();
        return;
    }

    html_title = "";

    if (my_title != "" && my_title != null) {
        html_title = ' title="' + my_title + '"';
    }

    area.value = area.value + '<a href="' + loc + '"' + html_title + '>' + (text ? text : loc) + '</a>';
    area.focus();
}

// "Transfer" value from media db popup to form element?
function serendipity_imageSelector_addToElement (str, el) {
    document.getElementById(el).value = str;

    if (document.getElementById(el).type != 'hidden' && document.getElementById(el).focus) {
        document.getElementById(el).focus();
    }

    if (document.getElementById(el).onchange) {
        document.getElementById(el).onchange();
    }
}

// "Transfer" value from media db popup to wysiwyg?
function serendipity_imageSelector_addToBody (str, textarea) {
    // check for FCKEditor usage
    if (typeof(FCKeditorAPI) != 'undefined') {
        // if here the blog uses FCK editor
        var oEditor = FCKeditorAPI.GetInstance('serendipity[' + textarea + ']') ;

        if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG) {
            // if here the editior is in WYSIWYG mode so use the insert html function
            oEditor.InsertHtml(str);
        } else {
            // if here just insert the text to the textarea ( named with the value of textarea variable )
            noWysiwygAdd( str, textarea );
        }
    } else if(typeof(xinha_editors) != 'undefined') {
        // if here the blog uses Xinha editor
        var oEditor;

        if (typeof(xinha_editors['serendipity[' + textarea + ']']) != 'undefined') {
            // this is good for the two default editors (body & extended)
            oEditor = xinha_editors['serendipity['+ textarea +']'];
        } else if (typeof(xinha_editors[textarea]) != 'undefined') {
            // this should work in any other cases than previous one
            oEditor = xinha_editors[textarea];
        } else {
            // this is the last chance to retrieve the instance of the editor !
            // editor has not been registered by the name of it's textarea
            // so we must iterate over editors to find the good one
            for (var editorName in xinha_editors) {
                if ('serendipity[' + textarea + ']' == xinha_editors[editorName]._textArea.name) {
                    oEditor = xinha_editors[editorName];
                    break;
                }
            }
        }

        // the actual insert for the xinha editor
        if (oEditor) {
            if (oEditor._editMode != 'textmode') {
                // if here the editior is in WYSIWYG mode so use the insert html function
                oEditor.insertHTML(str);
            } else {
                // if here just insert the text to the textarea ( named with the value of textarea variable )
                noWysiwygAdd(str, textarea);
            }
        } else {
            noWysiwygAdd(str, textarea);
        }
    } else if(typeof(HTMLArea) != 'undefined') {
        // if here the blog uses HTMLArea editor
        var oEditor;

        if (textarea == 'body' && typeof(editorbody) != 'undefined') {
            oEditor = editorbody;
        } else if (textarea == 'extended' && typeof(editorextended) != 'undefined') {
            oEditor = editorextended;
        } else if (typeof(htmlarea_editors) != 'undefined' && typeof(htmlarea_editors[textarea]) != 'undefined') {
            oEditor =  htmlarea_editors[textarea];
        }

        // the actual insert for the HTMLArea editor
        if (oEditor._editMode != 'textmode') {
            // if here the editior is in WYSIWYG mode so use the insert html function
            oEditor.insertHTML(str);
        } else {
            // if here just insert the text to the textarea ( named with the value of textarea variable )
            noWysiwygAdd(str, textarea);
        }
    
    } else if(typeof(TinyMCE) != 'undefined') {
        // for the TinyMCE editor we do not have a text mode insert

        //tinyMCE.execCommand('mceInsertContent', false, str);
        tinyMCE.execInstanceCommand('serendipity[' + textarea + ']', 'mceInsertContent', false, str);
    } else  {
        noWysiwygAdd(str, textarea);
    }
}

// The noWysiwygAdd JS function is the vanila serendipity_imageSelector_addToBody js function
// which works fine in NO WYSIWYG mode
// NOTE: the serendipity_imageSelector_addToBody could add any valid HTML string to the textarea
function noWysiwygAdd( str, textarea ) {
    // default case: no wysiwyg editor
    eltarget = '';

    if (document.forms['serendipityEntry'] && document.forms['serendipityEntry']['serendipity['+ textarea +']']) {
        eltarget = document.forms['serendipityEntry']['serendipity['+ textarea +']']
    } else if (document.forms['serendipityEntry'] && document.forms['serendipityEntry'][textarea]) {
        eltarget = document.forms['serendipityEntry'][textarea];
    } else {
        eltarget = document.forms[0].elements[0];
    }
    
    wrapSelection(eltarget, str, '');

    eltarget.focus();
}

// Inserting media db img markup including s9y-specific container markup?
function serendipity_imageSelector_done(textarea) {
    var insert = '';
    var img = '';
    var src = '';
    var alt = '';
    var title = '';

    var f = document.forms['serendipity[selForm]'].elements;

    if (f['serendipity[linkThumbnail]'] && f['serendipity[linkThumbnail]'][0].checked == true) {
        img       = f['thumbName'].value;
        imgWidth  = f['imgThumbWidth'].value;
        imgHeight = f['imgThumbHeight'].value;
    } else {
        img       = f['imgName'].value;
        imgWidth  = f['imgWidth'].value;
        imgHeight = f['imgHeight'].value;
    }

    if (f['serendipity[filename_only]']) {
        if (f['serendipity[htmltarget]']) {
            starget = f['serendipity[htmltarget]'].value;
        } else {
            starget = 'serendipity[' + textarea + ']';
        }

        if (f['serendipity[filename_only]'].value == 'true') {
            parent.self.opener.serendipity_imageSelector_addToElement(img, f['serendipity[htmltarget]'].value);
            parent.self.close();
            return true;
        } else if (f['serendipity[filename_only]'].value == 'id') {
            parent.self.opener.serendipity_imageSelector_addToElement(f['imgID'].value, starget);
            parent.self.close();
            return true;
        } else if (f['serendipity[filename_only]'].value == 'thumb') {
            parent.self.opener.serendipity_imageSelector_addToElement(f['thumbName'].value, starget);
            parent.self.close();
            return true;
        } else if (f['serendipity[filename_only]'].value == 'big') {
            parent.self.opener.serendipity_imageSelector_addToElement(f['imgName'].value, starget);
            parent.self.close();
            return true;
        }
    }

    alt = f['serendipity[alt]'].value.replace(/"/g, "&quot;");
    title = f['serendipity[title]'].value.replace(/"/g, "&quot;");
    
    styled = false; // Templates now do this.

    imgID = 0;

    if (f['imgID']) {
        imgID = f['imgID'].value;
    }
    baseURL = '';
    if (f['baseURL']) {
        baseURL = f['baseURL'].value;
    }

    floating = 'center';

    if (f['serendipity[align]'][0].checked == true) {
        img = "<!-- s9ymdb:" + imgID + " --><img class=\"serendipity_image_center\" width=\"" + imgWidth + "\" height=\"" + imgHeight + "\" " + (styled ? 'style="border: 0px; padding-left: 5px; padding-right: 5px;"' : '') + ' src="' + img + "\" " + (title != '' ? 'title="' + title + '"' : '') + " alt=\"" + alt + "\" />";
    } else if (f['serendipity[align]'][1].checked == true) {
        img = "<!-- s9ymdb:" + imgID + " --><img class=\"serendipity_image_left\" width=\"" + imgWidth + "\" height=\"" + imgHeight + "\" " + (styled ? 'style="float: left; border: 0px; padding-left: 5px; padding-right: 5px;"' : '') + ' src="' + img + "\" " + (title != '' ? 'title="' + title + '"' : '') + " alt=\"" + alt + "\" />";
        floating = 'left';
    } else if (f['serendipity[align]'][2].checked == true) {
        img = "<!-- s9ymdb:" + imgID + " --><img class=\"serendipity_image_right\" width=\"" + imgWidth + "\" height=\"" + imgHeight + "\" " + (styled ? 'style="float: right; border: 0px; padding-left: 5px; padding-right: 5px;"' : '') + ' src="' + img + "\" " + (title != '' ? 'title="' + title + '"' : '') + " alt=\"" + alt + "\" />";
        floating = 'right';
    }

    if (f['serendipity[isLink]'][1].checked == true) {
        if (f['serendipity[target]'].selectedIndex) {
            targetval = f['serendipity[target]'].options[f['serendipity[target]'].selectedIndex].value;
        } else {
            targetval = '';
        }

        prepend   = '';
        ilink     = f['serendipity[url]'].value;

        if (!targetval || targetval == 'none') {
            itarget = '';
        } else if (targetval == 'js') {
            itarget = ' onclick="F1 = window.open(\'' + f['serendipity[url]'].value + '\',\'Zoom\',\''
                    + 'height=' + (parseInt(f['imgHeight'].value) + 15) + ','
                    + 'width='  + (parseInt(f['imgWidth'].value)  + 15) + ','
                    + 'top='    + (screen.height - f['imgHeight'].value) /2 + ','
                    + 'left='   + (screen.width  - f['imgWidth'].value)  /2 + ','
                    + 'toolbar=no,menubar=no,location=no,resize=1,resizable=1,scrollbars=yes\'); return false;"';
        } else if (targetval == '_blank') {
            itarget = ' target="_blank"';
        } else if (targetval == 'plugin') {
            itarget = ' id="s9yisphref' + imgID + '" onclick="javascript:this.href = this.href + \'&amp;serendipity[from]=\' + self.location.href;"';
            prepend = '<a title="' + ilink + '" id="s9yisp' + imgID + '"></a>';
            ilink   = baseURL + 'serendipity_admin_image_selector.php?serendipity[step]=showItem&amp;serendipity[image]=' + imgID;
        }

        insert = prepend + "<a class=\"serendipity_image_link\" " + (title != '' ? 'title="' + title + '"' : '') + " href='" + ilink + "'" + itarget + ">" + img + "</a>";
    } else {
        insert = img;
    }

    if (document.getElementById('serendipity_imagecomment').value != '') {
        comment = f['serendipity[imagecomment]'].value;

        block = '<div class="serendipity_imageComment_' + floating + '" style="width: ' + imgWidth + 'px">'
              +     '<div class="serendipity_imageComment_img">' + insert + '</div>'
              +     '<div class="serendipity_imageComment_txt">' + comment + '</div>'
              + '</div>';
    } else {
        block = insert;
    }

    if (typeof(parent.self.opener.htmlarea_editors) != 'undefined' && typeof(parent.self.opener.htmlarea_editors[textarea]) != 'undefined') {
        parent.self.opener.htmlarea_editors[textarea].surroundHTML(block, '');
    } else if (parent.self.opener.editorref) {
        parent.self.opener.editorref.surroundHTML(block, '');
    } else {
        parent.self.opener.serendipity_imageSelector_addToBody(block, textarea);
    }

    parent.self.close();
}

// Toggle extended entry editor
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



// Collapses/expands the category selector
function showItem(id) {
    if (id == undefined) {
        // this function got called by addLoadEvent, used pre s9y 2.0
        id = 'categoryselector';
        if (jQuery('#'+id).children('*[selected="selected"]').length > 1) {
            // when loading the page new for the preview and more than one category was selected, collapsing
            // the category-selector would lose those categories
            jQuery('#'+id).attr("size", jQuery('#'+id).children().size);
            jQuery('#option_' + id).attr("src", minus_img);
            return
        }
    }
    if (jQuery('#'+id).attr("multiple")) {
        jQuery('#'+id).removeAttr("multiple");
        jQuery('#'+id).removeAttr("size");
        jQuery('#option_' + id).attr("src", plus_img);
        
    } else {
        jQuery('#'+id).attr("multiple", "");
        jQuery('#'+id).attr("size", jQuery('#'+id).children().size);
        jQuery('#option_' + id).attr("src", minus_img);
    }
}

// ?
function rememberMediaOptions() {
    el = document.getElementById('imageForm');

    for (i = 0; i < el.elements.length; i++) {
        elname = new String(el.elements[i].name);
        elname = elname.replace(/\[/g, '_');
        elname = elname.replace(/\]/g, '');

        if (el.elements[i].type == 'radio') {
            if (el.elements[i].checked) {
                SetCookie(elname, el.elements[i].value);
            }
        } else if (typeof(el.elements[i].options) == 'object') {
            SetCookie(elname, el.elements[i].options[el.elements[i].selectedIndex].value);
        }
    }
}

// Rename file in media db
function rename(id, fname) {
    if (newname = prompt(media_rename + fname, fname)) {
        newloc = '?serendipity[adminModule]=images&serendipity[adminAction]=rename&serendipity[fid]='+ escape(id) + '&serendipity[newname]='+ escape(newname) +'&'+ media_token_url;
        location.href=newloc;
    }
}

// Collapse/expand tree view in media db choose img popup window
var tree_toggle_state = 'expand';

function treeToggleAll() {
    if (tree_toggle_state == 'expand') {
        tree_toggle_state = 'collapse';
        tree.expandAll();
    } else {
        tree_toggle_state = 'expand';
        tree.collapseAll();
        coreNode.expand();
    }
}

// Used internally by fillInput; regexp replace
function getfilename(value) {
    re = /^.+[\/\\]+?(.+)$/;
    return value.replace(re, "$1");
}

// Hides the foreign upload form if batch upload is used (if more
// images are added)
isFileUpload = true;

function hideForeign() {
    document.getElementById('foreign_upload').style.display = 'none';
    document.getElementById('imageurl').value = '';
    isFileUpload = false;
}

// ?
function rememberUploadOptions() {
    td     = document.getElementById('target_directory_2');
    td_val = td.options[td.selectedIndex].value;
    SetCookie("addmedia_directory", td_val);
}

// Clones the upload form template
var upload_fieldcount = 1;

function addUploadField() {
    upload_fieldcount++;

    fields = jQuery('#upload_template').clone();
    fields.attr('id', 'upload_form_' + upload_fieldcount);
    fields.css('display', 'block');

    userfile             = jQuery('.uploadform_userfile',               fields);
    userfile_label       = jQuery('.uploadform_userfile_label',         fields);
    targetfilename       = jQuery('.uploadform_target_filename',        fields);
    targetfilename_label = jQuery('.uploadform_target_filename_label',  fields);
    targetdir            = jQuery('.uploadform_target_directory',       fields);
    targetdir_label      = jQuery('.uploadform_target_directory_label', fields);
    columncount          = jQuery('.uploadform_column_count',           fields);

    userfile.attr('id', 'userfile_' + upload_fieldcount);
    userfile.attr('name', 'serendipity[userfile][' + upload_fieldcount + ']');
    userfile_label.attr('for', 'userfile_' + upload_fieldcount);

    targetfilename.attr('id', 'target_filename_' + upload_fieldcount);
    targetfilename.attr('name', 'serendipity[target_filename][' + upload_fieldcount + ']');
    targetfilename_label.attr('for', 'target_filename_' + upload_fieldcount);

    targetdir.attr('id', 'target_directory_' + upload_fieldcount);
    targetdir.attr('name', 'serendipity[target_directory][' + upload_fieldcount + ']');
    targetdir_label.attr('for', 'target_directory_' + upload_fieldcount);

    columncount.attr('id', 'column_count_' + upload_fieldcount);
    columncount.attr('name', 'serendipity[column_count][' + upload_fieldcount + ']');

    fields.insertBefore('#upload_form');

    document.getElementById(targetdir.attr('id')).selectedIndex = document.getElementById('target_directory_' + (upload_fieldcount - 1)).selectedIndex;
}

// ?
var inputStorage = new Array();

function checkInputs() {
    for (i = 1; i <= upload_fieldcount; i++) {
        if (!inputStorage[i]) {
            fillInput(i, i);
        } else if (inputStorage[i] == document.getElementById('target_filename_' + i).value) {
            fillInput(i, i);
        }
    }

}

// Used internally by checkInputs
function fillInput(source, target) {
    useDuplicate = false;
    // First field is a special value for foreign URLs instead of uploaded files
    if (source == 1 && document.getElementById('imageurl').value != "") {
        sourceval = getfilename(document.getElementById('imageurl').value);
        useDuplicate = true;
    } else {
        sourceval = getfilename(document.getElementById('userfile_' + source).value);
    }

    if (sourceval.length > 0) {
        document.getElementById('target_filename_' + target).value = sourceval;
        inputStorage[target] = sourceval;
    }
    // Display filename in duplicate form as well!
    if (useDuplicate) {
        tkey = target + 1;

        if (!inputStorage[tkey] || inputStorage[tkey] == document.getElementById('target_filename_' + tkey).value) {
            document.getElementById('target_filename_' + (target+1)).value = sourceval;
            inputStorage[target + 1] = '~~~';
        }
    }
}

// outsourced from comments.inc.tpl
//
// Collapse/expand the full length comment in comments list
// NOTE: doesn't work/isn't used right nowf
function FT_toggle(id) {
    if ( document.getElementById(id + '_full').style.display == '' ) {
        document.getElementById(id + '_full').style.display='none';
        document.getElementById(id + '_summary').style.display='';
        document.getElementById(id + '_text').innerHTML = view_full;
    } else {
        document.getElementById(id + '_full').style.display='';
        document.getElementById(id + '_summary').style.display='none';
        document.getElementById(id + '_text').innerHTML = view_hide;
    }

    return false;
}

// Inverts a selection of checkboxes
// NOTE: similar function (but not duplicate!) exists in admin_scripts.js
function invertSelection() {
    var f = document.formMultiDelete;

    for (var i = 0; i < f.elements.length; i++) {
        if( f.elements[i].type == 'checkbox' ) {
            f.elements[i].checked = !(f.elements[i].checked);
            f.elements[i].onclick();
        }
    }
}

// Purely cosmetic function to highlight (multi-)selected comments
// NOTE: hard-coded color values in JS. Ugh. It would be better to
//       just add a class and let CSS do the rest.
var origborder = '';
var origwidth = '';

function highlightComment(id, checkvalue) {
    var comment = document.getElementById(id);

    if (origborder == '') {
        origborder = comment.style.borderColor;
        if (origborder == '') {
            origborder = '#fff';
        }
    }

    if (origwidth == '') {
        origwidth = comment.style.borderWidth;
        if (origwidth == '' || origwidth == 0) {
            origwidth = 1;
        }
    }

    if (checkvalue) {
        comment.style.borderColor = '#f00';
        comment.style.borderWidth = origwidth;
    } else {
        comment.style.borderColor = '';
        comment.style.borderWidth = origwidth;
    }
}

// -->
