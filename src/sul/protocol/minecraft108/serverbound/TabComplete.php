<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\serverbound\minecraft108;

use utils\Packet;

class TabComplete extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $text;
    public $command;
    public $hasPosition;
    public $block;

    public function __constructor() {}

    public function __constructor($text, $command, $hasPosition, $block)
    {
        $this->text = $text;
        $this->command = $command;
        $this->hasPosition = $hasPosition;
        $this->block = $block;
    }

}

