<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock160;

use utils\Packet;

class RemoveEntity extends Packet
{

    public const ID = 14;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;

    public function __constructor() {}

    public function __constructor($entityId)
    {
        $this->entityId = $entityId;
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

