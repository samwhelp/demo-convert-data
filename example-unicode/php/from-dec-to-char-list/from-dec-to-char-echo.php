#!/usr/bin/env php
<?php

	function from_dec_to_char($dec)
	{
		//http://php.net/manual/en/function.utf8-encode.php#49336
		//http://php.net/manual/en/function.utf8-encode.php#58442
		if($dec<128)return chr($dec);
		if($dec<2048)return chr(($dec>>6)+192).chr(($dec&63)+128);
		if($dec<65536)return chr(($dec>>12)+224).chr((($dec>>6)&63)+128).chr(($dec&63)+128);
		if($dec<2097152)return chr(($dec>>18)+240).chr((($dec>>12)&63)+128).chr((($dec>>6)&63)+128) .chr(($dec&63)+128);
		return '';

	}

	function main()
	{
		// http://php.net/manual/en/function.file.php
		// http://php.net/manual/en/function.trim.php
		// http://php.net/manual/en/function.strlen.php
		// http://php.net/manual/en/function.substr.php
		// http://php.net/manual/en/function.intval.php
		// http://php.net/manual/en/function.echo.php

		$lines = file(__DIR__ . '/source.txt');

		foreach ($lines as $num => $line) {
			$line = trim($line);

			if (strlen($line) <=0 ) { // 空白行，忽略。
				continue;
			}

			if (substr($line, 0, 1) === '#') { // #開頭的行，忽略。
				continue;
			}

			$dec = intval($line);
			echo from_dec_to_char($dec);
			echo PHP_EOL;
		}
	}

	main();
