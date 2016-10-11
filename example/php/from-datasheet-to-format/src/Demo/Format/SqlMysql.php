<?php

namespace Demo\Format;

class SqlMysql extends Base {

	public function render()
	{


		$rtn = '';

		$link = new mysqli("localhost", "my_user", "my_password", "demo_database");

		foreach ($this->_Data as $idx => $row) {

			if ($idx == 0) {
				continue;
			}

			$en_us = mysqli_escape_string($link, $row[0]); // http://php.net/manual/en/function.mysqli-escape-string.php
			$zh_tw = mysqli_escape_string($link, $row[1]);

			$rtn .= 'INSERT INTO demo_table (en_us, zh_tw) ';
			$rtn .= 'VALUES (';
			$rtn .= "'" . $en_us . "'";
			$rtn .= ', ';
			$rtn .= "'" . $zh_tw . "'";
			$rtn .= ');';
			$rtn .= PHP_EOL;

		}


		return $rtn;
	}





} // End Class
