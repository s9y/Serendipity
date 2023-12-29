{if $is_form}
<form id="serendipity_category_form" action="{$form_url}" method="post">
{/if}
    <ul class="plainList">
    {foreach from=$categories item="plugin_category"}
        <li id="category_{$plugin_category.categoryid}" class="category_depth{$plugin_category.catdepth}">
        {if $is_form}
            <input name="serendipity[multiCat][]" type="checkbox" value="{$plugin_category.categoryid}">
        {/if}
        {if !empty($category_image)}
            <a class="serendipity_xml_icon" href="{$plugin_category.feedCategoryURL}"><img src="{$category_image}" alt="XML"></a>
        {/if}
            <a href="{$plugin_category.categoryURL}" title="{$plugin_category.category_description|escape}">{$plugin_category.category_name|escape}</a>
        </li>
    {/foreach}
    </ul>
{if $is_form}
    <input class="category_submit" name="serendipity[isMultiCat]" type="submit" value="{$CONST.GO}">
{/if}
    <a class="category_link_all" href="{$form_url}?frontpage">{$CONST.ALL_CATEGORIES}</a>
{if $is_form}
</form>
{/if}
