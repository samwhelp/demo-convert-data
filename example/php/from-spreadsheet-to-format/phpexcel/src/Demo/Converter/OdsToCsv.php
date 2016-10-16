<?php

namespace Demo\Converter;

class OdsToCsv extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/ods-to-csv/demo.csv';
	protected $_ReaderType = 'OOCalc';

	public function prep()
	{

		if (parent::prep() === false) {
			return false;
		}

		if ($this->_Writer === null) {
			$this->_Writer = \Demo\Format\Csv::newInstance();
		}
		
		return true;
	}



} // End Class
