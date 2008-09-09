/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ExtendedFileManager/assets/dialog.js */
function Dialog(_1,_2,_3){
if(typeof _3=="undefined"){
_3=window;
}
if(typeof window.showModalDialog=="function"){
Dialog._return=_2;
var r=window.showModalDialog(_1,_3,"dialogheight=10;dialogwidth=10;resizable=yes");
}else{
Dialog._geckoOpenModal(_1,_2,_3);
}
}
Dialog._parentEvent=function(ev){
setTimeout(function(){
if(Dialog._modal&&!Dialog._modal.closed){
Dialog._modal.focus();
}
},50);
if(Dialog._modal&&!Dialog._modal.closed){
Dialog._stopEvent(ev);
}
};
Dialog._return=null;
Dialog._modal=null;
Dialog._arguments=null;
Dialog._geckoOpenModal=function(_6,_7,_8){
var _9="hadialog"+_6;
var _a=/\W/g;
_9=_9.replace(_a,"_");
var _b=window.open(_6,_9,"toolbar=no,menubar=no,personalbar=no,width=10,height=10,"+"scrollbars=no,resizable=yes,modal=yes,dependable=yes");
Dialog._modal=_b;
Dialog._arguments=_8;
function capwin(w){
Dialog._addEvent(w,"click",Dialog._parentEvent);
Dialog._addEvent(w,"mousedown",Dialog._parentEvent);
Dialog._addEvent(w,"focus",Dialog._parentEvent);
}
function relwin(w){
Dialog._removeEvent(w,"click",Dialog._parentEvent);
Dialog._removeEvent(w,"mousedown",Dialog._parentEvent);
Dialog._removeEvent(w,"focus",Dialog._parentEvent);
}
capwin(window);
for(var i=0;i<window.frames.length;capwin(window.frames[i++])){
}
Dialog._return=function(_f){
if(_f&&_7){
_7(_f);
}
relwin(window);
for(var i=0;i<window.frames.length;relwin(window.frames[i++])){
}
Dialog._modal=null;
};
};
Dialog._addEvent=function(el,_12,_13){
if(Dialog.is_ie){
el.attachEvent("on"+_12,_13);
}else{
el.addEventListener(_12,_13,true);
}
};
Dialog._removeEvent=function(el,_15,_16){
if(Dialog.is_ie){
el.detachEvent("on"+_15,_16);
}else{
el.removeEventListener(_15,_16,true);
}
};
Dialog._stopEvent=function(ev){
if(Dialog.is_ie){
ev.cancelBubble=true;
ev.returnValue=false;
}else{
ev.preventDefault();
ev.stopPropagation();
}
};
Dialog.agt=navigator.userAgent.toLowerCase();
Dialog.is_ie=((Dialog.agt.indexOf("msie")!=-1)&&(Dialog.agt.indexOf("opera")==-1));

