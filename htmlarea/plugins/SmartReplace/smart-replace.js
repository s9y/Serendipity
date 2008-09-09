/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/SmartReplace/smart-replace.js */
function SmartReplace(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"smartreplace",tooltip:this._lc("SmartReplace"),image:Xinha.getPluginDir("SmartReplace")+"/img/smartquotes.gif",textMode:false,action:function(e,_5,_6){
_3.buttonPress(null,_6);
}});
_2.addToolbarElement("smartreplace","htmlmode",1);
}
SmartReplace._pluginInfo={name:"SmartReplace",version:"1.0",developer:"Raimund Meyer",developer_url:"http://x-webservice.net",c_owner:"Raimund Meyer",sponsor:"",sponsor_url:"",license:"LGPL"};
SmartReplace.prototype._lc=function(_7){
return Xinha._lc(_7,"SmartReplace");
};
Xinha.Config.prototype.SmartReplace={"defaultActive":true,"quotes":null};
SmartReplace.prototype.toggleActivity=function(_8){
if(typeof _8!="undefined"){
this.active=_8;
}else{
this.active=this.active?false:true;
}
this.editor._toolbarObjects.smartreplace.state("active",this.active);
};
SmartReplace.prototype.onUpdateToolbar=function(){
this.editor._toolbarObjects.smartreplace.state("active",this.active);
};
SmartReplace.prototype.onGenerate=function(){
this.active=this.editor.config.SmartReplace.defaultActive;
this.editor._toolbarObjects.smartreplace.state("active",this.active);
var _9=this;
Xinha._addEvent(_9.editor._doc,"keypress",function(_a){
return _9.keyEvent(Xinha.is_ie?_9.editor._iframe.contentWindow.event:_a);
});
var _b=this.editor.config.SmartReplace.quotes;
if(_b&&typeof _b=="object"){
this.openingQuotes=_b[0];
this.closingQuotes=_b[1];
this.openingQuote=_b[2];
this.closingQuote=_b[3];
}else{
this.openingQuotes=this._lc("OpeningDoubleQuotes");
this.closingQuote=this._lc("ClosingSingleQuote");
this.closingQuotes=this._lc("ClosingDoubleQuotes");
this.openingQuote=this._lc("OpeningSingleQuote");
}
if(this.openingQuotes=="OpeningDoubleQuotes"){
this.openingQuotes=String.fromCharCode(8220);
this.closingQuotes=String.fromCharCode(8221);
this.openingQuote=String.fromCharCode(8216);
this.closingQuote=String.fromCharCode(8217);
}
};
SmartReplace.prototype.keyEvent=function(ev){
if(!this.active){
return true;
}
var _d=this.editor;
var _e=Xinha.is_ie?ev.keyCode:ev.which;
var _f=String.fromCharCode(_e);
if(_f=="\""||_f=="'"){
Xinha._stopEvent(ev);
return this.smartQuotes(_f);
}
if(_e==32){
return this.smartReplace(ev,2,/^\s-/," \ufffd\ufffd\ufffd",false);
}
if(_f=="."){
return this.smartReplace(ev,2,/\.\./,"\ufffd\ufffd\ufffd",true);
}
return true;
};
SmartReplace.prototype.smartQuotes=function(_10){
if(_10=="'"){
var _11=this.openingQuote;
var _12=this.closingQuote;
}else{
var _11=this.openingQuotes;
var _12=this.closingQuotes;
}
var _13=this.editor;
var sel=_13.getSelection();
if(Xinha.is_ie){
var r=_13.createRange(sel);
if(r.text!==""){
r.text="";
}
r.moveStart("character",-1);
if(r.text.match(/\S/)){
r.moveStart("character",+1);
r.text=_12;
}else{
r.moveStart("character",+1);
r.text=_11;
}
}else{
var r=_13.createRange(sel);
if(!r.collapsed){
_13.insertNodeAtSelection(document.createTextNode(""));
}
if(r.startOffset>0){
r.setStart(r.startContainer,r.startOffset-1);
}
if(r.toString().match(/[^\s\xA0]/)){
r.collapse(false);
_13.insertNodeAtSelection(document.createTextNode(_12));
}else{
_13.insertNodeAtSelection(document.createTextNode(_11));
}
_13.getSelection().collapseToEnd();
}
return false;
};
SmartReplace.prototype.smartReplace=function(ev,_17,re,_19,_1a){
var _1b=this.editor;
var sel=this.editor.getSelection();
var r=this.editor.createRange(sel);
if(Xinha.is_ie){
r.moveStart("character",-_17);
if(r.text.match(re)){
r.text=_19;
if(_1a){
Xinha._stopEvent(ev);
return false;
}
}
}else{
if(r.startOffset>1){
r.setStart(r.startContainer,r.startOffset-_17);
}
if(r.toString().match(re)){
this.editor.insertNodeAtSelection(document.createTextNode(_19));
r.deleteContents();
r.collapse(true);
if(_1a){
Xinha._stopEvent(ev);
return false;
}
}
_1b.getSelection().collapseToEnd();
}
return true;
};
SmartReplace.prototype.replaceAll=function(){
var _1e=["&quot;",String.fromCharCode(8220),String.fromCharCode(8221),String.fromCharCode(8222),String.fromCharCode(187),String.fromCharCode(171)];
var _1f=["'",String.fromCharCode(8216),String.fromCharCode(8217),String.fromCharCode(8218),String.fromCharCode(8250),String.fromCharCode(8249)];
var _20=this.editor.getHTML();
var _21=new RegExp("(\\s|^|>)("+_1e.join("|")+")(\\S)","g");
_20=_20.replace(_21,"$1"+this.openingQuotes+"$3");
var _22=new RegExp("(\\s|^|>)("+_1f.join("|")+")(\\S)","g");
_20=_20.replace(_22,"$1"+this.openingQuote+"$3");
var _23=new RegExp("(\\S)("+_1e.join("|")+")","g");
_20=_20.replace(_23,"$1"+this.closingQuotes);
var _24=new RegExp("(\\S)("+_1f.join("|")+")","g");
_20=_20.replace(_24,"$1"+this.closingQuote);
var _25=new RegExp("( |&nbsp;)(-)( |&nbsp;)","g");
_20=_20.replace(_25," "+String.fromCharCode(8211)+" ");
this.editor.setHTML(_20);
};
SmartReplace.prototype.dialog=function(){
var _26=this;
var _27=function(_28){
_26.toggleActivity(_28.enable);
if(_28.convert){
_26.replaceAll();
}
};
var _29=this;
Dialog(Xinha.getPluginDir("SmartReplace")+"/popups/dialog.html",_27,_29);
};
SmartReplace.prototype.buttonPress=function(_2a,obj){
var _2c=this;
if(this._dialog.dialog.rootElem.style.display!="none"){
return this._dialog.hide();
}
var _2d=function(){
var _2e=_2c._dialog.hide();
_2c.toggleActivity((_2e.enable)?true:false);
if(_2e.convert){
_2c.replaceAll();
_2c._dialog.dialog.getElementById("convert").checked=false;
}
};
var _2f={enable:_2c.active?"on":"",convert:""};
this._dialog.show(_2f,_2d);
};
SmartReplace.prototype.onGenerateOnce=function(){
if(!this._dialog){
this._dialog=new SmartReplace.Dialog(this);
}
};
SmartReplace.Dialog=function(_30){
this.Dialog_nxtid=0;
this.mainPluginObject=_30;
this.id={};
this.ready=false;
this.files=false;
this.html=false;
this.dialog=false;
this._prepareDialog();
};
SmartReplace.Dialog.prototype._prepareDialog=function(){
var _31=this;
var _32=this.mainPluginObject.editor;
if(this.html==false){
Xinha._getback(Xinha.getPluginDir("SmartReplace")+"/dialog.html",function(_33){
_31.html=_33;
_31._prepareDialog();
});
return;
}
this.dialog=new Xinha.Dialog(_32,this.html,"SmartReplace");
this.ready=true;
};
SmartReplace.Dialog.prototype._lc=SmartReplace.prototype._lc;
SmartReplace.Dialog.prototype.show=function(_34,ok,_36){
if(!this.ready){
var _37=this;
window.setTimeout(function(){
_37.show(_34,ok,_36);
},100);
return;
}
var _38=this.dialog;
var _37=this;
if(ok){
this.dialog.getElementById("ok").onclick=ok;
}else{
this.dialog.getElementById("ok").onclick=function(){
_37.hide();
};
}
if(_36){
this.dialog.getElementById("cancel").onclick=_36;
}else{
this.dialog.getElementById("cancel").onclick=function(){
_37.hide();
};
}
this.mainPluginObject.editor.disableToolbar(["fullscreen","smartreplace"]);
this.dialog.show(_34);
this.dialog.onresize();
};
SmartReplace.Dialog.prototype.hide=function(){
this.mainPluginObject.editor.enableToolbar();
return this.dialog.hide();
};

