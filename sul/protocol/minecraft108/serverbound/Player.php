<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\serverbound\minecraft108;

use utils\Packet;

class Player extends Packet
{

    public const ID = 15;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $onGround;

    public function __constructor() {}

    public function __constructor($onGround)
    {
        $this->onGround = $onGround;
    }

    public function getId()
    {
        return self::ID;
    }

    public function encode()
    {

    }

    public function decode()
    {}

}

