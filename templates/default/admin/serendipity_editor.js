// File referenced in:
// – include/admin/tpl/category.inc.tpl
// – include/admin/tpl/comments.inc.tpl
// – include/admin/tpl/out_stack_loop.tpl
// – include/functions_entries_admin.inc.php
// – templates/*/admin/admin_scripts.js
// – templates/*/admin/entries.tpl
// – templates/*/admin/media_choose.tpl
// – templates/*/admin/media_upload.tpl

/* $Id$ */
/*
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
*/

/*
    Based upon code written by chris wetherell,  http://www.massless.org, chris [THE AT SIGN] massless.org
*/

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

// "Transfer" value from media db popup to form element, used for example for selecting a category-icon
function serendipity_imageSelector_addToElement (str, id) {
    var $input = jQuery('#'+id);
    $input.val(str);

    if ($input.attr('type') != 'hidden') {
        $input.focus();    // IE would generate an error when focusing an hidden element
    }

    // calling the change-event for doing stuff like generating the preview-image
    $input.change();
}

// "Transfer" value from media db popup to textarea, including wysiwyg
// This gets textarea="body"/"extended" and tries to insert into the textarea named serendipity[body]/serendipity[extended]
// No! It does even support other textareas like the two nuggets in staticpages
function serendipity_imageSelector_addToBody (str, textarea)
{
    var oEditor;

    // check for CKEDITOR usage
    if (typeof(CKEDITOR) != 'undefined') {

        // if here the blog uses CKEDITOR
        oEditor = isinstance; // build-in by ckeditor plugin

        if (oEditor.mode == "wysiwyg") {
            // if here the editior is in WYSIWYG mode so use the insert html function
            oEditor.insertHtml(str);
            // CKEDITOR.editor.mode = "source" disables function buttons, so using the fallback is redundant and could even confuse
        }

    // check for FCKEditor usage
    } else if (typeof(FCKeditorAPI) != 'undefined') {

        // if here the blog uses FCK editor
        oEditor = FCKeditorAPI.GetInstance('serendipity[' + textarea + ']') ;

        if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG) {
            // if here the editior is in WYSIWYG mode so use the insert html function
            oEditor.InsertHtml(str);
        } else {
            // if here just insert the text to the textarea ( named with the value of textarea variable )
            noWysiwygAdd( str, textarea );
        }

    } else if(typeof(xinha_editors) != 'undefined') {

        // if here the blog uses Xinha editor
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
        if (textarea == 'body' && typeof(editorbody) != 'undefined') {
            oEditor = editorbody;
        } else if (textarea == 'extended' && typeof(editorextended) != 'undefined') {
            oEditor = editorextended;
        } else if (typeof(htmlarea_editors) != 'undefined' && typeof(htmlarea_editors[textarea]) != 'undefined') {
            oEditor = htmlarea_editors[textarea];
        }

        // the actual insert for the HTMLArea editor
        if (oEditor._editMode != 'textmode') {
            // if here the editor is in WYSIWYG mode so use the insert html function
            oEditor.insertHTML(str);
        } else {
            // if here just insert the text to the textarea ( named with the value of textarea variable )
            noWysiwygAdd(str, textarea);
        }

    } else if(typeof(TinyMCE) != 'undefined') {

        // for the TinyMCE editor we do not have a text mode insert
        tinyMCE.execInstanceCommand('serendipity[' + textarea + ']', 'mceInsertContent', false, str);

    } else {
        noWysiwygAdd(str, textarea);
    }
}

// The noWysiwygAdd JS function is the vanila serendipity_imageSelector_addToBody js function
// which works fine in NO WYSIWYG mode
// NOTE: the serendipity_imageSelector_addToBody could add any valid HTML string to the textarea
/* Temporary disabled, since this does not support my changes to get this non func to work well everywhere (Ian)
function noWysiwygAdd( str, textarea ) {
    wrapSelection(jQuery('textarea[name="serendipity['+textarea+']"]'), str, '');
}
*/

// this is used by noWysiwygAdd() in nugget textareas
function urldecode(url)
{
  return decodeURIComponent(url.replace(/\+/g, ' '));
}

// The noWysiwygAdd JS function is the vanila serendipity_imageSelector_addToBody js function which works fine in NO WYSIWYG mode
// NOTE: the serendipity_imageSelector_addToBody could add any valid HTML string to the textarea
function noWysiwygAdd( str, textarea )
{
    // default case: no wysiwyg editor
    eltarget = '';
    if (document.forms['serendipityEntry'] && document.forms['serendipityEntry']['serendipity['+ textarea +']']) {
        eltarget = document.forms['serendipityEntry']['serendipity['+ textarea +']'];
    } else if (document.forms['serendipityEntry'] && document.forms['serendipityEntry'][textarea]) {
        eltarget = document.forms['serendipityEntry'][textarea];
    } else {
        //eltarget = document.forms[0].elements[0]; // this did not work in staticpages textareas
        var elements = document.getElementsByTagName("textarea");
        for (var i = 0; i < elements.length; ++i) {
            if (elements[i].getAttribute("name") == urldecode(textarea)) {
                eltarget = elements[i];
            }
        } if (eltarget=='') eltarget = document.forms[0].elements[0];
    }
    wrapSelection(eltarget, str, '');
    eltarget.focus();
}

