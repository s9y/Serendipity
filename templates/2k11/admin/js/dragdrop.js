$("document").ready(function() {
    $('.pluginmanager_sidebar .pluginmanager_container').sortable(getDragdropConfiguration('plugins_sidebar'));
    $('.pluginmanager_event .pluginmanager_container').sortable(getDragdropConfiguration('plugins_event'));

    function getDragdropConfiguration(group) {
        return {
            containerSelector: '.pluginmanager_container',
            group: group,
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
    }
});