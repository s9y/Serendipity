/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Equation/equation.js */
function Equation(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"equation",tooltip:this._lc("Formula Editor"),image:_1.imgURL("equation.gif","Equation"),textMode:false,action:function(_4,id){
_3.buttonPress(_4,id);
}});
_2.addToolbarElement("equation","inserthorizontalrule",-1);
mathcolor=_2.Equation.mathcolor;
mathfontfamily=_2.Equation.mathfontfamily;
this.enabled=!Xinha.is_ie;
if(this.enabled){
this.onBeforeSubmit=this.onBeforeUnload=function(){
_3.unParse();
};
}
if(typeof AMprocessNode!="function"){
Xinha._loadback(Xinha.getPluginDir("Equation")+"/ASCIIMathML.js",function(){
translate();
});
}
}
Xinha.Config.prototype.Equation={"mathcolor":"black","mathfontfamily":"serif"};
Equation._pluginInfo={name:"ASCIIMathML Formula Editor",version:"2.3 (2008-01-26)",developer:"Raimund Meyer",developer_url:"http://xinha.raimundmeyer.de",c_owner:"",sponsor:"",sponsor_url:"",license:"GNU/LGPL"};
Equation.prototype._lc=function(_6){
return Xinha._lc(_6,"Equation");
};
Equation.prototype.onGenerate=function(){
this.parse();
};
Equation.prototype.onKeyPress=function(ev){
if(this.enabled){
e=this.editor;
var _8=e._getFirstAncestor(e.getSelection(),["span"]);
if(_8&&_8.className=="AM"){
if(ev.keyCode==8||ev.keyCode==46||ev.charCode){
Xinha._stopEvent(ev);
return true;
}
}
}
return false;
};
Equation.prototype.onBeforeMode=function(_9){
if(this.enabled&&_9=="textmode"){
this.unParse();
}
};
Equation.prototype.onMode=function(_a){
if(this.enabled&&_a=="wysiwyg"){
this.parse();
}
};
Equation.prototype.parse=function(){
if(this.enabled){
var _b=this.editor._doc;
var _c=_b.getElementsByTagName("span");
for(var i=0;i<_c.length;i++){
var _e=_c[i];
if(_e.className!="AM"){
continue;
}
if(_e.innerHTML.indexOf(this.editor.cc)!=-1){
_e.innerHTML=_e.innerHTML.replace(this.editor.cc,"");
_e.parentNode.insertBefore(_b.createTextNode(this.editor.cc),_e);
}
_e.title=_e.innerHTML;
var _f=_e.cloneNode(true);
try{
document.adoptNode(_f);
}
catch(e){
}
AMprocessNode(_f,false);
try{
_b.adoptNode(_f);
}
catch(e){
}
_e.parentNode.replaceChild(_f,_e);
_f.parentNode.insertBefore(_b.createTextNode(String.fromCharCode(32)),_f);
_f.parentNode.insertBefore(_b.createTextNode(String.fromCharCode(32)),_f.nextSibling);
}
}
};
Equation.prototype.unParse=function(){
var doc=this.editor._doc;
var _11=doc.getElementsByTagName("span");
for(var i=0;i<_11.length;i++){
var _13=_11[i];
if(_13.className.indexOf("AM")==-1||_13.getElementsByTagName("math").length==0){
continue;
}
var _14=_13.getAttribute("title");
_13.innerHTML=_14;
_13.setAttribute("title",null);
}
};
Equation.prototype.buttonPress=function(){
var _15=this;
var _16=this.editor;
var _17={};
_17["editor"]=_16;
var _18=_16._getFirstAncestor(_16.getSelection(),["span"]);
if(_18){
_17["editedNode"]=_18;
}
Dialog(Xinha.getPluginDir("Equation")+"/popups/dialog.html",function(_19){
_15.insert(_19);
},_17);
};
Equation.prototype.insert=function(_1a){
if(typeof _1a["formula"]!="undefined"){
var _1b=(_1a["formula"]!="")?_1a["formula"].replace(/^`?(.*)`?$/m,"`$1`"):"";
if(_1a["editedNode"]&&(_1a["editedNode"].tagName.toLowerCase()=="span")){
var _1c=_1a["editedNode"];
if(_1b!=""){
_1c.innerHTML=_1b;
if(this.enabled){
_1c.title=_1b;
}
}else{
_1c.parentNode.removeChild(_1c);
}
}else{
if(!_1a["editedNode"]&&_1b!=""){
if(this.enabled){
var _1c=document.createElement("span");
_1c.className="AM";
this.editor.insertNodeAtSelection(_1c);
_1c.innerHTML=_1b;
_1c.title=_1b;
}else{
this.editor.insertHTML("<span class=\"AM\">"+_1b+"</span>");
}
}
}
if(this.enabled){
this.parse();
}
}
};

