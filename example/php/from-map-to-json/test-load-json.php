#!/usr/bin/env php
<?php

	$str = file_get_contents(__DIR__ . '/demo.json');

	//http://php.net/manual/en/function.json-decode.php

	$map = json_decode($str, true);

	var_dump($map);


	/*
	foreach ($map as $key => $val) {
		echo $key;
		echo ", ";
		echo $val;
		echo PHP_EOL;
	}
	*/


	/*
	http://php.net/manual/en/control-structures.foreach.php
	http://php.net/manual/en/function.echo.php
	http://php.net/manual/en/function.var-dump.php
	*/
