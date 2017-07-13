#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	$source_file_path = THE_DEMO_ODS_FILE_PATH;
	$target_file_path = __DIR__ . '/../var/dump-all.txt';

	$reader = \PHPExcel_IOFactory::createReader('OOCalc');

	if (!file_exists($source_file_path)) {
		echo('Source File Not Exists: ' . $source_file_path . PHP_EOL);
		return;
	}


	//http://php.net/manual/en/function.fopen.php
	$target = fopen($target_file_path, 'w');

	$sheets = $reader->load($source_file_path);


	$info = $reader->listWorksheetInfo($source_file_path);

	foreach ($info as $index => $item) {
		$sheets->setActiveSheetIndex($index);
		$sheet = $sheets->getActiveSheet();

		$buffer = 'worksheetName: ' . $item['worksheetName'] . PHP_EOL;
		fwrite($target, $buffer);

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
				$buffer = $cell_name . ': ' . $cell->getValue() . PHP_EOL;
				fwrite($target, $buffer);
			}
		}

		fwrite($target, '================================================================================' . PHP_EOL);
	}

/*
$ cat var/dump-all.txt
*/
