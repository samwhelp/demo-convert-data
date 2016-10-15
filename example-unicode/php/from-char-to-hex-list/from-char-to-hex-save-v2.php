#!/usr/bin/env php
<?php

	function from_char_to_hex($char)
	{

		//https://www.google.com.tw/#q=php+charCodeAt
		//http://stackoverflow.com/questions/10333098/utf-8-safe-equivelant-of-ord-or-charcodeat-in-php
		//http://php.net/manual/en/function.unpack.php
		//http://php.net/manual/en/function.pack.php
		//http://php.net/manual/en/function.ord.php
		//http://php.net/manual/en/function.chr.php
		//http://php.net/manual/en/function.hexdec.php
		//http://php.net/manual/en/function.dechex.php

		if ($char === '') {
			return '';
		}

		list(, $dec) = unpack('N', mb_convert_encoding($char, 'UCS-4BE', 'UTF-8'));
		return dechex(intval($dec));
	}

	function main()
	{
		// http://php.net/manual/en/function.file.php
		// http://php.net/manual/en/function.trim.php
		// http://php.net/manual/en/function.fopen.php
		// http://php.net/manual/en/function.strlen.php
		// http://php.net/manual/en/function.substr.php
		// http://php.net/manual/en/function.intval.php
		// http://php.net/manual/en/function.fwrite.php


		$lines = file(__DIR__ . '/source.txt');

		//http://php.net/manual/en/function.fopen.php
		$fp = fopen(__DIR__ . '/hex.v2.txt', 'c');



		foreach ($lines as $num => $line) {
			$line = trim($line);

			if (strlen($line) <=0 ) { // 空白行，忽略。
				continue;
			}

			if (substr($line, 0, 1) === '#') { // #開頭的行，忽略。
				continue;
			}

			$char = $line;
			$rtn = '';
			$rtn .= from_char_to_hex($char);
			$rtn .= PHP_EOL;

			fwrite($fp, $rtn);
		}

	}

	main();
