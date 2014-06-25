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
