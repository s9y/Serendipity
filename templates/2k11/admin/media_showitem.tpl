{* HTML5: Yes *}
{* jQuery: NN *}

<html>
<head>
    <meta charset="{$CONST.LANG_CHARSET}">
    <title>{$media.file.props.base_property.TITLE|@default:$media.file.realname}</title>
    <link rel="stylesheet" href="{$media.css}">
    <link rel="stylesheet" href="{$media.css_front}">
</head>
<body id="{$media.body_id}">
{if $perm_denied}
    <span class="msg_error"><span class="icon-attention"></span> {$CONST.PERM_DENIED}</span>
{else}
    <div class="clearfix">
        <h2>{$media.file.realname}</h2>
        
        <h3><a href="#">{$media.file.props.base_property.TITLE|@default:''}</a></h3>

        <div class="media_show">
        {if $media.file.is_image}
            <img src="{$media.file.full_file}" alt="{$media.file.realname}">
        {else}
            <a href="{$media.file.full_file}">{$media.file.realname} ({$media.file.displaymime})</a>
        {/if}
            <a href="{$media.from|@escape}" title="{$CONST.BACK_TO_BLOG}">{$CONST.BACK_TO_BLOG}</a>
        </div>
    {if $media.file.base_property}
        <div class="media_props_base">
            <h4>{$CONST.MEDIA_PROP}</h4>

            <dl>
            {foreach from=$media.file.base_property key="prop_fieldname" item="prop_content"}
                {if $prop_content.val}
                <dt>{$prop_content.label}</dt>
                <dd>{$prop_content.val|@escape}</dd>
                {/if}
            {/foreach}
            </dl>
        </div>
    {/if}
    {if $media.file.props.base_keyword}
        <div class="media_props_keywords">
            <h4>{$CONST.MEDIA_KEYWORDS}</h4>

            <div class="media_keywords">                
            {foreach from=$media.file.props.base_keyword key="prop_fieldname" item="prop_content"}
                <span>{$prop_fieldname|@escape}</span>
            {/foreach}
            <div>
        </div>
    {/if}
    {if $media.file.props.base_metadata}
        <div class="media_props_metadata">
            <h4>EXIF/IPTC/XMP</h4>

            <dl>
            {foreach from=$media.file.props.base_metadata key="meta_type" item="meta_data"}
                <dt>{$meta_type}</dt>
                {if is_array($meta_data)}
                    {foreach from=$meta_data key="meta_name" item="meta_value"}
                    <dd class="meta_name">{$meta_name}</dd>
                    <dd class="meta_value">
                    {if is_array($meta_value)}
                        <pre>{$meta_value|@print_r}</pre>
                    {else}
                        <span>{$meta_value|@formatTime:DATE_FORMAT_SHORT:false:$meta_name}</span>
                    {/if}</dd>
                    {/foreach}
                {else}
                    <dd>{$meta_data|@formatTime:DATE_FORMAT_SHORT:false:$meta_type}</dd>
                {/if}
            {/foreach}
            </dl>
        </div>
    {/if}
    {if $media.file.references}
        <div class="media_props_filerefs">
            <h4>{$CONST.REFERER}</h4>
            
            <ul>
            {foreach from=$media.file.references item="ref"}
                <li>({$ref.name|@escape}) <a rel="nofollow" href="{$ref.link|@escape}">{$ref.link|@default:$CONST.NONE|@escape}</a></li>
            {/foreach}
            </ul>
        </div>
    {/if}
    </div>
{/if}
</body>
</html>
