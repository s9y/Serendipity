        <div id="imgedit">
            <form class="nospace" method="post" action="{$imgedit.my_url}" onsubmit="imgedit_getCoordinates()">
                <div class="smallcaps center">
                    <input class="specialbutton" type="submit" name="crop" value="Crop this image! I'm serious!" />
                    <div id="scaletext">
                        <span>OR</span> <input class="specialbutton" type="submit" onclick="return imgedit_autoSize('true');" name="scale" value="Just get that crap somehow inside, will ya? (Equals to: Fit image to largest side)" />
                    </div>
                </div>

                <input type="hidden" id="area_orientation"  name="area_orientation"  value="{$imgedit.area_orientation}" />
                <input type="hidden" id="zoombox_factor"    name="zoombox_factor"    value="{$imgedit.zoombox_factor}" />
                <input type="hidden" id="zoombox_x"         name="zoombox_x"         value="{$imgedit.zoombox_x}" />
                <input type="hidden" id="zoombox_y"         name="zoombox_y"         value="{$imgedit.zoombox_y}" />
                <input type="hidden" id="real_img_width"    name="real_img_width"    value="{$imgedit.real_img_width}" />
                <input type="hidden" id="real_img_height"   name="real_img_height"   value="{$imgedit.real_img_height}" />
                <input type="hidden" id="autoguess_clicked" name="autoguess_clicked" value="{$imgedit.autoguess_clicked}" />

                <div id="zoom">
                    <div class="smallcaps">
                        <input type="submit" name="action[enlarge]" onclick="return imgedit_zoom(-2); this.blur();" value="Enlarge" class="button" />
                    </div>

                    <script language="JavaScript" type="text/javascript">
                        document.write('<div id="zoomslider"><img id="zoombutton" src="{serendipity_getFile file="admin/img/imgedit_slider.gif"}" width="25" height="5" alt="[Slider]" /></div>');
                    </script>

                    <noscript>
                        <div class="smallcaps">Zoom: {$imgedit.zoombox_factor}x</div>
                    </noscript>

                    <div class="smallcaps"><input type="submit" name="action[reduce]"          onclick="return imgedit_zoom(2); this.blur();"   value="Reduce" class="button" /></div>
                    <div class="smallcaps"><input type="submit" name="autoscale"               onclick="return imgedit_autoSize('false');"      value="Best Guess" class="button" /></div>

                    <!-- BEGIN ORIENTATION_AVAILABLE -->
                    <div class="smallcaps"><input type="image"  name="toggle_area_orientation" onclick="return imgedit_areaOrientation();"    title="Toggle Orientation" alt="Toggle Orientation" src="{serendipity_getFile file="admin/img/imgedit_orientation.gif"}" /></div>
                    <!-- END ORIENTATION_AVAILABLE -->
                    <noscript>
                        <br />
                        <input class="button" type="submit" name="action[moveup]"    onclick="this.blur();" value="^" /><br />
                        <input class="button" type="submit" name="action[moveleft]"  onclick="this.blur();" value="&lt;" />
                        <input class="button" type="submit" name="action[moveright]" onclick="this.blur();"  value="&gt;" /><br />
                        <input class="button" type="submit" name="action[movedown]"  onclick="this.blur();"  value="V" /><br />
                        <span class="smallcaps">Move by <input class="button small" type="text"   name="move_increase" value="{$imgedit.move_increase}" />px</span>
                    </noscript>
                </div>

                <div id="outer">
                    <img id="backdrop" src="{$imgedit.http_img_name}"       alt="Backdrop"    width="{$imgedit.img_width}"   height="{$imgedit.img_height}"   />
                    <img id="overlay"  src="{$imgedit.http_img_name}"       alt="Overlay"     width="{$imgedit.img_width}"   height="{$imgedit.img_height}"   />
                    <img id="harea"    src="{$imgedit.harea_img_name}"  alt="[Crop area]" width="{$imgedit.harea_width}" height="{$imgedit.harea_height}" />
                    <img id="varea"    src="{$imgedit.varea_img_name}"  alt="[Crop area]" width="{$imgedit.varea_width}" height="{$imgedit.varea_height}" />
                </div>
            </form>
        </div>
        <script language="JavaScript" type="text/javascript">imgedit_init({$imgedit.zoombox_width}, {$imgedit.area_border}, {$imgedit.zoombox_x}, {$imgedit.zoombox_y}, '{$imgedit.area_orientation}');</script>
    </body>
</html>