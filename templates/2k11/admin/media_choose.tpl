<!doctype html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="{$lang}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{$lang}"> <!--<![endif]-->
<head>
    <meta charset="{$CONST.LANG_CHARSET}">
    <title>{$CONST.SERENDIPITY_ADMIN_SUITE}: {$CONST.SELECT_FILE}</title>
    <meta name="viewport" content="width=device-width">
    {if $media.css}<link rel="stylesheet" href="{$media.css}">{/if}
    {if $media.css_tree}<link rel="stylesheet" href="{$media.css_tree}">{/if}
    {if $media.css_imgedit}<link rel="stylesheet" href="{$media.css_imgedit}">{/if}
{if $media.is_imgedit}
    <style>
        #outer { 
            left: {$imgedit.zoombox_padding}px;
        } 

        #overlay { 
            clip: rect({$imgedit.overlay_clip_top} {$imgedit.overlay_clip_right} {$imgedit.overlay_clip_bottom} {$imgedit.overlay_clip_left});
        } 

        #harea { 
            left: {$imgedit.zoombox_x}px;
            top: {$imgedit.zoombox_y}px;
            visibility: {$imgedit.harea_visibility};
        } 

        #varea { 
            left: {$imgedit.zoombox_x}px;
            top: {$imgedit.zoombox_y}px;
            visibility: {$imgedit.varea_visibility};
        } 

        #zoom { 
            width: {$imgedit.zoombox_width}px;
        } 

        #scaletext { 
            visibility: {$imgedit.scale_visibility};
        } 

        #outer { 
            width: {$imgedit.img_width}px;
            height: {$imgedit.img_height}px;
            border: 1px solid red;
            position: relative;
            display: block;
        } 
    </style>
    <script src="{serendipity_getFile file="admin/js/dragdrop.js"}"></script>
    <script src="{serendipity_getFile file='admin/imgedit.js'}" ></script>
{/if}
    <script src="{serendipity_getFile file='admin/js/modernizr-2.6.2.min.js'}"></script>
    <script src="{serendipity_getFile file='YahooUI/treeview/YAHOO.js'}"></script>
    <script src="{serendipity_getFile file='YahooUI/treeview/treeview.js'}"></script>
{serendipity_hookPlugin hook="backend_header" hookAll="true"}
<script>
var media_token_url = '{$media.token_url}';
var media_rename = '{$CONST.ENTER_NEW_NAME}';

{if $media.only_path}
if (parent.frames && parent.frames['tree']) { 
    parent.frames['tree'].document.getElementById('newdirlink').href = parent.frames['tree'].basenewdirurl + "{$media.only_path|@escape}";
} 

{/if}
</script>
</head>
{if $media.frameset}
<frameset id="media_frame" cols="20%,*">
    <frame id="media_frame_tree" frameborder="0" name="tree" scrolling="auto" src="{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=tree">
    <frame id="media_frame_main" frameborder="0" name="media" src="{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=default">
</frameset>
</html>
{else}
<body id="{$media.body_id}">

