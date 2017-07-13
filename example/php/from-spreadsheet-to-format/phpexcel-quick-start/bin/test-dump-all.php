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
		$rows = range(1, intval($item['totalRows']));

		/*
		foreach ($columns as $column) {
			foreach ($rows as $row) {
				$cell_name = $column . $row;
				$cell = $sheet->getCell($cell_name);
				//var_dump($cell->getValue());
				echo $cell_name . ': ' . $cell->getValue() . PHP_EOL;
			}
		}
		*/

		foreach ($rows as $row) {
			foreach ($columns as $column) {
				$cell_name = $column . $row;
				$cell = $sheet->getCell($cell_name);
				//var_dump($cell->getValue());
				echo $cell_name . ': ' . $cell->getValue() . PHP_EOL;
			}
		}

		echo '================================================================================' . PHP_EOL;
	}

/*
worksheetName: README
A1: README 讀我
A2:
A3: 這是一個
測試
檔案
A4:
A5: 提供給 phpexcel 來讀取測試
================================================================================
worksheetName: Fruit 水果
A1: 英文
B1: 中文
A2: apple
B2: 蘋果
A3: banana
B3: 香蕉
A4: cherry
B4: 櫻桃
================================================================================
worksheetName: 英文字母
A1: 大寫
B1: 小寫
A2: A
B2: a
A3: B
B3: b
A4: C
B4: c
A5: D
B5: d
A6: E
B6: e
================================================================================
*/
