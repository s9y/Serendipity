/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/DynamicCSS/dynamiccss.js */
function DynamicCSS(_1,_2){
this.editor=_1;
var _3=_1.config;
var _4=this;
var _5=null;
var _6=null;
var _7={id:"DynamicCSS-class",tooltip:this._lc("Choose stylesheet"),options:{"":""},action:function(_8){
_4.onSelect(_8,this);
},refresh:function(_9){
_4.updateValue(_9,this);
}};
_3.registerDropdown(_7);
_3.addToolbarElement(["T[CSS]","DynamicCSS-class","separator"],"formatblock",-1);
}
DynamicCSS.parseStyleSheet=function(_a){
iframe=_a._iframe.contentWindow.document;
cssArray=DynamicCSS.cssArray;
if(!cssArray){
cssArray=new Array();
}
for(i=0;i<iframe.styleSheets.length;i++){
if(iframe.styleSheets[i].title=="XinhaInternalCSS"){
continue;
}
if(Xinha.is_gecko){
try{
cssArray=DynamicCSS.applyCSSRule(iframe.styleSheets[i].cssRules,cssArray);
}
catch(e){
}
}else{
try{
if(iframe.styleSheets[i].rules){
cssArray=DynamicCSS.applyCSSRule(iframe.styleSheets[i].rules,cssArray);
}
if(iframe.styleSheets[i].imports){
for(j=0;j<iframe.styleSheets[i].imports.length;j++){
cssArray=DynamicCSS.applyCSSRule(iframe.styleSheets[i].imports[j].rules,cssArray);
}
}
}
catch(e){
}
}
}
DynamicCSS.cssArray=cssArray;
};
DynamicCSS.applyCSSRule=function(_b,_c){
for(rule in _b){
if(typeof _b[rule]=="function"){
continue;
}
if(_b[rule].selectorText){
if(_b[rule].selectorText.search(/:+/)==-1){
cssElements=_b[rule].selectorText.split(",");
for(k=0;k<cssElements.length;k++){
cssElement=cssElements[k].split(".");
tagName=cssElement[0].toLowerCase().trim();
className=cssElement[1];
if(!tagName){
tagName="all";
}
if(!_c[tagName]){
_c[tagName]=new Array();
}
if(className){
if(tagName=="all"){
cssName=className;
}else{
cssName="<"+className+">";
}
}else{
className="none";
if(tagName=="all"){
cssName=Xinha._lc("Default","DynamicCSS");
}else{
cssName="<"+Xinha._lc("Default","DynamicCSS")+">";
}
}
_c[tagName][className]=cssName;
DynamicCSS.cssLength++;
}
}
}else{
if(_b[rule].styleSheet){
_c=DynamicCSS.applyCSSRule(_b[rule].styleSheet.cssRules,_c);
}
}
}
return _c;
};
DynamicCSS._pluginInfo={name:"DynamicCSS",version:"1.5.2",developer:"Holger Hees",developer_url:"http://www.systemconcept.de/",c_owner:"Holger Hees",sponsor:"System Concept GmbH",sponsor_url:"http://www.systemconcept.de/",license:"htmlArea"};
DynamicCSS.prototype._lc=function(_d){
return Xinha._lc(_d,"DynamicCSS");
};
DynamicCSS.prototype.onSelect=function(_e,_f){
var _10=_e._toolbarObjects[_f.id];
var _11=_10.element.selectedIndex;
var _12=_10.element.value;
var _13=_e.getParentElement();
if(_12!="none"){
_13.className=_12;
DynamicCSS.lastClass=_12;
}else{
if(Xinha.is_gecko){
_13.removeAttribute("class");
}else{
_13.removeAttribute("className");
}
}
_e.updateToolbar();
};
DynamicCSS.prototype.reparseTimer=function(_14,obj,_16){
if(DynamicCSS.parseCount<9){
setTimeout(function(){
DynamicCSS.cssLength=0;
DynamicCSS.parseStyleSheet(_14);
if(DynamicCSS.cssOldLength!=DynamicCSS.cssLength){
DynamicCSS.cssOldLength=DynamicCSS.cssLength;
DynamicCSS.lastClass=null;
_16.updateValue(_14,obj);
}
_16.reparseTimer(_14,obj,_16);
},DynamicCSS.parseCount*1000);
DynamicCSS.parseCount=DynamicCSS.parseCount*2;
}
};
DynamicCSS.prototype.updateValue=function(_17,obj){
cssArray=DynamicCSS.cssArray;
if(!cssArray){
DynamicCSS.cssLength=0;
DynamicCSS.parseStyleSheet(_17);
cssArray=DynamicCSS.cssArray;
DynamicCSS.cssOldLength=DynamicCSS.cssLength;
DynamicCSS.parseCount=1;
this.reparseTimer(_17,obj,this);
}
var _19=_17.getParentElement();
var _1a=_19.tagName.toLowerCase();
var _1b=_19.className;
if(this.lastTag!=_1a||this.lastClass!=_1b){
this.lastTag=_1a;
this.lastClass=_1b;
var _1c=_17._toolbarObjects[obj.id].element;
while(_1c.length>0){
_1c.options[_1c.length-1]=null;
}
_1c.options[0]=new Option(this._lc("Default"),"none");
if(cssArray){
if(_1a!="body"||_17.config.fullPage){
if(cssArray[_1a]){
for(cssClass in cssArray[_1a]){
if(typeof cssArray[_1a][cssClass]!="string"){
continue;
}
if(cssClass=="none"){
_1c.options[0]=new Option(cssArray[_1a][cssClass],cssClass);
}else{
_1c.options[_1c.length]=new Option(cssArray[_1a][cssClass],cssClass);
}
}
}
if(cssArray["all"]){
for(cssClass in cssArray["all"]){
if(typeof cssArray["all"][cssClass]!="string"){
continue;
}
_1c.options[_1c.length]=new Option(cssArray["all"][cssClass],cssClass);
}
}
}else{
if(cssArray[_1a]&&cssArray[_1a]["none"]){
_1c.options[0]=new Option(cssArray[_1a]["none"],"none");
}
}
}
_1c.selectedIndex=0;
if(typeof _1b!="undefined"&&/\S/.test(_1b)){
var _1d=_1c.options;
for(var i=_1d.length;--i>=0;){
var _1f=_1d[i];
if(_1b==_1f.value){
_1c.selectedIndex=i;
break;
}
}
if(_1c.selectedIndex==0){
_1c.options[_1c.length]=new Option(this._lc("Undefined"),_1b);
_1c.selectedIndex=_1c.length-1;
}
}
if(_1c.length>1){
_1c.disabled=false;
}else{
_1c.disabled=true;
}
}
};

