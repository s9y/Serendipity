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

var thisForm;

function getMozSelection(txtarea) {
    var selLength = txtarea.textLength;
    var selStart = txtarea.selectionStart;
    var selEnd = txtarea.selectionEnd;

    if (selEnd==1 || selEnd==2) {
        selEnd=selLength;
    }
    return (txtarea.value).substring(selStart, selEnd);
}

function getIESelection(txtarea) {
    return document.selection.createRange().text;
}

function mozWrap(txtarea, lft, rgt) {
    var selLength = txtarea.textLength;
    var selStart = txtarea.selectionStart;
    var selEnd = txtarea.selectionEnd;

    if (txtarea.setSelectionRange) {
        if (selEnd==1 || selEnd==2) selEnd=selLength;
        var s1 = (txtarea.value).substring(0,selStart);
        var s2 = (txtarea.value).substring(selStart, selEnd)
        var s3 = (txtarea.value).substring(selEnd, selLength);
        txtarea.value = s1 + lft + s2 + rgt + s3;
    } else {
        txtarea.value = txtarea.value + ' ' + lft + rgt + ' ';
    }
}

function IEWrap(txtarea, lft, rgt) {
    strSelection = document.selection.createRange().text;
    if (strSelection != "") {
        document.selection.createRange().text = lft + strSelection + rgt;
    } else {
        txtarea.value = txtarea.value + lft + rgt;
    }
}

function wrapSelection(txtarea, lft, rgt) {
    scrollPos = false;
    if (txtarea.scrollTop) {
        scrollPos = txtarea.scrollTop;
    }

    if (document.all) {
        IEWrap(txtarea, lft, rgt);
    } else if (document.getElementById) {
        mozWrap(txtarea, lft, rgt);
    }
    
    if (scrollPos) {
        txtarea.focus();
        txtarea.scrollTop = scrollPos;
    }
}

function wrapSelectionWithLink(txtarea) {
    var my_link = prompt("Enter URL:","http://");

    if (document.all && getIESelection(txtarea) == "" ||
         document.getElementById && getMozSelection(txtarea) == "") {
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

function mozInsert(txtarea, str) {
    var selLength = txtarea.textLength;
    var selStart = txtarea.selectionStart;
    var selEnd = txtarea.selectionEnd;
    if (selEnd==1 || selEnd==2) {
        selEnd=selLength;
    }
    var s1 = (txtarea.value).substring(0,selStart);
    var s2 = (txtarea.value).substring(selStart, selEnd)
    var s3 = (txtarea.value).substring(selEnd, selLength);
    txtarea.value = s1 + str + s2 + s3;
}

function wrapInsImage(area) {
    var loc = prompt('Enter the Image Location: ');
    if (!loc) {
        return;
    }
    mozInsert(area,'<img src="'+ loc + '" alt="" />');
}

/* end Better-Editor functions */

function serendipity_insImage (area) {
    var loc = prompt('Enter the Image Location: ');
    if (!loc) {
        area.focus();
        return;
    }

    area.value = area.value + '<img src="' + loc + '" alt="" />';
    area.focus();
}

function serendipity_insBasic (area, tag) {
    area.value = area.value + "<" + tag + "></" + tag + ">";
    area.focus();
}

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

function serendipity_imageSelector_addToElement (str, el)
{
    document.getElementById(el).value = str;
    if (document.getElementById(el).type != 'hidden' && document.getElementById(el).focus) {
        document.getElementById(el).focus();
    }
    if (document.getElementById(el).onchange) {
        document.getElementById(el).onchange();
    }
}

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
        oEditor;

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
        //tinyMCE.execCommand('mceInsertContent', false, str);
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


function serendipity_imageSelector_done(textarea)
{
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

// -->
