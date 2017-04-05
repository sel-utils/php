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

class EntityEquipment extends Packet
{

    public const ID = 60;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $slot;
    public $item;

    public function __constructor() {}

    public function __constructor($entityId, $slot, \sul\protocol\minecraft315\types\Slot $item)
    {
        $this->entityId = $entityId;
        $this->slot = $slot;
        $this->item = $item;
    }

}

