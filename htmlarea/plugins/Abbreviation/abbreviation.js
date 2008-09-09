/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Abbreviation/abbreviation.js */
function Abbreviation(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"abbreviation",tooltip:this._lc("Abbreviation"),image:_1.imgURL("ed_abbreviation.gif","Abbreviation"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("abbreviation","inserthorizontalrule",1);
}
Abbreviation._pluginInfo={name:"Abbreviation",version:"1.0",developer:"Udo Schmal",developer_url:"",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de/",c_owner:"Udo Schmal & Schaffrath-NeueMedien",license:"htmlArea"};
Abbreviation.prototype._lc=function(_5){
return Xinha._lc(_5,"Abbreviation");
};
Abbreviation.prototype.onGenerate=function(){
this.editor.addEditorStylesheet(Xinha.getPluginDir("Abbreviation")+"/abbreviation.css");
};
Abbreviation.prototype.buttonPress=function(_6,_7,_8){
var _9=null;
var _a=_6.getSelectedHTML();
var _b=_6._getSelection();
var _c=_6._createRange(_b);
var _d=_6._activeElement(_b);
if(!(_d!=null&&_d.tagName.toLowerCase()=="abbr")){
_d=_6._getFirstAncestor(_b,"abbr");
}
if(_d!=null&&_d.tagName.toLowerCase()=="abbr"){
_9={title:_d.title,text:_d.innerHTML};
}else{
_9={title:"",text:_a};
}
_6._popupDialog("plugin://Abbreviation/abbreviation",function(_e){
if(_e){
var _f=_e["title"];
if(_f==""||_f==null){
if(_d){
var _10=_d.innerHTML;
_d.parentNode.removeChild(_d);
_6.insertHTML(_10);
}
return;
}
try{
var doc=_6._doc;
if(!_d){
_d=doc.createElement("abbr");
_d.title=_f;
_d.innerHTML=_a;
if(Xinha.is_ie){
_c.pasteHTML(_d.outerHTML);
}else{
_6.insertNodeAtSelection(_d);
}
}else{
_d.title=_f;
}
}
catch(e){
}
}
},_9);
};

