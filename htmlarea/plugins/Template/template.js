/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Template/template.js */
function Template(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"template",tooltip:Xinha._lc("Insert template","Template"),image:_1.imgURL("ed_template.gif","Template"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("template","inserthorizontalrule",1);
}
Template._pluginInfo={name:"Template",version:"1.0",developer:"Udo Schmal",developer_url:"http://www.schaffrath-neuemedien.de/",c_owner:"Udo Schmal & Schaffrath NeueMedien",license:"htmlArea"};
Template.prototype.onGenerate=function(){
this.editor.addEditorStylesheet(Xinha.getPluginDir("Template")+"/template.css");
};
Template.prototype.buttonPress=function(_5){
_5._popupDialog("plugin://Template/template",function(_6){
if(!_6){
return false;
}
var _7=_5._doc.getElementsByTagName("body");
var _8=_7[0];
function getElement(x){
var _a=_5._doc.getElementById(x);
if(!_a){
_a=_5._doc.createElement("div");
_a.id=x;
_a.innerHTML=x;
_8.appendChild(_a);
}
if(_a.style){
_a.removeAttribute("style");
}
return _a;
}
var _b=getElement("content");
var _c=getElement("menu1");
var _d=getElement("menu2");
var _e=getElement("menu3");
switch(_6["templ"]){
case "1":
_c.style.position="absolute";
_c.style.right="0px";
_c.style.width="28%";
_c.style.backgroundColor="#e1ddd9";
_c.style.padding="2px 20px";
_b.style.position="absolute";
_b.style.left="0px";
_b.style.width="70%";
_b.style.backgroundColor="#fff";
_d.style.visibility="hidden";
_e.style.visibility="hidden";
break;
case "2":
_c.style.position="absolute";
_c.style.left="0px";
_c.style.width="28%";
_c.style.height="100%";
_c.style.backgroundColor="#e1ddd9";
_b.style.position="absolute";
_b.style.right="0px";
_b.style.width="70%";
_b.style.backgroundColor="#fff";
_d.style.visibility="hidden";
_e.style.visibility="hidden";
break;
case "3":
_c.style.position="absolute";
_c.style.left="0px";
_c.style.width="28%";
_c.style.backgroundColor="#e1ddd9";
_d.style.position="absolute";
_d.style.right="0px";
_d.style.width="28%";
_d.style.backgroundColor="#e1ddd9";
_b.style.position="absolute";
_b.style.right="30%";
_b.style.width="60%";
_b.style.backgroundColor="#fff";
_e.style.visibility="hidden";
break;
}
},null);
};

