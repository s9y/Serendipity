/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/SuperClean/super-clean.js */
function SuperClean(_1,_2){
this.editor=_1;
var _3=this;
_1._superclean_on=false;
_1.config.registerButton("superclean",this._lc("Clean up HTML"),_1.imgURL("ed_superclean.gif","SuperClean"),true,function(e,_5,_6){
_3._superClean(null,_6);
});
_1.config.addToolbarElement("superclean","killword",0);
}
SuperClean._pluginInfo={name:"SuperClean",version:"1.0",developer:"James Sleeman, Niko Sams",developer_url:"http://www.gogo.co.nz/",c_owner:"Gogo Internet Services",license:"htmlArea",sponsor:"Gogo Internet Services",sponsor_url:"http://www.gogo.co.nz/"};
SuperClean.prototype._lc=function(_7){
return Xinha._lc(_7,"SuperClean");
};
SuperClean.prototype._superClean=function(_8,_9){
var _a=this;
var _b=function(){
var _c=_a._dialog.hide();
var _d=_a.editor;
if(_c.word_clean){
_d._wordClean();
}
var D=_d.getInnerHTML();
for(var _f in _d.config.SuperClean.filters){
if(_f=="tidy"||_f=="word_clean"){
continue;
}
if(_c[_f]){
D=SuperClean.filterFunctions[_f](D,_d);
}
}
D=D.replace(/(style|class)="\s*"/gi,"");
D=D.replace(/<(font|span)\s*>/gi,"");
_d.setHTML(D);
if(_c.tidy){
var _10=function(_11){
eval("var response = "+_11);
switch(response.action){
case "setHTML":
_d.setHTML(response.value);
break;
case "alert":
alert(_a._lc(response.value));
break;
}
};
Xinha._postback(_d.config.SuperClean.tidy_handler,{"content":_d.getInnerHTML()},_10);
}
return true;
};
if(this.editor.config.SuperClean.show_dialog){
var _12={};
this._dialog.show(_12,_b);
}else{
var _13=this.editor;
var _14=_13.getInnerHTML();
for(var _15 in _13.config.SuperClean.filters){
if(_15=="tidy"){
continue;
}
_14=SuperClean.filterFunctions[_15](_14,_13);
}
_14=_14.replace(/(style|class)="\s*"/gi,"");
_14=_14.replace(/<(font|span)\s*>/gi,"");
_13.setHTML(_14);
if(_13.config.SuperClean.filters.tidy){
SuperClean.filterFunctions.tidy(_14,_13);
}
}
};
Xinha.Config.prototype.SuperClean={"tidy_handler":Xinha.getPluginDir("SuperClean")+"/tidy.php","filters":{"tidy":Xinha._lc("General tidy up and correction of some problems.","SuperClean"),"word_clean":Xinha._lc("Clean bad HTML from Microsoft Word","SuperClean"),"remove_faces":Xinha._lc("Remove custom typefaces (font \"styles\").","SuperClean"),"remove_sizes":Xinha._lc("Remove custom font sizes.","SuperClean"),"remove_colors":Xinha._lc("Remove custom text colors.","SuperClean"),"remove_lang":Xinha._lc("Remove lang attributes.","SuperClean"),"remove_fancy_quotes":{label:Xinha._lc("Replace directional quote marks with non-directional quote marks.","SuperClean"),checked:false}},"show_dialog":true};
SuperClean.filterFunctions={};
SuperClean.filterFunctions.remove_colors=function(D){
D=D.replace(/color="?[^" >]*"?/gi,"");
D=D.replace(/([^-])color:[^;}"']+;?/gi,"$1");
return (D);
};
SuperClean.filterFunctions.remove_sizes=function(D){
D=D.replace(/size="?[^" >]*"?/gi,"");
D=D.replace(/font-size:[^;}"']+;?/gi,"");
return (D);
};
SuperClean.filterFunctions.remove_faces=function(D){
D=D.replace(/face="?[^" >]*"?/gi,"");
D=D.replace(/font-family:[^;}"']+;?/gi,"");
return (D);
};
SuperClean.filterFunctions.remove_lang=function(D){
D=D.replace(/lang="?[^" >]*"?/gi,"");
return (D);
};
SuperClean.filterFunctions.word_clean=function(_1a,_1b){
_1b.setHTML(_1a);
_1b._wordClean();
return _1b.getInnerHTML();
};
SuperClean.filterFunctions.remove_fancy_quotes=function(D){
D=D.replace(new RegExp(String.fromCharCode(8216),"g"),"'");
D=D.replace(new RegExp(String.fromCharCode(8217),"g"),"'");
D=D.replace(new RegExp(String.fromCharCode(8218),"g"),"'");
D=D.replace(new RegExp(String.fromCharCode(8219),"g"),"'");
D=D.replace(new RegExp(String.fromCharCode(8220),"g"),"\"");
D=D.replace(new RegExp(String.fromCharCode(8221),"g"),"\"");
D=D.replace(new RegExp(String.fromCharCode(8222),"g"),"\"");
D=D.replace(new RegExp(String.fromCharCode(8223),"g"),"\"");
return D;
};
SuperClean.filterFunctions.tidy=function(_1d,_1e){
Xinha._postback(_1e.config.SuperClean.tidy_handler,{"content":_1d},function(_1f){
eval(_1f);
});
};
SuperClean.prototype.onGenerate=function(){
if(this.editor.config.SuperClean.show_dialog&&!this._dialog){
this._dialog=new SuperClean.Dialog(this);
}
if(this.editor.config.tidy_handler){
this.editor.config.SuperClean.tidy_handler=this.editor.config.tidy_handler;
this.editor.config.tidy_handler=null;
}
if(!this.editor.config.SuperClean.tidy_handler&&this.editor.config.filters.tidy){
this.editor.config.filters.tidy=null;
}
var sc=this;
for(var _21 in this.editor.config.SuperClean.filters){
if(!SuperClean.filterFunctions[_21]){
var _22=this.editor.config.SuperClean.filters[_21];
if(typeof _22.filterFunction!="undefined"){
SuperClean.filterFunctions[_21]=filterFunction;
}else{
Xinha._getback(Xinha.getPluginDir("SuperClean")+"/filters/"+_21+".js",function(_23){
eval("SuperClean.filterFunctions."+_21+"="+_23+";");
sc.onGenerate();
});
}
return;
}
}
};
SuperClean.Dialog=function(_24){
var _25=this;
this.Dialog_nxtid=0;
this.SuperClean=_24;
this.id={};
this.ready=false;
this.files=false;
this.html=false;
this.dialog=false;
this._prepareDialog();
};
SuperClean.Dialog.prototype._prepareDialog=function(){
var _26=this;
var _27=this.SuperClean;
if(this.html==false){
Xinha._getback(Xinha.getPluginDir("SuperClean")+"/dialog.html",function(txt){
_26.html=txt;
_26._prepareDialog();
});
return;
}
var _29="";
for(var _2a in this.SuperClean.editor.config.SuperClean.filters){
_29+="    <div>\n";
var _2b=this.SuperClean.editor.config.SuperClean.filters[_2a];
if(typeof _2b.label=="undefined"){
_29+="        <input type=\"checkbox\" name=\"["+_2a+"]\" id=\"["+_2a+"]\" checked />\n";
_29+="        <label for=\"["+_2a+"]\">"+this.SuperClean.editor.config.SuperClean.filters[_2a]+"</label>\n";
}else{
_29+="        <input type=\"checkbox\" name=\"["+_2a+"]\" id=\"["+_2a+"]\" "+(_2b.checked?"checked":"")+" />\n";
_29+="        <label for=\"["+_2a+"]\">"+_2b.label+"</label>\n";
}
_29+="    </div>\n";
}
this.html=this.html.replace("<!--filters-->",_29);
var _2c=this.html;
var _2d=this.dialog=new Xinha.Dialog(_27.editor,this.html,"SuperClean");
this.ready=true;
};
SuperClean.Dialog.prototype._lc=SuperClean.prototype._lc;
SuperClean.Dialog.prototype.show=function(_2e,ok,_30){
if(!this.ready){
var _31=this;
window.setTimeout(function(){
_31.show(_2e,ok,_30);
},100);
return;
}
var _32=this.dialog;
var _31=this;
if(ok){
this.dialog.getElementById("ok").onclick=ok;
}else{
this.dialog.getElementById("ok").onclick=function(){
_31.hide();
};
}
if(_30){
this.dialog.getElementById("cancel").onclick=_30;
}else{
this.dialog.getElementById("cancel").onclick=function(){
_31.hide();
};
}
this.SuperClean.editor.disableToolbar(["fullscreen","SuperClean"]);
this.dialog.show(_2e);
this.dialog.onresize();
};
SuperClean.Dialog.prototype.hide=function(){
this.SuperClean.editor.enableToolbar();
return this.dialog.hide();
};

