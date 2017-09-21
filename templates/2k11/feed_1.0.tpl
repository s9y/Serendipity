<?xml version="1.0" encoding="utf-8" ?>

<rdf:RDF {$namespace_display_dat}
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:admin="http://webns.net/mvcb/"
   xmlns:content="http://purl.org/rss/1.0/modules/content/"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
   xmlns:wfw="http://wellformedweb.org/CommentAPI/"
   xmlns="http://my.netscape.com/rdf/simple/0.9/">
<channel>
    <title>{$metadata.title}</title>
    <link>{$metadata.link}</link>
    <description>{$metadata.description}</description>
    <dc:language>{$metadata.language}</dc:language>
{if $metadata.showMail}
    <admin:errorReportsTo rdf:resource="mailto:{$metadata.email}" />
{/if}

    {$metadata.additional_fields.image_rss10_channel}

    <items>
      <rdf:Seq>
{foreach from=$entries item="entry"}
        <rdf:li resource="{serendipity_rss_getguid entry=$entry is_comments=$is_comments}" />
{/foreach}
      </rdf:Seq>
    </items>
</channel>

{$metadata.additional_fields.image_rss10_rdf}
{$once_display_dat}

{foreach from=$entries item="entry"}
<item rdf:about="{$entry.feed_guid}">
    <title>{$entry.feed_title}</title>
    <link>{$entry.feed_entryLink}{if $is_comments}#c{$entry.commentid}{/if}</link>
{if !empty($entry.body)}
    <description>
    {$entry.feed_body|@escape} {$entry.feed_ext|@escape}
    </description>
{/if}

    <dc:publisher>{$entry.feed_blogTitle}</dc:publisher>
    <dc:creator>{$entry.feed_email} ({$entry.feed_author})</dc:creator>
    <dc:subject>
    {foreach from=$entry.categories item="cat"}{$cat.feed_category_name}, {/foreach}</dc:subject>
    <dc:date>{$entry.feed_timestamp}</dc:date>
    <wfw:comment>{$serendipityBaseURL}wfwcomment.php?cid={$entry.feed_id}</wfw:comment>
{if !$is_comments}
        <slash:comments>{$entry.comments}</slash:comments>
        <wfw:commentRss>{$serendipityBaseURL}rss.php?version={$metadata.version}&amp;type=comments&amp;cid={$entry.feed_id}</wfw:commentRss>
{/if}    
    {$entry.per_entry_display_dat}
</item>
{/foreach}

</rdf:RDF>

