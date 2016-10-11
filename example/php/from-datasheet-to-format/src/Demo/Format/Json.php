<?php

namespace Demo\Format;

class Json extends Base {

	public function render()
	{

		$list = array();

		foreach ($this->_Data as $idx => $row) {

			if ($idx == 0) {
				continue;
			}

			$item = array();
			$item['en_US'] = $row[0];
			$item['zh_TW'] = $row[1];

			array_push($list, $item);
			//$list[] = $item;


		}

		//var_dump($list);

		//http://php.net/manual/en/function.json-encode.php

		//$rtn = json_encode($list);
		//$rtn = json_encode($list, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
		$rtn = json_encode($list, JSON_UNESCAPED_UNICODE);



		return $rtn;
	}





} // End Class