<div id="main" class="clearfix serendipityAdminContent">
{if $media.case == 'external'}
    <!-- EXTERNAL MEDIA START -->
    {if $media.is_created OR $media.is_deleted}
    <script>
    if (parent.frames['tree']) { 
        parent.frames['tree'].location.href  = parent.frames['tree'].location.href;
        parent.frames['media'].location.href = '{$serendipityHTTPPath}serendipity_admin_image_selector.php?serendipity[step]=default&serendipity[only_path]={$media.new_dir}';
    } 
    </script>
    {/if}
    {$media.external}

    {if $media.is_imgedit}
    {$IMGEDIT}
    {/if}
    <!-- EXTERNAL MEDIA END -->
{elseif $media.case == 'default'}
    <!-- MEDIA MANAGER START -->
    <h1>{$CONST.SELECT_FILE}</h1>

    <p>{$CONST.CLICK_FILE_TO_INSERT}</p>
    
    {$media.external}
    {$MEDIA_LIST}
    <!-- MEDIA MANAGER END -->
{elseif $media.case == 'choose'}
    {if $perm_denied}
    <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.PERM_DENIED}</span>
    {else}
    <!-- MEDIA SELECTION START -->
    {$media.external}

    <div class="clearfix">
    {if $media.file.is_image}
        {serendipity_hookPlugin hook="frontend_image_selector" eventData=$media.file hookAll=true}
        <h1>{$CONST.YOU_CHOSE|@sprintf:$media.file.realname}</h1>

        <img src="{$media.file.imgsrc}" alt="">
        
        <form id="imageForm" name="serendipity[selForm]" action="#" method="GET">
            {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_hiddenfields' eventData=$media.file}
            <input name="imgThumbWidth" type="hidden" value="{$media.file.thumbWidth}">
            <input name="imgThumbHeight" type="hidden" value="{$media.file.thumbHeight}">
            <input name="imgWidth" type="hidden" value="{$media.file.dimensions_width}">
            <input name="imgHeight" type="hidden" value="{$media.file.dimensions_height}">
            <input name="imgID" type="hidden" value="{$media.imgID}">
            <input name="baseURL" type="hidden" value="{$serendipityBaseURL}">
            <input name="indexFile" type="hidden" value="{$serendipityIndexFile}">
            <input name="imgName" type="hidden" value="{$media.file.full_file}">
            <input name="thumbName" type="hidden" value="{$media.file.show_thumb}">
            <input name="hotlink" type="hidden" value="{$media.file.hotlink}">
        {if $media.htmltarget}
            <input name="serendipity[htmltarget]" type="hidden" value="{$media.htmltarget|@escape}">
        {/if}
        {if $media.filename_only}
            <input name="serendipity[filename_only]" type="hidden" value="{$media.filename_only|@escape}">
        {/if}
        {if $media.file.fast_select}
            <script>
                {serendipity_hookPlugin hookAll=true hook='frontend_image_add_filenameonly' eventData=$media.file}
                serendipity_imageSelector_done('{$media.textarea|@escape}');
            </script>
        {else}
            <fieldset id="image_size">
                <legend><span>{$CONST.IMAGE_SIZE}</span></legend>

                <div class="clearfix">
                    <div class="form_radio">
                        <input id="radio_link_no" name="serendipity[linkThumbnail]" type="radio" value="no" {'linkThumbnail'|@ifRemember:'no':true}>
                        <label for="radio_link_no">{$CONST.I_WANT_THUMB}</label>
                    </div>

                    <div class="form_radio">
                        <input id="radio_link_yes" name="serendipity[linkThumbnail]" type="radio" value="yes" {'linkThumbnail'|@ifRemember:'yes'}>
                        <label for="radio_link_yes">{$CONST.I_WANT_BIG_IMAGE}</label>
                    </div>
                </div>
                {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagesize' eventData=$media.file}
            </fieldset>
            {if NOT $media.filename_only}
            <fieldset id="image_alignment">
                <legend><span>{$CONST.IMAGE_ALIGNMENT}</span></legend>

                <div class="clearfix">
                    <div class="form_radio">
                        <input id="image_align_top" name="serendipity[align]" {'align'|@ifRemember:''} type="radio" value="">
                        <label for="image_align_top"><img src="{serendipity_getFile file='img/img_align_top.png'}" alt="Top"></label> {* i18n *}
                    </div>

                    <div class="form_radio">
                        <input id="image_align_left" name="serendipity[align]" {'align'|@ifRemember:'left':true} type="radio" value="left">
                        <label for="image_align_left"><img src="{serendipity_getFile file='img/img_align_left.png'}" alt="Left"></label> {* i18n *}
                    </div>

                    <div class="form_radio">
                        <input id="image_align_right" name="serendipity[align]" {'align'|@ifRemember:'right'} type="radio" value="right">
                        <label for="image_align_right"><img src="{serendipity_getFile file='img/img_align_right.png'}" alt="Right"></label> {* i18n *}
                    </div>
                </div>
                {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagealign' eventData=$media.file}
            </fieldset>

            <fieldset id="image_as_link">
                <legend><span>{$CONST.IMAGE_AS_A_LINK}</span></legend>

                <div class="clearfix">
                    <div class="form_radio">
                        <input id="radio_islink_yes" name="serendipity[isLink]" type="radio" value="yes" {'isLink'|@ifRemember:'yes':true}>
                        <label for="radio_islink_yes">{$CONST.I_WANT_NO_LINK}</label>
                    </div>

                    <div class="form_radio">
                        <input id="radio_islink_no" name="serendipity[isLink]" type="radio" value="no" {'isLink'|@ifRemember:'no'}>
                        <label for="radio_islink_no">{$CONST.I_WANT_IT_TO_LINK}</label>

                        <div class="form_field">
                        {* Could use input[type=url], but does that handle local URLs as well? Hm. *}
                            <label for="media_file_path" class="visuallyhidden">Media file path</label> {* i18n *}
                        {if $media.file.hotlink}
                            <input id="media_file_path" name="serendipity[url]" type="text" value="{$media.file.path}">
                        {else}
                            {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_link_url' eventData=$media.file.links}
                            <input id="media_file_path" name="serendipity[url]" type="text" value="{$media.file.links.imagelinkurl}">
                        {/if}
                        </div>
                    </div>
                </div>

                <div class="form_select">
                    <label id="select_image_target">{$CONST.MEDIA_TARGET}</label>
                    <select id="select_image_target" name="serendipity[target]">
                        <option value="none"   {'target'|@ifRemember:'none':false:'selected'}>{$CONST.NONE}</option>
                        <option value="js"     {'target'|@ifRemember:'js':false:'selected'}>{$CONST.MEDIA_TARGET_JS}</option>
                        <option value="plugin" {'target'|@ifRemember:'plugin':false:'selected'}>{$CONST.MEDIA_ENTRY}</option>
                        <option value="_blank" {'target'|@ifRemember:'_blank':false:'selected'}>{$CONST.MEDIA_TARGET_BLANK}</option>
                    </select>
                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagelink2' eventData=$media.file}
                </div>
            </fieldset>

            <div id="image_comment" class="form_area">
                <label for="serendipity_imagecomment">{$CONST.COMMENT}</label>
                <textarea id="serendipity_imagecomment" name="serendipity[imagecomment]" rows="5">{$media.file.props.base_property.COMMENT1|@escape}</textarea>
                {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagecomment' eventData=$media.file}
            </div>

            <div id="image_alttext" class="form_field">
                <label for="serendipity_alt">{$CONST.MEDIA_ALT}</label>
                <input id="serendipity_alt" name="serendipity[alt]" type="text" value="{$media.file.props.base_property.ALT|@escape}">
                {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_alt' eventData=$media.file}
            </div>

            <div id="image_title" class="form_field">
                <label for="serendipity_title">{$CONST.MEDIA_TITLE}</label>
                <input id="serendipity_title" name="serendipity[title]" type="text" value="{$media.file.props.base_property.TITLE|@escape}">
                {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_title' eventData=$media.file}
            </div>
            {/if}
            {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_more' eventData=$media.file}
            <div class="form_buttons">
                <input class="go_back" type="button" value="{$CONST.BACK}">
                <input type="button" value="{$CONST.DONE}" onclick="serendipity.rememberMediaOptions(); {$media.file.origfinishJSFunction}">
                {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_submit' eventData=$media.file}
            </div>
        {/if}{* else fast_select end *}
        </form>
    {else}{* if $media.file.is_image end *}
        {if $media.filename_only}
        <script>
            {serendipity_hookPlugin hookAll=true hook='frontend_image_add_filenameonly' eventData=$media}
            parent.self.opener.serendipity_imageSelector_addToElement('{$media.file.full_file|escape}', '{$media.htmltarget|@escape}');
            parent.self.close();
        </script>
        {else}
        <script>
            block = '<a class="block_level opens_window" href="{$media.file.full_file}" title="{$media.file.realname|@escape}">{$media.file.realname|@escape}</a>';
            {serendipity_hookPlugin hookAll=true hook='frontend_image_add_unknown' eventData=$media}
            if (parent.self.opener.editorref) { 
                parent.self.opener.editorref.surroundHTML(block, '');
            }  else { 
                parent.self.opener.serendipity_imageSelector_addToBody(block, '{$media.textarea}');
            } 
            parent.self.close();
        </script>
        {/if}
    {/if}{* if $media.file.is_image is something else end *}
    {/if}{* if $perm_denied else end *}
{elseif $media.case == 'tree'}
    <div id="content" class="clearfix">
        <form name="mainForm" action="javscript:;">
            <div class="newsItem">
                <div id="expandcontractdiv">
                    <a href="javascript:treeToggleAll()">{$CONST.TOGGLE_ALL}</a>
                </div>
                <div id="treeDiv1"></div>
            </div>
        </form>
    </div>

    <div id="footerContainer" class="clearfix">
        <div id="footer">
            <a id="newdirlink" class="button_link block_level" target="media" href="{$serendipityHTTPPath}serendipity_admin_image_selector.php?serendipity[step]=directoryCreate">{$CONST.WORD_NEW}</a>
            <a id="managedirlink" class="button_link block_level" target="media" href="{$serendipityHTTPPath}serendipity_admin_image_selector.php?serendipity[step]=default&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=directorySelect">{$CONST.MANAGE_DIRECTORIES}</a>
        </div>
    </div>
{/if}{* if $media.case switch end *}
</div> <!-- //.serendipityAdminContent end -->
<script src="{serendipity_getFile file='admin/serendipity_editor.js'}"></script>
{if $media.case == 'tree'}
<script>
    var tree;
    var nodes = new Array();
    var nodeIndex;
    var coreNode      = '';
    var last_path     = '';
    var last_node     = new Array();
    var baseurl       = '{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=default&amp;serendipity[only_path]=';
    var basenewdirurl = '{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=directoryCreate&amp;serendipity[only_path]=';

    function treeInit() { 
        tree = new YAHOO.widget.TreeView("treeDiv1");
        tree.onExpand = function(node) { 
            document.getElementById('newdirlink').href = basenewdirurl + node.data.relpath;
        }; 

        coreNode          = new YAHOO.widget.TextNode("{$CONST.MEDIA}", tree.getRoot(), false);
        coreNode.href     = baseurl;
        coreNode.target   = 'media';
        coreNode.expanded = true;
        {foreach from=$media.paths item="item" key="id"}
            mydir = { id: "{$id}", label: "{$item.name}", target : "media", href: baseurl + "{$item.relpath}", relpath: "{$item.relpath}" };
            {if $item.depth == 1}
                tmpNode = new YAHOO.widget.TextNode(mydir, coreNode, false);
            {else}
            if (last_node[{$item.depth}-1]) { 
                tmpNode = new YAHOO.widget.TextNode(mydir, last_node[{$item.depth} - 1], false);
            } else { 
                tmpNode = new YAHOO.widget.TextNode(mydir, coreNode, false);
            } 
            {/if}
            last_node[{$item.depth}] = tmpNode;
        {/foreach}
        tree.draw();
    } 

    serendipity.addLoadEvent(treeInit);
</script>
{/if}
</body>
</html>
{/if}{* $media.frameset else end *}
