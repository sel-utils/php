<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java335.xml
 */
namespace sul\protocol\clientbound\java335;

use utils\Packet;

class SpawnObject extends Packet
{

    public const ID = 0;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $uuid;
    public $type;
    public $position;
    public $pitch;
    public $yaw;
    public $data;
    public $velocity;

    public function __constructor() {}

    public function __constructor($entityId, $uuid, $type, $position, $pitch, $yaw, $data, $velocity)
    {
        $this->entityId = $entityId;
        $this->uuid = $uuid;
        $this->type = $type;
        $this->position = $position;
        $this->pitch = $pitch;
        $this->yaw = $yaw;
        $this->data = $data;
        $this->velocity = $velocity;
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

