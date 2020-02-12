<article{if $plugin_contactform_articleformat} class="post serendipity_staticpage serendipity_entry{/if}">
    <h3>{if $plugin_contactform_articleformat}{$plugin_contactform_name}{else}{$plugin_contactform_pagetitle}{/if}</h3>
    <section id="entry">
        <div class="content serendipity_entry_body">
            {if $is_contactform_error}
                 <div id="search-block" class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-exclamation fa-stack-1x"></i></span> {$plugin_contactform_error}</p>
                    </div>
                </div>
                {foreach from=$comments_messagestack item="message"}
                    <div id="search-block" class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-exclamation fa-stack-1x"></i></span> {$message}</p>
                        </div>
                    </div>
                {/foreach}
            {/if}
            {if (empty($is_contactform_sent)) && $plugin_contactform_preface}
               <div class="contactform_preface">{$plugin_contactform_preface}</div>
            {/if}
            {if $is_contactform_sent}
                <p class="alert alert-success"><span class="fa-stack text-success" aria-hidden="true"></i><i class="far fa-smile fa-2x"></i></span> {$plugin_contactform_sent}</p>
            {else}
            <div id="serendipityCommentForm" class="serendipityCommentForm">
                <a id="serendipity_CommentForm"></a>
                <form id="serendipity_comment" class="form-vertical" action="{$commentform_action}#feedback" method="post">
                    <div>
                        <input type="hidden" name="serendipity[subpage]" value="{$commentform_sname}">
                        <input type="hidden" name="serendipity[commentform]" value="true">
                    </div>
                    {foreach name="field" from=$commentform_dynamicfields item="field"}
                        {if $field.type != "hidden"}
                            {if $field.type == "checkbox"}
                                <fieldset class="form-group">
                                    <legend>{$field.name}{if $field.required} <span class="text-danger">*</span>{/if}</legend>
                                    <div class="form-check{if $is_contactform_error && $field.required && !$field.default} text-danger{/if}">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="{$field.id}" id="{$field.id}" {$field.default} class="form-check-label">
                                            {$field.message}
                                        </label>
                                    </div>
                                </fieldset>
                            {elseif $field.type == "radio"}
                                {assign var="radioset" value=''}
                                {foreach name="radio_option" from=$field.options item="option"}
                                    {if $option.default}{assign var="radioset" value='true'}{/if}
                                {/foreach}
                                <fieldset class="form-group">
                                    <legend>{$field.name}{if $field.required} <span class="text-danger">*</span>{/if}</legend>
                                    <div class="form-check{if $is_contactform_error && $field.required && $radioset!='true'} text-danger{/if}">
                                        {foreach name="radio_option" from=$field.options item="option"}
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="{$field.id}" id="{$field.id}.{$option.id}" value="{$option.value}" {$option.default}>
                                                {$option.name}
                                            </label>
                                        {/foreach}
                                    </div>
                                </fieldset>
                            {elseif $field.type == "select"}
                                {assign var="selectset" value=''}
                                {foreach name="radio_option" from=$field.options item="option"}
                                    {if $option.default}{assign var="selectset" value='true'}{/if}
                                {/foreach}
                                <fieldset class="form-group{if $is_contactform_error && $field.required && $selectset!='true'} has-error{/if}">
                                    <legend>{$field.name}{if $field.required} <span class="text-danger">*</span>{/if}</legend>
                                    <select name="{$field.id}" class="form-control">
{* CHANGE 'PLEASE SELECT' TO LANGUAGE CONSTANT *}
                                        {if $selectset != 'true'}<option value="" disabled selected style="display: none;">{$CONST.PLEASESELECT|default:'Please select'}...</option>{/if}
                                        {foreach name="radio_option" from=$field.options item="option"}
                                            <option name="{$field.id}" id="{$field.id}.{$option.id}" value="{$option.value}" {$option.default} >{$option.name}</option>     
                                        {/foreach}
                                    </select>
                                </fieldset>
                            {elseif $field.type == "password"}
                                <fieldset class="form-group{if $is_contactform_error && $field.required && !$field.default} has-error{/if}">
                                    <legend>{$field.name}{if $field.required} <span class="text-danger">*</span>{/if}</legend>
                                    <input type="password" id="serendipity_commentform_{$field.id}" name="serendipity[{$field.id}]" value="{$field.default}" class="form-control">
                                </fieldset>
                            {elseif $field.type == "textarea"}
                                <fieldset class="form-group{if $is_contactform_error && $field.required && !$field.default} has-error{/if}">
                                    <legend>{$field.name}{if $field.required} <span class="text-danger">*</span>{/if}</legend>
                                    <textarea id="serendipity_commentform_{$field.id}" class="form-control" name="serendipity[{$field.id}]" rows="10" placeholder="{$field.name}">{$field.default}</textarea>
                                </fieldset>
                            {elseif $field.type == "email"}
                                <fieldset class="form-group{if $is_contactform_error && $field.required && !$field.default} has-error{/if}">
                                    <legend>{$field.name}{if $field.required} <span class="text-danger">*</span>{/if}</legend>
                                    <input id="{$field.id}" class="form-control" name="serendipity[{$field.id}]" type="email" value="{$field.default}" placeholder="mail@example.org">                     
                                </fieldset>
                            {else}
                                <fieldset class="form-group{if $is_contactform_error && $field.required && !$field.default} has-error{/if}">
                                    <legend>{$field.name}{if $field.required} <span class="text-danger">*</span>{/if}</legend>
                                    <input type="text" id="serendipity_commentform_{$field.id}" name="serendipity[{$field.id}]" value="{$field.default}" class="form-control" placeholder="{$field.name}">
                                </fieldset>
                            {/if}
                        {/if}
                    {/foreach}
                    <div class="form-group">
                        {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}
                    </div>
                    <div class="form-group">
                        <input id="serendipity_submit" name="serendipity[submit]" class="btn btn-default btn-theme" type="submit" value="{$CONST.SUBMIT_COMMENT}">
                    </div>
                </form>
            </div>
            {/if}{* FIX POSITION IN CONTACT FORM TOO *}
        </div>
    </section>
</article>