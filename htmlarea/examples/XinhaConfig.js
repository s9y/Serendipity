/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/examples/XinhaConfig.js */
xinha_editors=null;
xinha_init=null;
xinha_config=null;
xinha_plugins=null;
xinha_init=xinha_init?xinha_init:function(){
xinha_editors=xinha_editors?xinha_editors:["myTextArea","anotherOne"];
xinha_plugins=xinha_plugins?xinha_plugins:["CharacterMap","ContextMenu","SmartReplace","Stylist","Linker","SuperClean","TableOperations"];
if(!Xinha.loadPlugins(xinha_plugins,xinha_init)){
return;
}
xinha_config=xinha_config?xinha_config():new Xinha.Config();
xinha_config.pageStyleSheets=[_editor_url+"examples/full_example.css"];
xinha_editors=Xinha.makeEditors(xinha_editors,xinha_config,xinha_plugins);
Xinha.startEditors(xinha_editors);
};
Xinha.addOnloadHandler(xinha_init);

