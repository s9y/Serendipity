{if $staticpage_articleformat}
<div id="staticpage_{$staticpage_pagetitle|@makeFilename}" class="serendipity_Entry_Date serendipity_staticpage">
    <h3 class="serendipity_date">{$staticpage_articleformattitle|@escape}</h3>
{/if}

    <h4 class="serendipity_title"><a href="#">{$staticpage_headline|@escape}</a></h4>

{if $staticpage_navigation AND $staticpage_shownavi}
    <ul class="staticpage_navigation">
      <li class="staticpage_navigation_left"><a href="{$staticpage_navigation.prev.link}" title="prev">{$staticpage_navigation.prev.name|@escape}</a></li>
      <li class="staticpage_navigation_center"><a href="{$staticpage_navigation.top.link}" title="top">{$staticpage_navigation.top.name|@escape}</a></li>
      <li class="staticpage_navigation_right"><a href="{$staticpage_navigation.next.link}" title="next">{$staticpage_navigation.next.name|@escape}</a></li>
    </ul>
{/if}
{if $staticpage_show_breadcrumb}
    <div class="staticpage_navigation_center">
	<a href="{$serendipityBaseURL}">{$CONST.HOME|lower|capitalize:true}</a>&nbsp;&raquo;
      {foreach name="crumbs" from=$staticpage_navigation.crumbs item="crumb"}
      {if !$smarty.foreach.crumbs.first}&raquo;&nbsp;{/if}{if !$smarty.foreach.crumbs.last}<a href="{$crumb.link}">{$crumb.name|@escape}</a>{else}{$crumb.name|@escape}{/if}
      {/foreach}
    </div>
{/if}

{if $staticpage_articleformat}
    <div class="serendipity_entry">
        <div class="serendipity_entry_body">
{/if}

{if $staticpage_pass AND $staticpage_form_pass != $staticpage_pass}
        <div class="staticpage_password">{$CONST.STATICPAGE_PASSWORD_NOTICE}</div>
        <form class="staticpage_password_form" action="{$staticpage_form_url}" method="post">
            <div>
                <input type="password" name="serendipity[pass]" value="" />
                <input type="submit" name="submit" value="{$CONST.GO}" />
             </div>
        </form>
{else}
        <div class="staticpage_precontent">{$staticpage_precontent}</div>
        {if is_array($staticpage_childpages)}
        <ul id="staticpage_childpages">
            {foreach from=$staticpage_childpages item="childpage"}
            <li><a href="{$childpage.permalink|@escape}" title="{$childpage.pagetitle|@escape}">{$childpage.pagetitle|@escape}</a></li>
            {/foreach}
        </ul>
        {/if}
        <div class="staticpage_content">{$staticpage_content}</div>
{/if}

{if $staticpage_articleformat}
        </div>
    </div>
</div>
{/if}

<div class="staticpage_related_category_entry_list">
{* standart - if you use it on a shared-s9y-installation you have to correct the path to staticpage-entries-listing.tpl *}
{serendipity_fetchPrintEntries category=$staticpage_related_category_id template="../../plugins/serendipity_event_staticpage/staticpage-entries-listing.tpl" limit=5 noSticky="true"}

{*  if you use your own static-entries.tpl in your template, take this:  *}
{*  {serendipity_fetchPrintEntries category=$staticpage_related_category_id template="staticpage-entries-listing.tpl" limit=5 noSticky="true"}  *}
</div>

{if $staticpage_articleformat}
<div class="serendipity_Entry_Date serendipity_staticpage">
{/if}

{if $staticpage_author}
    <div class="staticpage_author">{$staticpage_author|@escape}</div>
{/if}

    <div class="staticpage_metainfo">
{if $staticpage_lastchange}
    <span class="staticpage_metainfo_lastchange">{$staticpage_lastchange|date_format:"%Y-%m-%d"}</span>
{/if}

{if $staticpage_adminlink AND $staticpage_adminlink.page_user}
    | <a class="staticpage_metainfo_editlink" href="{$staticpage_adminlink.link_edit}">{$staticpage_adminlink.link_name|@escape}</a>
{/if}
    </div>
{if $staticpage_articleformat}
</div>
{/if}
