<?php

namespace Demo\Converter;

class OdsToJson extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/ods-to-json/demo.json';
	protected $_ReaderType = 'OOCalc';

	public function prep()
	{
		parent::prep();

		$this->_Writer = \Demo\Format\Json::newInstance();

		return $this;
	}



} // End Class
