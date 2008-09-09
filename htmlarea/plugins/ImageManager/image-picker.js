/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/image-picker.js */
function ImagePicker(_1){
this.field=_1;
var _2=this;
var _3=document.createElement("input");
_3.type="button";
_3.value="Browse";
_3.onclick=function(){
_2.popup_picker();
};
_1.parentNode.insertBefore(_3,_1.nextSibling);
_1.size="20";
_1.style.textAlign="right";
}
ImagePicker.prototype.backend=_editor_url+"plugins/ImageManager/backend.php?__plugin=ImageManager&";
ImagePicker.prototype.backend_data=null;
ImagePicker.prototype.popup_picker=function(){
var _4=this;
var _5=null;
if(_4.field.value){
_5={f_url:_4.field.value,f_width:null,f_height:null,f_alt:_4.field.value,f_border:null,f_align:null,f_padding:null,f_margin:null,f_backgroundColor:null,f_borderColor:null,f_border:null,f_padding:null,f_margin:null};
}
var _6=this.backend+"__function=manager";
if(this.backend_config!=null){
_6+="&backend_config="+encodeURIComponent(this.backend_config);
_6+="&backend_config_hash="+encodeURIComponent(this.backend_config_hash);
_6+="&backend_config_secret_key_location="+encodeURIComponent(this.backend_config_secret_key_location);
}
if(this.backend_data!=null){
for(var i in this.backend_data){
_6+="&"+i+"="+encodeURIComponent(this.backend_data[i]);
}
}
Dialog(_6,function(_8){
if(!_8){
return false;
}
_4.field.value=_8.f_url;
},_5);
};
if(typeof Dialog=="undefined"){
function Dialog(_9,_a,_b){
if(typeof _b=="undefined"){
_b=window;
}
var _c=window.open(_9,"hadialog","toolbar=no,menubar=no,personalbar=no,width=10,height=10,"+"scrollbars=yes,resizable=yes,modal=yes,dependable=yes");
Dialog._modal=_c;
Dialog._arguments=_b;
Dialog._return=function(_d){
if(_d&&_a){
_a(_d);
}
Dialog._modal=null;
};
Dialog._modal.focus();
}
Dialog._return=null;
Dialog._modal=null;
Dialog._arguments=null;
}
ImagePicker.prototype.backend_config=null;
ImagePicker.prototype.backend_config_hash=null;
ImagePicker.prototype.backend_config_secret_key_location="Xinha:ImageManager";

