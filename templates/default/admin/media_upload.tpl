<div class="image_add_form">{$CONST.ADD_MEDIA_BLAHBLAH}</div>

<script type="text/javascript">
// Function prototype inspired by http://molily.de/javascript-nodelist
function showNodes(n) {ldelim}
    var html;
    html = '<!--nodeset--><li>';

    switch (n.nodeType) {ldelim}
        case 1:
            html += 'Type is <em>' + n.nodeName + '<\/em>';
            if (n.hasChildNodes()) {ldelim}
                ausgabe += ' - childNodes: ' + n.childNodes.length;
            {rdelim}
            break;

        case 3:
            var nval = n.nodeValue.replace(/</g, '&lt;').replace(/\n/g, '\\n');
            html += 'Content: <strong>' + nval + '<\/strong>';
            break;

        case 8:
            var nval = n.nodeValue.replace(/</g, '&lt;').replace(/\n/g, '\\n');
            html += 'Hidden: <em>' + nval + '<\/em>';
            break;

        default:
            html += 'Type is ' + n.nodeType + ', Content is <strong>' + n.nodeValue + '<\/strong>';
    }

    if (n.hasChildNodes()) {ldelim}
        html += '\n<ol>\n';
        for (i=0; i < n.childNodes.length; i++) {ldelim}
            j = n.childNodes[i];
            html += showNodes(j);
        {rdelim}
        html += '</ol>\n';
    {rdelim}
    html += '</li>\n';

    return html;
{rdelim}

function getfilename(value) {ldelim}
    re = /^.+[\/\\]+?(.+)$/;
    return value.replace(re, "$1");
{rdelim}

isFileUpload = true;
function hideForeign() {ldelim}
    document.getElementById('foreign_upload').style.display = 'none';
    document.getElementById('imageurl').value = '';
    isFileUpload = false;
{rdelim}

var fieldcount = 1;
function addField() {ldelim}
    fieldcount++;

    fields = document.getElementById('upload_template').cloneNode(true);
    fields.id = 'upload_form_' + fieldcount;
    fields.style.display = 'block';

    // Get the DOM outline be uncommenting this:
    //document.getElementById('debug').innerHTML = showNodes(fields);

    // garvin: This gets a bit weird. Opera, Mozilla and IE all have their own numbering.
    // We cannot operate on "ID" basis, since a unique ID is not yet set before instancing.
    if (fields.childNodes[0].nodeValue == null) {ldelim}
        // This is Internet Explorer, it does not have a linebreak as first element.
        userfile       = fields.childNodes[0].childNodes[0].childNodes[0].childNodes[1].childNodes[0];
        targetfilename = fields.childNodes[0].childNodes[0].childNodes[2].childNodes[1].childNodes[0];
        targetdir      = fields.childNodes[0].childNodes[0].childNodes[3].childNodes[1].childNodes[0];
        columncount    = fields.childNodes[1].childNodes[0];
    {rdelim} else {ldelim}
        // We have a browser which has \n's as their own nodes. Don't ask me. Now let's check if it's Opera or Mozilla.
        if (fields.childNodes[1].childNodes[0].nodeValue == null) {ldelim}
            // This is Opera.
            userfile       = fields.childNodes[1].childNodes[0].childNodes[0].childNodes[1].childNodes[0];
            targetfilename = fields.childNodes[1].childNodes[0].childNodes[2].childNodes[1].childNodes[0];
            targetdir      = fields.childNodes[1].childNodes[0].childNodes[3].childNodes[1].childNodes[0];
            columncount    = fields.childNodes[3].childNodes[0];
        {rdelim} else if (fields.childNodes[1].childNodes[1].childNodes[0].childNodes[3] == null) {ldelim}
        	// This is Safari.
            userfile       = fields.childNodes[1].childNodes[1].childNodes[0].childNodes[1].childNodes[0];
            targetfilename = fields.childNodes[1].childNodes[1].childNodes[2].childNodes[1].childNodes[0];
            targetdir      = fields.childNodes[1].childNodes[1].childNodes[3].childNodes[1].childNodes[0];
            columncount    = fields.childNodes[3].childNodes[0];
        {rdelim} else {ldelim}
            // This is Mozilla.
            userfile       = fields.childNodes[1].childNodes[1].childNodes[0].childNodes[3].childNodes[0];
            targetfilename = fields.childNodes[1].childNodes[1].childNodes[4].childNodes[3].childNodes[0];
            targetdir      = fields.childNodes[1].childNodes[1].childNodes[6].childNodes[3].childNodes[0];
            columncount    = fields.childNodes[3].childNodes[0];
        {rdelim}
    {rdelim}

    userfile.id   = 'userfile_' + fieldcount;
    userfile.name = 'serendipity[userfile][' + fieldcount + ']';

    targetfilename.id   = 'target_filename_' + fieldcount;
    targetfilename.name = 'serendipity[target_filename][' + fieldcount + ']';

    targetdir.id   = 'target_directory_' + fieldcount;
    targetdir.name = 'serendipity[target_directory][' + fieldcount + ']';

    columncount.id   = 'column_count_' + fieldcount;
    columncount.name = 'serendipity[column_count][' + fieldcount + ']';

    iNode = document.getElementById('upload_form');
    iNode.parentNode.insertBefore(fields, iNode);

    document.getElementById(targetdir.id).selectedIndex = document.getElementById('target_directory_' + (fieldcount - 1)).selectedIndex;
{rdelim}

var inputStorage = new Array();
function checkInputs() {ldelim}
    for (i = 1; i <= fieldcount; i++) {ldelim}
        if (!inputStorage[i]) {ldelim}
            fillInput(i, i);
        {rdelim} else if (inputStorage[i] == document.getElementById('target_filename_' + i).value) {ldelim}
            fillInput(i, i);
        {rdelim}
    {rdelim}

