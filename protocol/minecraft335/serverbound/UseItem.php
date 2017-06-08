<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft335.xml
 */
namespace sul\protocol\serverbound\minecraft335;

use utils\Packet;

class UseItem extends Packet
{

    public const ID = 32;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // hand
    public const MAIN_HAND = 0;
    public const OFF_HAND = 1;

    public $hand;

    public function __constructor() {}

    public function __constructor($hand)
    {
        $this->hand = $hand;
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

