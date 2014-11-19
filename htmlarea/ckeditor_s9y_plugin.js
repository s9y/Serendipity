/**
 * @fileOverview A Serendipity custom CKEDITOR additional plugin creator file:
 *               ckeditor_s9y_plugin.js, v. 1.4, last modified 2014-11-19, by Ian
 *
 * Please Note:  To use a custom plugin.js file, copy this file to templates/2k11/admin,
 *               or to your template in /templates/xxx/admin
 *               and rename it to ckeditor_custom_plugin.js.
 */

 // init custom button arrays
 var s9ypluginbuttons = [];
 var s9ymediabuttons = [];

 // Init CKEDITOR added plugins
 // Seperate by comma, no whitespace allowed, and keep last comma, since later on concatenated with Serendipity hooked plugins, eg MediaLibrary!
 // For some CKEDITOR plugin you need the widget plugin, which is added here.
 //    Plugin Dependencies: widget      Add-on Dependencies: Line Utilities and Clipboard
 // mediaembed is a fast and simple YouTube code CKEditor-Plugin: v. 0.5+ (https://github.com/frozeman/MediaEmbed, 2013-09-12) to avoid ACF restrictions
 // procurator and cheatsheet are S9y only plugins
 var customplugins = 'mediaembed,procurator,cheatsheet,';

 // for any new instance when it is created - listen on load
 CKEDITOR.on('instanceReady', function(evt){

    var editor = evt.editor,

    rules = {
        elements: {
            // for serendipity_event_imageselectorplus plugin galleries
            mediainsert: function( element ) {
                // XHTML output instead of HTML - but this does not react on trailing slash eg <media "blah" />
                // editor.dataProcessor.writer.selfClosingEnd = ' />';

                // avoid line breaks with special block elements
                var tags = ['mediainsert', 'gallery', 'media'];

                for (var key in tags) {
                    editor.dataProcessor.writer.setRules(tags[key],
                    {
                        // Indicates that this tag causes indentation on line breaks inside of it.
                        indent : true,
                        // Inserts a line break before the element opening tag.
                        breakBeforeOpen : true,
                        // Inserts a line break after the element opening tag.
                        breakAfterOpen : false,
                        // Inserts a line break before the element closing tag.
                        breakBeforeClose : true,
                        // Inserts a line break after the element closing tag.
                        breakAfterClose : false
                    });
                }
            },
            // for S9y blog entry MediaLibrary added images
            // Output dimensions of w/h images, since we either need an unchanged MediaLibrary image code for responsive templates or tweak some replacements!
            img: function( element ) {
                var style = element.attributes.style;

                if ( style )
                {
                    // Get the height from the style.
                    var  match = /(?:^|\s)height\s*:\s*(\d+)px/i.exec( style );
                    var height = match && match[1];

                    if ( height )
                    {
                        element.attributes.style = element.attributes.style.replace( /(?:^|\s)height\s*:\s*(\d+)px;?/i , '' );
                        //element.attributes.height = height;
                        // Do not add to element attribute height, since then the height will be automatically (re-) added to style again by ckeditor or image js
                        // The current result is now: img alt class src style{width}. That is the only working state to get arround this issue in a relative simple way!
                        // Remember: Turning ACF OFF, will leave code alone, but still removes the height="" attribute! (workaround in extraAllowedContent added img[height]!)
                    }
                }
            }
        }
    };

    // It's good to set both filters - dataFilter is used when loading data and htmlFilter when retrieving.
    editor.dataProcessor.htmlFilter.addRules( rules );
    editor.dataProcessor.dataFilter.addRules( rules );
 });
