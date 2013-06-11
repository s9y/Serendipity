{* Erm, why isn't this localized at all? o_O *}
        <div  id="fs_info" class="info">
            {* Check if h3 is the proper level. *}
            <h3>Output Information</h3>

            <p>Your image was {$imgedit.real_img_width} x {$imgedit.real_img_height} pixels (Orientation: {$imgedit.area_orientation}).</p>

            <p>Depending on your zoom of {$imgedit.zoombox_factor}x, it was {$imgedit.zoom_img_width} x {$imgedit.zoom_img_height} pixels.</p>

            <p>It got scaled to {$imgedit.img_width} x {$imgedit.img_height} pixels.</p>

            <p>Then a rectangle starting from ({$imgedit.slice_from_x}|{$imgedit.slice_from_y}) to ({$imgedit.slice_to_x}|{$imgedit.slice_to_y}) has been sliced from it.</p>
        {if $imgedit.image_cut}
            <p>The image has been correctly cropped and only the part inside of the rectangle is going to be shown.</p>
        {/if}
        {if $imgedit.image_no_cut}
            <p>Because the source dimensions were smaller than the destination dimensions, the image does not fill up the complete space.</p>
        {/if}
        {if $imgedit.image_error}
            <span class="msg_error"><span class="icon-attention-circled"></span> However, there were errors processing your image.</span>
        {/if}
        </div>

        <div id="fs_crop" class="info">
            <h3>Image Result</h3>

            <h4>Cropped Image:<h4>

            <div id="outer">
                <img id="cropimage" class="crop" src="{$imgedit.http_img_name}?{$imgedit.refresh_line}" width="{$imgedit.img_width}" height="{$imgedit.img_height}" alt="Cropped image">
            </div>
        </div>

        <div class="info">
            <h3>Play it again, Sam</h3>

            <p>That was great! So, please once more, with feeling!</p>
        </div>
