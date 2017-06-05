<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket101.xml
 */
namespace sul\protocol\play\pocket101;

use utils\Packet;

class MobEquipment extends Packet
{

    public const ID = 32;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $entityId;
    public $item;
    public $inventorySlot;
    public $hotbarSlot;
    public $unknown4;

    public function __constructor() {}

    public function __constructor($entityId, \sul\protocol\pocket101\types\Slot $item, $inventorySlot, $hotbarSlot, $unknown4)
    {
        $this->entityId = $entityId;
        $this->item = $item;
        $this->inventorySlot = $inventorySlot;
        $this->hotbarSlot = $hotbarSlot;
        $this->unknown4 = $unknown4;
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

