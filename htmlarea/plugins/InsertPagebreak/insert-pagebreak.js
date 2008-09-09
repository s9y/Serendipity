/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/InsertPagebreak/insert-pagebreak.js */
function InsertPagebreak(_1,_2){
this.editor=_1;
var _3=_1.config;
var _4=this;
_3.registerButton({id:"pagebreak",tooltip:this._lc("Page break"),image:_1.imgURL("pagebreak.gif","InsertPagebreak"),textMode:false,action:function(_5){
_4.buttonPress(_5);
}});
_3.addToolbarElement("pagebreak","inserthorizontalrule",1);
}
InsertPagebreak._pluginInfo={name:"InsertPagebreak",version:"1.0",developer:"Udo Schmal",developer_url:"",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de/",c_owner:"Udo Schmal & Schaffrath NeueMedien",license:"htmlArea"};
InsertPagebreak.prototype._lc=function(_6){
return Xinha._lc(_6,"InsertPagebreak");
};
InsertPagebreak.prototype.buttonPress=function(_7,_8,_9){
_7.insertHTML("<div style=\"font-size: 1px; page-break-after: always; height: 1px; background-color: rgb(192, 192, 192);\" contenteditable=\"false\" title=\"Page Break\">");
};

