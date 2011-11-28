// http://mths.be/placeholder v1.8.5 by @mathias
jQuery(function(g,a,$){var f='placeholder' in a.createElement('input'),b='placeholder' in a.createElement('textarea');if(f&&b){$.fn.placeholder=function(){return this};$.fn.placeholder.input=$.fn.placeholder.textarea=true}else{$.fn.placeholder=function(){return this.filter((f?'textarea':':input')+'[placeholder]').bind('focus.placeholder',c).bind('blur.placeholder',e).trigger('blur.placeholder').end()};$.fn.placeholder.input=f;$.fn.placeholder.textarea=b;$(function(){$('form').bind('submit.placeholder',function(){var h=$('.placeholder',this).each(c);setTimeout(function(){h.each(e)},10)})});$(g).bind('unload.placeholder',function(){$('.placeholder').val('')})}function d(i){var h={},j=/^jQuery\d+$/;$.each(i.attributes,function(l,k){if(k.specified&&!j.test(k.name)){h[k.name]=k.value}});return h}function c(){var h=$(this);if(h.val()===h.attr('placeholder')&&h.hasClass('placeholder')){if(h.data('placeholder-password')){h.hide().next().show().focus().attr('id',h.removeAttr('id').data('placeholder-id'))}else{h.val('').removeClass('placeholder')}}}function e(){var l,k=$(this),h=k,j=this.id;if(k.val()===''){if(k.is(':password')){if(!k.data('placeholder-textinput')){try{l=k.clone().attr({type:'text'})}catch(i){l=$('<input>').attr($.extend(d(this),{type:'text'}))}l.removeAttr('name').data('placeholder-password',true).data('placeholder-id',j).bind('focus.placeholder',c);k.data('placeholder-textinput',l).data('placeholder-id',j).before(l)}k=k.removeAttr('id').hide().prev().attr('id',j).show()}k.addClass('placeholder').val(k.attr('placeholder'))}else{k.removeClass('placeholder')}}}(this,document,jQuery));
// https://github.com/manuelbieh/Details-Polyfill
jQuery(function(a){(function(){var b=this;this.hideDetailChildren=function(c){var d=c instanceof jQuery?c[0].childNodes:c.childNodes,e=d.length;a(c).attr("open",false);if(a.browser.safari==true){for(var f=0;f<e;f++){if(d[f].nodeType==3&&d[f].textContent!=""){var g=a("<span />");g.text(d[f].textContent).hide();a(d[f]).after(g);d[f].textContent="";e++}}}a.each(d,function(d,e){if(a(e)[0].nodeType==1&&e==a(e).parent().find("> summary:first-of-type")[0]){if(a(e).data("processed")!=true){a(e).css({display:"block",cursor:"pointer"}).data("processed",true).addClass("detailHidden").bind("click",function(){b.toggleDetailChildren(a(this))});a(c).prepend(a(e))}}else if(a(e)[0].nodeType==3&&!e.isElementContentWhitespace&&!!a.browser.safari==false){var f=a("<span />");f.text(e.textContent).hide();a(e).after(f);e.textContent=""}else if(a(c).find("> summary").length==0){var g=a("<summary />").text("Details").css({display:"block",cursor:"pointer"}).data("processed",true).addClass("detailHidden").bind("click",function(){b.toggleDetailChildren(a(this))});a(c).prepend(g)}a(c).find("> :visible:not(summary:first-child)").hide()})};this.showDetailChildren=function(b){a(b).attr("open",true);a.each(a(b).find("> *"),function(b,c){a(c).show()})};this.toggleDetailChildren=function(a){if(a.hasClass("detailHidden")){a.removeClass("detailHidden");b.showDetailChildren(a.parents("details")[0])}else{a.addClass("detailHidden");b.hideDetailChildren(a.parents("details")[0])}};if("open"in document.createElement("details")==false){a.each(a("details"),function(c,d){b.hideDetailChildren(d);var e=a("<style />").text('summary {-webkit-text-size-adjust: none;} details > summary:first-child:before {content: "▼ "} details > summary.detailHidden:first-child:before {content: "► "}');a("head").append(e)})}})()}) 
// 2k11
jQuery(document).ready(function($) {
    // placeholder polyfill
    $('input, textarea').placeholder();
    // Disable trackback url link
    $('#trackback_url>a').click(function() {
        var trackbackMsg = $(this).attr('title');
        alert(trackbackMsg);
        return false;
    });
    // Comment reply
    $('.comment_reply').click(function() {
        var commentId = $(this).attr('id').replace(/serendipity_reply_/g,"");
        $('#serendipity_replyTo').val(commentId);
    });
    // Confirm comment deletion
    $('.comment_source_ownerlink').click(function() {
        var deleteMsg = $(this).attr('title');
        return confirm(deleteMsg);
    });
    // Cloned primary navigation for small screen
    var $select = $('<select/>');
    $('#primary-nav li').each(function() {
        var $el = $(this);
        if ($el.find('span').length) {
            $('<option/>', {
                'selected': 'selected',
                'value'   : '',
                'text'    : $el.text()
            }).appendTo($select);
        } else {
            $('<option/>', {
                'value'   : $el.find('a').attr('href'),
                'text'    : $el.text()
            }).appendTo($select);
        }
    });
    $select.appendTo('#primary-nav').change(function() {
        window.location = $(this).find('option:selected').val();
    });
});
