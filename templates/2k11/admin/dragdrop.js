jQuery("document").ready(function() {
    // TODO: Add autoscrolling
    jQuery('.pluginmanager_container').sortable(
        {
            containerSelector: '.pluginmanager_container',
            group: 'plugins',    // TODO: Distinguish between sidebar and event-plugin-container
            handle: '.pluginmanager_grablet',
            onDrop: function ($item, container, _super) {
                var placement = $item.parents('.pluginmanager_container').data("placement");
                $item.find('input[name$="placement]"]').val(placement);
                $item.removeClass("dragged").removeAttr("style")
                jQuery("body").removeClass("dragging")
            }
        }
    );
});