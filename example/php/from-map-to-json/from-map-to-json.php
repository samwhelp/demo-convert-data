#!/usr/bin/env php
<?php
	$map = include(dirname(__DIR__) . '/raw-to-php-array-map/data_map.php');

	//var_dump($map);

	//http://php.net/manual/en/function.json-encode.php

	//$rtn = json_encode($map);
	//$rtn = json_encode($map, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
	$rtn = json_encode($map, JSON_UNESCAPED_UNICODE);


	file_put_contents(__DIR__ . '/demo.json', $rtn);
