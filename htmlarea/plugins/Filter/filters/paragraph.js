/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Filter/filters/paragraph.js */
Paragraph=function(_1){
_1=_1.replace(/<\s*p[^>]*>/gi,"");
_1=_1.replace(/<\/\s*p\s*>/gi,"");
_1=_1.trim();
return _1;
};

