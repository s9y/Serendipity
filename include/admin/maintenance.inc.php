<?php

@define('MAINTAIN_TITLE', 'Maintenance');
@define('MAINTAIN_CLEANCOMPILE_PASS', '<span class="perm_name">[smarty clearCompiledTemplate(%s)]</span>');
@define('MAINTAIN_CLEANCOMPILE_FAIL', 'Error: %s not allowed / not available!');
@define('MAINTAIN_CLEANCOMPILE_TITLE', 'Clear compiled Template');
@define('MAINTAIN_CLEANCOMPILE_INFO', 'This will purge compiled files of this template only, but will leave the used runtime files by this current template file.');

$data = array();

// do not move to end of switch, since this will change smarty assignment scope
ob_start();
include S9Y_INCLUDE_PATH . 'include/admin/import.inc.php';
$data['importMenu'] = ob_get_contents();
ob_end_clean();

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
        $finish = null;
        if(method_exists($serendipity['smarty'], 'clearCompiledTemplate')) {
            if( $serendipity['smarty']->clearCompiledTemplate(null, $serendipity['template']) ) {
                $finish = true;
            } else { $finish = false; }
        }
        $data['cleanup_template'] = $serendipity['template'];
        $data['cleanup_finish'] = $finish;
        break;
}

echo serendipity_smarty_show('admin/maintenance.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
