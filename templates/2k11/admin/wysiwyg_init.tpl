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
                    label: 'Media',
                    command: 'openML',
                    icon: '{serendipity_getFile file="admin/img/thumbnail.png"}'
                });
                
            }
        });
        {foreach $buttons as $button}
            CKEDITOR.plugins.add('{$button.id}', {
                init: function( editor ) {
                    editor.addCommand( '{$button.name}', {
                        exec : {$button.javascript}
                    });
                    editor.ui.addButton('{$button.id}', {
                        label: '{$button.name}',
                        command: '{$button.name}',
                        icon: '{$button.img_url}'
                    });
                    
                }
            });
        {/foreach}
            
        
        CKEDITOR.replace($('#'+serendipity.escapeBrackets('{$item}')).get(0), {
            customConfig : '{$serendipityHTTPPath}htmlarea/ckeditor/ckeditor_custom_config.js',
            extraPlugins : 's9y_medialibrary{$item}{foreach $buttons as $button},{$button.id}{/foreach}',
            
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
