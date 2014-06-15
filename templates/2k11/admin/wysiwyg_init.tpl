{if $init == false}
    <script src="{$serendipityHTTPPath}htmlarea/ckeditor/ckeditor/ckeditor.js"></script>
    <script src="{$serendipityHTTPPath}htmlarea/ckeditor/ckeditor_custom_plugin.js"></script>
{/if}
<script>
    $('document').ready(function() {
        CKEDITOR.plugins.add('s9y_medialibrary{$item}', {
            init: function( editor ) {
                editor.addCommand( 'openML', {
                    exec : function( editor ) {
                        serendipity.openPopup('serendipity_admin.php?serendipity[adminModule]=media&serendipity[noBanner]=true&serendipity[noSidebar]=true&serendipity[noFooter]=true&serendipity[showMediaToolbar]=false&serendipity[showUpload]=true&serendipity[textarea]={$item}');
                    }
                });
                editor.ui.addButton('s9y_medialibrary{$item}', {
                    label: '{$CONST.MEDIA_LIBRARY}',
                    command: 'openML',
                    icon: '{serendipity_getFile file="admin/img/thumbnail.png"}'
                });
                
            }
        });
        {foreach $buttons as $button}
            CKEDITOR.plugins.add('{$button.id}', {
                init: function( editor ) {
                    editor.addCommand( '{$button.name}', {
                        exec : function( editor ) {
                            popupEditorInstance = editor;
                            ( {$button.javascript} () )
                        }
                    });
                    editor.ui.addButton('{$button.id}', {
                        label: '{$button.name}',
                        title: '{$button.name} Plugin',
                        command: '{$button.name}',
                        icon: '{$button.img_url}',
                        iconName: '{$button.id}_icon'
                    });
                    
                }
            });
        {/foreach}
            
        
        ckeitem = '{$item}';
        CKEDITOR.replace($('#'+serendipity.escapeBrackets(ckeitem)).get(0), {
            customConfig : '{$serendipityHTTPPath}htmlarea/ckeditor/ckeditor_custom_config.js',
            extraPlugins : 's9y_medialibrary{$item}{foreach $buttons as $button},{$button.id}{/foreach}',
            
            on: {
                instanceReady: function( evt ) {
                    CKEDITOR.instances["{$item}"].document.once('keyup', function() {
                        setInterval(function() {
                            serendipity.cache("{$item}", CKEDITOR.instances["{$item}"].getData());
                        }, 5000)
                    });
                }
            },
            
            toolbar: [
                { name: 'tools', items: [ 'Maximize' ] },
                { name: 'styles', items: [ 'Format' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'RemoveFormat' ] },
                { name: 'paragraph',  groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                { name: 'insert', items: [ 'Image', 's9y_medialibrary{$item}', 'Table', 'HorizontalRule', 'SpecialChar' ] },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Scayt' ] },
                { name: 'others', items: [ '-' {foreach $buttons as $button}, '{$button.id}'{/foreach} ] },
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
                { name: 'about', items: [ 'About' ] }
            ]
        });
    });
</script>
