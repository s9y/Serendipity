/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/InsertSmiley/insert-smiley.js */
function InsertSmiley(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"insertsmiley",tooltip:this._lc("Insert Smiley"),image:_1.imgURL("ed_smiley.gif","InsertSmiley"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("insertsmiley","inserthorizontalrule",1);
}
InsertSmiley._pluginInfo={name:"InsertSmiley",version:"1.0",developer:"Ki Master George",developer_url:"http://kimastergeorge.i4host.com/",c_owner:"Ki Master George",sponsor:"Ki Master George",sponsor_url:"http://kimastergeorge.i4host.com/",license:"htmlArea"};
InsertSmiley.prototype._lc=function(_5){
return Xinha._lc(_5,"InsertSmiley");
};
Xinha.Config.prototype.InsertSmiley={smileyURL:"http://www.x-webservice.net/storage/xinha/plugins/InsertSmiley/"};
InsertSmiley.prototype.buttonPress=function(_6){
var _7=this;
var _8=_6.getSelectedHTML().replace(/(<[^>]*>|&nbsp;|\n|\r)/g,"");
var _9={};
_9.editor=_6;
_6._popupDialog("plugin://InsertSmiley/insertsmiley",function(_a){
_6.insertHTML("<img src=\""+_6.config.InsertSmiley.smileyURL+_a.smileyfile+"\" alt=\"Smiley\" />");
},_9);
};

