{serendipity_hookPlugin hook="entries_header"}
<article class="archive">
    {if $template_option.categories_on_archive || $template_option.tags_on_archive}
        <div class="row"> 
            {if $template_option.categories_on_archive}
                <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">      
                    {serendipity_showPlugin class="serendipity_plugin_categories" template="archive_categories.tpl"}
                </section>
            {/if}
            {if $template_option.tags_on_archive}
                <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">      
                    {serendipity_showPlugin class="serendipity_plugin_freetag" template="archive_freetag.tpl"}
                </section>
            {/if}
        </div>
    {/if}
    <h2>{if $category}{$category_info.category_name} - {/if}{$CONST.ARCHIVES}</h2>
    {foreach from=$archives item="archive"}
        <section class="archives_year">
            <div class="container-fluid">
                <div class="row archive-year">                 
                    <h3>{$archive.year}</h3>
                    {foreach from=$archive.months item="month"}
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            {if $template_option.entrybody_detailed_only==true}
                                {if $month.entry_count}
                                    <a class="btn btn-default archive-button" href="{$month.link}" title="{$CONST.VIEW_FULL}">{$month.date|@formatTime:"%b"}&nbsp;<span class="badge">{$month.entry_count}</span></a>
                                {else}                                            
                                    <button type="button" class="btn btn-default disabled archive-button"><span class="text-muted">{$month.date|@formatTime:"%b"}&nbsp;</span></button>  
                                {/if}
                            {else}
                                <div class="btn-group archive-button">
                                    {if $month.entry_count}
                                        <button type="button" class="btn btn-default dropdown-toggle archive-button" data-toggle="dropdown" aria-expanded="false">{$month.date|@formatTime:"%b"}&nbsp;<span class="badge">{$month.entry_count}</span>&nbsp;&nbsp;<span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{$month.link}" title="{$CONST.VIEW_FULL|capitalize}"><i class="fa fa-newspaper-o"  aria-hidden="true"></i>{$CONST.VIEW_FULL|capitalize}</a></li>
                                            <li><a href="{$month.link_summary}" title="{$CONST.VIEW_TOPICS|capitalize}"><i class="fa fa-list"  aria-hidden="true"></i>{$CONST.VIEW_TOPICS|capitalize}</a></li>
                                        </ul>
                                    {else}
                                        <button type="button" class="btn btn-default disabled dropdown-toggle archive-button" data-toggle="dropdown" aria-expanded="false">{$month.date|@formatTime:"%b"}</button>
                                    {/if}
                                </div>                                
                            {/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        </section>
    {/foreach}
</article>
{serendipity_hookPlugin hook="entries_footer"}