/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/InsertAnchor/insert-anchor.js */
function InsertAnchor(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
this.placeholderImg="<img class=\"IA_placeholder\" src=\""+Xinha.getPluginDir("InsertAnchor")+"/img/placeholder.gif\" />";
_2.registerButton({id:"insert-anchor",tooltip:this._lc("Insert Anchor"),image:_1.imgURL("insert-anchor.gif","InsertAnchor"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("insert-anchor","createlink",1);
}
InsertAnchor._pluginInfo={name:"InsertAnchor",origin:"version: 1.0, by Andre Rabold, MR Printware GmbH, http://www.mr-printware.de",version:"2.0",developer:"Udo Schmal",developer_url:"http://www.schaffrath-neuemedien.de",c_owner:"Udo Schmal",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de",license:"htmlArea"};
InsertAnchor.prototype._lc=function(_5){
return Xinha._lc(_5,"InsertAnchor");
};
InsertAnchor.prototype.onGenerate=function(){
this.editor.addEditorStylesheet(Xinha.getPluginDir("InsertAnchor")+"/insert-anchor.css");
};
InsertAnchor.prototype.inwardHtml=function(_6){
_6=_6.replace(/(<a[^>]*class="anchor"[^>]*>)/g,"$1"+this.placeholderImg);
return _6;
};
InsertAnchor.prototype.outwardHtml=function(_7){
_7=_7.replace(/(<img[^>]*class="?IA_placeholder"?[^>]*>)/ig,"");
return _7;
};
InsertAnchor.prototype.buttonPress=function(_8){
var _9=null;
var _a=_8.getSelectedHTML();
var _b=_8._getSelection();
var _c=_8._createRange(_b);
var _d=this;
var a=_8._activeElement(_b);
if(!(a!=null&&a.tagName.toLowerCase()=="a")){
a=_8._getFirstAncestor(_b,"a");
}
if(a!=null&&a.tagName.toLowerCase()=="a"){
_9={name:a.id};
}else{
_9={name:""};
}
_8._popupDialog("plugin://InsertAnchor/insert_anchor",function(_f){
if(_f){
var _10=_f["name"];
if(_10==""||_10==null){
if(a){
var _11=_d.outwardHtml(a.innerHTML);
a.parentNode.removeChild(a);
_8.insertHTML(_11);
}
return;
}
try{
var doc=_8._doc;
if(!a){
a=doc.createElement("a");
a.id=_10;
a.name=_10;
a.title=_10;
a.className="anchor";
a.innerHTML=_d.placeholderImg;
if(_a){
a.innerHTML+=_a;
}
if(Xinha.is_ie){
_c.pasteHTML(a.outerHTML);
}else{
_8.insertNodeAtSelection(a);
}
}else{
a.id=_10;
a.name=_10;
a.title=_10;
a.className="anchor";
}
}
catch(e){
}
}
},_9);
};

