/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Forms/forms.js */
function Forms(_1){
this.editor=_1;
var _2=_1.config;
var bl=Forms.btnList;
var _4=this;
var _5=["linebreak"];
for(var i=0;i<bl.length;++i){
var _7=bl[i];
if(!_7){
_5.push("separator");
}else{
var id=_7[0];
if(i<3){
_2.registerButton(id,this._lc(_7[1]),_1.imgURL("ed_"+_7[0]+".gif","Forms"),false,function(_9,id){
_4.buttonPress(_9,id);
});
}else{
_2.registerButton(id,this._lc(_7[1]),_1.imgURL("ed_"+_7[0]+".gif","Forms"),false,function(_b,id){
_4.buttonPress(_b,id);
},"form");
}
_5.push(id);
}
}
_2.toolbar.push(_5);
}
Forms._pluginInfo={name:"Forms",origin:"version: 1.0, by Nelson Bright, BrightWork, Inc., http://www.brightworkweb.com",version:"2.0",developer:"Udo Schmal",developer_url:"",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de/",c_owner:"Udo Schmal & Schaffrath-NeueMedien",license:"htmlArea"};
Forms.btnList=[null,["form","Form"],null,["textarea","Textarea"],["select","Selection Field"],["checkbox","Checkbox"],["radio","Radio Button"],["text","Text Field"],["password","Password Field"],["file","File Field"],["button","Button"],["submit","Submit Button"],["reset","Reset Button"],["image","Image Button"],["hidden","Hidden Field"],["label","Label"],["fieldset","Field Set"]];
Forms.prototype._lc=function(_d){
return Xinha._lc(_d,"Forms");
};
Forms.prototype.onGenerate=function(){
this.editor.addEditorStylesheet(Xinha.getPluginDir("Forms")+"/forms.css");
};
Forms.prototype.buttonPress=function(_e,_f,_10){
function optionValues(_11,_12){
this.text=_11;
this.value=_12;
}
var _13=new Object();
var _14=_f;
var sel=_e._getSelection();
var _16=_e._createRange(sel);
if(_f=="form"){
var pe=_e.getParentElement();
var frm=null;
while(pe&&(pe.nodeType==1)&&(pe.tagName.toLowerCase()!="body")){
if(pe.tagName.toLowerCase()=="form"){
frm=pe;
break;
}else{
pe=pe.parentNode;
}
}
if(frm){
_13.f_name=frm.name;
_13.f_action=frm.action;
_13.f_method=frm.method;
_13.f_enctype=frm.enctype;
_13.f_target=frm.target;
}else{
_13.f_name="";
_13.f_action="";
_13.f_method="";
_13.f_enctype="";
_13.f_target="";
}
_e._popupDialog("plugin://Forms/form",function(_19){
if(_19){
if(frm){
frm.name=_19["f_name"];
frm.setAttribute("action",_19["f_action"]);
frm.setAttribute("method",_19["f_method"]);
frm.setAttribute("enctype",_19["f_enctype"]);
frm.setAttribute("target",_19["f_target"]);
}else{
frm="<form name=\""+_19["f_name"]+"\"";
if(_19["f_action"]!=""){
frm+=" action=\""+_19["f_action"]+"\"";
}
if(_19["f_method"]!=""){
frm+=" method=\""+_19["f_method"]+"\"";
}
if(_19["f_enctype"]!=""){
frm+=" enctype=\""+_19["f_enctype"]+"\"";
}
if(_19["f_target"]!=""){
frm+=" target=\""+_19["f_target"]+"\"";
}
frm+=">";
_e.surroundHTML(frm,"&nbsp;</form>");
}
}
},_13);
}else{
var _1a="";
if(typeof _10=="undefined"){
_10=_e.getParentElement();
var tag=_10.tagName.toLowerCase();
if(_10&&(tag=="legend")){
_10=_10.parentElement;
tag=_10.tagName.toLowerCase();
}
if(_10&&!(tag=="textarea"||tag=="select"||tag=="input"||tag=="label"||tag=="fieldset")){
_10=null;
}
}
if(_10){
_14=_10.tagName.toLowerCase();
_13.f_name=_10.name;
_1a=_10.tagName;
if(_14=="input"){
_13.f_type=_10.type;
_14=_10.type;
}
switch(_14){
case "textarea":
_13.f_cols=_10.cols;
_13.f_rows=_10.rows;
_13.f_text=_10.innerHTML;
_13.f_wrap=_10.getAttribute("wrap");
_13.f_readOnly=_10.getAttribute("readOnly");
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "select":
_13.f_size=parseInt(_10.size);
_13.f_multiple=_10.getAttribute("multiple");
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
var _1c=new Array();
for(var i=0;i<=_10.options.length-1;i++){
_1c[i]=new optionValues(_10.options[i].text,_10.options[i].value);
}
_13.f_options=_1c;
break;
case "text":
case "password":
_13.f_value=_10.value;
_13.f_size=_10.size;
_13.f_maxLength=_10.maxLength;
_13.f_readOnly=_10.getAttribute("readOnly");
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "hidden":
_13.f_value=_10.value;
break;
case "submit":
case "reset":
_13.f_value=_10.value;
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "checkbox":
case "radio":
_13.f_value=_10.value;
_13.f_checked=_10.checked;
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "button":
_13.f_value=_10.value;
_13.f_onclick=_10.getAttribute("onclick");
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "image":
_13.f_value=_10.value;
_13.f_src=_10.src;
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "file":
_13.f_disabled=_10.getAttribute("disabled");
_13.f_tabindex=_10.getAttribute("tabindex");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "label":
_13.f_text=_10.innerHTML;
_13.f_for=_10.getAttribute("for");
_13.f_accesskey=_10.getAttribute("accesskey");
break;
case "fieldset":
if(_10.firstChild.tagName.toLowerCase()=="legend"){
_13.f_text=_10.firstChild.innerHTML;
}else{
_13.f_text="";
}
break;
}
}else{
_13.f_name="";
switch(_f){
case "textarea":
case "select":
case "label":
case "fieldset":
_1a=_f;
break;
default:
_1a="input";
_13.f_type=_f;
break;
}
_13.f_options="";
_13.f_cols="20";
_13.f_rows="4";
_13.f_multiple="false";
_13.f_value="";
_13.f_size="";
_13.f_maxLength="";
_13.f_checked="";
_13.f_src="";
_13.f_onclick="";
_13.f_wrap="";
_13.f_readOnly="false";
_13.f_disabled="false";
_13.f_tabindex="";
_13.f_accesskey="";
_13.f_for="";
_13.f_text="";
_13.f_legend="";
}
_e._popupDialog("plugin://Forms/"+_1a+".html",function(_1e){
if(_1e){
if(_1e["f_cols"]){
if(isNaN(parseInt(_1e["f_cols"],10))||parseInt(_1e["f_cols"],10)<=0){
_1e["f_cols"]="";
}
}
if(_1e["f_rows"]){
if(isNaN(parseInt(_1e["f_rows"],10))||parseInt(_1e["f_rows"],10)<=0){
_1e["f_rows"]="";
}
}
if(_1e["f_size"]){
if(isNaN(parseInt(_1e["f_size"],10))||parseInt(_1e["f_size"],10)<=0){
_1e["f_size"]="";
}
}
if(_1e["f_maxlength"]){
if(isNaN(parseInt(_1e["f_maxLength"],10))||parseInt(_1e["f_maxLength"],10)<=0){
_1e["f_maxLength"]="";
}
}
if(_10){
for(field in _1e){
if((field=="f_text")||(field=="f_options")||(field=="f_onclick")||(field=="f_checked")){
continue;
}
if(_1e[field]!=""){
_10.setAttribute(field.substring(2,20),_1e[field]);
}else{
_10.removeAttribute(field.substring(2,20));
}
}
if(_14=="textarea"){
_10.innerHTML=_1e["f_text"];
}else{
if(_14=="select"){
_10.options.length=0;
var _1f=_1e["f_options"];
for(i=0;i<=_1f.length-1;i++){
_10.options[i]=new Option(_1f[i].text,_1f[i].value);
}
}else{
if(_14=="label"){
_10.innerHTML=_1e["f_text"];
}else{
if(_14=="fieldset"){
if(_13.f_text!=""){
if(_10.firstChild.tagName.toLowerCase()=="legend"){
_10.firstChild.innerHTML=_1e["f_text"];
}
}else{
}
}else{
if((_14=="checkbox")||(_14=="radio")){
if(_1e["f_checked"]!=""){
_10.checked=true;
}else{
_10.checked=false;
}
}else{
if(_1e["f_onclick"]){
_10.onclick="";
if(_1e["f_onclick"]!=""){
_10.onclick=_1e["f_onclick"];
}
}
}
}
}
}
}
}else{
var _20="";
for(field in _1e){
if(!_1e[field]){
continue;
}
if((_1e[field]=="")||(field=="f_text")||(field=="f_options")){
continue;
}
_20+=" "+field.substring(2,20)+"=\""+_1e[field]+"\"";
}
if(_14=="textarea"){
_20="<textarea"+_20+">"+_1e["f_text"]+"</textarea>";
}else{
if(_14=="select"){
_20="<select"+_20+">";
var _1f=_1e["f_options"];
for(i=0;i<=_1f.length-1;i++){
_20+="<option value=\""+_1f[i].value+"\">"+_1f[i].text+"</option>";
}
_20+="</select>";
}else{
if(_14=="label"){
_20="<label"+_20+">"+_1e["f_text"]+"</label>";
}else{
if(_14=="fieldset"){
_20="<fieldset"+_20+">";
if(_1e["f_legend"]!=""){
_20+="<legend>"+_1e["f_text"]+"</legend>";
}
_20+="</fieldset>";
}else{
_20="<input type=\""+_14+"\""+_20+">";
}
}
}
}
_e.insertHTML(_20);
}
}
},_13);
}
};

