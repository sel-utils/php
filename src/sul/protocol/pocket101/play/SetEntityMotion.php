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

class SetEntityMotion extends Packet
{

    public const ID = 40;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $motion;

    public function __constructor() {}

    public function __constructor($entityId, $motion)
    {
        $this->entityId = $entityId;
        $this->motion = $motion;
    }

}

