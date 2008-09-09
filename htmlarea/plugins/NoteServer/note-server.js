/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/NoteServer/note-server.js */
function NoteServer(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"insertscore",tooltip:this._lc("Insert GUIDO Music Notation"),image:_1.imgURL("note.gif","NoteServer"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("insertscore","insertimage",1);
}
NoteServer._pluginInfo={name:"NoteServer",version:"1.1",developer:"Richard Christophe",developer_url:"http://piano-go.chez.tiscali.fr/guido.html",c_owner:"Richard Christophe",sponsor:"",sponsor_url:"",license:"htmlArea"};
NoteServer.prototype._lc=function(_5){
return Xinha._lc(_5,"NoteServer");
};
NoteServer.prototype.buttonPress=function(_6){
_6._popupDialog("plugin://NoteServer/codenote",function(_7){
if(!_7){
return false;
}else{
IncludeGuido(_6,_7);
}
},null);
};
var noteserveraddress="clef.cs.ubc.ca";
var htmlbase="/salieri/nview";
var versionstring="";
function GetGIFURL(_8,_9,_a){
_8=escape(_8);
_8=_8.replace(/\//g,"%2F");
if(!_9){
_9="1.0";
}
if(!_a){
_a="1";
}
var _b="http://"+noteserveraddress+"/scripts/salieri"+versionstring+"/gifserv.pl?"+"pagewidth=21"+"&pageheight=29.7"+"&zoomfactor="+_9+"&pagesizeadjust=yes"+"&outputformat=gif87"+"&pagenum="+_a+"&gmndata="+_8;
return _b;
}
function GetMIDIURL(_c){
_c=escape(_c);
_c=_c.replace(/\//g,"%2F");
var _d="http://"+noteserveraddress+"/scripts/salieri"+versionstring+"/midserv.pl?"+"gmndata="+_c;
return _d;
}
function GetAPPLETURL(_e,_f){
_e=escape(_e);
_e=_e.replace(/\//g,"%2F");
var _10="<applet "+"code=\"NoteServerApplet\" "+"codebase=\"http://"+noteserveraddress+htmlbase+"/java\" "+" width=700 height=300>"+"<param name=server value=\""+noteserveraddress+"\">"+"<param name=serverVersion value=\""+versionstring+"\">"+"<param name=zoomFactor value=\""+_f+"\">"+"<param name=pageWidth value=\"21\">"+"<param name=pageHeight value=\"29.7\">"+"<param name=gmn value=\""+_e+"\">"+"</applet>";
return _10;
}
function IncludeGuido(_11,_12){
if(!_12["f_zoom"]){
zoom="";
}
var _13=GetGIFURL(_12["f_code"],_12["f_zoom"],"");
var _14=GetMIDIURL(_12["f_code"]);
var _15="<br>";
if(_12["f_applet"]==false){
if(((navigator.userAgent.toLowerCase().indexOf("msie")!=-1)&&(navigator.userAgent.toLowerCase().indexOf("opera")==-1))){
_11.focusEditor();
_11.insertHTML("<img src="+_13+">");
}else{
img=new Image();
img.src=_13;
var doc=_11._doc;
var sel=_11._getSelection();
var _18=_11._createRange(sel);
_11._doc.execCommand("insertimage",false,img.src);
}
}else{
var _19=GetAPPLETURL(_12["f_code"],_12["f_zoom"]);
_15=_15+_19+"<br>";
}
if(_12["f_affcode"]){
_15=_15+Xinha._lc("GUIDO Code","NoteServer")+" : "+_12["f_code"]+"<br>";
}
if(_12["f_midi"]){
_15=_15+"<a href="+_14+">"+Xinha._lc("MIDI File","NoteServer")+"</a> <br>";
}
_11.focusEditor();
_11.insertHTML(_15);
}
function IncludeGuidoStringAsApplet(_1a,_1b,_1c){
_1b=escape(_1b);
_1b=_1b.replace(/\//g,"%2F");
var _1d="<applet "+"codebase=\"http://"+noteserveraddress+htmlbase+"/java\"\n"+"code=\"NoteServerApplet\" width=480 height=230>"+"<PARAM NAME=server VALUE='"+noteserveraddress+"'>"+"<PARAM NAME=serverVersion VALUE='"+versionstring+"'>"+"<PARAM NAME=zoomFactor VALUE='"+_1c+"'>"+"<param name=pageWidth value=\"21\">"+"<param name=pageHeight value=\"29.7\">"+"<PARAM NAME=gmn VALUE='"+_1b+"'>"+"</applet>";
alert(_1d);
_1a.focusEditor();
_1a.insertHTML(_1d);
}

