/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Linker/dTree/dtree.js */
function Node(id,_2,_3,_4,_5,_6,_7,_8,_9){
this.id=id;
this.pid=_2;
this.name=_3;
this.url=_4;
this.title=_5;
this.target=_6;
this.icon=_7;
this.iconOpen=_8;
this._io=_9||false;
this._is=false;
this._ls=false;
this._hc=false;
this._ai=0;
this._p;
}
function dTree(_a,_b){
this.config={target:null,folderLinks:true,useSelection:true,useCookies:true,useLines:true,useIcons:true,useStatusText:false,closeSameLevel:false,inOrder:false};
this.icon={root:_b+"img/base.gif",folder:_b+"img/folder.gif",folderOpen:_b+"img/folderopen.gif",node:_b+"img/page.gif",empty:_b+"img/empty.gif",line:_b+"img/line.gif",join:_b+"img/join.gif",joinBottom:_b+"img/joinbottom.gif",plus:_b+"img/plus.gif",plusBottom:_b+"img/plusbottom.gif",minus:_b+"img/minus.gif",minusBottom:_b+"img/minusbottom.gif",nlPlus:_b+"img/nolines_plus.gif",nlMinus:_b+"img/nolines_minus.gif"};
this.obj=_a;
this.aNodes=[];
this.aIndent=[];
this.root=new Node(-1);
this.selectedNode=null;
this.selectedFound=false;
this.completed=false;
}
dTree.prototype.add=function(id,_d,_e,_f,_10,_11,_12,_13,_14){
this.aNodes[this.aNodes.length]=new Node(id,_d,_e,_f,_10,_11,_12,_13,_14);
};
dTree.prototype.openAll=function(){
this.oAll(true);
};
dTree.prototype.closeAll=function(){
this.oAll(false);
};
dTree.prototype.toString=function(){
this.setCS_All();
var str="<div class=\"dtree\">\n";
if(document.getElementById){
if(this.config.useCookies){
this.selectedNode=this.getSelected();
}
str+=this.addNode(this.root);
}else{
str+="Browser not supported.";
}
str+="</div>";
if(!this.selectedFound){
this.selectedNode=null;
}
this.completed=true;
return str;
};
dTree.prototype.addNode=function(_16){
var str="";
var n=0;
if(this.config.inOrder){
n=_16._ai;
}
for(n;n<this.aNodes.length;n++){
if(this.aNodes[n].pid==_16.id){
var cn=this.aNodes[n];
cn._p=_16;
cn._ai=n;
if(!cn.target&&this.config.target){
cn.target=this.config.target;
}
if(cn._hc&&!cn._io&&this.config.useCookies){
cn._io=this.isOpen(cn.id);
}
if(!this.config.folderLinks&&cn._hc){
cn.url=null;
}
if(this.config.useSelection&&cn.id==this.selectedNode&&!this.selectedFound){
cn._is=true;
this.selectedNode=n;
this.selectedFound=true;
}
str+=this.node(cn,n);
if(cn._ls){
break;
}
}
}
return str;
};
dTree.prototype.node=function(_1a,_1b){
var str="<div class=\"dTreeNode\">"+this.indent(_1a,_1b);
if(this.config.useIcons){
if(!_1a.icon){
_1a.icon=(this.root.id==_1a.pid)?this.icon.root:((_1a._hc)?this.icon.folder:this.icon.node);
}
if(!_1a.iconOpen){
_1a.iconOpen=(_1a._hc)?this.icon.folderOpen:this.icon.node;
}
if(this.root.id==_1a.pid){
_1a.icon=this.icon.root;
_1a.iconOpen=this.icon.root;
}
str+="<img id=\"i"+this.obj+_1b+"\" src=\""+((_1a._io)?_1a.iconOpen:_1a.icon)+"\" alt=\"\" />";
}
if(_1a.url){
str+="<a id=\"s"+this.obj+_1b+"\" class=\""+((this.config.useSelection)?((_1a._is?"nodeSel":"node")):"node")+"\" href=\""+_1a.url+"\"";
if(_1a.title){
str+=" title=\""+_1a.title+"\"";
}
if(_1a.target){
str+=" target=\""+_1a.target+"\"";
}
if(this.config.useStatusText){
str+=" onmouseover=\"window.status='"+_1a.name+"';return true;\" onmouseout=\"window.status='';return true;\" ";
}
if(this.config.useSelection&&((_1a._hc&&this.config.folderLinks)||!_1a._hc)){
str+=" onclick=\"javascript: "+this.obj+".s("+_1b+");\"";
}
str+=">";
}else{
if((!this.config.folderLinks||!_1a.url)&&_1a._hc&&_1a.pid!=this.root.id){
str+="<a href=\"javascript: "+this.obj+".o("+_1b+");\" class=\"node\">";
}
}
str+=_1a.name;
if(_1a.url||((!this.config.folderLinks||!_1a.url)&&_1a._hc)){
str+="</a>";
}
str+="</div>";
if(_1a._hc){
str+="<div id=\"d"+this.obj+_1b+"\" class=\"clip\" style=\"display:"+((this.root.id==_1a.pid||_1a._io)?"block":"none")+";\">";
str+=this.addNode(_1a);
str+="</div>";
}
this.aIndent.pop();
return str;
};
dTree.prototype.indent=function(_1d,_1e){
var str="";
if(this.root.id!=_1d.pid){
for(var n=0;n<this.aIndent.length;n++){
str+="<img src=\""+((this.aIndent[n]==1&&this.config.useLines)?this.icon.line:this.icon.empty)+"\" alt=\"\" />";
}
(_1d._ls)?this.aIndent.push(0):this.aIndent.push(1);
if(_1d._hc){
str+="<a href=\"javascript: "+this.obj+".o("+_1e+");\"><img id=\"j"+this.obj+_1e+"\" src=\"";
if(!this.config.useLines){
str+=(_1d._io)?this.icon.nlMinus:this.icon.nlPlus;
}else{
str+=((_1d._io)?((_1d._ls&&this.config.useLines)?this.icon.minusBottom:this.icon.minus):((_1d._ls&&this.config.useLines)?this.icon.plusBottom:this.icon.plus));
}
str+="\" alt=\"\" /></a>";
}else{
str+="<img src=\""+((this.config.useLines)?((_1d._ls)?this.icon.joinBottom:this.icon.join):this.icon.empty)+"\" alt=\"\" />";
}
}
return str;
};
dTree.prototype.setCS=function(_21){
var _22;
for(var n=0;n<this.aNodes.length;n++){
if(this.aNodes[n].pid==_21.id){
_21._hc=true;
}
if(this.aNodes[n].pid==_21.pid){
_22=this.aNodes[n].id;
}
}
if(_22==_21.id){
_21._ls=true;
}
};
dTree.prototype.setCS_All=function(){
var ids={};
for(var n=0;n<this.aNodes.length;n++){
var _26=this.aNodes[n];
if(!ids[_26.pid]){
ids[_26.pid]={_hc:true,_ls_is:_26.id};
}else{
ids[_26.pid]._hc=true;
ids[_26.pid]._ls_is=_26.id;
}
if(!ids[_26.id]){
ids[_26.id]={_hc:false,_ls_is:null};
}
}
for(var n=0;n<this.aNodes.length;n++){
var _26=this.aNodes[n];
_26._ls=ids[_26.pid]._ls_is==_26.id?true:false;
_26._hc=ids[_26.id]._hc;
}
};
dTree.prototype.getSelected=function(){
var sn=this.getCookie("cs"+this.obj);
return (sn)?sn:null;
};
dTree.prototype.s=function(id){
if(!this.config.useSelection){
return;
}
var cn=this.aNodes[id];
if(cn._hc&&!this.config.folderLinks){
return;
}
if(this.selectedNode!=id){
if(this.selectedNode||this.selectedNode==0){
eOld=document.getElementById("s"+this.obj+this.selectedNode);
eOld.className="node";
}
eNew=document.getElementById("s"+this.obj+id);
eNew.className="nodeSel";
this.selectedNode=id;
if(this.config.useCookies){
this.setCookie("cs"+this.obj,cn.id);
}
}
};
dTree.prototype.o=function(id){
var cn=this.aNodes[id];
this.nodeStatus(!cn._io,id,cn._ls);
cn._io=!cn._io;
if(this.config.closeSameLevel){
this.closeLevel(cn);
}
if(this.config.useCookies){
this.updateCookie();
}
};
dTree.prototype.oAll=function(_2c){
for(var n=0;n<this.aNodes.length;n++){
if(this.aNodes[n]._hc&&this.aNodes[n].pid!=this.root.id){
this.nodeStatus(_2c,n,this.aNodes[n]._ls);
this.aNodes[n]._io=_2c;
}
}
if(this.config.useCookies){
this.updateCookie();
}
};
dTree.prototype.openTo=function(nId,_2f,_30){
if(!_30){
for(var n=0;n<this.aNodes.length;n++){
if(this.aNodes[n].id==nId){
nId=n;
break;
}
}
}
var cn=this.aNodes[nId];
if(cn.pid==this.root.id||!cn._p){
return;
}
cn._io=true;
cn._is=_2f;
if(this.completed&&cn._hc){
this.nodeStatus(true,cn._ai,cn._ls);
}
if(this.completed&&_2f){
this.s(cn._ai);
}else{
if(_2f){
this._sn=cn._ai;
}
}
this.openTo(cn._p._ai,false,true);
};
dTree.prototype.closeLevel=function(_33){
for(var n=0;n<this.aNodes.length;n++){
if(this.aNodes[n].pid==_33.pid&&this.aNodes[n].id!=_33.id&&this.aNodes[n]._hc){
this.nodeStatus(false,n,this.aNodes[n]._ls);
this.aNodes[n]._io=false;
this.closeAllChildren(this.aNodes[n]);
}
}
};
dTree.prototype.closeAllChildren=function(_35){
for(var n=0;n<this.aNodes.length;n++){
if(this.aNodes[n].pid==_35.id&&this.aNodes[n]._hc){
if(this.aNodes[n]._io){
this.nodeStatus(false,n,this.aNodes[n]._ls);
}
this.aNodes[n]._io=false;
this.closeAllChildren(this.aNodes[n]);
}
}
};
dTree.prototype.nodeStatus=function(_37,id,_39){
eDiv=document.getElementById("d"+this.obj+id);
eJoin=document.getElementById("j"+this.obj+id);
if(this.config.useIcons){
eIcon=document.getElementById("i"+this.obj+id);
eIcon.src=(_37)?this.aNodes[id].iconOpen:this.aNodes[id].icon;
}
eJoin.src=(this.config.useLines)?((_37)?((_39)?this.icon.minusBottom:this.icon.minus):((_39)?this.icon.plusBottom:this.icon.plus)):((_37)?this.icon.nlMinus:this.icon.nlPlus);
eDiv.style.display=(_37)?"block":"none";
};
dTree.prototype.clearCookie=function(){
var now=new Date();
var _3b=new Date(now.getTime()-1000*60*60*24);
this.setCookie("co"+this.obj,"cookieValue",_3b);
this.setCookie("cs"+this.obj,"cookieValue",_3b);
};
dTree.prototype.setCookie=function(_3c,_3d,_3e,_3f,_40,_41){
document.cookie=escape(_3c)+"="+escape(_3d)+(_3e?"; expires="+_3e.toGMTString():"")+(_3f?"; path="+_3f:"")+(_40?"; domain="+_40:"")+(_41?"; secure":"");
};
dTree.prototype.getCookie=function(_42){
var _43="";
var _44=document.cookie.indexOf(escape(_42)+"=");
if(_44!=-1){
var _45=_44+(escape(_42)+"=").length;
var _46=document.cookie.indexOf(";",_45);
if(_46!=-1){
_43=unescape(document.cookie.substring(_45,_46));
}else{
_43=unescape(document.cookie.substring(_45));
}
}
return (_43);
};
dTree.prototype.updateCookie=function(){
var str="";
for(var n=0;n<this.aNodes.length;n++){
if(this.aNodes[n]._io&&this.aNodes[n].pid!=this.root.id){
if(str){
str+=".";
}
str+=this.aNodes[n].id;
}
}
this.setCookie("co"+this.obj,str);
};
dTree.prototype.isOpen=function(id){
var _4a=this.getCookie("co"+this.obj).split(".");
for(var n=0;n<_4a.length;n++){
if(_4a[n]==id){
return true;
}
}
return false;
};
if(!Array.prototype.push){
Array.prototype.push=function array_push(){
for(var i=0;i<arguments.length;i++){
this[this.length]=arguments[i];
}
return this.length;
};
}
if(!Array.prototype.pop){
Array.prototype.pop=function array_pop(){
lastElement=this[this.length-1];
this.length=Math.max(this.length-1,0);
return lastElement;
};
}

