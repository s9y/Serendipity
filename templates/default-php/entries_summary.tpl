{serendipity_hookPlugin hook="entries_header"}
<div class='serendipity_date'><?= TOPICS_OF ?> {$dateRange.0|@formatTime:"%B, %Y"}</div>

<div class="serendipity_entry">
    <ul>
    {foreach from=$entries item="sentries"}
        {foreach from=$sentries.entries item="entry"}
            <li><a href="<?= $entry['link'] ?>"><?= $entry['title'] ?></a>
                <div class="summary_posted_by"><?= POSTED_BY ?> <span class="posted_by_author"><?= $entry['author'] ?></span> <?= ON ?> <span class="posted_by_date">{$entry.timestamp|@formatTime:DATE_FORMAT_ENTRY}</span></div></li>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </ul>
</div>
<div class='serendipity_entryFooter' style="text-align: center">
{serendipity_hookPlugin hook="entries_footer"}</div>
