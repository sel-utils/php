<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock160;

use utils\Packet;

class SetHealth extends Packet
{

    public const ID = 42;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $health;

    public function __constructor() {}

    public function __constructor($health)
    {
        $this->health = $health;
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

