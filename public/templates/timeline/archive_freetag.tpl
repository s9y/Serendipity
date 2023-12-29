{if $tags}
    <h3>{$CONST.EDITOR_TAGS}</h3>
    <div class="timeline_freeTag">
        {foreach from=$tags key="tag_name" item="plugin_tags" name="each_tag"}
            <a href="{$plugin_tags.href}">{$tag_name}</a>{if !$smarty.foreach.each_tag.last}{/if}
        {/foreach}
    </div>
{else}
    <p class="alert alert-warning"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-exclamation fa-stack-1x"></i></span> {$CONST.TAGS_ON_ARCHIVE_DESC}</p>
{/if}