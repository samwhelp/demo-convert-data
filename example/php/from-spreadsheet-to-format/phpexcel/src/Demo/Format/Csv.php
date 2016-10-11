<?php

namespace Demo\Format;

class Csv extends Base {

	public function render()
	{

		//簡易實做，不見得符合標準，請參考
		//https://en.wikipedia.org/wiki/Comma-separated_values


		$separator = "\t"; //用「tab」當分隔符號
		//$separator = ", "; //用「, 」當分隔符號

		$rtn = '';

		$rtn .= '"' . '英文' . '"';
		$rtn .= $separator;
		$rtn .= '"' . '中文' . '"';
		$rtn .= PHP_EOL;

		foreach ($this->_Data as $idx => $row) {

			if ($idx == 0) {
				continue;
			}

			$en_us = addcslashes($row[0], '"'); // http://php.net/manual/en/function.addcslashes.php
			$zh_tw = addcslashes($row[1], '"');

			$rtn .= '"' . $en_us . '"';
			$rtn .= $separator;
			$rtn .= '"' . $zh_tw . '"';
			$rtn .= PHP_EOL;

		}


		return $rtn;
	}





} // End Class
