{foreach $messages as $message}
    {$message}
{/foreach}

{if $case_doSync}
    {if !$perm_adminImagesSync}
        <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.PERM_DENIED}</span>
    {else}
        <h2>{$CONST.SYNCING}</h2>

        <span class="msg_success"><span class="icon-ok-circled"></span> {$print_SYNC_DONE}</span>

        <h2>{$CONST.RESIZING}</h2>

        <span class="msg_success"><span class="icon-ok-circled"></span> {$print_RESIZE_DONE}</span>
    {/if}
{/if}
{if $case_delete}
    <h2>{$CONST.MEDIA_DELETE}</h2>

    <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.ABOUT_TO_DELETE_FILE|sprintf:"$file"}</span>

    <form id="delete_image" method="get">
        <div class="form_buttons">
            <a class="button_link state_cancel icon_link" href="{$abortLoc}">{$CONST.BACK}</a>
            <a class="button_link state_submit icon_link" href="{$newLoc}">{$CONST.DUMP_IT}</a>
        </div>
    </form>
{/if}
{if $case_multidelete}
    <form id="delete_image" method="get">
    <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.ABOUT_TO_DELETE_FILES}</span>
    {foreach $rip_image AS $ripimg}
    <span class="msg_hint"><span class="icon-help-circled"></span> {$ripimg}</span>
    {/foreach}
    <div class="form_buttons">
        <a class="button_link state_cancel icon_link" href="{$abortLoc}">{$CONST.BACK}</a>
        <a class="button_link state_submit icon_link" href="{$newLoc}">{$CONST.DUMP_IT}</a>
    </div>
    </form>
{/if}
{if $case_do_multidelete || $case_do_delete}
    {if $showML}{$showML}{/if}
{/if}
{if $case_rename}
    {if $go_back}
    <input class="go_back" type="button" value="{$CONST.BACK}">
    {else}
    <script>location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";</script>
    <noscript><a class="button_link icon_link standalone" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a></noscript>
    {/if}
{/if}

{* TODO: obsolete? *}
{if $case_properties}
    {** serendipity_showPropertyForm($new_media) **}
{/if}
{* END *}

