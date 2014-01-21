<?php # $Id$

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_creativecommons extends serendipity_event {
    var $title = PLUGIN_CREATIVECOMMONS_NAME;

    function introspect(&$propbag)
    {

        $propbag->add('name',          PLUGIN_CREATIVECOMMONS_NAME);
        $propbag->add('description',   PLUGIN_CREATIVECOMMONS_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Evan Nemerson');
        $propbag->add('version',       '1.5');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('configuration', array('cc_version', 'nc', 'nd', 'txt', 'image_type'));
        $propbag->add('event_hooks',
                      array('frontend_display:rss-1.0:per_entry' => true,
                            'frontend_display:rss-1.0:once'      => true,
                            'frontend_display:rss-1.0:namespace' => true,
                            'frontend_display:rss-2.0:per_entry' => true,
                            'frontend_display:rss-2.0:namespace' => true,
                            'frontend_display:html:per_entry'    => true,
                            'frontend_display:html_layout'       => true));
        $propbag->add('groups', array('FRONTEND_EXTERNAL_SERVICES'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            /*
            case 'by':
                $propbag->add('type',          'boolean');
                $propbag->add('name',          PLUGIN_CREATIVECOMMONS_BY);
                $propbag->add('description',   PLUGIN_CREATIVECOMMONS_BY_DESC);
                break;
            */
            case 'cc_version':
                $cc_versions = array(
                    '1.0'   => '1.0',
                    '2.5'   => '2.5',
                    '3.0'   => '3.0',
                    '4.0'   => '4.0',
                );
                $propbag->add('type',           'select');
                $propbag->add('name',           PLUGIN_CREATIVECOMMONS_VERSION);
                $propbag->add('description',    PLUGIN_CREATIVECOMMONS_VERSION_DESC);
                $propbag->add('select_values',  $cc_versions);
                $propbag->add('default',        '3.0');
                break;

            case 'nc':
                $propbag->add('type',          'boolean');
                $propbag->add('name',          PLUGIN_CREATIVECOMMONS_NC);
                $propbag->add('description',   PLUGIN_CREATIVECOMMONS_NC_DESC);
                $propbag->add('default',       'true');
                break;

            case 'nd':
                $propbag->add('type',          'radio');
                $propbag->add('name',          PLUGIN_CREATIVECOMMONS_ND);
                $propbag->add('description',   PLUGIN_CREATIVECOMMONS_ND_DESC);
                $propbag->add('radio',         array(
                    'value' => array('yes', 'sa', 'no'),
                    'desc'  => array(YES, PLUGIN_CREATIVECOMMONS_SA_DESC, NO)
                ));
                $propbag->add('radio_per_row', '1');
                $propbag->add('default', 'yes');

                break;
            case 'image_type':
                $image_types = array(
                    'generic'   => PLUGIN_CREATIVECOMMONS_IMAGETYPE_GENERIC,
                    'small'     => PLUGIN_CREATIVECOMMONS_IMAGETYPE_SMALL,
                    'big'       => PLUGIN_CREATIVECOMMONS_IMAGETYPE_BIG
                );
                $propbag->add('type',           'select');
                $propbag->add('name',           PLUGIN_CREATIVECOMMONS_IMAGETYPE);
                $propbag->add('description',    PLUGIN_CREATIVECOMMONS_IMAGETYPE_DESC);
                $propbag->add('select_values',  $image_types);
                $propbag->add('default',        'generic');
                break;

            case 'txt':
                $propbag->add('type',          'boolean');
                $propbag->add('name',          PLUGIN_CREATIVECOMMONS_TXT);
                $propbag->add('description',   PLUGIN_CREATIVECOMMONS_TXT_DESC);
                $propbag->add('default',       'true');
                break;

            default:
                return false;
                break;
        }
        return true;
    }

    function generate_content(&$title) {
        $title = $this->title;
    }

    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;

        $license_data    = $this->get_license_data();
        $license_version = $this->get_config('cc_version', '3.0');
        $license_type    = $license_data['type'];
        $license_string  = $license_data['string'];
        $rdf             = $license_data['rdf'];

        if ($license_string == '') {
            $license_uri = 'http://web.resource.org/cc/PublicDomain';
        } else {
            $license_uri = 'http://creativecommons.org/licenses/'.$license_string.'/'.$license_version.'/';
            switch ($serendipity['lang']){
                case 'ja':
                    $license_uri .= 'deed.ja';
                    break;
                case 'de':
                    $license_uri .= 'deed.de';
                    break;
            }
        }

        $cc_visibility = 'invisible';

        switch ($event) {
            case 'frontend_display:html_layout':
                $cc_visibility = 'visible';
            case 'frontend_display:html:per_entry':
                $eventData['display_dat'] .= '<div style="text-align: center;">';
                if ($license_string == '') {
                    if ($cc_visibility == 'visible') {
                        $image_titel = 'No Rights Reserved';
                        $eventData['display_dat'] .= '<a href="http://creativecommons.org/licenses/publicdomain">';
                        $eventData['display_dat'] .= '<img style="border: 0px" alt="' . $image_titel. '" title="' . $image_titel. '" src="' . serendipity_getTemplateFile('img/norights.png') .'" />';
                        $eventData['display_dat'] .= '</a>';
                        if (serendipity_db_bool($this->get_config('txt', true))) {
                            $eventData['display_dat'] .= '<br />' . str_replace('#license_uri#', $license_uri, PLUGIN_CREATIVECOMMONS_CAP_PD);
                        }
                    }
                } elseif ($cc_visibility == 'visible') {
                    $image_titel = 'Creative Commons License - Some Rights Reserved';
                    $eventData['display_dat'] .= '<a href="'.$license_uri.'">';
                    $eventData['display_dat'] .= '<img style="border: 0px" alt="' . $image_titel. '" title="' . $image_titel. '" src="' . serendipity_getTemplateFile('img/somerights20.gif') .'" />';
                    $eventData['display_dat'] .= '</a>';
                    if (serendipity_db_bool($this->get_config('txt', true))) {
                        $eventData['display_dat'] .= '<br />' . str_replace('#license_uri#', $license_uri, PLUGIN_CREATIVECOMMONS_CAP);
                    }
                }

                $eventData['display_dat'] .= '<!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><Work rdf:about=""><license rdf:resource="'.$license_uri.'"/></Work><License rdf:about="'.$license_uri.'">';
                if (is_array($rdf)) {
                    foreach ($rdf as $rdf_t => $rdf_v) {
                        $eventData['display_dat'] .= '  <'.$rdf_v.' rdf:resource="http://web.resource.org/cc/'.$rdf_t.'" />';
                    }
                }

                $eventData['display_dat'] .= '</License></rdf:RDF> -->';
                $eventData['display_dat'] .= '</div>';
                return true;
                break;

            case 'frontend_display:rss-2.0:per_entry':
                $eventData['display_dat'] .= '<creativeCommons:license>'.$license_uri.'</creativeCommons:license>';
                return true;
                break;

            case 'frontend_display:rss-1.0:per_entry':
                $eventData['display_dat'] .= '<cc:license rdf:resource="'.$license_uri.'" />';
                return true;
                break;

            case 'frontend_display:rss-1.0:once':
                $eventData['display_dat'] .= '<cc:License rdf:about="'.$license_uri.'">';
                if (is_array($rdf)) {
                    foreach ($rdf as $rdf_t => $rdf_v) {
                        $eventData['display_dat'] .= '<cc:'.$rdf_v.' rdf:resource="http://web.resource.org/cc/'.$rdf_t.'" />';
                    }
                }
                $eventData['display_dat'] .= '</cc:License>';
                return true;
                break;

            case 'frontend_display:rss-2.0:namespace':
                $eventData['display_dat'] .= ' xmlns:creativeCommons="http://backend.userland.com/creativeCommonsRssModule" ';
                return true;
                break;

            case 'frontend_display:rss-1.0:namespace':
                $eventData['display_dat'] .= ' xmlns:cc="http://web.resource.org/cc/" ';
                return true;
                break;

            default:
                return true;
                break;
        }
    }

    function get_license_data() {
        $license_type = array();
        $license_version = $this->get_config('cc_version', '3.0');

        if (($license_version >= 2.5) || serendipity_db_bool($this->get_config('by', true))) {
            $license_type[] = 'by';
        }

        if (!serendipity_db_bool($this->get_config('nc', true))) {
            $license_type[] = 'nc';
        }

        if ($this->get_config('nd') == 'no') {
            $license_type[] = 'nd';
        }


        if ($this->get_config('nd') == 'sa') {
            $license_type[] = 'sa';
        }

        $license_string = implode('-', $license_type);

        switch ($license_string) {
            case 'by':
                // BY only is only valid from version 3.0 on
                $license_version = '3.0';
                $rdf = array(
                    'Attribution'     => 'requires',
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits',
                    'Notice'          => 'requires'
                );
                break;

            case 'by-nd':
                $rdf = array(
                    'Attribution'     => 'requires',
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'Notice'          => 'requires'
                );
                break;

            case 'by-nd-nc':
                $rdf = array(
                    'Attribution'     => 'requires',
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'CommercialUse'   => 'prohibits',
                    'Notice'          => 'requires'
                );
                break;

            case 'by-nc':
                $rdf = array(
                    'Attribution'     => 'requires',
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits',
                    'CommercialUse'   => 'prohibits',
                    'Notice'          => 'requires'
                );
                break;

            case 'by-nc-sa':
                $rdf = array(
                    'Attribution'     => 'requires',
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits',
                    'ShareAlike'      => 'requires',
                    'CommercialUse'   => 'prohibits',
                    'Notice'          => 'requires'
                );
                break;

            case 'by-sa':
                $rdf = array(
                    'Attribution'     => 'requires',
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits',
                    'ShareAlike'      => 'requires',
                    'Notice'          => 'requires'
                );
                break;

            case 'nd':
                $rdf = array(
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'Notice'          => 'requires'
                );
                break;

            case 'nd-nc':
                $rdf = array(
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'CommercialUse'   => 'prohibits',
                    'Notice'          => 'requires'
                );
                break;

            case 'nc':
                $rdf = array(
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits',
                    'CommercialUse'   => 'prohibits',
                    'Notice'          => 'requires'
                );
                break;

            case 'nc-sa':
                $rdf = array(
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits',
                    'ShareAlike'      => 'requires',
                    'CommercialUse'   => 'prohibits',
                    'Notice'          => 'requires'
                );
                break;

            case 'sa':
                $rdf = array(
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits',
                    'ShareAlike'      => 'requires',
                    'Notice'          => 'requires'
                );
                break;

            case '':
                $rdf = array(
                    'Reproduction'    => 'permits',
                    'Distribution'    => 'permits',
                    'DerivativeWorks' => 'permits'
                );
            break;
        }

        return array(
          'type'   => $license_type,
          'string' => $license_string,
          'rdf'    => $rdf
        );
    }
}

/* vim: set sts=4 ts=4 expandtab : */
?>
