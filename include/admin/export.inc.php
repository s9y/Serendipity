<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

?>
  <div>
    <a href="<?php echo $serendipity['baseURL'] ?>rss.php?version=2.0&all=1" class="serendipityPrettyButton input_button"><?php echo EXPORT_FEED; ?></a>
  </div>
<?php
/* vim: set sts=4 ts=4 expandtab : */
?>
