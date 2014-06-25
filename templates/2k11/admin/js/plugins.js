// S9Y-MERGE START jquery.magnific-popup.js - 2014-06-25 12:28
/*! Magnific Popup - v0.9.9 - 2013-12-27
* http://dimsemenov.com/plugins/magnific-popup/
* Copyright (c) 2013 Dmitry Semenov; */
;(function($) {

/*>>core*/
/**
 * 
 * Magnific Popup Core JS file
 * 
 */


/**
 * Private static constants
 */
var CLOSE_EVENT = 'Close',
    BEFORE_CLOSE_EVENT = 'BeforeClose',
    AFTER_CLOSE_EVENT = 'AfterClose',
    BEFORE_APPEND_EVENT = 'BeforeAppend',
    MARKUP_PARSE_EVENT = 'MarkupParse',
    OPEN_EVENT = 'Open',
    CHANGE_EVENT = 'Change',
    NS = 'mfp',
    EVENT_NS = '.' + NS,
    READY_CLASS = 'mfp-ready',
    REMOVING_CLASS = 'mfp-removing',
    PREVENT_CLOSE_CLASS = 'mfp-prevent-close';


/**
 * Private vars 
 */
var mfp, // As we have only one instance of MagnificPopup object, we define it locally to not to use 'this'
    MagnificPopup = function(){},
    _isJQ = !!(window.jQuery),
    _prevStatus,
    _window = $(window),
    _body,
    _document,
    _prevContentType,
    _wrapClasses,
    _currPopupType;


/**
 * Private functions
 */
var _mfpOn = function(name, f) {
        mfp.ev.on(NS + name + EVENT_NS, f);
    },
    _getEl = function(className, appendTo, html, raw) {
        var el = document.createElement('div');
        el.className = 'mfp-'+className;
        if(html) {
            el.innerHTML = html;
        }
        if(!raw) {
            el = $(el);
            if(appendTo) {
                el.appendTo(appendTo);
            }
        } else if(appendTo) {
            appendTo.appendChild(el);
        }
        return el;
    },
    _mfpTrigger = function(e, data) {
        mfp.ev.triggerHandler(NS + e, data);

        if(mfp.st.callbacks) {
            // converts "mfpEventName" to "eventName" callback and triggers it if it's present
            e = e.charAt(0).toLowerCase() + e.slice(1);
            if(mfp.st.callbacks[e]) {
                mfp.st.callbacks[e].apply(mfp, $.isArray(data) ? data : [data]);
            }
        }
    },
    _getCloseBtn = function(type) {
        if(type !== _currPopupType || !mfp.currTemplate.closeBtn) {
            mfp.currTemplate.closeBtn = $( mfp.st.closeMarkup.replace('%title%', mfp.st.tClose ) );
            _currPopupType = type;
        }
        return mfp.currTemplate.closeBtn;
    },
    // Initialize Magnific Popup only when called at least once
    _checkInstance = function() {
        if(!$.magnificPopup.instance) {
            mfp = new MagnificPopup();
            mfp.init();
            $.magnificPopup.instance = mfp;
        }
    },
    // CSS transition detection, http://stackoverflow.com/questions/7264899/detect-css-transitions-using-javascript-and-without-modernizr
    supportsTransitions = function() {
        var s = document.createElement('p').style, // 's' for style. better to create an element if body yet to exist
            v = ['ms','O','Moz','Webkit']; // 'v' for vendor

        if( s['transition'] !== undefined ) {
            return true;
        }

        while( v.length ) {
            if( v.pop() + 'Transition' in s ) {
                return true;
            }
        }

        return false;
    };



/**
 * Public functions
 */
MagnificPopup.prototype = {

    constructor: MagnificPopup,

    /**
     * Initializes Magnific Popup plugin.
     * This function is triggered only once when $.fn.magnificPopup or $.magnificPopup is executed
     */
    init: function() {
        var appVersion = navigator.appVersion;
        mfp.isIE7 = appVersion.indexOf("MSIE 7.") !== -1;
        mfp.isIE8 = appVersion.indexOf("MSIE 8.") !== -1;
        mfp.isLowIE = mfp.isIE7 || mfp.isIE8;
        mfp.isAndroid = (/android/gi).test(appVersion);
        mfp.isIOS = (/iphone|ipad|ipod/gi).test(appVersion);
        mfp.supportsTransition = supportsTransitions();

        // We disable fixed positioned lightbox on devices that don't handle it nicely.
        // If you know a better way of detecting this - let me know.
        mfp.probablyMobile = (mfp.isAndroid || mfp.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent) );
        _document = $(document);

        mfp.popupsCache = {};
    },

    /**
     * Opens popup
     * @param  data [description]
     */
    open: function(data) {

        if(!_body) {
            _body = $(document.body);
        }

        var i;

        if(data.isObj === false) {
            // convert jQuery collection to array to avoid conflicts later
            mfp.items = data.items.toArray();

            mfp.index = 0;
            var items = data.items,
                item;
            for(i = 0; i < items.length; i++) {
                item = items[i];
                if(item.parsed) {
                    item = item.el[0];
                }
                if(item === data.el[0]) {
                    mfp.index = i;
                    break;
                }
            }
        } else {
            mfp.items = $.isArray(data.items) ? data.items : [data.items];
            mfp.index = data.index || 0;
        }

        // if popup is already opened - we just update the content
        if(mfp.isOpen) {
            mfp.updateItemHTML();
            return;
        }

        mfp.types = [];
        _wrapClasses = '';
        if(data.mainEl && data.mainEl.length) {
            mfp.ev = data.mainEl.eq(0);
        } else {
            mfp.ev = _document;
        }

        if(data.key) {
            if(!mfp.popupsCache[data.key]) {
                mfp.popupsCache[data.key] = {};
            }
            mfp.currTemplate = mfp.popupsCache[data.key];
        } else {
            mfp.currTemplate = {};
        }



        mfp.st = $.extend(true, {}, $.magnificPopup.defaults, data ); 
        mfp.fixedContentPos = mfp.st.fixedContentPos === 'auto' ? !mfp.probablyMobile : mfp.st.fixedContentPos;

        if(mfp.st.modal) {
            mfp.st.closeOnContentClick = false;
            mfp.st.closeOnBgClick = false;
            mfp.st.showCloseBtn = false;
            mfp.st.enableEscapeKey = false;
        }


        // Building markup
        // main containers are created only once
        if(!mfp.bgOverlay) {

            // Dark overlay
            mfp.bgOverlay = _getEl('bg').on('click'+EVENT_NS, function() {
                mfp.close();
            });

            mfp.wrap = _getEl('wrap').attr('tabindex', -1).on('click'+EVENT_NS, function(e) {
                if(mfp._checkIfClose(e.target)) {
                    mfp.close();
                }
            });

            mfp.container = _getEl('container', mfp.wrap);
        }

        mfp.contentContainer = _getEl('content');
        if(mfp.st.preloader) {
            mfp.preloader = _getEl('preloader', mfp.container, mfp.st.tLoading);
        }


        // Initializing modules
        var modules = $.magnificPopup.modules;
        for(i = 0; i < modules.length; i++) {
            var n = modules[i];
            n = n.charAt(0).toUpperCase() + n.slice(1);
            mfp['init'+n].call(mfp);
        }
        _mfpTrigger('BeforeOpen');


        if(mfp.st.showCloseBtn) {
            // Close button
            if(!mfp.st.closeBtnInside) {
                mfp.wrap.append( _getCloseBtn() );
            } else {
                _mfpOn(MARKUP_PARSE_EVENT, function(e, template, values, item) {
                    values.close_replaceWith = _getCloseBtn(item.type);
                });
                _wrapClasses += ' mfp-close-btn-in';
            }
        }

        if(mfp.st.alignTop) {
            _wrapClasses += ' mfp-align-top';
        }



        if(mfp.fixedContentPos) {
            mfp.wrap.css({
                overflow: mfp.st.overflowY,
                overflowX: 'hidden',
                overflowY: mfp.st.overflowY
            });
        } else {
            mfp.wrap.css({
                top: _window.scrollTop(),
                position: 'absolute'
            });
        }
        if( mfp.st.fixedBgPos === false || (mfp.st.fixedBgPos === 'auto' && !mfp.fixedContentPos) ) {
            mfp.bgOverlay.css({
                height: _document.height(),
                position: 'absolute'
            });
        }



        if(mfp.st.enableEscapeKey) {
            // Close on ESC key
            _document.on('keyup' + EVENT_NS, function(e) {
                if(e.keyCode === 27) {
                    mfp.close();
                }
            });
        }

        _window.on('resize' + EVENT_NS, function() {
            mfp.updateSize();
        });


        if(!mfp.st.closeOnContentClick) {
            _wrapClasses += ' mfp-auto-cursor';
        }

        if(_wrapClasses)
            mfp.wrap.addClass(_wrapClasses);


        // this triggers recalculation of layout, so we get it once to not to trigger twice
        var windowHeight = mfp.wH = _window.height();


        var windowStyles = {};

        if( mfp.fixedContentPos ) {
            if(mfp._hasScrollBar(windowHeight)){
                var s = mfp._getScrollbarSize();
                if(s) {
                    windowStyles.marginRight = s;
                }
            }
        }

        if(mfp.fixedContentPos) {
            if(!mfp.isIE7) {
                windowStyles.overflow = 'hidden';
            } else {
                // ie7 double-scroll bug
                $('body, html').css('overflow', 'hidden');
            }
        }



        var classesToadd = mfp.st.mainClass;
        if(mfp.isIE7) {
            classesToadd += ' mfp-ie7';
        }
        if(classesToadd) {
            mfp._addClassToMFP( classesToadd );
        }

        // add content
        mfp.updateItemHTML();

        _mfpTrigger('BuildControls');

        // remove scrollbar, add margin e.t.c
        $('html').css(windowStyles);

        // add everything to DOM
        mfp.bgOverlay.add(mfp.wrap).prependTo( mfp.st.prependTo || _body );

        // Save last focused element
        mfp._lastFocusedEl = document.activeElement;

        // Wait for next cycle to allow CSS transition
        setTimeout(function() {

            if(mfp.content) {
                mfp._addClassToMFP(READY_CLASS);
                mfp._setFocus();
            } else {
                // if content is not defined (not loaded e.t.c) we add class only for BG
                mfp.bgOverlay.addClass(READY_CLASS);
            }

            // Trap the focus in popup
            _document.on('focusin' + EVENT_NS, mfp._onFocusIn);

        }, 16);

        mfp.isOpen = true;
        mfp.updateSize(windowHeight);
        _mfpTrigger(OPEN_EVENT);

        return data;
    },

    /**
     * Closes the popup
     */
    close: function() {
        if(!mfp.isOpen) return;
        _mfpTrigger(BEFORE_CLOSE_EVENT);

        mfp.isOpen = false;
        // for CSS3 animation
        if(mfp.st.removalDelay && !mfp.isLowIE && mfp.supportsTransition )  {
            mfp._addClassToMFP(REMOVING_CLASS);
            setTimeout(function() {
                mfp._close();
            }, mfp.st.removalDelay);
        } else {
            mfp._close();
        }
    },

    /**
     * Helper for close() function
     */
    _close: function() {
        _mfpTrigger(CLOSE_EVENT);

        var classesToRemove = REMOVING_CLASS + ' ' + READY_CLASS + ' ';

        mfp.bgOverlay.detach();
        mfp.wrap.detach();
        mfp.container.empty();

        if(mfp.st.mainClass) {
            classesToRemove += mfp.st.mainClass + ' ';
        }

        mfp._removeClassFromMFP(classesToRemove);

        if(mfp.fixedContentPos) {
            var windowStyles = {marginRight: ''};
            if(mfp.isIE7) {
                $('body, html').css('overflow', '');
            } else {
                windowStyles.overflow = '';
            }
            $('html').css(windowStyles);
        }

        _document.off('keyup' + EVENT_NS + ' focusin' + EVENT_NS);
        mfp.ev.off(EVENT_NS);

        // clean up DOM elements that aren't removed
        mfp.wrap.attr('class', 'mfp-wrap').removeAttr('style');
        mfp.bgOverlay.attr('class', 'mfp-bg');
        mfp.container.attr('class', 'mfp-container');

        // remove close button from target element
        if(mfp.st.showCloseBtn &&
        (!mfp.st.closeBtnInside || mfp.currTemplate[mfp.currItem.type] === true)) {
            if(mfp.currTemplate.closeBtn)
                mfp.currTemplate.closeBtn.detach();
        }


        if(mfp._lastFocusedEl) {
            $(mfp._lastFocusedEl).focus(); // put tab focus back
        }
        mfp.currItem = null;
        mfp.content = null;
        mfp.currTemplate = null;
        mfp.prevHeight = 0;

        _mfpTrigger(AFTER_CLOSE_EVENT);
    },

    updateSize: function(winHeight) {

        if(mfp.isIOS) {
            // fixes iOS nav bars https://github.com/dimsemenov/Magnific-Popup/issues/2
            var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
            var height = window.innerHeight * zoomLevel;
            mfp.wrap.css('height', height);
            mfp.wH = height;
        } else {
            mfp.wH = winHeight || _window.height();
        }
        // Fixes #84: popup incorrectly positioned with position:relative on body
        if(!mfp.fixedContentPos) {
            mfp.wrap.css('height', mfp.wH);
        }

        _mfpTrigger('Resize');

    },

    /**
     * Set content of popup based on current index
     */
    updateItemHTML: function() {
        var item = mfp.items[mfp.index];

        // Detach and perform modifications
        mfp.contentContainer.detach();

        if(mfp.content)
            mfp.content.detach();

        if(!item.parsed) {
            item = mfp.parseEl( mfp.index );
        }

        var type = item.type;

        _mfpTrigger('BeforeChange', [mfp.currItem ? mfp.currItem.type : '', type]);
        // BeforeChange event works like so:
        // _mfpOn('BeforeChange', function(e, prevType, newType) { });

        mfp.currItem = item;



        if(!mfp.currTemplate[type]) {
            var markup = mfp.st[type] ? mfp.st[type].markup : false;

            // allows to modify markup
            _mfpTrigger('FirstMarkupParse', markup);

            if(markup) {
                mfp.currTemplate[type] = $(markup);
            } else {
                // if there is no markup found we just define that template is parsed
                mfp.currTemplate[type] = true;
            }
        }

        if(_prevContentType && _prevContentType !== item.type) {
            mfp.container.removeClass('mfp-'+_prevContentType+'-holder');
        }

        var newContent = mfp['get' + type.charAt(0).toUpperCase() + type.slice(1)](item, mfp.currTemplate[type]);
        mfp.appendContent(newContent, type);

        item.preloaded = true;

        _mfpTrigger(CHANGE_EVENT, item);
        _prevContentType = item.type;

        // Append container back after its content changed
        mfp.container.prepend(mfp.contentContainer);

        _mfpTrigger('AfterChange');
    },


    /**
     * Set HTML content of popup
     */
    appendContent: function(newContent, type) {
        mfp.content = newContent;

        if(newContent) {
            if(mfp.st.showCloseBtn && mfp.st.closeBtnInside &&
                mfp.currTemplate[type] === true) {
                // if there is no markup, we just append close button element inside
                if(!mfp.content.find('.mfp-close').length) {
                    mfp.content.append(_getCloseBtn());
                }
            } else {
                mfp.content = newContent;
            }
        } else {
            mfp.content = '';
        }

        _mfpTrigger(BEFORE_APPEND_EVENT);
        mfp.container.addClass('mfp-'+type+'-holder');

        mfp.contentContainer.append(mfp.content);
    },



    /**
     * Creates Magnific Popup data object based on given data
     * @param  {int} index Index of item to parse
     */
    parseEl: function(index) {
        var item = mfp.items[index],
            type;

        if(item.tagName) {
            item = { el: $(item) };
        } else {
            type = item.type;
            item = { data: item, src: item.src };
        }

        if(item.el) {
            var types = mfp.types;

            // check for 'mfp-TYPE' class
            for(var i = 0; i < types.length; i++) {
                if( item.el.hasClass('mfp-'+types[i]) ) {
                    type = types[i];
                    break;
                }
            }

            item.src = item.el.attr('data-mfp-src');
            if(!item.src) {
                item.src = item.el.attr('href');
            }
        }

        item.type = type || mfp.st.type || 'inline';
        item.index = index;
        item.parsed = true;
        mfp.items[index] = item;
        _mfpTrigger('ElementParse', item);

        return mfp.items[index];
    },


    /**
     * Initializes single popup or a group of popups
     */
    addGroup: function(el, options) {
        var eHandler = function(e) {
            e.mfpEl = this;
            mfp._openClick(e, el, options);
        };

        if(!options) {
            options = {};
        }

        var eName = 'click.magnificPopup';
        options.mainEl = el;

        if(options.items) {
            options.isObj = true;
            el.off(eName).on(eName, eHandler);
        } else {
            options.isObj = false;
            if(options.delegate) {
                el.off(eName).on(eName, options.delegate , eHandler);
            } else {
                options.items = el;
                el.off(eName).on(eName, eHandler);
            }
        }
    },
    _openClick: function(e, el, options) {
        var midClick = options.midClick !== undefined ? options.midClick : $.magnificPopup.defaults.midClick;


        if(!midClick && ( e.which === 2 || e.ctrlKey || e.metaKey ) ) {
            return;
        }

        var disableOn = options.disableOn !== undefined ? options.disableOn : $.magnificPopup.defaults.disableOn;

        if(disableOn) {
            if($.isFunction(disableOn)) {
                if( !disableOn.call(mfp) ) {
                    return true;
                }
            } else { // else it's number
                if( _window.width() < disableOn ) {
                    return true;
                }
            }
        }

        if(e.type) {
            e.preventDefault();

            // This will prevent popup from closing if element is inside and popup is already opened
            if(mfp.isOpen) {
                e.stopPropagation();
            }
        }


        options.el = $(e.mfpEl);
        if(options.delegate) {
            options.items = el.find(options.delegate);
        }
        mfp.open(options);
    },


    /**
     * Updates text on preloader
     */
    updateStatus: function(status, text) {

        if(mfp.preloader) {
            if(_prevStatus !== status) {
                mfp.container.removeClass('mfp-s-'+_prevStatus);
            }

            if(!text && status === 'loading') {
                text = mfp.st.tLoading;
            }

            var data = {
                status: status,
                text: text
            };
            // allows to modify status
            _mfpTrigger('UpdateStatus', data);

            status = data.status;
            text = data.text;

            mfp.preloader.html(text);

            mfp.preloader.find('a').on('click', function(e) {
                e.stopImmediatePropagation();
            });

            mfp.container.addClass('mfp-s-'+status);
            _prevStatus = status;
        }
    },


    /*
        "Private" helpers that aren't private at all
     */
    // Check to close popup or not
    // "target" is an element that was clicked
    _checkIfClose: function(target) {

        if($(target).hasClass(PREVENT_CLOSE_CLASS)) {
            return;
        }

        var closeOnContent = mfp.st.closeOnContentClick;
        var closeOnBg = mfp.st.closeOnBgClick;

        if(closeOnContent && closeOnBg) {
            return true;
        } else {

            // We close the popup if click is on close button or on preloader. Or if there is no content.
            if(!mfp.content || $(target).hasClass('mfp-close') || (mfp.preloader && target === mfp.preloader[0]) ) {
                return true;
            }

            // if click is outside the content
            if(  (target !== mfp.content[0] && !$.contains(mfp.content[0], target))  ) {
                if(closeOnBg) {
                    // last check, if the clicked element is in DOM, (in case it's removed onclick)
                    if( $.contains(document, target) ) {
                        return true;
                    }
                }
            } else if(closeOnContent) {
                return true;
            }

        }
        return false;
    },
    _addClassToMFP: function(cName) {
        mfp.bgOverlay.addClass(cName);
        mfp.wrap.addClass(cName);
    },
    _removeClassFromMFP: function(cName) {
        this.bgOverlay.removeClass(cName);
        mfp.wrap.removeClass(cName);
    },
    _hasScrollBar: function(winHeight) {
        return (  (mfp.isIE7 ? _document.height() : document.body.scrollHeight) > (winHeight || _window.height()) );
    },
    _setFocus: function() {
        (mfp.st.focus ? mfp.content.find(mfp.st.focus).eq(0) : mfp.wrap).focus();
    },
    _onFocusIn: function(e) {
        if( e.target !== mfp.wrap[0] && !$.contains(mfp.wrap[0], e.target) ) {
            mfp._setFocus();
            return false;
        }
    },
    _parseMarkup: function(template, values, item) {
        var arr;
        if(item.data) {
            values = $.extend(item.data, values);
        }
        _mfpTrigger(MARKUP_PARSE_EVENT, [template, values, item] );

        $.each(values, function(key, value) {
            if(value === undefined || value === false) {
                return true;
            }
            arr = key.split('_');
            if(arr.length > 1) {
                var el = template.find(EVENT_NS + '-'+arr[0]);

                if(el.length > 0) {
                    var attr = arr[1];
                    if(attr === 'replaceWith') {
                        if(el[0] !== value[0]) {
                            el.replaceWith(value);
                        }
                    } else if(attr === 'img') {
                        if(el.is('img')) {
                            el.attr('src', value);
                        } else {
                            el.replaceWith( '<img src="'+value+'" class="' + el.attr('class') + '" />' );
                        }
                    } else {
                        el.attr(arr[1], value);
                    }
                }

            } else {
                template.find(EVENT_NS + '-'+key).html(value);
            }
        });
    },

    _getScrollbarSize: function() {
        // thx David
        if(mfp.scrollbarSize === undefined) {
            var scrollDiv = document.createElement("div");
            scrollDiv.id = "mfp-sbm";
            scrollDiv.style.cssText = 'width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;';
            document.body.appendChild(scrollDiv);
            mfp.scrollbarSize = scrollDiv.offsetWidth - scrollDiv.clientWidth;
            document.body.removeChild(scrollDiv);
        }
        return mfp.scrollbarSize;
    }

}; /* MagnificPopup core prototype end */




/**
 * Public static functions
 */
$.magnificPopup = {
    instance: null,
    proto: MagnificPopup.prototype,
    modules: [],

    open: function(options, index) {
        _checkInstance();

        if(!options) {
            options = {};
        } else {
            options = $.extend(true, {}, options);
        }


        options.isObj = true;
        options.index = index || 0;
        return this.instance.open(options);
    },

    close: function() {
        return $.magnificPopup.instance && $.magnificPopup.instance.close();
    },

    registerModule: function(name, module) {
        if(module.options) {
            $.magnificPopup.defaults[name] = module.options;
        }
        $.extend(this.proto, module.proto);
        this.modules.push(name);
    },

    defaults: {

        // Info about options is in docs:
        // http://dimsemenov.com/plugins/magnific-popup/documentation.html#options

        disableOn: 0,

        key: null,

        midClick: false,

        mainClass: '',

        preloader: true,

        focus: '', // CSS selector of input to focus after popup is opened

        closeOnContentClick: false,

        closeOnBgClick: true,

        closeBtnInside: true,

        showCloseBtn: true,

        enableEscapeKey: true,

        modal: false,

        alignTop: false,

        removalDelay: 0,

        prependTo: null,

        fixedContentPos: 'auto',

        fixedBgPos: 'auto',

        overflowY: 'auto',

        closeMarkup: '<button title="%title%" type="button" class="mfp-close">&times;</button>',

        tClose: 'Close (Esc)',

        tLoading: 'Loading...'

    }
};



$.fn.magnificPopup = function(options) {
    _checkInstance();

    var jqEl = $(this);

    // We call some API method of first param is a string
    if (typeof options === "string" ) {

        if(options === 'open') {
            var items,
                itemOpts = _isJQ ? jqEl.data('magnificPopup') : jqEl[0].magnificPopup,
                index = parseInt(arguments[1], 10) || 0;

            if(itemOpts.items) {
                items = itemOpts.items[index];
            } else {
                items = jqEl;
                if(itemOpts.delegate) {
                    items = items.find(itemOpts.delegate);
                }
                items = items.eq( index );
            }
            mfp._openClick({mfpEl:items}, jqEl, itemOpts);
        } else {
            if(mfp.isOpen)
                mfp[options].apply(mfp, Array.prototype.slice.call(arguments, 1));
        }

    } else {
        // clone options obj
        options = $.extend(true, {}, options);

        /*
         * As Zepto doesn't support .data() method for objects
         * and it works only in normal browsers
         * we assign "options" object directly to the DOM element. FTW!
         */
        if(_isJQ) {
            jqEl.data('magnificPopup', options);
        } else {
            jqEl[0].magnificPopup = options;
        }

        mfp.addGroup(jqEl, options);

    }
    return jqEl;
};


//Quick benchmark
/*
var start = performance.now(),
    i,
    rounds = 1000;

for(i = 0; i < rounds; i++) {

}
console.log('Test #1:', performance.now() - start);

start = performance.now();
for(i = 0; i < rounds; i++) {

}
console.log('Test #2:', performance.now() - start);
*/


/*>>core*/

/*>>inline*/

var INLINE_NS = 'inline',
    _hiddenClass,
    _inlinePlaceholder,
    _lastInlineElement,
    _putInlineElementsBack = function() {
        if(_lastInlineElement) {
            _inlinePlaceholder.after( _lastInlineElement.addClass(_hiddenClass) ).detach();
            _lastInlineElement = null;
        }
    };

$.magnificPopup.registerModule(INLINE_NS, {
    options: {
        hiddenClass: 'hide', // will be appended with `mfp-` prefix
        markup: '',
        tNotFound: 'Content not found'
    },
    proto: {

        initInline: function() {
            mfp.types.push(INLINE_NS);

            _mfpOn(CLOSE_EVENT+'.'+INLINE_NS, function() {
                _putInlineElementsBack();
            });
        },

        getInline: function(item, template) {

            _putInlineElementsBack();

            if(item.src) {
                var inlineSt = mfp.st.inline,
                    el = $(item.src);

                if(el.length) {

                    // If target element has parent - we replace it with placeholder and put it back after popup is closed
                    var parent = el[0].parentNode;
                    if(parent && parent.tagName) {
                        if(!_inlinePlaceholder) {
                            _hiddenClass = inlineSt.hiddenClass;
                            _inlinePlaceholder = _getEl(_hiddenClass);
                            _hiddenClass = 'mfp-'+_hiddenClass;
                        }
                        // replace target inline element with placeholder
                        _lastInlineElement = el.after(_inlinePlaceholder).detach().removeClass(_hiddenClass);
                    }

                    mfp.updateStatus('ready');
                } else {
                    mfp.updateStatus('error', inlineSt.tNotFound);
                    el = $('<div>');
                }

                item.inlineElement = el;
                return el;
            }

            mfp.updateStatus('ready');
            mfp._parseMarkup(template, {}, item);
            return template;
        }
    }
});

/*>>inline*/



/*>>image*/
var _imgInterval,
    _getTitle = function(item) {
        if(item.data && item.data.title !== undefined)
            return item.data.title;

        var src = mfp.st.image.titleSrc;

        if(src) {
            if($.isFunction(src)) {
                return src.call(mfp, item);
            } else if(item.el) {
                return item.el.attr(src) || '';
            }
        }
        return '';
    };

$.magnificPopup.registerModule('image', {

    options: {
        markup: '<div class="mfp-figure">'+
                    '<div class="mfp-close"></div>'+
                    '<figure>'+
                        '<div class="mfp-img"></div>'+
                        '<figcaption>'+
                            '<div class="mfp-bottom-bar">'+
                                '<div class="mfp-title"></div>'+
                                '<div class="mfp-counter"></div>'+
                            '</div>'+
                        '</figcaption>'+
                    '</figure>'+
                '</div>',
        cursor: 'mfp-zoom-out-cur',
        titleSrc: 'title',
        verticalFit: true,
        tError: '<a href="%url%">The image</a> could not be loaded.'
    },

    proto: {
        initImage: function() {
            var imgSt = mfp.st.image,
                ns = '.image';

            mfp.types.push('image');

            _mfpOn(OPEN_EVENT+ns, function() {
                if(mfp.currItem.type === 'image' && imgSt.cursor) {
                    _body.addClass(imgSt.cursor);
                }
            });

            _mfpOn(CLOSE_EVENT+ns, function() {
                if(imgSt.cursor) {
                    _body.removeClass(imgSt.cursor);
                }
                _window.off('resize' + EVENT_NS);
            });

            _mfpOn('Resize'+ns, mfp.resizeImage);
            if(mfp.isLowIE) {
                _mfpOn('AfterChange', mfp.resizeImage);
            }
        },
        resizeImage: function() {
            var item = mfp.currItem;
            if(!item || !item.img) return;

            if(mfp.st.image.verticalFit) {
                var decr = 0;
                // fix box-sizing in ie7/8
                if(mfp.isLowIE) {
                    decr = parseInt(item.img.css('padding-top'), 10) + parseInt(item.img.css('padding-bottom'),10);
                }
                item.img.css('max-height', mfp.wH-decr);
            }
        },
        _onImageHasSize: function(item) {
            if(item.img) {

                item.hasSize = true;

                if(_imgInterval) {
                    clearInterval(_imgInterval);
                }

                item.isCheckingImgSize = false;

                _mfpTrigger('ImageHasSize', item);

                if(item.imgHidden) {
                    if(mfp.content)
                        mfp.content.removeClass('mfp-loading');

                    item.imgHidden = false;
                }

            }
        },

        /**
         * Function that loops until the image has size to display elements that rely on it asap
         */
        findImageSize: function(item) {

            var counter = 0,
                img = item.img[0],
                mfpSetInterval = function(delay) {

                    if(_imgInterval) {
                        clearInterval(_imgInterval);
                    }
                    // decelerating interval that checks for size of an image
                    _imgInterval = setInterval(function() {
                        if(img.naturalWidth > 0) {
                            mfp._onImageHasSize(item);
                            return;
                        }

                        if(counter > 200) {
                            clearInterval(_imgInterval);
                        }

                        counter++;
                        if(counter === 3) {
                            mfpSetInterval(10);
                        } else if(counter === 40) {
                            mfpSetInterval(50);
                        } else if(counter === 100) {
                            mfpSetInterval(500);
                        }
                    }, delay);
                };

            mfpSetInterval(1);
        },

        getImage: function(item, template) {

            var guard = 0,

                // image load complete handler
                onLoadComplete = function() {
                    if(item) {
                        if (item.img[0].complete) {
                            item.img.off('.mfploader');

                            if(item === mfp.currItem){
                                mfp._onImageHasSize(item);

                                mfp.updateStatus('ready');
                            }

                            item.hasSize = true;
                            item.loaded = true;

                            _mfpTrigger('ImageLoadComplete');

                        }
                        else {
                            // if image complete check fails 200 times (20 sec), we assume that there was an error.
                            guard++;
                            if(guard < 200) {
                                setTimeout(onLoadComplete,100);
                            } else {
                                onLoadError();
                            }
                        }
                    }
                },

                // image error handler
                onLoadError = function() {
                    if(item) {
                        item.img.off('.mfploader');
                        if(item === mfp.currItem){
                            mfp._onImageHasSize(item);
                            mfp.updateStatus('error', imgSt.tError.replace('%url%', item.src) );
                        }

                        item.hasSize = true;
                        item.loaded = true;
                        item.loadError = true;
                    }
                },
                imgSt = mfp.st.image;


            var el = template.find('.mfp-img');
            if(el.length) {
                var img = document.createElement('img');
                img.className = 'mfp-img';
                item.img = $(img).on('load.mfploader', onLoadComplete).on('error.mfploader', onLoadError);
                img.src = item.src;

                // without clone() "error" event is not firing when IMG is replaced by new IMG
                // TODO: find a way to avoid such cloning
                if(el.is('img')) {
                    item.img = item.img.clone();
                }

                img = item.img[0];
                if(img.naturalWidth > 0) {
                    item.hasSize = true;
                } else if(!img.width) {
                    item.hasSize = false;
                }
            }

            mfp._parseMarkup(template, {
                title: _getTitle(item),
                img_replaceWith: item.img
            }, item);

            mfp.resizeImage();

            if(item.hasSize) {
                if(_imgInterval) clearInterval(_imgInterval);

                if(item.loadError) {
                    template.addClass('mfp-loading');
                    mfp.updateStatus('error', imgSt.tError.replace('%url%', item.src) );
                } else {
                    template.removeClass('mfp-loading');
                    mfp.updateStatus('ready');
                }
                return template;
            }

            mfp.updateStatus('loading');
            item.loading = true;

            if(!item.hasSize) {
                item.imgHidden = true;
                template.addClass('mfp-loading');
                mfp.findImageSize(item);
            } 

            return template;
        }
    }
});



/*>>image*/

/*>>zoom*/
var hasMozTransform,
    getHasMozTransform = function() {
        if(hasMozTransform === undefined) {
            hasMozTransform = document.createElement('p').style.MozTransform !== undefined;
        }
        return hasMozTransform;
    };

$.magnificPopup.registerModule('zoom', {

    options: {
        enabled: false,
        easing: 'ease-in-out',
        duration: 300,
        opener: function(element) {
            return element.is('img') ? element : element.find('img');
        }
    },

    proto: {

        initZoom: function() {
            var zoomSt = mfp.st.zoom,
                ns = '.zoom',
                image;

            if(!zoomSt.enabled || !mfp.supportsTransition) {
                return;
            }

            var duration = zoomSt.duration,
                getElToAnimate = function(image) {
                    var newImg = image.clone().removeAttr('style').removeAttr('class').addClass('mfp-animated-image'),
                        transition = 'all '+(zoomSt.duration/1000)+'s ' + zoomSt.easing,
                        cssObj = {
                            position: 'fixed',
                            zIndex: 9999,
                            left: 0,
                            top: 0,
                            '-webkit-backface-visibility': 'hidden'
                        },
                        t = 'transition';

                    cssObj['-webkit-'+t] = cssObj['-moz-'+t] = cssObj['-o-'+t] = cssObj[t] = transition;

                    newImg.css(cssObj);
                    return newImg;
                },
                showMainContent = function() {
                    mfp.content.css('visibility', 'visible');
                },
                openTimeout,
                animatedImg;

            _mfpOn('BuildControls'+ns, function() {
                if(mfp._allowZoom()) {

                    clearTimeout(openTimeout);
                    mfp.content.css('visibility', 'hidden');

                    // Basically, all code below does is clones existing image, puts in on top of the current one and animated it

                    image = mfp._getItemToZoom();

                    if(!image) {
                        showMainContent();
                        return;
                    }

                    animatedImg = getElToAnimate(image);

                    animatedImg.css( mfp._getOffset() );

                    mfp.wrap.append(animatedImg);

                    openTimeout = setTimeout(function() {
                        animatedImg.css( mfp._getOffset( true ) );
                        openTimeout = setTimeout(function() {

                            showMainContent();

                            setTimeout(function() {
                                animatedImg.remove();
                                image = animatedImg = null;
                                _mfpTrigger('ZoomAnimationEnded');
                            }, 16); // avoid blink when switching images

                        }, duration); // this timeout equals animation duration

                    }, 16); // by adding this timeout we avoid short glitch at the beginning of animation


                    // Lots of timeouts...
                }
            });
            _mfpOn(BEFORE_CLOSE_EVENT+ns, function() {
                if(mfp._allowZoom()) {

                    clearTimeout(openTimeout);

                    mfp.st.removalDelay = duration;

                    if(!image) {
                        image = mfp._getItemToZoom();
                        if(!image) {
                            return;
                        }
                        animatedImg = getElToAnimate(image);
                    }


                    animatedImg.css( mfp._getOffset(true) );
                    mfp.wrap.append(animatedImg);
                    mfp.content.css('visibility', 'hidden');

                    setTimeout(function() {
                        animatedImg.css( mfp._getOffset() );
                    }, 16);
                }

            });

            _mfpOn(CLOSE_EVENT+ns, function() {
                if(mfp._allowZoom()) {
                    showMainContent();
                    if(animatedImg) {
                        animatedImg.remove();
                    }
                    image = null;
                }
            });
        },

        _allowZoom: function() {
            return mfp.currItem.type === 'image';
        },

        _getItemToZoom: function() {
            if(mfp.currItem.hasSize) {
                return mfp.currItem.img;
            } else {
                return false;
            }
        },

        // Get element postion relative to viewport
        _getOffset: function(isLarge) {
            var el;
            if(isLarge) {
                el = mfp.currItem.img;
            } else {
                el = mfp.st.zoom.opener(mfp.currItem.el || mfp.currItem);
            }

            var offset = el.offset();
            var paddingTop = parseInt(el.css('padding-top'),10);
            var paddingBottom = parseInt(el.css('padding-bottom'),10);
            offset.top -= ( $(window).scrollTop() - paddingTop );


            /*

            Animating left + top + width/height looks glitchy in Firefox, but perfect in Chrome. And vice-versa.

             */
            var obj = {
                width: el.width(),
                // fix Zepto height+padding issue
                height: (_isJQ ? el.innerHeight() : el[0].offsetHeight) - paddingBottom - paddingTop
            };

            // I hate to do this, but there is no another option
            if( getHasMozTransform() ) {
                obj['-moz-transform'] = obj['transform'] = 'translate(' + offset.left + 'px,' + offset.top + 'px)';
            } else {
                obj.left = offset.left;
                obj.top = offset.top;
            }
            return obj;
        }

    }
});



/*>>zoom*/

/*>>iframe*/

var IFRAME_NS = 'iframe',
    _emptyPage = '//about:blank',

    _fixIframeBugs = function(isShowing) {
        if(mfp.currTemplate[IFRAME_NS]) {
            var el = mfp.currTemplate[IFRAME_NS].find('iframe');
            if(el.length) {
                // reset src after the popup is closed to avoid "video keeps playing after popup is closed" bug
                if(!isShowing) {
                    el[0].src = _emptyPage;
                }

                // IE8 black screen bug fix
                if(mfp.isIE8) {
                    el.css('display', isShowing ? 'block' : 'none');
                }
            }
        }
    };

$.magnificPopup.registerModule(IFRAME_NS, {

    options: {
        markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe>'+
                '</div>',

        srcAction: 'iframe_src',

        // we don't care and support only one default type of URL by default
        patterns: {
            youtube: {
                index: 'youtube.com',
                id: 'v=',
                src: '//www.youtube.com/embed/%id%?autoplay=1'
            },
            vimeo: {
                index: 'vimeo.com/',
                id: '/',
                src: '//player.vimeo.com/video/%id%?autoplay=1'
            },
            gmaps: {
                index: '//maps.google.',
                src: '%id%&output=embed'
            }
        }
    },

    proto: {
        initIframe: function() {
            mfp.types.push(IFRAME_NS);

            _mfpOn('BeforeChange', function(e, prevType, newType) {
                if(prevType !== newType) {
                    if(prevType === IFRAME_NS) {
                        _fixIframeBugs(); // iframe if removed
                    } else if(newType === IFRAME_NS) {
                        _fixIframeBugs(true); // iframe is showing
                    }
                }// else {
                    // iframe source is switched, don't do anything
                //}
            });

            _mfpOn(CLOSE_EVENT + '.' + IFRAME_NS, function() {
                _fixIframeBugs();
            });
        },

        getIframe: function(item, template) {
            var embedSrc = item.src;
            var iframeSt = mfp.st.iframe;

            $.each(iframeSt.patterns, function() {
                if(embedSrc.indexOf( this.index ) > -1) {
                    if(this.id) {
                        if(typeof this.id === 'string') {
                            embedSrc = embedSrc.substr(embedSrc.lastIndexOf(this.id)+this.id.length, embedSrc.length);
                        } else {
                            embedSrc = this.id.call( this, embedSrc );
                        }
                    }
                    embedSrc = this.src.replace('%id%', embedSrc );
                    return false; // break;
                }
            });

            var dataObj = {};
            if(iframeSt.srcAction) {
                dataObj[iframeSt.srcAction] = embedSrc;
            }
            mfp._parseMarkup(template, dataObj, item);

            mfp.updateStatus('ready');

            return template;
        }
    }
});



/*>>iframe*/






 _checkInstance(); })(window.jQuery || window.Zepto);
