/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/HorizontalRule/horizontal-rule.js */
HorizontalRule._pluginInfo={name:"HorizontalRule",version:"1.0",developer:"Nelson Bright",developer_url:"http://www.brightworkweb.com/",c_owner:"Nelson Bright",sponsor:"BrightWork, Inc.",sponsor_url:"http://www.brightworkweb.com/",license:"htmlArea"};
function HorizontalRule(_1){
this.editor=_1;
var _2=_1.config;
var _3=_2.toolbar;
var _4=this;
_2.registerButton({id:"edithorizontalrule",tooltip:this._lc("Insert/edit horizontal rule"),image:[_editor_url+"images/ed_buttons_main.gif",6,0],textMode:false,action:function(_5){
_4.buttonPress(_5);
}});
_2.addToolbarElement("edithorizontalrule","inserthorizontalrule",0);
}
HorizontalRule.prototype._lc=function(_6){
return Xinha._lc(_6,"HorizontalRule");
};
HorizontalRule.prototype.buttonPress=function(_7){
this.editor=_7;
this._editHorizontalRule();
};
HorizontalRule.prototype._editHorizontalRule=function(_8){
editor=this.editor;
var _9=editor._getSelection();
var _a=editor._createRange(_9);
var _b=null;
if(typeof _8=="undefined"){
_8=editor.getParentElement();
if(_8&&!/^hr$/i.test(_8.tagName)){
_8=null;
}
}
if(_8){
var _c=_8.style.width||_8.width;
_b={f_size:parseInt(_8.style.height,10)||_8.size,f_widthUnit:(/(%|px)$/.test(_c))?RegExp.$1:"px",f_width:parseInt(_c,10),f_color:Xinha._colorToRgb(_8.style.backgroundColor)||_8.color,f_align:_8.style.textAlign||_8.align,f_noshade:(parseInt(_8.style.borderWidth,10)==0)||_8.noShade};
}
editor._popupDialog("plugin://HorizontalRule/edit_horizontal_rule.html",function(_d){
if(!_d){
return false;
}
var hr=_8;
if(!hr){
var _f=editor._doc.createElement("hr");
for(var _10 in _d){
var _11=_d[_10];
if(_11==""){
continue;
}
switch(_10){
case "f_width":
if(_d["f_widthUnit"]=="%"){
_f.style.width=_11+"%";
}else{
_f.style.width=_11+"px";
}
break;
case "f_size":
_f.style.height=_11+"px";
break;
case "f_align":
_f.style.textAlign=_11;
switch(_11){
case "left":
_f.style.marginLeft="0";
break;
case "right":
_f.style.marginRight="0";
break;
case "center":
_f.style.marginLeft="auto";
_f.style.marginRight="auto";
break;
}
break;
case "f_color":
_f.style.backgroundColor=_11;
break;
case "f_noshade":
_f.style.border="0";
break;
}
}
if(Xinha.is_gecko){
editor.execCommand("inserthtml",false,Xinha.getOuterHTML(_f));
}else{
editor.insertNodeAtSelection(_f);
}
}else{
for(var _10 in _d){
var _11=_d[_10];
switch(_10){
case "f_width":
if(_d["f_widthUnit"]=="%"){
hr.style.width=_11+"%";
}else{
hr.style.width=_11+"px";
}
break;
case "f_size":
hr.style.height=_11+"px";
break;
case "f_align":
hr.style.textAlign=_11;
switch(_11){
case "left":
hr.style.marginLeft="0";
hr.style.marginRight=null;
break;
case "right":
hr.style.marginRight="0";
hr.style.marginLeft=null;
break;
case "center":
hr.style.marginLeft="auto";
hr.style.marginRight="auto";
break;
}
break;
case "f_color":
hr.style.backgroundColor=_11;
break;
case "f_noshade":
break;
}
hr.style.border=(_d["f_noshade"])?"0":null;
}
}
},_b);
};

