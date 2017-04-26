<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class AddPlayer extends Packet
{

    public const ID = 13;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $uuid;
    public $username;
    public $entityId;
    public $runtimeId;
    public $position;
    public $motion;
    public $pitch;
    public $headYaw;
    public $yaw;
    public $heldItem;
    public $metadata;

    public function __constructor() {}

    public function __constructor($uuid, $username, $entityId, $runtimeId, $position, $motion, $pitch, $headYaw, $yaw, \sul\protocol\pocket105\types\Slot $heldItem, \sul\metadata\pocket105\Metadata $metadata)
    {
        $this->uuid = $uuid;
        $this->username = $username;
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->position = $position;
        $this->motion = $motion;
        $this->pitch = $pitch;
        $this->headYaw = $headYaw;
        $this->yaw = $yaw;
        $this->heldItem = $heldItem;
        $this->metadata = $metadata;
    }

}

