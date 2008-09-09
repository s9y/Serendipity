/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/SpellChecker/spell-checker.js */
Xinha.Config.prototype.SpellChecker={"backend":"php","personalFilesDir":"","defaultDictionary":"en_GB","utf8_to_entities":true};
function SpellChecker(_1){
this.editor=_1;
var _2=_1.config;
var bl=SpellChecker.btnList;
var _4=this;
var id="SC-spell-check";
_2.registerButton(id,this._lc("Spell-check"),_1.imgURL("spell-check.gif","SpellChecker"),false,function(_6,id){
_4.buttonPress(_6,id);
});
_2.addToolbarElement("SC-spell-check","htmlmode",1);
}
SpellChecker._pluginInfo={name:"SpellChecker",version:"1.0",developer:"Mihai Bazon",developer_url:"http://dynarch.com/mishoo/",c_owner:"Mihai Bazon",sponsor:"American Bible Society",sponsor_url:"http://www.americanbible.org",license:"htmlArea"};
SpellChecker.prototype._lc=function(_8){
return Xinha._lc(_8,"SpellChecker");
};
SpellChecker.btnList=[null,["spell-check"]];
SpellChecker.prototype.buttonPress=function(_9,id){
switch(id){
case "SC-spell-check":
SpellChecker.editor=_9;
SpellChecker.init=true;
var _b=Xinha.getPluginDir("SpellChecker")+"/spell-check-ui.html";
var _c;
if(Xinha.is_ie){
_c=window.open(_b,"SC_spell_checker","toolbar=no,location=no,directories=no,status=no,menubar=no,"+"scrollbars=no,resizable=yes,width=600,height=450");
}else{
_c=window.open(_b,"SC_spell_checker","toolbar=no,menubar=no,personalbar=no,width=600,height=450,"+"scrollbars=no,resizable=yes");
}
_c.focus();
break;
}
};
SpellChecker.editor=null;

