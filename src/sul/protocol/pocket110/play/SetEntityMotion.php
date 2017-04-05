<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket110.xml
 */
namespace sul\protocol\play\pocket110;

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

