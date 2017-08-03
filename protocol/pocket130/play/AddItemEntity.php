<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket130.xml
 */
namespace sul\protocol\play\pocket130;

use utils\Packet;

class AddItemEntity extends Packet
{

    public const ID = 15;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $runtimeId;
    public $item;
    public $position;
    public $motion;
    public $metadata;

    public function __constructor() {}

    public function __constructor($entityId, $runtimeId, \sul\protocol\pocket130\types\Slot $item, $position, $motion, \sul\metadata\pocket130\Metadata $metadata)
    {
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->item = $item;
        $this->position = $position;
        $this->motion = $motion;
        $this->metadata = $metadata;
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

