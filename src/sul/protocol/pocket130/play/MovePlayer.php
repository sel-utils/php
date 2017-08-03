<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket130.xml
 */
namespace sul\protocol\play\pocket130;

use utils\Packet;

class MovePlayer extends Packet
{

    public const ID = 19;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // animation
    public const FULL = 0;
    public const NONE = 1;
    public const TELEPORT = 2;
    public const PITCH = 3;

    public $entityId;
    public $position;
    public $pitch;
    public $headYaw;
    public $yaw;
    public $animation;
    public $onGround;
    public $unknown7;
    public $unknown8;
    public $unknown9;

    public function __constructor() {}

    public function __constructor($entityId, $position, $pitch, $headYaw, $yaw, $animation, $onGround, $unknown7, $unknown8, $unknown9)
    {
        $this->entityId = $entityId;
        $this->position = $position;
        $this->pitch = $pitch;
        $this->headYaw = $headYaw;
        $this->yaw = $yaw;
        $this->animation = $animation;
        $this->onGround = $onGround;
        $this->unknown7 = $unknown7;
        $this->unknown8 = $unknown8;
        $this->unknown9 = $unknown9;
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

