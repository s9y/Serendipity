<h2>{$CONST.ADD_MEDIA}</h2>

<form id="uploadform" action="?" method="POST" enctype="multipart/form-data">
    <div>
    {if $media.max_file_size}
        <input name="MAX_FILE_SIZE" type="hidden" value="{$max_file_size}">
    {/if}
        {$media.token}
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="images">
        <input name="serendipity[adminAction]" type="hidden" value="add">
        {$media.form_hidden}

        <div id="uploads">
            <div id="upload_form_1" class="upload_form">
                <div class="form_field clearfix">
                    <label for="userfile_1" class="uploadform_userfile_label">{$CONST.ENTER_MEDIA_UPLOAD}</label>
                    <input id="userfile_1" class="uploadform_userfile check_input" name="serendipity[userfile][1]" type="file">
                </div>

                <div class="form_field clearfix">
                    <label for="target_filename_1" class="uploadform_target_filename_label">{$CONST.SAVE_FILE_AS} <span>{$CONST.PLAIN_ASCII_NAMES}</span></label>
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
        </div>
        {serendipity_hookPlugin hook="backend_image_addform" hookAll=true}
        <div class="form_buttons">
            <input id="all_authors" name="serendipity[all_authors]" type="hidden" value="true" checked="checked">

            <a id="add_upload" class="button_link" href="#" title="{$CONST.IMAGE_MORE_INPUT}"><span class="icon-plus"></span><span class="visuallyhidden"> {$CONST.IMAGE_MORE_INPUT}</span></a>
            <input class="check_inputs" type="submit" value="{$CONST.GO}">
            <input class="check_inputs" name="go_properties" type="submit" value="{$CONST.GO_ADD_PROPERTIES|@escape}">
        </div>
    </div>
</form>
