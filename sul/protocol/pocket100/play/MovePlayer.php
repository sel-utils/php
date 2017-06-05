<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket100.xml
 */
namespace sul\protocol\play\pocket100;

use utils\Packet;

class MovePlayer extends Packet
{

    public const ID = 20;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // animation
    public const FULL = 0;
    public const NONE = 1;
    public const ROTATION = 2;

    public $entityId;
    public $position;
    public $pitch;
    public $headYaw;
    public $yaw;
    public $animation;
    public $onGround;

    public function __constructor() {}

    public function __constructor($entityId, $position, $pitch, $headYaw, $yaw, $animation, $onGround)
    {
        $this->entityId = $entityId;
        $this->position = $position;
        $this->pitch = $pitch;
        $this->headYaw = $headYaw;
        $this->yaw = $yaw;
        $this->animation = $animation;
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

