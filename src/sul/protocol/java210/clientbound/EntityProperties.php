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

class EntityProperties extends Packet
{

    public const ID = 74;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $attributes;

    public function __constructor() {}

    public function __constructor($entityId, \sul\protocol\java210\types\Attribute[] $attributes)
    {
        $this->entityId = $entityId;
        $this->attributes = $attributes;
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

