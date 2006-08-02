<?xml version="1.0" encoding="utf-8" ?>

<rss version="0.91" <?= $GLOBALS['tpl']['namespace_display_dat'] ?>>
<channel>
<title><?= $GLOBALS['tpl']['metadata']['title'] ?></title>
<link><?= $GLOBALS['tpl']['metadata']['link'] ?></link>
<description><?= $GLOBALS['tpl']['metadata']['description'] ?></description>
<language><?= $GLOBALS['tpl']['metadata']['language'] ?></language>
<?= $GLOBALS['tpl']['metadata']['additional_fields']['image'] ?>

{foreach from=$entries item="entry"}
<item>
    <title><?= $entry['feed_title'] ?></title>
    <link><?= $entry['feed_entryLink'] ?></link>

{if !empty($entry.body)}
    <description>
        {$entry.feed_body|@escape} {$entry.feed_ext|@escape}
    </description>
{/if}
</item>
{/foreach}

</channel>
</rss>

