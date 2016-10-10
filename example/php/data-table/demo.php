#!/usr/bin/env php
<?php

	$table = [
		[
			'en_US' => 'apple',
			'zh_TW' => '蘋果'
		],
		[
			'en_US' => 'banana',
			'zh_TW' => '香蕉'
		],
		[
			'en_US' => 'cherry',
			'zh_TW' => '櫻桃'
		]
	];

	// dump
	echo "============================================================" . PHP_EOL;
	echo '## dump' . PHP_EOL;
	var_dump($table);

	// get
	echo "============================================================" . PHP_EOL;
	echo '## get' . PHP_EOL;
	echo $table[0]['en_US'] . PHP_EOL;
	echo $table[0]['zh_TW'] . PHP_EOL;
	echo $table[1]['en_US'] . PHP_EOL;
	echo $table[1]['zh_TW'] . PHP_EOL;
	echo $table[2]['en_US'] . PHP_EOL;
	echo $table[2]['zh_TW'] . PHP_EOL;

	// set
	$table[0]['en_US'] = 'This is apple.';
	$table[0]['zh_TW'] = '這是蘋果。';
	$table[1]['en_US'] = 'This is apple.';
	$table[1]['zh_TW'] = '這是香蕉。';
	$table[2]['en_US'] = 'This is cherry.';
	$table[2]['zh_TW'] = '這是櫻桃。';

	// comprehension
	echo "============================================================" . PHP_EOL;
	echo '## comprehension' . PHP_EOL;

	foreach ($table as $num => $row) {
		echo $num . ' - ' . $row['en_US'] . ' - ' . $row['zh_TW'] . PHP_EOL;
	}

	echo "============================================================" . PHP_EOL;
