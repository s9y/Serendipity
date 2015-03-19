        // enable properties with removing #cache#
        #cache# $this->setCacheDir($serendipity['serendipityPath'] . 'cache');

        #cache# $this->caching         = true;  // $this->setCaching(true); 
        /*
            Caching is disabled, as long as we haven't figured out on how to use it best here....

            Note: rodneyrehm
            A cache_id is (ideally) supposed to identify a single page.
            md5(REQUEST_URI) may _seem_ to be doing that, but /foo.html and /foo.html?foo=bar are the same resource
            from S9Y's point of view - with DIFFERENT REQUEST_URIs. Your approach leads to a number of problems:
                * flooding the cache space with duplicate content
                * essentially making clearCache() useless, as md5 checksums of /foo.html and /foo.html?foo=bar have
            exactly nothing in common.
            You want to specify the pieces of cachable content yourself. Go with a structure like
                post-123
                post-123|comments (if you have a page for all comments belonging to that post)
                post-123|comments|feed (if you have a comment feed for a certain post)
            now you can clearCache('post-123') and comments and comments|feed are killed as well.
        */

        /*
        // APC and MEMCACHE are loaded from this libs plugins folder,
        // but you need to have enabled caching by $smarty->caching = true (see Rodneys upper template structure note),
        // which makes clear why we can't use Smarty caching currently with S9y

        // enable for APC in-memory (RAM) storage caching - must be enabled in PHP
        if(APC_EXTENSION_LOADED && !$serendipity['disable_apc']) {
            $this->addPluginsDir ( SMARTY_DIR . 'plugins/' );
            $this->caching_type = 'apc'; //$this->setCachingType ( 'apc' );
        }
        // enable for MEMCACHE storage caching - must be enabled in PHP
        if(MEMCACHE_EXTENSION_LOADED && !$serendipity['disable_memcache']) {
            $this->addPluginsDir ( SMARTY_DIR . 'plugins/' );
            $this->caching_type = 'memcache'; //$this->setCachingType ( 'memcache' );
        }
        */

        // does set cache also need to be set to true?
        #cache# $this->cache_modified_check = true; // to be used with display() method only, must be true to enable 304 headers

        /*
            Note: rodneyrehm
            $cache_modified_check only works if you're using display() - it won't do anything on fetch().
            It won't do anything if you have non-caching plugins or {insert} tags, either.

            We're working on making this more intelligent for 3.2, but? work with what you've got in 3.1 first.
        */

        // some documentary from the smarty forum
        /*
            With Smarty::CACHING_LIFETIME_SAVED the expiration date is written into the cached file.
            So each cache_id / compile_id combination may have their own cache lifetime.
            The point is simply, that once the cache lifetime (expiration date) has been saved to the cache file,
            it cannot be altered except for clearing and regenerating said cache file

            Template Inheritance
            Using is_cached() on sub-templates has to set up caching before is_cached() calls,
                e.g if (!$smarty->isCached('sub_test.tpl')) { $smarty->assign('foo', $foo); }.
            The subtemplate will always be cached as specified in the {include} tag.
            Otherwise you could never cache a subtemplate with caching disabled for the main template.
            If you don't want to have the main template cached, turn caching off again after the is_cached() calls for the subtemplate.
            So the example will cache sub_test.tpl, but not test.tpl
            Using is_cached() on subtemplates has to set up caching before is_cached() calls.
            The subtemplate will always be cached as specified in the {include} tag.
            Otherwise you could never cache a subtemplate with caching disabled for the main template.
            If you don't want to have the main template cached, turn caching off again after the is_cached() calls for the subtemplate.
            So the example will cache sub_test.tpl but not test.tpl
            Use $smarty->caching = Smarty::CACHING_LIFETIME_SAVED; with {include file="sub_test.tpl" cache_lifetime="120"} in test.tpl;
            Use $smarty->caching = Smarty::CACHING_LIFETIME_CURRENT; with {include .... caching}
        */

        #cache# $this->caching = Smarty::CACHING_LIFETIME_CURRENT; // $this->setCaching(2); // 1 will change the end of lifetime immediately.
            # $this->caching = Smarty::CACHING_LIFETIME_SAVED;     // $this->setCaching(Smarty::CACHING_LIFETIME_SAVED);
            # $this->caching = Smarty::CACHING_OFF;                // $this->setCaching(Smarty::CACHING_OFF) // stop caching >= 3.1.4

        /*
            Note: rodneyrehm
            The CACHING_LIFETIME_SAVED option is something you only really "need" if many cache files have different lifetimes.
            I've used Smarty intensively over the past years and I _never_ required LIFETIME_SAVED...

            you can do $force_cache = true; to make the current page re-render to cache. This actually allows you to work with a very high
            cache_lifetime and poll a secondary modified time from somewhere. You could then implement the serve-stale-until-updated caching approach.
            I'll blog about this? probably around christmas
        */

        // set the cache_lifetime for index.tpl to 5 minutes
        #cache# $this->cache_lifetime = 300; // $this->setCacheLifetime(300); // 86400; // one day: 60*60*24

        //  some documentary from the smarty forum
        /*
            Smarty caching is based purely on the fetch() or display() call. So:
            $smarty->fetch('application.tpl');
            Will generate a cached output and use that on repeated calls. If you have multiple versions of this call, you need to pass a cache_id. Example:
            $cache_id = md5($_SERVER['REQUEST_URI']);
            $smarty->fetch('application.tpl',$cache_id);
            It is entirely up to you what is taken into account for the cache_id (URL, etc.)
        */

        // does this mean $this->setCacheId($id); is useless here and has to be set where the actual templates are called? or does ist work as something default?
        /*
            Note: rodneyrehm
            when fetch(tpl) is called, Smarty::$cache_id is injected. If you need a single cache_id for the whole render complex, this may be the sane thing to do.
            But you'll probably segment certain content. A Post does not have to be reendered for every new comment. It thus makes sense to separate these entities
            into their own cache spaces. In turn they'd probably receive their own cache_ids. Although that is not _necessary_ as template_name and cache_id work in
            conjunction. If both are supplied (to say clearCache()) template_name increases the specificity of cache_id, so only those items are purged that meet
            both criteria.
        */

        // some documentary from the smarty forum
        /*
            Smarty will use the cache_id for distributing the cache files into sub_dirs
            A cache id is used if you cache different output generated by the same template as for example on a product page.
            In such a case you should use a product id as cache id.
            $this->cache_id($id); // $this->setCacheId($id);
        */

        #cache# $this->cache_id = md5($_SERVER['REQUEST_URI']); // this isn't a good idea either, better have it disabled or use a special id
        /*
            Note: Ian
            What kind of Serendipity ID could this be?
            - see Rodneys first caching note
        */

