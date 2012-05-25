{if ($get.action == 'ignore')}
    {* Todo: Don't know what to put here? *}

{elseif ($get.action == 'upgrade')}

    {foreach $call_tasks AS $ctask}
        {if $is_callable_task}
            {$ctasks}
        {/if}
    {/foreach}

    {if $errors}
        {$CONST.DIAGNOSTIC_ERROR}<br /><br />
        <div class="serendipityAdminMsgError msg_error">- <img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{foreach $errors AS $implode_err}{$implode_err}{if (count($errors) > 1) && !$implode_err@last}<br /> {/if}{/foreach}</div><br /><br />
    {/if}

{/if}

{if (($showAbort && $get.action == 'ignore') || $get.action == 'upgrade')}

    {if $get.action == 'ignore'}
        {$CONST.SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED}
    {elseif $get.action == 'upgrade'}
        <div class="serendipityAdminMsgSuccess msg_success"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.SERENDIPITY_UPGRADER_NOW_UPGRADED|sprintf:$s9y_version}</div>
    {/if}
    <br />
    {if $return_here}
    <div align="center">{$print_UPGRADER_RETURN_HERE}</div>
{* could also be used as:   <div align="center">{$CONST.SERENDIPITY_UPGRADER_RETURN_HERE|sprintf:"<a href='$serendipityHTTPPath'>":'</a>'}</div> *}
    {/if}
{else}
    <h2>{$CONST.SERENDIPITY_UPGRADER_WELCOME}</h2>
    {$CONST.SERENDIPITY_UPGRADER_PURPOSE|sprintf:$s9y_version_installed}<br />
    {$CONST.SERENDIPITY_UPGRADER_WHY|sprintf:$s9y_version}
    <br />{$CONST.FIRST_WE_TAKE_A_LOOK}.

    <br /><br />
    <div align="center">{$result_diagnose}.<br />

        <div align="center">
            <table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
            {if $checksums}
                <tr>
                    <td colspan="2" style="font-weight: bold">{$CONST.INTEGRITY}</td>
                </tr>

    {** upgraderResultDiagnoseX looks like <span class="serendipityAdminMsgSuccessInstall" style="color: green/orange/red; font-weight: bold">'. $s .'</span> **}
    {** if known, class name color will be added for the inline style into php file **}

                <tr>
                    <td width="200">
                    {foreach $upgraderResultDiagnose1 AS $urd1}
                        {$urd1}
                    {/foreach}
                    </td>
                </tr>
            {/if}

                <tr>
                    <td colspan="2" style="font-weight: bold">{$CONST.PERMISSIONS}</td>
                </tr>
                <tr>
                    <td>{$basedir}</td>
                    <td width="200">
                    {foreach $upgraderResultDiagnose2 AS $urd2}
                        {$urd2}
                    {/foreach}
                    </td>
                </tr>
                <tr>
                    <td>{$basedir}{$CONST.PATH_SMARTY_COMPILE}</td>
                    <td width="200">
                    {foreach $upgraderResultDiagnose3 AS $urd3}
                        {$urd3}
                    {/foreach}
                    </td>
                </tr>
                {if $isdir_uploadpath}
                <tr>
                    <td>{$basedir}{$uploadHTTPPath}</td>
                    <td width="200">
                    {foreach $upgraderResultDiagnose4 AS $urd4}
                        {$urd4}
                    {/foreach}
                    </td>
                </tr>
                {/if}
            </table>
        </div>

    {if $showWritableNote}
        <div class="serendipityAdminMsgNote msg_notice"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_note.png'}" alt="" />{$CONST.PROBLEM_PERMISSIONS_HOWTO|sprintf:'chmod 1777'}</div>
    {/if}

    {if ($errorCount > 0)}
        <div align="center">
            <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{$CONST.PROBLEM_DIAGNOSTIC}</div>
            <h2><a href="serendipity_admin.php">{$CONST.RECHECK_INSTALLATION}</a></h2>
        </div>
    {/if}
    </div>

    {if ($errorCount < 1)}
    {if (sizeof($sqlfiles) > 0)}
    <br />
    <h3>{$database_update_types}:</h3>
    {$CONST.SERENDIPITY_UPGRADER_FOUND_SQL_FILES}:<br />
    {if is_array($sqlfiles) && !empty($sqlfiles)}
    {foreach $sqlfiles as $sqlfile}
        <div style="padding-left: 5px"><strong>{$sqlfile}</strong></div>
    {/foreach}
    {/if}
    {/if}
    <br />

    <h3>{$CONST.SERENDIPITY_UPGRADER_VERSION_SPECIFIC}:</h3>

    {if is_array($tasks) && !empty($tasks)}
    {foreach $tasks as $task}
        <div><strong>{$task.version} - {$task.title}</strong></div>
        <div style="padding-left: 5px">{$task.desc|nl2br}</div><br />
    {/foreach}
    {/if}

    {if ($taskCount == 0)}
        {$CONST.SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC}
    {/if}

    <br /><br />
    <hr noshade="noshade">
    {if (($taskCount > 0) || (sizeof($sqlfiles) > 0))}
        <strong>{$CONST.SERENDIPITY_UPGRADER_PROCEED_QUESTION}</strong>
        <br /><br /><a href="{$upgradeLoc}" class="serendipityPrettyButton input_button">{$CONST.SERENDIPITY_UPGRADER_PROCEED_DOIT}</a> {if $showAbort}<a href="{$abortLoc}" class="serendipityPrettyButton">{$CONST.SERENDIPITY_UPGRADER_PROCEED_ABORT}</a>{/if}
    {else}
        <strong>{$CONST.SERENDIPITY_UPGRADER_NO_UPGRADES}</strong>
        <br /><br /><a href="{$upgradeLoc}" class="serendipityPrettyButton input_button">{$CONST.SERENDIPITY_UPGRADER_CONSIDER_DONE}</a>
    {/if}

    {/if} {* errorCount end *}
{/if}{* showAbort else end *}
