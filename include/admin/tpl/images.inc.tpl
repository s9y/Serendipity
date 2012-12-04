{* HTML5: Yes *}
{* jQuery: No *}
{if $case_imgedit}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.PREFERENCE_USE_JS_WARNING}</span>
{/if}
{if $case_sync}
    {if !$perm_adminImagesSync}
    <span class="msg_error"><span class="icon-attention"></span> {$CONST.PERM_DENIED}</span>
    {else}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.WARNING_THIS_BLAHBLAH|replace:'\\n':'<br>'}</span>

    <form method="POST" action="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=doSync">
        <fieldset>
            <legend><span>{$CONST.SYNC_OPTION_LEGEND}</span></legend>

            <div class="clearfix">
                <div class="form_radio">
                    <input id="keepthumbs" name="serendipity[deleteThumbs]" type="radio" value="no" checked="checked">
                    <label for="keepthumbs">{$CONST.SYNC_OPTION_KEEPTHUMBS}</label>
                </div>

                <div class="form_radio">
                    <input id="sizecheckthumbs" name="serendipity[deleteThumbs]" type="radio" value="check">
                    <label for="sizecheckthumbs">{$CONST.SYNC_OPTION_SIZECHECKTHUMBS}</label>
                </div>
                
                <div class="form_radio">
                    <input id="deletethumbs" name="serendipity[deleteThumbs]" type="radio" value="yes">
                    <label for="deletethumbs">{$CONST.SYNC_OPTION_DELETETHUMBS}</label>
                </div>
            </div>
        </fieldset>

        <div class="form_buttons">
            <input name="doSync" type="submit" value="{$CONST.CREATE_THUMBS}">
            <a href="serendipity_admin.php">{$CONST.ABORT_NOW}</a>
        </div>
    </form>
    {/if}
{/if}
{if $case_doSync}
    {if !$perm_adminImagesSync}
        <span class="msg_error"><span class="icon-attention"></span> {$CONST.PERM_DENIED}</span>
    {else}
        <h2>{$CONST.SYNCING}</h2>

        <span class="msg_success"><span class="icon-ok-circle"></span> {$print_SYNC_DONE}</span>

        <h2>{$CONST.RESIZING}</h2>

        <span class="msg_success"><span class="icon-ok-circle"></span> {$print_RESIZE_DONE}</span>
    {/if}
{/if}
{if $case_delete}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.ABOUT_TO_DELETE_FILE|sprintf:"$file"}</span>

    <form id="delete_image" method="get">
        <div class="form_buttons">
            <a href="{$newLoc}">{$CONST.DUMP_IT}</a>
            <a href="{$abortLoc}">{$CONST.ABORT_NOW}</a>
        </div>
    </form>
{/if}
{if $switched_output}
    <form id="delete_image" method="get">
    {if ( $is_delete || $is_multidelete )}
        <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.ABOUT_TO_DELETE_FILES}</span>
        {foreach $rip_image AS $ripimg}
        <span class="msg_dialog_ripentry">{$ripimg}</span>
        {/foreach}
        <ul class="dialog_delrip">
            <li><a class="link_abort" href="{$smarty.server.HTTP_REFERER|escape}">{$CONST.NOT_REALLY}</a></li>
            <li><a class="link_confirm" href="{$newLoc}">{$CONST.DUMP_IT}</a></li>
        </ul>
    {/if}
    </form>
{/if}
{if $case_rename}
    {if $go_back}
    <input type="button" value="{$CONST.BACK}" onclick="history.go(-1);">
    {else}
    <script>location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";</script>
    <noscript><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a></noscript>
    {/if}
{/if}

{* TODO: obsolete? *}
{if $case_properties}
    {** serendipity_showPropertyForm($new_media) **}
{/if}
{* END TODO *}

