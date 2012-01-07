<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_CKEDITOR_NAME',     'CKeditor');
@define('PLUGIN_EVENT_CKEDITOR_DESC',     'Uses CKeditor as the WYSIWYG editor. After installation, go to the configuration screen of this plugin for further instructions.');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL', '<br /><br /><strong>Installation guide:</strong><br />
<ul>
<li>Download CKeditor from <a href="http://ckeditor.com/download" target="_blank">http://ckeditor.com/download</a></li>
<li>Extract it to: ' . dirname(__FILE__) . ' (it should create the "ckeditor" subdirectory)</li>
<li>Enter the relative HTTP path to the "ckeditor" directory into this plugin configuration</li>
<li>Note: for most people this relative path is "plugins/serendipity_event_ckeditor/ckeditor/"</li>
<li>Make sure to enable WYSIWYG mode in your Serendipity Personal Preferences.</li>
</ul>');
@define('PLUGIN_EVENT_CKEDITOR_CONFIG', '');

?>
