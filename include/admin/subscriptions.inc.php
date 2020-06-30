<?php
# Copyright (c) 2020, Stephan Brunker (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('adminSubscriptions')) {
    return;
}

$per_page   = array('12', '16', '50', '100');
$sort_order = array('timestamp'     => DATE,
                    'email'         => EMAIL,
                    'type'        => SUBSCRIPTION_TYPE);

$type = array('blog' => BLOG,
            'entry' => ENTRY,
            'category' => CATEGORY,
            'author' => AUTHOR);

$state = array('subscribed' => SUBSCRIBED,
                'optin' => OPTIN_PENDING);

$data = array();

//set flag for output notifications
$data['switched_output'] = false;

// build multilingual stripped category array
$categories = serendipity_db_query("SELECT category_name FROM {$serendipity['dbPrefix']}category");
$categories_strip = $categories;
serendipity_plugin_api::hook_event('multilingual_strip_langs',$categories_strip, array('category_name'));
$categories = array_column($categories, 'category_name');
$categories_strip = array_column($categories_strip, 'category_name');
$categories = array_combine($categories, $categories_strip);

switch($serendipity['GET']['adminAction']) {

    case 'doDelete':
        if (!serendipity_checkFormToken() || !isset($serendipity['GET']['id'])) {
            break;
        }

        $filter_sql = 's.id = ' . (int)$serendipity['GET']['id'];
        $sub = serendipity_fetchSubscriptions($filter_sql);
        serendipity_deleteSubscription((int)$serendipity['GET']['id']);
        $data['switched_output'] = true;
        $data['is_doDelete']     = true;
        switch ($sub[0]['type']) {
            case 'entry':
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . ENTRY . ' - ' . $sub[0]['title']);
                break;
            case 'category':
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . CATEGORY . ' - ' . $categories[$sub[0]['category_name']]);
                break;
            case 'author':
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . AUTHOR . ' - ' . $sub[0]['username']);
                break;
            default:
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . BLOG);
                break;
        }
                
        $data['del_sub']       = sprintf(RIP_SUB, $msg);

    case 'doMultiDelete':
        if ($serendipity['GET']['adminAction'] != 'doDelete') {
            if (!serendipity_checkFormToken() || !isset($serendipity['GET']['id'])) {
                break;
            }

            $parts = explode(',', $serendipity['GET']['id']);
            $data['switched_output'] = true;
            $data['del_sub']       = array();
            foreach($parts AS $id) {
                $id = (int)$id;
                if ($id > 0) {
                    $filter_sql = 's.id = ' . $id;
                    $sub = serendipity_fetchSubscriptions($filter_sql);
                    serendipity_deleteSubscription($id);
                    switch ($sub[0]['type']) {
                        case 'entry':
                            $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . ENTRY . ' - ' . $sub[0]['title']);
                            break;
                        case 'category':
                            $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . CATEGORY . ' - ' . $categories[$sub[0]['category_name']]);
                            break;
                        case 'author':
                            $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . AUTHOR . ' - ' . $sub[0]['username']);
                            break;
                        default:
                            $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . BLOG);
                            break;
                    }
                    $data['is_doMultiDelete'] = true;
                    $data['del_sub'][]      = sprintf(RIP_SUB, $msg);
                }
            }
        }

    case 'show':
        $filter_import = array('email', 'type');
        $sort_import   = array('perPage', 'ordermode', 'order');

        foreach($filter_import AS $f_import) {
            serendipity_restoreVar($serendipity['COOKIE']['subscriptionlist_filter_' . $f_import], serendipity_specialchars($serendipity['GET']['filter'][$f_import]));
            $data["get_filter_$f_import"] = serendipity_specialchars($serendipity['GET']['filter'][$f_import]);
        }

        foreach($sort_import AS $s_import) {
            serendipity_restoreVar($serendipity['COOKIE']['suscriptionlist_sort_' . $s_import], serendipity_specialchars($serendipity['GET']['sort'][$s_import]));
            $data["get_sort_$s_import"] = serendipity_specialchars($serendipity['GET']['sort'][$s_import]);
        }

        $perPage = (!empty($serendipity['GET']['sort']['perPage']) ? $serendipity['GET']['sort']['perPage'] : $per_page[0]);
        $page    = (int)$serendipity['GET']['page'];
        $offSet  = $perPage*$page;

        if (empty($serendipity['GET']['sort']['ordermode']) || $serendipity['GET']['sort']['ordermode'] != 'ASC') {
            $serendipity['GET']['sort']['ordermode'] = 'DESC';
        }

        if (!empty($serendipity['GET']['sort']['order']) && !empty($sort_order[$serendipity['GET']['sort']['order']])) {
            $orderby = serendipity_db_escape_string($serendipity['GET']['sort']['order'] . ' ' . $serendipity['GET']['sort']['ordermode']);
        } else {
            $orderby = 'timestamp ' . serendipity_db_escape_string($serendipity['GET']['sort']['ordermode']);
        }

        $filter = array();

        // filter the subscriptions
        // filter for blog subscriptions and article subscriptions
        if (!empty($serendipity['GET']['filter']['type'])
                && array_key_exists($serendipity['GET']['filter']['type'], $type )) {
            $filter[] = "type = '" . serendipity_db_escape_string($serendipity['GET']['filter']['type']) . "'";
        }

        if (!empty($serendipity['GET']['filter']['state'])
                && array_key_exists($serendipity['GET']['filter']['state'], $state )) {
            switch ($serendipity['GET']['filter']['state']) {
                case 'optin':
                    $filter[] = "subscribed = 'false'";
                    break;
                case 'subscribed':
                    $filter[] = "subscribed = 'true'";
                    break;
            }
        }

        // filter for specific emails
        if (!empty($serendipity['GET']['filter']['email'])) {
            $term = serendipity_db_escape_string($serendipity['GET']['filter']['email']);
            if ($serendipity['dbType'] == 'postgres' || $serendipity['dbType'] == 'pdo-postgres') {
                    $filter[] = "s.email ILIKE '%$term%'";
            } elseif ($serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite' || $serendipity['dbType'] == 'sqlite3oo') {
                $term = str_replace('*', '%', $term);
                $term = serendipity_mb('strtolower', $term);
                $filter[] = "lower(s.email) LIKE '%$term%'";
            } else {
                $filter[] = "s.email LIKE '%$term%'";
            }
        }

        $filter_sql = implode(' AND ', $filter);
        $limit = serendipity_db_limit( $offSet, $perPage + 1);

        $subscriptions = serendipity_fetchSubscriptions($filter_sql, $orderby, $limit);

        $data['drawList']   = true;
        $data['sort_order'] = $sort_order;
        $data['perPage']    = $perPage;
        $data['per_page']   = $per_page;
        $data['urltoken']   = serendipity_setFormToken('url');
        $data['formtoken']  = serendipity_setFormToken();
        $data['offSet']     = $offSet;
        $data['use_iframe'] = $serendipity['use_iframe'];
        $data['page']       = $page;

        $data['totalSubscriptions']  = serendipity_getTotalSubscriptions($filter_sql);
        $data['simpleFilters'] = $serendipity['simpleFilters'];

        if (is_array($subscriptions)) {
            $data['is_subscriptions'] = true;
            $data['count'] = count($subscriptions);

            $qString = '?serendipity[adminModule]=subscriptions&amp;serendipity[adminAction]=show';
            foreach ((array)$serendipity['GET']['sort'] as $k => $v) {
                $qString .= '&amp;serendipity[sort]['. $k .']='. $v;
            }
            foreach ((array)$serendipity['GET']['filter'] as $k => $v) {
                $qString .= '&amp;serendipity[filter]['. $k .']='. $v;
            }

            $data['linkPrevious'] = $qString . '&amp;serendipity[page]=' . ($page-1);
            $data['linkNext']     = $qString . '&amp;serendipity[page]=' . ($page+1);

            $smartsubs = array();
            foreach ($subscriptions as $sb) {

                switch ($sb['type']) {
                    case 'entry':
                        $target = $sb['title'];
                        break;
                    case 'category':
                        $target = $categories[$sb['category_name']];
                        break;
                    case 'author':
                        $target = $sb['username'];
                        break;
                    default:
                        $target = null;
                        break;
                }

                $smartsub = array(
                    'id'            => $sb['id'],
                    'email'         => serendipity_specialchars($sb['email']),
                    'timestamp'     => (int) $sb['timestamp'],
                    'type'          => $type[$sb['type']],
                    'target'        => $target,
                    'subscribed'    => $sb['subscribed']
                    );
                $smartsubs[] = $smartsub;
            }

            $data['subscriptions']     = $smartsubs;
            $data['urltoken']          = serendipity_setFormToken('url');
            $data['formtoken']         = serendipity_setFormToken();
            $data['serverOffsetHour']  = serendipity_serverOffsetHour();
            $data['filter_import']     = $filter_import;
            $data['sort_import']       = $sort_import;
        } else {
            $data['no_subscriptions'] = true;
        }
        break;

    case 'delete':
        if (!serendipity_checkFormToken() || !isset($serendipity['GET']['id'])) {
            break;
        }

        $newLoc = '?' . serendipity_setFormToken('url') . '&amp;serendipity[action]=admin&amp;serendipity[adminModule]=subscriptions&amp;serendipity[adminAction]=doDelete&amp;serendipity[id]=' . (int)$serendipity['GET']['id'];

        $filter_sql = 's.id = ' . (int)$serendipity['GET']['id'];
        $sub = serendipity_fetchSubscriptions($filter_sql);
        $data['switched_output'] = true;
        $data['is_delete']       = true;
        $data['newLoc']          = $newLoc;
        // for smartification printf had to turn into sprintf!!
        
        switch ($sub[0]['type']) {
            case 'entry':
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . ENTRY . ' - ' . $sub[0]['title']);
                break;
            case 'category':
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . CATEGORY . ' - ' . $categories[$sub[0]['category_name']]);
                break;
            case 'author':
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . AUTHOR . ' - ' . $sub[0]['username']);
                break;
            default:
                $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . BLOG);
                break;
        }
        
        $data['rip_subscription'] = sprintf(DELETE_SURE, $msg);
        break;

    case 'multidelete':
        if (!serendipity_checkFormToken()) {
            break;
        }

        if (!is_array($serendipity['POST']['multiDelete'])) {
            echo '<div class="msg_notice"><span class="icon-attention-circled" aria-hidden="true"></span> ' . sprintf(MULTICHECK_NO_ITEM, serendipity_specialchars($_SERVER['HTTP_REFERER'])) . '</div>'."\n";
            break;
        }

        $ids = '';
        $data['rip_subscription'] = array();
        foreach($serendipity['POST']['multiDelete'] AS $idx => $id) {
            $ids .= (int)$id . ',';
            $filter_sql = 's.id = ' . (int)$id;
            $sub = serendipity_fetchSubscriptions($filter_sql);
            switch ($sub[0]['type']) {
                case 'entry':
                    $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . ENTRY . ' - ' . $sub[0]['title']);
                    break;
                case 'category':
                    $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . CATEGORY . ' - ' . $categories[$sub[0]['category_name']]);
                    break;
                case 'author':
                    $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . AUTHOR . ' - ' . $sub[0]['username']);
                    break;
                default:
                    $msg = $sub[0]['id'] . ' - ' . serendipity_specialchars($sub[0]['email'] . ': ' . BLOG);
                    break;
            }
            
            $data['is_multidelete'] = true;
            $data['rip_subscription'][]    = sprintf(DELETE_SURE, $msg);
        }
        $newLoc = '?' . serendipity_setFormToken('url') . '&amp;serendipity[action]=admin&amp;serendipity[adminModule]=subscriptions&amp;serendipity[adminAction]=doMultiDelete&amp;serendipity[id]=' . $ids;
        $data['switched_output'] = true;
        $data['newLoc']          = $newLoc;
        break;
}

$data['errors'] = $errors;
$data['get'] = $serendipity['GET']; // don't trust {$smarty.get.vars} if not proofed, as we often change GET vars via serendipty['GET'] by runtime
// make sure we've got these
if (!isset($data['urltoken']))  $data['urltoken']  = serendipity_setFormToken('url');
if (!isset($data['formtoken'])) $data['formtoken'] = serendipity_setFormToken();

echo serendipity_smarty_show('admin/subscriptions.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
