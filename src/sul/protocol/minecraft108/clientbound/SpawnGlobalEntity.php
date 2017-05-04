<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\clientbound\minecraft108;

use utils\Packet;

class SpawnGlobalEntity extends Packet
{

    public const ID = 2;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // type
    public const THUNDERBOLT = 1;

    public $entityId;
    public $type;
    public $position;

    public function __constructor() {}

    public function __constructor($entityId, $type, $position)
    {
        $this->entityId = $entityId;
        $this->type = $type;
        $this->position = $position;
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

