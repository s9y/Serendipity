{* HTML5: No  *}
{* jQuery: No *}

{* Customization notes: All classnames and especially DOM IDs should be kept to keep compatibility with JavaScript calls! *}

<script src="{$serendipityHTTPPath}serendipity_editor.js"></script>

<div class="image_add_form">{$CONST.ADD_MEDIA_BLAHBLAH}</div>

<form id="uploadform" action="?" method="POST" enctype="multipart/form-data" onsubmit="rememberUploadOptions()">
    <div>
    {if $media.max_file_size}
        <input name="MAX_FILE_SIZE" type="hidden" value="{$max_file_size}">
    {/if}
        {$media.token}
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="images">
        <input name="serendipity[adminAction]" type="hidden" value="add">
        {$media.form_hidden}
        <div id="foreign_upload" class="image_add_foreign">
            <div class="form_field">
                <label for="imageurl">{$CONST.ENTER_MEDIA_URL}</label>
                <input id="imageurl" name="serendipity[imageurl]" type="text" onchange="checkInputs()" value="">
            </div>

            <div class="form_select">
                <label for="serendipity_imageimporttype">{$CONST.ENTER_MEDIA_URL_METHOD}</label>
                <select name="serendipity[imageimporttype]">
                    <option value="image">{$CONST.FETCH_METHOD_IMAGE}</option>
                    <option value="hotlink">{$CONST.FETCH_METHOD_HOTLINK}</option>
                </select>
            </div>
            <span class="standout"> {$CONST.WORD_OR} </span>
        </div>

        <!-- WARNING: Do not change spacing or breaks below. If you do, the JavaScript childNodes need to be edited. Newlines count as nodes! -->
        <div id="upload_template">
        <table style="margin-top: 35px" id="upload_table" class="image_add_local">
            <tr>
                <td nowrap='nowrap'>{$CONST.ENTER_MEDIA_UPLOAD}</td>
                <td><input class="input_file uploadform_userfile" id="userfile_1" name="serendipity[userfile][1]" onchange="checkInputs();" type="file"></td>
            </tr>

            <tr>
                <td align="center" colspan="2"><br></td>
            </tr>

            <tr>
                <td>{$CONST.SAVE_FILE_AS}</td>
                <td><input class="input_textbox uploadform_target_filename" type="text" id="target_filename_1" name="serendipity[target_filename][1]" value="" size="40"><span class="input-desc image-upload">{$CONST.PLAIN_ASCII_NAMES}</span></td>
            </tr>

            <tr>
                <td>{$CONST.STORE_IN_DIRECTORY}</td>
                <td><select class="uploadform_target_directory" id="target_directory_1" name="serendipity[target_directory][1]">
                    <option value="">{$CONST.BASE_DIRECTORY}</option>
                    {foreach from=$media.folders item="folder"}
                    <option {if $media.only_path == $folder.relpath}selected="selected"{/if} value="{$folder.relpath}">{'&nbsp;'|@str_repeat:($folder.depth*2)} {$folder.name}</option>
                    {/foreach}
                    </select>
                </td>
            </tr>
       </table>
       <div id="ccounter"><input class="uploadform_column_count" type="hidden" name="serendipity[column_count][1]" id="column_count_1" value="true" /></div>
       </div>

       <div id="debug">
       </div>

       {* Placeholder for upload form, gets duplicated if users uploads multiple files *}
       <span id="upload_form"></span>
       <script>
            document.getElementById('upload_template').style.display  = 'none';
            addUploadField();
       </script>

        {serendipity_hookPlugin hook="backend_image_addform" hookAll=true}

        <div class="form_buttons">
            <input type="button" value="{$CONST.IMAGE_MORE_INPUT}" onclick="hideForeign(); addUploadField()">
            <input id="all_authors" name="serendipity[all_authors]" type="hidden" value="true" checked="checked">
        </div>
        
        <div class="form_buttons">
            <input type="submit" value="{$CONST.GO}" onclick="checkInputs();">
            <span class="standout"> {$CONST.WORD_OR} </span>
            <input name="go_properties" type="submit" value="{$CONST.GO_ADD_PROPERTIES|@escape}" onclick="checkInputs();">
        </div>
    </div>
</form>

<div class="image_add_note">{$CONST.ADD_MEDIA_BLAHBLAH_NOTE}</div>
