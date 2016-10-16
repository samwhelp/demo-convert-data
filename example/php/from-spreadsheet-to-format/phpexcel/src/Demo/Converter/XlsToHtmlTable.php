<?php

namespace Demo\Converter;

class XlsToHtmlTable extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_XLS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/xls-to-html-table/demo.html';
	protected $_ReaderType = 'Excel5';

	public function prep()
	{
		if (parent::prep() === false) {
			return false;
		}

		if ($this->_Writer === null) {
			$this->_Writer = \Demo\Format\HtmlTable::newInstance();
		}

		return true;
	}


} // End Class
