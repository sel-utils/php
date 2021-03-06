<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java316.xml
 */
namespace sul\protocol\clientbound\java316;

use utils\Packet;

class ServerDifficulty extends Packet
{

    public const ID = 13;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // difficulty
    public const PEACEFUL = 0;
    public const EASY = 1;
    public const NORMAL = 2;
    public const HARD = 3;

    public $difficulty;

    public function __constructor() {}

    public function __constructor($difficulty)
    {
        $this->difficulty = $difficulty;
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

