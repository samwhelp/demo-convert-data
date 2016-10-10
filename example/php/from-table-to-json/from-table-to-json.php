#!/usr/bin/env php
<?php

	$table = include(dirname(__DIR__) . '/raw-to-php-array-table/data_table.php');

	//var_dump($table);

	//http://php.net/manual/en/function.json-encode.php

	//$rtn = json_encode($table);
	//$rtn = json_encode($table, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
	$rtn = json_encode($table, JSON_UNESCAPED_UNICODE);


	file_put_contents(__DIR__ . '/demo.json', $rtn);
