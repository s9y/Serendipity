<h2>Maintenance</h2>  {* i18n *}

{if $action == "integrity"}
    <h2>{$CONST.INTEGRITY}</h2>
    {if $noChecksum == true}
        <span class="msg_notice"><span class="icon-info-circled"></span>{$CONST.CHECKSUMS_NOT_FOUND}</span>
    {else}
        {if $badsums|count == 0}
            <span class="msg_success"><span class="icon-ok-circled"></span>{$CONST.CHECKSUMS_PASS}</span>
        {else}
            <ul class="plainList">
                {foreach $badsums as $rpath => $calcsum}
                    <li class="msg_error"><span class="icon-attention-circled"></span>{$CONST.CHECKSUM_FAILED|sprintf:$rpath}</li>
                {/foreach}
            </ul>
        {/if}
    {/if}
{/if}

{if 'siteConfiguration'|checkPermission || 'blogConfiguration'|checkPermission}
    <section>
        <h3>{$CONST.INTEGRITY}</h3>
        <a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=maintenance&amp;serendipity[adminAction]=integrity" title="{$CONST.INTEGRITY}"><span>{$CONST.INTEGRITY}</span></a>
    </section>
{/if}
{if 'adminImport'|checkPermission}
    <section>
        <h3>{$CONST.EXPORT_ENTRIES}</h3>

        <a class="button_link" href="{$serendipityBaseURL}rss.php?version=2.0&all=1"><span class="icon-rss"></span> {$CONST.EXPORT_FEED}</a>
    </section>

    <section>
        <h3>{$CONST.IMPORT_ENTRIES}</h3>
    
        {$importMenu}
    </section>
{/if}

{if 'adminImagesSync'|checkPermission}
    <section>
        <h3>{$CONST.CREATE_THUMBS}</h3>

        <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.WARNING_THIS_BLAHBLAH|replace:'\\n':'<br>'}</span>

        <form method="POST" action="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=doSync">
            <fieldset>
                <legend><span>{$CONST.SYNC_OPTION_LEGEND}</span></legend>

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
