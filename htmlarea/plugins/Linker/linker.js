/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Linker/linker.js */
Linker._pluginInfo={name:"Linker",version:"1.0",developer:"James Sleeman",developer_url:"http://www.gogo.co.nz/",c_owner:"Gogo Internet Services",license:"htmlArea",sponsor:"Gogo Internet Services",sponsor_url:"http://www.gogo.co.nz/"};
Xinha.loadStyle("dTree/dtree.css","Linker");
Xinha.Config.prototype.Linker={"treeCaption":document.location.host,"backend":Xinha.getPluginDir("Linker")+"/scan.php","backend_data":null,"files":null};
function Linker(_1,_2){
this.editor=_1;
this.lConfig=_1.config.Linker;
var _3=this;
if(_1.config.btnList.createlink){
_1.config.btnList.createlink[3]=function(e,_5,_6){
_3._createLink(_3._getSelectedAnchor());
};
}else{
_1.config.registerButton("createlink","Insert/Modify Hyperlink",[_editor_url+"images/ed_buttons_main.gif",6,1],false,function(e,_8,_9){
_3._createLink(_3._getSelectedAnchor());
});
}
_1.config.addToolbarElement("createlink","createlink",0);
}
Linker.prototype._lc=function(_a){
return Xinha._lc(_a,"Linker");
};
Linker.prototype._createLink=function(a){
if(!a&&this.editor.selectionEmpty(this.editor.getSelection())){
alert(this._lc("You must select some text before making a new link."));
return false;
}
var _c={type:"url",href:"http://www.example.com/",target:"",p_width:"",p_height:"",p_options:["menubar=no","toolbar=yes","location=no","status=no","scrollbars=yes","resizeable=yes"],to:"alice@example.com",subject:"",body:"",anchor:""};
if(a&&a.tagName.toLowerCase()=="a"){
var _d=this.editor.fixRelativeLinks(a.getAttribute("href"));
var m=_d.match(/^mailto:(.*@[^?&]*)(\?(.*))?$/);
var _f=_d.match(/^#(.*)$/);
if(m){
_c.type="mailto";
_c.to=m[1];
if(m[3]){
var _10=m[3].split("&");
for(var x=0;x<_10.length;x++){
var j=_10[x].match(/(subject|body)=(.*)/);
if(j){
_c[j[1]]=decodeURIComponent(j[2]);
}
}
}
}else{
if(_f){
_c.type="anchor";
_c.anchor=_f[1];
}else{
if(a.getAttribute("onclick")){
var m=a.getAttribute("onclick").match(/window\.open\(\s*this\.href\s*,\s*'([a-z0-9_]*)'\s*,\s*'([a-z0-9_=,]*)'\s*\)/i);
_c.href=_d?_d:"";
_c.target="popup";
_c.p_name=m[1];
_c.p_options=[];
var _10=m[2].split(",");
for(var x=0;x<_10.length;x++){
var i=_10[x].match(/(width|height)=([0-9]+)/);
if(i){
_c["p_"+i[1]]=parseInt(i[2]);
}else{
_c.p_options.push(_10[x]);
}
}
}else{
_c.href=_d;
_c.target=a.target;
}
}
}
}
var _14=this;
this.a=a;
var _15=function(){
var a=_14.a;
var _17=_14._dialog.hide();
var atr={href:"",target:"",title:"",onclick:""};
if(_17.type=="url"){
if(_17.href){
atr.href=_17.href;
atr.target=_17.target;
if(_17.target=="popup"){
if(_17.p_width){
_17.p_options.push("width="+_17.p_width);
}
if(_17.p_height){
_17.p_options.push("height="+_17.p_height);
}
atr.onclick="if(window.top && window.top.Xinha){return false}window.open(this.href, '"+(_17.p_name.replace(/[^a-z0-9_]/i,"_"))+"', '"+_17.p_options.join(",")+"');return false;";
}
}
}else{
if(_17.type=="anchor"){
if(_17.anchor){
atr.href=_17.anchor.value;
}
}else{
if(_17.to){
atr.href="mailto:"+_17.to;
if(_17.subject){
atr.href+="?subject="+encodeURIComponent(_17.subject);
}
if(_17.body){
atr.href+=(_17.subject?"&":"?")+"body="+encodeURIComponent(_17.body);
}
}
}
}
if(a&&a.tagName.toLowerCase()=="a"){
if(!atr.href){
if(confirm(_14._dialog._lc("Are you sure you wish to remove this link?"))){
var p=a.parentNode;
while(a.hasChildNodes()){
p.insertBefore(a.removeChild(a.childNodes[0]),a);
}
p.removeChild(a);
_14.editor.updateToolbar();
return;
}
}else{
for(var i in atr){
a.setAttribute(i,atr[i]);
}
if(Xinha.is_ie){
if(/mailto:([^?<>]*)(\?[^<]*)?$/i.test(a.innerHTML)){
a.innerHTML=RegExp.$1;
}
}
}
}else{
if(!atr.href){
return true;
}
var tmp=Xinha.uniq("http://www.example.com/Link");
_14.editor._doc.execCommand("createlink",false,tmp);
var _1c=_14.editor._doc.getElementsByTagName("a");
for(var i=0;i<_1c.length;i++){
var _1d=_1c[i];
if(_1d.href==tmp){
if(!a){
a=_1d;
}
for(var j in atr){
_1d.setAttribute(j,atr[j]);
}
}
}
}
_14.editor.selectNodeContents(a);
_14.editor.updateToolbar();
};
this._dialog.show(_c,_15);
};
Linker.prototype._getSelectedAnchor=function(){
var sel=this.editor.getSelection();
var rng=this.editor.createRange(sel);
var a=this.editor.activeElement(sel);
if(a!=null&&a.tagName.toLowerCase()=="a"){
return a;
}else{
a=this.editor._getFirstAncestor(sel,"a");
if(a!=null){
return a;
}
}
return null;
};
Linker.prototype.onGenerateOnce=function(){
this._dialog=new Linker.Dialog(this);
};
Linker.Dialog_dTrees=[];
Linker.Dialog=function(_22){
var _23=this;
this.Dialog_nxtid=0;
this.linker=_22;
this.id={};
this.ready=false;
this.files=false;
this.html=false;
this.dialog=false;
this._prepareDialog();
};
Linker.Dialog.prototype._prepareDialog=function(){
var _24=this;
var _25=this.linker;
if(typeof dTree=="undefined"){
Xinha._loadback(Xinha.getPluginDir("Linker")+"/dTree/dtree.js",function(){
_24._prepareDialog();
});
return;
}
if(this.files===false){
if(_25.lConfig.backend){
Xinha._postback(_25.lConfig.backend,_25.lConfig.backend_data,function(txt){
try{
_24.files=eval(txt);
}
catch(Error){
_24.files=[{url:"",title:Error.toString()}];
}
_24._prepareDialog();
});
}else{
if(_25.lConfig.files!=null){
_24.files=_25.lConfig.files;
_24._prepareDialog();
}
}
return;
}
var _27=this.files;
if(this.html==false){
Xinha._getback(Xinha.getPluginDir("Linker")+"/dialog.html",function(txt){
_24.html=txt;
_24._prepareDialog();
});
return;
}
var _29=this.html;
var _2a=this.dialog=new Xinha.Dialog(_25.editor,this.html,"Linker");
var _2b=Xinha.uniq("dTree_");
this.dTree=new dTree(_2b,Xinha.getPluginDir("Linker")+"/dTree/");
eval(_2b+" = this.dTree");
this.dTree.add(this.Dialog_nxtid++,-1,_25.lConfig.treeCaption,null,_25.lConfig.treeCaption);
this.makeNodes(_27,0);
var _2c=this.dialog.getElementById("dTree");
_2c.innerHTML="";
_2c.style.position="absolute";
_2c.style.left=1+"px";
_2c.style.top=0+"px";
_2c.style.overflow="auto";
_2c.style.backgroundColor="white";
this.ddTree=_2c;
this.dTree._linker_premade=this.dTree.toString();
var _2d=this.dialog.getElementById("options");
_2d.style.position="absolute";
_2d.style.top=0+"px";
_2d.style.right=0+"px";
_2d.style.width=320+"px";
_2d.style.overflow="auto";
this.dialog.onresize=function(){
var h=parseInt(_2a.height)-_2a.getElementById("h1").offsetHeight;
var w=parseInt(_2a.width)-322;
if(w<0){
w=0;
}
if(h<0){
h=0;
}
_2d.style.height=_2c.style.height=h+"px";
_2c.style.width=w+"px";
};
this.ready=true;
};
Linker.Dialog.prototype.makeNodes=function(_30,_31){
for(var i=0;i<_30.length;i++){
if(typeof _30[i]=="string"){
this.dTree.add(Linker.nxtid++,_31,_30[i].replace(/^.*\//,""),"javascript:document.getElementsByName('"+this.dialog.id.href+"')[0].value=decodeURIComponent('"+encodeURIComponent(_30[i])+"');document.getElementsByName('"+this.dialog.id.type+"')[0].click();document.getElementsByName('"+this.dialog.id.href+"')[0].focus();void(0);",_30[i]);
}else{
if(typeof _30[i]=="object"&&_30[i]&&typeof _30[i].length==="number"){
var id=this.Dialog_nxtid++;
this.dTree.add(id,_31,_30[i][0].replace(/^.*\//,""),null,_30[i][0]);
this.makeNodes(_30[i][1],id);
}else{
if(typeof _30[i]=="object"){
if(_30[i].children){
var id=this.Dialog_nxtid++;
}else{
var id=Linker.nxtid++;
}
if(_30[i].title){
var _34=_30[i].title;
}else{
if(_30[i].url){
var _34=_30[i].url.replace(/^.*\//,"");
}else{
var _34="no title defined";
}
}
if(_30[i].url){
var _35="javascript:document.getElementsByName('"+this.dialog.id.href+"')[0].value=decodeURIComponent('"+encodeURIComponent(_30[i].url)+"');document.getElementsByName('"+this.dialog.id.type+"')[0].click();document.getElementsByName('"+this.dialog.id.href+"')[0].focus();void(0);";
}else{
var _35="";
}
this.dTree.add(id,_31,_34,_35,_34);
if(_30[i].children){
this.makeNodes(_30[i].children,id);
}
}
}
}
}
};
Linker.Dialog.prototype._lc=Linker.prototype._lc;
Linker.Dialog.prototype.show=function(_36,ok,_38){
if(!this.ready){
var _39=this;
window.setTimeout(function(){
_39.show(_36,ok,_38);
},100);
return;
}
if(this.ddTree.innerHTML==""){
this.ddTree.innerHTML=this.dTree._linker_premade;
}
if(_36.type=="url"){
this.dialog.getElementById("urltable").style.display="";
this.dialog.getElementById("mailtable").style.display="none";
this.dialog.getElementById("anchortable").style.display="none";
}else{
if(_36.type=="anchor"){
this.dialog.getElementById("urltable").style.display="none";
this.dialog.getElementById("mailtable").style.display="none";
this.dialog.getElementById("anchortable").style.display="";
}else{
this.dialog.getElementById("urltable").style.display="none";
this.dialog.getElementById("mailtable").style.display="";
this.dialog.getElementById("anchortable").style.display="none";
}
}
if(_36.target=="popup"){
this.dialog.getElementById("popuptable").style.display="";
}else{
this.dialog.getElementById("popuptable").style.display="none";
}
var _3a=this.dialog.getElementById("anchor");
for(var i=_3a.length;i>=0;i--){
_3a[i]=null;
}
var _3c=this.linker.editor.getHTML();
var _3d=new Array();
var m=_3c.match(/<a[^>]+name="([^"]+)"/gi);
if(m){
for(i=0;i<m.length;i++){
var n=m[i].match(/name="([^"]+)"/i);
if(!_3d.contains(n[1])){
_3d.push(n[1]);
}
}
}
m=_3c.match(/id="([^"]+)"/gi);
if(m){
for(i=0;i<m.length;i++){
n=m[i].match(/id="([^"]+)"/i);
if(!_3d.contains(n[1])){
_3d.push(n[1]);
}
}
}
for(i=0;i<_3d.length;i++){
var opt=new Option(_3d[i],"#"+_3d[i],false,(_36.anchor==_3d[i]));
_3a[_3a.length]=opt;
}
if(_3a.length==0){
this.dialog.getElementById("anchorfieldset").style.display="none";
}
if(_36.href=="http://www.example.com/"&&_36.to=="alice@example.com"){
this.dialog.getElementById("clear").style.display="none";
}else{
this.dialog.getElementById("clear").style.display="";
}
var _41=this.dialog;
var _39=this;
if(ok){
this.dialog.getElementById("ok").onclick=ok;
}else{
this.dialog.getElementById("ok").onclick=function(){
_39.hide();
};
}
if(_38){
this.dialog.getElementById("cancel").onclick=_38;
}else{
this.dialog.getElementById("cancel").onclick=function(){
_39.hide();
};
}
this.linker.editor.disableToolbar(["fullscreen","linker"]);
this.dialog.show(_36);
this.dialog.onresize();
};
Linker.Dialog.prototype.hide=function(){
this.linker.editor.enableToolbar();
return this.dialog.hide();
};