// Inserting media db img markup including s9y-specific container markup
function serendipity_imageSelector_done(textarea) {
    var insert = '';
    var img = '';
    var src = '';
    var alt = '';
    var title = '';

    var f = document.forms['serendipity[selForm]'].elements;

    img           = f['imgName'].value;
    var imgWidth  = f['imgWidth'].value;
    var imgHeight = f['imgHeight'].value;
    if (f['serendipity[linkThumbnail]'] && f['serendipity[linkThumbnail]'][0].checked == true) {
        img       = f['thumbName'].value;
        imgWidth  = f['imgThumbWidth'].value;
        imgHeight = f['imgThumbHeight'].value;
    }
        

    if (f['serendipity[filename_only]']) {
        // this part is used when selecting only the image without further markup (-> category-icon)
        var starget = f['serendipity[htmltarget]'] ? f['serendipity[htmltarget]'].value : 'serendipity[' + textarea + ']';

        switch(f['serendipity[filename_only]'].value) {
        case 'true':
            parent.self.opener.serendipity_imageSelector_addToElement(img, f['serendipity[htmltarget]'].value);
            parent.self.close();
            return true;
        case 'id':
            parent.self.opener.serendipity_imageSelector_addToElement(f['imgID'].value, starget);
            parent.self.close();
            return true;
        case 'thumb':
            parent.self.opener.serendipity_imageSelector_addToElement(f['thumbName'].value, starget);
            parent.self.close();
            return true;
        case 'big':
            parent.self.opener.serendipity_imageSelector_addToElement(f['imgName'].value, starget);
            parent.self.close();
            return true;
        }
    }

    alt = f['serendipity[alt]'].value.replace(/"/g, "&quot;");
    title = f['serendipity[title]'].value.replace(/"/g, "&quot;");

    var imgID = 0;
    if (f['imgID']) {
        imgID = f['imgID'].value;
    }

    var floating = jQuery(':input[name="serendipity[align]"]:checked').val();
    if (floating == "") {
        floating = "center";
    }
    img = "<!-- s9ymdb:" + imgID + " --><img class=\"serendipity_image_"+ floating +"\" width=\"" + imgWidth + "\" height=\"" + imgHeight + '"  src="' + img + "\" " + (title != '' ? 'title="' + title + '"' : '') + " alt=\"" + alt + "\" />";

    if (jQuery("#radio_islink_yes").attr("checked")) {
        // wrap the img in a link to the image. TODO: The label in the media_chooser.tpl explains it wrong
        var targetval = jQuery('#select_image_target').val();

        var prepend   = '';
        var ilink     = f['serendipity[url]'].value;
        var itarget = '';

        switch (targetval) {
        case 'js':
            var itarget = ' onclick="F1 = window.open(\'' + f['serendipity[url]'].value + '\',\'Zoom\',\''
                    + 'height=' + (parseInt(f['imgHeight'].value) + 15) + ','
                    + 'width='  + (parseInt(f['imgWidth'].value)  + 15) + ','
                    + 'top='    + (screen.height - f['imgHeight'].value) /2 + ','
                    + 'left='   + (screen.width  - f['imgWidth'].value)  /2 + ','
                    + 'toolbar=no,menubar=no,location=no,resize=1,resizable=1,scrollbars=yes\'); return false;"';
            break;
        case '_blank':
            var itarget = ' target="_blank"';
            break;
        case 'plugin':
            var itarget = ' id="s9yisphref' + imgID + '" onclick="javascript:this.href = this.href + \'&amp;serendipity[from]=\' + self.location.href;"';
            prepend = '<a title="' + ilink + '" id="s9yisp' + imgID + '"></a>';
            ilink   = f['baseURL'].value + 'serendipity_admin_image_selector.php?serendipity[step]=showItem&amp;serendipity[image]=' + imgID;
            break;
        }

        var img = prepend + "<a class=\"serendipity_image_link\" " + (title != '' ? 'title="' + title + '"' : '') + " href='" + ilink + "'" + itarget + ">" + img + "</a>";
    } 

    if (jQuery('#serendipity_imagecomment').val() != '') {
        var comment = f['serendipity[imagecomment]'].value;

        var img = '<div class="serendipity_imageComment_' + floating + '" style="width: ' + imgWidth + 'px">'
              +     '<div class="serendipity_imageComment_img">' + img + '</div>'
              +     '<div class="serendipity_imageComment_txt">' + comment + '</div>'
              + '</div>';
    }

    parent.self.opener.serendipity_imageSelector_addToBody(img, textarea);
    parent.self.close();
}

// Toggle extended entry editor
function toggle_extended(setCookie) {
    if (jQuery('textarea[name="serendipity[extended]"]:hidden').length > 0) {
        jQuery('textarea[name="serendipity[extended]"]').show();    // we use the name selector instead of the id here, because selecting the id doesn't work
        jQuery('#tools_extended').show();
        jQuery('#option_extended').attr('src', minus_img);
    } else {
        jQuery('textarea[name="serendipity[extended]"]').hide();
        jQuery('#tools_extended').hide();
        jQuery('#option_extended').attr('src', plus_img);
    }
    if (setCookie) {
        document.cookie = 'serendipity[toggle_extended]=' + ((jQuery('textarea[name="serendipity[extended]"]:hidden').length == 0) ? "true" : "") + ';';
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

// save in the cookie which options were selected when inserting a image from the media db
function rememberMediaOptions() {
    jQuery('#imageForm :input').each(function(index, element) {
        if (! (element.type == 'radio' && element.checked == false)) {
            SetCookie(element.name.replace(/\[/g, '_').replace(/\]/g, ''), jQuery(element).val());
        }
    });
}

// Rename file in media db
function rename(id, fname) {
    var newname;
    if (newname = prompt(media_rename + fname, fname)) {
        location.href='?serendipity[adminModule]=images&serendipity[adminAction]=rename&serendipity[fid]='+ escape(id) + '&serendipity[newname]='+ escape(newname) +'&'+ media_token_url;
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

// Hides the foreign upload form if batch upload is used (if more
// images are added)
function hideForeign() {
    jQuery('#foreign_upload').hide();
    jQuery('#imageurl').val('');
}

// save in which directory the frist uploaded files is stored (the default when only isnerting one file)
function rememberUploadOptions() {
    SetCookie("addmedia_directory", jQuery('#target_directory_2').val());
}

// Clones the upload form template
function addUploadField() {
    var upload_fieldcount = jQuery('.uploadform_userfile').length;

    var $fields = jQuery('#upload_template').clone();
    $fields.attr('id', 'upload_form_' + upload_fieldcount);
    $fields.css('display', 'block');

    var userfile             = jQuery('.uploadform_userfile',               $fields);
    var userfile_label       = jQuery('.uploadform_userfile_label',         $fields);
    var targetfilename       = jQuery('.uploadform_target_filename',        $fields);
    var targetfilename_label = jQuery('.uploadform_target_filename_label',  $fields);
    var targetdir            = jQuery('.uploadform_target_directory',       $fields);
    var targetdir_label      = jQuery('.uploadform_target_directory_label', $fields);

    userfile.attr('id', 'userfile_' + upload_fieldcount);
    userfile.attr('name', 'serendipity[userfile][' + upload_fieldcount + ']');
    userfile_label.attr('for', 'userfile_' + upload_fieldcount);

    targetfilename.attr('id', 'target_filename_' + upload_fieldcount);
    targetfilename.attr('name', 'serendipity[target_filename][' + upload_fieldcount + ']');
    targetfilename_label.attr('for', 'target_filename_' + upload_fieldcount);

    targetdir.attr('id', 'target_directory_' + upload_fieldcount);
    targetdir.attr('name', 'serendipity[target_directory][' + upload_fieldcount + ']');
    targetdir_label.attr('for', 'target_directory_' + upload_fieldcount);

    $fields.insertBefore('#upload_form');

    document.getElementById(targetdir.attr('id')).selectedIndex = document.getElementById('target_directory_' + (upload_fieldcount - 1)).selectedIndex;
}

// outsourced from comments.inc.tpl
//
// Collapse/expand the full length comment in comments list
// NOTE: isn't used right now in 2k11
function FT_toggle(id) {
    jQuery('#'+ id + '_full').toggle();
    jQuery('#'+ id + '_summary').toggle();
    if (jQuery('#'+ id + '_full:visible').length > 0) {
        jQuery('#'+ id + '_text').text(view_full);
    } else {
        jQuery('#'+ id + '_text').text(view_hide);
    }

    return false;
}

// Inverts a selection of checkboxes
// NOTE: similar function (but not duplicate!) exists in admin_scripts.js
function invertSelection() {
    jQuery('.input_checkbox').each(function(index, checkbox) {
        jQuery(checkbox).attr('checked',  ! jQuery(checkbox).attr('checked'));
        var id = 'comment_' + checkbox.name.replace(/.*\[.*\]\[(.*)\]/, "$1");   // gets the id from the name of the checkbox, which is serendipity[delete][id]
        highlightComment(id, jQuery(checkbox).attr('checked'));
    });
}

// Purely cosmetic function to highlight/dehighlight a comment by toggling the class comment_selected
function highlightComment(id, checkvalue) {
    jQuery('#'+id).toggleClass('comment_selected');
}
