<?xml version="1.0" encoding="utf-8" ?>

<rss version="0.91" {$namespace_display_dat}>
<channel>
<title>{$metadata.title}</title>
<link>{$metadata.link}</link>
<description>{$metadata.description}</description>
<language>{$metadata.language}</language>
{$metadata.additional_fields.image}

{foreach from=$entries item="entry"}
<item>
    <title>{$entry.feed_title}</title>
    <link>{$entry.feed_entryLink}{if $is_comments}#c{$entry.commentid}{/if}</link>

{if !empty($entry.body)}
    <description>
        {$entry.feed_body|@escape} {$entry.feed_ext|@escape}
    </description>
{/if}
</item>
{/foreach}

</channel>
</rss>

