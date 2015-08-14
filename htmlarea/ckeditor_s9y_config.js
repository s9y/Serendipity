/**
 * @fileOverview The Serendipity CKEDITOR custom config file:
 *               ckeditor_s9y_config.js, v. 1.15, last modified 2015-08-15 by Ian
 */

/**
 * Substitute every config option to CKEDITOR in here.
 * Before you do, copy and rename the file to ckeditor_custom_config.js and
 * place it to /templates/2k11/admin, or to your template in /templates/xxx/admin.
 * Leave this file here unchanged!
 * In your custom copy change anything needed to be upgrade independent
 * NOTE: Use at own risk! Be careful!
 */
CKEDITOR.editorConfig = function( config ) {

    /** SECTION: ACF
        Advanced Content Filter works in two modes:
            automatic - the filter is configured by editor features (like plugins, buttons, and commands) that are enabled with configuration options
                        such as CKEDITOR.config.plugins, CKEDITOR.config.extraPlugins, and CKEDITOR.config.toolbar,
            custom    - the filter is configured by the CKEDITOR.config.allowedContent option and only features that match this setting are activated.
        In both modes it is possible to extend the filter configuration by using the CKEDITOR.config.extraAllowedContent setting.
        If you want to disable Advanced Content Filter, set CKEDITOR.config.allowedContent to true.
        All available editor features will be activated and input data will not be filtered.
        Allowed content rules. This setting is used when instantiating CKEDITOR.editor.filter.
        The following values are accepted:
            CKEDITOR.filter.allowedContentRules - defined rules will be added to the CKEDITOR.editor.filter.
            true    - will disable the filter (data will not be filtered, all features will be activated).
            default - the filter will be configured by loaded features (toolbar items, commands, etc.).
            http://docs.ckeditor.com/?_escaped_fragment_=/guide/dev_allowed_content_rules-section-string-format#!/guide/dev_allowed_content_rules-section-string-format
        In all cases filter configuration may be extended by extraAllowedContent. This option may be especially useful,
        when you want to use the default allowedContent value along with some additional rules.
        Read more of this here:
            http://docs.ckeditor.com/?_escaped_fragment_=/guide/dev_acf#!/guide/dev_acf
    */

    /** List of regular expressions to be executed on ***input HTML***, indicating HTML source code, that, when matched, must not be available in the WYSIWYG mode for editing. */

    // allow <script> tags
    //config.protectedSource.push( /<(script)[^>]*>.*<\/script>/ig ); // already set as default in ckeditor.js, by [/<script[\s\S]*?<\/script>/gi,/<noscript[\s\S]*?<\/noscript>/gi]
    // allow S9y imageselectorplus plugin mediainsert tag codes
    config.protectedSource.push( /<(mediainsert)[^>]*>[\s\S]*?<\/mediainsert>/img );
    // allow a Smarty like {} tag syntax without inner whitespace, which would be some other code part.
    //config.protectedSource.push( /\{[a-zA-Z\$].*?\}/gi ); // Smarty markup protection disabled, since now being usable w/o setting ACF OFF
    // allow [[mytag]] [[{$mytag}]] [s9y-include-entry:XXX:YYY] widget tags for a markup replacement by S9y plugins (eg by third example with the staticblock serendipity_event_includeentry plugin)
    //config.protectedSource.push(/\[\[([^\[\]])+\]\]/g); // WP-Smarty like markup protection disabled, since now being usable w/o setting ACF OFF
    /**
     CKEDITOR.protectedSource patterns used regex Escape sequences
                \s any whitespace character;
                \S any character that is not a whitespace character
                \t tab (hex 09);
                \r carriage return (hex 0D);
                \n newline (hex 0A);
     Pattern Modifiers
                /i caseless, match both upper and lower case letters
                /m treat as multiline
                /g be greedy
    */

    /** SECTION: Extra Allowed Content
        Set placeholder tag cases - elements [attributes]{styles}(classes) to protect ACF removements.
          - Allowed <mediainsert>, <gallery>, <media> tags (imageselectorplus galleries) - which tells ACF to not touch the code!
          - Allowed <div> is a need for Media Library inserts - which tells ACF to not touch the code!
          - Allowed <span> to make life a bit easier!
          - Reset <img[height,width]> Media Library image inserts to avoid ACF OFF removement of height attributes. (Dependency in ckeditor_s9y_plugin.js)
          - Allow <pre[*attributes](*classes)> for custom attributes/classes in code blocks
    */
    // protect
    config.extraAllowedContent = 'mediainsert[*]{*}(*);gallery[*]{*}(*);media[*]{*}(*);script[*]{*}(*);audio[*]{*}(*);div[*]{*}(*);span[*]{*}(*);img[height,width];pre[*](*);';
    // Do not use auto paragraphs, added to these allowed tags (only!). Please regard that this was marked deprecated by CKE 4.4.5, but is a need for (our use of) extraAllowedContent - check this again by future versions!
    config.autoParagraph = false; // defaults(true)


    /** SECTION: Other behaviour config rules

    // Prevent filler nodes in all empty blocks. - case switching source and wysiwyg mode multiple times
    //config.fillEmptyBlocks = false; // default (true) - switches <p>&nbsp;</p> to <p></p>
    //config.ignoreEmptyParagraph = false; // default(true) - Whether the editor must output an empty value ('') if it's contents is made by an empty paragraph only. (Extends to config.fillEmptyBlocks)
    // changed for extraAllowedContent, see above
    //config.autoParagraph = false; // defaults(true)
    // DEV NOTES: Please note that since CKEditor 4.4.5 the config.autoParagraph configuration option was marked deprecated, since changing the default value might introduce unpredictable usability issues and so it is highly unrecommended.

    // The configuration setting that controls the ENTER mode is "config.enterMode" and it offers three options:
    // (1) The default creates a paragraph element each time the "enter" key is pressed:
    //config.enterMode = CKEDITOR.ENTER_P; // inserts <p></p>
    // (2) You can choose to create a "div" element instead of a paragraph:
    //config.enterMode = CKEDITOR.ENTER_DIV; // inserts <div></div>
    // (3) If you prefer to not wrap the text in anything, you can choose to insert a line break tag:
    //config.enterMode = CKEDITOR.ENTER_BR; // inserts <br />
    // You can always use SHIFT+ENTER to set a br in the P-mode default option or change the SHIFT-mode to something else
    //config.shiftEnterMode = CKEDITOR.ENTER_BR;
    // Better learn to do this via keyboard commands, see cheatsheet toolbar button.
    */

    // Whether to use HTML entities in the output. Let strictly S9y handle this, since we need it for search terms! Storing html entities to db is not good here!
    config.entities = false; // defaults(true)
    config.htmlEncodeOutput = false; // defaults(true)


    /** SECTION: UI configurations
    config.uiColor = 'transparent'; // standard, but better disable config.uiColor at all
    // just some examples
    config.uiColor = '#CFD1CF'; // standard grey
    config.uiColor = '#f5f5f5'; // standard light grey
    config.uiColor = '#E6EDF3'; // extreme light blue
    config.uiColor = '#DFE8F6'; // very light blue
    config.uiColor = '#9AB8F3'; // light blue/violet
    config.uiColor = '#AADC6E'; // light green
    config.uiColor = '#FFDC6E'; // light gold
    config.uiColor = '#FF8040'; // mango
    config.uiColor = '#FF2400'; // scarlet red
    config.uiColor = '#14B8C4'; // light turquoise
    */
    config.skin    = 'moono'; // this is default
    config.height  = 400; // dito

    /**
    // Allow certain font sizes, eg.
    //config.fontSize_sizes = '8/8px;9/9px;10/10px;11/11px;12/12px;14/14px;15/15px;16/16px;18/18px;20/20px;22/22px;24/24px;26/26px;28/28px;36/36px;48/48px;72/72px' ;
    // Allow one(!) default font label, eg.
    //config.font_defaultLabel = 'Arial';
    // Add other font names to the list of fonts names to be displayed in the Font combo in the toolbar. - eg.
    //config.font_names = config.font_names +
    //    'Arial/Arial, Helvetica, sans-serif;' +
    //    'Times New Roman/Times New Roman, Times, serif;' +
    //    'Verdana';
    */


    /** SECTION: Custom Config Content Styles
        We can not use templates/xxx/admin/ as a path here, since we would need template and userTemplate path parts as dynamic vars
    */
    // Add custom Serendipity styles to ckeditor content wysiwyg-mode, to repect css image floats
    config.contentsCss = 'htmlarea/wysiwyg-style.css';


    /** SECTION: Custom Plugin and Button behaviour configurations **/
    /**
    // Native spell check functionality is by default disabled in the editor, use this to enable it.
    // Do not wonder if this is not working on demand, since Browsers need to match spell checker settings, etc., you need to hit the correct place/word, and so on.
    //config.disableNativeSpellChecker = false;
    // [CRTL + right mouse click] gives access to Browsers contextmenu, else you need to disable and set these
    // The general idea is that you would need to remove all plugins that depend on the "contextmenu" one for removing the "contextmenu" one itself to work. But this has other sideeffects!
    //config.removePlugins = 'wsc,scayt,menubutton,liststyle,tabletools,contextmenu';
    //config.browserContextMenuOnCtrl = true;
    //config.wsc_lang = 'de_DE'; //Defaults to: 'en_US'
    //config.scayt_sLang = 'de_DE'; //Defaults to: 'en_US'
    */

    // Remove custom toolbar buttons and plugins from all toolbars
    // A list of plugins that must not be loaded. This setting makes it possible to avoid loading some plugins defined in the CKEDITOR.config.plugins setting, without having to touch it and potentially break it.
    config.removePlugins = 'flash,iframe,forms'; // possible strict suggestions: 'flash,iframe,elementspath,save,font,showblocks,div,liststyle,pagebreak,smiley,specialchar,horizontalrule,indentblock,justify,pastefromword,newpage,preview,print,stylescombo'
    config.removeButtons = 'Preview,Styles,JustifyLeft'; // these buttons are useless or preset in Serendipity and therefore not set. Without, even the toolbar Groups break better on screens.


    /** SECTION: Certain Plugin Buttons
        We cheat ckeditor instances by adding all available button names (in s9ypluginbuttons) to "both" toolbar instances, in case of having two textareas.
        The instanciation will only take the ones being currently initiated in wysiwyg_init.tpl output, in the source code.
        The hooked and added extraPlugins in wysiwyg_init become not automatically true for preset toolbars (Basic, Standard, Full) like this, but do for the fallback toolbarGroups later on.
    */
    // concat button arrays
    var s9ypluginbuttonsAll = s9ymediabuttons.concat(s9ypluginbuttons);


    /** SECTION: Build Preset Toolbars

        S9Y: Serendipity (default)
        BASIC: Serendipity (simple)
        STANDARD: Serendipity (normal)
        FULL: Serendipity (extended)
        CKE: CKEditor Full (preset)

        PLEASE NOTE:
        1. In order to work properly within all toolbars, please do not remove the eg. { name: 'insert', items: [ 'Image' ] }, group and Image button, since then the s9ymediabutton does not properly insert!
           This ckeditor image widget is disabled/hidden by css (htmlarea/s9y_cketoolbar.css) and is only presented in the CKE PRESET toolbar.
        2. If you really configure your own toolbar, choose the named and selected toolbar which comes near to your idea and edit the one.
    */

    /** DEBUG core and custom file accessment
//    console.log('is ckeditor_s9y_config.js');
//    console.log('is ckeditor_custom_config.js');
    */

    // in case of Serendipity toolbar : "Basic"
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
//    console.log(JSON.stringify(config.toolbar_Basic));

    // in case of Serendipity toolbar : "Standard" (called 'Alternate' in toolbar selection, but rather is a normal Standard)
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
//    console.log(JSON.stringify(config.toolbar_Standard));

    // in case of Serendipity toolbar : "Full"
    // Breaks apart long paragraph group to better float (moved 'Source' and removed 'Font' buttons; 'Styles' and 'Preview' disabled overall).
    config.toolbar_Full = [
        { name: 'styles',      items : [ 'Styles','Format',/*'Font',*/'FontSize' ] },
        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
        { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
        { name: 'document',    items : [ /*'Source','-',*/'Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
        { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
        { name: 'forms',       items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
//        { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
        { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','CreateDiv' ] },
        { name: 'blocks',      items : [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
        { name: 'bidi',        items : [ 'BidiLtr','BidiRtl' ] },
        { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
        { name: 's9yml',       items : s9ymediabuttons },
        { name: 'insert',      items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
        { name: 'colors',      items : [ 'TextColor','BGColor' ] },
        { name: 'mediaembed',  items : [ 'MediaEmbed' ] },
        { name: 'others',      items : s9ypluginbuttons },
        { name: 'tools',       items : [ 'Maximize', 'ShowBlocks','-','About' ] },
        { name: 'document',   groups : [ 'mode', 'document', 'doctools' ], items : [ 'Source' ] },
        { name: 'cheatsheet',  items : ['CheatSheet'] }
    ];
//    console.log(JSON.stringify(config.toolbar_Full));

    // in case of Serendipity toolbar : Default
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
        { name: 'mediaembed',   items: [ 'MediaEmbed' ] },
        { name: 'others',       items: s9ypluginbuttons },
        { name: 'document',    groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
        { name: 'about',        items: [ 'About' ] }
    ];
//    console.log(JSON.stringify(config.toolbar_s9y));

    /**
     This is the 'CKE PRESET' toolbar select name with CKE 'Default' values, also acting as a fallback in order. Do not touch!
     Note: There is another (internal) fallback toolbar in case of errors, which appearance looks like a re-arranged 4-liner toolbar,
           which will provide the 'others' group, but no additionally added plugins (like mediaembed and cheatsheet).
     This is the official Toolbar configuration generated automatically by the editor, based on config.toolbarGroups.
     It is more or like an untouched example for the full toolbar but underlies the same restrictions of disabled plugins or buttons.
    */
    // in case of toolbar : PRESET CKE
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

    /*
    // This is the official Toolbar groups and order configuration. Added here for comparison with ours.
    config.toolbarGroups = [
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
        { name: 'forms' },
        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'links' },
        { name: 'insert' },
        '/',
        { name: 'styles' },
        { name: 'colors' },
        { name: 'tools' },
        { name: 'others' },
        { name: 'about' }
    ];
    */

    // This is the Serendipity tweaked toolbarGroups fallback, which does not need any extras manually filled in 'others', since done automatically by ckeditor.js or by the other named toolbars
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