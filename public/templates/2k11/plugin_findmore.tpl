<ul class="serendipity_findmore clearfix">
{if NOT $findmore_disabled_services.twitter}
    <li><a rel="nofollow" href="http://twitter.com/intent/tweet?text={$entrydata.title|escape}%20-%20{$entrydata.url|escape:'url'}"><img src="{$entrydata.path}twitter.png" alt="Twitter"></a></li>
{/if}
{if NOT $findmore_disabled_services.delicious}
    <li><a rel="nofollow" href="http://del.icio.us/post?url={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}delicious.png" alt="Bookmark {$entrydata.title|escape} at del.icio.us"></a></li>
{/if}
{if NOT $findmore_disabled_services.facebook}
    <li><a rel="nofollow" href="http://www.facebook.com/share.php?u={$entrydata.url|escape:'url'}&amp;t={$entrydata.title|escape}"><img src="{$entrydata.path}facebook.png" alt="Facebook"></a></li>
{/if}
{if NOT $findmore_disabled_services.google}
    <li><a rel="nofollow" href="http://www.google.com/bookmarks/mark?op=edit&amp;bkmk={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape}"><img src="{$entrydata.path}googlebookmark.png" alt="Google Bookmarks"></a></li>
{/if}
{if NOT $findmore_disabled_services.friendfeed}
    <li><a rel="nofollow" href="http://www.friendfeed.com/share?title={$entrydata.title|escape}&amp;link={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}friendfeed.png" alt="FriendFeed"></a></li>
{/if}
{if NOT $findmore_disabled_services.digg}
    <li><a rel="nofollow" href="http://digg.com/submit?phase=2&amp;url={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}diggman.png" alt="Digg {$entrydata.title|escape}"></a></li>
{/if}
{if NOT $findmore_disabled_services.mixx}
    <li><a rel="nofollow" href="http://www.mixx.com/submit?page_url={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}mixx-button4.png" alt="Mixx {$entrydata.title|escape}"></a></li>
{/if}
{if NOT $findmore_disabled_services.bloglines}
    <li><a rel="nofollow" href="http://www.bloglines.com/citations?url={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}bloglines.png" alt="Bloglines {$entrydata.title|escape}"></a></li>
{/if}
{if NOT $findmore_disabled_services.technorati}
    <li><a rel="nofollow" href="http://technorati.com/search/{$entrydata.url|escape:'url'}" title="Technorati {$entrydata.title|escape}"><img src="{$entrydata.path}technorati.png" alt="Technorati {$entrydata.title|escape}"></a></li>
{/if}
{if NOT $findmore_disabled_services.fark}
    <li><a rel="nofollow" href="http://cgi.fark.com/cgi/fark/edit.pl?new_url={$entrydata.url|escape:'url'}&amp;new_comment={$entrydata.title|escape:'url'}&amp;new_link_other=&amp;linktype=Misc"><img src="{$entrydata.path}fark.png" alt="Fark this: {$entrydata.title|escape}"></a></li>
{/if}
{if NOT $findmore_disabled_services.yahoo}
    <li><a rel="nofollow" href="http://myweb2.search.yahoo.com/myresults/bookmarklet?t={$entrydata.title|escape:'url'}&amp;u={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}yahoomyweb.png" alt="Bookmark {$entrydata.title|escape} at YahooMyWeb"></a></li>
{/if}
{if NOT $findmore_disabled_services.furl}
    <li><a rel="nofollow" href="http://www.furl.net/storeIt.jsp?t={$entrydata.title|escape:'url'}&amp;u={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}furl.png" alt="Bookmark {$entrydata.title|escape} at Furl.net"></a></li>
{/if}
{if NOT $findmore_disabled_services.reddit}
    <li><a rel="nofollow" href="http://reddit.com/submit?url={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}reddit.png" alt="Bookmark {$entrydata.title|escape} at reddit.com"></a></li>
{/if}
{if NOT $findmore_disabled_services.blinklist}
    <li><a rel="nofollow" href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&amp;Description=&amp;Url={$entrydata.url|escape:'url'}&amp;Title={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}blinklist.png" alt="Bookmark {$entrydata.title|escape} at blinklist.com"></a></li>
{/if}
{if NOT $findmore_disabled_services.spurl}
    <li><a rel="nofollow" href="http://www.spurl.net/spurl.php?title={$entrydata.title|escape:'url'}&amp;url={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}spurl.png" alt="Bookmark {$entrydata.title|escape} at Spurl.net"></a></li>
{/if}
{if NOT $findmore_disabled_services.newsvine}
    <li><a rel="nofollow" href="http://www.newsvine.com/_tools/seed&amp;save?u={$entrydata.url|escape:'url'}&amp;h={$entrydata.title|escape:'url'}" title="Bookmark {$entrydata.title|escape} at NewsVine"><img src="{$entrydata.path}newsvine.png" alt="Bookmark {$entrydata.title|escape} at NewsVine"></a></li>
{/if}
{if NOT $findmore_disabled_services.simpy}
    <li><a rel="nofollow" href="http://www.simpy.com/simpy/LinkAdd.do?href={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}simpy.png" alt="Bookmark {$entrydata.title|escape} at Simpy.com"></a></li>
{/if}
{if NOT $findmore_disabled_services.blogmarks}
    <li><a rel="nofollow" href="http://blogmarks.net/my/new.php?mini=1&amp;simple=1&amp;url={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}blogmarks.png" alt="Bookmark {$entrydata.title|escape} at blogmarks"></a></li>
{/if}
{if NOT $findmore_disabled_services.wists}
    <li><a rel="nofollow" href="http://wists.com/r.php?c=&amp;r={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}wists.png" alt="Bookmark {$entrydata.title|escape} with wists"></a></li>
{/if}
{if NOT $findmore_disabled_services.misterwong}
    <li><a rel="nofollow" href="http://www.mister-wong.de/index.php?action=addurl&amp;bm_url={$entrydata.url|escape:'url'}&amp;bm_description={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}wong18.gif" alt="wong it!"></a></li>
{/if}
{if NOT $findmore_disabled_services.addthis}
    <li><a rel="nofollow" href="http://www.addthis.com/bookmark.php?pub=&amp;url={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}"><img src="{$entrydata.path}button0-bm.gif" alt="Bookmark using any bookmark manager!"></a></li>
{/if}
{if NOT $findmore_disabled_services.stumbleupon}
    <li><a rel="nofollow" href="http://www.stumbleupon.com/submit?url={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}stumbleupon.gif" alt="Stumble It!"></a></li>
{/if}
{if NOT $findmore_disabled_services.printthis}
    <li><a rel="nofollow" href="http://www.printfriendly.com/print?url={$entrydata.url|escape:'url'}"><img src="{$entrydata.path}printfriendly.png" alt="Print this article!"></a></li>
{/if}
{if NOT $findmore_disabled_services.tellafriend}
    <li><a rel="nofollow" href="mailto:?subject={$entrydata.title|escape}&amp;body={$entrydata.url|escape:'url'}';"><img src="{$entrydata.path}email_link.png" alt="E-mail this story to a friend!"></a></li>
{/if}
{if NOT $findmore_disabled_services.identica}
    <li><a rel="nofollow" href="http://identi.ca/notice/new?status_textarea={$entrydata.title|escape:'url'}%20-%20{$entrydata.url|escape:'url'}"><img src="{$entrydata.path}identica.png" alt="Identi.ca"></a></li>
{/if}
</ul>
{if NOT $findmore_disabled_services.facebook OR NOT $findmore_disabled_services.gplus OR NOT $findmore_disabled_services.spreadly}
<ul class="serendipity_findmore_like clearfix">
{if NOT $findmore_disabled_services.facebook}
    <li class="facebook_like findmore_like_button">
    {if $findmore_lazyload}
        <script>
            var fb_like = '<iframe src="http://www.facebook.com/plugins/like.php?href={$entrydata.url|escape:'url'}&amp;layout=standard&amp;show-faces=true&amp;width=300&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:300px; height:30px"></iframe>';
            insertLazyLoadButton(fb_like, "facebook", '{$entrydata.path}', '{$findmore_lazyload_text}');
        </script>
    {else}
        <iframe src="http://www.facebook.com/plugins/like.php?href={$entrydata.url|escape:'url'}&amp;layout=standard&amp;show-faces=true&amp;width=300&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100%; height:30px"></iframe>
    {/if}
    </li>
{/if}
{if NOT $findmore_disabled_services.plusone}
    <li class="google_like findmore_like_button">
    {if $findmore_lazyload}
        <script>
            var gplus_like = '<div class="gplus_like"><div class="g-plusone" data-size="medium" data-href="{$entrydata.url}"></div>{literal}<script type="text/javascript">window.___gcfg = {lang: "en"}; (function() { var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "https://apis.google.com/js/plusone.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })(); <\/script></div>';
            {/literal}
            insertLazyLoadButton(gplus_like, "gplus", '{$entrydata.path}', '{$findmore_lazyload_text}');
        </script>
    {else}
        <g:plusone annotation="none" href="{$entrydata.url}"></g:plusone>
    {/if}
    </li>
{/if}
{if NOT $findmore_disabled_services.spreadly}
    <li class="spreadly_like findmore_like_button">
    {if $findmore_lazyload}
        <a href="http://spread.ly/?url={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}&amp;tags={$entrydata.properties.freetag_tagList|escape:'url'}&amp;social={if $findmore_spreadly_social}1{else}0{/if}" rel="like"><img src="http://spread.ly/img/like-button.jpg" alt="Like"></a>
    {else}
        <iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" style="overflow: hidden; width: 100px; height: {if $findmore_spreadly_social}24px;{else}24px{/if}" src="http://button.spread.ly/?url={$entrydata.url|escape:'url'}&amp;title={$entrydata.title|escape:'url'}&amp;tags={$entrydata.properties.freetag_tagList|escape:'url'}&amp;social={if $findmore_spreadly_social}1{else}0{/if}" allowtransparency="true"></iframe>
    {/if}
    </li>
{/if}
</ul>
{/if}
