-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: serendipity
-- ------------------------------------------------------
-- Server version	5.6.30-1
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `serendipity_utf_access`
--

DROP TABLE IF EXISTS `serendipity_utf_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_access` (
  `groupid` int(10) unsigned NOT NULL DEFAULT '0',
  `artifact_id` int(10) unsigned NOT NULL DEFAULT '0',
  `artifact_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `artifact_mode` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `artifact_index` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  KEY `accessgroup_idx` (`groupid`),
  KEY `accessgroupT_idx` (`artifact_id`,`artifact_type`,`artifact_mode`),
  KEY `accessforeign_idx` (`artifact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_authorgroups`
--

DROP TABLE IF EXISTS `serendipity_utf_authorgroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_authorgroups` (
  `groupid` int(10) unsigned NOT NULL DEFAULT '0',
  `authorid` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `authorgroup_idxA` (`groupid`),
  KEY `authorgroup_idxB` (`authorid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_authors`
--

DROP TABLE IF EXISTS `serendipity_utf_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_authors` (
  `realname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorid` int(11) NOT NULL AUTO_INCREMENT,
  `mail_comments` int(1) DEFAULT '1',
  `mail_trackbacks` int(1) DEFAULT '1',
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `userlevel` int(4) unsigned NOT NULL DEFAULT '0',
  `right_publish` int(1) DEFAULT '1',
  `hashtype` int(1) DEFAULT '0',
  PRIMARY KEY (`authorid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_category`
--

DROP TABLE IF EXISTS `serendipity_utf_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_description` text COLLATE utf8_unicode_ci,
  `authorid` int(11) DEFAULT NULL,
  `category_left` int(11) DEFAULT '0',
  `category_right` int(11) DEFAULT '0',
  `parentid` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(11) DEFAULT NULL,
  `hide_sub` int(1) DEFAULT NULL,
  PRIMARY KEY (`categoryid`),
  KEY `categorya_idx` (`authorid`),
  KEY `categoryp_idx` (`parentid`),
  KEY `categorylr_idx` (`category_left`,`category_right`),
  KEY `categoryso_idx` (`sort_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_comments`
--

DROP TABLE IF EXISTS `serendipity_utf_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` int(10) unsigned DEFAULT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'regular',
  `subscribed` enum('true','false') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `referer` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commentry_idx` (`entry_id`),
  KEY `commpentry_idx` (`parent_id`),
  KEY `commtype_idx` (`type`),
  KEY `commstat_idx` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_config`
--

DROP TABLE IF EXISTS `serendipity_utf_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_config` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `authorid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`,`authorid`),
  KEY `configauthorid_idx` (`authorid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_cronjoblog`
--

DROP TABLE IF EXISTS `serendipity_utf_cronjoblog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_cronjoblog` (
  `timestamp` int(10) DEFAULT NULL,
  `type` varchar(255) COLLATE latin1_general_cs DEFAULT NULL,
  `reason` text COLLATE utf8_unicode_ci,
  KEY `kspamidx` (`timestamp`),
  KEY `kspamtypeidx` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_entries`
--

DROP TABLE IF EXISTS `serendipity_utf_entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` int(10) unsigned DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  `comments` int(4) unsigned DEFAULT '0',
  `trackbacks` int(4) unsigned DEFAULT '0',
  `extended` longtext COLLATE utf8_unicode_ci,
  `exflag` int(1) DEFAULT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorid` int(11) DEFAULT NULL,
  `isdraft` enum('true','false') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  `allow_comments` enum('true','false') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  `last_modified` int(10) unsigned DEFAULT NULL,
  `moderate_comments` enum('true','false') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  PRIMARY KEY (`id`),
  KEY `date_idx` (`timestamp`),
  KEY `mod_idx` (`last_modified`),
  KEY `edraft_idx` (`isdraft`),
  KEY `eauthor_idx` (`authorid`),
  FULLTEXT KEY `entry_idx` (`title`,`body`,`extended`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_entrycat`
--

DROP TABLE IF EXISTS `serendipity_utf_entrycat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_entrycat` (
  `entryid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  UNIQUE KEY `entryid_idx` (`entryid`,`categoryid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_entryproperties`
--

DROP TABLE IF EXISTS `serendipity_utf_entryproperties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_entryproperties` (
  `entryid` int(11) NOT NULL,
  `property` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  UNIQUE KEY `prop_idx` (`entryid`,`property`),
  KEY `entrypropid_idx` (`entryid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_facebook`
--

DROP TABLE IF EXISTS `serendipity_utf_facebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_facebook` (
  `entryid` int(10) NOT NULL,
  `base_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resolved_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `fbindex` (`base_url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_groupconfig`
--

DROP TABLE IF EXISTS `serendipity_utf_groupconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_groupconfig` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `property` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `value` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`property`),
  KEY `groupid_idx` (`id`),
  KEY `groupprop_idx` (`id`,`property`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_groups`
--

DROP TABLE IF EXISTS `serendipity_utf_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_images`
--

DROP TABLE IF EXISTS `serendipity_utf_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `extension` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `size` int(11) NOT NULL DEFAULT '0',
  `dimensions_width` int(11) NOT NULL DEFAULT '0',
  `dimensions_height` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL DEFAULT '0',
  `thumbnail_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `authorid` int(11) DEFAULT '0',
  `path` text COLLATE utf8_unicode_ci,
  `hotlink` int(1) DEFAULT NULL,
  `realname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `imagesauthorid_idx` (`authorid`),
  FULLTEXT KEY `pathkey_idx` (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_links`
--

DROP TABLE IF EXISTS `serendipity_utf_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` int(10) DEFAULT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descrip` text COLLATE utf8_unicode_ci,
  `order_num` int(4) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `last_result` int(4) DEFAULT NULL,
  `last_result_time` int(10) DEFAULT NULL,
  `num_bad_results` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dateind` (`date_added`),
  KEY `titleind` (`title`),
  KEY `catind` (`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_mediaproperties`
--

DROP TABLE IF EXISTS `serendipity_utf_mediaproperties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_mediaproperties` (
  `mediaid` int(11) NOT NULL,
  `property` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `property_group` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `property_subgroup` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `value` text COLLATE utf8_unicode_ci,
  UNIQUE KEY `media_idx` (`mediaid`,`property`,`property_group`,`property_subgroup`),
  KEY `mediapropid_idx` (`mediaid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_options`
--

DROP TABLE IF EXISTS `serendipity_utf_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_options` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `okey` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`name`,`okey`),
  KEY `options_idx` (`okey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_percentagedone`
--

DROP TABLE IF EXISTS `serendipity_utf_percentagedone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_percentagedone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` int(10) DEFAULT NULL,
  `project` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `percentagecomplete` int(4) DEFAULT '0',
  `descrip` text COLLATE utf8_unicode_ci,
  `order_num` int(4) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `last_result` int(4) DEFAULT NULL,
  `last_result_time` int(10) DEFAULT NULL,
  `num_bad_results` int(11) DEFAULT NULL,
  `colorid` int(11) DEFAULT '0',
  `entry` int(11) DEFAULT NULL,
  `hidden` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `percentage_dateind` (`date_added`),
  KEY `percentage_titleind` (`title`),
  KEY `percentage_catind` (`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_permalinks`
--

DROP TABLE IF EXISTS `serendipity_utf_permalinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_permalinks` (
  `permalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `entry_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `data` text COLLATE utf8_unicode_ci,
  KEY `pl_idx` (`permalink`),
  KEY `ple_idx` (`entry_id`),
  KEY `plt_idx` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_plugincategories`
--

DROP TABLE IF EXISTS `serendipity_utf_plugincategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_plugincategories` (
  `class_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_pluginlist`
--

DROP TABLE IF EXISTS `serendipity_utf_pluginlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_pluginlist` (
  `plugin_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `class_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `plugin_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pluginPath` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `upgrade_version` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `plugintype` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pluginlocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `stackable` int(1) NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `requirements` text COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_modified` int(11) NOT NULL DEFAULT '0',
  KEY `pluginlist_f_idx` (`plugin_file`),
  KEY `pluginlist_cn_idx` (`class_name`),
  KEY `pluginlist_pt_idx` (`plugintype`),
  KEY `pluginlist_pl_idx` (`pluginlocation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_plugins`
--

DROP TABLE IF EXISTS `serendipity_utf_plugins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_plugins` (
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `placement` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'right',
  `sort_order` int(4) NOT NULL DEFAULT '0',
  `authorid` int(11) DEFAULT '0',
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `pluginauthorid_idx` (`authorid`),
  KEY `pluginplace_idx` (`placement`),
  KEY `pluginretr_idx` (`placement`,`sort_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_references`
--

DROP TABLE IF EXISTS `serendipity_utf_references`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_references` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(10) unsigned NOT NULL DEFAULT '0',
  `link` text COLLATE utf8_unicode_ci,
  `name` text COLLATE utf8_unicode_ci,
  `type` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `refentry_idx` (`entry_id`),
  KEY `reftype_idx` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_referrers`
--

DROP TABLE IF EXISTS `serendipity_utf_referrers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_referrers` (
  `entry_id` int(11) NOT NULL DEFAULT '0',
  `day` date NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `scheme` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `port` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `query` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`host`,`day`,`entry_id`),
  KEY `referrers_idx` (`entry_id`,`day`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_refs`
--

DROP TABLE IF EXISTS `serendipity_utf_refs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_refs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refs` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `refsrefs` (`refs`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_spamblocklog`
--

DROP TABLE IF EXISTS `serendipity_utf_spamblocklog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_spamblocklog` (
  `timestamp` int(10) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reason` text COLLATE utf8_unicode_ci,
  `entry_id` int(10) NOT NULL DEFAULT '0',
  `author` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `useragent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  KEY `kspamidx` (`timestamp`),
  KEY `kspamtypeidx` (`type`),
  KEY `kspamentryidx` (`entry_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_suppress`
--

DROP TABLE IF EXISTS `serendipity_utf_suppress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_suppress` (
  `ip` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scheme` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `query` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `url_idx` (`host`,`ip`),
  KEY `urllast_idx` (`last`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_tweetbackshorturls`
--

DROP TABLE IF EXISTS `serendipity_utf_tweetbackshorturls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_tweetbackshorturls` (
  `service` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `longurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shorturl` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`service`,`longurl`),
  KEY `idx_tweetbackshorturls_longurl` (`longurl`),
  KEY `idx_tweetbackshorturls_service` (`service`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `serendipity_utf_wikireferences`
--

DROP TABLE IF EXISTS `serendipity_utf_wikireferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serendipity_utf_wikireferences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entryid` int(11) DEFAULT '0',
  `refname` text COLLATE utf8_unicode_ci,
  `ref` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `wikiref_refname` (`refname`(255)),
  KEY `wikiref_comb` (`entryid`,`refname`(255)),
  KEY `wikiref_entry` (`entryid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-10 15:56:12
