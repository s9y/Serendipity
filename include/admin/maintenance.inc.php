<?php

$data = array();

// do not move to end of switch, since this will change smarty assignment scope
ob_start();
include S9Y_INCLUDE_PATH . 'include/admin/import.inc.php';
$data['importMenu'] = ob_get_contents();
ob_end_clean();

if ($_POST['adminAction'] == "maintenanceMode") {
    if (serendipity_db_bool(serendipity_get_config_var("maintenanceMode", false)) === true) {
        serendipity_set_config_var("maintenanceMode", false);
    } else {
        serendipity_set_config_var("maintenanceMode", true);
        # after the specified time, given in hours from now, we want the maintenance mode to not be active anymore.
        # This prevents users from logging themselves out.
        $activeTill = time() + ($_POST['hours'] * 3600);
        serendipity_set_config_var("maintenanceModeEnd", $activeTill);
    }
}

switch($serendipity['GET']['adminAction']) {
    case 'integrity':
        $data['action'] = "integrity";

        if (!is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php') || 0 == filesize(S9Y_INCLUDE_PATH . 'checksums.inc.php') ) {
            $data['noChecksum'] = true;
            break;
        }
        $data['badsums'] = serendipity_verifyFTPChecksums();
        break;

    case 'runcleanup':
        // The smarty method clearCompiledTemplate() clears all compiled smarty template files in templates_c
        // Since there may be other compiled template files in templates_c too, we have to restrict this call() to clear the blogs template only,
        // to not have the following automated recompile, force the servers memory to get exhausted,
        // when using plugins like serendipity_event_gravatar plugin, which can eat up some MB...
        // Restriction to template means: leave the page we are on: ../admin/index.tpl and all others, which are set, included and compiled by runtime. (plugins, etc. this can be quite some..!)
        if(method_exists($serendipity['smarty'], 'clearCompiledTemplate')) {
            $data['cleanup_finish']   = (int)$serendipity['smarty']->clearCompiledTemplate(null, $serendipity['template']);
            $data['cleanup_template'] = $serendipity['template'];
        }
        break;
}

$data['maintenance_mode'] = serendipity_db_bool(serendipity_get_config_var("maintenanceMode", false));
$data['maintenance_mode_end'] = strftime('%d.%m.%y %T', serendipity_get_config_var("maintenanceModeEnd"));
$data['maintenance_mode_active'] = $data['maintenance_mode'] && time() < serendipity_get_config_var("maintenanceModeEnd", 0);
echo serendipity_smarty_show('admin/maintenance.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
