/**
 * @fileOverview A Serendipity wysiwyg-placeholder ckeditor plugin: procurator, 2014-03-15, v. 1.3, Ian
 */

(function (pluginName) {
   var pluginName = 'procurator';

   function createFakeElement(editor, realElement, displayName) {

        if (!displayName) var displayName = '';

        // API createFakeParserElement(realElement, className, realElementType, isResizable) -  realElementType can be flash,iframe,and? (these set their own title attribute),
        var fakeElement = editor.createFakeParserElement( realElement, 'cke_procurator', 'procurator', false ), fakeStyle   = fakeElement.attributes.style || '';
            // set the needed [img object] attributes
            //fakeElement.attributes[ 'align' ] = 'right'; // '' is default, uncomment to default
            fakeElement.attributes[ 'title' ] = realElement.name + ' tag placeholder';
            fakeElement.attributes[ 'alt' ]   = realElement.name;
            //fakeElement.attributes[ 'contenteditable'] = "false"; // disabled, since CKEDITOR 4.3.2 must have had changed something, that the mediainsert block was replaced by an img procurator/placeholder code
            //fakeElement.attributes['src'] = realElement.name+'.png'; // could be used to add an specific element name placeholder, else the /plugins/fakeobjects/images/spacer.gif is used and overruled by addCss
            return fakeElement;
    }

    CKEDITOR.plugins.add( pluginName, {
        requires: ['fakeobjects'],

		onLoad: function() {
            //  CHANGES IN CKEDITOR 4
            //  The "additional CSS" feature provided by CKEDITOR.editor#addCss has moved to a global CKEDITOR.addCss, with specified style rules applies document wide.
            //  Thus the proper way for a plugin to style it's editable content is to call CKEDITOR.addCss inside of the plugin's onLoad function, rather than it's init function in v3.
            //  Adds a piece of CSS code to the editor, which will be applied to the WYSIWYG editing document. This CSS would not be added to the output, and is there mainly for editor-specific editing requirements.
            //  Note: This function should be called before the editor is loaded to take effect.
			CKEDITOR.addCss(
                '.cke_procurator' +
                '{' +
                    'background-color: #FAFAFA;' +
                    'background-image: url(' + CKEDITOR.getUrl( this.path + 'images/procurator.png' ) + ');' +
                    'background-position: center center;' +
                    'background-repeat: no-repeat;' +
                    'border: 1px solid #a9a9a9;' +
                    'border-radius: 0.8em;' +
                    'width: 220px;' +
                    'height: 37px;' +
                '}'
            );
        },

        init: function (editor) {
            // This happens on switch wysiwyg-mode to source view only and is used to remove special wysiwyg changes to the source
            editor.on( 'mode', function() {
                if ( editor.mode == 'source' ) {
                    var source = editor.getData();//alert(source);
                    source = source.replace( /[\t]/g, '    '); // replace ckeditor added tabulators with 4 spaces
                    source = source.replace( /&amp;quot;/g, '"'); // replace smarty tags quote to " switching wysiwyg to source view
                    source = source.replace( /&amp;#39;/g, "'"); // replace smarty tags quote to ' switching wysiwyg to source view
                    //source = source.replace( /\r?\n|\r/gm, ""); // replace all newlines for
                    // set data back into source mode textarea
                    editor.setData(source);
                }
            });
        },

        afterInit: function (editor) {
            // Special script tags work by default, without any changes (commenting out the script to protected replavements) in ckeditor.js file,
            // but we can not access (fake and replace with placeholders) these <!--{cke_protected} .* --> comments via the dataFilter rule element.
            // This is why we have to fake it by comment dataFilter rule first

            // The dataProcessor handles data coming in to the editor and out from the editor.
            var dataProcessor = editor.dataProcessor;

            // The dataProcessor.dataFilter handles incoming data, like pasting:
            // filter applied to the input data when transforming it to HTML to be loaded into the editor ("on input").
            // Ckeditor in this state is enabled.
            var dataFilter = dataProcessor && dataProcessor.dataFilter;

            // The dataProcessor.htmlFilter handles outgoing data, like saving, viewing the source button, or generally calling updateElement on the editor:
            // filter applied to the HTML available in the editor when transforming it on the XHTML outputted by the editor ("on output").
            // If you have a rule within the htmlFilter that strips out the href attribute, then on save it will be stripped.
            // Ckeditor in this state is disabled.
            // var htmlFilter = dataProcessor && dataProcessor.htmlFilter;

            // var writer = editor.dataProcessor.writer;
            // The way to close self closing tags inside add rules, like
            // writer.selfClosingEnd = '>';

            if (dataFilter) {
                // Here we want to add a new filter rule... if the source matches this property, it will be converted
                // Note the num at the end, which defines the filter priority. Higher number = higher Priority.
                dataFilter.addRules({
                    // comment reads html comments <!-- (.*) --> and adds fakes to the income-data to be displayed in wysiwyg-mode,
                    // which was already filtered by ckeditor - see script, noscript (and php?) tags as example
                    comment : function( elString, elObject ) {
                        var protectedSourceMarker =  '{cke_protected}';
                        if ( elString.substr( 0, protectedSourceMarker.length ) == protectedSourceMarker ) {
                                var displayName      = 'protected';
                                var realData         = elString.replace(/\{cke_protected\}([\s\S]+?)/g, "$1"); // cuts the snippet from {cke_protected}(.*) to preserve
                                var tagName          = realData.replace( /([%3C|%3C%3F|%7B]?([a-z]+))%+(.*)$/, "$1"); // get the real tag name to set as real tag name title to object fakeElement.attributes
                                    tagName          = tagName.replace( '%3C', '' ).replace( '%3F', '' ); // tweak a little more, since this upper regex drives me crazy
                                if ( tagName.substr( 0, 3) == '%7B' ) tagName = 'smarty'; // []{
                                if ( !tagName.match("script|mediainsert|audio|smarty") ) tagName = 'unknown';
                                var fakeWrapper      = new CKEDITOR.htmlParser.element( displayName ); // creates the new object
                                    fakeWrapper.name = tagName; // to give this to createFakeElement(), set name value to displayName, else it is the cke_protected script value
                                var fakeElement      = createFakeElement(editor, fakeWrapper); // take the way to editor.createFakeParserElement( fakeWrapper, 'cke_procurator', displayName, false );
                                // by here I had issues that the realelement data returned twice and falsely encoded,
                                // or returned to be like "%3Cprotected%3E%3C%2Fprotected%3E" only,
                                // so we workaround this weird issues and just set the value back to the realData! :)
                                fakeElement.attributes['data-cke-realelement'] = realData;
                                //alert(elObject.value);
                                //alert(fakeElement.attributes['data-cke-realelement']);
                                if ( fakeElement ) {
                                        delete elObject.value;
                                        return fakeElement;
                                }
                        }
                        return elObject.value;
                    },
                    // this are real tag elements only
                    elements: {
                        /*
                        'protected': function (element) {
                            var fake = createFakeElement(editor, element);
                            if ( element.attributes.src ) {
                                fake.attributes.alt = element.attributes.src;
                                fake.attributes["data-cke-realelement"] = fake.attributes["data-cke-realelement"].replace(/%26amp%3B/gi, '%26'); //fix double encoding on ampersands in src
                            }
                            return fake;
                        },*/
                    }
                }, 16); // This is ckeditor priority [1-10] and ACF [11-14], but set to 1 does not conflict here, since we don't hit internal priority rules
                //          http://docs.ckeditor.com/?_escaped_fragment_=/api/CKEDITOR.editor-event-toDataFormat#!/api/CKEDITOR.editor-event-toDataFormat
                //          toHtml( evt )
                //          This event is fired by the CKEDITOR.htmlDataProcessor when input HTML is to be purified by the CKEDITOR.htmlDataProcessor.toHtml method.
                //          By adding listeners with different priorities it is possible to process input HTML on different stages:
                //              1-4: Data is available in the original string format.
                //                5: Data is initially filtered with regexp patterns and parsed to CKEDITOR.htmlParser.fragment CKEDITOR.htmlParser.element.
                //              5-9: Data is available in the parsed format, but CKEDITOR.htmlDataProcessor.dataFilter is not applied yet.
                //               10: Data is filtered with CKEDITOR.htmlDataProcessor.dataFilter.
                //            10-14: Data is available in the parsed format and CKEDITOR.htmlDataProcessor.dataFilter has already been applied.
                //               15: Data is written back to an HTML string.
                //             15-*: Data is available in an HTML string.
                //          Available since: 4.1
            }
        }
    });

})('procurator');
