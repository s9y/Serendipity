// S9Y-MERGE START jquery.magnific-popup.js - 2016-04-20 08:19
// Magnific Popup v1.1.0 by Dmitry Semenov
// http://bit.ly/magnific-popup#build=inline+image+iframe+imagezoom
(function(a){typeof define=="function"&&define.amd?define(["jquery"],a):typeof exports=="object"?a(require("jquery")):a(window.jQuery||window.Zepto)})(function(a){var b="Close",c="BeforeClose",d="AfterClose",e="BeforeAppend",f="MarkupParse",g="Open",h="Change",i="mfp",j="."+i,k="mfp-ready",l="mfp-removing",m="mfp-prevent-close",n,o=function(){},p=!!window.jQuery,q,r=a(window),s,t,u,v,w=function(a,b){n.ev.on(i+a+j,b)},x=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},y=function(b,c){n.ev.triggerHandler(i+b,c),n.st.callbacks&&(b=b.charAt(0).toLowerCase()+b.slice(1),n.st.callbacks[b]&&n.st.callbacks[b].apply(n,a.isArray(c)?c:[c]))},z=function(b){if(b!==v||!n.currTemplate.closeBtn)n.currTemplate.closeBtn=a(n.st.closeMarkup.replace("%title%",n.st.tClose)),v=b;return n.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(n=new o,n.init(),a.magnificPopup.instance=n)},B=function(){var a=document.createElement("p").style,b=["ms","O","Moz","Webkit"];if(a.transition!==undefined)return!0;while(b.length)if(b.pop()+"Transition"in a)return!0;return!1};o.prototype={constructor:o,init:function(){var b=navigator.appVersion;n.isLowIE=n.isIE8=document.all&&!document.addEventListener,n.isAndroid=/android/gi.test(b),n.isIOS=/iphone|ipad|ipod/gi.test(b),n.supportsTransition=B(),n.probablyMobile=n.isAndroid||n.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),s=a(document),n.popupsCache={}},open:function(b){var c;if(b.isObj===!1){n.items=b.items.toArray(),n.index=0;var d=b.items,e;for(c=0;c<d.length;c++){e=d[c],e.parsed&&(e=e.el[0]);if(e===b.el[0]){n.index=c;break}}}else n.items=a.isArray(b.items)?b.items:[b.items],n.index=b.index||0;if(n.isOpen){n.updateItemHTML();return}n.types=[],u="",b.mainEl&&b.mainEl.length?n.ev=b.mainEl.eq(0):n.ev=s,b.key?(n.popupsCache[b.key]||(n.popupsCache[b.key]={}),n.currTemplate=n.popupsCache[b.key]):n.currTemplate={},n.st=a.extend(!0,{},a.magnificPopup.defaults,b),n.fixedContentPos=n.st.fixedContentPos==="auto"?!n.probablyMobile:n.st.fixedContentPos,n.st.modal&&(n.st.closeOnContentClick=!1,n.st.closeOnBgClick=!1,n.st.showCloseBtn=!1,n.st.enableEscapeKey=!1),n.bgOverlay||(n.bgOverlay=x("bg").on("click"+j,function(){n.close()}),n.wrap=x("wrap").attr("tabindex",-1).on("click"+j,function(a){n._checkIfClose(a.target)&&n.close()}),n.container=x("container",n.wrap)),n.contentContainer=x("content"),n.st.preloader&&(n.preloader=x("preloader",n.container,n.st.tLoading));var h=a.magnificPopup.modules;for(c=0;c<h.length;c++){var i=h[c];i=i.charAt(0).toUpperCase()+i.slice(1),n["init"+i].call(n)}y("BeforeOpen"),n.st.showCloseBtn&&(n.st.closeBtnInside?(w(f,function(a,b,c,d){c.close_replaceWith=z(d.type)}),u+=" mfp-close-btn-in"):n.wrap.append(z())),n.st.alignTop&&(u+=" mfp-align-top"),n.fixedContentPos?n.wrap.css({overflow:n.st.overflowY,overflowX:"hidden",overflowY:n.st.overflowY}):n.wrap.css({top:r.scrollTop(),position:"absolute"}),(n.st.fixedBgPos===!1||n.st.fixedBgPos==="auto"&&!n.fixedContentPos)&&n.bgOverlay.css({height:s.height(),position:"absolute"}),n.st.enableEscapeKey&&s.on("keyup"+j,function(a){a.keyCode===27&&n.close()}),r.on("resize"+j,function(){n.updateSize()}),n.st.closeOnContentClick||(u+=" mfp-auto-cursor"),u&&n.wrap.addClass(u);var l=n.wH=r.height(),m={};if(n.fixedContentPos&&n._hasScrollBar(l)){var o=n._getScrollbarSize();o&&(m.marginRight=o)}n.fixedContentPos&&(n.isIE7?a("body, html").css("overflow","hidden"):m.overflow="hidden");var p=n.st.mainClass;return n.isIE7&&(p+=" mfp-ie7"),p&&n._addClassToMFP(p),n.updateItemHTML(),y("BuildControls"),a("html").css(m),n.bgOverlay.add(n.wrap).prependTo(n.st.prependTo||a(document.body)),n._lastFocusedEl=document.activeElement,setTimeout(function(){n.content?(n._addClassToMFP(k),n._setFocus()):n.bgOverlay.addClass(k),s.on("focusin"+j,n._onFocusIn)},16),n.isOpen=!0,n.updateSize(l),y(g),b},close:function(){if(!n.isOpen)return;y(c),n.isOpen=!1,n.st.removalDelay&&!n.isLowIE&&n.supportsTransition?(n._addClassToMFP(l),setTimeout(function(){n._close()},n.st.removalDelay)):n._close()},_close:function(){y(b);var c=l+" "+k+" ";n.bgOverlay.detach(),n.wrap.detach(),n.container.empty(),n.st.mainClass&&(c+=n.st.mainClass+" "),n._removeClassFromMFP(c);if(n.fixedContentPos){var e={marginRight:""};n.isIE7?a("body, html").css("overflow",""):e.overflow="",a("html").css(e)}s.off("keyup"+j+" focusin"+j),n.ev.off(j),n.wrap.attr("class","mfp-wrap").removeAttr("style"),n.bgOverlay.attr("class","mfp-bg"),n.container.attr("class","mfp-container"),n.st.showCloseBtn&&(!n.st.closeBtnInside||n.currTemplate[n.currItem.type]===!0)&&n.currTemplate.closeBtn&&n.currTemplate.closeBtn.detach(),n.st.autoFocusLast&&n._lastFocusedEl&&a(n._lastFocusedEl).focus(),n.currItem=null,n.content=null,n.currTemplate=null,n.prevHeight=0,y(d)},updateSize:function(a){if(n.isIOS){var b=document.documentElement.clientWidth/window.innerWidth,c=window.innerHeight*b;n.wrap.css("height",c),n.wH=c}else n.wH=a||r.height();n.fixedContentPos||n.wrap.css("height",n.wH),y("Resize")},updateItemHTML:function(){var b=n.items[n.index];n.contentContainer.detach(),n.content&&n.content.detach(),b.parsed||(b=n.parseEl(n.index));var c=b.type;y("BeforeChange",[n.currItem?n.currItem.type:"",c]),n.currItem=b;if(!n.currTemplate[c]){var d=n.st[c]?n.st[c].markup:!1;y("FirstMarkupParse",d),d?n.currTemplate[c]=a(d):n.currTemplate[c]=!0}t&&t!==b.type&&n.container.removeClass("mfp-"+t+"-holder");var e=n["get"+c.charAt(0).toUpperCase()+c.slice(1)](b,n.currTemplate[c]);n.appendContent(e,c),b.preloaded=!0,y(h,b),t=b.type,n.container.prepend(n.contentContainer),y("AfterChange")},appendContent:function(a,b){n.content=a,a?n.st.showCloseBtn&&n.st.closeBtnInside&&n.currTemplate[b]===!0?n.content.find(".mfp-close").length||n.content.append(z()):n.content=a:n.content="",y(e),n.container.addClass("mfp-"+b+"-holder"),n.contentContainer.append(n.content)},parseEl:function(b){var c=n.items[b],d;c.tagName?c={el:a(c)}:(d=c.type,c={data:c,src:c.src});if(c.el){var e=n.types;for(var f=0;f<e.length;f++)if(c.el.hasClass("mfp-"+e[f])){d=e[f];break}c.src=c.el.attr("data-mfp-src"),c.src||(c.src=c.el.attr("href"))}return c.type=d||n.st.type||"inline",c.index=b,c.parsed=!0,n.items[b]=c,y("ElementParse",c),n.items[b]},addGroup:function(a,b){var c=function(c){c.mfpEl=this,n._openClick(c,a,b)};b||(b={});var d="click.magnificPopup";b.mainEl=a,b.items?(b.isObj=!0,a.off(d).on(d,c)):(b.isObj=!1,b.delegate?a.off(d).on(d,b.delegate,c):(b.items=a,a.off(d).on(d,c)))},_openClick:function(b,c,d){var e=d.midClick!==undefined?d.midClick:a.magnificPopup.defaults.midClick;if(!e&&(b.which===2||b.ctrlKey||b.metaKey||b.altKey||b.shiftKey))return;var f=d.disableOn!==undefined?d.disableOn:a.magnificPopup.defaults.disableOn;if(f)if(a.isFunction(f)){if(!f.call(n))return!0}else if(r.width()<f)return!0;b.type&&(b.preventDefault(),n.isOpen&&b.stopPropagation()),d.el=a(b.mfpEl),d.delegate&&(d.items=c.find(d.delegate)),n.open(d)},updateStatus:function(a,b){if(n.preloader){q!==a&&n.container.removeClass("mfp-s-"+q),!b&&a==="loading"&&(b=n.st.tLoading);var c={status:a,text:b};y("UpdateStatus",c),a=c.status,b=c.text,n.preloader.html(b),n.preloader.find("a").on("click",function(a){a.stopImmediatePropagation()}),n.container.addClass("mfp-s-"+a),q=a}},_checkIfClose:function(b){if(a(b).hasClass(m))return;var c=n.st.closeOnContentClick,d=n.st.closeOnBgClick;if(c&&d)return!0;if(!n.content||a(b).hasClass("mfp-close")||n.preloader&&b===n.preloader[0])return!0;if(b!==n.content[0]&&!a.contains(n.content[0],b)){if(d&&a.contains(document,b))return!0}else if(c)return!0;return!1},_addClassToMFP:function(a){n.bgOverlay.addClass(a),n.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),n.wrap.removeClass(a)},_hasScrollBar:function(a){return(n.isIE7?s.height():document.body.scrollHeight)>(a||r.height())},_setFocus:function(){(n.st.focus?n.content.find(n.st.focus).eq(0):n.wrap).focus()},_onFocusIn:function(b){if(b.target!==n.wrap[0]&&!a.contains(n.wrap[0],b.target))return n._setFocus(),!1},_parseMarkup:function(b,c,d){var e;d.data&&(c=a.extend(d.data,c)),y(f,[b,c,d]),a.each(c,function(c,d){if(d===undefined||d===!1)return!0;e=c.split("_");if(e.length>1){var f=b.find(j+"-"+e[0]);if(f.length>0){var g=e[1];g==="replaceWith"?f[0]!==d[0]&&f.replaceWith(d):g==="img"?f.is("img")?f.attr("src",d):f.replaceWith(a("<img>").attr("src",d).attr("class",f.attr("class"))):f.attr(e[1],d)}}else b.find(j+"-"+c).html(d)})},_getScrollbarSize:function(){if(n.scrollbarSize===undefined){var a=document.createElement("div");a.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(a),n.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return n.scrollbarSize}},a.magnificPopup={instance:null,proto:o.prototype,modules:[],open:function(b,c){return A(),b?b=a.extend(!0,{},b):b={},b.isObj=!0,b.index=c||0,this.instance.open(b)},close:function(){return a.magnificPopup.instance&&a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&#215;</button>',tClose:"Close (Esc)",tLoading:"Loading...",autoFocusLast:!0}},a.fn.magnificPopup=function(b){A();var c=a(this);if(typeof b=="string")if(b==="open"){var d,e=p?c.data("magnificPopup"):c[0].magnificPopup,f=parseInt(arguments[1],10)||0;e.items?d=e.items[f]:(d=c,e.delegate&&(d=d.find(e.delegate)),d=d.eq(f)),n._openClick({mfpEl:d},c,e)}else n.isOpen&&n[b].apply(n,Array.prototype.slice.call(arguments,1));else b=a.extend(!0,{},b),p?c.data("magnificPopup",b):c[0].magnificPopup=b,n.addGroup(c,b);return c};var C="inline",D,E,F,G=function(){F&&(E.after(F.addClass(D)).detach(),F=null)};a.magnificPopup.registerModule(C,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){n.types.push(C),w(b+"."+C,function(){G()})},getInline:function(b,c){G();if(b.src){var d=n.st.inline,e=a(b.src);if(e.length){var f=e[0].parentNode;f&&f.tagName&&(E||(D=d.hiddenClass,E=x(D),D="mfp-"+D),F=e.after(E).detach().removeClass(D)),n.updateStatus("ready")}else n.updateStatus("error",d.tNotFound),e=a("<div>");return b.inlineElement=e,e}return n.updateStatus("ready"),n._parseMarkup(c,{},b),c}}});var H,I=function(b){if(b.data&&b.data.title!==undefined)return b.data.title;var c=n.st.image.titleSrc;if(c){if(a.isFunction(c))return c.call(n,b);if(b.el)return b.el.attr(c)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var c=n.st.image,d=".image";n.types.push("image"),w(g+d,function(){n.currItem.type==="image"&&c.cursor&&a(document.body).addClass(c.cursor)}),w(b+d,function(){c.cursor&&a(document.body).removeClass(c.cursor),r.off("resize"+j)}),w("Resize"+d,n.resizeImage),n.isLowIE&&w("AfterChange",n.resizeImage)},resizeImage:function(){var a=n.currItem;if(!a||!a.img)return;if(n.st.image.verticalFit){var b=0;n.isLowIE&&(b=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",n.wH-b)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,H&&clearInterval(H),a.isCheckingImgSize=!1,y("ImageHasSize",a),a.imgHidden&&(n.content&&n.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var b=0,c=a.img[0],d=function(e){H&&clearInterval(H),H=setInterval(function(){if(c.naturalWidth>0){n._onImageHasSize(a);return}b>200&&clearInterval(H),b++,b===3?d(10):b===40?d(50):b===100&&d(500)},e)};d(1)},getImage:function(b,c){var d=0,e=function(){b&&(b.img[0].complete?(b.img.off(".mfploader"),b===n.currItem&&(n._onImageHasSize(b),n.updateStatus("ready")),b.hasSize=!0,b.loaded=!0,y("ImageLoadComplete")):(d++,d<200?setTimeout(e,100):f()))},f=function(){b&&(b.img.off(".mfploader"),b===n.currItem&&(n._onImageHasSize(b),n.updateStatus("error",g.tError.replace("%url%",b.src))),b.hasSize=!0,b.loaded=!0,b.loadError=!0)},g=n.st.image,h=c.find(".mfp-img");if(h.length){var i=document.createElement("img");i.className="mfp-img",b.el&&b.el.find("img").length&&(i.alt=b.el.find("img").attr("alt")),b.img=a(i).on("load.mfploader",e).on("error.mfploader",f),i.src=b.src,h.is("img")&&(b.img=b.img.clone()),i=b.img[0],i.naturalWidth>0?b.hasSize=!0:i.width||(b.hasSize=!1)}return n._parseMarkup(c,{title:I(b),img_replaceWith:b.img},b),n.resizeImage(),b.hasSize?(H&&clearInterval(H),b.loadError?(c.addClass("mfp-loading"),n.updateStatus("error",g.tError.replace("%url%",b.src))):(c.removeClass("mfp-loading"),n.updateStatus("ready")),c):(n.updateStatus("loading"),b.loading=!0,b.hasSize||(b.imgHidden=!0,c.addClass("mfp-loading"),n.findImageSize(b)),c)}}});var J,K=function(){return J===undefined&&(J=document.createElement("p").style.MozTransform!==undefined),J};a.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(a){return a.is("img")?a:a.find("img")}},proto:{initZoom:function(){var a=n.st.zoom,d=".zoom",e;if(!a.enabled||!n.supportsTransition)return;var f=a.duration,g=function(b){var c=b.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),d="all "+a.duration/1e3+"s "+a.easing,e={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},f="transition";return e["-webkit-"+f]=e["-moz-"+f]=e["-o-"+f]=e[f]=d,c.css(e),c},h=function(){n.content.css("visibility","visible")},i,j;w("BuildControls"+d,function(){if(n._allowZoom()){clearTimeout(i),n.content.css("visibility","hidden"),e=n._getItemToZoom();if(!e){h();return}j=g(e),j.css(n._getOffset()),n.wrap.append(j),i=setTimeout(function(){j.css(n._getOffset(!0)),i=setTimeout(function(){h(),setTimeout(function(){j.remove(),e=j=null,y("ZoomAnimationEnded")},16)},f)},16)}}),w(c+d,function(){if(n._allowZoom()){clearTimeout(i),n.st.removalDelay=f;if(!e){e=n._getItemToZoom();if(!e)return;j=g(e)}j.css(n._getOffset(!0)),n.wrap.append(j),n.content.css("visibility","hidden"),setTimeout(function(){j.css(n._getOffset())},16)}}),w(b+d,function(){n._allowZoom()&&(h(),j&&j.remove(),e=null)})},_allowZoom:function(){return n.currItem.type==="image"},_getItemToZoom:function(){return n.currItem.hasSize?n.currItem.img:!1},_getOffset:function(b){var c;b?c=n.currItem.img:c=n.st.zoom.opener(n.currItem.el||n.currItem);var d=c.offset(),e=parseInt(c.css("padding-top"),10),f=parseInt(c.css("padding-bottom"),10);d.top-=a(window).scrollTop()-e;var g={width:c.width(),height:(p?c.innerHeight():c[0].offsetHeight)-f-e};return K()?g["-moz-transform"]=g.transform="translate("+d.left+"px,"+d.top+"px)":(g.left=d.left,g.top=d.top),g}}});var L="iframe",M="//about:blank",N=function(a){if(n.currTemplate[L]){var b=n.currTemplate[L].find("iframe");b.length&&(a||(b[0].src=M),n.isIE8&&b.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(L,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){n.types.push(L),w("BeforeChange",function(a,b,c){b!==c&&(b===L?N():c===L&&N(!0))}),w(b+"."+L,function(){N()})},getIframe:function(b,c){var d=b.src,e=n.st.iframe;a.each(e.patterns,function(){if(d.indexOf(this.index)>-1)return this.id&&(typeof this.id=="string"?d=d.substr(d.lastIndexOf(this.id)+this.id.length,d.length):d=this.id.call(this,d)),d=this.src.replace("%id%",d),!1});var f={};return e.srcAction&&(f[e.srcAction]=d),n._parseMarkup(c,f,b),n.updateStatus("ready"),c}}}),A()})

// S9Y-MERGE END jquery.magnific-popup.js - 2016-04-20 08:19
// S9Y-MERGE START jquery.syncheight.js - 2016-04-20 08:19
/**
 * syncHeight - jQuery plugin to automagically Snyc the heights of columns
 * Made to seemlessly work with the CCS-Framework YAML (yaml.de)
 * @requires jQuery v1.0.3
 *
 * http://blog.ginader.de/dev/syncheight/
 *
 * Copyright (c) 2007-2013
 * Dirk Ginader (ginader.de)
 * Dirk Jesse (yaml.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Version: 1.3
 */

!function(a){var b=function(){var a=0,b=[["min-height","0px"],["height","1%"]],c=/(msie) ([\w.]+)/.exec(navigator.userAgent.toLowerCase())||[],d=c[1]||"",e=c[2]||"0";return"msie"==d&&7>e&&(a=1),{name:b[a][0],autoheightVal:b[a][1]}};a.getSyncedHeight=function(c){var d=0,e=b();return a(c).each(function(){a(this).css(e.name,e.autoheightVal);var b=a(this).height();b>d&&(d=b)}),d},a.fn.syncHeight=function(c){var d={updateOnResize:!1,height:!1},e=a.extend(d,c),f=this,g=0,h=b().name;return g="number"==typeof e.height?e.height:a.getSyncedHeight(this),a(this).each(function(){a(this).css(h,g+"px")}),e.updateOnResize===!0&&a(window).resize(function(){a(f).syncHeight()}),this}}(jQuery);

// S9Y-MERGE END jquery.syncheight.js - 2016-04-20 08:19
// S9Y-MERGE START jquery.tabs.js - 2016-04-20 08:19
/**
 * Accessible Tabs - jQuery plugin for accessible, unobtrusive tabs
 * Build to seemlessly work with the CCS-Framework YAML (yaml.de) not depending on YAML though
 * @requires jQuery - tested with 1.9.1, 1.7 and 1.4.2 but might as well work with older versions
 *
 * english article: http://blog.ginader.de/archives/2009/02/07/jQuery-Accessible-Tabs-How-to-make-tabs-REALLY-accessible.php
 * german article: http://blog.ginader.de/archives/2009/02/07/jQuery-Accessible-Tabs-Wie-man-Tabs-WIRKLICH-zugaenglich-macht.php
 * 
 * code: http://github.com/ginader/Accessible-Tabs
 * please report issues at: http://github.com/ginader/Accessible-Tabs/issues
 *
 * Copyright (c) 2007 Dirk Ginader (ginader.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */
!function(a){function c(a,c){b&&window.console&&window.console.log&&(c?window.console.log(c+": ",a):window.console.log(a))}var b=!1;a.fn.extend({getUniqueId:function(a,b,c){return c=void 0===c?"":"-"+c,a+b+c},accessibleTabs:function(b){var d={wrapperClass:"content",currentClass:"current",tabhead:"h4",tabheadClass:"tabhead",tabbody:".tabbody",fx:"show",fxspeed:"normal",currentInfoText:"current tab: ",currentInfoPosition:"prepend",currentInfoClass:"current-info",tabsListClass:"tabs-list",syncheights:!1,syncHeightMethodName:"syncHeight",cssClassAvailable:!1,saveState:!1,autoAnchor:!1,pagination:!1,position:"top",wrapInnerNavLinks:"",firstNavItemClass:"first",lastNavItemClass:"last",clearfixClass:"clearfix"},e={37:-1,38:-1,39:1,40:1},f={top:"prepend",bottom:"append"};this.options=a.extend(d,b);var g=0;void 0!==a("body").data("accessibleTabsCount")&&(g=a("body").data("accessibleTabsCount")),a("body").data("accessibleTabsCount",this.size()+g);var h=this;return this.each(function(b){var d=a(this),i="",j=0,k=[];a(d).wrapInner('<div class="'+h.options.wrapperClass+'"></div>'),a(d).find(h.options.tabhead).each(function(c){var d="",e=a(this).attr("id");if(e){if(0===e.indexOf("accessibletabscontent"))return;d=' id="'+e+'"'}var f=h.getUniqueId("accessibletabscontent",g+b,c),l=h.getUniqueId("accessibletabsnavigation",g+b,c);if(k.push(f),h.options.cssClassAvailable===!0){var m="";a(this).attr("class")&&(m=a(this).attr("class"),m=' class="'+m+'"'),i+='<li id="'+l+'"><a'+d+m+' href="#'+f+'">'+a(this).html()+"</a></li>"}else i+='<li id="'+l+'"><a'+d+' href="#'+f+'">'+a(this).html()+"</a></li>";a(this).attr({id:f,"class":h.options.tabheadClass,tabindex:"-1"}),j++}),h.options.syncheights&&a.fn[h.options.syncHeightMethodName]&&(a(d).find(h.options.tabbody)[h.options.syncHeightMethodName](),a(window).resize(function(){a(d).find(h.options.tabbody)[h.options.syncHeightMethodName]()}));var l="."+h.options.tabsListClass;a(d).find(l).length||a(d)[f[h.options.position]]('<ul class="'+h.options.clearfixClass+" "+h.options.tabsListClass+" tabamount"+j+'"></ul>'),a(d).find(l).append(i);var m=a(d).find(h.options.tabbody);if(m.length>0&&(a(m).hide(),a(m[0]).show()),a(d).find("ul."+h.options.tabsListClass+">li:first").addClass(h.options.currentClass).addClass(h.options.firstNavItemClass).find("a")[h.options.currentInfoPosition]('<span class="'+h.options.currentInfoClass+'">'+h.options.currentInfoText+"</span>").parents("ul."+h.options.tabsListClass).children("li:last").addClass(h.options.lastNavItemClass),h.options.wrapInnerNavLinks&&a(d).find("ul."+h.options.tabsListClass+">li>a").wrapInner(h.options.wrapInnerNavLinks),a(d).find("ul."+h.options.tabsListClass+">li>a").each(function(b){a(this).click(function(c){c.preventDefault(),d.trigger("showTab.accessibleTabs",[a(c.target)]),h.options.saveState&&a.cookie&&a.cookie("accessibletab_"+d.attr("id")+"_active",b),a(d).find("ul."+h.options.tabsListClass+">li."+h.options.currentClass).removeClass(h.options.currentClass).find("span."+h.options.currentInfoClass).remove(),a(this).blur(),a(d).find(h.options.tabbody+":visible").hide(),a(d).find(h.options.tabbody).eq(b)[h.options.fx](h.options.fxspeed),a(this)[h.options.currentInfoPosition]('<span class="'+h.options.currentInfoClass+'">'+h.options.currentInfoText+"</span>").parent().addClass(h.options.currentClass),a(a(this).attr("href")).focus().keyup(function(c){e[c.keyCode]&&(h.showAccessibleTab(b+e[c.keyCode]),a(this).unbind("keyup"))})}),a(this).focus(function(){a(document).keyup(function(a){e[a.keyCode]&&h.showAccessibleTab(b+e[a.keyCode])})}),a(this).blur(function(){a(document).unbind("keyup")})}),h.options.saveState&&a.cookie){var n=a.cookie("accessibletab_"+d.attr("id")+"_active");c(a.cookie("accessibletab_"+d.attr("id")+"_active")),null!==n&&h.showAccessibleTab(n,d.attr("id"))}if(h.options.autoAnchor&&window.location.hash){var o=a("."+h.options.tabsListClass).find(window.location.hash);o.size()&&o.click()}if(h.options.pagination){var p='<ul class="pagination">';p+='    <li class="previous"><a href="#{previousAnchor}"><span>{previousHeadline}</span></a></li>',p+='    <li class="next"><a href="#{nextAnchor}"><span>{nextHeadline}</span></a></li>',p+="</ul>";var q=a(d).find(".tabbody"),r=q.size();q.each(function(b){a(this).append(p);var c=b+1;c>=r&&(c=0);var e=b-1;0>e&&(e=r-1);var f=a(this).find(".pagination"),g=f.find(".previous");g.find("span").text(a("#"+k[e]).text()),g.find("a").attr("href","#"+k[e]).click(function(b){b.preventDefault(),a(d).find(".tabs-list a").eq(e).click()});var h=f.find(".next");h.find("span").text(a("#"+k[c]).text()),h.find("a").attr("href","#"+k[c]).click(function(b){b.preventDefault(),a(d).find(".tabs-list a").eq(c).click()})})}})},showAccessibleTab:function(b,d){c("showAccessibleTab");var e=this;if(!d)return this.each(function(){var c=a(this);c.trigger("showTab.accessibleTabs");var d=c.find("ul."+e.options.tabsListClass+">li>a");c.trigger("showTab.accessibleTabs",[d.eq(b)]),d.eq(b).click()});var f=a("#"+d),g=f.find("ul."+e.options.tabsListClass+">li>a");f.trigger("showTab.accessibleTabs",[g.eq(b)]),g.eq(b).click()},showAccessibleTabSelector:function(b){c("showAccessibleTabSelector");var d=a(b);d&&("a"===d.get(0).nodeName.toLowerCase()?d.click():c("the selector of a showAccessibleTabSelector() call needs to point to a tabs headline!"))}})}(jQuery);

// S9Y-MERGE END jquery.tabs.js - 2016-04-20 08:19
// S9Y-MERGE START canvas-toBlob.js - 2016-04-20 08:19
/* canvas-toBlob.js
 * A canvas.toBlob() implementation.
 * 2013-12-27
 * 
 * By Eli Grey, http://eligrey.com and Devin Samarin, https://github.com/eboyjr
 * License: X11/MIT
 *   See LICENSE.md
 */

/*global self */
/*jslint bitwise: true, regexp: true, confusion: true, es5: true, vars: true, white: true,
  plusplus: true */

/*! @source http://purl.eligrey.com/github/canvas-toBlob.js/blob/master/canvas-toBlob.js */
!function(a){"use strict";var g,b=a.Uint8Array,c=a.HTMLCanvasElement,d=c&&c.prototype,e=/\s*;\s*base64\s*(?:;|$)/i,f="toDataURL",h=function(a){for(var k,l,m,c=a.length,d=new b(0|3*(c/4)),e=0,f=0,h=[0,0],i=0,j=0;c--;)l=a.charCodeAt(e++),k=g[l-43],255!==k&&k!==m&&(h[1]=h[0],h[0]=l,j=j<<6|k,i++,4===i&&(d[f++]=j>>>16,61!==h[1]&&(d[f++]=j>>>8),61!==h[0]&&(d[f++]=j),i=0));return d};b&&(g=new b([62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,0,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51])),c&&!d.toBlob&&(d.toBlob=function(a,c){if(c||(c="image/png"),this.mozGetAsFile)return a(this.mozGetAsFile("canvas",c)),void 0;var l,d=Array.prototype.slice.call(arguments,1),g=this[f].apply(this,d),i=g.indexOf(","),j=g.substring(i+1),k=e.test(g.substring(0,i));Blob.fake?(l=new Blob,l.encoding=k?"base64":"URI",l.data=j,l.size=j.length):b&&(l=k?new Blob([h(j)],{type:c}):new Blob([decodeURIComponent(j)],{type:c})),a(l)},d.toBlobHD=d.toDataURLHD?function(){f="toDataURLHD";var a=this.toBlob();return f="toDataURL",a}:d.toBlob)}("undefined"!=typeof self&&self||"undefined"!=typeof window&&window||this.content||this);

// S9Y-MERGE END canvas-toBlob.js - 2016-04-20 08:19
// S9Y-MERGE START jquery.autoscroll.js - 2016-04-20 08:19
/*
 * AutoScroll Plugin for jQuery
 *
 * Copyright (c) 2006 Jonathan Sharp (jdsharp.us)
 * Licensed under the GPL license.
 *
 * http://jdsharp.us/code/AutoScroll/
 *
 * Date: 2014-09-19
 * Rev: 002
 * NOTE: This version got changed by s9y-developers! (stop-function, no mod-key)
 */

$.autoscroll = {
	settings: 	{},
	interval: 	0,
	event: 		null,

	init: function(opts) {
		$.autoscroll.settings = {
			step: 		80,
			trigger:	75,
			interval: 	80,
			mod_key: 	17
		};
		
		if (opts) {
			for (o in opts) {
				$.autoscroll.settings[o] = opts[o];
			}
		}
        $.autoscroll.setKeyEvent();
		document.onmousemove= $.autoscroll.setMouseEvent;
	},

    stop: function() {
        clearInterval($.autoscroll.interval);
        $.autoscroll.interval = 0;
    },

	setKeyEvent: function(e) {
		if ($.autoscroll.interval == 0) {
			$.autoscroll.interval = setInterval($.autoscroll.step, $.autoscroll.settings.interval);
		}
	},

	setMouseEvent: function(e) {
		var e	= e || window.event;
		var de	= document.documentElement;
		var b	= document.body;
		$.autoscroll.event = {
			cursor: {
				x: e.pageX || (e.clientX + (de.scrollLeft || b.scrollLeft) - (de.clientLeft || 0)),
				y: e.pageY || (e.clientY + (de.scrollTop || b.scrollTop) - (de.clientTop || 0))
			},
	
			win: {
				w: window.innerWidth  || (de.clientWidth && de.clientWidth != 0 ? de.clientWidth : b.offsetWidth),
				h: window.innerHeight || (de.clientHeight && de.clientWidth != 0 ? de.clientHeight : b.offsetHeight)
			},
	
			scroll: {
				x: (document.all ? 
						(!de.scrollLeft ? b.scrollLeft : de.scrollLeft)
						:
						(window.pageXOffset ? window.pageXOffset : window.scrollX)
						),
				y: (document.all ? 
						(!de.scrollTop ? b.scrollTop : de.scrollTop)
						:
						(window.pageYOffset ? window.pageYOffset : window.scrollY)
						)
			}
		};
	},
	
	step: function() {
		var e = $.autoscroll.event;
		if (!e) {
			return;
		}

		var hot_l 	= e.scroll.x;
		var hot_r 	= e.scroll.x + e.win.w;
		var x		= e.cursor.x;

		var hot_t	= e.scroll.y;
		var hot_b	= e.scroll.y + e.win.h;
		var y 		= e.cursor.y;
	
		if (hot_l <= x && x <= (hot_l + $.autoscroll.settings.trigger)) {
			var ratio 	= (1 - ((x - hot_l) / $.autoscroll.settings.trigger));
			var step	= Math.round(ratio * $.autoscroll.settings.step, 0);
			e.scroll.x += -step;
			e.cursor.x += -step;
		} else if ((hot_r - $.autoscroll.settings.trigger) <= x && x <= hot_r) {
			var ratio 	= (1 - ((hot_r - x) / $.autoscroll.settings.trigger));
			var step	= Math.round(ratio * $.autoscroll.settings.step, 0);
			e.scroll.x += step;
			e.cursor.x += step;
		}
	
		if (hot_t <= y && y <= (hot_t + $.autoscroll.settings.trigger)) {
			var ratio 	= (1 - ((y - hot_t) / $.autoscroll.settings.trigger));
			var step	= Math.round(ratio * $.autoscroll.settings.step, 0);
			e.scroll.y += -step;
			e.cursor.y += -step;
		} else if ((hot_b - $.autoscroll.settings.trigger) <= y && y <= hot_b) {
			var ratio 	= (1 - ((hot_b - y) / $.autoscroll.settings.trigger));
			var step	= Math.round(ratio * $.autoscroll.settings.step, 0);
			e.scroll.y += step;
			e.cursor.y += step;
		}
	
		if (e.scroll.x < 0) {
			e.scroll.x = 0;
			e.cursor.x = 0;
		}
		if (e.scroll.y < 0) {
			e.scroll.y = 0;
			e.cursor.y = 0;
		}

		window.scrollTo(e.scroll.x, e.scroll.y);
	}
};
// S9Y-MERGE END jquery.autoscroll.js - 2016-04-20 08:19
// S9Y-MERGE START jquery.sortable.js - 2016-04-20 08:19
/* ===================================================
 *  jquery-sortable.js v0.9.13
 *  http://johnny.github.com/jquery-sortable/
 * ===================================================
 *  Copyright (c) 2012 Jonas von Andrian
 *  All rights reserved.
 *
 *  Redistribution and use in source and binary forms, with or without
 *  modification, are permitted provided that the following conditions are met:
 *  * Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 *  * Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 *  * The name of the author may not be used to endorse or promote products
 *    derived from this software without specific prior written permission.
 *
 *  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *  ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *  WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 *  DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
 *  DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 *  (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 *  LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 *  ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 *  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 *  SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * ========================================================== */
 !function(d,B,m,f){function v(a,b){var c=Math.max(0,a[0]-b[0],b[0]-a[1]),e=Math.max(0,a[2]-b[1],b[1]-a[3]);return c+e}function w(a,b,c,e){var k=a.length;e=e?"offset":"position";for(c=c||0;k--;){var g=a[k].el?a[k].el:d(a[k]),l=g[e]();l.left+=parseInt(g.css("margin-left"),10);l.top+=parseInt(g.css("margin-top"),10);b[k]=[l.left-c,l.left+g.outerWidth()+c,l.top-c,l.top+g.outerHeight()+c]}}function p(a,b){var c=b.offset();return{left:a.left-c.left,top:a.top-c.top}}function x(a,b,c){b=[b.left,b.top];c=
 c&&[c.left,c.top];for(var e,k=a.length,d=[];k--;)e=a[k],d[k]=[k,v(e,b),c&&v(e,c)];return d=d.sort(function(a,b){return b[1]-a[1]||b[2]-a[2]||b[0]-a[0]})}function q(a){this.options=d.extend({},n,a);this.containers=[];this.options.rootGroup||(this.scrollProxy=d.proxy(this.scroll,this),this.dragProxy=d.proxy(this.drag,this),this.dropProxy=d.proxy(this.drop,this),this.placeholder=d(this.options.placeholder),a.isValidTarget||(this.options.isValidTarget=f))}function s(a,b){this.el=a;this.options=d.extend({},
 z,b);this.group=q.get(this.options);this.rootGroup=this.options.rootGroup||this.group;this.handle=this.rootGroup.options.handle||this.rootGroup.options.itemSelector;var c=this.rootGroup.options.itemPath;this.target=c?this.el.find(c):this.el;this.target.on(t.start,this.handle,d.proxy(this.dragInit,this));this.options.drop&&this.group.containers.push(this)}var z={drag:!0,drop:!0,exclude:"",nested:!0,vertical:!0},n={afterMove:function(a,b,c){},containerPath:"",containerSelector:"ol, ul",distance:0,delay:0,
 handle:"",itemPath:"",itemSelector:"li",bodyClass:"dragging",draggedClass:"dragged",isValidTarget:function(a,b){return!0},onCancel:function(a,b,c,e){},onDrag:function(a,b,c,e){a.css(b)},onDragStart:function(a,b,c,e){a.css({height:a.outerHeight(),width:a.outerWidth()});a.addClass(b.group.options.draggedClass);d("body").addClass(b.group.options.bodyClass)},onDrop:function(a,b,c,e){a.removeClass(b.group.options.draggedClass).removeAttr("style");d("body").removeClass(b.group.options.bodyClass)},onMousedown:function(a,
 b,c){if(!c.target.nodeName.match(/^(input|select|textarea)$/i))return c.preventDefault(),!0},placeholderClass:"placeholder",placeholder:'<li class="placeholder"></li>',pullPlaceholder:!0,serialize:function(a,b,c){a=d.extend({},a.data());if(c)return[b];b[0]&&(a.children=b);delete a.subContainers;delete a.sortable;return a},tolerance:0},r={},y=0,A={left:0,top:0,bottom:0,right:0},t={start:"touchstart.sortable mousedown.sortable",drop:"touchend.sortable touchcancel.sortable mouseup.sortable",drag:"touchmove.sortable mousemove.sortable",
 scroll:"scroll.sortable"};q.get=function(a){r[a.group]||(a.group===f&&(a.group=y++),r[a.group]=new q(a));return r[a.group]};q.prototype={dragInit:function(a,b){this.$document=d(b.el[0].ownerDocument);var c=d(a.target).closest(this.options.itemSelector);c.length&&(this.item=c,this.itemContainer=b,!this.item.is(this.options.exclude)&&this.options.onMousedown(this.item,n.onMousedown,a)&&(this.setPointer(a),this.toggleListeners("on"),this.setupDelayTimer(),this.dragInitDone=!0))},drag:function(a){if(!this.dragging){if(!this.distanceMet(a)||
 !this.delayMet)return;this.options.onDragStart(this.item,this.itemContainer,n.onDragStart,a);this.item.before(this.placeholder);this.dragging=!0}this.setPointer(a);this.options.onDrag(this.item,p(this.pointer,this.item.offsetParent()),n.onDrag,a);a=this.getPointer(a);var b=this.sameResultBox,c=this.options.tolerance;(!b||b.top-c>a.top||b.bottom+c<a.top||b.left-c>a.left||b.right+c<a.left)&&!this.searchValidTarget()&&(this.placeholder.detach(),this.lastAppendedItem=f)},drop:function(a){this.toggleListeners("off");
 this.dragInitDone=!1;if(this.dragging){if(this.placeholder.closest("html")[0])this.placeholder.before(this.item).detach();else this.options.onCancel(this.item,this.itemContainer,n.onCancel,a);this.options.onDrop(this.item,this.getContainer(this.item),n.onDrop,a);this.clearDimensions();this.clearOffsetParent();this.lastAppendedItem=this.sameResultBox=f;this.dragging=!1}},searchValidTarget:function(a,b){a||(a=this.relativePointer||this.pointer,b=this.lastRelativePointer||this.lastPointer);for(var c=
 x(this.getContainerDimensions(),a,b),e=c.length;e--;){var d=c[e][0];if(!c[e][1]||this.options.pullPlaceholder)if(d=this.containers[d],!d.disabled){if(!this.$getOffsetParent()){var g=d.getItemOffsetParent();a=p(a,g);b=p(b,g)}if(d.searchValidTarget(a,b))return!0}}this.sameResultBox&&(this.sameResultBox=f)},movePlaceholder:function(a,b,c,e){var d=this.lastAppendedItem;if(e||!d||d[0]!==b[0])b[c](this.placeholder),this.lastAppendedItem=b,this.sameResultBox=e,this.options.afterMove(this.placeholder,a,b)},
 getContainerDimensions:function(){this.containerDimensions||w(this.containers,this.containerDimensions=[],this.options.tolerance,!this.$getOffsetParent());return this.containerDimensions},getContainer:function(a){return a.closest(this.options.containerSelector).data(m)},$getOffsetParent:function(){if(this.offsetParent===f){var a=this.containers.length-1,b=this.containers[a].getItemOffsetParent();if(!this.options.rootGroup)for(;a--;)if(b[0]!=this.containers[a].getItemOffsetParent()[0]){b=!1;break}this.offsetParent=
 b}return this.offsetParent},setPointer:function(a){a=this.getPointer(a);if(this.$getOffsetParent()){var b=p(a,this.$getOffsetParent());this.lastRelativePointer=this.relativePointer;this.relativePointer=b}this.lastPointer=this.pointer;this.pointer=a},distanceMet:function(a){a=this.getPointer(a);return Math.max(Math.abs(this.pointer.left-a.left),Math.abs(this.pointer.top-a.top))>=this.options.distance},getPointer:function(a){var b=a.originalEvent||a.originalEvent.touches&&a.originalEvent.touches[0];
 return{left:a.pageX||b.pageX,top:a.pageY||b.pageY}},setupDelayTimer:function(){var a=this;this.delayMet=!this.options.delay;this.delayMet||(clearTimeout(this._mouseDelayTimer),this._mouseDelayTimer=setTimeout(function(){a.delayMet=!0},this.options.delay))},scroll:function(a){this.clearDimensions();this.clearOffsetParent()},toggleListeners:function(a){var b=this;d.each(["drag","drop","scroll"],function(c,e){b.$document[a](t[e],b[e+"Proxy"])})},clearOffsetParent:function(){this.offsetParent=f},clearDimensions:function(){this.traverse(function(a){a._clearDimensions()})},
 traverse:function(a){a(this);for(var b=this.containers.length;b--;)this.containers[b].traverse(a)},_clearDimensions:function(){this.containerDimensions=f},_destroy:function(){r[this.options.group]=f}};s.prototype={dragInit:function(a){var b=this.rootGroup;!this.disabled&&!b.dragInitDone&&this.options.drag&&this.isValidDrag(a)&&b.dragInit(a,this)},isValidDrag:function(a){return 1==a.which||"touchstart"==a.type&&1==a.originalEvent.touches.length},searchValidTarget:function(a,b){var c=x(this.getItemDimensions(),
 a,b),e=c.length,d=this.rootGroup,g=!d.options.isValidTarget||d.options.isValidTarget(d.item,this);if(!e&&g)return d.movePlaceholder(this,this.target,"append"),!0;for(;e--;)if(d=c[e][0],!c[e][1]&&this.hasChildGroup(d)){if(this.getContainerGroup(d).searchValidTarget(a,b))return!0}else if(g)return this.movePlaceholder(d,a),!0},movePlaceholder:function(a,b){var c=d(this.items[a]),e=this.itemDimensions[a],k="after",g=c.outerWidth(),f=c.outerHeight(),h=c.offset(),h={left:h.left,right:h.left+g,top:h.top,
 bottom:h.top+f};this.options.vertical?b.top<=(e[2]+e[3])/2?(k="before",h.bottom-=f/2):h.top+=f/2:b.left<=(e[0]+e[1])/2?(k="before",h.right-=g/2):h.left+=g/2;this.hasChildGroup(a)&&(h=A);this.rootGroup.movePlaceholder(this,c,k,h)},getItemDimensions:function(){this.itemDimensions||(this.items=this.$getChildren(this.el,"item").filter(":not(."+this.group.options.placeholderClass+", ."+this.group.options.draggedClass+")").get(),w(this.items,this.itemDimensions=[],this.options.tolerance));return this.itemDimensions},
 getItemOffsetParent:function(){var a=this.el;return"relative"===a.css("position")||"absolute"===a.css("position")||"fixed"===a.css("position")?a:a.offsetParent()},hasChildGroup:function(a){return this.options.nested&&this.getContainerGroup(a)},getContainerGroup:function(a){var b=d.data(this.items[a],"subContainers");if(b===f){var c=this.$getChildren(this.items[a],"container"),b=!1;c[0]&&(b=d.extend({},this.options,{rootGroup:this.rootGroup,group:y++}),b=c[m](b).data(m).group);d.data(this.items[a],
 "subContainers",b)}return b},$getChildren:function(a,b){var c=this.rootGroup.options,e=c[b+"Path"],c=c[b+"Selector"];a=d(a);e&&(a=a.find(e));return a.children(c)},_serialize:function(a,b){var c=this,e=this.$getChildren(a,b?"item":"container").not(this.options.exclude).map(function(){return c._serialize(d(this),!b)}).get();return this.rootGroup.options.serialize(a,e,b)},traverse:function(a){d.each(this.items||[],function(b){(b=d.data(this,"subContainers"))&&b.traverse(a)});a(this)},_clearDimensions:function(){this.itemDimensions=
 f},_destroy:function(){var a=this;this.target.off(t.start,this.handle);this.el.removeData(m);this.options.drop&&(this.group.containers=d.grep(this.group.containers,function(b){return b!=a}));d.each(this.items||[],function(){d.removeData(this,"subContainers")})}};var u={enable:function(){this.traverse(function(a){a.disabled=!1})},disable:function(){this.traverse(function(a){a.disabled=!0})},serialize:function(){return this._serialize(this.el,!0)},refresh:function(){this.traverse(function(a){a._clearDimensions()})},
 destroy:function(){this.traverse(function(a){a._destroy()})}};d.extend(s.prototype,u);d.fn[m]=function(a){var b=Array.prototype.slice.call(arguments,1);return this.map(function(){var c=d(this),e=c.data(m);if(e&&u[a])return u[a].apply(e,b)||this;e||a!==f&&"object"!==typeof a||c.data(m,new s(c,a));return this})}}(jQuery,window,"sortable");

// S9Y-MERGE END jquery.sortable.js - 2016-04-20 08:19
// S9Y-MERGE START jquery.cookie.js - 2016-04-20 08:19
/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
(function(factory){if(typeof define==="function"&&define.amd){define(["jquery"],factory)}else if(typeof exports==="object"){factory(require("jquery"))}else{factory(jQuery)}})(function($){var pluses=/\+/g;function encode(s){return config.raw?s:encodeURIComponent(s)}function decode(s){return config.raw?s:decodeURIComponent(s)}function stringifyCookieValue(value){return encode(config.json?JSON.stringify(value):String(value))}function parseCookieValue(s){if(s.indexOf('"')===0){s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\")}try{s=decodeURIComponent(s.replace(pluses," "));return config.json?JSON.parse(s):s}catch(e){}}function read(s,converter){var value=config.raw?s:parseCookieValue(s);return $.isFunction(converter)?converter(value):value}var config=$.cookie=function(key,value,options){if(arguments.length>1&&!$.isFunction(value)){options=$.extend({},config.defaults,options);if(typeof options.expires==="number"){var days=options.expires,t=options.expires=new Date;t.setTime(+t+days*864e5)}return document.cookie=[encode(key),"=",stringifyCookieValue(value),options.expires?"; expires="+options.expires.toUTCString():"",options.path?"; path="+options.path:"",options.domain?"; domain="+options.domain:"",options.secure?"; secure":""].join("")}var result=key?undefined:{};var cookies=document.cookie?document.cookie.split("; "):[];for(var i=0,l=cookies.length;i<l;i++){var parts=cookies[i].split("=");var name=decode(parts.shift());var cookie=parts.join("=");if(key&&key===name){result=read(cookie,value);break}if(!key&&(cookie=read(cookie))!==undefined){result[name]=cookie}}return result};config.defaults={};$.removeCookie=function(key,options){if($.cookie(key)===undefined){return false}$.cookie(key,"",$.extend({},options,{expires:-1}));return!$.cookie(key)}});

// S9Y-MERGE END jquery.cookie.js - 2016-04-20 08:19
// S9Y-MERGE START jquery.details.js - 2016-04-20 08:19
/*! http://mths.be/details v0.1.0 by @mathias | includes http://mths.be/noselect v1.0.3 */
;(function(a,f){var e=f.fn,d,c=Object.prototype.toString.call(window.opera)=='[object Opera]',g=(function(l){var j=l.createElement('details'),i,h,k;if(!('open' in j)){return false}h=l.body||(function(){var m=l.documentElement;i=true;return m.insertBefore(l.createElement('body'),m.firstElementChild||m.firstChild)}());j.innerHTML='<summary>a</summary>b';j.style.display='block';h.appendChild(j);k=j.offsetHeight;j.open=true;k=k!=j.offsetHeight;h.removeChild(j);if(i){h.parentNode.removeChild(h)}return k}(a)),b=function(i,l,k,h){var j=i.prop('open'),m=j&&h||!j&&!h;if(m){i.removeClass('open').prop('open',false).triggerHandler('close.details');l.attr('aria-expanded',false);k.hide()}else{i.addClass('open').prop('open',true).triggerHandler('open.details');l.attr('aria-expanded',true);k.show()}};e.noSelect=function(){var h='none';return this.bind('selectstart dragstart mousedown',function(){return false}).css({MozUserSelect:h,msUserSelect:h,webkitUserSelect:h,userSelect:h})};if(g){d=e.details=function(){return this.each(function(){var i=f(this),h=f('summary',i).first();h.attr({role:'button','aria-expanded':i.prop('open')}).on('click',function(){var j=i.prop('open');h.attr('aria-expanded',!j);i.triggerHandler((j?'close':'open')+'.details')})})};d.support=g}else{d=e.details=function(){return this.each(function(){var h=f(this),j=f('summary',h).first(),i=h.children(':not(summary)'),k=h.contents(':not(summary)');if(!j.length){j=f('<summary>').text('Details').prependTo(h)}if(i.length!=k.length){k.filter(function(){return this.nodeType==3&&/[^ \t\n\f\r]/.test(this.data)}).wrap('<span>');i=h.children(':not(summary)')}h.prop('open',typeof h.attr('open')=='string');b(h,j,i);j.attr('role','button').noSelect().prop('tabIndex',0).on('click',function(){j.focus();b(h,j,i,true)}).keyup(function(l){if(32==l.keyCode||(13==l.keyCode&&!c)){l.preventDefault();j.click()}})})};d.support=g}}(document,jQuery));
// S9Y-MERGE END jquery.details.js - 2016-04-20 08:19
// S9Y-MERGE START accessifyhtml5.js - 2016-04-20 08:19
/*
 * Accessifyhtml5.js
 *
 * Source: https://github.com/yatil/accessifyhtml5.js
 */

var AccessifyHTML5=function(e,f){var c={article:{role:"article"},aside:{role:"complementary"},nav:{role:"navigation"},main:{role:"main"},output:{"aria-live":"polite"},section:{role:"region"},"[required]":{"aria-required":"true"}},g={ok:[],warn:[],fail:[]},k=g.fail,b,h,a,d,n,p,l,r,m,s=RegExp("aria-[a-z]+|role|tabindex|title|alt|data-[\\w-]+|lang|style|maxlength|placeholder|pattern|required|type|target|accesskey|longdesc"),t=0,q=document;if(q.querySelectorAll){e&&(e.header&&(c[e.header]={role:"banner"}),
e.footer&&(c[e.footer]={role:"contentinfo"}),e.main&&(c[e.main]={role:"main"},c.main={role:""}));if(f&&f._CONFIG_&&f._CONFIG_.ignore_defaults)c=f;else for(a in f)c[a]=f[a];for(b in c)if(!b.match(/^_(CONFIG|[A-Z]+)_/)&&c.hasOwnProperty(b)){try{h=q.querySelectorAll(b)}catch(u){k.push({sel:b,attr:null,val:null,msg:"Invalid syntax for `document.querySelectorAll` function",ex:u})}p=c[b];(!h||1>h.length)&&g.warn.push({sel:b,attr:null,val:null,msg:"Not found"});for(l=0;l<h.length;l++)for(n in p)if(p.hasOwnProperty(n)&&
(a=n,d=p[n],!a.match(/_?note/)))if(a.match(s))if((typeof d).match(/string|number|boolean/)){if(r=a.match(/(describ|label)l?edby/)){try{m=q.querySelector(d)}catch(v){k.push({sel:b,attr:a,val:d,msg:"Invalid selector syntax (2) - see 'val'",ex:v})}if(!m){k.push({sel:b,attr:a,val:d,msg:"Labelledby ref not found - see 'val'"});continue}m.id||(m.id="acfy-id-"+t);d=m.id;a="aria-"+("label"===r[1]?"labelledby":"describedby");t++}h[l].hasAttribute(a)?g.warn.push({sel:b,attr:a,val:d,msg:"Already present, skipped"}):
(h[l].setAttribute(a,d),g.ok.push({sel:b,attr:a,val:d,msg:"Added"}))}else k.push({sel:b,attr:a,val:d,msg:"Value-type not allowed"});else k.push({sel:b,attr:a,val:null,msg:"Attribute not allowed",re:s})}}g.input=c;return g};
// S9Y-MERGE END accessifyhtml5.js - 2016-04-20 08:19
