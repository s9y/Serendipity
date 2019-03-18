<article id="staticpage_{$staticpage_pagetitle|@makeFilename}" class="serendipity_staticpage{if $staticpage_articleformat} post serendipity_entry{/if}">
    <header>
        <h3>{if $staticpage_articleformat}{if $staticpage_articleformattitle}{$staticpage_articleformattitle|@escape}{else}{$staticpage_pagetitle}{/if}{else}{if $staticpage_headline}{$staticpage_headline|@escape}{else}{$staticpage_pagetitle}{/if}{/if}</h3>
        {if $staticpage_show_breadcrumb}
            <div class="staticpage_breadcrumbs">
                <a href="{$serendipityBaseURL}" title="{$CONST.HOMEPAGE}">{$blogTitle}</a>
                {foreach name="crumbs" from=$staticpage_navigation.crumbs item="crumb"}
                    &nbsp;/&nbsp; {if !$smarty.foreach.crumbs.last}<a href="{$crumb.link}">{$crumb.name|@escape}</a>{else}{$crumb.name|@escape}{/if}
                {/foreach}
            </div>
        {/if}        
    </header>
    {if $staticpage_pass AND $staticpage_form_pass != $staticpage_pass}
        <form class="staticpage_password_form" action="{$staticpage_form_url}" method="post">
            <fieldset>
                <legend>{$CONST.STATICPAGE_PASSWORD_NOTICE}</legend>
                <input name="serendipity[pass]" type="password" value="">
                <input name="submit" type="submit" value="{$CONST.GO}" >
            </fieldset>
        </form>
    {else}
        <section id="entry">
            {if $staticpage_precontent}
                <div class="serendipity_preface">
                    {$staticpage_precontent}
                </div>
            {/if}
            {if $staticpage_show_childpages && is_array($staticpage_childpages)}
                <nav>
                    <ul class="staticpage_childpages">
                        {foreach from=$staticpage_childpages item="childpage"}
                            <li><a href="{$childpage.permalink|@escape}" title="{$childpage.pagetitle|@escape}">{$childpage.pagetitle|@escape}</a></li>
                        {/foreach}
                    </ul>
                </nav>
            {/if} 
{* CUSTOM TO THIS THEME - CUSTOM STATICPAGE IMAGE *}  
            {if $staticpage_custom.staticpage_image}
                {if $staticpage_custom.staticpage_image|is_in_string:'<iframe,<embed,<object'}{* we assume this is a video, just emit the contents of the var *}
                    {$staticpage_custom.staticpage_image}
                {else}
                    {serendipity_getImageSize file=$staticpage_custom.staticpage_image assign="img_size"}
                    <img class="{if $img_size[0]>=800}image-full-width{else}serendipity_image_left{/if}" src="{$staticpage_custom.staticpage_image}" width="{$img_size[0]}" height="{$img_size[1]}" alt=""/>
                {/if}                  
            {/if}            
            {if $staticpage_content}
                <div class="{if $staticpage_articleformat}serendipity_entry_body clearfix{else}staticpage_content{/if}">
                    {$staticpage_content}
                </div>
            {/if}
        </section>
    {/if}
    {if $staticpage_navigation && $staticpage_shownavi && ($staticpage_navigation.prev.link || $staticpage_navigation.next.link)}
        <nav>
            <ul class="pager staticpage_navigation">
              {if $staticpage_navigation.prev.link}<li class="previous"><a href="{$staticpage_navigation.prev.link}" title="prev"><i class="fas fa-arrow-left" aria-hidden="true"></i>  {$staticpage_navigation.prev.name|@escape}</a></li>{/if}
              {if $staticpage_navigation.next.link}<li class="next"><a href="{$staticpage_navigation.next.link}" title="next">{$staticpage_navigation.next.name|@escape} <i class="fas fa-arrow-right" aria-hidden="true"></i></a></li>{/if}
            </ul>
        </nav>
    {/if}    
    {if $staticpage_custom.show_author =='true' || $staticpage_custom.show_date =='true' || ($staticpage_adminlink && $staticpage_adminlink.page_user)}
        <footer class="staticpage-footer">
            <p class="post-meta">           
                {if $staticpage_custom.show_author =='true'}{$CONST.POSTED_BY} {$staticpage_author|@escape}{/if}{if $staticpage_custom.show_date =='true'}{if $staticpage_custom.show_author =='true'} {$CONST.ON} {/if}<time datetime="{$staticpage_lastchange|@serendipity_html5time}">{$staticpage_lastchange|@formatTime:$template_option.date_format}</time>{/if}{if $staticpage_adminlink AND $staticpage_adminlink.page_user}{if $staticpage_custom.show_author =='true' || $staticpage_custom.show_date =='true'}&nbsp;&nbsp;{/if}<a href="{$staticpage_adminlink.link_edit}"  title="{$staticpage_adminlink.link_name|@escape}"><button class="btn btn-sm btn-default btn-theme"><i class="fas fa-lg fa-edit"></i><span class="sr-only">{$staticpage_adminlink.link_name|@escape}</span></button></a>{/if}                
            </p>
        </footer>
    {/if}
</article>