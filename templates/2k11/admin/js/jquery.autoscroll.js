/*
 * AutoScroll Plugin for jQuery
 *
 * Copyright (c) 2006 Jonathan Sharp (jdsharp.us)
 * Licensed under the GPL license.
 *
 * http://jdsharp.us/code/AutoScroll/
 *
 * Date: 2006-09-19
 * Rev: 001
 */
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[(function(e){return d[e]})];e=(function(){return'\\w+'});c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$.2={5:{},f:0,m:18,14:i(t){$.2.5={4:G,9:15,f:G,B:17};c(t){12(o 16 t){$.2.5[o]=t[o]}}g.19=$.2.C;g.1a=$.2.I;g.1b=i(){1c($.2.f);$.2.f=0}},I:i(e){3 e=e||8.m;3 k=e.K?e.K:e.A?e.A:e.M;c($.2.f==0&&($.2.5.B==k)){$.2.f=N($.2.4,$.2.5.f)}},C:i(e){3 e=e||8.m;3 6=g.P;3 b=g.Q;$.2.m={a:{x:e.R||(e.W+(6.l||b.l)-(6.S||0)),y:e.T||(e.U+(6.j||b.j)-(6.X||0))},z:{w:8.Y||(6.n&&6.n!=0?6.n:b.Z),h:8.10||(6.D&&6.n!=0?6.D:b.11)},7:{x:(g.H?(!6.l?b.l:6.l):(8.F?8.F:8.13)),y:(g.H?(!6.j?b.j:6.j):(8.J?8.J:8.L))}}},4:i(){3 e=$.2.m;c(!e){O}3 p=e.7.x;3 q=e.7.x+e.z.w;3 x=e.a.x;3 r=e.7.y;3 v=e.7.y+e.z.h;3 y=e.a.y;c(p<=x&&x<=(p+$.2.5.9)){3 d=(1-((x-p)/$.2.5.9));3 4=u.s(d*$.2.5.4,0);e.7.x+=-4;e.a.x+=-4}E c((q-$.2.5.9)<=x&&x<=q){3 d=(1-((q-x)/$.2.5.9));3 4=u.s(d*$.2.5.4,0);e.7.x+=4;e.a.x+=4}c(r<=y&&y<=(r+$.2.5.9)){3 d=(1-((y-r)/$.2.5.9));3 4=u.s(d*$.2.5.4,0);e.7.y+=-4;e.a.y+=-4}E c((v-$.2.5.9)<=y&&y<=v){3 d=(1-((v-y)/$.2.5.9));3 4=u.s(d*$.2.5.4,0);e.7.y+=4;e.a.y+=4}c(e.7.x<0){e.7.x=0;e.a.x=0}c(e.7.y<0){e.7.y=0;e.a.y=0}8.V(e.7.x,e.7.y)}};',62,75,'||autoscroll|var|step|settings|de|scroll|window|trigger|cursor||if|ratio||interval|document||function|scrollTop||scrollLeft|event|clientWidth||hot_l|hot_r|hot_t|round|opts|Math|hot_b||||win|keyCode|mod_key|setMouseEvent|clientHeight|else|pageXOffset|80|all|setKeyEvent|pageYOffset|charCode|scrollY|which|setInterval|return|documentElement|body|pageX|clientLeft|pageY|clientY|scrollTo|clientX|clientTop|innerWidth|offsetWidth|innerHeight|offsetHeight|for|scrollX|init|75|in||null|onmousemove|onkeydown|onkeyup|clearInterval'.split('|'),0,{}))
