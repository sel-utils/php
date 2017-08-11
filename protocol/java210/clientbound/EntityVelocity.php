<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java210.xml
 */
namespace sul\protocol\clientbound\java210;

use utils\Packet;

class EntityVelocity extends Packet
{

    public const ID = 59;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $velocity;

    public function __constructor() {}

    public function __constructor($entityId, $velocity)
    {
        $this->entityId = $entityId;
        $this->velocity = $velocity;
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

