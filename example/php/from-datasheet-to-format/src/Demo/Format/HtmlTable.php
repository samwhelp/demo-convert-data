<?php

namespace Demo\Format;

class HtmlTable extends Base {

	public function render()
	{

		$rtn = '';

		$rtn .= '<!DOCTYPE html>' . PHP_EOL;
		$rtn .= '<html>' . PHP_EOL;
		$rtn .= '<head>' . PHP_EOL;
		$rtn .= '<meta charset="utf-8">' . PHP_EOL;
		$rtn .= '<title>' . '中英文對照表' . '</title>' . PHP_EOL;
		$rtn .= '</head>' . PHP_EOL;
		$rtn .= '<body>' . PHP_EOL;


		$rtn .= '<table>' . PHP_EOL;

		$rtn .= '	<tr>' . PHP_EOL;
		$rtn .= '		<th>' . PHP_EOL;
		$rtn .= '			英文' . PHP_EOL;
		$rtn .= '		</th>' . PHP_EOL;
		$rtn .= '		<th>' . PHP_EOL;
		$rtn .= '			中文' . PHP_EOL;
		$rtn .= '		</th>' . PHP_EOL;
		$rtn .= '	</tr>' . PHP_EOL;

		foreach ($this->_Data as $idx => $row) {

			if ($idx == 0) {
				continue;
			}

			$en_us = htmlspecialchars($row[0], ENT_QUOTES | ENT_HTML5, 'UTF-8'); // http://php.net/manual/en/function.htmlspecialchars.php
			$zh_tw = htmlspecialchars($row[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');

			$rtn .= '	<tr>' . PHP_EOL;

			$rtn .= '		<td>' . PHP_EOL;
			$rtn .= '			' . $en_us . PHP_EOL;
			$rtn .= '		</td>' . PHP_EOL;

			$rtn .= '		<td>' . PHP_EOL;
			$rtn .= '			' . $zh_tw . PHP_EOL;
			$rtn .= '		</td>' . PHP_EOL;

			$rtn .= '	</tr>' . PHP_EOL;
		}

		$rtn .= '</table>' . PHP_EOL;

		$rtn .= '</body>' . PHP_EOL;
		$rtn .= '</html>' . PHP_EOL;


		return $rtn;
	}





} // End Class
