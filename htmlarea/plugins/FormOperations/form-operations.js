/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/FormOperations/form-operations.js */
Xinha.Config.prototype.FormOperations={"multiple_field_format":"php","allow_edit_form":false,"default_form_action":Xinha.getPluginDir("FormOperations")+"/formmail.php","default_form_html":Xinha._geturlcontent(Xinha.getPluginDir("FormOperations")+"/default_form.html")};
FormOperations._pluginInfo={name:"FormOperations",version:"1.0",developer:"James Sleeman",developer_url:"http://www.gogo.co.nz/",c_owner:"Gogo Internet Services",license:"htmlArea",sponsor:"Gogo Internet Services",sponsor_url:"http://www.gogo.co.nz/"};
function FormOperations(_1){
this.editor=_1;
this.panel=false;
this.html=false;
this.ready=false;
this.activeElement=null;
this._preparePanel();
_1.config.pageStyleSheets.push(Xinha.getPluginDir("FormOperations")+"/iframe.css");
var _2=["separator","insert_form","insert_text_field","insert_textarea_field","insert_select_field","insert_cb_field","insert_rb_field","insert_button"];
this.editor.config.toolbar.push(_2);
function pasteAndSelect(_3){
var id=Xinha.uniq("fo");
_3=_3.replace(/^<([^ \/>]+)/i,"<$1 id=\""+id+"\"");
_1.insertHTML(_3);
var el=_1._doc.getElementById(id);
el.setAttribute("id","");
_1.selectNodeContents(el);
_1.updateToolbar();
return el;
}
var _6=_1.imgURL("buttons.gif","FormOperations");
FormOperations.prototype._lc=function(_7){
return Xinha._lc(_7,"FormOperations");
};
this.editor.config.btnList.insert_form=[this._lc("Insert a Form."),[_6,0,0],false,function(){
var _8=null;
if(_1.config.FormOperations.default_form_html){
_8=pasteAndSelect(_1.config.FormOperations.default_form_html);
}else{
_8=pasteAndSelect("<form>&nbsp;</form>");
}
if(_1.config.FormOperations.default_form_action&&!_8.action){
_8.action=_1.config.FormOperations.default_form_action;
}
}];
this.editor.config.btnList.insert_text_field=[this._lc("Insert a text, password or hidden field."),[_6,1,0],false,function(){
pasteAndSelect("<input type=\"text\" />");
},"form"];
this.editor.config.btnList.insert_textarea_field=[this._lc("Insert a multi-line text field."),[_6,2,0],false,function(){
pasteAndSelect("<textarea> </textarea>");
},"form"];
this.editor.config.btnList.insert_select_field=[this._lc("Insert a select field."),[_6,3,0],false,function(){
pasteAndSelect("<select> <option value=\"\">Please Select...</option> </select>");
},"form"];
this.editor.config.btnList.insert_cb_field=[this._lc("Insert a check box."),[_6,4,0],false,function(){
pasteAndSelect("<input type=\"checkbox\" />");
},"form"];
this.editor.config.btnList.insert_rb_field=[this._lc("Insert a radio button."),[_6,5,0],false,function(){
pasteAndSelect("<input type=\"radio\" />");
},"form"];
this.editor.config.btnList.insert_button=[this._lc("Insert a submit/reset button."),[_6,6,0],false,function(){
pasteAndSelect("<input type=\"submit\" value=\"Send\" />");
},"form"];
}
FormOperations.prototype.onGenerate=function(){
if(Xinha.is_gecko){
var _9=this.editor;
var _a=this.editor._doc;
Xinha._addEvents(_a,["mousemove"],function(_b){
return _9._editorEvent(_b);
});
}
};
FormOperations.prototype._preparePanel=function(){
var fo=this;
if(this.html==false){
Xinha._getback(Xinha.getPluginDir("FormOperations")+"/panel.html",function(_d){
fo.html=_d;
fo._preparePanel();
});
return false;
}
if(typeof Xinha.Dialog=="undefined"){
Xinha._loadback(_editor_url+"modules/Dialogs/inline-dialog.js",function(){
fo._preparePanel();
});
return false;
}
if(typeof Xinha.PanelDialog=="undefined"){
Xinha._loadback(_editor_url+"modules/Dialogs/panel-dialog.js",function(){
fo._preparePanel();
});
return false;
}
this.panel=new Xinha.PanelDialog(this.editor,"bottom",this.html,"FormOperations");
this.panel.hide();
this.ready=true;
};
FormOperations.prototype.onUpdateToolbar=function(){
if(!this.ready){
return true;
}
var _e=this.editor._activeElement(this.editor._getSelection());
if(_e!=null){
if(_e==this.activeElement){
return true;
}
var _f=_e.tagName.toLowerCase();
this.hideAll();
if(_f==="form"){
if(this.editor.config.FormOperations.allow_edit_form){
this.showForm(_e);
}else{
this.panel.hide();
this.activeElement=null;
this.panel.hide();
return true;
}
}else{
if(this.editor.config.FormOperations.allow_edit_form&&typeof _e.form!="undefined"&&_e.form){
this.showForm(_e.form);
}
switch(_f){
case "form":
this.showForm(_e);
break;
case "input":
switch(_e.getAttribute("type").toLowerCase()){
case "text":
case "password":
case "hidden":
this.showText(_e);
break;
case "radio":
case "checkbox":
this.showCbRd(_e);
break;
case "submit":
case "reset":
case "button":
this.showButton(_e);
break;
}
break;
case "textarea":
this.showTextarea(_e);
break;
case "select":
this.showSelect(_e);
break;
default:
this.activeElement=null;
this.panel.hide();
return true;
}
}
this.panel.show();
this.activeElement=_e;
return true;
}else{
this.activeElement=null;
this.panel.hide();
return true;
}
};
FormOperations.prototype.hideAll=function(){
this.panel.getElementById("fs_form").style.display="none";
this.panel.getElementById("fs_text").style.display="none";
this.panel.getElementById("fs_textarea").style.display="none";
this.panel.getElementById("fs_select").style.display="none";
this.panel.getElementById("fs_cbrd").style.display="none";
this.panel.getElementById("fs_button").style.display="none";
};
FormOperations.prototype.showForm=function(_10){
this.panel.getElementById("fs_form").style.display="";
var _11={"action":_10.action,"method":_10.method.toUpperCase()};
this.panel.setValues(_11);
var f=_10;
this.panel.getElementById("action").onkeyup=function(){
f.action=this.value;
};
this.panel.getElementById("method").onchange=function(){
f.method=this.options[this.selectedIndex].value;
};
};
FormOperations.prototype.showText=function(_13){
this.panel.getElementById("fs_text").style.display="";
var _14={"text_name":this.deformatName(_13,_13.name),"text_value":_13.value,"text_type":_13.type.toLowerCase(),"text_width":_13.style.width?parseFloat(_13.style.width.replace(/[^0-9.]/,"")):"","text_width_units":_13.style.width?_13.style.width.replace(/[0-9.]/,"").toLowerCase():"ex","text_maxlength":_13.maxlength?_13.maxlength:""};
this.panel.setValues(_14);
var i=_13;
var fo=this;
this.panel.getElementById("text_name").onkeyup=function(){
i.name=fo.formatName(i,this.value);
};
this.panel.getElementById("text_value").onkeyup=function(){
i.value=this.value;
};
this.panel.getElementById("text_type").onchange=function(){
if(!Xinha.is_ie){
i.type=this.options[this.selectedIndex].value;
}else{
var _17=fo.editor._doc.createElement("div");
if(!/type=/.test(i.outerHTML)){
_17.innerHTML=i.outerHTML.replace(/<INPUT/i,"<input type=\""+this.options[this.selectedIndex].value+"\"");
}else{
_17.innerHTML=i.outerHTML.replace(/type="?[a-z]+"?/i,"type=\""+this.options[this.selectedIndex].value+"\"");
}
var _18=Xinha.removeFromParent(_17.childNodes[0]);
i.parentNode.insertBefore(_18,i);
Xinha.removeFromParent(i);
_13=i=_18;
}
};
var w=this.panel.getElementById("text_width");
var wu=this.panel.getElementById("text_width_units");
this.panel.getElementById("text_width").onkeyup=this.panel.getElementById("text_width_units").onchange=function(){
if(!w.value||isNaN(parseFloat(w.value))){
i.style.width="";
}
i.style.width=parseFloat(w.value)+wu.options[wu.selectedIndex].value;
};
this.panel.getElementById("text_maxlength").onkeyup=function(){
i.maxlength=this.value;
};
};
FormOperations.prototype.showCbRd=function(_1b){
this.panel.getElementById("fs_cbrd").style.display="";
var _1c={"cbrd_name":this.deformatName(_1b,_1b.name),"cbrd_value":_1b.value,"cbrd_checked":_1b.checked?1:0,"cbrd_type":_1b.type.toLowerCase()};
this.panel.setValues(_1c);
var i=_1b;
var fo=this;
this.panel.getElementById("cbrd_name").onkeyup=function(){
i.name=fo.formatName(i,this.value);
};
this.panel.getElementById("cbrd_value").onkeyup=function(){
i.value=this.value;
};
this.panel.getElementById("cbrd_type").onchange=function(){
if(!Xinha.is_ie){
i.type=this.options[this.selectedIndex].value;
}else{
var _1f=fo.editor._doc.createElement("div");
if(!/type=/.test(i.outerHTML)){
_1f.innerHTML=i.outerHTML.replace(/<INPUT/i,"<input type=\""+this.options[this.selectedIndex].value+"\"");
}else{
_1f.innerHTML=i.outerHTML.replace(/type="?[a-z]+"?/i,"type=\""+this.options[this.selectedIndex].value+"\"");
}
var _20=Xinha.removeFromParent(_1f.childNodes[0]);
i.parentNode.insertBefore(_20,i);
Xinha.removeFromParent(i);
_1b=i=_20;
}
};
this.panel.getElementById("cbrd_checked").onclick=function(){
i.checked=this.checked;
};
};
FormOperations.prototype.showButton=function(_21){
this.panel.getElementById("fs_button").style.display="";
var _22={"button_name":this.deformatName(_21,_21.name),"button_value":_21.value,"button_type":_21.type.toLowerCase()};
this.panel.setValues(_22);
var i=_21;
var fo=this;
this.panel.getElementById("button_name").onkeyup=function(){
i.name=fo.formatName(i,this.value);
};
this.panel.getElementById("button_value").onkeyup=function(){
i.value=this.value;
};
this.panel.getElementById("button_type").onchange=function(){
if(!Xinha.is_ie){
i.type=this.options[this.selectedIndex].value;
}else{
var _25=fo.editor._doc.createElement("div");
if(!/type=/.test(i.outerHTML)){
_25.innerHTML=i.outerHTML.replace(/<INPUT/i,"<input type=\""+this.options[this.selectedIndex].value+"\"");
}else{
_25.innerHTML=i.outerHTML.replace(/type="?[a-z]+"?/i,"type=\""+this.options[this.selectedIndex].value+"\"");
}
var _26=Xinha.removeFromParent(_25.childNodes[0]);
i.parentNode.insertBefore(_26,i);
Xinha.removeFromParent(i);
_21=i=_26;
}
};
};
FormOperations.prototype.showTextarea=function(_27){
this.panel.getElementById("fs_textarea").style.display="";
var _28={"textarea_name":this.deformatName(_27,_27.name),"textarea_value":_27.value,"textarea_width":_27.style.width?parseFloat(_27.style.width.replace(/[^0-9.]/,"")):"","textarea_width_units":_27.style.width?_27.style.width.replace(/[0-9.]/,"").toLowerCase():"ex","textarea_height":_27.style.height?parseFloat(_27.style.height.replace(/[^0-9.]/,"")):"","textarea_height_units":_27.style.height?_27.style.height.replace(/[0-9.]/,"").toLowerCase():"ex"};
this.panel.setValues(_28);
var i=_27;
var fo=this;
this.panel.getElementById("textarea_name").onkeyup=function(){
i.name=fo.formatName(i,this.value);
};
this.panel.getElementById("textarea_value").onkeyup=function(){
i.value=i.innerHTML=this.value;
};
var w=this.panel.getElementById("textarea_width");
var wu=this.panel.getElementById("textarea_width_units");
this.panel.getElementById("textarea_width").onkeyup=this.panel.getElementById("textarea_width_units").onchange=function(){
if(!w.value||isNaN(parseFloat(w.value))){
i.style.width="";
}
i.style.width=parseFloat(w.value)+wu.options[wu.selectedIndex].value;
};
var h=this.panel.getElementById("textarea_height");
var hu=this.panel.getElementById("textarea_height_units");
this.panel.getElementById("textarea_height").onkeyup=this.panel.getElementById("textarea_height_units").onchange=function(){
if(!h.value||isNaN(parseFloat(h.value))){
i.style.height="";
}
i.style.height=parseFloat(h.value)+hu.options[hu.selectedIndex].value;
};
};
FormOperations.prototype.showSelect=function(_2f){
this.panel.getElementById("fs_select").style.display="";
var _30={"select_name":this.deformatName(_2f,_2f.name),"select_multiple":_2f.multiple?1:0,"select_width":_2f.style.width?parseFloat(_2f.style.width.replace(/[^0-9.]/,"")):"","select_width_units":_2f.style.width?_2f.style.width.replace(/[0-9.]/,"").toLowerCase():"ex","select_height":_2f.style.height?parseFloat(_2f.style.height.replace(/[^0-9.]/,"")):(_2f.size&&_2f.size>0?_2f.size:1),"select_height_units":_2f.style.height?_2f.style.height.replace(/[0-9.]/,"").toLowerCase():"items"};
this.panel.setValues(_30);
var i=_2f;
var fo=this;
this.panel.getElementById("select_name").onkeyup=function(){
i.name=fo.formatName(i,this.value);
};
this.panel.getElementById("select_multiple").onclick=function(){
i.multiple=this.checked;
};
var w=this.panel.getElementById("select_width");
var wu=this.panel.getElementById("select_width_units");
this.panel.getElementById("select_width").onkeyup=this.panel.getElementById("select_width_units").onchange=function(){
if(!w.value||isNaN(parseFloat(w.value))){
i.style.width="";
}
i.style.width=parseFloat(w.value)+wu.options[wu.selectedIndex].value;
};
var h=this.panel.getElementById("select_height");
var hu=this.panel.getElementById("select_height_units");
this.panel.getElementById("select_height").onkeyup=this.panel.getElementById("select_height_units").onchange=function(){
if(!h.value||isNaN(parseFloat(h.value))){
i.style.height="";
return;
}
if(hu.selectedIndex==0){
i.style.height="";
i.size=parseInt(h.value);
}else{
i.style.height=parseFloat(h.value)+hu.options[hu.selectedIndex].value;
}
};
var _37=this.panel.getElementById("select_options");
this.arrayToOpts(this.optsToArray(_2f.options),_37.options);
this.panel.getElementById("add_option").onclick=function(){
var txt=prompt(Xinha._lc("Enter the name for new option.","FormOperations"));
if(txt==null){
return;
}
var _39=new Option(txt);
var _3a=fo.optsToArray(_37.options);
if(_37.selectedIndex>=0){
_3a.splice(_37.selectedIndex,0,_39);
}else{
_3a.push(_39);
}
fo.arrayToOpts(_3a,_2f.options);
fo.arrayToOpts(_3a,_37.options);
};
this.panel.getElementById("del_option").onclick=function(){
var _3b=fo.optsToArray(_37.options);
var _3c=[];
for(var i=0;i<_3b.length;i++){
if(_3b[i].selected){
continue;
}
_3c.push(_3b[i]);
}
fo.arrayToOpts(_3c,_2f.options);
fo.arrayToOpts(_3c,_37.options);
};
this.panel.getElementById("up_option").onclick=function(){
if(!(_37.selectedIndex>0)){
return;
}
var _3e=fo.optsToArray(_37.options);
var _3f=_3e.splice(_37.selectedIndex,1).pop();
_3e.splice(_37.selectedIndex-1,0,_3f);
fo.arrayToOpts(_3e,_2f.options);
fo.arrayToOpts(_3e,_37.options);
};
this.panel.getElementById("down_option").onclick=function(){
if(_37.selectedIndex==_37.options.length-1){
return;
}
var _40=fo.optsToArray(_37.options);
var _41=_40.splice(_37.selectedIndex,1).pop();
_40.splice(_37.selectedIndex+1,0,_41);
fo.arrayToOpts(_40,_2f.options);
fo.arrayToOpts(_40,_37.options);
};
this.panel.getElementById("select_options").onchange=function(){
fo.arrayToOpts(fo.optsToArray(_37.options),_2f.options);
};
};
FormOperations.prototype.optsToArray=function(o){
var a=[];
for(var i=0;i<o.length;i++){
a.push({"text":o[i].text,"value":o[i].value,"defaultSelected":o[i].defaultSelected,"selected":o[i].selected});
}
return a;
};
FormOperations.prototype.arrayToOpts=function(a,o){
for(var i=o.length-1;i>=0;i--){
o[i]=null;
}
for(var i=0;i<a.length;i++){
o[i]=new Option(a[i].text,a[i].value,a[i].defaultSelected,a[i].selected);
}
};
FormOperations.prototype.formatName=function(_48,_49){
var _4a=_49;
switch(this.editor.config.FormOperations.multiple_field_format){
case "php":
_4a+="[]";
break;
case "unmodified":
break;
default:
throw ("Unknown multiple field format "+this.editor.config.FormOperations.multiple_field_format);
}
if((_48.tagName.toLowerCase()=="select"&&_48.multiple)||(_48.tagName.toLowerCase()=="input"&&_48.type.toLowerCase()=="checkbox")){
_49=_4a;
}
return _49;
};
FormOperations.prototype.deformatName=function(_4b,_4c){
if(this.editor.config.FormOperations.multiple_field_format=="php"){
_4c=_4c.replace(/\[\]$/,"");
}
return _4c;
};

