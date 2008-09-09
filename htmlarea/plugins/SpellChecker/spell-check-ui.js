/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/SpellChecker/spell-check-ui.js */
var SpellChecker=window.opener.SpellChecker;
var Xinha=window.opener.Xinha;
var _editor_url=window.opener._editor_url;
var is_ie=Xinha.is_ie;
var editor=SpellChecker.editor;
var frame=null;
var currentElement=null;
var wrongWords=null;
var modified=false;
var allWords={};
var fixedWords=[];
var suggested_words={};
var to_p_dict=[];
var to_r_list=[];
function _lc(_1){
return Xinha._lc(_1,"SpellChecker");
}
function makeCleanDoc(_2){
var _3=wrongWords.concat(fixedWords);
for(var i=_3.length;--i>=0;){
var el=_3[i];
if(!(_2&&/HA-spellcheck-fixed/.test(el.className))){
if(el.firstChild){
el.parentNode.insertBefore(el.firstChild,el);
}
el.parentNode.removeChild(el);
}else{
el.className="HA-spellcheck-fixed";
}
}
return Xinha.getHTML(frame.contentWindow.document.body,true,editor);
}
function recheckClicked(){
document.getElementById("status").innerHTML=_lc("Please wait: changing dictionary to")+": \""+document.getElementById("f_dictionary").value+"\".";
var _6=document.getElementById("f_content");
_6.value=makeCleanDoc(true);
_6.form.submit();
}
function saveClicked(){
if(modified){
editor.setHTML(makeCleanDoc(false));
}
if(to_p_dict.length||to_r_list.length&&editor.config.SpellChecker.backend=="php"){
var _7={};
for(var i=0;i<to_p_dict.length;i++){
_7["to_p_dict["+i+"]"]=to_p_dict[i];
}
for(var i=0;i<to_r_list.length;i++){
_7["to_r_list["+i+"][0]"]=to_r_list[i][0];
_7["to_r_list["+i+"][1]"]=to_r_list[i][1];
}
window.opener.Xinha._postback(Xinha.getPluginDir("SpellChecker")+"/spell-check-savedicts.php",_7);
window.close();
}else{
window.close();
}
return false;
}
function cancelClicked(){
var ok=true;
if(modified){
ok=confirm(_lc("This will drop changes and quit spell checker.  Please confirm."));
}
if(ok){
window.close();
}
return false;
}
function replaceWord(el){
var _b=document.getElementById("v_replacement").value;
var _c=(el.innerHTML!=_b);
if(_c){
modified=true;
}
if(el){
el.className=el.className.replace(/\s*HA-spellcheck-(hover|fixed)\s*/g," ");
}
el.className+=" HA-spellcheck-fixed";
el.__msh_fixed=true;
if(!_c){
return false;
}
to_r_list.push([el.innerHTML,_b]);
el.innerHTML=_b;
}
function replaceClicked(){
replaceWord(currentElement);
var _d=currentElement.__msh_id;
var _e=_d;
do{
++_e;
if(_e==wrongWords.length){
_e=0;
}
}while((_e!=_d)&&wrongWords[_e].__msh_fixed);
if(_e==_d){
_e=0;
alert(_lc("Finished list of mispelled words"));
}
wrongWords[_e].__msh_wordClicked(true);
return false;
}
function revertClicked(){
document.getElementById("v_replacement").value=currentElement.__msh_origWord;
replaceWord(currentElement);
currentElement.className="HA-spellcheck-error HA-spellcheck-current";
return false;
}
function replaceAllClicked(){
var _f=document.getElementById("v_replacement").value;
var ok=true;
var _11=allWords[currentElement.__msh_origWord];
if(_11.length==0){
alert("An impossible condition just happened.  Call FBI.  ;-)");
}else{
if(_11.length==1){
replaceClicked();
return false;
}
}
if(ok){
for(var i=0;i<_11.length;++i){
if(_11[i]!=currentElement){
replaceWord(_11[i]);
}
}
replaceClicked();
}
return false;
}
function ignoreClicked(){
document.getElementById("v_replacement").value=currentElement.__msh_origWord;
replaceClicked();
return false;
}
function ignoreAllClicked(){
document.getElementById("v_replacement").value=currentElement.__msh_origWord;
replaceAllClicked();
return false;
}
function learnClicked(){
to_p_dict.push(currentElement.__msh_origWord);
return ignoreAllClicked();
}
function internationalizeWindow(){
var _13=["div","span","button"];
for(var i=0;i<_13.length;++i){
var tag=_13[i];
var els=document.getElementsByTagName(tag);
for(var j=els.length;--j>=0;){
var el=els[j];
if(el.childNodes.length==1&&/\S/.test(el.innerHTML)){
var txt=el.innerHTML;
el.innerHTML=_lc(txt);
}
}
}
}
function initDocument(){
internationalizeWindow();
modified=false;
frame=document.getElementById("i_framecontent");
var _1a=document.getElementById("f_content");
_1a.value=Xinha.getHTML(editor._doc.body,false,editor);
var _1b=document.getElementById("f_dictionary");
if(typeof editor.config.SpellChecker.defaultDictionary!="undefined"&&editor.config.SpellChecker.defaultDictionary!=""){
_1b.value=editor.config.SpellChecker.defaultDictionary;
}else{
_1b.value="en_GB";
}
if(editor.config.SpellChecker.backend=="php"){
_1a.form.action=Xinha.getPluginDir("SpellChecker")+"/spell-check-logic.php";
}
if(editor.config.SpellChecker.utf8_to_entities){
document.getElementById("utf8_to_entities").value=1;
}else{
document.getElementById("utf8_to_entities").value=0;
}
_1a.form.submit();
document.getElementById("f_init").value="0";
var _1c=document.getElementById("v_suggestions");
_1c.onchange=function(){
document.getElementById("v_replacement").value=this.value;
};
if(is_ie){
_1c.attachEvent("ondblclick",replaceClicked);
}else{
_1c.addEventListener("dblclick",replaceClicked,true);
}
document.getElementById("b_replace").onclick=replaceClicked;
if(editor.config.SpellChecker.backend=="php"){
document.getElementById("b_learn").onclick=learnClicked;
}else{
document.getElementById("b_learn").parentNode.removeChild(document.getElementById("b_learn"));
}
document.getElementById("b_replall").onclick=replaceAllClicked;
document.getElementById("b_ignore").onclick=ignoreClicked;
document.getElementById("b_ignall").onclick=ignoreAllClicked;
document.getElementById("b_recheck").onclick=recheckClicked;
document.getElementById("b_revert").onclick=revertClicked;
document.getElementById("b_info").onclick=displayInfo;
document.getElementById("b_ok").onclick=saveClicked;
document.getElementById("b_cancel").onclick=cancelClicked;
_1c=document.getElementById("v_dictionaries");
_1c.onchange=function(){
document.getElementById("f_dictionary").value=this.value;
};
}
function getAbsolutePos(el){
var r={x:el.offsetLeft,y:el.offsetTop};
if(el.offsetParent){
var tmp=getAbsolutePos(el.offsetParent);
r.x+=tmp.x;
r.y+=tmp.y;
}
return r;
}
function wordClicked(_20){
var _21=this;
if(_20){
(function(){
var pos=getAbsolutePos(_21);
var ws={x:frame.offsetWidth-4,y:frame.offsetHeight-4};
var wp={x:frame.contentWindow.document.body.scrollLeft,y:frame.contentWindow.document.body.scrollTop};
pos.x-=Math.round(ws.x/2);
if(pos.x<0){
pos.x=0;
}
pos.y-=Math.round(ws.y/2);
if(pos.y<0){
pos.y=0;
}
frame.contentWindow.scrollTo(pos.x,pos.y);
})();
}
if(currentElement){
var a=allWords[currentElement.__msh_origWord];
currentElement.className=currentElement.className.replace(/\s*HA-spellcheck-current\s*/g," ");
for(var i=0;i<a.length;++i){
var el=a[i];
if(el!=currentElement){
el.className=el.className.replace(/\s*HA-spellcheck-same\s*/g," ");
}
}
}
currentElement=this;
this.className+=" HA-spellcheck-current";
var a=allWords[currentElement.__msh_origWord];
for(var i=0;i<a.length;++i){
var el=a[i];
if(el!=currentElement){
el.className+=" HA-spellcheck-same";
}
}
var txt;
if(a.length==1){
txt="one occurrence";
}else{
if(a.length==2){
txt="two occurrences";
}else{
txt=a.length+" occurrences";
}
}
var _29=suggested_words[this.__msh_origWord];
if(_29){
_29=_29.split(/,/);
}else{
_29=[];
}
var _2a=document.getElementById("v_suggestions");
document.getElementById("statusbar").innerHTML="Found "+txt+" for word \"<b>"+currentElement.__msh_origWord+"</b>\"";
for(var i=_2a.length;--i>=0;){
_2a.remove(i);
}
for(var i=0;i<_29.length;++i){
var txt=_29[i];
var _2b=document.createElement("option");
_2b.value=txt;
_2b.appendChild(document.createTextNode(txt));
_2a.appendChild(_2b);
}
document.getElementById("v_currentWord").innerHTML=this.__msh_origWord;
if(_29.length>0){
_2a.selectedIndex=0;
_2a.onchange();
}else{
document.getElementById("v_replacement").value=this.innerHTML;
}
_2a.style.display="none";
_2a.style.display="block";
return false;
}
function wordMouseOver(){
this.className+=" HA-spellcheck-hover";
}
function wordMouseOut(){
this.className=this.className.replace(/\s*HA-spellcheck-hover\s*/g," ");
}
function displayInfo(){
var _2c=frame.contentWindow.spellcheck_info;
if(!_2c){
alert("No information available");
}else{
var txt="** Document information **";
for(var i in _2c){
txt+="\n"+i+" : "+_2c[i];
}
alert(txt);
}
return false;
}
function finishedSpellChecking(){
currentElement=null;
wrongWords=null;
allWords={};
fixedWords=[];
suggested_words=frame.contentWindow.suggested_words;
document.getElementById("status").innerHTML="Xinha Spell Checker (<a href=\"readme-tech.html\" onclick=\"window.open(this.href,'_blank');return false;\" title=\"Technical information\">info</a>)";
var doc=frame.contentWindow.document;
var _30=doc.getElementsByTagName("span");
var sps=[];
var id=0;
for(var i=0;i<_30.length;++i){
var el=_30[i];
if(/HA-spellcheck-error/.test(el.className)){
sps.push(el);
el.__msh_wordClicked=wordClicked;
el.onclick=function(ev){
ev||(ev=window.event);
ev&&Xinha._stopEvent(ev);
return this.__msh_wordClicked(false);
};
el.onmouseover=wordMouseOver;
el.onmouseout=wordMouseOut;
el.__msh_id=id++;
var txt=(el.__msh_origWord=el.firstChild.data);
el.__msh_fixed=false;
if(typeof allWords[txt]=="undefined"){
allWords[txt]=[el];
}else{
allWords[txt].push(el);
}
}else{
if(/HA-spellcheck-fixed/.test(el.className)){
fixedWords.push(el);
}
}
}
var _37=doc.getElementById("HA-spellcheck-dictionaries");
if(_37){
_37.parentNode.removeChild(_37);
_37=_37.innerHTML.split(/,/);
var _38=document.getElementById("v_dictionaries");
for(var i=_38.length;--i>=0;){
_38.remove(i);
}
var _39=document.getElementById("f_dictionary").value;
for(var i=0;i<_37.length;++i){
var txt=_37[i];
var _3a=document.createElement("option");
if(txt==_39){
_3a.selected=true;
}
_3a.value=txt;
_3a.appendChild(document.createTextNode(txt));
_38.appendChild(_3a);
}
}
wrongWords=sps;
if(sps.length==0){
if(!modified){
alert(_lc("No mispelled words found with the selected dictionary."));
}else{
alert(_lc("No mispelled words found with the selected dictionary."));
}
return false;
}
(currentElement=sps[0]).__msh_wordClicked(true);
var as=doc.getElementsByTagName("a");
for(var i=as.length;--i>=0;){
var a=as[i];
a.onclick=function(){
if(confirm(_lc("Please confirm that you want to open this link")+":\n"+this.href+"\n"+_lc("I will open it in a new page."))){
window.open(this.href);
}
return false;
};
}
}

