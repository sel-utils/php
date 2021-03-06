<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java340.xml
 */
namespace sul\protocol\clientbound\java340;

use utils\Packet;

class HeldItemChange extends Packet
{

    public const ID = 58;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $slot;

    public function __constructor() {}

    public function __constructor($slot)
    {
        $this->slot = $slot;
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

