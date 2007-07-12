<html>
    <head>
        <title>{$CONST.SERENDIPITY_ADMIN_SUITE}: {$CONST.SELECT_FILE}</title>
        <meta http-equiv="Content-Type" content="text/html; charset={$CONST.LANG_CHARSET}" />
        <link rel="stylesheet" type="text/css" href="{$media.css}" />
        <link rel="stylesheet" type="text/css" href="{$media.css_tree}" />
        <link rel="stylesheet" type="text/css" href="{$media.css_imgedit}" />

        {if $media.is_imgedit}
        <style type="text/css">
        #outer {ldelim}
            left: {$imgedit.zoombox_padding}px;
        {rdelim}

        #overlay {ldelim}
            clip: rect({$imgedit.overlay_clip_top} {$imgedit.overlay_clip_right} {$imgedit.overlay_clip_bottom} {$imgedit.overlay_clip_left});
        {rdelim}

        #harea {ldelim}
            left: {$imgedit.zoombox_x}px;
            top: {$imgedit.zoombox_y}px;
            visibility: {$imgedit.harea_visibility};
        {rdelim}

        #varea {ldelim}
            left: {$imgedit.zoombox_x}px;
            top: {$imgedit.zoombox_y}px;
            visibility: {$imgedit.varea_visibility};
        {rdelim}

        #zoom {ldelim}
            width: {$imgedit.zoombox_width}px;
        {rdelim}

        #scaletext {ldelim}
            visibility: {$imgedit.scale_visibility};
        {rdelim}

        #outer {ldelim}
            width:                       {$imgedit.img_width}px;
            height:                      {$imgedit.img_height}px;
            border:                      1px solid red;
            position:                    relative;
            display:                     block;
        {rdelim}


        </style>
        <script type="text/javascript" src="{serendipity_getFile file='dragdrop.js'}" ></script>
        <script type="text/javascript" src="{serendipity_getFile file='imgedit.js'}" ></script>
        {/if}

        <script type="text/javascript" src="{serendipity_getFile file='YahooUI/treeview/YAHOO.js'}"></script>
        <script type="text/javascript" src="{serendipity_getFile file='YahooUI/treeview/treeview.js'}"></script>
    </head>

    <script type="text/javascript">
        function addLoadEvent(func) {ldelim}
          var oldonload = window.onload;
          if (typeof window.onload != 'function') {ldelim}
            window.onload = func;
          {rdelim} else {ldelim}
            window.onload = function() {ldelim}
              oldonload();
              func();
            {rdelim}
          {rdelim}
        {rdelim}

        function SetCookie(name, value) {ldelim}
            var today  = new Date();
            var expire = new Date();
            expire.setTime(today.getTime() + (60*60*24*30));
            document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
        {rdelim}

        function rememberOptions() {ldelim}
            el = document.getElementById('imageForm');
            for (i = 0; i < el.elements.length; i++) {ldelim}
                elname = new String(el.elements[i].name);
                elname = elname.replace(/\[/g, '_');
                elname = elname.replace(/\]/g, '');

                if (el.elements[i].type == 'radio') {ldelim}
                    if (el.elements[i].checked) {ldelim}
                        SetCookie(elname, el.elements[i].value);
                    {rdelim}
                {rdelim} else if (typeof(el.elements[i].options) == 'object') {ldelim}
                    SetCookie(elname, el.elements[i].options[el.elements[i].selectedIndex].value);
                {rdelim}
            {rdelim}
        {rdelim}

{if $media.only_path}
        if (parent.frames && parent.frames['tree']) {ldelim}
            parent.frames['tree'].document.getElementById('newdirlink').href =
                parent.frames['tree'].basenewdirurl +
                "{$media.only_path|@escape}"
        {rdelim}
{/if}

{if $media.case == 'default'}
        function rename(id, fname) {ldelim}
            if (newname = prompt('{$CONST.ENTER_NEW_NAME}' + fname, fname)) {ldelim}
                newloc = '?{$media.token_url}&serendipity[adminModule]=images&serendipity[adminAction]=rename&serendipity[fid]='+ escape(id) + '&serendipity[newname]='+ escape(newname);
                location.href=newloc;
            }
        {rdelim}
{/if}

