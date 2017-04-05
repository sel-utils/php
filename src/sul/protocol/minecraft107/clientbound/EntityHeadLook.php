<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class EntityHeadLook extends Packet
{

    public const ID = 52;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $headYaw;

    public function __constructor() {}

    public function __constructor($entityId, $headYaw)
    {
        $this->entityId = $entityId;
        $this->headYaw = $headYaw;
    }

}

