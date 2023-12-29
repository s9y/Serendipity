{if $is_embedded != true}
{if $is_xhtml}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
{else}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
           "http://www.w3.org/TR/html4/loose.dtd">
{/if}

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang}" lang="{$lang}">
<head>
    <title>{$media.file.props.base_property.TITLE|@default:$media.file.realname}</title>
    <meta http-equiv="Content-Type" content="text/html; charset={$head_charset}" />
    <meta name="generator" content="Serendipity v.{$serendipityVersion}" />
    <link rel="stylesheet" type="text/css" href="{$head_link_stylesheet}" />
    <link rel="alternate"  type="application/rss+xml" title="{$blogTitle} RSS feed" href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/index.rss2" />
    <link rel="alternate"  type="application/x.atom+xml"  title="{$blogTitle} Atom feed"  href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/atom.xml" />

{if $entry_id}
    <link rel="pingback" href="{$serendipityBaseURL}comment.php?type=pingback&amp;entry_id={$entry_id}" />
{/if}

{serendipity_hookPlugin hook="frontend_header"}
</head>

<body>
{else}
{serendipity_hookPlugin hook="frontend_header"}
{/if}

{if $is_raw_mode != true}
<div id="serendipity_banner">
    <h1><a class="homelink1" href="{$serendipityBaseURL}">{$head_title|@default:$blogTitle}</a></h1>
    <h2><a class="homelink2" href="{$serendipityBaseURL}">{$media.file.realname}</a></h2>
</div>

<table id="mainpane">
    <tr>
        <td id="content" valign="top">
            <div class="serendipity_Entry_Date">
                <h3 class="serendipity_date">{$media.file.realname}</h3>
                <h4 class="serendipity_title"><a href="#">{$media.file.props.base_property.TITLE|@default:''}</a></h4>

                <div class="serendipity_entry">
                    <div class="serendipity_entry_body">
                    {if $perm_denied}
                        {$CONST.PERM_DENIED}
                    {else}
                        <div class="serendipity_center">
                            {if $media.file.is_image}
                                <img src="{$media.file.full_file}" />
                            {else}
                                <a href="{$media.file.full_file}">{$media.file.realname} ({$media.file.displaymime})</a>
                            {/if}
                            <br /><a href="{$media.from|@escape}" title="{$CONST.BACK_TO_BLOG}">{$CONST.BACK_TO_BLOG}</a>
                        </div>
                    {/if}
                    </div>
                </div>
            </div>
        </td>
        <td id="serendipityRightSideBar" valign="top">
        {if $media.file.base_property}
            <div class="serendipitySideBarItem">
                <h3 class="serendipitySideBarTitle">{$CONST.MEDIA_PROP}</h3>

                <div class="serendipitySideBarContent">
                    <dl>
                    {foreach from=$media.file.base_property key="prop_fieldname" item="prop_content"}
                    {if $prop_content.val}
                        <dt>{$prop_content.label}</dt>
                        <dd>{$prop_content.val|@escape}</dd>
                    {/if}
                    {/foreach}
                    </dl>
                </div>
            </div>
        {/if}

        {if $media.file.props.base_keyword}
            <div class="serendipitySideBarItem">
                <h3 class="serendipitySideBarTitle">{$CONST.MEDIA_KEYWORDS}</h3>

                <div class="serendipitySideBarContent">
                {foreach from=$media.file.props.base_keyword key="prop_fieldname" item="prop_content"}
                    {$prop_fieldname|@escape}&nbsp;
                {/foreach}
                </div>
            </div>
        {/if}

        {if $media.file.props.base_metadata}
            <div class="serendipitySideBarItem">
                <h3 class="serendipitySideBarTitle">EXIF/IPTC/XMP</h3>

                <div class="serendipitySideBarContent">
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
            </div>
        {/if}

        {if $media.file.references}
            <div class="serendipitySideBarItem">
                <h3 class="serendipitySideBarTitle">{$CONST.REFERER}</h3>

                <div class="serendipitySideBarContent">
                    <ul class="plainList">
                    {foreach from=$media.file.references item="ref"}
                    <li>({$ref.name|@escape}) <a rel="nofollow" href="{$ref.link|@escape}">{$ref.link|@default:$CONST.NONE|@escape}</a></li>
                    {/foreach}
                    </ul>
                </div>
            </div>
        {/if}
        </td>
    </tr>
</table>
{/if}

{$raw_data}
{serendipity_hookPlugin hook="frontend_footer"}
{if $is_embedded != true}
</body>
</html>
{/if}
