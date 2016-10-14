#!/usr/bin/env php
<?php

	$table = include(dirname(__DIR__) . '/raw-to-php-array-table/data_table.php');

	//var_dump($table);

	//簡易實做，不見得符合標準，請參考
	//https://www.w3.org/Protocols/rfc822/
	//http://man7.org/linux/man-pages/man5/deb822.5.html


	$rtn = '';

	foreach ($table as $num => $row) {

		$en_us = $row['en_US']; // http://php.net/manual/en/function.addcslashes.php
		$zh_tw = $row['zh_TW'];

		$rtn .= 'en_US' . ': ' . $en_us . PHP_EOL;
		$rtn .= 'zh_TW' . ': ' . $zh_tw . PHP_EOL;
		$rtn .= PHP_EOL;

	}

	file_put_contents(__DIR__ . '/demo.txt', $rtn);
