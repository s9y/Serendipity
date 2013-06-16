<?php

class serendipity_plugin_plug extends serendipity_plugin {
    var $title = POWERED_BY;

    function introspect(&$propbag)
    {
        $propbag->add('name',          POWERED_BY);
        $propbag->add('description',   ADVERTISES_BLAHBLAH);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.0');
        $propbag->add('configuration', array(
                                        'image',
                                        'text'));
        $propbag->add('groups',        array('FRONTEND_VIEWS'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'image':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        POWERED_BY_SHOW_IMAGE);
                $propbag->add('description', POWERED_BY_SHOW_IMAGE_DESC);
                $propbag->add('default',     'true');
                break;

            case 'text':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        POWERED_BY_SHOW_TEXT);
                $propbag->add('description', POWERED_BY_SHOW_TEXT_DESC);
                $propbag->add('default',     'false');
                break;
            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->title;
?>
<div class="serendipityPlug">
<?php if ( $this->get_config('image', 'true') == 'true' ) { ?>
    <a title="<?php echo $title ?> Serendipity" href="http://www.s9y.org/"><img src="<?php echo serendipity_getTemplateFile('img/s9y_banner_small.png') ?>" alt="Serendipity PHP Weblog" style="border: 0px" /></a>
<?php } ?>
<?php if ( $this->get_config('text', 'false') == 'true' ) { ?>
    <div>
        <a title="<?php echo $title ?> Serendipity" href="http://www.s9y.org/">Serendipity PHP Weblog</a>
    </div>
<?php } ?>
</div>
<?php
    }
}

?>