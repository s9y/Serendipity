<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

class serendipity_plugin_subscribe extends serendipity_plugin
{

    var $title = PLUGIN_SUBSCRIBE_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_SUBSCRIBE_NAME);
        $propbag->add('description',   PLUGIN_SUBSCRIBE_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Stephan Brunker');
        $propbag->add('version', '1.0');
        $propbag->add('requirements',  array(
            'serendipity' => '2.4',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('configuration', array(
                'title',
                'linktext',
                'iconURL'
                ));
        $propbag->add('groups',        array('FRONTEND_VIEWS'));

        $propbag->add('legal',    array(
            'services' => array(),
            'frontend' => array(),
            'backend' => array(),
            'cookies' => array(),
            'stores_user_input'     => true,
            'stores_ip'             => false,
            'uses_ip'               => false,
            'transmits_user_input'  => false
        ));
    }

    function introspect_config_item($name, &$propbag)
    {
        global $serendipity;

        switch($name) {
            case 'title':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_SUBSCRIBE_TITLE);
                $propbag->add('description', PLUGIN_SUBSCRIBE_TITLE_DESC);
                $propbag->add('default',     PLUGIN_SUBSCRIBE_TITLE_DEFAULT);
                break;

            case 'linktext':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_SUBSCRIBE_LINK);
                $propbag->add('description', PLUGIN_SUBSCRIBE_LINK_DESC);
                $propbag->add('default',     PLUGIN_SUBSCRIBE_LINK_DEFAULT);
                break;

            case 'iconURL':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY);
                $propbag->add('description', PLUGIN_SUBSCRIBE_IMAGE_DESC);
                $propbag->add('default',     'img/mail.png');
                break;
        }
        return true;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->get_config('title');
        $link = $this->get_config('linktext');
        $image = $this->get_config('iconURL');

        $subscribepage =  $serendipity['rewrite'] != 'none'
                                             ? $serendipity['serendipityHTTPPath'] . $serendipity['permalinkSubscribePath'] . '/blog'
                                             : $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] . '?/' . $serendipity['permalinkSubscribePath'] . '/blog';

        if ($image == 'none') {
            echo '<a title="' . $link . '" href="' . $subscribepage . '">' . $link . '</a>';
        } else {
            $icon = serendipity_getTemplateFile($image);
            echo '<a title="' . $link . '" class="serendipity_xml_icon" href="' . $subscribepage . '"><img src="' . $icon . '" alt="XML" style="border: 0px" /></a>';
        }
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>
