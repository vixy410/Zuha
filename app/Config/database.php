<?php
if (defined('SITE_DIR') && file_exists(ROOT.DS.SITE_DIR.DS.'Config'.DS.'database.php')) {
	require_once(ROOT.DS.SITE_DIR.DS.'Config'.DS.'database.php');
} else {
	require_once(ROOT.DS.'sites'.DS.'example.com'.DS.'Config'.DS.'database.php');
}