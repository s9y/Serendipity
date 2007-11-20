<?php

@define('PLUGIN_RECENTENTRIES_TITLE', '最新文章');
@define('PLUGIN_RECENTENTRIES_BLAHBLAH', '显示最新文章的标题和日期');
@define('PLUGIN_RECENTENTRIES_NUMBER', '文章数量');
@define('PLUGIN_RECENTENTRIES_NUMBER_BLAHBLAH', '要显示多少篇文章(默认：10)');
@define('PLUGIN_RECENTENTRIES_NUMBER_FROM', '是否略过最新头版文章？');
@define('PLUGIN_RECENTENTRIES_NUMBER_FROM_DESC', '只有不是最新头版文章的文章才会被显示。(默认：最新 ' . $serendipity['fetchLimit'] . ' 篇头版文章会被略过)');
@define('PLUGIN_RECENTENTRIES_NUMBER_FROM_RADIO_ALL', '显示全部');
@define('PLUGIN_RECENTENTRIES_NUMBER_FROM_RADIO_RECENT', '略过头版文章');
@define('PLUGIN_RECENTENTRIES_RANDOMIZE', '随机显示文章');
@define('PLUGIN_RECENTENTRIES_RANDOMIZE_DESC', '如果启用此设置的话，将随机选择文章并显示出来');
