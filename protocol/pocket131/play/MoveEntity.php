<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket131.xml
 */
namespace sul\protocol\play\pocket131;

use utils\Packet;

class MoveEntity extends Packet
{

    public const ID = 18;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $position;
    public $pitch;
    public $headYaw;
    public $yaw;
    public $onGround;
    public $teleported;

    public function __constructor() {}

    public function __constructor($entityId, $position, $pitch, $headYaw, $yaw, $onGround, $teleported)
    {
        $this->entityId = $entityId;
        $this->position = $position;
        $this->pitch = $pitch;
        $this->headYaw = $headYaw;
        $this->yaw = $yaw;
        $this->onGround = $onGround;
        $this->teleported = $teleported;
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

