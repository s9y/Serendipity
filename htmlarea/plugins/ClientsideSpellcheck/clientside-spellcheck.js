/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ClientsideSpellcheck/clientside-spellcheck.js */
function ClientsideSpellcheck(_1){
this.editor=_1;
var _2=_1.config;
var bl=ClientsideSpellcheck.btnList;
var _4=this;
var id="clientsidespellcheck";
_2.registerButton(id,this._lc("Spell Check using ieSpell"),_1.imgURL("clientside-spellcheck.gif","ClientsideSpellcheck"),false,function(_6,id){
_4.buttonPress(_6,id);
});
if(Xinha.is_ie){
_2.addToolbarElement("clientsidespellcheck","print",1);
}
}
ClientsideSpellcheck._pluginInfo={name:"ClientsideSpellcheck",version:"1.0",developer:"Michael Harris",developer_url:"http://www.jonesinternational.edu",c_owner:"Red Egg Software",sponsor:"Jones International University",sponsor_url:"http://www.jonesinternational.edu",license:"htmlArea"};
ClientsideSpellcheck.prototype._lc=function(_8){
return Xinha._lc(_8,"ClientsideSpellcheck");
};
ClientsideSpellcheck.prototype.buttonPress=function(_9){
try{
var _a=new ActiveXObject("ieSpell.ieSpellExtension");
_a.CheckAllLinkedDocuments(document);
}
catch(exception){
if(exception.number==-2146827859){
if(confirm(this.lc("ieSpell not detected.  Click Ok to go to download page."))){
window.open("http://www.iespell.com/download.php","DownLoad");
}
}else{
alert(this.lc("ieSpell can only be used in Internet Explorer"));
}
}
};

