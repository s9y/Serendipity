/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/ImageManager/assets/popup.js */
function __dlg_translate(_1){
var _2=["span","option","td","th","button","div","label","a","img","legend"];
for(var _3=0;_3<_2.length;++_3){
var _4=document.getElementsByTagName(_2[_3]);
for(var i=_4.length;--i>=0;){
var _6=_4[i];
if(_6.firstChild&&_6.firstChild.data){
var _7=Xinha._lc(_6.firstChild.data,_1);
if(_7){
_6.firstChild.data=_7;
}
}
if(_6.title){
var _7=Xinha._lc(_6.title,_1);
if(_7){
_6.title=_7;
}
}
if(_6.alt){
var _7=Xinha._lc(_6.alt,_1);
if(_7){
_6.alt=_7;
}
}
}
}
document.title=Xinha._lc(document.title,_1);
}

