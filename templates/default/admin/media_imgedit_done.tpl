        <fieldset class="info" id="fs_info">
            <legend>Output Information</legend>

            Your image was {$imgedit.real_img_width} x {$imgedit.real_img_height} pixels (Orientation: {$imgedit.area_orientation}).<br />
            Depending on your zoom of {$imgedit.zoombox_factor}x, it was {$imgedit.zoom_img_width} x {$imgedit.zoom_img_height} pixels.<br />
            It got scaled to {$imgedit.img_width} x {$imgedit.img_height} pixels.<br />
            Then a rectangle starting from ({$imgedit.slice_from_x}|{$imgedit.slice_from_y}) to ({$imgedit.slice_to_x}|{$imgedit.slice_to_y}) has been sliced from it.<br />
            <br />

            {if $imgedit.image_cut}
            The image has been correctly cropped and only the part inside of the rectangle is going to be shown.
            {/if}

            {if $imgedit.image_no_cut}
            Because the source dimensions were smaller than the destination dimensions, the image does not fill up the complete space.
            {/if}

            {if $imgedit.image_error}
            <span class="error">However, there were errors processing your image.</span>
            {/if}
        </fieldset>

        <fieldset class="info" style="height: 200px">
            <legend>Image Result</legend>

            Cropped Image:<br />

            <div id="outer">
                <img id="cropimage" alt="Cropped image" src="{$imgedit.http_img_name}?{$imgedit.refresh_line}" width="{$imgedit.img_width}" height="{$imgedit.img_height}" class="crop" />
            </div>
        </fieldset>

        <fieldset class="info">
            <legend>Play it again, Sam</legend>

            That was great! So, please once more, with feeling!.
        </fieldset>