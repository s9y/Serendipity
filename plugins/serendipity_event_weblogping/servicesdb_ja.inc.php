<?php # $Id$

##########################################################################
# serendipity - another blogger...                                       #
##########################################################################
#                                                                        #
# (c) 2003 Jannis Hermanns <J@hacked.it>                                 #
# http://www.jannis.to/programming/serendipity.html                      #
#                                                                        #
##########################################################################

        $servicesdb = array(
            array(
              'name'        => 'BLOGGERS.JP',
              'host'        => 'ping.bloggers.jp',
              'path'        => '/rpc/',
              'extended' => false
            ),

            array(
              'name'        => 'blogpeople.net',
              'host'        => 'www.blogpeople.net',
              'path'        => '/servlet/weblogUpdates',
              'extended' => true
            ),

            array(
              'name'        => 'ココログ',
              'host'        => 'ping.cocolog-nifty.com',
              'path'        => '/xmlrpc',
              'extended' => true // false
            ),

            array(
              'name'        => 'goo',
              'host'        => 'blog.goo.ne.jp',
              'path'        => '/XMLRPC',
              'extended' => false
            ),

            array(
              'name'        => 'bulkfeeds',
              'host'        => 'bulkfeeds.net',
              'path'        => '/rpc',
              'extended' => true // false
            ),

            array(
              'name'        => '人気blogランキング (ブログランキング)',
              'host'        => 'blog.with2.net',
              'path'        => '/ping.php/',
              'extended' => false
            ),

            array(
              'name'        => 'blogrolling',
              'host'        => 'rpc.blogrolling.com',
              'path'        => '/pinger/',
              'extended' => false
            ),

            array(
              'name'        => 'dontpushme.com',
              'host'        => 'www.dontpushme.com',
              'path'        => '/ft/XmlRpc/Daily.do',
              'extended' => true // false
            ),

//            array(
//              'name'        => 'Excite エキサイト ： ブログ（blog）',
//              'host'        => 'ping.exblog.jp',
//              'path'        => '/xmlrpc',
//              'extended' => true // false
//            ),

            array(
              'name'        => 'blogdb.jp',
              'host'        => 'blogdb.jp',
              'path'        => '/xmlrpc',
              'extended' => false
            ),

//            array(
//              'name'        => 'BLOGOOGLE(ブログール)　Pingサーバ',
//              'host'        => 'www.blogoole.com',
//              'path'        => '/ping/',
//              'extended' => false
//            ),

            array(
              'name'        => 'にほんブログ村',
              'host'        => 'ping.blogmura.jp',
              'path'        => '/rpc/',
              'extended' => false
            ),

            array(
              'name'        => 'ブログスタイル',
              'host'        => 'blogstyle.jp',
              'path'        => '/xmlrpc/',
              'extended' => false
            ),

            array(
              'name'        => '化け犬.jp',
              'host'        => 'trackback.bakeinu.jp',
              'path'        => '/bakeping.php',
              'extended' => false
            ),

            array(
              'name'        => 'GPost BLOG',
              'host'        => 'ping.gpost.info',
              'path'        => '/xmlrpc',
              'extended' => false
            ),

            array(
              'name'        => 'Amagle ping service',
              'host'        => 'ping.amagle.com',
              'path'        => '/',
              'extended' => false
            ),

            array(
              'name'        => '週刊ブログランキングくつろぐ',
              'host'        => 'kutsulog.net',
              'path'        => '/ping.cgi',
              'extended' => false
            ),

            array(
              'name'        => 'Technorati JAPAN',
              'host'        => 'rpc.technorati.jp',
              'path'        => '/rpc/ping',
              'extended' => false
            ),

            array(
              'name'        => 'livedoor reader',
              'host'        => 'rpc.reader.livedoor.com',
              'path'        => '/ping',
              'extended' => false
            ),

            array(
              'name'        => 'ドリコム',
              'host'        => 'ping.rss.drecom.jp',
              'path'        => '/',
              'extended' => false
            ),

            array(
              'name'        => 'Ask jp',
              'host'        => 'ping.ask.jp',
              'path'        => '/xmlrpc.m',
              'extended' => false
            ),

            array(
              'name'        => 'livedoor Reader',
              'host'        => 'rpc.reader.livedoor.com',
              'path'        => '/ping',
              'extended' => false
            ),

            array(
              'name'        => 'FeedPing.net',
              'host'        => 'rpc.feedping.net',
              'path'        => '/',
              'extended'    => false
            )
        );
?>
