<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\status\hncom1;

use utils\Packet;

class Players extends Packet
{

    public const ID = 9;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // max
    public const UNLIMITED = -1;

    public $online;
    public $max;

    public function __constructor() {}

    public function __constructor($online, $max)
    {
        $this->online = $online;
        $this->max = $max;
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
