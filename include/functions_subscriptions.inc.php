<?php
# Copyright (c) 2020, Stephan Brunker (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

/**
 * Cancel a subscription to the blog (via unsubscribe)
 *
 * @access public
 * @param   string      unique subscription token
 * @return  int         Return number of unsubscriptions
 */
function serendipity_cancelSubscription($token) {
    global $serendipity;

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}subscriptions
        WHERE token = '" . serendipity_db_escape_string($token) . "'");

    return serendipity_db_affected_rows();
}


/**
 * Cancel a subscription to the blog (via Admin)
 *
 * @access public
 * @param   id          subscriptionID
 * @return  int         Return number of unsubscriptions
 */
function serendipity_deleteSubscription($id) {
    global $serendipity;

    $id = (int) $id;

    $sql = "DELETE FROM {$serendipity['dbPrefix']}subscriptions
        WHERE id = {$id}";

    serendipity_db_query($sql);

    return serendipity_db_affected_rows();
}

/**
 * Confirm a subscription
 *
 * @access public
 * @param   string      token sent with confirmation email
 * @return  int         id of confirmed subscription
 */
function serendipity_subscriptionConfirm($hash) {
    // check hash for validity
    // enter email address in database
    global $serendipity;

    // Delete any subscription attempts that smell like 3-week-old, dead fish.
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}subscriptions
                                WHERE subscribed = 'false' AND timestamp < " . (time() - 1814400) );

    $hashinfo = serendipity_db_query("SELECT id, type
                                        FROM {$serendipity['dbPrefix']}subscriptions
                                       WHERE token = '" . serendipity_db_escape_string($hash) . "'", true);
    if (is_array($hashinfo) && $hashinfo['id'] > 0) {
        $id = (int)$hashinfo['id'];
        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}subscriptions
                                 SET subscribed = 'true', timestamp = " . time() . " WHERE id = $id");

        return $id;
    }
    return false;
}

/**
 * Prepare variables for Smarty output of subscription page
 *
 * @access public
 * @return
 */
function serendipity_printSubscriptionpage() {
    global $serendipity;
    $type = $serendipity['GET']['subscribe'];
    $target_id = $serendipity['GET']['subscribeID'];

    if (!is_object($serendipity['smarty'])) {
        serendipity_smarty_init();
    }

    // send confirmation mail dependent of option "double-opt-in"
    if (!isset($serendipity['allowSubscriptionsOptIn']) || $serendipity['allowSubscriptionsOptIn']) {
        $serendipity['smarty_subscribe_vars'] = array(
            'allowSubscriptionsOptIn' => true
            );
    } else {
        $serendipity['smarty_subscribe_vars'] = array(
            'allowSubscriptionsOptIn' => false
            );
    }

    if ($type == 'blog') {
        $subscribepath = PATH_SUBSCRIBE . '/' . $type;
    } else {
        $subscribepath = PATH_SUBSCRIBE . '/' . $type . '/' . $target_id;
    }

    $serendipity['smarty_subscribe_vars']['subscribe_path'] = serendipity_rewriteURL($subscribepath, 'baseURL');
    $serendipity['smarty_subscribe_vars']['type'] = $type;

    if ($type == 'category') {
        $res = serendipity_db_query("SELECT categoryid, category_name FROM {$serendipity['dbPrefix']}category WHERE categoryid = " . (int)$target_id, true);
        if ($res) {
        serendipity_plugin_api::hook_event('multilingual_strip_langs', $res, array('category_name'));
        $serendipity['smarty_subscribe_vars']['type_name'] = $res['category_name'];
        $serendipity['smarty_subscribe_vars']['target_id'] = (int)$target_id;
        }
    } elseif ($type == 'author') {
        $res = serendipity_db_query("SELECT authorid, realname FROM {$serendipity['dbPrefix']}authors WHERE authorid = " . (int)$target_id, true);
        $serendipity['smarty_subscribe_vars']['type_name'] = $res['realname'];
        $serendipity['smarty_subscribe_vars']['target_id'] = (int)$target_id;
    }
    $serendipity['smarty']->assignByRef('smarty_subscribe_vars', $serendipity['smarty_subscribe_vars']);
    serendipity_smarty_fetch('SUBSCRIBE', 'subscribe.tpl', true);

}

