<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft333.xml
 */
namespace sul\protocol\clientbound\minecraft333;

use utils\Packet;

class WindowItems extends Packet
{

    public const ID = 20;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $slots;

    public function __constructor() {}

    public function __constructor($window, \sul\protocol\minecraft333\types\Slot[] $slots)
    {
        $this->window = $window;
        $this->slots = $slots;
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

