<?php

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

// Load possible language files.
@serendipity_plugin_api::load_language(dirname(__FILE__));

// Actual version of this plugin
@define('PLUGIN_EVENT_GRAVATAR_VERSION', '1.62.3'); // NOTE: This plugin is also in the central repository. Commit changes to the core, too :)

// Defines the maximum available method  slots in the configuration.
@define('PLUGIN_EVENT_GRAVATAR_METHOD_MAX', 6);

// Switch on and off debugging mode of the plugin
@define('PLUGIN_EVENT_GRAVATAR_DEBUG', false);

class serendipity_event_gravatar extends serendipity_event
{
    var $title = PLUGIN_EVENT_GRAVATAR_NAME;

    // Holds MD5 code for the MyBlogLog dummy icon.
    var $mybloglog_dummy_md5        = null;
    var $cache_dir                  = null;
    var $defaultImageConfiguration  = null;

    var $avatarConfiguration        = array();
    var $cache_seconds              = 0;

    function introspect(&$propbag)
    {
        global $serendipity;

        $propbag->add('name',          PLUGIN_EVENT_GRAVATAR_NAME);
        $propbag->add('description',   PLUGIN_EVENT_GRAVATAR_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking, Grischa Brockhaus');
        $propbag->add('requirements',  array(
            'serendipity' => '1.6',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('version',       PLUGIN_EVENT_GRAVATAR_VERSION);
        $propbag->add('groups',        array('IMAGES'));
        $propbag->add('event_hooks',   array(
            'frontend_display' => true,
            'frontend_comment' => true,
            'external_plugin'  => true,
            'css'              => true,
        ));

        $propbag->add('legal',    array(
            'services' => array(
                'gravatar' => array(
                    'url'  => 'https://gravatar.com',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),
                'favatar' => array(
                    'url'  => 'http://www.peej.co.uk/projects/favatars.html',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),
                'pavatar' => array(
                    'url'  => 'http://www.pavatar.com',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),
                'twitter' => array(
                    'url'  => 'http://www.twitter.com',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),
                'identica' => array(
                    'url'  => 'http://identi.ca',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),
                'monsterid' => array(
                    'url'  => 'http://www.splitbrain.org/go/monsterid',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),
                'identicon' => array(
                    'url'  => 'http://scott.sherrillmix.com/blog/blogger/wp_identicon/',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),
                'wavatars' => array(
                    'url'  => 'http://www.shamusyoung.com/twentysidedtale/?p=1462',
                    'desc' => 'Transmits comment data to retrieve unique avatar for a user.'
                ),

            ),
            'frontend' => array(
                'To display unique avatar images for blog comments, data specific to the correspondig service is transmitted to retrieve the proper avatar.',
            ),
            'backend' => array(
            ),
            'cookies' => array(
            ),
            'stores_user_input'     => true,
            'stores_ip'             => false,
            'uses_ip'               => true,
            'transmits_user_input'  => true
        ));


        $configuration =               array('longdescription', 'separator');
        $config_methods =              array();
        for ($idx=1; $idx<=PLUGIN_EVENT_GRAVATAR_METHOD_MAX; $idx++) {
            $config_methods[] = "method_$idx";
        }

        $propbag->add('configuration',
            array_merge($configuration, $config_methods,
                array('defaultavatar', 'recent_entries', 'infoline',
                    'autoralt', 'smartyimage', 'align', 'size', 'cache', 'rating',
                    'gravatar_fallback','gravatar_fallback_use_always','warning')
            )
        );
    }

    function introspect_config_item($name, &$propbag)
    {
        global $serendipity;

        $types = array(
            'gravatar'  => "Gravatar",
            'favatar'   => "Favatar",
            'pavatar'   => "Pavatar",
            'twitter'   => "Twitter",
            'identica'  => "Identica",
            'monsterid' => "Monster ID",
            'wavatars'  => "Wavatars",
            'identicon' => "Identicon/YCon",
            'default'   => PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT,
            'none'      => "---",
        );

        // Add config for methods.
        for ($idx=1; $idx<=PLUGIN_EVENT_GRAVATAR_METHOD_MAX; $idx++) {
            if ($name=="method_$idx") {
                $propbag->add('type',       'select');
                $propbag->add('name',       "($idx) " . PLUGIN_EVENT_GRAVATAR_METHOD);
                $propbag->add('description',PLUGIN_EVENT_GRAVATAR_METHOD_DESC);
                $propbag->add('select_values', $types);
                $propbag->add('default',     'pavatar');
                return true;
            }
        }

        $gravatar_fallbacks = array(
            'monsterid' => "Monster ID",
            'wavatar'   => "Wavatar",
            'identicon' => "Identicon",
            'default'   => "Gravatar symbol",
            'none'      => "---",
        );

        switch($name) {

            case 'smartyimage':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_USE_SMARTY);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_USE_SMARTY_DESC);
                $propbag->add('default',     false);
                break;

            case 'infoline':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_INFOLINE);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_INFOLINE_DESC);
                $propbag->add('default',     true);
                break;

            case 'recent_entries':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES_DESC);
                $propbag->add('default',     true);
                break;

            case 'warning':
                $propbag->add('type',        'content');
                $propbag->add('default',     PLUGIN_EVENT_GRAVATAR_EXTLING_WARNING);
                break;

            case 'longdescription':
                $propbag->add('type',        'content');
                $propbag->add('default',     PLUGIN_EVENT_GRAVATAR_LONG_DESCRIPTION);
                break;

            case 'separator':
                $propbag->add('type',        'separator');
                break;

            case 'gravatar_fallback':
                $propbag->add('type',       'select');
                $propbag->add('name',       PLUGIN_EVENT_GRAVATAR_FALLBACK);
                $propbag->add('description',PLUGIN_EVENT_GRAVATAR_FALLBACK_DESC);
                $propbag->add('select_values', $gravatar_fallbacks);
                $propbag->add('default',     'none');
                break;

