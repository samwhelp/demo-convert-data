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
		$char = '測'; // (28204) (6E2C)

		$rtn = '';
		$rtn .= from_char_to_hex($char);
		$rtn .= PHP_EOL;

		//echo $rtn;

		//http://php.net/manual/en/function.fopen.php
		$fp = fopen(__DIR__ . '/hex.v2.txt', 'c');

		fwrite($fp, $rtn);

	}

	main();