{if $case_add}
    {if $smarty.post.adminSubAction == 'properties'}
    <script>location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";</script>
    <noscript><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a></noscript>
    {else}
    {$showML_add}
    {/if}
{/if}
{if $case_directoryDoDelete}
    {if $print_DIRECTORY_WRITE_ERROR}{$print_DIRECTORY_WRITE_ERROR}{/if}
    {if $ob_serendipity_killPath}{$ob_serendipity_killPath}{/if}
    {if $print_ERROR_NO_DIRECTORY}{$print_ERROR_NO_DIRECTORY}{/if}
{/if}
{if $case_directoryEdit}
    {if !empty($smarty.post.save)}
    {if $ob_serendipity_moveMediaDirectory}{$ob_serendipity_moveMediaDirectory}{/if}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$print_CONST.SETTINGS_SAVED_AT}</span>
    {/if}
    <h2>{$CONST.MANAGE_DIRECTORIES}</h2>

    <form id="image_directory_edit_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]={$dir|escape:'html'}">
        {$formtoken}
        <input name="serendipity[oldDir]" type="hidden" value="{$use_dir}">

        <div class="form_field">
            <label for="diredit_new">{$CONST.NAME}</label>
            <input id="diredit_new" name="serendipity[newDir]" type="text" value="{$use_dir}">
        </div>

        <div class="form_select">
            <label for="read_authors">{$CONST.PERM_READ}</label>
            <select id="read_authors" name="serendipity[read_authors][]" multiple="multiple" size="6">
                <option value="0"{if $rgroups} selected="selected"{/if}>{$CONST.ALL_AUTHORS}</option>
            {foreach $groups AS $group}
                <option value="{$group.confkey}"{if isset($read_groups.{$group.confkey})} selected="selected"{/if}>{$group.confvalue|escape:'html'}</option>
            {/foreach}
            </select>
        </div>

        <div class="form_select">
            <label for="write_authors">{$CONST.PERM_WRITE}</label>
            <select id="write_authors" name="serendipity[write_authors][]" multiple="multiple" size="6">
                <option value="0"{if $wgroups} selected="selected"{/if}>{$CONST.ALL_AUTHORS}</option>
            {foreach $groups AS $group}
                <option value="{$group.confkey}"{if isset($write_groups.{$group.confkey})} selected="selected"{/if}>{$group.confvalue|escape:'html'}</option>
            {/foreach}
            </select>
        </div>

        <div class="form_check">
            <input id="setchild" name="serendipity[update_children]" type="checkbox" value="true"{if !empty($smarty.post.update_children) == 'on'} checked="checked"{/if}><label for="setchild">{$CONST.PERM_SET_CHILD}</label>
        </div>

        <input name="serendipity[save]" type="submit" value="{$CONST.SAVE}">
    </form>
{/if}
{if $case_directoryDelete}
    <h2>{$CONST.DELETE_DIRECTORY}</h2>

    <p>{$CONST.DELETE_DIRECTORY_DESC}</p>

    <form id="image_directory_delete_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoDelete&amp;serendipity[dir]={$dir|escape:'html'}">
        {$formtoken}
        <div class="form_check">
            <input id="diredit_delete" name="serendipity[nuke]" type="checkbox" value="true">
            <label for="diredit_delete"><b>{$basename_dir}</b> - {$CONST.FORCE_DELETE}</label>
        </div>

        {* I think this is redudant: <p>{$CONST.CONFIRM_DELETE_DIRECTORY|sprintf:$dir|escape:'html'}</p> *}

        <input name="SAVE" type="submit" value="{$CONST.DELETE_DIRECTORY}">
    </form>
{/if}
{if $case_directoryDoCreate}
    {if $print_DIRECTORY_CREATED}{$print_DIRECTORY_CREATED}{/if}
    {if $print_DIRECTORY_WRITE_ERROR}{$print_DIRECTORY_WRITE_ERROR}{/if}
{/if}
{if $case_directoryCreate}
    <h2>{$CONST.CREATE_DIRECTORY}</h2>

    <p>{$CONST.CREATE_DIRECTORY_DESC}</p>

    <form id="image_directory_create_form" method="POST" action="?serendipity[step]=directoryDoCreate&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoCreate">
        {$formtoken}

        <div class="form_field">
            <label for="dircreate_name">{$CONST.NAME}</label>
            <input id="dircreate_name" name="serendipity[name]" type="text" value="">
        </div>

        <div class="form_select">
            <label for="dircreate_parent">{$CONST.PARENT_DIRECTORY}</label>
            <select id="dircreate_parent" name="serendipity[parent]">
                <option value="">{$CONST.BASE_DIRECTORY}</option>
            {foreach $folders as $folder}
                <option{if $folder.relpath == $get.only_path} selected="selected"{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:"($folder.depth*2)"} {$folder.name}</option>
            {/foreach}
            </select>
        </div>
        {serendipity_hookPlugin hookAll=true hook="backend_directory_createoptions" addData=$folders}
        <input name="SAVE" type="submit" value="{$CONST.CREATE_DIRECTORY}">
    </form>
{/if}
{if $case_directorySelect}
    <h2>{$CONST.MANAGE_DIRECTORIES}</h2>

    <p>{$CONST.DIRECTORIES_AVAILABLE}</p>

    <h3>{$CONST.BASE_DIRECTORY}</h3>

    <ul class="plainList">
    {foreach $folders as $folder}
        <li class="level_{$folder.depth} clearfix">
            <span class="folder_name"><span class="icon-folder-open"></span> {$folder.name}</span>
            <a class="icon_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]={$folder.relpath|escape:'html'}" title="{$CONST.EDIT}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a>
            <a class="icon_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDelete&amp;serendipity[dir]={$folder.relpath|escape:'html'}" title="{$CONST.DELETE}"><span class="icon-trash"></span><span class="visuallhidden"> {$CONST.DELETE}</span></a>
        </li>
    {/foreach}
    </ul>
    <a class="link_create block_level" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryCreate">{$CONST.CREATE_NEW_DIRECTORY}</a>
{/if}

