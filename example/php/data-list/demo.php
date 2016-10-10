#!/usr/bin/env php
<?php

	$list = [
		'apple',
		'banana',
		'cherry'
	];

	// dump
	echo "============================================================" . PHP_EOL;
	echo '## dump' . PHP_EOL;
	var_dump($list);

	// get
	echo "============================================================" . PHP_EOL;
	echo '## get' . PHP_EOL;
	echo $list[0] . PHP_EOL;
	echo $list[1] . PHP_EOL;
	echo $list[2] . PHP_EOL;

	// set
	$list[0] = 'This is apple.';
	$list[1] = 'This is banana.';
	$list[2] = 'This is cherry.';

	// comprehension
	echo "============================================================" . PHP_EOL;
	echo '## comprehension' . PHP_EOL;

	foreach ($list as $num => $val) {
		echo $num . ' - ' . $val . PHP_EOL;
	}

	echo "============================================================" . PHP_EOL;
