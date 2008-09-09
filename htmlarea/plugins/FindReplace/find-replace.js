/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/FindReplace/find-replace.js */
function FindReplace(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton("FR-findreplace",this._lc("Find and Replace"),_1.imgURL("ed_find.gif","FindReplace"),false,function(_4){
_3.buttonPress(_4);
});
_2.addToolbarElement(["FR-findreplace","separator"],["formatblock","fontsize","fontname"],-1);
}
FindReplace.prototype.buttonPress=function(_5){
FindReplace.editor=_5;
var _6=_5.getSelectedHTML();
if(/\w/.test(_6)){
_6=_6.replace(/<[^>]*>/g,"");
_6=_6.replace(/&nbsp;/g,"");
}
var _7=/\w/.test(_6)?{fr_pattern:_6}:null;
_5._popupDialog("plugin://FindReplace/find_replace",null,_7);
};
FindReplace._pluginInfo={name:"FindReplace",version:"1.0 - beta",developer:"Cau Guanabara",developer_url:"mailto:caugb@ibest.com.br",c_owner:"Cau Guanabara",sponsor:"Independent production",sponsor_url:"http://www.netflash.com.br/gb/HA3-rc1/examples/find-replace.html",license:"htmlArea"};
FindReplace.prototype._lc=function(_8){
return Xinha._lc(_8,"FindReplace");
};

