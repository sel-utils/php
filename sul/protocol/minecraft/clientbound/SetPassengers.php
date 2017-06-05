<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft;

use utils\Packet;

class SetPassengers extends Packet
{

    public const ID = 64;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $passengers;

    public function __constructor() {}

    public function __constructor($entityId, $passengers)
    {
        $this->entityId = $entityId;
        $this->passengers = $passengers;
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

