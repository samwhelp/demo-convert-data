<?php

namespace Demo\Converter;

class Base {

	public static function newInstance()
	{
		//http://php.net/manual/en/language.oop5.late-static-bindings.php
        return new static();
	}

	public function __construct()
	{
		//http://php.net/manual/en/language.oop5.decon.php
		$this->init();
	}

	protected function init()
	{
		return true;
	}

	protected function prep()
	{
		return true;
	}

	public function run()
	{
		//var_dump(__METHOD__);

		if ($this->prep() === false) {
			return false;
		}

		return true;

	}

	protected $_Reader = null;
	protected $_Writer = null;

	protected $_Sheet = null;

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_SAVE_FILE_PATH;

} // End Class
