<?php

$data = array();

switch($serendipity['GET']['adminAction']) {
    case 'integrity':
        $data['action'] = "integrity";
        
        if (!is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php') || 0 == filesize(S9Y_INCLUDE_PATH . 'checksums.inc.php') ) {
            $data['noChecksum'] = true;
            break;
        }
        $data['badsums'] = serendipity_verifyFTPChecksums();
        break;
}

ob_start();
include S9Y_INCLUDE_PATH . 'include/admin/import.inc.php';
$data['importMenu'] = ob_get_contents();
ob_end_clean();

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

echo serendipity_smarty_show('admin/maintenance.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
