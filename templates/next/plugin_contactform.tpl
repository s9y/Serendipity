<article class="post clearfix">
    <h2 class="post-title">{if $plugin_contactform_articleformat}{$plugin_contactform_name}{else}{$plugin_contactform_pagetitle}{/if}</h2>

    {$plugin_contactform_preface}
{if $is_contactform_sent}
    <p class="msg-success"><span class="icon-ok-circled" aria-hidden="true"></span> {$plugin_contactform_sent}</p>
{else}
    {if $is_contactform_error}
    <p class="msg-warning"><span class="icon-attention-circled" aria-hidden="true"></span> {$plugin_contactform_error}</p>
    {foreach from=$comments_messagestack item="message"}
    <p class="msg-warning"><span class="icon-attention-circled" aria-hidden="true"></span> {$message}</p>
    {/foreach}
    {/if}
    <div class="serendipityCommentForm">
        <a id="serendipity_CommentForm"></a>
        <form id="serendipity_comment" action="{$commentform_action}#feedback" method="post">
            <input type="hidden" name="serendipity[subpage]" value="{$commentform_sname}">
            <input type="hidden" name="serendipity[commentform]" value="true">

             <div class="form_field">
                <label for="serendipity_commentform_name">{$CONST.NAME}{if $required_fields.name}*{/if}</label>
                <input id="serendipity_commentform_name" type="text" name="serendipity[name]" value="{$commentform_name}"{if $required_fields.name} required{/if}>
            </div>

            <div class="form_field">
                <label for="serendipity_commentform_email">{$CONST.EMAIL}{if $required_fields.email}*{/if}</label>
                <input id="serendipity_commentform_email" type="email" name="serendipity[email]" value="{$commentform_email}"{if $required_fields.email} required{/if}>
            </div>

            <div class="form_field">
                <label for="serendipity_commentform_url">{$CONST.HOMEPAGE}{if $required_fields.url}*{/if}</label>
                <input id="serendipity_commentform_url" type="url" name="serendipity[url]" value="{$commentform_url}"{if $required_fields.url} required{/if}>
            </div>

            <div class="form_tarea">
                <label for="serendipity_commentform_comment">{$CONST.COMMENT}{if $required_fields.comment}*{/if}</label>
                <textarea id="serendipity_commentform_comment" rows="10" name="serendipity[comment]"{if $required_fields.comment} required{/if}>{$commentform_data}</textarea>
            </div>

            {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}

            <div class="form_buttons">
                <input id="serendipity_submit" type="submit" name="serendipity[submit]" value="{$CONST.NEXT_SEND_MAIL}">
            </div>
        </form>
    </div>
{/if}
</article>
