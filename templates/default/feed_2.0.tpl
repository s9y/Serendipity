<?xml version="1.0" encoding="utf-8" ?>

<rss version="2.0" 
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:admin="http://webns.net/mvcb/"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
   xmlns:wfw="http://wellformedweb.org/CommentAPI/"
   xmlns:content="http://purl.org/rss/1.0/modules/content/"
   {$namespace_display_dat}>
<channel>
    <title>{$metadata.title}</title>
    <link>{$metadata.link}</link>
    <description>{$metadata.description}</description>
    <dc:language>{$metadata.language}</dc:language>
{if $metadata.showMail}
    <admin:errorReportsTo rdf:resource="mailto:{$metadata.email}" />
{/if}
    <generator>Serendipity {$serendipityVersion} - http://www.s9y.org/</generator>
    {$metadata.additional_fields.channel}
    {$metadata.additional_fields.image}

{foreach from=$entries item="entry"}
<item>
    <title>{$entry.feed_title}</title>
    <link>{$entry.feed_entryLink}{if $is_comments}#c{$entry.commentid}{/if}</link>
    {foreach from=$entry.categories item="cat"}
        <category>{$cat.feed_category_name}</category>
    {/foreach}

    <comments>{$entry.feed_entryLink}#comments</comments>
    <wfw:comment>{$serendipityBaseURL}wfwcomment.php?cid={$entry.feed_id}</wfw:comment>

{if !$is_comments}
    <slash:comments>{$entry.comments}</slash:comments>
    <wfw:commentRss>{$serendipityBaseURL}rss.php?version={$metadata.version}&amp;type=comments&amp;cid={$entry.feed_id}</wfw:commentRss>
{/if}    

    <author>{$entry.feed_email} ({$entry.feed_author})</author>
{if !empty($entry.body)}
    <content:encoded>
    {$entry.feed_body|@escape} {$entry.feed_ext|@escape}
    </content:encoded>
{/if}

    <pubDate>{$entry.feed_timestamp_r}</pubDate>
    <guid isPermaLink="false">{$entry.feed_guid}</guid>
    {$entry.per_entry_display_dat}
</item>
{/foreach}

</channel>
</rss>
