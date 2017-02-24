<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

// Probe for a language include with constants. Still include defines later on, if some constants were missing
$probelang = dirname(__FILE__) . '/' . $serendipity['charset'] . 'lang_' . $serendipity['lang'] . '.inc.php';
if (file_exists($probelang)) {
    include $probelang;
}

include dirname(__FILE__) . '/lang_en.inc.php';

class serendipity_event_ckeditor extends serendipity_event
{
    var $title = PLUGIN_EVENT_CKEDITOR_NAME;
    var $is_init = false;

    function example() {
        echo PLUGIN_EVENT_CKEDITOR_INSTALL;
        echo PLUGIN_EVENT_CKEDITOR_CONFIG;
    }

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_CKEDITOR_NAME);
        $propbag->add('description',   PLUGIN_EVENT_CKEDITOR_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Ziyad Saeed, Garvin Hicking, Rustam Abdullaev');
        $propbag->add('version',       '1.0');
        $propbag->add('requirements',  array(
            'serendipity' => '0.9',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));

        $propbag->add('event_hooks',   array(
            'backend_wysiwyg'        => true,
            'backend_wysiwyg_finish' => true
        ));
        $propbag->add('configuration', array('path', 'ckeditor_plugins'));
        $propbag->add('groups', array('BACKEND_EDITOR'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'path':
                $propbag->add('type', 'string');
                $propbag->add('name', INSTALL_RELPATH);
                $propbag->add('description', '');
                $propbag->add('default', 'plugins/serendipity_event_ckeditor/ckeditor/');
                break;

            default:
                    return false;
        }
        return true;
    }

    function generate_content(&$title) {
        $title = $this->title;
    }

    function event_hook($event, &$bag, &$eventData) {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {
            switch($event) {
                case 'backend_wysiwyg':
                    $eventData['skip'] = true;
                    if (preg_match('@^nugget@i', $eventData['item'])) {
                        $this->event_hook('backend_wysiwyg_finish', $bag, $eventData);
                    }
                    return true;
                    break;

                case 'backend_wysiwyg_finish':
                    $path = $this->get_config('path');
                    if ($this->init) {
                        return true;
                    }

?>
<script type="text/javascript">
	CKEDITOR_BASEPATH = '<?php echo $path; ?>' ;
</script>
<script language="javascript" type="text/javascript" src="<?php echo $path; ?>ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.config['skin'] = 'v2';
	CKEDITOR.config['height'] = 400;
        function ck_addLoadEvent(func) {
          var oldonload = window.onload;
          if (typeof window.onload != 'function') {
            window.onload = func;
          } else {
            window.onload = function() {
              oldonload();
              func();
            }
          }
        }

        function ck_init() {
            if (document.getElementById('serendipity[body]')) {
                CKEDITOR.replace('serendipity[body]') ;
            }

            if (document.getElementById('serendipity[extended]')) {
                CKEDITOR.replace('serendipity[extended]') ;
            }
        }

        function Spawnnuggets(item) {
            if (document.getElementById('nuggets' + item)) {
                CKEDITOR.replace('nuggets' + item) ;
            }
        }

        ck_addLoadEvent(ck_init);
</script>
<?php

                    $this->init = true;
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

?>
