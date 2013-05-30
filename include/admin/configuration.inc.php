<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

umask(0000);
$umask = 0775;
@define('IN_installer', true);

if (!isset($_POST['installAction'])) {
    $_POST['installAction'] = '';
}

if (!serendipity_checkPermission('siteConfiguration') && !serendipity_checkPermission('blogConfiguration')) {
    return;
}

$data = array();

switch ($_POST['installAction'] && serendipity_checkFormToken()) {
    case 'check':
        $data['installAction'] = 'check';
        $oldConfig = $serendipity;
        $res = serendipity_updateConfiguration();
        $data['res'] = $res;
        if (is_array($res)) {
            $data['diagnosticError'] = true;
        } else {
            /* If we have new rewrite rules, then install them */
            $permalinkOld = array(
                $oldConfig['serendipityHTTPPath'],
                $oldConfig['serendipityPath'],
                $oldConfig['defaultBaseURL'],
                $oldConfig['indexFile'],
                $oldConfig['rewrite']);

            $permalinkNew = array(
                $serendipity['serendipityHTTPPath'],
                $serendipity['serendipityPath'],
                $serendipity['defaultBaseURL'],
                $serendipity['indexFile'],
                $serendipity['rewrite']);

            // Compare all old permalink section values against new one. A change in any of those
            // will force to update the .htaccess for rewrite rules.
                $permconf = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE);
                if (is_array($permconf) && is_array($permconf['permalinks']['items'])) {
                    foreach($permconf['permalinks']['items'] AS $permitem) {
                        $permalinkOld[] = $oldConfig[$permitem['var']];
                        $permalinkNew[] = $serendipity[$permitem['var']];
                    }
                }

            if (serendipity_checkPermission('siteConfiguration') && serialize($permalinkOld) != serialize($permalinkNew)) {
                $data['htaccessRewrite'] = true;
                $data['serendipityPath'] = $serendipity['serendipityPath'];
                $res = serendipity_installFiles($serendipity['serendipityPath']);
                $data['res'] = $res;
                serendipity_buildPermalinks();
            }
        }

        break;

    default:
        $from = &$serendipity;
        $t = serendipity_parseTemplate(S9Y_CONFIG_TEMPLATE);
        ob_start();
        serendipity_printConfigTemplate($t, $from, false, true);
        $data['config'] = ob_get_contents();
        ob_end_clean();
        break;
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

echo serendipity_smarty_show('admin/configuration.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
?>