{if $media.case == 'tree'}
    var toggle_state = 'expand';
    function treeToggleAll() {ldelim}
        if (toggle_state == 'expand') {ldelim}
            toggle_state = 'collapse';
            tree.expandAll();
        {rdelim} else {ldelim}
            toggle_state = 'expand';
            tree.collapseAll();
            coreNode.expand();
        {rdelim}
    {rdelim}
{/if}
    </script>

{if $media.frameset}
    <frameset id="media_frame" cols="20%,*">
        <frame id="media_frame_tree" frameborder="0" name="tree" scrolling="auto" src="{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=tree" />
        <frame id="media_frame_main" frameborder="0" name="media" src="{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=default" />
    </frameset>
    </html>
{else}
<body id="{$media.body_id}">

<div class="serendipityAdminContent">
{if $media.case == 'external'}

    <!-- EXTERNAL MEDIA START -->
    {if $media.is_created OR $media.is_deleted}
    <script type="text/javascript">
    if (parent.frames['tree']) {ldelim}
        parent.frames['tree'].location.href  = parent.frames['tree'].location.href;
        parent.frames['media'].location.href = '{$serendipityHTTPPath}serendipity_admin_image_selector.php?serendipity[step]=default&serendipity[only_path]={$media.new_dir}';
    {rdelim}
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
    <h2>{$CONST.CLICK_FILE_TO_INSERT}</h2>
    <br />
    {$media.external}
    {$MEDIA_LIST}
    <!-- MEDIA MANAGER END -->