{rdelim}

function debugFields() {ldelim}
    for (i = 1; i <= fieldcount; i++) {ldelim}
        debugField('target_filename_' + i);
        debugField('userfile_' + i);
    {rdelim}
{rdelim}

function rememberOptions() {ldelim}
    td     = document.getElementById('target_directory_2');
    td_val = td.options[td.selectedIndex].value;
    SetCookie("addmedia_directory", td_val);
{rdelim}

function debugField(id) {ldelim}
    alert(id + ': ' + document.getElementById(id).value);
{rdelim}

function fillInput(source, target) {ldelim}
    useDuplicate = false;

    // First field is a special value for foreign URLs instead of uploaded files
    if (source == 1 && document.getElementById('imageurl').value != "") {ldelim}
        sourceval = getfilename(document.getElementById('imageurl').value);
        useDuplicate = true;
    {rdelim} else {ldelim}
        sourceval = getfilename(document.getElementById('userfile_' + source).value);
    {rdelim}

    if (sourceval.length > 0) {ldelim}
        document.getElementById('target_filename_' + target).value = sourceval;
        inputStorage[target] = sourceval;
    {rdelim}

    // Display filename in duplicate form as well!
    if (useDuplicate) {ldelim}
        tkey = target + 1;

        if (!inputStorage[tkey] || inputStorage[tkey] == document.getElementById('target_filename_' + tkey).value) {ldelim}
            document.getElementById('target_filename_' + (target+1)).value = sourceval;
            inputStorage[target + 1] = '~~~';
        {rdelim}
    {rdelim}
{rdelim}
</script>

<form action="?" method="POST" id="uploadform" enctype="multipart/form-data" onsubmit="rememberOptions()">
    <div>
        {if $media.max_file_size}
        <input type="hidden" name="MAX_FILE_SIZE" value="{$max_file_size}" />
        {/if}
        {$media.token}
        <input type="hidden" name="serendipity[action]"      value="admin" />
        <input type="hidden" name="serendipity[adminModule]" value="images" />
        <input type="hidden" name="serendipity[adminAction]" value="add" />
        {$media.form_hidden}
        <table id="foreign_upload" class="image_add_foreign">
            <tr>
                <td nowrap="nowrap">{$CONST.ENTER_MEDIA_URL}</td>
                <td><input class="input_textbox" type="text" id="imageurl" name="serendipity[imageurl]"
                         onchange="checkInputs()"
                          value=""
                           size="40" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap">{$CONST.ENTER_MEDIA_URL_METHOD}</td>
                <td>
                    <select name="serendipity[imageimporttype]">
                        <option value="image">{$CONST.FETCH_METHOD_IMAGE}</option>
                        <option value="hotlink">{$CONST.FETCH_METHOD_HOTLINK}</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="center" colspan="2"><b> - {$CONST.WORD_OR} - </b></td>
            </tr>
        </table>

        <!-- WARNING: Do not change spacing or breaks below. If you do, the JavaScript childNodes need to be edited. Newlines count as nodes! -->
        <div id="upload_template">
        <table style="margin-top: 35px" id="upload_table" class="image_add_local">
            <tr>
                <td nowrap='nowrap'>{$CONST.ENTER_MEDIA_UPLOAD}</td>
                <td><input class="input_file" id="userfile_1" name="serendipity[userfile][1]"
                         onchange="checkInputs();"
                           type="file" /></td>
            </tr>

            <tr>
                <td align="center" colspan="2"><br /></td>
            </tr>

            <tr>
                <td>{$CONST.SAVE_FILE_AS}</td>
                <td><input class="input_textbox" type="text" id="target_filename_1" name="serendipity[target_filename][1]" value="" size="40" /></td>
            </tr>

            <tr>
                <td>{$CONST.STORE_IN_DIRECTORY}</td>
                <td><select id="target_directory_1" name="serendipity[target_directory][1]">
                    <option value="">{$CONST.BASE_DIRECTORY}</option>
                    {foreach from=$media.folders item="folder"}
                    <option {if $media.only_path == $folder.relpath}selected="selected"{/if} value="{$folder.relpath}">{'&nbsp;'|@str_repeat:$folder.depth*2} {$folder.name}</option>
                    {/foreach}
                    </select>
                </td>
            </tr>
       </table>
       <div id="ccounter"><input type="hidden" name="serendipity[column_count][1]" id="column_count_1" value="true" /></div>
       </div>

       <div id="debug">
       </div>

       <script type="text/javascript">
            document.getElementById('upload_template').style.display  = 'none';
            document.write('<span id="upload_form"><' + '/span>');
            addField();
       </script>

        {serendipity_hookPlugin hook="backend_image_addform" hookAll=true}

        <div style="text-align: center; margin-top: 15px; margin-bottom: 15px">
            <script type="text/javascript">
                document.write('<input class="serendipityPrettyButton input_button" type="button" value="{$CONST.IMAGE_MORE_INPUT}" onclick="hideForeign(); addField()"' + '/><br' + '/>');
            </script>
            <input type="hidden" name="serendipity[all_authors]" value="true" checked="checked" id="all_authors" />
            <br />
            <input onclick="checkInputs();" type="submit" value="{$CONST.GO}" class="serendipityPrettyButton input_button" />
            - {$CONST.WORD_OR} -
            <input onclick="checkInputs();" name="go_properties" type="submit" value="{$CONST.GO_ADD_PROPERTIES|@escape}" class="serendipityPrettyButton input_button" />
        </div>
    </div>
    <div class="image_add_note">{$CONST.ADD_MEDIA_BLAHBLAH_NOTE}</div>
</form>

