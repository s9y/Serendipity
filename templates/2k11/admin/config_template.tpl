{if NOT $noForm}
    <form action="?" method="POST">
        <input type="hidden" name="serendipity[adminModule]" value="installer">
        <input type="hidden" name="installAction" value="check">
        {$formToken}
{/if}
{if $config|@sizeof > 1 AND $allowToggle}
    <a class="button_link" href="#" onClick="showConfigAll({$config|@sizeof})">{$CONST.TOGGLE_ALL}</a>
{/if}
{foreach $config as $category}
    <div class="configuration_group">
        
        {if $config|@sizeof > 1}
            <h3>
                {if $allowToggle}
                    <a href="#" onClick="showConfig('el{$category@index}'); return false">
                        {$category.title}
                    </a>
                {else}
                    {$category.title}
                {/if}
            </h3>
        {/if}
        <fieldset id="el{$category@index}" class="clearfix">
            <legend><span>{$category.description}</span></legend>
            {foreach $category.items as $item}
                {if $item.type == 'bool'}
                    <fieldset>
                        <legend>
                            <span>{$item.title}
                                <span>{$item.description}</span>
                            </span>
                        </legend>
                        <div class="clearfix">
                            {$item.guessedInput}
                        </div>
                    </fieldset>
                {else}
                    <div class="form_{$item.type}">
                        <label for="{$item.var}">{$item.title}<span>{$item.description}</span></label>
                        {$item.guessedInput}
                    </div>
                {/if}
            {/foreach}
        </fieldset>
    </div>
{/foreach}

{if NOT $noForm}
    <div class="form_buttons">
        <input type="submit" value="{$CONST.CHECK_N_SAVE}">
    </div>
</form>
{/if}