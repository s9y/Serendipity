{if $is_form}
<form id="serendipity_category_form" action="{$form_url}" method="post">
{/if}
    <ul class="plainList">
    {foreach from=$categories item="plugin_category"}
        <li class="category_depth{$plugin_category.catdepth}">
        {if $is_form}
            <input type="checkbox" name="serendipity[multiCat][]" value="{$plugin_category.categoryid}">
        {/if}
            <svg class="icon-rss" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">XML</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#rss"></use></svg><a href="{$plugin_category.categoryURL}" title="{$plugin_category.category_description|escape}">{$plugin_category.category_name|escape}</a>
        </li>
    {/foreach}
    </ul>
{if $is_form}
    <input id="category_submit" type="submit" name="serendipity[isMultiCat]" value="{$CONST.GO}">
{/if}
{if $is_form}
</form>
{/if}