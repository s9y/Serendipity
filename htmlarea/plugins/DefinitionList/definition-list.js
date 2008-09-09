/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/DefinitionList/definition-list.js */
function DefinitionList(_1){
this.editor=_1;
var _2=_1.config;
var bl=DefinitionList.btnList;
var _4=this;
var _5=["linebreak"];
for(var i=0;i<bl.length;++i){
var _7=bl[i];
if(!_7){
_5.push("separator");
}else{
var id=_7[0];
_2.registerButton(id,this._lc(_7[1]),_1.imgURL("ed_"+_7[0]+".gif","DefinitionList"),false,function(_9,id){
_4.buttonPress(_9,id);
});
_5.push(id);
}
}
_2.toolbar.push(_5);
}
DefinitionList._pluginInfo={name:"DefinitionList",version:"1.0",developer:"Udo Schmal",developer_url:"",c_owner:"Udo Schmal",license:"htmlArea"};
DefinitionList.btnList=[["dl","definition list"],["dt","definition term"],["dd","definition description"]];
DefinitionList.prototype._lc=function(_b){
return Xinha._lc(_b,"DefinitionList");
};
DefinitionList.prototype.onGenerate=function(){
this.editor.addEditorStylesheet(Xinha.getPluginDir("DefinitionList")+"/definition-list.css");
};
DefinitionList.prototype.buttonPress=function(_c,_d){
if(_d=="dl"){
var pe=_c.getParentElement();
while(pe.parentNode.tagName.toLowerCase()!="body"){
pe=pe.parentNode;
}
var dx=_c._doc.createElement(_d);
dx.innerHTML="&nbsp;";
if(pe.parentNode.lastChild==pe){
pe.parentNode.appendChild(dx);
}else{
pe.parentNode.insertBefore(dx,pe.nextSibling);
}
}else{
if((_d=="dt")||(_d=="dd")){
var pe=_c.getParentElement();
while(pe&&(pe.nodeType==1)&&(pe.tagName.toLowerCase()!="body")){
if(pe.tagName.toLowerCase()=="dl"){
var dx=_c._doc.createElement(_d);
dx.innerHTML="&nbsp;";
pe.appendChild(dx);
break;
}else{
if((pe.tagName.toLowerCase()=="dt")||(pe.tagName.toLowerCase()=="dd")){
var dx=_c._doc.createElement(_d);
dx.innerHTML="&nbsp;";
if(pe.parentNode.lastChild==pe){
pe.parentNode.appendChild(dx);
}else{
pe.parentNode.insertBefore(dx,pe.nextSibling);
}
break;
}
}
pe=pe.parentNode;
}
if(pe.tagName.toLowerCase()=="body"){
alert("You can insert a definition term or description only in a definition list!");
}
}
}
};

