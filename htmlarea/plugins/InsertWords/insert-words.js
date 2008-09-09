/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/InsertWords/insert-words.js */
function InsertWords(_1,_2){
this.editor=_1;
var _3=_1.config;
var _4=this;
if(_2[0]&&_2[0].combos){
var _5=_2[0].combos;
}else{
if(_3.InsertWords&&_3.InsertWords.combos){
var _5=_3.InsertWords.combos;
}else{
var _5=[];
}
}
var _6=true;
var _7=[];
for(var i=_5.length;--i>=0;){
var _9=_5[i];
var id="IW-id"+i;
var _b={id:id,options:_9.options,action:function(_c){
_4.onSelect(_c,this,_9.context);
},refresh:function(_d){
},context:_9.context};
_3.registerDropdown(_b);
if(_9.label){
_7.push("T["+_9.label+"]");
}
_7.push(id);
_7.push(_6?"separator":"space");
}
_3.addToolbarElement(_7,"linebreak",1);
}
InsertWords._pluginInfo={name:"InsertWords",version:"1.0",developer:"Adam Wright",developer_url:"http://blog.hipikat.org/",sponsor:"The University of Western Australia",sponsor_url:"http://www.uwa.edu.au/",license:"htmlArea"};
InsertWords.prototype.onSelect=function(_e,_f,_10){
var _11=_e._toolbarObjects[_f.id].element;
_e.insertHTML(_11.value);
_11.selectedIndex=0;
};

