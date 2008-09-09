/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/FullPage/full-page.js */
function FullPage(_1){
this.editor=_1;
var _2=_1.config;
_2.fullPage=true;
var _3=this;
_2.registerButton("FP-docprop",this._lc("Document properties"),_1.imgURL("docprop.gif","FullPage"),false,function(_4,id){
_3.buttonPress(_4,id);
});
_2.addToolbarElement(["separator","FP-docprop"],"separator",-1);
}
FullPage._pluginInfo={name:"FullPage",version:"1.0",developer:"Mihai Bazon",developer_url:"http://dynarch.com/mishoo/",c_owner:"Mihai Bazon",sponsor:"Thycotic Software Ltd.",sponsor_url:"http://thycotic.com",license:"htmlArea"};
FullPage.prototype._lc=function(_6){
return Xinha._lc(_6,"FullPage");
};
FullPage.prototype.buttonPress=function(_7,id){
var _9=this;
switch(id){
case "FP-docprop":
var _a=_7._doc;
var _b=_a.getElementsByTagName("link");
var _c="";
var _d="";
var _e="";
var _f="";
var _10="";
for(var i=_b.length;--i>=0;){
var _12=_b[i];
if(/stylesheet/i.test(_12.rel)){
if(/alternate/i.test(_12.rel)){
_d=_12.href;
}else{
_c=_12.href;
}
}
}
var _13=_a.getElementsByTagName("meta");
for(var i=_13.length;--i>=0;){
var _14=_13[i];
if(/content-type/i.test(_14.httpEquiv)){
r=/^text\/html; *charset=(.*)$/i.exec(_14.content);
_10=r[1];
}else{
if((/keywords/i.test(_14.name))||(/keywords/i.test(_14.id))){
_e=_14.content;
}else{
if((/description/i.test(_14.name))||(/description/i.test(_14.id))){
_f=_14.content;
}
}
}
}
var _15=_a.getElementsByTagName("title")[0];
_15=_15?_15.innerHTML:"";
var _16={f_doctype:_7.doctype,f_title:_15,f_body_bgcolor:Xinha._colorToRgb(_a.body.style.backgroundColor),f_body_fgcolor:Xinha._colorToRgb(_a.body.style.color),f_base_style:_c,f_alt_style:_d,f_charset:_10,f_keywords:_e,f_description:_f,editor:_7};
_7._popupDialog("plugin://FullPage/docprop",function(_17){
_9.setDocProp(_17);
},_16);
break;
}
};
FullPage.prototype.setDocProp=function(_18){
var txt="";
var doc=this.editor._doc;
var _1b=doc.getElementsByTagName("head")[0];
var _1c=doc.getElementsByTagName("link");
var _1d=doc.getElementsByTagName("meta");
var _1e=null;
var _1f=null;
var _20=null;
var _21=null;
var _22=null;
var _23=null;
for(var i=_1c.length;--i>=0;){
var _25=_1c[i];
if(/stylesheet/i.test(_25.rel)){
if(/alternate/i.test(_25.rel)){
_1f=_25;
}else{
_1e=_25;
}
}
}
for(var i=_1d.length;--i>=0;){
var _26=_1d[i];
if(/content-type/i.test(_26.httpEquiv)){
r=/^text\/html; *charset=(.*)$/i.exec(_26.content);
_20=r[1];
_21=_26;
}else{
if((/keywords/i.test(_26.name))||(/keywords/i.test(_26.id))){
_22=_26;
}else{
if((/description/i.test(_26.name))||(/description/i.test(_26.id))){
_23=_26;
}
}
}
}
function createLink(alt){
var _28=doc.createElement("link");
_28.rel=alt?"alternate stylesheet":"stylesheet";
_1b.appendChild(_28);
return _28;
}
function createMeta(_29,_2a,_2b){
var _2c=doc.createElement("meta");
if(_29!=""){
_2c.httpEquiv=_29;
}
if(_2a!=""){
_2c.name=_2a;
}
if(_2a!=""){
_2c.id=_2a;
}
_2c.content=_2b;
_1b.appendChild(_2c);
return _2c;
}
if(!_1e&&_18.f_base_style){
_1e=createLink(false);
}
if(_18.f_base_style){
_1e.href=_18.f_base_style;
}else{
if(_1e){
_1b.removeChild(_1e);
}
}
if(!_1f&&_18.f_alt_style){
_1f=createLink(true);
}
if(_18.f_alt_style){
_1f.href=_18.f_alt_style;
}else{
if(_1f){
_1b.removeChild(_1f);
}
}
if(_21){
_1b.removeChild(_21);
_21=null;
}
if(!_21&&_18.f_charset){
_21=createMeta("Content-Type","","text/html; charset="+_18.f_charset);
}
if(!_22&&_18.f_keywords){
_22=createMeta("","keywords",_18.f_keywords);
}else{
if(_18.f_keywords){
_22.content=_18.f_keywords;
}else{
if(_22){
_1b.removeChild(_22);
}
}
}
if(!_23&&_18.f_description){
_23=createMeta("","description",_18.f_description);
}else{
if(_18.f_description){
_23.content=_18.f_description;
}else{
if(_23){
_1b.removeChild(_23);
}
}
}
for(var i in _18){
var val=_18[i];
switch(i){
case "f_title":
var _2e=doc.getElementsByTagName("title")[0];
if(!_2e){
_2e=doc.createElement("title");
_1b.appendChild(_2e);
}else{
while(node=_2e.lastChild){
_2e.removeChild(node);
}
}
if(!Xinha.is_ie){
_2e.appendChild(doc.createTextNode(val));
}else{
doc.title=val;
}
break;
case "f_doctype":
this.editor.setDoctype(val);
break;
case "f_body_bgcolor":
doc.body.style.backgroundColor=val;
break;
case "f_body_fgcolor":
doc.body.style.color=val;
break;
}
}
};

