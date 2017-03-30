<?php
/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 */
namespace sul\utils;

class ItemData {

	/** @var bool */
	public $exists;

	/** @var int */
	public $id;

	/** @var int */
	public $meta;

	function __construct($exists, int $id, int $meta) {
		$this->exists = $exists;
		$this->id = $id;
		$this->meta = $meta;
	}

}