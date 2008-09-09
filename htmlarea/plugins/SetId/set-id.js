/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/SetId/set-id.js */
function SetId(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"setid",tooltip:this._lc("Set Id and Name"),image:_1.imgURL("set-id.gif","SetId"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("setid","createlink",1);
}
SetId._pluginInfo={name:"SetId",version:"2.0",developer:"Udo Schmal",developer_url:"http://www.schaffrath-neuemedien.de",c_owner:"Udo Schmal",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de",license:"htmlArea"};
SetId.prototype._lc=function(_5){
return Xinha._lc(_5,"SetId");
};
SetId.prototype.onGenerate=function(){
this.editor.addEditorStylesheet(Xinha.getPluginDir("SetId")+"/set-id.css");
};
SetId.prototype.buttonPress=function(_6){
var _7=null;
var _8=_6.getSelectedHTML();
var _9=_6._getSelection();
var _a=_6._createRange(_9);
var _b=_6._activeElement(_9);
if(_b){
_7={name:_b.id};
}else{
_7={name:""};
}
_6._popupDialog("plugin://SetId/set_id",function(_c){
if(_c){
var _d=_c["name"];
if(_d==""||_d==null){
if(_b){
_b.removeAttribute("name");
_b.removeAttribute("id");
_b.removeAttribute("title");
if(_b.className=="hasid"){
_b.removeAttribute("class");
}
}
return;
}
try{
var _e=_6._doc;
if(!_b){
_b=_e.createElement("span");
_b.id=_d;
_b.name=_d;
_b.title=_d;
_b.className="hasid";
_b.innerHTML=_8;
if(Xinha.is_ie){
_a.pasteHTML(_b.outerHTML);
}else{
_6.insertNodeAtSelection(_b);
}
}else{
_b.id=_d;
_b.name=_d;
_b.title=_d;
_b.className="hasid";
}
}
catch(e){
}
}
},_7);
};