            case 'gravatar_fallback_use_always':
                $propbag->add('type',        'boolean');
                $propbag->add('name',       PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS);
                $propbag->add('description',PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS_DESC);
                $propbag->add('default',     false);
                break;

            case 'defaultavatar':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR_DESC);
                $propbag->add('default',     '');
                break;

            case 'cache':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_CACHING);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_CACHING_DESC);
                $propbag->add('default',     48);
                break;

            case 'size':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_SIZE);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_SIZE_DESC);
                $propbag->add('default',     '40');
                break;

            case 'border':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_BORDER);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_BORDER_DESC);
                $propbag->add('default',     '');
                break;

            case 'rating':
                $propbag->add('type',        'radio');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_RATING);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_RATING_DESC);
                $propbag->add('radio',       array(
                    'value' => array('-', 'G', 'PG', 'R', 'X'),
                    'desc'  => array(PLUGIN_EVENT_GRAVATAR_RATING_NO,PLUGIN_EVENT_GRAVATAR_RATING_G, PLUGIN_EVENT_GRAVATAR_RATING_PG, PLUGIN_EVENT_GRAVATAR_RATING_R, PLUGIN_EVENT_GRAVATAR_RATING_X)
                ));
                $propbag->add('radio_per_row', '1');
                $propbag->add('default',     '-');
                break;

            case 'align':
                $align = array(
                    'left'      => PLUGIN_EVENT_GRAVATAR_ALIGN_LEFT,
                    'right'     => PLUGIN_EVENT_GRAVATAR_ALIGN_RIGHT,
                    'noalign'   => PLUGIN_EVENT_GRAVATAR_ALIGN_NONE,
                );

                $propbag->add('type',           'select');
                $propbag->add('name',           PLUGIN_EVENT_GRAVATAR_ALIGN);
                $propbag->add('description',    PLUGIN_EVENT_GRAVATAR_ALIGN_DESC);
                $propbag->add('select_values',  $align);
                $propbag->add('default',        'right');
                break;

            case 'autoralt':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_EVENT_GRAVATAR_AUTOR_ALT);
                $propbag->add('description', PLUGIN_EVENT_GRAVATAR_AUTOR_ALT_DESC);
                $propbag->add('default',     false);
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        $title = PLUGIN_EVENT_GRAVATAR_NAME;
    }

    /**
     *  Will be called while saving settings
     */
    function cleanup()
    {
        // *Always* clean up the cache after changing configuration, else
        // the configuration change will first be seen after cache time is run out.
        $this->log("-------");
        $cacheDir = $this->getCacheDirectory();
        if (is_dir($cacheDir) && $handle = opendir($cacheDir)) {
            while (false !== ($file = readdir($handle))) {
                $filename = $cacheDir . '/' . $file;
                if (!is_dir($filename)) {
                    $this->log("CLEANUP CACHE: " . $filename);
                    unlink($filename);
                }
            }
        }
    }

    function event_hook($event, &$bag, &$eventData, $addData = null)
    {
        global $serendipity;
        static $cache = null;
        static $method = null;

        $hooks = &$bag->get('event_hooks');

        if ($cache === null) {
            $cache = $this->get_config('cache') * 60 * 60; // convert hours to seconds
            $this ->cache_seconds = $cache;
        }

        if ($method === null) {
            $method = $this->get_config('method', 'gravatar');
        }

        if (isset($hooks[$event])) {
            switch($event) {

                // Catch external_plugin event for fresh fetching avatar icons
                // This will response with an image (not with html code)
                case 'external_plugin':
                    $parts      = explode('_', $eventData);
                    if (count($parts)<4) {
                        return false;
                    }
                    if ($parts[0] == 'fetchAvatar') {
                        if (count($parts)!=5) return false;
                        $info = array();
                        $info['url']       = $this->urldecode($parts[1]);
                        $info['email_md5'] = $parts[2];
                        $info['author']    = $this->urldecode($parts[3]);
                        $info['cid']       = $parts[4];
                        $this->log("-------");
                        $this->log("fetch Avatar: " . urldecode($parts[1]));
                        $this->fetchAvatar($info);
                        return true;
                    } else if ($parts[0] == 'cachedAvatar') {
                        if (count($parts)!=4) return false;
                        $cache_file = $this->getCacheDirectory() . '/' . $parts[1] .'_' .$parts[2] . '_' .$parts[3];
                        $lastrun = $cache_file . '.lastrun';
                        $this->log("-------");
                        $this->log("show cached Avatar: $cache_file");
                        // Get last run information
                        if (file_exists($lastrun)){
                            $fp = fopen($lastrun, 'rb');
                            $this->avatarConfiguration = unserialize(fread($fp, filesize($lastrun)));
                            fclose($fp);
                        }
                        $this->show($cache_file);
                        return true;
                    } else {
                        return false;
                    }
                    break;

                // Print out image html for the user avatar into the frontend_display
                case 'frontend_display':
                    if (!isset($eventData['comment'])) {
                        return true;
                    }

                    $this->printAvatarHtml($eventData, $addData);
                    break;

                case 'css':
                    // avatar css has to be emitted no matter of smarty enabled: the sidebar needs it.
                    // CSS class does NOT exist by user customized template styles, include default
                    if (false === (strpos($eventData, '.avatar_left') || strpos($eventData, '.avatar_rigth'))) {
                        $eventData .= '

/* serendipity_event_gravatar start */

.avatar_left {
    float:left;
    margin-left:0px;
    margin-right:10px;
}
.avatar_right {
    float:right;
    margin-right:0px;
    margin-left:10px;
}

/* serendipity_event_gravatar end */

';

                    }
                    break;

                // Adds information about the actual supported avatar types below the comment input
                case 'frontend_comment':

                    // Suppress infoline about configured avatar types if configured like that:
                    if (!serendipity_db_bool($this->get_config('infoline', 'true'))){
                        return false;
                    }

                    // The contact form uses the comments, too. We don't want this information line there and detect it by the missing properties entry.
                    if (empty($eventData['properties'])){
                        return false;
                    }
                    $supported_methods = '';
                    for($methodnr = 1; $methodnr <= PLUGIN_EVENT_GRAVATAR_METHOD_MAX; $methodnr++){
                        $act_method = $this->get_config("method_".$methodnr);
                        switch ($act_method){
                            case 'gravatar':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://www.gravatar.com">Gravatar</a>';
                                break;
                            case 'favatar':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://www.peej.co.uk/projects/favatars.html">Favatar</a>';
                                break;
                            case 'pavatar':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://www.pavatar.com">Pavatar</a>';
                                break;
                            case 'twitter':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://www.twitter.com">Twitter</a>';
                                break;
                            case 'identica':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://identi.ca">Identica</a>';
                                break;
                            case 'mybloglog':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://www.mybloglog.com">MyBlogLog</a>';
                                break;
                            case 'monsterid':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://www.splitbrain.org/go/monsterid">Monster ID</a>';
                                break;
                            case 'identicon':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://scott.sherrillmix.com/blog/blogger/wp_identicon/">Identicon/Ycon</a>';
                                break;
                            case 'wavatars':
                                $supported_methods .= (empty($supported_methods) ? '' : ', ') . '<a href="http://www.shamusyoung.com/twentysidedtale/?p=1462">Wavatars</a>';
                                break;
                        }
                    }
                    echo '<div class="serendipity_commentDirection serendipity_comment_gravatar">' . sprintf(PLUGIN_EVENT_GRAVATAR_SUPPORTED, $supported_methods) . '</div>';
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
     * Returns HTML displaying the user avatar. This is done without any call to external servers.
     * If a cached avatar is found, the image will have it as SRC, else the SRC will be filled with
     * an external_plugin call, that will try to fetch a fresh avatar later.
     */
    function printAvatarHtml(&$eventData, &$addData)
    {
        global $serendipity;

        $useSmarty = serendipity_db_bool($this->get_config('smartyimage', 'false'));

        // comments sidebar plugin doesn't support smarty, so switch it off, if detected
        if ($addData['from'] == 'serendipity_plugin_comments:generate_content') {
           if (!serendipity_db_bool($this->get_config('recent_entries', 'true'))) {
               return false;
           }
           $useSmarty = false;
        }

        if (empty($eventData['url']) && empty($eventData['email']) && empty($eventData['author']) && !$this->supportDefaultAvatar()) {
            $this->log("No url nor email handed and default avatar not supported!");
            return false;
        }

        if (!empty($eventData['url']) && !preg_match('@^https*://@i',$eventData['url'])){
            $this->log("Changed wrong url: {$eventData['url']}");
            $eventData['url'] = 'http://' . $eventData['url'];
        }

        $url = '';
        if (!empty($eventData['url'])) {
            $url = $eventData['url'];
        }

        if (!empty($eventData['url'])) { // Strip Query params
            $urlparts = explode('?', $eventData['url']);
            $url = $urlparts[0];
        }
        $title = '';
        $author = 'unknown';
        if (isset($eventData['author'])) {
            $author = (function_exists('serendipity_specialchars') ? serendipity_specialchars($eventData['author']) : htmlspecialchars($eventData['author'], ENT_COMPAT, LANG_CHARSET));
            $title = $author;
        }

        if (isset($eventData['email']) && !empty($eventData['email'])) {
            $email_md5 = md5(strtolower($eventData['email']));
        }
        else {
            $email_md5 = '';
        }
        if ($this->cache_seconds > 0) {
            $cache_file = $this->getCacheFilePath($eventData);
            // if no cache filename was generated, no usable user data was found.
            // this meens: it won't be possible to generate any image, so break at this point.
            if (!isset($cache_file)) {
                return false;
            }
            $this->log("comment print: " . print_r($eventData, true));
            // If there is a cache file that's new enough, return the image immidiatly
            if (file_exists($cache_file) &&  (time() - filemtime($cache_file) < $this->cache_seconds)) {
                $url = $serendipity['baseURL'] . $serendipity['indexFile'] . '?/'
                    . $this->getPermaPluginPath() . '/cachedAvatar_' . md5($url) . '_' . $email_md5
                    . '_' . md5($author);
            } else { // no image cached yet, call external plugin hook for fetching a new one
                $url = $serendipity['baseURL'] . $serendipity['indexFile'] . '?/'
                    . $this->getPermaPluginPath() . '/fetchAvatar_' . $this->urlencode($url) . '_' . $email_md5
                    . '_' . $this->urlencode($author) . '_' . $eventData['id'];
            }

        } else { // call external plugin hook for fetching a new one
            $url = $serendipity['baseURL'] . $serendipity['indexFile'] . '?/'
                . $this->getPermaPluginPath() . '/fetchAvatar_' . $this->urlencode($url) . '_' . $email_md5
                . '_' . $this->urlencode($author) . '_' . $eventData['id'];
        }

        $image_html = $this->generateImageHtml($url, $title, $this->get_config('align', 'right'), !$useSmarty, $this->generateAvatarCssClass($addData));
        if ($useSmarty) {
            $eventData['avatar'] = $image_html;
        }
        else {
            $eventData['comment'] = $image_html . $eventData['comment'];
        }

        return true;
    }

    /**
     * Generates a CSS class for the avatar depending where it is displayed.
     * Defaults to comment_avatar in comments and is unique for plugins.
     */
    function generateAvatarCssClass($addData)
    {
        if (empty($addData)) {
            return "avatar";
        }
        $from = $addData['from'];
        $parts = explode(':',$from);
        $css = $parts[0];
        return ($css == 'functions_entries'? 'comment' : $css ) . '_avatar';
    }

    /**
     * Tests wether the default avatar is supported
     */
    function supportDefaultAvatar()
    {

        // Check if a default avatar is defined
        $default = $this->getDefaultImageConfiguration();
        if (empty($default['defaultavatar'])) {
            return false;
        }

        // check if default avatar method is configured as one of the avatar methods.
        for($methodnr = 1; $methodnr <= PLUGIN_EVENT_GRAVATAR_METHOD_MAX; $methodnr++){
            $method = $this->get_config("method_" . $methodnr);

            // if none is configured, ignore later methods!
            if ($method == 'none'){
                return false;
            }

            // return true if default avatar method is found
            if ($method == 'default'){
                return true;
            }
        }
        return false;
    }

    /**
     * Will try to fetch a fresh avatar image by user configuration. If retreiving was successfull,
     * the image will cached and displayed as binary image response.
     */
    function fetchAvatar(&$eventData)
    {
        global $serendipity;

        $methodnr = 1;

        // Assure existance of cache directory
        @mkdir($this->getCacheDirectory());
        $default = $this->getDefaultImageConfiguration();

        // load configuration of last run
        $lastrun_fname = $this->getCacheFilePath($eventData) . '.lastrun';
        if (file_exists($lastrun_fname) && (time() - filemtime($lastrun_fname))< $this->cache_seconds) {
            $this->log("Found fresh lastrun: $lastrun_fname");
            $fp = fopen($lastrun_fname, 'rb');
            $this->avatarConfiguration = unserialize(fread($fp, filesize($lastrun_fname)));
            fclose($fp);
            $this->avatarConfiguration['loaded_from_cache'] = true;
            // go to last successfull methodnr:
            if (isset($this->avatarConfiguration['methodnr'])) {
                $methodnr = $this->avatarConfiguration['methodnr'];
                $this->log("MethodNr by lastrun: $methodnr");
            }
        }

        $success = false;
        while (!$success && $methodnr <= PLUGIN_EVENT_GRAVATAR_METHOD_MAX) {
            $method = $this->get_config("method_" . $methodnr);
            switch ($method){
                case 'gravatar':
                    $success = $this->fetchGravatar($eventData);
                    break;
                case 'favatar':
                    $success = $this->fetchPFavatar($eventData, 'F');
                    break;
                case 'pavatar':
                    $success = $this->fetchPFavatar($eventData, 'P');
                    break;
                case 'twitter':
                    $success = $this->fetchTwitter($eventData);
                    break;
                case 'identica':
                    $success = $this->fetchIdentica($eventData);
                    break;
                case 'monsterid':
                    $success = $this->fetchMonster($eventData);
                    break;
                case 'wavatars':
                    $success = $this->fetchWavatar($eventData);
                    break;
                case 'identicon':
                    $success = $this->fetchYcon($eventData);
                    break;
                case 'default':
                    $success = $this->fetchDefault();
                    break;
                case 'none':
                    $success = true;
                    break;
            }
            if ($success){
                $this->log("fetchAvater success.");
                $this->avatarConfiguration['methodnr'] = $methodnr;
                $this->avatarConfiguration['fetch_date'] = time();
                // save configuration of this check, if it was not loaded from cache.
                if (!isset($this->avatarConfiguration['loaded_from_cache'])) {
                    $fp = fopen($lastrun_fname, 'wb');
                    fwrite($fp,serialize($this->avatarConfiguration));
                    fclose($fp);
                }
                return true;
            }
            $methodnr++;
        }
    }

    /**
     * Fetches a Gravatar and returns it as a binary image response.
     *
     * @param array eventdata the data given by the event
     * @param int cache hours for fetching images from cache
     *
     * @return boolean true, if Avatar was found and added to the comment buffer
     */
    function fetchGravatar(&$eventData)
    {
        global $serendipity;

        $this->log("Gravatar: url=" . $eventData['url'] . " email_md5=" . $eventData['email_md5'] . " author=" .$eventData['author']) ;
        // Was lastrun successfull?
        if (isset($this->avatarConfiguration['gravatar_found']) && !$this->avatarConfiguration['gravatar_found']) {
            return false;
        }
        if (empty($eventData['email_md5'])) {
            if (!serendipity_db_bool($this->get_config('gravatar_fallback_use_always', 'false')) || (empty($eventData['url']) && empty($eventData['author']))) {
                return false;
            }
            else {
                if (empty($eventData['url'])) $email_md5 = md5($eventData['author']);
                else $email_md5 = md5($eventData['url']);
            }
        }
        else {
            $email_md5 = $eventData['email_md5'];
        }
        $default = $this->getDefaultImageConfiguration();

        $gravatar_fallback = $this->get_config("gravatar_fallback");
        $fallback = "";
        if ($gravatar_fallback != 'none') {
            $fallback = '&d=' . $gravatar_fallback;
        }
        else {
            //$defaultavatar = urlencode((empty($default['defaultavatar'])?  $serendipity['baseURL'] . 'dummy.gif': 'http://' . $_SERVER['SERVER_NAME'] . $default['defaultavatar']));
            $defaultavatar = urlencode($serendipity['serendipityHTTPPath'] . 'dummy456.gif123'); // Add a not existing image to produce an error we can check
            $fallback = '&d=' . $defaultavatar;
        }

        $urltpl = 'http://www.gravatar.com/avatar.php?'
            . 'gravatar_id=' . $email_md5
            . $fallback
            . '&size='        . $default['size']
            . ($default['rating']=='-'?'':'&rating='. $default['rating']);

        // Assure a default avatar, because we need it for testing if the avatar given by Gravatar is a dummy image.
        $this->log("Gravatar Link: " . $urltpl) ;

        $success = $this->saveAndResponseAvatar($eventData, $urltpl, 1);
        $this->avatarConfiguration['gravatar_found'] = $success;

        return $success;
    }


    /**
     * Tries to add a favatar or pavatar (depending on the given mode) to the comment.
     *
     * @param array eventdata the data given by the event
     * @param int cache hours for fetching images from cache
     * @param string mode has to be 'P' for Pavatar or 'F' for Favatar loading.
     *
     * @return boolean true, if Avatar was found and added to the comment buffer
     */
    function fetchPFavatar(&$eventData, $mode="F")
    {
        require_once S9Y_PEAR_PATH . 'HTTP/Request2.php';
        global $serendipity;

        $default = $this->getDefaultImageConfiguration();

        $url        = $eventData['url'];
        if (empty($url)) {
            return false;
        }
        $favicon = false;

        $this->log($mode . " - Trying to fetch for $url");

        // Try to get the URL
        $parts = @parse_url($url);
        if (!is_array($parts)) {
            return false;
        }

        $ip = @gethostbyname($parts['host']);
        if (!$ip || $ip == $parts['host']) {
            return false;
        }

        $this->log($mode . " - URL ok.");

        $cache_file = $this->getCacheFilePath($eventData);

        // Load icon url detected in last run
        if (isset($this->avatarConfiguration['img_url_'.$mode])){
            $favicon = $this->avatarConfiguration['img_url_'.$mode];
            $this->log($mode . " - using last run url: $favicon");
        }

        if ($favicon === false) {
            // use optimization for localhost
            $islocalhost = ($_SERVER['HTTP_HOST'] == $parts['host']);

            if (function_exists('serendipity_request_start')) {
                serendipity_request_start();
            }

            // Evaluate URL of P/Favatar
            $options = array('follow_redirects' => true, 'max_redirects' => 3);
            if (version_compare(PHP_VERSION, '5.6.0', '<')) {
                // On earlier PHP versions, the certificate validation fails. We deactivate it on them to restore the functionality we had with HTTP/Request1
                $options['ssl_verify_peer'] = false;
            }
            $req = new HTTP_Request2($url, HTTP_Request2::METHOD_GET, $options);
            $favicon = false;
            // code 200: OK, code 30x: REDIRECTION
            $responses = "/(200 OK)|(30[0-9] Found)/"; // |(30[0-9] Moved)
            try {
                $response = $req->send();
                $pavatarHeaderIcon = $response->getHeader("X-Pavatar");
                $fContent = $response->getBody();
                if ($mode=='P' && !empty($pavatarHeaderIcon)){
                    $faviconURL = $pavatarHeaderIcon;
                    $this->log("Found x-pavatar in head: $faviconURL");
                }
                else if (!$islocalhost && ($mode=='P' && preg_match('/<link[^>]+rel="pavatar"[^>]+?href="([^"]+?)"/si', $fContent, $matches)) ||
                                          ($mode=='F' && preg_match('/<link[^>]+rel="(?:shortcut )?icon"[^>]+?href="([^"]+?)"/si', $fContent, $matches)))
                {
                    // Attempt to grab an avatar link from their webpage url
                    $linkUrl = (function_exists('serendipity_entity_decode') ? serendipity_entity_decode($matches[1]) : html_entity_decode($matches[1], ENT_COMPAT, LANG_CHARSET));
                    if (substr($linkUrl, 0, 1) == '/') {
                        if ($urlParts = parse_url($url)) {
                            $faviconURL = $urlParts['scheme'] . '://' . $urlParts['host'] . $linkUrl;
                        }
                    } else if (substr($linkUrl, 0, 7) == 'http://' || substr($linkUrl, 0, 8) == 'https://') {
                        $faviconURL = $linkUrl;
                    } else if (substr($url, -1, 1) == '/') {
                        $faviconURL = $url . $linkUrl;
                    } else {
                        $faviconURL = $url . '/' . $linkUrl;
                    }

                    $this->log($mode . " - Found link rel to url $faviconURL");
                } else {
                    // If unsuccessful, attempt to "guess" the favicon location
                    $urlParts   = parse_url($url);
                    $faviconURL = $urlParts['scheme'] . '://' . $urlParts['host'] . ($mode=='F'?'/favicon.ico':'/pavatar.png');
                    $this->log($mode . " - Not found link rel, guessing $faviconURL");
                }

                // Split image URL and check if image is available using a fast and timed out socket:
                $url_parts = @parse_url($faviconURL);
                if (!is_array($url_parts)) {
                    $url_parts = array();
                }

                if (!empty($url_parts['path'])) {
                    $documentpath = $url_parts['path'];
                } else {
                    $documentpath = '/';
                }

                if (!empty($url_parts['query'])) {
                    $documentpath .= '?' . $url_parts["query"];
                }

                if (empty($url_parts['port'])) {
                    $url_parts['port'] = '80';
                }

                if (!empty($url_parts['host'])) {
                    $socket = @fsockopen($url_parts['host'], $url_parts['port'], $errno, $errstr, 30);

                    if ($socket) {
                        fwrite($socket, "HEAD " . $documentpath . " HTTP/1.0\r\nHost: {$url_parts['host']}\r\n\r\n");
                        $http_response = fgets($socket, 25);

                        $this->log($mode . ' Testing server ' . $url_parts['host'] . " dopath: $documentpath - HEAD Response: $http_response");

                        if (preg_match($responses, $http_response)) // We only test for server existance
                        {
                            $favicon = $faviconURL;
                        }
                        fclose($socket);
                    }
                }

                // Remember the last result of the P/Favatar search
                $this->avatarConfiguration['img_url_'.$mode] = $favicon;
            } catch (HTTP_Request2_Exception $e) {
                if (!$islocalhost && preg_match($responses, $response->getStatus())) {
                    $favicon = false;
                    $this->log($mode . " - Error fetching $url: " . $response->getStatus());
                }
            }
            
            if (function_exists('serendipity_request_end')) {
                serendipity_request_end();
            }
        } // if favicon url not loaded from cache

        if (!empty($favicon)) {
            $this->log($mode . " - found at: $favicon");
            return $this->saveAndResponseAvatar($eventData, $favicon);
        }
        else {
            return false;
        }
    }

    function fetchTwitter(&$eventData)
    {
        require_once S9Y_PEAR_PATH . 'HTTP/Request2.php';

        // Was lastrun successfull?
        if (isset($this->avatarConfiguration['twitter_found']) && !$this->avatarConfiguration['twitter_found']) {
            return false;
        }

        // Let other plugins fill metadata. CommentSpice is perhaps able to fetch twitter infos.
        try {
            $original_url = $eventData['url'];
            $this->log("hook_event: avatar_fetch_userinfos");
            $askforData = array("type" => "twitter");
            serendipity_plugin_api::hook_event('avatar_fetch_userinfos', $eventData, $askforData);
        } catch (Exception $e) {
            $this->log($e);
        }

        if (empty($eventData['url'])) {
            return false;
        }
        $url = $eventData['url'];
        $eventData['url'] = $original_url;
        $parts = @parse_url($url);
        if (!is_array($parts)) {
            return false;
        }
        if ($parts['host'] == 'twitter.com' || $parts['host'] == 'www.twitter.com') {
            $path =  trim($parts['path']);
            $dirs = explode('/',$path);
            $twittername = $dirs[1];

            $this->log("Twitteruser found ($url): $twittername");

            $twitter_search = 'http://search.twitter.com/search.atom?q=from%3A' . $twittername . '&rpp=1';
            serendipity_request_start();
            $options = array();
            if (version_compare(PHP_VERSION, '5.6.0', '<')) {
                // On earlier PHP versions, the certificate validation fails. We deactivate it on them to restore the functionality we had with HTTP/Request1
                $options['ssl_verify_peer'] = false;
            }
            $req = new HTTP_Request2($twitter_search, HTTP_Request2::METHOD_GET, $options);
            try {
                $response = $req->send();

                $this->last_error = $response->getStatus();
                if ($response->getStatus() != 200) {
                    throw new HTTP_Request2_Exception("Could not search on twitter");
                }
                $response = trim($response->getBody());

            } catch (HTTP_Request2_Exception $e) {
                $this->last_error = $response->getStatus();
                serendipity_request_end();
                $this->log("Twitter Error: {$this->last_error}");
                return false;
            }
                
            serendipity_request_end();
            $parser = xml_parser_create();
            $vals=array(); $index=array();
            $success = xml_parse_into_struct($parser, $response, $vals, $index);
            xml_parser_free($parser);
            if ($success) {
                foreach ($index['LINK'] as $index) {
                    if ($vals[$index]['attributes']['REL'] == 'image') {
                        $img_url = $vals[$index]['attributes']['HREF'];
                        $success = true;
                        break;
                    }
                }
                if ($success) {
                    $success = $this->saveAndResponseAvatar($eventData, $img_url);
                }
            }
            $this->avatarConfiguration['twitter_found'] = $success;
            return $success;
        }
        return false;

    }

    function fetchIdentica(&$eventData)
    {
        require_once S9Y_PEAR_PATH . 'HTTP/Request2.php';

        // Was lastrun successfull?
        if (isset($this->avatarConfiguration['identica_found']) && !$this->avatarConfiguration['identica_found']) {
            return false;
        }
        if (empty($eventData['url'])) {
            return false;
        }
        $url = $eventData['url'];

        if (preg_match('@^http://identi\.ca/notice/(\d+)$@',$url,$matches)) {
            $status_id = $matches[1];
            $search = "http://identi.ca/api/statuses/show/$status_id.xml";
            serendipity_request_start();
            $options = array();
            if (version_compare(PHP_VERSION, '5.6.0', '<')) {
                // On earlier PHP versions, the certificate validation fails. We deactivate it on them to restore the functionality we had with HTTP/Request1
                $options['ssl_verify_peer'] = false;
            }
            $req = new HTTP_Request2($search, HTTP_Request2::METHOD_GET, $options);
            try {
                $response = $req->send();
                $this->last_error = $response->getStatus();
                if ($response->getStatus() != 200) {
                    throw new HTTP_Request2_Exception("Could not search on identica");
                }
                $response = trim($response->getBody());
            } catch (HTTP_Request2_Exception $e) {
                $this->last_error = $response->getStatus();
                serendipity_request_end();
                $this->log("Identica Error: {$this->last_error}");
                return false;
            }
            serendipity_request_end();
            $parser = xml_parser_create();
            $vals=array(); $index=array();
            $success = xml_parse_into_struct($parser, $response, $vals, $index);
            xml_parser_free($parser);
            if ($success) {
                $img_url = $vals[$index['PROFILE_IMAGE_URL'][0]]['value'];
                $success = $this->saveAndResponseAvatar($eventData, $img_url);
            }
            $this->avatarConfiguration['identica_found'] = $success;
            return $success;
        }

        return false;

    }

    /**
     * Shows a monster id avatar.
     *
     * @param array eventdata the data given by the event
     *
     * @return boolean true, if Avatar was found and added to the comment buffer
     */
    function fetchMonster(&$eventData)
    {
        require_once dirname(__FILE__) . '/monsterid/monsterid.php';

        $seed = md5($eventData['author']) . $eventData['email_md5'] . md5($eventData['url']);
        $default = $this->getDefaultImageConfiguration();
        $size = $default['size'];

        // Save monster image
        @mkdir($this->getCacheDirectory());
        $cache_file = $this->getCacheFilePath($eventData);
        $this->log("Caching monster avatar: " . $cache_file);
        if (build_monster($cache_file, $seed, $size)) {
            $this->log("Success caching monster.");
            $this->avatarConfiguration['mime-type'] = "image/png";
            $this->show($cache_file);
        }
        else if ($this->supportDefaultAvatar()){
            $this->fetchDefault();
        }

        return true;
    }

    /**
     * Shows a monster id avatar.
     *
     * @param array eventdata the data given by the event
     *
     * @return boolean true, if Avatar was found and added to the comment buffer
     */
    function fetchWavatar(&$eventData)
    {
        require_once dirname(__FILE__) . '/wavatars/wavatars.php';

        $seed = md5($eventData['author']) . $eventData['email_md5'] . md5($eventData['url']);
        $default = $this->getDefaultImageConfiguration();
        $size = $default['size'];

        // Save monster image
        @mkdir($this->getCacheDirectory());
        $cache_file = $this->getCacheFilePath($eventData);
        $this->log("Caching wavatar avatar: " . $cache_file);
        if (wavatar_build($cache_file, $seed, $size)) {
            $this->log("Success caching wavatar.");
            $this->avatarConfiguration['mime-type'] = "image/png";
            $this->show($cache_file);
        }
        else if ($this->supportDefaultAvatar()){
            $this->fetchDefault();
        }

        return true;
    }

    /**
     * Shows an identicon/ycon avatar (generated locally).
     * http://www.docuverse.com/blog/donpark/2007/01/18/visual-security-9-block-ip-identification
     * http://www.evilissexy.com/
     *
     * @param array eventdata the data given by the event
     *
     * @return boolean true, if Avatar was found and added to the comment buffer
     */
    function fetchYcon(&$eventData)
    {
        require_once dirname(__FILE__) . '/ycon/ycon.image.php';

        $seed = md5($eventData['author']) . $eventData['email_md5'] . md5($eventData['url']);
        $default = $this->getDefaultImageConfiguration();
        $size = $default['size'];

        // Save monster image
        @mkdir($this->getCacheDirectory());
        $cache_file = $this->getCacheFilePath($eventData);
        $this->log("Caching Identicon/Ycon avatar: " . $cache_file);
        if (build_ycon($cache_file,$seed,$size)) {
            $this->log("Success caching ycon.");
            $this->avatarConfiguration['mime-type'] = "image/png";
            $this->show($cache_file);
        }
        else if ($this->supportDefaultAvatar()){
            $this->fetchDefault();
        }

        return true;
    }

    /**
     * Shows the local default avatar.
     *
     * @param array eventdata the data given by the event
     *
     * @return boolean true, if Avatar was found and added to the comment buffer
     */
    function fetchDefault()
    {
        global $serendipity;

        $default = $this->getDefaultImageConfiguration();
        if (empty($default['defaultavatar'])) {
            return false;
        }

        $this->log("FetchDefault");
        // Set fetch date. Show will use this for caclculating cache.
        $this->avatarConfiguration['fetch_date'] = time();
        // Show default avatar
        $defaultUrl = $default['defaultavatar'];
        $this->log("DefaultUrl CFG: " . $defaultUrl);
        $defaultUrl = preg_replace('@^http[s]*?://[^/]*?/@si','',$defaultUrl); // Remove protocol and server part, if entered.
        $this->log("DefaultUrl RPL: " . $defaultUrl);
        $this->log("FetchDefault: DOC_ROOT" . $_SERVER["DOCUMENT_ROOT"]);
        $this->show($_SERVER["DOCUMENT_ROOT"] . '/' . $defaultUrl);

        return true;
    }

    /**
     * Caches an avatar and streams it back to the browser.
     */
    function saveAndResponseAvatar($eventData, $url, $allow_redirection = 3)
    {
        require_once S9Y_PEAR_PATH . 'HTTP/Request2.php';
        global $serendipity;
        $fContent   = null;

        if (function_exists('serendipity_request_start')) {
            serendipity_request_start();
        }

        if ($allow_redirection) {
            $request_pars['follow_redirects'] = true;
            $request_pars['max_redirects'] = $allow_redirection;
        }
        else {
            $request_pars['follow_redirects'] = false;
        }

        if (version_compare(PHP_VERSION, '5.6.0', '<')) {
            // On earlier PHP versions, the certificate validation fails. We deactivate it on them to restore the functionality we had with HTTP/Request1
            $request_pars['ssl_verify_peer'] = false;
        }

        $req = new HTTP_Request2($url, HTTP_Request2::METHOD_GET, $request_pars);
        try {
            $response = $req->send();
            if ($response->getStatus() != '200') {
                throw new HTTP_Request2_Exception("Could not search on identica");
            }
            // Allow only images as Avatar!
            $mime = $response->getHeader("content-type");
            $this->avatarConfiguration['mime-type'] = $mime;
            $this->log("Avatar fetch mimetype: $mime"  . " for url=" . $url);
            $mimeparts = explode('/',$mime);
            if (count($mimeparts)==2 && $mimeparts[0]=='image') {
                $fContent = $response->getBody();
            }
        } catch (HTTP_Request2_Exception $e) {
            $fContent = null;
            $this->log("Avatar fetch error: " . $e);
            
        }        

        if (function_exists('serendipity_request_start')) {
            serendipity_request_end();
        }

        // if no content was fetched, return false
        if (!isset($fContent) || empty($fContent)){
            $this->log("Avatar fetch: no Content!");
            return false;
        }

        $cache_file = $this->cacheAvatar($eventData, $fContent);
        if ($cache_file) {
            $this->show($cache_file);
        }
        else if ($this->supportDefaultAvatar()){
            $this->fetchDefault();
        }

        return true;
    }

    /**
     * Caches an avatar file.
     *
     * @param string cache_file name of file used for caching
     * @param string fContent content to be cached
     */
    function cacheAvatar($eventData, $fContent)
    {

        $cache_file = $this->getCacheFilePath($eventData);
        $this->log("cacheAvatar: " . $cache_file);

        // Save image
        @mkdir($this->getCacheDirectory());
        $fp = @fopen($cache_file, 'wb');
        if (!$fp) {
            $this->log("! Error writing cache file $cache_file");
            if (file_exists($cache_file)) {
                return $cache_file;
            }
            else {
                return false;
            }
        }
        fwrite($fp, $fContent);
        fclose($fp);

        return $cache_file;
    }

    /**
     * Return binary response for an image
     */
    function show($filename)
    {
        $this->log("show: $filename");
        if (!file_exists($filename)) {
            header('X-Avatar: No-Image');
            return false;
        } else {
            header('X-Avatar: Found');
        }
        $mime_type = null;
        if (isset($this->avatarConfiguration['mime-type'])) {
            $mime_type = $this->avatarConfiguration['mime-type'];
        }
        if (!isset($mime_type)) {
            $size = @getimagesize($filename);
            $mime_type = $size['mime'];
            $this->avatarConfiguration['mime-type'] = $mime_type;
        }

        // test wether this really is (at least declared as) an image!
        // else deny it.
        $mime_parts  = explode('/', $mime_type);
        if (count($mime_parts)!=2 || $mime_parts[0]!='image') {
            return false;
        }

        $fp   = @fopen($filename, "rb");
        if ($fp) {
            if (isset($this->avatarConfiguration['fetch_date'])) {
                $filemtime = $this->avatarConfiguration['fetch_date'];
                $this->log("Fetch date found: " . date("D, d M Y H:i:s T", $filemtime));
            } else {
                $filemtime = filemtime($filename);
            }
            header("Content-type: $mime_type");
            header("Content-Length: ". filesize($filename));
            header("Date: " . date("D, d M Y H:i:s T"));
            header("Last-Modified: " . date("D, d M Y H:i:s T", $filemtime), true);
            if ($this->cache_seconds>0) {
                $expires = $filemtime + $this->cache_seconds;
                $expires_txt = date("D, d M Y H:i:s T",$expires);
                header("Expires: $expires_txt". true);
                // HTTP 1.1
                $max_age_seconds = $filemtime + $this->cache_seconds - time();
                header("Cache-Control: public, max-age=" . $max_age_seconds, true); // delta seconds
                header("Pragma:", true);
            }
            fpassthru($fp);
            fclose($fp);
        }
        return true;
    }

    /**
     * Generates an Avatar image from given parameters
     *
     * @param array default The default configuration evaluated
     * @param string title the title for that image
     * @return string the html code representing the Avatar
     */
    function generateImageHtml($url, $title = null, $align = 'right', $addAlignClass = true, $cssClass = "comment_avatar")
    {
        $default = $this->getDefaultImageConfiguration();

        if (empty($title)){
            $title = 'Avatar';
        }
        if (PLUGIN_EVENT_GRAVATAR_DEBUG) $title .= ' (Avatar Plugin V.' . PLUGIN_EVENT_GRAVATAR_VERSION . ' DEBUG)';

        // set alignment by configuration
        $cssAlign = '';
        if ($addAlignClass && ($align == 'right' || $align == 'left'))
            $cssAlign = "avatar_$align";
        $alt = '*';
        if (serendipity_db_bool($this->get_config('autoralt', 'false'))) {
            $alt = $title;
        }
        return '<img src="' . $url . '" alt="' . $alt . '" title="' . $title . '" class="' . $cssClass . ($addAlignClass? " $cssAlign":"") . '" height="' . $default['size'] . '" width="' . $default['size'] . '"/>';
    }

    /**
     * Just generates comments into the comment block. Used for debugging only!
     */
    function generateComment(&$eventData, $comment)
    {
        $eventData['comment'] = "-- $comment --<br>\n" . $eventData['comment'];
    }

    /**
     * Returns the avatar cache directory
     */
    function getCacheDirectory()
    {
        global $serendipity;
        if ($this->cache_dir === null) {
            $this->cache_dir = $serendipity['serendipityPath'] . PATH_SMARTY_COMPILE . '/serendipity_event_avatar';
        }
        return $this->cache_dir;
    }

    /**
     * Returns the Path of the avatar cache file by the given user data found in eventData
     * If no relevant user data was found, null is returned.
     *
     */
    function getCacheFilePath($eventData)
    {
        global $serendipity;

        $cache_filename = $this->getCacheFileName($eventData);
        if (!isset($cache_filename)) {
            return null;
        }
        return $this->getCacheDirectory() .'/' .  $cache_filename;;
    }

    /**
     * Returns the URL of the cached avatar by the given user data found in eventData
     * If no relevant user data was found, null is returned.
     *
     */
    function getCacheFileUrl($eventData)
    {
        global $serendipity;

        $cache_filename = $this->getCacheFileName($eventData);
        if (!isset($cache_filename)) {
            return null;
        }
        return $serendipity['baseURL'] . '/' . PATH_SMARTY_COMPILE . '/serendipity_event_gravatar/' . $cache_filename;
    }

    /**
     * Returns a URL encoded and signed variable.
     */
    function urlencode($url)
    {
        $hash = md5($this->instance_id . $url);
        return $hash . str_replace ('_', '%5F', urlencode($url));
    }

    function urldecode($url)
    {
        $hash     = substr($url, 0, 32);
        $real_url = urldecode(substr($url, 32));

        if ($hash == md5($this->instance_id . $real_url)) {
            // Valid hash was found.
            return $real_url;
        } else {
            // Invalid hash.
            return '';
        }
    }

    /**
     * Returns only the name of the cached avatar by the given user data found in eventData
     * If no relevant user data was found, null is returned.
     *
     */
    function getCacheFileName($eventData)
    {
        global $serendipity;

        if (!isset($eventData['email']) && !isset($eventData['email_md5']) && !isset($eventData['url'])) {
            return null;
        }
        $email_md5 = '';
        if (isset($eventData['email_md5'])) {
            $email_md5 = $eventData['email_md5'];
        }
        else if (isset($eventData['email'])) {
            $email_md5 = md5(strtolower($eventData['email']));
        }

        $author_md5= isset($eventData['author'])? md5($eventData['author']) : '';
        $url_md5 = isset($eventData['url'])? md5($eventData['url']) : '' ;

        return $url_md5 . '_' . $email_md5 . '_' . $author_md5;
    }

    /**
     * Builds an array of default image configuration
     */
    function getDefaultImageConfiguration()
    {
        global $serendipity;

        if ($this->defaultImageConfigurationdefault === null) {
            $this->defaultImageConfigurationdefault = array(
                'defaultavatar' => ($this->get_config('defaultavatar')==''?'': $this->get_config('defaultavatar', '')),
                'size'          => $this->get_config('size', '40'),
                'rating'        => $this->get_config('rating', '-')
            );
        }
        return $this->defaultImageConfigurationdefault;
    }

    function getPermaPluginPath()
    {
        global $serendipity;

        // Get configured plugin path:
        $pluginPath = 'plugin';
        if (isset($serendipity['permalinkPluginPath'])){
            $pluginPath = $serendipity['permalinkPluginPath'];
        }

        return $pluginPath;

    }

    function log($message)
    {
        if (!PLUGIN_EVENT_GRAVATAR_DEBUG) return;
        $fp = fopen($this->getCacheDirectory() . '.log','a');
        fwrite($fp, $message . "\n");
        fclose($fp);
    }

}

/* vim: set sts=4 ts=4 expandtab : */
?>