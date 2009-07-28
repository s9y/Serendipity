// This JavaScript file can be customized.
// It is actually NOT like the my_config.js file of the Xinha Documentation.
// Instead, the JS function 's9y_xinha' is called just before the
// Xinha editor is created. So you are able to OVERWRITE Toolbars,
// plugins etc. with your own versions.

// You can also place a my_custom.js file inside a template directory,
// which will take precedence over the htmlarea/my_custom.js file.

// All of the functionality is currently only a stub, so you need
// to insert/uncomment, what you want it to do.

function s9y_xinha(xinha_editor) {

/* EXAMPLE USAGE ***

    var xinha_plugins = [ 'CharacterMap', 'ContextMenu', 'HorizontalRule' ];

    // This is a loader, it should stay as is. Do not remove.
    Xinha.loadPlugins(
        xinha_plugins, 
        function() {  
            for (i in xinha_plugins) {
                if (typeof(xinha_plugins[i]) == 'string') {
                    xinha_editor.registerPlugin(xinha_plugins[i]);
                }
            }
        } 
    );


    // Here you can start to customize again.
    xinha_editor.config.pageStyleSheets = [ _editor_url + 'custom.css' ];
    xinha_editor.config.fontsize = { 
        '1 (8pt)' : '1',
        '2 (10pt)' : '1',
        "3 (12 pt)": "3",
        "4 (14 pt)": "4",
        "5 (18 pt)": "5",
        "6 (24 pt)": "6",
        "7 (36 pt)": "7"
    }
    
    // s9y image selection is called: 'image_selector'
    // If you use any event plugins that provide custom toolbars, and you are customizing xinha,
    // you need to take care of inserting those custom toolbar buttons yourself!
    xinha_editor.config.toolbar = [
        [ "fontname", "space",
              "fontsize", "space",
              "formatblock", "space",
              "bold", "italic", "underline", "strikethrough", "separator",
              "subscript", "superscript", "separator",],

        [ "justifyleft", "justifycenter", "justifyright", "justifyfull", "separator",
          "orderedlist", "unorderedlist", "outdent", "indent", "separator",
          "forecolor", "hilitecolor", "separator",
          "inserthorizontalrule", "createlink", "insertimage", "image_selector", "inserttable", "htmlmode", "separator",
          "popupeditor", "separator", "showhelp", "about" ]     
    ];
* END OF EXAMPLE USAGE ***/    

}
