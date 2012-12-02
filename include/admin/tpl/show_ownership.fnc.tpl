{* HTML5: Yes *}
{* jQuery: NN *}

{* functions_plugins_admin.inc.php::function ownership() *}

{if $show_ownership}
    {if $is_plugin_owner}
    <select name="serendipity[ownership][{$name}]">
        <option value="0">{$CONST.ALL_AUTHORS}</option>
    {/if}
    {foreach $users AS $user}
        {if (!$is_plugin_owner && ($user['authorid'] == $authorid))}
            {assign var="realname" value="{$user['realname']|escape}"}
        {elseif $is_plugin_owner}
        <option value="{$user['authorid']}"{($user['authorid'] == $authorid) ? ' selected="selected"' : ''}>{$user['realname']|escape}</option>
        {/if}
    {/foreach}
    {if $is_plugin_owner}
    </select>
    {else}
        {(empty($realname)) ? $CONST.ALL_AUTHORS : $realname}
    {/if}
{/if}
