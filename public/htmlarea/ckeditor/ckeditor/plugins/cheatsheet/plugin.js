/**
 * @license Serendipity (s9y.org)
 */

/**
 * @fileOverview A Serendipity CKE-Cheatsheet plugin: cheatsheet, v. 1.2 - 2015-01-28
 */

CKEDITOR.plugins.add( 'cheatsheet', {
	icons: 'CheatSheetIcon', // %REMOVE_LINE_CORE%
	hidpi: true, // %REMOVE_LINE_CORE%
	 init: function( editor ) {
        var command = editor.addCommand( 'CheatSheet', new CKEDITOR.dialogCommand( 'CheatSheetDialog' ) );
            command.modes = { wysiwyg: 1, source: 1 };
            command.canUndo = false;
            command.readOnly = 1;

        editor.ui.addButton && editor.ui.addButton( 'CheatSheet', {
            label: 'CKEDITOR Cheat Sheet',
            icon    : this.path + "icons/CheatSheetIcon.png",
            command: 'CheatSheet',
            toolbar: 'cheatsheet'
        });

        CKEDITOR.dialog.add( 'CheatSheetDialog', function( api )
		{
			// CKEDITOR.dialog.definition
			var dialogDefinition =
			{
				title : 'CKEDITOR Cheat Sheet',
              minWidth: 390,
             minHeight: 230,
              maxWidth: 600,
             maxHeight: 400,
			 contents : [
					{
						id : 'tab1',
						label : 'Cheat Sheet',
						title : 'Title',
						expand : true,
						padding : 0,
						elements :
						[
							{
								type : 'html',
                      html: '<style type="text/css">' +
                              '#cke-cheatsheet' +
                              '{' +
                                      'overflow: auto;' +
                                      'width: 600px;' +
                                      'height: 400px;' +
                              '}' +
                              '#cke-cheatsheet p' +
                              '{' +
                                      'font: 13px Arial,Helvetica,Tahoma,Verdana,Sans-Serif;' +
                                      'line-height: 1.6;' +
                                      'margin: 0 0 1em;' +
                                      'white-space: pre-line;' +
                              '}' +
                              '#cke-cheatsheet li' +
                              '{' +
                                      'font: 13px Arial,Helvetica,Tahoma,Verdana,Sans-Serif;' +
                              '}' +
                              '#cke-cheatsheet h1, #cke-cheatsheet h2, #cke-cheatsheet h3 {' +
                                      'line-height: 1.05em;' +
                                      'font-weight: bold;' +
                              '}' +
                              '#cke-cheatsheet h1 {' +
                                      'font-size: 200%;' +
                                      'margin: 0.55em 0;' +
                              '}' +
                              '#cke-cheatsheet h2 {' +
                                      'font-size: 160%;' +
                              '}' +
                              '#cke-cheatsheet h3 {' +
                                      'font-size: 140%;' +
                              '}' +
                              '#cke-cheatsheet ul' +
                              '{' +
                                      'list-style: none;' +
                                      'margin: 1em 0px 1em 1.5em;' +
                                      'border: 1px solid #bbb;' +
                                      'background-color: #fefcfc;' +
                                      'padding: 0.5em;' +
                                      'width: 94%;' +
                                      'overflow: auto;' +
                              '}' +
                              '#cke-cheatsheet ul li' +
                              '{' +
                                      'line-height: 2em;' +
                              '}' +
                               '#cke-cheatsheet i, #cke-cheatsheet em' +
                              '{' +
                                      'font: 20px monochrome italic;' +
                              '}' +
                              '#contentfooter' +
                              '{' +
                                      'margin-top: 2em;' +
                                      'font-size:smaller;' +
                              '}' +
                            '</style>' +
                            '<div id="cke-cheatsheet" class="cheatsheet">' +
                              '<h1>Keyboard Shortcuts</h1>' +
                              '<div id="mw-content-text" dir="ltr" class="mw-content-ltr" lang="en">' +
                              '<p>Many functions in CKEditor have their equivalent keyboard shortcuts. This is one of the reasons why working with the editor is simple and efficient.</p>' +
                              '<p>The list below contains available keyboard shortcuts grouped by problem areas.</p>' +
                              '<h2> Working with a Document </h2>' +
                              '<ul>' +
                                '<li> <em>Esc</em> – closes a CKEditor dialog window, drop-down list, or context menu. Also moves from the context menu submenu to the parent option.</li>' +
                                '<li> <em>Enter</em> – selects a CKEditor function from the toolbar, drop-down list, or context menu. Equivalent to the <b>OK</b> button in a dialog window.</li>' +
                                '<li> <em>Shift+F10</em>, <em>Menu/Application</em> key – opens the element\'s context menu.</li>' +
                              '</ul>' +
                              '<h3> Navigation </h3>' +
                              '<ul>' +
                                '<li> <em>Home</em> – jumps to the beginning of the line.</li>' +
                                '<li> <em>Ctrl+Home</em> – jumps to the beginning of the document.</li>' +
                                '<li> <em>End</em> – jumps to the end of the line.</li>' +
                                '<li> <em>Ctrl+End</em> – jumps to the end of the document.</li>' +
                                '<li> <em>PgDn</em> – scrolls down the document, approximately by the length of the editing area. </li>' +
                                '<li> <em>PgUp</em> – scrolls up the document, approximately by the length of the editing area.</li>' +
                              '</ul>' +
                              '<h3> Writing </h3>' +
                              '<ul>' +
                                '<li> <em>Enter</em> (<em>Return</em>) – ends a paragraph and starts a new one.</li>' +
                                '<li> <em>Shift+Enter</em> – adds a line break.</li>' +
                                '<li> <em>Backspace</em>, <em>Del</em> – deletes a character.</li>' +
                                '<li> <em>Ctrl+Backspace</em>, <em>Ctrl+Del</em> – deletes a word.</li>' +
                              '</ul>' +
                              '<h3> Undo and Redo </h3>' +
                              '<ul>' +
                                '<li> <em>Ctrl+Z</em> – performs the undo operation.</li>' +
                                '<li> <em>Ctrl+Y</em> – performs the redo operation.</li>' +
                                '</ul>' +
                                '<h3> Cut, Copy and Paste </h3>' +
                              '<ul>' +
                                '<li> <em>Ctrl+X</em>, <em>Shift+Del</em> – cuts a text fragment to clipboard.</li>' +
                                '<li> <em>Ctrl+C</em> – copies a text fragment to clipboard.</li>' +
                                '<li> <em>Ctrl+V</em>, <em>Shift+Insert</em> – pastes a text fragment from clipboard.</li>' +
                              '</ul>' +
                              '<h3> Text Selection </h3>' +
                              '<ul>' +
                                '<li> <em>Ctrl+A</em> – selects all document contents.</li>' +
                                '<li> <em>Shift+Arrow</em> – selects a text fragment by letters.</li>' +
                                '<li> <em>Ctrl+Shift+Arrow</em> – selects a text fragment by words.</li>' +
                                '<li> <em>Shift+Home</em> – selects a text fragment from the cursor to the beginning of the line.</li>' +
                                '<li> <em>Shift+End</em> – selects a text fragment from the cursor to the end of the line.</li>' +
                                '<li> <em>Ctrl+Shift+Home</em> – selects a text fragment from the cursor to the beginning of the document.</li>' +
                                '<li> <em>Ctrl+Shift+End</em> – selects a text fragment from the cursor to the end of the document.</li>' +
                                '<li> <em>Shift+PgDn</em> – selects a text fragment of approximately the length of the editing area starting from the cursor and going down.</li>' +
                                '<li> <em>Shift+PgUp</em> – selects a text fragment of approximately the length of the editing area starting from the cursor and going up.</li>' +
                              '</ul>' +
                              '<h2> Text Styling </h2>' +
                              '<ul>' +
                                '<li> <em>Ctrl+B</em> – applies <b>bold</b> formatting to a text fragment.</li>' +
                                '<li> <em>Ctrl+I</em> – applies <em>italics</em> formatting to a text fragment.</li>' +
                                '<li> <em>Ctrl+U</em> – applies <ins>underline</ins> formatting to a text fragment.</li>' +
                              '</ul>' +
                              '<h2> Rich Text </h2>' +
                              '<ul>' +
                                '<li> <em>Ctrl+L</em> – opens the <b>Link</b> dialog window.</li>' +
                              '</ul>' +
                              '<h2> Accessibility </h2>' +
                              '<p>On entering the toolbar you can use the <em>Tab</em> and <em>Shift+Tab</em> shortcuts to navigate between button groups and the <em>Arrow</em> keys to navigate between the buttons <em>within a group</em>.<p>' +
                              '<ul>' +
                                '<li> <em>Alt+0</em> – opens <b>Help</b>.</li>' +
                                '<li> <em>Alt+-</em> (<em>minus</em>) – collapses and restores the toolbar.</li>' +
                                '<li> <em>Alt+F10</em> – enters the toolbar or the tab list of the currently open dialog window.</li>' +
                                '<li> <em>Alt+F11</em> – enters the elements path.</li>' +
                                '<li> <em>Tab</em> – moves to the next toolbar button group, context menu suboption, elements path element, dialog window element, or dialog window tab while in the tab list.</li>' +
                                '<li> <em>Right Arrow</em> – moves to the next toolbar button within the group, context menu suboption, elements path element, dialog window element, or dialog window tab while in the tab list.</li>' +
                                '<li> <em>Tab</em> or <em>Down Arrow</em> – moves to the next drop-down list or context menu option.</li>' +
                                '<li> <em>Shift+Tab</em> – moves to the previous toolbar button group, context menu parent option, elements path element, dialog window element, or dialog window tab while in the tab list.</li>' +
                                '<li> <em>Left Arrow</em> – moves to the previous toolbar button within the group, context menu parent option, elements path element, dialog window element, or dialog window tab while in the tab list.</li>' +
                                '<li> <em>Shift+Tab</em> or <em>Up Arrow</em> – moves to the previous drop-down list or context menu option.</li>' +
                                '<li> <em>Space</em> or <em>Enter</em> – activates a toolbar button, a context menu option, a drop-down list option, an elements path element, or a dialog window tab once selected. Also enters a context menu submenu, if it is available.</li>' +
                              '</ul>' +
                              '<div id="contentfooter">This pages content was last modified on 11 May 2011, at 14:28.</div>' +
                            '</div>'
                        }]
                    }],
                buttons: [ CKEDITOR.dialog.cancelButton ]
			};

			return dialogDefinition;
        });
	}
});