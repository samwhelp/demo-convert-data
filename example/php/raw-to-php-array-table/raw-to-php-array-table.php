#!/usr/bin/env php
<?php

	$list_en_us = file(__DIR__ . '/raw.en_US.txt'); //http://php.net/manual/en/function.file.php
	$list_zh_tw = file(__DIR__ . '/raw.zh_TW.txt');

	//var_dump($list_en_us);
	//var_dump($list_zh_tw);

	$rtn = '';
	$rtn .= '<' . '?php' . PHP_EOL;
	$rtn .= "\t" . 'return [' . PHP_EOL;

	foreach ($list_en_us as $key => $val_en_us) {
		$val_en_us = trim($val_en_us);

		$val_en_us = trim($val_en_us);

		if (!array_key_exists($key, $list_zh_tw)) {
			continue;
		}

		$val_zh_tw = trim($list_zh_tw[$key]);

		$val_en_us = addcslashes($val_en_us, "'"); // http://php.net/manual/en/function.addcslashes.php
		$val_zh_tw = addcslashes($val_zh_tw, "'");


		$rtn .= "\t\t[";
		$rtn .= PHP_EOL;

		$rtn .= "\t\t\t";

		$rtn .= "'";
		$rtn .= 'en_US';
		$rtn .= "'";

		$rtn .= ' => ';

		$rtn .= "'";
		$rtn .= $val_en_us;
		$rtn .= "'";
		$rtn .= ',';
		$rtn .= PHP_EOL;

		$rtn .= "\t\t\t";

		$rtn .= "'";
		$rtn .= 'zh_TW';
		$rtn .= "'";

		$rtn .= ' => ';

		$rtn .= "'";
		$rtn .= $val_zh_tw;
		$rtn .= "'";
		$rtn .= ',';
		$rtn .= PHP_EOL;

		$rtn .= "\t\t],";
		$rtn .= PHP_EOL;

	}

	$rtn .= "\t" . '];' . PHP_EOL;

	//echo $rtn;

	file_put_contents(__DIR__ . '/data_table.php', $rtn);
