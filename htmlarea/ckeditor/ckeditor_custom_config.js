/**
 * @fileOverview A Serendipity CKEDITOR custom config file: ckeditor_custom_config.js, v. 1.1, 2014-04-24, Ian
 */

/**
 * Substitute every config option to CKEDITOR in here
 */
CKEDITOR.editorConfig = function( config ) {

    // Advanced Content Filter ACF works in two modes:
    //   automatic  the filter is configured by editor features (like plugins, buttons, and commands) that are enabled with configuration options
    //               such as CKEDITOR.config.plugins, CKEDITOR.config.extraPlugins, and CKEDITOR.config.toolbar,
    //   custom     the filter is configured by the CKEDITOR.config.allowedContent option and only features that match this setting are activated.
    // In both modes it is possible to extend the filter configuration by using the CKEDITOR.config.extraAllowedContent setting.
    // If you want to disable Advanced Content Filter, set CKEDITOR.config.allowedContent to true. All available editor features will be activated and input data will not be filtered.
    // Allowed content rules. This setting is used when instantiating CKEDITOR.editor.filter.
    // The following values are accepted:
    //     CKEDITOR.filter.allowedContentRules  defined rules will be added to the CKEDITOR.editor.filter.
    //     true  will disable the filter (data will not be filtered, all features will be activated).
    //     default  the filter will be configured by loaded features (toolbar items, commands, etc.).
    // In all cases filter configuration may be extended by extraAllowedContent. This option may be especially useful when you want to use the default allowedContent value along with some additional rules.
    //
    //    config.allowedContent = CONFIG_ACF_OFF;

    // List of regular expressions to be executed on ***input HTML***, indicating HTML source code that, when matched, must not be available in the WYSIWYG mode for editing.

    // allow <script> tags
    config.protectedSource.push( /<(script)[^>]*>.*<\/script>/ig ); // set default in ckeditor.js [/<script[\s\S]*?<\/script>/gi,/<noscript[\s\S]*?<\/noscript>/gi]
    // allow imageselectorplus mediainsert tag code
    config.protectedSource.push( /<(mediainsert)[^>]*>[\s\S]*?<\/mediainsert>/img );
    // allow a Smarty like {} tag syntax without starting whitespace, which would be some other code part.
    config.protectedSource.push( /\{[a-zA-Z\$].*?\}/gi );

    // Set placeholder tag cases - elements [attributes]{styles}(classes)
    // Allowed mediainsert, gallery, media tags (imageselectorplus galleries) - which tells ACF to not touch the code!
    // Allowed div is a need for Media Library inserts - which tells ACF to not touch the code!
    // img[height] is even needed to avoid ACF OFF removement of height attributes
    config.extraAllowedContent = 'mediainsert[*]{*}(*);gallery[*]{*}(*);media[*]{*}(*);script[*]{*}(*);audio[*]{*}(*);div[*]{*}(*);img[height,width];';

    // CKEDITOR.protectedSource patterns used regex Escape sequences
    //            \s any whitespace character;
    //            \S any character that is not a whitespace character
    //            \t tab (hex 09);
    //            \r carriage return (hex 0D);
    //            \n newline (hex 0A);
    // Pattern Modifiers
    //            /i caseless, match both upper and lower case letters
    //            /m treat as multiline
    //            /g be greedy

    // Prevent filler nodes in all empty blocks. - case switching source and wysiwyg mode multiple times
    //config.fillEmptyBlocks = false; // default (true) - switches <p>&nbsp;</p> to <p></p>
    //config.ignoreEmptyParagraph = false; // default(true) - Whether the editor must output an empty value ('') if it's contents is made by an empty paragraph only. (extends to config.fillEmptyBlocks)
    // It will still generate an empty <p></p> though.
    config.autoParagraph = false; // but this one definitely prevents adding multiple empty paragraphs when switching source mode!!!

    // add custom Serendipity styles to ckeditor wysiwyg-mode, to repect css image floats
    config.contentsCss = 'htmlarea/ckeditor/wysiwyg-style.css';

    // The configuration setting that controls the ENTER mode is "config.enterMode" and it offers three options:
    // (1) The default creates a paragraph element each time the "enter" key is pressed:
    //config.enterMode = CKEDITOR.ENTER_P; // inserts <p></p>
    // (2) You can choose to create a "div" element instead of a paragraph:
    //config.enterMode = CKEDITOR.ENTER_DIV; // inserts <div></div>
    // (3) If you prefer to not wrap the text in anything, you can choose to insert a line break tag:
    //config.enterMode = CKEDITOR.ENTER_BR; // inserts <br />
    // You can always use SHIFT+ENTER to set a br in the P-mode default option or change the SHIFT-mode to something else
    //config.shiftEnterMode = CKEDITOR.ENTER_BR;

    //config.entities = false;
    //config.htmlEncodeOutput = false;

    // ui configurations - just some examples
    //config.uiColor = 'transparent'; // standard, but better disable config.uiColor all
    //config.uiColor = '#CFD1CF'; // standard grey
    //config.uiColor = '#f5f5f5'; // standard light grey
    //config.uiColor = '#E6EDF3'; // extreme light blue
    //config.uiColor = '#DFE8F6'; // very light blue
    //config.uiColor = '#9AB8F3'; // light blue/violet
    //config.uiColor = '#AADC6E'; // light green
    //config.uiColor = '#FFDC6E'; // light gold
    //config.uiColor = '#FF8040'; // mango
    //config.uiColor = '#FF2400'; // scarlet red
    //config.uiColor = '#14B8C4'; // light turquoise
    config['skin'] = 'moono';
    config['height'] = 400;
};
