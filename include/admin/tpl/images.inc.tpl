
    {if $case_imgedit}
        <div class="warning js_warning"><em>{$CONST.PREFERENCE_USE_JS_WARNING}</em></div>
        {** Let the IMGEditor do its magic. It will parse its results straightly into a template variable array.
            serendipity_smarty_fetch('IMGEDIT', $img->output_template);
         **}
    {/if}

    {if $case_sync}
        {if !$perm_adminImagesSync}
            <div class="warning"><em>{$CONST.PERM_DENIED}</em></div>
        {else}

        <div class="serendipityAdminMsgNote">{$CONST.WARNING_THIS_BLAHBLAH|replace:'\\n':'<br />'}</div> 
            <form method="POST" action="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=doSync">
                <p>
                    <fieldset>
                        <legend>{$CONST.SYNC_OPTION_LEGEND}</legend>
                        <input type="radio" name="serendipity[deleteThumbs]" value="no" checked="checked" id="keepthumbs" />
                        <label for="keepthumbs">{$CONST.SYNC_OPTION_KEEPTHUMBS}</label><br />
                        <input type="radio" name="serendipity[deleteThumbs]" value="check" id="sizecheckthumbs" />
                        <label for="sizecheckthumbs">{$CONST.SYNC_OPTION_SIZECHECKTHUMBS}</label><br />
                        <input type="radio" name="serendipity[deleteThumbs]" value="yes" />
                        <label for="deletethumbs">{$CONST.SYNC_OPTION_DELETETHUMBS}</label><br />
                    </fieldset>
                </p>
                <input name="doSync" value="{$CONST.CREATE_THUMBS}" class="serendipityPrettyButton input_button" type="submit" />
                <a href="serendipity_admin.php" class="serendipityPrettyButton">{$CONST.ABORT_NOW}</a>
            </form>

        {/if}
    {/if}

    {if $case_doSync}
        {if !$perm_adminImagesSync}
            <div class="warning"><em>{$CONST.PERM_DENIED}</em></div>
        {else}

        <p class="image_synch"><b>{$CONST.SYNCING}</b></p><br />

        {$print_SYNC_DONE}

        <p class="image_resize"><b>{$CONST.RESIZING}</b></p><br />

        {$print_RESIZE_DONE}

        {/if}
    {/if}

    {if $case_DoDelete}
        {** delete & showMediaLibrary($messages) **}
        {$showML_DD}
    {/if}

    {if $case_delete}
        <div class="image_notify_delete">{$CONST.ABOUT_TO_DELETE_FILE|sprintf:"$file"}</div>
        <form method="get" id="delete_image">
            <div>
                <a href="{$newLoc}" class="serendipityPrettyButton input_button">{$CONST.DUMP_IT}</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{$abortLoc}" class="serendipityPrettyButton input_button">{$CONST.ABORT_NOW}</a>
            </div>
        </form>
    {/if}

    {if $case_rename}
        {if $go_back}
        <br />
        <input type="button" onclick="history.go(-1);" value="{$CONST.BACK}" class="serendipityPrettyButton input_button" />
        {else}

        <script language="javascript" type="text/javascript">
            location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";
        </script>
        <noscript>
            <a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a>
        </noscript>
        {/if}
    {/if}

    {if $case_properties}
        {** serendipity_showPropertyForm($new_media) **}
    {/if}

    {if $case_add}
        {if $smarty.post.adminSubAction == 'properties'}
        <script language="javascript" type="text/javascript">
            location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";
        </script>
        <noscript>
            <a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a>
        </noscript>
        {else}
        {** showMediaLibrary($messages) **}
        {$showML_add}
        {/if}
    {/if}

    {if $case_directoryDoDelete}
        {if $print_DIRECTORY_WRITE_ERROR}{$print_DIRECTORY_WRITE_ERROR}{/if} 
        {if $ob_serendipity_killPath}{$ob_serendipity_killPath}{/if} 
        {if $print_ERROR_NO_DIRECTORY}{$print_ERROR_NO_DIRECTORY}{/if}
        {** serendipity_plugin_api::hook_event('backend_directory_delete', $new_dir); **}
    {/if}

    {if $case_directoryEdit}

        {if !empty($smarty.post.save)}
            {if $ob_serendipity_moveMediaDirectory}{$ob_serendipity_moveMediaDirectory}{/if}
            <div>{$print_CONST.SETTINGS_SAVED_AT}</div>
        {/if}

        <div class="image_directory_edit"><strong>{$CONST.MANAGE_DIRECTORIES}</strong></div>
        <br />
        <form id="image_directory_edit_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]={$dir|escape:'html'}">
            {$formtoken}
            <input type="hidden" name="serendipity[oldDir]" value="{$use_dir}" />
            <table cellpadding="5">
                <tr>
                    <td width="100"><strong>{$CONST.NAME}</strong></td>
                    <td><input class="input_textbox" type="text" name="serendipity[newDir]" value="{$use_dir}" /></td>
                </tr>
                <tr>
                    <td><label for="read_authors">{$CONST.PERM_READ}</label></td>
                    <td>
                        <select size="6" id="read_authors" multiple="multiple" name="serendipity[read_authors][]">
                            <option value="0" {if $rgroups}selected="selected"{/if}>{$CONST.ALL_AUTHORS}</option>
                        {foreach $groups AS $group}
                            <option value="{$group.confkey}" {if isset($read_groups.{$group.confkey})}selected="selected"{/if}>{$group.confvalue|escape:'html'}</option>
                        {/foreach}
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label for="write_authors">{$CONST.PERM_WRITE}</label></td>
                    <td>
                        <select size="6" id="write_authors" multiple="multiple" name="serendipity[write_authors][]">
                            <option value="0" {if $wgroups}selected="selected"{/if}>{$CONST.ALL_AUTHORS}</option>
                        {foreach $groups AS $group}
                            <option value="{$group.confkey}" {if isset($write_groups.{$group.confkey})}selected="selected"{/if}>{$group.confvalue|escape:'html'}</option>
                        {/foreach}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="input_checkbox" id="setchild" value="true" type="checkbox" name="serendipity[update_children]" {if !empty($smarty.post.update_children) == 'on'}checked="checked"{/if} /> <label for="setchild">{$CONST.PERM_SET_CHILD}</label>
                    <td>
                </tr>
            </table>
            <br />
            <br />
            <div align="center">
                <input name="serendipity[save]" value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" type="submit" />
            </div>
        </form>

    {/if}

    {if $case_directoryDelete}

        <div class="image_directory_delete"><strong>{$CONST.DELETE_DIRECTORY}</strong></div>
        <div class="image_directory_delete_desc">{$CONST.DELETE_DIRECTORY_DESC}</div>
        <br />
        <br />
        <form id="image_directory_delete_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoDelete&amp;serendipity[dir]={$dir|escape:'html'}">
            {$formtoken}
            <table cellpadding="5">
                <tr>
                    <td width="100"><strong>{$CONST.NAME}</strong></td>
                    <td>{$basename_dir}</td>
                </tr>
                <tr>
                    <td colspan="2"><input class="input_checkbox" type="checkbox" name="serendipity[nuke]" value="true" style="margin: 0"> {$CONST.FORCE_DELETE}</td>
                </tr>
            </table>
            <br />
            <br />
            <div align="center">
                {$CONST.CONFIRM_DELETE_DIRECTORY|sprintf:$dir|escape:'html'}<br />
                <input name="SAVE" value="{$CONST.DELETE_DIRECTORY}" class="serendipityPrettyButton input_button" type="submit" />
            </div>
        </form>

    {/if}

    {if $case_directoryDoCreate}
        {** serendipity_plugin_api::hook_event('backend_directory_create', $nd); **}
        {if $print_DIRECTORY_CREATED}{$print_DIRECTORY_CREATED}{/if}
        {if $print_DIRECTORY_WRITE_ERROR}{$print_DIRECTORY_WRITE_ERROR}{/if}
    {/if}

    {if $case_directoryCreate}
        <div class="image_directory_create"><strong>{$CONST.CREATE_DIRECTORY}</strong></div>
        <div class="image_directory_create_desc">{$CONST.CREATE_DIRECTORY_DESC}</div>
        <br />
        <br />
        <form id="image_directory_create_form" method="POST" action="?serendipity[step]=directoryDoCreate&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoCreate">
            {$formtoken}
            <table cellpadding="5">
                <tr>
                    <td>{$CONST.NAME}</td>
                    <td><input class="input_textbox" type="text" name="serendipity[name]" value="" /></td>
                </tr>
                <tr>
                    <td>{$CONST.PARENT_DIRECTORY}</td>
                    <td>
                        <select name="serendipity[parent]">
                            <option value="">{$CONST.BASE_DIRECTORY}</option>
                        {foreach $folders as $folder}
                            <option {if $folder.relpath == $get.only_path}selected="selected"{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:"($folder.depth*2)"} {$folder.name}</option>
                        {/foreach}
                        </select>
                    </td>
                </tr>
                {** IS this **}
                {serendipity_hookPlugin hookAll=true hook="backend_directory_createoptions" addData=$folders}
                {** the right smarty template translation for
                <?php serendipity_plugin_api::hook_event('backend_directory_createoptions', $folders); ?> **}
            </table>
            <div>
                <input name="SAVE" value="{$CONST.CREATE_DIRECTORY}" class="serendipityPrettyButton input_button" type="submit">
            </div>
        </form>

    {/if}

    {if $case_directorySelect}

        <div class="image_directory_list">{$CONST.DIRECTORIES_AVAILABLE}</div>
        <br />
        <table id="image_directory_listing" border="0" cellspacing="0" cellpadding="4" width="100%">
            <tr>
                <td colspan="4"><strong>{$CONST.BASE_DIRECTORY}</strong></td>
            </tr>
            {foreach $folders as $folder}
            <tr>
                <td width="16"><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]={$folder.relpath|escape:'html'}"><img src="{serendipity_getFile file='admin/img/edit.png'}" border="0" alt="{$CONST.EDIT}" /></a></td>
                <td width="16"><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDelete&amp;serendipity[dir]={$folder.relpath|escape:'html'}"><img src="{serendipity_getFile file='admin/img/delete.png'}" alt="{$CONST.DELETE}" border="0"></a></td>
                <td style="padding-left: {$folder.depth*10}">{$folder.name}</td>
            </tr>
            {/foreach}
        </table>
        <br />
        <div><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryCreate" class="serendipityPrettyButton input_button">{$CONST.CREATE_NEW_DIRECTORY}</a></div>

    {/if}

    {if $case_addSelect}
        {** smarty display 'admin/media_upload.tpl' **}
    {/if}

    {if $case_rotateCW}
        {if $rotate_img_done}
            <script language="javascript" type="text/javascript">
            location.href="{$adminFile_redirect}";
            </script>
            <noscript><a href="{$adminFile_redirect}">{$CONST.DONE}</a></noscript>
        {/if}
    {/if}

    {if $case_rotateCCW}
        {if $rotate_img_done}
            <script language="javascript" type="text/javascript">
            location.href="{$adminFile_redirect}";
            </script>
            <noscript><a href="{$adminFile_redirect}">{$CONST.DONE}</a></noscript>
        {/if}
    {/if}

    {if $case_scale}
        {if $print_SCALING_IMAGE}{$print_SCALING_IMAGE}{/if}
        {if $print_serendipity_scaleImg}{$print_serendipity_scaleImg}<br />{/if}
        {$CONST.DONE}<br />
        {** Forward user to overview (we don't want the user's back button to rename things again) **}
        <script language="javascript" type="text/javascript">
            location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";
        </script>
        <noscript><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default">{$CONST.DONE}</a></noscript>
    {/if}

    {if $case_scaleSelect}
        <script type="text/javascript" language="javascript">
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

        {if $print_RESIZE_BLAHBLAH}{$print_RESIZE_BLAHBLAH}{/if}
        {if $print_ORIGINAL_SIZE}{$print_ORIGINAL_SIZE}{/if}
        {$CONST.HERE_YOU_CAN_ENTER_BLAHBLAH}

        <form name="serendipityScaleForm" action="?" method="GET">
            <div>
                {$CONST.NEWSIZE}
                {$formtoken}
                <input type="hidden" name="serendipity[adminModule]" value="images" />
                <input type="hidden" name="serendipity[adminAction]" value="scale" />
                <input type="hidden" name="serendipity[fid]"         value="{$get.fid}" />

                <input class="input_textbox" type="text" size="4" name="serendipity[width]"   onchange="rescale('width' , value);" value="{$img_width}" />
                <input class="input_textbox" type="text" size="4" name="serendipity[height]"  onchange="rescale('height', value);" value="{$img_height}" />
                <br />

                {$CONST.KEEP_PROPORTIONS}:
                <!-- <input type='button' value='preview'>-->
                <input class="input_checkbox" type="checkbox" name="auto"  checked="checked" /><br />
                <input type="button"   name="scale" value="{$CONST.IMAGE_RESIZE}" onclick="if (confirm('{$CONST.REALLY_SCALE_IMAGE}')) document.serendipityScaleForm.submit();" class="serendipityPrettyButton input_button" />
            </div>
        </form>

        <img src="{$file}" name="serendipityScaleImg" style="width: {$img_width}px; height: {$img_height}px;" alt="" />

    {/if}

    {if $case_default}
        {if $showML_def}{$showML_def}{/if}
    {/if}
