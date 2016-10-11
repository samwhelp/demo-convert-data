<?php

namespace Demo\Converter;

class Base {

	protected $_Reader = null;
	protected $_Writer = null;

	protected $_Sheet = null;

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_SAVE_FILE_PATH;

	public static function newInstance()
	{
        return new static(); //http://php.net/manual/en/language.oop5.late-static-bindings.php
    }

	public function __construct()
	{
		$this->init();
	}

	public function init()
	{

		return $this;
	}

	public function prep()
	{

		return $this;
	}

	public function run()
	{
		//var_dump(__METHOD__);

		return $this;
	}


} // End Class
