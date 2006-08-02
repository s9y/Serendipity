<table style="width: 100%" cellspacing="0" cellpadding="0" class="serendipity_calendar">
    <tr>
        <td class="serendipity_calendarHeader">
<?php if ($GLOBALS['tpl']['plugin_calendar_head']['minScroll'] <= $GLOBALS['tpl']['plugin_calendar_head']['month_date']): ?>
            <a title="<?= BACK ?>" href="<?= $GLOBALS['tpl']['plugin_calendar_head']['uri_previous'] ?>"><img alt="<?= BACK ?>" src="<?php echo serendipity_getTemplateFile('img/back.png'); ?>" width="16" height="12" style="border: 0px" /></a>
<?php endif; ?>
        </td>

        <td colspan="5" class="serendipity_calendarHeader" style="text-align: center; vertical-align: bottom">
            <b><a style="white-space: nowrap" href="<?= $GLOBALS['tpl']['plugin_calendar_head']['uri_month'] ?>"><?= serendipity_formatTime("%B '%y", $GLOBALS['tpl']['plugin_calendar_head']['month_date']); ?></a></b>
        </td>

        <td class="serendipity_calendarHeader" style="text-align: right">
<?php if ($GLOBALS['tpl']['plugin_calendar_head']['maxScroll'] >= $GLOBALS['tpl']['plugin_calendar_head']['month_date']): ?>
            <a title="<?= FORWARD ?>" href="<?= $GLOBALS['tpl']['plugin_calendar_head']['uri_next'] ?>"><img alt="<?= FORWARD ?>" src="<?php echo serendipity_getTemplateFile('img/forward.png'); ?>" width="16" height="12" style="border: 0px" /></a>
<?php endif; ?>
        </td>
    </tr>

    <tr>
    <?php foreach($GLOBALS['tpl']['plugin_calendar_dow'] AS $dow): ?>
        <td scope="col" abbr="<?= serendipity_formatTime('%A', $dow['date']); ?>" title="<?= serendipity_formatTime('%A', $dow['date']); ?>" class="serendipity_weekDayName" align="center"><?= serendipity_formatTime('%a', $dow['date']); ?></td>
    <?php endforeach; ?>
    </tr>

    <?php foreach($GLOBALS['tpl']['plugin_calendar_weeks'] AS $week): ?>
        <tr class="serendipity_calendar">
        <?php foreach($week['days'] AS $day): ?>
            <td class="serendipity_calendarDay <?= $day['classes'] ?>"<?php if (isset($day['properties']['Title'])): ?> title="<?= $day['properties']['Title'] ?>"<?php endif; ?>><?php if (isset($day['properties']['Active']) AND $day['properties']['Active']): ?><a href="<?= $day['properties']['Link'] ?>"><?php endif; ?><?= $day['name']; ?><?php if (isset($day['properties']['Active']) AND $day['properties']['Active']): ?></a><?php endif; ?></td>
        <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
