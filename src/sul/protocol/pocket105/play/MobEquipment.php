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

class MobEquipment extends Packet
{

    public const ID = 32;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $entityId;
    public $item;
    public $inventorySlot;
    public $hotbarSlot;
    public $?;

    public function __constructor() {}

    public function __constructor($entityId, \sul\protocol\pocket105\types\Slot $item, $inventorySlot, $hotbarSlot, $?)
    {
        $this->entityId = $entityId;
        $this->item = $item;
        $this->inventorySlot = $inventorySlot;
        $this->hotbarSlot = $hotbarSlot;
        $this->? = $?;
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

