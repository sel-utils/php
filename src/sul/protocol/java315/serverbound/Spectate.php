<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java315.xml
 */
namespace sul\protocol\serverbound\java315;

use utils\Packet;

class Spectate extends Packet
{

    public const ID = 27;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $player;

    public function __constructor() {}

    public function __constructor($player)
    {
        $this->player = $player;
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

