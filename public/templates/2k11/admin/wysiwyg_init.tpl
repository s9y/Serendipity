{if $init == false}

{if $wysiwygToolbar != 'CKE'}
<link rel="stylesheet" href="{$serendipityHTTPPath}htmlarea/s9y_cketoolbar.css">
{/if}
<script src="{$serendipityHTTPPath}htmlarea/ckeditor/ckeditor/ckeditor.js"></script>
<script src="{$wysiwyg_customPlugin}"></script>

{/if}
<script>
    $('document').ready(function() {
        CKEDITOR.plugins.add('s9y_medialibrary_{$item}', {
            init: function( editor ) {
                editor.addCommand( 'openML', {
                    exec : function( editor ) {
                        serendipity.openPopup('serendipity_admin.php?serendipity[adminModule]=media&serendipity[noBanner]=true&serendipity[noSidebar]=true&serendipity[noFooter]=true&serendipity[showMediaToolbar]=false&serendipity[showUpload]=true&serendipity[textarea]={$item}');
                    }
                });
                editor.ui.addButton('s9y_medialibrary_{$item}', {
                    label: '{$CONST.MEDIA_LIBRARY}',
                    command: 'openML',
                    icon: '{serendipity_getFile file="admin/img/thumbnail.png"}'
                });
                
            }
        });

        s9ymediabuttons.push('s9y_medialibrary_{$item}');

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

            s9ypluginbuttons.push('{$button.id}');

        {/foreach}

        var s9yplugins = customplugins.concat('s9y_medialibrary_{$item}{foreach $buttons as $button},{$button.id}{/foreach}');

        CKEDITOR.replace($('#'+serendipity.escapeBrackets('{$item}')).get(0), {
            extraPlugins : s9yplugins,
            toolbar      : '{$wysiwygToolbar|default:"Default"}',
            language     : '{$CONST.WYSIWYG_LANG}',
            customConfig : '{$wysiwyg_customConfig}',
            {if $use_autosave == 'true'}

            on: {
                instanceReady: function( evt ) {
                    if(Modernizr.indexeddb) {
                        CKEDITOR.instances["{$item}"].document.once('keyup', function() {
                            setInterval(function() {
                                serendipity.cache("{$item}", CKEDITOR.instances["{$item}"].getData());
                            }, 5000)
                        });
                    }
                }
            }
            {/if}

        });
    });
</script>
