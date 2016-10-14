#!/usr/bin/env php
<?php
	$map = include(dirname(__DIR__) . '/raw-to-php-array-map/data_map.php');

	//var_dump($map);

	//簡易實做，不見得符合標準，請參考
	//https://www.w3.org/Protocols/rfc822/
	//http://man7.org/linux/man-pages/man5/deb822.5.html


	$rtn = '';

	foreach ($map as $key => $val) {

		$en_us = $key; // http://php.net/manual/en/function.addcslashes.php
		$zh_tw = $val;

		$rtn .= 'en_US' . ': ' . $en_us . PHP_EOL;
		$rtn .= 'zh_TW' . ': ' . $zh_tw . PHP_EOL;
		$rtn .= PHP_EOL;

	}

	file_put_contents(__DIR__ . '/demo.txt', $rtn);
