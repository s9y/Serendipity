{* HTML5: Yes  *}
{* jQuery: No *}

{foreach from=$media.files item="file" name="mediafiles" key="mediakey"}
    {if NOT $media.manage}
        <div class="media_file_preview">
            {$file.preview}
        {if $file.orderkey != ''}
            <span>{$file.orderkey|@escape}</span>
        {/if}
        </div>
    {else}
        <article class="media_file">
            <header>
                <h3>{$file.realname}{if $file.orderkey != ''}: {$file.orderkey|@escape}{/if}</h3>
                {if $file.authorid != 0}<span class="author">{$file.authorname}</span>{/if}
            </header>

            <div class="media_file_preview">
            {$file.preview}
            </div>
        {if $file.is_editable}
            <ul class="media_file_actions plainList">
                <li><a id="media_fullsize" class="icon_link" href="#" title="{$CONST.MEDIA_FULLSIZE}" onclick="F1 = window.open('{if $file.hotlink}{$file.path}{else}{$file.full_file}{/if}', 'Zoom', 'height={$file.popupHeight},width={$file.popupWidth},top='+ (screen.height-{$file.popupHeight})/2 +',left='+ (screen.width-{$file.popupWidth})/2 +',toolbar=no,menubar=no,location=no,resize=1,resizable=1{if NOT $file.is_image},scrollbars=yes{/if}');"><span class="icon-resize-full-alt"></span><span class="visuallyhidden"> {$CONST.MEDIA_FULLSIZE}</span></a></li>
                <li><a id="media_rename" class="icon_link" href="#" title="{$CONST.MEDIA_RENAME}" onclick="rename('{$file.id}', '{$file.name|escape:javascript}')"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.MEDIA_RENAME}</span></a></li>
            {if $file.is_image AND NOT $file.hotlink}
                <li><a id="media_resize" class="icon_link" href="#" title="{$CONST.IMAGE_RESIZE}" onclick="location.href='?serendipity[adminModule]=images&amp;serendipity[adminAction]=scaleSelect&amp;serendipity[fid]={$file.id}';"><span class="icon-resize-full"></span><span class="visuallyhidden"> {$CONST.IMAGE_RESIZE}</span></a></li>
            {/if}
            {if $file.is_image AND NOT $file.hotlink}
                <li><a id="media_rotate_left" class="icon_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=rotateCCW&amp;serendipity[fid]={$file.id}" title="{$CONST.IMAGE_ROTATE_LEFT}"><span class="icon-ccw"></span><span class="visuallyhidden"> {$CONST.IMAGE_ROTATE_LEFT}</span></a></li>
            {/if}
            {if $file.is_image AND NOT $file.hotlink}
                <li><a id="media_rotate_right" class="icon_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=rotateCW&amp;serendipity[fid]={$file.id}" title="{$CONST.IMAGE_ROTATE_RIGHT}"><span class="icon-cw"></span><span class="visuallyhidden">{$CONST.IMAGE_ROTATE_RIGHT}</span></a></li>
            {/if}
                <li><a id="media_prop" class="icon_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=properties&amp;serendipity[fid]={$file.id}" title="{$CONST.MEDIA_PROP}"><span class="icon-picture"></span><span class="visuallyhidden"> {$CONST.MEDIA_PROP}</span></a></li>
                <li><a id="media_delete" class="icon_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=delete&amp;serendipity[fid]={$file.id}" title="{$CONST.MEDIA_DELETE}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.MEDIA_DELETE}</span></a></li>
                <li><input id="multidelete_image{$file.id}" name="serendipity[multiDelete][]" type="checkbox" value="{$file.id}">
                    <label for="multidelete_image{$file.id}" class="visuallyhidden">Select for multidelete</label> {* i18n *}
                </li>
            </ul>
        {/if}
            <footer>
                <ul class="media_file_meta plainList">
            {if $file.hotlink}
                    <li>{$file.nice_hotlink}</li>
            {else}
                {if $file.is_image}
                    <li><b>{$CONST.ORIGINAL_SHORT}:</b> {$file.dimensions_width}x{$file.dimensions_height}</li>
                    <li><b>{$CONST.THUMBNAIL_SHORT}:</b> {$file.dim.0}x{$file.dim.1}</li>
                {/if}
                    <li>{$file.nice_size} KB</li>
                {if $file.realname != $file.diskname}
                    <li>{$file.diskname}</li>
                {/if}
            {/if}
                </ul>
            </footer>
        </article>
    {/if}

    {if NOT $media.enclose}
        <article class="media_file media_enclose_no">
            <header>
                <h3>{$file.realname}</h3>
                <span>{$file.mime}{if $file.realname != $file.diskname}, {$file.diskname}{/if}</span>
            </header>

            <footer>
                <ul class="media_file_meta plainList">
                    <li>{if $file.authorid != 0}{$CONST.POSTED_BY} {$file.authorname} {/if}{$CONST.ON} {$file.date|@formatTime:DATE_FORMAT_SHORT}</li>
                {if $file.hotlink}
                    <li>{$file.nice_hotlink}</li>
                {elseif $file.is_image}
                    <li><b>{$CONST.ORIGINAL_SHORT}:</b> {$file.dimensions_width}x{$file.dimensions_height}</li>
                    <li><b>{$CONST.THUMBNAIL_SHORT}:</b> {$file.dim.0}x{$file.dim.1}</li>
                {/if}
                    <li>{$file.nice_size} KB</li>
                </ul>
            </footer>
        
            <input type="hidden" name="serendipity[mediaProperties][{$mediakey}][image_id]" value="{$file.image_id}">

            <section class="media_file_props">
                <h4>{$CONST.MEDIA_PROP}</h4>
            {foreach from=$file.base_property key="prop_fieldname" item="prop_content"}
                <div class="form_{if $prop_content.type == 'textarea'}area{else}field{/if}">
                    <label for="mediaProperty{$prop_fieldname}">{$prop_content.label}</label>
                {if $prop_content.type == 'textarea'}
                    <textarea id="mediaProperty{$prop_fieldname}" name="serendipity[mediaProperties][{$mediakey}][{$prop_content.title}]" rows="5">{$prop_content.val|@escape}</textarea>
                {elseif $prop_content.type == 'readonly'}
                    {$prop_content.val|@escape}
                {elseif $prop_content.type == 'input'}
                    <input id="mediaProperty{$prop_fieldname}" name="serendipity[mediaProperties][{$mediakey}][{$prop_content.title}]" type="text" value="{$prop_content.val|@escape}">
                {/if}
                </div>
            {/foreach}
            {if  NOT $file.hotlink}
                <div class="form_select">
                    <label for="newDir{$mediakey}">{$CONST.FILTER_DIRECTORY}</label>
                    <input type="hidden" name="serendipity[oldDir][{$mediakey}]" value="{$file.path|@escape}">
                    <select id="newDir{$mediakey}" name="serendipity[newDir][{$mediakey}]">
                        <option value=""></option>
                    {foreach from=$media.paths item="folder"}
                        <option {if ($file.path == $folder.relpath)}selected="selected"{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:($folder.depth*2)}{$folder.name}</option>
                    {/foreach}
                    </select>
                </div>
            {/if}
            {if $file.is_image}
                <a class="block_level opens_window" href="serendipity_admin_image_selector.php?serendipity[adminModule]=images&amp;serendipity[adminAction]=imgedit&amp;serendipity[fid]={$file.id}">{$CONST.EDIT}</a>
            {/if}
            </section>

            <section class="media_file_keywords">
                <h4>{$CONST.MEDIA_KEYWORDS}</h4>

                <ul class="plainList">
                {foreach from=$file.base_keywords key="keyword_row" item="keyword_cells"}
                    {foreach from=$keyword_cells key="keyword_cell" item="keyword"}
                    {if $keyword.name}
                    <li><input id="mediaKeyword{$keyword.name}{$mediakey}" name="serendipity[mediaKeywords][{$mediakey}][{$keyword.name}]" type="checkbox" value="true"{if $keyword.selected} checked="checked"{/if}>
                        <label for="mediaKeyword{$keyword.name}{$mediakey}">{$keyword.name}</label></li>
                    {/if}
                    {/foreach}
                {/foreach}
                </ul>
            </section>

            <section class="media_file_metadata">
                <h4>EXIF/IPTC/XMP</h4>

                <dl>
            {foreach from=$file.metadata key="meta_type" item="meta_data"}
                    <dt>{$meta_type}</dt>
                {if is_array($meta_data)}
                    {foreach from=$meta_data key="meta_name" item="meta_value"}
                    <dd class="meta_name">{$meta_name}!</dd>
                    <dd class="meta_value">{if is_array($meta_value)}<pre>{$meta_value|@print_r}</pre>{else}{$meta_value|@formatTime:DATE_FORMAT_SHORT:false:$meta_name}{/if}</dd>
                    {/foreach}
                {else}
                    <dd>{$meta_data|@formatTime:DATE_FORMAT_SHORT:false:$meta_type}</dd>
                {/if}
            {/foreach}
                </dl>
            </section>
        {if $file.references}
            <section class="media_file_referer">
                <h4>{$CONST.REFERER}</h4>

                <ul>
                {foreach from=$file.references item="ref"}
                    <li>({$ref.name|@escape}) <a rel="nofollow" href="{$ref.link|@escape}">{$ref.link|@default:$CONST.NONE|@escape}</a></li>
                {/foreach}
                </ul>
            </section>
        {/if}
        </article>
    {/if}
{/foreach}
