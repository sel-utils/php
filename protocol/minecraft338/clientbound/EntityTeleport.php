<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\clientbound\minecraft338;

use utils\Packet;

class EntityTeleport extends Packet
{

    public const ID = 76;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $position;
    public $yaw;
    public $pitch;
    public $onGround;

    public function __constructor() {}

    public function __constructor($entityId, $position, $yaw, $pitch, $onGround)
    {
        $this->entityId = $entityId;
        $this->position = $position;
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

