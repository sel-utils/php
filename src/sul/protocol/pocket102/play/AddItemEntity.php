<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class AddItemEntity extends Packet
{

    public const ID = 16;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $runtimeId;
    public $item;
    public $position;
    public $motion;

    public function __constructor() {}

    public function __constructor($entityId, $runtimeId, \sul\protocol\pocket102\types\Slot $item, $position, $motion)
    {
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->item = $item;
        $this->position = $position;
        $this->motion = $motion;
    }

}

