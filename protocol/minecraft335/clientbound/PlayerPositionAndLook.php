<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft335.xml
 */
namespace sul\protocol\clientbound\minecraft335;

use utils\Packet;

class PlayerPositionAndLook extends Packet
{

    public const ID = 46;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // flags
    public const X = 1;
    public const Y = 2;
    public const Z = 4;
    public const Y_ROTATION = 8;
    public const X_ROTATION = 16;

    public $position;
    public $yaw;
    public $pitch;
    public $flags;
    public $teleportId;

    public function __constructor() {}

    public function __constructor($position, $yaw, $pitch, $flags, $teleportId)
    {
        $this->position = $position;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
        $this->flags = $flags;
        $this->teleportId = $teleportId;
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

