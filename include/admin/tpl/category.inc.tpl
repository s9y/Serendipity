{if $post_save}
    {if $new}
         <div class="serendipityAdminMsgSuccess msg_success">
            <img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />
            {$CONST.CATEGORY_SAVED}
         </div>
    {/if}
    {if $edit}
        {if isset($editPermission) && $editPermission == false}
            <div class="serendipityAdminMsgError msg_error">
                <img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />
                {$CONST.PERM_DENIED}
            </div>
        {else}
            {if $subcat}
                {$subcat}
            {else}
                <div class="serendipityAdminMsgSuccess msg_success">
                    <img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />
                    {$CONST.CATEGORY_SAVED}
                </div>
            {/if}
        {/if}
    {/if}
{/if}

{if $doDelete}
    {if $deleteSuccess}
        <div class="serendipityAdminMsgSuccess msg_success">
            <img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />
            {if $remainingCat}
                {$CONST.CATEGORY_DELETED_ARTICLES_MOVED|sprintf:$remainingCat:$cid}
            {else}
                {$cid|string_format:"{$CONST.CATEGORY_DELETED}"}
            {/if}
        </div>
    {else}
        <div class="serendipityAdminMsgError msg_error">
            <img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />
            {$CONST.INVALID_CATEGORY}
        </div>
    {/if}
{/if}

{if $delete}
    {if $deletePermission == true}
        <form method="POST" name="serendipityCategory" action="?serendipity[adminModule]=category&amp;serendipity[adminAction]=doDelete&amp;serendipity[cid]={$cid}">
            {$formToken}
            <h3>{$categoryName|escape:"html"}</h3>
            {$CONST.CATEGORY_REMAINING}:
            <select name="serendipity[cat][remaining_catid]">
                <option value="0">- {$CONST.NO_CATEGORY} -</option>
                {foreach $cats as $cat_data}
                    <option value="{$cat_data.categoryid}">{$cat_data.category_name|escape:"html"}</option>
                {/foreach}
            </select>
            <input type="submit" name="REMOVE" value="{$CONST.GO}" class="serendipityPrettyButton input_button">
        </form>
    {/if}
{/if}

