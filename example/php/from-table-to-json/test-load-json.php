#!/usr/bin/env php
<?php

	$str = file_get_contents(__DIR__ . '/demo.json');

	//http://php.net/manual/en/function.json-decode.php

	$table = json_decode($str, true);

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
