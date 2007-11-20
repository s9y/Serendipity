<?php

@define('PLUGIN_EVENT_TRACKBACK_NAME', '记录出口');
@define('PLUGIN_EVENT_TRACKBACK_DESC', '记录对每个链接到其他站点的链接的点击操作');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION', '对添加回复的用户所提供的主页网址进行重定向操作？');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_BLAHBLA', '启用这个设置的话，可以减少垃圾评论骚扰，但是同时也会使得添加回复的那些用户所提供的主页网址的链接显得不那么直观，或损失其他方面的正面效应。如果使用Serendipity的链接出口记录功能的话，Serendipity会将所有链接到其他站点的链接重新定向，并记录出口。如果使用Google PageRank Deflector来记录出口的话，Google PageRank Deflector将不会使用这些链接到其他站点的链接来计算网页排名。如果此处留空的话，则将关闭该设置（这也是Serendipity的默认设置）。');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_NONE', '不使用');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_S9Y', '使用Serendipity的链接出口记录功能');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_GOOGLE', '使用Google PageRank Deflector来记录出口');
