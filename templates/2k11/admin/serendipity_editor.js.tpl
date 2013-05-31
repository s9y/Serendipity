/* $Id$ */
/*
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
*/

// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; try { args.callee = f.caller } catch(e) {}; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){ function b() { } for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());) { a[d]=a[d]||b; } } )
(function() { try { console.log();return window.console; } catch(a) { return (window.console= { } ); } } ());

// Fires functions which are generated dynamically in backend PHP files
// (i.e. include/functions_entries_admin.inc.php) which load the various
// WYSIWYG editors in entries editor, HTML nuggets etc.
function spawn() {
    if (self.Spawnextended) {
        Spawnextended();
    }

    if (self.Spawnbody) {
        Spawnbody();
    }

    if (self.Spawnnugget) {
        Spawnnugget();
    }
}

// Generic function to set cookies. Duh.
function SetCookie(name, value) {
    var today  = new Date();
    var expire = new Date();
    expire.setTime(today.getTime() + (60*60*24*30*1000));
    document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
}

// Some sort of onload wrapper? @onli says jQuery can help with this
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            oldonload();
            func();
        }
    }
}

/**
 * Based upon code written by chris wetherell
 * http://www.massless.org
 * chris [THE AT SIGN] massless.org
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
    var $txtarea = $(txtarea);
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

    if (getSelection($(txtarea) ) == "") {
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
    $txtarea = $(txtarea);
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

// Switches preview of image selected from media db by changing the
// container's background image
function change_preview(id) {
    var text_box = document.getElementById('serendipity[template][' + id + ']');
    var image_box = document.getElementById(id + '_preview'); 
    var filename = text_box.value;

    image_box.style.backgroundImage = 'url(' + filename + ')';
    image_box.style.backgroundRepeat = 'no-repeat';
}

// Opens media db image selection in new window
function choose_media(id) {
    window.open('serendipity_admin_image_selector.php?serendipity[htmltarget]=' + id + '&serendipity[filename_only]=true', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');
}

// "Transfer" value from media db popup to form element, used for example for selecting a category-icon
function serendipity_imageSelector_addToElement (str, id) {
    var $input = $('#'+id);
    $input.val(str);

    if ($input.attr('type') != 'hidden') {
        $input.focus();    // IE would generate an error when focusing an hidden element
    }

    // calling the change-event for doing stuff like generating the preview-image
    $input.change();
}

// Show (extended) filters in media db
// NOTE: since we (will) use this in various sections of the backend, we
//       probably want a more generic function for this
function showFilters()  {
    s = document.getElementById('moreFilter').style;

    if (s.display == 'none') {
        s.display = 'block';
    } else {
        s.display = 'none';
    }
}

// Add another (image) keyword
function AddKeyword(keyword)  {
    s = document.getElementById('keyword_input').value;
    document.getElementById('keyword_input').value = (s != '' ? s + ';' : '') + keyword;
}
{*
// "Transfer" value from media db popup to textarea, including wysiwyg
// This gets textarea="body"/"extended" and tries to insert into the textarea named serendipity[body]/serendipity[extended]
function serendipity_imageSelector_addToBody (str, textarea) {
    var oEditor;
    if (typeof(FCKeditorAPI) != 'undefined') {
        oEditor = FCKeditorAPI.GetInstance('serendipity[' + textarea + ']') ;

        if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG) {
            oEditor.InsertHtml(str);
            return;
        }
    } else if(typeof(xinha_editors) != 'undefined') {
        if (typeof(xinha_editors['serendipity[' + textarea + ']']) != 'undefined') {
            oEditor = xinha_editors['serendipity['+ textarea +']'];
        }

        if (oEditor) {
            oEditor.insertHTML(str);
            return;
        }
    } else if(typeof(HTMLArea) != 'undefined') {
        if (textarea == 'body' && typeof(editorbody) != 'undefined') {
            oEditor = editorbody;
        } else if (textarea == 'extended' && typeof(editorextended) != 'undefined') {
            oEditor = editorextended;
        } else if (typeof(htmlarea_editors) != 'undefined' && typeof(htmlarea_editors[textarea]) != 'undefined') {
            oEditor =  htmlarea_editors[textarea];
        }

        if (oEditor._editMode != 'textmode') {
            oEditor.insertHTML(str);
            return;
        } 
    } else if(typeof(TinyMCE) != 'undefined') {
        // for the TinyMCE editor we do not have a text mode insert
        tinyMCE.execInstanceCommand('serendipity[' + textarea + ']', 'mceInsertContent', false, str);
        return;
    }
    
    noWysiwygAdd(str, textarea);
}

// The noWysiwygAdd JS function is the vanila serendipity_imageSelector_addToBody js function
// which works fine in NO WYSIWYG mode
// NOTE: the serendipity_imageSelector_addToBody could add any valid HTML string to the textarea
function noWysiwygAdd( str, textarea ) {
    wrapSelection($('textarea[name="serendipity['+textarea+']"]'), str, '');
}
*}
{* do not drop doc notes, as this is done automatically by any minifier *}
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
        oEditor = FCKeditorAPI.GetInstance('serendipity[' + textarea + ']');

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
            // editor has not been registered by the name of its textarea
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
                // if here the editor is in WYSIWYG mode so use the insert html function
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

    var floating = $(':input[name="serendipity[align]"]:checked').val();
    if (floating == "") {
        floating = "center";
    }
    img = "<!-- s9ymdb:" + imgID + " --><img class=\"serendipity_image_"+ floating +"\" width=\"" + imgWidth + "\" height=\"" + imgHeight + '"  src="' + img + "\" " + (title != '' ? 'title="' + title + '"' : '') + " alt=\"" + alt + "\" />";

    if ($("#radio_islink_yes").attr("checked")) {
        // wrap the img in a link to the image. TODO: The label in the media_chooser.tpl explains it wrong
        var targetval = $('#select_image_target').val();

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

    if ($('#serendipity_imagecomment').val() != '') {
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
    if ($('textarea[name="serendipity[extended]"]:hidden').length > 0) {
        $('textarea[name="serendipity[extended]"]').show();    // we use the name selector instead of the id here, because selecting the id does not work
        $('#tools_extended').show();
        $('#option_extended').attr('src', minus_img);
    } else {
        $('textarea[name="serendipity[extended]"]').hide();
        $('#tools_extended').hide();
        $('#option_extended').attr('src', plus_img);
    }
    if (setCookie) {
        document.cookie = 'serendipity[toggle_extended]=' + (($('textarea[name="serendipity[extended]"]:hidden').length == 0) ? "true" : "") + ';';
    }
}

// Collapse/expand one config group
function showConfig(id) {
    if (document.getElementById) {
        plugbox = document.getElementById(id);
        if (plugbox.style.display == 'none') {
            document.getElementById('option' + id).src = img_minus;
            plugbox.style.display = '';
        } else {
            document.getElementById('option' + id).src = img_plus;
            plugbox.style.display = 'none';
        }
    }
}

// Collapse/expand all config groups
var state='';

function showConfigAll(count) {
    if (document.getElementById) {
        for (i = 1; i <= count; i++) {
            document.getElementById('el' + i).style.display = state;
            document.getElementById('optionel' + i).src = (state == '' ? img_minus : img_plus);
        }

        if (state == '') {
            document.getElementById('optionall').src = img_minus;
            state = 'none';
        } else {
            document.getElementById('optionall').src = img_plus;
            state = '';
        }
    }
}

// Seems to check all (checkbox) elements of a given form
// NOTE: doesn't seem to be used anywhere?
function chkAll(frm, arr, mark) {
    for (i = 0; i <= frm.elements.length; i++) {
        try {
            if(frm.elements[i].name == arr) {
                frm.elements[i].checked = mark;
        }
        } catch (err) {}
    }
}

// Collapses/expands the category selector
function showItem(id) {
    if (id == undefined) {
        // this function got called by addLoadEvent, used pre s9y 2.0
        id = 'categoryselector';
        if ($('#'+id).children('*[selected="selected"]').length > 1) {
            // when loading the page new for the preview and more than one category was selected, collapsing
            // the category-selector would lose those categories
            $('#'+id).attr("size", $('#'+id).children().size);
            $('#option_' + id).attr("src", minus_img);
            return
        }
    }
    if ($('#'+id).attr("multiple")) {
        $('#'+id).removeAttr("multiple");
        $('#'+id).removeAttr("size");
        $('#option_' + id).attr("src", plus_img);
        
    } else {
        $('#'+id).attr("multiple", "");
        $('#'+id).attr("size", $('#'+id).children().size);
        $('#option_' + id).attr("src", minus_img);
    }
}

// save in the cookie which options were selected when inserting a image from the media db
function rememberMediaOptions() {
    $('#imageForm :input').each(function(index, element) {
        if (! (element.type == 'radio' && element.checked == false)) {
            SetCookie(element.name.replace(/\[/g, '_').replace(/\]/g, ''), $(element).val());
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
    $('#foreign_upload').hide();
    $('#imageurl').val('');
}

// save in which directory the frist uploaded files is stored (the default when only isnerting one file)
function rememberUploadOptions() {
    SetCookie("addmedia_directory", $('#target_directory_2').val());
}

// Clones the upload form template
function addUploadField() {
    var upload_fieldcount = $('.uploadform_userfile').length;

    var $fields = $('#upload_template').clone();
    $fields.attr('id', 'upload_form_' + upload_fieldcount);
    $fields.css('display', 'block');

    var userfile             = $('.uploadform_userfile',               $fields);
    var userfile_label       = $('.uploadform_userfile_label',         $fields);
    var targetfilename       = $('.uploadform_target_filename',        $fields);
    var targetfilename_label = $('.uploadform_target_filename_label',  $fields);
    var targetdir            = $('.uploadform_target_directory',       $fields);
    var targetdir_label      = $('.uploadform_target_directory_label', $fields);

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
    // This throws: "Uncaught TypeError: Cannot read property 'selectedIndex' of null" …?
    document.getElementById(targetdir.attr('id')).selectedIndex = document.getElementById('target_directory_' + (upload_fieldcount - 1)).selectedIndex;
}

// Collapse/expand the full length comment in comments list
// NOTE: isn't used right now in 2k11
function FT_toggle(id) {
    $('#'+ id + '_full').toggle().removeClass("hidden");
    $('#'+ id + '_summary').toggle().removeClass("hidden");
    if ($('#'+ id + '_full:visible').length > 0) {
        $('#'+ id + '_text').text('{$CONST.VIEW_FULL}');
    } else {
        $('#'+ id + '_text').text('{$CONST.HIDE}');
    }

    return false;
}

// Inverts a selection of checkboxes
// NOTE: similar function (but not duplicate!) from admin_scripts.js, see below
function invertSelection() {
    $('.input_checkbox').each(function(index, checkbox) {
        $(checkbox).attr('checked',  ! $(checkbox).attr('checked'));
        var id = 'comment_' + checkbox.name.replace(/.*\[.*\]\[(.*)\]/, "$1");   // gets the id from the name of the checkbox, which is serendipity[delete][id]
        highlightComment(id, $(checkbox).attr('checked'));
    });
}

// ------------------------------------------------------------------------------
// This duplicate of invertSelection() was used in the defunct admin_scripts.js.
// Somebody needs to figure out why there were two functions of the same name
// and which one is supposed to be used or if both should be used in different
// contexts. Commented out since I assume that the first one is the proper one …
// ------------------------------------------------------------------------------
// Inverts a selection of checkboxes
// NOTE: – also used in serendipity_event_karma
// function invertSelection() {
//     var f = document.formMultiDelete;

//     for (var i = 0; i < f.elements.length; i++) {
//         if (f.elements[i].type == 'checkbox') {
//             f.elements[i].checked = !(f.elements[i].checked);
//         }
//     }
// }


// Purely cosmetic function to highlight/dehighlight a comment by toggling the class comment_selected
function highlightComment(id, checkvalue) {
    $('#'+id).toggleClass('comment_selected');
}

(function($) {
    // Source: https://github.com/yatil/accessifyhtml5.js
    var AccessifyHTML5 = function (defaults, more_fixes) {
      "use strict";

      var fixes = {
          'article'   :    { 'role':          'article'       },
          'aside'     :    { 'role':          'complementary' },
          'nav'       :    { 'role':          'navigation'    },
          'main'      :    { 'role':          'main'          },
          'output'    :    { 'aria-live':     'polite'        },
          'section'   :    { 'role':          'region'        },
          '[required]':    { 'aria-required': 'true'          }
      },
      fix, elems, attr, value, key, obj, i, mo, by_match, el_label,
      ATTR_SECURE = /aria-[a-z]+|role|tabindex|title|alt|data-[\w\-]+|lang|style|maxlength|placeholder|pattern|type/,
      ID_PREFIX = "acfy-id-",
      n_label = 0,
      Doc = document;

      if (Doc.querySelectorAll) {

        if (defaults) {
          if (defaults.header) {
            fixes[defaults.header] = {
              'role': 'banner'
            };
          }
          if (defaults.footer) {
            fixes[defaults.footer] = {
              'role': 'contentinfo'
            };
          }
          if (defaults.main) {
            fixes[defaults.main] = {
              'role': 'main'
            };
            fixes.main = {
              'role': ''
            };
          }
        }

        for (mo in more_fixes) {
          fixes[mo] = more_fixes[mo];
        }

        for (fix in fixes) {
          if (fixes.hasOwnProperty(fix)) {

            elems = Doc.querySelectorAll(fix);
            obj = fixes[fix];

            for (i = 0; i < elems.length; i++) {

              for (key in obj) {
                if (obj.hasOwnProperty(key)) {

                  attr = key;
                  value = obj[key];

                  if (!attr.match(ATTR_SECURE)) {
                    continue;
                  }
                  if (!(typeof value).match(/string|number/)) {
                    continue;
                  }

                  by_match = attr.match(/(describ|label)l?edby/);
                  if (by_match) {
                    el_label = Doc.querySelector(value);

                    if (! el_label) { continue; }

                    if (! el_label.id) {
                      el_label.id = ID_PREFIX + n_label;
                    }

                    value = el_label.id;
                    attr = "aria-" + ("label" === by_match[1] ? "labelledby" : "describedby");

                    n_label++;
                  }

                  if (!elems[i].hasAttribute(attr)) {
                    elems[i].setAttribute(attr, value);
                  }
                }
              }
            }
          }
        }
      }
    };

    // Accessibility helper script
    AccessifyHTML5({
        header: '#top>div>div',
        footer: '#meta'
    });

    // Wait until content including images is loaded
    $(window).load(function() {
        // Equal Heights
        var $eqHeights = $('body').has('.equal_heights');

        if($eqHeights.size() > 0) {
            $('.equal_heights').syncHeight({
                updateOnResize: true
            });
        }
    });
})(jQuery);
