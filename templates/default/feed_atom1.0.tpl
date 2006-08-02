<?xml version="1.0" encoding="utf-8" ?>
<?xml-stylesheet href="{serendipity_getFile file='atom.css'}" type="text/css" ?>

<feed {$namespace_display_dat}
   xmlns="http://www.w3.org/2005/Atom"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:admin="http://webns.net/mvcb/"
   xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
   xmlns:wfw="http://wellformedweb.org/CommentAPI/">
    <link href="{$self_url}" rel="self" title="{$metadata.title}" type="application/atom+xml" />
    <link href="{$serendipityBaseURL}"                        rel="alternate"    title="{$metadata.title}" type="text/html" />
    <link href="{$serendipityBaseURL}rss.php?version=2.0"     rel="alternate"    title="{$metadata.title}" type="application/rss+xml" />
    <title type="html">{$metadata.title}</title>
    <subtitle type="html">{$metadata.description}</subtitle>
    {$metadata.additional_fields.image_atom10}
    <id>{$metadata.link}</id>
    <updated>{$last_modified}</updated>
    <generator uri="http://www.s9y.org/" version="{$serendipityVersion}">Serendipity {$serendipityVersion} - http://www.s9y.org/</generator>
    <dc:language>{$metadata.language}</dc:language>
{if $metadata.showMail}
    <admin:errorReportsTo rdf:resource="mailto:{$metadata.email}" />
{/if}

{foreach from=$entries item="entry"}
    <entry>
        <link href="{$entry.feed_entryLink}{if $is_comments}#c{$entry.commentid}{/if}" rel="alternate" title="{$entry.feed_title}" />
        <author>
            <name>{$entry.feed_author}</name>
            <email>{$entry.feed_email}</email>
        </author>
    
        <published>{$entry.feed_timestamp}</published>
        <updated>{$entry.feed_last_modified}</updated>
        <wfw:comment>{$serendipityBaseURL}wfwcomment.php?cid={$entry.feed_id}</wfw:comment>
    
{if !$is_comments}
        <slash:comments>{$entry.comments}</slash:comments>
        <wfw:commentRss>{$serendipityBaseURL}rss.php?version={$metadata.version}&amp;type=comments&amp;cid={$entry.feed_id}</wfw:commentRss>
{/if}
    
    {foreach from=$entry.categories item="cat"}
        <category scheme="{$cat.categoryURL}" label="{$cat.feed_category_name}" term="{$cat.feed_category_name}" />
    {/foreach}

        <id>{$entry.feed_guid}</id>
        <title type="html">{$entry.feed_title}</title>
{if !empty($entry.body)}
        <content type="xhtml" xml:base="{$serendipityBaseURL}">
            <div xmlns="http://www.w3.org/1999/xhtml">
                {$entry.feed_body} {$entry.feed_ext}
            </div>
        </content>
{/if}
        {$entry.per_entry_display_dat}
    </entry>
{/foreach}

</feed>