// S9Y-MERGE END jquery.magnific-popup.js - 2014-06-25 12:28
// S9Y-MERGE START jquery.syncheight.js - 2014-06-25 12:28
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
 *
 * Changelog
 * * v1.3: compatibility fix for jQuery 1.9.x (removed $.browser)
 *
 * Usage:
	$(window).load(function(){
		$('p').syncHeight();
	});
 */

(function($) {
    var getHeightProperty = function() {
		var browser_id = 0;
		var property = [
			// To avoid content overflow in synchronised boxes on font scaling, we
			// use 'min-height' property for modern browsers ...
			['min-height','0px'],
			// and 'height' property for Internet Explorer.
			['height','1%']
		];

		var bMatch = /(msie) ([\w.]+)/.exec(navigator.userAgent.toLowerCase()) || [],
			browser = bMatch[1] || "",
			browserVersion = bMatch[2] || "0";

		// check for IE6 ...
		if(browser == 'msie' && browserVersion < 7){
			browser_id = 1;
		}

        return { 'name': property[browser_id][0],
                 'autoheightVal': property[browser_id][1] };
    };

    $.getSyncedHeight = function(selector) {
        var max = 0;
        var heightProperty = getHeightProperty();
		// get maximum element height ...
		$(selector).each(function() {
			// fallback to auto height before height check ...
			$(this).css(heightProperty.name, heightProperty.autoheightVal);
			var val = $(this).height();
			if(val > max){
				max = val;
			}
		});
        return max;
    };

	$.fn.syncHeight = function(config) {
		var defaults = {
			updateOnResize: false,	// re-sync element heights after a browser resize event (useful in flexible layouts)
            height: false
		};
		var options = $.extend(defaults, config);

		var e = this;

		var max = 0;
        var heightPropertyName = getHeightProperty().name;

        if(typeof(options.height) === "number") {
            max = options.height;
        } else {
            max = $.getSyncedHeight(this);
        }
		// set synchronized element height ...
		$(this).each(function() {
			$(this).css(heightPropertyName, max+'px');
		});

		// optional sync refresh on resize event ...
		if (options.updateOnResize === true) {
			$(window).resize(function(){
				$(e).syncHeight();
			});
		}
		return this;
	};
})(jQuery);
// S9Y-MERGE END jquery.syncheight.js - 2014-06-25 12:28
// S9Y-MERGE START jquery.tabs.js - 2014-06-25 12:28
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

