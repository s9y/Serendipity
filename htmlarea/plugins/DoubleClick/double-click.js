/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/DoubleClick/double-click.js */
DoubleClick._pluginInfo={name:"DoubleClick",version:"1.0",developer:"Marijn Kampf",developer_url:"http://www.marijn.org",c_owner:"Marijn Kampf",sponsor:"smiling-faces.com",sponsor_url:"http://www.smiling-faces.com",license:"htmlArea"};
function DoubleClick(_1){
this.editor=_1;
this.editor.dblClickList={a:[function(e){
e.config.btnList["createlink"][3](e);
}],img:[function(e){
e.execCommand("insertimage");
}],td:[function(e){
e.execCommand("inserttable");
}]};
}
DoubleClick.prototype.onGenerate=function(){
var _5=this;
var _6=this.editordoc=this.editor._iframe.contentWindow.document;
Xinha._addEvents(_6,["dblclick"],function(_7){
return _5.onDoubleClick(Xinha.is_ie?_5.editor._iframe.contentWindow.event:_7);
});
this.currentClick=null;
};
DoubleClick.prototype.onDoubleClick=function(ev){
var _9=Xinha.is_ie?ev.srcElement:ev.target;
var _a=_9.tagName.toLowerCase();
if(this.editor.dblClickList[_a]!=undefined){
this.editor.dblClickList[_a][0](this.editor,_9);
}
};

