<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\player\hncom1;

use utils\Packet;

class UpdatePacketLoss extends Packet
{

    public const ID = 25;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $hubId;
    public $packetLoss;

    public function __constructor() {}

    public function __constructor($hubId, $packetLoss)
    {
        $this->hubId = $hubId;
        $this->packetLoss = $packetLoss;
    }

}