(function($) {
    var debugMode = false;
    $.fn.extend({
        // We assume there could be multiple sets of tabs on a page, so,
        // the unique id for each invididual tab's heading is identified with params q and r (e.g., id="accessibletabscontent0-2")
        getUniqueId: function(p, q, r){
            if (r===undefined) {r='';} else {r='-'+r;}
            return p + q + r;
        },
        accessibleTabs: function(config) {
            var defaults = {
                wrapperClass: 'content', // Classname to apply to the div that is wrapped around the original Markup
                currentClass: 'current', // Classname to apply to the LI of the selected Tab
                tabhead: 'h4', // Tag or valid Query Selector of the Elements to Transform the Tabs-Navigation from (originals are removed)
                tabheadClass: 'tabhead', // Classname to apply to the target heading element for each tab div
                tabbody: '.tabbody', // Tag or valid Query Selector of the Elements to be treated as the Tab Body
                fx:'show', // can be "fadeIn", "slideDown", "show"
                fxspeed: 'normal', // speed (String|Number): "slow", "normal", or "fast") or the number of milliseconds to run the animation
                currentInfoText: 'current tab: ', // text to indicate for screenreaders which tab is the current one
                currentInfoPosition: 'prepend', // Definition where to insert the Info Text. Can be either "prepend" or "append"
                currentInfoClass: 'current-info', // Class to apply to the span wrapping the CurrentInfoText
                tabsListClass:'tabs-list', // Class to apply to the generated list of tabs above the content
                syncheights:false, // syncs the heights of the tab contents when the SyncHeight plugin is available http://blog.ginader.de/dev/jquery/syncheight/index.php
                syncHeightMethodName:'syncHeight', // set the Method name of the plugin you want to use to sync the tab contents. Defaults to the SyncHeight plugin: http://github.com/ginader/syncHeight
                cssClassAvailable:false, // Enable individual css classes for tabs. Gets the appropriate class name of a tabhead element and apply it to the tab list element. Boolean value
                saveState:false, // save the selected tab into a cookie so it stays selected after a reload. This requires that the wrapping div needs to have an ID (so we know which tab we're saving)
                autoAnchor:false, // will move over any existing id of a headline in tabs markup so it can be linked to it
                pagination:false, // adds buttons to each tab to switch to the next/previous tab
                position:'top', // can be 'top' or 'bottom'. Defines where the tabs list is inserted.
                wrapInnerNavLinks: '', // inner wrap for a-tags in tab navigation. See http://api.jquery.com/wrapInner/ for further informations
                firstNavItemClass: 'first', // Classname of the first list item in the tab navigation
                lastNavItemClass: 'last', // Classname of the last list item in the tab navigation
                clearfixClass: 'clearfix' // Name of the Class that is used to clear/contain floats
            };
            var keyCodes = {
                37 : -1, //LEFT
                38 : -1, //UP
                39 : +1, //RIGHT 
                40 : +1 //DOWN
            };
            var positions = {
                top : 'prepend',
                bottom : 'append'
            };
            this.options = $.extend(defaults, config);

            var tabsCount = 0;
            if($("body").data('accessibleTabsCount') !== undefined){
                tabsCount = $("body").data('accessibleTabsCount');
            }
            $("body").data('accessibleTabsCount',this.size()+tabsCount);

            var o = this;
            return this.each(function(t) {
                var el = $(this);
                var list = '';
                var tabCount = 0;
                var ids = [];

                $(el).wrapInner('<div class="'+o.options.wrapperClass+'"></div>');

                $(el).find(o.options.tabhead).each(function(i){
                    var id = '';
                    var elId = $(this).attr('id');
                    if(elId){
                        // Skip this item if it already exists.
                        if(elId.indexOf('accessibletabscontent') === 0) {
                            return;
                        }
                        id =' id="'+elId+'"';
                    }
                    var tabId = o.getUniqueId('accessibletabscontent', tabsCount+t, i);//get a unique id to assign to this tab's heading
                    var navItemId = o.getUniqueId('accessibletabsnavigation', tabsCount+t, i);//get a unique id for this navigation item
                    ids.push(tabId);
                    if(o.options.cssClassAvailable === true) {
                        var cssClass = '';
                        if($(this).attr('class')) {
                            cssClass = $(this).attr('class');
                            cssClass = ' class="'+cssClass+'"';
                        }
                        list += '<li id="'+navItemId+'"><a'+id+''+cssClass+' href="#'+tabId+'">'+$(this).html()+'</a></li>';
                    } else {
                      list += '<li id="'+navItemId+'"><a'+id+' href="#'+tabId+'">'+$(this).html()+'</a></li>';
                    }
                    $(this).attr({"id": tabId, "class": o.options.tabheadClass, "tabindex": "-1"});//assign the unique id and the tabheadClass class name to this tab's heading
                    tabCount++;
                });

                if (o.options.syncheights && $.fn[o.options.syncHeightMethodName]) {
                    $(el).find(o.options.tabbody)[o.options.syncHeightMethodName]();
                    $(window).resize(function(){
                        $(el).find(o.options.tabbody)[o.options.syncHeightMethodName]();
                    });
                }

                // Ensure that the call to setup tabs is re-runnable
                var tabs_selector = '.' + o.options.tabsListClass;
                if(!$(el).find(tabs_selector).length) {
                    $(el)[positions[o.options.position]]('<ul class="'+o.options.clearfixClass+' '+o.options.tabsListClass+' tabamount'+tabCount+'"></ul>');
                }

                $(el).find(tabs_selector).append(list);

                // initial show first content block and hide the others
                var content = $(el).find(o.options.tabbody);
                if (content.length > 0) {
                    $(content).hide();
                    $(content[0]).show();
                }
                $(el).find("ul."+o.options.tabsListClass+">li:first").addClass(o.options.currentClass).addClass(o.options.firstNavItemClass)
                  .find('a')[o.options.currentInfoPosition]('<span class="'+o.options.currentInfoClass+'">'+o.options.currentInfoText+'</span>')
                  .parents("ul."+o.options.tabsListClass).children('li:last').addClass(o.options.lastNavItemClass);

                if (o.options.wrapInnerNavLinks) {
                  $(el).find('ul.'+o.options.tabsListClass+'>li>a').wrapInner(o.options.wrapInnerNavLinks);
                }

                $(el).find('ul.'+o.options.tabsListClass+'>li>a').each(function(i){
                    $(this).click(function(event){
                        event.preventDefault();
                        el.trigger("showTab.accessibleTabs", [$(event.target)]);
                        if(o.options.saveState && $.cookie){
                            $.cookie('accessibletab_'+el.attr('id')+'_active',i);
                        }
                        $(el).find('ul.'+o.options.tabsListClass+'>li.'+o.options.currentClass).removeClass(o.options.currentClass)
                        .find("span."+o.options.currentInfoClass).remove();
                        $(this).blur();
                        $(el).find(o.options.tabbody+':visible').hide();
                        $(el).find(o.options.tabbody).eq(i)[o.options.fx](o.options.fxspeed);
                        $(this)[o.options.currentInfoPosition]('<span class="'+o.options.currentInfoClass+'">'+o.options.currentInfoText+'</span>')
                        .parent().addClass(o.options.currentClass);
                        //now, only after writing the currentInfoText span to the tab list link, set focus to the tab's heading

                        $($(this).attr("href")).focus().keyup(function(event){
                            if(keyCodes[event.keyCode]){
                                o.showAccessibleTab(i+keyCodes[event.keyCode]);
                                $(this).unbind( "keyup" );
                            }
                        });

                        // $(el).find('.accessibletabsanchor').keyup(function(event){
                        //     if(keyCodes[event.keyCode]){
                        //         o.showAccessibleTab(i+keyCodes[event.keyCode]);
                        //     }
                        // });
                    });

                    $(this).focus(function(){
                        $(document).keyup(function(event){
                            if(keyCodes[event.keyCode]){
                                o.showAccessibleTab(i+keyCodes[event.keyCode]);
                            }
                        });
                    });
                    $(this).blur(function(){
                        $(document).unbind( "keyup" );
                    });

                });

                if(o.options.saveState && $.cookie){
                    var savedState = $.cookie('accessibletab_'+el.attr('id')+'_active');
                    debug($.cookie('accessibletab_'+el.attr('id')+'_active'));
                    if(savedState !== null){
                        o.showAccessibleTab(savedState,el.attr('id'));
                    }
                }

                if(o.options.autoAnchor && window.location.hash){
                    var anchorTab = $('.'+o.options.tabsListClass).find(window.location.hash);
                    if(anchorTab.size()){
                        anchorTab.click();
                    }
                }

                if(o.options.pagination){
                    var m = '<ul class="pagination">';
                    m +='    <li class="previous"><a href="#{previousAnchor}"><span>{previousHeadline}</span></a></li>';
                    m +='    <li class="next"><a href="#{nextAnchor}"><span>{nextHeadline}</span></a></li>';
                    m +='</ul>';
                    var tabs = $(el).find('.tabbody');
                    var tabcount = tabs.size();
                    tabs.each(function(idx){
                        $(this).append(m);
                        var next = idx+1;
                        if(next>=tabcount){next = 0;}
                        var previous = idx-1;
                        if(previous<0){previous = tabcount-1;}
                        var p = $(this).find('.pagination');
                        var previousEl = p.find('.previous');
                        previousEl.find('span').text($('#'+ids[previous]).text());
                        previousEl.find('a').attr('href','#'+ids[previous])
                        .click(function(event){
                            event.preventDefault();
                            $(el).find('.tabs-list a').eq(previous).click();
                        });
                        var nextEl = p.find('.next');
                        nextEl.find('span').text($('#'+ids[next]).text());
                        nextEl.find('a').attr('href','#'+ids[next])
                        .click(function(event){
                            event.preventDefault();
                            $(el).find('.tabs-list a').eq(next).click();
                        });
                    });
                }
            });
        },
        showAccessibleTab: function(index,id){
            debug('showAccessibleTab');
            var o = this;
            if(id) {
                var el = $('#'+id);
                var links = el.find('ul.'+o.options.tabsListClass+'>li>a');
                el.trigger("showTab.accessibleTabs", [links.eq(index)]);
                links.eq(index).click();
            } else {
                return this.each(function() {
                    var el = $(this);
                    el.trigger("showTab.accessibleTabs");
                    var links = el.find('ul.'+o.options.tabsListClass+'>li>a');
                    el.trigger("showTab.accessibleTabs", [links.eq(index)]);
                    links.eq(index).click();
                });
            }
        },
        showAccessibleTabSelector: function(selector){
            debug('showAccessibleTabSelector');
            var el = $(selector);
            if(el){
                if(el.get(0).nodeName.toLowerCase() === 'a'){
                    el.click();
                }else{
                    debug('the selector of a showAccessibleTabSelector() call needs to point to a tabs headline!');
                }
            }
        }
    });
    // private Methods
    function debug(msg,info){
        if(debugMode && window.console && window.console.log){
            if(info){
                window.console.log(info+': ',msg);
            }else{
                window.console.log(msg);
            }
        }
    }
})(jQuery);

