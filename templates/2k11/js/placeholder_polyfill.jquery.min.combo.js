/**
 * Copyright (c) 2008 Tom Deater (http://www.tomdeater.com)
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 */
jQuery.onFontResize=(function(a){a(document).ready(function(){var c=a("<iframe />").attr("id","frame-onFontResize"+Date.parse(new Date)).addClass("div-onfontresize").css({width:"100em",height:"10px",position:"absolute",borderWidth:0,top:"-5000px",left:"-5000px"}).appendTo("body");
if(a.browser.msie){c.bind("resize",function(){a.onFontResize.trigger(c[0].offsetWidth/100);});}else{var b=c[0].contentWindow||c[0].contentDocument||c[0].document;
b=b.document||b;b.open();b.write('<script>window.onload = function(){var em = parent.jQuery(".div-onfontresize")[0];window.onresize = function(){if(parent.jQuery.onFontResize){parent.jQuery.onFontResize.trigger(em.offsetWidth / 100);}}};<\/script>');
b.close();}});return{trigger:function(b){a(document).trigger("fontresize",[b]);}};})(jQuery);

/*
 * jQuery resize event - v1.1 - 3/14/2010
 * http://benalman.com/projects/jquery-resize-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($,h,c){var a=$([]),e=$.resize=$.extend($.resize,{}),i,k="setTimeout",j="resize",d=j+"-special-event",b="delay",f="throttleWindow";e[b]=250;e[f]=true;$.event.special[j]={setup:function(){if(!e[f]&&this[k]){return false}var l=$(this);a=a.add(l);$.data(this,d,{w:l.width(),h:l.height()});if(a.length===1){g()}},teardown:function(){if(!e[f]&&this[k]){return false}var l=$(this);a=a.not(l);l.removeData(d);if(!a.length){clearTimeout(i)}},add:function(l){if(!e[f]&&this[k]){return false}var n;function m(s,o,p){var q=$(this),r=$.data(this,d);r.w=o!==c?o:q.width();r.h=p!==c?p:q.height();n.apply(this,arguments)}if($.isFunction(l)){n=l;return m}else{n=l.handler;l.handler=m}}};function g(){i=h[k](function(){a.each(function(){var n=$(this),m=n.width(),l=n.height(),o=$.data(this,d);if(m!==o.w||l!==o.h){n.trigger(j,[o.w=m,o.h=l])}});g()},e[b])}})(jQuery,this);


/**
* HTML5 placeholder polyfill
*
* code: https://github.com/ginader/HTML5-placeholder-polyfill
* please report issues at: https://github.com/ginader/HTML5-placeholder-polyfill/issues
*
* Copyright (c) 2012 Dirk Ginader (ginader.de)
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
*
* Version: 1.7
*/
(function(e){var b=false;function c(f,g){if(e.trim(f.val())===""){f.data("placeholder").removeClass(g.hideClass);}else{f.data("placeholder").addClass(g.hideClass);
}}function a(h,g){var f=g.is("textarea");h.css({width:g.innerWidth()-(f?20:4),height:g.innerHeight()-6,lineHeight:g.css("line-height"),whiteSpace:f?"normal":"nowrap",overflow:"hidden"}).offset(g.offset());
}function d(f){if(b&&window.console&&window.console.log){window.console.log(f);}}e.fn.placeHolder=function(f){var g=this;this.options=e.extend({className:"placeholder",visibleToScreenreaders:true,visibleToScreenreadersHideClass:"placeholder-hide-exept-screenreader",visibleToNoneHideClass:"placeholder-hide"},f);
this.options.hideClass=this.options.visibleToScreenreaders?this.options.visibleToScreenreadersHideClass:this.options.visibleToNoneHideClass;return e(this).each(function(){var h=e(this),l=h.attr("placeholder"),m=h.attr("id"),i,k,j;
i=h.closest("label")[0];h.attr("placeholder","");if(!i&&!m){d("the input element with the placeholder needs an id!");return;}i=i||e('label[for="'+m+'"]');
if(!i){d("the input element with the placeholder needs a label!");return;}k=e('<span class="'+g.options.className+'">'+l+"</span>").appendTo(i);j=(k.width()>h.width());
if(j){k.attr("title",l);}a(k,h);h.data("placeholder",k);k.data("input",k);k.click(function(){e(this).data("input").focus();});h.focusin(function(){e(this).data("placeholder").addClass(g.options.hideClass);
});h.focusout(function(){c(e(this),g.options);});c(h,g.options);e(document).bind("fontresize",function(){a(k,h);});if(e.event.special.resize){e("textarea").bind("resize",function(n){a(k,h);
});}else{e("textarea").css("resize","none");}});};e(function(){if("placeholder" in e("<input>")[0]){return;}e("input[placeholder], textarea[placeholder]").placeHolder({visibleToScreenreaders:true});
});})(jQuery);