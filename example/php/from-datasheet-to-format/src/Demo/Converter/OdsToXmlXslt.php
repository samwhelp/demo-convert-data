<?php

namespace Demo\Converter;

class OdsToXmlXslt extends BaseSheet {

	protected $_SourceFilePath = THE_DEMO_ODS_FILE_PATH;
	protected $_TargetFilePath = THE_VAR_DIR_PATH . '/ods-to-xml-xslt/demo.xml';
	protected $_ReaderType = 'OOCalc';

	public function prep()
	{
		parent::prep();

		$this->_Writer = \Demo\Format\XmlXslt::newInstance();

		return $this;
	}


} // End Class
