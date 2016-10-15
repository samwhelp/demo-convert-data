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
		$dec = 28204;  //6E2C

		$rtn = '';
		$rtn .= from_dec_to_char($dec);
		$rtn .= PHP_EOL;

		//echo $rtn;

		//http://php.net/manual/en/function.fopen.php
		$fp = fopen(__DIR__ . '/unicode.v2.txt', 'c');

		fwrite($fp, $rtn);

	}

	main();
