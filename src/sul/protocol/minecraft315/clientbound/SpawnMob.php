<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft315.xml
 */
namespace sul\protocol\clientbound\minecraft315;

use utils\Packet;

class SpawnMob extends Packet
{

    public const ID = 3;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $uuid;
    public $type;
    public $position;
    public $yaw;
    public $pitch;
    public $headPitch;
    public $velocity;
    public $metadata;

    public function __constructor() {}

    public function __constructor($entityId, $uuid, $type, $position, $yaw, $pitch, $headPitch, $velocity, \sul\metadata\minecraft315\Metadata $metadata)
    {
        $this->entityId = $entityId;
        $this->uuid = $uuid;
        $this->type = $type;
        $this->position = $position;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
        $this->headPitch = $headPitch;
        $this->velocity = $velocity;
        $this->metadata = $metadata;
    }

}

