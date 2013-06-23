{if $post_save}
    {if $new}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.CATEGORY_SAVED}</span>
    {/if}
    {if $edit}
        {if isset($editPermission) && $editPermission == false}
        <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.PERM_DENIED}</span>
        {else}
        {if $subcat}{$subcat}{else}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.CATEGORY_SAVED}</span>
        {/if}
        {/if}
    {/if}
{/if}
{if $doDelete}
  {if $deleteSuccess}
        <span class="msg_success"><span class="icon-ok-circled"></span> {if $remainingCat}{$CONST.CATEGORY_DELETED_ARTICLES_MOVED|sprintf:$remainingCat:$cid}{else}{$cid|string_format:"{$CONST.CATEGORY_DELETED}"}{/if}</span>
  {else}
        <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.INVALID_CATEGORY}</span>
  {/if}
{/if}
{if $delete}
    {if $deletePermission == true}
        <h2>{$categoryName|escape:"html"}</h2>

        <form method="POST" name="serendipityCategory" action="?serendipity[adminModule]=category&amp;serendipity[adminAction]=doDelete&amp;serendipity[cid]={$cid}">
            {$formToken}

            <div class="form_select">
                <label for="remaining_cat">{$CONST.CATEGORY_REMAINING}:</label>
                <select id="remaining_cat" name="serendipity[cat][remaining_catid]">
                    <option value="0">{$CONST.NO_CATEGORY}</option>
                {foreach $cats as $cat_data}
                    <option value="{$cat_data.categoryid}">{$cat_data.category_name|escape:"html"}</option>
                {/foreach}
                </select>
            </div>

            <input class="state_cancel" name="REMOVE" type="submit" value="{$CONST.GO}">
        </form>
    {/if}
{/if}

