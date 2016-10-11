#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/Boot.php');

	\Demo\Converter\OdsToPo::newInstance()
		->prep()
		->run()
	;


	return;
