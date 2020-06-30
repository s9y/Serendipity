{serendipity_hookPlugin hook="entries_header"}
<article class="clearfix serendipity_entry">
    <h2>{$CONST.UNSUBSCRIBE} - {$smarty_unsubscribe_vars.email}</h2>
        {if not $smarty_unsubscribe_vars.notification eq ''}
        <p>{$smarty_unsubscribe_vars.notification}</p>
        {/if}
        <form id="unsubscribe" class="clearfix unsubscribe" action="{$smarty_unsubscribe_vars['unsubscribe_path']}" method="post">
            {if not $smarty_unsubscribe_vars['blog'] eq ''}
                <h3>{$CONST.SUBSCRIPTION_BLOG}</h3>
                <div class="unsubscribe_info">
                    <span class="unsubscribe_icon"><a class="serendipity_delete_icon" href="{$smarty_unsubscribe_vars['unsubscribe_path']}/{$smarty_unsubscribe_vars.blog.token}/delete" title="{$CONST.DELETE} - {$CONST.SUBSCRIPTION_BLOG}">
                        <img src="{$smarty_unsubscribe_vars.imagepath}" alt="delete" />
                    </a></span>
                    <span class="unsubscribe_data">
                        <span class="unsubscribe_type">{$CONST.BLOG}</span>
                        <span class="unsubscribe_date">{$CONST.SUBSCRIBED_AT}&nbsp;{$smarty_unsubscribe_vars.blog.since|formatTime:"{$CONST.DATE_FORMAT_SHORT}"}</span>
                    </span>
                </div>
            {/if}
            {if not $smarty_unsubscribe_vars['authors'] eq ''}
                <h3>{$CONST.SUBSCRIPTION_AUTHOR}</h3>
                {foreach $smarty_unsubscribe_vars['authors'] as $sub}
                <div class="unsubscribe_info">
                    <span class="unsubscribe_icon"><a class="serendipity_delete_icon" href="{$smarty_unsubscribe_vars['unsubscribe_path']}/{$sub.token}/delete" title="{$CONST.DELETE} - {$sub.item}">
                        <img src="{$smarty_unsubscribe_vars.imagepath}" alt="delete" />
                    </a></span>
                    <span class="unsubscribe_data">
                        <span class="unsubscribe_type">{$sub.item}</span>
                        <span class="unsubscribe_date">{$CONST.SUBSCRIBED_AT}&nbsp;{$sub.since|formatTime:"{$CONST.DATE_FORMAT_SHORT}"}</span>
                    </span>
                </div>
                {/foreach}
            {/if}
            {if not $smarty_unsubscribe_vars['categories'] eq ''}
                <h3>{$CONST.SUBSCRIPTION_CATEGORY}</h3>
                {foreach $smarty_unsubscribe_vars['categories'] as $sub}
                <div class="unsubscribe_info">
                    <span class="unsubscribe_icon"><a class="serendipity_delete_icon" href="{$smarty_unsubscribe_vars['unsubscribe_path']}/{$sub.token}/delete" title="{$CONST.DELETE} - {$sub.item}">
                        <img src="{$smarty_unsubscribe_vars.imagepath}" alt="delete" />
                    </a></span>
                    <span class="unsubscribe_data">
                        <span class="unsubscribe_type">{$sub.item}</span>
                        <span class="unsubscribe_date">{$CONST.SUBSCRIBED_AT}&nbsp;{$sub.since|formatTime:"{$CONST.DATE_FORMAT_SHORT}"}</span>
                    </span>
                </div>
                {/foreach}
            {/if}
            {if not $smarty_unsubscribe_vars['entries'] eq ''}
                <h3>{$CONST.SUBSCRIPTION_ENTRY}</h3>
                {foreach $smarty_unsubscribe_vars['entries'] as $sub}
                <div class="unsubscribe_info">
                    <span class="unsubscribe_icon"><a class="serendipity_delete_icon" href="{$smarty_unsubscribe_vars['unsubscribe_path']}/{$sub.token}/delete" title="{$CONST.DELETE} - {$sub.item}">
                        <img src="{$smarty_unsubscribe_vars.imagepath}" alt="delete" />
                    </a></span>
                    <span>
                        <span class="unsubscribe_type">{$sub.item}</span>
                        <span class="unsubscribe_date">{$CONST.SUBSCRIBED_AT}&nbsp;{$sub.since|formatTime:"{$CONST.DATE_FORMAT_SHORT}"}</span>
                    </span>
                </div>
                {/foreach}
            {/if}
            </form>
</article>
{serendipity_hookPlugin hook="entries_footer"}
