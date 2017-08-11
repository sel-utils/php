<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\clientbound\java338;

use utils\Packet;

class CombatEvent extends Packet
{

    public const ID = 45;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $eventId;

    public function __constructor() {}

    public function __constructor($eventId)
    {
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

