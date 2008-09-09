/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/assets/slider.js */
var ie=document.all;
var ns6=document.getElementById&&!document.all;
document.onmouseup=captureStop;
var currentSlider=null,sliderField=null;
var rangeMin=null,rangeMax=null,sx=-1,sy=-1,initX=0;
function getMouseXY(e){
x=ns6?e.clientX:event.clientX;
y=ns6?e.clientY:event.clientY;
if(sx<0){
sx=x;
}
if(sy<0){
sy=y;
}
var dx=initX+(x-sx);
if(dx<=rangeMin){
dx=rangeMin;
}else{
if(dx>=rangeMax){
dx=rangeMax;
}
}
var _3=(dx-rangeMin)/(rangeMax-rangeMin)*100;
if(currentSlider!=null){
currentSlider.style.left=dx+"px";
}
if(sliderField!=null){
sliderField.value=parseInt(_3);
}
return false;
}
function initSlider(){
if(currentSlider==null){
currentSlider=document.getElementById("sliderbar");
}
if(sliderField==null){
sliderField=document.getElementById("quality");
}
if(rangeMin==null){
rangeMin=3;
}
if(rangeMax==null){
var _4=document.getElementById("slidertrack");
rangeMax=parseInt(_4.style.width);
}
}
function updateSlider(_5){
initSlider();
var _6=parseInt(_5)/100*(rangeMax-rangeMin);
if(_6<=rangeMin){
_6=rangeMin;
}else{
if(_6>=rangeMax){
_6=rangeMax;
}
}
if(currentSlider!=null){
currentSlider.style.left=_6+"px";
}
var _7=_6/(rangeMax-rangeMin)*100;
if(sliderField!=null){
sliderField.value=parseInt(_7);
}
}
function captureStart(){
initSlider();
initX=parseInt(currentSlider.style.left);
if(initX>rangeMax){
initX=rangeMax;
}else{
if(initX<rangeMin){
initX=rangeMin;
}
}
document.onmousemove=getMouseXY;
return false;
}
function captureStop(){
sx=-1;
sy=-1;
document.onmousemove=null;
return false;
}

