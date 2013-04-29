<?php # $Id$

@serendipity_plugin_api::load_language(dirname(__FILE__));

/* BC - TODO: Remove for 0.8 final */
if (!function_exists('serendipity_serverOffsetHour')) {
    function serendipity_serverOffsetHour() {
        return time();
    }
}

class serendipity_event_spamblock extends serendipity_event
{
var $filter_defaults;

    function introspect(&$propbag)
    {
        global $serendipity;

        $this->title = PLUGIN_EVENT_SPAMBLOCK_TITLE;

        $propbag->add('name',          PLUGIN_EVENT_SPAMBLOCK_TITLE);
        $propbag->add('description',   PLUGIN_EVENT_SPAMBLOCK_DESC);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Garvin Hicking, Sebastian Nohn, Grischa Brockhaus, Ian');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('version',       '1.80');
        $propbag->add('event_hooks',    array(
            'frontend_saveComment' => true,
            'external_plugin'      => true,
            'frontend_comment'     => true,
            'fetchcomments'        => true,
            'backend_comments_top' => true,
            'backend_view_comment' => true
        ));
        $propbag->add('configuration', array(
            'killswitch',
            'hide_for_authors',
            'bodyclone',
            'entrytitle',
            'ipflood',
            'csrf',
            'captchas',
            'captchas_ttl',
            'captcha_color',
            'forcemoderation',
            'forcemoderation_treat',
            'trackback_ipvalidation' ,
            'trackback_ipvalidation_url_exclude' ,
            'forcemoderationt',
            'forcemoderationt_treat',
            'disable_api_comments',
            'trackback_check_url',
            'links_moderate',
            'links_reject',
            'contentfilter_activate',
            'contentfilter_urls',
            'contentfilter_authors',
            'contentfilter_words',
            'contentfilter_emails',
            'bloggdeblacklist',
            'akismet',
            'akismet_server',
            'akismet_filter',
            'hide_email',
            'checkmail',
            'required_fields',
            'automagic_htaccess',
            'logtype',
            'logfile'));
        $propbag->add('groups', array('ANTISPAM'));
        $propbag->add('config_groups', array(
                'Content Filter' => array(
                    'contentfilter_activate',
                    'contentfilter_urls',
                    'contentfilter_authors',
                    'contentfilter_words',
                    'contentfilter_emails',
                    'bloggdeblacklist',
                    'akismet',
                    'akismet_server',
                    'akismet_filter',
                ),
                'Trackbacks' => array(
                    'trackback_ipvalidation' ,
                    'trackback_ipvalidation_url_exclude' ,
                    'forcemoderationt',
                    'forcemoderationt_treat',
                    'disable_api_comments',
                    'trackback_check_url',
                )
        ));

        $this->filter_defaults = array(
                                'authors' => 'casino;phentermine;credit;loans;poker',
                                'emails'  => '',
                                'urls'    => '8gold\.com;911easymoney\.com;canadianlabels\.net;condodream\.com;crepesuzette\.com;debt-help-bill-consolidation-elimination\.com;fidelityfunding\.net;flafeber\.com;gb\.com;houseofsevengables\.com;instant-quick-money-cash-advance-personal-loans-until-pay-day\.com;mediavisor\.com;newtruths\.com;oiline\.com;onlinegamingassociation\.com;online\-+poker\.com;popwow\.com;royalmailhotel\.com;spoodles\.com;sportsparent\.com;stmaryonline\.org;thatwhichis\.com;tmsathai\.org;uaeecommerce\.com;learnhowtoplay\.com',
                                'words'   => 'very good site!;Real good stuff!'
        );
    }

    function introspect_config_item($name, &$propbag)
    {
        global $serendipity;

        switch($name) {
            case 'disable_api_comments':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC);
                $propbag->add('default', 'none');
                $propbag->add('radio', array(
                    'value' => array('moderate', 'reject', 'none'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_API_MODERATE, PLUGIN_EVENT_SPAMBLOCK_API_REJECT, NONE)
                ));
                $propbag->add('radio_per_row', '1');

                break;

            case 'trackback_ipvalidation':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_DESC);
                $propbag->add('default', 'moderate');
                $propbag->add('radio', array(
                    'value' => array('no', 'moderate', 'reject'),
                    'desc'  => array(NO, PLUGIN_EVENT_SPAMBLOCK_API_MODERATE, PLUGIN_EVENT_SPAMBLOCK_API_REJECT)
                ));
                $propbag->add('radio_per_row', '1');
                break;

