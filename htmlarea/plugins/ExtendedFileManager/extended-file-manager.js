/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ExtendedFileManager/extended-file-manager.js */
function ExtendedFileManager(_1){
this.editor=_1;
var _2=_1.config;
var _3=_2.toolbar;
var _4=this;
if(_2.ExtendedFileManager.use_linker){
_2.registerButton({id:"linkfile",tooltip:Xinha._lc("Insert File Link","ExtendedFileManager"),image:Xinha.getPluginDir("ExtendedFileManager")+"/img/ed_linkfile.gif",textMode:false,action:function(_5){
_5._linkFile();
}});
_2.addToolbarElement("linkfile","createlink",1);
}
var _6=_1.config.ExtendedFileManager.backend+"__function=manager";
if(_2.ExtendedFileManager.backend_config!=null){
_6+="&backend_config="+encodeURIComponent(_2.ExtendedFileManager.backend_config);
_6+="&backend_config_hash="+encodeURIComponent(_2.ExtendedFileManager.backend_config_hash);
_6+="&backend_config_secret_key_location="+encodeURIComponent(_2.ExtendedFileManager.backend_config_secret_key_location);
}
if(_2.ExtendedFileManager.backend_data!=null){
for(var i in _2.ExtendedFileManager.backend_data){
_6+="&"+i+"="+encodeURIComponent(_2.ExtendedFileManager.backend_data[i]);
}
}
_2.ExtendedFileManager.manager=_6;
}
ExtendedFileManager._pluginInfo={name:"ExtendedFileManager",version:"1.4",developer:"Afru, Krzysztof Kotowicz, Raimund Meyer",developer_url:"http://xinha.org",license:"htmlArea"};
Xinha.Config.prototype.ExtendedFileManager={"use_linker":true,"backend":Xinha.getPluginDir("ExtendedFileManager")+"/backend.php?__plugin=ExtendedFileManager&","backend_data":null,"backend_config":null,"backend_config_hash":null,"backend_config_secret_key_location":"Xinha:ImageManager"};
if(typeof ImageManager=="undefined"){
Xinha.prototype._insertImage=function(_8){
var _9=this;
var _a={"editor":this,param:null};
if(typeof _8=="undefined"){
_8=this.getParentElement();
if(_8&&!/^img$/i.test(_8.tagName)){
_8=null;
}
}
if(_8){
_a.param={f_url:Xinha.is_ie?_8.src:_8.getAttribute("src"),f_alt:_8.alt,f_title:_8.title,f_border:_8.style.borderWidth?_8.style.borderWidth:_8.border,f_align:_8.align,f_width:_8.width,f_height:_8.height,f_padding:_8.style.padding,f_margin:_8.style.margin,f_backgroundColor:_8.style.backgroundColor,f_borderColor:_8.style.borderColor,baseHref:_9.config.baseHref};
_a.param.f_border=shortSize(_a.param.f_border);
_a.param.f_padding=shortSize(_a.param.f_padding);
_a.param.f_margin=shortSize(_a.param.f_margin);
_a.param.f_backgroundColor=convertToHex(_a.param.f_backgroundColor);
_a.param.f_borderColor=convertToHex(_a.param.f_borderColor);
}
Dialog(this.config.ExtendedFileManager.manager,function(_b){
if(!_b){
return false;
}
var _c=_8;
if(!_c){
if(!_b.f_url){
return false;
}
if(Xinha.is_ie){
var _d=_9.getSelection();
var _e=_9.createRange(_d);
_9._doc.execCommand("insertimage",false,_b.f_url);
_c=_e.parentElement();
if(_c.tagName.toLowerCase()!="img"){
_c=_c.previousSibling;
}
}else{
_c=document.createElement("img");
_c.src=_b.f_url;
_9.insertNodeAtSelection(_c);
}
}else{
if(!_b.f_url){
_c.parentNode.removeChild(_c);
_9.updateToolbar();
return false;
}else{
_c.src=_b.f_url;
}
}
_c.alt=_c.alt?_c.alt:"";
for(field in _b){
var _f=_b[field];
switch(field){
case "f_alt":
_c.alt=_f;
break;
case "f_title":
_c.title=_f;
break;
case "f_border":
if(_f){
_c.style.borderWidth=/[^0-9]/.test(_f)?_f:(_f!="")?(parseInt(_f)+"px"):"";
if(_c.style.borderWidth&&!_c.style.borderStyle){
_c.style.borderStyle="solid";
}else{
if(!_c.style.borderWidth){
_c.style.border="";
}
}
}
break;
case "f_borderColor":
_c.style.borderColor=_f;
break;
case "f_backgroundColor":
_c.style.backgroundColor=_f;
break;
case "f_align":
_c.align=_f;
break;
case "f_width":
if(parseInt(_f)>0){
_c.width=parseInt(_f);
}
break;
case "f_height":
if(parseInt(_f)>0){
_c.height=parseInt(_f);
}
break;
case "f_padding":
_c.style.padding=/[^0-9]/.test(_f)?_f:(_f!="")?(parseInt(_f)+"px"):"";
break;
case "f_margin":
_c.style.margin=/[^0-9]/.test(_f)?_f:(_f!="")?(parseInt(_f)+"px"):"";
break;
}
}
},_a);
};
}
Xinha.prototype._linkFile=function(_10){
var _11=this;
var _12={"editor":this,param:null};
if(typeof _10=="undefined"){
_10=this.getParentElement();
if(_10){
if(/^img$/i.test(_10.tagName)){
_10=_10.parentNode;
}
if(!/^a$/i.test(_10.tagName)){
_10=null;
}
}
}
if(!_10){
var sel=_11.getSelection();
var _14=_11.createRange(sel);
var _15=0;
if(Xinha.is_ie){
if(sel.type=="Control"){
_15=_14.length;
}else{
_15=_14.compareEndPoints("StartToEnd",_14);
}
}else{
_15=_14.compareBoundaryPoints(_14.START_TO_END,_14);
}
if(_15==0){
alert(Xinha._lc("You must select some text before making a new link.","ExtendedFileManager"));
return;
}
_12.param={f_href:"",f_title:"",f_target:"",f_usetarget:_11.config.makeLinkShowsTarget,baseHref:_11.config.baseHref};
}else{
_12.param={f_href:Xinha.is_ie?_10.href:_10.getAttribute("href"),f_title:_10.title,f_target:_10.target,f_usetarget:_11.config.makeLinkShowsTarget,baseHref:_11.config.baseHref};
}
Dialog(this.config.ExtendedFileManager.manager+"&mode=link",function(_16){
if(!_16){
return false;
}
var a=_10;
if(!a){
try{
_11._doc.execCommand("createlink",false,_16.f_href);
a=_11.getParentElement();
var sel=_11.getSelection();
var _19=_11.createRange(sel);
if(!Xinha.is_ie){
a=_19.startContainer;
if(!/^a$/i.test(a.tagName)){
a=a.nextSibling;
if(a==null){
a=_19.startContainer.parentNode;
}
}
}
}
catch(e){
}
}else{
var _1a=_16.f_href.trim();
_11.selectNodeContents(a);
if(_1a==""){
_11._doc.execCommand("unlink",false,null);
_11.updateToolbar();
return false;
}else{
a.href=_1a;
}
}
if(!(a&&/^a$/i.test(a.tagName))){
return false;
}
a.target=_16.f_target.trim();
a.title=_16.f_title.trim();
_11.selectNodeContents(a);
_11.updateToolbar();
},_12);
};
function shortSize(_1b){
if(/ /.test(_1b)){
var _1c=_1b.split(" ");
var _1d=true;
for(var i=1;i<_1c.length;i++){
if(_1c[0]!=_1c[i]){
_1d=false;
break;
}
}
if(_1d){
_1b=_1c[0];
}
}
return _1b;
}
function convertToHex(_1f){
if(typeof _1f=="string"&&/, /.test.color){
_1f=_1f.replace(/, /,",");
}
if(typeof _1f=="string"&&/ /.test.color){
var _20=_1f.split(" ");
var _21="";
for(var i=0;i<_20.length;i++){
_21+=Xinha._colorToRgb(_20[i]);
if(i+1<_20.length){
_21+=" ";
}
}
return _21;
}
return Xinha._colorToRgb(_1f);
}

