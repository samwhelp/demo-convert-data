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

		$columns = range(strtoupper('A'), strtoupper($item['lastColumnLetter']));

		foreach ($columns as $column) {
			$cell_name = $column . '1';
			$cell = $sheet->getCell($cell_name);
			//var_dump($cell->getValue());
			echo $cell_name . ': ' . $cell->getValue() . PHP_EOL;
		}

		echo '================================================================================' . PHP_EOL;
	}

/*
worksheetName: README
A1: README 讀我
================================================================================
worksheetName: Fruit 水果
A1: 英文
B1: 中文
================================================================================
worksheetName: 英文字母
A1: 大寫
B1: 小寫
================================================================================
*/