{elseif $media.case == 'choose'}

    {if $perm_denied}
        {$CONST.PERM_DENIED}
    {else}

    <!-- MEDIA SELECTION START -->
    {$media.external}
    <script type="text/javascript" language="JavaScript" src="{$serendipityHTTPPath}serendipity_define.js.php"></script>
    <script type="text/javascript" language="Javascript" src="{$serendipityHTTPPath}serendipity_editor.js"></script>
    <div>
    {if $media.file.is_image}
        {serendipity_hookPlugin hook="frontend_image_selector" eventData=$media.file hookAll=true}
        <img align="right" src="{$media.file.imgsrc}" />
        <h1>{$CONST.YOU_CHOSE|@sprintf:$media.file.realname}</h1>
        <p>
            <form action="#" method="GET" id="imageForm" name="serendipity[selForm]" onsubmit="serendipity_imageSelector_done()">
                <div>
                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_hiddenfields' eventData=$media.file}
                    <input type="hidden" name="imgThumbWidth"  value="{$media.file.thumbWidth}" />
                    <input type="hidden" name="imgThumbHeight" value="{$media.file.thumbHeight}" />
                    <input type="hidden" name="imgWidth"  value="{$media.file.dimensions_width}" />
                    <input type="hidden" name="imgHeight" value="{$media.file.dimensions_height}" />
                    <input type="hidden" name="imgID" value="{$media.imgID}" />
                    <input type="hidden" name="baseURL" value="{$serendipityBaseURL}" />
                    <input type="hidden" name="indexFile" value="{$serendipityIndexFile}" />
                    <input type="hidden" name="imgName"   value="{$media.file.full_file}" />
                    <input type="hidden" name="thumbName" value="{$media.file.show_thumb}" />
                    <input type="hidden" name="hotlink" value="{$media.file.hotlink}" />
                    {if $media.htmltarget}
                    <input type="hidden" name="serendipity[htmltarget]" value="{$media.htmltarget|@escape}" />
                    {/if}
                    {if $media.filename_only}
                    <input type="hidden" name="serendipity[filename_only]" value="{$media.filename_only|@escape}" />
                    {/if}

                    {if $media.file.fast_select}
                    <script type="text/javascript">
                        {serendipity_hookPlugin hookAll=true hook='frontend_image_add_filenameonly' eventData=$media.file}
                        serendipity_imageSelector_done('{$media.textarea|@escape}');
                    </script>
                    {else}
                    <b>{$CONST.IMAGE_SIZE}:</b>
                    <br />
                    <input class="input_radio" id="radio_link_no" type="radio"  name="serendipity[linkThumbnail]" value="no" {'linkThumbnail'|@ifRemember:'no':true} /><label for="radio_link_no">{$CONST.I_WANT_THUMB}</label><br />
                    <input class="input_radio" id="radio_link_yes" type="radio" name="serendipity[linkThumbnail]" value="yes" {'linkThumbnail'|@ifRemember:'yes'} /><label for="radio_link_yes">{$CONST.I_WANT_BIG_IMAGE}</label><br />
                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagesize' eventData=$media.file}
                    <br />

                    {if NOT $media.filename_only}
                    <b>{$CONST.IMAGE_ALIGNMENT}:</b>
                    <br />

                    <input class="input_radio" type="radio" name="serendipity[align]" {'align'|@ifRemember:''}           value="" />     <img src="{serendipity_getFile file='img/img_align_top.png'}"   vspace="5" /><br />
                    <input class="input_radio" type="radio" name="serendipity[align]" {'align'|@ifRemember:'left':true}  value="left" /> <img src="{serendipity_getFile file='img/img_align_left.png'}"  vspace="5" /><br />
                    <input class="input_radio" type="radio" name="serendipity[align]" {'align'|@ifRemember:'right'}      value="right" /><img src="{serendipity_getFile file='img/img_align_right.png'}" vspace="5" /><br />
                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagealign' eventData=$media.file}
                    <br />

                    <b>{$CONST.IMAGE_AS_A_LINK}:</b>
                    <br />

                    <input class="input_radio" type="radio" id="radio_islink_yes" type="radio" name="serendipity[isLink]" value="yes" {'isLink'|@ifRemember:'yes':true} /><label for="radio_islink_yes"> {$CONST.I_WANT_NO_LINK}</label><br />
                    <input class="input_radio" type="radio" id="radio_islink_no"  type="radio" name="serendipity[isLink]" value="no"  {'isLink'|@ifRemember:'no'} /><label for="radio_islink_no"> {$CONST.I_WANT_IT_TO_LINK}</label>
                    {if $media.file.hotlink}

                    <input class="input_textbox" type="text"  name="serendipity[url]" size="30" value="{$media.file.path}" /><br />
                    {else}
                        {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_link_url' eventData=$media.file.links}
                        <input class="input_textbox" type="text"  name="serendipity[url]" size="30" value="{$media.file.links.imagelinkurl}" /><br />
                    {/if}

                    <label id="select_image_target">{$CONST.MEDIA_TARGET}</label>
                        <select name="serendipity[target]" id="select_image_target">
                            <option value="none"   {'target'|@ifRemember:'none':false:'selected'}>{$CONST.NONE}</option>
                            <option value="js"     {'target'|@ifRemember:'js':false:'selected'}>{$CONST.MEDIA_TARGET_JS}</option>
                            <option value="plugin" {'target'|@ifRemember:'plugin':false:'selected'}>{$CONST.MEDIA_ENTRY}</option>
                            <option value="_blank" {'target'|@ifRemember:'_blank':false:'selected'}>{$CONST.MEDIA_TARGET_BLANK}</option>
                        </select>
                    <br />

                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagelink2' eventData=$media.file}
                    <br />

                    <b>{$CONST.COMMENT}:</b>
                    <br />
                    <textarea id="serendipity_imagecomment" name="serendipity[imagecomment]" rows="5" cols="40">{$media.file.props.base_property.COMMENT1|@escape}</textarea>
                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_imagecomment' eventData=$media.file}
                    <br />
                    {/if}

                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_more' eventData=$media.file}
                    <input class="serendipityPrettyButton input_button" type="button" value="{$CONST.BACK}" onclick="history.go(-1);" />
                    <input class="serendipityPrettyButton input_button" type="button" value="{$CONST.DONE}" onclick="rememberOptions(); {$media.file.origfinishJSFunction}" />
                    {serendipity_hookPlugin hookAll=true hook='frontend_image_selector_submit' eventData=$media.file}
                {/if}
            </div>
        </form>
    </p>
    {else}
        {if $media.filename_only}
        <script type="text/javascript">
            {serendipity_hookPlugin hookAll=true hook='frontend_image_add_filenameonly' eventData=$media}
            parent.self.opener.serendipity_imageSelector_addToElement('{$media.file.full_file|escape}', '{$media.htmltarget|@escape}');
            parent.self.close();
        </script>
        {else}
        <script type="text/javascript">
            block = '<a href="{$media.file.full_file}" title="{$media.file.realname|@escape}" target="_blank">{$media.file.realname|@escape}</a>';
            {serendipity_hookPlugin hookAll=true hook='frontend_image_add_unknown' eventData=$media}
            if (parent.self.opener.editorref) {ldelim}
                parent.self.opener.editorref.surroundHTML(block, '');
            {rdelim} else {ldelim}
                parent.self.opener.serendipity_imageSelector_addToBody(block, '{$media.textarea}');
            {rdelim}
            parent.self.close();
        </script>
        {/if}
    {/if}
    {/if}
{elseif $media.case == 'tree'}
    <div id="content">
        <form name="mainForm" action="javscript:;">
            <div class="newsItem">
                <div id="expandcontractdiv">
                    <a href="javascript:treeToggleAll()">{$CONST.TOGGLE_ALL}</a>
                </div>
                <div id="treeDiv1"></div>
            </div>
        </form>
    </div>

    <div id="footerContainer">
        <div id="footer">
            <p><a id="newdirlink" target="media" class="serendipityPrettyButton input_button" href="{$serendipityHTTPPath}serendipity_admin_image_selector.php?serendipity[step]=directoryCreate">{$CONST.WORD_NEW}</a></p>
            <p><a id="managedirlink" target="media" class="serendipityPrettyButton input_button" href="{$serendipityHTTPPath}serendipity_admin_image_selector.php?serendipity[step]=default&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=directorySelect">{$CONST.MANAGE_DIRECTORIES}</a></p>
        </div>
    </div>

    <script type="text/javascript">
	var tree;
	var nodes = new Array();
	var nodeIndex;
	var coreNode = '';
	var last_path = '';
	var last_node = new Array();
	var baseurl       = '{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=default&amp;serendipity[only_path]=';
    var basenewdirurl = '{$serendipityHTTPPath}serendipity_admin_image_selector.php?{$media.GET_STRING}&amp;serendipity[step]=directoryCreate&amp;&amp;serendipity[only_path]=';

	function treeInit() {ldelim}
		tree = new YAHOO.widget.TreeView("treeDiv1");
		tree.onExpand = function(node) {ldelim}
		    document.getElementById('newdirlink').href = basenewdirurl + node.data.relpath;
		{rdelim};

        coreNode          = new YAHOO.widget.TextNode("{$CONST.MEDIA}", tree.getRoot(), false);
		coreNode.href     = baseurl;
		coreNode.target   = 'media';
        coreNode.expanded = true;
        {foreach from=$media.paths item="item" key="id"}
        mydir = {ldelim} id: "{$id}", label: "{$item.name}", target : "media", href: baseurl + "{$item.relpath}", relpath: "{$item.relpath}" {rdelim};
        {if $item.depth == 1}
        tmpNode = new YAHOO.widget.TextNode(mydir, coreNode, false);
        {else}
        if (last_node[{$item.depth}-1]) {ldelim}
            tmpNode = new YAHOO.widget.TextNode(mydir, last_node[{$item.depth} - 1], false);
        {rdelim} else {ldelim}
            tmpNode = new YAHOO.widget.TextNode(mydir, coreNode, false);
        {rdelim}
        {/if}
        last_node[{$item.depth}] = tmpNode;
        {/foreach}
		tree.draw();
	{rdelim}

    addLoadEvent(treeInit);
    </script>
{/if}
</div>
</body>
</html>
{/if}