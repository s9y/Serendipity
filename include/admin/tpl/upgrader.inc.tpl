{* HTML5: Yes *}
{* jQuery: NN *}

{if ($get.action == 'ignore')}
    {* TODO: don't know what to put here? *}
{elseif ($get.action == 'upgrade')}
    {foreach $call_tasks AS $ctask}
        {if $is_callable_task}
            {$ctasks}
        {/if}
    {/foreach}
    {if $errors}
        <h2>{$CONST.DIAGNOSTIC_ERROR}</h2>

        <div class="msg_error">
        {foreach $errors AS $implode_err}
            <p><span class="icon-attention"></span> {$implode_err}</p>
        {/foreach}
        </div>
    {/if}
{/if}

{if (($showAbort && $get.action == 'ignore') || $get.action == 'upgrade')}
    {if $get.action == 'ignore'}
        <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED}</span>
    {elseif $get.action == 'upgrade'}
        <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.SERENDIPITY_UPGRADER_NOW_UPGRADED|sprintf:$s9y_version}</span>
    {/if}
    {if $return_here}
        {$print_UPGRADER_RETURN_HERE}
        {* could also be used as:   {$CONST.SERENDIPITY_UPGRADER_RETURN_HERE|sprintf:"<a href='$serendipityHTTPPath'>":'</a>'} *}
    {/if}
{else}
    <h2>{$CONST.SERENDIPITY_UPGRADER_WELCOME}</h2>

    <p>{$CONST.SERENDIPITY_UPGRADER_PURPOSE|sprintf:$s9y_version_installed}</p>

    <p>{$CONST.SERENDIPITY_UPGRADER_WHY|sprintf:$s9y_version}</p>

    <h3>{$CONST.FIRST_WE_TAKE_A_LOOK}</h3>

    <div class="diagnose">
        <span class="msg_notice"><span class="icon-info-circle"></span> {$result_diagnose}.</span>

    {if $checksums}
        <h4>{$CONST.INTEGRITY}</h4>

        <ul>
        {foreach $upgraderResultDiagnose1 AS $urd1}
            <li>{$urd1}</li>
        {/foreach}
        </ul>
    {/if}
        <h4>{$CONST.PERMISSIONS}</h4>

        <dl>
            <dt>{$basedir}</dt>
            {foreach $upgraderResultDiagnose2 AS $urd2}
            <dd>{$urd2}</dd>
            {/foreach}
            <dt>{$basedir}{$CONST.PATH_SMARTY_COMPILE}</dt>
            {foreach $upgraderResultDiagnose3 AS $urd3}
            <dd>{$urd3}</dd>
            {/foreach}
        {if $isdir_uploadpath}
            <dt>{$basedir}{$uploadHTTPPath}</dt>
            {foreach $upgraderResultDiagnose4 AS $urd4}
            <dd>{$urd4}</dd>
            {/foreach}
        {/if}
        </dl>
    {if $showWritableNote}
        <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.PROBLEM_PERMISSIONS_HOWTO|sprintf:'chmod 1777'}</span>
    {/if}
    {if ($errorCount > 0)}
        <span class="msg_error"><span class="icon-ok-circle"></span> {$CONST.PROBLEM_DIAGNOSTIC}</span>

        <a class="icon_link block_level" href="serendipity_admin.php"><span class="icon-help-circle"></span> {$CONST.RECHECK_INSTALLATION}</a>
    {/if}
    </div>
    {if ($errorCount < 1)}
        {if (sizeof($sqlfiles) > 0)}
            <h3>{$database_update_types}:</h3>

            <p>{$CONST.SERENDIPITY_UPGRADER_FOUND_SQL_FILES}:</p>
            {if is_array($sqlfiles) && !empty($sqlfiles)}
            <ul>
            {foreach $sqlfiles as $sqlfile}
                <li>{$sqlfile}</li>
            {/foreach}
            </ul>
            {/if}
        {/if}
            <h3>{$CONST.SERENDIPITY_UPGRADER_VERSION_SPECIFIC}:</h3>
        {if is_array($tasks) && !empty($tasks)}
            <dl>
            {foreach $tasks as $task}
                <dt>{$task.version} - {$task.title}</dl>
                <dd>{$task.desc|nl2br}</dd>
            {/foreach}
            </dl>
        {/if}
        {if ($taskCount == 0)}
            <p>{$CONST.SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC}</p>
        {/if}
        {if (($taskCount > 0) || (sizeof($sqlfiles) > 0))}
            <h3>{$CONST.SERENDIPITY_UPGRADER_PROCEED_QUESTION}</h3>

            <a class="block_level" href="{$upgradeLoc}">{$CONST.SERENDIPITY_UPGRADER_PROCEED_DOIT}</a>{if $showAbort} <a href="{$abortLoc}">{$CONST.SERENDIPITY_UPGRADER_PROCEED_ABORT}</a>{/if}
        {else}
            <h3>{$CONST.SERENDIPITY_UPGRADER_NO_UPGRADES}</h3>

            <a class="block_level" href="{$upgradeLoc}">{$CONST.SERENDIPITY_UPGRADER_CONSIDER_DONE}</a>
        {/if}
    {/if}
{/if}
