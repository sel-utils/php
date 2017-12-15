<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class BossEvent extends Packet
{

    public const ID = 74;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // event id
    public const ADD = 0;
    public const UPDATE = 1;
    public const REMOVE = 2;

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

