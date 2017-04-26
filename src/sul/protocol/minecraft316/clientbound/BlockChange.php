<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft316;

use utils\Packet;

class BlockChange extends Packet
{

    public const ID = 11;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $block;

    public function __constructor() {}

    public function __constructor($position, $block)
    {
        $this->position = $position;
        $this->block = $block;
    }

}

