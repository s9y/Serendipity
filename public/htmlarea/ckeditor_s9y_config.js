/**
 * Config of CKEDITOR.
 * Before you change options, copy and rename the file to ckeditor_custom_config.js and
 * place it to /templates/2k11/admin, or to your template in /templates/xxx/admin.
 * In your custom copy change anything needed to be upgrade independent.
 *
 * See https://ckeditor.com/docs/ckeditor4/latest/guide/dev_configuration.html.
 */
CKEDITOR.editorConfig = function( config ) {

    config.allowedContent = true;
    config.skin    = 'moono-lisa'; // this is default
    config.height  = 400; // dito
    // Add custom Serendipity styles to ckeditor content wysiwyg-mode, to repect css image floats
    config.contentsCss = 'htmlarea/wysiwyg-style.css';

    // A list of plugins that must not be loaded. This setting makes it possible to avoid loading some plugins defined in the CKEDITOR.config.plugins setting, without having to touch it and potentially break it.
    config.removePlugins = 'flash,iframe,forms'; 
    config.removeButtons = 'Preview,Styles,JustifyLeft'; // these buttons are useless or preset in Serendipity and therefore not set.

    var s9ypluginbuttonsAll = s9ymediabuttons.concat(s9ypluginbuttons);


    /** Preset Toolbars

        S9Y: Serendipity (default)
        FULL: Serendipity (extended)

        Deprecated:
        BASIC: Serendipity (simple)
        STANDARD: Serendipity (normal)
        CKE: CKEditor Full (preset)
        * */


    config.toolbar_Basic = [
        { name: 'styles',      items : [ 'Format', ] },
        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Superscript' ] },
        { name: 'paragraph',   items : [ 'NumberedList', 'BulletedList', 'Blockquote' ] },
        { name: 's9yml',       items : s9ymediabuttons },
        { name: 'insert',      items : [ 'Image' ] },
        { name: 'links',       items : [ 'Link','Unlink' ] },
        { name: 'mediaembed',  items : [ 'MediaEmbed' ] },
        { name: 'others',      items : s9ypluginbuttons },
        { name: 'document',    items : [ 'Source' ] }
    ];

    config.toolbar_Standard = [
        { name: 'basicstyles', items : [ 'Format','-','Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
        { name: 'clipboard',   items : [ 'Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo'] },
        { name: 'blocks',      items : [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
        { name: 's9yml',       items : s9ymediabuttons },
        { name: 'insert',      items : [ 'Image', '-', 'Table', 'HorizontalRule', 'SpecialChar'] },
        { name: 'paragraph',  groups : [ 'list', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Blockquote' ] },
        { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
        { name: 'editing',    groups : [ 'find', 'selection', 'spellchecker' ], items: [ 'Scayt' ] },
        { name: 'mediaembed',  items : [ 'MediaEmbed' ] },
        { name: 'others',      items : s9ypluginbuttons },
        { name: 'document',   groups : [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
        { name: 'about',       items : [ 'About', ] },
        { name: 'cheatsheet',  items : ['CheatSheet'] },
        { name: 'tools',       items : [ 'Maximize' ] }
    ];

    config.toolbar_Full = [
        { name: 'styles',      items : [ 'Styles','Format','FontSize' ] },
        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
        { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
        { name: 'document',    items : [ 'Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
        { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
        { name: 'forms',       items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
        { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','CreateDiv' ] },
        { name: 'blocks',      items : [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
        { name: 'bidi',        items : [ 'BidiLtr','BidiRtl' ] },
        { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
        { name: 's9yml',       items : s9ymediabuttons },
        { name: 'insert',      items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
        { name: 'codetag',     items:  [ 'Code' ] },
        { name: 'colors',      items : [ 'TextColor','BGColor' ] },
        { name: 'mediaembed',  items : [ 'MediaEmbed' ] },
        { name: 'others',      items : s9ypluginbuttons },
        { name: 'tools',       items : [ 'Maximize', 'ShowBlocks','-','About' ] },
        { name: 'document',   groups : [ 'mode', 'document', 'doctools' ], items : [ 'Source' ] },
        { name: 'cheatsheet',  items : ['CheatSheet'] },
    ];

    config.toolbar_Default = [
        { name: 'tools',        items: [ 'Maximize' ] },
        { name: 'styles',       items: [ 'Format' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'RemoveFormat' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
        { name: 'links',        items: [ 'Link', 'Unlink', 'Anchor' ] },
        { name: 's9yml',        items: s9ymediabuttons },
        { name: 'insert',       items: [ 'Image', '-', 'Table', 'HorizontalRule', 'SpecialChar' ] },
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo' ] },
        { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Scayt' ] },
        { name: 'CodeSnippet',         items: [ 'CodeSnippet' ] },
        { name: 'mediaembed',   items: [ 'MediaEmbed' ] },
        { name: 'others',       items: s9ypluginbuttons },
        { name: 'document',    groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
        { name: 'about',        items: [ 'About' ] },
    ];

    config.toolbar_CKE = [
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
        { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
//        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
//        '/',
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
        { name: 'others', items : s9ypluginbuttonsAll },
        { name: 'about', items: [ 'About' ] }
    ];
    
    config.toolbarGroups = [
        { name: 'styles' },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
//    	{ name: 'forms' },
        { name: 'colors' },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'links' },

        { name: 's9yml' },
        { name: 'insert' },
//        { name: 'ident' },
        { name: 'document', groups: [ /*'mode', */'document', 'doctools' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },

        { name: 'mediaembed' },
        { name: 'others' },
        { name: 'tools' },
        { name: 'about' },
        { name: 'mode' },
        { name: 'cheatsheet' }
    ];


    /** SECTION: Howto add Custom Plugins into toolbars
        1. Adding additional CKEDITOR Plugins to the config
           Download the Plugin, check version matching to this ckeditor version and drop the plugin to /htmlarea/ckeditor/ckeditor/plugins.
           Copy the directories plugin name, eg 'mediaembed'.
           Copy the file htmlarea/ckeditor_s9y_plugin.js to either /templates/2k11/admin, or to your template in /templates/xxx/admin and rename it to ckeditor_custom_plugin.js.
           Add the plugin name to the "extraPlugins" string.
           Now add this name also to this files custom copy upper config.toolbarGroup, wherever you like it to have, eg. "{ name: 'mediaembed' }," if that plugin emits a button to be placed into the toolbar.
           Or as { name: 'pluginname', items: 'PluginName' } eg { name: 'mediaembed', items: 'MediaEmbed' } in one of the upper toolbars, if that plugin emits a button to be placed into the toolbar.
           The ckeditor plugin webpage download procedure will give information about dependency plugins and naming conventions.
           After a browser reload, the newly added plugin should load into your textareas toolbars.
        2. PLEASE NOTE:
           Do not use any customized CKEditor Downloads, since this will only work with the CKE PRESET toolbar!
    */

};