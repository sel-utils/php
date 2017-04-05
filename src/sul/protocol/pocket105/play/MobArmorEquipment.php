<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class MobArmorEquipment extends Packet
{

    public const ID = 33;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $entityId;
    public $armor;

    public function __constructor() {}

    public function __constructor($entityId, $armor)
    {
        $this->entityId = $entityId;
        $this->armor = $armor;
    }

}

