<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\player\hncom;

use utils\Packet;

class UpdatePacketLoss extends Packet
{

    public const ID = 28;

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

