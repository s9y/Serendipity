/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/PreserveScripts/preserve-scripts.js */
function PreserveScripts(_1){
this.editor=_1;
}
PreserveScripts._pluginInfo={name:"PreserveScripts",version:"1.0",developer:"Raimund Meyer",developer_url:"http://x-webservice.net",c_owner:"Raimund Meyer",sponsor:"",sponsor_url:"",license:"LGPL"};
Xinha.Config.prototype.PreserveScripts={"preservePHP":true,"preserveJS":true};
PreserveScripts.prototype.inwardHtml=function(_2){
var s=this;
var c=s.editor.config.PreserveScripts;
this.storage={};
var i=1;
_2=_2.replace(/\n?<\?php(\s|[^\s])*?\?>\n?/ig,function(m){
if(c.preservePHP){
s.storage["PreserveScripts_"+i]=m;
var r="<img title=\"PHP\" id=\"PreserveScripts_"+i+"\" src=\""+Xinha.getPluginDir("PreserveScripts")+"/php.png\" />";
i++;
return r;
}else{
return "";
}
});
if(c.preserveJS){
_2=_2.replace(/\n?<script(\s|[^\s])*?<\/script>\n?/g,function(m){
s.storage["PreserveScripts_"+i]=m;
var r="<img title=\"JavaScript\" id=\"PreserveScripts_"+i+"\" src=\""+Xinha.getPluginDir("PreserveScripts")+"/js.png\" />";
i++;
return r;
});
}
return _2;
};
PreserveScripts.prototype.outwardHtml=function(_a){
var s=this;
_a=_a.replace(/<img[^>]*id="(PreserveScripts_\d+)"[^>]*>/g,function(m0,m1){
return s.storage[m1];
});
return _a;
};

