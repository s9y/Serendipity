<br />

<script type="text/javascript">
    var img_plus  = '{serendipity_getFile file="img/plus.png"}';
    var img_minus = '{serendipity_getFile file="img/minus.png"}';
    var state     = '';
{literal}
    function showConfig(id) {
        if (document.getElementById) {
            el = document.getElementById(id);
            if (el.style.display == 'none') {
                document.getElementById('option' + id).src = img_minus;
                el.style.display = '';
            } else {
                document.getElementById('option' + id).src = img_plus;
                el.style.display = 'none';
            }
        }
    }

    function showConfigAll(count) {
        if (document.getElementById) {
            for (i = 1; i <= count; i++) {
                document.getElementById('el' + i).style.display = state;
                document.getElementById('optionel' + i).src = (state == '' ? img_minus : img_plus);
            }

            if (state == '') {
                document.getElementById('optionall').src = img_minus;
                state = 'none';
            } else {
                document.getElementById('optionall').src = img_plus;
                state = '';
            }
        }
    }
{/literal}
</script>

<div id="backend_sp_simple" class="default_staticpage">
    <section class="section_basic">
        <h3>{$CONST.STATICPAGE_SECTION_BASIC}</h3>
        <div id="edit_headline" class="form_field">
            <label class="sp_label" title="{staticpage_input item="headline" what="desc"|escape:js}">{staticpage_input item="headline" what="name"|escape:js}</label>
            {staticpage_input item="headline"}
        </div>
        <div id="articleformat_title" class="form_field">
            <label class="sp_label" title="{staticpage_input item="articleformattitle" what="desc"|escape:js}">{staticpage_input item="articleformattitle" what="name"|escape:js}</label>
            {staticpage_input item="articleformattitle"}
        </div>
        <div class="form_area">
            <label class="sp_label" title="{staticpage_input item="content" what="desc"|escape:js}">{staticpage_input item="content" what="name"|escape:js}</label><br />
            {staticpage_input item="content"}
        </div>
{* CUSTOM TO THIS THEME - CUSTOM STATICPAGE HEADER IMAGE *}           
        <div class="serendipity_customfields clearfix">
            <div class="clearfix form_area media_choose" id="ep_column_staticpage_header_image">
                <label for="staticpage_header_image">{$CONST.STATICPAGE_SPECIFIC_HEADER_IMAGE}</label>
                <textarea data-configitem="staticpage_header_image" name="serendipity[plugin][custom][staticpage_header_image]" class="change_preview"  id="propstaticpage_header_image">{$form_values.custom.staticpage_header_image}</textarea>
                <button title="{$CONST.MEDIA}" name="insImage" type="button" class="customfieldMedia"><span class="icon-picture"></span><span class="visuallyhidden">{$CONST.MEDIA}</span></button>
                <figure id="staticpage_header_image_preview">
                    <figcaption>{$CONST.PREVIEW}</figcaption>
                    <img alt="" src="{$form_values.custom.staticpage_header_image}">
                </figure>
            </div>
        </div>
        <div style="margin: 0px auto; text-align: center">
            <input type="submit" name="serendipity[SAVECONF]" value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" />
        </div>        
        <h3>{$CONST.STATICPAGES_CUSTOM_META_SHOW}</h3>
        <p id="sp_toggle_optionall"><a style="border:0; text-decoration: none;" href="#" onClick="showConfig('el1'); return false" title="{$CONST.TOGGLE_OPTION}"><img src="{serendipity_getFile file="img/plus.png"}" id="optionel1" alt="+/-" border="0">&nbsp;{$CONST.TOGGLE_ALL}</a></p> 
        <div id="el1">            
            <div class="adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="title_element" what="desc"|escape:js}">{staticpage_input item="title_element" what="name"|escape:js}</label><br />
                {staticpage_input item="title_element"}
            </div>
            <div class="adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="meta_description" what="desc"|escape:js}">{staticpage_input item="meta_description" what="name"|escape:js}</label>
                {staticpage_input item="meta_description"}
            </div>
            <div class="adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="meta_keywords" what="desc"|escape:js}">{staticpage_input item="meta_keywords" what="name"|escape:js}</label><br />
                {staticpage_input item="meta_keywords"}
            </div>
        </div>
        <script type="text/javascript" language="JavaScript">document.getElementById("el1").style.display = "none";</script>        
         
        <h3>{$CONST.STATICPAGES_CUSTOM_STRUCTURE_SHOW}</h3>
        <p id="sp_toggle_optionall"><a style="border:0; text-decoration: none;" href="#" onClick="showConfig('el2'); return false" title="{$CONST.TOGGLE_OPTION}"><img src="{serendipity_getFile file="img/plus.png"}" id="optionel2" alt="+/-" border="0">&nbsp;{$CONST.TOGGLE_ALL}</a></p>         
        <div id="el2">
            <div class="clearfix">
                <div class="entryproperties_access_groups adv_opts_box form_select">
                        <label class="sp_label" title="{staticpage_input item="authorid" what="desc"|escape:js}">{staticpage_input item="authorid" what="name"|escape:js}</label><br />
                        {staticpage_input item="authorid"}
                </div>
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{staticpage_input item="articletype" what="desc"|escape:js}">{staticpage_input item="articletype" what="name"|escape:js}</label><br />
                    {staticpage_input item="articletype"}
                </div>
            </div>
            <div class="clearfix">
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{staticpage_input item="language" what="desc"|escape:js}">{staticpage_input item="language" what="name"|escape:js}</label><br />
                    {staticpage_input item="language"}
                </div>
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{staticpage_input item="related_category_id" what="desc"|escape:js}">{staticpage_input item="related_category_id" what="name"|escape:js}</label><br />
                    {staticpage_input item="related_category_id"}
                </div>
            </div>
            <div class="clearfix">
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{staticpage_input item="parent_id" what="desc"|escape:js}">{staticpage_input item="parent_id" what="name"|escape:js}</label><br />
                    {staticpage_input item="parent_id"}
                </div>
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{staticpage_input item="show_childpages" what="desc"|escape:js}">{staticpage_input item="show_childpages" what="name"|escape:js}</label><br />
                    {staticpage_input item="show_childpages"}
                </div>
            </div>
            <div class="clearfix">
                <div class="entryproperties_access_groups adv_opts_box form_select">
                   <label class="sp_label" title="{staticpage_input item="shownavi" what="desc"|escape:js}">{staticpage_input item="shownavi" what="name"|escape:js}</label><br />
                    {staticpage_input item="shownavi"}
                </div>
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{staticpage_input item="show_breadcrumb" what="desc"|escape:js}">{staticpage_input item="show_breadcrumb" what="name"|escape:js}</label>
                    {staticpage_input item="show_breadcrumb"}
                </div>
            </div>
            <div class="clearfix">
{* CUSTOM TO THIS THEME - OPTION TO SHOW/HIDE AUTHOR NAME *}            
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{$CONST.STATIC_SHOW_AUTHOR_TITLE}">{$CONST.STATIC_SHOW_AUTHOR_TEXT}</label><br />
                    <input id="author_yes" type="radio" name="serendipity[plugin][custom][show_author]" {if $form_values.custom.show_author == 'true'}checked="checked"{/if}value="true" />
                    <label for="author_yes">{$CONST.YES}</label>
                    <input id="author_no" type="radio" name="serendipity[plugin][custom][show_author]" {if $form_values.custom.show_author != 'true'}checked="checked"{/if} value="false" />
                    <label for="author_no">{$CONST.NO}</label>
                </div>
{* CUSTOM TO THIS THEME - OPTION TO SHOW/HIDE DATE *}
                <div class="entryproperties_access_groups adv_opts_box form_select">
                    <label class="sp_label" title="{$CONST.STATIC_SHOW_DATE_TITLE}">{$CONST.STATIC_SHOW_DATE_TEXT}</label><br />
                    <input id="date_yes" type="radio" name="serendipity[plugin][custom][show_date]" {if $form_values.custom.show_date == 'true'}checked="checked"{/if}value="true" />
                    <label for="date_yes">{$CONST.YES}</label>
                    <input id="date_no" type="radio" name="serendipity[plugin][custom][show_date]" {if $form_values.custom.show_date != 'true'}checked="checked"{/if}value="false" />
                    <label for="date_no">{$CONST.NO}</label>
                </div>
            </div>        
            <div class="clearfix">
                <div class="entryoptions_customfields adv_opts_box">
                    <label class="sp_label" title="{staticpage_input item="pre_content" what="desc"|escape:js}">{staticpage_input item="pre_content" what="name"|escape:js}</label><br />
                    {staticpage_input item="pre_content"}
                </div>
            </div>
        </div>
        <script type="text/javascript" language="JavaScript">document.getElementById("el2").style.display = "none";</script>
    </section>

    <section class="section_meta">
        <h3>{$CONST.STATICPAGE_SECTION_META}</h3>
        <div class="clearfix">
            <div class="entryproperties_access_groups adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="pagetitle" what="desc"|escape:js}">{staticpage_input item="pagetitle" what="name"|escape:js}</label><br />
                {staticpage_input item="pagetitle"}
            </div>
            <div class="entryproperties_access_groups adv_opts_box form_select">            
                <label class="sp_label" title="{staticpage_input item="permalink" what="desc"|escape:js}">{staticpage_input item="permalink" what="name"|escape:js}</label><br />
                {staticpage_input item="permalink"}
            </div>
        </div>        
        <div class="clearfix">
            <div class="entryproperties_access_groups adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="pass" what="desc"|escape:js}">{staticpage_input item="pass" what="name"|escape:js}</label><br />
                {staticpage_input item="pass"}
            </div>
             <div class="entryproperties_access_groups adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="timestamp" what="desc"|escape:js}">{staticpage_input item="timestamp" what="name"|escape:js}</label><br />
                {staticpage_input item="timestamp"}
            </div>           
        </div>
    </section>

    <section class="section_options">
        <h3>{$CONST.STATICPAGE_SECTION_OPT}</h3>
        <div class="clearfix">
            <div class="entryproperties_access_groups adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="publishstatus" what="desc"|escape:js}">{staticpage_input item="publishstatus" what="name"|escape:js}</label><br />
                {staticpage_input item="publishstatus"}
            </div>
            <div class="entryproperties_access_groups adv_opts_box form_select">            
                <label class="sp_label" title="{staticpage_input item="is_startpage" what="desc"|escape:js}">{staticpage_input item="is_startpage" what="name"|escape:js}</label><br />
                {staticpage_input item="is_startpage"}
            </div>
        </div>         
        <div class="clearfix">
            <div class="entryproperties_access_groups adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="is_404_page" what="desc"|escape:js}">{staticpage_input item="is_404_page" what="name"|escape:js}</label><br />
                {staticpage_input item="is_404_page"}
            </div>
            <div class="entryproperties_access_groups adv_opts_box form_select">            
                <label class="sp_label" title="{staticpage_input item="showonnavi" what="desc"|escape:js}">{staticpage_input item="showonnavi" what="name"|escape:js}</label><br />
                {staticpage_input item="showonnavi"}
            </div>
        </div>           
        <div class="clearfix">
            <div class="entryproperties_access_groups adv_opts_box form_select">
                <label class="sp_label" title="{staticpage_input item="markup" what="desc"|escape:js}">{staticpage_input item="markup" what="name"|escape:js}</label><br />
                {staticpage_input item="markup"}
            </div>
            <div class="entryproperties_access_groups adv_opts_box form_select">            
                <label class="sp_label" title="{staticpage_input item="articleformat" what="desc"|escape:js}">{staticpage_input item="articleformat" what="name"|escape:js}</label><br />
                {staticpage_input item="articleformat"}
            </div>
        </div> 
    </section>
    
        
        {* EXAMPLE FOR CUSTOM STATICPAGE PROPERTIES
        
        <fieldset class="sect_custom">
            <legend>Custom</legend>

            <div class="sp_sect">
                <label class="sp_label" title="Choose the main sidebar that should be shown when this staticpage is evaluated">Sidebars</label><br />
                <select name="serendipity[plugin][custom][sidebars][]" multiple="multiple">
                    <option {if (@in_array('left', $form_values.custom.sidebars))}selected="selected"{/if} value="left">Left</option>
                    <option {if (@in_array('right', $form_values.custom.sidebars))}selected="selected"{/if} value="right">Right</option>
                    <option {if (@in_array('hidden', $form_values.custom.sidebars))}selected="selected"{/if} value="hidden">Hidden</option>
                </select>
            </div>

            <div class="sp_sect">
                <label class="sp_label" title="CSS class of the main page body that should be associated">Main CSS class</label><br />
                    <input type="text" name="serendipity[plugin][custom][css_class]" value="{$form_values.custom.css_class|@default:'None'}" />
            </div>
        </fieldset>
         END OF EXAMPLE FOR CUSTOM STATICPAGE PROPERTIES *}

    </div>
</div>


{staticpage_input_finish}

<br style="clear: both" />
<div style="margin: 10px auto; text-align: center">
    <input type="submit" name="serendipity[SAVECONF]" value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" />
</div>

