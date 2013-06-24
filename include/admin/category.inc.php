<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('adminCategories')) {
    return;
}

$admin_category = (!serendipity_checkPermission('adminCategoriesMaintainOthers') ? "AND (authorid = 0 OR authorid = " . (int)$serendipity['authorid'] . ")" : '');
$data = array();
/* Add a new category */
if (isset($_POST['SAVE']) && serendipity_checkFormToken()) {
    $name     = $serendipity['POST']['cat']['name'];
    $desc     = $serendipity['POST']['cat']['description'];
    $data['post_save'] = true;
    if (is_array($serendipity['POST']['cat']['write_authors']) && in_array(0, $serendipity['POST']['cat']['write_authors'])) {
        $authorid = 0;
    } else {
        $authorid = $serendipity['authorid'];
    }

    $icon     = $serendipity['POST']['cat']['icon'];
    $parentid = (isset($serendipity['POST']['cat']['parent_cat']) && is_numeric($serendipity['POST']['cat']['parent_cat'])) ? $serendipity['POST']['cat']['parent_cat'] : 0;

    if ($serendipity['GET']['adminAction'] == 'new') {
        $data['new'] = true;
        if ($parentid != 0) {
            // TODO: This doesn't seem to work as expected, serendipity_rebuildCategoryTree(); is still needed! Only activate this optimization function when it's really working :)
            // TODO: This works if only one subcategory exists.  Otherwise, the first query will return an array.
            /*
            $res = serendipity_db_query("SELECT category_right FROM {$serendipity['dbPrefix']}category WHERE parentid={$parentid}");
            serendipity_db_query("UPDATE {$serendipity['dbPrefix']}category SET category_left=category_left+2, category_right=category_right+2 WHERE category_right>{$res}");
            */
        }

        $catid = serendipity_addCategory($name, $desc, $authorid, $icon, $parentid);
        serendipity_ACLGrant($catid, 'category', 'read', $serendipity['POST']['cat']['read_authors']);
        serendipity_ACLGrant($catid, 'category', 'write', $serendipity['POST']['cat']['write_authors']);
    } elseif ($serendipity['GET']['adminAction'] == 'edit') {
            $data['edit'] = true;
            if (!serendipity_checkPermission('adminCategoriesMaintainOthers') && !serendipity_ACLCheck($serendipity['authorid'], $serendipity['GET']['cid'], 'category', 'write')) {
                $data['editPermission'] = false;
            } else {
                /* Check to make sure parent is not a child of self */
                $r = serendipity_db_query("SELECT categoryid FROM {$serendipity['dbPrefix']}category c
                                                WHERE c.categoryid = ". (int)$parentid ."
                                                    AND c.category_left BETWEEN " . implode(' AND ', serendipity_fetchCategoryRange((int)$serendipity['GET']['cid'])));
                if (is_array($r)) {
                    $r = serendipity_db_query("SELECT category_name FROM {$serendipity['dbPrefix']}category
                                                        WHERE categoryid = ". (int)$parentid);
                   $data['subcat'] = sprintf(ALREADY_SUBCATEGORY, htmlspecialchars($r[0]['category_name']), htmlspecialchars($name));
                } else {
                    serendipity_updateCategory($serendipity['GET']['cid'], $name, $desc, $authorid, $icon, $parentid, $serendipity['POST']['cat']['sort_order'], $serendipity['POST']['cat']['hide_sub'], $admin_category);
                    serendipity_ACLGrant($serendipity['GET']['cid'], 'category', 'read', $serendipity['POST']['cat']['read_authors']);
                    serendipity_ACLGrant($serendipity['GET']['cid'], 'category', 'write', $serendipity['POST']['cat']['write_authors']);
                }
            }
    }

    serendipity_rebuildCategoryTree();
    $serendipity['GET']['adminAction'] = 'view';
}

/* Delete a category */
if ($serendipity['GET']['adminAction'] == 'doDelete' && serendipity_checkFormToken()) {
    $data['doDelete'] = true;
    if ($serendipity['GET']['cid'] != 0) {
        $remaining_cat = (int)$serendipity['POST']['cat']['remaining_catid'];
        $category_ranges = serendipity_fetchCategoryRange((int)$serendipity['GET']['cid']);
        $category_range  = implode(' AND ', $category_ranges);
        if ($serendipity['dbType'] == 'postgres' || $serendipity['dbType'] == 'sqlite' || $serendipity['dbType'] == 'sqlite3' || $serendipity['dbType'] == 'pdo-sqlite') {
            $query = "UPDATE {$serendipity['dbPrefix']}entrycat
                        SET categoryid={$remaining_cat} WHERE entryid IN
                        (
                          SELECT DISTINCT(e.id) FROM {$serendipity['dbPrefix']}entries e,
                          {$serendipity['dbPrefix']}category c,
                          {$serendipity['dbPrefix']}entrycat ec
                          WHERE e.id=ec.entryid AND c.categoryid=ec.categoryid
                          AND c.category_left BETWEEN {$category_range} {$admin_category}
                        )";
        } else {
            $query = "UPDATE {$serendipity['dbPrefix']}entries e,
                        {$serendipity['dbPrefix']}entrycat ec,
                        {$serendipity['dbPrefix']}category c
                      SET ec.categoryid={$remaining_cat}
                        WHERE e.id = ec.entryid
                          AND c.categoryid = ec.categoryid
                          AND c.category_left BETWEEN {$category_range}
                          {$admin_category}";
        }

        serendipity_db_query($query);
        if (serendipity_deleteCategory($category_range, $admin_category) ) {

            foreach($category_ranges AS $cid) {
                if (serendipity_ACLCheck($serendipity['authorid'], $cid, 'category', 'write')) {
                    serendipity_ACLGrant($cid, 'category', 'read', array());
                    serendipity_ACLGrant($cid, 'category', 'write', array());
                }
            }
            $data['deleteSuccess'] = true;
            $data['remaining_cat'] = $remaining_cat;
            $data['cid'] = (int)$serendipity['GET']['cid'];
            $serendipity['GET']['adminAction'] = 'view';
        }
    } else {
        $data['deleteSuccess'] = false;
    }
}

if ( $serendipity['GET']['adminAction'] == 'delete' ) {
    $data['delete'] = true;
    $this_cat = serendipity_fetchCategoryInfo($serendipity['GET']['cid']);
    if (   (serendipity_checkPermission('adminCategoriesDelete') && serendipity_checkPermission('adminCategoriesMaintainOthers'))
        || (serendipity_checkPermission('adminCategoriesDelete') && ($serendipity['authorid'] == $this_cat['authorid'] || $this_cat['authorid'] == '0'))
        || (serendipity_checkPermission('adminCategoriesDelete') && serendipity_ACLCheck($serendipity['authorid'], $serendipity['GET']['cid'], 'category', 'write'))) {
        $data['deletePermission'] = true;
        $data['cid'] = (int)$serendipity['GET']['cid'];
        $data['formToken'] = serendipity_setFormToken();
        $data['categoryName'] = $this_cat['category_name'];
        $cats = serendipity_fetchCategories('all');
        $data['cats'] = array();
        /* TODO, show dropdown as nested categories */
        foreach ($cats as $cat_data) {
            if ($cat_data['categoryid'] != $serendipity['GET']['cid'] && (serendipity_checkPermission('adminCategoriesMaintainOthers') || $cat_data['authorid'] == '0' || $cat_data['authorid'] == $serendipity['authorid'])) {
                $data['cats'][] = $cat_data;
               
            }
        }
    }
}



if ( $serendipity['GET']['adminAction'] == 'edit' || $serendipity['GET']['adminAction'] == 'new' ) {
    if ( $serendipity['GET']['adminAction'] == 'edit' ) {
        $data['edit'] = true;
        $cid = (int)$serendipity['GET']['cid'];
        $this_cat = serendipity_fetchCategoryInfo($cid);
        $data['category_name'] = $this_cat['category_name'];
        $save = SAVE;
        $read_groups  = serendipity_ACLGet($cid, 'category', 'read');
        $write_groups = serendipity_ACLGet($cid, 'category', 'write');
    } else {
        $data['new'] = true;
        $cid = false;
        $this_cat = array();
        echo '<h2>'. CREATE_NEW_CAT .'</h2>';
        $save = CREATE;
        $read_groups  = array(0 => 0);
        $write_groups = array(0 => 0);
    }
    $data['cid'] = $cid;
    $data['this_cat'] = $this_cat;
    $data['save'] = $save;
    
    $groups = serendipity_getAllGroups();
    $data['groups'] = $groups;
    $data['read_groups'] = $read_groups;
    $data['write_groups'] = $write_groups;

    $data['formToken'] = serendipity_setFormToken();
    $data['cat'] = $this_cat;
    if (!is_array($this_cat) || (isset($this_cat['authorid']) && $this_cat['authorid'] == '0') || isset($read_groups[0])) {
        $data['selectAllReadAuthors'] = true;
    }
    if (!is_array($this_cat) || (isset($this_cat['authorid']) && $this_cat['authorid'] == '0') || isset($write_groups[0])) {
        $data['selectAllWriteAuthors'] = true;
    }

    $categories = serendipity_fetchCategories('all');
    $categories = serendipity_walkRecursive($categories, 'categoryid', 'parentid', VIEWMODE_THREADED);
    $data['categories'] = $categories;
    serendipity_plugin_api::hook_event('backend_category_showForm', $cid, $this_cat);
}

    

if ( $serendipity['GET']['adminAction'] == 'view' ) {
    if (empty($admin_category)) {
        $cats = serendipity_fetchCategories('all');
    } else {
        $cats = serendipity_fetchCategories(null, null, null, 'write');
    }
    $data['view'] = true;
    $data['viewCats'] = $cats;

    if ( is_array($cats) ) {
        $categories = serendipity_walkRecursive($cats, 'categoryid', 'parentid', VIEWMODE_THREADED);
        $data['viewCategories'] = $categories;
    }
}

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

echo serendipity_smarty_show('admin/category.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
