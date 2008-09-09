/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/Equation/ASCIIMathML.js */
var checkForMathML=true;
var notifyIfNoMathML=true;
var alertIfNoMathML=false;
if(typeof mathcolor=="undefined"){
var mathcolor="red";
}
if(typeof mathfontfamily=="undefined"){
var mathfontfamily="serif";
}
var displaystyle=true;
if(typeof showasciiformulaonhover=="undefined"){
var showasciiformulaonhover=true;
}
var decimalsign=".";
var AMdelimiter1="`",AMescape1="\\\\`";
var AMdelimiter2="$",AMescape2="\\\\\\$",AMdelimiter2regexp="\\$";
var doubleblankmathdelimiter=false;
var isIE=document.createElementNS==null;
if(document.getElementById==null){
alert("This webpage requires a recent browser such as\nMozilla/Netscape 7+ or Internet Explorer 6+MathPlayer");
}
function AMcreateElementXHTML(t){
if(isIE){
return document.createElement(t);
}else{
return document.createElementNS("http://www.w3.org/1999/xhtml",t);
}
}
function AMnoMathMLNote(){
var nd=AMcreateElementXHTML("h3");
nd.setAttribute("align","center");
nd.appendChild(AMcreateElementXHTML("p"));
nd.appendChild(document.createTextNode("To view the "));
var an=AMcreateElementXHTML("a");
an.appendChild(document.createTextNode("ASCIIMathML"));
an.setAttribute("href","http://www.chapman.edu/~jipsen/asciimath.html");
nd.appendChild(an);
nd.appendChild(document.createTextNode(" notation use Internet Explorer 6+"));
an=AMcreateElementXHTML("a");
an.appendChild(document.createTextNode("MathPlayer"));
an.setAttribute("href","http://www.dessci.com/en/products/mathplayer/download.htm");
nd.appendChild(an);
nd.appendChild(document.createTextNode(" or Netscape/Mozilla/Firefox"));
nd.appendChild(AMcreateElementXHTML("p"));
return nd;
}
function AMisMathMLavailable(){
if(navigator.appName.slice(0,8)=="Netscape"){
if(navigator.appVersion.slice(0,1)>="5"){
return null;
}else{
return AMnoMathMLNote();
}
}else{
if(navigator.appName.slice(0,9)=="Microsoft"){
try{
var _4=new ActiveXObject("MathPlayer.Factory.1");
return null;
}
catch(e){
return AMnoMathMLNote();
}
}else{
return AMnoMathMLNote();
}
}
}
var AMcal=[61237,8492,61238,61239,8496,8497,61240,8459,8464,61241,61242,8466,8499,61243,61244,61245,61246,8475,61247,61248,61249,61250,61251,61252,61253,61254];
var AMfrk=[61277,61278,8493,61279,61280,61281,61282,8460,8465,61283,61284,61285,61286,61287,61288,61289,61290,8476,61291,61292,61293,61294,61295,61296,61297,8488];
var AMbbb=[61324,61325,8450,61326,61327,61328,61329,8461,61330,61331,61332,61333,61334,8469,61335,8473,8474,8477,61336,61337,61338,61339,61340,61341,61342,8484];
var CONST=0,UNARY=1,BINARY=2,INFIX=3,LEFTBRACKET=4,RIGHTBRACKET=5,SPACE=6,UNDEROVER=7,DEFINITION=8,LEFTRIGHT=9,TEXT=10;
var AMsqrt={input:"sqrt",tag:"msqrt",output:"sqrt",tex:null,ttype:UNARY},AMroot={input:"root",tag:"mroot",output:"root",tex:null,ttype:BINARY},AMfrac={input:"frac",tag:"mfrac",output:"/",tex:null,ttype:BINARY},AMdiv={input:"/",tag:"mfrac",output:"/",tex:null,ttype:INFIX},AMover={input:"stackrel",tag:"mover",output:"stackrel",tex:null,ttype:BINARY},AMsub={input:"_",tag:"msub",output:"_",tex:null,ttype:INFIX},AMsup={input:"^",tag:"msup",output:"^",tex:null,ttype:INFIX},AMtext={input:"text",tag:"mtext",output:"text",tex:null,ttype:TEXT},AMmbox={input:"mbox",tag:"mtext",output:"mbox",tex:null,ttype:TEXT},AMquote={input:"\"",tag:"mtext",output:"mbox",tex:null,ttype:TEXT};
var AMsymbols=[{input:"alpha",tag:"mi",output:"\u03b1",tex:null,ttype:CONST},{input:"beta",tag:"mi",output:"\u03b2",tex:null,ttype:CONST},{input:"chi",tag:"mi",output:"\u03c7",tex:null,ttype:CONST},{input:"delta",tag:"mi",output:"\u03b4",tex:null,ttype:CONST},{input:"Delta",tag:"mo",output:"\u0394",tex:null,ttype:CONST},{input:"epsi",tag:"mi",output:"\u03b5",tex:"epsilon",ttype:CONST},{input:"varepsilon",tag:"mi",output:"\u025b",tex:null,ttype:CONST},{input:"eta",tag:"mi",output:"\u03b7",tex:null,ttype:CONST},{input:"gamma",tag:"mi",output:"\u03b3",tex:null,ttype:CONST},{input:"Gamma",tag:"mo",output:"\u0393",tex:null,ttype:CONST},{input:"iota",tag:"mi",output:"\u03b9",tex:null,ttype:CONST},{input:"kappa",tag:"mi",output:"\u03ba",tex:null,ttype:CONST},{input:"lambda",tag:"mi",output:"\u03bb",tex:null,ttype:CONST},{input:"Lambda",tag:"mo",output:"\u039b",tex:null,ttype:CONST},{input:"mu",tag:"mi",output:"\u03bc",tex:null,ttype:CONST},{input:"nu",tag:"mi",output:"\u03bd",tex:null,ttype:CONST},{input:"omega",tag:"mi",output:"\u03c9",tex:null,ttype:CONST},{input:"Omega",tag:"mo",output:"\u03a9",tex:null,ttype:CONST},{input:"phi",tag:"mi",output:"\u03c6",tex:null,ttype:CONST},{input:"varphi",tag:"mi",output:"\u03d5",tex:null,ttype:CONST},{input:"Phi",tag:"mo",output:"\u03a6",tex:null,ttype:CONST},{input:"pi",tag:"mi",output:"\u03c0",tex:null,ttype:CONST},{input:"Pi",tag:"mo",output:"\u03a0",tex:null,ttype:CONST},{input:"psi",tag:"mi",output:"\u03c8",tex:null,ttype:CONST},{input:"Psi",tag:"mi",output:"\u03a8",tex:null,ttype:CONST},{input:"rho",tag:"mi",output:"\u03c1",tex:null,ttype:CONST},{input:"sigma",tag:"mi",output:"\u03c3",tex:null,ttype:CONST},{input:"Sigma",tag:"mo",output:"\u03a3",tex:null,ttype:CONST},{input:"tau",tag:"mi",output:"\u03c4",tex:null,ttype:CONST},{input:"theta",tag:"mi",output:"\u03b8",tex:null,ttype:CONST},{input:"vartheta",tag:"mi",output:"\u03d1",tex:null,ttype:CONST},{input:"Theta",tag:"mo",output:"\u0398",tex:null,ttype:CONST},{input:"upsilon",tag:"mi",output:"\u03c5",tex:null,ttype:CONST},{input:"xi",tag:"mi",output:"\u03be",tex:null,ttype:CONST},{input:"Xi",tag:"mo",output:"\u039e",tex:null,ttype:CONST},{input:"zeta",tag:"mi",output:"\u03b6",tex:null,ttype:CONST},{input:"*",tag:"mo",output:"\u22c5",tex:"cdot",ttype:CONST},{input:"**",tag:"mo",output:"\u22c6",tex:"star",ttype:CONST},{input:"//",tag:"mo",output:"/",tex:null,ttype:CONST},{input:"\\\\",tag:"mo",output:"\\",tex:"backslash",ttype:CONST},{input:"setminus",tag:"mo",output:"\\",tex:null,ttype:CONST},{input:"xx",tag:"mo",output:"\xd7",tex:"times",ttype:CONST},{input:"-:",tag:"mo",output:"\xf7",tex:"divide",ttype:CONST},{input:"@",tag:"mo",output:"\u2218",tex:"circ",ttype:CONST},{input:"o+",tag:"mo",output:"\u2295",tex:"oplus",ttype:CONST},{input:"ox",tag:"mo",output:"\u2297",tex:"otimes",ttype:CONST},{input:"o.",tag:"mo",output:"\u2299",tex:"odot",ttype:CONST},{input:"sum",tag:"mo",output:"\u2211",tex:null,ttype:UNDEROVER},{input:"prod",tag:"mo",output:"\u220f",tex:null,ttype:UNDEROVER},{input:"^^",tag:"mo",output:"\u2227",tex:"wedge",ttype:CONST},{input:"^^^",tag:"mo",output:"\u22c0",tex:"bigwedge",ttype:UNDEROVER},{input:"vv",tag:"mo",output:"\u2228",tex:"vee",ttype:CONST},{input:"vvv",tag:"mo",output:"\u22c1",tex:"bigvee",ttype:UNDEROVER},{input:"nn",tag:"mo",output:"\u2229",tex:"cap",ttype:CONST},{input:"nnn",tag:"mo",output:"\u22c2",tex:"bigcap",ttype:UNDEROVER},{input:"uu",tag:"mo",output:"\u222a",tex:"cup",ttype:CONST},{input:"uuu",tag:"mo",output:"\u22c3",tex:"bigcup",ttype:UNDEROVER},{input:"!=",tag:"mo",output:"\u2260",tex:"ne",ttype:CONST},{input:":=",tag:"mo",output:":=",tex:null,ttype:CONST},{input:"lt",tag:"mo",output:"<",tex:null,ttype:CONST},{input:"<=",tag:"mo",output:"\u2264",tex:"le",ttype:CONST},{input:"lt=",tag:"mo",output:"\u2264",tex:"leq",ttype:CONST},{input:">=",tag:"mo",output:"\u2265",tex:"ge",ttype:CONST},{input:"geq",tag:"mo",output:"\u2265",tex:null,ttype:CONST},{input:"-<",tag:"mo",output:"\u227a",tex:"prec",ttype:CONST},{input:"-lt",tag:"mo",output:"\u227a",tex:null,ttype:CONST},{input:">-",tag:"mo",output:"\u227b",tex:"succ",ttype:CONST},{input:"-<=",tag:"mo",output:"\u2aaf",tex:"preceq",ttype:CONST},{input:">-=",tag:"mo",output:"\u2ab0",tex:"succeq",ttype:CONST},{input:"in",tag:"mo",output:"\u2208",tex:null,ttype:CONST},{input:"!in",tag:"mo",output:"\u2209",tex:"notin",ttype:CONST},{input:"sub",tag:"mo",output:"\u2282",tex:"subset",ttype:CONST},{input:"sup",tag:"mo",output:"\u2283",tex:"supset",ttype:CONST},{input:"sube",tag:"mo",output:"\u2286",tex:"subseteq",ttype:CONST},{input:"supe",tag:"mo",output:"\u2287",tex:"supseteq",ttype:CONST},{input:"-=",tag:"mo",output:"\u2261",tex:"equiv",ttype:CONST},{input:"~=",tag:"mo",output:"\u2245",tex:"cong",ttype:CONST},{input:"~~",tag:"mo",output:"\u2248",tex:"approx",ttype:CONST},{input:"prop",tag:"mo",output:"\u221d",tex:"propto",ttype:CONST},{input:"and",tag:"mtext",output:"and",tex:null,ttype:SPACE},{input:"or",tag:"mtext",output:"or",tex:null,ttype:SPACE},{input:"not",tag:"mo",output:"\xac",tex:"neg",ttype:CONST},{input:"=>",tag:"mo",output:"\u21d2",tex:"implies",ttype:CONST},{input:"if",tag:"mo",output:"if",tex:null,ttype:SPACE},{input:"<=>",tag:"mo",output:"\u21d4",tex:"iff",ttype:CONST},{input:"AA",tag:"mo",output:"\u2200",tex:"forall",ttype:CONST},{input:"EE",tag:"mo",output:"\u2203",tex:"exists",ttype:CONST},{input:"_|_",tag:"mo",output:"\u22a5",tex:"bot",ttype:CONST},{input:"TT",tag:"mo",output:"\u22a4",tex:"top",ttype:CONST},{input:"|--",tag:"mo",output:"\u22a2",tex:"vdash",ttype:CONST},{input:"|==",tag:"mo",output:"\u22a8",tex:"models",ttype:CONST},{input:"(",tag:"mo",output:"(",tex:null,ttype:LEFTBRACKET},{input:")",tag:"mo",output:")",tex:null,ttype:RIGHTBRACKET},{input:"[",tag:"mo",output:"[",tex:null,ttype:LEFTBRACKET},{input:"]",tag:"mo",output:"]",tex:null,ttype:RIGHTBRACKET},{input:"{",tag:"mo",output:"{",tex:null,ttype:LEFTBRACKET},{input:"}",tag:"mo",output:"}",tex:null,ttype:RIGHTBRACKET},{input:"|",tag:"mo",output:"|",tex:null,ttype:LEFTRIGHT},{input:"(:",tag:"mo",output:"\u2329",tex:"langle",ttype:LEFTBRACKET},{input:":)",tag:"mo",output:"\u232a",tex:"rangle",ttype:RIGHTBRACKET},{input:"<<",tag:"mo",output:"\u2329",tex:null,ttype:LEFTBRACKET},{input:">>",tag:"mo",output:"\u232a",tex:null,ttype:RIGHTBRACKET},{input:"{:",tag:"mo",output:"{:",tex:null,ttype:LEFTBRACKET,invisible:true},{input:":}",tag:"mo",output:":}",tex:null,ttype:RIGHTBRACKET,invisible:true},{input:"int",tag:"mo",output:"\u222b",tex:null,ttype:CONST},{input:"dx",tag:"mi",output:"{:d x:}",tex:null,ttype:DEFINITION},{input:"dy",tag:"mi",output:"{:d y:}",tex:null,ttype:DEFINITION},{input:"dz",tag:"mi",output:"{:d z:}",tex:null,ttype:DEFINITION},{input:"dt",tag:"mi",output:"{:d t:}",tex:null,ttype:DEFINITION},{input:"oint",tag:"mo",output:"\u222e",tex:null,ttype:CONST},{input:"del",tag:"mo",output:"\u2202",tex:"partial",ttype:CONST},{input:"grad",tag:"mo",output:"\u2207",tex:"nabla",ttype:CONST},{input:"+-",tag:"mo",output:"\xb1",tex:"pm",ttype:CONST},{input:"O/",tag:"mo",output:"\u2205",tex:"emptyset",ttype:CONST},{input:"oo",tag:"mo",output:"\u221e",tex:"infty",ttype:CONST},{input:"aleph",tag:"mo",output:"\u2135",tex:null,ttype:CONST},{input:"...",tag:"mo",output:"...",tex:"ldots",ttype:CONST},{input:":.",tag:"mo",output:"\u2234",tex:"therefore",ttype:CONST},{input:"/_",tag:"mo",output:"\u2220",tex:"angle",ttype:CONST},{input:"\\ ",tag:"mo",output:"\xa0",tex:null,ttype:CONST},{input:"quad",tag:"mo",output:"\xa0\xa0",tex:null,ttype:CONST},{input:"qquad",tag:"mo",output:"\xa0\xa0\xa0\xa0",tex:null,ttype:CONST},{input:"cdots",tag:"mo",output:"\u22ef",tex:null,ttype:CONST},{input:"vdots",tag:"mo",output:"\u22ee",tex:null,ttype:CONST},{input:"ddots",tag:"mo",output:"\u22f1",tex:null,ttype:CONST},{input:"diamond",tag:"mo",output:"\u22c4",tex:null,ttype:CONST},{input:"square",tag:"mo",output:"\u25a1",tex:null,ttype:CONST},{input:"|__",tag:"mo",output:"\u230a",tex:"lfloor",ttype:CONST},{input:"__|",tag:"mo",output:"\u230b",tex:"rfloor",ttype:CONST},{input:"|~",tag:"mo",output:"\u2308",tex:"lceiling",ttype:CONST},{input:"~|",tag:"mo",output:"\u2309",tex:"rceiling",ttype:CONST},{input:"CC",tag:"mo",output:"\u2102",tex:null,ttype:CONST},{input:"NN",tag:"mo",output:"\u2115",tex:null,ttype:CONST},{input:"QQ",tag:"mo",output:"\u211a",tex:null,ttype:CONST},{input:"RR",tag:"mo",output:"\u211d",tex:null,ttype:CONST},{input:"ZZ",tag:"mo",output:"\u2124",tex:null,ttype:CONST},{input:"f",tag:"mi",output:"f",tex:null,ttype:UNARY,func:true},{input:"g",tag:"mi",output:"g",tex:null,ttype:UNARY,func:true},{input:"lim",tag:"mo",output:"lim",tex:null,ttype:UNDEROVER},{input:"Lim",tag:"mo",output:"Lim",tex:null,ttype:UNDEROVER},{input:"sin",tag:"mo",output:"sin",tex:null,ttype:UNARY,func:true},{input:"cos",tag:"mo",output:"cos",tex:null,ttype:UNARY,func:true},{input:"tan",tag:"mo",output:"tan",tex:null,ttype:UNARY,func:true},{input:"sinh",tag:"mo",output:"sinh",tex:null,ttype:UNARY,func:true},{input:"cosh",tag:"mo",output:"cosh",tex:null,ttype:UNARY,func:true},{input:"tanh",tag:"mo",output:"tanh",tex:null,ttype:UNARY,func:true},{input:"cot",tag:"mo",output:"cot",tex:null,ttype:UNARY,func:true},{input:"sec",tag:"mo",output:"sec",tex:null,ttype:UNARY,func:true},{input:"csc",tag:"mo",output:"csc",tex:null,ttype:UNARY,func:true},{input:"log",tag:"mo",output:"log",tex:null,ttype:UNARY,func:true},{input:"ln",tag:"mo",output:"ln",tex:null,ttype:UNARY,func:true},{input:"det",tag:"mo",output:"det",tex:null,ttype:UNARY,func:true},{input:"dim",tag:"mo",output:"dim",tex:null,ttype:CONST},{input:"mod",tag:"mo",output:"mod",tex:null,ttype:CONST},{input:"gcd",tag:"mo",output:"gcd",tex:null,ttype:UNARY,func:true},{input:"lcm",tag:"mo",output:"lcm",tex:null,ttype:UNARY,func:true},{input:"lub",tag:"mo",output:"lub",tex:null,ttype:CONST},{input:"glb",tag:"mo",output:"glb",tex:null,ttype:CONST},{input:"min",tag:"mo",output:"min",tex:null,ttype:UNDEROVER},{input:"max",tag:"mo",output:"max",tex:null,ttype:UNDEROVER},{input:"uarr",tag:"mo",output:"\u2191",tex:"uparrow",ttype:CONST},{input:"darr",tag:"mo",output:"\u2193",tex:"downarrow",ttype:CONST},{input:"rarr",tag:"mo",output:"\u2192",tex:"rightarrow",ttype:CONST},{input:"->",tag:"mo",output:"\u2192",tex:"to",ttype:CONST},{input:"|->",tag:"mo",output:"\u21a6",tex:"mapsto",ttype:CONST},{input:"larr",tag:"mo",output:"\u2190",tex:"leftarrow",ttype:CONST},{input:"harr",tag:"mo",output:"\u2194",tex:"leftrightarrow",ttype:CONST},{input:"rArr",tag:"mo",output:"\u21d2",tex:"Rightarrow",ttype:CONST},{input:"lArr",tag:"mo",output:"\u21d0",tex:"Leftarrow",ttype:CONST},{input:"hArr",tag:"mo",output:"\u21d4",tex:"Leftrightarrow",ttype:CONST},AMsqrt,AMroot,AMfrac,AMdiv,AMover,AMsub,AMsup,{input:"hat",tag:"mover",output:"^",tex:null,ttype:UNARY,acc:true},{input:"bar",tag:"mover",output:"\xaf",tex:"overline",ttype:UNARY,acc:true},{input:"vec",tag:"mover",output:"\u2192",tex:null,ttype:UNARY,acc:true},{input:"dot",tag:"mover",output:".",tex:null,ttype:UNARY,acc:true},{input:"ddot",tag:"mover",output:"..",tex:null,ttype:UNARY,acc:true},{input:"ul",tag:"munder",output:"\u0332",tex:"underline",ttype:UNARY,acc:true},AMtext,AMmbox,AMquote,{input:"bb",tag:"mstyle",atname:"fontweight",atval:"bold",output:"bb",tex:null,ttype:UNARY},{input:"mathbf",tag:"mstyle",atname:"fontweight",atval:"bold",output:"mathbf",tex:null,ttype:UNARY},{input:"sf",tag:"mstyle",atname:"fontfamily",atval:"sans-serif",output:"sf",tex:null,ttype:UNARY},{input:"mathsf",tag:"mstyle",atname:"fontfamily",atval:"sans-serif",output:"mathsf",tex:null,ttype:UNARY},{input:"bbb",tag:"mstyle",atname:"mathvariant",atval:"double-struck",output:"bbb",tex:null,ttype:UNARY,codes:AMbbb},{input:"mathbb",tag:"mstyle",atname:"mathvariant",atval:"double-struck",output:"mathbb",tex:null,ttype:UNARY,codes:AMbbb},{input:"cc",tag:"mstyle",atname:"mathvariant",atval:"script",output:"cc",tex:null,ttype:UNARY,codes:AMcal},{input:"mathcal",tag:"mstyle",atname:"mathvariant",atval:"script",output:"mathcal",tex:null,ttype:UNARY,codes:AMcal},{input:"tt",tag:"mstyle",atname:"fontfamily",atval:"monospace",output:"tt",tex:null,ttype:UNARY},{input:"mathtt",tag:"mstyle",atname:"fontfamily",atval:"monospace",output:"mathtt",tex:null,ttype:UNARY},{input:"fr",tag:"mstyle",atname:"mathvariant",atval:"fraktur",output:"fr",tex:null,ttype:UNARY,codes:AMfrk},{input:"mathfrak",tag:"mstyle",atname:"mathvariant",atval:"fraktur",output:"mathfrak",tex:null,ttype:UNARY,codes:AMfrk}];
function compareNames(s1,s2){
if(s1.input>s2.input){
return 1;
}else{
return -1;
}
}
var AMnames=[];
function AMinitSymbols(){
var _7=[],i;
for(i=0;i<AMsymbols.length;i++){
if(AMsymbols[i].tex){
_7[_7.length]={input:AMsymbols[i].tex,tag:AMsymbols[i].tag,output:AMsymbols[i].output,ttype:AMsymbols[i].ttype};
}
}
AMsymbols=AMsymbols.concat(_7);
AMsymbols.sort(compareNames);
for(i=0;i<AMsymbols.length;i++){
AMnames[i]=AMsymbols[i].input;
}
}
var AMmathml="http://www.w3.org/1998/Math/MathML";
function AMcreateElementMathML(t){
if(isIE){
return document.createElement("m:"+t);
}else{
return document.createElementNS(AMmathml,t);
}
}
function AMcreateMmlNode(t,_a){
if(isIE){
var _b=document.createElement("m:"+t);
}else{
var _b=document.createElementNS(AMmathml,t);
}
_b.appendChild(_a);
return _b;
}
function newcommand(_c,_d){
AMsymbols=AMsymbols.concat([{input:_c,tag:"mo",output:_d,tex:null,ttype:DEFINITION}]);
}
function AMremoveCharsAndBlanks(_e,n){
var st;
if(_e.charAt(n)=="\\"&&_e.charAt(n+1)!="\\"&&_e.charAt(n+1)!=" "){
st=_e.slice(n+1);
}else{
st=_e.slice(n);
}
for(var i=0;i<st.length&&st.charCodeAt(i)<=32;i=i+1){
}
return st.slice(i);
}
function AMposition(arr,str,n){
if(n==0){
var h,m;
n=-1;
h=arr.length;
while(n+1<h){
m=(n+h)>>1;
if(arr[m]<str){
n=m;
}else{
h=m;
}
}
return h;
}else{
for(var i=n;i<arr.length&&arr[i]<str;i++){
}
}
return i;
}
function AMgetSymbol(str){
var k=0;
var j=0;
var mk;
var st;
var _1c;
var _1d="";
var _1e=true;
for(var i=1;i<=str.length&&_1e;i++){
st=str.slice(0,i);
j=k;
k=AMposition(AMnames,st,j);
if(k<AMnames.length&&str.slice(0,AMnames[k].length)==AMnames[k]){
_1d=AMnames[k];
mk=k;
i=_1d.length;
}
_1e=k<AMnames.length&&str.slice(0,AMnames[k].length)>=AMnames[k];
}
AMpreviousSymbol=AMcurrentSymbol;
if(_1d!=""){
AMcurrentSymbol=AMsymbols[mk].ttype;
return AMsymbols[mk];
}
AMcurrentSymbol=CONST;
k=1;
st=str.slice(0,1);
var _20=true;
while("0"<=st&&st<="9"&&k<=str.length){
st=str.slice(k,k+1);
k++;
}
if(st==decimalsign){
st=str.slice(k,k+1);
if("0"<=st&&st<="9"){
_20=false;
k++;
while("0"<=st&&st<="9"&&k<=str.length){
st=str.slice(k,k+1);
k++;
}
}
}
if((_20&&k>1)||k>2){
st=str.slice(0,k-1);
_1c="mn";
}else{
k=2;
st=str.slice(0,1);
_1c=(("A">st||st>"Z")&&("a">st||st>"z")?"mo":"mi");
}
if(st=="-"&&AMpreviousSymbol==INFIX){
AMcurrentSymbol=INFIX;
return {input:st,tag:_1c,output:st,ttype:UNARY,func:true};
}
return {input:st,tag:_1c,output:st,ttype:CONST};
}
function AMremoveBrackets(_21){
var st;
if(_21.nodeName=="mrow"){
st=_21.firstChild.firstChild.nodeValue;
if(st=="("||st=="["||st=="{"){
_21.removeChild(_21.firstChild);
}
}
if(_21.nodeName=="mrow"){
st=_21.lastChild.firstChild.nodeValue;
if(st==")"||st=="]"||st=="}"){
_21.removeChild(_21.lastChild);
}
}
}
var AMnestingDepth,AMpreviousSymbol,AMcurrentSymbol;
function AMparseSexpr(str){
var _24,node,result,i,st,newFrag=document.createDocumentFragment();
str=AMremoveCharsAndBlanks(str,0);
_24=AMgetSymbol(str);
if(_24==null||_24.ttype==RIGHTBRACKET&&AMnestingDepth>0){
return [null,str];
}
if(_24.ttype==DEFINITION){
str=_24.output+AMremoveCharsAndBlanks(str,_24.input.length);
_24=AMgetSymbol(str);
}
switch(_24.ttype){
case UNDEROVER:
case CONST:
str=AMremoveCharsAndBlanks(str,_24.input.length);
return [AMcreateMmlNode(_24.tag,document.createTextNode(_24.output)),str];
case LEFTBRACKET:
AMnestingDepth++;
str=AMremoveCharsAndBlanks(str,_24.input.length);
result=AMparseExpr(str,true);
AMnestingDepth--;
if(typeof _24.invisible=="boolean"&&_24.invisible){
node=AMcreateMmlNode("mrow",result[0]);
}else{
node=AMcreateMmlNode("mo",document.createTextNode(_24.output));
node=AMcreateMmlNode("mrow",node);
node.appendChild(result[0]);
}
return [node,result[1]];
case TEXT:
if(_24!=AMquote){
str=AMremoveCharsAndBlanks(str,_24.input.length);
}
if(str.charAt(0)=="{"){
i=str.indexOf("}");
}else{
if(str.charAt(0)=="("){
i=str.indexOf(")");
}else{
if(str.charAt(0)=="["){
i=str.indexOf("]");
}else{
if(_24==AMquote){
i=str.slice(1).indexOf("\"")+1;
}else{
i=0;
}
}
}
}
if(i==-1){
i=str.length;
}
st=str.slice(1,i);
if(st.charAt(0)==" "){
node=AMcreateElementMathML("mspace");
node.setAttribute("width","1ex");
newFrag.appendChild(node);
}
newFrag.appendChild(AMcreateMmlNode(_24.tag,document.createTextNode(st)));
if(st.charAt(st.length-1)==" "){
node=AMcreateElementMathML("mspace");
node.setAttribute("width","1ex");
newFrag.appendChild(node);
}
str=AMremoveCharsAndBlanks(str,i+1);
return [AMcreateMmlNode("mrow",newFrag),str];
case UNARY:
str=AMremoveCharsAndBlanks(str,_24.input.length);
result=AMparseSexpr(str);
if(result[0]==null){
return [AMcreateMmlNode(_24.tag,document.createTextNode(_24.output)),str];
}
if(typeof _24.func=="boolean"&&_24.func){
st=str.charAt(0);
if(st=="^"||st=="_"||st=="/"||st=="|"||st==","){
return [AMcreateMmlNode(_24.tag,document.createTextNode(_24.output)),str];
}else{
node=AMcreateMmlNode("mrow",AMcreateMmlNode(_24.tag,document.createTextNode(_24.output)));
node.appendChild(result[0]);
return [node,result[1]];
}
}
AMremoveBrackets(result[0]);
if(_24.input=="sqrt"){
return [AMcreateMmlNode(_24.tag,result[0]),result[1]];
}else{
if(typeof _24.acc=="boolean"&&_24.acc){
node=AMcreateMmlNode(_24.tag,result[0]);
node.appendChild(AMcreateMmlNode("mo",document.createTextNode(_24.output)));
return [node,result[1]];
}else{
if(!isIE&&typeof _24.codes!="undefined"){
for(i=0;i<result[0].childNodes.length;i++){
if(result[0].childNodes[i].nodeName=="mi"||result[0].nodeName=="mi"){
st=(result[0].nodeName=="mi"?result[0].firstChild.nodeValue:result[0].childNodes[i].firstChild.nodeValue);
var _25=[];
for(var j=0;j<st.length;j++){
if(st.charCodeAt(j)>64&&st.charCodeAt(j)<91){
_25=_25+String.fromCharCode(_24.codes[st.charCodeAt(j)-65]);
}else{
_25=_25+st.charAt(j);
}
}
if(result[0].nodeName=="mi"){
result[0]=AMcreateElementMathML("mo").appendChild(document.createTextNode(_25));
}else{
result[0].replaceChild(AMcreateElementMathML("mo").appendChild(document.createTextNode(_25)),result[0].childNodes[i]);
}
}
}
}
node=AMcreateMmlNode(_24.tag,result[0]);
node.setAttribute(_24.atname,_24.atval);
return [node,result[1]];
}
}
case BINARY:
str=AMremoveCharsAndBlanks(str,_24.input.length);
result=AMparseSexpr(str);
if(result[0]==null){
return [AMcreateMmlNode("mo",document.createTextNode(_24.input)),str];
}
AMremoveBrackets(result[0]);
var _27=AMparseSexpr(result[1]);
if(_27[0]==null){
return [AMcreateMmlNode("mo",document.createTextNode(_24.input)),str];
}
AMremoveBrackets(_27[0]);
if(_24.input=="root"||_24.input=="stackrel"){
newFrag.appendChild(_27[0]);
}
newFrag.appendChild(result[0]);
if(_24.input=="frac"){
newFrag.appendChild(_27[0]);
}
return [AMcreateMmlNode(_24.tag,newFrag),_27[1]];
case INFIX:
str=AMremoveCharsAndBlanks(str,_24.input.length);
return [AMcreateMmlNode("mo",document.createTextNode(_24.output)),str];
case SPACE:
str=AMremoveCharsAndBlanks(str,_24.input.length);
node=AMcreateElementMathML("mspace");
node.setAttribute("width","1ex");
newFrag.appendChild(node);
newFrag.appendChild(AMcreateMmlNode(_24.tag,document.createTextNode(_24.output)));
node=AMcreateElementMathML("mspace");
node.setAttribute("width","1ex");
newFrag.appendChild(node);
return [AMcreateMmlNode("mrow",newFrag),str];
case LEFTRIGHT:
AMnestingDepth++;
str=AMremoveCharsAndBlanks(str,_24.input.length);
result=AMparseExpr(str,false);
AMnestingDepth--;
var st="";
if(result[0].lastChild!=null){
st=result[0].lastChild.firstChild.nodeValue;
}
if(st=="|"){
node=AMcreateMmlNode("mo",document.createTextNode(_24.output));
node=AMcreateMmlNode("mrow",node);
node.appendChild(result[0]);
return [node,result[1]];
}else{
node=AMcreateMmlNode("mo",document.createTextNode(_24.output));
node=AMcreateMmlNode("mrow",node);
return [node,str];
}
default:
str=AMremoveCharsAndBlanks(str,_24.input.length);
return [AMcreateMmlNode(_24.tag,document.createTextNode(_24.output)),str];
}
}
function AMparseIexpr(str){
var _2a,sym1,sym2,node,result,underover;
str=AMremoveCharsAndBlanks(str,0);
sym1=AMgetSymbol(str);
result=AMparseSexpr(str);
node=result[0];
str=result[1];
_2a=AMgetSymbol(str);
if(_2a.ttype==INFIX&&_2a.input!="/"){
str=AMremoveCharsAndBlanks(str,_2a.input.length);
result=AMparseSexpr(str);
if(result[0]==null){
result[0]=AMcreateMmlNode("mo",document.createTextNode("\u25a1"));
}else{
AMremoveBrackets(result[0]);
}
str=result[1];
if(_2a.input=="_"){
sym2=AMgetSymbol(str);
underover=(sym1.ttype==UNDEROVER);
if(sym2.input=="^"){
str=AMremoveCharsAndBlanks(str,sym2.input.length);
var _2b=AMparseSexpr(str);
AMremoveBrackets(_2b[0]);
str=_2b[1];
node=AMcreateMmlNode((underover?"munderover":"msubsup"),node);
node.appendChild(result[0]);
node.appendChild(_2b[0]);
node=AMcreateMmlNode("mrow",node);
}else{
node=AMcreateMmlNode((underover?"munder":"msub"),node);
node.appendChild(result[0]);
}
}else{
node=AMcreateMmlNode(_2a.tag,node);
node.appendChild(result[0]);
}
}
return [node,str];
}
function AMparseExpr(str,_2d){
var _2e,node,result,i,nodeList=[],newFrag=document.createDocumentFragment();
do{
str=AMremoveCharsAndBlanks(str,0);
result=AMparseIexpr(str);
node=result[0];
str=result[1];
_2e=AMgetSymbol(str);
if(_2e.ttype==INFIX&&_2e.input=="/"){
str=AMremoveCharsAndBlanks(str,_2e.input.length);
result=AMparseIexpr(str);
if(result[0]==null){
result[0]=AMcreateMmlNode("mo",document.createTextNode("\u25a1"));
}else{
AMremoveBrackets(result[0]);
}
str=result[1];
AMremoveBrackets(node);
node=AMcreateMmlNode(_2e.tag,node);
node.appendChild(result[0]);
newFrag.appendChild(node);
_2e=AMgetSymbol(str);
}else{
if(node!=undefined){
newFrag.appendChild(node);
}
}
}while((_2e.ttype!=RIGHTBRACKET&&(_2e.ttype!=LEFTRIGHT||_2d)||AMnestingDepth==0)&&_2e!=null&&_2e.output!="");
if(_2e.ttype==RIGHTBRACKET||_2e.ttype==LEFTRIGHT){
var len=newFrag.childNodes.length;
if(len>0&&newFrag.childNodes[len-1].nodeName=="mrow"&&len>1&&newFrag.childNodes[len-2].nodeName=="mo"&&newFrag.childNodes[len-2].firstChild.nodeValue==","){
var _30=newFrag.childNodes[len-1].lastChild.firstChild.nodeValue;
if(_30==")"||_30=="]"){
var _31=newFrag.childNodes[len-1].firstChild.firstChild.nodeValue;
if(_31=="("&&_30==")"&&_2e.output!="}"||_31=="["&&_30=="]"){
var pos=[];
var _33=true;
var m=newFrag.childNodes.length;
for(i=0;_33&&i<m;i=i+2){
pos[i]=[];
node=newFrag.childNodes[i];
if(_33){
_33=node.nodeName=="mrow"&&(i==m-1||node.nextSibling.nodeName=="mo"&&node.nextSibling.firstChild.nodeValue==",")&&node.firstChild.firstChild.nodeValue==_31&&node.lastChild.firstChild.nodeValue==_30;
}
if(_33){
for(var j=0;j<node.childNodes.length;j++){
if(node.childNodes[j].firstChild.nodeValue==","){
pos[i][pos[i].length]=j;
}
}
}
if(_33&&i>1){
_33=pos[i].length==pos[i-2].length;
}
}
if(_33){
var row,frag,n,k,table=document.createDocumentFragment();
for(i=0;i<m;i=i+2){
row=document.createDocumentFragment();
frag=document.createDocumentFragment();
node=newFrag.firstChild;
n=node.childNodes.length;
k=0;
node.removeChild(node.firstChild);
for(j=1;j<n-1;j++){
if(typeof pos[i][k]!="undefined"&&j==pos[i][k]){
node.removeChild(node.firstChild);
row.appendChild(AMcreateMmlNode("mtd",frag));
k++;
}else{
frag.appendChild(node.firstChild);
}
}
row.appendChild(AMcreateMmlNode("mtd",frag));
if(newFrag.childNodes.length>2){
newFrag.removeChild(newFrag.firstChild);
newFrag.removeChild(newFrag.firstChild);
}
table.appendChild(AMcreateMmlNode("mtr",row));
}
node=AMcreateMmlNode("mtable",table);
if(typeof _2e.invisible=="boolean"&&_2e.invisible){
node.setAttribute("columnalign","left");
}
newFrag.replaceChild(node,newFrag.firstChild);
}
}
}
}
str=AMremoveCharsAndBlanks(str,_2e.input.length);
if(typeof _2e.invisible!="boolean"||!_2e.invisible){
node=AMcreateMmlNode("mo",document.createTextNode(_2e.output));
newFrag.appendChild(node);
}
}
return [newFrag,str];
}
function AMparseMath(str){
var _38,node=AMcreateElementMathML("mstyle");
if(mathcolor!=""){
node.setAttribute("mathcolor",mathcolor);
}
if(displaystyle){
node.setAttribute("displaystyle","true");
}
if(mathfontfamily!=""){
node.setAttribute("fontfamily",mathfontfamily);
}
AMnestingDepth=0;
node.appendChild(AMparseExpr(str.replace(/^\s+/g,""),false)[0]);
node=AMcreateMmlNode("math",node);
if(showasciiformulaonhover){
node.setAttribute("title",str.replace(/\s+/g," "));
}
if(mathfontfamily!=""&&(isIE||mathfontfamily!="serif")){
var _39=AMcreateElementXHTML("font");
_39.setAttribute("face",mathfontfamily);
_39.appendChild(node);
return _39;
}
return node;
}
function AMstrarr2docFrag(arr,_3b){
var _3c=document.createDocumentFragment();
var _3d=false;
for(var i=0;i<arr.length;i++){
if(_3d){
_3c.appendChild(AMparseMath(arr[i]));
}else{
var _3f=(_3b?arr[i].split("\n\n"):[arr[i]]);
_3c.appendChild(AMcreateElementXHTML("span").appendChild(document.createTextNode(_3f[0])));
for(var j=1;j<_3f.length;j++){
_3c.appendChild(AMcreateElementXHTML("p"));
_3c.appendChild(AMcreateElementXHTML("span").appendChild(document.createTextNode(_3f[j])));
}
}
_3d=!_3d;
}
return _3c;
}
function AMprocessNodeR(n,_42){
var _43,str,arr,frg,i;
if(n.childNodes.length==0){
if((n.nodeType!=8||_42)&&n.parentNode.nodeName!="form"&&n.parentNode.nodeName!="FORM"&&n.parentNode.nodeName!="textarea"&&n.parentNode.nodeName!="TEXTAREA"&&n.parentNode.nodeName!="pre"&&n.parentNode.nodeName!="PRE"){
str=n.nodeValue;
if(!(str==null)){
str=str.replace(/\r\n\r\n/g,"\n\n");
if(doubleblankmathdelimiter){
str=str.replace(/\x20\x20\./g," "+AMdelimiter1+".");
str=str.replace(/\x20\x20,/g," "+AMdelimiter1+",");
str=str.replace(/\x20\x20/g," "+AMdelimiter1+" ");
}
str=str.replace(/\x20+/g," ");
str=str.replace(/\s*\r\n/g," ");
_43=false;
str=str.replace(new RegExp(AMescape2,"g"),function(st){
_43=true;
return "AMescape2";
});
str=str.replace(new RegExp(AMescape1,"g"),function(st){
_43=true;
return "AMescape1";
});
str=str.replace(new RegExp(AMdelimiter2regexp,"g"),AMdelimiter1);
arr=str.split(AMdelimiter1);
for(i=0;i<arr.length;i++){
arr[i]=arr[i].replace(/AMescape2/g,AMdelimiter2).replace(/AMescape1/g,AMdelimiter1);
}
if(arr.length>1||_43){
if(checkForMathML){
checkForMathML=false;
var nd=AMisMathMLavailable();
AMnoMathML=nd!=null;
if(AMnoMathML&&notifyIfNoMathML){
if(alertIfNoMathML){
alert("To view the ASCIIMathML notation use Internet Explorer 6 +\nMathPlayer (free from www.dessci.com)\n                or Firefox/Mozilla/Netscape");
}else{
AMbody.insertBefore(nd,AMbody.childNodes[0]);
}
}
}
if(!AMnoMathML){
frg=AMstrarr2docFrag(arr,n.nodeType==8);
var len=frg.childNodes.length;
n.parentNode.replaceChild(frg,n);
return len-1;
}else{
return 0;
}
}
}
}else{
return 0;
}
}else{
if(n.nodeName!="math"){
for(i=0;i<n.childNodes.length;i++){
i+=AMprocessNodeR(n.childNodes[i],_42);
}
}
}
return 0;
}
function AMprocessNode(n,_49,_4a){
var _4b,st;
if(_4a!=null){
_4b=document.getElementsByTagName("span");
for(var i=0;i<_4b.length;i++){
if(_4b[i].className=="AM"){
AMprocessNodeR(_4b[i],_49);
}
}
}else{
try{
st=n.innerHTML;
}
catch(err){
}
if(st==null||st.indexOf(AMdelimiter1)!=-1||st.indexOf(AMdelimiter2)!=-1){
AMprocessNodeR(n,_49);
}
}
if(isIE){
_4b=document.getElementsByTagName("math");
for(var i=0;i<_4b.length;i++){
_4b[i].update();
}
}
}
var AMbody;
var AMnoMathML=false,AMtranslated=false;
function translate(_4d){
if(!AMtranslated){
AMtranslated=true;
AMinitSymbols();
AMbody=document.getElementsByTagName("body")[0];
AMprocessNode(AMbody,false,_4d);
}
}
if(isIE){
document.write("<object id=\"mathplayer\"  classid=\"clsid:32F66A20-7614-11D4-BD11-00104BD3F987\"></object>");
document.write("<"+"?import namespace=\"m\" implementation=\"#mathplayer\"?>");
}
function generic(){
translate();
}
if(typeof window.addEventListener!="undefined"){
window.addEventListener("load",generic,false);
}else{
if(typeof document.addEventListener!="undefined"){
document.addEventListener("load",generic,false);
}else{
if(typeof window.attachEvent!="undefined"){
window.attachEvent("onload",generic);
}else{
if(typeof window.onload=="function"){
var existing=onload;
window.onload=function(){
existing();
generic();
};
}else{
window.onload=generic;
}
}
}
}