{if $case_add}
    {if $smarty.post.adminSubAction == 'properties'}
    <script>location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";</script>
    <noscript><a class="button_link icon_link standalone" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a></noscript>
    {else}
    {$showML}
    {/if}
{/if}
{if $case_directoryDoDelete}
    {if $print_DIRECTORY_WRITE_ERROR}<span class="msg_error"><span class="icon-attention-circled"></span> {$print_DIRECTORY_WRITE_ERROR}</span>{/if}
    {if $ob_serendipity_killPath}{$ob_serendipity_killPath}{/if}
    {if $print_ERROR_NO_DIRECTORY}<span class="msg_error"><span class="icon-attention-circled"></span> {$print_ERROR_NO_DIRECTORY}</span>{/if}
{/if}
{if $case_directoryEdit}
    {if !empty($smarty.post.save)}
    {if $ob_serendipity_moveMediaDirectory}<span class="msg_notice"><span class="icon-info-circled"></span> {$ob_serendipity_moveMediaDirectory}</span>{/if}
    <span class="msg_notice"><span class="icon-info-circled"></span> {$print_CONST.SETTINGS_SAVED_AT}</span>
    {/if}
    <h2>{$CONST.MANAGE_DIRECTORIES}</h2>

    <form id="image_directory_edit_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]={$dir|escape}">
        {$formtoken}
        <input name="serendipity[oldDir]" type="hidden" value="{$use_dir}">

        <div class="form_field">
            <label for="diredit_new">{$CONST.NAME}</label>
            <input id="diredit_new" name="serendipity[newDir]" type="text" value="{$use_dir}">
        </div>

        <h3 class="toggle_headline">
            <button class="show_config_option icon_link" type="button" data-href="#directory_permissions" title="{$CONST.TOGGLE_OPTION}"><span class="icon-right-dir"></span> {$CONST.PERMISSIONS}</button>
        </h3>

        <div id="directory_permissions" class="clearfix additional_info">
            <div class="form_multiselect">
                <label for="read_authors">{$CONST.PERM_READ}</label>
                <select id="read_authors" name="serendipity[read_authors][]" multiple size="6">
                    <option value="0"{if $rgroups} selected{/if}>{$CONST.ALL_AUTHORS}</option>
                {foreach $groups AS $group}
                    <option value="{$group.confkey}"{if isset($read_groups.{$group.confkey})} selected{/if}>{$group.confvalue|escape}</option>
                {/foreach}
                </select>
            </div>

            <div class="form_multiselect">
                <label for="write_authors">{$CONST.PERM_WRITE}</label>
                <select id="write_authors" name="serendipity[write_authors][]" multiple size="6">
                    <option value="0"{if $wgroups} selected{/if}>{$CONST.ALL_AUTHORS}</option>
                {foreach $groups AS $group}
                    <option value="{$group.confkey}"{if isset($write_groups.{$group.confkey})} selected{/if}>{$group.confvalue|escape}</option>
                {/foreach}
                </select>
            </div>

            <div class="form_check">
                <input id="setchild" name="serendipity[update_children]" type="checkbox" value="true"{if !empty($smarty.post.update_children) == 'on'} checked="checked"{/if}><label for="setchild">{$CONST.PERM_SET_CHILD}</label>
            </div>
        </div>

        <div class="form_buttons">
            <a class="button_link" href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=directorySelect">{$CONST.BACK}</a>
            <input name="serendipity[save]" type="submit" value="{$CONST.SAVE}">
        </div>
    </form>
{/if}
{if $case_directoryDelete}
    <h2>{$CONST.DELETE_DIRECTORY}</h2>

    <p>{$CONST.DELETE_DIRECTORY_DESC}</p>

    <form id="image_directory_delete_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoDelete&amp;serendipity[dir]={$dir|escape}">
        {$formtoken}
        <div class="form_check">
            <input id="diredit_delete" name="serendipity[nuke]" type="checkbox" value="true">
            <label for="diredit_delete"><b>{$basename_dir}</b> - {$CONST.FORCE_DELETE}</label>
        </div>

        {* I think this is redudant: <p>{$CONST.CONFIRM_DELETE_DIRECTORY|sprintf:$dir|escape}</p> *}
        <div class="form_buttons">
            <input class="state_cancel" name="SAVE" type="submit" value="{$CONST.DELETE_DIRECTORY}">
        </div>
    </form>
{/if}
{if $case_directoryDoCreate}
    {if $print_DIRECTORY_CREATED}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$print_DIRECTORY_CREATED}</span>
    {/if}
    {if $print_DIRECTORY_WRITE_ERROR}
    <span class="msg_error"><span class="icon-attention-circled"></span> {$print_DIRECTORY_WRITE_ERROR}</span>
    {/if}
    <a class="button_link state_submit" href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=directorySelect">{$CONST.BACK}</a>
{/if}
{if $case_directoryCreate}
    <h2>{$CONST.CREATE_DIRECTORY}</h2>

    <p>{$CONST.CREATE_DIRECTORY_DESC}</p>

    <form id="image_directory_create_form" method="POST" action="?serendipity[step]=directoryDoCreate&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoCreate">
        {$formtoken}
        <div class="form_field">
            <label for="dircreate_name">{$CONST.NAME}</label>
            <input id="dircreate_name" name="serendipity[name]" type="text" value="" required>
        </div>

        <div class="form_select">
            <label for="dircreate_parent">{$CONST.PARENT_DIRECTORY}</label>
            <select id="dircreate_parent" name="serendipity[parent]">
                <option value="">{$CONST.BASE_DIRECTORY}</option>
            {foreach $folders as $folder}
                <option{if $folder.relpath == $get.only_path || $folder.relpath == $dir} selected{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:($folder.depth*2)} {$folder.name}</option>
            {/foreach}
            </select>
        </div>
        {serendipity_hookPlugin hookAll=true hook="backend_directory_createoptions" addData=$folders}
        <div class="form_buttons">
            <a class="button_link" href="?serendipity[adminModule]=media&amp;serendipity[adminAction]=directorySelect">{$CONST.BACK}</a>
            <input name="SAVE" type="submit" value="{$CONST.CREATE_DIRECTORY}">
        </div>
    </form>
{/if}
{if $case_directorySelect}
    <h2>{$CONST.MANAGE_DIRECTORIES}</h2>

    <h3>{$CONST.BASE_DIRECTORY}</h3>

    <ul id="serendipity_image_folders" class="option_list">
    {foreach $folders as $folder}
        {if ! $folder@first}
            {if $folder.depth > $priorDepth}
                <ul>
            {/if}

            {if $folder.depth < $priorDepth}
                </li>
                {for $i=$folder.depth+1 to $priorDepth}
                    </ul></li>
                {/for}
            {/if}

            {if $folder.depth == $priorDepth}
                </li>
            {/if}
        {/if}

        {$priorDepth=$folder.depth}

        <li>
            <div class="clearfix {cycle values="odd,even"}">
                <span class="folder_name"><span class="icon-folder-open"></span> {$folder.name}</span>

                <ul class="plainList clearfix edit_actions">
                    <li><a class="button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]={$folder.relpath|escape}" title="{$CONST.EDIT} {$folder.name}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                    <li><a class="button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryCreateSub&amp;serendipity[dir]={$folder.relpath|escape}" title="{$CONST.CREATE_DIRECTORY}"><span class="icon-plus"></span><span class="visuallyhidden"> {$CONST.CREATE_DIRECTORY}</span></a></li>
                    <li><a class="button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDelete&amp;serendipity[dir]={$folder.relpath|escape}" title="{$CONST.DELETE} {$folder.name}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
                </ul>
            </div>
    {/foreach}
    </li>
    {for $i=1 to $priorDepth}
        </ul></li>
    {/for}
    </ul>

    <a class="button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryCreate">{$CONST.CREATE_NEW_DIRECTORY}</a>
{/if}

