{if $is_embedded != true}
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{$lang}"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js lt-ie9 lt-ie8" lang="{$lang}"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js lt-ie9" lang="{$lang}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{$lang}"> <!--<![endif]-->
<head>
    <meta charset="{$head_charset}">
    <title>{$media.file.props.base_property.TITLE|default:$media.file.realname}</title>
    <meta name="generator" content="Serendipity v.{$serendipityVersion}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{if $template_option.webfonts == 'droid'}
    <link  rel="stylesheet" href="//fonts.googleapis.com/css?family=Droid+Sans:400,700">
{elseif $template_option.webfonts == 'ptsans'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'osans'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'cabin'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cabin:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'ubuntu'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'dserif'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic">
{/if}
    <link rel="stylesheet" href="{$head_link_stylesheet}">
    <script src="{serendipity_getFile file="js/modernizr-2.7.1.min.js"}"></script>
{serendipity_hookPlugin hook="frontend_header"}
    <script src="{$head_link_script}"></script>
</head>
<body{if $template_option.webfonts != 'none'} class="{$template_option.webfonts}"{/if}>
{else}
{serendipity_hookPlugin hook="frontend_header"}
{/if}
{if $is_raw_mode != true}
<div id="page" class="clearfix">
    <header id="banner" class="clearfix">
        <div id="identity">
            <a href="{$media.from|escape}">
                <h1>{$blogTitle}</h1>
                <p>{$media.file.realname}</p>
            </a>
        </div>
    </header>

    <div class="clearfix col2r">
        <main id="content" {if $template_option.imgstyle != 'none'} class="{$template_option.imgstyle}"{/if}>
            <article class="clearfix serendipity_entry">
                <h2>{$media.file.props.base_property.TITLE|default:$media.file.realname}</h2>
            {if $perm_denied}
                <p class="msg_important">{$CONST.PERM_DENIED}</p>
            {else}
                <div class="media_show">
                {if $media.file.is_image}
                    <img src="{$media.file.full_file}" alt="{$media.file.realname}">
                {else}
                    <a href="{$media.file.full_file}">{$media.file.realname} ({$media.file.displaymime})</a>
                {/if}
                    <p><a href="{$media.from|escape}">{$CONST.BACK_TO_BLOG}</a></p>
                </div>
            {/if}
            </article>
        </main>

        <aside id="sidebar_right">
            <h2 class="visuallyhidden">{$CONST.TWOK11_SIDEBAR}</h2>
        {if $media.file.base_property}
            <section class="media_props_base sidebar_plugin clearfix">
                <h3>{$CONST.MEDIA_PROP}</h3>

                <dl>
                {foreach from=$media.file.base_property key="prop_fieldname" item="prop_content"}
                    {if $prop_content.val}
                    <dt>{$prop_content.label}</dt>
                    <dd>{$prop_content.val|escape}</dd>
                    {/if}
                {/foreach}
                </dl>
            </section>
        {/if}
        {if $media.file.props.base_keyword}
            <section class="media_props_keywords sidebar_plugin clearfix">
                <h3>{$CONST.MEDIA_KEYWORDS}</h3>

                <div class="media_keywords">
                {foreach from=$media.file.props.base_keyword key="prop_fieldname" item="prop_content"}
                    <span>{$prop_fieldname|escape}</span>
                {/foreach}
                <div>
            </section>
        {/if}
        {if $media.file.props.base_metadata}
            <section class="media_props_metadata sidebar_plugin clearfix">
                <h3>EXIF/IPTC/XMP</h3>

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
            </section>
        {/if}
        {if $media.file.references}
            <section class="media_props_filerefs sidebar_plugin clearfix">
                <h3>{$CONST.REFERER}</h3>

                <ul class="plainList">
                {foreach from=$media.file.references item="ref"}
                    <li><a rel="nofollow" href="{$ref.link|escape}">{$ref.link|default:$CONST.NONE|escape}</a> ({$ref.name|escape})</li>
                {/foreach}
                </ul>
            </section>
        {/if}
    </div>

    <footer id="colophon">
        <p><span lang="en">Powered by <a href="http://s9y.org">Serendipity</a> &amp; the <a href="http://github.com/yellowled/s9y-2k11">2k11</a> theme.</span></p>
    </footer>
</div>
<script src="{serendipity_getFile file="js/2k11.min.js"}"></script>
{/if}
{$raw_data}
{serendipity_hookPlugin hook="frontend_footer"}
{if $is_embedded != true}
</body>
</html>
{/if}
