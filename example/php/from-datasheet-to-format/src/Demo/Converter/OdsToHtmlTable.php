<?php

namespace Demo\Converter;

class OdsToHtmlTable extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/ods-to-html-table/demo.html';
	protected $_ReaderType = 'OOCalc';

	public function prep()
	{
		parent::prep();

		$this->_Writer = \Demo\Format\HtmlTable::newInstance();

		return $this;
	}


} // End Class
