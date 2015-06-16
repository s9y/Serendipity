<?php

class serendipity_plugin_syndication extends serendipity_plugin {
    var $title = SYNDICATION;

    function introspect(&$propbag)
    {
        $propbag->add('name',          SYNDICATION);
        $propbag->add('description',   SHOWS_RSS_BLAHBLAH);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '2.2.2');
        $propbag->add('configuration', array(
                                        'title',
                                        'big_img',
                                        'feed_format',
                                        'subToMe',
                                        'show_comment_feed',
                                        'seperator',
                                        'iconURL',
                                        'feed_name',
                                        'comment_name',
                                        'seperator2',
                                        'fb_id',
                                        'custom_url'
                                       )
        );
        $propbag->add('groups',        array('FRONTEND_VIEWS'));
    }

    function introspect_config_item($name, &$propbag)
    {
        global $serendipity;

        switch($name) {
            case 'title':
                $propbag->add('type',        'string');
                $propbag->add('name',        TITLE);
                $propbag->add('description', TITLE_FOR_NUGGET);
                $propbag->add('default',     SYNDICATE_THIS_BLOG);
                break;

            case 'feed_format':
                $propbag->add('type',        'radio');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDFORMAT);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDFORMAT_DESC);
                $propbag->add('default',     'rss');
                $propbag->add('radio',       array(
                    'value' => array('rss', 'atom', 'rssatom'),
                    'desc'  => array(SYNDICATION_PLUGIN_20, sprintf(SYNDICATION_PLUGIN_GENERIC_FEED, 'Atom 1.0'), SYNDICATION_PLUGIN_20 .' + '. sprintf(SYNDICATION_PLUGIN_GENERIC_FEED, 'Atom 1.0'))
                ));
                $propbag->add('radio_per_row', '3');
                break;

            case 'fb_id':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDBURNERID);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDBURNERID_DESC);
                $propbag->add('default',     '');
                break;

            case 'show_comment_feed':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_COMMENTFEED);
                $propbag->add('description', SYNDICATION_PLUGIN_COMMENTFEED_DESC);
                $propbag->add('default',     'false');
                break;

            case 'seperator':
            case 'seperator2':
                $propbag->add('type',        'seperator');
                break;

            case 'iconURL':
                $propbag->add('type',        'string');
                $propbag->add('name',        XML_IMAGE_TO_DISPLAY);
                $propbag->add('description', SYNDICATION_PLUGIN_XML_DESC);
                $propbag->add('default',     'img/xml.gif');
                break;

            case 'big_img':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDICON);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDICON_DESC);
                $propbag->add('default',     'img/subtome.png');
                break;

            case 'feed_name':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDNAME);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDNAME_DESC);
                $propbag->add('default',     '');
                break;

             case 'comment_name':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_COMMENTNAME);
                $propbag->add('description', SYNDICATION_PLUGIN_COMMENTNAME_DESC);
                $propbag->add('default',     '');
                break;

            case 'subToMe':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_SUBTOME);
                $propbag->add('description', SYNDICATION_PLUGIN_SUBTOME_DESC);
                $propbag->add('default',     true);
                break;

            case 'custom_url':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_CUSTOMURL);
                $propbag->add('description', SYNDICATION_PLUGIN_CUSTOMURL_DESC);
                $propbag->add('default',     '');
                break;


            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->get_config('title');
        $iconURL = $this->get_config('iconURL', 'img/xml.gif');
        if ($iconURL != 'none') {
            $small_icon  = serendipity_getTemplateFile($iconURL);
        }
        $custom_feed = trim($this->get_config('feed_name'));
        $custom_comm = trim($this->get_config('comment_name'));
        $custom_img  = trim($this->get_config('big_img', 'img/subtome.png'));
        if ($custom_img != 'none' && $custom_img != "feedburner") {
            $custom_img = serendipity_getTemplateFile($custom_img);
        }
        $subtome     = serendipity_db_bool($this->get_config('subToMe', true));
        $fbid        = $this->get_config('fb_id');
        $custom_url  = serendipity_db_bool($this->get_config('custom_url', false));
        $feed_format = $this->get_config('feed_format', 'rss');

        $useRss = true;
        if ($feed_format  == 'atom') {
            $useRss = false;
            $useAtom = true;
        } else if ($feed_format == 'rssatom') {
            $useAtom = true;
        }

        $img = 'http://feeds.feedburner.com/~fc/'.$this->get_config('fb_id').'?bg=99CCFF&amp;fg=444444&amp;anim=0';

        $icon = $small_icon;
        if (!empty($custom_img) && $custom_img != 'default' && $custom_img != 'none' && $custom_img != 'empty') {
            $icon = $custom_img;
            if ($fbid != "" && $custom_img == 'feedburner') {
                $icon = "http://feeds.feedburner.com/~fc/$fbid?bg=99CCFF&amp;fg=444444&amp;anim=0";
            }
            if ($fbid == "" && $custom_img == 'feedburner') {
                $icon = serendipity_getTemplateFile('img/subtome.png');
            }
        }

        if (empty($custom_feed) || $custom_feed == 'default' || $custom_feed == 'none' || $custom_feed == 'empty') {
            $FEED = 'Feed';
        } else {
            $FEED = $custom_feed;
        }

        if (empty($custom_comm) || $custom_comm == 'default' || $custom_comm == 'none' || $custom_comm == 'empty') {
            $COMMENTS = COMMENTS;
        } else {
            $COMMENTS = $custom_comm;
        }

        if ($custom_url) {
            $mainFeed = serendipity_get_config_var('feedCustom');
        } else {
            $mainFeed = serendipity_rewriteURL(PATH_FEEDS .'/index.rss2');
            if ($fbid != "") {
                $mainFeed ='http://feeds.feedburner.com/' . $fbid;
            } else {
                if ($useAtom && ! $useRss) {
                    $mainFeed = serendipity_rewriteURL(PATH_FEEDS .'/atom10.xml');
                }
            }
        }

        $onclick = "";
        if ($subtome) {
            $onclick = $this->getOnclick($mainFeed);
        }

        echo "\n".'<ul id="serendipity_syndication_list" class="plainList">';
        echo $this->generateFeedButton($mainFeed, ($icon == $small_icon ?  ($useRss ? "RSS $FEED" : "Atom $FEED") : ""), $onclick, $icon, $icon == $small_icon);

        if ($useRss && $useAtom) {
            echo $this->generateFeedButton(serendipity_rewriteURL(PATH_FEEDS .'/atom10.xml'), "Atom $FEED",
                                            ($subtome ? $this->getOnclick(serendipity_rewriteURL(PATH_FEEDS .'/atom10.xml')) : ""), $small_icon);
        }

        if (serendipity_db_bool($this->get_config('show_2.0c', false)) || serendipity_db_bool($this->get_config('show_comment_feed', false))) {
            echo $this->generateFeedButton(($useAtom && ! $useRss ? serendipity_rewriteURL(PATH_FEEDS .'/comments.atom') : serendipity_rewriteURL(PATH_FEEDS .'/comments.rss2')),
                                            $COMMENTS,
                                            ($subtome ? $this->getOnclick(serendipity_rewriteURL(PATH_FEEDS .'/comments.rss2')) : ""),
                                            $small_icon);
        }
        echo "</ul>\n";
    }

    function generateFeedButton($feed, $label, $onclick, $icon, $small = false) {
        $link = 'href="'.$feed.'" '. $onclick;
        $output = '<li>';
        $class = "";
        if ($onclick != "") {   # this might be not a good solution, but right now works to add the subtome-class only when subtome is on
            $class = "subtome";
        }
        if ($small) {
            $class .= " serendipity_xml_icon";
        }
        if ($icon) {
            $output .= '<a class="'. $class .'" ' . $link . '><img src="' . $icon . '" alt="XML" style="border: 0px" /></a>'."\n";
        }
        if (! empty($label)) {
            $output .= " <a $link>$label</a>\n";
        }
        return $output .= "</li>\n";
    }

    function getOnclick($url) {
        return "onclick=\"document.subtomeBtn=this;document.subtomeBtn.dataset['subtomeFeeds']='". urlencode($url). "';var s=document.createElement('script');s.src='https://www.subtome.com/load.js';document.body.appendChild(s);return false;\"";
    }

}

?>