// S9Y-MERGE END jquery.tabs.js - 2014-06-25 12:28
// S9Y-MERGE START canvas-toBlob.js - 2014-06-25 12:28
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

(function(view) {
"use strict";
var
	  Uint8Array = view.Uint8Array
	, HTMLCanvasElement = view.HTMLCanvasElement
	, canvas_proto = HTMLCanvasElement && HTMLCanvasElement.prototype
	, is_base64_regex = /\s*;\s*base64\s*(?:;|$)/i
	, to_data_url = "toDataURL"
	, base64_ranks
	, decode_base64 = function(base64) {
		var
			  len = base64.length
			, buffer = new Uint8Array(len / 4 * 3 | 0)
			, i = 0
			, outptr = 0
			, last = [0, 0]
			, state = 0
			, save = 0
			, rank
			, code
			, undef
		;
		while (len--) {
			code = base64.charCodeAt(i++);
			rank = base64_ranks[code-43];
			if (rank !== 255 && rank !== undef) {
				last[1] = last[0];
				last[0] = code;
				save = (save << 6) | rank;
				state++;
				if (state === 4) {
					buffer[outptr++] = save >>> 16;
					if (last[1] !== 61 /* padding character */) {
						buffer[outptr++] = save >>> 8;
					}
					if (last[0] !== 61 /* padding character */) {
						buffer[outptr++] = save;
					}
					state = 0;
				}
			}
		}
		// 2/3 chance there's going to be some null bytes at the end, but that
		// doesn't really matter with most image formats.
		// If it somehow matters for you, truncate the buffer up outptr.
		return buffer;
	}
;
if (Uint8Array) {
	base64_ranks = new Uint8Array([
		  62, -1, -1, -1, 63, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1
		, -1, -1,  0, -1, -1, -1,  0,  1,  2,  3,  4,  5,  6,  7,  8,  9
		, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25
		, -1, -1, -1, -1, -1, -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35
		, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51
	]);
}
if (HTMLCanvasElement && !canvas_proto.toBlob) {
	canvas_proto.toBlob = function(callback, type /*, ...args*/) {
		  if (!type) {
			type = "image/png";
		} if (this.mozGetAsFile) {
			callback(this.mozGetAsFile("canvas", type));
			return;
		}
		var
			  args = Array.prototype.slice.call(arguments, 1)
			, dataURI = this[to_data_url].apply(this, args)
			, header_end = dataURI.indexOf(",")
			, data = dataURI.substring(header_end + 1)
			, is_base64 = is_base64_regex.test(dataURI.substring(0, header_end))
			, blob
		;
		if (Blob.fake) {
			// no reason to decode a data: URI that's just going to become a data URI again
			blob = new Blob
			if (is_base64) {
				blob.encoding = "base64";
			} else {
				blob.encoding = "URI";
			}
			blob.data = data;
			blob.size = data.length;
		} else if (Uint8Array) {
			if (is_base64) {
				blob = new Blob([decode_base64(data)], {type: type});
			} else {
				blob = new Blob([decodeURIComponent(data)], {type: type});
			}
		}
		callback(blob);
	};

	if (canvas_proto.toDataURLHD) {
		canvas_proto.toBlobHD = function() {
			to_data_url = "toDataURLHD";
			var blob = this.toBlob();
			to_data_url = "toDataURL";
			return blob;
		}
	} else {
		canvas_proto.toBlobHD = canvas_proto.toBlob;
	}
}
}(typeof self !== "undefined" && self || typeof window !== "undefined" && window || this.content || this));

