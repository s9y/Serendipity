{if $is_form}
<form id="serendipity_category_form" action="<?= $GLOBALS['tpl']['form_url'] ?>" method="post">
    <div id="serendipity_category_form_content">
<?php endif; ?>

    <ul id="serendipity_categories_list" style="list-style: none; margin: 0px; padding: 0px">
{foreach from=$categories item="plugin_category"}
        <li style="display: block;">
        {if $is_form}
            <input style="width: 15px" type="checkbox" name="serendipity[multiCat][]" value="<?= $plugin_category['categoryid'] ?>" />
        <?php endif; ?>

        {if !empty($category_image)}
            <a class="serendipity_xml_icon" href="<?= $plugin_category['feedCategoryURL'] ?>"><img src="<?= $GLOBALS['tpl']['category_image'] ?>" alt="XML" style="border: 0px" /></a>
        <?php endif; ?>

            <a href="<?= $plugin_category['categoryURL'] ?>" title="{$plugin_category.category_description|escape}" style="padding-left: <?= $plugin_category['paddingPx'] ?>px">{$plugin_category.category_name|escape}</a>
        </li>
<?php endforeach; ?>
    </ul>

{if $is_form}
    <div class="category_submit"><input type="submit" name="serendipity[isMultiCat]" value="<?= GO ?>" /></div>
<?php endif; ?>

    <div class="category_link_all"><a href="<?= $GLOBALS['tpl']['form_url'] ?>" title="<?= ALL_CATEGORIES ?>"><?= ALL_CATEGORIES ?></a></div>

{if $is_form}
    </div>
</form>
<?php endif; ?>
