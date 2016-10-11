#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	\Demo\Converter\XlsToHtmlTable::newInstance()
		->prep()
		->run()
	;


	return;
