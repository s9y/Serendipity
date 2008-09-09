/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/BackgroundImage/background-image.js */
function BackgroundImage(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"bgImage",tooltip:this._lc("Set page background image"),image:_1.imgURL("ed_bgimage.gif","BackgroundImage"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("bgImage","inserthorizontalrule",1);
}
BackgroundImage._pluginInfo={name:"BackgroundImage",version:"1.0",developer:"Udo Schmal",developer_url:"http://www.schaffrath-neuemedien.de/",c_owner:"Udo Schmal & Schaffrath NeueMedien",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de.de/",license:"htmlArea"};
BackgroundImage.prototype._lc=function(_5){
return Xinha._lc(_5,"BackgroundImage");
};
BackgroundImage.prototype.buttonPress=function(_6){
_6._popupDialog("plugin://BackgroundImage/bgimage",function(_7){
if(_7){
if(Xinha.is_ie){
_6.focusEditor();
}
if(_7=="*"){
_6._doc.body.background="";
}else{
_6._doc.body.background=_7;
}
}
},null);
};

