/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/InsertSnippet/insert-snippet.js */
function InsertSnippet(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"insertsnippet",tooltip:this._lc("Insert Snippet"),image:_1.imgURL("ed_snippet.gif","InsertSnippet"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("insertsnippet","insertimage",-1);
this.snippets=null;
var _5=_2.InsertSnippet.snippets+"?";
if(_2.InsertSnippet.backend_data!=null){
for(var i in _2.InsertSnippet.backend_data){
_5+="&"+i+"="+encodeURIComponent(_2.InsertSnippet.backend_data[i]);
}
}
Xinha._getback(_5,function(_7){
eval(_7);
_3.snippets=snippets;
});
}
InsertSnippet.prototype.onUpdateToolbar=function(){
if(!this.snippets){
this.editor._toolbarObjects.insertsnippet.state("enabled",false);
}else{
InsertSnippet.prototype.onUpdateToolbar=null;
}
};
InsertSnippet._pluginInfo={name:"InsertSnippet",version:"1.2",developer:"Raimund Meyer",developer_url:"http://rheinauf.de",c_owner:"Raimund Meyer",sponsor:"",sponsor_url:"",license:"htmlArea"};
InsertSnippet.prototype._lc=function(_8){
return Xinha._lc(_8,"InsertSnippet");
};
InsertSnippet.prototype.onGenerate=function(){
this.editor.addEditorStylesheet(Xinha.getPluginDir("InsertSnippet")+"/InsertSnippet.css");
};
Xinha.Config.prototype.InsertSnippet={"snippets":Xinha.getPluginDir("InsertSnippet")+"/demosnippets.js","css":["../InsertSnippet.css"],"showInsertVariable":false,"backend_data":null};
InsertSnippet.prototype.buttonPress=function(_9){
var _a=_9.config;
_a.snippets=this.snippets;
var _b=this;
_9._popupDialog("plugin://InsertSnippet/insertsnippet",function(_c){
if(!_c){
return false;
}
_9.focusEditor();
if(_c["how"]=="variable"){
_9.insertHTML("{"+_b.snippets[_c["snippetnum"]].id+"}");
}else{
_9.insertHTML(_b.snippets[_c["snippetnum"]].HTML);
}
},_a);
};

