{serendipity_hookPlugin hook="entries_header"}
    {if $template_option.categories_on_archive || $template_option.tags_on_archive}
        <div class="row">
            {if $template_option.categories_on_archive}
                <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12 archive-categories">      
                    {serendipity_showPlugin class="serendipity_plugin_categories" template="archive_categories.tpl"}
                </section>
            {/if}
            {if $template_option.tags_on_archive}
                <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12 archive-tags">      
                    {serendipity_showPlugin class="serendipity_plugin_freetag" template="archive_freetag.tpl"}
                </section>
            {/if}
        </div>
    {/if}
    <div class="row"> 
        <section class="col-lg-12 archive-archive_history">
            {if $template_option.categories_on_archive || $template_option.tags_on_archive}
                <h3>{if $category}{$category_info.category_name} - {/if}{$CONST.ARCHIVES}</h3>
            {/if}
            <ul class="timeline">    
                {foreach from=$archives item="archive"}
                    <li class="{cycle values='left,timeline-inverted timeline-top-margin'}">
                        <div class="timeline-badge"><i class="far fa-dot-circle" aria-hidden="true"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{$archive.year}</h4>
                            </div>
                            <div class="timeline-body clearfix">
                            {foreach from=$archive.months item="month"}
                                <div class="{if $rightSidebarElements > 0}col-md-4{else}col-md-3{/if} col-xs-6">
                                    <div class="btn-group archive-button">
                                        {if $month.entry_count}
                                            <button type="button" class="btn btn-default btn-theme dropdown-toggle archive-button-months archive-button-months-entries" data-toggle="dropdown" aria-expanded="false">{$month.date|@formatTime:"%b"}&nbsp;<span class="badge">{$month.entry_count}</span>&nbsp;&nbsp;<span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                            <li><a href="{$month.link}" title="{$CONST.VIEW_FULL|capitalize}"><i class="far fa-dot-circle"  aria-hidden="true"></i>{$CONST.VIEW_FULL|capitalize}</a></li>
                                            <li><a href="{$month.link_summary}" title="{$CONST.VIEW_TOPICS|capitalize}"><i class="fas fa-list"  aria-hidden="true"></i>{$CONST.VIEW_TOPICS|capitalize}</a></li>
                                            </ul>
                                        {else}
                                            <button type="button" class="btn btn-default btn-theme disabled dropdown-toggle archive-button-months" data-toggle="dropdown" aria-expanded="false">{$month.date|@formatTime:"%b"}</button>
                                        {/if}
                                    </div>                         
                                </div>
                            {/foreach}
                            </div>
                        </div>
                    </li>    
                {/foreach}
                <li class="clearfix" style="float: none;"></li>
            </ul>
        </section>
    </div>

{serendipity_hookPlugin hook="entries_footer"}