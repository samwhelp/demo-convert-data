#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	$source_file_path = THE_DEMO_ODS_FILE_PATH;

	$reader = \PHPExcel_IOFactory::createReader('OOCalc');

	if (!file_exists($source_file_path)) {
		echo('Source File Not Exists: ' . $source_file_path . PHP_EOL);
		return;
	}

	//https://github.com/PHPOffice/PHPExcel/blob/1.8/Classes/PHPExcel/Reader/OOCalc.php#L113
	$list = $reader->listWorksheetNames($source_file_path); // "vendor/phpoffice/phpexcel/Classes/PHPExcel/Reader/OOCalc.php" : "function listWorksheetNames"

	var_dump($list);

/*
array(3) {
  [0]=>
  string(6) "README"
  [1]=>
  string(12) "Fruit 水果"
  [2]=>
  string(12) "英文字母"
}
*/
