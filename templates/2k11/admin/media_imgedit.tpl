{* Why isn't this localized at all? http://board.s9y.org/viewtopic.php?f=10&t=18967&p=10432556#p10432556*}
    <div id="imgedit" class="clearfix">
        <form method="post" action="{$imgedit.my_url}">
            <input id="area_orientation" name="area_orientation" type="hidden"  value="{$imgedit.area_orientation}">
            <input id="zoombox_factor" name="zoombox_factor" type="hidden" value="{$imgedit.zoombox_factor}">
            <input id="zoombox_x" name="zoombox_x" type="hidden" value="{$imgedit.zoombox_x}">
            <input id="zoombox_y" name="zoombox_y" type="hidden" value="{$imgedit.zoombox_y}">
            <input id="real_img_width" name="real_img_width" type="hidden" value="{$imgedit.real_img_width}">
            <input id="real_img_height" name="real_img_height" type="hidden" value="{$imgedit.real_img_height}">
            <input id="autoguess_clicked" name="autoguess_clicked" type="hidden" value="{$imgedit.autoguess_clicked}">
            <div id="cropbuttons" class="clearfix">
                <input name="crop" type="submit" value="Crop this image! I'm serious!">

                <div id="scaletext">
                    <span>OR</span> <input name="scale" type="submit" onclick="return imgedit_autoSize('true');" value="Just get that crap somehow inside, will ya? (Equals to: Fit image to largest side)">
                </div>
            </div>
            {* There might be better (HTML5/jQuery) widgets for this, but let's keep it for now. *}
            <div id="zoom" class="clearfix">
                <input id="action_enlarge" name="action[enlarge]" type="submit" onclick="return imgedit_zoom(-2); this.blur();" value="Enlarge">

                <div id="zoomslider"></div>
                <script>
                {* document.write('<div id="zoomslider"><img id="zoombutton" src="{serendipity_getFile file="admin/img/imgedit_slider.gif"}" width="25" height="5" alt="[Slider]"></div>'); *}
                    jQuery('<img/>', { 
                        id: 'zoombutton',
                        src: '{serendipity_getFile file="admin/img/imgedit_slider.gif"}',
                        width: '25',
                        height: '5',
                        alt: '[Slider]'
                    }).appendTo('#zoomslider');
                </script>

                <noscript>
                    <div class="zoomfactor">Zoom: {$imgedit.zoombox_factor}x</div>
                </noscript>

                <input id="action_reduce" name="action[reduce]" type="submit" onclick="return imgedit_zoom(2); this.blur();" value="Reduce">

                <input id="action_autoscale" name="autoscale" type="submit" onclick="return imgedit_autoSize('false');" value="Best Guess">
                <!-- BEGIN ORIENTATION_AVAILABLE -->
                <input id="action_orientation" name="toggle_area_orientation" type="image" onclick="return imgedit_areaOrientation();" title="Toggle Orientation" alt="Toggle Orientation" src="{serendipity_getFile file="admin/img/imgedit_orientation.gif"}">
                <!-- END ORIENTATION_AVAILABLE -->
                <noscript>
                    <input id="action_move_up" class="action_move" name="action[moveup]" type="submit" onclick="this.blur();" value="&uarr;">
                    <input id="action_move_left" class="action_move" name="action[moveleft]" type="submit" onclick="this.blur();" value="&larr;">
                    <input id="action_move_right" class="action_move" name="action[moveright]" type="submit" onclick="this.blur();" value="&rarr;">
                    <input id="action_move_down" class="action_move" name="action[movedown]" type="submit" onclick="this.blur();" value="&darr;">

                    <span id="action_moveby">Move by <input name="move_increase" type="text" value="{$imgedit.move_increase}">px</span>
                </noscript>
            </div>

            <div id="outer" class="clearfix">
                <img id="backdrop" src="{$imgedit.http_img_name}" alt="Backdrop" width="{$imgedit.img_width}" height="{$imgedit.img_height}">
                <img id="overlay" src="{$imgedit.http_img_name}" alt="Overlay" width="{$imgedit.img_width}" height="{$imgedit.img_height}">
                <img id="harea" src="{$imgedit.harea_img_name}" alt="[Crop area]" width="{$imgedit.harea_width}" height="{$imgedit.harea_height}">
                <img id="varea" src="{$imgedit.varea_img_name}" alt="[Crop area]" width="{$imgedit.varea_width}" height="{$imgedit.varea_height}">
            </div>
        </form>
    </div>
    <script> imgedit_init({$imgedit.zoombox_width}, {$imgedit.area_border}, {$imgedit.zoombox_x}, {$imgedit.zoombox_y}, '{$imgedit.area_orientation}'); </script>
