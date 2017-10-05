<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class EntityPickRequest extends Packet
{

    public const ID = 35;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $entityType;
    public $slot;

    public function __constructor() {}

    public function __constructor($entityType, $slot)
    {
        $this->entityType = $entityType;
        $this->slot = $slot;
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

