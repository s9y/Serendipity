/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/CSS/css.js */
Xinha.Config.prototype.cssPluginConfig={combos:[{label:"Syntax",options:{"None":"","Code":"code","String":"string","Comment":"comment","Variable name":"variable-name","Type":"type","Reference":"reference","Preprocessor":"preprocessor","Keyword":"keyword","Function name":"function-name","Html tag":"html-tag","Html italic":"html-helper-italic","Warning":"warning","Html bold":"html-helper-bold"},context:"pre"},{label:"Info",options:{"None":"","Quote":"quote","Highlight":"highlight","Deprecated":"deprecated"}}]};
function CSS(_1,_2){
this.editor=_1;
var _3=_1.config;
var _4=this;
var _5;
if(_2&&_2.length){
_5=_2[0];
}else{
_5=_1.config.cssPluginConfig;
}
var _6=_5.combos;
for(var i=0;i<_6.length;i++){
var _8=_6[i];
var id="CSS-class"+i;
var _a={id:id,options:_8.options,action:function(_b){
_4.onSelect(_b,this,_8.context,_8.updatecontextclass);
},refresh:function(_c){
_4.updateValue(_c,this);
},context:_8.context};
_3.registerDropdown(_a);
_3.addToolbarElement(["T["+_8.label+"]",id,"separator"],"formatblock",-1);
}
}
CSS._pluginInfo={name:"CSS",version:"1.0",developer:"Mihai Bazon",developer_url:"http://dynarch.com/mishoo/",c_owner:"Mihai Bazon",sponsor:"Miro International",sponsor_url:"http://www.miro.com.au",license:"htmlArea"};
CSS.prototype.onSelect=function(_d,_e,_f,_10){
var _11=_d._toolbarObjects[_e.id];
var _12=_11.element.selectedIndex;
var _13=_11.element.value;
var _14=_d.getParentElement();
var _15=true;
var _16=(_14&&_14.tagName.toLowerCase()=="span");
var _17=(_f&&_10&&_14&&_14.tagName.toLowerCase()==_f);
if(_17){
_14.className=_13;
_d.updateToolbar();
return;
}
if(_16&&_12==0&&!/\S/.test(_14.style.cssText)){
while(_14.firstChild){
_14.parentNode.insertBefore(_14.firstChild,_14);
}
_14.parentNode.removeChild(_14);
_d.updateToolbar();
return;
}
if(_16){
if(_14.childNodes.length==1){
_14.className=_13;
_15=false;
_d.updateToolbar();
}
}
if(_15){
_d.surroundHTML("<span class='"+_13+"'>","</span>");
}
};
CSS.prototype.updateValue=function(_18,obj){
var _1a=_18._toolbarObjects[obj.id].element;
var _1b=_18.getParentElement();
if(typeof _1b.className!="undefined"&&/\S/.test(_1b.className)){
var _1c=_1a.options;
var _1d=_1b.className;
for(var i=_1c.length;--i>=0;){
var _1f=_1c[i];
if(_1d==_1f.value){
_1a.selectedIndex=i;
return;
}
}
}
_1a.selectedIndex=0;
};

