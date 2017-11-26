<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

class serendipity_event_nl2br extends serendipity_event
{
    var $title = PLUGIN_EVENT_NL2BR_NAME;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_NL2BR_NAME);
        $propbag->add('description',   PLUGIN_EVENT_NL2BR_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '2.21');
        $propbag->add('requirements',  array(
            'serendipity' => '1.6',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('cachable_events', array('frontend_display' => true));

        $propbag->add('event_hooks',     array('frontend_display'  => true,
                                               'backend_configure' => true,
                                               'css'               => true
                     ));
        $propbag->add('groups', array('MARKUP'));

        $this->markup_elements = array(
            array(
              'name'     => 'ENTRY_BODY',
              'element'  => 'body',
            ),
            array(
              'name'     => 'EXTENDED_BODY',
              'element'  => 'extended',
            ),
            array(
              'name'     => 'COMMENT',
              'element'  => 'comment',
            ),
            array(
              'name'     => 'HTML_NUGGET',
              'element'  => 'html_nugget',
            )
        );


        $conf_array = array('check_markup', 'isolate', 'p_tags', 'isobr', 'clean_tags');
        foreach($this->markup_elements as $element) {
            $conf_array[] = $element['name'];
        }
        $propbag->add('configuration', $conf_array);
    }

    function cleanup()
    {
        global $serendipity;

        /* check possible config mismatch setting in combination with ISOBR */
        if ( serendipity_db_bool($this->get_config('isobr')) === true ) {
            if( serendipity_db_bool($this->get_config('clean_tags')) === true ) {
                $this->set_config('clean_tags', false);
                echo '<div class="serendipityAdminMsgError msg_error"><img class="backend_attention" src="' . $serendipity['serendipityHTTPPath'] . 'templates/default/admin/img/admin_msg_note.png" alt="" />';
                echo sprintf(PLUGIN_EVENT_NL2BR_CONFIG_ERROR, 'clean_tags', 'ISOBR') . '</div>';
                return false;
            }
            if ( serendipity_db_bool($this->get_config('p_tags')) === true ) {
                $this->set_config('p_tags', false);
                echo '<div class="serendipityAdminMsgError msg_error"><img class="backend_attention" src="' . $serendipity['serendipityHTTPPath'] . 'templates/default/admin/img/admin_msg_note.png" alt="" />';
                echo sprintf(PLUGIN_EVENT_NL2BR_CONFIG_ERROR, 'p_tags', 'ISOBR') . '</div>';
                return false;
            }
        }
        /* check possible config mismatch setting in combination with P_TAGS */
        if ( serendipity_db_bool($this->get_config('p_tags')) === true && serendipity_db_bool($this->get_config('clean_tags')) === true ) {
            $this->set_config('clean_tags', false);
            echo '<div class="serendipityAdminMsgError msg_error"><img class="backend_attention" src="' . $serendipity['serendipityHTTPPath'] . 'templates/default/admin/img/admin_msg_note.png" alt="" />';
            echo sprintf(PLUGIN_EVENT_NL2BR_CONFIG_ERROR, 'clean_tags', 'P_TAGS') . '</div>';
            return false;
        }
        return true;
    }

    function example()
    {
        return '<h3>PLEASE NOTE the implications of this markup plugin:</h3>
        <p>This plugin transfers linebreaks to HTML-linebreaks, so that they show up in your blog entry.</p>
        <p>In two cases this can raise problematic issues for you:</p>
        <ul>
            <li>if you use a <strong>WYSIWYG editor</strong> to write your entries. In that case, the WYSIWYG editor already inserts proper HTML linebreaks, so the nl2br plugin would actually double those linebreaks.</li>
            <li>if you use any other markup plugins in conjunction with this plugin that already translate linebreaks. The <strong>TEXTILE and MARKDOWN plugins</strong> are examples for plugins like these.</li>
        </ul>
        <p>To prevent problems, you should disable the nl2br plugin on entries globally or per entry within the "Extended properties" section of an entry, if you have the entryproperties plugin installed.</p>
        <p>Generally advice: The nl2br plugin only makes sense if you</p>
        <ul>
            <li>A) do not use other markup plugins or</li>
            <li>B) you do not use the WYSIWYG editor or</li>
            <li>C) you only want to apply linebreak transformations on comments to your blog entries, and do not allow any possible markup of other plugins that you only use for blog entries.</li>
        </ul>'."\n";
    }

    function install()
    {
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function uninstall(&$propbag)
    {
        serendipity_plugin_api::hook_event('backend_cache_purge', $this->title);
        serendipity_plugin_api::hook_event('backend_cache_entries', $this->title);
    }

    function generate_content(&$title)
    {
        $title = $this->title;
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'check_markup':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_NL2BR_CHECK_MARKUP);
                $propbag->add('description', PLUGIN_EVENT_NL2BR_CHECK_MARKUP_DESC);
                $propbag->add('default',     'true');
                break;

            case 'isolate':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_NL2BR_ISOLATE_TAGS);
                $propbag->add('description', PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC);
                $propbag->add('default',     '');
                break;

            case 'p_tags':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_NL2BR_PTAGS);
                $propbag->add('description', PLUGIN_EVENT_NL2BR_PTAGS_DESC);
                $propbag->add('default',     'false');
                break;

            case 'isobr':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_NL2BR_ISOBR_TAG);
                $propbag->add('description', PLUGIN_EVENT_NL2BR_ISOBR_TAG_DESC);
                $propbag->add('default',     'true');
                break;

            case 'clean_tags':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_NL2BR_CLEANTAGS);
                $propbag->add('description', PLUGIN_EVENT_NL2BR_CLEANTAGS_DESC);
                $propbag->add('default',     'false');
                break;

            default:
                $propbag->add('type',        'boolean');
                $propbag->add('name',        constant($name));
                $propbag->add('description', sprintf(APPLY_MARKUP_TO, constant($name)));
                $propbag->add('default',     'true');
                break;
        }
        return true;
    }

    function isolate($src, $regexp = NULL)
    {
        if($regexp) return preg_replace_callback($regexp, array($this, 'isolate'), $src);
        global $_buf;
        $_buf[] = $src[0];
        return "\001" . (count($_buf) - 1);
    }

    function restore_callback($matches)
    {
        global $_buf;
        return $_buf[$matches[1]];
    }

    function restore($text)
    {
        return preg_replace_callback('!\001(\d+)!', array($this, 'restore_callback'), $text); // works?!
    }

    function event_hook($event, &$bag, &$eventData, $addData = null)
    {
        global $serendipity;
        static $markup  = null;
        static $isolate = null;
        static $p_tags  = null;
        static $isobr   = null;
        static $clean_tags  = null;
        global $_buf;

        $hooks = &$bag->get('event_hooks');

        if ($markup === null) {
            $markup = serendipity_db_bool($this->get_config('check_markup'));
        }

        if ($p_tags === null) {
            $p_tags = serendipity_db_bool($this->get_config('p_tags'));
        }

        if ($isobr === null) {
            $isobr = serendipity_db_bool($this->get_config('isobr'));
        }

        if ($clean_tags === null) {
            $clean_tags = serendipity_db_bool($this->get_config('clean_tags'));
        }

        if (isset($hooks[$event])) {

            switch($event) {

                case 'frontend_display':

                    // check single entry for temporary disabled markups
                    if ( !$eventData['properties']['ep_disable_markup_' . $this->instance] &&
                         @!in_array($this->instance, $serendipity['POST']['properties']['disable_markups']) &&
                         !$eventData['properties']['ep_no_textile'] && !isset($serendipity['POST']['properties']['ep_no_textile']) &&
                         !$eventData['properties']['ep_no_markdown'] && !isset($serendipity['POST']['properties']['ep_no_markdown'])) {
                        // yes, this markup shall be applied
                        $serendipity['nl2br']['entry_disabled_markup'] = false;
                    } else {
                        // no, do not apply markup
                        $serendipity['nl2br']['entry_disabled_markup'] = true;
                    }

/* PLEASE NOTE:
    $serendipity['POST']['properties']['disable_markups'] = array(false); is the only workable solution for (sidebar?) plugins (see sidebar plugins: guestbook, multilingual), to explicitly allow to apply nl2br to markup (if we want to)
*/
                    // don't run, if the textile, or markdown plugin already took care about markup
                    if ($markup && $serendipity['nl2br']['entry_disabled_markup'] === false && (class_exists('serendipity_event_textile') || class_exists('serendipity_event_markdown'))) {
                        break;
                    }
                    // NOTE: the wysiwyg-editor needs to send its own ['properties']['ep_no_nl2br'] to disable the nl2br() parser!

                    // check for users isolation tags
                    if ($isolate === null) {
                        $isolate = $this->get_config('isolate');
                        $tags    = (array)explode(',', $isolate);
                        $isolate = array();
                        foreach($tags AS $tag) {
                            $tag = trim($tag);
                            if (!empty($tag)) {
                                $isolate[] = $tag;
                            }
                        }
                        if (count($isolate) < 1) {
                            $isolate = false;
                        }
                    }

                    foreach ($this->markup_elements as $temp) {
                        if (serendipity_db_bool($this->get_config($temp['name'], true)) && isset($eventData[$temp['element']]) &&
                                !$eventData['properties']['ep_disable_markup_' . $this->instance] &&
                                @!in_array($this->instance, $serendipity['POST']['properties']['disable_markups']) &&
                                !$eventData['properties']['ep_no_nl2br'] &&
                                !isset($serendipity['POST']['properties']['ep_no_nl2br'])) {

                            $element = $temp['element'];
                            if ($p_tags) {
                                $text = $eventData[$element];
                                if (!empty($text)) {
                                    //Standardize line endings to Unix
                                    $text = str_replace(array("\r\n", "\r"), "\n", $text);
                                    if ($element == 'body' && isset($eventData['extended'])) {  
                                        //move newlines from body to extended
                                        $eventData['extended'] = str_repeat("\n",strspn($text,"\n",-1)) . $eventData['extended'];
                                    } 
                                    $eventData[$element] = $this->nl2p($text, $element);
                                }
                            } else if ($isolate) {
                                $eventData[$element] = $this->isolate($eventData[$element], '~[<\[](' . implode('|', $isolate) . ').*?[>\]].*?[<\[]/\1[>\]]~si');
                                $eventData[$element] = nl2br($eventData[$element]);
                                $eventData[$element] = $this->restore($eventData[$element]);
                            } else {
                                if($isobr) {
                                    $eventData[$element] = $this->isolate($eventData[$element], '~[<\[](nl).*?[>\]].*?[<\[]/\1[>\]]~si');
                                    $eventData[$element] = nl2br($eventData[$element]);
                                    $eventData[$element] = $this->restore($eventData[$element]);
                                    // unset nl tagline, if is
                                    $eventData[$element] = str_replace(array("<nl>", "</nl><br />", "</nl><br/>", "</nl>"), "", $eventData[$element]);
                                } else {
                                    $eventData[$element] = nl2br($eventData[$element]);
                                }
                            }
                            /* this is an option if not using new isobr default config setting */
                            if (!$p_tags && $isobr === false && $clean_tags === true) {
                                // convert line endings to Unix style, if not already done
                                $eventData[$element] = str_replace(array("\r\n", "\r"), "\n", $eventData[$element]);
                                // clean special tags from nl2br
                                $eventData[$element] = $this->clean_nl2brtags($eventData[$element]);
                            }
                        }
                    }
                    break;

                case 'backend_configure':

                    // check single entry for temporary disabled markups
                    if( $isobr ) {
                        $serendipity['nl2br']['iso2br'] = true; // include to global as also used by staticpages now

                        if (!is_object($serendipity['smarty'])) {
                            serendipity_smarty_init(); // if not set to avoid member function assign() on a non-object error, start Smarty templating
                        }

                        // hook into default/admin/entries.tpl somehow via the Heart Of Gold = serendipity_printEntryForm() before! it is loaded
                        $serendipity['smarty']->assign('iso2br', true);
                    }
                    break;

                case 'css':
                    $eventData .= '

/* nl2br plugin start */

p.whitelinebottom {
    margin-top: 0em;
    margin-bottom: 1em;
}

p.whitelinetop {
    margin-top: 1em;
    margin-bottom: 0em;
}

p.whitelinetopbottom {
    margin-top: 1em;
    margin-bottom: 1em;
}

p.break {
    margin-top: 0em;
    margin-bottom: 0em;
}

/* nl2br plugin end */

';
                    break;

                default:
                    return false;

            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * clean nl2br from markup where it is invalid and/or breaks html output
     * @param  string entrytext
     * @return string
     */
    function clean_nl2brtags(&$entry)
    {
        $allTags = explode('|', 'table|thead|tbody|tfoot|th|tr|td|caption|colgroup|col|ol|ul|li|dl|dt|dd');

        $br2nl = array();

        foreach($allTags as $tag){
            /* for \\1 ( start with : < followed by any number of white spaces : \s* optionally a slash : /? and the tag itself )
             * for \\2 ( anything with spaces and characters following until )
             * for \\3 ( finally the > )
             * for \\4 ( <br followed by any number of spaces, the optional slash and ending with > )
             * regex modifier : i - using a case-insensitive match, as upper <TAGS> are valid in HTML 
             * regex modifier : s - using the dot metacharacter in the pattern to match all characters, including newlines */
            $br2nl[] = "%(<\s*/?$tag)(.*?)([^>]*>)(<br\s*/?>)%is";
        }

        if(sizeof($br2nl)) $entry = preg_replace($br2nl, '\\1\\2\\3', $entry);

        return $entry;
    }



    /**
     * Insert <p class="whiteline" at paragraphs ending with two newlines
     * Insert <p class="break" at paragraphs ending with one or no nl
     * Insert <p class="whitelinetop" at the first paragraph if starting with a nl
     * Insert <p class="whitelinetopbottom" if the first paragraph is ending with two newlines
     * @param string text
     * @param boolean complex operations (not necessary when text is flat)
     * @return string
     */
    function nl2p(&$text, $element='any', $complex=true)
    {
        //check if string starts with a newline (extended only)
        $startnl = ($element =='extended' && strspn($text,"\n")) ? true : false; 
        
        //trim whitespaces and line breaks
        $text = trim($text);        
        
        //split into array
        $text = str_split($text);

        $big_p = '<p class="whiteline">';
        $small_p = '<p class="break">';

        $i = count($text) - 1;
        $whiteline = false;
                
        //main operation: convert \n to big_p and small_p
        while ($i > 0) {
            //search next /n enclosing text, starting at $i-1
            $i = $this->next_nl_block($i, $text); 
            if ($i == 0) {      //no newlines left
                break;
            } elseif ($whiteline == true) {
                $text[$i] = '</p>' . $big_p;
            } else {
                $text[$i] = '</p>' . $small_p;
            }
            //look ahead for next paragraph class
            if ($text[$i-1] === "\n") {
            $whiteline = true;  
            $i--;
            } else {
            $whiteline = false;
            }
        }
        if ($whiteline && $startnl) {
            $start_tag = '<p class="whitelinetopbottom">';
        } elseif ($startnl) {
            $start_tag = '<p class="whitelinetop">';
        } elseif ($whiteline) {
            $start_tag = $big_p;
        } else {
            $start_tag = $small_p;
        }
        if ($complex) {
            $textstring = $this->tidy_block_elements($text);
            $textstring = $this->formate_block_elements($textstring);
            $textstring = $this->isolate_block_elements($textstring);
            $textstring = $start_tag . $textstring . '</p>';
            return $this->clean_code($textstring);
        }
        return $start_tag . implode($text) . '</p>';
    }

    /**
     * Remove unnecessary paragraphs
     * Unnecessary are those which start and end immediately.
     * They only get created by isolate_block_elements
     * @param mixed text
     * @return string
     */
    function clean_code ($text)
    {
        if (is_array($text)) {
            $text = implode($text);
        }
        return str_replace(array('<p class="whiteline"></p>','<p class="break"></p>','<p class="whitelinetop"></p>','<p class="whitelinetopbottom"></p>','<p></p>'),"", $text);
    }

    function purge_p($text)
    {
        $text = str_replace('</p>', "", $text);
        return str_replace(array('<p class="whiteline">','<p class="break">', '<p>', '</p>'),"\n", $text);
    }

    /**
     * Use nl2p on text within blockelements, useful e.g. with blockquotes
     * @param array text
     * @return string
     */
    function formate_block_elements($textstring)
    {
        $block_elements = array('<blockquote');
        foreach ($block_elements as $start_tag) {
            $end_tag = $this->end_tags($start_tag);
            //first see if block-element really exists
            $start_tag_position = strpos($textstring, $start_tag);
            while ($start_tag_position !== false) {
                $start_tag_end = strpos($textstring, '>', $start_tag_position)+1;
                $blocktext = $this->get_string_till($textstring, $end_tag, $start_tag_end);
                $blocktext_length = strlen($blocktext);
                $formatted_blocktext = $this->nl2p($blocktext);
                //insert formatted_blocktext into old blockelement
                $textstring = substr_replace($textstring, $formatted_blocktext, $start_tag_end, $blocktext_length);

                //next blockelement
                $start_tag_position = strpos($textstring, $start_tag, $start_tag_end+strlen($formatted_blocktext));
            }
        }
        return $textstring;
    }

    /**
     * Make sure none of these block_elements are within a <p>
     * @param string text
     * @return string
     */
    function isolate_block_elements($textstring)
    {
        $block_elements = array('<table','<ul','<ol','<pre', '<dir', '<dl',
                                '<h1', '<h2', '<h3', '<h4', '<h5', '<h6',
                                '<menu', '<blockquote');
        $block_elements_amount = count($block_elements);

        for($i=0;$i<$block_elements_amount;$i++) {
            $start_tag = $block_elements[$i];
            //first see if block-element really exists
            $tag_position = strpos($textstring, $start_tag);
            if ($tag_position === false) {
                continue;
            } else {
                $end_tag = $this->end_tags($start_tag);
                $textstring = str_replace("$start_tag", "</p>$start_tag", $textstring);
                $textstring = str_replace("$end_tag", "$end_tag<p>", $textstring);
            }
         }
         return $textstring;
    }

    /**
     * Remove all <p>-tags from block-elements
     * Note: Walking from left to right
     * @param array text
     * @return string
     */
    function tidy_block_elements($text)
    {
        $remove = false;
        $textstring = implode($text);
        $block_elements = array('<table','<ul','<ol','<pre', '<dir', '<dl',
                                '<h1', '<h2', '<h3', '<h4', '<h5', '<h6',
                                '<menu', '<blockquote');
        foreach ($block_elements as $start_tag) {
            $end_tag = $this->end_tags($start_tag);
            //first see if block-element really exists
            $start_tag_position = strpos($textstring, $start_tag);
            while ($start_tag_position !== false) {
                $start_tag_end = strpos($textstring, '>', $start_tag_position)+1;
                $blocktext = $this->get_string_till($textstring, $end_tag, $start_tag_end);
                $blocktext_length = strlen($blocktext);
                $formatted_blocktext = $this->purge_p($blocktext);
                //insert formatted_blocktext into old blockelement
                $textstring = substr_replace($textstring, $formatted_blocktext, $start_tag_end, $blocktext_length);

                //next blockelement
                $start_tag_position = strpos($textstring, $start_tag, $start_tag_end+strlen($formatted_blocktext));
            }
        }
        return $textstring;
    }

    function get_string_till($text, $end_tag, $offset=0)
    {
        if (strpos($text, $end_tag, $offset) === false) {
            return "";
        }
        $len = strpos($text, $end_tag, $offset) - $offset;
        return substr($text, $offset, $len);
    }

    /**
     * Return corresponding end-tag: <p -> </p>
     */
    function end_tags($start_tag)
    {
        return str_replace("<", "</", $start_tag).">";
    }

    /**
     * Find next newline separated by text from current position
     * @param int start
     * $param array text
     */
    function next_nl_block($i, $text)
    {
        $skipped = false;
        for ($i--; $i>0; $i-- ) {
            if (!$skipped){
                //see if you skipped over a non-newline (heading to the next block)
                if (strpos($text[$i], "\n") === false) {
                    $skipped = true;
                }
            } else if (strpos($text[$i], "\n") !== false) {
                break;
            }
        }
        return $i;
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>
