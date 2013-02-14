(function($) {
    // https://github.com/yatil/accessifyhtml5.js
    var AccessifyHTML5 = function (defaults) {
        var fixes = {
            'article'       : { 'role':          'article'       },
            'aside'         : { 'role':          'complementary' },
            'nav'           : { 'role':          'navigation'    },
            'output'        : { 'aria-live':     'polite'        },
            'section'       : { 'role':          'region'        },
            '[required]'    : { 'aria-required': 'true'          }
        };

        if (defaults) {
            if (defaults.header) {
                fixes[defaults.header] = {
                    'role': 'banner'
                };
            }
            if (defaults.footer) {
                fixes[defaults.footer] = {
                    'role': 'contentinfo'
                }
            }
            if (defaults.main) {
                fixes[defaults.main] = {
                    'role': 'main'
                }
            }
        }

        $.each(fixes,
            function(index, item) {
                $(index).attr(item);
            }
        );
    };

    AccessifyHTML5({
        header: '#top>div>div',
        main:   '#main',
        footer: '#meta'
    });
})(jQuery);
