<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class AddHangingEntity extends Packet
{

    public const ID = 17;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $runtimeId;
    public $position;
    public $?;

    public function __constructor() {}

    public function __constructor($entityId, $runtimeId, \sul\protocol\pocket102\types\BlockPosition $position, $?)
    {
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->position = $position;
        $this->? = $?;
    }

}

