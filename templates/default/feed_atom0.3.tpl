<?xml version="1.0" encoding="utf-8" ?>
<?xml-stylesheet href="{serendipity_getFile file='atom.css'}" type="text/css" ?>

<feed version="0.3" {$namespace_display_dat}
   xmlns="http://purl.org/atom/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:admin="http://webns.net/mvcb/"
   xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
   xmlns:wfw="http://wellformedweb.org/CommentAPI/">
    <link href="{$serendipityBaseURL}rss.php?version=atom0.3" rel="service.feed" title="{$metadata.title}" type="application/x.atom+xml" />
    <link href="{$serendipityBaseURL}"                        rel="alternate"    title="{$metadata.title}" type="text/html" />
    <link href="{$serendipityBaseURL}rss.php?version=2.0"     rel="alternate"    title="{$metadata.title}" type="application/rss+xml" />
    <title mode="escaped" type="text/html">{$metadata.title}</title>
    <tagline mode="escaped" type="text/html">{$metadata.description}</tagline>
    <id>{$metadata.link}</id>
    <modified>{$last_modified}</modified>
    <generator url="http://www.s9y.org/" version="{$serendipityVersion}">Serendipity {$serendipityVersion} - http://www.s9y.org/</generator>
    <dc:language>{$metadata.language}</dc:language>
{if $metadata.showMail}
    <admin:errorReportsTo rdf:resource="mailto:{$metadata.email}" />
{/if}
    <info mode="xml" type="text/html">
        <div xmlns="http://www.w3.org/1999/xhtml">You are viewing an ATOM formatted XML site feed. Usually this file is inteded to be viewed in an aggregator or syndication software. If you want to know more about ATOM, please visist <a href="http://atomenabled.org/">Atomenabled.org</a></div>
    </info>

{foreach from=$entries item="entry"}
    <entry>
        <link href="{$entry.feed_entryLink}{if $is_comments}#c{$entry.commentid}{/if}" rel="alternate" title="{$entry.feed_title}" type="text/html" />
        <author>
            <name>{$entry.feed_author}</name>
            <email>{$entry.feed_email}</email>
        </author>
    
        <issued>{$entry.feed_timestamp}</issued>
        <created>{$entry.feed_timestamp}</created>
        <modified>{$entry.feed_last_modified}</modified>
        <wfw:comment>{$serendipityBaseURL}wfwcomment.php?cid={$entry.feed_id}</wfw:comment>
{if !$is_comments}
        <slash:comments>{$entry.comments}</slash:comments>
        <wfw:commentRss>{$serendipityBaseURL}rss.php?version={$metadata.version}&amp;type=comments&amp;cid={$entry.feed_id}</wfw:commentRss>
{/if}    
        <id>{$entry.feed_guid}</id>
        <title mode="escaped" type="text/html">{$entry.feed_title}</title>
{if !empty($entry.body)}
        <content type="application/xhtml+xml" xml:base="{$serendipityBaseURL}">
            <div xmlns="http://www.w3.org/1999/xhtml">
                {$entry.feed_body} {$entry.feed_ext}
            </div>
        </content>
{/if}

        {$entry.per_entry_display_dat}
    </entry>
{/foreach}
</feed>