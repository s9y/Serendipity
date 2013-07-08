{foreach from=$media.files item="file" name="mediafiles" key="mediakey"}
    {if NOT $media.manage}
        <article class="media_wrap_thumb {cycle values="odd,even"}">
            <div class="media_file_thumb{if $media.enclose} equal_heights{/if}">
            {if $file.is_image AND $file.full_thumb}
                {if $file.url}
                <a href="{$file.url}&amp;serendipity[image]={$file.id}">
                {/if}
                    <img src="{$file.full_thumbHTTP}" title="{$file.path}{$file.name}" alt="{$file.realname}">
                {if $file.url}
                </a>
                {/if}
            {elseif $file.is_image AND $file.hotlink}
                {if $file.url}
                <a href="{$file.$url}&amp;serendipity[image]={$file.id}">
                {/if}
                    <img src="{$file.path}" width="{$file.thumbWidth}" height="{$file.thumbHeight}" title="{$file.path}" alt="{$file.realname}">
                {if $file.url}
                </a>
                {/if}
            {else}
                {if $file.url}
                <a href="{$file.$url}&amp;serendipity[image]={$file.id}">
                {/if}
                    <img src="{$file.mimeicon}" title="{$file.path}{$file.name}({$file.mime})" alt="{$file.mime}">
                    <span class="block_level">{if $file.hotlink}{$CONST.MEDIA_HOTLINKED}{else}{$file.mime}{/if}</span>
                {if $file.url}
                </a>
                {/if}
            {/if}
            {if $file.orderkey != ''}
                <span>{$file.orderkey|@escape}</span>
            {/if}
            </div>
        </article>
    {else}
        <article id="media_{$file.id}" class="media_file {cycle values="odd,even"}">
            <header class="clearfix">
                <div class="form_check">
                    <input id="multidelete_image{$file.id}" class="multidelete" name="serendipity[multiDelete][]" type="checkbox" value="{$file.id}" data-multidelid="media_{$file.id}"><label for="multidelete_image{$file.id}" class="visuallyhidden">Select for multidelete</label> {* i18n *}
                </div>

                <h3 title="{$file.realname}">{$file.realname|truncate:30:"&hellip;"}{if $file.orderkey != ''}: {$file.orderkey|@escape}{/if}</h3>
                {if $file.authorid != 0}<span class="author block_level">{$file.authorname}</span>{/if}
            </header>

            <div class="clearfix equal_heights media_file_wrap">
                <div class="media_file_preview">
                    {if $file.is_image AND $file.full_thumb}
                        {if $file.url}
                        <a href="{$file.$url}&amp;serendipity[image]={$file.id}">
                        {/if}
                            <img src="{$file.full_thumbHTTP}" title="{$file.path}{$file.name}" alt="{$file.realname}">
                        {if $file.url}
                        </a>
                        {/if}
                    {elseif $file.is_image AND $file.hotlink}
                        {if $file.url}
                        <a href="{$file.$url}&amp;serendipity[image]={$file.id}">
                        {/if}
                            <img src="{$file.path}" width="{$file.thumbWidth}" height="{$file.thumbHeight}" title="{$file.path}" alt="{$file.realname}">
                        {if $file.url}
                        </a>
                        {/if}
                    {else}
                        {if $file.url}
                        <a href="{$file.$url}&amp;serendipity[image]={$file.id}">
                        {/if}
                            <img src="{$file.mimeicon}" title="{$file.path}{$file.name}({$file.mime})" alt="{$file.mime}">
                        {if $file.url}
                        </a>
                        {/if}
                    {/if}
                    <footer id="media_file_meta_{$file.id}" class="media_file_meta additional_info">
                        <ul class="plainList">
                        {if $file.hotlink}
                            <li>{$file.nice_hotlink}</li>
                            <li>{$CONST.MEDIA_HOTLINKED}</li>
                        {else}
                            {if $file.realname != $file.diskname}
                            <li title="{$file.diskname}">{$file.diskname|truncate:30:"&hellip;"}</li>
                            {/if}
                            {if $file.mime}
                            <li><b>Mime-Type:</b> {$file.mime}</li> {* i18n *}
                            {/if}
                            {if $file.is_image}
                            <li><b>{$CONST.ORIGINAL_SHORT}:</b> {$file.dimensions_width}x{$file.dimensions_height}</li>
                            <li><b>{$CONST.THUMBNAIL_SHORT}:</b> {$file.dim.0}x{$file.dim.1}</li>
                            {/if}
                            <li><b>{$CONST.IMAGE_SIZE}:</b> {$file.nice_size} KB</li>
                        {/if}
                        </ul>
                    </footer>
                </div>
            </div>

            <ul class="media_file_actions actions plainList clearfix">
                <li><a class="media_show_info button_link" href="#media_file_meta_{$file.id}" title="Show media info"><span class="icon-info-circled"></span><span class="visuallyhidden"> Show media info</span></a></li> {* i18n *}
            {if $file.is_editable}
                <li><a class="media_fullsize button_link" href="{if $file.hotlink}{$file.path}{else}{$file.full_file}{/if}" title="{$CONST.MEDIA_FULLSIZE}: {$file.realname}" data-pwidth="{$file.popupWidth}" data-pheight="{$file.popupHeight}"><span class="icon-resize-full-alt"></span><span class="visuallyhidden"> {$CONST.MEDIA_FULLSIZE}</span></a></li>
                <li><a class="media_rename button_link" href="#" title="{$CONST.MEDIA_RENAME}" data-fileid="{$file.id}" data-filename="{$file.name|escape:javascript}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.MEDIA_RENAME}</span></a></li>
                {if $file.is_image AND NOT $file.hotlink}
                <li><a class="media_resize button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=scaleSelect&amp;serendipity[fid]={$file.id}'" title="{$CONST.IMAGE_RESIZE}"><span class="icon-resize-full"></span><span class="visuallyhidden"> {$CONST.IMAGE_RESIZE}</span></a></li>
                {/if}
                {if $file.is_image AND NOT $file.hotlink}
                <li><a class="media_rotate_left button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=rotateCCW&amp;serendipity[fid]={$file.id}" title="{$CONST.IMAGE_ROTATE_LEFT}"><span class="icon-ccw"></span><span class="visuallyhidden"> {$CONST.IMAGE_ROTATE_LEFT}</span></a></li>
                {/if}
                {if $file.is_image AND NOT $file.hotlink}
                <li><a class="media_rotate_right button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=rotateCW&amp;serendipity[fid]={$file.id}" title="{$CONST.IMAGE_ROTATE_RIGHT}"><span class="icon-cw"></span><span class="visuallyhidden">{$CONST.IMAGE_ROTATE_RIGHT}</span></a></li>
                {/if}
                <li><a class="media_prop button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=properties&amp;serendipity[fid]={$file.id}" title="{$CONST.MEDIA_PROP}"><span class="icon-picture"></span><span class="visuallyhidden"> {$CONST.MEDIA_PROP}</span></a></li>
                <li><a class="media_delete button_link" href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=delete&amp;serendipity[fid]={$file.id}" title="{$CONST.MEDIA_DELETE}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.MEDIA_DELETE}</span></a></li>
            {/if}
            </ul>
        </article>
    {/if}

    {if NOT $media.enclose}
        <article class="media_file media_enclose_no">
            <header>
                <h3>{$file.realname}</h3>
                <span class="block_level"><b>{$CONST.SORT_ORDER_EXTENSION}:</b> {$file.mime}{if $file.realname != $file.diskname}, {$file.diskname}{/if}</span>
            </header>

            <footer>
                <ul class="media_file_meta plainList">
                    <li><b>{$CONST.SORT_ORDER_DATE}:</b> {if $file.authorid != 0}{$CONST.POSTED_BY} {$file.authorname} {/if}{$CONST.ON} {$file.date|@formatTime:DATE_FORMAT_SHORT}</li>
                {if $file.hotlink}
                    <li>{$file.nice_hotlink}</li>
                {elseif $file.is_image}
                    <li><b>{$CONST.ORIGINAL_SHORT}:</b> {$file.dimensions_width}x{$file.dimensions_height}</li>
                    <li><b>{$CONST.THUMBNAIL_SHORT}:</b> {$file.dim.0}x{$file.dim.1}</li>
                {/if}
                    <li><b>{$CONST.IMAGE_SIZE}:</b> {$file.nice_size} KB</li>
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
                        <option {if ($file.path == $folder.relpath)}selected{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:($folder.depth*2)}{$folder.name}</option>
                    {/foreach}
                    </select>
                </div>
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

            <section class="media_file_metadata clearfix">
                <h4>EXIF/IPTC/XMP</h4>
            {foreach from=$file.metadata key="meta_type" item="meta_data"}
                <h5>{$meta_type}</h5>
                {if is_array($meta_data)}
                <dl class="clearfix">
                    {foreach from=$meta_data key="meta_name" item="meta_value"}
                    <dt>{$meta_name}</dt>
                    <dd>{if is_array($meta_value)}{$meta_value|@print_r}{else}{$meta_value|@formatTime:DATE_FORMAT_SHORT:false:$meta_name}{/if}</dd>
                    {/foreach}
                </dl>
                {else}
                <p>{$meta_data|@formatTime:DATE_FORMAT_SHORT:false:$meta_type}</p>
                {/if}
            {/foreach}
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
