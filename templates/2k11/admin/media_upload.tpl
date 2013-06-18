{* Customization notes: All classnames and especially DOM IDs should be kept to keep compatibility with JavaScript calls! *}

<h2>{$CONST.ADD_MEDIA}</h2>

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
            <div class="form_field clearfix">
                {* Probably could use input[type=url] here … *}
                <label for="imageurl">{$CONST.ENTER_MEDIA_URL}</label>
                <input id="imageurl" class="check_input" name="serendipity[imageurl]" type="text" value="">
            </div>

            <div class="form_select clearfix">
                <label for="serendipity_imageimporttype">{$CONST.ENTER_MEDIA_URL_METHOD}</label>
                <select name="serendipity[imageimporttype]">
                    <option value="image">{$CONST.FETCH_METHOD_IMAGE}</option>
                    <option value="hotlink">{$CONST.FETCH_METHOD_HOTLINK}</option>
                </select>
            </div>

            <span class="standalone hilite_b">{$CONST.WORD_OR}</span>
        </div>

        <div id="upload_template" class="hidden">
            <div class="form_field clearfix">
                <label for="userfile_1" class="uploadform_userfile_label">{$CONST.ENTER_MEDIA_UPLOAD}</label>
                <input id="userfile_1" class="uploadform_userfile check_input" name="serendipity[userfile][1]" type="file">
            </div>

            <div class="form_field clearfix">
                <label for="target_filename_1" class="uploadform_target_filename_label">{$CONST.SAVE_FILE_AS} <span class="input-desc image-upload">{$CONST.PLAIN_ASCII_NAMES}</span></label>
                <input id="target_filename_1" class="uploadform_target_filename" name="serendipity[target_filename][1]" type="text" value="">
            </div>

            <div class="form_select clearfix">
                <label for="target_directory_1" class="uploadform_target_directory_label">{$CONST.STORE_IN_DIRECTORY}</label>
                <select id="target_directory_1" class="uploadform_target_directory" name="serendipity[target_directory][1]">
                    <option value="">{$CONST.BASE_DIRECTORY}</option>
                    {foreach from=$media.folders item="folder"}
                    <option{if $media.only_path == $folder.relpath} selected{/if} value="{$folder.relpath}">{'&nbsp;'|@str_repeat:($folder.depth*2)} {$folder.name}</option>
                    {/foreach}
                </select>
            </div>

            <div id="ccounter"><input id="column_count_1" class="uploadform_column_count" type="hidden" name="serendipity[column_count][1]" value="true"></div>
        </div>

        <div id="debug"></div>
        {* Placeholder for upload form, gets duplicated if users uploads multiple files *}
        <span id="upload_form"></span>
        {serendipity_hookPlugin hook="backend_image_addform" hookAll=true}

        <div class="form_buttons">
            <input id="add_upload" type="button" value="{$CONST.IMAGE_MORE_INPUT}">
            <input id="all_authors" name="serendipity[all_authors]" type="hidden" value="true" checked="checked">
        </div>
        
        <div class="form_buttons">
            <input class="check_inputs" type="submit" value="{$CONST.GO}">
            <span class="hilite_b"> {$CONST.WORD_OR} </span>
            <input class="check_inputs" name="go_properties" type="submit" value="{$CONST.GO_ADD_PROPERTIES|@escape}">
        </div>
    </div>
</form>

<div class="image_add_note">{$CONST.ADD_MEDIA_BLAHBLAH_NOTE}</div>
