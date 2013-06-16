<?php

class serendipity_plugin_authors extends serendipity_plugin {
    var $title = AUTHORS;

    function introspect(&$propbag) {
        global $serendipity;

        $propbag->add('name',        AUTHORS);
        $propbag->add('description', AUTHOR_PLUGIN_DESC);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '2.01');
        $propbag->add('configuration', array('image', 'allow_select', 'title', 'showartcount', 'mincount'));
        $propbag->add('groups',        array('FRONTEND_VIEWS'));
    }

    function introspect_config_item($name, &$propbag)
    {
        global $serendipity;
        switch($name) {
            case 'title':
                $propbag->add('type',          'string');
                $propbag->add('name',          TITLE);
                $propbag->add('description',   TITLE);
                $propbag->add('default',       AUTHORS);
                break;

            case 'allow_select':
                $propbag->add('type',         'boolean');
                $propbag->add('name',         AUTHORS_ALLOW_SELECT);
                $propbag->add('description',  AUTHORS_ALLOW_SELECT_DESC);
                $propbag->add('default',      true);
                break;

            case 'image':
                $propbag->add('type',         'string');
                $propbag->add('name',         XML_IMAGE_TO_DISPLAY);
                $propbag->add('description',  XML_IMAGE_TO_DISPLAY_DESC);
                $propbag->add('default',     serendipity_getTemplateFile('img/xml.gif'));
                break;

            case 'showartcount':
                $propbag->add('type',         'boolean');
                $propbag->add('name',         AUTHORS_SHOW_ARTICLE_COUNT);
                $propbag->add('description',  AUTHORS_SHOW_ARTICLE_COUNT_DESC);
                $propbag->add('default',      false);
                break;

            case 'mincount':
                $propbag->add('type',         'string');
                $propbag->add('name',         PLUGIN_AUTHORS_MINCOUNT);
                $propbag->add('description',  '');
                $propbag->add('default',      '');
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title) {
        global $serendipity;

        $title = $this->get_config('title', $this->title);

        $sort = $this->get_config('sort_order');
        if ($sort == 'none') {
            $sort = '';
        } else {
            $sort .= ' ' . $this->get_config('sort_method');
        }
        $is_form  = serendipity_db_bool($this->get_config('allow_select'));
        $is_count = serendipity_db_bool($this->get_config('showartcount'));
        $mincount = (int)$this->get_config('mincount');
        $authors  = serendipity_fetchUsers(null, 'hidden', $is_count);
        $html       = '';

        if ($is_form) {
            $html .= '<form action="' . $serendipity['baseURL'] . $serendipity['indexFile'] . '?frontpage" method="post">';
        }

        $image = $this->get_config('image', serendipity_getTemplateFile('img/xml.gif'));
        $image = (($image == "'none'" || $image == 'none') ? '' : $image);

        $html .= '<ul class="plainList">' . "\n";

        if (is_array($authors) && count($authors)) {
            foreach ($authors as $auth) {

                if ($is_count) {
                    if ($auth['artcount'] < $mincount) {
                        continue;
                    }
                    $entrycount = " ({$auth['artcount']})";
                } else {
                    $entrycount = "";
                }

                $html .= '<li>';

                if ($is_form) {
                    $html .= '<input style="width: 15px" type="checkbox" name="serendipity[multiAuth][]" value="' . $auth['authorid'] . '" />';
                }

                if ( !empty($image) ) {
                    $html .= '<a class="serendipity_xml_icon" href="'. serendipity_feedAuthorURL($auth, 'serendipityHTTPPath') .'"><img src="'. $image .'" alt="XML" style="border: 0px" /></a> ';
                }
                $html .= '<a href="'. serendipity_authorURL($auth, 'serendipityHTTPPath') .'" title="'. htmlspecialchars($auth['realname']) .'">'. htmlspecialchars($auth['realname']) . $entrycount . '</a>';
                $html .= '</li>' . "\n";
            }
        }

        $html .= '</ul>' . "\n";

        if ($is_form) {
            $html .= '<div><input type="submit" name="serendipity[isMultiAuth]" value="' . GO . '" /></div>';
        }

        $html .= sprintf(
            '<div><a href="%s" title="%s">%s</a></div>',

            $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'],
            ALL_AUTHORS,
            ALL_AUTHORS
        );

        if ($is_form) {
            $html .= '</form>';
        }
        print $html;
    }
}

?>