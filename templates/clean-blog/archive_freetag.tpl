<h2>{$CONST.EDITOR_TAGS}</h2>
<div class="clean-blog_freeTag">
{foreach from=$tags key="tag_name" item="plugin_tags" name="each_tag"}
    <a href="{$plugin_tags.href}">{$tag_name}</a>{if !$smarty.foreach.each_tag.last}{/if}
{/foreach}
</div>