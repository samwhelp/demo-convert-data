<?php
	require_once(dirname(__DIR__) . '/vendor/autoload.php');

	ini_set('memory_limit', '2048M');

	define('THE_ROOT_DIR_PATH', dirname(__DIR__));
	define('THE_ASSET_DIR_PATH', THE_ROOT_DIR_PATH . '/asset');
	define('THE_VAR_DIR_PATH', THE_ROOT_DIR_PATH . '/var');

	define('THE_DEMO_ODS_FILE_PATH', THE_ASSET_DIR_PATH . '/demo.ods');
	define('THE_DEMO_XLS_FILE_PATH', THE_ASSET_DIR_PATH . '/demo.xls');	

	define('THE_SAVE_FILE_PATH', THE_VAR_DIR_PATH . '/demo.txt');
	define('THE_SAVE_PO_FILE_PATH', THE_VAR_DIR_PATH . '/demo.po');
	define('THE_SAVE_HTML_TABLE_FILE_PATH', THE_VAR_DIR_PATH . '/demo.html');
	define('THE_SAVE_XML_FILE_PATH', THE_VAR_DIR_PATH . '/demo.xml');
