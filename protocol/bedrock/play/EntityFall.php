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

class EntityFall extends Packet
{

    public const ID = 37;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $entityId;
    public $distance;
    public $unknown2;

    public function __constructor() {}

    public function __constructor($entityId, $distance, $unknown2)
    {
        $this->entityId = $entityId;
        $this->distance = $distance;
        $this->unknown2 = $unknown2;
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

