#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	\Demo\Converter\OdsToHtmlTableCss::newInstance()
		->prep()
		->run()
	;


	return;
