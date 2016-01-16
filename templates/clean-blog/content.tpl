{if $searchresult_tooShort || $searchresult_noEntries}
      <div class="alert alert-info"><h4>{$CONST.SEARCH}</h4><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span> {$content_message}</div>
{elseif $searchresult_error}
      <div class="alert alert-danger"><h4>{$CONST.SEARCH}</h4><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$content_message}</div>
{elseif $searchresult_results}
      <div class="alert alert-success"><h4>{$CONST.SEARCH}</h4><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-check fa-stack-1x"></i></span> {$content_message}</div>
{elseif $subscribe_confirm_error}
      <div class="alert alert-danger"><h4>{$CONST.ERROR}</h4><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$content_message}</div>
{elseif $subscribe_confirm_success}
      <div class="alert alert-success"><h4>{$CONST.SUCCESS}</h4><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-check fa-stack-1x"></i></span> {$content_message}</div>
{elseif $content_message}
   <div class="alert alert-info"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span>  {$content_message}</div>
{/if}

{$ENTRIES}
{$ARCHIVES}
