/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/assets/images.js */
function i18n(_1){
return Xinha._lc(_1,"ImageManager");
}
function changeDir(_2){
showMessage("Loading");
location.href=_backend_url+"__function=images&dir="+encodeURIComponent(_2);
}
function newFolder(_3,_4){
location.href=_backend_url+"__function=images&dir="+encodeURIComponent(_3)+"&newDir="+encodeURIComponent(_4);
}
function updateDir(_5){
var _6=window.top.document.getElementById("dirPath");
if(_6){
for(var i=0;i<_6.length;i++){
var _8=_6.options[i].text;
if(_8==_5){
_6.selectedIndex=i;
showMessage("Loading");
break;
}
}
}
}
function selectImage(_9,_a,_b,_c){
var _d=window.top.document;
var _e=_d.getElementById("f_url");
_e.value=_9;
var _e=_d.getElementById("f_width");
_e.value=_b;
var _e=_d.getElementById("f_width");
_e.value=_b;
var _e=_d.getElementById("f_height");
_e.value=_c;
var _e=_d.getElementById("f_alt");
_e.value=_a;
var _e=_d.getElementById("orginal_width");
_e.value=_b;
var _e=_d.getElementById("orginal_height");
_e.value=_c;
_d.getElementById("f_preview").src=window.parent._backend_url+"__function=thumbs&img="+_9;
update_selected();
}
var _current_selected=null;
function update_selected(){
var _f=window.top.document;
if(_current_selected){
_current_selected.className=_current_selected.className.replace(/(^| )active( |$)/,"$1$2");
_current_selected=null;
}
var _10=_f.getElementById("f_url").value;
var _11=_f.getElementById("dirPath");
var _12=_11.options[_11.selectedIndex].text;
var dRe=new RegExp("^("+_12.replace(/([\/\^$*+?.()|{}[\]])/g,"\\$1")+")([^/]*)$");
if(dRe.test(_10)){
var _14=document.getElementById("holder_"+asc2hex(RegExp.$2));
if(_14){
_current_selected=_14;
_14.className+=" active";
}
}
}
function asc2hex(str){
var _16="";
for(var i=0;i<str.length;i++){
var hex=(str.charCodeAt(i)).toString(16);
if(hex.length==1){
hex="0"+hex;
}
_16+=hex;
}
return _16;
}
function showMessage(_19){
var _1a=window.top.document;
var _1b=_1a.getElementById("message");
var _1c=_1a.getElementById("messages");
if(_1b&&_1c){
if(_1b.firstChild){
_1b.removeChild(_1b.firstChild);
}
_1b.appendChild(_1a.createTextNode(i18n(_19)));
_1c.style.display="block";
}
}
function addEvent(obj,_1e,fn){
if(obj.addEventListener){
obj.addEventListener(_1e,fn,true);
return true;
}else{
if(obj.attachEvent){
var r=obj.attachEvent("on"+_1e,fn);
return r;
}else{
return false;
}
}
}
function confirmDeleteFile(_21){
if(confirm(i18n("Delete file?"))){
return true;
}
return false;
}
function confirmDeleteDir(dir,_23){
if(_23>0){
alert(i18n("Please delete all files/folders inside the folder you wish to delete first."));
return;
}
if(confirm(i18n("Delete folder?"))){
return true;
}
return false;
}
addEvent(window,"load",init);
Xinha=window.parent.Xinha;

