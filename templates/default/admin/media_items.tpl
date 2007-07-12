{foreach from=$media.files item="file" name="mediafiles" key="mediakey"}
    {if $media.enclose}
    <td nowrap="nowrap" align="center" valign="{if $media.manage}top{else}middle{/if}" width="{$media.lineBreakP}%" class="serendipity_admin_list_item serendipity_admin_list_item_even">
    {/if}

    {if NOT $media.manage}
        {$file.preview}{if $file.orderkey != ''}: {$file.orderkey|@escape}{/if}
    {else}
        <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td valign="top" width="16" rowspan="3">
                {if $file.is_editable}
                    <img class="serendipityImageButton" title="{$CONST.MEDIA_FULLSIZE}" alt="{$CONST.MEDIA_FULLSIZE}" src="{$media.zoomIMG}"   border="0" onclick="F1 = window.open('{if $file.hotlink}{$file.path}{else}{$file.full_file}{/if}', 'Zoom', 'height={$file.popupHeight},width={$file.popupWidth},top='+ (screen.height-{$file.popupHeight})/2 +',left='+ (screen.width-{$file.popupWidth})/2 +',toolbar=no,menubar=no,location=no,resize=1,resizable=1{if NOT $file.is_image},scrollbars=yes{/if}');" /><br />
                    <img class="serendipityImageButton" title="{$CONST.MEDIA_RENAME}"   alt="{$CONST.MEDIA_RENAME}"   src="{$media.renameIMG}" border="0" onclick="rename('{$file.id}', '{$file.name|escape:javascript}')" /><br />
                    {if $file.is_image AND NOT $file.hotlink}<img class="serendipityImageButton" title="{$CONST.IMAGE_RESIZE}"   alt="{$CONST.IMAGE_RESIZE}" src="{$media.resizeIMG}" border="0" onclick="location.href='?serendipity[adminModule]=images&amp;serendipity[adminAction]=scaleSelect&amp;serendipity[fid]={$file.id}';" /><br />{/if}
                    {if $file.is_image AND NOT $file.hotlink}<a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=rotateCCW&amp;serendipity[fid]={$file.id}"><img class="serendipityImageButton" title="{$CONST.IMAGE_ROTATE_LEFT}"  alt="{$CONST.IMAGE_ROTATE_LEFT}"  src="{$media.rotateccwIMG}" border="0" /></a><br />{/if}
                    {if $file.is_image AND NOT $file.hotlink}<a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=rotateCW&amp;serendipity[fid]={$file.id}"><img  class="serendipityImageButton" title="{$CONST.IMAGE_ROTATE_RIGHT}" alt="{$CONST.IMAGE_ROTATE_RIGHT}" src="{$media.rotatecwIMG}" border="0" /></a><br />{/if}
                    <a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=properties&amp;serendipity[fid]={$file.id}"><img class="serendipityImageButton" title="{$CONST.MEDIA_PROP}" alt="{$CONST.MEDIA_PROP}"    src="{$media.configureIMG}" border="0" /></a><br />
                    <a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=delete&amp;serendipity[fid]={$file.id}"><img class="serendipityImageButton" title="{$CONST.MEDIA_DELETE}"   alt="{$CONST.MEDIA_DELETE}"  src="{$media.deleteIMG}"    border="0" /></a><br />
                {/if}
                </td>
                <td colspan="2">
                    <div class="serendipity_media_filename" style="font-weight: bold; font-size: 8pt">{$file.realname}{if $file.orderkey != ''}: {$file.orderkey|@escape}{/if}</div>
                    <div class="serendipity_media_author"   style="font-size: 8pt">{if $file.authorid != 0}{$file.authorname}{else}<br />{/if}</div>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    {$file.preview}
                </td>
            </tr>
            <tr>
                <td colspan="2" height="10" align="center" style="font-size: 8pt">
                {if $file.hotlink}
                    {$file.nice_hotlink}
                {else}
                    {if $file.is_image}
                    {$CONST.ORIGINAL_SHORT}: {$file.dimensions_width}x{$file.dimensions_height},
                    {$CONST.THUMBNAIL_SHORT}: {$file.dim.0}x{$file.dim.1}<br />
                    {/if}
                    {$file.nice_size}kb {if $file.realname != $file.diskname} [{$file.diskname}]{/if}

                {/if}
                </td>
            </tr>
        </table>
    {/if}

    {if $media.enclose}
    </td>
    {/if}

    {if NOT $media.enclose}
        <h3>{$file.realname} [<em>{$file.mime}</em>{if $file.realname != $file.diskname}, {$file.diskname}{/if}]</h3>
        <div>
            {if $file.authorid != 0}{$CONST.POSTED_BY} {$file.authorname}{/if} {$CONST.ON} {$file.date|@formatTime:DATE_FORMAT_SHORT}.
            {if $file.hotlink}
                {$file.nice_hotlink}
            {elseif $file.is_image}
                {$CONST.ORIGINAL_SHORT}: {$file.dimensions_width}x{$file.dimensions_height},
                {$CONST.THUMBNAIL_SHORT}: {$file.dim.0}x{$file.dim.1}
            {/if}
             ({$file.nice_size}kb)
        </div>

        <input type="hidden" name="serendipity[mediaProperties][{$mediakey}][image_id]" value="{$file.image_id}" />
        <h3>{$CONST.MEDIA_PROP}</h3>
        <div>
        {foreach from=$file.base_property key="prop_fieldname" item="prop_content"}
            <label for="mediaProperty{$prop_fieldname}">{$prop_content.label}</label><br />
            <div>
            {if $prop_content.type == 'textarea'}
                <textarea cols="80" rows="5" id="mediaProperty{$prop_fieldname}" name="serendipity[mediaProperties][{$mediakey}][{$prop_content.title}]">{$prop_content.val|@escape}</textarea>
            {elseif $prop_content.type == 'readonly'}
                <div>{$prop_content.val|@escape}</div>
            {elseif $prop_content.type == 'input'}
                <input class="input_textbox" id="mediaProperty{$prop_fieldname}" type="text" name="serendipity[mediaProperties][{$mediakey}][{$prop_content.title}]" value="{$prop_content.val|@escape}" />
            {/if}
            </div>
        {/foreach}
        {if  NOT $file.hotlink}
            <label for="newDir{$mediakey}">{$CONST.FILTER_DIRECTORY}</label><br />
            <div>
                <input type="hidden" name="serendipity[oldDir][{$mediakey}]" value="{$file.path|@escape}" />
                <select id="newDir{$mediakey}" name="serendipity[newDir][{$mediakey}]">
                <option value=""></option>
                {foreach from=$media.paths item="folder"}
                <option {if ($file.path == $folder.relpath)}selected="selected"{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:$folder.depth*2}{$folder.name}</option>
                {/foreach}
                </select>
            </div>
        {/if}
            {if $file.is_image}
            <div>
                <br /><a target="_blank" class="serendipityPrettyButton input_button" href="serendipity_admin_image_selector.php?serendipity[adminModule]=images&amp;serendipity[adminAction]=imgedit&amp;serendipity[fid]={$file.id}">{$CONST.EDIT}</a>
            </div>
            {/if}
        </div>

        <h3>{$CONST.MEDIA_KEYWORDS}</h3>
        <div>
            <table>
            {foreach from=$file.base_keywords key="keyword_row" item="keyword_cells"}
                <tr>
                {foreach from=$keyword_cells key="keyword_cell" item="keyword"}
                    <td>
                    {if $keyword.name}
                        <input class="input_checkbox" id="mediaKeyword{$keyword.name}{$mediakey}" type="checkbox" name="serendipity[mediaKeywords][{$mediakey}][{$keyword.name}]" value="true" {if $keyword.selected}checked="checked"{/if} />&nbsp;<label for="mediaKeyword{$keyword.name}{$mediakey}">{$keyword.name}</label>
                    {else}
                        &nbsp;
                    {/if}
                    </td>
                {/foreach}
                </tr>
            {/foreach}
            </table>
        </div>

        <h3>EXIF/IPTC/XMP</h3>
        <div>
        <dl>
        {foreach from=$file.metadata key="meta_type" item="meta_data"}
            <dt><h4>{$meta_type}</h4></dt>
            <dd>
            {if is_array($meta_data)}
            <table>
            {foreach from=$meta_data key="meta_name" item="meta_value"}
                <tr>
                    <td valign="top"><em>{$meta_name}!</em></th>
                    <td>{if is_array($meta_value)}<pre>{$meta_value|@print_r}</pre>{else}{$meta_value|@formatTime:DATE_FORMAT_SHORT:false:$meta_name}{/if}</td>
                </tr>
            {/foreach}
            </table>
            {else}
            {$meta_data|@formatTime:DATE_FORMAT_SHORT:false:$meta_type}
            {/if}
            </dd>
        {/foreach}
        </dl>
        </div>

        {if $file.references}
        <h3>{$CONST.REFERER}</h3>
        <ul>
        {foreach from=$file.references item="ref"}
        <li>({$ref.name|@escape}) <a rel="nofollow" href="{$ref.link|@escape}">{$ref.link|@default:$CONST.NONE|@escape}</a></li>
        {/foreach}
        </ul>
        {/if}
    {/if}

    {if $media.enclose AND (($smarty.foreach.mediafiles.iteration % $media.lineBreak) == 0)}
    </tr><tr>
    {/if}
{/foreach}
