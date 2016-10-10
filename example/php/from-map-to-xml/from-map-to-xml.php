#!/usr/bin/env php
<?php
	$map = include(dirname(__DIR__) . '/raw-to-php-array-map/data_map.php');

	//var_dump($map);

	$rtn = '';

	$rtn .= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;


	$rtn .= '<list>' . PHP_EOL;

	foreach ($map as $key => $val) {

		$en_us = htmlspecialchars($key, ENT_XML1, 'UTF-8'); // http://php.net/manual/en/function.htmlspecialchars.php
		$zh_tw = htmlspecialchars($val, ENT_XML1, 'UTF-8');

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
