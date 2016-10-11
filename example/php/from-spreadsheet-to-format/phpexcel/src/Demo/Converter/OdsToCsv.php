<?php

namespace Demo\Converter;

class OdsToCsv extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/ods-to-csv/demo.csv';
	protected $_ReaderType = 'OOCalc';

	public function prep()
	{
		parent::prep();

		$this->_Writer = \Demo\Format\Csv::newInstance();

		return $this;
	}



} // End Class
