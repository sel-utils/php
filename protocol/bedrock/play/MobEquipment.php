<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class MobEquipment extends Packet
{

    public const ID = 31;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $entityId;
    public $item;
    public $inventorySlot;
    public $hotbarSlot;
    public $unknown4;

    public function __constructor() {}

    public function __constructor($entityId, \sul\protocol\bedrock\types\Slot $item, $inventorySlot, $hotbarSlot, $unknown4)
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

