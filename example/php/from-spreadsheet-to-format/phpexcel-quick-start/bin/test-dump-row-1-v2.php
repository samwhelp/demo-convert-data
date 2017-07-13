#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	$source_file_path = THE_DEMO_ODS_FILE_PATH;

	$reader = \PHPExcel_IOFactory::createReader('OOCalc');

	if (!file_exists($source_file_path)) {
		echo('Source File Not Exists: ' . $source_file_path . PHP_EOL);
		return;
	}

	$sheets = $reader->load($source_file_path);


	$info = $reader->listWorksheetInfo($source_file_path);

	foreach ($info as $index => $item) {
		$sheets->setActiveSheetIndex($index);
		$sheet = $sheets->getActiveSheet();

		echo 'worksheetName: ' . $item['worksheetName'] . PHP_EOL;

		$columns = range(0, $item['lastColumnIndex']);

		foreach ($columns as $column) {
			$cell_name = $column . '1';
			$cell = $sheet->getCellByColumnAndRow($column, 1);
			echo $cell_name . ': ' . $cell->getValue() . PHP_EOL;
		}

		echo '================================================================================' . PHP_EOL;
	}

/*
worksheetName: README
01: README 讀我
================================================================================
worksheetName: Fruit 水果
01: 英文
11: 中文
================================================================================
worksheetName: 英文字母
01: 大寫
11: 小寫
================================================================================
*/
