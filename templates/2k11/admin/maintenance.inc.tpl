 <div id="maintenance">
    <h2>{$CONST.MENU_MAINTENANCE}</h2>

{if $action == "integrity"}
    <h3 class="visuallyhidden">{$CONST.INTEGRITY}</h3>
    {if $noChecksum == true}
        <span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span>{$CONST.CHECKSUMS_NOT_FOUND}</span>
    {else}
        {if $badsums|count == 0}
        <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span>{$CONST.CHECKSUMS_PASS}</span>
        {else}
        <ul class="plainList">
            {foreach $badsums as $rpath => $calcsum}
            <li class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span>{$CONST.CHECKSUM_FAILED|sprintf:$rpath}</li>
            {/foreach}
        </ul>
        {/if}
    {/if}
{/if}

{if $cleanup_finish > 0}
        <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span>{$CONST.DONE}! <span class="perm_name">{$CONST.CLEANCOMPILE_PASS|sprintf:$cleanup_template}</span></span>
{/if}
{if $cleanup_finish === 0}
        <span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span>{$CONST.CLEANCOMPILE_FAIL}</span>
{/if}

{if 'siteConfiguration'|checkPermission || 'blogConfiguration'|checkPermission}
    <section id="maintenance_integrity" class="equal_heights quick_list">
        <h3>{$CONST.INTEGRITY}</h3>

        <a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=maintenance&amp;serendipity[adminAction]=integrity" title="{$CONST.INTEGRITY}"><span>{$CONST.INTEGRITY}</span></a>
    </section>
{/if}

{if 'adminTemplates'|checkPermission}
    <section id="maintenance_cleanup" class="equal_heights quick_list">
        <h3>{$CONST.CLEANCOMPILE_TITLE}</h3>

        <a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=maintenance&amp;serendipity[adminAction]=runcleanup" title="{$CONST.CLEANCOMPILE_TITLE}"><span>{$CONST.CLEANCOMPILE_TITLE}</span></a>
        <button class="toggle_info button_link" type="button" data-href="#cleanup_info"><span class="icon-info-circled" aria-hidden="true"></span><span class="visuallyhidden"> {$CONST.MORE}</span></button>
        <span id="cleanup_info" class="comment_status additional_info">{$CONST.CLEANCOMPILE_INFO}</span>
    </section>
{/if}

{if 'adminImport'|checkPermission}
    <section id="maintenance_export" class="equal_heights quick_list">
        <h3>{$CONST.EXPORT_ENTRIES}</h3>

        <a class="button_link" href="{$serendipityBaseURL}rss.php?version=2.0&amp;all=1"><span class="icon-rss" aria-hidden="true"></span> {$CONST.EXPORT_FEED}</a>
    </section>

    <section id="maintenance_import" class="equal_heights quick_list">
        <h3>{$CONST.IMPORT_ENTRIES}</h3>

        {$importMenu}
    </section>
{/if}

{if 'adminImagesSync'|checkPermission}
    <section id="maintenance_thumbs" class="quick_list">
        <h3>{$CONST.CREATE_THUMBS}</h3>

        <span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.WARNING_THIS_BLAHBLAH|replace:'\\n':'<br>'}</span>

        <form method="POST" action="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=doSync">
            <fieldset>
                <span class="wrap_legend"><legend>{$CONST.SYNC_OPTION_LEGEND}</legend></span>

                <div class="clearfix">
                    <div class="form_radio">
                        <input id="keepthumbs" name="serendipity[deleteThumbs]" type="radio" value="no" checked="checked">
                        <label for="keepthumbs">{$CONST.SYNC_OPTION_KEEPTHUMBS}</label>
                    </div>

                    <div class="form_radio">
                        <input id="sizecheckthumbs" name="serendipity[deleteThumbs]" type="radio" value="check">
                        <label for="sizecheckthumbs">{$CONST.SYNC_OPTION_SIZECHECKTHUMBS}</label>
                    </div>

                    <div class="form_radio">
                        <input id="deletethumbs" name="serendipity[deleteThumbs]" type="radio" value="yes">
                        <label for="deletethumbs">{$CONST.SYNC_OPTION_DELETETHUMBS}</label>
                    </div>
                </div>
            </fieldset>

            <div class="form_buttons">
                <input name="doSync" type="submit" value="{$CONST.CREATE_THUMBS}">
            </div>
        </form>
    </section>
{/if}

{serendipity_hookPlugin hook="backend_maintenance" hookAll="true"}

{if 'siteConfiguration'|checkPermission}
    <section id="maintenance_utf8mb4">
        <h3>UTF-8 MB4 conversion</h3>

        {if $dbUtf8mb4_error}
        <p>An error occured with the UTF-8 migration: <span>{$dbUtf8mb4_error}</span></p>
        {/if}

        {if $dbUtf8mb4_migrate}
            <p>The migration task returned:</p>
            <ul>
                {foreach from=$dbUtf8mb4_migrate.errors item="error"}
                <li>{$error}</li>
                {/foreach}
            </ul>

            <ul>
                {foreach from=$dbUtf8mb4_migrate.warnings item="warning"}
                <li>{$warning}</li>
                {/foreach}
            </ul>

            {if $dbUtf8mb4_executed}
            <p>The following SQL commands have been executed:</p>
            {else}
            <p>The following SQL commands can be executed:</p>
            {/if}

            <ul>
                {foreach from=$dbUtf8mb4_migrate.sql item="query"}
                <li>{$query};</li>
                {/foreach}
            </ul>

        {/if}

        {if $dbUtf8mb4_converted}
        <p>Your blog is using the UTF-8 with Multibyte-Extension charset.</p>
        {else}
        <p>When using Serendipity 2.2+ with MySQLi and UTF-8 charsets (this is the default), the tables and indexes can be migrated from UTF-8 to UTF-8 with Multibyte-Extension, to support Emoji-Characters.</p>
            {if $dbUtf8mb4_ready}
            <p>This task will allow you to perform an upgrade from UTF-8 to UTF-8mb4. This will also automatically try to adjust index sizes and issue converting MySQL server commands.</p>
            <p>This is a task that can probably fail to properly convert your data, so be sure to make a SQL backup before you perform the upgrade.</p>
            <p>Please run the simulation first, to get a list of SQL statements, that will be issued on your installation, and make sure there are no errors in the simulation before continuing.</p>

            <form method="POST" action="serendipity_admin.php">
                <input type="hidden" name="serendipity[adminModule]" value="maintenance" />
                <input type="hidden" name="serendipity[adminAction]" value="utf8mb4" />
                {$formtoken}

                <div class="form_buttons">
                    <input name="serendipity[adminOption][check]" type="submit" value="Simulate / Check">
                    {if $dbUtf8mb4_simulated}
                    <input name="serendipity[adminOption][execute]" type="submit" value="Execute ">
                    {/if}
                </div>
            </form>
            {else}
            <p>Your installation either does not use UTF-8 charset already, does not use the MySQLi driver or the server version is lower than 5.5.3, and does not support UTF8MB4. To be able to use UTF8MB4, make sure your blog is configured for UTF-8 charset, and make sure existing data is also converted to UTF-8 (by using a tool like mysqldump to export, convert to UTF-8 and import).</p>
            {/if}
        {/if}
    </section>
{/if}

</div>