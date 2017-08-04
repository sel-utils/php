<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\clientbound\minecraft;

use utils\Packet;

class BlockBreakAnimation extends Packet
{

    public const ID = 8;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $position;
    public $stage;

    public function __constructor() {}

    public function __constructor($entityId, $position, $stage)
    {
        $this->entityId = $entityId;
        $this->position = $position;
        $this->stage = $stage;
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

