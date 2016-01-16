{if $categories}
    <h2>{$CONST.CATEGORIES}</h2>
    <ul class="plainList category-list">
        {foreach from=$categories item="plugin_category" name="each_category"}
            {if $smarty.foreach.each_category.first}{assign var="prevdepth" value=$plugin_category.catdepth}{/if}
            {if ($plugin_category.catdepth == $prevdepth) && !$smarty.foreach.each_category.first}
                </li>
            {elseif $plugin_category.catdepth < $prevdepth}
                {for $i=1 to $prevdepth-$plugin_category.catdepth}
                    </li>
                    </ul>
                {/for}
                </li>
            {elseif $plugin_category.catdepth > $prevdepth}
                <ul class="category-children">
            {/if}
            <li id="category_{$plugin_category.categoryid}" class="category_depth{$plugin_category.catdepth}">
                <a class="serendipity_xml_icon" href="{$plugin_category.feedCategoryURL}" title="{$plugin_category.category_name|escape} rss"><i class="fa fa-rss"></i></a>
                <a href="{$plugin_category.categoryURL}" title="{$plugin_category.category_description|escape}">{$plugin_category.category_name|escape}</a>
            {if $smarty.foreach.each_category.last}
                {if $plugin_category.catdepth>0}    
                    {for $i=1 to $plugin_category.catdepth}
                        </li>
                        </ul>
                    {/for}
                {/if}
                </li>
            {/if}
            {assign var="prevdepth" value=$plugin_category.catdepth}       
        {/foreach}
    </ul>
{/if}