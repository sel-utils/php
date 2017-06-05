<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\unconnected\raknet;

use utils\Packet;

class Ping extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $pingId;
    public $magic;
    public $guid;

    public function __constructor() {}

    public function __constructor($pingId, $magic, $guid)
    {
        $this->pingId = $pingId;
        $this->magic = $magic;
        $this->guid = $guid;
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
