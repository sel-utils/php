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

class AddEntity extends Packet
{

    public const ID = 13;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $runtimeId;
    public $type;
    public $position;
    public $motion;
    public $pitch;
    public $yaw;
    public $attributes;
    public $metadata;
    public $links;

    public function __constructor() {}

    public function __constructor($entityId, $runtimeId, $type, $position, $motion, $pitch, $yaw, $attributes, \sul\metadata\pocket131\Metadata $metadata, $links)
    {
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->type = $type;
        $this->position = $position;
        $this->motion = $motion;
        $this->pitch = $pitch;
        $this->yaw = $yaw;
        $this->attributes = $attributes;
        $this->metadata = $metadata;
        $this->links = $links;
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

