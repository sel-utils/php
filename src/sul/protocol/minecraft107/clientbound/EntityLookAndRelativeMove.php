<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class EntityLookAndRelativeMove extends Packet
{

    public const ID = 38;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $delta;
    public $yaw;
    public $pitch;
    public $onGround;

    public function __constructor() {}

    public function __constructor($entityId, $delta, $yaw, $pitch, $onGround)
    {
        $this->entityId = $entityId;
        $this->delta = $delta;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
        $this->onGround = $onGround;
    }

}

