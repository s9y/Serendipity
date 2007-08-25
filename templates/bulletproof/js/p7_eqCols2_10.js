/* 
  ------------------------------------------------
  PVII Equal CSS Columns scripts -Version 2
  Copyright (c) 2005 Project Seven Development
  www.projectseven.com
  Version: 2.1.0
  ------------------------------------------------
*/
function P7_colH2(){ //v2.1.0 by PVII-www.projectseven.com
 var i,oh,h=0,tg,el,np,dA=document.p7eqc,an=document.p7eqa;if(dA&&dA.length){
 for(i=1;i<dA.length;i+=2){dA[i+1].style.paddingBottom='';}for(i=1;i<dA.length;i+=2){
 oh=dA[i].offsetHeight;h=(oh>h)?oh:h;}for(i=1;i<dA.length;i+=2){oh=dA[i].offsetHeight;
 if(oh<h){np=h-oh;if(!an&&dA[0]==1){P7_eqA2(dA[i+1].id,0,np);}else{
 dA[i+1].style.paddingBottom=np+"px";}}}document.p7eqa=1;
 document.p7eqth=document.body.offsetHeight;
 document.p7eqtw=document.body.offsetWidth;}
}
function P7_eqT2(){ //v2.1.0 by PVII-www.projectseven.com
 if(document.p7eqth!=document.body.offsetHeight||document.p7eqtw!=document.body.offsetWidth){P7_colH2();}
}
function P7_equalCols2(){ //v2.1.0 by PVII-www.projectseven.com
 var c,e,el;if(document.getElementById){document.p7eqc=new Array();
 document.p7eqc[0]=arguments[0];for(i=1;i<arguments.length;i+=2){el=null;
 c=document.getElementById(arguments[i]);if(c){e=c.getElementsByTagName(arguments[i+1]);
 if(e){el=e[e.length-1];if(!el.id){el.id="p7eq"+i;}}}if(c&&el){
 document.p7eqc[document.p7eqc.length]=c;document.p7eqc[document.p7eqc.length]=el}}
 setInterval("P7_eqT2()",10);}
}
function P7_eqA2(el,p,pt){ //v2.1.0 by PVII-www.projectseven.com
 var sp=10,inc=20,g=document.getElementById(el);np=(p>=pt)?pt:p;
 g.style.paddingBottom=np+"px";if(np<pt){np+=inc;
 setTimeout("P7_eqA2('"+el+"',"+np+","+pt+")",sp);}
}