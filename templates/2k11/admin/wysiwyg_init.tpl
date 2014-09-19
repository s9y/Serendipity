{if $init == false}
    <script src="{$serendipityHTTPPath}htmlarea/ckeditor/ckeditor/ckeditor.js"></script>
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
                    icon: '{serendipity_getFile file="admin/img/thumbnail.png"}',
                    toolbar: 'insert'
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
            customConfig : '{$serendipityHTTPPath}htmlarea/ckeditor/serendipity_config.js',
            extraPlugins : 's9y_medialibrary{$item}{foreach $buttons as $button},{$button.id}{/foreach}',
            
            on: {
                instanceReady: function( evt ) {
                    if(Modernizr.indexeddb && {$use_autosave}) {
                        CKEDITOR.instances["{$item}"].document.once('keyup', function() {
                            setInterval(function() {
                                serendipity.cache("{$item}", CKEDITOR.instances["{$item}"].getData());
                            }, 5000)
                        });
                    }
                }
            }
        });
    });
</script>