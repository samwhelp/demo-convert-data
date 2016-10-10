#!/usr/bin/env php
<?php
	$map = include(dirname(__DIR__) . '/raw-to-php-array-map/data_map.php');

	//var_dump($map);

	$rtn = '';

	$link = new mysqli("localhost", "my_user", "my_password", "demo_database");


	foreach ($map as $key => $val) {

		$en_us = mysqli_escape_string($link, $key); // http://php.net/manual/en/function.mysqli-escape-string.php
		$zh_tw = mysqli_escape_string($link, $val);

		$rtn .= 'INSERT INTO demo_table (en_us, zh_tw) ';
		$rtn .= 'VALUES (';
		$rtn .= "'" . $en_us . "'";
		$rtn .= ', ';
		$rtn .= "'" . $zh_tw . "'";
		$rtn .= ');';
		$rtn .= PHP_EOL;

	}

	file_put_contents(__DIR__ . '/demo.sql', $rtn);
