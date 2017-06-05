<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\util\hncom2;

use utils\Packet;

class Uncompressed extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $packets;

    public function __constructor() {}

    public function __constructor($packets)
    {
        $this->packets = $packets;
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

