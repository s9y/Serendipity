/**
 * To use a custom plugin.js file, copy this file to templates/2k11/admin,
 * or to your template in /templates/xxx/admin
 * and rename it to ckeditor_custom_plugin.js.
 */

 // init custom button arrays
 var s9ypluginbuttons = [];
 var s9ymediabuttons = [];

 var customplugins = 'mediaembed,procurator,cheatsheet,widget,dialog,codesnippet,';

 CKEDITOR.on('instanceReady', function(evt){

    var editor = evt.editor,

    rules = {
        elements: {
            // for serendipity_event_imageselectorplus plugin galleries
            mediainsert: function( element ) {
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
                    }
                }
            }
        }
    };

    // It's good to set both filters - dataFilter is used when loading data and htmlFilter when retrieving.
    editor.dataProcessor.htmlFilter.addRules( rules );
    editor.dataProcessor.dataFilter.addRules( rules );
 });
