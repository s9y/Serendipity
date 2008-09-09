/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/assets/editorFrame.js */
var topDoc=window.top.document;
var t_cx=topDoc.getElementById("cx");
var t_cy=topDoc.getElementById("cy");
var t_cw=topDoc.getElementById("cw");
var t_ch=topDoc.getElementById("ch");
var m_sx=topDoc.getElementById("sx");
var m_sy=topDoc.getElementById("sy");
var m_w=topDoc.getElementById("mw");
var m_h=topDoc.getElementById("mh");
var m_a=topDoc.getElementById("ma");
var m_d=topDoc.getElementById("md");
var s_sw=topDoc.getElementById("sw");
var s_sh=topDoc.getElementById("sh");
var r_ra=topDoc.getElementById("ra");
var pattern="img/2x2.gif";
function doSubmit(_1){
if(_1=="crop"){
var _2=_backend_url+"__function=editorFrame&img="+currentImageFile+"&action=crop&params="+parseInt(t_cx.value)+","+parseInt(t_cy.value)+","+parseInt(t_cw.value)+","+parseInt(t_ch.value);
location.href=_2;
}else{
if(_1=="scale"){
var _2=_backend_url+"__function=editorFrame&img="+currentImageFile+"&action=scale&params="+parseInt(s_sw.value)+","+parseInt(s_sh.value);
location.href=_2;
}else{
if(_1=="rotate"){
var _3=topDoc.getElementById("flip");
if(_3.value=="hoz"||_3.value=="ver"){
location.href=_backend_url+"__function=editorFrame&img="+currentImageFile+"&action=flip&params="+_3.value;
}else{
if(isNaN(parseFloat(r_ra.value))==false){
location.href=_backend_url+"__function=editorFrame&img="+currentImageFile+"&action=rotate&params="+parseFloat(r_ra.value);
}
}
}else{
if(_1=="save"){
var _4=topDoc.getElementById("save_filename");
var _5=topDoc.getElementById("save_format");
var _6=topDoc.getElementById("quality");
var _7=_5.value.split(",");
if(_4.value.length<=0){
alert(i18n("Please enter a filename to save."));
}else{
var _8=encodeURI(_4.value);
var _9=parseInt(_6.value);
var _2=_backend_url+"__function=editorFrame&img="+currentImageFile+"&action=save&params="+_7[0]+","+_9+"&file="+_8;
location.href=_2;
}
}
}
}
}
}
function addEvent(_a,_b,fn){
if(_a.addEventListener){
_a.addEventListener(_b,fn,true);
return true;
}else{
if(_a.attachEvent){
var r=_a.attachEvent("on"+_b,fn);
return r;
}else{
return false;
}
}
}
var jg_doc;
init=function(){
jg_doc=new jsGraphics("imgCanvas");
jg_doc.setColor("#000000");
initEditor();
};
addEvent(window,"load",init);

