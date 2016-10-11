<?php

namespace Demo\Converter;

class XlsToXml extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_XLS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/xls-to-xml/demo.xml';
	protected $_ReaderType = 'Excel5';

	public function prep()
	{
		parent::prep();

		$this->_Writer = \Demo\Format\Xml::newInstance();

		return $this;
	}


} // End Class
