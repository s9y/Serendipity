/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.dialog.add( 'cheatsheet', function( editor ) {
	var lang = "Cheatsheet",
	imagePath = CKEDITOR.plugins.get( 'cheatsheet' ).path + 'dialogs/' + ( CKEDITOR.env.hidpi ? 'hidpi/' : '' ) + 'CheatSheetIcon.png';

	return {
		title: 'shortcuts',
		contents: [{
			id: 'tab1',
			label: '',
			title: '',
			expand: true,
			padding: 0,
			elements: [{
				type: 'html',
				html: '<h1>Keyboard Shortcuts</h1>blahblah'
			}]
		}],
		buttons: [ CKEDITOR.dialog.cancelButton ]
	};
} );
