<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class TimeUpdate extends Packet
{

    public const ID = 68;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $worldAge;
    public $time;

    public function __constructor() {}

    public function __constructor($worldAge, $time)
    {
        $this->worldAge = $worldAge;
        $this->time = $time;
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

