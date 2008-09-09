/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/image-manager.js */
function ImageManager(_1){
}
ImageManager._pluginInfo={name:"ImageManager",version:"1.0",developer:"Xiang Wei Zhuo",developer_url:"http://www.zhuo.org/htmlarea/",license:"htmlArea"};
Xinha.Config.prototype.ImageManager={"backend":Xinha.getPluginDir("ImageManager")+"/backend.php?__plugin=ImageManager&","backend_data":null,"backend_config":null,"backend_config_hash":null,"backend_config_secret_key_location":"Xinha:ImageManager"};
Xinha.prototype._insertImage=function(_2){
var _3=this;
var _4=null;
if(typeof _2=="undefined"){
_2=this.getParentElement();
if(_2&&!/^img$/i.test(_2.tagName)){
_2=null;
}
}
if(_2){
_4={f_url:Xinha.is_ie?_2.src:_2.src,f_alt:_2.alt,f_border:_2.style.borderWidth?_2.style.borderWidth:_2.border,f_align:_2.align,f_padding:_2.style.padding,f_margin:_2.style.margin,f_width:_2.width,f_height:_2.height,f_backgroundColor:_2.style.backgroundColor,f_borderColor:_2.style.borderColor};
function shortSize(_5){
if(/ /.test(_5)){
var _6=_5.split(" ");
var _7=true;
for(var i=1;i<_6.length;i++){
if(_6[0]!=_6[i]){
_7=false;
break;
}
}
if(_7){
_5=_6[0];
}
}
return _5;
}
_4.f_border=shortSize(_4.f_border);
_4.f_padding=shortSize(_4.f_padding);
_4.f_margin=shortSize(_4.f_margin);
function convertToHex(_9){
if(typeof _9=="string"&&/, /.test.color){
_9=_9.replace(/, /,",");
}
if(typeof _9=="string"&&/ /.test.color){
var _a=_9.split(" ");
var _b="";
for(var i=0;i<_a.length;i++){
_b+=Xinha._colorToRgb(_a[i]);
if(i+1<_a.length){
_b+=" ";
}
}
return _b;
}
return Xinha._colorToRgb(_9);
}
_4.f_backgroundColor=convertToHex(_4.f_backgroundColor);
_4.f_borderColor=convertToHex(_4.f_borderColor);
}
var _d=_3.config.ImageManager.backend+"__function=manager";
if(_3.config.ImageManager.backend_config!=null){
_d+="&backend_config="+encodeURIComponent(_3.config.ImageManager.backend_config);
_d+="&backend_config_hash="+encodeURIComponent(_3.config.ImageManager.backend_config_hash);
_d+="&backend_config_secret_key_location="+encodeURIComponent(_3.config.ImageManager.backend_config_secret_key_location);
}
if(_3.config.ImageManager.backend_data!=null){
for(var i in _3.config.ImageManager.backend_data){
_d+="&"+i+"="+encodeURIComponent(_3.config.ImageManager.backend_data[i]);
}
}
Dialog(_d,function(_f){
if(!_f){
return false;
}
var img=_2;
if(!img){
if(Xinha.is_ie){
var sel=_3._getSelection();
var _12=_3._createRange(sel);
_3._doc.execCommand("insertimage",false,_f.f_url);
img=_12.parentElement();
if(img.tagName.toLowerCase()!="img"){
img=img.previousSibling;
}
}else{
img=document.createElement("img");
img.src=_f.f_url;
_3.insertNodeAtSelection(img);
}
}else{
img.src=_f.f_url;
}
for(field in _f){
var _13=_f[field];
switch(field){
case "f_alt":
img.alt=_13;
break;
case "f_border":
if(_13.length){
img.style.borderWidth=/[^0-9]/.test(_13)?_13:(parseInt(_13)+"px");
if(img.style.borderWidth&&!img.style.borderStyle){
img.style.borderStyle="solid";
}
}else{
img.style.borderWidth="";
img.style.borderStyle="";
}
break;
case "f_borderColor":
img.style.borderColor=_13;
break;
case "f_backgroundColor":
img.style.backgroundColor=_13;
break;
case "f_padding":
if(_13.length){
img.style.padding=/[^0-9]/.test(_13)?_13:(parseInt(_13)+"px");
}else{
img.style.padding="";
}
break;
case "f_margin":
if(_13.length){
img.style.margin=/[^0-9]/.test(_13)?_13:(parseInt(_13)+"px");
}else{
img.style.margin="";
}
break;
case "f_align":
img.align=_13;
break;
case "f_width":
if(!isNaN(parseInt(_13))){
img.width=parseInt(_13);
}else{
img.width="";
}
break;
case "f_height":
if(!isNaN(parseInt(_13))){
img.height=parseInt(_13);
}else{
img.height="";
}
break;
}
}
},_4);
};

