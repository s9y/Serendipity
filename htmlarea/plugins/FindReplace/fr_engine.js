/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/FindReplace/fr_engine.js */
var FindReplace=window.opener.FindReplace;
var editor=FindReplace.editor;
var is_mo=window.opener.Xinha.is_gecko;
var tosearch="";
var pater=null;
var buffer=null;
var matches=0;
var replaces=0;
var fr_spans=new Array();
function _lc(_1){
return (window.opener.Xinha._lc(_1,"FindReplace"));
}
function execSearch(_2){
var _3=editor._doc.body.innerHTML;
if(buffer==null){
buffer=_3;
}
if(_2["fr_pattern"]!=tosearch){
if(tosearch!=""){
clearDoc();
}
tosearch=_2["fr_pattern"];
}
if(matches==0){
er=_2["fr_words"]?"/(?!<[^>]*)(\\b"+_2["fr_pattern"]+"\\b)(?![^<]*>)/g":"/(?!<[^>]*)("+_2["fr_pattern"]+")(?![^<]*>)/g";
if(!_2["fr_matchcase"]){
er+="i";
}
pater=eval(er);
var _4="<span id=frmark>";
var _5="</span>";
var _6=_3.replace(pater,_4+"$1"+_5);
editor.setHTML(_6);
var _7=editor._doc.body.getElementsByTagName("span");
for(var i=0;i<_7.length;i++){
if(/^frmark/.test(_7[i].id)){
fr_spans.push(_7[i]);
}
}
}
spanWalker(_2["fr_pattern"],_2["fr_replacement"],_2["fr_replaceall"]);
}
function spanWalker(_9,_a,_b){
var _c=false;
clearMarks();
for(var i=matches;i<fr_spans.length;i++){
var _e=fr_spans[i];
_c=true;
if(!(/[0-9]$/.test(_e.id))){
matches++;
disab("fr_clear",false);
_e.id="frmark_"+matches;
_e.style.color="white";
_e.style.backgroundColor="highlight";
_e.style.fontWeight="bold";
_e.scrollIntoView(false);
if(/\w/.test(_a)){
if(_b||confirm(_lc("Substitute this occurrence?"))){
_e.firstChild.replaceData(0,_e.firstChild.data.length,_a);
replaces++;
disab("fr_undo",false);
}
if(_b){
clearMarks();
continue;
}
}
break;
}
}
var _f=(i>=fr_spans.length-1);
if(_f||!_c){
var _10=_lc("Done")+":\n\n";
if(matches>0){
if(matches==1){
_10+=matches+" "+_lc("found item");
}else{
_10+=matches+" "+_lc("found items");
}
if(replaces>0){
if(replaces==1){
_10+=",\n"+replaces+" "+_lc("replaced item");
}else{
_10+=",\n"+replaces+" "+_lc("replaced items");
}
}
hiliteAll();
disab("fr_hiliteall",false);
}else{
_10+="\""+_9+"\" "+_lc("not found");
}
alert(_10+".");
}
}
function clearDoc(){
var doc=editor._doc.body.innerHTML;
var er=/(<span\s+[^>]*id=.?frmark[^>]*>)([^<>]*)(<\/span>)/gi;
editor._doc.body.innerHTML=doc.replace(er,"$2");
pater=null;
tosearch="";
fr_spans=new Array();
matches=0;
replaces=0;
disab("fr_hiliteall,fr_clear",true);
}
function clearMarks(){
var _13=editor._doc.body.getElementsByTagName("span");
for(var i=0;i<_13.length;i++){
var elm=_13[i];
if(/^frmark/.test(elm.id)){
var _16=editor._doc.getElementById(elm.id).style;
_16.backgroundColor="";
_16.color="";
_16.fontWeight="";
}
}
}
function hiliteAll(){
var _17=editor._doc.body.getElementsByTagName("span");
for(var i=0;i<_17.length;i++){
var elm=_17[i];
if(/^frmark/.test(elm.id)){
var _1a=editor._doc.getElementById(elm.id).style;
_1a.backgroundColor="highlight";
_1a.color="white";
_1a.fontWeight="bold";
}
}
}
function resetContents(){
if(buffer==null){
return;
}
var _1b=editor._doc.body.innerHTML;
editor._doc.body.innerHTML=buffer;
buffer=_1b;
}
function disab(_1c,_1d){
var _1e=_1c.split(/[,; ]+/);
for(var i=0;i<_1e.length;i++){
document.getElementById(_1e[i]).disabled=_1d;
}
}

