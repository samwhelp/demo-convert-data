<?php

namespace Demo\Format;

class Po extends Base {

	public function render()
	{

		//簡易實做，不見得符合標準，請參考
		//https://zh.wikipedia.org/zh-tw/Gettext
		//https://en.wikipedia.org/wiki/Gettext
		//https://www.gnu.org/software/gettext/manual/html_node/PO-Files.html#PO-Files
		//https://www.gnu.org/software/gettext/manual/index.html
		//https://www.gnu.org/software/gettext/gettext.html
		//http://packages.ubuntu.com/source/xenial/language-pack-gnome-zh-hant-base

		$rtn = '';

		$rtn .= '# Chinese (Traditional) translation for uncode-block-name' . PHP_EOL;
		$rtn .= '#' . PHP_EOL;
		$rtn .= 'msgid ""' . PHP_EOL;
		$rtn .= 'msgstr ""' . PHP_EOL;
		$rtn .= '"Project-Id-Version: uncode-block-name\n"' . PHP_EOL;
		$rtn .= '"Report-Msgid-Bugs-To: FULL NAME <EMAIL@ADDRESS>\n"' . PHP_EOL;
		$rtn .= '"POT-Creation-Date: 2016-10-08 12:05+0800\n"' . PHP_EOL;
		$rtn .= '"PO-Revision-Date: ' . date("Y-m-d H:i") . '+0800\n"' . PHP_EOL;
		$rtn .= '"Last-Translator: Test <test@email.home>\n"' . PHP_EOL;
		$rtn .= '"Language-Team: Chinese (Traditional) <test@email.home>\n"' . PHP_EOL;
		$rtn .= '"MIME-Version: 1.0\n"' . PHP_EOL;
		$rtn .= '"Content-Type: text/plain; charset=UTF-8\n"' . PHP_EOL;
		$rtn .= '"Content-Transfer-Encoding: 8bit\n"' . PHP_EOL;
		$rtn .= '"X-Generator: php (build 1)\n"' . PHP_EOL;
		$rtn .= '"Language: zh_TW\n"' . PHP_EOL;

		$rtn .= PHP_EOL;

		foreach ($this->_Data as $idx => $row) {

			if ($idx == 0) {
				continue;
			}

			$en_us = addcslashes($row[0], '"'); // http://php.net/manual/en/function.addcslashes.php
			$zh_tw = addcslashes($row[1], '"');

			$rtn .= 'msgid ';
			$rtn .= '"' . $en_us . '"';
			$rtn .= PHP_EOL;

			$rtn .= 'msgstr ';
			$rtn .= '"' . $zh_tw . '"';
			$rtn .= PHP_EOL;

			$rtn .= PHP_EOL;

		}

		return $rtn;
	}





} // End Class
