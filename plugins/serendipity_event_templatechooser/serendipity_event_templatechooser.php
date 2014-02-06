<?php #

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_templatechooser extends serendipity_event
{
    var $title = PLUGIN_EVENT_TEMPLATECHOOSER_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',        PLUGIN_EVENT_TEMPLATECHOOSER_NAME);
        $propbag->add('description', PLUGIN_EVENT_TEMPLATECHOOSER_DESC);
        $propbag->add('stackable',   false);
        $propbag->add('author',      'Evan Nemerson');
        $propbag->add('version',     '1.4');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('groups', array('BACKEND_TEMPLATES'));
        $propbag->add('event_hooks', array('frontend_configure' => true));

        // Register (multiple) dependencies. KEY is the name of the depending plugin. VALUE is a mode of either 'remove' or 'keep'.
        // If the mode 'remove' is set, removing the plugin results in a removal of the depending plugin. 'Keep' meens to
        // not touch the depending plugin.
        $this->dependencies = array('serendipity_plugin_templatedropdown' => 'remove');
    }

    function generate_content(&$title) {
        $title = $this->title;
    }

    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {
            switch($event) {
              case 'frontend_configure':

                if (isset($serendipity['COOKIE']['user_template']) && !isset($_REQUEST['user_template'])) {
                    $_REQUEST['user_template'] = $serendipity['COOKIE']['user_template'];
                }

                if (isset($_REQUEST['user_template']) && (in_array($_REQUEST['user_template'], serendipity_fetchTemplates())) ) {
                    $_SESSION['serendipityUseTemplate'] = $_REQUEST['user_template'];
                    serendipity_setCookie('user_template', $_REQUEST['user_template'], false);
                }
                
                // If the requested template is the same as the current default template,
                // we will not set this variable. This is important so that templates/plugins
                // which detect serendipityUseTemplate can use reasonable defaults in case
                // template configuration options do not exist. Guess nobody understands
                // this explanation anyways, and who reads this stuff, heh?
                if ($_SESSION['serendipityUseTemplate'] == $eventData['template']) {
                    unset($_SESSION['serendipityUseTemplate']);
                }

                if (isset($_SESSION['serendipityUseTemplate']) ) {
                    $templateInfo = serendipity_fetchTemplateInfo($_SESSION['serendipityUseTemplate']);
                    $eventData['template'] = $_SESSION['serendipityUseTemplate'];
                    // NOTE: Bulletproof uses diverse options, but since they are not configured by default, we cannot output fallback templates using bulletproof. So we need to use "default" for now.
                    $eventData['template_engine'] = isset($templateInfo['engine']) ? $templateInfo['engine'] : 'default';
                    $serendipity['smarty_vars']['head_link_stylesheet'] = $serendipity['baseURL'] . 'serendipity.css.php?switch=' . $_REQUEST['user_template'];
                }

                return true;
                break;

              default:
                return false;
            }

        } else {
            return false;
        }
    }
}

/* vim: set sts=4 ts=4 expandtab : */
