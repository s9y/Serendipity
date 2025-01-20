<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_multilingual extends serendipity_event
{
    /* The $serendipity['lang'] variable was set in the startup process to determine the language
     * the blog should have.
     * 
     * see functions_config.inc.php -> getSessionLanguage() for the rules of precedence for this process.
     * the Requests issued by this plugin: POST 'user_language' and GET 'user_language' have precedence
     * and are stored in SESSION and COOKIE for later use. The POST is issued by the language dropdown
     * of the plugin_multilingual, the GET is issued from an article footer if the option 'force full language 
     * switch' is activated.
     * 
     * GET 'lang_selected' is also issued in the footer and sets the language for for the blog entry 
     * itself which can be different from the blog display language if a full switch is not forced.
     * 
     * In the backend, the language is fixed to the user language in the configuration. However, in the 
     * multilingual edit selection, the default language of the blog is marked as 'default' even if the current user
     * has a different language. This is the only way to guarantee that the default entries are all in the same, default 
     * language.
     * 
     */
    
    
    var $tags  = array();
    var $title = PLUGIN_EVENT_MULTILINGUAL_TITLE;
    var $showlang = '';
    var $lang_display = '';
    var $switch_keys = array('title', 'body', 'extended');
    var $langswitch = true;
    var $hide_untranslated = false;
    var $supported_properties;
    var $dependencies;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',           PLUGIN_EVENT_MULTILINGUAL_TITLE);
        $propbag->add('description',    PLUGIN_EVENT_MULTILINGUAL_DESC);
        $propbag->add('stackable',      false);
        $propbag->add('author',         'Garvin Hicking, Wesley Hwang-Chung, Ian, Stephan Brunker');
        $propbag->add('requirements',   array(
            'serendipity' => '2.4',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('groups',         array('FRONTEND_ENTRY_RELATED', 'BACKEND_EDITOR'));
        $propbag->add('version',        '2.36.2');
        $propbag->add('configuration',  array('copytext', 'placement', 'tagged_title', 'tagged_entries', 'tagged_sidebar', 'langswitch', 'hide_untranslated'));
        $propbag->add('event_hooks',    array(
                'frontend_fetchentries'     => true,
                'frontend_fetchentry'       => true,
                'entry_display'             => true,
                'backend_configure'         => true,
                'backend_publish'           => true,
                'backend_save'              => true,
                'backend_display'           => true,
                'frontend_entryproperties'  => true,
                'css'                       => true,
                'backend_entryform'         => true,
                'backend_entry_presave'     => true,
                'backend_entry_updertEntry' => true,
                'frontend_display'          => true,
                'frontend_entries_rss'      => true,
                'frontend_comment'          => true,
                'frontend_sidebar_plugins'  => true,
                'frontend_rss'              => true,
                'multilingual_strip_langs'  => true,
                'genpage'                   => true,
        ));

        $propbag->add('legal',    array(
            'services' => array(
            ),
            'frontend' => array(
                'To remember the last selected language, it is stored in a session and cookie variable (serendipityLanguage)',
            ),
            'backend' => array(
            ),
            'cookies' => array(
                'Cookies are used to store the selected language of blog entries'
            ),
            'stores_user_input'     => false,
            'stores_ip'             => false,
            'uses_ip'               => false,
            'transmits_user_input'  => false
        ));

        $this->supported_properties = array('lang_selected', 'lang_display');		// entryproperties plugin
        $this->dependencies = array('serendipity_plugin_multilingual' => 'remove');

        // option: force full language switch
        $this->langswitch = serendipity_db_bool($this->get_config('langswitch', 'true'));  
        
        // option: hide untranslated articles
        $this->hide_untranslated = serendipity_db_bool($this->get_config('hide_untranslated', 'false'));  

        // Okay, Garv. I explain this to you ONCE and ONLY.
        // $this->lang_display is the variable that FORCES translations of entries. If a translation does not exist,
        //                     an entry is NOT SHOWN.
        // $this->showlang     is the variable that indicates which language of an entry to prefer

        // check blog default language from db for serendipity core versions < 2.4
        if (empty($serendipity['default_lang'])) {
            $rows = serendipity_db_query("SELECT name, value
                                        FROM {$serendipity['dbPrefix']}config
                                        WHERE authorid = 0 AND name = 'lang'",true,'assoc');
            $serendipity['default_lang'] = $rows['value'];
        }

        // frontend only
        if (!defined('IN_serendipity_admin')) {

            // rewrite lang_selected = 'default' to default language
            if (isset($serendipity['GET']['lang_selected'] ) && $serendipity['GET']['lang_selected'] == 'default') {
                $serendipity['GET']['lang_selected'] = $serendipity['default_lang'];
            }
            
            // set $this->showlang to selected language if full language switch is not enforced
            if (!$this->langswitch && isset($serendipity['GET']['lang_selected']) && !empty($serendipity['languages'][$serendipity['GET']['lang_selected']])) {
                $this->showlang = $serendipity['GET']['lang_selected'];

                if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-ML-SL-1: ' . $this->cleanheader($this->showlang));
            } else {
                // if lanuage switch is enforced, set to new blog language
                $this->showlang = $serendipity['lang'];
                if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-ML-SL-2: ' . $this->cleanheader($this->showlang));
            }

            // set $this->lang_display when untranslated articles should be hidden
            if ($this->hide_untranslated) {
                $this->lang_display = $this->showlang;
            } else {
                $this->lang_display = '';
            }

        } else {
            // backend
            if (isset($serendipity['POST']['properties']['lang_selected'])) {
                $this->showlang = serendipity_db_escape_string($serendipity['POST']['properties']['lang_selected']);
            }
        }

        if (!headers_sent()) {
            if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-ContentLang: ' . $this->cleanheader($this->showlang));
        }

        $this->setupDB();
    }

    function setupDB()
    {
        global $serendipity;

        $built = $this->get_config('db_built', null);
        if (empty($built)) {
            $q = "@CREATE {FULLTEXT_MYSQL} INDEX fulltext_idx on {$serendipity['dbPrefix']}entryproperties (value);";
            if (serendipity_db_schema_import($q)) {
                $this->set_config('db_built', 2);
            }
        }
        if ($built == 2) {
            $this->set_config('db_built', 3);
        }
        if ($built == 3) {
        // OPS !!!! config set [serendipity_event_multilingual/db_built 	2] is/was build without instance ????
            $q = "DELETE FROM {$serendipity['dbPrefix']}config WHERE name LIKE '%serendipity_event_multilingual/db_built%'";
            serendipity_db_schema_import($q);
            $this->set_config('db_built', 4);
        }
    }

    function cleanheader($string)
    {
        $string = preg_replace('@[^0-9a-z_-]@imsU', '', $string);
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'tagged_title':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_MULTILINGUAL_TAGTITLE);
                $propbag->add('description', PLUGIN_EVENT_MULTILINGUAL_TAGTITLE_DESC);
                $propbag->add('default',     'true');
                break;

            case 'tagged_entries':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES);
                $propbag->add('description', PLUGIN_EVENT_MULTILINGUAL_TAGENTRIES_DESC);
                $propbag->add('default',     'false');
                break;

            case 'langswitch':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH);
                $propbag->add('description', PLUGIN_EVENT_MULTILINGUAL_LANGSWITCH_DESC);
                $propbag->add('default',     'true');
                break;

            case 'hide_untranslated':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_MULTILINGUAL_HIDEENTRIES);
                $propbag->add('description', PLUGIN_EVENT_MULTILINGUAL_HIDEENTRIES_DESC);
                $propbag->add('default',     'true');
                break;

            case 'tagged_sidebar':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR);
                $propbag->add('description', PLUGIN_EVENT_MULTILINGUAL_TAGSIDEBAR_DESC);
                $propbag->add('default',     'true');
                break;

            case 'placement':
                $propbag->add('type',        'radio');
                $propbag->add('name',        PLUGIN_EVENT_MULTILINGUAL_PLACE);
                $propbag->add('description', '');
                $propbag->add('radio',        array(
                    'value' => array('add_footer', 'multilingual_footer'),
                    'desc'  => array(PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDFOOTER, PLUGIN_EVENT_MULTILINGUAL_PLACE_ADDSPECIAL)
                ));
                $propbag->add('radio_per_row', '1');
                $propbag->add('default',     'add_footer');
                break;

            case 'copytext':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_MULTILINGUAL_COPY);
                $propbag->add('description', PLUGIN_EVENT_MULTILINGUAL_COPYDESC);
                $propbag->add('default',     'true');
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        $title = $this->title;
    }

    function urlparam($key)
    {
        global $serendipity;
        if ($this->langswitch) {
            // force language switch - use GET: user_language to toggle blog language switch
            // not neccessary if the requested language is already the current language
            return ($serendipity['lang'] != $key) ? '&amp;serendipity[user_language]=' . $key : '';
        } else {
            // entry language can be different - GET lang_selected, blog language by getSessionLanguage    
            return ($key != $serendipity['default_lang'] ) ? '&amp;serendipity[lang_selected]=' . $key : '';
        }
    }

    function &getLang($id, $title, &$properties)
    {
        global $serendipity;
        static $false = false;
        static $true  = true;

        $langs = array();
        // list/each can use references
        if (!is_array($properties)) {
            return $false;
        }

        
        foreach ($properties as $key => $value) {
            preg_match('@^multilingual_body_(.+)$@', $key, $match);
            if (isset($match[1])) {
                $titlelang = $properties['multilingual_title_' . $match[1]];
                $langs[$match[1]] = '<a class="multilingual_' . $match[1] . '" href="' . $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] . '?/' . serendipity_archiveURL($id, $titlelang, 'serendipityHTTPPath', false) . $this->urlparam($match[1]) . '">' . $serendipity['languages'][$match[1]] . '</a>';

            }
        }

        if (count($langs) < 1) {
            return $false;
        }

        if (!isset($langs[$serendipity['default_lang']])) {
            $langs[$serendipity['default_lang']] = '<a class="multilingual_default multilingual_' . $serendipity['default_lang'] . '" href="' . $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] . '?/' . serendipity_archiveURL($id, $title, 'serendipityHTTPPath', false) . $this->urlparam($serendipity['default_lang']) . '">' . $serendipity['languages'][$serendipity['default_lang']] . '</a>';
        }
        $lang = implode(', ', $langs);

        return $lang;
    }

    // currently unused method for years
    //function neglang($lang) {
    function neglang($lang, $assert = '?!')
    {
        /* Creates the negation pattern from a two letter language identifier. */
        // Negative look ahead assertion. ".*" is used because any letter except of the language string shall be allowed, without it, nothing would ever match
        return '(' . $assert . $lang . ').*';
        //return '(?!' . $lang . ').*';

        //return '[^'.$lang[0].'][^'.$lang[1].']';
    }

    static function strip_langs($msg)
    {
        global $serendipity;

        if (!preg_match('@{{@', $msg)) return $msg;

        #$language = $serendipity['lang']; // disabled - nowhere used so far

        /* Handle escaping of {} chars. If someone is up for it,
           they're welcome to try and find a better way. As it is,
           this appears to work. */
        $msg = str_replace('\{', chr(1), $msg);
        $msg = str_replace('\}', chr(2), $msg);

        // The explode actually makes sure that each latter array part will end on either the full string end or {{--}}. {{--}} will also never be contained inside the string, so we don't need to rule it out any longer.
        $parts = explode('{{--}}', $msg);
        $out   = '';
        // Iterate each subblock and inspect if its language matches.
        foreach($parts AS $idx => $match) {
            if (empty($match)) continue; // Last block part, skip it.
            if (stristr($match, '{{!' . $serendipity['lang'] . '}}')) {
                // Current language found. Keep the string, minus the {{!xx}} part.
                $out .= preg_replace('@\{\{!' . $serendipity['lang'] . '\}\}@', '', $match);
            } else {
                // Current language not found. Remove everything after {{!xx}}.
                $out .= preg_replace('@\{\{![^\}]+\}\}.+$@s', '', $match);
            }
        }

        $msg = $out;

        /* Put back escaped {} chars */
        $msg = str_replace(chr(1), '{', $msg);
        $msg = str_replace(chr(2), '}', $msg);

        return $msg;
    }

    function tag_title()
    {
        global $serendipity;

        if (serendipity_db_bool($this->get_config('tagged_title', 'true'))) {

            if (isset($serendipity['smarty'])) {
                $serendipity['smarty']->assign('blogTitle', $this->strip_langs($serendipity['blogTitle']));
                $serendipity['smarty']->assign('blogDescription', $this->strip_langs($serendipity['blogDescription']));
                if ($serendipity['version'][0] < 2) {
                    $head_title = $serendipity['smarty']->get_template_vars('head_title');
                    $head_subtitle = $serendipity['smarty']->get_template_vars('head_subtitle');
                } else {
                    $head_title = $serendipity['smarty']->getTemplateVars('head_title');
                    $head_subtitle = $serendipity['smarty']->getTemplateVars('head_subtitle');
                }

                if (!empty($head_title)) {
                    $serendipity['smarty']->assign('head_title', $this->strip_langs($head_title));
                }
                if (!empty($head_subtitle)) {
                    $serendipity['smarty']->assign('head_subtitle', $this->strip_langs($head_subtitle));
                }
            } else {
                $serendipity['blogTitle'] = $this->strip_langs($serendipity['blogTitle']);
                $serendipity['blogDescription'] = $this->strip_langs($serendipity['blogDescription']);
            }
        }
    }

    function event_hook($event, &$bag, &$eventData, $addData = null)
    {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');
        if (isset($hooks[$event])) {
            switch($event) {

                case 'backend_configure':
                    if (!is_array($eventData)) {
                        return false;
                    }
                    if (!is_object($serendipity['smarty'])) {
                        serendipity_smarty_init();
                    }
                    $serendipity['smarty']->assign('blogTitle', $this->strip_langs($eventData['blogTitle']));
                    $serendipity['smarty']->assign('blogDescription', $this->strip_langs($serendipity['blogDescription']));
                    break;

                case 'backend_entry_updertEntry':
                    if (isset($serendipity['POST']['no_save'])) {
                        $eventData['error'] = true;
                    }
                    break;

                case 'backend_entry_presave':
                    if (!isset($serendipity['POST']['properties']) || !is_array($serendipity['POST']['properties']) || !isset($eventData['id']) || empty($serendipity['POST']['properties']['lang_selected'])) {
                        return true;
                    }

                    // Restore native language version, ONLY if a different language is being submitted.
                    $restore = serendipity_db_query("SELECT title, body, extended FROM {$serendipity['dbPrefix']}entries WHERE id = " . (int)$eventData['id']);
                    if (is_array($restore)) {
                        foreach($restore AS $row) {
                            foreach($this->switch_keys AS $restorekey) {
                                $eventData[$restorekey] = $row[$restorekey];
                            }
                        }
                    }
                    break;

                case 'backend_publish':
                case 'backend_save':
                    if (!isset($serendipity['POST']['properties']) || !is_array($serendipity['POST']['properties']) || !isset($eventData['id']) || empty($serendipity['POST']['properties']['lang_selected'])) {
                        return true;
                    }

                    $ls = &$serendipity['POST']['properties']['lang_selected'];

                    $this->supported_properties[] = 'multilingual_title_' . $ls;
                    $serendipity['POST']['properties']['multilingual_title_' . $ls]    = $serendipity['POST']['title'];

                    $this->supported_properties[] = 'multilingual_body_' . $ls;
                    $serendipity['POST']['properties']['multilingual_body_' . $ls]     = $serendipity['POST']['body'];

                    $this->supported_properties[] = 'multilingual_extended_' . $ls;
                    $serendipity['POST']['properties']['multilingual_extended_' . $ls] = $serendipity['POST']['extended'];

                    // Get existing data
                    $property = serendipity_fetchEntryProperties($eventData['id']);

                    foreach($this->supported_properties AS $prop_key) {
                        $prop_val = (isset($serendipity['POST']['properties'][$prop_key]) ? $serendipity['POST']['properties'][$prop_key] : null);
                        if (!isset($property[$prop_key]) && !empty($prop_val)) {
                            $q = "INSERT INTO {$serendipity['dbPrefix']}entryproperties (entryid, property, value) VALUES (" . (int)$eventData['id'] . ", '" . serendipity_db_escape_string($prop_key) . "', '" . serendipity_db_escape_string($prop_val) . "')";
                        } elseif ($property[$propkey] != $prop_val && !empty($prop_val)) {
                            $q = "UPDATE {$serendipity['dbPrefix']}entryproperties SET value = '" . serendipity_db_escape_string($prop_val) . "' WHERE entryid = " . (int)$eventData['id'] . " AND property = '" . serendipity_db_escape_string($prop_key) . "'";
                        } else {
                            $q = "DELETE FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid = " . (int)$eventData['id'] . " AND property = '" . serendipity_db_escape_string($prop_key) . "'";
                        }

                        serendipity_db_query($q);
                    }
                    break;

                case 'backend_entryform':
                    if (!empty($this->showlang)) {
                        // language is given (he wants a translation)
                        $props = serendipity_fetchEntryProperties($eventData['id']);
                        // this is a language change, not a save -- we want the DB values
                        // unless the user chooses to retain previous language content
                        if (isset($serendipity['POST']['no_save'])) {
                            foreach($this->switch_keys AS $key) {
                                if (!serendipity_db_bool($this->get_config('copytext', 'true')) || !empty($props['multilingual_' . $key . '_' . $this->showlang])) {
                                    $eventData[$key] = $props['multilingual_' . $key . '_' . $this->showlang];
                                }
                            }
                        }
                    } elseif (!empty($eventData['id'])) {
                        // language is NOT given (he wants the default language)
                        $props = serendipity_fetchEntry('id', $eventData['id'], 1, 1);
                        if (!is_array($props)) {
                            return true;
                        }
                        // this is a language change, not a save -- we want the DB values
                        if (isset($serendipity['POST']['no_save'])) {
                            foreach($this->switch_keys AS $key) {
                                $eventData[$key] = $props[$key];
                            }
                        }
                    }
                    break;

                case 'genpage':
                    if (! isset($serendipity['smarty']) || !is_object($serendipity['smarty'])) {
                        // never init in genpage without adding previously set $vars, which is $view etc!
                        serendipity_smarty_init($serendipity['plugindata']['smartyvars']);
                    }

                    // set lang strip change more global, since we need this in the email subject too for example
                    $serendipity['blogTitle'] = $this->strip_langs($serendipity['blogTitle']);
                    $serendipity['blogDescription'] = $this->strip_langs($serendipity['blogDescription']);

                    // assign lang stripped blogTitle to all generated pages (empty search pages aren't processed otherwise)
                    $serendipity['smarty']->assign('blogTitle', $serendipity['blogTitle']);
                    $serendipity['smarty']->assign('blogDescription', $serendipity['blogDescription']);

                    if (!defined('Smarty::SMARTY_VERSION')) {
                        $this->tag_title(); // in Smarty 2 only
                        // check this deeply! - since at least for the non-tag banner entry_title this seems to not work here with Smarty 3 - see workaround in frontent_display
                    }

                    if ($serendipity['version'][0] < 2) {
                        $serendipity['smarty']->register_modifier('multilingual_lang', array($this, 'strip_langs'));
                    } else {
                        $serendipity['smarty']->registerPlugin('modifier', 'multilingual_lang', array($this, 'strip_langs'));
                    }
                    break;

                case 'css':
                    // CSS class does NOT exist by user customized template styles, include default
                    if (strpos($eventData, '.serendipity_multilingualInfo') === false) {
                        $eventData .= '

/* serendipity_event_multilingual start */

.serendipity_multilingualInfo {
    margin-left: auto;
    margin-right: 0px;
    text-align: right;
    font-size: 7pt;
    display: block;
    margin-top: 5px;
    margin-bottom: 0px;
}

.serendipity_multilingualInfo a {
    font-size: 7pt;
    text-decoration: none;
}

.serendipity_multilingualInfo a:hover {
    color: green;
}

/* serendipity_event_multilingual end */

';
                    }
                    break;

                case 'frontend_display':
                    // cannot use tag_title() method here and use with Smarty3+ only
                    // check for single entry multilingual context only, to set the correct themes banner title
                    if (defined('Smarty::SMARTY_VERSION') &&
                        isset($eventData['properties']['multilingual_title_'.$this->showlang]) &&
                        serendipity_db_bool($this->get_config('tagged_title', 'true'))  &&
                        $serendipity['view'] == 'entry')
                    {
                        $serendipity['smarty']->assign('head_title', $eventData['title']);
                    }
                    break;

                case 'entry_display':
                    if (!is_array($eventData)) {
                        return false;
                    }
                    $place = $this->get_config('placement', 'add_footer');
                    $msg = '<div class="serendipity_multilingualInfo">' . PLUGIN_EVENT_MULTILINGUAL_SWITCH . ': %s</div>';
                    if ($addData['extended'] || $addData['preview']) {
                        // look up the availible language for that entry
                        if ($langs = $this->getLang($eventData[0]['id'], $eventData[0]['title'], $eventData[0]['properties'])) {
                            if (!empty($this->showlang)) {
                                $props = &$eventData[0]['properties'];
                                // replace title, body and extended with the content of the properties array
                                foreach($this->switch_keys AS $key) {
                                    if (!empty($props['multilingual_' . $key . '_' . $this->showlang])) {
                                        $eventData[0][$key] = $props['multilingual_' . $key . '_' . $this->showlang];
                                    }
                                }
                                // empty cache
                                unset($eventData[0]['properties']['ep_cache_body']);
                                unset($eventData[0]['properties']['ep_cache_extended']);
                            }
                            $eventData[0][$place] .= sprintf($msg, $langs);
                        }
                    } else {
                        $elements = count($eventData);

                        // Walk entry array and insert karma voting line.
                        for ($i = 0; $i < $elements; $i++) {
                            if (!isset($eventData[$i][$place])) {
                                $eventData[$i][$place] = '';
                            }

                            if (!empty($this->showlang)) {
                                // Not sure if it's the best way to get translations shown instead of the
                                // original entries

                                $props = &$eventData[$i]['properties'];
                                foreach($this->switch_keys AS $key) {
                                    if (!empty($props['multilingual_' . $key . '_' . $this->showlang])) {
                                        $eventData[$i][$key] = $props['multilingual_' . $key . '_' . $this->showlang];
                                    }
                                }
                                unset($eventData[$i]['properties']['ep_cache_body']);
                                unset($eventData[$i]['properties']['ep_cache_extended']);
                            }

                            if ($langs = $this->getLang($eventData[$i]['id'], $eventData[$i]['title'], $eventData[$i]['properties'])) {
                                $eventData[$i][$place] .= sprintf($msg, $langs);
                                // this may throw two for the same, eg. when already linked as <en>, them set to POST cookie <en> too in the sidebar selection.
                                // In this case the lang link and the default lang link are both named 'english'
                            }
                        }
                    }
                    
                    // Tagged translation of Blog title and description
                    $this->tag_title();

                    if (serendipity_db_bool($this->get_config('tagged_entries', 'true'))) {
                        foreach ($eventData AS $key => $entry) {
                            if (isset($eventData[$key]['title'])) {
                                $eventData[$key]['title'] = $this->strip_langs($eventData[$key]['title']);
                                $eventData[$key]['body'] = $this->strip_langs($eventData[$key]['body']);
                                if (is_array($eventData[$key]['categories'])) {
                                    foreach($eventData[$key]['categories'] AS $ec_key => $ec_val) {
                                        $eventData[$key]['categories'][$ec_key]['category_name'] = $this->strip_langs($ec_val['category_name']);
                                    }
                                }
                            }
                        }
                    }
                    break;

                case 'backend_display':
                    if (isset($serendipity['POST']['properties']['lang_selected'])) {
                        $lang_selected = $serendipity['POST']['properties']['lang_selected'];
                    } else {
                        $lang_selected = '';
                    }

                    $use_lang = $serendipity['languages'];
                    unset($use_lang[$serendipity['default_lang']]); // Unset 'default' language. Easier handling.

                    $langs = '';
                    //asort($use_lang); //sorts by value ASC, but if so we should do it everywhere though
                    foreach($use_lang AS $code => $desc) {
                        $langs .= '<option value="' . $code . '" ' . ($lang_selected == $code ? 'selected="selected"' : '') . '>' . (function_exists('serendipity_specialchars') ? serendipity_specialchars($desc) : htmlspecialchars($desc, ENT_COMPAT, LANG_CHARSET)) . '</option>' . "\n";
                    }
                    if ($serendipity['version'][0] < 2) {
?>
                    <fieldset style="margin: 5px">
                        <legend><?php echo PLUGIN_EVENT_MULTILINGUAL_TITLE; ?></legend>
                        <div class="form_field adv_opts_box">
<?php
                    } else {
?>
                    <fieldset id="edit_entry_multilingual" class="entryproperties_multilingual">
                        <span class="wrap_legend"><legend><?php echo PLUGIN_EVENT_MULTILINGUAL_TITLE; ?></legend></span>
                        <div class="form_field adv_opts_box">
<?php
                    }
                    if (isset($eventData['id'])) { ?>
                        <label for="serendipity[properties][lang_selected]"><?php echo PLUGIN_EVENT_MULTILINGUAL_CURRENT; ?></label><br />
                        <select name="serendipity[properties][lang_selected]" id="properties_lang_selected" />
                            <option value=""><?php echo USE_DEFAULT . ' (' . $serendipity['languages'][$serendipity['default_lang']] . ')'; ?></option>
                            <?php echo $langs; ?>
                        </select>
                        <input class="serendipityPrettyButton input_button" type="submit" name="serendipity[no_save]" value="<?php echo PLUGIN_EVENT_MULTILINGUAL_SWITCH; ?>" />
<?php
                    } else {
                        echo '<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ' . PLUGIN_EVENT_MULTILINGUAL_NEEDTOSAVE . "</span>\n";
                    }
?>
                        </div>
                    </fieldset>
<?php
                    break;

                case 'frontend_entryproperties':
                    if (class_exists('serendipity_event_entryproperties')) {
                        // Fetching of properties is already done there, so this is just for poor users who don't have the entryproperties plugin enabled
                        return true;
                    }
                    $q = "SELECT entryid, property, value FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid IN (" . implode(', ', array_keys($addData)) . ") AND property LIKE '%multilingual_%'";
                    $properties = serendipity_db_query($q);
                    if (!is_array($properties)) {
                        return true;
                    }
                    foreach($properties AS $idx => $row) {
                        $eventData[$addData[$row['entryid']]]['properties'][$row['property']] = $row['value'];
                    }
                    break;

                case 'frontend_entries_rss':
                    if (is_array($eventData)) {
                        foreach($eventData AS $i => $entry) {

                            if (!empty($this->showlang)) {
                                // Not sure if it's the best way to get translations shown instead of the
                                // original entries

                                $props = &$eventData[$i]['properties'];
                                foreach($this->switch_keys AS $key) {
                                    if (!empty($props['multilingual_' . $key . '_' . $this->showlang])) {
                                        $eventData[$i][$key] = $props['multilingual_' . $key . '_' . $this->showlang];
                                    }
                                }
                                unset($eventData[$i]['properties']['ep_cache_body']);
                                unset($eventData[$i]['properties']['ep_cache_extended']);
                            }
                        }
                    }
                    if (serendipity_db_bool($this->get_config('tagged_entries', 'true'))) {
                        foreach ($eventData AS $key => $entry) {
                            $eventData[$key]['title'] = $this->strip_langs($eventData[$key]['title']);
                            $eventData[$key]['body'] = $this->strip_langs($eventData[$key]['body']);
                        }
                    }
                    break;

                case 'frontend_fetchentries':
                case 'frontend_fetchentry':
                    if (empty($this->showlang)) {
                        return;
                    }
                    
                    // multilingual data for display is already fetched by entryproperties plugin or eventhook 
                    // in serendipity_fetchentry() function or serendipity_fetchEntryData() function. 
                    // only make a join to check the multilingual_body property if untranslated entries should be hidden
                    // If lang_display is set - we want ONLY the entries which have translation
                    // if lang_display is default language then don't add the restriction because there is no multilingual body value for default

                    if (!empty($this->lang_display) && $this->lang_display != $serendipity['default_lang'] && $serendipity['view'] == 'start'
                            && (!isset($addData['showAllLangs']) || $addData['showAllLangs'] !== true)) {
                        if (empty($eventData['joins']))  $eventData['joins'] = '' ;

                        $joins  = "\nLEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties multilingual_body
                                                 ON (e.id = multilingual_body.entryid AND multilingual_body.property = 'multilingual_body_" . $this->showlang . "')";
                        $eventData['joins'] .= $joins;
                        unset($joins);

                        if (empty($eventData['and'])) $eventData['and'] = '' ;
                        $eventData['and'] .= " AND multilingual_body.value IS NOT NULL";
                    }
                    // for the search, we need the full multilingual join inside the query to create the index
                    // if we are in translated mode
                    if (isset($addData['source']) && $addData['source'] == 'search' && isset($eventData['find_part'])
                        && $this->showlang != $serendipity['default_lang']) {

                        if (empty($eventData['addkey'])) $eventData['addkey'] = '' ;                        
                        $addkey = "multilingual_body.value AS multilingual_body,\n";
                        $addkey .= "multilingual_extended.value AS multilingual_extended,\n";
                        $addkey .= "multilingual_title.value AS multilingual_title,\n";
                        $eventData['addkey'] .= $addkey;

                        if (empty($eventData['joins']))  $eventData['joins'] = '' ;
                        if (!strpos($eventData['joins'], 'multilingual_body')) {
                            $joins  = "\nLEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties multilingual_body
                                            ON (e.id = multilingual_body.entryid AND multilingual_body.property = 'multilingual_body_" . $this->showlang . "')";
                        }
                        $joins .= "\nLEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties multilingual_extended
                                        ON (e.id = multilingual_extended.entryid AND multilingual_extended.property = 'multilingual_extended_" . $this->showlang . "')";
                        $joins .= "\nLEFT OUTER JOIN {$serendipity['dbPrefix']}entryproperties multilingual_title 
                                        ON (e.id = multilingual_title.entryid AND multilingual_title.property = 'multilingual_title_" . $this->showlang . "')";
                        $eventData['joins'] .= $joins;

                        $term =& $addData['term'];
                        $cond =& $eventData;
                        
                        // in translated mode, search only in the translations, not in the default entries
                        $eventData['find_part'] = '';
                        
                        if (stristr($serendipity['dbType'], 'postgres')) {
                            $cond['find_part'] .= "(multilingual_body.value ILIKE '%$term%' OR multilingual_extended.value ILIKE '%$term%' OR multilingual_title.value ILIKE '%$term%')";
                        } elseif (stristr($serendipity['dbType'], 'sqlite')) {
                            $term = serendipity_mb('strtolower', $term);
                            $cond['find_part'] .= "(lower(multilingual_body.value) LIKE '%$term%' OR lower(multilingual_extended.value) LIKE '%$term%' OR lower(multilingual_title.value) LIKE '%$term%')";
                        } else {
                            if (preg_match('@["\+\-\*~<>\(\)]+@', $term)) {
                                $bool = ' IN BOOLEAN MODE';
                            } else {
                                $bool = '';
                            }
                            $cond['find_part'] .= "  (
                                                         MATCH(multilingual_body.value)        AGAINST('$term' $bool)
                                                         OR MATCH(multilingual_extended.value) AGAINST('$term' $bool)
                                                         OR MATCH(multilingual_title.value)    AGAINST('$term' $bool)
                                                       )";
                        }

                    }
                    break;

                case 'frontend_comment':
                    if (serendipity_db_bool($this->get_config('tagged_entries', 'true'))) {
                        $serendipity['smarty']->assign('head_title', $this->strip_langs($serendipity['head_title']));
                    }
                    if (serendipity_db_bool($this->get_config('tagged_title', 'true')) && isset($serendipity['head_subtitle'])) {
                        $serendipity['smarty']->assign('head_subtitle', $this->strip_langs($serendipity['head_subtitle']));
                    }
                    break;

                case 'frontend_sidebar_plugins':
                    if (serendipity_db_bool($this->get_config('tagged_sidebar', 'true'))) {
                        foreach ($eventData AS $key => $entry) {
                            $eventData[$key]['title'] = $this->strip_langs($eventData[$key]['title']);
                            $eventData[$key]['content'] = $this->strip_langs($eventData[$key]['content']);
                        }
                    }
                    break;

                case 'frontend_rss':
                    if (is_array($eventData)) {
                        $eventData['title'] = $this->strip_langs($eventData['title']);
                        $eventData['description'] = $this->strip_langs($eventData['description']);
                    }
                    break;

                case 'multilingual_strip_langs':
                    // $eventData: may contain a single variable, one- or twodimensional array
                    // in case of array: only apply function if key is inside $addData
                    
                    if (serendipity_db_bool($this->get_config('tagged_sidebar', 'true'))) {
                        if (is_array($eventData)) {
                            if (!is_array($addData)) $addData = array($addData);
                            foreach ($eventData as $key => $value) {
                                // one-dimensional array
                                if (!is_array($value)) {
                                    if (in_array($key, $addData)) $eventData[$key] = $this->strip_langs($value);
                                } else {
                                // two-dimensional
                                    foreach ($value as $subkey => $subvalue) {
                                        if (in_array($subkey,$addData)) $eventData[$key][$subkey] = $this->strip_langs($subvalue);
                                    }
                                }
                            }
                        } else { 
                            // single string to strip
                            $eventData = $this->strip_langs($eventData);
                        }
                    }
                    break;
                    
                default:
                    return false;

            }
            return true;
        } else {
            return false;
        }
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>
