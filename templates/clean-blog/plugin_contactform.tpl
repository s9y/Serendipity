<article{if $plugin_contactform_articleformat} class="post serendipity_staticpage serendipity_entry{/if}">
    <header>
        <h2>{if $plugin_contactform_articleformat}{$plugin_contactform_name}{else}{$plugin_contactform_pagetitle}{/if}</h2>
    </header>
    <section id="entry">
        <div class="content serendipity_entry_body">
            {if $is_contactform_error}
                <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$plugin_contactform_error}</p>
                {foreach from=$comments_messagestack item="message"}
                    <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$message}</p>
                {/foreach}
            {/if}
            {if (empty($is_contactform_sent)) && $plugin_contactform_preface}
               <div class="contactform_preface">{$plugin_contactform_preface}</div>
            {/if}
            {if $is_contactform_sent}
                <p class="alert alert-success">{$plugin_contactform_sent}</p>
            {else}
            <div id="serendipityCommentForm" class="serendipityCommentForm">
                <a id="serendipity_CommentForm"></a>
                <form id="serendipity_comment" class="form-vertical" action="{$commentform_action}#feedback" method="post">
                <div>
                    <input type="hidden" name="serendipity[subpage]" value="{$commentform_sname}">
                    <input type="hidden" name="serendipity[commentform]" value="true">
                </div>
                <div class="form-group">
                    <label for="serendipity_commentform_name">{$CONST.NAME}</label>
                    <input id="serendipity_commentform_name" class="form-control" name="serendipity[name]" type="text" value="{$commentform_name}" placeholder="{$CONST.NAME}">
                </div>        
                <div class="form-group">
                    <label for="serendipity_commentform_email">{$CONST.EMAIL}</label>
                    <input id="serendipity_commentform_email" class="form-control" name="serendipity[email]" type="email" value="{$commentform_email}" placeholder="mail@example.org">
                </div>
                <div class="form-group">
                    <label for="serendipity_commentform_url">{$CONST.HOMEPAGE}</label>
                    <input id="serendipity_commentform_url" class="form-control" name="serendipity[url]" type="url" value="{$commentform_url}" placeholder="http://...">
                </div>
                <div class="form-group">
                    <label for="serendipity_commentform_comment">{$CONST.COMMENT}</label>
                    <textarea id="serendipity_commentform_comment" class="form-control" name="serendipity[comment]" rows="10" placeholder="{$CONST.COMMENT}">{$commentform_data}</textarea>
                </div>
                <div class="form-group">
                    {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}
                </div>
                <div class="form-group">
                    <input id="serendipity_submit" name="serendipity[submit]" class="btn btn-default" type="submit" value="{$CONST.SUBMIT_COMMENT}">
                </div>
                </form>
            </div>
        </div>
    </section>
{/if}
</article>