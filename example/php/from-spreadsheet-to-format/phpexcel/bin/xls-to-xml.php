#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	\Demo\Converter\XlsToXml::newInstance()
		->prep()
		->run()
	;


	return;