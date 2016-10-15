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
		$char = '測'; // (28204) (6E2C)
		echo from_char_to_dec($char);
		echo PHP_EOL;
	}

	main();
