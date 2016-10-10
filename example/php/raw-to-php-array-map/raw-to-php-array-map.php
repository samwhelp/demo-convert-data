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

		if (!array_key_exists($key, $list_zh_tw)) {
			continue;
		}

		$val_zh_tw = trim($list_zh_tw[$key]);

		$val_en_us = addcslashes($val_en_us, "'"); // http://php.net/manual/en/function.addcslashes.php
		$val_zh_tw = addcslashes($val_zh_tw, "'");


		//寫法一
		$rtn .= "\t\t";
		$rtn .= "'";
		$rtn .= $val_en_us;
		$rtn .= "'";
		$rtn .= ' => ';
		$rtn .= "'";
		$rtn .= $val_zh_tw;
		$rtn .= "'";
		$rtn .= ',';
		$rtn .= PHP_EOL;

		//這裡有很多種寫法
		//寫法二
		//$rtn .= sprintf("\t\t'%s' => '%s',\n", $val_en_us, $val_zh_tw);
		//$rtn .= sprintf("\t\t\"%s\" => \"%s\",\n", $val_en_us, $val_zh_tw);
		//寫法三
		//$rtn .= "\t\t'$val_en_us' => '$val_zh_tw',\n";
		//$rtn .= "\t\t\"$val_en_us\" => \"$val_zh_tw\",\n";
	}

	$rtn .= "\t" . '];' . PHP_EOL;

	//echo $rtn;

	file_put_contents(__DIR__ . '/data_map.php', $rtn); //http://php.net/manual/en/function.file-put-contents.php
