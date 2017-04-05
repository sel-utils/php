<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft316;

use utils\Packet;

class SpawnPlayer extends Packet
{

    public const ID = 5;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $uuid;
    public $position;
    public $yaw;
    public $pitch;
    public $metadata;

    public function __constructor() {}

    public function __constructor($entityId, $uuid, $position, $yaw, $pitch, \sul\metadata\minecraft316\Metadata $metadata)
    {
        $this->entityId = $entityId;
        $this->uuid = $uuid;
        $this->position = $position;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
        $this->metadata = $metadata;
    }

}