{* TODO: obsolete? *}
{if $case_addSelect}
    {** smarty display 'admin/media_upload.tpl' **}
{/if}
{* END *}

{if $case_rotateCW}
    {if $rotate_img_done}
    <script>location.href="{$adminFile_redirect}";</script>
    <noscript><a class="button_link icon_link standalone" href="{$adminFile_redirect}">{$CONST.DONE}</a></noscript>
    {/if}
{/if}
{if $case_rotateCCW}
    {if $rotate_img_done}
    <script>location.href="{$adminFile_redirect}";</script>
    <noscript><a class="button_link icon_link standalone" href="{$adminFile_redirect}">{$CONST.DONE}</a></noscript>
    {/if}
{/if}
{if $case_scale}
    {if $print_SCALING_IMAGE}<span class="msg_notice"><span class="icon-info-circled"></span> {$print_SCALING_IMAGE}</span>{/if}
    {if $print_serendipity_scaleImg}<span class="msg_notice"><span class="icon-info-circled"></span> {$print_serendipity_scaleImg}</span>{/if}
    <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.DONE}</span>
    {if $showML}{$showML}{/if}
{/if}
{if $case_scaleSelect}
    {if $print_RESIZE_BLAHBLAH}<h2>{$print_RESIZE_BLAHBLAH}</h2>{/if}
    {if $print_ORIGINAL_SIZE}<span class="block_level standalone">{$print_ORIGINAL_SIZE}</span>{/if}

    <span class="msg_notice image_resize_hint"><span class="icon-info-circled"></span> {$CONST.HERE_YOU_CAN_ENTER_BLAHBLAH}</span>

    <div class="clearfix">
        <form id="serendipityScaleForm" name="serendipityScaleForm" action="?" method="GET">
            {$formtoken}
            <input name="serendipity[adminModule]" type="hidden" value="images">
            <input name="serendipity[adminAction]" type="hidden" value="scale">
            <input name="serendipity[fid]" type="hidden" value="{$get.fid}">
            {$extraParems}

            <fieldset>
                <span class="wrap_legend"><legend>{$CONST.NEWSIZE}</legend></span>

                <div class="form_field">
                    <label for="resize_width">{$CONST.INSTALL_THUMBDIM_WIDTH}</label>
                    <input id="resize_width" name="serendipity[width]" type="text" value="{$img_width}">
                </div>

                <div class="form_field">
                    <label for="resize_height">{$CONST.INSTALL_THUMBDIM_HEIGHT}</label>
                    <input id="resize_height" name="serendipity[height]" type="text" value="{$img_height}">
                </div>
            </fieldset>

            <div class="form_check">
                <input id="resize_keepprops" name="auto" type="checkbox" checked="checked">
                <label for="resize_keepprops">{$CONST.KEEP_PROPORTIONS}</label>
            </div>

            <div class="form_buttons">
                <input class="image_scale" name="scale" type="button" value="{$CONST.IMAGE_RESIZE}">
            </div>
        </form>

        <div id="serendipityScaleImg" data-imgwidth="{$img_width}" data-imgheight="{$img_height}">
            <img src="{$file}" name="serendipityScaleImg" alt="{$CONST.PREVIEW}">
        </div>
    </div>
{/if}
{if $case_default}
    {if $showML}{$showML}{/if}
{/if}
{if $showMLbutton}
    <a id="ml_link" class="button_link" href="?serendipity[adminModule]=media">{$CONST.MEDIA_LIBRARY}</a>
{/if}
