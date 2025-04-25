<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_plugin_creativecommons extends serendipity_plugin
{
    var $title = PLUGIN_SIDEBAR_CREATIVECOMMONS_NAME;
    protected $dependencies = array();

    function introspect(&$propbag)
    {
        $this->title = $this->get_config('title', $this->title);

        $propbag->add('name',          PLUGIN_SIDEBAR_CREATIVECOMMONS_NAME);
        $propbag->add('description',   PLUGIN_SIDEBAR_CREATIVECOMMONS_DESC);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Evan Nemerson');
        $propbag->add('version',       '1.1');
        $propbag->add('requirements',  array(
            'serendipity' => '1.6',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('configuration', array('title'));
        $propbag->add('groups', array('FRONTEND_EXTERNAL_SERVICES'));

        $this->dependencies = array('serendipity_event_creativecommons' => 'remove');
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {

            case 'title':
                $propbag->add('type',          'string');
                $propbag->add('name',          TITLE);
                $propbag->add('description',   TITLE);
                $propbag->add('default', '');
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
      global $serendipity;

      $title = $this->get_config('title', $this->title);

      $eventData = array('display_dat' => '');
      serendipity_plugin_api::hook_event('frontend_display:html_layout', $eventData);
      echo $eventData['display_dat'];
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>