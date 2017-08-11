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

class DestroyEntities extends Packet
{

    public const ID = 48;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityIds;

    public function __constructor() {}

    public function __constructor($entityIds)
    {
        $this->entityIds = $entityIds;
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

