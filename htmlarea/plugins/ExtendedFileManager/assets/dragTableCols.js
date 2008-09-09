/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ExtendedFileManager/assets/dragTableCols.js */
function dragTableCols(id){
this.table=document.getElementById(id);
var _2=this.table.rows[0].cells;
this.ths=_2;
var _3=this;
var c;
for(var j=0;j<this.table.rows.length;j++){
for(var i=0;i<this.table.rows[j].cells.length;i++){
c=this.table.rows[j].cells[i];
c._i=i;
dragTableCols.addEvent(c,"mousemove",function(e){
_3.cellMouseMove(e);
});
dragTableCols.addEvent(c,"mouseover",function(e){
e=e?e:window.event;
var t=e.target||e.srcElement;
t._pos=dragTableCols.getElementTopLeft(t);
});
}
}
function deactivate(){
_3.drag=false;
_3._col=null;
document.body.style.cursor="";
}
dragTableCols.addEvent(document.body,"mousemove",function(e){
_3.bodyMouseMove(e);
});
dragTableCols.addEvent(document.body,"mouseup",deactivate);
}
dragTableCols.prototype.cellMouseMove=function(e){
e=e?e:window.event;
var t=e.target||e.srcElement;
if(typeof dragTableCols=="undefined"){
return;
}
if(!t._pos){
t._pos=dragTableCols.getElementTopLeft(t);
return;
}
if(t.tagName.toLowerCase()!="td"&&t.tagName.toLowerCase()!="th"){
return;
}
var _d=this;
function activate(e){
e=e?e:window.event;
_d.drag=true;
_d.startX=t._pos.left+t.offsetWidth;
_d._col=t;
var _f=t.offsetWidth;
_d.startWidth=(t.width)?parseInt(t.width,10):t.offsetWidth;
t.style.width=_d.startWidth+"px";
_d.offset=t.offsetWidth-_f;
t.style.width=_d.startWidth-_d.offset+"px";
}
if(t._pos.left+t.offsetWidth-dragTableCols.getPageX(e)<5&&t!=t.parentNode.cells[t.parentNode.cells.length-1]){
t.style.cursor="e-resize";
dragTableCols.addEvent(t,"mousedown",activate);
}else{
t.style.cursor="";
dragTableCols.removeEvent(t,"mousedown",activate);
}
};
dragTableCols.prototype.bodyMouseMove=function(e){
if(!this.drag){
return true;
}
e=e?e:window.event;
var _11=dragTableCols.getPageX(e);
var _12=_11-this.startX;
document.body.style.cursor=(_12<0)?"e-resize":"w-resize";
var _13=this.startWidth+_12-this.offset;
this._col.style.width=((_13>10)?_13:10)+"px";
return true;
};
dragTableCols.addEvent=function(obj,_15,fn){
if(obj.addEventListener){
obj.addEventListener(_15,fn,true);
}else{
if(obj.attachEvent){
obj.attachEvent("on"+_15,fn);
}else{
return false;
}
}
};
dragTableCols.removeEvent=function(obj,_18,fn){
if(obj.addEventListener){
obj.removeEventListener(_18,fn,true);
}else{
if(obj.detachEvent){
obj.detachEvent("on"+_18,fn);
}else{
return false;
}
}
};
dragTableCols.getElementTopLeft=function(_1a){
var _1b=curtop=0;
if(_1a.offsetParent){
_1b=_1a.offsetLeft;
curtop=_1a.offsetTop;
while(_1a=_1a.offsetParent){
_1b+=_1a.offsetLeft;
curtop+=_1a.offsetTop;
}
}
return {top:curtop,left:_1b};
};
dragTableCols.getPageX=function(e){
if(e.pageX){
return e.pageX;
}else{
if(document.documentElement&&document.documentElement.scrollTop){
return document.documentElement.scrollLeft+e.clientX;
}else{
if(document.body){
return document.body.scrollLeft+e.clientX;
}
}
}
};

