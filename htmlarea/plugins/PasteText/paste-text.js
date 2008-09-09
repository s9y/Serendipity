/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/PasteText/paste-text.js */
function PasteText(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"pastetext",tooltip:this._lc("Paste as Plain Text"),image:_1.imgURL("ed_paste_text.gif","PasteText"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("pastetext",["paste","killword"],1);
}
PasteText._pluginInfo={name:"PasteText",version:"1.2",developer:"Michael Harris",developer_url:"http://www.jonesadvisorygroup.com",c_owner:"Jones Advisory Group",sponsor:"Jones International University",sponsor_url:"http://www.jonesinternational.edu",license:"htmlArea"};
PasteText.prototype._lc=function(_5){
return Xinha._lc(_5,"PasteText");
};
Xinha.Config.prototype.PasteText={showParagraphOption:true,newParagraphDefault:true};
PasteText.prototype.buttonPress=function(_6){
var _6=this.editor;
var _7=_6.config.PasteText;
var _8=function(_9){
var _a=_9.text;
var _b=_9.insertParagraphs;
_a=_a.replace(/</g,"&lt;");
_a=_a.replace(/>/g,"&gt;");
if(_9.insertParagraphs){
_a=_a.replace(/\t/g,"&nbsp;&nbsp;&nbsp;&nbsp;");
_a=_a.replace(/\n/g,"</p><p>");
_a="<p>"+_a+"</p>";
if(Xinha.is_ie){
_6.insertHTML(_a);
}else{
_6.execCommand("inserthtml",false,_a);
}
}else{
_a=_a.replace(/\n/g,"<br />");
_6.insertHTML(_a);
}
};
Dialog(Xinha.getPluginDir("PasteText")+"/popups/paste_text.html",_8,_7);
};

