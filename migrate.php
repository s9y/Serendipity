<?php
include 'serendipity_config.inc.php';

/**
THIS IS AN EXPERIMENTAL FILE to simulare the upgrade task. It uses a hardcoded experimental prefix name matching my installation. Change accordingly.
*/

function migrate_task() {
	global $serendipity;
	echo '<p>When using Serendipity 2.2 with MySQLi and UTF-8 charsets (this is the default), the tables and indexes will be migrated from UTF-8 to UTF-8 with Multibyte-Extension, to support Emoji-Characters.</p>';

	if (function_exists('serendipity_db_migrate_index')) {
		if ($serendipity['dbUtf8mb4']) {
			echo '<p>This operation will try to automatically convert all tables in the Serendipity database matching the table prefix, and include all plugins. This is a possibly dangerous operation that could affect special characters no longer displaying properly (Umlauts), so be sure to make a backup of your database before executing this task.</p>';
			echo '<p>This is the list of affected database tables and SQL statements that will be executed:</p>';
			$migrate = serendipity_db_migrate_index(true, 'serendipity_utf_');
			echo '<pre>' . print_r($migrate, true) . '</pre>';
		} else {
			echo '<p>You are currently not using MySQLi with UTF-8 character set, or your MySQL server version is lower than 5.5.3, so you are not affected by this change.</p>';
			echo '<p>Please consider converting your database to UTF-8 and/or upgrading your MySQL server.</p>';
		}
	} else {
		echo '<p>You are currently not using MySQLi, so you are not affected by this change.</p>';
	}
}

migrate_task();