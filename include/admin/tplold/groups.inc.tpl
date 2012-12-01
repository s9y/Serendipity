{if $delete_yes}
    <div class="serendipityAdminMsgSuccess msg_success">
        <img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
        {$CONST.DELETED_GROUP|sprintf:"{$group_id|escape:"html"}":"{$group.name|escape:"html"}"}
    </div>
{/if}

{if $save_new}
    <div class="serendipityAdminMsgSuccess msg_success">
        <img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
        {$CONST.CREATED_GROUP|sprintf:"{$group_id|escape:"html"}":"{$group.name|escape:"html"}"}
    </div>
{/if}

{if $save_edit}
    <div class="serendipityAdminMsgSuccess msg_success">
        <img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
        {$CONST.MODIFIED_GROUP|sprintf:"{$name|escape:"html"}"}
    </div>
{/if}

{if !$delete}
    <table width="100%">
        <tr>
            <td><strong>{$CONST.GROUP}</strong></td>
            <td width="200">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">
            {foreach $groups as $group}
                <div class="serendipity_admin_list_item serendipity_admin_list_item_{if $group@iteration is even} even {else} uneven {/if}">
                    <table width="100%">
                        <tr>
                            <td>{$group.name|escape:"html"}</td>
                            <td width="200" align="right">
                                <a href="?serendipity[adminModule]=groups&amp;serendipity[adminAction]=edit&amp;serendipity[group]={$group.id}" title="{$CONST.EDIT} {$group.name|escape:"html"}" class="serendipityIconLink">
                                    <img src="{serendipity_getFile file="admin/img/edit.png"}" alt="{$CONST.EDIT} {$group.name|escape:"html"}" />
                                    {$CONST.EDIT}
                                </a>
                                <a href="?{$deleteFormToken}&amp;serendipity[adminModule]=groups&amp;serendipity[adminAction]=delete&amp;serendipity[group]={$group.id}" title="{$CONST.DELETE} {$group.name|escape:"html"}" class="serendipityIconLink">
                                    <img src="{serendipity_getFile file="admin/img/delete.png"}" alt="{$CONST.DELETE} {$group.name|escape:"html"}" />
                                    {$CONST.DELETE} 
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            {/foreach}
            </td>
        </tr>
        {if $start}
            <tr>
                <td colspan="3" align="right">
                    <form action="?serendipity[adminModule]=groups" method="post">
                        <input type="submit" name="NEW"   value="{$CONST.CREATE_NEW_GROUP}" class="serendipityPrettyButton input_button" />
                    </form>
                </td>
            </tr>
        {/if}
    </table>
{/if}

{if $edit || $new}
    <br />
    <br />
    <hr noshade="noshade">
    <form action="?serendipity[adminModule]=groups" method="post">
        {$formToken}
        <div>
            <h3>
                {if $edit}
                    {$CONST.EDIT}
                    <input type="hidden" name="serendipity[group]" value="{$from.id}" />
                {else}
                    {$CONST.CREATE}
                {/if}
            </h3>
            <table>
                <tr>
                    <td>{$CONST.NAME}</td>
                    <td><input class="input_textbox" type="text" name="serendipity[name]" value="{$from.name|escape:"html"}" /></td>
                </tr>
                <tr>
                    <td valign="top">{$CONST.USERCONF_GROUPS}</td>
                    <td>
                        <select name="serendipity[members][]" multiple="multiple" size="5">
                            {foreach $allusers as $user}
                                <option value="{$user.authorid}" {if isset($selected.{$user.authorid})} selected="selected"{/if} >{$user.realname|escape:"html"}</option>
                            {/foreach}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                {foreach $perms as $perm}
                    {if {{$perm@key}|truncate:"2":""} == "f_"}{continue}{/if}

                    {if !isset($section)}
                        {$section=$perm@key}
                    {/if}

                    {if $section != {$perm@key} && {{$perm@key}|truncate:"{$section|count_characters}":""} == $section}
                        {$indent="&nbsp;&nbsp;"}
                        {$indentB=""}
                    {else}
                        {if $section != {$perm@key}}
                            {$indent="<br />"}
                            {$indentB="<br />"}
                            {$section="{$perm@key}"}
                        {/if}
                    {/if}

                    {if !$perm.permission}
                        <tr>
                            <td>{$indent} {$perm.permission_name|escape:"html"}</td>
                            <td>{$indentB} {(isset($from.{$perm@key}) && $from.{$perm@key} == "true") ? $CONST.YES : $CONST.NO} </td>
                        </tr>
                    {else}
                        <tr>
                            <td>{$indent} <label for="{{$perm@key}|escape:"html"}">{$perm.permission_name|escape:"html"}</label></td>
                            <td>{$indentB} <input class="input_checkbox" id="{{$perm@key}|escape:"html"}" type="checkbox" name="serendipity[{{$perm@key}|escape:"html"}]" value="true" {if isset({$from.{$perm@key}}) && {$from.{$perm@key}} == "true"} checked="checked" {/if} /></td>
                        </tr>
                    {/if}
                {/foreach}

                {if $enablePluginACL}
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td valign="top">{$CONST.PERMISSION_FORBIDDEN_PLUGINS}</td>
                        <td>
                            <select name="serendipity[forbidden_plugins][]" multiple="multiple" size="5">
                                {foreach $allplugins as $plugin}
                                    <option value="{{$plugin@key}|escape:"url"} {if $plugin.has_permission == false} selected="selected" {/if} >{$plugin.b->properties.name|escape:"html"}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td valign="top">{$CONST.PERMISSION_FORBIDDEN_HOOKS}</td>
                        <td>
                            <select name="serendipity[forbidden_hooks][]" multiple="multiple" size="5">
                                {foreach $allhooks as $hook}
                                    <option value="{{$hook@key}|escape:"url"}" {$hook.has_permission == false} 'selected="selected"}>{{$hook@key}|escape:"html"}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                {else}
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="2">{$CONST.PERMISSION_FORBIDDEN_ENABLE_DESC}</td>
                    </tr>
                {/if}
            </table>

            {if $edit}
                <input type="submit" name="SAVE_EDIT"   value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" />
                {$CONST.WORD_OR} -
                <input type="submit" name="SAVE_NEW"   value="{$CONST.CREATE_NEW_GROUP}" class="serendipityPrettyButton input_button" />
            {else}
                <input type="submit" name="SAVE_NEW" value="{$CONST.CREATE_NEW_GROUP}" class="serendipityPrettyButton input_button" />
            {/if}
        </div>
    </form>
{else}
    {if $delete}
        <form action="?serendipity[adminModule]=groups" method="post">
            <div>
                {$CONST.DELETE_GROUP|sprintf:"{$group_id}":"{$group.name|escape:"html"}"}
                <br /><br />
                {$formToken}
                <input type="hidden" name="serendipity[group]" value="{$group_id|escape:"html"}" />
                <input type="submit" name="DELETE_YES" value="{$CONST.DUMP_IT}" class="serendipityPrettyButton input_button" />
                <input type="submit" name="NO" value="{$CONST.NOT_REALLY}" class="serendipityPrettyButton input_button" />
            </div>
        </form>
    {/if}
{/if}
                    
                    