{* TODO: obsolete? *}
{if $case_addSelect}
    {** smarty display 'admin/media_upload.tpl' **}
{/if}
{* END TODO *}

{if $case_rotateCW}
    {if $rotate_img_done}
    <script>location.href="{$adminFile_redirect}";</script>
    <noscript><a href="{$adminFile_redirect}">{$CONST.DONE}</a></noscript>
    {/if}
{/if}
{if $case_rotateCCW}
    {if $rotate_img_done}
    <script>location.href="{$adminFile_redirect}";</script>
    <noscript><a href="{$adminFile_redirect}">{$CONST.DONE}</a></noscript>
    {/if}
{/if}
{if $case_scale}
    {if $print_SCALING_IMAGE}<span class="msg_notice"><span class="icon-info-circle"></span> {$print_SCALING_IMAGE}</span>{/if}
    {if $print_serendipity_scaleImg}<span class="msg_notice"><span class="icon-info-circle"></span> {$print_serendipity_scaleImg}</span>{/if}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.DONE}</span>
    <script>location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";</script>
    <noscript><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a></noscript>
{/if}
{if $case_scaleSelect}
    <script>
    <!--
        function rescale(dim, newval) {ldelim}
            var originalWidth  = {$img_width};
            var originalHeight = {$img_height};
            var ratio          = originalHeight/originalWidth;
            var trans          = new Array();
            trans['width']     = new Array('serendipity[height]', ratio);
            trans['height']    = new Array('serendipity[width]', 1/ratio);

            if (document.serendipityScaleForm.elements['auto'].checked == true) {ldelim}
                document.serendipityScaleForm.elements[trans[dim][0]].value=Math.round(trans[dim][1]*newval);
            {rdelim}

                document.getElementsByName('serendipityScaleImg')[0].style.width =
                document.serendipityScaleForm.elements['serendipity[width]'].value+'px';

                document.getElementsByName('serendipityScaleImg')[0].style.height =
                document.serendipityScaleForm.elements['serendipity[height]'].value+'px';

            {rdelim}
    //-->
    </script>

    {if $print_RESIZE_BLAHBLAH}<span class="msg_notice"><span class="icon-info-circle"></span> {$print_RESIZE_BLAHBLAH}</span>{/if}
    {if $print_ORIGINAL_SIZE}<span class="msg_notice"><span class="icon-info-circle"></span> {$print_ORIGINAL_SIZE}</span>{/if}
    
    <h2>{$CONST.HERE_YOU_CAN_ENTER_BLAHBLAH}</h2>

    <form name="serendipityScaleForm" action="?" method="GET">
        {$formtoken}
        <input name="serendipity[adminModule]" type="hidden" value="images">
        <input name="serendipity[adminAction]" type="hidden" value="scale">
        <input name="serendipity[fid]" type="hidden" value="{$get.fid}">

        <fieldset>
            <legend><span>{$CONST.NEWSIZE}</span></legend>

            <div class="form_field">
                <label for="resize_width">Width</label> {* i18n *}
                <input id="resize_width" name="serendipity[width]" type="text" onchange="rescale('width' , value);" value="{$img_width}">
            </div>

            <div class="form_field">
                <label for="resize_height">Height</label> {* i18n *}
                <input id="resize_height" name="serendipity[height]" type="text" onchange="rescale('height', value);" value="{$img_height}">
            </div>
        </fieldset>

        <div class="form_check">
            <input id="resize_keepprops" name="auto" type="checkbox" checked="checked">
            <label for="resize_keepprops">{$CONST.KEEP_PROPORTIONS}</label>
        </div>
        
        <input name="scale" type="button" value="{$CONST.IMAGE_RESIZE}" onclick="if (confirm('{$CONST.REALLY_SCALE_IMAGE}')) document.serendipityScaleForm.submit();">
    </form>
    <img src="{$file}" name="serendipityScaleImg" style="width: {$img_width}px; height: {$img_height}px;" alt="">
{/if}
{if $case_default}
    {if $showML_def}{$showML_def}{/if}
{/if}
