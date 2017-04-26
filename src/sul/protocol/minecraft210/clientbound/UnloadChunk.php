<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft210.xml
 */
namespace sul\protocol\clientbound\minecraft210;

use utils\Packet;

class UnloadChunk extends Packet
{

    public const ID = 29;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;

    public function __constructor() {}

    public function __constructor($position)
    {
        $this->position = $position;
    }

}

