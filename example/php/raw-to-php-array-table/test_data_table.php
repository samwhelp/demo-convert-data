#!/usr/bin/env php
<?php

	$table = include(__DIR__ . '/data_table.php');

	var_dump($table);

	/*
	foreach ($table as $num => $row) {
		echo $row['en_US'];
		echo ", ";
		echo $row['zh_TW'];
		echo PHP_EOL;
	}
	*/


	/*
	http://php.net/manual/en/control-structures.foreach.php
	http://php.net/manual/en/function.echo.php
	http://php.net/manual/en/function.var-dump.php
	*/
