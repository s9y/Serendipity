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
                                // NL2P OPERATION
                                $this->isolationtags = $isolate;
                                
                                $text = $eventData[$element];
                                if (!empty($text)) {
                                    //Standardize line endings to Unix
                                    $text = str_replace(array("\r\n", "\r"), "\n", $text);

                                    //move newlines from body to extended
                                    if ($element == 'body' && isset($eventData['extended'])) 
                                    {  
                                        $eventData['extended'] = str_repeat("\n",strspn($text,"\n",-1)) . $eventData['extended'];
                                        $text = rtrim($text,"\n");
                                    } 
                                    $eventData[$element] = $this->nl2p($text);
                                }
                                // NL2BR OPERATION
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

p.wl_bottom {
    margin-top: 0em;
    margin-bottom: 1em;
}

p.wl_top {
    margin-top: 1em;
    margin-bottom: 0em;
}

p.wl_top_bottom {
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


	/** ====================================
	 * 		NL2P OPERATION
	 *  ====================================
	 */

	// following w3.org, these elements close p elements automatically:
	var $block_elements = array('table','ul','ol','pre', 'dl',
								'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
								'menu', 'section',
								'address', 'article', 'aside', 'fieldset', 'footer',
								'form', 'header', 'hgroup', 'hr', 'main', 'nav', 'p'
								);

	var $nested_block_elements = array('div','table','blockquote');
	
	var $singleton_elements = array('area', 'br', 'col', 'command', 'embed', 'hr', 
								'img', 'input', 'keygen', 'link', 'param', 'source', 
								'track', 'wbr', '!--' 
								);

	var $allowed_p_parents = array('blockquote', 'td', 'div', 'article', 'aside', 'dd',
								'details', 'dl', 'dt', 'footer', 'header', 'summary'
								);

	//paragraphs aren't allowed in these inline elements -> p closes these elements:
	var $inline_elements = array('b', 'big', 'i', 'small', 'tt', 'abbr',
								'acronym', 'cite', 'code', 'dfn', 'em', 'kbd', 'strong',
								'samp', 'var', 'a', 'bdo', 'br', 'map', 'object',
								'q', 'script', 'span', 'sub', 'sup', 'button',
								'label', 'select', 'textarea'
								);

	const P_TOP = '<p class="wl_top">';
	const P_BOTTOM = '<p class="wl_bottom">';
	const P_TOP_BOTTOM = '<p class="wl_top_bottom">';
	const P_BREAK = '<p class="break">';
	const P_END = '</p>';

	function nl2p($text)
	{
		//homogenize tags
		$text = $this->tag_clean($text);
		
		//delete isolation tags from other arrays
		if ($this->isolationtags)
		{
			$this->block_elements = array_diff($this->block_elements,$this->isolationtags);
			$this->allowed_p_parents = array_diff($this->allowed_p_parents,$this->isolationtags);
			$this->nested_block_elements = array_diff($this->nested_block_elements,$this->isolationtags);
			$this->inline_elements = array_diff($this->inline_elements,$this->isolationtags);
			$this->singleton_elements = array_diff($this->singleton_elements,$this->isolationtags);
		}
		else { $this->isolationtags = array(); }

		return $this->blocktag_nl2p($text);
	}

	/** Make sure that all the tags are in lowercase
	 * purge all \n from inside tags
	 * remove spaces in endtags
	 * @param string text
	 * @return text
	 */
	function tag_clean($textstring)
	{
		$text = str_split($textstring);
		$tagstart = false;
		$tagstart_b = false;
		$tagdef = false;
		$endtag = false;
		$tagstyle = false;

		for ($i = 0; $i < count($text); $i++)
		{
			if ($text[$i] == '<' && !strpos($textstring,'>',$i+1) )
			{	$text[$i] = '&lt;'; }
			elseif ($text[$i] == '>' && !($tagstart !== false || $tagdef || $tagstyle) )
			{	$text[$i] = '&gt;'; }
			elseif ($text[$i] == '<')
			{	$tagstart = $i; }
			elseif ($text[$i] == ' ' && $tagstart !== false )
			{	$text[$i] = ''; }
			elseif ($text[$i] == '>' && $tagstart !== false )
			{
				$text[$tagstart] = '&lt;';
				$text[$i] = '&gt;';
			}
			elseif ($text[$i] == ' ' && $tagdef)
			{
				//check if it is a real tag
				$tag = substr($textstring,$tagdef,$i-$tagdef);
				
				if ( !(in_array($tag,$this->block_elements) 
					|| in_array($tag,$this->singleton_elements) 
					|| in_array($tag,$this->inline_elements) 
					|| in_array($tag,$this->allowed_p_parents)
					|| in_array($tag,$this->isolationtags) 
					|| in_array($tag,$this->nested_block_elements) ))
				{
					$text[$tagstart_b] = '&lt;';
					$text[strpos($textstring,'>',$i+1)] = '&gt;';
				} else
				{ 
				$tagstyle = true;
				$tagdef = false;
				}
			}
			elseif ($text[$i] == '/' && $tagstart !== false)
			{	$endtag = true; }
			elseif ($text[$i] == ' ' && $endtag)
			{	$text[$i] = ''; }
			elseif (($tagstart !== false || $tagdef || $tagstyle) && $text[$i] == "\n")
			{	$text[$i] = ''; }
			elseif ($text[$i] == '>' && ($tagdef || $tagstyle) )
			{
				$tagstart = false;
				$tagdef = false;
				$tagstyle = false;
				$endtag = false;
			}
			elseif ($tagstart !== false)
			{
				$tagdef = $i;
				$tagstart_b = $tagstart;
				$tagstart = false;
				$text[$i] = strtolower($text[$i]);
			}
			elseif ($tagdef)
			{	$text[$i] = strtolower($text[$i]); }
		}
		return implode($text);
	}

	/*
	 * sophisticated nl to p - blocktag stage
	 * handles content with blocktags, apply nl2p to the block elements if tag allows it
	 * works also for ommitted closing tags and singleton tags
	 * Insert P_BOTTOM class at paragraphs ending with two newlines
	 * Insert P_BREAK class at paragraphs ending with one newline
	 * Insert P_TOP class at the first paragraph if starting with a nl
	 * Insert P_TOP_BOTTOM class if the first paragraph is ending with two newlines 
	 * @param: text
	 * return string
	 */
	function blocktag_nl2p($text)
	{
		//explode string into array of tags and contents
		$textarray = $this->explode_along_tags($text);
		$content = "";
		$start = 0;
		$tagstack = array();
		$isolation_flag = false;

		for ($i=0; $i < count($textarray); $i++)
		{

			//get tag or false if none
			$tag = $this->extract_tag($textarray[$i]);

			//new blocktag - e.g. <table>
			if ($tag && $this->is_starttag($textarray[$i])
				&& (in_array($tag, $this->block_elements) || in_array($tag, $this->nested_block_elements) ))
			{
				//merge previous content, apply nl2p if needed and concatenate
				if (!$isolation_flag && ( empty($tagstack) || in_array($tagstack[0], $this->allowed_p_parents) ))
				{
					$content .= $this->nl2pblock(implode(array_slice($textarray,$start,$i-$start)));
				} else
				{
					$content .= implode(array_slice($textarray,$start,$i-$start));
				}
				// clear stack of block elements and insert
				if (in_array($tag, $this->block_elements) )
				{
					$tagstack = array_diff($tagstack, $this->block_elements);
				}
				// concatenate tag
				$content .= $textarray[$i] . "\n";
				
				if (!in_array($tag, $this->singleton_elements) ) 
				{
					array_unshift($tagstack, $tag);
				}
				$start = $i+1;
			}
			//new tag which can contain paragraphs and can be inside a blocktag - e.g. <td>
			elseif ($tag && $this->is_starttag($textarray[$i]) && in_array($tag, $this->allowed_p_parents))
			{
				//merge previous content, apply nl2p if needed and concatenate
				if (!$isolation_flag && ( empty($tagstack) || in_array($tagstack[0], $this->allowed_p_parents) ))
				{
					$content .= $this->nl2pblock(implode(array_slice($textarray,$start,$i-$start)));
				} else
				{
					$content .= implode(array_slice($textarray,$start,$i-$start));
				}
				//insert tag into the stack and concatenate
				array_unshift($tagstack, $tag);
				$content .= $textarray[$i];
				$start = $i+1;
			}
			//isolation tag
			elseif($tag && $this->is_starttag($textarray[$i]) && in_array($tag, $this->isolationtags) )
			{
				//merge previous content, apply nl2p if needed and concatenate
				if (!$isolation_flag && empty($tagstack) )
				{
					$content .= $this->nl2pblock(implode(array_slice($textarray,$start,$i-$start)));
				} elseif (!$isolation_flag && in_array($tagstack[0], $this->allowed_p_parents) )
				{
					$content .= $textarray[$start]
								. $this->nl2pblock(implode(array_slice($textarray,$start+1,$i-$start-1)));
				} else
				{
					$content .= implode(array_slice($textarray,$start,$i-$start));
				}
				$isolation_flag = true;
				$start = $i+1;
			}
			//closing isolation tag
			elseif($tag && !$this->is_starttag($textarray[$i]) && in_array($tag, $this->isolationtags) )
			{
				if ($isolation_flag)
				{
				//content, no nl2p
				$content .= implode(array_slice($textarray,$start,$i-$start-1));
				$isolation_flag = false;
				$start = $i+1;
				}
			}
			//closing blocktag or p parent - e.g. </table> or </td>
			elseif($tag && !$this->is_starttag($textarray[$i]) && !empty($tagstack) && $tag == $tagstack[0])
			{
				//content, apply nl2p if needed
				if ($i != $start)
				{
					if (!$isolation_flag && in_array($tagstack[0], $this->allowed_p_parents) )
					{
						$content .= $this->nl2pblock(implode(array_slice($textarray,$start,$i-$start)));
					} else
					{
						$content .= implode(array_slice($textarray,$start,$i-$start));
					}
				}
				//closing tag
				$content .= $textarray[$i] . "\n"; 

				$start = $i+1;
				array_shift($tagstack);
			}
		}

		//merge remainder
		if (!$isolation_flag && ( empty($tagstack) || in_array($tagstack[0], $this->allowed_p_parents) ))
		{
			$content .= $this->nl2pblock(implode(array_slice($textarray,$start,$i-$start)));
		} else
		{
			$content .= implode(array_slice($textarray,$start,$i-$start));
		}
		return $content;
	}

	/*
	 * sophisticated nl to p for content which is already
	 * purged from block elements by blocktag_nl2p
	 * explode content along \n
	 * check for following \n
	 * explode along (inline) tags, get active tags across newlines
	 * build every paragraph: p class | reopen active tags | content ... | new open tags | closing p tag
	 * @param string text
	 * @return string
	*/
	function nl2pblock($textstring)
	{

		//check for empty content
		if (empty(trim($textstring))) { return $textstring; }

		//check for start/end newlines
		$startnl = ( strspn($textstring,"\n") ) ? true : false;
		$endnl = ( strspn($textstring,"\n",-1 ) ) ? true : false;
		$whiteline = false;
		$textstring = trim($textstring,"\n");
		if (empty($textstring)) { return ''; }

		//explode in paragraphs
		$textarray = explode("\n",$textstring);
		$tagstack = array();
		$tagstack_prev = array();
		$textline = array();

		$content = '';

		for($i=0; $i<count($textarray);$i++)
		{
			//check for whiteline
			if ($i < count($textarray) - 1 && empty($textarray[$i+1]) )
			{
				$whiteline = true;
			}
			elseif (empty($textarray[$i]))
			{
				continue;
			}

			//explode in tags and content
			$textline = $this->explode_along_tags($textarray[$i]);
			//save active tags
			$tagstack_prev = $tagstack;

			//iterate trough the tags in the paragraph
			for ($j=0; $j<count($textline); $j++)
			{
				//get tag or false if none
				$tag = $this->extract_tag($textline[$j]);

				// put or remove tag from stack
				if ($tag && $this->is_starttag($textline[$j]) && !in_array($tag,$this->singleton_elements) )
				{
					array_unshift($tagstack, $textline[$j]);
				}
				elseif($tag && !$this->is_starttag($textline[$j]) && !empty($tagstack) && $tag == $this->extract_tag($tagstack[0]))
				{
					array_shift($tagstack);
				}
			}

			//build content
			//paragraph class
			if ($i == 0 && $startnl && ( $whiteline || ($i == count($textarray)-1 && $endnl) ) )
			{
				$content .=  self::P_TOP_BOTTOM;
			}
			elseif ($i == 0 && $startnl)
			{
				$content .= self::P_TOP;
			}
			elseif ($whiteline || ($i == count($textarray)-1 && $endnl))
			{
				$content .= self::P_BOTTOM;
			} else
			{
				$content .= self::P_BREAK;
			}

			//reopen active tags
			foreach($tagstack_prev as $ins_tag)
			{
			 $content .= $ins_tag;
			}

			//content paragraph
			$content .= $textarray[$i];

			//close open tags
			foreach($tagstack as $ins_tag)
			{
				$content .= $this->html_end_tag($this->extract_tag($ins_tag));
			}
			//paragraph closing tag
			$content .= self::P_END . "\n";
			$whiteline = false;
		}

		return $content;
	}

	/** explode textstring into array of substrings
	 * array element can be tag or content
	 * @param text
	 * $return array of tags and contents
	 */
	function explode_along_tags($text)
	{
		$startpos = 0;
		$endpos = 0;
		$textarray = array();
		do
		{
			//find tag start
			$endpos = strpos($text,'<',$startpos);
			if ($endpos === false)
			{
				//no more tags, copy remainder to array
				$endpos = strlen($text);
				if ($endpos - $startpos > 0)
				{	$textarray[] = substr($text,$startpos,$endpos - $startpos); }
				return $textarray;
			}
			elseif (($endpos - $startpos) > 0)
			{
				//copy preliminary text to array
				$textarray[] = substr($text,$startpos,$endpos - $startpos);
			}
			$startpos = $endpos;
			//find tag end
			$endpos = strpos($text,'>',$startpos);
			if ($endpos === false) { return false; }
			elseif (($endpos - $startpos) > 1)
			{
				//copy tag to array
				$textarray[] = substr($text,$startpos,$endpos - $startpos + 1);
				$startpos = $endpos + 1;
			}
			else { return false; }
		} while (1);
		return false;
	}

	function extract_tag($text)
	{
		if ($text[0] != '<') { return false; }
		$n = strcspn($text,' >');
		return ltrim(substr($text,0,$n),'</');
	}

	function html_end_tag($text) { return '</' . $text . '>'; }
	function html_start_tag($text) { return '<' . $text . '>'; }
	function is_starttag($text) { return ($text[1] == "/") ? false : true; }


}

/* vim: set sts=4 ts=4 expandtab : */
?>
