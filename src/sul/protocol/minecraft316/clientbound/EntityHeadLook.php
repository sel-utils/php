<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft316;

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

