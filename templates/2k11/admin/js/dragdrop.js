$("document").ready(function() {
    $('.pluginmanager_container').sortable({
            containerSelector: '.pluginmanager_container',
            group: 'plugins',    // TODO: Distinguish between sidebar and event-plugin-container
            handle: '.pluginmanager_grablet',

            onDrop: function ($item, container, _super) {
                var placement = $item.parents('.pluginmanager_container').data("placement");
                $item.find('input[name$="placement]"]').val(placement);
                $item.removeClass("dragged").removeAttr("style")
                $("body").removeClass("dragging")
                $.autoscroll.stop();
            },
            onDragStart: function ($item, container, _super) {
                $.autoscroll.init();
                $item.css({
                    height: $item.height(),
                    width: $item.width()
                })
                $item.addClass("dragged")
                $("body").addClass("dragging")
            }
        }
    );
});