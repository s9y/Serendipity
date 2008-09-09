/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/assets/manager.js */
function i18n(_1){
return Xinha._lc(_1,"ImageManager");
}
function setAlign(_2){
var _3=document.getElementById("f_align");
for(var i=0;i<_3.length;i++){
if(_3.options[i].value==_2){
_3.selectedIndex=i;
break;
}
}
}
doneinit=0;
init=function(){
if(doneinit++){
return;
}
__dlg_init(null,{width:600,height:460});
__dlg_translate("ImageManager");
document.getElementById("f_align").selectedIndex=1;
document.getElementById("f_align").selectedIndex=0;
var _5=document.getElementById("uploadForm");
if(_5){
_5.target="imgManager";
}
var _6=window.dialogArguments;
if(_6){
var _7=new RegExp("(https?://[^/]*)?"+base_url.replace(/\/$/,""));
_6.f_url=_6.f_url.replace(_7,"");
var rd=(_resized_dir)?_resized_dir.replace(Xinha.RE_Specials,"\\$1")+"/":"";
var rp=_resized_prefix.replace(Xinha.RE_Specials,"\\$1");
var _a=new RegExp("^(.*/)"+rd+rp+"_([0-9]+)x([0-9]+)_([^/]+)$");
if(_a.test(_6.f_url)){
_6.f_url=RegExp.$1+RegExp.$4;
_6.f_width=RegExp.$2;
_6.f_height=RegExp.$3;
}
for(var id in _6){
if(id=="f_align"){
continue;
}
if(document.getElementById(id)){
document.getElementById(id).value=_6[id];
}
}
document.getElementById("orginal_width").value=_6["f_width"];
document.getElementById("orginal_height").value=_6["f_height"];
setAlign(_6["f_align"]);
var _a=new RegExp("^(.*/)([^/]+)$");
if(_a.test(_6["f_url"])&&!(new RegExp("^https?://","i")).test(_6["f_url"])){
changeDir(RegExp.$1);
var _c=document.getElementById("dirPath");
for(var i=0;i<_c.options.length;i++){
if(_c.options[i].value==encodeURIComponent(RegExp.$1)){
_c.options[i].selected=true;
break;
}
}
}
document.getElementById("f_preview").src=_backend_url+"__function=thumbs&img="+_6.f_url;
}
new Xinha.colorPicker.InputBinding(document.getElementById("f_backgroundColor"));
new Xinha.colorPicker.InputBinding(document.getElementById("f_borderColor"));
document.getElementById("f_alt").focus();
};
function onCancel(){
__dlg_close(null);
return false;
}
function onOK(){
var _e=["f_url","f_alt","f_align","f_width","f_height","f_padding","f_margin","f_border","f_borderColor","f_backgroundColor"];
var _f=new Object();
for(var i in _e){
var id=_e[i];
var el=document.getElementById(id);
if(id=="f_url"&&el.value.indexOf("://")<0){
if(el.value==""){
alert(i18n("No Image selected."));
return (false);
}
_f[id]=makeURL(base_url,el.value);
}else{
if(el){
_f[id]=el.value;
}else{
alert("Missing "+_e[i]);
}
}
}
var _13={w:document.getElementById("orginal_width").value,h:document.getElementById("orginal_height").value};
if((_13.w!=_f.f_width)||(_13.h!=_f.f_height)){
var _14=Xinha._geturlcontent(_backend_url+"&__function=resizer&img="+encodeURIComponent(document.getElementById("f_url").value)+"&width="+_f.f_width+"&height="+_f.f_height);
_14=eval(_14);
if(_14){
_f.f_url=makeURL(base_url,_14);
}
}
__dlg_close(_f);
return false;
}
function makeURL(_15,_16){
if(_15.substring(_15.length-1)!="/"){
_15+="/";
}
if(_16.charAt(0)=="/"){
}
_16=_16.substring(1);
return _15+_16;
}
function updateDir(_17){
var _18=_17.options[_17.selectedIndex].value;
changeDir(_18);
}
function goUpDir(){
var _19=document.getElementById("dirPath");
var _1a=_19.options[_19.selectedIndex].text;
if(_1a.length<2){
return false;
}
var _1b=_1a.split("/");
var _1c="";
for(var i=0;i<_1b.length-2;i++){
_1c+=_1b[i]+"/";
}
for(var i=0;i<_19.length;i++){
var _1e=_19.options[i].text;
if(_1e==_1c){
_19.selectedIndex=i;
var _1f=_19.options[i].value;
changeDir(_1f);
break;
}
}
}
function changeDir(_20){
if(typeof imgManager!="undefined"){
imgManager.changeDir(_20);
}
}
function toggleConstrains(_21){
var _22=document.getElementById("imgLock");
var _21=document.getElementById("constrain_prop");
if(_21.checked){
_22.src="img/locked.gif";
checkConstrains("width");
}else{
_22.src="img/unlocked.gif";
}
}
function checkConstrains(_23){
var _24=document.getElementById("constrain_prop");
if(_24.checked){
var obj=document.getElementById("orginal_width");
var _26=parseInt(obj.value);
var obj=document.getElementById("orginal_height");
var _27=parseInt(obj.value);
var _28=document.getElementById("f_width");
var _29=document.getElementById("f_height");
var _2a=parseInt(_28.value);
var _2b=parseInt(_29.value);
if(_26>0&&_27>0){
if(_23=="width"&&_2a>0){
_29.value=parseInt((_2a/_26)*_27);
}
if(_23=="height"&&_2b>0){
_28.value=parseInt((_2b/_27)*_26);
}
}
}
}
function showMessage(_2c){
var _2d=document.getElementById("message");
var _2e=document.getElementById("messages");
if(_2d.firstChild){
_2d.removeChild(_2d.firstChild);
}
_2d.appendChild(document.createTextNode(i18n(_2c)));
_2e.style.display="";
}
function addEvent(obj,_30,fn){
if(obj.addEventListener){
obj.addEventListener(_30,fn,true);
return true;
}else{
if(obj.attachEvent){
var r=obj.attachEvent("on"+_30,fn);
return r;
}else{
return false;
}
}
}
function doUpload(){
var _33=document.getElementById("uploadForm");
if(_33){
showMessage("Uploading");
}
}
function refresh(){
var _34=document.getElementById("dirPath");
updateDir(_34);
}
function newFolder(){
function createFolder(_35){
var _36=document.getElementById("dirPath");
var dir=_36.options[_36.selectedIndex].value;
if(_35==thumbdir){
alert(i18n("Invalid folder name, please choose another folder name."));
return false;
}
if(_35&&_35!=""&&typeof imgManager!="undefined"){
imgManager.newFolder(dir,encodeURI(_35));
}
}
if(Xinha.ie_version>6){
Dialog("newFolder.html",function(_38){
if(!_38){
return false;
}else{
var _39=_38["f_foldername"];
createFolder(_39);
}
},null);
}else{
var _3a=prompt(i18n("Please enter name for new folder..."),i18n("Untitled"));
createFolder(_3a);
}
}
addEvent(window,"load",init);

