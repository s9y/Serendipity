/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/assets/editor.js */
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
orginal_width=_6.width;
orginal_height=_6.height;
var w=document.getElementById("sw");
w.value=orginal_width;
var h=document.getElementById("sh");
h.value=orginal_height;
}
}
}
function toggleMarker(){
var _9=document.getElementById("markerImg");
if(_9!=null&&_9.src!=null){
if(_9.src.indexOf("t_black.gif")>=0){
_9.src="img/t_white.gif";
}else{
_9.src="img/t_black.gif";
}
editor.toggleMarker();
}
}
function toggleConstraints(){
var _a=document.getElementById("scaleConstImg");
var _b=document.getElementById("constProp");
if(_a!=null&&_a.src!=null){
if(_a.src.indexOf("unlocked2.gif")>=0){
_a.src="img/islocked2.gif";
_b.checked=true;
checkConstrains("width");
}else{
_a.src="img/unlocked2.gif";
_b.checked=false;
}
}
}
function checkConstrains(_c){
var _d=document.getElementById("constProp");
if(_d.checked){
var w=document.getElementById("sw");
var _f=w.value;
var h=document.getElementById("sh");
var _11=h.value;
if(orginal_width>0&&orginal_height>0){
if(_c=="width"&&_f>0){
h.value=parseInt((_f/orginal_width)*orginal_height);
}else{
if(_c=="height"&&_11>0){
w.value=parseInt((_11/orginal_height)*orginal_width);
}
}
}
}
updateMarker("scale");
}
function updateMarker(_12){
if(_12=="crop"){
var _13=document.getElementById("cx");
var _14=document.getElementById("cy");
var _15=document.getElementById("cw");
var _16=document.getElementById("ch");
editor.setMarker(parseInt(_13.value),parseInt(_14.value),parseInt(_15.value),parseInt(_16.value));
}else{
if(_12=="scale"){
var _17=document.getElementById("sw");
var _18=document.getElementById("sh");
editor.setMarker(0,0,parseInt(_17.value),parseInt(_18.value));
}
}
}
function rotatePreset(_19){
var _1a=_19.options[_19.selectedIndex].value;
if(_1a.length>0&&parseInt(_1a)!=0){
var ra=document.getElementById("ra");
ra.value=parseInt(_1a);
}
}
function updateFormat(_1c){
var _1d=_1c.options[_1c.selectedIndex].value;
var _1e=_1d.split(",");
if(_1e.length>1){
updateSlider(parseInt(_1e[1]));
}
}
function addEvent(obj,_20,fn){
if(obj.addEventListener){
obj.addEventListener(_20,fn,true);
return true;
}else{
if(obj.attachEvent){
var r=obj.attachEvent("on"+_20,fn);
return r;
}else{
return false;
}
}
}
init=function(){
var _23=document.getElementById("bottom");
if(window.opener){
__dlg_init(_23);
__dlg_translate("ImageManager");
}
};
addEvent(window,"load",init);