{if (! $post_save) && ($edit || $new)}
    {if $edit}
        <strong>{$category_name|escape:"html"|string_format:"{$CONST.EDIT_THIS_CAT}"}</strong>
    {/if}
    <form method="POST" name="serendipityCategory">
    {$formToken}
    <table cellpadding="5" width="100%">
    <tr>
        <td>{$CONST.NAME}</td>
        <td><input class="input_textbox" type="text" name="serendipity[cat][name]" value="{$this_cat.category_name|default:""|escape:"html"}" /></td>
        <td rowspan="5" align="center" valign="middle" width="200" style="border: 1px solid #ccc">
            <img src="{$this_cat.category_icon|default:""|escape:"html"}" id="imagepreview" {if ! $this_cat.category_icon} style="display: none" {/if} />
        </td>
    </tr>

    <tr>
        <td>{$CONST.DESCRIPTION}</td>
        <td><input class="input_textbox" type="text" name="serendipity[cat][description]" value="{$this_cat.category_description|default:""|escape:"html"}" /></td>
    </tr>

    <tr>
        <td>{$CONST.IMAGE}</td>
        <td>
            <script type="text/javascript" language="JavaScript" src="serendipity_editor.js"></script>
            <input class="input_textbox" type="text" id="img_icon" name="serendipity[cat][icon]" value="{$this_cat.category_icon|default:""|escape:"html"}" onchange="document.getElementById('imagepreview').src = this.value; document.getElementById('imagepreview').style.display = '';" />
            <script type="text/javascript" language="JavaScript">
                var img_icon     = document.getElementById('img_icon');
                var imgBtn       = document.createElement('div');
                imgBtn.id        = "category_ml_popup";
                imgBtn.innerHTML = '<input type="button" name="insImage" value="<?php echo IMAGE ; ?>" onclick="window.open(\'serendipity_admin_image_selector.php?serendipity[htmltarget]=img_icon&amp;serendipity[filename_only]=true\', \'ImageSel\', \'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1\');" class="serendipityPrettyButton input_button" />';
                img_icon.parentNode.insertBefore(imgBtn, img_icon.nextSibling);
            </script>
        </td>
    </tr>

    <tr>
        <td><label for="read_authors">{$CONST.PERM_READ}</label></td>
        <td>
            <select size="6" id="read_authors" multiple="multiple" name="serendipity[cat][read_authors][]">
                <option value="0" {if $selectAllReadAuthors}selected="selected"{/if}>{$CONST.ALL_AUTHORS}</option>
                {foreach $groups as $group}
                    <option value="{$group.confkey}"
                        {if isset($read_groups.{$group.confkey})}
                            selected="selected"
                        {/if} >
                        {$group.confvalue|escape:"html"}
                    </option>
                {/foreach}
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="write_authors"><{$CONST.PERM_WRITE}</label></td>
        <td>
            <select size="6" id="write_authors" multiple="multiple" name="serendipity[cat][write_authors][]">
                <option value="0" {if $selectAllReadAuthors}selected="selected"{/if}>{$CONST.ALL_AUTHORS}</option>
                {foreach $groups as $group}
                    <option value="{$group.confkey}" {if isset($read_groups.{$group.confkey})} selected="selected" {/if} > {$group.confvalue|escape:"html"}</option>
                {/foreach}
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="parent_cat">{$CONST.PARENT_CATEGORY}</label></td>
        <td>
            <select id="parent_cat" name="serendipity[cat][parent_cat]">
                <option value="0" {if $cid == 0} selected="selected" {/if}>[ {$CONST.NO_CATEGORY} ]</option>
                {foreach $categories as $cat}
                    {* We can't be our own parent, the universe will collapse *}
                    {if $cat.categoryid == $cid}{continue}{/if}
                    <option value="{$cat.categoryid}" {if $this_cat.parentid == $cat.categoryid} selected="selected"{/if} >
                        {for $i=1 to $cat.depth}&nbsp{/for} $cat.category_name
                    </option>
                {/foreach}
            </select>
        </td>
    </tr>
    <tr>
        <td><{$CONST.CATEGORY_HIDE_SUB}<br /><em>{$CONST.CATEGORY_HIDE_SUB_DESC}</em></td>
        <td valign="top">
            <input class="input_radio" type="radio" name="serendipity[cat][hide_sub]" value="0"
                {if $this_cat.hide_sub == 0}
                    checked="checked"
                {/if}
                id="hide_sub_no" />
                    <label for="hide_sub_no">
                        {$CONST.NO}
                    </label>
            <input class="input_radio" type="radio" name="serendipity[cat][hide_sub]" value="1" {if $this_cat.hide_sub== 1} checked="checked"{/if} id="hide_sub_yes" /> <label for="hide_sub_yes">{$CONST.YES}</label>
        </td>
    </tr>
    </table>
    <div><input type="submit" name="SAVE" value="{$save}" class="serendipityPrettyButton input_button" /></div>
    </form>
{/if}

{if $view}
    {if is_array($viewCats)}
        {$CONST.CATEGORY_INDEX}:
    {else}
        <div align="center">- {$CONST.NO_CATEGORIES} -</div>
    {/if}
    <br /><br />
    <table cellspacing="0" cellpadding="4" width="100%" border=0>
        {foreach $viewCategories as $category}
            <tr>
                <td width="16">
                    <a title="{$CONST.EDIT}" href="?serendipity[adminModule]=category&amp;serendipity[adminAction]=edit&amp;serendipity[cid]={$category.categoryid}">
                        <img src="{serendipity_getFile file='admin/img/edit.png'}" border="0" alt="{$CONST.EDIT}" />
                    </a>
                </td>
                <td width="16">
                    <a title="{$CONST.DELETE}" href="?serendipity[adminModule]=category&amp;serendipity[adminAction]=delete&amp;serendipity[cid]={$category.categoryid}">
                        <img src="{serendipity_getFile file='admin/img/delete.png'}" border="0" alt="{$CONST.DELETE}" />
                    </a>
                </td>
                <td width="16">
                    {if $category.category_icon}
                        <img src="{serendipity_getFile file='admin/img/thumbnail.png'}" alt="" />
                    {else}
                        &nbsp;
                    {/if}
                </td>
                <td width="300" style="padding-left: {$category.depth*15+20}px">
                    <img src="{serendipity_getFile file='admin/img/folder.png'}" style="vertical-align: bottom;">
                    {$category.category_name|escape:"html"}
                </td>
                <td>
                    {$category.category_description|escape:"html"}
                </td>
                <td align="right">
                    {if $category.authorid == 0}
                        {$CONST.ALL_AUTHORS}
                    {else}
                        {$category.realname|escape:"html"}
                    {/if}
                </td>
            </tr>
        {/foreach}
        <tr>
            <td colspan="6" align="right">
                <a href="?serendipity[adminModule]=category&serendipity[adminAction]=new" class="serendipityPrettyButton input_button">{$CONST.CREATE_NEW_CAT}</a>
            </td>
        </tr>
    </table>
{/if}