/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/CharCounter/char-counter.js */
function CharCounter(_1){
this.editor=_1;
this._Chars=0;
this._Words=0;
this._HTML=0;
this.onKeyPress=this.__onKeyPress;
}
Xinha.Config.prototype.CharCounter={"showChar":true,"showWord":true,"showHtml":true,"separator":" | ","maxHTML":-1};
CharCounter._pluginInfo={name:"CharCounter",version:"1.31",developer:"Udo Schmal",developer_url:"http://www.schaffrath-neuemedien.de",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de",c_owner:"Udo Schmal & L.N.Schaffrath NeueMedien",license:"htmlArea"};
CharCounter.prototype._lc=function(_2){
return Xinha._lc(_2,"CharCounter");
};
CharCounter.prototype.onGenerateOnce=function(){
var _3=this;
if(this.charCount==null){
var _4=document.createElement("span");
_4.style.padding="2px 5px";
if(Xinha.is_ie){
_4.style.styleFloat="right";
}else{
_4.style.cssFloat="right";
}
var _5=document.createElement("div");
_5.style.height=_5.style.width=_5.style.lineHeight=_5.style.fontSize="1px";
_5.style.clear="both";
if(Xinha.is_ie){
this.editor._statusBarTree.style.styleFloat="left";
}else{
this.editor._statusBarTree.style.cssFloat="left";
}
this.editor._statusBar.appendChild(_4);
this.editor._statusBar.appendChild(_5);
this.charCount=_4;
}
};
CharCounter.prototype.__onKeyPress=function(ev){
if((ev.keyCode!=8)&&(ev.keyCode!=46)){
if(this.editor.config.CharCounter.maxHTML!=-1){
var _7=this.editor.getHTML();
if(_7.length>=this.editor.config.CharCounter.maxHTML){
Xinha._stopEvent(ev);
return true;
}
}
}
};
CharCounter.prototype._updateCharCount=function(){
var _8=this.editor;
var _9=_8.config;
var _a=_8.getHTML();
var _b=new Array();
if(_9.CharCounter.showHtml){
_b[_b.length]=this._lc("HTML")+": "+_a.length;
}
this._HTML=_a.length;
if(_9.CharCounter.showWord||_9.CharCounter.showChar){
_a=_a.replace(/<\/?\s*!--[^-->]*-->/gi,"");
_a=_a.replace(/<(.+?)>/g,"");
_a=_a.replace(/&nbsp;/gi," ");
_a=_a.replace(/([\n\r\t])/g," ");
_a=_a.replace(/(  +)/g," ");
_a=_a.replace(/&(.*);/g," ");
_a=_a.replace(/^\s*|\s*$/g,"");
}
if(_9.CharCounter.showWord){
this._Words=0;
for(var x=0;x<_a.length;x++){
if(_a.charAt(x)==" "){
this._Words++;
}
}
if(this._Words>=1){
this._Words++;
}
_b[_b.length]=this._lc("Words")+": "+this._Words;
}
if(_9.CharCounter.showChar){
_b[_b.length]=this._lc("Chars")+": "+_a.length;
this._Chars=_a.length;
}
this.charCount.innerHTML=_b.join(_9.CharCounter.separator);
};
CharCounter.prototype.onUpdateToolbar=function(){
this.charCount.innerHTML=this._lc("... in progress");
if(this._timeoutID){
window.clearTimeout(this._timeoutID);
}
var e=this;
this._timeoutID=window.setTimeout(function(){
e._updateCharCount();
},1000);
};
CharCounter.prototype.onMode=function(_e){
switch(_e){
case "textmode":
this.charCount.style.display="none";
break;
case "wysiwyg":
this.charCount.style.display="";
break;
default:
alert("Mode <"+_e+"> not defined!");
return false;
}
};

