#!/usr/bin/env php
<?php
	$map = include(dirname(__DIR__) . '/raw-to-php-array-map/data_map.php');

	//var_dump($map);

	//簡易實做，不見得符合標準，請參考
	//https://en.wikipedia.org/wiki/Comma-separated_values


	$separator = "\t"; //用「tab」當分隔符號
	//$separator = ", "; //用「, 」當分隔符號

	$rtn = '';

	$rtn .= '"' . '英文' . '"';
	$rtn .= $separator;
	$rtn .= '"' . '中文' . '"';
	$rtn .= PHP_EOL;

	foreach ($map as $key => $val) {

		$en_us = addcslashes($key, '"'); // http://php.net/manual/en/function.addcslashes.php
		$zh_tw = addcslashes($val, '"');

		$rtn .= '"' . $en_us . '"';
		$rtn .= $separator;
		$rtn .= '"' . $zh_tw . '"';
		$rtn .= PHP_EOL;
		
	}

	file_put_contents(__DIR__ . '/demo.csv', $rtn);
