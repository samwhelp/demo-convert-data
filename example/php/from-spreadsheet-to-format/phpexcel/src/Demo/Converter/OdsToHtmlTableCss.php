<?php

namespace Demo\Converter;

class OdsToHtmlTableCss extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/ods-to-html-table-css/demo.html';
	protected $_ReaderType = 'OOCalc';

	public function prep()
	{
		if (parent::prep() === false) {
			return false;
		}

		if ($this->_Writer === null) {
			$this->_Writer = \Demo\Format\HtmlTableCss::newInstance();
		}
		
		return true;
	}


} // End Class