            case 'trackback_ipvalidation_url_exclude':
                $propbag->add('type', 'text');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_TRACKBACKIPVALIDATION_URL_EXCLUDE_DESC);
                $propbag->add('rows', 2);
                $propbag->add('default', $this->get_default_exclude_urls());
                break;

            case 'trackback_check_url':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC);
                $propbag->add('default', false);
                break;

            case 'automagic_htaccess':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_HTACCESS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_HTACCESS_DESC);
                $propbag->add('default', false);
                break;

            case 'hide_email':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC);
                $propbag->add('default', true);
                break;

            case 'csrf':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_CSRF);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_CSRF_DESC);
                $propbag->add('default', true);
                break;

            case 'entrytitle':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE);
                $propbag->add('description', '');
                $propbag->add('default', false);
                break;

            case 'checkmail':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_DESC);
                $propbag->add('default', 'false');
                $propbag->add('radio', array(
                    'value' => array('false', 'true', 'verify_once', 'verify_always'),
                    'desc'  => array(NO, YES, PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ONCE, PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_ALWAYS)
                ));
                $propbag->add('radio_per_row', '1');
                break;

            case 'required_fields':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC);
                $propbag->add('default', '');
                break;

            case 'bodyclone':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_BODYCLONE);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC);
                $propbag->add('default', true);
                break;

            case 'captchas':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC);
                $propbag->add('default', 'yes');
                $propbag->add('radio', array(
                    'value' => array(true, 'no', 'scramble'),
                    'desc'  => array(YES, NO, PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE)
                ));
                break;

            case 'hide_for_authors':
                $_groups =& serendipity_getAllGroups();
                $groups = array(
                    'all'  => ALL_AUTHORS,
                    'none' => NONE
                );

                foreach($_groups AS $group) {
                    $groups[$group['confkey']] = $group['confvalue'];
                }

                $propbag->add('type', 'multiselect');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_HIDE);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC);
                $propbag->add('select_values', $groups);
                $propbag->add('select_size',   5);
                $propbag->add('default', 'all');
                break;

            case 'killswitch':
                $propbag->add('type', 'boolean');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC);
                $propbag->add('default', false);
                break;

            case 'contentfilter_activate':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC);
                $propbag->add('default', 'moderate');
                $propbag->add('radio', array(
                    'value' => array('moderate', 'reject', 'none'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_API_MODERATE, PLUGIN_EVENT_SPAMBLOCK_API_REJECT, NONE)
                ));
                $propbag->add('radio_per_row', '1');

                break;

            case 'bloggdeblacklist':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_BLOGG_SPAMLIST);
                $propbag->add('description', '');
                $propbag->add('default', 'none');
                $propbag->add('radio', array(
                    'value' => array('moderate', 'reject', 'none'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_API_MODERATE, PLUGIN_EVENT_SPAMBLOCK_API_REJECT, NONE)
                ));
                $propbag->add('radio_per_row', '1');

                break;

            case 'akismet':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_AKISMET);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_AKISMET_DESC);
                $propbag->add('default', '');

                break;

            case 'akismet_server':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_AKISMET_SERVER_DESC);
                // If the user has an API key, but hasn't set a server, he 
                // must be using an older version of the plugin; default
                // to akismet.  Otherwise, encourage adoption of the Open
                // Source alternative, TypePad Antispam.
                $curr_key = $this->get_config('akismet', false);
                $propbag->add('default', (empty($curr_key) ? 'akismet' : 'tpas'));
                $propbag->add('radio', array(
                    'value' => array('tpas', 'akismet', 'anon-tpas', 'anon-akismet'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS, PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET,
                                     PLUGIN_EVENT_SPAMBLOCK_SERVER_TPAS_ANON, PLUGIN_EVENT_SPAMBLOCK_SERVER_AKISMET_ANON
                    )
                ));
                $propbag->add('radio_per_row', '1');

                break;

            case 'akismet_filter':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_AKISMET_FILTER);
                $propbag->add('description', '');
                $propbag->add('default', 'reject');
                $propbag->add('radio', array(
                    'value' => array('moderate', 'reject', 'none'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_API_MODERATE, PLUGIN_EVENT_SPAMBLOCK_API_REJECT, NONE)
                ));
                $propbag->add('radio_per_row', '1');

                break;

            case 'contentfilter_urls':
                $propbag->add('type', 'text');
                $propbag->add('rows', 3);
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC);
                $propbag->add('default', $this->filter_defaults['urls']);
                break;

            case 'contentfilter_authors':
                $propbag->add('type', 'text');
                $propbag->add('rows', 3);
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC);
                $propbag->add('default', $this->filter_defaults['authors']);
                break;

            case 'contentfilter_words':
                $propbag->add('type', 'text');
                $propbag->add('rows', 3);
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC);
                $propbag->add('default', $this->filter_defaults['words']);
                break;

            case 'contentfilter_emails':
                $propbag->add('type', 'text');
                $propbag->add('rows', 3);
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC);
                $propbag->add('default', $this->filter_defaults['emails']);
                break;

            case 'logfile':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_LOGFILE);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC);
                $propbag->add('default', $serendipity['serendipityPath'] . 'spamblock-%Y-%m-%d.log');
                break;

            case 'logtype':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_LOGTYPE);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC);
                $propbag->add('default', 'none');
                $propbag->add('radio',         array(
                    'value' => array('file', 'db', 'none'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE, PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB, PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE)
                ));
                $propbag->add('radio_per_row', '1');

                break;

            case 'ipflood':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_IPFLOOD);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC);
                $propbag->add('default', 0);
                break;

            case 'captchas_ttl':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC);
                $propbag->add('default', '7');
                break;

            case 'captcha_color':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC);
                $propbag->add('default', '255,255,255');
                $propbag->add('validate', '@^[0-9]{1,3},[0-9]{1,3},[0-9]{1,3}$@');
                break;

            case 'forcemoderation':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC);
                $propbag->add('default', '30');
                break;

            case 'forcemoderation_treat':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_TREAT);
                $propbag->add('description', '');
                $propbag->add('default', 'moderate');
                $propbag->add('radio', array(
                    'value' => array('moderate', 'reject'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_API_MODERATE, PLUGIN_EVENT_SPAMBLOCK_API_REJECT)
                ));
                $propbag->add('radio_per_row', '1');
                break;

            case 'forcemoderationt':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_DESC);
                $propbag->add('default', '30');
                break;

            case 'forcemoderationt_treat':
                $propbag->add('type', 'radio');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATIONT_TREAT);
                $propbag->add('description', '');
                $propbag->add('default', 'moderate');
                $propbag->add('radio', array(
                    'value' => array('moderate', 'reject'),
                    'desc'  => array(PLUGIN_EVENT_SPAMBLOCK_API_MODERATE, PLUGIN_EVENT_SPAMBLOCK_API_REJECT)
                ));
                $propbag->add('radio_per_row', '1');
                break;

            case 'links_moderate':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC);
                $propbag->add('default', '7');
                break;

            case 'links_reject':
                $propbag->add('type', 'string');
                $propbag->add('name', PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT);
                $propbag->add('description', PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC);
                $propbag->add('default', '13');
                break;

            default:
                    return false;
        }

        return true;
    }

    function get_default_exclude_urls() {
        return '^http://identi\.ca/notice/\d+$';
    }

    function htaccess_update($new_ip) {
        global $serendipity;

        serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}spamblock_htaccess (ip, timestamp) VALUES ('" . serendipity_db_escape_string($new_ip) . "', '" . time() . "')");

        // Temporarily hardcoded fix by DLang to prevent .htaccess growing too large.
        $q = "SELECT ip FROM {$serendipity['dbPrefix']}spamblock_htaccess WHERE timestamp > " . (time() - 86400*2) . " GROUP BY ip ORDER BY timestamp DESC LIMIT 177";
        $rows = serendipity_db_query($q, false, 'assoc');

        $deny = array();
        foreach($rows AS $row) {
            $deny[] = $row['ip'];
        }

        $hta = $serendipity['serendipityPath'] . '.htaccess';
        if (count($deny) > 0 && file_exists($hta) && is_writable($hta)) {
            $htaccess = file_get_contents($hta);
            $fp = @fopen($hta, 'w');
            if (!$fp) {
                return false;
            } else {
                // Check if an old htaccess file existed and try to preserve its contents. Otherwise completely wipe the file.
                if ($htaccess != '' && preg_match('@^(.*)#SPAMDENY.*Deny From.+#/SPAMDENY(.*)$@imsU', $htaccess, $match)) {
                    // Code outside from s9y-code was found.
                    $content = trim($match[1]) . "\n#SPAMDENY\nDeny From " . implode(' ', $deny) . "\n#/SPAMDENY\n" . trim($match[2]);
                } else {
                    $content = trim($htaccess) . "\n#SPAMDENY\nDeny From " . implode(' ', $deny) . "\n#/SPAMDENY\n";
                }
                fwrite($fp, $content);
                fclose($fp);
                return true;
            }
        }
    }

    function akismetRequest($api_key, $data, &$ret, $action = 'comment-check') {
        $opt = array(
            'method'            => 'POST',
            'http'              => '1.1',
            'timeout'           => 20,
            'allowRedirects'    => true,
            'maxRedirects'      => 3,
            'readTimeout'       => array(5,0), 
        );

        // Default server type to akismet, in case user has an older version of the plugin
        // where no server was set
        $server_type = $this->get_config('akismet_server', 'akismet');
        $server = '';
        $anon = false;

        switch ($server_type) {
            case 'anon-tpas':
                $anon = true;
            case 'tpas':
                $server = 'api.antispam.typepad.com';
                break;
    
            case 'anon-akismet':
                $anon = true;
            case 'akismet':
                $server = 'rest.akismet.com';
                break;
        }

        if ($anon) {
            $data['comment_author'] = 'John Doe';
            $data['comment_author_email'] = '';
            $data['comment_author_url'] = '';
        }

        if (empty($server)) {
            $this->log($this->logfile, $eventData['id'], 'AKISMET_SERVER', 'No Akismet server found', $addData);
            $ret['is_spam'] = false;
            $ret['message'] = 'No server for Akismet request';
            return;
        } else {
            // DEBUG
            //$this->log($this->logfile, $eventData['id'], 'AKISMET_SERVER', 'Using Akismet server at ' . $server, $addData);
        }
        $req    = new HTTP_Request(
             'http://' . $server . '/1.1/verify-key',
             $opt
        );

        $req->addPostData('key',  $api_key);
        $req->addPostData('blog', $serendipity['baseURL']);

        if (PEAR::isError($req->sendRequest()) || $req->getResponseCode() != '200') {
            $ret['is_spam'] = false;
            $ret['message'] = 'API Verification Request failed';
            $this->log($this->logfile, $eventData['id'], 'API_ERROR', 'Akismet HTTP verification request failed.', $addData);
            return;
        } else {
            // Fetch response
            $reqdata = $req->getResponseBody();
        }

        if (!preg_match('@valid@i', $reqdata)) {
            $ret['is_spam'] = false;
            $ret['message'] = 'API Verification failed';
            $this->log($this->logfile, $eventData['id'], 'API_ERROR', 'Akismet API verification failed: ' . $reqdata, $addData);
            return;
        }

        $req    = new HTTP_Request(
            'http://' . $api_key . '.' . $server . '/1.1/' . $action,
            $opt
        );

        foreach($data AS $key => $value) {
            $req->addPostData($key, $value);
        }

        if (PEAR::isError($req->sendRequest()) || $req->getResponseCode() != '200') {
            $ret['is_spam'] = false;
            $ret['message'] = 'Akismet Request failed';
            $this->log($this->logfile, $eventData['id'], 'API_ERROR', 'Akismet HTTP request failed.', $addData);
            return;
        } else {
            // Fetch response
            $reqdata = $req->getResponseBody();
        }

        if ($action == 'comment-check' && preg_match('@true@i', $reqdata)) {
            $ret['is_spam'] = true;
            $ret['message'] = $reqdata;
            // DEBUG
            //$this->log($this->logfile, $eventData['id'], 'AKISMET_SPAM', 'Akismet API returned spam', $addData);
        } elseif ($action == 'comment-check' && preg_match('@false@i', $reqdata)) {
            $ret['is_spam'] = false;
            $ret['message'] = $reqdata;
            // DEBUG
            //$this->log($this->logfile, $eventData['id'], 'AKISMET_PASS', 'Passed Akismet verification', $addData);
        } elseif ($action != 'comment-check' && preg_match('@received@i', $reqdata)) {
            $ret['is_spam'] = ($action == 'submit-spam');
            $ret['message'] = $reqdata;
            $this->log($this->logfile, $eventData['id'], 'API_ERROR', 'Akismet API failure: ' . $reqdata, $addData);
        } else {
            $ret['is_spam'] = false;
            $ret['message'] = 'Akismet API failure';
            $this->log($this->logfile, $eventData['id'], 'API_ERROR', 'Akismet API failure: ' . $reqdata, $addData);
        }
    }


    function tellAboutComment($where, $api_key = '', $comment_id, $is_spam) {
        global $serendipity;
        $comment = serendipity_db_query(" SELECT C.*, L.useragent as log_useragent, E.title as entry_title "
                                      . " FROM {$serendipity['dbPrefix']}comments C, {$serendipity['dbPrefix']}spamblocklog L , {$serendipity['dbPrefix']}entries E "
                                      . " WHERE C.id = '" . (int)$comment_id . "' AND C.entry_id=L.entry_id AND C.entry_id=E.id "
                                      . " AND C.author=L.author AND C.url=L.url AND C.referer=L.referer "
                                      . " AND C.ip=L.ip AND C.body=L.body", true, 'assoc');
        if (!is_array($comment)) return;

        require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
        if (function_exists('serendipity_request_start')) serendipity_request_start();

        switch($where) {
            case 'akismet.com':
                // DEBUG
                //$this->log($this->logfile, $eventData['id'], 'AKISMET_SAFETY', 'Akismet verification takes place', $addData);
                $ret  = array();
                $data = array(
                  'blog'                    => $serendipity['baseURL'],
                  'user_agent'              => $comment['log_useragent'],
                  'referrer'                => $comment['referer'],
                  'user_ip'                 => $comment['ip'],
                  'permalink'               => serendipity_archiveURL($comment['entry_id'], $comment['entry_title'], 'serendipityHTTPPath', true, array('timestamp' => $comment['timestamp'])),
                  'comment_type'            => ($comment['type'] == 'NORMAL' ? 'comment' : strtolower($comment['type'])), // second: pingback or trackback.
                  'comment_author'          => $comment['author'],
                  'comment_author_email'    => $comment['email'],
                  'comment_author_url'      => $comment['url'],
                  'comment_content'         => $comment['body']
                );

                $this->akismetRequest($api_key, $data, $ret, ($is_spam ? 'submit-spam' : 'submit-ham'));

                break;
        }

        if (function_exists('serendipity_request_end')) serendipity_request_end();
    }

    function &getBlacklist($where, $api_key = '', &$eventData, &$addData) {
        global $serendipity;

        $ret = false;
        require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
        if (function_exists('serendipity_request_start')) serendipity_request_start();

        switch($where) {
            case 'akismet.com':
                // DEBUG
                //$this->log($this->logfile, $eventData['id'], 'AKISMET_SAFETY', 'Akismet verification takes place', $addData);
                $ret  = array();
                $data = array(
                    'blog'                    => $serendipity['baseURL'],
                    'user_agent'              => $_SERVER['HTTP_USER_AGENT'],
                    'referrer'                => $_SERVER['HTTP_REFERER'],
                    'user_ip'                 => $_SERVER['REMOTE_ADDR'] != getenv('SERVER_ADDR') ? $_SERVER['REMOTE_ADDR'] : getenv('HTTP_X_FORWARDED_FOR'),
                    'permalink'               => serendipity_archiveURL($eventData['id'], $eventData['title'], 'serendipityHTTPPath', true, array('timestamp' => $eventData['timestamp'])),
                    'comment_type'            => ($addData['type'] == 'NORMAL' ? 'comment' : strtolower($addData['type'])), // second: pingback or trackback.
                    'comment_author'          => $addData['name'],
                    'comment_author_email'    => $addData['email'],
                    'comment_author_url'      => $addData['url'],
                    'comment_content'         => $addData['comment']
                );

                $this->akismetRequest($api_key, $data, $ret);
                break;

            case 'blogg.de':
                $target  = $serendipity['serendipityPath'] . PATH_SMARTY_COMPILE . '/blogg.de.blacklist.txt';
                $timeout = 3600; // One hour

                if (file_exists($target) && filemtime($target) > time()-$timeout) {
                    $data = file_get_contents($target);
                } else {
                    $data = '';

                    $req    = new HTTP_Request('http://spam.blogg.de/blacklist.txt');

                    if (PEAR::isError($req->sendRequest()) || $req->getResponseCode() != '200') {
                        if (file_exists($target) && filesize($target) > 0) {
                            $data = file_get_contents($target);
                        }
                    } else {
                        // Fetch file
                        $data = $req->getResponseBody();
                        $fp = @fopen($target, 'w');

                        if ($fp) {
                            fwrite($fp, $data);
                            fclose($fp);
                        }
                    }
                }

                $blacklist = explode("\n", $data);
                $ret =& $blacklist;

            default:
                break;
        }

        if (function_exists('serendipity_request_end')) serendipity_request_end();
        return $ret;
    }

    function checkScheme() {
        global $serendipity;

        $dbversion = $this->get_config('dbversion', '1');
        
        if ($dbversion == '1') {
            $q   = "CREATE TABLE {$serendipity['dbPrefix']}spamblocklog (
                        timestamp int(10) {UNSIGNED} default null,
                        type varchar(255),
                        reason text,
                        entry_id int(10) {UNSIGNED} not null default '0',
                        author varchar(80),
                        email varchar(200),
                        url varchar(200),
                        useragent varchar(255),
                        ip varchar(15),
                        referer varchar(255),
                        body text)";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE INDEX kspamidx ON {$serendipity['dbPrefix']}spamblocklog (timestamp);";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE INDEX kspamtypeidx ON {$serendipity['dbPrefix']}spamblocklog (type);";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE INDEX kspamentryidx ON {$serendipity['dbPrefix']}spamblocklog (entry_id);";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE TABLE {$serendipity['dbPrefix']}spamblock_htaccess (
                        timestamp int(10) {UNSIGNED} default null,
                        ip varchar(15))";
            $sql = serendipity_db_schema_import($q);

            $q   = "CREATE INDEX kshtaidx ON {$serendipity['dbPrefix']}spamblock_htaccess (timestamp);";
            $sql = serendipity_db_schema_import($q);

            $this->set_config('dbversion', '2');
        }

        return true;
    }

    function generate_content(&$title) {
        $title = $this->title;
    }

    // This method will be called on "fatal" spam errors that are unlikely to occur accidentally by users.
    // Their IPs will be constantly blocked.
    function IsHardcoreSpammer() {
        global $serendipity;

        if (serendipity_db_bool($this->get_config('automagic_htaccess'))) {
            $this->htaccess_update($_SERVER['REMOTE_ADDR']);
        }
    }

    // Checks whether the current author is contained in one of the gorups that need no spam checking
    function inGroup() {
        global $serendipity;

        $checkgroups = explode('^', $this->get_config('hide_for_authors'));

        if (!isset($serendipity['authorid']) || !is_array($checkgroups)) {
            return false;
        }

        $mygroups =& serendipity_getGroups($serendipity['authorid'], true);
        if (!is_array($mygroups)) {
            return false;
        }

        foreach($checkgroups AS $key => $groupid) {
            if ($groupid == 'all') {
                return true;
            } elseif (in_array($groupid, $mygroups)) {
                return true;
            }
        }

        return false;
    }

    function example() {
        echo '<div id="captchabox" style="margin: 10px; padding: 5px; border: 1px solid black">' . PLUGIN_EVENT_SPAMBLOCK_LOOK . '<br />';
        $this->show_captcha();
        echo '</div>';
    }

    function show_captcha($use_gd = false) {
        global $serendipity;

        if ($use_gd || (function_exists('imagettftext') && function_exists('imagejpeg'))) {
            $max_char = 5;
            $min_char = 3;
            $use_gd   = true;
        } else {
            $max_char = $min_char = 5;
            $use_gd   = false;
        }

        if ($use_gd) {
            printf('<img src="%s" onclick="this.src=this.src + \'1\'" title="%s" alt="CAPTCHA" class="captcha" />',
                $serendipity['baseURL'] . ($serendipity['rewrite'] == 'none' ? $serendipity['indexFile'] . '?/' : '') . 'plugin/captcha_' . md5(time()),
                htmlspecialchars(PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2)
            );
        } else {
            $bgcolors = explode(',', $this->get_config('captcha_color', '255,0,255'));
            $hexval   = '#' . dechex(trim($bgcolors[0])) . dechex(trim($bgcolors[1])) . dechex(trim($bgcolors[2]));
            $this->random_string($max_char, $min_char);
            echo '<div class="serendipity_comment_captcha_image" style="background-color: ' . $hexval . '">';
            for ($i = 1; $i <= $max_char; $i++) {
                printf('<img src="%s" title="%s" alt="CAPTCHA ' . $i . '" class="captcha" />',
                    $serendipity['baseURL'] . ($serendipity['rewrite'] == 'none' ? $serendipity['indexFile'] . '?/' : '') . 'plugin/captcha_' . $i . '_' . md5(time()),
                    htmlspecialchars(PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2)
                );
            }
            echo '</div>';
        }
    }

    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;
        $debug = true;

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {
            $captchas_ttl = $this->get_config('captchas_ttl', 7);
            $_captchas    = $this->get_config('captchas', 'yes');
            $captchas     = ($_captchas !== 'no' && ($_captchas === 'yes' || $_captchas === 'scramble' || serendipity_db_bool($_captchas)));

            // Check if the entry is older than the allowed amount of time. Enforce kaptchas if that is true
            // of if kaptchas are activated for every entry
            $show_captcha = ($captchas && isset($eventData['timestamp']) && ($captchas_ttl < 1 || ($eventData['timestamp'] < (time() - ($captchas_ttl*60*60*24)))) ? true : false);
            
            // Plugins can override with custom captchas
            if (isset($serendipity['plugins']['disable_internal_captcha'])) {
                $show_captcha = false;
            }

            $forcemoderation = $this->get_config('forcemoderation', 60);
            $forcemoderation_treat = $this->get_config('forcemoderation_treat', 'moderate');
            $forcemoderationt = $this->get_config('forcemoderationt', 60);
            $forcemoderationt_treat = $this->get_config('forcemoderationt_treat', 'moderate');

            $links_moderate  = $this->get_config('links_moderate', 10);
            $links_reject    = $this->get_config('links_reject', 20);

            if (function_exists('imagettftext') && function_exists('imagejpeg')) {
                $max_char = 5;
                $min_char = 3;
                $use_gd   = true;
            } else {
                $max_char = $min_char = 5;
                $use_gd   = false;
            }

            switch($event) {
                case 'fetchcomments':
                    if (is_array($eventData) && !$_SESSION['serendipityAuthedUser'] && serendipity_db_bool($this->get_config('hide_email', false))) {
                        // Will force emails to be not displayed in comments and RSS feed for comments. Will not apply to logged in admins (so not in the backend as well)
                        @reset($eventData);
                        while(list($idx, $comment) = each($eventData)) {
                            $eventData[$idx]['no_email'] = true;
                        }
                    }
                    break;

                case 'frontend_saveComment':
                /*
                    $fp = fopen('/tmp/spamblock2.log', 'a');
                    fwrite($fp, date('Y-m-d H:i') . "\n" . print_r($eventData, true) . "\n" . print_r($addData, true) . "\n");
                    fclose($fp);
                */    

                    if (!is_array($eventData) || serendipity_db_bool($eventData['allow_comments'])) {
                        $this->checkScheme();

                        $serendipity['csuccess'] = 'true';
                        $logfile = $this->logfile = $this->get_config('logfile', $serendipity['serendipityPath'] . 'spamblock.log');
                        $required_fields = $this->get_config('required_fields', '');
                        $checkmail = $this->get_config('checkmail');

                        // Check CSRF [comments only, cannot be applied to trackbacks]
                        if ($addData['type'] == 'NORMAL' && serendipity_db_bool($this->get_config('csrf', true))) {
                            if (!serendipity_checkFormToken(false)) {
                                $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON, $addData);
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_CSRF_REASON;
                            }
                        }

                        // Check required fields
                        if ($addData['type'] == 'NORMAL' && !empty($required_fields)) {
                            $required_field_list = explode(',', $required_fields);
                            foreach($required_field_list as $required_field) {
                                $required_field = trim($required_field);
                                if (empty($addData[$required_field])) {
                                    $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD, $addData);
                                    $eventData = array('allow_comments' => false);
                                    $serendipity['messagestack']['comments'][] = sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD, $required_field);
                                    return false;
                                }
                            }
                        }

                        /*
                        if ($addData['type'] != 'NORMAL' && empty($addData['name'])) {
                            $eventData = array('allow_coments' => false);
                            $this->log($logfile, $eventData['id'], 'INVALIDGARV', 'INVALIDGARV', $addData);
                            return false;
                        }
                        */

                        // Check whether to allow comments from registered authors
                        if (serendipity_userLoggedIn() && $this->inGroup()) {
                            return true;
                        }

                        // Check if the user has verified himself via email already.
                        if ($addData['type'] == 'NORMAL' && (string)$checkmail === 'verify_once') {
                            $auth = serendipity_db_query("SELECT *
                                                            FROM {$serendipity['dbPrefix']}options
                                                           WHERE okey  = 'mail_confirm'
                                                             AND name  = '" . serendipity_db_escape_string($addData['email']) . "'
                                                             AND value = '" . serendipity_db_escape_string($addData['name']) . "'", true);
                            if (!is_array($auth)) {
                                // Filter authors names, Filter URL, Filter Content, Filter Emails, Check for maximum number of links before rejecting
                                // moderate false
                                if(false === $this->wordfilter($logfile, $eventData, $wordmatch, $addData, true)) { 
                                    // already there #$this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS, $addData);
                                    // already there #$eventData = array('allow_comments' => false);
                                    // already there #$serendipity['messagestack']['emails'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                                    return false;
                                } elseif (serendipity_db_bool($this->get_config('killswitch', false)) === true) {
                                    $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH, $addData);
                                    $eventData = array('allow_comments' => false);
                                    $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH;
                                    return false;
                                } else { 
                                    $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL, $addData);
                                    $eventData['moderate_comments'] = true;
                                    $eventData['status']            = 'confirm1';
                                    $serendipity['csuccess']        = 'moderate';
                                    $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL;
                                    return false;
                                }
                            } else {
                                // User is allowed to post message, bypassing other checks as if he were logged in.
                                return true;
                            }
                        }

                        // Check if entry title is the same as comment body
                        if (serendipity_db_bool($this->get_config('entrytitle')) && trim($eventData['title']) == trim($addData['comment'])) {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE, $addData);
                            $eventData = array('allow_comments' => false);
                            $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                            return false;
                        }

                        // Check for global emergency moderation
                        if (serendipity_db_bool($this->get_config('killswitch', false)) === true) {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH, $addData);
                            $eventData = array('allow_comments' => false);
                            $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH;
                            return false;
                        }

                        // Check for not allowing trackbacks/pingbacks/wfwcomments
                        if ( ($addData['type'] != 'NORMAL' || $addData['source'] == 'API') &&
                             $this->get_config('disable_api_comments', 'none') != 'none') {
                            if ($this->get_config('disable_api_comments') == 'reject') {
                                $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_API, $addData);
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_REASON_API;
                                return false;
                            } elseif ($this->get_config('disable_api_comments') == 'moderate') {
                                $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_REASON_API, $addData);
                                $eventData['moderate_comments'] = true;
                                $serendipity['csuccess']        = 'moderate';
                                $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_REASON_API;
                            }
                        }

                        // Check if sender ip is matching trackback/pingback ip (ip validation)
                        $trackback_ipvalidation_option = $this->get_config('trackback_ipvalidation','moderate');
                        if (($addData['type'] == 'TRACKBACK' || $addData['type'] == 'PINGBACK') && $trackback_ipvalidation_option != 'no') {
                            $this->IsHardcoreSpammer();
                            $exclude_urls = explode(';',$this->get_config('trackback_ipvalidation_url_exclude', $this->get_default_exclude_urls()));
                            $found_exclude_url = false;
                            foreach ($exclude_urls as $exclude_url) {
                                $exclude_url = trim($exclude_url);
                                if (empty($exclude_url)) continue; 
                                $found_exclude_url = preg_match('@' . $exclude_url . '@',$addData['url']);
                                if ($found_exclude_url) {
                                    break;
                                }
                            }
                            if (!$found_exclude_url) {
                                $parts = @parse_url($addData['url']);
                                $tipval_method = ($trackback_ipvalidation_option == 'reject'?'REJECTED':'MODERATE');
                                // Getting host from url successfully?
                                if (!is_array($parts)) { // not a valid URL
                                    $this->log($logfile, $eventData['id'], $tipval_method, sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION, $addData['url'], '', ''));
                                    if ($trackback_ipvalidation_option == 'reject') {
                                        $eventData = array('allow_comments' => false);
                                        $serendipity['messagestack']['comments'][] = sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION, $addData['url']);
                                        return false;
                                    } else {
                                        $eventData['moderate_comments'] = true;
                                        $serendipity['csuccess']        = 'moderate';
                                        $serendipity['moderate_reason'] = sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION, $addData['url']);
                                    }
                                }
                                $trackback_ip = preg_replace('/[^0-9.]/', '', gethostbyname($parts['host']) );
                                $sender_ip = preg_replace('/[^0-9.]/', '', $_SERVER['REMOTE_ADDR'] );
                                $sender_ua = ($debug ? ', ua="' . $_SERVER['HTTP_USER_AGENT'] . '"' : '') ;
                                // Is host ip and sender ip matching?
                                if ($trackback_ip != $sender_ip) {
                                    $this->log($logfile, $eventData['id'], $tipval_method, sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION, $parts['host'], $trackback_ip, $sender_ip  . $sender_ua), $addData);
                                    if ($trackback_ipvalidation_option == 'reject') {
                                        $eventData = array('allow_comments' => false);
                                        $serendipity['messagestack']['comments'][] = sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION, $parts['host'], $trackback_ip, $sender_ip . $sender_ua);
                                        return false;
                                    } else {
                                        $eventData['moderate_comments'] = true;
                                        $serendipity['csuccess']        = 'moderate';
                                        $serendipity['moderate_reason'] = sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_IPVALIDATION, $parts['host'], $trackback_ip, $sender_ip . $sender_ua);
                                    }
                                }
                            }
                        }

                        // Filter Akismet Blacklist?
                        $akismet_apikey = $this->get_config('akismet');
                        $akismet        = $this->get_config('akismet_filter');
                        if (!empty($akismet_apikey) && ($akismet == 'moderate' || $akismet == 'reject') && !isset($addData['skip_akismet'])) {
                            $spam = $this->getBlacklist('akismet.com', $akismet_apikey, $eventData, $addData);
                            if ($spam['is_spam'] !== false) {
                                $this->IsHardcoreSpammer();
                                if ($akismet == 'moderate') {
                                    $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST . ': ' . $spam['message'], $addData);
                                    $eventData['moderate_comments'] = true;
                                    $serendipity['csuccess']        = 'moderate';
                                    $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY . ' (Akismet)';
                                } else {
                                    $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_AKISMET_SPAMLIST . ': ' . $spam['message'], $addData);
                                    $eventData = array('allow_comments' => false);
                                    $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                                    return false;
                                }
                            }
                        }

                        // Check Trackback URLs?
                        if (($addData['type'] == 'TRACKBACK' || $addData['type'] == 'PINGBACK') && serendipity_db_bool($this->get_config('trackback_check_url'))) {
                            require_once S9Y_PEAR_PATH . 'HTTP/Request.php';

                            if (function_exists('serendipity_request_start')) serendipity_request_start();
                            $req     = new HTTP_Request($addData['url'], array('allowRedirects' => true, 'maxRedirects' => 5, 'readTimeout' => array(5,0)));
                            $is_valid = false;
                            if (PEAR::isError($req->sendRequest()) || $req->getResponseCode() != '200') {
                                $is_valid = false;
                            } else {
                                $fdata = $req->getResponseBody();

                                // Check if the target page contains a link to our blog
                                if (preg_match('@' . preg_quote($serendipity['baseURL'], '@') . '@i', $fdata)) {
                                    $is_valid = true;
                                } else {
                                    $is_valid = false;
                                }
                            }
                            if (function_exists('serendipity_request_end')) serendipity_request_end();

                            if ($is_valid === false) {
                                $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL, $addData);
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL;
                                return false;
                            }
                        }

                        if(false === $this->wordfilter($logfile, $eventData, $wordmatch, $addData)) { 
                            return false;
                        }

                        // Filter Blogg.de Blacklist?
                        $bloggdeblacklist = $this->get_config('bloggdeblacklist');
                        if ($bloggdeblacklist == 'moderate' || $bloggdeblacklist == 'reject') {
                            $domains = $this->getBlacklist('blogg.de', '', $eventData, $addData);
                            if (is_array($domains)) {
                                foreach($domains AS $domain) {
                                    $domain = trim($domain);
                                    if (empty($domain)) {
                                        continue;
                                    }

                                    if (preg_match('@' . preg_quote($domain) . '@i', $addData['url'])) {
                                        $this->IsHardcoreSpammer();
                                        if ($bloggdeblacklist == 'moderate') {
                                            $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_REASON_BLOGG_SPAMLIST . ': ' . $domain, $addData);
                                            $eventData['moderate_comments'] = true;
                                            $serendipity['csuccess']        = 'moderate';
                                            $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY . ' (' . PLUGIN_EVENT_SPAMBLOCK_REASON_BLOGG_SPAMLIST . ')';
                                        } else {
                                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_BLOGG_SPAMLIST . ': ' . $domain, $addData);
                                            $eventData = array('allow_comments' => false);
                                            $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                                            return false;
                                        }
                                    }
                                }
                            }
                        }

                        // Check for maximum number of links before rejecting
                        $link_count = substr_count(strtolower($addData['comment']), 'http://');
                        if ($links_reject > 0 && $link_count > $links_reject) {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT, $addData);
                            $eventData = array('allow_comments' => false);
                            $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                            return false;
                        }

                        // Captcha checking
                        if ($show_captcha && $addData['type'] == 'NORMAL') {
                            if (!isset($_SESSION['spamblock']['captcha']) || !isset($serendipity['POST']['captcha']) || strtolower($serendipity['POST']['captcha']) != strtolower($_SESSION['spamblock']['captcha'])) {
                                $this->log($logfile, $eventData['id'], 'REJECTED', sprintf(PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS, $serendipity['POST']['captcha'], $_SESSION['spamblock']['captcha']), $addData);
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS;
                                return false;
                            } else {
// DEBUG
//                                $this->log($logfile, $eventData['id'], 'REJECTED', 'Captcha passed: ' . $serendipity['POST']['captcha'] . ' / ' . $_SESSION['spamblock']['captcha'] . ' // Source: ' . $_SERVER['REQUEST_URI'], $addData);
                            }
                        } else {
// DEBUG
//                            $this->log($logfile, $eventData['id'], 'REJECTED', 'Captcha not needed: ' . $serendipity['POST']['captcha'] . ' / ' . $_SESSION['spamblock']['captcha'] . ' // Source: ' . $_SERVER['REQUEST_URI'], $addData);
                        }

                        // Check for forced comment moderation (X days)
                        if ($addData['type'] == 'NORMAL' && $forcemoderation > 0 && $eventData['timestamp'] < (time() - ($forcemoderation * 60 * 60 * 24))) {
                            $this->log($logfile, $eventData['id'], $forcemoderation_treat, PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION, $addData);
                            if ($forcemoderation_treat == 'reject') {
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION;
                                return false;
                            } else {
                                $eventData['moderate_comments'] = true;
                                $serendipity['csuccess']        = 'moderate';
                                $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION;
                            }
                        }

                        // Check for forced trackback moderation
                        if ($addData['type'] != 'NORMAL' && $forcemoderationt > 0 && $eventData['timestamp'] < (time() - ($forcemoderationt * 60 * 60 * 24))) {
                            $this->log($logfile, $eventData['id'], $forcemoderationt_treat, PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION, $addData);
                            if ($forcemoderationt_treat == 'reject') {
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION;
                                return false;
                            } else {
                                $eventData['moderate_comments'] = true;
                                $serendipity['csuccess']        = 'moderate';
                                $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION;
                            }
                        }

                        // Check for maximum number of links before forcing moderation
                        if ($links_moderate > 0 && $link_count > $links_moderate) {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE, $addData);
                            $eventData['moderate_comments'] = true;
                            $serendipity['csuccess']        = 'moderate';
                            $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE;
                        }

                        // Check for identical comments. We allow to bypass trackbacks from our server to our own blog.
                        if ( $this->get_config('bodyclone', true) === true && $_SERVER['REMOTE_ADDR'] != $_SERVER['SERVER_ADDR'] && $addData['type'] != 'PINGBACK') {
                            $query = "SELECT count(id) AS counter FROM {$serendipity['dbPrefix']}comments WHERE type = '" . $addData['type'] . "' AND body = '" . serendipity_db_escape_string($addData['comment']) . "'";
                            $row   = serendipity_db_query($query, true);
                            if (is_array($row) && $row['counter'] > 0) {
                                $this->IsHardcoreSpammer();
                                $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE, $addData);
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                                return false;
                            }
                        }

                        // Check last IP
                        if ($addData['type'] == 'NORMAL' && $this->get_config('ipflood', 2) != 0 ) {
                            $query = "SELECT max(timestamp) AS last_post FROM {$serendipity['dbPrefix']}comments WHERE ip = '" . serendipity_db_escape_string($_SERVER['REMOTE_ADDR']) . "'";
                            $row   = serendipity_db_query($query, true);
                            if (is_array($row) && $row['last_post'] > (time() - $this->get_config('ipflood', 2)*60)) {
                                $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD, $addData);
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_IP;
                                return false;
                            }
                        }

                        if ($addData['type'] == 'NORMAL' && (string)$checkmail === 'verify_always') {
                            $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL, $addData);
                            $eventData['moderate_comments'] = true;
                            $eventData['status']            = 'confirm';
                            $serendipity['csuccess']        = 'moderate';
                            $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_MAIL;
                            return false;
                        }

                        // Check invalid email
                        if ($addData['type'] == 'NORMAL' && serendipity_db_bool($this->get_config('checkmail', false))) {
                            if (!empty($addData['email']) && strstr($addData['email'], '@') === false) {
                                $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL, $addData);
                                $eventData = array('allow_comments' => false);
                                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL;
                                return false;
                            }
                        }

                        if ($eventData['moderate_comments'] == true) {
                            return false;
                        }
                    }

                    return true;
                    break;

                case 'frontend_comment':
                    if (serendipity_db_bool($this->get_config('hide_email', false))) {
                        echo '<div class="serendipity_commentDirection serendipity_comment_spamblock">' . PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE . '</div>';
                    }
                    
                    if ((string)$this->get_config('checkmail') === 'verify_always' || (string)$this->get_config('checkmail') === 'verify_once') {
                        echo '<div class="serendipity_commentDirection serendipity_comment_spamblock">' . PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL_VERIFICATION_INFO . '</div>';
                    }

                    if (serendipity_db_bool($this->get_config('csrf', true))) {
                        echo serendipity_setFormToken('form');
                    }

                    // Check whether to allow comments from registered authors
                    if (serendipity_userLoggedIn() && $this->inGroup()) {
                        return true;
                    }

                    if ($show_captcha) {
                        echo '<div class="serendipity_commentDirection serendipity_comment_captcha">';
                        if (!isset($serendipity['POST']['preview']) || strtolower($serendipity['POST']['captcha'] != strtolower($_SESSION['spamblock']['captcha']))) {
                            echo '<br />' . PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC . '<br />';
                            $this->show_captcha($use_gd);
                            echo '<br />';
                            echo '<label for="captcha">'. PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3 . '</label><br /><input class="input_textbox" type="text" size="5" name="serendipity[captcha]" value="" id="captcha" />';
                        } elseif (isset($serendipity['POST']['captcha'])) {
                            echo '<input type="hidden" name="serendipity[captcha]" value="' . htmlspecialchars($serendipity['POST']['captcha']) . '" />';
                        }
                        echo '</div>';
                    }

                    return true;
                    break;


                case 'external_plugin':
                    $parts     = explode('_', (string)$eventData);
                    if (!empty($parts[1])) {
                        $param     = (int) $parts[1];
                    } else {
                        $param     = null;
                    }

                    $methods = array('captcha');

                    if (!in_array($parts[0], $methods)) {
                        return;
                    }

                    list($musec, $msec) = explode(' ', microtime());
                    $srand = (float) $msec + ((float) $musec * 100000);
                    srand($srand);
                    mt_srand($srand);
                    $width    = 120;
                    $height   = 40;

                    $bgcolors = explode(',', $this->get_config('captcha_color', '255,255,255'));
                    $fontfiles = array('Vera.ttf', 'VeraSe.ttf', 'chumbly.ttf', '36daysago.ttf');

                    if ($use_gd) {
                        $strings  = $this->random_string($max_char, $min_char);
                        $fontname = $fontfiles[array_rand($fontfiles)];
                        $font     = $serendipity['serendipityPath'] . 'plugins/serendipity_event_spamblock/' . $fontname;

                        if (!file_exists($font)) {
                            // Search in shared plugin directory
                            $font = S9Y_INCLUDE_PATH . 'plugins/serendipity_event_spamblock/' . $fontname;
                        }

                        if (!file_exists($font)) {
                            die(PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF);
                        }

                        header('Content-Type: image/jpeg');
                        $image  = imagecreate($width, $height);
                        $bgcol  = imagecolorallocate($image, trim($bgcolors[0]), trim($bgcolors[1]), trim($bgcolors[2]));
                        // imagettftext($image, 10, 1, 1, 15, imagecolorallocate($image, 255, 255, 255), $font, 'String: ' . $string);

                        $pos_x  = 5;
                        foreach($strings AS $idx => $charidx) {
                            $color = imagecolorallocate($image, mt_rand(50, 235), mt_rand(50, 235), mt_rand(50,235));
                            $size  = mt_rand(15, 21);
                            $angle = mt_rand(-20, 20);
                            $pos_y = ceil($height - (mt_rand($size/3, $size/2)));

                            imagettftext(
                              $image,
                              $size,
                              $angle,
                              $pos_x,
                              $pos_y,
                              $color,
                              $font,
                              $this->chars[$charidx]
                            );

                            $pos_x = $pos_x + $size + 2;

                        }

                        if ($_captchas === 'scramble') {
                            $line_diff = mt_rand(5, 15);
                            $pixel_col = imagecolorallocate($image, trim($bgcolors[0])-mt_rand(10,50), trim($bgcolors[1])-mt_rand(10,50), trim($bgcolors[2])-mt_rand(10,50));
                            for ($y = $line_diff; $y < $height; $y += $line_diff) {
                                $row_diff = mt_rand(5, 15);
                                for ($x = $row_diff; $x < $width; $x+= $row_diff) {
                                    imagerectangle($image, $x, $y, $x+1, $y+1, $pixel_col);
                                }
                            }
                        }
                        imagejpeg($image, '', 90);
                        imagedestroy($image);
                    } else {
                        header('Content-Type: image/png');
                        $output_char = strtolower($_SESSION['spamblock']['captcha']{$parts[1] - 1});
                        $cap = $serendipity['serendipityPath'] . 'plugins/serendipity_event_spamblock/captcha_' . $output_char . '.png';
                        if (!file_exists($cap)) {
                            $cap = S9Y_INCLUDE_PATH . 'plugins/serendipity_event_spamblock/captcha_' . $output_char . '.png';
                        }

                        if (file_exists($cap)) {
                            echo file_get_contents($cap);
                        }
                    }
                    return true;
                    break;

                case 'backend_comments_top':

                    // Tell Akismet about spam or not spam
                    $tell_id = null;
                    if (isset($serendipity['GET']['spamIsSpam'])) {
                        $tell_spam = true;
                        $tell_id = $serendipity['GET']['spamIsSpam'];
                    }
                    if (isset($serendipity['GET']['spamNotSpam'])) {
                        $tell_spam = false;
                        $tell_id = $serendipity['GET']['spamNotSpam'];
                    }
                    if ($tell_id !== null) {
                        $akismet_apikey = $this->get_config('akismet');
                        $akismet        = $this->get_config('akismet_filter');
                        if (!empty($akismet_apikey))
                            $this->tellAboutComment('akismet.com', $akismet_apikey, $tell_id, $tell_spam);
                    }

                    // Add Author to blacklist. If already filtered, it will be removed from the filter. (AKA "Toggle")
                    if (isset($serendipity['GET']['spamBlockAuthor'])) {
                        $item    = $this->getComment('author', $serendipity['GET']['spamBlockAuthor']);
                        $items   = &$this->checkFilter('authors', $item, true);
                        $this->set_config('contentfilter_authors', implode(';', $items));
                    }

                    // Add URL to blacklist. If already filtered, it will be removed from the filter. (AKA "Toggle")
                    if (isset($serendipity['GET']['spamBlockURL'])) {
                        $item    = $this->getComment('url', $serendipity['GET']['spamBlockURL']);
                        $items   = &$this->checkFilter('urls', $item, true);
                        $this->set_config('contentfilter_urls', implode(';', $items));
                    }

                    // Add E-mail to blacklist. If already filtered, it will be removed from the filter. (AKA "Toggle")
                    if (isset($serendipity['GET']['spamBlockEmail'])) {
                        $item    = $this->getComment('email', $serendipity['GET']['spamBlockEmail']);
                        $items   = &$this->checkFilter('emails', $item, true);
                        $this->set_config('contentfilter_emails', implode(';', $items));
                    }

                    echo ' - ' . WORD_OR . ' - <a class="serendipityPrettyButton" href="serendipity_admin.php?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]=' . $this->instance . '">' . PLUGIN_EVENT_SPAMBLOCK_CONFIG . '</a>';
                    return true;
                    break;

                case 'backend_view_comment':
                    $author_is_filtered = $this->checkFilter('authors', $eventData['author']);
                    $clink1 = 'clink1' . $eventData['id'];
                    $clink2 = 'clink2' . $eventData['id'];

                    $akismet_apikey = $this->get_config('akismet');
                    $akismet        = $this->get_config('akismet_filter');
                    if (!empty($akismet_apikey)) {
                        $eventData['action_more'] .= ' <a id="' . $clink1 . '" class="serendipityIconLink" title="' . PLUGIN_EVENT_SPAMBLOCK_SPAM . '" href="serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[spamIsSpam]=' . $eventData['id'] . $addData . '#' . $clink1 . '"><img src="' . serendipity_getTemplateFile('admin/img/unconfigure.png') . '" alt="" />' . PLUGIN_EVENT_SPAMBLOCK_SPAM . '</a>';
                        $eventData['action_more'] .= ' <a id="' . $clink1 . '" class="serendipityIconLink" title="' . PLUGIN_EVENT_SPAMBLOCK_NOT_SPAM . '" href="serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[spamNotSpam]=' . $eventData['id'] . $addData . '#' . $clink1 . '"><img src="' . serendipity_getTemplateFile('admin/img/configure.png') . '" alt="" />' . PLUGIN_EVENT_SPAMBLOCK_NOT_SPAM . '</a>';
                    }

                    $eventData['action_author'] .= ' <a id="' . $clink1 . '" class="serendipityIconLink" title="' . ($author_is_filtered ? PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR : PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR) . '" href="serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[spamBlockAuthor]=' . $eventData['id'] . $addData . '#' . $clink1 . '"><img src="' . serendipity_getTemplateFile('admin/img/' . ($author_is_filtered ? 'un' : '') . 'configure.png') . '" alt="" /></a>';

                    if (!empty($eventData['url'])) {
                        $url_is_filtered    = $this->checkFilter('urls', $eventData['url']);
                        $eventData['action_url']    .= ' <a id="' . $clink2 . '" class="serendipityIconLink" title="' . ($url_is_filtered ? PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL : PLUGIN_EVENT_SPAMBLOCK_ADD_URL) . '" href="serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[spamBlockURL]=' . $eventData['id'] . $addData . '#' . $clink2 . '"><img src="' . serendipity_getTemplateFile('admin/img/' . ($url_is_filtered ? 'un' : '') . 'configure.png') . '" alt="" /></a>';
                    }

                    if (!empty($eventData['email'])) {
                        $email_is_filtered    = $this->checkFilter('emails', $eventData['email']);
                        $eventData['action_email']    .= ' <a id="' . $clink2 . '" class="serendipityIconLink" title="' . ($email_is_filtered ? PLUGIN_EVENT_SPAMBLOCK_REMOVE_EMAIL : PLUGIN_EVENT_SPAMBLOCK_ADD_EMAIL) . '" href="serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[spamBlockEmail]=' . $eventData['id'] . $addData . '#' . $clink2 . '"><img src="' . serendipity_getTemplateFile('admin/img/' . ($email_is_filtered ? 'un' : '') . 'configure.png') . '" alt="" /></a>';
                    }

                    return true;
                    break;

                default:
                    return false;
                    break;
            }
        } else {
            return false;
        }
    }

    /**
     * wordfilter, email and additional link check moved to this function, to allow comment user to opt-in (verify_once), but reject all truly spam comments before.
     **/
    function wordfilter($logfile, &$eventData, $wordmatch, $addData, $ftc = false) { 
        global $serendipity;

        // Check for word filtering
        if ($filter_type = $this->get_config('contentfilter_activate', 'moderate')) {

            if($ftc) $filter_type = 'reject';

            // Filter authors names
            $filter_authors = explode(';', $this->get_config('contentfilter_authors', $this->filter_defaults['authors']));
            if (is_array($filter_authors)) {
                foreach($filter_authors AS $filter_author) {
                    $filter_author = trim($filter_author);
                    if (empty($filter_author)) {
                        continue;
                    }
                    if (preg_match('@(' . $filter_author . ')@i', $addData['name'], $wordmatch)) {
                        if ($filter_type == 'moderate') {
                            $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS . ': ' . $wordmatch[1], $addData);
                            $eventData['moderate_comments'] = true;
                            $serendipity['csuccess']        = 'moderate';
                            $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY . ' (' . PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS . ': ' . $wordmatch[1] . ')';
                        } else {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS . ': ' . $wordmatch[1], $addData);
                            $eventData = array('allow_comments' => false);
                            $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                            return false;
                        }
                    }
                }
            }

            // Filter URL
            $filter_urls = explode(';', $this->get_config('contentfilter_urls', $this->filter_defaults['urls']));
            if (is_array($filter_urls)) {
                foreach($filter_urls AS $filter_url) {
                    $filter_url = trim($filter_url);
                    if (empty($filter_url)) {
                        continue;
                    }
                    if (preg_match('@(' . $filter_url . ')@i', $addData['url'], $wordmatch)) {
                        if ($filter_type == 'moderate') {
                            $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS . ': ' . $wordmatch[1], $addData);
                            $eventData['moderate_comments'] = true;
                            $serendipity['csuccess']        = 'moderate';
                            $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY . ' (' . PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS . ': ' . $wordmatch[1] . ')';
                        } else {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS . ': ' . $wordmatch[1], $addData);
                            $eventData = array('allow_comments' => false);
                            $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                            return false;
                        }
                    }
                }
            }

            // Filter Content
            $filter_bodys = explode(';', $this->get_config('contentfilter_words', $this->filter_defaults['words']));
            if (is_array($filter_bodys)) {
                foreach($filter_bodys AS $filter_body) {
                    $filter_body = trim($filter_body);
                    if (empty($filter_body)) {
                        continue;
                    }
                    if (preg_match('@(' . $filter_body . ')@i', $addData['comment'], $wordmatch)) {
                        if ($filter_type == 'moderate') {
                            $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS . ': ' . $wordmatch[1], $addData);
                            $eventData['moderate_comments'] = true;
                            $serendipity['csuccess']        = 'moderate';
                            $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY . ' (' . PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS . ': ' . $wordmatch[1] . ')';
                        } else {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS . ': ' . $wordmatch[1], $addData);
                            $eventData = array('allow_comments' => false);
                            $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                            return false;
                        }
                    }
                }
            }

            // Filter Emails
            $filter_emails = explode(';', $this->get_config('contentfilter_emails', $this->filter_defaults['emails']));
            if (is_array($filter_emails)) {
                foreach($filter_emails AS $filter_email) {
                    $filter_email = trim($filter_email);
                    if (empty($filter_email)) {
                        continue;
                    }
                    if (preg_match('@(' . $filter_email . ')@i', $addData['email'], $wordmatch)) {
                        $this->IsHardcoreSpammer();
                        if ($filter_type == 'moderate') {
                            $this->log($logfile, $eventData['id'], 'MODERATE', PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS . ': ' . $wordmatch[1], $addData);
                            $eventData['moderate_comments'] = true;
                            $serendipity['csuccess']        = 'moderate';
                            $serendipity['moderate_reason'] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY . ' (' . PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS . ': ' . $wordmatch[1] . ')';
                        } else {
                            $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_FILTER_EMAILS . ': ' . $wordmatch[1], $addData);
                            $eventData = array('allow_comments' => false);
                            $serendipity['messagestack']['emails'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                            return false;
                        }
                    }
                }
            }
        } // Content filtering end

        if($ftc) { 
            // Check for maximum number of links before rejecting
            $link_count = substr_count(strtolower($addData['comment']), 'http://');
            if ($links_reject > 0 && $link_count > $links_reject) {
                $this->log($logfile, $eventData['id'], 'REJECTED', PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT, $addData);
                $eventData = array('allow_comments' => false);
                $serendipity['messagestack']['comments'][] = PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY;
                return false;
            }
        }

    } // function wordfilter end


    function &checkFilter($what, $match, $getItems = false) {
        $items = explode(';', $this->get_config('contentfilter_' . $what, $this->filter_defaults[$what]));

        $filtered = false;
        if (is_array($items)) {
            foreach($items AS $key => $item) {
                if (empty($match)) {
                    continue;
                }

                if (empty($item)) {
                    unset($items[$key]);
                    continue;
                }

                if (preg_match('@' . $item . '@', $match)) {
                    $filtered = true;
                    unset($items[$key]);
                }
            }
        }

        if ($getItems) {
            if (!$filtered && !empty($match)) {
                $items[] = preg_quote($match, '@');
            }

            return $items;
        }

        return $filtered;
    }

    function getComment($key, $id) {
        global $serendipity;
        $c = serendipity_db_query("SELECT $key FROM {$serendipity['dbPrefix']}comments WHERE id = '" . (int)$id . "'", true, 'assoc');

        if (!is_array($c) || !isset($c[$key])) {
            return false;
        }

        return $c[$key];
    }

    function random_string($max_char, $min_char) {
        $this->chars = array(2, 3, 4, 7, 9); // 1, 5, 6 and 8 may look like characters.
        $this->chars = array_merge($this->chars, array('A','B','C','D','E','F','H','J','K','L','M','N','P','Q','R','T','U','V','W','X','Y','Z')); // I, O, S may look like numbers

        $strings   = array_rand($this->chars, mt_rand($min_char, $max_char));
        $string    = '';
        foreach($strings AS $idx => $charidx) {
            $string .= $this->chars[$charidx];
        }
        $_SESSION['spamblock'] = array('captcha' => $string);

        return $strings;
    }

    function log($logfile, $id, $switch, $reason, $comment) {
        global $serendipity;

        $method = $this->get_config('logtype');

        switch($method) {
            case 'file':
                if (empty($logfile)) {
                    return;
                }
                if (strpos($logfile, '%') !== false) {
                    $logfile = strftime($logfile);
                }

                $fp = @fopen($logfile, 'a+');
                if (!is_resource($fp)) {
                    return;
                }

                fwrite($fp, sprintf(
                    '[%s] - [%s: %s] - [#%s, Name "%s", E-Mail "%s", URL "%s", User-Agent "%s", IP %s] - [%s]' . "\n",
                    date('Y-m-d H:i:s', serendipity_serverOffsetHour()),
                    $switch,
                    $reason,
                    $id,
                    str_replace("\n", ' ', $comment['name']),
                    str_replace("\n", ' ', $comment['email']),
                    str_replace("\n", ' ', $comment['url']),
                    str_replace("\n", ' ', $_SERVER['HTTP_USER_AGENT']),
                    $_SERVER['REMOTE_ADDR'],
                    str_replace("\n", ' ', $comment['comment'])
                ));

                fclose($fp);
                break;

            case 'none':
                return;
                break;

            case 'db':
            default:
                $q = sprintf("INSERT INTO {$serendipity['dbPrefix']}spamblocklog
                                          (timestamp, type, reason, entry_id, author, email, url,  useragent, ip,   referer, body)
                                   VALUES (%d,        '%s',  '%s',  '%s',     '%s',   '%s',  '%s', '%s',      '%s', '%s',    '%s')",

                           serendipity_serverOffsetHour(),
                           serendipity_db_escape_string($switch),
                           serendipity_db_escape_string($reason),
                           serendipity_db_escape_string($id),
                           serendipity_db_escape_string($comment['name']),
                           serendipity_db_escape_string($comment['email']),
                           serendipity_db_escape_string($comment['url']),
                           substr(serendipity_db_escape_string($_SERVER['HTTP_USER_AGENT']), 0, 255),
                           serendipity_db_escape_string($_SERVER['REMOTE_ADDR']),
                           substr(serendipity_db_escape_string(isset($_SESSION['HTTP_REFERER']) ? $_SESSION['HTTP_REFERER'] : $_SERVER['HTTP_REFERER']), 0, 255),
                           serendipity_db_escape_string($comment['comment'])
                );

                serendipity_db_query($q);
                break;
        }
    }
}

/* vim: set sts=4 ts=4 expandtab : */
