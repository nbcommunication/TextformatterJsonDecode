<?php namespace ProcessWire;

/**
 * ProcessWire JSON Decode Textformatter
 *
 * #pw-summary Passes the given text through json_decode(), returning the value (if valid) as a StdClass object.
 *
 * @copyright 2023 NB Communication Ltd
 * @license Mozilla Public License v2.0 http://mozilla.org/MPL/2.0/.
 *
 */

class TextformatterJsonDecode extends Textformatter {

	public static function getModuleInfo() {
		return array(
			'title' => 'JSON Decode',
			'summary' => 'Passes the given text through json_decode(), returning the value (if valid) as a StdClass object.',
			'version' => 1,
			'author' => 'nbcommunication',
			'href' => 'https://github.com/nbcommunication/TextformatterJsonDecode',
			'icon' => 'code',
		);
	}

	public function format(&$str) {
		$data = json_decode($str);
		if($data) $str = $data;
	}
}
