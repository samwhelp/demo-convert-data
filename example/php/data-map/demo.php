#!/usr/bin/env php
<?php

	$map = [
		'apple' => '蘋果',
		'banana' => '香蕉',
		'cherry' => '櫻桃'
	];

	// dump
	echo "============================================================" . PHP_EOL;
	echo '## dump' . PHP_EOL;
	var_dump($map);

	// get
	echo "============================================================" . PHP_EOL;
	echo '## get' . PHP_EOL;
	echo $map['apple'] . PHP_EOL;
	echo $map['banana'] . PHP_EOL;
	echo $map['cherry'] . PHP_EOL;

	// set
	$map['apple'] = '這是蘋果';
	$map['banana'] = '這是香蕉';
	$map['cherry'] = '這是櫻桃';

	// comprehension
	echo "============================================================" . PHP_EOL;
	echo '## comprehension' . PHP_EOL;

	foreach ($map as $key => $val) {
		echo $key . ' - ' . $val . PHP_EOL;
	}

	echo "============================================================" . PHP_EOL;
