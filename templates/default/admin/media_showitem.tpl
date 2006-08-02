<html>
    <head>
        <title>{$media.file.props.base_property.TITLE|@default:$media.file.realname}</title>
        <meta http-equiv="Content-Type" content="text/html; charset={$CONST.LANG_CHARSET}" />
        <link rel="stylesheet" type="text/css" href="{$media.css}" />
        <link rel="stylesheet" type="text/css" href="{$media.css_front}" />
    </head>

<body id="{$media.body_id}">
    {if $perm_denied}
        {$CONST.PERM_DENIED}
    {else}
    <div class="serendipity_Entry_Date">
        <h3 class="serendipity_date">{$media.file.realname}</h3>
        <h4 class="serendipity_title"><a href="#">{$media.file.props.base_property.TITLE|@default:''}</a></h4>

        <div class="serendipity_entry">
            <div class="serendipity_entry_body">
                <div class="serendipity_center">
                    {if $media.file.is_image}
                        <img src="{$media.file.full_file}" />
                    {else}
                        <a href="{$media.file.full_file}">{$media.file.realname} ({$media.file.displaymime})</a>
                    {/if}
                    <br /><a href="{$media.from|@escape}" title="{$CONST.BACK_TO_BLOG}">{$CONST.BACK_TO_BLOG}</a>
                </div>
                <br />

                {if $media.file.base_property}
                <h3>{$CONST.MEDIA_PROP}</h3>
                <div>
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
                <h3>{$CONST.MEDIA_KEYWORDS}</h3>
                <div>
                {foreach from=$media.file.props.base_keyword key="prop_fieldname" item="prop_content"}
                    {$prop_fieldname|@escape}&nbsp;
                {/foreach}
                    <p></p>
                </div>
                {/if}

                {if $media.file.props.base_metadata}
                <h3>EXIF/IPTC/XMP</h3>
                <div>
                <dl>
                {foreach from=$media.file.props.base_metadata key="meta_type" item="meta_data"}
                    <dt><strong>{$meta_type}</strong></dt>
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
                {/if}

                {if $media.file.references}
                <h3>{$CONST.REFERER}</h3>
                <ul>
                {foreach from=$media.file.references item="ref"}
                <li>({$ref.name|@escape}) <a rel="nofollow" href="{$ref.link|@escape}">{$ref.link|@default:$CONST.NONE|@escape}</a></li>
                {/foreach}
                </ul>
                {/if}
            </div>
        </div>
    </div>
    {/if}
</body>
</html>
