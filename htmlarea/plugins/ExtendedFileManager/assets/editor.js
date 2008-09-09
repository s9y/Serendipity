/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ExtendedFileManager/assets/editor.js */
var current_action=null;
var actions=["crop","scale","rotate","measure","save"];
var orginal_width=null,orginal_height=null;
function toggle(_1){
if(current_action!=_1){
for(var i in actions){
if(actions[i]!=_1){
var _3=document.getElementById("tools_"+actions[i]);
_3.style.display="none";
var _4=document.getElementById("icon_"+actions[i]);
_4.className="";
}
}
current_action=_1;
var _3=document.getElementById("tools_"+_1);
_3.style.display="block";
var _4=document.getElementById("icon_"+_1);
_4.className="iconActive";
var _5=document.getElementById("indicator_image");
_5.src="img/"+_1+".gif";
editor.setMode(current_action);
if(_1=="scale"){
var _6=editor.window.document.getElementById("theImage");
orginal_width=_6._width;
orginal_height=_6._height;
var w=document.getElementById("sw");
w.value=orginal_width;
var h=document.getElementById("sh");
h.value=orginal_height;
}
if(_1=="save"){
var _9=document.getElementById("save_format");
var _a=document.getElementById("save_filename").value.match(/\.(gif|png|jpe?g)/i)[1].toLowerCase();
switch(_a){
case "png":
_9.selectedIndex="3";
break;
case "gif":
_9.selectedIndex="4";
break;
default:
_9.selectedIndex="0";
break;
}
_9.onchange();
}
}
}
function toggleMarker(){
var _b=document.getElementById("markerImg");
if(_b!=null&&_b.src!=null){
if(_b.src.indexOf("t_black.gif")>=0){
_b.src="img/t_white.gif";
}else{
_b.src="img/t_black.gif";
}
editor.toggleMarker();
}
}
function toggleConstraints(){
var _c=document.getElementById("scaleConstImg");
var _d=document.getElementById("constProp");
if(_c!=null&&_c.src!=null){
if(_c.src.indexOf("unlocked2.gif")>=0){
_c.src="img/islocked2.gif";
_d.checked=true;
checkConstrains("width");
}else{
_c.src="img/unlocked2.gif";
_d.checked=false;
}
}
}
function checkConstrains(_e){
var _f=document.getElementById("constProp");
if(_f.checked){
var w=document.getElementById("sw");
var _11=w.value;
var h=document.getElementById("sh");
var _13=h.value;
if(orginal_width>0&&orginal_height>0){
if(_e=="width"&&_11>0){
h.value=parseInt((_11/orginal_width)*orginal_height);
}else{
if(_e=="height"&&_13>0){
w.value=parseInt((_13/orginal_height)*orginal_width);
}
}
}
}
updateMarker("scale");
}
function updateMarker(_14){
if(_14=="crop"){
var _15=document.getElementById("cx");
var _16=document.getElementById("cy");
var _17=document.getElementById("cw");
var _18=document.getElementById("ch");
editor.setMarker(parseInt(_15.value),parseInt(_16.value),parseInt(_17.value),parseInt(_18.value));
}else{
if(_14=="scale"){
var _19=document.getElementById("sw");
var _1a=document.getElementById("sh");
editor.setMarker(0,0,parseInt(_19.value),parseInt(_1a.value));
}
}
}
function rotateSubActionSelect(_1b){
var _1c=_1b.options[_1b.selectedIndex].value;
var _1d=document.getElementById("rotate_preset_select");
var _1e=document.getElementById("flip");
var _1f=document.getElementById("ra").parentNode;
switch(_1c){
case "rotate":
_1d.style.display="";
_1e.style.display="none";
_1f.style.display="";
break;
case "flip":
_1d.style.display="none";
_1e.style.display="";
_1f.style.display="none";
break;
}
}
function rotatePreset(_20){
var _21=_20.options[_20.selectedIndex].value;
if(_21.length>0&&parseInt(_21)!=0){
var ra=document.getElementById("ra");
ra.value=parseInt(_21);
}
}
function updateFormat(_23){
var _24=_23.options[_23.selectedIndex].value;
var _25=_24.split(",");
if(_25[0]!="jpeg"){
document.getElementById("slider").style.display="none";
}else{
document.getElementById("slider").style.display="inline";
}
if(_25.length>1){
updateSlider(parseInt(_25[1]));
}
}
function zoom(){
var _26=editor.window.document.getElementById("theImage");
var _27=document.getElementById("zoom").value;
_26.width=_26._width*parseInt(_27,10)/100;
_26.height=_26._height*parseInt(_27,10)/100;
editor.reset();
editor.pic_width=null;
editor.pic_height=null;
}
function addEvent(obj,_29,fn){
if(obj.addEventListener){
obj.addEventListener(_29,fn,true);
return true;
}else{
if(obj.attachEvent){
var r=obj.attachEvent("on"+_29,fn);
return r;
}else{
return false;
}
}
}
var init=function(){
if(window.opener){
__xinha_dlg_init();
__dlg_translate("ExtendedFileManager");
}
addEvent(window,"resize",winOnResize);
try{
window.moveTo(0,0);
}
catch(e){
}
window.resizeTo(window.screen.availWidth,window.screen.availHeight);
winOnResize();
};
function winOnResize(){
if(typeof editor.reset=="function"&&typeof editor.ant!="undefined"){
editor.reset();
}
var win=Xinha.viewportSize(window);
document.getElementById("contents").style.height=win.y-parseInt(document.getElementById("indicator").offsetHeight,10)-5+"px";
}
Xinha.addOnloadHandler(init,window);

