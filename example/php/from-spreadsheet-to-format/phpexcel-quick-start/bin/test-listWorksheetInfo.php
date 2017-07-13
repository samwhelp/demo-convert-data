#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	$source_file_path = THE_DEMO_ODS_FILE_PATH;

	$reader = \PHPExcel_IOFactory::createReader('OOCalc');

	if (!file_exists($source_file_path)) {
		echo('Source File Not Exists: ' . $source_file_path . PHP_EOL);
		return;
	}

	//https://github.com/PHPOffice/PHPExcel/blob/1.8/Classes/PHPExcel/Reader/OOCalc.php#L165
	$info = $reader->listWorksheetInfo($source_file_path); // "vendor/phpoffice/phpexcel/Classes/PHPExcel/Reader/OOCalc.php" : "function listWorksheetInfo"

	var_dump($info);


/*
array(3) {
  [0]=>
  array(5) {
    ["worksheetName"]=>
    string(6) "README"
    ["lastColumnLetter"]=>
    string(1) "A"
    ["lastColumnIndex"]=>
    int(0)
    ["totalRows"]=>
    int(5)
    ["totalColumns"]=>
    int(1)
  }
  [1]=>
  array(5) {
    ["worksheetName"]=>
    string(12) "Fruit 水果"
    ["lastColumnLetter"]=>
    string(1) "B"
    ["lastColumnIndex"]=>
    int(1)
    ["totalRows"]=>
    int(4)
    ["totalColumns"]=>
    int(2)
  }
  [2]=>
  array(5) {
    ["worksheetName"]=>
    string(12) "英文字母"
    ["lastColumnLetter"]=>
    string(1) "B"
    ["lastColumnIndex"]=>
    int(1)
    ["totalRows"]=>
    int(6)
    ["totalColumns"]=>
    int(2)
  }
}
*/
