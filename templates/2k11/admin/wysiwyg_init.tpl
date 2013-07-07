{if $init}
    <script src="{$serendipityHTTPPath}htmlarea/ckeditor/ckeditor.js"></script>
    {if ! $use_popup}
        <script src="{serendipity_getFile file='admin/js/jquery.magnific-popup.js'}"></script>
    {/if}
{/if}
<script>
    $('document').ready(function() {
        CKEDITOR.plugins.add('s9y_medialibrary{$item}', {
            init: function( editor ) {
                editor.addCommand( 'openML', {
                    exec : function( editor ) {
                        {if $use_popups}
                            window.open('serendipity_admin_image_selector.php?serendipity[textarea]={$item}',
                                     'ImageSel',
                                     'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');
                        {else}
                            $.magnificPopup.open({
                              items: {
                                src: 'serendipity_admin_image_selector.php?serendipity[textarea]={$item}'
                              },
                              type: 'iframe'
                            });
                        {/if}
                    }
                });
                editor.ui.addButton('s9y_medialibrary{$item}', {
                    label: 'Media',
                    command: 'openML',
                    icon: '{serendipity_getFile file="admin/img/thumbnail.png"}'
                });
            }
        });
        CKEDITOR.replace($('#'+serendipity.escapeBrackets('{$item}')).get(0), {
            extraPlugins : 's9y_medialibrary{$item}',
            toolbar: [
                { name: 'tools', items: [ 'Maximize' ] },
                { name: 'styles', items: [ 'Format' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'RemoveFormat' ] },
                { name: 'paragraph',  groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                { name: 'insert', items: [ 'Image', 's9y_medialibrary{$item}', 'Table', 'HorizontalRule', 'SpecialChar' ] },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Scayt' ] },
                { name: 'others', items: [ '-' ] },
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
                { name: 'about', items: [ 'About' ] }
            ]
        });
    });
</script>
