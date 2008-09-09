/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/QuickTag/quick-tag.js */
function QuickTag(_1){
var _2=_1.config;
var _3=this;
_2.registerButton({id:"quickeditor",tooltip:this._lc("Quick Tag Editor"),image:_1.imgURL("ed_quicktag.gif","QuickTag"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("quickeditor","htmlmode",1);
}
QuickTag.prototype.buttonPress=function(_5){
var _6=this;
var _7=_5.getSelectedHTML().replace(/(<[^>]*>|&nbsp;|\n|\r)/g,"");
var _8=new Object();
_8.editor=_5;
if(/\w/.test(_7)){
_5._popupDialog("plugin://QuickTag/quicktag",function(p){
_6.setTag(_5,p);
},_8);
}else{
alert(this._lc("You have to select some text"));
}
};
QuickTag.prototype.setTag=function(_a,_b){
_a.surroundHTML(_b.tagopen,_b.tagclose);
};
QuickTag._pluginInfo={name:"QuickTag",version:"1.0 - beta",developer:"Cau Guanabara",developer_url:"mailto:caugb@ibest.com.br",c_owner:"Cau Guanabara",sponsor:"Independent production",sponsor_url:"http://www.netflash.com.br/gb/HA3-rc1/examples/quick-tag.html",license:"htmlArea"};
QuickTag.prototype._lc=function(_c){
return Xinha._lc(_c,"QuickTag");
};

