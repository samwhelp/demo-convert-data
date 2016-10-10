#!/usr/bin/env php
<?php
	$table = include(dirname(__DIR__) . '/raw-to-php-array-table/data_table.php');

	//var_dump($table);

	$rtn = '';

	$rtn .= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;



	$rtn .= '<list>' . PHP_EOL;

	foreach ($table as $num => $row) {

		$en_us = htmlspecialchars($row['en_US'], ENT_XML1, 'UTF-8'); // http://php.net/manual/en/function.htmlspecialchars.php
		$zh_tw = htmlspecialchars($row['zh_TW'], ENT_XML1, 'UTF-8');

		$rtn .= '	<item>' . PHP_EOL;

		$rtn .= '		<en_us>' . PHP_EOL;
		$rtn .= '			' . $en_us . PHP_EOL;
		$rtn .= '		</en_us>' . PHP_EOL;

		$rtn .= '		<zh_tw>' . PHP_EOL;
		$rtn .= '			' . $zh_tw . PHP_EOL;
		$rtn .= '		</zh_tw>' . PHP_EOL;

		$rtn .= '	</item>' . PHP_EOL;

	}

	$rtn .= '</list>' . PHP_EOL;


	file_put_contents(__DIR__ . '/demo.xml', $rtn);
