#!/usr/bin/env php
<?php

	require_once(__DIR__ . '/vendor/autoload.php');

	$table = include(dirname(dirname(__DIR__)) . '/raw-to-php-array-table/data_table.php');

	//var_dump($table);

	$store = new \PHPExcel();

	$store->getProperties()
		->setCreator('User')
		->setLastModifiedBy('User')
		->setTitle('Translation')
		->setSubject('Translation')
		->setDescription('Translation')
		->setKeywords("php map openxml")
		->setCategory("Test map file")
	;

	// Set default font
	$store->getDefaultStyle()->getFont()
		//->setName('TW-Kai')
		->setName('Noto Sans CJK TC')
		->setSize(10)
	;

	$store->setActiveSheetIndex(0);

	$sheet = $store->getActiveSheet();

	$sheet->getColumnDimension('A')->setAutoSize(true);
	$sheet->getColumnDimension('B')->setAutoSize(true);

	$sheet->setTitle('水果');

	$sheet->setCellValue('A1', '英文 ');
	$sheet->setCellValue('B1', '中文 ');

	$num = 1;

	foreach ($table as $i => $row) {

		$num++;

		$en_us = $row['en_US'];
		$zh_tw = $row['zh_TW'];

		$sheet->setCellValue('A' . $num, $en_us);
		$sheet->setCellValue('B' . $num, $zh_tw);

	}

	$writer = \PHPExcel_IOFactory::createWriter($store, 'Excel2007');
	$writer->save(__DIR__ . '/demo.xlsx');
