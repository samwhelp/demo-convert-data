#!/usr/bin/env php
<?php
	$table = include(dirname(__DIR__) . '/raw-to-php-array-table/data_table.php');

	//var_dump($table);

	$rtn = '';

	$link = new mysqli("localhost", "my_user", "my_password", "demo_database");


	foreach ($table as $num => $row) {

		$en_us = mysqli_escape_string($link, $row['en_US']); // http://php.net/manual/en/function.mysqli-escape-string.php
		$zh_tw = mysqli_escape_string($link, $row['zh_TW']);

		$rtn .= 'INSERT INTO demo_table (en_us, zh_tw) ';
		$rtn .= 'VALUES (';
		$rtn .= "'" . $en_us . "'";
		$rtn .= ', ';
		$rtn .= "'" . $zh_tw . "'";
		$rtn .= ');';
		$rtn .= PHP_EOL;

	}

	file_put_contents(__DIR__ . '/demo.sql', $rtn);