// S9Y-MERGE END canvas-toBlob.js - 2014-06-25 12:28
// S9Y-MERGE START jquery.autoscroll.js - 2014-06-25 12:28
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
// S9Y-MERGE END jquery.autoscroll.js - 2014-06-25 12:28
// S9Y-MERGE START jquery.sortable.js - 2014-06-25 12:28
/* ===================================================
 *  jquery-sortable.js v0.9.10
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


!function ( $, window, undefined){
  var eventNames,
  pluginName = 'sortable',
  containerDefaults = {
    // If true, items can be dragged from this container
    drag: true,
    // If true, items can be droped onto this container
    drop: true,
    // Exclude items from being draggable, if the
    // selector matches the item
    exclude: "",
    // If true, search for nested containers within an item
    nested: true,
    // If true, the items are assumed to be arranged vertically
    vertical: true
  }, // end container defaults
  groupDefaults = {
    // This is executed after the placeholder has been moved.
    afterMove: function ($placeholder, container) {
    },
    // The css selector of the containers
    containerSelector: "ol, ul",
    // Distance the mouse has to travel to start dragging
    distance: 0,
    // The css selector of the drag handle
    handle: "",
    // The css selector of the items
    itemSelector: "li",
    // Check if the dragged item may be inside the container.
    // Use with care, since the search for a valid container entails a depth first search
    // and may be quite expensive.
    isValidTarget: function ($item, container) {
      return true
    },
    // Executed before onDrop if placeholder is detached.
    // This happens if pullPlaceholder is set to false and the drop occurs outside a container.
    onCancel: function ($item, container, _super) {
    },
    // Executed at the beginning of a mouse move event.
    // The Placeholder has not been moved yet.
    onDrag: function ($item, position, _super) {
      $item.css(position)
    },
    // Called after the drag has been started,
    // that is the mouse button is beeing held down and
    // the mouse is moving.
    // The container is the closest initialized container.
    // Therefore it might not be the container, that actually contains the item.
    onDragStart: function ($item, container, _super) {
      $item.css({
        height: $item.height(),
        width: $item.width()
      })
      $item.addClass("dragged")
      $("body").addClass("dragging")
    },
    // Called when the mouse button is beeing released
    onDrop: function ($item, container, _super) {
      $item.removeClass("dragged").removeAttr("style")
      $("body").removeClass("dragging")
    },
    // Called on mousedown.
    onMousedown: function($item, event, _super) {
      event.preventDefault()
    },
    // Template for the placeholder. Can be any valid jQuery input
    // e.g. a string, a DOM element
    placeholder: '<li class="placeholder"/>',
    // If true, the position of the placeholder is calculated on every mousemove.
    // If false, it is only calculated when the mouse is above a container.
    pullPlaceholder: true,
    // Specifies serialization of the container group.
    // The pair $parent/$children is either container/items or item/subcontainers.
    // Note that this default method only works, if every item only has one subcontainer
    serialize: function ($parent, $children, parentIsContainer) {
      var result = $.extend({}, $parent.data())
      
      if(parentIsContainer)
        return $children
      else if ($children[0]){
        result.children = $children
        delete result.subContainer
      }

      delete result.sortable

      return result
    },
    // Set tolerance while dragging. Positive values will decrease sensitivity.
    tolerance: 0
  }, // end group defaults
  containerGroups = {},
  groupCounter = 0

  if('ontouchstart' in window){
    eventNames = {
      start: "touchstart.sortable",
      end: "touchend.sortable touchcancel.sortable",
      move: "touchmove.sortable"
    }
  } else {
    eventNames = {
      start: "mousedown.sortable",
      end: "mouseup.sortable",
      move: "mousemove.sortable"
    }
  }

  /*
   * a is Array [left, right, top, bottom]
   * b is array [left, top]
   */
  function d(a,b) {
    var x = Math.max(0, a[0] - b[0], b[0] - a[1]),
    y = Math.max(0, a[2] - b[1], b[1] - a[3])
    return x+y;
  }

  function remove(array, from, to) {
    var rest = array.slice((to || from) + 1 || array.length);
    array.length = from < 0 ? array.length + from : from;
    return array.push.apply(array, rest);
  }

  function setDimensions(array, dimensions, useOffset) {
    var i = array.length,
    offsetMethod = useOffset ? "offset" : "position"
    while(i--){
      var el = array[i].el ? array[i].el : $(array[i]),
      // use fitting method
      pos = el[offsetMethod]()
      dimensions[i] = [
        pos.left,
        pos.left + el.outerWidth(true),
        pos.top,
        pos.top + el.outerHeight(true)
      ]
    }
  }

  function getRelativePosition(pointer, element) {
    var offset = element.offset()
    return {
      left: pointer.left - offset.left,
      top: pointer.top - offset.top
    }
  }

  function sortByDistanceDesc(dimensions, pointer, lastPointer) {
    pointer = [pointer.left, pointer.top]
    lastPointer = lastPointer && [lastPointer.left, lastPointer.top]

    var dim,
    i = dimensions.length,
    distances = []

    while(i--){
      dim = dimensions[i]
      distances[i] = [i,d(dim,pointer), lastPointer && d(dim, lastPointer)]
    }
    distances = distances.sort(function  (a,b) {
      return b[1] - a[1] || b[2] - a[2] || b[0] - a[0]
    })

    // last entry is the closest
    return distances
  }

  function processChildContainers(item, containerSelector, method, ignoreChildren) {
    var childContainers = item.find(containerSelector),
    i = childContainers.length

    while(i--){
      var container = childContainers.eq(i).data(pluginName)
      if(container)
        container[method](ignoreChildren)
    }

  }


  function ContainerGroup(options) {
    this.options = $.extend({}, groupDefaults, options)
    this.containers = []
    this.childGroups = []
    this.scrolledProxy = $.proxy(this.scrolled, this)
    this.dragProxy = $.proxy(this.drag, this)
    this.dropProxy = $.proxy(this.drop, this)

    if(this.options.parentGroup)
      this.options.parentGroup.childGroups.push(this)
    else {
      this.placeholder = $(this.options.placeholder)
      if(!options.isValidTarget)
        this.options.isValidTarget = undefined
    }
  }

  ContainerGroup.get = function  (options) {
    if( !containerGroups[options.group]) {
      if(!options.group)
        options.group = groupCounter ++
      containerGroups[options.group] = new ContainerGroup(options)
    }
    return containerGroups[options.group]
  }

  ContainerGroup.prototype = {
    dragInit: function  (e, itemContainer) {
      this.$document = $(itemContainer.el[0].ownerDocument)

      this.toggleListeners('on')

      // get item to drag
      this.item = $(e.target).closest(this.options.itemSelector)
      this.itemContainer = itemContainer

      this.setPointer(e)
      
      this.options.onMousedown(this.item, e, groupDefaults.onMousedown)
    },
    drag: function  (e) {
      if(!this.dragging){
        if(!this.distanceMet(e))
          return

        processChildContainers(this.item, this.options.containerSelector, "disable", true)

        this.options.onDragStart(this.item, this.itemContainer, groupDefaults.onDragStart)
        this.item.before(this.placeholder)
        this.dragging = true
      }

      this.setPointer(e)
      // place item under the cursor
      this.options.onDrag(this.item,
                          getRelativePosition(this.pointer, this.item.offsetParent()),
                          groupDefaults.onDrag)

      var x = e.pageX,
      y = e.pageY,
      box = this.sameResultBox,
      t = this.options.tolerance

      if(!box || box.top - t > y || box.bottom + t < y || box.left - t > x || box.right + t < x)
        if(!this.searchValidTarget())
          this.placeholder.detach()
    },
    drop: function  (e) {
      this.toggleListeners('off')

      if(this.dragging){
        // processing Drop, check if placeholder is detached
        if(this.placeholder.closest("html")[0])
          this.placeholder.before(this.item).detach()
        else
          this.options.onCancel(this.item, this.itemContainer, groupDefaults.onCancel)

        this.options.onDrop(this.item, this.getContainer(this.item), groupDefaults.onDrop)
        processChildContainers(this.item, this.options.containerSelector, "enable", true)

        // cleanup
        this.clearDimensions()
        this.clearOffsetParent()
        this.lastAppendedItem = this.sameResultBox = undefined
        this.dragging = false
      }
      
      this.item = undefined
    },
    searchValidTarget: function  (pointer, lastPointer) {
      if(!pointer){
        pointer = this.relativePointer || this.pointer
        lastPointer = this.lastRelativePointer || this.lastPointer
      }

      var distances = sortByDistanceDesc(this.getContainerDimensions(),
                                         pointer,
                                         lastPointer),
      i = distances.length

      while(i--){
        var index = distances[i][0],
        distance = distances[i][1]

        if(!distance || this.options.pullPlaceholder){
          var container = this.containers[index]
          if(!this.$getOffsetParent()){
            var offsetParent = container.getItemOffsetParent()
            pointer = getRelativePosition(pointer, offsetParent)
            lastPointer = getRelativePosition(lastPointer, offsetParent)
          }
          if(container.searchValidTarget(pointer, lastPointer))
            return true
        }
      }

    },
    movePlaceholder: function  (container, item, method, sameResultBox) {
      var lastAppendedItem = this.lastAppendedItem
      if(!sameResultBox && lastAppendedItem && lastAppendedItem[0] === item[0])
        return;

      item[method](this.placeholder)
      this.lastAppendedItem = item
      this.sameResultBox = sameResultBox
      this.options.afterMove(this.placeholder, container)
    },
    getContainerDimensions: function  () {
      if(!this.containerDimensions)
        setDimensions(this.containers, this.containerDimensions = [], !this.$getOffsetParent())
      return this.containerDimensions
    },
    getContainer: function  (element) {
      return element.closest(this.options.containerSelector).data(pluginName)
    },
    $getOffsetParent: function  () {
      if(this.offsetParent === undefined){
        var i = this.containers.length - 1,
        offsetParent = this.containers[i].getItemOffsetParent()

        if(!this.options.parentGroup){
          while(i--){
            if(offsetParent[0] != this.containers[i].getItemOffsetParent()[0]){
              // If every container has the same offset parent,
              // use position() which is relative to this parent,
              // otherwise use offset()
              // compare #setDimensions
              offsetParent = false
              break;
            }
          }
        }
        
        this.offsetParent = offsetParent
      }
      return this.offsetParent
    },
    clearOffsetParent: function () {
      this.offsetParent = undefined
    },
    setPointer: function (e) {
      var pointer = {
        left: e.pageX,
        top: e.pageY
      }

      if(this.$getOffsetParent()){
        var relativePointer = getRelativePosition(pointer, this.$getOffsetParent())
        this.lastRelativePointer = this.relativePointer
        this.relativePointer = relativePointer
      }

      this.lastPointer = this.pointer
      this.pointer = pointer
    },
    distanceMet: function (e) {
      return (Math.max(
 				Math.abs(this.pointer.left - e.pageX),
				Math.abs(this.pointer.top - e.pageY)
			) >= this.options.distance)
    },
    addContainer: function  (container) {
      this.containers.push(container);
    },
    removeContainer: function (container) {
      var i = $.inArray(container,this.containers);
      i!==-1 && remove(this.containers, i);
    },
    scrolled: function  (e) {
      this.clearDimensions()
      this.clearOffsetParent()
    },
    toggleListeners: function (method) {
      this.$document[method](eventNames.move, this.dragProxy)
      [method](eventNames.end, this.dropProxy)
      [method]("scroll.sortable", this.scrolledProxy)
    },
    // Recursively clear container and item dimensions
    clearDimensions: function  () {
      this.containerDimensions = undefined
      var i = this.containers.length
      while(i--){
        this.containers[i].itemDimensions = undefined
      }
      i = this.childGroups.length
      while(i--){
        this.childGroups[i].clearDimensions()
      }
    }
  }

  function Container(element, options) {
    this.el = element
    this.childGroups = []
    this.floatRight = false
    this.dragInitProxy = $.proxy(this.dragInit, this)
    this.options = $.extend( {}, containerDefaults, options)

    this.group = ContainerGroup.get(this.options)
    this.rootGroup = this.options.rootGroup = this.options.rootGroup || this.group
    this.parentGroup = this.options.parentGroup = this.options.parentGroup || this.group
    this.handle = this.rootGroup.options.handle || this.rootGroup.options.itemSelector

    this.enable(true)
  }

  Container.prototype = {
    dragInit: function  (e) {
      var rootGroup = this.rootGroup

      if( !rootGroup.item &&
          e.which === 1 &&
          this.options.drag &&
          !$(e.target).is(this.options.exclude))
        rootGroup.dragInit(e, this)
    },
    searchValidTarget: function  (pointer, lastPointer) {
      var distances = sortByDistanceDesc(this.getItemDimensions(),
                                         pointer,
                                         lastPointer),
      i = distances.length,
      rootGroup = this.rootGroup,
      validTarget = !rootGroup.options.isValidTarget ||
        rootGroup.options.isValidTarget(rootGroup.item, this)

      if(!i && validTarget){
        rootGroup.movePlaceholder(this, this.el, "append")
        return true
      } else
        while(i--){
          var index = distances[i][0],
          distance = distances[i][1]
          if(!distance && this.options.nested && this.getContainerGroup(index)){
            var found = this.getContainerGroup(index).searchValidTarget(pointer, lastPointer)
            if(found)
              return true
          }
          else if(validTarget){
            this.movePlaceholder(index, pointer)
            return true
          }
        }
    },
    movePlaceholder: function  (index, pointer) {
      var item = $(this.items[index]),
      dim = this.itemDimensions[index],
      method = "after",
      width = item.outerWidth(),
      height = item.outerHeight(),
      offset = item.offset(),
      sameResultBox = {
        left: offset.left,
        right: offset.left + width,
        top: offset.top,
        bottom: offset.top + height
      }
      if(this.options.vertical){
        var yCenter = (dim[2] + dim[3]) / 2,
        inUpperHalf = pointer.top <= yCenter
        if(inUpperHalf){
          method = "before"
          sameResultBox.bottom -= height / 2
        } else
          sameResultBox.top += height / 2
      } else {
        var xCenter = (dim[0] + dim[1]) / 2,
        inLeftHalf = pointer.left <= xCenter
        if(inLeftHalf != this.floatRight){
          method = "before"
          sameResultBox.right -= width / 2
        } else
          sameResultBox.left += width / 2
      }
      this.rootGroup.movePlaceholder(this, item, method, sameResultBox)
    },
    getItemDimensions: function  () {
      if(!this.itemDimensions){
        this.items = this.$getChildren(this.el, "item").filter(":not(.dragged)").get()
        setDimensions(this.items, this.itemDimensions = [])
      }
      return this.itemDimensions
    },
    getItemOffsetParent: function  () {
      var offsetParent,
      el = this.el
      // Since el might be empty we have to check el itself and
      // can not do something like el.children().first().offsetParent()
      if(el.css("position") === "relative" || el.css("position") === "absolute"  || el.css("position") === "fixed")
        offsetParent = el
      else
        offsetParent = el.offsetParent()
      return offsetParent
    },
    getContainerGroup: function  (index) {
      var childGroup = $.data(this.items[index], "subContainer")
      if( childGroup === undefined){
        var childContainers = this.$getChildren(this.items[index], "container")
        childGroup = false

        if(childContainers[0]){
          var options = $.extend({}, this.options, {
            parentGroup: this.group,
            group: groupCounter ++
          })
          childGroup = childContainers[pluginName](options).data(pluginName).group
        }
        $.data(this.items[index], "subContainer", childGroup)
      }
      return childGroup
    },
    $getChildren: function (parent, type) {
      return $(parent).children(this.rootGroup.options[type + "Selector"])
    },
    _serialize: function (parent, isContainer) {
      var that = this,
      childType = isContainer ? "item" : "container",
      
      children = this.$getChildren(parent, childType).not(this.options.exclude).map(function () {
        return that._serialize($(this), !isContainer)
      }).get()
      
      return this.rootGroup.options.serialize(parent, children, isContainer)
    }
  }

  var API = {
    enable: function  (ignoreChildren) {
      if(this.options.drop)
        this.group.addContainer(this)
      if(!ignoreChildren)
        processChildContainers(this.el, this.options.containerSelector, "enable", true)

      this.el.on(eventNames.start, this.handle, this.dragInitProxy)
    },
    disable: function  (ignoreChildren) {
      if(this.options.drop)
        this.group.removeContainer(this)
      if(!ignoreChildren)
        processChildContainers(this.el, this.options.containerSelector, "disable", true)

      this.el.off(eventNames.start)
    },
    serialize: function () {
      return this._serialize(this.el, true)
    }
  }

  $.extend(Container.prototype, API)
  
  /**
   * jQuery API
   *
   * Parameters are
   *   either options on init
   *   or a method name followed by arguments to pass to the method
   */
  $.fn[pluginName] = function(methodOrOptions) {
    var args = Array.prototype.slice.call(arguments, 1)

    return this.map(function(){
      var $t = $(this),
      object = $t.data(pluginName)

      if(object && API[methodOrOptions])
        return API[methodOrOptions].apply(object, args) || this
      else if(!object && (methodOrOptions === undefined ||
                          typeof methodOrOptions === "object"))
        $t.data(pluginName, new Container($t, methodOrOptions))

      return this
    });
  };

}(jQuery, window)
;
// S9Y-MERGE END jquery.sortable.js - 2014-06-25 12:28
// S9Y-MERGE START jquery.cookie.js - 2014-06-25 12:28
/*!
 * jQuery Cookie Plugin v1.4.0
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as anonymous module.
		define(['jquery'], factory);
	} else {
		// Browser globals.
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
		} catch(e) {
			return;
		}

		try {
			// If we can't parse the cookie, ignore it, it's unusable.
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write
		if (value !== undefined && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) !== undefined) {
			// Must not alter options, thus extending a fresh object...
			$.cookie(key, '', $.extend({}, options, { expires: -1 }));
			return true;
		}
		return false;
	};

}));

// S9Y-MERGE END jquery.cookie.js - 2014-06-25 12:28
// S9Y-MERGE START jquery.details.js - 2014-06-25 12:28
/*! http://mths.be/details v0.1.0 by @mathias | includes http://mths.be/noselect v1.0.3 */
;(function(document, $) {

	var proto = $.fn,
	    details,
	    // :'(
	    isOpera = Object.prototype.toString.call(window.opera) == '[object Opera]',
	    // Feature test for native `<details>` support
	    isDetailsSupported = (function(doc) {
	    	var el = doc.createElement('details'),
	    	    fake,
	    	    root,
	    	    diff;
	    	if (!('open' in el)) {
	    		return false;
	    	}
	    	root = doc.body || (function() {
	    		var de = doc.documentElement;
	    		fake = true;
	    		return de.insertBefore(doc.createElement('body'), de.firstElementChild || de.firstChild);
	    	}());
	    	el.innerHTML = '<summary>a</summary>b';
	    	el.style.display = 'block';
	    	root.appendChild(el);
	    	diff = el.offsetHeight;
	    	el.open = true;
	    	diff = diff != el.offsetHeight;
	    	root.removeChild(el);
	    	if (fake) {
	    		root.parentNode.removeChild(root);
	    	}
	    	return diff;
	    }(document)),
	    toggleOpen = function($details, $detailsSummary, $detailsNotSummary, toggle) {
	    	var isOpen = $details.prop('open'),
	    	    close = isOpen && toggle || !isOpen && !toggle;
	    	if (close) {
	    		$details.removeClass('open').prop('open', false).triggerHandler('close.details');
	    		$detailsSummary.attr('aria-expanded', false);
	    		$detailsNotSummary.hide();
	    	} else {
	    		$details.addClass('open').prop('open', true).triggerHandler('open.details');
	    		$detailsSummary.attr('aria-expanded', true);
	    		$detailsNotSummary.show();
	    	}
	    };

	/* http://mths.be/noselect v1.0.3 */
	proto.noSelect = function() {

		// Since the string 'none' is used three times, storing it in a variable gives better results after minification
		var none = 'none';

		// onselectstart and ondragstart for WebKit & IE
		// onmousedown for WebKit & Opera
		return this.bind('selectstart dragstart mousedown', function() {
			return false;
		}).css({
			'MozUserSelect': none,
			'msUserSelect': none,
			'webkitUserSelect': none,
			'userSelect': none
		});

	};

	// Execute the fallback only if there’s no native `details` support
	if (isDetailsSupported) {

		details = proto.details = function() {

			return this.each(function() {
				var $details = $(this),
				    $summary = $('summary', $details).first();
				$summary.attr({
					'role': 'button',
					'aria-expanded': $details.prop('open')
				}).on('click', function() {
					// the value of the `open` property is the old value
					var close = $details.prop('open');
					$summary.attr('aria-expanded', !close);
					$details.triggerHandler((close ? 'close' : 'open') + '.details');
				});
			});

		};

		details.support = isDetailsSupported;

	} else {

		details = proto.details = function() {

			// Loop through all `details` elements
			return this.each(function() {

				// Store a reference to the current `details` element in a variable
				var $details = $(this),
				    // Store a reference to the `summary` element of the current `details` element (if any) in a variable
				    $detailsSummary = $('summary', $details).first(),
				    // Do the same for the info within the `details` element
				    $detailsNotSummary = $details.children(':not(summary)'),
				    // This will be used later to look for direct child text nodes
				    $detailsNotSummaryContents = $details.contents(':not(summary)');

				// If there is no `summary` in the current `details` element…
				if (!$detailsSummary.length) {
					// …create one with default text
					$detailsSummary = $('<summary>').text('Details').prependTo($details);
				}

				// Look for direct child text nodes
				if ($detailsNotSummary.length != $detailsNotSummaryContents.length) {
					// Wrap child text nodes in a `span` element
					$detailsNotSummaryContents.filter(function() {
						// Only keep the node in the collection if it’s a text node containing more than only whitespace
						// http://www.whatwg.org/specs/web-apps/current-work/multipage/common-microsyntaxes.html#space-character
						return this.nodeType == 3 && /[^ \t\n\f\r]/.test(this.data);
					}).wrap('<span>');
					// There are now no direct child text nodes anymore — they’re wrapped in `span` elements
					$detailsNotSummary = $details.children(':not(summary)');
				}

				// Hide content unless there’s an `open` attribute
				$details.prop('open', typeof $details.attr('open') == 'string');
				toggleOpen($details, $detailsSummary, $detailsNotSummary);

				// Add `role=button` and set the `tabindex` of the `summary` element to `0` to make it keyboard accessible
				$detailsSummary.attr('role', 'button').noSelect().prop('tabIndex', 0).on('click', function() {
					// Focus on the `summary` element
					$detailsSummary.focus();
					// Toggle the `open` and `aria-expanded` attributes and the `open` property of the `details` element and display the additional info
					toggleOpen($details, $detailsSummary, $detailsNotSummary, true);
				}).keyup(function(event) {
					if (32 == event.keyCode || (13 == event.keyCode && !isOpera)) {
						// Space or Enter is pressed — trigger the `click` event on the `summary` element
						// Opera already seems to trigger the `click` event when Enter is pressed
						event.preventDefault();
						$detailsSummary.click();
					}
				});

			});

		};

		details.support = isDetailsSupported;

	}

}(document, jQuery));
// S9Y-MERGE END jquery.details.js - 2014-06-25 12:28
// S9Y-MERGE START accessifyhtml5.js - 2014-06-25 12:28
/*
 * Accessifyhtml5.js
 *
 * Source: https://github.com/yatil/accessifyhtml5.js
 */

