<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\serverbound\java338;

use utils\Packet;

class VehicleMove extends Packet
{

    public const ID = 16;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $position;
    public $yaw;
    public $pitch;

    public function __constructor() {}

    public function __constructor($position, $yaw, $pitch)
    {
        $this->position = $position;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
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

