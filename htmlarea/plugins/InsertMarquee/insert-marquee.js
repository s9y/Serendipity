/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/InsertMarquee/insert-marquee.js */
function InsertMarquee(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"insertmarquee",tooltip:this._lc("Insert scrolling marquee"),image:_1.imgURL("ed_marquee.gif","InsertMarquee"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("insertmarquee","inserthorizontalrule",-1);
}
InsertMarquee._pluginInfo={name:"InsertMarquee",version:"1.0",developer:"Udo Schmal",developer_url:"http://www.schaffrath-NeueMedien.de/",c_owner:"Udo Schmal & Schaffrath NeueMedien",license:"htmlArea"};
InsertMarquee.prototype._lc=function(_5){
return Xinha._lc(_5,"InsertMarquee");
};
InsertMarquee.prototype.buttonPress=function(_6,_7){
function setAttr(el,_9,_a){
if(_a!=""){
el.setAttribute(_9,_a);
}else{
el.removeAttribute(_9);
}
}
var _b=new Object();
if(typeof _7=="undefined"){
_7=_6.getParentElement();
}
if(_7.tagName.toLowerCase()=="marquee"){
_b.f_name=_7.name;
_b.f_behavior=_7.behavior;
_b.f_direction=_7.direction;
_b.f_text=_7.innerHTML;
_b.f_width=_7.width;
_b.f_height=_7.height;
_b.f_bgcolor=_7.bgColor;
_b.f_scrollamount=_7.scrollAmount;
_b.f_scrolldelay=_7.scrollDelay;
}else{
_b={f_name:"",f_behavior:"",f_direction:"",f_text:"",f_width:"",f_height:"",f_bgcolor:"",f_scrollamount:"",f_scrolldelay:""};
}
_6._popupDialog("plugin://InsertMarquee/insert_marquee",function(_c){
if(!_c){
return false;
}else{
if(_7.tagName.toLowerCase()=="marquee"){
setAttr(_7,"name",_c["f_name"]);
setAttr(_7,"id",_c["f_name"]);
setAttr(_7,"behavior",_c["f_behavior"]);
setAttr(_7,"direction",_c["f_direction"]);
setAttr(_7,"width",_c["f_width"]);
setAttr(_7,"height",_c["f_height"]);
setAttr(_7,"bgColor",_c["f_bgcolor"]);
setAttr(_7,"scrollAmount",_c["f_scrollamount"]);
setAttr(_7,"scrollDelay",_c["f_scrolldelay"]);
_7.innerHTML=_c["f_text"];
}else{
var _d="<marquee name=\""+_c["f_name"]+"\" "+"id=\""+_c["f_name"]+"\" "+"behavior=\""+_c["f_behavior"]+"\" "+"direction=\""+_c["f_direction"]+"\" "+"width=\""+_c["f_width"]+"\" "+"height=\""+_c["f_height"]+"\" "+"bgcolor=\""+_c["f_bgcolor"]+"\" "+"scrollamount=\""+_c["f_scrollamount"]+"\" "+"scrolldelay=\""+_c["f_scrolldelay"]+"\">\n";
alert(_d);
_d=_d+_c["f_text"];
_d=_d+"</marquee>";
_6.insertHTML(_d);
}
}
},_b);
};

