(function($) {
    // Source: https://github.com/yatil/accessifyhtml5.js
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
      fix, elems, attr, value, key, obj, i, mo, by_match, el_label,
      ATTR_SECURE = /aria-[a-z]+|role|tabindex|title|alt|data-[\w\-]+|lang|style|maxlength|placeholder|pattern|type/,
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

        for (mo in more_fixes) {
          fixes[mo] = more_fixes[mo];
        }

        for (fix in fixes) {
          if (fixes.hasOwnProperty(fix)) {

            elems = Doc.querySelectorAll(fix);
            obj = fixes[fix];

            for (i = 0; i < elems.length; i++) {

              for (key in obj) {
                if (obj.hasOwnProperty(key)) {

                  attr = key;
                  value = obj[key];

                  if (!attr.match(ATTR_SECURE)) {
                    continue;
                  }
                  if (!(typeof value).match(/string|number/)) {
                    continue;
                  }

                  by_match = attr.match(/(describ|label)l?edby/);
                  if (by_match) {
                    el_label = Doc.querySelector(value);

                    if (! el_label) { continue; }

                    if (! el_label.id) {
                      el_label.id = ID_PREFIX + n_label;
                    }

                    value = el_label.id;
                    attr = "aria-" + ("label" === by_match[1] ? "labelledby" : "describedby");

                    n_label++;
                  }

                  if (!elems[i].hasAttribute(attr)) {
                    elems[i].setAttribute(attr, value);
                  }
                }
              }
            }
          }
        }
      }
    };

    // Accessibility helper script
    AccessifyHTML5({
        header: '#top>div>div',
        footer: '#meta'
    });

    // Wait until content including images is loaded
    $(window).load(function() {
        // Equal Heights
        var $eqHeights = $('body').has('.equal_heights');

        if($eqHeights.size() > 0) {
            $('.equal_heights').syncHeight({
                updateOnResize: true
            });
        }
    });
})(jQuery);
