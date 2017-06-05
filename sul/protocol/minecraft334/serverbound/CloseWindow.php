<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\serverbound\minecraft334;

use utils\Packet;

class CloseWindow extends Packet
{

    public const ID = 9;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $window;

    public function __constructor() {}

    public function __constructor($window)
    {
        $this->window = $window;
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

