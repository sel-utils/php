<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock137;

use utils\Packet;

class SetTime extends Packet
{

    public const ID = 10;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $time;

    public function __constructor() {}

    public function __constructor($time)
    {
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

