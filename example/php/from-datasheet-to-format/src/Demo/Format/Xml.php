<?php

namespace Demo\Format;

class Xml extends Base {

	public function render()
	{

		$rtn = '';

		$rtn .= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;


		$rtn .= '<list>' . PHP_EOL;

		foreach ($this->_Data as $idx => $row) {

			if ($idx == 0) {
				continue;
			}

			$en_us = htmlspecialchars($row[0], ENT_XML1, 'UTF-8'); // http://php.net/manual/en/function.htmlspecialchars.php
			$zh_tw = htmlspecialchars($row[1], ENT_XML1, 'UTF-8');

			$rtn .= '	<item>' . PHP_EOL;

			$rtn .= '		<en_us>' . PHP_EOL;
			$rtn .= '			' . $en_us . PHP_EOL;
			$rtn .= '		</en_us>' . PHP_EOL;

			$rtn .= '		<zh_tw>' . PHP_EOL;
			$rtn .= '			' . $zh_tw . PHP_EOL;
			$rtn .= '		</zh_tw>' . PHP_EOL;

			$rtn .= '	</item>' . PHP_EOL;

		}

		$rtn .= '</list>' . PHP_EOL;


		return $rtn;
	}





} // End Class
