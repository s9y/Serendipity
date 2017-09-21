<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

class serendipity_plugin_plug extends serendipity_plugin
{
    var $title = POWERED_BY;

    function introspect(&$propbag)
    {
        $propbag->add('name',          POWERED_BY);
        $propbag->add('description',   ADVERTISES_BLAHBLAH);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.3');
        $propbag->add('configuration', array(
                                        'image',
                                        'image2',
                                        'text'));
        $propbag->add('groups',        array('FRONTEND_VIEWS'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'image':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        POWERED_BY_SHOW_IMAGE . ' 1');
                $propbag->add('description', POWERED_BY_SHOW_IMAGE_DESC);
                $propbag->add('default',     'false');
                break;

            case 'image2':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        POWERED_BY_SHOW_IMAGE . ' 2');
                $propbag->add('description', POWERED_BY_SHOW_IMAGE_DESC);
                $propbag->add('default',     'false');
                break;

            case 'text':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        POWERED_BY_SHOW_TEXT);
                $propbag->add('description', POWERED_BY_SHOW_TEXT_DESC);
                $propbag->add('default',     'true');
                break;

            default:
                return false;
        }
        return true;
    }

    function example()
    {
        global $serendipity;

        $s = '';
        $s .= "\n";
        $s = '<div class="configuration_group odd">';
        $s .= POWERED_BY_SHOW_IMAGE;
        $s .= '1: <img src="' . serendipity_getTemplateFile('img/s9y_banner_small.png') . '" alt="Serendipity PHP Weblog" title="' . POWERED_BY . ' Serendipity" /> ';
        $s .= "</div>\n";
        $s .= '<div class="configuration_group even">';
        $s .= POWERED_BY_SHOW_IMAGE;
        $s .= '2: <img src="' . $serendipity['serendipityHTTPPath'] . $serendipity['templatePath'] . 's9y_banner_small.png" alt="Serendipity PHP Weblog" title="' . POWERED_BY . ' Serendipity" />';
        $s .= "<div>\n";
        return $s;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->title;
?>
<div class="serendipityPlug">
<?php if (serendipity_db_bool($this->get_config('image', 'false'))) { ?>
    <a title="<?php echo $title ?> Serendipity" href="http://www.s9y.org/"><img src="<?php echo serendipity_getTemplateFile('img/s9y_banner_small.png') ?>" alt="Serendipity PHP Weblog" style="border: 0px" /></a>
<?php } ?>
<?php if (serendipity_db_bool($this->get_config('image2', 'false'))) { ?>
    <a title="<?php echo $title ?> Serendipity" href="http://www.s9y.org/"><img src="<?php echo $serendipity['serendipityHTTPPath'] . $serendipity['templatePath'] . 's9y_banner_small.png'; ?>" alt="Serendipity PHP Weblog" style="border: 0px" /></a>
<?php } ?>
<?php if (serendipity_db_bool($this->get_config('text', 'true'))) { ?>
    <div>
        <a title="<?php echo $title ?> Serendipity" href="http://www.s9y.org/">Serendipity PHP Weblog</a>
    </div>
<?php } ?>
</div>
<?php
    }

}

?>