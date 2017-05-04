<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\serverbound\minecraft108;

use utils\Packet;

class SteerVehicle extends Packet
{

    public const ID = 21;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // flags
    public const JUMP = 1;
    public const UNMOUNT = 2;

    public $sideways;
    public $forward;
    public $flags;

    public function __constructor() {}

    public function __constructor($sideways, $forward, $flags)
    {
        $this->sideways = $sideways;
        $this->forward = $forward;
        $this->flags = $flags;
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

