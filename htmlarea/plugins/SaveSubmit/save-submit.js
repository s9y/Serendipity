/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/SaveSubmit/save-submit.js */
function SaveSubmit(_1){
this.editor=_1;
this.changed=false;
var _2=this;
var _3=_1.config;
this.textarea=this.editor._textArea;
this.image_changed=Xinha.getPluginDir("SaveSubmit")+"/img/ed_save_red.gif";
this.image_unchanged=Xinha.getPluginDir("SaveSubmit")+"/img/ed_save_green.gif";
_3.registerButton({id:"savesubmit",tooltip:_2._lc("Save"),image:this.image_unchanged,textMode:false,action:function(){
_2.save();
}});
_3.addToolbarElement("savesubmit","popupeditor",-1);
}
SaveSubmit.prototype._lc=function(_4){
return Xinha._lc(_4,"SaveSubmit");
};
SaveSubmit._pluginInfo={name:"SaveSubmit",version:"1.0",developer:"Raimund Meyer",developer_url:"http://rheinauf.de",c_owner:"Raimund Meyer",sponsor:"",sponsor_url:"",license:"htmlArea"};
SaveSubmit.prototype.onGenerateOnce=function(){
this.initial_html=this.editor.getInnerHTML();
};
SaveSubmit.prototype.onKeyPress=function(ev){
if(ev.ctrlKey&&this.editor.getKey(ev)=="s"){
this.save(this.editor);
Xinha._stopEvent(ev);
return true;
}else{
if(!this.changed){
if(this.getChanged()){
this.setChanged();
}
return false;
}
}
};
SaveSubmit.prototype.onExecCommand=function(_6){
if(this.changed&&_6=="undo"){
if(this.initial_html==this.editor.getInnerHTML()){
this.setUnChanged();
}
return false;
}
};
SaveSubmit.prototype.onUpdateToolbar=function(){
if(!this.changed){
if(this.getChanged()){
this.setChanged();
}
return false;
}
};
SaveSubmit.prototype.getChanged=function(){
if(this.initial_html===null){
this.initial_html=this.editor.getInnerHTML();
}
if(this.initial_html!=this.editor.getInnerHTML()&&this.changed==false){
this.changed=true;
return true;
}else{
return false;
}
};
SaveSubmit.prototype.setChanged=function(){
this.editor._toolbarObjects.savesubmit.swapImage(this.image_changed);
this.editor.updateToolbar();
};
SaveSubmit.prototype.setUnChanged=function(){
this.changed=false;
this.editor._toolbarObjects.savesubmit.swapImage(this.image_unchanged);
};
SaveSubmit.prototype.changedReset=function(){
this.initial_html=null;
this.setUnChanged();
};
SaveSubmit.prototype.save=function(){
this.buildMessage();
var _7=this.editor;
var _8=this;
var _9=_7._textArea.form;
_9.onsubmit();
var _a,value,content="";
for(var i=0;i<_9.elements.length;i++){
if((_9.elements[i].type=="checkbox"||_9.elements[i].type=="radio")&&!_9.elements[i].checked){
continue;
}
content+=((i>0)?"&":"")+_9.elements[i].name+"="+encodeURIComponent(_9.elements[i].value);
}
Xinha._postback(_7._textArea.form.action,content,function(_c){
if(_c){
_8.setMessage(_c);
_8.changedReset();
}
removeMessage=function(){
_8.removeMessage();
};
window.setTimeout("removeMessage()",1000);
});
};
SaveSubmit.prototype.setMessage=function(_d){
var _e=this.textarea;
if(!document.getElementById("message_sub_"+_e.id)){
return;
}
var _f=document.getElementById("message_sub_"+_e.id);
_f.innerHTML=Xinha._lc(_d,"SaveSubmit");
};
SaveSubmit.prototype.removeMessage=function(){
var _10=this.textarea;
if(!document.getElementById("message_"+_10.id)){
return;
}
document.body.removeChild(document.getElementById("message_"+_10.id));
};
SaveSubmit.prototype.buildMessage=function(){
var _11=this.textarea;
var _12=this.editor._htmlArea;
var _13=document.createElement("div");
_13.id="message_"+_11.id;
_13.className="loading";
_13.style.width=_12.offsetWidth+"px";
_13.style.left=Xinha.findPosX(_12)+"px";
_13.style.top=(Xinha.findPosY(_12)+parseInt(_12.offsetHeight)/2)-50+"px";
var _14=document.createElement("div");
_14.className="loading_main";
_14.id="loading_main_"+_11.id;
_14.appendChild(document.createTextNode(this._lc("Saving...")));
var _15=document.createElement("div");
_15.className="loading_sub";
_15.id="message_sub_"+_11.id;
_15.appendChild(document.createTextNode(this._lc("in progress")));
_13.appendChild(_14);
_13.appendChild(_15);
document.body.appendChild(_13);
};

