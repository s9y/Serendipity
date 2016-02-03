{if $tags}
    <h2>{$CONST.EDITOR_TAGS}</h2>
    <div class="clean-blog_freeTag">
    {foreach from=$tags key="tag_name" item="plugin_tags" name="each_tag"}
        <a href="{$plugin_tags.href}">{$tag_name}</a>{if !$smarty.foreach.each_tag.last}{/if}
    {/foreach}
    </div>
{else}
    <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span>{$CONST.TAGS_ON_ARCHIVE_DESC}</p>
{/if}