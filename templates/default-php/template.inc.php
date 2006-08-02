<?php 
// THIS FILE IS WORK-IN-PROGRESS. Mostly proof-of-code.
// Proceed at your own risk. Read the "template_api.inc.php
// instructions.
include_once S9Y_INCLUDE_PATH . 'include/template_api.inc.php'; 
$GLOBALS['template'] = new serendipity_smarty_emulator(); 
$GLOBALS['serendipity']['smarty'] =& $GLOBALS['template'];
