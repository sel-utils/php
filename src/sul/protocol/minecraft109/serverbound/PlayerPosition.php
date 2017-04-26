<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\serverbound\minecraft109;

use utils\Packet;

class PlayerPosition extends Packet
{

    public const ID = 12;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $position;
    public $onGround;

    public function __constructor() {}

    public function __constructor($position, $onGround)
    {
        $this->position = $position;
        $this->onGround = $onGround;
    }

}

