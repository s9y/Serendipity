/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/HtmlTidy/html-tidy.js */
function HtmlTidy(_1){
this.editor=_1;
var _2=_1.config;
var bl=HtmlTidy.btnList;
var _4=this;
this.onMode=this.__onMode;
var _5=[];
for(var i=0;i<bl.length;++i){
var _7=bl[i];
if(_7=="html-tidy"){
var id="HT-html-tidy";
_2.registerButton(id,this._lc("HTML Tidy"),_1.imgURL(_7[0]+".gif","HtmlTidy"),true,function(_9,id){
_4.buttonPress(_9,id);
},_7[1]);
_5.push(id);
}else{
if(_7=="html-auto-tidy"){
var _b=[this._lc("Auto-Tidy"),this._lc("Don't Tidy")];
var _c=new Object();
_c[_b[0]]="auto";
_c[_b[1]]="noauto";
var _d={id:"HT-auto-tidy",options:_c,action:function(_e){
_4.__onSelect(_e,this);
},refresh:function(_f){
},context:"body"};
_2.registerDropdown(_d);
}
}
}
for(var i in _5){
_2.toolbar[0].push(_5[i]);
}
}
HtmlTidy._pluginInfo={name:"HtmlTidy",version:"1.0",developer:"Adam Wright",developer_url:"http://blog.hipikat.org/",sponsor:"The University of Western Australia",sponsor_url:"http://www.uwa.edu.au/",license:"htmlArea"};
HtmlTidy.prototype._lc=function(_10){
return Xinha._lc(_10,"HtmlTidy");
};
HtmlTidy.prototype.__onSelect=function(_11,obj){
var _13=_11._toolbarObjects[obj.id].element;
if(_13.value=="auto"){
this.onMode=this.__onMode;
}else{
this.onMode=null;
}
};
HtmlTidy.prototype.__onMode=function(_14){
if(_14=="textmode"){
this.buttonPress(this.editor,"HT-html-tidy");
}
};
HtmlTidy.btnList=[null,["html-tidy"],["html-auto-tidy"]];
HtmlTidy.prototype.buttonPress=function(_15,id){
switch(id){
case "HT-html-tidy":
var _17=_15.getHTML();
if(_17==""){
break;
}
Xinha._postback(Xinha.getPluginDir("HtmlTidy")+"/html-tidy-logic.php",{"htisource_name":_17},function(_18){
eval(_18);
});
break;
}
};
HtmlTidy.prototype.processTidied=function(_19){
editor=this.editor;
editor.setHTML(_19);
};

