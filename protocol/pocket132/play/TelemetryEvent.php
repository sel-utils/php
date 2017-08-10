<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket132.xml
 */
namespace sul\protocol\play\pocket132;

use utils\Packet;

class TelemetryEvent extends Packet
{

    public const ID = 65;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $eventId;

    public function __constructor() {}

    public function __constructor($entityId, $eventId)
    {
        $this->entityId = $entityId;
        $this->eventId = $eventId;
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

