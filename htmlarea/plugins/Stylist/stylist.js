/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Stylist/stylist.js */
Xinha.Config.prototype.css_style={};
Xinha.Config.prototype.stylistLoadStylesheet=function(_1,_2){
if(!_2){
_2={};
}
var _3=Xinha.ripStylesFromCSSFile(_1);
for(var i in _3){
if(_2[i]){
this.css_style[i]=_2[i];
}else{
this.css_style[i]=_3[i];
}
}
this.pageStyleSheets[this.pageStyleSheets.length]=_1;
};
Xinha.Config.prototype.stylistLoadStyles=function(_5,_6){
if(!_6){
_6={};
}
var _7=Xinha.ripStylesFromCSSString(_5);
for(var i in _7){
if(_6[i]){
this.css_style[i]=_6[i];
}else{
this.css_style[i]=_7[i];
}
}
this.pageStyle+=_5;
};
Xinha.prototype._fillStylist=function(){
if(!this._stylist){
return false;
}
this.plugins.Stylist.instance.main.innerHTML="";
var _9=true;
var _a=this._getSelection();
var _b=this._activeElement(_a);
for(var x in this.config.css_style){
var _d=null;
var _e=x.trim();
var _f=true;
var _10=_b;
if(_f&&/[^a-zA-Z0-9_.-]/.test(_e)){
_f=false;
}
if(_e.indexOf(".")<0){
_f=false;
}
if(_f&&(_e.indexOf(".")>0)){
_d=_e.substring(0,_e.indexOf(".")).toLowerCase();
_e=_e.substring(_e.indexOf("."),_e.length);
if(_b!=null&&_b.tagName.toLowerCase()==_d){
_f=true;
_10=_b;
}else{
if(this._getFirstAncestor(this._getSelection(),[_d])!=null){
_f=true;
_10=this._getFirstAncestor(this._getSelection(),[_d]);
}else{
if((_d=="div"||_d=="span"||_d=="p"||(_d.substr(0,1)=="h"&&_d.length==2&&_d!="hr"))){
if(!this._selectionEmpty(this._getSelection())){
_f=true;
_10="new";
}else{
_10=this._getFirstAncestor(_a,["p","h1","h2","h3","h4","h5","h6","h7"]);
if(_10!=null){
_f=true;
}else{
_f=false;
}
}
}else{
_f=false;
}
}
}
}
if(_f){
_e=_e.substring(_e.indexOf("."),_e.length);
_e=_e.replace("."," ");
if(_10==null){
if(this._selectionEmpty(this._getSelection())){
_10=this._getFirstAncestor(this._getSelection(),null);
}else{
_10="new";
_d="span";
}
}
}
var _11=(this._ancestorsWithClasses(_a,_d,_e).length>0?true:false);
var _12=this._ancestorsWithClasses(_a,_d,_e);
if(_f){
var _13=document.createElement("a");
if(Xinha.is_real_gecko){
_13.onfocus=function(){
this.blur();
};
}
_13._stylist_className=_e.trim();
_13._stylist_applied=_11;
_13._stylist_appliedTo=_12;
_13._stylist_applyTo=_10;
_13._stylist_applyTag=_d;
_13.innerHTML=this.config.css_style[x];
_13.href="javascript:void(0)";
var _14=this;
_13.onclick=function(){
if(this._stylist_applied==true){
_14._stylistRemoveClasses(this._stylist_className,this._stylist_appliedTo);
}else{
_14._stylistAddClasses(this._stylist_applyTo,this._stylist_applyTag,this._stylist_className);
}
return false;
};
_13.style.display="block";
_13.style.paddingLeft="3px";
_13.style.paddingTop="1px";
_13.style.paddingBottom="1px";
_13.style.textDecoration="none";
if(_11){
_13.style.background="Highlight";
_13.style.color="HighlightText";
}
this.plugins.Stylist.instance.main.appendChild(_13);
}
}
};
Xinha.prototype._stylistAddClasses=function(el,tag,_17){
if(el=="new"){
this.insertHTML("<"+tag+" class=\""+_17+"\">"+this.getSelectedHTML()+"</"+tag+">");
}else{
if(tag!=null&&el.tagName.toLowerCase()!=tag){
var _18=this.switchElementTag(el,tag);
if(typeof el._stylist_usedToBe!="undefined"){
_18._stylist_usedToBe=el._stylist_usedToBe;
_18._stylist_usedToBe[_18._stylist_usedToBe.length]={"tagName":el.tagName,"className":el.getAttribute("class")};
}else{
_18._stylist_usedToBe=[{"tagName":el.tagName,"className":el.getAttribute("class")}];
}
Xinha.addClasses(_18,_17);
}else{
Xinha._addClasses(el,_17);
}
}
this.focusEditor();
this.updateToolbar();
};
Xinha.prototype._stylistRemoveClasses=function(_19,_1a){
for(var x=0;x<_1a.length;x++){
this._stylistRemoveClassesFull(_1a[x],_19);
}
this.focusEditor();
this.updateToolbar();
};
Xinha.prototype._stylistRemoveClassesFull=function(el,_1d){
if(el!=null){
var _1e=el.className.trim().split(" ");
var _1f=[];
var _20=_1d.split(" ");
for(var x=0;x<_1e.length;x++){
var _22=false;
for(var i=0;_22==false&&i<_20.length;i++){
if(_20[i]==_1e[x]){
_22=true;
}
}
if(_22==false){
_1f[_1f.length]=_1e[x];
}
}
if(_1f.length==0&&el._stylist_usedToBe&&el._stylist_usedToBe.length>0&&el._stylist_usedToBe[el._stylist_usedToBe.length-1].className!=null){
var _24=el._stylist_usedToBe[el._stylist_usedToBe.length-1];
var _25=Xinha.arrayFilter(_24.className.trim().split(" "),function(c){
if(c==null||c.trim()==""){
return false;
}
return true;
});
if((_1f.length==0)||(Xinha.arrayContainsArray(_1f,_25)&&Xinha.arrayContainsArray(_25,_1f))){
el=this.switchElementTag(el,_24.tagName);
_1f=_25;
}else{
el._stylist_usedToBe=[];
}
}
if(_1f.length>0||el.tagName.toLowerCase()!="span"||(el.id&&el.id!="")){
el.className=_1f.join(" ").trim();
}else{
var _27=el.parentNode;
var _28=el.childNodes;
for(var x=0;x<_28.length;x++){
_27.insertBefore(_28[x],el);
}
_27.removeChild(el);
}
}
};
Xinha.prototype.switchElementTag=function(el,tag){
var _2b=el.parentNode;
var _2c=this._doc.createElement(tag);
if(Xinha.is_ie||el.hasAttribute("id")){
_2c.setAttribute("id",el.getAttribute("id"));
}
if(Xinha.is_ie||el.hasAttribute("style")){
_2c.setAttribute("style",el.getAttribute("style"));
}
var _2d=el.childNodes;
for(var x=0;x<_2d.length;x++){
_2c.appendChild(_2d[x].cloneNode(true));
}
_2b.insertBefore(_2c,el);
_2c._stylist_usedToBe=[el.tagName];
_2b.removeChild(el);
this.selectNodeContents(_2c);
return _2c;
};
Xinha.prototype._getAncestorsClassNames=function(sel){
var _30=this._activeElement(sel);
if(_30==null){
_30=(Xinha.is_ie?this._createRange(sel).parentElement():this._createRange(sel).commonAncestorContainer);
}
var _31=[];
while(_30){
if(_30.nodeType==1){
var _32=_30.className.trim().split(" ");
for(var x=0;x<_32.length;x++){
_31[_31.length]=_32[x];
}
if(_30.tagName.toLowerCase()=="body"){
break;
}
if(_30.tagName.toLowerCase()=="table"){
break;
}
}
_30=_30.parentNode;
}
return _31;
};
Xinha.prototype._ancestorsWithClasses=function(sel,tag,_36){
var _37=[];
var _38=this._activeElement(sel);
if(_38==null){
try{
_38=(Xinha.is_ie?this._createRange(sel).parentElement():this._createRange(sel).commonAncestorContainer);
}
catch(e){
return _37;
}
}
var _39=_36.trim().split(" ");
while(_38){
if(_38.nodeType==1&&_38.className){
if(tag==null||_38.tagName.toLowerCase()==tag){
var _36=_38.className.trim().split(" ");
var _3a=true;
for(var i=0;i<_39.length;i++){
var _3c=false;
for(var x=0;x<_36.length;x++){
if(_39[i]==_36[x]){
_3c=true;
break;
}
}
if(!_3c){
_3a=false;
break;
}
}
if(_3a){
_37[_37.length]=_38;
}
}
if(_38.tagName.toLowerCase()=="body"){
break;
}
if(_38.tagName.toLowerCase()=="table"){
break;
}
}
_38=_38.parentNode;
}
return _37;
};
Xinha.ripStylesFromCSSFile=function(URL){
var css=Xinha._geturlcontent(URL);
return Xinha.ripStylesFromCSSString(css);
};
Xinha.ripStylesFromCSSString=function(css){
RE_comment=/\/\*(.|\r|\n)*?\*\//g;
RE_rule=/\{(.|\r|\n)*?\}/g;
css=css.replace(RE_comment,"");
css=css.replace(RE_rule,",");
css=css.split(",");
var _41={};
for(var x=0;x<css.length;x++){
if(css[x].trim()){
_41[css[x].trim()]=css[x].trim();
}
}
return _41;
};
function Stylist(_43,_44){
this.editor=_43;
var _45=this;
}
Stylist._pluginInfo={name:"Stylist",version:"1.0",developer:"James Sleeman",developer_url:"http://www.gogo.co.nz/",c_owner:"Gogo Internet Services",license:"HTMLArea",sponsor:"Gogo Internet Services",sponsor_url:"http://www.gogo.co.nz/"};
Stylist.prototype.onGenerateOnce=function(){
var _46=this.editor;
var _47=this;
if(typeof _46.config.css_style!="undefined"&&Xinha.objectProperties(_46.config.css_style).length!=0){
_46._stylist=null;
_46._stylist=_46.addPanel("right");
Xinha.addClass(_46._stylist,"stylist");
this.caption=document.createElement("h1");
this.caption.innerHTML=Xinha._lc("Styles","Stylist");
_46._stylist.appendChild(this.caption);
this.main=document.createElement("div");
this.main.style.overflow="auto";
this.main.style.height=this.editor._framework.ed_cell.offsetHeight-this.caption.offsetHeight+"px";
_46._stylist.appendChild(this.main);
Xinha.freeLater(this,"caption");
Xinha.freeLater(this,"main");
_46.notifyOn("modechange",function(e,_49){
switch(_49.mode){
case "text":
_46.hidePanel(_46._stylist);
break;
case "wysiwyg":
_46.showPanel(_46._stylist);
break;
}
});
_46.notifyOn("panel_change",function(e,_4b){
switch(_4b.action){
case "show":
var _4c=_47.main.offsetHeight-_4b.panel.offsetHeight;
_47.main.style.height=((_4c>0)?_47.main.offsetHeight-_4b.panel.offsetHeight:0)+"px";
_46._stylist.style.height=_47.caption.offsetHeight+"px";
_46.sizeEditor();
break;
case "hide":
_47.resize();
break;
}
});
_46.notifyOn("before_resize",function(){
_46._stylist.style.height=_47.caption.offsetHeight+"px";
});
_46.notifyOn("resize",function(){
_47.resize();
});
}
};
Stylist.prototype.resize=function(){
var _4d=this.editor;
var _4e=_4d._stylist.parentNode;
var _4f=_4e.offsetHeight;
for(var i=0;i<_4e.childNodes.length;++i){
if(_4e.childNodes[i]==_4d._stylist||!_4e.childNodes[i].offsetHeight){
continue;
}
_4f-=_4e.childNodes[i].offsetHeight;
}
_4d._stylist.style.height=_4f+"px";
this.main.style.height=_4f-this.caption.offsetHeight+"px";
};
Stylist.prototype.onUpdateToolbar=function(){
if(this.editor._stylist){
if(this._timeoutID){
window.clearTimeout(this._timeoutID);
}
var e=this.editor;
this._timeoutID=window.setTimeout(function(){
e._fillStylist();
},250);
}
};