{if (! $post_save) && ($edit || $new)}
    {if $edit}
        <h2>{$category_name|escape:"html"|string_format:"{$CONST.EDIT_THIS_CAT}"}</h2>
    {/if}
        <form id="serendipity_category" method="POST" name="serendipityCategory">
            {$formToken}

            <div class="clearfix inputs">
                <div class="form_field">
                    <label for="category_name">{$CONST.NAME}</label>
                    <input id="category_name" name="serendipity[cat][name]" type="text" value="{$this_cat.category_name|default:""|escape:"html"}">
                </div>

                <div class="form_field">
                    <label for="category_description">{$CONST.DESCRIPTION}</label>
                    <input id="category_description" name="serendipity[cat][description]" type="text" value="{$this_cat.category_description|default:""|escape:"html"}">
                </div>

                <div class="form_select">
                    <label for="parent_cat">{$CONST.PARENT_CATEGORY}</label>
                    <select id="parent_cat" name="serendipity[cat][parent_cat]">
                        <option value="0"{if $cid == 0} selected{/if}>{$CONST.NO_CATEGORY}</option>
                    {foreach $categories as $cat}
                        {if $cat.categoryid == $cid}{continue}{/if}
                        <option value="{$cat.categoryid}"{if $this_cat.parentid == $cat.categoryid} selected{/if}>{for $i=1 to $cat.depth}&nbsp{/for} {$cat.category_name}</option>
                    {/foreach}
                    </select>
                </div>
            </div>

            <div class="clearfix inputs">
                <div class="form_multiselect">
                    <label for="read_authors">{$CONST.PERM_READ}</label>
                    <select id="read_authors" size="6" multiple name="serendipity[cat][read_authors][]">
                        <option value="0"{if $selectAllReadAuthors} selected{/if}>{$CONST.ALL_AUTHORS}</option>
                    {foreach $groups as $group}
                        <option value="{$group.confkey}"{if isset($read_groups.{$group.confkey})} selected{/if} >{$group.confvalue|escape:"html"}</option>
                    {/foreach}
                    </select>
                </div>

                <div class="form_multiselect">
                    <label for="write_authors">{$CONST.PERM_WRITE}</label>
                    <select id="write_authors"size="6" multiple name="serendipity[cat][write_authors][]">
                        <option value="0"{if $selectAllReadAuthors} selected{/if}>{$CONST.ALL_AUTHORS}</option>
                    {foreach $groups as $group}
                        <option value="{$group.confkey}"{if isset($read_groups.{$group.confkey})} selected{/if}>{$group.confvalue|escape:"html"}</option>
                    {/foreach}
                    </select>
                </div>
            </div>

            <div class="clearfix inputs">
                <div class="form_field">
                    <label for="category_icon">{$CONST.IMAGE}</label>
                    {* TODO: this should probably become/fallback to input[type=file]; also needs
                             a no-js fallback since this is unusable without JS as of now *}
                    <input id="category_icon" name="serendipity[cat][icon]" type="text" value="{$this_cat.category_icon|default:""|escape:"html"}">
                </div>

                <figure id="preview">
                    <figcaption>{$CONST.PREVIEW}</figcaption>
                    <img id="imagepreview" src="{$this_cat.category_icon|default:""|escape:"html"}" alt="">
                </figure>
            </div>

            <fieldset class="clearfix inputs">
                <legend><span>{$CONST.CATEGORY_HIDE_SUB} <span>{$CONST.CATEGORY_HIDE_SUB_DESC}</span></span></legend>

                <div class="clearfix grouped">
                    <div class="form_radio">
                        <input id="hide_sub_yes" name="serendipity[cat][hide_sub]" type="radio" value="1"{if $this_cat.hide_sub== 1} checked="checked"{/if}>
                        <label for="hide_sub_yes">{$CONST.YES}</label>
                    </div>

                    <div class="form_radio">
                        <input id="hide_sub_no" name="serendipity[cat][hide_sub]" type="radio" value="0"{if $this_cat.hide_sub == 0} checked="checked"{/if}>
                        <label for="hide_sub_no">{$CONST.NO}</label>
                    </div>
                </div>
            </fieldset>

            <input class="standalone" name="SAVE" type="submit" value="{$save}">
        </form>
{/if}
{if $view}
    <h2>{$CONST.CATEGORY_INDEX}:</h2>
    {if is_array($viewCats)}
        <ul id="categories">
        {foreach $viewCategories as $category}
            {if ! $category@first}
                {if $category.depth > $priorDepth}
                    <ul>
                {/if}

                {if $category.depth < $priorDepth}
                    </li>
                    {for $i=$category.depth+1 to $priorDepth}
                        </ul></li>
                    {/for}
                {/if}

                {if $category.depth == $priorDepth}
                    </li>
                {/if}
            {/if}

            {$priorDepth=$category.depth}
            
            <li>
                <div class="clearfix {cycle values="odd,even"}">
                    <details class="category_data">
                        <summary class="category_name{if $category.category_icon} category_hasicon{/if}"><span class="icon-folder-open"></span> {$category.category_name|escape:"html"}</summary>

                        <div class="category_info clearfix">
                        {if $category.category_description != ''}
                            <span class="category_desc">{$category.category_description|escape:"html"}</span>
                        {/if}
                            (<span class="category_author">{if $category.authorid == 0}{$CONST.ALL_AUTHORS}{else}{$category.realname|escape:"html"}{/if}</span>)
                        </div>
                    </details>

                    <ul class="plainList clearfix edit_actions">
                        <li><a class="button_link" href="?serendipity[adminModule]=category&amp;serendipity[adminAction]=edit&amp;serendipity[cid]={$category.categoryid}" title="{$CONST.EDIT} {$category.category_name|escape:"html"}" rel="tooltip"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                        <li><a class="button_link" href="?serendipity[adminModule]=category&amp;serendipity[adminAction]=delete&amp;serendipity[cid]={$category.categoryid}" title="{$CONST.DELETE} {$category.category_name|escape:"html"}" rel="tooltip"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
                    </ul>
                </div>
        {/foreach}
        </li>
        {for $i=1 to $priorDepth}
            </ul></li>
        {/for}
        </ul>
    {else}
        <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.NO_CATEGORIES}</span>
    {/if}
        <a class="button_link state_submit icon_link" href="?serendipity[adminModule]=category&serendipity[adminAction]=new">{$CONST.CREATE_NEW_CAT}</a>
{/if}
