/* $Id$ */
/*
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
*/

(function(serendipity, $, undefined ) {
    // Fires functions which are generated dynamically in backend PHP files
    // (i.e. include/functions_entries_admin.inc.php) which load the various
    // WYSIWYG editors in entries editor, HTML nuggets etc.
    serendipity.spawn = function() {
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

    // Generic function to set cookies
    serendipity.SetCookie = function(name, value) {
        var today  = new Date();
        var expire = new Date();
        expire.setTime(today.getTime() + (60*60*24*30*1000));
        document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
    }

    serendipity.GetCookie = function(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }

    /**
     * Based upon code written by chris wetherell
     * http://www.massless.org
     * chris [THE AT SIGN] massless.org
     */

    // Returns "position" of selection in textarea
    // Used internally by wrapSelectionWithLink()
    serendipity.getSelection = function($txtarea) {
        var start = $txtarea[0].selectionStart;
        var end = $txtarea[0].selectionEnd;
        return $txtarea.val().substring(start, end);
    }

    // Used by non-wysiwyg editor toolbar buttons to wrap selection
    // in a element associated with toolbar button
    serendipity.wrapSelection = function(txtarea, openTag, closeTag) {
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
    serendipity.wrapSelectionWithLink = function(txtarea) {
        var my_link = prompt("Enter URL:","http://");

        if (my_link) {
            if (getSelection($(txtarea) ) == "") {
                var my_desc = prompt("Enter Description", '');
            }
            var my_title = prompt("Enter title/tooltip:", "");
        }

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

            serendipity.wrapSelection(txtarea, lft, rgt);
        }

        return;
    }
    /* end chris w. script */

    // Adds img element to selected text
    // Used internally by wrapInsImage()
    serendipity.insertText = function(txtarea, str) {
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
    serendipity.wrapInsImage = function(txtarea) {
        var loc = prompt('Enter the image location: ');

        if (loc) {
            var alttxt = prompt('Enter alternative text for this image: ');
            serendipity.insertText(txtarea,'<img src="'+ loc + '" alt="' + alttxt + '">');
        }
    }
    /* end Better-Editor functions */

    // Switches preview of image selected from media db by changing the
    // container's background image
    serendipity.change_preview = function(id) {
        var text_box = document.getElementById('serendipity[template][' + id + ']');
        var image_box = document.getElementById(id + '_preview'); 
        var filename = text_box.value;

        image_box.style.backgroundImage = 'url(' + filename + ')';
    }

    // Opens media db image selection in new window
    serendipity.choose_media = function(id) {
        serendipity.openPopup('serendipity_admin_image_selector.php?serendipity[htmltarget]=' + id + '&serendipity[filename_only]=true');
    }

    // "Transfer" value from media db popup to form element, used for example for selecting a category-icon
    serendipity.serendipity_imageSelector_addToElement = function(str, id) {
        id = serendipity.escapeBrackets(id);
        var $input = $('#' + id);
        $input.val(str);
        
        if ($input.attr('type') != 'hidden') {
            $input.focus();    // IE would generate an error when focusing an hidden element
        }

        // calling the change-event for doing stuff like generating the preview-image
        $input.change();
    }

    // Escape [ and ] to be able to use the string as selector
    // jQuery fails to select the input when the selector contains unescaped [ or ]
    serendipity.escapeBrackets = function(str) {
        str = str.replace(/\[/g, "\\[");  
        str = str.replace(/\]/g, "\\]");
        return str;
    }

    // Add another (image) keyword
    serendipity.AddKeyword = function(keyword)  {
        s = document.getElementById('keyword_input').value;
        document.getElementById('keyword_input').value = (s != '' ? s + ';' : '') + keyword;
    }

    // "Transfer" value from media db popup to textarea, including wysiwyg
    // This gets textarea="body"/"extended" and tries to insert into the textarea
    // named serendipity[body]/serendipity[extended]
    serendipity.serendipity_imageSelector_addToBody = function(str, textarea) {
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
        } else if (typeof(CKEDITOR) != 'undefined') {
            oEditor = (typeof(isinstance) == 'undefined') ? CKEDITOR.instances[textarea] : isinstance;
            if (oEditor.mode == "wysiwyg") { 
                oEditor.insertHtml(str);
                return;
            } 
        }

        serendipity.noWysiwygAdd(str, textarea);
    }

    // The noWysiwygAdd JS function is the vanila serendipity_imageSelector_addToBody js function
    // which works fine in NO WYSIWYG mode
    // NOTE: the serendipity_imageSelector_addToBody could add any valid HTML string to the textarea
    serendipity.noWysiwygAdd = function(str, textarea) {
        serendipity.wrapSelection($('#'+serendipity.escapeBrackets(textarea)), str, '');
    }

    // Inserting media db img markup including s9y-specific container markup
    serendipity.serendipity_imageSelector_done = function(textarea) {
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

        if (parent.self.opener == undefined) {
            // in iframes, there is no opener, and the magnific popup is wrapped
            parent.self = window.parent.parent.$.magnificPopup;
            parent.self.opener = window.parent.parent;
        }

        if (f['serendipity[filename_only]']) {
            // this part is used when selecting only the image without further markup (-> category-icon)
            var starget = f['serendipity[htmltarget]'] ? f['serendipity[htmltarget]'].value : 'serendipity[' + textarea + ']';
            
            switch(f['serendipity[filename_only]'].value) {
            case 'true':
                parent.self.opener.serendipity.serendipity_imageSelector_addToElement(img, f['serendipity[htmltarget]'].value);
                parent.self.close();
                return true;
            case 'id':
                parent.self.opener.serendipity.serendipity_imageSelector_addToElement(f['imgID'].value, starget);
                parent.self.close();
                return true;
            case 'thumb':
                parent.self.opener.serendipity.serendipity_imageSelector_addToElement(f['thumbName'].value, starget);
                parent.self.close();
                return true;
            case 'big':
                parent.self.opener.serendipity.serendipity_imageSelector_addToElement(f['imgName'].value, starget);
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
        img = "<!-- s9ymdb:" + imgID + " --><img class=\"serendipity_image_"+ floating +"\" width=\"" + imgWidth + "\" height=\"" + imgHeight + '"  src="' + img + "\" " + (title != '' ? 'title="' + title + '"' : '') + " alt=\"" + alt + "\">";

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

        parent.self.opener.serendipity.serendipity_imageSelector_addToBody(img, textarea);
        parent.self.close();
    }

    // Toggle extended entry editor
    serendipity.toggle_extended = function(setCookie) {
        if ($('#toggle_extended').length == 0) {
            // this function got called on load of the editor
            var toggleButton = '#toggle_extended';
            $('#extended_entry_editor').parent().find('label').first().wrap('<button id="toggle_extended" class="icon_link" type="button"></button>');
            $(toggleButton).prepend('<span class="icon-down-dir"></span> ');
            $(toggleButton).click(function(e) {
                e.preventDefault();
                serendipity.toggle_extended(true);
            });
            if (localStorage.show_extended_editor == "true") {
                // the editor is visible by default - note the string, as bool isn't supported yet in localStorage
                return;
            }
        }
        
        if ($('#extended_entry_editor:hidden').length > 0) {
            $('#extended_entry_editor').show(); // use name selector instead of id here; id does not work
            $('#tools_extended').show();
            $('#toggle_extended').find('> .icon-right-dir').removeClass('icon-right-dir').addClass('icon-down-dir');
            localStorage.show_extended_editor = "true";
        } else {
            $('#extended_entry_editor').hide();
            $('#tools_extended').hide();
            $('#toggle_extended').find('> .icon-down-dir').removeClass('icon-down-dir').addClass('icon-right-dir');
            localStorage.show_extended_editor = "false";
        }
        if (setCookie) {
            document.cookie = 'serendipity[toggle_extended]=' + (($('#extended_entry_editor:hidden').length == 0) ? "true" : "") + ';';
        }
    }

    // Collapses/expands the category selector
    var categoryselector_stored_categories = null;
    serendipity.toggle_category_selector = function(id) {
        if ($('#toggle_' + id).length == 0) {
            // this function got called on load of the editor
            var toggleButton = '#toggle_' + id;

            $('#'+id).before('<button id="toggle_' + id + '" class="button_link" type="button" href="#' + id + '"><span class="icon-right-dir"></span><span class="visuallyhidden"> Toggle expand all</span></button>');

            $(toggleButton).click(function(e) {
                e.preventDefault();
                $(this).toggleClass('active');
                serendipity.toggle_category_selector(id);
            });
            $('#'+id).change(function(e) {
                categoryselector_stored_categories = null;
            });
            
            if ($('#'+id).children('*[selected="selected"]').length > 1) {
                // when loading the page new for the preview and more than one category was
                // selected, collapsing the category-selector would lose those categories
                $('#'+id).attr("size", $('#'+id).children().size);
                $('#toggle_' + id).find('> .icon-right-dir').removeClass('icon-right-dir').addClass('icon-down-dir');
                return
            }
            
        }

        if ($('#'+id).attr("multiple")) {
            if ($('#'+id).children(':selected').filter('[value!="0"]').length > 1) {
                // when collapsing, all multiple selection needs to be saved to be restoreable if the click was a mistake
                var selected_categories = '';
                $('#'+id).children(':selected').filter('[value!="0"]').each(function(i, child) {
                    selected_categories += child.value + ','
                });
                categoryselector_stored_categories = selected_categories;
            }
            $('#'+id).removeAttr("multiple");
            $('#'+id).removeAttr("size");
            $('#toggle_' + id).find('> .icon-down-dir').removeClass('icon-down-dir').addClass('icon-right-dir');
            
        } else {
            $('#'+id).attr("multiple", "");
            $('#'+id).attr("size", $('#'+id).children().size);
            $('#toggle_' + id).find('> .icon-right-dir').removeClass('icon-right-dir').addClass('icon-down-dir');

            var selected_categories = categoryselector_stored_categories;
            if (selected_categories != null) {
                selected_categories = selected_categories.split(',');
                selected_categories.forEach(function(cat_id) {
                    if(cat_id) {
                        $('#'+id).find('[value="'+ cat_id +'"]').attr('selected', 'selected');
                    }
                });
            }
            
        }
    }

    // save in the cookie which options were selected when inserting a image from the media db
    serendipity.rememberMediaOptions = function() {
        $('#imageForm :input').each(function(index, element) {
            if (! (element.type == 'radio' && element.checked == false)) {
                serendipity.SetCookie(element.name.replace(/\[/g, '_').replace(/\]/g, ''), $(element).val());
            }
        });
    }

    // Rescale image
    serendipity.rescale = function(dim, newval) { 
        var ratio          = $('#serendipityScaleImg').attr('data-imgheight')/$('#serendipityScaleImg').attr('data-imgwidth');
        var trans          = new Array();
        trans['width']     = new Array('serendipity[height]', ratio);
        trans['height']    = new Array('serendipity[width]', 1/ratio);

        if ($('#resize_keepprops').is(':checked')) { 
            document.serendipityScaleForm.elements[trans[dim][0]].value=Math.round(trans[dim][1]*newval);
        }
    }

    // Rename file in media db
    serendipity.rename = function(id, fname) {
        var newname;
        var media_rename = 'Enter the new name for: ';
        var media_token_url = $('input[name*="serendipity[token]"]').val();
        if (newname = prompt(media_rename + fname, fname)) {
            location.href='?serendipity[adminModule]=images&serendipity[adminAction]=rename&serendipity[fid]='+ escape(id) + '&serendipity[newname]='+ escape(newname) +'&serendipity[token]='+ media_token_url;
        }
    }

    // Collapse/expand tree view in media db choose img popup window
    var tree_toggle_state = 'expand';

    serendipity.treeToggleAll = function() {
        if (tree_toggle_state == 'expand') {
            tree_toggle_state = 'collapse';
            tree.expandAll();
        } else {
            tree_toggle_state = 'expand';
            tree.collapseAll();
            coreNode.expand();
        }
    }

    // Used by media_upload.tpl to ..?
    serendipity.getfilename = function(value) { 
        re = /^.+[\/\\]+?(.+)$/;
        return value.replace(re, "$1"); 
    }

    var inputStorage = new Array();

    serendipity.checkInputs = function() { 
        upload_fieldcount = $('.uploadform_userfile').length;

        for (i = 1; i <= upload_fieldcount; i++) { 
            if (!inputStorage[i]) { 
                serendipity.fillInput(i, i);
            } else if (inputStorage[i] == document.getElementById('target_filename_' + i).value) { 
                serendipity.fillInput(i, i);
            }
        } 
    }

    serendipity.fillInput = function(source, target) { 
        sourceval = serendipity.getfilename(document.getElementById('userfile_' + source).value);

        if (sourceval.length > 0) { 
            document.getElementById('target_filename_' + target).value = sourceval;
            inputStorage[target] = sourceval;
        }
    }

    // ..?
    serendipity.checkSave = function() { 
        
        return true;
    } 

    // save in which directory the first uploaded files is stored (the default when only inserting one file)
    serendipity.rememberUploadOptions = function() {
        serendipity.SetCookie("addmedia_directory", $('#target_directory_2').val());
    }

    // Clones the upload form template
    serendipity.addUploadField = function() {
        upload_fieldcount = $('.uploadform_userfile').length + 1;

        var $fields = $('#uploads > div:last-child').clone(true);
        $fields.attr('id', 'upload_form_' + upload_fieldcount);

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
        targetfilename.val('');
        targetfilename_label.attr('for', 'target_filename_' + upload_fieldcount);

        targetdir.attr('id', 'target_directory_' + upload_fieldcount);
        targetdir.attr('name', 'serendipity[target_directory][' + upload_fieldcount + ']');
        // This looks weird, but works. If anyone can improve this, by all means do so.
        targetdir.val($($('#target_directory_' + (upload_fieldcount - 1))).val());
        targetdir_label.attr('for', 'target_directory_' + upload_fieldcount);

        $fields.appendTo('#uploads');
    }

    // Inverts a selection of checkboxes
    serendipity.invertSelection = function() {
        $('#formMultiDelete .multidelete').each(function() {
            var $box = $(this);
            var boxId = $box.attr('id');
            if($box.is(':checked')) {
                $(boxId).prop('checked', false);
            } else {
                $(boxId).prop('checked', true);
            }
            $box.trigger('click');
        });
    }

    // Highlight/dehighlight elements in lists
    serendipity.highlightComment = function(id, checkvalue) {
        $('#' + id).toggleClass('multidel_selected');
    }

    serendipity.closeCommentPopup = function() {
                    window.parent.parent.$.magnificPopup.close();
            }

    serendipity.openPopup = function(url) {
                    $.magnificPopup.open({
              items: {
                src: url
              },
              type: 'iframe'
            });
                
    };

    serendipity.reloadImage = function(img) {
        $(img).attr('src', $(img).attr('src')+'?'+Math.random());
    }

    serendipity.categoryList = function() {
        var $source = $('#edit_entry_category');
        var $target = $('#category_list > ul');
        var $selected = $source.find('input:checkbox:checked');

        $target.empty();

        if ($selected.length > 0) {
            $selected.each(function() {
                var catText = $(this).next('label').text();
                $('<li class="category_selected">'+ catText +'</li>').appendTo($target);
            });
        } else {
            $('<li>No categories</li>').appendTo($target);
        }
    }

}( window.serendipity = window.serendipity || {}, jQuery ));

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

// mths.be/details
;
(function(a, f) {
    var e = f.fn,
        d, c = Object.prototype.toString.call(window.opera) == '[object Opera]',
        g = (function(l) {
            var j = l.createElement('details'),
                i, h, k;
            if (!('open' in j)) {
                return false
            }
            h = l.body || (function() {
                var m = l.documentElement;
                i = true;
                return m.insertBefore(l.createElement('body'), m.firstElementChild || m.firstChild)
            }());
            j.innerHTML = '<summary>a</summary>b';
            j.style.display = 'block';
            h.appendChild(j);
            k = j.offsetHeight;
            j.open = true;
            k = k != j.offsetHeight;
            h.removeChild(j);
            if (i) {
                h.parentNode.removeChild(h)
            }
            return k
        }(a)),
        b = function(i, l, k, h) {
            var j = i.prop('open'),
                m = j && h || !j && !h;
            if (m) {
                i.removeClass('open').prop('open', false).triggerHandler('close.details');
                l.attr('aria-expanded', false);
                k.hide()
            } else {
                i.addClass('open').prop('open', true).triggerHandler('open.details');
                l.attr('aria-expanded', true);
                k.show()
            }
        };
    e.noSelect = function() {
        var h = 'none';
        return this.bind('selectstart dragstart mousedown', function() {
            return false
        }).css({
            MozUserSelect: h,
            msUserSelect: h,
            webkitUserSelect: h,
            userSelect: h
        })
    };
    if (g) {
        d = e.details = function() {
            return this.each(function() {
                var i = f(this),
                    h = f('summary', i).first();
                h.attr({
                    role: 'button',
                    'aria-expanded': i.prop('open')
                }).on('click', function() {
                    var j = i.prop('open');
                    h.attr('aria-expanded', !j);
                    i.triggerHandler((j ? 'close' : 'open') + '.details')
                })
            })
        };
        d.support = g
    } else {
        d = e.details = function() {
            return this.each(function() {
                var h = f(this),
                    j = f('summary', h).first(),
                    i = h.children(':not(summary)'),
                    k = h.contents(':not(summary)');
                if (!j.length) {
                    j = f('<summary>').text('Details').prependTo(h)
                }
                if (i.length != k.length) {
                    k.filter(function() {
                        return this.nodeType == 3 && /[^ \t\n\f\r]/.test(this.data)
                    }).wrap('<span>');
                    i = h.children(':not(summary)')
                }
                h.prop('open', typeof h.attr('open') == 'string');
                b(h, j, i);
                j.attr('role', 'button').noSelect().prop('tabIndex', 0).on('click', function() {
                    j.focus();
                    b(h, j, i, true)
                }).keyup(function(l) {
                    if (32 == l.keyCode || (13 == l.keyCode && !c)) {
                        l.preventDefault();
                        j.click()
                    }
                })
            })
        };
        d.support = g
    }
}(document, jQuery));

$(function() {
    // Fire responsive nav
    if($('body').has('#main_menu').size() > 0) {
        $('#nav-toggle').click(function(e) {
            var $el = $(this);
            var $target = $('body');
            var $icon = $el.find('span:first-child');
            $($target).toggleClass('active_nav');
            if($($target).hasClass('active_nav')) {
                $icon.removeClass('icon-menu').addClass('icon-cancel');
            } else {
                $icon.removeClass('icon-cancel').addClass('icon-menu');
            }
            e.preventDefault();
        });
    }

    // Fire details polyfill
    $('html').addClass($.fn.details.support ? 'details' : 'no-details');
    $('details').details();

    // Fire WYSIWYG editor(s)
    serendipity.spawn();

    // Fire a11y helper script
    AccessifyHTML5({
        header: '#top',
        footer: '#meta'
    });

    // Editor-area
    if($('body').has('#serendipityEntry').size() > 0) {
        serendipity.categoryList();
        serendipity.toggle_category_selector('categoryselector');
        serendipity.toggle_extended();
    }

    // Form submit events
    $('#uploadform').submit(function() {
        serendipity.rememberUploadOptions();
    });

    $('#imageForm').submit(function() {
        serendipity.serendipity_imageSelector_done();
    });

    // Click events
    //
    // Make the timestamp readable in browser not supporting datetime-local.
    // Has no effect in those supporting it, as the timestamp is invalid in HTML5
    if($('body').has('#serendipityEntry').size() > 0) {
        if(!Modernizr.inputtypes.date) {
            $('#serendipityNewTimestamp').val($('#serendipityNewTimestamp').val().replace("T", " "));
        }
    }
    
    // Set entry timestamp
    $('#reset_timestamp').click(function(e) {
        $('#serendipityNewTimestamp').val($(this).attr('data-currtime'));
        if(!Modernizr.inputtypes.date) {
            $('#serendipityNewTimestamp').val($('#serendipityNewTimestamp').val().replace("T", " "));
        }
        e.preventDefault();
        // Inline notification, we might want to make this reuseable
        $('<span id="msg_timestamp" class="msg_notice"><span class="icon-info-circled"></span>The timestamp has been reset to the current time. <a class="remove_msg" href="#msg_timestamp"><span class="icon-cancel"></span><span class="visuallyhidden">Hide</span></a></span>').insertBefore('#edit_entry_title');
        // Remove timestamp msg
        $('.remove_msg').click(function(e) {
            e.preventDefault();
            var $target = $(this).parent();
            $target.fadeOut(250, function() { $target.remove(); });
        });
        // Automagic removal after 5 secs
        setTimeout(function() {
            $('#msg_timestamp').fadeOut(250).remove();
        }, 5000);
    });

    // Editor tools
    $('.wrap_selection').click(function() {
        var $el = $(this);
        var $tag = $el.attr('data-tag');
        //var target = document.forms['serendipityEntry']['serendipity[' + $el.attr('data-tarea') + ']'];
        var target =  $('#'+serendipity.escapeBrackets($el.attr('data-tarea')));
        var open = '<' + $tag + '>';
        var close = '</' + $tag + '>';
        serendipity.wrapSelection(target, open, close);
    });

    $('.wrap_insimg').click(function() {
        var target =  $('#'+serendipity.escapeBrackets($(this).attr('data-tarea')));
        serendipity.wrapInsImage(target);
    });

    $('.wrap_insurl').click(function() {
        var target =  $('#'+serendipity.escapeBrackets($(this).attr('data-tarea')));
        serendipity.wrapSelectionWithLink(target);
    });

    $('.wrap_insmedia').click(function() {
        serendipity.openPopup('serendipity_admin.php?serendipity[adminModule]=media&serendipity[noBanner]=true&serendipity[noSidebar]=true&serendipity[noFooter]=true&serendipity[showMediaToolbar]=false&serendipity[showUpload]=true&serendipity[textarea]=' + $(this).attr('data-tarea'));
    });

    // Entry metadata
    // NOTE: This probably should be rewritten as a general function which
    //       also works for advanced options (see below); also not sure if
    //       the localStorage stuff works here (seems to)
    if($('body').has('#edit_entry_metadata').size() > 0) {
        $('#toggle_metadata').click(function() {
            var $el = $(this);
            var $toggleIcon = $el.find('> span');
            var $toggleState = $toggleIcon.attr('class');
            if($toggleState == 'icon-down-dir') {
                $toggleIcon.removeClass('icon-down-dir').addClass('icon-right-dir');
                localStorage.show_advanced_options = "false";
            } else {
                $toggleIcon.removeClass('icon-right-dir').addClass('icon-down-dir');
                localStorage.show_advanced_options = "true";
            }
            $('#meta_data').toggleClass('additional_info');
        });
        if (localStorage.show_advanced_options == "true") {
            $('#toggle_metadata').click();
        }
    }

    // Show category selector
            if($('body').has('#serendipityEntry').size() > 0) {
            var btnText = 'Done';

            $('#select_category').magnificPopup({
                type: "inline",
                closeMarkup: '<button title="%title%" class="mfp-close" type="button">'+ btnText +'</button>',
                callbacks: {
                    afterClose: function() {
                        serendipity.categoryList();
                    }
                }
            });
        }
    
    // Advanced options
    if($('body').has('#advanced_options').size() > 0) {
        $('#toggle_advanced').click(function() {
            var $el = $(this);
            var $toggleIcon = $el.find('> span');
            var $toggleState = $toggleIcon.attr('class');
            if($toggleState == 'icon-down-dir') {
                $toggleIcon.removeClass('icon-down-dir').addClass('icon-right-dir');
                localStorage.show_advanced_options = "false";
            } else {
                $toggleIcon.removeClass('icon-right-dir').addClass('icon-down-dir');
                localStorage.show_advanced_options = "true";
            }
            $('#adv_opts').toggleClass('additional_info');
        });
        if (localStorage.show_advanced_options == "true") {
            $('#toggle_advanced').click();
        }
    }

    // Entry preview
    $('.entry_preview').click(function() {
        document.forms['serendipityEntry'].elements['serendipity[preview]'].value='true';
    });

    // Collapsible configuration elements
    if($('body').has('#serendipity_config_options, #serendipity_category, #image_directory_edit_form').size() > 0) {
        var optsCollapsed = true;

        $('.show_config_option').click(function(e) {
            var $el = $(this);
            if ($el.attr('href')) {
                var $toggled= $el.attr('href');
            } else {
                var $toggled = $el.data('href');
            }
            var $toggleIcon = $el.find('> span');
            var $toggleState = $toggleIcon.attr('class');
            if($toggleState == 'icon-down-dir') {
                $toggleIcon.removeClass('icon-down-dir').addClass('icon-right-dir');
            } else {
                $toggleIcon.removeClass('icon-right-dir').addClass('icon-down-dir');
            }
            $($toggled).toggleClass('additional_info');
            e.preventDefault();
        });

        $('#show_config_all').click(function(e) {
            if ($(this).attr('href')) {
                var $container = $(this).attr('href');
            } else {
                var $container = $(this).data('href');
            }
            var $toggleIcon = $(this).find('span:first-child');
            var $toggleIcons = $($container).find('.show_config_option > span');
            var $toggleOption = $($container).find('.config_optiongroup');
            if(optsCollapsed) {
                $toggleIcons.removeClass('icon-right-dir').addClass('icon-down-dir');
                $toggleOption.removeClass('additional_info');
                $toggleIcon.removeClass('icon-right-dir').addClass('icon-down-dir');
                optsCollapsed = false;
            } else {
                $toggleIcons.removeClass('icon-down-dir').addClass('icon-right-dir');
                $toggleOption.addClass('additional_info');
                $toggleIcon.removeClass('icon-down-dir').addClass('icon-right-dir');
                optsCollapsed = true;
            }
            $(this).toggleClass('active');
            e.preventDefault();
        });

        $('.show_config_option_now').click();
    }

    // Config option add media
    if($('body').has('.media_choose').size() > 0) {
        var $el = $('.media_choose');
        var $item = $el.find('> input');
        var configItem = $item.attr('data-configitem');
        var mWidth = $item.attr('data-pmwidth');
        var mHeight = $item.attr('data-pmheight');
        if($item.val() != '') {
            var bgImg = 'url(' + $item.val() + ')';
        } else {
            var bgImg = 'none';
        }
        $('<div id="'+configItem+'_preview" class="preview"/>').appendTo($el)
            .css({
                backgroundImage: bgImg,
                // minWidth: mWidth,
                minHeight: mHeight
            });
    }

    $('.change_preview').change(function() {
        serendipity.change_preview($(this).attr('data-configitem'));
    });

    $('.choose_media').click(function(e) {
        var configitem = $(this).parent().find('.change_preview').attr('id');
        serendipity.choose_media(configitem);
        e.preventDefault();
    });

    $('.customfieldMedia').click(function() {
        var configitem = $(this).parent().find('textarea').attr('id');
        serendipity.choose_media(configitem);
    });

    $('#tree_toggle_all').click(function(e) {
        e.preventDefault();
        serendipity.treeToggleAll();
    });

    // Comments
    $('.comments_delete, .comments_multidelete, .build_cache').click(function() {
        var $msg = $(this).attr('data-delmsg');
        return confirm($msg);
    });

    $('.comments_reply').click(function(e) {
        e.preventDefault();
                   $(this).magnificPopup({ type:'iframe' });
            });

    // Category icon preview
    // NOTE: This is just to replace the old functionality; ideally, this should
    //       have a working no-js fallback
    if($('body').has('#category_icon').size() > 0) {
        $('<button id="insert_image" type="button" name="insImage" title="Media library"><span class="icon-picture"></span><span class="visuallyhidden"> Media library</span></button>').insertAfter('#category_icon');
    }

    $('#insert_image').click(function(e) {
        serendipity.openPopup('serendipity_admin.php?serendipity[adminModule]=media&serendipity[noBanner]=true&serendipity[noSidebar]=true&serendipity[noFooter]=true&serendipity[showMediaToolbar]=false&serendipity[htmltarget]=category_icon&serendipity[filename_only]=true');
    });

    $('#category_icon').change(function() {
        $('#imagepreview').attr('src', $('#category_icon').val());
    });

    // Selection for multidelete
    $('.multidelete').click(function() {
        var $el = $(this);
        serendipity.highlightComment($el.attr('data-multidelid'), $el.attr('checked'));
    });

    // Invert checkboxes
    $('.invert_selection').click(function() {
        serendipity.invertSelection();
    });

    // Go back one step
    $('.go_back').click(function() {
        history.go(-1);
    });

    // Add media db upload field
    $('#add_upload').click(function(e) {
        e.preventDefault();
        serendipity.addUploadField();
    });

    // Check media db inputs
    $('.check_input').change(function() {
        serendipity.checkInputs();
    });

    $('.check_inputs').click(function() {
        serendipity.checkInputs();
    });

    // Dashboard bookmarklet hint
    $('.s9y_bookmarklet').click(function(e) {
        e.preventDefault();
        alert('Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
    });

    // Limit width of media file info
    if($('body').has('.media_pane').size() > 0) {
        var thumbsWidth = $('.media_pane').attr('data-thumbmaxwidth')  + 'px';
        $('.media_file_meta').css('maxWidth', thumbsWidth);
    }

    // Show media file info, template info, label info or filters
    $('.media_show_info, .template_show_info, .filters_toolbar li > a').click(function(e) {
        var $el = $(this);
        if ($el.attr('href')) {
            $($el.attr('href')).toggleClass('additional_info');
        } else {
            $($el.data('href')).toggleClass('additional_info');
        }
        $el.toggleClass('active');
        e.preventDefault();
    });

    $('.toggle_info').click(function(e) {
        if ($(this).attr('href')) {
            $($(this).attr('href')).toggleClass('additional_info');
        } else {
            $($(this).data('href')).toggleClass('additional_info');
        }
        e.preventDefault();
    });

    // Show further links
            if($('body').has('#dashboard').size() > 0) {
            $('.toggle_links').magnificPopup({ type: "inline" });
        }
    
    // Media file actions
        if ($('body').has('.media_fullsize').size() > 0) {
        $('.media_fullsize').magnificPopup({ type:'image' });
    }
    
    $('.media_rename').click(function(e) {
        e.preventDefault();
        var $el = $(this);
        serendipity.rename($el.attr('data-fileid'), $el.attr('data-filename'));
    });

    $('#media_crop').click(function(e) {
        window.open($(this).attr('href'), 'ImageCrop', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1').focus();
        e.preventDefault();
    });

    $('.add_keyword').click(function(e) {
        serendipity.AddKeyword($(this).attr('data-keyword'));
        e.preventDefault();
    });

    // Confirm media scale
    $('.image_scale').click(function() {
        if (confirm('Really scale the image? This operation cannot be undone!')) document.serendipityScaleForm.submit();
    });

    // Media scale change events
    $('#resize_width').change(function() {
        serendipity.rescale('width' , $(this).val());
    });

    $('#resize_height').change(function() {
        serendipity.rescale('height' , $(this).val());
    });

    // Show extended comment
    $('.toggle_comment_full').click(function(e) {
        var $el = $(this);
        if ($el.attr('href')) {
            var $toggles = $($el.attr('href'));
        } else {
            var $toggles = $($el.data('href'));
        }
        $toggles.toggleClass('additional_info');
        $toggles.prev().toggleClass('additional_info');
        var $toggleIcon = $el.find('> span');
        var $toggleState = $toggleIcon.attr('class');
        if($toggleState == 'icon-down-dir') {
            $toggleIcon.removeClass('icon-down-dir').addClass('icon-right-dir');
        } else {
            $toggleIcon.removeClass('icon-right-dir').addClass('icon-down-dir');
        }
        e.preventDefault();
    });

    // MediaDB-Filter-Buttons should react instantly
    $('input[name="serendipity[filter][fileCategory]"]').on('change', function() {
        $('#media_library_control').submit();
    });

    // Clone form submit buttons
    $('#sort_entries > .form_buttons').clone().appendTo('#filter_entries');
    $('#media_pane_sort > .form_buttons').clone().appendTo('#media_pane_filter');

    // Clone pagination - this could become a function, which should also
    // check if the cloned pagination already exists
    $('.media_pane .pagination').clone().prependTo('.media_pane');
    $('.comments_pane .pagination').clone().prependTo('.comments_pane');
    $('.entries_pane .pagination').clone().prependTo('.entries_pane');
    $('.karma_pane .pagination').clone().prependTo('.karma_pane');

    // close comment reply on button click
    if ($('body').has('#comment_replied').size() > 0) {
        $('#comment_replied').click(function() {
            serendipity.closeCommentPopup();
        });
    }

    // reopen detail element after spamblock action
    if ($('body').has('#serendipity_comments_list').size() > 0 && window.location.hash && $('body').has('#' + window.location.hash.replace('#', '')).size() > 0) {
        $('#' + window.location.hash.replace('#', '')).find(".toggle_info").click();
    }

    // ajaxify image rotate, solving cache issue
    $('.media_rotate_right,.media_rotate_left').click(function(e) {
        e.preventDefault();
        var $rotateButton = $(this)
        $.get($rotateButton.attr('href'), function() {
            serendipity.reloadImage($rotateButton.closest('.media_file').find('img'));
        });
    })

    // Tabs
    if($('body').has('.tabs').size() > 0) {
        var currTabText = 'Current tab: ';

        $('.tabs').accessibleTabs({
            wrapperClass: 'tabcontent',
            currentClass: 'on',
            tabhead: 'h3',
            tabheadClass: 'visuallyhidden',
            tabbody: '.panel',
            fx: 'fadeIn',
            currentInfoText: currTabText,
            currentInfoClass: 'visuallyhidden',
            syncheights: false,
            saveState: true
        });
    }

    // Equal Heights
    $(window).load(function() {
        if($('body').has('.equal_heights').size() > 0) {
            if($('html').hasClass('lt-ie9')) {
                $('.equal_heights').syncHeight({
                    updateOnResize: false
                });
            } else {
                $('.equal_heights').syncHeight({
                    updateOnResize: true
                });
            }
        }
    });
});

// This is kept for older plugins. Use of $(document).ready() is encouraged.
// At some point, this will be removed.
    addLoadEvent = function(func) {
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
