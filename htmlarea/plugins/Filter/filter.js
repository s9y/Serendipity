/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Filter/filter.js */
function Filter(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"filter",tooltip:this._lc("Filter"),image:_1.imgURL("ed_filter.gif","Filter"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
if(!_2.Filters){
_2.Filters=["Paragraph","Word"];
}
for(var i=0;i<_1.config.Filters.length;i++){
_3.add(_1.config.Filters[i]);
}
_2.addToolbarElement("filter","removeformat",1);
}
Filter._pluginInfo={name:"Filter",version:"1.0",developer:"Udo Schmal (gocher)",developer_url:"",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de/",c_owner:"Udo Schmal & Schaffrath-NeueMedien",license:"htmlArea"};
Filter.prototype.add=function(_6){
if(eval("typeof "+_6)=="undefined"){
var _7=Xinha.getPluginDir("Filter")+"/filters/"+_6+".js";
var _8=document.getElementsByTagName("head")[0];
var _9=Xinha.is_ie?"onreadystatechange":"onload";
var _a=document.createElement("script");
_a.type="text/javascript";
_a.src=_7;
_a[_9]=function(){
if(Xinha.is_ie&&!/loaded|complete/.test(window.event.srcElement.readyState)){
return;
}
};
_8.appendChild(_a);
}
};
Filter.prototype._lc=function(_b){
return Xinha._lc(_b,"Filter");
};
Filter.prototype.buttonPress=function(_c){
var _d=_c.getInnerHTML();
for(var i=0;i<_c.config.Filters.length;i++){
_d=eval(_c.config.Filters[i])(_d);
}
_c.setHTML(_d);
};