/**
 * Prepare variables for Smarty output of unsubscription page
 *
 * @access public
 * @return
 */
function serendipity_printUnsubscribepage() {
    global $serendipity;

    $token = serendipity_db_escape_string($serendipity['GET']['unsubscribe']);
    $email = serendipity_db_escape_string($serendipity['GET']['email']);
    $action = $serendipity['GET']['unsubscribeAction'];

    // get all subscriptions for the email
    $res = serendipity_db_query("SELECT s.email, s.token, s.type, s.timestamp, s.target_id, a.realname, c.category_name, e.title
                        FROM {$serendipity['dbPrefix']}subscriptions s
                        LEFT JOIN {$serendipity['dbPrefix']}authors a
                        ON (s.type = 'author' AND s.target_id = a.authorid)
                        LEFT JOIN {$serendipity['dbPrefix']}category c
                        ON (s.type = 'category' AND s.target_id = c.categoryid)
                        LEFT JOIN {$serendipity['dbPrefix']}entries e
                        ON (s.type = 'entry' AND s.target_id = e.id)
                        WHERE
                        s.email = '{$email}'
                        ORDER BY type", false, 'assoc');

    serendipity_plugin_api::hook_event('multilingual_strip_langs',$res, array('category_name'));

    $serendipity['smarty_unsubscribe_vars']['email'] = $email;
    $serendipity['smarty_unsubscribe_vars']['unsubscribe_path'] = serendipity_rewriteURL(PATH_UNSUBSCRIBE, 'baseURL');
    $serendipity['smarty_unsubscribe_vars']['imagepath'] = serendipity_getTemplateFile('img/big_delete.png');

    foreach ($res as $subscription) {
        // delete subscription
        if ($action == 'delete' && $subscription['token'] == $token) {
            switch ($subscription['type']) {
                case 'blog':
                    $target = $serendipity['blogTitle'];
                    break;
                case 'author':
                    $target = $subscription['realname'];
                    break;
                case 'category':
                    $target = $subscription['category_name'];
                    break;
                }
            serendipity_cancelSubscription($token);
            if ($target) {
                $serendipity['smarty_unsubscribe_vars']['notification'] = sprintf(NOTIFICATION_UNSUBSCRIBE_CONFIRM, $target);
            } else {
                $serendipity['smarty_unsubscribe_vars']['notification'] = sprintf(NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM, $email, $subscription['title']);
            }
        }
        // list remaining subscriptions
        elseif ($subscription['type'] == 'blog') {
            $serendipity['smarty_unsubscribe_vars']['blog'] = array(
                'item'  => true,
                'token'    => $subscription['token'],
                'since' => $subscription['timestamp']);
        } elseif ($subscription['type'] == 'author') {
            $serendipity['smarty_unsubscribe_vars']['authors'][] = array(
                'item'  => $subscription['realname'],
                'token'    => $subscription['token'],
                'since' => $subscription['timestamp']);
        } elseif ($subscription['type'] == 'category') {
            $serendipity['smarty_unsubscribe_vars']['categories'][] = array(
                'item'  => $subscription['category_name'],
                'token'    => $subscription['token'],
                'since' => $subscription['timestamp']);
        } elseif ($subscription['type'] == 'entry') {
            $serendipity['smarty_unsubscribe_vars']['entries'][] = array(
                'item'  => $subscription['title'],
                'token' => $subscription['token'],
                'since' => $subscription['timestamp']);
        }
    }
    $serendipity['smarty']->assignByRef('smarty_unsubscribe_vars', $serendipity['smarty_unsubscribe_vars']);
    serendipity_smarty_fetch('UNSUBSCRIBE', 'unsubscribe.tpl', true);
}



/**
 * Perform double opt-in for blog subscription
 *
 * @access public
 * @param the mail address which wants to subscribe
 * @param the type of subscription
 *      blog -> all new articles
 *      entry -> new comments to entries
 *      author -> new articles from author
 *      category -> new articles of a category
 * @param the id of the subscripted target
 * @param the name of the subscriber (used for comment subscriptions from commentform)
 * return 'dupe' when subscription is already active / false for bad email address 
 *          / new subscription ID for success / 'block' if blocked by plugin
 */
function serendipity_sendConfirmationMail($email, $type = 'blog', $target_id = NULL, $name = NULL)  {
    global $serendipity;

    if (!$serendipity['allowSubscriptions']) { 
        return false;
    }

    $dbhash = md5(uniqid(rand(), true));

    ($target_id !== NULL) ? $target_id = (int)$target_id : $target_id = 'NULL';
    if ($name !== NULL) $name = "'" . serendipity_db_escape_string($name) . "'";
    $type = serendipity_db_escape_string($type);

    $data = array(  'email'     => $email, 
                    'type'      => $type, 
                    'target_id' => $target_id,
                    'lang'      => $serendipity['default_lang']);

    if ($_SESSION['serendipityAuthedUser'] !== true) {
        serendipity_plugin_api::hook_event('frontend_subscribe', $data);
        if ($data['block_subscription']) {
            return 'block';
        }
    }

    // check if subscription already exists
    if ($type == 'entry' || $type == 'author' || $type == 'category') {
        $sql_where = "AND target_id = {$target_id}";
    } elseif ($type == 'blog') {
        $sql_where = '';
    } else {
        return false;
    }

    $dupe_check = serendipity_db_query("SELECT id, subscribed FROM {$serendipity['dbPrefix']}subscriptions
                                             WHERE email = '{$email}' AND type = '{$type}' {$sql_where}", true);
    if (!is_array($dupe_check)) {
         // register subscription
        serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}subscriptions
                                            (email, type, target_id, subscribed, token, timestamp, lang)
                                        VALUES ('{$email}', '{$type}', {$target_id}, 'false', '{$dbhash}', " . time() . ", '{$serendipity['default_lang']}')");
        $newid = serendipity_db_insert_id();
     } else {
        if ($dupe_check['subscribed'] == 'false') {
            // generate new token
            serendipity_db_query("UPDATE {$serendipity['dbPrefix']}subscriptions
                                    SET token = '{$dbhash}', timestamp = " . time() .
                                    " WHERE id = {$dupe_check['id']}");
        } else {
            // already subscribed
            return 'dupe';
        }
    }

    // send confirmation email
    switch ($type) {
        case 'blog':
            $subject = sprintf(CONFIRMATION_MAIL_TITLE, $serendipity['blogTitle']);
            $message = sprintf(CONFIRMATION_MAIL_BLOGSUBSCRIPTION,
                                $name,
                                $serendipity['blogTitle'],
                                $serendipity['baseURL'],
                                serendipity_rewriteURL(PATH_SUBSCRIBE . '/optin/' . $dbhash, 'baseURL'));
            break;

        case 'entry':
            if (empty($target_id)) break;
            $res = serendipity_db_query("SELECT title FROM {$serendipity['dbPrefix']}entries WHERE id = {$target_id}", true);
            if (is_array($res)) {
                $subject = sprintf(NEW_COMMENT_TO_SUBSCRIBED_ENTRY, $res['title']);
                $message = sprintf(CONFIRMATION_MAIL_SUBSCRIPTION,
                                    $name,
                                    $res['title'],
                                    serendipity_archiveURL($target_id, $res['title'], 'baseURL'),
                                    serendipity_rewriteURL(PATH_SUBSCRIBE . '/optin/' . $dbhash, 'baseURL'));
            }
            break;
    }

    serendipity_sendMail($email, $subject, $message, $serendipity['blogMail']);
    return $newid;
}

/**
 * Register a subscription directly without double-opt-in
 *
 * @access public
 * @param the mail address which wants to subscribe
 * @param the type of subscription
 *      blog -> all new articles
 *      entry -> new comments to entries
 *      author -> new articles from author
 *      category -> new articles of a category
 * @param the id of the subscripted target
 * @param the name of the subscriber
 * return 'dupe' when subscription is already active / false for bad email address 
 *          / new subscription ID for success / 'block' if blocked by plugin
 */
function serendipity_subscription($email, $type = 'blog', $target_id = NULL) {
    global $serendipity;

    if (!$serendipity['allowSubscriptions']) { 
        return false;
    }

    $dbhash   = md5(uniqid(rand(), true));

    if ($target_id !== NULL) {
        $target_id = (int)$target_id;
    } else { $target_id = 'NULL'; }
    $type = serendipity_db_escape_string($type);

    $data = array(  'email'     => $email, 
                    'type'      => $type, 
                    'target_id' => $target_id,
                    'lang'      => $serendipity['default_lang']);

    if ($_SESSION['serendipityAuthedUser'] !== true) {
        serendipity_plugin_api::hook_event('frontend_subscribe', $data);
        if ($data['block_subscription']) return 'block';
    }

    // check if subscription already exists
    if ($type == 'entry' || $type == 'author' || $type == 'category') {
        $sql_where = "AND target_id = {$target_id}";
    } elseif ($type == 'blog') {
        $sql_where = '';
    } else {
        return false;
    }

    $sql = "SELECT id, subscribed FROM {$serendipity['dbPrefix']}subscriptions
                                         WHERE email = '{$email}' AND type = '{$type}' {$sql_where}";

    // check if subscription already exists
    $dupe_check = serendipity_db_query("SELECT id, subscribed FROM {$serendipity['dbPrefix']}subscriptions
                                         WHERE email = '{$email}' AND type = '{$type}' {$sql_where}", true);
                    
    if (!is_array($dupe_check)) {
         // register subscription
        serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}subscriptions
                                            (email, type, target_id, subscribed, token, timestamp, lang)
                                        VALUES ('{$email}', '{$type}', {$target_id}, 'true', '{$dbhash}', " . time() . ", '{$serendipity['default_lang']}')");
        return serendipity_db_insert_id();
    } else {
        // already subscribed
        return 'dupe';
    }
}

/**
 * Send Mail to all subscribers which have subscribed
 * to the blog or the author or category of the new entry
 *
 * @access public
 * @param entry array from serendpity_updertentry
 */
function serendipity_mailSubscribers($entry) {
    global $serendipity;

    if (!$serendipity['allowSubscriptions']) {
        return false;
    }

    // Author data
    $res = serendipity_db_query("SELECT realname FROM {$serendipity['dbPrefix']}authors
                                                 WHERE authorid = {$entry['authorid']}", true);

    if (is_array($res)) {
        $entry['author'] = $res['realname'];

        $authorData = array(
                        'authorid' => $entry['authorid'],
                        'username' => $res['username'],
                        'email'    => $res['email'],
                        'realname' => $entry['author']
        );
    }

    $entry['signature'] = str_replace("\n", '<br>', sprintf(SIGNATURE, $serendipity['blogTitle'], '<a href="https://s9y.org">s9y.org</a>'));
    $entry['intro'] = sprintf(SUBSCRIPTION_MAIL_INTRO, "<a href='{$serendipity['baseURL']}'>{$serendipity['blogTitle']}</a>");
    $entry['outro'] = sprintf(SUBSCRIPTION_MAIL_OUTRO, "<a href='{$serendipity['baseURL']}'>{$serendipity['blogTitle']}</a>");
    $entry['link_author'] = serendipity_authorURL($authorData, 'baseURL');
    $entry['link'] = serendipity_archiveURL($entry['id'], $entry['title'], 'baseURL', true, array('timestamp' => $entry['timestamp']));

    $subject = '[' . SUBSCRIPTION_NEW_ARTICLE . '] ' . strip_tags($entry['title']);

    // generate content
    // plain text version
    $html2text = new \voku\Html2Text\Html2Text(
        $entry['body'],
        array(
            'width' => 0
            )
        );

    $html2text->setBaseUrl(trim($serendipity['baseURL'],'/'));

    $bodytxt = sprintf(SUBSCRIPTION_MAIL_INTRO, '"'. $serendipity['blogTitle'] . '" <' . $serendipity['baseURL'] . '> ') . "\r\n\r\n"
            . strtoupper($entry['title']) . "\r\n" . "====\r\n\r\n"
            . POSTED_BY . ' ' . $entry['author'] . ' ' . ON . ' ' . serendipity_strftime(DATE_FORMAT_SHORT, $entry['timestamp']) . "\r\n\r\n";

            if ($serendipity['subscribeChunk'] == 'med') {
                $bodytxt .= $html2text->getText() . "\r\n\r\n";
            }

    $bodytxt .= sprintf(VIEW_EXTENDED_ENTRY, $entry['title']) . ': '
            . serendipity_archiveURL($entry['id'], $entry['title'], 'baseURL', true, array('timestamp' => $entry['timestamp'])) . "\r\n\r\n"
            . sprintf(SUBSCRIPTION_MAIL_OUTRO, '"' . $serendipity['blogTitle'] . '" <' . $serendipity['baseURL'] . '> ');

    // html version: send entry body and title to smarty template
    if ($serendipity['sendSubscriptionHtml']) {
        $serendipity['smarty']->assign('entrymail',$entry);
        $serendipity['smarty']->assign('subscribeChunk', $serendipity['subscribeChunk']);
        $smartyOutput = $serendipity['smarty']->fetch('file:'. serendipity_getTemplateFile('email.tpl', 'serendipityPath', true), null, null, null, (false && $serendipity['smarty_raw_mode']));

        // replace internal links with external ones
        $smartyOutput = str_replace("href='/", "href='" . $serendipity['baseURL'],  $smartyOutput);
        $smartyOutput = str_replace('href="/', 'href="' . $serendipity['baseURL'],  $smartyOutput);

        // replace internal img src
        $smartyOutput = str_replace("src='/", "src='" . $serendipity['baseURL'],  $smartyOutput);
        $smartyOutput = str_replace('src="/', 'src="' . $serendipity['baseURL'],  $smartyOutput);

        // replace some html5 tags (not supported in Windows Mail, Live Mail etc)
        $smartyOutput = str_replace('<figure', '<div',  $smartyOutput);
        $smartyOutput = str_replace('</figure', '</div',  $smartyOutput);
        $smartyOutput = str_replace('<figcaption', '<div',  $smartyOutput);
        $smartyOutput = str_replace('</figcaption', '</div',  $smartyOutput);

        // remove iframes
        $smartyOutput = preg_replace(array('@<iframe[^>]*>@', '@</iframe>@'), '', $smartyOutput);

        // get html head part
        $htmlhead = file_get_contents(serendipity_getTemplateFile('emailhead.txt', 'serendipityPath'));
        $htmlhead = str_replace('{$CONST.LANG_CHARSET}', LANG_CHARSET, $htmlhead);
        $htmlhead = str_replace('{$title}', htmlspecialchars($entry['title']), $htmlhead);
    }

    // $entry['authorid']
    // $entry['categories']['categoryid']
    $cond = array();
    if ($serendipity['dbType'] == 'postgres' ||
        $serendipity['dbType'] == 'pdo-postgres') {
        $cond['group']    = '';
        $cond['distinct'] = 'DISTINCT ON';
    } else {
        $cond['group']    = 'GROUP BY email';
        $cond['distinct'] = '';
    }

    $catsql = array();
    if (is_array($entry['categories'])) {
        foreach ($entry['categories'] as $cat) {
            $catsql[] = "target_id = " . (int)$cat;
        }
    }

    $cond['where'] = "subscribed = 'true'";
    $cond['where'] .= " AND (
        type = 'blog' OR
        ( type = 'author' AND target_id = " . (int)$entry['authorid'] . " ) ";

    if (count($catsql)) {
        $cond['where'] .= "OR ( type = 'category' AND ( " . implode(' OR ', $catsql) . '))';
    }
    $cond['where'] .= ')';

    $sql = "SELECT {$cond['distinct']} email, token FROM {$serendipity['dbPrefix']}subscriptions WHERE {$cond['where']} {$cond['group']}";

    // fetch array of subscribers
    $subscribers = serendipity_db_query($sql, false, 'assoc');

    if (is_array($subscribers)) {
        echo '<div>&#8226; ' . sprintf(MAILTO_SUBSCRIBERS, count($subscribers)) . '</div>';
        foreach ($subscribers as $sub) {
            $email = $sub['email'];
            $unsubscribelink = serendipity_rewriteURL(PATH_UNSUBSCRIBE . '/' . $sub['token'], 'baseURL');

            if ($serendipity['sendSubscriptionHtml']) {
                $smartyOutput = str_replace('%unsubscribe%', "<a href='{$unsubscribelink}'>{$unsubscribelink}</a>", $smartyOutput);
                serendipity_sendMail($email, $subject, $bodytxt . $unsubscribelink, $serendipity['blogMail'], null, null, $htmlhead . $smartyOutput);
            } else {
                serendipity_sendMail($email, $subject, $bodytxt . $unsubscribelink, $serendipity['blogMail']);
            }
        }
        echo '<div>&#8226; ' . MAILTO_SUBSCRIBERS_SUCCESS . '</div>';
    }
}

/**
 * Fetch an array of subscriptions from the database
 *
 * @access public
 * @param WHERE filter
 * return array result
 */
function serendipity_fetchSubscriptions($filter_sql, $order_sql = '', $limit_sql = '') {
    global $serendipity;

    if (empty($filter_sql)) {
        $filter_sql = 1; // show all
    }

    if (!empty($order_sql)) {
        $order_sql = 'ORDER BY ' . $order_sql;
    }

    if (!empty($limit_sql)) {
        $limit_sql = serendipity_db_limit_sql($limit_sql);
    }
    
    $sql = "SELECT  s.id,
                    s.email,
                    s.type,
                    s.target_id,
                    s.subscribed,
                    s.timestamp,
                    e.title,
                    c.category_name,
                    a.username
            FROM {$serendipity['dbPrefix']}subscriptions s
            LEFT JOIN {$serendipity['dbPrefix']}entries e
            ON (s.type = 'entry' AND s.target_id = e.id )
            LEFT JOIN {$serendipity['dbPrefix']}category c
            ON (s.type = 'category' AND s.target_id = c.categoryid )
            LEFT JOIN {$serendipity['dbPrefix']}authors a
            ON (s.type = 'author' AND s.target_id = a.authorid )
            WHERE {$filter_sql}
            {$order_sql}
            {$limit_sql}";

    return serendipity_db_query($sql,false,'assoc');
}

/**
 * Fetch the total number of subscriptions from the database
 *
 * @access public
 * return int result
 */
function serendipity_getTotalSubscriptions($filter_sql = '') {
    global $serendipity;

    if (empty($filter_sql)) $filter_sql = 1;

    $fullCountQuery = "FROM {$serendipity['dbPrefix']}subscriptions WHERE {$filter_sql}";

    if ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite' || $serendipity['dbType'] == 'sqlite3oo') {
        $querystring  = "SELECT count(id) {$fullCountQuery} GROUP BY e.id";
    } else {
        $querystring  = "SELECT count(distinct id) {$fullCountQuery}";
    }

    $query =& serendipity_db_query($querystring);

    if (is_array($query) && isset($query[0])) {
        if ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite' || $serendipity['dbType'] == 'sqlite3oo') {
            return count($query);
        } else {
            return $query[0][0];
        }
    }

    return 0;
}
