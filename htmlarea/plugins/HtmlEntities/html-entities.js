/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/HtmlEntities/html-entities.js */
function HtmlEntities(_1){
this.editor=_1;
}
HtmlEntities._pluginInfo={name:"HtmlEntities",version:"1.0",developer:"Raimund Meyer",developer_url:"http://rheinauf.de",c_owner:"Xinha community",sponsor:"",sponsor_url:"",license:"Creative Commons Attribution-ShareAlike License"};
Xinha.Config.prototype.HtmlEntities={Encoding:"iso-8859-1",EntitiesFile:Xinha.getPluginDir("HtmlEntities")+"/Entities.js"};
HtmlEntities.prototype.onGenerate=function(){
var e=this.editor;
var _3=(e.config.HtmlEntities.Encoding)?Xinha.getPluginDir("HtmlEntities")+"/"+e.config.HtmlEntities.Encoding+".js":e.config.HtmlEntities.EntitiesFile;
var _4=function(_5){
var _6=e.config.specialReplacements;
eval("var replacements ="+_5);
for(var i in replacements){
_6[i]=replacements[i];
}
};
Xinha._getback(_3,_4);
};

