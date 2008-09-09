/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/SuperClean/filters/word.js */
function(_1){
_1=_1.replace(/<!--[\w\s\d@{}:.;,'"%!#_=&|?~()[*+\/\-\]]*-->/gi,"");
_1=_1.replace(/<!--[^\0]*-->/gi,"");
_1=_1.replace(/<\/?\s*HTML[^>]*>/gi,"");
_1=_1.replace(/<\/?\s*BODY[^>]*>/gi,"");
_1=_1.replace(/<\/?\s*META[^>]*>/gi,"");
_1=_1.replace(/<\/?\s*SPAN[^>]*>/gi,"");
_1=_1.replace(/<\/?\s*FONT[^>]*>/gi,"");
_1=_1.replace(/<\/?\s*IFRAME[^>]*>/gi,"");
_1=_1.replace(/<\/?\s*STYLE[^>]*>(.|[\n\r\t])*<\/\s*STYLE\s*>/gi,"");
_1=_1.replace(/<\s*TITLE[^>]*>(.|[\n\r\t])*<\/\s*TITLE\s*>/gi,"");
_1=_1.replace(/<\s*SCRIPT[^>]*>[^\0]*<\/\s*SCRIPT\s*>/gi,"");
_1=_1.replace(/<\s*HEAD[^>]*>(.|[\n\r\t])*<\/\s*HEAD\s*>/gi,"");
_1=_1.replace(/<\s*(\w[^>]*) class=([^ |>]*)([^>]*)/gi,"<$1$3");
_1=_1.replace(/<\s*(\w[^>]*) style="([^"]*)"([^>]*)/gi,"<$1$3");
_1=_1.replace(/<\s*(\w[^>]*) lang=([^ |>]*)([^>]*)/gi,"<$1$3");
_1=_1.replace(/<\\?\?xml[^>]*>/gi,"");
_1=_1.replace(/<\/?\w+:[^>]*>/gi,"");
_1=_1.replace(/&nbsp;/," ");
_1=_1.replace(/<\s*p[^>]*><\s*br\s*\/?>\s*<\/\s*p[^>]*>/gi,"<br>");
_1=_1.replace(/<\s*p[^>]*>/gi,"");
_1=_1.replace(/<\/\s*p[^>]*>/gi,"<br>");
_1=_1.replace(/(\s*<br>\s*)*$/,"");
_1=_1.trim();
return _1;
}