var AccessifyHTML5 = function (defaults, more_fixes) {

  "use strict";

  var fixes = {
      'article'   :    {'role':          'article'       },
      'aside'     :    {'role':          'complementary' },
      'nav'       :    {'role':          'navigation'    },
      'main'      :    {'role':          'main'          },
      'output'    :    {'aria-live':     'polite'        },
      'section'   :    {'role':          'region'        },
      '[required]':    {'aria-required': 'true'          }
  },
  result = { ok:[], warn:[], fail:[] },
  error = result.fail,
  fix, elems, attr, value, key, obj, i, mo, by_match, el_label,
  ATTR_SECURE = new RegExp("aria-[a-z]+|role|tabindex|title|alt|data-[\\w-]+|lang|"
    + "style|maxlength|placeholder|pattern|required|type|target|accesskey|longdesc"),
  ID_PREFIX = "acfy-id-",
  n_label = 0,
  Doc = document;

  if (Doc.querySelectorAll) {

    if (defaults) {
      if (defaults.header) {
        fixes[defaults.header] = {
          'role': 'banner'
        };
      }
      if (defaults.footer) {
        fixes[defaults.footer] = {
          'role': 'contentinfo'
        };
      }
      if (defaults.main) {
        fixes[defaults.main] = {
          'role': 'main'
        };
        fixes.main = {
          'role': ''
        };
      }
    }

    // Either replace fixes...
    if (more_fixes && more_fixes._CONFIG_
        && more_fixes._CONFIG_.ignore_defaults) {
      fixes = more_fixes;
    } else {
      // ..Or concatenate - the default.
      for (mo in more_fixes) {
        fixes[mo] = more_fixes[mo];
      }
    }

    for (fix in fixes) {

      if (fix.match(/^_(CONFIG|[A-Z]+)_/)) {
        continue;  // Silently ignore.
      }

      if (fixes.hasOwnProperty(fix)) {

        //Question: should we catch and report (or ignore) bad selector syntax?
        try {
          elems = Doc.querySelectorAll(fix);
        } catch (ex) {
          error.push({ sel:fix, attr:null, val:null,
            msg:"Invalid syntax for `document.querySelectorAll` function", ex:ex });
        }
        obj = fixes[fix];

        if (!elems || elems.length < 1) {
          result.warn.push({ sel:fix, attr:null, val:null, msg:"Not found" });
        }

        for (i = 0; i < elems.length; i++) {

          for (key in obj) {
            if (obj.hasOwnProperty(key)) {

              attr = key;
              value = obj[key];

              if (attr.match(/_?note/)) { // Ignore notes/comments.
                continue;
              }

              if (!attr.match(ATTR_SECURE)) {
                error.push({ sel:fix, attr:attr, val:null, msg:"Attribute not allowed",
                    re:ATTR_SECURE });
                continue;
              }
              if (!(typeof value).match(/string|number|boolean/)) {
                error.push({ sel:fix, attr:attr, val:value, msg:"Value-type not allowed" });
                continue;
              }

              // Connect up 'aria-labelledby'. //Question: do we accept poor spelling/ variations?
              by_match = attr.match(/(describ|label)l?edby/);
              if (by_match) {
                try {
                  el_label = Doc.querySelector(value); //Not: elems[i].querySel()
                } catch (ex) {
                  error.push({ sel:fix, attr:attr, val:value,
                    msg:"Invalid selector syntax (2) - see 'val'", ex:ex });
                }

                if (! el_label) {
                  error.push({ sel:fix, attr:attr, val:value,
                      msg:"Labelledby ref not found - see 'val'" });
                  continue;
                }

                if (! el_label.id) {
                  el_label.id = ID_PREFIX + n_label;
                }

                value = el_label.id;
                attr = "aria-" + ("label" === by_match[1] ? "labelledby" : "describedby");

                n_label++;
              }

              if (!elems[i].hasAttribute(attr)) {
                elems[i].setAttribute(attr, value);

                result.ok.push({ sel:fix, attr:attr, val:value, msg:"Added" });
              }
              else {
                result.warn.push({ sel:fix, attr:attr, val:value, msg:"Already present, skipped" });
              }
            }
          }

        } //End: for (i..elems..i++)

      }
    } //End: for (fix in fixes)
  }
  result.input = fixes;

  return result;
};

// S9Y-MERGE END accessifyhtml5.js - 2014-06-25 12:28
