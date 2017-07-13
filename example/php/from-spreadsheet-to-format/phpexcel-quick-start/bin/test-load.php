#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	$source_file_path = THE_DEMO_ODS_FILE_PATH;

	$reader = \PHPExcel_IOFactory::createReader('OOCalc');

	if (!file_exists($source_file_path)) {
		echo('Source File Not Exists: ' . $source_file_path . PHP_EOL);
		return;
	}

	//https://github.com/PHPOffice/PHPExcel/blob/1.8/Classes/PHPExcel/Reader/OOCalc.php#L291
	$sheets = $reader->load($source_file_path); // "vendor/phpoffice/phpexcel/Classes/PHPExcel/Reader/OOCalc.php" : "function load"
	$sheets->setActiveSheetIndex(1);
	$list = $sheets->getActiveSheet()->toArray();

	var_dump($list);

/*
array(4) {
  [0]=>
  array(2) {
    [0]=>
    string(6) "英文"
    [1]=>
    string(6) "中文"
  }
  [1]=>
  array(2) {
    [0]=>
    string(5) "apple"
    [1]=>
    string(6) "蘋果"
  }
  [2]=>
  array(2) {
    [0]=>
    string(6) "banana"
    [1]=>
    string(6) "香蕉"
  }
  [3]=>
  array(2) {
    [0]=>
    string(6) "cherry"
    [1]=>
    string(6) "櫻桃"
  }
}
*/
