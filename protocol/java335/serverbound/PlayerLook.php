<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java335.xml
 */
namespace sul\protocol\serverbound\java335;

use utils\Packet;

class PlayerLook extends Packet
{

    public const ID = 16;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $yaw;
    public $pitch;
    public $onGround;

    public function __constructor() {}

    public function __constructor($yaw, $pitch, $onGround)
    {
        $this->yaw = $yaw;
        $this->pitch = $pitch;
        $this->onGround = $onGround;
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

