#!/usr/bin/env php
<?php

	function from_char_to_dec($char)
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
			return 0;
		}

		list(, $dec) = unpack('N', mb_convert_encoding($char, 'UCS-4BE', 'UTF-8'));

		return intval($dec);
	}

	function main()
	{
		// http://php.net/manual/en/function.fopen.php
		// http://php.net/manual/en/function.fgets.php
		// http://php.net/manual/en/function.trim.php
		// http://php.net/manual/en/function.strlen.php
		// http://php.net/manual/en/function.substr.php
		// http://php.net/manual/en/function.intval.php
		// http://php.net/manual/en/function.fwrite.php

		$fp_source = fopen(__DIR__ . '/source.txt', 'r');

		//http://php.net/manual/en/function.fopen.php
		$fp_target = fopen(__DIR__ . '/dec.v3.txt', 'c');


		while (($line = fgets($fp_source)) !== false) {
			$line = trim($line);

			if (strlen($line) <=0 ) { // 空白行，忽略。
				continue;
			}

			if (substr($line, 0, 1) === '#') { // #開頭的行，忽略。
				continue;
			}

			$char = $line;
			$rtn = '';
			$rtn .= from_char_to_dec($char);
			$rtn .= PHP_EOL;

			fwrite($fp_target, $rtn);
	    }

	}

	main();
