<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock150.xml
 */
namespace sul\protocol\play\bedrock150;

use utils\Packet;

class AddPlayer extends Packet
{

    public const ID = 12;

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
    public $unknown11;
    public $unknown12;
    public $unknown13;
    public $unknown14;
    public $unknown15;
    public $unknown16;
    public $links;

    public function __constructor() {}

    public function __constructor(\sul\protocol\bedrock150\types\McpeUuid $uuid, $username, $entityId, $runtimeId, $position, $motion, $pitch, $headYaw, $yaw, \sul\protocol\bedrock150\types\Slot $heldItem, \sul\metadata\bedrock150\Metadata $metadata, $unknown11, $unknown12, $unknown13, $unknown14, $unknown15, $unknown16, $links)
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
        $this->unknown11 = $unknown11;
        $this->unknown12 = $unknown12;
        $this->unknown13 = $unknown13;
        $this->unknown14 = $unknown14;
        $this->unknown15 = $unknown15;
        $this->unknown16 = $unknown16;
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

