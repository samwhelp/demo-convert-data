<?php

namespace Demo\Converter;

class BaseSheet extends Base {

	protected $_ReaderType = 'OOCalc';
	//protected $_ReaderType = 'Excel5';

	public function prep()
	{
		$this->_Reader = \PHPExcel_IOFactory::createReader($this->_ReaderType);

		return $this;
	}

	public function run()
	{
		//var_dump(__METHOD__);

		if (!file_exists($this->_SourceFilePath)) {
			echo('Source File Not Exists: ' . $this->_SourceFilePath . PHP_EOL);
			return;
		}

		$this->_Sheet = $this->_Reader->load($this->_SourceFilePath);
		$this->_Sheet->setActiveSheetIndex(0);		

		$list = $this->_Sheet->getActiveSheet()->toArray();

		$this->_Writer
			->setData($list)
			->setSaveFilePath($this->_TargetFilePath)
			->save()
		;


		return;
	}


//以下測試


	protected function test_001()
	{
		$cell_a1 = $this->_Sheet->getActiveSheet()->getCell('A1');
		echo ($cell_a1);
	}

	protected function test_002()
	{
		$cell_a1 = $this->_Sheet->getActiveSheet()->getCellByColumnAndRow(0, 1);
		$cell_a2 = $this->_Sheet->getActiveSheet()->getCellByColumnAndRow(1, 1);
		echo ($cell_a1);
		echo ($cell_a2);
	}

	protected function test_003()
	{
		$list = $this->_Sheet->getActiveSheet()->toArray();
		var_dump($list);
	}

	protected function test_004()
	{
		$cellCollection = $this->_Sheet->getActiveSheet()->getCellCollection();
		var_dump($cellCollection);
	}

	protected function test_005()
	{

		//https://github.com/PHPOffice/PHPExcel/blob/1.8/Examples/28iterator.php
		foreach ($this->_Sheet->getActiveSheet()->getRowIterator() as $row) {
			//echo '    Row number - ' , $row->getRowIndex() , PHP_EOL;

			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false);

			foreach ($cellIterator as $cell) {
				if (is_null($cell)) {
					continue;
				}
				echo 'Cell - ' , $cell->getCoordinate() , ' - ' , $cell->getCalculatedValue() , PHP_EOL;
			}

		}
	}

} // End Class
